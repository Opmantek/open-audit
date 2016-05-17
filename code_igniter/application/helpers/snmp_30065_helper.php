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

# Vendor Arista

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7048.427.3648') { $details->type = 'switch'; $details->model = 'DCS-7048T-A'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7048.427.4.3282') { $details->type = 'switch'; $details->model = 'DCS-7048T-4S'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.2512.16') { $details->type = 'switch'; $details->model = 'DCS-7050Q-16'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.2512.16.761') { $details->type = 'switch'; $details->model = 'DCS-7050Q-16SSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.3095.32') { $details->type = 'switch'; $details->model = 'DCS-7050Q-X32'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.3095.32.2745.761') { $details->type = 'switch'; $details->model = 'DCS-7050Q-X32CLSSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.3095.32.761') { $details->type = 'switch'; $details->model = 'DCS-7050Q-X32SSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.3282.52') { $details->type = 'switch'; $details->model = 'DCS-7050S-52'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.3282.52.761') { $details->type = 'switch'; $details->model = 'DCS-7050S-52SSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.3282.64') { $details->type = 'switch'; $details->model = 'DCS-7050S-64'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.3282.64.761') { $details->type = 'switch'; $details->model = 'DCS-7050S-64SSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.3741.128') { $details->type = 'switch'; $details->model = 'DCS-7050S-X128'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.3741.128.761') { $details->type = 'switch'; $details->model = 'DCS-7050S-X128SSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.427.36') { $details->type = 'switch'; $details->model = 'DCS-7050T-36'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.427.52') { $details->type = 'switch'; $details->model = 'DCS-7050T-52'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.427.52.761') { $details->type = 'switch'; $details->model = 'DCS-7050T-52SSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.427.64') { $details->type = 'switch'; $details->model = 'DCS-7050T-64'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7050.427.64.761') { $details->type = 'switch'; $details->model = 'DCS-7050T-64SSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7120.427.4.3282') { $details->type = 'switch'; $details->model = 'DCS-7120T-4S'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7124.2312') { $details->type = 'switch'; $details->model = 'DCS-7124F-X'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7124.2312.2745') { $details->type = 'switch'; $details->model = 'DCS-7124F-XCL'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7124.3282') { $details->type = 'switch'; $details->model = 'DCS-7124-S'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7124.3741') { $details->type = 'switch'; $details->model = 'DCS-7124-SX'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7124.3741.761') { $details->type = 'switch'; $details->model = 'DCS-7124S-XSSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7140.427.8.3282') { $details->type = 'switch'; $details->model = 'DCS-7140T-8S'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7148.3282') { $details->type = 'switch'; $details->model = 'DCS-7148S'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7148.3741') { $details->type = 'switch'; $details->model = 'DCS-7148S-X'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7150.3282.24') { $details->type = 'switch'; $details->model = 'DCS-7150S-24'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7150.3282.24.2745') { $details->type = 'switch'; $details->model = 'DCS-7150S-24CL'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7150.3282.24.2745.761') { $details->type = 'switch'; $details->model = 'DCS-7150S-24CLSSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7150.3282.52.2745') { $details->type = 'switch'; $details->model = 'DCS-7150S-52CL'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7150.3282.52.2745.761') { $details->type = 'switch'; $details->model = 'DCS-7150S-52CLSSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7150.3282.64.2745') { $details->type = 'switch'; $details->model = 'DCS-7150S-64CL'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7150.3282.64.2745.761') { $details->type = 'switch'; $details->model = 'DCS-7150S-64CLSSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7250.3095.64') { $details->type = 'switch'; $details->model = 'DCS-7250Q-X64'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7250.3095.64.761') { $details->type = 'switch'; $details->model = 'DCS-7250Q-X64SSD'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7304') { $details->type = 'switch'; $details->model = 'DCS-7304'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7308') { $details->type = 'switch'; $details->model = 'DCS-7308'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7504') { $details->type = 'switch'; $details->model = 'DCS-7504'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.30065.1.3011.7508') { $details->type = 'switch'; $details->model = 'DCS-7508'; }
};
