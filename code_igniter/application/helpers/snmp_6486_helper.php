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

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1') {
        $details->model = 'OmniSwitch 7000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1.1') {
        $details->model = 'OmniSwitch 7000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1.1.1') {
        $details->model = 'OmniSwitch 7700';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1.1.2') {
        $details->model = 'OmniSwitch 7800';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1.4.1.1') {
        $details->model = 'OmniSwitch 7700 CMM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1.4.1.1.1') {
        $details->model = 'OmniSwitch 7700PROC CMM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1.4.1.1.2') {
        $details->model = 'OmniSwitch 7700BBUS CMM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1.4.1.2') {
        $details->model = 'OmniSwitch 7800 CMM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1.4.1.2.1') {
        $details->model = 'OmniSwitch 7800PROC CMM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1.4.1.2.2') {
        $details->model = 'OmniSwitch 7800BBUS CMM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1.4.2.1.1') {
        $details->model = 'OmniSwitch 7000C24 ENI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1.4.2.1.2') {
        $details->model = 'OmniSwitch 7000FM12 ENI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.1.4.2.1.3') {
        $details->model = 'OmniSwitch 7000PDPS24 ENI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.10.1.5') {
        $details->model = 'OmniSwitch 6400-48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.2') {
        $details->model = 'OmniSwitch 8000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.2.1') {
        $details->model = 'OmniSwitch 8000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.2.1.1') {
        $details->model = 'OmniSwitch 8800';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.2.4.1.1') {
        $details->model = 'OmniSwitch 8800 CMM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.2.4.1.1.1') {
        $details->model = 'OmniSwitch 8800PROC CMM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.2.4.1.1.2') {
        $details->model = 'OmniSwitch 8800BBUS CMM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.2.4.2.1.1') {
        $details->model = 'OmniSwitch 8000C24 ENI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.3') {
        $details->model = 'OmniSwitch 6600';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.3.1') {
        $details->model = 'OmniSwitch 6600';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.3.1.1') {
        $details->model = 'OmniSwitch 6600-24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.3.1.2') {
        $details->model = 'OmniSwitch 6600-48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.3.1.3') {
        $details->model = 'OmniSwitch 6600-U24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.3.1.4') {
        $details->model = 'OmniSwitch 6602-24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.3.1.5') {
        $details->model = 'OmniSwitch 6602-48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.3.1.6') {
        $details->model = 'OmniSwitch 6600-P24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.3.1.7') {
        $details->model = 'Alcatel OMNI 6848POE Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.3.4.1') {
        $details->model = 'OmniSwitch 6600 EXP';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.5.1.1') {
        $details->model = 'OmniSwitch 6300';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.6.1.1') {
        $details->model = 'OmniSwitch 6800-24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.6.1.2') {
        $details->model = 'OmniSwitch 6800-48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.6.1.3') {
        $details->model = 'OmniSwitch 6800-U24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.6.1.6') {
        $details->model = 'OmniSwitch 6800-24L';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.6.1.7') {
        $details->model = 'OmniSwitch 6800-L48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.7.1.1') {
        $details->model = 'OmniSwitch 6850-24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.7.1.10') {
        $details->model = 'OS6850-U24X';
        $details->type = '';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.7.1.2') {
        $details->model = 'OmniSwitch 6850-48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.7.1.3') {
        $details->model = 'OmniSwitch 6850-24X';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.7.1.4') {
        $details->model = 'OmniSwitch 6850-48X';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.7.1.45') {
        $details->model = 'OmniSwitch 6850E-48X';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.7.1.48') {
        $details->model = 'OmniSwitch 6850E-U24X';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.7.1.5') {
        $details->model = 'OmniSwitch 6850-P24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.7.1.6') {
        $details->model = 'OmniSwitch 6850-P48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.7.1.8') {
        $details->model = 'OmniSwitch 6850-P48X';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.7.1.9') {
        $details->model = 'OmniSwitch 6850-U24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.8.1.1') {
        $details->model = 'OmniSwitch 9700';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.1.8.1.2') {
        $details->model = 'OmniSwitch 9800';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.1.1.1') {
        $details->model = 'OmniAccess 4012 12-Slot Chassis';
        $details->type = 'chassis';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.1.1.2') {
        $details->model = 'OmniAccess 4024 24-Slot Chassis';
        $details->type = 'chassis';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.1.1.3') {
        $details->model = 'OmniAccess 41024 2-Slot Chassis';
        $details->type = 'chassis';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.1') {
        $details->model = 'OmniAccess 5000 Chassis';
        $details->type = 'chassis';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.10') {
        $details->model = '4306 Wireless LAN switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.11') {
        $details->model = '4306G Wireless LAN switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.12') {
        $details->model = '4306GW Wireless LAN switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.2') {
        $details->model = 'OmniAccess 4024 24-Slot Chassis';
        $details->type = 'chassis';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.3') {
        $details->model = 'OmniAccess 4308 8-Slot Chassis';
        $details->type = 'chassis';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.4') {
        $details->model = 'OmniAccessChassis';
        $details->type = 'chassis';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.4.1.1') {
        $details->model = '6000-PS2 4-Slot 19-in Chassis';
        $details->type = 'chassis';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.4.4.1') {
        $details->model = 'SC-1-48';
        $details->type = 'access point';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.4.4.3') {
        $details->model = 'SC-2-256';
        $details->type = 'access point';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.4.4.4') {
        $details->model = 'LC-2G';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.4.4.5') {
        $details->model = 'LC-2G24F';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.4.4.6') {
        $details->model = 'LC-2G24FP';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.4.4.7') {
        $details->model = 'S3-C-2X10G';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.5') {
        $details->model = '4302 Branch Wireless Controller';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.6') {
        $details->model = '4504 Branch Wireless Controller';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.7') {
        $details->model = '4604 Branch Wireless Controller';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.8') {
        $details->model = '4704 Branch Wireless Controller';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.1.9') {
        $details->model = '4304 Branch Wireless Controller';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.1') {
        $details->model = 'AP60 Access point Chassis';
        $details->type = 'access point';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.10') {
        $details->model = 'AP120';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.11') {
        $details->model = 'AP121';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.12') {
        $details->model = 'AP124';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.13') {
        $details->model = 'AP125';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.14') {
        $details->model = 'AP120ABG';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.15') {
        $details->model = 'AP121ABG';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.16') {
        $details->model = 'AP124ABG';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.17') {
        $details->model = 'AP125ABG';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.2') {
        $details->model = 'AP61 Access point Chassis';
        $details->type = 'access point';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.3') {
        $details->model = 'AP70 Access point Chassis';
        $details->type = 'access point';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.4') {
        $details->model = 'AP80S Outdoor Dual Radio Access Point';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.5') {
        $details->model = 'AP80M Outdoor Dual Radio Access Point';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.6') {
        $details->model = 'AP65 Dual Radio Access Point';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.7') {
        $details->model = 'AP40 Single Radio Access Point';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.8') {
        $details->model = 'AP85';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.2.1.2.9') {
        $details->model = 'AP41';
        $details->type = 'wap';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.3.1.20') {
        $details->model = '604-T1';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.3.1.21') {
        $details->model = '604-E1';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.3.1.22') {
        $details->model = '602-T1';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.3.1.23') {
        $details->model = '602-E1';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.3.1.30') {
        $details->model = '601';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.3.1.31') {
        $details->model = '601S-BU';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.3.1.32') {
        $details->model = '625';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.3.1.33') {
        $details->model = '601S-BST';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.3.1.34') {
        $details->model = '601-BU';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.3.1.35') {
        $details->model = '601-BST';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.4.1.1') {
        $details->model = 'OmniStack LS 6224';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.4.1.2') {
        $details->model = 'OmniStack LS 6224P';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.4.1.3') {
        $details->model = 'OmniStack LS 6248';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.4.1.4') {
        $details->model = 'OmniStack LS 6248P';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.4.1.5') {
        $details->model = 'OmniStack LS 6224U';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.4.1.6') {
        $details->model = 'OmniStack LS 6212';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.4.1.7') {
        $details->model = 'OmniStack LS 6212P';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.5.1.1') {
        $details->model = 'OAG-1000';
        $details->type = 'chassis';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.5.1.2') {
        $details->model = 'OAG-2400';
        $details->type = 'chassis';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.6.1.1') {
        $details->model = 'OA-740';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.800.1.1.2.2.6.1.2') {
        $details->model = 'OA-780';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.6486.801.1.1.2.1.10.1.2') {
        $details->model = 'OS6900-X40';
        $details->type = '';
    }

};
