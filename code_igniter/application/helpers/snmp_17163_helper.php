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

# Vendor Riverbed

$get_oid_details = function ($details) {
    # http://www.circitor.fr/Mibs/Html/STEELHEAD-MIB.php
    #if ($details->snmp_oid == '1.3.6.1.4.1.17163.1.1') { $details->model = 'Riverbed Steelhead XX20'; $details->type = 'wan accelerator'; }
    #if ($details->snmp_oid == '1.3.6.1.4.1.17163.1.2') { $details->model = 'Riverbed Steelhead CMC8000'; $details->type = 'wan accelerator'; }
    #if ($details->snmp_oid == '1.3.6.1.4.1.17163.1.3') { $details->model = 'Riverbed Steelhead IC9200'; $details->type = 'wan accelerator'; }
    $details->type = 'wan accelerator';

    if ($details->snmp_version == '2') {
        # model
        $details->model = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.17163.1.1.1.1.0"));
        if (!isset($details->model) or $details->model == '') {
            $details->model = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.17163.1.51.1.1.0"));
        }

        # serial
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.17163.1.1.1.2.0"));
        if (!isset($details->serial) or $details->serial == '') {
            $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.17163.1.51.1.2.0"));
        }
    }
};
