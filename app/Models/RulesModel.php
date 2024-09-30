<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class RulesModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('rules');
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
    public function create($data = null): ?int
    {
        if (empty($data)) {
            return null;
        }
        if (is_array($data->inputs) or is_object($data->inputs)) {
            $new_inputs = array();
            foreach ($data->inputs as $input) {
                $item = new \stdClass();
                foreach ($input as $key => $value) {
                    $item->{$key} = $value;
                }
                $new_inputs[] = $item;
            }
            $data->inputs = json_encode($new_inputs);
        }

        if (is_array($data->outputs) or is_object($data->outputs)) {
            $new_outputs = array();
            foreach ($data->outputs as $output) {
                $item = new \stdClass();
                foreach ($output as $key => $value) {
                    $item->{$key} = $value;
                }
                $new_outputs[] = $item;
            }
            $data->outputs = json_encode($new_outputs);
        }
        $data = $this->createFieldData('rules', $data);
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
     * [execute description]
     * @param  [type] $parameters MUST contain either a device ID or a device object, SHOULD contain an action, default is to update, SHOULD contain a discovery ID for logging
     * @return [type]             [description]
     */
    public function execute(object $device = null, int $discovery_id = 0, string $action = 'update', int $id = 0)
    {
        $item_start = microtime(true);

        if (empty($id) && empty($device)) {
            log_message('error', 'RulesExecute called, but no device object or id passed.');
            return;
        }

        $instance = & get_instance();

        helper('mac_model');
        helper('macaddress');
        helper('snmp_model');
        // helper('snmp_oid_helper');
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();

        $log = new \stdClass();
        $log->message = 'Running rules::execute function.';
        $log->severity = 7;
        $log->command_status = 'notice';
        $log->file = 'RulesModel';
        $log->function = 'execute';
        $log->command = 'Device Update';

        $device_sub = array();
        if (!empty($device)) {
            $device->where = 'supplied';
            $log->command_output = json_encode($device);
            $log->command = 'Device Input ';
        }
        $log->command .= "($action).";

        // If we also have a $device AND it's IP is populated, save and use that as we're likley incoming from discovery_helper with no audit result
        if (!empty($device->ip)) {
            $ip = $device->ip;
        }

        if (!empty($id)) {
            // Get our device
            $log->command_output = "Device ID supplied: {$id}";
            $log->command = 'Device ID Input ';
            $sql = 'SELECT * FROM `devices` WHERE id = ?';
            $result = $this->db->query($sql, [$id])->getResult();
            if (!empty($result[0])) {
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
                $device->discovery_id = '';
                if (empty($ip)) {
                    $ip = $device->ip;
                }
            } else {
                log_message('error', "Could not retrieve data from devices table for ID: $id. Not running Rules function.");
                $log->severity = 4;
                $log->command_status = 'fail';
                $log->message = "Could not retrieve data from devices table for ID: $id. Not running Rules function.";
                $discoveryLogModel->create($log);
                return $device;
            }
            // Get the first MAC Address because there is no mac stored in 'devices'
            $sql = "SELECT `mac` FROM `network` WHERE device_id = ? and current = 'y' and `mac` != '' order by `mac` limit 1";
            $result = $this->db->query($sql, [$id])->getResult();
            if (!empty($result[0])) {
                $device->mac_address = $result[0]->mac;
            }
        }

        // Log down here because we may not have been passed a $device
        $log->discovery_id = (!empty($discovery_id)) ? $discovery_id : '';
        if (empty($log->discovery_id) and !empty($device->discovery_id)) {
            $log->discovery_id = $device->discovery_id;
        }
        $log->device_id = (!empty($device->id)) ? intval($device->id) : '';
        if (!empty($ip)) {
            $log->ip = ip_address_from_db($ip);
        } elseif (!empty($device->ip)) {
            $log->ip = ip_address_from_db($device->ip);
        } else {
            $log->ip = '';
        }
        $discoveryLogModel->create($log);

        $id = (!empty($device->id)) ? $device->id : '';
        // Discovery ID for logging
        if (empty($discovery_id)) {
            if (!empty($device->discovery_id)) {
                $discovery_id = $device->discovery_id;
            }
        }

        // NOTE - don't set the id or last_seen_by here as we test if empty after rules
        //        have been run and only update if not empty (after adding id and last_seen_by).
        $newdevice = new \stdClass();

        // Details based on SNMP OID
        if (!empty($device->snmp_oid)) {
            $log_start = microtime(true);
            $newdevice = get_details_from_oid($device->snmp_oid);
            if (!empty($newdevice->type) or !empty($newdevice->model)) {
                $temp = empty($newdevice->model) ? $newdevice->type : $newdevice->model;
                $log->message = "Hit on \$device->snmp_oid {$device->snmp_oid} eq {$device->snmp_oid}";
                $log->command = 'Rules Match - SNMP OID for  ' . $temp;
                $log->command_output = json_encode($newdevice);
                $log->command_time_to_execute = (microtime(true) - $log_start);
                $discoveryLogModel->create($log);
                foreach ($newdevice as $key => $value) {
                    $device->{$key} = $value;
                }
            }
        }

        // Manufacturer based on MAC Address
        if (!empty($device->mac_address) and empty($device->manufacturer)) {
            $log_start = microtime(true);
            $newdevice->manufacturer = get_manufacturer_from_mac($device->mac_address);
            if (!empty($newdevice->manufacturer)) {
                $log->message = "Hit on \$device->mac_address {$device->mac_address} st " . substr(strtolower($device->mac_address), 0, 8);
                $log->command = 'Rules Match - Mac Address for ' . $newdevice->manufacturer;
                $log->command_output = json_encode($newdevice);
                $log->command_time_to_execute = (microtime(true) - $log_start);
                $discoveryLogModel->create($log);
                $device->manufacturer = $newdevice->manufacturer;
            }
        }

        // Manufacturer based on SNMP Enterprise ID
        // if (!empty($device->snmp_enterprise_id) && empty($device->manufacturer)) {
        //     $log_start = microtime(true);
        //     $newdevice->manufacturer = get_manufacturer_from_oid($device->snmp_enterprise_id);
        //     if (!empty($newdevice->manufacturer)) {
        //         $log->message = 'Hit on $device->snmp_enterprise_id ' . $device->snmp_enterprise_id . ' eq ' . $device->snmp_enterprise_id;
        //         $log->command = 'Rules Match - SNMP Enterprise Number for  ' . $newdevice->manufacturer;
        //         $log->command_output = json_encode($newdevice);
        //         $log->command_time_to_execute = (microtime(true) - $log_start);
        //         $discoveryLogModel->create($log);
        //         $device->manufacturer = $newdevice->manufacturer;
        //     }
        // }

        // Mac Description based on Manufacturer Code (derived from Serial)
        if (!empty($device->manufacturer_code)) {
            $log_start = microtime(true);
            $newdevice->description = get_description_from_manufacturer_code($device->manufacturer_code);
            if (!empty($newdevice->description)) {
                $log->message .= " Hit on \$device->manufacturer_code " . $device->manufacturer_code . " eq " . $device->manufacturer_code;
                $log->command = 'Rules Match - Mac Model into description';
                $log->command_output = json_encode($newdevice->description);
                $log->command_time_to_execute = (microtime(true) - $log_start);
                $discoveryLogModel->create($log);
                $device->description = $newdevice->description;
            }
        }

        // TODO - Orgs
        $sql = "SELECT * FROM `rules` ORDER BY weight ASC, id";
        $rules = $this->db->query($sql)->getResult();

        $other_tables = array();
        foreach ($rules as $rule) {
            try {
                $rule->inputs = json_decode($rule->inputs, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
            try {
                $rule->outputs = json_decode($rule->outputs, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
            if (!empty($rule->inputs)) {
                foreach ($rule->inputs as $input) {
                    if (!$this->db->tableExists($input->table)) {
                        $l = new \stdClass();
                        $l->command_status = 'error';
                        $l->discovery_id = $log->discovery_id;
                        $l->ip = $log->ip;
                        $l->message = 'Rule ' . $rule->id . ' specified a table that does not exist: ' . $input->table . '.';
                        $l->command = json_encode($rule);
                        $l->command_output = '';
                        $discoveryLogModel->create($l);
                        continue;
                    }
                    if ($input->table !== 'devices' and !in_array($input->table, $other_tables)) {
                        $other_tables[] = $input->table;
                    }
                }
            }
        }

        foreach ($other_tables as $table) {
            $sql = "SELECT * FROM `{$table}` WHERE device_id = ? AND current = 'y'";
            $result = $this->db->query($sql, [$id])->getResult();
            $device_sub[$table] = $result;
        }
        unset($other_tables);

        // Special case the MAC as we might have it in the device entry, but not network table yet
        if (!empty($device->mac_address) and empty($device_sub['network'])) {
            $item = new \stdClass();
            $item->mac = $device->mac_address;
            $device_sub['network'] = array($item);
        }

        foreach ($rules as $rule) {
            if (is_array($rule->inputs)) {
                $input_count = count($rule->inputs);
            } else {
                // Log an error, but continue
                $l = new \stdClass();
                $l->command_status = 'error';
                $l->discovery_id = $log->discovery_id;
                $l->ip = $log->ip;
                $l->message = 'Rule ' . $rule->id . ' inputs is not an array.';
                $l->command = $rule->inputs;
                $l->command_output = '';
                $discoveryLogModel->create($l);
                continue;
            }
            $hit = 0;
            foreach ($rule->inputs as $input) {
                if ($input->table === 'devices') {
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
                            if (!empty($device->{$input->attribute}) and stripos((string)$device->{$input->attribute}, $input->value) === 0) {
                                $log->message .= " Hit on $input->attribute " . $device->{$input->attribute} . " st " . $input->value;
                                $hit++;
                            }
                            break;

                        case 're':
                            if (isset($device->{$input->attribute}) and preg_match($input->value, $device->{$input->attribute})) {
                                $log->message .= " Hit on $input->attribute " . $device->{$input->attribute} . " re " . $input->value;
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
                                    if (stripos((string)$dsub->{$input->attribute}, $input->value) === 0) {
                                        $log->message .= " Hit on " . $dsub->{$input->attribute} . " st " . $input->value;
                                        $hit++;
                                        break;
                                    }
                                }
                                break;

                            case 're':
                                foreach ($device_sub[$input->table] as $dsub) {
                                    if (preg_match($input->value, (string)$dsub->{$input->attribute})) {
                                        $log->message .= " Hit on " . $dsub->{$input->attribute} . " re " . $input->value;
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
                    $attributes = new \stdClass();
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
                                    $newdevice->{$output->attribute} = $instance->config->timestamp;
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
                    $log->message = trim((string)$log->message);
                    $log->command = 'Rules Match - ' . $rule->name . ', ID: ' . $rule->id;
                    $log->command_output = json_encode($attributes);
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    $discoveryLogModel->create($log);
                }
            }
            $log->message = '';
        }
        unset($rules);

        $log->message = 'Completed rules::execute function.';
        $log->command = '';
        $log->command_output = '';
        $log->command_status = 'notice';
        $discoveryLogModel->create($log);

        if (count(get_object_vars($newdevice)) > 0) {
            $newdevice->id = @$device->id;
            if ($action == 'update') {
                $newdevice->last_seen_by = 'rules';
                $devicesModel = new \App\Models\DevicesModel();
                $devicesModel->update($newdevice->id, $newdevice);
                return false;
            } else {
                return $device;
            }
        } else {
            if ($action == 'update') {
                return false;
            } else {
                return $device;
            }
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
    public function listUser($where = array(), $orgs = array()): array
    {
        if (empty($orgs)) {
            $instance = & get_instance();
            $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
            $orgs = array_unique(array_merge($orgs, $instance->orgsModel->getUserAscendants($instance->user->orgs, $instance->orgs)));
            $orgs[] = 1;
            $orgs = array_unique($orgs);
        }

        $properties = array();
        $properties[] = 'rules.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'rules.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'rules');
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
        return format_data($query->getResult(), 'rules');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('rules')) {
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
        $data = $this->updateFieldData('rules', $data);
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

        $collection = 'rules';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $tables = array('bios', 'credential', 'devices', 'disk', 'dns', 'field', 'file', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
        $columns = array();
        foreach ($tables as $table) {
            $fields = $this->db->getFieldNames($table);
            $myfields = array();
            foreach ($fields as $field) {
                if ($field !== 'id' && $field !== 'current' && $field !== 'device_id' && $field !== 'first_seen' && $field !== 'last_seen') {
                    $myfields[] = $field;
                }
            }
            sort($myfields);
            $columns[$table] = $myfields;
        }
        $dictionary->attributes->tables = $tables;
        $dictionary->attributes->columns = $columns;

        $dictionary->sentence = 'Think \'if this, then that\' for your discovered devices.';

        $dictionary->about = '<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>';

        $dictionary->notes = '<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>';

        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->weight = 'A lower number means it will be applied before other rules.';
        $dictionary->columns->inputs = 'A JSON object containing an array of attributes to match (normal weight is 100).';
        $dictionary->columns->outputs = 'A JSON object containing an array of attributes to change if the match occurs.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
