<?php  
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('get_snmp')) {

	function get_snmp($details ) {
		$CI =& get_instance();
		
		# setup the log file
		if (php_uname('s') == 'Linux') {
			$file = "/usr/local/open-audit/other/open-audit.log";
		} else {
			$file = "c:\\xampplite\\open-audit\\other\\open-audit.log";
		}

		if (!isset($details->system_id) or $details->system_id == '') {
			$details->snmp_community = 'public';
			$details->snmp_version = '2c';
			$details->snmp_port = '161';
		} else {
			$encrypted_access_details = $CI->m_system->get_access_details($details->system_id);
			if ($encrypted_access_details > '') { 
				$decoded_access_details = $CI->encrypt->decode($encrypted_access_details);
				$decoded_access_details = json_decode($decoded_access_details);
				$details->snmp_community = @$decoded_access_details->snmp_community;
				$details->snmp_version = @$decoded_access_details->snmp_version;
				$details->snmp_port = @$decoded_access_details->snmp_port;
				$details->man_ip_address = @$decoded_access_details->ip_address;
			}
		}
		if (!isset($details->snmp_community) or $details->snmp_community == '') { $details->snmp_community = 'public'; }
		if (!isset($details->snmp_version) or $details->snmp_version == '') { $details->snmp_version = '2c'; }
		if (!isset($details->snmp_port) or $details->snmp_port == '') { $details->snmp_port = '161'; }

		# we may only have been given a system_id
		# but if the access_details were completed, that may be enough
		# if they weren't, we would at least need a hostname ot ip address
		if (!isset($details->man_ip_address) and !isset($details->hostname)) {
			return;
		}

		$module = new stdclass;

		if ((!isset($details->hostname) or $details->hostname == '') and
			(isset($details->man_ip_address) and $details->man_ip_address != '' and 
			 $details->man_ip_address != '000.000.000.000' and $details->man_ip_address != '0.0.0.0')) {
			$details->hostname = gethostbyaddr(ip_address_from_db($details->man_ip_address));
		}

		if ((!isset($details->man_ip_address) or $details->man_ip_address == '' or 
			$details->man_ip_address == '0.0.0.0' or $details->man_ip_address == '000.000.000.000') and
			(isset($details->hostname) and $details->hostname != '')) {
			$details->man_ip_address = gethostbyname($details->hostname);
		}

		if (filter_var($details->hostname, FILTER_VALIDATE_IP)) {
			# we did not get a valid hostname back :-(
		} else {
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
			} else {
				# it's just a name
			}
		}
		$timeout = '300000';
		$retries = '2';

		if (!extension_loaded('snmp')) { return($details); }

		# test for SNMP version
		# to do - test for v3
		$test_v1 = "";
		$test_v2 = "";

		$log_timestamp = date("M d H:i:s");
		$log_hostname = php_uname('n');
		$log_pid = getmypid();
		$log_name = "snmp_helper.php";

		if ($test_v1 = @snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.5.0", $timeout)) {
			# v1 is contactable
			$details->snmp_version = '1';
		}

		if ($test_v2 = @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.5.0", $timeout)) {
			# v2 is contactable
			$details->snmp_version = '2c';
		}

		if ($test_v1  == '' and $test_v2 == '') {
			$log_line = $log_timestamp . " " . $log_hostname . " " . $log_pid . " " . $log_name . " " . $details->man_ip_address . " not SNMP scanned.\n";
		} else {
			$log_line = $log_timestamp . " " . $log_hostname . " " . $log_pid . " " . $log_name . " " . $details->man_ip_address . " SNMP v" . $details->snmp_version . " scanned.\n";
		}

		$handle = fopen($file, "a");
		fwrite($handle, $log_line);
		fclose($handle);

		if ($test_v2 > '') {

			snmp_set_oid_output_format(SNMP_OID_OUTPUT_NUMERIC);

			// hostname
			if (filter_var($details->hostname, FILTER_VALIDATE_IP)) {
				// we have an ip address, not a hostname - attempt to get a hostname
				$details->hostname = trim(str_replace("\"", "", str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.5.0", $timeout, $retries))));
				$details->hostname_length = 'short';
			}

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

			// sysObjectID
			#$i = str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.1.0" ));
			$details->snmp_oid = str_replace("OID: .", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.2.0" ));
			if (strtolower($details->snmp_oid) == 'no such object available on this agent at this oid') { $details->snmp_oid = ''; }

			if ($details->snmp_oid > '') {
				$oid = get_oid($details->snmp_oid);
				$details->manufacturer = $oid->manufacturer;
				$details->man_manufacturer = $oid->manufacturer;
				$details->model = $oid->model;
				$details->man_model = $oid->model;
				$details->type = $oid->type;
				$details->device_type = $oid->type;
				$details->man_type = $oid->type; 
				$details->os_group = $oid->os_group;
				$details->man_os_group = $oid->os_group;
			}

			if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.255') {
				# a generic OID - take some guesses...
				$i = str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.1.0" ));
				if (strpos($i, "Darwin Kernel Version 12") !== FALSE) {
					# looks like an OSX device
					$details->manufacturer = "Apple Inc";
				}
			}

			if ($details->snmp_oid == '1.3.6.1.4.1.6876.4.1') {
				# grab some specific details for VMware ESX
				$model = str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.6876.1.1.0" ));
				$version = str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.6876.1.2.0" ));
				$details->model = $model . " (" . $version . ")";
				$details->model =str_replace("\"", "", $details->model);
				$details->man_model = $details->model;
				$details->os_group = "VMware";
				$details->man_os_group = "VMware";
				$details->os_family = str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.6876.1.1.0" ));
				$details->os_family =str_replace("\"", "", $details->os_family);
				$details->man_os_family = $details->os_family;
				$details->os_name = str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.1.0" ));
				$details->os_name =str_replace("\"", "", $details->os_name);
				$details->man_os_name = $details->os_name;
				$details->type = 'computer';
				$details->man_type = 'computer';
				$details->device_type = 'computer';
				$details->man_class = 'hypervisor';
			}



			if (substr($details->snmp_oid, 0, 13) == '1.3.6.1.4.1.9') {
				# grab some Cisco specific details
				$i = explode("$", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.9.9.25.1.1.1.2.5" ));
				$details->os_version = trim($i[1]);
				$i = @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.9.9.25.1.1.1.2.7" );
				if (strpos($i, "IOS") !== FALSE) { 
					$details->os_group = 'Cisco';
					$details->man_os_group = 'Cisco'; 
					$details->os_family = 'Cisco IOS'; 
					$details->man_os_family = 'Cisco IOS'; 
					$details->os_name = "Cisco IOS version " . $details->os_version;
					$details->man_os_name = "Cisco IOS version " . $details->os_version;
				}
				if (strpos($i, "Catalyst Operating") !== FALSE) { 
					$details->os_group = 'Cisco';
					$details->man_os_group = 'Cisco'; 
					$details->os_family = 'Cisco Catalyst OS';
					$details->man_os_family = 'Cisco Catalyst OS'; 
					$detail->os_name = "Cisco Catalyst OS version " . $details->os_version;
					$detail->man_os_name = "Cisco Catalyst OS version " . $details->os_version;
				}
			}

			if (substr($details->snmp_oid, 0, 17) == '1.3.6.1.4.1.25461') { 
				# grab some Palo Alto specifics 
				$details->serial = @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.25461.2.1.2.1.3.0");
			}

			// manufacturer
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
				if (($details->manufacturer == '') or ($details->manufacturer == 'No Such Object available on this agent at this OID')) {                  
					$details->manufacturer = str_replace("\"", "", str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.12.1")));
				}
			}
			if ($details->manufacturer == 'No Such Instance currently exists at this OID') { $details->manufacturer = ''; }
			if ($details->manufacturer == 'No Such Object available on this agent at this OID') { $details->manufacturer = ''; }

			// serial
			if (!isset($details->serial) or $details->serial == '') {
				$details->serial == '';

				# generic snmp
				$details->serial = str_replace('"', '', str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.5.1.1.17.1")));
				if ($details->serial == 'No Such Instance currently exists at this OID') { $details->serial = ''; }
				if ($details->serial == 'No Such Object available on this agent at this OID') { $details->serial = ''; }
				if ($details->serial == 'No Such Instance currently exists at this OID') { $details->serial = ''; }

				# Generic Cisco
				if ($details->serial == '') {
					$details->serial = str_replace("\"", "", str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.11.1")));
					if ($details->serial == 'No Such Instance currently exists at this OID') { $details->serial = ''; }
					if ($details->serial == 'No Such Object available on this agent at this OID') { $details->serial = ''; }
					if ($details->serial == 'No Such Instance currently exists at this OID') { $details->serial = ''; }
				}

				# Cisco 37xx stack
				if ($details->serial == '') {
					$details->serial = str_replace("\"", "", str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.9.5.1.2.19.0")));
					if ($details->serial == 'No Such Instance currently exists at this OID') { $details->serial = ''; }
					if ($details->serial == 'No Such Object available on this agent at this OID') { $details->serial = ''; }
					if ($details->serial == 'No Such Instance currently exists at this OID') { $details->serial = ''; }
				}

				# generic cable modem (works for my Netgear CG814WG)
				if ($details->serial == '') {
					$details->serial = str_replace("\"", "", str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.4491.2.4.1.1.1.3.0")));
					if ($details->serial == 'No Such Instance currently exists at this OID') { $details->serial = ''; }
					if ($details->serial == 'No Such Object available on this agent at this OID') { $details->serial = ''; }
					if ($details->serial == 'No Such Instance currently exists at this OID') { $details->serial = ''; }
				}

				# remove  false
				if ($details->serial == 'No Such Instance currently exists at this OID') { $details->serial = ''; }
				if ($details->serial == 'No Such Object available on this agent at this OID') { $details->serial = ''; }
				if ($details->serial == 'No Such Instance currently exists at this OID') { $details->serial = ''; }
			}
			$details->man_serial = $details->serial;

			// mac address
			if (!isset($details->mac_address) or $details->mac_address == '' ) {
				$interface_number = @str_replace("INTEGER: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.20.1.2." . $details->man_ip_address));
				$details->mac_address = @str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.2.2.1.6." . $interface_number));
				$details->mac_address = @trim(str_replace("Hex-", "", $details->mac_address));
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
			if (!isset($details->type) or $details->type == '') {
				$h = str_replace("OID: HOST-RESOURCES-TYPES::hrDevice", "", 
								 str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.25.3.2.1.2.1")));
				if ((strtolower($h) == 'no such object available on this agent at this oid') or ($h == '')) {

					# If the device is a Switch, the OID 1.3.6.1.2.1.17.1.2.0 and OID 1.3.6.1.2.1.4.1.0 should have a value of 2
					$i = str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.17.1.2.0"));
					$j = str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.1.0"));
					if (($i == '2') and ($j == '2')) {
						$details->type = 'switch';
					}

					# If the device is a Router, the OID 1.3.6.1.2.1.4.1.0 should have a value of 1
					if (!isset($details->type) or $details->type == '') {
						$i = str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.1.0"));
						if ($i == '1') {
							$device->type = 'router';
						}
					}

					# If the device is a Printer, the OID 1.3.6.1.2.1.43.5.1.1.1.1 should have a value
					if (!isset($details->type) or $details->type == '') {
						$i = str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.43.5.1.1.1.1"));
						if ($i == '1') {
							$device->type = 'printer';
						}
					}
				}
			}
			if (isset($details->type) and $details->type != '' and (!isset($details->man_type) or $details->man_type == '')) {
				$details->man_type = $details->type;
			} 

			// model
			if (!isset($details->model) or $details->model == '' ) {
				$details->model = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.25.3.2.1.3.1"));
				if (($details->model == '') or ($details->model == 'No Such Object available on this agent at this OID')) {
					if (strpos(strtolower($details->manufacturer), 'cisco') !== FALSE) {
						$details->model = str_replace("\"", "", str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.13.1")));
					}
				}
			}
			if (strtolower($details->model) == 'no such object available on this agent at this oid') { $details->model = ''; }

			// name
			if (!isset($details->sysname) or $details->sysname == '' ) {
				$details->sysname = strtolower(str_replace("\"", "", str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.5.0"))));
			}
			if (strtolower($details->sysname) == 'no such object available on this agent at this oid') { $details->sysname = ''; }

			// description
			if (!isset($details->description) or $details->description == '' ) {
				$details->description = str_replace("\"", "", str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.1.0")));
				$details->description = str_replace("\r\n", " ", $details->description);
			}
			if (strtolower($details->description) == 'no such object available on this agent at this oid') {$details->description = '';}

			// uptime
			if (!isset($details->uptime) or $details->uptime == '' ) {
				$i = str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.3.0"));
				if (($i > '') and (strpos($i, ")") !== FALSE)){
					$j = explode(")", $i);
					$details->uptime = trim($j[1]);
				} else {
					$details->uptime = '';
				}
			}

			// location
			if (!isset($details->location) or $details->location == '' ) {
				$details->location = str_replace("\"", "", str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.6.0")));
			}
			if ($details->location == 'Unknown (edit /etc/snmp/snmpd.conf)') {$details->location = '';}
			if ($details->location == 'not set') {$details->location = '';}
			if ($details->location == 'No Such Object available on this agent at this OID') {$details->location = '';}
			if ($details->location > '') { $details->description = "Location: " . $details->location . ". " . $details->description; }
			
			// contact
			if (!isset($details->contact) or $details->contact == '' ) {
				$details->contact = str_replace("\"", "", str_replace("STRING: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.4.0")));
			}
			if ($details->contact == 'Root  (configure /etc/snmp/snmpd.conf)' ) {$details->contact = ''; }
			if ($details->contact == 'not set' ) {$details->contact = ''; }
			if ($details->contact > '') { $details->description = "Contact: " . $details->contact . ". " . $details->description; }

			// subnet
			if (!isset($details->subnet) or $details->subnet == '' ) {
				$details->subnet = @str_replace("IpAddress: ", "", snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.20.1.3." . $details->man_ip_address));
			}
			if ($details->subnet == 'No Such Instance currently exists at this OID') { $details->subnet = ''; }
			if ($details->subnet == 'No Such Object available on this agent at this OID') { $details->subnet = ''; }

			

			
			/*
			// installed modules with serial numbers
			$i = @snmp2_walk($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.11");
			if (count($i) > 0) {
				if (($i[0] == 'No more variables left in this MIB View (It is past the end of the MIB tree)') or ($i[0] == '')){unset($i); $i = array();}
				if (count($i) > 0) {
					$count = 0;
					for ($j=0; $j<count($i); $j++) {
						if ((mb_strpos($i[$j], $details->serial) === FALSE) and ($i[$j] != "") and ($i[$j] != "\"\"")){
							$k = $j + 1;
							$k = "1.3.6.1.2.1.47.1.1.1.1.3." . $k;
							$oid = snmp2_get($details->man_ip_address, $details->snmp_community, $k);
							$oid = str_replace("OID: .", "", $oid);
							$module->$count = get_oid($oid);
							$module->$count->serial = str_replace("STRING: ", "", $i[$j]);
							$module->$count->serial = str_replace('"', '', $module->$count->serial);
							$count++;
						}
					}
					$details->modules = $module;
				}
			}
			*/
		}

		if ($test_v1 > '' and $test_v2 == '') {
			$details->snmp_oid = '';
			$details->snmp_oid = str_replace("OID: .", "", snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.2.0" ));
			if (strtolower($details->snmp_oid) == 'no such object available on this agent at this oid') { $details->snmp_oid = ''; }
			if ($details->snmp_oid > '') {
				$oid = get_oid($details->snmp_oid);
				$details->manufacturer = $oid->manufacturer;
				$details->man_manufacturer = $oid->manufacturer;
				$details->model = $oid->model;
				$details->man_model = $oid->model;
				$details->type = $oid->type;
				$details->device_type = $oid->type;
				$details->man_type = $oid->type; 
				$details->os_group = $oid->os_group;
				$details->man_os_group = $oid->os_group;
			}
			if ($details->oid == '1.3.6.1.4.1.714.1.2.6') {
				# We have a Wyse thin client - some specifics.
				$details->serial = str_replace("String: .", "", snmpget($details->man_ip_address, $details->snmp_community,      "1.3.6.1.4.1.714.1.2.6.2.1.0" ));
				$details->sysname = str_replace("String: .", "", snmpget($details->man_ip_address, $details->snmp_community,     "1.3.6.1.2.1.1.5.0" ));
				$details->description = str_replace("String: .", "", snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.1.0" ));
				$details->contact = str_replace("String: .", "", snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.4.0" ));
				if ($details->contact > '') { $details->description = "Contact: " . $details->contact . ". " . $details->description; }
				$details->location = str_replace("String: .", "", snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.6.0" ));
				if ($details->location > '') { $details->description = "Location: " . $details->location . ". " . $details->description; }
			}

			$interface_number = str_replace("INTEGER: ", "", @snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.20.1.2." . $details->man_ip_address));
			$i = "1.3.6.1.2.1.2.2.1.6." . $interface_number;
			$details->mac_address = snmpget($details->man_ip_address, $details->snmp_community, $i);
			$details->mac_address = trim(str_replace("Hex-STRING: ", "", $details->mac_address));
			$details->mac_address = str_replace(" ", ":", $details->mac_address);
			$details->subnet = str_replace("IpAddress: ", "", snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.20.1.3." . $details->man_ip_address));
			$details->hostname = trim(str_replace("\"", "", str_replace("STRING: ", "", snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.5.0"))));
			$details->hostname_length = 'short';
			$details->next_hop = str_replace("IpAddress: ", "", snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.4.21.1.7.0.0.0.0"));
		}

		$details->hostname = strtolower($details->hostname);
		// update the system
		#if ($details->snmp_version > '') {
			#$CI2->m_system->process_snmp($details);
			return $details;
		#}
	}
}