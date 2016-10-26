<?php
if (!defined('BASEPATH')) {
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

# Vendor Palo Alto

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    if ($oid == '1.3.6.1.4.1.25461.2.3.1') {
        $details->model = 'PA-4050 firewall';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.25461.2.3.2') {
        $details->model = 'PA-4020 firewall';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.25461.2.3.3') {
        $details->model = 'PA-2050 firewall';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.25461.2.3.4') {
        $details->model = 'PA-2020 firewall';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.25461.2.3.5') {
        $details->model = 'PA-4060 firewall';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.25461.2.3.6') {
        $details->model = 'PA-500 firewall';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.25461.2.3.7') {
        $details->model = 'Panorama firewall';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.25461.2.3.8') {
        $details->model = 'PA-5060 firewall';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.25461.2.3.9') {
        $details->model = 'PA-5050 firewall';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.25461.2.3.11') {
        $details->model = 'PA-5020 firewall';
        $details->type = 'firewall';
    }
    if ($oid == '1.3.6.1.4.1.25461.2.3.12') {
        $details->model = 'PA-200 firewall';
        $details->type = 'firewall';
    }
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.25461.2.1.2.1.3.0");
    return($details);
};
