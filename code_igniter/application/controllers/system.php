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
 * @version 1.8.4
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class System extends CI_Controller
{

    /**
     * Constructor
     *
     * @access    public
     * @category  Constructor
     * @package   Open-AudIT
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     * @link      http://www.open-audit.org
     * @return    Admin
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_system');
        // No need for user to be logged in
        // Have to be able to submit systems via the audit script
        $this->data['title'] = 'Open-AudIT';
        $this->load->library('session');

        // log the attempt
        $this->load->helper('log');
        $log_details = new stdClass();
        $log_details->severity = 6;
        stdlog($log_details);
        unset($log_details);
    }

    /**
     * Index
     *
     * @access    public
     * @category  Function
     * @package   Open-AudIT
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     * @link      http://www.open-audit.org
     * @return    NULL
     */
    public function index()
    {
        $this->load->view('v_system_add', $this->data);
    }


    public function get_ip_details($details)
    {

        if ((!isset($details->hostname) or $details->hostname == '') and
            (isset($details->man_ip_address) and $details->man_ip_addres != '' and
             $details->man_ip_address != '0.0.0.0' and $details->man_ip_address != '000.000.000.000')) {
            # no hostname, get using ip address
            $details->hostname = gethostbyaddr(ip_address_from_db($details->man_ip_address));
        }

        if ((!isset($details->man_ip_address) or $details->man_ip_address == '' or
            $details->man_ip_address == '0.0.0.0' or $details->man_ip_address == '000.000.000.000') and
            (isset($details->hostname) and $details->hostname != '')) {
            # no ip address, get using hostname
            $details->man_ip_address = gethostbyname($details->hostname);
        }

        if (isset($details->man_ip_address) and !filter_var($details->man_ip_address, FILTER_VALIDATE_IP)) {
            # not a valid ip address - assume it's a hostname
            $details->hostname = $details->man_ip_address;
            $details->man_ip_address = gethostbyname($details->hostname);
        }

        if (isset($details->hostname) and filter_var($details->hostname, FILTER_VALIDATE_IP)) {
            # we have an ip in the hostname field
            $details->hostname = gethostbyaddr(ip_address_from_db($details->hostname));
        }

    }

    public function add_system_ad()
    {
        if (isset($_POST['form_systemXML']) and $_POST['form_systemXML'] > '') {
            $this->load->helper('html');
            echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">";
            echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');
            echo "<head>\n<title>XHTML-document</title>\n</head>\n<body>\n";
            $this->load->helper('xml');
            $this->load->model('m_system');
            $this->load->model('m_oa_group');
            $this->load->model('m_sys_man_audits');
            $input = html_entity_decode($_POST['form_reportXML']);
            $input = utf8_encode($input);
            $xml_input = iconv('UTF-8', 'UTF-8//TRANSLIT', $input);
            try {
                $xml_post = new SimpleXMLElement($xml_input);
            } catch (Exception $error) {
                // not a valid XML string
                $log_details = new stdClass();
                $log_details->severity = 5;
                $log_details->message = 'Invalid XML input for Active Directory import';
                stdlog($log_details);
                unset($log_details);
                exit;
            }
            $count = 0;
            foreach ($xml_post->children() as $child) {
                $count++;
                if ($child->getName() === 'computer') {
                    $details->timestamp = date('Y-m-d H:i:s');
                    $details->audits_ip = ip_address_to_db($_SERVER['REMOTE_ADDR']);
                    $details->last_seen_by = 'active directory';
                    $details->system_id = ($this->m_system->process_system_from_ad($child));
                    $this->m_oa_group->update_system_groups($details);
                    $this->m_sys_man_audits->insert_audit($details);
                }
            }
            echo "<hr>\n";
            echo 'Count: ' . $count . "<br />\n";
            echo "<a href='" . base_url() . "index.php/system/add_system_ad'>Back to input page</a><br />\n";
            echo "AD Data submitted.<br />\n";
            echo "</body>\n</html>";
            exit;
        } else {
            $this->load->view('v_system_add_ad', $this->data);
        }
    }

    public function add_system()
    {
        $this->benchmark->mark('code_start');
        $this->load->model('m_oa_config');
        $this->load->helper('url');
        set_time_limit(600);
        $this->load->helper('html');
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
        \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
        <html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">";
        echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');
        echo "<head>
        <title>Open-AudIT</title>
        </head>\n
        <body>\n<pre>\n";
        echo "<a href='" . base_url() . "index.php/system'>Back to input page</a><br />\n";
        echo "<a href='" . base_url() . "index.php'>Front Page</a><br />\n";
        $this->load->model('m_alerts');
        $this->load->model('m_dns');
        $this->load->model('m_group');
        $this->load->model('m_ip_address');
        $this->load->model('m_pagefile');
        $this->load->model('m_partition');
        $this->load->model('m_print_queue');
        $this->load->model('m_printer');
        $this->load->model('m_route');
        $this->load->model('m_sys_man_audits');
        $this->load->model('m_variable');
        $this->load->model('m_virtual_machine');

        $this->load->model('m_devices_components');

        $this->load->model('m_oa_general');

        // date_default_timezone_set("Australia/Queensland");
        $timestamp = date('Y-m-d H:i:s');

        // get the input either from the textfield or the uploaded file
        if (isset($_FILES['upload_file']['tmp_name']) and $_FILES['upload_file']['tmp_name'] != '') {
            $target_path = BASEPATH . "../application/uploads/" . basename($_FILES['upload_file']['name']);
            try {
                move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path);
            } catch (Exception $e) {
                $this->data['query'] = $e;
                $this->data['error'] = "There was an error uploading the file, please try again.";
                $this->data['include'] = 'v_error';
                $this->load->view('v_template', $this->data);
            }
            $input = file_get_contents($target_path);
            unlink($target_path);
        } else {
            $input = html_entity_decode($_POST['form_systemXML']);
        }

        // convert to UTF8 (if required)
        if (mb_detect_encoding($input) !== 'UTF-8') {
            $input = utf8_encode($input);
        }
        $xml_input = iconv('UTF-8', 'UTF-8//TRANSLIT', $input);
        libxml_use_internal_errors(true);

        try {
            $xml = new SimpleXMLElement($xml_input, LIBXML_NOCDATA);
        } catch (Exception $error) {
            $errors = libxml_get_errors();
            echo "Invalid XML.<br />\n<pre>\n";
            print_r($errors);
            // not a valid XML string
            $xml_split = explode("\n", $xml_input, 10);
            $hostname = @str_replace("\t\t<hostname>", '', $xml_split[5]);
            $hostname = @str_replace('</hostname>', '', $hostname);
            $error_output = 'Invalid XML input for: ' . $hostname;

            $log_details = new stdClass();
            $log_details->severity = 5;
            $log_details->file = 'system';
            $log_details->message = 'Invalid XML audit result for ' . $hostname;
            stdlog($log_details);
            unset($log_details);

            echo "<pre>\n";
            @print_r($xml);
            exit;
        }

        $i = (string) $xml->sys[0]->hostname;
        $j = (string) $xml->sys[0]->system_id;
        $log_details = new stdClass();
        $log_details->severity = 7;
        $log_details->file = 'system';
        if ($j > '') {
            $log_details->message = 'Processing audit result for ' . $i . ' (Supplied System ID ' . $j . ')';
        } else {
            $log_details->message = 'Processing audit result for ' . $i;
        }
        stdlog($log_details);
        unset($log_details);

        # this allows for no additional audit script and snmp code
        # and inserts all the (or any) retrieved mac addresses into the sys XML section
        # which are then compared against in the m_system->find_system function to match a device
        foreach ($xml->children() as $child) {
            if ($child->getName() === 'network_cards') {
                foreach ($child->children() as $card) {
                    $mac = '';
                    $mac = strtolower((string)$card->net_mac_address);
                    if ($mac != '') {
                        $xml->sys->mac_addresses->$mac = $card->net_mac_address;
                    }
                }
            }
        }
        unset($mac);

        foreach ($xml->children() as $child) {
            if ($child->getName() === 'sys') {
                $details = (object) $xml->sys;
                $details->timestamp = date('Y-m-d H:i:s');
                $received_system_id = '';
                if (! isset($details->system_id)) {
                    $details->system_id = '';
                } else if ($details->system_id > '') {
                    $received_system_id = (string) $details->system_id;
                }
                $received_status = $this->m_oa_general->get_attribute('system', 'man_status', $received_system_id);
                if ($received_status !== 'production') {
                    $received_system_id = '';
                }
                $details->fqdn = $details->hostname . "." . $details->domain;
                $details->type = 'computer';
                $details->man_type = 'computer';
                $details->system_key = $this->m_system->create_system_key($details);

                $i = $this->m_system->find_system($details);
                if ($i == '' and $received_system_id > '') {
                    $i = $received_system_id;
                }
                if ($i != '' and $received_system_id != '' and $i != $received_system_id) {
                    // We delete this original system as likely with limited data (from
                    // nmap and/or snmp) we couldn't match an existing system
                    // Now we have an actual audit result with plenty of data
                    // we have found a match and it's not the original
                    $sql = "DELETE FROM system WHERE system_id = ?";
                    $data = array($received_system_id);
                    $query = $this->db->query($sql, $data);

                    $log_details = new stdClass();
                    $log_details->severity = 6;
                    $log_details->file = 'system';
                    $log_details->message = 'SystemId provided differs from SystemId found for ' . $details->hostname;
                    stdlog($log_details);
                    unset($log_details);

                }
                $details->system_id = $i;
                $details->last_seen = $details->timestamp;
                if ((string) $details->last_seen_by === '') {
                    $details->last_seen_by = 'audit';
                }

                $details->last_user = '';
                $details->audits_ip = ip_address_to_db($_SERVER['REMOTE_ADDR']);
                $details->last_audit_date = "";
                if ((string) $i === '') {
                    // insert a new system
                    $details->system_id = $this->m_system->insert_system($details);

                    $log_details = new stdClass();
                    $log_details->severity = 7;
                    $log_details->file = 'system';
                    $log_details->message = 'Inserting result for ' . $details->hostname . ' (System ID ' . $details->system_id . ')';
                    stdlog($log_details);
                    unset($log_details);

                    $details->original_timestamp = "";
                    echo "SystemID (new): <a href='" . base_url() . "index.php/main/system_display/" . $details->system_id . "'>" . $details->system_id . "</a>.<br />\n";
                } else {
                    // update an existing system

                    $log_details = new stdClass();
                    $log_details->severity = 7;
                    $log_details->file = 'system';
                    $log_details->message = 'Updating result for ' . $details->hostname . ' (System ID ' . $details->system_id . ')';
                    stdlog($log_details);
                    unset($log_details);

                    $details->original_last_seen_by = $this->m_oa_general->get_attribute('system', 'last_seen_by', $details->system_id);
                    $details->original_timestamp = $this->m_oa_general->get_attribute('system', 'timestamp', $details->system_id);
                    $this->m_system->update_system($details);
                    echo "SystemID (updated): <a href='" . base_url() . "index.php/main/system_display/" . $details->system_id . "'>" . $details->system_id . "</a>.<br />\n";
                }
                $details->first_timestamp = $this->m_oa_general->get_attribute('system', 'first_timestamp', $details->system_id);
                $this->m_sys_man_audits->insert_audit($details);
            }
        }

        $this->m_devices_components->process_component('bios', $details, $xml->bios);
        $this->m_devices_components->process_component('disk', $details, $xml->disk);
        $this->m_devices_components->process_component('memory', $details, $xml->memory);
        $this->m_devices_components->process_component('log', $details, $xml->log);
        $this->m_devices_components->process_component('module', $details, $xml->module);
        $this->m_devices_components->process_component('monitor', $details, $xml->monitor);
        $this->m_devices_components->process_component('motherboard', $details, $xml->motherboard);
        $this->m_devices_components->process_component('netstat', $details, $xml->netstat);
        $this->m_devices_components->process_component('network', $details, $xml->network);
        $this->m_devices_components->process_component('optical', $details, $xml->optical);
        $this->m_devices_components->process_component('processor', $details, $xml->processor);
        $this->m_devices_components->process_component('service', $details, $xml->service);
        $this->m_devices_components->process_component('scsi', $details, $xml->scsi);
        $this->m_devices_components->process_component('share', $details, $xml->share);
        $this->m_devices_components->process_component('software', $details, $xml->software);
        $this->m_devices_components->process_component('software_key', $details, $xml->software_key);
        $this->m_devices_components->process_component('sound', $details, $xml->sound);
        $this->m_devices_components->process_component('user', $details, $xml->user);
        $this->m_devices_components->process_component('video', $details, $xml->video);
        $this->m_devices_components->process_component('windows', $details, $xml->windows);

        foreach ($xml->children() as $child) {
            // these two (server and server_item) must be processed in this way
            // because there may be multiple entries for them (eg: DB and WEB)
            if ($child->getName() === 'server') {
                $this->m_devices_components->process_component('server', $details, $child);
            }
            if ($child->getName() === 'server_item') {
                $this->m_devices_components->process_component('server_item', $details, $child);
            }

            if ($child->getName() === 'addresses') {
                $this->m_sys_man_audits->update_audit($details, $child->getName());
                foreach ($xml->addresses->ip_address as $input) {
                    $this->m_ip_address->process_addresses($input, $details);
                }
            }
            if ($child->getName() === 'audit_wmi_fail') {
                $this->m_sys_man_audits->update_audit($details, $child->getName());
                $this->m_sys_man_audits->update_wmi_fails($xml->audit_wmi_fail, $details);
            }
            if ($child->getName() === 'dns') {
                $this->m_sys_man_audits->update_audit($details, $child->getName());
                foreach ($xml->dns->dns_entry as $input) {
                    $this->m_dns->process_dns($input, $details);
                }
            }
            if ($child->getName() === 'groups') {
                $this->m_sys_man_audits->update_audit($details, $child->getName());
                foreach ($xml->groups->group as $input) {
                    $this->m_group->process_group($input, $details);
                }
            }
            if ($child->getName() === 'guests') {
                $this->m_sys_man_audits->update_audit($details, $child->getName());
                foreach ($xml->guests->guest as $input) {
                    $this->m_virtual_machine->process_vm($input, $details);
                }
            }
            if ($child->getName() === 'pagefiles') {
                $this->m_sys_man_audits->update_audit($details, $child->getName());
                foreach ($xml->pagefiles->pagefile as $input) {
                    $this->m_pagefile->process_pagefile($input, $details);
                }
            }
            if ($child->getName() === 'partitions') {
                $this->m_sys_man_audits->update_audit($details, $child->getName());
                foreach ($xml->partitions->partition as $input) {
                    $this->m_partition->process_partitions($input, $details);
                }
            }
            if ($child->getName() === 'printers') {
                $this->m_sys_man_audits->update_audit($details, $child->getName());
                foreach ($xml->printers->printer as $input) {
                    $this->m_printer->process_printer($input, $details);
                    $this->m_print_queue->process_print_queue($input, $details);
                }
            }
            if ($child->getName() === 'routes') {
                $this->m_sys_man_audits->update_audit($details, $child->getName());
                foreach ($xml->routes->route as $input) {
                    $this->m_route->process_route($input, $details);
                }
            }
            if ($child->getName() === 'variables') {
                $this->m_sys_man_audits->update_audit($details, $child->getName());
                foreach ($xml->variables->variable as $input) {
                    $this->m_variable->process_variable($input, $details);
                }
            }
        }
        $this->m_sys_man_audits->update_audit($details, 'finished xml processing');

        // Generate any DNS entries required
        $this->m_dns->create_dns_entries((int)$details->system_id);

        // Now generate any needed alerts
        if ($details->original_timestamp == '') {
            $this->m_sys_man_audits->update_audit($details, 'generate initial audit alert');
            // We have a new PC, so generate an alert
            $this->m_alerts->generate_alert($details->system_id, 'system', $details->system_id, 'Item added to system', $details->timestamp, 'create');
        }

        // set the man_ip_address (if not already set)
        $this->m_sys_man_audits->update_audit($details, 'check and set initial man_ip_address');
        $this->m_ip_address->set_initial_address($details->system_id);
        $dhcp = false;
        $network_details = $this->m_devices_components->read($details->system_id, 'y', 'network');
        foreach ($network_details as $card) {
            if (stripos($card->dhcp_enabled, 'true') !== false) {
                $dhcp = true;
            }
        }

        $discovery_create_alerts = $this->m_oa_config->get_config_item('discovery_create_alerts');

        if ($details->original_timestamp !== '' and $discovery_create_alerts == 'y') {
            $this->m_sys_man_audits->update_audit($details, 'generate any required alerts');
            $this->m_sys_man_audits->update_audit($details, 'alerts');
            // We have to go through all tables, checking for
            // entries with current_timestamp = first_timestamp
            $this->m_group->alert_group($details);
            if ($dhcp !== true) {
                $this->m_ip_address->alert_ip_address($details);
            }
            if ($dhcp !== true) {
                $this->m_route->alert_route($details);
            }
            $this->m_variable->alert_variable($details);
        }

        $this->load->model('m_oa_group');
        // update any tags for new printers
        $this->m_sys_man_audits->update_audit($details, 'network printers');
        $network_printers = $this->m_printer->get_new_network_printer($details);
        if (count($network_printers) > 0) {
            foreach ($network_printers as $printer) {
                $this->m_oa_group->update_system_groups($printer);
            }
        }
        // Finally, update any groups for this system if config item is set
        $discovery_update_groups = @$this->m_oa_config->get_config_item('discovery_update_groups');
        if (!isset($discovery_update_groups) or $discovery_update_groups == 'n') {
            # don't run the update group routine
        } else {
            $this->m_sys_man_audits->update_audit($details, 'system groups');
            $this->m_oa_group->update_system_groups($details);
        }
        $this->m_sys_man_audits->update_audit($details, '');
        $this->benchmark->mark('code_end');
        echo '<br />Time: ' . $this->benchmark->elapsed_time('code_start', 'code_end') . " seconds.<br />\n";
        $i = (string) $xml->sys[0]->hostname;

        $log_details = new stdClass();
        $log_details->severity = 7;
        $log_details->file = 'system';
        $log_details->message = 'Processing completed for ' . $i . ' (System ID ' . $details->system_id . '), took ' . $this->benchmark->elapsed_time('code_start', 'code_end') . ' seconds';
        stdlog($log_details);
        unset($log_details);

        echo '</body></html>';
    }

    public function add_nmap()
    {
        if (! isset($_POST['form_nmap'])) {
            $this->load->view('v_system_add_nmap', $this->data);
        } else {
            $log_details = new stdClass();
            $log_details->severity = 7;
            $log_details->file = 'system';
            $log_details->message = 'Start processing nmap submitted data';
            stdlog($log_details);
            $log_details->message = 'ATTENTION - audit_subnet script being used. This is depreciated. Please use discovery scripts instead.';
            $log_details->severity = 5;
            stdlog($log_details);
            unset($log_details);



            $this->load->helper('url');
            $this->load->helper('xml');
            $this->load->library('encrypt');
            if (extension_loaded('snmp')) {
                $this->load->helper('snmp');
                $this->load->helper('snmp_oid');
            }
            $this->load->model('m_system');
            $this->load->model('m_oa_group');
            $this->load->model('m_ip_address');
            $this->load->model('m_sys_man_audits');
            $timestamp = date('Y-m-d H:i:s');
            $xml_input = $_POST['form_nmap'];

            try {
                $xml_post = new SimpleXMLElement($xml_input);
            } catch (Exception $error) {
                // not a valid XML string
                $log_details = new stdClass();
                $log_details->severity = 5;
                $log_details->file = 'system';
                $log_details->message = 'Invalid XML input for NMap import';
                stdlog($log_details);
                unset($log_details);
                exit;
            }
            $count = 0;

            foreach ($xml_post->children() as $details) {
                $details = (object) $details;

                if (isset($this->session->userdata['user_id']) and is_numeric($this->session->userdata['user_id'])) {
                    echo 'Device IP: ' . $details->man_ip_address . "\n";
                }

                $count++;
                $details->last_seen = $timestamp;
                $details->last_user = '';
                $details->timestamp = $timestamp;

                $details->hostname = '';
                $details->hostname = gethostbyaddr($details->man_ip_address);
                $details->hostname = strtolower($details->hostname);
                $details->domain = '';
                $details->audits_ip = ip_address_to_db($_SERVER['REMOTE_ADDR']);

                $log_details = new stdClass();
                $log_details->severity = 7;
                $log_details->file = 'system';
                $log_details->message = 'Processing nmap audit result for ' . $details->man_ip_address . ' (' . $details->hostname . ')';
                stdlog($log_details);
                unset($log_details);

                if (! filter_var($details->hostname, FILTER_VALIDATE_IP)) {
                    if (strpos($details->hostname, '.') !== false) {
                        // we have a domain returned
                        $details->fqdn = strtolower($details->hostname);
                        $t_array = explode('.', $details->hostname);
                        $details->hostname = $t_array[0];
                        unset($t_array[0]);
                        $details->domain = implode('.', $t_array);
                    }
                }

                if (! isset($details->type) or $details->type === '') {
                    $details->type = 'unknown';
                }

                if (extension_loaded('snmp')) {
                    // try to get more information using SNMP
                    if (! isset($details->access_details)) {
                        $details->access_details = $this->m_system->get_access_details($details->system_id);
                    }
                    $decoded_access = $this->encrypt->decode($details->access_details);
                    $decoded_access = json_decode($decoded_access);
                    $details->snmp_community = @$decoded_access->snmp_community;
                    $details->snmp_version = @$decoded_access->snmp_version;
                    $details->snmp_port = @$decoded_access->snmp_port;
                    $temp_array = get_snmp($details);
                    $details = $temp_array['details'];
                    $network_interfaces = $temp_array['interfaces'];
                }

                $details->system_key = '';
                $details->system_key = $this->m_system->create_system_key($details);
                $details->system_id = '';
                $details->system_id = $this->m_system->find_system($details);

                if ((isset($details->snmp_oid)) and ($details->snmp_oid > '')) {
                    // we received a result from SNMP, use this data to update OR insert
                    $details->last_seen_by = 'snmp';
                    $details->audits_ip = '127.0.0.1';

                    if (isset($details->system_id) and !empty($details->system_id)) {
                        // we have a system_id and snmp details to update
                        $log_details = new stdClass();
                        $log_details->severity = 7;
                        $log_details->file = 'system';
                        $log_details->message = 'SNMP update for ' . $details->man_ip_address . ' (system id ' . $details->system_id . ')';
                        stdlog($log_details);
                        unset($log_details);
                        $this->m_system->update_system($details);
                    } else {
                        // we have a new system
                        $details->system_id = $this->m_system->insert_system($details);
                        $log_details = new stdClass();
                        $log_details->severity = 7;
                        $log_details->message = 'SNMP insert for ' . $details->man_ip_address . ' (system id ' . $details->system_id . ')';
                        stdlog($log_details);
                        unset($log_details);
                    }

                    # update any network interfaces and ip addresses retrieved by SNMP
                    if (isset($network_interfaces) and is_array($network_interfaces) and count($network_interfaces) > 0) {
                        $input = new stdClass();
                        $input->item = array();
                        $input->item = $network_interfaces;
                        $this->m_devices_components->process_component('network', $details, $input);

                        foreach ($network_interfaces as $input) {
                            if (isset($input->ip_addresses) and is_array($input->ip_addresses)) {
                                foreach ($input->ip_addresses as $ip_input) {
                                    $ip_input = (object) $ip_input;
                                    $this->m_ip_address->process_addresses($ip_input, $details);
                                }
                            }
                        }
                    }
                } else {
                    // we received a result from nmap only, use this data to update OR insert
                    $details->last_seen_by = 'nmap';

                    if (isset($details->system_id) and $details->system_id !== '') {
                        // we have a system id and nmap details to update
                        $log_details = new stdClass();
                        $log_details->severity = 7;
                        $log_details->message = 'Nmap update for ' . $details->man_ip_address . ' (system id ' . $details->system_id . ')';
                        stdlog($log_details);
                        unset($log_details);
                        $this->m_system->update_system($details);
                    } else {
                        // we have a new system
                        $details->system_id = $this->m_system->insert_system($details);
                        $log_details = new stdClass();
                        $log_details->severity = 7;
                        $log_details->message = 'Nmap insert for ' . $details->man_ip_address . ' (system id ' . $details->system_id . ')';
                        stdlog($log_details);
                        unset($log_details);
                    }
                }
                $this->m_sys_man_audits->insert_audit($details);
                $this->m_oa_group->update_system_groups($details);
            }

            if (isset($this->session->userdata['user_id']) and is_numeric($this->session->userdata['user_id'])) {
                echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">";
                echo "<head>\n<title>Open-AudIT</title>\n</head>\n<body>\n<pre>\n";
                echo $count . ' systems processed.<br />';
                echo "<a href='" . base_url() . "index.php/system/add_nmap'>Back to input page</a><br />\n";
                echo "<a href='" . base_url() . "index.php'>Front Page</a><br />\n";
                echo "<pre>\n";
                print_r($details);
                echo "</pre>\n";
            }
        }
    }

}
