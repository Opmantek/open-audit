<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use stdClass;

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
            $device = new stdClass();
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
                    $device_ip = new stdClass();
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
                    $parameters = new stdClass();
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
            if (!empty($device->system->location_id)) {
                $locationsModel = new \App\Models\LocationsModel();
                $locations = $locationsModel->listAll();
                $hit = false;
                foreach ($locations as $location) {
                    if ($location->id == $device->system->location_id) {
                        $hit = true;
                        continue;
                    }
                }
                if ($hit === false) {
                    $device->system->location_id = 1;
                }
            }
            if (!empty($device->system->org_id)) {
                $orgsModel = new \App\Models\OrgsModel();
                $orgs = $orgsModel->listAll();
                $hit = false;
                foreach ($orgs as $org) {
                    if ($org->id == $device->system->org_id) {
                        $hit = true;
                        continue;
                    }
                }
                if ($hit === false) {
                    $device->system->org_id = 1;
                }
            }
            include "include_process_device.php";
            $id = $device->system->id;
            $discoveryLogModel = new \App\Models\DiscoveryLogModel();
            $log = new \stdClass();
            $log->discovery_id = null;
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
        }

        if (!empty($id)) {
            if ($this->resp->meta->format !== 'html') {
                $this->resp->data = $this->{"devicesModel"}->read($id);
                output($this);
                return true;
            }
            if ($this->resp->meta->format === 'html') {
                $status = (!empty($status)) ? $status : 'created';
                \Config\Services::session()->setFlashdata('success', "Item in devices $status successfully.");
                return redirect()->route('devicesRead', [$id]);
            }
        }
        if ($this->resp->meta->format !== 'html') {
            output($this);
            return true;
        }
        if ($this->resp->meta->format === 'html') {
            log_message('error', 'Item in ' . $this->resp->meta->collection . ' not created.');
            return redirect()->route('devicesCollection');
        }
    }

    public function delete()
    {
        $db = db_connect();
        $sql = "DELETE FROM devices WHERE domain = 'open-audit.local'";
        $db->query($sql);
        \Config\Services::session()->setFlashdata('success', 'Example devices deleted.');
        return redirect()->route('devicesCollection');
    }

    public function deleteForm()
    {
        $this->resp->data = $this->devicesModel->listUser(['devices.domain' => 'open-audit.local']);
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('devicesDeleteForm', ['data' => $this->resp->data])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    public function exampleForm()
    {
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('devicesExampleForm', [])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    public function example()
    {
        set_time_limit(300);
        $db = db_connect();
        $count = 0;
        $files = glob(ROOTPATH . 'other/example_devices/*.{xml,json}', GLOB_BRACE);
        $this->config->discovery_use_dns = 'n';
        foreach ($files as $file) {
            $device = file_get_contents($file);
            if ($device === false) {
                continue;
            }
            $device = audit_convert($device);
            $logname = (!empty($device->system->hostname)) ? $device->system->hostname : ((!empty($device->system->ip)) ? $device->system->ip : $file);
            log_message('info', 'Importing device ' . $logname);
            unset($logname);
            if (!$device) {
                log_message('error', 'Could not convert example result file ' . $file . '.');
                \Config\Services::session()->setFlashdata('fail', 'Could not convert example result file ' . $file . '.');
                return redirect()->to(site_url() . '/devices?devices.domain=open-audit.local');
            }
            include "include_process_device.php";
            $count += 1;
        }
        \Config\Services::session()->setFlashdata('success', $count . ' example devices imported.');
        return redirect()->to(site_url() . '/devices?devices.domain=open-audit.local');
    }

    public function importNMISForm()
    {
        $locationsModel = model('App\Models\LocationsModel');
        $this->resp->included['locations'] = $locationsModel->listUser();
        $this->resp->included['orgs'] = $this->orgsModel->listUser();
        // $this->databaseModel = new \App\Models\DatabaseModel();
        // $this->resp->data = $this->databaseModel->read('devices');
        $devicesModel = model('App\Models\DevicesModel');
        $dictionary = $this->devicesModel->dictionary();
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $dictionary,
            'included' => $this->resp->included,
            'meta' => $this->resp->meta,
            'orgs' => $this->orgsUser,
            'queries' => $this->queriesUser,
            'roles' => $this->roles,
            'user' => $this->user ]) .
            view('devicesImportNMISForm', ['data' => $this->resp->included])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    public function importNMIS()
    {
        // Use nmis9 node admin tool
        if (!file_exists($this->config->nmis . '/admin/node_admin.pl')) {
            log_message('error', 'Importing from NMIS requires ' . $this->config->nmis . '/admin/node_admin.pl to exist.');
            \Config\Services::session()->setFlashdata('error', 'NMIS NodeAdmin not detected.');
            return redirect()->route('devicesCollection');
        }
        $command = $this->config->nmis . '/admin/node_admin.pl act=export format=json keep_ids=1 2>/dev/null';
        exec($command, $string, $return_var);
        if ($return_var !== 0) {
            log_message('error', 'Error importing from NMIS9 using NodeAdmin tool.');
            log_message('error', json_encode($string));
            \Config\Services::session()->setFlashdata('error', 'Error importing from NMIS9 using NodeAdmin tool. ' . $string);
            return redirect()->route('devicesCollection');
        }
        if (is_array($string)) {
            $string = implode('', $string);
        }
        try {
            $nodes = json_decode($string, true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        unset($string);
        unset($command);
        unset($return_var);
        for ($i = 0; $i < count($nodes); $i++) {
            $nodes[$i]['org_id'] = intval($this->resp->meta->received_data->attributes->org_id);
            $nodes[$i]['location_id'] = intval($this->resp->meta->received_data->attributes->location_id);
        }
        $db = db_connect();
        $devicesModel = model('App\Models\DevicesModel');
        $networkModel = model('App\Models\NetworksModel');
        $attributesModel = model('App\Models\AttributesModel');
        $componentsModel = model('App\Models\ComponentsModel');

        $match = new stdClass();
        $match->match_ip = 'y';
        $match->match_dns_fqdn = 'y';
        $match->match_dns_hostname = 'y';

        $devices = array();
        $attributes = $attributesModel->listUser();

        foreach ($nodes as $node) {
            $device = new stdClass();
            $device->name = (!empty($node['name'])) ? strtolower($node['name']) : '';
            $device->ip = '';
            $device->hostname = '';
            $device->fqdn = '';
            if (filter_var($node['configuration']['host'], FILTER_VALIDATE_IP) !== false) {
                $device->ip = $node['configuration']['host'];
                # $device = dns_validate($device);
            }
            if (filter_var($node['configuration']['host'], FILTER_VALIDATE_IP) === false) {
                $device->hostname =  $node['configuration']['host'];
                $device->ip = gethostbyname($device->hostname);
                if (strpos($node['configuration']['host'], '.') !== false) {
                    $device->fqdn =  $node['configuration']['host'];
                    $temp = explode('.', $device->fqdn);
                    $device->hostname = $temp[0];
                    unset($temp[0]);
                    $device->domain = implode('.', $temp);
                    unset($temp);
                    $device->ip = gethostbyname($device->fqdn);
                }
            }
            $serviceStatus = (!empty($node['configuration']['serviceStatus'])) ? $node['configuration']['serviceStatus'] : '';
            foreach ($attributes as $attribute) {
                if ($attribute->attributes->type === 'environment') {
                    if (strtolower($serviceStatus) === strtolower($attribute->attributes->value) or strtolower($serviceStatus) === strtolower($attribute->attributes->name)) {
                        $device->envionment = $attribute->attributes->value;
                    }
                }
            }
            $device->org_id = $node['org_id'];
            $device->location_id = $node['location_id'];
            $device->nmis_manage = 'y';
            $device->omk_uuid = (!empty($node['uuid'])) ? $node['uuid'] : '';
            $device->status = 'production';
            $device->nmis_group = (!empty($node['configuration']['group'])) ? $node['configuration']['group'] : '';
            $device->nmis_name = (!empty($node['name'])) ? $node['name'] : '';
            $device->nmis_role = (!empty($node['configuration']['roleType'])) ? $node['configuration']['roleType'] : '';
            $device->nmis_notes = (!empty($node['configuration']['notes'])) ? $node['configuration']['notes'] : '';
            $device->nmis_business_service = (!empty($node['configuration']['businessService'])) ? $node['configuration']['businessService'] : '';
            $device->last_seen_by = 'nmis';
            $device->last_seen = $this->config->timestamp;

            $device->credentials = new stdClass();
            $device->credentials->description = 'Imported from NMIS 9';
            $device->credentials->name = 'Device Specific Credentials';
            $device->credentials->type = 'snmp';
            $device->credentials->credentials = new stdClass();
            $temp =  (!empty($node['configuration']['version'])) ? $node['configuration']['version'] : '';
            switch ($temp) {
                case 'snmpv1':
                    $device->credentials->credentials->version = 1;
                    break;

                case 'snmpv2c':
                    $device->credentials->credentials->version = 2;
                    break;

                case 'snmpv3':
                    $device->credentials->credentials->version = 3;
                    break;

                default:
                    $device->credentials->credentials->version = 2;
                    break;
            }

            if ($device->credentials->credentials->version == 1) {
                $device->credentials->credentials->community =  (!empty($node['configuration']['community'])) ? $node['configuration']['community'] : '';
            }
            if ($device->credentials->credentials->version == 2) {
                $device->credentials->credentials->community =  (!empty($node['configuration']['community'])) ? $node['configuration']['community'] : '';
            }
            if ($device->credentials->credentials->version == 3) {
                $device->credentials->type = 'snmp_v3';
                $device->credentials->credentials->security_name = (!empty($node['configuration']['username'])) ? $node['configuration']['username'] : '';
                $device->credentials->credentials->authentication_passphrase = (!empty($node['configuration']['authpassword'])) ? $node['configuration']['authpassword'] : '';
                $device->credentials->credentials->authentication_protocol = (!empty($node['configuration']['authprotocol'])) ? $node['configuration']['authprotocol'] : '';
                $device->credentials->credentials->privacy_passphrase = (!empty($node['configuration']['privpassword'])) ? $node['configuration']['privpassword'] : '';
                $device->credentials->credentials->privacy_protocol = (!empty($node['configuration']['privprotocol'])) ? $node['configuration']['privprotocol'] : '';
                $device->credentials->credentials->security_level = 'noAuthNoPriv';
                if (!empty($node['configuration']['authpassword']) and !empty($node['configuration']['authprotocol']) and empty($node['configuration']['privpassword'])) {
                    $device->credentials->credentials->security_level = 'authNoPriv';
                }
                if (!empty($node['configuration']['authpassword']) and !empty($node['configuration']['authprotocol']) and !empty($node['configuration']['privpassword']) and !empty($node['configuration']['privprotocol'])) {
                    $device->credentials->credentials->security_level = 'authPriv';
                }
            }
            $devices[] = $device;
        }
        $ids = array();
        $updated = 0;
        $inserted = 0;
        foreach ($devices as $device) {
            // Remove any empty entries
            foreach ($device as $key => $value) {
                if (empty($value)) {
                    unset($device->$key);
                }
            }

            // Need to manually remove any discovery logs.
            $sql = 'DELETE FROM discovery_log WHERE ip = ?';
            $db->query($sql, [$device->ip]);

            $device->id = deviceMatch($device, 0, $match);
            $credentials = $device->credentials;
            unset($device->credentials);

            if (!empty($device->id)) {
                $devicesModel->update($device->id, $device);
                $updated++;
                // must manually update last seen and last seen by
                // $sql = 'UPDATE system SET last_seen_by = "nmis", last_seen = ? WHERE id = ?';
                // $data = array($device->last_seen, $device->id);
                // $this->db->query($sql, $data);
            }
            if (empty($device->id)) {
                $device->first_seen = $this->config->timestamp;
                $device->id = $devicesModel->create($device);
                $inserted++;
                // need to update the discovery log with our system.id
                // $sql = '/* nmis::_from_nmis_9 */ ' . 'UPDATE discovery_log SET system_id = ? WHERE ip = ?';
                // $data = array($device->id, ip_address_from_db(@$device->ip));
                // $this->db->query($sql, $data);
            }
            $credentials->device_id = $device->id;
            $credentials->component_type = 'credential';
            $componentsModel->create($credentials);
            $ids[] = $device->id;
            # NOTE - this applies for returning a JSON result
            #      - a HTML output redirects
            $data = new stdClass();
            $data->id = $device->id;
            $data->type = 'devices';
            $data->attributes = new stdClass();
            $data->attributes->id = $device->id;
            $data->attributes->name = $device->name;
            $data->attributes->hostname = (!empty($device->hostname)) ? $device->hostname : '';
            $data->attributes->ip = '';
            if (!empty($device->ip)) {
                $data->attributes->ip = ip_address_from_db($device->ip);
            }
            $this->resp->data[] = $data;
        }
        $ids = implode(',', $ids);
        $this->resp->meta->ids = $ids;
        $this->resp->meta->inserted = $inserted;
        $this->resp->meta->updated = $updated;
        $this->resp->meta->total = $inserted + $updated;
        if (!empty($this->resp->meta->received_data->attributes->run_discovery) and $this->resp->meta->received_data->attributes->run_discovery === 'y') {
            $this->componentsModel = model('App\Models\ComponentsModel');
            $data = new stdClass();
            $data->component_type = 'discovery';
            $data->ids = array();
            foreach ($devices as $device) {
                if (!empty($device->ip) and $device->ip !== '127.0.0.1' and $device->ip !== '127.000.000.001') {
                    $data->ids[] = $device->id;
                }
            }
            $data->ids = implode(',', $data->ids);
            $this->componentsModel->create($data);
        }

        if ($this->resp->meta->format === 'json' or $this->resp->meta->format === 'json_data') {
            output($this);
            return;
        }
        \Config\Services::session()->setFlashdata('success', $this->resp->meta->total . ' devices imported (' . $this->resp->meta->inserted . ' inserted and ' . $this->resp->meta->updated . ' updated).');
        return redirect()->to(site_url() . '/devices?devices.last_seen=' . $this->config->timestamp . '&devices.last_seen_by=nmis&properties=devices.id,devices.icon,devices.type,devices.name,nmis_name,devices.ip,devices.nmis_business_service,devices.nmis_group,devices.nmis_role,devices.nmis_notes');
    }

    public function reset($id = null)
    {
        $id = (int)$id;
        $db = db_connect();
        $tables = array('bios', 'certificate', 'disk', 'dns', 'executable', 'file', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'warranty', 'windows');
        foreach ($tables as $table) {
            $sql = "DELETE FROM `$table` WHERE device_id = ? and current = 'n'";
            $db->query($sql, [$id]);
            log_message('debug', str_replace("\n", " ", (string)$db->getLastQuery()));
            $sql = "DELETE FROM `change_log` WHERE device_id = ? and db_table = ?";
            $db->query($sql, [$id, $table]);
            log_message('debug', str_replace("\n", " ", (string)$db->getLastQuery()));
        }
        echo json_encode($this->resp);
        return;
    }
}
