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
* @version   2.4.0
* @link      http://www.open-audit.org
 */

# Vendor A10 Networks

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    $details->manufacturer = 'A10 Networks';

    if ($oid == '1.3.6.1.4.1.22610.1.3') {
        $details->model = 'A10 AX';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.1') {
        $details->model = 'A10 AX 2100';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.2') {
        $details->model = 'A10 AX 3100';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.3') {
        $details->model = 'A10 AX 3200';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.4') {
        $details->model = 'A10 AX 2200';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.5') {
        $details->model = 'A10 AX 2000';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.6') {
        $details->model = 'A10 AX 1000';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.7') {
        $details->model = 'A10 AX 5200';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.8') {
        $details->model = 'A10 AX 2500';
        $details->type = 'network device';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.9') {
        $details->model = 'A10 AX 2600';
        $details->type = 'network device';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.10') {
        $details->model = 'A10 AX 3000';
        $details->type = 'network device';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.11') {
        $details->model = 'A10 Hitachi Blade Server';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.12') {
        $details->model = 'A10 AX 5100';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.13') {
        $details->model = 'a10SoftAX';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.14') {
        $details->model = 'A10 AX 3030';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.15') {
        $details->model = 'A10 AX 1030';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.16') {
        $details->model = 'A10 AX 3200-12';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.17') {
        $details->model = 'A10 AX 3400';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.18') {
        $details->model = 'A10 AX 3530';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.19') {
        $details->model = 'A10 AX 5630';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.20') {
        $details->model = 'A10 Thunder 6430';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.21') {
        $details->model = 'A10 Thunder 5430';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.22') {
        $details->model = 'A10 Thunder 3030S';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.23') {
        $details->model = 'A10 Thunder 1030S';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.24') {
        $details->model = 'A10 Thunder 930S';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.25') {
        $details->model = 'A10 Thunder 4430';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.26') {
        $details->model = 'A10 Thunder 5330';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.27') {
        $details->model = 'A10 Thunder 4330';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.28') {
        $details->model = 'A10 Thunder 5630';
        $details->type = 'application accelerator';
    }
    if ($oid == '1.3.6.1.4.1.22610.1.3.29') {
        $details->model = 'A10 Thunder 6630';
        $details->type = 'application accelerator';
    }
    return($details);
};
