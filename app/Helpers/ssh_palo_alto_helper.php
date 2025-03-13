<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

use phpseclib3\Net\SSH2;

/**
 * Wrap crypto_aead_*_decrypt() in a drop-dead-simple decryption interface
 *
 * @param string $message Encrypted message
 * @param string $key     Encryption key
 * @return string         The decrypted string
 */
function ssh_palo_alto_audit(string $ip = '', int $discovery_id = 0, array $credentials = null): object
{

    $ssh_port = 22;
    $discoveryLogModel = model('DiscoveryLogModel');
    $log = new \stdClass();
    $log->discovery_id = $discovery_id;
    $log->file = 'ssh_palo_alto_helper';
    $log->function = 'ssh_palo_alto_audit';
    $log->ip = $ip;

    $device = new \stdClass();
    $device->ip = $ip;
    $device->cli_config = array();

    $ssh = ssh_connect($ip, $credentials, $discovery_id, 22, 10);
    if (is_null($ssh)) {
        return $device;
    }
    if (!empty($GLOBALS[$discovery_id . '_' . $ip])) {
        $device->credentials = array(intval($GLOBALS[$discovery_id . '_' . $ip]));
        unset($GLOBALS[$discovery_id . '_' . $ip]);
    }
    $command_result = '';
    $ssh->enablePTY();
    $ssh->setTimeout(20);
    $ssh->write('set cli pager off' . "\n");
    sleep(10);
    $ssh->write('show system info' . "\n");
    sleep(10);
    $command_result = $ssh->read();
    // $ssh->write('set cli pager on' . "\n");

    $command_result = iconv("UTF-8", "ISO-8859-1", $command_result);
    $command_result = explode("\n", $command_result);

    $ssh->disconnect();
    unset($ssh);

    if (!empty($command_result)) {
        log_message('debug', 'Parsing \'show system info\' for Palo Alto.');
    }
    foreach ($command_result as $line) {
        if (stripos($line, 'hostname') === 0) {
            $device->hostname = trim(str_replace('hostname:', '', $line));
        }
        if (stripos($line, 'ip-address') === 0) {
            $device->ip = trim(str_replace('ip-address:', '', $line));
        }
        if (stripos($line, 'mac-address') === 0) {
            $device->mac_address = trim(str_replace('mac-address:', '', $line));
        }
        if (stripos($line, 'model') === 0) {
            $device->model = trim(str_replace('model:', '', $line));
        }
        if (stripos($line, 'serial') === 0) {
            $device->serial = trim(str_replace('serial:', '', $line));
        }
        if (stripos($line, 'vm-uuid') === 0) {
            $device->uuid = trim(str_replace('vm-uuid:', '', $line));
        }
        if (stripos($line, 'vm-cpu-count') === 0) {
            $device->processor_count = intval(trim(str_replace('vm-cpu-count:', '', $line)));
        }
        if (stripos($line, 'vm-memory') === 0) {
            $device->memory_count = trim(str_replace('vm-memory:', '', $line));
        }
    }

    $cli = new stdClass();
    $cli->config = new stdClass();
    foreach ($command_result as $line) {
        if (strpos($line, ':') !== false and stripos($line, 'last login') === false and stripos($line, 'last successful login') === false) {
            $explode = explode(':', $line);
            if (!empty($explode[0] and !empty($explode[1]))) {
                $cli->config->{trim($explode[0])} = trim($explode[1]);
            }
        }
    }
    if (!empty($cli->config)) {
        $cli->config = json_encode($cli->config);
        $cli->name = 'system info';
        $cli->hash = hash('sha256', $cli->config);
        $device->cli_config[] = $cli;
    }
    unset($cli);


    $ssh = ssh_connect($ip, $credentials, $discovery_id, 22, 10);
    if (is_null($ssh)) {
        return $device;
    }
    $command_result = '';
    $ssh->enablePTY();
    $ssh->setTimeout(20);
    $ssh->write('set cli pager off' . "\n");
    sleep(5);
    $ssh->write('configure' . "\n");
    sleep(5);
    $ssh->read();
    $ssh->write('show deviceconfig' . "\n");
    sleep(5);
    $command_result = $ssh->read();
    if (!empty($command_result)) {
        log_message('debug', 'Parsing \'show deviceconfig\' for Palo Alto.');
    }
    if (is_string($command_result)) {
        $command_result = iconv("UTF-8", "ISO-8859-1", $command_result);
        $command_result = str_replace('[edit]', '', $command_result);
        $command_result = substr($command_result, strpos($command_result, "\n"));
        $command_result = substr($command_result, 0, strrpos($command_result, "\n"));
        $cli = new stdClass();
        $cli->name = 'deviceconfig';
        $cli->hash = hash('sha256', $command_result);
        $cli->config = $command_result;
        $device->cli_config[] = $cli;
    }
    $ssh->disconnect();
    unset($ssh);

    $ssh = ssh_connect($ip, $credentials, $discovery_id, 22, 10);
    if (is_null($ssh)) {
        return $device;
    }
    $command_result = '';
    $ssh->enablePTY();
    $ssh->setTimeout(20);
    $ssh->write('set cli pager off' . "\n");
    sleep(5);
    $ssh->write('request license info' . "\n");
    sleep(5);
    $command_result = $ssh->read();
    if (!empty($command_result)) {
        log_message('debug', 'Parsing \'request license info\' for Palo Alto.');
    }
    if (is_string($command_result)) {
        $command_result = iconv("UTF-8", "ISO-8859-1", $command_result);
        $command_result = explode("\n", $command_result);
        $cli = new stdClass();
        $cli->config = array();
        foreach ($command_result as $line) {
            if (strpos($line, ':') !== false and stripos($line, 'last login') === false and stripos($line, 'last successful login') === false) {
                if (stripos($line, 'license entry:') === 0) {
                    if (!empty($license)) {
                        $cli->config[] = $license;
                        unset($license);
                    }
                    $license = new stdClass();
                    continue;
                }
                $explode = explode(':', $line);
                if (!empty($explode[0] and !empty($explode[1]))) {
                    $license->{trim($explode[0])} = trim($explode[1]);
                }
            }
        }
        if (!empty($cli->config)) {
            $cli->config = json_encode($cli->config);
            $cli->name = 'license info';
            $cli->hash = hash('sha256', $cli->config);
            $device->cli_config[] = $cli;
        }
        unset($cli);
    }
    $ssh->disconnect();
    unset($ssh);

    return $device;
}
