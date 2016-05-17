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

# Melco Buffalo

$get_oid_details = function ($details) {
    $details->manufacturer = 'Buffalo';
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.4') {
        $details->model = 'AirStation WLM2';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.6') {
        $details->model = 'LSM10_100-16W';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.7') {
        $details->model = 'LSM10_100-24W';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.9') {
        $details->model = 'LSM10_100-8W';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.11') {
        $details->model = 'BS-POE-2024GM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.12') {
        $details->model = 'BS-2024GM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.13') {
        $details->model = 'LPV3-U2S';
        $details->type = 'print server';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.14') {
        $details->model = 'BS-POE-2008M';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.15') {
        $details->model = 'BPV-PD-TX1';
        $details->type = 'print server';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.16') {
        $details->model = 'BS-2108M';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.17') {
        $details->model = 'BS-2016M';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.18') {
        $details->model = 'AirStation WAPM-APG300N';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.19') {
        $details->model = 'LPV3-U2-G54';
        $details->type = 'print server';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.22') {
        $details->model = 'BS-G3024MR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5227.32') {
        $details->model = 'BSL-WS-G2116M';
        $details->type = 'switch';
    }

};
