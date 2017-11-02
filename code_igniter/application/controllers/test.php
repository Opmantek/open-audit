<?php
#
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
 *
 * @version   2.0.12

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // must be an admin to access this page
        $this->load->model('m_users');
        $this->load->helper('log');
        $this->m_users->validate();
        if (stripos($this->user->roles, '"admin"') === false) {
            if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                redirect('summaries');
            }
        }
    }

    public function index()
    {
        redirect('/');
    }

    public function manufacturers_oid()
    {
        echo "<pre>\n";
        $manufacturers = array();

        $oid_file = file('/usr/local/open-audit/other/enterprise-numbers.txt');
        for ($i=0; $i < count($oid_file); $i++) {
            if (ctype_digit(trim($oid_file[$i]))) {
                $manufacturers[] = trim($oid_file[$i+1]);
            }
        }

        $oid_file = file('/usr/local/open-audit/other/oui.txt');
        for ($i=0; $i < count($oid_file); $i++) {
            if (strpos($oid_file[$i], '(hex)') !== false) {
                $manufacturers[] = trim(substr($oid_file[$i], 18));
            }
        }

        $manufacturers = array_unique($manufacturers);
        sort($manufacturers);
        echo "Count: " . count($manufacturers) . "\n";
        foreach($manufacturers as $manufacturer) {
            echo $manufacturer . "\n";
        }
        echo "</pre>\n";        
    }

    public function db_compare()
    {
        $this->load->helper('diff');
        $tables = array('attachment','attributes','audit_log','bios','change_log','chart','cluster','configuration','connections','credential','credentials','discoveries','discovery_log','disk','dns','edit_log','field','fields','file','files','graph','groups','invoice','invoice_item','ip','ldap_groups','ldap_servers','licenses','locations','log','logs','maps','memory','module','monitor','motherboard','netstat','network','networks','nmap','notes','oa_asset_select','oa_change','oa_temp','oa_user_sessions','optical','orgs','pagefile','partition','print_queue','processor','queries','roles','route','san','scripts','scsi','server','server_item','service','share','software','software_key','sound','summaries','system','task','tasks','user','user_group','users','variable','video','vm','warranty','windows');

        if ((string) php_uname('s') === 'Windows NT') {
            $sql_file = file('c:\\xampplite\\open-audit\\other\\openaudit_mysql.sql');
        } else {
            $sql_file = file('/usr/local/open-audit/other/openaudit_mysql.sql');
        }

        echo "<style>";
        echo ".diff td {\n  vertical-align: top;\n  white-space: pre;\n  white-space: pre-wrap;\n  font-family: monospace;\n}\n";
        echo ".diffDeleted span {\n  border: 1px solid rgb(255,192,192);\n  background: rgb(255,224,224);\n}\n";
        echo ".diffInserted span {\n  border: 1px solid rgb(192,255,192);\n  background: rgb(224,255,224);\n}\n";
        echo "</style>\n";

        foreach ($tables as $table) {
            # From the DB
            $query = $this->db->query("SHOW CREATE TABLE `$table`");
            $result = $query->result();
            $db_schema = preg_replace('/AUTO_INCREMENT=\d+ /', '', $result[0]->{'Create Table'});

            # From the file
            for ($i=0; $i < count($sql_file); $i++) { 
                if (strpos($sql_file[$i], "CREATE TABLE `$table`") !== false) {
                    $file_schema = $sql_file[$i];
                    for ($j=$i+1; $j < count($sql_file); $j++) {
                        if (strpos($sql_file[$j], '/*!') === false) {
                            $file_schema .= $sql_file[$j];
                        } else {
                            break;
                        }
                    }
                }
            }
            $file_schema = preg_replace('/AUTO_INCREMENT=\d+ /', '', $file_schema);
            $file_schema = str_replace(";\n", '', $file_schema);

            # Count the differences
            $diff = Diff::compare($file_schema, $db_schema);
            $count_del = 0; $count_ins = 0;
            foreach ($diff as $line) {
                if ($line[1] == 1) { $count_del += 1; }
                if ($line[1] == 2) { $count_ins += 1; }
            }
            if ($count_ins != 0) {
                $count_ins = "<span style=\"color:limegreen;\">" . $count_ins . "</span>";
            }
            if ($count_del != 0) {
                $count_del = "<span style=\"color:red;\">" . $count_del . "</span>";
            }
            # Output
            echo "<h2>$table (file -> database)</h2>";
            echo "<strong>Del: $count_del Ins: $count_ins</strong>\n";
            $table_output = Diff::toTable(Diff::compare($file_schema, $db_schema));
            echo str_replace('<table class="diff">', '<table class="diff" style="width:100%">', $table_output);
            echo "=======================================\n";
        }

    }

    public function nettest()
    {
        $this->load->helper('network');
        $network = '192.168.1.0/24';
        echo "<pre>\n";
        print_r(network_details($network));
        echo "</pre>\n";
    }

    public function ip()
    {
        $this->load->helper('network');
        echo "<pre>\n";
        $sql = "SELECT `system`.`id`, `system`.`ip` FROM `system` WHERE `system`.`id` NOT IN (SELECT `ip`.`system_id` FROM `ip`)";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $ip_details = network_details($row->ip . '/24');
            $cidr = $ip_details->network_slash;
            $netmask = $ip_details->netmask;
            $network = $ip_details->network . '/' . $cidr;
            $sql = "INSERT INTO `ip` VALUES (NULL, " . intval($row->id) . ", 'y', NOW(), NOW(), '', '', '$row->ip', '$netmask', '$cidr', 4, '$network', '')";
            echo $sql . "\n";
#            $this->db->query($sql);
#            echo $this->db->last_query() . "\n";
        }
    }

    public function snmp()
    {
        # NOTE - must edit code to return blank in snmp_helper::my_snmp_get
        echo "<pre>\n";
        $this->load->helper('snmp_helper');
        $dir = BASEPATH.'../application/helpers/';
        $dir_files = scandir($dir);
        $file_list = array();
        $this->load->helper('snmp_oid_helper');
        foreach ($dir_files as $file) {
            if (strpos($file, 'snmp_') !== false and strpos($file, '_helper.php') !== false and $file != 'snmp_helper.php' and $file != 'snmp_oid_helper.php') {
                $file_list[] = $file;
            }
        }
        $oids = array();
        $devices = array();
        foreach ($file_list as $file) {
            if (file_exists($dir.$file)) {
                echo "processing $file\n";
                include $dir.$file;
                unset($lines);
                $lines = file($dir.$file);
                foreach ($lines as $line) {
                    if (stripos($line, 'if ($oid ==')) {
                        $explode = explode("'", $line);
                        $oid = $explode[1];
                        $oids[] = $oid;
                        $device = $get_oid_details('', '', $oid);
                        foreach ($device as $key => $value) {
                            $device->$key = $value;
                        }
                        if (empty($device->manufacturer)) {
                            $device->manufacturer = get_oid($oid);
                        }
                        if (empty($device->model)) {
                            $device->model = '';
                        }
                        if (empty($device->type)) {
                            $device->type = 'unknown';
                        }
                        $device->oid = $oid;
                        $devices[] = $device;
                        unset($device);
                    }
                }
            }
        }
        echo "FILES: " . count($file_list) . "\n";
        echo "OIDS: " . count($oids) . "\n";
        foreach ($devices as $device) {
            echo '"'.$device->oid.'","'.$device->manufacturer.'","'.$device->type.'","'.$device->model."\"\n";
        }
    }
}
