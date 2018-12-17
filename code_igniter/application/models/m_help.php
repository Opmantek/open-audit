<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
* @category  Model
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.3.2
* @link      http://www.open-audit.org
 */
class M_help extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }


    public function groups()
    {
        $CI = & get_instance();
        if ((string) php_uname('s') === 'Windows NT') {
            $sql_file = file('c:\\xampplite\\open-audit\\other\\openaudit_mysql.sql');
        } else {
            $sql_file = file('/usr/local/open-audit/other/openaudit_mysql.sql');
        }

        for ($i=0; $i < count($sql_file); $i++) { 
            if (strpos($sql_file[$i], "INSERT INTO `groups` VALUES") !== false) {
                $line = $sql_file[$i];
                $attributes = explode("'", $line);
                $item = new stdClass();
                $item->name = $attributes[1];
                $item->description = $attributes[3];
                $item->sql = $line;
                $CI->response->data[] = $item;
            }
        }
    }

    public function queries()
    {
        $CI = & get_instance();
        if ((string) php_uname('s') === 'Windows NT') {
            $sql_file = file('c:\\xampplite\\open-audit\\other\\openaudit_mysql.sql');
        } else {
            $sql_file = file('/usr/local/open-audit/other/openaudit_mysql.sql');
        }

        for ($i=0; $i < count($sql_file); $i++) { 
            if (strpos($sql_file[$i], "INSERT INTO `queries` VALUES") !== false) {
                $line = $sql_file[$i];
                $attributes = explode("'", $line);
                $item = new stdClass();
                $item->name = $attributes[1];
                $item->description = $attributes[7];
                $item->sql = $line;
                $CI->response->data[] = $item;
            }
        }
    }

    public function roles()
    {
        $CI = & get_instance();
        if ((string) php_uname('s') === 'Windows NT') {
            $sql_file = file('c:\\xampplite\\open-audit\\other\\openaudit_mysql.sql');
        } else {
            $sql_file = file('/usr/local/open-audit/other/openaudit_mysql.sql');
        }

        for ($i=0; $i < count($sql_file); $i++) { 
            if (strpos($sql_file[$i], "INSERT INTO `roles` VALUES") !== false) {
                $line = $sql_file[$i];
                $attributes = explode("'", $line);
                $item = new stdClass();
                $item->name = $attributes[1];
                $item->description = $attributes[3];
                $item->ad_group = $attributes[7];
                $item->sql = $line;
                $CI->response->data[] = $item;
            }
        }
    }
    public function summaries()
    {
        $CI = & get_instance();
        if ((string) php_uname('s') === 'Windows NT') {
            $sql_file = file('c:\\xampplite\\open-audit\\other\\openaudit_mysql.sql');
        } else {
            $sql_file = file('/usr/local/open-audit/other/openaudit_mysql.sql');
        }

        for ($i=0; $i < count($sql_file); $i++) { 
            if (strpos($sql_file[$i], "INSERT INTO `summaries` VALUES") !== false) {
                // $line = $sql_file[$i];
                // $line = str_replace("\'", "'", $line);
                // $line = str_replace("INSERT INTO `summaries` VALUES (NULL,'", "", $line);
                // $line = str_replace("','system','2000-01-01 00:00:00');", "", $line);
                // $line_explode = explode(",", $line);
                // $item = new stdClass();
                // $item->name = str_replace("'", '', $line_explode[0]);
                // $item->table = str_replace("'", '', $line_explode[4]);
                // $item->column = str_replace("'", '', $line_explode[5]);
                // $item->extra = str_replace("'", '', $line_explode[6]);
                // $CI->response->data[] = $item;
                $line = $sql_file[$i];
                $attributes = explode("'", $line);
                $item = new stdClass();
                $item->name = $attributes[1];
                $item->table = $attributes[7];
                $item->column = $attributes[9];
                $item->sql = $line;
                $CI->response->data[] = $item;
            }
        }
    }

    public function defaults($collection)
    {
        $CI = & get_instance();
        if ((string) php_uname('s') === 'Windows NT') {
            $sql_file = file('c:\\xampplite\\open-audit\\other\\openaudit_mysql.sql');
        } else {
            $sql_file = file('/usr/local/open-audit/other/openaudit_mysql.sql');
        }

        $result = array();
        $sql = "DROP TABLE IF EXISTS `temp`";
        $query = $this->db->query($sql);

        if (!$this->db->table_exists($collection)) {
            return false;
        }

        $sql = 'SHOW CREATE TABLE ' . $collection;
        $query = @$this->db->query($sql);
        $result = $query->result();
        $sql = str_replace("CREATE TABLE `$collection`", "CREATE TABLE `temp`", $result[0]->{'Create Table'});
        $query = $this->db->query($sql);

        $items = array();
        for ($i=0; $i < count($sql_file); $i++) {
            $sql = '';
            if (stripos($sql_file[$i], "INSERT INTO `$collection` VALUES") !== false) {
                $sql = str_ireplace("INSERT INTO `$collection` VALUES", "INSERT INTO `temp` VALUES", $sql_file[$i]);
                $this->db->query($sql);
            }
        }

        $sql = "SELECT * FROM `temp`";
        $query = $this->db->query($sql);
        $result = $query->result();
        $result = $this->format_data($result, $collection);
        $sql = "DROP TABLE IF EXISTS `temp`";
        $this->db->query($sql);

        return ($result);
    }

    public function support($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();

        $data = new stdClass();
        $data->database = new stdClass();
        $data->devices = new stdClass();
        $data->os = new stdClass();
        $data->permissions = new stdClass();
        $data->php = new stdClass();
        $data->prereq = new stdClass();
        $data->webserver = new stdClass();

        $data->os->name = 'unknown';
        $data->os->php_uname = php_uname('s');
        $data->os->timezone = '';
        $data->os->version = '';

        $data->database->name = $this->db->platform();

        $sql = "SELECT COUNT(*) AS `count` FROM system";
        $query = $this->db->query($sql);
        $result = $query->result();
        $data->database->devices = $result[0]->count;

        $sql = "SELECT COUNT(*) AS `count` FROM change_log";
        $query = $this->db->query($sql);
        $result = $query->result();
        $data->database->change_log = $result[0]->count;

        $sql = "SELECT COUNT(*) AS `count` FROM logs";
        $query = $this->db->query($sql);
        $result = $query->result();
        $data->database->logs = $result[0]->count;

        $sql = "SELECT `severity`, COUNT(*) as `count`, MIN(timestamp) AS `first`, MAX(timestamp) AS `last` FROM `logs` GROUP BY `severity`";
        $query = $this->db->query($sql);
        $result = $query->result();
        $data->logs = $result;

        // $this->load->model('m_database');
        // $tables = $this->m_database->collection();
        // $data->database->tables = new stdClass();
        // foreach ($tables as $table) {
        //     $data->database->tables->{$table->attributes->name} = intval($table->attributes->count);
        // }

        $sql = "SELECT COUNT(*) AS `count`, `type`, `manufacturer`, `model`, `snmp_oid` FROM system GROUP BY type, manufacturer, model ORDER BY type, manufacturer, model";
        $query = $this->db->query($sql);
        $data->devices = $query->result();

        $sql = "SELECT IF(@@session.time_zone = 'SYSTEM', @@system_time_zone, @@session.time_zone) as timezone";
        $query = $this->db->query($sql);
        $result = $query->result();
        $data->database->timezone = $result[0]->timezone;
        $data->database->version = $this->db->version();
        $sql = "SELECT NOW() AS `timestamp`";
        $query = $this->db->query($sql);
        $result = $query->result();
        $data->database->timestamp = $result[0]->timestamp;

        $data->webserver->document_root = @$_SERVER['DOCUMENT_ROOT'];
        $data->webserver->forwarded_proto = @$_SERVER['HTTP_X_FORWARDED_PROTO'];
        $data->webserver->name = getenv("SERVER_SOFTWARE");
        $data->webserver->port = @$_SERVER['SERVER_PORT'];
        $data->webserver->script_filename = @$_SERVER['SCRIPT_FILENAME'];
        $data->webserver->script_name = @$_SERVER['SCRIPT_NAME'];
        $data->webserver->server_name = @$_SERVER['SERVER_NAME'];
        $data->webserver->current_url = current_url();


        $data->php->display_errors = ini_get('display_errors');
        $data->php->error_log = ini_get('error_log');
        $data->php->error_reporting = ini_get('error_reporting');
        $extensions = get_loaded_extensions();
        $data->php->extensions = implode($extensions, ', ');
        if (php_uname('s') == 'Windows NT') {
            $extensions = array('json', 'ldap', 'libxml', 'mbstring', 'mcrypt', 'mysqli', 'session', 'simplexml', 'snmp', 'xml');
        } else {
            $extensions = array('json', 'ldap', 'libxml', 'mbstring', 'mcrypt', 'mysqli', 'posix', 'session', 'simplexml', 'snmp', 'xml');
        }
        foreach ($extensions as $extension) {
            $data->php->{'ext_'.$extension} = phpversion($extension);
            if (empty($data->php->{'ext_'.$extension}) and extension_loaded($extension)) {
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


        if (php_uname('s') == 'Windows NT') {
            $data->os->name = 'Windows';
            $opCommon = 'c:\omk\conf\opCommon.nmis';
            $phpini = 'c:\xampplite\php\php.ini';
            exec("echo. |WMIC OS Get Caption", $output);
            if (isset($output[1])) {
                $data->os->version = $output[1];
            }
            unset($output);
            $test_path = 'c:\Program Files\Nmap\Nmap.exe';
            if (file_exists($test_path)) {
                $data->prereq->nmap = 'c:\Program Files\Nmap\Nmap.exe';
            } else {
                $data->prereq->nmap = 'n';
            }
            $test_path = 'c:\Program Files (x86)\Nmap\Nmap.exe';
            if ($data->prereq->nmap == 'n' and file_exists($test_path)) {
                $data->prereq->nmap = 'c:\Program Files (x86)\Nmap\Nmap.exe';
            }
            $command_string = 'tzutil /g';
            exec($command_string, $output, $return_var);
            $data->os->timezone = @$output[0];
        }

        if (php_uname('s') == 'Darwin') {
            $data->os->name = 'OSX';
            $command_string = 'sw_vers | grep "ProductVersion:" | cut -f2';
            @exec($command_string, $return['output'], $return['status']);
            $data->os->version = $return['output'][0];
            unset($output);
            unset($command_string);
            $test_path = '/usr/local/bin/nmap';
            if (file_exists($test_path)) {
                $data->prereq->nmap = '/usr/local/bin/nmap';
            } else {
                $data->prereq->nmap = '';
            }
            $command_string = '/bin/ls -l /etc/localtime|/usr/bin/cut -d"/" -f7,8';
            exec($command_string, $output, $return_var);
            $data->os->timezone = @$output[0];
        }

        if (php_uname('s') == 'Linux') {
            $data->os->name = 'linux';
            if (file_exists('/etc/os-release')) {
                $command_string = 'grep PRETTY_NAME= /etc/os-release';
                exec($command_string, $return['output'], $return['status']);
                $data->os->version = str_replace('PRETTY_NAME=', '', $return['output'][0]);
                $data->os->version = str_replace('"', '', $data->os->version);
                if (empty($data->os->version)) {
                    $command_string = 'grep ^NAME= /etc/os-release';
                    exec($command_string, $return['output'], $return['status']);
                    $data->os->version = str_replace('NAME=', '', $return['output'][0]);
                    $data->os->version = str_replace('"', '', $data->os->version);
                }
            } elseif (file_exists('/etc/issue.net')) {
                $i = file('/etc/issue.net');
                $data->os->version = trim($i[0]);
            } elseif (file_exists('/etc/redhat-release')) {
                # RedHat 6 doesn't have /etc/os-release
                $data->os->version = 'RedHat';
            }
            if ((stripos($data->os->version, 'red') !== false) and (stripos($data->os->version, 'hat') !== false)) {
                $data->os->name = 'Linux (Redhat)';
            }
            if (stripos($data->os->version, 'centos') !== false) {
                $data->os->name = 'Linux (Redhat)';
            }
            if (stripos($data->os->version, 'fedora') !== false) {
                $data->os->name = 'Linux (Redhat)';
            }

            if (stripos($data->os->version, 'debian') !== false) {
                $data->os->name = 'Linux (Debian)';
            }
            if (stripos($data->os->version, 'ubuntu') !== false) {
                $data->os->name = 'Linux (Debian)';
            }
            if (stripos($data->os->version, 'mint') !== false) {
                $data->os->name = 'Linux (Debian)';
            }
            # php process owner
            if (extension_loaded('posix')) {
                $i = posix_getpwuid(posix_geteuid());
                $data->php->process_owner = $i['name'];
                unset($i);
            } else {
                $data->php->process_owner = 'No PHP posix extension loaded - cannot determine process owner.';
            }

            $prereqs = array('nmap', 'screen', 'sshpass', 'curl', 'wget', 'zip', 'ipmitool', 'rrdtool', 'logrotate');
            foreach ($prereqs as $prereq) {
                $command_string = "which " . $prereq . " 2>/dev/null";
                exec($command_string, $output, $return_var);
                if (isset($output[0])) {
                    $data->prereq->$prereq = @$output[0];
                }
                unset($output);
                unset($command_string);
            }

            # Samba Client
            $command_string = "which smbclient 2>/dev/null";
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data->prereq->sambaclient = $output[0];
            }
            unset($output);
            unset($command_string);

            # winexe version
            $command_string = "/usr/local/open-audit/other/winexe-static --version 2>&1";
            exec($command_string, $output, $return_var);
            if (isset($output[0]) and strpos($output[0], 'winexe') === 0) {
                $data->prereq->winexe = $output[0];
            }
            unset($output);
            unset($command_string);

            # OS Timezone
            if ($data->os->name == 'Linux (Redhat)') {
                $command_string = 'cat /etc/sysconfig/clock | grep ZONE | cut -d"\"" -f2';
                exec($command_string, $output, $return_var);
                $data->os->timezone = @$output[0];
                if ($data->os->timezone == '') {
                    $command_string = 'timedatectl 2>/dev/null | grep zone | cut -d: -f2 | cut -d"(" -f1';
                    exec($command_string, $output, $return_var);
                    $data->os->timezone = @$output[0];
                }
            }
            if ($data->os->name == 'Linux (Debian)') {
                $command_string = 'cat /etc/timezone';
                exec($command_string, $output, $return_var);
                $data->os->timezone = @$output[0];
                unset($output);
                unset($command_string);
            }
            $data->os->timezone = trim($data->os->timezone);

            # Permissions
            # cron perms - should be -rw-r--r--
            $command_string = 'ls -l /etc/cron.d/open-audit | cut -d" " -f1';
            exec($command_string, $output, $return_var);
            if (isset($output[0])) {
                $data->os->cron_file = '/etc/cron.d/open-audit';
                $data->permissions->cron_file = $output[0];
            } else {
                $data->os->cron_file = '';
                $data->permissions->cron_file = '';
            }
            unset($output);
            unset($command_string);
            # nmap perms - should be -rwsr-xr-x
            if ($data->prereq->nmap != '' and $data->prereq->nmap != 'n') {
                $command_string = 'ls -l '.$data->prereq->nmap.' | cut -d" " -f1';
                exec($command_string, $output, $return_var);
                if (isset($output[0])) {
                    $data->permissions->nmap = $output[0];
                }
                unset($output);
                unset($command_string);
            }
            # scripts perms - should be -rwxrwxr-x
            $command_string = 'ls -l /usr/local/open-audit/other/scripts | cut -d" " -f1';
            exec($command_string, $output, $return_var);
            if (!empty($output[1])) {
                $data->permissions->scripts = $output[1];
            } else {
                $data->permissions->scripts = 'Error - missing directory';
            }
            unset($output);
            unset($command_string);
            # Attachments - should be -rwxrwxrwx
            $command_string = 'ls -l /usr/local/open-audit/code_igniter/application/attachments | cut -d" " -f1';
            exec($command_string, $output, $return_var);
            if (!empty($output[1])) {
                $data->permissions->attachments = $output[1];
            } else {
                $data->permissions->attachments = 'Error - missing directory';
            }
            unset($output);
            unset($command_string);
            # Uploads - should be -rwxrwxrwx
            $command_string = 'ls -l /usr/local/open-audit/code_igniter/application/uploads | cut -d" " -f1';
            exec($command_string, $output, $return_var);
            if (!empty($output[1])) {
                $data->permissions->uploads = $output[1];
            } else {
                $data->permissions->uploads = 'Error - missing directory';
            }
            unset($output);
            unset($command_string);
            # custom images - should be -rwxrwxrwx
            $command_string = 'ls -l /usr/local/open-audit/www/open-audit/custom_images | cut -d" " -f1';
            exec($command_string, $output, $return_var);
            if (!empty($output[1])) {
                $data->permissions->custom_images = $output[1];
            } else {
                $data->permissions->custom_images = 'Error - missing directory';
            }
            unset($output);
            unset($command_string);
            // # Access Log - should be -rw-rw-rw-
            // $command_string = 'ls -l /usr/local/open-audit/other/log_access.log | cut -d" " -f1';
            // exec($command_string, $output, $return_var);
            // if (!empty($output[0])) {
            //     $data->permissions->access_log = $output[0];
            // } else {
            //     $data->permissions->access_log = 'Error - missing file';
            // }
            // unset($output);
            // unset($command_string);
            // # System Log - should be -rw-rw-rw-
            // $command_string = 'ls -l /usr/local/open-audit/other/log_system.log | cut -d" " -f1';
            // exec($command_string, $output, $return_var);
            // if (!empty($output[0])) {
            //     $data->permissions->system_log = $output[0];
            // } else {
            //     $data->permissions->system_log = 'Error - missing file';
            // }
            // unset($output);
            // unset($command_string);
        }
        $CI->response->data = array();
        $CI->response->data[0] = $data;
    }
}
