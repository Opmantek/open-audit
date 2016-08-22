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
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class Admin_system extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $log_details = new stdClass();
        stdlog($log_details);
        unset($log_details);
    }

    public function index()
    {
        redirect('/');
    }

    public function system_add_new_credentials()
    {
        $details = new stdClass();
        $details->id = intval($this->uri->segment(3, 0));
        if ((!is_int($details->id)) or ($details->id == 0)) {
            redirect('main/list_devices');
        }
        $this->load->model("m_system");
        $this->data['system_id'] = $details->id;
        $this->data['ip_address'] = ip_address_from_db($this->m_system->check_ip($details->id));
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
            redirect('admin_system/system_snmp/'.$system_id);
        } else {
            redirect('main/system_display/'.$system_id);
        }
    }

    public function system_icon()
    {
        # TODO - move this to a view and check credentials

        $system_id = intval($this->uri->segment(3, 0));
        $base_url = base_url();
        # set up the pop up page
        echo "<html>
	<head>
		<script type=\"text/javascript\">

		window.onunload = refreshParent;

		function refreshParent(){
			window.opener.location.reload();
		}

		function CloseMe(){
			window.opener.location.reload();
			window.close();
		}

		function createRequestObject() {
			var req;
			if(window.XMLHttpRequest){
				// Firefox, Safari, Opera...
				req = new XMLHttpRequest();
			} else if(window.ActiveXObject) {
				// Internet Explorer 5+
				req = new ActiveXObject(\"Microsoft.XMLHTTP\");
			} else {
				// There is an error creating the object,
				// just as an old browser is being used.
				alert('Problem creating the XMLHttpRequest object');
			}
			return req;
		}

		var http = createRequestObject();

		function update(name) {
			http.open('get', '".$base_url."index.php/ajax/update_system_man/".$system_id."/icon/'+name);
			http.onreadystatechange = receive_update;
			http.send(null);
		}

		function receive_update() {
			window.opener.location.reload();
			window.close();
		}
		</script>
	</head>
	<body>
		<h3 style='text-align: center; font-family: \"Verdana\",\"Lucida Sans Unicode\",\"Lucida Sans\",Sans-Serif;'>Icons</h3>
		<p style='font-family: \"Verdana\",\"Lucida Sans Unicode\",\"Lucida Sans\",Sans-Serif; font-size: 10px;'>
		Click an icon to set it for the device.<br /><br />
		<table>\n";

        $directory =  str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"].'theme-tango/tango-images');
        if (is_dir($directory)) {
            if ($handle = opendir($directory)) {
                while ($file = readdir($handle)) {
                    if (strpos($file, ".png") !== false and strpos($file, '16_') !== false) {
                        $files[] = $file;
                    }
                }
            }
            closedir($handle);
        }
        sort($files);
        $count = 0;
        foreach ($files as $file) {
            if ($file != '16_.png') {
                $count++;
                if ($count == 1) {
                    echo "<tr>";
                }
                $db_store = str_replace('16_', '', $file);
                $db_store = str_replace('.png', '', $db_store);
                $name = str_replace('_', ' ', $db_store);
                $name = ucwords($name);
                $name = trim($name);
                echo "<td><a style=\"text-decoration: none; font-size: 11px;\" href=\"#\" onclick=\"update('".$db_store."')\"><img src=\"/open-audit/theme-tango/tango-images/".$file."\" alt=\"\" /> ".$name."</a></td>";
                if ($count == 2) {
                    $count = 0;
                    echo "</tr>\n";
                }
            }
        }

        echo "</table>\b</body>";
    }

    public function system_snmp()
    {
        // check to make sure we have SNMP capability
        # TODO - provide a message saying SNMP extension not loaded
        if (!extension_loaded('snmp')) {
            redirect('main/list_devices');
        }
        $this->load->model("m_system");
        $this->load->model("m_audit_log");
        $this->load->model("m_devices_components");
        $this->load->library('encrypt');
        $this->load->helper('snmp');
        $this->load->helper('snmp_oid');
        $details = new stdClass();
        $details->id = $this->uri->segment(3, 0);
        $credentials = $this->m_devices_components->read($details->id, 'y', 'credential');
        foreach ($credentials as $credential) {
            if (!empty($credential->type) and $credential->type == 'snmp') {
                break;
            }
        }

        $details->hostname = $this->m_devices_components->read($details->id, 'y', 'system', '', 'hostname');
        if ($details->hostname == '-') {
            $details->hostname = '';
        }
        $details->ip = ip_address_from_db($this->m_devices_components->read($details->id, 'y', 'system', '', 'ip'));
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
		<p style='font-family: \"Verdana\",\"Lucida Sans Unicode\",\"Lucida Sans\",sans-serif; font-size: 12px;'>
		<pre>";

        # audit the device via snmp
        
        #if ($temp_array = get_snmp($details)) {
        if ($temp_array = snmp_audit($details->ip, $credential->attributes, 'y')) {
            if (!empty($temp_array['details'])) {
                foreach ($temp_array['details'] as $key => $value) {
                    if (!empty($value)) {
                        $details->$key = $value;
                    }
                }
                $details->last_seen_by = 'snmp';
                $details->audits_ip = '127.0.0.1';
            }
        } else {
            echo "Error - nothing returned when SNMP routine executed.";
        }
        $network_interfaces = $temp_array['interfaces'];
        $ip = $temp_array['ip'];
        unset($guests);
        if (isset($temp_array['guests']) and count($temp_array['guests']) > 0) {
            $guests = $temp_array['guests'];
        }
        $modules = $temp_array['modules'];

        $details->last_seen_by = 'snmp';
        $details->last_seen = $this->config->config['timestamp'];
        $details->last_user = $this->user->full_name;
        $details->audits_ip = '127.0.0.1';

        if ($this->config->item('discovery_use_dns') == 'y') {
            $details = dns_validate($details, 'y');
        }

        #unset($details->type);
        unset($details->show_output);
        unset($details->ip);
        echo "<pre>\n";
        if (isset($details->snmp_oid) and $details->snmp_oid > '') {
            $details->original_timestamp = $this->m_devices_components->read($details->id, 'y', 'system', '', 'last_seen');
            $this->m_system->update_system($details);
            if (isset($this->user->full_name)) {
                $temp_user = $this->user->full_name;
            } else {
                $temp_user = '';
            }
            $this->m_audit_log->create($details->id, $temp_user, $details->last_seen_by, $details->audits_ip, '', '', $details->last_seen);
            unset($temp_user);

            # update any network interfaces and ip addresses retrieved by SNMP
            $details->last_seen = $this->m_devices_components->read($details->id, 'y', 'system', '', 'last_seen');
            $details->first_seen = $this->m_devices_components->read($details->id, 'y', 'system', '', 'first_seen');
            $details->original_last_seen_by = $this->m_devices_components->read($details->id, 'y', 'system', '', 'last_seen_by');

            if (isset($network_interfaces) and is_array($network_interfaces) and count($network_interfaces) > 0) {
                $input = new stdClass();
                $input->item = array();
                $input->item = $network_interfaces;
                $this->m_devices_components->process_component('network', $details, $input, 'y');
            }

            if (isset($ip->item) and count($ip->item) > 0) {
                $this->m_devices_components->process_component('ip', $details, $ip, 'y');
            }

            # insert any found virtual machines
            if (isset($guests) and is_array($guests) and count($guests) > 0) {
                $vm = new stdClass();
                $vm->item = array();
                $vm->item = $guests;
                $this->m_devices_components->process_component('vm', $details, $vm, 'y');
            }

            # insert any modules
            if (isset($modules) and is_array($modules) and count($modules) > 0) {
                $input = new stdClass();
                $input->item = array();
                $input->item = $modules;
                $this->m_devices_components->process_component('module', $details, $input, 'y');
            }

            // Generate any DNS entries required
            $dns = new stdClass();
            $dns->item = array();
            $dns->item = $this->m_devices_components->create_dns_entries((int)$details->id);
            if (count($dns->item) > 0) {
                $this->m_devices_components->process_component('dns', $details, $dns, 'y');
            }
            unset($dns);

            // insert a blank to indicate we're finished this part of the discovery
            // if required, the audit scripts will insert their own audit logs
            $this->m_audit_log->update('debug', '', $details->id, $details->last_seen);

        } else {
            echo "Audit NOT submitted.";
        }
        echo "<div align=\"center\"><input type=\"button\" value=\"Close\" onclick=\"CloseMe();\"/></div></p>\n</body>\n</html>";
    }

    public function add_system()
    {
        if (!isset($_POST['submit'])) {
            # load the initial form
            $this->load->model("m_oa_org");
            $this->data['orgs'] = $this->m_oa_org->get_org_names();
            $this->load->model("m_oa_location");
            $this->data['locations'] = $this->m_oa_location->get_location_names();
            $this->load->model("m_systems");
            $this->data['os_group'] = $this->m_systems->get_distinct_os_group();
            $this->data['os_family'] = $this->m_systems->get_distinct_os_family();
            $this->data['os_name'] = $this->m_systems->get_distinct_os_name();
            include 'include_device_types.php';
            $this->data['device_types'] = $device_types;
            $this->data['heading'] = 'Add Device';
            $this->data['include'] = 'v_add_system';
            $this->load->view('v_template', $this->data);
        } else {
            # process the form
            $this->data['error'] = '';
            $this->load->model('m_system');
            $this->load->model('m_oa_group');
            $this->load->model("m_audit_log");
            $details = new stdClass();
            foreach ($_POST as $key => $value) {
                $details->$key = $value;
            }
            $details->name = $details->hostname;
            if (!isset($details->os_group)) {
                $details->os_group = '';
            }
            if (!isset($details->os_group_2)) {
                $details->os_group_2 = '';
            }
            if (!isset($details->os_family_typed)) {
                $details->os_family_typed = '';
            }
            if (!isset($details->os_name_2)) {
                $details->os_name_2 = '';
            }
            if (!isset($details->hostname)) {
                $details->hostname = '';
            }
            $details->last_seen_by = 'web form';
            $details->last_seen = $this->config->config['timestamp'];
            $details->last_user = $this->user->full_name;

            if (($details->type == 'access token' or
                $details->type == 'cell phone' or
                $details->type == 'mobile modem' or
                $details->type == 'phone' or
                $details->type == 'satellite phone' or
                $details->type == 'smart phone' or
                $details->type == 'tablet') and
                (!isset($details->serial) or $details->serial == '')) {
                $this->data['error'] = 'Serial number required.';
            }

            if (($details->type == 'cable modem' or
                $details->type == 'computer' or
                $details->type == 'firewall' or
                $details->type == 'game console' or
                $details->type == 'ip phone' or
                $details->type == 'network printer' or
                $details->type == 'router' or
                $details->type == 'switch') and
                ((!isset($details->hostname) or $details->hostname == '') and
                  (!isset($details->ip) or $details->ip == '') and
                  (!isset($details->serial) or $details->serial == ''))) {
                $this->data['error'] = 'Hostname, ip address or serial number required.';
            }

            if (isset($details->os_group_2) and $details->os_group_2 != '' and $details->os_group == '') {
                $details->os_group = $details->os_group_2;
                unset($details->os_group_2);
            } else {
                unset($details->os_group_2);
            }

            if (($details->os_family_typed > '') and ($details->os_family == '')) {
                $details->os_family = $details->os_family_typed;
                unset($details->os_family_typed);
            } else {
                unset($details->os_family_typed);
            }

            if (($details->os_name_2 > '') and ($details->os_name == '')) {
                $details->os_name = $details->os_name_2;
                unset($details->os_name_2);
            } else {
                unset($details->os_name_2);
            }

            $details->hostname = preg_replace("/[^a-z0-9-.]+/i", "", $details->hostname);
            $details->hostname = mb_strtolower($details->hostname);

            if (isset($details->ip)) {
                $details->ip = ip_address_to_db($details->ip);
            }
            $details->last_seen = $this->config->config['timestamp'];
            $details->first_seen = $details->last_seen;
            $details->last_seen_by = 'web form';

            unset($details->AddSystem);

            if ($this->data['error'] == '') {
                # add the system
                $details->id = $this->m_system->insert_system($details);
                $this->m_system->reset_icons($details->id);
                $this->m_oa_group->update_system_groups($details);
                if (isset($this->user->full_name)) {
                    $temp_user = $this->user->full_name;
                } else {
                    $temp_user = '';
                }
                $this->m_audit_log->create($details->id, $temp_user, $details->last_seen_by, $details->audits_ip, '', '', $details->last_seen);
                unset($temp_user);
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
        if (!isset($_POST['submit'])) {
            # nothing submitted - display the form
            $this->data['heading'] = 'Add Devices';
            $this->data['include'] = 'v_add_systems';
            $this->load->view('v_template', $this->data);
        }
        if (isset($_POST['submit'])) {
            # we have an uploaded file - store and process
            $last_seen = $this->config->config['timestamp'];
            $target_path = BASEPATH."../application/uploads/".basename($_FILES['upload_file']['name']);

            if (!move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path)) {
                $this->data['error'] = "The file ".basename($_FILES['upload_file']['name'])." could not be uploaded.<br />";
                $this->data['query'] = $this->data['error'];
                $this->data['heading'] = 'Error';
                $this->data['include'] = 'v_error';
                $this->data['export_report'] = 'y';
                $this->data['group_id'] = '0';
                $this->load->view('v_template', $this->data);
                exit();
            }

            require_once BASEPATH.'../application/libraries/phpexcel/PHPExcel/IOFactory.php';

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
            $this->load->model("m_audit_log");
            $this->load->model("m_oa_group");
            $this->load->model("m_devices_components");
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
                        $temp = $cell->getValue();
                        $temp = trim($temp);
                        if ($temp != '') {
                            # $attributes[] = $cell->getValue();
                            $attributes[] = $temp;
                        }
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
                    $details->last_seen = $last_seen;
                    $details->last_seen_by = "spreadsheet";
                    $details->last_user = $this->user->full_name;
                    $error = '';

                    if (isset($details->org_name)) {
                        # we have an org name - need to find it's ID
                        if ($org_id = $this->m_oa_org->select_org($details->org_name)) {
                            # we have a matching org
                            $details->org_id = $org_id;
                        }
                    }

                    if (isset($details->location_name)) {
                        # we have a location name - need to find it's ID
                        if ($location_id = $this->m_oa_location->get_location_id($details->location_name)) {
                            # we have a match
                            $details->location_id = $location_id;
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
                        if (isset($details->ip) and $details->ip != '') {
                            $encode = array();
                            $encode->ip_address = $details->ip;
                            $encode->snmp_version = $details->snmp_version;
                            $encode->snmp_community = $details->snmp_community;
                            $encode->snmp_port = $details->snmp_port;
                            $encoded = json_encode($encode);
                            $encoded = $this->encrypt->encode($encoded);
                            $details->access_details = $encoded;
                            if (extension_loaded('snmp')) {
                                $temp_array = get_snmp($details);
                                $details = $temp_array['details'];
                                $network_interfaces = $temp_array['interfaces'];
                                $details->last_seen_by = 'snmp';
                            }
                        }
                    }

                    # first test to see if we have a system.id -
                    # if not, make a system key and find (or not) the device
                    if (!isset($details->id) or $details->id == '') {

                        # make sure we have a hostname variable
                        if (!isset($details->hostname)) {
                            $details->hostname = '';
                        }
                        $details->hostname = preg_replace("/[^a-z0-9-.]+/i", "", $details->hostname);
                        $details->hostname = mb_strtolower($details->hostname);

                        # try to determine if this device is already in the database
                        $details->id = $this->m_system->find_system($details);
                    }

                    if ($error != '') {
                        $error = '';
                    } else {
                        if (isset($details->id) and $details->id > '') {
                            # we need to update an existing system
                            $this->m_system->update_system($details);
                        } else {
                            # this is a new system
                            $details->first_seen = $details->last_seen;
                            $details->id = $this->m_system->insert_system($details);
                        }
                        // Insert an entry in to the audit log
                        $details->audits_ip = ip_address_to_db($_SERVER['REMOTE_ADDR']);
                        if (!isset($details->type) or $details->type == '') {
                            $details->type = $this->m_system->get_system_type($details->id);
                        }

                        if (isset($this->user->full_name)) {
                            $temp_user = $this->user->full_name;
                        } else {
                            $temp_user = '';
                        }
                        $this->m_audit_log->create($details->id, $temp_user, $details->last_seen_by, $details->audits_ip, '', '', $details->last_seen);
                        unset($temp_user);

                         # update any network interfaces and ip addresses retrieved by SNMP
                        $details->last_seen = $this->m_devices_components->read($details->id, 'y', 'system', '', 'last_seen');
                        $details->first_seen = $this->m_devices_components->read($details->id, 'y', 'system', '', 'first_seen');
                        if (isset($network_interfaces) and is_array($network_interfaces) and count($network_interfaces) > 0) {
                            $this->m_devices_components->process_component('network', $details, $xml->network);
                            foreach ($network_interfaces as $input) {
                                if (isset($input->ip_addresses) and is_array($input->ip_addresses)) {
                                    $this->m_devices_components->process_component('ip', $details, $ip_input);
                                }
                            }
                        }

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



    public function reset_devices_ip()
    {
        $this->load->model('m_devices_components');
        $group_id = $this->data['id'];
        if (!is_numeric($group_id)) {
            redirect('main/index');
        } else {
            $group_id = intval($group_id);
            $sql = '/* admin_system::reset_devices_ip */ SELECT DISTINCT system_id FROM oa_group_sys WHERE group_id = ?';
            $data = array($group_id);
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            foreach ($result as $system) {
                $this->m_devices_components->set_initial_address($system->system_id, 'y');
            }
            redirect('main/list_devices/' . $group_id);
        }
    }
}
