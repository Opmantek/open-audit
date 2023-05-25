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
 * @version   GIT: Open-AudIT_5.0.0
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

        $auditlogModel = new \App\Models\AuditLogModel();
        $integrationsModel = new \App\Models\IntegrationsModel();

        $this->load->model('m_credentials');
        $this->load->model('m_device');
        $this->load->model('m_devices');
        $this->load->model('m_devices_components');
        $this->load->model('m_discoveries');
        $this->load->model('m_integrations');
        $this->load->model('m_networks');
        $this->load->model('m_orgs');
        $this->load->model('m_queue');
        $this->load->model('m_rules');
        $this->load->model('m_scripts');

        $this->load->helper('audit');
        $this->load->helper('discoveries');
        $this->load->helper('mac');
        $this->load->helper('mac_model');
        $this->load->helper('network');
        $this->load->helper('security');
        $this->load->helper('snmp');
        $this->load->helper('snmp_model');
        $this->load->helper('snmp_oid');
        $this->load->helper('ssh');
        $this->load->helper('wmi');

        $this->m_configuration->load();

        $debug = false;
        $microtime = microtime(true);
        if ($debug) {
            log_message('debug', "$microtime Starting queue with pid $pid at microtime $microtime");
        }

        // queue count is the number of registered processes
        // queue limit is set by the user
        // check it config['queue_count'] > config['queue_limit']
        if ($debug) {
            log_message('debug', "$microtime Initial Queue Count: " . $this->config->queue_count . " Initial Queue Limit: " . $this->config->queue_limit);
        }

        if (intval($this->config->queue_count) >= intval($this->config->queue_limit)) {
            if ($debug) {
                log_message('debug', "$microtime QueueCount: " . $this->config->queue_count . " Limit: " . $this->config->queue_limit . " EXITING.");
            }
            exit;
        }
        // Increase the queue count in the config table
        $sql = "UPDATE `configuration` SET `value` = `value` + 1 WHERE `name` = 'queue_count'";
        $this->db->query($sql);
        if ($debug) {
            log_message('debug', $microtime . " " . $sql);
        }
        // POP an item off the queue
        $this->load->model('m_queue');
        while (true) {
            if ($debug) {
                log_message('debug', $microtime . " Sleeping for 2 seconds.");
            }
            sleep(2);
            if ($debug) {
                log_message('debug', $microtime . " Done sleeping.");
            }
            $item = $queueModel->pop();
            if ($debug) {
                log_message('debug', $microtime . " POPed item " . json_encode($item));
            }
            if (!empty($item->details) && is_string($item->details)) {
                $details = @json_decode($item->details);
                if ($debug) {
                    log_message('debug', $microtime . " POPed item details " . json_encode($details));
                }
            }

            // If we don't get an item, there's nothing left to do so exit.
            if ($item === false) {
                // Remove the queue count
                $sql = "UPDATE `configuration` SET `value` = '0' WHERE `name` = 'queue_count'";
                $this->db->query($sql);
                if ($debug) {
                    log_message('debug', $microtime . " " . $sql . ' EXITING - EMPTY QUEUE');
                }
                break;
            }
            if ($details === false) {
                // Remove the queue count
                $sql = "UPDATE `configuration` SET `value` = '0' WHERE `name` = 'queue_count'";
                $this->db->query($sql);
                if ($debug) {
                    log_message('debug', $microtime . " " . $sql . ' EXITING - BAD DETAILS');
                }
                break;
            }

            // Spawn another process
            if (php_uname('s') !== 'Windows NT') {
                $command = 'nohup php ' . $this->config->base_path . '/www/open-audit/index.php util queue > /dev/null 2>&1 &';
                if ($debug) {
                    log_message('debug', $microtime . " SPAWNING PROCESS " . $command . " " . json_encode($output));
                }
                @exec($command);
            } else {
                $command = "%comspec% /c start /b c:\\xampp\\php\\php.exe c:\\xampp\\htdocs\\open-audit\\index.php util queue";
                if ($debug) {
                    log_message('debug', $microtime . " SPAWNING PROCESS " . $command . " " . json_encode($output));
                }
                pclose(popen($command, 'r'));
            }

            if ($item->type === 'subnet') {
                if ($debug) {
                    log_message('debug', $microtime . " " . "Discovering subnet as per type.");
                }
                discover_subnet($details);
            }

            if ($item->type === 'seed') {
                if ($debug) {
                    log_message('debug', $microtime . " " . "Discovering seed as per type.");
                }
                discover_subnet($details);
            }

            if ($item->type === 'active directory') {
                if ($debug) {
                    log_message('debug', $microtime . " " . "Scanning AD as per type.");
                }
                discover_ad($details);
            }

            if ($item->type === 'ip_scan') {
                if ($debug) {
                    log_message('debug', $microtime . " " . "Scanning IP " . $details->ip . " as per type.");
                }
                $result = ip_scan($details);
                $result = json_encode($result);
                if (!empty($result)) {
                    if ($debug) {
                        log_message('debug', $microtime . " " . "Creating queue item for ip_audit for " . $details->ip);
                    }
                    $queue_item = new stdClass();
                    $queue_item->ip = $details->ip;
                    $queue_item->discovery_id = $details->discovery_id;
                    $queue_item->details = $result;
                    $this->m_queue->create('ip_audit', $queue_item);
                }
                if ($debug) {
                    log_message('debug', $microtime . " " . "Scanning IP " . $details->ip . " as per type COMPLETED.");
                }
            }

            if ($item->type === 'ip_audit') {
                if ($debug) {
                    log_message('debug', $microtime . " " . "Auditing IP " . $details->ip . " as per type.");
                }
                $result = ip_audit($details);
                if ($debug) {
                    log_message('debug', $microtime . " " . "Auditing IP " . $details->ip . " as per type COMPLETED.");
                }
            }

            if ($item->type === 'integrations') {
                $integrationsModel->execute($details->integrations_id);
            }
        }
    }
}
