<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
#
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published 
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.1.1
 * @copyright Copyright (c) 2014, Opmantek
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