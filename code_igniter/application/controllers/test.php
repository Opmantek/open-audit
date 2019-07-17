<?php
/**
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
*
* @category  Controller
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.1.2
* @link      http://www.open-audit.org
*/

/**
* Base Object Test
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Test extends CI_Controller
{
    /**
    * Constructor
    *
    * @access    public
    */
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

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
        redirect('/');
    }

    public function test_rules_json()
    {
        $sql = "SELECT * FROM rules";
        $query = $this->db->query($sql);
        $rules = $query->result();
        echo "<pre>\n";
        foreach ($rules as $rule) {
            unset($json);
            $json = @json_decode($rule->inputs);
            if (empty($json)) {
                echo "BAD input JSON for ID: " . $rule->id . ", Name: " . $rule->name . "\n";
                echo $rule->inputs . "\n\n";
            }
            unset($json);
            $json = @json_decode($rule->outputs);
            if (empty($json)) {
                echo "BAD output JSON for ID: " . $rule->id . ", Name: " . $rule->name . "\n";
                echo $rule->outputs . "\n\n";
            }
        }
    }

    public function read_mac_unique()
    {
        $this->load->model('m_configuration');
        $this->m_configuration->load();
        $file = file($this->config->config['base_path'] . '/other/imports/oui.txt');
        echo "<pre>\n";
        $ouis = array();
        $manufacturers = array();
        for ($i=0; $i < count($file); $i++) { 
            if (strpos($file[$i], "   (hex)\t\t")) {
                $oui = str_replace('-', ':',strtolower(trim(substr($file[$i], 0, 8))));
                $manufacturer = trim(substr($file[$i], 17));
                $ouis[$oui] = $manufacturer;
                $value = $manufacturer;
                $value = trim($value);
                if ($value == 'TP-LINK TECHNOLOGIES CO.,LTD.') { $value = 'TP-Link'; }
                if (stripos($value, '3Com') === 0) { $value = '3Com Ltd'; }
                if (stripos($value, 'Alcatel') === 0) { $value = 'Alcatel-Lucent'; }
                if (stripos($value, 'Arista') !== false) { $value = 'Arista Networks'; }
                if (stripos($value, 'Aruba') !== false) { $value = 'Aruba'; }
                if ( strpos($value, 'Broadcom') === 0) { $value = 'Broadcom'; }
                if ( strpos($value, 'Cisco') === 0) { $value = 'Cisco Systems'; }
                if (stripos($value, 'Giga-Byte') === 0) { $value = 'Giga-Byte Technology'; }
                if (stripos($value, 'Hewlett Packard') !== false) { $value = 'Hewlett Packard'; }
                if (stripos($value, 'HUAWEI') === 0) { $value = 'Huawei Technologies'; }
                if (stripos($value, 'Intel') === 0) { $value = 'Intel'; }
                if (stripos($value, 'IBM') === 0) { $value = 'IBM'; }
                if (stripos($value, 'LG Electronics') === 0) { $value = 'LG Electronics'; }
                if (stripos($value, 'LITE-ON') === 0) { $value = 'LITE-ON'; }
                if (stripos($value, 'LUCENT') === 0) { $value = 'Alcatel-Lucent'; }
                if (stripos($value, 'Lenovo') === 0) { $value = 'Lenovo'; }
                if (stripos($value, 'MICRO-STAR') === 0) { $value = 'MICRO-STAR'; }
                if (stripos($value, 'MRV Communication') === 0) { $value = 'MRV Communications'; }
                if (stripos($value, 'Microsoft') === 0) { $value = 'Microsoft'; }
                if (stripos($value, 'Samsung Electronics') === 0) { $value = 'Samsung Electronics'; }
                if (stripos($value, 'SonicWall') === 0) { $value = 'SonicWall'; }
                $manufacturers[] = $value;
            }
        }
        $manufacturers = array_unique($manufacturers);
        sort($manufacturers);
        echo "<pre>\n";
        echo "Count: " . count($manufacturers) . "\n\n";
        print_r($manufacturers);
        echo "</pre>\n";
    }

    public function read_mac()
    {
        $this->load->model('m_configuration');
        $this->m_configuration->load();

        // $sql = "SELECT * FROM `rules`";
        // $query = $this->db->query($sql);
        // $rules = $query->result();

        $file = file($this->config->config['base_path'] . '/other/imports/oui.txt');
        echo "<pre>\n";
        $ouis = array();

        for ($i=0; $i < count($file); $i++) { 
            if (strpos($file[$i], "   (hex)\t\t")) {
                $oui = str_replace('-', ':',strtolower(trim(substr($file[$i], 0, 8))));
                $manufacturer = trim(substr($file[$i], 17));
                $ouis[$oui] = $manufacturer;
            }
        }
        foreach ($ouis as $key => $value) {
            $value = trim($value);
            if ($value == 'TP-LINK TECHNOLOGIES CO.,LTD.') { $value = 'TP-Link'; }
            if (stripos($value, '3Com') === 0) { $value = '3Com Ltd'; }
            if (stripos($value, 'Alcatel') === 0) { $value = 'Alcatel-Lucent'; }
            if (stripos($value, 'Arista') !== false) { $value = 'Arista Networks'; }
            if (stripos($value, 'Aruba') !== false) { $value = 'Aruba'; }
            if ( strpos($value, 'Broadcom') === 0) { $value = 'Broadcom'; }
            if ( strpos($value, 'Cisco') === 0) { $value = 'Cisco Systems'; }
            if (stripos($value, 'Giga-Byte') === 0) { $value = 'Giga-Byte Technology'; }
            if (stripos($value, 'Hewlett Packard') !== false) { $value = 'Hewlett Packard'; }
            if (stripos($value, 'HUAWEI') === 0) { $value = 'Huawei Technologies'; }
            if (stripos($value, 'Intel') === 0) { $value = 'Intel'; }
            if (stripos($value, 'IBM') === 0) { $value = 'IBM'; }
            if (stripos($value, 'LG Electronics') === 0) { $value = 'LG Electronics'; }
            if (stripos($value, 'LITE-ON') === 0) { $value = 'LITE-ON'; }
            if (stripos($value, 'LUCENT') === 0) { $value = 'Alcatel-Lucent'; }
            if (stripos($value, 'Lenovo') === 0) { $value = 'Lenovo'; }
            if (stripos($value, 'MICRO-STAR') === 0) { $value = 'MICRO-STAR'; }
            if (stripos($value, 'MRV Communication') === 0) { $value = 'MRV Communications'; }
            if (stripos($value, 'Microsoft') === 0) { $value = 'Microsoft'; }
            if (stripos($value, 'Samsung Electronics') === 0) { $value = 'Samsung Electronics'; }
            if (stripos($value, 'SonicWall') === 0) { $value = 'SonicWall'; }

            $inputs = array();
            $outputs = array();

            $item = new stdClass();
            $item->table = 'network';
            $item->attribute = 'mac';
            $item->operator = 'st';
            $item->value = $key;
            $inputs[] = $item;

            $item = new stdClass();
            $item->table = 'system';
            $item->attribute = 'manufacturer';
            $item->operator = 'eq';
            $item->value = '';
            $inputs[] = $item;

            $item = new stdClass();
            $item->table = 'system';
            $item->attribute = 'manufacturer';
            $item->value = $value;
            $item->value_type = 'string';
            $outputs[] = $item;

            $insert = true;
            // foreach ($rules as $rule) {
            //     if ($rule->name = "MAC Address for $value" and $rule->inputs == json_encode($inputs, JSON_UNESCAPED_UNICODE)) {
            //         $insert = false;
            //         break;
            //     }
            // }

            if ($insert and $value != '') {
                $sql = "INSERT INTO `rules` VALUES (NULL, " . $this->db->escape('Mac Address for ' . $value) . ", 1, 'Set the manufacturer based on the MAC prefix.', 90, " . $this->db->escape(json_encode($inputs, JSON_UNESCAPED_UNICODE)) . ", " . $this->db->escape(json_encode($outputs, JSON_UNESCAPED_UNICODE)) . ", 'system', '2000-01-01 00:00:00');";

                echo $sql . "\n";

                # $query = $this->db->query($sql);
            }

        }
    }

    public function read_snmp_unique()
    {
        $this->load->model('m_configuration');
        $this->m_configuration->load();

        // $sql = "SELECT * FROM `rules`";
        // $query = $this->db->query($sql);
        // $rules = $query->result();

        $file = file($this->config->config['base_path'] . '/other/imports/enterprise-numbers.txt');
        echo "<pre>\n";
        $oids = array();
        for ($i=0; $i < count($file); $i++) { 
            if (preg_match('/^\d.*/', $file[$i])) {
                $oid = trim($file[$i]);
                $manufacturer = $file[$i+1];
                $oids[$oid] = trim($manufacturer);
                $value = trim($manufacturer);
                if ($value == 'TP-Link Technology Co.,Ltd') { $value = 'TP-Link'; }
                if (stripos($value, '3Com') === 0) { $value = '3Com Ltd'; }
                if (stripos($value, 'Alcatel') === 0) { $value = 'Alcatel-Lucent'; }
                if ($value == 'Apple Computer, Inc.') { $value = 'Apple, Inc.'; }
                if ($value == 'Apple Inc') { $value = 'Apple, Inc.'; }
                if (stripos($value, 'Arista') === 0) { $value = 'Arista Networks'; }
                if (stripos($value, 'Aruba Networks') !== false) { $value = 'Aruba'; }
                if ( strpos($value, 'Broadcom') === 0) { $value = 'Broadcom'; }
                if (stripos($value, 'Cisco') === 0) { $value = 'Cisco Systems'; }
                if (stripos($value, 'Giga-Byte') === 0) { $value = 'Giga-Byte Technology'; }
                if (stripos($value, 'Hewlett Packard') !== false) { $value = 'Hewlett Packard'; }
                if (stripos($value, 'Hewlett-Packard') !== false) { $value = 'Hewlett Packard'; }
                if (stripos($value, 'HUAWEI') === 0) { $value = 'Huawei Technologies'; }
                if (stripos($value, 'Intel') === 0) { $value = 'Intel'; }
                if (stripos($value, 'IBM') === 0) { $value = 'IBM'; }
                if (stripos($value, 'LG Electronics') === 0) { $value = 'LG Electronics'; }
                if (stripos($value, 'LITE-ON') === 0) { $value = 'LITE-ON'; }
                if (stripos($value, 'LUCENT') === 0) { $value = 'Alcatel-Lucent'; }
                if (stripos($value, 'Lenovo') === 0) { $value = 'Lenovo'; }
                if (stripos($value, 'MICRO-STAR') === 0) { $value = 'MICRO-STAR'; }
                if (stripos($value, 'MRV Communication') === 0) { $value = 'MRV Communications'; }
                if (stripos($value, 'Microsoft') === 0) { $value = 'Microsoft'; }
                if ($value == 'net-snmp') { $value = ''; }
                if (stripos($value, 'Samsung Electronics') === 0) { $value = 'Samsung Electronics'; }
                if (stripos($value, 'SonicWall') === 0) { $value = 'SonicWall'; }
                $manufacturers[] = trim($value);
            }
        }
        $manufacturers = array_unique($manufacturers);
        sort($manufacturers);
        echo "<pre>\n";
        echo "Count: " . count($manufacturers) . "\n\n";
        print_r($manufacturers);
        echo "</pre>\n";
    }


    public function read_snmp()
    {
        $this->load->model('m_configuration');
        $this->m_configuration->load();

        // $sql = "SELECT * FROM `rules`";
        // $query = $this->db->query($sql);
        // $rules = $query->result();

        $file = file($this->config->config['base_path'] . '/other/imports/enterprise-numbers.txt');
        echo "<pre>\n";
        $oids = array();

        for ($i=0; $i < count($file); $i++) { 
            if (preg_match('/^\d.*/', $file[$i])) {
                $oid = trim($file[$i]);
                $manufacturer = $file[$i+1];
                $oids[$oid] = trim($manufacturer);
            }
        }

        foreach ($oids as $key => $value) {
            $value = trim($value);
            $newvalue = $value;
            if (       $newvalue == 'TP-Link Technology Co.,Ltd') {  $newvalue = 'TP-Link'; }
            if (stripos( $newvalue, '3Com') === 0) {  $newvalue = '3Com Ltd'; }
            if (stripos( $newvalue, 'Alcatel') === 0) {  $newvalue = 'Alcatel-Lucent'; }
            if (       $newvalue == 'Apple Computer, Inc.') {  $newvalue = 'Apple, Inc.'; }
            if (       $newvalue == 'Apple Inc') {  $newvalue = 'Apple, Inc.'; }
            if (stripos( $newvalue, 'Arista') === 0) {  $newvalue = 'Arista Networks'; }
            if (stripos( $newvalue, 'Aruba Networks') !== false) {  $newvalue = 'Aruba'; }
            if ( strpos( $newvalue, 'Broadcom') === 0) {  $newvalue = 'Broadcom'; }
            if (stripos( $newvalue, 'Cisco') === 0) {  $newvalue = 'Cisco Systems'; }
            if (stripos( $newvalue, 'Giga-Byte') === 0) {  $newvalue = 'Giga-Byte Technology'; }
            if (stripos( $newvalue, 'Hewlett Packard') !== false) {  $newvalue = 'Hewlett Packard'; }
            if (stripos( $newvalue, 'Hewlett-Packard') !== false) {  $newvalue = 'Hewlett Packard'; }
            if (stripos( $newvalue, 'HUAWEI') === 0) {  $newvalue = 'Huawei Technologies'; }
            if (stripos( $newvalue, 'Intel') === 0) {  $newvalue = 'Intel'; }
            if (stripos( $newvalue, 'IBM') === 0) {  $newvalue = 'IBM'; }
            if (stripos( $newvalue, 'LG Electronics') === 0) {  $newvalue = 'LG Electronics'; }
            if (stripos( $newvalue, 'LITE-ON') === 0) {  $newvalue = 'LITE-ON'; }
            if (stripos( $newvalue, 'LUCENT') === 0) {  $newvalue = 'Alcatel-Lucent'; }
            if (stripos( $newvalue, 'Lenovo') === 0) {  $newvalue = 'Lenovo'; }
            if (stripos( $newvalue, 'MICRO-STAR') === 0) {  $newvalue = 'MICRO-STAR'; }
            if (stripos( $newvalue, 'MRV Communication') === 0) {  $newvalue = 'MRV Communications'; }
            if (stripos( $newvalue, 'Microsoft') === 0) {  $newvalue = 'Microsoft'; }
            if (       $newvalue == 'net-snmp') {  $newvalue = ''; }
            if (stripos( $newvalue, 'Samsung Electronics') === 0) {  $newvalue = 'Samsung Electronics'; }
            if (stripos( $newvalue, 'SonicWall') === 0) {  $newvalue = 'SonicWall'; }

            $inputs = array();
            $outputs = array();

            $item = new stdClass();
            $item->table = 'system';
            $item->attribute = 'snmp_enterprise_id';
            $item->operator = 'eq';
            $item->value = $key;
            $inputs[] = $item;

            $item = new stdClass();
            $item->table = 'system';
            $item->attribute = 'manufacturer';
            $item->operator = 'eq';
            $item->value = '';
            $inputs[] = $item;

            $item = new stdClass();
            $item->table = 'system';
            $item->attribute = 'manufacturer';
            $item->value = $newvalue;
            $item->value_type = 'string';
            $outputs[] = $item;

            $item = new stdClass();
            $item->table = 'system';
            $item->attribute = 'snmp_enterprise_name';
            $item->value = $value;
            $item->value_type = 'string';
            $outputs[] = $item;

            $insert = true;
            // foreach ($rules as $rule) {
            //     if ($rule->name = "SNMP Enterprise Number for $value" and $rule->inputs == json_encode($inputs, JSON_UNESCAPED_UNICODE)) {
            //         $insert = false;
            //         break;
            //     }
            // }

            if ($insert and $value != '') {
                $sql = "INSERT INTO `rules` VALUES (NULL, " . $this->db->escape('SNMP Enterprise Number for ' . $value) . ", 1, 'Set the manufacturer based on the SNMP Enterprise Number.', 100, " . $this->db->escape(json_encode($inputs, JSON_UNESCAPED_UNICODE)) . ", " . $this->db->escape(json_encode($outputs, JSON_UNESCAPED_UNICODE)) . ", 'system', '2000-01-01 00:00:00');";

                echo "$sql\n";

                #$query = $this->db->query($sql);
            }
        }
    }

    public function import_json_device()
    {
        if (empty($_POST['data'])) {
            # call a form for input
            $this->load->view('v_import_json_device');
        }
        if (!empty($_POST['data'])) {
            echo "<pre>\n";
            $json = @json_decode($_POST['data']);
            echo "JSON errors";
            switch (json_last_error()) {
                case JSON_ERROR_NONE:
                    echo ' - No errors';
                break;
                case JSON_ERROR_DEPTH:
                    echo ' - Maximum stack depth exceeded';
                break;
                case JSON_ERROR_STATE_MISMATCH:
                    echo ' - Underflow or the modes mismatch';
                break;
                case JSON_ERROR_CTRL_CHAR:
                    echo ' - Unexpected control character found';
                break;
                case JSON_ERROR_SYNTAX:
                    echo ' - Syntax error, malformed JSON';
                break;
                case JSON_ERROR_UTF8:
                    echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
                break;
                default:
                    echo ' - Unknown error';
                break;
            }
            echo PHP_EOL;

                if ($json !== null) {
                $sql = "";
                # Remove or move a few manually derived items
                unset($json->data[0]->attributes->id);
                unset($json->data[0]->attributes->uptime_formatted);
                unset($json->data[0]->attributes->collector_name);
                if (!empty($json->data[0]->attributes->ip_padded)) {
                    $json->data[0]->attributes->ip = $json->data[0]->attributes->ip_padded;
                    unset($json->data[0]->attributes->ip_padded);
                }
                $data = $json->data[0]->attributes;
                $sql = $this->db->insert_string('system', $data);
                echo $sql . "\n\n";
                $query = $this->db->query($sql);
                $id = $this->db->insert_id();
                echo "System ID: " . $id . "\n";
                print_r($json->data[0]->attributes);

                foreach ($json->included as $component) {
                    if ($component->type != 'locations' and $component->type != 'location' and $component->type != 'purchase' and $component->type != 'orgs' and $component->type != 'fields' and $component->type != 'field') {
                        if (!empty($component->attributes->ip_padded)) {
                            $component->attributes->ip = $component->attributes->ip_padded;
                            unset($component->attributes->ip_padded);
                        }
                        if (!empty($component->attributes->destination_padded)) {
                            $component->attributes->destination = $component->attributes->destination_padded;
                            unset($component->attributes->destination_padded);
                        }
                        if (!empty($component->attributes->next_hop_padded)) {
                            $component->attributes->next_hop = $component->attributes->next_hop_padded;
                            unset($component->attributes->next_hop_padded);
                        }
                        if ($component->type == 'credential') {
                            if (empty($component->attributes->credentials)) {
                                $component->attributes->credentials = '';
                            } else {
                                $component->attributes->credentials = json_encode($component->attributes->credentials);
                            }
                        }
                        if ($component->type == 'edit_log') {
                            unset($component->attributes->full_name);
                        }
                        unset($component->attributes->id);
                        $component->attributes->system_id = $id;
                        $data = $component->attributes;
                        $sql = $this->db->insert_string($component->type, $data);
                        $query = $this->db->query($sql);
                    }
                }
            }
        }
    }

    public function json_sql()
    {
        /*
        DROP TABLE IF EXISTS `components`;
        CREATE TABLE `components` (
          `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
          `system_id` int(10) unsigned DEFAULT NULL,
          `current` enum('y','n') NOT NULL DEFAULT 'y',
          `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
          `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
          `type` varchar(100) NOT NULL DEFAULT '',
          `key` text NOT NULL,
          `details` json NOT NULL,
          PRIMARY KEY (`id`),
          KEY `system_id` (`system_id`),
          KEY `type` (`type`),
          KEY `current` (`current`),
          CONSTRAINT `component_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        */

        $this->load->model('m_devices_components');
        echo "<pre>\n";
        $tables = array('bios', 'disk', 'dns', 'file', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'print_queue', 'processor', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
        foreach ($tables as $table) {
            $sql = "SELECT CONCAT(\"'\", column_name, \"', `\", column_name, \"`\") as `string` FROM information_schema.columns WHERE  table_name = '$table' AND table_schema = 'openaudit' AND column_name NOT IN ('id', 'system_id', 'first_seen', 'last_seen', 'current')";
            $columns = '';
            $query = $this->db->query($sql);
            $result = $query->result();
            foreach ($result as $item) {
                $columns .= ',' . $item->string;
            }
            $columns = substr($columns, 1);
            $match_columns = $this->m_devices_components->match_columns($table);
            $match_columns_string = "`" . implode("`, '_', `", $match_columns) . "`";
            $sql = "INSERT INTO `components` (SELECT NULL, system_id, current, first_seen, last_seen, '$table', CONCAT($match_columns_string), JSON_OBJECT($columns) FROM `$table`)";
            echo $table . "\n\n" . $sql . "\n\n";
            $item_start = microtime(true);
            $query = $this->db->query($sql);
            $time_to_execute = (microtime(true) - $item_start);
            echo "Execute time: $time_to_execute \n\n\n\n";
        }
        echo "</pre>\n";
    }

    public function db_compare()
    {
        $this->load->helper('diff');
        #$tables = array('attachment','attributes','audit_log','bios','change_log','chart','cluster','configuration','connections','credential','credentials','discoveries','discovery_log','disk','dns','edit_log','field','fields','file','files','graph','groups','invoice','invoice_item','ip','ldap_groups','ldap_servers','licenses','locations','log','logs','maps','memory','module','monitor','motherboard','netstat','network','networks','nmap','notes','oa_change','oa_temp','oa_user_sessions','optical','orgs','pagefile','partition','print_queue','processor','queries','roles','route','san','scripts','scsi','server','server_item','service','share','software','software_key','sound','summaries','system','task','tasks','user','user_group','users','variable','video','vm','warranty','windows');

        $tables = $this->db->list_tables();

        $this->load->model('m_configuration');
        $this->m_configuration->load();
        $sql_file = file($this->config->config['base_path'] . '/other/openaudit_mysql.sql');

        echo "<style>";
        echo ".diff td {\n  vertical-align: top;\n  white-space: pre;\n  white-space: pre-wrap;\n  font-family: monospace;\n}\n";
        echo ".diffDeleted span {\n  border: 1px solid rgb(255,192,192);\n  background: rgb(255,224,224);\n}\n";
        echo ".diffInserted span {\n  border: 1px solid rgb(192,255,192);\n  background: rgb(224,255,224);\n}\n";
        echo "</style>\n";

        foreach ($tables as $table) {
            # From the DB
            $query = $this->db->query("SHOW CREATE TABLE `$table`");
            $result = $query->result();
            if (!empty($result[0]->{'Create Table'})) {
                $db_schema = preg_replace('/AUTO_INCREMENT=\d+ /', '', $result[0]->{'Create Table'});
            } else {
                $db_schema = '';
            }

            # From the file
            $file_schema = '';
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
            if (empty($file_schema)) {
                echo "<span style=\"color:red;\"><strong>" . $table . " does not exist in the file.</strong></span><br />";
            } else {
                echo "<strong>Del: $count_del Ins: $count_ins</strong>\n";
                $table_output = Diff::toTable(Diff::compare($file_schema, $db_schema));
                echo str_replace('<table class="diff">', '<table class="diff" style="width:100%">', $table_output);
            }
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
