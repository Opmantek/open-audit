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

# Vendor Brocade Foundry

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.1') {
        $details->model = 'Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.1.1') {
        $details->model = 'Chassis';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.1.10') {
        $details->model = 'fdry Trap';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.1.2') {
        $details->model = 'AgentSys';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.1.3') {
        $details->model = ' Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.1.4') {
        $details->model = 'L4';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.1.5') {
        $details->model = 'Stack';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.1.6') {
        $details->model = 'Sci';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.1.7') {
        $details->model = 'fdry Sntp';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.1.8') {
        $details->model = 'fdry Radius';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.1.9') {
        $details->model = 'fdry Tacacs';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.10') {
        $details->model = 'wireless Application';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.10.1') {
        $details->model = 'wireless Location';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.11') {
        $details->model = 'Iron Point Mobility';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.11.1') {
        $details->model = 'Iron Point MC';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.12') {
        $details->model = 'NetIron MtuCpe Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.12.1') {
        $details->model = 'NetIron M2404';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.13') {
        $details->model = 'Iron View';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.14') {
        $details->model = 'platform';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.15') {
        $details->model = 'Iron Point Wireless';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.15.1') {
        $details->model = 'Iron Point Wireless RFS';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.15.2') {
        $details->model = 'Iron Point Wireless AP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2') {
        $details->model = ' Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.1') {
        $details->model = 'Ipx';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.10') {
        $details->model = 'AppleTalk';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.11') {
        $details->model = 'Bgp4';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.12') {
        $details->model = 'Vrrp';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.13') {
        $details->model = 'LoopbackIf';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.14') {
        $details->model = 'POS';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.15') {
        $details->model = 'Mpls';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.16') {
        $details->model = 'fdryAcl';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.2') {
        $details->model = 'Ip';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.3') {
        $details->model = 'Rip';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.4') {
        $details->model = 'Ospf';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.5') {
        $details->model = 'Dvmrp';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.6') {
        $details->model = 'Igmp';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.7') {
        $details->model = 'Fsrp';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.8') {
        $details->model = 'GblRt';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.2.9') {
        $details->model = 'Pim';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.1') {
        $details->model = 'FastIron';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.1.1') {
        $details->model = 'FIWG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.1.2') {
        $details->model = 'FIBB Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.10') {
        $details->model = 'NetIron 400';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.10.1') {
        $details->model = 'NI400 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.11') {
        $details->model = 'NetIron 800';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.11.1') {
        $details->model = 'NI800 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.12') {
        $details->model = 'FastIron 2GC';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.12.1') {
        $details->model = 'FI2GC Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.12.2') {
        $details->model = 'FI2GC Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.13') {
        $details->model = 'FastIron 2 Plus GC';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.13.1') {
        $details->model = 'FI2 Plus GC Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.13.2') {
        $details->model = 'FI2 Plus GC Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.14') {
        $details->model = 'BigIron 15000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.14.1') {
        $details->model = 'BI15000 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.14.2') {
        $details->model = 'BI15000 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.14.3') {
        $details->model = 'BI15000SI';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.15') {
        $details->model = 'NetIron 1500';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.15.1') {
        $details->model = 'NI1500 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.16') {
        $details->model = 'FastIron 3';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.16.1') {
        $details->model = 'FI3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.16.2') {
        $details->model = 'FI3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.17') {
        $details->model = 'FastIron 3GC';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.17.1') {
        $details->model = 'FI3GC Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.17.2') {
        $details->model = 'FI3GC Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.18') {
        $details->model = 'ServerIron 400';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.18.1') {
        $details->model = 'SI400 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.18.2') {
        $details->model = 'SI400 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.19') {
        $details->model = 'ServerIron 800';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.19.1') {
        $details->model = 'SI800 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.19.2') {
        $details->model = 'SI800 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.2') {
        $details->model = 'NetIron';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.2.1') {
        $details->model = 'NI Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.20') {
        $details->model = 'ServerIron 1500';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.20.1') {
        $details->model = 'SI1500 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.20.2') {
        $details->model = 'SI1500 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.21') {
        $details->model = '4802';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.21.1') {
        $details->model = '4802 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.21.2') {
        $details->model = '4802 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.21.3') {
        $details->model = '4802SI';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.22') {
        $details->model = 'FastIron 400';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.22.1') {
        $details->model = 'FI400 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.22.2') {
        $details->model = 'FI400 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.23') {
        $details->model = 'FastIron 800';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.23.1') {
        $details->model = 'FI800 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.23.2') {
        $details->model = 'FI800 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.24') {
        $details->model = 'FastIron 1500';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.24.1') {
        $details->model = 'FI1500 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.24.2') {
        $details->model = 'FI1500 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.25') {
        $details->model = 'FES2402';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.25.1') {
        $details->model = 'FES2402 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.25.2') {
        $details->model = 'FES2402 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.26') {
        $details->model = 'FES4802';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.26.1') {
        $details->model = 'FES4802 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.26.2') {
        $details->model = 'FES4802 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.27') {
        $details->model = 'FES9604';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.27.1') {
        $details->model = 'FES9604 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.27.2') {
        $details->model = 'FES9604 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.28') {
        $details->model = 'FES12GCF';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.28.1') {
        $details->model = 'FES12GCF Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.28.2') {
        $details->model = 'FES12GCF Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.29') {
        $details->model = 'FES2402POE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.29.1') {
        $details->model = 'FES2402POE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.29.2') {
        $details->model = 'FES2402POE Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.3') {
        $details->model = 'ServerIron';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.3.1') {
        $details->model = 'SI';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.3.2') {
        $details->model = 'SIXL';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.3.3') {
        $details->model = 'SIXLTCS';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.30') {
        $details->model = 'FES4802POE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.30.1') {
        $details->model = 'FES4802POE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.30.2') {
        $details->model = 'FES4802POE Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.31') {
        $details->model = 'NetIron 4802';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.31.1') {
        $details->model = 'NI4802 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.31.2') {
        $details->model = 'NI4802 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.32') {
        $details->model = 'BigIron MG8';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.32.1') {
        $details->model = 'BIMG8 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.32.2') {
        $details->model = 'BIMG8 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.33') {
        $details->model = 'NetIron 40G';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.33.2') {
        $details->model = 'NI40G Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34') {
        $details->model = 'FESX Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1') {
        $details->model = 'FESX424 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.1') {
        $details->model = 'FESX424 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.1.1') {
        $details->model = 'FESX424';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.1.1.1') {
        $details->model = 'FESX424 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.1.1.2') {
        $details->model = 'FESX424 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.1.2') {
        $details->model = 'FESX424 Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.1.2.1') {
        $details->model = 'FESX424 Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.1.2.2') {
        $details->model = 'FESX424 Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.2') {
        $details->model = 'FESX424 Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.2.1') {
        $details->model = 'FESX424 Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.2.1.1') {
        $details->model = 'FESX424 Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.2.1.2') {
        $details->model = 'FESX424 Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.2.2') {
        $details->model = 'FESX424 Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.2.2.1') {
        $details->model = 'FESX424 Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.2.2.2') {
        $details->model = 'FESX424 Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.3') {
        $details->model = 'FESX424 Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.3.1') {
        $details->model = 'FESX424 Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.3.1.1') {
        $details->model = 'FESX424 Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.3.1.2') {
        $details->model = 'FESX424 Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.3.2') {
        $details->model = 'FESX424 Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.3.2.1') {
        $details->model = 'FESX424 Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.1.3.2.2') {
        $details->model = 'FESX424 Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10') {
        $details->model = 'FESX624POE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.1') {
        $details->model = 'FESX624POE Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.1.1') {
        $details->model = 'FESX624POE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.1.1.1') {
        $details->model = 'FESX624POE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.1.1.2') {
        $details->model = 'FESX624POE Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.1.2') {
        $details->model = 'FESX624POE Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.1.2.1') {
        $details->model = 'FESX624POE Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.1.2.2') {
        $details->model = 'FESX624POE Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.1.2.3') {
        $details->model = 'FESX624POE Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.2') {
        $details->model = 'FESX624POE Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.2.1') {
        $details->model = 'FESX624POE Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.2.1.1') {
        $details->model = 'FESX624POE Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.2.1.2') {
        $details->model = 'FESX624POE Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.2.2') {
        $details->model = 'FESX624POE Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.2.2.1') {
        $details->model = 'FESX624POE Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.2.2.2') {
        $details->model = 'FESX624POE Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.2.2.3') {
        $details->model = 'FESX624POE Plus 1XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.3') {
        $details->model = 'FESX624POE Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.3.1') {
        $details->model = 'FESX624POE Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.3.1.1') {
        $details->model = 'FESX624POE Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.3.1.2') {
        $details->model = 'FESX624POE Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.3.2') {
        $details->model = 'FESX624POE Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.3.2.1') {
        $details->model = 'FESX624POE Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.3.2.2') {
        $details->model = 'FESX624POE Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.10.3.2.3') {
        $details->model = 'FESX624POE Plus 2XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11') {
        $details->model = 'FESX624E Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.1') {
        $details->model = 'FESX624E Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.1.1') {
        $details->model = 'FESX624E';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.1.1.1') {
        $details->model = 'FESX624E Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.1.1.2') {
        $details->model = 'FESX624E Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.1.2') {
        $details->model = 'FESX624E Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.1.2.1') {
        $details->model = 'FESX624E Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.1.2.2') {
        $details->model = 'FESX624E Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.1.2.3') {
        $details->model = 'FESX624E Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.2') {
        $details->model = 'FESX624E Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.2.1') {
        $details->model = 'FESX624E Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.2.1.1') {
        $details->model = 'FESX624E Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.2.1.2') {
        $details->model = 'FESX624E Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.2.2') {
        $details->model = 'FESX624E Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.2.2.1') {
        $details->model = 'FESX624E Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.2.2.2') {
        $details->model = 'FESX624E Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.2.2.3') {
        $details->model = 'FESX624E Plus 1XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.3') {
        $details->model = 'FESX624E Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.3.1') {
        $details->model = 'FESX624E Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.3.1.1') {
        $details->model = 'FESX624E Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.3.1.2') {
        $details->model = 'FESX624E Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.3.2') {
        $details->model = 'FESX624E Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.3.2.1') {
        $details->model = 'FESX624E Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.3.2.2') {
        $details->model = 'FESX624E Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.11.3.2.3') {
        $details->model = 'FESX624E Plus 2XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12') {
        $details->model = 'FESX624E Fiber Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.1') {
        $details->model = 'FESX624E Fiber Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.1.1') {
        $details->model = 'FESX624E Fiber';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.1.1.1') {
        $details->model = 'FESX624E Fiber Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.1.1.2') {
        $details->model = 'FESX624E Fiber Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.1.2') {
        $details->model = 'FESX624E Fiber Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.1.2.1') {
        $details->model = 'FESX624E Fiber Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.1.2.2') {
        $details->model = 'FESX624E Fiber Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.1.2.3') {
        $details->model = 'FESX624E Fiber Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.2') {
        $details->model = 'FESX624E Fiber Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.2.1') {
        $details->model = 'FESX624E Fiber Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.2.1.1') {
        $details->model = 'FESX624E Fiber Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.2.1.2') {
        $details->model = 'FESX624E Fiber Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.2.2') {
        $details->model = 'FESX624E Fiber Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.2.2.1') {
        $details->model = 'FESX624E Fiber Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.2.2.2') {
        $details->model = 'FESX624E Fiber Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.2.2.3') {
        $details->model = 'FESX624E Fiber Plus 1XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.3') {
        $details->model = 'FESX624E Fiber Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.3.1') {
        $details->model = 'FESX624E Fiber Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.3.1.1') {
        $details->model = 'FESX624E Fiber Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.3.1.2') {
        $details->model = 'FESX624E Fiber Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.3.2') {
        $details->model = 'FESX624E Fiber Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.3.2.1') {
        $details->model = 'FESX624E Fiber Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.3.2.2') {
        $details->model = 'FESX624E Fiber Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.12.3.2.3') {
        $details->model = 'FESX624E Fiber Plus 2XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13') {
        $details->model = 'FESX648E Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.1') {
        $details->model = 'FESX648E Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.1.1') {
        $details->model = 'FESX648E';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.1.1.1') {
        $details->model = 'FESX648E Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.1.1.2') {
        $details->model = 'FESX648E Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.1.2') {
        $details->model = 'FESX648E Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.1.2.1') {
        $details->model = 'FESX648E Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.1.2.2') {
        $details->model = 'FESX648E Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.1.2.3') {
        $details->model = 'FESX648E Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.2') {
        $details->model = 'FESX648E Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.2.1') {
        $details->model = 'FESX648E Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.2.1.1') {
        $details->model = 'FESX648E Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.2.1.2') {
        $details->model = 'FESX648E Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.2.2') {
        $details->model = 'FESX648E Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.2.2.1') {
        $details->model = 'FESX648E Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.2.2.2') {
        $details->model = 'FESX648E Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.2.2.3') {
        $details->model = 'FESX648E Plus 1XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.3') {
        $details->model = 'FESX648E Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.3.1') {
        $details->model = 'FESX648E Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.3.1.1') {
        $details->model = 'FESX648E Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.3.1.2') {
        $details->model = 'FESX648E Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.3.2') {
        $details->model = 'FESX648E Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.3.2.1') {
        $details->model = 'FESX648E Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.3.2.2') {
        $details->model = 'FESX648E Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.13.3.2.3') {
        $details->model = 'FESX648E Plus 2XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2') {
        $details->model = 'FESX448 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.1') {
        $details->model = 'FESX448 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.1.1') {
        $details->model = 'FESX448';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.1.1.1') {
        $details->model = 'FESX448 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.1.1.2') {
        $details->model = 'FESX448 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.1.2') {
        $details->model = 'FESX448 Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.1.2.1') {
        $details->model = 'FESX448 Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.1.2.2') {
        $details->model = 'FESX448 Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.2') {
        $details->model = 'FESX448 Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.2.1') {
        $details->model = 'FESX448 Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.2.1.1') {
        $details->model = 'FESX448 Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.2.1.2') {
        $details->model = 'FESX448 Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.2.2') {
        $details->model = 'FESX448 Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.2.2.1') {
        $details->model = 'FESX448 Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.2.2.2') {
        $details->model = 'FESX448 Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.3') {
        $details->model = 'FESX448 Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.3.1') {
        $details->model = 'FESX448 Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.3.1.1') {
        $details->model = 'FESX448 Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.3.1.2') {
        $details->model = 'FESX448 Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.3.2') {
        $details->model = 'FESX448 Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.3.2.1') {
        $details->model = 'FESX448 Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.2.3.2.2') {
        $details->model = 'FESX448 Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3') {
        $details->model = 'FESX424 Fiber Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.1') {
        $details->model = 'FESX424 Fiber Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.1.1') {
        $details->model = 'FESX424 Fiber';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.1.1.1') {
        $details->model = 'FESX424 Fiber Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.1.1.2') {
        $details->model = 'FESX424 Fiber Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.1.2') {
        $details->model = 'FESX424 Fiber Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.1.2.1') {
        $details->model = 'FESX424 Fiber Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.1.2.2') {
        $details->model = 'FESX424 Fiber Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.2') {
        $details->model = 'FESX424 Fiber Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.2.1') {
        $details->model = 'FESX424 Fiber Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.2.1.1') {
        $details->model = 'FESX424 Fiber Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.2.1.2') {
        $details->model = 'FESX424 Fiber Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.2.2') {
        $details->model = 'FESX424 Fiber Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.2.2.1') {
        $details->model = 'FESX424 Fiber Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.2.2.2') {
        $details->model = 'FESX424 Fiber Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.3') {
        $details->model = 'FESX424 Fiber Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.3.1') {
        $details->model = 'FESX424 Fiber Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.3.1.1') {
        $details->model = 'FESX424 Fiber Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.3.1.2') {
        $details->model = 'FESX424 Fiber Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.3.2') {
        $details->model = 'FESX424 Fiber Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.3.2.1') {
        $details->model = 'FESX424 Fiber Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.3.3.2.2') {
        $details->model = 'FESX424 Fiber Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4') {
        $details->model = 'FESX448 Fiber Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.1') {
        $details->model = 'FESX448 Fiber Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.1.1') {
        $details->model = 'FESX448 Fiber';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.1.1.1') {
        $details->model = 'FESX448 Fiber Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.1.1.2') {
        $details->model = 'FESX448 Fiber Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.1.2') {
        $details->model = 'FESX448 Fiber Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.1.2.1') {
        $details->model = 'FESX448 Fiber Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.1.2.2') {
        $details->model = 'FESX448 Fiber Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.2') {
        $details->model = 'FESX448 Fiber Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.2.1') {
        $details->model = 'FESX448 Fiber Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.2.1.1') {
        $details->model = 'FESX448 Fiber Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.2.1.2') {
        $details->model = 'FESX448 Fiber Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.2.2') {
        $details->model = 'FESX448 Fiber Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.2.2.1') {
        $details->model = 'FESX448 Fiber Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.2.2.2') {
        $details->model = 'FESX448 Fiber Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.3') {
        $details->model = 'FESX448 Fiber Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.3.1') {
        $details->model = 'FESX448 Fiber Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.3.1.1') {
        $details->model = 'FESX448 Fiber Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.3.1.2') {
        $details->model = 'FESX448 Fiber Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.3.2') {
        $details->model = 'FESX448 Fiber Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.3.2.1') {
        $details->model = 'FESX448 Fiber Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.4.3.2.2') {
        $details->model = 'FESX448 Fiber Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5') {
        $details->model = 'FESX424POE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.1') {
        $details->model = 'FESX424POE Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.1.1') {
        $details->model = 'FESX424POE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.1.1.1') {
        $details->model = 'FESX424POE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.1.1.2') {
        $details->model = 'FESX424POE Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.1.2') {
        $details->model = 'FESX424POE Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.1.2.1') {
        $details->model = 'FESX424POE Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.1.2.2') {
        $details->model = 'FESX424POE Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.2') {
        $details->model = 'FESX424POE Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.2.1') {
        $details->model = 'FESX424POE Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.2.1.1') {
        $details->model = 'FESX424POE Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.2.1.2') {
        $details->model = 'FESX424POE Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.2.2') {
        $details->model = 'FESX424POE Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.2.2.1') {
        $details->model = 'FESX424POE Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.2.2.2') {
        $details->model = 'FESX424POE Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.3') {
        $details->model = 'FESX424POE Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.3.1') {
        $details->model = 'FESX424POE Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.3.1.1') {
        $details->model = 'FESX424POE Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.3.1.2') {
        $details->model = 'FESX424POE Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.3.2') {
        $details->model = 'FESX424POE Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.3.2.1') {
        $details->model = 'FESX424POE Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.5.3.2.2') {
        $details->model = 'FESX424POE Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6') {
        $details->model = 'FESX624 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.1') {
        $details->model = 'FESX624 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.1.1') {
        $details->model = 'FESX624';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.1.1.1') {
        $details->model = 'FESX624 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.1.1.2') {
        $details->model = 'FESX624 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.1.2') {
        $details->model = 'FESX624 Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.1.2.1') {
        $details->model = 'FESX624 Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.1.2.2') {
        $details->model = 'FESX624 Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.1.2.3') {
        $details->model = 'FESX624 Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.2') {
        $details->model = 'FESX624 Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.2.1') {
        $details->model = 'FESX624 Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.2.1.1') {
        $details->model = 'FESX624 Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.2.1.2') {
        $details->model = 'FESX624 Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.2.2') {
        $details->model = 'FESX624 Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.2.2.1') {
        $details->model = 'FESX624 Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.2.2.2') {
        $details->model = 'FESX624 Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.2.2.3') {
        $details->model = 'FESX624 Plus 1XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.3') {
        $details->model = 'FESX624 Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.3.1') {
        $details->model = 'FESX624 Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.3.1.1') {
        $details->model = 'FESX624 Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.3.1.2') {
        $details->model = 'FESX624 Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.3.2') {
        $details->model = 'FESX624 Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.3.2.1') {
        $details->model = 'FESX624 Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.3.2.2') {
        $details->model = 'FESX624 Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.6.3.2.3') {
        $details->model = 'FESX624 Plus 2XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7') {
        $details->model = 'FESX648 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.1') {
        $details->model = 'FESX648 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.1.1') {
        $details->model = 'FESX648';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.1.1.1') {
        $details->model = 'FESX648 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.1.1.2') {
        $details->model = 'FESX648 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.1.2') {
        $details->model = 'FESX648 Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.1.2.1') {
        $details->model = 'FESX648 Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.1.2.2') {
        $details->model = 'FESX648 Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.1.2.3') {
        $details->model = 'FESX648 Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.2') {
        $details->model = 'FESX648 Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.2.1') {
        $details->model = 'FESX648 Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.2.1.1') {
        $details->model = 'FESX648 Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.2.1.2') {
        $details->model = 'FESX648 Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.2.2') {
        $details->model = 'FESX648 Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.2.2.1') {
        $details->model = 'FESX648 Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.2.2.2') {
        $details->model = 'FESX648 Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.2.2.3') {
        $details->model = 'FESX648 Plus 1XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.3') {
        $details->model = 'FESX648 Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.3.1') {
        $details->model = 'FESX648 Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.3.1.1') {
        $details->model = 'FESX648 Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.3.1.2') {
        $details->model = 'FESX648 Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.3.2') {
        $details->model = 'FESX648 Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.3.2.1') {
        $details->model = 'FESX648 Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.3.2.2') {
        $details->model = 'FESX648 Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.7.3.2.3') {
        $details->model = 'FESX648 Plus 2XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8') {
        $details->model = 'FESX624 Fiber Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.1') {
        $details->model = 'FESX624 Fiber Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.1.1') {
        $details->model = 'FESX624 Fiber';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.1.1.1') {
        $details->model = 'FESX624 Fiber Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.1.1.2') {
        $details->model = 'FESX624 Fiber Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.1.2') {
        $details->model = 'FESX624 Fiber Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.1.2.1') {
        $details->model = 'FESX624 Fiber Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.1.2.2') {
        $details->model = 'FESX624 Fiber Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.1.2.3') {
        $details->model = 'FESX624 Fiber Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.2') {
        $details->model = 'FESX624 Fiber Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.2.1') {
        $details->model = 'FESX624 Fiber Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.2.1.1') {
        $details->model = 'FESX624 Fiber Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.2.1.2') {
        $details->model = 'FESX624 Fiber Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.2.2') {
        $details->model = 'FESX624 Fiber Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.2.2.1') {
        $details->model = 'FESX624 Fiber Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.2.2.2') {
        $details->model = 'FESX624 Fiber Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.2.2.3') {
        $details->model = 'FESX624 Fiber Plus 1XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.3') {
        $details->model = 'FESX624 Fiber Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.3.1') {
        $details->model = 'FESX624 Fiber Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.3.1.1') {
        $details->model = 'FESX624 Fiber Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.3.1.2') {
        $details->model = 'FESX624 Fiber Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.3.2') {
        $details->model = 'FESX624 Fiber Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.3.2.1') {
        $details->model = 'FESX624 Fiber Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.3.2.2') {
        $details->model = 'FESX624 Fiber Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.8.3.2.3') {
        $details->model = 'FESX624 Fiber Plus 2XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9') {
        $details->model = 'FESX648 Fiber Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.1') {
        $details->model = 'FESX648 Fiber Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.1.1') {
        $details->model = 'FESX648 Fiber';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.1.1.1') {
        $details->model = 'FESX648 Fiber Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.1.1.2') {
        $details->model = 'FESX648 Fiber Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.1.2') {
        $details->model = 'FESX648 Fiber Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.1.2.1') {
        $details->model = 'FESX648 Fiber Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.1.2.2') {
        $details->model = 'FESX648 Fiber Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.1.2.3') {
        $details->model = 'FESX648 Fiber Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.2') {
        $details->model = 'FESX648 Fiber Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.2.1') {
        $details->model = 'FESX648 Fiber Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.2.1.1') {
        $details->model = 'FESX648 Fiber Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.2.1.2') {
        $details->model = 'FESX648 Fiber Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.2.2') {
        $details->model = 'FESX648 Fiber Plus 1XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.2.2.1') {
        $details->model = 'FESX648 Fiber Plus 1XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.2.2.2') {
        $details->model = 'FESX648 Fiber Plus 1XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.2.2.3') {
        $details->model = 'FESX648 Fiber Plus 1XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.3') {
        $details->model = 'FESX648 Fiber Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.3.1') {
        $details->model = 'FESX648 Fiber Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.3.1.1') {
        $details->model = 'FESX648 Fiber Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.3.1.2') {
        $details->model = 'FESX648 Fiber Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.3.2') {
        $details->model = 'FESX648 Fiber Plus 2XG Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.3.2.1') {
        $details->model = 'FESX648 Fiber Plus 2XG Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.3.2.2') {
        $details->model = 'FESX648 Fiber Plus 2XG Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.34.9.3.2.3') {
        $details->model = 'FESX648 Fiber Plus 2XG Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35') {
        $details->model = 'FWS X Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1') {
        $details->model = 'FWS X424 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1.1') {
        $details->model = 'FWS X424 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1.1.1') {
        $details->model = 'FWS X424';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1.1.1.1') {
        $details->model = 'FWS X424 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1.1.1.2') {
        $details->model = 'FWS X424 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1.2') {
        $details->model = 'FWS X424 Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1.2.1') {
        $details->model = 'FWS X424 Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1.2.1.1') {
        $details->model = 'FWS X424 Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1.2.1.2') {
        $details->model = 'FWS X424 Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1.3') {
        $details->model = 'FWS X424 Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1.3.1') {
        $details->model = 'FWS X424 Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1.3.1.1') {
        $details->model = 'FWS X424 Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.1.3.1.2') {
        $details->model = 'FWS X424 Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2') {
        $details->model = 'FWS X448 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2.1') {
        $details->model = 'FWS X448 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2.1.1') {
        $details->model = 'FWS X448';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2.1.1.1') {
        $details->model = 'FWS X448 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2.1.1.2') {
        $details->model = 'FWS X448 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2.2') {
        $details->model = 'FWS X448 Plus 1XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2.2.1') {
        $details->model = 'FWS X448 Plus 1XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2.2.1.1') {
        $details->model = 'FWS X448 Plus 1XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2.2.1.2') {
        $details->model = 'FWS X448 Plus 1XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2.3') {
        $details->model = 'FWS X448 Plus 2XG Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2.3.1') {
        $details->model = 'FWS X448 Plus 2XG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2.3.1.1') {
        $details->model = 'FWS X448 Plus 2XG Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.35.2.3.1.2') {
        $details->model = 'FWS X448 Plus 2XG Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36') {
        $details->model = 'FastIron Super X Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.1') {
        $details->model = 'FastIron Super X';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.1.1') {
        $details->model = 'FastIron Super X Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.1.2') {
        $details->model = 'FastIron Super X Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.1.3') {
        $details->model = 'FastIron Super X BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.10') {
        $details->model = 'FastIron Super X800V6 Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.10.1') {
        $details->model = 'FastIron Super X800V6 Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.10.2') {
        $details->model = 'FastIron Super X800V6 Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.10.3') {
        $details->model = 'FastIron Super X800V6 Prem BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.10.4') {
        $details->model = 'FastIron Super X800V6 Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.11') {
        $details->model = 'FastIron Super X1600V6';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.11.1') {
        $details->model = 'FastIron Super X1600V6 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.11.2') {
        $details->model = 'FastIron Super X1600V6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.11.3') {
        $details->model = 'FastIron Super X1600V6 BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.12') {
        $details->model = 'FastIron Super X1600V6 Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.12.1') {
        $details->model = 'FastIron Super X1600V6 Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.12.2') {
        $details->model = 'FastIron Super X1600V6 Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.12.3') {
        $details->model = 'FastIron Super X1600V6 Prem BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.12.4') {
        $details->model = 'FastIron Super X1600V6 Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.2') {
        $details->model = 'FastIron Super X Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.2.1') {
        $details->model = 'FastIron Super X Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.2.2') {
        $details->model = 'FastIron Super X Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.2.3') {
        $details->model = 'FastIron Super X Prem BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.3') {
        $details->model = 'FastIron Super X800';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.3.1') {
        $details->model = 'FastIron Super X800 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.3.2') {
        $details->model = 'FastIron Super X800 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.3.3') {
        $details->model = 'FastIron Super X800 BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.4') {
        $details->model = 'FastIron Super X800 Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.4.1') {
        $details->model = 'FastIron Super X800 Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.4.2') {
        $details->model = 'FastIron Super X800 Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.4.3') {
        $details->model = 'FastIron Super X800 Prem BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.5') {
        $details->model = 'FastIron Super X1600';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.5.1') {
        $details->model = 'FastIron Super X1600 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.5.2') {
        $details->model = 'FastIron Super X1600 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.5.3') {
        $details->model = 'FastIron Super X1600 BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.6') {
        $details->model = 'FastIron Super X1600 Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.6.1') {
        $details->model = 'FastIron Super X1600 Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.6.2') {
        $details->model = 'FastIron Super X1600 Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.6.3') {
        $details->model = 'FastIron Super X1600 Prem BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.7') {
        $details->model = 'FastIron Super XV6';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.7.1') {
        $details->model = 'FastIron Super XV6 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.7.2') {
        $details->model = 'FastIron Super XV6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.7.3') {
        $details->model = 'FastIron Super XV6 BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.8') {
        $details->model = 'FastIron Super XV6 Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.8.1') {
        $details->model = 'FastIron Super XV6 Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.8.2') {
        $details->model = 'FastIron Super XV6 Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.8.3') {
        $details->model = 'FastIron Super XV6 Prem BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.8.4') {
        $details->model = 'FastIron Super XV6 Prem6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.9') {
        $details->model = 'FastIron Super X800V6';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.9.1') {
        $details->model = 'FastIron Super X800V6 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.9.2') {
        $details->model = 'FastIron Super X800V6 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.36.9.3') {
        $details->model = 'FastIron Super X800V6 BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.37') {
        $details->model = 'BigIron Super X Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.37.1') {
        $details->model = 'BigIron Super X';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.37.1.1') {
        $details->model = 'BigIron Super X Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.37.1.2') {
        $details->model = 'BigIron Super X Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.37.1.3') {
        $details->model = 'BigIron Super X BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.38') {
        $details->model = 'TurboIron Super X Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.38.1') {
        $details->model = 'TurboIron Super X';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.38.1.1') {
        $details->model = 'TurboIron SuperX Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.38.1.2') {
        $details->model = 'TurboIron SuperX Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.38.1.3') {
        $details->model = 'TurboIron SuperX BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.38.2') {
        $details->model = 'TurboIron SuperX Prem';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.38.2.1') {
        $details->model = 'TurboIron SuperX Prem Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.38.2.2') {
        $details->model = 'TurboIron SuperX Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.38.2.3') {
        $details->model = 'TurboIron SuperX Prem BaseL3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.39') {
        $details->model = 'IMR Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.39.1') {
        $details->model = 'NetIron IMR';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.39.1.2') {
        $details->model = 'NIIMR Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.4') {
        $details->model = 'TurboIron';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.4.1') {
        $details->model = 'TI Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.4.2') {
        $details->model = 'TI Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40') {
        $details->model = 'BigIron RX Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40.1') {
        $details->model = 'BigIron RX16';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40.1.1') {
        $details->model = 'BIRX16 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40.1.2') {
        $details->model = 'BIRX16 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40.2') {
        $details->model = 'BigIron RX8';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40.2.1') {
        $details->model = 'BIRX8 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40.2.2') {
        $details->model = 'BIRX8 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40.3') {
        $details->model = 'BigIron RX4';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40.3.1') {
        $details->model = 'BIRX4 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40.3.2') {
        $details->model = 'BIRX4 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40.4') {
        $details->model = 'BigIron RX32';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40.4.1') {
        $details->model = 'BIRX32 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.40.4.2') {
        $details->model = 'BIRX32 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.41') {
        $details->model = 'NetIron XMR Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.41.1') {
        $details->model = 'NetIron XMR 16000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.41.1.2') {
        $details->model = 'NIXMR16000 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.41.2') {
        $details->model = 'NetIron XMR 8000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.41.2.2') {
        $details->model = 'NIXMR8000 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.41.3') {
        $details->model = 'NetIron XMR 4000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.41.3.2') {
        $details->model = 'NIXMR4000 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.41.4') {
        $details->model = 'NetIron XMR 32000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.41.4.2') {
        $details->model = 'NIXMR32000 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42') {
        $details->model = 'SecureIron Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.10') {
        $details->model = 'SecureIron TM Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.10.1') {
        $details->model = 'SecureIron TM100';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.10.1.1') {
        $details->model = 'SecureIron TM100 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.10.1.2') {
        $details->model = 'SecureIron TM100 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.10.2') {
        $details->model = 'SecureIron TM300';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.10.2.1') {
        $details->model = 'SecureIron TM300 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.10.2.2') {
        $details->model = 'SecureIron TM300 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.9') {
        $details->model = 'SecureIron LS Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.9.1') {
        $details->model = 'SecureIron LS100';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.9.1.1') {
        $details->model = 'SecureIron LS100 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.9.1.2') {
        $details->model = 'SecureIron LS100 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.9.2') {
        $details->model = 'SecureIron LS300';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.9.2.1') {
        $details->model = 'SecureIron LS300 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.42.9.2.2') {
        $details->model = 'SecureIron LS300 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.44') {
        $details->model = 'NetIron MLX Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.44.1') {
        $details->model = 'NetIron MLX16';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.44.1.2') {
        $details->model = 'NetIron MLX16 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.44.2') {
        $details->model = 'NetIron MLX8';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.44.2.2') {
        $details->model = 'NetIron MLX8 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.44.3') {
        $details->model = 'NetIron MLX4';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.44.3.2') {
        $details->model = 'NetIron MLX4 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.44.4') {
        $details->model = 'NetIron MLX32';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.44.4.2') {
        $details->model = 'NetIron MLX32 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45') {
        $details->model = 'FGS Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1') {
        $details->model = 'FGS624 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.1') {
        $details->model = 'FGS624P Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.1.1') {
        $details->model = 'FGS624P';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.1.1.1') {
        $details->model = 'FGS624P Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.1.1.2') {
        $details->model = 'FGS624P Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.2') {
        $details->model = 'FGS624XGP Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.2.1') {
        $details->model = 'FGS624XGP';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.2.1.1') {
        $details->model = 'FGS624XGP Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.2.1.2') {
        $details->model = 'FGS624XGP Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.3') {
        $details->model = 'FGS624PPOE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.3.1') {
        $details->model = 'FGS624PPOE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.3.1.1') {
        $details->model = 'FGS624PPOE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.3.1.2') {
        $details->model = 'FGS624PPOE Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.4') {
        $details->model = 'FGS624XGPPOE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.4.1') {
        $details->model = 'FGS624XGPPOE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.4.1.1') {
        $details->model = 'FGS624XGPPOE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.1.4.1.2') {
        $details->model = 'FGS624XGPPOE Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.2') {
        $details->model = 'FGS648 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.2.1') {
        $details->model = 'FGS648P Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.2.1.1') {
        $details->model = 'FGS648P';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.2.1.1.1') {
        $details->model = 'FGS648P Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.2.1.1.2') {
        $details->model = 'FGS648P Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.2.2') {
        $details->model = 'FGS648PPOE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.2.2.1') {
        $details->model = 'FGS648PPOE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.2.2.1.1') {
        $details->model = 'FGS648PPOE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.45.2.2.1.2') {
        $details->model = 'FGS648PPOE Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.46') {
        $details->model = 'FLS Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.46.1') {
        $details->model = 'FLS624 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.46.1.1') {
        $details->model = 'FLS624 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.46.1.1.1') {
        $details->model = 'FLS624';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.46.1.1.1.1') {
        $details->model = 'FLS624 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.46.1.1.1.2') {
        $details->model = 'FLS624 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.46.2') {
        $details->model = 'FLS648 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.46.2.1') {
        $details->model = 'FLS648 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.46.2.1.1') {
        $details->model = 'FLS648';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.46.2.1.1.1') {
        $details->model = 'FLS648 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.46.2.1.1.2') {
        $details->model = 'FLS648 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47') {
        $details->model = 'SI Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.1') {
        $details->model = 'SI100';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.1.1') {
        $details->model = 'SI100 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.1.2') {
        $details->model = 'SI100 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.10') {
        $details->model = 'ServerIron GTe Plus ';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.10.1') {
        $details->model = 'ServerIron GTe Plus  Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.10.2') {
        $details->model = 'ServerIron GTe Plus  Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.11') {
        $details->model = 'ServerIron 4G';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.11.1') {
        $details->model = 'ServerIron 4G Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.11.2') {
        $details->model = 'ServerIron 4G Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.12') {
        $details->model = 'ServerIron Adx1000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.12.1') {
        $details->model = 'ServerIron Adx1000 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.12.2') {
        $details->model = 'ServerIron Adx1000 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.13') {
        $details->model = 'ServerIron Adx1000Ssl';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.13.1') {
        $details->model = 'ServerIron Adx1000Ssl Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.13.2') {
        $details->model = 'ServerIron Adx1000Ssl Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.14') {
        $details->model = 'ServerIron Adx4000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.14.1') {
        $details->model = 'ServerIron Adx4000 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.14.2') {
        $details->model = 'ServerIron Adx4000 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.15') {
        $details->model = 'ServerIron Adx4000Ssl';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.15.1') {
        $details->model = 'ServerIron Adx4000Ssl Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.15.2') {
        $details->model = 'ServerIron Adx4000Ssl Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.16') {
        $details->model = 'ServerIron Adx8000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.16.1') {
        $details->model = 'ServerIron Adx8000 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.16.2') {
        $details->model = 'ServerIron Adx8000 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.17') {
        $details->model = 'ServerIron Adx8000Ssl';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.17.1') {
        $details->model = 'ServerIron Adx8000Ssl Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.17.2') {
        $details->model = 'ServerIron Adx8000Ssl Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.18') {
        $details->model = 'ServerIron Adx10000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.18.1') {
        $details->model = 'ServerIron Adx10000 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.18.2') {
        $details->model = 'ServerIron Adx10000 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.19') {
        $details->model = 'ServerIron Adx10000Ssl';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.19.1') {
        $details->model = 'ServerIron Adx10000Ssl Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.19.2') {
        $details->model = 'ServerIron Adx10000Ssl Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.2') {
        $details->model = 'SI350';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.2.1') {
        $details->model = 'SI350 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.2.2') {
        $details->model = 'SI350 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.3') {
        $details->model = 'SI450';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.3.1') {
        $details->model = 'SI450 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.3.2') {
        $details->model = 'SI450 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.4') {
        $details->model = 'SI850';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.4.1') {
        $details->model = 'SI850 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.4.2') {
        $details->model = 'SI850 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.5') {
        $details->model = 'SI350 Plus ';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.5.1') {
        $details->model = 'SI350 Plus  Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.5.2') {
        $details->model = 'SI350 Plus  Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.6') {
        $details->model = 'SI450 Plus ';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.6.1') {
        $details->model = 'SI450 Plus  Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.6.2') {
        $details->model = 'SI450 Plus  Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.7') {
        $details->model = 'SI850 Plus ';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.7.1') {
        $details->model = 'SI850 Plus  Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.7.2') {
        $details->model = 'SI850 Plus  Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.8') {
        $details->model = 'ServerIron GTc';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.8.1') {
        $details->model = 'ServerIron GTc Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.8.2') {
        $details->model = 'ServerIron GTc Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.9') {
        $details->model = 'ServerIron GTe';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.9.1') {
        $details->model = 'ServerIron GTe Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.47.9.2') {
        $details->model = 'ServerIron GTe Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.48') {
        $details->model = 'FastIron Stack Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.48.1') {
        $details->model = 'FastIron Stack';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.48.1.1') {
        $details->model = 'FastIron Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.48.1.2') {
        $details->model = 'FastIron Stack Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.48.2') {
        $details->model = 'FastIron StackFCX';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.48.2.1') {
        $details->model = 'FastIron StackFCX Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.48.2.2') {
        $details->model = 'FastIron StackFCX BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.48.2.3') {
        $details->model = 'FastIron StackFCX Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.48.2.4') {
        $details->model = 'FastIron StackFCXAdv Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.49') {
        $details->model = 'Ces2000 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.49.1') {
        $details->model = 'Ces2024F';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.49.2') {
        $details->model = 'Ces2024C';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.49.3') {
        $details->model = 'Ces2048F';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.49.4') {
        $details->model = 'Ces2048C';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.49.5') {
        $details->model = 'Ces2048FX';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.49.6') {
        $details->model = 'Ces2048CX';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.5') {
        $details->model = 'TurboIron 8';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.5.1') {
        $details->model = 'T8 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.5.2') {
        $details->model = 'T8 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.5.3') {
        $details->model = 'T8SI';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.5.4') {
        $details->model = 'T8SIXLG';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50') {
        $details->model = 'FLSLC Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.1') {
        $details->model = 'FLSLC624 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.1.1') {
        $details->model = 'FLSLC624 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.1.1.1') {
        $details->model = 'FLSLC624';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.1.1.1.1') {
        $details->model = 'FLSLC624 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.1.1.1.2') {
        $details->model = 'FLSLC624 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.1.2') {
        $details->model = 'FLSLC624POE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.1.2.1') {
        $details->model = 'FLSLC624POE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.1.2.1.1') {
        $details->model = 'FLSLC624POE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.1.2.1.2') {
        $details->model = 'FLSLC624POE Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.2') {
        $details->model = 'FLSLC648 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.2.1') {
        $details->model = 'FLSLC648 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.2.1.1') {
        $details->model = 'FLSLC648';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.2.1.1.1') {
        $details->model = 'FLSLC648 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.2.1.1.2') {
        $details->model = 'FLSLC648 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.2.2') {
        $details->model = 'FLSLC648POE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.2.2.1') {
        $details->model = 'FLSLC648POE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.2.2.1.1') {
        $details->model = 'FLSLC648POE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.50.2.2.1.2') {
        $details->model = 'FLSLC648POE Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.51') {
        $details->model = 'NetIron CER 2000 Family';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.51.1') {
        $details->model = 'NetIron CER 2024F';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.51.2') {
        $details->model = 'NetIron CER 2024C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.51.3') {
        $details->model = 'NetIron CER 2048F';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.51.4') {
        $details->model = 'NetIron CER 2048C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.51.5') {
        $details->model = 'NetIron CER 2048FX';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.51.6') {
        $details->model = 'NetIron CER 2048CX';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.51.7') {
        $details->model = 'NetIron CER';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52') {
        $details->model = 'FWS Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1') {
        $details->model = 'FWS 624 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.1') {
        $details->model = 'FWS 624 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.1.1') {
        $details->model = 'FWS 624';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.1.1.1') {
        $details->model = 'FWS 624 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.1.1.2') {
        $details->model = 'FWS 624 BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.1.1.3') {
        $details->model = 'FWS 624 Edge Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.2') {
        $details->model = 'FWS 624G Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.2.1') {
        $details->model = 'FWS 624G';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.2.1.1') {
        $details->model = 'FWS 624G Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.2.1.2') {
        $details->model = 'FWS 624G BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.2.1.3') {
        $details->model = 'FWS 624G Edge Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.3') {
        $details->model = 'FWS 624POE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.3.1') {
        $details->model = 'FWS 624POE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.3.1.1') {
        $details->model = 'FWS 624POE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.3.1.2') {
        $details->model = 'FWS 624POE BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.3.1.3') {
        $details->model = 'FWS 624POE Edge Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.4') {
        $details->model = 'FWS 624GPOE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.4.1') {
        $details->model = 'FWS 624GPOE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.4.1.1') {
        $details->model = 'FWS 624GPOE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.4.1.2') {
        $details->model = 'FWS 624GPOE BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.1.4.1.3') {
        $details->model = 'FWS 624GPOE Edge Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2') {
        $details->model = 'FWS 648 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.1') {
        $details->model = 'FWS 648 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.1.1') {
        $details->model = 'FWS 648';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.1.1.1') {
        $details->model = 'FWS 648 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.1.1.2') {
        $details->model = 'FWS 648 BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.1.1.3') {
        $details->model = 'FWS 648 Edge Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.2') {
        $details->model = 'FWS 648G Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.2.1') {
        $details->model = 'FWS 648G';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.2.1.1') {
        $details->model = 'FWS 648G Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.2.1.2') {
        $details->model = 'FWS 648G BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.2.1.3') {
        $details->model = 'FWS 648G Edge Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.3') {
        $details->model = 'FWS 648POE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.3.1') {
        $details->model = 'FWS 648POE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.3.1.1') {
        $details->model = 'FWS 648POE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.3.1.2') {
        $details->model = 'FWS 648POE BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.3.1.3') {
        $details->model = 'FWS 648POE Edge Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.4') {
        $details->model = 'FWS 648GPOE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.4.1') {
        $details->model = 'FWS 648GPOE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.4.1.1') {
        $details->model = 'FWS 648GPOE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.4.1.2') {
        $details->model = 'FWS 648GPOE BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.52.2.4.1.3') {
        $details->model = 'FWS 648GPOE Edge Prem Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.53') {
        $details->model = 'TurboIron 2';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.53.1') {
        $details->model = 'TI2X24 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.53.1.1') {
        $details->model = 'TI2X24 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.53.1.2') {
        $details->model = 'TI2X24 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.53.2') {
        $details->model = 'TI2X48 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.53.2.1') {
        $details->model = 'TI2X48 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.53.2.2') {
        $details->model = 'TI2X48 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54') {
        $details->model = 'FCX Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1') {
        $details->model = 'FCX624 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.1') {
        $details->model = 'FCX624S Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.1.1') {
        $details->model = 'FCX624S';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.1.1.1') {
        $details->model = 'FCX624S Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.1.1.2') {
        $details->model = 'FCX624S BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.1.1.3') {
        $details->model = 'FCX624S Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.1.1.4') {
        $details->model = 'FCX624SAdv Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.2') {
        $details->model = 'FCX624SHPOE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.2.1') {
        $details->model = 'FCX624SHPOE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.2.1.1') {
        $details->model = 'FCX624SHPOE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.2.1.2') {
        $details->model = 'FCX624SHPOE BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.2.1.3') {
        $details->model = 'FCX624SHPOE Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.2.1.4') {
        $details->model = 'FCX624SHPOEAdv Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.3') {
        $details->model = 'FCX624SF Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.3.1') {
        $details->model = 'FCX624SF';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.3.1.1') {
        $details->model = 'FCX624SF Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.3.1.2') {
        $details->model = 'FCX624SF BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.3.1.3') {
        $details->model = 'FCX624SF Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.3.1.4') {
        $details->model = 'FCX624SFAdv Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.4') {
        $details->model = 'FCX624 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.4.1') {
        $details->model = 'FCX624';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.4.1.1') {
        $details->model = 'FCX624 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.4.1.2') {
        $details->model = 'FCX624 BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.4.1.3') {
        $details->model = 'FCX624 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.1.4.1.4') {
        $details->model = 'FCX624Adv Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2') {
        $details->model = 'FCX648 Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.1') {
        $details->model = 'FCX648S Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.1.1') {
        $details->model = 'FCX648S';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.1.1.1') {
        $details->model = 'FCX648S Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.1.1.2') {
        $details->model = 'FCX648S BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.1.1.3') {
        $details->model = 'FCX648S Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.1.1.4') {
        $details->model = 'FCX648SAdv Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.2') {
        $details->model = 'FCX648SHPOE Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.2.1') {
        $details->model = 'FCX648SHPOE';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.2.1.1') {
        $details->model = 'FCX648SHPOE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.2.1.2') {
        $details->model = 'FCX648SHPOE BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.2.1.3') {
        $details->model = 'FCX648SHPOE Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.2.1.4') {
        $details->model = 'FCX648SHPOEAdv Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.4') {
        $details->model = 'FCX648 Base Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.4.1') {
        $details->model = 'FCX648';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.4.1.1') {
        $details->model = 'FCX648 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.4.1.2') {
        $details->model = 'FCX648 BaseL3 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.4.1.3') {
        $details->model = 'FCX648 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.54.2.4.1.4') {
        $details->model = 'FCX648Adv Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.55') {
        $details->model = 'Brocade MLXe Family';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.55.1') {
        $details->model = 'Brocade MLXe16';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.55.1.2') {
        $details->model = 'Brocade MLXe16 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.55.2') {
        $details->model = 'Brocade MLXe8';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.55.2.2') {
        $details->model = 'Brocade MLXe8 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.55.3') {
        $details->model = 'Brocade MLXe4';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.55.3.2') {
        $details->model = 'Brocade MLXe4 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.55.4') {
        $details->model = 'Brocade MLXe32';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.55.4.2') {
        $details->model = 'Brocade MLXe32 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.58.2.1.1.4') {
        $details->model = 'Brocade ICX 6450-48 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.6') {
        $details->model = 'BigIron 4000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.6.1') {
        $details->model = 'BI4000 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.6.2') {
        $details->model = 'BI4000 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.6.3') {
        $details->model = 'BI4000SI';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.7') {
        $details->model = 'BigIron 8000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.7.1') {
        $details->model = 'BI8000 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.7.2') {
        $details->model = 'BI8000 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.7.3') {
        $details->model = 'BI8000SI';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.8') {
        $details->model = 'FastIron 2';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.8.1') {
        $details->model = 'FI2 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.8.2') {
        $details->model = 'FI2 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.9') {
        $details->model = 'FastIron 2 Plus ';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.9.1') {
        $details->model = 'FI2 Plus  Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.3.9.2') {
        $details->model = 'FI2 Plus  Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.4') {
        $details->model = ' Edge Iron';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.4.1') {
        $details->model = ' Edge Iron';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.5') {
        $details->model = ' Edge Iron Type2';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.5.1') {
        $details->model = ' Edge Iron Type 2Mib';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.6') {
        $details->model = 'Wireless AP';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.7') {
        $details->model = 'Wireless Probe';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.8') {
        $details->model = 'Access Iron';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.1.9') {
        $details->model = 'ServerIron SA';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.2.1.1') {
        $details->model = 'dcrs7504';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.2.1.1.1') {
        $details->model = 'dcrs7504 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.2.1.1.2') {
        $details->model = 'dcrs7504 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.2.1.2') {
        $details->model = 'dcrs7508';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.2.1.2.1') {
        $details->model = 'dcrs7508 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.2.1.2.2') {
        $details->model = 'dcrs7508 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.2.1.3') {
        $details->model = 'dcrs7515';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.2.1.3.1') {
        $details->model = 'dcrs7515 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.2.1.3.2') {
        $details->model = 'dcrs7515 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.3.1') {
        $details->model = 'pwe3';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.3.2') {
        $details->model = 'l3vpn';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.3.3') {
        $details->model = 'bfd';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.1991.3.4') {
        $details->model = 'vplsRoot';
        $details->type = 'unknown';
    }

    if ($details->snmp_version == '2') {
        # serial
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.1991.1.1.1.1.2.0"));
    }
};
