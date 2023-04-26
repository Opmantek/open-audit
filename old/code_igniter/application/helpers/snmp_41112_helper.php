<?php
/**
#  Copyright 2022 Firstwave (www.firstwave.com)
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
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************
*
* PHP version 5.3.3
* 
* @category  Helper
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.2
* @link      http://www.open-audit.org
*/

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

# Vendor Ubiquiti

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    $temp = my_snmp_walk($ip, $credentials, "1.3.6.1.2.1.25.4.2.1.5");
    if (!empty($temp) and count($temp) > 0) {
        foreach ($temp as $line) {
            if (stripos($line, 'UniFi-Gateway') !== false) {
                $details->model = 'Unifi Security Gateway';
                $details->manufacturer = 'Ubiquiti Networks Inc.';
                $details->type = 'gateway';
                $details->os_name = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
                if (stripos($details->os_name, 'edgeos') !== false) {
                    $details->os_family = 'EdgeOS';
                    $details->os_group = 'Linux';
                }
            }
        }
    }
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.41112.1.6.3.3");
    }
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.41112.1.10.1.3.2");
    }
    if (stripos($details->model, 'AirFiber')) {
        $details->type = 'wireless link';
    }
    return($details);
};