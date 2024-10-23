<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class PackagesModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('packages');
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
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->orderBy($resp->meta->sort);
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), $resp->meta->collection);
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
        $data = $this->createFieldData('packages', $data);
        if (empty($data)) {
            return null;
        }
        if (empty($data->sql)) {
            $data->sql = '';
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
        return array();
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedCreateForm(int $id = 0): array
    {
        $return = array();
        $return['software'] = array();
        if (!empty($_GET['os']) or !empty($_GET['range'])) {
            $instance = & get_instance();
            $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
            $orgs[] = 1;
            $orgs = array_unique($orgs);

            $range_filter = '';
            if (!empty($_GET['range'])) {
                log_message('debug', 'RANGE: ' . json_encode($_GET['range']));
                $range = explode(',', $_GET['range']);
                $range_filter = 'AND SUBSTRING(software.name, 1, 1) IN (';
                foreach ($range as $firstLetter) {
                    $firstLetter = substr($firstLetter, 0, 1);
                    $firstLetter = preg_replace("/[^A-Za-z0-9]+/", "", $firstLetter);
                    if (!empty($firstLetter)) {
                        $range_filter .= "'$firstLetter', ";
                    }
                }
                $range_filter = substr($range_filter, 0, -2) . ') ';
            }

            if (!empty($_GET['os'])) {
                $sql = "SELECT DISTINCT software.name AS `name`, CONCAT('[', GROUP_CONCAT(DISTINCT CONCAT(JSON_OBJECT(packages.type, packages.id))), ']') AS `type`, packages.software_name AS `software_name`, count(software.id) AS `found`, packages.id AS `id` FROM `software` LEFT JOIN `devices` ON (software.device_id = devices.id) LEFT JOIN packages ON (software.name LIKE packages.software_name) WHERE devices.org_id IN (" . implode(',', $orgs) . ") AND devices.os_group = ? $range_filter GROUP BY software.name, software.type ORDER BY software.name";
                $return['software'] = $this->db->query($sql, [$_GET['os']])->getResult();
            } else {
                $sql = "SELECT DISTINCT software.name AS `name`, CONCAT('[', GROUP_CONCAT(DISTINCT CONCAT(JSON_OBJECT(packages.type, packages.id))), ']') AS `type`, packages.software_name AS `software_name`, count(software.id) AS `found`, packages.id AS `id` FROM `software` LEFT JOIN `devices` ON (software.device_id = devices.id) LEFT JOIN packages ON (software.name LIKE packages.software_name) WHERE devices.org_id IN (" . implode(',', $orgs) . ") $range_filter GROUP BY software.name, software.type ORDER BY software.name";
                $return['software'] = $this->db->query($sql)->getResult();
            }

            log_message('debug', (string)$this->db->getLastQuery());
        }
        return $return;
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
        $properties[] = 'packages.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'packages.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'packages');
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
        return format_data($query->getResult(), 'packages');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('packages')) {
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
        $data = $this->updateFieldData('packages', $data);
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

        $collection = 'packages';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'type', 'software_name', 'os', 'description', 'orgs.name', 'edited_by', 'edited_date');
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Software Package are for ...';

        $dictionary->about = '<p>Software Packages are good.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '';

        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->org_descendants  = 'Does the license apply to child Orgs.';
        $dictionary->columns->purchase_count  = 'The number of purchased licenses.';
        $dictionary->columns->used_count  = 'Populated dynamically.';
        $dictionary->columns->match_string  = 'Unused.';
        $dictionary->columns->software_name  = 'The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.';
        $dictionary->columns->software_version  = 'Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.';
        $dictionary->columns->expiry_date  = 'The date of license expiration.';
        $dictionary->columns->end_of_life  = 'The software end-of-life date.';
        $dictionary->columns->end_of_service_life  = 'The software end-of-service-life date.';
        $dictionary->columns->type  = 'One of: antivirus, backup, firewall, approved, banned, ignored or other.';
        $dictionary->columns->os  = 'The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.';
        $dictionary->columns->sql  = 'Unused.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
