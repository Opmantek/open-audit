<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
# Vendor Fuji-Xerox
if (!function_exists('get_oid_details')) {

	function get_oid_details($details){
		if ($details->snmp_oid == '1.3.6.1.4.1.297.1.11.93.1.6.2.1.1') { $details->model = 'Document Centre 550/450 CP'; $details->type = 'network printer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.297.1.11.93.1.6.30.1.1') { $details->model = 'Document Centre 405'; $details->type = 'network printer'; }
	}
}