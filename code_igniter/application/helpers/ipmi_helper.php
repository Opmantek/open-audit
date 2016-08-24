<?php
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

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * 
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
if (!function_exists('ipmi_audit')) {
    function ipmi_audit($ip, $credentials, $display)
    {
        error_reporting(E_ALL);
        $CI = & get_instance();
        $details = new stdClass();

        $log = new stdClass();
        $log->file = 'system';
        $log->severity = 7;
        if ($display == 'y') {
            $log->display = 'y';
        } else {
            $log->display = 'n';
        }

        # Detect Linux (only supported platform for IPMI)
        if (php_uname('s') != 'Linux') {
            $log->message = 'IPMI defined as useable in config, but not running Linux. IPMI not supported on other platforms';
            stdlog($log);
            return;
        }

        # detect IPMItool
        $command_string = 'which ipmitool 2>&1';
        exec($command_string, $output, $return_var);
        if ($display == 'y') {
            echo 'DEBUG - Command Executed: '.$command_string."\n";
            echo 'DEBUG - Return Value: '.$return_var."\n";
            echo "DEBUG - Command Output:\n";
            print_r($output);
        }
        if ($return_var != '0') {
            $impi_installed = 'n';
            $log->message = 'IPMI defined as useable in config, but ipmitools not detected when discovering '.$ip;
            stdlog($log);
            return;
        } else {
            $log->message = 'IPMI detected and used (as per config) when discovering '.$ip;
            stdlog($log);
            $impi_installed = 'y';
        }
        $command_string = null;
        $output = null;
        $return_var = null;

        // MAC Address
        $command_string = 'ipmitool -H '.$ip.' -U '.$credentials->credentials->username.' -P '.escapeshellarg($credentials->credentials->password).' lan print 2>/dev/null | grep "^MAC Address" | cut -d":" -f2- | cut -d" " -f2';
        exec($command_string, $output, $return_var);
        if ($display == 'y') {
            $command_string = str_replace(escapeshellarg($credentials->credentials->password), '******', $command_string);
            echo 'DEBUG - Command Executed: '.$command_string."\n";
            echo 'DEBUG - Return Value: '.$return_var."\n";
            echo "DEBUG - Command Output:\n";
            print_r($output);
        }
        if ($return_var == '0') {
            $details->type = 'remote access controller';
            $details->last_seen_by = 'ipmi';
            $details->description = '';
            if ($details->mac_address == '') {
                $details->mac_address = strtolower($output[0]);
            }
        }
        $command_string = null;
        $output = null;
        $return_var = null;
        
        // Subnet Mask
        $command_string = 'ipmitool -H '.$ip.' -U '.$credentials->credentials->username.' -P '.escapeshellarg($credentials->credentials->password).' lan print 2>/dev/null | grep "Subnet Mask" | cut -d":" -f2 ';
        exec($command_string, $output, $return_var);
        if ($display == 'y') {
            $command_string = str_replace(escapeshellarg($credentials->credentials->password), '******', $command_string);
            echo 'DEBUG - Command Executed: '.$command_string."\n";
            echo 'DEBUG - Return Value: '.$return_var."\n";
            echo "DEBUG - Command Output:\n";
            print_r($output);
        }
        if (isset($output[0]) and trim($output[0]) != '') {
            $details->subnet = trim($output[0]);
        }
        $command_string = null;
        $output = null;
        $return_var = null;
        
        // Manufacturer
        $command_string = 'ipmitool -H '.$ip.' -U '.$credentials->credentials->username.' -P '.escapeshellarg($credentials->credentials->password).' fru list 2>/dev/null | grep "Product Manufacturer" | cut -d":" -f2 ';
        exec($command_string, $output, $return_var);
        if ($display == 'y') {
            $command_string = str_replace(escapeshellarg($credentials->credentials->password), '******', $command_string);
            echo 'DEBUG - Command Executed: '.$command_string."\n";
            echo 'DEBUG - Return Value: '.$return_var."\n";
            echo "DEBUG - Command Output:\n";
            print_r($output);
        }
        if (isset($output[0]) and trim($output[0]) != '') {
            $details->manufacturer = trim($output[0]);
        }
        $command_string = null;
        $output = null;
        $return_var = null;
        
        // Model
        $command_string = 'ipmitool -H '.$ip.' -U '.$credentials->credentials->username.' -P '.escapeshellarg($credentials->credentials->password).' fru list 2>/dev/null | grep "Product Name" | cut -d":" -f2 ';
        exec($command_string, $output, $return_var);
        if ($display == 'y') {
            $command_string = str_replace(escapeshellarg($credentials->credentials->password), '******', $command_string);
            echo 'DEBUG - Command Executed: '.$command_string."\n";
            echo 'DEBUG - Return Value: '.$return_var."\n";
            echo "DEBUG - Command Output:\n";
            print_r($output);
        }
        if (isset($output[0]) and trim($output[0]) != '') {
            $details->model = trim($output[0]);
        }
        $command_string = null;
        $output = null;
        $return_var = null;

        // Serial
        $command_string = 'ipmitool -H '.$ip.' -U '.$credentials->credentials->username.' -P '.escapeshellarg($credentials->credentials->password).' fru list 2>/dev/null | grep "Product Serial" | cut -d":" -f2 ';
        exec($command_string, $output, $return_var);
        if ($display == 'y') {
            $command_string = str_replace(escapeshellarg($credentials->credentials->password), '******', $command_string);
            echo 'DEBUG - Command Executed: '.$command_string."\n";
            echo 'DEBUG - Return Value: '.$return_var."\n";
            echo "DEBUG - Command Output:\n";
            print_r($output);
        }
        if (isset($output[0]) and trim($output[0]) != '') {
            $details->serial = trim($output[0]);
        }
        $command_string = null;
        $output = null;
        $return_var = null;

        # return the $details
        return($details);
    }
}