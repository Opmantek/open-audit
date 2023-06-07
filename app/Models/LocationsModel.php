<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class LocationsModel extends BaseModel
{

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
     * @param  $resp object An object containing the properties, filter, sort and limit as passed by the user
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
        $this->builder->join('devices', $resp->meta->collection . '.id = devices.location_id', 'left');
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->orderBy($resp->meta->sort);
        $this->builder->groupBy('locations.id');
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        if (!empty($instance->resp->meta->requestor)) {
            $this->builder->where('devices.oae_manage', 'y');
        }
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
        return format_data($query->getResult(), 'buildings');
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null)
    {
        if (empty($data)) {
            return false;
        }
        $instance = & get_instance();
        $data = $this->createFieldData('locations', $data);
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return false;
        }
        $id = $this->db->insertID();

        $user = 'system';
        if (!empty($instance->user->full_name)) {
            $user = $instance->user->full_name;
        }

        $sql = "INSERT INTO `buildings` VALUES (NULL, 'Default Building', ?, ?, 'The default entry for a building at this location.', '', '', '', ?, NOW())";
        $this->db->query($sql, [$data->org_id, $id, $user]);
        $building_id = $this->db->insertID();

        if (!empty($building_id)) {
            $sql = "INSERT INTO `floors` VALUES (NULL, 'Ground Floor', ?, ?, 'The default entry for a floor at this location.', '', '', '', ?, NOW())";
            $this->db->query($sql, [$data->org_id, $building_id, $user]);
            $floor_id = $this->db->insertID();
        }

        if (!empty($floor_id)) {
            $sql = "INSERT INTO `rooms` VALUES (NULL, 'Default Room', ?, ?, 'The default entry for a room at this location.', '', '', '', ?, NOW())";
            $this->db->query($sql, [$data->org_id, $floor_id, $user]);
            $room_id = $this->db->insertID();
        }

        if (!empty($room_id)) {
            $sql = "INSERT INTO `rows` VALUES (NULL, 'Default Row', ?, ?, 'The default entry for a row at this location.', '', '', '', ?, NOW())";
            $this->db->query($sql, [$data->org_id, $room_id, $user]);
        }
        return intval($id);
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
        $attributesModel = new \App\Models\AttributesModel();
        $include = array();
        $types = $attributesModel->listUser(['attributes.resource', 'locations', 'attributes.type', 'type']);
        $include['types'] = $types;
        return $include;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedCreateForm(int $id = 0): array
    {
        if (empty(config('Openaudit')->maps_api_key)) {
            \Config\Services::session()->setFlashdata('warning', 'Google Maps API key required to retrieve lat/long and display map. See <a href="https://community.opmantek.com/display/opCommon/Google+Maps+API+Key" target="_blank">here</a>.');
        }
        $attributesModel = new \App\Models\AttributesModel();
        $include = array();
        $types = $attributesModel->listUser(['attributes.resource', 'locations', 'attributes.type', 'type']);
        $include['types'] = $types;
        return $include;
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
        $properties[] = 'locations.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'locations.org_id = orgs.id', 'left');
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
        return format_data($query->getResult(), 'locations');
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
     * Reset a table
     *
     * @return bool Did it work or not?
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
     * @param  object  $data The data attributes
     *
     * @return bool    true || false depending on success
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
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'locations';
        $dictionary = new \StdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new \StdClass();

        $dictionary->attributes = new \StdClass();
        $dictionary->attributes->collection = array('id', 'name', 'orgs.name', 'type', 'address', 'city', 'state', 'country', 'device_count');
        $dictionary->attributes->create = array('name','org_id');
        $dictionary->attributes->fields = $this->db->getFieldNames($collection);
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection);
        $dictionary->attributes->update = $this->updateFields($collection);

        $dictionary->about = '<p>A location is a physical address that can have devices associated with it.<br /><br />You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '<p>The <code>type</code> of the location will assign its icon.<br /><br /></p>';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->type = 'What is the type of this location. Allowable types held in attributes table.';
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
        $dictionary->columns->tags = 'unused';
        $dictionary->columns->phone = 'The locations phone.';
        $dictionary->columns->picture = 'unused';
        $dictionary->columns->external_ident = 'The externally referenced location ID. Usually populated by Cloud audits.';
        $dictionary->columns->options = 'unused';
        $dictionary->columns->latitude = 'The locations latitude.';
        $dictionary->columns->longitude = 'The locations longitude.';
        $dictionary->columns->geo = 'An optional GeoCode';
        $dictionary->columns->cloud_id = 'The Cloud that owns this item. Links to <code>clouds.id</code>. ';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
