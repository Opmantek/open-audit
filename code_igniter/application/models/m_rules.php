<?php
if (!defined('BASEPATH')) {
     exit('No direct script access allowed');
}
#
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

/*
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.0
* @link      http://www.open-audit.org
 */

/**
* Base Model Rules
*
* @access   public
* @category Model
* @package  Rules
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_rules extends MY_Model
{
    /**
     * [__construct description]
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
        if (is_array($data->inputs) OR is_object($data->inputs)) {
            $new_inputs = array();
            foreach ($data->inputs as $input) {
                $item = new stdClass();
                foreach ($input as $key => $value) {
                    $item->{$key} = $value;
                }
                $new_inputs[] = $item;
            }
            $data->inputs = json_encode($new_inputs);
        }

        if (is_array($data->outputs) OR is_object($data->outputs)) {
            $new_outputs = array();
            foreach ($data->outputs as $output) {
                $item = new stdClass();
                foreach ($output as $key => $value) {
                    $item->{$key} = $value;
                }
                $new_outputs[] = $item;
            }
            $data->outputs = json_encode($new_outputs);
        }
        if ($id = $this->insert_collection('rules', $data)) {
            return intval($id);
        } else {
            return false;
        }
    }

    /**
     * [read description]
     * @param  string $id [description]
     * @return [type]     [description]
     */
    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);
        $id = intval($id);
        if ($id === 0) {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        }
        $sql = 'SELECT * FROM `rules` WHERE id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if ( ! empty($result[0]->inputs)) {
            $result[0]->inputs = json_decode($result[0]->inputs);
        }
        if ( ! empty($result[0]->outputs)) {
            $result[0]->outputs = json_decode($result[0]->outputs);
        }
        $result = $this->format_data($result, 'rules');
        $this->log->summary = 'finish';
        stdlog($this->log);
        return ($result);
    }

    /**
     * [delete description]
     * @param  string $id [description]
     * @return [type]     [description]
     */
    public function delete($id = '')
    {
        $data = array(intval($id));
        $sql = 'DELETE FROM `rules` WHERE id = ?';
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * [execute description]
     * @param  [type] $parameters MUST contain either a device ID or a device object, SHOULD contain an action, default is to update, SHOULD contain a discovery ID for logging
     * @return [type]             [description]
     */
    public function execute($parameters = null)
    {
        $CI = & get_instance();
        $CI->load->helper('snmp_model');
        $CI->load->helper('mac_model');

        $log = new stdClass();
        $log->discovery_id = @intval($parameters->discovery_id);
        $log->message = 'Running rules::execute function.';
        $item_start = microtime(true);
        $log->severity = 7;
        $log->command_status = 'notice';
        $log->file = 'm_rules';
        $log->function = 'execute';
        $id = '';

        // Device
        if (empty($parameters->id) && empty($parameters->device)) {
            return false;
        }
        $device_sub = array();
        if ( ! empty($parameters->device)) {
            $device = $parameters->device;
            $device->where = 'supplied';
            $log->command_output = json_encode($device);
            $log->command = 'Device Input ';
        }
        if ( ! empty($parameters->id)) {
            // Get our device
            $id = intval($parameters->id);
            $log->command_output = "Device ID supplied: {$parameters->id}";
            $log->command = 'Device ID Input ';
            $sql = 'SELECT * FROM `system` WHERE id = ?';
            $data = array($id);
            $result = $this->run_sql($sql, $data);
            if ( ! empty($result[0])) {
                $device = $result[0];
                $device->where = 'database';
                // NOTE - Some of these are in the database and default to 0. Empty these.
                if ($device->snmp_enterprise_id === 0) {
                    $device->snmp_enterprise_id = '';
                }
                if ($device->os_bit === 0) {
                    $device->os_bit = '';
                }
                if ($device->memory_count === 0) {
                    $device->memory_count = '';
                }
                if ($device->processor_count === 0) {
                    $device->processor_count = '';
                }
                if ($device->storage_count === 0) {
                    $device->storage_count = '';
                }
                if ($device->switch_port === 0) {
                    $device->switch_port = '';
                }
            } else {
                $log->severity = 4;
                $log->command_status = 'fail';
                $log->message = 'Could not retrieve data from system table for ID: ' . $parameters->id . '. Not running Rules function.';
                if (!empty($log->discovery_id)) {
                    discovery_log($log);
                }
                return false;
            }
            // Get the first MAC Address because there is no mac stored in 'system'
            $sql = "SELECT `mac` FROM `network` WHERE system_id = ? and current = 'y' and `mac` != '' order by `mac` limit 1";
            $data = array($id);
            $result = $this->run_sql($sql, $data);
            if ( ! empty($result[0])) {
                $device->mac_address = $result[0]->mac;
            }
        }

        // Discovery ID for logging
        if (empty($parameters->discovery_id)) {
            if ( ! empty($device->discovery_id)) {
                $discovery_id = $device->discovery_id;
            } else {
                $discovery_id = false;
            }
        } else {
            $discovery_id = $parameters->discovery_id;
        }
        // Action - default of update
        $action = 'update';
        if ( ! empty($parameters->action) && $parameters->action === 'return') {
            $action = 'return';
            $log->command .= '(return).';
        } else {
            $log->command .= '(update).';
        }

        $log->ip = '';
        if ( ! empty($device->ip)) {
            $log->ip = ip_address_from_db($device->ip);
        }
        $log->system_id = '';
        if ( ! empty($device->id)) {
            $log->system_id = $device->id;
            $id = $device->id;
        }

        if (!empty($log->discovery_id)) {
            discovery_log($log);
        }

        // NOTE - don't set the id or last_seen_by here as we test if empty after rules
        //        have been run and only update if not empty (after adding id and last_seen_by).
        $newdevice = new stdClass();

        // Details based on SNMP OID
        if ( ! empty($device->snmp_oid)) {
            $log_start = microtime(true);
            $newdevice = get_details_from_oid($device->snmp_oid);
            if ( ! empty($newdevice->type) OR ! empty($newdevice->model)) {
                $temp = empty($newdevice->model) ? $newdevice->type : $newdevice->model;
                $log->message = "Hit on \$device->snmp_oid {$device->snmp_oid} eq {$device->snmp_oid}";
                $log->command = 'Rules Match - SNMP OID for  ' . $temp;
                $log->command_output = json_encode($newdevice);
                $log->command_time_to_execute = (microtime(true) - $log_start);
                if (!empty($log->discovery_id)) {
                    discovery_log($log);
                }
                foreach ($newdevice as $key => $value) {
                    $device->{$key} = $value;
                }
            }
        }

        // Manufacturer based on MAC Address
        if ( ! empty($device->mac_address) && empty($device->manufacturer)) {
            $log_start = microtime(true);
            $newdevice->manufacturer = get_manufacturer_from_mac($device->mac_address);
            if ( ! empty($newdevice->manufacturer)) {
                $log->message = "Hit on \$device->mac_address {$device->mac_address} st " . substr(strtolower($device->mac_address ), 0, 8);
                $log->command = 'Rules Match - Mac Address for ' . $newdevice->manufacturer;
                $log->command_output = json_encode($newdevice);
                $log->command_time_to_execute = (microtime(true) - $log_start);
                if (!empty($log->discovery_id)) {
                    discovery_log($log);
                }
                $device->manufacturer = $newdevice->manufacturer;
            }
        }

        // Manufacturer based on SNMP Enterprise ID
        if ( ! empty($device->snmp_enterprise_id) && empty($device->manufacturer)) {
            $log_start = microtime(true);
            $newdevice->manufacturer = get_manufacturer_from_oid($device->snmp_enterprise_id);
            if ( ! empty($newdevice->manufacturer)) {
                $log->message = 'Hit on $device->snmp_enterprise_id ' . $device->snmp_enterprise_id . ' eq ' . $device->snmp_enterprise_id;
                $log->command = 'Rules Match - SNMP Enterprise Number for  ' . $newdevice->manufacturer;
                $log->command_output = json_encode($newdevice);
                $log->command_time_to_execute = (microtime(true) - $log_start);
                if (!empty($log->discovery_id)) {
                    discovery_log($log);
                }
                $device->manufacturer = $newdevice->manufacturer;
            }
        }

        // Mac Description based on Manufacturer Code (derived from Serial)
        if ( ! empty($device->manufacturer_code)) {
            $log_start = microtime(true);
            $newdevice->description = get_description_from_manufacturer_code($device->manufacturer_code);
            if ( ! empty($newdevice->description)) {
                $log->message .= " Hit on \$device->manufacturer_code " . $device->manufacturer_code . " eq " . $device->manufacturer_code;
                $log->command = 'Rules Match - Mac Model into description';
                $log->command_output = json_encode($newdevice->description);
                $log->command_time_to_execute = (microtime(true) - $log_start);
                if (!empty($log->discovery_id)) {
                    discovery_log($log);
                }
                $device->description = $newdevice->description;
            }
        }

        // TODO - Orgs
        $sql = "SELECT * FROM `rules` ORDER BY weight ASC, id";
        $rules = $this->run_sql($sql);

        $other_tables = array();
        foreach ($rules as $rule) {
            $rule->inputs = json_decode($rule->inputs);
            $rule->outputs = json_decode($rule->outputs);
            foreach ($rule->inputs as $input) {
                if ( ! $this->db->table_exists($input->table)) {
                    $l = new stdClass();
                    $l->command_status = 'error';
                    $l->discovery_id = $log->discovery_id;
                    $l->ip = $log->ip;
                    $l->message = 'Rule ' . $rule->id . ' specified a table that does not exist: ' . $input->table . '.';
                    $l->command = json_encode($rule);
                    $l->command_output = '';
                    if (!empty($log->discovery_id)) {
                        discovery_log($l);
                    }
                    continue;
                }
                if ($input->table !== 'system' and !in_array($input->table, $other_tables)) {
                    $other_tables[] = $input->table;
                }
            }
        }

        foreach ($other_tables as $table) {
            $sql = "SELECT * FROM `{$table}` WHERE system_id = ? AND current = 'y'";
            $data = array($id);
            $result = $this->run_sql($sql, $data);
            $device_sub[$table] = $result;
        }
        unset($other_tables);

        // Special case the MAC as we might have it in the device entry, but not network table yet
        if ( ! empty($device->mac_address) && empty($device_sub['network'])) {
            $item = new stdClass();
            $item->mac = $device->mac_address;
            $device_sub['network'] = array($item);
        }

        foreach ($rules as $rule) {
            if (is_array($rule->inputs)) {
                $input_count = count($rule->inputs);
            } else {
                // Log an error, but continue
                $l = new stdClass();
                $l->command_status = 'error';
                $l->discovery_id = $log->discovery_id;
                $l->ip = $log->ip;
                $l->message = 'Rule ' . $rule->id . ' inputs is not an array.';
                $l->command = $rule->inputs;
                $l->command_output = '';
                if (!empty($log->discovery_id)) {
                    discovery_log($l);
                }
                continue;
            }
            $hit = 0;
            foreach ($rule->inputs as $input) {
                if ($input->table === 'system') {
                    switch ($input->operator) {
                        case 'eq':
                            if (isset($device->{$input->attribute}) && (string)$device->{$input->attribute} === (string)$input->value) {
                                if ((string)$input->value !== '') {
                                    $log->message .= " Hit on {$input->attribute} " . $device->{$input->attribute} . ' eq ' . $input->value;
                                } else {
                                    $log->message .= " Hit on {$input->attribute} is empty";
                                }
                                $hit++;
                            }
                        break;

                        case 'ne':
                            if (!isset($device->{$input->attribute}) or (string)$device->{$input->attribute} !== (string)$input->value) {
                                if ((string)$input->value !== '') {
                                    $log->message .= " Hit on $input->attribute " . @$device->{$input->attribute} . " ne " . $input->value;
                                } else {
                                    $log->message .= " Hit on $input->attribute is not empty";
                                }
                                $hit++;
                            }
                        break;

                        case 'gt':
                            if (isset($device->{$input->attribute}) and (string)$device->{$input->attribute} > (string)$input->value) {
                                $log->message .= " Hit on $input->attribute " . $device->{$input->attribute} . " gt " . $input->value;
                                $hit++;
                            }
                        break;

                        case 'ge':
                            if (isset($device->{$input->attribute}) and (string)$device->{$input->attribute} >= (string)$input->value) {
                                $log->message .= " Hit on $input->attribute " . $device->{$input->attribute} . " ge " . $input->value;
                                $hit++;
                            }
                        break;

                        case 'lt':
                            if (isset($device->{$input->attribute}) and (string)$device->{$input->attribute} < (string)$input->value) {
                                $log->message .= " Hit on $input->attribute " . $device->{$input->attribute} . " lt " . $input->value;
                                $hit++;
                            }
                        break;

                        case 'le':
                            if (isset($device->{$input->attribute}) and (string)$device->{$input->attribute} <= (string)$input->value) {
                                $log->message .= " Hit on $input->attribute " . $device->{$input->attribute} . " le" . $input->value;
                                $hit++;
                            }
                        break;

                        case 'li':
                            if (isset($device->{$input->attribute}) and stripos((string)$device->{$input->attribute}, $input->value) !== false) {
                                $log->message .= " Hit on $input->attribute " . $device->{$input->attribute} . " li " . $input->value;
                                $hit++;
                            }
                        break;

                        case 'nl':
                            if (isset($device->{$input->attribute}) and stripos((string)$device->{$input->attribute}, $input->value) === false) {
                                $log->message .= " Hit on $input->attribute " . $device->{$input->attribute} . " nl " . $input->value;
                                $hit++;
                            }
                        break;

                        case 'in':
                            $values = explode(',', $input->value);
                            if (isset($device->{$input->attribute}) and in_array((string)$device->{$input->attribute}, $values)) {
                                $log->message .= " Hit on $input->attribute " . $device->{$input->attribute} . " in " . $input->value;
                                $hit++;
                            }
                        break;

                        case 'ni':
                            $values = explode(',', $input->value);
                            if (!isset($device->{$input->attribute}) or !in_array((string)$device->{$input->attribute}, $values)) {
                                $log->message .= " Hit on $input->attribute " . $device->{$input->attribute} . " ni " . $input->value;
                                $hit++;
                            }
                        break;

                        case 'st':
                            if (!empty($device->{$input->attribute}) and stripos((string)$device->{$input->attribute},$input->value) === 0) {
                                $log->message .= " Hit on $input->attribute " . $device->{$input->attribute} . " st " . $input->value;
                                $hit++;
                            }
                        break;
                        
                        default:
                            if (isset($device->{$input->attribute}) and (string)$device->{$input->attribute} === (string)$input->value) {
                                $log->message .= " Hit on $input->attribute " . $device->{$input->attribute} . " default " . $input->value;
                                $hit++;
                            }
                        break;
                    }
                } else {
                    if (!empty($input->table) and !empty($device_sub[$input->table])) {
                        switch ($input->operator) {
                            case 'eq':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if ((string)$dsub->{$input->attribute} === (string)$input->value) {
                                        if ($input->value != '') {
                                            $log->message .= " Hit on " . $input->table . " " .  "$input->attribute " .  $dsub->{$input->attribute} . " eq " .  $input->value . " for " .  $rule->name . ".";
                                        } else {
                                            $log->message .= " Hit on $dsub $input->attribute is empty";
                                        }
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'ne':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if ((string)$dsub->{$input->attribute} !== (string)$input->value) {
                                        if ($input->value != '') {
                                            $log->message .= " Hit on " . $input->table . " $input->attribute " . $dsub->{$input->attribute} . " ne " . $input->value;
                                        } else {
                                            $log->message .= " Hit on " . $input->table . " $input->attribute is empty";
                                        }
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'gt':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if ((string)$dsub->{$input->attribute} > (string)$input->value) {
                                        $log->message .= " Hit on " . $dsub->{$input->attribute} . " gt " . $input->value;
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'ge':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if ((string)$dsub->{$input->attribute} >= (string)$input->value) {
                                        $log->message .= " Hit on " . $dsub->{$input->attribute} . " ge " . $input->value;
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'lt':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if ((string)$dsub->{$input->attribute} < (string)$input->value) {
                                        $log->message .= " Hit on " . $dsub->{$input->attribute} . " lt " . $input->value;
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'le':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if ((string)$dsub->{$input->attribute} <= (string)$input->value) {
                                        $log->message .= " Hit on " . $dsub->{$input->attribute} . " le" . $input->value;
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'li':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (stripos((string)$dsub->{$input->attribute}, $input->value) !== false) {
                                        $log->message .= " Hit on " . $dsub->{$input->attribute} . " li " . $input->value;
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'nl':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (stripos((string)$dsub->{$input->attribute}, $input->value) === false) {
                                        $log->message .= " Hit on " . $dsub->{$input->attribute} . " nl " . $input->value ;
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'in':
                                $values = explode(',', $input->value);
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (in_array((string)$dsub->{$input->attribute}, $values)) {
                                        $log->message .= " Hit on " . $dsub->{$input->attribute} . " in " . $input->value;
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'ni':
                                $values = explode(',', $input->value);
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!in_array((string)$dsub->{$input->attribute}, $values)) {
                                        $log->message .= " Hit on " . $dsub->{$input->attribute} . " ni " . $input->value;
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'st':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (stripos((string)$dsub->{$input->attribute},$input->value) === 0) {
                                        $log->message .= " Hit on " . $dsub->{$input->attribute} . " st " . $input->value;
                                        $hit++;
                                        break;
                                    }
                                }
                            break;
                            
                            default:
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if ((string)$dsub->{$input->attribute} == (string)$input->value) {
                                        $log->message .= " Hit on " . $device->{$input->attribute} . " default " . $input->value;
                                        $hit++;
                                        break;
                                    }
                                }
                            break;
                        }
                    }
                }
                if ($hit >= $input_count) {
                    $attributes = new stdClass();
                    foreach ($rule->outputs as $output) {
                        switch ($output->value_type) {
                            case 'string':
                                $newdevice->{$output->attribute} = (string)$output->value;
                            break;
                            
                            case 'integer':
                                $newdevice->{$output->attribute} = intval($output->value);
                            break;
                            
                            case 'timestamp':
                                if ($output->value == '') {
                                    $newdevice->{$output->attribute} = $this->config->config['timestamp'];
                                } else {
                                    $newdevice->{$output->attribute} = intval($output->value);
                                }
                            break;
                            
                            default:
                                $newdevice->{$output->attribute} = (string)$output->value;
                            break;
                        }
                        $attributes->{$output->attribute} = $newdevice->{$output->attribute};
                        $device->{$output->attribute} = $newdevice->{$output->attribute};
                    }
                    $log->message = trim($log->message);
                    $log->command = 'Rules Match - ' . $rule->name . ', ID: ' . $rule->id;
                    $log->command_output = json_encode($attributes);
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    if (!empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
            }
            $log->message = '';
        }
        unset($rules);

        $log->message = 'Completed rules::execute function.';
        $log->command = '';
        $log->command_output = '';
        $log->command_status = 'notice';
        if (!empty($log->discovery_id)) {
            discovery_log($log);
        }

        if (count(get_object_vars($newdevice)) > 0) {
            $newdevice->id = @$device->id;
            if ($action == 'update') {
                $newdevice->last_seen_by = 'rules';
                $this->load->model('m_devices');
                $this->m_devices->update($newdevice);
                return;
            } else {
                return $device;
            }
        } else {
            if ($action == 'update') {
                return;
            } else {
                return $device;
            }
        }
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = $CI->m_orgs->get_user_all($CI->user->id);
        $sql = 'SELECT COUNT(id) AS `count` FROM rules WHERE org_id IN (' . implode(',', $org_list) . ')';
        $result = $this->run_sql($sql, array());
        return intval($result[0]->count);
    }

    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if (!empty($user_id)) {
            $org_list = $CI->m_orgs->get_user_all($user_id);
            $sql = "SELECT * FROM rules WHERE org_id IN (" . implode(',', $org_list) . ")";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'rules');
            return $result;
        }
        if (!empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT " . $CI->response->meta->internal->properties . ", orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM rules LEFT JOIN orgs ON (rules.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . " " . 
                    $CI->response->meta->internal->groupby . " " . 
                    $CI->response->meta->internal->sort . " " . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'rules');
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
        $collection = 'rules';
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
        $dictionary->sentence = 'Think \'if this, then that\' for your discovered devices.';
        $dictionary->marketing = '<p>Rules are used to apply attribute details to a device, depending on it\'s other attributes.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>Rules are used to apply attribute details to a device, depending on it\'s other attributes<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'enterprise';
        $dictionary->notes = '';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->weight = 'A lower number means it will be applied before other rules.';
        $dictionary->columns->inputs = 'A JSON object containing an array of attributes to match (normal weight is 100).';
        $dictionary->columns->outputs = 'A JSON object containing an array of attributes to change if the match occurs.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;

        $tables = array('bios', 'credential', 'disk', 'dns', 'field', 'file', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'system', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'warranty', 'windows');
        $columns = array();
        foreach ($tables as $table) {
            $fields = $this->db->list_fields($table);
            $myfields = array();
            foreach ($fields as $field) {
                if ($field !== 'id' && $field !== 'current' && $field !== 'system_id' && $field !== 'first_seen' && $field !== 'last_seen') {
                    $myfields[] = $field;
                }
            }
            sort($myfields);
            $columns[$table] = $myfields;
        }
        $dictionary->attributes->tables = $tables;
        $dictionary->attributes->columns = $columns;

        return $dictionary;
    }
}
// End of file m_rules.php
// Location: ./models/m_rules.php
