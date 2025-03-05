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
function ssh_cisco_audit(string $ip = '', int $discovery_id = 0, array $credentials = null): object
{
    $ssh_port = 22;
    $discoveryLogModel = model('DiscoveryLogModel');
    $log = new \stdClass();
    $log->discovery_id = $discovery_id;
    $log->file = 'ssh_cisco_helper';
    $log->function = 'ssh_cisco_audit';
    $log->ip = $ip;

    $device = new \stdClass();
    $device->ip = $ip;
    $device->cli_config = array();

    $ssh = ssh_connect($ip, $credentials, $discovery_id, 22, 10);
    if (is_null($ssh)) {
        return $device;
    }
    $command_result = '';
    $ssh->enablePTY();
    $ssh->setTimeout(20);
    $ssh->write('terminal length 0' . "\n");
    sleep(5);
    $ssh->write('show version' . "\n");
    sleep(5);
    $command_result = $ssh->read();
    log_message('debug', $command_result);
    if (!empty($command_result)) {
        $cli = new stdClass();
        $cli->config = $command_result;
        $cli->name = 'version';
        $cli->hash = hash('sha256', $cli->config);
        $device->cli_config[] = $cli;
        log_message('debug', json_encode($cli));
    }
    unset($cli);
    $ssh->disconnect();
    unset($ssh);


    $ssh = ssh_connect($ip, $credentials, $discovery_id, 22, 10);
    if (is_null($ssh)) {
        return $device;
    }
    $command_result = '';
    $ssh->enablePTY();
    $ssh->setTimeout(20);
    $ssh->write('terminal length 0' . "\n");
    sleep(5);
    $ssh->write('show running-config' . "\n");
    sleep(5);
    $command_result = $ssh->read();
    log_message('debug', $command_result);
    if (!empty($command_result)) {
        $cli = new stdClass();
        $cli->config = $command_result;
        $cli->name = 'running-config';
        $cli->hash = hash('sha256', $cli->config);
        $device->cli_config[] = $cli;
        log_message('debug', json_encode($cli));
    }
    unset($cli);
    $ssh->disconnect();
    unset($ssh);

    return $device;
}
