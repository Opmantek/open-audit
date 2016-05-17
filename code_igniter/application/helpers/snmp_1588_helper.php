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

# Vendor Brocade

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.1') {
        $details->model = 'Brocade 3200 (IBM 3534-F08)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.10') {
        $details->model = 'Brocade 12000 (IBM 2109-M12)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.12') {
        $details->model = 'Brocade 3900 (IBM 2109-F32)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.16') {
        $details->model = 'Brocade 3200 (IBM 3534-F08)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.17') {
        $details->model = 'HP StorageWorks 2-16-EL';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.18') {
        $details->model = 'HP StorageWorks 2-8';
        $details->type = 'storage misc';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.2') {
        $details->model = 'Brocade 2800 (IBM 2109-S16)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.21') {
        $details->model = 'Brocade 24000 (IBM 2109-M14)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.22') {
        $details->model = 'IBM BladeCenter';
        $details->type = 'computer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.26') {
        $details->model = 'Brocade 3250 (IBM 2005-H08)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.27') {
        $details->model = 'Brocade 3850 (IBM 2005-H16)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.29') {
        $details->model = 'HP BladeCenter';
        $details->type = 'computer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.3') {
        $details->model = 'Brocade 2400 (IBM 2109-S08)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.32') {
        $details->model = 'HP 4100';
        $details->type = 'printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.33') {
        $details->model = 'Dell BladeCenter';
        $details->type = 'computer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.38') {
        $details->model = 'Brocade AP7420 (IBM 2109-A16)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.4') {
        $details->model = 'Brocade 20X0';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.42') {
        $details->model = 'Brocade 48000 (IBM 2109-M48)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.43') {
        $details->model = 'Brocade Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.5') {
        $details->model = 'Brocade 22X0';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.6') {
        $details->model = 'Brocade 2800 (IBM 2109-S16)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.7') {
        $details->model = 'Brocade 2800 (IBM 2109-S16)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.71') {
        $details->model = 'Brocade 300 (IBM 2498-24e)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.72') {
        $details->model = 'Brocade Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.1.1.9') {
        $details->model = 'Brocade 3800 (IBM 2109-F16)';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.2.1.1.1.1') {
        $details->model = 'VDX 6720-24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.2.1.1.1.2') {
        $details->model = 'VDX 6720P-60';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.2.1.1.1.3') {
        $details->model = 'VDX 6730P-32';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.2.1.1.1.4') {
        $details->model = 'VDX 6730P-64';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.2.2.1.1.1.5') {
        $details->model = 'VDX 6710P-54';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.3.3.1.1000') {
        $details->model = 'VDX 8770S-4';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.3.3.1.1001') {
        $details->model = 'VDX 8770S-8';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.3.3.1.1002') {
        $details->model = 'VDX 8770S-16';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.3.3.1.131') {
        $details->model = 'VDX 6740';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1588.3.3.1.137') {
        $details->model = 'VDX 6740T';
        $details->type = 'switch';
    }
};
