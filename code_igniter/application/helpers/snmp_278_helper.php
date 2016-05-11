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

# Vendor Hitachi

$get_oid_details = function ($details) {
    # catch all
    if (strpos($details->snmp_oid, '1.3.6.1.4.1.278.1.19') == 0) {
        $details->model = 'Unknown';
        $details->type = 'wap';
    }
    if (strpos($details->snmp_oid, '1.3.6.1.4.1.278.1.27') == 0) {
        $details->model = 'Apresia';
        $details->type = 'switch';
    }
    # individual oid's
    if ($details->snmp_oid == '1.3.6.1.4.1.278.1.19.4') {
        $details->model = 'HAP5520AG';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.278.1.27.7') {
        $details->model = 'Apresia 3124GT';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.278.1.27.8') {
        $details->model = 'Apresia 3124GT-PSR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.278.1.27.17') {
        $details->model = 'Apresia 3248G';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.278.1.27.27') {
        $details->model = 'Apresia 4224GT-PSR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.278.1.27.35') {
        $details->model = 'Apresia 3124GT2';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.278.1.27.55') {
        $details->model = 'Apresia 3424GT-SS';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.278.1.27.57') {
        $details->model = 'Apresia 3448GT';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.278.1.27.65') {
        $details->model = 'Apresia 5428GT';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.278.1.27.69') {
        $details->model = 'Apresia 13200-52GT-PSR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.278.1.27.70') {
        $details->model = 'Apresia 13200-52GT';
        $details->type = 'switch';
    }

};
