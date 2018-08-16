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
 * @version   2.2.7
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
     * @param     crdentials  The credentials used to connect
     *
     * @param     command   The command to be run using SSH
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
        if (empty($ip)) {
            $log->message = 'No IP supplied to ssh_command function.';
            $log->severity = 3;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to ssh_command function.';
            $log->severity = 3;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to ssh_command function.';
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
        } else {
            $ssh->setTimeout(10);
        }
        $key = new Crypt_RSA();
        if ($credentials->type == 'ssh_key') {
            $log->message = 'Using SSH Key to copy file.';
            discovery_log($log);
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
                #$log->command =  $ssh->getLog();
                discovery_log($log);
            }
        } else if ($credentials->type == 'ssh') {
            $log->message = 'Using SSH to copy file.';
            discovery_log($log);

            $username = $credentials->credentials->username;
            $password = $credentials->credentials->password;
            $log->message = "Success, credentials named " . $credentials->name . " used to log in using sftp to $ip.";
            try {
                $ssh->login($credentials->credentials->username, $credentials->credentials->password);
            } catch (Exception $e) {
                $log->message = "Failure, credentials named " . $username . " not used to log in to $ip.";
                $log->severity = 3;
                discovery_log($log);
                return false;
            }
            discovery_log($log);
        } else {
            $log->message = 'No credentials of ssh or ssh_key passed to ssh_command function.';
            $log->severity = 3;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }

        $status = true;
        $log->command = 'sftp ' . $source . ' to ' . $destination;
        $log->command_status = '';
        $log->command_output = '';
        $log->message = 'Attempt to copy file to ' . $ip;
        discovery_log($log);
        try {
            $output = $ssh->put($destination, $source, NET_SFTP_LOCAL_FILE);
            $log->command_output = $output;
        } catch (Exception $e) {
            $log->command = $ssh->getLog();
            $log->command_output = $output;
            $log->command_status = 'fail';
            discovery_log($log);
            $status = false;
            return false;
        }
        $log->message = 'Copy file to ' . $ip;
        $log->command_status = 'success';
        $ssh->disconnect();
        unset($ssh);
        $log->command_time_to_execute = (microtime(true) - $item_start);
        discovery_log($log);
        unset($log->command, $log->command_status, $log->command_time_to_execute, $log->command_output);
        return($status);
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
    function ssh_command($ip = '', $credentials = '', $command = '', $log, $sudo = '')
    {

        $log->severity = 7;
        $log->file = 'ssh_helper';
        $log->function = 'ssh_command';
        $item_start = microtime(true);
        $return = array('output' => '', 'status' => 1);

        if (empty($ip)) {
            $log->message = 'No IP supplied to ssh_command function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to ssh_command function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to ssh_command function.';
            $log->severity = 5;
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
        require_once 'Net/SSH2.php';
        if (!defined('NET_SSH2_LOGGING')) {
            define('NET_SSH2_LOGGING', 2);
        }
        if ($credentials->type == 'ssh_key') {
            $ssh = new Net_SSH2($ip);
            if (intval($CI->config->config['discovery_ssh_timeout']) > 0) {
                $ssh->setTimeout(intval($CI->config->config['discovery_ssh_timeout']));
            } else {
                $ssh->setTimeout(10);
            }
            $key = new Crypt_RSA();
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
                #$log->command =  $ssh->getLog();
                discovery_log($log);
            }
        } else if ($credentials->type == 'ssh') {
            $ssh = new Net_SSH2($ip);
            if (intval($CI->config->config['discovery_ssh_timeout']) > 0) {
                $ssh->setTimeout(intval($CI->config->config['discovery_ssh_timeout']));
            } else {
                $ssh->setTimeout(10);
            }
            $key = new Crypt_RSA();
            if ($ssh->login($credentials->credentials->username, $credentials->credentials->password)) {
                #$log->message = "Success, credentials named " . $credentials->name . " used to log in to $ip.";
                #discovery_log($log);
                $username = $credentials->credentials->username;
                $password = $credentials->credentials->password;
            } else {
                $log->message = "Failure, credentials named " . $credentials->name . " not used to log in to $ip.";
                #$log->command =  $ssh->getLog();
                discovery_log($log);
            }
        } else {
            $log->message = 'No credentials of ssh or ssh_key passed to ssh_command function.';
            $log->severity = 3;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }

        if (intval($CI->config->config['discovery_ssh_timeout']) > 0) {
            $ssh->setTimeout(intval($CI->config->config['discovery_ssh_timeout']));
        } else {
            $ssh->setTimeout(300);
        }

        if ($sudo == 'n' or $sudo == '' or $credentials->credentials->username == 'root') {
            $result = $ssh->exec($command);
        } else {
            $which_sudo = $ssh->exec('which sudo');
            if (!empty($which_sudo)) {
                $output = '';
                $command = 'sudo ' . $command;
                $item_start = microtime(true);
                $ssh->write($command . "\n");
                $output = $ssh->read('assword');
                if (stripos($output, 'assword') !== false) {
                    $ssh->write($password."\n");
                    $output = $ssh->read('[prompt]');
                }
                $lines = explode("\n", $output);
                $result = trim($lines[count($lines)-2]);
            } else {
                $log->message = 'No sudo on target but requested from ssh_command.';
                $log->status = 'fail';
                $log->severity = 5;
                discovery_log($log);
                $log->severity = 7;
                return false;
            }
        }
        $ssh->disconnect();
        unset($ssh);

        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->command_output = '';
        if (!empty($result) and strpos($command, 'audit_esxi') === false) {
            $log->command_output = trim($result);
        }

        $log->command = $command;
        $log->command_status = 'success';
        $log->message = 'SSH command';
        discovery_log($log);
        unset($log->command, $log->command_status, $log->command_time_to_execute, $log->command_output);
        $return['output'][0] = $result;
        $return['status'] = 0;
        return($return);
    }
}










if (! function_exists('ssh_audit')) {
    function ssh_audit($ip = '', $credentials = '', $log)
    {
        $log->severity = 7;
        $log->file = 'ssh_helper';
        $log->function = 'ssh_audit';
        $log->command = '';
        $log->message = 'SSH audit starting';
        discovery_log($log);

        if (empty($ip) or !filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'Invalid or blank IP supplied to ssh_audit function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }

        #if (!is_object($credentials)) {
        if (!is_array($credentials)) {
            $log->message = 'No credentials supplied to ssh_audit function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }

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
                } else {
                    $ssh->setTimeout(10);
                }
                $key = new Crypt_RSA();
                if (!empty($credential->credentials->password)) {
                    $key->setPassword($credential->credentials->password);
                }
                $key->loadKey($credential->credentials->ssh_key);
                if ($ssh->login($credential->credentials->username, $key)) {
                    $log->message = "Success, credentials named " . $credential->name . " used to log in to $ip.";
                    discovery_log($log);
                    $username = $credential->credentials->username;
                    $password = @$credential->credentials->password;
                    break;
                } else {
                    $log->message = "Failure, credentials named " . $credential->name . " not used to log in to $ip.";
                    #$log->command =  $ssh->getLog();
                    discovery_log($log);
                    $ssh->disconnect();
                    unset($ssh);
                }
            } else if ($credential->type == 'ssh') {
                $ssh = new Net_SSH2($ip);
                if (intval($CI->config->config['discovery_ssh_timeout']) > 0) {
                    $ssh->setTimeout(intval($CI->config->config['discovery_ssh_timeout']));
                } else {
                    $ssh->setTimeout(10);
                }
                if ($ssh->login($credential->credentials->username, $credential->credentials->password)) {
                    $log->message = "Success, credentials named " . $credential->name . " used to log in to $ip.";
                    discovery_log($log);
                    $username = $credential->credentials->username;
                    $password = @$credential->credentials->password;
                    break;
                } else {
                    $log->message = "Failure, credentials named " . $credential->name . " not used to log in to $ip.";
                    #$log->command =  $ssh->getLog();
                    discovery_log($log);
                    $ssh->disconnect();
                    unset($ssh);
                }
            }
        }

        if (empty($username)) {
            $log->command = '';
            $log->command_output = '';
            $log->status = 'fail';
            $log->message = "No credentials valid for $ip.";
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
            discovery_log($log);

            $temp = $ssh->exec('wmic path win32_computersystemproduct get IdentifyingNumber');
            $temp = str_replace('IdentifyingNumber', '', $temp);
            $device->serial = trim($temp);
            unset($temp);
            $log->command = 'wmic path win32_computersystemproduct get IdentifyingNumber; # serial';
            $log->command_output = $device->serial;
            $log->command_status = 'success';
            $log->message = 'SSH command';
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
        $log->command_status = '';
        $log->message = 'The default shell for ' . $username . ' is ' . $device->shell;

        if (strpos($device->shell, 'bash') === false) {
            $log->message = 'Warning - ' . $log->message;
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
        } else {
            discovery_log($log);
        }

        if (strpos($device->shell, 'bash') === false) {
            $item_start = microtime(true);
            $device->bash = trim($ssh->exec('which bash'));
            $log->command = 'which bash';
            $log->command_output = $device->bash;
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->command_status = '';
            if ($device->bash != '') {
                $log->message = 'Testing for bash - installed';
                discovery_log($log);
            } else {
                $log->message = 'Warning - bash not installed';
                discovery_log($log);
            }
        }

        if (strpos($device->shell, 'bash') === false) {
            if ($device->bash === '') {
                $log->severity = 4;
                $log->message = 'Warning - Running commands in a shell other than bash may fail.';
            } else {
                $log->severity = 5;
                $log->message = 'Notice - Will use ' . $device->bash . ' to run commands.';
            }
            $log->command = '';
            $log->command_output = '';
            $log->command_time_to_execute = '';
            $log->command_status = '';
            discovery_log($log);
            $log->severity = 7;
        }

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
                $log->command_status = 'fail';
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

        if (!empty($device->os_group) and $device->os_group == 'Linux' and $device->manufacturer != 'Ubiquiti Networks Inc.') {
            $device->type = 'computer';
        }

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
        if (strtolower($device->os_group) == 'darwin') {
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
                    $log->command = $command . '; # uuid';
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    $log->command_output = '';
                    $log->message = 'SSH command';

                    if (empty($device->uuid)) {
                        $log->command_status = 'fail';
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
                        $log->command = $command . '; # uuid';
                        $log->command_time_to_execute = (microtime(true) - $item_start);
                        $log->command_output = '';
                        $log->message = 'SSH command';
                        if (!empty($device->uuid)) {
                            $log->command_output = $device->uuid;
                            $log->command_status = 'success';
                        } else {
                            $log->command_status = 'fail';
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

                $log->command = $command .'; # uuid';
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'SSH command';
                if (empty($device->uuid)) {
                    $log->command_output = $ssh->getErrors();
                    $log->command_status = 'fail';
                    discovery_log($log);

                    $item_start = microtime(true);
                    $command = 'cat /sys/class/dmi/id/product_uuid 2>/dev/null';
                    if (strpos($device->shell, 'bash') === false and $device->bash !== '') {
                        $command = $device->bash . " -c '" . $command . "'";
                    }

                    $device->uuid = trim($ssh->exec($command));
                    $log->command = $command . '; # uuid';
                    $log->message = 'SSH command';
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    if (empty($device->uuid)) {
                        $log->command_output = $ssh->getErrors();
                        $log->command_status = 'fail';
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
        }
        unset($device->which_sudo);
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
            $log->status = 'fail';
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
            $log->status = 'fail';
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
            $log->status = 'fail';
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
            $log->status = 'fail';
            discovery_log($log);
            return false;
        }
        return($ssh_keyfile);
    }
}

if (! function_exists('ssh_credentials')) {
    /**
     * The SSH credentials test.
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
     * @return    false || credentials object with an additional flag for 'sudo' and root
     */
    function ssh_credentials($ip = '', $credentials = array(), $log = null)
    {
        if (is_null($log)) {
            $log = new stdClass();
        }
        $log->file = 'ssh_helper';
        $log->function = 'ssh_credentials';
        $log->command = '';
        $log->status = '';
        $log->message = 'SSH credentials starting';
        discovery_log($log);

        if (empty($credentials)) {
            $log->message = 'No credentials array passed to ssh_credentials.';
            $log->severity = 6;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (empty($ip) or !filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No IP passed or bad IP to ssh_credentials.';
            $log->severity = 6;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        $connected = array();

        $CI = & get_instance();
        if (php_uname('s') != 'Windows NT') {
            $filepath = $CI->config->config['base_path'] . '/other';
        } else {
            $filepath = $CI->config->config['base_path'] . '\\other';
        }

        foreach ($credentials as $credential) {
            if (!empty($credential->type) and $credential->type == 'ssh_key') {
                # TODO - SSH Keys not supported in OA 1.12.8 under Windows
                if (php_uname('s') != 'Windows NT') {
                    # try to connect
                    $result = false;
                    $result = ssh_command($ip, $credential, 'uname', $log);
                    if ($result['status'] == 0) {
                        $log->message = "Credential set for SSH Key " . $credential->name . " working on " . $ip;
                        discovery_log($log);
                        return($credential);
                    } else {
                        $log->message = "Credential set for SSH Key " . $credential->name . " not working on " . $ip;
                        discovery_log($log);
                    }
                }
            }
        }
        unset($credential);
        foreach ($credentials as $credential) {
            if (!empty($credential->type) and $credential->type == 'ssh') {
                $from = ' ';
                if (!empty($credential->source)) {
                    $from = ' from ' . $credential->source . ' ';
                }
                if (!empty($credential->name)) {
                    $from = ' named ' . $credential->name . ' ';
                }
                $credential->sudo = false;
                if ($credential->credentials->username == 'root') {
                    $credential->root = true;
                } else {
                    $credential->root = false;
                }
                # initial attempt to connect
                if ($result = ssh_command($ip, $credential, 'uname', $log)) {
                    # Successful connect
                    if ($result['status'] == 0) {
                            # Did we use root?
                        if ($credential->root) {
                            # yes we did use root
                            $log->message = "SSH credentials complete. Credential set (using root)" . $from . "working on " . $ip;
                            discovery_log($log);
                            return $credential;
                        } else {
                            # no we didn't use root - is sudo on the box?
                            $result = ssh_command($ip, $credential, 'which sudo', $log);
                            if ($result['status'] == 0) {
                                # yes, sudo is present
                                $sudo_binary = $result['output'][0];
                                $command = 'echo ' . $credential->credentials->password . ' | sudo -S whoami';
                                # can we use sudo?
                                if ($result = ssh_command($ip, $credential, $command, $log)) {
                                    # yes, we can use sudo
                                    if ($result['status'] == 0) {
                                        # the command ran AND we got no returned error status - we can use sudo
                                        $log->message = "SSH credentials complete. Credential set (using sudo)" . $from . "working on " . $ip;
                                        discovery_log($log);
                                        $credential->sudo = $sudo_binary;
                                        return $credential;
                                    } else {
                                        # the command ran BUT we got a returned error status - we cannot use sudo
                                        $connected[] = $credential;
                                    }
                                } else {
                                    # the commadn failed - we cannot use sudo
                                    $connected[] = $credential;
                                }
                            } else {
                                # sudo is not on the box
                                $connected[] = $credential;
                            }
                        }
                    }
                } else {
                    $log->message = "Credential set for SSH" . $from . " not working on " . $ip;
                    discovery_log($log);
                }
            }
        }
        if (!empty($connected[0])) {
            $from = ' ';
            if (!empty($connected[0]->source)) {
                $from = ' from ' . $connected[0]->source . ' ';
            }
            if (!empty($connected[0]->name)) {
                $from = ' named ' . $connected[0]->name . ' ';
            }
            $log->message = "SSH credentials complete. Credential set from" . $from . "working on " . $ip;
            discovery_log($log);
            return $connected[0];
        } else {
            $log->message = "SSH credentials complete. No credentials found for " . $ip;
            discovery_log($log);
            return false;
        }
    }
}

if (! function_exists('ssh_command_old')) {
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
    function ssh_command_old($ip = '', $credentials = '', $command = '', $log)
    {

        $log->severity = 7;
        $log->file = 'ssh_helper';
        $log->function = 'ssh_command';
        $item_start = microtime(true);

        if (empty($ip)) {
            $log->message = 'No IP supplied to ssh_command function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to ssh_command function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to ssh_command function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        } else {
            if ($credentials->type == 'ssh') {
                $username = escapeshellarg($credentials->credentials->username);
                $password = $credentials->credentials->password;
            } elseif ($credentials->type == 'ssh_key') {
                $username = escapeshellarg($credentials->credentials->username);
                if (!empty($credentials->credentials->password)) {
                    $password = escapeshellarg($credentials->credentials->password);
                } else {
                    $password = '';
                }
                $keyfile = @ssh_create_keyfile($credentials->credentials->ssh_key);
                if (empty($keyfile)) {
                    return false;
                } else {
                    $log->message = 'Created SSH keyfile for ' . $ip . ' named ' . $keyfile;
                    discovery_log($log);
                }
            } else {
                $log->message = 'No username / password combo or keyfile supplied to ssh_command function.';
                $log->severity = 5;
                discovery_log($log);
                $log->severity = 7;
                return false;
            }
        }
        if (empty($command)) {
            $log->message = 'No command supplied to ssh_command function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        } else {
            $command = escapeshellarg($command);
        }
        $return = array('output' => '', 'status' => '');

        if (php_uname('s') == 'Linux') {
            $descriptorspec = array(
                0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
                1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
                2 => array("file", "/dev/null", "a"), // stderr is a file to write to
            );
            $cwd = '/tmp';
            $env = array();
            if ($credentials->type == 'ssh') {
                $command_string = 'timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null ' . $username . '@' . $ip . ' ' . $command;
                $process = proc_open($command_string, $descriptorspec, $pipes, $cwd, $env);
                if (is_resource($process)) {
                    fwrite($pipes[0], $password);
                    fclose($pipes[0]);
                    // stdOut
                    $temp = stream_get_contents($pipes[1]);
                    $return['output'] = explode("\n", $temp);
                    if (end($return['output']) == '') {
                        unset($return['output'][count($return['output'])-1]);
                    }
                    fclose($pipes[1]);
                    $return['status'] = proc_close($process);
                }
            } elseif ($credentials->type == 'ssh_key') {
                if ($password != '') {
                    $command_string = 'ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null -i ' . $keyfile . ' ' . $username . '@' . $ip . ' ' . $command;
                    $process = proc_open($command_string, $descriptorspec, $pipes, $cwd, $env);
                    if (is_resource($process)) {
                        fwrite($pipes[0], $password);
                        fclose($pipes[0]);
                        // stdOut
                        $temp = stream_get_contents($pipes[1]);
                        $return['output'] = explode("\n", $temp);
                        if (end($return['output']) == '') {
                            unset($return['output'][count($return['output'])-1]);
                        }
                        fclose($pipes[1]);
                        $return['status'] = proc_close($process);
                    }
                } else {
                    $command_string = 'ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null -i ' . $keyfile . ' ' . $username . '@' . $ip . ' ' . $command;
                    exec($command_string, $return['output'], $return['status']);
                }
                unlink($keyfile);
            }
        }

        // NOTE - requires the command "brew install https://raw.githubusercontent.com/kadwanev/bigboybrew/master/Library/Formula/sshpass.rb" for the sshpass command
        if (php_uname('s') == 'Darwin') {
            if ($credentials->type == 'ssh') {
                # test we have sshpass installed
                if (!file_exists('/usr/local/bin/sshpass')) {
                    $log->message = 'SSHPass not installed on OSX, cannot run ssh_command.';
                    $log->severity = 5;
                    discovery_log($log);
                    $log->severity = 7;
                    return false;
                }
                $descriptorspec = array(
                    0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
                    1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
                    2 => array("file", "/dev/null", "a"), // stderr is a file to write to
                );
                $cwd = '/usr/local/open-audit/other';
                $env = array();
                $command_string = 'sshpass ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null ' . $username . '@' . $ip . ' ' . $command;
                $process = proc_open($command_string, $descriptorspec, $pipes, $cwd, $env);
                if (is_resource($process)) {
                    fwrite($pipes[0], $password);
                    fclose($pipes[0]);
                    // stdOut
                    $temp = stream_get_contents($pipes[1]);
                    $return['output'] = explode("\n", $temp);
                    if (end($return['output']) == '') {
                        unset($return['output'][count($return['output'])-1]);
                    }
                    fclose($pipes[1]);
                    $return['status'] = proc_close($process);
                }
            } elseif ($credentials->type = 'ssh_key') {
                if ($password != '') {
                    # NOT SUPPORTED YET
                } else {
                    $command_string = 'ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null -i ' . $keyfile . ' ' . $username . '@' . $ip . ' ' . $command;
                    exec($command_string, $return['output'], $return['status']);
                }
                unlink($keyfile);
            }
        }


        if (php_uname('s') == 'Windows NT') {
            $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."\open-audit\other";
            if ($credentials->type == 'ssh') {
                #$command_string = $filepath . '\plink.exe -ssh ' . $username . "@" . $ip . ' -pw ' . str_replace('"', '\"', $password) . ' ' . $command;
                #$command_string = $filepath . '\\plink.exe -pw ' . $this->escape_plink_command($details->ssh_password).' '.$username.'@'.$details->ip." \"".$this->config->item('discovery_linux_script_directory').$audit_script." submit_online=y create_file=n url=".$url."index.php/input/devices debugging=1 system_id=".$details->id." self_delete=y\"";
                $command_string = 'echo y | ' . $filepath . '\plink.exe -ssh ' . $username . "@" . $ip . ' -pw ' . $password . ' ' . $command;
                exec($command_string, $return['output'], $return['status']);
                if ((isset($return['output'][0]) and stripos($return['output'][0], 'password') !== false) or
                    (isset($return['output'][0]) and stripos($return['output'][0], 'using keyboard-interactive authentication') !== false) or
                    (isset($return['output'][1]) and stripos($return['output'][1], 'password') !== false) ) {
                    $return['output'][0] = '';
                    $return['status'] = 5;
                }
            } elseif ($credentials->type == 'ssh_key') {
                $command_string = $filepath . '\plink.exe -ssh -i ' . $keyfile . ' ' . $username . "@" . $ip . ' ' . $command;
                exec($command_string, $return['output'], $return['status']);
                if ((isset($return['output'][0]) and stripos($return['output'][0], 'password') !== false) or
                    (isset($return['output'][0]) and stripos($return['output'][0], 'using keyboard-interactive authentication') !== false) or
                    (isset($return['output'][1]) and stripos($return['output'][1], 'password') !== false) ) {
                    $return['output'][0] = '';
                    $return['status'] = 5;
                }
                try {
                    unlink($keyfile);
                    $log->command = 'unlink($keyfile)';
                    $log->command_output = '';
                    $log->message = 'SSH Keyfile ' . $keyfile . ' removed.';
                    discovery_log($log);
                } catch (Exception $e) {
                    $log->command = '';
                    $log->command_output = $e->getMessage();
                    $log->message = 'SSH Keyfile ' . $keyfile . ' could not be removed.';
                    $log->status = 'fail';
                    $log->severity = 3;
                    discovery_log($log);
                }
            }
        }

        $command_string = str_replace($password, '******', $command_string);
        $command_string = str_replace(str_replace('"', '\"', $password), '******', $command_string);
        $command_string = str_replace(escapeshellarg($password), '******', $command_string);
        $log->command = $command_string;
        $log->command_time_to_execute = (microtime(true) - $item_start);
        if (!empty($return['output'][0])) {
            $log->command_output = trim($return['output'][0]);
        }
        if ($return['status'] != '0') {
            $log->command_status = 'fail';
        } else {
            $log->command_status = 'success';
        }
        $log->message = 'SSH command';
        discovery_log($log);
        unset($log->command, $log->command_status, $log->command_time_to_execute, $log->command_output);

        // if ($return['status'] != '0') {
        //     return false;
        // } else {
        //     return($return);
        // }
        return($return);
    }
}

if (! function_exists('ssh_audit_old')) {
    function ssh_audit_old($ip = '', $credentials = '', $log)
    {
        $log->severity = 7;
        $log->file = 'ssh_helper';
        $log->function = 'ssh_audit';
        $log->command = '';
        $log->message = 'SSH audit starting';
        discovery_log($log);

        if (empty($ip)) {
            $log->message = 'No IP supplied to ssh_audit function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to ssh_audit function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to ssh_audit function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }

        $details = new stdClass();
        $details->os_group = '';

        $command = 'uname';
        $ssh_result = ssh_command($ip, $credentials, $command, $log);
        $log->function = 'ssh_audit';
        if ($ssh_result['status'] == 0) {
            if (!empty($ssh_result['output'][0])) {
                $details->os_group = $ssh_result['output'][0];
                if ($details->os_group == 'WindowsNT') {
                    $details->os_group = 'Windows';
                }
            }
        } else {
            # Windows doesn't have a uname so the above may fail (it might have unix tools installed)
            $command = 'wmic os get name';
            $ssh_result = ssh_command($ip, $credentials, $command, $log);
            $log->function = 'ssh_audit';
            foreach ($ssh_result['output'] as $line) {
                if (stripos($line, 'Windows') !== false) {
                    $details->os_group = 'Windows';
                }
            }
        }
        unset($ssh_result);

        if ($details->os_group == 'Windows') {
            # We don't support SSH auditing to Windows at the moment
            $log->severity = 5;
            $log->message = 'Windows audit via SSH not supported at this time';
            discovery_log($log);
            $log->severity = 7;
            return($details);
        }

        if ($details->os_group == '') {
            $log->function = 'ssh_audit';
            $log->severity = 5;
            $log->message = 'uname command failed for ' . $ip;
            discovery_log($log);
            $log->severity = 7;
        }

        # DD-WRT specific test
        $command = 'cat /etc/motd | grep -i DD-WRT';
        $ssh_result = ssh_command($ip, $credentials, $command, $log);
        if ($ssh_result['status'] == 0) {
            if (stripos($ssh_result['output'][0], 'dd-wrt') !== false) {
                $details->os_family = 'DD-WRT';
                $details->os_name = trim($ssh_result['output'][0]);
                $details->type = 'router';
            }
        }

        # Ubiquiti specific test
        $command = 'cat /etc/motd | grep -i EdgeOS';
        $ssh_result = ssh_command($ip, $credentials, $command, $log);
        if ($ssh_result['status'] == 0) {
            if (stripos($ssh_result['output'][0], 'EdgeOS') !== false) {
                $details->os_family = 'Ubiquiti';
                #$details->os_name = trim($ssh_result['output'][0]);
                $details->type = 'router';
                $command = 'cat /etc/os-release | grep -i "^PRETTY_NAME" | cut -d\" -f2';
                $ssh_result = ssh_command($ip, $credentials, $command, $log);
                if ($ssh_result['status'] == 0 and count($ssh_result['output']) != 0) {
                    $details->os_name = trim($ssh_result['output'][0]);
                }
                $command = 'cat /etc/version';
                $ssh_result = ssh_command($ip, $credentials, $command, $log);
                if ($ssh_result['status'] == 0 and count($ssh_result['output']) != 0) {
                    $details->description = trim($ssh_result['output'][0]);
                }
                $command = 'hostname';
                $ssh_result = ssh_command($ip, $credentials, $command, $log);
                if ($ssh_result['status'] == 0 and count($ssh_result['output']) != 0) {
                    $details->hostname = trim($ssh_result['output'][0]);
                }
                // NOTE - will not work beacuse needs to be run in an actual session
                // $command = 'info | grep "^Mac Address" | cut -d: -f2';
                // $ssh_result = ssh_command($ip, $credentials, $command, $log);
                // if ($ssh_result['status'] == 0 and count($ssh_result['output']) != 0) {
                //     $details->mac = trim($ssh_result['output'][0]);
                // }
                // $command = 'show version';
                // $ssh_result = ssh_command($ip, $credentials, $command, $log);
                // if ($ssh_result['status'] == 0 and count($ssh_result['output']) != 0) {
                //     foreach ($ssh_result['output'] as $line) {
                //         if (strpos($line, 'Version:') === 0) {
                //             $details->os_version = trim(str_replace('Version:', '', $line));
                //         }
                //         if (strpos($line, 'HW model:') === 0) {
                //             $details->model = trim(str_replace('HW model:', '', $line));
                //         }
                //         if (strpos($line, 'HW S/N:') === 0) {
                //             $details->serial = trim(str_replace('HW S/N:', '', $line));
                //         }
                //     }
                // }
            }
        }
        $command = 'cat /etc/board.info | grep "board.name';
        $ssh_result = ssh_command($ip, $credentials, $command, $log);
        if ($ssh_result['status'] == 0 and count($ssh_result['output']) != 0) {
            $device->model = $ssh_result['output'][0];
            $device->type = 'router';
            $device->manufacturer = 'Ubiquiti Networks Inc.';
        }


        # Solaris specific tests
        if ($details->os_group == 'SunOS') {
            $command = 'hostname';
            $ssh_result = ssh_command($ip, $credentials, $command, $log);
            if ($ssh_result['status'] == 0) {
                $details->hostname = $ssh_result['output'][0];
            }
            $command = 'domainname';
            $ssh_result = ssh_command($ip, $credentials, $command, $log);
            if ($ssh_result['status'] == 0) {
                $details->domain = $ssh_result['output'][0];
            }
            if (empty($details->domain)) {
                $command = 'grep domain /etc/resolv.conf | awk \'{print $2}\'';
                $ssh_result = ssh_command($ip, $credentials, $command, $log);
                if ($ssh_result['status'] == 0) {
                    $details->domain = $ssh_result['output'][0];
                }
            }
            if (!empty($details->hostname) and !empty($details->domain)) {
                $details->fqdn = $details->hostname . '.' . $details->domain;
            }
            $command = 'smbios -t SMB_TYPE_SYSTEM | grep UUID | awk \'{print $2}\'';
            $ssh_result = ssh_command($ip, $credentials, $command, $log);
            if ($ssh_result['status'] == 0) {
                if (!empty($ssh_result['output'][0])) {
                    $details->uuid = $ssh_result['output'][0];
                }
            }
            return($details);
        }

        # Hostname
        $command = 'hostname -s';
        $ssh_result = ssh_command($ip, $credentials, $command, $log);
        if ($ssh_result['status'] == 0) {
            $details->hostname = $ssh_result['output'][0];
        }

        # FQDN
        $command = 'hostname -f | grep -F .';
        $ssh_result = ssh_command($ip, $credentials, $command, $log);
        if ($ssh_result['status'] == 0) {
            $details->fqdn = $ssh_result['output'][0];
        }

        if (empty($details->hostname) and !empty($details->fqdn)) {
            $temp = explode('.', $details->fqdn);
            $details->hostname = $temp[0];
            unset($temp);
        }

        # UUID on Linux
        if ($details->os_group == 'Linux') {
            if ($credentials->credentials->username == 'root') {
                $command = 'dmidecode -s system-uuid';
            } elseif (!empty($credentials->sudo) and $credentials->sudo) {
                $command = 'echo ' . $credentials->credentials->password . ' | sudo -S dmidecode -s system-uuid';
            } else {
                $command = '';
            }
            if ($command != '') {
                $ssh_result = ssh_command($ip, $credentials, $command, $log);
                if ($ssh_result['status'] == 0) {
                    $details->uuid = $ssh_result['output'][0];
                }
            } else {
                $details->uuid = '';
            }

            if (empty($details->uuid)) {
                if ($credentials->credentials->username == 'root') {
                    $command = 'cat /sys/class/dmi/id/product_uuid';
                } elseif (!empty($credentials->sudo) and $credentials->sudo) {
                    $command = 'echo ' . $credentials->credentials->password . ' | sudo -S cat /sys/class/dmi/id/product_uuid';
                } else {
                    $command = '';
                }
                if ($command != '') {
                    $ssh_result = ssh_command($ip, $credentials, $command, $log);
                    if ($ssh_result['status'] == 0) {
                        $details->uuid = $ssh_result['output'][0];
                    }
                }
            }
        }

        # DBUS identifier on Linux (no need for sudo/root)
        if ($details->os_group == 'Linux') {
            $command = 'cat /var/lib/dbus/machine-id';
            $ssh_result = ssh_command($ip, $credentials, $command, $log);
            if ($ssh_result['status'] == 0) {
                $details->dbus_identifier = $ssh_result['output'][0];
            }
        }

        # UUID on ESX
        if ($details->os_group == 'VMkernel') {
            $command = "vim-cmd hostsvc/hostsummary | sed -n '/^   hardware = (vim.host.Summary.HardwareSummary) {/,/^   \},/p' | grep uuid | cut -d= -f2 | sed 's/,//g' | sed 's/\\\"//g'";
            $ssh_result = ssh_command($ip, $credentials, $command, $log);
            if ($ssh_result['status'] == 0) {
                $details->uuid = $ssh_result['output'][0];
            }
        }

        # UUID on OSX
        if ($details->os_group == 'Darwin') {
            $command = 'system_profiler SPHardwareDataType | grep UUID | cut -d: -f2';
            $ssh_result = ssh_command($ip, $credentials, $command, $log);
            if ($ssh_result['status'] == 0) {
                $details->uuid = $ssh_result['output'][0];
            }
        }

        # Model and Manufuacturer (maybe) on DD-WRT
        if (isset($details->os_family) and $details->os_family == 'DD-WRT') {
            $command = 'nvram get DD_BOARD';
            $ssh_result = ssh_command($ip, $credentials, $command, $log);
            if ($ssh_result['status'] == 0) {
                $details->model = $ssh_result['output'][0];
            }
            if (stripos($details->model, "tplink") !== false) {
                $details->manufacturer = "TP-Link Technology";
            }
        }
        $log->function = 'ssh_audit';
        $log->message = 'SSH audit complete';
        discovery_log($log);
        return $details;
    }
}

if (! function_exists('scp_old')) {
    /**
     * The SSH connection attempt using specific, supplied and default credentials
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param     ip
     *
     * @param     credentials
     *
     * @param     source
     *
     * @param     destination
     *
     * @return    true || false [depending on if the file could be copied]
     */
    function scp_old($ip = '', $credentials = '', $source = '', $destination = '', $log)
    {
        $log->severity = 7;
        $log->file = 'ssh_helper';
        $log->function = 'scp';
        $log->command = '';
        $log->message = 'SCP starting';
        $item_start = microtime(true);
        discovery_log($log);

        if (empty($ip)) {
            $log->message = 'No IP supplied to ssh_helper::scp function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to ssh_helper::scp function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to ssh_helper::scp function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        } else {
            if ($credentials->type == 'ssh') {
                $username = $credentials->credentials->username;
                $password = $credentials->credentials->password;
            } elseif ($credentials->type == 'ssh_key') {
                $username = $credentials->credentials->username;
                $keyfile = ssh_create_keyfile($credentials->credentials->ssh_key);
            }
        }

        if (empty($source)) {
            $log->message = 'No source supplied to ssh_helper::scp function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }

        if (empty($destination)) {
            $log->message = 'No destination supplied to ssh_helper::scp function.';
            $log->severity = 5;
            discovery_log($log);
            $log->severity = 7;
            return false;
        }

        $return = array('output' => '', 'status' => '');

        if (php_uname('s') == 'Linux') {
            if ($credentials->type == 'ssh') {
                $descriptorspec = array(
                    0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
                    1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
                    2 => array("file", "/dev/null", "a"), // stderr is a file to write to
                );
                $cwd = '/tmp';
                $env = array();
                $command = 'timeout 5m sshpass scp -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null ' . $source . ' ' . escapeshellarg($username) . '@' . escapeshellarg($ip) . ':' . $destination;
                $echo = $command;
                $process = proc_open($command, $descriptorspec, $pipes, $cwd, $env);
                if (is_resource($process)) {
                    fwrite($pipes[0], $password);
                    fclose($pipes[0]);
                    // stdOut
                    $temp = stream_get_contents($pipes[1]);
                    $return['output'] = explode("\n", $temp);
                    if (end($return['output']) == '') {
                        unset($return['output'][count($return['output'])-1]);
                    }
                    fclose($pipes[1]);
                    $return['status'] = proc_close($process);
                }
            } elseif ($credentials->type == 'ssh_key') {
                $command = 'scp -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null -i ' . $keyfile . ' ' . $source . ' ' . escapeshellarg($username) . '@' . escapeshellarg($ip) . ':' . $destination;
                $echo = $command;
                exec($command, $return['output'], $return['status']);
                unlink($keyfile);
            }
        }

        if (php_uname('s') == 'Darwin') {
            if ($credentials->type == 'ssh') {
                $descriptorspec = array(
                    0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
                    1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
                    2 => array("file", "/dev/null", "a"), // stderr is a file to write to
                );
                $cwd = '/tmp';
                $env = array();
                $command = 'sshpass scp -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null ' . $source . ' ' . escapeshellarg($username) . '@' . $ip . ':' . $destination;
                $echo = $command;
                $process = proc_open($command, $descriptorspec, $pipes, $cwd, $env);
                if (is_resource($process)) {
                    fwrite($pipes[0], $password);
                    fclose($pipes[0]);
                    // stdOut
                    $temp = stream_get_contents($pipes[1]);
                    $return['output'] = explode("\n", $temp);
                    if (end($return['output']) == '') {
                        unset($return['output'][count($return['output'])-1]);
                    }
                    fclose($pipes[1]);
                    $return['status'] = proc_close($process);
                }
            } elseif ($credentials->type == 'ssh_key') {
                $command = 'scp -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null -i ' . $keyfile . ' ' . $source . ' ' . escapeshellarg($username) . '@' . escapeshellarg($ip) . ':' . $destination;
                $echo = $command;
                exec($command, $return['output'], $return['status']);
                unlink($keyfile);
            }
        }

        if (php_uname('s') == 'Windows NT') {
            $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."\open-audit\other";
            if ($credentials->type == 'ssh') {
                $password = str_replace('"', '\"', $password);
                $command = $filepath . '\pscp.exe -pw "' . $password . '" ' . $source . ' ' . $username . '@' . $ip . ':' . $destination;
                $echo = str_replace($password, '******', $command);
                exec($command, $return['output'], $return['status']);
            } elseif ($credentials->type == 'ssh_key') {
                $command = $filepath . '\pscp.exe -i "' . $keyfile . '" ' . $source . ' ' . $username . '@' . $ip . ':' . $destination;
                $echo = $command;
                exec($command, $return['output'], $return['status']);
            }
        }

        // if ($display == 'y') {
        //     echo 'DEBUG - Command Executed: '.$echo."\n";
        //     echo 'DEBUG - Return Value: '.$return['status']."\n";
        //     echo "DEBUG - Command Output:\n";
        //     $formatted_output = implode("\n", $return['output']);
        //     $formatted_output = htmlentities($formatted_output);
        //     $formatted_output = explode("\n", $formatted_output);
        //     if (end($formatted_output) == '') {
        //         unset($formatted_output[count($formatted_output)-1]);
        //     }
        //     print_r($formatted_output);
        //     echo "\nDEBUG ---------------\n";
        // }

        $log->command = $command;
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->message = 'SCP command';
        if ($return['status'] != '0') {
            $log->command_status = 'fail';
            $log->severity = 4;
            discovery_log($log);
            $log->severity = 7;
            unset($log->command);
            return false;
        } else {
            $log->command_status = 'success';
            discovery_log($log);
            unset($log->command, $log->command_time_to_execute);
            return true;
        }
    }
}

/* End of file ssh_helper.php */
/* Location: ./system/application/helpers/ssh_helper.php */
