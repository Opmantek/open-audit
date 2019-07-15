<?php
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

/**
* @category  Model
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.0.0
* @link      http://www.open-audit.org
 */
class M_conditions extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

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
        $sql = "SELECT * FROM `conditions` WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'conditions');
        $this->log->summary = 'finish';
        stdlog($this->log);
        return ($result);
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        $this->log->summary = 'start';
        stdlog($this->log);
        $id = intval($id);
        if ($id === 0) {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        }
        if ($id != 0) {
            $CI = & get_instance();
            $sql = "DELETE FROM `conditions` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            $this->log->summary = 'finish';
            stdlog($this->log);
            return true;
        }
        $this->log->summary = 'finish';
        stdlog($this->log);
        return false;
    }

    /*
    $parameters MUST contain either a device ID or a device object
                SHOULD contain an action, default is to update
                SHOULD contain a discovery ID for logging
    */
    public function execute($parameters = null)
    {
        # Device
        if (empty($parameters->id)) {
            if (empty($parameters->device)) {
                return false;
            } else {
                # Set our device
                $device = $parameters->device;
            }
        } else {
            # Get our device
            $id = intval($parameters->id);
            $sql = "SELECT * FROM system WHERE id = ?";
            $data = array($id);
            $result = $this->run_sql($sql, $data);
            if (!empty($result[0])) {
                $device = $result[0];
            } else {
                return false;
            }
        }
        # Discovery ID for logging
        if (empty($parameters->discovery_id)) {
            if (!empty($device->discovery_id)) {
                $discovery_id = $device->discovery_id;
            } else {
                $discovery_id = false;
            }
        } else {
            $discovery_id = $parameters->discovery_id;
        }
        # Action - default of update
        if (empty($parameters->action)) {
            $action = 'update';
        } else {
            $action = 'update';
            if ($parameters->action == 'return') {
                $action = 'return';
            }
        }

        # NOTE - don't set the id or last_seen_by here as we test if empty after conditions
        #        have been run and only update if not empty (after adding id and last_seen_by).
        $newdevice = new stdClass();

        # TODO - Orgs
        $sql = "SELECT * FROM conditions ORDER BY weight ASC, id";
        $conditions = $this->run_sql($sql);
        $device_sub = array();

        $CI =& get_instance();
        $CI->load->model('m_devices');

        $log = new stdClass();
        $log->discovery_id = @intval($discovery_id);
        $log->message = '';
        $log->command = 'Condition match';
        $item_start = microtime(true);
        $log->command_output = '';
        $log->command_status = 'notice';
        $log->ip = '';
        if (!empty($device->ip)) {
            $log->ip = ip_address_from_db($device->ip);
        }

        foreach ($conditions as $condition) {
            $condition->inputs = json_decode($condition->inputs);
            $condition->outputs = json_decode($condition->outputs);

            if (is_array($condition->inputs)) {
                $input_count = count($condition->inputs);
            } else {
                # TODO - log an error, but continue
                break;
            }
            
            $hit = 0;
            foreach ($condition->inputs as $input) {

                $log->message = '';

                if (!$this->db->table_exists($input->table)) {
                    # TODO - log an error, but continue
                    break;
                }

                # If we're talking to something other than system and we've not loaded it yet, do so.
                if ($input->table != 'system' and empty($device_sub[$input->table]) and empty($parameters->device)) {
                    $sql = "SELECT * FROM `" . $input->table . "` WHERE system_id = ? AND current = 'y'";
                    $data = array($id);
                    $result = $this->run_sql($sql, $data);
                    $device_sub[$input->table] = $result;
                }

                if ($input->table == 'system') {
                    switch ($input->operator) {
                        case 'eq':
                            if (isset($device->{$input->attribute}) and $device->{$input->attribute} == $input->value) {
                                $log->message .= " Hit on " . $device->{$input->attribute} . " eq " . $input->value . " for " . $condition->name . ".";
                                $hit++;
                            }
                        break;

                        case 'ne':
                            if (!isset($device->{$input->attribute}) or $device->{$input->attribute} != $input->value) {
                                $log->message .= " Hit on " .$device->{$input->attribute} . " ne " . $input->value . " for " . $condition->name . ".";
                                $hit++;
                            }
                        break;

                        case 'gt':
                            if (isset($device->{$input->attribute}) and $device->{$input->attribute} > $input->value) {
                                $log->message .= " Hit on " .$device->{$input->attribute} . " gt " . $input->value . " for " . $condition->name . ".";
                                $hit++;
                            }
                        break;

                        case 'ge':
                            if (isset($device->{$input->attribute}) and $device->{$input->attribute} >= $input->value) {
                                $log->message .= " Hit on " .$device->{$input->attribute} . " ge " . $input->value . " for " . $condition->name . ".";
                                $hit++;
                            }
                        break;

                        case 'lt':
                            if (isset($device->{$input->attribute}) and $device->{$input->attribute} < $input->value) {
                                $log->message .= " Hit on " .$device->{$input->attribute} . " lt " . $input->value . " for " . $condition->name . ".";
                                $hit++;
                            }
                        break;

                        case 'le':
                            if (isset($device->{$input->attribute}) and $device->{$input->attribute} <= $input->value) {
                                $log->message .= " Hit on " .$device->{$input->attribute} . " le" . $input->value . " for " . $condition->name . ".";
                                $hit++;
                            }
                        break;

                        case 'li':
                            if (isset($device->{$input->attribute}) and stripos($device->{$input->attribute}, $input->value) !== false) {
                                $log->message .= " Hit on " .$device->{$input->attribute} . " li " . $input->value . " for " . $condition->name . ".";
                                $hit++;
                            }
                        break;

                        case 'nl':
                            if (isset($device->{$input->attribute}) and stripos($device->{$input->attribute}, $input->value) === false) {
                                $log->message .= " Hit on " .$device->{$input->attribute} . " nl " . $input->value . " for " . $condition->name . ".";
                                $hit++;
                            }
                        break;

                        case 'in':
                            $values = explode(',', $input->value);
                            if (isset($device->{$input->attribute}) and in_array($device->{$input->attribute}, $values)) {
                                $log->message .= " Hit on " .$device->{$input->attribute} . " in " . $input->value . " for " . $condition->name . ".";
                                $hit++;
                            }
                        break;

                        case 'ni':
                            $values = explode(',', $input->value);
                            if (isset($device->{$input->attribute}) and !in_array($device->{$input->attribute}, $values)) {
                                $log->message .= " Hit on " .$device->{$input->attribute} . " ni " . $input->value . " for " . $condition->name . ".";
                                $hit++;
                            }
                        break;

                        case 'st':
                            if (isset($device->{$input->attribute}) and stripos($device->{$input->attribute},$input->value) === 0) {
                                $log->message .= " Hit on " .$device->{$input->attribute} . " st " . $input->value . " for " . $condition->name . ".";
                                $hit++;
                            }
                        break;
                        
                        default:
                            if (isset($device->{$input->attribute}) and $device->{$input->attribute} == $input->value) {
                                $log->message .= " Hit on " . $device->{$input->attribute} . " default " . $input->value . " for " . $condition->name . ".";
                                $hit++;
                            }
                        break;
                    }
                } else {
                    if (!empty($input->table) and !empty($device_sub[$input->table])) {
                        switch ($input->operator) {
                            case 'eq':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (isset($dsub->{$input->attribute}) and $dsub->{$input->attribute} == $input->value) {
                                        $log->message .= " Hit on " .$dsub->{$input->attribute} . " eq " . $input->value . " for " . $condition->name . ".";
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'ne':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!isset($dsub->{$input->attribute}) or $dsub->{$input->attribute} != $input->value) {
                                        $log->message .= " Hit on " .$dsub->{$input->attribute} . " ne " . $input->value . " for " . $condition->name . ".";
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'gt':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (isset($dsub->{$input->attribute}) and $dsub->{$input->attribute} > $input->value) {
                                        $log->message .= " Hit on " .$dsub->{$input->attribute} . " gt " . $input->value . " for " . $condition->name . ".";
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'ge':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (isset($dsub->{$input->attribute}) and $dsub->{$input->attribute} >= $input->value) {
                                        $log->message .= " Hit on " .$dsub->{$input->attribute} . " ge " . $input->value . " for " . $condition->name . ".";
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'lt':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (isset($dsub->{$input->attribute}) and $dsub->{$input->attribute} < $input->value) {
                                        $log->message .= " Hit on " .$dsub->{$input->attribute} . " lt " . $input->value . " for " . $condition->name . ".";
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'le':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (isset($dsub->{$input->attribute}) and $dsub->{$input->attribute} <= $input->value) {
                                        $log->message .= " Hit on " .$dsub->{$input->attribute} . " le" . $input->value . " for " . $condition->name . ".";
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'li':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (isset($dsub->{$input->attribute}) and stripos($dsub->{$input->attribute}, $input->value) !== false) {
                                        $log->message .= " Hit on " .$dsub->{$input->attribute} . " li " . $input->value . " for " . $condition->name . ".";
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'nl':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (isset($dsub->{$input->attribute}) and stripos($dsub->{$input->attribute}, $input->value) === false) {
                                        $log->message .= " Hit on " .$dsub->{$input->attribute} . " nl " . $input->value . " for " . $condition->name . ".";
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'in':
                                $values = explode(',', $input->value);
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (isset($dsub->{$input->attribute}) and in_array($dsub->{$input->attribute}, $values)) {
                                        $log->message .= " Hit on " .$dsub->{$input->attribute} . " in " . $input->value . " for " . $condition->name . ".";
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'ni':
                                $values = explode(',', $input->value);
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (isset($dsub->{$input->attribute}) and !in_array($dsub->{$input->attribute}, $values)) {
                                        $log->message .= " Hit on " .$dsub->{$input->attribute} . " ni " . $input->value . " for " . $condition->name . ".";
                                        $hit++;
                                        break;
                                    }
                                }
                            break;

                            case 'st':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (isset($dsub->{$input->attribute}) and stripos($dsub->{$input->attribute},$input->value) === 0) {
                                        $log->message .= " Hit on " .$dsub->{$input->attribute} . " st " . $input->value . " for " . $condition->name . ".";
                                        $hit++;
                                        break;
                                    }
                                }
                            break;
                            
                            default:
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (isset($dsub->{$input->attribute}) and $dsub->{$input->attribute} == $input->value) {
                                        $log->message .= " Hit on " . $device->{$input->attribute} . " default " . $input->value . " for " . $condition->name . ".";
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
                    foreach ($condition->outputs as $output) {
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
                    }
                    $log->message = trim($log->message);
                    $log->command_output = json_encode($attributes);
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    discovery_log($log);
                }
            }
        }
        if (count(get_object_vars($newdevice)) > 0) {
            $newdevice->id = $device->id;
            if ($action == 'update') {
                $newdevice->last_seen_by = 'conditions';
                $CI->m_devices->update($device);
                return;
            } else {
                foreach($newdevice as $key => $value) {
                    $device->{$key} = $value;
                }
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
}
