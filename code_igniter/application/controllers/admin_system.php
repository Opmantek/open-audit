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

class Admin_system extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // must be an admin to access this page
        if ($this->session->userdata('user_admin') != 'y') {
            if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                redirect('login/index');
            }
        }
        $this->log_event();
    }

    public function index()
    {
        redirect('/');
    }

    public function add_system_def()
    {
        if (!isset($_POST['AddSystemDef'])) {
            $this->load->model("m_oa_admin_database");
            $this->data['fields'] = $this->m_oa_admin_database->get_fields('system');
            $this->data['custom_fields'] = $this->m_oa_admin_database->export_table('sys_man_additional_fields');
            $result = array();
            foreach ($this->data['fields'] as $field) {
                if ((mb_strpos($field, 'man_') !== false) and
                    (mb_strpos($field, 'man_type') === false)) {
                    $result[] = $field;
                }
            }
            sort($result);
            $this->data['fields'] = $result;
            $this->data['heading'] = 'Add System Definition';
            $this->data['include'] = 'v_add_system_def';
            $this->load->view('v_template', $this->data);
        } else {
            # process the form
            $this->data['error_message'] = '';
            echo "<pre>\n";
            print_r($_POST);
            echo "</pre>\n";
            $select_string = '';
            foreach ($_POST as $key => $value) {
                if (($value == 'on') and (strpos($key, "man_") !== false)) {
                    $select_string .= 'system.' . $key . ', ';
                }
            }
            $select_string = substr($select_string, 0, strlen($select_string)-2);

            echo "NAME: " . $_POST['name'] . "<br />\n";
            echo "TYPE: " . $_POST['man_type'] . "<br />\n";
            echo "SELECT: " . $select_string . "<br />\n";

            $select_custom = '';
            foreach ($_POST as $key => $value) {
                if (strpos($key, "custom_new_") !== false) {
                    echo "CUSTOM: " . $key . " - " . $value . "<br />\n";
                    $select_custom .= 'sys_man_additional_fields.' . $value . ', ';
                }
            }
            foreach ($_POST as $key => $value) {
                if (($value == 'on') and (strpos($key, "custom_exist_") !== false)) {
                    echo "Custom Existing: " . $key . " - " . $value . "<br />\n";
                    $new_key = str_replace("custom_exist_", "", $key);
                    $select_custom .= 'sys_man_additional_fields.' . $new_key . ', ';
                }
            }
            $select_custom = substr($select_custom, 0, strlen($select_custom)-2);
            echo "SELECT CUSTOM: " . $select_custom . "<br />\n";
        }
    }

    public function system_add_new_credentials()
    {
        $details = new stdClass();
        $details->system_id = intval($this->uri->segment(3, 0));
        if ((!is_int($details->system_id)) or ($details->system_id == 0)) {
            redirect('main/list_devices');
        }
        $this->load->model("m_system");
        $this->data['system_id'] = $details->system_id;
        $this->data['ip_address'] = ip_address_from_db($this->m_system->check_man_ip_address($details->system_id));
        $this->data['heading'] = 'Add Device Credentials';
        $this->data['include'] = 'v_add_system_credentials';
        $this->load->view('v_template', $this->data);
    }

    public function system_add_credentials()
    {
        $system_id = $_POST['system_id'];
        $this->load->model("m_system");
        $this->load->library('encrypt');

        if ($_POST['ip_address'] > "") {
            $encode['ip_address'] = $_POST['ip_address'];
        } else {
            $encode['ip_address'] = '';
        }

        if ($_POST['snmp_version'] > "") {
            $encode['snmp_version'] = $_POST['snmp_version'];
        } else {
            $encode['snmp_version'] = '';
        }

        if ($_POST['snmp_community'] > "") {
            $encode['snmp_community'] = $_POST['snmp_community'];
        } else {
            $encode['snmp_community'] = '';
        }

        if ($_POST['ssh_username'] > "") {
            $encode['ssh_username'] = $_POST['ssh_username'];
        } else {
            $encode['ssh_username'] = '';
        }

        if ($_POST['ssh_password'] > "") {
            $encode['ssh_password'] = $_POST['ssh_password'];
        } else {
            $encode['ssh_password'] = '';
        }

        if ($_POST['windows_username'] > "") {
            $encode['windows_username'] = $_POST['windows_username'];
        } else {
            $encode['windows_username'] = '';
        }

        if ($_POST['windows_password'] > "") {
            $encode['windows_password'] = $_POST['windows_password'];
        } else {
            $encode['windows_password'] = '';
        }

        if ($_POST['windows_domain'] > "") {
            $encode['windows_domain'] = $_POST['windows_domain'];
        } else {
            $encode['windows_domain'] = '';
        }

        $encoded = json_encode($encode);
        $encoded = $this->encrypt->encode($encoded);
        $this->m_system->update_system_man($system_id, 'access_details', $encoded);

        if ($_POST['snmp_scan'] == true) {
            redirect('admin_system/system_snmp/' . $system_id);
        } else {
            redirect('main/system_display/' . $system_id);
        }
    }

    public function system_snmp()
    {
        // check to make sure we have SNMP capability
        # TODO - provide a message saying SNMP extension not loaded
        if (!extension_loaded('snmp')) {
            redirect('main/list_devices');
        }
        $this->load->model("m_system");
        $this->load->model("m_sys_man_audits");
        $this->load->model("m_oa_general");
        $this->load->library('encrypt');
        $this->load->helper('snmp');
        $this->load->helper('snmp_oid');
        $details = new stdClass();
        $details->system_id = $this->uri->segment(3, 0);
        $encrypted_access_details = $this->m_system->get_access_details($details->system_id);
        $details->hostname = $this->m_oa_general->get_attribute("system", "hostname", $details->system_id);
        $details->man_ip_address = ip_address_from_db($this->m_oa_general->get_attribute("system", "man_ip_address", $details->system_id));
        $details->show_output = true;

        # set up the pop up page
        echo "<html>
        <head>
        <script type=\"text/javascript\">
        window.onunload = refreshParent;
        function refreshParent()
        {
            window.opener.location.reload();
        }
        function CloseMe()
        {
            window.opener.location.reload();
            window.close();
        }
        </script>
        </head>
        <body>
        <h3 style='text-align: center'>Open-AudIT SNMP Scan</h3>
        <p style='font-family: \"Verdana\",\"Lucida Sans Unicode\",\"Lucida Sans\",Sans-Serif; font-size: 12px;'>";

        # audit the device via snmp
        get_snmp($details);
        $details->last_seen_by = 'snmp';
        $details->timestamp = date('Y-m-d G:i:s');
        $details->last_seen = $details->timestamp;
        $details->last_user = $this->data['user_full_name'];
        $details->audits_ip = '127.0.0.1';
        unset($details->man_type);
        unset($details->show_output);
        unset($details->man_ip_address);
        echo "<pre>\n";
        #print_r($details);
        if (isset($details->snmp_oid) and $details->snmp_oid > '') {
            $this->m_system->update_system($details);
            $this->m_sys_man_audits->insert_audit($details);
        } else {
            echo "Audit NOT submitted.";
        }
        echo "<div align=\"center\"><input type=\"button\" value=\"Close\" onclick=\"CloseMe();\"/></div></p>\n</body>\n</html>";
    }

    public function add_system()
    {
        if (!isset($_POST['AddSystem'])) {
            # load the initial form
            $this->load->model("m_oa_org");
            $this->data['orgs'] = $this->m_oa_org->get_org_names();
            $this->load->model("m_oa_location");
            $this->data['locations'] = $this->m_oa_location->get_location_names();
            $this->load->model("m_systems");
            $this->data['os_group'] = $this->m_systems->get_distinct_os_group();
            $this->data['os_family'] = $this->m_systems->get_distinct_os_family();
            $this->data['os_name'] = $this->m_systems->get_distinct_os_name();
            $this->data['heading'] = 'Add Device';
            $this->data['include'] = 'v_add_system';
            $this->load->view('v_template', $this->data);
        } else {
            # process the form
            $this->data['error'] = '';
            $this->load->model('m_system');
            $this->load->model('m_oa_group');
            $this->load->model("m_sys_man_audits");
            $details = new stdClass();
            foreach ($_POST as $key => $value) {
                $details->$key = $value;
            }
            $details->type = $details->man_type;
            if (!isset($details->man_os_group)) {
                $details->man_os_group = '';
            }
            if (!isset($details->man_os_group_2)) {
                $details->man_os_group_2 = '';
            }
            if (!isset($details->man_os_family_typed)) {
                $details->man_os_family_typed = '';
            }
            if (!isset($details->man_os_name_2)) {
                $details->man_os_name_2 = '';
            }
            if (!isset($details->hostname)) {
                $details->hostname = '';
            }
            $details->last_seen_by = 'web form';
            $details->last_seen = date('Y-m-d G:i:s');
            $details->last_user = $this->data['user_full_name'];

            if (($details->man_type == 'access token' or
                $details->man_type == 'cell phone' or
                $details->man_type == 'mobile modem' or
                $details->man_type == 'phone' or
                $details->man_type == 'satellite phone' or
                $details->man_type == 'smart phone' or
                $details->man_type == 'tablet' ) and
                (!isset($details->man_serial) or $details->man_serial == '')) {
                $this->data['error'] = 'Serial number required.';
            }

            if (($details->man_type == 'cable modem' or
                $details->man_type == 'computer' or
                $details->man_type == 'firewall' or
                $details->man_type == 'game console' or
                $details->man_type == 'ip phone' or
                $details->man_type == 'network printer' or
                $details->man_type == 'router' or
                $details->man_type == 'switch' ) and
                ( (!isset($details->hostname) or $details->hostname =='' ) and
                  (!isset($details->man_ip_address) or $details->man_ip_address == '') and
                  (!isset($details->man_serial) or $details->man_serial == '' )) ) {
                $this->data['error'] = 'Hostname, ip address or serial number required.';
            }

            if (isset($details->man_os_group_2) and $details->man_os_group_2 != '' and $details->man_os_group == '') {
                $details->man_os_group = $details->man_os_group_2;
                unset($details->man_os_group_2);
            } else {
                unset($details->man_os_group_2);
            }

            if (($details->man_os_family_typed > '') and ($details->man_os_family == '')) {
                $details->man_os_family = $details->man_os_family_typed;
                unset($details->man_os_family_typed);
            } else {
                unset($details->man_os_family_typed);
            }

            if (($details->man_os_name_2 > '') and ($details->man_os_name == '')) {
                $details->man_os_name = $details->man_os_name_2;
                unset($details->man_os_name_2);
            } else {
                unset($details->man_os_name_2);
            }

            $details->system_key = $this->m_system->create_system_key($details);
            $details->hostname = preg_replace("/[^a-z0-9-.]+/i", "", $details->hostname);
            $details->hostname = mb_strtolower($details->hostname);

            if (isset($details->man_ip_address)) {
                $details->man_ip_address = $this->ip_address_to_db($details->man_ip_address);
            }
            $details->timestamp = date('Y-m-d H:i:s');
            $details->first_timestamp = $details->timestamp;
            $details->icon = $details->man_icon;
            $details->last_seen_by = 'web form';
            if ($details->icon == '') {
                $details->icon = $details->man_type;
            }

            unset($details->AddSystem);

            if ($this->data['error'] == '') {
                # add the system
                $details->system_id = $this->m_system->insert_system($details);
                $this->m_oa_group->update_system_groups($details);
                $this->m_sys_man_audits->insert_audit($details);
                redirect('main/index');
            } else {
                $this->data['query'] = $this->data['error'];
                $this->data['heading'] = 'Error';
                $this->data['include'] = 'v_error';
                $this->data['export_report'] = 'y';
                $this->data['group_id'] = '0';
                $this->load->view('v_template', $this->data);
                # reload the initial form
                /*
                $submitted_data = array();
                foreach ($_POST as $key => $value) {
                    $submitted_data[$key] = $value;
                }
                $this->load->model("m_systems");
                $this->data['os_group'] = $this->m_systems->get_distinct_os_group();
                $this->data['os_family'] = $this->m_systems->get_distinct_os_family();
                $this->data['os_name'] = $this->m_systems->get_distinct_os_name();
                $this->data["form"] = $submitted_data;
                $this->load->model("m_oa_org");
                $this->data['orgs'] = $this->m_oa_org->get_org_names();
                $this->load->model("m_oa_location");
                $this->data['locations'] = $this->m_oa_location->get_location_names();
                $this->data['heading'] = 'Add Device';
                $this->data['include'] = 'v_add_system';
                $this->load->view('v_template', $this->data);
                */
            }
        }
    }

    public function add_systems()
    {
        if (!isset($_POST['submit_file'])) {
            # nothing submitted - display the form
            $this->data['heading'] = 'Add Devices';
            $this->data['include'] = 'v_add_systems';
            $this->load->view('v_template', $this->data);
        }
        if (isset($_POST['submit_file'])) {
            # we have an uploaded file - store and process
            $timestamp = date("Y-m-d H:i:s");
            $target_path = BASEPATH . "../application/uploads/" . basename($_FILES['upload_file']['name']);

            if (!move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path)) {
                $this->data['error'] = "The file ".  basename($_FILES['upload_file']['name']). " could not be uploaded.<br />";
                $this->data['query'] = $this->data['error'];
                $this->data['heading'] = 'Error';
                $this->data['include'] = 'v_error';
                $this->data['export_report'] = 'y';
                $this->data['group_id'] = '0';
                $this->load->view('v_template', $this->data);
                exit();
            }

            require_once BASEPATH . '../application/libraries/phpexcel/PHPExcel/IOFactory.php';

            if (!$objPHPExcel = PHPExcel_IOFactory::load($target_path)) {
                $this->data['error'] = "Error creating the PHPExcel_IOFactory object.<br />";
                $this->data['query'] = $this->data['error'];
                $this->data['heading'] = 'Error';
                $this->data['include'] = 'v_error';
                $this->data['export_report'] = 'y';
                $this->data['group_id'] = '0';
                $this->load->view('v_template', $this->data);
                exit();
            }

            $attributes = array();
            $details = array();
            $object = new stdClass();
            $this->load->model("m_system");
            $this->load->model("m_oa_org");
            $this->load->model("m_oa_location");
            $this->load->model("m_sys_man_audits");
            $this->load->model("m_oa_group");
            $this->load->helper('snmp');
            $this->load->helper('snmp_oid');
            $this->load->library('encrypt');
            $objWorksheet = $objPHPExcel->getActiveSheet();
            $count = 0;
            $error = '';
            $this->data['error'] = '';

            foreach ($objWorksheet->getRowIterator() as $row) {
                $count++;
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(true);
                if ($count == 1) {
                    # grab the first row and use as column names
                    foreach ($cellIterator as $cell) {
                        $attributes[] = $cell->getValue();
                    }
                } else {
                    # populate the array values
                    $cellIterator->setIterateOnlyExistingCells(false);
                    unset($details);
                    $details = array();
                    $details = array_fill_keys($attributes, '');
                    $cell_number = 0;
                    foreach ($cellIterator as $cell) {
                        if ($cell_number < count($attributes)) {
                            $details[$attributes[$cell_number]] = $cell->getValue();
                            $cell_number++;
                        }
                    }

                    // convert the $details array to an object
                    $details = (object) $details;
                    $details->last_seen_by = "spreadsheet";
                    $details->last_seen = $timestamp;
                    $details->last_user = $this->data['user_full_name'];
                    $details->timestamp = $timestamp;
                    $error = '';

                    if (isset($details->org_name)) {
                        # we have an org name - need to find it's ID
                        if ($org_id = $this->m_oa_org->select_org($details->org_name)) {
                            # we have a matching org
                            $details->man_org_id = $org_id;
                        }
                    }

                    if (isset($details->location_name)) {
                        # we have a location name - need to find it's ID
                        if ($location_id = $this->m_oa_location->get_location_id($details->location_name)) {
                            # we have a match
                            $details->man_location_id = $location_id;
                        }
                    }

                    if (isset($details->snmp_community) and $details->snmp_community != '') {
                        if (isset($details->snmp_port) and $details->snmp_port != '') {
                            # leave it
                        } else {
                            $details->snmp_port = '161';
                        }
                        if (isset($details->snmp_version) and $details->snmp_version != '') {
                            # leave it
                        } else {
                            $details->snmp_version = '2c';
                        }
                        if (isset($details->man_ip_address) and $details->man_ip_address != '') {
                            $encode = array();
                            $encode->ip_address = $details->man_ip_address;
                            $encode->snmp_version = $details->snmp_version;
                            $encode->snmp_community = $details->snmp_community;
                            $encode->snmp_port = $details->snmp_port;
                            $encoded = json_encode($encode);
                            $encoded = $this->encrypt->encode($encoded);
                            $details->access_details = $encoded;
                            if (extension_loaded('snmp')) {
                                get_snmp($details);
                                $details->last_seen_by = 'snmp';
                            }
                        }
                    }

                    # first test to see if we have a system_id -
                    # if so, just send the submitted details to the system_update function
                    if (!isset($details->system_id) or $details->system_id == '') {

                        if (!isset($details->system_key) or $details->system_key == '') {
                            $details->system_key = $this->m_system->create_system_key($details);
                        }
                        # setting the system_key - we don't have the required info to create a unique key
                        if (!isset($details->system_key) or $details->system_key == '') {
                            $error = "Error on row #" . $count . ". Insufficient details to create system key. Please supply (in order of preference) fqdn, hostname and domain, ip address, type and (unique) serial.<br />";
                            $this->data['error'] .= $error;
                        }
                        # make sure we have a hostname variable
                        if (!isset($details->hostname)) {
                            $details->hostname = '';
                        }
                        $details->hostname = preg_replace("/[^a-z0-9-.]+/i", "", $details->hostname);
                        $details->hostname = mb_strtolower($details->hostname);

                        # try to determine if this device is already in the database
                        $details->system_id = $this->m_system->find_system($details);
                    }


                    error_log($details->system_id);
                    if ($error != '') {
                        $error = '';
                    } else {
                        if (isset($details->system_id) and $details->system_id > '') {
                            # we need to update an existing system
                            $this->m_system->update_system($details);
                        } else {
                            # this is a new system (we don't have a system_key match)
                            $details->first_timestamp = $details->timestamp;
                            $details->system_id = $this->m_system->insert_system($details);
                        }
                        // Insert an entry in to the audit log
                        $details->audits_ip = '';
                        $details->type = $this->m_system->get_system_type($details->system_id);
                        $this->m_sys_man_audits->insert_audit($details);
                        // Finally, update groups
                        $this->m_oa_group->update_system_groups($details);
                        unset($details);
                    }
                }
            }

            unlink($target_path);
            if ($this->data['error'] != '') {
                # there were errors with processing.
                $this->data['query'] = $this->data['error'];
                $this->data['heading'] = 'Error';
                $this->data['include'] = 'v_error';
                $this->data['export_report'] = 'y';
                $this->data['group_id'] = '0';
                $this->load->view('v_template', $this->data);
            } else {
                redirect('main/index');
            }
        }
    }

    public function ip_address_to_db($ip)
    {
        if (($ip <> "") and (!(is_null($ip))) and (substr_count($ip, '.') == 3)) {
            $myip = explode(".", $ip);
            $myip[0] = mb_substr("000" . $myip[0], -3);
            $myip[1] = mb_substr("000" . $myip[1], -3);
            $myip[2] = mb_substr("000" . $myip[2], -3);
            $myip[3] = mb_substr("000" . $myip[3], -3);
            $ip_post = $myip[0] . "." . $myip[1] . "." . $myip[2] . "." . $myip[3];
        } else {
            $ip_post = "000.000.000.000";
        }

        return $ip_post;
    }
}
