<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class LocationsModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'locations' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('locations');
        # Use the below to execute BaseModel::__construct
        # parent::__construct();
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
        $instance = & get_instance();
        $properties = $resp->meta->properties;
        $properties[] = "orgs.name as `orgs.name`";
        $properties[] = "orgs.id as `orgs.id`";
        $properties[] = "COUNT(DISTINCT devices.id) AS `device_count`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        if (!empty($instance->resp->meta->requestor)) {
            $this->builder->join('devices', $resp->meta->collection . '.id = devices.location_id and devices.oae_manage = "y"', 'left');
        } else {
            $this->builder->join('devices', $resp->meta->collection . '.id = devices.location_id', 'left');
        }
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->orderBy($resp->meta->sort);
        $this->builder->groupBy('locations.id');
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        // log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), $resp->meta->collection);
    }

    /**
     * Return the locations direct buildings
     *
     * @param  int $id The ID of the location
     *
     * @return array   The list of buildings
     *
     */
    public function children(int $id = 0): array
    {
        $sql = 'SELECT buildings.*, orgs.name AS `orgs.name`, locations.name as `locations.name`, count(floors.id) as `floors_count` FROM `buildings` LEFT JOIN orgs ON (buildings.org_id = orgs.id) LEFT JOIN locations ON (locations.id = buildings.location_id) LEFT JOIN floors ON (floors.building_id = buildings.id) WHERE buildings.location_id = ? GROUP BY buildings.id';
        $result = $this->db->query($sql, [$id]);
        return format_data($result->getResult(), 'buildings');
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
        $data = $this->createFieldData('locations', $data);
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
     * @param  int|null $id    The ID of the location to delete
     * @param  bool     $purge Unused; present for interface compatibility
     *
     * @return bool            true on success, false on failure
     */
    public function delete($id = null, bool $purge = false): bool
    {
        if ($id === 1) {
            # We cannot delete the default Location
            return false;
        }
        // Set all devices in this location to the default location
        $sql = "UPDATE devices SET location_id = 1 WHERE location_id = ?";
        $this->db->query($sql, [$id]);
        // Delete the location
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
     * Return supplementary data for a single location's read view
     *
     * @param  int   $id The ID of the location whose supplementary data to load
     *
     * @return array     An array of supplementary data for the read view
     */
    public function includedRead(int $id = 0): array
    {
        $attributesModel = new \App\Models\AttributesModel();
        $include = array();
        $types = $attributesModel->listUser(['attributes.resource' => 'locations', 'attributes.type' => 'type']);
        $include['types'] = $types;
        $queriesModel = new \App\Models\QueriesModel();
        $include['queries'] = $queriesModel->listUser();
        return $include;
    }

    /**
     * Return supplementary data for the location create/edit form
     *
     * @param  int   $id The ID of the location whose supplementary data to load
     *
     * @return array     An array of supplementary data for the create/edit form
     */
    public function includedCreateForm(int $id = 0): array
    {
        $instance = & get_instance();
        if (empty($instance->config->maps_api_key)) {
            \Config\Services::session()->setFlashdata('warning', 'Google Maps API key required to retrieve lat/long and display map. See <a href="' . url_to('helpFAQ') . '?name=Google+Maps+API+Key">here</a>.');
        }
        $attributesModel = new \App\Models\AttributesModel();
        $include = array();
        $types = $attributesModel->listUser(['attributes.resource' => 'locations', 'attributes.type' => 'type']);
        $include['types'] = $types;
        return $include;
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
     * @return array        An array of formatted locations entries
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
        $properties[] = 'locations.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $properties[] = "COUNT(DISTINCT devices.id) AS `device_count`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'locations.org_id = orgs.id', 'left');
        $this->builder->join('devices', 'locations.id = devices.location_id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $this->builder->orderBy('locations.name', 'ASC');
        $this->builder->groupBy('locations.id');
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'locations');
    }

    /**
     * Read every location from the database with no org-based filtering
     *
     * Returns all rows from the `locations` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every location row
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
        $properties = array();
        $properties[] = 'locations.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $properties[] = 'orgs.id as `orgs.id`';
        $properties[] = 'clouds.name as `clouds.name`';
        $properties[] = 'clouds.id as `clouds.id`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'locations.org_id = orgs.id', 'left');
        $this->builder->join('clouds', 'locations.cloud_id = clouds.id', 'left');
        $query = $this->builder->getWhere(['locations.id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'locations');
    }

    /**
     * Truncate the locations table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'locations' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('locations')) {
            return true;
        }
        return false;
    }

    /**
     * Update an individual item in the database
     *
     * @param  int|null          $id   The ID of the location to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        $data = $this->updateFieldData('locations', $data);
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    /**
     * Build and return the data dictionary for the locations collection
     *
     * Constructs a stdClass describing the `locations` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('locations')
     *  - columns     : per-column human-readable descriptions and allowed values
     *  - attributes  : lists of fields used for collection display, create, and update
     *  - sentence    : a one-line summary of the resource
     *  - about       : an HTML paragraph describing the resource
     *  - notes       : additional free-text notes (may be empty)
     *  - link        : URL to external documentation
     *  - product     : minimum product tier required ('community')
     *
     * @return object  Populated stdClass dictionary object
     */
    public function dictionary(): object
    {
        helper('utility');
        $instance = & get_instance();

        $collection = 'locations';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'orgs.name', 'type', 'description', 'address', 'city', 'state', 'country', 'device_count');
        $dictionary->attributes->create = array('name','org_id');
        $dictionary->attributes->fields = $this->db->getFieldNames($collection);
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection);
        $dictionary->attributes->update = $this->updateFields($collection);

        $dictionary->sentence = 'Open-AudIT Professional and Enterprise leverage Google Maps to provide live, interactive geographic mapping of device location.';

        $dictionary->about = '<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>';

        $dictionary->notes = '<p>The <code>type</code> of the location will assign its icon.<br> <br></p>';

        $dictionary->link = @$instance->dictionary->link;
        $dictionary->product = 'community';
        $dictionary->columns->id = @$instance->dictionary->id;
        $dictionary->columns->name = @$instance->dictionary->name;
        $dictionary->columns->org_id = @$instance->dictionary->org_id;
        $dictionary->columns->description = @$instance->dictionary->description;
        $dictionary->columns->parent_id = 'Unused.';
        $dictionary->columns->sub_type = 'Unused.';
        $dictionary->columns->type = 'What is the type of this location. Allowable types held in <code>attributes</code> table.';
        $dictionary->columns->room = 'The locations room.';
        $dictionary->columns->suite = 'The locations suite.';
        $dictionary->columns->level = 'The locations level.';
        $dictionary->columns->address = 'The locations address.';
        $dictionary->columns->suburb = 'The locations suburb.';
        $dictionary->columns->city = 'The locations city.';
        $dictionary->columns->district = 'The locations district.';
        $dictionary->columns->region = 'The locations region.';
        $dictionary->columns->area = 'The locations area.';
        $dictionary->columns->state = 'The locations state.';
        $dictionary->columns->postcode = 'The locations postcode.';
        $dictionary->columns->country = 'The locations country.';
        $dictionary->columns->notes = 'Unused.';
        $dictionary->columns->tags = 'Unused.';
        $dictionary->columns->phone = 'The locations phone.';
        $dictionary->columns->contact = 'Details of who is usually contactable at this site.';
        $dictionary->columns->picture = 'Unused.';
        $dictionary->columns->external_ident = 'The externally referenced location ID. Usually populated by Cloud audits.';
        $dictionary->columns->options = 'Unused.';
        $dictionary->columns->latitude = 'The locations latitude.';
        $dictionary->columns->longitude = 'The locations longitude.';
        $dictionary->columns->geo = 'An optional GeoCode';
        $dictionary->columns->cloud_id = 'The Cloud that owns this item. Links to <code>clouds.id</code>.';
        $dictionary->columns->query_id = 'The Query ID for the location. Links to <code>queries.id</code>.';
        $dictionary->columns->edited_by = @$instance->dictionary->edited_by;
        $dictionary->columns->edited_date = @$instance->dictionary->edited_date;
        return $dictionary;
    }
}
