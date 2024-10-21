<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

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
 * Base Object Input
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Input
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Input extends BaseController
{
    public function benchmarks()
    {
        $db = db_connect();
        $request = $this->request;

        $input = file_get_contents('php://input');
        if (empty($input)) {
            log_message('error', 'Benchmark data is empty.');
            return false;
        }
        // See if we have stringified JSON
        $json = html_entity_decode($input);
        // Remove non-printable characters
        $json = preg_replace('/[[:^print:]]/', '', $json);
        // Remove window control characters
        $json = preg_replace('/[[:cntrl:]]/', '', $json);
        if (mb_detect_encoding($json) !== 'UTF-8' and mb_detect_encoding($json) !== 'UTF-16' and mb_detect_encoding($json) !== 'UTF-16BE' and mb_detect_encoding($json) !== 'UTF-16LE') {
            $json = mb_convert_encoding($json, 'UTF-8', mb_list_encodings());
        }
        try {
            $json = json_decode($json, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            return false;
        }
        $json->device_id = intval($json->device_id);
        $json->benchmark_id = intval($json->benchmark_id);
        if (empty($json->device_id)) {
            log_message('error', 'Invalid device id');
            return false;
        }
        if (empty($json->benchmark_id)) {
            log_message('error', 'Invalid benchmark id');
            return false;
        }
        $devicesModel = model('App\Models\DevicesModel');
        $device = $devicesModel->read($json->device_id)[0];
        if (empty($device)) {
            log_message('error', 'Invalid device ID supplied to Input::benchmarks. Supplied: ' . $json->device_id);
            $sql = "INSERT INTO benchmarks_log VALUES (null, $json->benchmark_id, $json->device_id, NOW(), 'error', Invalid device ID supplied, $device_id', '')";
            $db->query($sql);
            $sql = "INSERT INTO benchmarks_log VALUES (null, $json->benchmark_id, $json->device_id, NOW(), 'error', Completed. Memory: " . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . " MiB', '')";
            $db->query($sql);
            return;
        }
        $sql = "INSERT INTO benchmarks_log VALUES (null, $json->benchmark_id, $json->device_id, NOW(), 'info', 'Processing report file.', '')";
        $db->query($sql);

        $sql = "DELETE FROM benchmarks_result WHERE device_id = ? AND benchmark_id = ?";
        $db->query($sql, [$json->device_id, $json->benchmark_id]);

        foreach ($json->result as $result) {
            $sql = "INSERT INTO benchmarks_result VALUES (NULL, ?, 'y', NOW(), NOW(), ?, ?, ?)";
            $db->query($sql, [$json->device_id, $json->benchmark_id, trim($result->external_ident), $result->result]);
            // echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
        }

        #$sql = "INSERT INTO benchmarks_log VALUES (null, $json->benchmark_id, $json->device_id, NOW(), 'info', 'Processing report file completed. ' . intval(count($json->result)) . ' inserted.', '')";
        $sql = "INSERT INTO benchmarks_log VALUES (null, $json->benchmark_id, $json->device_id, NOW(), 'info', 'Processing report file completed.', '')";
        $db->query($sql);
            $sql = "INSERT INTO benchmarks_log VALUES (null, $json->benchmark_id, $json->device_id, NOW(), 'info', 'Completed. Memory: " . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . " MiB', '')";
        $db->query($sql);
    }

    public function devices()
    {
        # TODO - check for allowed network

        $db = db_connect();

        $request = $this->request;
        $input = $request->getPost('data');
        if (empty($input)) {
            log_message('error', 'Audit data is empty.');
            return false;
        }
        $device = audit_convert($input);
        if (!$device) {
            log_message('error', 'Could not convert audit submission.');
            return false;
        }
        include "include_process_device.php";
        $discoveryLogModel = new \App\Models\DiscoveryLogModel();
        $log = new \stdClass();
        $log->discovery_id = (!empty($device->system->discovery_id)) ? intval($device->system->discovery_id) : null;
        $log->device_id = $device->system->id;
        $log->timestamp = null;
        $log->severity = 7;
        $log->pid = getmypid();
        $log->file = 'Input';
        $log->function = 'devices';
        $log->message = 'Audit result processing completed';
        $log->command = '';
        $log->command_status = 'success';
        $log->display = 'y';
        $discoveryLogModel->create($log);

        if (!empty($this->config->servers)) {
            $server = $this->config->servers;

            $id = $device->system->id;
            unset($device->system->original_last_seen_by);
            unset($device->system->original_last_seen);
            unset($device->system->id);
            unset($device->system->first_seen);
            $device_json = json_encode($device);

            $url = $server->host . $server->community . '/index.php/input/devices';
            $data = array('data' => $device_json);
            // We must use the key 'http' even if we send the request to https://...
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                ),
                'ssl' => array (
                    'verify_peer' => false,
                    'verify_peer_name' => false
                )
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            if ($result === false) {
                // error
                $log->severity = 4;
                $log->message = 'Could not send result to ' . $url . ' - please check with your server administrator.';
                $log->device_id = $id;
                $discoveryLogModel->create($log);
                $log->severity = 7;
                log_message('error', 'Could not send result to ' . $url);
            } else {
                // success
                $log->severity = 7;
                $log->message = 'Result sent to ' . $server->host . '.';
                $log->device_id = $id;
                $discoveryLogModel->create($log);
                log_message('debug', 'Result sent to ' . $server->host . '.');
            }
        }

        return true;
    }

    public function logs()
    {
        // TODO - We really should POST to discovery_logs instead of this.
        if ($_SERVER['REMOTE_ADDR'] !== '127.0.0.1' and $_SERVER['REMOTE_ADDR'] !== '::1') {
            $this->db = db_connect();
            $sql = "SELECT `ip` FROM `collectors`";
            $result = $this->db->query($sql)->getResult();
            $collector_ips = array();
            if (!empty($result)) {
                foreach ($result as $ip) {
                    $collector_ips[] = $ip->ip;
                }
            }
            if (!in_array($_SERVER['REMOTE_ADDR'], $collector_ips)) {
                log_message('warning', 'Rejecting log post from ' . $_SERVER['REMOTE_ADDR'] . ' as it\'s not localhost and not in the list of collector IPs, which are: ' . json_encode($collector_ips));
                return;
            }
        }
        $this->discoveryLogModel = model('App\Models\DiscoveryLogModel');
        if ($data = $this->request->getPostGet()) {
            unset($data['id']);
            $this->discoveryLogModel->create((object)$data);
            echo json_encode($data);
        }
        return;
    }
}
