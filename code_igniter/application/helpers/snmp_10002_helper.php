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

# Vendor Frogfoot Networks

$get_oid_details = function ($details) {

    # below is targetted at Ubiquiti devices
    $temp_manufacturer = '';
    $temp_os_name = 'unknown';
    if ($details->snmp_version == '2') {
        # manufacturer
        $temp_manufacturer = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.2.840.10036.3.1.2.1.2.5"));
        $temp_os_name = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.2.840.10036.3.1.2.1.4.5"));
        # serial
        if (!isset($details->serial) or $details->serial == '') {
            $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.2.840.10036.1.1.1.1.5"));
        }
        # model
        if (!isset($details->model) or $details->model == '') {
            $details->model = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.2.840.10036.3.1.2.1.3.5"));
        }
    }

    if ($details->snmp_version == '1') {
        # manufacturer
        $temp_manufacturer = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.2.840.10036.3.1.2.1.2.5"));
        $temp_os_name = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.2.840.10036.3.1.2.1.4.5"));
        # serial
        if (!isset($details->serial) or $details->serial == '') {
            $details->serial = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.2.840.10036.1.1.1.1.5"));
        }
        # model
        if (!isset($details->model) or $details->model == '') {
            $details->model = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.2.840.10036.3.1.2.1.3.5"));
        }
    }

    if (isset($temp_manufacturer) and $temp_manufacturer != '') {
        $details->manufacturer = $temp_manufacturer;
    }
    if (stripos($details->manufacturer, 'ubiquiti') !== false) {
        # we have a Ubiquiti device
            $details->type = 'wap';
        $details->icon = 'wap';
        $details->os_group = 'Linux';
        $details->os_family = 'Ubiquiti AirOS';
        $details->os_name = 'Ubiquiti AirOS version '.$temp_os_name;
    }
    unset($temp_manufacturer);
    unset($temp_os_name);

};
