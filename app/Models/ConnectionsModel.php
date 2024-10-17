<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class ConnectionsModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('connections');
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
        $properties[] = "loc_a.name as `locations.location_name_a`";
        $properties[] = "loc_b.name as `locations.location_name_b`";
        $properties[] = "dev_a.name as `devices.devices_name_a`";
        $properties[] = "dev_b.name as `devices.devices_name_b`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'connections.org_id = orgs.id', 'left');
        $this->builder->join('locations loc_a', 'loc_a.id = connections.location_id_a', 'left');
        $this->builder->join('locations loc_b', 'loc_b.id = connections.location_id_b', 'left');
        $this->builder->join('devices dev_a', 'dev_a.id = connections.device_id_a', 'left');
        $this->builder->join('devices dev_b', 'dev_b.id = connections.device_id_b', 'left');
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
        return format_data($query->getResult(), 'connections');
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
        $data = $this->createFieldData('connections', $data);
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
        $locationsModel = new \App\Models\LocationsModel();
        $return = array();
        $locations = $locationsModel->listUser();
        $return['locations'] = $locations;
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
        $locationsModel = new \App\Models\LocationsModel();
        $return = array();
        $locations = $locationsModel->listUser();
        $return['locations'] = $locations;
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
        $properties[] = 'connections.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $properties[] = "loc_a.name as `locations.location_name_a`";
        $properties[] = "loc_b.name as `locations.location_name_b`";
        $properties[] = "dev_a.name as `devices.device_name_a`";
        $properties[] = "dev_b.name as `devices.device_name_b`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'connections.org_id = orgs.id', 'left');
        $this->builder->join('locations loc_a', 'loc_a.id = connections.location_id_a', 'left');
        $this->builder->join('locations loc_b', 'loc_b.id = connections.location_id_b', 'left');
        $this->builder->join('devices dev_a', 'dev_a.id = connections.device_id_a', 'left');
        $this->builder->join('devices dev_b', 'dev_b.id = connections.device_id_b', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'connections');
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
        $properties[] = 'connections.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $properties[] = "loc_a.name as `locations.location_name_a`";
        $properties[] = "loc_b.name as `locations.location_name_b`";
        $properties[] = "dev_a.name as `devices.device_name_a`";
        $properties[] = "dev_b.name as `devices.device_name_b`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'connections.org_id = orgs.id', 'left');
        $this->builder->join('locations loc_a', 'loc_a.id = connections.location_id_a', 'left');
        $this->builder->join('locations loc_b', 'loc_b.id = connections.location_id_b', 'left');
        $this->builder->join('devices dev_a', 'dev_a.id = connections.device_id_a', 'left');
        $this->builder->join('devices dev_b', 'dev_b.id = connections.device_id_b', 'left');
        $query = $this->builder->getWhere(['connections.id' => intval($id)]);

        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'connections');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('connections')) {
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
        $data = $this->updateFieldData('connections', $data);
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

        $collection = 'connections';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'orgs.name', 'edited_by', 'edited_date');
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Track your connections to branch offices, the internet, where-ever else you need to. Simple, easy, intuitive.';

        $dictionary->about = '<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '';

        $dictionary->product = 'professional';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->provider = 'The ISP or Telco providing this link.';
        $dictionary->columns->service_type = 'ADSL, HFC, ISDN, etc.';
        $dictionary->columns->product_name = 'The name provided by the provider.';
        $dictionary->columns->service_identifier = 'The ID provided by the provider.';
        $dictionary->columns->circuit_status = 'Your description of the status of this connection (provisioned, retired, etc).';
        $dictionary->columns->speed_down_a = 'Usually Mb/s, to Location A.';
        $dictionary->columns->speed_up_a = 'Usually Mb/s, from Location A.';
        $dictionary->columns->speed_down_b = 'Usually Mb/s, to Location B.';
        $dictionary->columns->speed_up_b = 'Usually Mb/s, from Location B.';
        $dictionary->columns->location_id_a = 'The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the \'FROM\' location.';
        $dictionary->columns->device_id_a = 'The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.';
        $dictionary->columns->line_number_a = 'The line number assigned by the provider to the line at this end of the connection.';
        $dictionary->columns->ip_address_external_a = 'The IP of the external interface.';
        $dictionary->columns->ip_address_internal_a = 'The IP of the internal interface.';
        $dictionary->columns->location_id_b = 'The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the \'TO\' location.';
        $dictionary->columns->device_id_b = 'The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.';
        $dictionary->columns->line_number_b = 'The line number assigned by the provider to the line at this end of the connection.';
        $dictionary->columns->ip_address_external_b = 'The IP of the external interface.';
        $dictionary->columns->ip_address_internal_b = 'The IP of the internal interface.';
        $dictionary->columns->site_hours_a = 'The usual hours of operation at this site.';
        $dictionary->columns->site_hours_b = 'The usual hours of operation at this site.';
        $dictionary->columns->service_level_a = 'An indication of the level of service required by this site.';
        $dictionary->columns->service_level_b = 'An indication of the level of service required by this site.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
