<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class BaselinesResultsModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'baselines_results' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('baselines_results');
    }

    /**
     * Read the collection from the database
     *
     * @param  object $resp An object containing the properties, filter, sort and limit as passed by the user
     *
     * @return array        An array of formatted entries
     */
    public function collection(object $resp): array
    {
        $properties = $resp->meta->properties;
        $properties[] = 'baselines.id AS `baselines.id`';
        $properties[] = 'baselines.name AS `baselines.name`';
        $this->builder->select($properties, false);
        $this->builder->join('baselines', 'baselines_results.baseline_id = baselines.id', 'left');

        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->orderBy($resp->meta->sort);
        if (!empty($resp->meta->groupby)) {
            $this->builder->groupBy($resp->meta->groupby);
        }
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $query->getResult();
        $count = count($result);
        for ($i = 0; $i < $count; $i++) {
            if (!empty($result[$i]->result)) {
                try {
                    $json = json_decode($result[$i]->result, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                unset($json->device_list);
                unset($json->policy);
                $result[$i]->result = json_encode($json);
            }
        }
        return format_data($result, 'baselines_results');
    }

    /**
     * Create an individual item in the database
     *
     * @param  object|array|null $data The data attributes
     *
     * @return int|null              The integer ID of the newly created item, or null on failure
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
     * @param  int|null $id    The ID of the baselines_result to delete
     * @param  bool     $purge Unused; present for interface compatibility
     *
     * @return bool            true on success, false on failure
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
     * Return supplementary data for a single baselines_result's read view (stub)
     *
     * Reserved for future implementation. Currently returns an empty array;
     * no data is fetched from the database.
     *
     * @param  int   $id Unused; present for interface compatibility
     *
     * @return array     An empty array
     */
    public function includedRead(int $id = 0): array
    {
        return array();
    }

    /**
     * Return supplementary data for the baselines_result create/edit form (stub)
     *
     * Reserved for future implementation. Currently returns an empty array;
     * no data is fetched from the database.
     *
     * @param  int   $id Unused; present for interface compatibility
     *
     * @return array     An empty array
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
    }

    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * Resolves the full set of org IDs visible to the current user (including
     * both ancestors and descendants) and filters the result accordingly.
     *
     * @param  array $where Additional WHERE conditions to apply to the query
     * @param  array $orgs  List of org IDs to restrict results to; if empty,
     *                      the current user's accessible orgs are used
     *
     * @return array        An array of formatted baselines_results entries
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
        $properties[] = 'baselines_results.*';
        $properties[] = 'baselines.name AS `baselines.name`';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'baselines_results.org_id = orgs.id', 'left');
        $this->builder->join('baselines', 'baselines_results.baseline_id = baselines.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $this->builder->orderBy('baselines.name', 'ASC');
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'baselines_results');
    }

    /**
     * Read every baselines_result from the database with no org-based filtering
     *
     * Returns all rows from the `baselines_results` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every baselines_result row
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
     * Truncate the baselines_results table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'baselines_results' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
     */
    public function reset(string $table = ''): bool
    {
        return true;
    }

    /**
     * Update an individual item in the database
     *
     * @param  int|null          $id   The ID of the baselines_result to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        return true;
    }

    /**
     * Build and return the data dictionary for the baselines_results collection
     *
     * Constructs a stdClass describing the `baselines_results` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('baselines_results')
     *  - columns     : per-column human-readable descriptions and allowed values
     *  - attributes  : lists of fields used for collection display, create, and update
     *  - sentence    : a one-line summary of the resource
     *  - about       : an HTML paragraph describing the resource
     *  - notes       : additional free-text notes (may be empty)
     *  - link        : URL to external documentation
     *  - product     : minimum product tier required ('enterprise')
     *
     * @return object  Populated stdClass dictionary object
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'baselines_results';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array();
        $dictionary->attributes->create = array(); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = array(); # $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = array(); # $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = array(); # $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = '';

        $dictionary->about = '';

        $dictionary->notes = '';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->name = 'Unused.';
        $dictionary->columns->baseline_id = 'The associated baseline. Links to <code>baselines.id</code>.';
        $dictionary->columns->baseline = 'The entire associated baseline this result is from.';
        $dictionary->columns->timestamp = 'The date/time when this result was created.';
        $dictionary->columns->group = 'The group of devices on which the baseline was run against.';
        $dictionary->columns->devices = 'The number of devices in the associated group.';
        $dictionary->columns->pass = 'How many policies results in a pass.';
        $dictionary->columns->fail = 'How many policies results in a fail.';
        $dictionary->columns->result = 'A JSON representation of the individual tests and their results on all devices this baseline has been run against.';
        $dictionary->columns->{'tests.operator'} = 'How to compare';
        return $dictionary;
    }
}
