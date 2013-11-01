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
		if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.39') { $details->model = '3Com SuperStack 3 Switch 3824'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.40') { $details->model = '3Com SuperStack 3 Switch 3812'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.41') { $details->model = '3Com SuperStack 3 Switch 3226'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.42') { $details->model = '3Com SuperStack 3 Switch 3250'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.43') { $details->model = '3Com SuperStack 3 Switch 3870 24 port'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.44') { $details->model = '3Com SuperStack 3 Switch 3870 48 port'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.45') { $details->model = '3Com SuperStack 3 Switch 3848'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.51') { $details->model = '3Com SuperStack 3 Switch 3870x'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.52') { $details->model = '3Com SuperStack 3 Switch 9'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.53') { $details->model = '3Com SuperStack 3 Switch 9 FX'; $details->type = 'switch'; }

		$details->serial = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.43.47.1.1.3.1.10.1" ));
	}
}