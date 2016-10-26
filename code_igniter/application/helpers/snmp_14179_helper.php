<?php
if (!defined('BASEPATH')) {
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
 * 
 * @version 1.12.8
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor Airespace, Inc (formerly Black Storm Networks)

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    if ($oid == '1.3.6.1.4.1.14179.1.1.4.3') {
        $details->model = '4402 WLAN Controller ';
        $details->os_group = 'Cisco';
        $details->manufacturer = 'Cisco Systems';
        $details->type = 'wap';
        $details->os_family = 'Cisco IOS';
    }
    $test = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.9.23.1.2.1.1.5.29.2");
    if ($test != '') {
        if (stripos($test, 'Cisco IOS Software') !== false) {
            $temp2 = explode(',', $test);
            foreach ($temp2 as $test2) {
                if (strpos($test2, 'Version') !== false) {
                    $version = str_ireplace('Version', '', $test2);
                    $version = trim($version);
                }
            }
            if ($version != '') {
                $details->os_name = 'Cisco IOS '.$version;
            } else {
                $details->os_name = 'Cisco IOS (unknown verison)';
            }
        }
    }
    unset($test);
    # Cisco specific model OID
    if ($details->model == '') {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.13.1");
    }
    # Generic Cisco serial
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1");
    # Second Generic Cisco serial
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1.0");
    }
    return($details);
};
