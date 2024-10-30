<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class SupportModel extends BaseModel
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
        $instance = & get_instance();
        $this->db = db_connect();

        $data = new stdClass();
        $data->database = new stdClass();
        $data->app = new stdClass();
        $data->devices = new stdClass();
        $data->os = new stdClass();
        $data->permissions = new stdClass();
        $data->php = new stdClass();
        $data->prereq = new stdClass();
        $data->webserver = new stdClass();
        $data->stats = new stdClass();

        $config = clone $instance->config;
        if (!empty($config->modules) and is_string($config->modules)) {
            try {
                $config->modules = json_decode($config->modules, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
        }
        $modules = array();
        if (!empty($config->modules)) {
            foreach ($config->modules as $key => $value) {
                if (!empty($value->installed)) {
                    $modules[] = $key;
                }
            }
        }
        $config->modules = $modules;
        if (!empty($config->maps_api_key)) {
            $config->maps_api_key = 'Removed from display, but has been set';
        }
        if (!empty($config->mail_password)) {
            $config->mail_password = 'Removed from display, but has been set';
        }
        $data->config = $config;

        $data->os->name = 'unknown';
        $data->os->php_uname = php_uname('s');
        $data->os->timezone = '';
        $data->os->version = '';

        $data->database->hostname = $this->db->hostname;
        $data->database->platform = $this->db->getPlatform();
        $data->database->version = $this->db->getVersion();
        $data->database->database = $this->db->database;
        $data->database->username = $this->db->username;

        $sql = 'SELECT COUNT(*) AS `count` FROM devices';
        $data->stats->devices_total = intval($this->db->query($sql)->getResult()[0]->count);

        $sql = 'SELECT COUNT(*) AS `count` FROM devices WHERE type = "unknown"';
        $data->stats->devices_unknown = intval($this->db->query($sql)->getResult()[0]->count);

        $sql = 'SELECT COUNT(*) AS `count` FROM devices WHERE type = "unclassified"';
        $data->stats->devices_unclassified = intval($this->db->query($sql)->getResult()[0]->count);

        $sql = 'SELECT COUNT(*) AS `count` FROM networks';
        $data->stats->networks = intval($this->db->query($sql)->getResult()[0]->count);

        $sql = 'SELECT COUNT(*) AS `count` FROM change_log';
        $data->stats->change_log = intval($this->db->query($sql)->getResult()[0]->count);

        $data->app->log_threshold = config('Config\\Logger')->threshold;
        $data->app->baseURL = config('Config\\App')->baseURL;
        $data->app->indexPage = config('Config\\App')->indexPage;
        $data->app->appTimezone = config('Config\\App')->appTimezone;
        $data->app->sessionDriver = config('Config\\App')->sessionDriver;
        $data->app->sessionSavePath = config('Config\\App')->sessionSavePath;
        $data->app->sessionTimeToUpdate = config('Config\\App')->sessionTimeToUpdate;


        // $sql = 'SELECT COUNT(*) AS `count` FROM logs';
        // $data->database->logs = intval($this->db->query($sql)->getResult()[0]->count);

        // $sql = 'SELECT `severity`, COUNT(*) as `count`, MIN(timestamp) AS `first`, MAX(timestamp) AS `last` FROM `logs` GROUP BY `severity`';
        // $data->logs = $this->db->query($sql)->getResult();

        // $sql = "SELECT MAX(timestamp) AS `timestamp`, collection, action, function, status, summary, detail, user FROM logs WHERE severity < 5 GROUP BY CONCAT(collection, action, function)";
        // $data->log_details = $this->db->query($sql)->getResult();

        $sql = "SELECT IF(@@session.time_zone = 'SYSTEM', @@system_time_zone, @@session.time_zone) as timezone";
        $data->database->timezone = $this->db->query($sql)->getResult()[0]->timezone;

        $sql = 'SELECT NOW() AS `timestamp`';
        $data->database->timestamp = $this->db->query($sql)->getResult()[0]->timestamp;

        $data->webserver->document_root = @$_SERVER['DOCUMENT_ROOT'];
        $data->webserver->forwarded_proto = @$_SERVER['HTTP_X_FORWARDED_PROTO'];
        $data->webserver->name = getenv('SERVER_SOFTWARE');
        $data->webserver->port = @$_SERVER['SERVER_PORT'];
        $data->webserver->script_filename = @$_SERVER['SCRIPT_FILENAME'];
        $data->webserver->script_name = @$_SERVER['SCRIPT_NAME'];
        $data->webserver->server_name = @$_SERVER['SERVER_NAME'];
        $data->webserver->current_url = current_url();
        $data->webserver->user_get_current_user = get_current_user();
        $data->webserver->user_whoami = exec('whoami');

        $data->php->display_errors = ini_get('display_errors');
        $data->php->error_log = ini_get('error_log');
        $data->php->error_reporting = ini_get('error_reporting');
        $extensions = get_loaded_extensions();
        $data->php->extensions = implode(', ', $extensions);
        $extensions = array('json', 'ldap', 'libxml', 'mbstring', 'mysqli', 'posix', 'session', 'simplexml', 'snmp', 'xml');
        if (php_uname('s') === 'Windows NT') {
            $extensions = array('json', 'ldap', 'libxml', 'mbstring', 'mysqli', 'session', 'simplexml', 'snmp', 'xml');
        }
        foreach ($extensions as $extension) {
            $data->php->{'ext_' . $extension} = phpversion($extension);
            if (empty($data->php->{'ext_' . $extension}) && extension_loaded($extension)) {
                $data->php->{'ext_' . $extension} = 'ERROR - extension unknown version.';
                log_message('error', 'Extension with unknown version - ' . $extension);
            }
            if (empty($data->php->{'ext_' . $extension}) && !extension_loaded($extension)) {
                $data->php->{'ext_' . $extension} = 'ERROR - entension not loaded.';
                log_message('error', 'Extension not loaded - ' . $extension);
            }
        }
        $data->php->log_errors = ini_get('log_errors');
        $data->php->max_execution_time = ini_get('max_execution_time');
        $data->php->max_input_time = ini_get('max_input_time');
        $data->php->memory_limit = ini_get('memory_limit');
        $data->php->process_owner =  exec('whoami');
        if (php_uname('s') === 'Windows NT' and $data->php->process_owner === 'nt authority\system') {
            $data->php->process_owner = 'ERROR - nt authority\system';
            log_message('error', 'PHP process is owned by "nt authority\system" on Windows');
        }
        $data->php->timezone = date_default_timezone_get();
        $data->php->timestamp = date('Y-m-d h:i:s a', time());
        $data->php->upload_max_filesize = ini_get('upload_max_filesize');
        $data->php->version = phpversion();
        $data->php->ini = php_ini_loaded_file();

        $os = $this->getOs();
        $data->os->name = $os->os_name;
        $data->os->version = $os->os_version;
        unset($os);

        $data->app->apppath = APPPATH;
        $data->app->rootpath = ROOTPATH;

        if (php_uname('s') === 'Linux') {
            $data->use = new stdClass();
            $command_string = "grep ACCESS " . ROOTPATH . "writable/logs/*.log | cut -d\" \" -f6- | sort | cut -d: -f2-3 | uniq -c | sed 's/^ *//g' | sed 's/ *$//g'";
            exec($command_string, $output, $return_var);
            foreach ($output as $line) {
                $temp = explode(' ', $line);
                $data->use->{$temp[1]} = intval($temp[0]);
            }
            unset($output);
            // Get the oldest log file
            $command_string = "ls " . ROOTPATH . "writable/logs/*.log | sort | head -n1";
            exec($command_string, $output, $return_var);
            $logfile = str_replace(ROOTPATH . 'writable/logs/log-', '', $output[0]);
            $logfile = str_replace('.log', '', $logfile);
            $data->app->oldest_logfile = $logfile;
            unset($output);
            unset($logfile);

            // Get the youngest log file
            $command_string = "ls " . ROOTPATH . "writable/logs/*.log | sort | tail -n1";
            exec($command_string, $output, $return_var);
            $logfile = str_replace(ROOTPATH . 'writable/logs/log-', '', $output[0]);
            $logfile = str_replace('.log', '', $logfile);
            $data->app->youngest_logfile = $logfile;
            unset($logfile);

            // Get any errors from the youngest logfile
            $command_string = "grep ERROR " . ROOTPATH . "writable/logs/*.log";
            exec($command_string, $output, $return_var);
            $data->logs = new stdClass();
            $data->logs = $output;
        }

        if (php_uname('s') === 'Windows NT') {
            $data->prereq->nmap = '';
            $command_string = 'nmap --version';
            exec($command_string, $output, $return_var);
            $data->prereq->nmap = @$output[0];
            unset($output);

            $command_string = 'tzutil /g';
            exec($command_string, $output, $return_var);
            $data->os->timezone = @$output[0];
            unset($output);
        }

        if (php_uname('s') === 'Darwin') {
            $data->prereq->nmap = '';
            $command_string = 'nmap --version';
            exec($command_string, $output, $return_var);
            $data->prereq->nmap = @$output[0];
            unset($output);

            $command_string = '/bin/ls -l /etc/localtime | /usr/bin/cut -d"/" -f8,9';
            exec($command_string, $output, $return_var);
            $data->os->timezone = @$output[0];
            unset($output);
        }

        if (php_uname('s') === 'Linux' and strpos(urldecode($_SERVER['QUERY_STRING']), 'demo=y') === false) {
            unset($output);
            $data->prereq->nmap = '';
            $command_string = 'nmap --version';
            exec($command_string, $output, $return_var);
            if (!empty($output)) {
                foreach ($output as $line) {
                    if (strpos($line, 'ersion') !== false) {
                        $data->prereq->nmap = $line;
                    }
                }
            }
            unset($output);
            // Samba Client
            $command_string = 'which smbclient 2>/dev/null';
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data->prereq->sambaclient = $output[0];
                $command_string = 'smbclient --version';
                unset($output);
                exec($command_string, $output, $return_var);
                if (isset($output[0])) {
                    $data->prereq->sambaclient = $output[0];
                }
            }
            unset($output);
            unset($command_string);

            // winexe version
            $command_string = ROOTPATH . 'other/winexe-static-2 --version 2>&1';
            exec($command_string, $output, $return_var);
            if (isset($output[0]) && strpos($output[0], 'winexe') === 0) {
                $data->prereq->winexe = $output[0];
            }
            unset($output);
            unset($command_string);

            // SELinux status
            $command_string = 'sestatus 2>&1 | grep " status: " | cut -d: -f2';
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data->prereq->selinux = trim($output[0]);
            }
            unset($output);
            unset($command_string);

            // Is /tmp mounted noexec?
            $command_string = "grep ' /tmp ' /proc/mounts 2>/dev/null | grep noexec";
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data->prereq->tmp_noexec = trim($output[0]);
            }
            unset($output);
            unset($command_string);

            // OS Timezone
            if ($data->os->name === 'Linux (Redhat)') {
                if (file_exists('/etc/sysconfig/clock')) {
                    $command_string = 'cat /etc/sysconfig/clock | grep ZONE | cut -d"\"" -f2';
                    exec($command_string, $output, $return_var);
                    $data->os->timezone = @$output[0];
                }
                if ($data->os->timezone === '') {
                    $command_string = 'timedatectl 2>/dev/null | grep zone | cut -d: -f2 | cut -d"(" -f1';
                    exec($command_string, $output, $return_var);
                    $data->os->timezone = @trim((string)$output[0]);
                }
            }
            if ($data->os->name === 'Linux (Debian)') {
                $command_string = 'cat /etc/timezone';
                exec($command_string, $output, $return_var);
                $data->os->timezone = @$output[0];
                unset($output);
                unset($command_string);
            }
            $data->os->timezone = trim((string)$data->os->timezone);
        }


        if (php_uname('s') !== 'Windows NT') {
            // Permissions
            // cron perms - should be -rw-r--r--
            $command_string = 'ls -l /etc/cron.d/open-audit | cut -d" " -f1';
            exec($command_string, $output, $return_var);
            $data->os->cron_file = '';
            $data->permissions->cron_file = '';
            if (isset($output[0])) {
                $data->os->cron_file = '/etc/cron.d/open-audit';
                $data->permissions->cron_file = $output[0];
            }
            unset($output);
            unset($command_string);
            // nmap perms - should be -rwsr-xr-x
            $data->permissions->nmap = '';
            if (!empty($data->prereq->nmap) && $data->prereq->nmap !== 'n') {
                $command_string = 'ls -l `which nmap` | cut -d" " -f1';
                exec($command_string, $output, $return_var);
                if (isset($output[0])) {
                    $data->permissions->nmap = $output[0];
                }
                unset($output);
                unset($command_string);
            }
            // Scripts perms - should be writable
            $data->permissions->scripts = ROOTPATH . 'other - FAIL';
            if (is_writable(ROOTPATH . 'other')) {
                $data->permissions->scripts = ROOTPATH . 'other - PASS';
            }
            // Attachments perms - should be writable
            $data->permissions->attachments = APPPATH . 'Attachments - FAIL';
            if (is_writable(APPPATH . 'Attachments')) {
                $data->permissions->attachments = APPPATH . 'Attachments - PASS';
            }
            // Uploads perms - should be writable
            $data->permissions->uploads = ROOTPATH . 'writable/uploads - FAIL';
            if (is_writable(ROOTPATH . 'writable/uploads')) {
                $data->permissions->uploads = ROOTPATH . 'writable/uploads - PASS';
            }
            // Custom Images perms - should be writable
            $data->permissions->custom_images = ROOTPATH . 'public/custom_images - FAIL';
            if (is_writable(ROOTPATH . 'public/custom_images')) {
                $data->permissions->custom_images = ROOTPATH . 'public/custom_images - PASS';
            }
            // Logs perms - should be writable
            $data->permissions->logs = ROOTPATH . 'writable/logs - FAIL';
            if (is_writable(ROOTPATH . 'writable/logs')) {
                $data->permissions->logs = ROOTPATH . 'writable/logs - PASS';
            }
            if (!empty($_SERVER['CI_ENVIRONMENT']) and $_SERVER['CI_ENVIRONMENT'] === 'development') {
                // Lang Files perms - should be writable
                $files = glob(APPPATH . 'Views/lang/*.{inc}', GLOB_BRACE);
                foreach ($files as $file) {
                    $filename = str_replace(APPPATH . 'Views/lang/', '', $file);
                    $data->permissions->{$filename} = $file . ' - FAIL';
                    if (is_writable($file)) {
                        $data->permissions->{$filename} = $file . ' - PASS';
                    }
                }
            }
        }
        return array($data);
    }


    public function getOs()
    {
        $data = new stdClass();
        $return = array();
        if (php_uname('s') === 'Linux') {
            $data->os_name = 'linux';
            if (file_exists('/etc/os-release')) {
                $command_string = 'grep PRETTY_NAME= /etc/os-release';
                exec($command_string, $return['output'], $return['status']);
                $data->os_version = str_replace('PRETTY_NAME=', '', $return['output'][0]);
                $data->os_version = str_replace('"', '', $data->os_version);
                if (empty($data->os_version)) {
                    $command_string = 'grep ^NAME= /etc/os-release';
                    exec($command_string, $return['output'], $return['status']);
                    $data->os_version = str_replace('NAME=', '', $return['output'][0]);
                    $data->os_version = str_replace('"', '', $data->os_version);
                }
            } elseif (file_exists('/etc/issue.net')) {
                $file_contents = file('/etc/issue.net');
                $data->os_version = trim((string)$file_contents[0]);
                unset($file_contents);
            } elseif (file_exists('/etc/redhat-release')) {
                // RedHat 6 doesn't have /etc/os-release
                $data->os_version = 'RedHat';
            }
            if ((stripos($data->os_version, 'red') !== false) && (stripos($data->os_version, 'hat') !== false)) {
                $data->os_name = 'Linux (Redhat)';
            }
            if (stripos($data->os_version, 'centos') !== false) {
                $data->os_name = 'Linux (Redhat)';
            }
            if (stripos($data->os_version, 'fedora') !== false) {
                $data->os_name = 'Linux (Redhat)';
            }
            if (stripos($data->os_version, 'alma') !== false) {
                $data->os_name = 'Linux (Redhat)';
            }
            if (stripos($data->os_version, 'oracle') !== false) {
                $data->os_name = 'Linux (Redhat)';
            }
            if (stripos($data->os_version, 'rocky') !== false) {
                $data->os_name = 'Linux (Redhat)';
            }

            if (stripos($data->os_version, 'debian') !== false) {
                $data->os_name = 'Linux (Debian)';
            }
            if (stripos($data->os_version, 'ubuntu') !== false) {
                $data->os_name = 'Linux (Debian)';
            }
            if (stripos($data->os_version, 'mint') !== false) {
                $data->os_name = 'Linux (Debian)';
            }
        }
        if (php_uname('s') === 'Darwin') {
            $data->os_name = 'OSX';
            $command_string = 'sw_vers | grep "ProductVersion:" | cut -f2';
            @exec($command_string, $return['output'], $return['status']);
            $data->os_version = $return['output'][0];
        }
        if (php_uname('s') === 'Windows NT') {
            $data->os_name = 'Windows';
            exec('echo. |WMIC OS Get Caption', $output);
            if (isset($output[1])) {
                $data->os_version = $output[1];
            }
        }
        return $data;
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
        return array();
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all entries
     */
    public function listAll(): array
    {
        return array();
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
        return array();
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
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
        return false;
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'maps';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array();
        $dictionary->attributes->create = array();
        $dictionary->attributes->fields = array();
        $dictionary->attributes->fieldsMeta = array();
        $dictionary->attributes->update = array();

        $dictionary->sentence = "Amazing support from FirstWave - or the community if you like. It's the no excuses, no exceptions, can-do way of thinking that our staff bring to work every day. Your complete satisfaction is our priority. Anything less is simply unacceptable.";

        $dictionary->about = "<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, there's that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No if's or but's. Great support. Period.<br /><br />" . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->product = 'professional';
        return $dictionary;
    }
}
