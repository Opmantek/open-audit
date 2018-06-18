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
* @version   2.2.4
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
                $line = str_replace("INSERT INTO `groups` VALUES (NULL,1,'", "", $line);
                $line = str_replace("','','y','system','2000-01-01 00:00:00');", "", $line);
                $line_explode = explode("'", $line);
                $item = new stdClass();
                $item->name = $line_explode[0];
                $item->description = $line_explode[2];
                unset($line_explode[0]);
                unset($line_explode[1]);
                unset($line_explode[2]);
                unset($line_explode[3]);
                $item->sql = implode($line_explode);
                $item->sql = trim(str_replace("\\", "'", $item->sql));
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
                $line = str_replace("INSERT INTO `queries` VALUES (NULL,1,", "", $line);
                $line = str_replace("','','system','2000-01-01 00:00:00');", "", $line);
                $line = str_replace("\\'", "'", $line);
                $line_explode = explode("'", $line);
                #echo "<pre>\n"; print_r($line_explode); 
                $item = new stdClass();
                $item->name = $line_explode[1];
                $item->description = $line_explode[7];
                unset($line_explode[0]);
                unset($line_explode[1]);
                unset($line_explode[2]);
                unset($line_explode[3]);
                unset($line_explode[5]);
                unset($line_explode[6]);
                unset($line_explode[7]);
                unset($line_explode[8]);
                $item->sql = implode("'", $line_explode);
                $item->sql = substr($item->sql, stripos($item->sql, 'select '));
                #echo strpos($item->sql, 'select ');
                #exit();
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
                $line = str_replace("INSERT INTO `roles` VALUES (NULL,'", "", $line);
                $line = str_replace("','system','2000-01-01 00:00:00');", "", $line);
                $line_explode = explode("'", $line);
                #echo "<pre>\n"; print_r($line_explode);  exit();
                $item = new stdClass();
                $item->name = $line_explode[0];
                $item->description = $line_explode[2];
                $item->permissions = str_replace("\\\"", '"', $line_explode[4]);
                $item->ad_group = $line_explode[6];
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
                $line = $sql_file[$i];
                $line = str_replace("\'", "'", $line);
                $line = str_replace("INSERT INTO `summaries` VALUES (NULL,'", "", $line);
                $line = str_replace("','system','2000-01-01 00:00:00');", "", $line);
                #echo "<pre>\n"; print_r($line);
                $line_explode = explode(",", $line);
                #echo "<pre>\n"; print_r($line_explode); exit();
                $item = new stdClass();
                $item->name = str_replace("'", '', $line_explode[0]);
                $item->table = str_replace("'", '', $line_explode[4]);
                $item->column = str_replace("'", '', $line_explode[5]);
                $item->extra = str_replace("'", '', $line_explode[6]);
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

        switch ($collection) {
            case 'attributes';
                $sql = "CREATE TABLE `temp` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `org_id` int(10) unsigned NOT NULL DEFAULT '1', `resource` varchar(200) NOT NULL DEFAULT '', `type` varchar(200) NOT NULL DEFAULT '', `name` varchar(200) NOT NULL DEFAULT '', `value` varchar(200) NOT NULL DEFAULT '', `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                break;

            case 'configuration';
                $sql = "CREATE TABLE `temp` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(200) NOT NULL DEFAULT '', `value` longtext NOT NULL, `type` varchar(10) NOT NULL DEFAULT 'text', `editable` varchar(1) NOT NULL DEFAULT 'n', `edited_by` varchar(100) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', `description` text NOT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                break;

            case 'credentials';
                $sql = "CREATE TABLE `temp` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(200) NOT NULL DEFAULT '', `description` text NOT NULL, `type` enum('aws','basic_auth','cim','ipmi','mysql','netapp','other','snmp','snmp_v3','sql_server','ssh','ssh_key','vmware','web','windows') NOT NULL DEFAULT 'other', `credentials` text NOT NULL, `org_id` int(10) unsigned NOT NULL DEFAULT '1', `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                break;

            case 'dashboards';
                $sql = "CREATE TABLE `temp` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(100) NOT NULL DEFAULT '', `org_id` int(10) unsigned NOT NULL DEFAULT '0', `type` enum('default','org','user','') NOT NULL DEFAULT '', `user_id` int(10) unsigned NOT NULL DEFAULT '0', `description` text NOT NULL, `sidebar` enum('y','n') NOT NULL DEFAULT 'y', `options` text NOT NULL, `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                break;

            case 'groups';
                $sql = "CREATE TABLE `temp` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `org_id` int(10) unsigned NOT NULL DEFAULT '1', `name` varchar(200) NOT NULL DEFAULT '', `description` text NOT NULL, `sql` text NOT NULL, `link` text NOT NULL, `expose` enum('y','n') NOT NULL DEFAULT 'y', `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                break;

            case 'locations';
                $sql = "CREATE TABLE `temp` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(200) NOT NULL DEFAULT '', `org_id` int(10) unsigned NOT NULL DEFAULT '1', `type` enum('Airforce','Airport','Ambulance Station','Army','Cloud','Conference Center','Court House','Data Center','Depot','District','Doctors Office','Embassy','Factory','Fire Station','Guard','Head Office','High School','Hospital','Hotel','House','Library','Light House','Marina','Mobile Phone Tower','Motel','Navy','Newsagent','Nursing Home','Observatory','Office','Oil Rig','Police','Power Plant','Power Substation','Prison','Radio Station','Regional','Resort','Retail','School','Security','Stadium','Train Station','Travel Agency','TV Station','University','Warehouse','Workshop') NOT NULL DEFAULT 'Office', `room` varchar(100) NOT NULL DEFAULT '', `suite` varchar(100) NOT NULL DEFAULT '', `level` varchar(100) NOT NULL DEFAULT '', `address` varchar(100) NOT NULL DEFAULT '', `suburb` varchar(100) NOT NULL DEFAULT '', `city` varchar(100) NOT NULL DEFAULT '', `district` varchar(100) NOT NULL DEFAULT '', `region` varchar(100) NOT NULL DEFAULT '', `area` varchar(100) NOT NULL DEFAULT '', `state` varchar(100) NOT NULL DEFAULT '', `postcode` varchar(10) NOT NULL DEFAULT '', `country` varchar(100) NOT NULL DEFAULT '', `tags` varchar(250) NOT NULL DEFAULT '', `phone` varchar(20) NOT NULL DEFAULT '', `picture` varchar(100) NOT NULL DEFAULT '', `latitude` float(10,6) NOT NULL, `longitude` float(10,6) NOT NULL, `geo` varchar(200) NOT NULL DEFAULT '', `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                break;

            case 'orgs';
                $sql = "CREATE TABLE `temp` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(200) NOT NULL DEFAULT '', `parent_id` int(10) unsigned DEFAULT '1', `description` text NOT NULL, `type` varchar(100) NOT NULL DEFAULT 'organisation', `ad_group` varchar(100) NOT NULL DEFAULT '', `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                break;

            case 'queries';
                $sql = "CREATE TABLE `temp` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `org_id` int(10) unsigned NOT NULL DEFAULT '1', `name` varchar(200) NOT NULL DEFAULT '', `menu_category` varchar(200) NOT NULL DEFAULT 'Device', `menu_display` enum('y','n') NOT NULL DEFAULT 'y', `description` text NOT NULL, `sql` text NOT NULL, `link` text NOT NULL, `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                break;

            case 'roles';
                $sql = "CREATE TABLE `temp` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(200) NOT NULL DEFAULT '', `description` text NOT NULL, `permissions` text NOT NULL, `ad_group` varchar(100) NOT NULL DEFAULT '', `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
                break;

            case 'scripts';
                $sql = "CREATE TABLE `temp` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(200) NOT NULL DEFAULT '', `org_id` int(10) unsigned NOT NULL DEFAULT '1', `options` text NOT NULL, `description` text NOT NULL, `based_on` varchar(200) NOT NULL DEFAULT '', `hash` varchar(250) NOT NULL DEFAULT '', `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                break;

            case 'summaries';
                $sql = "CREATE TABLE `temp` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(200) NOT NULL DEFAULT '', `org_id` int(10) unsigned NOT NULL DEFAULT '1', `menu_category` varchar(200) NOT NULL DEFAULT 'Device', `menu_display` enum('y','n') NOT NULL DEFAULT 'y', `table` varchar(100) NOT NULL DEFAULT '', `column` varchar(100) NOT NULL DEFAULT '', `extra_columns` text NOT NULL, `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                break;

            case 'widgets':
                $sql = "CREATE TABLE `temp` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(100) NOT NULL DEFAULT '', `org_id` int(10) unsigned NOT NULL DEFAULT '0', `description` text NOT NULL, `type` enum('line','pie','') DEFAULT 'line', `table` varchar(50) NOT NULL DEFAULT '', `primary` varchar(50) NOT NULL DEFAULT '', `secondary` varchar(50) NOT NULL DEFAULT '', `ternary` varchar(50) NOT NULL DEFAULT '', `dataset_title` varchar(200) NOT NULL DEFAULT '', `group_by` varchar(50) NOT NULL DEFAULT '', `where` text NOT NULL, `limit` smallint signed NOT NULL DEFAULT '0', `options` text NOT NULL, `sql` text NOT NULL, `link` text NOT NULL, `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                break;

            default:
                $sql = '';
                break;
        }

        if (!empty($sql)) {
            $query = $this->db->query($sql);
            $items = array();
            for ($i=0; $i < count($sql_file); $i++) {
                if (strpos($sql_file[$i], "INSERT INTO `$collection` VALUES") !== false) {
                    $sql = str_ireplace("INSERT INTO `$collection` VALUES", "INSERT INTO `temp` VALUES", $sql_file[$i]);
                    $this->db->query($sql);
                }
            }
        }

        if (!empty($sql)) {
            $sql = "SELECT * FROM `temp`";
            $query = $this->db->query($sql);
            $result = $query->result();
            $result = $this->format_data($result, $collection);
            $sql = "DROP TABLE IF EXISTS `temp`";
            $this->db->query($sql);
        }
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

        $data->webserver->document_root = $_SERVER['DOCUMENT_ROOT'];
        $data->webserver->forwarded_proto = $_SERVER['HTTP_X_FORWARDED_PROTO'];
        $data->webserver->name = getenv("SERVER_SOFTWARE");
        $data->webserver->port = $_SERVER['SERVER_PORT'];
        $data->webserver->script_filename = $_SERVER['SCRIPT_FILENAME'];
        $data->webserver->script_name = $_SERVER['SCRIPT_NAME'];
        $data->webserver->server_name = $_SERVER['SERVER_NAME'];
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
