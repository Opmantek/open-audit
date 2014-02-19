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


if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('get_snmp')) {

	function get_snmp($details ) {
		error_reporting(E_ALL);
		$CI =& get_instance();

		if (!isset($details->show_output)) {
			$details->show_output = FALSE;
		}

		if ($details->show_output == TRUE) { echo "SNMP - scanning attempt on $details->man_ip_address.<br />"; }

		if (!isset($CI->data['config']->default_snmp_community)) {
			$CI->load->model("m_oa_config");
			$default_snmp_community = $CI->m_oa_config->get_config_item('default_snmp_community');
		} else {
			$default_snmp_community = $CI->data['config']->default_snmp_community;
		}
		if ($default_snmp_community == '') {
			$default_snmp_community = 'public';
		}
		
		# setup the log file
		if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
			$file = "/usr/local/open-audit/other/open-audit.log";
		} else {
			$file = "c:\\xampplite\\open-audit\\other\\open-audit.log";
		}

		// if (!isset($details->system_id) or $details->system_id == '') {
		// 	$details->snmp_community = $default_snmp_community;
		// 	$details->snmp_version = '2c';
		// 	$details->snmp_port = '161';
		// } else {
		// 	$encrypted_access_details = $CI->m_system->get_access_details($details->system_id);
		// 	if ($encrypted_access_details > '') { 
		// 		$decoded_access_details = $CI->encrypt->decode($encrypted_access_details);
		// 		$decoded_access_details = json_decode($decoded_access_details);
		// 		$details->snmp_community = @$decoded_access_details->snmp_community;
		// 		$details->snmp_version = @$decoded_access_details->snmp_version;
		// 		$details->snmp_port = @$decoded_access_details->snmp_port;
		// 		$details->man_ip_address = @$decoded_access_details->ip_address;
		// 	}
		// }

		# device specific credentials
		$device_specific_credentials = $CI->m_system->get_access_details($details->system_id);
		$device_specific_credentials = $CI->encrypt->decode($device_specific_credentials);
		$specific = json_decode($device_specific_credentials);

		# default Open-AudIT credentials
		$default = $CI->m_oa_config->get_credentials();

		# decrypt any supplied credentials
		$supplied = new stdClass();
		if (isset($details->credentials) and $details->credentials > '') {
			$supplied_credentials = $details->credentials;
			$supplied_credentials = $CI->encrypt->decode($supplied_credentials);
			$supplied_credentials = json_decode($supplied_credentials);
			$supplied->snmp_community = @$supplied_credentials->snmp_community;
			$supplied->snmp_version = @$supplied_credentials->snmp_version;
			$supplied->snmp_port = @$supplied_credentials->snmp_port;
			$supplied->ssh_username = @$supplied_credentials->ssh_username;
			$supplied->ssh_password = @$supplied_credentials->ssh_password;
			$supplied->windows_username = @$supplied_credentials->windows_username;
			$supplied->windows_password = @$supplied_credentials->windows_password;
			$supplied->windows_domain = @$supplied_credentials->windows_domain;
		} else {
			$supplied->snmp_community = '';
			$supplied->snmp_version = '';
			$supplied->snmp_port = '';
			$supplied->ssh_username = '';
			$supplied->ssh_password = '';
			$supplied->windows_username = '';
			$supplied->windows_password = '';
			$supplied->windows_domain = '';
		}

		// if (!isset($details->snmp_community) or $details->snmp_community == '') { 
		// 	$details->snmp_community = $default_snmp_community;
		// 	if ($details->show_output == TRUE) { echo "<br />Using <span style='color: blue;'>default</span> SNMP community. You can set the device credentials on the System Summary page. On the left menu, click 'Summary' then 'Credentials'.<br /><br />"; }
		// } else {
		// 	if ($details->show_output == TRUE) { echo "Using device specific SNMP credentials.<br />"; }
		// }
		if (!isset($details->snmp_version) or $details->snmp_version == '') { $details->snmp_version = '2c'; }
		if (!isset($details->snmp_port) or $details->snmp_port == '') { $details->snmp_port = '161'; }
		if (!isset($details->type)) { $details->type = ''; }


		# we need at least an ip address or hostname
		if ((!isset($details->man_ip_address) or $details->man_ip_address == '' or 
			$details->man_ip_address == '000.000.000.000' or $details->man_ip_address == '0.0.0.0') and 
			(!isset($details->hostname) or $details->hostname == '')) {
			unset($details->man_ip_address);
			if ($details->show_output == TRUE) { echo "SNMP - No ip address or hostname provided - exiting.<br />"; }
			return;
		}

		$module = new stdclass;

		if (!filter_var($details->man_ip_address, FILTER_VALIDATE_IP)) {
			# not a valid ip address - assume it's a hostname
			$details->hostname = $details->man_ip_address;
			$details->man_ip_address = gethostbyname($details->hostname);
		}

		if (!isset($details->hostname) or $details->hostname == '') {
			$details->hostname = gethostbyaddr(ip_address_from_db($details->man_ip_address));
		}

		if (!isset($details->man_ip_address) or $details->man_ip_address == '' or 
			$details->man_ip_address == '0.0.0.0' or $details->man_ip_address == '000.000.000.000') {
			$details->man_ip_address = gethostbyname($details->hostname);
		}

		if (!filter_var($details->hostname, FILTER_VALIDATE_IP)) {
			# we have a name of some sort
			if (strpos($details->hostname, ".") !== FALSE) {
				# fqdn - explode it
				if (!isset($details->fqdn) or $details->fqdn == '') { $details->fqdn = $details->hostname; }
				$i = explode(".", $details->hostname);
				$details->hostname = $i[0];
				if (!isset($details->domain) or $details->domain == '') {
					unset($i[0]);
					$details->domain = implode(".", $i);
				}
			}
		}
		
		$timeout = '3000000';
		$retries = '2';

		if (!extension_loaded('snmp')) { 
			if ($details->show_output == TRUE) { echo "SNMP - PHP SNMP extension not loaded - exiting.<br />"; }
			return($details); 
		}

		# test for SNMP version
		# to do - test for v3
		$test_v1 = '';
		$test_v2 = '';

		$log_timestamp = date("M d H:i:s");
		$log_hostname = php_uname('n');
		$log_pid = getmypid();
		$log_name = "H:snmp_helper F:get_snmp";

		if (!isset($details->snmp_community) or $details->snmp_community == '') { 
			$details->snmp_community = ''; 
		} else {
			if ($test_v2 = @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.5.0", $timeout)) {
				# v2 is contactable
				$details->snmp_version = '2c';
				if ($details->show_output == TRUE) { echo "SNMP - v2 connected to $details->man_ip_address using supplied credentials.<br />"; }
			} else {
				$details->snmp_community = '';
			}
		}

		# test the device specific credentials
		if ($details->snmp_community == '' and isset($specific->snmp_community) and $specific->snmp_community > '') {
			if ($test_v2 = @snmp2_get($details->man_ip_address, $specific->snmp_community, "1.3.6.1.2.1.1.5.0", $timeout)) {
				# v2 is contactable
				$details->snmp_version = '2c';
				$details->snmp_community = $specific->snmp_community;
				if ($details->show_output == TRUE) { echo "SNMP - v2 connected to $details->man_ip_address using device specific credentials.<br />"; }
			}
		}
		
		# test the supplied credentials
		if ($details->snmp_community == '' and isset($supplied->snmp_community) and $supplied->snmp_community > '') {
			if ($test_v2 = @snmp2_get($details->man_ip_address, $supplied->snmp_community, "1.3.6.1.2.1.1.5.0", $timeout)) {
				# v2 is contactable
				$details->snmp_version = '2c';
				$details->snmp_community = $supplied->snmp_community;
				if ($details->show_output == TRUE) { echo "SNMP - v2 connected to $details->man_ip_address using supplied credentials.<br />"; }
			}
		}

		# test the open-audit default credentials
		if ($details->snmp_community == '' and isset($default->default_snmp_community) and $default->default_snmp_community > '') {
			if ($test_v2 = @snmp2_get($details->man_ip_address, $default->default_snmp_community, "1.3.6.1.2.1.1.5.0", $timeout)) {
				# v2 is contactable
				$details->snmp_version = '2c';
				$details->snmp_community = $default->default_snmp_community;
				if ($details->show_output == TRUE) { echo "SNMP - v2 connected to $details->man_ip_address using default credentials.<br />"; }
			}
		}

		# test the device specific credentials
		if ($details->snmp_community == '' and isset($specific->snmp_community) and $specific->snmp_community > '') {
			if ($test_v1 = @snmpget($details->man_ip_address, $specific->snmp_community, "1.3.6.1.2.1.1.5.0", $timeout)) {
				# v1 is contactable
				$details->snmp_version = '1';
				$details->snmp_community = $specific->snmp_community;
				if ($details->show_output == TRUE) { echo "SNMP - v1 connected to $details->man_ip_address using device specific credentials.<br />"; }
			}
		}

		# test the supplied credentials
		if ($details->snmp_community == '' and isset($supplied->snmp_community) and $supplied->snmp_community > '') {
			if ($test_v1 = @snmpget($details->man_ip_address, $supplied->snmp_community, "1.3.6.1.2.1.1.5.0", $timeout)) {
				# v1 is contactable
				$details->snmp_version = '1';
				$details->snmp_community = $supplied->snmp_community;
				if ($details->show_output == TRUE) { echo "SNMP - v1 connected to $details->man_ip_address using supplied credentials.<br />"; }
			}
		}

		# test the open-audit default credentials
		if ($details->snmp_community == '' and isset($default->default_snmp_community) and $default->default_snmp_community > '') {
			if ($test_v1 = @snmpget($details->man_ip_address, $default->default_snmp_community, "1.3.6.1.2.1.1.5.0", $timeout)) {
				# v1 is contactable
				$details->snmp_version = '1';
				$details->snmp_community = $default->default_snmp_community;
				if ($details->show_output == TRUE) { echo "SNMP - v1 connected to $details->man_ip_address using default credentials.<br />"; }
			}
		}

		$log_line = '';
		if ($test_v1 == '' and $test_v2 == '') {
			$log_line = $log_timestamp . " " . $log_hostname . " " . $log_pid . " " . $log_name . " " . $details->man_ip_address . " not SNMP scanned.\n";
			if ($details->show_output == TRUE) { echo "SNMP - Unable to connect using SNMP (bad credentials or device not responding) - exiting.<br />"; }
		}

		if ($log_line > '') {
			$handle = fopen($file, "a");
			fwrite($handle, $log_line);
			fclose($handle);
		}

		if ($test_v2 > '') {
			$details->snmp_version = '2';

			if ($details->show_output == TRUE) { echo "SNMP - scanning using SNMP v2.<br />"; }

			snmp_set_oid_output_format(SNMP_OID_OUTPUT_NUMERIC);
			$details->serial = "";
			$details->model = "";
			$details->type = "unknown";		

			// hostname
			if (filter_var($details->hostname, FILTER_VALIDATE_IP)) {
				// we have an ip address, not a hostname - attempt to get a hostname
				$i = explode(".", snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.5.0", $timeout, $retries)));
				$details->hostname = $i[0];
				$details->hostname_length = 'short';
			}


			// description
			$details->description = '';
			$details->description = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.1.0" ));


			// sysObjectID
			$details->snmp_oid = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.2.0" ));
			if ($details->show_output == TRUE) { echo "SNMP - SysObjectId: $details->snmp_oid.<br />"; }
			if ($details->snmp_oid > '') {
				$details->manufacturer = get_oid($details->snmp_oid);
				if ($details->show_output == TRUE and $details->manufacturer > "") { echo "SNMP - Manufacturer: $details->manufacturer.<br />"; }
				$explode = explode(".", $details->snmp_oid);
				if (!isset($explode[6])) {
					# for some reason we got an OID, but not enough to specify a manufacturer
					$explode[6] = '';
					if (strpos($details->description, "ZyXEL") !== FALSE ) {
						# we have a Zyxel device
						$explode[6] = '890';
					}
				} 
				if (file_exists(BASEPATH . '../application/helpers/snmp_' . $explode[6] . '_helper.php')) {
					if ($details->show_output == TRUE) { echo "SNMP - Loading Model Helper for " . $explode[6] . ".<br />"; }
					$CI->load->helper('snmp_' . $explode[6]);
					get_oid_details($details);
				} 
			}
			if ($details->show_output == TRUE) { echo "SNMP - Model: $details->model.<br />"; }
			if ($details->show_output == TRUE and $details->type != 'unknown') { echo "SNMP - Type: $details->type.<br />"; }

			// guess at manufacturer using entity mib
			if (!isset($details->manufacturer) or $details->manufacturer == '') {
				$details->manufacturer = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.12.1"));
			}
			

			// guess at model using entity mib
			if (!isset($details->model) or $details->model == '') {
				$details->model =snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.13"));
				if ($details->show_output == TRUE) { echo "SNMP - Manufacturer: $details->manufacturer.<br />"; }
			}


			// guess at model using host resources mib
			if (!isset($details->model) or $details->model == '' ) {
				$details->model = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.25.3.2.1.3.1"));
				if ($details->show_output == TRUE) { echo "SNMP - Manufacturer: $details->manufacturer.<br />"; }
			}


			// serial 
			if (!isset($details->serial) or $details->serial == '') {
				# the entity mib serial
				if ($details->serial == '') {
					$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.11"));
					if ($details->show_output == TRUE and $details->serial > "") { echo "SNMP - Serial: $details->serial.<br />"; }
				}

				# generic snmp
				if ($details->serial == '') {
					$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.5.1.1.17.1"));
					if ($details->show_output == TRUE and $details->serial > "") { echo "SNMP - Serial: $details->serial.<br />"; }
				}

				# below is another generic attempt - works for my NetGear Cable Modem
				if ($details->serial == '') {
					$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.4491.2.4.1.1.1.3.0"));
					if ($details->show_output == TRUE and $details->serial > "") { echo "SNMP - Serial: $details->serial.<br />"; }
				}
			}

			if ($details->show_output == TRUE and $details->serial == "") { echo "SNMP - Serial: <span style='color: blue;'>not retrieved</span>.<br />"; }


			// mac address
			if (!isset($details->mac_address) or $details->mac_address == '' ) {
				$interface_number = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.20.1.2." . $details->man_ip_address));
				$details->mac_address = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.2.2.1.6." . $interface_number));
				$details->mac_address = @str_replace(" ", ":", $details->mac_address);
				# need to split and join because of the dropped 0's
				$i = explode(":", $details->mac_address);
				for ($k=0; $k<count($i); $k++) {
					if (strlen($i[$k]) == 1) { $i[$k] = '0' . $i[$k]; }
					if (strlen($i[$k]) == 0) { $i[$k] = '00'; }
				}
				$details->mac_address = strtoupper(implode(":", $i));
				if ($details->mac_address == '00') { $details->mac_address = ''; }
			}

				
			// type
			if (!isset($details->type) or $details->type == '' or $details->type == 'unknown' or $details->type == 'network printer') {
				$h = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.25.3.2.1.2.1"));
				if ($h == '1.3.6.1.2.1.25.3.1.5') {
					# we have a printer
					$details->type = 'network printer';
					$i = @snmp2_walk($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.13.4.1.10.1");
					if (count($i) > 0) {
						$details->printer_duplex = 'False';
						for ($k = 0; $k < count($i); $k++){
							if (mb_strpos($i[$k], "Duplex") !== FALSE) {
								$details->printer_duplex = 'True';
							}
						}
					}
					if (!isset($details->manufacturer) or $details->manufacturer == '') {
						$hex = @snmp2_walk($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.8.2.1.14.1");
						if (count($hex) > 0) {
							if (isset($hex[1])) {
								if (mb_strpos($hex[1], "Hex-STRING: ") !== FALSE) {
									$hex[1] = str_replace("Hex-STRING: ", "", $hex[1]);
									for ($i=0; $i<strlen($hex[1]); $i++) {
										$details->manufacturer .= chr(hexdec(substr($hex[1],$i,2)));
									}
								} else {
									$details->manufacturer = str_replace("STRING: ", "", $hex[1]);
									$details->manufacturer = str_replace('"', '', $details->manufacturer);
								}
							}
						}
					}
					$details->printer_color = 'False';
					$i = @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.11.1.1.6.1.2");
					if (strpos(strtolower($i), "cartridge") !== FALSE) {
						# it's likely this is a colour printer
						$details->printer_color = 'True';
					}

				} else {

					# If the device is a Switch, the OID 1.3.6.1.2.1.17.1.2.0 and OID 1.3.6.1.2.1.4.1.0 should have a value of 2
					$i = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.17.1.2.0"));
					$j = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.1.0"));
					if (($i == intval($i)) and ($j == '2')) {
						$details->type = 'switch';
					}

					# If the device is a Router, the OID 1.3.6.1.2.1.4.1.0 should have a value of 1 (already read above)
					if (!isset($details->type) or $details->type == '') {
						if ($i == '1') {
							$details->type = 'router';
						}
					}

					# If the device is a Printer, the OID 1.3.6.1.2.1.43.5.1.1.1.1 should have a value
					#if (!isset($details->type) or $details->type == '') {
					$i = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.5.1.1.1.1"));
					if (strpos(strtolower($i), "counter32") !== FALSE) {
						$details->type = 'network printer';
						// printer duplex
						$details->printer_duplex = '';
						$i = @snmp2_walk($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.13.4.1.10.1");
						if (count($i) > 0) {
							$details->printer_duplex = 'False';
							for ($k = 0; $k < count($i); $k++){
								if (mb_strpos($i[$k], "Duplex") !== FALSE) {
									$details->printer_duplex = 'True';
								}
							}
						}
						if (!isset($details->manufacturer) or $details->manufacturer == '') {
							$hex = @snmp2_walk($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.8.2.1.14.1");
							if (count($hex) > 0) {
								if (isset($hex[1])) {
									if (mb_strpos($hex[1], "Hex-STRING: ") !== FALSE) {
										$hex[1] = str_replace("Hex-STRING: ", "", $hex[1]);
										for ($i=0; $i<strlen($hex[1]); $i++) {
											$details->manufacturer .= chr(hexdec(substr($hex[1],$i,2)));
										}
									} else {
										$details->manufacturer = str_replace("STRING: ", "", $hex[1]);
										$details->manufacturer = str_replace('"', '', $details->manufacturer);
									}
								}
							}
						}
						$details->printer_color = 'False';
						$i = @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.11.1.1.6.1.2");
						if (strpos(strtolower($i), "cartridge") !== FALSE) {
							# it's likely this is a colour printer
							$details->printer_color = 'True';
						}
					}
					#}
				}
				if ($details->show_output == TRUE and ($details->type == 'unknown' or $details->type == '')) { 
					echo "SNMP - Type: <span style='color: blue;'>unknown</span>.<br />";
				} else {
					echo "SNMP - Type: $details->type.<br />"; 
				}
			}
			


			// name
			if (!isset($details->sysname) or $details->sysname == '' ) {
				$details->sysname = strtolower(snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.5.0")));
			}


			// uptime
			if (!isset($details->uptime) or $details->uptime == '' ) {
				$i = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.3.0"));
				if (($i > '') and (strpos($i, ")") !== FALSE)){
					$j = explode(")", $i);
					$details->uptime = intval(trim($j[1]) * 24 * 60 * 60);
				} else {
					$details->uptime = '';
				}
			}


			// location
			if (!isset($details->location) or $details->location == '' ) {
				$details->location = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.6.0"));
			}
			if ($details->location > '') { $details->description = "Location: " . $details->location . ". " . $details->description; }


			// contact
			if (!isset($details->contact) or $details->contact == '' ) {
				$details->contact = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.4.0"));
			}
			if ($details->contact > '') { $details->description = "Contact: " . $details->contact . ". " . $details->description; }


			// subnet
			if (!isset($details->subnet) or $details->subnet == '' ) {
				$details->subnet = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.20.1.3." . $details->man_ip_address));
			}
		}



		# snmp v1
		if ($test_v1 > '' and $test_v2 == '') {
			if ($details->show_output == TRUE) { echo "SNMP scanning using SNMP v1.<br />"; }
			$details->snmp_version = '1';
			$details->snmp_oid = '';
			$details->snmp_oid = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.2.0" ));
			if ($details->snmp_oid > '') {
				$details->manufacturer = get_oid($details->snmp_oid);
				$explode = explode(".", $details->snmp_oid);
				if (file_exists(BASEPATH . '../application/helpers/snmp_' . $explode[6] . '_helper.php')) {
					$CI->load->helper('snmp_' . $explode[6]);
					get_oid_details($details);
				}
			}

			$h = @snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.25.3.2.1.2.1");
			if (strpos($h, "1.3.6.1.2.1.25.3.1") !== FALSE) {
				# we have a printer
				$details->type = "network printer";
				$details->printer_duplex = '';
				$details->printer_color = '';
				$i = @snmpwalk($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.13.4.1.10.1");
				if (count($i) > 0) {
					$details->printer_duplex = 'False';
					for ($k = 0; $k < count($i); $k++){
						if (mb_strpos($i[$k], "Duplex") !== FALSE) {
							$details->printer_duplex = 'True';
						}
					}
				}


				$details->printer_color = 'False';
				$i = @snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.11.1.1.6.1.2");
				if (strpos(strtolower($i), "cartridge") !== FALSE) {
					# it's likely this is a colour printer
					$details->printer_color = 'True';
				}


				if (!isset($details->manufacturer) or $details->manufacturer == '') {
					$hex = @snmpwalk($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.8.2.1.14.1");
					if (count($hex) > 0) {
						if (isset($hex[1])) {
							if (mb_strpos($hex[1], "Hex-STRING: ") !== FALSE) {
								$manufacturer = str_replace(" ", "", $manufacturer);
								$manufacturer = str_replace("\n", "", $manufacturer);
								if (function_exists('hex2bin')) {
									$details->manufacturer = hex2bin($manufacturer);
								} else {
									$details->manufacturer = pack("H*", $manufacturer);
								}
								$details->manufacturer = mb_convert_encoding($details->manufacturer, "UTF-8", "ASCII");
							} else {
								$details->manufacturer = str_replace("STRING: ", "", $hex[1]);
								$details->manufacturer = str_replace('"', '', $details->manufacturer);
							}
						}
					}
				}
				if (!isset($details->serial) or $details->serial == "") {
					$details->serial = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.5.1.1.17.1" ));
				}
				if (!isset($details->model) or $details->model == "") {
					$details->model = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.5.1.1.16.1" ));
				}
			}

			if (isset($details->serial) and mb_detect_encoding($details->serial) == 'UTF-8') {
				$details->serial = mb_convert_encoding($details->serial, 'UTF-8', 'ASCII');
			}
			
			if (isset($details->model) and mb_detect_encoding($details->model) == 'UTF-8') {
				$details->model = mb_convert_encoding($details->model, "UTF-8", "ASCII");
			}

			# todo: below breaks on occasion when the external ip is not in snmp. We should really ask the device for any IPs it has and go from there.
			$interface_number = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.20.1.2." . $details->man_ip_address));
			$i = "1.3.6.1.2.1.2.2.1.6." . $interface_number;
			$details->mac_address = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, $i));
			$details->mac_address = str_replace(" ", ":", $details->mac_address);

			$details->subnet = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.20.1.3." . $details->man_ip_address));
			$details->next_hop = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.21.1.7.0.0.0.0"));
		}

		$log_line = '';
		if ($details->snmp_version == '2') { $details->snmp_version = '2c'; }

		if ($test_v1 > '' or $test_v2 > '') {
			$log_timestamp = date("M d H:i:s");
			if (isset($details->snmp_oid) and $details->snmp_oid > "") {
				$log_line = $log_timestamp . " " . $log_hostname . " " . $log_pid . " " . $log_name . " " . $details->man_ip_address . " SNMP v" . $details->snmp_version . " scanned.\n";
			} else {
				$log_line = $log_timestamp . " " . $log_hostname . " " . $log_pid . " " . $log_name . " " . $details->man_ip_address . " SNMP v" . $details->snmp_version . " scan failed (no OID returned).\n";
			}
			$handle = fopen($file, "a");
			fwrite($handle, $log_line);
			fclose($handle);
		}

		#unset($details->snmp_version);
		if ($details->show_output == FALSE) { unset($details->show_output); }
		$details->hostname = strtolower($details->hostname);
		return $details;
	}

	function snmp_clean($string) {
		# make sure we have something in $string
		if (!isset($string) or is_null($string) ) { $string = ''; }
		$string = trim($string);

		# remove the standard response type strings
		$string = str_replace("OID: iso", "1", $string);
		$string = str_replace("OID: .iso", "1", $string);
		$string = str_replace("OID: .", "", $string);

		$string = str_replace("STRING: ", "", $string);
		$string = str_replace("IpAddress: ", "", $string);
		$string = str_replace("INTEGER: ", "", $string);
		$string = str_replace("Hex-STRING: ", "", $string);
		$string = str_replace("Hex-", "", $string);

		# remove the first and last characters if they are "
		if (substr($string, 0, 1) == "\"") { $string = substr($string, 1, strlen($string)); }
		if (substr($string, -1, 1) == "\"") { $string = substr($string, 0, strlen($string)-1); }

		# remove some return strings
		if (strtolower($string) == 'no such instance currently exists at this oid') { $string = ''; }
		if (strtolower($string) == 'no such object available on this agent at this oid') { $string = ''; }

		# remove any quotation marks
		$string = str_replace("\"", "", $string);
		$string = str_replace("\n", " ", $string);

		# remove some other useless items
		if ($string == 'Unknown (edit /etc/snmp/snmpd.conf)') {$string = '';}
		if ($string == 'Root  (configure /etc/snmp/snmpd.conf)') {$string = '';}
		if ($string == 'not set') {$string = '';}

		return $string;
	}
}
