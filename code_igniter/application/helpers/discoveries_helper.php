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
* PHP version 5.3.3
* 
* @category  Helper
* @package   Discoveries
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.1
* @link      http://www.open-audit.org
*/

/**
* Base Helper Discoveries
*
* @access   public
* @category Helper
* @package  Discoveries
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
if ( ! defined('BASEPATH')) {
	exit('No direct script access allowed');
}

if ( ! function_exists('all_ip_list')) {
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

		$log = new stdClass();
		$log->discovery_id = $discovery->id;
		$log->severity = 6;
		$log->file = 'discoveries_helper';
		$log->function = 'all_ip_list';
		$log->command_status = 'notice';
		$log->message = 'Retrieving IP list';
		$log->ip = '127.0.0.1';

		$ip_addresses = array();
		if ( ! empty($discovery->attributes->other->nmap->exclude_ip)) {
			$command = 'nmap -n -sL --exclude ' . $discovery->attributes->other->nmap->exclude_ip . ' ' . $discovery->attributes->other->subnet;
		} else {
			$command = 'nmap -n -sL ' . $discovery->attributes->other->subnet;
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
			discovery_log($log);
			return false;
		}
		$log->command_output = 'Total IPs: ' . @count($ip_addresses);
		discovery_log($log);
		return $ip_addresses;
	}
}

if ( ! function_exists('ip_list')) {
    /**
     *
     * @param  object $discovery The discovery object with all its parameters
     * @return array|false The array of all responding IP addresses in the discovery
     */
	function responding_ip_list($discovery = null)
	{
		if (is_null($discovery)) {
			return false;
		}

		$log = new stdClass();
		$log->discovery_id = $discovery->id;
		$log->severity = 6;
		$log->file = 'discoveries_helper';
		$log->function = 'responding_ip_list';
		$log->command_status = 'notice';
		$log->message = 'Testing for responding IPs';
		$log->ip = '127.0.0.1';

		$ip_addresses = array();
		if ($discovery->attributes->other->nmap->ping === 'y') {
			if ( ! empty($discovery->attributes->other->nmap->exclude_ip)) {
				$command = 'nmap -n -oG - -sP --exclude ' . $discovery->attributes->other->nmap->exclude_ip . ' ' . $discovery->attributes->other->subnet;
			} else {
				$command = 'nmap -n -oG - -sP ' . $discovery->attributes->other->subnet;
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
				discovery_log($log);
				return false;
			}
		} else {
			if ( ! empty($discovery->attributes->other->nmap->exclude_ip)) {
				$command = 'nmap -n -sL --exclude ' . $discovery->attributes->other->nmap->exclude_ip . ' ' . $discovery->attributes->other->subnet;
			} else {
				$command = 'nmap -n -sL ' . $discovery->attributes->other->subnet;
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
				discovery_log($log);
				return false;
			}
		}
		$log->command_output = 'Responding IPs: ' . @count($ip_addresses);
		discovery_log($log);
		return $ip_addresses;
	}
}

if ( ! function_exists('update_non_responding')) {
    /**
     *
     * @param  int   $discovery_id       discoveries.id
     * @param  array $all_ip_list        All the IP addresses in this discovery (excluding the excluded list)
     * @param  array $responding_ip_list The array of all responding IP addresses in the discovery
     * @return void
     */
	function update_non_responding($discovery_id, $all_ip_list, $responding_ip_list)
	{
		$CI = get_instance();
		$start = microtime(true);
		$log = new stdClass();
		$log->discovery_id = $discovery_id;
		$log->severity = 6;
		$log->file = 'discoveries_helper';
		$log->function = 'update_non_responding';
		$log->command_status = 'notice';
		$log->message = 'Updating discovery log with non-responding IPs';
		$log->ip = '127.0.0.1';
		$id = discovery_log($log);
		foreach ($all_ip_list as $ip) {
			if ( ! in_array($ip, $responding_ip_list)) {
				// Update the discovery log to show this IP not responding
				$log->message = "IP {$ip} not responding, ignoring.";
				$log->ip = $ip;
				discovery_log($log);
			}
		}
		$log->command_time_to_execute = microtime(true) - $start;
		$sql = "UPDATE discovery_log SET command_time_to_execute = '" . $log->command_time_to_execute . "' WHERE id = ?";
		$data = array($id);
		$CI->db->query($sql, $data);
	}
}

if ( ! function_exists('queue_responding')) {
	/**
	 * Insert into queue an entry for each responding IP
	 * @param  int   $discovery_id       discoveries.id
	 * @param  array $responding_ip_list The array of all responding IP addresses in the discovery
	 * @return void
	 */
	function queue_responding($discovery_id = 0, $responding_ip_list)
	{
		$CI = get_instance();
		$log = new stdClass();
		$log->discovery_id = $discovery_id;
		$log->severity = 6;
		$log->file = 'discoveries_helper';
		$log->function = 'update_responding';
		$log->command_status = 'notice';		
		foreach ($responding_ip_list as $ip) {
			$item = new stdClass();
			$item->ip = $ip;
			$item->discovery_id = $discovery_id;
			$details = json_encode($item);
			unset ($item);
			$CI->m_queue->create('ip_scan', $details);
			$log->ip = $ip;
			$log->message = 'IP ' . $ip . ' responding, adding to device list.';
			discovery_log($log);
		}
	}
}


if ( ! function_exists('discover_subnet')) {
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
		$CI = get_instance();

		$discovery_id = $queue_item->discovery_id;

		$item = $CI->m_discoveries->read($discovery_id);
		$discovery = $item[0];

		$log = new stdClass();
		$log->discovery_id = $discovery_id;
		$log->command_status = 'start';
		$log->message = 'Starting discovery for ' . $discovery->attributes->name;
		$log->ip = '127.0.0.1';
		$log->severity = 6;
		discovery_log($log);

		$sql = '/* discoveries_helper::discover_subnet */ ' . "UPDATE `discoveries` SET `status` = 'running', `ip_all_count` = 0, `ip_responding_count` = 0, `ip_scanned_count` = 0, `ip_discovered_count` = 0, `ip_audited_count` = 0, `last_run` = NOW() WHERE id = ?";
		$data = array($discovery_id);
		$CI->db->query($sql, $data);

		if ( ! preg_match('/^[\d,\.,\/,\-]*$/', $discovery->attributes->other->subnet)) {
			$log->message = 'Invalid subnet value supplied of ' . htmlentities($discovery->attributes->other->subnet);
			$log->severity = 5;
			discovery_log($log);
			return;
		}

		if ( ! empty($CI->config->config['discovery_ip_exclude'])) {
			// Account for users adding multiple spaces which would be converted to multiple comma's.
			$exclude_ip = preg_replace('!\s+!', ' ', $CI->config->config['discovery_ip_exclude']);
			// Convert spaces to comma's
			$exclude_ip = str_replace(' ', ',', $exclude_ip);
			if ( ! empty($discovery->attributes->other->nmap->exclude_ip)) {
				$discovery->attributes->other->nmap->exclude_ip .= ',' . $exclude_ip;
			} else {
				$discovery->attributes->other->nmap->exclude_ip = $exclude_ip;
			}
		}
		// Ensure we only have valid characters of digit, dot, slash and comma in attribute
		if ( ! preg_match('/^[\d,\.,\/,\-,\,]*$/', $discovery->attributes->other->nmap->exclude_ip)) {
			$discovery->attributes->other->nmap->exclude_ip = '';
			$log->message = 'Invalid characters supplied in exclude_ip, setting to blank.';
			$log->severity = 5;
			discovery_log($log);
		}

		$all_ip_list = all_ip_list($discovery);

		$count = @count($all_ip_list);
		$log->command_status = 'notice';
		$log->message = 'Ping response not required, assuming all ' . $count . ' IP addresses are up.';
		if ($discovery->attributes->other->nmap->ping === 'y') {
			$log->message = 'Scanning ' . $count . ' IP addresses using Nmap to test for response.';
		}
		discovery_log($log);

		$responding_ip_list = responding_ip_list($discovery);

		$log->command_time_to_execute = microtime(true) - $start;
		$log->message = 'Nmap response scanning completed.';
		discovery_log($log);

		update_non_responding($discovery->id, $all_ip_list, $responding_ip_list);
		queue_responding($discovery->id, $responding_ip_list);

		$ip_all_count = 0;
		$ip_responding_count = 0;
		if ( ! empty($all_ip_list) && is_array($all_ip_list)) {
			$ip_all_count = count($all_ip_list);
		}
		if ( ! empty($responding_ip_list) && is_array($responding_ip_list)) {
			$ip_responding_count = count($responding_ip_list);
		}
		$sql = '/* discoveries_helper::discover_subnet */ ' . 'UPDATE `discoveries` SET ip_all_count = ?, ip_responding_count = ? WHERE `id` = ?';
		$data = array($ip_all_count, $ip_responding_count, $discovery_id);
		$CI->db->query($sql, $data);
		if (empty($responding_ip_list)) {
			$log->message = 'No IPs are responding. You may wish to check your discovery configuration.';
			$log->command_time_to_execute = microtime(true) - $start;
			discovery_log($log);
			// NOTE - the log_helper will mark this in the database as complete for us, think Collector / Server
			$log->message = 'Discovery has finished.';
			$log->command = '';
			$log->command_output = '';
			$log->command_status = 'finished';
			$log->command_time_to_execute = microtime(true) - $start;
			$log->ip = '127.0.0.1';
			discovery_log($log);
		}
		return true;
	}
}




if ( ! function_exists('ip_scan')) {
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
		$CI = get_instance();
		$ip = $details->ip;
		$item = $CI->m_discoveries->read($details->discovery_id);
		if (empty($item)) {
			return false;
		}
		$discovery = $item[0]->attributes;
		unset($item);
		unset($details);

		$log = new stdClass();
		$log->discovery_id = $discovery->id;
		$log->severity = 7;
		$log->file = 'discoveries_helper';
		$log->function = 'ip_scan';
		$log->command_status = 'notice';
		$log->message = 'IP scan start on device ' . $ip;
		$log->ip = $ip;
		discovery_log($log);

		$nmap = $discovery->other->nmap;
		$device = array();
		$sql = 'SELECT NOW() AS `timestamp`';
		$query = $CI->db->query($sql);
		$result = $query->result();
		$device['timestamp'] = $result[0]->timestamp;

		$timing = '-T4';
		if ( ! empty($nmap_timing)) {
			$timing = '-T' . intval($nmap_timing);
		}

		$ping = '';
		if (empty($nmap->ping) && $nmap->ping === 'n') {
			$ping = '-Pn';
		}

		$service_version = '';
		if ( ! empty($nmap->service_version)) {
			$service_version = '-sV';
		}

		$timeout = '';
		if ( ! empty($timeout)) {
			$timeout = '--host-timeout ' . intval($nmap->timeout);
		}

		$nmap_tcp_ports = '';
		if ( ! empty($nmap->nmap_tcp_ports)) {
			$nmap_tcp_ports = '--top-ports ' . $nmap->nmap_tcp_ports;
		}

		$nmap_udp_ports = '';
		if ( ! empty($nmap->nmap_udp_ports)) {
			$nmap_udp_ports = '--top-ports ' . $nmap->nmap_udp_ports;
		}

		$tcp_ports = '';
		if ( ! empty($nmap->tcp_ports)) {
			$nmap->tcp_ports = str_replace(' ', '', $nmap->tcp_ports);
			$tcp_ports = '-p ' . $nmap->tcp_ports;
		}

		$udp_ports = '';
		if ( ! empty($nmap->udp_ports)) {
			$nmap->udp_ports = str_replace(' ', '', $nmap->udp_ports);
			$udp_ports = '-p ' . $nmap->udp_ports;
		}

		$exclude_ip = '';
		if ( ! empty($nmap->exclude_ip)) {
			$nmap->exclude_ip = str_replace(' ', '', $nmap->exclude_ip);
			$exclude_ip = '--exclude ' . $nmap->exclude_ip;
		}

		$exclude_tcp_ports = '';
		if ( ! empty($nmap->exclude_tcp_ports)) {
			$nmap->exclude_tcp_ports = str_replace(' ', '', $nmap->exclude_tcp_ports);
			$exclude_tcp_ports = '--exclude-ports T:' . $nmap->exclude_tcp_ports;
		}

		$exclude_udp_ports = '';
		if ( ! empty($nmap->exclude_udp_ports)) {
			$nmap->exclude_udp_ports = str_replace(' ', '', $nmap->exclude_udp_ports);
			$exclude_udp_ports = '--exclude-ports U:' . $nmap->exclude_udp_ports;
		}

		if ( ! empty($discovery->other->nmap->nmap_tcp_ports)) {
			$item_start = microtime(true);
			$command = "nmap -n {$timing} {$ping} -sS {$service_version} {$exclude_ip} {$exclude_tcp_ports} {$nmap_tcp_ports} {$timeout} {$ip}";
			if (php_uname('s') === 'Darwin') {
				$command = '/usr/local/bin/' . $command;
			}
			exec($command, $output, $return_var);
			$log->command_time_to_execute = (microtime(true) - $item_start);
			$log->message = 'Nmap Command (Top TCP Ports)';
			$log->command = "{$command} # Top TCP Ports";
			discovery_log($log);
			echo $log->message . ' took ' . $log->command_time_to_execute . "seconds.\n";
			$device = array_merge($device, check_nmap_output($discovery, $output, $ip, $command));
			unset($output);
		}

		if ( ! empty($discovery->other->nmap->nmap_udp_ports)) {
			$item_start = microtime(true);
			$command = "nmap -n {$timing} {$ping} -sU {$service_version} {$exclude_ip} {$exclude_udp_ports} {$nmap_udp_ports} {$timeout} {$ip}";
			if (php_uname('s') === 'Darwin') {
				$command = '/usr/local/bin/' . $command;
			}
			exec($command, $output, $return_var);
			$log->command_time_to_execute = (microtime(true) - $item_start);
			$log->message = 'Nmap Command (Top UDP Ports)';
			$log->command = "{$command} # Top UDP Ports";
			discovery_log($log);
			echo $log->message . ' took ' . $log->command_time_to_execute . "seconds.\n";
			$ports = @$device['nmap_ports'];
			$device = array_merge($device, check_nmap_output($discovery, $output, $ip, $command));
			if ( ! empty($ports)) {
				$device['nmap_ports'] = $ports . ',' . $device['nmap_ports'];
			}
			unset($output);
			unset($ports);
		}

		if ( ! empty($discovery->other->nmap->tcp_ports)) {
			$item_start = microtime(true);
			$command = "nmap -n {$timing} {$ping} -sS {$service_version} {$exclude_ip} {$exclude_tcp_ports} {$tcp_ports} {$timeout} {$ip}";
			if (php_uname('s') === 'Darwin') {
				$command = '/usr/local/bin/' . $command;
			}
			exec($command, $output, $return_var);
			$log->command_time_to_execute = (microtime(true) - $item_start);
			$log->message = 'Nmap Command (Custom TCP Ports)';
			$log->command = "{$command} # Custom TCP Ports";
			discovery_log($log);
			echo $log->message . ' took ' . $log->command_time_to_execute . "seconds.\n";
			$ports = @$device['nmap_ports'];
			$device = array_merge($device, check_nmap_output($discovery, $output, $ip, $command));
			if ( ! empty($ports)) {
				$device['nmap_ports'] = $ports . ',' . $device['nmap_ports'];
			}
			unset($output);
			unset($ports);
		}

		if ( ! empty($discovery->other->nmap->udp_ports)) {
			$item_start = microtime(true);
			$command = "nmap -n {$timing} {$ping} -sU {$service_version} {$exclude_ip} {$exclude_udp_ports} {$udp_ports} {$timeout} {$ip}";
			if (php_uname('s') === 'Darwin') {
				$command = '/usr/local/bin/' . $command;
			}
			exec($command, $output, $return_var);
			$log->command_time_to_execute = (microtime(true) - $item_start);
			$log->message = 'Nmap Command (Custom UDP Ports)';
			$log->command = "{$command} # Custom UDP Ports";
			discovery_log($log);
			echo $log->message . ' took ' . $log->command_time_to_execute . "seconds.\n";
			$ports = @$device['nmap_ports'];
			$device = array_merge($device, check_nmap_output($discovery, $output, $ip, $command));
			if ( ! empty($ports)) {
				$device['nmap_ports'] = $ports . ',' . $device['nmap_ports'];
			}
			unset($output);
			unset($ports);
		}

		$log->message = 'IP scan finish on device ' . $ip;
		$log->command = '';
		$log->command_output = '';
		$log->command_time_to_execute = microtime(true) - $start;
		discovery_log($log);
		$sql = '/* discoveries_helper::ip_scan */ ' .  "UPDATE discovery_log SET command_time_to_execute = ? WHERE message = 'IP " . $log->ip . " responding, adding to device list.' AND discovery_id = ?";
		$data = array($log->command_time_to_execute, $discovery->id);
		$query = $CI->db->query($sql, $data);
		return($device);
	}
}

if ( ! function_exists('check_nmap_output')) {
	/**
	 * [check_nmap_output description]
	 * @param  object $discovery [description]
	 * @param  array  $output    [description]
	 * @param  string $ip        [description]
	 * @param  string $command   [description]
	 * @return array|false            [description]
	 */
	function check_nmap_output ($discovery, $output, $ip, $command)
	{
		if (empty($discovery) OR empty($output)) {
			return false;
		}
		$device = array();
		$log = new stdClass();
		$log->discovery_id = $discovery->id;
		$log->ip = $ip;
		$log->severity = 7;
		$log->command = $command;
		$log->command_status = 'notice';
		$values = array('open', 'closed', 'filtered', 'unfiltered', 'open|filtered', 'closed|filtered');
		$device = array();

		// Some defaults, see https://nmap.org/book/man-port-scanning-basics.html
		if (empty($discovery->other->nmap->{'open'})) {
			$discovery->other->nmap->{'open'} = 'y';
		}
		if (empty($discovery->other->nmap->{'closed'})) {
			$discovery->other->nmap->{'closed'} = 'n';
		}
		if (empty($discovery->other->nmap->{'filtered'})) {
			$discovery->other->nmap->{'filtered'} = 'n';
		}
		if (empty($discovery->other->nmap->{'unfiltered'})) {
			$discovery->other->nmap->{'unfiltered'} = 'n';
		}
		if (empty($discovery->other->nmap->{'open|filtered'})) {
			$discovery->other->nmap->{'open|filtered'} = 'y';
		}
		if (empty($discovery->other->nmap->{'closed|filtered'})) {
			$discovery->other->nmap->{'closed|filtered'} = 'n';
		}

		foreach ($output as $line) {
			$keywords = preg_split('/[\s,]+/', $line);
			foreach ($values as $status) {
				if ( ! empty($keywords[1])) {
					if ( ! empty($discovery->other->nmap->{$status}) && $discovery->other->nmap->{$status} === 'y') {
						if ($keywords[1] === $status) {
							$device['host_is_up'] = 'true';
							$device['status'] = $status;
							if ($status === 'open') {
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
							$ssh_ports = explode(',', $discovery->other->nmap->ssh_ports);
							foreach ($ssh_ports as $ssh_port) {
								if ($keywords[0] === $ssh_port.'/tcp') {
									$device['ssh_status'] = 'true';
									$log->message = 'Host ' . $ip . ' is up, received custom ssh port ' . $keywords[0] . ' ' . $status . ') response';
								}
							}
							discovery_log($log);
						}
					}
				}
			}
			if (stripos($line, 'Host {$ip} is up, received arp-response') !== false) {
				$device['host_is_up'] = 'true';
				$log->message = "Host {$ip} is up, received arp-response";
				$log->command_output = $line;
				discovery_log($log);
			}
			if (stripos($line, 'MAC Address') !== false) {
				$keywords = preg_split('/[\s,]+/', $line);
				$device['mac_address'] = strtolower($keywords[2]);
				$device['host_is_up'] = 'true';
				$log->message = "Host {$ip} is up, received mac addess " . $device['mac_address'];
				$log->command_output = $line;
				discovery_log($log);
			}
			if (stripos($line, 'Nmap done: 1 IP address (1 host up)') !== false) {
				$device['host_is_up'] = 'true';
				$log->message = "Host {$ip} is up, received Nmap ping response";
				$log->command_output = $line;
				discovery_log($log);
			}
			if (stripos($line, 'due to host timeout') !== false && $discovery->other->nmap->ping === 'y') {
				$device['host_is_up'] = 'true';
				$log->message = "Host {$ip} timed out. Exceeded timeout seconds.";
				$log->command_output = $line;
				discovery_log($log);
			}
		}
		return $device;
	}
}




if ( ! function_exists('ip_audit')) {
	/**
	 * [ip_audit description]
	 * @param  object $ip_scan [description]
	 * @return false          [description]
	 */
	function ip_audit($ip_scan = null)
	{
		if (empty($ip_scan)) {
			return false;
		}
		$start = microtime(true);
		$CI = get_instance();
		$item = $CI->m_discoveries->read($ip_scan->discovery_id);
		$discovery = @$item[0]->attributes;
		if (empty($discovery)) {
			return false;
		}
		unset($item);
		if (is_string($ip_scan->details)) {
			$ip_scan->details = @json_decode($ip_scan->details);
		}
		if (empty($ip_scan->details)) {
			return false;
		}
		if (empty($ip_scan->details->snmp_status)) {
			$ip_scan->details->snmp_status = 'false';
		}
		if (empty($ip_scan->details->ssh_status)) {
			$ip_scan->details->ssh_status = 'false';
		}
		if (empty($ip_scan->details->wmi_status)) {
			$ip_scan->details->wmi_status = 'false';
		}

		$log = new stdClass();
		$log->command_status = 'notice';
		$log->discovery_id = $discovery->id;
		$log->file = 'discoveries_helper';
		$log->function = 'ip_audit';
		$log->ip = $ip_scan->ip;
		$log->message = 'IP Audit start on device ' . $ip_scan->ip;
		$log->pid = getmypid();
		$log->severity = 7;
		discovery_log($log);

		if (php_uname('s') !== 'Windows NT') {
			$filepath = $CI->config->config['base_path'] . '/other';
		} else {
			$filepath = $CI->config->config['base_path'] . '\\other';
		}

		$device = new stdClass();
		$device->audits_ip = 	$ip_scan->ip;
		$device->credentials = 	array();
		$device->discovery_id = $discovery->id;
		$device->id = 			'';
		$device->ip = 			$ip_scan->ip;

		$sql = 'SELECT NOW() AS `timestamp`';
		$query = $CI->db->query($sql);
		$result = $query->result();
		$device->last_seen = $result[0]->timestamp;
		$device->last_seen_by = 'nmap';
		$device->mac_address = 	@$ip_scan->details->mac_address;
		$device->name = 		'';
		$device->os_family = 	'';
		$device->os_group = 	'';
		$device->sysDescr = 	'';
		$device->timestamp = 	$ip_scan->details->timestamp;
		$device->type = 		'';
		// If we have specifically assigned another org_id, set it
		if ( ! empty($discovery->devices_assigned_to_org)) {
			$device->org_id = $discovery->devices_assigned_to_org;
		}
		// If we have specifically assigned a location_id, set it
		if ( ! empty($discovery->devices_assigned_to_location)) {
			$device->location_id = $discovery->devices_assigned_to_location;
		}

		if ($CI->config->config['discovery_use_dns'] === 'y') {
			$device = dns_validate($device);
		}

		$parameters = new stdCLass();
		$parameters->details = $device;
		$parameters->discovery_id = $discovery->id;
		$parameters->match = @$discovery->other->match;
		$device->id = $CI->m_device->match($parameters);

		if ( ! empty($device->id) && ! empty($discovery->id)) {
			$sql = '/* discoveries_helper::ip_audit */ ' . 'SELECT name FROM system WHERE id = ' . intval($device->id);
			$query = $CI->db->query($sql);
			$result = $query->result();
			$name = $result[0]->name;
			$log->system_id = $device->id;
			$log->message = 'Device named ' . $name . ' found on initial IP Scan (Nmap) result.';
			discovery_log($log);
			unset($log->title, $log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
			// update the previous log entries with our new system_id
			$sql = '/* discoveries_helper::ip_audit */ ' . 'UPDATE discovery_log SET system_id = ' . intval($log->system_id) . ' WHERE discovery_id = ' . $discovery->id . " and ip = '" . $device->ip . "'";
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

		$credentials = array();
		$credentials = $CI->m_discoveries->get_device_discovery_credentials(@intval($device->id), $discovery->id, $device->ip);

		// output to log file and DEBUG the status of the three main services
		$ip_scan->details->ssh_port = '22';
		if ( ! empty($discovery->other->nmap->ssh_ports) && intval($discovery->other->nmap->ssh_ports) !== 22) {
			$nmap_ports = explode(',', $discovery->other->nmap->ssh_ports);
			foreach (explode(',', $ip_scan->details->nmap_ports) as $port) {
				$temp = explode('/', $port);
				$port = intval($temp[0]);
				foreach ($nmap_ports as $nmap_port) {
					if ($port === intval($nmap_port)) {
						$ip_scan->details->ssh_port = $port;
						$ip_scan->details->ssh_status = 'true';
					}
				}
				unset($temp);
			}
		}
		$log->message = 'SSH Status is ' . $ip_scan->details->ssh_status . ' on ' . $device->ip;
		discovery_log($log);
		$log->message = 'SNMP Status is ' . $ip_scan->details->snmp_status . ' on ' . $device->ip;
		discovery_log($log);
		$log->message = 'WMI Status is ' . $ip_scan->details->wmi_status . ' on ' . $device->ip;
		discovery_log($log);

		$ip_discovered_count = 0;
		$ip_audited_count = 0;

		// SNMP audit
		$credentials_snmp = false;

		// No SNMP extension, do not run
		if ( ! extension_loaded('snmp') && $ip_scan->details->snmp_status === 'true') {
			$log->message = 'PHP extension not loaded, skipping SNMP data retrieval for ' . $device->ip;
			discovery_log($log);
		}

		// Test for working SNMP credentials
		if (extension_loaded('snmp') && $ip_scan->details->snmp_status === 'true') {
			$log->message = 'Testing SNMP credentials for ' . $device->ip;
			discovery_log($log);
			$credentials_snmp = snmp_credentials($device->ip, $credentials, null, $discovery->id);
			// Add this credential sets ID to device->credentials
			// if collection == credentials, not an individual device acssociated credential
			if ( ! empty($credentials_snmp)) {
				$ip_discovered_count = 1;
				if ($credentials_snmp->foreign === 'credentials') {
					$device->credentials[] = intval($credentials_snmp->id);
				}
			}
		}

		// Run SNMP audit commands
		if ( ! empty($credentials_snmp)) {
			if ( ! empty($credentials_snmp->credentials->version)) {
				$device->snmp_version = 'snmpv' . intval($credentials_snmp->credentials->version);
				if (intval($credentials_snmp->credentials->version) === 2) {
					$device->snmp_version .= 'c';
				}
			}
			$temp_array = snmp_audit($device->ip, $credentials_snmp, null, $discovery->id);
			if ( ! empty($temp_array['details'])) {
				foreach ($temp_array['details'] as $key => $value) {
					if ( ! empty($value)) {
						$device->$key = $value;
					}
				}
				$device->last_seen_by = 'snmp';
				$device->audits_ip = '127.0.0.1';
			}
			if ( ! empty($temp_array['interfaces'])) {
				$network_interfaces = $temp_array['interfaces'];
			}
			if ( ! empty($temp_array['modules'])) {
				$modules = $temp_array['modules'];
			}
			if ( ! empty($temp_array['ip'])) {
				$ip = $temp_array['ip'];
			}
			if ( ! empty($temp_array['guests'])) {
				$guests = $temp_array['guests'];
			}
			if ( ! empty($temp_array['routes'])) {
				$routes = $temp_array['routes'];
			}
		}

		if ( ! empty($device->type) && $device->type !== 'computer' && $device->type !== 'unknown' && $device->type !== 'unclassified'
			&& ! empty($device->os_name) && stripos($device->os_name, 'dd-wrt') === false
			&& ! empty($device->manufacturer) && stripos($device->manufacturer, 'Ubiquiti') === false) {
			$log->message = 'Not a computer and not a DD-WRT or Ubiquiti device setting SSH status to false for ' . $device->ip;
			$log->severity = 5;
			discovery_log($log);
			$log->severity = 7;
			$ip_scan->details->ssh_status = 'false';
		}

		// SSH Audit
		$credentials_ssh = false;

		// Run SSH audit
		if ($ip_scan->details->ssh_status === 'true') {
			$log->message = 'Testing SSH credentials for ' . $device->ip;
			discovery_log($log);
			$parameters = new stdClass();
			$parameters->ip = $device->ip;
			$parameters->discovery_id = $discovery->id;
			$parameters->system_id = '';
			if ( ! empty($device->id)) {
				$parameters->system_id = $device->id;
			}
			$parameters->discovery_id = $discovery->id;
			$parameters->credentials = $credentials;
			$parameters->ssh_port = $ip_scan->details->ssh_port;
			$ssh_details = ssh_audit($parameters);
			if ( ! empty($ssh_details)) {
				if ( ! empty($ssh_details->credentials)) {
					$ip_discovered_count = 1;
					// Add this credential sets ID to device->credentials
					// if collection == credentials, not an individual device acssociated credential
					$credentials_ssh = $ssh_details->credentials;
					if ($credentials_ssh->foreign === 'credentials') {
						$device->credentials[] = intval($credentials_ssh->id);
					}
				}
				unset($ssh_details->credentials);
				$device->last_seen_by = 'ssh';
				$device->audits_ip = '127.0.0.1';
				foreach ($ssh_details as $key => $value) {
					if ( ! empty($value)) {
						$device->$key = $value;
					}
				}
			}
		}

		// We do not want to attempt to audit using WMI anything that's not a Windows machine
		if ( ! empty($device->os_group) && $device->os_group !== 'Windows' && $ip_scan->details->wmi_status !== 'false') {
			$ip_scan->details->wmi_status = 'false';
			$log->message = 'Setting WMI to false because we have an os_group that is not Windows.';
			$log->command_output = $device->os_group;
			discovery_log($log);
		}

		// test for working WMI credentials
		if ($ip_scan->details->wmi_status === 'true') {
			$log->message = 'Testing Windows credentials for ' . $device->ip;
			discovery_log($log);
			$credentials_windows = windows_credentials($device->ip, $credentials, $log);
		} else {
			$credentials_windows = false;
		}

		if ( ! empty($credentials_windows)) {
			$ip_discovered_count = 1;
			// Add this credential sets ID to device->credentials
			// if collection == credentials, not an individual device acssociated credential
			if ($credentials_windows->foreign === 'credentials') {
				$device->credentials[] = intval($credentials_windows->id);
			}
		}

		if ($ip_scan->details->wmi_status === 'true' && $credentials_windows) {
			$windows_details = wmi_audit($device->ip, $credentials_windows, null, $discovery->id);
			if ( ! empty($windows_details)) {
				$device->last_seen_by = 'windows';
				$device->audits_ip = '127.0.0.1';
				foreach ($windows_details as $key => $value) {
					if ( ! empty($value)) {
						$device->$key = $value;
					}
				}
			}
		}

		// Set our device->credentials to a JSON array of working interger credentials.id
		$device->credentials = json_encode($device->credentials);

		// Now run our rules to update the device if any match
		$parameters = new stdClass();
		$parameters->device = $device;
		$parameters->discovery_id = intval($discovery->id);
		$parameters->action = 'return';
		$device = $CI->m_rules->execute($parameters);

		// If we don't have a device.id, check with our updated device attributes (if any)
		if (empty($device->id)) {
			$parameters = new stdCLass();
			$parameters->details = $device;
			$parameters->discovery_id = $discovery->id;
			$parameters->match = $discovery->other->match;
			$device->id = $CI->m_device->match($parameters);
			if ( ! empty($device->id)) {
				$log->system_id = $device->id;
				// update the previous log entries with our new system_id
				$sql = '/* discoveries_helper::ip_audit::2 */ ' . 'UPDATE discovery_log SET system_id = ' . intval($log->system_id) . ' WHERE discovery_id = ' . $discovery->id . " and ip = '" . $device->ip . "'";
				$log->message = 'Update the previous log entries with the system_id';
				$log->command_status = 'notice';
				$log->command = $sql;
				$command_start = microtime(true);
				$query = $CI->db->query($sql);
				$command_end = microtime(true);
				$log->command_time_to_execute = $command_end - $command_start;
				discovery_log($log);
				unset($log->message, $log->command, $log->command_time_to_execute, $log->command_error_message);
			}
		}

		// See if we have a Mac Address for the device's IP
		if ( ! empty($network_interfaces) && empty($device->mac_address)) {
			foreach ($network_interfaces as $interface) {
				if ($interface->ip === $device->ip) {
					$device->mac_address = $interface->mac;
					$device->subnet = $interface->subnet;
				}
			}
		}

		$log->command_status = 'notice';
		if ( ! empty($device->id)) {
			// UPDATE
			$log->system_id = $device->id;
			$log->message = 'Start of ' . strtoupper($device->last_seen_by) . ' update for ' . $device->ip;
			discovery_log($log);
			$command_start = microtime(true);
			$CI->m_device->update($device);
			$log->command_time_to_execute = microtime(true) - $command_start;
			$device->ip = ip_address_from_db($device->ip);
			$log->message = 'End of ' . strtoupper($device->last_seen_by) . ' update for ' . $device->ip;
			discovery_log($log);
			unset($log->command_time_to_execute, $log->command_error_message);
		} else {
			// INSERT
			$log->message = 'Start of ' . strtoupper($device->last_seen_by) . ' insert for ' . $device->ip;
			discovery_log($log);
			$command_start = microtime(true);
			$device->id = $CI->m_device->insert($device);
			$log->command_time_to_execute = microtime(true) - $command_start;
			$device->ip = ip_address_from_db($device->ip);
			$log->system_id = $device->id;
			$log->message = 'End of ' . strtoupper($device->last_seen_by) . ' insert for ' . $device->ip;
			discovery_log($log);
			// update the previous log entries with our new system_id
			$sql = '/* discoveries_helper::ip_audit::3 */ ' . 'UPDATE discovery_log SET system_id = ' . intval($log->system_id) . ' WHERE discovery_id = ' . $discovery->id . " and ip = '" . $device->ip . "'";
			$command_start = microtime(true);
			$query = $CI->db->query($sql);
			$log->command_time_to_execute = microtime(true) - $command_start;
			$log->message = 'Update the previous log entries with our new system_id';
			$log->command = $CI->db->last_query();
			discovery_log($log);
			unset($log->command, $log->command_time_to_execute, $log->command_error_message);
		}

		// grab some timestamps
		$device->last_seen = $CI->m_devices_components->read($device->id, 'y', 'system', '', 'last_seen');
		$device->first_seen = $CI->m_devices_components->read($device->id, 'y', 'system', '', 'first_seen');

		// update any network interfaces retrieved by SNMP
		if (isset($network_interfaces) && is_array($network_interfaces) && count($network_interfaces) > 0) {
			$log->command_status = 'notice';
			$log->message = 'Processing found network interfaces for ' . $device->ip;
			discovery_log($log);
			$parameters = new stdClass();
			$parameters->table = 'network';
			$parameters->details = $device;
			$parameters->input = $network_interfaces;
			$parameters->discovery_id = $discovery->id;
			$CI->m_devices_components->process_component($parameters);
		}

		// update any ip addresses retrieved by SNMP
		if ( ! empty($ip) && is_array($ip->item) && count($ip->item) > 0) {
			$log->command_status = 'notice';
			$log->message = 'Processing found ip addresses for ' . $device->ip;
			discovery_log($log);
			$parameters = new stdClass();
			$parameters->table = 'ip';
			$parameters->details = $device;
			$parameters->input = $ip->item;
			$parameters->discovery_id = $discovery->id;
			$CI->m_devices_components->process_component($parameters);
		}

		// create or update the entry in the ip table from non-SNMP data
		// so our 'networks' endpoint and functions can find the device
		if (empty($ip->item)) {
			$log->command_status = 'notice';
			$log->message = 'Processing found ip addresses (non-snmp) for ' . $device->ip;
			discovery_log($log);
			$item = new stdClass();
			$item->system_id = $device->id;
			$item->ip = $device->ip;
			$item->version = 4;
			$item->mac = '';
			if ( ! empty($device->mac_address)) {
				$item->mac = (string)strtolower($device->mac_address);
			}
			if ( ! empty($discovery->other->subnet) && strpos($discovery->other->subnet, '/') !== false) {
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
			// new special routine as we may already have IPs (from a real audit) but not this particular
			// discovery run, so we don't want to remove these esiting IPs. Special function for this.
			$parameters = new stdClass();
			$parameters->discovery_id = $discovery->id;
			$parameters->device = $device;
			$parameters->ip = $item;
			$CI->m_devices_components->nmap_ip($parameters);
			unset($item);
		}

		// finish off with updating any network IPs that don't have a matching interface
		$CI->m_devices_components->update_missing_interfaces($device->id);

		// insert any modules from SNMP
		if (isset($modules) && is_array($modules) && count($modules) > 0) {
			$log->command_status = 'notice';
			$log->message = 'Processing found modules for ' . $device->ip;
			discovery_log($log);
			$parameters = new stdClass();
			$parameters->table = 'module';
			$parameters->details = $device;
			$parameters->input = $modules;
			$parameters->discovery_id = $discovery->id;
			$CI->m_devices_components->process_component($parameters);
		}

		// insert any found virtual machines from SNMP
		if (isset($guests) && is_array($guests) && count($guests) > 0) {
			$log->command_status = 'notice';
			$log->message = 'Processing found VMs for ' . $device->ip;
			discovery_log($log);
			$parameters = new stdClass();
			$parameters->table = 'vm';
			$parameters->details = $device;
			$parameters->input = $guests;
			$parameters->discovery_id = $discovery->id;
			$CI->m_devices_components->process_component($parameters);
		}

		// insert any found routes from SNMP
		if (isset($routes) && is_array($routes) && count($routes) > 0) {
			$log->command_status = 'notice';
			$log->message = 'Processing found routes for ' . $device->ip;
			discovery_log($log);
			$parameters = new stdClass();
			$parameters->table = 'route';
			$parameters->details = $device;
			$parameters->input = $routes;
			$parameters->discovery_id = $discovery->id;
			$CI->m_devices_components->process_component($parameters);
		}

		// process and store the Nmap data
		$nmap_result = array();
		foreach (explode(',', $ip_scan->details->nmap_ports) as $port) {
			$temp = explode('/', $port);
			$nmap_item = new stdClass();
			$nmap_item->ip = (string)$device->ip;
			$nmap_item->port = $temp[0];
			$nmap_item->protocol = $temp[1];
			$nmap_item->program = $temp[2];
			if ( ! empty($nmap_item->port)) {
				$nmap_result[] = $nmap_item;
			}
			unset($nmap_item);
			unset($temp);
		}
		if (count($nmap_result) > 0) {
			$log->command_status = 'notice';
			$log->message = 'Processing Nmap ports for ' . $device->ip;
			discovery_log($log);
			$parameters = new stdClass();
			$parameters->table = 'nmap';
			$parameters->details = $device;
			$parameters->input = $nmap_result;
			$parameters->discovery_id = $discovery->id;
			$CI->m_devices_components->process_component($parameters);
		}

		// Now run our rules to update the device if any match
		$parameters = new stdClass();
		$parameters->id = intval($device->id);
		$parameters->discovery_id = intval($discovery->id);
		$parameters->ip = $device->ip;
		$parameters->action = 'update';
		$CI->m_rules->execute($parameters);

		if (empty($credentials_windows) && empty($credentials_ssh) && empty($credentials_snmp)) {
			if ($ip_scan->details->snmp_status === 'true' OR $ip_scan->details->ssh_status === 'true' OR $ip_scan->details->wmi_status === 'true') {
				$log->command_status = 'fail';
				$log->severity = 5;
				$log->message = 'No valid credentials for ' . $device->ip;
				discovery_log($log);
			} else {
				$log->command_status = 'fail';
				$log->severity = 5;
				$log->message = 'No management protocols for ' . $device->ip;
				discovery_log($log);
			}
		}

		$log->severity = 7;
		$log->message = '';
		$log->command = '';
		$log->command_output = '';
		$log->command_time_to_execute = '';
		$log->command_status = 'notice';

		// insert a blank to indicate we're finished this part of the discovery
		// if required, the audit scripts will insert their own audit logs
		$CI->m_audit_log->update('debug', '', $device->id, $device->last_seen);

		if ( ! empty($device->type)) {
			$log->message = "At IP {$device->ip}, discovery found a device of type '{$device->type}'.";
		} else {
			$log->message = "At IP {$device->ip}, discovery found an unknown device.";
		}
		discovery_log($log);

		// NOTE - The log helper will increase the count in discoveries.ip_discovered_count for us because Collector / Server
		//      - It will match on the message string, so don't change without also changing log_helper
		if ( ! empty($ip_discovered_count)) {
			$log->message = 'Discovered device at ' . $device->ip;
			discovery_log($log);
		}

		$script_name = '';
		if ( ! empty($credentials_windows) OR ! empty($credentials_ssh)) {
			$temp = $CI->m_scripts->build(strtolower($device->os_group));
			if (empty($temp)) {
				$log->message = 'Could not retrieve audit script for ' . strtolower($device->os_group) . ', check system log for details.';
				$log->command_status = 'fail';
				$log->severity = 4;
				discovery_log($log);
				$log->command_status = 'notice';
				$log->severity = 7;
			} else if (is_array($temp)) {
				$audit_script = $temp[0];
				$script_name = $temp[1];
			}
		}

		// Audit Windows using script
		if ($ip_scan->details->wmi_status === 'true' && ! empty($credentials_windows) && ! empty($audit_script)) {
			// We do not support auditing windows using the script over SSH at this time
			$ip_scan->details->ssh_status = 'false';
			$log->message = 'Starting windows script audit for ' . $device->ip;
			discovery_log($log);
			$destination = 'audit_windows.vbs';
			$output = false;
			if (php_uname('s') === 'Windows NT' && ! empty($CI->config->config['discovery_use_vintage_service']) && $CI->config->config['discovery_use_vintage_service'] === 'y') {
				// Windows Server (likely) running on the LocalSystem account.
				// We cannot copy the audit script to the target and then run it,
				// We _must_ run the script locally and use $device->ip as the script target
				// We will loose the ability to retrieve certain items like files, netstat, tasks, etc
				$log->message = 'Running discovery the old way using the code for Apache service account.';
				discovery_log($log);
				if (strpos($credentials_windows->credentials->password, '"') !== false OR  strpos($credentials_windows->credentials->username, '"') !== false) {
					// cscript cannot parse an arguement containing a "
					$log->message = 'Incompatible credentials for audit script. Cannot use " (double quotes) in a wscript command line attribute.';
					$log->command_status = 'fail';
					$log->severity = 4;
					discovery_log($log);
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
					discovery_log($log);
					$log->severity = 7;
					if (empty($output)) {
						$log->severity = 3;
						$log->command_time_to_execute = '';
						$log->message = 'No script output from ' . $device->ip . '. Cannot retrieve audit result.';
						$log->command_status = 'fail';
						discovery_log($log);
						$log->severity = 7;
					}
				}
			} else {
				// Unix or Windows default - Remotely run script on target device
				// Copy the audit script to admin$
				$copy = false;
				$copy = copy_to_windows($device->ip, $credentials_windows, '\\admin$', $audit_script, 'audit_windows.vbs', $log);
				if ($copy) {
					$command = 'cscript ' . $device->install_dir . '\\audit_windows.vbs submit_online=n create_file=w debugging=0 self_delete=y last_seen_by=audit_wmi system_id=' . $device->id . ' discovery_id=' . $discovery->id;
					$output = execute_windows($device->ip, $credentials_windows, $command, $log);
					if (empty($output)) {
						$log->severity = 3;
						$log->command_time_to_execute = '';
						$log->message = 'No script output from ' . $device->ip . '. Cannot retrieve audit result.';
						$log->command_status = 'fail';
						discovery_log($log);
						$log->severity = 7;
					}
				} else {
					$log->severity = 3;
					$log->command_time_to_execute = '';
					$log->message = 'Could not copy audit script to ' . $device->ip;
					$log->command_status = 'fail';
					discovery_log($log);
					$log->severity = 7;
				}
			}
			$audit_file = false;
			if ( ! empty($output)) {
				foreach ($output as $line) {
					if (strpos($line, 'File ') !== false) {
						$audit_file = trim(str_replace('File ', '', $line));
					}
				}
			}
			if ( ! empty($audit_file) && ! empty($output)) {        		
				$copy = false;
				$temp = explode('\\', $audit_file);
				$destination = $filepath . '/scripts/' . end($temp);
				if (php_uname('s') === 'Windows NT') {
					$destination = $filepath . '\\scripts\\' . end($temp);
				}
				if (php_uname('s') === 'Windows NT' && exec('whoami') === 'nt authority\system' && ! empty($CI->config->config['discovery_use_vintage_service']) && $CI->config->config['discovery_use_vintage_service'] === 'y') {
					if (rename($audit_file, $destination)) {
						$copy = true;
					}
				} else {
					$copy = copy_from_windows($device->ip, $credentials_windows, end($temp), $destination, $log);
				}
				if ($copy === true) {
					$audit_result = file_get_contents($destination);
					unlink($destination);
					if (empty($audit_result)) {
						$log->severity = 3;
						$log->command_time_to_execute = '';
						$log->message = 'Could not open audit result on localhost for ' . $device->ip . '. Cannot process audit result.';
						$log->command_output = $destination;
						$log->command_status = 'fail';
						discovery_log($log);
						$log->severity = 7;
					} else {
						$ip_audited_count = 1;
					}
				} else {
					$log->severity = 3;
					$log->command_time_to_execute = '';
					$log->message = 'Could not copy audit result file to localhost for ' . $device->ip . '. Cannot retrieve audit result.';
					$log->command_status = 'fail';
					discovery_log($log);
					$log->severity = 7;
				}
				if (php_uname('s') === 'Windows NT' && exec('whoami') === 'nt authority\system' && ! empty($CI->config->config['discovery_use_vintage_service']) && $CI->config->config['discovery_use_vintage_service'] === 'y') {
					// no need to delete the remote file
				} else {
					// delete the remote audit result
					$parameters = new stdClass();
					$parameters->discovery_id = $discovery->id;
					$parameters->ip = $device->ip;
					$parameters->share = 'admin$';
					$parameters->file = end($temp);
					$parameters->credentials = $credentials_windows;
					delete_windows_result($parameters);
				}
			} else {
				$log->severity = 3;
				$log->command_time_to_execute = '';
				$log->message = 'Could not find audit result path in script output from ' . $device->ip . '. Cannot retrieve audit result.';
				$log->command_status = 'fail';
				discovery_log($log);
				$log->severity = 7;
			}
		}


		$log->message = '';
		$log->command = '';
		$log->command_output = '';
		$log->command_status = 'notice';
		$log->severity = 7;
		$log->command_time_to_execute = '';

		if ($device->os_family === 'DD-WRT' OR $device->os_family === 'LEDE') {
			$log->message = "IP {$device->ip} is running {$device->os_family}, which will not run our audit_linux.sh script, skipping.";
			discovery_log($log);
		}

		// Audit via SSH
		if ($ip_scan->details->ssh_status === 'true' && $device->os_family !== 'DD-WRT' && $device->os_family !== 'LEDE' && ! empty($credentials_ssh) && ! empty($audit_script)) {
			$result = '';
			$log->message = 'Starting SSH audit script for ' . $device->ip;
			discovery_log($log);
			// copy the audit script to the target ip
			$destination = $CI->config->config['discovery_linux_script_directory'];
			if (substr($destination, -1) !== '/') {
				$destination .= '/';
			}
			$destination .= $script_name;
			$parameters = new stdClass();
			$parameters->ip = $device->ip;
			$parameters->credentials = $credentials_ssh;
			$parameters->source = $audit_script;
			$parameters->destination = $destination;
			$parameters->discovery_id = $discovery->id;
			$parameters->ssh_port = $ip_scan->details->ssh_port;
			$temp = scp($parameters);
			if ( ! $temp) {
				$audit_script = '';
				$log->severity = 3;
				$log->message = 'Could not SCP audit script to ' . $device->ip . ' at ' . $destination;
				$log->command_status = 'fail';
				discovery_log($log);
				$log->severity = 7;
				$log->message = '';
				$log->command_status = 'notice';
			} else {
				// Successfully copied the audit script, now chmod it
				$command = 'chmod ' . $CI->config->config['discovery_linux_script_permissions'] . ' ' . $destination;
				// No use testing for a result as a chmod produces no output
				$parameters = new stdClass();
				$parameters->discovery_id = $discovery->id;
				$parameters->ip = $device->ip;
				$parameters->credentials = $credentials_ssh;
				$parameters->command = $command;
				$parameters->ssh_port = $ip_scan->details->ssh_port;
				$test = ssh_command($parameters);
				if ($test === false) {
					$log->severity = 3;
					$log->message = 'Could not chmod script on ' . $device->ip;
					$log->command_status = 'fail';
					discovery_log($log);
					$log->severity = 7;
					$log->message = '';
					$log->command_status = 'notice';
					$audit_script = '';
				}
			}
			unset($destination);
			if ($audit_script !== '') {
				$command = $CI->config->config['discovery_linux_script_directory'].$script_name.' submit_online=n create_file=y debugging=1 self_delete=y system_id='.$device->id.' last_seen_by=audit_ssh discovery_id='.$discovery->id;
				$log->message = 'Running audit using ' . $credentials_ssh->credentials->username . '.';
				$log->command_output = '';
				$log->command_status = 'notice';
				if ($credentials_ssh->credentials->username === 'root') {
					$log->message = 'Running audit using root user.';
				} else if ( ! empty($device->which_sudo) && $device->use_sudo) {
					$command = "{$device->which_sudo} " . $command;
					$log->message = 'Running audit using ' .  $credentials_ssh->credentials->username . ' with sudo, as per config.';
				} else if ( ! empty($device->which_sudo) && ! $device->use_sudo) {
					$log->message = 'Running audit using ' .  $credentials_ssh->credentials->username . ' without sudo, as sudo attempt failed.';
				} else if (empty($device->which_sudo)) {
					$log->message = 'Running audit using ' . $credentials_ssh->credentials->username . ' as sudo not present.';
				}
				$log->command = $command;
				discovery_log($log);
				$parameters = new stdClass();
				$parameters->discovery_id = $discovery->id;
				$parameters->ip = $device->ip;
				$parameters->credentials = $credentials_ssh;
				$parameters->command = $command;
				$parameters->ssh_port = $ip_scan->details->ssh_port;
				$result = ssh_command($parameters);
			} else {

				// $log->severity = 3;
				// $log->message = 'No audit script for ' . $device->ip;
				// $log->command_status = 'fail';
				// discovery_log($log);
				// $log->severity = 7;
				// $log->message = '';
				// $log->command_status = 'notice';

			}
			$audit_result = '';
			if ($audit_script !== '' && ! empty($result) && gettype($result) === 'array') {
				$audit_file = '';
				foreach ($result as $line) {
					if (strpos($line, 'File  ') !== false) {
						$audit_file = $line;
					}
				}
				if ($audit_file === '') {
					$log->severity = 5;
					$log->message = 'No audit file returned in output.';
					$log->command_status = 'fail';
					discovery_log($log);
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
					$parameters = new stdClass();
					$parameters->ip = $device->ip;
					$parameters->credentials = $credentials_ssh;
					$parameters->source = $audit_file;
					$parameters->destination = $destination;
					$parameters->discovery_id = $discovery->id;
					$parameters->ssh_port = $ip_scan->details->ssh_port;
					// Allow 20 seconds to copy the file
					$CI->config->config['discovery_ssh_timeout'] = 20;
					$temp = scp_get($parameters);
					if ($temp) {
						$audit_result = file_get_contents($destination);
						if (empty($audit_result)) {
							$log->severity = 5;
							$log->message = 'Could not read audit result file.';
							$log->command_status = 'fail';
							$log->command = "file_get_contents('{$destination}')";
							$log->command_output = '';
							discovery_log($log);
							$log->severity = 7;
							$log->message = '';
							$log->command_status = 'notice';
							$log->command = '';
							$log->command_output = '';
						}
					} else {
						$log->severity = 5;
						$log->message = 'Could not SCP GET to ' . $destination;
						$log->command_status = 'fail';
						discovery_log($log);
						$log->severity = 7;
						$log->message = '';
						$log->command_status = 'notice';
					}
					// Delete the remote file
					$command = 'rm ' . $audit_file;
					$temp = 0;
					if ( ! empty($device->which_sudo) && ! empty($device->use_sudo) && $credentials_ssh->credentials->username !== 'root') {
						// add sudo, we need this if we have run the audit using sudo
						$command = "{$device->which_sudo} " . $command;
						// Allow 10 seconds to run the command
						$temp = intval($CI->config->config['discovery_ssh_timeout']);
						$CI->config->config['discovery_ssh_timeout'] = 5;
					}
					$parameters = new stdClass();
					$parameters->discovery_id = $discovery->id;
					$parameters->ip = $device->ip;
					$parameters->credentials = $credentials_ssh;
					$parameters->command = $command;
					$parameters->ssh_port = $ip_scan->details->ssh_port;
					ssh_command($parameters);
					if ($temp > 0) {
						$CI->config->config['discovery_ssh_timeout'] = $temp;
					}
				}
			}
		}

		// Delete the local audit script if it's not a default script
		if ( ! empty($audit_script) && strpos($audit_script, 'scripts') !== false) {
			$log->severity = 7;
			$log->message = 'Attempt to delete temp audit script succeeded';
			$log->command_status = 'notice';
			$log->command = "unlink('" . $audit_script ."')";
			try {
				unlink($audit_script);
			} catch (Exception $error) {
				$log->severity = 4;
				$log->message = 'Could not delete temp audit script';
				$log->command_status = 'fail';
				$log->command_output = json_encode($error);
			}
			discovery_log($log);
			$log->severity = 7;
			$log->message = '';
			$log->command_status = 'notice';
			$log->command = '';
		}

		$audit = false;
		if ( ! empty($audit_result)) {
			$log->message = 'Converting audit result';
			discovery_log($log);
			$audit_result = str_replace('data=<?xml version="1.0" encoding="UTF-8"?>', '<?xml version="1.0" encoding="UTF-8"?>', $audit_result);
			$parameters = new stdClass();
			$parameters->input = $audit_result;
			$parameters->discovery_id = $discovery->id;
			$parameters->ip = $device->ip;
			$audit = audit_convert($parameters);
			if ( ! $audit) {
				$log->severity = 4;
				$log->message = 'Could not convert audit result from XML.';
				$log->command_status = 'fail';
				discovery_log($log);
				$log->severity = 7;
				$log->message = '';
				$log->command_status = 'notice';
			} else {
				$ip_audited_count = 1;
			}
		}

		// Delete the local audit result file
		if ( ! empty($audit_result)) {
			if ($audit) {
				if ( ! empty($destination)) {
					$log->severity = 7;
					$log->message = 'Delete audit result from filesystem.';
					$log->command_status = 'success';
					$log->command = "unlink('" . $destination . "')";
					$log->command_output = '';
					try {
						unlink($destination);
					} catch (Exception $error) {
						$log->severity = 4;
						$log->command_status = 'fail';
						$log->command_output = json_encode($error);
					}
					discovery_log($log);
				}
			} else {
				$log->severity = 5;
				$log->message = "Audit result left on filesystem at {$destination}, please check.";
				$log->command_status = 'fail';
				$log->command = '';
				$log->command_output = '';
				discovery_log($log);
			}
		}
		$log->severity = 7;
		$log->message = '';
		$log->command_status = 'notice';
		$log->command = '';
		$log->command_output = '';

		if ($audit) {
			$log->message = 'Formatting system section of audit result';
			discovery_log($log);
			$parameters = new stdClass();
			$parameters->discovery_id = $discovery->id;
			$parameters->input = $audit->system;
			$parameters->ip = $device->ip;
			$audit->system = audit_format_system($parameters);
			// We don't care what the audit result says is the "ip", we KNOW it's the IP we just used to discover this device
			$audit->system->ip = $device->ip;
		}

		if ($audit) {
			// Run our rules to update the device attributes
			$parameters = new stdClass();
			$parameters->discovery_id = intval($discovery->id);
			$parameters->ip = $device->ip;
			$parameters->action = 'return';
			$parameters->device = $audit->system;
			$CI->m_rules->execute($parameters);
		} else {
			$parameters = new stdClass();
			$parameters->id = intval($device->id);
			$parameters->discovery_id = intval($discovery->id);
			$parameters->ip = $device->ip;
			$parameters->action = 'update';
			$CI->m_rules->execute($parameters);
		}

		if ($audit) {
			$log->message = 'Matching device from audit result';
			discovery_log($log);
			$parameters = new stdCLass();
			$parameters->details = $audit->system;
			$parameters->discovery_id = $discovery->id;
			$parameters->match = $discovery->other->match;
			$audit_device = $CI->m_device->match($parameters);
			$audit->system->discovery_id = $discovery->id;
			if ( ! empty($audit->system->id)) {
				$log->system_id = $audit->system->id;
			}
			if (empty($audit_device) && ! empty($audit->system->id)) {
				$audit_device = intval($audit->system->id);
			}
			if ( ! empty($audit_device) && ! empty($audit->system->id) && $audit_device !== $audit->system->id) {
				// We delete this original system as likely with limited data (from
				// nmap and/or snmp and/or SSH) we couldn't match an existing system
				// Now we have an actual audit result with plenty of data
				// we have found a match and it's not the original
				$sql = '/* discoveries_helper::ip_audit */ DELETE FROM system WHERE id = ?';
				$query = $CI->db->query($sql, array($audit->system->id));
				$log->system_id = $audit_device;
				$log->message = 'System Id provided differs from System Id found for ' . $audit->system->hostname;
				discovery_log($log);
			}
			$audit->system->id = $audit_device;
			if (empty($audit_device)) {
				// insert a new system
				# Set the device org_id based on this discovery
				if ( ! empty($discovery->devices_assigned_to_org)) {
					$audit->system->org_id = $discovery->devices_assigned_to_org;
				}
				if ( ! empty($discovery->devices_assigned_to_location)) {
					$audit->system->org_id = $discovery->devices_assigned_to_location;
				}
				$audit->system->id = $CI->m_device->insert($audit->system);
				$log->message = 'CREATE entry for ' . @$audit->system->name . ' (' . @$audit->system->ip . '), System ID ' . $audit->system->id;
				discovery_log($log);
				$audit->system->original_last_seen = '';
				$log->system_id = $audit->system->id;
			} else {
				// update an existing system
				$log->message = 'UPDATE entry for ' . @$audit->system->name . ' (' . @$audit->system->ip . '), System ID ' . $audit->system->id;
				discovery_log($log);
				$CI->m_device->update($audit->system);
				$log->system_id = $audit->system->id;
			}
		}

		$sql = '/* discoveries_helper::ip_audit */ ' . 'UPDATE `discovery_log` SET system_id = ? WHERE discovery_id = ? and ip = ?';
		$data = array($log->system_id, $discovery->id, $device->ip);
		$query = $CI->db->query($sql, $data);

		if ($audit) {
			$script_version = '';
			if ( ! empty($audit->system->script_version)) {
				$script_version = $audit->system->script_version;
			}
			$CI->m_audit_log->create($audit->system->id, '', $audit->system->last_seen_by, $audit->system->audits_ip, '', '', $audit->system->last_seen, $script_version);
		}

		if ($audit) {
			foreach ($audit as $key => $value) {
				if ($key !== 'system' && $key !== 'audit_wmi_fail' && $key !== 'dns') {
					$parameters = new stdClass();
					$parameters->table = $key;
					$parameters->details = $audit->system;
					$parameters->input = $value;
					$parameters->discovery_id = $discovery->id;
					$CI->m_devices_components->process_component($parameters);
				}
			}
		}

		if ($audit) {
			if ( ! empty($audit->audit_wmi_fail)) {
				$CI->m_audit_log->update('debug', 'audit_wmi_fail', $audit->system->id, $audit->system->last_seen);
				$CI->m_audit_log->update('wmi_fails', $audit->audit_wmi_fail, $audit->system->id, $audit->system->last_seen);
			}
		}

		// Generate any DNS entries required - only if a collector or the audit is NOT from a collector
		if ( ! empty($CI->config->config['servers']) OR empty($audit->system->collector_uuid)) {
			if ( ! empty($audit->system->id)) {
				$dns_entries = $CI->m_devices_components->create_dns_entries((int)$audit->system->id);
			} else if ( ! empty($device->id)) {
				$dns_entries = $CI->m_devices_components->create_dns_entries((int)$device->id);
			}
			if ( ! empty($audit->dns) && count($audit->dns) > 0) {
				foreach ($audit->dns as $item) {
					if ( ! empty($item->ip) && ! empty($item->name) && ! empty($item->fqdn)) {
						$dns_entries[] = $item;
					}
				}
			}
			unset($item);
			if ( ! empty($dns_entries) && count($dns_entries) > 0) {
				$parameters = new stdClass();
				$parameters->table = 'dns';
				$parameters->input = $dns_entries;
				$parameters->discovery_id = $discovery->id;
				if ( ! empty($audit->system->id)) {
					$parameters->details = $audit->system;
					$CI->m_devices_components->process_component($parameters);
				} else if ( ! empty($device->id)) {
					$parameters->details = $device;
					$CI->m_devices_components->process_component($parameters);
				}
			}
			unset($dns_entries);
		}

		// If we are configured as a collector, forward the information to the server
		if ($CI->config->config['servers'] !== '') {
			$server = json_decode($CI->config->config['servers']);
			$log->message = 'Sending result to ' . $server->host . ' because this server is a collector.';
			discovery_log($log);

			$device_json = '';
			if ( ! empty($device->id)) {
				$device_json = new stdClass();
				$device_json->system = new stdClass();
				foreach ($device as $key => $value) {
					if ($key !== 'id' && ! empty($value)) {
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
				if (isset($guests) && count($guests) > 0) {
					$device_json->vm = new stdClass();
					$device_json->vm = array();
					foreach ($guests as $item) {
						$device_json->vm[] = $item;
					}
				}
				if (isset($modules) && count($modules) > 0) {
					$device_json->module = new stdClass();
					$device_json->module = array();
					foreach ($modules as $item) {
						$device_json->module[] = $item;
					}
				}
				if (isset($ip) && count($ip) > 0) {
					$device_json->ip = new stdClass();
					$device_json->ip = array();
					foreach ($ip->item as $item) {
						$device_json->ip[] = $item;
					}
				}
				if (isset($network_interfaces) && is_array($network_interfaces) && count($network_interfaces) > 0) {
					$device_json->network = new stdClass();
					$device_json->network = array();
					foreach ($network_interfaces as $item) {
						$device_json->network[] = $item;
					}
				}
				unset($device_json->system->id);
				unset($device_json->system->first_seen);
				$device_json = json_encode($device_json);
			}

			if ( ! empty($audit->system->id)) {
				unset($audit->system->id);
				unset($audit->system->original_last_seen_by);
				unset($audit->system->original_last_seen);
				unset($audit->system->first_seen);
				$audit->system->collector_uuid = $CI->config->config['uuid'];
				$device_json = json_encode($audit);
			}

			$url = $server->host . $server->community . '/index.php/input/devices';
			$data = array('data' => $device_json);
			// We must use the key 'http' even if we send the request to https://...
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
				// error
				$log->severity = 4;
				$log->message = 'Could not send result to ' . $server->host . $server->community . '/index.php/input/devices - please check with your server administrator.';
				discovery_log($log);
				$log->severity = 7;
			} else {
				// success
				$log->severity = 7;
				$log->message = 'Result sent to ' . $server->host . '.';
				discovery_log($log);
			}
		}

		// NOTE - The log helper will increase the count in discoveries.ip_discovered_count for us because Collector / Server
		//      - It will match on the message string, so don't change without also changing log_helper
		if ( ! empty($ip_audited_count)) {
			$log->message = 'Audited device at ' . $device->ip;
			discovery_log($log);
		}

		$CI->m_device->set_identification($device->id);

		$log->command = 'Peak Memory';
		$log->command_output = round((memory_get_peak_usage(false)/1024/1024), 3) . ' MiB';
		$log->command_status = 'device complete';
		$log->command_time_to_execute = microtime(true)  - $start;
		$log->message = 'IP Audit finish on device ' . ip_address_from_db($device->ip);
		$log->ip = ip_address_from_db($device->ip);
		discovery_log($log);

		// Check if this discovery is complete and set status if so
		$sql = '/* discoveries_helper::ip_audit */ ' . 'SELECT COUNT(*) AS `count` FROM `discovery_log` WHERE `discovery_id` = ' . intval($discovery->id) . " AND `command_status` = 'device complete'";
		$query = $CI->db->query($sql);
		$result = $query->result();
		if ( ! empty($result[0]->count)) {
			$count = intval($result[0]->count);
			$sql = '/* discoveries_helper::ip_audit */ ' . 'SELECT `ip_responding_count` AS `count` FROM `discoveries` WHERE `id` = ' . intval($discovery->id);
			$query = $CI->db->query($sql);
			$result = $query->result();
			$device_count = intval($result[0]->count);
			if ($count === $device_count) {
				// NOTE - the log_helper will mark this in the database as complete for us, think Collector / Server
				$log->message = 'Discovery has finished.';
				$log->command = '';
				$log->command_output = '';
				$log->command_status = 'finished';
				$log->ip = '127.0.0.1';
				unset($log->system_id);
				discovery_log($log);
			}
		}
	}
}







if ( ! function_exists('discover_ad')) {
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
		$CI = get_instance();
		$discovery_id = $queue_item->discovery_id;
		$item = $CI->m_discoveries->read($discovery_id);
		$discovery = $item[0];
		unset($item);
		$log = new stdClass();
		$log->discovery_id = $discovery_id;
		$log->command_status = 'start';
		$log->message = 'Starting discovery for ' . $discovery->attributes->name;
		$log->ip = '127.0.0.1';
		$log->severity = 6;
		discovery_log($log);
		$log->command_status = 'notice';

		$sql = '/* discoveries_helper::discover_ad */ ' . "UPDATE `discoveries` SET `status` = 'running', `ip_all_count` = 0, `ip_responding_count` = 0, `ip_scanned_count` = 0, `ip_discovered_count` = 0, `ip_audited_count` = 0, `last_run` = NOW() WHERE id = ?";
		$data = array($discovery_id);
		$CI->db->query($sql, $data);

		// We need to get the Org Children of this particular discovery run
		$orgs = $CI->m_orgs->get_children($discovery->attributes->org_id);
		$orgs[] = $discovery->attributes->org_id;
		$orgs = implode(',', $orgs);

		// Stored credential sets
		$credentials = $CI->m_credentials->collection($orgs);
		// get the list of subnets from AD
		// TODO - make the below able to use LDAPS as well as LDAP
		$ldapuri = 'ldap://' . $discovery->attributes->other->ad_server;
		$error_reporting = error_reporting();
		error_reporting(0);
		$ldapconn = @ldap_connect($ldapuri);
		error_reporting($error_reporting);
		unset($error_reporting);
		if ( ! $ldapconn) {
			// log the failed attempt to connect to AD
			$log->severity = 4;
			$log->details = 'Could not connect to AD ' . $discovery->attributes->other->ad_domain . ' at ' . $discovery->attributes->other->ad_server;
			$log->command_status = 'fail';
			discovery_log($log);
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
					discovery_log($log);
					$base_dn = 'CN=Subnets,CN=Sites,CN=Configuration,dc=' . implode(', dc=', explode('.', $discovery->attributes->other->ad_domain));
					$filter = '(&(objectclass=*))';
					$justthese = array('distinguishedName', 'name', 'siteobject');
					$search_result = ldap_search($ldapconn, $base_dn, $filter, $justthese);
					$info = ldap_get_entries($ldapconn, $search_result);
					if (empty($info)) {
						$log->message = 'Could not Retrieve subnets from ' . $discovery->attributes->other->ad_domain . ' on ' . $discovery->attributes->other->ad_server . ' using ' . $credential->attributes->name;
						$log->severity = 6;
						$log->command_output = '';
						$log->command_status = 'fail';
						discovery_log($log);
					} else {
						$log->severity = 7;
						$log->message = 'Retrieved subnets from ' . $discovery->attributes->other->ad_domain . ' on ' . $discovery->attributes->other->ad_server;
						$log->command_status = 'success';
						discovery_log($log);
						break;
					}
				} else {
					$log->severity = 7;
					$log->message = 'Could not bind to AD using ' . $credential->attributes->name;
					$log->command_status = 'warning';
					discovery_log($log);
					$bind = false;
				}
			}
		}
		if ( $bind === false OR empty($info)) {
			$log->severity = 5;
			$log->command_status = 'fail';
			$log->message = 'Could not bind to AD ' . $discovery->attributes->other->ad_domain . ' at ' . $discovery->attributes->other->ad_server;
			discovery_log($log);
			return false;
		}
		foreach ($info as $subnet) {
			$log->command_status = 'notice';
			if ( ! empty($subnet['name'][0]) && $subnet['name'][0] !== 'Subnets') {
				unset($network);
				$network = new stdClass();
				if ( ! empty($subnet['siteobject'][0])) {
					$temp = explode(',', $subnet['siteobject'][0]);
					$temp_name = explode('=', $temp[0]);
					$name = $temp_name[1] . ' - ';
				} else {
					$name = '';
				}
				$network->name = $name . $subnet['name'][0];
				$network->network = $subnet['name'][0];
				$network->org_id = $discovery->attributes->org_id;
				$network->description = @$subnet['description'][0];
				if ( ! empty($subnet['location'][0])) {
					$network->description .= ' (' . $subnet['location'][0] . ')';
				}
				$log->message = 'Upserting network - ' . $network->name;
				discovery_log($log);
				$CI->m_networks->upsert($network);

				$ad_discovery = new stdClass();
				$ad_discovery->name = $network->name;
				$ad_discovery->org_id = $discovery->attributes->org_id;
				$ad_discovery->type = 'subnet';
				$ad_discovery->devices_assigned_to_org = $discovery->attributes->devices_assigned_to_org;
				$ad_discovery->devices_assigned_to_location = $discovery->attributes->devices_assigned_to_location;
				if (gettype($discovery->attributes->other) === 'string') {
					$ad_discovery->other = json_decode($discovery->attributes->other);
				} else {
					$ad_discovery->other = $discovery->attributes->other;
				}
				unset($ad_discovery->other->ad_server);
				unset($ad_discovery->other->ad_comain);
				$ad_discovery->other->match = new stdClass();
				$ad_discovery->other->subnet = $subnet['name'][0];

				$sql = '/* discoveries_helper::discover_ad */ ' . "SELECT * FROM discoveries WHERE name = ? AND org_id = ? and description = 'Subnet - " . $subnet['name'][0] . "'";
				$query = $CI->db->query($sql, array($ad_discovery->name, intval($discovery->attributes->org_id)));
				$result = $query->result();
				// TODO - JSON decode this and test the subnet. We have other items stored inside 'other' (nmap options, etc).
				$this_id = false;
				if (empty($result)) {
					$log->message = 'Creating and executing discovery on subnet ' . $network->name;
					discovery_log($log);
					$this_id = $CI->m_discoveries->create($ad_discovery);
				} else {
					$this_id = $result[0]->id;
					$log->message = 'Discovery for ' . $network->name . ' exists, running.';
					discovery_log($log);
				}
				if ( ! empty($this_id)) {
					// put the discovery into the queue
					$details = new stdClass();
					$details->name = $network->name;
					$details->type = 'subnet';
					$details->org_id =  $discovery->attributes->org_id;
					$details->discovery_id = $this_id;
					if ($CI->m_queue->create('subnet', $details)) {
						$log->command_status = 'success';
						$log->message = 'Discovery ' . $network->name . ' placed in queue for execution.';
					} else {
						$log->command_status = 'failed';
						$log->message = 'Discovery ' . $network->name . ' could not be placed 9in the queue. See system log for more details.';
						$log->severity = 4;
					}
					$log->command = '';
					$log->command_time_to_execute = microtime(true) - $start;
					discovery_log($log);
					$log->severity = 7;
				}
			}
		}
		// NOTE - the log_helper will mark this in the database as complete for us, think Collector / Server
		$log->severity = 6;
		$log->message = 'Discovery has finished.';
		$log->command = '';
		$log->command_output = '';
		$log->command_status = 'finished';
		$log->command_time_to_execute = gmdate('H:i:s', intval(microtime(true) - $start));
		$log->ip = '127.0.0.1';
		discovery_log($log);
		return true;
	}
}
// End of file discoveries_helper.php
// Location: ./helpers/discoveries_helper.php
