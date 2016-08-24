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

if (!function_exists('snmp_credentials')) {
    /**
     * The SNMP credentials test. 
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param     ip          The target device's ip address
     *
     * @param     credentials An array of credentials objects
     *
     * @param     display     Should we echo the output to te screen?
     *
     * @return    FALSE || credentials object with an additional flag for 'sudo' and root
     */
    function snmp_credentials($ip = '', $credentials = array(), $display = 'n')
    {
        if (strtolower($display) != 'y') {
            $display = 'n';
        } else {
            $display = 'y';
        }
        $log = new stdClass();
        $log->severity = 5;
        $log->file = 'system';
        $log->display = $display;
        $retries = '0';
        $timeout = '5000000'; # 5 seconds to respond

        if (!extension_loaded('snmp')) {
            $log->message = 'SNMP extension for PHP is not present, aborting credential test on '.$ip;
            stdlog($log);
            return false;
        }

        if (empty($credentials)) {
            $log->message = 'No credentials array passed to snmp_credentials.';
            stdlog($log);
            return false;
        }
        if (empty($ip) or !filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No IP or bad IP passed to snmp_credentials.';
            stdlog($log);
            return false;
        }
        $connected = array();
        foreach ($credentials as $credential) {
            $from = '';
            if (!empty($credential->source)) {
                $from = 'from ' . $credential->source;
            }
            if (!empty($credential->name)) {
                $from = 'named ' . $credential->name;
            }
            if (!empty($credential->type) and $credential->type == 'snmp') {
                if (@snmp2_get($ip, $credential->credentials->community, "1.3.6.1.2.1.1.1.0", $timeout, $retries)) {
                    $credential->credentials->version = 2;
                    $log->message = "Credential set for SNMPv2 " . $from . " working on " . $ip;
                    stdlog($log);
                    return $credential;
                } else {
                    $log->message = "Credential set for SNMPv2 " . $from . " not working on " . $ip;
                    stdlog($log);
                }
                if (@snmpget($ip, $credential->credentials->community, "1.3.6.1.2.1.1.1.0", $timeout, $retries)) {
                    $credential->credentials->version = 1;
                    $log->message = "Credential set for SNMPv1 " . $from . " working on " . $ip;
                    stdlog($log);
                    return $credential;
                } else {
                    $log->message = "Credential set for SNMPv1 " . $from . " not working on " . $ip;
                    stdlog($log);
                }
            }
        }
        foreach ($credentials as $credential) {
            $from = ' ';
            if (!empty($credential->source)) {
                $from = 'from ' . $credential->source;
            }
            if (!empty($credential->name)) {
                $from = 'named ' . $credential->name;
            }
            if (!empty($credential->type) and $credential->type == 'snmp_v3') {
                $sec_name = $credential->credentials->security_name ?: '';
                $sec_level = $credential->credentials->security_level ?: '';
                $auth_protocol = $credential->credentials->authentication_protocol ?: '';
                $auth_passphrase = $credential->credentials->authentication_passphrase ?: '';
                $priv_protocol = $credential->credentials->privacy_protocol ?: '';
                $priv_passphrase = $credential->credentials->privacy_passphrase ?: '';
                $oid = "1.3.6.1.2.1.1.2.0";
                if (@snmp3_get( $ip, $sec_name ,$sec_level ,$auth_protocol ,$auth_passphrase ,$priv_protocol , $priv_passphrase , $oid, $timeout, $retries)) {
                    $credential->credentials->version = 3;
                    $log->message = "Credential set for SNMPv3 from " . $from . " working on " . $ip;
                    stdlog($log);
                    return $credential;
                } else {
                    $log->message = "Credential set for SNMPv3 from " . $from . " not working on " . $ip;
                    stdlog($log);
                }
            }
        }
        $log->message = "No working SNMP credentials found for " . $ip;
        stdlog($log);
        return false;
    }
}


if (!function_exists('my_snmp_get')) {
    function my_snmp_get($ip, $credentials, $oid)
    {
        $timeout = '3000000';
        $retries = '0';

        if (empty($credentials->credentials->version) or $credentials->credentials->version != 1 or $credentials->credentials->version != 2 or $credentials->credentials->version !=3) {
            $credentials->credentials->version = 2;
        }
        switch ($credentials->credentials->version) {
            case '1':
                $string = @snmpget($ip, $credentials->credentials->community, $oid, $timeout, $retries);
                break;

            case '2':
                $string = @snmp2_get($ip, $credentials->credentials->community, $oid, $timeout, $retries);
                break;

            case '3':
                $sec_name = $credentials->credentials->security_name ?: '';
                $sec_level = $credentials->credentials->security_level ?: '';
                $auth_protocol = $credentials->credentials->authentication_protocol ?: '';
                $auth_passphrase = $credentials->credentials->authentication_passphrase ?: '';
                $priv_protocol = $credentials->credentials->privacy_protocol ?: '';
                $priv_passphrase = $credentials->credentials->privacy_passphrase ?: '';
                $string = @snmp3_get( $ip, $sec_name ,$sec_level ,$auth_protocol ,$auth_passphrase ,$priv_protocol , $priv_passphrase , $oid, $timeout, $retries);
                break;
            
            default:
                return false;
                break;
        }
        if (empty($string) and $string != '0') {
            return false;
        }
        if ($string == '""') {
            $string = '';
        }
        $string = trim($string);
        # if the first character is a '.', remove it.
        if (strpos($string, '.') === 0) {
            $string = substr($string, 1);
        }
        // remove the first and last characters if they are "
        if (substr($string, 0, 1) == "\"") {
            $string = substr($string, 1, strlen($string));
        }
        if (substr($string, -1, 1) == "\"") {
            $string = substr($string, 0, strlen($string)-1);
        }
        // remove some return strings
        if (strpos(strtolower($string), '/etc/snmp') !== false or
            strpos(strtolower($string), 'no such instance') !== false or
            strpos(strtolower($string), 'no such object') !== false or
            strpos(strtolower($string), 'not set') !== false or
            strpos(strtolower($string), 'unknown value type') !== false) {
            $string = '';
        }
        // remove any quotation marks
        $string = str_replace('"', ' ', $string);
        // replace any line breaks with spaces
        $string = str_replace(array("\r", "\n"), " ", $string);
        return (string)$string;
    }
}

if (!function_exists('my_snmp_walk')) {
    function my_snmp_walk($ip, $credentials, $oid)
    {
        $timeout = '30000000';
        $retries = '0';
        switch ($credentials->credentials->version) {
            case '1':
                $array = @snmpwalk($ip, $credentials->credentials->community, $oid, $timeout, $retries);
                break;

            case '2':
                $array = @snmp2_walk($ip, $credentials->credentials->community, $oid, $timeout, $retries);
                break;

            case '3':
                $sec_name = $credentials->credentials->security_name ?: '';
                $sec_level = $credentials->credentials->security_level ?: '';
                $auth_protocol = $credentials->credentials->authentication_protocol ?: '';
                $auth_passphrase = $credentials->credentials->authentication_passphrase ?: '';
                $priv_protocol = $credentials->credentials->privacy_protocol ?: '';
                $priv_passphrase = $credentials->credentials->privacy_passphrase ?: '';
                $array = @snmp3_walk( $ip, $sec_name ,$sec_level ,$auth_protocol ,$auth_passphrase ,$priv_protocol , $priv_passphrase , $oid, $timeout, $retries);
                break;
            
            default:
                return false;
                break;
        }
        if (!is_array($array)) {
            return false;
        }
        foreach ($array as $i => $value) {
            $array[$i] = trim($array[$i]);
            if ($array[$i] == '""') {
                $array[$i] = '';
            }
            if (strpos($array[$i], '.') === 0) {
                $array[$i] = substr($array[$i], 1);
            }
            // remove the first and last characters if they are "
            if (substr($array[$i], 0, 1) == "\"") {
                $array[$i] = substr($array[$i], 1, strlen($array[$i]));
            }
            if (substr($array[$i], -1, 1) == "\"") {
                $array[$i] = substr($array[$i], 0, strlen($array[$i])-1);
            }
            // remove some return strings
            if (strpos(strtolower($array[$i]), '/etc/snmp') !== false or
                strpos(strtolower($array[$i]), 'no such instance') !== false or
                strpos(strtolower($array[$i]), 'no such object') !== false or
                strpos(strtolower($array[$i]), 'not set') !== false or
                strpos(strtolower($array[$i]), 'unknown value type') !== false) {
                $array[$i] = '';
            }
            // remove any quotation marks
            $array[$i] = str_replace('"', ' ', $array[$i]);
            // replace any line breaks with spaces
            $array[$i] = str_replace(array("\r", "\n"), " ", $array[$i]);
        }
        return $array;
    }
}


if (!function_exists('my_snmp_real_walk')) {
    function my_snmp_real_walk($ip, $credentials, $oid)
    {
        $timeout = '30000000';
        $retries = '0';
        switch ($credentials->credentials->version) {
            case '1':
                $array = @snmprealwalk($ip, $credentials->credentials->community, $oid, $timeout, $retries);
                break;

            case '2':
                $array = @snmp2_real_walk($ip, $credentials->credentials->community, $oid, $timeout, $retries);
                break;

            case '3':
                $sec_name = $credentials->credentials->security_name ?: '';
                $sec_level = $credentials->credentials->security_level ?: '';
                $auth_protocol = $credentials->credentials->authentication_protocol ?: '';
                $auth_passphrase = $credentials->credentials->authentication_passphrase ?: '';
                $priv_protocol = $credentials->credentials->privacy_protocol ?: '';
                $priv_passphrase = $credentials->credentials->privacy_passphrase ?: '';
                $array = @snmp3_real_walk( $ip, $sec_name ,$sec_level ,$auth_protocol ,$auth_passphrase ,$priv_protocol , $priv_passphrase , $oid, $timeout, $retries);
                break;
            
            default:
                return false;
                break;
        }
        if (!is_array($array)) {
            return false;
        }
        foreach ($array as $i => $value) {
            $array[$i] = trim($array[$i]);
            if ($array[$i] == '""') {
                $array[$i] = '';
            }
            if (strpos($array[$i], '.') === 0) {
                $array[$i] = substr($array[$i], 1);
            }
            // remove the first and last characters if they are "
            if (substr($array[$i], 0, 1) == "\"") {
                $array[$i] = substr($array[$i], 1, strlen($array[$i]));
            }
            if (substr($array[$i], -1, 1) == "\"") {
                $array[$i] = substr($array[$i], 0, strlen($array[$i])-1);
            }
            // remove some return strings
            if (strpos(strtolower($array[$i]), '/etc/snmp') !== false or
                strpos(strtolower($array[$i]), 'no such instance') !== false or
                strpos(strtolower($array[$i]), 'no such object') !== false or
                strpos(strtolower($array[$i]), 'not set') !== false or
                strpos(strtolower($array[$i]), 'unknown value type') !== false) {
                $array[$i] = '';
            }
            // remove any quotation marks
            $array[$i] = str_replace('"', ' ', $array[$i]);
            // replace any line breaks with spaces
            $array[$i] = str_replace(array("\r", "\n"), " ", $array[$i]);
        }
        return $array;
    }
}


if (!function_exists('snmp_audit')) {
    function snmp_audit($ip, $credentials, $display)
    {
        error_reporting(E_ALL);
        $CI = & get_instance();

        $log = new stdClass();
        $log->file = 'system';
        $log->severity = 7;
        if ($display == 'y') {
            $log->display = 'y';
        } else {
            $log->display = 'n';
        }

        if (!extension_loaded('snmp')) {
            $log->message = 'SNMP PHP function not loaded hence not attempting to run snmp_helper::snmp_audit function';
            $log->severity = 5;
            stdlog($log);
            unset($log);
            return false;
        } else {
            $log->message = 'SNMP PHP function loaded and attempting to run snmp_helper::snmp_audit function';
            stdlog($log);
        }

        # we need an ip address
        if (empty($ip)) {
            $log->message = 'SNMP command received no ip address';
            $log->severity = 5;
            stdlog($log);
            unset($log);
            return false;
        } elseif (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'SNMP command received invalid ip address';
            $log->severity = 5;
            stdlog($log);
            unset($log);
            return false;
        } else {
            $log->message = 'snmp_helper::snmp_audit function received ip ' . $ip;
            stdlog($log);
        }

        if (empty($credentials) or !is_object($credentials)) {
            $log->message = 'SNMP snmp_helper::snmp_audit received no credentials for ' . $ip;
            $log->severity = 5;
            stdlog($log);
            unset($log);
            return false;
        } else {
            $log->message = 'snmp_helper::snmp_audit function received credentials for ip ' . $ip;
            stdlog($log);
        }

        # new in 1.5 - remove the type from the returned SNMP query.
        # this affects the snmp_clean function in this file
        snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
        snmp_set_oid_output_format(SNMP_OID_OUTPUT_NUMERIC);

        $details = new stdClass();
        $module = new stdclass();
        $return_ips = new stdClass();
        $return_ips->item = array();

        $details->ip = (string)$ip;
        $details->manufacturer = '';
        $details->serial = '';
        $details->model = '';
        $details->type = '';
        $details->sysDescr = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
        $details->description = $details->sysDescr;
        $details->sysContact =  my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.4.0");
        $details->contact = $details->sysContact;
        $details->sysName = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.5.0");
        $details->hostname = $details->sysName;
        $details->name = $details->sysName;
        $details->sysLocation = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.6.0");
        $details->location = $details->sysLocation;

        // uptime
        $details->sysUpTime = intval(my_snmp_get($ip, $credentials, "1.3.6.1.6.3.10.2.1.3.0")) * 100;
        if (empty($details->sysUpTime)) {
            $details->sysUpTime = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.3.0");
        }
        if (empty($details->sysUpTime)) {
            $i = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.3.0");
            if (($i > '') and (strpos($i, ")") !== false)) {
                $j = explode(")", $i);
                $details->uptime = intval(trim($j[1]) * 24 * 60 * 60);
            } else {
                $details->uptime = '';
            }
        }

        // OID
        $details->sysObjectID = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.2.0");
        $details->snmp_oid = $details->sysObjectID;
        if ($details->snmp_oid > '') {
            $details->manufacturer = get_oid($details->snmp_oid);
            if ($details->manufacturer == 'net-snmp') {
                $details->manufacturer = (string)'';
            }
        }
        # sometimes we get an OID, but not enough to specify a manufacturer
        $explode = explode(".", $details->snmp_oid);
        if (!isset($explode[6])) {
            $vendor_oid = 0;
            if (strpos($details->sysDescr, "ZyXEL") !== false) {
                # we have a Zyxel device
                $vendor_oid = 890;
            }
        } else {
            $vendor_oid = intval($explode[6]);
        }
        if (file_exists(BASEPATH.'../application/helpers/snmp_'.$vendor_oid.'_helper.php')) {
            $log->message = 'snmp_helper::snmp_audit is loading the snmp helper for '.$vendor_oid.' when scanning '.$ip;
            stdlog($log);
            unset($get_oid_details);
            include 'snmp_'.$vendor_oid."_helper.php";
            $new_details = $get_oid_details($ip, $credentials, $details->snmp_oid);
            foreach ($new_details as $key => $value) {
                $details->$key = $value;
            }
            unset($new_details);
        } else {
            $log->message = 'snmp_helper::snmp_audit could not load the snmp helper for '.$vendor_oid.' when scanning '.$ip;
            $log->severity = 6;
            stdlog($log);
            $log->severity = 7;
        }
        if (!empty($details->sysDescr) and stripos($details->sysDescr, 'dd-wrt') !== false) {
            $details->os_group = 'Linux';
            $details->os_name = 'DD-WRT';
            $details->type = 'router';
        }
        if (!empty($details->sysDescr) and stripos($details->sysDescr, "Darwin Kernel Version 12") !== false) {
            $details->manufacturer = "Apple Inc";
            $details->os_family = 'Apple OSX';
        }
        if (!empty($details->manufacturer) and (stripos($details->manufacturer, 'tplink') !== false or stripos($details->manufacturer, 'tp-link') !== false)) {
            $details->manufacturer = 'TP-Link Technology Co.,Ltd';
        }
        if (!empty($details->sysDescr) and stripos($details->sysDescr, 'buffalo terastation') !== false) {
            $details->manufacturer = 'Buffalo';
            $details->model = 'TeraStation';
            $details->type = 'nas';
        }
        if (!empty($details->sysDescr) and (stripos($details->sysDescr, 'synology') !== false or stripos($details->sysDescr, 'diskstation') !== false)) {
            $details->manufacturer = 'Synology';
            $temp = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6574.1.5.1.0");
            $details->model = trim('DiskStation '.$temp);
            $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6574.1.5.2.0");
            $details->type = 'nas';
            $details->os_group = 'Linux';
            $details->os_family = 'Synology DSM';
            $details->os_name = 'Synology '.my_snmp_get($ip, $credentials, "1.3.6.1.4.1.6574.1.5.3.0");
        }
        // guess at manufacturer using entity mib
        if (empty($details->manufacturer)) {
            $details->manufacturer = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.12.1");
        }
        // guess at model using entity mib
        if (empty($details->model)) {
            $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.13");
        }
        // guess at model using host resources mib
        if (empty($details->model)) {
            $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.25.3.2.1.3.1");
        }

        // serial
        if (empty($details->serial)) {
            $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11");
        }
        if (empty($details->serial)) {
            $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1");
        }
        if (empty($details->serial)) {
            $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.11.1.0");
        }
        # generic snmp
        if (empty($details->serial)) {
            $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.43.5.1.1.17.1");
        }
        # below is another generic attempt - works for my NetGear Cable Modem
        if (empty($details->serial)) {
            $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.4491.2.4.1.1.1.3.0");
        }
        $log->message = 'snmp_helper::snmp_audit thinks '.$ip.' is a type:'.$details->type . ' model:' . $details->model . ' serial:' . $details->serial;
        stdlog($log);

        // subnet
        if (empty($details->subnet)) {
            $details->subnet = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.4.20.1.3.".$details->ip);
        }

        // mac address
        if (empty($details->mac_address)) {
            $interface_number = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.4.20.1.2.".$ip);
            snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
            $details->mac_address = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.2.2.1.6.".$interface_number);
            snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
            $details->mac_address = format_mac($details->mac_address);
        }
        // last attempt at a MAC - just use whatever's in the first interface MAC
        if (empty($details->mac_address)) {
            snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
            $details->mac_address = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.2.2.1.6.1");
            snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
            $details->mac_address = format_mac($details->mac_address);
        }
        $log->message = 'snmp_helper::snmp_audit MAC Address for '.$ip.' is '.$details->mac_address;
        stdlog($log);

        // type
        if (empty($details->type) or $details->type == 'network printer') {
            $h = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.25.3.2.1.2.1");
            if ($h == '1.3.6.1.2.1.25.3.1.5') {
                # we have a printer
                $details->type = 'network printer';
                $i = my_snmp_walk($ip, $credentials, "1.3.6.1.2.1.43.13.4.1.10.1");
                if (count($i) > 0) {
                    $details->printer_duplex = 'n';
                    for ($k = 0; $k < count($i); $k++) {
                        if (mb_strpos($i[$k], "Duplex") !== false) {
                            $details->printer_duplex = 'y';
                        }
                    }
                }
                if (empty($details->manufacturer)) {
                    $hex = my_snmp_walk($ip, $credentials, "1.3.6.1.2.1.43.8.2.1.14.1");
                    if (count($hex) > 0) {
                        if (isset($hex[1])) {
                            if (mb_strpos($hex[1], "Hex-STRING: ") !== false) {
                                $hex[1] = str_replace("Hex-STRING: ", "", $hex[1]);
                                for ($i = 0; $i<strlen($hex[1]); $i++) {
                                    $details->manufacturer .= chr(hexdec(substr($hex[1], $i, 2)));
                                }
                            } else {
                                $details->manufacturer = str_replace("STRING: ", "", $hex[1]);
                                $details->manufacturer = str_replace('"', '', $details->manufacturer);
                            }
                        }
                    }
                }
                $details->printer_color = 'n';
                $i = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.43.11.1.1.6.1.2");
                if (strpos(strtolower($i), "cartridge") !== false) {
                    # it's likely this is a colour printer
                    $details->printer_color = 'y';
                }
            } else {
                # If the device is a Switch, the OID 1.3.6.1.2.1.17.1.2.0 is an integer and
                #                                OID 1.3.6.1.2.1.4.1.0    should have a value of 2
                $i = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.17.1.2.0");
                $j = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.4.1.0");
                if (($i == intval($i)) and ($j == '2')) {
                    $details->type = 'switch';
                }

                # If the device is a Router, the OID 1.3.6.1.2.1.4.1.0 should have a value of 1 (already read above)
                if (empty($details->type)) {
                    if ($i == '1') {
                        $details->type = 'router';
                    }
                }

                # If the device is a Printer, the OID 1.3.6.1.2.1.43.5.1.1.1.1 should have a value
                #if (!isset($details->type) or $details->type == '') {
                $i = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.43.5.1.1.1.1");
                if (strpos(strtolower($i), "counter32") !== false) {
                    $details->type = 'network printer';
                    // printer duplex
                    $details->printer_duplex = '';
                    $i = my_snmp_walk($ip, $credentials, "1.3.6.1.2.1.43.13.4.1.10.1");
                    if (count($i) > 0) {
                        $details->printer_duplex = 'n';
                        for ($k = 0; $k < count($i); $k++) {
                            if (mb_strpos($i[$k], "Duplex") !== false) {
                                $details->printer_duplex = 'y';
                            }
                        }
                    }
                    if (empty($details->manufacturer)) {
                        $hex = my_snmp_walk($ip, $credentials, "1.3.6.1.2.1.43.8.2.1.14.1");
                        if (count($hex) > 0) {
                            if (isset($hex[1])) {
                                if (mb_strpos($hex[1], "Hex-STRING: ") !== false) {
                                    $hex[1] = str_replace("Hex-STRING: ", "", $hex[1]);
                                    for ($i = 0; $i<strlen($hex[1]); $i++) {
                                        $details->manufacturer .= chr(hexdec(substr($hex[1], $i, 2)));
                                    }
                                } else {
                                    $details->manufacturer = str_replace("STRING: ", "", $hex[1]);
                                    $details->manufacturer = str_replace('"', '', $details->manufacturer);
                                }
                            }
                        }
                    }
                    $details->printer_color = 'n';
                    $i = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.43.11.1.1.6.1.2");
                    if (strpos(strtolower($i), "cartridge") !== false) {
                        # it's likely this is a colour printer
                        $details->printer_color = 'y';
                    }
                }
            }
        }

        // modules - NOTE, we call these 'entities' in the web interface
        $log->message = 'snmp_helper::snmp_audit module retrieval for '.$ip.' starting';
        stdlog($log);
        $modules = array();
        $modules_list = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.47.1.1.1.1.2");
        if (isset($modules_list) and is_array($modules_list) and count($modules_list) > 0) {
            $log->message = 'snmp_helper::snmp_audit module count for '.$ip.' is '.count($modules_list);
            stdlog($log);

            $log->message = 'snmp_helper::snmp_audit object_id retrieval for '.$ip.' starting';
            stdlog($log);
            $temp_object_id = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.3');

            $log->message = 'snmp_helper::snmp_audit contained_in retrieval for '.$ip.' starting';
            stdlog($log);
            $temp_contained_in = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.4');

            $log->message = 'snmp_helper::snmp_audit class retrieval for '.$ip.' starting';
            stdlog($log);
            $temp_class = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.5');

            $log->message = 'snmp_helper::snmp_audit hardware_revision retrieval for '.$ip.' starting';
            stdlog($log);
            $temp_hardware_revision = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.8');

            $log->message = 'snmp_helper::snmp_audit firmware_revision retrieval for '.$ip.' starting';
            stdlog($log);
            $temp_firmware_revision = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.9');

            $log->message = 'snmp_helper::snmp_audit software_revision retrieval for '.$ip.' starting';
            stdlog($log);
            $temp_software_revision = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.10');

            $log->message = 'snmp_helper::snmp_audit serial_number retrieval for '.$ip.' starting';
            stdlog($log);
            $temp_serial_number = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.11');

            $log->message = 'snmp_helper::snmp_audit asset_id retrieval for '.$ip.' starting';
            stdlog($log);
            $temp_asset_id = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.15');

            $log->message = 'snmp_helper::snmp_audit is_fru retrieval for '.$ip.' starting';
            stdlog($log);
            $temp_is_fru = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.16');

            foreach ($modules_list as $key => $value) {
                $log->message = 'snmp_helper::snmp_audit processing module '. $value .' for '.$ip.' starting';
                stdlog($log);

                $module = new stdClass();
                $module->description = $value;
                $module->module_index = str_replace('.1.3.6.1.2.1.47.1.1.1.1.2.', '', $key);
                $module->object_ident = $temp_object_id['.1.3.6.1.2.1.47.1.1.1.1.3.'.$module->module_index];
                $module->contained_in = $temp_contained_in['.1.3.6.1.2.1.47.1.1.1.1.4.'.$module->module_index];
                $module->class = $temp_class['.1.3.6.1.2.1.47.1.1.1.1.5.'.$module->module_index];
                $module->hardware_revision = $temp_hardware_revision['.1.3.6.1.2.1.47.1.1.1.1.8.'.$module->module_index];
                $module->firmware_revision = $temp_firmware_revision['.1.3.6.1.2.1.47.1.1.1.1.9.'.$module->module_index];
                $module->software_revision = $temp_software_revision['.1.3.6.1.2.1.47.1.1.1.1.10.'.$module->module_index];
                $module->serial = $temp_serial_number['.1.3.6.1.2.1.47.1.1.1.1.11.'.$module->module_index];
                $module->asset_ident = $temp_asset_id['.1.3.6.1.2.1.47.1.1.1.1.15.'.$module->module_index];
                $module->is_fru = $temp_is_fru['.1.3.6.1.2.1.47.1.1.1.1.16.'.$module->module_index];


                if ((string) $module->is_fru == '1') {
                    $module->is_fru = 'y';
                } else {
                    $module->is_fru = 'n';
                }

                $module->class_text = 'unknown';
                if ($module->class == '1') {
                    $module->class_text = 'other';
                }
                if ($module->class == '2') {
                    $module->class_text = 'unknown';
                }
                if ($module->class == '3') {
                    $module->class_text = 'chassis';
                }
                if ($module->class == '4') {
                    $module->class_text = 'backplane';
                }
                if ($module->class == '5') {
                    $module->class_text = 'container';
                }
                if ($module->class == '6') {
                    $module->class_text = 'powerSupply';
                }
                if ($module->class == '7') {
                    $module->class_text = 'fan';
                }
                if ($module->class == '8') {
                    $module->class_text = 'sensor';
                }
                if ($module->class == '9') {
                    $module->class_text = 'module';
                }
                if ($module->class == '10') {
                    $module->class_text = 'port';
                }
                if ($module->class == '11') {
                    $module->class_text = 'stack';
                }
                if ($module->class == '12') {
                    $module->class_text = 'cpu';
                }

                $modules[] = $module;
            }
        }
        $log->message = 'snmp_helper::snmp_audit module retrieval for '.$ip.' complete';
        stdlog($log);

        // network intereface details
        $interfaces = array();
        $interfaces_filtered = array();
        $interfaces = my_snmp_walk($ip, $credentials, "1.3.6.1.2.1.2.2.1.1");
        $log->message = 'snmp_helper::snmp_audit interface count for '.$ip.' is '.count($interfaces);
        stdlog($log);
        if (is_array($interfaces) and count($interfaces) > 0) {
            $log->message = 'snmp_helper::snmp_audit models retrieval for '.$ip.' starting';
            stdlog($log);
            $models = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.2.2.1.2");

            $log->message = 'snmp_helper::snmp_audit types retrieval for '.$ip.' starting';
            stdlog($log);
            $types = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.2.2.1.3");

            $log->message = 'snmp_helper::snmp_audit speeds retrieval for '.$ip.' starting';
            stdlog($log);
            $speeds = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.2.2.1.5");

            $log->message = 'snmp_helper::snmp_audit mac_addresses retrieval for '.$ip.' starting';
            stdlog($log);
            $mac_addresses = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.2.2.1.6");

            $log->message = 'snmp_helper::snmp_audit ip_enableds retrieval for '.$ip.' starting';
            stdlog($log);
            $ip_enableds = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.2.2.1.8");

            $log->message = 'snmp_helper::snmp_audit ip_addresses retrieval for '.$ip.' starting';
            stdlog($log);
            $ip_addresses = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.4.20.1.2");

            $log->message = 'snmp_helper::snmp_audit ifAdminStatus retrieval for '.$ip.' starting';
            stdlog($log);
            $ifAdminStatus = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.2.2.1.7");

            $log->message = 'snmp_helper::snmp_audit ifLastChange retrieval for '.$ip.' starting';
            stdlog($log);
            $ifLastChange = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.2.2.1.9");

            if (isset($details->os_group) and $details->os_group == "VMware") {
                $log->message = 'snmp_helper::snmp_audit ip_addresses_2 retrieval for '.$ip.' starting';
                stdlog($log);
                $ip_addresses_2 = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.4.34.1.3.1.4");
            }

            $log->message = 'snmp_helper::snmp_audit subnets retrieval for '.$ip.' starting';
            stdlog($log);
            $subnets = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.4.20.1.3");

            $log->message = 'snmp_helper::snmp_audit connection_ids retrieval for '.$ip.' starting';
            stdlog($log);
            $connection_ids = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.31.1.1.1.1");

            $log->message = 'snmp_helper::snmp_audit aliases retrieval for '.$ip.' starting';
            stdlog($log);
            $aliases = my_snmp_real_walk($ip, $credentials, "1.3.6.1.2.1.31.1.1.1.18");

            foreach ($interfaces as $key => $value) {
                $log->message = 'snmp_helper::snmp_audit processing interface '. $value .' for '.$ip.' starting';
                stdlog($log);
                $interface = new stdclass();
                $interface->net_index = $value;

                snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
                $interface->mac = format_mac(my_snmp_get($ip, $credentials, "1.3.6.1.2.1.2.2.1.6.".$interface->net_index));
                snmp_set_valueretrieval(SNMP_VALUE_PLAIN);

                if (!isset($interface->mac)) {
                    $interface->mac = (string)'';
                }

                $interface->model = @$models[".1.3.6.1.2.1.2.2.1.2.".$interface->net_index];
                $interface->description = $interface->model;
                $interface->connection = @$connection_ids[".1.3.6.1.2.1.31.1.1.1.1.".$interface->net_index];
                $interface->alias = @$aliases[".1.3.6.1.2.1.31.1.1.1.18.".$interface->net_index];
                $interface->type = @interface_type(@$types[".1.3.6.1.2.1.2.2.1.3.".$interface->net_index]);
                $interface->ip_enabled = @ip_enabled($ip_enableds[".1.3.6.1.2.1.2.2.1.8.".$interface->net_index]);
                $interface->ifadminstatus = @if_admin_status($ifAdminStatus[".1.3.6.1.2.1.2.2.1.7.".$interface->net_index]);
                $interface->iflastchange = @$ifLastChange[".1.3.6.1.2.1.2.2.1.9.".$interface->net_index];
                $interface->speed = @$speeds[".1.3.6.1.2.1.2.2.1.5.".$interface->net_index];
                $interface->manufacturer = '';
                $interface->connection_status = '';
                $interface->dhcp_enabled = '';
                $interface->dhcp_server = '';
                $interface->dhcp_lease_obtained = '';
                $interface->dhcp_lease_expires = '';
                $interface->dns_host_name = '';
                $interface->dns_domain = '';
                $interface->dns_domain_reg_enabled = '';
                $interface->dns_server = '';
                if (is_array($ip_addresses) and count($ip_addresses > 0)) {
                    foreach ($ip_addresses as $each_key => $each_value) {
                        if ($each_value == $interface->net_index) {
                            $new_ip = new stdclass();
                            $new_ip->net_index = $interface->net_index;
                            $new_ip->ip = str_replace(".1.3.6.1.2.1.4.20.1.2.", "", $each_key);
                            $new_ip->mac = $interface->mac;
                            $new_ip->netmask = @$subnets[".1.3.6.1.2.1.4.20.1.3.".$new_ip->ip];
                            $new_ip->version = '4';
                            if ($new_ip->ip != '127.0.0.1' and $new_ip->ip != '127.0.1.1') {
                                $return_ips->item[] = $new_ip;
                            }
                            $new_ip = null;
                        }
                    }
                }
                if (isset($ip_addresses_2) and is_array($ip_addresses_2) and isset($details->os_group) and $details->os_group == "VMware") {
                    // likely we have a VMware ESX box - get what we can
                    foreach ($ip_addresses_2 as $each_key => $each_value) {
                        $new_ip = new stdClass();
                        $new_ip->net_index = $each_value;
                        $new_ip->ip = str_replace(".1.3.6.1.2.1.4.34.1.3.1.4.", "", $each_key);
                        $new_ip->netmask = '';
                        $new_ip->version = '4';
                        if ($new_ip->net_index == $interface->net_index) {
                            $new_ip->mac = $interface->mac;
                            if ($new_ip->ip != '127.0.0.1' and $new_ip->ip != '127.0.1.1') {
                                $return_ips->item[] = $new_ip;
                            }
                        }
                        $new_ip = null;
                    }
                }
                if (isset($details->os_group) and $details->os_group == 'Windows') {
                    if (isset($interface->ip_addresses) and count($interface->ip_addresses) > 0) {
                        if (strpos(strtolower($interface->type), 'loopback') === false) {
                            $interfaces_filtered[] = $interface;
                        }
                    }
                } else {
                    if (strtolower($interface->type != 'software loopback')) {
                        $interfaces_filtered[] = $interface;
                    }
                }
            }
        } // end of network interfaces

        // Virtual Guests
        $guests = array();
        if ($vendor_oid == 6876) {
            if (file_exists(BASEPATH.'../application/helpers/snmp_6876_2_helper.php')) {
                $log->message = 'snmp_helper::snmp_audit is loading the model helper for VMware virtual guests';
                stdlog($log);
                include 'snmp_6876_2_helper.php';
            }
        }

        $return_array = array('details' => $details, 'interfaces' => $interfaces_filtered, 'guests' => $guests, 'modules' => $modules, 'ip' => $return_ips);
        return($return_array);
}

    function format_mac($mac_address)
    {
        # set to lower case
        $mac_address = strtolower($mac_address);
        # remove any quotes
        $mac_address = str_replace('"', ' ', $mac_address);
        $mac_address = str_replace("'", " ", $mac_address);
        # some strings are returned as 'hex-string'
        if (strrpos($mac_address, 'hex-string') !== false) {
            $mac_address = str_replace('hex-string:', '', $mac_address);
        }
        # some strings are returned as 'string'
        if (strrpos($mac_address, 'string') !== false) {
            $mac_address = str_replace('string:', '', $mac_address);
        }
        # trim any unrequired beginning or ending spaces
        $mac_address = trim($mac_address);
        # check for a string thus "ab cd ef"
        if (substr_count($mac_address, ' ') > 0) {
            $mac_address = str_replace(' ', ':', $mac_address);
        }
        # check for a substring thus "abcdef"
        if (substr_count($mac_address, ' ') == 0 and substr_count($mac_address, ':') == 0 and strlen($mac_address) == 12) {
            $mac_address = substr($mac_address, 0, 2).':'.substr($mac_address, 2, 2).':'.
                           substr($mac_address, 4, 2).':'.substr($mac_address, 6, 2).':'.
                           substr($mac_address, 8, 2).':'.substr($mac_address, 10, 2);
        }
        if (substr_count($mac_address, ':') != 0) {
            # split the string by :
            $mymac = explode(":", $mac_address);
            # for each section, make sure it's padded with a 0.
            for ($i = 0; $i<count($mymac); $i++) {
                $mymac[$i] = mb_substr("00".$mymac[$i], -2);
            }
            # join it back together
            $mac_address = implode(":", $mymac);
        }

        return($mac_address);
    }

    function ip_enabled($ip_enabled)
    {
        switch ($ip_enabled) {
            case '1':
                $ip_enabled = "up";
                break;

            case '2':
                $ip_enabled = "down";
                break;

            case '3':
                $ip_enabled = "testing";
                break;

            case '4':
                $ip_enabled = "unknown";
                break;

            case '5':
                $ip_enabled = "dormant";
                break;

            case '6':
                $ip_enabled = "notpresent";
                break;

            case '7':
                $ip_enabled = "lowerlayerdown";
                break;

            default:
                $ip_enabled = "up";
                break;
        }

        return $ip_enabled;
    }

    function if_admin_status($ifadminstatus)
    {
        switch ($ifadminstatus) {
            case '1':
                $ifadminstatus = "up";
                break;

            case '2':
                $ifadminstatus = "down";
                break;

            case '3':
                $ifadminstatus = "testing";
                break;

            default:
                $ifadminstatus = "up";
                break;
        }

        return $ifadminstatus;
    }

    function interface_type($int_type)
    {
        $i = (string) intval($int_type);
        if ($int_type != $i) {
            $int_type = substr($int_type, strpos($int_type, "(")+1);
            $int_type = substr($int_type, 0, strpos($int_type, ")"));
        }
        switch ($int_type) {
            case '1':
                $int_type = 'other';
                break;
            case '2':
                $int_type = 'regular1822';
                break;
            case '3':
                $int_type = 'hdh1822';
                break;
            case '4':
                $int_type = 'ddnX25';
                break;
            case '5':
                $int_type = 'rfc877x25';
                break;
            case '6':
                $int_type = 'ethernet Csmacd';
                $int_type = 'ethernet';
                break;
            case '7':
                $int_type = 'iso88023 Csmacd';
                $int_type = 'iso88023';
                break;
            case '8':
                $int_type = 'iso88024TokenBus';
                break;
            case '9':
                $int_type = 'iso88025TokenRing';
                break;
            case '10':
                $int_type = 'iso88026Man';
                break;
            case '11':
                $int_type = 'starLan';
                break;
            case '12':
                $int_type = 'proteon10Mbit';
                break;
            case '13':
                $int_type = 'proteon80Mbit';
                break;
            case '14':
                $int_type = 'hyperchannel';
                break;
            case '15':
                $int_type = 'fddi';
                break;
            case '16':
                $int_type = 'lapb';
                break;
            case '17':
                $int_type = 'sdlc';
                break;
            case '18':
                $int_type = 'ds1';
                break;
            case '19':
                $int_type = 'e1';
                break;
            case '20':
                $int_type = 'basic ISDN';
                break;
            case '21':
                $int_type = 'primary ISDN';
                break;
            case '22':
                $int_type = 'prop PointToPoint Serial';
                break;
            case '23':
                $int_type = 'ppp';
                break;
            case '24':
                $int_type = 'software loopback';
                break;
            case '25':
                $int_type = 'eon';
                break;
            case '26':
                $int_type = 'ethernet 3Mbit';
                break;
            case '27':
                $int_type = 'nsip';
                break;
            case '28':
                $int_type = 'slip';
                break;
            case '29':
                $int_type = 'ultra';
                break;
            case '30':
                $int_type = 'ds3';
                break;
            case '31':
                $int_type = 'sip';
                break;
            case '32':
                $int_type = 'frameRelay';
                break;
            case '33':
                $int_type = 'rs232';
                break;
            case '34':
                $int_type = 'para';
                break;
            case '35':
                $int_type = 'arcnet';
                break;
            case '36':
                $int_type = 'arcnetPlus';
                break;
            case '37':
                $int_type = 'atm';
                break;
            case '38':
                $int_type = 'miox25';
                break;
            case '39':
                $int_type = 'sonet';
                break;
            case '40':
                $int_type = 'x25ple';
                break;
            case '41':
                $int_type = 'iso88022llc';
                break;
            case '42':
                $int_type = 'localTalk';
                break;
            case '43':
                $int_type = 'smdsDxi';
                break;
            case '44':
                $int_type = 'frameRelayService';
                break;
            case '45':
                $int_type = 'v35';
                break;
            case '46':
                $int_type = 'hssi';
                break;
            case '47':
                $int_type = 'hippi';
                break;
            case '48':
                $int_type = 'modem';
                break;
            case '49':
                $int_type = 'aal5';
                break;
            case '50':
                $int_type = 'sonetPath';
                break;
            case '51':
                $int_type = 'sonetVT';
                break;
            case '52':
                $int_type = 'smdsIcip';
                break;
            case '53':
                $int_type = 'propVirtual';
                $int_type = 'virtual';
                break;
            case '54':
                $int_type = 'propMultiplexor';
                break;
            case '55':
                $int_type = 'ieee80212';
                break;
            case '56':
                $int_type = 'fibreChannel';
                break;
            case '57':
                $int_type = 'hippiInterface';
                break;
            case '58':
                $int_type = 'frameRelayInterconnect';
                break;
            case '59':
                $int_type = 'aflane8023';
                break;
            case '60':
                $int_type = 'aflane8025';
                break;
            case '61':
                $int_type = 'cctEmul';
                break;
            case '62':
                $int_type = 'fastEther';
                break;
            case '63':
                $int_type = 'isdn';
                break;
            case '64':
                $int_type = 'v11';
                break;
            case '65':
                $int_type = 'v36';
                break;
            case '66':
                $int_type = 'g703at64k';
                break;
            case '67':
                $int_type = 'g703at2mb';
                break;
            case '68':
                $int_type = 'qllc';
                break;
            case '69':
                $int_type = 'fastEtherFX';
                break;
            case '70':
                $int_type = 'channel';
                break;
            case '71':
                $int_type = 'ieee 80211';
                break;
            case '72':
                $int_type = 'ibm370parChan';
                break;
            case '73':
                $int_type = 'escon';
                break;
            case '74':
                $int_type = 'dlsw';
                break;
            case '75':
                $int_type = 'isdns';
                break;
            case '76':
                $int_type = 'isdnu';
                break;
            case '77':
                $int_type = 'lapd';
                break;
            case '78':
                $int_type = 'ipSwitch';
                break;
            case '79':
                $int_type = 'rsrb';
                break;
            case '80':
                $int_type = 'atmLogical';
                break;
            case '81':
                $int_type = 'ds0';
                break;
            case '82':
                $int_type = 'ds0Bundle';
                break;
            case '83':
                $int_type = 'bsc';
                break;
            case '84':
                $int_type = 'async';
                break;
            case '85':
                $int_type = 'cnr';
                break;
            case '86':
                $int_type = 'iso88025Dtr';
                break;
            case '87':
                $int_type = 'eplrs';
                break;
            case '88':
                $int_type = 'arap';
                break;
            case '89':
                $int_type = 'propCnls';
                break;
            case '90':
                $int_type = 'hostPad';
                break;
            case '91':
                $int_type = 'termPad';
                break;
            case '92':
                $int_type = 'frameRelayMPI';
                break;
            case '93':
                $int_type = 'x213';
                break;
            case '94':
                $int_type = 'adsl';
                break;
            case '95':
                $int_type = 'radsl';
                break;
            case '96':
                $int_type = 'sdsl';
                break;
            case '97':
                $int_type = 'vdsl';
                break;
            case '98':
                $int_type = 'iso88025CRFPInt';
                break;
            case '99':
                $int_type = 'myrinet';
                break;
            case '100':
                $int_type = 'voiceEM';
                break;
            case '101':
                $int_type = 'voiceFXO';
                break;
            case '102':
                $int_type = 'voiceFXS';
                break;
            case '103':
                $int_type = 'voiceEncap';
                break;
            case '104':
                $int_type = 'voiceOverIp';
                break;
            case '105':
                $int_type = 'atmDxi';
                break;
            case '106':
                $int_type = 'atmFuni';
                break;
            case '107':
                $int_type = 'atmIma';
                break;
            case '108':
                $int_type = 'pppMultilinkBundle';
                break;
            case '109':
                $int_type = 'ipOverCdlc';
                break;
            case '110':
                $int_type = 'ipOverClaw';
                break;
            case '111':
                $int_type = 'stackToStack';
                break;
            case '112':
                $int_type = 'virtualIpAddress';
                break;
            case '113':
                $int_type = 'mpc';
                break;
            case '114':
                $int_type = 'ipOverAtm';
                break;
            case '115':
                $int_type = 'iso88025Fiber';
                break;
            case '116':
                $int_type = 'tdlc';
                break;
            case '117':
                $int_type = 'gigabitEthernet';
                break;
            case '118':
                $int_type = 'hdlc';
                break;
            case '119':
                $int_type = 'lapf';
                break;
            case '120':
                $int_type = 'v37';
                break;
            case '121':
                $int_type = 'x25mlp';
                break;
            case '122':
                $int_type = 'x25huntGroup';
                break;
            case '123':
                $int_type = 'trasnpHdlc';
                break;
            case '124':
                $int_type = 'interleave';
                break;
            case '125':
                $int_type = 'fast';
                break;
            case '126':
                $int_type = 'ip';
                break;
            case '127':
                $int_type = 'docsCableMaclayer';
                break;
            case '128':
                $int_type = 'docsCableDownstream';
                break;
            case '129':
                $int_type = 'docsCableUpstream';
                break;
            case '130':
                $int_type = 'a12MppSwitch';
                break;
            case '131':
                $int_type = 'tunnel';
                break;
            case '132':
                $int_type = 'coffee';
                break;
            case '133':
                $int_type = 'ces';
                break;
            case '134':
                $int_type = 'atmSubInterface';
                break;
            case '135':
                $int_type = 'l2vlan';
                break;
            case '136':
                $int_type = 'l3ipvlan';
                break;
            case '137':
                $int_type = 'l3ipxvlan';
                break;
            case '138':
                $int_type = 'digitalPowerline';
                break;
            case '139':
                $int_type = 'mediaMailOverIp';
                break;
            case '140':
                $int_type = 'dtm';
                break;
            case '141':
                $int_type = 'dcn';
                break;
            case '142':
                $int_type = 'ipForward';
                break;
            case '143':
                $int_type = 'msdsl';
                break;
            case '144':
                $int_type = 'ieee1394';
                break;
            case '145':
                $int_type = 'if-gsn';
                break;
            case '146':
                $int_type = 'dvbRccMacLayer';
                break;
            case '147':
                $int_type = 'dvbRccDownstream';
                break;
            case '148':
                $int_type = 'dvbRccUpstream';
                break;
            case '149':
                $int_type = 'atmVirtual';
                break;
            case '150':
                $int_type = 'mplsTunnel';
                break;
            case '151':
                $int_type = 'srp';
                break;
            case '152':
                $int_type = 'voiceOverAtm';
                break;
            case '153':
                $int_type = 'voiceOverFrameRelay';
                break;
            case '154':
                $int_type = 'idsl';
                break;
            case '155':
                $int_type = 'compositeLink';
                break;
            case '156':
                $int_type = 'ss7SigLink';
                break;
            case '157':
                $int_type = 'propWirelessP2P';
                break;
            case '158':
                $int_type = 'frForward';
                break;
            case '159':
                $int_type = 'rfc1483';
                break;
            case '160':
                $int_type = 'usb';
                break;
            case '161':
                $int_type = '802.3ad link aggregation';
                break;
            case '162':
                $int_type = 'bgp policy accounting';
                break;
            case '163':
                $int_type = 'frf16MfrBundle';
                break;
            case '164':
                $int_type = 'h323Gatekeeper';
                break;
            case '165':
                $int_type = 'h323Proxy';
                break;
            case '166':
                $int_type = 'mpls';
                break;
            case '167':
                $int_type = 'mfSigLink';
                break;
            case '168':
                $int_type = 'hdsl2';
                break;
            case '169':
                $int_type = 'shdsl';
                break;
            case '170':
                $int_type = 'ds1FDL';
                break;
            case '171':
                $int_type = 'pos';
                break;
            case '172':
                $int_type = 'dvbAsiIn';
                break;
            case '173':
                $int_type = 'dvbAsiOut';
                break;
            case '174':
                $int_type = 'plc';
                break;
            case '175':
                $int_type = 'nfas';
                break;
            case '176':
                $int_type = 'tr008';
                break;
            case '177':
                $int_type = 'gr303RDT';
                break;
            case '178':
                $int_type = 'gr303IDT';
                break;
            case '179':
                $int_type = 'isup';
                break;
            case '180':
                $int_type = 'propDocsWirelessMaclayer';
                break;
            case '181':
                $int_type = 'propDocsWirelessDownstream';
                break;
            case '182':
                $int_type = 'propDocsWirelessUpstream';
                break;
            case '183':
                $int_type = 'hiperlan2';
                break;
            case '184':
                $int_type = 'propBWAp2Mp';
                break;
            case '185':
                $int_type = 'sonetOverheadChannel';
                break;
            case '186':
                $int_type = 'digitalWrapperOverheadChannel';
                break;
            case '187':
                $int_type = 'aal2';
                break;
            case '188':
                $int_type = 'radioMAC';
                break;
            case '189':
                $int_type = 'atmRadio';
                break;
            case '190':
                $int_type = 'imt';
                break;
            case '191':
                $int_type = 'mvl';
                break;
            case '192':
                $int_type = 'reachDSL';
                break;
            case '193':
                $int_type = 'frDlciEndPt';
                break;
            case '194':
                $int_type = 'atmVciEndPt';
                break;
            case '195':
                $int_type = 'opticalChannel';
                break;
            case '196':
                $int_type = 'opticalTransport';
                break;
            case '197':
                $int_type = 'propAtm';
                break;
            case '198':
                $int_type = 'voiceOverCable';
                break;
            case '199':
                $int_type = 'infiniband';
                break;
            case '200':
                $int_type = 'teLink';
                break;
            case '201':
                $int_type = 'q2931';
                break;
            case '202':
                $int_type = 'virtualTg';
                break;
            case '203':
                $int_type = 'sipTg';
                break;
            case '204':
                $int_type = 'sipSig';
                break;
            case '205':
                $int_type = 'docsCableUpstreamChannel';
                break;
            case '206':
                $int_type = 'econet';
                break;
            case '207':
                $int_type = 'pon155';
                break;
            case '208':
                $int_type = 'pon622';
                break;
            case '209':
                $int_type = 'bridge';
                break;
            case '210':
                $int_type = 'linegroup';
                break;
            case '211':
                $int_type = 'voiceEMFGD';
                break;
            case '212':
                $int_type = 'voiceFGDEANA';
                break;
            case '213':
                $int_type = 'voiceDID';
                break;
            case '214':
                $int_type = 'mpegTransport';
                break;
            case '215':
                $int_type = 'sixToFour';
                break;
            case '216':
                $int_type = 'gtp';
                break;
            case '217':
                $int_type = 'pdnEtherLoop1';
                break;
            case '218':
                $int_type = 'pdnEtherLoop2';
                break;
            case '219':
                $int_type = 'opticalChannelGroup';
                break;
            case '220':
                $int_type = 'homepna';
                break;
            case '221':
                $int_type = 'gfp';
                break;
            case '222':
                $int_type = 'ciscoISLvlan';
                break;
            case '223':
                $int_type = 'actelisMetaLOOP';
                break;
            case '224':
                $int_type = 'fcipLink';
                break;
            case '225':
                $int_type = 'rpr';
                break;
            case '226':
                $int_type = 'qam';
                break;
            case '227':
                $int_type = 'lmp';
                break;
            case '228':
                $int_type = 'cblVectaStar';
                break;
            case '229':
                $int_type = 'docsCableMCmtsDownstream';
                break;
            case '230':
                $int_type = 'adsl2';
                break;
            case '231':
                $int_type = 'macSecControlledIF';
                break;
            case '232':
                $int_type = 'macSecUncontrolledIF';
                break;
            case '233':
                $int_type = 'aviciOpticalEther';
                break;
            case '234':
                $int_type = 'atmbond';
                break;
            default:
                $int_type = "unknown";
                break;
        }

        return $int_type;
    }
}
