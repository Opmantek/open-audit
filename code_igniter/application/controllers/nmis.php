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
* @category  Controller
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.3
* @link      http://www.open-audit.org
*/

/**
* Base Object Nmis
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Nmis extends MY_Controller
{
    /**
    * Constructor
    *
    * @access    public
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('network');
        // inputRead();
        $this->response = response_create();
        $this->output->url = $this->config->config['oa_web_index'];
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
    }

    /**
    * Our remap function to override the inbuilt controller->method functionality
    *
    * @access public
    * @return NULL
    */
    public function _remap()
    {
        if ($this->response->meta->action == 'export') {
            $this->collection();
        } else {
            $this->{$this->response->meta->action}();
        }
    }

    private function _from_nmis_9($nodes)
    {
        $this->load->model('m_devices');
        $this->load->model('m_device');
        $this->load->helper('network');
        $log = new stdClass();
        $log->type = 'system';
        $log->severity = 7;
        $log->user = @$this->user->full_name;
        $log->collection = @$this->response->meta->collection;
        $log->action = @$this->response->meta->action;
        $log->status = 'processing NMIS9 Nodes';

        $match = new stdClass();
        $match->match_ip = 'y';
        $match->match_dns_fqdn = 'y';
        $match->match_dns_hostname = 'y';
        
        $devices = array();
        $this->load->model('m_attributes');
        $attributes = $this->m_attributes->collection(1);

        foreach ($nodes as $node) {
            $device = new stdClass();
            $device->name = strtolower(@$node['name']);
            $device->ip = '';
            $device->hostname = '';
            $device->fqdn = '';
            if (filter_var($node['configuration']['host'], FILTER_VALIDATE_IP) !== false) {
                $device->ip = $node['configuration']['host'];
                $device = dns_validate($device);
            } else {
                if (strpos($node['configuration']['host'], '.') !== false) {
                    $device->fqdn =  $node['configuration']['host'];
                    $temp = explode('.', $device->fqdn);
                    $device->hostname = $temp[0];
                    unset($temp[0]);
                    $device->domain = implode('.', $temp);
                    unset($temp);
                    $device->ip = gethostbyname($device->fqdn);
                } else {
                    $device->hostname =  $node['configuration']['host'];
                    $device->ip = gethostbyname($device->hostname);
                }
            }
            $serviceStatus = @$node['configuration']['serviceStatus'];
            foreach ($attributes as $attribute) {
                if ($attribute->attributes->type === 'environment') {
                    if (strtolower($serviceStatus) === strtolower($attribute->attributes->value) OR strtolower($serviceStatus) === strtolower($attribute->attributes->name)) {
                        $device->envionment = $attribute->attributes->value;
                    }
                }
            }
            $device->org_id = $node['org_id'];
            $device->location_id = $node['location_id'];
            $device->nmis_manage = 'y';
            $device->omk_uuid = @$node['uuid'];
            $device->status = 'production';
            $device->nmis_group = @$node['configuration']['group'];
            $device->nmis_name = @$node['name'];
            $device->nmis_role = @$node['configuration']['roleType'];
            $device->nmis_notes = @$node['configuration']['notes'];
            $device->nmis_business_service = @$node['configuration']['businessService'];
            $device->last_seen_by = 'nmis';
            $device->last_seen = $this->config->config['timestamp'];

            $device->credentials = new stdClass();
            $device->credentials->description = 'Imported from NMIS 9';
            $device->credentials->name = 'Device Specific Credentials';
            $device->credentials->type = 'snmp';
            $device->credentials->credentials = new stdClass();
            $temp =  @$node['configuration']['version'];
            switch ($temp) {
                case 'snmpv1':
                    $device->credentials->credentials->version = 1;
                    break;

                case 'snmpv2c':
                    $device->credentials->credentials->version = 2;
                    break;

                case 'snmpv3':
                    $device->credentials->credentials->version = 3;
                    break;
                
                default:
                    $device->credentials->credentials->version = 2;
                    break;
            }

            if ($device->credentials->credentials->version == 1) {
                $device->credentials->credentials->community =  @$node['configuration']['community'];
            }
            if ($device->credentials->credentials->version == 2) {
                $device->credentials->credentials->community =  @$node['configuration']['community'];
            }
            if ($device->credentials->credentials->version == 3) {
                $device->credentials->type = 'snmp_v3';
                $device->credentials->credentials->security_name = @$node['configuration']['username'];
                $device->credentials->credentials->authentication_passphrase = @$node['configuration']['authpassword'];
                $device->credentials->credentials->authentication_protocol = @$node['configuration']['authprotocol'];
                $device->credentials->credentials->privacy_passphrase = @$node['configuration']['privpassword'];
                $device->credentials->credentials->privacy_protocol = @$node['configuration']['privprotocol'];
                $device->credentials->credentials->security_level = 'noAuthNoPriv';
                if ( ! empty($node['configuration']['authpassword']) && !empty($node['configuration']['authprotocol']) && empty($node['configuration']['privpassword'])) {
                    $device->credentials->credentials->security_level = 'authNoPriv';
                }
                if ( ! empty($node['configuration']['authpassword']) && ! empty($node['configuration']['authprotocol']) && ! empty($node['configuration']['privpassword']) && ! empty($node['configuration']['privprotocol'])) {
                    $device->credentials->credentials->security_level = 'authPriv';
                }
            }
            $devices[] = $device;
        }
        $ids = array();
        $updated = 0;
        $inserted = 0;
        foreach ($devices as $device) {

            $parameters = new stdCLass();
            $parameters->details = $device;
            $parameters->log = $log;
            $parameters->match = $match;

            // Remove any empty entries
            foreach ($device as $key => $value) {
                if (empty($value)) {
                    unset($device->$key);
                }
            }

            // Need to manually remove any discovery logs.
            $sql = '/* nmis::_from_nmis_9 */ ' . 'DELETE FROM discovery_log WHERE ip = ?';
            $data = array(ip_address_from_db(@$device->ip));
            $this->db->query($sql, $data);

            $device->id = $this->m_device->match($parameters);
            $device->ip = ip_address_to_db(@$device->ip);
            $log->command_output = '';

            $credentials = $device->credentials;
            unset($device->credentials);
            if ( ! empty($device->id)) {
                $log->message = "Updating device " . $device->name . " (ID:" . $device->id . ")";
                discovery_log($log);
                $this->m_devices->update($device);
                $updated++;
                // must manually update last seen and last seen by
                $sql = '/* nmis::_from_nmis_9 */ ' . 'UPDATE system SET last_seen_by = "nmis", last_seen = ? WHERE id = ?';
                $data = array($device->last_seen, $device->id);
                $this->db->query($sql, $data);
            } else {
                $device->first_seen = $this->config->config['timestamp'];
                $log->message = "Creating device " . $device->name;
                discovery_log($log);
                $device->id = $this->m_devices->create($device);
                $inserted++;
                // need to update the discovery log with our system.id
                $sql = '/* nmis::_from_nmis_9 */ ' . 'UPDATE discovery_log SET system_id = ? WHERE ip = ?';
                $data = array($device->id, ip_address_from_db(@$device->ip));
                $this->db->query($sql, $data);
            }
            $this->m_devices->sub_resource_create($device->id, 'credential', $credentials);
            $ids[] = $device->id;
            # NOTE - this applies for returning a JSON result
            #      - a HTML output redirects
            $data = new stdClass();
            $data->id = $device->id;
            $data->type = 'devices';
            $data->attributes = new stdClass();
            $data->attributes->id = $device->id;
            $data->attributes->name = $device->name;
            $data->attributes->hostname = @$device->hostname;
            $data->attributes->ip = ip_address_from_db(@$device->ip);
            $this->response->data[] = $data;
        }
        $ids = implode(',', $ids);
        $this->response->meta->ids = $ids;
        $this->response->meta->inserted = $inserted;
        $this->response->meta->updated = $updated;
        $this->response->total = $inserted + $updated;
        return true;
    }

    private function _from_nmis_8($string)
    {
        $this->load->model('m_devices');
        $this->load->model('m_device');
        $log = new stdClass();
        $log->type = 'system';
        $log->severity = 7;
        $log->user = @$this->user->full_name;
        $log->collection = @$this->response->meta->collection;
        $log->action = @$this->response->meta->action;
        $log->status = 'processing NMIS9 Nodes';

        $match = new stdClass();
        $match->match_ip = 'y';
        
        $devices = array();

        $string = str_replace(PHP_EOL, ' ', $string);
        $string = str_replace("\r\n", ' ', $string);
        $string = str_replace("\n", ' ', $string);
        $string = str_replace(chr(13), ' ', $string);
        $string = str_replace('%hash = (', '{', $string);
        $string = str_replace(');', '}', $string);
        $string = str_replace('=>', ':', $string);
        $string = str_replace("'undef'", "''", $string);
        $string = str_replace('undef', "''", $string);
        $string = str_replace("'", '"', $string);
        if (empty($string)) {
            log_error('ERR-0011');
            print_r($this->response->errors);
            exit;
        }
        $nodes = json_decode($string, true);
        unset($string);
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                // no errors
                break;
            case JSON_ERROR_DEPTH:
                log_error('ERR-0016', 'nmis:create - JSON_ERROR_DEPTH - Maximum stack depth exceeded');
                output();
                break;
            case JSON_ERROR_STATE_MISMATCH:
                log_error('ERR-0016', 'nmis:create - JSON_ERROR_STATE_MISMATCH - Underflow or the modes mismatch');
                output();
                break;
            case JSON_ERROR_CTRL_CHAR:
                log_error('ERR-0016', 'nmis:create - JSON_ERROR_CTRL_CHAR - Unexpected control character found');
                output();
                break;
            case JSON_ERROR_SYNTAX:
                log_error('ERR-0016', 'nmis:create - JSON_ERROR_SYNTAX - Syntax error, malformed JSON');
                output();
                break;
            case JSON_ERROR_UTF8:
                log_error('ERR-0016', 'nmis:create - JSON_ERROR_UTF8 - Malformed UTF-8 characters, possibly incorrectly encoded');
                output();
                break;
            default:
                log_error('ERR-0016', 'nmis:create - Error importing Nmis.nodes file');
                output();
                break;
        }

        $nodes_in_file = 0;
        $nodes_collect = 0;
        foreach ($nodes as $node) {
            $nodes_in_file++;
            if (@$node['collect'] == 'true') {
                $nodes_collect++;
                $device = new stdClass();
                $device->name = strtolower(@$node['name']);
                $device->ip = '';
                $device->hostname = '';
                $device->fqdn = '';
                $device->org_id = intval($this->response->meta->received_data->attributes->org_id);
                $device->location_id = intval($this->response->meta->received_data->attributes->location_id);
                if (filter_var($node['host'], FILTER_VALIDATE_IP) !== false) {
                    $device->ip = $node['host'];
                } else {
                    if (strpos($node['host'], '.') !== false) {
                        $device->fqdn =  $node['host'];
                        $temp = explode('.', $device->fqdn);
                        $device->hostname = $temp[0];
                        unset($temp[0]);
                        $device->domain = implode('.', $temp);
                        unset($temp);
                    } else {
                        $device->hostname =  $node['host'];
                    }
                }
                if (!empty($device->ip)) {
                    $device->ip = ip_address_to_db($device->ip);
                }
                $device->nmis_manage = 'y';
                $device->omk_uuid = @$node['uuid'];
                $device->status = 'production';
                $device->nmis_group = @$node['group'];
                $device->nmis_name = @$node['name'];
                $device->nmis_role = @$node['roleType'];
                $device->nmis_notes = @$node['notes'];
                $device->nmis_business_service = @$node['businessService'];
                $device->last_seen = $this->config->config['timestamp'];
                $device->last_seen_by = 'nmis';

                $device->credentials = new stdClass();
                $device->credentials->description = 'Imported from NMIS';
                $device->credentials->name = 'Device Specific Credentials';
                $device->credentials->type = 'snmp';
                $device->credentials->credentials = new stdClass();
                $temp =  @$node['version'];
                switch ($temp) {
                    case 'snmpv1':
                        $device->credentials->credentials->version = 1;
                        break;

                    case 'snmpv2c':
                        $device->credentials->credentials->version = 2;
                        break;

                    case 'snmpv3':
                        $device->credentials->credentials->version = 3;
                        break;
                    
                    default:
                        $device->credentials->credentials->version = 2;
                        break;
                }

                if ($device->credentials->credentials->version == 1) {
                    $device->credentials->credentials->community =  @$node['community'];
                }
                if ($device->credentials->credentials->version == 2) {
                    $device->credentials->credentials->community =  @$node['community'];
                }
                if ($device->credentials->credentials->version == 3) {
                    $device->credentials->type = 'snmp_v3';
                    $device->credentials->credentials->security_name = @$node['username'];
                    $device->credentials->credentials->authentication_passphrase = @$node['authpassword'];
                    $device->credentials->credentials->authentication_protocol = @$node['authprotocol'];
                    $device->credentials->credentials->privacy_passphrase = @$node['privpassword'];
                    $device->credentials->credentials->privacy_protocol = @$node['privprotocol'];
                    $device->credentials->credentials->security_level = 'noAuthNoPriv';
                    if (!empty($node['authpassword']) and !empty($node['authprotocol']) and empty($node['privpassword'])) {
                        $device->credentials->credentials->security_level = 'authNoPriv';
                    }
                    if (!empty($node['authpassword']) and !empty($node['authprotocol']) and ! empty($node['privpassword']) and ! empty($node['privprotocol'])) {
                        $device->credentials->credentials->security_level = 'authPriv';
                    }
                }
                $devices[] = $device;
            }
        }
        $ids = array();
        $updated = 0;
        $inserted = 0;
        foreach ($devices as $device) {

            $parameters = new stdCLass();
            $parameters->details = $device;
            $parameters->log = $log;
            $parameters->match = $match;

            // echo "<pre>"; print_r($device); echo "</pre>";
            // Remove any empty entries
            foreach ($device as $key => $value) {
                if (empty($value)) {
                    unset($device->$key);
                }
            }
            // echo "<pre>"; print_r($device); echo "</pre>"; exit;

            // Need to manually remove any discovery logs.
            $sql = '/* nmis::_from_nmis_8 */ ' . 'DELETE FROM discovery_log WHERE ip = ?';
            $data = array(ip_address_from_db($device->ip));
            $this->db->query($sql, $data);

            $device->id = $this->m_device->match($parameters);
            $device->ip = ip_address_to_db($device->ip);
            $log->command_output = '';

            $credentials = $device->credentials;
            unset($device->credentials);
            if ( ! empty($device->id)) {
                $log->message = 'Updating device ' . $device->name . ' (ID:' . $device->id . ')';
                discovery_log($log);
                $this->m_devices->update($device);
                $updated++;
                // must manually update last seen and last seen by
                $sql = '/* nmis::_from_nmis_8 */ ' . 'UPDATE system SET last_seen_by = "nmis", last_seen = ? WHERE id = ?';
                $data = array($device->last_seen, $device->id);
                $this->db->query($sql, $data);
            } else {
                $device->first_seen = $this->config->config['timestamp'];
                $log->message = "Creating device " . $device->name;
                discovery_log($log);
                $device->id = $this->m_devices->create($device);
                $inserted++;
                // need to update the discovery log with our system.id
                $sql = '/* nmis::_from_nmis_8 */ ' . 'UPDATE discovery_log SET system_id = ? WHERE ip = ?';
                $data = array($device->id, ip_address_from_db($device->ip));
                $this->db->query($sql, $data);
            }
            $this->m_devices->sub_resource_create($device->id, 'credential', $credentials);
            $ids[] = $device->id;
            # NOTE - this applies for returning a JSON result
            #      - a HTML output redirects
            $data = new stdClass();
            $data->id = $device->id;
            $data->type = 'devices';
            $data->attributes = new stdClass();
            $data->attributes->id = $device->id;
            $data->attributes->name = $device->name;
            $data->attributes->hostname = @$device->hostname;
            $data->attributes->ip = ip_address_from_db($device->ip);
            $this->response->data[] = $data;
        }
        $ids = implode(',', $ids);
        $this->response->meta->ids = $ids;
        $this->response->meta->inserted = $inserted;
        $this->response->meta->updated = $updated;
        $this->response->total = $inserted + $updated;
        return true;
    }

    /**
    * Process the supplied data and update an existing object
    *
    * @access public
    * @return NULL
    */
    public function create()
    {

        $string = '';
        $flash_message = '';
        $this->load->helper('network');

        $log = new stdClass();
        $log->type = 'system';
        $log->severity = 7;
        $log->user = @$this->user->full_name;
        $log->collection = @$this->response->meta->collection;
        $log->action = @$this->response->meta->action;
        $log->status = 'processing Nodes submission';

        // Use nmis9 node admin tool
        if ($this->response->meta->received_data->attributes->source === 'nmis9' && file_exists('/usr/local/nmis9/admin/node_admin.pl')) {
            $command = '/usr/local/nmis9/admin/node_admin.pl act=export format=json keep_ids=1 2>/dev/null';
            exec($command, $string, $return_var);
            if ($return_var !== 0) {
                echo "<pre>\n";
                print_r($string);
                exit;
            }
            if (is_array($string)) {
                $string = implode('', $string);
            }
            $nodes = json_decode($string, true);
            unset($string);
            unset($command);
            unset($return_var);
            for ($i=0; $i < count($nodes); $i++) { 
                $nodes[$i]['org_id'] = @intval(@$this->response->meta->received_data->attributes->org_id);
                $nodes[$i]['location_id'] = @intval(@$this->response->meta->received_data->attributes->location_id);
            }
            $this->_from_nmis_9($nodes);
        }

        // The uploaded NMIS8 nodes file
        if ($this->response->meta->received_data->attributes->source === 'nmis8_nodes' && ! empty($_FILES['upload_file']['tmp_name'])) {
            $target_path = BASEPATH . "../application/uploads/" . basename($_FILES['upload_file']['name']);
            try {
                move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path);
            } catch (Exception $e) {
                $log->severity = 5;
                $log->summary = 'Could not move uploaded Nodes file.';
                $log->detail = $e;
                stdlog($log);
                unset($log);
                $this->data['query'] = $e;
                $this->data['error'] = "There was an error uploading the file, please try again.";
                $this->data['include'] = 'v_error';
                $this->load->view('v_template', $this->data);
            }
            $string = file_get_contents($target_path);
            unlink($target_path);
            $this->_from_nmis_8($string);
        }

        // the local NMIS8 nodes file
        if ($this->response->meta->received_data->attributes->source === 'nmis8') {
            $file = '/usr/local/nmis8/conf/Nodes.nmis';
            $string = file_get_contents($file);
            $this->_from_nmis_8($string);
        }

        if ($this->response->meta->format === 'json') {
            output($this->response);
        } else {
            $this->session->set_flashdata('success', $flash_message . count($this->response->meta->total) . ' devices imported (' . intval($this->response->meta->inserted) . ' inserted and ' . intval($this->response->meta->updated) . ' updated).');
            redirect('devices?system.last_seen=' . $this->config->config['timestamp'] . '&system.last_seen_by=nmis&properties=system.id,system.icon,system.type,system.name,nmis_name,system.ip,system.nmis_business_service,system.nmis_group,system.nmis_role,system.nmis_notes');
        }
    }

    /**
    * Supply a HTML form for the user to update an object
    *
    * @access public
    * @return NULL
    */
    public function collection()
    {
        redirect('devices');
        exit;
        $this->load->model('m_devices');
        $this->response->meta->internal->join = '';
        $this->response->meta->internal->properties = 'system.id, system.name, system.ip, system.nmis_manage, system.type, system.nmis_name, system.omk_uuid, system.nmis_notes, system.nmis_role, system.nmis_business_service, system.nmis_group';
        $this->m_devices->collection(0,1);
        if ( ! empty($this->response->data)) {
            $this->response->meta->total = intval(count($this->response->data));
        } else {
            $this->response->meta->total = 0;
        }
        $devices = array();
        if ($this->response->data) {
            foreach ($this->response->data as &$device) {
                $this_device = new stdClass();
                $this_device->id = intval($device->attributes->id);
                $this_device->type = 'devices';
                $this_device->attributes = new stdClass();
                $this_device->attributes->id = $device->attributes->id;
                $this_device->attributes->name = $device->attributes->nmis_name;
                if (empty($this_device->attributes->name)) {
                    if ( ! empty($device->attributes->hostname)) {
                        $this_device->attributes->name = $device->attributes->hostname;
                    } else {
                        $this_device->attributes->name = $device->attributes->name;
                    }
                }
                $this_device->attributes->uuid = $device->attributes->omk_uuid;
                $this_device->attributes->nmis_manage = $device->attributes->nmis_manage;
                $this_device->attributes->notes = $device->attributes->nmis_notes;
                $this_device->attributes->businessService = $device->attributes->nmis_business_service;
                $this_device->attributes->role = $device->attributes->nmis_role;
                $this_device->attributes->group = $device->attributes->nmis_group;
                if (empty($this_device->attributes->group)) {
                    $this_device->attributes->group = 'Open-AudIT';
                }
                $this_device->attributes->host = '';
                if ( ! empty($device->attributes->ip)) {
                    $this_device->attributes->host = ip_address_from_db($device->attributes->ip);
                } else if ( ! empty($device->attributes->fqdn)) {
                    $this_device->attributes->host = $device->attributes->fqdn;
                } else if ( ! empty($device->attributes->hostname)) {
                    $this_device->attributes->host = $device->attributes->hostname;
                }
                $this_device->attributes->community = '';
                $credentials = $this->m_devices->read_sub_resource($device->attributes->id, 'credential', '', '', '', 'y', '');
                if (!empty($credentials)) {
                    foreach ($credentials as $credential) {
                        if ($credential->attributes->type == 'snmp') {
                            if (!empty($credential->attributes->credentials->community)) {
                                $this_device->attributes->community = $credential->attributes->credentials->community;
                            } else {
                                $this_device->attributes->community = '';
                            }
                            if (!empty($credential->attributes->credentials->version) and $credential->attributes->credentials->version == '2') {
                                $this_device->attributes->version = 'snmpv2c';
                            } else {
                                $this_device->attributes->version = 'snmpv1';
                            }
                        }
                        if ($credential->attributes->type == 'snmp_v3') {
                            if (!empty($credential->attributes->credentials->privacy_protocol)) {
                                $this_device->attributes->privprotocol = $credential->attributes->credentials->privacy_protocol;
                            } else {
                                $this_device->attributes->privprotocol = '';
                            }
                            if (!empty($credential->attributes->credentials->privacy_passphrase)) {
                                $this_device->attributes->privpassword = $credential->attributes->credentials->privacy_passphrase;
                            } else {
                                $this_device->attributes->privpassword = '';
                            }
                            if (!empty($credential->attributes->credentials->authentication_protocol)) {
                                $this_device->attributes->authprotocol = $credential->attributes->credentials->authentication_protocol;
                            } else {
                                $this_device->attributes->authprotocol = '';
                            }
                            if (!empty($credential->attributes->credentials->authentication_passphrase)) {
                                $this_device->attributes->authpassword = $credential->attributes->credentials->authentication_passphrase;
                            } else {
                                $this_device->attributes->authpassword = '';
                            }
                            if (!empty($credential->attributes->credentials->security_name)) {
                                $this_device->attributes->username = $credential->attributes->credentials->security_name;
                            } else {
                                $this_device->attributes->username = '';
                            }
                            if (!empty($credential->attributes->credentials->security_level)) {
                                $this_device->attributes->authkey = $credential->attributes->credentials->security_level;
                            } else {
                                $this_device->attributes->authkey = '';
                            }
                            $this_device->attributes->version = 'snmpv3';
                        }
                        if ($credential->attributes->type == 'windows') {
                            if (strpos($credential->attributes->credentials->username, '@') !== false) {
                                $temp = explode('@', $credential->attributes->credentials->username);
                                $this_device->attributes->wmiusername = $temp[1] . '/' . $temp[0];
                            } else {
                                if (!empty($credential->attributes->credentials->username)) {
                                    $this_device->attributes->wmiusername = $credential->attributes->credentials->username;
                                } else {
                                    $this_device->attributes->wmiusername = '';
                                }
                            }
                            if (!empty($credential->attributes->credentials->password)) {
                                $this_device->attributes->wmipassword = $credential->attributes->credentials->password;
                            } else {
                                $this_device->attributes->wmipassword = '';
                            }
                        }

                    }
                }
                $devices[] = $this_device;
            }
        }
        $this->response->data = $devices;
        unset($this->response->meta->data_order);
        output($this->response);
    }

    /**
    * Supply a HTML form for the user to create an object
    *
    * @access public
    * @return NULL
    */
    public function create_form()
    {
        $this->load->model('m_orgs');
        $this->response->included = array_merge($this->response->included, $this->m_orgs->collection($this->user->id));
        $this->load->model('m_locations');
        $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
        if (file_exists('/usr/local/nmis9/admin/node_admin.pl')) {
            $this->default = '/usr/local/nmis9/conf/Nodes.nmis';
        } else {
            $this->default = '/usr/local/nmis8/conf/Nodes.nmis';
        }
        output($this->response);
    }
}
// End of file nmis.php
// Location: ./controllers/nmis.php
