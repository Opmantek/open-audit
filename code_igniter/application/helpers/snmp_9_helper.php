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
 *
 * @version   3.2.1

 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor Cisco


$get_oid_details = function ($ip, $credentials, $oid) {  
     
    $details = new stdClass();
    # the only MIB providing overall RAM is 1.3.6.1.4.1.9.3.6.6.0 which is deprecated
    $details->memory_count = intval(my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.3.6.6.0") / 1024);
    $details->storage_count = intval(my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.2.10.1.0") / 1048576); 
    $details->description = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
    $details->os_version = '';

    $i = explode("$", my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.9.25.1.1.1.2.5"));
    if (!empty($i[1])) {
        $details->os_version = trim($i[1]);
    }
    $i = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.9.25.1.1.1.2.7");
    if (stripos($i, "IOS") !== false) {
        $details->os_group = 'Cisco'; $details->os_family = 'Cisco IOS'; $details->os_name = "Cisco IOS version ".$details->os_version;
    }
    if (stripos($details->description, "Cisco IOS Software") !== false) {
        $details->os_group = 'Cisco'; $details->os_family = 'Cisco IOS'; $details->os_name = "Cisco IOS version ".$details->os_version;
    }
    if (stripos($details->description, "Cisco Internetwork Operating System Software") !== false) {
        $details->os_group = 'Cisco'; $details->os_family = 'Cisco IOS'; $details->os_name = "Cisco IOS version ".$details->os_version;
    }
    if (stripos($i, "Catalyst Operating") !== false) {
        $details->os_group = 'Cisco'; $details->os_family = 'Cisco Catalyst OS'; $details->os_name = "Cisco Catalyst OS version ".$details->os_version;
    }
    if (stripos($details->description, "Cisco Systems WS-C") !== false) {
        $details->os_group = 'Cisco'; $details->os_family = 'Cisco Catalyst OS'; $details->os_name = "Cisco Catalyst OS version ".$details->os_version;
    }
    if (stripos($details->description, "Cisco Systems, Inc. WS-C") !== false) {
        $details->os_group = 'Cisco'; $details->os_family = 'Cisco Catalyst OS'; $details->os_name = "Cisco Catalyst OS version ".$details->os_version;
    }
    if (empty($details->os_group)) {
        if (stripos($details->description, 'NX-OS')) {
            $details->os_group = 'Cisco';
            $details->os_family = 'Cisco Nexus OS';
            $details->os_name = "Cisco Nexus OS version ".$details->os_version;
        }
    }

    # Cisco specific model OID
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.13.1");
    }

    # catch all for catalyst == switch
    if (!empty($details->model) and (stripos($details->model, 'catalyst') !== false or stripos($details->os_family, 'cataylst') !== false)) {
        $details->type = 'switch'; }

    # Generic Cisco serial
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1");
    }

    # Generic Cisco serial
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1.0");
    }

    # Cisco 37xx stack serial
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.9.5.1.2.19.0");
    }

    if (empty($details->serial)) {
        $i_array = my_snmp_walk($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11");
        if (!empty($i_array[0])) {
            $details->serial = $i_array[0];
        }
        unset($i_array);
    }

    return($details);
};

/*
// installed modules with serial numbers
$i = my_snmp_walk($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11");
if (count($i) > 0) {
    if (($i[0] == 'No more variables left in this MIB View (It is past the end of the MIB tree)') or ($i[0] == '')){unset($i); $i = array();}
    if (count($i) > 0) {
        $count = 0;
        for ($j=0; $j<count($i); $j++) {
            if ((mb_strpos($i[$j], $details->serial) === false) and ($i[$j] != "") and ($i[$j] != "\"\"")){
                $k = $j + 1;
                $k = "1.3.6.1.2.1.47.1.1.1.1.3." . $k;
                $oid = my_snmp_get($ip, $credentials, $k);
                $oid = str_replace("OID: .", "", $oid);
                $module->$count = get_oid($oid);
                $module->$count->serial = str_replace("STRING: ", "", $i[$j]);
                $module->$count->serial = str_replace('"', '', $module->$count->serial);
                $count++;
            }
        }
        $details->modules = $module;
    }
}
*/
