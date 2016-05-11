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

# Vendor Riverstone

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.1') {
        $details->model = '8000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.2') {
        $details->model = '8600';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.22') {
        $details->model = 'IA1100';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.23') {
        $details->model = 'IA1200';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.27') {
        $details->model = 'IA1500';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.3') {
        $details->model = '2000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.4') {
        $details->model = '2100';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.5') {
        $details->model = '3000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.6') {
        $details->model = '32000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.8') {
        $details->model = '1000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.5567.1.1.9') {
        $details->model = '38000';
        $details->type = 'switch';
    }

};
