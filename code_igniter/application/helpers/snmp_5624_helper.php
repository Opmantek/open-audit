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
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1') { $details->model = 'XSR-1800'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.10') { $details->model = 'Vertical Horizon VH-4802'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.100') { $details->model = 'SecureStack B3G124-24'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.101') { $details->model = 'SecureStack B3G124-24P'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.102') { $details->model = 'SecureStack B3G124-48'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.103') { $details->model = 'SecureStack B3G124-48P'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.11') { $details->model = 'Vertical Horizon VH-2402S'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.119') { $details->model = 'D2G124-12'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.120') { $details->model = 'D2G124-12P'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.129') { $details->model = 'SSA-T1068-0652'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.13') { $details->model = 'Matrix 6H308-48 module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.130') { $details->model = 'SSA-G1018-0652'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.134') { $details->model = 'B5G124-24'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.135') { $details->model = 'B5G124-24P2'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.136') { $details->model = 'B5G124-48'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.137') { $details->model = 'B5G124-48P2'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.14') { $details->model = 'Matrix 6E308-48 module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.140') { $details->model = 'B5K125-48'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.141') { $details->model = 'B5K125-48P2'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.15') { $details->model = 'Matrix 6H202-48 module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.18') { $details->model = 'Matrix 6H002-48 module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.19') { $details->model = 'Matrix 6H003-48 module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.2') { $details->model = 'Matrix 6G306-06 module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.20') { $details->model = 'Matrix E5 5G106-6'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.21') { $details->model = 'Matrix E5 5G102-6'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.23') { $details->model = 'X-Pedition ER16'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.24') { $details->model = 'Vertical Horizon 4802'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.25') { $details->model = 'Vertical Horizon VH-8TX1UM'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.26') { $details->model = 'Vertical Horizon VH-2402-L3'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.27') { $details->model = 'Vertical Horizon VH-8G-L3'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.28') { $details->model = 'Matrix E5 5H152-50'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.29') { $details->model = 'Matrix E5 5H153-50'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.3') { $details->model = 'Matrix 6H302-48 module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.31') { $details->model = 'Vertical Horizon VH-8TX1UMF'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.32') { $details->model = 'XSR-1805'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.34') { $details->model = 'Matrix E1H582-51'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.35') { $details->model = 'Matrix 1G582-09'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.36') { $details->model = 'Matrix 1G694-13'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.37') { $details->model = 'VHxSMGMTxL3 L2/L3 management card'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.4') { $details->model = 'Matrix 6H303-48 module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.42') { $details->model = 'X-Pedition 2400'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.43') { $details->model = 'Vertical Horizon VH-8GO2S'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.44') { $details->model = 'Matrix 6G302-06 module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.45') { $details->model = 'XSR-1850'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.46') { $details->model = 'ELS100-24TXM'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.47') { $details->model = 'Vertical Horizon VH-2202GT'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.48') { $details->model = 'Matrix C5 System Management Module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.49') { $details->model = 'Matrix C1 48 Port Switch'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.5') { $details->model = 'Matrix 6H352-25 module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.50') { $details->model = 'Matrix C2 System Management Module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.51') { $details->model = 'Matrix N'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.52') { $details->model = 'Matrix N7 Platinum'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.53') { $details->model = 'Matrix N3'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.59') { $details->model = 'Matrix E1H582-25'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.6') { $details->model = 'Matrix 6H308-24 module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.60') { $details->model = '1G587-09'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.61') { $details->model = 'Matrix C1G124'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.62') { $details->model = 'Matrix V2H124-24'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.7') { $details->model = 'Matrix 6E308-24 module'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.70') { $details->model = 'Matrix N Router'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.77') { $details->model = 'Matrix N Standalone'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.79') { $details->model = 'Matrix N5 Platinum'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.8') { $details->model = 'Matrix E7 Chassis'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.81') { $details->model = 'Matrix X8'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.83') { $details->model = 'Matrix N1'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.87') { $details->model = 'SecureStack A2H124-24'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.88') { $details->model = 'SecureStack A2H124-24P'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.89') { $details->model = 'SecureStack A2H124-48'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.9') { $details->model = 'Vertical Horizon VH-8G'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.90') { $details->model = 'SecureStack A2H124-48P'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.91') { $details->model = 'SecureStack A2H124-24FX'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.95') { $details->model = 'SecureStack A2H254-16'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.96') { $details->model = 'SecureStack C3G124-24'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.97') { $details->model = 'SecureStack C3G124-24P'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.98') { $details->model = 'SecureStack C3G124-48'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.1.99') { $details->model = 'SecureStack C3G124-48P'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.220') { $details->model = 'SecureStack C2H124-48'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.283') { $details->model = 'SecureStack C2G124-24'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.284') { $details->model = 'SecureStack C2G124-48'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.285') { $details->model = 'SecureStack C2K122-24'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.286') { $details->model = 'SecureStack C2H124-48P'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.287') { $details->model = 'SecureStack C2G124-48P'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.314') { $details->model = 'SecureStack B2G124-24'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.315') { $details->model = 'SecureStack B2G124-48'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.316') { $details->model = 'SecureStack B2G124-48P'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.317') { $details->model = 'SecureStack B2H124-48'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.318') { $details->model = 'SecureStack B2H124-48P'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.350') { $details->model = 'SecureStack C2G134-24P'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.5624.2.2.360') { $details->model = 'SecureStack C2G170-24'; $details->type = 'switch'; }
};
