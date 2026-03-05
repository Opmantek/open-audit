<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class ConnectionsModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'connections' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('connections');
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
     * @param  object|array|null $data The data attributes
     *
     * @return int|null              The integer ID of the newly created item, or null on failure
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
     * @param  int|null $id    The ID of the connection to delete
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
     * Return supplementary data for a single connection's read view
     *
     * @param  int   $id The ID of the connection whose supplementary data to load
     *
     * @return array     An array of supplementary data for the read view
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
     * Return supplementary data for the connection create/edit form
     *
     * @param  int   $id The ID of the connection whose supplementary data to load
     *
     * @return array     An array of supplementary data for the create/edit form
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
     * Resolves the full set of org IDs visible to the current user (including
     * both ancestors and descendants) and filters the result accordingly.
     *
     * @param  array $where Additional WHERE conditions to apply to the query
     * @param  array $orgs  List of org IDs to restrict results to; if empty,
     *                      the current user's accessible orgs are used
     *
     * @return array        An array of formatted connections entries
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
     * Read every connection from the database with no org-based filtering
     *
     * Returns all rows from the `connections` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every connection row
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
     * Truncate the connections table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'connections' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
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
     * @param  int|null          $id   The ID of the connection to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
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
     * Build and return the data dictionary for the connections collection
     *
     * Constructs a stdClass describing the `connections` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('connections')
     *  - columns     : per-column human-readable descriptions and allowed values
     *  - attributes  : lists of fields used for collection display, create, and update
     *  - sentence    : a one-line summary of the resource
     *  - about       : an HTML paragraph describing the resource
     *  - notes       : additional free-text notes (may be empty)
     *  - link        : URL to external documentation
     *  - product     : minimum product tier required ('professional')
     *
     * @return object  Populated stdClass dictionary object
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

        $dictionary->about = '<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>';

        $dictionary->notes = '';

        $dictionary->link = $instance->dictionary->link;
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
        $dictionary->columns->speed_down_a = 'Usually Mbs, to Location A.';
        $dictionary->columns->speed_up_a = 'Usually Mbs, from Location A.';
        $dictionary->columns->speed_down_b = 'Usually Mbs, to Location B.';
        $dictionary->columns->speed_up_b = 'Usually Mbs, from Location B.';
        $dictionary->columns->location_id_a = 'The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.';
        $dictionary->columns->device_id_a = 'The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.';
        $dictionary->columns->line_number_a = 'The line number assigned by the provider to the line at this end of the connection.';
        $dictionary->columns->ip_address_external_a = 'The IP of the external interface.';
        $dictionary->columns->ip_address_internal_a = 'The IP of the internal interface.';
        $dictionary->columns->location_id_b = 'The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.';
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
