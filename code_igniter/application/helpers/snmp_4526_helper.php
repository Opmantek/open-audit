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

# Vendor Netgear

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.1.1') {
        $details->model = 'FSM726S Managed Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.1.1.1.1.0.1.3.9.12') {
        $details->model = 'CG814CCR Cable Modem';
        $details->type = 'cable modem';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.1.1.1.1.0.1.3.9.26') {
        $details->model = 'CG814WG Cable Modem';
        $details->type = 'cable modem';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.1.2') {
        $details->model = 'FSM750S Managed Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.1.3') {
        $details->model = 'GSM712 Managed Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.1.4') {
        $details->model = 'FSM726 Managed Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.1.5') {
        $details->model = 'GSM712F Managed Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.1.6') {
        $details->model = 'GSM7312 Managed Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.1.7') {
        $details->model = 'GSM7324 Managed Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.1.8') {
        $details->model = 'GSM7224 Managed Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.1.9') {
        $details->model = 'FSM7326P Managed Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.1.10') {
        $details->model = 'FSM726v2 Managed Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.2.1') {
        $details->model = 'FVX538 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.2.1.6') {
        $details->model = 'CGD24G Cable Modem';
        $details->type = 'cable modem';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.2.2') {
        $details->model = 'FVS338 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.2.3') {
        $details->model = 'FVG318 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.3.1') {
        $details->model = 'CGD24N Cable Modem';
        $details->type = 'cable modem';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.4.1') {
        $details->model = 'ME103 wap';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.4.2') {
        $details->model = 'WG302 wap';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.4.3') {
        $details->model = 'WG102 wap';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.4.4') {
        $details->model = 'WAG302 wap';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.4.5') {
        $details->model = 'WAG102 wap';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.4.6') {
        $details->model = 'WG302v2 wap';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.4.7') {
        $details->model = 'WAG302v2 wap';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.6.1') {
        $details->model = 'WLS538 WLAN Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.1') {
        $details->model = 'FSM7328S Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.2') {
        $details->model = 'FSM7352S Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.3') {
        $details->model = 'GSM7328S Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.4') {
        $details->model = 'GSM7352S Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.5') {
        $details->model = 'FSM7352PS Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.6') {
        $details->model = 'FSM7328PS Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.7') {
        $details->model = 'GSM7328FS Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.9') {
        $details->model = 'GSM7228PS Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.10') {
        $details->model = 'GSM7252PS Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.11') {
        $details->model = 'FSM7226RS Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.12') {
        $details->model = 'FSM7250RS Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.13') {
        $details->model = 'GSM7328SE Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.14') {
        $details->model = 'GSM7352SE Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.1.15') {
        $details->model = 'XSM7224S Stack Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.2.1') {
        $details->model = 'GSM7248 L2 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.2.2') {
        $details->model = 'GSM7212-7224 L2 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.2.3') {
        $details->model = 'GSM7224i L2 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.2.4') {
        $details->model = 'FSM7226 L2 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.3.1') {
        $details->model = 'GSM7312v2 L3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.3.2') {
        $details->model = 'GSM7324v2 L3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.3.3') {
        $details->model = 'XSM7312 L3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.3.4') {
        $details->model = 'GSM7324P L3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.3.5') {
        $details->model = 'GSM7312i L3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.3.6') {
        $details->model = 'GSM7324i L3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.3.7') {
        $details->model = 'FSM7326Pi L3 Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.1') {
        $details->model = 'GS748T Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.2') {
        $details->model = 'FS726T Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.3') {
        $details->model = 'GS716T Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.4') {
        $details->model = 'FS750T Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.5') {
        $details->model = 'GS724T Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.6') {
        $details->model = 'FS726TP Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.7') {
        $details->model = 'FS728TP Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.8') {
        $details->model = 'GS108T Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.9') {
        $details->model = 'GS108TP Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.10') {
        $details->model = 'GS724TP Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.11') {
        $details->model = 'GS748TP Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.12') {
        $details->model = 'GS724TR Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.13') {
        $details->model = 'GS748TR Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.16') {
        $details->model = 'GS716Tv2 Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.17') {
        $details->model = 'GS724Tv3 Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.18') {
        $details->model = 'GS108Tv2 Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.19') {
        $details->model = 'GS110TP Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.20') {
        $details->model = 'FS728TPv2 Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.4.32') {
        $details->model = 'GS724T Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.5.1') {
        $details->model = 'FVX538 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.5.2') {
        $details->model = 'FVS338 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.5.3') {
        $details->model = 'FVG318 Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.5.4') {
        $details->model = 'FVS336G Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.6.3') {
        $details->model = 'FWAG114 Firewall';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.6.4') {
        $details->model = 'FVS124G Firewall';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.6.5') {
        $details->model = 'FVS318v3 Firewall';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.6.6') {
        $details->model = 'DGFV338 Firewall';
        $details->type = 'firewall';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.7.1') {
        $details->model = 'WPN802 Access Point';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.7.2') {
        $details->model = 'WG312 Access Point';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.7.3') {
        $details->model = 'WAG312 Access Point';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.9.1') {
        $details->model = 'GCM9000 Chassis Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.10.1') {
        $details->model = 'FS728TS Stack Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.10.2') {
        $details->model = 'FS752TS Stack Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.10.3') {
        $details->model = 'FS752TPS Stack Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.10.4') {
        $details->model = 'GS724TS Stack Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.10.5') {
        $details->model = 'GS748TS Stack Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.10.6') {
        $details->model = 'GS752TS Stack Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.10.7') {
        $details->model = 'GS728TS Stack Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.10.8') {
        $details->model = 'GS752TSTPS Stack Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.10.9') {
        $details->model = 'GS728TPS Stack Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.10.10') {
        $details->model = 'GS752TPS Stack Smart Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.11.1') {
        $details->model = 'GSM7224R L2R Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.11.2') {
        $details->model = 'GSM7248R L2R Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.11.3') {
        $details->model = 'GSM7224RP L2R Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.11.4') {
        $details->model = 'GSM7248RP L2R Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.11.5') {
        $details->model = 'GSM7224v2 L2R Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.11.6') {
        $details->model = 'GSM7248v2 L2R Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.11.7') {
        $details->model = 'GSM7212F L2R Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.11.8') {
        $details->model = 'GSM5212P L2R Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.11.9') {
        $details->model = 'GSM7212P L2R Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.4526.100.11.10') {
        $details->model = 'GSM7224P L2R Switch';
        $details->type = 'switch';
    }

    if ($details->snmp_version == '2') {
        # serial
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.4526.10.1.1.1.4.0"));
        if ($details->serial == '') {
            # special case for Netgear cable modems
            $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.4491.2.4.1.1.1.3.0"));
        }
    }
};
