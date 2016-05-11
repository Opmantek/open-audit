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

# Vendor Zyxel

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10') {
        $details->model = 'p2X00Series';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.1') {
        $details->model = 'p2602hw-61';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.10') {
        $details->model = 'p2302r-obm';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.11') {
        $details->model = 'p2602r-61';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.12') {
        $details->model = 'p2302rl-obm';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.13') {
        $details->model = 'p2602r-63';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.14') {
        $details->model = 'p2602hwl-61c';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.15') {
        $details->model = 'p2602hwl-63c';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.16') {
        $details->model = 'p2602hwl-67c';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.17') {
        $details->model = 'p2602wi-67v';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.2') {
        $details->model = 'p2602hw-63';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.3') {
        $details->model = 'p2602hw-67';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.4') {
        $details->model = 'p2602hwl-61';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.5') {
        $details->model = 'p2602hwl-63';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.6') {
        $details->model = 'p2602hwl-67';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.7') {
        $details->model = 'p2002-obm';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.8') {
        $details->model = 'p2002l-obm';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.10.9') {
        $details->model = 'p2002l-aol';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.2') {
        $details->model = 'p200Series';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.2.1') {
        $details->model = 'p202h';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.2.2') {
        $details->model = 'p202hPlus';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.3') {
        $details->model = 'p300Series';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.3.1') {
        $details->model = 'p304';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.3.2') {
        $details->model = 'p310';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.3.3') {
        $details->model = 'p314';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.3.4') {
        $details->model = 'p314Plus';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.3.5') {
        $details->model = 'p324';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.4') {
        $details->model = 'p400Series';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.5') {
        $details->model = 'p500Series';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6') {
        $details->model = 'p600Series';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.1') {
        $details->model = 'p641';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.10') {
        $details->model = 'p650me11';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.11') {
        $details->model = 'p650me13';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.12') {
        $details->model = 'p652r11';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.13') {
        $details->model = 'p652r13';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.14') {
        $details->model = 'p650r33';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.15') {
        $details->model = 'p650hw31';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.16') {
        $details->model = 'p650hw33';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.17') {
        $details->model = 'p623ra1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.18') {
        $details->model = 'p650h37';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.19') {
        $details->model = 'p652hw31';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.2') {
        $details->model = 'p642';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.20') {
        $details->model = 'p652hw33';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.21') {
        $details->model = 'p654ra-a1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.22') {
        $details->model = 'p650r-e1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.23') {
        $details->model = 'p650r-e3';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.24') {
        $details->model = 'p650r-e7';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.25') {
        $details->model = 'p650h-e7';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.26') {
        $details->model = 'p652hw37';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.27') {
        $details->model = 'p650h-e1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.28') {
        $details->model = 'p623r-t1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.29') {
        $details->model = 'p623r-t3';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.3') {
        $details->model = 'p643';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.30') {
        $details->model = 'p623r-t7';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.31') {
        $details->model = 'p653hwi-11';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.32') {
        $details->model = 'p653hwi-13';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.33') {
        $details->model = 'p653hwi-17';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.34') {
        $details->model = 'p660hw-61';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.35') {
        $details->model = 'p650r-t3';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.36') {
        $details->model = 'p660hw-63';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.37') {
        $details->model = 'p660hw-67';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.38') {
        $details->model = 'p660w-61';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.39') {
        $details->model = 'p660w-63';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.4') {
        $details->model = 'p645ra1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.40') {
        $details->model = 'p660w-67';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.41') {
        $details->model = 'p660r-61';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.42') {
        $details->model = 'p660r-63';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.43') {
        $details->model = 'p660r-67';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.44') {
        $details->model = 'p650r-t1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.45') {
        $details->model = 'p662w-61';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.46') {
        $details->model = 'p662w-63';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.47') {
        $details->model = 'p662w-67';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.48') {
        $details->model = 'p660h-61';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.49') {
        $details->model = 'p660h-63';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.5') {
        $details->model = 'p650r31';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.50') {
        $details->model = 'p660h-67';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.51') {
        $details->model = 'p660r-67C';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.52') {
        $details->model = 'p660r-61C';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.53') {
        $details->model = 'p660hw-13';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.54') {
        $details->model = 'p660ru-t1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.55') {
        $details->model = 'p660ru-t3';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.56') {
        $details->model = 'p660hw-t3';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.57') {
        $details->model = 'p660r-t3';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.58') {
        $details->model = 'p660hw-t1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.59') {
        $details->model = 'p660h-t3';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.6') {
        $details->model = 'p650r11';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.60') {
        $details->model = 'p660r-d1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.7') {
        $details->model = 'p650h11';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.8') {
        $details->model = 'p650hw11';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.6.9') {
        $details->model = 'p650r13';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.7') {
        $details->model = 'p700Series';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.7.1') {
        $details->model = 'p794ra';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.7.2') {
        $details->model = 'p794rb';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.7.3') {
        $details->model = 'p742';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.7.4') {
        $details->model = 'p791r';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.7.5') {
        $details->model = 'p792r';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.8') {
        $details->model = 'p800Series';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.8.1') {
        $details->model = 'p861h';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.8.2') {
        $details->model = 'p861hw';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.2.9') {
        $details->model = 'p900Series';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.3') {
        $details->model = 'rack';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.4') {
        $details->model = 'dslam';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.4.1') {
        $details->model = 'dslamCommon';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5') {
        $details->model = 'accessSwitch';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.1') {
        $details->model = 'accessSwitchCommon';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.10') {
        $details->model = 'pes1014';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.11') {
        $details->model = 'aesSeries';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.11.1') {
        $details->model = 'aesSeriesCommon';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.11.10') {
        $details->model = 'ies1248-73';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.11.11') {
        $details->model = 'aam1212-51';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.11.12') {
        $details->model = 'aam1212-53';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.11.2') {
        $details->model = 'aes1024';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.11.3') {
        $details->model = 'alc1024-61';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.11.4') {
        $details->model = 'aam1008-63';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.11.5') {
        $details->model = 'alc1024-63';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.11.6') {
        $details->model = 'aam1008-61';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.11.7') {
        $details->model = 'alc1224-71';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.11.9') {
        $details->model = 'ies1248-71';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.12') {
        $details->model = 'vesSeries';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.12.1') {
        $details->model = 'vesSeriesCommon';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.12.2') {
        $details->model = 'ves1008';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.12.3') {
        $details->model = 'vmb2024';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.12.4') {
        $details->model = 'ves1024';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.12.5') {
        $details->model = 'vlc1012';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.12.6') {
        $details->model = 'ves1316';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.12.7') {
        $details->model = 'ves1416';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.12.8') {
        $details->model = 'vlc1124';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.12.9') {
        $details->model = 'ves1124';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.13') {
        $details->model = 'iesSeries';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.13.1') {
        $details->model = 'iesSeriesCommon';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.13.2') {
        $details->model = 'ies2000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.13.3') {
        $details->model = 'ies3000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.14') {
        $details->model = 'accessSwitchCommonATM';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.2') {
        $details->model = 'aes100';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.3') {
        $details->model = 'pes100';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.4') {
        $details->model = 'ves1012';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.5') {
        $details->model = 'sesSeries';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.5.1') {
        $details->model = 'sesSeriesCommon';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.5.2') {
        $details->model = 'sam1008';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.5.3') {
        $details->model = 'ses1024';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.5.4') {
        $details->model = 'slc1024';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.5.5') {
        $details->model = 'slc1224-22';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.6') {
        $details->model = 'p1600';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.7') {
        $details->model = 'p1400';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8') {
        $details->model = 'esSeries';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.1') {
        $details->model = 'esSeriesCommon';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.10') {
        $details->model = 'gs3012';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.11') {
        $details->model = 'gs3012f';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.12') {
        $details->model = 'es3124';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.13') {
        $details->model = 'gs4024';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.14') {
        $details->model = 'es3124pwr';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.15') {
        $details->model = 'gs2024';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.16') {
        $details->model = 'es2024a';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.2') {
        $details->model = 'ees1024af';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.3') {
        $details->model = 'es2008';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.4') {
        $details->model = 'es2008-gtp';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.5') {
        $details->model = 'es2008-sc';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.6') {
        $details->model = 'es2008-sc30';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.7') {
        $details->model = 'es3024';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.8') {
        $details->model = 'es4024';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.8.9') {
        $details->model = 'es2024';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.5.9') {
        $details->model = 'aes100-1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6') {
        $details->model = 'zywall';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.1') {
        $details->model = 'zywallCommon';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.10') {
        $details->model = 'zywall200';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.11') {
        $details->model = 'zywallidp10';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.12') {
        $details->model = 'zywall5';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.13') {
        $details->model = 'zywall30w';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.14') {
        $details->model = 'zywall35';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.15') {
        $details->model = 'zywall70';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.16') {
        $details->model = 'zywall1000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.17') {
        $details->model = 'zywallCHT1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.18') {
        $details->model = 'zywallM70';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.19') {
        $details->model = 'zywallP1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.2') {
        $details->model = 'zywall1';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.20') {
        $details->model = 'zywallP2';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.3') {
        $details->model = 'zywall2';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.4') {
        $details->model = 'zywall2w';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.5') {
        $details->model = 'zywall10';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.6') {
        $details->model = 'zywall10ii';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.7') {
        $details->model = 'zywall10w';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.8') {
        $details->model = 'zywall50';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.6.9') {
        $details->model = 'zywall100';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.7') {
        $details->model = 'atmEncryptor';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.8') {
        $details->model = 'serviceGateway';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.8.1') {
        $details->model = 'serviceGWCommon';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.8.2') {
        $details->model = 'vsg1000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.890.1.8.3') {
        $details->model = 'vsg1200';
        $details->type = 'unknown';
    }

    if ($details->snmp_version == '2') {
        if ($details->type = '' or $details->type == 'unknown') {
            $details->type == 'unknown';
            $details->type = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.890.1.2.11.1.1.1.0"));
        }
    }
};
