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

# Vendor Extreme

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.1') {
        $details->model = 'Summit 1';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.100') {
        $details->model = 'X150-24t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.102') {
        $details->model = 'X150-24p';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.105') {
        $details->model = 'X150-48t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.11') {
        $details->model = 'BlackDiamond 64';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.12') {
        $details->model = 'Summit 7i Sx';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.120') {
        $details->model = 'Summit X650-24x';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.13') {
        $details->model = 'Summit 7i Tx';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.131.15') {
        $details->model = 'WM3700';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.135') {
        $details->model = 'X460-48t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.14') {
        $details->model = 'Summit 1i Tx';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.15') {
        $details->model = 'Summit 5i';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.152') {
        $details->model = 'X460-24t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.156') {
        $details->model = 'X460-48p';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.16') {
        $details->model = 'Summit 48i';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.17') {
        $details->model = 'Alpine 3808';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.19') {
        $details->model = 'Summit 1i Sx';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.2') {
        $details->model = 'Summit 2';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.20') {
        $details->model = 'Alpine 3804';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.21') {
        $details->model = 'Summit 5iLX';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.22') {
        $details->model = 'Summit 5i Tx';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.23') {
        $details->model = 'enetSwitch 24 Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.24') {
        $details->model = 'Black Diamond 6816';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.25') {
        $details->model = 'Summit 24e3';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.26') {
        $details->model = 'Alpine 3802';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.27') {
        $details->model = 'Black Diamond 6804';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.28') {
        $details->model = 'Summit 48si';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.3') {
        $details->model = 'Summit 3';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.30') {
        $details->model = 'Summit Px1';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.4') {
        $details->model = 'Summit 4';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.40') {
        $details->model = 'Summit 24e2';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.41') {
        $details->model = 'Summit 24e2';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.5') {
        $details->model = 'Summit 4 Fx';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.53') {
        $details->model = 'Summit 200-24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.54') {
        $details->model = 'Summit 200-48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.55') {
        $details->model = 'Summit 300-48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.56') {
        $details->model = 'BlackDiamond 10808';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.58') {
        $details->model = 'Summit 400-48t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.6') {
        $details->model = 'Summit 48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.6.3') {
        $details->model = 'Summit 400-24t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.60') {
        $details->model = 'Summit 200-48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.61') {
        $details->model = 'Summit 300-24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.62') {
        $details->model = 'Aspen 8810';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.63') {
        $details->model = 'Summit 400-24t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.64') {
        $details->model = 'Summit 400-24p';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.65') {
        $details->model = 'Summit X450-24x';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.66') {
        $details->model = 'Summit X450-24t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.67') {
        $details->model = 'Summit 400-48t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.68') {
        $details->model = 'SummitWM 100';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.69') {
        $details->model = 'SummitWM 1000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.7') {
        $details->model = 'Summit 24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.71') {
        $details->model = 'Summit X450a-24t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.72') {
        $details->model = 'Summit X450e-24p';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.74') {
        $details->model = 'BlackDiamond 8806';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.76') {
        $details->model = 'Summit X450a-48t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.77') {
        $details->model = 'BlackDiamond 12804';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.79') {
        $details->model = 'Summit x450e-48p';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.8') {
        $details->model = 'BlackDiamond';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.80') {
        $details->model = 'Extreme Summit X450a 24tDC 24 Port Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.81') {
        $details->model = 'Extreme Summit X450a-24t 24 Port Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.82') {
        $details->model = 'Extreme Summit X450a-24xDC 24 Port Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.84') {
        $details->model = 'Summit X450a-24x';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.85') {
        $details->model = 'BlackDiamond 12802';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.87') {
        $details->model = 'Extreme Summit X450a-48tDC 48 Port Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.88') {
        $details->model = 'Summit X250e-24t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.89') {
        $details->model = 'Summit X250e-24p';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.90') {
        $details->model = 'Extreme Summit X250-24x 24 Port Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.91') {
        $details->model = 'Summit X250e-48t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.92') {
        $details->model = 'Summit x250-48p';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.93') {
        $details->model = 'Summit X450a-48t';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1916.2.95') {
        $details->model = 'SummitWM 2000';
        $details->type = 'switch';
    }
};
