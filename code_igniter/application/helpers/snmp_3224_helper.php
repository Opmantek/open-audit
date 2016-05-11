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

# Vendor NetScreen

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.1') {
        $details->model = 'NetScreen Generic';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.10') {
        $details->model = 'NetScreen Ns208';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.11') {
        $details->model = 'NetScreen Ns5XT';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.12') {
        $details->model = 'NetScreen Ns5XP';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.13') {
        $details->model = 'NetScreen Ns5000';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.14') {
        $details->model = 'NetScreen Ns5GT';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.15') {
        $details->model = 'NetScreen HardwareSecurityClient';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.16') {
        $details->model = 'NetScreen ISG2000';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.17') {
        $details->model = 'NetScreen -5GT-ADSL-AnnexA';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.19') {
        $details->model = 'NetScreen -5GT-ADSL-AnnexB';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.2') {
        $details->model = 'NetScreen Ns5';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.21') {
        $details->model = 'NetScreen -5GT-WLAN';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.23') {
        $details->model = 'NetScreen -5GT-ADSL-AnnexA-WLAN';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.25') {
        $details->model = 'NetScreen -5GT-ADSL-AnnexB-WLAN';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.28') {
        $details->model = 'NetScreen ISG1000';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.29') {
        $details->model = 'NetScreen SSG5';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.3') {
        $details->model = 'NetScreen Ns10';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.30') {
        $details->model = 'NetScreen SSG5-ISDN';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.31') {
        $details->model = 'NetScreen SSG5-v92';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.32') {
        $details->model = 'NetScreen SSG5-Serial-WLAN';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.33') {
        $details->model = 'NetScreen SSG5-ISDN-WLAN';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.34') {
        $details->model = 'NetScreen SSG5-v92-WLAN';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.35') {
        $details->model = 'NetScreen SSG20';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.36') {
        $details->model = 'NetScreen SSG20-WLAN';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.4') {
        $details->model = 'NetScreen Ns100';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.5') {
        $details->model = 'NetScreen Ns1000';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.50') {
        $details->model = 'NetScreen SSG520';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.51') {
        $details->model = 'NetScreen SSG550';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.52') {
        $details->model = 'NetScreen SSG140';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.54') {
        $details->model = 'NetScreen SSG320';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.55') {
        $details->model = 'NetScreen SSG350';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.6') {
        $details->model = 'NetScreen Ns500';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.7') {
        $details->model = 'NetScreen Ns50';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.8') {
        $details->model = 'NetScreen Ns25';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3224.1.9') {
        $details->model = 'NetScreen Ns204';
        $details->type = 'firewall';
    }

    if ($details->snmp_version == '2') {
        # serial
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.3224.7.1.5.0"));
    }

    if ($details->snmp_version == '1') {
        # serial
        $details->serial = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.3224.7.1.5.0"));
    }

};
