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

# Vendor Alcatel
# NOTE - this is VERY much guesswork.
# http://www.zhone.com/support/manuals/docs/AZ/SNMP-A2-GB20-00.pdf
$get_oid_details = function ($details) {
    $details->manufacturer = 'Alcatel';
    $i = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.8059.1.1.2.1.1.1.1"));
    if ($i == '1') {
        $details->model = '12000';
        $details->type = 'dslam';
    }
    if ($i == '2') {
        $details->model = '4000';
        $details->type = 'dslam';
    }
    if ($i == '3') {
        $details->model = 'Mini DSLAM';
        $details->type = 'dslam';
    }
    if ($i == '4') {
        $details->model = 'Micro DSLAM';
        $details->type = 'dslam';
    }
    if ($i == '5') {
        $details->model = 'Network Extender';
        $details->type = 'network device';
    }
    if ($i == '6') {
        $details->model = '12000E';
        $details->type = 'dslam';
    }
    if ($i == '7') {
        $details->model = '4000E';
        $details->type = 'dslam';
    }
};
