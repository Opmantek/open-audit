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

# Vendor F5

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.1.1') {
        $details->model = 'BIG-IP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2') {
        $details->model = 'BIG-IP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4') {
        $details->model = 'BIG-IP Application Delivery Controller';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.1') {
        $details->model = 'BIG-IP Local Traffic Manager 520';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.10') {
        $details->model = 'BIG-IP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.11') {
        $details->model = 'BIG-IP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.12') {
        $details->model = 'BIG-IP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.13') {
        $details->model = 'BIG-IP 8800';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.19') {
        $details->model = 'BIG-IP Pb200';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.2') {
        $details->model = 'BIG-IP Local Traffic Manager 540';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.20') {
        $details->model = 'BIG-IP 1600';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.21') {
        $details->model = 'BIG-IP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.22') {
        $details->model = 'BIG-IP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.23') {
        $details->model = 'BIG-IP 8900';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.24') {
        $details->model = 'BIG-IP 3900';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.25') {
        $details->model = 'BIG-IP 8950';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.27') {
        $details->model = 'BIG-IP 11050';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.3') {
        $details->model = 'BIG-IP 1000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.33') {
        $details->model = 'BIG-IP 3410';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.34') {
        $details->model = 'BIG-IP Pb100';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.35') {
        $details->model = 'BIG-IP Pb100n';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.4') {
        $details->model = 'BIG-IP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.43') {
        $details->model = 'BIG-IP Virtual Edition';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.5') {
        $details->model = 'BIG-IP 2400';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.53') {
        $details->model = 'BIG-IP 6900F';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.57') {
        $details->model = 'BIG-IP 8950S';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.59') {
        $details->model = 'BIG-IP 4000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.6') {
        $details->model = 'BIG-IP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.7') {
        $details->model = 'BIG-IP 4100';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.8') {
        $details->model = 'BIG-IP 5100';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3375.2.1.3.4.9') {
        $details->model = 'BIG-IP 5110';
        $details->type = 'unknown';
    }
};
