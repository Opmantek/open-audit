<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

use phpseclib3\Crypt\PublicKeyLoader;
use phpseclib3\Crypt\RSA;
use phpseclib3\Net\SFTP;
use phpseclib3\Net\SSH2;

if (! function_exists('scp')) {
    /**
     * Copy a file to the target
     * @param  object $parameters Should contain IP, credentials, source, destincation, log
     * @return array  Contains the output and status flag, or false on fail
     */
    function scp($parameters)
    {
        $item_start = microtime(true);
        $instance = & get_instance();
        $message = '';
        if (empty($parameters->ip)) {
            $message = 'No IP supplied to scp function.';
        }
        if (!filter_var($parameters->ip, FILTER_VALIDATE_IP)) {
            $message = 'Invalid IP supplied to scp function.';
        }
        if (!is_object($parameters->credentials)) {
            $message = 'No credentials supplied to scp function.';
        }
        if (empty($parameters->source)) {
            $message = 'No source supplied to scp function.';
        }
        if (empty($parameters->destination)) {
            $message = 'No destination supplied to scp function.';
        }
        if (!empty($parameters->log)) {
            $log = $parameters->log;
        } else {
            $log = new \StdClass();
        }
        if (!empty($parameters->discovery_id)) {
            $log->discovery_id = $parameters->discovery_id;
        }
        $timeout = 0;
        if (!empty($parameters->timeout)) {
            $timeout = intval($parameters->timeout);
        } else {
            if (!empty($instance->config->discovery_ssh_timeout)) {
                $timeout = intval($instance->config->discovery_ssh_timeout);
            }
        }

        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $log->severity = 7;
        $log->file = 'ssh_helper';
        $log->function = 'scp';
        $log->command = '';
        $log->command_output = '';
        $log->ip = $parameters->ip;
        if (!empty($message)) {
            $log->message = $message;
            $log->severity = 3;
            if (!empty($parameters->discovery_id)) {
                $discoveryLogModel->create($log);
            } else {
                log_message('warning', $log->message);
            }
            $log->severity = 7;
            return false;
        }
        $ip = $parameters->ip;
        $credentials = $parameters->credentials;
        $source = $parameters->source;
        $destination = $parameters->destination;
        if (!empty($parameters->ssh_port)) {
            $ssh_port = intval($parameters->ssh_port);
        }
        if (empty($ssh_port)) {
            $ssh_port = '22';
        }

        if (!defined('NET_SFTP_LOGGING')) {
            define('NET_SFTP_LOGGING', SFTP::LOG_COMPLEX);
        }
        // $ssh = new Net_SFTP($ip, $ssh_port);
        $ssh = new SFTP($ip, $ssh_port);
        if (empty($ssh)) {
            $log->message = 'Could not instanciate SSH object to ' . $ip . ':' . $ssh_port . '.';
            $log->severity = 3;
            if (!empty($parameters->discovery_id)) {
                $discoveryLogModel->create($log);
            } else {
                log_message('warning', $log->message);
            }
            return false;
        }
        if ($timeout > 0) {
            $ssh->setTimeout($timeout);
        }
        if ($credentials->type === 'ssh_key') {
            if (!empty($credentials->credentials->password)) {
                $key = PublicKeyLoader::load($credentials->credentials->ssh_key, $credentials->credentials->password);
            } else {
                $key = PublicKeyLoader::load($credentials->credentials->ssh_key);
            }

            if ($ssh->login($credentials->credentials->username, $key)) {
                $username = $credentials->credentials->username;
                $password = @$credentials->credentials->password;
            } else {
                $log->message = "Failure, scp credentials named {$credentials->name} (key) not used to log in to {$ip}.";
                $log->command_status = 'fail';
                $log->command =  $ssh->getLog();
                if (!empty($parameters->discovery_id)) {
                    $discoveryLogModel->create($log);
                } else {
                    log_message('warning', $log->message);
                }
                return false;
            }
        } elseif ($credentials->type === 'ssh') {
            $username = $credentials->credentials->username;
            $password = $credentials->credentials->password;
            $log->message = "Success, credentials named {$credentials->name} used to log in using sftp to {$ip}.";
            $log->command_status = 'success';
            try {
                $ssh->login($credentials->credentials->username, $credentials->credentials->password);
            } catch (Exception $error) {
                $log->message = "Failure, scp credentials named {$username} not used to log in to {$ip}.";
                $log->command_status = 'fail';
                $log->command =  $ssh->getLog();
                $log->severity = 3;
                if (!empty($parameters->discovery_id)) {
                    $discoveryLogModel->create($log);
                } else {
                    log_message('warning', $log->message);
                }
                return false;
            }
            $discoveryLogModel->create($log);
        } else {
            $log->message = 'No credentials of ssh or ssh_key passed to scp function.';
            $log->command_status = 'fail';
            $log->severity = 3;
            if (!empty($parameters->discovery_id)) {
                $discoveryLogModel->create($log);
            } else {
                log_message('warning', $log->message);
            }
            $log->severity = 7;
            return false;
        }

        $status = true;
        $log->command = 'sftp ' . $source . ' to ' . @$username . '@' . $ip . ':' . $destination;
        $log->command_status = 'success';
        $log->message = 'Copy file to ' . $ip;
        $log->command_output = ' ';
        if ($ssh->put($destination, $source, SFTP::SOURCE_LOCAL_FILE) === false) {
            $log->command_output = json_encode($ssh->getLog());
            $log->command_status = 'fail';
            $status = false;
        }
        $ssh->disconnect();
        unset($ssh);
        $log->command_time_to_execute = (microtime(true) - $item_start);
        if (!empty($parameters->discovery_id)) {
            $discoveryLogModel->create($log);
        } else {
            if ($status === false) {
                log_message('error', $log->message . ' FAILED.');
            } else {
                log_message('debug', $log->message . ' succeeded.');
                // log_message('debug', $log->command);
            }
        }
        unset($log->command, $log->command_status, $log->command_time_to_execute, $log->command_output);
        return($status);
    }
}


if (! function_exists('scp_get')) {
    /**
     * Copy a file from the target
     * @param  object $parameters Should contain IP, credentials, source, destincation, log
     * @return array  Contains the output and status flag, or false on fail
     */
    function scp_get($parameters)
    {
        $item_start = microtime(true);

        if (function_exists('get_instance')) {
            $instance = & get_instance();
        } else {
            $instance = new stdClass();
            $instance->config = config('Openaudit');
        }

        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $message = '';
        if (empty($parameters->ip)) {
            $message = 'No IP supplied to scp_get function.';
        } else {
            if (!filter_var($parameters->ip, FILTER_VALIDATE_IP)) {
                $message = 'Invalid IP supplied to scp_get function.';
            }
        }
        if (!is_object($parameters->credentials)) {
            $message = 'No credentials supplied to scp_get function.';
        }
        if (empty($parameters->source)) {
            $message = 'No source supplied to scp_get function.';
        }
        if (empty($parameters->destination)) {
            $message = 'No destination supplied to scp_get function.';
        }
        if (!empty($parameters->log)) {
            $log = $parameters->log;
        } else {
            $log = new \StdClass();
            if (!empty($parameters->discovery_id)) {
                $log->discovery_id = $parameters->discovery_id;
            }
        }
        $log->ip = @$parameters->ip;
        $log->severity = 7;
        $log->file = 'ssh_helper';
        $log->function = 'scp_get';
        $log->command = '';
        $log->command_output = '';
        if (!empty($message)) {
            $log->message = $message;
            $log->command_status = 'fail';
            $log->severity = 3;
            if (!empty($parameters->discovery_id)) {
                $discoveryLogModel->create($log);
            } else {
                log_message('warning', $log->message);
            }
            $log->severity = 7;
            return false;
        }
        $ip = $parameters->ip;
        $credentials = $parameters->credentials;
        $source = $parameters->source;
        $destination = $parameters->destination;
        $ssh_port = '22';
        if (!empty($parameters->ssh_port)) {
            $ssh_port = intval($parameters->ssh_port);
        }
        $timeout = 0;
        if (!empty($parameters->timeout)) {
            $timeout = intval($parameters->timeout);
        } else {
            if (!empty($instance->config->discovery_ssh_timeout)) {
                $timeout = intval($instance->config->discovery_ssh_timeout);
            }
        }

        // if (!defined('NET_SSH2_LOGGING')) {
        //     define('NET_SSH2_LOGGING', SSH2::LOG_COMPLEX);
        // }
        $ssh = new SFTP($ip, $ssh_port);
        if (empty($ssh)) {
            $log->message = 'Could not instanciate SFTP to ' . $ip . ':' . $ssh_port . '.';
            $log->severity = 5;
            if (!empty($parameters->discovery_id)) {
                $discoveryLogModel->create($log);
            } else {
                log_message('warning', $log->message);
            }
            return false;
        }
        if ($timeout > 0) {
            $ssh->setTimeout($timeout);
        }

        if ($credentials->type === 'ssh_key') {
            if (!empty($credentials->credentials->password)) {
                $key = PublicKeyLoader::load($credentials->credentials->ssh_key, $credentials->credentials->password);
            } else {
                $key = PublicKeyLoader::load($credentials->credentials->ssh_key);
            }

            if ($ssh->login($credentials->credentials->username, $key)) {
                $username = $credentials->credentials->username;
                $password = @$credentials->credentials->password;
            } else {
                $log->message = "Failure, scp_get credentials named {$credentials->name} (key) not used to log in to {$ip}.";
                $log->command_status = 'issue';
                $log->severity = 5;
                $log->command_output = $ssh->getLog();
                if (!empty($parameters->discovery_id)) {
                    $discoveryLogModel->create($log);
                } else {
                    log_message('warning', $log->message);
                }
                return false;
            }
        } elseif ($credentials->type === 'ssh') {
            $username = $credentials->credentials->username;
            $password = $credentials->credentials->password;
            try {
                $ssh->login($credentials->credentials->username, $credentials->credentials->password);
            } catch (Exception $error) {
                $log->message = "Failure, scp_get credentials named {$username} not used to log in to {$ip}.";
                $log->command_output = json_encode($error);
                $log->command_status = 'issue';
                $log->severity = 5;
                if (!empty($parameters->discovery_id)) {
                    $discoveryLogModel->create($log);
                } else {
                    log_message('warning', $log->message);
                }
                return false;
            }
        } else {
            $log->message = 'No credentials of ssh or ssh_key passed to scp_get function.';
            $log->severity = 5;
            if (!empty($parameters->discovery_id)) {
                $discoveryLogModel->create($log);
            } else {
                log_message('warning', $log->message);
            }
            $log->severity = 7;
            return false;
        }

        $log->command = 'sftp ' . @$username . '@' . @$ip . ':' . @$source . ' to ' . $destination;
        $log->message = 'Copy file from ' . $ip;
        $log->command_status = 'success';
        try {
            $output = $ssh->get($source, $destination);
        } catch (Exception $error) {
            $log->message = 'Attempt to copy file from ' . $ip . ' failed.';
            $log->command = @$output;
            $log->command_output = $ssh->getLog();
            $log->command_status = 'issue';
            $log->severity = 5;
            if (!empty($parameters->discovery_id)) {
                $discoveryLogModel->create($log);
            } else {
                log_message('debug', $log->message . ' Output: ' . $log->command_output);
            }
            return false;
        }
        $ssh->disconnect();
        unset($ssh);
        $log->command_time_to_execute = (microtime(true) - $item_start);
        if ($log->command_status === 'success') {
            if (empty($output)) {
                $log->command_output = 1;
            }
            $log->message = 'Attempt to copy file from ' . $ip . ' succeeded.';
            $log->command_output = $output;
            $log->command_status = 'notice';
            $log->severity = 7;
        }
        if (!empty($parameters->discovery_id)) {
            $discoveryLogModel->create($log);
        } else {
            log_message('debug', $log->message);
        }
        unset($log->command, $log->command_status, $log->command_time_to_execute, $log->command_output);
        if (empty($output)) {
            $output = '';
        }
        return($output);
    }
}

if (! function_exists('ssh_command')) {
    /**
     * Run a command on the target, using SSH
     * @param  object $parameters Should contain ip (string), credentials (array of objects), command (string), discovery_id (int)
     * @return false || array Returns an array containing the output or false on fail
     */
    function ssh_command($parameters)
    {
        $item_start = microtime(true);
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $instance = & get_instance();
        if (empty($parameters) or empty($parameters->ip) or empty($parameters->credentials) or empty($parameters->command)) {
            log_message('error', 'Function ssh_command called without params object');
            return;
        }
        if (empty($parameters->log)) {
            $log = new \StdClass();
            if (!empty($parameters->discovery_id)) {
                $log->discovery_id = $parameters->discovery_id;
            }
        } else {
            $log = $parameters->log;
        }
        $log->file = 'ssh_helper';
        $log->function = 'ssh_command';
        $log->ip = $parameters->ip;

        $ip = $parameters->ip;
        $credentials = $parameters->credentials;
        $command = $parameters->command;
        if (!empty($parameters->ssh_port)) {
            $ssh_port = intval($parameters->ssh_port);
        }
        if (empty($ssh_port)) {
            $ssh_port = '22';
        }
        $timeout = 0;
        if (!empty($parameters->timeout)) {
            $timeout = intval($parameters->timeout);
        } else {
            if (!empty($instance->config->discovery_ssh_timeout)) {
                $timeout = intval($instance->config->discovery_ssh_timeout);
            }
        }
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'Invalid IP supplied to ssh_command function.';
            $log->severity = 5;
            $log->command_status = 'fail';
            if (!empty($parameters->discovery_id)) {
                $discoveryLogModel->create($log);
            } else {
                log_message('warning', $log->message);
            }
            return false;
        }
        if (!is_object($credentials)) {
            $log->message = 'No credentials supplied to ssh_command function.';
            $log->severity = 5;
            $log->command_status = 'fail';
            if (!empty($parameters->discovery_id)) {
                $discoveryLogModel->create($log);
            } else {
                log_message('warning', $log->message);
            }
            return false;
        }

        // if (!defined('NET_SSH2_LOGGING')) {
        //     define('NET_SSH2_LOGGING', SSH2::LOG_COMPLEX);
        // }
        $ssh = new \phpseclib3\Net\SSH2($ip, $ssh_port);
        if (empty($ssh)) {
            $log->message = 'Could not instanciate SSH object to ' . $ip . ':' . $ssh_port . '.';
            $log->severity = 3;
            if (!empty($parameters->discovery_id)) {
                $discoveryLogModel->create($log);
            } else {
                log_message('warning', $log->message);
            }
            $log->severity = 7;
            return false;
        }

        if ($credentials->type === 'ssh_key') {
            if (!empty($credentials->credentials->password)) {
                $key = PublicKeyLoader::load($credentials->credentials->ssh_key, $credentials->credentials->password);
            } else {
                $key = PublicKeyLoader::load($credentials->credentials->ssh_key);
            }
            try {
                $ssh->login($credentials->credentials->username, $key);
                $username = $credentials->credentials->username;
                $password = @$credentials->credentials->password;
                if (!empty($credentials->credentials->sudo_password)) {
                    $password = $credentials->credentials->sudo_password;
                }
            } catch (Exception $e) {
                $log->message = "Failure, credentials named {$credentials->name} (key) not used to log in to {$ip}.";
                $log->command = 'ssh login attempt to run - ' . $command;
                $log->command_output = $ssh->getLastError();
                $log->command_status = 'fail';
                $log->severity = 5;
                if (!empty($parameters->discovery_id)) {
                    $discoveryLogModel->create($log);
                } else {
                    log_message('warning', "Failure, credentials named {$credentials->name} (key) were rejected for {$ip} when attempting to run {$command}");
                }
                return false;
            }
        } elseif ($credentials->type === 'ssh') {
            try {
                $ssh->login($credentials->credentials->username, $credentials->credentials->password);
                $username = $credentials->credentials->username;
                $password = $credentials->credentials->password;
            } catch (Exception $e) {
                $log->message = "Failure, credentials named {$credentials->name} not used to log in to {$ip}.";
                $log->command = 'ssh login attempt to run - ' . $command;
                $log->command_output = json_encode($ssh->getLog());
                $log->command_status = 'fail';
                $log->severity = 5;
                if (!empty($parameters->discovery_id)) {
                    $discoveryLogModel->create($log);
                } else {
                    log_message('warning', "Failure, credentials named {$credentials->name} were rejected for {$ip} when attempting to run {$command}");
                }
                return false;
            }
        } else {
            $log->message = 'No credentials of ssh or ssh_key passed to ssh_command function.';
            $log->severity = 4;
            $log->command_status = 'fail';
            if (!empty($parameters->discovery_id)) {
                $discoveryLogModel->create($log);
            } else {
                log_message('warning', $log->message);
            }
            return false;
        }

        $log->command = $command;
        $log->command_status = '';
        $log->severity = 7;
        $log->message = 'Executing SSH command';
        $item_start = microtime(true);
        if (strpos($command, 'sudo') === false) {
            $ssh->setTimeout($timeout);
            // Not using sudo, so no password prompt
            $result = $ssh->exec($command);
            $result = explode("\n", $result);
            // remove the last line as it's always blank
            unset($result[count($result) - 1]);
        } else {
            // Using sudo - need to input in response to password prompt
            $ssh->setTimeout(1);
            $ssh->write($command . "\n");
            $output = $ssh->read('assword');
            if (stripos($output, 'assword') !== false) {
                $ssh->write($password . "\n");
                $output = $ssh->read('[prompt]');
            }
            while (true) {
                $output .= $ssh->read('[prompt]');
                if (stripos($output, 'Audit Completed') !== false) {
                    break;
                }
                if ((microtime(true) - $item_start) > $timeout) {
                    break;
                }
            }
            $result = explode("\n", $output);
        }
        $item_end = microtime(true);
        $ssh->disconnect();
        unset($ssh);
        if ((($item_end - $item_start) > $timeout) and stripos($output, 'Audit Completed') === false and strpos($command, 'sudo rm ') === false) {
            if (!empty($parameters->discovery_id)) {
                $log->command_time_to_execute = ($item_end - $item_start);
                $log->command_status = 'warning';
                $log->command_output = '';
                $log->message = 'SSH command timed out (took more than ' . number_format($timeout) . ' seconds).';
                $log->command_output = json_encode($result);
                $discoveryLogModel->create($log);
            }
            log_message('warning', 'SSH command timed out to ' . $ip);
            return false;
        }
        for ($i = 0; $i < count($result); $i++) {
            $result[$i] = trim((string)$result[$i]);
            # Special Case
            if (stripos($result[$i], 'Exiting as other audits are currently running.') !== false) {
                log_message('warning', 'Multiple audits running on ' . $ip . ', not executing.');
                return false;
            }
        }
        $log->command_time_to_execute = ($item_end - $item_start);
        $log->command_output = @json_encode($result);
        $log->command_status = 'success';
        if (!empty($parameters->discovery_id)) {
            $discoveryLogModel->create($log);
        }
        unset($log);
        return($result);
    }
}

if (! function_exists('ssh_audit')) {
    /**
     * [ssh_audit description]
     * @param  [type] $parameters [description]
     * @return [type]             [description]
     */
    function ssh_audit($parameters)
    {
        $instance = & get_instance();
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();

        if (function_exists('get_instance')) {
            $instance = & get_instance();
        } else {
            $instance = new stdClass();
            $instance->config = config('Openaudit');
        }

        if (empty($parameters->credentials)) {
            $log = new \StdClass();
            $log->discovery_id = $parameters->discovery_id;
            $log->message = 'No credentials array passed to ssh_audit.';
            $log->ip = @$parameters->ip;
            $log->command_status = 'warning';
            $discoveryLogModel->create($log);
            return;
        }
        if (empty($parameters) or empty($parameters->credentials) or empty($parameters->ip)) {
            $message = '(missing parameters object).';
            if (empty($parameters->credentials)) {
                $message = '(missing credentials).';
            } elseif (empty($parameters->ip)) {
                $message = '(missing device ip).';
            }
            log_message('error', 'Function ssh_audit called without correct params object ' . $message);
            return;
        }
        if (empty($parameters->log)) {
            $log = new \StdClass();
            if (!empty($parameters->discovery_id)) {
                $log->discovery_id = $parameters->discovery_id;
            }
        } else {
            $log = $parameters->log;
        }
        $log->severity = 7;
        $log->file = 'ssh_helper';
        $log->function = 'ssh_audit';
        $log->message = 'SSH audit starting';
        $log->command_status = 'notice';
        $log->ip = $parameters->ip;
        $log->device_id = '';
        if (!empty($parameters->device_id)) {
            $log->device_id = $parameters->device_id;
        }

        $discoveryLogModel->create($log);
        if (!empty($parameters->type)) {
            $type = $parameters->type;
        } else {
            $type = 'subnet';
        }

        if (is_array($parameters->credentials)) {
            $credentials = $parameters->credentials;
        } else {
            $log->message = 'Credentials supplied to ssh_audit not in array format.';
            $log->command_status = 'fail';
            $log->severity = 5;
            $discoveryLogModel->create($log);
            return false;
        }

        if (filter_var($parameters->ip, FILTER_VALIDATE_IP)) {
            $ip = $parameters->ip;
        } else {
            $log->message = 'Invalid IP supplied to ssh_audit function. Supplied IP is: ' . (string)$parameters->ip;
            $log->command_status = 'fail';
            $log->severity = 5;
            $discoveryLogModel->create($log);
            return false;
        }
        if (!empty($parameters->ssh_port)) {
            $ssh_port = intval($parameters->ssh_port);
        }
        if (empty($ssh_port)) {
            $ssh_port = '22';
        }
        $timeout = 0;
        if (!empty($parameters->timeout)) {
            $timeout = intval($parameters->timeout);
        } else {
            if (!empty($instance->config->discovery_ssh_timeout)) {
                $timeout = $instance->config->discovery_ssh_timeout;
            }
        }


        // if (!defined('NET_SSH2_LOGGING')) {
        //     define('NET_SSH2_LOGGING', SSH2::LOG_COMPLEX);
        // }
        $password = '';

        foreach ($credentials as $credential) {
            $ssh = new \phpseclib3\Net\SSH2($ip, $ssh_port);
            $ssh->setTimeout(10);
            if ($credential->type === 'ssh_key') {
                log_message('debug', 'Testing credentials named: ' . $credential->name . ' on ' . $ip);
                if (!empty($credential->credentials->password)) {
                    $key = PublicKeyLoader::load($credential->credentials->ssh_key, $credential->credentials->password);
                } else {
                    $key = PublicKeyLoader::load($credential->credentials->ssh_key);
                }
                try {
                    $test = $ssh->login($credential->credentials->username, $key);
                } catch (Exception $e) {
                    $log->message = "Credential set for {$credential->type} named {$credential->name} not working on {$ip}.";
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                    $ssh->disconnect();
                    unset($ssh);
                }
                // if ($ssh->login($credential->credentials->username, $key)) {
                if (!empty($test)) {
                    $log->message = "Valid credentials for {$credential->type} named {$credential->name} used to log in to {$ip}.";
                    $log->command_status = 'success';
                    $discoveryLogModel->create($log);
                    $username = $credential->credentials->username;
                    $password = (!empty($credential->credentials->password)) ? $credential->credentials->password : '';
                    if (!empty($credential->credentials->sudo_password)) {
                        $password = $credential->credentials->sudo_password;
                    }
                    break;
                } else {
                    $log->message = "Credential set for {$credential->type} named {$credential->name} not working on {$ip}.";
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                    $ssh->disconnect();
                    unset($ssh);
                }
            } elseif ($credential->type === 'ssh') {
                log_message('debug', 'Testing credentials named: ' . $credential->name . ' on ' . $ip);
                // NOTE - Use @ below because some devices cause "Error reading from socket" and halt this process
                // TODO - change to try / catch

                try {
                    $test = $ssh->login($credential->credentials->username, $credential->credentials->password);
                } catch (Exception $e) {
                    $log->message = "Credential set for {$credential->type} named {$credential->name} not working on {$ip}.";
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                    $ssh->disconnect();
                    unset($ssh);
                }
                // if (@$ssh->login($credential->credentials->username, $credential->credentials->password)) {
                if (!empty($test)) {
                    $log->message = "Valid credentials named {$credential->name} used to log in to {$ip}.";
                    $log->command_status = 'success';
                    $discoveryLogModel->create($log);
                    $username = $credential->credentials->username;
                    $password = (!empty($credential->credentials->password)) ? $credential->credentials->password : '';
                    break;
                } else {
                    $log->message = "Credential set for SSH named {$credential->name} not working on {$ip}.";
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                    unset($ssh);
                }
            }
        }

        if (empty($username)) {
            $log->severity = 5;
            $log->command = '';
            $log->command_output = "SSH detected but no valid SSH credentials for {$ip}.";
            $log->command_status = 'issue';
            $log->message = "SSH detected but no valid SSH credentials for {$ip}.";
            $discoveryLogModel->create($log);
            return false;
        }

        $device = new \StdClass();
        try {
            $windows_os_name = $ssh->exec('wmic os get name');
        } catch (Exception $e) {
            $log->message = "Unsuccessful SSH command attempt, aborting SSH connection.";
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            $ssh->disconnect();
            unset($ssh);
            return false;
        }

        if (stripos($windows_os_name, 'Microsoft Windows') !== false) {
            $device->type = 'computer';
            $device->os_group = 'Windows';

            $temp = str_replace('Name', '', $windows_os_name);
            $temp = trim((string)$temp);
            $temp = explode('|', $temp);
            $device->os_name = trim((string)$temp[0]);
            unset($temp);
            $log->command = 'wmic os get name; # os_name';
            $log->command_output = $device->os_name;
            $log->command_status = 'success';
            $log->message = 'SSH command';
            $discoveryLogModel->create($log);

            $temp = $ssh->exec('wmic path win32_computersystemproduct get uuid');
            $temp = str_replace('UUID', '', $temp);
            $device->uuid = trim((string)$temp);
            unset($temp);
            $log->command = 'wmic path win32_computersystemproduct get uuid; # uuid';
            $log->command_output = $device->uuid;
            $log->command_status = 'success';
            $log->message = 'SSH command';
            if (empty($device->uuid)) {
                $log->command_status = 'notice';
            }
            $discoveryLogModel->create($log);

            $temp = $ssh->exec('wmic path win32_computersystemproduct get IdentifyingNumber');
            $temp = str_replace('IdentifyingNumber', '', $temp);
            $device->serial = trim((string)$temp);
            unset($temp);
            $log->command = 'wmic path win32_computersystemproduct get IdentifyingNumber; # serial';
            $log->command_output = $device->serial;
            $log->command_status = 'success';
            $log->message = 'SSH command';
            if (empty($device->serial)) {
                $log->command_status = 'notice';
            }
            $discoveryLogModel->create($log);

            $temp = $ssh->exec('wmic computersystem get name');
            $temp = str_replace('Name', '', $temp);
            $device->hostname = strtolower(trim((string)$temp));
            $device->name = $device->hostname;
            unset($temp);
            $log->command = 'wmic computersystem get name; # hostname';
            $log->command_output = $device->hostname;
            $log->command_status = 'success';
            $log->message = 'SSH command';
            if (empty($device->hostname)) {
                $log->command_status = 'notice';
            }
            $discoveryLogModel->create($log);

            $device->os_family = '';
            if (strpos($device->os_name, ' 95') !== false) {
                $device->os_family = 'Windows 95';
            }
            if (strpos($device->os_name, ' 98') !== false) {
                $device->os_family = 'Windows 98';
            }
            if (strpos($device->os_name, ' NT') !== false) {
                $device->os_family = 'Windows NT';
            }
            if (strpos($device->os_name, '2000') !== false) {
                $device->os_family = 'Windows 2000';
            }
            if (strpos($device->os_name, ' XP') !== false) {
                $device->os_family = 'Windows XP';
            }
            if (strpos($device->os_name, '2003') !== false) {
                $device->os_family = 'Windows 2003';
            }
            if (strpos($device->os_name, 'Vista') !== false) {
                $device->os_family = 'Windows Vista';
            }
            if (strpos($device->os_name, '2008') !== false) {
                $device->os_family = 'Windows 2008';
            }
            if (strpos($device->os_name, 'Windows 7') !== false) {
                $device->os_family = 'Windows 7';
            }
            if (strpos($device->os_name, 'Windows 8') !== false) {
                $device->os_family = 'Windows 8';
            }
            if (strpos($device->os_name, '2012') !== false) {
                $device->os_family = 'Windows 2012';
            }
            if (strpos($device->os_name, 'Windows 10') !== false) {
                $device->os_family = 'Windows 10';
            }
            if (strpos($device->os_name, '2016') !== false) {
                $device->os_family = 'Windows 2016';
            }
            $device->credentials = $credential;
            return $device;
        }

        // Before we attempt to run commands, test if we're running bash
        $item_start = microtime(true);
        $device->shell = trim((string)$ssh->exec('echo $SHELL'));
        $device->bash = '';
        $log->command = 'echo $SHELL';
        $log->command_output = $device->shell;
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->command_status = 'success';
        $log->message = 'The default shell for ' . $username . ' is ' . $device->shell;
        if (stripos($device->shell, 'COMMAND NOT RECOGNIZED') !== false) {
            $device->shell = '';
        }
        if (strpos($device->shell, 'bash') === false) {
            $log->command_status = 'notice';
            $log->message = 'The default shell for ' . $username . ' is ' . $device->shell . ' (not bash)';
            $log->severity = 6;
        }
        $discoveryLogModel->create($log);
        $log->severity = 7;

        if (strpos($device->shell, 'bash') === false) {
            $item_start = microtime(true);
            $device->bash = trim((string)$ssh->exec('which bash'));
            $log->command = 'which bash';
            $log->command_output = $device->bash;
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->command_status = 'success';
            if (!empty($device->bash) && stripos($device->bash, 'Command not found') === false && stripos($device->bash, 'COMMAND NOT RECOGNIZED') === false) {
                $log->message = 'Bash installed';
            } else {
                $log->message = 'Bash not installed';
                $log->command_status = 'notice';
                $log->severity = 6;
                $device->bash = '';
            }
            $discoveryLogModel->create($log);
        }
        $log->severity = 7;

        if ($device->bash === '') {
            // See if we have /bin/sh
            $item_start = microtime(true);
            $device->sh = trim((string)$ssh->exec('which sh'));
            $log->command = 'which sh';
            $log->command_output = $device->sh;
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->command_status = 'success';
            if (!empty($device->sh) && stripos($device->sh, 'Command not found') === false && stripos($device->bash, 'COMMAND NOT RECOGNIZED') === false) {
                $log->message = 'SH installed';
                $device->bash = '/bin/sh';
                $device->shell = '/bin/sh';
            } else {
                $log->message = 'Bash not installed';
                $log->command_status = 'notice';
                $log->severity = 6;
                $device->bash = '';
            }
            $discoveryLogModel->create($log);
            unset($device->sh);
        }

        if (strpos($device->shell, 'bash') === false && $device->bash === '') {
            $log->command = '';
            $log->command_output = $device->shell;
            $log->command_time_to_execute = '';
            $log->severity = 6;
            $log->message = 'Will use ' . $device->shell . ' to run commands. Running commands in a shell other than bash may fail.';
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
        }
        $log->severity = 7;

        $commands = array(
            'hostname' => 'hostname 2>/dev/null',

            'solaris_domain' => 'domainname 2>/dev/null',

            'osx_serial' => 'system_profiler SPHardwareDataType 2>/dev/null | grep "Serial Number (system):" | cut -d: -f2 | sed "s/^ *//g"',

            'os_group' => 'uname 2>/dev/null',
            'os_name' => 'cat /etc/os-release 2>/dev/null | grep -i ^PRETTY_NAME | cut -d= -f2 | cut -d\" -f2',
            'os_family' => 'cat /etc/os-release 2>/dev/null | grep -i ^NAME | cut -d= -f2 | cut -d\" -f2',
            'os_version' => 'cat /etc/os-release 2>/dev/null | grep -i ^VERSION_ID | cut -d= -f2 | cut -d\" -f2',
            'google_instance_ident' => 'grep instance_id /etc/default/instance_configs.cfg 2>/dev/null | cut -d= -f2',
            'redhat_os_name' => 'cat /etc/redhat-release 2>/dev/null',
            'ubuntu_os_codename' => 'cat /etc/os-release 2>/dev/null | grep -i ^UBUNTU_CODENAME | cut -d= -f2 | cut -d\" -f2',
            'vmware_os_version' => 'uname -r 2>/dev/null',
            'osx_os_version' => 'sw_vers 2>/dev/null | grep "ProductVersion:" | cut -d: -f2 | xargs 2>/dev/null',
            'ubiquiti_os' => 'cat /etc/motd 2>/dev/null | grep -i EdgeOS 2>/dev/null',
            'ubiquiti_os_version' => 'cat /etc/version 2>/dev/null',
            'ddwrt_os_name' => 'cat /etc/motd 2>/dev/null | grep -i DD-WRT 2>/dev/null',
            'solaris_os_name' => 'cat /etc/release 2>/dev/null | head -n1 | awk "{print $1, $2, $3}" 2>/dev/null',

            'ddwrt_model' => 'nvram get DD_BOARD 2>/dev/null',
            'ubiquiti_model' => 'cat /etc/board.info 2>/dev/null | grep "board.name" | cut -d= -f2',
            'ubiquiti_serial' => 'grep serialno /proc/ubnthal/system.info 2>/dev/null | cut -d= -f2',

            'dbus_identifier' => 'cat /var/lib/dbus/machine-id 2>/dev/null',
            'bsd_uuid' => 'sysctl -n kern.hostuuid 2>/dev/null',
            'solaris_uuid' => 'smbios -t SMB_TYPE_SYSTEM 2>/dev/null | grep UUID | awk "{print $2}" 2>/dev/null',
            'esx_uuid' => 'vim-cmd hostsvc/hostsummary 2>/dev/null | sed -n "/^   hardware = (vim.host.Summary.HardwareSummary) {/,/^   \},/p" | grep uuid | cut -d= -f2 | sed s/,//g | sed s/\"//g',
            'osx_uuid' => 'system_profiler SPHardwareDataType 2>/dev/null | grep UUID | cut -d: -f2',
            'lshal_uuid' => 'lshal 2>/dev/null | grep "system.hardware.uuid"',

            'bsd_manufacturer' => 'kenv 2>/dev/null | grep smbios.chassis.maker | cut -d\" -f2',
            'bsd_model' => 'kenv 2>/dev/null | grep smbios.planar.product | cut -d\" -f2',
            'bsd_os_family' => 'sysctl -n kern.ostype 2>/dev/null',
            'bsd_os_name' => 'sysctl -n kern.osrelease 2>/dev/null',
            'bsd_os_version' => 'sysctl -n kern.version 2>/dev/null',

            'hpux_hostname' => 'hostname 2>/dev/null',
            'hpux_domain' => 'domainname 2>/dev/null',
            'hpux_os_name' => 'machinfo 2>/dev/null | grep -i "Release:" | cut -d: -f2',
            'hpux_os_group' => 'uname -s 2>/dev/null',
            'hpux_model' => 'model 2>/dev/null',
            'hpux_serial' => 'machinfo 2>/dev/null | grep "Machine serial number:" | cut -d: -f2',
            'hpux_uuid' => 'machinfo 2>/dev/null | grep -i "Machine ID number:" | cut -d: -f2',

            'synology_model' => 'grep model /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1',
            'synology_serial' => 'grep serial /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1',
            'synology_os_major' => 'grep version_major /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1',
            'synology_os_minor' => 'grep version_minor /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1',
            'synology_os_build' => 'grep version_build /etc/avahi/services/dsminfo.service 2>/dev/null | cut -d= -f2 | cut -d\< -f1',

            'which_sudo' => 'which sudo 2>/dev/null',

        );

        if ($type === 'seed') {
            $commands['arp'] = 'arp -an 2>/dev/null';
            $commands['route'] = 'netstat -rn 2>/dev/null | grep "^[0-9]" | awk  \'"\'"\'{print $2}\'"\'"\' | sort | uniq | grep -v "0\.0\.0\.0" | grep "\." | grep -v "127\.0\.0\.1"';
        }

        foreach ($commands as $item => $command) {
            if (strpos($device->shell, 'bash') === false && $device->bash !== '') {
                $command = $device->bash . " -c '" . $command . "'";
            }
            $item_start = microtime(true);
            $temp1 = $ssh->exec($command);
            $temp1 = trim((string)$temp1);
            $temp2 = $temp1;
            if (stripos($temp1, 'command not found')) {
                $temp1 = '';
            }
            if (stripos($temp1, 'No entry for terminal type')) {
                $temp1 = '';
            }
            if (stripos($temp1, 'invalid command detected at')) {
                $temp1 = '';
            }
            if (stripos($temp1, 'COMMAND NOT RECOGNIZED')) {
                $temp1 = '';
            }
            // if ($item === 'solaris_domain' && $temp1 === '(none)') {
            if ($temp1 === '(none)') {
                $temp1 = '';
            }
            if (!empty($temp1)) {
                $log->command_status = 'success';
                if (strpos($temp1, "\n") !== false) {
                    $array1 = explode("\n", $temp1);
                    foreach ($array1 as &$string) {
                        $string = trim((string)$string);
                        if (strpos($string, '=') !== false) {
                            $temp2 = explode('=', $string);
                            $temp2[1] = str_replace("'", '', $temp2[1]);
                            $temp2[1] = str_replace('"', '', $temp2[1]);
                            @$device->{$item}->{$temp2[0]} = $temp2[1];
                        } else {
                            $device->{$item}[] = $string;
                        }
                    }
                } else {
                    $device->$item = $temp1;
                }
                $log->command = $command;
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->command_output = $temp1;
                $log->command_status = 'success';
                $log->message = 'SSH command - ' . $item;
                $discoveryLogModel->create($log);
            } else {
                $log->command = $command;
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->command_output = $temp2;
                $log->command_status = 'notice';
                $log->message = 'SSH command - ' . $item;
                $discoveryLogModel->create($log);
            }
        }

        // ARP for other devices
        $device->ips_found = array();

        if ($type === 'seed') {
            if (!empty($device->arp)) {
                foreach ($device->arp as $line) {
                    $item = array();

                    $explode = explode('(', $line);
                    $explode_2 = explode(')', $explode[1]);
                    $item_ip = $explode_2[0];

                    $item_mac = '';
                    $explode = explode(' ', $line);
                    if (!empty($explode[3])) {
                        $item_mac = strtolower($explode[3]);
                    }
                    if (
                        !empty($item_mac) and
                        stripos($item_mac, ':') !== false and
                        $item_mac !== 'ff:ff:ff:ff:ff:ff' and
                        !empty($item_ip) and
                        stripos($item_ip, '.') !== false and
                        $item_ip !== '255.255.255.255' and
                        filter_var($item_ip, FILTER_VALIDATE_IP)
                    ) {
                        $device->ips_found[$item_mac] = $item_ip;
                    }
                }
            }
            unset($device->arp);
            if (!empty($device->route)) {
                foreach ($device->route as $ip) {
                    if (filter_var($ip, FILTER_VALIDATE_IP)) {
                        $device->ips_found[] = $ip;
                    }
                }
            }
            unset($device->route);

            // Lower case all MAC addresses
            $device->ips_found = array_change_key_case($device->ips_found, CASE_LOWER);
            // Only need one unique IP
            $device->ips_found = array_unique($device->ips_found);

            $log->command_time_to_execute = '';
            $log->message = 'Seed. All IPs detected using SSH.';
            $log->command = 'Combined SSH arp and route.';
            $log->command_status = 'notice';
            $log->command_output = json_encode($device->ips_found);
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute);
        }


        // Set some items that may have multiple results
        if (!empty($device->hostname)) {
            $device->hostname = strtolower($device->hostname);
            if (stripos($device->hostname, '.') !== false) {
                $device->fqdn = $device->hostname;
                $temp = explode('.', $device->hostname);
                $device->hostname = $temp[0];
                unset($temp[0]);
                $device->domain = implode('.', $temp);
            }
            $device->name = $device->hostname;
        }
        if (empty($device->domain) && ! empty($device->solaris_domain) && $device->solaris_domain !== '(none)') {
            $device->domain = $device->solaris_domain;
        }
        unset($device->solaris_domain);
        if (empty($device->fqdn) && ! empty($device->hostname) && ! empty($device->domain)) {
            $device->fqdn = $device->hostname . '.' . $device->domain;
        }

        if (!empty($device->google_instance_ident) && empty($device->instance_ident)) {
            $device->instance_ident = $device->google_instance_ident;
            unset($device->google_instance_ident);
        }

        if (!empty($device->ubiquiti_os)) {
            #$device->os_family = 'Ubiquiti';
            $device->os_group = '';
            $device->manufacturer = 'Ubiquiti Networks Inc.';
        }
        unset($device->ubiquiti_os);
        if (!empty($device->ubiquiti_serial)) {
            #$device->os_family = 'Ubiquiti';
            $device->manufacturer = 'Ubiquiti Networks Inc.';
            $device->serial = $device->ubiquiti_serial;
        }
        unset($device->ubiquiti_serial);
        if (!empty($device->ubiquiti_os_version)) {
            #$device->os_family = 'Ubiquiti';
            $device->manufacturer = 'Ubiquiti Networks Inc.';
            $device->description = $device->ubiquiti_os_version;
            #$device->os_version = $device->ubiquiti_os_version;
        }
        unset($device->ubiquiti_os_version);
        if (!empty($device->ubiquiti_model)) {
            #$device->os_family = 'Ubiquiti';
            $device->manufacturer = 'Ubiquiti Networks Inc.';
            $device->model = $device->ubiquiti_model;
        }
        unset($device->ubiquiti_model);

        if (!empty($device->ubuntu_os_codename)) {
            // $device->os_name = $device->os_name . ' (' . $device->ubuntu_os_codename . ')'; // removed to match audit script
        }
        unset($device->ubuntu_os_codename);

        if (!empty($device->redhat_os_name)) {
            // $device->os_name = $device->redhat_os_name; # removed to match audit script
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

        if (stripos($device->os_group, 'VMkernel') !== false && ! empty($device->vmware_os_version)) {
            $device->os_group = 'VMware';
            $device->os_family = 'VMware ESXi';
            $device->os_name = 'Vmware ESXi ' . $device->vmware_os_version;
            $device->class = 'hypervisor';
            $device->type = 'computer';
            unset($device->form_factor);

            $item_start = microtime(true);
            $command = "esxcli hardware platform get | grep 'Product Name' | cut -d: -f2 2>/dev/null";
            $result = trim((string)$ssh->exec($command));
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'SSH command - VMware model';
            $log->command = $command;
            if (!empty($result)) {
                $device->model = trim((string)$result);
                $log->command_status = 'success';
                $log->command_output = $device->model;
            } else {
                $log->command_status = 'warning';
                $log->command_output = '';
                unset($device->model);
            }
            $discoveryLogModel->create($log);
            unset($result, $command);

            $log->command_time_to_execute = 0;
            $log->message = 'OS Name';
            $log->command = '';
            $log->command_status = 'success';
            $log->command_output = $device->os_name;
            $discoveryLogModel->create($log);

            $item_start = microtime(true);
            $command = "esxcli hardware platform get | grep 'Vendor Name' | cut -d: -f2 2>/dev/null";
            $result = trim((string)$ssh->exec($command));
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'SSH command - VMware manufacturer';
            $log->command = $command;
            if (!empty($result)) {
                $device->manufacturer = trim((string)$result);
                $log->command_status = 'success';
                $log->command_output = $device->manufacturer;
            } else {
                $log->command_status = 'warning';
                $log->command_output = '';
                unset($device->manufacturer);
            }
            $discoveryLogModel->create($log);
            unset($result, $command);

            $item_start = microtime(true);
            $command = "smbiosDump | sed -n '/^  Chassis Info:/,/^  [A-Za-z]/p' | grep '    Type' | cut -d\":\" -f2 | cut -d\" \" -f3 | sed 's/\"//g' | sed 's/(//g' | sed 's/)//g'";
            $result = $ssh->exec($command);
            $log->command = $command;
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'SSH command - VMware form factor';
            if (!empty($result)) {
                $device->form_factor = trim((string)$result);
                $log->command_status = 'success';
                $log->command_output = $device->form_factor;
            } else {
                $log->command_status = 'warning';
                $log->command_output = '';
                unset($device->manufacturer);
            }
            $discoveryLogModel->create($log);
            unset($result, $command);
        }
        unset($device->vmware_os_version);
        if (trim(strtolower($device->os_group)) === 'darwin') {
            $device->os_group = 'Apple';
            $device->type = 'computer';
            $device->os_family = 'Apple OSX';
            if (!empty($device->osx_os_version)) {
                $device->os_name = 'MacOS ' . $device->osx_os_version;
            }
            unset($device->os_version);
            if (!empty($device->osx_os_version)) {
                $device->os_version = $device->osx_os_version;
            }
        }
        unset($device->osx_os_version);
        if (empty($device->serial) && ! empty($device->osx_serial)) {
            $device->serial = $device->osx_serial;
            if (strlen($device->serial) === 11) {
                $device->manufacturer_code = substr($device->serial, -3);
            }
            if (strlen($device->serial) === 12) {
                $device->manufacturer_code = substr($device->serial, -4);
            }
        }
        unset($device->osx_serial);
        // DD-WRT items
        if (empty($device->os_group) && ! empty($device->ddwrt_os_name)) {
            $device->os_family = 'DD-WRT';
            $device->os_name = trim((string)$device->ddwrt_os_name);
            $device->type = 'router';
        }
        unset($device->ddwrt_os_name);
        if (empty($device->manufacturer) && ! empty($device->ddwrt_model)) {
            $device->manufacturer = $device->ddwrt_model;
        }
        unset($device->ddwrt_model);

        if (empty($device->os_name) && ! empty($device->solaris_os_name)) {
            $device->os_name = trim((string)$device->solaris_os_name);
            $device->type = 'computer';
        }
        unset($device->solaris_os_name);

        if (!empty($device->hpux_os_group) && trim((string)$device->hpux_os_group) === 'HP-UX') {
            $device->os_group = 'HP-UX';
            $device->os_family = 'HP-UX';
            $device->type = 'computer';
            $device->class = 'server';
            $device->os_name = trim((string)$device->hpux_os_name);
            $device->uuid = trim((string)$device->hpux_uuid);
            $device->model = trim((string)$device->hpux_model);
            $device->serial = trim((string)$device->hpux_serial);
            $device->hostname = trim((string)$device->hpux_hostname);
            $device->domain = trim((string)$device->hpux_domain);
        }
        unset($device->hpux_os_group);
        unset($device->hpux_uuid);
        unset($device->hpux_model);
        unset($device->hpux_serial);
        unset($device->hpux_hostname);
        unset($device->hpux_domain);
        unset($device->hpux_os_name);

        if (!empty($device->synology_model)) {
            $device->system_manufacturer = 'Synology';
            $device->model = 'Diskstation ' . trim((string)$device->synology_model);
            $device->serial = trim((string)$device->synology_serial);
            $device->type = 'nas';
            $device->os_group = 'Linux';
            $device->os_family = 'Synology DSM';
            $device->os_name = 'Synology DSM ' . trim((string)$device->synology_os_major) . '.' . trim((string)$device->synology_os_minor) . '-' . trim((string)$device->synology_os_build);
            $device->os_version = trim((string)$device->synology_os_major) . '.' . trim((string)$device->synology_os_minor);
        }

        // Type based on os_group = Linux (set to computer)
        if (!empty($device->os_group) and $device->os_group === 'Linux' and empty($device->type) and !empty($device->manufacturer) and $device->manufacturer !== 'Ubiquiti Networks Inc.') {
            $device->type = 'computer';
        }
        if (!empty($device->os_group) and stripos($device->os_group, 'BSD') !== false) {
            $device->type = 'computer';
            $device->model = $device->bsd_model;
            $device->os_group = 'BSD';
            $device->manufacturer = $device->bsd_manufacturer;
            $device->os_family = $device->bsd_os_family;
            $device->os_name = $device->bsd_os_family . ' ' . $device->bsd_os_name;
            $device->os_version = $device->bsd_os_version;
        }
        unset($device->bsd_model);
        unset($device->bsd_manufacturer);
        unset($device->bsd_os_family);
        unset($device->bsd_os_name);
        unset($device->bsd_os_version);

        // UUID
        $array = array('bsd_uuid', 'solaris_uuid', 'esx_uuid', 'osx_uuid', 'lshal_uuid');
        foreach ($array as $attribute) {
            if (empty($device->uuid) && ! empty($device->$attribute)) {
                if ($attribute === 'lshal_uuid') {
                    $temp = explode("'", $device->lshal_uuid);
                    $device->lshal_uuid = $temp[1];
                }
                $device->uuid = $device->$attribute;
            }
            unset($device->$attribute);
        }

        $device->use_sudo = false;
        $command = '';

        if (empty($device->which_sudo) and ! empty($instance->config->discovery_sudo_path)) {
            $sudo_paths = explode(',', $instance->config->discovery_sudo_path);
            foreach ($sudo_paths as $sudo_path) {
                if (strpos($device->shell, 'bash') === false && $device->bash !== '') {
                    $command = $device->bash . " -c 'ls {$sudo_path} 2>/dev/null'";
                } else {
                    $command = "ls {$sudo_path} 2>/dev/null";
                }
                $item_start = microtime(true);
                $temp1 = $ssh->exec($command);
                $temp1 = trim((string)$temp1);
                $log->command = $command;
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = "SSH command - ls {$sudo_path} 2>/dev/null";
                $log->command_output = $temp1;
                if (!empty($temp1)) {
                    $log->command_status = 'success';
                    if (strpos($temp1, "\n") !== false) {
                        $array1 = explode("\n", $temp1);
                        foreach ($array1 as &$string) {
                            $string = trim((string)$string);
                            $device->which_sudo = $string;
                        }
                    } else {
                        $device->which_sudo = $temp1;
                    }
                    $log->command_status = 'success';
                    $discoveryLogModel->create($log);
                    break;
                } else {
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                }
            }
        }

        if ($username !== 'root') {
            if (
                ($instance->config->discovery_linux_use_sudo === 'y' and strtolower($device->os_group) === 'linux') or
                ($instance->config->discovery_sunos_use_sudo === 'y' and strtolower($device->os_group) === 'sunos') or
                (strtolower($device->os_group) !== 'linux' && strtolower($device->os_group) !== 'sunos')
            ) {
                if (!empty($device->which_sudo)) {
                    $item_start = microtime(true);
                    $command = $device->which_sudo . ' hostname 2>/dev/null';
                    if (strpos($device->shell, 'bash') === false && $device->bash !== '') {
                        $command = $device->bash . " -c '" . $command . "'\n";
                    } else {
                        $command .= "\n";
                    }
                    $ssh->write($command);
                    $ssh->setTimeout(5);
                    $output = $ssh->read('assword');
                    if (stripos($output, 'assword') !== false) {
                        $ssh->write($password . "\n");
                        $output = $ssh->read('[prompt]');
                    }
                    $lines = explode("\n", $output);
                    $hostname = trim((string)$lines[count($lines) - 2]);
                    $sudo_temp_hostname = explode('.', $hostname);
                    $ssh_hostname = explode('.', $device->hostname);
                    $s_h_result = '';
                    if (trim(strtolower($sudo_temp_hostname[0])) === trim(strtolower($ssh_hostname[0]))) {
                        $device->use_sudo = true;
                        $s_h_result = trim(strtolower($sudo_temp_hostname[0]));
                    }
                    foreach ($lines as $line) {
                        if (trim(strtolower($line)) === trim(strtolower($ssh_hostname[0]))) {
                            $device->use_sudo = true;
                            $s_h_result = trim(strtolower($line));
                        }
                    }
                    $log->command = trim((string)$command) . '; # hostname test using sudo';
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    $log->command_output = 'sudo hostname: ' . $s_h_result . ', Device hostname: ' . $ssh_hostname[0];
                    $log->message = 'SSH command - sudo hostname';
                    if ($device->use_sudo) {
                        $log->command_status = 'success';
                    } else {
                        $log->command_status = 'notice';
                    }
                    $discoveryLogModel->create($log);
                    unset($sudo_temp_hostname, $ssh_hostname, $hostname);
                }
            }
        }

        unset($array);
        if (empty($device->dbus_identifier) && empty($device->uuid) && $username !== 'root') {
            if ($device->use_sudo) {
                // Run DMIDECODE to get the UUID (requires root or sudo)
                $output = '';
                $item_start = microtime(true);
                $command = $device->which_sudo . ' dmidecode -s system-uuid 2>/dev/null';
                if (strpos($device->shell, 'bash') === false && $device->bash !== '') {
                    $command = $device->bash . " -c '" . $command . "'\n";
                } else {
                    $command .= "\n";
                }
                $ssh->write($command);
                $output = $ssh->read('assword');
                if (stripos($output, 'assword') !== false) {
                    $ssh->write($password . "\n");
                    $output = $ssh->read('[prompt]');
                }
                $lines = explode("\n", $output);
                $device->uuid = trim((string)$lines[count($lines) - 2]);
                if ($device->uuid === ':' or strpos($device->uuid, 'dmidecode -s system-uuid 2>/dev/null') !== false) {
                    $device->uuid = '';
                }
                $log->command = trim((string)$command) . '; # uuid';
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->command_output = '';
                $log->message = 'SSH command';

                if (empty($device->uuid)) {
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);

                    // Try to cat a file to get the UUID
                    $output = '';
                    $item_start = microtime(true);
                    $command = $device->which_sudo . ' cat /sys/class/dmi/id/product_uuid 2>/dev/null';
                    if (strpos($device->shell, 'bash') === false && $device->bash !== '') {
                        $command = $device->bash . " -c '" . $command . "'";
                    } else {
                        $command .= "\n";
                    }
                    $ssh->write($command);
                    $output = $ssh->read('assword');
                    if (stripos($output, 'assword') !== false) {
                        $ssh->write($password . "\n");
                        $output = $ssh->read('[prompt]');
                    }
                    $lines = explode("\n", $output);
                    $device->uuid = trim((string)$lines[count($lines) - 2]);
                    if (stripos($device->uuid, 'cat /sys/class/dmi/id/product_uuid 2>/dev/null') !== false) {
                        $device->uuid = '';
                    }
                    $log->command = trim((string)$command) . '; # uuid';
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    $log->command_output = '';
                    $log->message = 'SSH command';
                    if (!empty($device->uuid)) {
                        $log->command_output = $device->uuid;
                        $log->command_status = 'success';
                    } else {
                        $log->command_status = 'notice';
                    }
                    $discoveryLogModel->create($log);
                } else {
                    $log->command_output = $device->uuid;
                    $log->command_status = 'success';
                    $discoveryLogModel->create($log);
                }
                if (empty($device->uuid)) {
                    unset($device->uuid);
                }
            }
        }

        if (empty($device->uuid) && $username === 'root') {
            $item_start = microtime(true);
            $command = 'dmidecode -s system-uuid 2>/dev/null';
            if (strpos($device->shell, 'bash') === false && $device->bash !== '') {
                $command = $device->bash . " -c '" . $command . "'";
            }
            $device->uuid = trim((string)$ssh->exec($command));
            $log->command_output = json_encode(explode("\n", $device->uuid));

            if (strpos($device->uuid, 'dmidecode -s system-uuid 2>/dev/null') !== false) {
                $device->uuid = '';
            }
            $log->message = 'SSH command';
            $log->command = trim((string)$command) . '; # uuid';
            $log->command_time_to_execute = (microtime(true) - $item_start);
            if (!empty($device->uuid)) {
                $log->command_output = $device->uuid;
                $log->command_status = 'success';
                $discoveryLogModel->create($log);
            } else {
                $log->command_output = '';
                $log->command_status = 'notice';
                $discoveryLogModel->create($log);

                $item_start = microtime(true);
                $command = 'cat /sys/class/dmi/id/product_uuid 2>/dev/null';
                if (strpos($device->shell, 'bash') === false && $device->bash !== '') {
                    $command = $device->bash . " -c '" . $command . "'";
                }
                $device->uuid = trim((string)$ssh->exec($command));
                $log->command = trim((string)$command) . '; # uuid';
                $log->message = 'SSH command';
                $log->command_time_to_execute = (microtime(true) - $item_start);
                if (empty($device->uuid)) {
                    $log->command_output = '';
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                } else {
                    $log->command_output = $device->uuid;
                    $log->command_status = 'success';
                    $discoveryLogModel->create($log);
                }
            }
        }

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
