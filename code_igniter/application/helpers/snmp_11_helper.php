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

# Vendor Hewlett Packard

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.2.3') { $details->model = 'HP800'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.2.6') { $details->model = 'Itanium'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.1') { $details->model = 'AdvSwitch 2000'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.10') { $details->model = 'ProCurve Switch 2400M'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.100') { $details->model = 'ProCurve Switch 6600ml-24G (J9263A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.101') { $details->model = 'ProCurve Switch 6600ml-24G-4XG'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.102') { $details->model = 'ProCurve Data Center Manager Controller (J9445A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.103') { $details->model = 'ProCurve Switch 1810G-8 (J9449A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.104') { $details->model = 'ProCurve Switch 1810G-24 (J9450A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.105') { $details->model = 'ProCurve Switch 6600-48G-4XG (J9452A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.106') { $details->model = 'ProCurve Switch 6600-48G (J9451A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.107') { $details->model = 'ProCurve Switch 6120XG Blade (516733-B21)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.108') { $details->model = 'ProCurve Switch 6120G/XG Blade (498358-B21)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.109') { $details->model = 'ProCurve Switch 3500-24-PoE (J9471A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.11') { $details->model = 'ProCurve Switch 2424M'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.110') { $details->model = 'ProCurve Switch 3500-48-PoE Switch (J9473A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.111') { $details->model = 'ProCurve Switch 3500-24 (J9470A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.112') { $details->model = 'ProCurve Switch 3500-48 Switch (J9472A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.113') { $details->model = 'ProCurve Switch 8206zl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.114') { $details->model = 'ProCurve Switch 3500yl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.13') { $details->model = 'ProCurve Switch 9308'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.131') { $details->model = 'ProCurve Switch 2620'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.14') { $details->model = 'ProCurve Switch 9304'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.15') { $details->model = 'ProCurve Switch 6308m-SX (J4840A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.16') { $details->model = 'ProCurve Switch 6208m-SX (J4841A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.17') { $details->model = 'ProCurve Switch 5308xl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.17.11') { $details->model = 'ProCurve Wireless Edge xl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.17.12') { $details->model = 'ProCurve Wireless Edge Redundant xl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.18') { $details->model = 'ProCurve Switch 2512'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.19') { $details->model = 'ProCurve Switch 2524'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.2') { $details->model = 'AdvanceStack Switch 2000 (B version)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.20') { $details->model = 'ProCurve Switch 5304XL'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.21') { $details->model = 'ProCurve Switch 3324XL (J4815A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.22') { $details->model = 'ProCurve Switch 3124 (J4851A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.23') { $details->model = 'ProCurve Switch 4108GL'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.27') { $details->model = 'ProCurve Switch 4104GL'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.28') { $details->model = 'ProCurve Switch 9315'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.29') { $details->model = 'ProCurve Switch 2650 (J4899A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.3') { $details->model = 'AdvanceStack Switch 800T'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.30') { $details->model = 'ProCurve Switch 6108'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.31') { $details->model = 'ProCurve Switch 2824'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.32') { $details->model = 'ProCurve Switch 2848'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.33.1.1.1') { $details->model = 'Switch BLpClassC-GbE2'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.33.3.1.1') { $details->model = 'Switch Proliant-cgesm'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.33.4.1.1') { $details->model = 'Switch GbE2C'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.34') { $details->model = 'ProCurve Switch 2626'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.35') { $details->model = 'ProCurve Switch 2650-PWR'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.36') { $details->model = 'ProCurve Switch 2626-PWR'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.4') { $details->model = 'ProCurve Switch 200'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.42') { $details->model = 'ProCurve Switch 3400cl-24G'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.43') { $details->model = 'ProCurve Switch 3400cl-48G'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.44') { $details->model = 'ProCurve Switch 2650 (J4899B)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.45') { $details->model = 'ProCurve Switch 2626B'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.48') { $details->model = 'ProCurve Switch 6400cl-6XG'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.49') { $details->model = 'ProCurve Switch 6410cl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.5') { $details->model = 'ProCurve Switch 212 (J3298A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.50') { $details->model = 'ProCurve Switch 5406zl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.50.14') { $details->model = 'ProCurve Wireless Edge zl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.50.15') { $details->model = 'ProCurve Wireless Edge Redundant zl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.50.17') { $details->model = 'ProCurve zl ONE Services Module (J9155A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.51') { $details->model = 'ProCurve Switch 5412zl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.52') { $details->model = 'ProCurve Switch 4204vl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.53') { $details->model = 'ProCurve Switch 4208vl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.54') { $details->model = 'ProCurve Routing Switch 9400 (J8453A) (J8680A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.55') { $details->model = 'ProCurve Switch 2600-8 PWR'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.56') { $details->model = 'ProCurve Switch 4202vl-48G'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.57') { $details->model = 'ProCurve Switch 4202vl-72'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.58') { $details->model = 'ProCurve Switch 3500yl-24G-PWR'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.59') { $details->model = 'ProCurve Switch 3500yl-48G-PWR'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.6') { $details->model = 'ProCurve Switch 224M'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.60') { $details->model = 'ProCurve Switch 6200yl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.61') { $details->model = 'ProCurve Switch 2510-24'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.62') { $details->model = 'ProCurve Switch 2510-48'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.63') { $details->model = 'ProCurve Switch 2810-24G'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.64') { $details->model = 'ProCurve Switch 2810-48G'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.65') { $details->model = 'ProCurve Switch 1800-24G (J9028A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.66') { $details->model = 'ProCurve Switch 1800-8G'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.68') { $details->model = 'ProCurve Switch 2900-48G'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.69') { $details->model = 'ProCurve Switch 2900-24G'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.7') { $details->model = 'ProCurve Switch 8000M'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.72') { $details->model = 'ProCurve Switch 8212zl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.73') { $details->model = 'ProCurve Network Access Controller (J9065A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.74') { $details->model = 'ProCurve Switch 1700-8'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.75') { $details->model = 'ProCurve Switch 1700-24 (J9080A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.76') { $details->model = 'ProCurve Switch 2610-24'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.77') { $details->model = 'ProCurve Switch 2610-48'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.78') { $details->model = 'ProCurve Switch 2610-24-PWR'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.79') { $details->model = 'ProCurve Switch 2610-48-PWR'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.8') { $details->model = 'ProCurve Switch 1600M'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.80') { $details->model = 'ProCurve Switch 2610-24/12PWR'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.81') { $details->model = 'ProCurve Switch 1800-24G'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.82') { $details->model = 'ProCurve Switch 2626C (J4900C)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.83') { $details->model = 'ProCurve Switch 2650 (J4899C)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.84') { $details->model = 'ProCurve Switch 2910al-24G-PoE (J9146A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.85') { $details->model = 'ProCurve Switch 2910al-48G-PoE (J9148A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.86') { $details->model = 'ProCurve Switch 2910al-24G'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.87') { $details->model = 'ProCurve Switch 2910al-48G (J9147A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.88') { $details->model = 'ProCurve Switch 2510G-24'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.89') { $details->model = 'ProCurve Switch 2500 Fixed-Port 2510G-48 (J9280A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.9') { $details->model = 'ProCurve Switch 4000M'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.90') { $details->model = 'ProCurve Switch 2510B-24'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.94') { $details->model = 'ProCurve Switch 2520-8-PoE (J9137A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.95') { $details->model = 'ProCurve Switch 2520-24-PoE (J9138A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.96') { $details->model = 'ProCurve Switch 2520G-8-PoE'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.97') { $details->model = 'ProCurve Switch 2520G-24-PoE (J9299A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.98') { $details->model = 'ProCurve Switch 6600ml-24XG (J9265A)'; $details->type = 'switch'; }

    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.11.158') { $details->model = 'ProCurve Switch 1810-8G'; $details->type = 'switch'; }
    
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.3.9') { $details->model = 'DTC22'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.5.1') { $details->model = 'EtherTwist 12'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.5.20') { $details->model = '10BaseT Hub12M'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.5.21') { $details->model = '10Base-T Hub-24M'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.5.23') { $details->model = '10T100THub24M'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.8.1') { $details->model = 'RepeaterAgent'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.7.8.2.5') { $details->model = 'AdvanceStack 10BT Switching Hub'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.9.1') { $details->model = 'Jet Direct Print Server';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.3.9.2') { $details->model = 'Jet Direct Print Server';
        $details->type = 'network printer';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.14.11.6.4.1.1') { $details->model = 'ProCurve Wireless AcessPoint 420'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.14.11.6.4.1.2') { $details->model = 'ProCurve Wireless AcessPoint 530'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.14.11.6.4.1.3') { $details->model = 'ProCurve Wireless Access Point 10ag (J9141A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.14.11.7.1.1') { $details->model = 'ProCurve Secure Router 7001dl (J8751A)'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.14.11.7.1.2') { $details->model = 'ProCurve Secure Router 7102dl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.14.11.7.1.3') { $details->model = 'ProCurve Secure Router 7103dl'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.2.51') { $details->model = 'StorageWorks SAN';
        $details->type = 'san';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.5.7.1.2') { $details->model = 'BladeSystem OA'; $details->type = 'switch'; }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.5.7.5.1') { $details->model = 'VirtualConnect Flex10'; $details->type = 'switch'; }

    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.1') { $details->model = 'TapeLibrary C7200';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.2') { $details->model = 'TapeLibrary C7200iSCSI';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.3') { $details->model = 'TapeLibrary ESL9198';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.4') { $details->model = 'TapeLibrary ESL9322';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.5') { $details->model = 'TapeLibrary ESL9595';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.6') { $details->model = 'TapeLibrary ESL9326';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.7') { $details->model = 'TapeLibrary MSL5026';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.8') { $details->model = 'TapeLibrary MSL5030';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.9') { $details->model = 'TapeLibrary MSL5052';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.10') { $details->model = 'TapeLibrary MSL5060';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.11') { $details->model = 'TapeLibrary MSL6026';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.12') { $details->model = 'TapeLibrary MSL6030';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.13') { $details->model = 'TapeLibrary MSL6052';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.14') { $details->model = 'TapeLibrary MSL6060';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.15') { $details->model = 'TapeLibrary ESL630';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.16') { $details->model = 'TapeLibrary ESL712';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.17') { $details->model = 'TapeLibrary ESL322';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.18') { $details->model = 'TapeLibrary ESL286';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.19') { $details->model = 'TapeLibrary EML103e';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.20') { $details->model = 'TapeLibrary EML245e';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.21') { $details->model = 'TapeLibrary VLS6000';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.22') { $details->model = 'TapeLibrary VLSg';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.25') { $details->model = 'TapeLibrary MSLG3';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.26') { $details->model = 'TapeLibrary MSL4048';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.28') { $details->model = 'TapeLibrary ESLG3';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.2.1.3.29') { $details->model = 'TapeLibrary MSL6480';
        $details->type = 'tape library';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.11.10.3.1.3.27') { $details->model = 'HP StorageWorks D2D';
        $details->type = 'storage misc';
    }

    if ($details->snmp_version == '2') {
        # serial
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, ".1.3.6.1.4.1.11.2.36.1.1.2.9.0"));
    }

    if ($details->snmp_version == '1') {
        # model is a hex encoded string in HP Laserjets using snmp v1
        if (!isset($details->model) or $details->model = '') {
            $model = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.11.2.3.9.4.2.1.1.3.2.0"));
            $model = str_replace(" ", "", $model);
            $model = str_replace("\n", "", $model);
            if (function_exists('hex2bin')) {
                $details->model = hex2bin($model);
            } else {
                $details->model = pack("H*", $model);
            }
            $temp_model = mb_convert_encoding($details->model, "UTF-8", "ASCII");
        }

        # serial is a hex encoded string in HP Laserjets using snmp v1
        $serial = snmp_clean(@snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.11.2.3.9.4.2.1.1.3.3.0"));
        $serial = str_replace(" ", "", $serial);
        $serial = str_replace("\n", "", $serial);
        if (function_exists('hex2bin')) {
            $details->serial = hex2bin($serial);
        } else {
            $details->serial = pack("H*", $serial);
        }
        $details->serial = mb_convert_encoding($details->serial, "UTF-8", "ASCII");
    }

    if ((strpos(strtolower($details->model), "laserjet") !== false) and (!isset($details->type) or $details->type == '' or $details->type == 'unknown')) {
        $details->type = "network printer";
    }

    if (isset($temp_model) and $temp_model > '') { $details->model = $temp_model;
    }

};
