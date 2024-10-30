<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

if (!function_exists('all_ip_list')) {
    /**
     *
     * @param  object $discovery The discovery object with all its parameters
     * @return array|false All the IP addresses in this discovery (excluding the excluded list)
     */
    function all_ip_list($discovery = null)
    {
        if (is_null($discovery)) {
            return false;
        }
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();

        $log = new \StdClass();
        $log->discovery_id = $discovery->id;
        $log->severity = 6;
        $log->file = 'discoveries_helper';
        $log->function = 'all_ip_list';
        $log->command_status = 'notice';
        $log->message = 'Retrieving IP list';
        $log->ip = '127.0.0.1';

        $ip_addresses = array();
        if (!empty($discovery->scan_options->exclude_ip)) {
            $command = 'nmap -n -sL --exclude ' . $discovery->scan_options->exclude_ip . ' ' . $discovery->subnet;
        } else {
            $command = 'nmap -n -sL ' . $discovery->subnet;
        }
        if (php_uname('s') === 'Darwin') {
            $command = '/usr/local/bin/' . $command;
        }
        $log->command = $command;
        exec($command, $output, $return_var);
        if ($return_var === 0) {
            foreach ($output as $line) {
                if (stripos($line, 'Nmap scan report for') === 0) {
                    $temp = explode(' ', $line);
                    $ip_addresses[] = $temp[4];
                }
            }
        } else {
            if (php_uname('s') === 'Windows NT' and empty($output)) {
                log_message('error', 'No response from Nmap. Is the Apache Service running as a normal user?');
            }
            $discoveryLogModel->create($log);
            return false;
        }
        $log->command_output = 'Total IPs: ' . @count($ip_addresses);
        $discoveryLogModel->create($log);
        return $ip_addresses;
    }
}

if (! function_exists('responding_ip_list')) {
    /**
     *
     * @param  object $discovery The discovery object with all its parameters
     * @return array|false The array of all responding IP addresses in the discovery
     */
    function responding_ip_list($discovery = null)
    {
        if (is_null($discovery)) {
            return array();
        }
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();

        $log = new \StdClass();
        $log->discovery_id = $discovery->id;
        $log->severity = 6;
        $log->file = 'discoveries_helper';
        $log->function = 'responding_ip_list';
        $log->command_status = 'notice';
        $log->message = 'Sending ping';
        $log->ip = '127.0.0.1';

        $ip_addresses = array();
        // Nmap:
        //   -n     No DNS lookup
        //   -oG    Output in grappable format
        //   -      No filename, command line output for above
        //   -sP    Ping scan only
        //   -T4    Aggressive scanning
        //   --min-parallelism
        //   --max-parallelism
        //   --randomize-hosts

        if ($discovery->scan_options->ping === 'y') {
            if (!empty($discovery->scan_options->exclude_ip)) {
                $command = 'nmap -n -oG - -sP -T4 --max-retries 2 --min-parallelism 200 --max-parallelism 256 --randomize-hosts --exclude ' . $discovery->scan_options->exclude_ip . ' ' . $discovery->subnet;
            } else {
                $command = 'nmap -n -oG - -sP -T4 --max-retries 2 --min-parallelism 200 --max-parallelism 256 --randomize-hosts ' . $discovery->subnet;
            }
            if (php_uname('s') === 'Darwin') {
                $command = '/usr/local/bin/' . $command;
            }
            $log->command = $command;
            exec($command, $output, $return_var);
            if ($return_var === 0) {
                foreach ($output as $line) {
                    if (stripos($line, 'Host:') === 0) {
                        $temp = explode(' ', $line);
                        $ip_addresses[] = $temp[1];
                    }
                }
            } else {
                if (php_uname('s') === 'Windows NT' and empty($output)) {
                    log_message('error', 'No response from Nmap. Is the Apache Service running as a normal user?');
                }
                $log->command_output = json_encode($output);
                $discoveryLogModel->create($log);
                return array();
            }
        } else {
            if (!empty($discovery->scan_options->exclude_ip)) {
                $command = 'nmap -n -sL --exclude ' . $discovery->scan_options->exclude_ip . ' ' . $discovery->subnet;
            } else {
                $command = 'nmap -n -sL ' . $discovery->subnet;
            }
            if (php_uname('s') === 'Darwin') {
                $command = '/usr/local/bin/' . $command;
            }
            $log->command = $command;
            exec($command, $output, $return_var);
            if ($return_var === 0) {
                foreach ($output as $line) {
                    if (stripos($line, 'Nmap scan report for') === 0) {
                        $temp = explode(' ', $line);
                        $ip_addresses[] = $temp[4];
                    }
                }
            } else {
                $discoveryLogModel->create($log);
                return array();
            }
        }
        $log->command_output = 'Responding IPs: ' . @count($ip_addresses);
        $discoveryLogModel->create($log);
        return $ip_addresses;
    }
}

if (! function_exists('update_non_responding')) {
    /**
     *
     * @param  int   $discovery_id       discoveries.id
     * @param  array $all_ip_list        All the IP addresses in this discovery (excluding the excluded list)
     * @param  array $responding_ip_list The array of all responding IP addresses in the discovery
     * @return void
     */
    function update_non_responding($discovery_id = 0, $all_ip_list = array(), $responding_ip_list = array())
    {
        if (!is_array($all_ip_list)) {
            return;
        }
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $instance = & get_instance();
        $db = db_connect();
        $start = microtime(true);

        $log = new \StdClass();
        $log->discovery_id = $discovery_id;
        $log->severity = 6;
        $log->file = 'discoveries_helper';
        $log->function = 'update_non_responding';
        $log->command_status = 'notice';
        $log->message = 'Updating discovery log with non-responsive IPs';
        $log->ip = '127.0.0.1';
        $id = $discoveryLogModel->create($log);
        foreach ($all_ip_list as $ip) {
            if (!in_array($ip, $responding_ip_list)) {
                // Update the discovery log to show this IP not responding
                $log->message = "IP {$ip} not responding, ignoring.";
                $log->ip = $ip;
                $discoveryLogModel->create($log);
            }
        }
        $log->command_time_to_execute = microtime(true) - $start;
        $sql = "UPDATE discovery_log SET command_time_to_execute = '" . $log->command_time_to_execute . "' WHERE id = ?";
        $db->query($sql, [$id]);
    }
}

if (! function_exists('queue_responding')) {
    /**
     * Insert into queue an entry for each responding IP
     * @param  int   $discovery_id       discoveries.id
     * @param  array $responding_ip_list The array of all responding IP addresses in the discovery
     * @return void
     */
    function queue_responding($discovery_id = 0, $responding_ip_list = array())
    {
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        # $queueModel = new \App\Models\QueueModel();
        $instance = & get_instance();

        $log = new \StdClass();
        $log->discovery_id = $discovery_id;
        $log->severity = 6;
        $log->file = 'discoveries_helper';
        $log->function = 'update_responding';
        $log->command_status = 'notice';
        if (!is_array($responding_ip_list)) {
            return;
        }
        foreach ($responding_ip_list as $key => $ip) {
            $item = new \StdClass();
            $item->ip = $ip;
            $item->discovery_id = $discovery_id;
            if (!is_int($key) and stripos($key, ':') !== false) {
                $item->mac = $key;
            }
            $details = new \stdClass();
            $details->details = json_encode($item);
            $details->type = 'ip_scan';
            unset($item);
            $instance->queueModel->create($details);
            $temp_device_id = @$log->device_id;
            $log->device_id = '';
            $log->ip = $ip;
            $log->message = "IP {$ip} responding, adding to device list.";
            $discoveryLogModel->create($log);
            $log->device_id = $temp_device_id;
            unset($temp_device_id);
        }
    }
}


if (! function_exists('discover_subnet')) {
    /**
     * Run the discovery on the subnet
     * @param  object $queue_item The individual entry from the queue table
     * @return bool             [description]
     */
    function discover_subnet($queue_item = null)
    {
        if (empty($queue_item)) {
            return false;
        }
        $start = microtime(true);
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $instance = & get_instance();
        $discoveriesModel = new \App\Models\DiscoveriesModel();
        $db = db_connect();

        $discovery_id = intval($queue_item->discovery_id);
        $discovery = $discoveriesModel->readForDiscovery($discovery_id);
        if (empty($discovery)) {
            return false;
        }
        $discovery = $discovery[0];

        $log = new \StdClass();
        $log->discovery_id = $discovery_id;
        $log->command_status = 'start';
        $log->message = 'Starting discovery for ' . $discovery->name;
        $log->ip = '127.0.0.1';
        $log->severity = 6;
        $log->file = 'discoveries_helper';
        $log->function = 'discover_subnet';
        $discoveryLogModel->create($log);

        $sql = "UPDATE `discoveries` SET `status` = 'running', `ip_all_count` = 0, `ip_responding_count` = 0, `ip_scanned_count` = 0, `ip_discovered_count` = 0, `ip_audited_count` = 0, `last_run` = NOW() WHERE id = ?";
        $db->query($sql, [$discovery_id]);

        if (! preg_match('/^[\d,\.,\/,\-]*$/', $discovery->subnet)) {
            $log->message = 'Invalid subnet value supplied of ' . htmlentities($discovery->subnet);
            $log->severity = 5;
            $discoveryLogModel->create($log);
            return;
        }

        $log->command_status = 'notice';
        if ($discovery->type === 'seed') {
            $all_ip_list = array($discovery->seed_ip);
            $responding_ip_list = array($discovery->seed_ip);
            $count = 1;
            if ($discovery->seed_ping === 'y') {
                $log->message = 'Pinging subnet before running seed discovery.';
                $discoveryLogModel->create($log);
                $ping_temp = $discovery->scan_options->ping;
                $discovery->scan_options->ping = 'y';
                responding_ip_list($discovery);
                $discovery->scan_options->ping = $ping_temp;
                unset($ping_temp);
            } else {
                $log->message = 'Ping subnet not requested, seeding from ' . $discovery->seed_ip . '.';
                $discoveryLogModel->create($log);
            }
            $log->message = 'Assuming ' . $discovery->seed_ip . ' is responding.';
            $discoveryLogModel->create($log);
        } else {
            $all_ip_list = all_ip_list($discovery);
            $count = (!empty($all_ip_list)) ? count($all_ip_list) : 0;
            $log->command_status = 'notice';
            if ($discovery->scan_options->ping === 'n') {
                $log->message = 'Ping response not required, assuming all ' . $count . ' IP addresses are up.';
            } else {
                $log->message = 'Scanning ' . $count . ' IP addresses using Nmap to test for response.';
            }
            $discoveryLogModel->create($log);
            $start = microtime(true);
            $responding_ip_list = responding_ip_list($discovery);
            $log->command_time_to_execute = microtime(true) - $start;
            $log->message = 'Nmap response scanning completed.';
            $discoveryLogModel->create($log);
            update_non_responding($discovery->id, $all_ip_list, $responding_ip_list);
        }

        queue_responding($discovery->id, $responding_ip_list);

        $ip_all_count = 0;
        $ip_responding_count = 0;
        if (!empty($all_ip_list) and is_array($all_ip_list)) {
            $ip_all_count = count($all_ip_list);
        }
        if (!empty($responding_ip_list) and is_array($responding_ip_list)) {
            $ip_responding_count = count($responding_ip_list);
        }

        $time_to_execute = microtime(true) - $start;

        // This will increment discoveries.ip_all_count using the log helper (think Collector / Server)
        $log->message = 'Total IPs count: ' . $ip_all_count;
        $log->command_time_to_execute = $time_to_execute;
        $discoveryLogModel->create($log);

        // This will increment discoveries.ip_responding_count using the log helper (think Collector / Server)
        $log->message = 'Responding IPs count: ' . $ip_responding_count;
        $log->command_time_to_execute = $time_to_execute;
        $discoveryLogModel->create($log);

        if (empty($responding_ip_list)) {
            $log->message = 'No IPs are responsive. You may wish to check your discovery configuration.';
            $log->command_time_to_execute = $time_to_execute;
            $discoveryLogModel->create($log);
            // NOTE - the log_helper will mark this in the database as complete for us, think Collector / Server
            $log->message = 'Discovery has finished.';
            $log->discovery_id = intval($discovery->id);
            $log->command = '';
            $log->command_output = '';
            $log->command_status = 'finished';
            $log->command_time_to_execute = $time_to_execute;
            $log->ip = '127.0.0.1';
            $discoveryLogModel->create($log);
        }
        return true;
    }
}

if (! function_exists('get_nmap_version')) {
    /**
     * Return the integer major Nmap version
     * @return int The Major version of nmap
     */
    function get_nmap_version()
    {
        $output = '';
        $nmap_version = 0;
        if (php_uname('s') === 'Windows NT') {
            $command_string = 'nmap --version';
            exec($command_string, $output, $return_var);
        }
        if (php_uname('s') === 'Darwin') {
            $command_string = 'nmap --version';
            exec($command_string, $output, $return_var);
        }
        if (php_uname('s') === 'Linux') {
            $command_string = 'nmap --version';
            exec($command_string, $output, $return_var);
        }
        if (!empty($output) and is_array($output)) {
            foreach ($output as $line) {
                if (stripos($line, 'Nmap version') !== false) {
                    $output = $line;
                    break;
                }
            }
            $lines = explode(' ', $output);
            $nmap_version = intval($lines[2]);
        }
        return $nmap_version;
    }
}

if (! function_exists('ip_scan')) {
    /**
     * Scan an individual IP address according to our discovery settings
     * @param  object $details [description]
     * @return array|false   A device results or boolean false
     */
    function ip_scan($details = null)
    {
        if (empty($details)) {
            return false;
        }
        $start = microtime(true);
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $discoveriesModel = new \App\Models\DiscoveriesModel();
        $instance = & get_instance();
        $db = db_connect();
        $ip = ip_address_from_db($details->ip);

        $mac_address = '';
        if (!empty($details->mac_address)) {
            $mac_address = $details->mac_address;
        }

        $discovery_id = intval($details->discovery_id);
        $discovery = $discoveriesModel->readForDiscovery($discovery_id);
        if (empty($discovery)) {
            return false;
        }
        $discovery = $discovery[0];

        $log = new \StdClass();
        $log->discovery_id = $discovery->id;
        $log->severity = 7;
        $log->file = 'discoveries_helper';
        $log->function = 'ip_scan';
        $log->command_status = 'notice';
        $log->message = 'IP scan start on device ' . $ip;
        $log->ip = $ip;
        $log->command_output = json_encode($details);
        $log->command = 'IP details as supplied';
        $discoveryLogModel->create($log);

        unset($details);

        $nmap = $discovery->scan_options;
        $device = array();
        $sql = 'SELECT NOW() AS `timestamp`';
        $result = $db->query($sql)->getResult();
        // $device['timestamp'] = $result[0]->timestamp;
        $timestamp = $result[0]->timestamp;

        $nmap_version = get_nmap_version();

        if ($discovery->type === 'seed' and $discovery->scan_options->ping === 'y') {
            // We may need to test for a ping response
            $temp_subnet = $discovery->subnet;
            $discovery->subnet = $ip;
            $temp_responding = responding_ip_list($discovery);
            $discovery->subnet = $temp_subnet;
            if (empty($temp_responding)) {
                $log->message = $ip . ' is non-responsive to ping, ignoring.';
                $discoveryLogModel->create($log);
                // Log end of audit for this IP
                $log->command = 'Peak Memory';
                $log->command_output = round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB';
                $log->command_status = 'device complete';
                $log->command_time_to_execute = microtime(true)  - $start;
                $log->message = 'IP scan finish on device ' . ip_address_from_db($ip);
                $log->ip = ip_address_from_db($ip);
                $discoveryLogModel->create($log);
                // Update the log line to avoid confusion in the GUI
                $sql = "UPDATE discovery_log SET message = 'IP " . $log->ip . " responding, adding to device list. Device detected via seed discovery, but not responding to ping, ignoring.' WHERE message = 'IP " . $log->ip . " responding, adding to device list.' and discovery_id = ?";
                $query = $db->query($sql, [$discovery->id]);
                // and check if the discovery is now finished
                discovery_check_finished(intval($discovery->id));
                return false;
            } else {
                $log->message = $ip . ' is responsive to ping, continuing.';
                $discoveryLogModel->create($log);
            }
        }

        $timing = '-T4';
        if (isset($nmap->timing) and (is_int($nmap->timing) or is_numeric($nmap->timing)) and (intval($nmap->timing) > 0 and intval($nmap->timing) < 6)) {
            $timing = '-T' . intval($nmap->timing);
        }

        // If ping = n, scan the target regardless
        $ping = '';
        if (!empty($nmap->ping) and $nmap->ping === 'n') {
            $ping = '-Pn';
        }

        $service_version = '';
        if (!empty($nmap->service_version) and $nmap->service_version === 'y') {
            $service_version = '-sV';
        }

        $timeout = '';
        if (!empty($timeout) and (is_int($nmap->timeout) or is_numeric($nmap->timeout))) {
            $timeout = '--host-timeout ' . intval($nmap->timeout);
        }

        $nmap_tcp_ports = '';
        if (!empty($nmap->nmap_tcp_ports)) {
            $nmap_tcp_ports = '--top-ports ' . $nmap->nmap_tcp_ports;
        }

        $nmap_udp_ports = '';
        if (!empty($nmap->nmap_udp_ports)) {
            $nmap_udp_ports = '--top-ports ' . $nmap->nmap_udp_ports;
        }

        $tcp_ports = '';
        if (!empty($nmap->tcp_ports)) {
            $nmap->tcp_ports = str_replace(' ', '', $nmap->tcp_ports);
            $tcp_ports = '-p ' . $nmap->tcp_ports;
        }

        $udp_ports = '';
        if (!empty($nmap->udp_ports)) {
            $nmap->udp_ports = str_replace(' ', '', $nmap->udp_ports);
            $udp_ports = '-p ' . $nmap->udp_ports;
        }

        $exclude_ip = '';
        if (!empty($nmap->exclude_ip)) {
            $nmap->exclude_ip = str_replace(' ', '', $nmap->exclude_ip);
            $exclude_ip = '--exclude ' . $nmap->exclude_ip;
        }

        $exclude_tcp_ports = '';
        if (!empty($nmap->exclude_tcp_ports) and $nmap_version > 6) {
            $nmap->exclude_tcp_ports = str_replace(' ', '', $nmap->exclude_tcp_ports);
            $exclude_tcp_ports = '--exclude-ports T:' . $nmap->exclude_tcp_ports;
        }

        $exclude_udp_ports = '';
        if (!empty($nmap->exclude_udp_ports) and $nmap_version > 6) {
            $nmap->exclude_udp_ports = str_replace(' ', '', $nmap->exclude_udp_ports);
            $exclude_udp_ports = '--exclude-ports U:' . $nmap->exclude_udp_ports;
        }

        if (!empty($discovery->scan_options->nmap_tcp_ports)) {
            $item_start = microtime(true);
            $command = "nmap -n {$timing} {$ping} -sS {$service_version} {$exclude_ip} {$exclude_tcp_ports} {$nmap_tcp_ports} {$timeout} {$ip}";
            if (php_uname('s') === 'Darwin') {
                $command = '/usr/local/bin/' . $command;
            }
            exec($command, $output, $return_var);
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Nmap Command (Top TCP Ports)';
            $log->command = "{$command} # Top TCP Ports";
            $log->command_output = json_encode($output);
            $discoveryLogModel->create($log);
            $command_output = '';
            echo $log->message . ' took ' . $log->command_time_to_execute . "seconds.\n";
            $device = array_merge($device, check_nmap_output($discovery, $output, $ip, $command));
            unset($output);
        }

        if (!empty($discovery->scan_options->nmap_udp_ports)) {
            $item_start = microtime(true);
            $command = "nmap -n {$timing} {$ping} -sU {$service_version} {$exclude_ip} {$exclude_udp_ports} {$nmap_udp_ports} {$timeout} {$ip}";
            if (php_uname('s') === 'Darwin') {
                $command = '/usr/local/bin/' . $command;
            }
            exec($command, $output, $return_var);
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Nmap Command (Top UDP Ports)';
            $log->command = "{$command} # Top UDP Ports";
            $log->command_output = json_encode($output);
            $discoveryLogModel->create($log);
            $command_output = '';
            echo $log->message . ' took ' . $log->command_time_to_execute . "seconds.\n";
            $ports = @$device['nmap_ports'];
            $device = array_merge($device, check_nmap_output($discovery, $output, $ip, $command));
            if (!empty($ports)) {
                $device['nmap_ports'] = $ports . ',' . $device['nmap_ports'];
            }
            unset($output);
            unset($ports);
        }

        if (!empty($discovery->scan_options->tcp_ports)) {
            $item_start = microtime(true);
            $command = "nmap -n {$timing} {$ping} -sS {$service_version} {$exclude_ip} {$exclude_tcp_ports} {$tcp_ports} {$timeout} {$ip}";
            if (php_uname('s') === 'Darwin') {
                $command = '/usr/local/bin/' . $command;
            }
            exec($command, $output, $return_var);
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Nmap Command (Custom TCP Ports)';
            $log->command = "{$command} # Custom TCP Ports";
            $log->command_output = json_encode($output);
            $discoveryLogModel->create($log);
            $command_output = '';
            #echo $log->message . ' took ' . $log->command_time_to_execute . "seconds.\n";
            $ports = @$device['nmap_ports'];
            $temp = check_nmap_output($discovery, $output, $ip, $command);
            if (!empty($temp)) {
                $device = array_merge($device, $temp);
            }
            if (!empty($ports)) {
                $device['nmap_ports'] = $ports . ',' . $device['nmap_ports'];
            }
            unset($output);
            unset($ports);
        }

        if (!empty($discovery->scan_options->udp_ports)) {
            $item_start = microtime(true);
            $command = "nmap -n {$timing} {$ping} -sU {$service_version} {$exclude_ip} {$exclude_udp_ports} {$udp_ports} {$timeout} {$ip}";
            if (php_uname('s') === 'Darwin') {
                $command = '/usr/local/bin/' . $command;
            }
            exec($command, $output, $return_var);
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Nmap Command (Custom UDP Ports)';
            $log->command = "{$command} # Custom UDP Ports";
            $log->command_output = json_encode($output);
            $discoveryLogModel->create($log);
            $command_output = '';
            #echo $log->message . ' took ' . $log->command_time_to_execute . "seconds.\n";
            $ports = @$device['nmap_ports'];
            $temp = check_nmap_output($discovery, $output, $ip, $command);
            if (!empty($temp)) {
                $device = array_merge($device, $temp);
            }
            if (!empty($ports)) {
                $device['nmap_ports'] = $ports . ',' . $device['nmap_ports'];
            }
            unset($output);
            unset($ports);
        }

        if (empty($device['mac_address']) and ! empty($mac_address)) {
            $device['mac_address'] = $mac_address;
        }

        if (!empty($device)) {
            $device['timestamp'] = $timestamp;
        }

        $sql = "UPDATE discovery_log SET command_time_to_execute = ? WHERE message = 'IP " . $log->ip . " responding, adding to device list.' and discovery_id = ?";
        $query = $db->query($sql, [$log->command_time_to_execute, $discovery->id]);

        if (!empty($discovery->require_port) and $discovery->require_port === 'y' and empty($device['nmap_ports'])) {
            $log->message = 'IP scan finish on device ' . $ip;
            $log->command = 'No open ports detected but required for this discovery - halting on this IP.';
            $log->command_output = json_encode($device);
            $log->command_time_to_execute = microtime(true) - $start;
            $discoveryLogModel->create($log);
            $sql = "UPDATE discovery_log SET message = 'IP " . $log->ip . " not responding, ignoring.' WHERE discovery_id = ? AND message = 'IP " . $log->ip . " responding, adding to device list.'";
            $query = $db->query($sql, [$discovery->id]);
            return null;
        }

        $log->message = 'IP scan finish on device ' . $ip;
        $log->command = 'Device details returned';
        $log->command_output = json_encode($device);
        $log->command_time_to_execute = microtime(true) - $start;
        $discoveryLogModel->create($log);
        return($device);
    }
}

if (! function_exists('check_nmap_output')) {
    /**
     * [check_nmap_output description]
     * @param  object $discovery [description]
     * @param  array  $output    [description]
     * @param  string $ip        [description]
     * @param  string $command   [description]
     * @return array|false            [description]
     */
    function check_nmap_output($discovery, $output, $ip, $command)
    {
        if (empty($discovery)) {
            log_message('error', 'No discovery provided to discoveries_helper::check_nmap_output.');
            return false;
        }
        if (empty($output)) {
            log_message('error', 'No output provided to discoveries_helper::check_nmap_output.');
            return false;
        }
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();

        $device = array();
        $log = new \StdClass();
        $log->discovery_id = $discovery->id;
        $log->ip = $ip;
        $log->severity = 7;
        $log->command = $command;
        $log->command_status = 'notice';
        $log->file = 'discoveries_helper';
        $values = array('open', 'closed', 'filtered', 'unfiltered', 'open|filtered', 'closed|filtered');
        $device = array();

        // Some defaults, see https://nmap.org/book/man-port-scanning-basics.html
        if (empty($discovery->scan_options->{'open'})) {
            $discovery->scan_options->{'open'} = 'y';
        }
        if (empty($discovery->scan_options->{'closed'})) {
            $discovery->scan_options->{'closed'} = 'n';
        }
        if (empty($discovery->scan_options->{'filtered'})) {
            $discovery->scan_options->{'filtered'} = 'n';
        }
        if (empty($discovery->scan_options->{'unfiltered'})) {
            $discovery->scan_options->{'unfiltered'} = 'n';
        }
        if (empty($discovery->scan_options->{'open|filtered'})) {
            $discovery->scan_options->{'open|filtered'} = 'y';
        }
        if (empty($discovery->scan_options->{'closed|filtered'})) {
            $discovery->scan_options->{'closed|filtered'} = 'n';
        }

        foreach ($output as $line) {
            $keywords = preg_split('/[\s,]+/', $line);
            foreach ($values as $status) {
                if (!empty($keywords[1])) {
                    if (!empty($discovery->scan_options->{$status}) and $discovery->scan_options->{$status} === 'y') {
                        if ($keywords[1] === $status) {
                            $device['host_is_up'] = 'true';
                            $device['status'] = $status;
                            if ($status === 'open' or ($discovery->scan_options->{'open|filtered'} === 'y' and $status === 'open|filtered')) {
                                if (empty($device['nmap_ports'])) {
                                    $device['nmap_ports'] = $keywords[0] . '/' . str_replace('/', '+', $keywords[2]);
                                } else {
                                    $device['nmap_ports'] .= ',' . $keywords[0] . '/' . $keywords[2];
                                }
                            }
                            $log->command_output = $line;
                            $log->message = 'Host ' . $ip . ' is up, received ' . $keywords[0] . ' ' . $status . ' response';
                            if ($keywords[0] === '22/tcp') {
                                $device['ssh_status'] = 'true';
                            }
                            if ($keywords[0] === '135/tcp') {
                                $device['wmi_status'] = 'true';
                            }
                            if ($keywords[0] === '161/udp') {
                                $device['snmp_status'] = 'true';
                            }
                            $ssh_ports = explode(',', $discovery->scan_options->ssh_ports);
                            foreach ($ssh_ports as $ssh_port) {
                                if ($keywords[0] === $ssh_port . '/tcp') {
                                    $device['ssh_status'] = 'true';
                                    $log->message = 'Host ' . $ip . ' is up, received custom ssh port ' . $keywords[0] . ' ' . $status . ') response';
                                }
                            }
                            $discoveryLogModel->create($log);
                        }
                    }
                }
            }
            if (stripos($line, 'Host {$ip} is up, received arp-response') !== false) {
                $device['host_is_up'] = 'true';
                $log->message = "Host {$ip} is up, received arp-response";
                $log->command_output = $line;
                $discoveryLogModel->create($log);
            }
            if (stripos($line, 'MAC Address') !== false) {
                $keywords = preg_split('/[\s,]+/', $line);
                $device['mac_address'] = strtolower($keywords[2]);
                $device['host_is_up'] = 'true';
                $log->message = "Host {$ip} is up, received mac addess " . $device['mac_address'];
                $log->command_output = $line;
                $discoveryLogModel->create($log);
            }
            if (stripos($line, 'Nmap done: 1 IP address (1 host up)') !== false) {
                $device['host_is_up'] = 'true';
                $log->message = "Host {$ip} is up, received Nmap ping response";
                $log->command_output = $line;
                $discoveryLogModel->create($log);
            }
            if (stripos($line, 'due to host timeout') !== false and $discovery->scan_options->ping === 'y') {
                $device['host_is_up'] = 'true';
                $log->message = "Host {$ip} timed out. Exceeded timeout seconds.";
                $log->command_output = $line;
                $discoveryLogModel->create($log);
            }
        }
        return $device;
    }
}

if (! function_exists('ip_audit')) {
    /**
     * [ip_audit description]
     * @param  object $ip_scan [description]
     * @return false          [description]
     */
    function ip_audit($ip_scan = null)
    {
        helper('snmp');
        helper('snmp_model');

        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $discoveriesModel = new \App\Models\DiscoveriesModel();
        $componentsModel = new \App\Models\ComponentsModel();
        $instance = & get_instance();
        $db = db_connect();

        if (empty($ip_scan)) {
            log_message('error', 'No ip_scan passed to ip_audit.');
            return false;
        }
        $start = microtime(true);

        $discovery_id = intval($ip_scan->discovery_id);
        $discovery = $discoveriesModel->readForDiscovery($discovery_id);
        if (empty($discovery)) {
            return false;
        }
        $discovery = $discovery[0];
        if (empty($discovery)) {
            log_message('error', 'Invalid discovery_id (' . @$ip_scan->discovery_id . ') passed to ip_audit.');
            return false;
        }
        $discovery->id = intval($discovery->id);
        // $orig_ip_scan_details = '';
        // if (!empty($ip_scan->details) and is_string($ip_scan->details)) {
        //     $orig_ip_scan_details = $ip_scan->details;
        //     $ip_scan->details = @json_decode($ip_scan->details);
        // }
        // if (empty($ip_scan->details)) {
        //     $detail = '';
        //     if (is_string($orig_ip_scan_details)) {
        //         $detail = ' JSON: ' . @$orig_ip_scan_details;
        //     } elseif (empty($ip_scan->details)) {
        //         $detail = ' Empty object ip_scan->details.';
        //     }
        //     log_message('error', 'Bad JSON string ip_scan->details passed to ip_audit.' . $detail);
        //     return false;
        // }
        // unset($orig_ip_scan_details);
        if (empty($ip_scan->snmp_status)) {
            $ip_scan->snmp_status = 'false';
        }
        if (empty($ip_scan->ssh_status)) {
            $ip_scan->ssh_status = 'false';
        }
        if (empty($ip_scan->wmi_status)) {
            $ip_scan->wmi_status = 'false';
        }

        $log = new \StdClass();
        $log->command_status = 'notice';
        $log->discovery_id = $discovery->id;
        $log->file = 'discoveries_helper';
        $log->function = 'ip_audit';
        $log->ip = $ip_scan->ip;
        $log->message = 'IP Audit start on device ' . $ip_scan->ip;
        $log->pid = getmypid();
        $log->severity = 7;
        $log->command_output = json_encode($ip_scan);
        $log->command = 'Device scan as supplied.';
        $discoveryLogModel->create($log);

        $log->command_output = '';
        $log->command = '';

        $filepath = ROOTPATH . 'other';

        $device = new \StdClass();
        $device->audits_ip = $ip_scan->ip;
        $device->credentials =  array();
        $device->discovery_id = $discovery->id;
        $device->id = '';
        if (!empty($discovery->device_id)) {
            // This may have been set on the discovery itself - a single device discovery
            $device->id = intval($discovery->device_id);
            // And double check this device exists
            $sql = "SELECT id, name FROM devices WHERE id = ?";
            $result = $db->query($sql, [$device->id])->getResult();
            if (empty($result)) {
                $device->id = '';
            }
        }
        $device->ip = $ip_scan->ip;

        $sql = 'SELECT NOW() AS `timestamp`';
        $result = $db->query($sql)->getResult();
        $device->last_seen = $result[0]->timestamp;
        $device->last_seen_by = 'nmap';
        $device->mac_address = (!empty($ip_scan->mac_address)) ? $ip_scan->mac_address : '';
        $device->name =         '';
        $device->os_family =    '';
        $device->os_group =     '';
        $device->sysDescr =     '';
        $device->timestamp =    $ip_scan->timestamp;
        $device->type =         '';
        $device->hostname =     '';
        // If we have specifically assigned another org_id, set it
        if (!empty($discovery->devices_assigned_to_org)) {
            $device->org_id = intval($discovery->devices_assigned_to_org);
        }
        // If we have specifically assigned a location_id, set it
        if (!empty($discovery->devices_assigned_to_location)) {
            $device->location_id = intval($discovery->devices_assigned_to_location);
        }

        if ($instance->config->discovery_use_dns === 'y') {
            $log->message = 'Checking DNS';
            $discoveryLogModel->create($log);
            $device = dns_validate($device);
        }

        if (empty($device->id)) {
            // This may have been set on the discovery itself - a single device discovery, if not run the match code
            $device->id = deviceMatch($device, intval($discovery->id), $discovery->match_options);
        }

        if (!empty($device->id) and ! empty($discovery->id)) {
            $sql = 'SELECT name FROM devices WHERE id = ?';
            $result = $db->query($sql, [$device->id])->getResult();
            $name = $result[0]->name;
            $log->device_id = $device->id;
            $log->message = 'Device named ' . $name . ' found on initial IP Scan (Nmap) result.';
            $discoveryLogModel->create($log);
            unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
            // update the previous log entries with our new device_id
            $sql = 'UPDATE discovery_log SET device_id = ? WHERE discovery_id = ? and ip = ?';
            $query = $db->query($sql, [$log->device_id, $discovery->id, $device->ip]);
            $log->message = 'Update the current log entries with our new device';
            $log->command = str_replace("\n", " ", (string)$db->getLastQuery());
            $discoveryLogModel->create($log);
        }
        unset($log->command, $log->command_time_to_execute, $log->command_error_message);

        $credentials = array();
        $credentials = $instance->discoveriesModel->getDeviceDiscoveryCredentials(@intval($device->id), $discovery->id, $device->ip);

        // output to log file and DEBUG the status of the three main services
        $ip_scan->ssh_port = '22';
        if (!empty($discovery->scan_options->ssh_ports) and intval($discovery->scan_options->ssh_ports) !== 22) {
            $nmap_ports = explode(',', $discovery->scan_options->ssh_ports);
            foreach (explode(',', $ip_scan->nmap_ports) as $port) {
                $temp = explode('/', $port);
                $port = intval($temp[0]);
                foreach ($nmap_ports as $nmap_port) {
                    if ($port === intval($nmap_port)) {
                        $ip_scan->ssh_port = $port;
                        $ip_scan->ssh_status = 'true';
                    }
                }
                unset($temp);
            }
        }
        $log->message = 'SSH Status is ' . $ip_scan->ssh_status . ' on ' . $device->ip;
        $discoveryLogModel->create($log);
        $log->message = 'SNMP Status is ' . $ip_scan->snmp_status . ' on ' . $device->ip;
        $discoveryLogModel->create($log);
        $log->message = 'WMI Status is ' . $ip_scan->wmi_status . ' on ' . $device->ip;
        $discoveryLogModel->create($log);

        $ip_discovered_count = 0;
        $ip_audited_count = 0;
        $ips_found = array();

        // SNMP audit
        $credentials_snmp = false;

        // No SNMP extension, do not run
        if (! extension_loaded('snmp') and $ip_scan->snmp_status === 'true') {
            $log->message = 'PHP extension not loaded, skipping SNMP data retrieval for ' . $device->ip;
            $discoveryLogModel->create($log);
        }

        // Test for working SNMP credentials
        if (extension_loaded('snmp') and $ip_scan->snmp_status === 'true') {
            $log->message = 'Testing SNMP credentials for ' . $device->ip;
            $discoveryLogModel->create($log);
            $credentials_snmp = snmp_credentials($device->ip, $credentials, $discovery->id);
            // Add this credential sets ID to device->credentials
            // if collection == credentials, not an individual device acssociated credential
            if (!empty($credentials_snmp)) {
                $ip_discovered_count = 1;
                if (!empty($credentials_snmp->foreign) and $credentials_snmp->foreign === 'credentials') {
                    $device->credentials[] = intval($credentials_snmp->id);
                }
            }
        }

        // Run SNMP audit commands
        if (!empty($credentials_snmp)) {
            if (!empty($credentials_snmp->credentials->version)) {
                $device->snmp_version = 'snmpv' . intval($credentials_snmp->credentials->version);
                if (intval($credentials_snmp->credentials->version) === 2) {
                    $device->snmp_version .= 'c';
                }
            }
            $temp_array = snmp_audit($device->ip, $credentials_snmp, $discovery->id, $discovery->type);
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
            if (!empty($temp_array['routes'])) {
                $routes = $temp_array['routes'];
            }
            if (!empty($temp_array['radio'])) {
                $radio = $temp_array['radio'];
            }
            if (!empty($temp_array['ips_found'])) {
                $ips_found = $temp_array['ips_found'];
            }
            if (!empty($temp_array['access_points'])) {
                $access_points = $temp_array['access_points'];
            }
        }

        // Set these here before testing them below
        if (empty($device->os_name)) {
            $device->os_name = '';
        }
        if (empty($device->manufacturer)) {
            $device->manufacturer = '';
        }
        if (
                !empty($device->type)
                and $device->type !== 'computer'
                and $device->type !== 'unknown'
                and $device->type !== 'unclassified'
                and stripos($device->os_name, 'dd-wrt') === false
                and stripos($device->manufacturer, 'Ubiquiti') === false
                and stripos($device->manufacturer, 'Synology') === false
        ) {
            $log->message = 'Not a computer and not a DD-WRT or Ubiquiti or Synology device setting SSH status to false for ' . $device->ip;
            $log->severity = 5;
            $discoveryLogModel->create($log);
            $log->severity = 7;
            $ip_scan->ssh_status = 'false';
        }

        if (stripos($device->os_name, 'extreme networks') !== false) {
            $log->message = 'Extreme Networks device setting SSH status to false for ' . $device->ip;
            $log->severity = 5;
            $discoveryLogModel->create($log);
            $log->severity = 7;
            $ip_scan->ssh_status = 'false';
        }

        // SSH Audit
        $credentials_ssh = false;

        // Run SSH audit
        if ($ip_scan->ssh_status === 'true') {
            $log->message = 'Testing SSH credentials for ' . $device->ip;
            $discoveryLogModel->create($log);
            $parameters = new \StdClass();
            $parameters->ip = $device->ip;
            $parameters->discovery_id = $discovery->id;
            $parameters->device_id = '';
            if (!empty($device->id)) {
                $parameters->device_id = $device->id;
            }
            $parameters->credentials = $credentials;
            $parameters->ssh_port = $ip_scan->ssh_port;
            $parameters->type = $discovery->type;
            $ssh_details = ssh_audit($parameters);
            if (!empty($ssh_details)) {
                if (!empty($ssh_details->credentials)) {
                    $ip_discovered_count = 1;
                    // Add this credential sets ID to device->credentials
                    // if collection == credentials, not an individual device acssociated credential
                    $credentials_ssh = $ssh_details->credentials;
                    if (!empty($credentials_ssh->foreign) and $credentials_ssh->foreign === 'credentials') {
                        $device->credentials[] = intval($credentials_ssh->id);
                    }
                }
                unset($ssh_details->credentials);
                $device->last_seen_by = 'ssh';
                $device->audits_ip = '127.0.0.1';
                if (!empty($ssh_details->ips_found)) {
                    $ips_found = array_merge($ips_found, $ssh_details->ips_found);
                    $log->message = 'Adding detected ARP ip addresses from ' . $device->ip;
                    $log->command_output = json_encode($ips_found);
                    $discoveryLogModel->create($log);
                }

                foreach ($ssh_details as $key => $value) {
                    if (!empty($value)) {
                        $device->$key = $value;
                    }
                }
            }
        }
        $log->message = '';
        $log->command_output = '';

        // We do not want to attempt to audit using WMI anything that's not a Windows machine
        if (!empty($device->os_group) and $device->os_group !== 'Windows' and $ip_scan->wmi_status !== 'false') {
            $ip_scan->wmi_status = 'false';
            $log->message = 'Setting WMI to false because we have an os_group that is not Windows.';
            $log->command_output = $device->os_group;
            $discoveryLogModel->create($log);
        }

        // test for working WMI credentials
        if ($ip_scan->wmi_status === 'true') {
            $log->message = 'Testing Windows credentials for ' . $device->ip;
            $discoveryLogModel->create($log);
            $credentials_windows = windows_credentials($device->ip, $credentials, $discovery->id);
        } else {
            $credentials_windows = false;
        }

        if (!empty($credentials_windows)) {
            $ip_discovered_count = 1;
            // Add this credential sets ID to device->credentials
            // if collection == credentials, not an individual device acssociated credential
            if (!empty($credentials_windows->foreign) and $credentials_windows->foreign === 'credentials') {
                $device->credentials[] = intval($credentials_windows->id);
            }
        }

        if ($ip_scan->wmi_status === 'true' and $credentials_windows) {
            $windows_details = wmi_audit($device->ip, $credentials_windows, $discovery->id);
            if (!empty($windows_details)) {
                $device->last_seen_by = 'windows';
                $device->audits_ip = '127.0.0.1';
                foreach ($windows_details as $key => $value) {
                    if (!empty($value)) {
                        $device->$key = $value;
                    }
                }
            }
            if ($discovery->type === 'seed') {
                $temp = windows_ips_found($device->ip, $credentials_windows, $discovery->id);
                if (!empty($temp)) {
                    $ips_found = array_merge($ips_found, $temp);
                    $log->message = 'Adding detected ARP ip addresses from ' . $device->ip;
                    $log->command_output = json_encode($ips_found);
                    $discoveryLogModel->create($log);
                }
            }
            $log->command_output = '';
        }

        // Set our device->credentials to a JSON array of working interger credentials.id
        $device->credentials = json_encode($device->credentials);

        // Now run our rules to update the device if any match
        // TODO
        # $device = $instance->rulesModel->execute($device, intval($discovery->id), 'return');

        // If we don't have a device.id, check with our updated device attributes (if any)
        if (empty($device->id)) {
            $device->id = deviceMatch($device, intval($discovery->id), $discovery->match_options);
            if (!empty($device->id)) {
                $log->device_id = $device->id;
                // update the previous log entries with our new device_id
                $sql = 'UPDATE discovery_log SET device_id = ? WHERE discovery_id = ? and ip = ?';
                $log->message = 'Update the previous log entries with the device_id';
                $log->command_status = 'notice';
                $command_start = microtime(true);
                $query = $db->query($sql, [$log->device_id, $discovery->id, $device->ip]);
                $command_end = microtime(true);
                $log->command_time_to_execute = $command_end - $command_start;
                $log->command = str_replace("\n", " ", (string)$db->getLastQuery());
                $discoveryLogModel->create($log);
            }
        }
        unset($log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);

        // See if we have a Mac Address for the device's IP
        if (!empty($network_interfaces) and empty($device->mac_address)) {
            foreach ($network_interfaces as $interface) {
                if (!empty($interface->ip) and !empty($device->ip) and $interface->ip === $device->ip) {
                    $device->mac_address = $interface->mac;
                    $device->subnet = $interface->subnet;
                }
            }
        }

        $log->command_status = 'notice';
        if (!empty($device->id)) {
            // UPDATE
            $log->device_id = $device->id;
            $log->message = 'Start of ' . strtoupper($device->last_seen_by) . ' update for ' . $device->ip;
            $discoveryLogModel->create($log);
            $command_start = microtime(true);
            $instance->devicesModel->update($device->id, $device);
            $log->command_time_to_execute = microtime(true) - $command_start;
            $device->ip = ip_address_from_db($device->ip);
            $log->message = 'End of ' . strtoupper($device->last_seen_by) . ' update for ' . $device->ip;
            $discoveryLogModel->create($log);
            unset($log->command_time_to_execute, $log->command_error_message);
        } else {
            // INSERT
            $log->message = 'Start of ' . strtoupper($device->last_seen_by) . ' insert for ' . $device->ip;
            $discoveryLogModel->create($log);
            $command_start = microtime(true);
            $device->id = $instance->devicesModel->create($device);
            $log->command_time_to_execute = microtime(true) - $command_start;
            $device->ip = ip_address_from_db($device->ip);
            $log->device_id = $device->id;
            $log->message = 'End of ' . strtoupper($device->last_seen_by) . ' insert for ' . $device->ip;
            $discoveryLogModel->create($log);
            // update the previous log entries with our new device_id
            $sql = 'UPDATE discovery_log SET device_id = ? WHERE discovery_id = ? and ip = ?';
            $command_start = microtime(true);
            $query = $db->query($sql, [$log->device_id, $discovery->id, $device->ip]);
            $log->command_time_to_execute = microtime(true) - $command_start;
            $log->message = 'Update the previous log entries with our new device_id';
            $log->command = str_replace("\n", " ", (string)$db->getLastQuery());
            $discoveryLogModel->create($log);
        }
        unset($log->command, $log->command_time_to_execute, $log->command_error_message);

        // grab some timestamps
        $sql = "SELECT first_seen, last_seen FROM devices WHERE id = ?";
        $result = $db->query($sql, $device->id)->getResult();
        $device->last_seen = $result[0]->last_seen;
        $device->first_seen = $result[0]->first_seen;

        // update any network interfaces retrieved by SNMP
        if (isset($network_interfaces) and is_array($network_interfaces) and count($network_interfaces) > 0) {
            $log->command_status = 'notice';
            $log->message = 'Processing found network interfaces for ' . $device->ip;
            $discoveryLogModel->create($log);
            $componentsModel->upsert('network', $device, $network_interfaces);
        }

        // update any ip addresses retrieved by SNMP
        if (!empty($ip->item) and is_array($ip->item) and count($ip->item) > 0) {
            $log->command_status = 'notice';
            $log->message = 'Processing found ip addresses for ' . $device->ip;
            $discoveryLogModel->create($log);
            $componentsModel->upsert('ip', $device, $ip->item);
        }

        // create or update the entry in the ip table from non-SNMP data
        // so our 'networks' endpoint and functions can find the device
        if (empty($ip->item)) {
            $log->command_status = 'notice';
            $log->message = 'Processing found ip addresses (non-snmp) for ' . $device->ip;
            $discoveryLogModel->create($log);
            $item = new \StdClass();
            $item->device_id = $device->id;
            $item->ip = $device->ip;
            $item->version = 4;
            $item->mac = '';
            if (!empty($device->mac_address)) {
                $item->mac = (string)strtolower($device->mac_address);
            }
            if (!empty($discovery->subnet) and strpos($discovery->subnet, '/') !== false) {
                $network_details = network_details($discovery->subnet);
                $item->netmask = $network_details->netmask;
                $item->cidr = $network_details->network_slash;
                $item->network = $discovery->subnet;
            } else {
                $network_details = explode('.', $device->ip);
                $item->netmask = '255.255.255.0';
                $item->cidr = '24';
                $item->network = $network_details[0] . '.' .  $network_details[1] . '.' .  $network_details[2] . '.0/24';
            }
            // new special routine as we may already have IPs (from a real audit) but not this particular
            // discovery run, so we don't want to remove these esiting IPs. Special function for this.
            // $parameters = new \StdClass();
            // $parameters->discovery_id = $discovery->id;
            // $parameters->device = $device;
            // $parameters->ip = $item;
            #$CI->m_devices_components->nmap_ip($parameters);
            $componentsModel->upsert('ip', $device, [$item]);
            unset($item);
        }

        // finish off with updating any network IPs that don't have a matching interface
        $componentsModel->updateMissingInterfaces($device->id);

        // insert any modules from SNMP
        if (isset($modules) and is_array($modules) and count($modules) > 0) {
            $log->command_status = 'notice';
            $log->message = 'Processing found modules for ' . $device->ip;
            $discoveryLogModel->create($log);
            $componentsModel->upsert('module', $device, $modules);
        }

        // insert any found virtual machines from SNMP
        if (isset($guests) and is_array($guests) and count($guests) > 0) {
            $log->command_status = 'notice';
            $log->message = 'Processing found VMs for ' . $device->ip;
            $discoveryLogModel->create($log);
            $componentsModel->upsert('vm', $device, $guests);
        }

        // insert any found routes from SNMP
        if (isset($routes) and is_array($routes) and count($routes) > 0) {
            $log->command_status = 'notice';
            $log->message = 'Processing found routes for ' . $device->ip;
            $discoveryLogModel->create($log);
            $componentsModel->upsert('route', $device, $routes);
        }

        // insert any found radio's from SNMP
        if (isset($radio) and is_array($radio) and count($radio) > 0) {
            $log->command_status = 'notice';
            $log->message = 'Processing found radios for ' . $device->ip;
            $discoveryLogModel->create($log);
            $componentsModel->upsert('radio', $device, $radio);
        }

        // insert any found access points from SNMP
        if (isset($access_points) and is_array($access_points) and count($access_points) > 0) {
            $log->command_status = 'notice';
            $log->message = 'Processing found access_points for ' . $device->ip;
            $discoveryLogModel->create($log);
            $componentsModel->upsert('access_point', $device, $access_points);
        }

        // process and store the Nmap data
        $nmap_result = array();
        if (!empty($ip_scan->nmap_ports)) {
            foreach (explode(',', $ip_scan->nmap_ports) as $port) {
                $temp = explode('/', $port);
                $nmap_item = new \StdClass();
                $nmap_item->ip = (string)$device->ip;
                $nmap_item->port = $temp[0];
                $nmap_item->protocol = $temp[1];
                $nmap_item->program = $temp[2];
                if (!empty($nmap_item->port)) {
                    $nmap_result[] = $nmap_item;
                }
                unset($nmap_item);
                unset($temp);
            }
            if (count($nmap_result) > 0) {
                $log->command_status = 'notice';
                $log->message = 'Processing Nmap ports for ' . $device->ip;
                $discoveryLogModel->create($log);
                $componentsModel->upsert('nmap', $device, $nmap_result);
            }
        }

        if ($device->type !== 'computer' and !empty($device->os_version) and !empty($device->os_name)) {
            $sql = "SELECT COUNT(*) AS `count` FROM software WHERE device_id = ?";
            $result = $db->query($sql, [$device->id])->getResult();
            if (intval($result[0]->count) < 2) {
                // We have one or no entries in software - insert this
                $software = new stdCLass();
                $software->name = $device->os_name;
                $software->version = $device->os_version;
                $log->command_status = 'notice';
                $log->message = 'Processing Software OS for ' . $device->ip;
                $discoveryLogModel->create($log);
                $componentsModel->upsert('software', $device, [$software]);
            }
        }

        // Now run our rules to update the device if any match
        $instance->rulesModel->execute(null, intval($discovery->id), 'update', intval($device->id));

        if (empty($credentials_windows) and empty($credentials_ssh) and empty($credentials_snmp)) {
            if ($ip_scan->snmp_status === 'true' or $ip_scan->ssh_status === 'true' or $ip_scan->wmi_status === 'true') {
                $log->command_status = 'warning';
                $log->severity = 5;
                $log->message = 'No valid credentials for ' . $device->ip;
                $log->command_output = 'No valid credentials for ' . $device->ip;
                $discoveryLogModel->create($log);
            } else {
                $log->command_status = 'issue';
                $log->severity = 5;
                $log->message = 'No management protocols for ' . $device->ip;
                $log->command_output = 'No management protocols for ' . $device->ip;
                $discoveryLogModel->create($log);
            }
        }

        $log->ip = $device->ip;
        $log->severity = 7;
        $log->message = '';
        $log->command = '';
        $log->command_output = '';
        $log->command_time_to_execute = '';
        $log->command_status = 'notice';

        // insert a blank to indicate we're finished this part of the discovery
        // if required, the audit scripts will insert their own audit logs
        $sql = "UPDATE audit_log SET `debug` = '' WHERE device_id = ? AND timestamp = ?";
        $db->query($sql, [$device->id, $device->last_seen]);


        if (!empty($device->type)) {
            $log->message = "At IP {$device->ip}, discovery found a device of type '{$device->type}'.";
        } else {
            $log->message = "At IP {$device->ip}, discovery found an unknown device.";
        }
        $discoveryLogModel->create($log);

        // NOTE - The log helper will increase the count in discoveries.ip_discovered_count for us because Collector / Server
        //      - It will match on the message string, so don't change without also changing DiscoveryLogModel
        if (!empty($ip_discovered_count)) {
            $log->message = 'Discovered device at ' . $device->ip;
            $discoveryLogModel->create($log);
        }

        $script_name = '';
        if (!empty($credentials_windows) or ! empty($credentials_ssh)) {
            $os_group = strtolower($device->os_group);
            if (!empty($instance->config->feature_powershell_audit) and $instance->config->feature_powershell_audit === 'y' and $os_group === 'windows') {
                $os_group = 'windows-ps1';
            }
            $temp = $instance->scriptsModel->build(strtolower($os_group));
            if (empty($temp)) {
                $log->command_output = 'Could not retrieve audit script for ' . strtolower($device->os_group) . ', check ' . ROOTPATH . 'other/scripts is writable.';
                $log->command_status = 'issue';
                $log->severity = 4;
                if (php_uname('s') === 'Linux') {
                    $command_string = 'stat ' . ROOTPATH . 'other/scripts';
                    exec($command_string, $output, $return_var);
                    $log->command = $command_string . ' : ' . json_encode($output);
                }
                $discoveryLogModel->create($log);
                $log->command_status = 'notice';
                $log->severity = 7;
            } elseif (is_array($temp)) {
                $audit_script = $temp[0];
                $script_name = $temp[1];
            }
        }

        // Audit Windows using script
        if ($ip_scan->wmi_status === 'true' and ! empty($credentials_windows) and ! empty($audit_script)) {
            $ip_scan->ssh_status = 'false';
            $log->message = 'Starting windows script audit for ' . $device->ip;
            $discoveryLogModel->create($log);
            $destination = 'audit_windows.vbs';
            if (!empty($instance->config->feature_powershell_audit) and $instance->config->feature_powershell_audit === 'y' and strtolower($device->os_group) === 'windows') {
                $destination = 'audit_windows.ps1';
            }
            $output = false;
            if (php_uname('s') === 'Windows NT' and ! empty($instance->config->discovery_use_vintage_service) and $instance->config->discovery_use_vintage_service === 'y') {
                // Windows Server (likely) running on the LocalSystem account.
                // We cannot copy the audit script to the target and then run it,
                // We _must_ run the script locally and use $device->ip as the script target
                // We will loose the ability to retrieve certain items like files, netstat, tasks, etc
                $log->message = 'Running discovery the old way using the code for Apache service account.';
                $discoveryLogModel->create($log);
                if (strpos($credentials_windows->credentials->password, '"') !== false or  strpos($credentials_windows->credentials->username, '"') !== false) {
                    // cscript cannot parse an arguement containing a "
                    $log->message = 'Incompatible credentials for audit script. Cannot use " (double quotes) in a wscript command line attribute.';
                    $log->command_status = 'fail';
                    $log->severity = 4;
                    $discoveryLogModel->create($log);
                    $log->command_status = 'notice';
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
                    $command_string = '%comspec% /c start /b cscript ' . $audit_script . ' strcomputer=' . $device->ip . ' submit_online=n create_file=w struser=' . $domain . $username . ' strpass=' . $credentials_windows->credentials->password . ' debugging=0 system_id=' . $device->id . ' last_seen_by=audit_wmi discovery_id=' . $discovery->id;
                    $log->command = '%comspec% /c start /b cscript ' . $audit_script . ' strcomputer=' . $device->ip . ' submit_online=n create_file=w struser=' . $domain . $username . ' strpass=****** debugging=0 system_id=' . $device->id . ' last_seen_by=audit_wmi discovery_id=' . $discovery->id;
                    $command_start = microtime(true);
                    exec($command_string, $output, $return_var);
                    $command_end = microtime(true);
                    $log->severity = 7;
                    $log->command_time_to_execute = $command_end - $command_start;
                    $log->message = 'Successful attempt to run audit_windows.vbs for ' . $device->ip;
                    $log->command_status = 'success';
                    if ($return_var !== '0') {
                        $log->command_status = 'fail';
                        $log->message = 'Failed attempt to run audit_windows.vbs for ' . $device->ip;
                        $log->severity = 4;
                    }
                    $discoveryLogModel->create($log);
                    $log->severity = 7;
                    if (empty($output)) {
                        $log->severity = 3;
                        $log->command_time_to_execute = '';
                        $log->message = 'No script output from ' . $device->ip . '. Cannot retrieve audit result.';
                        $log->command_status = 'fail';
                        $discoveryLogModel->create($log);
                        $log->severity = 7;
                    }
                }
            } else {
                // Unix or Windows default - Remotely run script on target device
                // Copy the audit script to admin$
                $copy = false;
                if (!empty($instance->config->feature_powershell_audit) and $instance->config->feature_powershell_audit === 'y' and strtolower($device->os_group) === 'windows') {
                    $copy = copy_to_windows($device->ip, $credentials_windows, '\\admin$', $audit_script, 'audit_windows.ps1', $discovery->id);
                } else {
                    $copy = copy_to_windows($device->ip, $credentials_windows, '\\admin$', $audit_script, 'audit_windows.vbs', $discovery->id);
                }
                $output = false;
                if ($copy) {
                    if (!empty($instance->config->feature_powershell_audit) and $instance->config->feature_powershell_audit === 'y' and strtolower($device->os_group) === 'windows') {
                        $command = 'powershell  -executionpolicy bypass -file ' . $device->install_dir . '\\audit_windows.ps1 -submit_online n -create_file y -debugging 1 -last_seen_by audit_wmi -system_id ' . $device->id . ' -discovery_id ' . $discovery->id;
                    } else {
                        $command = 'cscript ' . $device->install_dir . '\\audit_windows.vbs submit_online=n create_file=w debugging=0 self_delete=y last_seen_by=audit_wmi system_id=' . $device->id . ' discovery_id=' . $discovery->id;
                    }
                    $output = execute_windows($device->ip, $credentials_windows, $command, $discovery->id);
                    if (empty($output)) {
                        $log->severity = 3;
                        $log->command_time_to_execute = '';
                        $log->message = 'No script output from ' . $device->ip . '. Cannot retrieve audit result.';
                        $log->command_status = 'fail';
                        $discoveryLogModel->create($log);
                        $log->severity = 7;
                    }
                } else {
                    $log->severity = 3;
                    $log->command_time_to_execute = '';
                    $log->message = 'Could not copy audit script to ' . $device->ip;
                    $log->command_status = 'fail';
                    $discoveryLogModel->create($log);
                    $log->severity = 7;
                }
            }
            $audit_file = false;
            if (!empty($output)) {
                foreach ($output as $line) {
                    if (strpos($line, 'File ') !== false) {
                        $audit_file = trim(str_replace('File ', '', $line));
                        break;
                    }
                }
            }
            if (!empty($audit_file) and !empty($output)) {
                $copy = false;
                if (!empty($instance->config->feature_powershell_audit) and $instance->config->feature_powershell_audit === 'y' and strtolower($device->os_group) === 'windows') {
                    $destination = $filepath . '/scripts/' . $audit_file;
                } else {
                    $temp = explode('\\', $audit_file);
                    unset($audit_file);
                    $audit_file = end($temp);
                    $destination = $filepath . '/scripts/' . $audit_file;
                }
                if (php_uname('s') === 'Windows NT') {
                    $destination = $filepath . '\\scripts\\' . $audit_file;
                }
                if (php_uname('s') === 'Windows NT' and exec('whoami') === 'nt authority\system' and ! empty($instance->config->discovery_use_vintage_service) and $instance->config->discovery_use_vintage_service === 'y') {
                    if (rename($audit_file, $destination)) {
                        $copy = true;
                    }
                } else {
                    if (!empty($instance->config->feature_powershell_audit) and $instance->config->feature_powershell_audit === 'y' and strtolower($device->os_group) === 'windows') {
                        if (stripos($device->os_name, 'server') !== false) {
                            // Servers tend to use c:\windows\syswow64
                            $copy = copy_from_windows($device->ip, $credentials_windows, 'SysWOW64\\' . $audit_file, $destination, $discovery->id);
                        } else {
                            // Clients tend to use c:\windows\system32
                            $copy = copy_from_windows($device->ip, $credentials_windows, 'System32\\' . $audit_file, $destination, $discovery->id);
                        }
                        if (empty($copy)) {
                            // For some reason the copy didn't work, so try the reverse location
                            if (stripos($device->os_name, 'server') !== false) {
                                $copy = copy_from_windows($device->ip, $credentials_windows, 'System32\\' . $audit_file, $destination, $discovery->id);
                            } else {
                                $copy = copy_from_windows($device->ip, $credentials_windows, 'SysWOW64\\' . $audit_file, $destination, $discovery->id);
                            }
                        }
                    } else {
                        $copy = copy_from_windows($device->ip, $credentials_windows, $audit_file, $destination, $discovery->id);
                    }
                }
                if ($copy === true) {
                    $audit_result = file_get_contents($destination);
                    unlink($destination);
                    if (empty($audit_result)) {
                        $log->severity = 3;
                        $log->command_time_to_execute = '';
                        $log->message = 'Could not open audit result (empty file) on localhost for ' . $device->ip . '. Cannot process audit result.';
                        $log->command_output = $destination;
                        $log->command_status = 'fail';
                        $discoveryLogModel->create($log);
                        $log->severity = 7;
                    } else {
                        $ip_audited_count = 1;
                    }
                } else {
                    $log->severity = 3;
                    $log->command_time_to_execute = '';
                    $log->message = 'Could not copy audit result file to localhost for ' . $device->ip . '. Cannot retrieve audit result.';
                    $log->command_status = 'fail';
                    $discoveryLogModel->create($log);
                    $log->severity = 7;
                }
                if (php_uname('s') === 'Windows NT' and exec('whoami') === 'nt authority\system' and ! empty($instance->config->discovery_use_vintage_service) and $instance->config->discovery_use_vintage_service === 'y') {
                    // no need to delete the remote file
                } else {
                    // delete the remote audit result
                    if (!empty($instance->config->feature_powershell_audit) and $instance->config->feature_powershell_audit === 'y' and strtolower($device->os_group) === 'windows') {
                        delete_windows_result($device->ip, $credentials_windows, 'admin$', 'System32\\' . $audit_file, $discovery->id);
                        delete_windows_result($device->ip, $credentials_windows, 'admin$', 'SysWOW64\\' . $audit_file, $discovery->id);
                    } else {
                        delete_windows_result($device->ip, $credentials_windows, 'admin$', end($temp), $discovery->id);
                    }
                }
            } else {
                $log->severity = 3;
                $log->command_time_to_execute = '';
                $log->message = 'Could not find audit result path in script output from ' . $device->ip . '. Cannot retrieve audit result.';
                $log->command_status = 'fail';
                $discoveryLogModel->create($log);
                $log->severity = 7;
            }
        }


        $log->message = '';
        $log->command = '';
        $log->command_output = '';
        $log->command_status = 'notice';
        $log->severity = 7;
        $log->command_time_to_execute = '';

        if (!empty($device->os_family) and ($device->os_family === 'DD-WRT' or $device->os_family === 'LEDE')) {
            $log->message = "IP {$device->ip} is running {$device->os_family}, which will not run our audit_linux.sh script, skipping.";
            $discoveryLogModel->create($log);
        }
        $temp_audit_script = @$audit_script;
        // Audit via SSH
        if ($ip_scan->ssh_status === 'true' and $device->os_family !== 'DD-WRT' and $device->os_family !== 'LEDE' and ! empty($credentials_ssh) and ! empty($audit_script)) {
            $result = '';
            $log->message = 'Starting SSH audit script for ' . $device->ip;
            $discoveryLogModel->create($log);
            // copy the audit script to the target ip
            $destination = !empty($instance->config->discovery_linux_script_directory) ? $instance->config->discovery_linux_script_directory : '/tmp/';
            if (!empty($destination) and substr($destination, -1) !== '/') {
                $destination .= '/';
            }
            if ($device->os_group === 'Windows') {
                $destination = '';
            }
            $destination .= $script_name;
            $parameters = new \StdClass();
            $parameters->ip = $device->ip;
            $parameters->credentials = $credentials_ssh;
            $parameters->source = $audit_script;
            $parameters->destination = $destination;
            $parameters->discovery_id = $discovery->id;
            $parameters->ssh_port = $ip_scan->ssh_port;
            $temp = scp($parameters);
            if (! $temp) {
                $audit_script = '';
                $log->severity = 3;
                $log->message = 'Could not SCP audit script to ' . $device->ip . ' at ' . $destination;
                $log->command_status = 'fail';
                $discoveryLogModel->create($log);
                $log->severity = 7;
                $log->message = '';
                $log->command_status = 'notice';
            } else {
                if ($device->os_group !== 'Windows') {
                    // Successfully copied the audit script, now chmod it
                    $command = 'chmod ' . $instance->config->discovery_linux_script_permissions . ' ' . $destination;
                    // No use testing for a result as a chmod produces no output
                    $parameters = new \StdClass();
                    $parameters->discovery_id = $discovery->id;
                    $parameters->ip = $device->ip;
                    $parameters->credentials = $credentials_ssh;
                    $parameters->command = $command;
                    $parameters->ssh_port = $ip_scan->ssh_port;
                    $test = ssh_command($parameters);
                    if ($test === false) {
                        $log->severity = 3;
                        $log->message = 'Could not chmod script on ' . $device->ip;
                        $log->command_status = 'fail';
                        $discoveryLogModel->create($log);
                        $log->severity = 7;
                        $log->message = '';
                        $log->command_status = 'notice';
                        $audit_script = '';
                    }
                }
            }
            unset($destination);
            if ($audit_script !== '') {
                $command = $instance->config->discovery_linux_script_directory . $script_name . ' submit_online=n create_file=y debugging=1 self_delete=y system_id=' . $device->id . ' last_seen_by=audit_ssh discovery_id=' . $discovery->id;
                $log->message = 'Running audit using ' . $credentials_ssh->credentials->username . '.';
                $log->command_output = '';
                $log->command_status = 'notice';
                if ($credentials_ssh->credentials->username === 'root') {
                    $log->message = 'Running audit using root user.';
                } elseif (!empty($device->which_sudo) and !empty($device->use_sudo) and $device->use_sudo) {
                    $command = "{$device->which_sudo} " . $command;
                    $log->message = 'Running audit using ' .  $credentials_ssh->credentials->username . ' with sudo, as per config.';
                } elseif (!empty($device->which_sudo) and (empty($device->use_sudo) or !$device->use_sudo)) {
                    $log->message = 'Running audit using ' .  $credentials_ssh->credentials->username . ' without sudo, as sudo attempt failed.';
                } elseif (empty($device->which_sudo)) {
                    $log->message = 'Running audit using ' . $credentials_ssh->credentials->username . ' as sudo not present.';
                }
                if ($device->os_group === 'Windows') {
                    if (!empty($instance->config->feature_powershell_audit) and $instance->config->feature_powershell_audit === 'y' and strtolower($device->os_group) === 'windows') {
                        $command = 'powershell -executionpolicy bypass -file ' . $script_name . ' -submit_online n -create_file y -debugging 1 -system_id ' . $device->id . ' -last_seen_by audit_ssh -discovery_id ' . $discovery->id;
                    } else {
                        $command = 'cscript ' . $script_name . ' submit_online=n create_file=y debugging=1 self_delete=y system_id=' . $device->id . ' last_seen_by=audit_ssh discovery_id=' . $discovery->id;
                    }
                }
                $log->command = $command;
                $discoveryLogModel->create($log);
                $parameters = new \StdClass();
                $parameters->discovery_id = $discovery->id;
                $parameters->ip = $device->ip;
                $parameters->credentials = $credentials_ssh;
                $parameters->command = $command;
                $parameters->ssh_port = $ip_scan->ssh_port;
                $result = ssh_command($parameters);
            } else {
                // $log->severity = 3;
                // $log->message = 'No audit script for ' . $device->ip;
                // $log->command_status = 'fail';
                // $discoveryLogModel->create($log);
                // $log->severity = 7;
                // $log->message = '';
                // $log->command_status = 'notice';
            }
            $audit_result = '';
            if ($audit_script !== '' and !empty($result) and gettype($result) === 'array') {
                $audit_file = '';
                foreach ($result as $line) {
                    if (strpos($line, 'File  ') !== false) {
                        $audit_file = $line;
                    }
                }
                if ($audit_file === '') {
                    $log->severity = 4;
                    $log->message = 'No audit file returned in output.';
                    $log->command_status = 'fail';
                    $discoveryLogModel->create($log);
                    $log->severity = 7;
                    $log->message = '';
                    $log->command_status = 'notice';
                } else {
                    $audit_file = trim(str_replace('File  ', '', $audit_file));
                    if (strpos($audit_file, '//') === 0) {
                        $audit_file = str_replace('//', '/', $audit_file);
                    }
                    $temp = explode('/', $audit_file);
                    $destination = $filepath . '/scripts/' . end($temp);
                    if (php_uname('s') === 'Windows NT') {
                        $destination = $filepath . '\\scripts\\' . end($temp);
                    }
                    $parameters = new \StdClass();
                    $parameters->ip = $device->ip;
                    $parameters->credentials = $credentials_ssh;
                    $parameters->source = $audit_file;
                    $parameters->destination = $destination;
                    $parameters->discovery_id = $discovery->id;
                    $parameters->ssh_port = $ip_scan->ssh_port;
                    // Allow 20 seconds to copy the file
                    $timeout = $instance->config->discovery_ssh_timeout;
                    $instance->config->discovery_ssh_timeout = 20;
                    $temp = scp_get($parameters);
                    $instance->config->discovery_ssh_timeout = $timeout;
                    if ($temp) {
                        $audit_result = file_get_contents($destination);
                        if (empty($audit_result)) {
                            $log->severity = 5;
                            $log->message = 'Could not read audit result file.';
                            $log->command_status = 'fail';
                            $log->command = "file_get_contents('{$destination}')";
                            $log->command_output = '';
                            $discoveryLogModel->create($log);
                            $log->severity = 7;
                            $log->message = '';
                            $log->command_status = 'notice';
                            $log->command = '';
                            $log->command_output = '';
                        }
                    } else {
                        $log->severity = 5;
                        $log->message = 'Could not SCP GET to ' . $destination;
                        $log->command_output = 'Could not SCP GET to ' . $destination;
                        $log->command_status = 'issue';
                        $discoveryLogModel->create($log);
                        $log->severity = 7;
                        $log->message = '';
                        $log->command_status = 'notice';
                    }
                    // Delete the remote file
                    $command = 'rm ' . $audit_file;
                    if ($device->os_group === 'Windows') {
                        $command = 'del ' . $audit_file;
                    }
                    $temp = 0;
                    if (!empty($device->which_sudo) and ! empty($device->use_sudo) and $credentials_ssh->credentials->username !== 'root') {
                        // add sudo, we need this if we have run the audit using sudo
                        $command = "{$device->which_sudo} " . $command;
                        // Allow 10 seconds to run the command
                        $temp = intval($instance->config->discovery_ssh_timeout);
                        $instance->config->discovery_ssh_timeout = 5;
                    }
                    $parameters = new \StdClass();
                    $parameters->discovery_id = $discovery->id;
                    $parameters->ip = $device->ip;
                    $parameters->credentials = $credentials_ssh;
                    $parameters->command = $command;
                    $parameters->ssh_port = $ip_scan->ssh_port;
                    ssh_command($parameters);
                    if ($temp > 0) {
                        $instance->config->discovery_ssh_timeout = $temp;
                    }
                }
            }
        }

        // Delete the local audit script if it's not a default script
        // if (!empty($audit_script) and strpos($audit_script, 'scripts') !== false) {
        if ($temp_audit_script) {
            $log->severity = 7;
            $log->message = 'Attempt to delete temp audit script succeeded';
            $log->command_status = 'notice';
            $log->command = "unlink('" . $temp_audit_script . "')";
            $test = false;
            if ($instance->config->server_os === 'Windows NT') {
                $temp = explode(DIRECTORY_SEPARATOR, $temp_audit_script);
                $filename = end($temp);
                try {
                    unlink(ROOTPATH . 'other' . DIRECTORY_SEPARATOR . 'scripts' . DIRECTORY_SEPARATOR . $filename);
                } catch (Exception $error) {
                    $log->severity = 4;
                    $log->message = 'Could not delete temp audit script';
                    $log->command_status = 'fail';
                    $log->command_output = json_encode($error);
                }
            }
            if ($instance->config->server_os !== 'Windows NT') {
                try {
                    unlink($temp_audit_script);
                } catch (Exception $error) {
                    $log->severity = 4;
                    $log->message = 'Could not delete temp audit script';
                    $log->command_status = 'fail';
                    $log->command_output = json_encode($error);
                }
            }
            $discoveryLogModel->create($log);
            $log->severity = 7;
            $log->message = '';
            $log->command_status = 'notice';
            $log->command = '';
            unset($temp_audit_script);
        }

        $log->device_id = @$device->id;
        $log->ip = $device->ip;
        $log->file = 'discoveries_helper';

        $audit = false;
        if (!empty($audit_result)) {
            $log->message = 'Converting audit result';
            $discoveryLogModel->create($log);
            $audit_result = str_replace('data=<?xml version="1.0" encoding="UTF-8"?>', '<?xml version="1.0" encoding="UTF-8"?>', $audit_result);
            $audit = audit_convert($audit_result);
            if (!empty($audit)) {
                $ip_audited_count = 1;
            }
        }

        // Delete the local audit result file
        if (!empty($audit_result)) {
            if (!empty($audit)) {
                if (!empty($destination)) {
                    $log->severity = 7;
                    $log->message = 'Delete audit result from filesystem.';
                    $log->command_status = 'success';
                    $log->command = "unlink('" . $destination . "')";
                    $log->command_output = '';
                    if (is_file($destination) and is_writable($destination)) {
                        try {
                            unlink($destination);
                        } catch (Exception $error) {
                            $log->severity = 4;
                            $log->message = 'Could not delete audit result - ' . $destination;
                            $log->command_status = 'fail';
                            $log->command_output = json_encode($error);
                        }
                    }
                    $discoveryLogModel->create($log);
                }
            } else {
                $log->severity = 5;
                $log->message = "Audit result left on filesystem at {$destination}, please check.";
                $log->command_status = 'fail';
                $log->command = '';
                $log->command_output = '';
                $discoveryLogModel->create($log);
            }
        }
        $log->severity = 7;
        $log->message = '';
        $log->command_status = 'notice';
        $log->command = '';
        $log->command_output = '';

        if (!empty($audit)) {
            $log->message = 'Formatting system section of audit result';
            $discoveryLogModel->create($log);
            $parameters = new \StdClass();
            $parameters->discovery_id = $discovery->id;
            #$parameters->input = $audit;
            $parameters->input = $audit->system;
            $parameters->ip = $device->ip;
            $audit->system = audit_format_system($parameters);
            // We don't care what the audit result says is the "ip", we KNOW it's the IP we just used to discover this device
            $audit->system->ip = $device->ip;
        } elseif (!empty($audit_result)) {
            log_message('error', 'Something went wrong - audit_result set, but audit is empty.');
        }

        // Run our rules to update the device attributes
        if (!empty($audit)) {
            log_message('debug', 'rulesModel::execute::return because audit script result exists for ' . $device->ip);
            $instance->rulesModel->execute($audit->system, intval($discovery->id), 'return', intval($audit->system->id));
        } else {
            log_message('debug', 'rulesModel::execute::update because audit script result does not exist for ' . $device->ip);
            $instance->rulesModel->execute($device, intval($discovery->id), 'update');
        }

        if (!empty($audit)) {
            log_message('debug', 'Matching device from audit result');
            $log->message = 'Matching device from audit result';
            $discoveryLogModel->create($log);
            $audit_device = deviceMatch($audit->system, intval($discovery->id), $discovery->match_options);
            $audit->system->discovery_id = $discovery->id;
            if (!empty($audit->system->id)) {
                $log->device_id = $audit->system->id;
            }
            if (empty($audit_device) and !empty($audit->system->id)) {
                $audit_device = intval($audit->system->id);
            }
            if (!empty($audit_device) and !empty($audit->system->id) and intval($audit_device) !== intval($audit->system->id)) {
                // We delete this original system as likely with limited data (from
                // nmap and/or snmp and/or SSH) we couldn't match an existing system
                // Now we have an actual audit result with plenty of data
                // we have found a match and it's not the original
                log_message('debug', 'Device Id provided differs from Device Id found for ' . $audit->system->hostname);
                $sql = 'DELETE FROM devices WHERE id = ?';
                $query = $db->query($sql, [$audit->system->id]);
                $log->device_id = $audit_device;
                $log->message = 'Device Id provided differs from Device Id found for ' . $audit->system->hostname;
                $discoveryLogModel->create($log);
            }
            $audit->system->id = $audit_device;
            if (empty($audit_device)) {
                // insert a new system
                # Set the device org_id based on this discovery
                if (!empty($discovery->devices_assigned_to_org)) {
                    $audit->system->org_id = $discovery->devices_assigned_to_org;
                }
                if (!empty($discovery->devices_assigned_to_location)) {
                    $audit->system->location_id = $discovery->devices_assigned_to_location;
                }
                log_message('debug', 'CREATE entry for ' . @$audit->system->name . ' (' . @$audit->system->ip . ')');
                $audit->system->id = $instance->devicesModel->create($audit->system);
                $log->message = 'CREATE entry for ' . @$audit->system->name . ' (' . @$audit->system->ip . '), System ID ' . $audit->system->id;
                $discoveryLogModel->create($log);
                $audit->system->original_last_seen = '';
            } else {
                // update an existing system
                log_message('debug', 'UPDATE entry for ' . @$audit->system->name . ' (' . @$audit->system->ip . '), System ID ' . $audit->system->id);
                $log->message = 'UPDATE entry for ' . @$audit->system->name . ' (' . @$audit->system->ip . '), System ID ' . $audit->system->id;
                $discoveryLogModel->create($log);
                $instance->devicesModel->update($audit->system->id, $audit->system);
            }
            $log->device_id = intval($audit->system->id);
            $device->id = intval($audit->system->id);
        }

        $sql = 'UPDATE `discovery_log` SET device_id = ? WHERE discovery_id = ? and ip = ?';
        $query = $db->query($sql, [$log->device_id, $discovery->id, ip_address_from_db($device->ip)]);

        if ($audit) {
            $script_version = '';
            if (!empty($audit->system->script_version)) {
                $script_version = $audit->system->script_version;
            }
            $sql = "INSERT INTO audit_log VALUES (null, ?, '', ?, ?, '', '', ?, ?)";
            $db->query($sql, [$audit->system->id, $audit->system->last_seen_by, $audit->system->audits_ip, $audit->system->last_seen, $script_version]);
        }

        if ($audit) {
            foreach ($audit as $key => $value) {
                if ($key !== 'system' and $key !== 'audit_wmi_fail' and $key !== 'dns') {
                    $instance->componentsModel->upsert($key, $audit->system, $value);
                }
            }
        }

        if ($audit) {
            if (!empty($audit->audit_wmi_fail)) {
                $sql = "UPDATE audit_log SET `debug` = 'audit_wmi_fail' WHERE device_id = ? AND timestamp = ?";
                $db->query($sql, [$device->id, $device->last_seen]);
                $sql = "UPDATE audit_log SET `wmi_fails` = $audit->audit_wmi_fail WHERE device_id = ? AND timestamp = ?";
                $db->query($sql, [$device->id, $device->last_seen]);
            }
        }

        // Generate any DNS entries required - only if this is a collector or the audit is NOT from a collector
        // TODO
        // if (!empty($instance->config->servers) or empty($audit->system->collector_uuid)) {
        //     if (!empty($audit->system->id)) {
        //         $dns_entries = $CI->m_devices_components->create_dns_entries((int)$audit->system->id);
        //     } elseif (!empty($device->id)) {
        //         $dns_entries = $CI->m_devices_components->create_dns_entries((int)$device->id);
        //     }
        //     if (!empty($audit->dns) and count($audit->dns) > 0) {
        //         foreach ($audit->dns as $item) {
        //             if (!empty($item->ip) and ! empty($item->name) and ! empty($item->fqdn)) {
        //                 $dns_entries[] = $item;
        //             }
        //         }
        //     }
        //     unset($item);
        //     if (!empty($dns_entries) and count($dns_entries) > 0) {
        //         $parameters = new \StdClass();
        //         $parameters->table = 'dns';
        //         $parameters->input = $dns_entries;
        //         $parameters->discovery_id = $discovery->id;
        //         if (!empty($audit->system->id)) {
        //             $parameters->details = $audit->system;
        //             $CI->m_devices_components->process_component($parameters);
        //         } elseif (!empty($device->id)) {
        //             $parameters->details = $device;
        //             $CI->m_devices_components->process_component($parameters);
        //         }
        //     }
        //     unset($dns_entries);
        // }

        // If we are configured as a collector, forward the information to the server
        if (!empty($instance->config->servers)) {
            $server = $instance->config->servers;
            $log->message = 'Sending result to ' . $server->host . ' because this server is a collector. Device:' . $device->name;
            $discoveryLogModel->create($log);

            $device_json = new \StdClass();
            $device_json->system = new \StdClass();
            foreach ($device as $key => $value) {
                if ($key !== 'id' and !empty($value)) {
                    $device_json->system->{$key} = $value;
                }
            }
            $device_json->system->collector_uuid = $instance->config->uuid;
            if (count($nmap_result) > 0) {
                $device_json->nmap = array();
                foreach ($nmap_result as $item) {
                    unset($item->device_id);
                    $device_json->nmap[] = $item;
                }
            }
            if (isset($guests) and is_countable($guests) and count($guests) > 0) {
                $device_json->vm = array();
                foreach ($guests as $item) {
                    unset($item->device_id);
                    $device_json->vm[] = $item;
                }
            }
            if (isset($modules) and is_countable($modules) and count($modules) > 0) {
                $device_json->module = array();
                foreach ($modules as $item) {
                    unset($item->device_id);
                    $device_json->module[] = $item;
                }
            }
            if (!empty($ip->item) and is_array($ip->item) and count($ip->item) > 0) {
                $device_json->ip = array();
                foreach ($ip->item as $item) {
                    unset($item->device_id);
                    $device_json->ip[] = $item;
                }
            }
            if (isset($network_interfaces) and is_countable($network_interfaces) and count($network_interfaces) > 0) {
                $device_json->network = array();
                foreach ($network_interfaces as $item) {
                    unset($item->device_id);
                    $device_json->network[] = $item;
                }
            }
            if (!empty($software)) {
                $device_json->software = array();
                $device_json->software[] = $software;
            }
            if (!empty($audit)) {
                foreach ($audit as $key => $value) {
                    if ($key !== 'system' and is_countable($value) and count($value) > 0) {
                        unset($device_json->{$key});
                        $device_json->{$key} = array();
                        foreach ($value as $item) {
                            unset($item->device_id);
                            $device_json->{$key}[] = $item;
                        }
                    }
                }
                foreach ($audit->system as $key => $value) {
                    if ($key !== 'id' and !empty($value)) {
                        $device_json->system->{$key} = $value;
                    }
                }
            }
            unset($device_json->system->original_last_seen_by);
            unset($device_json->system->original_last_seen);
            unset($device_json->system->id);
            unset($device_json->system->first_seen);
            $device_json->system->discovery_id = $discovery->id;
            if (!empty($instance->config->servers->type) and $instance->config->servers->type === 'stand-alone') {
                unset($device_json->system->discovery_id);
            }
            $device_json = json_encode($device_json);

            $url = $server->host . $server->community . '/index.php/input/devices';
            $data = array('data' => $device_json);
            // We must use the key 'http' even if we send the request to https://...
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                ),
                'ssl' => array (
                    'verify_peer' => false,
                    'verify_peer_name' => false
                )
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            if ($result === false) {
                // error
                $log->severity = 4;
                $log->message = 'Could not send result to ' . $url . ' - please check with your server administrator.';
                $log->device_id = $device->id;
                $discoveryLogModel->create($log);
                $log->severity = 7;
                log_message('error', 'Could not send result to ' . $url);
            } else {
                // success
                $log->severity = 7;
                $log->message = 'Result sent to ' . $server->host . '.';
                $log->device_id = $device->id;
                $discoveryLogModel->create($log);
                log_message('debug', 'Result sent to ' . $server->host . '.');
            }
        }

        // NOTE - The log helper will increase the count in discoveries.ip_discovered_count for us because Collector / Server
        //      - It will match on the message string, so don't change without also changing log_helper
        if (!empty($ip_audited_count)) {
            $log->message = 'Audited device at ' . $device->ip;
            $discoveryLogModel->create($log);
        }

        $instance->devicesModel->setIdentification($device->id);

        $log->command = 'Peak Memory';
        $log->command_output = round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB';
        $log->command_status = 'device complete';
        $log->command_time_to_execute = microtime(true)  - $start;
        $log->message = 'IP Audit finish on device ' . ip_address_from_db($device->ip);
        $log->device_id = $device->id;
        $log->ip = ip_address_from_db($device->ip);
        $discoveryLogModel->create($log);

        $log->command = '';
        $log->command_output = '';
        $log->command_status = '';
        $log->command_time_to_execute = '';
        $log->message = '';

        // Add IPs to scan if we are of type 'seed'
        if ($discovery->type === 'seed' and !empty($ips_found)) {
            $log->severity = 7;
            $log->message = 'IPs checked.';
            $log->command_output = json_encode($ips_found);
            $log->function = 'ip_audit';
            $discoveryLogModel->create($log);

            // Lower case all MAC addresses
            $ips_found = array_change_key_case($ips_found, CASE_LOWER);
            // Only need one unique IP
            $ips_found = array_unique($ips_found);

            // define our subnet
            $discovery_network = network_details($discovery->subnet);
            $discovery_network->host_min = ip_address_to_db($discovery_network->host_min);
            $discovery_network->host_max = ip_address_to_db($discovery_network->host_max);
            $sql = "SELECT `ip` FROM `ip` WHERE `device_id` = ? AND `current` = 'y'";
            $device_ips = $db->query($sql, [$device->id])->getResult();
            foreach ($ips_found as $key => $value) {
                $testip = ip_address_to_db($value);
                $sql = "SELECT count(*) AS `count` FROM discovery_log WHERE discovery_id = ? and ip = ?";
                $result = $db->query($sql, [$discovery->id, $value])->getResult();
                $log->ip = $device->ip;
                if (empty($result[0]->count)) {
                    foreach ($device_ips as $device_ip) {
                        // NOTE - we store the IPs in the DB padded
                        if ($device_ip->ip === $testip) {
                            $log->severity = 7;
                            $log->message = 'IP ' . $value . ' detected on device, but not adding to device list as this an IP on this device.';
                            $log->command_output = 'IP ' . $value . ' found on device ' . $device->ip;
                            $log->function = 'ip_audit';
                            $discoveryLogModel->create($log);
                            $value = '';
                        }
                    }
                    if (!empty($value) and $device->ip !== $value) {
                        // Only allow Private IP address space
                        $private = is_private_ip($value);
                        if ($discovery->seed_restrict_to_private === 'y' and $private === false) {
                            $log->severity = 7;
                            $log->message = 'IP ' . $value . ' detected, but not adding to device list as this is not a private address.';
                            $log->command_output = 'IP ' . $value . ' found on device ' . $device->ip;
                            $log->function = 'ip_audit';
                            $discoveryLogModel->create($log);
                        } elseif ($discovery->seed_restrict_to_subnet === 'y' and ($testip < $discovery_network->host_min or $testip > $discovery_network->host_max)) {
                            $log->severity = 7;
                            $log->message = 'IP ' . $value . ' detected, but not adding to device list as this is not in the discovery subnet.';
                            $log->command_output = 'IP ' . $value . ' found on device ' . $device->ip;
                            $log->function = 'ip_audit';
                            $discoveryLogModel->create($log);
                        } else {
                            $log->severity = 7;
                            $temp_device_id = @$log->device_id;
                            $log->device_id = '';
                            $log->ip = $value;
                            $log->message = "IP {$value} responding, adding to device list.";
                            $log->command_output = 'IP ' . $value . ' found on device ' . $device->ip;
                            $log->function = 'update_responding';
                            $discoveryLogModel->create($log);
                            $log->device_id = $temp_device_id;
                            unset($temp_device_id);
                            // Update our discoveries entry
                            $sql = "UPDATE discoveries SET `ip_all_count` = `ip_all_count` + 1, `ip_responding_count` = `ip_responding_count` + 1 WHERE id = ?";
                            $query = $db->query($sql, [$discovery->id]);
                            // create our new queue item
                            $item = new \StdClass();
                            $item->ip = $value;
                            $item->discovery_id = $discovery->id;
                            $item->mac_address = @$key;
                            $details = new \stdClass();
                            $details->details = json_encode($item);
                            $details->type = 'ip_scan';
                            unset($item);
                            $instance->queueModel->create($details);
                        }
                    }
                } else {
                    $log->severity = 7;
                    $log->message = 'IP ' . $value . ' detected, but not adding to device list as already discovered.';
                    $log->command_output = 'IP ' . $value . ' found on device ' . $device->ip;
                    $log->function = 'ip_audit';
                    $discoveryLogModel->create($log);
                }
            }
        }
        discovery_check_finished(intval($discovery->id));
    }
}

if (! function_exists('discovery_check_finished')) {
    /**
     * [discover_ad description]
     * @param  int $id the discovery ID
     */
    function discovery_check_finished(int $id)
    {
        $log = new \StdClass();
        $log->command_status = 'notice';
        $log->discovery_id = $id;
        $log->file = 'discoveries_helper';
        $log->function = 'discovery_check_finished';
        $log->ip = '127.0.0.1';
        $log->message = 'Checking if discovery is finished.';
        $log->command = 'checking sql';
        $log->command_status = 'yes';
        $log->pid = getmypid();
        $log->severity = 7;

        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $db = db_connect();

        if (!empty($id)) {
            // Check if this discovery is complete and set status if so
            $sql = "SELECT COUNT(*) AS `count` FROM `discovery_log` WHERE `discovery_id` = ? and `command_status` = 'device complete'";
            $query = $db->query($sql, [$id]);
            $result = $query->getResult();
            if (!empty($result[0]->count)) {
                $count = intval($result[0]->count);
                $sql = 'SELECT `name`, `ip_responding_count`, `status` FROM `discoveries` WHERE `id` = ?';
                $result = $db->query($sql, [$id])->getResult();
                $device_count = intval($result[0]->ip_responding_count);
                $status = $result[0]->status;
                if ($count >= $device_count and $status !== 'complete') {
                    // NOTE - the log_helper will mark this in the database as complete for us, think Collector / Server
                    $log->discovery_id = $id;
                    $log->message = 'Discovery has finished.';
                    $log->command = '';
                    $log->command_output = '';
                    $log->command_status = 'finished';
                    $log->ip = '127.0.0.1';
                    unset($log->device_id);
                    $discoveryLogModel->create($log);
                    // If we are a collector and the discovery is an instant - delete it locally
                    $instance = & get_instance();
                    if (!empty($instance->config->servers) and $instance->config->servers->type === 'collector') {
                        log_message('info', 'Deleting discovery named: ' . $result[0]->name);
                        $sql = "DELETE FROM `discoveries` WHERE `id` = ?";
                        $db->query($sql, [$id]);
                    }
                }
            }
        } else {
            // Check if any discoveries are complete and set status if so
            $sql = 'SELECT discoveries.id, discoveries.ip_responding_count, discoveries.status, COUNT(discovery_log.id) AS `count` FROM `discoveries` LEFT JOIN `discovery_log` ON discoveries.id = discovery_log.discovery_id WHERE `command_status` = "device complete" GROUP BY discoveries.id';
            $query = $db->query($sql);
            $result = $query->getResult();
            foreach ($result as $discovery) {
                if (intval($discovery->ip_responding_count) === intval($discovery->count) and $discovery->status !== 'complete') {
                    // NOTE - the log_helper will mark this in the database as complete for us, think Collector / Server
                    $log->discovery_id = $id;
                    $log->message = 'Discovery has finished.';
                    $log->command = '';
                    $log->command_output = '';
                    $log->command_status = 'finished';
                    $log->ip = '127.0.0.1';
                    unset($log->device_id);
                    $discoveryLogModel->create($log);
                }
            }
        }
        return;
    }
}

if (! function_exists('discover_ad')) {
    /**
     * [discover_ad description]
     * @param  object $queue_item [description]
     * @return bool             [description]
     */
    function discover_ad($queue_item = null)
    {
        if (empty($queue_item)) {
            return false;
        }
        $start = microtime(true);
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $discoveriesModel = new \App\Models\DiscoveriesModel();
        $instance = & get_instance();
        $db = db_connect();

        $discovery_id = intval($queue_item->discovery_id);
        $discovery = $discoveriesModel->readForDiscovery($discovery_id);
        if (empty($discovery)) {
            return false;
        }
        $discovery = $discovery[0];

        $log = new \StdClass();
        $log->discovery_id = $discovery_id;
        $log->command_status = 'start';
        $log->message = 'Starting discovery for ' . $discovery->name;
        $log->ip = '127.0.0.1';
        $log->severity = 6;
        $discoveryLogModel->create($log);
        $log->command_status = 'notice';

        $sql = "UPDATE `discoveries` SET `status` = 'running', `ip_all_count` = 0, `ip_responding_count` = 0, `ip_scanned_count` = 0, `ip_discovered_count` = 0, `ip_audited_count` = 0, `last_run` = NOW() WHERE id = ?";
        $db->query($sql, [$discovery_id]);

        // We need to get the Org Children of this particular discovery run
        $orgs = $instance->orgsModel->getChildren(intval($discovery->org_id));
        $orgs[] = $discovery->org_id;
        $orgs = implode(',', $orgs);

        // Stored credential sets
        $credentials = $instance->credentialsModel->listUser([], explode(',', $orgs));
        // get the list of subnets from AD
        // TODO - make the below able to use LDAPS as well as LDAP
        $ldapuri = 'ldap://' . $discovery->ad_server;
        $error_reporting = error_reporting();
        error_reporting(0);
        $ldapconn = @ldap_connect($ldapuri);
        error_reporting($error_reporting);
        unset($error_reporting);
        if (! $ldapconn) {
            // log the failed attempt to connect to AD
            $log->severity = 4;
            $log->details = 'Could not connect to AD ' . $discovery->ad_domain . ' at ' . $discovery->ad_server;
            $log->command_status = 'fail';
            $discoveryLogModel->create($log);
            return false;
        }
        // successful connect to AD, now try to bind using the credentials
        ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);
        $bind = false;
        foreach ($credentials as $credential) {
            if ($credential->attributes->type === 'windows') {
                if ($bind = @ldap_bind($ldapconn, $credential->attributes->credentials->username, $credential->attributes->credentials->password)) {
                    $log->severity = 7;
                    $log->message = 'Successful bind to AD using ' . $credential->attributes->name;
                    $log->command_status = 'success';
                    $discoveryLogModel->create($log);
                    $base_dn = 'CN=Subnets,CN=Sites,CN=Configuration,dc=' . implode(', dc=', explode('.', $discovery->ad_domain));
                    $filter = '(&(objectclass=*))';
                    $justthese = array('distinguishedName', 'name', 'siteobject');
                    $search_result = ldap_search($ldapconn, $base_dn, $filter, $justthese);
                    $info = ldap_get_entries($ldapconn, $search_result);
                    if (empty($info)) {
                        $log->message = 'Could not Retrieve subnets from ' . $discovery->ad_domain . ' on ' . $discovery->ad_server . ' using ' . $credential->attributes->name;
                        $log->severity = 6;
                        $log->command_output = '';
                        $log->command_status = 'fail';
                        $discoveryLogModel->create($log);
                    } else {
                        $log->severity = 7;
                        $log->message = 'Retrieved subnets from ' . $discovery->ad_domain . ' on ' . $discovery->ad_server;
                        $log->command_status = 'success';
                        $discoveryLogModel->create($log);
                        break;
                    }
                } else {
                    $log->severity = 7;
                    $log->message = 'Could not bind to AD using ' . $credential->attributes->name;
                    $log->command_status = 'warning';
                    $discoveryLogModel->create($log);
                    $bind = false;
                }
            }
        }
        if ($bind === false or empty($info)) {
            $log->severity = 5;
            $log->command_status = 'fail';
            $log->message = 'Could not bind to AD ' . $discovery->ad_domain . ' at ' . $discovery->ad_server;
            $discoveryLogModel->create($log);
            return false;
        }
        foreach ($info as $subnet) {
            $log->command_status = 'notice';
            if (!empty($subnet['name'][0]) and $subnet['name'][0] !== 'Subnets') {
                unset($network);
                $network = new \StdClass();
                $network->org_id = intval($discovery->org_id);
                if (!empty($discovery->devices_assigned_to_org)) {
                    $network->org_id = intval($discovery->devices_assigned_to_org);
                }
                $network->location_id = 1;
                if (!empty($discovery->devices_assigned_to_location)) {
                    $network->location_id = intval($discovery->devices_assigned_to_location);
                }
                if (!empty($subnet['siteobject'][0])) {
                    $temp = explode(',', $subnet['siteobject'][0]);
                    $temp_name = explode('=', $temp[0]);
                    $name = $temp_name[1] . ' - ';
                } else {
                    $name = '';
                }
                $network->name = $name . $subnet['name'][0];
                $network->network = $subnet['name'][0];
                $network->description = @$subnet['description'][0];
                if (!empty($subnet['location'][0])) {
                    $network->description .= ' (' . $subnet['location'][0] . ')';
                }
                $log->message = 'Upserting network - ' . $network->name;
                $discoveryLogModel->create($log);
                $instance->networksModel->upsert($network);

                $ad_discovery = new \StdClass();
                $ad_discovery->name = $network->name;
                $ad_discovery->org_id = $discovery->org_id;
                $ad_discovery->type = 'subnet';
                $ad_discovery->devices_assigned_to_org = $discovery->devices_assigned_to_org;
                $ad_discovery->devices_assigned_to_location = $discovery->devices_assigned_to_location;
                $ad_discovery->scan_options = $discovery->scan_options;
                $ad_discovery->match_options = $discovery->match_options;
                $ad_discovery->subnet = $subnet['name'][0];

                $sql = "SELECT * FROM discoveries WHERE name = ? and org_id = ? and description = 'Subnet - " . $subnet['name'][0] . "'";
                $result = $db->query($sql, [$ad_discovery->name, intval($discovery->org_id)])->getResult();
                // TODO - JSON decode this and test the subnet. We have other items stored inside 'other' (nmap options, etc).
                $this_id = false;
                if (empty($result)) {
                    $log->message = 'Creating and executing discovery on subnet ' . $network->name;
                    $discoveryLogModel->create($log);
                    $this_id = $instance->discoveriesModel->create($ad_discovery);
                } else {
                    $this_id = $result[0]->id;
                    $log->message = 'Discovery for ' . $network->name . ' exists, running.';
                    $discoveryLogModel->create($log);
                }
                if (!empty($this_id)) {
                    // put the discovery into the queue
                    $details = new \StdClass();
                    $details->details = new \stdClass();
                    $details->details->name = $network->name;
                    $details->details->type = 'subnet';
                    $details->details->org_id =  $discovery->org_id;
                    $details->details->discovery_id = $this_id;
                    $details->type = 'subnet';
                    if ($instance->queueModel->create($details)) {
                        $log->command_status = 'success';
                        $log->message = 'Discovery ' . $network->name . ' placed in queue for execution.';
                    } else {
                        $log->command_status = 'failed';
                        $log->message = 'Discovery ' . $network->name . ' could not be placed in the queue. See the log for more details.';
                        $log->severity = 4;
                    }
                    $log->command = '';
                    $log->command_time_to_execute = microtime(true) - $start;
                    $discoveryLogModel->create($log);
                    $log->severity = 7;
                }
            }
        }
        // NOTE - the log_helper will mark this in the database as complete for us, think Collector / Server
        $log->severity = 6;
        $log->discovery_id = intval($discovery_id);
        $log->message = 'Discovery has finished.';
        $log->command = '';
        $log->command_output = '';
        $log->command_status = 'finished';
        $log->command_time_to_execute = gmdate('H:i:s', intval(microtime(true) - $start));
        $log->ip = '127.0.0.1';
        $discoveryLogModel->create($log);
        return true;
    }
}
// End of file discoveries_helper.php
// Location: ./helpers/discoveries_helper.php
