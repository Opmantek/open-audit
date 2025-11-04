<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

use phpseclib3\Net\SSH2;

/**
 * Talk to the target over SSH, execute audit commands and return output
 *
 * @param string  $ip            The target device's IP
 * @param int     $discovery_id  The ID of the discovery executing this
 * @param array   $credentials   The working SSH credentials for this device
 * @return object    
 */
function ssh_procurve_audit(string $ip, int $discovery_id, array $credentials): object
{
    if (empty($ip) or empty($discovery_id) or empty($credentials)) {
        log_message('warning', 'ssh_procurve_audit called with missing parameter');
    }
    $removals = array('uptime:');
    $ssh_port = 22;
    $discoveryLogModel = model('DiscoveryLogModel');
    $log = new \stdClass();
    $log->discovery_id = $discovery_id;
    $log->file = 'ssh_procurve_helper';
    $log->function = 'ssh_procurve_audit';
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
    $ssh->read();
    $ssh->write('show running config' . "\n");
    sleep(10);
    $command_result = $ssh->read();
    if (!empty($command_result)) {
        log_message('debug', 'Parsing \'show running config\' for ProCurve.');
    }
    $explode = explode("\n", $command_result);
    unset($explode[0]);
    unset($explode[1]);
    unset($explode[count($explode)]);
    $command_result = implode("\n", array_values($explode));
    if (!empty($command_result)) {
        $cli = new stdClass();
        $cli->config = $command_result;
        $cli->name = 'running-config';
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
    $ssh->write('show system-information' . "\n");
    sleep(10);
    $command_result = $ssh->read();
    if (!empty($command_result)) {
        log_message('debug', 'Parsing \'show system-information\' for ProCurve.');
    }
    $explode = explode("\n", $command_result);
    unset($explode[0]);
    unset($explode[1]);
    unset($explode[count($explode)]);
    $command_result = implode("\n", array_values($explode));
    if (!empty($command_result)) {
        $cli = new stdClass();
        $cli->config = $command_result;
        $cli->name = 'system-information';
        $cli->hash = hash('sha256', $cli->config);
        $device->cli_config[] = $cli;
    }
    unset($cli);
    $ssh->disconnect();
    unset($ssh);

    return $device;
}
