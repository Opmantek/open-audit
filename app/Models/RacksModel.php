<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class RacksModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('racks');
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
        $properties[] = "locations.name as `locations.name`";
        $properties[] = "locations.id as `locations.id`";
        $properties[] = "count(rack_devices.id) as `rack_devices_count`";
        $properties[] = "SUM(rack_devices.height) AS `used`";
        $properties[] = "COALESCE(racks.ru_height, 0) - COALESCE(SUM(rack_devices.height), 0) AS `free`";
        $properties[] = "racks.ru_height AS `lcs`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        $this->builder->join('locations', $resp->meta->collection . '.location_id = locations.id', 'left');
        $this->builder->join('rack_devices', 'rack_devices.rack_id = racks.id', 'left');
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->groupBy('racks.id');
        $this->builder->orderBy($resp->meta->sort);
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $racks = $query->getResult();
        $count = count($racks);
        for ($i = 0; $i < $count; $i++) {
            if (empty($racks[$i]->ru_height)) {
                $racks[$i]->ru_height = 0;
            }
            $height = intval($racks[$i]->ru_height);
            # log_message('error', "Rack: " . $racks[$i]->id . ", height: " . $racks[$i]->ru_height);
            $sql = "SELECT * FROM rack_devices WHERE rack_id = ? ORDER BY position";
            $devices = $this->db->query($sql, [$racks[$i]->id])->getResult();
            $spaces = array();
            $space = 0;
            if (!empty($devices)) {
                for ($j = 0; $j < $height; $j++) {
                    $hit = false;
                    foreach ($devices as $device) {
                        if (intval($device->position) === $j or (intval($device->position) < $j and (intval($device->position) + intval($device->height)) >= $j)) {
                            # log_message('error', 'TRUE - position is ' . $j . ' and device position is ' . $device->position . ' and device height is ' . $device->height);
                            $hit = true;
                            if ($space > 0) {
                                $spaces[] = $space;
                            }
                            $space = 0;
                        }
                    }
                    if (!$hit) {
                        $space += 1;
                    }
                }
                $spaces[] = $space;
            }
            if (!empty($spaces)) {
                $racks[$i]->lcs = max($spaces);
            }
        }
        return format_data($racks, $resp->meta->collection);
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
    public function includedCreateForm(int $id = 0): array
    {
        $instance = & get_instance();
        $include = array();
        $locationsModel = new \App\Models\LocationsModel();
        $include['locations'] = $locationsModel->listUser();

        $include['rows'] = array();
        $sql = "SELECT DISTINCT `row` FROM racks WHERE racks.org_id IN (" . $instance->user->org_list . ")";
        $temp = $this->db->query($sql)->getResult();
        foreach ($temp as $item) {
            if (!empty($item->row)) {
                $include['rows'][] = $item->row;
            }
        }

        $include['rooms'] = array();
        $sql = "SELECT DISTINCT `room` FROM racks WHERE racks.org_id IN (" . $instance->user->org_list . ")";
        $temp = $this->db->query($sql)->getResult();
        foreach ($temp as $item) {
            if (!empty($item->room)) {
                $include['rooms'][] = $item->room;
            }
        }

        $include['floors'] = array();
        $sql = "SELECT DISTINCT `floor` FROM racks WHERE racks.org_id IN (" . $instance->user->org_list . ")";
        $temp = $this->db->query($sql)->getResult();
        foreach ($temp as $item) {
            if (!empty($item->floor)) {
                $include['floors'][] = $item->floor;
            }
        }

        $include['buildings'] = array();
        $sql = "SELECT DISTINCT `building` FROM racks WHERE racks.org_id IN (" . $instance->user->org_list . ")";
        $temp = $this->db->query($sql)->getResult();
        foreach ($temp as $item) {
            if (!empty($item->building)) {
                $include['buildings'][] = $item->building;
            }
        }

        return $include;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $included = array();
        $properties = array();
        $properties[] = 'rack_devices.*';
        $properties[] = 'devices.name as `devices.name`';
        $properties[] = 'devices.id as `devices.id`';
        $properties[] = 'devices.name as `devices.name`';
        $properties[] = 'devices.type as `devices.type`';
        $properties[] = 'devices.ip as `devices.ip`';
        $properties[] = 'devices.icon as `devices.icon`';
        $properties[] = 'image.filename as `image.filename`';
        $this->builder->select($properties, false);
        $this->builder->join('rack_devices', 'rack_devices.rack_id = racks.id', 'left');
        $this->builder->join('devices', 'rack_devices.device_id = devices.id', 'left');
        $this->builder->join('image', 'image.device_id = rack_devices.device_id and image.orientation = "front"', 'left');
        $this->builder->where('rack_id', $id);
        $query = $this->builder->get();
        $included['rack_devices'] = format_data($query->getResult(), 'rack_devices');

        $locationsModel = new \App\Models\LocationsModel();
        $included['locations'] = $locationsModel->listUser();
        return $included;
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
        $properties[] = 'racks.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'racks.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'racks');
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
        return format_data($query->getResult(), 'racks');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('racks')) {
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
        $data = $this->updateFieldData('racks', $data);
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

        $collection = 'racks';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'row', 'room', 'floor', 'building', 'locations.name', 'orgs.name', 'used', 'free');
        $dictionary->attributes->create = array('name','org_id', 'ru_height'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Visualise your racks and devices.';

        $dictionary->about = '<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '';

        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->location_id = 'The location the rack is located in. Links to <code>locations.id</code>.';
        $dictionary->columns->building = 'The building the rack is located in.';
        $dictionary->columns->floor = 'The floor the rack is located on.';
        $dictionary->columns->room = 'The room the rack is located in.';
        $dictionary->columns->row = 'The row the rack is located in.';
        $dictionary->columns->row_position = 'Where the rack is in the row.';
        $dictionary->columns->pod = 'The pod (if any) that this rack is part of.';
        $dictionary->columns->physical_height = 'The physical height (in CMs) of the rack.';
        $dictionary->columns->physical_width = 'The physical width (in CMs) of the rack.';
        $dictionary->columns->physical_depth = 'The physical depth (in CMs) of the rack.';
        $dictionary->columns->weight_empty = 'The physical weight (in KGs) of the rack when empty.';
        $dictionary->columns->weight_current = 'The physical weight (in KGs) of the rack at present.';
        $dictionary->columns->weight_max = 'The maximum physical weight (in KGs) this rack can hold.';
        $dictionary->columns->ru_start = 'This should be set to either 1 or the height of the rack.';
        $dictionary->columns->ru_height = 'How many rack units in height is this rack.';
        $dictionary->columns->type = 'The type of rack (compute, power, network, etc).';
        $dictionary->columns->purpose = 'What is the purpose of this rack.';
        $dictionary->columns->manufacturer = 'Who made this rack.';
        $dictionary->columns->model = 'The rack model.';
        $dictionary->columns->series = 'The rack series.';
        $dictionary->columns->serial = 'The rack serial.';
        $dictionary->columns->asset_number = 'The rack asset number.';
        $dictionary->columns->asset_tag = 'The rack asset tag.';
        $dictionary->columns->bar_code = 'The rack bar code.';
        $dictionary->columns->power_circuit = 'The power circuit this rack attaches to.';
        $dictionary->columns->power_sockets = 'How many power sockets in this rack.';
        $dictionary->columns->circuit_count = 'How many circuit feed to this rack.';
        $dictionary->columns->btu_total = 'The total BTU output by this rack.';
        $dictionary->columns->btu_max = 'The maximum total BTUs this rack is rated for.';
        $dictionary->columns->options = 'unused';
        $dictionary->columns->notes = 'unused';
        $dictionary->columns->tags = 'unused';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
