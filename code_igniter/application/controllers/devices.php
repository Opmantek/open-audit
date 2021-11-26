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
* @category  Controller
* @package   Devices
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Object Devices
*
* @access   public
* @category Controller
* @package  Devices
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Devices extends MY_Controller
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
        $this->load->model('m_devices');
        // inputRead();
        $this->response = response_create();
        $this->output->url = $this->config->config['oa_web_index'];
    }

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
    }

    /**
     * [_remap description]
     * @return [type] [description]
     */
    public function _remap()
    {
        $this->{$this->response->meta->action}();
    }

    /**
     * [collection description]
     * @return [type] [description]
     */
    private function collection()
    {
        $timer_start = microtime(true);
        if ($this->response->meta->sub_resource !== '' &&  ($this->response->meta->sub_resource !== 'report' && $this->response->meta->sub_resource !== 'query' && $this->response->meta->sub_resource !== 'group')) {
            $this->response->data = $this->m_devices->collection_sub_resource();
        } else if ($this->response->meta->sub_resource !== '' && $this->response->meta->sub_resource === 'report') {
            $this->response->data = $this->m_devices->report();
        } else if ($this->response->meta->sub_resource !== '' && $this->response->meta->sub_resource === 'query') {
            $this->response->data = $this->m_devices->query();
        } else if ($this->response->meta->sub_resource !== '' && $this->response->meta->sub_resource === 'group') {
            $this->response->data = $this->m_devices->group();
        } else if ( ! empty($this->response->meta->groupby)) {
            $this->response->data = $this->m_devices->collection_group_by();
        } else {
            $this->m_devices->collection(null, 1);
        }
        if (is_array($this->response->data)) {
            $this->response->meta->filtered = count($this->response->data);
        } else {
            $this->response->meta->filtered = 0;
        }

        $timer_end = microtime(true);
        $entry = new stdClass();
        $entry->time = ($timer_end - $timer_start);
        $entry->detail = 'm_devices::collection';
        $entry->time_now = time();
        $GLOBALS['timer_log'][] = $entry;

        output($this->response);
        $log = new stdClass();
        $log->type = 'access';
        $log->detail = json_encode($this->response->meta);
        $log->severity = 7;
        $log->summary = 'finish';
        $log->status = 'success';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
        stdLog($log);
    }

    /**
     * [read description]
     * @return [type] [description]
     */
    private function read()
    {
        $timer_start = microtime(true);
        $this->load->model('m_orgs');
        $this->load->model('m_locations');
        $this->load->model('m_devices_components');
        // if we're displaying a web page, get ALL the data
        if (($this->response->meta->format === 'screen' && $this->response->meta->include === '') OR $this->response->meta->include === '*' OR $this->response->meta->include === 'all') {
            $this->response->meta->include = 'application,attachment,audit_log,bios,certificate,change_log,credential,discovery_log,disk,dns,edit_log,field,file,image,ip,location,log,memory,module,monitor,motherboard,netstat,network,nmap,optical,pagefile,partition,policy,print_queue,processor,purchase,rack_devices,radio,route,san,scsi,server,server_item,service,share,software,software_key,sound,task,usb,user,user_group,variable,video,vm,windows';
        }
        if ($this->response->meta->sub_resource !== '') {
            if (empty($this->response->meta->sub_resource_id)) {
                $this->response->meta->sub_resource_id = 0;
            }
            if ($this->response->meta->sub_resource === 'partition_graph') {
                $this->response->data = $this->m_devices_components->graph($this->response->meta->id, $this->response->meta->sub_resource_id, 'partition', 30);
                $this->response->meta->action = 'read_partition_graph';
            } else {
                $this->response->data = $this->m_devices_components->read($this->response->meta->id, $this->response->meta->current, $this->response->meta->sub_resource, $this->response->meta->filter, $this->response->meta->properties);
                $this->response->meta->format = 'json';
            }
        } else {
            $this->response->data = $this->m_devices->read($this->response->meta->id);
            // create the related links
            if ( ! empty($this->response->data)) {
                $related = $this->m_devices->get_related_tables();
                $this->response->data[0]->links->relationships = $related;
                unset($related);
            }
            // get any additionally included tables
            if ( ! empty($this->response->meta->include) && ! empty($this->response->data)) {
                $temp = explode(',', $this->response->meta->include);
                foreach ($temp as $table) {
                    if ($table !== 'field' && $table !== 'application' && $table !== 'rack_devices') {
                        $result = false;
                        $result = $this->m_devices->read_sub_resource(
                            $this->response->meta->id,
                            $table, // sub_resource
                            @$this->response->meta->sub_resource_id, // sub id
                            $this->response->meta->properties,
                            '', // sort
                            $this->response->meta->current,
                            $this->response->meta->limit
                        );
                        if ($result !== false) {
                            $this->response->included = array_merge($this->response->included, $result);
                        }
                    } else if ($table === 'field') {
                        $result = false;
                        $result = $this->m_devices->get_device_fields($this->response->meta->id);
                        $this->response->included = array_merge($this->response->included, $result);
                    } else if ($table === 'application') {
                        $result = false;
                        $result = $this->m_devices->get_device_applications($this->response->meta->id);
                        $this->response->included = array_merge($this->response->included, $result);
                    } else if ($table === 'rack_devices') {
                        $result = false;
                        $result = $this->m_devices->get_device_rack($this->response->meta->id);
                        $this->response->included = array_merge($this->response->included, $result);
                        if ( ! empty($result[0]->attributes->rack_id)) {
                            $this->load->model('m_racks');
                            $rack = $this->m_racks->read($result[0]->attributes->rack_id);
                            $this->response->included = array_merge($this->response->included, $rack);
                        }
                    }
                }
                // # populate the credentials associated from the last discovery
                if ( ! empty($this->response->data[0]->attributes->credentials)) {
                    $credentials = @json_decode($this->response->data[0]->attributes->credentials);
                    if ( ! empty($credentials)) {
                        $this->load->model('m_credentials');
                        foreach ($credentials as $credential_id) {
                            $credential = $this->m_credentials->read($credential_id);
                            if ( ! empty($credential)) {
                                unset($credential[0]->attributes->credentials);
                            }
                            if (is_array($credential)) {
                                $this->response->included = array_merge($this->response->included, $credential);
                            }
                        }
                    }
                }
            }
        }
        $this->response->meta->total = count($this->response->data);
        $this->response->meta->filtered = count($this->response->data);
        if ($this->response->meta->format === 'screen') {
            // return a list of all orgs and locations so we can create the edit functionality on the web page
            if (isset($this->response->data[0]->attributes->org_id)) {
                $this->response->included = array_merge($this->response->included, $this->m_orgs->collection($this->user->id));
            }
            if (isset($this->response->data[0]->attributes->location_id)) {
                $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
            }
        } else {
            // return only the details of the linked org and location
            if (isset($this->response->data[0]->attributes->org_id)) {
                $this->response->included = array_merge($this->response->included, $this->m_orgs->read($this->response->data[0]->attributes->org_id));
            }
            if (isset($this->response->data[0]->attributes->location_id)) {
                $this->response->included = array_merge($this->response->included, $this->m_locations->read($this->response->data[0]->attributes->location_id));
            }
        }
        if (is_null($this->response->data)) {
            log_error('ERR-0002');
        }
        output($this->response);
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    private function create()
    {
        $timer_start = microtime(true);
        $this->load->helper('snmp_model');
        $this->load->helper('mac');
        if (empty($_POST['input_type']) OR $_POST['input_type'] === 'manual_input') {
            $device = new stdClass();
            foreach ($this->response->meta->received_data->attributes as $key => $value) {
                if ($value !== '') {
                    $device->$key = $value;
                }
            }
            $device->last_seen_by = 'web form';
            $device->last_seen = $this->config->config['timestamp'];
            $this->load->model('m_devices');
            $id = $this->m_devices->create($device);
            $device->id = $id;
            $mac = '';
            if ( ! empty($device->mac)) {
                $mac = strtolower($device->mac);
            }
            if ( ! empty($device->ip) && ! empty($device->netmask)) {
                $this->load->helper('network');
                $network = network_details($device->ip . ' ' . $device->netmask);
                if (empty($network->error)) {
                    $this->load->model('m_devices_components');
                    $device_ip = new stdClass();
                    $device_ip->mac = $mac;
                    $device_ip->net_index = '';
                    $device_ip->ip = $network->address;
                    $device_ip->netmask = $network->netmask;
                    $device_ip->cidr = $network->network_slash;
                    $device_ip->version = 4;
                    $device_ip->network = $network->network . '/' . $network->network_slash;
                    $device_ip->set_by = '';
                    $input = array();
                    $input[] = $device_ip;
                    $parameters = new stdClass();
                    $parameters->table = 'ip';
                    $parameters->details = $device;
                    $parameters->input = $input;
                    $this->m_devices_components->process_component($parameters);
                }
            }

            $timer_end = microtime(true);
            $entry = new stdClass();
            $entry->time = ($timer_end - $timer_start);
            $entry->detail = 'm_devices::create';
            $entry->time_now = time();
            $GLOBALS['timer_log'][] = $entry;
        }

        if ( ! empty($_POST['input_type']) && $_POST['input_type'] === 'audit_input') {
            unset($_POST['data']);
            unset($_FILES);
            $input = $_POST['upload_input'];
            $discovery_id = null;
            include 'include_input_devices.php';
        }

        if ( ! empty($_POST['input_type']) && $_POST['input_type'] === 'file_input') {
            unset($_POST['data']);
            $discovery_id = null;
            include 'include_input_devices.php';
        }

        $log = new stdClass();
        $log->type = 'system';
        $log->detail = 'Finished creating device.';
        $log->severity = 7;
        $log->status = 'finish';
        $log->object = 'devices';
        $log->function = 'devices::create';
        stdLog($log);

        if (empty($id) && ! empty($details->id)) {
            $id = $details->id;
        }

        if ($this->response->meta->format === 'json') {
            $this->response->data = $this->m_devices->read($id);
            output($this->response);
        } else {
            redirect('devices/' . $id);
        }
    }

    /**
     * [update description]
     * @return [type] [description]
     */
    private function update()
    {
        $this->m_devices->update();
        // TODO - replace this old function
        if ($this->response->meta->format === 'json') {
            if ( ! empty($this->response->meta->received_data->attributes->status) && $this->response->meta->received_data->attributes->status === 'deleted') {
                output($this->response);
            } else {
                $this->response->data = $this->m_devices->read($this->response->meta->id);
                output($this->response);
            }
        }
        exit();
    }

    /**
     * [create_form description]
     * @return [type] [description]
     */
    private function create_form()
    {
        $this->response->dictionary = $this->m_devices->dictionary();
        $this->load->model('m_orgs');
        $this->response->included = array_merge($this->response->included, $this->m_orgs->collection($this->user->id));
        $this->load->model('m_locations');
        $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
        $this->load->model('m_attributes');
        $this->response->included = array_merge($this->response->included, $this->m_attributes->collection($this->user->id));
        output($this->response);
    }

    /**
     * [execute description]
     * @return [type] [description]
     */
    private function execute()
    {
        $this->response->meta->format = 'json';
        $this->response->meta->debug = true;
        output($this->response);
        $log = new stdClass();
        $log->type = 'access';
        $log->detail = json_encode($this->response->meta);
        $log->severity = 7;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
        stdLog($log);
    }

    /**
     * [bulk_update_form description]
     * @return [type] [description]
     */
    private function bulk_update_form()
    {
        $timer_start = microtime(true);
        if (empty($this->response->meta->ids)) {
            $this->response->meta->ids = '0';
        }
        $sql = "SELECT system.id, system.icon, system.type, system.name, system.domain, system.ip, system.description, system.os_family, system.status, orgs.name FROM system LEFT JOIN orgs ON (system.org_id = orgs.id) " . $this->response->meta->internal->filter . " AND system.id IN (" . $this->response->meta->ids . ")";
        $query = $this->db->query($sql);
        // TODO - change the below to use this->response->included
        $this->response->devices = $query->result();

        if (empty($this->response->meta->sub_resource)) {
            $this->load->model('m_locations');
            $this->load->model('m_fields');
            $this->load->model('m_attributes');
            $this->response->included = array_merge($this->response->included, $this->m_attributes->collection($this->user->id));
            $this->response->included = array_merge($this->response->included, $this->m_orgs->collection($this->user->id));
            $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
            unset($temp);
            $temp = @$this->m_fields->collection($this->user->id);
            if ( ! empty($temp)) {
                $this->response->included = array_merge($this->response->included, $this->m_fields->collection($this->user->id));
            }
        } elseif ($this->response->meta->sub_resource === 'credential') {
            $this->response->meta->action = 'create_form_credentials';
        }

        $timer_end = microtime(true);
        $entry = new stdClass();
        $entry->time = ($timer_end - $timer_start);
        $entry->detail = 'm_devices::bulk_update_form';
        $entry->time_now = time();
        $GLOBALS['timer_log'][] = $entry;

        output($this->response);
        $log = new stdClass();
        $log->type = 'access';
        $log->detail = json_encode($this->response->meta);
        $log->severity = 7;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
        stdLog($log);
    }

    /**
     * [sub_resource_read description]
     * @return [type] [description]
     */
    private function sub_resource_read()
    {
        $current = $this->response->meta->current;
        if (is_array($this->response->meta->filter)) {
            foreach ($this->response->meta->filter as $temp_filter) {
                if ($temp_filter->name === $this->response->meta->sub_resource . '.current') {
                    $current = $temp_filter->value;
                }
            }
        }
        if (empty($this->response->meta->sub_resource_id)) {
            $this->response->meta->sub_resource_id = 0;
        }
        $this->response->data = $this->m_devices->read_sub_resource($this->response->meta->id, $this->response->meta->sub_resource, $this->response->meta->sub_resource_id, $this->response->meta->properties, '', $current, '');
        $this->response->meta->total = 0;
        if (is_array($this->response->data)) {
            $this->response->meta->total = count($this->response->data);
        }
        $this->response->meta->filtered = $this->response->meta->total;
        output($this->response);
    }

    /**
     * [sub_resource_delete description]
     * @return [type] [description]
     */
    private function sub_resource_delete()
    {
        if (empty($this->response->meta->sub_resource_id)) {
            $this->response->meta->sub_resource_id = 0;
        }
        $this->m_devices->sub_resource_delete($this->response->meta->id, $this->response->meta->sub_resource, $this->response->meta->sub_resource_id);
        if ($this->response->meta->format === 'json') {
            output($this->response);
        } else {
            redirect('devices');
        }
        $log = new stdClass();
        $log->type = 'access';
        $log->detail = json_encode($this->response->meta);
        $log->severity = 7;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
        stdLog($log);
    }

    /**
     * [sub_resource_create_form description]
     * @return [type] [description]
     */
    private function sub_resource_create_form()
    {
        if ($this->response->meta->sub_resource === 'credential') {
            $this->response->meta->action = 'create_form_credentials';
            $this->response->data = array();
            $temp = new stdClass();
            $temp->type = $this->response->meta->collection;
            $this->response->data[] = $temp;
            unset($temp);
            output($this->response);
        } elseif ($this->response->meta->sub_resource === 'discovery') {
            
            // NOTE - removed because setting this (for use in Audit My PC), means the script submits to the IP, not localhost and
            //        therefore the logs are rejected.
            // NOTE #2 - Need to account for Collectors from Enterprise and Cloud
            // if ($this->config->config['default_network_address'] == '') {
            //     $this->config->config['default_network_address'] = 'http://127.0.0.1/open-audit/';
            // }
            // NOTE #3 - Improved version of above to account for vintage Windows running as per include_input_discoveries.php
           
            if (php_uname('s') === 'Windows NT' &&
                    exec('whoami') === 'nt authority\system' &&
                    ! empty($this->config->config['discovery_use_vintage_service']) &&
                    $this->config->config['discovery_use_vintage_service'] === 'y') {
                if ($this->config->config['default_network_address'] === '') {
                    $this->config->config['default_network_address'] = 'http://127.0.0.1/open-audit/';
                } else {
                    // leave it alone and use the config item as is
                }
            } else {
                $this->config->config['default_network_address'] = 'http://127.0.0.1/open-audit/';
            }

            $ids = array();
            if ( ! empty($this->response->meta->id)) {
                $ids[] = intval($this->response->meta->id);
            }
            if ( ! empty($this->response->meta->ids)) {
                $ids = array_merge($ids, explode(',', $this->response->meta->ids));
            }
            $device_names = array();
            $this->load->model('m_discoveries');
            $this->load->model('m_collection');
            $this->load->model('m_discovery_scan_options');
            foreach ($ids as $id) {
                $this->response->data = $this->m_devices->read($id);
                $sql = "SELECT * FROM discoveries WHERE name = 'Device Discovery - " . $this->response->data[0]->attributes->name . "' AND system_id = " . intval($id);
                $query = $this->db->query($sql);
                $result = $query->result();
                if ( ! empty($result)) {
                    // Check we have this discovery as it may have been removed
                    $discovery = $this->m_discoveries->read($result[0]->id);
                    if ( ! empty($discovery)) {
                        // We already have a previously created device discovery - use that
                        $discovery_id = $result[0]->id;
                        $this->m_discoveries->queue($discovery_id);
                        $this->load->model('m_queue');
                        $this->m_queue->start();
                    } else {
                        unset($result);
                    }
                }
                if (empty($result)) {
                    // make a new one and run it
                    $data = new stdClass();
                    $data->name = 'Device Discovery - ' . $this->response->data[0]->attributes->name;
                    $device_names[] = $this->response->data[0]->attributes->name;
                    if (empty($data->name)) {
                        $data->name = ip_address_from_db($this->response->data[0]->attributes->ip);
                    }
                    $data->system_id = $this->response->data[0]->attributes->id;
                    $data->org_id = $this->response->data[0]->attributes->org_id;
                    $data->type = 'subnet';
                    $data->network_address = $this->config->config['default_network_address'];
                    $data->other = new stdClass();
                    $data->subnet = ip_address_from_db($this->response->data[0]->attributes->ip);
                    $data->scan_options = new stdClass();
                    $data->match_options = new stdClass();
                    if ( ! empty($this->response->data[0]->attributes->discovery_id)) {
                        $discovery = $this->m_discoveries->read($this->response->data[0]->attributes->discovery_id);
                        if ( ! empty($discovery[0]->attributes->scan_options)) {
                            $data->scan_options = $discovery[0]->attributes->scan_options;
                        } else {
                            $this->response->data[0]->attributes->discovery_id = 0;
                        }
                        if ( ! empty($discovery[0]->attributes->match_options)) {
                            $data->match_options = $discovery[0]->attributes->match_options;
                        }
                    }
                    if (empty($this->response->data[0]->attributes->discovery_id)) {
                        $do_not_use = array('name', 'org_id', 'description', 'options', 'edited_by', 'edited_date');
                        $discovery_scan_options = $this->m_discovery_scan_options->read($this->config->config['discovery_default_scan_option']);
                        if ( ! empty($discovery_scan_options->data)) {
                            foreach ($discovery_scan_options->data as $item) {
                                foreach ($item as $key => $value) {
                                    if ( ! in_array($key, $do_not_use)) {
                                        $data->scan_options->{$key} = $value;
                                    }
                                }
                            }
                        }
                    }
                    if (empty($data->other->match->match_hostname)) {
                        // use the defaults
                        $match_rules = array('match_dbus', 'match_dns_fqdn', 'match_fqdn', 'match_hostname', 'match_hostname_dbus', 'match_hostname_serial', 'match_hostname_uuid', 'match_ip', 'match_mac', 'match_mac_vmware', 'match_serial', 'match_serial_type', 'match_sysname', 'match_sysname_serial', 'match_uuid');
                        foreach ($match_rules as $item) {
                            $data->match_options->{$item} = @$this->config->config[$item];
                        }
                    }
                    $discovery_id = $this->m_discoveries->create($data);
                    $this->m_discoveries->queue($discovery_id);
                    $this->load->model('m_queue');
                    $this->m_queue->start();
                    sleep(2);
                }
            }
            $message = htmlentities('Discovery started for devices: ' . htmlentities(implode(', ', $device_names)));
            $this->session->set_flashdata('success', $message);
            unset($this->response->data);
            $this->response->data = array();
            if ($this->response->meta->format !== 'json') {
                redirect('devices');
            } else {
                $this->response->data = $this->m_discoveries->read($discovery_id);
                output($this->response);
            }
        } elseif ($this->response->meta->sub_resource === 'attachment') {
            $this->response->meta->action = 'create_form_attachment';
            $this->response->data = array();
            $temp = new stdClass();
            $temp->type = $this->response->meta->collection;
            $this->response->data[] = $temp;
            unset($temp);
            output($this->response);
        } elseif ($this->response->meta->sub_resource === 'image') {
            $this->response->meta->action = 'create_form_image';
            $this->response->data = array();
            $temp = new stdClass();
            $temp->type = $this->response->meta->collection;
            $this->response->data[] = $temp;
            unset($temp);
            output($this->response);
        } else {
            redirect('devices');
        }
        $log = new stdClass();
        $log->type = 'access';
        $log->detail = json_encode($this->response->meta);
        $log->severity = 7;
        $log->status = 'success';
        $log->summary = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
        stdLog($log);
    }

    /**
     * [sub_resource_create description]
     * @return [type] [description]
     */
    private function sub_resource_create()
    {
        if ($this->m_devices->sub_resource_create()) {
            $this->response->meta->succeeded = true;
        } else {
            $this->response->meta->succeeded = false;
        }
        if ($this->response->meta->format === 'json') {
            output($this->response);
        } else {
            if ( ! empty($this->response->meta->id)) {
                redirect('devices/' . $this->response->meta->id);
            } else {
                redirect('devices');
            }
        }
        $log = new stdClass();
        $log->type = 'access';
        $log->detail = json_encode($this->response->meta);
        $log->severity = 7;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
        stdLog($log);
    }

    /**
     * [sub_resource_download description]
     * @return [type] [description]
     */
    private function sub_resource_download()
    {
        if (empty($this->response->meta->sub_resource_id)) {
            $this->response->meta->sub_resource_id = 0;
        }
        $attachment = $this->m_devices->read_sub_resource($this->response->meta->id, $this->response->meta->sub_resource, $this->response->meta->sub_resource_id, '*', '', '', '');
        $this->load->helper('file');
        header('Content-Type: '.get_mime_by_extension($attachment[0]->attributes->filename));
        header('Content-Disposition: attachment;filename="'.basename($attachment[0]->attributes->filename).'"');
        header('Cache-Control: max-age=0');
        readfile($_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images/' . basename($attachment[0]->attributes->filename));
    }

    /**
     * [delete description]
     * @return [type] [description]
     */
    private function delete()
    {
        $this->response->meta->format = 'json';
        $this->response->meta->debug = true;
        output($this->response);
        $log = new stdClass();
        $log->type = 'access';
        $log->detail = json_encode($this->response->meta);
        $log->severity = 7;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
        stdLog($log);
    }

    /**
    * Supply a HTML form for the user to upload a collection of objects in CSV
    *
    * @access public
    * @return NULL
    */
    public function import_form()
    {
        include 'include_import_form.php';
    }

    /**
    * Process the supplied data and create a new object
    *
    * @access public
    * @return NULL
    */
    public function import()
    {
        include 'include_import.php';
    }

    /**
    * Accept a device id and provide a JSON export of most fields
    *
    * @access public
    * @return NULL
    */
    public function export()
    {
        $this->response->meta->format = 'json';
        $this->response->meta->include = 'bios,certificate,disk,dns,ip,log,memory,module,monitor,motherboard,netstat,network,nmap,optical,pagefile,partition,policy,print_queue,processor,radio,route,san,scsi,server,server_item,service,share,software,software_key,sound,task,usb,user,user_group,variable,video,vm,windows';
        $device = new stdClass();

        $sql = 'SELECT * FROM system WHERE id = ?';
        $query = $this->db->query($sql, array(intval($this->response->meta->id)));
        $result = $query->result();
        unset($result[0]->id);
        unset($result[0]->first_seen);
        unset($result[0]->last_seen);
        foreach ($result[0] as $key => $value) {
            if (empty($value)) {
                unset($result[0]->{$key});
            }
        }
        $device->sys = $result[0];

        $temp = explode(',', $this->response->meta->include);
        foreach ($temp as $table) {
            $sql = "SELECT * FROM `{$table}` WHERE system_id = ? AND current = 'y'";
            $query = $this->db->query($sql, array(intval($this->response->meta->id)));
            $result = $query->result();
            if ( ! empty($result)) {
                for ($i=0; $i < count($result); $i++) {
                    unset($result[$i]->id);
                    unset($result[$i]->system_id);
                    unset($result[$i]->current);
                    unset($result[$i]->first_seen);
                    unset($result[$i]->last_seen);
                }
                $device->{$table} = $result;
            }
        }
        echo json_encode($device);
    }
}
