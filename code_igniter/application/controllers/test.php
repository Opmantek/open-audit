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
 * @version 1.12
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
        $this->load->model('m_oa_user');
        $this->m_oa_user->validate_user();
        if ($this->user->user_admin != 'y') {
            if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                redirect('main/list_groups');
            }
        }

        $this->load->helper('log');

        // log the attempt
        $log_details = new stdClass();
        $log_details->severity = 6;
        stdlog($log_details);
        unset($log_details);

        $this->load->helper('report_helper');
        check_default_reports();
        $this->load->helper('group_helper');
        check_default_groups();
    }

    public function index()
    {
        redirect('/');
    }

    function net()
    {
        $this->load->helper('network_helper');
        echo "<pre>\n"; print_r(network_details('192.168.0.7 / 24'));
        echo "<pre>\n"; print_r(network_details('192.168.0.1 / 30'));
    }

    function upgrade_ip()
    {
        $sql = array();
        #$sql[] = "DELETE sys_hw_network_card_ip FROM sys_hw_network_card_ip LEFT JOIN system ON system.system_id = sys_hw_network_card_ip.system_id WHERE sys_hw_network_card_ip.timestamp <> system.timestamp";
        $sql[] = "CREATE TABLE `ip` (
          `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
          `system_id` int(10) unsigned DEFAULT NULL,
          `current` enum('y','n') NOT NULL DEFAULT 'y',
          `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
          `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
          `mac` varchar(200) NOT NULL DEFAULT '',
          `net_index` varchar(10) NOT NULL DEFAULT '',
          `ip` varchar(45) NOT NULL DEFAULT '',
          `subnet` varchar(30) NOT NULL DEFAULT '',
          `version` tinyint(3) unsigned NOT NULL DEFAULT '4',
          `network` varchar(40) NOT NULL DEFAULT '',
          `set_by` enum('','dhcp','static','auto','local') NOT NULL DEFAULT '',
          PRIMARY KEY (`id`),
          KEY `system_id` (`system_id`),
          KEY `mac` (`mac`),
          CONSTRAINT `ip_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

        $sql[] = "INSERT INTO ip (SELECT NULL, system_id, 'y', first_timestamp, `timestamp`, net_mac_address, net_index, ip_address_v4, ip_subnet, '4', '', '' FROM sys_hw_network_card_ip WHERE ip_address_version = '4')";

        $sql[] = "INSERT INTO ip (SELECT NULL, system_id, 'y', first_timestamp, `timestamp`, net_mac_address, net_index, ip_address_v6, ip_subnet, '6', '', '' FROM sys_hw_network_card_ip WHERE ip_address_version = '6')";

        foreach ($sql as $this_query) {
            $this->data['output'] .= $this_query."<br /><br />\n";
            $query = $this->db->query($this_query);
        }
    }

    public function network_groups()
    {
        // update the network groups
        $sql = "SELECT group_id, group_dynamic_select, group_name FROM oa_group WHERE group_category = 'network'";
        echo "<pre>\n";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $group) {
            $dynamic_select = $group->group_dynamic_select;
            #$dynamic_select = str_replace("system.system_id", "system.id", $dynamic_select);
            $dynamic_select = str_replace("SELECT distinct(system.system_id) FROM system, sys_hw_network_card_ip", "SELECT distinct(system.system_id) FROM system, ip", $dynamic_select);
            $dynamic_select = str_replace("WHERE ( sys_hw_network_card_ip", "WHERE ( ip.version = '4' AND ip", $dynamic_select);
            $dynamic_select = str_replace("sys_hw_network_card_ip.ip_address_v4", "ip.ip", $dynamic_select);
            $dynamic_select = str_replace("sys_hw_network_card_ip.ip_subnet", "ip.subnet", $dynamic_select);
            $dynamic_select = str_replace("sys_hw_network_card_ip.timestamp = system.timestamp", "ip.current = 'y'", $dynamic_select);
            #$dynamic_select = str_replace("system.man_ip_address", "system.ip", $dynamic_select);
            #$dynamic_select = str_replace("system.man_status", "system.status", $dynamic_select);
            $dynamic_select = str_replace("oa_group_sys.group_id = ?", "oa_group_sys.group_id = @group", $dynamic_select);
            $dynamic_select = str_replace("ip.ip_address_v4", "ip.ip", $dynamic_select);
            $dynamic_select = str_replace("sys_hw_network_card_ip.system_id", "ip.system_id", $dynamic_select);
            // echo $group->group_name . "\n" . $group->group_dynamic_select . "\n" . $dynamic_select . "\n\n";
            $sql = "UPDATE oa_group SET group_dynamic_select = ? WHERE group_id = ?";
            $data = array("$dynamic_select", $group->group_id);
            $query = $this->db->query($sql, $data);
            echo $this->db->last_query() . str_pad("", 1024, " ") . "\n\n";
            // ob_flush();
            // flush();
            // $sql = "UPDATE oa_group SET updated = 'y' WHERE id = ?";
            // $data = array($group->id);
            // $query = $this->db->query($sql, $data);
        }
    }

    public function initial_network()
    {
        echo "<pre>\n";
        $this->output->enable_profiler(true);
        $sql = "SELECT * FROM oa_group WHERE group_category = 'network'";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $network = str_replace('Network - ', '', $row->group_name);
            $sql = "";
            $sql = str_replace('SELECT distinct(system.system_id) FROM system, ip WHERE (', 'UPDATE ip SET network = "' . $network . '" WHERE (', $row->group_dynamic_select);
            $sql = substr($sql, 0, strpos($sql, ')')+1);
            $sql = str_replace("AND ip.system_id = system.system_id AND ip.current = 'y' AND system.man_status = 'production'", "", $sql);
            echo $sql . "\n\n";
            $query_update = $this->db->query($sql);
        }
    }

    public function update_class()
    {
        $sql = array();
        $sql[] = "UPDATE system SET man_class = 'virtual server' WHERE (manufacturer LIKE '%vmware%' OR manufacturer LIKE '%Parallels%') AND os_family IN ('Windows 2008', 'Windows 2012', 'Windows 2003')";
        $sql[] = "UPDATE system SET man_class = 'hypervisor' WHERE os_family LIKE 'VMware ESX%'";
        $sql[] = "UPDATE system SET man_class = 'virtual desktop' WHERE manufacturer LIKE '%vmware%' AND os_family IN ('Windows XP', 'Windows 7', 'Windows 8', 'Windows 10')";
    }

    public function org_user()
    {
        $this->output->enable_profiler(true);
        echo "<pre>\n";
        $user_org_id = array();
        $sql = "SELECT org_id FROM oa_user_org WHERE user_id = ?";
        $data = array(1);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $row) {
            $user_org_id[] = $row->org_id;
        }
        # TODO - get a list of user_org.org_id's with perms like '%r%' and
        # feed it into the array below
        $org_id_list = array();
        foreach ($user_org_id as $org_id) {
            $org_id_list[] = $org_id;
            foreach ($this->get_org_id($org_id) as $key => $value) {
                $org_id_list[] = $value;
            }
        }

        $instring = implode(',', $org_id_list) . "\n";
        echo $instring . "\n";
        // $sql = "SELECT system_id, hostname, type, man_org_id, org_name FROM system LEFT JOIN oa_org ON system.man_org_id = oa_org.org_id WHERE man_org_id IN (" . $instring . ")";
        // echo $sql . "\n";
        // $query = $this->db->query($sql);
        // $result = $query->result();
        // echo "<table border=1>\n";
        // foreach ($result as $row) {
        //     echo "  <tr>\n";
        //     echo "      <td>" . $row->system_id . "</td>\n";
        //     echo "      <td>" . $row->hostname . "</td>\n";
        //     echo "      <td>" . $row->man_org_id . "</td>\n";
        //     echo "      <td>" . $row->org_name . "</td>\n";
        //     echo "      <td>" . $row->type . "</td>\n";
        // }
        // echo "</table\n";

        $dashboard = new stdClass();
        $dashboard->total = array();

        $dashboard->type = array();
        $sql = "SELECT count(*) AS count, type FROM system WHERE man_org_id IN (" . $instring . ") GROUP BY type";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->type[$row->type] = $row->count;
        }
        $dashboard->total['type'] = count($result);

        $dashboard->org = array();
        $sql = "SELECT count(system_id) AS count, man_org_id, org_name FROM system LEFT JOIN oa_org ON system.man_org_id = oa_org.org_id WHERE man_org_id IN (" . $instring . ") GROUP BY man_org_id";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->org[$row->org_name] = $row->count;
        }
        $dashboard->total['org'] = count($result);

        $dashboard->location = array();
        $sql = "SELECT count(system.system_id) AS count, system.man_location_id, oa_location.location_name FROM system LEFT JOIN oa_location ON system.man_location_id = oa_location.location_id WHERE system.man_org_id IN (" . $instring . ") GROUP BY system.man_location_id";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->location[$row->location_name] = $row->count;
        }
        $dashboard->total['location'] = count($result);

        $dashboard->os_family = array();
        $sql = "SELECT count(system.system_id) AS count, system.os_family FROM system WHERE system.man_org_id IN (" . $instring . ") AND os_family != '' GROUP BY system.os_family";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->os_family[$row->os_family] = $row->count;
        }
        $dashboard->total['os_family'] = count($result);


        $dashboard->server = array();
        $sql = "SELECT count(system.system_id) AS count, server.type FROM system LEFT JOIN server ON (system.system_id = server.system_id) WHERE system.man_org_id IN (" . $instring . ") AND server.current = 'y' GROUP BY server.type";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->server[$row->type] = $row->count;
        }
        $dashboard->total['server'] = count($result);


        $dashboard->status = array();
        $sql = "SELECT count(system.system_id) AS count, system.man_status FROM system WHERE system.man_org_id IN (" . $instring . ") GROUP BY system.man_status";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->status[$row->man_status] = $row->count;
        }
        $dashboard->total['status'] = count($result);


        $dashboard->manufacturer = array();
        $sql = "SELECT count(system.system_id) AS count, system.manufacturer FROM system WHERE manufacturer != '' AND system.man_org_id IN (" . $instring . ") GROUP BY system.manufacturer";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->manufacturer[$row->manufacturer] = $row->count;
        }
        $dashboard->total['manufacturer'] = count($result);


        $dashboard->device = array();
        $sql = "SELECT count(system.system_id) AS count FROM system WHERE system.man_org_id IN (" . $instring . ")";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->total['device'] = $row->count;
        }


        $dashboard->domain = array();
        $sql = "SELECT count(system.system_id) AS count, system.domain FROM system WHERE domain != '' AND system.man_org_id IN (" . $instring . ") GROUP BY system.domain ORDER BY REVERSE(domain)";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->domain[$row->domain] = $row->count;
        }
        $dashboard->total['domain'] = count($result);


        $dashboard->network = array();
        $sql = "SELECT count(system.system_id) AS count, ip.network FROM system LEFT JOIN ip ON (system.system_id = ip.system_id) WHERE ip.current = 'y' AND ip.network != '' and ip.network != '0.0.0.0 / 0' AND system.man_org_id IN (" . $instring . ") GROUP BY ip.network";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->network[$row->network] = $row->count;
        }
        $dashboard->total['network'] = count($result);




        echo "<br /><br />\n\n"; print_r($dashboard);


    }

    private function get_org_id($org_id)
    {
        $org_id_list = array();
        $org_id = intval($org_id);
        $sql = "SELECT org_id FROM oa_org WHERE org_parent_id = ? AND org_id != 0";
        $data = array($org_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $row) {
            $org_id_list[] = $row->org_id;
            foreach ($this->get_org_id($row->org_id) as $key => $value) {
                $org_id_list[] = $value;
            }
        }
        return($org_id_list);
    }



    public function group()
    {

        # get the Org's for this user
        $user_org_id = array();
        $sql = "SELECT org_id FROM oa_user_org WHERE user_id = ?";
        $data = array(1);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $row) {
            $user_org_id[] = $row->org_id;
        }

        $org_id_list = array();
        foreach ($user_org_id as $org_id) {
            $org_id_list[] = $org_id;
            foreach ($this->get_org_id($org_id) as $key => $value) {
                $org_id_list[] = $value;
            }
        }

        $instring = implode(',', $org_id_list) . "\n";
        echo $instring . "\n";

        $test = array();
        $test[] = "system.type = 'bridge'";
        $test[] = "oa_org.org_name = 'OpenDealerExchange'";
        $test[] = "oa_location.location_name = 'Pune - India'";
        $test[] = "system.os_family = 'Ubuntu'";
        $test[] = "server.type = 'web'";
        $test[] = "system.man_status = 'deleted'";
        $test[] = "system.manufacturer = 'DEC'";
        $test[] = "system.domain = 'ilo.ord.dsghost.net.'";
        $test[] = "ip.network = '1.2.3.0 / 24'";
        $test[] = "software.name = 'httpd'";

        echo "<pre>\n";
        foreach ($test as $item) {
            #print_r($item);
            $temp = explode('.', $item);
            $table = $temp[0];
            $temp = explode('=', $item);
            $column = trim($temp[0]);
            echo $item . "\n";
            if ($table == 'oa_location') {
                $sql = "SELECT system.system_id, system.hostname, system.type, $column FROM system LEFT JOIN oa_location ON system.man_location_id = oa_location.location_id WHERE $item AND system.man_org_id IN (" . $instring . ") ";
            } elseif ($table == 'oa_org') {
                $sql = "SELECT system.system_id, system.hostname, system.type, $column FROM system LEFT JOIN oa_org ON system.man_org_id = oa_org.org_id WHERE $item AND system.man_org_id IN (" . $instring . ") ";
            } elseif ($table != 'system') {
                $sql = "SELECT system.system_id, system.hostname, system.type, $column FROM system LEFT JOIN $table ON system.system_id = $table.system_id WHERE $table.current = 'y' AND $item AND system.man_org_id IN (" . $instring . ") ";
            } else {
                $sql = "SELECT system.system_id, system.hostname, system.type, $column FROM system WHERE $item AND system.man_org_id IN (" . $instring . ") ";
            }
            echo $sql . "\n";
            $query = $this->db->query($sql);
            $result = $query->result();
            echo "Count: " . count($result) . "\n\n";
        }
    }




    public function types ()
    {
        include 'include_device_types.php';
        echo "<pre>\n";
        foreach ($device_types as $key => $value) {
            echo $key . ' = ' . $value . "\n";
        }
    }

    public function dns()
    {
        print gethostbyaddr('192.168.1.1');
    }

    public function system_read()
    {
        $this->load->model('m_devices_components');
        echo "<pre>\n";
        echo $this->m_devices_components->read(1, 'y', 'system', '', 'hostname') . "\n";
        print_r($this->m_devices_components->read(1, 'y', 'edit_log', '', '*')); echo "\n";
    }

    public function delta()
    {
        echo "<pre>\n";
        $type = 'delta';
        $table = 'netstat';
        $system_id = 23;
        $first_seen = '';


        if ($type != 'delta' and $type != 'full') {
            return;
        }


        $sql = "SELECT first_seen FROM $table WHERE system_id = ? ORDER BY first_seen LIMIT 1";
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
            echo $this->db->last_query() . "\n";
        $result = $query->result();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $first_seen = $row->first_seen;
        }
        if ($first_seen != '') {
            if ($type == 'delta') {
                $sql = "SELECT $table.*, IF(($table.first_seen = ?), 'y', 'n') as original_install, IF($table.current = 'y', 'y', 'n') as current_install FROM $table WHERE system_id = ? and (current = 'y' or first_seen = ?)";
                $data = array("$first_seen", $system_id, "$first_seen");
            }
            if ($type == 'full') {
                $sql = "SELECT $table.*, IF(($table.first_seen = ?), 'y', 'n') as original_install, IF($table.current = 'y', 'y', 'n') as current_install FROM $table WHERE system_id = ?";
                $data = array("$first_seen", $system_id);
            }
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            echo $this->db->last_query() . "\n";
            print_r($result);
        } else {
            # no data in this table for the system_id
            return;
        }
    }

    public function login()
    {
        $this->load->model('m_oa_user');
        $this->m_oa_user->validate_user();
        $this->load->model('m_oa_config');
        $this->m_oa_config->load_config();
        echo "<pre>\n";
        echo "CONFIG\n";
        print_r($this->config);
        echo "USER\n";
        print_r($this->user);
        echo "SESSION\n";
        print_r($this->session);
    }

    public function json_rows()
    {
        $table = $this->uri->segment(3, 0);
        if (!isset($table) or $table == '') {
            $table = 'sys_hw_processor';
        }
        $sql = "SELECT * FROM $table limit 20";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as &$row) {
            foreach ($row as $key => $value) {
                if ($key == 'id' or $key == 'free' or $key == 'used' or $key == 'size' or $key == 'speed') {
                    $row->$key = (int) intval($value);
                } elseif ((strrpos($key, '_id') === strlen($key)-3) or
                          (strrpos($key, '_count') === strlen($key)-6) or
                          (strrpos($key, '_percent') === strlen($key)-8) or
                          (strrpos($key, '_size') === strlen($key)-5)) {
                    $row->$key = (int) intval($value);
                }
            }
        }
        $json = json_encode($result);
        print_r($json);
    }

    public function log()
    {
        $this->load->helper('log');
        $log_details = new stdClass();
        $log_details->file = 'access';
        $log_details->severity = 5;
        stdlog($log_details);
    }

    public function mark()
    {
        $this->load->helper('url');
        echo "<pre>\n";
        echo "BaseURL: ".base_url()."\n";
        echo "SiteURL: ".site_url()."\n";
        echo "URI String: ".uri_string()."\n";
        echo "Index Page: ".index_page()."\n";
    }

    public function test_date()
    {
        $date = date("Y-m-d");// current date
        $days_to_subtract = rand(0, 50);
        echo "<pre>\n";
        echo "Current Date: ".$date."\n";
        echo "Days to subtract: ".$days_to_subtract."\n";
        echo "Date: ".date("Y-m-d", strtotime("-".$days_to_subtract." days"))."\n";
        echo strtotime("now"), "\n";
        echo strtotime("10 September 2000"), "\n";
        echo strtotime("+1 day"), "\n";
        echo strtotime("+1 week"), "\n";
        echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
        echo strtotime("next Thursday"), "\n";
        echo strtotime("last Monday"), "\n";
    }

    public function test_snmp()
    {
        if (!isset($_POST['submit'])) {
            # display the form
            $this->data['heading'] = 'Test - upload and process SNMP';
            $this->data['include'] = 'v_test_snmp';
            $this->data['sortcolumn'] = '1';
            $this->load->view('v_template', $this->data);
        } else {
            # process the snmp
            $this->load->helper('snmp_oid');
            $result = array();
            $i = explode("\n", $_POST['snmp']);
            foreach ($i as $line) {
                $j = explode(" ", $line);
                if (substr($j[0], 0, 1) == ".") {
                    $j[0] = substr($j[0], 1, strlen($j[0]));
                }
                $result[$j[0]] = @$j[3];
            }
            echo "<pre>\n";
            #print_r($result);
            #echo "</pre>\n";
        }

        $details->man_ip_address = '';
        $details->ip_address = '';
        $details->subnet = '';
        $details->mac = '';
        $details->snmp_community = '';
        $details->name = '';
        $details->description = '';
        $details->uptime = '';
        $details->location = '';
        $details->contact = '';
        $details->snmp_version = '';
        $details->os_group = '';
        $details->man_os_group = '';
        $details->os_family = '';
        $details->man_os_family = '';
        $details->os_name = '';
        $details->man_os_name = '';
        $details->manufacturer = '';
        $details->man_manufacturer = '';
        $details->model = '';
        $details->man_model = '';
        $details->serial = '';
        $details->type = '';
        $details->device_type = '';

        // printer duplex
        $details->duplex = '';
        $i = @$result["1.3.6.1.2.1.43.13.4.1.10.1"];
        if (count($i) > 0) {
            $details->duplex = 'False';
            for ($k = 0; $k < count($i); $k++) {
                if (mb_strpos($i[$k], "Duplex") !== false) {
                    $details->duplex = 'True';
                }
            }
        }

        // sysObjectID
        $i = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.1.0"]);
        $details->oid = str_replace("OID: .", "", @$result["1.3.6.1.2.1.1.2.0"]);
        if (substr($details->oid, 0, 1) == ".") {
            $details->oid = substr($details->oid, 1, strlen($details->oid));
        }
        if (strtolower($details->oid) == 'no such object available on this agent at this oid') {
            $details->oid = '';
        }

        if ($details->oid > '') {
            $oid = get_oid($details->oid);
            $details->manufacturer = $oid->manufacturer;
            $details->man_manufacturer = $oid->manufacturer;
            $details->model = $oid->model;
            $details->man_model = $oid->model;
            $details->type = $oid->type;
            $details->device_type = $oid->type;
            $details->man_type = $oid->type;
            $details->os_group = $oid->os_group;
            $details->man_os_group = $oid->os_group;
        }

        if ($details->oid == '1.3.6.1.4.1.6876.4.1') {
            # grab some specific details for VMware ESX
            $model = str_replace("STRING: ", "", @$result["1.3.6.1.4.1.6876.1.1.0"]);
            $version = str_replace("STRING: ", "", @$result["1.3.6.1.4.1.6876.1.2.0"]);
            $details->model = $model." (".$version.")";
            $details->model = str_replace("\"", "", $details->model);
            $details->man_model = $details->model;
            $details->os_group = "VMware";
            $details->man_os_group = "VMware";
            $details->os_family = str_replace("STRING: ", "", @$result["1.3.6.1.4.1.6876.1.1.0"]);
            $details->os_family = str_replace("\"", "", $details->os_family);
            $details->man_os_family = $details->os_family;
            $details->os_name = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.1.0"]);
            $details->os_name = str_replace("\"", "", $details->os_name);
            $details->man_os_name = $details->os_name;
            $details->type = 'hypervisor';
            $details->device_type = 'hypervisor';
        }

        if (substr($details->oid, 0, 13) == '1.3.6.1.4.1.9') {
            $i = explode("$", @$result["1.3.6.1.4.1.9.9.25.1.1.1.2.5"]);
            $details->os_version = trim($i[1]);
            $i = @$result["1.3.6.1.4.1.9.9.25.1.1.1.2.7"];
            if (strpos($i, "IOS") !== false) {
                $details->os_group = 'Cisco';
                $details->man_os_group = 'Cisco';
                $details->os_family = 'Cisco IOS';
                $details->man_os_family = 'Cisco IOS';
                $details->os_name = "Cisco IOS version ".$details->os_version;
                $details->man_os_name = "Cisco IOS version ".$details->os_version;
            }
            if (strpos($i, "Catalyst Operating") !== false) {
                $details->os_group = 'Cisco';
                $details->man_os_group = 'Cisco';
                $details->os_family = 'Cisco Catalyst OS';
                $details->man_os_family = 'Cisco Catalyst OS';
                $detail->os_name = "Cisco Catalyst OS version ".$details->os_version;
                $detail->man_os_name = "Cisco Catalyst OS version ".$details->os_version;
            }
        }

        // manufacturer
        if ($details->manufacturer == '') {
            $hex = @$result["1.3.6.1.2.1.43.8.2.1.14.1"];
            if (count($hex) > 0) {
                if (isset($hex[1])) {
                    if (mb_strpos($hex[1], "Hex-STRING: ") !== false) {
                        $hex[1] = str_replace("Hex-STRING: ", "", $hex[1]);
                        for ($i = 0; $i<strlen($hex[1]); $i++) {
                            $details->manufacturer .= chr(hexdec(substr($hex[1], $i, 2)));
                        }
                    } else {
                        $details->manufacturer = str_replace("STRING: ", "", $hex[1]);
                        $details->manufacturer = str_replace('"', '', $details->manufacturer);
                    }
                }
            }
            if (($details->manufacturer == '') or ($details->manufacturer == 'No Such Object available on this agent at this OID')) {
                $details->manufacturer = str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.47.1.1.1.1.12.1"]));
            }
        }
        if ($details->manufacturer == 'No Such Instance currently exists at this OID') {
            $details->manufacturer = '';
        }
        if ($details->manufacturer == 'No Such Object available on this agent at this OID') {
            $details->manufacturer = '';
        }

        // serial
        echo "Serial: ".$result["1.3.6.1.2.1.47.1.1.1.1.11.1"]."\n";
        $details->serial = str_replace('"', '', str_replace("STRING: ", "", @$result["1.3.6.1.2.1.43.5.1.1.17.1"]));
        if ((!isset($details->serial)) or ($details->serial == '') or ($details->serial == 'No Such Object available on this agent at this OID')) {
            if (strpos(strtolower($details->manufacturer), 'cisco') !== false) {
                $details->serial = str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.47.1.1.1.1.11.1"]));
            }
        }
        if ($details->serial == 'No Such Object available on this agent at this OID') {
            $details->serial = '';
        }
        if ($details->serial == 'No Such Instance currently exists at this OID') {
            $details->serial = '';
        }

        // mac address
        $interface_number = @str_replace("INTEGER: ", "", @$result["1.3.6.1.2.1.4.20.1.2."].$details->man_ip_address);
        $details->mac = @str_replace("STRING: ", "", @$result["1.3.6.1.2.1.2.2.1.6."].$interface_number);
        $details->mac = @trim(str_replace("Hex-", "", $details->mac));
        $details->mac = @str_replace(" ", ":", $details->mac);
        # need to split and join because of the dropped 0's
        $i = explode(":", $details->mac);
        for ($k = 0; $k<count($i); $k++) {
            if (strlen($i[$k]) == 1) {
                $i[$k] = '0'.$i[$k];
            }
            if (strlen($i[$k]) == 0) {
                $i[$k] = '00';
            }
        }
        $details->mac = strtoupper(implode(":", $i));
        if ($details->mac == '00') {
            $details->mac = '';
        }

        // type
        if ($details->type == '') {
            $details->type = str_replace(
                "OID: HOST-RESOURCES-TYPES::hrDevice",
                "",
                str_replace(
                    "STRING: ",
                    "",
                    @$result["1.3.6.1.2.1.25.3.2.1.2.1"]
                )
            );
            if (($details->type == "No Such Object available on this agent at this OID") or ($details->type == '')) {

                # If the device is a Switch, the OID 1.3.6.1.2.1.17.1.2.0 and OID 1.3.6.1.2.1.4.1.0 should have a value of 2
                $i = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.17.1.2.0"]);
                $j = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.4.1.0"]);
                if (($i == '2') and ($j == '2')) {
                    $details->type = 'switch';
                }

                # If the device is a Router, the OID 1.3.6.1.2.1.4.1.0 should have a value of 1
                if ($details->type == '') {
                    $i = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.4.1.0"]);
                    if ($i == '1') {
                        $device->type = 'router';
                    }
                }

                # If the device is a Printer, the OID 1.3.6.1.2.1.43.5.1.1.1.1 should have a value
                if ($details->type == '') {
                    $i = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.43.5.1.1.1.1"]);
                    if ($i == '1') {
                        $device->type = 'printer';
                    }
                }
            }
        }
        if (strtolower($details->type) == 'no such object available on this agent at this oid') {
            $details->type = '';
        }

        // model
        if ($details->model == '') {
            $details->model = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.25.3.2.1.3.1"]);
            if (($details->model == '') or ($details->model == 'No Such Object available on this agent at this OID')) {
                if (strpos(strtolower($details->manufacturer), 'cisco') !== false) {
                    $details->model = str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.47.1.1.1.1.13.1"]));
                }
            }
        }
        if (strtolower($details->model) == 'no such object available on this agent at this oid') {
            $details->model = '';
        }

        // name
        if ($details->name == '') {
            $details->name = strtolower(str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.5.0"])));
        }
        if (strtolower($details->name) == 'no such object available on this agent at this oid') {
            $details->name = '';
        }

        if (filter_var($details->name, FILTER_VALIDATE_IP)) {
            # we have an ip address as opposed to a name or fqdn
        } else {
            # we have a name or fqdn
            if (strpos($details->name, ".")) {
                # fqdn - explode it
                $details->fqdn = $details->name;
            }
        }

        // description
        if ($details->description == '') {
            $details->description = str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.1.0"]));
            $details->description = str_replace("\r\n", " ", $details->description);
        }
        if (strtolower($details->description) == 'no such object available on this agent at this oid') {
            $details->description = '';
        }

        // uptime
        if ($details->uptime == '') {
            $i = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.3.0"]);
            if (($i > '') and (strpos($i, ")") !== false)) {
                $j = explode(")", $i);
                $details->uptime = trim($j[1]);
            } else {
                $details->uptime = '';
            }
        }

                // location
        if ($details->location == '') {
            $details->location = str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.6.0"]));
        }
        if ($details->location == 'Unknown (edit /etc/snmp/snmpd.conf)') {
            $details->location = '';
        }
        if ($details->location == 'not set') {
            $details->location = '';
        }
        if ($details->location == 'No Such Object available on this agent at this OID') {
            $details->location = '';
        }
        if ($details->location > '') {
            $details->description = "Location: ".$details->location.". ".$details->description;
        }

        // contact
        if ($details->contact == '') {
            $details->contact = str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.4.0"]));
        }
        if ($details->contact == 'Root  (configure /etc/snmp/snmpd.conf)') {
            $details->contact = '';
        }
        if ($details->contact == 'not set') {
            $details->contact = '';
        }
        if ($details->contact > '') {
            $details->description = "Contact: ".$details->contact.". ".$details->description;
        }

        // subnet
        if ($details->subnet == '') {
            $details->subnet = str_replace("IpAddress: ", "", @$result["1.3.6.1.2.1.4.20.1.3."].$details->man_ip_address);
        }
        if ($details->subnet == 'No Such Instance currently exists at this OID') {
            $details->subnet = '';
        }
        if ($details->subnet == 'No Such Object available on this agent at this OID') {
            $details->subnet = '';
        }

        // installed modules with serial numbers
        $i = @$result["1.3.6.1.2.1.47.1.1.1.1.11"];
        if (count($i) > 0) {
            if ($i[0] == 'No more variables left in this MIB View (It is past the end of the MIB tree)') {
                unset($i);
                $i = array();
            }
            if (count($i) > 0) {
                $count = 0;
                for ($j = 0; $j<count($i); $j++) {
                    if ((mb_strpos($i[$j], $details->serial) === false) and ($i[$j] != "") and ($i[$j] != "\"\"")) {
                        $k = $j + 1;
                        $k = "1.3.6.1.2.1.47.1.1.1.1.3.".$k;
                        $oid = $result[$k];
                        $oid = str_replace("OID: .", "", $oid);
                        $module->$count = get_oid($oid);
                        $module->$count->serial = str_replace("STRING: ", "", $i[$j]);
                        $module->$count->serial = str_replace('"', '', $module->$count->serial);
                        $count++;
                    }
                }
                $details->modules = $module;
            }
        }

        print_r($details);
    }

    function test_ssh()
    {
        $this->load->helper('ssh');
        echo "<pre>\n";
        $details = new stdClass();
        $details->man_ip_address = '192.168.1.1';
        #$details->system_id = 1;
        $credentials = new stdClass();
        $credentials->ssh_username = 'root';
        $credentials->ssh_password = '301170';
        #echo "===going to helper===\n";
        if ($test = ssh_connect($details, $credentials)) {
        #if ($test = ssh_connect($details)) {
            echo "Successful connect\n";
        } else {
            echo "Failed connect\n";
        }
        #echo "===back from helper===\n";
        #print_r($details);
        #echo "\n";
        if ($output = exec_ssh_command($details, 'uname', 'y')) {
            echo "Successful uname\n";
            echo "uname: " . $output[0] . "\n";
        } else {
            echo "Failed uname\n";
        }
        #print_r($output);
    }
}
