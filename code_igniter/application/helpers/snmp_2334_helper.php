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

# Vendor Packeteer

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1') {
        $details->model = 'PacketShaper';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.1') {
        $details->model = 'PacketShaper - 2000';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.10') {
        $details->model = 'PacketShaper - asm90';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.11') {
        $details->model = 'PacketShaper - 6500';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.12') {
        $details->model = 'PacketShaper - 8500';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.13') {
        $details->model = 'PacketShaper - asm110';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.14') {
        $details->model = 'PacketShaper 1550';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.15') {
        $details->model = 'PacketShaper - 9500';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.16') {
        $details->model = 'PacketShaper - 2550';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.17') {
        $details->model = 'PacketShaper - 10000';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.18') {
        $details->model = 'PacketShaper 1200';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.19') {
        $details->model = 'PacketShaper 3500';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.2') {
        $details->model = 'PacketShaper - 4000';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.20') {
        $details->model = 'PacketShaper 7500';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.21') {
        $details->model = 'PacketShaper 1700';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.22') {
        $details->model = 'PacketShaper 1400';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.3') {
        $details->model = 'PacketShaper - 1000';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.4') {
        $details->model = 'PacketShaper - 2500';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.5') {
        $details->model = 'PacketShaper - 4500';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.6') {
        $details->model = 'PacketShaper - 1500';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.7') {
        $details->model = 'PacketShaper - asm50';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.8') {
        $details->model = 'PacketShaper - asm70';
        $details->type = 'wan accelerator';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2334.1.1.9') {
        $details->model = 'PacketShaper - asm30';
        $details->type = 'wan accelerator';
    }

    if ($details->snmp_version == '2') {
        #$details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.25461.2.1.2.1.3.0" ));
    }
};
