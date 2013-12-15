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
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.1') { $details->model = 'unknown'; $details->os_group = 'hpux9'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.2') { $details->model = 'unknown'; $details->os_group = 'sunos4'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.3') { $details->model = 'unknown'; $details->os_group = 'solaris'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.4') { $details->model = 'unknown'; $details->os_group = 'osf'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.5') { $details->model = 'unknown'; $details->os_group = 'ultrix'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.6') { $details->model = 'unknown'; $details->os_group = 'hpux10'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.7') { $details->model = 'unknown'; $details->os_group = 'netbsd'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.8') { $details->model = 'unknown'; $details->os_group = 'freebsd'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.9') { $details->model = 'unknown'; $details->os_group = 'irix'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.10') { $details->model = 'unknown'; $details->os_group = 'linux'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.11') { $details->model = 'unknown'; $details->os_group = 'bsdi'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.12') { $details->model = 'unknown'; $details->os_group = 'openbsd'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.13') { $details->model = 'unknown'; $details->os_group = 'Windows'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.14') { $details->model = 'unknown'; $details->os_group = 'hpux11'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.15') { $details->model = 'unknown'; $details->os_group = 'aix'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.16') { $details->model = 'unknown'; $details->os_group = 'macosx'; $details->type = 'computer'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.255') { $details->model = 'unknown'; $details->os_group = 'unknown'; $details->type = 'unknown'; }

		if (isset($details->description) and strpos($details->description, "Darwin Kernel Version 12") !== FALSE) { $details->manufacturer = "Apple Inc"; }

	}
}