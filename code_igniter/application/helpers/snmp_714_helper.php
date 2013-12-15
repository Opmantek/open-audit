<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
# Vendor Wyse
if (!function_exists('get_oid_details')) {

	function get_oid_details($details){
		if ($details->snmp_oid == '1.3.6.1.4.1.714.1.2.6') { $details->model = 'Xenith 2'; $details->os_group = 'Wyse'; $details->type = 'thin client'; }

		if ($details->snmp_version == '1') {
			$details->serial = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.714.1.2.6.2.1.0" ));
			$details->sysname = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.5.0" ));
			$details->description = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.1.0" ));
			$details->contact = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.4.0" ));
			if ($details->contact > '') { $details->description = "Contact: " . $details->contact . ". " . $details->description; }
			$details->location = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.6.0" ));
			if ($details->location > '') { $details->description = "Location: " . $details->location . ". " . $details->description; }
		}
	}
}
