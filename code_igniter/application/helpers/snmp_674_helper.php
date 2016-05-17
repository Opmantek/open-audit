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

# Vendor Dell

$get_oid_details = function ($details) {
    # http://www.oidview.com/mibs/674/DELL-RAC-MIB.html
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10892.2') {
        $details->model = 'DRAC 4/P';
        $details->type = 'remote access controller';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10892.2') {
        $details->model = 'DRAC 4/P';
        $details->type = 'remote access controller';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.1') {
        $details->model = 'PowerConnect 3024';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.1000') {
        $details->model = 'PowerConnect 5212';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3') {
        $details->model = 'PowerConnect 3248';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3000') {
        $details->model = 'PowerConnect 6024';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3002') {
        $details->model = 'PowerConnect 3324';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3003') {
        $details->model = 'PowerConnect 3348';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3004') {
        $details->model = 'PowerConnect 5324';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3005') {
        $details->model = 'PowerConnect 5316M';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3006') {
        $details->model = 'PowerConnect 3400';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3007') {
        $details->model = 'PowerConnect 3400';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3008') {
        $details->model = 'PowerConnect 3424';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3009') {
        $details->model = 'PowerConnect 3448P';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3010') {
        $details->model = 'PowerConnect 6224';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3011') {
        $details->model = 'PowerConnect 6248';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3013') {
        $details->model = 'PowerConnect 6248P';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3015') {
        $details->model = 'PowerConnect 6220M';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3018') {
        $details->model = 'PowerConnect 3524P';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3022') {
        $details->model = 'PowerConnect M8024';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3024') {
        $details->model = 'PowerConnect 8024F';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.3025') {
        $details->model = 'PowerConnect M6348';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.4') {
        $details->model = 'PowerConnect 5224';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10895.5') {
        $details->model = 'PowerConnect 3048';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.674.10899.100.1.1') {
        $details->model = 'Dell 5100MP Projector';
        $details->type = 'projector';
    }



    if ($details->snmp_version == '2') {
        # model
        $temp_model = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.674.10892.2.1.1.2.0"));

        # serial
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.674.10892.2.1.1.11.0"));
    }

    if ($details->snmp_version == '1') {
        # model
        $temp_model = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.674.10892.2.1.1.2.0"));

        # serial
        $details->serial = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.674.10892.2.1.1.11.0"));
    }

    if (isset($temp_model) and $temp_model > '') {
        $details->model = $temp_model;
    }
};
