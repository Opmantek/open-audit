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
$display = 'n';

$log = new stdClass();
$log->discovery_id = null;
$log->system_id = null;
$log->timestamp = null;
$log->severity = 7;
$log->pid = getmypid();
$log->file = 'input';
$log->function = 'discoveries';
$log->message = '';

$syslog = new stdClass();
$syslog->type = 'system';
$syslog->action = 'input::discoveries';
$syslog->severity = 6;
$syslog->summary = '';
$syslog->message = '';

// our required models
$this->load->model('m_audit_log');
$this->load->model('m_credentials');
$this->load->model('m_devices');
$this->load->model('m_device');
$this->load->model('m_devices_components');
$this->load->model('m_orgs');
$this->load->model('m_scripts');
// our required helpers
$this->load->helper('mac');
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

# So we can output back to the discovery script, and continue processing
ignore_user_abort(true);
set_time_limit(0);
ob_start();

if (empty($_POST['data'])) {
    $log->message = "No 'data' sent to input.";
    $log->severity = 5;
    stdlog($log);
    echo $log->message;
    exit();
}

// process the input
$xml_input = $_POST['data'];
try {
    $xml = new SimpleXMLElement($xml_input);
} catch (Exception $error) {
    // not a valid XML string
    $syslog->severity = 3;
    $syslog->summary = 'Invalid data';
    $syslog->message = 'Invalid XML input for discovery from '.$_SERVER['REMOTE_ADDR'];
    stdlog($syslog);
    echo $log->message;
    unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
    exit;
}
unset($xml_input);

# So we can output back to the discovery script, and continue processing
echo "";
header('Connection: close');
header('Content-Length: '.ob_get_length());
ob_end_flush();
ob_flush();
flush();

foreach ($xml->children() as $input) {
    $individual_ip_start = microtime(true);
    $input = (object) $input;
    if (!empty($input->discovery_id)) {
        $syslog->severity = 7;
        $syslog->summary = 'Discovery id ' . $input->discovery_id . ' provided';
        $syslog->message = 'When processing discover_subnet, discovery_id ' . $input->discovery_id . ' was provided in the input.';
        discovery_log($syslog);
        $log->discovery_id = intval($input->discovery_id);
        $sql = "/* input::discoveries */ " . "SELECT * FROM `discoveries` WHERE id = ?";
        $data = array($log->discovery_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (!empty($result[0])) {
            $discovery = $result[0];
            $discovery->other = json_decode($discovery->other);
            $syslog->summary = 'Discovery ' . $discovery->name . ' staring to process.';
            $syslog->message = 'The discovery_id was used to successfully retrieve information for the discovery entry named ' . $discovery->name;
            stdlog($syslog);
        } else {
            $discovery = new stdClass();
            $discovery->id = '';
            $discovery->discard = '';
            $syslog->summary = 'Invalid discovery id provided to input::discovery';
            $syslog->message = 'The discovery_id was invalid and could not be used to successfully retrieve information';
            stdlog($syslog);
        }
    } else {
        $syslog->severity = 4;
        $syslog->summary = 'No discovery id provided';
        $syslog->message = 'When processing discover_subnet, no discovery_id was provided in the input.';
        stdlog($syslog);
        $discovery = new stdClass();
        $discovery->id = '';
        $discovery->discard = '';
        if (!empty($this->config->default_network_address)) {
            $discovery->network_address = 'http://' . $this->config->default_network_address . '/open-audit/';
        } else {
            $discovery->network_address = 'http://localhost/open-audit/';
        }
    }
    $log->system_id = null;
    $log->ip = $input->ip;

    // The end submit from the script that indicates there are no more items to be submitted
    if (isset($input->complete) and $input->complete == 'y') {
        $sql = "/* input::discoveries */ " . "UPDATE `discoveries` SET `complete` = 'y' WHERE id = ?";
        $data = array($log->discovery_id);
        $query = $this->db->query($sql, $data);
        $syslog->severity = 7;
        $syslog->summary = 'Set discovery entry status to complete';
        $syslog->message = $this->db->last_query();
        stdlog($syslog);
        discovery_log($syslog);
        if ($discovery->discard == 'y') {
            $sql = "/* input::discoveries */ " . "DELETE FROM `discoveries` WHERE id = ?";
            $data = array($log->discovery_id);
            $query = $this->db->query($sql, $data);
            $syslog->severity = 7;
            $syslog->summary = 'Deleteing discovery entry';
            $syslog->message = $this->db->last_query();
            stdlog($syslog);
        }
        if (!empty($discovery->other->single) and $discovery->other->single == 'y' and $discovery->discard == 'y') {
            sleep(10);
            $sql = "/* input::discoveries */ " . "DELETE FROM `credentials` WHERE description = 'Discovery " . $discovery->other->subnet . "'";
            $data = array();
            $query = $this->db->query($sql, $data);
            $syslog->severity = 7;
            $syslog->summary = 'Deleteing credentials entries';
            $syslog->message = $this->db->last_query();
            stdlog($syslog);
        }
        exit();
    }
    // check the IP isn't in the excluded list
    if (stripos(' ' . $this->config->config['discovery_ip_exclude'] . ' ', ' ' . $input->ip . ' ') !== false) {
        # Our ip address matched an ip in the discovery_ip_exclude list - skip it
        $log->message = $input->ip . ' is in the list of excluded ip addresses - skipping.';
        discovery_log($log);
        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        continue;
    }
    // check we have an actual valid IP
    if (filter_var($input->ip, FILTER_VALIDATE_IP) === false) {
        $log->message = "Invalid IP address submitted (" . $input->ip . "), skipping.";
        discovery_log($log);
        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        continue;
    }

    if (!empty($input->system_id)) {
        $log->system_id = intval($input->system_id);
    }

    if (empty($discovery->device_count)) {
        $discovery->device_count = 0;
    }

    if (empty($discovery->limit)) {
        $discovery->limit = 0;
    }

    if ($discovery->device_count >= $discovery->limit and $discovery->limit != 0) {
        $log->message = "License count exceeded. Not processing device " . $input->ip;
        discovery_log($log);
        exit();
    }

    $log->message = 'Received data for ' . $input->ip . ', now starting to process';
    $individual_log_id_start = discovery_log($log);
    unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);

    if (!empty($discovery->id)) {
        $sql = "/* input::discoveries */ " . "UPDATE discoveries SET device_count = device_count + 1 WHERE id = ?";
        $data = array($discovery->id);
        $query = $this->db->query($sql, $data);
    }

    $device = new stdClass();
    $device->id = '';
    $device->name = '';
    $device->type = '';
    $device->os_family = '';
    $device->os_group = '';
    $device->sysDescr = '';
    $device->last_seen = $this->config->config['timestamp'];
    $device->ip = (string)$input->ip;
    $device->audits_ip = (string)$input->ip;
    $device->last_seen_by = 'nmap';
    $device->discovery_id = $discovery->id;
    $device->mac_address = (string)$input->mac_address;

    if ($this->config->item('discovery_use_dns') == 'y') {
        $device = dns_validate($device);
        if (!empty($device->hostname)) {
            $log->message = 'IP ' . $device->ip . ' resolved to hostname ' . $device->hostname;
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        }
        if (!empty($device->domain)) {
            $log->message = 'IP ' . $device->ip . ' resolved to domain ' . $device->domain;
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        }
        if (!empty($device->fqdn)) {
            $log->message = 'IP ' . $device->ip . ' resolved to fqdn ' . $device->fqdn;
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        }
    }

    $device->id = $this->m_device->match($device);
    if (!empty($device->id)) {
        $log->system_id = $device->id;
        $log->message = "Device with ID " . $device->id . " found on initial Nmap result.";
        discovery_log($log);
        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);

        // remove any old logs for this device
        $sql = "/* input::discoveries */ " . "DELETE FROM discovery_log WHERE system_id = " . $device->id . " and pid != " . $log->pid;
        $log->message = 'Delete the previous log entries for this device';
        $log->command = $sql;
        $command_log_id = discovery_log($log);
        $command_start = microtime(true);
        $query = $this->db->query($sql);
        $command_end = microtime(true);
        $log->command = $this->db->last_query();
        $log->command_time_to_execute = $command_end - $command_start;
        $log->id = $command_log_id;
        discovery_log($log);
        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        unset($log->id, $command_log_id);
        
        // update the previous log entries with our new system_id
        $sql = "/* input::discoveries */ " . "UPDATE discovery_log SET system_id = " . intval($log->system_id) . " WHERE pid = " . intval($log->pid) . " and ip = '" . $device->ip . "'";
        $log->message = 'Update the current log entries with our new device';
        $log->command = $sql;
        $command_log_id = discovery_log($log);
        $command_start = microtime(true);
        $query = $this->db->query($sql);
        $command_end = microtime(true);
        $log->command = $this->db->last_query();
        $log->command_time_to_execute = $command_end - $command_start;
        $log->id = $command_log_id;
        discovery_log($log);
        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        unset($log->id, $command_log_id);

        // Device specific credentials
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
    if (!empty($discovery->org_id)) {
        $this->user->orgs = $this->m_orgs->get_children($discovery->org_id);
        if (count($this->user->orgs) > 0) {
            $this->user->org_list = $discovery->org_id . ',' . implode(',', $this->user->orgs);
        } else {
            $this->user->org_list = $discovery->org_id;
        }
    } else {
        $this->user->org_list = '';
    }

    // Stored credential sets
    $temp = $this->m_credentials->collection();

    if (count($temp) > 0) {
        $credentials = array_merge($credentials, $temp);
    } else {
        $log->message = "No credentials returned from database";
        discovery_log($log);
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
    if (!empty($device->id)) {
        $log->message .= ' (System ID ' . $device->id . ')';
    }
    discovery_log($log);

    $log->message = 'SSH Status is '.$input->ssh_status.' on '.$device->ip;
    if (!empty($device->id)) {
        $log->message .= ' (System ID ' . $device->id . ')';
    }
    discovery_log($log);

    // On OSX we cannot run Nmap and get a UDP port result for 161 as 'You requested a scan type which requires root privileges.'
    // So just set the snmp_status to true and attempt to snmp_audit the target device
    // As at 2016-12-16 this no longer appears to be an issue. Commenting out below code.
    // if (php_uname('s') == 'Darwin') {
    //     $input->snmp_status = 'true';
    //     $input->nmap_ports .= ',161/udp/snmp';
    // }

    $log->message = 'SNMP Status is '.$input->snmp_status.' on '.$device->ip;
    if (!empty($device->id)) {
        $log->message .= ' (System ID ' . $device->id . ')';
    }
    discovery_log($log);

    # test for working SNMP credentials
    if (!extension_loaded('snmp') and $input->snmp_status == 'true') {
        $log->message = 'PHP extension not loaded, skipping SNMP data retrieval for ' . $device->ip;
        if (!empty($device->id)) {
            $log->message .= ' (System ID ' . $device->id . ')';
        }
        discovery_log($log);
    }

    if (extension_loaded('snmp') and $input->snmp_status == 'true') {
        $log->message = 'Testing SNMP credentials for '.$device->ip;
        if (!empty($device->id)) {
            $log->message .= ' (System ID ' . $device->id . ')';
        }
        discovery_log($log);
        $credentials_snmp = snmp_credentials($device->ip, $credentials, $log);
    } else {
        $credentials_snmp = false;
    }
    # run SNMP audit commands
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
    $log->file = 'include_input_discoveries';
    $log->function = 'discoveries';

    if ($device->type != 'computer' and $device->type != '' and $device->type != 'unknown' and $device->os_family != 'DD-WRT' and stripos($device->sysDescr, 'dd-wrt') === false and $device->manufacturer != 'Ubiquiti Networks Inc.') {
        $log->message = 'Not a computer and not a DD-WRT device, setting SSH status to false for ' . $device->ip;
        if (!empty($device->id)) {
            $log->message .= ' (System ID ' . $device->id . ')';
        }
        discovery_log($log);
        $input->ssh_status = 'false';
    }

    # run SSH audit commands
    if ($input->ssh_status == 'true') {
        $ssh_details = ssh_audit($device->ip, $credentials, $log);
        if (!empty($ssh_details)) {

            if (!empty($ssh_details->credentials)) {
                $credentials_ssh = $ssh_details->credentials;
            }
            unset($ssh_details->credentials);
            $device->last_seen_by = 'ssh';
            $device->audits_ip = '127.0.0.1';
            foreach ($ssh_details as $key => $value) {
                if (!empty($value)) {
                    $device->$key = $value;
                }
            }
        }
    }
    if ($ssh_details->manufacturer = 'Ubiquiti Networks Inc.' and empty($device->type)) {
        $device->type = 'router';
    }

    $log->file = 'include_input_discoveries';
    $log->function = 'discoveries';

    # test for working Windows credentials
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
    $log->file = 'include_input_discoveries';
    $log->function = 'discoveries';

    # in the case where port 5060 is detected and we have no other information, assign type 'voip phone'
    if (empty($device->type) and empty($device->snmp_oid) and empty($device->uuid) and stripos($input->nmap_ports, '5060/') !== false) {
        $device->type = 'voip phone';
    }

    # Port 62078 is used by IOS for iTunes wifi sync
    if (stripos($input->nmap_ports, '62078/tcp/iphone-sync') !== false) {
        # thie could be an iPad (tablet), iPod (media device) or iPhone (smart phone).
        $log->message = 'Detected port TCP 62078 open. Assuming an Apple IOS device';
        discovery_log($log);
        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        $device->type = 'iphone';
        if (stripos($device->hostname, 'iphone') !== false) {
            $device->type = 'iphone';
            $device->model = 'Apple iPhone';
        }
        if (stripos($device->hostname, 'ipad') !== false) {
            $device->type = 'ipad';
            $device->model = 'Apple iPad';
        }
        if (stripos($device->hostname, 'ipod') !== false) {
            $device->type = 'ipod';
            $device->model = 'Apple iPod';
        }
        $device->os_group = 'Apple IOS';
        $device->os_family = 'Apple IOS';
        $device->os_name = 'Apple IOS';
    }

    # Android devices typically jave a hostname of android-***
    if (stripos($device->hostname, 'android') !== false) {
        # Could be a table or smart phone. We have no way of knowing so simply guessing it's a smart phone
        $device->type = 'android';
        $device->os_group = 'Android';
        $device->os_family = 'Android';
        $device->os_name = 'Android';
    }

    if (empty($device->manufacturer) and !empty($input->mac_address)) {
        $device->manufacturer = get_manufacturer_from_mac($input->mac_address);
            $log->message = 'MAC ' . $input->mac_address . ' (input) matched to manufacturer ' . $device->manufacturer;
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
    }

    if (empty($device->manufacturer) and !empty($device->mac_address)) {
        $device->manufacturer = get_manufacturer_from_mac($device->mac_address);
            $log->message = 'MAC ' . $device->mac_address . ' (device) matched to manufacturer ' . $device->manufacturer;
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
    }

    if (empty($device->model) or stripos($device->manufacturer, 'Ubiquiti') !== false) {
        $device = $this->m_devices->model_guess($device);
        if (!empty($device->model)) {
            $log->message = 'Best guess at model to be ' . $device->model;
            discovery_log($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        }
    }

    // $log->command_output = json_encode($device->system);
    // $log->message = 'System Data';
    // discovery_log($log);

    $device->id = $this->m_device->match($device);

    if (empty($discovery->org_id)) {
        $discovery->org_id = 1;
    }

    $device->org_id = $discovery->org_id;
    if (!empty($discovery->devices_assigned_to_org)) {
        $device->org_id = $discovery->devices_assigned_to_org;
    }
    if (!empty($discovery->devices_assigned_to_location)) {
        $device->location_id = $discovery->devices_assigned_to_location;
    }

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
        $log->system_id = $device->id;
        $action = 'update';

        // remove any old logs for this device
        $sql = "/* input::discoveries */ " . "DELETE FROM discovery_log WHERE system_id = " . $device->id . " and pid != " . $log->pid;
        $log->message = 'Delete the previous log entries for this system_id';
        $log->command = $sql;
        $command_log_id = discovery_log($log);
        $command_start = microtime(true);
        $query = $this->db->query($sql);
        $command_end = microtime(true);
        $log->command = $this->db->last_query();
        $log->command_time_to_execute = $command_end - $command_start;
        $log->id = $command_log_id;
        discovery_log($log);
        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        unset($log->id, $command_log_id);
        
        // update the previous log entries with our new system_id
        $sql = "/* input::discoveries */ " . "UPDATE discovery_log SET system_id = " . intval($log->system_id) . " WHERE pid = " . intval($log->pid) . " and ip = '" . $device->ip . "'";
        $log->message = 'Update the previous log entries with the system_id';
        $log->command = $sql;
        $command_log_id = discovery_log($log);
        $command_start = microtime(true);
        $query = $this->db->query($sql);
        $command_end = microtime(true);
        $log->command = $this->db->last_query();
        $log->command_time_to_execute = $command_end - $command_start;
        $log->id = $command_log_id;
        discovery_log($log);
        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        unset($log->id, $command_log_id);

        $log->severity = 7;
        $log->message = 'Start of ' . strtoupper($device->last_seen_by) . ' update for ' . $device->ip . ' (System ID ' . $device->id . ')';
        discovery_log($log);
        $device->original_last_seen = $this->m_devices_components->read($device->id, 'y', 'system', '', 'last_seen');
        $device->original_last_seen_by = $this->m_devices_components->read($device->id, 'y', 'system', '', 'last_seen_by');
        $this->m_device->update($device);
        $log->file = 'include_input_discoveries';
        $log->function = 'discoveries';
        $log->message = 'End of ' . strtoupper($device->last_seen_by) . ' update for ' . $device->ip . ' (System ID ' . $device->id . ')';
        discovery_log($log);
    } else {
        // we have a new system - INSERT
        $action = 'insert';
        $log->severity = 7;
        $log->message = 'Start of ' . strtoupper($device->last_seen_by) . ' insert for ' . $device->ip;
        discovery_log($log);
        $device->id = $this->m_device->insert($device);
        $log->system_id = $device->id;
        $log->file = 'include_input_discoveries';
        $log->function = 'discoveries';
        $log->message = 'End of ' . strtoupper($device->last_seen_by) . ' insert for ' . $device->ip . ' (System ID ' . $device->id . ')';
        discovery_log($log);

        // update the previous log entries with our new system_id
        $sql = "/* input::discoveries */ " . "UPDATE discovery_log SET system_id = " . intval($log->system_id) . " WHERE pid = " . intval($log->pid) . " and ip = '" . $device->ip . "'";
        $log->message = 'Update the previous log entries with our new system_id';
        $log->command = $sql;
        $command_log_id = discovery_log($log);
        $command_start = microtime(true);
        $query = $this->db->query($sql);
        $command_end = microtime(true);
        $log->command = $this->db->last_query();
        $log->command_time_to_execute = $command_end - $command_start;
        $log->id = $command_log_id;
        discovery_log($log);
        unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
        unset($log->id, $command_log_id);
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

    if (!empty($device->ip)) {
        $log->ip = $device->ip;
    }
    $log->discovery_id = $device->discovery_id;
    $log->file = 'include_input_discoveries';
    $log->function = 'discoveries';

    // update any network interfaces retrieved by SNMP
    if (isset($network_interfaces) and is_array($network_interfaces) and count($network_interfaces) > 0) {
        $log->message = 'Processing found network interfaces for ' . $device->ip . ' (System ID ' . $device->id . ')';
        discovery_log($log);
        $found = new stdClass();
        $found->item = array();
        $found->item = $network_interfaces;
        $this->m_devices_components->process_component('network', $device, $found);
        unset($found);
    }

    // update any ip addresses retrieved by SNMP
    if (!empty($ip->item)) {
        $log->message = 'Processing found ip addresses for ' . $device->ip . ' (System ID ' . $device->id . ')';
        discovery_log($log);
        $log->ip = $device->ip;
        $log->discovery_id = $device->discovery_id;
        $log->file = 'include_input_discoveries';
        $log->function = 'discoveries';
        $log->message = 'Processing found ip addresses for ' . $device->ip . ' (System ID ' . $device->id . ')';
        discovery_log($log);
        $this->m_devices_components->process_component('ip', $device, $ip);
    }

    // create or update the entry in the ip table from non-SNMP data
    //     so our 'networks' endpoint and functions can find the device
    if (empty($ip->item)) {
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
        $this->m_devices_components->nmap_ip($device, $item);
        unset($item);
    }

    // finish off with updating any network IPs that don't have a matching interface
    $this->m_devices_components->update_missing_interfaces($device->id);

    // insert any modules
    if (isset($modules) and count($modules) > 0) {
        $log->ip = $device->ip;
        $log->discovery_id = $device->discovery_id;
        $log->file = 'include_input_discoveries';
        $log->function = 'discoveries';
        $log->message = 'Processing found modules for ' . $device->ip . ' (System ID ' . $device->id . ')';
        discovery_log($log);
        $found = new stdClass();
        $found->item = array();
        $found->item = $modules;
        $this->m_devices_components->process_component('module', $device, $found);
        unset($found);
    }

    // insert any found virtual machines
    if (isset($guests) and is_array($guests) and count($guests) > 0) {
        $log->ip = $device->ip;
        $log->discovery_id = $device->discovery_id;
        $log->file = 'include_input_discoveries';
        $log->function = 'discoveries';
        $log->message = 'Processing found VMs for ' . $device->ip . ' (System ID ' . $device->id . ')';
        discovery_log($log);
        $found = new stdClass();
        $found->item = array();
        $found->item = $guests;
        $this->m_devices_components->process_component('vm', $device, $found);
        unset($found);
    }

    // $device->id is now set
    if ($display == 'y') {
        echo '<pre>DEBUG - System ID <a href="' . base_url() . 'index.php/devices/' . $device->id . '">' . $device->id . "</a>\n";
    }

    // process and store the Nmap data
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
        $log->ip = $device->ip;
        $log->discovery_id = $device->discovery_id;
        $log->file = 'include_input_discoveries';
        $log->function = 'discoveries';
        $log->message = 'Processing Nmap ports for ' . $device->ip . ' (System ID ' . $device->id . ')';
        discovery_log($log);
        $found = new stdClass();
        $found->item = array();
        $found->item = $nmap_result;
        $this->m_devices_components->process_component('nmap', $device, $found);
    }

    // insert a blank to indicate we're finished this part of the discovery
    // if required, the audit scripts will insert their own audit logs
    $this->m_audit_log->update('debug', '', $device->id, $device->last_seen);

    $log->file = 'include_input_discoveries';
    $log->function = 'discoveries';
    $log->severity = 5;
    $individual_ip_end = microtime(true);
    $log->command_time_to_execute = $individual_ip_end - $individual_ip_start;
    // if (!empty($device->type)) {
    //     $log->message = "Discovery found a device of type '$device->type' at IP address $device->ip.";
    // } else {
    //     $log->message = "Discovery found an unknown device at IP address $device->ip.";
    // }
    if (!empty($device->type)) {
        $log->message = "At IP $device->ip, discovery found a device of type '$device->type'.";
    } else {
        $log->message = "At IP $device->ip, discovery found an unknown device.";
    }
    discovery_log($log);
    $log->severity = 7;

    # If we are configured as a collector, forward the information to the server
    if ($this->config->config['servers'] !== '') {
        $server = json_decode($this->config->config['servers']);
        $log->message = 'Sending result to ' . $server->host . ' because this server is a collector.';
        discovery_log($log);

        $device_json = new stdClass();
        $device_json->system = new stdClass();
        foreach ($device as $key => $value) {
            if ($key != 'id' and !empty($value)) {
                $device_json->system->{$key} = $value;
            }
        }
        $device_json->system->collector_uuid = $this->config->config['uuid'];
        if (count($nmap_result) > 0) {
            $device_json->nmap = new stdClass();
            $device_json->nmap->item = array();
            foreach ($nmap_result as $item) {
                $device_json->nmap->item[] = $item;
            }
        }
        if (isset($guests) and count($guests) > 0) {
            $device_json->vm = new stdClass();
            $device_json->vm->item = array();
            foreach ($guests as $item) {
                $device_json->vm->item[] = $item;
            }
        }
        if (isset($modules) and count($modules) > 0) {
            $device_json->module = new stdClass();
            $device_json->module->item = array();
            foreach ($modules as $item) {
                $device_json->module->item[] = $item;
            }
        }
        if (isset($ip) and count($ip) > 0) {
            $device_json->ip = new stdClass();
            $device_json->ip->item = array();
            foreach ($ip->item as $item) {
                $device_json->ip->item[] = $item;
            }
        }
        if (isset($network_interfaces) and is_array($network_interfaces) and count($network_interfaces) > 0) {
            $device_json->network = new stdClass();
            $device_json->network->item = array();
            foreach ($network_interfaces as $item) {
                $device_json->network->item[] = $item;
            }
        }
        unset($device_json->system->id);
        unset($device_json->system->discovery_id);
        unset($device_json->system->org_id);
        unset($device_json->system->first_seen);
        $device_json = json_encode($device_json);
        $url = $server->host . $server->community . '/index.php/input/devices';
        $data = array('data' => $device_json);
        # use key 'http' even if we send the request to https://...
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
    

    # Audit via Windows
    if ($input->wmi_status == "true" and $credentials_windows) {
        $log->file = 'include_input_discoveries';
        $log->function = 'discoveries';
        $log->command_time_to_execute = '';
        $log->message = 'Starting windows audit for ' . $device->ip . ' (System ID ' . $device->id . ')';
        discovery_log($log);

        $share = '\\admin$';
        $destination = 'audit_windows.vbs';
        if ($display == 'y') {
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
            $command = "cscript c:\\windows\\audit_windows.vbs submit_online=y create_file=n strcomputer=. url=".$discovery->network_address."index.php/input/devices debugging=" . $debugging . " system_id=".$device->id." last_seen_by=audit_wmi discovery_id=".$discovery->id;
            if (copy_to_windows($device->ip, $credentials_windows, $share, $source, $destination, $log)) {
                # delete our no longer required local copy of the script
                $log->file = 'include_input_discoveries';
                $log->function = 'discoveries';
                $log->command = '';
                $log->message = '';
                $log->severity = 7;
                if ($source_name != 'audit_windows.vbs') {
                    $log->message = 'Attempt to delete temp audit script succeeded';
                    $log->command = 'unlink(' . $this->config->config['base_path'] . '/other/' . $source_name .')';
                    try {
                        unlink($this->config->config['base_path'] . '/other/' . $source_name);
                    } catch (Exception $e) {
                        $log->severity = 4;
                        $log->status = 'fail';
                        $log->message = 'Could not delete temp audit script';
                    }
                    discovery_log($log);
                    $log->severity = 7;
                }
                if (execute_windows($device->ip, $credentials_windows, $command, $log)) {
                    # All complete!
                } else {
                    # run audit script failed
                    $log->severity = 4;
                    $log->status = 'fail';
                    $log->message = 'Could not execute audit script on ' . $device->ip;
                    discovery_log($log);
                    $log->severity = 7;
                }
            } else {
                # copy audit script to Windows failed
                $log->severity = 4;
                $log->status = 'fail';
                $log->message = 'Could not copy audit script to ' . $device->ip;
                discovery_log($log);
                $log->severity = 7;
            }
        }

        // Windows Open-AudIT server auditing a Windows target
        if (php_uname('s') == 'Windows NT') {
            if (exec('whoami') == 'nt authority\system') {
                # We're running on the LocalSystem account.
                # We cannot copy the audit script to the target and then run it,
                # We _must_ run the script locally and use $device->ip as the script target
                # We will loose the ability to retrieve certain items like files, netstat, tasks, etc
                $log->duration = '';
                $log->file = 'include_input_discoveries';
                $log->function = 'discoveries';
                $log->message = 'Windows audit is running as LocalSystem, not ideal for ' . $device->ip . ' (System ID ' . $device->id . ')';
                $log->severity = 4;
                discovery_log($log);
                $log->severity = 7;

                # cscript cannot parse an arguement containing a "
                if (strpos($credentials_windows->credentials->password, '"') !== false or 
                    strpos($credentials_windows->credentials->username, '"') !== false) {
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

                    $command_string = "%comspec% /c start /b cscript //nologo " . "$filepath\\" . $source_name . " strcomputer=".$device->ip." submit_online=y create_file=n struser=".$domain.$username." strpass=".$credentials_windows->credentials->password." url=".$discovery->network_address."index.php/input/devices debugging=3 system_id=".$device->id." last_seen_by=audit_wmi discovery_id=".$discovery->id;

                    $log->command = str_replace($credentials_windows->credentials->password, '******', $command_string);
                    $log->message = 'Attempting to run audit command (locally).';
                    discovery_log($log);

                    $command_start = microtime(true);
                    exec($command_string, $output, $return_var);
                    $command_end = microtime(true);

                    if ($display == 'y') {
                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                        echo 'DEBUG - Return Value: '.$return_var."\n";
                        echo "DEBUG - Command Output:\n";
                        print_r($output);
                    }
                    $log->command_time_to_execute = $command_end - $command_start;
                    $log->command = '';
                    $log->message = 'Successful attempt to run audit_windows.vbs for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    $log->status = 'success';
                    if ($return_var != '0') {
                        $log->status = 'fail';
                        $log->message = 'Failed attempt to run audit_windows.vbs for ' . $device->ip . ' (System ID ' . $device->id . ')';
                        $log->severity = 4;
                    }
                    discovery_log($log);
                    $log->command = '';
                    $log->severity = 7;
                    $output = null;
                    $return_var = null;
                    $command_string = null;

                    if ($source_name != 'audit_windows.vbs') {
                        $log->message = 'Attempt to delete audit script ' . $source_name . ' succeeded';
                        $command_start = microtime(true);
                        try {
                            unlink($this->config->config['base_path'] . '\\other\\' . $source_name);
                        } catch (Exception $e) {
                            $log->severity = 4;
                            $log->message = 'Attempt to delete audit script ' . $source_name . ' failed';
                        }
                        $command_end = microtime(true);
                        $log->command_time_to_execute = $command_end - $command_start;
                        $log->command = 'unlink(\'' . $this->config->config['base_path'] . '\\other\\' . $source_name . '\');';
                        discovery_log($log);
                        $log->severity = 7;
                        $log->command = '';
                    }
                }
            } else {
                # We are running as something other than the LocalSystem account.
                # Therefore we _should_ be able to copy the audit script to the target and start it there
                # and therefore retrieve ALL information
                $log->duration = '';
                $log->file = 'include_input_discoveries';
                $log->function = 'discoveries';
                $log->severity = 7;
                $log->message = 'Windows audit is not running as LocalSystem (good), for ' . $device->ip . ' (System ID ' . $device->id . ')';
                discovery_log($log);
                $source = $this->config->config['base_path'] . '\\other\\' . $source_name;
                rename($source, 'c:\\windows\\audit_windows_' . $ts . '.vbs');
                $source = 'audit_windows_' . $ts . '.vbs';
                $command = "cscript \\\\" . $device->ip . "\\admin\$\\audit_windows_" . $ts . ".vbs submit_online=y create_file=n strcomputer=. url=".$discovery->network_address."index.php/input/devices debugging=" . $debugging . " system_id=".$device->id . " self_delete=y last_seen_by=audit_wmi discovery_id=".$discovery->id;

                if (copy_to_windows($device->ip, $credentials_windows, $share, $source, $destination, $log)) {
                        $log->message = 'Copy audit_windows.vbs successful for ' . $device->ip . ' (System ID ' . $device->id . ')';
                        $log->command = '';
                        $log->file = 'include_input_discoveries';
                        discovery_log($log);
                    if (execute_windows($device->ip, $credentials_windows, $command, $log)) {
                        # All complete!
                        $log->message = 'Run audit_windows.vbs successful for ' . $device->ip . ' (System ID ' . $device->id . ')';
                        $log->file = 'include_input_discoveries';

                        $log->status = 'success';
                        discovery_log($log);
                    } else {
                        # run audit script failed
                        $log->message = 'Run audit_windows.vbs failed for ' . $device->ip . ' (System ID ' . $device->id . ')';
                        $log->severity = 4;
                        $log->status = 'fail';
                        $log->file = 'include_input_discoveries';
                        discovery_log($log);
                        $log->severity = 7;
                    }
                } else {
                    # copy audit script to Windows failed
                    $log->message = 'Copy audit_windows.vbs failed for ' . $device->ip . ' (System ID ' . $device->id . ')';
                    $log->severity = 4;
                    $log->status = 'fail';
                    $log->file = 'include_input_discoveries';
                    discovery_log($log);
                    $log->severity = 7;
                }
                if ($source_name != 'audit_windows.vbs') {
                    $log->message = 'Attempt to delete audit script c:\\windows\\audit_windows_' . $ts . '.vbs succeeded';
                    try {
                        unlink('c:\\windows\\audit_windows_' . $ts . '.vbs');
                    } catch (Exception $e) {
                        $log->severity = 4;
                        $log->status = 'fail';
                        $log->message = 'Attempt to delete audit script c:\\windows\\audit_windows_' . $ts . '.vbs failed';
                    }
                    $log->file = 'include_input_discoveries';
                    discovery_log($log);
                    $log->severity = 7;
                }
            }
        }
    }

    # Audit via SSH
    if ($input->ssh_status == "true" and $device->os_family != 'DD-WRT' and !empty($credentials_ssh)) {
        $log->message = 'Starting SSH audit for ' . $device->ip . ' (System ID ' . $device->id . ')';
        $log->file = 'include_input_discoveries';
        discovery_log($log);
        // switch (strtolower($remote_os)) {
        switch (strtolower($device->os_group)) {
            case 'aix':
                $audit_script = 'audit_aix.sh';
                break;
            
            case 'vmkernel':
            case 'vmware':
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
            
            case 'sunos':
                $audit_script = 'audit_solaris.sh';
                break;
            
            default:
                $audit_script = '';
                break;
        }

        $destination = $audit_script;
        if ($display == 'y') {
            $debugging = 3;
        } else {
            $debugging = 0;
        }

        // TODO - org_id?
        $sql = "/* discovery::process_subnet */ " . "SELECT * FROM `scripts` WHERE `name` = '$audit_script' AND `based_on` = '$audit_script' ORDER BY `id` LIMIT 1";
        $query = $this->db->query($sql);
        $result = $query->result();
        #$log->command = $sql;
        #$log->message = "Retrieve appropriate script";
        #discovery_log($log);
        unset($log->command, $log->message);
        if (!empty($result[0])) {
            $log->file = 'include_input_discoveries';
            $log->message = 'Script details retrieved.';
            $log->command = $sql;
            $log->status = 'success';
            discovery_log($log);
            $script_details = $result[0];
            # Just ensure we delete any audit scripts that might exist.
            # Shouldn't be required because we're creating based on the timestamp
            # Then open the file for writing
            $ts = date('y_m_d_H_i_s');
            $log->message = 'Creating temporary script';
            if (php_uname('s') == 'Windows NT') {
                $source_name = 'scripts\\' . str_replace('.sh', '_'.$ts.'.sh', $audit_script);
                $unlink = $this->config->config['base_path'] . '\\other\\' . $source_name;
                @unlink($unlink);
                try {
                    $fp = fopen($this->config->config['base_path'] . '\\other\\' . $source_name, 'w');
                    $log->message = 'Created temporary script (windows)';
                    $log->command = '';
                    $log->status = 'success';
                    discovery_log($log);
                } catch (Exception $e) {
                    $log->message = 'Could not create temporary script (windows)';
                    $log->command = $e;
                    $log->status = 'fail';
                    discovery_log($log);
                    unset($log->command, $log->message, $log->status);
                }
                $log->command = $this->config->config['base_path'] . '\\other\\' . $source_name;
            } else {
                $source_name = 'scripts/' . str_replace('.sh', '_'.$ts.'.sh', $audit_script);
                $unlink = $this->config->config['base_path'] . '/other/' . $source_name;
                @unlink($unlink);
                $log->message = 'Created temporary script';
                $log->command = $this->config->config['base_path'] . '/other/' . $source_name;
                $log->status = 'success';
                try {
                    $fp = fopen($this->config->config['base_path'] . '/other/' . $source_name, 'w');
                } catch (Exception $e) {
                    $log->message = 'Could not create temporary script (unix)';
                    $log->command = $e;
                    $log->status = 'fail';
                }
                discovery_log($log);
                unset($log->command, $log->message, $log->status);
            }
            $script = $this->m_scripts->download($script_details->id);
            fwrite($fp, $script);
            fclose($fp);
        } else {
            $unlink = '';
            $source_name = $audit_script;
            $log->message = 'Could not retrieve script from database for ' . $device->os_group;
            $log->command = $sql;
            $log->status = 'fail';
            discovery_log($log);
            unset($log->command, $log->message, $log->status);
            break;
        }

        unset($temp);
        #if ($audit_script != '') {
        # TODO - Cannot copy audit_esxi.sh - more work required to fix
        if ($audit_script != 'audit_esxi.sh' and $audit_script != '') {
            # copy the audit script to the target ip
            $log->message = 'Copying audit script to target.';
            $log->status = '';
            discovery_log($log);

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
                $log->message = 'Copied audit script to target.';
                $log->status = 'fail';
                discovery_log($log);
                $command = 'chmod ' . $this->config->item('discovery_linux_script_permissions') . ' ' . $destination;
                $temp = ssh_command($device->ip, $credentials_ssh, $command, $log);
            } else {
                $log->message = 'Could not copy audit script to target.';
                $log->status = 'fail';
                discovery_log($log);
            }
        }

        $log->file = 'include_input_discoveries';
        $log->function = 'discoveries';
        $log->status = 'success';
        $log->severity = 7;

        # audit anything that's not ESX
        if ($audit_script != 'audit_esxi.sh' and $audit_script != '') {
            $command = $this->config->item('discovery_linux_script_directory').$audit_script.' submit_online=y create_file=n url='.$discovery->network_address.'index.php/input/devices debugging='.$debugging.' system_id='.$device->id.' display=' . $display . ' last_seen_by=audit_ssh discovery_id='.$discovery->id;
            if (strtolower($device->os_group) == 'linux') {
                $test = @$this->config->item('discovery_linux_use_sudo');
                if (!empty($test) and $this->config->item('discovery_linux_use_sudo') === 'y') {
                    $log->message = 'Running Linux audit using sudo, as per config.';
                    discovery_log($log);
                    $result = ssh_command($device->ip, $credentials_ssh, $command, $log, 'y');
                } else {
                    $log->message = 'Running Linux audit without sudo, as per config.';
                    discovery_log($log);
                    $result = ssh_command($device->ip, $credentials_ssh, $command, $log, 'n');
                }
            } else if (strtolower($device->os_group) == 'sunos') {
                $test = @$this->config->item('discovery_sunos_use_sudo');
                if (!empty($test) and $this->config->item('discovery_sunos_use_sudo') === 'y') {
                    $log->message = 'Running SunOS audit using sudo, as per config.';
                    discovery_log($log);
                    $result = ssh_command($device->ip, $credentials_ssh, $command, $log, 'y');
                } else {
                    $log->message = 'Running SunOS audit without sudo, as per config.';
                    discovery_log($log);
                    $result = ssh_command($device->ip, $credentials_ssh, $command, $log, 'n');
                }
            } else {
                $result = ssh_command($device->ip, $credentials_ssh, $command, $log, 'y');
                if (!$result) {
                    $log->severity = 5;
                    $log->message = 'Running audit using sudo failed. Attempting to run without sudo.';
                    discovery_log($log);
                    $result = ssh_command($device->ip, $credentials_ssh, $command, $log, 'n');
                    if (!$result) {
                        $log->severity = 3;
                        $log->message = 'Running audit without sudo failed.';
                        discovery_log($log);
                    }
                } else {
                    $log->message = 'Running audit using sudo succeeded.';
                    discovery_log($log);
                }
            }
            $log->severity = 7;
        }
        # audit ESX
        # TODO - Cannot copy audit_esxi.sh - more work required to fix
        if ($audit_script == 'audit_esxi.sh' and 1 == 2) {
            $command = $this->config->item('discovery_linux_script_directory').$audit_script.' submit_online=y last_seen_by=audit_ssh create_file=n debugging=0 echo_output=y system_id='.$device->id.'  discovery_id='.$discovery->id.' 2>/dev/null';
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
                        $log->message = 'Valid XML input for ESX audit script received';
                        discovery_log($log);
                    } catch (Exception $error) {
                        // not a valid XML string
                        $log->message = 'Invalid XML input for ESX audit script';
                        discovery_log($log);
                        exit;
                    }
                    $count = 0;
                    foreach ($esx_xml->children() as $child) {
                        if ($child->getName() === 'sys') {
                            $esx_details = (object) $esx_xml->sys;
                            if (!isset($esx_details->ip) or $esx_details->ip == '') {
                                $esx_details->ip = $device->ip;
                            }
                            $esx_details->system_id = $this->m_device->match($esx_details);
                            $esx_details->last_seen = $device->last_seen;

                            if (isset($esx_details->system_id) and $esx_details->system_id != '') {
                                // we have an existing device
                                $esx_details->original_last_seen_by = $this->m_devices_components->read($esx_details->system_id, 'y', 'system', '', 'last_seen_by');
                                $esx_details->original_last_seen = $this->m_devices_components->read($esx_details->system_id, 'y', 'system', '', 'last_seen');
                                $this->m_device->update($esx_details);
                                $log->message = "ESX update for $esx_details->ip (System ID $esx_details->system_id)";
                                discovery_log($log);
                            } else {
                                // we have a new system
                                $esx_details->system_id = $this->m_device->insert($esx_details);
                                $log->message = "ESX insert for $esx_details->ip (System ID $esx_details->system_id)";
                                discovery_log($log);
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
                            $log->message = 'Processed " . $child->getName() . " from XML input for ESX audit script';
                            discovery_log($log);
                        }
                    }
                    # The below are part of the ssh_audit
                    $this->m_devices_components->process_component('network', $esx_details, $esx_xml->network, $display);
                    $this->m_devices_components->process_component('vm', $esx_details, $esx_xml->vm, $display);
                    $this->m_devices_components->process_component('ip', $esx_details, $esx_xml->ip, $display);
                    # The below only exist in the audit script
                    $this->m_devices_components->process_component('software', $esx_details, $esx_xml->software, $display);
                    $this->m_devices_components->process_component('processor', $esx_details, $esx_xml->processor, $display);
                    $this->m_devices_components->process_component('bios', $esx_details, $esx_xml->bios, $display);
                    $this->m_devices_components->process_component('memory', $esx_details, $esx_xml->memory, $display);
                    $this->m_devices_components->process_component('motherboard', $esx_details, $esx_xml->motherboard, $display);
                    $this->m_devices_components->process_component('video', $esx_details, $esx_xml->video, $display);

                    if ($unlink != '') {
                        $log->command = 'unlink(\'' . $unlink . '\')';
                        $log->message = 'Delete local temporary audit script';
                        $log->status = 'success';
                        try {
                            unlink($unlink);
                        } catch (Exception $e) {
                            $log->status = 'fail';
                            $log->severity = 4;
                        }
                        discovery_log($log);
                        unset($log->command, $log->message, $log->status);
                        $log->severity = 7;
                    }
                }
            }
        }

        if ($unlink != '') {
            $log->command = 'unlink(\'' . $unlink . '\')';
            $log->message = 'Delete local temporary audit script';
            $log->status = 'success';
            try {
                unlink($unlink);
            } catch (Exception $e) {
                $log->status = 'fail';
                $log->severity = 4;
            }
            discovery_log($log);
            unset($log->command, $log->message, $log->status);
            $log->severity = 7;
        }
    } // close the 'skip'
    $log->message = "Discovery has completed processing $device->ip (System ID $device->id).";
    discovery_log($log);
}