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
* @version   1.12.8
* @link      http://www.open-audit.org
*/

/**
* Base Object devices
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
* @return   NULL
 */
class devices extends MY_Controller_new
{
    public function __construct()
    {
        parent::__construct();
        // log the attempt
        $log = new stdClass();
        $log->status = 'start';
        $log->function = strtolower(__METHOD__);
        stdlog($log);

        # ensure our URL doesn't have a trailing / as this may break image (and other) relative paths
        $this->load->helper('url');
        if (strrpos($_SERVER['REQUEST_URI'], '/') === strlen($_SERVER['REQUEST_URI'])-1) {
            redirect(uri_string());
        }

        $this->load->helper('network');
        $this->load->helper('output');
        $this->load->helper('error');
        $this->load->helper('input');
        $this->load->model('m_devices');
        $this->load->model('m_orgs');

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
        $this->response->meta->filtered = count($this->response->data);
        if ($this->response->meta->format == 'screen') {
            $this->load->model('m_queries');
            $this->response->included = $this->m_queries->collection();
        }
        output($this->response);
        $log = new stdClass();
        $log->detail = json_encode($this->response->meta);
        $log->severity = 6;
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
            $this->response->meta->include = 'additional_fields,audit_log,bios,change_log,credential,discovery_log,disk,dns,edit_log,file,ip,location,log,memory,module,monitor,motherboard,netstat,network,nmap,optical,partition,pagefile,print_queue,processor,purchase,route,san,scsi,service,server,server_item,share,software,software_key,sound,task,user,user_group,variable,video,vm,windows';
        }

        if ($this->response->meta->sub_resource != '') {
            #$this->response->data = $this->m_devices->read_sub_resource($this->response->meta->id, $this->response->meta->sub_resource, $this->response->meta->sub_resource_id, $this->response->meta->properties, '');
            $this->response->data = $this->m_devices_components->read($this->response->meta->id, $this->response->meta->current, $this->response->meta->sub_resource, $this->response->meta->filter, $this->response->meta->properties, $this->response->meta->group);
            $this->response->meta->format = 'json';
        } else {
            $this->response->data = $this->m_devices->read();
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
                    $result = false;
                    $result = $this->m_devices->read_sub_resource($this->response->meta->id, $table, $this->response->meta->sub_resource_id, $this->response->meta->properties, '');
                    if ($result) {
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
        $log->detail = json_encode($this->response->meta);
        $log->severity = 6;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action); 
        stdLog($log);
    }

    private function create()
    {
        $this->m_devices->update();
        if ($this->response->meta == 'json') {
            output($this->response);
        } else {
            redirect('devices');
        }
        $log = new stdClass();
        $log->detail = json_encode($this->response->meta);
        $log->severity = 5;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action); 
        stdLog($log);
    }

    private function update()
    {
        $this->m_devices->update();
        # TODO - replace this old function
        $details = new stdClass();
        $details->id = $this->response->meta->id;
        $this->load->model("m_oa_group");
        $this->m_oa_group->update_system_groups($details);

        if ($this->response->meta->format == 'json') {
            $this->response->data = $this->m_devices->read();
            output($this->response);
        }
        $log = new stdClass();
        $log->detail = json_encode($this->response->meta);
        $log->severity = 5;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action); 
        stdLog($log);
        exit();
    }

    private function create_form()
    {
        output($this->response);
        $log = new stdClass();
        $log->detail = json_encode($this->response->meta);
        $log->severity = 6;
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
        $log->detail = json_encode($this->response->meta);
        $log->severity = 6;
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
        $log->detail = json_encode($this->response->meta);
        $log->severity = 6;
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
            $this->response->included = array_merge($this->response->included, $this->m_orgs->collection());
            $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
            unset($temp);
            $temp = @$this->m_fields->collection();
            if (! empty($temp)) {
                $this->response->included = array_merge($this->response->included, $this->m_fields->collection());
            }
            include 'include_device_types.php';
            # TODO - change the below to use this->response->included
            $this->response->types = $device_types;
        } elseif ($this->response->meta->sub_resource == 'credential') {
            $this->response->meta->action = 'create_form_credentials';
        }
        output($this->response);
        $log = new stdClass();
        $log->detail = json_encode($this->response->meta);
        $log->severity = 6;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action); 
        stdLog($log);
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
        $log->detail = json_encode($this->response->meta);
        $log->severity = 5;
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
            $this->response->data = $this->m_devices->read();
            $data = new stdClass();
            $data->name = $this->response->data[0]->attributes->name;
            $data->subnet = ip_address_from_db($this->response->data[0]->attributes->ip);
            $data->system_id = $this->response->data[0]->attributes->id;
            $data->org_id = $this->response->data[0]->attributes->org_id;
            $data->discard = 'y';
            $data->network_address = 'http://' . $this->config->config['default_network_address'] . '/open-audit/';
            $this->load->model('m_discoveries');
            $discovery_id = $this->m_discoveries->create($data);
            $this->m_discoveries->execute($discovery_id);
            redirect('devices/'.$this->response->data[0]->attributes->id);
        } else {
            redirect('devices');
        }
        $log = new stdClass();
        $log->detail = json_encode($this->response->meta);
        $log->severity = 6;
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
        $log->detail = json_encode($this->response->meta);
        $log->severity = 5;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action); 
        stdLog($log);
    }

    private function delete()
    {
        $this->response->meta->format = 'json';
        $this->response->meta->debug = true;
        output($this->response);
        $log = new stdClass();
        $log->detail = json_encode($this->response->meta);
        $log->severity = 5;
        $log->status = 'finish';
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action); 
        stdLog($log);
    }
}
