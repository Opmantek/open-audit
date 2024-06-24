<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use \stdClass;

class BenchmarksExceptionsModel extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('benchmarks_exceptions');
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
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<'])) {
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

        // Remove any existing results using this external_ident
        $sql = "DELETE FROM benchmarks_result WHERE external_ident = ?";
        $this->db->query($sql, [$data->external_ident]);

        $data = $this->createFieldData('benchmarks_exceptions', $data);
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
     * Run the SQL definition and return the provided properties or the devices.id list
     * @param  integer $id The ID of the group
     * @return array       An array of standard formatted devices, or an empty array
     */
    public function execute(int $id = 0, object $user = null): array
    {
        $instance = & get_instance();
        $properties = $instance->config->devices_default_group_columns;
        $result = $this->builder->getWhere(['id' => intval($id)])->getResult();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        if (empty($result)) {
            log_message('error', 'Failed to retrieve group');
            return array();
        }
        $group = $result[0];
        $sql = trim((string)$group->sql);
        if (strpos($sql, ';') === strlen($sql)-1) {
            $sql = substr($sql, 0, strlen($sql)-1);
            $sql = trim((string)$sql);
        }
        $properties_array = explode(',', $properties);
        $properties_new_array = array();
        foreach ($properties_array as $property) {
            $properties_new_array[] = "{$property} AS `{$property}`";
        }
        $properties = implode(', ', $properties_new_array);
        $sql = str_ireplace('SELECT DISTINCT(devices.id) FROM devices', "SELECT {$properties} FROM devices", $sql);
        $filter = "devices.org_id IN ({$user->org_list})";
        $sql = str_ireplace('WHERE @filter', "WHERE {$filter}", $sql);
        if (!empty($instance->resp->meta->groupby)) {
            $sql = $sql . ' ' . $instance->resp->meta->groupby;
        }
        if (!empty($instance->resp->meta->sort)) {
            $sql = $sql . ' ' . $instance->resp->meta->sort;
        }
        if (!empty($instance->resp->meta->limit)) {
            $sql = $sql . ' LIMIT ' . $instance->resp->meta->limit;
        }
                
        $query = $this->db->query($sql);
        // log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
        $result = format_data($query->getResult(), 'devices');
        return $result;
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
            $orgs = array_unique(array_merge($orgs, $instance->orgsModel->getUserAscendants($instance->user->orgs, $instance->orgs)));
            $orgs[] = 1;
            $orgs = array_unique($orgs);
        }

        $properties = array();
        $properties[] = 'benchmarks_exceptions.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'benchmarks_exceptions.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'benchmarks_exceptions');
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
        return format_data($query->getResult(), 'benchmarks_exceptions');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('benchmarks_exceptions')) {
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
        $data = $this->updateFieldData('benchmarks_exceptions', $data);
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

        $collection = 'benchmarks_exceptions';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'external_ident', 'benchmarks', 'devices');
        $dictionary->attributes->create = array('org_id', 'external_ident', 'benchmarks', 'devices');
        $dictionary->attributes->fields = $this->db->getFieldNames($collection);
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection);
        $dictionary->attributes->update = $this->updateFields($collection);

        $dictionary->sentence = '';

        $dictionary->about = '<p><br /><br /></p>';

        $dictionary->notes = '<p><br /><br /></p>';

        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->external_ident = 'The ID from the imported benchmark policy.';
        $dictionary->columns->benchmarks = 'An array of <code>benchmarks.id</code>.';
        $dictionary->columns->devices = 'An array of <code>devices.id</code>.';
        $dictionary->columns->exception_reason = 'Why do we exclude this policy?';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
