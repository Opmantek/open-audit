<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class VulnerabilitiesModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('vulnerabilities');
    }

    /**
     * Read the collection from the database
     *
     * @param  $resp object An object containing the properties, filter, sort and limit as passed by the user
     *
     * @return array        An array of formatted entries
     */
    public function collection(object $resp): array
    {
        $properties = $resp->meta->properties;
        $properties[] = "orgs.name as `orgs.name`";
        $properties[] = "orgs.id as `orgs.id`";
        $properties[] = "'' AS `count`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        $status = true;
        foreach ($resp->meta->filter as $filter) {
            if ($filter->name === 'vulnerabilities.status' or $filter->name === 'status') {
                $status = false;
            }
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        if ($status) {
            $this->builder->whereIn('status', ['confirmed', 'pending', 'other', '']);
        }
        $this->builder->orderBy($resp->meta->sort);
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $query->getResult();
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = array_unique($org_list);
        #$org_list = [1,2,3];
        // Build the SQL and execute it for any with a status of enabled
        foreach ($result as $row) {
            if (!empty($row->status) and $row->status === 'confirmed') {
                if (empty($row->sql)) {
                    $builder = $this->generateQuery($row);
                    if (!empty($builder)) {
                        $builder->whereIn('devices.org_id', [$org_list]);
                        $get_rows = $builder->get();
                        $result_rows = $get_rows->getResult();
                        $row->count = count($result_rows);
                    }
                } else {
                    $org_list = implode(',', $org_list);
                    $row->sql = str_ireplace(' devices.org_id = @filter', " devices.org_id IN ({$org_list})", $row->sql);
                    $result_rows = $this->db->query($row->sql)->getResult();
                    $row->count = count($result_rows);
                }
            }
            log_message('debug', 'SQL: ' . str_replace("\n", " ", (string)$this->db->getLastQuery()) . "\n");
        }
        return format_data($result, $resp->meta->collection);
    }

    public function generateQuery($vulnerability): ?\CodeIgniter\Database\MySQLi\Builder
    {
        helper('components');
        $db = db_connect();
        $builder = $db->table('devices');
        if (empty($vulnerability->sql) and empty($vulnerability->filter)) {
            return null;
        }
        if (!empty($vulnerability->filter) and is_string($vulnerability->filter)) {
            $vulnerability->filter = json_decode($vulnerability->filter);
        }
        if (empty($vulnerability->filter)) {
            log_message('warning', 'Could not decode JSON filter for ' . $vulnerability->name . '.');
            return null;
        }
        $properties = array();
        $properties[] = 'devices.id AS `devices.id`';
        $properties[] = 'devices.name AS `devices.name`';
        $properties[] = 'devices.org_id AS `devices.org_id`';
        $properties[] = 'orgs.name AS `orgs.name`';
        $where = array();
        foreach ($vulnerability->filter as $filter) {
            if ($filter->type === 'software') {
                $builder->join('software', 'software.device_id = devices.id', 'left');
                $where['software.current'] = 'y';
                $where['software.name'] = $filter->name;
                $properties[] = 'software.name AS `software.name`';
                $properties[] = 'software.version AS `software.version`';
                if (in_array($filter->operator, ['eq', 'ne', 'ge', 'le', 'gt', 'lt', 'like', 'not like'])) {
                    switch ($filter->operator) {
                        case 'eq':
                            $where['software.version'] = $filter->version;
                            break;

                        case 'ne':
                            $where['software.version !='] = $filter->version;
                            break;

                        case 'ge':
                            $filter->version = version_padded($filter->version);
                            $where['software.version_padded >='] = $filter->version;
                            break;

                        case 'le':
                            $filter->version = version_padded($filter->version);
                            $where['software.version_padded <='] = $filter->version;
                            break;

                        case 'gt':
                            $filter->version = version_padded($filter->version);
                            $where['software.version_padded >'] = $filter->version;
                            break;

                        case 'lt':
                            $filter->version = version_padded($filter->version);
                            $where['software.version_padded <'] = $filter->version;
                            break;

                        case 'like':
                            $where['software.version LIKE'] = $filter->version;
                            break;

                        case 'not like':
                            $where['software.version NOT LIKE'] = $filter->version;
                            break;

                        default:
                            // nothing
                            break;
                    }
                }
            }

            if ($filter->type === 'devices') {
                if (in_array($filter->operator, ['eq', 'ne', 'ge', 'le', 'gt', 'lt', 'like', 'not like'])) {
                    switch ($filter->operator) {
                        case 'eq':
                            $where['devices.' . $filter->name] = $filter->version;
                            break;

                        case 'ne':
                            $where['devices.' . $filter->name . ' !='] = $filter->version;
                            break;

                        case 'ge':
                            #$filter->version = version_padded($filter->version);
                            $where['devices.' . $filter->name . ' >='] = $filter->version;
                            break;

                        case 'le':
                            #$filter->version = version_padded($filter->version);
                            $where['devices.' . $filter->name . ' <='] = $filter->version;
                            break;

                        case 'gt':
                            #$filter->version = version_padded($filter->version);
                            $where['devices.' . $filter->name . ' >'] = $filter->version;
                            break;

                        case 'lt':
                            #$filter->version = version_padded($filter->version);
                            $where['devices.' . $filter->name . ' <'] = $filter->version;
                            break;

                        case 'like':
                            $where['devices.' . $filter->name . ' LIKE'] = $filter->version;
                            break;

                        case 'not like':
                            $where['devices.' . $filter->name . ' NOT LIKE'] = $filter->version;
                            break;

                        default:
                            // nothing
                            break;
                    }
                }
            }
        }
        $builder->select($properties, false);
        $builder->join('orgs', 'devices.org_id = orgs.id', 'left');
        $builder->where($where);
        return $builder;
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null): ?int
    {
        if (empty($data)) {
            return null;
        }
        $data = $this->createFieldData('vulnerabilities', $data);
        if (empty($data)) {
            return null;
        }
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return null;
        }
        return (intval($this->db->insertID()));
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return bool    true || false depending on success
     */
    public function delete($id = null, bool $purge = false): bool
    {
        $this->builder->delete(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        if ($this->db->affectedRows() !== 1) {
            return false;
        }
        return true;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = array_unique($org_list);

        $vulnerability = $this->builder->get(1)->getResult()[0];
        if (empty($vulnerability->sql)) {
            $builder = $this->generateQuery($vulnerability);
            $builder->whereIn('devices.org_id', $org_list);
            $devices = $builder->get()->getResult();
        } else {
            $org_list = implode(',', $org_list);
            $vulnerability->sql = str_ireplace(' devices.org_id = @filter', " devices.org_id IN ({$org_list})", $vulnerability->sql);
            $devices = $this->db->query($vulnerability->sql)->getResult();
        }
        $return = array();
        $return['devices'] = format_data($devices, 'devices');
        return $return;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
    }

    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        if (empty($orgs)) {
            $instance = & get_instance();
            $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
            $orgs[] = 1;
            $orgs = array_unique($orgs);
        }

        $properties = array();
        $properties[] = 'vulnerabilities.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'vulnerabilities.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'vulnerabilities');
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all entries
     */
    public function listAll(): array
    {
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query->getResult();
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return array   The array containing the requested item
     */
    public function read(int $id = 0): array
    {
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $item = $query->getResult();
        $item[0]->firstwave = json_decode($item[0]->firstwave_raw);
        $item[0]->cve_record = json_decode($item[0]->cve_raw);
        $item[0]->filter = json_decode($item[0]->filter);
        if (empty($item[0]->sql)) {
            $builder = $this->generateQuery($item[0]);
            $builder->where('devices.org_id', '@filter', false);
            $item[0]->sql = str_replace("\n", " ", (string)$builder->getCompiledSelect(false));
        }
        return format_data($item, 'vulnerabilities');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('vulnerabilities')) {
            return true;
        }
        return false;
    }

    /**
     * Update an individual item in the database
     *
     * @param  object  $data The data attributes
     *
     * @return bool    true || false depending on success
     */
    public function update($id = null, $data = null): bool
    {
        // Accept our client data
        $data = $this->updateFieldData('vulnerabilities', $data);
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'vulnerabilities';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'cve', 'name', 'published', 'count', 'status');
        $dictionary->attributes->create = array('name', 'org_id', 'cve'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Vulnerabilities reporting based on the NIST CVE feed.';

        $dictionary->about = '<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>';

        $dictionary->notes = '';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->cve  = 'The CVE identifier.';
        $dictionary->columns->published  = 'Date the CVE was published.';
        $dictionary->columns->cve_raw  = 'The JSON straight from the NIST CVE feed.';
        $dictionary->columns->firstwave_raw  = 'Firstwave enriched JSON.';
        $dictionary->columns->other_raw  = 'Other sourced JSON.';
        $dictionary->columns->sql  = 'The generated (or manually overridden) SQL to test for this vulnerability.';
        $dictionary->columns->filter  = 'A JSON array of values to test for this vulnerability.';
        $dictionary->columns->status  = 'Should we display this in the list of Vulberabilities.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;

        $dictionary->columns->severity = '';
        $dictionary->columns->availability = '';
        $dictionary->columns->confidentiality = '';
        $dictionary->columns->integrity = '';
        return $dictionary;
    }
}
