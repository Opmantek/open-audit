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
 * @version 1.12.8
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
        if (stripos($this->user->roles, '"admin"') === false) {
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

    public function user()
    {
        echo "<pre>\n";
        var_dump($this->user);
        exit();
    }

    function options()
    {

        $sql[] = "DROP TABLE IF EXISTS `scripts`";
        $sql[] = "CREATE TABLE `scripts` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(250) NOT NULL DEFAULT '', `options` text NOT NULL DEFAULT '', `description` varchar(200) NOT NULL DEFAULT '', `based_on` varchar(200) NOT NULL DEFAULT '', `hash` varchar(250) NOT NULL DEFAULT '', `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

        $output = '';
        $options = array();
        $options['audit_san'] = 'y';
        $options['create_file'] = 'n';
        $options['debugging'] = '1';
        $options['details_to_lower'] = 'y';
        $options['hide_audit_window'] = 'n';
        $options['ldap'] = '';
        $options['ldap_seen_date'] = '2012-06-30';
        $options['ldap_seen_days'] = 0;
        $options['org_id'] = '';
        $options['ping_target'] = 'n';
        $options['run_netstat'] = 's';
        $options['run_san_discover'] = 'n';
        $options['self_delete'] = 'n';
        $options['skip_dns'] = 'n';
        $options['skip_mount_point'] = 'n';
        $options['skip_software'] = 'n';
        $options['strcomputer'] = '.';
        $options['strpass'] = '';
        $options['struser'] = '';
        $options['submit_online'] = 'y';
        $options['system_id'] = '';
        $options['url'] = 'http://localhost/open-audit/index.php/system/add_system';
        $options['use_proxy'] = 'n';
        $options['win32_product'] = 'n';
        $options['windows_user_work_1'] = 'physicalDeliveryOfficeName';
        $options['windows_user_work_2'] = 'company';
        $options = json_encode($options);
        $sql[] = "INSERT INTO `scripts` VALUES (NULL, 'audit_windows.vbs', '" . $options . "', 'The default audit windows with default options.', 'audit_windows.vbs', '', 'system', NOW())";
        foreach ($sql as $this_query) {
            $output .= $this_query."<br /><br />\n";
            $query = $this->db->query($this_query);
        }
        echo "<pre>\n";
        print_r($output);
    }

    function nif()
    {
        error_reporting(E_ALL);
        $details = new stdClass();
        echo "<pre>\n";

        var_dump(empty($details));

        echo "\n\n";
        var_dump(empty($details->uuid));

        echo "\n\n";
        $details->uuid = '';
        var_dump(empty($details->uuid));

        echo "\n\n";
        $details->uuid = 'abc';
        var_dump(empty($details->uuid));

        echo "\n\n";
        $details->uuid = NULL;
        var_dump(empty($details->uuid));


    }

    function net()
    {
        $this->load->helper('network_helper');
        echo "<pre>\n"; print_r(network_details('192.168.0.7 / 24'));
        echo "<pre>\n"; print_r(network_details('192.168.0.1 / 30'));
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
            $sql = str_replace('SELECT distinct(system.id) FROM system, ip WHERE (', 'UPDATE ip SET network = "' . $network . '" WHERE (', $row->group_dynamic_select);
            $sql = substr($sql, 0, strpos($sql, ')')+1);
            $sql = str_replace("AND ip.system_id = system.id AND ip.current = 'y' AND system.status = 'production'", "", $sql);
            echo $sql . "\n\n";
            $query_update = $this->db->query($sql);
        }
    }

    public function update_class()
    {
        $sql = array();
        $sql[] = "UPDATE system SET class = 'virtual server' WHERE (manufacturer LIKE '%vmware%' OR manufacturer LIKE '%Parallels%') AND os_family IN ('Windows 2008', 'Windows 2012', 'Windows 2003')";
        $sql[] = "UPDATE system SET class = 'hypervisor' WHERE os_family LIKE 'VMware ESX%'";
        $sql[] = "UPDATE system SET class = 'virtual desktop' WHERE manufacturer LIKE '%vmware%' AND os_family IN ('Windows XP', 'Windows 7', 'Windows 8', 'Windows 10')";
    }

    public function org_user_2()
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
            foreach ($this->get_org_id_new($org_id) as $key => $value) {
                $org_id_list[] = $value;
            }
        }

        $instring = implode(',', $org_id_list) . "\n";
        echo $instring . "\n";
    }

    public function ddd()
    {
        $fields = $this->db->field_data('edit_log');
        echo "<pre>\n";
        print_r($fields);
    }

    public function eee()
    {
        echo "<pre>\n";
        print_r($this->session);
    }

    public function org_user_3()
    {
        $this->output->enable_profiler(true);
        echo "<pre>\n";
        $end = array();


        $sql = "SELECT * FROM oa_user_org WHERE user_id = ? ORDER BY access_level desc";
        $data = array(1);
        $query = $this->db->query($sql, $data);
        $user_orgs = $query->result();
        print_r($user_orgs);

        $sql = "SELECT * FROM oa_org";
        $query = $this->db->query($sql);
        $this->orgs = $query->result();
        print_r($this->orgs);

        foreach ($this->orgs as $org) {
            foreach ($user_orgs as $user_org) {
                if ($user_org->org_id == $org->id) {
                    $end[$org->id] = $user_org->access_level;
                }
            }
        }

        print_r($end);

        # TODO - get a list of user_org.org_id's with perms like '%r%' and
        # feed it into the array below
        $org_id_list = array();
        foreach ($end as $key => $value) {
            $org_id_list[$key] = $value;
            foreach ($this->get_org_id_3($key, $value) as $key2 => $value2) {
                $org_id_list[$key2] = $value2;
            }
        }
        print_r($org_id_list);
    }


    private function get_org_id_3($org_id, $access_level)
    {
        $org_id_list = array();
        foreach ($this->orgs as $org) {
            if ($org->parent_id == $org_id and $org->id != 0) {
                $org_id_list[$org->id] = $access_level;
                echo "Set OrgId: " . $org->id . " AccessLevel: $access_level\n-----\n";
                foreach ($this->get_org_id_3($org->id, $access_level) as $key2 => $value2) {
                    $org_id_list[$key2] = $value2;
                }
            }
        }
        return($org_id_list);
    }

    public function org_user()
    {
        $this->output->enable_profiler(true);

        $this->load->model('m_configuration');
        $this->m_configuration->load();
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
            foreach ($this->get_org_id_new($org_id) as $key => $value) {
                $org_id_list[] = $value;
            }
        }

        $instring = implode(',', $org_id_list) . "\n";
        echo $instring . "\n";
        // $sql = "SELECT system.id, hostname, type, org_id, org_name FROM system LEFT JOIN oa_org ON system.org_id = oa_org.org_id WHERE org_id IN (" . $instring . ")";
        // echo $sql . "\n";
        // $query = $this->db->query($sql);
        // $result = $query->result();
        // echo "<table border=1>\n";
        // foreach ($result as $row) {
        //     echo "  <tr>\n";
        //     echo "      <td>" . $row->system_id . "</td>\n";
        //     echo "      <td>" . $row->hostname . "</td>\n";
        //     echo "      <td>" . $row->org_id . "</td>\n";
        //     echo "      <td>" . $row->org_name . "</td>\n";
        //     echo "      <td>" . $row->type . "</td>\n";
        // }
        // echo "</table\n";

        $dashboard = new stdClass();
        $dashboard->total = array();

        $dashboard->type = array();
        $sql = "SELECT count(*) AS count, type FROM system WHERE org_id IN (" . $instring . ") GROUP BY type";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->type[$row->type] = $row->count;
        }
        $dashboard->total['type'] = count($result);

        $dashboard->org = array();
        $sql = "SELECT count(system_id) AS count, system.org_id, oa_org.name FROM system LEFT JOIN oa_org ON system.org_id = oa_org.id WHERE org_id IN (" . $instring . ") GROUP BY org_id";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->org[$row->name] = $row->count;
        }
        $dashboard->total['org'] = count($result);

        $dashboard->location = array();
        $sql = "SELECT count(system.id) AS count, system.location_id, oa_location.name FROM system LEFT JOIN oa_location ON system.location_id = oa_location.id WHERE system.org_id IN (" . $instring . ") GROUP BY system.location_id";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->location[$row->name] = $row->count;
        }
        $dashboard->total['location'] = count($result);

        $dashboard->os_family = array();
        $sql = "SELECT count(system.id) AS count, system.os_family FROM system WHERE system.org_id IN (" . $instring . ") AND os_family != '' GROUP BY system.os_family";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->os_family[$row->os_family] = $row->count;
        }
        $dashboard->total['os_family'] = count($result);


        $dashboard->server = array();
        $sql = "SELECT count(system.id) AS count, server.type FROM system LEFT JOIN server ON (system.id = server.system_id) WHERE system.org_id IN (" . $instring . ") AND server.current = 'y' GROUP BY server.type";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->server[$row->type] = $row->count;
        }
        $dashboard->total['server'] = count($result);


        $dashboard->status = array();
        $sql = "SELECT count(system.id) AS count, system.status FROM system WHERE system.org_id IN (" . $instring . ") GROUP BY system.status";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->status[$row->status] = $row->count;
        }
        $dashboard->total['status'] = count($result);


        $dashboard->manufacturer = array();
        $sql = "SELECT count(system.id) AS count, system.manufacturer FROM system WHERE manufacturer != '' AND system.org_id IN (" . $instring . ") GROUP BY system.manufacturer";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->manufacturer[$row->manufacturer] = $row->count;
        }
        $dashboard->total['manufacturer'] = count($result);


        $dashboard->device = array();
        $sql = "SELECT count(system.id) AS count FROM system WHERE system.org_id IN (" . $instring . ")";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->total['device'] = $row->count;
        }


        $dashboard->domain = array();
        $sql = "SELECT count(system.id) AS count, system.domain FROM system WHERE domain != '' AND system.org_id IN (" . $instring . ") GROUP BY system.domain ORDER BY REVERSE(domain)";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->domain[$row->domain] = $row->count;
        }
        $dashboard->total['domain'] = count($result);


        $dashboard->network = array();
        $sql = "SELECT count(system.id) AS count, ip.network FROM system LEFT JOIN ip ON (system.id = ip.system_id) WHERE ip.current = 'y' AND ip.network != '' and ip.network != '0.0.0.0 / 0' AND ip.cidr < " . $this->config->item('network_group_subnet') . " AND system.org_id IN (" . $instring . ") GROUP BY ip.network";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $row) {
            $dashboard->network[$row->network] = $row->count;
        }
        $dashboard->total['network'] = count($result);




        echo "<br /><br />\n\n"; print_r($dashboard);


    }

    private function get_org_id_new($org_id)
    {
        $org_id_list = array();
        $org_id = intval($org_id);
        $sql = "SELECT id FROM oa_org WHERE parent_id = ? AND id != 0";
        $data = array($org_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $row) {
            $org_id_list[] = $row->id;
            foreach ($this->get_org_id_new($row->id) as $key => $value) {
                $org_id_list[] = $value;
            }
        }
        return($org_id_list);
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
            foreach ($this->get_org_id_new($org_id) as $key => $value) {
                $org_id_list[] = $value;
            }
        }

        $instring = implode(',', $org_id_list);
        echo $instring . "\n";

        $test = array();
        $test[] = "system.type = 'bridge'";
        $test[] = "oa_org.name = 'OpenDealerExchange'";
        $test[] = "oa_location.name = 'Pune - India'";
        $test[] = "system.os_family = 'Ubuntu'";
        $test[] = "server.type = 'web'";
        $test[] = "system.status = 'deleted'";
        $test[] = "system.manufacturer = 'DEC'";
        $test[] = "system.domain = 'ilo.ord.dsghost.net.'";
        $test[] = "ip.network LIKE '192.168.%.0 / 24'";
        $test[] = "software.name = 'httpd'";
        $test[] = "software.name LIKE 'apache%'";

        echo "<pre>\n";
        foreach ($test as $item) {
            #print_r($item);
            $temp = explode('.', $item);
            $table = $temp[0];
            #$temp = explode('=', $item);
            $temp = explode(' ', $item);
            $column = trim($temp[0]);
            echo $item . "\n";
            if ($table == 'oa_location') {
                $sql = "SELECT system.id, system.hostname, system.type, $column FROM system LEFT JOIN oa_location ON system.location_id = oa_location.id WHERE $item AND system.status = 'production' AND system.org_id IN (" . $instring . ") ";
            } elseif ($table == 'oa_org') {
                $sql = "SELECT system.id, system.hostname, system.type, $column FROM system LEFT JOIN oa_org ON system.org_id = oa_org.id WHERE $item AND system.status = 'production'  AND system.org_id IN (" . $instring . ") ";
            } elseif ($table != 'system') {
                $sql = "SELECT system.id, system.hostname, system.type, $column FROM system LEFT JOIN $table ON system.id = $table.system_id WHERE $table.current = 'y' AND $item AND system.status = 'production'  AND system.org_id IN (" . $instring . ") GROUP BY system.id, $column";
            } else {
                $sql = "SELECT system.id, system.hostname, system.type, $column FROM system WHERE $item AND system.status = 'production'  AND system.org_id IN (" . $instring . ") ";
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


        $sql = "SELECT first_seen FROM $table WHERE system.id = ? ORDER BY first_seen LIMIT 1";
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
                $sql = "SELECT $table.*, IF(($table.first_seen = ?), 'y', 'n') as original_install, IF($table.current = 'y', 'y', 'n') as current_install FROM $table WHERE system.id = ? and (current = 'y' or first_seen = ?)";
                $data = array("$first_seen", $system_id, "$first_seen");
            }
            if ($type == 'full') {
                $sql = "SELECT $table.*, IF(($table.first_seen = ?), 'y', 'n') as original_install, IF($table.current = 'y', 'y', 'n') as current_install FROM $table WHERE system.id = ?";
                $data = array("$first_seen", $system_id);
            }
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            echo $this->db->last_query() . "\n";
            print_r($result);
        } else {
            # no data in this table for the system.id
            return;
        }
    }

    public function login()
    {
        $this->load->model('m_oa_user');
        $this->m_oa_user->validate_user();
        $this->load->model('m_configuration');
        $this->m_configuration->load();
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

}
