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
 * @version   3.1.2

 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor Hewlett Packard

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    $details->serial = my_snmp_get($ip, $credentials, ".1.3.6.1.4.1.11.2.36.1.1.2.9.0");
    if (!empty($credentials->credentials->version) and $credentials->credentials->version == '1') {
        # model is a hex encoded string in HP Laserjets using snmp v1
        if (empty($details->model)) {
            $model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.11.2.3.9.4.2.1.1.3.2.0");
            $model = str_replace(" ", "", $model);
            $model = str_replace("\n", "", $model);
            if (function_exists('hex2bin')) {
                $details->model = hex2bin($model);
            } else {
                $details->model = pack("H*", $model);
            }
            $temp_model = mb_convert_encoding($details->model, "UTF-8", "ASCII");
        }
        # serial is a hex encoded string in HP Laserjets using snmp v1
        $serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.11.2.3.9.4.2.1.1.3.3.0");
        $serial = str_replace(" ", "", $serial);
        $serial = str_replace("\n", "", $serial);
        if (function_exists('hex2bin')) {
            $details->serial = hex2bin($serial);
        } else {
            $details->serial = pack("H*", $serial);
        }
        $details->serial = mb_convert_encoding($details->serial, "UTF-8", "ASCII");
    }

    if ((strpos(strtolower($details->model), "laserjet") !== false) and (!isset($details->type) or $details->type == '' or $details->type == 'unknown')) {
        $details->type = "network printer";
    }

    if (!empty($temp_model)) {
        $details->model = $temp_model;
    }

    return($details);
};
