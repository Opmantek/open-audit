<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
# Vendor BayStack
if (!function_exists('get_oid_details')) {

	function get_oid_details($details){
		if ($details->snmp_oid == '1.3.6.1.4.1.45.3.30.2') { $details->model = 'BayStack 350-24T switch'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.45.3.35.1') { $details->model = 'BayStack 450-24T switch'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.45.3.43.1') { $details->model = 'BayStack 420 switch'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.45.3.57.2') { $details->model = 'BayStack 425 switch'; $details->type = 'switch'; }



		if ($details->snmp_version == '2') {
			# serial
			$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.45.1.6.3.1.6.0" ));

			#model
			if (!isset($details->model) or $details->model == '' ) {
				$details->model = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.45.1.6.3.1.2.0" ));
			}
		}
	}
}
