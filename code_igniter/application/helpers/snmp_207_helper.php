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

# Vendor Allied Telesyn

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.14.20') {
        $details->model = 'AT RP24i Rapier';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.14.30') {
        $details->model = 'AT 8724XL';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.14.47') {
        $details->model = 'AT RP24i Rapier DC/NE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.14.48') {
        $details->model = 'AT 8724XL-DC NEBS';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4') {
        $details->model = 'AT 9000-24';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.105') {
        $details->model = 'AT 9424T/SP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.112') {
        $details->model = 'AT 9424T/GB';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.125') {
        $details->model = 'AT 8316F';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.126') {
        $details->model = 'AT 8324';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.127') {
        $details->model = 'AT 8326GB';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.128') {
        $details->model = 'AT 8350GB';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.129') {
        $details->model = 'AT 9000/24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.131') {
        $details->model = 'AT 9448T/SP';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.139') {
        $details->model = 'AT 9410GB';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.140') {
        $details->model = 'AT 9724TS';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.143') {
        $details->model = 'AT 8000GS';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.163') {
        $details->model = 'AT FS750/48';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.37') {
        $details->model = 'AT 8000/24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.39') {
        $details->model = 'AT 8224AL';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.42') {
        $details->model = 'AT 8324SX';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.52') {
        $details->model = 'AT 8000/24POE';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.66') {
        $details->model = 'AT 8024';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.67') {
        $details->model = 'AT 8024GB';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.72') {
        $details->model = 'AT 8000/48POE';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.73') {
        $details->model = 'AT 9410GB';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.74') {
        $details->model = 'AT 8350GB';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.77') {
        $details->model = 'AT 8124XL-V2';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.78') {
        $details->model = 'AT 8024M';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.80') {
        $details->model = 'AT 8O26FC';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.86') {
        $details->model = 'AT 8012M';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.89') {
        $details->model = 'AT 8026T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.9') {
        $details->model = 'AT 8200';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.98') {
        $details->model = 'AT 8524M';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.207.1.4.99') {
        $details->model = 'AT 8550GB';
        $details->type = 'switch';
    }

    if ($details->snmp_version == '2') {
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.207.8.4.4.5.2.1.5"));
    }
};
