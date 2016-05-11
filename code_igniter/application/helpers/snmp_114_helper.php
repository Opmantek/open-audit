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

# Vendor 3com

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.114.1.2.1.1.1.1.9') {
        $details->model = 'Corebuilder 3500';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.114.1.3.2') {
        $details->model = 'Corebuilder 6000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.114.1.3.2.1') {
        $details->model = 'Corebuilder 6012';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.114.1.3.2.2') {
        $details->model = 'Corebuilder 6004';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.114.1.3.3') {
        $details->model = 'LANplex 2000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.114.1.3.3.1') {
        $details->model = 'Corebuilder 2500';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.114.1.3.3.2') {
        $details->model = 'LANplex 2200';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.114.1.3.3.3') {
        $details->model = 'LANplex 2000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.114.1.3.3.4.7') {
        $details->model = 'LinkSwitch 2200';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.114.2.1.1.1.1.9') {
        $details->model = 'Corebuilder 3500';
        $details->type = 'switch';
    }

    if ($details->snmp_version == '2') {
        # serial
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.43.47.1.1.3.1.10.1"));

        if ($details->serial == '') {
            $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.43.10.27.1.1.1.13.1"));
        }
    }

    if ($details->snmp_version == '1') {
        # serial
        $details->serial = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.43.47.1.1.3.1.10.1"));

        if ($details->serial == '') {
            $details->serial = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.43.10.27.1.1.1.13.1"));
        }
    }
};
