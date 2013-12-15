<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
# Vendor Allied Telesyn
if (!function_exists('get_oid_details')) {

	function get_oid_details($details){
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.9') { $details->model = 'AT 8200'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.37') { $details->model = 'AT 8000/24'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.52') { $details->model = 'AT 8000/24POE'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.66') { $details->model = 'AT 8024'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.67') { $details->model = 'AT 8024GB'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.72') { $details->model = 'AT 8000/48'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.72') { $details->model = 'AT 8000/48POE'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.77') { $details->model = 'AT 8124XL-V2'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.78') { $details->model = 'AT 8024M'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.89') { $details->model = 'AT 8026T'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.98') { $details->model = 'AT 8524M'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.99') { $details->model = 'AT 8550GB'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.112') { $details->model = 'AT 9424T/GB'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.125') { $details->model = 'AT 8316F'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.126') { $details->model = 'AT 8324'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.127') { $details->model = 'AT 8326GB'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.128') { $details->model = 'AT 8350GB'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.129') { $details->model = 'AT 9000/24'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.131') { $details->model = 'AT 9448T/SP'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.139') { $details->model = 'AT 9410GB'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.140') { $details->model = 'AT 9724TS'; $details->type = 'switch'; }

		if ($details->snmp_version == '2') {
			$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.207.8.4.4.5.2.1.5" ));
		}

	}
}
