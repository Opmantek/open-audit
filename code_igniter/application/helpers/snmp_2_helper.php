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

# Vendor IBM

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.2.3.10') {
        $details->model = '8271 Nways 216';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2.3.42') {
        $details->model = '8271 Nways F12';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2.3.43') {
        $details->model = '8271 Nways F24';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2.6.3') {
        $details->model = 'BladeCenter Gigabit Ethernet Switch Module';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2.6.66.1.1.108') {
        $details->model = '8270 Nways Token-Ring LAN Switch Model 108';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2.6.66.1.1.800') {
        $details->model = '8270 Nways Token-Ring LAN Switch Model 800';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2.6.98.1.1.524') {
        $details->model = '8271 Nways 524';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2.6.98.1.1.612') {
        $details->model = '8271 Nways 612';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2.6.98.1.1.624') {
        $details->model = '8271 Nways 624';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2.6.98.1.1.712') {
        $details->model = '8271 Nways 712';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2.6.158.4') {
        $details->model = 'IBM Remote Supervisor Adapter II';
        $details->type = 'remote access controller';
    }
};
