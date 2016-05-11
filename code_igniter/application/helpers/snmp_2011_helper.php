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

# Vendor Huawei

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.11812') {
        $details->model = 'AR18-12';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.11813') {
        $details->model = 'AR18-13';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.11815') {
        $details->model = 'AR18-15';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.11816') {
        $details->model = 'AR18-16';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.12809') {
        $details->model = 'AR28-09';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.12810') {
        $details->model = 'AR28-10';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.12811') {
        $details->model = 'AR28-11';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.12830') {
        $details->model = 'AR28-30';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.12831') {
        $details->model = 'AR28-31';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.12840') {
        $details->model = 'AR28-40';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.12880') {
        $details->model = 'AR28-80';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.1600') {
        $details->model = '1600';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.1602') {
        $details->model = '1602';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.1612') {
        $details->model = '1612';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.1613') {
        $details->model = '1613';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.1614') {
        $details->model = '1614';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.1615') {
        $details->model = '1615';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.1760') {
        $details->model = '1760';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.1761') {
        $details->model = 'AR28-09B';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.1761') {
        $details->model = 'AR-2809B';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2501') {
        $details->model = '2501';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2509') {
        $details->model = '2509';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2511') {
        $details->model = '2511';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2601') {
        $details->model = '2501E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2606') {
        $details->model = '4001E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2608') {
        $details->model = '2509E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2609') {
        $details->model = '2511E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2610') {
        $details->model = '2610';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2611') {
        $details->model = '2611';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2620') {
        $details->model = '2620';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2621') {
        $details->model = '2621';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2630') {
        $details->model = '2630';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.2631') {
        $details->model = '2631';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.3640') {
        $details->model = '3640';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.3680') {
        $details->model = '3680';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.1.1.1.4001') {
        $details->model = '4001';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.1') {
        $details->model = ' S2008-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.10') {
        $details->model = 'S3928P-SI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.100') {
        $details->model = 'S5624F';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.101') {
        $details->model = 'S3224P';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.102') {
        $details->model = 'S3226T';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.103') {
        $details->model = 'S3226P';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.104') {
        $details->model = 'S3250T';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.105') {
        $details->model = 'S3250P';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.106') {
        $details->model = 'S3108T';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.107') {
        $details->model = 'S3116T';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.108') {
        $details->model = 'S3126T';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.109') {
        $details->model = 'S3108C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.11') {
        $details->model = 'S3952P-SI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.110') {
        $details->model = 'S3116C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.111') {
        $details->model = 'S3126C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.112') {
        $details->model = 'AR28-12B';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.113') {
        $details->model = 'Huawei : H3CSecBladeIDS';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.114') {
        $details->model = 'Huawei : H3CSecBladeIPS';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.115') {
        $details->model = 'SecEngineD500';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.116') {
        $details->model = 'S3928TP-V6';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.117') {
        $details->model = 'S3928P-V6';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.118') {
        $details->model = 'S3952P-V6';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.119') {
        $details->model = 'S3928F-V6';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.12') {
        $details->model = 'S3928TP-SI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.120') {
        $details->model = 'Huawei : H3CS5524P';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.121') {
        $details->model = 'Huawei : H3CS5524F';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.122') {
        $details->model = 'Huawei : H3CXE-7000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.123') {
        $details->model = 'Huawei : H3C VG10-40';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.124') {
        $details->model = 'Huawei : H3C VG10-41';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.125') {
        $details->model = 'Huawei : H3C VG20-16';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.126') {
        $details->model = 'Huawei : H3C VG20-32';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.127') {
        $details->model = 'Huawei : H3CVG20-08L';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.128') {
        $details->model = 'Huawei : H3C VG80-20';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.129') {
        $details->model = 'Huawei : H3CVG80-20T';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.13') {
        $details->model = 'S3928P-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.130') {
        $details->model = 'Huawei : H3CS2008CT';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.131') {
        $details->model = 'Huawei : H3CS2008CP';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.132') {
        $details->model = 'Huawei : H3CSecBladeFW';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.133') {
        $details->model = 'Huawei : H3CSecBladeVPN';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.134') {
        $details->model = 'Huawei : H3CSecEngineD200';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.135.1') {
        $details->model = 'Huawei : H3CIX5000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.136') {
        $details->model = 'Huawei : H3CSJW59';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.137') {
        $details->model = 'Huawei : H3C VG21-08';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.138') {
        $details->model = 'AR19-61';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.139') {
        $details->model = 'AR19-62';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.14') {
        $details->model = 'S3952P-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.140') {
        $details->model = 'AR29-01';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.141') {
        $details->model = 'AR29-21';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.142') {
        $details->model = 'AR29-41';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.143') {
        $details->model = 'AR29-61';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.144') {
        $details->model = 'AR49-45';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.145') {
        $details->model = 'AR49-65';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.146') {
        $details->model = 'Huawei : H3CS5112P-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.147') {
        $details->model = 'Huawei : H3CS5113C-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.148') {
        $details->model = 'Huawei : H3CS5228C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.148') {
        $details->model = 'S5228C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.149') {
        $details->model = 'Huawei : H3CS5252C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.149') {
        $details->model = 'S5252C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.15') {
        $details->model = 'S3928P-PWR-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.150') {
        $details->model = 'Huawei : H3CS5228C-PWR';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.150') {
        $details->model = 'S5228CPWR';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.151') {
        $details->model = 'Huawei : H3C5252C-PWR';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.151') {
        $details->model = 'S5252CPWR';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.152') {
        $details->model = 'S2008-HI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.153') {
        $details->model = 'S2016-HI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.154') {
        $details->model = 'S2403H-HI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.155') {
        $details->model = 'VG3108';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.156') {
        $details->model = 'S8508V';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.157') {
        $details->model = 'E126';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.158') {
        $details->model = 'S3126TP';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.159') {
        $details->model = 'E328';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.16') {
        $details->model = 'S3952P-PWR-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.160') {
        $details->model = 'E352';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.161') {
        $details->model = 'S3928P-PWR-SI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.161') {
        $details->model = 'S3928PPWRSI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.163') {
        $details->model = 'S8502';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.164') {
        $details->model = 'SR8802';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.17') {
        $details->model = 'S3928F-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.174') {
        $details->model = 'S6502ME';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.18') {
        $details->model = 'S5600M';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.182') {
        $details->model = 'DR814';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.183') {
        $details->model = 'DR814q';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.184') {
        $details->model = 'WDR854g';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.185') {
        $details->model = 'VDR824g';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.186') {
        $details->model = 'VDR824';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.187') {
        $details->model = 'VDR744';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.188') {
        $details->model = 'DR744';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.19') {
        $details->model = 'AR18-50';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.192') {
        $details->model = 'S8505V5';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.193') {
        $details->model = 'S8512V5';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.194') {
        $details->model = 'S8508V5';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.195') {
        $details->model = 'S8508VV5';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.196') {
        $details->model = 'S8502V5';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.198') {
        $details->model = 'S2008_EA';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.199') {
        $details->model = 'S2016TPEA';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.2') {
        $details->model = ' S2008-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.20') {
        $details->model = 'AR18-33E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.200') {
        $details->model = 'S2403TPEA';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.201') {
        $details->model = 'S2403TPPWREA';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.202') {
        $details->model = 'S2008TPMI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.203') {
        $details->model = 'S2016TMI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.204') {
        $details->model = 'S2403-TP-MI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.205') {
        $details->model = 'S7802';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.206') {
        $details->model = 'S7803';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.207') {
        $details->model = 'S7806';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.208') {
        $details->model = 'S7806V';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.209') {
        $details->model = 'S7810';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.21') {
        $details->model = 'AR18-34E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.210') {
        $details->model = 'S2016TPPWREA';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.211') {
        $details->model = 'S3552PEA';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.212') {
        $details->model = 'S3528PEA1';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.213') {
        $details->model = 'S3528TPEA';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.214') {
        $details->model = 'S3528FEA';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.215') {
        $details->model = 'S3552FEA';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.22') {
        $details->model = 'S8508';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.220') {
        $details->model = 'S3928PSIACDC';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.224') {
        $details->model = 'AR19-10';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.225') {
        $details->model = 'AR19-13';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.226') {
        $details->model = 'AR19-15';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.227') {
        $details->model = 'S3552PSI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.228') {
        $details->model = 'S3528PSI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.229') {
        $details->model = 'S5628CHIAC';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.23') {
        $details->model = 'SecPath100N';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.230') {
        $details->model = 'S5628CHIDC';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.231') {
        $details->model = 'S5652CHI_AC';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.232') {
        $details->model = 'S5628FHI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.233') {
        $details->model = 'S5628CPWRHI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.234') {
        $details->model = 'S5652CPWRHI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.235') {
        $details->model = 'LSQ1FWBSC1';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.236') {
        $details->model = 'LSQ1NSMSC1';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.237') {
        $details->model = 'S7803L';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.238') {
        $details->model = 'S6503V5';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.239') {
        $details->model = 'S6506V5';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.24') {
        $details->model = 'SecPath100V';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.240') {
        $details->model = 'S6506RV5';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.241') {
        $details->model = 'AR19-03';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.242') {
        $details->model = 'AR19-05';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.243') {
        $details->model = 'S7806L';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.244') {
        $details->model = 'AR29-11';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.25') {
        $details->model = 'SecPath100F';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.26') {
        $details->model = 'SecPath1000F';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.27') {
        $details->model = 'SecPath500F';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.28') {
        $details->model = 'SecPath10F';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.29') {
        $details->model = 'SecPath100FS';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.3') {
        $details->model = 'S2403H-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.30') {
        $details->model = 'SecPath100FE';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.4') {
        $details->model = 'S3026-PWR';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.40') {
        $details->model = 'Huawei : H3C SR8805';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.41') {
        $details->model = 'Huawei : H3C SR8808';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.42') {
        $details->model = 'Huawei : H3C SR8812';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.43') {
        $details->model = 'S5624P';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.44') {
        $details->model = 'S5624P-PWR';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.45') {
        $details->model = 'S5648P';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.46') {
        $details->model = 'S5648P-PWR';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.47') {
        $details->model = 'S2008C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.48') {
        $details->model = 's2016C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.49') {
        $details->model = 's2024C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.5') {
        $details->model = 'SecPath1000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.50') {
        $details->model = 'AR18-13V';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.51') {
        $details->model = 'AR18-18V';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.52') {
        $details->model = 'Huawei : H3CiSPath1000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.53') {
        $details->model = 'AR18-20S';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.55') {
        $details->model = 'Huawei : H3CXE-200';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.56') {
        $details->model = 'Huawei : H3CXE-2000';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.57') {
        $details->model = 'Huawei : H3CE026T';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.58') {
        $details->model = 'E008-FE';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.59') {
        $details->model = 'E017-FE';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.6') {
        $details->model = 'AR18-35';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.60') {
        $details->model = 'E026-FE';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.61') {
        $details->model = 'AR28-12';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.62') {
        $details->model = 'AR28-13';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.63') {
        $details->model = 'AR28-14';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.64') {
        $details->model = 'AR18-10';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.65') {
        $details->model = 'AR18-21';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.66') {
        $details->model = 'AR18-21A';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.67') {
        $details->model = 'AR18-21B';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.68') {
        $details->model = 'AR18-21C';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.69') {
        $details->model = 'AR18-22';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.7') {
        $details->model = 'S3552F-HI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.70') {
        $details->model = 'AR18-22-8';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.71') {
        $details->model = 'AR18-22-24';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.72') {
        $details->model = 'AR18-23-1';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.73') {
        $details->model = 'AR18-30E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.74') {
        $details->model = 'AR18-31E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.75') {
        $details->model = 'AR18-32E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.76') {
        $details->model = 'AR18-35E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.77') {
        $details->model = 'AR18-36E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.78') {
        $details->model = 'AR18-37E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.79') {
        $details->model = 'AR18-52';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.8') {
        $details->model = 'SecPath10';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.80') {
        $details->model = 'S6502';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.81') {
        $details->model = 'S5124P-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.82') {
        $details->model = 'S5126C-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.83') {
        $details->model = 'S5148P-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.84') {
        $details->model = 'S5150C-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.85') {
        $details->model = 'S5116P-SI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.86') {
        $details->model = 'S5124P-SI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.87') {
        $details->model = 'S5148P-SI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.88') {
        $details->model = 'AR46-20E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.89') {
        $details->model = 'AR46-40E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.9') {
        $details->model = 'S3924-SI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.90') {
        $details->model = 'AR46-80E';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.91') {
        $details->model = 'AR18-22S-8';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.92') {
        $details->model = 'AR18-23S-1';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.93') {
        $details->model = 'Huawei : H3CSecEngineP500';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.94') {
        $details->model = 'S2108-SI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.95') {
        $details->model = 'S2116-SI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.96') {
        $details->model = 'S2126-SI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.97') {
        $details->model = 'S2108-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.98') {
        $details->model = 'S2116-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.10.1.99') {
        $details->model = 'S2126-EI';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.17') {
        $details->model = 'NE05';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.170.1') {
        $details->model = 'S9303';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.170.2') {
        $details->model = 'S9306';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.170.3') {
        $details->model = 'S9312';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.12') {
        $details->model = 'S3526';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.13') {
        $details->model = 'S3026';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.14') {
        $details->model = 'S3026V';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.15') {
        $details->model = 'S2008';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.16') {
        $details->model = 'S2016';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.17') {
        $details->model = 'S3526FS';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.18') {
        $details->model = 'S5516';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.19') {
        $details->model = 'S6506';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.20') {
        $details->model = 'S3026F';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.21') {
        $details->model = 'S3526E';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.216') {
        $details->model = 'S6902';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.217') {
        $details->model = 'S6903';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.218') {
        $details->model = 'S6906';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.219') {
        $details->model = 'S6906R';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.22') {
        $details->model = 'S2026';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.23') {
        $details->model = 'S2403H';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.24') {
        $details->model = 'S3026E';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.25') {
        $details->model = 'S3026EFM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.26') {
        $details->model = 'S3026EFS';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.27') {
        $details->model = 'S3526E-FM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.27') {
        $details->model = 'S3526EFM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.28') {
        $details->model = 'S3526E-FS';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.28') {
        $details->model = 'S3526EFS';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.29') {
        $details->model = 'S3050';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.30') {
        $details->model = 'S6503';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.31') {
        $details->model = 'S8512';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.32') {
        $details->model = 'S8505';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.33') {
        $details->model = 'S6506R';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.34') {
        $details->model = 'S3026C';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.35') {
        $details->model = 'S3026G';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.36') {
        $details->model = 'S3026T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.37') {
        $details->model = 'S3552G';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.38') {
        $details->model = 'S3552P';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.39') {
        $details->model = 'S3528G';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.40') {
        $details->model = 'S3528P';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.41') {
        $details->model = 'S3526C';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.42') {
        $details->model = 'S3026C2412FS';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.43') {
        $details->model = 'S3026C2412FM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.44') {
        $details->model = 'S3526C-24-12FS';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.44') {
        $details->model = 'S3526C2412FS';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.45') {
        $details->model = 'S3526C-24-12FM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.45') {
        $details->model = 'S3526C2412FM';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.46') {
        $details->model = 'S5012G';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.47') {
        $details->model = 'S5012GAC';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.48') {
        $details->model = 'S5012T';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.49') {
        $details->model = 'S5012TAC';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.50') {
        $details->model = 'S5024G';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.51') {
        $details->model = 'S5024GAC';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.52') {
        $details->model = 'S2026Z';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.53') {
        $details->model = 'S2026C';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.54') {
        $details->model = 'S3026GSI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.55') {
        $details->model = 'S3026CSI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.56') {
        $details->model = 'S3026SSI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.67') {
        $details->model = 'S3552F-SI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.67') {
        $details->model = 'S3552FSI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.68') {
        $details->model = 'S3552F-EI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.68') {
        $details->model = 'S3552FEI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.69') {
        $details->model = 'SE026';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.70') {
        $details->model = 'SE026SI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.71') {
        $details->model = 'SE050';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.81') {
        $details->model = 'S3328Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.81') {
        $details->model = 'S3328TP-EI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.82') {
        $details->model = 'S3328TP-EI-24S';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.95') {
        $details->model = 'S5328C-EI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.23.97') {
        $details->model = 'S5352C-EI';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.26.1') {
        $details->model = 'NE20-8';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.26.2') {
        $details->model = 'NE16E';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.26.3') {
        $details->model = 'NE08E';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.29') {
        $details->model = 'NE80';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.30') {
        $details->model = 'NE20';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.31') {
        $details->model = 'NE20s';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.39.6') {
        $details->model = 'WLAN1208E';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.39.8') {
        $details->model = 'WLAN1600E';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.4.1.0') {
        $details->model = 'S2403F';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.44') {
        $details->model = 'AR46-20';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.45') {
        $details->model = 'AR46-40';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.46') {
        $details->model = 'AR46-80';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.47') {
        $details->model = 'NE40';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.48') {
        $details->model = 'NE20-2';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.49') {
        $details->model = 'NE20-4';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.51') {
        $details->model = 'E1000';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.55') {
        $details->model = 'AR18-18';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.56') {
        $details->model = 'AR18-20';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.57') {
        $details->model = 'AR18-30';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.58') {
        $details->model = 'AR18-31';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.59') {
        $details->model = 'AR18-32';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.60') {
        $details->model = 'AR18-33';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.61') {
        $details->model = 'AR18-34';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.62.2.2') {
        $details->model = 'NE80E';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.62.2.3') {
        $details->model = 'NE5000E';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.62.2.4') {
        $details->model = 'NE5000EMulti';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.62.2.5') {
        $details->model = 'NE40E';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.62.2.6') {
        $details->model = 'NE5000EBTB';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.62.2.7') {
        $details->model = 'NE40E-4';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.62.2.8') {
        $details->model = 'NE40E-3';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.83') {
        $details->model = 'SecPath1800F';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.1') {
        $details->model = 'MSPCX200A';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.10') {
        $details->model = 'MSPCX200D';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.11') {
        $details->model = 'MSPCX200D-EA';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.12') {
        $details->model = 'MSPCX200D-MC';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.13') {
        $details->model = 'MSPCX600-4';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.14') {
        $details->model = 'MSPCX380-PBT';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.15') {
        $details->model = 'MSPCX380-ME';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.16') {
        $details->model = 'MSPCXD-EA-MC';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.17') {
        $details->model = 'MSPCX600-3';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.2') {
        $details->model = 'MSPCX200B';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.3') {
        $details->model = 'MSPCX300A';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.4') {
        $details->model = 'MSPCX300B';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.5') {
        $details->model = 'MSPCX500A';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.6') {
        $details->model = 'MSPCX380';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.7') {
        $details->model = 'MSPCX600-8';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.8') {
        $details->model = 'MSPCX600-16';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.87.9') {
        $details->model = 'MSPCX200C';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.88.1') {
        $details->model = 'NE20E-3';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.88.2') {
        $details->model = 'NE20E-8';
        $details->type = 'unknown';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.2011.2.91') {
        $details->model = 'IPSAN';
        $details->type = 'san';
    }

    if ($details->snmp_version == '2') {
        $details->serial = snmp_clean(@snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.2.1.47.1.1.1.1.11.1"));
    }
};
