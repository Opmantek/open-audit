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
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.1.0
* @link      http://www.open-audit.org
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}



if (!function_exists('process_scan')) {
    function process_scan($input = '')
    {
        if (empty($input) or empty($input->ip)) {
            return false;
        }

        if (empty($input->nmap_ports)) {
            $input->nmap_ports = '';
        }

        $log = new stdClass();
        $log->discovery_id = null;
        $log->system_id = null;
        $log->timestamp = null;
        $log->severity = 7;
        $log->pid = getmypid();
        $log->file = 'discovery_helper';
        $log->function = 'process_scan';
        $log->message = 'Data accepted';
        $log->ip = $input->ip;
        if (empty($input->system_id)) {
            $log->system_id = null;
        } else {
            $log->system_id = intval($input->system_id);
        }
        stdlog($log);
        $individual_ip_start = microtime(true);

        $CI = get_instance();

        // our required models
        $CI->load->model('m_audit_log');
        $CI->load->model('m_credentials');
        $CI->load->model('m_devices');
        $CI->load->model('m_device');
        $CI->load->model('m_devices_components');
        $CI->load->model('m_orgs');
        $CI->load->model('m_scripts');

        // our required helpers
        $CI->load->helper('audit');
        $CI->load->helper('mac');
        $CI->load->helper('network');
        $CI->load->helper('snmp');
        $CI->load->helper('snmp_oid');
        $CI->load->helper('ssh');
        $CI->load->helper('wmi');

        if (php_uname('s') != 'Windows NT') {
            $filepath = $CI->config->config['base_path'] . '/other';
        } else {
            $filepath = $CI->config->config['base_path'] . '\\other';
        }

        // Get the discovery details
        if (!empty($input->discovery_id)) {
            $input->discovery_id = intval($input->discovery_id);
            $log->severity = 7;
            $log->summary = 'Discovery id ' . $input->discovery_id . ' provided';
            $log->message = 'When processing discover_subnet, discovery_id ' . $input->discovery_id . ' was provided in the input.';
            $log->discovery_id = intval($input->discovery_id);
            $log->command_status = 'notice';
            $GLOBALS['discovery_id'] = $input->discovery_id;
            discovery_log($log);

            $sql = '/* input::discoveries */ ' . 'SELECT * FROM `discoveries` WHERE id = ?';
            $data = array($input->discovery_id);
            $query = $CI->db->query($sql, $data);
            $result = $query->result();
            $discovery = $result[0];
            # The below MUST be set if not already
            if (empty($discovery->org_id)) {
                $discovery->org_id = 1;
            }
            if (empty($discovery->device_count)) {
                $discovery->device_count = 0;
            }
            if (empty($discovery->limit)) {
                $discovery->limit = 0;
            }
        }

        // Create a blank discovery object if not already created above
        if (empty($discovery)) {
            $discovery = new stdClass();
            $discovery->id = '';
            $discovery->discard = '';
            $discovery->org_id = 1;
            $discovery->device_count = 0;
            $discovery->limit = 0;
            $proto = 'http';
            if ($CI->config->config['is_ssl'] === true) {
                $proto = 'https';
            }
            if (stripos($CI->config->config['default_network_address'], 'https:') !== false) {
                $proto = 'https';
            }
            $discovery->network_address = $proto . '://127.0.0.1/open-audit/';
        }



        // The end submit from the script that indicates there are no more items to be submitted
        if (!empty($input->complete) and $input->complete === 'y' and !empty($input->discovery_id)) {
            $sql = "/* input::discoveries */ " . "UPDATE `discoveries` SET `complete` = 'y' WHERE id = ?";
            $data = array(intval($input->discovery_id));
            $query = $CI->db->query($sql, $data);
            $log->severity = 7;
            $log->summary = 'Set discovery entry status to complete';
            $log->detail = $CI->db->last_query();
            discovery_log($log);
            if ($discovery->discard == 'y') {
                $sql = "/* input::discoveries */ " . "DELETE FROM `discoveries` WHERE id = ?";
                $data = array($log->discovery_id);
                $query = $CI->db->query($sql, $data);
                $log->severity = 7;
                $log->summary = 'Deleteing discovery entry';
                $log->message = $CI->db->last_query();
                stdlog($log);
            }
            if (!empty($discovery->other->single) and $discovery->other->single == 'y' and $discovery->discard == 'y') {
                sleep(10);
                $sql = "/* input::discoveries */ " . "DELETE FROM `credentials` WHERE description = 'Discovery " . $discovery->other->subnet . "'";
                $data = array();
                $query = $CI->db->query($sql, $data);
                $log->severity = 7;
                $log->summary = 'Deleteing credentials entries';
                $log->message = $CI->db->last_query();
                stdlog($log);
            }
            return true;
        }

        // check the IP isn't in the excluded list
        if (stripos(' ' . $CI->config->config['discovery_ip_exclude'] . ' ', ' ' . $input->ip . ' ') !== false) {
            # Our ip address matched an ip in the discovery_ip_exclude list - skip it
            $log->message = $input->ip . ' is in the list of excluded ip addresses - skipping.';
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
            return false;
        }

        // check we have an actual valid device IP
        if (filter_var($input->ip, FILTER_VALIDATE_IP) === false) {
            $log->message = "Invalid IP address submitted (" . $input->ip . "), skipping.";
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
            return false;
        }

        # Check we're obeying the limit
        if ($discovery->device_count >= $discovery->limit and $discovery->limit != 0) {
            $log->message = "License count exceeded. Not processing device " . $input->ip;
            discovery_log($log);
            return false;
        }

        # Update the count
        if (!empty($discovery->id)) {
            $sql = "/* input::discoveries */ " . "UPDATE discoveries SET device_count = device_count + 1 WHERE id = ?";
            $data = array($discovery->id);
            $query = $CI->db->query($sql, $data);
        }

        # Let's go!
        $log->message = 'Received data for ' . $input->ip . ', now starting to process';
        $individual_log_id_start = discovery_log($log);
        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);


        $device = new stdClass();
        if (!empty($log->system_id)) {
            $device->id = $log->system_id;
        } else {
            $device->id = '';
        }

        $device->audits_ip = (string)$input->ip;
        $device->discovery_id = $discovery->id;
        $device->os_family = '';
        $device->os_group = '';
        $device->ip = (string)$input->ip;
        $device->last_seen = $CI->config->config['timestamp'];
        $device->last_seen_by = 'nmap';
        $device->mac_address = @(string)$input->mac_address;
        $device->manufacturer = '';
        $device->name = '';
        $device->sysDescr = '';
        $device->timestamp = $CI->config->config['timestamp'];
        $device->type = '';
        $device->uuid = '';
        $device->vm_uuid = '';

        // Use local DNS if requested
        if ($CI->config->item('discovery_use_dns') == 'y') {
            $device = dns_validate($device);
            if (!empty($device->dns_hostname)) {
                $log->command_status = 'notice';
                $log->message = 'IP ' . $device->ip . ' resolved to DNS hostname ' . $device->dns_hostname;
                discovery_log($log);
                unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
            }
            if (!empty($device->domain)) {
                $log->command_status = 'notice';
                $log->message = 'IP ' . $device->ip . ' resolved to DNS domain ' . $device->dns_domain;
                discovery_log($log);
                unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
            }
        }

        // See if what little we have matches an existing device
        if (empty($device->id)) {
            $parameters = new stdCLass();
            $parameters->details = $device;
            $parameters->log = $log;
            $device->id = $CI->m_device->match($parameters);

            if (!empty($device->id)) {
                $log->system_id = $device->id;
                $log->message = "Device with ID " . $device->id . " found on initial Nmap result.";
                discovery_log($log);
                unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
            }
        }

        // Remove old logs
        if (!empty($device->id)) {
            $sql = "/* input::discoveries */ " . "DELETE FROM discovery_log WHERE system_id = " . $device->id . " AND (`discovery_id` != " . $discovery->id . " OR pid != " . $log->pid . ")";
            $log->message = 'Delete the previous log entries for this device';
            $log->command = $sql;
            $command_log_id = discovery_log($log);
            $command_start = microtime(true);
            $query = $CI->db->query($sql);
            $command_end = microtime(true);
            $log->command = $CI->db->last_query();
            $log->command_time_to_execute = $command_end - $command_start;
            $log->id = $command_log_id;
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
            unset($log->id, $command_log_id);
        }

        // Update the logs for THIS run if we didn't get a system_id in the input
        if (!empty($device->id) and empty($input->system_id)) {
            $sql = "/* input::discoveries */ " . "UPDATE discovery_log SET system_id = " . intval($log->system_id) . " WHERE discovery_id = " . $discovery->id . " and ip = '" . $device->ip . "'";
            $log->message = 'Update the current log entries with our new device';
            $log->command = $sql;
            $command_log_id = discovery_log($log);
            $command_start = microtime(true);
            $query = $CI->db->query($sql);
            $command_end = microtime(true);
            $log->command = $CI->db->last_query();
            $log->command_time_to_execute = $command_end - $command_start;
            $log->id = $command_log_id;
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
            unset($log->id, $command_log_id);
        }

        // We need a user object when retrieving various collections and
        // we should set the 'user' orgs to the org of this particular discovery run (and its children)
        $CI->user = new stdClass();
        if (!empty($discovery->org_id)) {
            $CI->user->orgs = $CI->m_orgs->get_children($discovery->org_id);
            if (count($CI->user->orgs) > 0) {
                $CI->user->org_list = $discovery->org_id . ',' . implode(',', $CI->user->orgs);
            } else {
                $CI->user->org_list = $discovery->org_id;
            }
        } else {
            $CI->user->org_list = '';
        }


        // Get any credential sets
        if (empty($credentials)) {
            $credentials = array();
        }
        $temp = $CI->m_credentials->collection();
        if (count($temp) > 0) {
            $credentials = array_merge($credentials, $temp);
        } else {
            $log->severity = 5;
            $log->message = "No credentials returned from database";
            discovery_log($log);
            $log->severity = 7;
        }
        unset($temp);
        $creds = array();
        foreach ($credentials as $credential) {
            $creds[] = $credential->attributes;
        }
        unset($credentials);
        $credentials = $creds;
        unset($creds);

        $log->command_status = 'notice';
        $log->message = 'WMI Status is '.$input->wmi_status.' on '.$device->ip;
        if (!empty($device->id)) {
            $log->message .= ' (System ID ' . $device->id . ')';
        }
        discovery_log($log);

        $input->ssh_port = '22';
        if ($discovery->other->nmap->ssh_ports != '22') {
            $nmap_ports = explode(',', $discovery->other->nmap->ssh_ports);
            foreach (explode(',', $input->nmap_ports) as $port) {
                $temp = explode('/', $port);
                $port = $temp[0];
                foreach ($nmap_ports as $nmap_port) {
                    if ($port == $nmap_port) {
                        $input->ssh_port = $port;
                        $input->ssh_status = 'true';
                    }
                }
                unset($nmap_item);
                unset($temp);
            }
        }

        $log->message = 'SSH Status is '.$input->ssh_status.' on '.$device->ip;
        if (!empty($device->id)) {
            $log->message .= ' (System ID ' . $device->id . ')';
        }
        discovery_log($log);

        $log->message = 'SNMP Status is '.$input->snmp_status.' on '.$device->ip;
        if (!empty($device->id)) {
            $log->message .= ' (System ID ' . $device->id . ')';
        }
        discovery_log($log);

        # SNMP
        $credentials_snmp = false;
        if (!extension_loaded('snmp') and $input->snmp_status == 'true') {
            $log->message = 'PHP extension not loaded, skipping SNMP data retrieval for ' . $device->ip;
            if (!empty($device->id)) {
                $log->message .= ' (System ID ' . $device->id . ')';
            }
            discovery_log($log);
        }
        if (extension_loaded('snmp') and $input->snmp_status == 'true') {
            $run_snmp = false;
            foreach ($credentials as $item) {
                if ($item->type === 'snmp' or $item->type === 'snmp_v2' or $item->type === 'snmp_v3') {
                    $run_snmp = true;
                    break;
                }
            }
            if ($run_snmp) {
                $log->message = 'Testing SNMP credentials for '.$device->ip;
                if (!empty($device->id)) {
                    $log->message .= ' (System ID ' . $device->id . ')';
                }
                discovery_log($log);
                $credentials_snmp = snmp_credentials($device->ip, $credentials, $log);
            } else {
                $log->message = 'No SNMP credentials, skipping SNMP data retrieval for ' . $device->ip;
                discovery_log($log);
            }
        }
        if ($credentials_snmp) {
            if (!empty($credentials_snmp->credentials->version)) {
                $device->snmp_version = "snmpv" . intval($credentials_snmp->credentials->version);
                if (intval($credentials_snmp->credentials->version) === 2) {
                    $device->snmp_version .= 'c';
                }
            }
            $temp_array = snmp_audit($device->ip, $credentials_snmp,$log);
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
        $log->file = 'discovery_helper';
        $log->function = 'discoveries';
        if ($device->type != 'computer' and $device->type != '' and $device->type != 'unknown' and $device->os_family != 'DD-WRT' and stripos($device->sysDescr, 'dd-wrt') === false and stripos($device->manufacturer, 'Ubiquiti') === false ) {
            $log->severity = 7;
            $log->message = 'Not a computer and not a DD-WRT device, setting SSH status to false for ' . $device->ip;
            if (!empty($device->id)) {
                $log->message .= ' (System ID ' . $device->id . ')';
            }
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            $input->ssh_status = 'false';
        }
        $log->file = 'discovery_helper';
        $log->function = 'discoveries';
        $log->command_status = 'notice';


        # SSH
        if ($input->ssh_status == 'true') {
            $log->message = 'Testing SSH credentials for '.$device->ip;
            if (!empty($device->id)) {
                $log->message .= ' (System ID ' . $device->id . ')';
            }
            discovery_log($log);
            $parameters = new stdClass();
            $parameters->ip = $device->ip;
            $parameters->system_id = '';
            if (!empty($device->id)) {
                $parameters->system_id = $device->id;
            }
            $parameters->log = $log;
            $parameters->credentials = $credentials;
            $parameters->ssh_port = $input->ssh_port;
            $ssh_details = ssh_audit($parameters);
            if (!empty($ssh_details)) {
                if (!empty($ssh_details->credentials)) {
                    $credentials_ssh = $ssh_details->credentials;
                }
                unset($ssh_details->credentials);
                $device->last_seen_by = 'ssh';
                $device->audits_ip = '127.0.0.1';
                foreach ($ssh_details as $key => $value) {
                    if (!empty($value) and empty($device->$key)) {
                        $device->$key = $value;
                    }
                }
            }
        }

        $log->file = 'discovery_helper';
        $log->function = 'discoveries';
        $log->command_status = 'notice';


        # We do not want to attempt to audit using WMI anything that's not a Windows machine
        if (!empty($device->os_group) and $device->os_group != 'Windows') {
            $input->wmi_status = 'false';
            $log->message = 'Setting WMI to false because we have an os_group that is not Windows, it is: ' . $device->os_group;
            discovery_log($log);
        }

        # WMI
        if ($input->wmi_status == 'true') {
            $log->message = 'Testing Windows credentials for ' . $device->ip;
            if (!empty($device->id)) {
                $log->message .= ' (System ID ' . $device->id . ')';
            }
            discovery_log($log);
            $credentials_windows = windows_credentials($device->ip, $credentials, $log);
        } else {
            $credentials_windows = false;
        }
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
        $log->file = 'discovery_helper';
        $log->function = 'discoveries';

        # Intelligent guesses at various attributes

        # Set manufacturer based on MAC address (if not already set)
        if (empty($device->manufacturer) and !empty($input->mac_address)) {
            $device->manufacturer = get_manufacturer_from_mac($input->mac_address);
            $log->severity = 7;
            $log->command_status = 'notice';
            $log->message = 'MAC ' . $input->mac_address . ' (input) matched to manufacturer ' . $device->manufacturer;
            $log->command_output = '';
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        }
        if (empty($device->manufacturer) and !empty($device->mac_address)) {
            $device->manufacturer = get_manufacturer_from_mac($device->mac_address);
            $log->severity = 7;
            $log->command_status = 'notice';
            $log->message = 'MAC ' . $device->mac_address . ' (device) matched to manufacturer ' . $device->manufacturer;
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        }
        # in the case where port 5060 is detected and we have no other information, assign type 'voip phone'
        if (empty($device->type) and empty($device->snmp_oid) and empty($device->uuid) and stripos($input->nmap_ports, '5060/') !== false) {
            $device->type = 'voip phone';
        }
        # Port 62078 is used by IOS for iTunes wifi sync
        if (stripos($input->nmap_ports, '62078/tcp/iphone-sync') !== false) {
            # this could be an iPad (tablet), iPod (media device) or iPhone (smart phone).
            $log->message = 'Detected port TCP 62078 open. Assuming an Apple IOS device';
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
            $device->type = 'iphone';
            $device->model = 'Apple iPhone';
            $device->manufacturer = 'Apple';
            $device->os_group = 'Apple IOS';
            $device->os_family = 'Apple IOS';
            $device->os_name = 'Apple IOS';
            if (stripos($device->hostname, 'ipad') !== false or stripos($device->dns_hostname, 'ipad') !== false) {
                $device->type = 'ipad';
                $device->model = 'Apple iPad';
            }
            if (stripos($device->hostname, 'ipod') !== false or stripos($device->dns_hostname, 'ipod') !== false) {
                $device->type = 'ipod';
                $device->model = 'Apple iPod';
            }
        }
        # Android devices typically have a hostname of android-***
        if (stripos($device->hostname, 'android') !== false or stripos($device->dns_hostname, 'android') !== false) {
            # Could be a table or smart phone or anything else.
            # We have no way of knowing so simply setting it to android.
            $device->type = 'android';
            $device->os_group = 'Android';
            $device->os_family = 'Android';
            $device->os_name = 'Android';
        }
        # Ubiquiti guessing
        if (empty($device->model) and stripos($device->manufacturer, 'Ubiquiti') !== false) {
            $device = $CI->m_devices->model_guess($device);
            if (!empty($device->model)) {
                $log->message = 'Best guess at Ubiquiti model to be ' . $device->model . ' for sysDesc: ' . $device->sysDescr;
                discovery_log($log);
                unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
            }
            if (empty($device->type)) {
                $device->type = 'router';
                $log->message = 'No device type assigned to Ubiquiti device, assigning router.';
                discovery_log($log);
                unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
            }
        }
        # Playstation guess
        if (stripos($device->manufacturer, 'Sony') !== false and ($device->hostname == 'playstation' or $device->dns_hostname == 'playstation')) {
            $device->type = 'game console';
            $log->message = 'Assigning type = game console to Sony Playstation.';
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        }

        # If we don't have a device.id, check with our updated device attributes (if any)
        if (empty($device->id)) {
            $parameters = new stdCLass();
            $parameters->details = $device;
            $parameters->log = $log;
            $device->id = $CI->m_device->match($parameters);
            if (!empty($device->id)) {
                $log->system_id = $device->id;
                // remove any old logs for this device
                $sql = "/* input::discoveries */ " . "DELETE FROM discovery_log WHERE system_id = " . $device->id . " AND (discovery_id != " . $discovery->id . " OR pid != " . $log->pid . ")";
                $log->message = 'Delete the previous log entries for this system_id';
                $log->command_status = 'notice';
                $log->command = $sql;
                $command_log_id = discovery_log($log);
                $command_start = microtime(true);
                $query = $CI->db->query($sql);
                $command_end = microtime(true);
                $log->command = $CI->db->last_query();
                $log->command_time_to_execute = $command_end - $command_start;
                $log->id = $command_log_id;
                discovery_log($log);
                unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
                unset($log->id, $command_log_id);
                // update the previous log entries with our new system_id
                $sql = "/* input::discoveries */ " . "UPDATE discovery_log SET system_id = " . intval($log->system_id) . " WHERE discovery_id = " . $discovery->id . " and ip = '" . $device->ip . "'";
                $log->message = 'Update the previous log entries with the system_id';
                $log->command_status = 'notice';
                $log->command = $sql;
                $command_log_id = discovery_log($log);
                $command_start = microtime(true);
                $query = $CI->db->query($sql);
                $command_end = microtime(true);
                $log->command = $CI->db->last_query();
                $log->command_time_to_execute = $command_end - $command_start;
                $log->id = $command_log_id;
                discovery_log($log);
                unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
                unset($log->id, $command_log_id);
            }
        }

        # Set the device org_id based on this discovery
        $device->org_id = $discovery->org_id;

        # If we have specifically assigned another org_id, set it
        if (!empty($discovery->devices_assigned_to_org)) {
            $device->org_id = $discovery->devices_assigned_to_org;
        }

        # If we have specifically assigned a location_id, set it
        if (!empty($discovery->devices_assigned_to_location)) {
            $device->location_id = $discovery->devices_assigned_to_location;
        }

        # See if we have a Mac Address for the device's IP
        if (!empty($network_interfaces) and empty($device->mac_address)) {
            foreach ($network_interfaces as $interface) {
                if ($interface->ip == $device->ip) {
                    $device->mac_address = $interface->mac;
                    $device->subnet = $interface->subnet;
                }
            }
        }

        // insert or update the device
        if (!empty($device->id)) {
            // we have a system id - UPDATE
            $action = 'update';
            $log->severity = 7;
            $log->command_status = 'notice';
            $log->message = 'Start of ' . strtoupper($device->last_seen_by) . ' update for ' . $device->ip . ' (System ID ' . $device->id . ')';
            discovery_log($log);
            $CI->m_device->update($device);
            $device->ip = ip_address_from_db($device->ip);
            $log->file = 'discovery_helper';
            $log->function = 'discoveries';
            $log->ip = $device->ip;
            $log->message = 'End of ' . strtoupper($device->last_seen_by) . ' update for ' . $device->ip . ' (System ID ' . $device->id . ')';
            discovery_log($log);
        } else {
            // we have a new system - INSERT
            $action = 'insert';
            $log->severity = 7;
            $log->ip = $device->ip;
            $log->command_status = 'notice';
            $log->message = 'Start of ' . strtoupper($device->last_seen_by) . ' insert for ' . $device->ip;
            discovery_log($log);
            $device->id = $CI->m_device->insert($device);
            $device->ip = ip_address_from_db($device->ip);
            $log->system_id = $device->id;
            $log->file = 'discovery_helper';
            $log->function = 'discoveries';
            $log->message = 'End of ' . strtoupper($device->last_seen_by) . ' insert for ' . $device->ip . ' (System ID ' . $device->id . ')';
            discovery_log($log);
            // update the previous log entries with our new system_id
            $sql = "/* input::discoveries */ " . "UPDATE discovery_log SET system_id = " . intval($log->system_id) . " WHERE pid = " . intval($log->pid) . " and ip = '" . $device->ip . "'";
            $log->message = 'Update the previous log entries with our new system_id';
            $log->command = $sql;
            $command_log_id = discovery_log($log);
            $command_start = microtime(true);
            $query = $CI->db->query($sql);
            $command_end = microtime(true);
            $log->command = $CI->db->last_query();
            $log->command_time_to_execute = $command_end - $command_start;
            $log->id = $command_log_id;
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
            unset($log->id, $command_log_id);
        }

        // grab some timestamps
        $device->last_seen = $CI->m_devices_components->read($device->id, 'y', 'system', '', 'last_seen');
        $device->first_seen = $CI->m_devices_components->read($device->id, 'y', 'system', '', 'first_seen');

        // Insert an audit log
        $user = '';
        if (!empty($CI->user->full_name)) {
            $user = $CI->user->full_name;
        }
        $CI->m_audit_log->create($device->id, $user, $device->last_seen_by, $device->audits_ip, '', '', $device->last_seen);
        unset($user);

        if (!empty($device->ip)) {
            $log->ip = $device->ip;
        }
        $log->discovery_id = $device->discovery_id;
        $log->file = 'discovery_helper';
        $log->function = 'discoveries';

        // update any network interfaces retrieved by SNMP
        if (isset($network_interfaces) and is_array($network_interfaces) and count($network_interfaces) > 0) {
            $log->message = 'Processing found network interfaces for ' . $device->ip . ' (System ID ' . $device->id . ')';
            #$log->command = json_encode($network_interfaces);
            $log->command_output = '';
            discovery_log($log);
            $parameters = new stdClass();
            $parameters->table = 'network';
            $parameters->details = $device;
            $parameters->input = $network_interfaces;
            $parameters->log = $log;
            $CI->m_devices_components->process_component($parameters);
        }

        // update any ip addresses retrieved by SNMP
        if (!empty($ip) and is_array($ip->item) and count($ip->item) > 0) {
            $log->ip = $device->ip;
            $log->discovery_id = $device->discovery_id;
            $log->file = 'discovery_helper';
            $log->function = 'discoveries';
            $log->command_status = 'notice';
            $log->message = 'Processing found ip addresses for ' . $device->ip . ' (System ID ' . $device->id . ')';
            #$log->command = json_encode($ip);
            $log->command_output = '';
            discovery_log($log);
            $parameters = new stdClass();
            $parameters->table = 'ip';
            $parameters->details = $device;
            $parameters->input = $ip->item;
            $parameters->log = $log;
            $CI->m_devices_components->process_component($parameters);
        }

        // create or update the entry in the ip table from non-SNMP data
        //     so our 'networks' endpoint and functions can find the device
        if (empty($ip->item)) {
            $log->command_status = 'notice';
            $log->message = 'Processing found ip addresses (non-snmp) for ' . $device->ip . ' (System ID ' . $device->id . ')';
            discovery_log($log);
            $item = new stdClass();
            $item->system_id = $device->id;
            $item->ip = $device->ip;
            $item->version = 4;
            $item->mac = '';
            if (!empty($device->mac_address)) {
                $item->mac = (string)$device->mac_address;
            }
            if (!empty($discovery->other->subnet) and strpos($discovery->other->subnet, '/') !== false) {
                $network_details = network_details($discovery->other->subnet);
                $item->netmask = $network_details->netmask;
                $item->cidr = $network_details->network_slash;
                $item->network = $discovery->other->subnet;
            } else {
                $network_details = explode('.', $device->ip);
                $item->netmask = '255.255.255.0';
                $item->cidr = '24';
                $item->network = $network_details[0] . '.' .  $network_details[1] . '.' .  $network_details[2] . '.0/24';
            }
            # new special routine as we may already have IPs (from a real audit) but not this particular
            # discovery run, so we don't want to remove these esiting IPs. Special function for this.
            $parameters = new stdClass();
            $parameters->log = $log;
            $parameters->device = $device;
            $parameters->ip = $item;
            $CI->m_devices_components->nmap_ip($parameters);
            #$CI->m_devices_components->nmap_ip($device, $item);
            unset($item);
        }

        // finish off with updating any network IPs that don't have a matching interface
        $CI->m_devices_components->update_missing_interfaces($device->id);

        // insert any modules from SNMP
        if (isset($modules) and is_array($modules) and count($modules) > 0) {
            $log->ip = $device->ip;
            $log->discovery_id = $device->discovery_id;
            $log->file = 'discovery_helper';
            $log->function = 'discoveries';
            $log->message = 'Processing found modules for ' . $device->ip . ' (System ID ' . $device->id . ')';
            discovery_log($log);
            $parameters = new stdClass();
            $parameters->table = 'module';
            $parameters->details = $device;
            $parameters->input = $modules;
            $parameters->log = $log;
            $CI->m_devices_components->process_component($parameters);
        }

        // insert any found virtual machines from SNMP
        if (isset($guests) and is_array($guests) and count($guests) > 0) {
            $log->ip = $device->ip;
            $log->discovery_id = $device->discovery_id;
            $log->file = 'discovery_helper';
            $log->function = 'discoveries';
            $log->message = 'Processing found VMs for ' . $device->ip . ' (System ID ' . $device->id . ')';
            discovery_log($log);
            $parameters = new stdClass();
            $parameters->table = 'vm';
            $parameters->details = $device;
            $parameters->input = $guests;
            $parameters->log = $log;
            $CI->m_devices_components->process_component($parameters);
            unset($found);
        }

        // process and store the Nmap data
        $nmap_result = array();
        if (!empty($input->nmap_ports)) {
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
                $log->ip = $device->ip;
                $log->discovery_id = $device->discovery_id;
                $log->file = 'discovery_helper';
                $log->function = 'discoveries';
                $log->message = 'Processing Nmap ports for ' . $device->ip . ' (System ID ' . $device->id . ')';
                discovery_log($log);
                $parameters = new stdClass();
                $parameters->table = 'nmap';
                $parameters->details = $device;
                $parameters->input = $nmap_result;
                $parameters->log = $log;
                $CI->m_devices_components->process_component($parameters);
            }
        }

        // insert a blank to indicate we're finished this part of the discovery
        // if required, the audit scripts will insert their own audit logs
        $CI->m_audit_log->update('debug', '', $device->id, $device->last_seen);

        $log->file = 'discovery_helper';
        $log->function = 'discoveries';
        $log->severity = 5;
        $individual_ip_end = microtime(true);
        $log->command_time_to_execute = $individual_ip_end - $individual_ip_start;
        if (!empty($device->type)) {
            $log->message = "At IP " . $device->ip . ", discovery found a device of type '" . $device->type . "'.";
        } else {
            $log->message = "At IP " . $device->ip . ", discovery found an unknown device.";
        }
        discovery_log($log);
        $log->severity = 7;

        // If we are configured as a collector, forward the information to the server
        if ($CI->config->config['servers'] !== '') {
            $server = json_decode($CI->config->config['servers']);
            $log->message = 'Sending result to ' . $server->host . ' because this server is a collector.';
            discovery_log($log);

            $device_json = new stdClass();
            $device_json->system = new stdClass();
            foreach ($device as $key => $value) {
                if ($key != 'id' and !empty($value)) {
                    $device_json->system->{$key} = $value;
                }
            }
            $device_json->system->collector_uuid = $CI->config->config['uuid'];
            if (count($nmap_result) > 0) {
                $device_json->nmap = new stdClass();
                $device_json->nmap = array();
                foreach ($nmap_result as $item) {
                    $device_json->nmap[] = $item;
                }
            }
            if (isset($guests) and count($guests) > 0) {
                $device_json->vm = new stdClass();
                $device_json->vm = array();
                foreach ($guests as $item) {
                    $device_json->vm[] = $item;
                }
            }
            if (isset($modules) and count($modules) > 0) {
                $device_json->module = new stdClass();
                $device_json->module = array();
                foreach ($modules as $item) {
                    $device_json->module[] = $item;
                }
            }
            if (isset($ip) and count($ip) > 0) {
                $device_json->ip = new stdClass();
                $device_json->ip = array();
                foreach ($ip->item as $item) {
                    $device_json->ip[] = $item;
                }
            }
            if (isset($network_interfaces) and is_array($network_interfaces) and count($network_interfaces) > 0) {
                $device_json->network = new stdClass();
                $device_json->network = array();
                foreach ($network_interfaces as $item) {
                    $device_json->network[] = $item;
                }
            }
            unset($device_json->system->id);
            unset($device_json->system->discovery_id);
            unset($device_json->system->org_id);
            unset($device_json->system->first_seen);
            $device_json = json_encode($device_json);
            $url = $server->host . $server->community . '/index.php/input/devices';
            $data = array('data' => $device_json);
            // use key 'http' even if we send the request to https://...
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            if ($result === false) {
                # error
                $log->severity = 4;
                $log->message = 'Could not send result to ' . $server->host . $server->community . '/index.php/input/devices - please check with your server administrator.';
                discovery_log($log);
                $log->severity = 7;
            } else {
                # success
                $log->severity = 7;
                $log->message = 'Result sent to ' . $server->host . '.';
                discovery_log($log);
            }
        }
        
        $audit_result = false;

        if (empty($credentials_windows) and empty($credentials_ssh) and empty($credentials_snmp)) {
            if ($input->snmp_status == 'true' or $input->ssh_status == 'true' or $input->wmi_status == 'true') {
                $log->command_status = 'fail';
                $log->severity = 5;
                $log->message = 'No valid credentials for ' . $device->ip;
                discovery_log($log);
                $log->severity = 7;
            } else {
                $log->command_status = 'fail';
                $log->severity = 5;
                $log->message = 'No management protocols for ' . $device->ip;
                discovery_log($log);
                $log->severity = 7;
            }
        }

        // set the identification with what we have
        $CI->m_device->set_identification($device->id);

        // Get and make the audit script
        if (!empty($credentials_windows) or !empty($credentials_ssh)) {
            $temp = microtime();
            $temp2 = explode(' ', $temp);
            unset($temp);
            $micro = str_replace('0.', '', $temp2[0]);
            unset($temp2);
            $timestamp = date('y_m_d_H_i_s') . '_' . $micro;
            unset($micro);
            switch (strtolower($device->os_group)) {
                case 'aix':
                    $audit_script = 'audit_aix.sh';
                    $source_name = 'audit_aix_' . $timestamp . '.sh';
                    break;
                
                case 'vmkernel':
                case 'vmware':
                    $audit_script = 'audit_esxi.sh';
                    $source_name = 'audit_esxi_' . $timestamp . '.sh';
                    break;
                
                case 'linux':
                    $audit_script = 'audit_linux.sh';
                    $source_name = 'audit_linux_' . $timestamp . '.sh';
                    break;
                
                case 'darwin':
                    $audit_script = 'audit_osx.sh';
                    $source_name = 'audit_osx_' . $timestamp . '.sh';
                    break;
                
                case 'windows':
                    $audit_script = 'audit_windows.vbs';
                    $source_name = 'audit_windows_' . $timestamp . '.vbs';
                    break;
                
                case 'sunos':
                    $audit_script = 'audit_solaris.sh';
                    $source_name = 'audit_solaris_' . $timestamp . '.sh';
                    break;
                
                default:
                    $audit_script = '';
                    $source_name = '';
                    $source = '';
                    break;
            }
            if ($audit_script != '') {
                if (php_uname('s') == 'Windows NT') {
                    $source = $filepath . '\\scripts\\' . $source_name;
                } else {
                    $source = $filepath . '/scripts/' . $source_name;
                }
                $sql = "/* discovery::process_subnet */ " . "SELECT * FROM `scripts` WHERE `name` = '$audit_script' AND `based_on` = '$audit_script' ORDER BY `id` LIMIT 1";
                $query = $CI->db->query($sql);
                $result = $query->result();
                if (!empty($result[0])) {
                    $log->file = 'discovery_helper';
                    $log->message = 'Script details retrieved';
                    $log->command = $sql;
                    $log->command_status = 'success';
                    discovery_log($log);
                    $script_details = $result[0];
                    # Just ensure we delete any audit scripts that might exist.
                    # Shouldn't be required because we're creating based on the timestamp
                    # Then open the file for writing
                    @unlink($source);
                    try {
                        $fp = fopen($source, 'w');
                    } catch (Exception $e) {
                        $log->message = 'Could not create temporary script';
                        $log->command = $e;
                        $log->command_status = 'fail';
                        discovery_log($log);
                        unset($log->command, $log->message, $log->command_status);
                        $audit_script = '';
                    }
                    $script = $CI->m_scripts->download($script_details->id);
                    if (!empty($audit_script) and empty($script)) {
                        $log->message = 'Could not retrieve script using configured options';
                        $log->command = "\$CI->m_scripts->download($script_details->id)";
                        $log->command_status = 'fail';
                        discovery_log($log);
                        unset($log->command, $log->message, $log->command_status);
                        $audit_script = '';
                    } else {
                        try {
                            fwrite($fp, $script);
                        } catch (Exception $e) {
                            $log->message = 'Could not write to temporary script';
                            $log->command = $e;
                            $log->command_status = 'fail';
                            discovery_log($log);
                            unset($log->command, $log->message, $log->command_status);
                            $audit_script = '';
                        }
                    }
                    fclose($fp);
                } else {
                    $log->severity = 4;
                    $log->message = 'Could not retrieve script from database for ' . $device->os_group . ', exiting';
                    $log->command = $sql;
                    $log->command_status = 'fail';
                    discovery_log($log);
                    unset($log->command, $log->message, $log->command_status);
                    $audit_script = '';
                }
            } else {
                $log->severity = 6;
                $log->command_status = 'notice';
                $log->message = "Discovery could not match the OS Group ($device->os_group) to an audit script for $device->ip (System ID $device->id).";
                discovery_log($log);
                return true;
            }
        } else {
            // go back now as we don't have a script
            $log->severity = 7;
            $log->command_status = 'notice';
            $log->message = "Discovery has completed processing $device->ip (System ID $device->id).";
            discovery_log($log);
            return true;
        }
        # Audit Windows
        if ($input->wmi_status == "true" and !empty($credentials_windows) and !empty($audit_script)) {
            # We do not support auditing windows using the script over SSH at this time
            $input->ssh_status = "false";
            $log->file = 'discovery_helper';
            $log->function = 'discoveries';
            $log->command_time_to_execute = '';
            $log->command = '';
            $log->message = 'Starting windows script audit for ' . $device->ip . ' (System ID ' . $device->id . ')';
            discovery_log($log);
            $share = '\\admin$';
            $destination = 'audit_windows.vbs';

            if (php_uname('s') == 'Windows NT' and exec('whoami') == 'nt authority\system') {
                # Windows Server running on the LocalSystem account.
                # We cannot copy the audit script to the target and then run it,
                # We _must_ run the script locally and use $device->ip as the script target
                # We will loose the ability to retrieve certain items like files, netstat, tasks, etc
                if (strpos($credentials_windows->credentials->password, '"') !== false or 
                    strpos($credentials_windows->credentials->username, '"') !== false) {
                    # cscript cannot parse an arguement containing a "
                    $log->message = 'Incompatible credentials for audit script. Cannot use " (double quotes) in a wscript command line attribute.';
                    $log->command_time_to_execute = '';
                    $log->command_status = 'fail';
                    $log->severity = 4;
                    discovery_log($log);
                    $log->command_status = '';
                    $log->severity = 7;
                } else {
                    $username = $credentials_windows->credentials->username;
                    $temp = explode('@', $username);
                    $username = $temp[0];
                    if (count($temp) > 1) {
                        $domain = $temp[1] . '\\';
                    } else {
                        $domain = '';
                    }
                    unset($temp);
                    $command_string = "%comspec% /c start /b cscript //nologo " . "$filepath\\scripts\\" . $source_name . " strcomputer=".$device->ip." submit_online=y create_file=n struser=".$domain.$username." strpass=".$credentials_windows->credentials->password." url=".$discovery->network_address."index.php/input/devices debugging=3 system_id=".$device->id." last_seen_by=audit_wmi discovery_id=".$discovery->id;

                    $log->command = "%comspec% /c start /b cscript //nologo " . "$filepath\\scripts\\" . $source_name . " strcomputer=".$device->ip." submit_online=y create_file=n struser=".$domain.$username." strpass=****** url=".$discovery->network_address."index.php/input/devices debugging=3 system_id=".$device->id." last_seen_by=audit_wmi discovery_id=".$discovery->id;

                    $command_start = microtime(true);
                    exec($command_string, $output, $return_var);
                    $command_end = microtime(true);

                    $log->severity = 7;
                    $log->command_time_to_execute = $command_end - $command_start;
                    $log->message = 'Successful attempt to run audit_windows.vbs for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    $log->command_status = 'success';
                    if ($return_var != '0') {
                        $log->command_status = 'fail';
                        $log->message = 'Failed attempt to run audit_windows.vbs for ' . $device->ip . ' (System ID ' . $device->id . ')';
                        $log->severity = 4;
                    }
                    discovery_log($log);
                }
            } else {
                # Unix or Windows Server and non default apache user on Windows
                # Remotely run script ON target device
                $command = "cscript " . $device->install_dir . "\\audit_windows.vbs submit_online=n create_file=w debugging=0 self_delete=y last_seen_by=audit_wmi system_id=".$device->id." discovery_id=".$discovery->id;
                # Copy the audit script to admin$
                $copy = false;
                $copy = copy_to_windows($device->ip, $credentials_windows, '\\admin$', $source, 'audit_windows.vbs', $log);

                # Delete the local audit script if it's not a default script
                if ($audit_script != '' and $source_name != $audit_script) {
                    $log->file = 'discovery_helper';
                    $log->function = 'discoveries';
                    $log->command = 'unlink(\'' . $source .'\')';
                    $log->message = 'Attempt to delete temp audit script succeeded';

                    if(is_file($source) && @unlink($source)){
                        // delete success
                    } else if (is_file ($source)) {
                        // unlink failed
                        $perms = substr(sprintf('%o', fileperms($source)), -4);
                        $log->command_status = 'fail';
                        $log->command_output = 'Could not delete file ' . $source . ' , file permissions are: ' . $perms . '.';
                        $log->severity = 4;
                    } else {
                      // file doesn't exist
                        $log->command_status = 'fail';
                        $log->command_output = 'File does not exist.';
                        $log->severity = 4;
                    }
                    discovery_log($log);
                    $log->severity = 7;
                    unset($log->command, $log->message);
                }


                $output = false;
                if ($copy) {
                    # We managed to copy the file, so now run it
                    # As at 2.3.0, we now wait for this to complete and parse the
                    # output looking for 'File    ' so we can retrieve the file
                    $output = execute_windows($device->ip, $credentials_windows, $command, $log);
                }
                $audit_file = false;
                if (!empty($output)) {
                    foreach ($output as $line) {
                        if (strpos($line, 'File    ') !== false) {
                            $audit_file = trim(str_replace('File    ', '', $line));
                        }
                    }
                }
                $copy = false;
                if ($audit_file) {
                    $temp = explode('\\', $audit_file);
                    if (php_uname('s') == 'Windows NT') {
                        $destination = $filepath . '\\scripts\\' . end($temp);
                    } else {
                        $destination = $filepath . '/scripts/' . end($temp);
                    }
                    $copy = copy_from_windows($device->ip, $credentials_windows, end($temp), $destination, $log);
                }
                if ($copy) {
                    $audit_result = file_get_contents($destination);
                    if (empty($audit_result)) {
                        $log->command_status = 'fail';
                        $log->message = 'Could not read audit result file.';
                        $log->command = "file_get_contents('$destination')";
                        $log->command_output = '';
                        discovery_log($log);
                    }
                }
                if ($audit_file) {
                    // delete the remote audit result
                    $parameters = new stdClass();
                    $parameters->log = $log;
                    $parameters->ip = $device->ip;
                    $parameters->share = 'admin$';
                    $parameters->file = end($temp);
                    $parameters->credentials = $credentials_windows;
                    delete_windows_result($parameters);
                }
            }
        }

        # Audit via SSH
        if ($input->ssh_status == "true" and $device->os_family != 'DD-WRT' and !empty($credentials_ssh) and !empty($audit_script)) {
            $log->message = 'Starting SSH audit script for ' . $device->ip . ' (System ID ' . $device->id . ')';
            $log->file = 'discovery_helper';
            $log->command_time_to_execute = '';
            $log->command = '';
            discovery_log($log);

            # copy the audit script to the target ip
            $destination = $CI->config->item('discovery_linux_script_directory');
            if (substr($destination, -1) != '/') {
                $destination .= '/';
            }
            $destination .= $audit_script;
            $parameters = new stdClass();
            $parameters->ip = $device->ip;
            $parameters->credentials = $credentials_ssh;
            $parameters->source = $source;
            $parameters->destination = $destination;
            $parameters->log = $log;
            $parameters->ssh_port = $input->ssh_port;
            $temp = scp($parameters);

            # Delete the local audit script if it's not a default script
            if ($audit_script != '' and $source_name != $audit_script) {
                $params = new stdClass();
                $params->file = $source;
                $params->log = $log;
                delete_local_file($params);
            }

            if (!$temp) {
                $audit_script = '';
                $log->message = 'Could not SCP audit script to ' . $device->ip . ' ' . $destination .')';
                $log->command_status = 'fail';
                discovery_log($log);
                return false;
            }
            # Successfully copied the audit script, now chmod it
            $command = 'chmod ' . $CI->config->item('discovery_linux_script_permissions') . ' ' . $destination;
            # No use testing for a result as a chmod produces no output
            $parameters = new stdClass();
            $parameters->log = $log;
            $parameters->ip = $device->ip;
            $parameters->credentials = $credentials_ssh;
            $parameters->command = $command;
            $parameters->ssh_port = $input->ssh_port;
            ssh_command($parameters);

            $log->file = 'discovery_helper';
            $log->function = 'discoveries';
            $log->command_status = 'notice';
            $log->severity = 7;

            $result = false;
            if ($audit_script != '') {
                $log->command = '';
                $log->command_output = '';
                $command = $CI->config->item('discovery_linux_script_directory').$audit_script.' submit_online=n create_file=y debugging=1 system_id='.$device->id.' last_seen_by=audit_ssh discovery_id='.$discovery->id;
                $log->message = 'Running audit using ' . $credentials_ssh->credentials->username . '.';
                if ($credentials_ssh->credentials->username == 'root') {
                    $log->message = 'Running audit using root user.';
                } else if (!empty($device->which_sudo) and $device->use_sudo) {
                    $command = 'sudo ' . $command;
                    $log->message = 'Running audit using ' .  $credentials_ssh->credentials->username . ' with sudo, as per config.';
                } else if (!empty($device->which_sudo) and !$device->use_sudo) {
                    $log->message = 'Running audit using ' .  $credentials_ssh->credentials->username . ' without sudo, as sudo attempt failed.';
                } else if (empty($device->which_sudo)) {
                    $log->message = 'Running audit using ' . $credentials_ssh->credentials->username . ' as sudo not present.';
                }
                discovery_log($log);

                $parameters = new stdClass();
                $parameters->log = $log;
                $parameters->ip = $device->ip;
                $parameters->credentials = $credentials_ssh;
                $parameters->command = $command;
                $parameters->ssh_port = $input->ssh_port;
                $result = ssh_command($parameters);
            }
            $log->file = 'discovery_helper';
            $log->function = 'discoveries';
            $log->command_status = 'success';
            $log->severity = 7;
            $log->command = '';
            $log->command_output = '';
            $log->message = '';
            $log->ip = $device->ip;
            discovery_log($log);

            if (!empty($result) and gettype($result) == 'array') {
                foreach ($result as $line) {
                    if (strpos($line, 'File    ') !== false) {
                        $audit_file = $line;
                    }
                }
                $audit_file = str_replace('File                ', '', $audit_file);
                $temp = explode('/', $audit_file);
                if (php_uname('s') == 'Windows NT') {
                    $destination = $filepath . '\\scripts\\' . end($temp);
                } else {
                    $destination = $filepath . '/scripts/' . end($temp);
                }
                $parameters = new stdClass();
                $parameters->log = $log;
                $parameters->ip = $device->ip;
                $parameters->credentials = $credentials_ssh;
                $parameters->source = $audit_file;
                $parameters->destination = $destination;
                $parameters->ssh_port = $input->ssh_port;
                # Allow 20 seconds to copy the file
                $CI->config->config['discovery_ssh_timeout'] = 20;
                $temp = scp_get($parameters);
                if ($temp) {
                    $audit_result = file_get_contents($destination);
                    if (empty($audit_result)) {
                        $log->command_status = 'fail';
                        $log->message = 'Could not read audit result file.';
                        $log->command = "file_get_contents('$destination')";
                        $log->command_output = '';
                        discovery_log($log);
                    }
                } else {
                    $log->severity = 5;
                    $log->command_status = 'fail';
                    $log->message = 'Could not SCP GET to ' . $destination;
                    discovery_log($log);
                    $log->severity = 7;
                }
                // Delete the remote file
                $command = 'rm ' . $audit_file;
                if (!empty($device->which_sudo) and $device->use_sudo and $credentials_ssh->credentials->username != 'root') {
                    // add sudo, we need this if we have run the audit using sudo
                    $command = 'sudo ' . $command;
                    // Allow 10 seconds to run the command
                    $CI->config->config['discovery_ssh_timeout'] = 10;
                }
                $parameters = new stdClass();
                $parameters->log = $log;
                $parameters->ip = $device->ip;
                $parameters->credentials = $credentials_ssh;
                $parameters->command = $command;
                $parameters->ssh_port = $input->ssh_port;
                ssh_command($parameters);
            }
        }

        $log->file = 'discovery_helper';
        $log->function = 'discoveries';
        $log->command_status = 'notice';
        $log->severity = 7;
        $log->command = '';

        if (!empty($audit_result)) {
            $audit_result = str_replace('data=<?xml version="1.0" encoding="UTF-8"?>', '<?xml version="1.0" encoding="UTF-8"?>', $audit_result);
            $parameters = new stdClass();
            $parameters->input = $audit_result;
            $parameters->log = $log;
            $audit = audit_convert($parameters);
            if (!$audit) {
                return false;
            } else {
                $params = new stdClass();
                $params->file = $destination;
                $params->log = $log;
                delete_local_file($params);
            }

            $log->discovery_id = $discovery->id;
            $parameters = new stdClass();
            $parameters->log = $log;
            $parameters->input = $audit->system;
            $audit->system = audit_format_system($parameters);

            # We don't care what the audit result says is the "ip", we KNOW it's the IP we just used to discover this device
            $audit->system->ip = $device->ip;

            $i = $CI->m_device->match($audit->system, 'process audit');
            if (empty($audit->system->discovery_id)) {
                $audit->system->discovery_id = '';
            } else {
                $log->discovery_id = $audit->system->discovery_id;
                $GLOBALS['discovery_id'] = $audit->system->discovery_id;
            }
            if (!empty($audit->system->id)) {
                $log->system_id = $audit->system->id;
            }
            if (empty($i) and !empty($audit->system->id)) {
                $i = intval($audit->system->id);
            }
            if (!empty($i) and !empty($audit->system->id) and $i != $audit->system->id) {
                // We delete this original system as likely with limited data (from
                // nmap and/or snmp) we couldn't match an existing system
                // Now we have an actual audit result with plenty of data
                // we have found a match and it's not the original
                $sql = "/* include_input_devices */ DELETE FROM system WHERE id = ?";
                $query = $CI->db->query($sql, array($audit->system->id));
                $log->system_id = $i;
                $log->message = 'System Id provided differs from System Id found for ' . $audit->system->hostname;
                discovery_log($log);
            }
            $audit->system->id = $i;
            $log->file = 'discovery_helper';
            $log->function = 'discoveries';
            $log->command_status = 'success';
            $log->severity = 7;
            $log->command = '';
            $log->command_output = '';
            $log->message = '';
            $ip = $log->ip;
            if (empty($i)) {
                // insert a new system
                $audit->system->id = $CI->m_device->insert($audit->system);
                $log->system_id = $audit->system->id;
                #$log->ip = @$audit->system->ip;
                $log->message = 'CREATE entry for ' . $audit->system->hostname . ', System ID ' . $audit->system->id;
                discovery_log($log);
                $audit->system->original_last_seen = "";
            } else {
                // update an existing system
                $log->message = 'UPDATE entry for ' . $audit->system->hostname . ', System ID ' . $audit->system->id;
                $log->system_id = $audit->system->id;
                #$log->ip = @$audit->system->ip;
                discovery_log($log);
                $CI->m_device->update($audit->system);
            }
            $log->ip = $ip;

            $sql = "/* include_input_devices */ " . "UPDATE `discovery_log` SET system_id = ? WHERE system_id IS NULL AND pid = ? AND discovery_id = ?";
            $data = array($log->system_id, $log->pid, $discovery->id);
            $query = $CI->db->query($sql, $data);
            $script_version = '';
            if (!empty($audit->system->script_version)) {
                $script_version = $audit->system->script_version;
            }
            $CI->m_audit_log->create($audit->system->id, @$CI->user->full_name, $audit->system->last_seen_by, $audit->system->audits_ip, '', '', $audit->system->last_seen, $script_version);

            foreach ($audit as $key => $value) {
                if ($key != 'system' and $key != 'audit_wmi_fail' and $key != 'dns') {
                    $parameters = new stdClass();
                    $parameters->table = $key;
                    $parameters->details = $audit->system;
                    $parameters->input = $value;
                    $parameters->log = $log;
                    $CI->m_devices_components->process_component($parameters);
                }
            }

            if (!empty($audit->audit_wmi_fail)) {
                $CI->m_audit_log->update('debug', 'audit_wmi_fail', $audit->system->id, $audit->system->last_seen);
                $CI->m_audit_log->update('wmi_fails', $json->audit_wmi_fail, $audit->system->id, $audit->system->last_seen);
            }

            // Generate any DNS entries required - only if a collector or the audit is NOT from a collector
            if (!empty($CI->config->config['servers']) or empty($audit->system->collector_uuid)) {
                $dns = $CI->m_devices_components->create_dns_entries((int)$audit->system->id);
                if (!empty($audit->dns) and count($audit->dns) > 0) {
                    foreach ($audit->dns as $item) {
                        if (!empty($item->ip) and !empty($item->name) and !empty($item->fqdn)) {
                            $dns[] = $item;
                        }
                    }
                }
                unset($item);
                if (count($dns) > 0) {
                    $parameters = new stdClass();
                    $parameters->table = 'dns';
                    $parameters->details = $audit->system;
                    $parameters->input = $dns;
                    $parameters->log = $log;
                    $CI->m_devices_components->process_component($parameters);
                }
                unset($dns);
            }

            $CI->m_audit_log->update('debug', 'finished processing', $audit->system->id, $audit->system->last_seen);
            $log->message = 'Processed audit result for ' . $audit->system->hostname . ' (System ID ' . $audit->system->id . ')';
            discovery_log($log);

            // set the ip (if not already set)
            $CI->m_audit_log->update('debug', 'check and set initial ip', $audit->system->id, $audit->system->last_seen);
            #$CI->m_devices_components->set_initial_address($audit->system->id);
            #$CI->m_audit_log->update('debug', '', $audit->system->id, $audit->system->last_seen);
            # If we are configured as a collector, forward the information to the server
            if ($CI->config->config['servers'] !== '') {
                $server = json_decode($CI->config->config['servers']);
                $log->message = 'Sending result to ' . $server->host . ' because this server is a collector.';
                discovery_log($log);
                unset($audit->system->id);
                unset($audit->system->discovery_id);
                unset($audit->system->original_last_seen_by);
                unset($audit->system->original_last_seen);
                unset($audit->system->first_seen);
                unset($audit->system->org_id);
                $audit->system->collector_uuid = $CI->config->config['uuid'];

                $device_json = json_encode($audit);
                $url = $server->host . $server->community . '/index.php/input/devices';

                $data = array('data' => $device_json);
                # NOTE - use key 'http' even if we send the request to https://...
                $options = array(
                    'http' => array(
                        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                        'method'  => 'POST',
                        'content' => http_build_query($data)
                    )
                );
                $context  = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                if ($result === false) {
                    # error
                    $log->severity = 4;
                    $log->message = 'Could not send result to ' . $server->host . $server->community . '/index.php/input/devices - please check with your server administrator.';
                    discovery_log($log);
                    $log->severity = 7;
                } else {
                    # success
                    $log->severity = 7;
                    $log->message = 'Result sent to ' . $server->host . '.';
                    discovery_log($log);
                }
            }
        } else {
            $log->message = 'No audit script result to process';
            discovery_log($log);
        }
        // set the identification with what we have
        $CI->m_device->set_identification($device->id);
        // finish
        $log->severity = 7;
        $log->command_status = 'notice';
        $log->command = '';
        $log->message = "Discovery has completed processing $device->ip (System ID $device->id).";
        discovery_log($log);
        return true;
    }
}


if (!function_exists('delete_local_file')) {
    function delete_local_file($params)
    {
        if (empty($params)) {
            $mylog = new stdClass();
            $mylog->severity = 4;
            $mylog->command_status = 'fail';
            $mylog->message = 'Function delete_local_file called without params object';
            $mylog->file = 'discovery_helper';
            $mylog->function = 'delete_local_file';
            stdlog($mylog);
            return;
        }
        $file = $params->file;
        $mylog = $params->log;
        $mylog->severity = 7;
        $mylog->file = 'discovery_helper';
        $mylog->function = 'delete_local_file';
        $mylog->command = 'unlink(\'' . $file .'\')';
        $mylog->message = 'Attempt to delete "' . $file . '" succeeded';
        $mylog->command_status = 'success';
        if (is_file($file) && @unlink($file)){
            // delete success
        } else if (is_file ($file)) {
            // unlink failed
            $perms = substr(sprintf('%o', fileperms($file)), -4);
            $mylog->severity = 4;
            $mylog->command_status = 'fail';
            $mylog->message = 'Could not delete file "' . $file . '"" , file permissions are: ' . $perms . '.';
            unset($perms);
        } else {
            // file doesn't exist
            $mylog->severity = 4;
            $mylog->command_status = 'fail';
            $mylog->message = 'File "' . $file . '" does not exist.';
        }
        discovery_log($mylog);
        unset($mylog);
    }
}
