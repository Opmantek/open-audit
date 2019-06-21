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

    public function execute($parameters = null)
    {
        if (empty($parameters->id)) {
            return false;
        } else {
            $id = intval($parameters->id);
        }
        if (empty($parameters->credentials)) {
            $credentials = false;
        } else {
            $credentials = $parameters->credentials;
        }

        # Get our device
        $sql = "SELECT * FROM system WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (!empty($result[0])) {
            $device = $result[0];
        } else {
            return false;
        }

        # TODO - Orgs
        $sql = "SELECT * FROM conditions";
        $conditions = $this->run_sql($sql);

        # which tables do we need, apart from system?
        $tables = array();
        foreach ($conditions as $condition) {
            $condition->inputs = json_decode($condition->inputs);
            foreach ($condition_inputs as $condition_input) {
                if ($condition_input->table != 'system') {
                    $tables[] = $condition_input->table;
                }
            }
        }
        $tables = array_unique($tables);
        # TODO - better protect with $table names
        $device_sub = array();
        foreach ($tables as $table) {
            $sql = "SELECT * FROM `$table` WHERE system_id = ? AND current = 'y'";
            $data = array($id);
            $result = $this->run_sql($sql, $data);
            $device_sub[$table] = $result;
        }

        $CI =& get_instance();
        $CI->load->model('m_devices');

        foreach ($conditions as $condition) {
            $condition->inputs = json_decode($condition->inputs);
            $condition->outputs = json_decode($condition->outputs);
            $input_count = count($condition->inputs);
            $hit = 0;
            foreach ($condition->inputs as $input) {
                if ($input->table == 'system') {
                    switch ($input->operator) {
                        case 'eq':
                            if (!empty($device->{$input->attribute}) and $device->{$input->attribute} == $input->value) {
                                echo "hit on " . $device->{$input->attribute} . " eq " . $input->value . " for " . $condition->name . "\n";
                                print_r($condition->outputs);
                                $hit++;
                            }
                        break;

                        case 'ne':
                            if (empty($device->{$input->attribute}) or $device->{$input->attribute} != $input->value) {
                                echo "hit on " . $device->{$input->attribute} . " ne " . $input->value . " for " . $condition->name . "\n";
                                $hit++;
                            }
                        break;

                        case 'gt':
                            if (!empty($device->{$input->attribute}) and $device->{$input->attribute} > $input->value) {
                                echo "hit on " . $device->{$input->attribute} . " gt " . $input->value . " for " . $condition->name . "\n";
                                $hit++;
                            }
                        break;

                        case 'ge':
                            if (!empty($device->{$input->attribute}) and $device->{$input->attribute} >= $input->value) {
                                echo "hit on " . $device->{$input->attribute} . " ge " . $input->value . " for " . $condition->name . "\n";
                                $hit++;
                            }
                        break;

                        case 'lt':
                            if (!empty($device->{$input->attribute}) and $device->{$input->attribute} < $input->value) {
                                echo "hit on " . $device->{$input->attribute} . " lt " . $input->value . " for " . $condition->name . "\n";
                                $hit++;
                            }
                        break;

                        case 'le':
                            if (!empty($device->{$input->attribute}) and $device->{$input->attribute} <= $input->value) {
                                echo "hit on " . $device->{$input->attribute} . " le" . $input->value . " for " . $condition->name . "\n";
                                $hit++;
                            }
                        break;

                        case 'li':
                            if (!empty($device->{$input->attribute}) and stripos($device->{$input->attribute}, $input->value) !== false) {
                                echo "hit on " . $device->{$input->attribute} . " li " . $input->value . " for " . $condition->name . "\n";
                                $hit++;
                            }
                        break;

                        case 'nl':
                            if (!empty($device->{$input->attribute}) and stripos($device->{$input->attribute}, $input->value) === false) {
                                echo "hit on " . $device->{$input->attribute} . " nl " . $input->value . " for " . $condition->name . "\n";
                                $hit++;
                            }
                        break;

                        case 'in':
                            $values = explode(',', $input->value);
                            if (!empty($device->{$input->attribute}) and in_array($device->{$input->attribute}, $values)) {
                                echo "hit on " . $device->{$input->attribute} . " in " . $input->value . " for " . $condition->name . "\n";
                                $hit++;
                            }
                        break;

                        case 'ni':
                            $values = explode(',', $input->value);
                            if (!empty($device->{$input->attribute}) and !in_array($device->{$input->attribute}, $values)) {
                                echo "hit on " . $device->{$input->attribute} . " ni " . $input->value . " for " . $condition->name . "\n";
                                $hit++;
                            }
                        break;

                        case 'st':
                            if (!empty($device->{$input->attribute}) and stripos($device->{$input->attribute},$input->value) == 0) {
                                echo "hit on " . $device->{$input->attribute} . " st " . $input->value . " for " . $condition->name . "\n";
                                $hit++;
                            }
                        break;
                        
                        default:
                            if (!empty($device->{$input->attribute}) and $device->{$input->attribute} == $input->value) {
                                echo "hit on default\n";
                                $hit++;
                            }
                        break;
                    }
                } else {
                    if (!empty($input->table) and !empty($device_sub[$table])) {
                        switch ($input->operator) {
                            case 'eq':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!empty($dsub->{$input->attribute}) and $dsub->{$input->attribute} == $input->value) {
                                        echo "hit on " . $dsub->{$input->attribute} . " eq " . $input->value . " for " . $condition->name . "\n";
                                        print_r($condition->outputs);
                                        $hit++;
                                    }
                                }
                            break;

                            case 'ne':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (empty($dsub->{$input->attribute}) or $dsub->{$input->attribute} != $input->value) {
                                        echo "hit on " . $dsub->{$input->attribute} . " ne " . $input->value . " for " . $condition->name . "\n";
                                        $hit++;
                                    }
                                }
                            break;

                            case 'gt':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!empty($dsub->{$input->attribute}) and $dsub->{$input->attribute} > $input->value) {
                                        echo "hit on " . $dsub->{$input->attribute} . " gt " . $input->value . " for " . $condition->name . "\n";
                                        $hit++;
                                    }
                                }
                            break;

                            case 'ge':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!empty($dsub->{$input->attribute}) and $dsub->{$input->attribute} >= $input->value) {
                                        echo "hit on " . $dsub->{$input->attribute} . " ge " . $input->value . " for " . $condition->name . "\n";
                                        $hit++;
                                    }
                                }
                            break;

                            case 'lt':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!empty($dsub->{$input->attribute}) and $dsub->{$input->attribute} < $input->value) {
                                        echo "hit on " . $dsub->{$input->attribute} . " lt " . $input->value . " for " . $condition->name . "\n";
                                        $hit++;
                                    }
                                }
                            break;

                            case 'le':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!empty($dsub->{$input->attribute}) and $dsub->{$input->attribute} <= $input->value) {
                                        echo "hit on " . $dsub->{$input->attribute} . " le" . $input->value . " for " . $condition->name . "\n";
                                        $hit++;
                                    }
                                }
                            break;

                            case 'li':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!empty($dsub->{$input->attribute}) and stripos($dsub->{$input->attribute}, $input->value) !== false) {
                                        echo "hit on " . $dsub->{$input->attribute} . " li " . $input->value . " for " . $condition->name . "\n";
                                        $hit++;
                                    }
                                }
                            break;

                            case 'nl':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!empty($dsub->{$input->attribute}) and stripos($dsub->{$input->attribute}, $input->value) === false) {
                                        echo "hit on " . $dsub->{$input->attribute} . " nl " . $input->value . " for " . $condition->name . "\n";
                                        $hit++;
                                    }
                                }
                            break;

                            case 'in':
                                $values = explode(',', $input->value);
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!empty($dsub->{$input->attribute}) and in_array($dsub->{$input->attribute}, $values)) {
                                        echo "hit on " . $dsub->{$input->attribute} . " in " . $input->value . " for " . $condition->name . "\n";
                                        $hit++;
                                    }
                                }
                            break;

                            case 'ni':
                                $values = explode(',', $input->value);
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!empty($dsub->{$input->attribute}) and !in_array($dsub->{$input->attribute}, $values)) {
                                        echo "hit on " . $dsub->{$input->attribute} . " ni " . $input->value . " for " . $condition->name . "\n";
                                        $hit++;
                                    }
                                }
                            break;

                            case 'st':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!empty($dsub->{$input->attribute}) and stripos($dsub->{$input->attribute},$input->value) == 0) {
                                        echo "hit on " . $dsub->{$input->attribute} . " st " . $input->value . " for " . $condition->name . "\n";
                                        $hit++;
                                    }
                                }
                            break;
                            
                            default:
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (!empty($dsub->{$input->attribute}) and $dsub->{$input->attribute} == $input->value) {
                                        echo "hit on default\n";
                                        $hit++;
                                    }
                                }
                            break;
                        }
                    }
                }
                if ($hit === $input_count) {
                    foreach ($condition->outputs as $output) {
                        switch ($output->value_type) {
                            case 'string':
                                $device->{$output->attribute} = (string)$output->value;
                            break;
                            
                            case 'integer':
                                $device->{$output->attribute} = intval($output->value);
                            break;
                            
                            case 'timestamp':
                                if ($output->value == '') {
                                    $device->{$output->attribute} = $this->config->config['timestamp'];
                                } else {
                                    $device->{$output->attribute} = intval($output->value);
                                }
                            break;
                            
                            default:
                                $device->{$output->attribute} = (string)$output->value;
                            break;
                        }
                        $device->{$output->attribute} = $output->value;
                    }
                }
            }
        }
        $device->last_seen_by = 'conditions';
        $CI->m_devices->update($device);
    }
}
