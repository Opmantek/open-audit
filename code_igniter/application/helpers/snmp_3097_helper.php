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
 * @version 1.12.8
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor Watchguard

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    if ($oid == '1.3.6.1.4.1.3097.1.4.1') {
        $details->model = 'fbX500';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.10') {
        $details->model = 'fbX5000';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.11') {
        $details->model = 'fbX5500e';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.12') {
        $details->model = 'fbX6000';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.13') {
        $details->model = 'fbX6500e';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.14') {
        $details->model = 'fbX8000';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.15') {
        $details->model = 'fbX8500e';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.16') {
        $details->model = 'fbX8500e-F';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.2') {
        $details->model = 'fbX550e';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.3') {
        $details->model = 'fbX700';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.4') {
        $details->model = 'fbX750e';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.5') {
        $details->model = 'fbX750e-4';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.6') {
        $details->model = 'fbX1000';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.7') {
        $details->model = 'fbX1250e';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.8') {
        $details->model = 'fbX1250e-4';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.4.9') {
        $details->model = 'fbX2500';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.3097.1.5.12') {
        $details->model = 'Watchguard Firewall';
        $details->type = 'firewall';
    }

    if (empty($details->type)) {
        $details->type = 'firewall';
        $details->model = "Watchguard Firewall";
    }

    # model
    // $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.17163.1.1.1.1.0");
    // if (empty($details->model)) {
    // 	$details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.17163.1.51.1.1.0");
    // }

    # serial
    // $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.17163.1.1.1.2.0");
    // if (empty($details->serial)) {
    // 	$details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.17163.1.51.1.2.0");
    // }
    return($details);
};
