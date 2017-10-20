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
 * @version   2.0.10
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class main extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_users');
        $this->load->model('m_roles');
        $this->roles = $this->m_roles->collection();
    }

    public function index()
    {
        $this->load->helper('input');
        $this->load->helper('output');
        $this->load->helper('error');
        inputRead();
        if ($this->response->meta->format == 'json') {
            // JSON request to the base URL
            // return a document providing futher links
            $this->response->links->related = array();
            $this->response->links->related[]['href'] = $this->response->links->self . 'devices';
            $this->response->links->related[]['href'] = $this->response->links->self . 'networks';
            $this->response->links->related[]['href'] = $this->response->links->self . 'credentials';
            output($this->response);
        } else {
            $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
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
        if ($level === 'list') {
            $sql = 'SELECT id, concat("/omk/oae/node_config_documents/", id) as show_resource FROM system WHERE status = "production"';
        }
        if ($level === 'min') {
            $sql = 'SELECT id AS `system_id`, hostname, ip, os_name AS `man_os_name`, type AS `man_type` FROM system WHERE status = "production"';
        }
        if ($level === 'select') {
            $sql = 'SELECT id AS `system_id`, hostname, domain, ip, os_group AS `man_os_group`, os_family AS `man_os_family`, os_name AS `man_os_name`, type AS `man_type`, serial AS `man_serial`, model AS `man_model`, manufacturer AS `man_manufacturer`, memory_count AS `pc_memory`, processor_count AS `pc_num_processor`, environment AS `man_environment`, clss AS `man_class` FROM system WHERE status = "production"';
        }
        if ($level === 'max') {
            $sql = 'SELECT * FROM system WHERE status = "production"';
        }
        $query = $this->db->query($sql);
        $result = $query->result();
        for ($count = 0; $count<count($result); $count++) {
            $result[$count]->ip = $this->ip_address_from_db($result[$count]->ip);
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
                        $result[$count]->$key = $this->ip_address_from_db($result[$count]->$key);
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
            $this->load->model('m_devices_components');
            $document = array();
            $list = array( 'system');
            foreach ($list as $table) {
                $sql = 'SELECT system.id AS `system_id`, system.hostname, system.fqdn, system.ip, system.type AS `man_type`, system.class AS `man_class`, system.os_version, system.function AS `man_function`, system.environment AS `man_environment`, system.status AS `man_status`, system.description AS `man_description`, system.os_group AS `man_os_group`, system.os_family AS `man_os_family`, system.os_name AS `man_os_name`, system.manufacturer AS `man_manufacturer`, system.model AS `man_model`, system.serial AS `nan_serial`, system.form_factor AS `man_form_factor`, system.vm_group AS `vm_group`, system.uptime, locations.name, system.last_seen, system.last_seen_by, system.icon, system.snmp_oid, system.sysDescr, system.sysObjectID, system.sysUpTime, system.sysContact, system.sysName, system.sysLocation FROM system LEFT JOIN locations ON system.location_id = locations.id WHERE system.id = ?';
                $data = array($system_id);
                $query = $this->db->query($sql, $data);
                $result = $query->result();
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
                                $result[$count]->$key = $this->ip_address_from_db($result[$count]->$key);
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
            $tables = array('bios', 'credentials', 'disk', 'dns', 'ip', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'optical', 'pagefile', 'partition', 'print_queue', 'processor', 'route', 'san', 'scsi', 'service', 'server', 'server_item', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
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
            $sql = 'SELECT id, concat("/omk/oae/node_config_documents/", id) as show_resource FROM system WHERE status = "production"';
            $query = $this->db->query($sql);
            $document = $query->result();
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
        $this->load->model('m_devices_components');
        if (isset($system_id) and $system_id != '') {
            $document = array();
            $sql = 'SELECT system.id AS `system_id`, system.hostname, system.fqdn, system.ip, system.type AS `man_type`, system.class AS `man_class`, system.os_version, system.function AS `man_function`, system.environment AS `man_environment`, system.status AS `man_status`, system.description AS `man_description`, system.os_group AS `man_os_group`, system.os_family AS `man_os_family`, system.os_name AS `man_os_name`, system.manufacturer AS `man_manufacturer`, system.model AS `man_model`, system.serial AS `nan_serial`, system.form_factor AS `man_form_factor`, system.vm_group AS `vm_group`, system.uptime, locations.name, system.last_seen, system.last_seen_by, system.icon, system.snmp_oid, system.sysDescr, system.sysObjectID, system.sysUpTime, system.sysContact, system.sysName, system.sysLocation FROM system LEFT JOIN locations ON system.location_id = locations.id WHERE system.id = ?';
            $data = array("$system_id");
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            if (!empty($result[0])) {
                $document["system"] = new stdclass();
                $document["system"] = array();
                $result[0]->ip = $this->ip_address_from_db($result[0]->ip);
                //$document["system"] = $result[0];
                $document["system"][] = $result[0];
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
                    $row->attributes->ip = $this->ip_address_from_db($row->attributes->ip);
                }
            }

            # special SQL for backwards compat with opAddress
            $sql = "/* main::api_node_config */ SELECT ip as ip_address_v4, '' as ip_address_v6, netmask as subnet, version as ip_address_version, ip.mac as net_mac_address, network.connection FROM ip LEFT JOIN network ON ip.system_id = network.system_id and ip.net_index = network.net_index WHERE ip.system_id = ? AND ip.current = 'y' AND ip.version = 4";
            $data = array($system_id);
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            foreach ($result as $row) {
                $row->ip_address_v4 = $this->ip_address_from_db($row->ip_address_v4);
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
            $sql = 'SELECT id, concat("/omk/oae/node_config_documents/", id) as show_resource FROM system WHERE status = "production"';
            $query = $this->db->query($sql);
            $document = $query->result();
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
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
        redirect('orgs/'.$this->data['id']);
    }

    # left here for backwards compat
    public function get_count()
    {
        // $sql = "SELECT count(*) as `count` FROM system";
        // $query = $this->db->query($sql, $data);
        // $result = $query->result();
        // echo intval($result[0]->count);
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
    }

    public function view_location()
    {
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
        redirect('locations/'.$this->data['id']);
    }

    public function edit_systems()
    {
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
        redirect('devices');
    }

    public function process_edit_systems()
    {
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
        redirect('devices');
    }

    public function list_groups()
    {
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
        redirect('summaries');
    }

    public function list_devices()
    {
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
        redirect('devices');
    }

    public function search()
    {
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
        redirect('summaries');
    }

    public function search_device()
    {
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
        redirect('summaries');
    }

    public function disk_graph()
    {
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
        redirect('devices');
    }

    public function system_summary()
    {
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
        redirect('devices/'.$this->data['id'].'?format=json');
    }

    public function system_display()
    {
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
        redirect('devices/'.$this->data['id']);
    }

    public function edit_user()
    {
        $this->session->set_flashdata('error', 'main/' . __FUNCTION__ . ' no longer exists, please update your bookmarks.');
        redirect('users');
    }

    public function ip_address_from_db($ip)
    {
        $ip_pre = $ip;
        if (($ip != "") and (!(is_null($ip)))) {
            $myip = explode(".", $ip);
            $myip[0] = ltrim($myip[0], "0");
            if ($myip[0] == "") {
                $myip[0] = "0";
            }
            if (isset($myip[1])) {
                $myip[1] = ltrim($myip[1], "0");
            }
            if (!isset($myip[1]) or $myip[1] == "") {
                $myip[1] = "0";
            }
            if (isset($myip[2])) {
                $myip[2] = ltrim($myip[2], "0");
            }
            if (!isset($myip[2]) or $myip[2] == "") {
                $myip[2] = "0";
            }
            if (isset($myip[3])) {
                $myip[3] = ltrim($myip[3], "0");
            }
            if (!isset($myip[3]) or $myip[3] == "") {
                $myip[3] = "0";
            }
            $ip = $myip[0].".".$myip[1].".".$myip[2].".".$myip[3];
        } else {
            $ip = "";
        }

        return $ip;
    }

}
