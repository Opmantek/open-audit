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
 * @version 1.6.2
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
        $log_details = new stdClass();
        $log_details->severity = 6;
        stdlog($log_details);
        unset($log_details);
    }

    public function index()
    {
        if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
            // JSON request to the base URL
            // return a document providing futher links
            $response = new stdClass();
            $response->status = 'success';
            $response->links = array(
                array('rel' => 'groups', 'href' => $this->config->item('basic_url').'/groups', 'description' => 'List the Groups'),
                array('rel' => 'devices', 'href' => $this->config->item('basic_url').'/devices', 'description' => 'List the Devices'),
                array('rel' => 'locations', 'href' => $this->config->item('basic_url').'/locations', 'description' => 'List the Locations'),
                array('rel' => 'reports', 'href' => $this->config->item('basic_url').'/reports', 'description' => 'List the Reports'), );
            echo json_encode($response);
            header('Content-Type: application/json');
            header('Cache-Control: max-age=0');
            header('HTTP/1.1 200 OK');
        } else {
            redirect('main/list_groups/');
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
            $result[$count]->man_ip_address = ip_address_from_db($result[$count]->man_ip_address);
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
        $this->load->model('m_oa_general');
        $result = $this->m_oa_general->get_system_attribute_api($resource, $attribute, $system_id);
        if (is_array($result)) {
            for ($count = 0; $count<count($result); $count++) {
                $result[$count]->system_id = $system_id;
                foreach ($result[$count] as $key => $value) {
                    // special cases - ip addresses are stored padded so they can be easily sorted. Remove the padding.
                    if ($key == 'man_ip_address' or
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

    public function api_node_config_history()
    {
        $system_id = $this->uri->segment(3, 0);
        if (isset($_POST['system_id'])) {
            $system_id = $_POST['system_id'];
        }

        $table = $this->uri->segment(4, 0);
        if (isset($_POST['table'])) {
            $table = $_POST['table'];
        }

        if (isset($system_id) and $system_id != '') {
            $this->load->model('m_oa_general');
            $document = array();
            // $list = array(
            // 	'system', 'sys_sw_netstat_history_full', 'sys_sw_netstat_history_delta',
            // 	'sys_sw_service_history_full', 'sys_sw_service_history_delta',
            // 	'sys_sw_software_history_full', 'sys_sw_software_history_delta');
            $list = array("$table");

            foreach ($list as $table) {
                $result = $this->m_oa_general->get_system_document_api_history($table, $system_id);
                if (is_array($result) and count($result) != 0) {
                    $document["$table"] = new stdclass();
                    for ($count = 0; $count<count($result); $count++) {
                        #$result[$count]->system_id = $system_id;
                        foreach ($result[$count] as $key => $value) {
                            // special cases - ip addresses are stored padded so they can be easily sorted. Remove the padding.
                            if ($key == 'man_ip_address' or
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
        } else {
            $this->load->model('m_systems');
            $document = $this->m_systems->api_index('list');
        }
        $document['system'] = $this->m_oa_general->get_system_document_api_new("system", $system_id);
        echo json_encode($document);
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
            $document = array();
            $list = array(
                'system',
                'oa_alert_log', 'oa_audit_log',
                'sys_hw_bios', 'sys_sw_group', 'sys_hw_hard_drive', 'sys_hw_module',
                'sys_hw_network_card_ip', 'sys_hw_memory', 'sys_hw_motherboard', 'sys_hw_network_card',
                'sys_hw_optical_drive', 'sys_hw_partition', 'sys_hw_processor', 'sys_hw_scsi_controller',
                'sys_hw_sound', 'sys_hw_video',
                'sys_man_audits',
                'sys_sw_netstat',
                'sys_sw_route',
                'sys_sw_service',
                'sys_sw_share',
                'sys_sw_software', 'sys_sw_software_key',
                'sys_sw_user', 'sys_sw_variable', 'sys_sw_virtual_machine', 'sys_sw_windows', );
            foreach ($list as $table) {
                $result = $this->m_oa_general->get_system_document_api_new($table, $system_id);
                if (is_array($result) and count($result) != 0) {
                    $document["$table"] = new stdclass();
                    for ($count = 0; $count<count($result); $count++) {
                        #$result[$count]->system_id = $system_id;
                        foreach ($result[$count] as $key => $value) {
                            // special cases - ip addresses are stored padded so they can be easily sorted. Remove the padding.
                            if ($key == 'man_ip_address' or
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

        if (isset($system_id) and $system_id != '') {
            $this->load->model('m_oa_general');
            $document = array();
            $list = array('system', 'sys_hw_bios', 'sys_sw_group', 'sys_hw_hard_drive', 'sys_sw_software', 'sys_hw_network_card_ip', 'sys_hw_memory',
                'sys_hw_motherboard', 'sys_sw_netstat', 'sys_hw_network_card', 'sys_hw_partition', 'sys_hw_processor', 'sys_sw_route', 'sys_sw_service',
                'sys_sw_share', 'sys_sw_user', 'sys_sw_variable', 'sys_sw_windows', );
            foreach ($list as $table) {
                $result = $this->m_oa_general->get_system_document_api($table, $system_id);
                if (is_array($result) and count($result) != 0) {
                    $document["$table"] = new stdclass();
                    for ($count = 0; $count<count($result); $count++) {
                        #$result[$count]->system_id = $system_id;
                        foreach ($result[$count] as $key => $value) {
                            // special cases - ip addresses are stored padded so they can be easily sorted. Remove the padding.
                            if ($key == 'man_ip_address' or
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
        } else {
            $this->load->model('m_systems');
            $document = $this->m_systems->api_index('list');
        }
        echo json_encode($document);
        header('Content-Type: application/json');
        header('Cache-Control: max-age=0');
    }

    public function view_org()
    {
        $this->load->model("m_oa_org");
        $this->data['org'] = $this->m_oa_org->get_org_details($this->data['id']);
        $this->data['include'] = 'v_org';
        $this->data['sortcolumn'] = '1';
        $this->data['heading'] = 'View Organisation';
        $this->load->view('v_template', $this->data);
    }

    public function get_count()
    {
        $this->load->model("m_systems");
        $this->load->model("m_oa_group");
        $group_id = '';
        if (isset($_POST['group_id'])) {
            $group_id = $_POST['group_id'];
        }
        if ($group_id == '') {
            $group_id = $this->uri->segment(3, 0);
        }
        if (!is_numeric($group_id)) {
            $group_id = '1';
        }
        // we must check to see if the user has at least VIEW permission on the group
        $this->user->user_access_level = $this->m_oa_group->get_group_access($group_id, $this->user->user_id);
        if ($this->user->user_access_level < '1') {
            // not enough permission - exit
            exit();
        }
        $count = $this->m_systems->get_group_system_count($group_id);
        echo $count;
    }

    public function view_location()
    {
        $this->load->model("m_oa_location");
        $this->data['location'] = $this->m_oa_location->get_location_details($this->data['id']);
        $this->data['include'] = 'v_location';
        $this->data['sortcolumn'] = '1';
        $this->data['heading'] = 'View Location';
        $this->load->view('v_template', $this->data);
    }

    public function edit_systems()
    {
        $this->load->model("m_oa_group");
        if (is_numeric($_POST['group_id'])) {
            // we must check to see if the user has at least VIEW permission on the group
            $this->user->user_access_level = $this->m_oa_group->get_group_access($_POST['group_id'], $this->user->user_id);
            if ($this->user->user_access_level < '10') {
                // not enough permission - redirect
                redirect('main/list_groups/');
            }
        } else {
            redirect('main/list_groups/');
        }
        $this->load->model("m_system");
        $this->load->model("m_oa_location");
        $this->load->model("m_oa_org");
        $this->data['locations'] = $this->m_oa_location->get_all_locations();
        $this->data['orgs'] = $this->m_oa_org->get_org_names();
        $data['query'] = array();
        foreach ($_POST as $key => $value) {
            if (mb_strpos($key, 'system_id_') !== false) {
                $system = $this->m_system->get_system_summary(mb_substr($key, 10));
                foreach ($system as $system_2) {
                    array_push($data['query'], $system_2);
                }
            }
            if (mb_strpos($key, 'group_id') !== false) {
                $this->data['group_id'] = $value;
            }
        }
        $this->data['query'] = $data['query'];
        $this->data['include'] = 'v_edit_systems';
        $this->data['sortcolumn'] = '1';
        $this->data['heading'] = 'Edit Systems';
        $this->load->view('v_template', $this->data);
    }

    public function process_edit_systems()
    {
        if (!(isset($_POST['submit']))) {
            redirect('main/list_groups/');
        }
        $this->load->model("m_oa_group");
        $this->load->model("m_audit_log");
        if (is_numeric($_POST['group_id'])) {
            // we must check to see if the user has at least VIEW permission on the group
            $this->user->user_access_level = $this->m_oa_group->get_group_access($_POST['group_id'], $this->user->user_id);
            if ($this->user->user_access_level < '10') {
                // not enough permission - redirect
                redirect('main/list_groups/');
            }
        } else {
            redirect('main/list_groups/');
        }
        $this->load->model("m_system");
        $this->load->library('encrypt');
        $group_id = $_POST['group_id'];
        $data['items'] = array();
        foreach ($_POST as $key => $value) {
            if ((mb_strpos($key, 'man_') !== false) and ($value != '')) {
                $item = array($key, $value);
                array_push($data['items'], ($item));
                $item = null;
            }
        }
        $data['systems'] = array();
        foreach ($_POST as $key => $value) {
            if ((mb_strpos($key, 'system_') === 0) and ($value != '')) {
                $item = array($key, $value);
                array_push($data['systems'], ($item));
                $item = null;
            }
        }

        $discover_ids = '';
        $credentials = new stdClass();
        $credentials->windows_username = @$this->input->post('windows_username');
        $credentials->windows_password = @$this->input->post('windows_password');
        $credentials->windows_domain = @$this->input->post('windows_domain');
        $credentials->ssh_username = @$this->input->post('ssh_username');
        $credentials->ssh_password = @$this->input->post('ssh_password');
        $credentials->snmp_version = @$this->input->post('snmp_version');
        $credentials->snmp_community = @$this->input->post('snmp_community');

        if ((isset($credentials->windows_username) and $credentials->windows_username != '') or
            (isset($credentials->windows_password) and $credentials->windows_password != '') or
            (isset($credentials->windows_domain) and $credentials->windows_domain != '') or
            (isset($credentials->ssh_username) and $credentials->ssh_username != '') or
            (isset($credentials->ssh_password) and $credentials->ssh_password != '') or
            (isset($credentials->snmp_version) and $credentials->snmp_version != '') or
            (isset($credentials->snmp_community) and $credentials->snmp_community != '')) {
            foreach ($data['systems'] as $system) {
                $credentials->ip_address = ip_address_from_db($this->m_system->check_man_ip_address($system[1]));
                $system_id = $system[1];
                $this->m_system->update_credentials($credentials, $system_id);
            }
        }

        foreach ($_POST as $field_name => $field_data) {
            # input all the manual fields
            if (((mb_strpos($field_name, 'man_') !== false) or
                (mb_strpos($field_name, 'nmis_') !== false)) && ($field_data != '')) {
                foreach ($data['systems'] as $system) {
                    if ($field_data == '-') {
                        $field_data = '';
                    }
                    $this->m_system->update_system_man($system[1], $field_name, $field_data);
                    $this->m_audit_log->insert_audit_event($field_name, $field_data, $system[1]);
                }
            }
        }

        $details = new stdClass();
        foreach ($data['systems'] as $system) {
            $details->system_id = $system[1];
            $details->type = 'computer';
            $discover_ids .= $system[1].',';
            $this->m_oa_group->update_system_groups($details);
        }

        $calculate_ip = $this->input->post('calculate_ip');
        if (isset($calculate_ip) and $calculate_ip == 'yes') {
            $this->load->model('m_ip_address');
            foreach ($data['systems'] as $system) {
                $this->m_ip_address->set_initial_address($system[1], 'y');
            }
        }

        $test = $this->input->post('run_discovery');
        if (isset($test) and $test == 'yes') {
            $discover_ids = substr($discover_ids, 0, -1);
            $this->session->set_flashdata('discover_list', $discover_ids);
            redirect('discovery/discover_list');
        } else {
            redirect('/main/list_devices/'.$group_id);
        }
    }

    public function list_groups()
    {
        $this->load->model("m_oa_group");
        $this->data['query'] = $this->m_oa_group->get_user_groups($this->user->user_id);
        $this->data['heading'] = 'Groups';
        $this->data['include'] = 'v_main';
        $this->data['sortcolumn'] = '2';
        $this->data['export_report'] = 'y';
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }

    public function list_devices()
    {
        $this->load->model("m_oa_group");
        if (is_numeric($this->data['id'])) {
            // we must check to see if the user has at least VIEW permission on the group
            $this->user->user_access_level = $this->m_oa_group->get_group_access($this->data['id'], $this->user->user_id);
            if ($this->user->user_access_level < '3') {
                // not even VIEW permission - redirect
                redirect('main/list_groups/');
            }
        } else {
            redirect('main/list_groups/');
        }
        $this->load->model("m_systems");
        $this->data['heading'] = 'List Devices';
        if ($this->data['id'] != '0') {
            $this->data['heading'] = $this->m_oa_group->get_group_name($this->data['id']);
        }

        $segs = $this->uri->segment_array();
        $i = 0;
        $filter = array();
        foreach ($segs as $segment) {
            if (((strpos($segment, 'out') === 0) or (strpos($segment, 'only') === 0)) and (strpos($segment, '___'))) {
                $filter_array = explode("___", $segment);
                $filter[$i]['variable'] = $filter_array[1];
                $filter[$i]['value'] = str_replace("%20", " ", html_entity_decode($filter_array[2]));
                if ($filter_array[0] == 'only') {
                    $filter[$i]['condition'] = '=';
                } else {
                    $filter[$i]['condition'] = '<>';
                }
                $i++;
            }
        }

        $this->load->model("m_oa_group_column");
        $this->data['column'] = $this->m_oa_group_column->get_group_column($this->data['id']);
        $this->data['query'] = $this->m_systems->get_group_systems($this->data['id']);

        $remove = false;
        $new_query = array();
        if (count($filter) > 0) {
            foreach ($this->data['query'] as $key) {
                foreach ($filter as $enum_filter) {
                    if (property_exists($key, $enum_filter['variable'])) {
                        if (($key->$enum_filter['variable'] == $enum_filter['value']) and ($enum_filter['condition'] == '<>')) {
                            $remove = true;
                        }
                        if (($key->$enum_filter['variable'] != $enum_filter['value']) and ($enum_filter['condition'] == '=')) {
                            $remove = true;
                        }
                    }
                }
                if ($remove == true) {
                    # do not push this object to the new array
                } else {
                    # we want to keep this element - no matches above.
                    # push this onto the new query array
                    $new_query[] = $key;
                }
                $remove = false;
            }
            $this->data['query'] = $new_query;
        }

        $this->data['count'] = count($this->data['query']);
        $this->data['group_id'] = $this->data['id'];
        $this->data['include'] = 'v_report';
        $this->data['sortcolumn'] = '1';
        $this->data['export_report'] = 'y';
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }

    public function search()
    {
        # TODO: for completeness we should check if user is admin and if not, check is search is allowed in confg variable
        if ($this->data['id'] == '') {
            redirect('main/list_groups/');
        }
        if (($this->data['id'] > '0') && (is_int($this->data['id']))) {
            // we must check to see if the user has at least VIEW permission on the group
            if ($this->m_oa_group->get_group_access($this->data['id'], $this->user->user_id) < '3') {
                // not even VIEW permission - redirect
                redirect('main/list_groups/');
            }
        }
        if (isset($_POST["search"])) {
            redirect('main/search/'.$this->data['id'].'/'.$_POST['search']);
        }
        $this->data['group_id'] = $this->uri->segment(3, 0);
        $this->data['search_term'] = urldecode($this->uri->segment(4, 0));
        $this->data['search_term'] = html_entity_decode($this->data['search_term']);
        $this->load->model("m_systems");
        $result = $this->m_systems->search($this->data['search_term'], $this->data['group_id']);
        $this->data['query'] = $result;
        $this->data['heading'] = 'Search Result ('.$this->data['search_term'].")";
        $this->data['include'] = 'v_search_result';
        $this->data['sortcolumn'] = '0';
        $this->data['export_report'] = 'y';
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }

    public function search_device()
    {
        # search for a match on PRODUCTION devices only.
        # search for name, ip
        if (isset($_POST['search'])) {
            $this->data['search'] = urldecode($_POST['search']);
        }
        $this->data['search'] = html_entity_decode($this->data['search']);
        if ($this->data['search'] == '') {
            redirect('main/list_groups/');
        }

        if (isset($_POST['format'])) {
            $format = $_POST['format'];
        } else {
            $format = $this->uri->segment($this->uri->total_rsegments());
        }

        $this->load->model("m_system");
        $this->data['query'] = $this->m_system->search_device($this->data['search']);
        $this->data['heading'] = 'Search Result ('.$this->data['search'].")";
        $this->data['column'] = $this->m_system->search_device_columns();
        $this->data['count'] = count($this->data['query']);
        $this->data['include'] = 'v_search_device';
        $this->data['sortcolumn'] = '0';
        $this->data['export_report'] = 'y';
        if (isset($_POST['format'])) {
            $this->determine_output($format);
        } else {
            $this->load->view('v_template', $this->data);
        }
    }

    public function disk_graph()
    {
        $this->load->model("m_partition");
        $this->load->model("m_system");
        $this->data['system_id'] = $this->uri->segment(3, 0);
        $this->data['partition_id'] = $this->uri->segment(4, 0);
        $this->data['days'] = $this->uri->segment(5, 0);
        if ($this->data['days'] > "0") {
            //
        } else {
            $this->data['days'] = "30";
        }
        $this->data['query'] = $this->m_partition->get_partition_graph($this->data['system_id'], $this->data['partition_id'], $this->data['days']);
        $this->data['count'] = count($this->data['query']);
        $this->data['include'] = 'v_partition_graph';
        $this->data['sortcolumn'] = '0';
        $system_name = $this->m_system->get_system_hostname($this->data['system_id']);
        $this->data['heading'] = 'Storage use for '.$system_name;
        $this->data['partition_details'] = $this->m_partition->get_partition_details($this->data['partition_id']);
        $this->load->view('v_template', $this->data);
    }

    public function database_graph()
    {
        $this->load->model("m_database_details");
        $this->load->model("m_system");
        $this->data['system_id'] = $this->uri->segment(3, 0);
        $this->data['database_id'] = $this->uri->segment(4, 0);
        $this->data['days'] = $this->uri->segment(5, 0);
        if ($this->data['days'] > "0") {
            //
        } else {
            $this->data['days'] = "30";
        }
        $this->data['query'] = $this->m_database_details->get_database_graph($this->data['system_id'], $this->data['database_id'], $this->data['days']);
        $this->data['count'] = count($this->data['query']);
        $this->data['include'] = 'v_database_graph';
        $this->data['sortcolumn'] = '0';
        $system_name = $this->m_system->get_system_hostname($this->data['system_id']);
        $this->data['heading'] = 'Storage use for '.$system_name;
        #$this->data['database_details'] = $this->m_partition->get_partition_details($this->data['partition_id']);
        $this->load->view('v_template', $this->data);
    }

    public function help_about()
    {
        $this->data['heading'] = 'About Open-AudIT';
        $this->data['include'] = 'v_help_about';
        $this->data['export_report'] = 'n';
        $this->load->view('v_template', $this->data);
    }

    public function help_statistics()
    {
        # need to check if being called from localhost.
        $this->load->model("m_oa_admin_database");
        $this->data['stats'] = $this->m_oa_admin_database->statistics();
        $this->data['heading'] = 'Statistics';
        $this->data['include'] = 'v_help_statistics';
        $this->data['export_report'] = 'n';
        $this->load->view('v_template', $this->data);
    }

    public function help_faq()
    {
        $this->data['heading'] = 'Frequently Asked Questions';
        $this->data['include'] = 'v_help_faq';
        $this->load->view('v_template', $this->data);
    }

    public function help_oae()
    {
        $this->data['heading'] = 'Open-AudIT Enterprise';
        $this->data['include'] = 'v_help_oae';
        $this->load->view('v_template', $this->data);
    }

    public function help_opmaps()
    {
        $this->data['heading'] = 'Maps';
        $this->data['include'] = 'v_help_opmaps';
        $this->load->view('v_template', $this->data);
    }

    public function add_attachment()
    {
        $this->load->model("m_system");
        $system_id = $this->m_system->get_system_id($this->data['id']);
        if ($system_id > '0') {
            // we must check to see if the user has at least VIEW permission on the system
            $this->data['access_level'] = $this->m_system->get_system_access_level($system_id, $this->user->user_id);
            if ($this->data['access_level'] < '10') {
                // no 'edit details' permission - redirect
                redirect('main');
            }
        } else {
            // not a valid system (system_id, hostname or system_key)
            redirect('main');
        }

        if (!isset($_POST['attachment']) and !isset($_POST['submit'])) {
            redirect('main');
        } else {
            # we have an uploaded file - store and process
            $target = BASEPATH."../application/attachments/".$_POST['system_id']."_".basename($_FILES['attachment']['name']);
            if (move_uploaded_file($_FILES['attachment']['tmp_name'], $target)) {
                $this->load->model("m_attachment");
                $this->m_attachment->create_system_attachment($_POST['system_id'], $_POST['title'], $target);
                redirect("main/system_display/".$_POST['system_id']);
            } else {
                echo "There was an error uploading the file, please try again!<br />\n";
                exit();
            }
        }
    }

    public function delete_attachment()
    {
        $this->load->model("m_attachment");
        $attachment_id = $this->data['id'];
        $attachment = $this->m_attachment->get_attachment($attachment_id);
        $system_id = $attachment->system_id;
        $this->load->model("m_system");
        if ($system_id > '0') {
            // we must check to see if the user has at least VIEW permission on the system
            $this->data['access_level'] = $this->m_system->get_system_access_level($system_id, $this->user->user_id);
            if ($this->data['access_level'] < '10') {
                // no 'edit details' permission - redirect
                redirect('main');
            }
        } else {
            // not a valid system (system_id, hostname or system_key)
            redirect('main');
        }
        $this->m_attachment->delete_attachment($attachment_id);
        unlink($attachment->att_filename);
        redirect("main/system_display/".$attachment->system_id);
    }

    public function show_attachment()
    {
        $this->load->model("m_attachment");
        $attachment = $this->m_attachment->get_attachment($this->data['id']);
        $system_id = $attachment->system_id;
        $this->load->model("m_system");
        if ($system_id > '0') {
            // we must check to see if the user has at least VIEW permission on the system
            $this->data['access_level'] = $this->m_system->get_system_access_level($system_id, $this->user->user_id);
            if ($this->data['access_level'] < '5') {
                // not even view permission - redirect
                redirect('main');
            }
        } else {
            // not a valid system (system_id, hostname or system_key)
            redirect('main');
        }
        $this->load->helper('file');
        $i = explode('/', $attachment->att_filename);
        $filename = $i[count($i)-1];
        header('Content-Type: '.get_mime_by_extension($attachment->att_filename));
        #header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Content-Disposition: inline;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        readfile($attachment->att_filename);
    }

    public function download_attachment()
    {
        $this->load->model("m_attachment");
        $attachment = $this->m_attachment->get_attachment($this->data['id']);
        $system_id = $attachment->system_id;
        $this->load->model("m_system");
        if ($system_id > '0') {
            // we must check to see if the user has at least VIEW permission on the system
            $this->data['access_level'] = $this->m_system->get_system_access_level($system_id, $this->user->user_id);
            if ($this->data['access_level'] < '5') {
                // not even view permission - redirect
                redirect('main');
            }
        } else {
            // not a valid system (system_id, hostname or system_key)
            redirect('main');
        }
        $this->load->helper('file');
        $i = explode('/', $attachment->att_filename);
        $filename = $i[count($i)-1];
        header('Content-Type: '.get_mime_by_extension($attachment->att_filename));
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        #header('Content-Disposition: inline;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        readfile($attachment->att_filename);
    }

    public function system_summary()
    {
        # outputs a JSON formatted summary of an individual system
        # designed to be called from Open-AudIT Enterprise
        $this->load->model("m_system");
        $this->data['id'] = $this->m_system->get_system_id($this->data['id']);
        if ($this->data['id'] > '0') {
            // we must check to see if the user has at least VIEW permission on the system
            $this->data['access_level'] = $this->m_system->get_system_access_level($this->data['id'], $this->user->user_id);
            if ($this->data['access_level'] < '1') {
                // not even VIEW BASIC permission - redirect
                redirect('main');
            }
        } else {
            // not a valid system (system_id, hostname or system_key)
            redirect('main');
        }
        $this->load->model("m_oa_location");
        $this->load->model("m_oa_org");
        $this->data['query'] = $this->m_system->system_summary($this->data['id']);
        $this->data['query'][0]->man_ip_address = ip_address_from_db($this->data['query'][0]->man_ip_address);
        print_r(json_encode($this->data['query']));
    }

    public function system_display()
    {
        $this->load->model("m_system");
        $this->data['id'] = $this->m_system->get_system_id($this->data['id']);
        if ($this->data['id'] > '0') {
            // we must check to see if the user has at least VIEW permission on the system
            $this->data['access_level'] = $this->m_system->get_system_access_level($this->data['id'], $this->user->user_id);
            if ($this->data['access_level'] < '5') {
                // not even VIEW BASIC permission - redirect
                redirect('main');
            }
        } else {
            // not a valid system (system_id, hostname or system_key)
            redirect('main');
        }
        $this->load->model("m_oa_general");
        $this->load->model("m_additional_fields");
        $this->load->model("m_alerts");
        $this->load->model("m_attachment");
        $this->load->model("m_audit_log");
        $this->load->model("m_bios");
        $this->load->model("m_database");
        $this->load->model("m_database_details");
        $this->load->model("m_dns");
        $this->load->model("m_group");
        $this->load->model("m_hard_drive");
        $this->load->model("m_ip_address");
        $this->load->model("m_log");
        $this->load->model("m_memory");
        $this->load->model("m_module");
        $this->load->model("m_monitor");
        $this->load->model("m_motherboard");
        $this->load->model("m_netstat");
        $this->load->model("m_network_card");
        $this->load->model("m_oa_location");
        $this->load->model("m_oa_org");
        $this->load->model("m_optical_drive");
        $this->load->model("m_pagefile");
        $this->load->model("m_partition");
        $this->load->model("m_print_queue");
        $this->load->model("m_printer");
        $this->load->model("m_processor");
        $this->load->model("m_route");
        $this->load->model("m_scsi_controller");
        $this->load->model("m_service");
        $this->load->model("m_share");
        $this->load->model("m_software");
        $this->load->model("m_sound");
        $this->load->model("m_sys_man_audits");
        $this->load->model("m_user");
        $this->load->model("m_variable");
        $this->load->model("m_virtual_machine");
        $this->load->model("m_video");
        $this->load->model("m_webserver");
        $this->load->model("m_windows");
        $this->data['additional_fields_data'] = $this->m_additional_fields->get_additional_fields_data($this->data['id']);

        $sorted_names = $this->m_additional_fields->get_additional_fields_names();
        sort($sorted_names);
        $this->data['additional_fields_names'] = $sorted_names;
        $sort = $this->m_additional_fields->get_additional_fields($this->data['id']);
        sort($sort);
        $this->data['additional_fields'] = $sort;
        $this->data['alerts'] = $this->m_alerts->get_system_alerts($this->data['id']);
        $this->data['assembly'] = $this->m_software->get_system_software($this->data['id'], 6);
        $this->data['attachment'] = $this->m_attachment->get_system_attachment($this->data['id']);
        $this->data['audit_log'] = $this->m_audit_log->get_audit_log($this->data['id']);
        $this->data['audits'] = $this->m_sys_man_audits->get_system_audits($this->data['id']);
        $this->data['bios'] = $this->m_oa_general->get_system_attribute('sys_hw_bios', '*', $this->data['id']);
        $this->data['codecs'] = $this->m_software->get_system_software($this->data['id'], 5);
        $this->data['database'] = $this->m_database->get_system_db($this->data['id']);
        $this->data['database_details'] = $this->m_database_details->get_system_db_details($this->data['id']);
        $this->data['dns'] = $this->m_dns->get_system_dns($this->data['id']);
        $this->data['hard_drive'] = $this->m_hard_drive->get_system_hard_drive($this->data['id']);
        $this->data['ip'] = $this->m_ip_address->get_system_ip($this->data['id']);
        $this->data['library'] = $this->m_software->get_system_software($this->data['id'], 7);
        $this->data['locations'] = $this->m_oa_location->get_location_names();
        $this->data['memory'] = $this->m_memory->get_system_memory($this->data['id']);
        $this->data['module'] = $this->m_module->get_system_module($this->data['id']);
        $this->data['monitor'] = $this->m_monitor->get_system_monitor($this->data['id']);
        $this->data['motherboard'] = $this->m_motherboard->get_system_motherboard($this->data['id']);
        $this->data['netstat'] = $this->m_netstat->get_system_netstat($this->data['id']);
        $this->data['network'] = $this->m_network_card->get_system_network($this->data['id']);
        $this->data['odbc'] = $this->m_software->get_system_software($this->data['id'], 3);
        $this->data['optical'] = $this->m_optical_drive->get_system_optical($this->data['id']);
        $this->data['orgs'] = $this->m_oa_org->get_all_orgs();
        $this->data['partition'] = $this->m_partition->get_system_partition($this->data['id']);
        $this->data['pagefile'] = $this->m_pagefile->get_system_pagefile($this->data['id']);
        $this->data['print_queue'] = $this->m_print_queue->get_print_queue($this->data['id']);
        $this->data['printer'] = $this->m_printer->get_system_printer($this->data['id']);
        $this->data['processor'] = $this->m_processor->get_system_processor($this->data['id']);
        $this->data['route'] = $this->m_route->get_system_route($this->data['id']);
        $this->data['scsi_controller'] = $this->m_scsi_controller->get_system_scsi_controller($this->data['id']);
        $this->data['service'] = $this->m_service->get_system_service($this->data['id']);
        $this->data['share'] = $this->m_oa_general->get_system_attribute('sys_sw_share', '*', $this->data['id']);
        $this->data['software'] = $this->m_software->get_system_software($this->data['id'], 0);
        $this->data['sound'] = $this->m_sound->get_system_sound($this->data['id']);
        $this->data['system'] = $this->m_system->get_system_summary($this->data['id']);
        $this->data['system_group'] = $this->m_group->get_system_group($this->data['id']);
        $this->data['system_id'] = $this->data['id'];
        $this->data['system_location'] = $this->m_oa_location->get_system_location($this->data['id']);
        $this->data['system_org'] = $this->m_oa_org->get_system_org($this->data['id']);
        $this->data['system_log'] = $this->m_log->get_system_log($this->data['id']);
        $this->data['system_user'] = $this->m_user->get_system_user($this->data['id']);
        $this->data['system_variable'] = $this->m_variable->get_system_variable($this->data['id']);
        $this->data['updates'] = $this->m_software->get_system_software($this->data['id'], 2);
        $this->data['video'] = $this->m_video->get_system_video($this->data['id']);
        $this->data['vm'] = $this->m_virtual_machine->get_vm($this->data['id']);
        $this->data['windows'] = $this->m_windows->get_system_windows($this->data['id']);
        $this->data['webserver'] = $this->m_webserver->get_system_webserver($this->data['id']);
        $this->data['website_details'] = $this->m_webserver->get_system_websites($this->data['id']);

        include 'include_device_types.php';
        $this->data['device_types'] = $device_types;

        # TODO: add in browser addons and odbc drivers

        # only show to users with 'view sensitive details' level of access access level >= 7
        if ($this->data['access_level'] >= '7') {
            $this->load->model("m_software_key");
            $this->data['software_key'] = $this->m_software_key->get_system_key($this->data['id']);

            $this->data['decoded_access_details'] = new stdClass();
            $this->data['decoded_access_details']->ip_address = '';
            $this->data['decoded_access_details']->snmp_version = '';
            $this->data['decoded_access_details']->snmp_community = '';
            $this->data['decoded_access_details']->ssh_username = '';
            $this->data['decoded_access_details']->ssh_password = '';
            $this->data['decoded_access_details']->windows_username = '';
            $this->data['decoded_access_details']->windows_password = '';
            $this->data['decoded_access_details']->windows_domain = '';

            if (isset($this->data['system'][0]->access_details)) {
                $this->load->library('encrypt');

                $this->data['decoded_access_details'] = $this->encrypt->decode($this->data['system'][0]->access_details);
                $this->data['decoded_access_details'] = json_decode($this->data['decoded_access_details']);
                # this returns an array if it doesn't contain data

                if (!isset($this->data['decoded_access_details']) or
                    count($this->data['decoded_access_details']) == 0) {
                    $this->data['decoded_access_details'] = new stdClass();
                }

                if (!isset($this->data['decoded_access_details']->ip_address)) {
                    $this->data['decoded_access_details']->ip_address = '';
                }

                if (!isset($this->data['decoded_access_details']->snmp_version)) {
                    $this->data['decoded_access_details']->snmp_version = '';
                }
                if (!isset($this->data['decoded_access_details']->snmp_community)) {
                    $this->data['decoded_access_details']->snmp_community = '';
                }
                if (!isset($this->data['decoded_access_details']->ssh_username)) {
                    $this->data['decoded_access_details']->ssh_username = '';
                }
                if (!isset($this->data['decoded_access_details']->ssh_password)) {
                    $this->data['decoded_access_details']->ssh_password = '';
                }
                if (!isset($this->data['decoded_access_details']->windows_username)) {
                    $this->data['decoded_access_details']->windows_username = '';
                }
                if (!isset($this->data['decoded_access_details']->windows_password)) {
                    $this->data['decoded_access_details']->windows_password = '';
                }
                if (!isset($this->data['decoded_access_details']->windows_domain)) {
                    $this->data['decoded_access_details']->windows_domain = '';
                }
            } else {
                $this->data['decoded_access_details'] = new stdClass();
                $this->data['decoded_access_details']->ip_address = "";
                $this->data['decoded_access_details']->snmp_version = "";
                $this->data['decoded_access_details']->snmp_community = "";
                $this->data['decoded_access_details']->ssh_username = "";
                $this->data['decoded_access_details']->ssh_password = "";
                $this->data['decoded_access_details']->windows_username = "";
                $this->data['decoded_access_details']->windows_password = "";
                $this->data['decoded_access_details']->windows_domain = "";
            }
        }

        $this->data['include'] = "v_display_device";

        foreach ($this->data['system'] as $system) {
            $model_formatted = str_replace(']', '', str_replace('[', '', str_replace(' ', '_', trim(mb_strtolower($system->man_model)))));
            $type_formatted = str_replace(" ", "_", trim(mb_strtolower($system->man_type)));
            $default_file_exists = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]).'device_images/'.$system->man_picture.'.jpg';
            $model_file_exists   = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]).'device_images/'.$model_formatted.'.jpg';
            $type_file_exists    = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]).'device_images/'.$type_formatted.'.png';
            $custom_file_exists  = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]).'device_images/custom/'.$system->system_id.'.jpg';

            # check if the man_picture field from the database is populated and a matching image exists
            if (($system->man_picture > '') and (file_exists($default_file_exists))) {
                $system->man_picture = $system->man_picture.'.jpg';
            }

            # check if a custom images exists and overwrite
            if (file_exists($custom_file_exists)) {
                $system->man_picture = 'custom/'.$system->system_id.'.jpg';
            }

            # check if an image matching the model exists
            if (($system->man_picture == '') and (file_exists($model_file_exists))) {
                $system->man_picture = ''.$model_formatted.'.jpg';
            }

            # test for a generic ibm aix device
            if (($system->man_picture == '') and (strtolower($system->man_os_family) == "ibm aix")) {
                $system->man_picture = "ibm_aix.jpg";
            }

            # check if an image matching the type exists
            if (($system->man_picture == '') and (file_exists($type_file_exists))) {
                $system->man_picture = ''.$type_formatted.'.png';
            }

            # no matching images, assign the unknown image
            if ($system->man_picture == '') {
                $system->man_picture = 'unknown.png';
            }
        }

        $this->data['heading'] = 'Summary - '.$this->m_system->get_system_hostname($this->data['id']);
        $this->load->view('v_template', $this->data);
    }

    public function edit_user()
    {
        $this->load->model("m_oa_user");
        $this->load->model("m_oa_group");
        $this->load->helper('url');
        if (!isset($_POST['submit'])) {
            # load the initial form
            $this->data['user'][0] = $this->user;
            if ($this->user->user_admin == 'y') {
                $this->data['user_group'] = $this->m_oa_group->get_all_user_groups($this->user->user_id);
            }
            $this->data['heading'] = 'Edit User';
            $this->data['include'] = 'v_edit_user';
            $this->data['sortcolumn'] = '1';
            $this->data['url'] = current_url();
            $this->load->view('v_template', $this->data);
        } else {
            # process the form
            $error = '0';
            foreach ($_POST as $key => $value) {
                $details->$key = $value;
            }

            if ($details->user_password != $details->user_password_confirm) {
                $error = '1';
                $this->data['error_message'] = "Passwords must match.";
                $this->data['user'] = $this->m_oa_user->get_user_details($details->user_id);
                $this->data['user_group'] = $this->m_oa_group->get_all_user_groups($details->user_id);
                $this->data['heading'] = 'Edit User';
                $this->data['include'] = 'v_edit_user';
                $this->data['url'] = current_url();
                $this->load->view('v_template', $this->data);
            }

            if ($this->m_oa_user->check_user_name($details->user_name, $details->user_id) == false) {
                $error = '1';
                $this->data['error_message'] = "Username already exists.";
                $this->data['user'] = $this->m_oa_user->get_user_details($details->user_id);
                $this->data['user_group'] = $this->m_oa_group->get_all_user_groups($details->user_id);
                $this->data['heading'] = 'Edit User';
                $this->data['include'] = 'v_edit_user';
                $this->data['url'] = current_url();
                $this->load->view('v_template', $this->data);
            }

            if ($error == '0') {
                $this->m_oa_user->edit_user($details);
                if ($this->user->user_admin == 'y') {
                    $this->m_oa_group->edit_user_groups($details);
                }
                // Reset the admin user password in OAE
                if ($details->user_name == 'admin') {
                    $server_os = php_uname('s');
                    if ($server_os == 'Windows NT') {
                        $command_string = 'c:\xampplite\apache\bin\htpasswd.exe -mb c:\omk\conf\users.dat admin '.$details->user_password.' 2>&1';
                    }
                    if (php_uname('s') == 'Linux' or php_uname('s') == "Darwin") {
                        $command_string = 'htpasswd -mb /usr/local/opmojo/conf/users.dat admin '.$details->user_password.' 2>&1';
                    }
                    exec($command_string, $output, $return_var);
                    if ($return_var != '0') {
                        $log_details = new stdClass();
                        $log_details->severity = 5;
                        $log_details->file = 'system';
                        $log_details->message = 'Admin user password reset attempt for Open-AudIT and Open-AudIT Enterprise has failed';
                        stdlog($log_details);
                        unset($log_details);
                    } else {
                        $log_details = new stdClass();
                        $log_details->severity = 5;
                        $log_details->file = 'system';
                        $log_details->message = 'Admin user password reset successful for Open-AudIT and Open-AudIT Enterprise';
                        stdlog($log_details);
                        unset($log_details);
                    }
                    $command_string = null;
                    $output = null;
                    $return_var = null;
                }
                redirect('main/edit_user/'.$this->user->user_id);
            } else {
                $log_details->severity = 5;
                $log_details->message = 'Error on edit user details submission for '.$details->user_name;
                stdlog($log_details);
                redirect('main/list_groups/');
            }
        }
    }

    public function help_support()
    {
        $this->load->model("m_systems");
        $this->load->model("m_oa_admin_database");

        $hints = array();
        $data = array();

        $data['application_environment'] = ENVIRONMENT;
        $data['application_log_permission'] = '';
        $data['application_web_version'] = $this->config->item('web_display_version');
        $data['application_web_internal_version'] = $this->config->item('web_internal_version');
        $data['application_db_database_version'] = $this->config->item('display_version');
        $data['application_db_internal_version'] = $this->config->item('internal_version');
        $data['application_nmis_enabled'] = $this->config->item('nmis');
        $data['application_nmis_url'] = $this->config->item('nmis_url');
        $data['application_oae_status'] = $this->config->item('logo');
        $data['application_name_match'] = $this->config->item('name_match');
        $data['application_ad_domain'] = $this->config->item('ad_domain');
        $data['application_ad_server'] = $this->config->item('ad_server');
        $data['application_permitted_uri_chars'] =  $this->config->item('permitted_uri_chars');
        $data['application_base_url'] = $this->config->item('base_url');
        $data['application_prod_devices'] = $this->m_systems->get_count();
        $data['application_prod_devices_in_all'] = $this->m_systems->get_group_system_count('1');
        $data['application_non-prod_devices'] = $this->m_systems->get_non_prod_count();
        $data['application_temp_rows'] = $this->m_oa_admin_database->count_all_rows('oa_temp');
        $data['application_timezone'] = date_default_timezone_get();

        $data['os_platform'] = 'unknown';
        $data['os_version'] = '';
        $data['os_database'] = $this->db->platform()." (version ".$this->db->version().")";
        $data['os_webserver'] = getenv("SERVER_SOFTWARE");
        $data['os_timezone'] = '';

        $data['prereq_apache_mod_proxy'] = 'n';
        $data['prereq_curl'] = 'n';
        $data['prereq_samba-client'] = 'n';
        $data['prereq_nmap'] = 'n';
        $data['prereq_nmap_perms'] = '';
        $data['prereq_php-cli'] = '';
        $data['prereq_screen'] = 'n';
        #$data['prereq_snmp'] = 'n';
        $data['prereq_sshpass'] = 'n';
        $data['prereq_wget'] = 'n';
        #$data['prereq_winexe'] = 'n'; # As at 1.4 we ship a compile binary in /usr/local/open-audit/other/winexe-static
        $data['prereq_zip'] = 'n';

        $data['php_version'] = phpversion();
        $data['php_error_reporting'] = ini_get('error_reporting');
        $data['php_timezone'] = ini_get('date.timezone');
        $data['php_process_owner'] = '';
        $data['php_memory_limit'] = ini_get('memory_limit');
        $data['php_max_execution_time'] = ini_get('max_execution_time');
        $data['php_max_input_time'] = ini_get('max_input_time');
        $data['php_display_errors'] = ini_get('display_errors');
        $data['php_upload_max_filesize'] = ini_get('upload_max_filesize');
        $data['php_ext_ldap'] = $this->ext('ldap');
        $data['php_ext_mbstring'] = $this->ext('mbstring');
        $data['php_ext_mcrypt'] = $this->ext('mcrypt');
        $data['php_ext_mysql'] = $this->ext('mysql');
        $data['php_ext_posix'] = $this->ext('posix');
        $data['php_ext_snmp'] = $this->ext('snmp');
        $data['php_ext_xml'] = $this->ext('xml');

        $data['oae_link'] = '';
        $data['oae_server'] = '';
        $data['oae_username'] = '';

        if (php_uname('s') == 'Windows NT') {
            $data['os_platform'] = 'Windows';
            $opCommon = 'c:\omk\conf\opCommon.nmis';
            $phpini = 'c:\xampplite\php\php.ini';
            exec("echo. |WMIC OS Get Caption", $output);
            if (isset($output[1])) {
                $data['os_version'] = $output[1];
            }
            unset($output);
        }

        if (php_uname('s') == 'Linux') {
            $data['os_platform'] = 'linux';
            if (file_exists('/etc/issue.net')) {
                $i = file('/etc/issue.net');
                $data['os_version'] = trim($i[0]);
            }
            if (file_exists('/usr/local/omk/conf/opCommon.nmis')) {
                $opCommon = '/usr/local/omk/conf/opCommon.nmis';
            } elseif (file_exists('/usr/local/opmojo/conf/opCommon.nmis')) {
                $opCommon = '/usr/local/opmojo/conf/opCommon.nmis';
            }

            if ((stripos($data['os_version'], 'red') !== false) and (stripos($data['os_version'], 'hat') !== false)) {
                $data['os_platform'] = 'Linux (Redhat)';
            }
            if (stripos($data['os_version'], 'centos') !== false) {
                $data['os_platform'] = 'Linux (Redhat)';
            }
            if (stripos($data['os_version'], 'fedora') !== false) {
                $data['os_platform'] = 'Linux (Redhat)';
            }

            if (stripos($data['os_version'], 'debian') !== false) {
                $data['os_platform'] = 'Linux (Debian)';
            }
            if (stripos($data['os_version'], 'ubuntu') !== false) {
                $data['os_platform'] = 'Linux (Debian)';
            }
            if (stripos($data['os_version'], 'mint') !== false) {
                $data['os_platform'] = 'Linux (Debian)';
            }

            if ($data['os_platform'] == 'Linux (Debian)') {
                $phpini = '/etc/php5/apache2/php.ini';
                $package_install = 'apt-get install';
            }
            if ($data['os_platform'] == 'Linux (Redhat)') {
                $phpini = '/etc/php.ini';
                $package_install = 'yum install';
            }
        }

        if (php_uname('s') == 'Darwin') {
            $data['os_platform'] = 'OSX';
        }

        if ($data['os_platform'] == 'Windows') {
            # nmap
            $test_path = 'c:\Program Files\Nmap\Nmap.exe';
            if ($data['prereq_nmap'] == 'n' and file_exists($test_path)) {
                $data['prereq_nmap'] = 'c:\Program Files\Nmap\Nmap.exe';
            }
            $test_path = 'c:\Program Files (x86)\Nmap\Nmap.exe';
            if ($data['prereq_nmap'] == 'n' and file_exists($test_path)) {
                $data['prereq_nmap'] = 'c:\Program Files (x86)\Nmap\Nmap.exe';
            }
            unset($test_path);

            # system timezone
            $command_string = 'tzutil /g';
            exec($command_string, $output, $return_var);
            $data['os_timezone'] = @$output[0];

            $data['application_log_permission'] = '-rw-rw-r--';
            $data['prereq_apache_mod_proxy'] = 'y';
        }

        if ($data['os_platform'] == 'OSX') {
            #nmap
            $test_path = '/usr/local/bin/nmap';
            if (file_exists($test_path)) {
                $data['prereq_nmap'] = 'y';
            }
        }

        if (strpos($data['os_platform'], 'Linux') !== false) {
            ### general items ###

            # log file perms
            $command_string = 'ls -l /usr/local/open-audit/other/log_system.log | cut -d" " -f1';
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data['application_log_permission'] = $output[0];
            }
            unset($output);
            unset($command_string);

            # php process owner
            if (extension_loaded('posix')) {
                $i = posix_getpwuid(posix_geteuid());
                $data['php_process_owner'] = $i['name'];
                unset($i);
            } else {
                $hints['php_process_owner'] = 'No PHP posix extension loaded - cannot determine process owner.';
                $data['php_process_owner'] = '';
            }

            # system timezone
            if ($data['os_platform'] == 'Linux (Redhat)') {
                $command_string = 'cat /etc/sysconfig/clock | grep ZONE | cut -d"\"" -f2';
                exec($command_string, $output, $return_var);
                $data['os_timezone'] = @$output[0];
            }
            if ($data['os_platform'] == 'Linux (Debian)') {
                $command_string = 'cat /etc/timezone';
                exec($command_string, $output, $return_var);
                $data['os_timezone'] = @$output[0];
            }
            unset($output);
            unset($command_string);

            ### prereqs ###

            # curl
            $command_string = "which curl 2>/dev/null";
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data['prereq_curl'] = @$output[0];
            }
            unset($output);
            unset($command_string);

            # nmap
            $command_string = "which nmap 2>/dev/null";
            exec($command_string, $output, $return_var);
            if (isset($output[0]) and strpos($output[0], 'nmap')) {
                $data['prereq_nmap'] = $output[0];
            }
            unset($output);
            unset($command_string);

            # nmap perms
            $command_string = 'ls -l '.$data['prereq_nmap'].' | cut -d" " -f1';
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data['prereq_nmap_perms'] = $output[0];
            }
            unset($output);
            unset($command_string);

            # screen
            $command_string = "which screen 2>/dev/null";
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data['prereq_screen'] = @$output[0];
            }
            unset($output);
            unset($command_string);

            # sshpass
            $command_string = "which sshpass 2>/dev/null";
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data['prereq_sshpass'] = @$output[0];
            }
            unset($output);
            unset($command_string);

            # wget
            $command_string = "which wget 2>/dev/null";
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data['prereq_wget'] = @$output[0];
            }
            unset($output);
            unset($command_string);

            # zip
            $command_string = "which zip 2>/dev/null";
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data['prereq_zip'] = @$output[0];
            }
            unset($output);
            unset($command_string);

            if ($data['os_platform'] == 'Linux (Debian)') {
                # Samba Client
                $command_string = "which smbclient 2>/dev/null";
                exec($command_string, $output, $return_var);
                if (isset($output[0])) {
                    $data['prereq_samba-client'] = $output[0];
                }
                unset($output);
                unset($command_string);

                # Apache Mod Proxy
                $command_string = 'dpkg-query -s libapache2-mod-proxy-html | grep "Status: "';
                exec($command_string, $output, $return_var);
                if (isset($output[0])) {
                    $data['prereq_apache_mod_proxy'] = $output[0];
                }
                unset($output);
                unset($command_string);

                # PHP CLI
                $command_string = 'dpkg-query -s php5-cli | grep "Status: "';
                exec($command_string, $output, $return_var);
                if (isset($output[0])) {
                    $data['prereq_php-cli'] = $output[0];
                }
                unset($output);
                unset($command_string);
            }

            if ($data['os_platform'] == 'Linux (Redhat)') {
                # Samba Client
                $command_string = "which smbclient 2>/dev/null";
                exec($command_string, $output, $return_var);
                if (isset($output[0])) {
                    $data['prereq_samba-client'] = $output[0];
                }
                unset($output);
                unset($command_string);

                # Apache Mod Proxy (installed by default on RedHat)
                $data['prereq_apache_mod_proxy'] = 'y';

                # PHP CLI
                $command_string = 'rpm -qa php-cli';
                exec($command_string, $output, $return_var);
                if (isset($output[0])) {
                    $data['prereq_php-cli'] = $output[0];
                }
                unset($output);
                unset($command_string);
            }
        }

        unset($output);
        unset($command_string);

        ### oae config details ###

        # oae link
        if (stripos($data['os_platform'], 'linux') !== false) {
            $command_string = 'cat /usr/local/omk/conf/opCommon.nmis | grep oae_link';
        } elseif ($data['os_platform'] == 'Windows') {
            $command_string = 'type c:\omk\conf\opCommon.nmis | find "oae_link"';
        }
        exec($command_string, $output, $return_var);
        if (isset($output[0])) {
            $data['oae_link'] = @$output[0];
            $data['oae_link'] = str_replace(",", "", str_replace("'", "", trim(str_replace("'oae_link' => '", '', @$output[0]))));
        }
        unset($output);
        unset($command_string);

        # oae server
        if (stripos($data['os_platform'], 'linux') !== false) {
            $command_string = 'cat '.$opCommon.' | grep oae_server';
        } elseif ($data['os_platform'] == 'Windows') {
            $command_string = 'type '.$opCommon.' | find "oae_server"';
        }
        exec($command_string, $output, $return_var);
        if (isset($output[0])) {
            $data['oae_server'] = @$output[0];
            $data['oae_server'] = str_replace(",", "", str_replace("'", "", trim(str_replace("'oae_server' => '", '', @$output[0]))));
        }
        unset($output);
        unset($command_string);

        # oae user
        if (stripos($data['os_platform'], 'linux') !== false) {
            $command_string = 'cat /usr/local/omk/conf/opCommon.nmis | grep oae_user';
        } elseif ($data['os_platform'] == 'Windows') {
            $command_string = 'type c:\omk\conf\opCommon.nmis | find "oae_user"';
        }
        exec($command_string, $output, $return_var);
        if (isset($output[0])) {
            $data['oae_username'] = str_replace(",", "", str_replace("'", "", trim(str_replace("'oae_username' => '", '', @$output[0]))));
        }
        unset($output);
        unset($command_string);

        # Intelligent hints about incorrect configuration

        if ($data['oae_server'] != 'http://127.0.0.1/open-audit/') {
            $hints['oae_server'] = 'You have Open-AudIT Enterprise installed on this server, but it is not pointing at the correct URL for Open-AudIT. It should be set to http://127.0.0.1/open-audit/ in the file '.$opCommon.', it is currently set to '.$data['oae_server'];
        }

        $t1 = FCPATH.SELF;
        $t2 = str_replace('\\', '/', $t1);
        if ((strpos($t1, $data['oae_link'].'index.php') === false) and (strpos($t2, $data['oae_link'].'index.php') === false)) {
            $hints['oae_link'] = FCPATH.SELF.'The links from your Open-AudIT Enterprise config to your Open-AudIT installation do not appear correct. Please check the file '.$opCommon.' and set the value of oae_link to /open-audit/';
        }

        if ($data['application_environment'] != 'development') {
            $hints['application_environment'] = 'When having issues with Open-AudIT, it is best to set the application to \'debug\' mode. To do this, go to '.FCPATH.SELF.' and edit the line: define(\'ENVIRONMENT\', \''.$data['application_environment'].'\'); This should be line 57 (or thereabouts), and change it to define(\'ENVIRONMENT\', \'development\');';
        }

        if (strpos($data['os_platform'], 'Linux') !== false) {
            foreach ($data as $key => $value) {
                if ((strpos($key, 'prereq') !== false) and ($value == 'n' or $value == '')) {
                    if ($key != 'prereq_nmap_perms') {
                        $hints[$key] = 'The prerequisite package '.str_replace('prereq_', '', $key).' is missing or incorrect.';
                        $package_name = str_replace('prereq_', '', $key);
                        if ($package_name == 'php-cli' and $data['os_platform'] == 'Linux (Debian)') {
                            $package_name = 'php5-cli';
                        }
                        #if ($key == 'prereq_winexe') {
                        #    $hints[$key] .= ' Winexe is required to be able to audit a Windows machine from a Linux Open-AudIT server. You can download Winexe from <a href="http://download.opensuse.org/repositories/home:/ahajda:/winexe/" style="color: blue; text-decoration: underline;">here</a>.';
                        #} else {
                            $hints[$key] .= ' You can likely install it with "'.$package_install.' '.$package_name.'".';
                        #}
                    }
                }
            }
        }

        if ($data['prereq_nmap_perms'] != '-rwsr-xr-x' and
            $data['prereq_nmap_perms'] != '-rwsr-xr-x.' and
            stripos($data['os_platform'], 'linux') !== false) {
            $hints['prereq_nmap_perms'] = 'It appears that nmap has not had its SUID set. This can be fixed by "chmod u+s '.$data['prereq_nmap'].'" (sans quotes).';
        }

        if ($data['application_log_permission'] != '-rw-rw-r--' and $data['application_log_permission'] != '-rw-rw-r--.') {
            $hints['application_log_permission'] = 'The permissions on your open-audit log file are not set correctly. This can be fixed by "chmod 664 /usr/local/open-audit/other/log_system.log" (sans quotes).';
        }

        if ($data['os_timezone'] != $data['php_timezone'] or $data['os_timezone'] != $data['application_timezone']) {
            $hints['timezone'] = 'Your operating system and PHP timezones are different. Please ensure they are the same. Your php.ini should be found at '.$phpini.'.';
            if ($data['os_platform'] == 'Windows') {
                $hints['timezone'] .= ' Please note the Windows timezones do not match (exactly) the PHP timezones. Therefore (on Windows) this warning may not be valid - just make sure you have set your timezones for Windows and PHP correctly.';
            }
        }

        foreach ($data as $key => $value) {
            if ((strpos($key, 'php_ext_') !== false) and ($value == 'n' or $value == '')) {
                $hints[$key] = 'The PHP module '.str_replace('php_ext_', '', $key).' is missing.';
                if ($data['os_platform'] == 'Linux (Debian)') {
                    $hints[$key] .= ' On Debian based Linux systems, if php-mcrypt is installed, you make need to activate it with "php5enmod '.str_replace('php_ext_', '', $key).'"
					 and then restart Apache with "service apache2 restart" (both sans quotes).';
                }
            }
        }

        if ($data['application_prod_devices'] != $data['application_prod_devices_in_all']) {
            $hints['application_prod_devices'] = 'You have different numbers of devices in your database, compared to the All Devices Group. You can update the devices in Groups by going to Menu -> Admin -> Groups -> List Groups and clicking the "update" icon on the right side.';
        }

        if (intval($data['application_non-prod_devices']) > 0) {
            $hints['application_non-prod_devices'] = 'You have devices in your database in a non-production status. You can remove these devices by going to Menu -> Admin -> Database -> Database Maintenance and clicking the Delete icon to remove devices of various Status.';
        }

        if (intval($data['application_temp_rows']) > 0) {
            $hints['application_temp_rows'] = 'You have temporary rows in your database tables. If you are certain there are no Discovery processes running you can remove these rows by going to Menu -> Admin -> Database -> Database Maintenance and clicking the Delete icon to remove Rows in Temp Table.';
        }

        $this->data['hints'] = $hints;
        $this->data['data'] = $data;
        $this->data['include'] = 'v_help_support';
        $this->data['heading'] = 'Support Data';
        $this->load->view('v_template', $this->data);
    }

    public function ext($extension)
    {
        if (!extension_loaded($extension)) {
            return('n');
        } else {
            return('y');
        }
    }
}
