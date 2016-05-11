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

# Vendor TP-Link

$get_oid_details = function ($details) {
    // generic types here
    if (strpos($details->snmp_oid, '1.3.6.1.4.1.11863.1') !== false) {
        $details->type = 'switch';
    }
    if (strpos($details->snmp_oid, '1.3.6.1.4.1.11863.2') !== false) {
        $details->type = 'router';
    }
    if (strpos($details->snmp_oid, '1.3.6.1.4.1.11863.3') !== false) {
        $details->type = 'wap';
    }
    if (strpos($details->snmp_oid, '1.3.6.1.4.1.11863.4') !== false) {
        $details->type = 'adsl modem';
    }

    // specific types here
    if ($details->snmp_oid == '1.3.6.1.4.1.11863.1.1.1') {
        $details->model = 'TL-SL5428';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11863.1.1.2') {
        $details->model = 'TL-SL3452';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11863.1.1.3') {
        $details->model = 'TL-SG3424';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11863.1.1.4') {
        $details->model = 'TL-SG3216';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11863.1.1.5') {
        $details->model = 'TL-SG3210';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11863.1.1.6') {
        $details->model = 'TL-SL3428un';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11863.1.1.7') {
        $details->model = 'TL-SG5428';
        $details->type = 'switch';
    }

    if ($details->snmp_oid == '1.3.6.1.4.1.11863.1.1.13') {
        $details->model = 'TL-SG2424';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11863.1.1.59') {
        $details->model = 'TL-SL5428';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11863.100.101') {
        $details->model = 'TL-SL3428';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11863.100.102') {
        $details->model = 'TL-SL3452';
        $details->type = 'switch';
    }

    if (!isset($details->model) or $details->model == '') {
        $details->model = @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.16.19.3.0");
    }

};
