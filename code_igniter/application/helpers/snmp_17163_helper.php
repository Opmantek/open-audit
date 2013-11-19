<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
# Vendor Riverbed
if (!function_exists('get_oid_details')) {

	function get_oid_details($details){
		#if ($details->snmp_oid == '1.3.6.1.4.1.17163.1.1') { $details->model = 'Riverbed Steelhead XX20'; $details->type = 'wan accelerator'; }
		#if ($details->snmp_oid == '1.3.6.1.4.1.17163.1.2') { $details->model = 'Riverbed Steelhead CMC8000'; $details->type = 'wan accelerator'; }
		#if ($details->snmp_oid == '1.3.6.1.4.1.17163.1.3') { $details->model = 'Riverbed Steelhead IC9200'; $details->type = 'wan accelerator'; }


		$details->type = 'wan accelerator';
		
		if ($details->snmp_version == '2') {
			# model
			$details->model = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.17163.1.1.1.1.0" ));
			if (!isset($details->model) or $details->model == '') {
				$details->model = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.17163.1.51.1.1.0" ));
			}

			# serial
			$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.17163.1.1.1.2.0" ));
			if (!isset($details->serial) or $details->serial == '') {
				$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.17163.1.51.1.2.0" ));
			}
		}


	}
}

# http://www.circitor.fr/Mibs/Html/STEELHEAD-MIB.php
