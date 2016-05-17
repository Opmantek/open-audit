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

# Vendor General computer

$get_oid_details = function ($details) {
    $details->type = 'computer';
    $details->model = '';
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.1') {
        $details->os_group = 'Unix';
        $details->os_family = 'HP UX 9';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.2') {
        $details->os_group = 'SunOS';
        $details->os_family = 'Sun OS4';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.3') {
        $details->os_group = 'Solaris';
        $details->os_family = 'Sun Solaris';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.4') {
        $details->os_group = 'Unix';
        $details->os_group = 'DEC OSF/1';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.5') {
        $details->os_group = 'Unix';
        $details->os_group = 'DEC Ultrix';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.6') {
        $details->os_group = 'Unix';
        $details->os_family = 'HP UX 10';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.7') {
        $details->os_group = 'BSD';
        $details->os_family = 'Net BSD';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.8') {
        $details->os_group = 'BSD';
        $details->os_family = 'Free BSD';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.9') {
        $details->os_group = 'Irix';
        $details->os_family = 'SGI Irix';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.10') {
        $details->os_group = 'Linux';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.11') {
        $details->os_group = 'BSD';
        $details->os_family = 'BSDi';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.12') {
        $details->os_group = 'BSD';
        $details->os_family = 'Open BSD';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.13') {
        $details->os_group = 'Windows';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.14') {
        $details->os_group = 'Unix';
        $details->os_family = 'HP UX 11';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.15') {
        $details->os_group = 'Unix';
        $details->os_family = 'IBM AIX';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.16') {
        $details->os_group = 'Apple';
        $details->os_family = 'Apple OSX';
    }
    if ($details->snmp_oid == '1.3.6.1.4.1.8072.3.2.255') {
        $details->os_group = '';
    }

    if (isset($details->description) and stripos($details->description, "Darwin Kernel Version 12") !== false) {
        $details->manufacturer = "Apple Inc";
        $details->os_family = 'Apple OSX';
    }

    if (isset($details->description) and stripos($details->description, "dd-wrt") !== false) {
        $details->os_group = 'Linux';
        $details->os_family = "DD-WRT";
        $details->type = 'router';
    }

};
