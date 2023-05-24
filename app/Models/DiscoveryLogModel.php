<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class DiscoveryLogModel extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('discovery_log');
    }

    /**
     * Read the collection from the database
     *
     * @param  $resp object An object containing the properties, filter, sort and limit as passed by the user
     * @return array        An array of formatted Orgs
     */
    public function collection(object $resp): array
    {
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = array_unique($org_list);

        $properties = $resp->meta->properties;
        $this->builder->select($properties);
        $this->builder->join('discoveries', 'discovery_log.discovery_id = discoveries.id', 'left');

        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->whereIn('discoveries.org_id', $org_list);
        $this->builder->orderBy($resp->meta->sort);
        if (!empty($resp->meta->groupby)) {
            $this->builder->groupBy($resp->meta->groupby);
        }
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'discovery_log');
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null): int|false
    {
        $router = \Config\Services::router();
        if (empty($data)) {
            return false;
        }
        if (empty($data->id)) {
            $data->id = null;
        }
        if (empty($data->discovery_id)) {
            $data->discovery_id = null;
        }
        if (empty($data->device_id)) {
            $data->device_id = null;
        }
        if (!empty($data->system_id)) {
            $data->device_id = intval($data->system_id);
        }
        $data->severity = @intval($data->severity);
        if (empty($data->severity)) {
            $data->severity = 5;
        }
        if (empty($data->ip)) {
            $data->ip = '';
        }
        switch (intval($data->severity)) {
            // NOTE - This is not used and will never be hit because of the empty test above
            case 0:
                $data->severity_text = 'emergency';
                break;

            case 1:
                $data->severity_text = 'alert';
                break;

            case 2:
                $data->severity_text = 'critical';
                break;

            case 3:
                $data->severity_text = 'error';
                break;

            case 4:
                $data->severity_text = 'warning';
                break;

            case 5:
                $data->severity_text = 'notice';
                break;

            case 6:
                $data->severity_text = 'info';
                break;

            case 7:
                $data->severity_text = 'debug';
                break;
            
            default:
                $data->severity_text = 'debug';
                break;
        }
        $data->pid = (!empty($data->pid)) ? intval($data->pid) : getmypid();
        $data->collection = (!empty($data->file)) ? $data->file : ''; #strtolower(str_replace('\App\Controllers\\', '', $router->controllerName()));
        $data->function = (!empty($data->function)) ? $data->function : ''; # $router->methodName();
        #data->function = debug_backtrace()[1]['function'];
        $data->message = (!empty($data->message)) ? $data->message : '';
        $data->command = (!empty($data->command)) ? $data->command : '';
        $data->command_status = (!empty($data->command_status)) ? $data->command_status : '';
        $data->command_time_to_execute = (!empty($data->command_time_to_execute)) ? $data->command_time_to_execute : 0;
        $data->command_output = (!empty($data->command_output)) ? $data->command_output : '';
        if (empty($data->timestamp)) {
            $data->timestamp = date('Y-m-d H:i:s');
        }

        if (!empty($data->message) and stripos($data->message, 'Collector - Starting discovery') === 0 and !empty($data->discovery_id)) {
            // Special clear of local discovery logs if start of a Collector discovery
            $this->builder->delete(['discovery_id' => $data->discovery_id]);
        }
 
        $newdata = new \stdClass();
        foreach ($this->db->getFieldData('discovery_log') as $field) {
            $newdata->{$field->name} = @$data->{$field->name};
        }

        $this->builder->insert($newdata);
        $id = $this->db->insertID();

        # TODO - foreward logs to the server from this collector
        return $id;
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
     * Read the entire collection from the database, not restricted to the user
     *
     * @return array  An array of all Orgs
     */
    public function listAll(): array
    {
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query->getResult();
    }

    public function import(array $csv = null)
    {
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all Orgs
     */
    public function listUser($user = null): array
    {
        return array();
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read(int $id = 0): array
    {
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'discovery_log');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if (!empty($this->tableReset('discovery_log'))) {
            return false;
        }
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
        // Accept our client data
        $data = $this->updateFieldData('discovery_log', $data);
        // And update the record
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

        $collection = 'discovery_log';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'parent_name', 'type', 'ad_group', 'device_count');
        $dictionary->attributes->create = array(); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->about = '<p>Open-AudIT provides multi-tenancy out of the box!<br /><br />Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br /><br />Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>';

        $dictionary->notes = '';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->parent_id = 'The ID of this orgs parent org. Linked to <code>orgs.id</code>';
        $dictionary->columns->type = 'The type of organisation.';
        $dictionary->columns->ad_group = 'Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
