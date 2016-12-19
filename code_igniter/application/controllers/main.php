<?php
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

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * 
 * @version   1.14.2

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class main extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // log the attempt
        $this->load->helper('log');
        $log = new stdClass();
        $log->status = 'start';
        $log->function = strtolower(__METHOD__);
        stdlog($log);

        $this->load->model('m_users');
        $this->load->model('m_roles');
        $this->roles = $this->m_roles->collection();
    }

    public function index()
    {
        if (stripos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
            // JSON request to the base URL
            // return a document providing futher links
            $this->load->helper('input');
            $this->load->helper('output');
            $this->load->helper('error');
            inputRead();
            $this->response->links->related = array();
            $this->response->links->related[]['href'] = $this->response->links->self . 'devices';
            $this->response->links->related[]['href'] = $this->response->links->self . 'networks';
            $this->response->links->related[]['href'] = $this->response->links->self . 'credentials';
            output($this->response);
        } else {
            redirect('summaries');
        }
    }

    public function api_index()
    {
        $level = $this->uri->segment(3, 0);
        if (isset($_POST['level'])) {
            $level = $_POST['level'];
        }
        if ($level !== 'min' and $level !== 'select' and $level !== 'max') {
            $level = 'min';
        }
        $this->load->model('m_systems');
        $result = $this->m_systems->api_index($level);
        for ($count = 0; $count<count($result); $count++) {
            $result[$count]->ip = ip_address_from_db($result[$count]->ip);
        }
        echo json_encode($result);
        header('Content-Type: application/json');
        header('Cache-Control: max-age=0');
        header('HTTP/1.1 200 OK');
    }

    public function api_node_resource()
    {
        $system_id = $this->uri->segment(3, 0);
        if (isset($_POST['system_id'])) {
            $system_id = $_POST['system_id'];
        }
        $resource = $this->uri->segment(4, 'system');
        if (isset($_POST['resource'])) {
            $resource = $_POST['resource'];
        }
        $attribute = $this->uri->segment(5, '*');
        if (isset($_POST['attribute'])) {
            $attribute = $_POST['attribute'];
        }
        $this->load->model('m_devices_components');
        $result = $this->m_devices_components->read($system_id, 'y', $resource, '', $attribute);
        if (is_array($result)) {
            for ($count = 0; $count<count($result); $count++) {
                $result[$count]->system_id = $system_id;
                foreach ($result[$count] as $key => $value) {
                    // special cases - ip addresses are stored padded so they can be easily sorted. Remove the padding.
                    if ($key == 'ip' or
                        $key == 'destination'    or
                        $key == 'ip_address_v4'  or
                        $key == 'next_hop') {
                        $result[$count]->$key = ip_address_from_db($result[$count]->$key);
                    }
                    if ($key == 'ip_address_v4' and ($value == '000.000.000.000' or $value == '0.0.0.0')) {
                        $result[$count]->ip_address_v4 = '';
                    }
                }
            }
        }
        echo json_encode($result);
        header('Content-Type: application/json');
        header('Cache-Control: max-age=0');
    }

    public function api_node_config_new()
    {
        $system_id = $this->uri->segment(3, 0);
        if (isset($_POST['system_id'])) {
            $system_id = $_POST['system_id'];
        }

        if (isset($system_id) and $system_id != '') {
            $this->load->model('m_oa_general');
            $this->load->model('m_devices_components');
            $document = array();
            $list = array( 'system');
            foreach ($list as $table) {
                $result = $this->m_oa_general->get_system_document_api_new($table, $system_id);
                $document["$table"] = new stdclass();
                if (is_array($result) and count($result) != 0) {
                    #$document["$table"] = new stdclass();
                    for ($count = 0; $count<count($result); $count++) {
                        #$result[$count]->system_id = $system_id;
                        foreach ($result[$count] as $key => $value) {
                            // special cases - ip addresses are stored padded so they can be easily sorted. Remove the padding.
                            if ($key == 'ip' or
                                $key == 'destination'    or
                                $key == 'ip_address_v4'  or
                                $key == 'ip'  or
                                $key == 'next_hop') {
                                $result[$count]->$key = ip_address_from_db($result[$count]->$key);
                            }
                            if ($key == 'ip_address_v4' and ($value == '000.000.000.000' or $value == '0.0.0.0')) {
                                $result[$count]->ip_address_v4 = '';
                            }
                        }
                    }
                    #$document["$table"] = $result;
                }
                $document["$table"] = $result;
            }
            $tables = array('bios', 'disk', 'dns', 'ip', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'optical', 'pagefile', 'partition', 'print_queue', 'processor', 'route', 'san', 'scsi', 'service', 'server', 'server_item', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
            foreach ($tables as $table) {
                $document[$table] = $this->m_devices_components->read($system_id, 'y', $table);
            }
            $this->load->model("m_audit_log");
            $this->load->model("m_change_log");
            $this->load->model("m_edit_log");
            $document['audit_log'] = $this->m_audit_log->read($system_id);
            $document['change_log'] = $this->m_change_log->readDevice($system_id);
            $document['edit_log'] = $this->m_edit_log->read($system_id);
        } else {
            $this->load->model('m_systems');
            $document = $this->m_systems->api_index('list');
        }

        # device specific credentials
        $this->load->model('m_system');
        $this->load->library('encrypt');
        $credentials = $this->m_system->get_access_details($system_id);
        $creds = $this->encrypt->decode($credentials);
        $creds = json_decode($creds);
        if ($creds) {
            $document['credentials'][0] = $creds;
        }
        if (count($document) != 0) {
            echo json_encode($document);
        }
        header('Content-Type: application/json');
        header('Cache-Control: max-age=0');
    }

    public function api_node_config()
    {
        $system_id = $this->uri->segment(3, 0);
        if (isset($_POST['system_id'])) {
            $system_id = $_POST['system_id'];
        }
        $this->load->model('m_oa_general');
        $this->load->model('m_devices_components');
        $this->load->model('m_systems');
        if (isset($system_id) and $system_id != '') {
            $document = array();
            $list = array('system');
            foreach ($list as $table) {
                $result = $this->m_oa_general->get_system_document_api($table, $system_id);
                if (is_array($result) and count($result) != 0) {
                    $document["$table"] = new stdclass();
                    for ($count = 0; $count<count($result); $count++) {
                        #$result[$count]->system_id = $system_id;
                        foreach ($result[$count] as $key => $value) {
                            // special cases - ip addresses are stored padded so they can be easily sorted. Remove the padding.
                            if ($key == 'ip' or
                                $key == 'destination'    or
                                $key == 'ip_address_v4'  or
                                $key == 'next_hop') {
                                $result[$count]->$key = ip_address_from_db($result[$count]->$key);
                            }
                            if ($key == 'ip_address_v4' and ($value == '000.000.000.000' or $value == '0.0.0.0')) {
                                $result[$count]->ip_address_v4 = '';
                            }
                        }
                    }
                    $document["$table"] = $result;
                }
            }
            $tables = array('bios', 'disk', 'dns', 'ip', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'optical', 'partition', 'print_queue', 'processor', 'route', 'san', 'scsi', 'service', 'share', 'software', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
            foreach ($tables as $table) {
                $temp = $this->m_devices_components->read($system_id, 'y', $table);
                if (!empty($temp)) {
                    $document[$table] = $temp;
                }
            }

            if (!empty($document['ip'])) {
                foreach($document['ip'] as $row) {
                    $row->attributes->ip_padded = $row->attributes->ip;
                    $row->attributes->ip = ip_address_from_db($row->attributes->ip);
                }
            }

            # special SQL for backwards compat with opAddress
            $sql = "/* main::api_node_config */ SELECT ip as ip_address_v4, '' as ip_address_v6, netmask as subnet, version as ip_address_version, ip.mac as net_mac_address, network.connection FROM ip LEFT JOIN network ON ip.system_id = network.system_id and ip.net_index = network.net_index WHERE ip.system_id = ? AND ip.current = 'y' AND ip.version = 4";
            $data = array($system_id);
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            foreach ($result as $row) {
                $row->ip_address_v4 = ip_address_from_db($row->ip_address_v4);
            }
            $document['sys_hw_network_card_ip'] = $result;
            $sql = "/* main::api_node_config */ SELECT ip as ip_address_v6, '' as ip_address_v4, cidr as subnet, version as ip_address_version, ip.mac as net_mac_address, network.connection FROM ip LEFT JOIN network ON ip.system_id = network.system_id and ip.net_index = network.net_index WHERE ip.system_id = ? AND ip.current = 'y' AND ip.version = 6";
            $data = array($system_id);
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            foreach ($result as $row) {
                array_push($document['sys_hw_network_card_ip'], $row);
            }

            if (isset($document['sys_hw_network_card_ip']) and count($document['sys_hw_network_card_ip']) == 0) {
                unset($document['sys_hw_network_card_ip']);
            }

            $sql = "/* main::api_node_config */ SELECT id as net_id, network.system_id, mac as net_mac_address, manufacturer as net_manufacturer, model as net_model, description as net_description, alias as net_alias, ip_enabled as net_ip_enabled, net_index, dhcp_enabled as net_dhcp_enabled, dhcp_server as net_dhcp_server, dhcp_lease_obtained as net_dhcp_lease_obtained, dhcp_lease_expires as net_dhcp_lease_expires, dns_host_name as net_dns_host_name, dns_server as net_dns_server, dns_domain as net_dns_domain, dns_domain_reg_enabled as net_dns_domain_reg_enabled, type as net_adapter_type, connection as net_connection_id, connection_status as net_connection_status, speed as net_speed, slaves as net_slaves, ifadminstatus, iflastchange FROM network WHERE system_id = ? and current = 'y'";
            $data = array($system_id);
            $query = $this->db->query($sql, $data);
            $document['sys_hw_network_card'] = $query->result();

            if (isset($document['sys_hw_network_card']) and count($document['sys_hw_network_card']) == 0) {
                unset($document['sys_hw_network_card']);
            }
            # End of special opAddress tables
        } else {
            $document = $this->m_systems->api_index('list');
        }
        if (count($document) == 0) {
            $document['errors'] = array();
            $error = new stdClass();
            $error->code = "ERR-0002";
            $error->status = "HTTP/1.1 404 Not Found";
            $error->severity = 3;
            $error->title = "No object could be retrieved when devices called read.";
            $error->detail = "When calling this function an identifier (usually but not always an integer based id) should be supplied. The supplied item was either blank, not an integer based id or we could not determine the corresponding object (or the object does not exist) based on the details provided.";
            $error->severity_text = "error";
            $error->link = "/open-audit/index.php/errors/ERR-0002";
            $document['errors'][] = $error;
            #header("HTTP/1.1 404 Not Found");
        }
        echo json_encode($document);
        header('Content-Type: application/json');
        header('Cache-Control: max-age=0');
    }

    public function view_org()
    {
        redirect('orgs/'.$this->data['id']);
    }

    # left here for backwards compat
    public function get_count()
    {
        $sql = "SELECT count(*) as `count` FROM system";
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        echo intval($result[0]->count);
    }

    public function view_location()
    {
        redirect('locations/'.$this->data['id']);
    }

    public function edit_systems()
    {
        redirect('devices');
    }

    public function process_edit_systems()
    {
        redirect('devices');
    }

    public function list_groups()
    {
        redirect('summaries');
    }

    public function list_devices()
    {
        redirect('devices');
    }

    public function search()
    {
        redirect('summaries');
    }

    public function search_device()
    {
        redirect('summaries');
    }

    public function disk_graph()
    {
        $this->load->model("m_system");
        $this->load->model("m_devices_components");
        $this->data['system_id'] = $this->uri->segment(3, 0);
        $this->data['partition_id'] = $this->uri->segment(4, 0);
        $this->data['days'] = $this->uri->segment(5, 0);
        if ($this->data['days'] > "0") {
            //
        } else {
            $this->data['days'] = "30";
        }
        $this->data['query'] = $this->m_devices_components->graph($this->data['system_id'], $this->data['partition_id'], 'partition', $this->data['days']);
        $this->data['count'] = count($this->data['query']);
        $this->data['include'] = 'v_partition_graph';
        $this->data['sortcolumn'] = '0';
        $system_name = $this->m_system->get_system_hostname($this->data['system_id']);
        $this->data['heading'] = 'Storage use for '.$system_name;
        $this->data['partition_details'] = $this->m_devices_components->read($this->data['system_id'], 'y', 'partition', 'AND id = \'' . $this->data['partition_id'] . '\'');
        $this->load->view('v_template', $this->data);
    }

    public function system_summary()
    {
        # outputs a JSON formatted summary of an individual system
        # designed to be called from Open-AudIT Enterprise
        redirect('devices/'.$this->data['id'].'?format=json');
    }

    public function system_display()
    {
        redirect('devices/'.$this->data['id']);
    }

    public function edit_user()
    {
        redirect('users');
    }

}
