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

# Vendor Juniper

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.1.1') {
        $details->model = 'M-40 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.1.2') {
        $details->model = 'M-20 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.1.3') {
        $details->model = 'M-160 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.1.4') {
        $details->model = 'M-10 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.1.5') {
        $details->model = 'M-5 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.1') {
        $details->model = 'Juniper M40';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.10') {
        $details->model = 'Juniper M7i';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.11') {
        $details->model = 'Juniper M10i';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.13') {
        $details->model = 'Juniper J2300';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.14') {
        $details->model = 'Juniper J4300';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.15') {
        $details->model = 'Juniper J6300';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.16') {
        $details->model = 'Juniper IRM';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.17') {
        $details->model = 'Juniper TX';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.18') {
        $details->model = 'Juniper M120';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.19') {
        $details->model = 'Juniper J4350';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.2') {
        $details->model = 'Juniper M20';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.20') {
        $details->model = 'Juniper J6350';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.21') {
        $details->model = 'Juniper MX 960';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.22') {
        $details->model = 'Juniper J4320';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.23') {
        $details->model = 'Juniper J2320';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.24') {
        $details->model = 'Juniper J2350';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.25') {
        $details->model = 'Juniper MX 480';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.26') {
        $details->model = 'Juniper SRX 5800';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.27') {
        $details->model = 'Juniper T1600';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.28') {
        $details->model = 'Juniper SRX 5600';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.29') {
        $details->model = 'Juniper MX 240';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.3') {
        $details->model = 'Juniper M160';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.30') {
        $details->model = 'Juniper EX 3200';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.31') {
        $details->model = 'Juniper EX 4200';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.32') {
        $details->model = 'Juniper EX 8208';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.33') {
        $details->model = 'Juniper EX 8216';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.34') {
        $details->model = 'Juniper SRX 3600';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.35') {
        $details->model = 'Juniper SRX 3400';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.36') {
        $details->model = 'Juniper SRX 210';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.37') {
        $details->model = 'Juniper TXP';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.38') {
        $details->model = 'Juniper JCS';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.39') {
        $details->model = 'Juniper SRX 240';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.4') {
        $details->model = 'Juniper M10';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.40') {
        $details->model = 'Juniper SRX 650';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.41') {
        $details->model = 'Juniper SRX 100';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.42') {
        $details->model = 'Juniper LN 1000V';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.43') {
        $details->model = 'Juniper EX 2200';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.44') {
        $details->model = 'Juniper EX 4500';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.45') {
        $details->model = 'Juniper FX Series';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.46') {
        $details->model = 'Juniper IBM 4274M02J02M';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.47') {
        $details->model = 'Juniper IBM 4274M06J06M';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.48') {
        $details->model = 'Juniper IBM 4274M11J11M';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.49') {
        $details->model = 'Juniper SRX 1400';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.5') {
        $details->model = 'Juniper M5';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.50') {
        $details->model = 'Juniper IBM 4274S58J58S';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.51') {
        $details->model = 'Juniper IBM 4274S56J56S';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.52') {
        $details->model = 'Juniper IBM 4274S36J36S';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.53') {
        $details->model = 'Juniper IBM 4274S34J34S';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.54') {
        $details->model = 'Juniper IBM 427348EJ48E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.55') {
        $details->model = 'Juniper IBM 4274E08J08E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.56') {
        $details->model = 'Juniper IBM 4274E16J16E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.57') {
        $details->model = 'Juniper MX80';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.58') {
        $details->model = 'Juniper SRX 220';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.59') {
        $details->model = 'Juniper EXXRE';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.6') {
        $details->model = 'Juniper T640';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.60') {
        $details->model = 'Juniper QFX Interconnect';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.61') {
        $details->model = 'Juniper QFX Node';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.62') {
        $details->model = 'Juniper QFX JVRE';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.64') {
        $details->model = 'Juniper SRX 110';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.65') {
        $details->model = 'Juniper SRX 120';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.67') {
        $details->model = 'Juniper MAG 6611';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.68') {
        $details->model = 'Juniper MAG 6610';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.7') {
        $details->model = 'Juniper T320';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.71') {
        $details->model = 'Juniper IBM 0719J45E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.72') {
        $details->model = 'Juniper IBM J08F';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.73') {
        $details->model = 'Juniper IBM J52F';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.75') {
        $details->model = 'Juniper Dell JFX3500';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.76') {
        $details->model = 'EX3300';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.77') {
        $details->model = 'Juniper DELL JSRX3600';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.78') {
        $details->model = 'Juniper DELL JSRX3400';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.79') {
        $details->model = 'Juniper DELL JSRX1400';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.8') {
        $details->model = 'Juniper M40e';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.80') {
        $details->model = 'Juniper DELL JSRX5800';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.81') {
        $details->model = 'Juniper DELL JSRX5600';
        $details->type = 'gateway';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.82') {
        $details->model = 'Juniper QFX Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.9') {
        $details->model = 'Juniper M320';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.1.1.1.2.90') {
        $details->model = 'MX5';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2636.3.41.1.1.5.5') {
        $details->model = 'WXC-2600';
        $details->type = 'unknown';
    }

    if ($details->snmp_version == '2') {
        # serial
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.2636.3.1.3.0"));
    }
};
