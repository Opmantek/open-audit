<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
# Vendor Polycom
if (!function_exists('get_oid_details')) {

	function get_oid_details($details){
		if ($details->snmp_oid == '1.3.6.1.4.1.2684.1.1') { 
			$details->type = 'ip phone'; 
			$details->model = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.1.1.0"));
			$details->model = str_replace("\"\\", "", $details->model);
			$details->model = str_replace("\\\"", "", $details->model);
			$details->model = str_replace("\"", "", $details->model);
			if (!isset($details->model) or $details->model == '') {
				$details->model = 'Polycom HD 8000'; 
			}
		}

		if ($details->snmp_version == '2') {
			# serial
			$details->serial = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.43.47.1.1.3.1.10.1" ));
		}
	}
}
