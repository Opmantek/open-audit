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

# Vendor Nortel Baystack

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.101.1') {
        $details->model = 'Nortel ERS 4548GT';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.101.10') {
        $details->model = 'Nortel ERS 4526T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.101.2') {
        $details->model = 'Nortel ERS 4548GT-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.101.3') {
        $details->model = 'Nortel ERS 4550T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.101.4') {
        $details->model = 'Nortel ERS 4550T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.101.5') {
        $details->model = 'Nortel ERS 4526FX';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.101.6') {
        $details->model = 'Nortel ERS 4526GTX-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.101.7') {
        $details->model = 'Nortel ERS 4526GTX';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.101.8') {
        $details->model = 'Nortel ERS 4524GT';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.101.9') {
        $details->model = 'Nortel ERS 4526T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.102.1') {
        $details->model = 'Nortel ERS 2500-26T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.102.2') {
        $details->model = 'Nortel ERS 2500-26T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.102.3') {
        $details->model = 'Nortel ERS 2500-50T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.102.4') {
        $details->model = 'Nortel ERS 2500-50T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.69.1') {
        $details->model = 'BayStack 420-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.71.1') {
        $details->model = 'BayStack 380-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.72.1') {
        $details->model = 'BayStack 470-48T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.75.1') {
        $details->model = 'BayStack 460-24T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.77.1') {
        $details->model = 'BayStack 380-24F-GBIC';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.78.1') {
        $details->model = 'BayStack 5510-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.79.1') {
        $details->model = 'BayStack 5510-48T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.80.1') {
        $details->model = 'BayStack 470-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.83.1') {
        $details->model = 'BayStack 425-24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.83.2') {
        $details->model = 'BayStack 425-48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.85.1') {
        $details->model = 'BayStack 5520-24T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.85.2') {
        $details->model = 'BayStack 5520-48T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.88.1') {
        $details->model = 'BayStack 470-24T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.1.6.1.1.89.1') {
        $details->model = 'BayStack 470-48T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3') {
        $details->model = 'SynOp 27xx';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.10.1') {
        $details->model = 'SynOptics 29xx';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.12.1') {
        $details->model = 'SynOptics 28xx';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.13.6') {
        $details->model = 'Nortel NMM5616A SA';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.15.1') {
        $details->model = 'SynOp 281xx';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.2.1') {
        $details->model = 'HubSynSer3000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.2.2') {
        $details->model = 'HubSynTR3000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.2.3') {
        $details->model = 'SynOptics 39xx';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.26.1') {
        $details->model = 'BayStack  NMM Agent';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.28.1') {
        $details->model = 'Baystack 28200';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.29') {
        $details->model = 'BayStack 302T/F';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.29.1') {
        $details->model = 'BayStack 302T/F';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.30') {
        $details->model = 'HubBaySt350';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.30.1') {
        $details->model = 'Various';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.30.2') {
        $details->model = 'BayStack 350-24T switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.32.1') {
        $details->model = 'HubBaySt300';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.32.2') {
        $details->model = 'Baystack 310-24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.35') {
        $details->model = 'Baystack 450';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.35.1') {
        $details->model = 'BayStack 450-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.36') {
        $details->model = 'Baystack 410';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.36.1') {
        $details->model = 'BayStack 410-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.38.1') {
        $details->model = 'Passport 8100';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.38.2') {
        $details->model = 'Passport 8010';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.40.1') {
        $details->model = 'BPS 2000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.43') {
        $details->model = 'Baystack 420';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.43.1') {
        $details->model = 'BayStack 420';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.45') {
        $details->model = 'Baystack 380';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.45.1') {
        $details->model = 'BayStack 380-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.46') {
        $details->model = 'Baystack 470';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.46.1') {
        $details->model = 'BayStack 470-48T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.49') {
        $details->model = 'Baystack 460-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.49.1') {
        $details->model = 'BayStack 460-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.51') {
        $details->model = 'Baystack 380-24F';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.51.1') {
        $details->model = 'Baystack 380';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.52') {
        $details->model = 'Baystack 5510-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.52.1') {
        $details->model = 'BayStack 5510-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.53') {
        $details->model = 'Baystack 5510-28T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.53.1') {
        $details->model = 'BayStack 5510-48T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.54') {
        $details->model = 'Baystack 470-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.54.1') {
        $details->model = 'BayStack 470-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.57') {
        $details->model = 'Baystack 425';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.57.1') {
        $details->model = 'BayStack 425-48T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.57.2') {
        $details->model = 'BayStack 425-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.59.1') {
        $details->model = 'BayStack 5520-24T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.59.2') {
        $details->model = 'BayStack 5520-48T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.6') {
        $details->model = 'SynOptics 332xS';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.61.2') {
        $details->model = 'Baystack 325-24G';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.63.1') {
        $details->model = 'BayStack 470-24T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.64.1') {
        $details->model = 'BayStack 470-48T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.65') {
        $details->model = 'Nortel ERS 5530-24TFD';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.66') {
        $details->model = 'Nortel ERS 3510-24T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.71') {
        $details->model = '4500 Ethernet Routing Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.71.1') {
        $details->model = 'Nortel ERS 4548GT';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.71.10') {
        $details->model = 'Nortel ERS-4526T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.71.2') {
        $details->model = 'Nortel ERS 4548GT-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.71.3') {
        $details->model = 'Nortel ERS 4550T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.71.4') {
        $details->model = 'Nortel ERS 4550T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.71.5') {
        $details->model = 'Nortel ERS 4526FX';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.71.6') {
        $details->model = 'Nortel ERS 4526GTX-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.71.7') {
        $details->model = 'Nortel ERS 4526GTX';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.71.8') {
        $details->model = 'Nortel ERS 4524GT';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.71.9') {
        $details->model = 'Nortel ERS 4526T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.72') {
        $details->model = '2500 Series Ethernet Routing Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.72.1') {
        $details->model = 'Nortel ERS 2500-26T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.72.2') {
        $details->model = 'Nortel ERS 2500-26T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.72.3') {
        $details->model = 'Nortel ERS 2500-50T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.72.4') {
        $details->model = 'Nortel ERS 2500-50T-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.74.2') {
        $details->model = 'Ethernet Routing Switch 5698TFD';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.74.4') {
        $details->model = 'Ethernet Routing Switch 5650TD';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.80.2') {
        $details->model = 'Ethernet Routing Switch 3526T-PWR+';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.80.4') {
        $details->model = 'Ethernet Routing Switch 3524GT-PWR+';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.3.80.6') {
        $details->model = 'Ethernet Routing Switch 3510GT-PWR+';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.45.6.1.3.1.3') {
        $details->model = 'Nortel WSS2380';
        $details->type = 'switch';
    }

    if ($details->snmp_version == '2') {
        # serial
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.45.1.6.3.1.6.0"));

        #model
        if (!isset($details->model) or $details->model == '') {
            $details->model = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.45.1.6.3.1.2.0"));
        }
    }
};
