<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use \stdClass;

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

        $config = clone config('Openaudit');
        unset($config->enterprise_collections);
        unset($config->professional_collections);
        $config->modules = json_decode($config->modules);
        $modules = array();
        foreach ($config->modules as $key => $value) {
            if (!empty($value->installed)) {
                $item = new stdClass();
                $item->name = $key;
                $item->version = $value->version;
                $modules[] = $item;
            }
        }
        $config->modules = $modules;
        if (!empty($config->maps_api_key)) {
            $config->maps_api_key = 'Removed from display, but has been set';
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
            $data->php->{'ext_'.$extension} = phpversion($extension);
            if (empty($data->php->{'ext_'.$extension}) && extension_loaded($extension)) {
                $data->php->{'ext_'.$extension} = 'unknown version';
            }
        }
        $data->php->log_errors = ini_get('log_errors');
        $data->php->max_execution_time = ini_get('max_execution_time');
        $data->php->max_input_time = ini_get('max_input_time');
        $data->php->memory_limit = ini_get('memory_limit');
        $data->php->process_owner = '';
        $data->php->timezone = date_default_timezone_get();
        $data->php->timestamp = date('Y-m-d h:i:s a', time());
        $data->php->upload_max_filesize = ini_get('upload_max_filesize');
        $data->php->version = phpversion();
        $data->php->ini = php_ini_loaded_file();

        $os = $this->getOs();
        $data->os->name = $os->os_name;
        $data->os->version = $os->os_version;
        unset($os);


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

            $command_string = '/bin/ls -l /etc/localtime|/usr/bin/cut -d"/" -f7,8';
            exec($command_string, $output, $return_var);
            $data->os->timezone = @$output[0];
            unset($output);
        }

        if (php_uname('s') === 'Linux' and strpos(urldecode($_SERVER['QUERY_STRING']), 'demo=y') === false) {
            // php process owner
            $data->php->process_owner = 'No PHP posix extension loaded - cannot determine process owner.';
            if (extension_loaded('posix')) {
                $posix_getpwuid = posix_getpwuid(posix_geteuid());
                $data->php->process_owner = $posix_getpwuid['name'];
                unset($posix_getpwuid);
            }
            $data->prereq->nmap = '';
            $command_string = 'nmap --version';
            exec($command_string, $output, $return_var);
            $data->prereq->nmap = @$output[1];
            unset($output);
            $prereqs = array('screen', 'sshpass', 'curl', 'wget', 'zip', 'ipmitool', 'rrdtool', 'logrotate');
            foreach ($prereqs as $prereq) {
                $command_string = 'which ' . $prereq . ' 2>/dev/null';
                exec($command_string, $output, $return_var);
                $data->prereq->{$prereq} = @$output[0];
                unset($output);
                unset($command_string);
            }
            // Samba Client
            $command_string = 'which smbclient 2>/dev/null';
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data->prereq->sambaclient = $output[0];
            }
            unset($output);
            unset($command_string);

            // winexe version
            $command_string = '/usr/local/open-audit/other/winexe-static --version 2>&1';
            exec($command_string, $output, $return_var);
            if (isset($output[0]) && strpos($output[0], 'winexe') === 0) {
                $data->prereq->winexe = $output[0];
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
                    $data->os->timezone = @trim($output[0]);
                }
            }
            if ($data->os->name === 'Linux (Debian)') {
                $command_string = 'cat /etc/timezone';
                exec($command_string, $output, $return_var);
                $data->os->timezone = @$output[0];
                unset($output);
                unset($command_string);
            }
            $data->os->timezone = trim($data->os->timezone);
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
            if (!empty($data->prereq->nmap) && $data->prereq->nmap !== 'n') {
                $command_string = 'ls -l '.$data->prereq->nmap.' | cut -d" " -f1';
                exec($command_string, $output, $return_var);
                if (isset($output[0])) {
                    $data->permissions->nmap = $output[0];
                }
                unset($output);
                unset($command_string);
            }
            // scripts perms - should be drwxrwxrwx
            $command_string = 'ls -l /usr/local/open-audit/other | grep scripts | cut -d" " -f1';
            exec($command_string, $output, $return_var);
            $data->permissions->scripts = 'Error - missing directory';
            if (!empty($output[0])) {
                $data->permissions->scripts = $output[0];
            }
            unset($output);
            unset($command_string);
            // Attachments - should be drwxrwxrwx
            $command_string = 'ls -l /usr/local/open-audit/app | grep Attachments | cut -d" " -f1';
            exec($command_string, $output, $return_var);
            $data->permissions->attachments = 'Error - missing directory';
            if (!empty($output[0])) {
                $data->permissions->attachments = $output[0];
            }
            unset($output);
            unset($command_string);
            // Uploads - should be drwxrwxrwx
            $command_string = 'ls -l /usr/local/open-audit/app | grep Uploads | cut -d" " -f1';
            exec($command_string, $output, $return_var);
            $data->permissions->uploads = 'Error - missing directory';
            if (!empty($output[0])) {
                $data->permissions->uploads = $output[0];
            }
            unset($output);
            unset($command_string);
            // custom images - should be drwxrwxrwx
            $command_string = 'ls -l /usr/local/open-audit/public | grep custom_images | cut -d" " -f1';
            exec($command_string, $output, $return_var);
            $data->permissions->custom_images = 'Error - missing directory';
            if (!empty($output[0])) {
                $data->permissions->custom_images = $output[0];
            }
            unset($output);
            unset($command_string);
        }
        return array($data);
    }


    public function getOs()
    {
        $data = new stdClass();
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
                $data->os_version = trim($file_contents[0]);
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
        $dictionary->attributes->fieldsMeta =array();
        $dictionary->attributes->update = array();

        $dictionary->sentence = "Amazing support from FirstWave - or the community if you like. It's the no excuses, no exceptions, can-do way of thinking that our staff bring to work every day. Your complete satisfaction is our priority. Anything less is simply unacceptable.";

        $dictionary->about = "<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, there's that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No if's or but's. Great support. Period.<br /><br />" . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->product = 'professional';
        return $dictionary;
    }
}
