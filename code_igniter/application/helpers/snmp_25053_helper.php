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
 * 
 * @version 1.12.8
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor Ruckus

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    $details->manufacturer = 'Ruckus';
    $details->type = 'wap';
    if ($oid == '1.3.6.1.4.1.25053.3')   { $details->model = 'Wireless Router'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.1')   { $details->model = 'Wireless Router'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.1.1') { $details->model = 'Wireless Router VF2825';  }
    if ($oid == '1.3.6.1.4.1.25053.3.1.1.2') { $details->model = 'Wireless Router VF2811'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.1.3') { $details->model = 'Wireless Router VF2821'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.1.4') { $details->model = 'Wireless Router VF2835'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.1.5') { $details->model = 'Wireless Router VF7811'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.2')   { $details->model = 'Wireless Adapter'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.2.1') { $details->model = 'Wireless Adapter VF2111'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.2.2') { $details->model = 'Wireless Adapter VF2121'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.2.3') { $details->model = 'Wireless Adapter VF7111'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.3')   { $details->model = 'Wireless Metro'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.3.1') { $details->model = 'Wireless Metro MM2225'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.3.2') { $details->model = 'Wireless Metro MM2211'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.3.3') { $details->model = 'Wireless Metro MM2221'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.4')   { $details->model = 'Wireless Hotzone'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.4.1') { $details->model = 'Wireless Hotzone ZF2925'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.4.2') { $details->model = 'Wireless Hotzone ZF2942'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.4.3') { $details->model = 'Wireless Hotzone ZF7942'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.4.4') { $details->model = 'Wireless Hotzone ZF7962'; }
    if ($oid == '1.3.6.1.4.1.25053.3.1.4.5') { $details->model = 'Wireless Hotzone ZF2741'; }
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.25053.1.1.2.1.1.1.2.0");
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.25053.1.1.2.1.1.1.1.0");
    }
    return($details);
};
