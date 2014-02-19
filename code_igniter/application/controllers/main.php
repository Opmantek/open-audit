<?php
#
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class main extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect('main/list_groups/');
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
        $count = $this->m_systems->get_count();
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
            $this->data['user_access_level'] = $this->m_oa_group->get_group_access($_POST['group_id'], $this->data['user_id']);
            if ($this->data['user_access_level'] < '10') {
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
            $this->data['user_access_level'] = $this->m_oa_group->get_group_access($_POST['group_id'], $this->data['user_id']);
            if ($this->data['user_access_level'] < '10') {
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
            if ((mb_strpos($key, 'system_') !== false) and ($value != '')) {
                $item = array($key, $value);
                array_push($data['systems'], ($item));
                $item = null;
            }
        }

        # create the SNMP credentials
        if (($_POST['snmp_community'] > '') and ($_POST['snmp_version'] > '')) {
            foreach ($data['systems'] as $system) {
                $encode['ip_address'] = ip_address_from_db($this->m_system->check_man_ip_address($system[1]));
                # make sure the device in question actually has an ip address
                if (($encode['ip_address'] > '') and ($encode['ip_address'] <> '0.0.0.0')) {
                    $encode['snmp_version'] = $_POST['snmp_version'];
                    $encode['snmp_community'] = $_POST['snmp_community'];
                    $encoded = json_encode($encode);
                    $encoded = $this->encrypt->encode($encoded);
                    $this->m_system->update_system_man($system[1], 'access_details', $encoded);
                    $this->m_audit_log->insert_audit_event('access details', 'Details changed (not displayed here for security reasons).', $system[1]);
                }
            }
        }
        foreach ($_POST as $field_name => $field_data) {
            # input all the manual fields
            if (((mb_strpos($field_name, 'man_') !== false) or (mb_strpos($field_name, 'nmis_') !== false)) && ($field_data != '')) {
                foreach ($data['systems'] as $system) {
                    $this->m_system->update_system_man($system[1], $field_name, $field_data);
                    $this->m_audit_log->insert_audit_event($field_name, $field_data, $system[1]);
                }
            }
        }
        foreach ($data['systems'] as $system) {
            $details->system_id = $system[1];
            $details->type = 'computer';
            $this->m_oa_group->update_system_groups($details);
        }
        redirect('/main/list_devices/' . $group_id);
    }

    public function list_groups()
    {
        $this->load->model("m_oa_group");
        $this->data['query'] = $this->m_oa_group->get_user_groups($this->data['user_id']);
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
            $this->data['user_access_level'] = $this->m_oa_group->get_group_access($this->data['id'], $this->data['user_id']);
            if ($this->data['user_access_level'] < '3') {
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
            if (((strpos($segment, 'out') === 0) or (strpos($segment, 'only') === 0) ) and (strpos($segment, '___'))) {
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
        $this->data['sortcolumn'] = '2';
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
            if ($this->m_oa_group->get_group_access($this->data['id'], $this->data['user_id']) < '3') {
                // not even VIEW permission - redirect
                redirect('main/list_groups/');
            }
        }
        if (isset($_POST["search"])) {
            redirect('main/search/' . $this->data['id'] . '/' . $_POST['search']);
        }
        $this->data['group_id'] = $this->uri->segment(3, 0);
        $this->data['search_term'] = urldecode($this->uri->segment(4, 0));
        $this->data['search_term'] = html_entity_decode($this->data['search_term']);
        $this->load->model("m_systems");
        $result = $this->m_systems->search($this->data['search_term'], $this->data['group_id']);
        $this->data['query'] = $result;
        $this->data['heading'] = 'Search Result (' . $this->data['search_term'] . ")";
        $this->data['include'] = 'v_search_result';
        $this->data['sortcolumn'] = '0';
        $this->data['export_report'] = 'y';
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }

    public function search_device()
    {
        # search for a mcth on PRODUCTION devices only.
        # search for name, ip
        $this->data['search'] = urldecode($this->uri->segment(3, 0));
        $this->data['search'] = html_entity_decode($this->data['search']);
        $this->load->model("m_system");
        $this->data['query'] = $this->m_system->search_device($this->data['search']);
        $this->data['heading'] = 'Search Result (' . $this->data['search'] . ")";
        $this->data['column'] = $this->m_system->search_device_columns();
        $this->data['count'] = count($this->data['query']);
        $this->data['include'] = 'v_dump';
        $this->data['sortcolumn'] = '0';
        $this->data['export_report'] = 'y';
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
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
        $this->data['heading'] = 'Storage use for ' . $system_name ;
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
        $this->data['heading'] = 'Storage use for ' . $system_name ;
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
            $this->data['access_level'] = $this->m_system->get_system_access_level($system_id, $this->data['user_id']);
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
            $target = BASEPATH . "../application/attachments/" . $_POST['system_id'] . "_" . basename($_FILES['attachment']['name']);
            if (move_uploaded_file($_FILES['attachment']['tmp_name'], $target)) {
                $this->load->model("m_attachment");
                $this->m_attachment->create_system_attachment($_POST['system_id'], $_POST['title'], $target);
                redirect("main/system_display/" . $_POST['system_id']);
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
            $this->data['access_level'] = $this->m_system->get_system_access_level($system_id, $this->data['user_id']);
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
        redirect("main/system_display/" . $attachment->system_id);
    }

    public function show_attachment()
    {
        $this->load->model("m_attachment");
        $attachment = $this->m_attachment->get_attachment($this->data['id']);
        $system_id = $attachment->system_id;
        $this->load->model("m_system");
        if ($system_id > '0') {
            // we must check to see if the user has at least VIEW permission on the system
            $this->data['access_level'] = $this->m_system->get_system_access_level($system_id, $this->data['user_id']);
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
        header('Content-Type: ' . get_mime_by_extension($attachment->att_filename));
        #header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Content-Disposition: inline;filename="' . $filename . '"');
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
            $this->data['access_level'] = $this->m_system->get_system_access_level($system_id, $this->data['user_id']);
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
        header('Content-Type: ' . get_mime_by_extension($attachment->att_filename));
        header('Content-Disposition: attachment;filename="' . $filename . '"');
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
            $this->data['access_level'] = $this->m_system->get_system_access_level($this->data['id'], $this->data['user_id']);
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
        print_r(json_encode($this->data['query']));
    }

    public function system_display()
    {
        $this->load->model("m_system");
        $this->data['id'] = $this->m_system->get_system_id($this->data['id']);
        if ($this->data['id'] > '0') {
            // we must check to see if the user has at least VIEW permission on the system
            $this->data['access_level'] = $this->m_system->get_system_access_level($this->data['id'], $this->data['user_id']);
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

        #$this->data['bios'] = $this->m_bios->get_system_bios($this->data['id']);
        $this->data['bios'] = $this->m_oa_general->get_system_attribute('sys_hw_bios', '*', $this->data['id']);

        $this->data['codecs'] = $this->m_software->get_system_software($this->data['id'], 5);
        $this->data['database'] = $this->m_database->get_system_db($this->data['id']);
        $this->data['database_details'] = $this->m_database_details->get_system_db_details($this->data['id']);
        $this->data['dns'] = $this->m_dns->get_system_dns($this->data['id']);
        $this->data['hard_drive'] = $this->m_hard_drive->get_system_hard_drive($this->data['id']);
        $this->data['ip'] = $this->m_ip_address->get_system_ip($this->data['id']);
        $this->data['locations'] = $this->m_oa_location->get_location_names();
        $this->data['memory'] = $this->m_memory->get_system_memory($this->data['id']);
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

        #$this->data['share'] = $this->m_share->get_system_share($this->data['id']);
        $this->data['share'] = $this->m_oa_general->get_system_attribute('sys_sw_share', '*', $this->data['id']);

        $this->data['software'] = $this->m_software->get_system_software($this->data['id'], 0);
        $this->data['sound'] = $this->m_sound->get_system_sound($this->data['id']);

        #$this->data['system'] = $this->m_system->get_system_summary($this->data['id']);
        $this->data['system'] = $this->m_oa_general->get_attribute('system', '*', $this->data['id']);

        $this->data['system_group'] = $this->m_group->get_system_group($this->data['id']);
        $this->data['system_id'] = $this->data['id'];
        $this->data['system_location'] = $this->m_oa_location->get_system_location($this->data['id']);
        $this->data['system_org'] = $this->m_oa_org->get_system_org($this->data['id']);
        $this->data['system_log'] = $this->m_log->get_system_log($this->data['id']);
        $this->data['system_user'] = $this->m_user->get_system_user($this->data['id']);
        $this->data['system_variable'] = $this->m_variable->get_system_variable($this->data['id']);
        $this->data['updates'] = $this->m_software->get_system_software($this->data['id'], 2);
        $this->data['video'] = $this->m_video->get_system_video($this->data['id']);
        $this->data['windows'] = $this->m_windows->get_system_windows($this->data['id']);
        $this->data['webserver'] = $this->m_webserver->get_system_webserver($this->data['id']);
        $this->data['website_details'] = $this->m_webserver->get_system_websites($this->data['id']);

        # TODO: add in browser addons and odbc drivers

        # only show to users with 'view sensitive details' level of access access level >= 7
        if ($this->data['access_level'] >= '7') {
            $this->load->model("m_software_key");
            $this->data['software_key'] = $this->m_software_key->get_system_key($this->data['id']);

            if ($this->data['system'][0]->access_details) {
                $this->load->library('encrypt');
                $this->data['decoded_access_details'] = $this->encrypt->decode($this->data['system'][0]->access_details);
                $this->data['decoded_access_details'] = json_decode($this->data['decoded_access_details']);
                #echo "<pre>\n";
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
                #var_dump($this->data['decoded_access_details']);
                #exit();
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

        $this->data['include'] = "";
        $formatted_type = str_replace(" ", "_", trim($this->data['system'][0]->man_type));

        if ($this->data['system'][0]->man_type == 'computer') {
            if (file_exists(APPPATH . "views/theme-" . $this->data['user_theme'] . "/v_display_computer_" . $this->data['system'][0]->man_os_group . ".php")) {
                $this->data['include'] = "v_display_computer_" . $this->data['system'][0]->man_os_group;
            } else {
                $this->data['include'] = "v_display_computer";
            }

        } elseif (file_exists(APPPATH . "views/theme-" . $this->data['user_theme'] . "/v_display_" . $this->data['system'][0]->man_type . ".php")) {
            $this->data['include'] = "v_display_" . trim($this->data['system'][0]->man_type);

        } elseif (file_exists(APPPATH . "views/theme-" . $this->data['user_theme'] . "/v_display_" . $formatted_type . ".php")) {
            $this->data['include'] = "v_display_" . str_replace(" ", "_", trim($this->data['system'][0]->man_type));

        } else {
            $this->data['include'] = "v_display_general";
        }

        foreach ($this->data['system'] as $system) {
            $model_formatted = str_replace(']', '', str_replace('[', '', str_replace(' ', '_', trim(mb_strtolower($system->man_model)))));
            $type_formatted = str_replace(" ", "_", trim(mb_strtolower($system->man_type)));
            $default_file_exists = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]) . 'device_images/' . $system->man_picture . '.jpg';
            $model_file_exists   = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]) . 'device_images/' . $model_formatted . '.jpg';
            $type_file_exists    = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]) . 'device_images/' . $type_formatted . '.png';
            $custom_file_exists  = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]) . 'device_images/custom/' . $system->system_id . '.jpg';

            # check if the man_picture field from the database is populated and a matching image exists
            if (($system->man_picture > '') and (file_exists($default_file_exists))) {
                $system->man_picture = $system->man_picture . '.jpg';
            }

            # check if a custom images exists and overwrite
            if (file_exists($custom_file_exists)) {
                $system->man_picture = 'custom/' . $system->system_id . '.jpg';
            }

            # check if an image matching the and exists
            if (($system->man_picture == '') and (file_exists($model_file_exists))) {
                $system->man_picture = '' . $model_formatted . '.jpg';
            }

            # test for a generic ibm aix device
            if (($system->man_picture == '') and (strtolower($system->man_os_family) == "ibm aix")) {
                $system->man_picture = "ibm_aix.jpg";
            }

            # check if an image matching the type exists
            if (($system->man_picture == '') and (file_exists($type_file_exists))) {
                $system->man_picture = '' . $type_formatted . '.png';
            }

            # no matching images, assign the unknown image
            if ($system->man_picture == '') {
                $system->man_picture = 'unknown.png';
            }
        }

        $this->data['heading'] = 'Summary - ' . $this->m_system->get_system_hostname($this->data['id']);
        $this->load->view('v_template', $this->data);
    }

    public function edit_user()
    {
        $this->load->model("m_oa_user");
        $this->load->model("m_oa_group");
        $this->load->helper('url');
        if (!isset($_POST['EditUser'])) {
            # load the initial form
            $this->data['user'] = $this->m_oa_user->get_user_details($this->data['user_id']);
            if ($this->session->userdata('user_admin') == 'y') {
                $this->data['user_group'] = $this->m_oa_group->get_all_user_groups($this->data['user_id']);
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
            $details->user_id = $this->data['user_id'];
            if ($details->user_password != $details->user_password_confirm) {
                $error = '1';
                $this->data['error_message'] = "Passwords must match.";
                $this->data['user'] = $this->m_oa_user->get_user_details($this->data['user_id']);
                $this->data['user_group'] = $this->m_oa_group->get_all_user_groups($this->data['user_id']);
                $this->data['heading'] = 'Edit User';
                $this->data['include'] = 'v_edit_user';
                $this->data['url'] = current_url();
                $this->load->view('v_template', $this->data);
            }

            if ($this->m_oa_user->check_user_name($details->user_name, $details->user_id) == false) {
                $error = '1';
                $this->data['error_message'] = "Username already exists.";
                $this->data['user'] = $this->m_oa_user->get_user_details($this->data['user_id']);
                $this->data['user_group'] = $this->m_oa_group->get_all_user_groups($this->data['user_id']);
                $this->data['heading'] = 'Edit User';
                $this->data['include'] = 'v_edit_user';
                $this->data['url'] = current_url();
                $this->load->view('v_template', $this->data);
            }

            if ($error == '0') {
                $this->m_oa_user->edit_user($details);
                if ($this->session->userdata('user_admin') == 'y') {
                    $this->m_oa_group->edit_user_groups($details);
                }
                redirect('admin_user/list_users');
            }
        }
    }
}
