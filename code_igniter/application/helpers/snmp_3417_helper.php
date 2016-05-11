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

# Vendor Bluecoat

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.1') {
        $details->model = 'SG1000';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.10') {
        $details->model = 'SG600';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.11') {
        $details->model = 'SGCA6000';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.12') {
        $details->model = 'SG610';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.13') {
        $details->model = 'SG600';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.14') {
        $details->model = 'SG3000s';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.15') {
        $details->model = 'SG5000s';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.16') {
        $details->model = 'SG700';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.17') {
        $details->model = 'SG710';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.18') {
        $details->model = 'SG7000';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.19') {
        $details->model = 'SG611';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.2') {
        $details->model = 'SG100';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.20') {
        $details->model = 'SG800';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.22') {
        $details->model = 'SG400';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.23') {
        $details->model = 'SG8000';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.24') {
        $details->model = 'SG200';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.25') {
        $details->model = 'SG810';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.26') {
        $details->model = 'SG210';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.27') {
        $details->model = 'SG510';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.28') {
        $details->model = 'SG8100';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.29') {
        $details->model = 'SG9000';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.3') {
        $details->model = 'SG500';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.31') {
        $details->model = 'SG600';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.32') {
        $details->model = 'SG300';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.34') {
        $details->model = 'SG900';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.4') {
        $details->model = 'SG2000';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.5') {
        $details->model = 'SG5000';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.6') {
        $details->model = 'SG500A';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.7') {
        $details->model = 'SG3000';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.8') {
        $details->model = 'SG5x5';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.1.9') {
        $details->model = 'SG110';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.2.1') {
        $details->model = 'SGME710';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.2.2') {
        $details->model = 'SGME800';
        $details->type = 'proxy';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3417.1.2.3') {
        $details->model = 'SGME810';
        $details->type = 'proxy';
    }
};
