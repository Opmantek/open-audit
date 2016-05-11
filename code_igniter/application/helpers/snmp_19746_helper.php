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

# Vendor Data Domain

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.1') {
        $details->model = 'dd200';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.10') {
        $details->model = 'dd580';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.11') {
        $details->model = 'dd580g';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.12') {
        $details->model = 'dd565';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.13') {
        $details->model = 'dd530';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.14') {
        $details->model = 'dd510';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.15') {
        $details->model = 'dd120';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.16') {
        $details->model = 'dd690';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.17') {
        $details->model = 'dd690g';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.18') {
        $details->model = 'dd660';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.19') {
        $details->model = 'dd880';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.2') {
        $details->model = 'dd200Proto';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.20') {
        $details->model = 'dd880g';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.21') {
        $details->model = 'dd610';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.22') {
        $details->model = 'dd630';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.23') {
        $details->model = 'dd140';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.24') {
        $details->model = 'dd670';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.25') {
        $details->model = 'dd860';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.26') {
        $details->model = 'dd860g';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.27') {
        $details->model = 'dd890';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.28') {
        $details->model = 'dd640';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.29') {
        $details->model = 'dd620';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.3') {
        $details->model = 'dd410';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.30') {
        $details->model = 'dd160';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.31') {
        $details->model = 'ddve';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.32') {
        $details->model = 'dd990';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.35') {
        $details->model = '';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.4') {
        $details->model = 'dd430';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.5') {
        $details->model = 'dd460';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.6') {
        $details->model = 'dd400g';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.7') {
        $details->model = 'dd460g';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.8') {
        $details->model = 'dd560';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.19746.3.1.9') {
        $details->model = 'dd560g';
        $details->type = 'storage misc';
    }
};
