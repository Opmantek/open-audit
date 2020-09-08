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
* @version   GIT: Open-AudIT_3.4.1
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

    /**
     * [response description]
     * @return [type] [description]
     */
    public function response()
    {
        $this->load->helper('response');
        $this->load->library('unit_test');

        // response_helper::response_get_include

        $urlget = 'something';
        $post = '';
        $collection = '';
        $format = 'screen';
        $test = response_get_include($urlget, $post, $collection, $format);
        $this->unit->run($test, '', 'response_helper::response_get_include', 'Send invalid GET "something", get "" back.');

        $urlget = 'something';
        $post = '';
        $collection = 'devices';
        $format = 'screen';
        $test = response_get_include($urlget, $post, $collection, $format);
        $this->unit->run($test, '', 'response_helper::response_get_include', 'Send invalid GET "something", with collection "devices", get "" back.');

        $urlget = '';
        $post = 'blah,processor';
        $collection = 'devices';
        $format = 'screen';
        $test = response_get_include($urlget, $post, $collection, $format);
        $this->unit->run($test, 'processor', 'response_helper::response_get_include', 'Send invalid POST "blah,processor" and collection "devices", get "processor" back.');

        $urlget = 'bios';
        $post = '';
        $collection = 'devices';
        $format = 'screen';
        $test = response_get_include($urlget, $post, $collection, $format);
        $this->unit->run($test, 'bios', 'response_helper::response_get_include', 'Send valid GET (bios) and collection "devices", get "bios" back.');

        $urlget = null;
        $post = '';
        $collection = 'devices';
        $format = 'screen';
        $test = response_get_include($urlget, $post, $collection, $format);
        $this->unit->run($test, implode(',', response_valid_includes()), 'response_helper::response_get_include', 'Send invalid GET (null) and collection "devices", get all includes back.');

        // response_helper::response_get_limit

        $urlget = null;
        $post = '';
        $format = 'screen';
        $default_limit = 10;
        $test = response_get_limit($urlget, $post, $format, $default_limit);
        $this->unit->run($test, 10, 'response_helper::response_get_limit', 'Send invalid GET null and a default limit 10, get 10 back.');

        $urlget = 100;
        $post = '';
        $format = 'screen';
        $default_limit = 10;
        $test = response_get_limit($urlget, $post, $format, $default_limit);
        $this->unit->run($test, 100, 'response_helper::response_get_limit', 'Send valid GET limit 100, get 100 back.');

        $urlget = '';
        $post = 100;
        $format = 'screen';
        $default_limit = 10;
        $test = response_get_limit($urlget, $post, $format, $default_limit);
        $this->unit->run($test, 100, 'response_helper::response_get_limit', 'Send valid POST limit 100, get 100 back.');

        // response_helper::response_get_collection

        $urlget = 'devices';
        $test = response_get_collection($urlget);
        $this->unit->run($test, 'devices', 'response_helper::response_get_collection', 'Send valid get "devices", get "devices" back');

        $urlget = 'something';
        $test = response_get_collection($urlget);
        $this->unit->run($test, 'summaries', 'response_helper::response_get_collection', 'Send invalid GET "something", get "summaries" back.');

        // response_helper::response_get_current

        $urlget = 'y';
        $post = '';
        $test = response_get_current($urlget, $post);
        $this->unit->run($test, 'y', 'response_helper::response_get_current', 'Send valid GET "y", get "y" back.');

        $urlget = '';
        $post = 'y';
        $test = response_get_current($urlget, $post);
        $this->unit->run($test, 'y', 'response_helper::response_get_current', 'Send valid POST "y", get "y" back.');

        $urlget = 'n';
        $post = '';
        $test = response_get_current($urlget, $post);
        $this->unit->run($test, 'n', 'response_helper::response_get_current', 'Send valid GET "n", get "n" back.');

        $urlget = '';
        $post = 'n';
        $test = response_get_current($urlget, $post);
        $this->unit->run($test, 'n', 'response_helper::response_get_current', 'Send valid POST "n", get "n" back.');

        $urlget = 'a';
        $post = '';
        $test = response_get_current($urlget, $post);
        $this->unit->run($test, 'y', 'response_helper::response_get_current', 'Send invalid GET "a", get "y" back.');

        $urlget = '';
        $post = 'a';
        $test = response_get_current($urlget, $post);
        $this->unit->run($test, 'y', 'response_helper::response_get_current', 'Send invalid POST "a", get "y" back.');

        // response_helper::response_get_data

        // response_helper::response_get_debug

        $urlget = 'true';
        $post = '';
        $header = '';
        $test = response_get_debug($urlget, $post, $header);
        $this->unit->run($test, 'is_true', 'response_helper::response_get_debug', 'Send valid GET (true), get true back.');

        $urlget = '';
        $post = 'true';
        $header = '';
        $test = response_get_debug($urlget, $post, $header);
        $this->unit->run($test, 'is_true', 'response_helper::response_get_debug', 'Send valid POST (true), get true back.');

        $urlget = '';
        $post = '';
        $header = 'true';
        $test = response_get_debug($urlget, $post, $header);
        $this->unit->run($test, 'is_true', 'response_helper::response_get_debug', 'Send valid HEADER (true), get true back.');

        $urlget = 'false';
        $post = '';
        $header = '';
        $test = response_get_debug($urlget, $post, $header);
        $this->unit->run($test, 'is_false', 'response_helper::response_get_debug', 'Send valid GET (false), get false back.');

        $urlget = '';
        $post = 'false';
        $header = '';
        $test = response_get_debug($urlget, $post, $header);
        $this->unit->run($test, 'is_false', 'response_helper::response_get_debug', 'Send valid POST (false), get false back.');

        $urlget = '';
        $post = '';
        $header = 'false';
        $test = response_get_debug($urlget, $post, $header);
        $this->unit->run($test, 'is_false', 'response_helper::response_get_debug', 'Send valid HEADER (false), get false back.');

        $urlget = 'a';
        $post = '';
        $header = '';
        $test = response_get_debug($urlget, $post, $header);
        $this->unit->run($test, 'is_false', 'response_helper::response_get_debug', 'Send invalid GET "a", get false back.');

        $urlget = '';
        $post = 'a';
        $header = '';
        $test = response_get_debug($urlget, $post, $header);
        $this->unit->run($test, 'is_false', 'response_helper::response_get_debug', 'Send invalid POST "a", get false back.');

        $urlget = '';
        $post = '';
        $header = 'a';
        $test = response_get_debug($urlget, $post, $header);
        $this->unit->run($test, 'is_false', 'response_helper::response_get_debug', 'Send invalid HEADER "a", get false back.');

        echo $this->unit->report();
    }

    public function discoveries_fix()
    {
        $this->load->model('m_configuration');
        $this->m_configuration->load();
        $sql = 'SELECT * FROM discovery_scan_options WHERE id = ' . intval($this->config->config['discovery_default_scan_option']);
        $query = $this->db->query($sql);
        $result = $query->result();
        if ( ! empty($result)) {
            $scan_options = $result[0];
        } else {
            $sql = 'SELECT * FROM discovery_scan_options WHERE name LIKE "%fast" ORDER BY `name` DESC LIMIT 1';
            $query = $this->db->query($sql);
            $result = $query->result();
            if ( ! empty($result)) {
                $scan_options = $result[0];
            } else {
                echo '<h1>ERROR</h1><br /><p>There are no discovery scan options in the database we can use, please run the below in the MySQL client or contact <a href="https://opmantek.com">Opmantek</a> if you are a supported customer.';
                echo "<br /><br /><pre>\n";
                echo "INSERT INTO `discovery_scan_options` VALUES (1,'UltraFast',1,'Approximately 1 second per target. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n','n',0,4,0,0,'22,135,62078','161','','','','22','','system','2000-01-01 00:00:00');\n\n
INSERT INTO `discovery_scan_options` VALUES (2,'SuperFast',1,'Approximately 5 seconds per target. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n','n',0,4,10,10,'62078','','','','','22','','system','2000-01-01 00:00:00');\n\n
INSERT INTO `discovery_scan_options` VALUES (3,'Fast',1,'Approximately 40 seconds per target. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n','n',0,4,100,100,'62078','','','','','22','','system','2000-01-01 00:00:00');\n\n
INSERT INTO `discovery_scan_options` VALUES (4,'Medium (Classic)',1,'Approximately 90 seconds per target. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An open|filtered port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.','n','n','y','y',0,4,1000,0,'62078','161','','','','22','','system','2000-01-01 00:00:00');\n\n
INSERT INTO `discovery_scan_options` VALUES (5,'Medium',1,'Approximately 100 seconds per target. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n','n',0,4,1000,100,'62078','','','','','22','','system','2000-01-01 00:00:00');\n\n
INSERT INTO `discovery_scan_options` VALUES (6,'Slow',1,'Approximately 4 minutes per target. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An open|filtered port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.','y','y','y','y',0,3,1000,100,'62078','','','','','22','','system','2000-01-01 00:00:00');\n\n
INSERT INTO `discovery_scan_options` VALUES (7,'UltraSlow',1,'Approximately 20 minutes. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An open|filtered port is considered open (and will trigger device detection). Use polite timing.','n','y','y','y',0,2,1000,1000,'62078','','','','','22','','system','2000-01-01 00:00:00');\n\n</pre>";
                exit;
            }
        }
        echo "<h3>Please save this page for reference</h3>\n";
        echo '<hr /><pre>';
        $other = new stdCLass();
        $other->ad_domain = '';
        $other->ad_server = '';
        $other->subnet = '';
        $other->nmap = new stdClass();
        $other->nmap->discovery_scan_option_id = intval($scan_options->id);
        $other->nmap->filtered = $scan_options->filtered;
        $other->nmap->{'open|filtered'} = $scan_options->{'open|filtered'};
        $other->nmap->ping = $scan_options->ping;
        $other->nmap->service_version = $scan_options->service_version;
        $other->nmap->ssh_ports = $scan_options->ssh_ports;
        $other->nmap->tcp_ports = $scan_options->tcp_ports;
        $other->nmap->timing = $scan_options->timing;
        $other->nmap->udp_ports = $scan_options->udp_ports;
        $other->nmap->timeout = $scan_options->timeout;
        $other->nmap->nmap_tcp_ports = $scan_options->nmap_tcp_ports;
        $other->nmap->nmap_udp_ports = $scan_options->nmap_udp_ports;
        $other->match = new stdClass();
        $warning = '<b>WARNING</b>';
        $error = '<b>ERROR</b>';
        $sql = 'SELECT * FROM discoveries';
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $discovery) {
            echo 'Checking discovery named: ' . htmlentities($discovery->name);
            $original_discovery = clone $discovery;
            $original_discovery->other = @json_decode($original_discovery->other);
            $output = '';
            if (empty($discovery->other)) {
                $output .= $error . " - There is no discoveries.other attribute. This discovery will never run. Please delete it.\n";
                $discovery->other = $other;
            } else {
                $discovery->other = json_decode($discovery->other);
            }
            if (empty($discovery->other->subnet) && $discovery->type === 'subnet') {
                $output .= $error . " - There is no discoveries.other.subnet attribute, although the discoveries.type is subnet. This discovery will never run. Please delete it.\n";
            }
            if ((empty($discovery->other->ad_server) OR empty($discovery->other->ad_domain)) && $discovery->type === 'active directory') {
                $output .= $error . " - There is no discoveries.other.ad_server or discoveries.other.ad_domain attribute, although the discoveries.type is active directory. This discovery will never run. Please delete it.\n";
            }
            if (empty($discovery->other->nmap)) {
                $discovery->other->nmap = $other->nmap;
                $output .= $warning . " - No discoveries.other.nmap, populating with default.\n";
            }
            if (empty($discovery->other->match)) {
                $discovery->other->match = $other->match;
                $output .= $warning . " - No discoveries.other.match, populating with default.\n";
            }
            if ($output !== '') {
                echo "\n{$output}\n";
                $sql = "UPDATE discoveries SET other = '" . json_encode($discovery->other) . "' WHERE id = " . intval($discovery->id);
                echo $sql . "\n";
                $query = $this->db->query($sql);
                echo "</pre>\n";
                echo "<table><tr><td style=\"vertical-align:text-top\"><b>Original</b>\n<pre>\n";
                print_r($original_discovery);
                echo "</pre></td><td style=\"vertical-align:text-top\"><b>Modified</b>\n<pre>\n";
                print_r($discovery);
                echo "</pre></td></tr></table>\n<pre>\n\n<hr />\n";
            } else {
                echo " - PASSED.\n\n<hr />\n";
            }
        }
    }

    public function base()
    {
        $sql = 'SELECT NOW() as `timestamp`';
        $query = $this->db->query($sql);
        $result = $query->result();
        $timestamp = $result[0]->timestamp;

        $sql = "DELETE FROM baselines";
        $this->db->query($sql);

        $sql = "DELETE FROM baselines_policies";
        $this->db->query($sql);

        $directory_path = '/usr/local/opmojo/var/oae/baselines/definitions/';
        if (is_dir($directory_path)) {
            $directory = dir($directory_path);
            while (false !== ($entry = $directory->read())) {
                $contents = '';
                if (strpos($entry, '.json') !== false) {
                    $contents = file_get_contents($directory_path . $entry);
                    echo $entry."<br />\n";
                    $definition = @json_decode($contents);
                    if ($definition) {
                        if (is_array($definition->policies)) {
                            $sql = "INSERT INTO `baselines` VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                            $data = array($definition->id, $definition->name, $definition->org_id, $definition->description, $definition->notes, $definition->documentation, $definition->priority, $this->user->full_name, $timestamp);
                            $this->db->query($sql, $data);
                            echo $this->db->last_query();
                            echo "<br /><br />\n";
                            foreach ($definition->policies as $policy) {
                                if (! empty($policy->name)) {
                                    $sql = 'INSERT INTO baselines_policies VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
                                    $notes = '';
                                    if (!empty($policy->notes)) {
                                        $notes = $policy->notes;
                                    }
                                    $documentation = '';
                                    if (!empty($policy->documentation)) {
                                        $documentation = $policy->documentation;
                                    }
                                    $data = array($definition->id, $policy->name, $policy->priority, $notes, $documentation, $policy->table, json_encode($policy->tests), $this->user->full_name, $timestamp);
                                    $this->db->query($sql, $data);
                                }
                            }
                        }
                    }
                }
            }
            $directory->close();
        }
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
                $oui = str_replace('-', ':', strtolower(trim(substr($file[$i], 0, 8))));
                $manufacturer = trim(substr($file[$i], 17));
                $ouis[$oui] = $manufacturer;
                $value = $manufacturer;
                $value = trim($value);
                if ($value === 'TP-LINK TECHNOLOGIES CO.,LTD.') { $value = 'TP-Link'; }
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
        $tables = $this->db->list_tables();
        $this->load->model('m_configuration');
        $this->m_configuration->load();
        $sql_file = file($this->config->config['base_path'] . '/other/openaudit_mysql.sql');
        $output = '';
        $body_output = '';
        $total_inserts = 0;
        $total_deletes = 0;

        $output .= "<style>\n";
        $output .= ".diff td {\n  vertical-align: top;\n  white-space: pre;\n  white-space: pre-wrap;\n  font-family: monospace;\n}\n";
        $output .= ".diffDeleted span {\n  border: 1px solid rgb(255,192,192);\n  background: rgb(255,224,224);\n}\n";
        $output .= ".diffInserted span {\n  border: 1px solid rgb(192,255,192);\n  background: rgb(224,255,224);\n}\n";
        $output .= "</style>\n";
        foreach ($tables as $table) {
            // From the DB
            $query = $this->db->query("SHOW CREATE TABLE `{$table}`");
            $result = $query->result();
            if ( ! empty($result[0]->{'Create Table'})) {
                $db_schema = preg_replace('/AUTO_INCREMENT=\d+ /', '', $result[0]->{'Create Table'});
            } else {
                $db_schema = '';
            }

            // NOTE - the below exceptions and conversions are because MariaDB no longer encloses default interger values with single quotes.
            // Rather than alter the schema file (and 'break' old MySQL / MariaDB), just substitute the old way back in. See https://jira.mariadb.org/browse/MDEV-15377
            $db_schema = str_replace("NOT NULL DEFAULT 0.000,", "NOT NULL DEFAULT '0.000',", $db_schema);
            $db_schema = str_replace('NOT NULL DEFAULT 0,', "NOT NULL DEFAULT '0',", $db_schema);
            $db_schema = str_replace('NOT NULL DEFAULT 1,', "NOT NULL DEFAULT '1',", $db_schema);

            $db_schema = str_replace('unsigned DEFAULT 0,', "unsigned DEFAULT '0',", $db_schema);
            $db_schema = str_replace('unsigned DEFAULT 1,', "unsigned DEFAULT '1',", $db_schema);

            $db_schema = str_replace('unsigned NOT NULL DEFAULT 3,', "unsigned NOT NULL DEFAULT '3',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 4,', "unsigned NOT NULL DEFAULT '4',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 5,', "unsigned NOT NULL DEFAULT '5',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 24,', "unsigned NOT NULL DEFAULT '24',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 42,', "unsigned NOT NULL DEFAULT '42',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 100,', "unsigned NOT NULL DEFAULT '100',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 600,', "unsigned NOT NULL DEFAULT '600',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 1050,', "unsigned NOT NULL DEFAULT '1050',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 2000,', "unsigned NOT NULL DEFAULT '2000',", $db_schema);

            $db_schema = str_replace("decimal(12,6) NOT NULL DEFAULT 0.000000", "decimal(12,6) NOT NULL DEFAULT '0.000000'", $db_schema);
            $db_schema = str_replace("float(10,6) NOT NULL DEFAULT 0.000000,", "float(10,6) NOT NULL DEFAULT '0.000000',", $db_schema);
            $db_schema = str_replace('timestamp NOT NULL DEFAULT current_timestamp()', "timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP", $db_schema);
            $db_schema = str_replace('text DEFAULT NULL,', "text,", $db_schema);


            // From the file
            $file_schema = '';
            for ($i=0; $i < count($sql_file); $i++) { 
                if (strpos($sql_file[$i], "CREATE TABLE `{$table}`") !== false) {
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

            // Count the differences
            $diff = Diff::compare($file_schema, $db_schema);
            $count_del = 0;
            $count_ins = 0;
            foreach ($diff as $line) {
                if ($line[1] === 1) {
                    $count_del += 1;
                }
                if ($line[1] === 2) {
                    $count_ins += 1;
                }
            }
            if ($count_ins !== 0) {
                $total_inserts = $total_inserts + $count_ins;
                $count_ins = "<span style=\"color:limegreen;\">{$count_ins}</span>";
            }
            if ($count_del !== 0) {
                $total_deletes = $total_deletes + $count_del;
                $count_del = "<span style=\"color:red;\">{$count_del}</span>";
            }
            // Output
            $body_output .= "<h2>{$table} (file -> database)</h2>\n";
            if (empty($file_schema)) {
                $body_output .= "<span style=\"color:red;\"><strong>{$table} does not exist in the file.</strong></span><br />\n";
            } else {
                $body_output .= "<strong>Del: {$count_del} Ins: {$count_ins}</strong>\n";
                $table_output = Diff::toTable(Diff::compare($file_schema, $db_schema));
                $temp = str_replace('<table class="diff">', '<table class="diff" style="width:100%">', $table_output);
                $body_output .= $temp;
            }
            $body_output .= "<br /><br />\n";
        }
        $output .= "<h2>Inserts: {$total_inserts} Deletes: {$total_deletes}</h2>\n<br /><br />\n" . $body_output;
        echo $output;
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
        $this->load->helper('snmp');
        $dir = BASEPATH.'../application/helpers/';
        $dir_files = scandir($dir);
        $file_list = array();
        $this->load->helper('snmp_oid');
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
