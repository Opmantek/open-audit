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

# Vendor Xedia

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.1.0') {
        $details->model = 'AccessPoint';
        $details->type = 'access point';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.1000.1.6') {
        $details->model = 'Access Point Router 1000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.1000.4.0') {
        $details->model = 'Access Point Router 1000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.1000.4.1') {
        $details->model = 'Access Point Router 1000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.300.0.0') {
        $details->model = 'Access Point Router AP300';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.300.0.1') {
        $details->model = 'Access Point Router 300_U';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.300.1.0') {
        $details->model = 'Access Point Router 300_U';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.300.1.1') {
        $details->model = 'Access Point Router 300';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.300.2.0') {
        $details->model = 'Access Point Router 300';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.300.2.1') {
        $details->model = 'Access Point Router 300_ST';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.300.3.0') {
        $details->model = 'Access Point Router 300_ST';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.450.2.0') {
        $details->model = 'Access Point Router 450';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.838.5.1.600.4.2') {
        $details->model = 'Access Point Router 600';
        $details->type = 'router';
    }
};
