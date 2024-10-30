<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

if (!function_exists('snmp_credentials')) {
    /**
     * [snmp_credentials description]
     * @param  string $ip           [description]
     * @param  array  $credentials  [description]
     * @param  [type] $log          [description]
     * @param  [type] $discovery_id [description]
     * @return [type]               [description]
     */
    function snmp_credentials(string $ip = '', array $credentials = array(), int $discovery_id = 0)
    {
        $retries = 0;
        $timeout = 5000000;
        $oid = '1.3.6.1.2.1.1.2.0';

        $discoveryLogModel = new \App\Models\DiscoveryLogModel();

        $log = new \StdClass();
        $log->discovery_id = (!empty($discovery_id)) ? $discovery_id : '';
        $log->ip = (!empty($ip)) ? $ip : '';
        $log->file = 'snmp_helper';
        $log->function = 'snmp_credentials';

        if (!extension_loaded('snmp')) {
            log_message('error', 'SNMP extension for PHP is not present, aborting credential test on ' . $ip . '.');
            $log->message = 'SNMP extension for PHP is not present, aborting credential test on ' . $ip;
            $log->command_status = 'error';
            $log->severity = 4;
            $discoveryLogModel->create($log);
            return false;
        }

        if (empty($credentials)) {
            log_message('warning', 'No credentials array passed to snmp_credentials for ' . $ip . '.');
            $log->message = 'No credentials array passed to snmp_credentials for ' . $ip . '.';
            $log->command_output = 'No credentials array passed to snmp_credentials for ' . $ip . '.';
            $log->command_status = 'warning';
            $log->severity = 4;
            $discoveryLogModel->create($log);
            return false;
        }
        if (empty($ip) or ! filter_var($ip, FILTER_VALIDATE_IP)) {
            log_message('error', 'Invalid or blank IP passed to snmp_credentials.');
            $log->message = 'No IP or bad IP passed to snmp_credentials.';
            $log->command_status = 'error';
            $log->severity = 4;
            $discoveryLogModel->create($log);
            return false;
        }

        $users = array();
        $multiple = false;
        $cred_ids = array();
        foreach ($credentials as $credential) {
            $cred_ids[] = $credential->id;
            if ($credential->type === 'snmp_v3') {
                $users[] = $credential->credentials->security_name;
            }
        }
        $counts = array_count_values($users);
        foreach ($counts as $key => $value) {
            if ($value > 1) {
                $multiple = true;
            }
        }

        // SNMPv3
        if ($multiple and php_uname('s') !== 'Windows NT') {
            $log->message = 'Running externally because multiple credential sets use identical security user names.';
            $log->command_status = 'notice';
            $log->command_output = 'php_uname(\'s\');';
            $log->command = php_uname('s');
            $log->severity = 6;
            $discoveryLogModel->create($log);

            // Use net-snmp instead of calling with PHP
            foreach ($credentials as $credential) {
                $from = ' ';
                if (!empty($credential->source)) {
                    $from = 'from ' . $credential->source;
                }
                if (!empty($credential->name)) {
                    $from = 'named ' . $credential->name;
                }
                if (!empty($credential->type) && $credential->type === 'snmp_v3') {
                    $command = 'snmpget -v3 -On -l ' . escapeshellarg($credential->credentials->security_level)  .
                                ' -u ' . escapeshellarg($credential->credentials->security_name) .
                                ' -a ' . escapeshellarg($credential->credentials->authentication_protocol) .
                                ' -A ' . escapeshellarg($credential->credentials->authentication_passphrase) .
                                ' -x ' . escapeshellarg($credential->credentials->privacy_protocol) .
                                ' -X ' . escapeshellarg($credential->credentials->privacy_passphrase) .
                                ' ' . $ip . ' ' . $oid;

                    $log->command = 'Sample Command: snmpget -v3 -On -l ' . escapeshellarg($credential->credentials->security_level)  .
                                ' -u ' . escapeshellarg($credential->credentials->security_name) .
                                ' -a ' . escapeshellarg($credential->credentials->authentication_protocol) .
                                ' -A ' . escapeshellarg('XXXX') .
                                ' -x ' . escapeshellarg($credential->credentials->privacy_protocol) .
                                ' -X ' . escapeshellarg('XXXX') .
                                ' ' . $ip . ' ' . $oid;

                    exec($command, $output, $return_var);
                    if ($return_var === 0 and !empty($output[0])) {
                        $credential->credentials->version = 3;
                        $log->message = 'Credential set for SNMPv3 ' . $from . ' working on ' . $ip;
                        $log->command_status = 'success';
                        $log->severity = 7;
                        $log->command_output = $output[0];
                        $discoveryLogModel->create($log);
                        return $credential;
                    } else {
                        $log->message = 'Credential set for SNMPv3 ' . $from . ' not working on ' . $ip;
                        $log->command_status = 'notice';
                        $log->severity = 6;
                        $log->command_output = @$output[0];
                        $discoveryLogModel->create($log);
                    }
                }
            }
        } else {
            if ($multiple and php_uname('s') === 'Windows NT') {
                $log->message = 'Multiple identical security usernames detected for SNMPv3. This is likely to not work. You should add a specific set of credentials per device.';
                $log->command_status = 'warning';
                $log->severity = 5;
                $log->command_output = json_encode($users);
                $log->command = php_uname('s');
                $discoveryLogModel->create($log);
            }

            foreach ($credentials as $credential) {
                $from = ' ';
                if (!empty($credential->source)) {
                    $from = 'from ' . $credential->source;
                }
                if (!empty($credential->name)) {
                    $from = 'named ' . $credential->name;
                }
                if (!empty($credential->type) && $credential->type === 'snmp_v3') {
                    $log->command = 'Sample Command: snmpget -v3 -On -l ' . escapeshellarg($credential->credentials->security_level)  .
                            ' -u ' . escapeshellarg($credential->credentials->security_name) .
                            ' -a ' . escapeshellarg($credential->credentials->authentication_protocol) .
                            ' -A ' . escapeshellarg('XXXX') .
                            ' -x ' . escapeshellarg($credential->credentials->privacy_protocol) .
                            ' -X ' . escapeshellarg('XXXX') .
                            ' ' . $ip . ' ' . $oid;
                    $result = '';
                    $security_name =                !empty($credential->credentials->security_name) ? $credential->credentials->security_name : '';
                    $security_level =               !empty($credential->credentials->security_level) ? $credential->credentials->security_level : '';
                    $authentication_protocol =      !empty($credential->credentials->authentication_protocol) ? $credential->credentials->authentication_protocol : '';
                    $authentication_passphrase =    !empty($credential->credentials->authentication_passphrase) ? $credential->credentials->authentication_passphrase : '';
                    $privacy_protocol =             !empty($credential->credentials->privacy_protocol) ? $credential->credentials->privacy_protocol : '';
                    $privacy_passphrase =           !empty($credential->credentials->privacy_passphrase) ? $credential->credentials->privacy_passphrase : '';
                    $context_name =                 !empty($credential->credentials->context_name) ? $credential->credentials->context_name : '';
                    $context_engine_id =            !empty($credential->credentials->context_engine_id) ? $credential->credentials->context_engine_id : '';
                    $session = new SNMP(SNMP::VERSION_3, $ip, $security_name, $timeout, $retries);
                    $session->setSecurity(
                        $security_level,
                        $authentication_protocol,
                        $authentication_passphrase,
                        $privacy_protocol,
                        $privacy_passphrase,
                        $context_name,
                        $context_engine_id
                    );
                    $result = @$session->get($oid);
                    $session->close();
                    unset($session);
                    if (!empty($result)) {
                        $credential->credentials->version = 3;
                        $log->severity = 7;
                        $log->message = 'Credential set for SNMPv3 ' . $from . ' working on ' . $ip;
                        $log->command_status = 'success';
                        $discoveryLogModel->create($log);
                        return $credential;
                    } else {
                        $log->severity = 6;
                        $log->message = 'Credential set for SNMPv3 ' . $from . ' not working on ' . $ip;
                        $log->command_status = 'notice';
                        $discoveryLogModel->create($log);
                    }

                    $log->command = '';
                    $log->command_output = '';
                }
            }
        }

        // SNMPv2
        foreach ($credentials as $credential) {
            $from = '';
            if (!empty($credential->source)) {
                $from = 'from ' . $credential->source;
            }
            if (!empty($credential->name)) {
                $from = 'named ' . $credential->name;
            }
            $log->command = "Sample command: snmpget -v2c -On -c 'XXXX' {$ip} {$oid}";

            if (!empty($credential->type) && $credential->type === 'snmp') {
                try {
                    snmp2_get($ip, $credential->credentials->community, $oid, $timeout, $retries);
                    $credential->credentials->version = 2;
                    $log->severity = 7;
                    $log->message = 'Credential set for SNMPv2 ' . $from . ' working on ' . $ip;
                    $log->command_status = 'success';
                    $discoveryLogModel->create($log);
                    return $credential;
                } catch (Exception $e) {
                    $log->severity = 6;
                    $log->message = 'Credential set for SNMPv2 ' . $from . ' not working on ' . $ip;
                    $log->command_output = $e->getMessage();
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                }
            }
        }

        // SNMP v1
        foreach ($credentials as $credential) {
            $from = '';
            if (!empty($credential->source)) {
                $from = 'from ' . $credential->source;
            }
            if (!empty($credential->name)) {
                $from = 'named ' . $credential->name;
            }
            $log->command = "Sample command: snmpget -v1 -On -c 'XXXX' {$ip} {$oid}";
            if (!empty($credential->type) && $credential->type === 'snmp') {
                try {
                    snmpget($ip, $credential->credentials->community, $oid, $timeout, $retries);
                    $credential->credentials->version = 2;
                    $log->severity = 7;
                    $log->message = 'Credential set for SNMPv1 ' . $from . ' working on ' . $ip;
                    $log->command_status = 'success';
                    $discoveryLogModel->create($log);
                    return $credential;
                } catch (Exception $e) {
                    $log->severity = 6;
                    $log->message = 'Credential set for SNMPv1 ' . $from . ' not working on ' . $ip;
                    $log->command_output = $e->getMessage();
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                }
            }
        }
        $log->command_status = 'issue';
        $log->severity = 5;
        $log->message = 'SNMP detected, but no valid SNMP credentials found for ' . $ip;
        $log->command = '';
        $log->command_output = 'SNMP detected, but no valid SNMP credentials found for ' . $ip;
        $discoveryLogModel->create($log);
        return false;
    }
}


function my_snmp_get_command($ip, $credentials, $oid)
{
    $array = array();
    if (intval($credentials->credentials->version) === 1) {
        $command = 'snmpget -v1 -On -c ' . escapeshellarg($credentials->credentials->community) . ' ' . escapeshellarg($ip) . ' ' . escapeshellarg($oid);
        exec($command, $output, $return_var);
        foreach ($output as $line) {
            $temp = explode(' = ', $line);
            $thisOid = substr($temp[0], 1);
            $value = '';
            if (strpos($temp[1], ':') !== false) {
                $values = explode(':', $temp[1]);
                unset($values[0]);
                $value = trim(implode(':', $values), ' "');
            }
            $string = $value;
        }
    }
    if (intval($credentials->credentials->version) === 2) {
        $command = 'snmpget -v2c -On -c ' . escapeshellarg($credentials->credentials->community) . ' ' . escapeshellarg($ip) . ' ' . escapeshellarg($oid);
        exec($command, $output, $return_var);
        foreach ($output as $line) {
            $temp = explode(' = ', $line);
            $thisOid = substr($temp[0], 1);
            $value = '';
            if (strpos($temp[1], ':') !== false) {
                $values = explode(':', $temp[1]);
                unset($values[0]);
                $value = trim(implode(':', $values), ' "');
            }
            $string = $value;
        }
    }
    if (intval($credentials->credentials->version) === 3) {
        $security_level =               !empty($credentials->credentials->security_level) ?             ' -l ' . escapeshellarg($credentials->credentials->security_level) : '';
        $security_name =                !empty($credentials->credentials->security_name) ?              ' -u ' . escapeshellarg($credentials->credentials->security_name) : '';
        $authentication_protocol =      !empty($credentials->credentials->authentication_protocol) ?    ' -a ' . escapeshellarg($credentials->credentials->authentication_protocol) : '';
        $authentication_passphrase =    !empty($credentials->credentials->authentication_passphrase) ?  ' -A ' . escapeshellarg($credentials->credentials->authentication_passphrase) : '';
        $privacy_protocol =             !empty($credentials->credentials->privacy_protocol) ?           ' -x ' . escapeshellarg($credentials->credentials->privacy_protocol) : '';
        $privacy_passphrase =           !empty($credentials->credentials->privacy_passphrase) ?         ' -X ' . escapeshellarg($credentials->credentials->privacy_passphrase) : '';
        $context_name =                 !empty($credentials->credentials->context_name) ?               ' -n ' . escapeshellarg($credentials->credentials->context_name) : '';
        $context_engine_id =            !empty($credentials->credentials->context_engine_id) ?          ' -e ' . escapeshellarg($credentials->credentials->context_engine_id) : '';
        $command = 'snmpget -v3 -On ' . $security_level . $security_name . $authentication_protocol . $authentication_passphrase . $privacy_protocol . $privacy_passphrase . $context_name . $context_engine_id . ' ' . $ip . ' ' . $oid;
        exec($command, $output, $return_var);
        $array = array();
        foreach ($output as $line) {
            $temp = explode(' = ', $line);
            $thisOid = substr($temp[0], 1);
            $value = '';
            if (strpos($temp[1], ':') !== false) {
                $values = explode(':', $temp[1]);
                unset($values[0]);
                $value = trim(implode(':', $values), ' "');
            }
            $string = $value;
        }
    }

    if (empty($string) or $string === false) {
        log_message('debug', 'SNMPv' . $credentials->credentials->version . ' get using command line for ' . $oid . ' not working on ' . $ip);
        return array();
    }
    return $string;
}


if (!function_exists('my_snmp_get')) {
    /**
     * [my_snmp_get description]
     * @param  [type] $ip          [description]
     * @param  [type] $credentials [description]
     * @param  [type] $oid         [description]
     * @return [type]              [description]
     */
    function my_snmp_get($ip, $credentials, $oid)
    {
        $timeout = 1000000;
        $retries = 0;
        $string = '';

        if (empty($credentials->credentials->version) or !in_array(intval($credentials->credentials->version), [1,2,3])) {
            $credentials->credentials->version = 2;
        }
        if (intval($credentials->credentials->version) === 1) {
            $session = new SNMP(SNMP::VERSION_1, $ip, $credentials->credentials->community, $timeout, $retries);
        }
        if (intval($credentials->credentials->version) === 2) {
            $session = new SNMP(SNMP::VERSION_2c, $ip, $credentials->credentials->community, $timeout, $retries);
        }
        if (intval($credentials->credentials->version) === 3) {
            $security_name =                !empty($credentials->credentials->security_name) ?              $credentials->credentials->security_name : '';
            $security_level =               !empty($credentials->credentials->security_level) ?             $credentials->credentials->security_level : '';
            $authentication_protocol =      !empty($credentials->credentials->authentication_protocol) ?    $credentials->credentials->authentication_protocol : '';
            $authentication_passphrase =    !empty($credentials->credentials->authentication_passphrase) ?  $credentials->credentials->authentication_passphrase : '';
            $privacy_protocol =             !empty($credentials->credentials->privacy_protocol) ?           $credentials->credentials->privacy_protocol : '';
            $privacy_passphrase =           !empty($credentials->credentials->privacy_passphrase) ?         $credentials->credentials->privacy_passphrase : '';
            $context_name =                 !empty($credentials->credentials->context_name) ?               $credentials->credentials->context_name : '';
            $context_engine_id =            !empty($credentials->credentials->context_engine_id) ?          $credentials->credentials->context_engine_id : '';
            $session = new SNMP(SNMP::VERSION_3, $ip, $security_name, $timeout, $retries);
            $session->setSecurity(
                $security_level,
                $authentication_protocol,
                $authentication_passphrase,
                $privacy_protocol,
                $privacy_passphrase,
                $context_name,
                $context_engine_id
            );
        }
        $session->exceptions_enabled = SNMP::ERRNO_ANY;
        $error = '';
        try {
            $string = $session->get($oid);
        } catch (Exception $e) {
            $error = (string)$session->getError();
            if (stripos($error, 'No Such Object available on this agent at this OID') === false and stripos($error, 'No Such Instance currently exists at this OID') === false) {
                log_message('debug', 'SNMPv' . $credentials->credentials->version . ' get for ' . $oid . ' not working on ' . $ip . '. Exception: ' . $error);
            }
        }
        $session->close();
        unset($session);

        if (php_uname('s') !== 'Windows NT' and stripos($error, 'No response from ' . $ip) !== false) {
            // Try a command line request
            $string = my_snmp_get_command($ip, $credentials, $oid);
        }

        if (empty($string) && $string !== '0') {
            return '';
        }
        if ($string === '""') {
            $string = '';
        }
        $string = trim((string)$string);
        // if the first character is a '.', remove it.
        if (strpos($string, '.') === 0) {
            $string = substr($string, 1);
        }
        // remove the first and last characters if they are "
        if (substr($string, 0, 1) === '"') {
            $string = substr($string, 1, strlen($string));
        }
        if (substr($string, -1, 1) === '"') {
            $string = substr($string, 0, strlen($string) - 1);
        }
        // remove some return strings
        if (
            strpos(strtolower($string), '/etc/snmp') !== false or
            strpos(strtolower($string), 'no such instance') !== false or
            strpos(strtolower($string), 'no such object') !== false or
            strpos(strtolower($string), 'not set') !== false or
            strpos(strtolower($string), 'unknown value type') !== false
        ) {
            $string = '';
        }
        // remove any quotation marks
        $string = str_replace('"', ' ', $string);
        // replace any line breaks with spaces
        $string = str_replace(array("\r", "\n"), ' ', $string);
        return (string)$string;
    }
}

function my_snmp_walk_command($ip, $credentials, $oid)
{
    $array = array();
    if (intval($credentials->credentials->version) === 1) {
        $command = 'snmpwalk -v1 -On -c ' . escapeshellarg($credentials->credentials->community) . ' ' . escapeshellarg($ip) . ' ' . escapeshellarg($oid);
        exec($command, $output, $return_var);
        foreach ($output as $line) {
            $temp = explode(' = ', $line);
            $thisOid = substr($temp[0], 1);
            $value = '';
            if (strpos($temp[1], ':') !== false) {
                $values = explode(':', $temp[1]);
                unset($values[0]);
                $value = trim(implode(':', $values), ' "');
            }
            $array[] = $value;
        }
    }
    if (intval($credentials->credentials->version) === 2) {
        $command = 'snmpwalk -v2c -On -c ' . escapeshellarg($credentials->credentials->community) . ' ' . escapeshellarg($ip) . ' ' . escapeshellarg($oid);
        exec($command, $output, $return_var);
        foreach ($output as $line) {
            $temp = explode(' = ', $line);
            $thisOid = substr($temp[0], 1);
            $value = '';
            if (strpos($temp[1], ':') !== false) {
                $values = explode(':', $temp[1]);
                unset($values[0]);
                $value = trim(implode(':', $values), ' "');
            }
            $array[] = $value;
        }
    }
    if (intval($credentials->credentials->version) === 3) {
        $security_level =               !empty($credentials->credentials->security_level) ?             ' -l ' . escapeshellarg($credentials->credentials->security_level) : '';
        $security_name =                !empty($credentials->credentials->security_name) ?              ' -u ' . escapeshellarg($credentials->credentials->security_name) : '';
        $authentication_protocol =      !empty($credentials->credentials->authentication_protocol) ?    ' -a ' . escapeshellarg($credentials->credentials->authentication_protocol) : '';
        $authentication_passphrase =    !empty($credentials->credentials->authentication_passphrase) ?  ' -A ' . escapeshellarg($credentials->credentials->authentication_passphrase) : '';
        $privacy_protocol =             !empty($credentials->credentials->privacy_protocol) ?           ' -x ' . escapeshellarg($credentials->credentials->privacy_protocol) : '';
        $privacy_passphrase =           !empty($credentials->credentials->privacy_passphrase) ?         ' -X ' . escapeshellarg($credentials->credentials->privacy_passphrase) : '';
        $context_name =                 !empty($credentials->credentials->context_name) ?               ' -n ' . escapeshellarg($credentials->credentials->context_name) : '';
        $context_engine_id =            !empty($credentials->credentials->context_engine_id) ?          ' -e ' . escapeshellarg($credentials->credentials->context_engine_id) : '';
        $command = 'snmpwalk -v3 -On ' . $security_level . $security_name . $authentication_protocol . $authentication_passphrase . $privacy_protocol . $privacy_passphrase . $context_name . $context_engine_id . ' ' . $ip . ' ' . $oid;
        exec($command, $output, $return_var);
        $array = array();
        foreach ($output as $line) {
            $temp = explode(' = ', $line);
            $thisOid = substr($temp[0], 1);
            $value = '';
            if (strpos($temp[1], ':') !== false) {
                $values = explode(':', $temp[1]);
                unset($values[0]);
                $value = trim(implode(':', $values), ' "');
            }
            $array[] = $value;
        }
    }

    if (empty($array) or !is_array($array)) {
        log_message('notice', 'SNMPv' . $credentials->credentials->version . ' walk using command line for ' . $oid . ' not working on ' . $ip);
        return array();
    }
    return $array;
}

if (!function_exists('my_snmp_walk')) {
    /**
     * [my_snmp_walk description]
     * @param  [type] $ip          [description]
     * @param  [type] $credentials [description]
     * @param  [type] $oid         [description]
     * @return [type]              [description]
     */
    function my_snmp_walk($ip, $credentials, $oid)
    {
        $timeout = 30000000;
        $retries = 0;
        $array = array();

        if (empty($credentials->credentials->version) or !in_array(intval($credentials->credentials->version), [1,2,3])) {
            log_message('error', 'Invalid SNMP version passed to my_snmp_walk');
            return false;
        }
        if (intval($credentials->credentials->version) === 1) {
            $session = new SNMP(SNMP::VERSION_1, $ip, $credentials->credentials->community, $timeout, $retries);
        }
        if (intval($credentials->credentials->version) === 2) {
            $session = new SNMP(SNMP::VERSION_2c, $ip, $credentials->credentials->community, $timeout, $retries);
        }
        if (intval($credentials->credentials->version) === 3) {
            $security_name =                !empty($credentials->credentials->security_name) ?              $credentials->credentials->security_name : '';
            $security_level =               !empty($credentials->credentials->security_level) ?             $credentials->credentials->security_level : '';
            $authentication_protocol =      !empty($credentials->credentials->authentication_protocol) ?    $credentials->credentials->authentication_protocol : '';
            $authentication_passphrase =    !empty($credentials->credentials->authentication_passphrase) ?  $credentials->credentials->authentication_passphrase : '';
            $privacy_protocol =             !empty($credentials->credentials->privacy_protocol) ?           $credentials->credentials->privacy_protocol : '';
            $privacy_passphrase =           !empty($credentials->credentials->privacy_passphrase) ?         $credentials->credentials->privacy_passphrase : '';
            $context_name =                 !empty($credentials->credentials->context_name) ?               $credentials->credentials->context_name : '';
            $context_engine_id =            !empty($credentials->credentials->context_engine_id) ?          $credentials->credentials->context_engine_id : '';
            $session = new SNMP(SNMP::VERSION_3, $ip, $security_name, $timeout, $retries);
            $session->setSecurity(
                $security_level,
                $authentication_protocol,
                $authentication_passphrase,
                $privacy_protocol,
                $privacy_passphrase,
                $context_name,
                $context_engine_id
            );
        }
        $session->exceptions_enabled = SNMP::ERRNO_ANY;
        $error = '';
        try {
            $array = $session->walk($oid);
        } catch (Exception $e) {
            $error = (string)$session->getError();
            if (stripos($error, 'No Such Object available on this agent at this OID') === false and stripos($error, 'No Such Instance currently exists at this OID') === false) {
                log_message('debug', 'SNMPv' . $credentials->credentials->version . ' walk for ' . $oid . ' not working on ' . $ip . '. Exception: ' . $error);
            }
        }
        if (!empty($array)) {
            $array = array_values($array);
        }
        $session->close();
        unset($session);

        if (php_uname('s') !== 'Windows NT' and stripos($error, 'No response from ' . $ip) !== false) {
            // Try a command line request
            $array = my_snmp_walk_command($ip, $credentials, $oid);
        }

        if (empty($array) or !is_array($array)) {
            log_message('debug', 'Attempted SNMP walk (v' . $credentials->credentials->version . ') for ' . $oid . ' on ' . $ip . ' resulted in FALSE being returned.');
            return false;
        }
        foreach ($array as $key => $value) {
            $value = $value;
            $array[$key] = trim((string)$array[$key]);
            if ($array[$key] === '""') {
                $array[$key] = '';
            }
            if (strpos($array[$key], '.') === 0) {
                $array[$key] = substr($array[$key], 1);
            }
            // remove the first and last characters if they are "
            if (substr($array[$key], 0, 1) === '"') {
                $array[$key] = substr($array[$key], 1, strlen($array[$key]));
            }
            if (substr($array[$key], -1, 1) === '"') {
                $array[$key] = substr($array[$key], 0, strlen($array[$key]) - 1);
            }
            // remove some return strings
            if (
                strpos(strtolower($array[$key]), '/etc/snmp') !== false or
                strpos(strtolower($array[$key]), 'no such instance') !== false or
                strpos(strtolower($array[$key]), 'no such object') !== false or
                strpos(strtolower($array[$key]), 'not set') !== false or
                strpos(strtolower($array[$key]), 'unknown value type') !== false
            ) {
                $array[$key] = '';
            }
            // remove any quotation marks
            $array[$key] = str_replace('"', ' ', $array[$key]);
            // replace any line breaks with spaces
            $array[$key] = str_replace(array("\r", "\n"), ' ', $array[$key]);
        }
        return $array;
    }
}


function my_snmp_real_walk_command($ip, $credentials, $oid)
{
    $array = array();
    if (intval($credentials->credentials->version) === 1) {
        $command = 'snmpwalk -v1 -On -c ' . escapeshellarg($credentials->credentials->community) . ' ' . escapeshellarg($ip) . ' ' . escapeshellarg($oid);
        exec($command, $output, $return_var);
        foreach ($output as $line) {
            $temp = explode(' = ', $line);
            $thisOid = substr($temp[0], 1);
            $value = '';
            if (strpos($temp[1], ':') !== false) {
                $values = explode(':', $temp[1]);
                unset($values[0]);
                $value = trim(implode(':', $values), ' "');
            }
            $array[$thisOid] = $value;
        }
    }
    if (intval($credentials->credentials->version) === 2) {
        $command = 'snmpwalk -v2c -On -c ' . escapeshellarg($credentials->credentials->community) . ' ' . escapeshellarg($ip) . ' ' . escapeshellarg($oid);
        exec($command, $output, $return_var);
        foreach ($output as $line) {
            $temp = explode(' = ', $line);
            $thisOid = substr($temp[0], 1);
            $value = '';
            if (strpos($temp[1], ':') !== false) {
                $values = explode(':', $temp[1]);
                unset($values[0]);
                $value = trim(implode(':', $values), ' "');
            }
            $array[$thisOid] = $value;
        }
    }
    if (intval($credentials->credentials->version) === 3) {
        $security_level =               !empty($credentials->credentials->security_level) ?             ' -l ' . escapeshellarg($credentials->credentials->security_level) : '';
        $security_name =                !empty($credentials->credentials->security_name) ?              ' -u ' . escapeshellarg($credentials->credentials->security_name) : '';
        $authentication_protocol =      !empty($credentials->credentials->authentication_protocol) ?    ' -a ' . escapeshellarg($credentials->credentials->authentication_protocol) : '';
        $authentication_passphrase =    !empty($credentials->credentials->authentication_passphrase) ?  ' -A ' . escapeshellarg($credentials->credentials->authentication_passphrase) : '';
        $privacy_protocol =             !empty($credentials->credentials->privacy_protocol) ?           ' -x ' . escapeshellarg($credentials->credentials->privacy_protocol) : '';
        $privacy_passphrase =           !empty($credentials->credentials->privacy_passphrase) ?         ' -X ' . escapeshellarg($credentials->credentials->privacy_passphrase) : '';
        $context_name =                 !empty($credentials->credentials->context_name) ?               ' -n ' . escapeshellarg($credentials->credentials->context_name) : '';
        $context_engine_id =            !empty($credentials->credentials->context_engine_id) ?          ' -e ' . escapeshellarg($credentials->credentials->context_engine_id) : '';
        $command = 'snmpwalk -v3 -On ' . $security_level . $security_name . $authentication_protocol . $authentication_passphrase . $privacy_protocol . $privacy_passphrase . $context_name . $context_engine_id . ' ' . $ip . ' ' . $oid;
        exec($command, $output, $return_var);
        foreach ($output as $line) {
            $temp = explode(' = ', $line);
            $thisOid = substr($temp[0], 1);
            $value = '';
            if (strpos($temp[1], ':') !== false) {
                $values = explode(':', $temp[1]);
                unset($values[0]);
                $value = trim(implode(':', $values), ' "');
            }
            $array[$thisOid] = $value;
        }
    }

    if (empty($array) or !is_array($array)) {
        log_message('notice', 'SNMPv' . $credentials->credentials->version . ' real walk using command line for ' . $oid . ' not working on ' . $ip);
        return array();
    }
    return $array;
}

if (!function_exists('my_snmp_real_walk')) {
    /**
     * [my_snmp_real_walk description]
     * @param  [type] $ip          [description]
     * @param  [type] $credentials [description]
     * @param  [type] $oid         [description]
     * @return [type]              [description]
     */
    function my_snmp_real_walk($ip, $credentials, $oid)
    {
        $timeout = 30000000;
        $retries = 0;
        $array = array();

        if (empty($credentials->credentials->version) or !in_array(intval($credentials->credentials->version), [1,2,3])) {
            log_message('error', 'Invalid SNMP version passed to my_snmp_real_walk');
            return false;
        }
        if (intval($credentials->credentials->version) === 1) {
            $session = new SNMP(SNMP::VERSION_1, $ip, $credentials->credentials->community, $timeout, $retries);
        }
        if (intval($credentials->credentials->version) === 2) {
            $session = new SNMP(SNMP::VERSION_2c, $ip, $credentials->credentials->community, $timeout, $retries);
        }
        if (intval($credentials->credentials->version) === 3) {
            $security_name =                !empty($credentials->credentials->security_name) ?              $credentials->credentials->security_name : '';
            $security_level =               !empty($credentials->credentials->security_level) ?             $credentials->credentials->security_level : '';
            $authentication_protocol =      !empty($credentials->credentials->authentication_protocol) ?    $credentials->credentials->authentication_protocol : '';
            $authentication_passphrase =    !empty($credentials->credentials->authentication_passphrase) ?  $credentials->credentials->authentication_passphrase : '';
            $privacy_protocol =             !empty($credentials->credentials->privacy_protocol) ?           $credentials->credentials->privacy_protocol : '';
            $privacy_passphrase =           !empty($credentials->credentials->privacy_passphrase) ?         $credentials->credentials->privacy_passphrase : '';
            $context_name =                 !empty($credentials->credentials->context_name) ?               $credentials->credentials->context_name : '';
            $context_engine_id =            !empty($credentials->credentials->context_engine_id) ?          $credentials->credentials->context_engine_id : '';
            $session = new SNMP(SNMP::VERSION_3, $ip, $security_name, $timeout, $retries);
            $session->setSecurity(
                $security_level,
                $authentication_protocol,
                $authentication_passphrase,
                $privacy_protocol,
                $privacy_passphrase,
                $context_name,
                $context_engine_id
            );
        }
        $session->exceptions_enabled = SNMP::ERRNO_ANY;
        $error = '';
        try {
            $array = $session->walk($oid);
        } catch (Exception $e) {
            $error = (string)$session->getError();
            if (stripos($error, 'No Such Object available on this agent at this OID') === false and stripos($error, 'No Such Instance currently exists at this OID') === false) {
                log_message('debug', 'SNMPv' . $credentials->credentials->version . ' real walk for ' . $oid . ' not working on ' . $ip . '. Exception: ' . $error);
            }
        }
        $session->close();
        unset($session);

        if (php_uname('s') !== 'Windows NT' and stripos($error, 'No response from ' . $ip) !== false) {
            // Try a command line request
            $array = my_snmp_real_walk_command($ip, $credentials, $oid);
        }

        if (empty($array) or !is_array($array)) {
            return false;
        }
        foreach ($array as $key => $value) {
            $value = $value;
            $array[$key] = trim((string)$array[$key]);
            if ($array[$key] === '""') {
                $array[$key] = '';
            }
            if (strpos($array[$key], '.') === 0) {
                $array[$key] = substr($array[$key], 1);
            }
            // remove the first and last characters if they are "
            if (substr($array[$key], 0, 1) === '"') {
                $array[$key] = substr($array[$key], 1, strlen($array[$key]));
            }
            if (substr($array[$key], -1, 1) === '"') {
                $array[$key] = substr($array[$key], 0, strlen($array[$key]) - 1);
            }
            // remove some return strings
            if (
                strpos(strtolower($array[$key]), '/etc/snmp') !== false or
                strpos(strtolower($array[$key]), 'no such instance') !== false or
                strpos(strtolower($array[$key]), 'no such object') !== false or
                strpos(strtolower($array[$key]), 'not set') !== false or
                strpos(strtolower($array[$key]), 'unknown value type') !== false
            ) {
                $array[$key] = '';
            }
            // remove any quotation marks
            $array[$key] = str_replace('"', ' ', $array[$key]);
            // replace any line breaks with spaces
            $array[$key] = str_replace(array("\r", "\n"), ' ', $array[$key]);
        }
        return $array;
    }
}


if (!function_exists('snmp_audit')) {
    /**
     * [snmp_audit description]
     * @param  [type] $ip           [description]
     * @param  [type] $credentials  [description]
     * @param  [type] $log          [description]
     * @param  [type] $discovery_id [description]
     * @return [type]               [description]
     */
    function snmp_audit(string $ip = '', object $credentials = null, int $discovery_id = 0, string $type = 'subnet')
    {
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $log = new \StdClass();
        $log->discovery_id = (!empty($discovery_id)) ? $discovery_id : '';
        $log->ip = (!empty($ip)) ? $ip : '';
        $log->file = 'snmp_helper';
        $log->function = 'snmp_audit';
        $log->severity = 7;

        if (function_exists('get_instance')) {
            $instance = & get_instance();
        } else {
            $instance = new stdClass();
            $instance->config = config('Openaudit');
        }

        if (!extension_loaded('snmp')) {
            log_message('error', 'SNMP PHP function not loaded hence not attempting to run snmp_helper::snmp_audit function.');
            $log->message = 'SNMP PHP function not loaded hence not attempting to run snmp_helper::snmp_audit function';
            $log->severity = 5;
            $discoveryLogModel->create($log);
            return false;
        }

        // we need an ip address
        if (empty($ip)) {
            log_message('error', 'No IP passed to snmp_helper::snmp_audit.');
            $log->message = 'Received no ip address';
            $log->severity = 5;
            $discoveryLogModel->create($log);
            return false;
        } elseif (! filter_var($ip, FILTER_VALIDATE_IP)) {
            $log->message = 'Received invalid ip address ' . (string)$ip;
            $log->severity = 5;
            $discoveryLogModel->create($log);
            return false;
        }

        if (empty($credentials) or ! is_object($credentials)) {
            log_message('error', 'No credentials passed to snmp_helper::snmp_audit.');
            $log->message = 'Received no credentials for ' . $ip;
            $log->severity = 5;
            $discoveryLogModel->create($log);
            return false;
        }

        // new in 1.5 - remove the type from the returned SNMP query.
        // this affects the snmp_clean function in this file
        snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
        snmp_set_oid_output_format(SNMP_OID_OUTPUT_NUMERIC);

        $details = new \StdClass();
        $module = new \StdClass();
        $return_ips = new \StdClass();
        $return_ips->item = array();
        $routes = array();
        $guests = array();
        $modules = array();
        $radios = array();
        $access_points = array();

        $details->ip = (string)$ip;
        $details->manufacturer = '';
        $details->serial = '';
        $details->model = '';
        $details->type = '';

        $log->command_status = 'notice';

        $item_start = microtime(true);
        $details->sysDescr = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.1.1.0');
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->message = 'sysDescr retrieval for ' . $ip;
        $log->command = 'snmpget 1.3.6.1.2.1.1.1.0';
        $log->command_output = (string)$details->sysDescr;
        $discoveryLogModel->create($log);
        unset($log->command_time_to_execute, $log->command_output);

        $details->description = $details->sysDescr;

        $item_start = microtime(true);
        $details->sysContact =  my_snmp_get($ip, $credentials, '1.3.6.1.2.1.1.4.0');
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->message = 'sysContact retrieval for ' . $ip;
        $log->command = 'snmpget 1.3.6.1.2.1.1.4.0';
        $log->command_output = (string)$details->sysContact;
        $discoveryLogModel->create($log);
        unset($log->command_time_to_execute, $log->command_output);

        $details->contact = $details->sysContact;

        $item_start = microtime(true);
        $details->sysName = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.1.5.0');
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->message = 'sysName retrieval for ' . $ip;
        $log->command = 'snmpget 1.3.6.1.2.1.1.5.0';
        $log->command_output = (string)$details->sysName;
        $discoveryLogModel->create($log);
        unset($log->command_time_to_execute, $log->command_output);

        $item_start = microtime(true);
        $details->sysLocation = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.1.6.0');
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->message = 'sysLocation retrieval for ' . $ip;
        $log->command = 'snmpget 1.3.6.1.2.1.1.6.0';
        $log->command_output = (string)$details->sysLocation;
        $discoveryLogModel->create($log);
        unset($log->command_time_to_execute, $log->command_output);

        $details->location = $details->sysLocation;

        $item_start = microtime(true);
        $details->sysUpTime = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.1.3.0');
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->message = 'sysUpTime retrieval for ' . $ip;
        $log->command = 'snmpget 1.3.6.1.2.1.1.3.0';
        $log->command_output = (string)$details->sysUpTime;
        $discoveryLogModel->create($log);
        unset($log->command_time_to_execute, $log->command_output);

        $details->uptime = 0;
        if (!empty($details->sysUpTime)) {
            if (strpos($details->sysUpTime, ')') !== false) {
                $temp = explode('(', $details->sysUpTime);
                $temp2 = explode(')', $temp[1]);
                $details->uptime = intval($temp2[0] / 100);
            } else {
                $details->uptime = is_integer($details->sysUpTime) ? intval($details->sysUpTime / 100) : 0;
            }
        }

        // mac address
        if (empty($details->mac_address)) {
            $item_start = microtime(true);
            $interface_number = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.4.20.1.2.' . $ip);
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Interface number retrieval attempt for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.4.20.1.2.' . $details->ip;
            $log->command_output = (string)$interface_number;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute);

            if (!empty($interface_number)) {
                $item_start = microtime(true);
                snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
                $details->mac_address = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.2.2.1.6.' . $interface_number);
                snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
                $details->mac_address = format_mac($details->mac_address);
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'MAC Address for interface ' . $interface_number . ' using IP ' . $ip . '  retrieval for ' . $ip;
                $log->command = 'snmpget 1.3.6.1.2.1.2.2.1.6.' . $interface_number;
                $log->command_output = (string)$details->mac_address;
                $log->command_status = 'notice';
                $discoveryLogModel->create($log);
                unset($log->id, $log->command, $log->command_time_to_execute);
            }
        }
        // last attempt at a MAC - just use whatever's in the first interface MAC
        if (empty($details->mac_address)) {
            $item_start = microtime(true);
            snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
            $temp = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.2.2.1.6');
            snmp_set_valueretrieval(SNMP_VALUE_PLAIN);

            if (!empty($temp)) {
                foreach ($temp as $key => $value) {
                    $first_key = $key;
                    break;
                }
            }

            if (!empty($first_key)) {
                $interface_number = str_replace('.1.3.6.1.2.1.2.2.1.6.', '', $first_key);
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'Interface number retrieval for ' . $ip;
                $log->command = 'snmpwalk 1.3.6.1.2.1.2.2.1.6';
                $log->command_output = (string)$interface_number;
                $log->command_status = 'notice';
                $discoveryLogModel->create($log);
                unset($log->id, $log->command, $log->command_time_to_execute);

                $details->mac_address = @format_mac($temp[$first_key]);
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'MAC Address retrieval for ' . $ip;
                $log->command = 'snmpwalk 1.3.6.1.2.1.2.2.1.6.' . $interface_number;
                $log->command_output = (string)$details->mac_address;
                $log->command_status = 'notice';
                $discoveryLogModel->create($log);
                unset($log->id, $log->command, $log->command_time_to_execute);
            }
        }

        $item_start = microtime(true);
        $details->sysObjectID = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.1.2.0');
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->message = 'sysObjectID retrieval for ' . $ip;
        $log->command = 'snmpget 1.3.6.1.2.1.1.2.0';
        $log->command_output = (string)$details->sysObjectID;
        $discoveryLogModel->create($log);
        unset($log->command_time_to_execute);

        $details->snmp_oid = (string)$details->sysObjectID;
        $details->snmp_enterprise_id = '';
        if (!empty($details->snmp_oid)) {
            if (substr($details->snmp_oid, 0, 1) === '.') {
                $temp = substr($details->snmp_oid, 1, strlen($details->snmp_oid));
            } else {
                $temp = $details->snmp_oid;
            }
            $temp_array = explode('.', $temp);
            if (!empty($temp_array[6])) {
                $details->snmp_enterprise_id = @intval($temp_array[6]);
            }
        }

        // sometimes we get an OID, but not enough to specify a manufacturer
        if (empty($details->snmp_enterprise_id)) {
            $details->snmp_enterprise_id = 0;
        }

        if (!empty($details->sysDescr) && stripos($details->sysDescr, 'ZyXEL') !== false) {
            $details->snmp_enterprise_id = 890;
        }

        if (!empty($details->sysDescr) && (stripos($details->sysDescr, 'synology') !== false or stripos($details->sysDescr, 'diskstation') !== false)) {
            // Synology
            $details->snmp_enterprise_id = 6574;
        }

        if (!empty($details->mac_address) && stripos($details->mac_address, '00:11:32') === 0) {
            // Synology
            $details->snmp_enterprise_id = 6574;
        }

        $log->message = 'snmp_enterprise_id set for ' . $ip;
        $log->command = 'snmp_enterprise_id';
        $log->command_time_to_execute = 0;
        $log->command_output = $details->snmp_enterprise_id;
        $discoveryLogModel->create($log);
        unset($log->command_time_to_execute, $log->command_output);

        if (file_exists(APPPATH . 'Helpers/snmp_' . $details->snmp_enterprise_id . '_helper.php')) {
            $log->message = 'Loading the snmp helper for ' . $details->snmp_enterprise_id . ' when scanning ' . $ip;
            $discoveryLogModel->create($log);
            unset($get_oid_details);
            include 'snmp_' . $details->snmp_enterprise_id . '_helper.php';
            $log->message = 'Specific details based on sysObjectID retrieval for ' . $ip;
            $log->command_status = 'notice';
            $item_start = microtime(true);
            $new_details = $get_oid_details($ip, $credentials, $details->snmp_oid);
            $log->command_time_to_execute = (microtime(true) - $item_start);
            if (!empty($new_details)) {
                foreach ($new_details as $key => $value) {
                    if (!empty($value)) {
                        $details->$key = $value;
                        $log->command = $key;
                        $log->command_output = $value;
                        $discoveryLogModel->create($log);
                    }
                }
            }
            unset($log->id, $log->command, $log->command_output, $log->command_time_to_execute);
            unset($new_details);
        } else {
            $log->message = 'No snmp helper for ' . $details->snmp_enterprise_id . ' when scanning ' . $ip;
            $discoveryLogModel->create($log);
            $log->severity = 7;
        }

        $rulesModel = new \App\Models\RulesModel();
        $details = $rulesModel->execute($details, $discovery_id, 'return');


        // Cisco Access Points attached to a Wireless Access Controller
        // https://oidref.com/1.3.6.1.4.1.14179.2.2.1.1
        // https://mibs.observium.org/mib/AIRESPACE-WIRELESS-MIB/
        $item_start = microtime(true);
        snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
        $apMac = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.1');
        snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->message = 'Access Point MAC Address retrieval for ' . $ip;
        $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.1';
        $log->command_output = json_encode($apMac);
        $log->command_status = 'notice';
        $discoveryLogModel->create($log);
        unset($log->id, $log->command, $log->command_time_to_execute);

        if (!empty($apMac) and is_array($apMac)) {
            foreach ($apMac as $key => $value) {
                $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.1.', '', $key);
                $access_points[$id] = new \stdClass();
                $access_points[$id]->mac = format_mac($value);
            }

            $item_start = microtime(true);
            snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
            $apEmac = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.33');
            snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point eMAC Address retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.33';
            $log->command_output = json_encode($apEmac);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute);
            if (!empty($apEmac) and is_array($apEmac)) {
                foreach ($apEmac as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.33.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    $access_points[$id]->ethernet_mac = format_mac($value);
                }
            }

            $item_start = microtime(true);
            $apModel = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.16');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point model retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.16';
            $log->command_output = json_encode($apModel);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            if (!empty($apModel) and is_array($apModel)) {
                foreach ($apModel as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.16.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    $access_points[$id]->model = $value;
                }
            }

            $item_start = microtime(true);
            $apSerial = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.17');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point serial retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.17';
            $log->command_output = json_encode($apSerial);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            if (!empty($apSerial) and is_array($apSerial)) {
                foreach ($apSerial as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.17.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    $access_points[$id]->serial = $value;
                }
            }

            $item_start = microtime(true);
            $apIp = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.19');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point IP retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.19';
            $log->command_output = json_encode($apIp);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            if (!empty($apIp) and is_array($apIp)) {
                foreach ($apIp as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.19.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    $access_points[$id]->ip = $value;
                }
            }

            $item_start = microtime(true);
            $apNetMask = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.26');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point netmask retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.26';
            $log->command_output = json_encode($apNetMask);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            if (!empty($apNetMask) and is_array($apNetMask)) {
                foreach ($apNetMask as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.26.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    $access_points[$id]->netmask = $value;
                }
            }

            $item_start = microtime(true);
            $apGateway = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.27');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point gateway retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.27';
            $log->command_output = json_encode($apGateway);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            if (!empty($apGateway) and is_array($apGateway)) {
                foreach ($apGateway as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.27.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    $access_points[$id]->gateway = $value;
                }
            }

            $item_start = microtime(true);
            $apName = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.3');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point name retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.3';
            $log->command_output = json_encode($apName);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            if (!empty($apName) and is_array($apName)) {
                foreach ($apName as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.3.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    $access_points[$id]->name = $value;
                }
            }

            $item_start = microtime(true);
            $apIosVersion = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.31');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point version retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.31';
            $log->command_output = json_encode($apIosVersion);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            if (!empty($apIosVersion) and is_array($apIosVersion)) {
                foreach ($apIosVersion as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.31.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    $access_points[$id]->ios_version = $value;
                }
            }

            $item_start = microtime(true);
            $apLocation = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.4');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point location retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.4';
            $log->command_output = json_encode($apLocation);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            if (!empty($apLocation) and is_array($apLocation)) {
                foreach ($apLocation as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.4.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    $access_points[$id]->location = $value;
                }
            }

            $item_start = microtime(true);
            $apPortNumber = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.13');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point port number retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.13';
            $log->command_output = json_encode($apPortNumber);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            if (!empty($apPortNumber) and is_array($apPortNumber)) {
                foreach ($apPortNumber as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.13.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    $access_points[$id]->port_number = $value;
                }
            }

            $item_start = microtime(true);
            $apStatus = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.6');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point status retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.6';
            $log->command_output = json_encode($apStatus);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            if (!empty($apStatus) and is_array($apStatus)) {
                foreach ($apStatus as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.6.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    switch (intval($value)) {
                        case 1:
                            $value = 'associated';
                            break;

                        case 2:
                            $value = 'disassociating';
                            break;

                        case 3:
                            $value = 'downloading';
                            break;

                        default:
                            $value = 'unknown';
                            break;
                    }
                    $access_points[$id]->status = $value;
                }
            }

            $item_start = microtime(true);
            $apSoftwareVersion = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.8');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point software version retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.8';
            $log->command_output = json_encode($apSoftwareVersion);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            if (!empty($apSoftwareVersion) and is_array($apSoftwareVersion)) {
                foreach ($apSoftwareVersion as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.8.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    $access_points[$id]->software_version = $value;
                }
            }

            $item_start = microtime(true);
            $apType = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.14179.2.2.1.1.22');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Access Point type retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.4.1.14179.2.2.1.1.22';
            $log->command_output = json_encode($apType);
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            if (!empty($apType) and is_array($apType)) {
                foreach ($apType as $key => $value) {
                    $id = str_replace('1.3.6.1.4.1.14179.2.2.1.1.22.', '', $key);
                    if (empty($access_points[$id])) {
                        $access_points[$id] = new \stdClass();
                    }
                    $access_points[$id]->type_numeric = $value;
                    $access_points[$id]->type = ap_type(intval($value));
                }
            }
        }

        // // https://mibs.observium.org/mib/CISCO-LWAPP-AP-MIB
        // // https://oidref.com/1.3.6.1.4.1.9.9.513.1.1.1
        // #snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
        // $apMac = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.9.9.513.1.1.1.1.2');
        // #snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
        // if (!empty($apMac) and is_array($apMac)) {
        //     foreach ($apMac as $key => $value) {
        //         $id = str_replace('1.3.6.1.4.1.9.9.513.1.1.1.1.2.', '', $key);
        //         $access_points[$id] = new \stdClass();
        //         $access_points[$id]->mac = $value;
        //     }
        //     $apName = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.9.9.513.1.1.1.1.5');
        //     if (!empty($apName) and is_array($apName)) {
        //         foreach ($apName as $key => $value) {
        //             $id = str_replace('1.3.6.1.4.1.9.9.513.1.1.1.1.5.', '', $key);
        //             if (empty($access_points[$id])) {
        //                 $access_points[$id] = new \stdClass();
        //             }
        //             $access_points[$id]->name = $value;
        //         }
        //     }
        //     $apLocation = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.9.9.513.1.1.1.1.49');
        //     if (!empty($appLocation) and is_array($appLocation)) {
        //         foreach ($apLocation as $key => $value) {
        //             $id = str_replace('1.3.6.1.4.1.9.9.513.1.1.1.1.49.', '', $key);
        //             if (empty($access_points[$id])) {
        //                 $access_points[$id] = new \stdClass();
        //             }
        //             $access_points[$id]->location = $value;
        //         }
        //     }
        //     $apPort = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.9.9.513.1.1.1.1.39');
        //     if (!empty($apPort) and is_array($apPort)) {
        //         foreach ($apPort as $key => $value) {
        //             $id = str_replace('1.3.6.1.4.1.9.9.513.1.1.1.1.39.', '', $key);
        //             if (empty($access_points[$id])) {
        //                 $access_points[$id] = new \stdClass();
        //             }
        //             $access_points[$id]->port = $value;
        //         }
        //     }
        //     $apFloorLabel = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.9.9.513.1.1.1.1.65');
        //     if (!empty($apFloorLabel) and is_array($apFloorLabel)) {
        //         foreach ($apFloorLabel as $key => $value) {
        //             $id = str_replace('1.3.6.1.4.1.9.9.513.1.1.1.1.65.', '', $key);
        //             if (empty($access_points[$id])) {
        //                 $access_points[$id] = new \stdClass();
        //             }
        //             $access_points[$id]->floor_label = $value;
        //         }
        //     }
        //     $apCountry = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.9.9.513.1.1.3.1.1');
        //     if (!empty($apCountry) and is_array($apCountry)) {
        //         foreach ($apCountry as $key => $value) {
        //             $id = str_replace('1.3.6.1.4.1.9.9.513.1.1.3.1.1.', '', $key);
        //             if (empty($access_points[$id])) {
        //                 $access_points[$id] = new \stdClass();
        //             }
        //             $access_points[$id]->country = $value;
        //         }
        //     }
        //     $apClientCount = my_snmp_real_walk($ip, $credentials, '1.3.6.1.4.1.9.9.513.1.1.1.1.72');
        //     if (!empty($apClientCount) and is_array($apClientCount)) {
        //         foreach ($apClientCount as $key => $value) {
        //             $id = str_replace('1.3.6.1.4.1.9.9.513.1.1.1.1.72.', '', $key);
        //             if (empty($access_points[$id])) {
        //                 $access_points[$id] = new \stdClass();
        //             }
        //             $access_points[$id]->client_count = intval($value);
        //         }
        //     }
        //     log_message('debug', "AP: " . json_encode($access_points));
        // }

        // Ubiquiti specific items to determine manufacturer
        $item_start = microtime(true);
        $temp_services = my_snmp_walk($ip, $credentials, '1.3.6.1.2.1.1.9.1.3');
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->message = 'Services retrieval for ' . $ip;
        $log->command = 'snmpwalk 1.3.6.1.2.1.1.9.1.3';
        $log->command_output = json_encode($temp_services);
        $log->command_status = 'notice';
        $discoveryLogModel->create($log);
        if (!empty($temp_services)) {
            foreach ($temp_services as $line) {
                if (strpos($line, 'Ubiquiti') !== false) {
                    $details->manufacturer = 'Ubiquiti Networks Inc.';
                    $log->command_time_to_execute = 0;
                    $log->message = 'Manufacturer set to Ubiquiti ' . $ip . ', because in services list.';
                    $log->command = 'snmpwalk 1.3.6.1.2.1.1.9.1.3';
                    $log->command_output = (string)$line;
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                    break;
                }
            }
        }
        // guess at manufacturer using entity mib
        if (empty($details->manufacturer)) {
            $item_start = microtime(true);
            $details->manufacturer = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.12.1');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Manufacturer based on Entity MIB retrieval for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.47.1.1.1.1.12.1';
            $log->command_output = (string)$details->manufacturer;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute);
        }
        // guess at model using entity mib
        if (empty($details->model)) {
            $item_start = microtime(true);
            $details->model = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.13');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Model based on Entity MIB retrieval for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.47.1.1.1.1.13';
            $log->command_output = (string)$details->model;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute);
        }
        // guess at model using entity mib #2
        if (empty($details->model)) {
            $item_start = microtime(true);
            $details->model = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.2.1');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Model based on Entity MIB OID retrieval for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.47.1.1.1.1.2.1';
            $log->command_output = (string)$details->model;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute);
        }
        // guess at model using entity mib #3
        if (empty($details->model)) {
            $item_start = microtime(true);
            $details->model = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.13.1');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Model based on Entity MIB retrieval for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.47.1.1.1.1.13.1';
            $log->command_output = (string)$details->model;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute);
        }
        // guess at model using host resources mib
        if (empty($details->model)) {
            $item_start = microtime(true);
            $details->model = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.25.3.2.1.3.1');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Model based on Host Resources MIB retrieval for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.25.3.2.1.3.1';
            $log->command_output = (string)$details->model;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute);
        }
        //  guess at model parsing host resources mib
        if (empty($details->model)) {
            $item_start = microtime(true);
            $temp = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.25.1.4.0');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Model based on Host Resources MIB retrieval for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.25.1.4.0';
            $log->command_output = (string)$temp;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute);

            if (!empty($temp) and stripos($temp, 'board=') !== false) {
                $temp = explode(' ', $temp);
                foreach ($temp as $item) {
                    if (stripos($item, 'board=') !== false) {
                        $details->model = trim(str_replace('board=', '', $item));
                    }
                }
            }
        }

        // serial
        if (empty($details->serial)) {
            $item_start = microtime(true);
            $details->serial = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.11');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Serial based on Entity MIB retrieval for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.47.1.1.1.1.11';
            $log->command_output = (string)$details->serial;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);
        }
        if (empty($details->serial)) {
            $item_start = microtime(true);
            $details->serial = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.11.1');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Serial based on Entity MIB retrieval for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.47.1.1.1.1.11.1';
            $log->command_output = (string)$details->serial;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);
        }
        if (empty($details->serial)) {
            $item_start = microtime(true);
            $details->serial = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.11.1.0');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Serial based on Entity MIB retrieval for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.47.1.1.1.1.11.1.0';
            $log->command_output = (string)$details->serial;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);
        }
        // generic snmp
        if (empty($details->serial)) {
            $item_start = microtime(true);
            $details->serial = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.43.5.1.1.17.1');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Serial retrieval for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.43.5.1.1.17.1';
            $log->command_output = (string)$details->serial;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);
        }
        // below is another generic attempt - works for my NetGear Cable Modem
        if (empty($details->serial)) {
            $item_start = microtime(true);
            $details->serial = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.4491.2.4.1.1.1.3.0');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Serial retrieval for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.4.1.4491.2.4.1.1.1.3.0';
            $log->command_output = (string)$details->serial;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);
        }

        $log->message = 'SNMP audit thinks ' . $ip . ' is of type: ' . $details->type;
        $log->command_output = $details->type;
        $discoveryLogModel->create($log);
        $log->message = 'SNMP audit thinks ' . $ip . ' is a model: ' . $details->model;
        $log->command_output = $details->model;
        $discoveryLogModel->create($log);
        $log->message = 'SNMP audit thinks ' . $ip . ' has a serial: ' . $details->serial;
        $log->command_output = $details->serial;
        $discoveryLogModel->create($log);

        // subnet
        if (empty($details->subnet)) {
            $item_start = microtime(true);
            $details->subnet = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.4.20.1.3.' . $details->ip);
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Subnet retrieval for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.4.20.1.3.' . $details->ip;
            $log->command_output = (string)$details->subnet;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute);
        }

        // type
        if (empty($details->type) or $details->type === 'network printer') {
            $item_start = microtime(true);
            $temp = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.25.3.2.1.2.1');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Determining type for ' . $ip;
            $log->command = 'snmpget 1.3.6.1.2.1.25.3.2.1.2.1';
            $log->command_output = (string)$temp;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute);

            if ($temp === '1.3.6.1.2.1.25.3.1.5') {
                // we have a printer
                $details->type = 'network printer';
                $item_start = microtime(true);
                $temp_walk = my_snmp_walk($ip, $credentials, '1.3.6.1.2.1.43.13.4.1.10.1');
                if (count($temp_walk) > 0) {
                    $details->printer_duplex = 'n';
                    for ($key = 0; $key < count($temp_walk); $key++) {
                        if (mb_strpos($temp_walk[$key], 'Duplex') !== false) {
                            $details->printer_duplex = 'y';
                        }
                    }
                }
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'Printer duplex retrieval for ' . $ip;
                $log->command = 'snmpwalk 1.3.6.1.2.1.43.13.4.1.10.1';
                $log->command_output = json_encode($temp_walk);
                $log->command_status = 'notice';
                $discoveryLogModel->create($log);
                unset($log->id, $log->command, $log->command_time_to_execute);

                if (empty($details->manufacturer)) {
                    $item_start = microtime(true);
                    $hex = my_snmp_walk($ip, $credentials, '1.3.6.1.2.1.43.8.2.1.14.1');
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    $log->message = 'Manufacturer retrieval for ' . $ip;
                    $log->command = 'snmpwalk 1.3.6.1.2.1.43.8.2.1.14.1';
                    $log->command_output = '';
                    if (!empty($hex)) {
                        $log->command_output = @json_encode($hex);
                    }
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                    unset($log->id, $log->command, $log->command_time_to_execute);
                    if (!empty($hex) and is_array($hex) and count($hex) > 0) {
                        if (isset($hex[1])) {
                            if (mb_strpos($hex[1], 'Hex-STRING: ') !== false) {
                                $hex[1] = str_replace('Hex-STRING: ', '', $hex[1]);
                                for ($i = 0; $i < strlen($hex[1]); $i++) {
                                    $details->manufacturer .= chr(hexdec(substr($hex[1], $i, 2)));
                                }
                            } else {
                                $details->manufacturer = str_replace('STRING: ', '', $hex[1]);
                                $details->manufacturer = str_replace('"', '', $details->manufacturer);
                            }
                        }
                    }
                }

                $details->printer_color = 'n';
                $item_start = microtime(true);
                $temp = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.43.11.1.1.6.1.2');
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'Printer colour retrieval for ' . $ip;
                $log->command = 'snmpget 1.3.6.1.2.1.43.11.1.1.6.1.2';
                $log->command_output = (string)$temp;
                $log->command_status = 'notice';
                $discoveryLogModel->create($log);
                unset($log->id, $log->command, $log->command_time_to_execute);
                if (strpos(strtolower($temp), 'cartridge') !== false) {
                    // it's likely this is a colour printer
                    $details->printer_color = 'y';
                }
            } else {
                // If the device is a Switch, the OID 1.3.6.1.2.1.17.1.2.0 is an integer and
                //                                OID 1.3.6.1.2.1.4.1.0    should have a value of 2
                $item_start = microtime(true);
                $temp = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.17.1.2.0');
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'Checking dot1dBaseNumPorts for ' . $ip;
                $log->command = 'snmpget 1.3.6.1.2.1.17.1.2.0';
                $log->command_output = (string)$temp;
                $log->command_status = 'notice';
                $discoveryLogModel->create($log);
                unset($log->id, $log->command, $log->command_time_to_execute);

                $item_start = microtime(true);
                $temp_2 = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.4.1.0');
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'Checking ipRoutingCfgIpMode for ' . $ip;
                $log->command = 'snmpget 1.3.6.1.2.1.4.1.0';
                $log->command_output = (string)$temp_2;
                $log->command_status = 'notice';
                $discoveryLogModel->create($log);
                unset($log->id, $log->command, $log->command_time_to_execute);

                if ((is_numeric($temp)) && (intval($temp_2) === 2)) {
                    $details->type = 'switch';
                    $log->message = 'Device has attributes that match for a switch';
                    $log->command = '';
                    $log->command_status = 'notice';
                    $log->command_output = '';
                    $discoveryLogModel->create($log);
                }

                // If the device is a Router, the OID 1.3.6.1.2.1.4.1.0 should have a value of 1 (already read above)
                if (empty($details->type)) {
                    if ($temp === '1') {
                        $details->type = 'router';
                        $log->message = 'Device has attributes that match for a router';
                        $log->command = '';
                        $log->command_status = 'notice';
                        $log->command_output = '';
                        $discoveryLogModel->create($log);
                    }
                }

                // If the device is a Printer, the OID 1.3.6.1.2.1.43.5.1.1.1.1 should have a value
                $item_start = microtime(true);
                $temp = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.43.5.1.1.1.1');
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'Checking prtGeneral for ' . $ip;
                $log->command = 'snmpget 1.3.6.1.2.1.43.5.1.1.1.1';
                $log->command_output = (string)$temp;
                $log->command_status = 'notice';
                $discoveryLogModel->create($log);
                unset($log->id, $log->command, $log->command_time_to_execute);

                if (!empty($temp) and strpos(strtolower($temp), 'counter32') !== false) {
                    $details->type = 'network printer';
                    // printer duplex
                    $details->printer_duplex = '';
                    $item_start = microtime(true);
                    $temp_2 = my_snmp_walk($ip, $credentials, '1.3.6.1.2.1.43.13.4.1.10.1');
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    $log->message = 'Printer duplex retrieval for ' . $ip;
                    $log->command = 'snmpgwalk 1.3.6.1.2.1.43.13.4.1.10.1';
                    $log->command_output = (string)$temp_2;
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                    unset($log->id, $log->command, $log->command_time_to_execute);

                    if (count($temp_2) > 0) {
                        $details->printer_duplex = 'n';
                        for ($index = 0; $index < count($temp_2); $index++) {
                            if (mb_strpos($temp_2[$index], 'Duplex') !== false) {
                                $details->printer_duplex = 'y';
                            }
                        }
                    }
                    if (empty($details->manufacturer)) {
                        $item_start = microtime(true);
                        $hex = my_snmp_walk($ip, $credentials, '1.3.6.1.2.1.43.8.2.1.14.1');
                        $log->command_time_to_execute = (microtime(true) - $item_start);
                        $log->message = 'Manufacturer retrieval for ' . $ip;
                        $log->command = 'snmpwalk 1.3.6.1.2.1.43.8.2.1.14.1';
                        $log->command_output = (string)$hex;
                        $log->command_status = 'notice';
                        $discoveryLogModel->create($log);
                        unset($log->id, $log->command, $log->command_time_to_execute);

                        if (count($hex) > 0) {
                            if (isset($hex[1])) {
                                if (mb_strpos($hex[1], 'Hex-STRING: ') !== false) {
                                    $hex[1] = str_replace('Hex-STRING: ', '', $hex[1]);
                                    for ($i = 0; $i < strlen($hex[1]); $i++) {
                                        $details->manufacturer .= chr(hexdec(substr($hex[1], $i, 2)));
                                    }
                                } else {
                                    $details->manufacturer = str_replace('STRING: ', '', $hex[1]);
                                    $details->manufacturer = str_replace('"', '', $details->manufacturer);
                                }
                            }
                        }
                    }

                    $details->printer_color = 'n';
                    $item_start = microtime(true);
                    $i = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.43.11.1.1.6.1.2');
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    $log->message = 'Printer colour retrieval for ' . $ip;
                    $log->command = 'snmpget 1.3.6.1.2.1.43.11.1.1.6.1.2';
                    $log->command_output = (string)$i;
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                    unset($log->id, $log->command, $log->command_time_to_execute);

                    if (strpos(strtolower($i), 'cartridge') !== false) {
                        // it's likely this is a colour printer
                        $details->printer_color = 'y';
                    }
                }
            }
        }

        // modules - NOTE, we call these 'entities' in the web interface
        unset($log->command_output);
        $item_start = microtime(true);
        $modules_list = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.2');
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->message = 'Module retrieval for ' . $ip;
        $log->command = 'snmpwalk 1.3.6.1.2.1.47.1.1.1.1.2';
        $count = (!empty($modules_list)) ? count($modules_list) : 0;
        $log->command_output = 'Count is ' . $count;
        $log->command_status = 'notice';
        $discoveryLogModel->create($log);
        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

        if (isset($modules_list) && is_array($modules_list) && count($modules_list) > 0) {
            $item_start = microtime(true);
            $temp_object_id = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.3');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Object_id retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.47.1.1.1.1.3';
            $count = (!empty($temp_object_id)) ? count($temp_object_id) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $temp_contained_in = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.4');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Contained_in retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.47.1.1.1.1.4';
            $count = (!empty($temp_contained_in)) ? count($temp_contained_in) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $temp_class = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.5');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Class retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.47.1.1.1.1.5';
            $count = (!empty($temp_class)) ? count($temp_class) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $temp_hardware_revision = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.8');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Hardware_revision retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.47.1.1.1.1.8';
            $count = (!empty($temp_hardware_revision)) ? count($temp_hardware_revision) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $temp_firmware_revision = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.9');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Firmware_revision retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.47.1.1.1.1.9';
            $count = (!empty($temp_firmware_revision)) ? count($temp_firmware_revision) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $temp_software_revision = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.10');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Software_revision retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.47.1.1.1.1.10';
            $count = (!empty($temp_software_revision)) ? count($temp_software_revision) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $temp_serial_number = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.11');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Serial_number retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.47.1.1.1.1.11';
            $count = (!empty($temp_serial_number)) ? count($temp_serial_number) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $temp_asset_id = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.15');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Asset_id retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.47.1.1.1.1.15';
            $count = (!empty($temp_asset_id)) ? count($temp_asset_id) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $temp_is_fru = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.16');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Is_fru retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.47.1.1.1.1.16';
            $count = (!empty($temp_is_fru)) ? count($temp_is_fru) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            foreach ($modules_list as $key => $value) {
                $module = new \StdClass();
                $module->description = $value;
                $module->module_index = str_replace('.1.3.6.1.2.1.47.1.1.1.1.2.', '', $key);
                $module->object_ident = (!empty($temp_object_id['.1.3.6.1.2.1.47.1.1.1.1.3.' . $module->module_index])) ? $temp_object_id['.1.3.6.1.2.1.47.1.1.1.1.3.' . $module->module_index] : '';
                $module->contained_in = (!empty($temp_contained_in['.1.3.6.1.2.1.47.1.1.1.1.4.' . $module->module_index])) ? $temp_contained_in['.1.3.6.1.2.1.47.1.1.1.1.4.' . $module->module_index] : '';
                $module->class = (!empty($temp_class['.1.3.6.1.2.1.47.1.1.1.1.5.' . $module->module_index])) ? $temp_class['.1.3.6.1.2.1.47.1.1.1.1.5.' . $module->module_index] : '';
                $module->hardware_revision = (!empty($temp_hardware_revision['.1.3.6.1.2.1.47.1.1.1.1.8.' . $module->module_index])) ? $temp_hardware_revision['.1.3.6.1.2.1.47.1.1.1.1.8.' . $module->module_index] : '';
                $module->firmware_revision = (!empty($temp_firmware_revision['.1.3.6.1.2.1.47.1.1.1.1.9.' . $module->module_index])) ? $temp_firmware_revision['.1.3.6.1.2.1.47.1.1.1.1.9.' . $module->module_index] : '';
                $module->software_revision = (!empty($temp_software_revision['.1.3.6.1.2.1.47.1.1.1.1.10.' . $module->module_index])) ? $temp_software_revision['.1.3.6.1.2.1.47.1.1.1.1.10.' . $module->module_index] : '';
                $module->serial = (!empty($temp_serial_number['.1.3.6.1.2.1.47.1.1.1.1.11.' . $module->module_index])) ? $temp_serial_number['.1.3.6.1.2.1.47.1.1.1.1.11.' . $module->module_index] : '';
                $module->asset_ident = (!empty($temp_asset_id['.1.3.6.1.2.1.47.1.1.1.1.15.' . $module->module_index])) ? $temp_asset_id['.1.3.6.1.2.1.47.1.1.1.1.15.' . $module->module_index] : '';
                $module->is_fru = (!empty($temp_is_fru['.1.3.6.1.2.1.47.1.1.1.1.16.' . $module->module_index])) ? $temp_is_fru['.1.3.6.1.2.1.47.1.1.1.1.16.' . $module->module_index] : '';

                if ((string)$module->is_fru === '1') {
                    $module->is_fru = 'y';
                } else {
                    $module->is_fru = 'n';
                }
                $module->class = intval($module->class);
                $module->class_text = 'unknown';
                if ($module->class === 1) {
                    $module->class_text = 'other';
                }
                if ($module->class === 2) {
                    $module->class_text = 'unknown';
                }
                if ($module->class === 3) {
                    $module->class_text = 'chassis';
                }
                if ($module->class === 4) {
                    $module->class_text = 'backplane';
                }
                if ($module->class === 5) {
                    $module->class_text = 'container';
                }
                if ($module->class === 6) {
                    $module->class_text = 'powerSupply';
                }
                if ($module->class === 7) {
                    $module->class_text = 'fan';
                }
                if ($module->class === 8) {
                    $module->class_text = 'sensor';
                }
                if ($module->class === 9) {
                    $module->class_text = 'module';
                }
                if ($module->class === 10) {
                    $module->class_text = 'port';
                }
                if ($module->class === 11) {
                    $module->class_text = 'stack';
                }
                if ($module->class === 12) {
                    $module->class_text = 'cpu';
                }

                $modules[] = $module;
            }
        }
        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

        // network interface details
        $interfaces = array();
        $interfaces_filtered = array();
        $item_start = microtime(true);
        $interfaces = my_snmp_walk($ip, $credentials, '1.3.6.1.2.1.2.2.1.1');
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->message = 'Interfaces retrieval for ' . $ip;
        $log->command = 'snmpwalk 1.3.6.1.2.1.2.2.1.1';
        $count = (!empty($interfaces)) ? count($interfaces) : 0;
        $log->command_output = 'Count is ' . $count;
        $log->command_status = 'notice';
        $discoveryLogModel->create($log);
        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

        if (is_array($interfaces) && count($interfaces) > 0) {
            $item_start = microtime(true);
            $models = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.2.2.1.2');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Models retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.2.2.1.2';
            $count = (!empty($models)) ? count($models) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $types = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.2.2.1.3');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Types retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.2.2.1.3';
            $count = (!empty($types)) ? count($types) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $speeds = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.2.2.1.5');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Speeds retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.2.2.1.5';
            $count = (!empty($speeds)) ? count($speeds) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            if (!empty($speeds) and is_array($speeds)) {
                // Check if we have any speeds greater than a 32bit int.
                $temp = false;
                foreach ($speeds as $key => $value) {
                    if ((string)$value === '4294967295') {
                        $temp = true;
                    }
                }
                if ($temp) {
                    $item_start = microtime(true);
                    $high_speeds = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.31.1.1.1.15');
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    $log->message = 'HighSpeeds retrieval for ' . $ip;
                    $log->command = 'snmpwalk 1.3.6.1.2.1.31.1.1.1.15';
                    $count = (!empty($high_speeds)) ? count($high_speeds) : 0;
                    $log->command_output = 'Count is ' . $count;
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                    unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);
                    foreach ($speeds as $key => $value) {
                        if ((string)$value === '4294967295') {
                            $temp_array = explode('.', $key);
                            $temp_id = end($temp_array);
                            if (!empty($high_speeds['.1.3.6.1.2.1.31.1.1.1.15.' . $temp_id]) and intval($high_speeds['.1.3.6.1.2.1.31.1.1.1.15.' . $temp_id]) > 0) {
                                $speeds[$key] = intval($high_speeds['.1.3.6.1.2.1.31.1.1.1.15.' . $temp_id]) * 1000000;
                            }
                            if (!empty($high_speeds['1.3.6.1.2.1.31.1.1.1.15.' . $temp_id]) and intval($high_speeds['1.3.6.1.2.1.31.1.1.1.15.' . $temp_id]) > 0) {
                                $speeds[$key] = intval($high_speeds['1.3.6.1.2.1.31.1.1.1.15.' . $temp_id]) * 1000000;
                            }
                        }
                    }
                }
            }

            $item_start = microtime(true);
            $mac_addresses = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.2.2.1.6');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Mac_addresses retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.2.2.1.6';
            $count = (!empty($mac_addresses)) ? count($mac_addresses) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $ip_enableds = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.2.2.1.8');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Ip_enableds retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.2.2.1.8';
            $count = (!empty($ip_enableds)) ? count($ip_enableds) : 0;
            $log->command_output = 'Count is ' . $count;
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $ip_addresses = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.4.20.1.2');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Ip_addresses retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.4.20.1.2';
            $temp = (!empty($ip_addresses)) ? count($ip_addresses) : 0;
            $log->command_output = "Count is $temp";
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $ifAdminStatus = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.2.2.1.7');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'IfAdminStatus retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.2.2.1.7';
            $temp = (!empty($ifAdminStatus)) ? count($ifAdminStatus) : 0;
            $log->command_output = "Count is $temp";
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $ifLastChange = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.2.2.1.9');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'IfLastChange retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.2.2.1.9';
            $temp = (!empty($ifLastChange)) ? count($ifLastChange) : 0;
            $log->command_output = "Count is $temp";
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            if (isset($details->os_group) && $details->os_group === 'VMware') {
                $item_start = microtime(true);
                $ip_addresses_2 = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.4.34.1.3.1.4');
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'Ip_addresses_2 retrieval for ' . $ip;
                $log->command = 'snmpwalk 1.3.6.1.2.1.4.34.1.3.1.4';
                $temp = (!empty($ip_addresses_2)) ? count($ip_addresses_2) : 0;
                $log->command_output = "Count is $temp";
                $log->command_status = 'notice';
                $discoveryLogModel->create($log);
                unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);
            }

            $item_start = microtime(true);
            $subnets = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.4.20.1.3');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Subnets retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.4.20.1.3';
            $temp = (!empty($subnets)) ? count($subnets) : 0;
            $log->command_output = "Count is $temp";
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $connection_ids = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.31.1.1.1.1');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Connection_ids retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.31.1.1.1.1';
            $temp = (!empty($connection_ids)) ? count($connection_ids) : 0;
            $log->command_output = "Count is $temp";
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            $item_start = microtime(true);
            $aliases = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.31.1.1.1.18');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Aliases retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.31.1.1.1.18';
            $temp = (!empty($aliases)) ? count($aliases) : 0;
            $log->command_output = "Count is $temp";
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

            foreach ($interfaces as $key => $value) {
                $interface = new \StdClass();
                $interface->net_index = $value;

                snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
                $temp = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.2.2.1.6.' . $interface->net_index);
                $interface->mac = '';
                if (!empty($temp)) {
                    $interface->mac = format_mac($temp);
                }
                snmp_set_valueretrieval(SNMP_VALUE_PLAIN);

                if (! isset($interface->mac)) {
                    $interface->mac = (string)'';
                }

                $interface->model = @$models['.1.3.6.1.2.1.2.2.1.2.' . $interface->net_index];
                $interface->description = $interface->model;
                $interface->connection = @$connection_ids['.1.3.6.1.2.1.31.1.1.1.1.' . $interface->net_index];
                $interface->alias = @$aliases['.1.3.6.1.2.1.31.1.1.1.18.' . $interface->net_index];
                $interface->type = @interface_type(@$types['.1.3.6.1.2.1.2.2.1.3.' . $interface->net_index]);
                $interface->ip_enabled = @ip_enabled($ip_enableds['.1.3.6.1.2.1.2.2.1.8.' . $interface->net_index]);
                $interface->ifadminstatus = @if_admin_status($ifAdminStatus['.1.3.6.1.2.1.2.2.1.7.' . $interface->net_index]);
                $interface->iflastchange = @$ifLastChange['.1.3.6.1.2.1.2.2.1.9.' . $interface->net_index];
                $interface->speed = @$speeds['.1.3.6.1.2.1.2.2.1.5.' . $interface->net_index];
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
                if (is_array($ip_addresses) && ! empty($ip_addresses)) {
                    foreach ($ip_addresses as $each_key => $each_value) {
                        if ($each_value === $interface->net_index) {
                            $new_ip = new \StdClass();
                            $new_ip->net_index = $interface->net_index;
                            $new_ip->interface = @$interface->connection;
                            $new_ip->ip = str_replace('.1.3.6.1.2.1.4.20.1.2.', '', $each_key);
                            $new_ip->mac = $interface->mac;
                            $new_ip->netmask = @$subnets['.1.3.6.1.2.1.4.20.1.3.' . $new_ip->ip];
                            $new_ip->version = '4';
                            if ($new_ip->ip !== '127.0.0.1' && $new_ip->ip !== '127.0.1.1') {
                                $return_ips->item[] = $new_ip;
                            }
                            $new_ip = null;
                        }
                    }
                }
                if (isset($ip_addresses_2) && is_array($ip_addresses_2) && isset($details->os_group) && $details->os_group === 'VMware') {
                    // likely we have a VMware ESX box - get what we can
                    foreach ($ip_addresses_2 as $each_key => $each_value) {
                        $new_ip = new \StdClass();
                        $new_ip->net_index = $each_value;
                        $new_ip->ip = str_replace('.1.3.6.1.2.1.4.34.1.3.1.4.', '', $each_key);
                        $new_ip->netmask = '';
                        $new_ip->version = '4';
                        if ($new_ip->net_index === $interface->net_index) {
                            $new_ip->mac = $interface->mac;
                            if ($new_ip->ip !== '127.0.0.1' && $new_ip->ip !== '127.0.1.1') {
                                $return_ips->item[] = $new_ip;
                            }
                        }
                        $new_ip = null;
                    }
                }
                if (isset($details->os_group) && $details->os_group === 'Windows') {
                    if (isset($interface->ip_addresses) && count($interface->ip_addresses) > 0) {
                        if (strpos(strtolower($interface->type), 'loopback') === false) {
                            $interfaces_filtered[] = $interface;
                        }
                    }
                } else {
                    $interfaces_filtered[] = $interface;
                    // Could exclude the loopback here if required. Do NOT exclude as at 2.2.6
                    // if (strtolower($interface->type != 'software loopback')) {
                    //     $interfaces_filtered[] = $interface;
                    // }
                }
            }
        } // end of network interfaces

        $test = false;
        if (is_array($return_ips->item)) {
            foreach ($return_ips->item as $return_ip) {
                if ($return_ip->mac === $details->mac_address) {
                    $test = true;
                }
            }
        }
        if (!$test and ! empty($interface_number)) {
            // We have a MAC address, but nothing in the return_ips->item array, add it
            $new_ip = new \StdClass();
            // Standrd location for subnet
            $temp = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.4.20.1.3.' . $details->ip);
            if (empty($temp)) {
                // We 'might' have a subnet here, try it
                $temp = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.2281.10.2.4.20.1.3.0');
            }
            $new_ip->net_index = $interface_number;
            $new_ip->ip = $details->ip;
            $new_ip->netmask = @$temp;
            $new_ip->version = '4';
            $new_ip->mac = $details->mac_address;
            foreach ($interfaces_filtered as $interface) {
                if ($interface->net_index === $interface_number) {
                    $new_ip->interface = @$interface->connection;
                }
            }
            $return_ips->item[] = $new_ip;
            $new_ip = null;
        }

        // COMPLETE SNMP walk for testing performance.
        // $item_start = microtime(true);
        // $table = my_snmp_real_walk($ip, $credentials, '1');
        // $log->command_time_to_execute = (microtime(true) - $item_start);
        // $log->message = 'Large SNMP retrieval for ' . $ip;
        // $log->command = 'snmpwalk 1';
        // $log->command_output = 'Count is ' . @count($table) . ', time is ' . $log->command_time_to_execute;
        // if (count($table) ===1) {
        //     $log->command_output .= ' ' . json_encode($table);
        // }
        // $log->command_status = 'notice';
        // $discoveryLogModel->create($log);
        // unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

        $retrieve_routes = 0;
        $config_value = 20;
        if (!empty($instance->config->discovery_route_retrieve_limit)) {
            $config_value = $instance->config->discovery_route_retrieve_limit;
        }

        $item_start = microtime(true);
        $route_count = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.4.24.6.0');
        $route_count = intval($route_count);
        $log->command_time_to_execute = (microtime(true) - $item_start);
        $log->message = 'Route count retrieval for ' . $ip;
        $log->command = 'snmpwalk 1.3.6.1.2.1.4.24.6.0';
        $temp = (!empty($route_count)) ? intval($route_count) : 0;
        $log->command_output = "Count is $temp";
        $log->command_status = 'notice';
        if (!empty($route_count) && $route_count < $config_value) {
            $retrieve_routes = 1;
            $log->command_output .= ", which is less than config of {$config_value} - retrieving route table.";
        } else {
            if (!empty($route_count)) {
                $log->command_output .= ", which is more than config of {$config_value} - not retrieving route table.";
                $retrieve_routes = 2;
            } else {
                $log->command_output = 'Could not retrieve route count from 1.3.6.1.2.1.4.24.6.0.';
            }
        }
        $discoveryLogModel->create($log);
        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

        if ($retrieve_routes === 0) {
            $item_start = microtime(true);
            $route_count = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.4.24.3.0');
            $route_count = intval($route_count);
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Route count retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.4.24.3.0';
            $log->command_output = "Count is $route_count";
            $log->command_status = 'notice';
            if (!empty($route_count) && $route_count < $config_value) {
                $retrieve_routes = 1;
                $log->command_output .= ", which is less than config of {$config_value} - retrieving route table.";
            } else {
                if (!empty($route_count)) {
                    $log->command_output .= ", which is more than config of {$config_value} - not retrieving route table.";
                    $retrieve_routes = 2;
                } else {
                    $log->command_output = 'Could not retrieve route count from 1.3.6.1.2.1.4.24.3.0.';
                }
            }
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);
        }

        if ($retrieve_routes === 1) {
            // Route table
            // NOTE - we use ipRouteTable not ipForwardTable, ipCidrRouteTable or inetCidrRouteTable.
            // 1.3.6.1.2.1.4.21     - ipRouteTable
            // 1.3.6.1.2.1.4.24.2   - ipForwardTable
            // 1.3.6.1.2.1.4.24.4   - ipCidrRouteTable
            // 1.3.6.1.2.1.4.24.7   - inetCidrRouteTable
            // We could add in the above if required.
            $item_start = microtime(true);
            $table = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.4.21.1.1');
            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Route retrieval for ' . $ip;
            $log->command = 'snmpwalk 1.3.6.1.2.1.4.21.1.1';
            $temp = (!empty($table)) ? count($table) : 0;
            $log->command_output = "Count is $temp";
            $log->command_status = 'notice';
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);
            $my_ips = array();
            $log->command_output = '';
            if (is_array($table)) {
                foreach ($table as $key => $value) {
                    $my_ips[] = $value;
                }
                $log->command_output .= ' ' . json_encode($my_ips);
            }
            $table = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.4.21');
            foreach ($my_ips as $route_ip) {
                $route = new \StdClass();
                $route->destination = $route_ip;
                foreach ($table as $key => $value) {
                    if ($key === '.1.3.6.1.2.1.4.21.1.3.' . $route_ip) {
                        $route->metric = $value;
                    }
                    if ($key === '.1.3.6.1.2.1.4.21.1.7.' . $route_ip) {
                        $route->next_hop = $value;
                    }
                    if ($key === '.1.3.6.1.2.1.4.21.1.8.' . $route_ip) {
                        if (intval($value) === 1) {
                            $value = 'other';
                        }
                        if (intval($value) === 2) {
                            $value = 'invalid';
                        }
                        if (intval($value) === 3) {
                            $value = 'direct';
                        }
                        if (intval($value) === 4) {
                            $value = 'indirect';
                        }
                        $route->type = $value;
                    }
                    if ($key === '.1.3.6.1.2.1.4.21.1.9.' . $route_ip) {
                        if (intval($value) === 1) {
                            $value = 'other';
                        }
                        if (intval($value) === 2) {
                            $value = 'local';
                        }
                        if (intval($value) === 3) {
                            $value = 'netmgmt';
                        }
                        if (intval($value) === 4) {
                            $value = 'icmp';
                        }
                        if (intval($value) === 5) {
                            $value = 'egp';
                        }
                        if (intval($value) === 6) {
                            $value = 'ggp';
                        }
                        if (intval($value) === 7) {
                            $value = 'hello';
                        }
                        if (intval($value) === 8) {
                            $value = 'rip';
                        }
                        if (intval($value) === 9) {
                            $value = 'is-is';
                        }
                        if (intval($value) === 10) {
                            $value = 'es-is';
                        }
                        if (intval($value) === 11) {
                            $value = 'ciscoIgrp';
                        }
                        if (intval($value) === 12) {
                            $value = 'bbnSpfIgp';
                        }
                        if (intval($value) === 13) {
                            $value = 'ospf';
                        }
                        if (intval($value) === 14) {
                            $value = 'bgp';
                        }
                        $route->protocol = $value;
                    }
                    if ($key === '.1.3.6.1.2.1.4.21.1.11.' . $route_ip) {
                        $route->mask = $value;
                    }
                }
                $routes[] = $route;
            }
        }

        // Special for ExaBlaze
        if (! isset($modules_list) or ! is_array($modules_list) or count($modules_list) === 0) {
            if (intval($details->snmp_enterprise_id) === 43296) {
                $interfaces_filtered = @$get_modules($ip, $credentials, $log, $log->discovery_id, $details->id);
                unset($log->id, $log->command, $log->command_time_to_execute);
            }
        }

        // Check and set the default IP/MAC/Subnet
        if (!empty($details->mac_address) && ! empty($details->ip) && empty($return_ips->item)) {
            $new_ip = new \StdClass();
            $new_ip->net_index = 0;
            $new_ip->ip = $details->ip;
            $new_ip->mac = $details->mac_address;
            $new_ip->netmask = '255.55.255.0';
            if (!empty($details->netmask)) {
                $new_ip->netmask = $details->netmask;
            }
            $new_ip->version = '4';
            if ($new_ip->ip !== '127.0.0.1' && $new_ip->ip !== '127.0.1.1') {
                $return_ips->item[] = $new_ip;
            }
            $new_ip = null;
        }


        // Virtual Guests
        if (intval($details->snmp_enterprise_id) === 6876) {
            if (file_exists(APPPATH . 'Helpers/snmp_6876_2_helper.php')) {
                $log->severity = 7;
                $log->message = 'snmp_helper::snmp_audit is loading the model helper for VMware virtual guests';
                $discoveryLogModel->create($log);
                include 'snmp_6876_2_helper.php';
            }
        }

        // Radio's
        if (is_array($interfaces_filtered) && count($interfaces_filtered) > 0 && ($details->snmp_enterprise_id === 2281 or $details->snmp_enterprise_id === 17713)) {
            foreach ($interfaces_filtered as $interface) {
                // radio = Cambium
                // wlan = LEDE / OpenWRT
                // vwire = ubiquiti
                if (strtolower($interface->model) === 'radio' or stripos($interface->model, 'wlan') !== false or stripos($interface->model, 'vwire') !== false) {
                    // RX Level
                    $item_start = microtime(true);
                    $radio_rx_level = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.2281.10.5.1.1.2.' . $interface->net_index);
                    $log->command_time_to_execute = (microtime(true) - $item_start);
                    $log->message = 'Radio RX Level retrieval for interface ' . $interface->net_index . ' for ' . $ip;
                    $log->command = 'snmpwalk 1.3.6.1.4.1.2281.10.5.1.1.2.' . $interface->net_index;

                    $log->command_output = 'Failed (likely not supported)';
                    if (!empty($radio_rx_level)) {
                        $log->command_output = $radio_rx_level;
                    }
                    $log->command_status = 'notice';
                    $discoveryLogModel->create($log);
                    unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

                    // If we have RX Level's present, walk the details
                    if (!empty($radio_rx_level)) {
                        $radio = new \StdClass();
                        $radio->name = $interface->net_index;
                        $radio->net_index = $interface->net_index;
                        $radio->rx_level = $radio_rx_level;

                        // RX Profile
                        $item_start = microtime(true);
                        $radio->rx_profile = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.2281.10.7.4.1.1.9.' . $interface->net_index);
                        $log->command_time_to_execute = (microtime(true) - $item_start);
                        $log->message = 'Radio RX Profile retrieval for ' . $ip;
                        $log->command = 'snmpwalk 1.3.6.1.4.1.2281.10.7.4.1.1.9.' . $interface->net_index;
                        $log->command_output = $radio->rx_profile;
                        $log->command_status = 'notice';
                        $discoveryLogModel->create($log);
                        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

                        // RX Frequency
                        $item_start = microtime(true);
                        $radio->rx_freq = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.2281.10.5.2.1.4.' . $interface->net_index);
                        $log->command_time_to_execute = (microtime(true) - $item_start);
                        $log->message = 'Radio RX Frequency retrieval for ' . $ip;
                        $log->command = 'snmpwalk 1.3.6.1.4.1.2281.10.5.2.1.4.' . $interface->net_index;
                        $log->command_output = $radio->rx_freq;
                        $log->command_status = 'notice';
                        $discoveryLogModel->create($log);
                        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

                        // RX Power
                        $item_start = microtime(true);
                        $radio->rx_power = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.2281.10.5.1.1.34.' . $interface->net_index);
                        $log->command_time_to_execute = (microtime(true) - $item_start);
                        $log->message = 'Radio RX Power retrieval for ' . $ip;
                        $log->command = 'snmpwalk 1.3.6.1.4.1.2281.10.5.1.1.34.' . $interface->net_index;
                        $log->command_output = $radio->rx_power;
                        $log->command_status = 'notice';
                        $discoveryLogModel->create($log);
                        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

                        // RX Bitrate
                        $item_start = microtime(true);
                        $radio->rx_bitrate = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.2281.10.7.4.1.1.11.' . $interface->net_index);
                        $log->command_time_to_execute = (microtime(true) - $item_start);
                        $log->message = 'Radio RX Bitrate retrieval for ' . $ip;
                        $log->command = 'snmpwalk 1.3.6.1.4.1.2281.10.7.4.1.1.11.' . $interface->net_index;
                        $log->command_output = $radio->rx_bitrate;
                        $log->command_status = 'notice';
                        $discoveryLogModel->create($log);
                        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

                        // TX Level
                        $item_start = microtime(true);
                        $radio->tx_level = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.2281.10.5.1.1.3.' . $interface->net_index);
                        $log->command_time_to_execute = (microtime(true) - $item_start);
                        $log->message = 'Radio TX Level retrieval for ' . $ip;
                        $log->command = 'snmpwalk 1.3.6.1.4.1.2281.10.5.1.1.3.' . $interface->net_index;
                        $log->command_output = $radio->tx_level;
                        $log->command_status = 'notice';
                        $discoveryLogModel->create($log);
                        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

                        // TX Profile
                        $item_start = microtime(true);
                        $radio->tx_profile = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.2281.10.7.4.1.1.5.' . $interface->net_index);
                        $log->command_time_to_execute = (microtime(true) - $item_start);
                        $log->message = 'Radio TX Profile retrieval for ' . $ip;
                        $log->command = 'snmpwalk 1.3.6.1.4.1.2281.10.7.4.1.1.5.' . $interface->net_index;
                        $log->command_output = $radio->tx_profile;
                        $log->command_status = 'notice';
                        $discoveryLogModel->create($log);
                        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

                        // TX Frequency
                        $item_start = microtime(true);
                        $radio->tx_freq = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.2281.10.5.2.1.3.' . $interface->net_index);
                        $log->command_time_to_execute = (microtime(true) - $item_start);
                        $log->message = 'Radio TX Frequency retrieval for ' . $ip;
                        $log->command = 'snmpwalk 1.3.6.1.4.1.2281.10.5.2.1.3.' . $interface->net_index;
                        $log->command_output = $radio->rx_freq;
                        $log->command_status = 'notice';
                        $discoveryLogModel->create($log);
                        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

                        // TX Power
                        $item_start = microtime(true);
                        $radio->tx_power = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.2281.10.5.2.1.2.' . $interface->net_index);
                        $log->command_time_to_execute = (microtime(true) - $item_start);
                        $log->message = 'Radio TX Power retrieval for ' . $ip;
                        $log->command = 'snmpwalk 1.3.6.1.4.1.2281.10.5.2.1.2.' . $interface->net_index;
                        $log->command_output = $radio->rx_power;
                        $log->command_status = 'notice';
                        $discoveryLogModel->create($log);
                        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

                        // TX Bitrate
                        $item_start = microtime(true);
                        $radio->tx_bitrate = my_snmp_get($ip, $credentials, '1.3.6.1.4.1.2281.10.7.4.1.1.7.' . $interface->net_index);
                        $log->command_time_to_execute = (microtime(true) - $item_start);
                        $log->message = 'Radio TX Bitrate retrieval for ' . $ip;
                        $log->command = 'snmpwalk 1.3.6.1.4.1.2281.10.7.4.1.1.7.' . $interface->net_index;
                        $log->command_output = $radio->rx_bitrate;
                        $log->command_status = 'notice';
                        $discoveryLogModel->create($log);
                        unset($log->id, $log->command, $log->command_time_to_execute, $log->command_output);

                        $radios[] = $radio;
                    }
                }
            }
        }

        // Linked IPs in the ARP table, etc
        $ips_found = array();

        if ($type === 'seed') {
            // ipNetToMediaPhysAddress
            $item_start = microtime(true);
            snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
            $temp = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.4.22.1.2');
            snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
            if (!empty($temp)) {
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'Seed. Detecting IPs at ipNetToMediaPhysAddress for ' . $ip;
                $log->command = 'snmpwalk 1.3.6.1.2.1.4.22.1.2';
                $log->command_output = 'Count: ' . count($temp);
                $log->command_status = 'notice';
                if (!empty($temp)) {
                    foreach ($temp as $key => $value) {
                        if (!empty($value)) {
                            // the IP
                            $explode = explode('.', $key);
                            $found_ip = implode('.', array_splice($explode, -4));
                            // the MAC
                            $explode = explode(' ', $value);
                            if (substr_count($value, ' ') > 1) {
                                unset($explode[0]);
                                $found_mac = trim(implode(':', $explode));
                            } else {
                                $found_mac = $explode[1];
                            }
                            // pad the MAC
                            $explode = explode(':', $found_mac);
                            foreach ($explode as &$explode_mac) {
                                $explode_mac = substr('00' . $explode_mac, -2);
                            }
                            $found_mac = implode(':', $explode);
                            $ips_found[$found_mac] = $found_ip;
                        }
                    }
                }
                $log->command_output = json_encode($temp);
                $discoveryLogModel->create($log);
                unset($log->id, $log->command, $log->command_time_to_execute);
            }
        }

        if ($type === 'seed') {
            // ipNetToPhysicalPhysAddress
            $item_start = microtime(true);
            snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
            $temp = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.4.35.1.4.3.1.4');
            snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
            if (!empty($temp)) {
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'Seed. Detecting IPs at ipNetToPhysicalPhysAddress for ' . $ip;
                $log->command = 'snmpwalk 1.3.6.1.2.1.4.35.1.4.3.1.4';
                $log->command_output = 'Count: ' . count($temp);
                $log->command_status = 'notice';
                if (!empty($temp)) {
                    foreach ($temp as $key => $value) {
                        if (!empty($value)) {
                            // the IP
                            $explode = explode('.', $key);
                            $found_ip = implode('.', array_splice($explode, -4));
                            // the MAC
                            $explode = explode(' ', $value);
                            if (substr_count($value, ' ') > 1) {
                                unset($explode[0]);
                                $found_mac = trim(implode(':', $explode));
                            } else {
                                $found_mac = $explode[1];
                            }
                            // pad the MAC
                            $explode = explode(':', $found_mac);
                            foreach ($explode as &$explode_mac) {
                                $explode_mac = substr('00' . $explode_mac, -2);
                            }
                            $found_mac = implode(':', $explode);
                            $ips_found[$found_mac] = $found_ip;
                        }
                    }
                }
                $log->command_output = json_encode($temp);
                $discoveryLogModel->create($log);
                unset($log->id, $log->command, $log->command_time_to_execute);
            }
        }


        if ($type === 'seed') {
            // atPhysAddress
            $item_start = microtime(true);
            snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
            $temp = my_snmp_real_walk($ip, $credentials, '1.3.6.1.2.1.3.1.1.2');
            snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
            if (!empty($temp)) {
                $log->command_time_to_execute = (microtime(true) - $item_start);
                $log->message = 'Seed. Detecting IPs at atPhysAddress for ' . $ip;
                $log->command = 'snmpwalk 1.3.6.1.2.1.3.1.1.2';
                $log->command_output = 'Count: ' . count($temp);
                $log->command_status = 'notice';
                foreach ($temp as $key => $value) {
                    if (!empty($value)) {
                        // the IP
                        $explode = explode('.', $key);
                        $found_ip = implode('.', array_splice($explode, -4));
                        // the MAC
                        $explode = explode(' ', $value);
                        if (substr_count($value, ' ') > 1) {
                            unset($explode[0]);
                            $found_mac = trim(implode(':', $explode));
                        } else {
                            $found_mac = $explode[1];
                        }
                        // pad the MAC
                        $explode = explode(':', $found_mac);
                        foreach ($explode as &$explode_mac) {
                            $explode_mac = substr('00' . $explode_mac, -2);
                        }
                        $found_mac = implode(':', $explode);
                        $ips_found[$found_mac] = $found_ip;
                    }
                }
                $log->command_output = json_encode($temp);
                $discoveryLogModel->create($log);
                unset($log->id, $log->command, $log->command_time_to_execute);
            }
        }


        if ($type === 'seed') {
            $temp = array();
            if (!empty($routes) && ! empty($ips_found)) {
                foreach ($routes as $route) {
                    if ($route->next_hop === '0.0.0.0' or empty($route->next_hop)) {
                        break;
                    }
                    $add = true;
                    foreach ($ips_found as $key => $value) {
                        if ($value === $route->next_hop) {
                            $add = false;
                        }
                    }
                    if ($add === true) {
                        $ips_found[] = $route->next_hop;
                        $temp[] = $route->next_hop;
                    }
                }
            }

            $log->command_time_to_execute = (microtime(true) - $item_start);
            $log->message = 'Seed. Detecting IPs from routes.';
            $log->command = 'snmpwalk 1.3.6.1.2.1.4.21.1.1';
            $log->command_status = 'notice';
            $log->command_output = json_encode($temp);
            $discoveryLogModel->create($log);
            unset($temp, $log->id, $log->command, $log->command_time_to_execute);

            // Lower case all MAC addresses
            $ips_found = array_change_key_case($ips_found, CASE_LOWER);
            // Only need one unique IP
            $ips_found = array_unique($ips_found);

            $log->command_time_to_execute = '';
            $log->message = 'Seed. All IPs detected using SNMP.';
            $log->command = 'Combined SNMP for ipNetToMediaPhysAddress, ipNetToPhysicalPhysAddress, atPhysAddress and ipRouteDest.';
            $log->command_status = 'notice';
            $log->command_output = json_encode($ips_found);
            $discoveryLogModel->create($log);
            unset($log->id, $log->command, $log->command_time_to_execute);
        }


        unset($log);
        $return_array = array('details' => $details, 'interfaces' => $interfaces_filtered, 'guests' => $guests, 'modules' => $modules, 'ip' => $return_ips, 'routes' => $routes, 'radio' => $radios, 'ips_found' => $ips_found, 'access_points' => $access_points);
        return($return_array);
    }
}

if (!function_exists('format_mac')) {
    /**
     * [format_mac description]
     * @param  [type] $mac_address [description]
     * @return [type]              [description]
     */
    function format_mac($mac_address)
    {
        if (empty($mac_address) or !is_string($mac_address)) {
            log_message('debug', 'No string supplied to format_mac, returning blank.');
            return '';
        }
        // set to lower case
        $mac_address = strtolower($mac_address);
        // remove any quotes
        $mac_address = str_replace('"', ' ', $mac_address);
        $mac_address = str_replace("'", ' ', $mac_address);
        // some strings are returned as 'hex-string'
        if (strrpos($mac_address, 'hex-string') !== false) {
            $mac_address = str_replace('hex-string:', '', $mac_address);
        }
        // some strings are returned as 'string'
        if (strrpos($mac_address, 'string') !== false) {
            $mac_address = str_replace('string:', '', $mac_address);
        }
        // trim any unrequired beginning or ending spaces
        $mac_address = trim((string)$mac_address);
        // check for a string thus "ab cd ef"
        if (substr_count($mac_address, ' ') > 0) {
            $mac_address = str_replace(' ', ':', $mac_address);
        }
        // check for a substring thus "abcdef"
        if (substr_count($mac_address, ' ') === 0 && substr_count($mac_address, ':') === 0 && strlen($mac_address) === 12) {
            $mac_address = substr($mac_address, 0, 2) . ':' . substr($mac_address, 2, 2) . ':' .
                           substr($mac_address, 4, 2) . ':' . substr($mac_address, 6, 2) . ':' .
                           substr($mac_address, 8, 2) . ':' . substr($mac_address, 10, 2);
        }
        if (substr_count($mac_address, ':') !== 0) {
            // split the string by :
            $mymac = explode(':', $mac_address);
            // for each section, make sure it's padded with a 0.
            for ($i = 0; $i < count($mymac); $i++) {
                $mymac[$i] = mb_substr('00' . $mymac[$i], -2);
            }
            // join it back together
            $mac_address = implode(':', $mymac);
        }
        if (substr_count($mac_address, ':') !== 0) {
            return($mac_address);
        } else {
            return '';
        }
        return($mac_address);
    }
}

if (!function_exists('ip_enabled')) {
    /**
     * [ip_enabled description]
     * @param  [type] $ip_enabled [description]
     * @return [type]             [description]
     */
    function ip_enabled($ip_enabled)
    {
        if (empty($ip_enabled)) {
            return 'up';
        }
        switch ($ip_enabled) {
            case '1':
                $ip_enabled = 'up';
                break;

            case '2':
                $ip_enabled = 'down';
                break;

            case '3':
                $ip_enabled = 'testing';
                break;

            case '4':
                $ip_enabled = 'unknown';
                break;

            case '5':
                $ip_enabled = 'dormant';
                break;

            case '6':
                $ip_enabled = 'notpresent';
                break;

            case '7':
                $ip_enabled = 'lowerlayerdown';
                break;

            default:
                $ip_enabled = 'up';
                break;
        }

        return $ip_enabled;
    }
}

if (!function_exists('if_admin_status')) {
    /**
     * [if_admin_status description]
     * @param  [type] $ifadminstatus [description]
     * @return [type]                [description]
     */
    function if_admin_status($ifadminstatus)
    {
        if (empty($ifadminstatus)) {
            return 'up';
        }
        switch ($ifadminstatus) {
            case '1':
                $ifadminstatus = 'up';
                break;

            case '2':
                $ifadminstatus = 'down';
                break;

            case '3':
                $ifadminstatus = 'testing';
                break;

            default:
                $ifadminstatus = 'up';
                break;
        }

        return $ifadminstatus;
    }
}


if (!function_exists('ap_type')) {
    /**
     * [interface_type description]
     * @param  [type] $int_type [description]
     * @return [type]           [description]
     */
    function ap_type($ap_type)
    {
        if (intval($ap_type) != $ap_type) {
            log_message('info', 'Invalid variable passed to snmp_helper::ap_type. Type:' . gettype($ap_type) . ' Value:' . $ap_type);
            return 'unknown';
        }

        switch ($ap_type) {
            case '1':
                $value = 'ap1000';
                break;

            case '2':
                $value = 'ap1030';
                break;

            case '3':
                $value = 'mimo';
                break;

            case '4':
                $value = 'unknown';
                break;

            case '5':
                $value = 'ap1100';
                break;

            case '6':
                $value = 'ap1130';
                break;

            case '7':
                $value = 'ap1240';
                break;

            case '8':
                $value = 'ap1200';
                break;

            case '9':
                $value = 'ap1310';
                break;

            case '10':
                $value = 'ap1500';
                break;

            case '11':
                $value = 'ap1250';
                break;

            case '12':
                $value = 'ap1505';
                break;

            case '13':
                $value = 'ap3201';
                break;

            case '14':
                $value = 'ap1520';
                break;

            case '15':
                $value = 'ap800';
                break;

            case '16':
                $value = 'ap1140';
                break;

            case '17':
                $value = 'ap800agn';
                break;

            case '18':
                $value = 'ap3500i';
                break;

            case '19':
                $value = 'ap3500e';
                break;

            case '20':
                $value = 'ap1260';
                break;

            case '21':
                $value = 'ap1040';
                break;

            case '22':
                $value = 'ap1550';
                break;

            case '23':
                $value = 'ap602i';
                break;

            case '24':
                $value = 'ap3500p';
                break;

            case '25':
                $value = 'ap802gn';
                break;

            case '26':
                $value = 'ap802agn';
                break;

            case '27':
                $value = 'ap3600i';
                break;

            case '28':
                $value = 'ap3600e';
                break;

            case '29':
                $value = 'ap2600i';
                break;

            case '30':
                $value = 'ap2600e';
                break;

            case '31':
                $value = 'ap802hagn';
                break;

            case '32':
                $value = 'ap1600i';
                break;

            case '33':
                $value = 'ap1600e';
                break;

            case '34':
                $value = 'ap702e';
                break;

            case '35':
                $value = 'ap702i';
                break;

            case '36':
                $value = 'ap3600p';
                break;

            case '37':
                $value = 'ap1530i';
                break;

            case '38':
                $value = 'ap1530e';
                break;

            case '39':
                $value = 'ap3700e';
                break;

            case '40':
                $value = 'ap3700i';
                break;

            case '41':
                $value = 'ap3700p';
                break;

            case '42':
                $value = 'ap2700e';
                break;

            case '43':
                $value = 'ap2700i';
                break;

            case '44':
                $value = 'ap702w';
                break;

            case '45':
                $value = 'wap2600i';
                break;

            case '46':
                $value = 'wap2600e';
                break;

            case '47':
                $value = 'wap1600i';
                break;

            case '48':
                $value = 'wap1600e';
                break;

            case '49':
                $value = 'wap702i';
                break;

            case '50':
                $value = 'wap702e';
                break;

            case '51':
                $value = 'ap1700i';
                break;

            case '52':
                $value = 'ap1700e';
                break;

            case '53':
                $value = 'ap1570e';
                break;

            case '54':
                $value = 'ap1570i';
                break;

            case '55':
                $value = 'ap1852e';
                break;

            case '56':
                $value = 'ap1852i';
                break;

            case '57':
                $value = 'ap1832i';
                break;

            case '58':
                $value = 'ap752t';
                break;

            case '59':
                $value = 'apmr24';
                break;

            case '60':
                $value = 'ap3702';
                break;

            case '61':
                $value = 'ap1802i';
                break;

            case '62':
                $value = 'ap1810w';
                break;

            case '63':
                $value = 'apoeap1810';
                break;

            case '64':
                $value = 'ap3802e';
                break;

            case '65':
                $value = 'ap3802i';
                break;

            case '66':
                $value = 'ap3802p';
                break;

            case '67':
                $value = 'ap3802q';
                break;

            case '68':
                $value = 'ap2802e';
                break;

            case '69':
                $value = 'ap2802i';
                break;

            case '70':
                $value = 'ap2802q';
                break;

            case '71':
                $value = 'ap1815w';
                break;

            case '72':
                $value = 'apoeap1815';
                break;

            case '73':
                $value = 'ap1815I';
                break;

            case '74':
                $value = 'ap1562e';
                break;

            case '75':
                $value = 'ap1562i';
                break;

            case '76':
                $value = 'ap1562d';
                break;

            case '77':
                $value = 'ap1562ps';
                break;

            case '78':
                $value = 'ap1800I';
                break;

            case '79':
                $value = 'ap1800S';
                break;

            case '80':
                $value = 'ap1815M';
                break;

            case '81':
                $value = 'ap1542D';
                break;

            case '82':
                $value = 'ap1542I';
                break;

            case '83':
                $value = 'ap1100ac';
                break;

            case '84':
                $value = 'ap1101ac';
                break;

            case '85':
                $value = 'ap1582e';
                break;

            case '86':
                $value = 'ap1582i';
                break;

            case '87':
                $value = 'ap1542E2';
                break;

            case '88':
                $value = 'ap1542E4';
                break;

            case '89':
                $value = 'ap9117I';
                break;

            case '90':
                $value = 'ap9115AXI';
                break;

            case '91':
                $value = 'ap9115AXE';
                break;

            case '92':
                $value = 'ap1840I';
                break;

            case '93':
                $value = 'ap9120AXI';
                break;

            case '94':
                $value = 'ap9120AXE';
                break;

            case '95':
                $value = 'ap9120AXP';
                break;

            case '97':
                $value = 'iw6300HD';
                break;

            case '98':
                $value = 'iw6300HA';
                break;

            case '99':
                $value = 'iw6300HW';
                break;

            case '100':
                $value = 'esw6300';
                break;

            case '101':
                $value = 'ap9130AXI';
                break;

            case '102':
                $value = 'ap9130AXE';
                break;

            case '110':
                $value = 'pwifiac2';
                break;

            case '115':
                $value = 'ap9136I';
                break;

            case '116':
                $value = 'wpwifi6';
                break;

            case '129':
                $value = 'isr1101ax';
                break;

            case '130':
                $value = 'cw9162I';
                break;

            case '131':
                $value = 'cw9164I';
                break;

            case '132':
                $value = 'cw9166I';
                break;

            case '133':
                $value = 'iw9167eh';
                break;

            case '134':
                $value = 'cw9166D1';
                break;

            case '135':
                $value = 'iw9165DH';
                break;

            case '136':
                $value = 'iw9167ih';
                break;

            case '137':
                $value = 'cw9163E';
                break;

            case '138':
                $value = 'cw9178I';
                break;

            case '139':
                $value = 'iw9165E';
                break;

            case '140':
                $value = 'cw9176I';
                break;

            case '141':
                $value = 'cw9176D';
                break;

            default:
                $value = 'unknown';
                break;
        }
        return $value;
    }
}




if (!function_exists('interface_type')) {
    /**
     * [interface_type description]
     * @param  [type] $int_type [description]
     * @return [type]           [description]
     */
    function interface_type($int_type)
    {
        if (empty($int_type)) {
            return '';
        }
        $temp = (string) intval($int_type);
        if ($int_type !== $temp) {
            $int_type = substr($int_type, strpos($int_type, '(') + 1);
            $int_type = substr($int_type, 0, strpos($int_type, ')'));
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
                $int_type = 'unknown';
                break;
        }
        return $int_type;
    }
}
// End of file snmp_helper.php
// Location: ./helpers/snmp_helper.php
