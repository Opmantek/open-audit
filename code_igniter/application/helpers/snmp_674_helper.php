<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
# Vendor Dell
if (!function_exists('get_oid_details')) {

	function get_oid_details($details){
		if ($details->snmp_oid == '1.3.6.1.4.1.674.10892.2') { $details->model = 'DRAC 4/P'; $details->type = 'remote access controller'; }
		
		
		if ($details->snmp_version == '2') {
			# model
			$temp_model = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.674.10892.2.1.1.2.0" ));
		
			# serial
			$details->serial = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.674.10892.2.1.1.11.0" ));
		}
		
		
		if ($details->snmp_version == '1') {
			# model
			$temp_model = str_replace("STRING: ", "", @snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.674.10892.2.1.1.2.0" ));
		
			# serial
			$details->serial = str_replace("STRING: ", "", @snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.674.10892.2.1.1.11.0" ));
		}
		
		if (isset($temp_model) and $temp_model > '') {
			$details->model = $temp_model;
		}
	}
}
# http://www.oidview.com/mibs/674/DELL-RAC-MIB.html
