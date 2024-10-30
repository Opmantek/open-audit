<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class ComponentsModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    /**
     * Read the collection from the database
     *
     * @param  $resp object An object containing the properties, filter, sort and limit as passed by the user
     *
     * @return array        An array of formatted entries
     */
    public function collection(object $resp): array
    {
        $table = '';
        $tables = array();
        $result = array();
        $count = count($resp->meta->filter);
        $instance = & get_instance();
        for ($i = 0; $i < $count; $i++) {
            if ($resp->meta->filter[$i]->name === 'type' or $resp->meta->filter[$i]->name === 'components.type') {
                // The request has populated components.type=memory or components.type=memory,processor - get those into the $table variable
                if (strpos($resp->meta->filter[$i]->value, ',') !== false) {
                    # We have a comma separated list of tables
                    $tables = explode(',', $resp->meta->filter[$i]->value);
                }
                $table = $resp->meta->filter[$i]->value;
                $properties[] = $table . '.*';
            }
        }
        if ($table === '' and $resp->meta->format === 'html') {
            $table = 'ip';
            \Config\Services::session()->setFlashdata('warning', 'No components.type supplied, returning IP data.');
        }
        if ($table === '') {
            // No components.type requested, return all the below
            $tables = array('access_point', 'antivirus', 'benchmarks_result', 'bios', 'certificate', 'disk', 'dns', 'executable', 'file', 'firewall', 'firewall_rule', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'warranty', 'windows');
        }
        $orgs = array();
        $count = count($resp->meta->filter);
        for ($i = 0; $i < $count; $i++) {
            if ($resp->meta->filter[$i]->name === 'components.org_id') {
                $resp->meta->filter[$i]->name = 'devices.org_id';
                $orgs = $resp->meta->filter[$i]->value;
            }
        }
        $device_sql = '';
        $device_id = null;
        $count = count($resp->meta->filter);
        for ($i = 0; $i < $count; $i++) {
            if ($resp->meta->filter[$i]->name === 'components.device_id') {
                $device_sql = " AND `$table`.device_id = " . intval($resp->meta->filter[$i]->value);
                $device_id = intval($resp->meta->filter[$i]->value);
            }
        }
        if (empty($tables)) {
            if (!in_array($table, ['access_point', 'antivirus', 'audit_log', 'benchmarks_result', 'bios', 'certificate', 'change_log', 'discovery_log', 'disk', 'dns', 'edit_log', 'executable', 'file', 'firewall', 'firewall_rule', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'warranty', 'windows'])) {
                # Invalid table
                log_message('error', 'Invalid table provided to ComponentsModel::collection, ' . $table);
                $_SESSION['error'] = 'Invalid table provided to ComponentsModel::collection, ' . htmlentities($table);
                return array();
            }
            $sql = "SELECT `$table`.*, devices.id AS `devices.id`, devices.name AS `devices.name` FROM `$table` LEFT JOIN `devices` ON `$table`.device_id = devices.id WHERE devices.org_id IN (?) $device_sql LIMIT " . $resp->meta->limit;
            if ($instance->config->device_known > $instance->config->license_limit and $instance->config->license_limit > 0) {
                $sql = "SELECT `$table`.*, devices.id AS `devices.id`, devices.name AS `devices.name` FROM `$table` LEFT JOIN `devices` ON `$table`.device_id = devices.id JOIN (SELECT DISTINCT devices.id FROM `devices` LEFT JOIN $table ON devices.id = $table.device_id WHERE devices.type NOT IN ('unknown', 'unclassified') AND devices.org_id IN (" . implode(',', $orgs) . ") AND $table.id IS NOT NULL ORDER BY devices.id LIMIT " . $instance->config->license_limit . ") as D2 on $table.device_id = D2.id WHERE devices.org_id IN (" . implode(',', $orgs) . ") $device_sql LIMIT " . $resp->meta->limit;
                log_message('warning', 'Restricting Components to ' . $instance->config->license_limit . ' devices as per license. There are actually ' . $instance->config->device_count . ' devices in the database.');
                $_SESSION['warning'] = 'Restricting Components to ' . $instance->config->license_limit . ' devices as per license. There are actually ' . $instance->config->device_count . ' devices in the database.';
            }
            if ($table === 'benchmarks_result') {
                $sql = "SELECT `$table`.*, devices.id AS `devices.id`, devices.name AS `devices.name`, benchmarks_policies.id AS `benchmarks_policies.id` FROM `$table` LEFT JOIN benchmarks_policies ON benchmarks_result.external_ident = benchmarks_policies.external_ident LEFT JOIN `devices` ON `$table`.device_id = devices.id JOIN (SELECT DISTINCT devices.id FROM `devices` LEFT JOIN $table ON devices.id = $table.device_id LEFT JOIN benchmarks_policies ON benchmarks_result.external_ident = benchmarks_policies.external_ident WHERE devices.type NOT IN ('unknown', 'unclassified') AND devices.org_id IN (" . implode(',', $orgs) . ") AND $table.id IS NOT NULL ORDER BY devices.id LIMIT " . $instance->config->license_limit . ") as D2 on $table.device_id = D2.id WHERE devices.org_id IN (" . implode(',', $orgs) . ") $device_sql LIMIT " . $resp->meta->limit;
            }
            $query = $this->db->query($sql, [implode(',', $orgs)]);
            if ($this->sqlError($this->db->error())) {
                return array();
            }
            $result = $query->getResult();
            return format_data($result, $table);
        } else {
            foreach ($tables as $table) {
                if (empty($device_id)) {
                    $sql = "SELECT '$table' AS `table`, `$table`.*, devices.id AS `devices.id`, devices.name AS `devices.name` FROM `$table` LEFT JOIN `devices` ON `$table`.device_id = devices.id WHERE devices.org_id IN (?) LIMIT " . $resp->meta->limit;
                    if ($instance->config->device_known > $instance->config->device_license and $instance->config->device_license > 0) {
                        $sql = "SELECT '$table' AS `table`, `$table`.*, devices.id AS `devices.id`, devices.name AS `devices.name` FROM `$table` LEFT JOIN `devices` ON `$table`.device_id = devices.id JOIN (SELECT DISTINCT devices.id FROM `devices` LEFT JOIN $table ON devices.id = $table.device_id WHERE devices.type NOT IN ('unknown', 'unclassified') AND devices.org_id IN (" . implode(',', $orgs) . ") AND $table.id IS NOT NULL ORDER BY devices.id LIMIT " . $instance->config->device_license . ") as D2 on $table.device_id = D2.id WHERE devices.org_id IN (?) LIMIT " . $resp->meta->limit;
                    }
                } else {
                    $sql = "SELECT '$table' AS `table`, `$table`.*, devices.id AS `devices.id`, devices.name AS `devices.name` FROM `$table` LEFT JOIN `devices` ON `$table`.device_id = devices.id WHERE devices.org_id IN (?) AND devices.id = $device_id LIMIT " . $resp->meta->limit;
                    if ($instance->config->device_known > $instance->config->device_license and $instance->config->device_license > 0) {
                        $sql = "SELECT '$table' AS `table`, `$table`.*, devices.id AS `devices.id`, devices.name AS `devices.name` FROM `$table` LEFT JOIN `devices` ON `$table`.device_id = devices.id JOIN (SELECT DISTINCT devices.id FROM `devices` LEFT JOIN $table ON devices.id = $table.device_id WHERE devices.type NOT IN ('unknown', 'unclassified') AND devices.org_id IN (" . implode(',', $orgs) . ") AND $table.id IS NOT NULL ORDER BY devices.id LIMIT " . $instance->config->device_license . ") as D2 on $table.device_id = D2.id WHERE devices.org_id IN (?) AND devices.id = $device_id LIMIT " . $resp->meta->limit;
                    }
                }
                $query = $this->db->query($sql, [implode(',', $orgs)]);
                if ($this->sqlError($this->db->error())) {
                    return array();
                }
                $result = array_merge($result, format_data($query->getResult(), $table));
            }
            return $result;
        }
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null): ?int
    {
        if (empty($data)) {
            return null;
        }
        $instance = & get_instance();
        $device_ids = array();
        if (!empty($data->device_id)) {
            $device_ids[] = $data->device_id;
        } elseif (!empty($data->ids)) {
            $device_ids = explode(',', $data->ids);
        }
        if (empty($device_ids)) {
            log_message('error', 'No device IDs or ID provided to components::create.');
            log_message('error', json_encode($data));
        }

        if (($data->component_type === 'credential') and (empty($data->name) or empty($data->type) or empty($data->credentials))) {
            log_message('error', 'Insufficient details supplied to create credential.');
            \Config\Services::session()->setFlashdata('error', 'Insufficient details supplied to create credential.');
            if (!empty($data->device_id)) {
                redirect()->route('devicesRead', [$data->device_id]);
            }
            redirect()->route('devicesCollection');
            return null;
        }

        if ($data->component_type === 'application') {
            $sql = "INSERT INTO application VALUES (NULL, ?, ?, 'y', ?, NOW())";
            $this->db->query($sql, [intval($data->device_id), intval($data->application_id), $instance->user->full_name]);
            return (intval($this->db->insertID()));
        }

        if ($data->component_type === 'attachment') {
            if (empty($_FILES['attachment'])) {
                log_message('error', 'No uploaded file attachment.');
                \Config\Services::session()->setFlashdata('error', 'No uploaded file attachment.');
                redirect()->route('devicesRead', [$data->device_id]);
                return null;
            }
            $filename = $data->device_id . '_' . basename($_FILES['attachment']['name']);
            $target = APPPATH . 'Attachments/' . $filename;
            if (@move_uploaded_file($_FILES['attachment']['tmp_name'], $target)) {
                $sql = "INSERT INTO `attachment` VALUES (null, ?, ?, ?, ?, NOW())";
                $query = $this->db->query($sql, [$data->device_id, $data->name, $filename, $instance->user->full_name]);
                $id = (intval($this->db->insertID()));
                redirect()->route('devicesRead', [$data->device_id]);
                return $id;
            } else {
                log_message('error', "Cannot move the uploaded attachment to $target.");
                \Config\Services::session()->setFlashdata('error', "Cannot move the uploaded attachment to $target.");
            }
        }

        if ($data->component_type === 'cluster') {
            $sql = "INSERT INTO cluster VALUES (NULL, ?, ?, ?, 'y', ?, NOW())";
            $this->db->query($sql, [intval($data->device_id), intval($data->cluster_id), $data->role, $instance->user->full_name]);
            return (intval($this->db->insertID()));
        }

        if ($data->component_type === 'credential') {
            foreach ($device_ids as $id) {
                // we only store a SINGLE credential set of each type per device - delete any existing
                $sql = 'DELETE FROM `credential` WHERE `device_id` = ? AND `type` = ?';
                $this->db->query($sql, [intval($id), (string)$data->type]);

                if (!empty($data->credentials) && is_string($data->credentials)) {
                    $data->credentials = (string)simpleEncrypt($data->credentials, config('Encryption')->key);
                } else {
                    $data->credentials = (string)simpleEncrypt(json_encode($data->credentials), config('Encryption')->key);
                }
                $sql = "INSERT INTO `credential` VALUES (null, ?, 'y', ?, ?, ?, ?, ?, NOW())";
                $query = $this->db->query($sql, [$id, $data->name, $data->description, $data->type, $data->credentials, $instance->user->full_name]);

                if ($error = $this->sqlError($this->db->error())) {
                    \Config\Services::session()->setFlashdata('error', json_encode($error));
                    return null;
                }
                $id = (intval($this->db->insertID()));
                redirect()->route('devicesRead', [$data->device_id]);
                return $id;
            }
        }
        if ($data->component_type === 'discovery') {
            // TODO - what if we have collectors?
            //        We should get the collector_UUID from the device first and schedule the collector discovery if required
            $devicesModel = new \App\Models\DevicesModel();
            $instance->discoveriesModel = new \App\Models\DiscoveriesModel();
            $instance->queueModel = new \App\Models\QueueModel();
            if (!empty($data->ids)) {
                $data->ids = explode(',', $data->ids);
            } else {
                $data->ids = array();
            }
            if (!empty($data->device_id)) {
                $data->ids[] = $data->device_id;
            }
            $startDiscovery = false;
            foreach ($data->ids as $id) {
                // Get the device details
                $id = intval($id);
                $devices = $devicesModel->read($id);
                if (empty($devices[0])) {
                    // TODO - flash error
                    log_message('error', json_encode($devices));
                    return null;
                }
                $device = $devices[0];
                $sql = "SELECT * FROM discoveries WHERE name = ? AND device_id = ?";
                $result = $this->db->query($sql, ['Device Discovery - ' . $device->attributes->name, $id])->getResult();
                if (!empty($result)) {
                    // We already have a previously created device discovery - use that
                    $instance->discoveriesModel->queue(intval($result[0]->id));
                    $instance->queueModel->start();
                    return intval($result[0]->id);
                }
                $discovery = new \stdClass();
                $discovery->type = 'subnet';
                $discovery->subnet = $device->attributes->ip;
                $discovery->org_id = intval($device->attributes->org_id);
                $discovery->device_id = $id;
                $discovery->name = 'Device Discovery - ' . $device->attributes->name;
                $discovery_id = $instance->discoveriesModel->create($discovery);
                if (!empty($discovery_id)) {
                    $startDiscovery = true;
                    $instance->discoveriesModel->queue($discovery_id);
                }
            }
            if ($startDiscovery) {
                $instance->queueModel->start();
                return intval($discovery_id);
            }
            return null;
        }

        if ($data->component_type === 'image') {
            if (empty($data->orientation)) {
                $data->orientation = 'front';
            }
            if (empty($_FILES['attachment']) and empty($data->filename)) {
                log_message('error', 'No uploaded image attachment');
                \Config\Services::session()->setFlashdata('error', 'No uploaded image attachment.');
                redirect()->route('devicesRead', [$data->device_id]);
                return null;
            }
            if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images')) {
                mkdir($_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images');
            }
            if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images')) {
                log_message('error', 'Custom Images directory does not exist and cannot be created.');
                \Config\Services::session()->setFlashdata('error', 'Custom Images directory does not exist and cannot be created. Check filesystem permissions.');
                redirect()->route('devicesRead', [$data->device_id]);
                return null;
            }
            if (!empty($_FILES['attachment']['name'])) {
                $filename = (string)basename($_FILES['attachment']['name']);
                // Ensure we only accept JPG, PNG and SVG files
                if (function_exists('mime_content_type')) {
                    $mime_type = mime_content_type($_FILES['attachment']['tmp_name']);
                } else {
                    $mime_type = '';
                }
                // $filetypes = array('image/png', 'image/svg+xml', 'image/svg', 'image/jpeg', '');
                // $extensions = array('jpg', 'jpeg', 'png', 'svg');
                // disabled SVG because of XSS issues when requesting the direct image
                $filetypes = array('image/png', 'image/jpeg', '');
                $extensions = array('jpg', 'jpeg', 'png');
                $temp = explode('.', $filename);
                $extension = strtolower($temp[count($temp) - 1]);
                if (!in_array($mime_type, $filetypes) or !in_array($extension, $extensions)) {
                    unlink($_FILES['attachment']['tmp_name']);
                    log_message('warning', 'Only jpg and png files are accepted (' . $extension . ') (' . $mime_type . ')');
                    \Config\Services::session()->setFlashdata('warning', 'Only jpg, jpeg and png files are accepted (provided: ' . $extension . ') (which is a: ' . $mime_type . ')');
                    redirect()->route('devicesRead', [$data->device_id]);
                    return null;
                }
                # $target = $_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images/' . $filename;
                $target = ROOTPATH . 'public/custom_images/' . $filename;
                if (php_uname('s') === 'Windows NT') {
                    $target = 'c:\\xampp\\htdocs\\open-audit\\custom_images\\' . $filename;
                }
                if (@move_uploaded_file($_FILES['attachment']['tmp_name'], $target)) {
                    $sql = 'INSERT INTO `image` VALUES (NULL, ?, ?, ?, ?, ?, NOW())';
                    $this->db->query($sql, [$data->device_id, $data->name, $filename, $data->orientation, $instance->user->full_name]);
                    return (intval($this->db->insertID()));
                } else {
                    log_message('error', "Cannot move the uploaded image file to $target.");
                    \Config\Services::session()->setFlashdata('warning', "Cannot move the uploaded image file to $target.");
                    return null;
                }
            } elseif (!empty($data->filename)) {
                $sql = 'INSERT INTO `image` VALUES (NULL, ?, ?, ?, ?, ?, NOW())';
                $this->db->query($sql, [$data->device_id, $data->name, $data->filename, $data->orientation, $instance->user->full_name]);
                return true;
            }
        }
        return null;
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return bool    true || false depending on success
     */
    public function delete($id = null, bool $purge = false): bool
    {
        $instance = get_instance();
        $type = $instance->resp->meta->sub_resource;
        if ($type !== 'cluster' and $type !== 'credential' and $type !== 'attachment' and $type !== 'application' and $type !== 'image') {
            return false;
        }
        if ($type === 'attachment') {
            $sql = "SELECT * FROM `attachment` WHERE id = ?";
            $query = $this->db->query($sql, [$id]);
            $data = $query->getResult();
            $file = APPPATH . 'Attachments/' . $data[0]->filename;
            if (file_exists($file)) {
                if (is_writable($file)) {
                    if (unlink($file)) {
                        // success
                    } else {
                        // fail
                        log_message('error', "Cannot delete the file " . $file . ".");
                        \Config\Services::session()->setFlashdata('warning', "Cannot delete the file " . $data[0]->filename . ".");
                        return false;
                    }
                } else {
                    // fail
                    log_message('error', "Cannot delete the file " . $file . " because of permissions.");
                    \Config\Services::session()->setFlashdata('warning', "Cannot delete the file " . $data[0]->filename . " because of permissions.");
                    return false;
                }
            } else {
                // fail
                log_message('error', "File does not exist " . $file . ".");
                \Config\Services::session()->setFlashdata('warning', "File does not exist " . $data[0]->filename . ". Deleting database record.");
            }
        }
        if ($type === 'image') {
            // Do NOT delete the actual image file, users can do that manually if they want
            // The image may be used by more than one device (likely - think same model of server)
            // $sql = "SELECT * FROM `image` WHERE id = ?";
            // $query = $this->db->query($sql, [$id]);
            // $data = $query->getResult();
            // unlink(ROOTPATH . 'public/custom_images/' . $data[0]->filename);
        }
        $sql = "DELETE FROM `$type` WHERE id = ?";
        $query = $this->db->query($sql, [$id]);
        return true;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        return array();
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
    }


    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        return [];
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all entries
     */
    public function listAll(): array
    {
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query->getResult();
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return array   The array containing the requested item
     */
    public function read(int $id = 0): array
    {
        $instance = get_instance();
        $type = '';
        foreach ($instance->resp->meta->filter as $filter) {
            if ($filter->name === 'components.type' or $filter->name === 'type') {
                $type = $filter->value;
            }
        }
        $tables = $this->db->listTables();
        if (!in_array($type, $tables)) {
            return [];
        }
        $sql = "SELECT `$type`.*, devices.id AS `devices.id`, devices.name AS `devices.name` FROM `$type` LEFT JOIN devices ON (`$type`.device_id = devices.id) WHERE `$type`.id = ?";
        $query = $this->db->query($sql, [$id]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), $type);
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        // if ($this->tableReset($table)) {
        //     return true;
        // }
        return false;
    }

    /**
     * Update an individual item in the database
     *
     * @param  object  $data The data attributes
     *
     * @return bool    true || false depending on success
     */
    public function update($id = null, $data = null): bool
    {
        return true;
    }

    public function updateMissingInterfaces($device_id)
    {
        $sql = "SELECT ip.id, network.net_index FROM network LEFT JOIN ip ON (network.device_id = ip.device_id AND network.mac = ip.mac) WHERE network.device_id = ? AND ip.net_index = '' AND network.net_index != ''";
        $result = $this->db->query($sql, [$device_id])->getResult();
        foreach ($result as $line) {
            $sql = 'UPDATE ip SET net_index = ? WHERE id = ?';
            $query = $this->db->query($sql, [$line->net_index, $line->id]);
        }
    }

    public function upsert(string $table = '', object $device = null, array $data = null, array $match_columns = null): bool
    {
        $instance = & get_instance();
        if (empty($table)) {
            log_message('error', 'ComponentsModel::upsert - No table supplied.');
            return false;
        }
        if (empty($device)) {
            log_message('error', 'ComponentsModel::upsert - No device supplied.');
            return false;
        }
        if (empty($data)) {
            // Removed logging because not all device types supply all data, so no data is a valid situation.
            // log_message('warning', 'ComponentsModel::upsert - No data supplied for ' . @$table);
            return false;
        }
        $name = @$device->name;
        if (empty($name) and !empty($device->hostname)) {
            $name = $device->hostname;
        } elseif (!empty($device->ip)) {
            $name = $device->ip;
        }
        if (!$this->db->tableExists($table)) {
            $name = (!empty($device->name)) ? $device->name : @$device->ip;
            log_message('error', 'ComponentsModel::upsert - Table supplied does not exist (' . @$table . ') for ' . $name);
            return false;
        }
        if (empty($device->id)) {
            $name = (!empty($device->name)) ? $device->name : @$device->ip;
            log_message('error', 'ComponentsModel::upsert - No device id supplied for ' . $name . ' to process ' . $table . ' data.');
            return false;
        }

        if (empty($log)) {
            $log = new \stdClass();
        }
        if (!empty($device->discovery_id)) {
            $log->discovery_id = $device->discovery_id;
        }
        if (!empty($device->ip)) {
            $log->ip = ip_address_from_db($device->ip);
        } else {
            $log->ip = '127.0.0.1';
        }
        if (!empty($GLOBALS['discovery_id']) and empty($log->discovery_id)) {
            $log->discovery_id = intval($GLOBALS['discovery_id']);
        }
        if (!empty($device->discovery_id) and empty($log->discovery_id)) {
            $log->discovery_id = intval($device->discovery_id);
        }
        $log->command = 'upsert';
        $log->file = 'ComponentsModel';
        $log->function = 'upsert';
        $log->message = '';
        $log->pid = getmypid();
        $log->severity = 7;
        $log->severity_text = '';
        $log->device_id = @intval($device->id);
        $log->timestamp = null;

        $create_change_log = true;
        if (!empty($instance->config->{'create_change_log_' . $table}) and $instance->config->{'create_change_log_' . $table} === 'n') {
            $create_change_log = false;
        }
        if (!empty($instance->config->create_change_log) and $instance->config->create_change_log === 'n') {
            $create_change_log = false;
        }
        if (empty($match_columns)) {
            $match_columns = match_columns($table);
        }

        helper('macaddress');

        $sql = 'SELECT last_seen, org_id FROM devices WHERE id = ?';
        $query = $this->db->query($sql, [$device->id]);
        $row = $query->getRow();

        if (!isset($device->last_seen) or $device->last_seen === '0000-00-00 00:00:00' or $device->last_seen === '') {
            $device->last_seen = $row->last_seen;
        }

        // make sure we have a populated org_id for adding items to the charts table
        if (empty($device->org_id)) {
            $device->org_id = $row->org_id;
        }

        foreach ($match_columns as $match_column) {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                if (isset($data[$i]) and !isset($data[$i]->{$match_column})) {
                    $data[$i]->$match_column = '';
                }
            }
        }

        // BIOS
        if ((string)$table === 'bios') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                // `description` changed to `model`
                if (empty($data[$i]->model) and !empty($data[$i]->description)) {
                    $data[$i]->model = $data[$i]->description;
                }
                // new DERIVED column `name`
                if (empty($data[$i]->name) and !empty($data[$i]->description)) {
                    $data[$i]->name = $data[$i]->description;
                }
                // new DERIVED column `name`
                if (empty($data[$i]->name) and !empty($data[$i]->model)) {
                    $data[$i]->name = $data[$i]->model;
                }
                // Remove `description`
                if (!empty($data[$i]->description)) {
                    unset($data[$i]->description);
                }
            }
        }

        // CERTIFICATE
        if ((string)$table === 'certificate') {
            // Format the dates to our standard
            if ($device->os_group === 'Linux') {
                $count = count($data);
                for ($i = 0; $i < $count; $i++) {
                    if (! empty($data[$i]->valid_from_raw)) {
                        $from = strtotime($data[$i]->valid_from_raw);
                        $data[$i]->valid_from = '';
                        if (!empty($from)) {
                            $data[$i]->valid_from = gmdate('Y-m-d H:i:s', $from);
                        }
                    }
                    if (! empty($data[$i]->valid_to_raw)) {
                        $to = strtotime($data[$i]->valid_to_raw);
                        $data[$i]->valid_to = '';
                        if (!empty($to)) {
                            $data[$i]->valid_to = gmdate('Y-m-d H:i:s', $to);
                        }
                    }
                }
            }
        }

        // DISK
        if ((string)$table === 'disk') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                if (empty($data[$i]->size)) {
                    $data[$i]->size = 0;
                } else {
                    $data[$i]->size = intval($data[$i]->size);
                }
                if (empty($data[$i]->manufacturer) or $data[$i]->manufacturer === '(Standard disk drives)') {
                    $data[$i]->manufacturer = '';
                }
                if (empty($data[$i]->model)) {
                    $data[$i]->model = '';
                }
                if (empty($data[$i]->model_family)) {
                    $data[$i]->model_family = '';
                }
                if (stripos($data[$i]->manufacturer, 'QEMU') !== false) {
                    $data[$i]->manufacturer = 'QEMU';
                    $data[$i]->model = 'Virtual I/O device';
                    $data[$i]->model_family = '';
                }
                if (stripos($data[$i]->manufacturer, 'VMware') !== false) {
                    $data[$i]->manufacturer = 'VMware';
                    $data[$i]->model = 'VMware Virtual Disk';
                    $data[$i]->model_family = '';
                }
                if (empty($data[$i]->manufacturer) and stripos($data[$i]->model, 'vmware') !== false) {
                    $data[$i]->manufacturer = 'VMware';
                    $data[$i]->model = 'VMware Virtual Disk';
                    $data[$i]->model_family = '';
                }
                if (empty($data[$i]->manufacturer) and stripos($data[$i]->model, 'intel') !== false) {
                    $data[$i]->manufacturer = 'Intel';
                }
                if (empty($data[$i]->manufacturer) and $data[$i]->model === 'VBOX HARDDISK') {
                    $data[$i]->manufacturer = 'VirtualBox';
                }
                if (empty($data[$i]->manufacturer) and stripos($data[$i]->model, 'wdc') !== false) {
                    $data[$i]->manufacturer = 'Western Digital';
                }
                if (empty($data[$i]->manufacturer) and stripos($data[$i]->model_family, 'Western Digital') !== false) {
                    $data[$i]->manufacturer = 'Western Digital';
                }
                if (empty($data[$i]->manufacturer) and stripos($data[$i]->model_family, 'Seagate') !== false) {
                    $data[$i]->manufacturer = 'Seagate';
                }
                if (empty($data[$i]->manufacturer) and stripos($data[$i]->model_family, 'HP ') === 0) {
                    $data[$i]->manufacturer = 'Hewlett Packard';
                }
                if (stripos($data[$i]->manufacturer, 'Apple') === 0) {
                    $data[$i]->manufacturer = 'Apple Inc.';
                }

                if (empty($data[$i]->interface_type)) {
                    $data[$i]->interface_type = '';
                }
                $data[$i]->interface_type = strtoupper($data[$i]->interface_type);
                if (empty($data[$i]->status)) {
                    $data[$i]->status = '';
                }
                if ($data[$i]->status === 'Not available') {
                    $data[$i]->status = '';
                }

                // new DERIVED column `name`
                if (empty($data[$i]->name) and !empty($data[$i]->model)) {
                    $data[$i]->name = trim((string)$data[$i]->manufacturer . ' ' . $data[$i]->model);
                }
            }
        }

        // IP ADDRESS
        if ((string)$table === 'ip') {
            $networksModel = new \App\Models\NetworksModel();
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                if (!empty($data[$i])) {
                    // some devices may provide upper case MAC addresses - ensure all stored in the DB are lower
                    $data[$i]->mac = strtolower($data[$i]->mac);
                    // As at 1.5.6 we pass an additional attribute called 'type' for bonded adapters
                    // We use this to test and not pad the MAC address if set
                    if (!isset($data[$i]->type)) {
                        $data[$i]->type = '';
                    }
                    $data[$i]->version = isset($data[$i]->version) ? intval($data[$i]->version) : 4;
                    if ($data[$i]->version !== 4 and $data[$i]->version !== 6) {
                        $data[$i]->version = 4;
                    }
                    // If we have a CIDR, but no netmask, create it
                    if ($data[$i]->version === 4 and !empty($data[$i]->cidr) and empty($data[$i]->netmask)) {
                        $temp_network = network_details($data[$i]->ip . '/' . $data[$i]->cidr);
                        $data[$i]->netmask = @$temp_network->netmask;
                    }
                    // Set a default netmask of 255.255.255.0 if we don't have one (and we're on IPv4)
                    if ($data[$i]->version === 4 and (empty($data[$i]->netmask) or $data[$i]->netmask === '0.0.0.0')) {
                        $data[$i]->netmask = '255.255.255.0';
                    }
                    // new DERIVED column `name`
                    if (!empty($data[$i]->ip)) {
                        $data[$i]->name = $data[$i]->ip;
                    }
                    // calculate the network this address is on
                    if ($data[$i]->version === 4 and !empty($data[$i]->ip)) {
                        // DePad the IP before parsing
                        $data[$i]->ip = ip_address_from_db($data[$i]->ip);
                        $temp_long = ip2long($data[$i]->netmask);
                        $temp_base = ip2long('255.255.255.255');
                        $temp_subnet = 32 - log(($temp_long ^ $temp_base) + 1, 2);
                        $temp_net = network_details($data[$i]->ip . '/' . $temp_subnet);
                        if (isset($temp_net->network) and $temp_net->network !== '') {
                            $data[$i]->network = $temp_net->network . '/' . $temp_subnet;
                        } else {
                            $data[$i]->network = '';
                        }
                        if (isset($temp_net->network_slash) and $temp_net->network_slash !== '') {
                            $data[$i]->cidr = $temp_net->network_slash;
                        } else {
                            $data[$i]->cidr = '';
                        }
                        unset($temp_long);
                        unset($temp_base);
                        unset($temp_subnet);
                        unset($temp_net);
                    }
                    if ($data[$i]->type !== 'bonded') {
                        if (isset($data[$i]->mac) and $data[$i]->mac !== '') {
                            $mymac = explode(':', $data[$i]->mac);
                            $count = count($mymac);
                            for ($j = 0; $j < $count; $j++) {
                                $mymac[$j] = mb_substr('00' . $mymac[$j], -2);
                            }
                            if ($count > 0) {
                                $data[$i]->mac = implode(':', $mymac);
                            }
                        }
                    }
                    // ensure we have the correctly padded ip v4 address
                    if ($data[$i]->version === 4) {
                        $data[$i]->ip = ip_address_to_db($data[$i]->ip);
                    }
                    if (!isset($data[$i]->ip) or $data[$i]->ip === '') {
                        unset($data[$i]);
                    }
                    // ensure we add the network to the networks list
                    if (!empty($data[$i]->network)) {
                        $network = new \stdClass();
                        $network->name = $data[$i]->network;
                        $network->network = $data[$i]->network;
                        $network->org_id = 1;
                        if (!empty($device->org_id)) {
                            $network->org_id = intval($device->org_id);
                        }
                        $network->location_id = 1;
                        if (!empty($device->location_id)) {
                            $network->location_id = intval($device->location_id);
                        }
                        $network->description = 'Inserted from audit result.';
                        # TODO
                        $networksModel->upsert($network);
                    }
                }
            }
            if ($device->type === 'computer' and !empty($device->os_group) and $device->os_group === 'VMware') {
                // TODO - fix the below somewhow ?!??
                // the issue is that ESXi provides different values for network cards from the command line and from SNMP
                $sql = 'DELETE FROM `ip` WHERE `ip`.`device_id` = ?';
                $query = $this->db->query($sql, [$device->id]);
                // set the below so we don't generate alerts for this
                $create_change_log = false;
            }
            if ($device->type === 'computer' and !empty($device->manufacturer) and $device->manufacturer === 'Xen' and !empty($device->model) and $device->model === 'HVM domU') {
                // TODO - fix the below somewhow ?!??
                // the issue is that AWS provides no IPv6 information via the API
                $sql = 'DELETE FROM `ip` WHERE `ip`.`device_id` = ?';
                $query = $this->db->query($sql, [$device->id]);
                // set the below so we don't generate alerts for this
                $create_change_log = false;
            }
        }

        // MEMORY
        if ((string)$table === 'memory') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                if (!empty($data[$i]->speed)) {
                    if (!is_integer($data[$i]->speed)) {
                        $data[$i]->speed = intval(preg_replace('/[^\d.]/', '', $data[$i]->speed));
                    }
                } else {
                    unset($data[$i]->speed);
                }
                // new DERIVED column `name`
                if (empty($data[$i]->name) and ! empty($data[$i]->tag)) {
                    $data[$i]->name = $data[$i]->tag;
                }
                if (empty($data[$i]->size)) {
                    $data[$i]->size = 0;
                } else {
                    $data[$i]->size = intval($data[$i]->size);
                }
            }
        }

        // MONITOR
        if ((string)$table === 'monitor') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                // new DERIVED column `name`
                if (empty($data[$i]->name)) {
                    $data[$i]->name = trim(@$data[$i]->manufacturer . ' ' . @$data[$i]->model);
                }
            }
        }

        // MOTHERBOARD
        if ((string)$table === 'motherboard') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                // new DERIVED column `name`
                if (empty($data[$i]->name)) {
                    $data[$i]->name = trim(@$data[$i]->manufacturer . ' ' . @$data[$i]->model);
                }
            }
        }

        // NETSTAT
        if ((string)$table === 'netstat') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                // new DERIVED column `name`
                if (empty($data[$i]->name)) {
                    $data[$i]->name = trim(@$data[$i]->program . ' on ' . @$data[$i]->ip . ' ' . @$data[$i]->protocol . ' port ' . @$data[$i]->port);
                }
            }
            foreach ($data as $item => $attributes) {
                $attributes->protocol = strtolower($attributes->protocol);
                $attributes->port = intval($attributes->port);
                // The protocol MUST be one defined in the SQL schema as below
                if ($attributes->protocol !== 'tcp' and $attributes->protocol !== 'udp' and $attributes->protocol !== 'tcp6' and $attributes->protocol !== 'udp6' and $attributes->protocol !== 'tcp4' and $attributes->protocol !== 'udp4') {
                    unset($data[$item]);
                    continue;
                }
                if (isset($instance->config->process_netstat_windows_dns) and $instance->config->process_netstat_windows_dns === 'n') {
                    if (stripos($attributes->program, 'dns.exe') !== false and intval($attributes->port) > 1000) {
                        unset($data[$item]);
                        continue;
                    }
                }
                if (stripos($attributes->program, 'audit_windows.vbs') !== false) {
                    // Remove the discovery connection
                    unset($data[$item]);
                    continue;
                }
            }
        }

        // NETWORK
        if ((string)$table === 'network') {
            if ($device->type === 'computer' and $device->os_group !== 'VMware') {
                // we already match only on MAC Address
            } elseif ($device->type === 'computer' and $device->os_group === 'VMware') {
                // add index and connection id to the list to be matched
                $match_columns[] = 'net_index';
                $match_columns[] = 'connection';
                // TODO - fix the below somewhow ?!??
                // the issue is that ESXi provides different values for network cards from the command line and from SNMP
                $sql = 'DELETE FROM `network` WHERE `network`.`device_id` = ?';
                $query = $this->db->query($sql, [$device->id]);
                // set the below so we don't generate alerts for this
                $create_change_log = false;
            } else {
                // just match the index
                $match_columns[] = 'net_index';
            }

            // some devices may provide upper case MAC addresses - ensure all stored in the DB are lower
            // populate the manufacturer (if not already) using the MAC prefix
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                if (isset($data[$i]->mac)) {
                    $data[$i]->mac = strtolower($data[$i]->mac);
                } else {
                    $data[$i]->mac = '';
                }
                if (empty($data[$i]->manufacturer)) {
                    $data[$i]->manufacturer = get_manufacturer_from_mac($data[$i]->mac);
                }
                if (empty($data[$i]->manufacturer) and ! empty($device->manufacturer) and ! empty($device->form_factor) and $device->form_factor === 'Virtual') {
                    $data[$i]->manufacturer = $device->manufacturer;
                }
            }
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                // new DERIVED column `name`
                if (empty($data[$i]->name)) {
                    $data[$i]->name = trim(@$data[$i]->manufacturer . ' ' . @$data[$i]->model);
                }
            }
        }

        // NMAP
        if ((string)$table === 'nmap') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                // new DERIVED column `name`
                if (empty($data[$i]->name)) {
                    $data[$i]->name = trim(@$data[$i]->program . ' on ' . @$data[$i]->ip . ' ' . @$data[$i]->protocol . ' port ' . @$data[$i]->port);
                }
            }
        }

        // PAGEFILE
        if ((string)$table === 'pagefile') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                $data[$i]->initial_size = abs(intval($data[$i]->initial_size));
                $data[$i]->max_size = abs(intval($data[$i]->max_size));
            }
        }

        // PARTITION
        if ((string)$table === 'partition') {
            // AIX needs to also match on partition.description
            if (!empty($device->os_family) and strtolower($device->os_family) === 'ibm aix') {
                $match_columns[] = 'description';
            }
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                // new DERIVED column `name`
                $data[$i]->name = $data[$i]->mount_type;
                if (!empty($data[$i]->mount_point)) {
                    $data[$i]->name .= ' at ' . $data[$i]->mount_point;
                }
                if (!empty($data[$i]->format)) {
                    if (stripos($data[$i]->format, 'member') !== false) {
                        $data[$i]->name .= ' which is a ' . $data[$i]->format;
                    } else {
                        $data[$i]->name .= ' formatted ' . $data[$i]->format;
                    }
                }
                if (isset($data[$i]->hard_drive_index) and ($data[$i]->hard_drive_index) > '') {
                    $data[$i]->name .= ' on device ' . $data[$i]->hard_drive_index;
                }
                if (empty($data[$i]->size)) {
                    $data[$i]->size = 0;
                } else {
                    $data[$i]->size = intval($data[$i]->size);
                }
            }
        }

        // PROCESSOR
        if ((string)$table === 'processor') {
            if (!empty($data[0]->description)) {
                $data[0]->description = str_ireplace('(R)', '', $data[0]->description);
                $data[0]->description = str_ireplace('(TM)', '', $data[0]->description);
                $data[0]->description = str_ireplace('  ', ' ', $data[0]->description);
            }
            if (!empty($data[0]->manufacturer)) {
                $data[0]->manufacturer = str_ireplace('AuthenticAMD', 'AMD', $data[0]->manufacturer);
                $data[0]->manufacturer = str_ireplace('GenuineIntel', 'Intel', $data[0]->manufacturer);
            }
            $data[0]->name = trim(@$data[0]->description);
            $data[0]->hyperthreading = 'n';
            if (!empty($data[0]->core_count) and !empty($data[0]->logical_count)) {
                if (intval($data[0]->logical_count) === intval(2 * $data[0]->core_count)) {
                    $data[0]->hyperthreading = 'y';
                }
            }
        }

        // ROUTE
        if ((string)$table === 'route') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                $temp = @dqtobin($data[$i]->mask);
                $temp = @bintocdr($temp);
                $data[$i]->name = trim(@$data[$i]->destination . '/' . $temp . ' via ' . @$data[$i]->next_hop);
            }
        }

        // SCSI
        if ((string)$table === 'scsi') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                $data[$i]->name = @$data[$i]->model;
            }
        }

        // SERVER
        if ((string)$table === 'server') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                if (isset($data[$i]->version) and $data[$i]->version !== '' and $data[$i]->type === 'database') {
                    $data[$i]->version_string = get_sql_server_version_string($data[$i]->version);
                }
            }
        }

        // SERVER ITEM
        // Make sure we have a port, as we now use this to match.
        // Blank will not match as the database column is an int with a default of 0
        if ((string)$table === 'server_item') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                if (empty($data[$i]->port)) {
                    $data[$i]->port = 0;
                }
                if (empty($data[$i]->server_id)) {
                    unset($data[$i]->server_id);
                }
            }
        }

        // SERVICE
        if ((string)$table === 'service') {
            foreach ($data as $item => $attributes) {
                $explode = explode('_', $attributes->name);
                $attributes->name = $explode[0];
                unset($explode);
                // Remove any PAExec and Winexe 'services' as these are just the audit script running
                if (strtolower($attributes->name) === 'paexec' or strtolower($attributes->name) === 'winexesvc') {
                    unset($data[$item]);
                }
            }
        }

        // SOFTWARE
        if ((string)$table === 'software') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                if (isset($data[$i]->version) and $data[$i]->version !== '') {
                    $data[$i]->version_padded = version_padded($data[$i]->version);
                } else {
                    $data[$i]->version_padded = '';
                }
                if (!empty($data[$i]->installed_on)) {
                    $date = date_create($data[$i]->installed_on);
                    if (!empty($date)) {
                        $data[$i]->installed_on = date_format($date, "Y-m-d H:i:s");
                    }
                }
            }
        }

        // SOUND
        if ((string)$table === 'sound') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                $data[$i]->name = trim(@$data[$i]->manufacturer . ' ' . @$data[$i]->model);
            }
        }

        // USER
        if ((string)$table === 'user') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                // Ensure we have a keys item.
                //       Should be a JSON array (if populated) or an empty string (if not populated, ie: here).
                // We use an empty string because of existing entries on an upgraded database.
                // If we used an empty JSON array (ie: "[]"), nothing would match and we'd generate a lot of
                //       false positive changes first audit after an upgrade.

                if (empty($data[$i]->keys)) {
                    $data[$i]->keys = '';
                }
            }
        }

        // VIDEO
        if ((string)$table === 'video') {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                $data[$i]->name = trim(@$data[$i]->manufacturer . ' ' . @$data[$i]->model);
            }
        }


        // VIRTUAL MACHINE
        if ((string)$table === 'vm') {
            foreach ($data as $virtual_machine) {
                if (!isset($virtual_machine->group)) {
                    $virtual_machine->group = '';
                }
                if (!isset($virtual_machine->guest_device_id)) {
                    $virtual_machine->guest_device_id = 0;
                }
                if (!isset($virtual_machine->icon)) {
                    $virtual_machine->icon = '';
                }
                if (empty($virtual_machine->vm_ident) and ! empty($virtual_machine->vm_id)) {
                    $virtual_machine->vm_ident = $virtual_machine->vm_id;
                }
                if (!isset($virtual_machine->uuid) or $virtual_machine->uuid === '') {
                    $virtual_machine->uuid = '';
                } else {
                    $sql = "SELECT id, icon FROM devices WHERE LOWER(`uuid`) = LOWER(?) AND status = 'production'";
                    $query = $this->db->query($sql, [$virtual_machine->uuid])->getResult();
                    if (!empty($query)) {
                        foreach ($query as $row) {
                            $virtual_machine->guest_device_id = $row->id;
                            $virtual_machine->icon = $row->icon;
                            $sql = 'UPDATE devices SET devices.vm_server_name = ?, devices.vm_device_id = ? WHERE devices.id = ?';
                            $this->db->query($sql, ["{$device->hostname}", "{$device->id}", $virtual_machine->guest_device_id]);
                        }
                    }
                }
                if (empty($virtual_machine->icon) and !empty($virtual_machine->os)) {
                    if (stripos($virtual_machine->os, 'red hat') !== false) {
                        $virtual_machine->icon = 'redhat';
                    }
                    if (stripos($virtual_machine->os, 'debian') !== false) {
                        $virtual_machine->icon = 'debian';
                    }
                    if (stripos($virtual_machine->os, 'centos') !== false) {
                        $virtual_machine->icon = 'centos';
                    }
                    if (stripos($virtual_machine->os, 'ubuntu') !== false) {
                        $virtual_machine->icon = 'ubuntu';
                    }
                    if (stripos($virtual_machine->os, 'windows') !== false) {
                        $virtual_machine->icon = 'windows';
                    }
                    if (empty($virtual_machine->icon) and stripos($virtual_machine->os, 'linux') !== false) {
                        $virtual_machine->icon = 'linux';
                    }
                }
            }
        }

        // get any existing current rows from the database
        $sql = "SELECT *, '' AS updated FROM `$table` WHERE current = 'y' AND `$table`.`device_id` = ?";
        $query = $this->db->query($sql, [$device->id]);
        // log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
        $db_result = $query->getResult();

        $alert = false;
        if (count($db_result) !== 0) {
            // we have existing items in the database
            // we should raise an alert where required
            $alert = true;
        }
        // get the field list from the table
        $fields = $this->db->getFieldNames($table);

        // ensure we have a filtered array with only single copies of each in $item
        // Also if we have two of the same item, but one has an ampty attribute, keep the non-empty attribute when combining
        $items = array();
        foreach ($data as $data_item) {
            $matched = 'n';
            // loop through them, building up item array
            foreach ($items as $output_key => $output_item) {
                // the matched count is the number of columns in the match_columns array
                // that have equal values in our input items
                $match_count = 0;
                // loop through our match_columns array
                $count = count($match_columns);
                for ($i = 0; $i < $count; $i++) {
                    // and test if the variables match
                    if (isset($data_item->{$match_columns[$i]}) and isset($output_item->{$match_columns[$i]}) and (string)$data_item->{$match_columns[$i]} === (string)$output_item->{$match_columns[$i]}) {
                        // they match so increment the count
                        $match_count++;
                    }
                }
                if ($match_count === (count($match_columns))) {
                    // we have all the same matching items - combine them
                    # NOTE - we use isset and !== '' because if we used empty, 0 would falsely match
                    foreach ($fields as $field) {
                        if ((!isset($output_item->$field) or $output_item->$field === '') and isset($data_item->$field) and $data_item->$field !== '') {
                            $output_item->$field = (string) $data_item->$field;
                        }
                    }
                    $items[$output_key] = $output_item;
                    $matched = 'y';
                }
            }
            if ($matched !== 'y') {
                // no match, add the input item to the item array
                $items[] = $data_item;
            }
        }

        // for each item from the audit
        foreach ($items as $data_item) {
            // set these flags on a per audit item basis
            $flag = 'insert';
            // compare the audit data against the rows from the DB
            foreach ($db_result as $key => $db_item) {
                // check for a match against the columns in $match_columns
                $match_count = 0;
                $count = count($match_columns);
                for ($i = 0; $i < $count; $i++) {
                    if (isset($data_item->{$match_columns[$i]}) and isset($db_item->{$match_columns[$i]}) and (string)$data_item->{$match_columns[$i]} === (string)$db_item->{$match_columns[$i]} and $db_item->updated !== 'y') {
                        $match_count++;
                    }
                }
                if ($match_count === (count($match_columns))) {
                    // UPDATE because all supplied columns match
                    $flag = 'update';
                    $sql = '';
                    // if we have an audit value, replace the DB value
                    foreach ($fields as $field) {
                        if (isset($data_item->$field) and $data_item->$field !== '') {
                            $db_item->$field = (string) $data_item->$field;
                        }
                        $sql .= " `{$table}`.`{$field}` = ? , ";
                    }
                    // remove the trailing characters
                    $sql = substr($sql, 0, -2);
                    // set the last_seen column to the same as in $device (system table)
                    $db_item->last_seen = (string)$device->last_seen;
                    // update all values in the table
                    $sql = "UPDATE `{$table}` SET {$sql} WHERE `{$table}`.`id` = '{$db_item->id}'";

                    // make sure no data is in $data
                    unset($data);
                    // populate $data with the values from the database, combined with those of the audit
                    // this is stored in $fields
                    $temp = array();
                    foreach ($fields as $field) {
                        // $data[] = (string)$db_item->$field;
                        // removed the above cast to string as it prevents NULL from the database being used
                        $temp[] = $db_item->$field;
                    }
                    $query = $this->db->query($sql, $temp);

                    // remove this item from the database array
                    // we will later update the remaining items with current = n
                    // don't deletre it yet as we need to account for multiple items that are the same
                    //    typically in the Windows software listing
                    // unset($db_result[$key]);

                    $db_item->updated = 'y';
                    // set the $id so we can link to this row from graph, etc tables
                    $id = $db_item->id;
                    // stop the loop
                    break;
                } else {
                    // no match - $flag = 'insert' stays unchanged
                }
            }
            // we have looped through the database items
            // INSERT because the $flag is set to insert
            // TODO - rewrite this using the columns as retrieved from the DB table and a $data array
            if ($flag === 'insert') {
                $data_item->device_id  = $device->id;
                $data_item->current  = 'y';
                $data_item->first_seen = (string)$device->last_seen;
                $data_item->last_seen  = (string)$device->last_seen;
                $temp = array();
                $set_fields = '';
                $set_values = '';
                foreach ($data_item as $key => $value) {
                    foreach ($fields as $field) {
                        if ($key === $field) {
                            $set_fields .= " `{$key}`, ";
                            $set_values .= ' ?, ';
                            $temp[] = "{$value}";
                        }
                    }
                }
                $set_fields = substr($set_fields, 0, -2);
                $set_values = substr($set_values, 0, -2);
                $sql = "INSERT INTO `{$table}` ( {$set_fields} ) VALUES ( {$set_values} ) ";
                $query = $this->db->query($sql, $temp);
                $id = $this->db->insertID();
                // log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));

                // these are our special rules - currently only for netstat
                $special = true;
                if ($table === 'netstat') {
                    if (!empty($instance->config->create_change_log_netstat_well_known) and $instance->config->create_change_log_netstat_well_known === 'n' and isset($data_item->port) and intval($data_item->port) < 1024) {
                        $special = false;
                    }
                    if (!empty($instance->config->create_change_log_netstat_registered) and $instance->config->create_change_log_netstat_registered === 'n' and isset($data_item->port) and intval($data_item->port) > 1023 and intval($data_item->port) < 49152) {
                        $special = false;
                    }
                    if (!empty($instance->config->create_change_log_netstat_dynamic) and $instance->config->create_change_log_netstat_dynamic === 'n' and isset($data_item->port) and intval($data_item->port) > 49151) {
                        $special = false;
                    }
                }

                if ($alert and $create_change_log and $special) {
                    // We have existing items and this is a new item - raise an alert
                    $alert_details = '';
                    foreach ($match_columns as $key => $value) {
                        if (!empty($data_item->$value)) {
                            $log_value = $data_item->$value;
                            if ($value === 'ip') {
                                $log_value = @ip_address_from_db($data_item->$value);
                            }
                            $alert_details .= $value . ' is ' . $log_value . ', ';
                        }
                    }
                    $alert_details = substr($alert_details, 0, -2);
                    $alert_details = "Item added to {$table} - {$alert_details}";
                    $sql = 'INSERT INTO change_log (device_id, db_table, db_row, db_action, details, `timestamp`, `notes`) VALUES (?, ?, ?, ?, ?, ?, "")';
                    $query = $this->db->query($sql, [intval($device->id), "{$table}", intval($id), 'create', "{$alert_details}", "{$device->last_seen}"]);
                    // add a count to our chart table
                    $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), '{$table}_create', " . intval($device->org_id) . ', 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1';
                    $query = $this->db->query($sql);
                }
            }
            if ((string)$table === 'partition') {
                // insert an entry into the graph table
                if (!isset($data_item->used) or $data_item->used === '') {
                    $data_item->used = 0;
                }
                if (!isset($data_item->free) or $data_item->free === '') {
                    $data_item->free = 0;
                }
                $used_percent = 0;
                $free_percent = 0;
                if (!empty($data_item->used) and !empty($data_item->size)) {
                    $used_percent = @intval(($data_item->used / $data_item->size) * 100);
                    $free_percent = @intval(100 - $used_percent);
                }
                $sql = 'INSERT INTO graph VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
                $query = $this->db->query($sql, [intval($device->org_id), intval($device->id), "{$table}", intval($id), "{$table}", intval($used_percent), intval($free_percent), intval($data_item->used), intval($data_item->free), intval($data_item->size), "{$device->last_seen}"]);
            }
        }

        // remove the duplicated DB_items
        foreach ($db_result as $key => $db_item) {
            if ($db_item->updated) {
                unset($db_result[$key]);
            }
        }

        // Global
        if (!empty($instance->config->delete_noncurrent) and strtolower($instance->config->delete_noncurrent) === 'y') {
            $id_array = array();
            foreach ($db_result as $key => $value) {
                if (!empty($value->id)) {
                    $id_array[] = intval($value->id);
                }
                unset($db_result[$key]);
            }
            $in_ids = implode(',', $id_array);
            if (!empty($in_ids)) {
                $sql = "DELETE FROM `{$table}` WHERE `id` IN ({$in_ids})";
                $query = $this->db->query($sql);
            }
            return true;
        }
        // Individual table
        if (!empty($instance->config->{'delete_noncurrent_' . $table}) and strtolower($instance->config->{'delete_noncurrent_' . $table}) === 'y') {
            $id_array = array();
            foreach ($db_result as $key => $value) {
                if (!empty($value->id)) {
                    $id_array[] = intval($value->id);
                }
                unset($db_result[$key]);
            }
            $in_ids = implode(',', $id_array);
            if (!empty($in_ids)) {
                $sql = "DELETE FROM `{$table}` WHERE `id` IN ({$in_ids})";
                $query = $this->db->query($sql);
            }
            return true;
        }

        // we have now inserted or updated all items in the audit set
        // we have also unset any items that were inserted (from the audit set above) from the db set
        // any remaining rows in the db set should have their current flag set to n as they were not found in the audit set
        if (count($db_result) > 0 and $alert and $create_change_log) {
            // $log->message = 'Inserting change logs (' . $table . ') for '.@ip_address_from_db($device->ip).' ('.$name.')';
            // $log->severity = 7;
            // $log->command_status = 'notice';
            // discovery_log($log);
        }

        foreach ($db_result as $db_item) {
            $sql = "UPDATE `{$table}` SET current = 'n' WHERE id = ?";
            $query = $this->db->query($sql, [$db_item->id]);

            // these are our special rules - currently only for netstat
            $special = true;
            if ($table === 'netstat') {
                if (!empty($instance->config->create_change_log_netstat_well_known) and $instance->config->create_change_log_netstat_well_known === 'n' and isset($db_item->port) and intval($db_item->port) < 1024) {
                    $special = false;
                }
                if (!empty($instance->config->create_change_log_netstat_registered) and $instance->config->create_change_log_netstat_registered === 'n' and isset($db_item->port) and intval($db_item->port) > 1023 and intval($db_item->port < 49152)) {
                    $special = false;
                }
                if (!empty($instance->config->create_change_log_netstat_dynamic) and $instance->config->create_change_log_netstat_dynamic === 'n' and isset($db_item->port) and intval($db_item->port) > 49151) {
                    $special = false;
                }
            }

            if ($alert and $create_change_log and $special) {
                $alert_details = '';
                foreach ($match_columns as $key => $value) {
                    if (!empty($db_item->$value)) {
                        $log_value = $db_item->$value;
                        if ($value === 'ip') {
                            $log_value = @ip_address_from_db($db_item->$value);
                        }
                        $alert_details .= $value . ' is ' . $log_value . ', ';
                    }
                }
                $alert_details = substr($alert_details, 0, -2);
                $alert_details = "Item removed from {$table} - {$alert_details}";
                $sql = 'INSERT INTO change_log (device_id, db_table, db_row, db_action, details, `timestamp`, `notes`) VALUES (?, ?, ?, ?, ?, ?, "")';
                $query = $this->db->query($sql, [intval($device->id), "{$table}", intval($db_item->id), 'delete', "{$alert_details}", "{$device->last_seen}"]);
                // add a count to our chart table
                $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), '{$table}_delete', " . intval($device->org_id) . ', 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1';
                $query = $this->db->query($sql);
            }
        }
        return true;
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = '';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array();
        $dictionary->attributes->create = array();
        $dictionary->attributes->fields = array();
        $dictionary->attributes->fieldsMeta = array();
        $dictionary->attributes->update = array();

        $dictionary->about = '<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, bios, certificate, disk, dns, file, ip, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>';

        $dictionary->notes = '<p></p>';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->resource = 'The foreign table to reference. Should be one of: devices, locations, orgs or queries.';
        $dictionary->columns->type = 'The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.';
        $dictionary->columns->name = 'The text that is displayed.';
        $dictionary->columns->value = 'The value that is stored for this particular item.';
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
