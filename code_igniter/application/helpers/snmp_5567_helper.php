<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
# Vendor Riverstone
if (!function_exists('get_oid_details')) {

	function get_oid_details($details){
		if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.1') { $details->model = '8000'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.2') { $details->model = '8600'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.22') { $details->model = 'IA1100'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.23') { $details->model = 'IA1200'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.27') { $details->model = 'IA1500'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.3') { $details->model = '2000'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.4') { $details->model = '2100'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.5') { $details->model = '3000'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.6') { $details->model = '32000'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.8') { $details->model = '1000'; $details->type = 'switch'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.9') { $details->model = '38000'; $details->type = 'switch'; }

	}
}