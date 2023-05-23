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
 * Base Object Devices
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Devices
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Devices extends BaseController
{
    public function create()
    {
        $db = db_connect();

        if (empty($_POST['input_type']) or $_POST['input_type'] === 'manual_input') {
            $device = new \stdClass();
            foreach ($this->resp->meta->received_data->attributes as $key => $value) {
                if ($value !== '') {
                    $device->$key = $value;
                }
            }
            $device->last_seen_by = 'web form';
            $device->last_seen = $this->config->timestamp;
            $id = $this->{strtolower($this->resp->meta->collection) . "Model"}->create($device);
            $device->id = $id;
            $mac = '';
            if (!empty($device->mac)) {
                $mac = strtolower($device->mac);
            }
            if (!empty($device->ip) and !empty($device->netmask)) {
                $componentsModel = new \App\Models\ComponentsModel();
                $network = network_details($device->ip . ' ' . $device->netmask);
                if (empty($network->error)) {
                    $device_ip = new \stdClass();
                    $device_ip->mac = $mac;
                    $device_ip->net_index = '';
                    $device_ip->ip = $network->address;
                    $device_ip->netmask = $network->netmask;
                    $device_ip->cidr = $network->network_slash;
                    $device_ip->version = 4;
                    $device_ip->network = $network->network . '/' . $network->network_slash;
                    $device_ip->set_by = '';
                    $input = array();
                    $input[] = $device_ip;
                    $parameters = new \stdClass();
                    $parameters->table = 'ip';
                    $parameters->details = $device;
                    $parameters->input = $input;
                    $componentsModel->upsert('ip', $device, $input);
                }
            }
        }

        if (!empty($_POST['input_type']) && $_POST['input_type'] === 'audit_input') {
            $input = $_POST['upload_input'];
        }

        if (!empty($_POST['input_type']) && $_POST['input_type'] === 'file_input') {
            if (empty($_FILES['upload_file'])) {
                log_message('error', 'No file uploaded for device creation.');
                \Config\Services::session()->setFlashdata('fail', 'No file uploaded for device creation.');
                return redirect()->route('devicesCollection');
            }
            if (isset($_FILES['upload_file']['tmp_name']) && $_FILES['upload_file']['tmp_name'] !== '') {
                $input = file_get_contents($_FILES['upload_file']['tmp_name']);
            }
        }

        if (!empty($input)) {
            $request = $this->request;
            $device = audit_convert($input);
            if (!$device) {
                log_message('error', 'Could not convert audit submission.');
                \Config\Services::session()->setFlashdata('fail', 'Could not convert audit submission.');
                return redirect()->route('devicesCollection');
            }
            include "include_process_device.php";
            $id = $device->system->id;
        }

        if (!empty($id)) {
            if ($this->resp->meta->format !== 'screen') {
                $this->resp->data = $this->{"devicesModel"}->read($id);
                output($this);
                return true;
            } else {
                \Config\Services::session()->setFlashdata('success', "Item in devices created successfully.");
                return redirect()->route('devicesRead', [$id]);
            }
        } else {
            if ($this->resp->meta->format !== 'screen') {
                output($this);
                return true;
            } else {
                log_message('error', 'Item in ' . $this->resp->meta->collection . ' not created.');
                return redirect()->route('devicesCollection');
            }
        }
    }
}
