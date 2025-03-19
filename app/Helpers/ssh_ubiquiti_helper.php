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
function ssh_ubiquiti_audit(string $ip = '', int $discovery_id = 0, array $credentials = null): object
{
    $removals = array('uptime:');
    $ssh_port = 22;
    $discoveryLogModel = model('DiscoveryLogModel');
    $log = new \stdClass();
    $log->discovery_id = $discovery_id;
    $log->file = 'ssh_ubiquiti_helper';
    $log->function = 'ssh_ubiquiti_audit';
    $log->ip = $ip;

    $device = new \stdClass();
    $device->ip = $ip;
    $device->cli_config = array();

    $ssh = ssh_connect($ip, $credentials, $discovery_id, 22, 10);
    if (empty($ssh) or is_null($ssh) or $ssh === false ) {
        return $device;
    }
    if (!empty($GLOBALS[$discovery_id . '_' . $ip])) {
        $device->credentials = array(intval($GLOBALS[$discovery_id . '_' . $ip]));
        unset($GLOBALS[$discovery_id . '_' . $ip]);
    }
    $command_result = '';
    $ssh->enablePTY();
    $ssh->setTimeout(10);
    $ssh->read();
    $ssh->write('info' . "\n");
    sleep(5);
    $command_result = $ssh->read();
    if (!empty($command_result)) {
        log_message('debug', 'Parsing \'info\' for Ubiquiti.');
    }
    $explode = explode("\n", $command_result);
    unset($explode[0]);
    unset($explode[1]);
    unset($explode[count($explode)]);
    $count = count($explode);
    for ($i = 0; $i < $count; $i++) {
        if (isset($explode[$i])) {
            foreach ($removals as $removal) {
                if (stripos($explode[$i], $removal) !== false) {
                    unset($explode[$i]);
                }
            }
        }
    }
    $command_result = implode("\n", array_values($explode));
    if (!empty($command_result)) {
        $cli = new stdClass();
        $cli->config = $command_result;
        $cli->name = 'info';
        $cli->hash = hash('sha256', $cli->config);
        $device->cli_config[] = $cli;
    }
    unset($cli);
    $ssh->disconnect();
    unset($ssh);


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
    $ssh->read();
    $ssh->write('show configuration all 2>/dev/null | cat' . "\n");
    sleep(10);
    $command_result = $ssh->read();
    if (!empty($command_result)) {
        log_message('debug', 'Parsing \'show configuration all\' for Ubiquiti.');
    }
    $explode = explode("\n", $command_result);
    unset($explode[0]);
    unset($explode[1]);
    unset($explode[count($explode)]);
    $command_result = implode("\n", array_values($explode));
    if (!empty($command_result)) {
        $cli = new stdClass();
        $cli->config = $command_result;
        $cli->name = 'configuration';
        $cli->hash = hash('sha256', $cli->config);
        $device->cli_config[] = $cli;
    }
    unset($cli);
    $ssh->disconnect();
    unset($ssh);


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
    $ssh->setTimeout(10);
    $ssh->read();
    $ssh->write('cat /proc/ubnthal/system.info 2>/dev/null' . "\n");
    sleep(5);
    $command_result = $ssh->read();
    if (!empty($command_result)) {
        log_message('debug', 'Parsing \'cat system.info\' for Ubiquiti.');
    }
    $explode = explode("\n", $command_result);
    unset($explode[0]);
    unset($explode[1]);
    unset($explode[count($explode)]);
    $command_result = implode("\n", array_values($explode));
    if (!empty($command_result)) {
        $cli = new stdClass();
        $cli->config = $command_result;
        $cli->name = 'system.info';
        $cli->hash = hash('sha256', $cli->config);
        $device->cli_config[] = $cli;
    }
    unset($cli);
    $ssh->disconnect();
    unset($ssh);

    return $device;
}
