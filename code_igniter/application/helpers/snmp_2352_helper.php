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

# Vendor RedBack

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.1') {
        $details->model = 'SMS 1000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.2') {
        $details->model = 'SMS 500';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.3') {
        $details->model = 'SMS 1800';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.4') {
        $details->model = 'SMS 10000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.5') {
        $details->model = 'Smart Edge IDT';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.6') {
        $details->model = 'ESP 200';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.7') {
        $details->model = 'ESP 5000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.8') {
        $details->model = 'ESP 6000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.9') {
        $details->model = 'SMS 2800';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.10') {
        $details->model = 'Smart Edge 800';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.11') {
        $details->model = 'Smart Edge 400';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.12') {
        $details->model = 'Smart Edge 100';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.13') {
        $details->model = 'Smart Edge 1200';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.14') {
        $details->model = 'Smart Metro 480';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.15') {
        $details->model = 'Smart Edge 600';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.16') {
        $details->model = 'SM 240';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.17') {
        $details->model = 'SSR 8020';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2352.1.18') {
        $details->model = 'SSR 8010';
        $details->type = 'router';
    }
};
