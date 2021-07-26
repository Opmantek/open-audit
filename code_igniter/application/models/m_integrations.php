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
* @version   GIT: Open-AudIT_4.2.0
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
        if (!empty($data->options) && ! is_string($data->options)) {
            $data->options = json_encode($data->options);
        } else {
            $data->options = '[]';
        }

        if (!empty($data->attributes) && ! is_string($data->attributes)) {
            $data->attributes = json_encode($data->attributes);
        }

        if (empty($data->type)) {
            $data->type = '';
        }

        if (is_array($data->fields) or is_object($data->fields)) {
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
            $discovery->name = 'Discovery for ' . $integration->attributes->name;
            $discovery->network_address = 'http://127.0.0.1/open-audit/index.php/input/discoveries';
            $discovery->org_id = $integration->attributes->org_id;
            $discovery->discard = 'n';
            $discovery->complete = 'n';
            $discovery->subnet = '';
            $discovery->match_options = '{"match_ip":"y"}';
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
        $sql = "/* m_integrations::read */ " . 'SELECT integrations.*, discoveries.name AS `discoveries.name` FROM integrations LEFT JOIN discoveries ON (integrations.discovery_id = discoveries.id) WHERE integrations.id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'integrations');
        if (! empty($result)) {
            for ($i=0; $i < count($result); $i++) {
                if (! empty($result[$i]->{'attributes'}->{'options'})) {
                    $result[$i]->{'attributes'}->{'options'} = json_decode($result[$i]->{'attributes'}->{'options'});
                }
                if (! empty($result[$i]->{'attributes'}->{'attributes'})) {
                    $result[$i]->{'attributes'}->{'attributes'} = json_decode($result[$i]->{'attributes'}->{'attributes'});
                }
                if (! empty($result[$i]->{'attributes'}->{'fields'})) {
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
        // Select and delete the associated discovery
        $sql = "SELECT discovery_id FROM integrations WHERE id = ?";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $discovery_id = intval($result[0]->discovery_id);

        $sql = "DELETE FROM discoveries WHERE id = ?";
        $data = array($discovery_id);
        $result = $this->run_sql($sql, $data);

        // Delete any associated tasks
        $sql = "DELETE FROM tasks WHERE sub_resource_id = ? and type = 'integrations'";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);

        // Delete the integration itself
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
        if (! empty($temp)) {
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

        $this->load->library('encrypt');
        $this->load->model('m_devices');
        $this->load->model('m_device');
        $this->load->model('m_devices');
        $this->load->model('m_device');
        $this->load->model('m_edit_log');
        $this->load->model('m_queue');
        $this->load->model('m_rules');
        $this->load->helper('audit');

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

        if (substr($integration->attributes->url, -1) !== '/') {
            $integration->attributes->url .= '/';
        }

        $this->load->helper('integrations_' . $integration->attributes->type);

        // Run before integration
        integrations_pre($integration);

        // Read all devices from a remote system
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
        $parameters = new stdClass();
        $parameters->log = $log;
        $parameters->match = new stdClass();
        foreach ($integration->attributes->fields as $field) {
            if ($field->matching_attribute === 'y') {
                $field_name = str_replace('system.', '', $field->internal_field_name);
                $parameters->match->{$field_name} = 'y';
            }
        }

        foreach ($external_formatted_devices as $device) {
            $device->system->last_seen_by = 'integrations';
            $device->system->org_id = $integration->attributes->org_id;
            $parameters->details = $device->system;
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

        $discover_devices = array();

        // Create or update devices retrieved
        if ($integration->attributes->create_internal_from_external === 'y' or $integration->attributes->update_internal_from_external === 'y') {
            $update = 0;
            $create = 0;
            $device_ids = array();
            foreach ($external_formatted_devices as $device) {
                if (!empty($device->system->id)) {
                    // Update
                    $device_ids[] = intval($device->system->id);
                    $temp_device = new stdClass();
                    $temp_device->id = $device->system->id;
                    $temp_device->last_seen_by = 'integrations';
                    // If this is the FIRST time we have integrated this device
                    // IE, the existing device we have matched in the database doesn't have an omk_uuid
                    // then we should use all external attributes, disregarding the priority
                    $sql = "SELECT omk_uuid FROM system WHERE id = ?";
                    $data = intval($device->system->id);
                    $query = $this->db->query($sql, $data);
                    $result = $query->result();
                    foreach ($integration->attributes->fields as $field) {
                        if (($field->priority === 'external' or (empty($result[0]->uuid) and $integration->attributes->type === 'nmis')) and strpos($field->internal_field_name, 'system.') !== false) {
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
                    $device->system->ip = ip_address_from_db($device->system->ip);
                    $discover_devices[] = $device;
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
                        $device->system->ip = ip_address_from_db($device->system->ip);
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

        // Create or update custom fields
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

        // Create or update credentials
        if ($integration->attributes->create_internal_from_external === 'y' or $integration->attributes->update_internal_from_external === 'y') {
            $cred_fields = new stdClass();
            foreach ($integration->attributes->fields as $field) {
                // check if we need to update various fields
                if (strpos($field->internal_field_name, 'credentials.') !== false) {
                    $field_name = str_replace('credentials.', '', $field->internal_field_name);
                    $cred_fields->{$field_name} = $field->priority;
                }
            }

            foreach ($external_formatted_devices as $device) {
                if (!empty($device->credentials->snmp_community)) {
                    // If we have no SNMP credentials for a device in Open-AudIT but we
                    // do have credentials from externally, insert those - regardless of priority
                    // If we have priority for the external, delete any existing and insert external creds
                    $sql = "SELECT COUNT(*) AS `count` FROM credential WHERE system_id = ? AND type = 'snmp'";
                    $data = array(intval($device->system->id));
                    $query = $this->db->query($sql, $data);
                    $result = $query->result();

                    $credentials = new stdClass();
                    $credentials->community = $device->credentials->snmp_community;
                    $credentials = (string)simpleEncrypt(json_encode($credentials));

                    if (intval($result[0]->count) === 0) {
                        $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'snmp', ?, 'system', NOW())";
                        $data = array($device->system->id, 'SNMP from ' . $integration->attributes->type, '', $credentials);
                        $this->db->query($sql, $data);
                    } else {
                        if ($cred_fields->snmp_community === 'external') {
                            $sql = "DELETE FROM credential WHERE system_id = ? AND type = 'snmp'";
                            $data = array(intval($device->system->id));
                            $this->db->query($sql, $data);
                            $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'snmp', ?, 'system', NOW())";
                            $data = array($device->system->id, 'SNMP from ' . $integration->attributes->type, '', $credentials);
                            $this->db->query($sql, $data);
                        }
                    }
                }

                if (!empty($device->credentials->windows_username)) {
                    $sql = "SELECT COUNT(*) AS `count` FROM credential WHERE system_id = ? AND type = 'windows'";
                    $data = array(intval($device->system->id));
                    $query = $this->db->query($sql, $data);
                    $result = $query->result();

                    $credentials = new stdClass();
                    $credentials->username = $device->credentials->windows_username;
                    $credentials->password = $device->credentials->windows_password;
                    $credentials = (string)simpleEncrypt(json_encode($credentials));

                    if (intval($result[0]->count) === 0) {
                        $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'snmp', ?, 'system', NOW())";
                        $data = array($device->system->id, 'Windows from ' . $integration->attributes->type, '', $credentials);
                        $this->db->query($sql, $data);
                    } else {
                        if ($cred_fields->windows_username === 'external' or $cred_fields->windows_password === 'external') {
                            $sql = "DELETE FROM credential WHERE system_id = ? AND type = 'windows'";
                            $data = array(intval($device->system->id));
                            $this->db->query($sql, $data);
                            $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'snmp', ?, 'system', NOW())";
                            $data = array($device->system->id, 'Windows from ' . $integration->attributes->type, '', $credentials);
                            $this->db->query($sql, $data);
                        }
                    }
                }

                if (!empty($device->credentials->authentication_passphrase) or !empty($device->credentials->privacy_passphrase)) {
                    $sql = "SELECT COUNT(*) AS `count` FROM credential WHERE system_id = ? AND type = 'snmp_v3'";
                    $data = array(intval($device->system->id));
                    $query = $this->db->query($sql, $data);
                    $result = $query->result();

                    $credentials = new stdClass();
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
                    $credentials = (string)simpleEncrypt(json_encode($credentials));

                    if (intval($result[0]->count) === 0) {
                        $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'snmp_v3', ?, 'system', NOW())";
                        $data = array($device->system->id, 'SNMPv3 from ' . $integration->attributes->type, '', $credentials);
                        $this->db->query($sql, $data);
                    } else {
                        if ($cred_fields->authentication_passphrase === 'external' or $cred_fields->security_name === 'external') {
                            $sql = "DELETE FROM credential WHERE system_id = ? AND type = 'snmp_v3'";
                            $data = array(intval($device->system->id));
                            $this->db->query($sql, $data);
                            $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'snmp_v3', ?, 'system', NOW())";
                            $data = array($device->system->id, 'SNMPv3 from ' . $integration->attributes->type, '', $credentials);
                            $this->db->query($sql, $data);
                        }
                    }
                }


                if (!empty($device->credentials->ssh_username)) {
                    $sql = "SELECT COUNT(*) AS `count` FROM credential WHERE system_id = ? AND type = 'ssh'";
                    $data = array(intval($device->system->id));
                    $query = $this->db->query($sql, $data);
                    $result = $query->result();

                    $credentials = new stdClass();
                    $credentials->username = $device->credentials->ssh_username;
                    $credentials->password = $device->credentials->ssh_password;
                    $credentials = (string)simpleEncrypt(json_encode($credentials));

                    if (intval($result[0]->count) === 0) {
                        $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'ssh', ?, 'system', NOW())";
                        $data = array($device->system->id, 'SSH from ' . $integration->attributes->type, '', $credentials);
                        $this->db->query($sql, $data);
                    } else {
                        if ($cred_fields->windows_username === 'external' or $cred_fields->windows_password === 'external') {
                            $sql = "DELETE FROM credential WHERE system_id = ? AND type = 'ssh'";
                            $data = array(intval($device->system->id));
                            $this->db->query($sql, $data);
                            $sql = "INSERT INTO credential VALUES (null, ?, 'y', ?, ?, 'ssh', ?, 'system', NOW())";
                            $data = array($device->system->id, 'SSH from ' . $integration->attributes->type, '', $credentials);
                            $this->db->query($sql, $data);
                        }
                    }
                }
            }
        }

        // Run Rules
        if ($integration->attributes->create_internal_from_external === 'y' or $integration->attributes->update_internal_from_external === 'y') {
            foreach ($external_formatted_devices as $device) {
                $parameters = new stdClass();
                $parameters->id = intval($device->system->id);
                $parameters->discovery_id = '';
                $parameters->action = 'update';
                $this->m_rules->execute($parameters);
            }
        }

        // Insert into queue for discoveries
        if ($integration->attributes->discovery_run_on_create === 'y' && is_array($discover_devices) && count($discover_devices) > 0) {
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
            $count = 0;
            foreach ($discover_devices as $device) {
                if (filter_var($device->system->ip, FILTER_VALIDATE_IP)) {
                    $message = 'Add ' . $device->system->name . ' to discovery queue.';
                    $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                    $data = array($integration->id, microtime(true), $message);
                    $query = $this->db->query($sql, $data);

                    $item = new stdClass();
                    $item->ip = ip_address_from_db($device->system->ip);
                    $item->discovery_id = intval($integration->attributes->discovery_id);
                    $details = json_encode($item);
                    unset($item);
                    $CI->m_queue->create('ip_scan', $details);
                    $count = $count + 1;
                    $message = "IP {$device->system->ip} responding, adding to device list.";
                    $sql = "/* m_integrations::execute */ " . "INSERT INTO discovery_log VALUES (null, ?, ?, NOW(), 7, 'debug', ?, ?, 'm_integrations', 'execute', ?, '', 'notice', 0, '')";
                    $data = array($integration->attributes->discovery_id, $device->system->id, getmypid(), $device->system->ip, $message);
                    $query = $this->db->query($sql, $data);
                } else {
                    $message = 'Not adding ' . $device->system->name . ' to discovery queue - no IP.';
                    $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', ?, 'warning')";
                    $data = array($integration->id, microtime(true), $message);
                    $query = $this->db->query($sql, $data);
                }
            }

            $message = 'Added ' . $count . ' devices to discovery queue.';
            $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'notice', ?, 'success')";
            $data = array($integration->id, microtime(true), $message);
            $query = $this->db->query($sql, $data);

            $sql = "/* m_integrations::execute */ " . "UPDATE discoveries SET status = 'running', ip_all_count = ?, ip_responding_count = ?, ip_scanned_count = ?, ip_discovered_count = 0, ip_audited_count = 0 WHERE id = ?";
            $data = array($count, $count, $count, intval($integration->attributes->discovery_id));
            $query = $this->db->query($sql, $data);

            $message = 'Starting discovery.';
            $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
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

        $sql = "/* m_integrations::execute */ " . "UPDATE integrations SET select_internal_count = ? WHERE id = ?";
        $data = array(count($local_formatted_devices), $integration->id);
        $query = $this->db->query($sql, $data);

        $message = count($local_formatted_devices) . ' devices returned from Open-AudIT.';
        $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
        $data = array($integration->id, microtime(true), $message);
        $query = $this->db->query($sql, $data);

        // take our list of devices from OA and if any are already in the list of externally retrieved devices, remove them
        // leave only the devices from OA that are not in the external list - create those
        if ($integration->attributes->create_external_from_internal === 'y') {
            // Filter remote devices from local list
            $new_external_devices = $local_formatted_devices;
            foreach ($new_external_devices as $key => $local_device) {
                foreach ($external_devices as $external_device) {
                    foreach ($integration->attributes->fields as $field) {
                        if ($field->matching_attribute === 'y' and $field->external_field_name !== '') {
                            $test1 = $this->get_value($local_device, $field->external_field_name);
                            $test2 = $this->get_value($external_device, $field->external_field_name);
                            if ($test1 == $test2) {
                                unset($new_external_devices[$key]);
                            }
                        }
                    }
                }
            }
            $message = count($new_external_devices) . ' devices require creating in ' . $integration->attributes->type . ' for ' . $integration->attributes->name . '.';
            $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
            $data = array($integration->id, microtime(true), $message);
            $query = $this->db->query($sql, $data);
            // Create new devices externally
            $created_devices = integrations_create($integration, $new_external_devices);
            // Update local attributes from created devices
            $external_created_devices = $this->external_to_internal($integration, $created_devices);

            $parameters = new stdClass();
            $parameters->log = $log;
            $parameters->match = new stdClass();
            foreach ($integration->attributes->fields as $field) {
                if ($field->matching_attribute === 'y') {
                    $field_name = str_replace('system.', '', $field->internal_field_name);
                    $parameters->match->{$field_name} = 'y';
                }
            }

            foreach ($external_created_devices as $device) {
                $parameters->details = $device->system;
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
                $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $this->db->query($sql, $data);
                $this->m_device->update($temp_device);
            }

            $sql = "/* m_integrations::execute */ " . "UPDATE integrations SET create_external_count = ? WHERE id = ?";
            $data = array(count($new_external_devices), $integration->id);
            $query = $this->db->query($sql, $data);
        }

        // Update external devices where required
        if ($integration->attributes->update_external_from_internal === 'y') {
            $update_external_devices = array();
            // Build a new list of devices where we have a match in both
            foreach ($local_formatted_devices as $local_device) {
                foreach ($external_devices as $external_device) {
                    foreach ($integration->attributes->fields as $field) {
                        if ($field->matching_attribute === 'y' and $field->external_field_name !== '') {
                            $test1 = $this->get_value($local_device, $field->external_field_name);
                            $test2 = $this->get_value($external_device, $field->external_field_name);
                            if ($test1 == $test2) {
                                // Our internal and external devices match
                                $hit = false;
                                // Update fields if the priority is internal and the values are different
                                foreach ($integration->attributes->fields as $ifield) {
                                    $test = $this->get_value($local_device, $ifield->external_field_name);
                                    if ($ifield->priority === 'internal' and !empty($ifield->external_field_name) and !empty($test)) {
                                        $test1 = $this->get_value($local_device, $ifield->external_field_name);
                                        $test2 = $this->get_value($external_device, $ifield->external_field_name);
                                        if ((string)$test1 !== (string)$test2) {
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
            $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
            $data = array($integration->id, microtime(true), $message);
            $query = $this->db->query($sql, $data);

            $sql = "/* m_integrations::execute */ " . "UPDATE integrations SET update_external_count = ? WHERE id = ?";
            $data = array(count($update_external_devices), $integration->id);
            $query = $this->db->query($sql, $data);

            integrations_update($integration, $update_external_devices);
        }

        // Delete devices from the remote system if required
        if ($integration->attributes->delete_external_from_internal === 'y') {
            if (count($external_devices) > count($local_formatted_devices)) {
                $message = count($external_devices) . ' external devices and ' . count($local_formatted_devices) . ' local devices';
                $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $this->db->query($sql, $data);
                // Select all devices retrieved from external, compare to internal list - any NOT in the internal list, delete
                $delete_external_devices = $external_devices;
                foreach ($local_formatted_devices as $key => $local_device) {
                    foreach ($delete_external_devices as $ekey => $external_device) {
                        foreach ($integration->attributes->fields as $field) {
                            if ($field->matching_attribute === 'y' and $field->external_field_name !== '') {
                                $test1 = $this->get_value($local_device, $field->external_field_name);
                                $test2 = $this->get_value($external_device, $field->external_field_name);
                                if ($test1 == $test2) {
                                    $message = 'Removing ' . $external_device->name . ' delete from list.';
                                    $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
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
                $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $this->db->query($sql, $data);
                integrations_delete($integration, $delete_external_devices);
            } else {
                $message = '0 devices require deleting in ' . $integration->attributes->type . ' for ' . $integration->attributes->name . '.';
                $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $this->db->query($sql, $data);
            }
        }

        // Run after integration
        integrations_post($integration, $external_devices);

        $sql = "/* m_integrations::execute */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'notice', 'Completed integration.', 'success')";
        $data = array($integration->id, microtime(true));
        $query = $this->db->query($sql, $data);

        $duration = (microtime(true) - $timer_start);
        $sql = "/* m_integrations::execute */ " . "UPDATE integrations SET duration = ? WHERE id = ?";
        $data = array(intval($duration), $integration->id);
        $query = $this->db->query($sql, $data);

        // $sql = "SELECT * FROM integrations_log WHERE integrations_id = ?";
        // $data = array($integration->attributes->id);
        // $query = $this->db->query($sql, $data);
        // $result = $query->result();
        // $table = "<table width=\"100%\"><thead><tr><th>id</th><th>IntID</th><th>timestamp</th><th>microtime</th><th>severity</th><th>message</th><th>result</th></tr></thead><tbody>";
        // foreach ($result as $row) {
        //     $table .= "<tr><td>" . $row->id . "</td><td>" . $row->integrations_id . "</td><td>" . $row->timestamp . "</td><td>" . $row->microtime . "</td><td>" . $row->severity_text . "</td><td>" . $row->message . "</td><td>" . $row->result . "</td><td></tr>";
        // }

        // echo $table;

        // exit;
    }

    public function get_value($device, $field)
    {
        $value = array_reduce(explode('.', $field), function ($previous, $current) {
            return isset($previous->$current) && !empty($previous->$current) ? $previous->$current: null;
        }, $device);
        return $value;
    }

    public function set_value($device, $field, $value)
    {
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
        if (empty($internal_device) or empty($rules)) {
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

        if (! empty($device_ids)) {
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

    public function internal_field_from_empty($type, $field_name)
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
                        $newdevice->{$int[0]}->{$int[1]} = array_reduce(explode('.', $field->external_field_name), function ($previous, $current) {
                            return isset($previous->$current) && !empty($previous->$current)? $previous->$current: null;
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
                            if (! isset($newdevice->{$ext_fields[$i]}) or ! is_object($newdevice->{$ext_fields[$i]})) {
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
                            if (! isset($newdevice->{$ext_fields[$i]}) or ! is_object($newdevice->{$ext_fields[$i]})) {
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
                            if (! isset($newdevice->{$ext_fields[$i]}) or !is_object($newdevice->{$ext_fields[$i]})) {
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
        if (! empty($user_id)) {
            $org_list = implode(',', array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id))));
            $sql = "SELECT * FROM integrations WHERE org_id IN ({$org_list})";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'integrations');
            return $result;
        }
        if (! empty($response)) {
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
        $dictionary->notes = '<p></p>';

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

        $dictionary->columns->attributes = new stdClass();
        $dictionary->columns->attributes->url = 'The URL of the external system.';
        $dictionary->columns->attributes->username = 'The username used to access the external system.';
        $dictionary->columns->attributes->password = 'The password used to access the external system.';

        $dictionary->columns->create_internal_from_external = 'When integrating devices from the external system, if the device doesn\'t exist in Open-AudIT should we create it?';
        $dictionary->columns->update_internal_from_external = 'When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?';
        $dictionary->columns->discovery_run_on_create = 'When we create a device within Open-AudIT, should we run discovery upon it?';
        $dictionary->columns->select_internal_type = 'How should we select devices to be integrated (using an Attribute, Query or a Group).';
        $dictionary->columns->select_internal_attribute = 'The attribute to test (from the \'system\' table).';
        $dictionary->columns->select_internal_value = 'This item must match the value of the attribute selected.';

        $dictionary->columns->create_external_from_internal = 'If an Open-AudIT device is not on the external system, should we create it.';
        $dictionary->columns->update_external_from_internal = 'If an Open-AudIT device has been changed, should we update the external system.';
        $dictionary->columns->delete_external_from_internal = 'If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the remote system.';
        $dictionary->columns->select_external_type = 'Which devices should Open-AudIT create from the remote system (if any). Using All, None or a given Attribute.';
        $dictionary->columns->select_external_attribute = 'The attribute to test (must match an external field name from below).';
        $dictionary->columns->select_external_value = 'This item must match the value of the attribute selected.';

        return $dictionary;
    }
}
// End of file m_integrations.php
// Location: ./models/m_integrations.php
