<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

if (! function_exists('windows_credentials')) {
    /**
     * Test Windows credentials.
     *
     * @param string $ip           The target device's ip address
     * @param array  $credentials  An array of credentials objects
     * @param int    $discovery_id The ID of the discovery being run
     *
     * @return false|object         A credentials object with an additional flag for 'sudo' and root, or false
     */
    function windows_credentials(string $ip = '', array $credentials = array(), int $discovery_id = null)
    {
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $log = new \StdClass();
        $log->severity = 7;
        $log->file = 'wmi_helper';
        $log->function = 'windows_credentials';
        $log->command = '';
        $log->command_output = '';
        $log->discovery_id = $discovery_id;
        $log->ip = $ip;

        if (empty($credentials)) {
            log_message('warning', 'No credentials array passed to windows_credentials.');
            return false;
        }
        if (empty($ip) or !filter_var($ip, FILTER_VALIDATE_IP)) {
            log_message('warning', 'No IP passed or bad IP to windows_credentials (' . $ip . ').');
            return false;
        }
        $log->ip = $ip;

        foreach ($credentials as $credential) {
            if ($credential->type === 'windows') {
                $log->file = 'wmi_helper';
                $log->function = 'windows_credentials';
                $log->message = 'Testing credential set ' . $credential->name;
                $log->command = 'csproduct get uuid';
                $wmi_result = wmi_command($ip, $credential, $log->command, $discovery_id);
                if ($wmi_result != false and $wmi_result['status'] == 0) {
                    $log->message = "Windows credentials complete. Credential set " . $credential->name . " working on " . $ip;
                    $log->command_status = 'success';
                    $discoveryLogModel->create($log);
                    return $credential;
                }
                $log->message = "Credential set for Windows named " . $credential->name . " not working on " . $ip;
                $log->command_status = 'notice';
                $discoveryLogModel->create($log);
            }
        }
        unset($log->command);
        $log->command_status = 'issue';
        $log->file = 'wmi_helper';
        $log->function = 'windows_credentials';
        $log->message = "WMI detected but no valid Windows credentials for $ip.";
        $log->command_output = @$wmi_result['output'][0];
        $log->severity = 5;
        $discoveryLogModel->create($log);
        return false;
    }
}

if (! function_exists('execute_windows')) {
    /**
     * Execute a command on a Windows device.
     *
     * @param string $ip           The target device's ip address
     * @param object $credentials  The credentials object
     * @param string $command      The command to be run using SSH
     * @param int    $discovery_id The ID of the discovery being run
     *
     * @return false|array          An array containing the output and status flag, or false
     */
    function execute_windows(string $ip = '', object $credentials = null, string $command = '', int $discovery_id = null)
    {
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $log = new \stdClass();
        $log->file = 'wmi_helper';
        $log->function = 'execute_windows';
        $log->command = '';
        $log->discovery_id = $discovery_id;

        if (function_exists('get_instance')) {
            $instance = & get_instance();
        } else {
            $instance = new stdClass();
            $instance->config = config('Openaudit');
        }

        if (empty($ip)) {
            log_message('warning', 'No IP supplied to wmi_helper::execute_windows');
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            log_message('warning', 'No valid IP supplied to wmi_helper::execute_windows');
            return false;
        }
        $log->ip = $ip;

        if (!is_object($credentials)) {
            log_message('warning', 'No credentials passed to wmi_helper::execute_windows');
            return false;
        }

        if ($command === '') {
            log_message('warning', 'No command passed to wmi_helper::execute_windows');
            return false;
        }

        if (php_uname('s') === 'Darwin') {
            if (!file_exists('/usr/local/bin/winexe')) {
                log_message('warning', 'Winexe not installed on OSX, cannot run execute_windows.');
                return false;
            }
            $temp = explode('@', $credentials->credentials->username);
            $username = $temp[0];
            $domain = @$temp[1];
            unset($temp);
            $command_string = 'winexe -U ' . $domain . '/' . $username . '%' . $credentials->credentials->password . ' //' . $ip . ' \'' . $command . '\'';
            $log->command   = 'winexe -U ' . $domain . '/' . $username . '%' . '******' .                            ' //' . $ip . ' \'' . $command . '\'';
            $discoveryLogModel->create($log);
            exec($command_string, $output, $return_var);
        }

        if (php_uname('s') === 'Linux') {
            $filepath = ROOTPATH . 'other';
            $filename = credentials_file($ip, $credentials);
            // For an unknown reason, if we attempt to execute an SMB2 command first and it does not work, the return var is NULL, which means success.
            // So before we attempt to actually run the audit script, try a WMIC query using SMB2 and determine which to use for the script.
            $command_string = "timeout 1m " . $filepath . "/winexe-static-2 -A " . $filename . " --uninstall //" . $ip . " \"wmic csproduct get uuid\" 2>&1";
            $item_start = microtime(true);
            exec($command_string, $output, $return_var);
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->output = (json_encode($output)) ? json_encode($output) : '';
            $log->command_status = 'notice';
            $log->command = $command_string;
            $output = '';
            $log->message = 'Winexe 2 tested and failed, so using Winexe.';
            $command_string = "timeout " . $instance->config->discovery_wmi_timeout . "s " . $filepath . "/winexe-static -A " . $filename . " --uninstall //$ip \"$command\" 2>&1";
            $win = 'winexe-static';
            if ($return_var == 0) {
                // Success, use SMB2
                $log->severity = 7;
                $log->message = 'Winexe 2 tested and working.';
                $command_string = "timeout " . $instance->config->discovery_wmi_timeout . "s " . $filepath . "/winexe-static-2 -A " . $filename . " --uninstall //$ip \"$command\" 2>&1";
                $win = 'winexe-static-2';
            }
            $discoveryLogModel->create($log);
            unset($return_var);
            $log->command_status = '';
            $log->command = $command_string;
            $item_start = microtime(true);
            exec($command_string, $output, $return_var);
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->command_output = (json_encode($output)) ? json_encode($output) : '';
            $log->command_status = 'notice';
            $log->message = 'Attempting to execute command using ' . $win . ' succeeded.';
            $log->severity = 7;
            if (empty($output)) {
                $log->severity = 5;
                $log->command_status = 'fail';
                $log->message = 'Attempting to execute command using ' . $win . ' failed.';
            }
            $discoveryLogModel->create($log);
            unlink($filename);
        }

        if (php_uname('s') == 'Windows NT') {
            $password = str_replace('"', '\"', $credentials->credentials->password);
            $command_string  = ROOTPATH . 'other\\paexec.exe \\\\' . $ip . ' -s -noname -u ' . $credentials->credentials->username . ' -p "' . $password . '" cmd /c "' . $command . '"';
            $log->command    = ROOTPATH . 'other\\paexec.exe \\\\' . $ip . ' -s -noname -u ' . $credentials->credentials->username . ' -p "' . '*******' . '" cmd /c "' . $command . '"';
            exec($command_string, $output, $return_var);
            $log->message = 'Running command script on ' . $ip;
            $log->command_output = json_encode($output);
            $log->command_status = 'fail';
            foreach ($output as $line) {
                if (stripos($line, "Microsoft (R) Windows Script") !== false) {
                    $log->command_status = 'success';
                }
            }
            foreach ($output as $line) {
                if (stripos($line, "Starting Audit") !== false) {
                    $log->command_status = 'success';
                }
            }
            $discoveryLogModel->create($log);
        }
        if ($return_var == 0) {
            return $output;
        }
        return false;
    }
}

if (! function_exists('copy_to_windows')) {
    /**
     * Copy a file to the target Windows device (usually the audit script).
     *
     * @param string $ip           The target device's ip address
     * @param object $credentials  The credentials object containing the username and password
     * @param string $share        Our share to use
     * @param string $source       Where to take the file from
     * @param string $destination  Where to copy the file to
     * @param int    $discovery_id The ID of the discovery being run
     *
     * @return bool True or False depending on success
     */
    function copy_to_windows(string $ip = '', object $credentials = null, string $share = '', string $source = '', string $destination = '', int $discovery_id = null): bool
    {
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $log = new \StdClass();
        $log->file = 'wmi_helper';
        $log->function = 'copy_to_windows';
        $log->discovery_id = $discovery_id;

        if (empty($ip)) {
            log_message('warning', 'No IP supplied to wmi_helper::copy_to_windows');
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            log_message('warning', 'No valid IP supplied to wmi_helper::copy_to_windows ' . $ip);
            return false;
        }
        $log->ip = $ip;

        if (!is_object($credentials)) {
            log_message('warning', 'No credentials passed to wmi_helper::copy_to_windows');
            return false;
        }

        if ($share === '') {
            log_message('warning', 'No share passed to wmi_helper::copy_to_windows');
            return false;
        }

        if ($source === '') {
            log_message('warning', 'No source passed to wmi_helper::copy_to_windows');
            return false;
        }

        if ($destination === '') {
            log_message('warning', 'No destination passed to wmi_helper::copy_to_windows');
            return false;
        }

        if (php_uname('s') === 'Darwin') {
            $timestamp = date('Y_m_d_H_i_s');
            $temp = explode('@', $credentials->credentials->username);
            $username = $temp[0];
            $domain = @$temp[1];
            unset($temp);
            $password = $credentials->credentials->password;
            if (!is_dir('/private/tmp')) {
                mkdir('/private/tmp') or die('OSX attempt to create /private/tmp failed in wmi_helper::copy_to_windows failed');
            }
            $log->command = "mkdir('/private/tmp')";
            if (mkdir('/private/tmp/' . $timestamp)) {
                $log->message = 'Attempt to create /tmp/' . $timestamp . ' in wmi_helper::copy_to_windows succeeded.';
                $log->severity = 5;
                $discoveryLogModel->create($log);
            } else {
                $log->message = 'Attempt to create /tmp/' . $timestamp . ' in wmi_helper::copy_to_windows failed.';
                $log->severity = 5;
                $discoveryLogModel->create($log);
            }
            $log->command = '';

            $command =      'mount -t smbfs "smb://' . $domain . ';' . $username . ':' . $password . '@' . $ip . '/admin$" /private/tmp/' . $timestamp;
            $log->command = 'mount -t smbfs "smb://' . $domain . ';' . $username . ':' . '*******' . '@' . $ip . '/admin$" /private/tmp/' . $timestamp;
            exec($command, $output, $return_var);
            if ($return_var != 0) {
                $log->message = 'Attempt to mount admin$ share in wmi_helper::copy_to_windows failed.';
                if (!empty($output[0])) {
                    $log->command_error_message = $output[0];
                }
                $log->severity = 5;
                $discoveryLogModel->create($log);
                $log->severity = 7;
                unset($log->command_error_message);
                return false;
            } else {
                $log->message = 'Attempt to mount admin$ share in wmi_helper::copy_to_windows succeeded.';
                $discoveryLogModel->create($log);
            }
            $log->command = '';

            $log->command = "copy($source, '/tmp/$timestamp/$destination')";
            if (copy($source, '/tmp/' . $timestamp . '/' . $destination) or die('Could not copy ' . $source . ' to /tmp/' . $timestamp . '/' . $destination)) {
                $log->message = 'Attempt to copy ' . $destination . ' in wmi_helper::copy_to_windows succeeded.';
                $discoveryLogModel->create($log);
            } else {
                $log->message = 'Attempt to copy ' . $destination . ' in wmi_helper::copy_to_windows failed.';
                $log->severity = 5;
                $discoveryLogModel->create($log);
                $log->severity = 7;
            }
            $log->command = '';

            $command = 'umount /private/tmp/' . $timestamp;
            $log->command = $command;
            exec($command, $output, $return_var);
            if ($return_var != 0) {
                $log->message = 'Attempt to unmount /private/tmp/' . $timestamp . ' in wmi_helper::copy_to_windows failed.';
                $log->severity = 5;
                $log->command_error_message = $output[0];
                $discoveryLogModel->create($log);
                $log->severity = 7;
                unset($log->command_error_message);
                return false;
            } else {
                $log->message = 'Attempt to unmount /private/tmp/' . $timestamp . ' in wmi_helper::copy_to_windows succeeded.';
                $discoveryLogModel->create($log);
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
                $discoveryLogModel->create($log);
                $log->severity = 7;
                log_message('error', 'Linux attempt to copy file to windows, without useable smbclient in wmi_helper::copy_to_windows');
                return false;
            }
            $log->command = '';
            $filename = credentials_file($ip, $credentials);
            $command = 'smbclient -m SMB2 \\\\\\\\' . $ip . '\\\\' . $share . ' -A ' . $filename . ' -c "put ' . $source . ' ' . $destination . ' 2>&1"';
            $log->command = $command;
            exec($command, $output, $return_var);
            if ($return_var == 0) {
                $log->message = 'Linux attempt using SMB2 to copy file to ' . $ip . ' succeeded in wmi_helper::copy_to_windows';
                $log->command_status = 'success';
                $log->command_output = '';
                $log->severity = 7;
                $discoveryLogModel->create($log);
            } else {
                $log->message = 'Linux attempt using SMB2 to copy file to ' . $ip . ' failed in wmi_helper::copy_to_windows.';
                $log->command_status = 'notice';
                $log->command_output = json_encode($output);
                $log->severity = 7;
                $discoveryLogModel->create($log);
                $command = 'smbclient \\\\\\\\' . $ip . '\\\\' . $share . ' -A ' . $filename . ' -c "put ' . $source . ' ' . $destination . ' 2>&1"';
                $log->command = $command;
                exec($command, $output, $return_var);
                if ($return_var == 0) {
                    $log->message = 'Linux attempt (SMB domain\\user) to copy file to ' . $ip . ' succeeded in wmi_helper::copy_to_windows';
                    $log->command_status = 'success';
                    $log->command_output = '';
                    $log->severity = 7;
                    $discoveryLogModel->create($log);
                } else {
                    $log->message = 'Linux attempt (SMB domain\\user) to copy file to ' . $ip . ' failed in wmi_helper::copy_to_windows';
                    $log->command_status = 'fail';
                    $log->command_output = json_encode($output);
                    $log->severity = 5;
                    $discoveryLogModel->create($log);
                }
            }
            unlink($filename);
            if ($return_var == 0) {
                return true;
            } else {
                return false;
            }
        }

        if (php_uname('s') === 'Windows NT') {
            $return = false;
            $password = str_replace('"', '\"', $credentials->credentials->password);
            $username = $credentials->credentials->username;

            $command      = 'net use "\\\\' . $ip . '\\admin$" /u:' . $username . ' "' . $password . '"';
            $log->command = 'net use "\\\\' . $ip . '\\admin$" /u:' . $username . ' "' . '*******' . '"';
            $output = '';

            exec($command, $output, $return_var);
            $log->command_status = 'fail';
            $log->message = 'Net Use';
            $log->command_output = json_encode($output);
            if ((!empty($output) and is_array($output) and $output[0] === 'The command completed successfully.') or $return_var === 0) {
                $log->command_status = 'success';
            }
            $discoveryLogModel->create($log);

            $command      = 'copy "' . $source . '" "\\\\' . $ip . '\\admin$\\' .  $destination . '"';
            $log->command = 'copy "' . $source . '" "\\\\' . $ip . '\\admin$\\' .  $destination . '"';
            $output = '';
            exec($command, $output, $return_var);
            $log->command_status = 'fail';
            $log->message = 'Copy to ' . $ip;
            $log->command_output = json_encode($output);
            if ((!empty($output) and is_array($output) and stripos($output[0], 'file(s) copied.') !== false) or $return_var === 0) {
                $log->command_status = 'success';
                $return = true;
            }
            $discoveryLogModel->create($log);

            $command      = 'net use "\\\\' . $ip . '\\admin$" /D';
            $log->command = 'net use "\\\\' . $ip . '\\admin$" /D';
            $output = '';
            exec($command, $output, $return_var);
            $log->command_status = 'fail';
            $log->message = 'Net Use Delete';
            $log->command_output = json_encode($output);
            if ((!empty($output) and is_array($output) and stripos($output[0], 'was deleted successfully') !== false) or $return_var === 0) {
                $log->command_status = 'success';
            }
            $discoveryLogModel->create($log);

            $log->message = '';
            $log->command = '';
            $log->command_output = '';
            $log->command_status = '';

            return $return;
        }
    }
}

if (! function_exists('delete_windows_result')) {
    /**
     * Delete the audit result from a Windows device.
     *
     * @param string $ip           The target device's ip address
     * @param object $credentials  The credentials object containing the username and password
     * @param string $share        Our share to use
     * @param string $file         The remote file to delete
     * @param int    $discovery_id The ID of the discovery being run
     *
     * @return bool True or False depending on success
     */
    function delete_windows_result(string $ip = '', object $credentials = null, string $share = '', string $file = '', int $discovery_id = null): bool
    {
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $log = new \StdClass();
        $log->file = 'wmi_helper';
        $log->function = 'delete_windows_result';
        $log->discovery_id = $discovery_id;

        if (empty($ip)) {
            log_message('error', 'No IP supplied to wmi_helper::delete_windows_result');
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            log_message('error', 'No valid IP supplied to wmi_helper::delete_windows_result ' . $ip);
            return false;
        }

        $log->ip = $ip;

        if (!is_object($credentials)) {
            log_message('error', 'No credentials passed to wmi_helper::delete_windows_result');
            return false;
        }

        if ($share === '') {
            log_message('error', 'No share passed to wmi_helper::delete_windows_result');
            return false;
        }

        if ($file == '') {
            log_message('error', 'No filename passed to wmi_helper::delete_windows_result');
            return false;
        }

        if (php_uname('s') == 'Linux') {
            $filename = credentials_file($ip, $credentials);
            $command = 'smbclient -m SMB2 \\\\\\\\' . $ip . '\\\\' . $share . ' -A ' . $filename . ' -c "del ' . $file . '"';
            $log->command = $command;
            exec($command, $output, $return_var);
            if ($return_var == 0) {
                $log->message = 'Linux attempt using SMB2 to delete file from ' . $ip . ' succeeded in wmi_helper::delete_windows_result';
                $log->command_status = 'success';
                $log->command_output = '';
                $log->severity = 7;
                $discoveryLogModel->create($log);
            } else {
                $log->message = 'Linux attempt using SMB2 to delete file from ' . $ip . ' failed in wmi_helper::delete_windows_result';
                $log->command_status = 'notice';
                $log->command_output = json_encode($output);
                $log->severity = 6;
                $discoveryLogModel->create($log);
                $command = 'smbclient \\\\\\\\' . $ip . '\\\\' . $share . ' -A ' . $filename . ' -c "del ' . $file . '"';
                $log->command = $command;
                exec($command, $output, $return_var);
                if ($return_var == 0) {
                    $log->message = 'Linux attempt using SMB1 to delete file from ' . $ip . ' succeeded in wmi_helper::delete_windows_result';
                    $log->command_status = 'success';
                    $log->command_output = '';
                    $log->severity = 7;
                    $discoveryLogModel->create($log);
                } else {
                    $log->message = 'Linux attempt using SMB1 to delete file from ' . $ip . ' failed in wmi_helper::delete_windows_result';
                    $log->command_status = 'fail';
                    $log->command_output = json_encode($output);
                    $log->severity = 5;
                    $discoveryLogModel->create($log);
                }
            }
            unlink($filename);
            if ($return_var == 0) {
                return true;
            }
            return false;
        }

        if (php_uname('s') == 'Windows NT') {
            // Must have paexec
            if (!file_exists(ROOTPATH . 'other\\paexec.exe')) {
                $log->message = 'You must have paexec.exe in ' . ROOTPATH . 'other\\';
                $log->command = '';
                $log->command_status = 'fail';
                $discoveryLogModel->create($log);
                return false;
            }
            $password = str_replace('"', '\"', $credentials->credentials->password);
            $username = $credentials->credentials->username;
            $command =      ROOTPATH . 'other\\paexec.exe \\\\' . $ip . ' -s -u ' . $username . ' -p "' . $password . '" cmd /c "del \\\\' . $ip . '\\' . $share . '\\' . $file . '"';
            $log->command = ROOTPATH . 'other\\paexec.exe \\\\' . $ip . ' -s -u ' . $username . ' -p "' . '*******' . '" cmd /c "del \\\\' . $ip . '\\' . $share . '\\' . $file . '"';
            exec($command, $output, $return_var);
            $log->message = 'Delete file on ' . $ip;
            $log->command_output = json_encode($output);
            if (empty($return_var)) {
                $return = false;
                $log->command_status = 'success';
            } else {
                $log->command_status = 'fail';
                $log->severity = 6;
                $return = true;
            }
            $discoveryLogModel->create($log);
            return $return;
        }
    }
}


if (!function_exists('copy_from_windows')) {
    /**
     * Copy a file from Windows to the Open-AudIT server (usually the audit result file).
     *
     * @param string $ip           The target device's ip address
     * @param object $credentials  The credential set
     * @param string $source       The source on the target
     * @param string $destination  The local destination
     * @param int    $discovery_id The ID of the discovery being run
     *
     * @return bool True or False depending on success
     */
    function copy_from_windows(string $ip = '', object $credentials = null, string $source = '', string $destination = '', int $discovery_id = null): bool
    {
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $log = new \StdClass();
        $log->file = 'wmi_helper';
        $log->function = 'copy_from_windows';
        $log->discovery_id = $discovery_id;

        if (empty($ip)) {
            log_message('error', 'No IP supplied to wmi_helper::copy_from_windows');
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            log_message('error', 'No valid IP supplied to wmi_helper::copy_from_windows ' . $ip);
            return false;
        }
        $log->ip = $ip;

        if (!is_object($credentials)) {
            log_message('error', 'No credentials passed to wmi_helper::copy_from_windows');
            return false;
        }

        if ($source === '') {
            log_message('error', 'No source passed to wmi_helper::copy_from_windows');
            return false;
        }

        if ($destination === '') {
            log_message('error', 'No destination passed to wmi_helper::copy_from_windows');
            return false;
        }

        if (php_uname('s') === 'Darwin') {
            $timestamp = date('Y_m_d_H_i_s');
            $temp = explode('@', $credentials->credentials->username);
            $username = $temp[0];
            $domain = @$temp[1];
            unset($temp);
            $password = $credentials->credentials->password;
            if (!is_dir('/private/tmp')) {
                if (!mkdir('/private/tmp')) {
                    log_message('error', 'OSX attempt to create /private/tmp failed in wmi_helper::copy_from_windows failed');
                    return false;
                }
            }
            $log->command = "mkdir('/private/tmp')";
            $log->message = 'Attempt to create /tmp/' . $timestamp . ' in wmi_helper::copy_from_windows failed.';
            $log->severity = 5;
            if (mkdir('/private/tmp/' . $timestamp)) {
                $log->message = 'Attempt to create /tmp/' . $timestamp . ' in wmi_helper::copy_from_windows succeeded.';
            }
            $discoveryLogModel->create($log);
            $log->command = '';

            $command =      'mount -t smbfs "smb://' . $domain . ';' . $username . ':' . $password . '@' . $ip . '/admin$" /private/tmp/' . $timestamp;
            $log->command = 'mount -t smbfs "smb://' . $domain . ';' . $username . ':' . '*******' . '@' . $ip . '/admin$" /private/tmp/' . $timestamp;
            exec($command, $output, $return_var);
            if ($return_var != 0) {
                $log->message = 'Attempt to mount admin$ share in wmi_helper::copy_from_windows failed.';
                if (!empty($output[0])) {
                    $log->command_error_message = $output[0];
                }
                $log->severity = 5;
                $discoveryLogModel->create($log);
                return false;
            }
            $log->message = 'Attempt to mount admin$ share in wmi_helper::copy_from_windows succeeded.';
            $discoveryLogModel->create($log);
            if (!copy($source, '/tmp/' . $timestamp . '/' . $destination)) {
                log_message('error', 'Could not copy ' . $source . ' to /tmp/' . $timestamp . '/' . $destination);
                $log->message = 'Attempt to copy ' . $destination . ' in wmi_helper::copy_from_windows failed.';
                $log->severity = 5;
                $discoveryLogModel->create($log);
                return false;
            }
            $log->command = "copy($source, '/tmp/$timestamp/$destination')";
            $log->message = 'Attempt to copy ' . $destination . ' in wmi_helper::copy_from_windows succeeded.';
            $discoveryLogModel->create($log);

            $command = 'umount /private/tmp/' . $timestamp;
            $log->command = 'umount /private/tmp/' . $timestamp;
            exec($command, $output, $return_var);
            if ($return_var != 0) {
                $log->message = 'Attempt to unmount /private/tmp/' . $timestamp . ' in wmi_helper::copy_from_windows failed.';
                $log->severity = 5;
                $log->command_error_message = $output[0];
                $discoveryLogModel->create($log);
                return false;
            }
            $log->message = 'Attempt to unmount /private/tmp/' . $timestamp . ' in wmi_helper::copy_from_windows succeeded.';
            $discoveryLogModel->create($log);
            $log->command = '';
        }

        if (php_uname('s') == 'Linux') {
            $command = 'which smbclient';
            exec($command, $output, $return_var);
            if ($return_var != 0) {
                $log->command = 'which smbclient';
                $log->message = 'Linux attempt to copy file from windows, without useable smbclient in wmi_helper::copy_from_windows';
                $log->severity = 5;
                $discoveryLogModel->create($log);
                return false;
            }
            $filename = credentials_file($ip, $credentials);
            $command = 'smbclient -m SMB2 \\\\\\\\' . $ip . '\\\\admin\$ -A ' . $filename . ' -c "get ' . $source . ' ' . $destination . ' 2>&1"';
            $log->command = $command;
            $output = '';
            exec($command, $output, $return_var);
            $log->command_output = json_encode($output);
            if ($return_var == 0) {
                $log->message = 'Linux attempt using SMB2 to copy file from ' . $ip . ' succeeded in wmi_helper::copy_from_windows';
                $log->command_status = 'success';
                $log->command_output = '';
                $log->severity = 7;
                $discoveryLogModel->create($log);
                unlink($filename);
                return true;
            }
            $log->message = 'Linux attempt using SMB2 to copy file from ' . $ip . ' failed in wmi_helper::copy_from_windows';
            $log->command_status = 'notice';
            $log->command_output = json_encode($output);
            $log->severity = 7;
            $discoveryLogModel->create($log);
            $command = 'smbclient \\\\\\\\' . $ip . '\\\\admin\$ -A ' . $filename . ' -c "get ' . $source . ' ' . $destination . ' 2>&1"';
            $log->command = $command;
            exec($command, $output, $return_var);
            $log->command_output = json_encode($output);
            if ($return_var == 0) {
                $log->message = 'Linux attempt using SMB1 to copy file from ' . $ip . ' succeeded in wmi_helper::copy_from_windows';
                $log->command_status = 'success';
                $log->command_output = '';
                $log->severity = 7;
                $discoveryLogModel->create($log);
                unlink($filename);
                return true;
            }
            $log->message = 'Linux attempt using SMB1 to copy file from ' . $ip . ' failed in wmi_helper::copy_from_windows.';
            $log->command_status = 'fail';
            $log->command_output = json_encode($output);
            $log->severity = 5;
            $discoveryLogModel->create($log);
            unlink($filename);
            return false;
        }

        if (php_uname('s') == 'Windows NT') {
            $password = str_replace('"', '\"', $credentials->credentials->password);
            $username = $credentials->credentials->username;

            $command      = 'net use "\\\\' . $ip . '\\admin$" /u:' . $username . ' "' . $password . '"';
            $log->command = 'net use "\\\\' . $ip . '\\admin$" /u:' . $username . ' "' . '*******' . '"';
            $output = '';

            exec($command, $output, $return_var);
            $log->command_status = 'fail';
            $log->message = 'Net Use';
            $log->command_output = json_encode($output);
            if ($output[0] == "The command completed successfully.") {
                $log->command_status = 'success';
            }
            $discoveryLogModel->create($log);

            $command =      'copy "\\\\' . $ip . '\\admin$\\' . $source . '" "' . $destination . '"';
            $log->command = 'copy "\\\\' . $ip . '\\admin$\\' . $source . '" "' . $destination . '"';
            $output = '';
            exec($command, $output, $return_var);
            $log->command_status = 'fail';
            $log->message = 'Copy from ' . $source;
            $log->command_output = json_encode($output);
            if (stripos($output[0], 'file(s) copied.') !== false) {
                $log->command_status = 'success';
            }
            $discoveryLogModel->create($log);

            $command =      'net use "\\\\' . $ip . '\\admin$" /D';
            $log->command = 'net use "\\\\' . $ip . '\\admin$" /D';
            $output = '';
            exec($command, $output, $return_var);
            $log->command_status = 'fail';
            $log->message = 'Net Use Delete';
            $log->command_output = json_encode($output);
            if (stripos($output[0], 'was deleted successfully') !== false) {
                $log->command_status = 'success';
            }
            $discoveryLogModel->create($log);

            $log->message = '';
            $log->command = '';
            $log->command_output = '';
            $log->command_status = '';

            if (file_exists($destination)) {
                return true;
            } else {
                return false;
            }
        }
    }
}

if (! function_exists('wmi_command')) {
    /**
     * Execute a Windows command on the target Windows device.
     *
     * @param string $ip           The target device's ip address
     * @param object $credentials  The credentials object containing the username and password
     * @param string $command      The command to be run
     * @param int    $discovery_id The ID of the discovery being run
     *
     * @return bool|array An array containing the output and status flag, or false
     */
    function wmi_command(string $ip = '', object $credentials = null, string $command = '', int $discovery_id = null)
    {
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();

        $return = array('output' => '', 'status' => '');

        if (empty($ip)) {
            log_message('error', 'No IP supplied to wmi_helper::wmi_command');
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            log_message('error', 'Invalid IP supplied to wmi_helper::wmi_command');
            return false;
        }

        if (!is_object($credentials)) {
            log_message('error', 'No credentials passed to wmi_helper::wmi_command');
            return false;
        }

        if ($command == '') {
            log_message('error', 'No command passed to wmi_helper::wmi_command');
            return false;
        }

        if (empty($credentials->credentials->username)) {
            log_message('error', 'Missing username passed to wmi_helper::wmi_command');
            return false;
        }

        if (empty($credentials->credentials->password)) {
            log_message('error', 'Missing password passed to wmi_helper::wmi_command');
            return false;
        }

        if (!empty($credentials->credentials->password)) {
            $password = str_replace('$', '\$', $credentials->credentials->password);
        } else {
            $password = false;
        }

        $log = new \StdClass();
        $log->file = 'wmi_helper';
        $log->function = 'wmi_command';
        $log->severity = 7;
        $log->discovery_id = $discovery_id;
        $log->ip = $ip;
        $log->message = 'Using credentials named ' . $credentials->name;
        $item_start = microtime(true);

        if (php_uname('s') === 'Darwin') {
            if (!file_exists('/usr/local/bin/winexe')) {
                log_message('warning', 'Winexe not installed on OSX, cannot run execute_windows.');
                return false;
            }
            $temp = explode('@', $credentials->credentials->username);
            $username = $temp[0];
            $domain = @$temp[1];
            unset($temp);
            $command_string = 'winexe -U ' . $domain . '/' . $username . '%' . $credentials->credentials->password . ' //' . $ip . " \"wmic $command\"";
            $log->command   = 'winexe -U ' . $domain . '/' . $username . '%' . '******' .                            ' //' . $ip . " \"wmic $command\"";
            $discoveryLogModel->create($log);
            exec($command_string, $return['output'], $return['status']);
        }

        if (php_uname('s') == 'Linux') {
            $filepath = ROOTPATH . 'other';
            $filename = credentials_file($ip, $credentials);
            $command_string = "timeout 1m " . $filepath . "/winexe-static-2 -A {$filename} --uninstall //" . $ip . " \"wmic $command\" 2>&1";
            $log->command   = $command_string;
            $log->message = 'Using credentials named ' . $credentials->name . ' to execute command using winexe-static-2';
            exec($command_string, $return['output'], $return['status']);
            // if ($return['status'] != '0') {
            //     $log->command_time_to_execute = (microtime(true) - $item_start);
            //     $log->command_status = 'notice';
            //     $log->command_output = json_encode($return['output']);
            //     $discoveryLogModel->create($log);
            //     unset($log->id, $log->command_status, $log->command_time_to_execute, $log->command_output);
            //     $log->command   = str_replace('winexe-static-2', 'winexe-static', $log->command);
            //     $log->message = 'Using credentials named ' . $credentials->name . ' to execute command using winexe-static';
            //     $return['output'] = '';
            //     $command_string = str_replace('winexe-static-2', 'winexe-static', $command_string);
            //     $item_start = microtime(true);
            //     exec($command_string, $return['output'], $return['status']);
            // }
            unlink($filename);
        }

        if (php_uname('s') == 'Windows NT') {
            $temp = explode('@', $credentials->credentials->username);
            $username = $temp[0];
            $domain = @$temp[1];
            if ($domain != '') {
                $domain .= '\\';
            }
            unset($temp);
            $password = $credentials->credentials->password;
            /*
            $ doesn't require escaping
            ' doesn't require escaping when using "password"
            " doesn't seem to work even when escaped using \"
            | can only be escaped by "
            */
            if ((strpos($password, '"') !== false) and (strpos($password, "'") !== false)) {
                $log->severity = 5;
                $log->message = 'Incompatible password (cannot have " or \' in a wmic password).';
                $log->command = '';
                $discoveryLogModel->create($log);
                return false;
            }
            $log->message = 'Attempting to execute command';
            $log->severity = 7;
            $log->command = '%comspec% /c start /b wmic /Node:"' . $ip . '" /user:"' . $domain . $username . '" /password:"' . '*******' . '" ' . $command;
            $command =      '%comspec% /c start /b wmic /Node:"' . $ip . '" /user:"' . $domain . $username . '" /password:"' . $password . '" ' . $command;
            $item_start = microtime(true);
            exec($command, $return['output'], $return['status']);
            if (empty($return['output'][0])) {
                $return['status'] = 1;
            }
        }

        $log->command_time_to_execute = (microtime(true) - $item_start);
        if ($return['status'] != '0') {
            $log->command_status = 'notice';
        } else {
            $log->command_status = 'success';
        }
        $log->command_output = json_encode($return['output']);
        $discoveryLogModel->create($log);
        return($return);
    }
}


if (!function_exists('windows_ips_found')) {
    /**
     * Retrieve the known IP and Mac addresses from a Windows device's arp table.
     *
     * @param string $ip           The target device's ip address
     * @param object $credentials  The credentials object containing the username and password
     * @param int    $discovery_id The ID of the discovery being run
     *
     * @return bool|array An array of discovered IP Addresses, or false
     */
    function windows_ips_found(string $ip = '', object $credentials = null, int $discovery_id = null)
    {
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $log = new \stdClass();
        $log->discovery_id = $discovery_id;
        $log->file = 'wmi_helper';
        $log->function = 'windows_ips_found';
        $log->severity = 7;
        $log->command_status = 'notice';
        $log->message = 'Retrieving arp table from Windows';

        if (empty($ip)) {
            log_message('error', 'No IP supplied to wmi_helper::windows_ips_found.');
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            log_message('error', 'No valid IP supplied to wmi_helper::windows_ips_found.');
            return false;
        }

        if (!is_object($credentials)) {
            log_message('error', 'No credentials supplied to wmi_helper::windows_ips_found.');
            return false;
        }

        $log->ip = $ip;
        $discoveryLogModel->create($log);
        $temp = execute_windows($ip, $credentials, 'arp -a', $discovery_id);
        $ips_found = array();
        foreach ($temp as $line) {
            if (strpos($line, 'dynamic') === false) {
                continue;
            }
            $line = trim(preg_replace("/ {2,}/", " ", $line));
            $line_array = explode(' ', $line);
            $ips_found[strtolower(str_replace('-', ':', $line_array[1]))] = $line_array[0];
        }
        return $ips_found;
    }
}


if (!function_exists('credentials_file')) {
    /**
     * Create our credentials file on disk and return the full path + filename.
     *
     * @param string $ip          The target device's ip address
     * @param object $credentials The credentials object containing the username and password
     *
     * @return string The path and filename
     */
    function credentials_file(string $ip = '', $credentials = null): string
    {
        $filename = str_replace('.', '', microtime());
        $filename = str_replace(' ', '', $filename);
        $filename = ROOTPATH  . "other/scripts/" . str_replace('.', '', $ip) . '_' . $filename . '.txt';
        $temp = explode('@', $credentials->credentials->username);
        $username = $temp[0];
        $domain = @$temp[1];
        $password = $credentials->credentials->password;
        $file = fopen($filename, 'w');
        $text = "username = {$username}\npassword = {$password}\n";
        if (!empty($domain)) {
            $text .= "domain   = {$domain}\n";
        }
        fwrite($file, $text);
        fclose($file);
        sleep(1);
        return $filename;
    }
}


if (!function_exists('wmi_audit')) {
    /**
     * Our main function to directly retrieve and store attributes from Windows devices.
     *
     * @param string $ip           The target device's ip address
     * @param object $credentials  The credentials object containing the username and password
     * @param int    $discovery_id The ID of the discovery being run
     *
     * @return object               The populated device
     */
    function wmi_audit(string $ip = '', object $credentials = null, int $discovery_id = null): object
    {
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $log = new \StdClass();
        $log->discovery_id = $discovery_id;
        $log->file = 'wmi_helper';
        $log->function = 'wmi_audit';
        $log->severity = 7;
        $log->command_status = 'notice';
        $log->message = 'WMI audit starting';

        if (empty($ip)) {
            log_message('error', 'No IP supplied to wmi_helper::wmi_audit.');
            return false;
        }

        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            log_message('error', 'No valid IP supplied to wmi_helper::wmi_audit.');
            return false;
        }
        $log->ip = $ip;

        if (!is_object($credentials)) {
            log_message('error', 'No credentials supplied to wmi_helper::wmi_audit.');
            return false;
        }
        $discoveryLogModel->create($log);
        $details = new \StdClass();

        // UUID
        $command = 'csproduct get uuid';
        $wmi_result = wmi_command($ip, $credentials, $command, $discovery_id);
        if ($wmi_result['status'] === 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->uuid = $wmi_result['output'][1];
            }
            $details->type = 'computer';
        }

        // Serial
        $command = 'csproduct get IdentifyingNumber';
        $wmi_result = wmi_command($ip, $credentials, $command, $discovery_id);
        if ($wmi_result['status'] === 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->serial = $wmi_result['output'][1];
            }
        }

        // Manufacturer
        $command = 'csproduct get vendor';
        $wmi_result = wmi_command($ip, $credentials, $command, $discovery_id);
        if ($wmi_result['status'] === 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->manufacturer = $wmi_result['output'][1];
            }
        }

        // Description
        $command = 'os get description';
        $wmi_result = wmi_command($ip, $credentials, $command, $discovery_id);
        if ($wmi_result['status'] === 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->description = $wmi_result['output'][1];
            }
        }

        // Hostname / name
        $command = 'computersystem get name';
        $wmi_result = wmi_command($ip, $credentials, $command, $discovery_id);
        if ($wmi_result['status'] === 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->hostname = strtolower($wmi_result['output'][1]);
                $details->name = $details->hostname;
            }
        }

        // Domain / fqdn
        $command = 'computersystem get domain';
        $wmi_result = wmi_command($ip, $credentials, $command, $discovery_id);
        if ($wmi_result['status'] === 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->domain = strtolower($wmi_result['output'][1]);
                $details->fqdn = $details->hostname . '.' . $details->domain;
            }
        }

        // OS Name
        $command = 'os get name';
        $wmi_result = wmi_command($ip, $credentials, $command, $discovery_id);
        if ($wmi_result['status'] === 0) {
            if (!empty($wmi_result['output'][1])) {
                $details->os_group = 'Windows';
                $details->os_name = $wmi_result['output'][1];
                if (stripos($details->os_name, ' 95') !== false) {
                    $details->os_family = 'Windows 95';
                }
                if (stripos($details->os_name, ' 98') !== false) {
                    $details->os_family = 'Windows 98';
                }
                if (stripos($details->os_name, ' NT') !== false) {
                    $details->os_family = 'Windows NT';
                }
                if (stripos($details->os_name, ' 2000') !== false) {
                    $details->os_family = 'Windows 2000';
                }
                if (stripos($details->os_name, ' XP') !== false) {
                    $details->os_family = 'Windows XP';
                }
                if (stripos($details->os_name, '2003') !== false) {
                    $details->os_family = 'Windows 2003';
                }
                if (stripos($details->os_name, 'Vista') !== false) {
                    $details->os_family = 'Windows Vista';
                }
                if (stripos($details->os_name, '2008') !== false) {
                    $details->os_family = 'Windows 2008';
                }
                if (stripos($details->os_name, 'Windows 7') !== false) {
                    $details->os_family = 'Windows 7';
                }
                if (stripos($details->os_name, 'Windows 8') !== false) {
                    $details->os_family = 'Windows 8';
                }
                if (stripos($details->os_name, '2012') !== false) {
                    $details->os_family = 'Windows 2012';
                }
                if (stripos($details->os_name, 'Windows 10') !== false) {
                    $details->os_family = 'Windows 10';
                }
                if (stripos($details->os_name, 'Windows 11') !== false) {
                    $details->os_family = 'Windows 11';
                }
                if (stripos($details->os_name, '2016') !== false) {
                    $details->os_family = 'Windows 2016';
                }
                if (stripos($details->os_name, '2019') !== false) {
                    $details->os_family = 'Windows 2019';
                }
                $details->os_name = str_replace('®', '', $details->os_name);
                $details->os_name = trim(substr($details->os_name, 0, stripos($details->os_name, '|')));
            }
            if (!empty($wmi_result['output'][1])) {
                $temp = explode('|', $wmi_result['output'][1]);
                $details->install_dir = trim((string)$temp[1]);
                unset($temp);
            }
        }
        $log->file = 'wmi_helper';
        $log->function = 'wmi_audit';
        $log->command_status = 'notice';
        $log->message = 'WMI audit complete';
        $discoveryLogModel->create($log);
        return($details);
    }
}
