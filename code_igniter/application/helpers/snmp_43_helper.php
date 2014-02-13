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
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor 3com
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

		if ($details->snmp_version == '2') {
			# serial
			$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.43.47.1.1.3.1.10.1" ));
		}
	}
}
