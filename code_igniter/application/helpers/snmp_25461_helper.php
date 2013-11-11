<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
# Vendor Palo Alto
if (!function_exists('get_oid_details')) {

	function get_oid_details($details){
		if ($details->snmp_oid == '1.3.6.1.4.1.25461.2.3.1') { $details->model = 'PA-4050 firewall'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.25461.2.3.2') { $details->model = 'PA-4020 firewall'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.25461.2.3.3') { $details->model = 'PA-2050 firewall'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.25461.2.3.4') { $details->model = 'PA-2020 firewall'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.25461.2.3.5') { $details->model = 'PA-4060 firewall'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.25461.2.3.6') { $details->model = 'PA-500 firewall'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.25461.2.3.7') { $details->model = 'Panorama firewall'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.25461.2.3.8') { $details->model = 'PA-5060 firewall'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.25461.2.3.9') { $details->model = 'PA-5050 firewall'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.25461.2.3.11') { $details->model = 'PA-5020 firewall'; $details->type = 'firewall'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.25461.2.3.12') { $details->model = 'PA-200 firewall'; $details->type = 'firewall'; }

		if ($details->snmp_verion == '2') {
			$details->serial = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.25461.2.1.2.1.3.0" ));
		}
	}
}
