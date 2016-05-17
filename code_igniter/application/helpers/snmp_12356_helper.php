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

# Vendor Fortinet

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.302') {
        $details->model = 'Fortigate 30B';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.500') {
        $details->model = 'Fortigate 50A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.501') {
        $details->model = 'Fortigate 50AM';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.502') {
        $details->model = 'Fortigate 50B';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.503') {
        $details->model = 'Fortigate 50B';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.600') {
        $details->model = 'Fortigate 60';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.601') {
        $details->model = 'Fortigate 60M';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.602') {
        $details->model = 'Fortigate 60ADSL';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.603') {
        $details->model = 'Fortigate 60B';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.610') {
        $details->model = 'Fortigate 60';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.611') {
        $details->model = 'Fortigate 60A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.612') {
        $details->model = 'Fortigate 60AM';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.613') {
        $details->model = 'Fortigate 60B';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.1000') {
        $details->model = 'Fortigate 100';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.1001') {
        $details->model = 'Fortigate 100A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.1002') {
        $details->model = 'Fortigate 110C';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.2000') {
        $details->model = 'Fortigate 200';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.2001') {
        $details->model = 'Fortigate 200A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.3000') {
        $details->model = 'Fortigate 300';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.3001') {
        $details->model = 'Fortigate 300A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.3002') {
        $details->model = 'Fortigate 310B';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.4000') {
        $details->model = 'Fortigate 400';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.4001') {
        $details->model = 'Fortigate 400A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.5000') {
        $details->model = 'Fortigate 500';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.5001') {
        $details->model = 'Fortigate 500A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.8000') {
        $details->model = 'Fortigate 800';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.8001') {
        $details->model = 'Fortigate 800F';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.10000') {
        $details->model = 'Fortigate 1000';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.10001') {
        $details->model = 'Fortigate 1000A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.10002') {
        $details->model = 'Fortigate 1000AFA2';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.10003') {
        $details->model = 'Fortigate 1000ALENC';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.20000') {
        $details->model = 'Fortigate 2000';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.30000') {
        $details->model = 'Fortigate 3000';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.30160') {
        $details->model = 'Fortigate 3016B';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.36000') {
        $details->model = 'Fortigate 3600';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.36003') {
        $details->model = 'Fortigate 3600A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.38100') {
        $details->model = 'Fortigate 3810A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.40000') {
        $details->model = 'Fortigate 4000';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.50000') {
        $details->model = 'Fortigate 5000';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.50001') {
        $details->model = 'Fortigate 5002FB2';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.50011') {
        $details->model = 'Fortigate 5001A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.50021') {
        $details->model = 'Fortigate 5002A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.50040') {
        $details->model = 'Fortigate 5004';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.50050') {
        $details->model = 'Fortigate 5005';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.50051') {
        $details->model = 'Fortigate 5005FA2';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.1001') {
        $details->model = 'Fortinet 100A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.2001') {
        $details->model = 'Fortinet 200A';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.3002') {
        $details->model = 'Fortinet 310B';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.603') {
        $details->model = 'Fortinet 60';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.15000') {
        $details->model = 'FortiGate-1500D';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.1004') {
        $details->model = 'FortiGate-100D';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.12356.101.1.2005') {
        $details->model = 'FortiGate-200D';
        $details->type = 'firewall';
    }

    if ($details->snmp_version == '2') {
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.12356.1.2.0"));

        if ($details->serial == '') {
            $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.12356.100.1.1.1.0"));
        }
    }
};
