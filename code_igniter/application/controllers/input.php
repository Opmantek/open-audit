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
* Base Object Input
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
* @return   NULL
 */
class input extends CI_Controller
{
    /**
    * Constructor
    *
    * @access    public
    * @return    NULL
    */
    public function __construct()
    {
        parent::__construct();
        $this->data['title'] = 'Open-AudIT';
        $this->load->helper('url');
        $this->load->helper('network');
        $this->load->helper('ssh');
        $this->load->helper('wmi');
        $this->load->library('session');
        $this->load->model('m_system');
        $this->load->model('m_configuration');
        $this->load->model('m_networks');
        $this->m_configuration->load();
        $timestamp = $this->config->config['timestamp'];
        // log the attempt
        $this->load->helper('log');
        $log = new stdClass();
        $log->file = 'system';
        $log->severity = 6;
        stdlog($log);
        $log->severity = 7;

        if (!$this->m_networks->check_ip($_SERVER['REMOTE_ADDR'], '')) {
            exit;
        }
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
    }

    /**
    * Our remap function to override the inbuilt controller->method functionality
    *
    * @access public
    * @return NULL
    */
    public function _remap()
    {
        if (strtoupper($this->input->server('REQUEST_METHOD')) == 'GET') {
            $this->load->model('m_oa_user');
            $this->load->model('m_users');
            $this->m_oa_user->validate_user();
            $this->response = new stdClass();
            $this->response->meta = new stdClass();
            $this->response->meta->collection = '';
            $this->response->meta->query_string = '';
            $this->load->model('m_roles');
            $this->roles = $this->m_roles->collection();
            $this->data['include'] = 'v_input_discoveries_create_form';
            $this->load->view('v_template', $this->data);
        } else {
            $this->discoveries();
        }
    }

    public function discoveries()
    {
        $display = 'y';
        // DISPLAY OUTPUT
        if ($display == 'y') {
            echo "<pre>\n";
        }

        $log = new stdClass();
        $log->name = 'discovery';

        $log->severity = 7;
        $log->file = 'input';
        $log->function = 'discoveries';
        $log->collection = 'input';
        $log->action = 'discoveries';

        $timestamp = $this->config->config['timestamp'];
        // our required models
        $this->load->model('m_audit_log');
        $this->load->model('m_credentials');
        $this->load->model('m_devices');
        $this->load->model('m_devices_components');
        $this->load->model('m_oa_group');
        $this->load->model('m_orgs');
        $this->load->model('m_scripts');
        // our required helpers
        $this->load->helper('network');
        $this->load->helper('snmp');
        $this->load->helper('snmp_oid');
        $this->load->helper('ssh');
        $this->load->helper('wmi');
        // some variables
        $credentials = array();

        if (php_uname('s') != 'Windows NT') {
            $filepath = $this->config->config['base_path'] . '/other';
        } else {
            $filepath = $this->config->config['base_path'] . '\\other';
        }

        if (!empty($_POST['form_details'])) {
            // process the input
            $xml_input = $_POST['form_details'];
            try {
                $xml = new SimpleXMLElement($xml_input);
            } catch (Exception $error) {
                // not a valid XML string
                $log->severity = 3;
                $log->title = 'Invalid data';
                $log->message = 'Invalid XML input for discovery from '.$_SERVER['REMOTE_ADDR'];
                discovery_log($log);
                unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_complete, $log->command_error_message);
                exit;
            }
            // DISPLAY OUTPUT
            if ($display == 'y') {
                print_r($xml);
            }

            unset($xml_input);
            foreach ($xml->children() as $input) {
                $individual_ip_start = microtime(true);
                $input = (object) $input;
                $log->collection_id = $input->subnet_timestamp;
                if ($input->debug == 'true') {
                    $log->level = 7;
                }
                // The end submit from the scriupt that indicates there are no more items to be submitted
                if (isset($input->complete) and $input->complete == 'y') {
                    sleep(120);
                    $log->title = 'Discovery complete';
                    $log->message = 'Discovery complete for '.$input->subnet_range.' (discoveries ID# '.$input->subnet_timestamp . ')';
                    discovery_log($log);
                    unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_complete, $log->command_error_message);
                    $sql = '/* input::discoveries */ UPDATE `discoveries` SET `complete` = "y" WHERE id = ?';
                    $data = array(intval($input->subnet_timestamp));
                    $query = $this->db->query($sql, $data);
                    exit();
                }
                // check the IP isn't in the excluded list
                if (stripos(' ' . $this->config->config['discovery_ip_exclude'] . ' ', ' ' . $input->ip . ' ') !== false) {
                    # Our ip address matched an ip in the discovery_ip_exclude list - skip it
                    $log->title = 'Excluding IP';
                    $log->message = $input->ip . ' is in the list of excluded ip addresses - skipping.';
                    discovery_log($log);
                    unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_complete, $log->command_error_message);
                    continue;
                }
                // check we have an actual valid IP
                if (filter_var($input->ip, FILTER_VALIDATE_IP) === false) {
                    $log->title = 'Invalid IP';
                    $log->message = "Invalid IP address submitted (" . $input->ip . "), skipping.";
                    discovery_log($log);
                    unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_complete, $log->command_error_message);
                    continue;
                }

                $log->title = 'Start processing ' . $input->ip;
                $log->message = 'Received data from ' . $input->ip . ', now starting to process';
                $individual_log_id_start = discovery_log($log);
                unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_complete, $log->command_error_message);

                $sql = "/* input::discoveries */ SELECT * FROM `discoveries` WHERE `id` = ?";
                $log->command = $sql;
                $log->message = "retrieve discoveries entry from DB";
                $command_log_id = discovery_log($log);
                unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_complete, $log->command_error_message);

                $data = array(intval($input->subnet_timestamp));
                $command_srart = microtime(true);
                $query = $this->db->query($sql, $data);
                $command_end = microtime(true);
                $log->command = $this->db->last_query();
                $log->command_time_to_execute = $command_end - $command_srart;
                $log->id = $command_log_id;
                discovery_log($log);
                unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_complete, $log->command_error_message);
                unset($log->id);

                $discovery = $query->row();
                if (!empty($discovery->network_address) and empty($discovery->url)) {
                    $discovery->url = $discovery->network_address;
                }

                $device = new stdClass();
                $device->id = '';
                $device->name = '';
                $device->type = '';
                $device->os_family = '';
                $device->os_group = '';
                $device->sysDescr = '';
                $device->last_seen = $timestamp;
                $device->ip = (string)$input->ip;
                $device->last_seen_by = 'nmap';
                if ($this->config->item('discovery_use_dns') == 'y') {
                    $device = dns_validate($device, $display);
                    if (!empty($device->hostname)) {
                        $log->message = 'IP ' . $device->ip . ' resolved to hostname ' . $device->hostname;
                        discovery_log($log);
                        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_complete, $log->command_error_message);
                    }
                    if (!empty($device->domain)) {
                        $log->message = 'IP ' . $device->ip . ' resolved to domain ' . $device->domain;
                        discovery_log($log);
                        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_complete, $log->command_error_message);
                    }
                    if (!empty($device->fqdn)) {
                        $log->message = 'IP ' . $device->ip . ' resolved to fqdn ' . $device->fqdn;
                        discovery_log($log);
                        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_complete, $log->command_error_message);
                    }
                }
                $device->id = $this->m_system->find_system($device);
                if (!empty($device->id)) {
                    $log->message = "Device with ID# " . $device->id . " found on initial Nmap result.";
                    discovery_log($log);
                    unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_complete, $log->command_error_message);
                }
                // Device specific credentials
                if (!empty($device->id)) {
                    $temp = $this->m_devices_components->read(intval($device->id), 'y', 'credential', '', '*');
                    if (count($temp) > 0) {
                        foreach ($temp as $credential) {
                            $credentials[] = $credential;
                        }
                    }
                    unset($temp);
                }
                // We need to set the user orgs to the org of this particular discovery run
                $this->user = new stdClass();
                $this->user->orgs = $this->m_orgs->get_children($discovery->org_id);
                if (count($this->user->orgs) > 0) {
                    $this->user->org_list = $discovery->org_id . ',' . implode(',', $this->user->orgs);
                } else {
                    $this->user->org_list = $discovery->org_id;
                }

                // Stored credential sets
                $temp = $this->m_credentials->collection();

                if (count($temp) > 0) {
                    $credentials = array_merge($credentials, $temp);
                }
                unset($temp);
                # TODO - replace the ugly code below
                $creds = array();
                foreach ($credentials as $credential) {
                    $creds[] = $credential->attributes;
                }
                unset($credentials);
                $credentials = $creds;
                unset($creds);

                // output to log file and DEBUG the status of the three main services
                $log->message = 'WMI Status is '.$input->wmi_status.' on '.$device->ip;
                discovery_log($log);

                $log->message = 'SSH Status is '.$input->ssh_status.' on '.$device->ip;
                discovery_log($log);

                // On OSX we cannot run Nmap and get a UDP port result for 161 as 'You requested a scan type which requires root privileges.'
                // So just set the snmp_status to true and attempt to snmp_audit the target device
                if (php_uname('s') == 'Darwin') {
                    $input->snmp_status = 'true';
                    $input->nmap_ports .= ',161/udp/snmp';
                }

                $log->message = 'SNMP Status is '.$input->snmp_status.' on '.$device->ip;
                discovery_log($log);

                // SNMP audit
                if (!extension_loaded('snmp') and $input->snmp_status == 'true') {
                    $log->message = 'PHP extension not loaded, skipping SNMP data retrieval for ' . $device->ip;
                    discovery_log($log);
                }

                if (extension_loaded('snmp') and $input->snmp_status == 'true') {
                    $log->message = 'Testing SNMP credentials for '.$device->ip;
                    discovery_log($log);
                    $credentials_snmp = snmp_credentials($device->ip, $credentials, $log);
                } else {
                    $credentials_snmp = false;
                }
                $log->file = 'input';
                $log->function = 'discoveries';

                if ($credentials_snmp) {
                    $temp_array = snmp_audit($device->ip, $credentials_snmp, $log);
                    if (!empty($temp_array['details'])) {
                        foreach ($temp_array['details'] as $key => $value) {
                            if (!empty($value)) {
                                $device->$key = $value;
                            }
                        }
                        $device->last_seen_by = 'snmp';
                        $device->audits_ip = '127.0.0.1';
                    }
                    if (!empty($temp_array['interfaces'])) {
                        $network_interfaces = $temp_array['interfaces'];
                    }
                    if (!empty($temp_array['modules'])) {
                        $modules = $temp_array['modules'];
                    }
                    if (!empty($temp_array['ip'])) {
                        $ip = $temp_array['ip'];
                    }
                    if (!empty($temp_array['guests'])) {
                        $guests = $temp_array['guests'];
                    }
                }
                $log->file = 'input';
                $log->function = 'discoveries';

                if ($device->type != 'computer' and $device->type != '' and $device->type != 'unknown' and $device->os_family != 'DD-WRT' and stripos($device->sysDescr, 'dd-wrt') === false) {
                    $log->message = 'Not a computer and not a DD-WRT device, setting SSH status to false for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    discovery_log($log);
                    $input->ssh_status = 'false';
                }
                # test for working SSH credentials
                if ($input->ssh_status == 'true') {
                    $log->message = 'Testing SSH credentials for '.$device->ip;
                    discovery_log($log);
                    $credentials_ssh = ssh_credentials($device->ip, $credentials, $log);
                } else {
                    $credentials_ssh = false;
                }
                # run SSH audit commands
                if ($input->ssh_status == 'true' and $credentials_ssh) {
                    $ssh_details = ssh_audit($device->ip, $credentials_ssh, $log);
                    if (!empty($ssh_details)) {
                        $device->last_seen_by = 'ssh';
                        $device->audits_ip = '127.0.0.1';
                        foreach ($ssh_details as $key => $value) {
                            if (!empty($value)) {
                                $device->$key = $value;
                            }
                        }
                    }
                }


                // test for working Windows credentials
                if ($input->wmi_status == 'true') {
                    $log->message = 'Testing Windows credentials for ' . $device->ip;
                    discovery_log($log);
                    $credentials_windows = windows_credentials($device->ip, $credentials, $log);
                } else {
                    $credentials_windows = false;
                }
                # run Windows audit commands
                if ($input->wmi_status == 'true' and $credentials_windows) {
                    $windows_details = wmi_audit($device->ip, $credentials_windows, $log);
                    if (!empty($windows_details)) {
                        $device->last_seen_by = 'windows';
                        $device->audits_ip = '127.0.0.1';
                        foreach ($windows_details as $key => $value) {
                            if (!empty($value)) {
                                $device->$key = $value;
                            }
                        }
                    }
                }

                # in the case where port 5060 is detected and we have no other information, assign type 'voip phone'
                if (empty($device->type) and empty($device->snmp_oid) and empty($device->uuid) and stripos($input->nmap_result, '5060/') !== false) {
                    $device->type = 'voip phone';
                }

                if ($this->config->item('discovery_use_dns') == 'y') {
                    $device = dns_validate($device, $display);
                }

                $device->id = $this->m_system->find_system($device, $display);

                // insert or update the device
                if (!empty($device->id)) {
                    // we have a system id - UPDATE
                    $log->message = 'Start of ' . strtoupper($device->last_seen_by) . ' update for ' . $device->ip . '(System ID ' . $device->id . ')';
                    discovery_log($log);
                    $device->original_last_seen = $this->m_devices_components->read($device->id, 'y', 'system', '', 'last_seen');
                    $device->original_last_seen_by = $this->m_devices_components->read($device->id, 'y', 'system', '', 'last_seen_by');
                    $this->m_system->update_system($device, $display);
                    $log->message = 'End of ' . strtoupper($device->last_seen_by) . ' update for ' . $device->ip . '(System ID ' . $device->id . ')';
                    discovery_log($log);
                } else {
                    // we have a new system - INSERT
                    $log->message = 'Start of ' . strtoupper($device->last_seen_by) . ' insert for ' . $device->ip;
                    discovery_log($log);
                    $device->id = $this->m_system->insert_system($device, $display);
                    $log->message = 'End of ' . strtoupper($device->last_seen_by) . ' insert for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    discovery_log($log);
                }
                // grab some timestamps
                $device->last_seen = $this->m_devices_components->read($device->id, 'y', 'system', '', 'last_seen');
                $device->first_seen = $this->m_devices_components->read($device->id, 'y', 'system', '', 'first_seen');

                // Insert an audit log
                if (!empty($this->user->full_name)) {
                    $user = $this->user->full_name;
                } else {
                    $user = '';
                }
                $this->m_audit_log->create($device->id, $user, $device->last_seen_by, $device->audits_ip, '', '', $device->last_seen);
                unset($user);

                // Update the groups
                if ($this->config->config['discovery_update_groups'] == 'y') {
                    $log->message = 'Updating groups for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    discovery_log($log);
                    $this->m_oa_group->update_system_groups($device);
                }


                // update any network interfaces and ip addresses retrieved by SNMP
                if (isset($network_interfaces) and is_array($network_interfaces) and count($network_interfaces) > 0) {
                    $log->message = 'Processing found network interfaces for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    discovery_log($log);
                    $found = new stdClass();
                    $found->item = array();
                    $found->item = $network_interfaces;
                    $this->m_devices_components->process_component('network', $device, $found, $display);
                    unset($found);
                }

                // insert any ip addresses
                if (isset($ip->item) and count($ip->item) > 0) {
                    $log->message = 'Processing found ip addresses for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    discovery_log($log);
                    $this->m_devices_components->process_component('ip', $device, $ip, $display);
                }

                // finish off with updating any network IPs that don't have a matching interface
                $this->m_devices_components->update_missing_interfaces($device->id);

                // insert any modules
                if (isset($modules) and count($modules) > 0) {
                    $log->message = 'Processing found modules for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    discovery_log($log);
                    $found = new stdClass();
                    $found->item = array();
                    $found->item = $modules;
                    $this->m_devices_components->process_component('module', $device, $found, $display);
                    unset($found);
                }

                // insert any found virtual machines
                if (isset($guests) and is_array($guests) and count($guests) > 0) {
                    $log->message = 'Processing found VMs for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    discovery_log($log);
                    $found = new stdClass();
                    $found->item = array();
                    $found->item = $guests;
                    $this->m_devices_components->process_component('vm', $device, $found, $display);
                    unset($found);
                }

                if (!empty($credentials_snmp) and $input->snmp_status == 'true') {
                    $log->message = 'SNMP credential update for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    discovery_log($log);
                    $this->m_devices->sub_resource_create($device->id, 'credential', $credentials_snmp);
                }

                if (!empty($credentials_ssh) and $input->ssh_status == 'true') {
                    $log->message = 'SSH credential update for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    discovery_log($log);
                    $this->m_devices->sub_resource_create($device->id, 'credential', $credentials_ssh);
                }

                if (isset($credentials_windows) and $input->wmi_status == 'true') {
                    $log->message = 'Windows credential update for ' . $device->ip . '(System ID ' . $device->id . ')';
                    discovery_log($log);
                    $this->m_devices->sub_resource_create($device->id, 'credential', $credentials_windows);
                }

                // $device->id is now set
                if ($display == 'y') {
                    echo 'DEBUG - System ID <a href="' . base_url() . 'index.php/devices/' . $device->id . '">' . $device->id . "</a>\n";
                }

                // process and store the Nmap result
                $nmap_result = array();
                foreach (explode(',', $input->nmap_ports) as $port) {
                    $temp = explode('/', $port);
                    $nmap_item = new stdClass();
                    $nmap_item->ip = (string)$device->ip;
                    $nmap_item->port = $temp[0];
                    $nmap_item->protocol = $temp[1];
                    $nmap_item->program = $temp[2];
                    if ($nmap_item->port != '') {
                        $nmap_result[] = $nmap_item;
                    }
                    unset($nmap_item);
                    unset($temp);
                }
                if (count($nmap_result) > 0) {
                    $log->message = 'Processing Nmap ports for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    discovery_log($log);
                    $found = new stdClass();
                    $found->item = array();
                    $found->item = $nmap_result;
                    $this->m_devices_components->process_component('nmap', $device, $found, $display);
                }

                // insert a blank to indicate we're finished this part of the discovery
                // if required, the audit scripts will insert their own audit logs
                $this->m_audit_log->update('debug', '', $device->id, $device->last_seen);

                // DISPLAY OUTPUT
                if ($display == 'y') {
                    $device->show_output = true;
                    echo "=======DETAILS======\n";
                    print_r($device);
                    echo "====================\n";
                    ob_flush();
                    flush();
                }


                # Audit via Windows
                if ($input->wmi_status == "true" and $credentials_windows) {
                    $log->message = 'Starting windows audit for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    discovery_log($log);
                    $share = '\\admin$';
                    $destination = 'audit_windows.vbs';
                    if ($display = 'y') {
                        $debugging = 3;
                    } else {
                        $debugging = 0;
                    }
                    # TODO - org_id ?, maybe get the collection and run through testing matching org children

                    // Get and make the audit script
                    $sql = "/* discovery::process_subnet */ SELECT * FROM `scripts` WHERE `name` = 'audit_windows.vbs' AND `based_on` = 'audit_windows.vbs' ORDER BY `id` LIMIT 1";
                    $query = $this->db->query($sql);
                    $result = $query->result();
                    if (!empty($result[0])) {
                        $script_details = $result[0];
                        # Just ensure we delete any audit scripts that might exist.
                        # Shouldn't be required because we're creating based on the timestamp
                        # Then open the file for writing
                        $ts = date('y_m_d_H_i_s');
                        if (php_uname('s') == 'Windows NT') {
                            $source_name = 'scripts\\audit_windows_' . $ts . '.vbs';
                            @unlink($this->config->config['base_path'] . '\\other\\' . $source_name);
                            try {
                                $fp = fopen($this->config->config['base_path'] . '\\other\\' . $source_name, 'w');
                            } catch (Exception $e) {
                                print_r($e);
                            }
                        } else {
                            $source_name = 'scripts/audit_windows_' . $ts . '.vbs';
                            @unlink($this->config->config['base_path'] . '/other/' . $source_name);
                            try {
                                $fp = fopen($this->config->config['base_path'] . '/other/' . $source_name, 'w');
                            } catch (Exception $e) {
                                print_r($e);
                            }
                        }
                        $script = $this->m_scripts->download($script_details->id);
                        fwrite($fp, $script);
                        fclose($fp);
                    } else {
                        $source_name = 'audit_windows.vbs';
                    }

                    // *nix Open-AudIT server auditing a Windows target
                    if (php_uname('s') != 'Windows NT') {
                        $source = $this->config->config['base_path'] . '/other/' . $source_name;
                        $command = "cscript c:\\windows\\audit_windows.vbs submit_online=y create_file=n strcomputer=. url=".$discovery->url."index.php/system/add_system debugging=" . $debugging . " system_id=".$device->id." last_seen_by=audit_wmi";
                        if (copy_to_windows($device->ip, $credentials_windows, $share, $source, $destination, $display)) {
                            if (execute_windows($device->ip, $credentials_windows, $command, $display)) {
                                # All complete!
                            } else {
                                # run audit script failed
                            }
                        } else {
                            # copy audit script to Windows failed
                        }
                        if ($source_name != 'audit_windows.vbs') {
                            unlink($this->config->config['base_path'] . '/other/' . $source_name);
                        }
                    }

                    // Windows Open-AudIT server auditing a Windows target
                    if (php_uname('s') != 'Windows NT') {
                        if (exec('whoami') == 'nt authority\system') {
                            # We're running on the LocalSystem account.
                            # We cannot copy the audit script to the target and then run it,
                            # We _must_ run the script locally and use $device->ip as the script target
                            # We will loose the ability to retrieve certain items like files, netstat, tasks, etc
                            $log->message = 'Windows audit is running as LocalSystem, not ideal for ' . $device->ip . ' (System ID ' . $device->id . ')';
                            $log->severity = 4;
                            stdlog($log);
                            $log->severity = 7;
                            $username = $credentials_windows->credentials->username;
                            $temp = explode('@', $username);
                            $username = $temp[0];
                            if (count($temp) > 1) {
                                $domain = $temp[1] . '\\';
                            } else {
                                $domain = '';
                            }
                            unset($temp);

                            if ($display == 'y') {
                                $script_string = "$filepath\\" . $source_name . " strcomputer=".$device->ip." submit_online=y create_file=n struser=".$domain.$username." strpass=".$credentials_windows->credentials->password." url=".$discovery->url."index.php/system/add_system debugging=3 system_id=".$device->id." last_seen_by=audit_wmi";
                                $command_string = "%comspec% /c start /b cscript //nologo ".$script_string;
                                exec($command_string, $output, $return_var);
                                $command_string = str_replace($credentials_windows->credentials->password, '******', $command_string);
                                echo 'DEBUG - Command Executed: '.$command_string."\n";
                                echo 'DEBUG - Return Value: '.$return_var."\n";
                                echo "DEBUG - Command Output:\n";
                                print_r($output);

                                if ($return_var != '0') {
                                    $log->message = 'Failed attempt to run audit_windows.vbs for ' . $device->ip . ' (System ID ' . $device->id . ')';
                                    $log->severity = 4;
                                    stdlog($log);
                                    $log->severity = 7;
                                } else {
                                    $log->message = 'Successful attempt to run audit_windows.vbs for ' . $device->ip . ' (System ID ' . $device->id . ')';
                                    stdlog($log_details);
                                }
                                $output = null;
                                $return_var = null;
                            } else {
                                $script_string = "$filepath\\" . $source_name . " strcomputer=".$device->ip." submit_online=y create_file=n struser=".$domain.$username." strpass=".$credentials_windows->credentials->password." url=".$discovery->url."index.php/system/add_system debugging=0  system_id=".$device->id." last_seen_by=audit_wmi";
                                $command_string = "%comspec% /c start /b cscript //nologo ".$script_string." &";
                                pclose(popen($command_string, "r"));
                            }
                            $command_string = null;
                            if ($source_name != 'audit_windows.vbs') {
                                unlink($this->config->config['base_path'] . '/other/' . $source_name);
                            }
                        } else {
                            # We are running as something other than the LocalSystem account.
                            # Therefore we _should_ be able to copy the audit script to the target and start it there
                            # and therefore retrieve ALL information
                            $source = $this->config->config['base_path'] . '\\other\\' . $source_name;
                            rename($source, 'c:\\windows\\audit_windows_' . $ts . '.vbs');
                            $source = 'audit_windows_' . $ts . '.vbs';
                            $command = "cscript \\\\" . $device->ip . "\\admin\$\\audit_windows_" . $ts . ".vbs submit_online=y create_file=n strcomputer=. url=".$discovery->url."index.php/system/add_system debugging=" . $debugging . " system_id=".$device->id . " self_delete=y last_seen_by=audit_wmi";
                            if (copy_to_windows($device->ip, $credentials_windows, $share, $source, $destination, $display)) {
                                    $log->message = 'Copy audit_windows.vbs successful for ' . $device->ip . ' (System ID ' . $device->id . ')';
                                    stdlog($log);
                                if (execute_windows($device->ip, $credentials_windows, $command, $display)) {
                                    # All complete!
                                    $log->message = 'Run audit_windows.vbs successful for ' . $device->ip . ' (System ID ' . $device->id . ')';
                                    stdlog($log);
                                } else {
                                    # run audit script failed
                                    $log->message = 'Run audit_windows.vbs failed for ' . $device->ip . ' (System ID ' . $device->id . ')';
                                    $log->severity = 4;
                                    stdlog($log);
                                    $log->severity = 7;
                                }
                            } else {
                                # copy audit script to Windows failed
                                $log->message = 'Copy audit_windows.vbs failed for ' . $device->ip . ' (System ID ' . $device->id . ')';
                                $log->severity = 4;
                                stdlog($log);
                                $log->severity = 7;
                            }
                            if ($source_name != 'audit_windows.vbs') {
                                unlink('c:\\windows\\audit_windows_' . $ts . '.vbs');
                            }
                        }
                    }
                }

                # Audit via SSH
                if ($input->ssh_status == "true" and $device->os_family != 'DD-WRT' and $credentials_ssh) {
                    $log->message = 'Starting SSH audit for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    discovery_log($log);
                    // switch (strtolower($remote_os)) {
                    switch (strtolower($device->os_group)) {
                        case 'aix':
                            $audit_script = 'audit_aix.sh';
                            break;
                        
                        case 'vmkernel':
                            $audit_script = 'audit_esxi.sh';
                            break;
                        
                        case 'linux':
                            $audit_script = 'audit_linux.sh';
                            break;
                        
                        case 'darwin':
                            $audit_script = 'audit_osx.sh';
                            break;
                        
                        case 'windows':
                            $audit_script = '';
                            break;
                        
                        default:
                            $audit_script = '';
                            break;
                    }

                    $destination = $audit_script;
                    if ($display = 'y') {
                        $debugging = 3;
                    } else {
                        $debugging = 0;
                    }
                    // TODO - org_id?
                    $sql = "/* discovery::process_subnet */ SELECT * FROM `scripts` WHERE `name` = '$audit_script' AND `based_on` = '$audit_script' ORDER BY `id` LIMIT 1";
                    $query = $this->db->query($sql);
                    $result = $query->result();
                    if (!empty($result[0])) {
                        $script_details = $result[0];
                        # Just ensure we delete any audit scripts that might exist.
                        # Shouldn't be required because we're creating based on the timestamp
                        # Then open the file for writing
                        $ts = date('y_m_d_H_i_s');
                        if (php_uname('s') == 'Windows NT') {
                            $source_name = 'scripts\\' . str_replace('.sh', '_'.$ts.'.sh', $audit_script);
                            $unlink = $this->config->config['base_path'] . '\\other\\' . $source_name;
                            @unlink($unlink);
                            $fp = fopen($this->config->config['base_path'] . '\\other\\' . $source_name, 'w');
                        } else {
                            $source_name = 'scripts/' . str_replace('.sh', '_'.$ts.'.sh', $audit_script);
                            $unlink = $this->config->config['base_path'] . '/other/' . $source_name;
                            @unlink($unlink);
                            try {
                                $fp = fopen($this->config->config['base_path'] . '/other/' . $source_name, 'w');
                            } catch (Exception $e) {
                                print_r($e);
                            }
                        }
                        $script = $this->m_scripts->download($script_details->id);
                        fwrite($fp, $script);
                        fclose($fp);
                    } else {
                        $unlink = '';
                        $source_name = $audit_script;
                    }

                    unset($temp);
                    if ($audit_script != '') {
                        # copy the audit script to the target ip
                        if (php_uname('s') == 'Windows NT') {
                            $source = $filepath.'\\'.$source_name;
                        } else {
                            $source = $filepath.'/'.$source_name;
                        }
                        $destination = $this->config->item('discovery_linux_script_directory');
                        if (substr($destination, -1) != '/') {
                            $destination .= '/';
                        }
                        $destination .= $audit_script;
                        if ($ssh_result = scp($device->ip, $credentials_ssh, $source, $destination, $log)) {
                            # Successfully copied the audit script
                            $command = 'chmod ' . $this->config->item('discovery_linux_script_permissions') . ' ' . $destination;
                            $temp = ssh_command($device->ip, $credentials_ssh, $command, $log);
                        }
                        if ($display = 'y') {
                            $debugging = 3;
                        } else {
                            $debugging = 0;
                        }
                    }

                    # audit anything that's not ESX
                    if ($audit_script != 'audit_esxi.sh' and $audit_script != '') {
                        # successfully copied and chmodded the audit script
                        if (!empty($credentials_ssh->sudo)) {
                            # run the audit script as a normal user, using sudo
                            $command = 'echo "'.$credentials_ssh->credentials->password.'" | '.$credentials_ssh->sudo.' -S '.$this->config->item('discovery_linux_script_directory').$audit_script.' submit_online=y create_file=n url='.$discovery->url.'index.php/system/add_system debugging='.$debugging.' system_id='.$device->id.' display=' . $display . ' last_seen_by=audit_ssh';
                        } else {
                            # run the script without using sudo
                            $command = $this->config->item('discovery_linux_script_directory').$audit_script.' submit_online=y create_file=n url='.$discovery->url.'index.php/system/add_system debugging='.$debugging.' system_id='.$device->id.' display=' . $display . ' last_seen_by=audit_ssh';
                        }
                        $result = ssh_command($device->ip, $credentials_ssh, $command, $log);
                        if ($unlink != '') {
                            unlink($unlink);
                        }
                    }
                    # audit ESX
                    if ($audit_script == 'audit_esxi.sh') {
                        $command = $this->config->item('discovery_linux_script_directory').$audit_script.' submit_online=y last_seen_by=audit_ssh create_file=n debugging=0 echo_output=y system_id='.$device->id.' 2>/dev/null';
                        if ($result = ssh_command($device->ip, $credentials_ssh, $command, $log)) {
                            if ($result['status'] == 0) {
                                $script_result = '';
                                foreach ($result['output'] as $line) {
                                    $script_result .= $line."\n";
                                }
                                $script_result = preg_replace('/\s+/', ' ', $script_result);
                                $script_result = str_replace("> <", "><", $script_result);
                                $esx_input = trim($script_result);
                                try {
                                    $esx_xml = new SimpleXMLElement($esx_input);
                                } catch (Exception $error) {
                                    // not a valid XML string
                                    $log_details->message = 'Invalid XML input for ESX audit script';
                                    stdlog($log_details);
                                    exit;
                                }
                                $count = 0;
                                foreach ($esx_xml->children() as $child) {
                                    if ($child->getName() === 'sys') {
                                        $esx_details = (object) $esx_xml->sys;
                                        if (!isset($esx_details->ip) or $esx_details->ip == '') {
                                            $esx_details->ip = $device->ip;
                                        }
                                        $esx_details->system_id = $this->m_system->find_system($esx_details, $display);
                                        $esx_details->last_seen = $device->last_seen;

                                        if (isset($esx_details->system_id) and $esx_details->system_id != '') {
                                            // we have an existing device
                                            $esx_details->original_last_seen_by = $this->m_devices_components->read($esx_details->system_id, 'y', 'system', '', 'last_seen_by');
                                            $esx_details->original_last_seen = $this->m_devices_components->read($esx_details->system_id, 'y', 'system', '', 'last_seen');
                                            $this->m_system->update_system($esx_details);
                                            $log_details->message = "ESX update for $esx_details->ip (System ID $esx_details->system_id)";
                                            stdlog($log_details);
                                        } else {
                                            // we have a new system
                                            $esx_details->system_id = $this->m_system->insert_system($esx_details);
                                            $log_details->message = "ESX insert for $esx_details->ip (System ID $esx_details->system_id)";
                                            stdlog($log_details);
                                        }
                                        if (!isset($esx_details->audits_ip)) {
                                            $esx_details->audits_ip = $device->audits_ip;
                                        }

                                        if (isset($this->user->full_name)) {
                                            $temp_user = $this->user->full_name;
                                        } else {
                                            $temp_user = '';
                                        }
                                        $this->m_audit_log->create($esx_details->system_id, $temp_user, $esx_details->last_seen_by, $esx_details->audits_ip, '', '', $esx_details->last_seen);
                                        unset($temp_user);

                                    }
                                }
                                $this->m_devices_components->process_component('network', $esx_details, $esx_xml->network, $display);
                                $this->m_devices_components->process_component('software', $esx_details, $esx_xml->software, $display);
                                $this->m_devices_components->process_component('processor', $esx_details, $esx_xml->processor, $display);
                                $this->m_devices_components->process_component('bios', $esx_details, $esx_xml->bios, $display);
                                $this->m_devices_components->process_component('memory', $esx_details, $esx_xml->memory, $display);
                                $this->m_devices_components->process_component('motherboard', $esx_details, $esx_xml->motherboard, $display);
                                $this->m_devices_components->process_component('video', $esx_details, $esx_xml->video, $display);
                                $this->m_devices_components->process_component('vm', $esx_details, $esx_xml->vm, $display);
                                $this->m_devices_components->process_component('ip', $esx_details, $esx_xml->ip, $display);
                            }
                        }
                    }
                    $log->message = "Completed processing $device->ip (System ID $device->id)";
                    discovery_log($log);
                } // close the 'skip'
            }
        } else {
            $log->message = "No 'form_details' sent to input.";
            $log->severity = 5;
            discovery_log($log);
        }
    }
}
// End of file input.php
// Location: ./controllers/input.php
