<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class BaselinesResultsModel extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('baselines_results');
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
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = array_unique($org_list);

        $properties = $resp->meta->properties;
        $properties[] = 'baselines.name AS `baselines.name`';
        $this->builder->select($properties, false);
        $this->builder->join('baselines', 'baselines_results.baseline_id = baselines.id', 'left');

        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->whereIn('baselines.org_id', $org_list);
        $this->builder->orderBy($resp->meta->sort);
        if (!empty($resp->meta->groupby)) {
            $this->builder->groupBy($resp->meta->groupby);
        }
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        log_message('error', 'SQL: ' . str_replace("\n", " ", (string)$this->db->getLastQuery()));
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'baselines_results');
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
        return null;
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
        return array();
    }

    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function listUser($where = array()): array
    {
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list[] = 1;
        $org_list = array_unique($org_list);

        $properties = array();
        $properties[] = 'baselines_results.*';
        $properties[] = 'baselines.name AS `baselines.name`';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'baselines_results.org_id = orgs.id', 'left');
        $this->builder->join('baselines', 'baselines_results.baseline_id = baselines.id', 'left');
        $this->builder->whereIn('orgs.id', $org_list);
        if (!empty($where[0]) and !empty($where[1])) {
            $this->builder->where($where[0], $where[1]);
        }
        if (!empty($where[2]) and !empty($where[3])) {
            $this->builder->where($where[2], $where[3]);
        }
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'baselines_results');
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
        // $query = $this->builder->getWhere(['id' => intval($id)]);
        // if ($this->sqlError($this->db->error())) {
        //     return array();
        // }
        // return format_data($query->getResult(), 'baselines_results');

        $properties = array();
        $properties[] = 'baselines_results.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $properties[] = 'orgs.id as `orgs.id`';
        $properties[] = 'baselines.name as `baselines.name`';
        $properties[] = 'baselines.id as `baselines.id`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'baselines_results.org_id = orgs.id', 'left');
        $this->builder->join('baselines', 'baselines_results.baseline_id = baselines.id', 'left');
        $query = $this->builder->getWhere(['baselines_results.id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'baselines_results');

    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        return true;
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

        $collection = 'baselines_results';
        $dictionary = new \StdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new \StdClass();

        $dictionary->attributes = new \StdClass();
        $dictionary->attributes->collection = array();
        $dictionary->attributes->create = array(); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = array(); # $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = array(); # $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = array(); # $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->about = '';

        $dictionary->notes = '';

        $dictionary->product = 'enterprise';
        $dictionary->columns->baseline = 'The associated baseline this result is from.';
        $dictionary->columns->timestamp = 'The date/time when this result was created.';
        $dictionary->columns->group = 'The group of devices on which the baseline was run against.';
        $dictionary->columns->devices = 'The number of devices in the associated group.';
        $dictionary->columns->pass = 'How many policies results in a pass.';
        $dictionary->columns->fail = 'How many policies results in a fail.';
        $dictionary->columns->{'tests.operator'} = 'How to compare';
        return $dictionary;
    }
}
