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
		if ($details->snmp_oid == '1.3.6.1.4.1.641.1.71106851') { $details->model = 'Lexmark E260dn'; $details->type = 'network printer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.641.1.71107113') { $details->model = 'Lexmark MS810'; $details->type = 'network printer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.641.2.71107143') { $details->model = 'Lexmark XM3150'; $details->type = 'network printer'; }
	}
}