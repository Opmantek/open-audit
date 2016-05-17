<?php  if (!defined('BASEPATH')) {
     exit('No direct script access allowed');
 }
#
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
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

/*
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.12.6
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor Microsoft

$get_oid_details = function ($details) {
    $details->type = 'computer';
    $details->model = '';
    $details->os_group = 'Windows';
    $details->os_family = '';
    $details->os_name = '';
    $details->icon = 'computer';

    if ($details->snmp_version == '2') {

        # try to determine if this is a VMware virtual machine
        $i = @snmp2_walk($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.25.6.3.1.2");
        if (count($i) > 0) {
            for ($k = 0; $k < count($i); $k++) {
                if (mb_strpos($i[$k], "VMware Tools") !== false) {
                    $details->model = 'VMware Virtual Platform';
                    $details->manufacturer = 'VMware, Inc.';
                }
            }
        }

        $details->description = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.77.1.2.1.0"));
    }

};
