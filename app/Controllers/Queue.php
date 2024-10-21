<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.6.0
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Queue
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Queue
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Queue extends BaseController
{
    public function start()
    {
        $pid = getmypid();
        $this->db = db_connect();

        #$auditlogModel = new \App\Models\AuditLogModel();
        $integrationsModel = new \App\Models\IntegrationsModel();

        $this->benchmarksModel = new \App\Models\BenchmarksModel();
        $this->componentsModel = new \App\Models\ComponentsModel();
        $this->credentialsModel = new \App\Models\CredentialsModel();
        $this->devicesModel = new \App\Models\DevicesModel();
        $this->discoveriesModel = new \App\Models\DiscoveriesModel();
        $this->discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $this->integrationsModel = new \App\Models\IntegrationsModel();
        $this->locationsModel = new \App\Models\LocationsModel();
        $this->networksModel = new \App\Models\NetworksModel();
        $this->orgsModel = new \App\Models\OrgsModel();
        $this->queueModel = new \App\Models\QueueModel();
        $this->rulesModel = new \App\Models\RulesModel();
        $this->scriptsModel = new \App\Models\ScriptsModel();

        helper('components');
        helper('device');
        helper('discoveries');
        helper('integrations_nmis');
        helper('mac_model');
        helper('network');
        helper('security');
        helper('ssh');
        helper('utility');
        helper('wmi');

        $debug = false;
        $microtime = microtime(true);
        log_message('debug', "$microtime Starting queue with pid $pid at microtime $microtime");

        // queue count is the number of registered processes
        // queue limit is set by the user
        // check it config['queue_count'] > config['queue_limit']
        log_message('debug', "$microtime Initial Queue Count: " . $this->config->queue_count . " Initial Queue Limit: " . $this->config->queue_limit);

        if (intval($this->config->queue_count) >= intval($this->config->queue_limit)) {
            log_message('debug', "$microtime QueueCount: " . $this->config->queue_count . " Limit: " . $this->config->queue_limit . " EXITING.");
            exit;
        }
        // Increase the queue count in the config table
        $sql = "UPDATE `configuration` SET `value` = `value` + 1 WHERE `name` = 'queue_count'";
        $this->db->query($sql);
        log_message('debug', $microtime . " " . $sql);

        // POP an item off the queue
        while (true) {
            log_message('debug', $microtime . " Sleeping for 2 seconds.");
            sleep(2);
            log_message('debug', $microtime . " Done sleeping.");

            $item = $this->queueModel->pop();
            log_message('debug', $microtime . " POPed item " . json_encode($item));

            if (!empty($item->details) && is_string($item->details)) {
                try {
                    $details = json_decode($item->details, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                    exit(1);
                }
                log_message('debug', $microtime . " POPed item details " . json_encode($details));
            }

            // If we don't get an item, there's nothing left to do so exit.
            if ($item === false) {
                // Remove the queue count
                $sql = "UPDATE `configuration` SET `value` = '0' WHERE `name` = 'queue_count'";
                $this->db->query($sql);
                log_message('debug', $microtime . " " . $sql . ' EXITING - EMPTY QUEUE');
                break;
            }
            if ($details === false) {
                // Remove the queue count
                $sql = "UPDATE `configuration` SET `value` = '0' WHERE `name` = 'queue_count'";
                $this->db->query($sql);
                log_message('debug', $microtime . " " . $sql . ' EXITING - BAD DETAILS');
                break;
            }

            // Spawn another process
            $sql = "SELECT name, value FROM configuration WHERE name IN ('queue_limit', 'queue_count') ORDER BY `name`";
            $result = $this->db->query($sql)->getResult();
            if ($result[0]->value < $result[1]->value) {
                if (php_uname('s') === 'Windows NT') {
                    $command = "%comspec% /c start /b c:\\xampp\\php\\php.exe " . FCPATH . "index.php queue start";
                    @exec($command, $output);
                    log_message('debug', $microtime . " Spawning process " . $command . " " . json_encode($output));
                    pclose(popen($command, 'r'));
                } elseif (php_uname('s') === 'Darwin') {
                    $command = 'php ' . FCPATH . 'index.php queue start > /dev/null 2>&1 &';
                    @exec($command, $output);
                    log_message('debug', $microtime . " Spawning process " . $command . " " . json_encode($output));
                } else {
                    $command = 'nohup php ' . FCPATH . 'index.php queue start > /dev/null 2>&1 &';
                    @exec($command, $output);
                    log_message('debug', $microtime . " Spawning process " . $command . " " . json_encode($output));
                }
            }

            if ($item->type === 'subnet') {
                log_message('debug', $microtime . " " . "Discovering subnet as per type.");
                discover_subnet($details);
            }

            if ($item->type === 'seed') {
                log_message('debug', $microtime . " " . "Discovering seed as per type.");
                discover_subnet($details);
            }

            #if ($item->type === 'active directory') {
            #    log_message('debug', $microtime . " " . "Scanning AD as per type.");
            #    discover_ad($details);
            #}

            if ($item->type === 'ip_scan') {
                log_message('debug', $microtime . " " . "Scanning IP " . $details->ip . " as per type.");
                $result = ip_scan($details);

                if (empty($result)) {
                    $log = new \stdClass();
                    $log->discovery_id = intval($details->discovery_id);
                    $log->command = 'Peak Memory';
                    $log->command_output = round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB';
                    $log->command_status = 'device complete';
                    $log->command_time_to_execute = microtime(true)  - $microtime;
                    $log->message = 'IP Scan finish on device ' . ip_address_from_db($details->ip);
                    $log->ip = ip_address_from_db($details->ip);
                    $log->function = 'start';
                    $log->file = 'queue';
                    $this->discoveryLogModel->create($log);
                }

                if (!empty($result)) {
                    $result['ip'] = $details->ip;
                    $result['discovery_id'] = $details->discovery_id;
                    log_message('debug', $microtime . " " . "Creating queue item for ip_audit for " . $details->ip);
                    $queue_item = new \stdClass();
                    $queue_item->details = json_encode($result);
                    $queue_item->type = 'ip_audit';
                    $this->queueModel->create($queue_item);
                }
                log_message('debug', $microtime . " " . "Scanning IP " . $details->ip . " as per type COMPLETED.");
                discovery_check_finished(intval($details->discovery_id));
            }

            if ($item->type === 'ip_audit') {
                log_message('debug', $microtime . " " . "Auditing IP " . $details->ip . " as per type.");
                $result = ip_audit($details);
                log_message('debug', $microtime . " " . "Auditing IP " . $details->ip . " as per type COMPLETED.");
            }

            if ($item->type === 'integrations') {
                $integrationsModel->execute($details->integrations_id);
            }

            if ($item->type === 'benchmarks') {
                if (!empty($details->device_id)) {
                    log_message('debug', $microtime . " " . "Executing Device Benchmark.");
                    $this->benchmarksModel->execute(intval($details->id), intval($details->device_id));
                } else {
                    log_message('debug', $microtime . " " . "Executing Benchmark.");
                    $this->benchmarksModel->queue(intval($details->id));
                }
            }
        }
    }
}
