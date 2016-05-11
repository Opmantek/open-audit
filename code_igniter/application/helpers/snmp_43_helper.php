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

# Vendor 3com

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.1.1.1.1') {
        $details->model = 'Corebuilder 3500';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.2.2.1') {
        $details->model = 'Superstack 3900';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.2.2.1.1') {
        $details->model = 'SuperStack II Switch 3900-24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.2.2.1.2') {
        $details->model = 'SuperStack II Switch 3900-36';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.2.2.2') {
        $details->model = 'Superstack 9300';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.2.2.2.1') {
        $details->model = 'SuperStack 9300';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.1') {
        $details->model = '3Com Router 5009';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.10') {
        $details->model = '3Com Router 3018';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.11') {
        $details->model = '3Com Router 6040';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.12') {
        $details->model = '3Com Router 6080';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.13') {
        $details->model = '3Com Router 3030';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.14') {
        $details->model = '3Com Router 3031';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.15') {
        $details->model = '3Com Router 3032';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.16') {
        $details->model = '3Com Router 3033';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.17') {
        $details->model = '3Com Router 3034';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.18') {
        $details->model = '3Com Router 3035';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.2') {
        $details->model = '3Com Router 5231';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.21') {
        $details->model = '3Com Router 5012';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.22') {
        $details->model = '3Com Router 5232';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.23') {
        $details->model = '3Com Router 5642';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.24') {
        $details->model = '3Com Router 5682';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.25') {
        $details->model = '3Com Router 6040 RPU2';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.26') {
        $details->model = '3Com Router 6080 RPU2';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.27') {
        $details->model = '3Com Router 3040';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.28') {
        $details->model = '3Com Router 3041';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.29') {
        $details->model = '3Com Router 3042';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.3') {
        $details->model = '3Com Router 5640';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.30') {
        $details->model = '3Com Router 3043';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.31') {
        $details->model = '3Com Router 3040e';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.32') {
        $details->model = '3Com Router 3041e';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.33') {
        $details->model = '3Com Router 3036';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.34') {
        $details->model = '3Com Router 3720';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.35') {
        $details->model = '3Com Router 3740';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.36') {
        $details->model = '3Com Router 5701';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.37') {
        $details->model = '3Com Router 5720';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.38') {
        $details->model = '3Com Router 5740';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.39') {
        $details->model = '3Com Router 5760';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.4') {
        $details->model = '3Com Router 5680';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.40') {
        $details->model = '3Com Router 6740';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.41') {
        $details->model = '3Com Router 6760';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.42') {
        $details->model = '3Com Router 5720 PWR';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.43') {
        $details->model = '3Com Router 5740 PWR';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.44') {
        $details->model = '3Com Router 5760 PWR';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.5') {
        $details->model = '3Com Router 3012';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.6') {
        $details->model = '3Com Router 3013';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.7') {
        $details->model = '3Com Router 3014';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.8') {
        $details->model = '3Com Router 3015';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.2.9') {
        $details->model = '3Com Router 3016';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.11') {
        $details->model = '3Com Switch 5500-SI 28-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.12') {
        $details->model = '3Com Switch 5500-52-SI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.13') {
        $details->model = '3Com Switch 5500-28-EI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.14') {
        $details->model = '3Com Switch 5500-EI 52-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.15') {
        $details->model = '3Com Switch 5500-EI PWR 28-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.16') {
        $details->model = '3Com Switch 5500-52-PWR-EI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.17') {
        $details->model = '3Com Switch 5500-EI 28-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.18') {
        $details->model = '3Com Switch 5500G-EI 24-Port-SFP';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.19') {
        $details->model = '3Com Switch 7754';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.20') {
        $details->model = '3Com Switch 7757';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.21') {
        $details->model = '3Com Switch 4500 26-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.22') {
        $details->model = '3Com Switch 4500 50-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.23') {
        $details->model = '3Com Switch 4500-26-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.24') {
        $details->model = '3Com Switch 4500-50-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.25') {
        $details->model = '3Com Switch witch 7758';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.27') {
        $details->model = '3Com Switch 4200G 12-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.28') {
        $details->model = '3Com Switch 4200G 24-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.29') {
        $details->model = '3Com Switch 4200G-48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.30') {
        $details->model = '3Com Switch 4500G 24-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.31') {
        $details->model = '3Com Switch 4500G-48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.32') {
        $details->model = '3Com Switch 4500G-24-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.33') {
        $details->model = '3Com Switch 4500G-48-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.34') {
        $details->model = '3Com Switch 4800G 24-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.35') {
        $details->model = '3Com Switch 4800G 48-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.36') {
        $details->model = '3Com Switch 4800G PWR 24-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.37') {
        $details->model = '3Com Switch 4800G PWR 48-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.38') {
        $details->model = '3Com Switch 4800G 24-Port-SFP';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.39') {
        $details->model = '3Com Switch 8807-V5';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.4') {
        $details->model = '3Com Switch 8807';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.40') {
        $details->model = '3Com Switch 8810-V5';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.41') {
        $details->model = '3Com Switch 8814-V5';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.42') {
        $details->model = '3Com Switch 4210 9-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.43') {
        $details->model = '3Com Switch 4210 18-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.44') {
        $details->model = '3Com Switch 4210 26-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.45') {
        $details->model = '3Com Switch 4210 52-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.46') {
        $details->model = '3Com Switch 4210 9-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.47') {
        $details->model = '3Com Switch 4210 18-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.48') {
        $details->model = '3Com Switch 4210 26-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.49') {
        $details->model = '3Com Switch 4200G-24-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.5') {
        $details->model = '3Com Switch 8810';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.50') {
        $details->model = '3Com Switch 7902E';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.51') {
        $details->model = '3Com Switch 7903E';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.52') {
        $details->model = '3Com Switch 7906E';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.53') {
        $details->model = '3Com Switch 7906EV';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.54') {
        $details->model = '3Com Switch 7910E';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.55') {
        $details->model = '3Com Switch 5800GT 48-Port Flex';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.6') {
        $details->model = '3Com Switch 8814';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.60') {
        $details->model = '3Com Baseline Plus Switch 2226';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.61') {
        $details->model = '3Com Baseline Plus Switch 2426-PWR';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.62') {
        $details->model = '3Com Baseline Switch 2250 Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.7') {
        $details->model = '3Com Switch 5500G-EI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.70') {
        $details->model = '3Com Switch 5800GT 48-Port Flex';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.74') {
        $details->model = '3Com Switch 7903E-S';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.77') {
        $details->model = '3Com Switch 4210 26-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.8') {
        $details->model = '3Com Switch 5500G 48-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.80') {
        $details->model = '3Com Switch 4210 PWR 26-Port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.83') {
        $details->model = '3Com Switch 4510G-24';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.16.4.3.84') {
        $details->model = '3Com Switch 4510G-48';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.13') {
        $details->model = 'LinkSwitch 1000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.14') {
        $details->model = 'LinkSwitch 500';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.15') {
        $details->model = 'LinkSwitch 2700AU';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.16') {
        $details->model = 'LinkSwitch 2700';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.18') {
        $details->model = 'LinkSwitch 2700TLiAU';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.19') {
        $details->model = 'LinkSwitch 2700TLi';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.20') {
        $details->model = '3ComLinkBuilderFMS100';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.22') {
        $details->model = 'LinkSwitch 3000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.32') {
        $details->model = 'Superstack 9000 SX';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.38') {
        $details->model = 'SuperStack3 4300';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.39') {
        $details->model = '3Com SuperStack 3 Switch 3824';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.40') {
        $details->model = '3Com SuperStack 3 Switch 3812';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.41') {
        $details->model = '3Com SuperStack 3 Switch 3226';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.42') {
        $details->model = '3Com SuperStack 3 Switch 3250';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.43') {
        $details->model = '3Com SuperStack 3 Switch 3870 24 port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.44') {
        $details->model = '3Com SuperStack 3 Switch 3870 48 port';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.45') {
        $details->model = '3Com SuperStack 3 Switch 3848';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.51') {
        $details->model = '3Com SuperStack 3 Switch 3870x';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.52') {
        $details->model = '3Com SuperStack 3 Switch 9';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.53') {
        $details->model = '3Com SuperStack 3 Switch 9 FX';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.57') {
        $details->model = 'Baseline S2226 Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.58') {
        $details->model = 'Baseline S2250 Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.59') {
        $details->model = 'Baseline 2426 PWR Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.60') {
        $details->model = 'Baseline S2916-SFP Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.61') {
        $details->model = 'Baseline S2924-SFP Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.62') {
        $details->model = 'Baseline S2948-SFP Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.63') {
        $details->model = 'Baseline S2924-PWR Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.71') {
        $details->model = 'Baseline 2920-SFP Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.72') {
        $details->model = 'Baseline 2928-SFP Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.73') {
        $details->model = 'Baseline 2952-SFP Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.74') {
        $details->model = 'Baseline 2928-PWR Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.75') {
        $details->model = 'Baseline 2928-HPWR Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.76') {
        $details->model = 'Baseline S2226';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.77') {
        $details->model = 'Baseline 2250-SFP Plus';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.8.78') {
        $details->model = 'Baseline S2426';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.9.13.1.2.1') {
        $details->model = 'Corebuilder 9000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.1.9.13.3.1') {
        $details->model = 'Corebuilder 9000';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.10.27.4.1.2.1') {
        $details->model = '3Com SuperStack 1100';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.10.27.4.1.2.10') {
        $details->model = '3Com 4000 Series';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.10.27.4.1.2.11') {
        $details->model = '3Com SuperStack 4200';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.10.27.4.1.2.2') {
        $details->model = '3Com SuperStack 3300';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.10.27.4.1.2.4') {
        $details->model = '3Com SuperStack 4400';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.43.10.27.4.1.2.5') {
        $details->model = '3Com SuperStack 4900';
        $details->type = 'switch';
    }

    if ($details->snmp_version == '2') {
        # serial
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.43.47.1.1.3.1.10.1"));

        if ($details->serial == '') {
            $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.43.10.27.1.1.1.13.1"));
        }
    }

    if ($details->snmp_version == '1') {
        # serial
        $details->serial = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.43.47.1.1.3.1.10.1"));

        if ($details->serial == '') {
            $details->serial = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.43.10.27.1.1.1.13.1"));
        }
    }
};
