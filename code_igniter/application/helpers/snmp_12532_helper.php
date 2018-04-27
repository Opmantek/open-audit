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
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.2.1
* @link      http://www.open-audit.org
 */

# Vendor Pulse Secure

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    $details->manufacturer = 'Pulse Secure';
    $details->type = 'vpn terminator';

    if ($oid == '1.3.6.1.4.1.12532.252') {
        $details->model = 'iveSA Product';
    }
    if ($oid == '1.3.6.1.4.1.12532.253') {
        $details->model = 'IC Product';
    }
    if ($oid == '1.3.6.1.4.1.12532.254') {
        $details->model = 'MAG Product';
    }
    if ($oid == '1.3.6.1.4.1.12532.255') {
        $details->model = 'VA Product';
    }
    if ($oid == '1.3.6.1.4.1.12532.256') {
        $details->model = 'PSA Product';
    }
    if ($oid == '1.3.6.1.4.1.12532.254.1') {
        $details->model = 'MAG-2600';
    }
    if ($oid == '1.3.6.1.4.1.12532.254.2') {
        $details->model = 'MAG-4610';
    }
    if ($oid == '1.3.6.1.4.1.12532.254.3') {
        $details->model = 'SM-160';
    }
    if ($oid == '1.3.6.1.4.1.12532.254.4') {
        $details->model = 'SM-360';
    }
    if ($oid == '1.3.6.1.4.1.12532.255.1') {
        $details->model = 'VA-SPE';
    }
    if ($oid == '1.3.6.1.4.1.12532.255.2') {
        $details->model = 'VA-DTE';
    }
    if ($oid == '1.3.6.1.4.1.12532.256.1') {
        $details->model = 'PSA-300';
    }
    if ($oid == '1.3.6.1.4.1.12532.256.2') {
        $details->model = 'PSA-3000';
    }
    if ($oid == '1.3.6.1.4.1.12532.256.3') {
        $details->model = 'PSA-5000';
    }
    if ($oid == '1.3.6.1.4.1.12532.256.4') {
        $details->model = 'PSA-7000f';
    }
    if ($oid == '1.3.6.1.4.1.12532.256.5') {
        $details->model = 'PSA-7000c';
    }
    if ($oid == '1.3.6.1.4.1.12532.256.6') {
        $details->model = 'PSA-10000';
    }
    if ($oid == '1.3.6.1.4.1.12532.254.1.1') {
        $details->model = 'MAG-2600';
    }
    if ($oid == '1.3.6.1.4.1.12532.254.2.1') {
        $details->model = 'MAG-4610';
    }
    if ($oid == '1.3.6.1.4.1.12532.254.3.1') {
        $details->model = 'MAG-SM160';
    }
    if ($oid == '1.3.6.1.4.1.12532.254.4.1') {
        $details->model = 'MAG-SM360';
    }
    if ($oid == '1.3.6.1.4.1.12532.255.1.1') {
        $details->model = 'VA-SPE';
    }
    if ($oid == '1.3.6.1.4.1.12532.255.2.1') {
        $details->model = 'VA-DTE';
    }
    if ($oid == '1.3.6.1.4.1.12532.256.1.1') {
        $details->model = 'PSA-300';
    }
    if ($oid == '1.3.6.1.4.1.12532.256.2.1') {
        $details->model = 'PSA-3000';
    }
    if ($oid == '1.3.6.1.4.1.12532.256.3.1') {
        $details->model = 'PSA-5000';
    }
    if ($oid == '1.3.6.1.4.1.12532.256.4.1') {
        $details->model = 'PSA-7000f';
    }
    if ($oid == '1.3.6.1.4.1.12532.256.5.1') {
        $details->model = 'PSA-7000c';
    }
    if ($oid == '1.3.6.1.4.1.12532.256.6.1') {
        $details->model = 'PSA-10000';
    }
    return($details);
};
