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

# Vendor Nortel

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.2') {
        $details->model = 'Accelar 1100';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.20') {
        $details->model = 'Accelar 740';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.21') {
        $details->model = 'Accelar 750';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.22') {
        $details->model = 'Accelar 790';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.23') {
        $details->model = 'Accelar 750S';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.30') {
        $details->model = 'Ethernet Routing Switch 8610';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.31') {
        $details->model = 'Ethernet Routing Switch 8606';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.32') {
        $details->model = 'Passport 8110';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.33') {
        $details->model = 'Passport 8106';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.34') {
        $details->model = 'Passport 8003';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.35') {
        $details->model = 'Passport 8103';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.36') {
        $details->model = 'Passport 8110co';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.37') {
        $details->model = 'Passport 8610co';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.38') {
        $details->model = 'Passport 1424T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.42') {
        $details->model = 'Passport 1424T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.43') {
        $details->model = 'Passport 1648';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.44') {
        $details->model = 'Passport 1612G';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.45') {
        $details->model = 'Passport 1624G';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.47') {
        $details->model = 'Passport 8310';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.48') {
        $details->model = 'ERS-8306 Ethernet Routing Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.49') {
        $details->model = 'ERS-8010 Ethernet Routing Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.50') {
        $details->model = 'ERS-8006 Ethernet Routing Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.6') {
        $details->model = 'Accelar 1250';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.7') {
        $details->model = 'Accelar 1150';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.8') {
        $details->model = 'Accelar 1200';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2272.9') {
        $details->model = 'Accelar 105X';
        $details->type = 'switch';
    }
};
