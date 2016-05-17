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

# Vendor HP QLogic

$get_oid_details = function ($details) {
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.4') {
        $details->model = 'HP StorageWorks MPX100';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.5') {
        $details->model = 'HP StorageWorks MPX200';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.7') {
        $details->model = 'HP 4Gb VCFC Module';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.8') {
        $details->model = 'QLogic 8Gb Intelligent Pass-thru Module for IBM BladeCenter';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.9') {
        $details->model = 'SANbox 5802V FC Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.11') {
        $details->model = 'HP StorageWorks 8/20q Fibre Channel Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.12') {
        $details->model = 'QLogic 8 Gb FC Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.14') {
        $details->model = 'SANbox 5800V FC Switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.16') {
        $details->model = 'Virtual Connect Fibre Channel';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.17') {
        $details->model = 'iSR6200';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.18') {
        $details->model = 'HP StorageWorks MPX200 Multifunction Router';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.20') {
        $details->model = 'HP StorageWorks MEZ75';
        $details->type = 'router';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.23') {
        $details->model = 'QLogic Virtual Fabric Extension Module for IBM BladeCenter';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.24') {
        $details->model = 'SN6000 Single Supply FC switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.25') {
        $details->model = 'SN6000 DualPower Supply FC switch';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.27') {
        $details->model = '4-port FC media card';
        $details->type = 'switch';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.3873.1.33') {
        $details->model = 'IBM Flex System FC3171 8 Gb SAN Switch';
        $details->type = 'switch';
    }
};
