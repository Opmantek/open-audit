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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version   1.14.2

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (php_uname('s') == 'Windows NT') {
    $files = "c:%5Cxampplite%5Copen-audit%5Cother%5Clog_system.log,\nc:%5Comk%5Clog%5Coae.log,\nc:%5Comk%5Clog%5CopCommon.log,\nc:%5Comk%5Clog%5CopDaemon.log,\nc:%5Comk%5Clog%5Cperformance.log,\nc:%5Comk%5Cconf%5CopCommon.nmis";
} else {
    $files = "/usr/local/open-audit/other/log_system.log,\n/usr/local/omk/log/oae.log,\n/usr/local/omk/log/opCommon.log,\n/usr/local/omk/log/opDaemon.log,\n/usr/local/omk/log/performance.log,\n/usr/local/omk/conf/opCommon.nmis";
}

$data = array();
$data['os_platform'] = 'unknown';
$data['os_php_uname'] = php_uname('s');
$data['os_version'] = '';
$data['os_database'] = $this->db->platform()." (version ".$this->db->version().")";
$data['os_webserver'] = getenv("SERVER_SOFTWARE");

$sql = "SELECT @@global.time_zone";
$query = $this->db->query($sql);
$result = $query->result();
$data['timezone_database'] = $result[0]->{'@@global.time_zone'};
$data['timezone_php'] = date_default_timezone_get();
$data['timezone_os'] = '';

$data['php_version'] = phpversion();
$data['php_error_reporting'] = ini_get('error_reporting');
$data['php_process_owner'] = '';
$data['php_memory_limit'] = ini_get('memory_limit');
$data['php_max_execution_time'] = ini_get('max_execution_time');
$data['php_max_input_time'] = ini_get('max_input_time');
$data['php_display_errors'] = ini_get('display_errors');
$data['php_upload_max_filesize'] = ini_get('upload_max_filesize');
$data['php_ext_ldap'] = extension_loaded('ldap');
$data['php_ext_mbstring'] = extension_loaded('mbstring');
$data['php_ext_mcrypt'] = extension_loaded('mcrypt');
$data['php_ext_mysql'] = extension_loaded('mysql');
$data['php_ext_posix'] = extension_loaded('posix');
$data['php_ext_snmp'] = extension_loaded('snmp');
$data['php_ext_xml'] = extension_loaded('xml');


if (php_uname('s') == 'Windows NT') {
    $data['os_platform'] = 'Windows';
    $opCommon = 'c:\omk\conf\opCommon.nmis';
    $phpini = 'c:\xampplite\php\php.ini';
    exec("echo. |WMIC OS Get Caption", $output);
    if (isset($output[1])) {
        $data['os_version'] = $output[1];
    }
    unset($output);
    $test_path = 'c:\Program Files\Nmap\Nmap.exe';
    if ($data['prereq_nmap'] == 'n' and file_exists($test_path)) {
        $data['prereq_nmap'] = 'c:\Program Files\Nmap\Nmap.exe';
    }
    $test_path = 'c:\Program Files (x86)\Nmap\Nmap.exe';
    if ($data['prereq_nmap'] == 'n' and file_exists($test_path)) {
        $data['prereq_nmap'] = 'c:\Program Files (x86)\Nmap\Nmap.exe';
    }
    $command_string = 'tzutil /g';
    exec($command_string, $output, $return_var);
    $data['timezone_os'] = @$output[0];
}

if (php_uname('s') == 'Darwin') {
    $data['os_platform'] = 'OSX';
    $command_string = 'sw_vers | grep "ProductVersion:" | cut -f2';
    @exec($command_string, $return['output'], $return['status']);
    $data['os_version'] = $return['output'][0];
    unset($output);
    unset($command_string);
    $test_path = '/usr/local/bin/nmap';
    if (file_exists($test_path)) {
        $data['prereq_nmap'] = '/usr/local/bin/nmap';
    } else {
        $data['prereq_nmap'] = '';
    }
    $command_string = '/bin/ls -l /etc/localtime|/usr/bin/cut -d"/" -f7,8';
    exec($command_string, $output, $return_var);
    $data['timezone_os'] = @$output[0];
}

if (php_uname('s') == 'Linux') {
    $data['os_platform'] = 'linux';
    if (file_exists('/etc/os-release')) {
        $command_string = 'grep NAME= /etc/os-release';
        exec($command_string, $return['output'], $return['status']);
        $data['os_version'] = str_replace('NAME="', '', $return['output'][0]);
        $data['os_version'] = str_replace('"', '', $data['os_version']);
    } elseif (file_exists('/etc/issue.net')) {
        $i = file('/etc/issue.net');
        $data['os_version'] = trim($i[0]);
    } elseif (file_exists('/etc/redhat-release')) {
        # RedHat 6 doesn't have /etc/os-release
        $data['os_version'] = 'RedHat';
    }
    if ((stripos($data['os_version'], 'red') !== false) and (stripos($data['os_version'], 'hat') !== false)) {
        $data['os_platform'] = 'Linux (Redhat)';
    }
    if (stripos($data['os_version'], 'centos') !== false) {
        $data['os_platform'] = 'Linux (Redhat)';
    }
    if (stripos($data['os_version'], 'fedora') !== false) {
        $data['os_platform'] = 'Linux (Redhat)';
    }

    if (stripos($data['os_version'], 'debian') !== false) {
        $data['os_platform'] = 'Linux (Debian)';
    }
    if (stripos($data['os_version'], 'ubuntu') !== false) {
        $data['os_platform'] = 'Linux (Debian)';
    }
    if (stripos($data['os_version'], 'mint') !== false) {
        $data['os_platform'] = 'Linux (Debian)';
    }
    # php process owner
    if (extension_loaded('posix')) {
        $i = posix_getpwuid(posix_geteuid());
        $data['php_process_owner'] = $i['name'];
        unset($i);
    } else {
        $hints['php_process_owner'] = 'No PHP posix extension loaded - cannot determine process owner.';
        $data['php_process_owner'] = '';
    }
    # nmap
    $command_string = "which nmap 2>/dev/null";
    exec($command_string, $output, $return_var);
    if (isset($output[0]) and strpos($output[0], 'nmap')) {
        $data['prereq_nmap'] = $output[0];
    }
    unset($output);
    unset($command_string);

    # nmap perms
    if ($data['prereq_nmap'] != '' and $data['prereq_nmap'] != 'n') {
        $command_string = 'ls -l '.$data['prereq_nmap'].' | cut -d" " -f1';
        exec($command_string, $output, $return_var);
        if (isset($output[0])) {
            $data['prereq_nmap_perms'] = $output[0];
        }
        unset($output);
        unset($command_string);
    }

    # screen
    $command_string = "which screen 2>/dev/null";
    exec($command_string, $output, $return_var);
    if (isset($output[0])) {
        $data['prereq_screen'] = @$output[0];
    }
    unset($output);
    unset($command_string);

    # sshpass
    $command_string = "which sshpass 2>/dev/null";
    exec($command_string, $output, $return_var);
    if (isset($output[0])) {
        $data['prereq_sshpass'] = @$output[0];
    }
    unset($output);
    unset($command_string);
    if ($data['os_platform'] == 'Linux (Redhat)') {
        # Samba Client
        $command_string = "which smbclient 2>/dev/null";
        exec($command_string, $output, $return_var);
        if (isset($output[0])) {
            $data['prereq_samba-client'] = $output[0];
        }
        unset($output);
        unset($command_string);
    }
    if ($data['os_platform'] == 'Linux (Debian)') {
        # Samba Client
        $command_string = "which smbclient 2>/dev/null";
        exec($command_string, $output, $return_var);
        if (isset($output[0])) {
            $data['prereq_samba-client'] = $output[0];
        }
        unset($output);
        unset($command_string);
    }
    if ($data['os_platform'] == 'Linux (Redhat)') {
        $command_string = 'cat /etc/sysconfig/clock | grep ZONE | cut -d"\"" -f2';
        exec($command_string, $output, $return_var);
        $data['timezone_os'] = @$output[0];
        if ($data['timezone_os'] == '') {
            $command_string = 'timedatectl 2>/dev/null | grep zone | cut -d: -f2 | cut -d"(" -f1';
            exec($command_string, $output, $return_var);
            $data['timezone_os'] = @$output[0];
        }
    }
    if ($data['os_platform'] == 'Linux (Debian)') {
        $command_string = 'cat /etc/timezone';
        exec($command_string, $output, $return_var);
        $data['timezone_os'] = @$output[0];
    }
    $data['timezone_os'] = trim($data['os_timezone']);
}



?>
<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo __("Support"); ?></h3></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                If you are emailing this result to Opmantek, please go into the menu -> Admin -> Database -> List and select the Logs table, export it to SQL and attach it.<br /><br />
                Please also attach the files below and the data below and add them as attachments to the email.<br /><pre><?php echo $files; ?></pre>
            </div>
            <div class="col-md-12"><br />SESSION USERDATA
            <pre><?php print_r($this->session->userdata); ?></pre>
            </div>

            <div class="col-md-12"><br />INTERNAL CONFIG
            <pre><?php print_r($this->config->config); ?></pre>
            </div>

            <div class="col-md-12"><br />DATA ITEMS
            <pre><?php print_r($data); ?></pre>
            </div>
        </div>
    </div>
</div>