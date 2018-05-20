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
* @version   2.2.2
* @link      http://www.open-audit.org
 */

# Vendor Hirschmann

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    if ($oid == '1.3.6.1.4.1.248.14.10.2') {
        $details->model = 'RS 2FXFX';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.3') {
        $details->model = 'Mach 3000';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.4') {
        $details->model = 'MS 2108-2';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.5') {
        $details->model = 'MS 3124-4';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.7') {
        $details->model = 'RS 2-4R';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.10') {
        $details->model = 'MS 4128-5';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.20') {
        $details->model = 'Eagle';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.21') {
        $details->model = 'RR-EPL';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.22') {
        $details->model = 'Eagle Mguard';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.23') {
        $details->model = 'Eagle 20';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.24') {
        $details->model = 'Eagle One';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.30') {
        $details->model = 'MS 20';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.31') {
        $details->model = 'MS 30';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.40') {
        $details->model = 'RS 20';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.41') {
        $details->model = 'RS 30';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.44') {
        $details->model = 'RS B20';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.45') {
        $details->model = 'OS B20';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.50') {
        $details->model = 'Mach 4002-48-4G';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.60') {
        $details->model = 'OCTOPUS 24M';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.70') {
        $details->model = 'Mach 4002-24G';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.71') {
        $details->model = 'Mach 4002-24G-3X';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.75') {
        $details->model = 'Mach 4002-48G';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.76') {
        $details->model = 'Mach 4002-48G-3X';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.90') {
        $details->model = 'Rugged Switch';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.100') {
        $details->model = 'Rail Switch Rugged';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.110') {
        $details->model = 'Mach 100';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.120') {
        $details->model = 'Octopus OS';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.130') {
        $details->model = 'Mach 100GE';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.131') {
        $details->model = 'Mach 1000GE';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.200') {
        $details->model = 'EEM1';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.14.10.300') {
        $details->model = 'Gecko';
        $details->type = 'switch';
    }
    if ($oid == '1.3.6.1.4.1.248.11.2.1.2') {
        $details->model = 'Rail Switch Power';
        $details->type = 'switch';
    }
    return($details);
};