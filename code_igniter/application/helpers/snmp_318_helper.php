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
 * 
 * @version 1.12.8
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# Vendor APC

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    if ($oid == '1.3.6.1.4.1.318.1.3.1') { $details->model = 'backUPS'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.10') { $details->model = 'dcPower'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.10.1') { $details->model = 'dm3'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.10.2') { $details->model = 'dcmim2'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.11') { $details->model = 'automaticXferSwitch'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.12') { $details->model = 'netLock'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.13') { $details->model = 'Symmetra UPS 3 Phase'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.13.1') { $details->model = 'Symmetra UPS 3 Phase 40kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.13.2') { $details->model = 'Symmetra UPS 3 Phase 60kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.13.3') { $details->model = 'Symmetra UPS 3 Phase 80kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.13.4') { $details->model = 'Symmetra UPS 3 Phase 20kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.14') { $details->model = 'NetworkAIR'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.14.1') { $details->model = 'NetworkAIR FM Series'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.14.2') { $details->model = 'NetworkAIR Removal Unit'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.14.3') { $details->model = 'NetworkAIR PASeries'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.14.4') { $details->model = 'NetworkAIR IRSC100 Series'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.14.5') { $details->model = 'NetworkAIR IRRC100 Series'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.14.6') { $details->model = 'NetworkAIR IRRP100 Series'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.14.7') { $details->model = 'NetworkAIR IRRP500 Series'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.15') { $details->model = 'infraXurePDU'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.16') { $details->model = 'AIS 5000 UPS'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.16.1') { $details->model = 'AIS 5000 UPS 10kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.16.2') { $details->model = 'AIS 5000 UPS 20kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.16.3') { $details->model = 'AIS 5000 UPS 30kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.16.4') { $details->model = 'AIS 5000 UPS 40kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.16.5') { $details->model = 'AIS 5000 UPS 60kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.16.6') { $details->model = 'AIS 5000 UPS 80kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.16.7') { $details->model = 'AIS 5000 UPS 100kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.17') { $details->model = 'Smart-UPS 3Phase'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.17.1') { $details->model = 'Smart-UPS 3Phase 0kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.17.2') { $details->model = 'Smart-UPS 3Phase 15kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.17.3') { $details->model = 'Smart-UPS 3Phase 20kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.17.4') { $details->model = 'Smart-UPS 3Phase 30kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.17.5') { $details->model = 'Smart-UPS 3Phase 40kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.18') { $details->model = 'battManager'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.19') { $details->model = 'infraXureATS'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2') { $details->model = 'Smart-UPS'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.1') { $details->model = 'Smart-UPS 250'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.10') { $details->model = 'Smart-UPS 1400'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.11') { $details->model = 'Smart-UPS 2200'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.12') { $details->model = 'Smart-UPS 3000'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.13') { $details->model = 'Smart-UPS 5000'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.14') { $details->model = 'Smart-UPS 7500'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.15') { $details->model = 'Smart-UPS 10000'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.16') { $details->model = 'Smart-UPS 1500'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.17') { $details->model = 'Smart-UPS 3000DSP'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.18') { $details->model = 'Smart-UPS 5000DSP'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.19') { $details->model = 'Smart-UPS 8000'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.2') { $details->model = 'Smart-UPS 400'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.3') { $details->model = 'Smart-UPS 600'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.4') { $details->model = 'Smart-UPS 900'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.5') { $details->model = 'Smart-UPS 1250'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.6') { $details->model = 'Smart-UPS 2000'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.7') { $details->model = 'Smart-UPS 450'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.8') { $details->model = 'Smart-UPS 700'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.2.9') { $details->model = 'Smart-UPS 1000'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.20') { $details->model = 'conPortServ'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.20.1') { $details->model = 'conPortServAP930x'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.21') { $details->model = 'Gutor'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.21.1') { $details->model = 'Gutor PEW'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.21.2') { $details->model = 'Gutor PDW'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.21.3') { $details->model = 'Gutor WEW'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.21.4') { $details->model = 'Gutor WDW'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.21.5') { $details->model = 'Gutor SDC'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.22') { $details->model = 'accControl'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.22.1') { $details->model = 'accPX'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.27') { $details->model = 'ap9631'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.1') { $details->model = 'galaxy 7000UPS200kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.2') { $details->model = 'galaxy 7000UPS250kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.3') { $details->model = 'galaxy 7000UPS300kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.4') { $details->model = 'galaxy 7000UPS400kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.5') { $details->model = 'galaxy 7000UPS500kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.6') { $details->model = 'galaxy 7000SSC800kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.7') { $details->model = 'galaxy 7000SSC1200kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.8') { $details->model = 'galaxy 7000SSC2000kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.9') { $details->model = 'galaxy 300UPS10kVA33'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.10') { $details->model = 'galaxy 300UPS15kVA33'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.11') { $details->model = 'galaxy 300UPS20kVA33'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.12') { $details->model = 'galaxy 300UPS30kVA33'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.13') { $details->model = 'galaxy 300UPS40kVA33'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.14') { $details->model = 'galaxy 300UPS10kVA31'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.15') { $details->model = 'galaxy 300UPS15kVA31'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.16') { $details->model = 'galaxy 300UPS20kVA31'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.17') { $details->model = 'galaxy 300UPS30kVA31'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.18') { $details->model = 'galaxy 5000UPS20KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.19') { $details->model = 'galaxy 5000UPS30KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.20') { $details->model = 'galaxy 5000UPS40KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.21') { $details->model = 'galaxy 5000UPS50KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.22') { $details->model = 'galaxy 5000UPS60KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.23') { $details->model = 'galaxy 5000UPS80KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.24') { $details->model = 'galaxy 5000UPS100KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.25') { $details->model = 'galaxy 5000UPS120KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.26') { $details->model = 'galaxy 5000UPS130KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.27') { $details->model = 'galaxy 5500UPS20KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.28') { $details->model = 'galaxy 5500UPS30KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.29') { $details->model = 'galaxy 5500UPS40KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.30') { $details->model = 'galaxy 5500UPS50KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.31') { $details->model = 'galaxy 5500UPS60KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.32') { $details->model = 'galaxy 5500UPS80KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.33') { $details->model = 'galaxy 5500UPS100KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.34') { $details->model = 'galaxy 5500UPS120KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.35') { $details->model = 'galaxy 5500UPS130KVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.36') { $details->model = 'galaxy VMUPS50kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.37') { $details->model = 'galaxy VMUPS60kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.38') { $details->model = 'galaxy VMUPS80kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.39') { $details->model = 'galaxy VMUPS90kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.40') { $details->model = 'galaxy VMUPS100kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.41') { $details->model = 'galaxy VMUPS110kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.42') { $details->model = 'galaxy VMUPS120kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.43') { $details->model = 'galaxy VMUPS130kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.44') { $details->model = 'galaxy VMUPS160kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.45') { $details->model = 'galaxy VMUPS180kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.46') { $details->model = 'galaxy VMUPS200kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.47') { $details->model = 'galaxy VMUPS225kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.48') { $details->model = 'galaxy 9000UPS'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.49') { $details->model = 'galaxy 9000SSC'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.50') { $details->model = 'galaxy 9000UPSWithSSC'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.28.51') { $details->model = 'galaxy 9000FreqConverter'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.3') { $details->model = 'Matrix-UPS'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.3.1') { $details->model = 'Matrix-UPS 3000'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.3.2') { $details->model = 'Matrix-UPS 5000'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.4') { $details->model = 'masterSwitch'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.4.1') { $details->model = 'Web/SNMP Management Card'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.4.2') { $details->model = 'Web/SNMP Management Card'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.4.5') { $details->model = 'Switched Rack PDU'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.5') { $details->model = 'Symmetra-UPS'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.5.1') { $details->model = 'Symmetra-UPS 4kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.5.2') { $details->model = 'Symmetra-UPS 8kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.5.3') { $details->model = 'Symmetra-UPS 12kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.5.4') { $details->model = 'Symmetra-UPS 16kVA'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.6') { $details->model = 'dp100E'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.7') { $details->model = 'dp300E'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.8') { $details->model = 'monitors'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.8.1') { $details->model = 'environmental'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.8.2') { $details->model = 'APC Environmental Management System'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.8.3') { $details->model = 'APC Environmental Monitoring Unit'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.8.4') { $details->model = 'mem'; $details->type = 'ups'; }
    if ($oid == '1.3.6.1.4.1.318.1.3.9') { $details->model = 'redundantSwitch'; $details->type = 'ups'; }
    $temp_model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.318.1.1.1.1.1.1.0");
    if (empty($temp_model)) {
        $temp_model = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.33.1.1.2.0");
    }
    if (empty($details->model) and !empty($temp_model)) {
        $details->model = $temp_model;
    }
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.318.1.1.1.1.2.3.0");
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.318.1.1.4.1.5.0");
    }
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.318.1.1.12.1.6.0");
    }
    return($details);
};
