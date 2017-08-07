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
 * @version   2.0.6
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */


if (! function_exists('windows_credentials')) {
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
     * @param     display     Should we echo the output to te screen?
     *
     * @return    false || credentials object with an additional flag for 'sudo' and root
     */
    function windows_credentials($ip = '', $credentials = array(), $log = null)
    {
        if (empty($log)) {
            $log = new stdClass();
        }
        $log->file = 'wmi_helper';
        $log->function = 'windows_credentials';
        $log->message = 'Windows credentials starting';
        discovery_log($log);


        if (empty($credentials)) {
            $log->message = 'No credentials array passed to windows_credentials.';
            discovery_log($log);
            return false;
        }
        if (empty($ip) or !filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No IP passed or bad IP to windows_credentials ('. $ip . ').';
            discovery_log($log);
            return false;
        }
        foreach ($credentials as $credential) {
            if ($credential->type == 'windows') {
                $command = 'csproduct get uuid';
                $wmi_result = wmi_command($ip, $credential, $command, $log);
                unset($log->command);
                if ($wmi_result['status'] == 0) {
                    $log->file = 'wmi_helper';
                    $log->function = 'windows_credentials';
                    $log->message = "Windows credentials complete. Credential set " . $credential->name . " working on " . $ip;
                    discovery_log($log);
                    unset($log->command);
                    return $credential;
                } else {
                    $log->message = "Credential set for Windows named " . $credential->name . " not working on " . $ip;
                    discovery_log($log);
                }
            }
        }
        $log->file = 'wmi_helper';
        $log->function = 'windows_credentials';
        $log->message = 'Windows credentials complete. No working Windows credentials for ' . $ip . ' found.';
        discovery_log($log);
        return false;
    }
}

if (! function_exists('execute_windows')) {
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
     * @param     credentials The credentials object
     *
     * @param     command   The command to be run using SSH
     *
     * @param     display   Should we output to the screen or not?
     *
     * @return    false || $return array containing the output and status flag
     */
   function execute_windows($ip = '', $credentials, $command = '', $log)
    {

        $log->file = 'wmi_helper';
        $log->function = 'execute_windows';

        if (empty($ip)) {
            $log->message = 'No IP supplied to wmi_helper::execute_windows';
            discovery_log($log);
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to wmi_helper::execute_windows';
            discovery_log($log);
            return false;
        }

        if (!is_object($credentials)) {
            $log->message = 'No credentials passed to wmi_helper::execute_windows';
            discovery_log($log);
            return false;
        }

        if ($command == '') {
            $log->message = 'No command passed to wmi_helper::execute_windows';
            discovery_log($log);
            return false;
        }

        if (php_uname('s') == 'Darwin') {
            if (!file_exists('/usr/local/bin/winexe')) {
                $log->message = 'Winexe not installed on OSX, cannot run execute_windows.';
                discovery_log($log);
                return false;
            }
            $temp = explode('@', $credentials->credentials->username);
            $username = $temp[0];
            $domain = $temp[1];
            unset($temp);
            $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/open-audit/other";
            $command_string = 'winexe -U ' . $domain . '/' . $username . '%' . $credentials->credentials->password . ' //' . $ip . ' \'' . $command . '\'';
            $log->command = 'winexe -U ' . $domain . '/' . $username . '%****** //' . $ip . ' \'' . $command . '\'';
            exec($command_string, $return['output'], $return['status']);
        }

        if (php_uname('s') == 'Linux') {
            $password = str_replace('$', '\$', $credentials->credentials->password);
            $password = str_replace("'", "", escapeshellarg($password));
            $username = str_replace("'", "", escapeshellarg($credentials->credentials->username));
            $temp = explode('@', $credentials->credentials->username);
            $username = $temp[0];
            $domain = $temp[1];
            unset($temp);
            $command_string = "screen -D -m timeout 5m /usr/local/open-audit/other/winexe-static -U ".$domain . '/' . $username."%".$password." --uninstall //".$ip." \"$command\" ";
            $log->command = "screen -D -m timeout 5m /usr/local/open-audit/other/winexe-static -U ".$domain . '/' . $username."%****** --uninstall //".$ip." \"$command\" ";
            $echo = str_replace($password, '******', $command);
            exec($command_string, $output, $return_var);
        }

        if (php_uname('s') == 'Windows NT') {
            $temp = explode('@', $credentials->credentials->username);
            $username = $temp[0];
            if (!empty($temp[1])) {
                $domain = $temp[1] . '\\';
                $domain = '';
            } else {
                $domain = '';
            }
            $echo = str_replace($credentials->credentials->password, "******", $command);
            $command_string = 'c:\xampplite\open-audit\other\paexec.exe \\\\' . $ip . ' -u ' . $domain . $username . ' -p ' . $credentials->credentials->password . ' cmd /c "' . $command . '"';
            $log->command = 'c:\xampplite\open-audit\other\paexec.exe \\\\' . $ip . ' -u ' . $domain . $username . ' -p ****** cmd /c "' . $command . '"';
            exec($command_string, $output, $return_var);
        }


        if ($return_var == 0) {
            $log->command_complete = 'y';
        } else {
            $log->command_complete = 'n';
        }
        discovery_log($log);
        unset($log->id, $log->command, $log->command_status, $log->command_time_to_execute, $log->command_output);

        if ($return_var == 0) {
            return true;
        } else {
            return false;
        }

    }
}

if (! function_exists('copy_to_windows')) {
    /**
     * The SSH credentials test. 
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param     username  The username used to connect
     *
     * @param     password  The password used to connect
     *
     * @param     ip        The target device's ip address
     *
     * @param     command   The command to be run using SSH
     *
     * @param     display   Should we output to the screen or not?
     *
     * @return    false || $return array containing the output and status flag
     */
   function copy_to_windows($ip = '', $credentials, $share, $source = '', $destination, $log)
    {

        $log->file = 'wmi_helper';
        $log->function = 'copy_to_windows';
        $return = array('output' => '', 'status' => '');

        if (empty($ip)) {
            $log->message = 'No IP supplied to wmi_helper::copy_to_windows';
            discovery_log($log);
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to wmi_helper::copy_to_windows';
            discovery_log($log);
            return false;
        }

        if (!is_object($credentials)) {
            $log->message = 'No credentials passed to wmi_helper::copy_to_windows';
            discovery_log($log);
            return false;
        }

        if ($share == '') {
            $log->message = 'No share passed to wmi_helper::copy_to_windows';
            discovery_log($log);
            return false;
        }

        if ($source == '') {
            $log->message = 'No source passed to wmi_helper::copy_to_windows';
            discovery_log($log);
            return false;
        }

        if ($destination == '') {
            $log->message = 'No destination passed to wmi_helper::copy_to_windows';
            discovery_log($log);
            return false;
        }


        if (php_uname('s') == 'Darwin') {
            $ts = date('Y_m_d_H_i_s');
            $temp = explode('@', $credentials->credentials->username);
            $username = $temp[0];
            $domain = $temp[1];
            unset($temp);
            if (!is_dir('/private/tmp')) {
                mkdir('/private/tmp') or die ('OSX attempt to create /private/tmp failed in wmi_helper::copy_to_windows failed');
            }
            $log->command = "mkdir('/private/tmp')";
            if (mkdir('/private/tmp/' . $ts)) {
                $log->message = 'Attempt to create /tmp/' . $ts . ' in wmi_helper::copy_to_windows succeeded.';
                $log->severity = 5;
                discovery_log($log);
            } else {
                $log->message = 'Attempt to create /tmp/' . $ts . ' in wmi_helper::copy_to_windows failed.';
                $log->severity = 5;
                discovery_log($log);
            }
            $log->command = '';

            $command = 'mount -t smbfs "smb://' . $domain . ';' . $username . ':' . $credentials->credentials->password . '@' . $ip . '/admin$" /private/tmp/' . $ts;
            $log->command = 'mount -t smbfs "smb://' . $domain . ';' . $username . ':******@' . $ip . '/admin$" /private/tmp/' . $ts;
            exec($command, $output, $return_var);
            if ($return_var != 0) {
                $log->message = 'Attempt to mount admin$ share in wmi_helper::copy_to_windows failed.';
                if (!empty($output[0])) {
                    $log->command_error_message = $output[0];
                }
                $log->severity = 5;
                discovery_log($log);
                $log->severity = 7;
                unset($log->command_error_message);
                return false;
            } else {
                $log->message = 'Attempt to mount admin$ share in wmi_helper::copy_to_windows succeeded.';
                discovery_log($log);
            }
            $log->command = '';

            $log->command = "copy($source, '/tmp/$ts/$destination')";
            if (copy($source, '/tmp/'.$ts.'/'.$destination) or die ('Could not copy ' . $source . ' to /tmp/' . $ts . '/' . $destination)) {
                $log->message = 'Attempt to copy ' . $destination . ' in wmi_helper::copy_to_windows succeeded.';
                discovery_log($log);
            } else {
                $log->message = 'Attempt to copy ' . $destination . ' in wmi_helper::copy_to_windows failed.';
                $log->severity = 5;
                discovery_log($log);
                $log->severity = 7;
            }
            $log->command = '';

            $command = 'umount /private/tmp/'.$ts;
            $log->command = $command;
            exec($command, $output, $return_var);
            if ($return_var != 0) {
                $log->message = 'Attempt to unmount /private/tmp/' . $ts . ' in wmi_helper::copy_to_windows failed.';
                $log->severity = 5;
                $log->command_error_message = $output[0];
                discovery_log($log);
                $log->severity = 7;
                unset($log->command_error_message);
                return false;
            } else {
                $log->message = 'Attempt to unmount /private/tmp/' . $ts . ' in wmi_helper::copy_to_windows succeeded.';
                discovery_log($log);
            }
            $log->command = '';

        }

        if (php_uname('s') == 'Linux') {
            $command = 'which smbclient';
            exec($command, $output, $return_var);
            if ($return_var != 0) {
                $log->command = 'which smbclient';
                $log->message = 'Linux attempt to copy file to windows, without useable smbclient in wmi_helper::copy_to_windows';
                $log->severity = 5;
                discovery_log($log);
                $log->severity = 7;
                return false;
            }
            $log->command = '';

            $password = str_replace('$', '\$', $credentials->credentials->password);
            $password = str_replace("'", "", escapeshellarg($password));
            $username = str_replace("'", "", escapeshellarg($credentials->credentials->username));
            $command = 'smbclient \\\\\\\\'.$ip.'\\\\' . $share . ' -U "' . $username . '%' . $password . '" -c "put ' . $source . ' ' . $destination . ' 2>&1"';
            $log->command = 'smbclient \\\\\\\\'.$ip.'\\\\' . $share . ' -U "' . $username . '%******" -c "put ' . $source . ' ' . $destination . ' 2>&1"';
            exec($command, $output, $return_var);
            if ($return_var == 0) {
                $log->message = 'Linux attempt (1) to copy file to ' . $ip . ' succeeded in wmi_helper::copy_to_windows';
                $log->severity = 7;
                stdlog($log);
                return true;
            } else {
                $log->message = 'Linux attempt (1) to copy file to ' . $ip . ' failed in wmi_helper::copy_to_windows. Error:' . $output[0];
                $log->severity = 5;
                stdlog($log);
                $temp = explode('@', $credentials->credentials->username);
                $command = 'smbclient \\\\\\\\'.$ip.'\\\\' . $share . ' -U "' . $temp[1] . '\\' . $temp[0] . '%' . $password . '" -c "put ' . $source . ' ' . $destination . ' 2>&1"';
                exec($command, $output, $return_var);
                if ($display == 'y') {
                    echo 'DEBUG - Windows Copy Command: ' . str_replace($password, '******', $command) . "\n";
                }
                if ($return_var == 0) {
                    $log->message = 'Linux attempt (2) to copy file to ' . $ip . ' succeeded in wmi_helper::copy_to_windows';
                    $log->severity = 7;
                    stdlog($log);
                    return true;
                } else {
                    $log->message = 'Linux attempt (2) to copy file to ' . $ip . ' failed in wmi_helper::copy_to_windows. Error:' . $output[0];
                    $log->severity = 5;
                    stdlog($log);
                    return false;
                }
            }
        }

        if (php_uname('s') == 'Windows NT') {
            # NOTE - the file to be copied MUST be in c:\windows\
            $temp = explode('@', $credentials->credentials->username);
            $username = $temp[0];
            if (!empty($temp[1])) {
                $domain = $temp[1] . '/';
            } else {
                $domain = '';
            }
            unset($temp);
            $command = 'c:\xampplite\open-audit\other\paexec.exe \\\\' . $ip . ' -u ' . $domain . $username . ' -p ' . $credentials->credentials->password . ' -c "c:\\windows\\' . $source . '"';
            $log->command = 'c:\xampplite\open-audit\other\paexec.exe \\\\' . $ip . ' -u ' . $domain . $username . ' -p ****** -c "c:\\windows\\' . $source . '"';
            $log->message = 'Copying file to Windows.';
            discovery_log($log);
            exec($command, $output, $return_var);
            return true;
            # NOTE - We expect this to report that it fails as paexec attempts to EXECUTE the file.
            # In this function, we just want the file copied to the target, which does appear to work as it should.
            // if ($return_var == 0) {
            //     $log->message = 'Windows attempt to copy file to ' . $ip . ' succeeded in wmi_helper::copy_to_windows';
            //     $log->severity = 7;
            //     stdlog($log);
            //     return true;
            // } else {
            //     $log->message = 'Windows attempt to copy file to ' . $ip . ' failed in wmi_helper::copy_to_windows.';
            //     $log->severity = 5;
            //     stdlog($log);
            //     return false;
            // }
        }
    }
}


if (! function_exists('wmi_command')) {
    /**
     * The SSH credentials test. 
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param     username  The username used to connect
     *
     * @param     password  The password used to connect
     *
     * @param     ip        The target device's ip address
     *
     * @param     command   The command to be run using SSH
     *
     * @param     display   Should we output to the screen or not?
     *
     * @return    false || $return array containing the output and status flag
     */
   function wmi_command($ip = '', $credentials, $command = '', $log)
    {

        $log->file = 'wmi_helper';
        $log->function = 'wmi_command';
        $return = array('output' => '', 'status' => '');

        if (empty($ip)) {
            $log->message = 'No IP supplied to wmi_helper::wmi_command';
            discovery_log($log);
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to wmi_helper::wmi_command';
            discovery_log($log);
            return false;
        }

        if (!is_object($credentials)) {
            $log->message = 'No credentials passed to wmi_helper::wmi_command';
            discovery_log($log);
            return false;
        }

        if ($command == '') {
            $log->message = 'No command passed to wmi_helper::wmi_command';
            discovery_log($log);
            return false;
        }

        if (!empty($credentials->credentials->password)) {
            $password = str_replace('$', '\$', $credentials->credentials->password);
        } else {
            $password = false;
        }

        if (!empty($credentials->credentials->username)) {
            $username = $credentials->credentials->username;
            $temp = explode('@', $username);
            $username = $temp[0];
            if (count($temp) > 1) {
                $domain = $temp[1];
            } else {
                $domain = '';
            }
            unset($temp);
        } else {
            $username = false;
            $domain = false;
        }

        if (!$username or !$password) {
            $log->message = 'Missing credentials passed to wmi_helper::wmi_command';
            discovery_log($log);
            return false;
        }

        if (php_uname('s') == 'Darwin') {
            if (!file_exists('/usr/local/bin/winexe')) {
                $log->message = 'Winexe not installed on OSX, cannot run wmi_command.';
                discovery_log($log);
                return false;
            }
            $temp = explode('@', $credentials->credentials->username);
            $username = $temp[0];
            $domain = $temp[1];
            unset($temp);
            $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/open-audit/other";
            $command_string = '/usr/local/bin/winexe -U ' . $domain . '/' . $username . '%' . $password . ' //' . $ip . ' \'wmic ' . $command . '\'';
            $log->command = '/usr/local/bin/winexe -U ' . $domain . '/' . $username . '%****** //' . $ip . ' \'wmic ' . $command . '\'';
            $log->message = "Attempting to execute command";
            $log->id = discovery_log($log);
            $item_start = microtime(true);
            exec($command_string, $return['output'], $return['status']);
        }

        if (php_uname('s') == 'Linux') {
            $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/open-audit/other";
            if ($domain != '') {
                $domain .= '/';
            }
            # $command_string = 'timeout 5m ' . $filepath . "/winexe-static -U ".str_replace("'", "", escapeshellarg($username))."%".str_replace("'", "", escapeshellarg($password))." --uninstall //".str_replace("'", "", escapeshellarg($ip))." \"wmic $command\" ";
            
            #$command_string = 'timeout 5m ' . $filepath . "/winexe-static -U ".$domain.'/'.escapeshellarg($username)."%".str_replace("'", "", escapeshellarg($password))." --uninstall //".str_replace("'", "", escapeshellarg($ip))." \"wmic $command\" ";
            
            $command_string = 'timeout 5m ' . $filepath . "/winexe-static -U ".$domain.escapeshellarg($username)."%".str_replace("'", "", escapeshellarg($password))." --uninstall //".str_replace("'", "", escapeshellarg($ip))." \"wmic $command\" ";
            $log->command = 'timeout 5m ' . $filepath . "/winexe-static -U ".$domain.escapeshellarg($username)."%****** --uninstall //".str_replace("'", "", escapeshellarg($ip))." \"wmic $command\" ";
            $log->message = "Attempting to execute command";
            $log->id = discovery_log($log);
            $item_start = microtime(true);
            exec($command_string, $return['output'], $return['status']);
        }

        if (php_uname('s') == 'Windows NT') {
            if ($domain != '') {
                $domain .= '\\';
            }
            $command_string = '%comspec% /c start /b wmic /Node:"' . $ip . '" /user:"' . $domain.$username . '" /password:"' . str_replace('"', '\"', $password) . '" ' . $command;
            $log->command = '%comspec% /c start /b wmic /Node:"' . $ip . '" /user:"' . $domain.$username . '" /password:"******" ' . $command;
            $log->message = "Attempting to execute command";
            $log->id = discovery_log($log);
            $item_start = microtime(true);
            exec($command_string, $return['output'], $return['status']);
            if (empty($return['output'][0])) {
                $return['status'] = 1;
            }
        }

        $log->command_time_to_execute = (microtime(true) - $item_start);
        if ($return['status'] != '0') {
            $log->command_status = 'fail';
            if (!empty($return['output'][0])) {
                $log->command_output = $return['output'][0];
            }
        } else {
            $log->command_status = 'success';
            if (!empty($return['output'][1])) {
                $log->command_output = $return['output'][1];
            }
        }
        discovery_log($log);
        unset($log->id, $log->command, $log->command_status, $log->command_time_to_execute, $log->command_output);
        return($return);
    }
}



if (! function_exists('wmi_audit')) {
    function wmi_audit($ip = '', $credentials, $log)
    {
        $log->file = 'wmi_helper';
        $log->function = 'wmi_audit';
        $log->message = 'WMI audit starting';
        discovery_log($log);


        if (empty($ip)) {
            $log->message = 'No IP supplied to wmi_helper::wmi_audiy.';
            discovery_log($log);
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to wmi_helper::wmi_audit.';
            discovery_log($log);
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to wmi_helper::wmi_audit.';
            discovery_log($log);
            return false;
        }

        $details = new stdClass();

        # UUID
        $command = 'csproduct get uuid';
        $wmi_result = wmi_command($ip, $credentials, $command, $log);
        if ($wmi_result['status'] == 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->uuid = $wmi_result['output'][1];
            }
        }

        # Serial
        $command = 'csproduct get IdentifyingNumber';
        $wmi_result = wmi_command($ip, $credentials, $command, $log);
        if ($wmi_result['status'] == 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->serial = $wmi_result['output'][1];
            }
        }

        # Manufacturer
        $command = 'csproduct get vendor';
        $wmi_result = wmi_command($ip, $credentials, $command, $log);
        if ($wmi_result['status'] == 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->manufacturer = $wmi_result['output'][1];
            }
        }

        # Description
        $command = 'os get description';
        $wmi_result = wmi_command($ip, $credentials, $command, $log);
        if ($wmi_result['status'] == 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->description = $wmi_result['output'][1];
            }
        }

        # Hostname / name
        $command = 'computersystem get name';
        $wmi_result = wmi_command($ip, $credentials, $command, $log);
        if ($wmi_result['status'] == 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->hostname = strtolower($wmi_result['output'][1]);
                $details->name = $details->hostname;
            }
        }

        # Domain / fqdn
        $command = 'computersystem get domain';
        $wmi_result = wmi_command($ip, $credentials, $command, $log);
        if ($wmi_result['status'] == 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->domain = strtolower($wmi_result['output'][1]);
                $details->fqdn = $details->hostname . '.' . $details->domain;
            }
        }

        # OS Name
        $command = 'os get name';
        $wmi_result = wmi_command($ip, $credentials, $command, $log);
        if ($wmi_result['status'] == 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->os_name = $wmi_result['output'][1];
                $details->os_name = trim(substr($details->os_name, 0, stripos($details->os_name, '|')));
                if (stripos($details->os_name, " 95") !== false) {
                    $details->os_family = "Windows 95";
                }
                if (stripos($details->os_name, " 98") !== false) {
                    $details->os_family = "Windows 98";
                }
                if (stripos($details->os_name, " NT") !== false) {
                    $details->os_family = "Windows NT";
                }
                if (stripos($details->os_name, " 2000") !== false) {
                    $details->os_family = "Windows 2000";
                }
                if (stripos($details->os_name, " XP") !== false) {
                    $details->os_family = "Windows XP";
                }
                if (stripos($details->os_name, "2003") !== false) {
                    $details->os_family = "Windows 2003";
                }
                if (stripos($details->os_name, "Vista") !== false) {
                    $details->os_family = "Windows Vista";
                }
                if (stripos($details->os_name, "2008") !== false) {
                    $details->os_family = "Windows 2008";
                }
                if (stripos($details->os_name, "Windows 7") !== false) {
                    $details->os_family = "Windows 7";
                }
                if (stripos($details->os_name, "Windows 8") !== false) {
                    $details->os_family = "Windows 8";
                }
                if (stripos($details->os_name, "2012") !== false) {
                    $details->os_family = "Windows 2012";
                }
                if (stripos($details->os_name, "Windows 10") !== false) {
                    $details->os_family = "Windows 10";
                }
            }
        }

        $log->file = 'wmi_helper';
        $log->function = 'wmi_audit';
        $log->message = 'WMI audit complete';
        discovery_log($log);

        return($details);
    }
}
