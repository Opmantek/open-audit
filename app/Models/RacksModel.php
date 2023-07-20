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
        $data = $this->createFieldData('racks', $data);
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return null;
        }
        return ($this->db->insertID());
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
        $this->builder->select($properties, false);
        $this->builder->join('devices', 'racks.device_id = devices.id', 'left');
        $this->builder->where('rack_id', $id);
        $query = $this->builder->get();
        $included['rack_devices'] = format_data($query->getResult(), 'rack_devices');
        return $included;
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
        $properties[] = 'racks.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'racks.org_id = orgs.id', 'left');
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
        $dictionary = new \StdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new \StdClass();

        $dictionary->attributes = new \StdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'orgs.name', 'edited_by', 'edited_date');
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

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
        $dictionary->columns->row = 'The row the rack is located in. Links to <code>rows.id</code>.';
        $dictionary->columns->row_position = 'The height of this rack in rack units.';
        $dictionary->columns->pod = 'The pod (if any) that this rack is part of.';
        $dictionary->columns->physical_height = 'The physical height (in CMs) of the rack.';
        $dictionary->columns->physical_width = 'The physical width (in CMs) of the rack.';
        $dictionary->columns->physical_depth = 'The physical depth (in CMs) of the rack.';
        $dictionary->columns->weight_empty = 'The physical weight (in KGs) of the rack when empty.';
        $dictionary->columns->weight_current = 'The physical weight (in KGs) of the rack at present.';
        $dictionary->columns->weight_max = 'The maximum physical weight (in KGs) this rack can hold.';
        $dictionary->columns->ru_start = 'The starting RU number this device occupies.';
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
