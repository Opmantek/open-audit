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
 * @version 1.12.6
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (! function_exists('ssh_connect')) {
    /**
     * The SSH connection attempt using specific, supplied and default credentials
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param     details        An object containing details of the device being connected to
     *
     * @return    TRUE || FALSE [depending on if a connection could be established]
     */
    # NOTE - your controller must load m_system model, log helper, encrypt library and have loaded m_oa_config and run load_config.
    function ssh_connect($details = null, $credentials = null)
    {
        error_reporting(E_ALL);
        $CI = & get_instance();
        $CI->load->model('m_system');
        $CI->load->helper('log');
        $CI->load->library('encrypt');
        $CI->load->model('m_oa_config');

        $log_details = new stdClass();
        $log_details->file = 'system';
        $log_details->severity = 7;

        $ip = '';
        $id = 0;
        $username = '';
        $password = '';

        // we must have a $details object containing either an ip address or system id
        if (is_null($details)) {
            return false;
        }

        # must provide an ip address or a system id
        if (!isset($details->man_ip_address ) and !isset($details->ip) and !isset($details->system_id) and !isset($details->id)) {
            return false;
        }

        if (isset($details->man_ip_address) and $details->man_ip_address != '' and filter_var($details->man_ip_address, FILTER_VALIDATE_IP)) {
            $ip = $details->man_ip_address;
        }
        if (isset($details->ip) and $details->ip != '' and filter_var($details->ip, FILTER_VALIDATE_IP)) {
            $ip = $details->ip;
        }

        if (isset($details->system_id) and $details->system_id != '') {
            $id = intval($details->system_id);
        }
        if (isset($details->id) and $details->id != '') {
            $id = intval($details->id);
        }

        # get the device specific credentials (if there are any)
        if ($id != 0) {
            $device_specific_credentials = $CI->m_system->get_access_details($id);
            $device_specific_credentials = $CI->encrypt->decode($device_specific_credentials);
            $specific = json_decode($device_specific_credentials);
            $username = @$specific->ssh_username;
            $password = @$specific->ssh_password;
            if ($ip == '') {
                $ip = @$specific->ip_address;
                $details->man_ip_address = $ip;
            }
            unset($device_specific_credentials);
            unset($specific);
        }

        # use the ip address from system.man_ip_address
        if ($ip == '' and $id != 0) {
            $ip = $CI->m_system->check_man_ip_address($id);
            $details->man_ip_address = $ip;
        }

        # we don't have a system_id or an ip address
        if ($id == 0 and $ip == '') {
            return false;
        }

        # try to connect using the device specific credentials
        if ($username != '' and $password != '') {
            if (ssh_connect_action($username, $password, $ip)) {
                $details->ssh_username = $username;
                $details->ssh_password = $password;
                return true;
            }
        }

        # try to connect using the provided credentials
        $username = '';
        $password = '';
        if (isset($credentials->ssh_username) and isset($credentials->ssh_password)) {
            $username = $credentials->ssh_username;
            $password = $credentials->ssh_password;
        }
        if ($username != '' and $password != '') {
            if (ssh_connect_action($username, $password, $ip)) {
                $details->ssh_username = $username;
                $details->ssh_password = $password;
                return true;
            }
        }

        # try to connect using the default credentials
        $username = '';
        $password = '';
        $username = $CI->config->config['default_ssh_username'];
        $password = $CI->config->config['default_ssh_password'];
        if ($username != '' and $password != '') {
            if (ssh_connect_action($username, $password, $ip)) {
                $details->ssh_username = $username;
                $details->ssh_password = $password;
                return true;
            }
        }

        # if we haven't returned prior to this, then we haven't been able to connect.
        $details->ssh_username = '';
        $details->ssh_password = '';
        return false;
    }
}

if (! function_exists('ssh_connect_action')) {
    function ssh_connect_action($username, $password, $ip)
    {
        error_reporting(E_ALL);
        $CI = & get_instance();
        if (isset($CI->display)) {
            $display = $CI->display;
        } else {
            $display = 'n';
        }

        if (php_uname('s') == 'Linux') {
            $ssh_command = "timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ".escapeshellarg($username)."@".escapeshellarg($ip)." hostname ";
            $ssh_result = run_ssh($ssh_command, $password, $display);
            if ($ssh_result['status'] == '0') {
                return true;
            }
        }
        if (php_uname('s') == 'Windows NT') {
            # TODO - use a universal config item here
            $filepath = "c:\\xampplite\\open-audit\\other";
            $command_string = "echo y | $filepath\\plink.exe -ssh ".$username."@".$ip." -pw ".$password." exit";
            exec($command_string, $output, $return_var);
            if ($return_var == '0') {
                $command_string = "$filepath\\plink.exe -ssh ".$username."@".$ip." -pw ".$password." hostname";
                exec($command_string, $output, $return_var);
                if ($return_var == '0') {
                    return true;
                }
            }
        }
        return false;
    }
}

if (! function_exists('run_ssh')) {
    function run_ssh($ssh_command = '', $ssh_password = '', $ssh_display = 'n')
    {
        // $ssh_command should be your SSHPASS command string, sans password
        // ex: 'timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null user@target sleep 15'
        // $ssh_password should be what you wish to pass to that command
        // ex: the SSH password
        // $ssh_display is usually whatever is set in the discovery function $display variable
        $descriptorspec = array(
            0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
            1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
            2 => array("file", "/dev/null", "a"), // stderr is a file to write to
        );
        $cwd = '/tmp';
        $env = array();
        $return = array('output' => '', 'status' => '');
        if ($ssh_command != '') {
            $process = proc_open($ssh_command, $descriptorspec, $pipes, $cwd, $env);
            if (is_resource($process)) {
                fwrite($pipes[0], $ssh_password);
                fclose($pipes[0]);
                $temp = stream_get_contents($pipes[1]);
                $return['output'] = explode("\n", $temp);
                if (end($return['output']) == '') {
                    unset($return['output'][count($return['output'])-1]);
                }
                fclose($pipes[1]);
                $return['status'] = proc_close($process);
            }
            if ($ssh_display == 'y') {
                echo 'DEBUG - Command Executed: '.$ssh_command."\n";
                echo 'DEBUG - Return Value: '.$return['status']."\n";
                echo "DEBUG - Command Output:\n";
                $formatted_output = htmlentities($temp);
                $formatted_output = explode("\n", $formatted_output);
                if (end($formatted_output) == '') {
                    unset($formatted_output[count($formatted_output)-1]);
                }
                print_r($formatted_output);
            }
        }
        return($return);
    }
}



if (! function_exists('exec_ssh_command')) {
    function exec_ssh_command($details = null, $command = '', $ssh_display = 'n')
    {

        if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
            $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/open-audit/other";
        } else {
            $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."\\open-audit\\other";
        }

        // $details should have an ip, a username and a password
        if (!isset($details->man_ip_address) and !isset($details->ip)) {
            return false;
        } else {
            if (isset($details->man_ip_address) and $details->man_ip_address != '') {
                $ip = $details->man_ip_address;
            }
            if (isset($details->ip) and $details->ip != '') {
                $ip = $details->ip;
            }
        }
        if (!isset($details->ssh_username) or !isset($details->ssh_password)) {
            return false;
        } else {
            $username = $details->ssh_username;
            $password = $details->ssh_password;
        }

        // we should ahve a command to run
        if ($command == '') {
            return false;
        }

        $return = array('output' => '', 'status' => 1);

        if (php_uname('s') == 'Windows NT') {
            $command_string = "$filepath\\plink.exe -ssh " . $username . "@" . $ip . " -pw " . $password . " " . $command;
            exec($command_string, $output, $return_var);
            if ($display == 'y') {
                echo 'DEBUG - Command Executed: '.$command_string."\n";
                echo 'DEBUG - Return Value: '.$return_var."\n";
                echo "DEBUG - Command Output:\n";
                $formatted_output = htmlentities($output);
                $formatted_output = explode("\n", $formatted_output);
                if (end($formatted_output) == '') {
                    unset($formatted_output[count($formatted_output)-1]);
                }
                print_r($formatted_output);
            }
            if ($return_var != '0') {
                $error = 'SSH command on ' . $ip . ' failed to run, command: "' . $command . "'";
                $log_details->message = $error;
                stdlog($log_details);
            }
            $return['output'] = explode("\n", $output);
            $return['status'] = $return_var;
        }

        if (php_uname('s') == 'Linux') {
            $command_string = "timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null " . escapeshellarg($username) . "@" . escapeshellarg($ip) . " " . $command . " ";
            // $ssh_command should be your SSHPASS command string, sans password
            // ex: 'timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null user@target sleep 15'
            // $ssh_password should be what you wish to pass to that command
            // ex: the SSH password
            // $ssh_display is usually whatever is set in the discovery function $display variable
            $descriptorspec = array(
                0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
                1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
                2 => array("file", "/dev/null", "a"), // stderr is a file to write to
            );
            $cwd = '/tmp';
            $env = array();
            $process = proc_open($command_string, $descriptorspec, $pipes, $cwd, $env);
            if (is_resource($process)) {
                fwrite($pipes[0], $password);
                fclose($pipes[0]);
                $temp = stream_get_contents($pipes[1]);
                $return['output'] = explode("\n", $temp);
                if (end($return['output']) == '') {
                    unset($return['output'][count($return['output'])-1]);
                }
                fclose($pipes[1]);
                $return['status'] = proc_close($process);
            }
            if ($ssh_display == 'y') {
                echo 'DEBUG - Command Executed: '.$command."\n";
                echo 'DEBUG - Return Value: '.$return['status']."\n";
                echo "DEBUG - Command Output:\n";
                $formatted_output = htmlentities($temp);
                $formatted_output = explode("\n", $formatted_output);
                if (end($formatted_output) == '') {
                    unset($formatted_output[count($formatted_output)-1]);
                }
                print_r($formatted_output);
            }
            if ($return['status'] != 0) {
                $error = 'SSH command on ' . $ip . ' failed to run, command: "' . $command . "'";
                $log_details->message = $error;
                stdlog($log_details);
            }
        }

        $command_string = null;
        $return_var = null;
        $output = null;
        unset($process);
        unset($descriptorspec);
        unset($cwd);
        unset($env);
        unset($formatted_output);
        #return($return);
        if ($return['status'] != 0) {
            return false;
        } else {
            return($return['output']);
        }

    }
}



/* End of file ssh_helper.php */
/* Location: ./system/application/helpers/ssh_helper.php */
