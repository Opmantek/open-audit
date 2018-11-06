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
* @version   2.3.0
* @link      http://www.open-audit.org
 */
class M_collection extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('log');
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
        $this->load->library('encrypt');
    }

    public function reset($collection = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);

        if ($collection === '') {
            log_error('ERR-0010', 'm_collection::collection (no collection)');
            $this->log->summary = 'finish';
            stdlog($this->log);
            return false;
        }

        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = false;

        $sql = "SELECT count(*) AS `count` FROM `$collection`";
        $query = $this->db->query($sql);
        $result = @$query->result();
        if ($this->db->_error_message()) {
            $this->log->severity = 3;
            $this->log->status = 'fail';
            $this->log->summary = 'Query fail';
            $db_error = @$this->db->_error_message();
            $error = '';
            if (!empty($db_error)) {
                $error = 'Error: ' . $db_error . ', ';
            }
            $this->log->detail = $error . 'Query: ' . $this->db->last_query();
            stdlog($this->log);
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function'] . ")"), $db_error);
            $this->db->db_debug = $temp_debug;
            $this->log->summary = 'finish';
            stdlog($this->log);
            return false;
        }

        #$count = count($result);
        $count = intval($result[0]->count);
        #if ($count === 0) {
        if ($count !== 0) {
            $this->log->severity = 3;
            $this->log->status = 'fail';
            $this->log->summary = 'Table not empty';
            $this->log->detail = 'Cannot run reset on ' . $collection . ' as the table still has data.';
            stdlog($this->log);
            $this->db->db_debug = $temp_debug;

            $this->log->severity = 7;
            $this->log->status = '';
            $this->log->detail = '';
            $this->log->summary = 'finish';
            stdlog($this->log);
            return false;
        }

        $sql = "ALTER TABLE `$collection` AUTO_INCREMENT = 1";
        $query = $this->db->query($sql);
        if ($this->db->_error_message()) {
            $log->severity = 3;
            $log->status = 'failure';
            $log->summary = $this->db->last_query();
            $log->detail = 'Query fail - ' . @$this->db->_error_message();
            stdlog($log);
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function'] . ")"), $db_error);
            $this->db->db_debug = $temp_debug;
            return false;
        }

        $sql = "OPTIMIZE TABLE `$collection`";
        $query = $this->db->query($sql);
        if ($this->db->_error_message()) {
            $log->severity = 3;
            $log->status = 'failure';
            $log->summary = $this->db->last_query();
            $log->detail = 'Query fail - ' . @$this->db->_error_message();
            stdlog($log);
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function'] . ")"), $db_error);
            $this->db->db_debug = $temp_debug;
            return false;
        }

        $this->db->db_debug = $temp_debug;
        $log->severity = 7;
        $log->detail = $collection . ' table has been reset successfully';
        stdlog($log);
        return true;
    }

    public function collection($collection = '')
    {
        $CI = & get_instance();

        if ($collection === '') {
            log_error('ERR-0010', 'm_collection::collection (no collection)');
            return false;
        }

        // get a list of Orgs and Locations so we can populate the names
        $sql = "SELECT id, name FROM orgs";
        $result = $this->run_sql($sql, array());
        $orgs = $result;

        // locations
        $sql = "SELECT id, name FROM locations";
        $result = $this->run_sql($sql, array());
        $locations = $result;

        $sql = $this->collection_sql($collection, 'sql');
        $result = $this->run_sql($sql, array());

        # Add the Org name into every row that contains the orgs_id attribute
        if (!empty($result) and !empty($orgs)) {
            for ($i=0; $i < count($result); $i++) {
                foreach ($orgs as $org) {
                    if (!empty($result[$i]->org_id) and $org->id == $result[$i]->org_id) {
                        $result[$i]->org_name = $org->name;
                    }
                }
            }
        }

        if ($collection == 'connections') {
            if ($result !== false) {
                for ($i=0; $i < count($result); $i++) {
                    $result[$i]->location_name_a = '';
                    $result[$i]->location_name_b = '';
                    foreach ($locations as $location) {
                        if ($location->id == $result[$i]->location_id_a) {
                            $result[$i]->location_name_a = $location->name;
                        }
                        if ($location->id == $result[$i]->location_id_b) {
                            $result[$i]->location_name_b = $location->name;
                        }
                    }
                }
            }
        }

        if ($collection == 'configuration' and $CI->response->meta->collection == 'configuration' and count($CI->response->meta->filter) == 0) {
            $item = new stdClass;
            $item->id = 888888;
            $item->name = 'web_internal_version';
            $item->value = $this->config->config['web_internal_version'];
            $item->editable = 'n';
            $item->edited_by = '';
            $item->edited_date = '';
            $item->description = 'The internal numerical version of the Open-AudIT files.';
            $result[] = $item;

            $this->load->helper('network');
            $item = new stdClass;
            $item->id = 888889;
            $item->name = 'server_ip';
            $item->value = server_ip();
            $item->editable = 'n';
            $item->edited_by = '';
            $item->edited_date = '';
            $item->description = 'The IP addresses on this server.';
            $result[] = $item;
            unset($item);

            $item = new stdClass;
            $item->id = 888890;
            $item->name = 'is_ssl';
            $item->value = is_ssl();
            $item->editable = 'n';
            $item->edited_by = '';
            $item->edited_date = '';
            $item->description = 'Are we using SSL.';
            $result[] = $item;
            unset($item);
        }

        if ($collection == 'credentials' and !empty($result)) {
            for ($i=0; $i < count($result); $i++) {
                if (!empty($result[$i]->credentials)) {
                    $result[$i]->credentials = json_decode($CI->encrypt->decode($result[$i]->credentials));
                    foreach ($result[$i]->credentials as $key => $value) {
                        $result[$i]->{'credentials.'.$key} = $value;
                    }
                }
            }
        }

        if ($collection == 'discoveries' and !empty($result)) {
            for ($i=0; $i < count($result); $i++) {
                // $sql = "SELECT * FROM discovery_log WHERE `discovery_id` = ? AND `function` = 'logs' AND (`command_status` LIKE '% of %' OR `command_status` LIKE 'stopped%') ORDER BY `timestamp` DESC LIMIT 1";
                // $data = array(intval($result[$i]->id));
                // $data_result = $this->run_sql($sql, $data);
                // if (!empty($data_result)) {
                //     $result[$i]->discovered = $data_result[0]->command_status;
                //     if($data_result[0]->command_status == 'stopped' ){
                //         $result[$i]->discovered = '';
                //         $result[$i]->status = 'stopped';
                //     }else{
                //         $temp = explode(' ', $result[$i]->discovered);
                //         $temp[0] = str_replace('(', '', $temp[0]);
                //         $temp[2] = str_replace(')', '', $temp[2]);
                //         if ($temp[0] == $temp[2]) {
                //             if (strtolower($result[$i]->complete) != 'y') {
                //                 $result[$i]->status = 'failed';
                //             } else {
                //                 $result[$i]->status = 'complete';
                //             }
                //         } else {
                //                 $result[$i]->status = 'in progress';
                //         }
                //     }
                // } else {
                //     $result[$i]->discovered = '';
                //     $result[$i]->status = 'complete';
                // }

                if (!empty($result[$i]->other)) {
                    $result[$i]->other = json_decode($result[$i]->other);
                    foreach ($result[$i]->other as $key => $value) {
                        $result[$i]->{'other.'.$key} = $value;
                    }
                }
            }
        }

        if ($collection == 'licenses' and !empty($result)) {
            foreach ($result as $item) {
                if ($item->org_descendants == 'n') {
                    $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id = ? AND software.name LIKE ?";
                    $data = array(intval($item->org_id), (string)$item->match_string);
                    $data_result = $this->run_sql($sql, $data);
                    if (!empty($data_result[0]->count)) {
                        $item->used_count = $data_result[0]->count;
                    }
                    unset($sql, $data, $data_result);
                } else {
                    $children = $CI->m_orgs->get_children($item->org_id);
                    $children[] = $item->org_id;
                    $children = implode(',', $children);
                    $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id IN (?) AND software.name LIKE ?";
                    $data = array((string)$children, (string)$item->match_string);
                    $data_result = $this->run_sql($sql, $data);
                    if (!empty($data_result[0]->count)) {
                        $item->used_count = $data_result[0]->count;
                    }
                    unset($sql, $data, $data_result);
                }
            }
        }

        if ($collection == 'tasks') {
            if ($result !== false) {
                for ($i=0; $i < count($result); $i++) {

                    if (!empty($result[$i]->options)) {
                        $result[$i]->options = json_decode($result[$i]->options);
                        foreach ($result[$i]->options as $key => $value) {
                            $result[$i]->{'options.'.$key} = $value;
                        }
                    }

                    if ($result[$i]->type == 'discoveries' or $result[$i]->type == 'queries' or $result[$i]->type == 'summaries') {
                        $sql = "SELECT name AS `name` FROM `" . $result[$i]->type . "` WHERE id = ?";
                        $data = array($result[$i]->sub_resource_id);
                        $data_result = $this->run_sql($sql, $data);
                        if (!empty($data_result[0]->name)) {
                            $result[$i]->sub_resource_name = $data_result[0]->name;
                        } else {
                            $result[$i]->sub_resource_name = '';
                        }
                    } else if ($result[$i]->type == 'reports') {
                        $result[$i]->sub_resource_name = "";
                        // switch ($result[$i]->sub_resource_id) {
                        //     case '10000':
                        //         $result[$i]->sub_resource_name = "Devices Discovered Today";
                        //         break;

                        //     case '10001':
                        //         $result[$i]->sub_resource_name = "Devices Discovered Yesterday";
                        //         break;

                        //     case '10002':
                        //         $result[$i]->sub_resource_name = "Devices Discovered in the Last 7 Days";
                        //         break;

                        //     case '10003':
                        //         $result[$i]->sub_resource_name = "Devices Discovered in the Last 30 Days";
                        //         break;

                        //     case '20000':
                        //         $result[$i]->sub_resource_name = "Software Discovered Today";
                        //         break;

                        //     case '20001':
                        //         $result[$i]->sub_resource_name = "Software Discovered Yesterday";
                        //         break;

                        //     case '20002':
                        //         $result[$i]->sub_resource_name = "Software Discovered in the Last 7 Days";
                        //         break;

                        //     case '20003':
                        //         $result[$i]->sub_resource_name = "Software Discovered in the Last 30 Days";
                        //         break;

                        //     case '30000':
                        //         $result[$i]->sub_resource_name = "Devices Not Seen for 7 Days";
                        //         break;

                        //     case '30001':
                        //         $result[$i]->sub_resource_name = "Devices Not Seen for 30 Days";
                        //         break;

                        //     case '30002':
                        //         $result[$i]->sub_resource_name = "Devices Not Seen for 90 Days";
                        //         break;

                        //     case '30003':
                        //         $result[$i]->sub_resource_name = "Devices Not Seen for 180 Days";
                        //         break;

                        //     default:
                        //         $result[$i]->sub_resource_name = "";
                        //         break;
                        // }
                    } else {
                        $result[$i]->sub_resource_name = '';
                    }
                }
            }
        }

        $result = $this->format_data($result, $collection);
        return ($result);
    }

    public function collection_total($collection)
    {
        $CI = & get_instance();

        if (empty($collection)) {
            $collection = @$CI->response->meta->collection;
        }
        if (empty($collection)) {
            log_error('ERR-0010', 'm_collection::collection_total No collection received.');
            return false;
        }

        if ($collection == 'devices') {
            $collection == 'system';
        }

        $total = 0;

        if ($collection != 'database') {
            if ($collection == 'orgs') {
                # Orgs don't have an org_id, the have an id
                $sql = "SELECT COUNT(*) as `count` FROM `" . $collection . "` WHERE id IN (" . $CI->user->org_list . ")";
            } else if ($collection == 'logs') {
                # logs are special as we have 2x different types
                $type = 'system';
                if (!empty($CI->response->meta->filter)) {
                    foreach ($CI->response->meta->filter as $filter) {
                        if ($filter->name == 'logs.type') {
                            $type = $filter->value;
                        }
                    }
                }
                if ($type != 'system' and $type != 'access') {
                    $type = 'system';
                }
                $sql = "SELECT count(*) AS `count` FROM `logs` WHERE `logs`.`type` = '" . $type . "'";
            } else if ($this->db->field_exists('org_id', $collection)) {
                # Anything else with an org_id
                $sql = "SELECT COUNT(*) as `count` FROM `" . $collection . "` WHERE org_id IN (" . $CI->user->org_list . ")";
            } else {
                # Anythng left that has no org_id
                $sql = "SELECT COUNT(*) as `count` FROM `" . $collection . "`";
            }
            $sql = '/* m_collection::collection_total */ ' . $sql;
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $result = $query->result();
            if (!empty($result[0]->count)) {
                $total = intval($result[0]->count);
            }
        } else {
            $tables = $this->db->list_tables();
            $total = intval(count($tables));
        }
        return $total;
    }

    public function create($data = null, $collection = '')
    {
        $CI = & get_instance();

        if (empty($collection)) {
            $collection = @$CI->response->meta->collection;
        }
        if (empty($collection)) {
            log_error('ERR-0010', 'm_collection::create No collection received.');
            return false;
        }

        if (empty($data)) {
            $data = @$CI->response->meta->received_data->attributes;
        }
        if (empty($data)) {
            log_error('ERR-0010', 'm_collection::create (' . @$collection . ') No attributes received.');
            return false;
        }

        $db_table = $collection;

        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data (' . $collection . ')';
        stdlog($this->log);

        if ($collection === 'clouds') {
            $data->credentials = (string)$this->encrypt->encode(json_encode($data->credentials));
        }

        if ($collection === 'credentials') {
            $data->credentials = (string)$this->encrypt->encode(json_encode($data->credentials));
        }

        if ($collection === 'dashboards') {
            if (empty($CI->response->meta->received_data->attributes->options)) {
                $options = new stdClass();
                $options->widget_count = 0;
                $options->widgets = new stdClass();
            } else {
                $options = $CI->response->meta->received_data->attributes->options;
            }
            $my_options = new stdClass();
            $my_options->layout = '3x2';
            if (!empty($options->widget_count)) {
                $my_options->widget_count = intval($options->widget_count);
            } else {
                $my_options->widget_count = 0;
            }
            $my_options->widgets = array();
            for ($i=1; $i <= $my_options->widget_count; $i++) {
                $widget = new stdClass();
                foreach ($options->widgets->$i as $key => $value) {
                    $widget->{$key} = $value;
                }
                $my_options->widgets[] = $widget;
            }
            $data->options = json_encode($my_options);
        }

        if ($collection === 'discoveries') {
            if(substr($data->network_address, -1) !== '/'){
                $data->network_address = $data->network_address.'/';
            }

            if ($data->type == 'subnet') {
                if (!preg_match('/^[\d,\.,\/,-]*$/', $data->other->subnet)) {
                    log_error('ERR-0024', 'm_collection::create (discoveries)', 'Invalid field data supplied for subnet');
                    $this->session->set_flashdata('error', 'Discovery could not be created - invalid Subnet supplied.');
                    $data->other->subnet = '';
                    if ($CI->response->meta->format == 'screen') {
                        redirect('/discoveries');
                    } else {
                        output($CI->response);
                        exit();
                    }
                }
                if (empty($data->other->subnet)) {
                    log_error('ERR-0024', 'm_collection::create (discoveries)', 'Missing field: subnet');
                   // $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be created - no Subnet supplied.');
                    #redirect('/discoveries');
                } else {
                    $data->description = 'Subnet - ' . $data->other->subnet;
                }
            } elseif ($data->type == 'active directory') {
                if (empty($data->other->ad_server) or empty($data->other->ad_domain)) {
                    $temp = "Active Directory Domain";
                    if (empty($data->other->ad_server)) {
                        $temp = "Active Directory Server";
                    }
                    log_error('ERR-0024', 'm_collection::create (ad discoveries)');
                    $this->session->set_flashdata('error', 'Object in discoveries could not be created - no ' . $temp . ' supplied.');
                    #redirect('/discoveries');
                } else {
                    $data->description = 'Active Directory - ' . $data->other->ad_domain;
                }
            } else {
                $data->description = '';
            }
            $this->load->model('m_networks');
            $this->load->helper('network');

            if ($data->type == 'subnet' and !empty($data->other->subnet) and stripos($data->other->subnet, '-') === false and filter_var($data->other->subnet, FILTER_VALIDATE_IP) !== false) {
                # We have a single IP - ie 192.168.1.1
                $test = $this->m_networks->check_ip($data->other->subnet);
                if (!$test) {
                    # This IP is not in any existing subnets - insert a /30
                    # TODO - account for Org ID in existing as check_ip returns only true/false, and does not acount for orgs
                    $temp = network_details($data->other->subnet.'/30');
                    $network = new stdClass();
                    $network->name = $temp->network.'/'.$temp->network_slash;
                    $network->network = $temp->network.'/'.$temp->network_slash;
                    $network->org_id = $data->org_id;
                    $network->description = $data->name;
                    $this->m_networks->upsert($network);
                }
            }

            if ($data->type == 'subnet' and !empty($data->other->subnet) and stripos($data->other->subnet, '-') === false and strpos($data->other->subnet, '/') !== false) {
                # We have a regular subnet - ie 192.168.1.0/24
                $temp = network_details($data->other->subnet);
                if (!empty($temp->error)) {
                    $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be created - invalid subnet attribute supplied.');
                    log_error('ERR-0010', 'm_collections::create (networks) invalid subnet supplied');
                    return;
                }
                $network = new stdClass();
                $network->name = $temp->network.'/'.$temp->network_slash;
                $network->network = $temp->network.'/'.$temp->network_slash;
                $network->org_id = $data->org_id;
                $network->description = $data->name;
                $this->m_networks->upsert($network);
            }

            if ($data->type == 'subnet' and stripos($data->other->subnet, '-') !== false) {
                # We have a range and cannot insert a network
                $warning = 'IP range, instead of subnet supplied. No network entry created.';
                if ($this->config->config['blessed_subnets_use'] != 'n') {
                    $warning .= '<br />Because you are using blessed subnets, please ensure a valid network for this range exists.';
                }
                $this->session->set_flashdata('warning', $warning);
            }
            $data->other = json_encode($data->other);
        }

        if ($collection === 'ldap_servers') {
            if (!empty($data->dn_password)) {
                $data->dn_password = (string)$this->encrypt->encode($data->dn_password);
            }
        }

        if ($collection === 'orgs') {
            if (!empty($data->name)) {
                $data->ad_group = 'open-audit_orgs_' . strtolower(str_replace(' ', '_', $data->name));
            }
        }

        if ($collection === 'rack_devices') {
            $sql = "SELECT name, org_id FROM system WHERE id = " . intval($data->system_id);
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $result = $query->result();
            if (!empty($result)) {
                $data->name = $result[0]->name;
                $data->org_id = $result[0]->org_id;
            }
        }

        if ($collection === 'roles') {
            $data->ad_group = 'open-audit_roles_' . strtolower(str_replace(' ', '_', $data->name));
            if (empty($data->permissions)) {
                # No permissions
                $data->permissions = new stdClass();
                $data->permissions = json_encode($data->permissions);
            } else if (!empty($data->permissions) and gettype($data->permissions) === 'string') {
                # We have a CSV submitted item
                # Replace quotes as it should already be stringified JSON
                $item->permissions = str_replace("'", '"', $item->permissions);
            } else if (!empty($data->permissions) and gettype($data->permissions) === 'object') {
                # We have a submitted form
                # Build up our permissions
                $permissions = new stdClass();
                foreach ($data->permissions as $endpoint => $object) {
                    $permissions->{$endpoint} = '';
                    foreach ($object as $key => $value) {
                        $permissions->{$endpoint} .= $key;
                    }
                }
                $data->permissions = json_encode($permissions);
            }
        }

        if ($collection === 'scripts') {
            if (empty($data->options) and !empty($CI->response->meta->received_data->options)) {
                $data->options = $CI->response->meta->received_data->options;
            }
            $data->options = json_encode($data->options);
        }

        if ($collection === 'tasks') {
            if (empty($data->options) and !empty($CI->response->meta->received_data->options)) {
                $data->options = $CI->response->meta->received_data->options;
            }
            if (!empty($data->options)) {
                if (gettype($data->options) == 'string') {
                    $data->options = str_replace('\"', '"', $data->options);
                    $data->options = my_json_decode($data->options);
                }
                $data->options = json_encode($data->options);
            } else {
                $data->options = '';
            }
            if (!empty($data->minute) and is_array($data->minute)) {
                $data->minute = implode(',', $data->minute);
            }
            if (!empty($data->hour) and is_array($data->hour)) {
                $data->hour = implode(',', $data->hour);
            }
            if (!empty($data->day_of_month) and is_array($data->day_of_month)) {
                $data->day_of_month = implode(',', $data->day_of_month);
            }
            if (!empty($data->month) and is_array($data->month)) {
                $data->month = implode(',', $data->month);
            }
            if (!empty($data->day_of_week) and is_array($data->day_of_week)) {
                $data->day_of_week = implode(',', $data->day_of_week);
            }
            if (empty($data->uuid)) {
                $data->uuid = $this->config->config['uuid'];
            }
        }

        if ($collection === 'users') {
            if (!empty($data->password)) {
                // password - get 256 random bits in hex
                $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
                // password - hash
                $hash = hash("sha256", $salt.(string)$data->password);
                // password - prepend the salt
                $data->password = $salt.$hash;
            }
        }

        $mandatory_fields = $this->mandatory_fields($collection);
        foreach ($mandatory_fields as $mandatory_field) {
            if (!isset($data->{$mandatory_field}) or $data->{$mandatory_field} == '') {
                $this->session->set_flashdata('error', 'Object in ' . $collection . ' could not be created - no ' . $mandatory_field . ' supplied.');
                log_error('ERR-0021', 'm_collection::create (' . $collection . ' ' . $mandatory_field . ')', 'Missing field: ' . $mandatory_field);
                return false;
            }
        }

        $data_array = array();
        $sql = "INSERT INTO `" . $db_table . "` (";
        $sql_data = "";
        $update_fields = $this->update_fields($collection);
        foreach ($data as $key => $value) {
            if (strpos($update_fields, ' '.$key.' ') !== false) {
                $sql .= "`" . $key . "`, ";
                $sql_data .= "?, ";
                $data_array[] = (string)$data->{$key};
            }
        }

        if ($this->db->field_exists('edited_by', $db_table)) {
            $sql .= '`edited_by`, `edited_date`';    // the user.name and timestamp
            $sql_data .= '?, NOW()';                 // the user.name and timestamp
            $data_array[] = $CI->user->full_name;    // the user.name
        }

        $sql .= ") VALUES (" . $sql_data . ")";
        $id = intval($this->run_sql($sql, $data_array));

        if (!empty($id) and $collection == 'locations') {
            # Need to insert default entries for buildings, floors, rooms and rows
            $org_id = 1;
            if (!empty($data->attributes->org_id)) {
                $org_id = intval($data->attributes->org_id);
            }
            $location_id = $id;
            $sql = "INSERT INTO `buildings` VALUES (NULL, 'Default Building', ?, ?, 'The default entry for a building at this location.', '', '', '', ?, NOW())";
            $data_array = array($org_id, $location_id, $CI->user->full_name);
            $building_id = intval($this->run_sql($sql, $data_array));

            $sql = "INSERT INTO `floors` VALUES (NULL, 'Ground Floor', ?, ?, 'The default entry for a floor at this location.', '', '', '', ?, NOW())";
            $data_array = array($org_id, $building_id, $CI->user->full_name);
            $floor_id = intval($this->run_sql($sql, $data_array));

            $sql = "INSERT INTO `rooms` VALUES (NULL, 'Default Room', ?, ?, 'The default entry for a room at this location.', '', '', '', ?, NOW())";
            $data_array = array($org_id, $floor_id, $CI->user->full_name);
            $room_id = intval($this->run_sql($sql, $data_array));

            $sql = "INSERT INTO `rows` VALUES (NULL, 'Default Row', ?, ?, 'The default entry for a row at this location.', '', '', '', ?, NOW())";
            $data_array = array($org_id, $room_id, $CI->user->full_name);
            $this->run_sql($sql, $data_array);
        }

        if (!empty($id)) {
            $CI->session->set_flashdata('success', 'New object in ' . $collection . ' created "' . htmlentities($data->name) . '".');
            return ($id);
        } else {
            # TODO - log a better error
            $CI->session->set_flashdata('failure', 'Failed to create resource (please see detailed logs).');
            log_error('ERR-0023', 'Database error in resource create routine.');
            return false;
        }
        // if ($this->db->_error_message()) {
        //     $this->log_db('ERROR - ' . $this->db->_error_message(), 3);
        //     log_error('ERR-0023', $this->db->_error_message());
        //     return false;
        // } else {
        //     $CI->session->set_flashdata('success', 'New object in ' . $this->response->meta->collection . ' created "' . $data->name . '".');
        // }
    }


    public function update($data = null, $collection = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $CI = & get_instance();

        if (is_null($data)) {
            if (!empty($CI->response->meta->received_data->attributes)) {
                $data = $CI->response->meta->received_data->attributes;
                $data->id = $CI->response->meta->id;
                $collection = $CI->response->meta->collection;
            } else {
                log_error('ERR-0010', 'm_collection::update');
                return false;
            }
        }

        if ($collection === '') {
            log_error('ERR-0010', 'm_collection::update');
            return false;
        } else {
            $db_table = $collection;
        }

        if ($collection === 'credentials') {
            if (!empty($data->credentials)) {
                $received_credentials = new stdClass();
                foreach ($data->credentials as $key => $value) {
                        $received_credentials->$key = $value;
                }
                $select = "SELECT * FROM credentials WHERE id = ?";
                $query = $this->db->query($select, array($data->id));
                $result = $query->result();
                $existing_credentials = @json_decode($this->encrypt->decode($result[0]->credentials));
                $new_credentials = new stdClass();
                if (count($existing_credentials) > 0) {
                    foreach ($existing_credentials as $existing_key => $existing_value) {
                        if (!empty($received_credentials->$existing_key)) {
                            $new_credentials->$existing_key = $received_credentials->$existing_key;
                        } else {
                            $new_credentials->$existing_key = $existing_credentials->$existing_key;
                        }
                    }
                }
                $data->credentials = (string)$this->encrypt->encode(json_encode($new_credentials));
            }
        }

        if ($collection === 'dashboards') {
            if (!empty($data->options)) {
                $select = "SELECT * FROM dashboards WHERE id = ?";
                $query = $this->db->query($select, array($data->id));
                $result = $query->result();
                $existing = new stdClass();
                if (!empty($result[0]->options)) {
                    $existing = json_decode($result[0]->options);
                }
                if (!empty($data->options->layout)) {
                    $existing->layout = $data->options->layout;
                }
                if (!empty($data->options->widgets->position)) {
                    foreach ($data->options->widgets->position as $key => $value) {
                        $widget_position = $key;
                        $widget_id = $value;
                    }
                }
                foreach ($existing->widgets as $widget) {
                    if ($widget->position == $widget_position) {
                        $widget->widget_id = $widget_id;
                    }
                }
                $data->options = (string)json_encode($existing);
            }
        }

        if ($collection === 'discoveries') {

            if(!empty($data->network_address) and substr($data->network_address, -1) !== '/'){
                $data->network_address = $data->network_address.'/';
            }

            if (!empty($data->other)) {
                $received_other = new stdClass();
                foreach ($data->other as $key => $value) {
                        $received_other->$key = $value;
                }

                if (!empty($received_other->subnet) and !preg_match('/^[\d,\.,\/,-]*$/', $received_other->subnet)) {
                    log_error('ERR-0024', 'm_collection::create (discoveries)', 'Invalid field data supplied for subnet');
                    $this->session->set_flashdata('error', 'Discovery could not be created - invalid Subnet supplied.');
                    $data->other->subnet = '';
                    if ($CI->response->meta->format == 'screen') {
                        redirect('/discoveries');
                    } else {
                        output($CI->response);
                        exit();
                    }
                }

                $query = $this->db->query("SELECT * FROM discoveries WHERE id = ?", array($data->id));
                $result = $query->result();
                $existing_other = json_decode($result[0]->other);
                $new_other = new stdClass();
                foreach ($existing_other as $existing_key => $existing_value) {
                    if (!empty($received_other->$existing_key)) {
                        $new_other->$existing_key = $received_other->$existing_key;
                    } else {
                        $new_other->$existing_key = $existing_other->$existing_key;
                    }
                }

                unset($data->other);
                $data->other = (string)json_encode($new_other);
                if (!empty($received_other->subnet)) {
                    $data->description = 'Subnet - ' . $received_other->subnet;
                    if (stripos($received_other->subnet, '-') === false) {
                        $this->load->helper('network');
                        $temp = network_details($received_other->subnet);
                        if (!empty($temp->error) and filter_var($received_other->subnet, FILTER_VALIDATE_IP) === false) {
                            $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be updated - invalid subnet attribute supplied.');
                            log_error('ERR-0010', 'm_collections::create (invalid subnet supplied)');
                            return;
                        }
                    }
                }
                if (!empty($received_other->ad_domain)) {
                    $data->description = 'Active Directory - ' . $received_other->ad_domain;
                }
            }
            if(!empty($data->killed)){
                unset($data->killed);
                $log = new stdClass();
                $log->discovery_id = $data->id;
                $log->system_id = null;
                $log->timestamp = $this->config->config['timestamp'];
                $log->severity = 6;
                $log->function = "logs";
                $log->command_status = "stopped";
                $log->pid = getmypid();
                $log->message = "Discovery process has been manually stopped.";
                discovery_log($log);
            }
        }

        if ($collection === 'ldap_servers') {
            if (!empty($data->dn_password)) {
                $data->dn_password = (string)$CI->encrypt->encode($data->dn_password);
            }
        }

        if ($collection === 'scripts') {
            if (!empty($data->options)) {
                $select = "SELECT * FROM scripts WHERE id = ?";
                $query = $this->db->query($select, array($data->id));
                $result = $query->result();
                $existing = new stdClass();
                if (!empty($result[0]->options)) {
                    $existing = json_decode($result[0]->options);
                }
                foreach ($data->options as $key => $value) {
                    $existing->$key = $value;
                }
                $data->options = (string)json_encode($existing);
            }
        }

        if ($collection === 'tasks') {
            if (!empty($data->options)) {
                $received = new stdClass();
                if (gettype($data->options) === "object" or gettype($data->options) === "array") {
                    foreach ($data->options as $key => $value) {
                            $received->$key = $value;
                    }
                }
                $existing = new stdClass();
                if (!empty($data->id)) {
                    $select = "SELECT * FROM tasks WHERE id = ?";
                    $query = $this->db->query($select, array($data->id));
                    $result = $query->result();
                    if (!empty($result[0]->options)) {
                        $existing = json_decode($result[0]->options);
                    }
                }
                $new = new stdClass();
                foreach ($existing as $existing_key => $existing_value) {
                    if (isset($received->$existing_key)) {
                        $new->$existing_key = $received->$existing_key;
                    } else {
                        $new->$existing_key = $existing->$existing_key;
                    }
                }
                $data->options = (string)json_encode($new);
            }
            if (!empty($data->{'minute[]'}) and is_array($data->{'minute[]'})) {
                $data->minute = implode(',', $data->{'minute[]'});
                unset($data->{'minute[]'});
            }
            if (!empty($data->{'hour[]'}) and is_array($data->{'hour[]'})) {
                $data->hour = implode(',', $data->{'hour[]'});
                unset($data->{'hour[]'});
            }
            if (!empty($data->{'day_of_month[]'}) and is_array($data->{'day_of_month[]'})) {
                $data->day_of_month = implode(',', $data->{'day_of_month[]'});
                unset($data->{'day_of_month[]'});
            }
            if (!empty($data->{'month[]'}) and is_array($data->{'month[]'})) {
                $data->month = implode(',', $data->{'month[]'});
                unset($data->{'month[]'});
            }
            if (!empty($data->{'day_of_week[]'}) and is_array($data->{'day_of_week[]'})) {
                $data->day_of_week = implode(',', $data->{'day_of_week[]'});
                unset($data->{'day_of_week[]'});
            }
        }

        if ($collection === 'users') {
            if (!empty($data->password)) {
                // password - get 256 random bits in hex
                $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
                // password - hash
                $hash = hash("sha256", $salt.(string)$data->password);
                // password - prepend the salt
                $data->password = $salt.$hash;
            }
        }

        $update_fields = $this->update_fields($collection);
        $sql = '';
        $items = array();
        foreach ($data as $key => $value) {
            if (strpos($update_fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    #$sql = "SET `" . $key . "` = '" . str_replace("'", "\'", $value) . "'";
                    $sql = "SET `" . $key . "` = ?";
                    $items[] = $value;
                } else {
                    #$sql .= ", `" . $key . "` = '" . str_replace("'", "\'", $value) . "'";
                    $sql .= ", `" . $key . "` = ?";
                    $items[] = $value;
                }
            }
        }
        if ($this->db->field_exists('edited_by', $db_table)) {
            $sql .= ", `edited_by` = '" . $CI->user->full_name . "'";
        }
        if ($this->db->field_exists('edited_date', $db_table)) {
            $sql .= ", `edited_date` = NOW()";
        }
        $sql = "UPDATE `" . $db_table . "` " . $sql . " WHERE id = " . intval($data->id);
        $test = $this->run_sql($sql, $items);
        return $test;
    }

    public function update_fields($collection = '')
    {
        if (empty($collection)) {
            return('');
        }
        switch ($collection) {
            case "applications":
                return(' name org_id description ');
                break;

            case "agents":
                return(' name org_id description ip status check_minutes user_id uuid options ');
                break;

            case "attributes":
                return(' name org_id resource type value ');
                break;

            case "buildings":
                return(' name org_id location_id description notes tags ');
                break;

            case "clouds":
                return(' name org_id description type credentials ');
                break;

            case "collectors":
                return(' name org_id description ip status check_minutes user_id uuid network_address options ');
                break;

            case "configuration":
                return(' value ');
                break;

            case "connections":
                return(' name org_id description provider service_type product_name service_identifier speed location_id_a location_id_b system_id_a system_id_b line_number_a line_number_b ip_address_external_a ip_address_external_b ip_address_internal_a ip_address_internal_b ');
                break;

            case "credentials":
                return(' name org_id description type credentials ');
                break;

            case "dashboards":
                return(' name org_id description type options sidebar ');
                break;

            case "discoveries":
                return(' name org_id description type devices_assigned_to_org devices_assigned_to_location network_address system_id other discard last_run complete ');
                break;

            case "fields":
                return(' name org_id type values placement group_id ');
                break;

            case "files":
                return(' name org_id description path ');
                break;

            case "floors":
                return(' name org_id building_id description notes tags ');
                break;

            case "groups":
                return(' name org_id description expose sql ');
                break;

            case "ldap_servers":
                return(' name org_id description lang host port secure domain type version base_dn user_dn user_membership_attribute use_roles dn_account dn_password refresh ');
                break;

            case "licenses":
                return(' name org_id description org_descendants purchase_count match_string ');
                break;

            case "locations":
                return(' name org_id type description room suite level address suburb city district region area state postcode country tags phone picture external_ident options latitude longitude geo ');
                break;

            case "networks":
                return(' name org_id description type network external_ident options ');
                break;

            case "orgs":
                return(' name description parent_id ad_group type ');
                break;

            case "queries":
                return(' name org_id description sql menu_category menu_display ');
                break;

            case "racks":
                return(' name org_id description row_id row_position pod physical_height physical_width physical_depth weight_empty weight_current weight_max ru_start ru_height type purpose manufacturer model series serial asset_number asset_tag bar_code power_circuit power_sockets circuit_count btu_total btu_max options notes ');
                break;

            case "rack_devices":
                return(' name org_id rack_id system_id position height width orientation options type ');
                break;

            case "roles":
                return(' name description permissions ad_group ');
                break;

            case "rooms":
                return(' name org_id floor_id description notes tags ');
                break;

            case "rows":
                return(' name org_id room_id description notes tags ');
                break;

            case "scripts":
                return(' name org_id description options based_on ');
                break;

            case "summaries":
                return(' name org_id table column menu_category extra_columns ');
                break;

            case "tasks":
                return(' name org_id description enabled type minute hour day_of_month month day_of_week options uuid sub_resource_id options last_run first_run ');
                break;

            case "users":
                return(' name org_id permissions password full_name email lang active roles orgs type dashboard_id ');
                break;

            case "widgets":
                return(' name org_id description type table primary secondary ternary dataset_title where limit group_by options sql link ');
                break;
        }
    }

    public function mandatory_fields($collection = '')
    {
        if (empty($collection)) {
            return('');
        }
        switch ($collection) {
            case "applications":
                return(array('name','org_id'));
                break;

            case "agents":
                return(array('name','org_id','status'));
                break;

            case "attributes":
                return(array('name','org_id','type','resource','value'));
                break;

            case "buildings":
                return(array('name','org_id','location_id'));
                break;

            case "clouds":
                return(array('name','org_id','type'));
                break;

            case "collectors":
                return(array('name','org_id','status'));
                break;

            case "configuration":
                return(array('value'));
                break;

            case "connections":
                return(array('name','org_id'));
                break;

            case "credentials":
                return(array('name','org_id','type','credentials'));
                break;

            case "dashboards":
                return(array('name','options'));
                break;

            case "discoveries":
                return(array('name','org_id','type','network_address','other'));
                break;

            case "fields":
                return(array('name','org_id','type','placement','group_id'));
                break;

            case "files":
                return(array('name','org_id','path'));
                break;

            case "floors":
                return(array('name','org_id','building_id'));
                break;

            case "groups":
                return(array('name','org_id','sql'));
                break;

            case "ldap_servers":
                return(array('name','org_id','lang','host','port','secure','domain','type','version','use_roles','refresh'));
                break;

            case "licenses":
                return(array('name','org_id','org_descendants','purchase_count','match_string'));
                break;

            case "locations":
                return(array('name','org_id'));
                break;

            case "networks":
                return(array('name','org_id','network'));
                break;

            case "orgs":
                return(array('name','parent_id'));
                break;

            case "queries":
                return(array('name','org_id','sql','menu_category','menu_display'));
                break;

            case "racks":
                return(array('name','org_id','row_id'));
                break;

            case "rack_devices":
                return(array('rack_id','system_id','position','height'));
                break;

            case "roles":
                return(array('name','permissions'));
                break;

            case "rooms":
                return(array('name','org_id','floor_id'));
                break;

            case "rows":
                return(array('name','org_id','room_id'));
                break;

            case "scripts":
                return(array('name','org_id','options','based_on'));
                break;

            case "summaries":
                return(array('name','org_id','table','column','menu_category'));
                break;

            case "tasks":
                return(array('name','org_id','type','sub_resource_id','uuid','enabled','minute','hour','day_of_month','month','day_of_week'));
                break;

            case "users":
                return(array('name','org_id','lang','active','roles','orgs'));
                break;

            case "widgets":
                return(array('name','org_id','type'));
                break;
        }
    }
}
