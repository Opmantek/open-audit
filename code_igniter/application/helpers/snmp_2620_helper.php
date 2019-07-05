<?php
if (!defined('BASEPATH')) {
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
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.1.2
* @link      http://www.open-audit.org
 */

# Vendor Checkpoint

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new stdClass();
    $log = new stdClass();
    $log->summary = "snmp_2620_helper";
    
    $log->message = 'checkpoint serial retrieval via SNMP for '.$ip;
        $log->command = 'snmpget 1.3.6.1.4.1.2620.1.6.16.3.0';
        $log->command_status = 'fail';
        $log->id = discovery_log($log);
        $item_start = microtime(true);
    # checkpoint serial
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2620.1.6.16.3.0");
    
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->command_output = (string)$details->memory_count;
        $log->command_status = '';
        discovery_log($log);
        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);
        
     $log->message = 'checkpoint Memory retrieval via SNMP for '.$ip;
        $log->command = 'snmpget 1.3.6.1.4.1.2620.1.6.7.4.3.0';
        $log->command_status = 'fail';
        $log->id = discovery_log($log);
        $item_start = microtime(true);
    #Memory
    #1.3.6.1.4.1.2620.1.6.7.4.3 in Bytes so divide by 1024 for KB
    $details->memory_count = intval(my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2620.1.6.7.4.3.0") / 1024);
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->command_output = (string)$details->memory_count;
        $log->command_status = '';
        discovery_log($log);
        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);
        
        
     $log->message = 'checkpoint Disk Storage retrieval via SNMP for '.$ip;
        $log->command = 'snmpget 1.3.6.1.4.1.2620.1.6.7.3.6.0';
        $log->command_status = 'fail';
        $log->id = discovery_log($log);
        $item_start = microtime(true);
    
    #Disk 1.3.6.1.4.1.2620.1.6.7.3.6 may require /1048576 for sizing
    $details->storage_count = intval(my_snmp_get($ip, $credentials, "1.3.6.1.4.1.2620.1.6.7.3.6.0"));  
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->command_output = (string)$details->memory_count;
        $log->command_status = '';
        discovery_log($log);
        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);
    
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.1') { $details->model = 'UTM-1450'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.2') { $details->model = 'UTM-11050'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.3') { $details->model = 'UTM-12050'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.4') { $details->model = 'UTM-1130'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.5') { $details->model = 'UTM-1270'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.6') { $details->model = 'UTM-1570'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.7') { $details->model = 'UTM-11070'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.8') { $details->model = 'UTM-12070'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.9') { $details->model = 'UTM-13070'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.10') { $details->model = 'Power-15070'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.11') { $details->model = 'Power-19070'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.12') { $details->model = 'Power-111000'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.13') { $details->model = 'Smart-15'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.14') { $details->model = 'Smart-125'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.15') { $details->model = 'Smart-150'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.16') { $details->model = 'Smart-1150'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.17') { $details->model = 'IP150'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.18') { $details->model = 'IP280'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.19') { $details->model = 'IP290'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.20') { $details->model = 'IP390'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.21') { $details->model = 'IP560'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.22') { $details->model = 'IP690'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.23') { $details->model = 'IP1280'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.24') { $details->model = 'IP2450'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.25') { $details->model = 'UNIVERGE UnifiedWall 1000'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.26') { $details->model = 'UNIVERGE UnifiedWall 2000'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.27') { $details->model = 'UNIVERGE UnifiedWall 4000'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.28') { $details->model = 'UNIVERGEUnifiedWall 100'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.29') { $details->model = 'DLP-19571'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.30') { $details->model = 'DLP-12571'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.31') { $details->model = 'IPS-12076'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.32') { $details->model = 'IPS-15076'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.33') { $details->model = 'IPS-19076'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.34') { $details->model = '2200'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.35') { $details->model = '4200'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.36') { $details->model = '4400'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.37') { $details->model = '4600'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.38') { $details->model = '4800'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.39') { $details->model = 'TE250'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.40') { $details->model = '12200'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.41') { $details->model = '12400'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.42') { $details->model = '12600'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.43') { $details->model = 'TE1000'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.44') { $details->model = '13500'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.45') { $details->model = '21400'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.46') { $details->model = '21600'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.47') { $details->model = '21700'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.48') { $details->model = 'VMware'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.49') { $details->model = 'OpenServer'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.50') { $details->model = 'Smart-1205'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.51') { $details->model = 'Smart-1210'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.52') { $details->model = 'Smart-1225'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.53') { $details->model = 'Smart-13050'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.54') { $details->model = 'Smart-13150'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.55') { $details->model = '13800'; $details->type = 'firewall'; }
    if ($oid == '1.3.6.1.4.1.2620.1.6.123.1.56') { $details->model = '21800'; $details->type = 'firewall'; }
    return($details);
};
