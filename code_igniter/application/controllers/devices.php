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
* @version   2.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Object Devices
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class devices extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('network');
        $this->load->model('m_devices');
        inputRead();
        $this->output->url = $this->config->item('oa_web_index');
    }

    public function index()
    {
    }

    public function _remap()
    {
        $this->{$this->response->meta->action}();
    }

    private function collection()
    {
        if ($this->response->meta->sub_resource != '' and  ($this->response->meta->sub_resource != 'report' and $this->response->meta->sub_resource != 'query' and $this->response->meta->sub_resource != 'group')) {
            $this->response->data = $this->m_devices->collection_sub_resource();
        } else if ($this->response->meta->sub_resource != '' and $this->response->meta->sub_resource == 'report') {
            $this->response->data = $this->m_devices->report();
        } else if ($this->response->meta->sub_resource != '' and $this->response->meta->sub_resource == 'query') {
            $this->response->data = $this->m_devices->query();
        } else if ($this->response->meta->sub_resource != '' and $this->response->meta->sub_resource == 'group') {
            $this->response->data = $this->m_devices->group();
        } else {
            if (!empty($this->response->meta->groupby)) {
                $this->response->data = $this->m_devices->collection_group_by();
            } else {
                $this->response->data = $this->m_devices->collection();
            }
        }
        if (is_array($this->response->data)) {
            $this->response->meta->filtered = count($this->response->data);
        } else {
            $this->response->meta->filtered = 0;
        }
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



    private function read()
    {
        $this->load->model('m_orgs');
        $this->load->model('m_locations');
        $this->load->model('m_devices_components');
        // if we're displaying a web page, get ALL the data
        if (($this->response->meta->format == 'screen' and $this->response->meta->include == '') or $this->response->meta->include == '*' or $this->response->meta->include == 'all') {
            $this->response->meta->include = 'application,attachment,audit_log,bios,change_log,credential,discovery_log,disk,dns,edit_log,fields,file,image,ip,location,log,memory,module,monitor,motherboard,netstat,network,nmap,optical,pagefile,partition,print_queue,processor,purchase,rack_devices,route,san,scsi,server,server_item,service,share,software,software_key,sound,task,user,user_group,variable,video,vm,windows';
        }
        if ($this->response->meta->sub_resource != '') {
            if ($this->response->meta->sub_resource == 'partition_graph') {
                $this->response->data = $this->m_devices_components->graph($this->response->meta->id, $this->response->meta->sub_resource_id, 'partition', 30);
                $this->response->meta->action = 'read_partition_graph';
            } else {
                #$this->response->data = $this->m_devices->read_sub_resource($this->response->meta->id, $this->response->meta->sub_resource, $this->response->meta->sub_resource_id, $this->response->meta->properties, '');
                $this->response->data = $this->m_devices_components->read($this->response->meta->id, $this->response->meta->current, $this->response->meta->sub_resource, $this->response->meta->filter, $this->response->meta->properties, $this->response->meta->group);
                $this->response->meta->format = 'json';
            }
        } else {
            $this->response->data = $this->m_devices->read($this->response->meta->id);
            # create the related links
            if (!empty($this->response->data)) {
                $related = $this->m_devices->get_related_tables();
                $this->response->data[0]->links->relationships = $related;
                unset($related);
            }
            # get any additionally included tables
            if (!empty($this->response->meta->include) and !empty($this->response->data)) {
                $temp = explode(',', $this->response->meta->include);
                foreach ($temp as $table) {
                    if ($table != 'fields' and $table != 'application' and $table != 'rack_devices') {
                        $result = false;
                        $result = $this->m_devices->read_sub_resource(
                            $this->response->meta->id, #id
                            $table, #sub_resource
                            $this->response->meta->sub_resource_id, # sub id
                            $this->response->meta->properties, # properties
                            '', # sort
                            $this->response->meta->current, # current
                            $this->response->meta->limit # limit
                        );
                        if ($result !== false) {
                            $this->response->included = array_merge($this->response->included, $result);
                        }
                    } else if ($table == 'fields') {
                        $result = false;
                        $result = $this->m_devices->get_device_fields($this->response->meta->id);
                        $this->response->included = array_merge($this->response->included, $result);
                    } else if ($table == 'application') {
                        $result = false;
                        $result = $this->m_devices->get_device_applications($this->response->meta->id);
                        $this->response->included = array_merge($this->response->included, $result);
                    } else if ($table == 'rack_devices') {
                        $result = false;
                        $result = $this->m_devices->get_device_rack($this->response->meta->id);
                        $this->response->included = array_merge($this->response->included, $result);
                    }
                }
            }
        }
        $this->response->meta->total = count($this->response->data);
        $this->response->meta->filtered = count($this->response->data);
        if ($this->response->meta->format == 'screen') {
            // return a list of all orgs and locations so we can create the edit functionality on the web page
            if (isset($this->response->data[0]->attributes->org_id)) {
                $this->response->included = array_merge($this->response->included, $this->m_orgs->collection());
            }
            if (isset($this->response->data[0]->attributes->location_id)) {
                $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
            }
            # Below removed as now included in output_helper
            #$this->load->model('m_collection');
            #$this->response->included = array_merge($this->response->included, $this->m_collection->collection('attributes'));
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
        $log = new stdClass();
        $log->type = 'access';
        $log->detail = json_encode($this->response->meta);
        $log->severity = 7;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
        stdLog($log);
    }

    private function create()
    {
        if (empty($_POST['input_type']) or $_POST['input_type'] == 'manual_input') {
            $device = new stdClass();
            foreach ($this->response->meta->received_data->attributes as $key => $value) {
                if ($value != '') {
                    $device->$key = $value;
                }
            }
            $device->last_seen_by = 'web form';
            $device->last_seen = $this->config->config['timestamp'];
            $this->load->model('m_devices');
            $id = $this->m_devices->create($device);
            $device->id = $id;
            $mac = '';
            if (!empty($device->mac)) {
                $mac = strtolower($device->mac);
            }
            if (!empty($device->ip) and !empty($device->netmask)) {
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
                    $input = new stdClass();
                    $input->item = array();
                    $input->item[] = $device_ip;
                    $error = $this->m_devices_components->process_component('ip', $device, $input);
                }
            }

            if ($this->response->meta->format == 'screen') {
                redirect('devices/' . $id);
            } else {
                $this->response->data = $this->m_devices->read($id);
                output($this->response);
            }
        }

        if (!empty($_POST['input_type']) and $_POST['input_type'] == 'audit_input') {
            unset($_POST['data']);
            unset($_FILES);
            $input = $_POST['upload_input'];
            $discovery_id = null;
            include "include_input_devices.php";
            if ($this->response->meta->format == 'screen') {
                redirect('devices/' . $details->id);
            } else {
                $this->response->data = $this->m_devices->read($details->id);
                output($this->response);
            }
        }

        if (!empty($_POST['input_type']) and $_POST['input_type'] == 'file_input') {
            unset($_POST['data']);
            $discovery_id = null;
            include "include_input_devices.php";
            if ($this->response->meta->format == 'screen') {
                redirect('devices/' . $details->id);
            } else {
                $this->response->data = $this->m_devices->read($details->id);
                output($this->response);
            }
        }
    }

    private function update()
    {
        $this->m_devices->update();
        # TODO - replace this old function
        if ($this->response->meta->format == 'json') {
            $this->response->data = $this->m_devices->read($this->response->meta->id);
            output($this->response);
        }
        $log = new stdClass();
        $log->type = 'access';
        $log->detail = json_encode($this->response->meta);
        $log->severity = 7;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
        stdLog($log);
        exit();
    }

    private function create_form()
    {
        $this->response->included = array_merge($this->response->included, $this->m_orgs->collection());
        $this->load->model('m_locations');
        $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
        $this->load->model('m_collection');
        $this->response->included = array_merge($this->response->included, $this->m_collection->collection('attributes'));
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

    private function update_form()
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

    private function bulk_update_form()
    {
        $sql = "SELECT id, icon, type, name, domain, ip, description, os_family, status FROM system WHERE id in (" . $this->response->meta->ids . ")";
        $query = $this->db->query($sql);
        # TODO - change the below to use this->response->included
        $this->response->devices = $query->result();

        if (empty($this->response->meta->sub_resource)) {
            $this->load->model('m_locations');
            $this->load->model('m_fields');
            $this->load->model('m_attributes');
            $this->response->included = array_merge($this->response->included, $this->m_attributes->collection());
            $this->response->included = array_merge($this->response->included, $this->m_orgs->collection());
            $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
            unset($temp);
            $temp = @$this->m_fields->collection();
            if (!empty($temp)) {
                $this->response->included = array_merge($this->response->included, $this->m_fields->collection());
            }
        } elseif ($this->response->meta->sub_resource == 'credential') {
            $this->response->meta->action = 'create_form_credentials';
        }
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

    private function sub_resource_read()
    {
        $this->response->data = $this->m_devices->read_sub_resource($this->response->meta->id, $this->response->meta->sub_resource, $this->response->meta->sub_resource_id, $this->response->meta->properties, '', $this->response->meta->current);
        $this->response->meta->total = count($this->response->data);
        $this->response->meta->filtered = $this->response->meta->total;
        output($this->response);
    }

    private function sub_resource_delete()
    {
        $this->m_devices->sub_resource_delete($this->response->meta->id, $this->response->meta->sub_resource, $this->response->meta->sub_resource_id);
        if ($this->response->meta->format == 'json') {
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

    private function sub_resource_create_form()
    {
        if ($this->response->meta->sub_resource == 'credential') {
            $this->response->meta->action = 'create_form_credentials';
            $this->response->data = array();
            $temp = new stdClass();
            $temp->type = $this->response->meta->collection;
            $this->response->data[] = $temp;
            unset($temp);
            output($this->response);
        } elseif ($this->response->meta->sub_resource == 'discovery') {
            if ($this->config->config['default_network_address'] == '') {
                $message = 'Network Address must be set in the configuration before calling Bulk Edit -> Discover.';
                $this->session->set_flashdata('error', $message);
                # toto - add a JSON error here for OAE
                redirect('devices');
            }
            $ids = array();
            if (!empty($this->response->meta->id)) {
                $ids[] = intval($this->response->meta->id);
            }
            if (!empty($this->response->meta->ids)) {
                $ids = array_merge($ids, explode(',', $this->response->meta->ids));
            }
            $device_names = array();
            foreach ($ids as $id) {
                $this->response->data = $this->m_devices->read($id);
                $data = new stdClass();
                $data->name = $this->response->data[0]->attributes->name;
                $device_names[] = $this->response->data[0]->attributes->name;
                if (empty($data->name)) {
                    $data->name = ip_address_from_db($this->response->data[0]->attributes->ip);
                }
                $data->system_id = $this->response->data[0]->attributes->id;
                $data->org_id = $this->response->data[0]->attributes->org_id;
                $data->type = 'subnet';
                $data->discard = 'y';
                $data->network_address = 'http://' . $this->config->config['default_network_address'] . '/open-audit/';
                $data->other = new stdClass();
                $data->other->subnet = ip_address_from_db($this->response->data[0]->attributes->ip);
                $this->load->model('m_discoveries');
                $this->load->model('m_collection');
                $discovery_id = $this->m_collection->create($data, 'discoveries');
                $this->m_discoveries->execute($discovery_id);
            }
            $message = htmlentities('Discovery started for devices: ' . htmlentities(implode(', ', $device_names)));
            $this->session->set_flashdata('success', $message);
            unset($this->response->data);
            $this->response->data = array();
            if ($this->response->meta->format != 'json') {
                #redirect('devices/'.$this->response->data[0]->attributes->id);
                redirect('devices');
            } else {
                output($this->response);
            }
        } elseif ($this->response->meta->sub_resource == 'attachment') {
            $this->response->meta->action = 'create_form_attachment';
            $this->response->data = array();
            $temp = new stdClass();
            $temp->type = $this->response->meta->collection;
            $this->response->data[] = $temp;
            unset($temp);
            output($this->response);
        } elseif ($this->response->meta->sub_resource == 'image') {
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
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
        stdLog($log);
    }

    private function sub_resource_create()
    {
        if ($this->m_devices->sub_resource_create()) {
            $this->response->meta->succeeded = true;
        } else {
            $this->response->meta->succeeded = false;
        }
        if ($this->response->meta->format == 'json') {
            output($this->response);
        } else {
            if (!empty($this->response->meta->id)) {
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

    private function sub_resource_download()
    {
        $attachment = $this->m_devices->read_sub_resource($this->response->meta->id, $this->response->meta->sub_resource, $this->response->meta->sub_resource_id);
        $this->load->helper('file');
        if (php_uname('s') == 'Windows NT') {
            $i = explode('\\', $attachment[0]->attributes->filename);
        } else {
            $i = explode('/', $attachment[0]->attributes->filename);
        }
        $filename = $i[count($i)-1];
        $filename = preg_replace('/'.$this->response->meta->id.'_/', '', $filename, 1);
        header('Content-Type: '.get_mime_by_extension($attachment[0]->attributes->filename));
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        readfile($attachment[0]->attributes->filename);
    }

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
}
