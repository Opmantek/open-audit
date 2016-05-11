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

# Vendor Konica Minolta

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.1.1.17.1.1') {
        $details->model = 'izhub 40P';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.1.1.23.1.1') {
        $details->model = 'Magicolor 1690MF';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.1.1.28.1.1') {
        $details->model = 'izhub 3300P';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.1.1.29.1.1') {
        $details->model = 'izhub 4000P';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.10001.1.1') {
        $details->model = 'Minolta 240f PCL';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.10002.1.1') {
        $details->model = 'izhub 20';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.10008.1.1') {
        $details->model = 'izhub 25e';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.101.2.1') {
        $details->model = 'izhub 754';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.102.2.2') {
        $details->model = 'izhub 654e';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.104.2.2') {
        $details->model = 'izhub C454e';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.106.2.2') {
        $details->model = 'izhub C284e';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.106.3.2') {
        $details->model = 'izhub C284e';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.107.2.2') {
        $details->model = 'izhub C224e';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.108.2.1') {
        $details->model = 'izhub 554e';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.110.2.2') {
        $details->model = 'izhub 364e';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.25.2.2') {
        $details->model = 'izhub C550';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.25.2.3') {
        $details->model = 'izhub C550';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.26.2.1') {
        $details->model = 'izhub C252';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.28.2.3') {
        $details->model = 'izhub C451';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.28.3.3') {
        $details->model = 'izhub C451';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.29.2.2') {
        $details->model = 'izhub C353';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.29.3.2') {
        $details->model = 'izhub C353';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.29.6.2') {
        $details->model = 'izhub C353P';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.30.2.2') {
        $details->model = 'izhub C253';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.30.3.2') {
        $details->model = 'izhub C253';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.38.2.1') {
        $details->model = 'izhub 601';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.39.2.2') {
        $details->model = 'izhub 501';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.40.2.2') {
        $details->model = 'izhub 421';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.43.3.1') {
        $details->model = 'izhub C20';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.44.3.3') {
        $details->model = 'izhub C652';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.45.2.1') {
        $details->model = 'izhub C552';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.45.3.3') {
        $details->model = 'izhub C552';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.48.2.1') {
        $details->model = 'izhub C452';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.48.3.2') {
        $details->model = 'izhub C452';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.49.2.2') {
        $details->model = 'izhub C360';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.49.3.2') {
        $details->model = 'izhub C360';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.50.2.1') {
        $details->model = 'izhub C280';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.50.2.2') {
        $details->model = 'izhub C280';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.50.3.2') {
        $details->model = 'izhub C280';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.51.2.1') {
        $details->model = 'izhub C652DS';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.54.1.1') {
        $details->model = '362';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.54.2.1') {
        $details->model = 'Minolta 362';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.56.1.1') {
        $details->model = 'Minolta 222';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.57.2.2') {
        $details->model = 'izhub C220';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.58.2.2') {
        $details->model = 'izhub C35';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.6.1.2') {
        $details->model = 'Minolta 350';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.6.2.2') {
        $details->model = 'Minolta 350';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.63.2.1') {
        $details->model = 'izhub 423';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.64.2.1') {
        $details->model = 'izhub 363';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.65.2.1') {
        $details->model = 'izhub 283';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.65.3.1') {
        $details->model = 'izhub 283 MFP';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.66.2.1') {
        $details->model = 'izhub 223';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.7.1.2') {
        $details->model = 'Minolta 250';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.7.2.2') {
        $details->model = 'Minolta 250';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.70.3.1') {
        $details->model = 'izhub 652';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.8.1.2') {
        $details->model = 'Minolta 200';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.83.2.1') {
        $details->model = 'izhub C364';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.18334.1.1.1.2.1.84.3.1') {
        $details->model = 'izhub C284';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2590.1.1.1.2.1.240') {
        $details->model = 'Minolta 211 PCL';
        $details->type = 'network printer';
    }
};
