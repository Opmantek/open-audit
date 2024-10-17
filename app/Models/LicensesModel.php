<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class LicensesModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('licenses');
        # Use the below to execute BaseModel::__construct
        # parent::__construct();
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
        $data = $this->createFieldData('licenses', $data);
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
        $include = array();
        $query = $this->builder->getWhere(['id' => intval($id)]);
        $result = $query->getResult();
        if (empty($result)) {
            log_message('error', 'No matching license found');
            return false;
        } else {
            $license = $result[0];
        }
        $sql = "SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, software.name AS `software.name`, software.version AS `software.version` FROM devices LEFT JOIN software ON (devices.id = software.device_id AND software.current = 'y') WHERE software.name LIKE ?";
        $query = $this->db->query($sql, [$license->match_string]);
        $include['devices'] = format_data($query->getResult(), 'devices');
        return ($include);
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
        $properties[] = 'licenses.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'licenses.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'licenses');
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
        $instance = & get_instance();
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $query->getResult();
        if ($result[0]->org_descendants === 'n') {
            $sql = "SELECT count(software.name) AS `count` FROM devices LEFT JOIN software ON (devices.id = software.device_id AND software.current = 'y') WHERE devices.org_id = ? AND software.name LIKE ?";
            $data_result = $this->db->query($sql, [$result[0]->org_id, $result[0]->match_string])->getResult();
            if (!empty($data_result[0]->count)) {
                $result[0]->used_count = $data_result[0]->count;
            }
            unset($sql, $data, $data_result);
        } else {
            $children = $instance->orgsModel->getUserDescendants([$result[0]->org_id]);
            #$children = $CI->m_orgs->get_children($result[0]->org_id);
            $children[] = $result[0]->org_id;
            $children = implode(',', $children);
            $sql = "SELECT count(software.name) AS `count` FROM devices LEFT JOIN software ON (devices.id = software.device_id AND software.current = 'y') WHERE devices.org_id IN ({$children}) AND software.name LIKE ?";
            $data_result = $this->db->query($sql, [$result[0]->match_string])->getResult();
            if (!empty($data_result[0]->count)) {
                $result[0]->used_count = $data_result[0]->count;
            }
            unset($sql, $data, $data_result);
        }
        return format_data($result, 'licenses');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('licenses')) {
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
        $data = $this->updateFieldData('licenses', $data);
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

        $collection = 'licenses';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','org_descendants','purchase_count','match_string');
        $dictionary->attributes->fields = $this->db->getFieldNames($collection);
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection);
        $dictionary->attributes->update = $this->updateFields($collection);

        $dictionary->sentence = 'Track your installed software, quickly and easily.';

        $dictionary->about = '<p>The license endpoint allows you to track the number of licenses found on your devices.<br /><br />To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '<p>You can use the percent % sign as a wildcard in the match_string.<br /><br /></p>';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->org_descendants = 'Should we apply this license to the selected Org as well as the Orgs children?';
        $dictionary->columns->purchase_count = 'The number of purchased licenses.';
        $dictionary->columns->used_count = 'A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).';
        $dictionary->columns->match_string = 'A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.';
        $dictionary->columns->software_name = 'Your generic name for this piece of software';
        $dictionary->columns->software_version = 'Your generic version for this piece of software';
        $dictionary->columns->sql = 'Unused.';
        $dictionary->columns->expiry_date = 'For licenses that are not perpetual, when does the license expire.';
        $dictionary->columns->end_of_life = 'The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.';
        $dictionary->columns->end_of_service_life = 'The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
