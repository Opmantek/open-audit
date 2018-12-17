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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version   2.3.2
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

if (! function_exists('scp')) {
    /**
     * The SSH credentials test.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param     ip        The target device's ip address
     *
     * @param     credentials  The credentials used to connect
     *
     * @param     source   The source file
     *
     * @param     destination   The destination file
     *
     * @param     log   The log object
     *
     * @return    false || $return array containing the output and status flag
     */
    function scp($ip = '', $credentials = '', $source = '', $destination = '', $log)
    {

        $log->severity = 7;
        $log->file = 'ssh_helper';
        $log->function = 'scp';
        $log->command = '';
        $log->command_output = '';
        $item_start = microtime(true);
        $CI = & get_instance();
        if (empty($ip)) {
            $log->message = 'No IP supplied to scp function.';
            $log->severity = 3;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to scp function.';
            $log->severity = 3;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to scp function.';
            $log->severity = 3;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (php_uname('s') != 'Windows NT') {
            set_include_path('/usr/local/open-audit/code_igniter/application/third_party/phpseclib');
        } else {
            set_include_path('c:\\xampplite\\open-audit\\code_igniter\\application\\third_party\\phpseclib');
        }
        require_once 'Crypt/RSA.php';
        require_once 'Net/SFTP.php';
        if (!defined('NET_SSH2_LOGGING')) {
            define('NET_SSH2_LOGGING', 2);
        }
        $ssh = new Net_SFTP($ip);
        if (intval($CI->config->config['discovery_ssh_timeout']) > 0) {
            $ssh->setTimeout(intval($CI->config->config['discovery_ssh_timeout']));
        }
        $key = new Crypt_RSA();
        if ($credentials->type == 'ssh_key') {
            // $log->message = 'Using SSH Key to copy file.';
            // discovery_log($log);
            if (!empty($credentials->credentials->password)) {
                $key->setPassword($credentials->credentials->password);
            }
            $key->loadKey($credentials->credentials->ssh_key);
            if ($ssh->login($credentials->credentials->username, $key)) {
                $username = $credentials->credentials->username;
                $password = @$credentials->credentials->password;
            } else {
                $log->message = "Failure, credentials named " . $credentials->name . " not used to log in to $ip.";
                $log->command_status = 'fail';
                $log->command =  $ssh->getLog();
                discovery_log($log);
                return false;
            }
        } else if ($credentials->type == 'ssh') {
            // $log->message = 'Using SSH to copy file.';
            // discovery_log($log);
            $username = $credentials->credentials->username;
            $password = $credentials->credentials->password;
            $log->message = "Success, credentials named " . $credentials->name . " used to log in using sftp to $ip.";
            try {
                $ssh->login($credentials->credentials->username, $credentials->credentials->password);
            } catch (Exception $e) {
                $log->message = "Failure, credentials named " . $username . " not used to log in to $ip.";
                $log->command_status = 'fail';
                $log->severity = 3;
                discovery_log($log);
                return false;
            }
        } else {
            $log->message = 'No credentials of ssh or ssh_key passed to scp function.';
            $log->command_status = 'fail';
            $log->severity = 3;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }

        $status = true;
        $log->command = 'sftp ' . $source . ' to ' . $destination;
        $log->command_status = 'success';
        $log->message = 'Copy file to ' . $ip;
        try {
            $output = $ssh->put($destination, $source, NET_SFTP_LOCAL_FILE);
            $log->command_output = $output;
        } catch (Exception $e) {
            $log->command = $ssh->getLog();
            $log->command_output = $output;
            $log->command_status = 'fail';
            $status = false;
        }
        $ssh->disconnect();
        unset($ssh);
        $log->command_time_to_execute = (microtime(true) - $item_start);
        discovery_log($log);
        unset($log->command, $log->command_status, $log->command_time_to_execute, $log->command_output);
        return($status);
    }
}


if (! function_exists('scp_get')) {
    /**
     * The SSH credentials test.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param     ip        The target device's ip address
     *
     * @param     credentials  The credentials used to connect
     *
     * @param     source   The source file
     *
     * @param     destination   The destination file
     *
     * @param     log   The log object
     *
     * @return    false || $return array containing the output and status flag
     */
    function scp_get($ip = '', $credentials = '', $source = '', $destination = false, $log)
    {

        $log->severity = 7;
        $log->file = 'ssh_helper';
        $log->function = 'scp';
        $log->command = '';
        $log->command_output = '';
        $CI = & get_instance();

        $item_start = microtime(true);
        if (empty($ip)) {
            $log->message = 'No IP supplied to scp_get function.';
            $log->severity = 3;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to scp_get function.';
            $log->severity = 3;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to scp_get function.';
            $log->severity = 3;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (php_uname('s') != 'Windows NT') {
            set_include_path('/usr/local/open-audit/code_igniter/application/third_party/phpseclib');
        } else {
            set_include_path('c:\\xampplite\\open-audit\\code_igniter\\application\\third_party\\phpseclib');
        }
        require_once 'Crypt/RSA.php';
        require_once 'Net/SFTP.php';
        if (!defined('NET_SSH2_LOGGING')) {
            define('NET_SSH2_LOGGING', 2);
        }
        $ssh = new Net_SFTP($ip);
        if (intval($CI->config->config['discovery_ssh_timeout']) > 0) {
            $ssh->setTimeout(intval($CI->config->config['discovery_ssh_timeout']));
        }
        $key = new Crypt_RSA();
        if ($credentials->type == 'ssh_key') {
            // $log->message = 'Using SSH Key to copy file.';
            // discovery_log($log);
            if (!empty($credentials->credentials->password)) {
                $key->setPassword($credentials->credentials->password);
            }
            $key->loadKey($credentials->credentials->ssh_key);
            if ($ssh->login($credentials->credentials->username, $key)) {
                #$log->message = "Success, credentials named " . $credentials->name . " used to log in to $ip.";
                #discovery_log($log);
                $username = $credentials->credentials->username;
                $password = @$credentials->credentials->password;
            } else {
                $log->message = "Failure, credentials named " . $credentials->name . " not used to log in to $ip.";
                $log->command =  $ssh->getLog();
                discovery_log($log);
            }
        } else if ($credentials->type == 'ssh') {
            // $log->message = 'Using SSH to copy file.';
            // discovery_log($log);
            $username = $credentials->credentials->username;
            $password = $credentials->credentials->password;
            # $log->message = "Success, credentials named " . $credentials->name . " used to log in using sftp to $ip.";
            try {
                $ssh->login($credentials->credentials->username, $credentials->credentials->password);
            } catch (Exception $e) {
                $log->message = "Failure, credentials named " . $username . " not used to log in to $ip.";
                $log->severity = 3;
                discovery_log($log);
                $log->severity = 7;
                return false;
            }
        } else {
            $log->message = 'No credentials of ssh or ssh_key passed to scp_get function.';
            $log->severity = 3;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }

        $status = true;
        $log->command = 'sftp ' . $source . ' to ' . $destination;
        $log->command_status = 'success';
        $log->message = 'Copy file from ' . $ip;
        try {
            $output = $ssh->get($source, $destination);
            $log->command_output = $output;
        } catch (Exception $e) {
            $log->command = $ssh->getLog();
            $log->command_output = $output;
            $log->command_status = 'fail';
            $log->message = 'Attempt to copy file from ' . $ip;
            $output = false;
        }
        $ssh->disconnect();
        unset($ssh);
        $log->command_time_to_execute = (microtime(true) - $item_start);
        discovery_log($log);
        unset($log->command, $log->command_status, $log->command_time_to_execute, $log->command_output);
        return($output);
    }
}

if (! function_exists('ssh_command')) {
    /**
     * The SSH credentials test.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param     ip        The target device's ip address
     *
     * @param     crdentials  The credentials used to connect
     *
     * @param     command   The command to be run using SSH
     *
     * @return    false || $return array containing the output and status flag
     */
    #function ssh_command($ip = '', $credentials = '', $command = '')
    function ssh_command($parameters)
    {
        if (empty($parameters) or empty($parameters->ip) or empty($parameters->credentials) or empty($parameters->command)) {
            $mylog = new stdClass();
            $mylog->message = 'Function ssh_command called without params object';
            $mylog->severity = 4;
            $mylog->status = 'fail';
            $mylog->file = 'discovery_helper';
            $mylog->function = 'ssh_command';
            stdlog($mylog);
            return;
        }

        $log = $parameters->log;
        $ip = $parameters->ip;
        $credentials = $parameters->credentials;
        $command = $parameters->command;

        $log->file = 'ssh_helper';
        $log->function = 'ssh_command';

        $item_start = microtime(true);
        $return = array('output' => '', 'status' => 1);
        $CI = & get_instance();

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to ssh_command function.';
            $log->severity = 5;
            $log->command_status = 'fail';
            discovery_log($log);
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to ssh_command function.';
            $log->severity = 5;
            $log->command_status = 'fail';
            discovery_log($log);
            return false;
        }
        if (php_uname('s') != 'Windows NT') {
            set_include_path('/usr/local/open-audit/code_igniter/application/third_party/phpseclib');
        } else {
            set_include_path('c:\\xampplite\\open-audit\\code_igniter\\application\\third_party\\phpseclib');
        }
        require_once 'Crypt/RSA.php';
        require_once 'Net/SSH2.php';
        if (!defined('NET_SSH2_LOGGING')) {
            define('NET_SSH2_LOGGING', 2);
        }
        if ($credentials->type == 'ssh_key') {
            $ssh = new Net_SSH2($ip);
            if (intval($CI->config->config['discovery_ssh_timeout']) > 0) {
                $ssh->setTimeout(intval($CI->config->config['discovery_ssh_timeout']));
            }
            $key = new Crypt_RSA();
            if (!empty($credentials->credentials->password)) {
                $key->setPassword($credentials->credentials->password);
            }
            $key->loadKey($credentials->credentials->ssh_key);
            if ($ssh->login($credentials->credentials->username, $key)) {
                $username = $credentials->credentials->username;
                $password = @$credentials->credentials->password;
            } else {
                $log->message = "Failure, credentials named " . $credentials->name . " not used to log in to $ip.";
                $log->command = 'ssh login attempt';
                $log->command_output = $ssh->getLastError();
                $log->command_status = 'fail';
                $log->severity = 5;
                discovery_log($log);
                return false;
            }
        } else if ($credentials->type == 'ssh') {
            $ssh = new Net_SSH2($ip);
            if (intval($CI->config->config['discovery_ssh_timeout']) > 0) {
                $ssh->setTimeout(intval($CI->config->config['discovery_ssh_timeout']));
            }
            $key = new Crypt_RSA();
            if ($ssh->login($credentials->credentials->username, $credentials->credentials->password)) {
                $username = $credentials->credentials->username;
                $password = $credentials->credentials->password;
            } else {
                $log->message = "Failure, credentials named " . $credentials->name . " not used to log in to $ip.";
                $log->command = 'ssh login attempt';
                $log->command_output = $ssh->getLastError();
                $log->command_status = 'fail';
                $log->severity = 5;
                discovery_log($log);
                return false;
            }
        } else {
            $log->message = 'No credentials of ssh or ssh_key passed to ssh_command function.';
            $log->severity = 4;
            $log->command_status = 'fail';
            discovery_log($log);
            return false;
        }

        if (strpos($command, 'audit_') !== false and strpos($command, 'submit_online') !== false) {
            if (intval($CI->config->config['discovery_ssh_timeout']) > 0) {
                $ssh->setTimeout(intval($CI->config->config['discovery_ssh_timeout']));
            } else {
                $ssh->setTimeout(120);
            }
        }

        $log->command = $command;
        $log->command_status = '';
        $log->message = 'Executing SSH command';
        $item_start = microtime(true);
        if (strpos($command, 'sudo') === false) {
            # Not using sudo, so no password prompt
            $result = $ssh->exec($command);
            $result = explode("\n", $result);
            # remove the last line as it's always blank
            unset($result[count($result)-1]);
        } else {
            # Using sudo - need to input in response to password prompt
            $ssh->write($command . "\n");
            $output = $ssh->read('assword');
            if (stripos($output, 'assword') !== false) {
                $ssh->write($password."\n");
                $output = $ssh->read('[prompt]');
            }
            # required (as opposed to using root as above) because multiple
            # lines will be returned when asking for the password for sudo
            #$lines = explode("\n", $output);
            #$result = trim($lines[count($lines)-2]);
            $result = explode("\n", $output);
        }
        $ssh->disconnect();
        unset($ssh);
        for ($i=0; $i < count($result); $i++) {
            $result[$i] = trim($result[$i]);
        }
        $log->command_time_to_execute = (microtime(true) - $item_start);
        if (stripos($command, 'audit_') !== false and stripos($command, 'submit_online') !== false) {
            $log->command_output = 'Audit console output removed.';
        } else {
            $log->command_output = json_encode($result);
        }
        $log->command_status = 'success';
        discovery_log($log);
        unset($log);
        return($result);
    }
}

if (! function_exists('ssh_audit')) {
    #function ssh_audit($ip = '', $credentials = '')
    function ssh_audit($parameters)
    {

        if (empty($parameters) or empty($parameters->log) or empty($parameters->credentials) or empty($parameters->ip)) {
            $mylog = new stdClass();
            $mylog->severity = 4;
            $mylog->status = 'fail';
            $mylog->message = 'Function ssh_audit called without correct params object';
            $mylog->file = 'ssh_helper';
            $mylog->function = 'ssh_audit';
            stdlog($mylog);
            return;
        }

        $log = $parameters->log;
        $log->file = 'ssh_helper';
        $log->function = 'ssh_audit';
        $log->message = 'SSH audit starting';
        $log->command_status = 'notice';
        discovery_log($log);

        if (is_array($parameters->credentials)) {
            $credentials = $parameters->credentials;
        } else {
            $log->message = 'Credentials supplied to ssh_audit not in array format.';
            $log->command_status = 'fail';
            $log->severity = 5;
            discovery_log($log);
            return false;
        }

        if (filter_var($parameters->ip, FILTER_VALIDATE_IP)) {
            $ip = $parameters->ip;
        } else {
            $log->message = 'Invalid IP supplied to ssh_audit function. Supplied IP is: ' . (string)$ip;
            $log->command_status = 'fail';
            $log->severity = 5;
            discovery_log($log);
            return false;
        }

        $CI = & get_instance();
        if (php_uname('s') != 'Windows NT') {
            set_include_path('/usr/local/open-audit/code_igniter/application/third_party/phpseclib');
        } else {
            set_include_path('c:\\xampplite\\open-audit\\code_igniter\\application\\third_party\\phpseclib');
        }
        include 'Crypt/RSA.php';
        include('Net/SSH2.php');
        define('NET_SSH2_LOGGING', 2);

        foreach ($credentials as $credential) {
            if ($credential->type == 'ssh_key') {
                $ssh = new Net_SSH2($ip);
                if (intval($CI->config->config['discovery_ssh_timeout']) > 0) {
                    $ssh->setTimeout(intval($CI->config->config['discovery_ssh_timeout']));
                }
                $key = new Crypt_RSA();
                if (!empty($credential->credentials->password)) {
                    $key->setPassword($credential->credentials->password);
                }
                $key->loadKey($credential->credentials->ssh_key);
                if ($ssh->login($credential->credentials->username, $key)) {
                    $log->message = "Valid credentials named " . $credential->name . " used to log in to $ip.";
                    $log->command_status = 'success';
                    discovery_log($log);
                    $username = $credential->credentials->username;
                    $password = @$credential->credentials->password;
                    break;
                } else {
                    $log->message = "Credential set for SSH named " . $credential->name . " not working on $ip.";
                    $log->command_status = 'notice';
                    discovery_log($log);
                    $ssh->disconnect();
                    unset($ssh);
                }
            } else if ($credential->type == 'ssh') {
                $ssh = new Net_SSH2($ip);
                if (intval($CI->config->config['discovery_ssh_timeout']) > 0) {
                    $ssh->setTimeout(intval($CI->config->config['discovery_ssh_timeout']));
                }
                if ($ssh->login($credential->credentials->username, $credential->credentials->password)) {
                    $log->message = "Valid credentials named " . $credential->name . " used to log in to $ip.";
                    $log->command_status = 'success';
                    discovery_log($log);
                    $username = $credential->credentials->username;
                    $password = @$credential->credentials->password;
                    break;
                } else {
                    $log->message = "Credential set for SSH named " . $credential->name . " not working on $ip.";
                    $log->command_status = 'notice';
                    discovery_log($log);
                    $ssh->disconnect();
                    unset($ssh);
                }
            }
        }

        if (empty($username)) {
            $log->command = '';
            $log->command_output = '';
            $log->command_status = 'warning';
            $log->message = "No valid SSH credentials for $ip.";
            discovery_log($log);
            return false;
        }

        $device = new stdClass();

        $windows_os_name = $ssh->exec('wmic os get name');
        if (stripos($windows_os_name, 'Microsoft Windows') !== false) {
            $device->type = 'computer';
            $device->os_group = 'Windows';

            $temp = str_replace('Name', '', $windows_os_name);
            $temp = trim($temp);
            $temp = explode('|', $temp);
            $device->os_name = trim($temp[0]);
            unset($temp);
            $log->command = 'wmic os get name; # os_name';
            $log->command_output = $device->os_name;
            $log->command_status = 'success';
            $log->message = 'SSH command';
            discovery_log($log);

            $temp = $ssh->exec('wmic path win32_computersystemproduct get uuid');
            $temp = str_replace('UUID', '', $temp);
            $device->uuid = trim($temp);
            unset($temp);
            $log->command = 'wmic path win32_computersystemproduct get uuid; # uuid';
            $log->command_output = $device->uuid;
            $log->command_status = 'success';
            $log->message = 'SSH command';
            if (empty($device->uuid)) {
                $log->command_status = 'notice';
            }
            discovery_log($log);

            $temp = $ssh->exec('wmic path win32_computersystemproduct get IdentifyingNumber');
            $temp = str_replace('IdentifyingNumber', '', $temp);
            $device->serial = trim($temp);
            unset($temp);
            $log->command = 'wmic path win32_computersystemproduct get IdentifyingNumber; # serial';
            $log->command_output = $device->serial;
            $log->command_status = 'success';
            $log->message = 'SSH command';
            if (empty($device->serial)) {
                $log->command_status = 'notice';
            }
            discovery_log($log);


            $temp = $ssh->exec('wmic computersystem get name');
            $temp = str_replace('Name', '', $temp);
            $device->hostname = strtolower(trim($temp));
            $device->name = $device->hostname;
            unset($temp);
            $log->command = 'wmic computersystem get name; # hostname';
            $log->command_output = $device->hostname;
            $log->command_status = 'success';
            $log->message = 'SSH command';
            if (empty($device->hostname)) {
                $log->command_status = 'notice';
            }
            discovery_log($log);

            $device->os_family = '';
            if (strpos($device->os_name, " 95") !== false) {
                $device->os_family = "Windows 95";
            }
            if (strpos($device->os_name, " 98") !== false) {
                $device->os_family = "Windows 98";
            }
            if (strpos($device->os_name, " NT") !== false) {
                $device->os_family = "Windows NT";
            }
            if (strpos($device->os_name, "2000") !== false) {
                $device->os_family = "Windows 2000";
            }
            if (strpos($device->os_name, " XP") !== false) {
                $device->os_family = "Windows XP";
            }
            if (strpos($device->os_name, "2003") !== false) {
                $device->os_family = "Windows 2003";
            }
            if (strpos($device->os_name, "Vista") !== false) {
                $device->os_family = "Windows Vista";
            }
            if (strpos($device->os_name, "2008") !== false) {
                $device->os_family = "Windows 2008";
            }
            if (strpos($device->os_name, "Windows 7") !== false) {
                $device->os_family = "Windows 7";
            }
            if (strpos($device->os_name, "Windows 8") !== false) {
                $device->os_family = "Windows 8";
            }
            if (strpos($device->os_name, "2012") !== false) {
                $device->os_family = "Windows 2012";
            }
            if (strpos($device->os_name, "Windows 10") !== false) {
                $device->os_family = "Windows 10";
            }
            if (strpos($device->os_name, "2016") !== false) {
                $device->os_family = "Windows 2016";
            }
            $device->credentials = $credential;
            return $device;
        }

        # Before we attempt to run commands, test if we're running bash
        $item_start = microtime(true);
        $device->shell = trim($ssh->exec('echo $SHELL'));
        $device->bash = '';
        $log->command = 'echo $SHELL';
        $log->command_output = $device->shell;
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->command_status = 'success';
        $log->message = 'The default shell for ' . $username . ' is ' . $device->shell;
        if (strpos($device->shell, 'bash') === false) {
            $log->command_status = 'warning';
            $log->message = 'The default shell for ' . $username . ' is ' . $device->shell . ' (not bash)';
            $log->severity = 6;  
        }
        discovery_log($log);
        $log->severity = 7;

        if (strpos($device->shell, 'bash') === false) {
            $item_start = microtime(true);
            $device->bash = trim($ssh->exec('which bash'));
            $log->command = 'which bash';
            $log->command_output = $device->bash;
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->command_status = 'success';
            if (!empty($device->bash)) {
                $log->message = 'Bash installed';
            } else {
                $log->message = 'Bash not installed';
                $log->command_status = 'warning';
                $log->severity = 6;
            }
            discovery_log($log);
        }
        $log->severity = 7;

        if (strpos($device->shell, 'bash') === false) {
            $log->command = '';
            $log->command_output = $device->shell;
            $log->command_time_to_execute = '';
            $log->severity = 6;
            $log->message = 'Will use ' . $device->bash . ' to run commands. Running commands in a shell other than bash may fail.';
            $log->command_status = 'notice';
            if ($device->bash === '') {
                $log->message = 'Unable to detect shell. Running commands in a shell other than bash may fail.';
                $log->command_status = 'warning';
            }
            discovery_log($log);
        }
        $log->severity = 7;

        $commands = array(
            'hostname' => 'hostname -s 2>/dev/null',
            'domain' => 'hostname -d 2>/dev/null',
            'fqdn' => 'hostname -f 2>/dev/null | grep -F . 2>/dev/null',
            'solaris_domain' => 'domainname 2>/dev/null',

            'osx_serial' => 'system_profiler SPHardwareDataType 2>/dev/null | grep "Serial Number (system):" | cut -d: -f2 | sed "s/^ *//g"',

            'os_group' => 'uname 2>/dev/null',
            'os_name' => 'cat /etc/os-release 2>/dev/null | grep -i ^PRETTY_NAME | cut -d= -f2 | cut -d\" -f2',
            'os_family' => 'cat /etc/os-release 2>/dev/null | grep -i ^NAME | cut -d= -f2 | cut -d\" -f2',
            'os_version' => 'cat /etc/os-release 2>/dev/null | grep -i ^VERSION_ID | cut -d= -f2 | cut -d\" -f2',
            'redhat_os_name' => 'cat /etc/redhat-release 2>/dev/null',
            'ubuntu_os_codename' => 'cat /etc/os-release 2>/dev/null | grep -i ^UBUNTU_CODENAME | cut -d= -f2 | cut -d\" -f2',
            'vmware_os_version' => 'uname -r 2>/dev/null',
            'osx_os_version' => 'sw_vers 2>/dev/null | grep "ProductVersion:" | cut -f2',
            'ubiquiti_os' => 'cat /etc/motd 2>/dev/null | grep -i EdgeOS 2>/dev/null',
            'ubiquiti_os_version' => 'cat /etc/version 2>/dev/null',
            'ddwrt_os_name' => 'cat /etc/motd 2>/dev/null | grep -i DD-WRT 2>/dev/null',

            'ddwrt_model' => 'nvram get DD_BOARD 2>/dev/null',
            'ubiquiti_model' => 'cat /etc/board.info 2>/dev/null | grep "board.name" | cut -d= -f2',
            'ubiquiti_serial' => 'grep serialno /proc/ubnthal/system.info 2>/dev/null | cut -d= -f2',

            'dbus_identifier' => 'cat /var/lib/dbus/machine-id 2>/dev/null',
            'solaris_uuid' => 'smbios -t SMB_TYPE_SYSTEM 2>/dev/null | grep UUID | awk "{print $2}"',
            'esx_uuid' => 'vim-cmd hostsvc/hostsummary 2>/dev/null | sed -n "/^   hardware = (vim.host.Summary.HardwareSummary) {/,/^   \},/p" | grep uuid | cut -d= -f2 | sed s/,//g | sed s/\"//g',
            'osx_uuid' => 'system_profiler SPHardwareDataType 2>/dev/null | grep UUID | cut -d: -f2',
            'lshal_uuid' => 'lshal 2>/dev/null | grep "system.hardware.uuid"',

            'hpux_hostname' => 'hostname 2>/dev/null',
            'hpux_domain' => 'domainname 2>/dev/null',
            'hpux_os_name' => 'machinfo 2>/dev/null | grep -i "Release:" | cut -d: -f2',
            'hpux_os_group' => 'uname -s 2>/dev/null',
            'hpux_model' => 'model 2>/dev/null',
            'hpux_serial' => 'machinfo 2>/dev/null | grep "Machine serial number:" | cut -d: -f2',
            'hpux_uuid' => 'machinfo 2>/dev/null | grep -i "Machine ID number:" | cut -d: -f2',

            'which_sudo' => 'which sudo 2>/dev/null'
        );

        foreach ($commands as $item => $command) {
            if (strpos($device->shell, 'bash') === false and $device->bash !== '') {
                $command = $device->bash . " -c '" . $command . "'";
            }
            $item_start = microtime(true);
            $temp1 = $ssh->exec($command);
            $temp1 = trim($temp1);
            if (stripos($temp1, 'command not found')) {
                $temp1 = '';
            }
            if ($item == 'solaris_domain' and $temp1 == '(none)') {
                $temp1 = '';
            }
            if (!empty($temp1)) {
                $log->command_status = 'success';
                if (strpos($temp1, "\n") !== false) {
                    $array1 = explode("\n", $temp1);
                    foreach ($array1 as &$string) {
                        $string = trim($string);
                        if (strpos($string, '=') !== false) {
                            $temp2 = explode('=', $string);
                            $temp2[1] = str_replace("'", "", $temp2[1]);
                            $temp2[1] = str_replace('"', '', $temp2[1]);
                            @$device->{$item}->{$temp2[0]} = $temp2[1];
                        } else {
                            $device->{$item}[] = $string;
                        }
                    }
                } else {
                    $device->$item = $temp1;
                }
                $log->command = $command . '; # ' . $item;
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->command_output = $temp1;
                $log->command_status = 'success';
                $log->message = 'SSH command';
                discovery_log($log);
            } else {
                $log->command = $command . '; # ' . $item;
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->command_output = $temp1;
                $log->command_status = 'notice';
                $log->message = 'SSH command';
                discovery_log($log);
            }
        }

        # Set some items that may have multiple results
        if (!empty($device->hostname)) {
            $device->name = $device->hostname;
        }
        if (empty($device->domain) and !empty($device->solaris_domain) and $device->solaris_domain != '(none)') {
            $device->domain = $device->solaris_domain;
        }
        unset($device->solaris_domain);
        if (empty($device->fqdn) and !empty($device->hostname) and !empty($device->domain)) {
            $device->fqdn = $device->hostname . '.' . $device->domain;
        }

        if (!empty($device->ubiquiti_os)) {
            $device->os_family = 'Ubiquiti';
            $device->manufacturer = 'Ubiquiti Networks Inc.';
        }
        unset($device->ubiquiti_os);
        if (!empty($device->ubiquiti_serial)) {
            $device->os_family = 'Ubiquiti';
            $device->manufacturer = 'Ubiquiti Networks Inc.';
            $device->serial = $device->ubiquiti_serial;
        }
        unset($device->ubiquiti_serial);
        if (!empty($device->ubiquiti_os_version)) {
            $device->os_family = 'Ubiquiti';
            $device->manufacturer = 'Ubiquiti Networks Inc.';
            $device->description = $device->ubiquiti_os_version;
            $device->os_version = $device->ubiquiti_os_version;
        }
        unset($device->ubiquiti_os_version);
        if (!empty($device->ubiquiti_model)) {
            $device->os_family = 'Ubiquiti';
            $device->manufacturer = 'Ubiquiti Networks Inc.';
            $device->model = $device->ubiquiti_model;
        }
        unset($device->ubiquiti_model);

        if (!empty($device->ubuntu_os_codename)) {
            $device->os_name = $device->os_name . ' (' . $device->ubuntu_os_codename . ')';
        }
        unset($device->ubuntu_os_codename);

        if (!empty($device->redhat_os_name)) {
            $device->os_name = $device->redhat_os_name;
            if (stripos($device->redhat_os_name, 'centos') !== false) {
                $device->os_family = 'CentOS';
            }
            if (stripos($device->redhat_os_name, 'fedora') !== false) {
                $device->os_family = 'Fedora';
            }
            if (stripos($device->redhat_os_name, 'redhat') !== false or stripos($device->redhat_os_name, 'red hat') !== false) {
                $device->os_family = 'RedHat';
            }
            $device->type = 'computer';
        }
        unset($device->redhat_os_name);
        if (stripos($device->os_group, 'VMkernel') !== false and empty($device->os_name) and !empty($device->vmware_os_version)) {
            $device->os_group = 'VMware';
            $device->os_family = 'VMware ESXi';
            $device->os_name = 'Vmware ESXi ' . $device->vmware_os_version;
            $device->class = 'hypervisor';
            $device->type = 'computer';
        }
        unset($device->vmware_os_version);
        if (strtolower($device->os_group) === 'darwin') {
            $device->type = 'computer';
            $device->os_family = 'Apple OSX';
            if (!empty($device->osx_os_version)) {
                $device->os_name = 'Apple OSX ' . $device->osx_os_version;
            } else {
                $device->os_name = 'Apple OSX';
            }
            if (empty($device->os_version) and !empty($device->osx_os_version)) {
                $device->os_version = $device->osx_os_version;
            }
        }
        unset($device->osx_os_version);
        if (empty($device->serial) and !empty($device->osx_serial)) {
            $device->serial = $device->osx_serial;
        }
        unset($device->osx_serial);
        # DD-WRT items
        if (empty($device->os_group) and !empty($device->ddwrt_os_name)) {
            $device->os_family = 'DD-WRT';
            $device->os_name = trim($device->ddwrt_os_name);
            $device->type = 'router';
        }
        unset($device->ddwrt_os_name);
        if (empty($device->manufacturer) and !empty($device->ddwrt_model)) {
            $device->manufacturer = $device->ddwrt_model;
        }
        unset($device->ddwrt_model);

        if (!empty($device->hpux_os_group) and trim($device->hpux_os_group) === 'HP-UX') {
            $device->os_group = 'HP-UX';
            $device->os_family = 'HP-UX';
            $device->type = 'computer';
            $device->class = 'server';
            $device->os_name = trim($device->hpux_os_name);
            $device->uuid = trim($device->hpux_uuid);
            $device->model = trim($device->hpux_model);
            $device->serial = trim($device->hpux_serial);
            $device->hostname = trim($device->hpux_hostname);
            $device->domain = trim($device->hpux_domain);
        }
        unset($device->hpux_os_group);
        unset($device->hpux_uuid);
        unset($device->hpux_model);
        unset($device->hpux_serial);
        unset($device->hpux_hostname);
        unset($device->hpux_domain);
        unset($device->hpux_os_name);

        # Type based on os_groupo = Linux (set to computer)
        if (!empty($device->os_group) and $device->os_group == 'Linux' and empty($device->type)) {
            $device->type = 'computer';
        }

        # UUID
        $array = array('solaris_uuid', 'esx_uuid', 'osx_uuid', 'lshal_uuid');
        foreach ($array as $attribute) {
            if (empty($device->uuid) and !empty($device->$attribute)) {
                if ($attribute == 'lshal_uuid') {
                    $temp = explode("'", $device->lshal_uuid);
                    $device->lshal_uuid = $temp[1];
                }
                $device->uuid = $device->$attribute;
            }
            unset($device->$attribute);
        }

        $device->use_sudo = false;
        $command = '';
        if ($username != 'root') {
            if (($CI->config->config['discovery_linux_use_sudo'] == 'y' and strtolower($device->os_group) == 'linux') or
                ($CI->config->config['discovery_sunos_use_sudo'] == 'y' and strtolower($device->os_group) == 'sunos') or
                (strtolower($device->os_group) != 'linux' and strtolower($device->os_group) != 'sunos')) {
                if (!empty($device->which_sudo)) {
                    $item_start = microtime(true);
                    $command = $device->which_sudo . " hostname 2>/dev/null";
                    if (strpos($device->shell, 'bash') === false and $device->bash !== '') {
                        $command = $device->bash . " -c '" . $command . "'\n";
                    } else {
                        $command .= "\n";
                    }
                    $ssh->write($command);
                    $output = $ssh->read('assword');
                    if (stripos($output, 'assword') !== false) {
                        $ssh->write($password."\n");
                        $output = $ssh->read('[prompt]');
                    }
                    $lines = explode("\n", $output);
                    $hostname = trim($lines[count($lines)-2]);
                    $sudo_temp_hostname = explode('.', $hostname);
                    $ssh_hostname = explode('.', $device->hostname);
                    if ($sudo_temp_hostname[0] == $ssh_hostname[0]) {
                        $device->use_sudo = true;
                    }
                }
                $log->command = trim($command) . '; # hostname test using sudo';
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->command_output = 'sudo hostname: ' . $sudo_temp_hostname[0] . ', Device hostname: ' . $ssh_hostname[0];
                $log->message = 'SSH command';
                if ($device->use_sudo) {
                    $log->command_status = 'success';
                } else {
                    $log->command_status = 'notice';
                }
                discovery_log($log);
                unset($sudo_temp_hostname, $ssh_hostname, $hostname);
            }
        }

        unset($array);
        if (empty($device->dbus_identifier) and empty($device->uuid) and $username != 'root') {
            if (($CI->config->config['discovery_linux_use_sudo'] == 'y' and strtolower($device->os_group) == 'linux') or
                ($CI->config->config['discovery_sunos_use_sudo'] == 'y' and strtolower($device->os_group) == 'sunos') or
                (strtolower($device->os_group) != 'linux' and strtolower($device->os_group) != 'sunos')) {
                if (!empty($device->which_sudo)) {
                    # Run DMIDECODE to get the UUID (requires root or sudo)
                    $output = '';
                    $item_start = microtime(true);
                    $command = $device->which_sudo . " dmidecode -s system-uuid 2>/dev/null";
                    if (strpos($device->shell, 'bash') === false and $device->bash !== '') {
                        $command = $device->bash . " -c '" . $command . "'\n";
                    } else {
                        $command .= "\n";
                    }
                    $ssh->write($command);
                    $output = $ssh->read('assword');
                    if (stripos($output, 'assword') !== false) {
                        $ssh->write($password."\n");
                        $output = $ssh->read('[prompt]');
                    }
                    $lines = explode("\n", $output);
                    $device->uuid = trim($lines[count($lines)-2]);
                    if ($device->uuid == ':' or strpos($device->uuid, 'dmidecode -s system-uuid 2>/dev/null') !== false) {
                        $device->uuid = '';
                    }
                    $log->command = trim($command) . '; # uuid';
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    $log->command_output = '';
                    $log->message = 'SSH command';

                    if (empty($device->uuid)) {
                        $log->command_status = 'notice';
                        discovery_log($log);

                        # Try to cat a file to get the UUID
                        $output = '';
                        $item_start = microtime(true);
                        $command = $device->which_sudo . " cat /sys/class/dmi/id/product_uuid 2>/dev/null";
                        if (strpos($device->shell, 'bash') === false and $device->bash !== '') {
                            $command = $device->bash . " -c '" . $command . "'";
                        } else {
                            $command .= "\n";
                        }
                        $ssh->write($command);
                        $output = $ssh->read('assword');
                        if (stripos($output, 'assword') !== false) {
                            $ssh->write($password."\n");
                            $output = $ssh->read('[prompt]');
                        }
                        $lines = explode("\n", $output);
                        $device->uuid = trim($lines[count($lines)-2]);
                        if (stripos($device->uuid, 'cat /sys/class/dmi/id/product_uuid 2>/dev/null') !== false) {
                            $device->uuid = '';
                        }
                        $log->command = trim($command) . '; # uuid';
                        $log->command_time_to_execute = (microtime(true) - $item_start);
                        $log->command_output = '';
                        $log->message = 'SSH command';
                        if (!empty($device->uuid)) {
                            $log->command_output = $device->uuid;
                            $log->command_status = 'success';
                        } else {
                            $log->command_status = 'notice';
                        }
                        discovery_log($log);
                    } else {
                        $log->command_output = $device->uuid;
                        $log->command_status = 'success';
                        discovery_log($log);
                    }
                }
                if (empty($device->uuid)) {
                    unset($device->uuid);
                }
            }
        }

        if (empty($device->uuid) and $username == 'root') {
            $item_start = microtime(true);
            $command = 'dmidecode -s system-uuid 2>/dev/null';
            if (strpos($device->shell, 'bash') === false and $device->bash !== '') {
                $command = $device->bash . " -c '" . $command . "'";
            }
            $device->uuid = trim($ssh->exec($command));
            $log->command_output = json_encode(explode($device->uuid, "\n"));
            if (strpos($device->uuid, 'dmidecode -s system-uuid 2>/dev/null') !== false) {
                $device->uuid = '';
            }

            $log->command = trim($command) .'; # uuid';
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'SSH command';
            if (empty($device->uuid)) {
                $log->command_output = $ssh->getErrors();
                $log->command_status = 'notice';
                discovery_log($log);

                $item_start = microtime(true);
                $command = 'cat /sys/class/dmi/id/product_uuid 2>/dev/null';
                if (strpos($device->shell, 'bash') === false and $device->bash !== '') {
                    $command = $device->bash . " -c '" . $command . "'";
                }

                $device->uuid = trim($ssh->exec($command));
                $log->command = trim($command) . '; # uuid';
                $log->message = 'SSH command';
                $log->command_time_to_execute = (microtime(true) - $item_start);
                if (empty($device->uuid)) {
                    $log->command_output = $ssh->getErrors();
                    $log->command_status = 'notice';
                    discovery_log($log);
                } else {
                    $log->command_output = $device->uuid;
                    $log->command_status = 'success';
                    discovery_log($log);
                }
            } else {
                $log->command_output = $device->uuid;
                $log->command_status = 'success';
                discovery_log($log);
            }
        }

        #unset($device->which_sudo);
        $log->command = '';
        $log->command_time_to_execute = '';
        $log->command_output = '';
        $log->command_status = '';
        $log->message = '';
        $device->credentials = $credential;
        $ssh->disconnect();
        unset($ssh);
        return $device;
    }
}

if (! function_exists('ssh_create_keyfile')) {
    function ssh_create_keyfile($key_string, $display = 'n', $log = null)
    {
        if (strtolower($display) != 'y') {
            $display = 'n';
        } else {
            $display = 'y';
        }
        if (is_null($log)) {
            $log = new stdClass();
        }
        $log->file = 'ssh_helper';
        $log->function = 'ssh_create_keyfile';
        $log->command = '';
        $log->message = 'SSH create keyfile starting';
        discovery_log($log);

        if (empty($key_string)) {
            $log->message = 'No key_string array passed to ssh_create_keyfile.';
            stdlog($log);
            return false;
        }

        $CI = & get_instance();
        $microtime = str_replace(' ', '_', microtime());
        $microtime = str_replace('.', '_', $microtime);
        if (php_uname('s') != 'Windows NT') {
            #$ssh_keyfile = $CI->config->config['base_path'] . '/other/scripts/key_' . date('y_m_d_H_i_s');
            $ssh_keyfile = $CI->config->config['base_path'] . '/other/scripts/key_' . $microtime;
        } else {
            #$ssh_keyfile = $CI->config->config['base_path'] . '\\other\\scripts\\key_' . date('y_m_d_H_i_s');
            $ssh_keyfile = $CI->config->config['base_path'] . '\\other\\scripts\\key_' . $microtime;
        }

        try {
            $fileopen = fopen($ssh_keyfile, 'w');
        } catch (Exception $e) {
            $log->command = 'fopen($ssh_keyfile, \'w\');';
            $log->command_output = $e->getMessage();
            $log->message = 'Could not create keyfile ' . $ssh_keyfile;
            $log->severity = 3;
            $log->command_status = 'fail';
            discovery_log($log);
            return false;
        }
        try {
            chmod($ssh_keyfile, 0600);
        } catch (Exception $e) {
            $log->command = 'chmod($ssh_keyfile, 0600);';
            $log->command_output = $e->getMessage();
            $log->message = 'Could not chmod 0600 keyfile ' . $ssh_keyfile;
            $log->severity = 3;
            $log->command_status = 'fail';
            discovery_log($log);
            return false;
        }
        try {
            fwrite($fileopen, $key_string);
        } catch (Exception $e) {
            $log->command = 'fwrite($fileopen, $key_string);';
            $log->command_output = $e->getMessage();
            $log->message = 'Could not write to keyfile ' . $ssh_keyfile;
            $log->severity = 3;
            $log->command_status = 'fail';
            discovery_log($log);
            return false;
        }
        try {
            fclose($fileopen);
        } catch (Exception $e) {
            $log->command = 'fclose($fileopen);';
            $log->command_output = $e->getMessage();
            $log->message = 'Could not close keyfile ' . $ssh_keyfile;
            $log->severity = 3;
            $log->command_status = 'fail';
            discovery_log($log);
            return false;
        }
        return($ssh_keyfile);
    }
}

/* End of file ssh_helper.php */
/* Location: ./system/application/helpers/ssh_helper.php */
