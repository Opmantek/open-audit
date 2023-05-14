<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class DevicesModel extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('devices');
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
    public function create($data = null)
    {
        if (empty($data)) {
            return false;
        }

        $parameters = new stdClass();
        $parameters->input = $data;
        if (!empty($data->discovery_id)) {
            $parameters->discovery_id = intval($data->discovery_id);
        }
        $parameters->ip = @$data->ip;
        $data = audit_format_system($parameters);
        // Ensure we have a name
        if (empty($data->name)) {
            if (!empty($data->hostname)) {
                $data->name = strtolower($data->hostname);
            } else if (!empty($data->sysName)) {
                $data->name = strtolower($data->sysName);
            } else if (!empty($data->dns_hostname)) {
                $data->name = strtolower($data->dns_hostname);
            } else if (!empty($data->ip)) {
                $data->name = ip_address_from_db($data->ip);
            } else {
                $data->name = '';
            }
        }
        if (empty($data->org_id)) {
            $data->org_id = 1;
        }
        $data = $this->createFieldData('devices', $data);
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return false;
        }
        $id = $this->db->insertID();
        // Set the device icon
        reset_icons($id);

        $weight = weight($data->last_seen_by);
        $disallowed_fields = array('id', 'icon', 'sysUpTime', 'uptime', 'last_seen', 'first_seen', 'instance_options', 'credentials', 'discovery_id');
        foreach ($data as $key => $value) {
            if (!empty($value) and !in_array($key, $disallowed_fields)) {
                $edit_sql = "INSERT INTO edit_log VALUES (NULL, 0, ?, 'Data was changed', ?, ?, 'system', ?, ?, ?, '')";
                $query = $this->db->query($edit_sql, [intval($id), $data->last_seen_by, $weight, $key, $data->last_seen, $value]);
            }
        }


        return ($id);
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
        $properties[] = 'devices.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'devices.org_id = orgs.id', 'left');
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
        return format_data($query->getResult(), 'devices');
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
        return format_data($query->getResult(), 'devices');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('devices')) {
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
        if (empty($data->id) and empty($id)) {
            // Something went wrong - we SHOULD have an ID in an update routine
            // Possibly removed via audit_format_system (if the supplied ID belonged to a device with status == deleted)
            log_message('error', 'DevicesModel::update not supplied a device ID. ' . json_encode($data));
            return false;
        }

        if (empty($data)) {
            log_message('error', 'DevicesModel::update called, but no $data object supplied.');
            return false;
        }

        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'DevicesModel';
        $log->function = 'DevicesModel::update';
        $log->status = 'notice';
        $log->command_status = 'notice';
        $log->command = 'process audit';
        $log->summary = 'start function';
        if (!empty($id)) {
            $id = intval($id);
            $log->device_id = $id;
            $data->id = $id;
        } else {
            $log->device_id = $data->id;
            $id = intval($data->id);
        }
        if (!empty($data->ip)) {
            $data->ip = @ip_address_to_db($data->ip);
            $log->ip = @ip_address_from_db($data->ip);
        } else {
            $log->ip = '';
        }
        if (!empty($data->discovery_id)) {
            $log->discovery_id = $data->discovery_id;
            $GLOBALS['discovery_id'] = $data->discovery_id;
        } else if (!empty($GLOBALS['discovery_id'])) {
            $log->discovery_id = $GLOBALS['discovery_id'];
        } else {
            $log->discovery_id = '';
        }

        $log->message = "System update start for {$log->ip}";
        discovery_log($log);

        if (empty($data->discovery_id)) {
            unset($data->discovery_id);
        }
        // Get tthe existing device data
        $query = $this->builder->getWhere(['id' => intval($id)]);
        $db_entry = $query->getRow();
        // Cater for a short hostname
        if (isset($data->last_seen_by) and ($data->last_seen_by === 'audit' or $data->last_seen_by === 'snmp')) {
            if (!empty($db_entry)) {
                if (strlen($db_entry->hostname) > 15 && isset($data->hostname) && strlen($data->hostname) === 15) {
                    unset($data->hostname);
                }
            }
        }
        $data->original_last_seen_by = $db_entry->last_seen_by;
        $data->original_last_seen = $db_entry->last_seen;
        $data->original_timestamp = $db_entry->last_seen;
        if (empty($data->timestamp)) {
            $data->timestamp = $data->last_seen;
        }
        // Get the lastest edit_log data
        $sql = "SELECT weight, db_column, MAX(timestamp) as `timestamp`, value, previous_value, source FROM edit_log WHERE device_id = ? AND `db_table` = 'devices' GROUP BY db_column, weight, value, previous_value, source ORDER BY id";
        $query = $this->db->query($sql, [$id]);
        $edit_log = $query->getResult();
        // Get the database column names
        $fields = $this->db->getFieldNames('devices');
        // We do not compare these with the edit_log data
        $disallowed_fields = array('id', 'icon', 'sysUpTime', 'uptime', 'last_seen', 'last_seen_by', 'first_seen', 'instance_options', 'credentials', 'discovery_id');
        $update_device = new \stdClass();
        foreach ($data as $key => $value) {
            if (($key !== '') && ($value !== '')) {
                // need to iterate through available columns and only insert where $key == valid column name
                if (!in_array($key, $disallowed_fields) && in_array($key, $fields)) {
                    $previous_value = $db_entry->{$key};
                    // get the current weight from the edit_log
                    $previous_weight = 10000;
                    for ($i=0; $i < count($edit_log); $i++) {
                        if ($edit_log[$i]->db_column === $key) {
                            $previous_weight = intval($edit_log[$i]->weight);
                        }
                    }
                    // calculate the weight
                    $weight = intval(weight($data->last_seen_by));
                    if ($weight <= $previous_weight && (string)$value !== (string)$previous_value) {
                        // $update = new stdClass();
                        // $update->key = $key;
                        // $update->value = $value;
                        // $update_device[] = $update;
                        $update_device->$key = $value;
                        $sql = "INSERT INTO edit_log VALUES (NULL, ?, ?, 'Data was changed', ?, ?, 'devices', ?, ?, ?, ?)";
                        $query = $this->db->query($sql, [0, $id, $data->last_seen_by, $weight, $key, $data->timestamp, $value, $previous_value]);
                    } else {
                        // We have an existing edit_log entry with a more important change - don't touch the `devices`.`$key` value
                    }
                }
            }
        }
        // Add our non-edit_log compared attributes to the data to be updated
        foreach ($data as $key => $value) {
            if ($key !== 'id' && in_array($key, $disallowed_fields)) {
                // $update = new stdClass();
                // $update->key = $key;
                // $update->value = (string)$value;
                // $update_device[] = $update;
                $update_device->$key = $value;
            }
        }
        log_message('info', json_encode($update_device));
        log_message('info', '');
        $update = $this->updateFieldData('devices', $update_device);
        log_message('debug', json_encode($update));
        $this->builder->where('id', intval($id));
        $this->builder->update($update);
        log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        reset_icons($id);

        if (isset($data->mac_address) && $data->mac_address !== '' && isset($data->ip) && $data->ip !== '' && isset($data->subnet) && $data->subnet !== '') {
            // we need to check if we have an entry in `network` if we do not, but we have details (ex- an nmap device that previously existed but did not have a MAC, but now does)
            // we need to insert it. ideally this would have already been done when the device was initially discovered, but we cannot count on that.
            // need to check if an entry in `network` exists and if it does not AND we have details, insert something search for any entries in `ip`
            $sql = "SELECT * FROM ip WHERE device_id = ? AND mac = ? AND current = 'y' AND ip = ?";
            $query = $this->db->query($sql, [intval($id), "{$data->mac_address}", "{$data->ip}"]);
            $result = $query->getResult();
            $count = $query->getNumRows();
            if ($count === 0) {
                // no match - insert
                $sql = "INSERT INTO ip (id, device_id, current, first_seen, last_seen, mac, net_index, ip, netmask, version, network, set_by) VALUES(NULL, ?, 'y', ?, ?, ?, '', ?, ?, '', '', '')";
                $query = $this->db->query($sql, [intval($id), "{$data->timestamp}", "{$data->timestamp}", "{$data->mac_address}", "{$data->ip}", "{$data->subnet}"]);
            } else {
                // match - update timestamp only
                $sql = "UPDATE ip SET last_seen = ? WHERE device_id = ? AND mac = ? AND current = 'y' AND ip = ?";
                $query = $this->db->query($sql, ["{$data->timestamp}", $id, "{$data->mac_address}", "{$data->ip}"]);
            }
        }

        // Check if we have a matching entry in the vm table and update it if required
        $sql = "SELECT vm.id AS `vm.id`, vm.device_id AS `vm.device_id`, devices.hostname AS `devices.hostname` FROM vm, devices WHERE (LOWER(vm.uuid) = LOWER(?) OR LOWER(vm.uuid) = LOWER(?)) AND vm.uuid != '' AND vm.current = 'y' AND vm.device_id = devices.id;";
        $query = $this->db->query($sql, [@$data->uuid, @$data->vm_uuid]);
        if ($query->getNumRows() > 0) {
            $row = $query->getRow();
            $temp_vm_id = $row->{'vm.id'};
            $data->vm_system_id = $row->{'vm.system_id'};
            $data->vm_server_name = $row->{'devices.hostname'};
            $sql = "SELECT icon, 'vm' FROM devices WHERE id = ?";
            $query = $this->db->query($sql, [$id]);
            $row = $query->getRow();
            $data->icon = $row->icon;
            $sql = 'UPDATE vm SET guest_device_id = ?, icon = ?, name = ? WHERE id = ?';
            $query = $this->db->query($sql, [$id, "{$data->icon}", "{$data->name}", intval($temp_vm_id)]);
            $sql = 'UPDATE devices SET vm_device_id = ?, vm_server_name = ? WHERE id = ?';
            $query = $this->db->query($sql, [$data->vm_device_id, $data->vm_server_name, $data->id]);
        }
        // Ensure we have an OrgID
        if (empty($data->org_id)) {
            $sql = 'SELECT org_id FROM system WHERE id = ?';
            $query = $this->db->query($sql, [$id]);
            $row = $query->getRow();
            $data->org_id = $row->org_id;
        }
        // Add a count to our chart table
        $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), ?, ?, 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1";
        $query = $this->db->query($sql, [$data->last_seen_by, $data->org_id]);
        $log->message = 'System update end for '.@ip_address_from_db($data->ip);
        $log->summary = 'finish function';
        discovery_log($log);

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

        $collection = 'devices';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default

        $dictionary->about = '<p>Devices.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
