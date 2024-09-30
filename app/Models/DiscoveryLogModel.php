<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;
use CodeIgniter\Database\RawSql;

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
        $properties = $resp->meta->properties;
        $this->builder->select($properties);
        $this->builder->join('discoveries', 'discovery_log.discovery_id = discoveries.id', 'left');

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
        return format_data($query->getResult(), 'discovery_log');
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
        $router = \Config\Services::router();
        if (function_exists('get_instance')) {
            $instance = & get_instance();
        } else {
            $instance = new stdClass();
            $instance->config = config('Openaudit');
        }

        if (empty($data)) {
            return null;
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
        if (!empty($data->device_id)) {
            $data->device_id = intval($data->device_id);
        }
        $data->severity = @intval($data->severity);
        if (empty($data->severity)) {
            $data->severity = 5;
        }
        if (empty($data->ip)) {
            $data->ip = '';
        }
        if (empty($data->file)) {
            $data->file = '';
        }
        switch (intval($data->severity)) {
            // NOTE - 0 is not used and will never be hit because of the empty test above
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
        $data->collection = (!empty($data->file)) ? $data->file : strtolower(str_replace('\App\Controllers\\', '', $router->controllerName()));
        $data->function = (!empty($data->function)) ? $data->function : $router->methodName();
        $data->message = (!empty($data->message)) ? $data->message : '';
        $data->command = (!empty($data->command)) ? $data->command : '';
        $data->command_status = (!empty($data->command_status)) ? $data->command_status : '';
        $data->command_time_to_execute = (!empty($data->command_time_to_execute)) ? $data->command_time_to_execute : 0;
        $data->command_output = (!empty($data->command_output)) ? $data->command_output : '';
        $data->timestamp = new RawSql('CURRENT_TIMESTAMP()');

        if (!empty($data->message) and stripos($data->message, 'Collector - Starting discovery') !== false and !empty($data->discovery_id)) {
            // Special clear of local discovery logs if start of a Collector discovery
            log_message('debug', 'Deleting discovery logs for discovery #' . $data->discovery_id);
            $this->builder->delete(['discovery_id' => $data->discovery_id]);
            // And set the discovery status
            $sql = "UPDATE `discoveries` SET `status` = 'running', `ip_all_count` = 0, `ip_responding_count` = 0, `ip_scanned_count` = 0, `ip_discovered_count` = 0, `ip_audited_count` = 0, `last_run` = NOW(), `last_log` = NOW() WHERE id = ?";
            $this->db->query($sql, [$data->discovery_id]);
        }

        $newdata = new \stdClass();
        foreach ($this->db->getFieldData('discovery_log') as $field) {
            $newdata->{$field->name} = @$data->{$field->name};
            # $newdata->{$field->name} = (isset($data->{$field->name})) ? $data->{$field->name} : '';
        }

        $this->builder->insert($newdata);
        $id = intval($this->db->insertID());

        // If we are a collector, forward the log
        if (!empty($instance->config->servers) and !empty($instance->config->servers->type) and $instance->config->servers->type === 'collector') {
            $log = $newdata;
            $post_items = array();
            $post_items[] = 'type=discovery';
            $log->message = str_replace('Collector - ', '', $data->message);
            $log->message = 'Collector - ' . $log->message;
            if (stripos($data->command, 'Rules Match - ') === 0 && stripos($data->command, ', ID: ') !== false) {
                $original_command = $data->command;
                $temp = explode(':', $data->command);
                $log->command = str_replace(', ID', '', $temp[0]);
            }
            foreach ($data as $key => $value) {
                if ($key !== 'id' && $key !== 'device_id') {
                    $post_items[] = $key . '=' . urlencode((string)@$value);
                }
            }
            $post = implode('&', $post_items);
            $server = $instance->config->servers;
            if (!empty($server->host) and !empty($server->community)) {
                $connection = curl_init($server->host . $server->community . '/index.php/input/logs');
                curl_setopt($connection, CURLOPT_CONNECTTIMEOUT, 30);
                curl_setopt($connection, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
                curl_setopt($connection, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($connection, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($connection, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($connection, CURLOPT_POSTFIELDS, $post);
                curl_exec($connection);
                if (curl_errno($connection)) {
                    log_message('error', 'Failed to send log to ' . $server->host . $server->community . '/index.php/input/logs');
                    log_message('error', json_encode(curl_getinfo($connection)));
                }
                curl_close($connection);
            }
        }

        // Note - Would not normally use @, but we want to ensure the discovery queue does not stop
        if (strpos($data->message, 'Total IPs count: ') !== false) {
            $temp = @intval(@str_replace('Total IPs count: ', '', $data->message));
            $sql = 'UPDATE `discoveries` SET `ip_all_count` = ? WHERE `id` = ?';
            $this->db->query($sql, [$temp, $data->discovery_id]);
        }

        // Note - Would not normally use @, but we want to ensure the discovery queue does not stop
        if (strpos($data->message, 'Responding IPs count: ') !== false) {
            $temp = @intval(@str_replace('Responding IPs count: ', '', $data->message));
            $sql = 'UPDATE `discoveries` SET `ip_responding_count` = ? WHERE `id` = ?';
            $this->db->query($sql, [$temp, $data->discovery_id]);
        }

        if (strpos($data->message, 'IP scan finish on device ') !== false) {
            $sql = 'UPDATE `discoveries` SET `ip_scanned_count` = `ip_scanned_count` + 1 WHERE `id` = ?';
            $this->db->query($sql, [$data->discovery_id]);
        }

        if (strpos($data->message, 'Discovered device at ') !== false) {
            $sql = 'UPDATE `discoveries` SET `ip_discovered_count` = `ip_discovered_count` + 1 WHERE `id` = ?';
            $this->db->query($sql, [$data->discovery_id]);
        }

        if (strpos($data->message, 'Audited device at ') !== false) {
            $sql = 'UPDATE `discoveries` SET `ip_audited_count` = `ip_audited_count` + 1 WHERE `id` = ?';
            $this->db->query($sql, [$data->discovery_id]);
        }

        // Make sure the discovery has a status of running if it hasn't finished as below
        if (stripos($data->message, 'Discovery has finished.') === false and !empty($data->discovery_id)) {
            $sql = "UPDATE `discoveries` SET `status` = 'running' WHERE `id` = ?";
            $this->db->query($sql, [$data->discovery_id]);
        }

        // If we have this string, mark the discovery as complete (think Collector marking a discovery as complete on the Server)
        if (stripos($data->message, 'Discovery has finished.') !== false and !empty($data->discovery_id)) {
            $sql = "UPDATE `discoveries` SET `status` = 'complete', `last_finished` = NOW(), `duration` = TIMEDIFF(`last_finished`, `last_run`) WHERE `id` = ?";
            $this->db->query($sql, [$data->discovery_id]);
        }

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
    public function listUser($where = array(), $orgs = array()): array
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

        $dictionary->sentence = '';

        $dictionary->about = '<p>Open-AudIT provides multi-tenancy out of the box!<br /><br />Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br /><br />Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>';

        $dictionary->notes = '';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->discovery_id = 'The ID of the associated discovery. Linked to <code>discoveries.id</code>';
        $dictionary->columns->device_id = 'The ID of the associated device (if any). Links to <code>devices.id</code>.';
        $dictionary->columns->timestamp = 'When this log was created.';
        $dictionary->columns->severity = 'The integer of severity.';
        $dictionary->columns->severity_text = 'Derived from the integer severity.';
        $dictionary->columns->pid = 'The Process Identifier of the running associated discovery.';
        $dictionary->columns->ip = 'The target IP this log entry referers to (if any).';
        $dictionary->columns->file = 'The Open-AudIT server code was exeucted within this file.';
        $dictionary->columns->function = 'The Open-AudIT server code was exeucted within this function.';
        $dictionary->columns->message = 'A short description of the log entry.';
        $dictionary->columns->command = 'The command executed upon the target device or Open-AudIT server code executed during discovery.';
        $dictionary->columns->command_status = 'Did the command complete successfully and return expected data.';
        $dictionary->columns->command_time_to_execute = 'How long did the command take to execute.';
        $dictionary->columns->command_output = 'The result of the command.';

        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
