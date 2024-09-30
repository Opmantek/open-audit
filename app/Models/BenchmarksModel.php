<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;
use Config\Services;
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
        return null;
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
        // $sql = "DELETE FROM benchmarks_exceptions WHERE benchmark_id = ?";
        // $this->db->query($sql, [$id]);
        return true;
    }

    public function queue(int $id = 0): bool
    {
        $item = $this->read($id)[0];
        if (empty($item)) {
            log_message('error', "No benchmark retrieved with provided ID $id.");
            return false;
        }
        $sql = "UPDATE benchmarks SET last_run = NOW() WHERE id = ?";
        $this->db->query($sql, [$id]);
        if (empty($item->attributes->devices)) {
            log_message('error', "No devices associated with benchmark ID $id.");
            #$this->logCreate($id, 0, 'error', 'No devices associated with benchmark.');
            #$this->logCreate($id, 0, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
            return false;
        }
        try {
            $devices = json_decode($item->attributes->devices, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            return false;
        }
        for ($i = 0; $i < count($devices); $i++) {
            $devices[$i] = intval($devices[$i]);
        }
        // Only select devices in the list, that have credentials, that have been discovered by this server /collector
        $config = new \Config\OpenAudit();
        $queueModel = model('App\Models\QueueModel');
        $sql = "SELECT id, name, os_family, os_version, collector_uuid FROM devices WHERE id IN (" . implode(',', $devices) . ") and credentials != '' and credentials != '[]' and (collector_uuid = '' or collector_uuid = ?)";
        $my_devices = $this->db->query($sql, [$config->uuid])->getResult();
        if (empty($my_devices)) {
            log_message('error', "No suitable devices in database, associated with benchmark.");
            #$this->logCreate($id, 0, 'error', 'No suitable devices in database, associated with benchmark.');
            #$this->logCreate($id, 0, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
            return false;
        }
        foreach ($my_devices as $device) {
            $queue = new stdClass();
            $queue->type = 'benchmarks';
            $queue->org_id = $item->attributes->org_id;
            $queue->details = new stdClass();
            $queue->details->id = $id;
            $queue->details->device_id = $device->id;
            $queueModel->create($queue);
        }
        return true;
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
        $config = new \Config\OpenAudit();

        // Delete any existing logs
        $sql = "DELETE FROM benchmarks_log WHERE benchmark_id = ? and device_id = ?";
        $this->db->query($sql, [$id, $device_id]);

        $this->logCreate($id, $device_id, 'info', 'Starting.');

        $devicesModel = model('App\Models\DevicesModel');
        $device = $devicesModel->read($device_id)[0];

        if (empty($device)) {
            log_message('error', 'Invalid device ID supplied to BenchmarksModel::execute. Supplied: ' . $device_id);
            $this->logCreate($id, $device_id, 'error', 'Invalid device ID supplied, ' . $device_id . '.');
            $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
            return [];
        }
        if (empty($device->attributes->credentials)) {
            log_message('error', 'Device contains no credentials for BenchmarksModel::execute from ' . $device->attributes->name);
            $this->logCreate($id, $device_id, 'error', 'Device contains no credentials.');
            $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
            return [];
        }
        try {
            $credentials = json_decode($device->attributes->credentials, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            log_message('error', 'Cannot decode credentials for BenchmarksModel::execute from ' . $device->attributes->name);
            $this->logCreate($id, $device_id, 'error', 'Cannot decode credentials.');
            $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
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
            log_message('error', 'Device contains no suitable credentials for BenchmarksModel::execute from ' . $device->attributes->name);
            $this->logCreate($id, $device_id, 'error', 'Device contains no suitable credentials.');
            $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
            return [];
        }

        helper('ssh');
        $parameters = new \stdClass();
        $parameters->ip = $device->attributes->ip;
        $parameters->credentials = $retrieved_credentials->attributes;
        $parameters->command = 'oscap version 2>/dev/null';
        $parameters->timeout = 20; // 20 seconds to run oscap or fail silently (is not installed)
        $output = ssh_command($parameters);
        if ($output === false) {
            log_message('error', 'SSH command failed for BenchmarksModel::execute on ' . $device->attributes->name . '. Command: ' . $parameters->command);
            $this->logCreate($id, $device_id, 'error', 'SSH command failed. Command: ' . $parameters->command . ' (see logfile for more info).');
            $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
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
                    $command = 'apt-get install -y libopenscap8';
                    if ($retrieved_credentials->attributes->credentials->username !== 'root') {
                        $command = 'sudo ' . $command;
                    }
                }
                if (
                    stripos($device->attributes->os_name, 'redhat') !== false or
                    stripos($device->attributes->os_name, 'red hat') !== false or
                    stripos($device->attributes->os_name, 'rhel') !== false or
                    stripos($device->attributes->os_name, 'centos') !== false or
                    stripos($device->attributes->os_name, 'oracle') !== false
                ) {
                    $command = 'yum install -y openscap-scanner';
                    if ($retrieved_credentials->attributes->credentials->username !== 'root') {
                        $command = 'sudo ' . $command;
                    }
                }
                if (stripos($device->attributes->os_name, 'suse') !== false) {
                    $command = 'zypper install -y openscap openscap-utils';
                    if ($retrieved_credentials->attributes->credentials->username !== 'root') {
                        $command = 'sudo ' . $command;
                    }
                }
                $this->logCreate($id, $device_id, 'info', $command);
                log_message('debug', $command . ' run on ' . $device->attributes->name);
                $parameters->command = $command;
                $parameters->timeout = 120; // 2 minutes to install openscap-scanner, et al
                $output = ssh_command($parameters);
                if ($output === false) {
                    $this->logCreate($id, $device_id, 'warning', 'SSH command to install openscap failed, please check log file.');
                    $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
                    return [];
                }
                // Now check it has actually been installed
                $parameters->command = 'oscap version 2>/dev/null';
                $parameters->timeout = 20; // 20 seconds to run oscap or fail silently (is not installed)
                $output = ssh_command($parameters);
                if ($output === false) {
                    log_message('error', 'SSH command failed for BenchmarksModel::execute on ' . $device->attributes->name . '. Command: ' . $parameters->command);
                    $this->logCreate($id, $device_id, 'error', 'SSH command failed. Command: ' . $parameters->command . ' (see logfile for more info).');
                    $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
                    return [];
                }
                if (empty($output)) {
                    log_message('error', 'Could not install openscap on ' . $device->attributes->name . '. Command: ' . $parameters->command);
                    $this->logCreate($id, $device_id, 'warning', 'SSH command to install openscap failed, please check log file.');
                    $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
                    return [];
                }
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
            log_message('error', 'Failure, Could not derive benchmark for ' . $device->attributes->name . ' from ' . $benchmark->attributes->type . ' and ' . $benchmark->attributes->os);
            $this->logCreate($id, $device_id, 'error', 'Could not derive benchmark from ' . $benchmark->attributes->type . ' and ' . $benchmark->attributes->os);
            $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
            return [];
        }

        // Copy the definition file
        $parameters->source = '/usr/local/open-audit/public/ssg-definitions/' . $file;
        if ($config->server_os === 'Windows NT') {
            $parameters->source = 'c:\\xampp\\open-audit\\public\\ssg-definitions/' . $file;
        }
        $parameters->destination = $file;
        $output = scp($parameters);
        if ($output === false) {
            log_message('error', 'SCP issue copying ' . $parameters->source . ' to ' . $parameters->destination . ' on ' . $device->attributes->name . ' (see logfile for more info).');
            $this->logCreate($id, $device_id, 'error', 'SCP issue running BenchmarksModel::execute on ' . $device->attributes->ip);
            $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
            return [];
        }
        $this->logCreate($id, $device_id, 'info', 'Defnition file copied to ' . $device->attributes->name . '.');
        $microtime = microtime(true);

        // Run oscap
        $parameters->command = 'cd ~/; oscap xccdf eval --profile ' . $profile . ' --report ' . $device_id . '_' . $id .  '_' . $microtime . '_report.html ' . $file . ' 2>&1';
        log_message('debug', 'oscap command for ' . $device->attributes->name . ': ' . $parameters->command);
        $this->logCreate($id, $device_id, 'info', 'oscap command: ' . $parameters->command);
        $parameters->timeout = 600; // 10 minutes to execute oscap
        $output = ssh_command($parameters);
        $command_output = $output;
        if ($output === false) {
            log_message('error', 'Could not execute oscap for BenchmarksModel::execute on ' . $device->attributes->name);
            log_message('error', json_encode($command_output));
            $this->logCreate($id, $device_id, 'error', 'Could not execute oscap (see logfile for more info).');
            $this->logCreate($id, $device_id, 'warning', json_encode($command_output));
            $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
            return [];
        }
        log_message('debug', 'oscap command completed on ' . $device->attributes->name);
        $this->logCreate($id, $device_id, 'info', 'oscap command completed.');

        // Copy the result
        $parameters->source = $device_id . '_' . $id .  '_' . $microtime . '_report.html';
        $parameters->destination = '/usr/local/open-audit/other/ssg-results/' . $device_id . '_' . $id .  '_' . $microtime . '_report.html';
        if ($config->server_os === 'Windows NT') {
            $parameters->destination = 'c:\\xampp\\open-audit\\other\\ssg-results\\' . $device_id . '_' . $id .  '_' . $microtime . '_report.html';
        }
        $output = scp_get($parameters);
        if ($output === false) {
            log_message('error', 'Could not retrieve report for BenchmarksModel::execute on ' . $device->attributes->name);
            log_message('error', json_encode($command_output));
            $this->logCreate($id, $device_id, 'error', 'Could not retrieve report (see logfile for more info).');
            $this->logCreate($id, $device_id, 'error', 'SCP Source: ' . $parameters->source);
            $this->logCreate($id, $device_id, 'error', 'SCP Destination: ' . $parameters->destination);
            $this->logCreate($id, $device_id, 'error', 'SCP Output: ' . json_encode($output));
            $this->logCreate($id, $device_id, 'warning', 'OSCAP: ' . json_encode($command_output));
            $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
            return [];
        }
        $this->logCreate($id, $device_id, 'info', 'Report file retrieved.');

        // Delete the result file on the target
        $parameters->command = 'rm ~/' . $device_id . '_' . $id .  '_' . $microtime . '_report.html ';
        log_message('debug', 'rm command for ' . $device->attributes->name . ': ' . $parameters->command);
        $this->logCreate($id, $device_id, 'info', 'rm command: ' . $parameters->command);
        $parameters->timeout = 10; // 10 seconds to execute rm
        $output = ssh_command($parameters);
        if ($output === false) {
            log_message('error', 'Could not execute rm for BenchmarksModel::execute on ' . $device->attributes->name);
            log_message('error', json_encode($command_output));
            $this->logCreate($id, $device_id, 'error', 'Could not execute rm (see logfile for more info).');
            $this->logCreate($id, $device_id, 'error', 'RM: ' . json_encode($output));
            // Do not exit/return as we should have a local copy of the result file which we can still process
        }
        log_message('debug', 'rm command completed on ' . $device->attributes->name);
        $this->logCreate($id, $device_id, 'info', 'rm command completed.');

        // Process the result file

        $result_file = '/usr/local/open-audit/other/ssg-results/' . $device_id . '_' . $id .  '_' . $microtime . '_report.html';
        if ($config->server_os === 'Windows NT') {
            $result_file = 'c:\\xampp\\open-audit\\other\\ssg-results\\' . $device_id . '_' . $id .  '_' . $microtime . '_report.html';
        }
        if (file_exists($result_file)) {
            try {
                $qp = html5qp($result_file);
            } catch (\QueryPath\Exception $e) {
                log_message('error', 'Cannot process report file from ' . $device->attributes->name . '. ' . $e);
                log_message('error', json_encode($command_output));
                $this->logCreate($id, $device_id, 'error', 'Cannot process report file. Error: ' . $e);
                $this->logCreate($id, $device_id, 'warning', 'OSCAP: ' . json_encode($command_output));
                $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
                return [];
            }
        } else {
            log_message('error', 'File: ' . $result_file . ' does not exist.');
            log_message('error', json_encode($command_output));
            $this->logCreate($id, $device_id, 'error', 'File: ' . $result_file . ' does not exist.');
            $this->logCreate($id, $device_id, 'warning', 'OSCAP: ' . json_encode($command_output));
            $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
            return [];
        }
        log_message('debug', 'File loaded for processing.');

        if (file_exists($result_file)) {
            log_message('debug', 'rm command on localhost for ' . $device->attributes->name . ': ' . $parameters->command);
            @unlink($result_file);
        }

        if (file_exists($result_file)) {
            log_message('error', 'Cannot delete report file from open-audit/other/ssg-results.');
            $this->logCreate($id, $device_id, 'error', 'Cannot delete report file. ' . $result_file);
            $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
            return [];
        }

        $this->logCreate($id, $device_id, 'info', 'Processing report file.');
        log_message('debug', 'Processing report file for ' . $device->attributes->name);

        // Get any existing policies so we can either insert or update them
        $sql = "SELECT * from benchmarks_policies";
        $policies = $this->db->query($sql)->getResult();

        // Delete any existing results
        $sql = "DELETE from benchmarks_result WHERE benchmark_id = ? AND device_id = ?";
        $this->db->query($sql, [$id, $device_id]);

        // Get any exceptions
        $orgs = array();
        $orgs[] = $benchmark->attributes->org_id;
        $orgs = array_unique(array_merge($orgs, $instance->orgsModel->getUserDescendants($orgs, $instance->orgs)));
        $orgs = array_unique($orgs);
        $orgs = implode(', ', $orgs);
        $sql = "SELECT * FROM benchmarks_exceptions WHERE org_id IN ($orgs)";
        $rows = $this->db->query($sql)->getResult();
        $exceptions = array();
        foreach ($rows as $row) {
            $exception = new stdClass();
            $exception->devices = array();
            if (!empty($row->devices)) {
                try {
                    $exception->devices = json_decode($row->devices, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
            }
            $exception->benchmarks = array();
            if (!empty($row->benchmarks)) {
                try {
                    $exception->benchmarks = json_decode($row->benchmarks, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
            }
            $exceptions[$row->external_ident] = $exception;
        }


        $benchmark = $qp->find('h2')->next()->find('mark')->text();
        $i = 0;
        $insert = 0;
        $update = 0;
        $total = 0;
        // Loop over all test results
        foreach ($qp->find('tr.rule-overview-leaf') as $item) {
            if (isset($exceptions[$item->attr('data-tt-id')]) and ((empty($exceptions[$item->attr('data-tt-id')]->devices) or in_array($device_id, $exceptions[$item->attr('data-tt-id')]->devices) and (empty($exceptions[$item->attr('data-tt-id')]->benchmarks) or in_array($id, $exceptions[$item->attr('data-tt-id')]->benchmarks))))) {
                log_message('debug', 'Not processing item ' . $item->attr('data-tt-id') . ' for ' . $device->attributes->name . ' because in exceptions.');
                continue;
            }
            log_message('debug', 'Processing item ' . $item->attr('data-tt-id') . ' for ' . $device->attributes->name);
            $total += 1;
            $result = new stdClass();
            $result->benchmark = $benchmark;
            $result->external_ident = $item->attr('data-tt-id');
            $result->severity = '';
            $result->result = '';
            $result->description = '';
            $result->rationale = '';
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
                $sql = "INSERT INTO benchmarks_result VALUES (null, ?, 'y', NOW(), NOW(), ?, ?, ?)";
                $this->db->query($sql, [$device_id, $id, $result->external_ident, $result->result]);

                $sql = "LOCK TABLES benchmarks_policies WRITE";
                $this->db->query($sql);

                $sql = "SELECT * FROM benchmarks_policies WHERE external_ident = ? ORDER BY id LIMIT 1";
                $policies = $this->db->query($sql, [$result->external_ident])->getResult();
                unset($policy);
                if (!empty($policies[0])) {
                    $policy = $policies[0];
                }

                if (empty($policy)) {
                    // Insert
                    $insert += 1;
                    log_message('debug', 'Inserting benchmark policy ' . $result->external_ident . ' from ' . $device->attributes->name);
                    $result->description = trim($qp->find('div[id="rule-detail-' . $result->id . '"]')->find('div.description')->innerhtml());
                    $result->rationale = trim($qp->find('div[id="rule-detail-' . $result->id . '"]')->find('div.rationale')->innerhtml());
                    $result->remediation = array();
                    if ($result->result !== 'pass') {
                        foreach ($qp->find('div[id="rule-detail-' . $result->id . '"]')->find('div.remediation') as $remediation) {
                            $title = $remediation->find('a')->text();
                            $title = str_replace(' ⇲', '', $title);
                            if ($title === '(show)') {
                                // Try another location for the name
                                $title = $remediation->find('span.label')->text();
                                $title = str_replace(':', '', $title);
                            }
                            $contents = $remediation->find('pre')->innerhtml();
                            $contents = '<pre>' . @trim($contents) . '</pre>';
                            $result->remediation[$title] = $contents;
                        }
                    }
                    $result->remediation = json_encode($result->remediation);
                    $this->db->transStart();
                    $sql = "INSERT INTO benchmarks_policies VALUES (NULL, ?, ?, ?, ?, ?, ?, '', '', NOW(), ?)";
                    $this->db->query($sql, [$result->external_ident, $result->name, $result->severity, $result->description, $result->rationale, $result->remediation, $id]);
                    $this->db->transComplete();
                    $sql = "UNLOCK TABLES";
                    $this->db->query($sql);
                }

                if (!empty($policy)) {
                    $sql = "UNLOCK TABLES";
                    $this->db->query($sql);
                    if (empty($policy->description) or empty($policy->rationale) or empty($policy->remediation) or $policy->remediation === '[]') {
                        // Update
                        if (empty($policy->description)) {
                            $result->description = trim($qp->find('div[id="rule-detail-' . $result->id . '"]')->find('div.description')->innerhtml());
                            if (!empty($result->description)) {
                                $update += 1;
                                log_message('debug', 'Updating benchmark policy ' . $result->external_ident . ' description from ' . $device->attributes->name);
                                $sql = "UPDATE benchmarks_policies SET description = ?, edited_date = NOW(), edited_by = '$id' WHERE external_ident = ?";
                                $this->db->query($sql, [$result->description, $result->external_ident]);
                            }
                        }
                        if (empty($policy->rationale)) {
                            $result->rationale = trim($qp->find('div[id="rule-detail-' . $result->id . '"]')->find('div.rationale')->innerhtml());
                            if (!empty($result->rationale)) {
                                $update += 1;
                                log_message('debug', 'Updating benchmark policy ' . $result->external_ident . ' rationale from ' . $device->attributes->name);
                                $sql = "UPDATE benchmarks_policies SET rationale = ?, edited_date = NOW(), edited_by = '$id' WHERE external_ident = ?";
                                $this->db->query($sql, [$result->rationale, $result->external_ident]);
                            }
                        }
                        if ((empty($policy->remediation) or $policy->remediation === '[]') and $result->result !== 'pass') {
                            $result->remediation = array();
                            foreach ($qp->find('div[id="rule-detail-' . $result->id . '"]')->find('div.remediation') as $remediation) {
                                $title = $remediation->find('a')->text();
                                $title = str_replace(' ⇲', '', $title);
                                if ($title === '(show)') {
                                    // Try another location for the name
                                    $title = $remediation->find('span.label')->text();
                                    $title = str_replace(':', '', $title);
                                    #log_message('debug', '3 Title is: ' . $title);
                                }
                                $contents = $remediation->find('pre')->innerhtml();
                                $contents = '<pre>' . @trim($contents) . '</pre>';
                                $result->remediation[$title] = $contents;
                            }
                            if (!empty($result->remediation)) {
                                $update += 1;
                                $result->remediation = json_encode($result->remediation);
                                log_message('debug', 'Updating benchmark policy ' . $result->external_ident . ' remediation from ' . $device->attributes->name);
                                $sql = "UPDATE benchmarks_policies SET remediation = ?, edited_date = NOW(), edited_by = ? WHERE external_ident = ?";
                                $this->db->query($sql, [$result->remediation, $id, $result->external_ident]);
                            }
                        }
                    }
                    continue;
                }
            }
            log_message('debug', 'Completed  item ' . $result->external_ident . ' for ' . $device->attributes->name);
        }
        $this->logCreate($id, $device_id, 'info', 'Processing report file completed. ' . $insert . ' inserted and ' . $update . ' updated policies for ' . $total . ' results.');
        $this->logCreate($id, $device_id, 'info', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB');
        log_message('debug', 'Processing report file for ' . $device->attributes->name . ' completed. ' . $insert . ' inserted and ' . $update . ' updated policies.');
        log_message('debug', 'Completed. Memory: ' . round((memory_get_peak_usage(false) / 1024 / 1024), 3) . ' MiB used for ' . $device->attributes->name);
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
    public function includedCollection(): array
    {
        $instance = & get_instance();
        $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $orgs = array_unique($orgs);
        $orgs = implode(', ', $orgs);

        $included = array();

        $sql = "SELECT COUNT(id) AS `count` FROM benchmarks_exceptions WHERE benchmarks_exceptions.org_id IN ($orgs)";
        $query = $this->db->query($sql)->getResult();
        $included['exceptions'] = intval($query[0]->count);

        $sql = "SELECT * FROM queries WHERE name = ? ORDER BY id LIMIT 1";
        $query = $this->db->query($sql, ['Benchmarks Query'])->getResult();
        $included['benchmarks_query'] = intval($query[0]->id);

        $sql = "SELECT * FROM queries WHERE name = ? ORDER BY id LIMIT 1";
        $query = $this->db->query($sql, ['Devices Not in Benchmarks'])->getResult();
        $included['devices_not_in_benchmarks'] = intval($query[0]->id);

        $sql = "SELECT * FROM queries WHERE name = ? ORDER BY id LIMIT 1";
        $query = $this->db->query($sql, ['Devices in Benchmarks'])->getResult();
        $included['devices_in_benchmarks'] = intval($query[0]->id);

        $sql = "SELECT * FROM queries WHERE name = ? ORDER BY id LIMIT 1";
        $query = $this->db->query($sql, ['Devices Could be Benchmarked'])->getResult();
        $included['devices_could_be_benchmarked'] = intval($query[0]->id);

        $results = array();
        $sql = "SELECT benchmark_id, result, COUNT(result) AS `count` FROM benchmarks_result LEFT JOIN benchmarks ON benchmarks_result.benchmark_id = benchmarks.id WHERE benchmarks.org_id IN ($orgs) GROUP BY result, benchmark_id ORDER BY benchmark_id";
        $result = $this->db->query($sql)->getResult();
        foreach ($result as $row) {
            if (empty($results[$row->benchmark_id])) {
                $results[$row->benchmark_id] = new \stdClass();
                $results[$row->benchmark_id]->pass = 0;
                $results[$row->benchmark_id]->fail = 0;
                $results[$row->benchmark_id]->other = 0;
            }
            if ($row->result === 'pass') {
                $results[$row->benchmark_id]->pass = $row->count;
            }
            if ($row->result === 'fail') {
                $results[$row->benchmark_id]->fail = $row->count;
            }
            if ($row->result !== 'pass' and $row->result !== 'fail') {
                $results[$row->benchmark_id]->other += $row->count;
            }
        }
        $included['results'] = $results;

        helper('ssg');
        $unique_os = array();
        $ssgs = ssg_definitions();
        foreach ($ssgs as $ssg) {
            $unique_os[trim($ssg->os_family . ' ' . $ssg->os_version)] = trim($ssg->os_family . ' ' . $ssg->os_version);
        }
        #$sql = 'SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.os_version AS `devices.os_version`, devices.credentials AS `devices.credentials`, software.name AS `software.name`, software.version AS `software.version`, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, c1.type AS `c1.type`, c2.type AS `c2.type`, c3.type AS `c3.type` FROM devices LEFT JOIN `software` ON (devices.id = software.device_id AND software.name = "openscap-scanner" AND software.current = "y") LEFT JOIN `orgs` ON (devices.org_id = orgs.id) LEFT JOIN credentials c1 ON (JSON_EXTRACT(devices.credentials, "$[0]") = c1.id) LEFT JOIN credentials c2 ON (JSON_EXTRACT(devices.credentials, "$[1]") = c2.id) LEFT JOIN credentials c3 ON (JSON_EXTRACT(devices.credentials, "$[2]") = c3.id) WHERE devices.org_id IN (' . $orgs . ') AND ';

        #$sql = 'SELECT COUNT(devices.id) AS `count` FROM devices LEFT JOIN `software` ON (devices.id = software.device_id AND software.name = "openscap-scanner" AND software.current = "y") LEFT JOIN `orgs` ON (devices.org_id = orgs.id) LEFT JOIN credentials c1 ON (JSON_EXTRACT(devices.credentials, "$[0]") = c1.id) LEFT JOIN credentials c2 ON (JSON_EXTRACT(devices.credentials, "$[1]") = c2.id) LEFT JOIN credentials c3 ON (JSON_EXTRACT(devices.credentials, "$[2]") = c3.id) WHERE devices.org_id IN (' . $orgs . ') AND ';

        $sql = 'SELECT COUNT(devices.id) AS `count` FROM devices LEFT JOIN `orgs` ON (devices.org_id = orgs.id) LEFT JOIN credentials c1 ON (JSON_EXTRACT(devices.credentials, "$[0]") = c1.id) LEFT JOIN credentials c2 ON (JSON_EXTRACT(devices.credentials, "$[1]") = c2.id) LEFT JOIN credentials c3 ON (JSON_EXTRACT(devices.credentials, "$[2]") = c3.id) WHERE devices.org_id IN (' . $orgs . ') AND ';
        $data = array();
        foreach ($unique_os as $os) {
            $explode = explode(' ', $os);
            $sql .= '(devices.os_family = ? AND devices.os_version LIKE ?) OR devices.os_family = ? OR ';
            $data[] = $explode[0];
            $data[] = $explode[1] . '%';
            $data[] = $os;
        }
        $sql = substr($sql, 0, strlen($sql) - 3);
        $result = $this->db->query($sql, $data)->getResult();
        $included['potential_devices'] = $result[0]->count;

        $actual_devices = array();
        $sql = "SELECT devices FROM benchmarks WHERE org_id IN ($orgs)";
        $results = $this->db->query($sql)->getResult();
        foreach ($results as $result) {
            if (!empty($result->devices)) {
                try {
                    $devices = json_decode($result->devices, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                if (!empty($devices)) {
                    $actual_devices = array_merge($actual_devices, $devices);
                }
            }
        }
        $included['actual_devices'] = count(array_unique($actual_devices));
        $included['benchmarks_for_os'] = $unique_os;

        $good_devices = implode(', ', $actual_devices);
        foreach ($unique_os as $os) {
            $explode = explode(' ', $os);
            if (!empty($good_devices)) {
                $sql = "SELECT count(id) AS `count` FROM devices WHERE org_id IN ($orgs) AND ((os_family = ? AND os_version LIKE ?) OR os_family = ?) AND id NOT IN ($good_devices)";
            } else {
                $sql = "SELECT count(id) AS `count` FROM devices WHERE org_id IN ($orgs) AND ((os_family = ? AND os_version LIKE ?) OR os_family = ?)";
            }
            $result = $this->db->query($sql, [$explode[0], $explode[1] . '%', $os])->getResult();
            if (!empty($result[0]->count)) {
                $included['devices'][$os] = $result[0]->count;
            }
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
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $instance = & get_instance();
        $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $orgs = array_unique($orgs);
        $orgs = implode(', ', $orgs);

        $included = array();
        $benchmark = $this->read($id);
        $sql = "SELECT benchmarks_result.*, GROUP_CONCAT(benchmarks_result.device_id), count(benchmarks_result.id) AS `count`, benchmarks_policies.id as `benchmarks_policies.id`, benchmarks_policies.name, benchmarks_policies.severity FROM benchmarks_result LEFT JOIN benchmarks_policies ON (benchmarks_result.external_ident = benchmarks_policies.external_ident) WHERE benchmarks_result.benchmark_id = ? GROUP BY CONCAT(benchmarks_result.external_ident, benchmarks_result.result) ORDER BY benchmarks_result.external_ident";
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

        $alldevices = array();
        if (stripos($benchmark[0]->attributes->type, 'Windows') !== false) {
            $sql = "SELECT devices.id, devices.name, devices.ip, devices.os_family, devices.os_version, devices.credentials AS `devices.credentials`, orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM devices LEFT JOIN `orgs` ON (devices.org_id = orgs.id AND orgs.id IN ($orgs)) WHERE devices.os_family = '" . $benchmark[0]->attributes->os . "' GROUP BY devices.id";
                $devices = $this->db->query($sql, [$id])->getResult();
            foreach ($devices as $device) {
                $device->credentials = 'y';
                $alldevices[] = $device->id;
            }
        } else {
            $sql = "SELECT devices.id, devices.name, devices.ip, devices.os_family, devices.os_version, devices.credentials AS `devices.credentials`, software.name AS `software.name`, software.version AS `software.version`, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, c1.type AS `c1.type`, c2.type AS `c2.type`, c3.type AS `c3.type` FROM devices LEFT JOIN `software` ON (devices.id = software.device_id AND software.name = 'openscap-scanner' AND software.current = 'y') LEFT JOIN `orgs` ON (devices.org_id = orgs.id AND orgs.id IN ($orgs)) LEFT JOIN credentials c1 ON (JSON_EXTRACT(devices.credentials, \"\$[0]\") = c1.id) LEFT JOIN credentials c2 ON (JSON_EXTRACT(devices.credentials, \"\$[1]\") = c2.id) LEFT JOIN credentials c3 ON (JSON_EXTRACT(devices.credentials, \"\$[2]\") = c3.id) WHERE devices.os_family LIKE 'OSFAMILY' AND devices.os_version LIKE 'OSVERSION%' GROUP BY devices.id";
            $os = explode(' ', $benchmark[0]->attributes->os);
            $sql = str_replace('OSFAMILY', $os[0], $sql);
            $sql = str_replace('OSVERSION', $os[1], $sql);
            $devices = $this->db->query($sql, [$id])->getResult();
            foreach ($devices as $device) {
                $device->credentials = 'n';
                if (stripos((string)$device->{'c1.type'}, 'ssh') !== false or stripos((string)$device->{'c2.type'}, 'ssh') !== false or stripos((string)$device->{'c3.type'}, 'ssh') !== false) {
                    $device->credentials = 'y';
                }
                $alldevices[] = $device->id;
            }
        }


        if (!empty($alldevices)) {
            $sql = "SELECT benchmarks_result.device_id, benchmarks_result.result, count(benchmarks_result.result) AS `count` FROM benchmarks_result WHERE device_id IN (" . implode(',', $alldevices) . ") GROUP BY benchmarks_result.device_id, benchmarks_result.result";
            $alldevices = $this->db->query($sql)->getResult();
        }
        foreach ($alldevices as $alldevice) {
            foreach ($devices as $device) {
                if (intval($alldevice->device_id) === intval($device->id)) {
                    $device->{$alldevice->result} = intval($alldevice->count);
                }
            }
        }
        $included['devices'] = $devices;

        $included['logs'] = array();
        $sql = 'SELECT benchmarks_log.*, devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip` FROM benchmarks_log LEFT JOIN devices ON (benchmarks_log.device_id = devices.id) WHERE benchmarks_log.benchmark_id = ?';
        $included['logs'] = $this->db->query($sql, [$id])->getResult();

        for ($i = 0; $i < count($included['logs']); $i++) {
            $included['logs'][$i]->{'devices.ip'} = ip_address_from_db($included['logs'][$i]->{'devices.ip'});
        }

        $sql = "SELECT * FROM benchmarks_exceptions";
        $included['exceptions'] = $this->db->query($sql)->getResult();

        $sql = "SELECT * FROM tasks WHERE type = 'benchmarks' AND sub_resource_id = ?";
        $temp = $this->db->query($sql, [$id])->getResult();
        $included['task'] = (!empty($temp[0])) ? $temp[0] : null;

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
        helper('utility');
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
        if (isset($data->devices) and empty($data->devices)) {
            $data->devices = '[]';
        }
        if (!empty($data->devices) and is_array($data->devices)) {
            for ($i = 0; $i < count($data->devices); $i++) {
                $data->devices[$i] = intval($data->devices[$i]);
            }
            $data->devices = json_encode($data->devices);
        }
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
        $dictionary->attributes->collection = array('id', 'name', 'os', 'last_run');
        $dictionary->attributes->create = array('name','org_id','type'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Open-AudIT enables you to compare your installed operating system\'s configuration to Best Practise standards.';

        $dictionary->about = '<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>';

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
        $dictionary->columns->last_run = '';
        $dictionary->columns->remediation = '';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
