<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class IntegrationsModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('integrations');
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
        $config = new \Config\OpenAudit();
        $properties = $resp->meta->properties;
        $properties[] = "orgs.name as `orgs.name`";
        $properties[] = "orgs.id as `orgs.id`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->orderBy($resp->meta->sort);
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get()->getResult();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        if ($config->decrypt_credentials === 'y') {
            $count = count($query);
            for ($i = 0; $i < $count; $i++) {
                if (!empty($query[$i]->credentials)) {
                    try {
                        $query[$i]->credentials = json_decode(simpleDecrypt($query[$i]->credentials, config('Encryption')->key), false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $e) {
                        log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                    }
                }
            }
        }
        return format_data($query, $resp->meta->collection);
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|null     The Integer ID of the newly created item, or false
     */
    public function create(object $data = null): ?int
    {
        if (empty($data)) {
            return null;
        }
        $instance = & get_instance();
        if (!empty($data->attributes)) {
            if (!is_string($data->attributes)) {
                $data->attributes = json_encode($data->attributes);
            }
        } else {
            $data->attributes = '[]';
        }

        if (empty($data->type)) {
            $data->type = 'nmis';
        }

        if (is_array($data->fields) or is_object($data->fields)) {
            $new_fields = array();
            foreach ($data->fields as $field) {
                $item = new \stdClass();
                foreach ($field as $key => $value) {
                    $item->{$key} = $value;
                }
                $new_fields[] = $item;
            }
            foreach ($new_fields as $field) {
                if (empty($field->internal_field_name) and !empty($field->external_field_name)) {
                    $field->internal_field_name = 'fields.' . $this->internalFieldFromEmpty($data->type, $field->external_field_name);
                }
            }
            $data->fields = json_encode($new_fields);
        }
        $data = $this->createFieldData('integrations', $data);
        if (empty($data)) {
            return null;
        }
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return null;
        }
        $id = $this->db->insertID();
        $integration = $this->builder->getWhere(['id' => intval($id)])->getResult()[0];
        try {
            $integration->fields = json_decode($integration->fields, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        $instance->discoveriesModel = new \App\Models\DiscoveriesModel();

        if ($integration->discovery_run === 'y') {
            $discovery = new \stdClass();
            $discovery->type = 'integration';
            $discovery->name = 'Discovery for ' . $integration->name;
            $discovery->network_address = 'http://127.0.0.1/open-audit/index.php/input/discoveries';
            $discovery->org_id = $integration->org_id;
            $discovery->discard = 'n';
            $discovery->complete = 'n';
            $discovery->subnet = '';
            $discovery->match_options = '{"match_ip":"y"}';
            $discovery_id = intval($instance->discoveriesModel->create($discovery));
            $sql = "UPDATE integrations SET discovery_id = ? WHERE id = ?";
            $query = $this->db->query($sql, [$discovery_id, $integration->id]);
        }

        $instance->fieldsModel = new \App\Models\FieldsModel();
        if (!empty($integration->fields)) {
            foreach ($integration->fields as $field) {
                if ($field->internal_field_name === '' or strpos($field->internal_field_name, 'fields.') === 0) {
                    if (strpos($field->internal_field_name, 'fields.') === 0) {
                        $field_name = str_replace('fields.', '', $field->internal_field_name);
                    } else {
                        $field_name = $this->internalFieldFromEmpty($data->type, $field->external_field_name);
                    }
                    $sql = "SELECT * FROM fields WHERE name = ? AND org_id = ?";
                    $result = $this->db->query($sql, [$field_name, $integration->org_id])->getResult();
                    if (empty($result)) {
                        # No field exists, create it
                        $field = new \stdClass();
                        $field->type = $field;
                        $field->name = $field_name;
                        $field->org_id = $integration->org_id;
                        $field->type = 'varchar';
                        $field->values = @$field->default_value;
                        $field->group_id = 1;
                        $field->placement = 'devices';
                        $instance->fieldsModel->create($field);
                    }
                }
            }
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

        // Select and delete the associated discovery
        $sql = "SELECT discovery_id FROM integrations WHERE id = ?";
        $discovery_id = intval($this->db->query($sql, [$id])->getResult()[0]->discovery_id);

        // Delete any discovery
        $sql = "DELETE FROM discoveries WHERE id = ?";
        $result = $this->db->query($sql, [$discovery_id]);

        // Delete any associated tasks
        $sql = "DELETE FROM tasks WHERE sub_resource_id = ? and type = 'integrations'";
        $result = $this->db->query($sql, [$id]);

        // Delete the log
        $sql = "DELETE FROM integrations_log WHERE integrations_id = ?";
        $result = $this->db->query($sql, [$id]);

        // Delete the integration itself
        $this->builder->delete(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        if ($this->db->affectedRows() !== 1) {
            return false;
        }
        return true;
    }

    public function deleteFields(int $id = 0, object $data = null): bool
    {
        $integration = $this->builder->getWhere(['id' => intval($id)])->getResult()[0];
        try {
            $fields = json_decode($integration->fields, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        $update = false;
        $count = count($fields);
        for ($i = 0; $i < $count; $i++) {
            if (
                $fields[$i]->internal_field_name === $data->internal_field_name and
                $fields[$i]->external_field_name === $data->external_field_name and
                $fields[$i]->external_field_type === $data->external_field_type and
                $fields[$i]->default_value === $data->default_value and
                $fields[$i]->priority === $data->priority and
                $fields[$i]->matching_attribute === $data->matching_attribute
            ) {
                unset($fields[$i]);
                $update = true;
            }
        }
        if ($update === false) {
            return false;
        }
        $fields = json_encode(array_values($fields));
        $sql = "UPDATE integrations SET fields = ? WHERE id = ?";
        $this->db->query($sql, [$fields, $id]);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    public function execute(int $id = 0)
    {
        if (empty($id)) {
            return false;
        }
        $timer_start = microtime(true);
        $instance = & get_instance();

        $log = new \stdClass();
        $log->type = 'system';
        $log->severity = 5;
        $log->user = 'system';
        $log->collection = 'integrations';
        $log->action = 'create device';
        $log->status = '';
        $log->summary = '';
        $log->detail = '';
        $log->integrations_id = $id;

        $devicesModel = new \App\Models\DevicesModel();
        $queueModel = new \App\Models\QueueModel();
        $rulesModel = new \App\Models\RulesModel();
        $orgsModel = new \App\Models\OrgsModel();
        helper('device');

    //     $this->load->library('encrypt');
    //     $this->load->model('m_devices');
    //     $this->load->model('m_device');
    //     $this->load->model('m_devices');
    //     $this->load->model('m_device');
    //     $this->load->model('m_edit_log');
    //     $this->load->model('m_queue');
    //     $this->load->model('m_rules');
    //     $this->load->helper('audit');

        /**
        The specific integration helper should implement the below (integrations_*) functions
        The order of what we do.

        integrations_pre        - Run before integration
        integrations_collection - Read all devices from a remote system
        local                   - Check retrieved devices for 'localhost' or '127.0.0.1' which may or may not be this Open-AudIT server
        local                   - Match any retrieved devices
        local                   - Update device with location (created by integrations_pre)
        local                   - Create or update devices retrieved
        local                   - Create or update custom fields
        local                   - Create or update credentials
        local                   - Run Rules
        local                   - Insert into queue for discoveries
        local                   - Get local devices
        local                   - Filter remote devices from local list
        integrations_create     - Create new devices externally
        local                   - Update local attributes from created devices
        integrations_update     - Update external devices where required
        integrations_delete     - Delete devices from the remote system if required
        integrations_post       - Run after integration
        */

        $sql = "UPDATE `integrations` SET `last_run` = NOW(), select_external_count = 0, update_external_count = 0, create_external_count = 0, select_internal_count = 0, update_internal_count = 0, create_internal_count = 0, status = 'running' WHERE id = ?";
        $this->db->query($sql, [$id]);

        $sql = "DELETE from integrations_log WHERE integrations_id = ?";
        $this->db->query($sql, [$id]);

        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'notice', 'Starting integration.')";
        $this->db->query($sql, [$id, microtime(true)]);

        $integration = $this->read($id)[0];
        if (!empty($integration->attributes->discovery_id)) {
            $integration->attributes->discovery_id = intval($integration->attributes->discovery_id);
        } else {
            $integration->attributes->discovery_id = 0;
        }
        $integration->debug = false;
        if ($integration->attributes->debug === 'y') {
            $integration->debug = true;
        }

        if (substr($integration->attributes->attributes->url, -1) !== '/') {
            $integration->attributes->attributes->url .= '/';
        }

        helper('integrations_' . $integration->attributes->type);

        // Run before integration
        integrations_pre($integration);

        // Read all devices from a remote system
        $external_devices = integrations_collection($integration);

        if ($integration->debug) {
            $message = 'EXTERNAL DEVICES - ' . count($external_devices);
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
            $this->db->query($sql, [$integration->id, microtime(true), $message]);
        }

        $external_formatted_devices = $this->externalToInternal($integration, $external_devices);

        // Check retrieved devices for 'localhost' or '127.0.0.1' which may or may not be this Open-AudIT server
        foreach ($external_formatted_devices as $device) {
            if ($device->devices->ip === '127.0.0.1' or $device->devices->ip === '127.0.1.1' or $device->devices->ip === 'localhost') {
                // The (possibly) remote system has itself as a device, see if we can determine an actual IP
                if (stripos($integration->attributes->attributes->url, '127.0.0.1') !== false or stripos($integration->attributes->attributes->url, 'localhost') !== false) {
                    // We're talking to ourselves
                    $ip = explode(',', server_ip());
                    if (!empty($ip[0])) {
                        $device->devices->ip = $ip[0];
                    }
                    unset($ip);
                } else {
                    // remote system or resolvable name
                    $exploded_url = explode('/', $integration->attributes->attributes->url);
                    $host = $exploded_url[2];
                    $exploded_host = explode(':', $host);
                    $host = $exploded_host[0];
                    if (filter_var($host, FILTER_VALIDATE_IP) === false) {
                        // we have a name that must be DNS resolvable
                        $device->devices->ip = gethostbyname($host);
                    } else {
                        $device->devices->ip = $host;
                    }
                    unset($host);
                    unset($exploded_host);
                    unset($exploded_url);
                }
                if ($device->devices->ip === '127.0.0.1' or $device->devices->ip === '127.0.1.1') {
                    $ip = explode(',', $instance->config->ip);
                    if (!empty($ip[0])) {
                        $device->devices->ip = $ip[0];
                    }
                    unset($ip);
                }
            }
        }

        $sql = "UPDATE integrations SET select_external_count = ? WHERE id = ?";
        $this->db->query($sql, [count($external_formatted_devices), $integration->id]);

        // Match any retrieved devices
        $parameters = new \stdClass();
        $parameters->log = $log;
        $parameters->match = new \stdClass();
        foreach ($integration->attributes->fields as $field) {
            if ($field->matching_attribute === 'y') {
                $field_name = str_replace('system.', 'match_', $field->internal_field_name);
                $field_name = str_replace('devices.', 'match_', $field->internal_field_name);
                $parameters->match->{$field_name} = 'y';
            }
        }

        if ($integration->debug) {
            $message = 'MATCH RULES - ' . json_encode($parameters->match);
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
            $this->db->query($sql, [$integration->id, microtime(true), $message]);

            $message = 'LOG - ' . json_encode($parameters->log);
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
            $this->db->query($sql, [$integration->id, microtime(true), $message]);
        }

        foreach ($external_formatted_devices as $device) {
            $device->devices->last_seen_by = 'integrations';
            $device->devices->org_id = $integration->attributes->org_id;
            $parameters->details = $device->devices;
            $id = deviceMatch($device->devices, 0, $parameters->match);
            if (!empty($id)) {
                // We matched an existing device
                $device->devices->id = $id;
                if ($integration->debug) {
                    $message = 'Device match found, ID: ' . $id . ' for ' . $device->devices->name . ' on IP ' . $device->devices->ip;
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                    $this->db->query($sql, [$integration->id, microtime(true), $message]);
                }
            } else {
                // No existing device
                if ($integration->debug) {
                    $message = 'No device match found for ' . $device->devices->name;
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                    $this->db->query($sql, [$integration->id, microtime(true), $message]);
                }
            }
        }

        // Update device with location (created by integrations_pre)
        $locations_parse = false;
        foreach ($integration->attributes->fields as $field) {
            if ($field->internal_field_name === 'locations.name') {
                $locations_parse = true;
            }
        }
        if ($locations_parse) {
            // loop through the devices and assign a location_id
            // REQUIRES that the collection_pre has been run and created locations as required
            $org_list = $orgsModel->getDescendants($integration->attributes->org_id);
            $org_list[] = $integration->attributes->org_id;
            $sql = "SELECT id, name FROM locations WHERE org_id IN (" . implode(',', $org_list) . ")";
            $locations = $this->db->query($sql)->getResult();

            foreach ($external_formatted_devices as $device) {
                foreach ($locations as $location) {
                    if (!empty($device->locations->name) && $device->locations->name === $location->name) {
                        $device->devices->location_id = $location->id;
                        break;
                    }
                }
            }
        }

        $discover_devices = array();

        // Create or update devices retrieved
        if ($integration->attributes->create_internal_from_external === 'y' or $integration->attributes->update_internal_from_external === 'y') {
            $update = 0;
            $create = 0;
            $device_ids = array();
            foreach ($external_formatted_devices as $device) {
                if (!empty($device->devices->id)) {
                    // Update
                    $device_ids[] = intval($device->devices->id);
                    $temp_device = new \stdClass();
                    $temp_device->id = $device->devices->id;
                    $temp_device->last_seen_by = 'integrations';
                    // If this is the FIRST time we have integrated this device
                    // IE, the existing device we have matched in the database doesn't have an omk_uuid
                    // then we should use all external attributes, disregarding the priority
                    $sql = "SELECT omk_uuid FROM devices WHERE id = ?";
                    $result = $this->db->query($sql, [intval($device->devices->id)])->getResult();
                    foreach ($integration->attributes->fields as $field) {
                        $message = 'Not updating device ID: ' . $device->devices->id . ' for ' . $device->devices->name . ' in Open-AudIT because no changed fields.';
                        if (($field->priority === 'external' or (empty($result[0]->uuid) and $integration->attributes->type === 'nmis')) and strpos($field->internal_field_name, 'devices.') !== false) {
                            // a regular field in Open-AudIT that we should update
                            $system_field = str_replace('devices.', '', $field->internal_field_name);
                            if (!empty($device->devices->{$system_field})) { # TODO - something better than not empty
                                $temp_device->{$system_field} = $device->devices->{$system_field};
                                $message = 'Updating device ID: ' . $device->devices->id . ' for ' . $device->devices->name . ' in Open-AudIT because ' . $system_field . ' is ' . $device->devices->{$system_field} . ' and priority is external.';
                            }
                        }
                    }
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                    $this->db->query($sql, [$integration->id, microtime(true), $message]);
                    $devicesModel->update($temp_device->id, $temp_device);
                    $update++;
                    $device->devices->ip = ip_address_from_db($device->devices->ip);
                    $discover_devices[] = $device;
                } else {
                    // insert
                    log_message('debug', 'Inserting: ' . json_encode($device->devices));
                    $device->devices->id = $devicesModel->create($device->devices);
                    if (!empty($device->devices->id)) {
                        $message = 'Device Created internally ID: ' . $device->devices->id . ', ' . $device->devices->name;
                        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                        $query = $this->db->query($sql, [$integration->id, microtime(true), $message]);
                        $create++;
                        $device_ids[] = intval($device->devices->id);
                        $device->devices->ip = ip_address_from_db($device->devices->ip);
                        $discover_devices[] = $device;
                    } else {
                        $message = 'Could not create device ' . $device->devices->name;
                        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?)";
                        $query = $this->db->query($sql, [$integration->id, microtime(true), $message]);
                    }
                }
            }

            $devices = json_encode($device_ids);
            $sql = "UPDATE integrations SET create_internal_count = ?, update_internal_count = ?, devices = ? WHERE id = ?";
            $this->db->query($sql, [$create, $update, $devices, $integration->id]);
            unset($create);
            unset($update);
            unset($devices);
        }

        // Create or update custom fields
        if ($integration->attributes->create_internal_from_external === 'y' or $integration->attributes->update_internal_from_external === 'y') {
            $this->upsertCustomFields($integration, $external_formatted_devices);
        }

        // Create or update credentials
        if ($integration->attributes->create_internal_from_external === 'y' or $integration->attributes->update_internal_from_external === 'y') {
            $this->upsertCredentials($integration, $external_formatted_devices);
        }

        // Run Rules
        if ($integration->attributes->create_internal_from_external === 'y' or $integration->attributes->update_internal_from_external === 'y') {
            foreach ($external_formatted_devices as $device) {
                $rulesModel->execute(null, $integration->attributes->discovery_id, 'update', intval($device->devices->id));
            }
        }

        // Insert into queue for discoveries
        if ($integration->attributes->discovery_run === 'y' && is_array($discover_devices) && count($discover_devices) > 0) {
            // Reset discovery stats and logs

            $message = 'Reset discovery stats and logs.';
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
            $this->db->query($sql, [$integration->id, microtime(true), $message]);

            $sql = "UPDATE `discoveries` SET `status` = 'running', `ip_all_count` = 0, `ip_responding_count` = 0, `ip_scanned_count` = 0, `ip_discovered_count` = 0, `ip_audited_count` = 0, `last_run` = NOW(), `last_finished` = '2001-01-01 00:00:00' WHERE id = ?";
            $this->db->query($sql, [$integration->attributes->discovery_id]);

            $sql = "DELETE FROM discovery_log WHERE discovery_id = ?";
            $this->db->query($sql, [$integration->attributes->discovery_id]);

            $sql = "INSERT INTO discovery_log VALUES (null, ?, null, ?, 6, 'notice', '', '127.0.0.1', 'm_integrations', 'execute', ?, '', 'notice', 0, '')";
            $this->db->query($sql, [$integration->attributes->discovery_id, $instance->config->timestamp, 'Starting discovery for ' . $integration->attributes->name]);

            // put each device in the queue
            $count = 0;
            foreach ($discover_devices as $device) {
                if (filter_var($device->devices->ip, FILTER_VALIDATE_IP)) {
                    $message = 'Add ' . $device->devices->name . ' to discovery queue.';
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                    $this->db->query($sql, [$integration->id, microtime(true), $message]);

                    $item = new \stdClass();
                    $item->ip = ip_address_from_db($device->devices->ip);
                    $item->discovery_id = intval($integration->attributes->discovery_id);
                    $details = json_encode($item);
                    unset($item);
                    $queueModel->create('ip_scan', $details);
                    $count = $count + 1;
                    $message = 'IP ' . $device->devices->ip . ' responding, adding to device list.';
                    $sql = "INSERT INTO discovery_log VALUES (null, ?, ?, NOW(), 7, 'debug', ?, ?, 'm_integrations', 'execute', ?, '', 'notice', 0, '')";
                    $query = $this->db->query($sql, [$integration->attributes->discovery_id, $device->devices->id, getmypid(), $device->devices->ip, $message]);
                } else {
                    $message = 'Not adding ' . $device->devices->name . ' to discovery queue - no IP.';
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', ?)";
                    $query = $this->db->query($sql, [$integration->id, microtime(true), $message]);
                }
            }

            $message = 'Added ' . $count . ' devices to discovery queue.';
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
            $this->db->query($sql, [$integration->id, microtime(true), $message]);

            $sql = "UPDATE discoveries SET status = 'running', ip_all_count = ?, ip_responding_count = ?, ip_scanned_count = ?, ip_discovered_count = 0, ip_audited_count = 0 WHERE id = ?";
            $this->db->query($sql, [$count, $count, $count, $integration->attributes->discovery_id]);

            $message = 'Starting discovery.';
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
            $this->db->query($sql, [$integration->id, microtime(true), $message]);

            if (php_uname('s') !== 'Windows NT') {
                // TODO - not cloud compatible because no 'instance' on the command line
                $instance = '';
                $command = 'php ' . ROOTPATH . 'public/open-audit/index.php util queue > /dev/null 2>&1 &';
                if (php_uname('s') === 'Linux') {
                    $command = 'nohup ' . $command;
                }
                @exec($command);
            } else {
                $command = "%comspec% /c start c:\\xampp\\php\\php.exe c:\\xampp\\htdocs\\open-audit\\index.php util queue";
                pclose(popen($command, 'r'));
            }
        }

        // Get local devices
        $local_devices = $this->getLocalDevices($integration);
        if ($integration->debug) {
            $message = 'LOCAL DEVICES - ' . count($local_devices);
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
            $this->db->query($sql, [$integration->id, microtime(true), $message]);
        }

        $local_formatted_devices = $this->internalToExternal($integration, $local_devices);
        if ($integration->debug) {
            $message = 'LOCAL FORMATTED DEVICES - ' . count($local_formatted_devices);
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
            $this->db->query($sql, [$integration->id, microtime(true), $message]);
        }

        $sql = "UPDATE integrations SET select_internal_count = ? WHERE id = ?";
        $this->db->query($sql, [count($local_formatted_devices), $integration->id]);

        $message = count($local_formatted_devices) . ' devices returned from Open-AudIT.';
        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
        $this->db->query($sql, [$integration->id, microtime(true), $message]);

        // Update integrations->devices array
        $newdev = array();
        foreach ($local_devices as $ldev) {
            $newdev[] = intval($ldev->id);
        }
        $sql = "SELECT devices FROM integrations WHERE id = ?";
        $result = $this->db->query($sql, [$integration->id])->getResult();
        $devices_array = array();
        if (!empty($result[0]->devices)) {
            try {
                $devices_array = json_decode($result[0]->devices, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                $devices_array = array();
            }
        }
        $devices_array = array_merge($devices_array, $newdev);
        $devices_array = array_unique($devices_array);
        $devices_array = array_values($devices_array);
        $devices_array = json_encode($devices_array);
        $sql = "UPDATE integrations SET devices = ? WHERE id = ?";
        $query = $this->db->query($sql, [$devices_array, $integration->id]);
        unset($newdev);
        unset($devices_array);

        // take our list of devices from OA and if any are already in the list of externally retrieved devices, remove them
        // leave only the devices from OA that are not in the external list - create those
        if ($integration->attributes->create_external_from_internal === 'y') {
            // Filter remote devices from local list
            $new_external_devices = $local_formatted_devices;
            foreach ($new_external_devices as $key => $local_device) {
                foreach ($external_devices as $external_device) {
                    foreach ($integration->attributes->fields as $field) {
                        if ($field->matching_attribute === 'y' and $field->external_field_name !== '') {
                            $test1 = $this->getValue($local_device, $field->external_field_name);
                            $test2 = $this->getValue($external_device, $field->external_field_name);
                            if ((string)$test1 === (string)$test2) {
                                if ($integration->debug) {
                                    $message = 'Matched device on ' . $field->external_field_name . '. Removing ' . $local_device->name . ' from list.';
                                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                                    $this->db->query($sql, [$integration->id, microtime(true), $message]);
                                }
                                unset($new_external_devices[$key]);
                                break;
                            }
                        }
                    }
                }
            }
            $message = count($new_external_devices) . ' devices require creating in ' . $integration->attributes->type . ' for ' . $integration->attributes->name . '.';
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
            $this->db->query($sql, [$integration->id, microtime(true), $message]);
            // Create new devices externally
            if ($integration->debug and count($new_external_devices) > 0) {
                $message = 'CREATING DEVICES - ' . count($new_external_devices);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                $this->db->query($sql, [$integration->id, microtime(true), $message]);
            }
            $created_devices = integrations_create($integration, $new_external_devices);
            if ($integration->debug) {
                $message = 'CREATED DEVICES - ' . count($created_devices);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                $this->db->query($sql, [$integration->id, microtime(true), $message]);
            }
            // Update local attributes from created devices
            $external_created_devices = $this->externalToInternal($integration, $created_devices);
            if ($integration->debug) {
                $message = 'EXTERNAL CREATED DEVICES - ' . count($external_created_devices);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                $this->db->query($sql, [$integration->id, microtime(true), $message]);
            }
            $parameters = new \stdClass();
            $parameters->log = $log;
            $parameters->match = new \stdClass();
            foreach ($integration->attributes->fields as $field) {
                if ($field->matching_attribute === 'y') {
                    $field_name = str_replace('system.', 'match_', $field->internal_field_name);
                    $field_name = str_replace('devices.', 'match_', $field->internal_field_name);
                    $parameters->match->{$field_name} = 'y';
                }
            }

            if ($integration->debug) {
                $message = 'PARAMETERS MATCH - ' . json_encode($parameters->match);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                $this->db->query($sql, [$integration->id, microtime(true), $message]);
            }

            foreach ($external_created_devices as $device) {
                $parameters->details = $device->devices;
                # Hard Set match_ip to 'y'
                // $match = new \stdClass();
                // $match->ip = 'y';
                // $device->devices->id = deviceMatch($device->devices, 0, $match);
                $device->devices->id = deviceMatch($device->devices, 0, $parameters->match);
                if (!empty($device->devices->id)) {
                    if ($integration->debug) {
                        $message = 'Found device with ID: ' . $device->devices->id . ' for ' . $device->devices->name;
                        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                        $this->db->query($sql, [$integration->id, microtime(true), $message]);
                    }
                } else {
                    $message = 'No match found for - ' . json_encode($device->devices);
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', ?)";
                    $this->db->query($sql, [$integration->id, microtime(true), $message]);
                }
                $temp_device = $device->devices;
                $temp_device->last_seen_by = 'integrations';
                if (!empty($temp_device->id)) {
                    $message = 'Updating internal device with ID: ' . $device->devices->id . ' for ' . $device->devices->name;
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                    $this->db->query($sql, [$integration->id, microtime(true), $message]);
                    if ($integration->debug) {
                        $message = "DEVICE - " . json_encode($temp_device);
                        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                        $this->db->query($sql, [$integration->id, microtime(true), $message]);
                    }
                    $devicesModel->update($temp_device->id, $temp_device);
                } else {
                    $message = 'No internal device ID returned for ' . $temp_device->name . ', not updating internal device.';
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', ?)";
                    $query = $this->db->query($sql, [$integration->id, microtime(true), $message]);
                }
            }

            $this->upsertCustomFields($integration, $external_created_devices);

            $sql = "UPDATE integrations SET create_external_count = ? WHERE id = ?";
            $this->db->query($sql, [count($new_external_devices), $integration->id]);
        }

        // Update external devices where required
        if ($integration->attributes->update_external_from_internal === 'y') {
            $update_external_devices = array();
            // Build a new list of devices where we have a match in both
            foreach ($local_formatted_devices as $local_device) {
                foreach ($external_devices as $external_device) {
                    foreach ($integration->attributes->fields as $field) {
                        if ($field->matching_attribute === 'y' and $field->external_field_name !== '') {
                            $test1 = $this->getValue($local_device, $field->external_field_name);
                            $test2 = $this->getValue($external_device, $field->external_field_name);
                            if ($test1 == $test2) {
                                // Our internal and external devices match
                                $hit = false;
                                // Update fields if the priority is internal and the values are different
                                foreach ($integration->attributes->fields as $ifield) {
                                    $test = $this->getValue($local_device, $ifield->external_field_name);
                                    if ($ifield->priority === 'internal' and !empty($ifield->external_field_name) and !empty($test)) {
                                        $test2 = $this->getValue($external_device, $ifield->external_field_name);
                                        if ((string)$test !== (string)$test2) {
                                            $external_device = $this->setValue($external_device, $ifield->external_field_name, $test);
                                            $hit = true;
                                            if ($integration->debug) {
                                                // TODO - ip not seeing in logs
                                                $message = "Updating {$local_device->name} at {$local_device->configuration->host} in NMIS because {$ifield->external_field_name} == $test and priority is internal.";
                                                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                                                $this->db->query($sql, [$integration->id, microtime(true), $message]);
                                            }
                                        }
                                    }
                                }
                                if ($hit) {
                                    $update_external_devices[] = $external_device;
                                }
                                break;
                            }
                        }
                    }
                }
            }
            // Now we have a new list with devices to be updated with changed values
            $message = count($update_external_devices) . ' devices require updating in ' . $integration->attributes->type . ' for ' . $integration->attributes->name . '.';
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
            $this->db->query($sql, [$integration->id, microtime(true), $message]);

            $sql = "UPDATE integrations SET update_external_count = ? WHERE id = ?";
            $this->db->query($sql, [count($update_external_devices), $integration->id]);

            integrations_update($integration, $update_external_devices);
        }

        // Delete devices from the remote system if required
        if ($integration->attributes->delete_external_from_internal === 'y') {
            if (count($external_devices) > count($local_formatted_devices)) {
                $message = count($external_devices) . ' external devices and ' . count($local_formatted_devices) . ' local devices';
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                $this->db->query($sql, [$integration->id, microtime(true), $message]);
                // Select all devices retrieved from external, compare to internal list - any NOT in the internal list, delete
                $delete_external_devices = $external_devices;
                foreach ($local_formatted_devices as $key => $local_device) {
                    foreach ($delete_external_devices as $ekey => $external_device) {
                        foreach ($integration->attributes->fields as $field) {
                            if ($field->matching_attribute === 'y' and $field->external_field_name !== '') {
                                $test1 = $this->getValue($local_device, $field->external_field_name);
                                $test2 = $this->getValue($external_device, $field->external_field_name);
                                if ($test1 == $test2) {
                                    if ($integration->debug) {
                                        $message = 'Removing ' . $external_device->name . ' from delete list (not deleting this device in NMIS).';
                                        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                                        $this->db->query($sql, [$integration->id, microtime(true), $message]);
                                    }
                                    unset($delete_external_devices[$ekey]);
                                    break;
                                }
                            }
                        }
                    }
                }
                $delete_external_devices = array_values($delete_external_devices);
                $message = count($delete_external_devices) . ' devices require deleting in ' . $integration->attributes->type . ' for ' . $integration->attributes->name . '.';
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                $this->db->query($sql, [$integration->id, microtime(true), $message]);
                integrations_delete($integration, $delete_external_devices);
            } else {
                $message = '0 devices require deleting in ' . $integration->attributes->type . ' for ' . $integration->attributes->name . '.';
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                $this->db->query($sql, [$integration->id, microtime(true), $message]);
            }
        }

        // Run after integration
        integrations_post($integration, $external_devices);

        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'notice', 'Completed integration.')";
        $this->db->query($sql, [$integration->id, microtime(true)]);

        $duration = (microtime(true) - $timer_start);
        $sql = "UPDATE integrations SET duration = ?, status = 'complete' WHERE id = ?";
        $this->db->query($sql, [intval($duration), $integration->id]);
    }

    public function externalToInternal($integration, $external_devices)
    {
        // Take the external data and make an internal structure
        $external_formatted_devices = array();

        foreach ($external_devices as $device) {
            $newdevice = new \stdClass();
            foreach ($integration->attributes->fields as $field) {
                if (empty($field->internal_field_name)) {
                    $temp = explode('.', $field->external_field_name);
                    $field->internal_field_name = 'fields.' . $integration->attributes->type . '_' . $temp[count($temp) - 1];
                }

                if (!empty($field->internal_field_name)) {
                    $int = explode('.', $field->internal_field_name);
                    // If we don't have newdevice->system or newdevice->fields, etc
                    if (empty($newdevice->{$int[0]})) {
                        $newdevice->{$int[0]} = new \stdClass();
                    }
                    // If we don't have newdevice->system->name, et al
                    // TODO - This only accounts for two levels deep
                    if (empty($newdevice->{$int[0]}->{$int[1]})) {
                        $newdevice->{$int[0]}->{$int[1]} = array_reduce(explode('.', $field->external_field_name), function ($previous, $current) {
                            return isset($previous->$current) && !empty($previous->$current) ? $previous->$current : null;
                        }, $device);
                        if (empty($newdevice->{$int[0]}->{$int[1]}) and $field->default_value === '') {
                            unset($newdevice->{$int[0]}->{$int[1]});
                        }
                        if (empty($newdevice->{$int[0]}->{$int[1]}) and $field->default_value !== '') {
                            $newdevice->{$int[0]}->{$int[1]} = $field->default_value;
                        }
                    }
                }
            }
            $external_formatted_devices[] = $newdevice;
        }

        # Ensure we have an IP in devices.ip
        foreach ($external_formatted_devices as $device) {
            if (isset($device->devices->ip) and !empty($device->devices->ip)) {
                if (!filter_var($device->devices->ip, FILTER_VALIDATE_IP)) {
                    if (strpos('.', $device->devices->ip) !== false) {
                        $device->devices->dns_fqdn = $device->devices->ip;
                    } else {
                        $device->devices->dns_hostname = $device->devices->ip;
                    }
                    $device->devices->ip = gethostbyname($device->devices->ip);
                }
                $fqdn = @gethostbyaddr($device->devices->ip);
                if (empty($device->devices->dns_fqdn) and !empty($fqdn) and strpos($fqdn, '.') !== false) {
                    $device->devices->dns_fqdn = $fqdn;
                }
            }
        }
        return $external_formatted_devices;
    }

    public function getLocalDevices($integration)
    {
        $devices = array();
        if (empty($integration)) {
            return $devices;
        }
        $orgsModel = new \App\Models\OrgsModel();
        $groupsModel = new \App\Models\GroupsModel();
        $queriesModel = new \App\Models\QueriesModel();
        $instance = & get_instance();
        $orgs = $orgsModel->getDescendants($integration->attributes->org_id);
        $orgs[] = $integration->attributes->org_id;
        if (empty($instance->user)) {
            $instance->user = new \stdClass();
        }
        if (empty($instance->user->org_list)) {
            $instance->user->org_list = implode(',', $orgs);
        }
        helper('security');

        // Select by Attribute
        if ($integration->attributes->select_internal_type === 'attribute') {
            $sql = "SELECT devices.*, locations.name AS `locations_name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE devices." . $integration->attributes->select_internal_attribute . " = ? and devices.org_id IN (" . implode(',', $orgs) . ") AND status = 'production'";
            $data = array($integration->attributes->select_internal_value);
            $query = $this->db->query($sql, $data);
            $devices = $query->getResult();
        }
        // Select by Group
        if ($integration->attributes->select_internal_type === 'group') {
            $device_ids = $groupsModel->execute(intval($integration->attributes->select_internal_attribute), $instance->user);
            $dev_ids = array();
            foreach ($device_ids as $device) {
                $dev_ids[] = $device->attributes->{'devices.id'};
            }
            $dev_ids = implode(',', $dev_ids);
            $sql = "SELECT devices.*, locations.name AS `locations_name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE devices.id in (" . $dev_ids . ")";
            $query = $this->db->query($sql);
            $devices = $query->getResult();
        }
        // Select by Query
        if ($integration->attributes->select_internal_type === 'query') {
            $devices = $queriesModel->execute(intval($integration->attributes->select_internal_attribute), $instance->user);
            $dev_ids = array();
            foreach ($devices as $device) {
                if (!empty($device->attributes->{'devices.id'})) {
                    $dev_ids[] = intval($device->attributes->{'devices.id'});
                } elseif (!empty($device->attributes->{'id'})) {
                    $dev_ids[] = intval($device->attributes->{'id'});
                }
            }
            $dev_ids = implode(',', $dev_ids);
            if (!empty($dev_ids)) {
                $sql = "SELECT devices.*, locations.name AS `locations_name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE devices.id in (" . $dev_ids . ")";
                $query = $this->db->query($sql);
                $devices = $query->getResult();
            }
        }

        // Format IP
        $device_ids = array();
        foreach ($devices as $device) {
            $device->ip = ip_address_from_db($device->ip);
            $device_ids[] = intval($device->id);
        }

        // Default field population
        foreach ($devices as $device) {
            foreach ($integration->attributes->fields as $field) {
                if (strpos($field->internal_field_name, 'devices.') !== false) {
                    $name = str_replace('devices.', '', $field->internal_field_name);
                    if (!isset($device->{$name})) {
                        $device->{$name} = '';
                    }
                    if ($device->{$name} === '' and (string)$field->default_value !== '') {
                        $device->{$name} = $field->default_value;
                    }
                }
            }
        }

        if (! empty($device_ids)) {
            // OA Fields
            $sql = "SELECT field.*, fields.name FROM `field` LEFT JOIN `fields` ON (field.field_id = fields.id) WHERE `device_id` IN (" . implode(',', $device_ids) . ")";
            $query = $this->db->query($sql);
            $fields = $query->getResult();

            // build a new array of fields that contains the actual internal_field_name (not an empty string)
            // use this array so we can iterate over it, but not affect the actual integration
            // TODO - maybe be able to actually use the integration, overwriting blank field names
            $custom_fields = array();
            foreach ($integration->attributes->fields as $integration_field) {
                if ($integration_field->internal_field_name === '' or strpos($integration_field->internal_field_name, 'fields.') !== false) {
                    $newfield = new \stdClass();
                    $newfield = clone $integration_field;
                    $newfield->internal_field_name = str_replace('fields.', '', $integration_field->internal_field_name);
                    if ($newfield->internal_field_name === '') {
                        $newfield->internal_field_name = $this->internalFieldFromEmpty($integration->attributes->type, $integration_field->external_field_name);
                    }
                    $custom_fields[] = $newfield;
                }
            }

            foreach ($devices as $device) {
                $device->fields = new \stdClass();
                foreach ($custom_fields as $custom_field) {
                    foreach ($fields as $field) {
                        if ($field->name === $custom_field->internal_field_name and intval($field->device_id) === intval($device->id)) {
                            $device->fields->{$custom_field->internal_field_name} = $field->value;
                        }
                    }
                    if (empty($device->fields->{$custom_field->internal_field_name})) {
                        // set the default value
                        $device->fields->{$custom_field->internal_field_name} = $custom_field->default_value;
                    }
                }
            }

            // Global credentials
            $sql = "SELECT * FROM credentials";
            $query = $this->db->query($sql);
            $credentials = $query->getResult();
            if (is_array($credentials)) {
                foreach ($devices as $device) {
                    try {
                        $retrieved_credentials = json_decode($device->credentials, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $e) {
                        log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                    }
                    $device->credentials = new \stdClass();
                    foreach ($credentials as $credential) {
                        if (is_array($retrieved_credentials)) {
                            foreach ($retrieved_credentials as $value) {
                                if (intval($value) === intval($credential->id) && ! empty($credential->credentials)) {
                                    if (is_string($credential->credentials)) {
                                        try {
                                            $credential->credentials = json_decode(simpleDecrypt($credential->credentials, config('Encryption')->key), false, 512, JSON_THROW_ON_ERROR);
                                        } catch (\JsonException $e) {
                                            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                                        }
                                    }
                                    if (!empty($credential->credentials)) {
                                        foreach ($credential->credentials as $key2 => $value2) {
                                            $device->credentials->{$credential->type . '_' . $key2} = $value2;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            // Device specific credentials
            $sql = "SELECT * FROM credential";
            $query = $this->db->query($sql);
            $credentials = $query->getResult();
            if (is_array($credentials)) {
                foreach ($devices as $device) {
                    foreach ($credentials as $credential) {
                        if (intval($credential->device_id) === intval($device->id)) {
                            try {
                                $credential->credentials = json_decode(simpleDecrypt($credential->credentials, config('Encryption')->key), false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $e) {
                                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                            }
                            foreach ($credential->credentials as $key => $value) {
                                $device->credentials->{$credential->type . '_' . $key} = $value;
                            }
                        }
                    }
                }
            }
        }
        return $devices;
    }

    public function getValue($device, $field)
    {
        $value = @array_reduce(explode('.', $field), function ($previous, $current) {
            return isset($previous->$current) && !empty($previous->$current) ? $previous->$current : null;
        }, $device);
        if (isset($value)) {
            return $value;
        } else {
            return '';
        }
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $instance = & get_instance();
        $include = array();
        $sql = "SELECT * FROM integrations_log WHERE integrations_id = ? AND `severity_text` != 'debug' LIMIT " . intval($instance->resp->meta->limit);
        if (!empty($instance->resp->meta->debug)) {
            $sql = "SELECT * FROM integrations_log WHERE integrations_id = ? LIMIT " . intval($instance->resp->meta->limit);
        }
        $result = $this->db->query($sql, [$id])->getResult();
        $include['logs'] = format_data($result, 'integrations_log');

        $sql = "SELECT `devices` FROM integrations WHERE id = ?";
        $data = array(intval($id));
        $result = $this->db->query($sql, [$id])->getResult();
        try {
            $device_ids = json_decode($result[0]->devices, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        if (!empty($device_ids)) {
            $sql = "SELECT id, name, ip, type, fqdn FROM devices WHERE id IN (" . implode(',', $device_ids) . ")";
            $devices = $this->db->query($sql)->getResult();
            $include['devices'] = format_data($devices, 'devices');
        }

        $sql = "SELECT `select_internal_type` FROM integrations WHERE id = ?";
        $data = array(intval($id));
        $type = $this->db->query($sql, [$id])->getResult()[0]->select_internal_type;
        if ($type === 'query') {
            $queries = model('App\Models\QueriesModel');
            $include['queries'] = $queries->listUser();
        }
        if ($type === 'group') {
            $groups = model('App\Models\GroupsModel');
            $include['groups'] = $groups->listUser();
        }
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
        $include = array();
        $groupsModel = new \App\Models\GroupsModel();
        $include['groups'] = $groupsModel->listUser();

        $queriesModel = new \App\Models\QueriesModel();
        $include['queries'] = $queriesModel->listUser();

        $include['devices_fields'] = $this->db->getFieldNames('devices');

        $instance = & get_instance();

        if (php_uname('s') !== 'Windows NT') {
            $auth_method = '';
            $token_auth_method = '';
            $config_file_contents = '';
            $auth = '';
            if (file_exists($instance->config->commercial_dir . '/conf/opCommon.json')) {
                $config_file_contents = file_get_contents($instance->config->commercial_dir . '/conf/opCommon.json');
            }
            if (!empty($config_file_contents)) {
                try {
                    $config = json_decode($config_file_contents, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
            }
            if (!empty($config->authentication->auth_method_1) and $config->authentication->auth_method_1 === 'token') {
                $auth = 'auth_method_1';
            }
            if (!empty($config->authentication->auth_method_2) and $config->authentication->auth_method_2 === 'token') {
                $auth = 'auth_method_2';
            }
            if (!empty($config->authentication->auth_method_3) and $config->authentication->auth_method_3 === 'token') {
                $auth = 'auth_method_3';
            }
            if ($auth === '') {
                $include['warning'] = 'Please set auth_method_1 (or 2 or 3) in the config (' . $instance->config->commercial_dir . '/conf/opCommon.json) to token to avoid having to use credentials for local NMIS Integrations.';
            }
            if (empty($config->authentication->auth_token_key)) {
                $include['warning'] = 'Please set an auth_token_key in the config (' . $instance->config->commercial_dir . '/conf/opCommon.json) to avoid having to use credentials for local NMIS Integrations.';
            }
        }
        return $include;
    }

    public function internalFieldFromEmpty(string $type = '', string $field_name = '')
    {
        // $return_field_name = '';
        // foreach ($integration->fields as $integration_field) {
        //     if ($integration_field->external_field === $field_name) {
        //         $return_field_name = $integration->type . '_' . $integration_field[count($integration_field)-1];
        //     }
        // }
        // return $return_field_name;
        $return_field_name = '';
        $explode = explode('.', $field_name);
        $return_field_name = $type . '_' . $explode[count($explode) - 1];
        return $return_field_name;
    }

    public function internalToExternal($integration, $internal_devices)
    {
        $instance = & get_instance();
        $newdevices = array();
        foreach ($internal_devices as &$internal_device) {
            $newdevice = new \stdClass();
            foreach ($integration->attributes->fields as $field) {
                if (! empty($field->external_field_name)) {
                    if (empty($field->internal_field_name)) {
                        // Not an Open-AudIT field, populate the default
                        $newdevice = $this->setValue($newdevice, $field->external_field_name, $field->default_value);
                    } else {
                        $value = $this->getValue($internal_device, str_replace('system.', '', $field->internal_field_name));
                        $value = $this->getValue($internal_device, str_replace('devices.', '', $field->internal_field_name));
                        if (empty($value) and (string)$field->default_value !== '') {
                            $value = $field->default_value;
                        }
                        if (!empty($value)) {
                            switch ($field->external_field_type) {
                                case 'text':
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, (string)$value);
                                    break;

                                case 'integer':
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, intval($value));
                                    break;

                                case 'bool':
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, filter_var($value, FILTER_VALIDATE_BOOLEAN));
                                    break;

                                case 'bool_one_zero':
                                    if ($value === 'y' or $value === 'Y' or $value === '1' or $value === 1 or $value === true) {
                                        $value = 1;
                                    } else {
                                        $value = 0;
                                    }
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, $value);
                                    break;

                                case 'bool_y_n':
                                    if ($value === 'y' or $value === 'Y' or $value === '1' or $value === 1 or $value === true) {
                                        $value = 'y';
                                    } else {
                                        $value = 'n';
                                    }
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, $value);
                                    break;

                                case 'capitalise':
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, ucwords($value));
                                    break;

                                case 'lower':
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, strtolower($value));
                                    break;

                                case 'upper':
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, strtoupper($value));
                                    break;

                                case 'datetime_now':
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, $instance->config->timestamp);
                                    break;

                                case 'datetime_Y-m-d H:i:s':
                                    $value = date_create_from_format("Y-m-d H:i:s", $value);
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, $value);
                                    break;

                                case 'date_now':
                                    $value = date_create_from_format("Y-m-d", $instance->config->timestamp);
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, $value);
                                    break;

                                case 'date_Y-m-d':
                                    $value = date_create_from_format("Y-m-d", $value);
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, $value);
                                    break;

                                case 'date_m-d-Y':
                                    // from Y-m-d to m-d-Y
                                    $value = date_create_from_format("Y-m-d", $value);
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, date_format($value, 'm-d-Y'));
                                    break;

                                case 'date_d-m-Y':
                                    // from Y-m-d to m-d-Y
                                    $value = date_create_from_format("Y-m-d", $value);
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, date_format($value, 'd-m-Y'));
                                    break;

                                default:
                                    $newdevice = $this->setValue($newdevice, $field->external_field_name, (string)$value);
                                    break;
                            }
                        }
                    }
                }
            }
            $newdevices[] = $newdevice;
        }
        return $newdevices;
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
        $properties[] = 'integrations.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'integrations.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'integrations');
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
     * [queue description]
     * @param  int $id The ID of the integration to start
     * @return bool True on success, false on failure
     */
    public function queue(int $id = 0): bool
    {
        $item = $this->read($id);
        $integration = $item[0];
        if (empty($integration)) {
            return false;
        }
        // Delete all integrations logs
        $sql = 'DELETE from integrations_log WHERE integrations_id = ?';
        $this->db->query($sql, [$id]);
        // Reset attributes
        $sql = "UPDATE `integrations` SET `last_run` = NOW(), select_external_count = 0, update_external_count = 0, create_external_count = 0, select_internal_count = 0, update_internal_count = 0, create_internal_count = 0, status = 'queued' WHERE id = ?";
        $this->db->query($sql, [$id]);
        // Queue the item
        $queueModel = new \App\Models\QueueModel();
        $data = new \stdClass();
        $data->details = new \stdClass();
        $data->details->name = $integration->attributes->name;
        $data->details->org_id = $integration->attributes->org_id;
        $data->details->integrations_id = $id;
        $data->type = 'integrations';
        $temp = $queueModel->create($data);
        if (!empty($temp)) {
            return true;
        } else {
            return false;
        }
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
        $config = new \Config\OpenAudit();
        $properties = array();
        $properties[] = 'integrations.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $properties[] = 'orgs.id as `orgs.id`';
        $properties[] = 'discoveries.name as `discoveries.name`';
        $properties[] = 'discoveries.id as `discoveries.id`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'integrations.org_id = orgs.id', 'left');
        $this->builder->join('discoveries', 'integrations.discovery_id = discoveries.id', 'left');
        $query = $this->builder->getWhere(['integrations.id' => intval($id)])->getResult();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        if ($config->decrypt_credentials === 'y') {
            if (!empty($query[0]->credentials)) {
                try {
                    $query[0]->credentials = json_decode(simpleDecrypt($query[0]->credentials, config('Encryption')->key), false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
            }
        }
        if ($query[0]->select_internal_type === 'group') {
            $sql = "SELECT `name` FROM groups WHERE `id` = ?";
            $data = array(intval($query[0]->select_internal_attribute));
            $query[0]->{'groups.name'} = $this->db->query($sql, $data)->getResult()[0]->name;
        }
        if ($query[0]->select_internal_type === 'query') {
            $sql = "SELECT `name` FROM queries WHERE `id` = ?";
            $data = array(intval($query[0]->select_internal_attribute));
            $query[0]->{'queries.name'} = $this->db->query($sql, $data)->getResult()[0]->name;
        }
        return format_data($query, 'integrations');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('integrations')) {
            return true;
        }
        return false;
    }

    public function setValue($device, $field, $value)
    {
        $explode = explode('.', $field);
        if (count($explode) === 1) {
            $device->{$field} = $value;
        }
        if (count($explode) === 2) {
            if (empty($device->{$explode[0]})) {
                $device->{$explode[0]} = new \stdClass();
            }
            $device->{$explode[0]}->{$explode[1]} = $value;
        }
        return $device;
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
        $integration = $this->builder->getWhere(['id' => intval($id)])->getResult()[0];
        if (empty($integration->attributes)) {
            $integration->attributes = new \stdClass();
        } else {
            try {
                $integration->attributes = json_decode($integration->attributes, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
        }
        if (empty($integration->fields)) {
            $integration->fields = new \stdClass();
        } else {
            try {
                $integration->fields = json_decode($integration->fields, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
        }

        if (!empty($data->attributes)) {
            foreach ($data->attributes as $key => $value) {
                $integration->attributes->$key = $value;
            }
            $data->attributes = json_encode($integration->attributes);
        }

        if (!empty($data->fields)) {
            $newfield = new stdClass();
            foreach ($data->fields as $key => $value) {
                $newfield->{$key} = $value;
            }
            $integration->fields[] = $newfield;
            $data->fields = $integration->fields;
            $data->fields = json_encode($data->fields);
        }

        $data = $this->updateFieldData('integrations', $data);
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    public function upsertCredentials($integration, $devices)
    {
        helper('security');

        $cred_fields = new \stdClass();
        foreach ($integration->attributes->fields as $field) {
            // check if we need to update various fields
            if (strpos($field->internal_field_name, 'credentials.') !== false) {
                $field_name = str_replace('credentials.', '', $field->internal_field_name);
                $cred_fields->{$field_name} = $field->priority;
            }
        }

        foreach ($devices as $device) {
            if (!empty($device->credentials->snmp_community)) {
                // If we have no SNMP credentials for a device in Open-AudIT but we
                // do have credentials from externally, insert those - regardless of priority
                // If we have priority for the external, delete any existing and insert external creds
                $sql = "SELECT COUNT(*) AS `count` FROM credential WHERE device_id = ? AND type = 'snmp'";
                $data = array(intval($device->devices->id));
                $query = $this->db->query($sql, $data);
                $result = $query->getResult();

                $credentials = new \stdClass();
                $credentials->community = $device->credentials->snmp_community;
                $credentials = (string)simpleEncrypt(json_encode($credentials), config('Encryption')->key);

                if (intval($result[0]->count) === 0) {
                    $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'snmp', ?, 'system', NOW())";
                    $this->db->query($sql, [$device->devices->id, 'SNMP from ' . $integration->attributes->type, '', $credentials]);
                } else {
                    if ($cred_fields->snmp_community === 'external') {
                        $sql = "DELETE FROM credential WHERE device_id = ? AND type = 'snmp'";
                        $this->db->query($sql, [intval($device->devices->id)]);
                        $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'snmp', ?, 'system', NOW())";
                        $this->db->query($sql, [$device->devices->id, 'SNMP from ' . $integration->attributes->type, '', $credentials]);
                    }
                }
            }

            if (!empty($device->credentials->windows_username)) {
                $sql = "SELECT COUNT(*) AS `count` FROM credential WHERE device_id = ? AND type = 'windows'";
                $data = array(intval($device->devices->id));
                $query = $this->db->query($sql, $data);
                $result = $query->getResult();

                $credentials = new \stdClass();
                $credentials->username = $device->credentials->windows_username;
                $credentials->password = $device->credentials->windows_password;
                $credentials = (string)simpleEncrypt(json_encode($credentials), config('Encryption')->key);

                if (intval($result[0]->count) === 0) {
                    $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'snmp', ?, 'system', NOW())";
                    $this->db->query($sql, [$device->devices->id, 'Windows from ' . $integration->attributes->type, '', $credentials]);
                } else {
                    if ($cred_fields->windows_username === 'external' or $cred_fields->windows_password === 'external') {
                        $sql = "DELETE FROM credential WHERE device_id = ? AND type = 'windows'";
                        $this->db->query($sql, [intval($device->devices->id)]);
                        $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'snmp', ?, 'system', NOW())";
                        $this->db->query($sql, [$device->devices->id, 'Windows from ' . $integration->attributes->type, '', $credentials]);
                    }
                }
            }

            if (!empty($device->credentials->authentication_passphrase) or !empty($device->credentials->privacy_passphrase)) {
                $sql = "SELECT COUNT(*) AS `count` FROM credential WHERE device_id = ? AND type = 'snmp_v3'";
                $data = array(intval($device->devices->id));
                $query = $this->db->query($sql, $data);
                $result = $query->getResult();

                $credentials = new \stdClass();
                $credentials->authentication_passphrase = $device->credentials->authentication_passphrase;
                $credentials->authentication_protocol = $device->credentials->authentication_protocol;
                $credentials->privacy_passphrase = $device->credentials->privacy_passphrase;
                $credentials->privacy_protocol = $device->credentials->privacy_protocol;
                $credentials->security_name = $device->credentials->security_name;
                $credentials->security_level = $device->credentials->security_level = 'noAuthNoPriv';
                if (!empty($credentials->authentication_passphrase)) {
                    $device->credentials->security_level = 'AuthNoPriv';
                }
                if (!empty($credentials->privacy_passphrase)) {
                    $device->credentials->security_level = 'authPriv';
                }
                $credentials = (string)simpleEncrypt(json_encode($credentials), config('Encryption')->key);

                if (intval($result[0]->count) === 0) {
                    $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'snmp_v3', ?, 'system', NOW())";
                    $this->db->query($sql, [$device->devices->id, 'SNMPv3 from ' . $integration->attributes->type, '', $credentials]);
                } else {
                    if ($cred_fields->authentication_passphrase === 'external' or $cred_fields->security_name === 'external') {
                        $sql = "DELETE FROM credential WHERE device_id = ? AND type = 'snmp_v3'";
                        $this->db->query($sql, [intval($device->devices->id)]);
                        $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'snmp_v3', ?, 'system', NOW())";
                        $this->db->query($sql, [$device->devices->id, 'SNMPv3 from ' . $integration->attributes->type, '', $credentials]);
                    }
                }
            }

            if (!empty($device->credentials->ssh_username)) {
                $sql = "SELECT COUNT(*) AS `count` FROM credential WHERE device_id = ? AND type = 'ssh'";
                $data = array(intval($device->devices->id));
                $query = $this->db->query($sql, $data);
                $result = $query->getResult();

                $credentials = new \stdClass();
                $credentials->username = $device->credentials->ssh_username;
                $credentials->password = $device->credentials->ssh_password;
                $credentials = (string)simpleEncrypt(json_encode($credentials), config('Encryption')->key);

                if (intval($result[0]->count) === 0) {
                    $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'ssh', ?, 'system', NOW())";
                    $this->db->query($sql, [$device->devices->id, 'SSH from ' . $integration->attributes->type, '', $credentials]);
                } else {
                    if ($cred_fields->windows_username === 'external' or $cred_fields->windows_password === 'external') {
                        $sql = "DELETE FROM credential WHERE device_id = ? AND type = 'ssh'";
                        $this->db->query($sql, [intval($device->devices->id)]);
                        $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'ssh', ?, 'system', NOW())";
                        $this->db->query($sql, [$device->devices->id, 'SSH from ' . $integration->attributes->type, '', $credentials]);
                    }
                }
            }
        }
    }

    public function upsertCustomFields($integration, $devices)
    {
        $sql = "SELECT * FROM fields";
        $query = $this->db->query($sql);
        $all_fields = $query->getResult();
        foreach ($devices as $device) {
            $sql = "SELECT * FROM field WHERE device_id = ?";
            $device_fields = $this->db->query($sql, [$device->devices->id])->getResult();
            foreach ($integration->attributes->fields as $field) {
                if ($field->priority === 'external' and (strpos($field->internal_field_name, 'fields.') !== false or $field->internal_field_name === '')) {
                    // a custom field in Open-AudIT that we should update
                    $field_name = str_replace('fields.', '', $field->internal_field_name);
                    if (empty($field_name)) {
                        $external_field = explode('.', $field->external_field_name);
                        $field_name = $integration->attributes->type . '_' . $external_field[count($external_field) - 1];
                    }
                    $id = 0;
                    foreach ($all_fields as $temp_field) {
                        if ($field_name === $temp_field->name) {
                            $id = $temp_field->id;
                        }
                    }
                    if (!$id) {
                        // Throw an error as we should always have a field already created
                        log_message('error', 'upsertCustomFields could not find an existing field.');
                    }
                    $device_field_id = 0;
                    $value = '';
                    foreach ($device_fields as $device_field) {
                        if ($id === $device_field->field_id) {
                            $device_field_id = $device_field->id;
                            $value = $device_field->value;
                        }
                    }
                    if (!$device_field_id) {
                        // Insert a new field
                        $sql = "INSERT INTO `field` (`id`, `device_id`, `field_id`, `timestamp`, `value`) VALUES (null, ?, ?, NOW(), ?)";
                        log_message('debug', 'DeviceID: ' . $device->devices->id . ' FieldID: ' .  $id . ' Value: ' . $device->fields->{$field_name});
                        $this->db->query($sql, [$device->devices->id, $id, $device->fields->{$field_name}]);
                        // Insert an edit log
                        $sql = "INSERT INTO edit_log (user_id, device_id, details, source, weight, db_table, db_column, timestamp, value, previous_value) VALUES (0, ?, 'Field data was created', 'integrations', 1000, 'field', ?, NOW(), ?, ?)";
                        $this->db->query($sql, [$device->devices->id, $field_name, $device->fields->{$field_name}, $value]);
                    } else {
                        // We already have the field associated to the device, check if the value has changed befofe updating
                        if ((string)$value !== (string)$device->fields->{$field_name}) {
                            // It IS different - update it
                            $sql = "UPDATE field SET value = ? WHERE id = ?";
                            $query = $this->db->query($sql, [$device->fields->{$field_name}, $device_field_id]);
                            // Insert an edit log
                            $sql = "INSERT INTO edit_log (user_id, device_id, details, source, weight, db_table, db_column, timestamp, value, previous_value) VALUES (0, ?, 'Field data was updated', 'integrations', 1000, 'field', ?, NOW(), ?, ?)";
                            $this->db->query($sql, [$device->devices->id, $field_name, $device->fields->{$field_name}, $value]);
                        }
                    }
                }
            }
        }
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'integrations';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'type', 'description', 'last_run', 'orgs.name');
        $dictionary->attributes->create = array('name', 'org_id', 'attributes', 'fields'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Use Open-AudIT to integrate with external systems.';

        $dictionary->about = '<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br /><br />The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br /><br />An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = \'Debian\'</code><br /><br /></p>';

        $dictionary->system_fields = $this->db->getFieldNames('devices');
        sort($dictionary->system_fields);
        $dictionary->remote_format = array('string', 'int', 'bool', 'date_YMD', 'date_MDY', 'date_DMY');
        sort($dictionary->remote_format);
        $dictionary->transform = array('', 'string', 'int', 'bool', 'capitalise', 'lower', 'upper', 'date', 'date_now', 'date_time', 'datetime_now', 'int_to_bool', 'int_to_yn', 'yn_to_int', 'yn_to_bool');
        sort($dictionary->transform);

        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->type = 'The type of the integration (usually named after the external system).';
        $dictionary->columns->populate_from_local = 'Should we add devices from the remote service, locally.';
        $dictionary->columns->populate_from_remote = 'Should we populate the external system from our local devices.';
        $dictionary->columns->query_id = 'The query that provides a list of devices for the integration. Links to <code>queries.id</code>.';
        $dictionary->columns->group_id = 'The group that provides a list of devices for the integration. Links to <code>groups.id</code>.';
        $dictionary->columns->last_run = 'The last time this integration was run.';
        $dictionary->columns->status = 'The status of this integration';
        $dictionary->columns->additional_items = 'Populated with additional data from the external system, in a JSON representation.';
        $dictionary->columns->devices = 'Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.';
        $dictionary->columns->locations = 'Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.';
        $dictionary->columns->debug = 'Unused.';
        $dictionary->columns->discovery_id = 'The associated discovery (if required). Links to <code>discoveries.id</code>.';
        $dictionary->columns->fields = 'A JSON representation of the fields for this integration.';
        $dictionary->columns->duration = 'Calculated upon integration completion, the time taken to execute this integration.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;

        $dictionary->columns->attributes = new \stdClass();
        $dictionary->columns->attributes->url = 'The URL of the external system.';
        $dictionary->columns->attributes->username = 'The username used to access the external system.';
        $dictionary->columns->attributes->password = 'The password used to access the external system.';

        $dictionary->columns->server = 'Is the NMIS server local (on this Open-AudIT server) or remote?';

        $dictionary->columns->create_internal_from_external = 'When integrating devices from the external system, if the device doesn\'t exist in Open-AudIT should we create it?';
        $dictionary->columns->update_internal_from_external = 'When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?';
        $dictionary->columns->discovery_run = 'When retrieve an external device, should we run discovery upon it?';
        $dictionary->columns->select_internal_type = 'How should we select devices to be integrated (using an Attribute, Query or a Group).';
        $dictionary->columns->select_internal_attribute = 'The attribute to test (from the \'devices\' table).';
        $dictionary->columns->select_internal_value = 'This item must match the value of the attribute selected or contains the ID of the query to be used.';

        $dictionary->columns->create_external_count = 'The calculated number of devices to be created externally.';
        $dictionary->columns->create_internal_count = 'The calculated number of devices to be created in Open-AudIT.';
        $dictionary->columns->create_external_from_internal = 'If an Open-AudIT device is not on the external system, should we create it.';
        $dictionary->columns->update_external_from_internal = 'If an Open-AudIT device has been changed, should we update the external system.';
        $dictionary->columns->delete_external_from_internal = 'If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.';
        $dictionary->columns->select_external_type = 'Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.';
        $dictionary->columns->select_external_attribute = 'The attribute to test (must match an external field name from below).';
        $dictionary->columns->select_external_value = 'This item must match the value of the attribute selected.';
        $dictionary->columns->select_external_count = 'Calculated when integration is run and contains the number of devices selected the external system.';
        $dictionary->columns->select_internal_count = 'Calculated when integration is run and contains the number of devices selected from Open-AudIT.';
        $dictionary->columns->update_external_count = 'Calculated when integration is run and contains the number of devices to be updated in the external system.';
        $dictionary->columns->update_internal_count = 'Calculated when integration is run and contains the number of devices updated in Open-AudIT.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
