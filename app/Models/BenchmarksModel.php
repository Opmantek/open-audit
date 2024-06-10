<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use \stdClass;

use \Config\Services;

use phpseclib3\Crypt\PublicKeyLoader;
use phpseclib3\Crypt\RSA;
use phpseclib3\Net\SFTP;
use phpseclib3\Net\SSH2;

use Masterminds\HTML5;

class BenchmarksModel extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('benchmarks');
        # Use the below to execute BaseModel::__construct
        # parent::__construct();
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
        $properties = $resp->meta->properties;
        $properties[] = "orgs.name as `orgs.name`";
        $properties[] = "orgs.id as `orgs.id`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            }
            if (!in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<'])) {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->orderBy($resp->meta->sort);
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), $resp->meta->collection);
    }

    /**
     * Create an individual item in the database
     *
     * @param  object|null $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create(object $data = null): ?int
    {
        $instance = & get_instance();
        if (empty($data)) {
            return null;
        }
        $day_of_week = implode(',', $data->day_of_week);
        $hour = implode(',', $data->hour);
        if (!empty($data->devices)) {
            $temp = array();
            if (is_string($data->devices)) {
                $data->devices = explode(',', $data->devices);
            }
            foreach ($data->devices as $device_id) {
                $device_id = intval($device_id);
                if (!empty($device_id)) {
                    $temp[] = $device_id;
                }
            }
            $data->devices = json_encode($temp);
        }
        $data = $this->createFieldData('benchmarks', $data);
        if (empty($data)) {
            return null;
        }
        $this->builder->insert($data);
        $error = $this->sqlError($this->db->error());
        if ($error) {
            session()->setFlashdata('error', json_encode($error));
            return null;
        }
        $id = intval($this->db->insertID());
        if (empty($id)) {
            return false;
        }
        $sql = "INSERT INTO tasks VALUES (null, ?, ?, ?, ?, ?, 'y', 'benchmarks', 0, ?, '*', '*', ?, 0, 0, '2000-01-01 00:00:00', '2000-01-01 00:00:00', '', '', 0, ?, NOW())";
        $this->db->query($sql, ['Benchmark - ' . $data->name, $data->org_id, 'Scheduled Benchmark', $id, $instance->config->uuid, $hour, $day_of_week, $instance->user->name]);

        return ($id);
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int     $id The ID of the requested item
     * @param  bool    Not used. Only present so we are compatible with CodeIgniter\BaseModel::delete
     *
     * @return bool    true || false depending on success
     */
    public function delete($id = null, bool $purge = false): bool
    {
        $this->builder->delete(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        if ($this->db->affectedRows() !== 1) {
            return false;
        }
        $sql = "DELETE FROM tasks WHERE sub_resource_id = ? and type = 'benchmarks'";
        $this->db->query($sql, [$id]);
        $sql = "DELETE FROM benchmarks_result WHERE benchmark_id = ?";
        $this->db->query($sql, [$id]);
        $sql = "DELETE FROM benchmarks_exception WHERE benchmark_id = ?";
        $this->db->query($sql, [$id]);
        return true;
    }

    public function queue($details): array
    {
        if (empty($details) or empty($details->id)) {
            return [];
        }
        $benchmark = $this->read($details->id)[0];
        if (empty($benchmark)) {
            return [];
        }
        if (empty($details->device)) {
            $instance = & get_instance();
            $queueModel = model('App\Models\QueueModel');
            $devices = json_decode($benchmark->attributes->devices);
            if (empty($devices)) {
                return [];
            }
            for ($i=0; $i < count($devices); $i++) { 
                $devices[$i] = intval($devices[$i]);
            }
            // Only select devices in the list, that have credentials, that have been discovered by this server (collector)
            $sql = "SELECT id, name, os_family, os_version, collector_uuid FROM devices WHERE id IN (" . implode(',', $devices) . ") and credentials != '' and credentials != '[]' and (collector_uuid = '' or collector_uuid = ?)";
            #$sql = "SELECT id, name, os_family, os_version, collector_uuid FROM devices WHERE id IN (" . implode(',', $devices) . ")";
            $my_devices = $this->db->query($sql, [$instance->config->uuid])->getResult();
            if (empty($my_devices)) {
                log_message('warning', 'No suitable devices in database, associated with benchmark.');
            }
            foreach ($my_devices as $device) {
                $queue = new stdClass();
                $queue->type = 'benchmarks';
                $queue->org_id = $benchmark->attributes->org_id;
                $queue->details = new stdClass();
                $queue->details->id = $details->id;
                $queue->details->device = $device->id;
                $queueModel->create($queue);
            }
        }
        if (!empty($details->device)) {
            $this->execute(intval($details->id), intval($details->device));
        }
        return [];
    }

    public function execute(int $id = 0, int $device_id = 0): array
    {
        if (empty($id) or empty($device_id)) {
            log_message('error', 'Either no benchmark ID or device ID supplied to BenchmarksModel::execute.');
            return [];
        }
        $benchmark = $this->read($id)[0];
        if (empty($benchmark)) {
            log_message('error', 'Invalid benchmark ID supplied to BenchmarksModel::execute.');
            return [];
        }
        $instance = & get_instance();
        // Delete any existing logs
        $sql = "DELETE FROM benchmarks_log WHERE benchmark_id = ? and device_id = ?";
        $this->db->query($sql, [$id, $device_id]);

        $this->logCreate($id, $device_id, 'info', 'Starting.');

        $devicesModel = model('App\Models\DevicesModel');
        $device = $devicesModel->read($device_id)[0];

        if (empty($device)) {
            log_message('error', 'Invalid device ID supplied to BenchmarksModel::execute.');
            $this->logCreate($id, $device_id, 'error', 'Invalid device ID supplied, ' . $device_id . '.');
            return [];
        }
        if (empty($device->attributes->credentials)) {
            log_message('error', 'Device contains no credentials for BenchmarksModel::execute.');
            $this->logCreate($id, $device_id, 'error', 'Device contains no credentials.');
            return [];
        }
        $credentials = json_decode($device->attributes->credentials);
        if (empty($credentials)) {
            log_message('error', 'Cannot decode credentials for BenchmarksModel::execute.');
            $this->logCreate($id, $device_id, 'error', 'Cannot decode credentials.');
            return [];
        }
        $credentialsModel = model('App\Models\CredentialsModel');
        foreach ($credentials as $credential) {
            $retrieved_credentials = $credentialsModel->read($credential)[0];
            if ($retrieved_credentials->attributes->type === 'ssh' or $retrieved_credentials->attributes->type = 'ssh_key') {
                continue;
            }
        }
        if (empty($retrieved_credentials)) {
            log_message('error', 'Device contains no suitable credentials for BenchmarksModel::execute.');
            $this->logCreate($id, $device_id, 'error', 'Device contains no suitable credentials.');
            return [];
        }

        helper('ssh');
        $parameters = new \stdClass();
        $parameters->ip = $device->attributes->ip;
        $parameters->credentials = $retrieved_credentials->attributes;
        $parameters->command = 'oscap version 2>/dev/null';
        $output = ssh_command($parameters);
        if ($output === false) {
            log_message('error', 'SSH command failed for BenchmarksModel::execute on ' . $device->attributes->ip . '. Command: ' . $parameters->command);
            $this->logCreate($id, $device_id, 'error', 'SSH command failed. Command: ' . $parameters->command . ' (see logfile for more info).');
            return [];
        }
        if (empty($output)) {
            if ($benchmark->attributes->install === 'y') {
                $this->logCreate($id, $device_id, 'info', 'OpenScap is not installed, installing.');
                if (stripos($device->attributes->os_name, 'debian') !== false) {
                    $command = 'apt-get install -y openscap-scanner';
                    if ($retrieved_credentials->attributes->credentials->username !== 'root') {
                        $command = 'sudo ' . $command;
                    }
                }
                if (stripos($device->attributes->os_name, 'ubuntu') !== false) {
                    $command = 'apt-get install -y openscap-scanner';
                    if ($retrieved_credentials->attributes->credentials->username !== 'root') {
                        $command = 'sudo ' . $command;
                    }
                }
                if (stripos($device->attributes->os_name, 'redhat') !== false or stripos($device->attributes->os_name, 'red hat') !== false or 
                    stripos($device->attributes->os_name, 'centos') !== false or
                    stripos($device->attributes->os_name, 'oracle') !== false) {
                    $command = 'dnf install -y openscap-scanner';
                    if ($retrieved_credentials->attributes->credentials->username !== 'root') {
                        $command = 'sudo ' . $command;
                    }
                }
                if (stripos($device->attributes->os_name, 'suse') !== false) {
                    $command = 'zypper install -y openscap-scanner';
                    if ($retrieved_credentials->attributes->credentials->username !== 'root') {
                        $command = 'sudo ' . $command;
                    }
                }
                $this->logCreate($id, $device_id, 'info', $command);
                log_message('info', $command);
                $parameters->command = $command;
                $output = ssh_command($parameters);
                log_message('debug', json_encode($output));
                $this->logCreate($id, $device_id, 'info', 'OpenScap has now been installed.');
            } else {
                $this->logCreate($id, $device_id, 'info', 'OpenScap is not installed, not installing, as per config.');
            }
        } else {
            $this->logCreate($id, $device_id, 'info', 'OpenScap is already installed.');
        }
        helper('ssg');
        $definitions = ssg_definitions();
        $os = explode(' ', $benchmark->attributes->os);
        foreach ($definitions as $definition) {
            if ($definition->title === $benchmark->attributes->type and $definition->os_family === $os[0] and intval($definition->os_version) === intval($os[1])) {
                $file = $definition->file;
                $profile = $definition->benchmark;
            }
        }
        if (empty($file) or empty($profile)) {
            log_message('error', 'Failure, Could not derive benchmark for ' . $device->attributes->ip . ' from ' . $benchmark->attributes->type . ' and ' . $benchmark->attributes->os);
            $this->logCreate($id, $device_id, 'error', 'Could not derive benchmark from ' . $benchmark->attributes->type . ' and ' . $benchmark->attributes->os);
            return [];
        }
        $parameters->source = '/usr/local/open-audit/other/ssg-definitions/' . $file;
        $parameters->destination = $file;
        $output = scp($parameters);
        if ($output === false) {
            $this->logCreate($id, $device_id, 'error', 'SCP issue running BenchmarksModel::execute on ' . $device->attributes->ip);
            log_message('error', 'SCP issue copying ' . $parameters->source . ' to ' . $parameters->destination . ' (see logfile for more info).');
            return [];
        }

        $this->logCreate($id, $device_id, 'info', 'Defnition file copied to ' . $device->attributes->name . '.');
        $parameters->command = 'cd ~/; oscap xccdf eval --profile ' . $profile . ' --report report.html ' . $file;
        log_message('info', 'oscap command: ' . $parameters->command);
        $this->logCreate($id, $device_id, 'info', 'oscap command: ' . $parameters->command);
        $output = ssh_command($parameters);
        if ($output === false) {
            log_message('error', 'Could not execute osacp for BenchmarksModel::execute on ' . $device->attributes->ip);
            $this->logCreate($id, $device_id, 'error', 'Could not execute oscap (see logfile for more info).');
            return [];
        }
        log_message('debug', 'oscap command completed.');
        $this->logCreate($id, $device_id, 'info', 'oscap command completed.');
        log_message('debug', json_encode($output));
        $parameters->source = 'report.html';
        $parameters->destination = '/usr/local/open-audit/other/ssg-results/' . $device_id . '_' . $id .  '_report.html';
        $output = scp_get($parameters);
        if ($output === false) {
            log_message('error', 'Could not retrieve report for BenchmarksModel::execute on ' . $device->attributes->ip);
            $this->logCreate($id, $device_id, 'error', 'Could not retrieve report (see logfile for more info).');
            return [];
        }
        $this->logCreate($id, $device_id, 'info', 'Report file retrieved.');







        try {
            $qp = html5qp('/usr/local/open-audit/other/ssg-results/' . $device_id . '_' . $id .  '_report.html');
        } catch (\QueryPath\Exception $e) {
            log_message('error', 'Cannot process report file. ' . $e);
            $this->logCreate($id, $device_id, 'error', 'Cannot process report file. Error: ' . $e);
        }

        $this->logCreate($id, $device_id, 'info', 'Processing report file.');
        log_message('debug', 'Processing report file for ' . $device->attributes->name);

        // Get any existing policies so we can either insert or update them
        $sql = "SELECT * from benchmarks_policies";
        $policies = $this->db->query($sql)->getResult();

        // Delete any existing results
        $sql = "DELETE  from benchmarks_result WHERE benchmark_id = ? AND device_id = ?";
        $this->db->query($sql, [$id, $device_id]);

        $benchmark = $qp->find('h2')->next()->find('mark')->text();
        $i = 0;
        $insert = 0;
        $update = 0;
        foreach ($qp->find('tr.rule-overview-leaf') as $item) {
            $result = new stdClass();
            $result->benchmark = $benchmark;
            $result->external_ident = $item->attr('data-tt-id');
            foreach ($item->children() as $child) {
                foreach ($child->children() as $temp) {
                    if (!empty($temp->attr('href'))) {
                        $result->id = $temp->attr('href');
                        $result->id = str_replace('#rule-detail-', '', $result->id);
                        $result->name = $temp->text();
                    }
                }
                if ($child->hasClass('rule-severity')) {
                    $result->severity = $child->text();
                }
                if ($child->hasClass('rule-result')) {
                    $result->result = $child->text();
                }
            }
            if (!empty($result->id)) {
                $result->description = trim($qp->find('div[id="rule-detail-' . $result->id . '"]')->find('div.description')->innerhtml());
                $result->rationale = trim($qp->find('div[id="rule-detail-' . $result->id . '"]')->find('div.rationale')->innerhtml());
                $result->remediation_ansible = '';
                $result->remediation_bash = '';

                $result->remediation = array();
                foreach ($qp->find('div[id="rule-detail-' . $result->id . '"]')->find('div.remediation') as $remediation) {
                    $contents = $remediation->find('pre')->innerhtml();
                    $contents = '<pre>' . @trim($contents) . '</pre>';
                    $result->remediation[] = $contents;
                }
                $result->remediation = json_encode($result->remediation);

                $sql = "INSERT INTO benchmarks_result VALUES (null, ?, 'y', ?, ?, ?, ?, ?)";
                $this->db->query($sql, [$device_id, $instance->config->timestamp, $instance->config->timestamp, $id, $result->external_ident, $result->result]);

                $exists = false;
                foreach ($policies as $policy) {
                    if ($result->external_ident === $policy->external_ident) {
                        $exists = true;
                        if (empty($policy->description) or empty($policy->rationale) or empty($policy->remediation) or $policy->remediation === '[]') {
                            // Update (something)
                            $update += 1;
                            if (empty($policy->description) and !empty($result->description)) {
                                log_message('debug', 'Updating benchmark policy ' . $result->external_ident . ' description from ' . $device->attributes->name);
                                log_message('debug', json_encode($policy));
                                $sql = "UPDATE benchmarks_policies SET description = ? WHERE external_ident = ?";
                                $this->db->query($sql, [$result->description]);
                            }
                            if (empty($policy->rationale) and !empty($result->rationale)) {
                                log_message('debug', 'Updating benchmark policy ' . $result->external_ident . ' rationale from ' . $device->attributes->name);
                                log_message('debug', json_encode($policy));
                                $sql = "UPDATE benchmarks_policies SET rationale = ? WHERE external_ident = ?";
                                $this->db->query($sql, [$result->rationale]);
                            }
                            if ((empty($policy->remediation) or $policy->remediation === '[]') and !empty($result->remediation) and $result->remediation !== '[]') {
                                log_message('debug', 'Updating benchmark policy ' . $result->external_ident . ' remediation from ' . $device->attributes->name);
                                log_message('debug', json_encode($policy));
                                $sql = "UPDATE benchmarks_policies SET remediation = ? WHERE external_ident = ?";
                                $this->db->query($sql, [$result->remediation]);
                            }
                            continue;
                        }
                    }
                }
                if ($exists === false) {
                    // Insert
                    $insert += 1;
                    log_message('debug', 'Inserting benchmark policy ' . $result->external_ident . ' from ' . $device->attributes->name);
                    $sql = "INSERT INTO benchmarks_policies VALUES (NULL, ?, ?, ?, ?, ?, ?, '', '')";
                    $this->db->query($sql, [$result->external_ident, $result->name, $result->severity, $result->description, $result->rationale, $result->remediation]);
                }
            }
        }
        $this->logCreate($id, $device_id, 'info', 'Processing report file completed. ' . $insert . ' inserted and ' . $update . ' updated policies.');
        $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false)/1024/1024), 3) . ' MiB');
        log_message('debug', 'Processing report file for ' . $device->attributes->name . ' completed. ' . $insert . ' inserted and ' . $update . ' updated policies.');
        log_message('debug', 'Memory: ' . round((memory_get_peak_usage(false)/1024/1024), 3) . ' MiB');
        return[];
    }

    /**
     * Insert an entry into the benchmarks_log table
     *
     * @param int    $id The Benchmark ID
     * @param int    $device_id The Device ID
     * @param string $severity One of 'debug','info','notice','warning','error','critical','alert','emergency'
     * @param string $message The log line
     * @param string $output An optional command or other output
     * @return null
     */
    public function logCreate(int $benchmark_id, int $device_id, string $severity = 'info', string $message = '', string $output = '')
    {
        $sql = "INSERT INTO benchmarks_log VALUES (null, ?, ?, now(), ?, ?, ?)";
        $this->db->query($sql, [$benchmark_id, $device_id, $severity, $message, $output]);
        return;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $included = array();
        $benchmark = $this->read($id);
        $sql = "SELECT benchmarks_result.*, GROUP_CONCAT(benchmarks_result.device_id), count(benchmarks_result.id) AS `count`, benchmarks_policies.name, benchmarks_policies.severity FROM benchmarks_result LEFT JOIN benchmarks_policies ON (benchmarks_result.external_ident = benchmarks_policies.external_ident) WHERE benchmarks_result.benchmark_id = 16 GROUP BY CONCAT(benchmarks_result.external_ident, benchmarks_result.result) ORDER BY benchmarks_result.external_ident";
        $rows = $this->db->query($sql, [$id])->getResult();
        $result = array();
        foreach ($rows as $row) {
            $row->{$row->result} = $row->count;
            if (empty($result[$row->external_ident])) {
                $result[$row->external_ident] = $row;
            } else {
                $result[$row->external_ident]->{$row->result} = $row->count;
            }
        }
        $included['policies'] = $result;
        # $sql = "SELECT devices.id, devices.name, devices.ip, devices.os_family, devices.os_version, devices.credentials AS `devices.credentials`, software.name AS `software.name`, software.version AS `software.version`, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, c1.type AS `c1.type`, c2.type AS `c2.type`, c3.type AS `c3.type`, benchmarks_result.benchmark_id FROM devices LEFT JOIN `software` ON (devices.id = software.device_id AND software.name = 'openscap-scanner' AND software.current = 'y') LEFT JOIN `orgs` ON (devices.org_id = orgs.id) LEFT JOIN credentials c1 ON (JSON_EXTRACT(devices.credentials, \"\$[0]\") = c1.id) LEFT JOIN credentials c2 ON (JSON_EXTRACT(devices.credentials, \"\$[1]\") = c2.id) LEFT JOIN credentials c3 ON (JSON_EXTRACT(devices.credentials, \"\$[2]\") = c3.id) LEFT JOIN benchmarks_result ON (devices.id = benchmarks_result.device_id) WHERE devices.os_family LIKE 'OSFAMILY' AND devices.os_version LIKE 'OSVERSION%' GROUP BY devices.id";
        $sql = "SELECT devices.id, devices.name, devices.ip, devices.os_family, devices.os_version, devices.credentials AS `devices.credentials`, software.name AS `software.name`, software.version AS `software.version`, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, c1.type AS `c1.type`, c2.type AS `c2.type`, c3.type AS `c3.type` FROM devices LEFT JOIN `software` ON (devices.id = software.device_id AND software.name = 'openscap-scanner' AND software.current = 'y') LEFT JOIN `orgs` ON (devices.org_id = orgs.id) LEFT JOIN credentials c1 ON (JSON_EXTRACT(devices.credentials, \"\$[0]\") = c1.id) LEFT JOIN credentials c2 ON (JSON_EXTRACT(devices.credentials, \"\$[1]\") = c2.id) LEFT JOIN credentials c3 ON (JSON_EXTRACT(devices.credentials, \"\$[2]\") = c3.id) WHERE devices.os_family LIKE 'OSFAMILY' AND devices.os_version LIKE 'OSVERSION%' GROUP BY devices.id";
        $os = explode(' ', $benchmark[0]->attributes->os);
        $sql = str_replace('OSFAMILY', $os[0], $sql);
        $sql = str_replace('OSVERSION', $os[1], $sql);
        $devices = $this->db->query($sql, [$id])->getResult();
        foreach ($devices as $device) {
            $device->credentials = 'n';
            if (stripos((string)$device->{'c1.type'}, 'ssh') !== false or stripos((string)$device->{'c2.type'}, 'ssh') !== false or stripos((string)$device->{'c3.type'}, 'ssh') !== false) {
                $device->credentials = 'y';
            }
        }
        $included['devices'] = $devices;
        $sql = "SELECT * FROM tasks WHERE type = 'benchmarks' and sub_resource_id = ? LIMIT 1";
        $tasks = $this->db->query($sql, [$id])->getResult();
        $included['task'] = '';
        if (!empty($tasks[0])) {
            $included['task'] = $tasks[0];
        }

        $included['logs'] = array();
        $sql = 'SELECT benchmarks_log.*, devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip` FROM benchmarks_log LEFT JOIN devices ON (benchmarks_log.device_id = devices.id) WHERE benchmarks_log.benchmark_id = ?';
        $included['logs'] = $this->db->query($sql, [$id])->getResult();

        for ($i=0; $i < count($included['logs']); $i++) { 
            $included['logs'][$i]->{'devices.ip'} = ip_address_from_db($included['logs'][$i]->{'devices.ip'});
        }

        return $included;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedCreateForm(int $id = 0): array
    {
        $included = array();
        helper('ssg');
        $included['ssg_definitions'] = ssg_definitions();
        $sql = "SELECT * FROM queries WHERE name = ? ORDER BY id LIMIT 1";
        $query = $this->db->query($sql, ['Benchmarks Query'])->getResult();
        $included['query'] = intval($query[0]->id);

        return $included;
    }


    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        if (empty($orgs)) {
            $instance = & get_instance();
            $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
            $orgs = array_unique(array_merge($orgs, $instance->orgsModel->getUserAscendants($instance->user->orgs, $instance->orgs)));
            $orgs[] = 1;
            $orgs = array_unique($orgs);
        }

        $properties = array();
        $properties[] = 'benchmarks.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'benchmarks.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'benchmarks');
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
        $query = $this->builder->getWhere(['id' => $id]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'benchmarks');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        return true;
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
        // Accept our client data
        $data = $this->updateFieldData('benchmarks', $data);
        # $data->blah = 123; # Our bad record for testing failing
        // And update the record
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
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

        $collection = 'benchmarks';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'type', 'os', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','type'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Open-AudIT enables you to compare your installed operating system\'s configuration to Best Practise standards.';

        $dictionary->about = '<p>What I find remarkable is that this text has been the industry\'s standard dummy text ever since some printer in the 1500s took a galley of type and scrambled it to make a type specimen book; it has survived not only four centuries of letter-by-letter resetting but even the leap into electronic typesetting, essentially unchanged except for an occasional \'ing\' or \'y\' thrown in. It\'s ironic that when the then-understood Latin was scrambled, it became as incomprehensible as Greek; the phrase \'it\'s Greek to me\' and \'greeking\' have common semantic roots” (The editors published his letter in a correction headlined “Lorem Oopsum”)</p>';

        $dictionary->notes = '<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>';

        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->os = 'Which OS this benchmark applies to.';
        $dictionary->columns->type = 'The benchmark type.';
        $dictionary->columns->install = 'Should we install Open-Scap on the target machine.';
        $dictionary->columns->devices = '';
        $dictionary->columns->remediation = '';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
