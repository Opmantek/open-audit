<?php
/**
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************
*
* PHP version 5.3.3
* 
* @category  Model
* @package   Integrations
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.1.2
* @link      http://www.open-audit.org
*/

/**
* Base Model Integrations
*
* @access   public
* @category Model
* @package  Integrations
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_integrations extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    /**
     * Create an individual item in the database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data = null)
    {

        $CI = & get_instance();
        if ( ! empty($data->options) && ! is_string($data->options)) {
            $data->options = json_encode($data->options);
        } else {
            $data->options = '[]';
        }

        if ( ! empty($data->attributes) && ! is_string($data->attributes)) {
            $data->attributes = json_encode($data->attributes);
        }

        if (is_array($data->fields) OR is_object($data->fields)) {
            $new_fields = array();
            foreach ($data->fields as $field) {
                $item = new stdClass();
                foreach ($field as $key => $value) {
                    $item->{$key} = $value;
                }
                $new_fields[] = $item;
            }
            foreach ($new_fields as $field) {
                if (empty($field->internal_field_name) and !empty($field->external_field_name)) {
                    $field->internal_field_name = 'fields.' . $this->internal_field_from_empty($data->type, $field->external_field_name);
                }
            }
            $data->fields = json_encode($new_fields);
        }

        $id = $this->insert_collection('integrations', $data);
        if (empty($id)) {
            return false;
        }
        $integration = $this->read($id);
        $integration = $integration[0];

        # The discovery if requested
        $CI->load->model('m_discoveries');
        if ($integration->attributes->discovery_run_on_create === 'y') {
            $discovery = new stdClass();
            $discovery->type = 'integration';
            $discovery->name = 'Discovery for ' . $integration->attributes->name . ' integration';
            $discovery->network_address = 'http://127.0.0.1/open-audit/index.php/input/discoveries';
            $discovery->org_id = $integration->attributes->org_id;
            $discovery->discard = 'n';
            $discovery->complete = 'n';
            $discovery->subnet = '';
            $discovery_id = intval($CI->m_discoveries->create($discovery));
            $sql = "UPDATE integrations SET discovery_id = ? WHERE id = ?";
            $query = $this->db->query($sql, array(intval($discovery_id), intval($integration->id)));
        }

        # Any custom fields
        $CI->load->model('m_fields');
        foreach ($integration->attributes->fields as $field) {
            if ($field->internal_field_name === '' or strpos($field->internal_field_name, 'fields.') === 0) {
                if (strpos($field->internal_field_name, 'fields.') === 0) {
                    $field_name = str_replace('fields.', '', $field->internal_field_name);
                } else {
                    #$external_field = explode('.', $field->external_field_name);
                    #$field_name = $integration->attributes->type . '_' . $external_field[count($external_field)-1];
                    $field_name = $this->internal_field_from_empty($data->type, $field->external_field_name);
                }
                $sql = "SELECT * FROM fields WHERE name = ? AND org_id = ?";
                $data = array($field_name, $integration->attributes->org_id);
                $query = $this->db->query($sql, $data);
                $result = $query->result();
                if (empty($result)) {
                    # No field exists, create it
                    $field = new stdClass();
                    $field->type = $field;
                    $field->name = $field_name;
                    $field->org_id = $integration->attributes->org_id;
                    $field->type = 'varchar';
                    $field->values = $field->default_value;
                    $field->group_id = 1;
                    $field->placement = 'system';
                    $CI->m_fields->create($field);
                }
            }
        }
        return intval($id);
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if (empty($id)) {
            return false;
        }
        $sql = 'SELECT integrations.*, discoveries.name AS `discoveries.name` FROM integrations LEFT JOIN discoveries ON (integrations.discovery_id = discoveries.id) WHERE integrations.id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'integrations');
        if ( ! empty($result)) {
            for ($i=0; $i < count($result); $i++) {
                if ( ! empty($result[$i]->{'attributes'}->{'options'})) {
                    $result[$i]->{'attributes'}->{'options'} = json_decode($result[$i]->{'attributes'}->{'options'});
                }
                if ( ! empty($result[$i]->{'attributes'}->{'attributes'})) {
                    $result[$i]->{'attributes'}->{'attributes'} = json_decode($result[$i]->{'attributes'}->{'attributes'});
                }
                if ( ! empty($result[$i]->{'attributes'}->{'fields'})) {
                    $result[$i]->{'attributes'}->{'fields'} = json_decode($result[$i]->{'attributes'}->{'fields'});
                }
            }
            stdlog($this->log);
            return $result;
        } else {
            $this->log->status = 'fail';
            stdlog($this->log);
            return false;
        }
    }

    public function read_sub_resource($id = '')
    {
        if (empty($id)) {
            return array();
        }

        $sql = "SELECT * FROM integrations_log WHERE integrations_id = ?";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $logs = $this->format_data($result, 'integrations_log');
        $return = $logs;

        $sql = "SELECT `devices` FROM integrations WHERE id = ?";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $device_ids = @json_decode($result[0]->devices);

        if (!empty($device_ids)) {
            $sql = "SELECT id, name, ip, type, fqdn FROM system WHERE id IN (" . implode(',', $device_ids) . ")";
            $result = $this->run_sql($sql);
            $devices = $this->format_data($result, 'devices');
            $return = array_merge($return, $devices);
        }

        return $return;
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if (empty($id)) {
            return false;
        }
        $sql = 'DELETE FROM `integrations` WHERE `id` = ?';
        $data = array(intval($id));
        $this->run_sql($sql, $data);
        return true;
    }

    /**
     * [queue description]
     * @param  int $id The ID of the integration to start
     * @return bool True on success, false on failure
     */
    public function queue($id = 0)
    {
        $item = $this->read($id);
        $integration = $item[0];
        if (empty($integration)) {
            return false;
        }
        $sql = '/* m_integrations::queue */ ' . 'DELETE from integrations_log WHERE integrations_id = ?';
        $data = array($id);
        $this->db->query($sql, $data);
        $sql = '/* m_integrations::queue */ ' . "UPDATE `integrations` SET `last_run` = NOW(), select_external_count = 0, update_external_count = 0, create_external_count = 0, select_internal_count = 0, update_internal_count = 0, create_internal_count = 0 WHERE id = ?";
        $data = array($id);
        $this->db->query($sql, $data);
        $this->load->model('m_queue');
        $queue_item = new stdClass();
        $queue_item->name = $integration->attributes->name;
        $queue_item->org_id = $integration->attributes->org_id;
        $queue_item->integrations_id = $id;
        $temp = $this->m_queue->create('integrations', $queue_item);
        if ( ! empty($temp)) {
            return true;
        } else {
            return false;
        }
    }

    public function execute($id = null)
    {
        $id = intval($id);
        if (empty($id)) {
            return false;
        }
        $timer_start = microtime(true);
        $CI = & get_instance();

        $log = new stdClass();
        $log->type = 'system';
        $log->severity = 5;
        $log->user = 'system';
        $log->collection = 'integrations';
        $log->action = 'create device';
        $log->status = '';
        $log->summary = '';
        $log->detail = '';

        $this->load->model('m_devices');
        $this->load->model('m_device');
        $this->load->model('m_devices');
        $this->load->model('m_device');
        $this->load->model('m_edit_log');
        $this->load->model('m_queue');
        $this->load->model('m_rules');
        $this->load->helper('audit');

        /**
         * The specific integration helper should implement the below functions
        integrations_pre        - Run before integration
        integrations_collection - read all devices from a remote system
        integrations_create     - create a single device on the remote system
        integrations_update     - update a single device on the remote system
        integrations_post       - Run after integration
        integrations_delete     - delete a single device from the remote system
        integrations_read       - read a single device from remote system
        */

        $sql = '/* m_integrations::execute */ ' . "UPDATE `integrations` SET `last_run` = NOW(), select_external_count = 0, update_external_count = 0, create_external_count = 0, select_internal_count = 0, update_internal_count = 0, create_internal_count = 0 WHERE id = ?";
        $data = array($id);
        $this->db->query($sql, $data);

        $sql = "DELETE from integrations_log WHERE integrations_id = {$id}";
        $query = $this->db->query($sql);

        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'notice', 'Starting integration.', 'success')";
        $data = array($id, microtime(true));
        $query = $this->db->query($sql, $data);

        $integration = $this->read($id);
        $integration = $integration[0];
        $this->load->helper('integrations_' . $integration->attributes->type);

        // Pre - Run before integration
        integrations_pre($integration);

        // Collection - read all devices from a remote system
        $external_devices = integrations_collection($integration);
        $external_formatted_devices = $this->external_to_internal($integration, $external_devices);

        // Check retrieved devices for 'localhost' or '127.0.0.1' which may or may not be this Open-AudIT server
        foreach ($external_formatted_devices as $device) {
            if ($device->system->ip === '127.0.0.1' or $device->system->ip === '127.0.1.1' or $device->system->ip === 'localhost') {
                // The (possibly) remote system has itself as a device, see if we can determine an actual IP
                if (stripos($integration->attributes->attributes->url, '127.0.0.1') !== false or stripos($integration->attributes->attributes->url, 'localhost') !== false) {
                    // We're talking to ourselves
                    $ip = explode(',', $this->config->config['ip']);
                    if (!empty($ip[0])) {
                        $device->system->ip = $ip[0];
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
                        $device->system->ip = gethostbyname($host);
                    } else {
                        $device->system->ip = $host;
                    }
                    unset($host);
                    unset($exploded_host);
                    unset($exploded_url);
                }
                if ($device->system->ip === '127.0.0.1' or $device->system->ip === '127.0.1.1') {
                    $ip = explode(',', $this->config->config['ip']);
                    if (!empty($ip[0])) {
                        $device->system->ip = $ip[0];
                    }
                    unset($ip);
                }
            }
        }

        $sql = "UPDATE integrations SET select_external_count = ? WHERE id = ?";
        $data = array(count($external_formatted_devices), $integration->id);
        $query = $this->db->query($sql, $data);

        // Match any retrieved devices
        foreach ($external_formatted_devices as $device) {
            $device->system->last_seen_by = 'integrations';
            $device->system->org_id = $integration->attributes->org_id;
            $parameters = new stdClass();
            $parameters->details = $device->system;
            $parameters->log = $log;
            $parameters->match = new stdClass();
            $parameters->match->ip = 'y';
            $id = $this->m_device->match($parameters);
            if (!empty($id)) {
                // We matched an existing device
                $message = 'Device match found, ID: ' . $id . ' for ' . $device->system->name;
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $this->db->query($sql, $data);
                $device->system->id = $id;
            } else {
                // No existing device
                $message = 'No device match found for ' . $device->system->name;
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $this->db->query($sql, $data);
            }
        }

        $locations_parse = false;
        foreach ($integration->attributes->fields as $field) {
            if ($field->internal_field_name === 'locations.name') {
                $locations_parse = true;
            }
        }
        if ($locations_parse) {
            // loop through the devices and assign a location_id
            // REQUIRES that the collection_pre has been run and created locations as required
            $org_list = $CI->m_orgs->get_descendants($integration->attributes->org_id);
            $org_list[] = $integration->attributes->org_id;
            $sql = "SELECT id, name FROM locations WHERE org_id IN (" . implode(',', $org_list) . ")";

            $query = $CI->db->query($sql);
            $locations = $query->result();

            foreach ($external_formatted_devices as $device) {
                foreach ($locations as $location) {
                    if (!empty($device->locations->name) && $device->locations->name === $location->name) {
                        $device->system->location_id = $location->id;
                        break;
                    }
                }
            }
        }

        // Create or update devices retrieved
        if ($integration->attributes->create_internal_from_external === 'y' or $integration->attributes->update_internal_from_external === 'y') {
            $update = 0;
            $create = 0;
            $device_ids = array();
            $discover_devices = array();
            foreach ($external_formatted_devices as $device) {
                if (!empty($device->system->id)) {
                    // Update
                    $device_ids[] = intval($device->system->id);
                    $temp_device = new stdClass();
                    $temp_device->id = $device->system->id;
                    $temp_device->last_seen_by = 'integrations';
                    foreach ($integration->attributes->fields as $field) {
                        if ($field->priority === 'external' and strpos($field->internal_field_name, 'system.') !== false) {
                            // a regular field in Open-AudIT that we should update
                            $system_field = str_replace('system.', '', $field->internal_field_name);
                            if (!empty($device->system->{$system_field})) { # TODO - something better than not empty
                                $temp_device->{$system_field} = $device->system->{$system_field};
                            }
                        }
                    }
                    $message = 'Updating device ID: ' . $device->system->id . ' for ' . $device->system->name . ' in Open-AudIT.';
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                    $data = array($integration->id, microtime(true), $message);
                    $query = $this->db->query($sql, $data);
                    $this->m_device->update($temp_device);
                    $update++;
                } else {
                    // insert
                    $device->system->id = $this->m_device->insert($device->system);
                    if (!empty($device->system->id)) {
                        $message = 'Device Created internally ID: ' . $device->system->id . ', ' . $device->system->name;
                        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                        $data = array($integration->id, microtime(true), $message);
                        $query = $this->db->query($sql, $data);
                        $create++;
                        $device_ids[] = intval($device->system->id);
                        $discover_devices[] = $device;
                    } else {
                        $message = 'Could not create device ' . $device->system->name;
                        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?, 'success')";
                        $data = array($integration->id, microtime(true), $message);
                        $query = $this->db->query($sql, $data);
                    }
                }
            }

            $devices = json_encode($device_ids);
            $sql = "UPDATE integrations SET create_internal_count = ?, update_internal_count = ?, devices = ? WHERE id = ?";
            $data = array($create, $update, $devices, $integration->id);
            $query = $this->db->query($sql, $data);
            unset($create);
            unset($update);
            unset($devices);
        }

        // Custom fields
        if ($integration->attributes->create_internal_from_external === 'y' or $integration->attributes->update_internal_from_external === 'y') {
            $sql = "SELECT * FROM fields";
            $query = $this->db->query($sql);
            $all_fields = $query->result();
            foreach ($external_formatted_devices as $device) {
                $sql = "SELECT * FROM field WHERE system_id = ?";
                $data = array($device->system->id);
                $query = $this->db->query($sql, $data);
                $device_fields = $query->result();
                foreach ($integration->attributes->fields as $field) {
                    if ($field->priority === 'external' and (strpos($field->internal_field_name, 'fields.') !== false or $field->internal_field_name === '')) {
                        // a custom field in Open-AudIT that we should update
                        $field_name = str_replace('fields.', '', $field->internal_field_name);
                        if (empty($custom_field_name)) {
                            $external_field = explode('.', $field->external_field_name);
                            $field_name = $integration->attributes->type . '_' . $external_field[count($external_field)-1];
                        }
                        $id = 0;
                        foreach ($all_fields as $temp_field) {
                            if ($field_name === $temp_field->name) {
                                $id = $temp_field->id;
                            }
                        }
                        if (!$id) {
                            // TODO Throw an error as we should always have a field already created
                        }
                        $device_field_id = 0;
                        $value = '';
                        foreach ($device_fields as $device_field) {
                            if ($id === $device_field->fields_id) {
                                $device_field_id = $device_field->id;
                                $value = $device_field->value;
                            }
                        }
                        if (!$device_field_id) {
                            // Insert a new field
                            $sql = "INSERT INTO field VALUES (null, ?, ?, NOW(), ?)";
                            $data = array($device->system->id, $id, $device->fields->{$field_name});
                            $query = $this->db->query($sql, $data);
                            // Insert an edit log
                            $sql = "INSERT INTO edit_log (user_id, system_id, details, source, weight, db_table, db_column, timestamp, value, previous_value) VALUES (0, ?, 'Field data was created', 'integrations', 1000, 'field', ?, NOW(), ?, ?)";
                            $data = array($device->system->id, $field_name, $device->fields->{$field_name}, $value);
                            $this->db->query($sql, $data);
                        } else {
                            // We already have the field associated to the device, check if the value has changed befofe updating
                            if ((string)$value !== (string)$device->fields->{$field_name}) {
                                // It IS different - update it
                                $sql = "UPDATE field SET value = ? WHERE id = ?";
                                $data = array($device->fields->{$field_name}, $device_field_id);
                                $query = $this->db->query($sql, $data);
                                // Insert an edit log
                                $sql = "INSERT INTO edit_log (user_id, system_id, details, source, weight, db_table, db_column, timestamp, value, previous_value) VALUES (0, ?, 'Field data was updated', 'integrations', 1000, 'field', ?, NOW(), ?, ?)";
                                $data = array($device->system->id, $field_name, $device->fields->{$field_name}, $value);
                                $this->db->query($sql, $data);

                            }
                        }
                    }
                }
            }
        }

        // Rules
        if ($integration->attributes->create_internal_from_external === 'y' or $integration->attributes->update_internal_from_external === 'y') {
            foreach ($external_formatted_devices as $device) {
                $parameters = new stdClass();
                $parameters->id = intval($device->system->id);
                $parameters->discovery_id = '';
                $parameters->action = 'update';
                $this->m_rules->execute($parameters);
            }
        }

        // Discoveries
        if ($integration->attributes->create_internal_from_external === 'y' && is_array($discover_devices) && count($discover_devices) > 0) {
            // Reset discovery stats and logs

            $message = 'Reset discovery stats and logs.';
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
            $data = array($integration->id, microtime(true), $message);
            $query = $this->db->query($sql, $data);

            $sql = '/* m_integrations::execute */ ' . "UPDATE `discoveries` SET `status` = 'running', `ip_all_count` = 0, `ip_responding_count` = 0, `ip_scanned_count` = 0, `ip_discovered_count` = 0, `ip_audited_count` = 0, `last_run` = NOW(), `last_finished` = DATE_ADD(NOW(), interval 1 second) WHERE id = " . intval($integration->attributes->discovery_id);
            $query = $this->db->query($sql);

            $sql = '/* m_integrations::execute */ ' . "DELETE FROM discovery_log WHERE discovery_id = " . intval($integration->attributes->discovery_id);
            $query = $this->db->query($sql);

            $sql = '/* m_integrations::execute */ ' . "INSERT INTO discovery_log VALUES (null, " . intval($integration->attributes->discovery_id) . ", null, '" . $CI->config->config['timestamp'] . "', 6, 'notice', '', '127.0.0.1', 'm_integrations', 'execute', 'Starting discovery for " . $integration->attributes->name . "', '', 'notice', 0, '')";
            $query = $this->db->query($sql);

            // put each device in the queue
            foreach ($discover_devices as $device) {

                $message = 'Add ' . $device->system->name . ' to discovery queue.';
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $this->db->query($sql, $data);

                $item = new stdClass();
                $item->ip = ip_address_from_db($device->system->ip);
                $item->discovery_id = intval($integration->attributes->discovery_id);
                $details = json_encode($item);
                unset ($item);
                $CI->m_queue->create('ip_scan', $details);
            }

            $message = 'Added ' . count($discover_devices) . ' devices to discovery list.';
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
            $data = array($integration->id, microtime(true), $message);
            $query = $this->db->query($sql, $data);

            $sql = "UPDATE discoveries SET status = 'running', ip_all_count = ?, ip_responding_count = ?, ip_scanned_count = ?, ip_discovered_count = 0, ip_audited_count = 0 WHERE id = ?";
            $data = array(count($discover_devices), count($discover_devices), count($discover_devices), intval($integration->attributes->discovery_id));
            $query = $this->db->query($sql, $data);

            $message = 'Starting discovery.';
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
            $data = array($integration->id, microtime(true), $message);
            $query = $this->db->query($sql, $data);

            if (php_uname('s') !== 'Windows NT') {
                // TODO - not cloud compatible because no 'instance' on the command line
                $instance = '';
                if ($this->config->config['oae_product'] === 'Open-AudIT Cloud' && $this->db->database !== 'openaudit') {
                    $instance = '/' . $this->db->database;
                } else {
                    $command = 'php ' . $this->config->config['base_path'] . '/www/open-audit/index.php util queue > /dev/null 2>&1 &';
                    if (php_uname('s') === 'Linux') {
                        $command = 'nohup ' . $command;
                    }
                    @exec($command);
                }
            } else {
                $command = "%comspec% /c start c:\\xampp\\php\\php.exe c:\\xampp\\htdocs\\open-audit\\index.php util queue";
                pclose(popen($command, 'r'));
            }
        }


        // Get local devices
        $local_devices = $this->get_local_devices($integration);
        $local_formatted_devices = $this->internal_to_external($integration, $local_devices);

        $sql = "UPDATE integrations SET select_internal_count = ? WHERE id = ?";
        $data = array(count($local_formatted_devices), $integration->id);
        $query = $this->db->query($sql, $data);

        $message = count($local_formatted_devices) . ' devices returned from Open-AudIT.';
        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
        $data = array($integration->id, microtime(true), $message);
        $query = $this->db->query($sql, $data);

        // take our list of devices from OA and if any are already in the list of externally retrieved devices, remove them
        // leave only the devices from OA that are not in the external list - create those
        if ($integration->attributes->create_external_from_internal === 'y') {
            $new_external_devices = $local_formatted_devices;
            foreach ($new_external_devices as $key => $local_device) {
                foreach ($external_devices as $external_device) {
                    foreach ($integration->attributes->fields as $field) {
                        if ($field->matching_attribute === 'y' and $field->external_field_name !== '') {
                            if ($this->get_value($local_device, $field->external_field_name) == $this->get_value($external_device, $field->external_field_name)) {
                                unset($new_external_devices[$key]);
                            }
                        }
                    }
                }
            }
            $message = count($new_external_devices) . ' devices require creating in ' . $integration->attributes->type . ' for ' . $integration->attributes->name . '.';
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
            $data = array($integration->id, microtime(true), $message);
            $query = $this->db->query($sql, $data);
            // create these new devices externally
            $created_devices = integrations_create($integration, $new_external_devices);
            // update the internal devices with the external attributes set by the external system
            $external_created_devices = $this->external_to_internal($integration, $created_devices);
            foreach ($external_created_devices as $device) {
                $parameters = new stdClass();
                $parameters->details = $device->system;
                $parameters->log = $log;
                $parameters->match = new stdClass();
                $parameters->match->ip = 'y';
                $device->system->id = $this->m_device->match($parameters);
                $temp_device = new stdClass();
                $temp_device->id = $device->system->id;
                $temp_device->last_seen_by = 'integrations';
                foreach ($integration->attributes->fields as $field) {
                    if ($field->priority === 'external' and strpos($field->internal_field_name, 'system.') !== false) {
                        // a regular field in Open-AudIT that we should update
                        $system_field = str_replace('system.', '', $field->internal_field_name);
                        if (!empty($device->system->{$system_field})) { # TODO - something better than not empty
                            $temp_device->{$system_field} = $device->system->{$system_field};
                        }
                    }
                }
                $message = 'Updating device ID: ' . $device->system->id . ' for ' . $device->system->name;
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $this->db->query($sql, $data);
                $this->m_device->update($temp_device);
            }

            $sql = "UPDATE integrations SET create_external_count = ? WHERE id = ?";
            $data = array(count($new_external_devices), $integration->id);
            $query = $this->db->query($sql, $data);
        }

        if ($integration->attributes->update_external_from_internal === 'y') {
            $update_external_devices = array();
            // Build a new list of devices where we have a match in both
            foreach ($local_formatted_devices as $local_device) {
                foreach ($external_devices as $external_device) {
                    foreach ($integration->attributes->fields as $field) {
                        if ($field->matching_attribute === 'y' and $field->external_field_name !== '') {
                            if ($this->get_value($local_device, $field->external_field_name) == $this->get_value($external_device, $field->external_field_name)) {
                                // Our internal and external devices match
                                $hit = false;
                                // Update fields if the priority is internal and the values are different
                                foreach ($integration->attributes->fields as $ifield) {
                                    if ($ifield->priority === 'internal' and !empty($ifield->external_field_name) and !empty($this->get_value($local_device, $ifield->external_field_name))) {
                                        if ((string)$this->get_value($local_device, $ifield->external_field_name) !== (string)$this->get_value($external_device, $ifield->external_field_name)) {
                                            $external_device = $this->set_value($external_device, $ifield->external_field_name, $this->get_value($local_device, $ifield->external_field_name));
                                            $hit = true;
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
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
            $data = array($integration->id, microtime(true), $message);
            $query = $this->db->query($sql, $data);

            $sql = "UPDATE integrations SET update_external_count = ? WHERE id = ?";
            $data = array(count($update_external_devices), $integration->id);
            $query = $this->db->query($sql, $data);

            integrations_update($integration, $update_external_devices);
        }

        if ($integration->attributes->delete_external_from_internal === 'y') {
            if (count($external_devices) > count($local_formatted_devices)) {
                $message = count($external_devices) . ' external devices and ' . count($local_formatted_devices) . ' local devices';
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $this->db->query($sql, $data);
                // Select all devices retrieved from external, compare to internal list - any NOT in the internal list, delete
                $delete_external_devices = $external_devices;
                foreach ($local_formatted_devices as $key => $local_device) {
                    foreach ($delete_external_devices as $ekey => $external_device) {
                        foreach ($integration->attributes->fields as $field) {
                            if ($field->matching_attribute === 'y' and $field->external_field_name !== '') {
                                if ($this->get_value($local_device, $field->external_field_name) == $this->get_value($external_device, $field->external_field_name)) {
                                    $message = 'Removing ' . $external_device->name . ' delete from list.';
                                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                                    $data = array($integration->id, microtime(true), $message);
                                    $query = $this->db->query($sql, $data);
                                    unset($delete_external_devices[$ekey]);
                                    break;
                                }
                            }
                        }
                    }
                }
                $delete_external_devices = array_values($delete_external_devices);
                $message = count($delete_external_devices) . ' devices require deleting in ' . $integration->attributes->type . ' for ' . $integration->attributes->name . '.';
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $this->db->query($sql, $data);
                integrations_delete($integration, $delete_external_devices);
            } else {
                $message = '0 devices require deleting in ' . $integration->attributes->type . ' for ' . $integration->attributes->name . '.';
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $this->db->query($sql, $data);
            }
        }

        // Post - Run after integration
        integrations_post($integration, $external_devices);

        $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'notice', 'Completed integration.', 'success')";
        $data = array($integration->id, microtime(true));
        $query = $this->db->query($sql, $data);

        $duration = (microtime(true) - $timer_start);
        $sql = "UPDATE integrations SET duration = ? WHERE id = ?";
        $data = array(intval($duration), $integration->id);
        $query = $this->db->query($sql, $data);

        $sql = "SELECT * FROM integrations_log WHERE integrations_id = ?";
        $data = array($integration->attributes->id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        $table = "<table width=\"100%\"><thead><tr><th>id</th><th>IntID</th><th>timestamp</th><th>microtime</th><th>severity</th><th>message</th><th>result</th></tr></thead><tbody>";
        foreach ($result as $row) {
            $table .= "<tr><td>" . $row->id . "</td><td>" . $row->integrations_id . "</td><td>" . $row->timestamp . "</td><td>" . $row->microtime . "</td><td>" . $row->severity_text . "</td><td>" . $row->message . "</td><td>" . $row->result . "</td><td></tr>";
        }

        echo $table;

        exit;
    }

    public function get_value($device, $field) {
        $value = array_reduce(explode('.', $field), function ($previous, $current) { return isset($previous->$current) && !empty($previous->$current) ? $previous->$current: null; }, $device);
        return $value;
    }

    public function set_value($device, $field, $value) {
        $explode = explode('.', $field);
        if (count($explode) === 1) {
            $device->{$field} = $value;
        }
        if (count($explode) === 2) {
            $device->{$explode[0]}->{$explode[1]} = $value;
        }
        return $device;
    }

    /**
     * Take our internal device build external properties and transform if required
     * @param  [type] $device [description]
     * @param  [type] $rules  [description]
     * @return [type]         [description]
     */
    public function format_int_to_ext($integration, $internal_device)
    {
        if (empty($internal_device) OR empty($rules)) {
            return false;
        }
        $device = new stdClass();
        // TODO - add external ID
        foreach ($integration->fields as $field) {
            if (! empty($field->external_field_name)) {
                if (empty($field->internal_field_name)) {
                    // Not an Open-AudIT field, populate the default
                    $device = $this->set_val($device, $field->external_field_name, $field->default_value);
                } else {
                    // Populate with the internal value
                    $value = $this->get_val($internal_device, $field);
                    $device = $this->set_val($device, $field->external_field_name, $value);
                    $explode = explode('.', $field->external_field_name);

                    switch ($rule->external_field_type) {
                        case 'text':
                            if (count($explode) === 1) {
                                $device->{$field} = (string)$value;
                            } else if (count($explode) === 2) {
                                $device->{$explode[0]}->{$explode[1]} = (string)$value;
                            }
                            break;

                        case 'integer':
                            if (count($explode) === 1) {
                                $device->{$field} = intval($value);
                            } else if (count($explode) === 2) {
                                $device->{$explode[0]}->{$explode[1]} = intval($value);
                            }
                            break;

                        case 'bool':
                            if (count($explode) === 1) {
                                $device->{$field} = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                            } else if (count($explode) === 2) {
                                $device->{$explode[0]}->{$explode[1]} = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                            }
                            break;

                        case 'bool_one_zero':
                            if (count($explode) === 1) {
                                if ($value === 'y' or $value === 1 or $value === true) {
                                    $device->{$field} = 1;
                                } else {
                                    $device->{$field} = 0;
                                }
                            } else if (count($explode) === 2) {
                                if ($value === 'y' or $value === 1 or $value === true) {
                                    $device->{$explode[0]}->{$explode[1]} = 1;
                                } else {
                                    $device->{$explode[0]}->{$explode[1]} = 0;
                                }
                            }
                            break;

                        case 'bool_y_n':
                            if (count($explode) === 1) {
                                if ($value === 'y' or $value === 1 or $value === true) {
                                    $device->{$field} = 'y';
                                } else {
                                    $device->{$field} = 'n';
                                }
                            } else if (count($explode) === 2) {
                                if ($value === 'y' or $value === 1 or $value === true) {
                                    $device->{$explode[0]}->{$explode[1]} = 'y';
                                } else {
                                    $device->{$explode[0]}->{$explode[1]} = 'n';
                                }
                            }
                            break;

                        case 'capitalise':
                            if (count($explode) === 1) {
                                $device->{$field} = ucwords($value);
                            } else if (count($explode) === 2) {
                                $device->{$explode[0]}->{$explode[1]} = ucwords($value);
                            }
                            break;

                        case 'lower':
                            if (count($explode) === 1) {
                                $device->{$field} = strtolower($value);
                            } else if (count($explode) === 2) {
                                $device->{$explode[0]}->{$explode[1]} = strtolower($value);
                            }
                            break;

                        case 'upper':
                            if (count($explode) === 1) {
                                $device->{$field} = strtoupper($value);
                            } else if (count($explode) === 2) {
                                $device->{$explode[0]}->{$explode[1]} = strtoupper($value);
                            }
                            break;

                        case 'datetime_now':
                            if (count($explode) === 1) {
                                $device->{$field} = $this->config->config['timestamp'];
                            } else if (count($explode) === 2) {
                                $device->{$explode[0]}->{$explode[1]} = $this->config->config['timestamp'];
                            }
                            break;

                        case 'datetime_Y-m-d H:i:s':
                            // nothing, we're in this format in Open-AudIT
                            // $date = date_create_from_format("Y-m-d H:i:s", $value);
                            // if (count($explode) === 1) {
                            //     $device->{$field} = date_format($date, 'Y-m-d H:i:s');
                            // } else { if (count($explode === 2)) {
                            //     $device->{$explode[0]}->{$explode[1]} = date_format($date, 'Y-m-d H:i:s');
                            // }
                        break;

                        case 'date_now':
                            $date = date_create_from_format("Y-m-d", $this->config->config['timestamp']);
                            if (count($explode) === 1) {
                                $device->{$field} = $date;
                            } else if (count($explode) === 2) {
                                $device->{$explode[0]}->{$explode[1]} = $date;
                            }
                            break;

                        case 'date_Y-m-d':
                            // nothing, we're in this format in Open-AudIT
                            break;

                        case 'date_m-d-Y':
                            // from Y-m-d to m-d-Y
                            $date = date_create_from_format("Y-m-d", $value);
                            if (count($explode) === 1) {
                                $device->{$field} = date_format($date, 'm-d-Y');
                            } else if (count($explode) === 2) {
                                $device->{$explode[0]}->{$explode[1]} = date_format($date, 'm-d-Y');
                            }
                            break;

                        case 'date_d-m-Y':
                            // from Y-m-d to m-d-Y
                            $date = date_create_from_format("Y-m-d", $value);
                            if (count($explode) === 1) {
                                $device->{$field} = date_format($date, 'd-m-Y');
                            } else if (count($explode) === 2) {
                                $device->{$explode[0]}->{$explode[1]} = date_format($date, 'd-m-Y');
                            }
                            break;

                        default:
                            # code...
                            break;
                    }
            }
        }
    }
    return $device;
}

    public function get_local_devices($integration)
    {
        $devices = array();
        if (empty($integration)) {
            return $devices;
        }
        $orgs = $this->m_orgs->get_descendants($integration->attributes->org_id);
        $orgs[] = $integration->attributes->org_id;

        // Select by Attribute
        if ($integration->attributes->select_internal_type === 'attribute') {
            $sql = "SELECT system.*, locations.name AS `locations_name` FROM system LEFT JOIN locations ON (system.location_id = locations.id) WHERE `" . $integration->attributes->select_internal_attribute . "` = ? and system.org_id IN (" . implode(',', $orgs) . ") AND status = 'production'";
            $data = array($integration->attributes->select_internal_value);
            $query = $this->db->query($sql, $data);
            $devices = $query->result();
        }
        // Select by Group
        if ($integration->attributes->select_internal_type === 'group') {
            $this->load->model('m_orgs');
            $CI = & get_instance();
            if (empty($CI->user)) {
                $CI->user = new stdClass();
            }
            if (empty($CI->user->org_list)) {
                $CI->user->org_list = $orgs;
            }
            $this->load->model('m_groups');
            $device_ids = $this->m_groups->execute($integration->attributes->select_internal_value, '');
            $dev_ids = array();
            foreach ($device_ids as $device) {
                $dev_ids[] = $device->attributes->{'system.id'};
            }
            $dev_ids = implode(',', $dev_ids);
            $sql = "SELECT system.*, locations.name AS `locations_name` FROM system LEFT JOIN locations ON (system.location_id = locations.id) WHERE system.id in (" . $dev_ids . ")";
            $query = $this->db->query($sql);
            $devices = $query->result();
        }
        // Select by Query
        if ($integration->attributes->select_internal_type === 'query') {
            $this->load->model('m_orgs');
            $CI = & get_instance();
            if (empty($CI->user)) {
                $CI->user = new stdClass();
            }
            if (empty($CI->user->org_list)) {
                $CI->user->org_list = $orgs;
            }
            $this->load->model('m_queries');
            $devices = $this->m_queries->execute($integration->attributes->select_internal_value, '');
            $dev_ids = array();
            foreach ($devices as $device) {
                if (!empty($device->attributes->{'system.id'})) {
                    $dev_ids[] = intval($device->attributes->{'system.id'});
                } else if (!empty($device->attributes->{'id'})) {
                    $dev_ids[] = intval($device->attributes->{'id'});
                }
            }
            $dev_ids = implode(',', $dev_ids);
            if (!empty($dev_ids)) {
                $sql = "SELECT system.*, locations.name AS `locations_name` FROM system LEFT JOIN locations ON (system.location_id = locations.id) WHERE system.id in (" . $dev_ids . ")";
                $query = $this->db->query($sql);
                $devices = $query->result();
            }
        }

        // Format IP
        $device_ids = array();
        foreach ($devices as $device) {
            $device->ip = $this->ip_address_from_db($device->ip);
            $device_ids[] = intval($device->id);
        }

        // Default field population
        foreach ($devices as $device) {
            foreach ($integration->attributes->fields as $field) {
                if (strpos($field->internal_field_name, 'system.') !== false) {
                    $name = str_replace('system.', '', $field->internal_field_name);
                    if (!isset($device->{$name})) {
                        $device->{$name} = '';
                    }
                    if ($device->{$name} === '' and (string)$field->default_value !== '') {
                        $device->{$name} = $field->default_value;
                    }
                }
            }
        }

        if ( ! empty($device_ids)) {
                // OA Fields
                $sql = "SELECT field.*, fields.name FROM field left join fields on (field.fields_id = fields.id) WHERE system_id in (" . implode(',', $device_ids) . ")";
                $query = $this->db->query($sql);
                $fields = $query->result();

                // build a new array of fields that contains the actual internal_field_name (not an empty string)
                // use this array so we can iterate over it, but not affect the actual integration
                // TODO - maybe be able to actually use the integration, overwriting blank field names
                $custom_fields = array();
                foreach ($integration->attributes->fields as $integration_field) {
                    if ($integration_field->internal_field_name === '' or strpos($integration_field->internal_field_name, 'fields.') !== false) {
                        $newfield = new stdClass();
                        $newfield = clone $integration_field;
                        $newfield->internal_field_name = str_replace('fields.', '', $integration_field->internal_field_name);
                        if ($newfield->internal_field_name === '') {
                            $newfield->internal_field_name = internal_field_from_empty($integration->attributes->type, $integration_field->external_field_name);
                        }
                        $custom_fields[] = $newfield;
                    }
                }

            foreach ($devices as $device) {
                $device->fields = new stdClass();
                foreach ($custom_fields as $custom_field) {
                    foreach ($fields as $field) {
                        if ($field->name === $custom_field->internal_field_name and intval($field->system_id) === intval($device->id)) {
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
            $credentials = $query->result();
            if (is_array($credentials)) {
                foreach ($devices as $device) {
                    $retrieved_credentials = @json_decode($device->credentials);
                    $device->credentials = new stdClass();
                    foreach ($credentials as $credential) {
                        if (is_array($retrieved_credentials)) {
                            foreach ($retrieved_credentials as $key => $value) {
                                if (intval($value) === intval($credential->id) && ! empty($credential->credentials)) {
                                    if (is_string($credential->credentials)) {
                                        $credential->credentials = simpleDecrypt($credential->credentials);
                                        $credential->credentials = json_decode($credential->credentials);
                                    }
                                    foreach ($credential->credentials as $key => $value) {
                                        $device->credentials->{$credential->type . '_' . $key} = $value;
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
            $credentials = $query->result();
            if (is_array($credentials)) {
                foreach ($devices as $device) {
                    foreach ($credentials as $credential) {
                        if (intval($credential->system_id) === intval($device->id)) {
                            $credential->credentials = json_decode(simpleDecrypt($credential->credentials));
                            #$device->credentials[] = $credential;
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

    public function internal_field_from_empty($type, $field_name) {
        // $return_field_name = '';
        // foreach ($integration->fields as $integration_field) {
        //     if ($integration_field->external_field === $field_name) {
        //         $return_field_name = $integration->type . '_' . $integration_field[count($integration_field)-1];
        //     }
        // }
        // return $return_field_name;
        $return_field_name = '';
        $explode = explode('.', $field_name);
        $return_field_name = $type . '_' . $explode[count($explode)-1];
        return $return_field_name;
    }

    public function external_to_internal($integration, $external_devices)
    {
        // Take the external data and make an internal structure
        $external_formatted_devices = array();

        foreach ($external_devices as $device) {
            $newdevice = new stdClass();            
            foreach ($integration->attributes->fields as $field) {
                if (empty($field->internal_field_name)) {
                    $temp = explode('.', $field->external_field_name);
                    $field->internal_field_name = 'fields.' . $integration->attributes->type . '_' . $temp[count($temp)-1];
                }

                if (!empty($field->internal_field_name)) {
                    $int = explode('.', $field->internal_field_name);
                    if (empty($newdevice->{$int[0]})) {
                        $newdevice->{$int[0]} = new stdClass();
                    }
                    if (empty($newdevice->{$int[0]}->{$int[1]})) {
                        #$newdevice->{$int[0]}->{$int[1]} = '';
                        $newdevice->{$int[0]}->{$int[1]} = array_reduce(explode('.', $field->external_field_name), function ($previous, $current) { return isset($previous->$current) && !empty($previous->$current)? $previous->$current: null; }, $device);
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

        # Ensure we have an IP in system.ip
        foreach ($external_formatted_devices as $device) {
            if (isset($device->system->ip) and !empty($device->system->ip)) {
                if (!filter_var($device->system->ip, FILTER_VALIDATE_IP)) {
                    if (strpos('.', $device->system->ip) !== false) {
                        $device->system->dns_fqdn = $device->system->ip;
                    } else {
                        $device->system->dns_hostname = $device->system->ip;
                    }
                    $device->system->ip = gethostbyname($device->system->ip);
                }
                $fqdn = gethostbyaddr($device->system->ip);
                if (empty($device->system->dns_fqdn) and strpos($fqdn, '.') !== false) {
                    $device->system->dns_fqdn = $fqdn;
                }
            }
        }
        return $external_formatted_devices;
    }

    public function internal_to_external($integration, $internal_devices)
    {
        // Take the local data and make an external structure
        $internal_formatted_devices = array();
        foreach ($internal_devices as $device) {
            $newdevice = new stdClass();
            foreach ($integration->attributes->fields as $field) {
                if (strpos($field->internal_field_name, 'system.') !== false) {
                    $field_name = str_replace('system.', '', $field->internal_field_name);
                    if (strpos($field->external_field_name, '.') !== false) {
                        $ext_fields = explode('.', $field->external_field_name);
                        for ($i=0; $i < count($ext_fields)-1; $i++) {
                            if ( ! isset($newdevice->{$ext_fields[$i]}) or ! is_object($newdevice->{$ext_fields[$i]})) {
                                $newdevice->{$ext_fields[$i]} = new stdClass();
                            }
                        }
                        if (count($ext_fields) === 2 and empty($newdevice->{$ext_fields[0]}->{$ext_fields[1]})) {
                            $newdevice->{$ext_fields[0]}->{$ext_fields[1]} = $device->{$field_name};
                        }
                    } else {
                        if ($field->external_field_name !== '' and empty($newdevice->{$field->external_field_name})) {
                            $newdevice->{$field->external_field_name} = $device->{$field_name};
                        }
                    }
                } else if (strpos($field->internal_field_name, 'credentials.') !== false) {
                    $int_field = str_replace('credentials.', '', $field->internal_field_name);
                    if (strpos($field->external_field_name, '.') !== false) {
                        $ext_fields = explode('.', $field->external_field_name);
                        for ($i=0; $i < count($ext_fields)-1; $i++) {
                            if ( ! isset($newdevice->{$ext_fields[$i]}) or ! is_object($newdevice->{$ext_fields[$i]})) {
                                $newdevice->{$ext_fields[$i]} = new stdClass();
                            }
                        }
                        if (count($ext_fields) === 2) {
                            foreach ($device->credentials as $key => $value) {
                                if ($int_field === $key) {
                                    $newdevice->{$ext_fields[0]}->{$ext_fields[1]} = $value;
                                }
                            }
                        }
                    }
                } else if (strpos($field->internal_field_name, 'fields.') !== false) {
                    $int_field = str_replace('fields.', '', $field->internal_field_name);
                    $value = '';
                    foreach ($device->fields as $key => $dev_value) {
                        if ($key === $int_field) {
                            $value = $dev_value;
                        }
                    }
                    if (strpos($field->external_field_name, '.') !== false) {
                        $ext_fields = explode('.', $field->external_field_name);
                        for ($i=0; $i < count($ext_fields)-1; $i++) {
                            if ( ! isset($newdevice->{$ext_fields[$i]}) or ! is_object($newdevice->{$ext_fields[$i]})) {
                                $newdevice->{$ext_fields[$i]} = new stdClass();
                            }
                        }
                        if (count($ext_fields) === 2) {

                            if (!empty($value)) {
                                $newdevice->{$ext_fields[0]}->{$ext_fields[1]} = $value;
                            } else if (!empty($field->default_value)) {
                                $newdevice->{$ext_fields[0]}->{$ext_fields[1]} = $field->default_value;
                            } else {
                                $newdevice->{$ext_fields[0]}->{$ext_fields[1]} = '';
                            }
                        }
                    } else {
                        if (!empty($value)) {
                            $newdevice->{$field->external_field_name} = $value;
                        } else if (!empty($field->default_value)) {
                            $newdevice->{$field->external_field_name} = $field->default_value;
                        } else {
                            $newdevice->{$field->external_field_name} = '';
                        }
                    }

                }
            }
            $internal_formatted_devices[] = $newdevice;
        }
        return $internal_formatted_devices;
    }


    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = implode(',', array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id))));
        $sql = "SELECT COUNT(id) AS `count` FROM integrations WHERE org_id IN ({$org_list})";
        $result = $this->run_sql($sql, array());
        return intval($result[0]->count);
    }

    /**
     * Read the collection from the database
     *
     * @param  int $user_id  The ID of the requesting user, no $response->meta->filter used and no $response->data populated
     * @param  int $response A flag to tell us if we need to use $response->meta->filter and populate $response->data
     * @return bool True = success, False = fail
     */
    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if ( ! empty($user_id)) {
            $org_list = implode(',', array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id))));
            $sql = "SELECT * FROM integrations WHERE org_id IN ({$org_list})";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'integrations');
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM integrations LEFT JOIN orgs ON (integrations.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            foreach ($result as $key => $value) {
                $result[$key]->options = @json_decode($result[$key]->options);
                $result[$key]->attributes = @json_decode($result[$key]->attributes);
                $result[$key]->fields = @json_decode($result[$key]->fields);
            }
            $CI->response->data = $this->format_data($result, 'integrations');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'integrations';
        $CI->temp_dictionary->link = str_replace('$collection', $collection, $CI->temp_dictionary->link);
        $this->load->helper('collections');

        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->about = '';
        $dictionary->marketing = '';
        $dictionary->notes = '';
        $dictionary->columns = new stdClass();
        $dictionary->attributes = new stdClass();
        $dictionary->attributes->fields = $this->db->list_fields($collection);
        $dictionary->attributes->create = mandatory_fields($collection);
        $dictionary->attributes->update = update_fields($collection);
        $dictionary->sentence = 'Use Open-AudIT to integrate with external systems.';
        $dictionary->marketing = '<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'enterprise';
        $dictionary->notes = '<p>Our default query "Integration Default for NMIS" and custom query selects devices that have a their nmis_manage attribute set to "y". If you prefer to change the custom query, we recommend using the fields as provided in the custom query and changing the WHERE section only. The retrieved fields are required for transforming the attribute data from Open-AudIT to NMIS.';

        $dictionary->system_fields = $CI->db->list_fields('system');
        $dictionary->system_fields[] = '';
        sort($dictionary->system_fields);
        $dictionary->remote_format = array('string', 'int', 'bool', 'date_YMD', 'date_MDY', 'date_DMY');
        sort($dictionary->remote_format);
        $dictionary->transform = array('', 'string', 'int', 'bool', 'capitalise', 'lower', 'upper', 'date', 'date_now', 'date_time', 'datetime_now', 'int_to_bool', 'int_to_yn', 'yn_to_int', 'yn_to_bool');
        sort($dictionary->transform);

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->type = 'The type of the integration (usually named after the remote system).';
        $dictionary->columns->options = '';
        $dictionary->columns->populate_from_local = 'Should we add devices from the remote service, locally.';
        $dictionary->columns->populate_from_remote = 'Should we populate the remote system from our local devices.';
        $dictionary->columns->query_id = '';
        $dictionary->columns->group_id = 'The group that provides a list of devices for the integration.';
        $dictionary->columns->last_run = 'The last time this integration was run.';
        $dictionary->columns->status = 'The status of this integration';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;

        $dictionary->columns->create_internal_from_external = 'When integrating devices from the external system, if the device doesn\'t exist in Open-AudIT should we create it?';
        $dictionary->columns->update_internal_from_external = 'When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?';
        $dictionary->columns->discovery_run_on_create = 'When we create a device within Open-AudIT, should we run discovery upon it?';
        $dictionary->columns->select_internal_type = 'How should we select devices to be integrated.';
        $dictionary->columns->select_internal_attribute = 'The attribute to test (from the \'system\' table).';
        $dictionary->columns->select_internal_value = 'This item must match the value of the attribute selected.';

        $dictionary->columns->create_external_from_internal = 'If an Open-AudIT device is not on the external system, should we create it.';
        $dictionary->columns->update_external_from_internal = 'If an Open-AudIT device has been changed, should we update the external system.';
        $dictionary->columns->delete_external_from_internal = 'If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the remote system.';
        $dictionary->columns->select_external_type = 'Which devices should Open-AudIT create from the remote system (if any).';
        $dictionary->columns->select_external_attribute = 'The attribute to test (must match an external field name from below).';
        $dictionary->columns->select_external_value = 'This item must match the value of the attribute selected.';

        return $dictionary;
    }












    /**
     * [format_ext_to_int description]
     * @param  [type] $device [description]
     * @param  [type] $rules  [description]
     * @return [type]         [description]
     */
    // public function format_ext_to_int($external_device, $rules)
    // {
    //     if (empty($external_device) OR empty($rules)) {
    //         return false;
    //     }
    //     $device = new stdClass();
    //     $device->{'system.id'} = @$external_device->{'system.id'};
    //     $device->{'system.name'} = @$external_device->{'system.name'};
    //     // TODO - add external ID
    //     foreach ($rules as $rule) {
    //         if ( ! empty($rule->remote_field)) {
    //             $attributes = explode('.', $rule->remote_field);
    //             if (count($attributes) === 0) {
    //                 // bad attribute name or not supplied by external
    //             } else if (count($attributes) === 1) {
    //                 $device->{$rule->remote_field} = @$external_device->{$rule->remote_field};
    //                 $device->{$rule->local_field}  = @$external_device->{$rule->remote_field};
    //                 $temp = str_replace('system.', '', $rule->local_field);
    //                 $device->{$temp} = @$external_device->{$rule->remote_field};
    //             } else {
    //                 if (is_object($external_device->{$attributes[0]})) {
    //                     if (count($attributes) == 2) {
    //                         $device->{$rule->remote_field} = @$external_device->{$attributes[0]}->{$attributes[1]};
    //                         $device->{$rule->local_field}  = @$external_device->{$attributes[0]}->{$attributes[1]};
    //                         $temp = str_replace('system.', '', $rule->local_field);
    //                         $device->{$temp} = @$external_device->{$attributes[0]}->{$attributes[1]};
    //                     }
    //                     if (count($attributes) == 3) {
    //                         $device->{$rule->remote_field} = @$external_device->{$attributes[0]}->{$attributes[1]}->{$attributes[2]};
    //                         $device->{$rule->local_field}  = @$external_device->{$attributes[0]}->{$attributes[1]}->{$attributes[2]};
    //                         $temp = str_replace('system.', '', $rule->local_field);
    //                         $device->{$temp} = @$external_device->{$attributes[0]}->{$attributes[1]}->{$attributes[2]};
    //                     }
    //                 }
    //             }
    //         }

    //         if ( ! empty($rule->local_field)) {
    //             switch ($rule->transform) {
    //                 case 'string':
    //                     $device->{$rule->local_field} = (string)$device->{$rule->local_field};
    //                     break;

    //                 case 'int':
    //                     $device->{$rule->local_field} = intval($device->{$rule->local_field});
    //                     break;

    //                 case 'bool':
    //                     $device->{$rule->local_field} = filter_var($device->{$rule->local_field}, FILTER_VALIDATE_BOOLEAN);
    //                     break;

    //                 case 'capitalise':
    //                     $device->{$rule->local_field} = ucwords($device->{$rule->local_field});
    //                     break;

    //                 case 'lower':
    //                     $device->{$rule->local_field} = strtolower($device->{$rule->local_field});
    //                     break;

    //                 case 'upper':
    //                     $device->{$rule->local_field} = strtoupper($device->{$rule->local_field});
    //                     break;

    //                 case 'datetime_now':
    //                     $device->{$rule->local_field} = $this->config->config['timestamp'];
    //                     break;

    //                 case 'int_to_bool':
    //                     if ( ! empty($device->{$rule->local_field})) {
    //                         $device->{$rule->local_field} = true;
    //                     } else {
    //                         $device->{$rule->local_field} = false;
    //                     }
    //                     break;

    //                 case 'int_to_yn':
    //                     if ( ! empty($device->{$rule->local_field})) {
    //                         $device->{$rule->local_field} = 'y';
    //                     } else {
    //                         $device->{$rule->local_field} = 'n';
    //                     }
    //                     break;

    //                 case 'date':
    //                     switch ($rule->remote_format) {
    //                         case 'date_Y-M-D':
    //                             // nothing, we're in this format
    //                             break;

    //                         case 'date_M-D-Y':
    //                             // from Y-m-d to m-d-Y
    //                             $date = date_create_from_format("Y-m-d", $device->{$rule->local_field});
    //                             $device->{$rule->local_field} = date_format($date, 'm-d-Y');
    //                             break;

    //                         default;
    //                             // nothing
    //                             break;
    //                     }
    //                     break;

    //                 default:
    //                     # code...
    //                     break;
    //             }
    //         }
    //     }
    //     return $device;
    // }



    /**
     * [execute description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
//     public function execute($id)
//     {
//         if (empty($id)) {
//             return false;
//         }

//         $CI = & get_instance();

//         $id = intval($id);
//         $my_int = $this->read($id);
//         $integration = $my_int[0]->{'attributes'};
//         unset($my_int);

//         $this->load->model('m_device');
//         $this->load->model('m_devices');
//         $this->load->model('m_groups');
//         $this->load->model('m_orgs');
//         $this->load->helper('security');

//         // delete any logs
//         $sql = '/* m_integrations::execute */ ' . 'DELETE from integrations_log WHERE integrations_id = ?';
//         $data = array($id);
//         $this->db->query($sql, $data);
//         // set the status and last run
//         $sql = '/* m_integrations::execute */ ' . "UPDATE `integrations` SET `last_run` = NOW(), `status` = 'running' WHERE id = ?";
//         $data = array($id);
//         $this->db->query($sql, $data);
//         // first log entry
//         $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, 0, NOW(), 5, 'notice', 'Starting integration', 'm_integrations::execute', '', 0, '')";
//         $data = array($id);
//         $this->db->query($sql, $data);
//         // Get the associated rules
//         $rules = $this->rules($id);
//         $this->load->helper($integration->type); // nmis, servicenow, etc.

//         $sql = "SELECT * FROM credentials";
//         $query = $this->db->query($sql);
//         $credentials = $query->result();
//         if ( ! empty($credentials) && is_array($credentials)) {
//             for ($i=0; $i < count($credentials); $i++) {
//                 if ( ! empty($credentials[$i]->credentials)) {
//                     $credentials[$i]->credentials = json_decode(simpleDecrypt($credentials[$i]->credentials));
//                 }
//             }
//         }

//         // Should we populate / update the external service?
//         if ($integration->populate_from_local === 'y') {
//             // populate the device list
//             $org_list = array($integration->org_id);
//             $org_list = array_merge($org_list, $CI->m_orgs->get_children($integration->org_id));
//             $orgs = implode(',', $org_list);
//             if ( ! $CI->user) {
//                 $CI->user = new stdClass();
//             }
//             $CI->user->org_list = $orgs;

//             $my_ids = array();
//             // retrieve our DeviceIDs
//             if ( ! empty($orgs)) {
//                 $group = $this->m_groups->read($integration->group_id);
//                 $sql = str_replace('WHERE @filter', 'WHERE system.org_id IN (' . $orgs . ')', $group[0]->attributes->sql);
//                 $query = $this->db->query($sql);
//                 $device_ids = $query->result();
//                 foreach ($device_ids as $device_id) {
//                     $my_ids[] = intval($device_id->id);
//                 }
//                 $my_ids = implode(',', $my_ids);
//             }



//             // Populate our selected devices attributes
//             $devices = array();
//             if ( ! empty($my_ids)) {
//                 $fields = array();
//                 foreach ($this->db->list_fields('system') as $field) {
//                     $fields[] = 'system.' . $field . ' AS `system.' . $field . '`';
//                 }
//                 foreach ($this->db->list_fields('orgs') as $field) {
//                     $fields[] = 'orgs.' . $field . ' AS `orgs.' . $field . '`';
//                 }
//                 foreach ($this->db->list_fields('locations') as $field) {
//                     $fields[] = 'locations.' . $field . ' AS `locations.' . $field . '`';
//                 }
//                 $fields = implode(', ', $fields);
//                 $sql = '/* m_integrations::execute */ ' . "SELECT {$fields} FROM system LEFT JOIN orgs ON (system.org_id = orgs.id) LEFT JOIN locations ON (system.location_id = locations.id) WHERE system.id IN (${my_ids})";
//                 $query = $this->db->query($sql);
//                 $devices = $query->result();
//             }

//             // loop through the device list
//             for ($i=0; $i < count($devices); $i++) {
//                 $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, ?, NOW(), 5, 'notice', ?, 'm_integrations::execute', '', 0, '')";
//                 $details = 'Device outbound started ' . @$devices[$i]->{'system.name'};
//                 $data = array($id, intval($devices[$i]->{'system.id'}), $details);
//                 $this->db->query($sql, $data);

//                 // Format our internal IP
//                 if ( ! empty($devices[$i]->{'system.ip'})) {
//                     $devices[$i]->{'system.ip'} = ip_address_from_db($devices[$i]->{'system.ip'});
//                 }

//                 // get any custom fields
//                 $sql = '/* m_integrations::execute */ ' . 'SELECT field.value, fields.name from field LEFT JOIN fields ON (field.fields_id = fields.id) WHERE field.system_id = ?';
//                 $data = array($devices[$i]->{'system.id'});
//                 $query = $this->db->query($sql, $data);
//                 $result = $query->result();
//                 if ( ! empty($result)) {
//                     foreach ($result as $item) {
//                         $devices[$i]->{'field.' . $item->name} = $item->value;
//                     }
//                 }

//                 // get any credentials
//                 if ( ! empty($devices[$i]->{'system.credentials'}) && ! empty($credentials)) {
//                     $devices[$i]->{'system.credentials'} = json_decode($devices[$i]->{'system.credentials'});
//                     foreach ($devices[$i]->{'system.credentials'} as $credential_id) {
//                         foreach ($credentials as $credential) {
//                             if ($credential->id == $credential_id) {
//                                 foreach ($credential->credentials as $key => $value) {
//                                     $devices[$i]->{'credentials.' . $credential->type . '.' . $key} = $value;
//                                 }
//                             }
//                         }
//                     }
//                 }

//                 $internal_device = $this->format_int_to_ext($devices[$i], $rules);
//                 $external_device = external_search($internal_device, $integration);

//                 if ($external_device === false) {
//                     $external_device = external_create($internal_device, $integration);
//                     // NEED TO PASS BACK THE EXTERNAL IDENTIFIER and update local
//                     if ($external_device !== false) {
//                         $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, ?, NOW(), 5, 'notice', ?, 'm_integrations::execute', '', 0, '')";
//                         $details = 'External created ' . @$devices[$i]->{'system.name'};
//                         $data = array($id, intval($devices[$i]->{'system.id'}), $details);
//                         $this->db->query($sql, $data);
//                         // format the external result to an internal properties
//                         $internal_device = $this->format_ext_to_int($external_device, $rules);
//                         // update our device, in particular the external identifier
//                         $this->m_devices->update($internal_device);
//                     } else {
//                         $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, ?, NOW(), 5, 'notice', ?, 'm_integrations::execute', '', 0, '')";
//                         $details = 'External could not create ' . @$devices[$i]->{'system.name'};
//                         $data = array($id, intval($devices[$i]->{'system.id'}), $details);
//                         $this->db->query($sql, $data);
//                     }
//                 } else {
//                     $device = $this->combine_devices($internal_device, $external_device, $rules);
//                     $test = external_update($device, $integration);
//                     $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, ?, NOW(), 5, 'notice', ?, 'm_integrations::execute', '', 0, '')";
//                     $details = 'External could not update ' . @$devices[$i]->{'system.name'};
//                     if ($test) {
//                         $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, ?, NOW(), 5, 'notice', ?, 'm_integrations::execute', '', 0, '')";
//                         $details = 'External updated ' . @$devices[$i]->{'system.name'};
//                     }
//                     $data = array($id, intval($devices[$i]->{'system.id'}), $details);
//                     $this->db->query($sql, $data);
//                     $this->m_devices->update($device);
//                     $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, ?, NOW(), 5, 'notice', ?, 'm_integrations::execute', '', 0, '')";
//                     $details = 'Internal updated ' . @$devices[$i]->{'system.name'};
//                     $data = array($id, intval($devices[$i]->{'system.id'}), $details);
//                     $this->db->query($sql, $data);
//                 }
//                 $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, ?, NOW(), 5, 'notice', ?, 'm_integrations::execute', '', 0, '')";
//                 $details = 'Device outbound completed ' . @$devices[$i]->{'system.name'};
//                 $data = array($id, intval($devices[$i]->{'system.id'}), $details);
//                 $this->db->query($sql, $data);
//             }
//         }

//         // Should we populate our devices from the external source?
//         if ($integration->populate_from_remote === 'y') {
//             // Get the devices from the external system
//             $devices = external_collection($integration);
//             // Loop through them
//             foreach ($devices as $external_device) {

//                 $external_device = $this->format_ext_to_int($external_device, $rules);

//                 $parameters = new stdClass();
//                 $parameters->details = $external_device;
//                 $parameters->log = new stdClass();
//                 $external_device->id = $CI->m_device->match($parameters);

//                 $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, ?, NOW(), 5, 'notice', ?, '', '', 0, '')";
//                 $details = 'Device inbound started ' . @$external_device->name;
//                 $data = array($id, @$external_device->id, $details);
//                 $this->db->query($sql, $data);

//                 if ( ! empty($external_device->id)) {
//                     # we have this device - combine and update
//                     $internal_device = $this->m_devices->read($external_device->id);
//                     $device = $this->combine_devices($internal_device, $external_device, $rules);
//                     $this->m_devices->update($device);
//                     $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, ?, NOW(), 5, 'notice', ?, '', '', 0, '')";
//                     $details = 'Internal updated ' . @$devices[$i]->name;
//                     $data = array($id, intval($devices[$i]->id));
//                     $this->db->query($sql, $data);
//                     $test = external_update($device, $integration);
//                     $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, ?, NOW(), 5, 'notice', ?, '', '', 0, '')";
//                     $details = 'External updated ' . @$devices[$i]->name;
//                     if ( ! $test) {
//                         $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, ?, NOW(), 5, 'notice', ?, '', '', 0, '')";
//                         $details = 'External could not update ' . @$devices[$i]->name;
//                     }
//                     $data = array($id, intval($devices[$i]->id), $details);
//                     $this->db->query($sql, $data);
//                 } else {
//                     # we do not have this device - create
//                     $external_device->last_seen_by = 'integrations';
//                     $external_device->nmis_manage = 'y';
//                     $external_device->last_seen = $this->config->config['timestamp'];


//                     $external_device->id = $this->m_devices->create($external_device);
//                 }
//                 $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, ?, NOW(), 5, 'notice', ?, '', '', 0, '')";
//                 $details = 'Device inbound completed ' . $external_device->name;
//                 $data = array($id, intval($external_device->id), $details);
//                 $this->db->query($sql, $data);
//             }
//         }

//         $sql = '/* m_integrations::execute */ ' . "UPDATE `integrations` SET `status` = 'completed' WHERE id = ?";
//         $data = array($id);
//         $this->db->query($sql, $data);

//         $sql = '/* m_integrations::execute */ ' . "INSERT INTO `integrations_log` VALUES (null, ?, 0, NOW(), 5, 'notice', 'Completed integration', '', '', 0, '')";
//         $data = array($id);
//         $this->db->query($sql, $data);

//     }




    // public function combine_devices($internal_device, $external_device, $rules) {
    //     $device = new stdClass();
    //     foreach ($rules as $rule) {
    //         // both fields set, determine preference
    //         if (isset($internal_device->{$rule->local_field}) && isset($external_device->{$rule->remote_field}) && $internal_device->{$rule->local_field} != $external_device->{$rule->remote_field}) {
    //             if ($rule->authoritive_source === 'local') {
    //                 $device->{$rule->local_field} = $internal_device->{$rule->local_field};
    //                 $device->{$rule->remote_field} = $internal_device->{$rule->local_field};
    //             } else if ($rule->authoritive_source === 'remote') {
    //                 $device->{$rule->local_field} = $internal_device->{$rule->remote_field};
    //                 $device->{$rule->remote_field} = $internal_device->{$rule->remote_field};
    //             } else {
    //                 $device->{$rule->local_field} = $internal_device->{$rule->local_field};
    //                 $device->{$rule->remote_field} = $internal_device->{$rule->remote_field};
    //             }
    //         }
    //         // local set, remote not set - set remote to local
    //         if ( ! empty($rule->local_field) && isset($internal_device->{$rule->local_field}) && ! isset($external_device->{$rule->remote_field})) {
    //             $device->{$rule->local_field} = $internal_device->{$rule->local_field};
    //             $device->{$rule->remote_field} = $internal_device->{$rule->local_field};
    //         }
    //         // local not set, remote set - set local to remote
    //         if ( ! empty($rule->local_field) && ! isset($internal_device->{$rule->local_field}) && isset($external_device->{$rule->remote_field})) {
    //             $device->{$rule->local_field} = $internal_device->{$rule->remote_field};
    //             $device->{$rule->remote_field} = $internal_device->{$rule->remote_field};
    //         }
    //         // local empty and rules->ignore, unset the attribute
    //         if (isset($device->{$rule->local_field}) && (string)$device->{$rule->local_field} === '' && $rule->empty === 'ignore') {
    //             unset($device->{$rule->local_field});
    //         }
    //         // remote empty and rules->ignore, unset the attribute
    //         if (isset($device->{$rule->remote_field}) && (string)$device->{$rule->remote_field} === '' && $rule->empty === 'ignore') {
    //             unset($device->{$rule->remote_field});
    //         }
    //     }
    //     return $device;
    // }

    /**
     * Take our internal device and perform transforms, then apply external properties
     * @param  [type] $device [description]
     * @param  [type] $rules  [description]
     * @return [type]         [description]
     */
    // public function format_int_to_ext($internal_device, $rules)
    // {
    //     if (empty($internal_device) OR empty($rules)) {
    //         return false;
    //     }
    //     $device = new stdClass();
    //     $device->{'system.id'} = $internal_device->{'system.id'};
    //     $device->{'system.name'} = $internal_device->{'system.name'};
    //     // TODO - add external ID
    //     foreach ($rules as $rule) {
    //         if (!empty($rule->local_field) && ! empty($internal_device->{$rule->local_field})) {
    //             $device->{$rule->local_field} = $internal_device->{$rule->local_field};
    //         }
    //         if (!empty($rule->remote_field) && ! empty($internal_device->{$rule->local_field})) {
    //             $device->{$rule->remote_field} = $internal_device->{$rule->local_field};
    //         }
    //         switch ($rule->transform) {
    //             case 'string':
    //                 $device->{$rule->remote_field} = (string)$device->{$rule->remote_field};
    //                 break;

    //             case 'int':
    //                 $device->{$rule->remote_field} = intval($device->{$rule->remote_field});
    //                 break;

    //             case 'bool':
    //                 $device->{$rule->remote_field} = filter_var($device->{$rule->remote_field}, FILTER_VALIDATE_BOOLEAN);
    //                 break;

    //             case 'capitalise':
    //                 $device->{$rule->remote_field} = ucwords($device->{$rule->remote_field});
    //                 break;

    //             case 'lower':
    //                 $device->{$rule->remote_field} = strtolower($device->{$rule->remote_field});
    //                 break;

    //             case 'upper':
    //                 $device->{$rule->remote_field} = strtoupper($device->{$rule->remote_field});
    //                 break;

    //             case 'datetime_now':
    //                 $device->{$rule->remote_field} = $this->config->config['timestamp'];
    //                 break;

    //             case 'int_to_bool':
    //                 if ( ! empty($device->{$rule->remote_field})) {
    //                     $device->{$rule->remote_field} = true;
    //                 } else {
    //                     $device->{$rule->remote_field} = false;
    //                 }
    //                 break;

    //             case 'int_to_yn':
    //                 if ( ! empty($device->{$rule->remote_field})) {
    //                     $device->{$rule->remote_field} = 'y';
    //                 } else {
    //                     $device->{$rule->remote_field} = 'n';
    //                 }
    //                 break;

    //             case 'yn_to_int':
    //                 if ($device->{$rule->remote_field} === 'y') {
    //                     $device->{$rule->remote_field} = 1;
    //                 } else {
    //                     $device->{$rule->remote_field} = 0;
    //                 }
    //                 break;

    //             case 'date':
    //                 switch ($rule->remote_format) {
    //                     case 'date_Y-M-D':
    //                         // nothing, we're in this format
    //                         break;

    //                     case 'date_M-D-Y':
    //                         // from Y-m-d to m-d-Y
    //                         $date = date_create_from_format("Y-m-d", $device->{$rule->remote_field});
    //                         $device->{$rule->remote_field} = date_format($date, 'm-d-Y');
    //                         break;

    //                     default;
    //                         // nothing
    //                         break;
    //                 }
    //                 break;

    //             default:
    //                 # code...
    //                 break;
    //         }
    //     }
    //     return $device;
    // }

    /**
     * Return an array of rules for a given integration
     * @return array The array of rules
     */
    // public function rules($id)
    // {
    //     $sql = '/* m_integrations::rules */ ' . "SELECT * FROM `integrations_rules` WHERE `integrations_id` = " . intval($id);
    //     $query = $this->db->query($sql);
    //     $result = $query->result();
    //     return $result;
    // }







/**

CREATE TABLE `system_external` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(45) NOT NULL DEFAULT '',      -- based on Integration type.
  `identifier` varchar(250) NOT NULL DEFAULT '', -- the field value of the 'id' in the remote integration
  `link` varchar(250) NOT NULL DEFAULT '', -- maybe not required
  `integrations_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `system_external_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE,
  CONSTRAINT `system_external_integrations_id` FOREIGN KEY (`integrations_id`) REFERENCES `integrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `integrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'nmis',
  `options` longtext NOT NULL,
  `populate_from_local` enum('y', 'n') NOT NULL DEFAULT 'y',
  `populate_from_remote` enum('y', 'n') NOT NULL DEFAULT 'n',
  `query_id` int(10) unsigned DEFAULT NULL,
  `group_id` int(10) unsigned DEFAULT NULL,
  `last_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `status` varchar(45) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `integrations_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `integrations_id` int(10) unsigned NOT NULL DEFAULT '1',
  `system_id` int(10) unsigned DEFAULT NULL,
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `severity` int(1) unsigned NOT NULL DEFAULT '5',
  `severity_text` enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
  `details` text NOT NULL,
  `command` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '',
  `time_to_execute` decimal(12,6) NOT NULL DEFAULT '0.000000',
  `output` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `integrations_id` (`integrations_id`),
  CONSTRAINT `integrations_log_integrations_id` FOREIGN KEY (`integrations_id`) REFERENCES `integrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `integrations_rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `integrations_id` int(10) unsigned NOT NULL DEFAULT '1',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `type` enum('create', 'update') NOT NULL DEFAULT 'create',
  `authoritive_source` enum('local', 'remote') NOT NULL DEFAULT 'local',
  `empty` enum('set_to_blank', 'ignore', 'use_default') NOT NULL DEFAULT 'ignore',
  `local_field` text NOT NULL,
  `remote_field` text NOT NULL,
  `remote_format` enum('', 'string', 'int', 'bool', 'date_YMD', 'date_MDY', 'date_DMY') NOT NULL DEFAULT 'string',
  `transform`     enum('', 'string', 'int', 'bool', 'capitalise', 'lower', 'upper', 'date', 'date_now', 'date_time', 'datetime_now', 'int_to_bool', 'int_to_yn', 'yn_to_int', 'yn_to_bool') NOT NULL DEFAULT '',
  `default_value` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `integration_id` (`integrations_id`),
  CONSTRAINT `integrations_rules_integrations_id` FOREIGN KEY (`integrations_id`) REFERENCES `integrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


$sql = 'CREATE INDEX change_log_timestamp ON change_log (`timestamp`)';
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

*/












}
// End of file m_integrations.php
// Location: ./models/m_integrations.php

