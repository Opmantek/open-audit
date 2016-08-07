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
 * @version 1.12.8
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (! function_exists('ssh_create_keyfile')) {
    function ssh_create_keyfile ($key_string, $display = 'n') {
        if (strtolower($display) != 'y') {
            $display = 'n';
        } else {
            $display = 'y';
        }
        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';
        $log->display = $display;

        if (empty($key_string)) {
            $log->message = 'No key_string array passed to ssh_create_keyfile.';
            stdlog($log);
            return false;
        }

        $CI = & get_instance();
        if (php_uname('s') != 'Windows NT') {
            $ssh_keyfile = $CI->config->config['base_path'] . '/other/scripts/key_' . date('y_m_d_H_i_s');
        } else {
            $ssh_keyfile = $CI->config->config['base_path'] . '\\other\\scripts\\key_' . date('y_m_d_H_i_s');
        }

        $fp = fopen($ssh_keyfile, 'w') or die ("Could not open $ssh_keyfile for writing");
        chmod($ssh_keyfile, 0600) or die ("Could not chmod $ssh_keyfile to 0666");
        fwrite($fp, $key_string) or die ("Could not write into $ssh_keyfile");
        fclose($fp) or die ("Could not close $ssh_keyfile");
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
     * @param     display     Should we echo the output to te screen?
     *
     * @return    FALSE || credentials object with an additional flag for 'sudo' and root
     */
    function ssh_credentials($ip = '', $credentials = array(), $display = 'n')
    {
        if (strtolower($display) != 'y') {
            $display = 'n';
        } else {
            $display = 'y';
        }
        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';
        $log->display = $display;
        if (empty($credentials)) {
            $log->message = 'No credentials array passed to ssh_credentials.';
            stdlog($log);
            return false;
        }
        if (empty($ip) or !filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No IP passed or bad IP to ssh_credentials.';
            stdlog($log);
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
                    # write out our key file
                    # now try to connect
                    $result = false;
                    $result = ssh_command($ip, $credential, 'uname', $display);
                    if ($result['status'] == 0) {
                        return($credential);
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
                if ($result = ssh_command($ip, $credential, 'uname', $display)) {
                    # Successful connect
                    if ($result['status'] == 0) {
                            # Did we use root?
                        if ($credential->root) {
                            # yes we did use root
                            $log->message = "Credential set" . $from . "working on " . $ip;
                            stdlog($log);
                            return $credential;
                        } else {
                            # no we didn't use root - is sudo on the box?
                            if ($result = ssh_command($ip, $credential, 'which sudo', $display)) {
                                # yes, sudo is present
                                $sudo_binary = $result['output'][0];
                                $command = 'echo ' . $credential->credentials->password . ' | sudo -S whoami';
                                # can we use sudo?
                                if ($result = ssh_command($ip, $credential, $command, $display)) {
                                    # yes, we can use sudo
                                    if ($result['status'] == 0) {
                                        # the command ran AND we got no returned error status - we can use sudo
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
            $log->message = "Credential set from" . $from . "working on " . $ip;
            stdlog($log);
            return $connected[0];
        } else {
            return false;
        }
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
     * @return    FALSE || $return array containing the output and status flag
     */
   function ssh_command($ip = '', $credentials, $command = '', $display = 'n')
    {
        if (strtolower($display) != 'y') {
            $display = 'n';
        } else {
            $display = 'y';
        }
        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';
        $log->display = $display;
        if (empty($ip)) {
            $log->message = 'No IP supplied to ssh_command function.';
            stdlog($log);
            return false;
        }
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to ssh_command function.';
            stdlog($log);
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to ssh_command function.';
            stdlog($log);
            return false;
        } else {
            if ($credentials->type == 'ssh') {
                $username = escapeshellarg($credentials->credentials->username);
                $password = $credentials->credentials->password;
            } elseif ($credentials->type == 'ssh_key') {
                $username = escapeshellarg($credentials->credentials->username);
                $password = '';
                $keyfile = ssh_create_keyfile($credentials->credentials->ssh_key);
            } else {
                $log->message = 'No username / password combo or keyfile supplied to ssh_command function.';
                stdlog($log);
                return false;
            }
        }
        if (empty($command)) {
            $log->message = 'No command supplied to ssh_command function.';
            stdlog($log);
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
                    # NOT SUPPORTED YET
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
                    stdlog($log);
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
                #$command_string = $filepath . '\\plink.exe -pw ' . $this->escape_plink_command($details->ssh_password).' '.$username.'@'.$details->ip." \"".$this->config->item('discovery_linux_script_directory').$audit_script." submit_online=y create_file=n url=".$url."index.php/system/add_system debugging=1 system_id=".$details->id." self_delete=y\"";
                $command_string = $filepath . '\plink.exe -ssh ' . $username . "@" . $ip . ' -pw ' . $password . ' ' . $command;
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
                unlink($keyfile);
            }
        }

        $command_string = str_replace($password, '******', $command_string);
        $command_string = str_replace(str_replace('"', '\"', $password), '******', $command_string);
        $command_string = str_replace(escapeshellarg($password), '******', $command_string);

        if ($return['status'] != '0') {
            $log->message = 'SSH command \'' . $command_string . '\' on ' . $ip . ' failed';
            stdlog($log);
        } else {
            $log->message = 'SSH command \'' . $command_string . '\' on ' . $ip . ' succeeded';
            stdlog($log);
        }

        if ($display == 'y') {
            echo 'DEBUG - Command Executed: '.$command_string."\n";
            echo 'DEBUG - Return Value: '.$return['status']."\n";
            echo "DEBUG - Command Output:\n";
            $formatted_output = implode("\n", $return['output']);
            $formatted_output = htmlentities($formatted_output);
            $formatted_output = explode("\n", $formatted_output);
            if (end($formatted_output) == '') {
                unset($formatted_output[count($formatted_output)-1]);
            }
            print_r($formatted_output);
            echo "\n";
            echo "\n";
            ob_flush();
            flush();
        }
        return($return);
    }
}

if (! function_exists('ssh_audit')) {
    function ssh_audit($ip = '', $credentials, $display = 'n')
    {
        if (strtolower($display) != 'y') {
            $display = 'n';
        } else {
            $display = 'y';
        }

        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';
        $log->display = $display;

        if (empty($ip)) {
            $log->message = 'No IP supplied to ssh_audit function.';
            stdlog($log);
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to ssh_audit function.';
            stdlog($log);
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to ssh_audit function.';
            stdlog($log);
            return false;
        }

        $details = new stdClass();

        $command = 'uname';
        $ssh_result = ssh_command($ip, $credentials, $command, $display);
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
            $ssh_result = ssh_command($ip, $credentials, $command, $display);
            foreach ($ssh_result['output'] as $line) {
                if (stripos($line, 'Windows') !== false) {
                    $details->os_group = 'Windows';
                }
            }
        }
        unset($ssh_result);

        if ($details->os_group == 'Windows') {
            # We don't support SSH auditing to Windows at the moment
            return($details);
        }

        # DD-WRT specific test
        $command = 'cat /etc/motd | grep -i DD-WRT';
        $ssh_result = ssh_command($ip, $credentials, $command, $display);
        if ($ssh_result['status'] == 0) {
            if (stripos($ssh_result['output'][0], 'dd-wrt') !== false) {
                $details->os_family = 'DD-WRT';
                $details->os_name = trim($ssh_result['output'][0]);
                $details->type = 'router';
            }
        }

        # Hostname
        $command = 'hostname -s';
        $ssh_result = ssh_command($ip, $credentials, $command, $display);
        if ($ssh_result['status'] == 0) {
            $details->hostname = $ssh_result['output'][0];
        }

        # FQDN
        $command = 'hostname -f | grep -F .';
        $ssh_result = ssh_command($ip, $credentials, $command, $display);
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
                $ssh_result = ssh_command($ip, $credentials, $command, $display);
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
                    $ssh_result = ssh_command($ip, $credentials, $command, $display);
                    if ($ssh_result['status'] == 0) {
                        $details->uuid = $ssh_result['output'][0];
                    }
                }
            }
        }

        # DBUS identifier on Linux (no need for sudo/root)
        if ($details->os_group == 'Linux') {
            $command = 'cat /var/lib/dbus/machine-id';
            $ssh_result = ssh_command($ip, $credentials, $command, $display);
            if ($ssh_result['status'] == 0) {
                $details->dbus_identifier = $ssh_result['output'][0];
            }
        }

        # UUID on ESX
        if ($details->os_group == 'VMkernel') {
            $command = "vim-cmd hostsvc/hostsummary | sed -n '/^   hardware = (vim.host.Summary.HardwareSummary) {/,/^   \},/p' | grep uuid | cut -d= -f2 | sed 's/,//g' | sed 's/\\\"//g'";
            $ssh_result = ssh_command($ip, $credentials, $command, $display);
            if ($ssh_result['status'] == 0) {
                $details->uuid = $ssh_result['output'][0];
            }
        }

        # UUID on OSX
        if ($details->os_group == 'Darwin') {
            $command = 'system_profiler SPHardwareDataType | grep UUID | cut -d: -f2';
            $ssh_result = ssh_command($ip, $credentials, $command, $display);
            if ($ssh_result['status'] == 0) {
                $details->uuid = $ssh_result['output'][0];
            }
        }

        # Model and Manufuacturer (maybe) on DD-WRT
        if (isset($details->os_family) and $details->os_family == 'DD-WRT') {
            $command = 'nvram get DD_BOARD';
            $ssh_result = ssh_command($ip, $credentials, $command, $display);
            if ($ssh_result['status'] == 0) {
                $details->model = $ssh_result['output'][0];
            }
            if (stripos($details->model, "tplink") !== false) {
                $details->manufacturer = "TP-Link Technology";
            }
        }
        return $details;
    }
}

if (! function_exists('scp')) {
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
     * @param     display
     *
     * @return    TRUE || FALSE [depending on if the file could be copied]
     */
    function scp($ip = '', $credentials, $source = '', $destination = '', $display = 'n')
    {
        if (strtolower($display) != 'y') {
            $display = 'n';
        } else {
            $display = 'y';
        }

        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';
        $log->display = $display;

        if (empty($ip)) {
            $log->message = 'No IP supplied to ssh_helper::scp function.';
            stdlog($log);
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'No valid IP supplied to ssh_helper::scp function.';
            stdlog($log);
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to ssh_helper::scp function.';
            stdlog($log);
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
            stdlog($log);
            return false;
        }

        if (empty($destination)) {
            $log->message = 'No destination supplied to ssh_helper::scp function.';
            stdlog($log);
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
                $command = $filepath . '\pscp.exe -pw "' . $password . '" ' . $source . ' ' . $user . '@' . $host . ':' . $destination;
                $echo = str_replace($password, '******', $command);
                exec($command, $return['output'], $return['status']);
            } elseif ($credentials->type == 'ssh_key') {
                $command = $filepath . '\pscp.exe -i "' . $keyfile . '" ' . $source . ' ' . $user . '@' . $host . ':' . $destination;
                $echo = $command;
                exec($command, $return['output'], $return['status']);
            }
        }

        if ($display == 'y') {
            echo 'DEBUG - Command Executed: '.$echo."\n";
            echo 'DEBUG - Return Value: '.$return['status']."\n";
            echo "DEBUG - Command Output:\n";
            $formatted_output = implode("\n", $return['output']);
            $formatted_output = htmlentities($formatted_output);
            $formatted_output = explode("\n", $formatted_output);
            if (end($formatted_output) == '') {
                unset($formatted_output[count($formatted_output)-1]);
            }
            print_r($formatted_output);
            echo "\nDEBUG ---------------\n";
        }

        if ($return['status'] != '0') {
            $log->message = 'SCP copy \'' . $source . '\' to ' . $ip . ' failed';
            stdlog($log);
            return false;
        } else {
            $log->message = 'SCP copy \'' . $source . '\' to ' . $ip . ' succeeded';
            stdlog($log);
            return true;
        }
    }
}

/* End of file ssh_helper.php */
/* Location: ./system/application/helpers/ssh_helper.php */
