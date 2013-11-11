<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
# Vendor Watchguard
if (!function_exists('get_oid_details')) {

	function get_oid_details($details){
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.1') { $details->model = 'fbX500'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.10') { $details->model = 'fbX5000'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.11') { $details->model = 'fbX5500e'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.12') { $details->model = 'fbX6000'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.13') { $details->model = 'fbX6500e'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.14') { $details->model = 'fbX8000'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.15') { $details->model = 'fbX8500e'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.16') { $details->model = 'fbX8500e-F'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.2') { $details->model = 'fbX550e'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.3') { $details->model = 'fbX700'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.4') { $details->model = 'fbX750e'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.5') { $details->model = 'fbX750e-4'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.6') { $details->model = 'fbX1000'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.7') { $details->model = 'fbX1250e'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.8') { $details->model = 'fbX1250e-4'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.4.9') { $details->model = 'fbX2500'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.3097.1.5.12') { $details->model = 'Watchguard Firewall'; $details->type = 'firewall'; }
		

		$details->type = 'firewall';
		$details->model = "Watchguard Firewall";
		
		if ($details->snmp_version == '2') {
			# model
			// $details->model = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.17163.1.1.1.1.0" ));
			// if (!isset($details->model) or $details->model == '') {
			// 	$details->model = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.17163.1.51.1.1.0" ));
			// }

			# serial
			// $details->serial = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.17163.1.1.1.2.0" ));
			// if (!isset($details->serial) or $details->serial == '') {
			// 	$details->serial = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.17163.1.51.1.2.0" ));
			// }
		}
	}
}

# http://www.circitor.fr/Mibs/Html/STEELHEAD-MIB.php
