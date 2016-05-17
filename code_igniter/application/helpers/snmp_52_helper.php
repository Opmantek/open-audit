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

# Vendor Enterasys

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.1.10.1') {
        $details->model = 'ELS100-24TX';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.1.10.1.2') {
        $details->model = 'ELS-100-24TXM';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.1.10.2') {
        $details->model = 'ELS100-24TXM';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.1.10.3') {
        $details->model = 'ELS100-24TXG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.1.10.7') {
        $details->model = 'SmartSTACK ELS100-S24TX2M';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.1.3') {
        $details->model = 'X-Pedition 8000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.1.4') {
        $details->model = 'X-Pedition 8600';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.10') {
        $details->model = 'Matrix 6H123-50 module';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.12') {
        $details->model = '6E128-26 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.13') {
        $details->model = '6E138-25 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.16') {
        $details->model = '6H128-08 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.18') {
        $details->model = '6H122-16 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.19') {
        $details->model = '6H133-37 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.2') {
        $details->model = 'Matrix 6E122-26 module';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.20') {
        $details->model = 'Matrix 6H202-24 module';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.21') {
        $details->model = 'Matrix 6H252-17 module';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.23') {
        $details->model = 'Matrix 6E233-49 module';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.24') {
        $details->model = 'Matrix 6H258-17 module';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.25') {
        $details->model = '6H203-24 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.26') {
        $details->model = '6H253-13 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.28') {
        $details->model = 'Matrix 6H262-18 module';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.3') {
        $details->model = '6E132-25 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.33') {
        $details->model = 'Matrix 6H302-48';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.4') {
        $details->model = '6E122-08 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.5') {
        $details->model = '6E123-50 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.7') {
        $details->model = 'Matrix 6E123-26 module';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.20.2.8') {
        $details->model = '6E133-25 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.3.4.57') {
        $details->model = '2E42P-27';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.3.4.58') {
        $details->model = 'Smart Switch 2200 2E42-27R';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.3.4.68') {
        $details->model = '2E48-27R';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.3.4.80') {
        $details->model = 'Smart Switch 2200 2H252';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.3.4.82') {
        $details->model = '2E48-27R';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.3.4.84') {
        $details->model = '2H253-25R';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.13.1') {
        $details->model = '9H532-18 SmartSwitch 9000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.13.7') {
        $details->model = '9G536-04 SmartSwitch 9000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.13.8') {
        $details->model = '9H532-24 SmartSwitch 9000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.5.10') {
        $details->model = '9E128-01 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.5.11') {
        $details->model = '9E106-6 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.5.12') {
        $details->model = '9E138-12 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.5.4') {
        $details->model = '9F116-01 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.5.8') {
        $details->model = '9E132-15 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.6.2') {
        $details->model = '9F120-08 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.6.4') {
        $details->model = '9F241-12 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.9.11') {
        $details->model = '9E428-36 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.9.14') {
        $details->model = '9F426-03 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.9.15') {
        $details->model = 'Smart Switch 9000 9H421-12';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.9.16') {
        $details->model = 'Smart Switch 9000 9E423-36';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.9.23') {
        $details->model = '9H423-26 SmartSwitch 9000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.9.7') {
        $details->model = '9F426-02 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.32.9.9') {
        $details->model = '9H422-12 SmartSwitch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.33.1.1') {
        $details->model = 'X-Pedition 2000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.33.1.2') {
        $details->model = 'SmartSwitch Router 2000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.33.1.3') {
        $details->model = 'X-Pedition 2001';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.33.1.7') {
        $details->model = 'SSR600 E/MP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.52.3.9.33.4.1') {
        $details->model = 'Matrix 6C107 module';
        $details->type = 'unknown';
    }
};
