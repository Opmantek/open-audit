<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

if (!function_exists('get_oid_details')) {
	
	function get_oid_details($details){
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
}