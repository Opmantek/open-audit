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
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_oa_config extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_config()
    {
        $this->load->library('encrypt');

        // need to account for v2 having different column names
        $sql = "SELECT config_value FROM oa_config WHERE config_name = 'internal_version' ";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();
        $internal_version = $row->config_value;
        #if (isset($internal_version) and $internal_version > '20151230') {
        #    $edited_by = 'config_edited_by_user_id';
        #} else {
            $edited_by = 'config_edited_by';
        #}

        $sql = "SELECT oa_config.*, oa_user.full_name FROM oa_config LEFT JOIN oa_user ON oa_config.$edited_by = oa_user.id";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $key => $value) {
            $config_item_name = $result[$key]->config_name;
            if (($config_item_name == 'default_ipmi_password' or
                $config_item_name == 'default_snmp_community' or
                $config_item_name == 'default_ssh_password' or
                $config_item_name == 'default_windows_password') and
                ($result[$key]->config_value != '')) {
                # we need to decrypt
                    $temp = $this->encrypt->decode($result[$key]->config_value);
                if (!isset($temp) or is_null($temp) or $temp == false) {
                    $result[$key]->config_value = '';
                } else {
                    $result[$key]->config_value = $temp;
                }
                unset($temp);
            }
        }

        return ($result);
    }

    public function load_config()
    {
        $this->load->library('encrypt');

        // need to account for v2 having different column names
        $sql = "SELECT config_value FROM oa_config WHERE config_name = 'internal_version'";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();
        $internal_version = $row->config_value;

        #if (isset($internal_version) and $internal_version > '20151230') {
        #    $edited_by = 'config_edited_by_user_id';
        #} else {
            $edited_by = 'config_edited_by';
        #}

        $user_prefix = '';
        if (intval($internal_version) < 20160409) {
            $user_prefix = 'user_';
        }

        $sql = "SELECT oa_config.*, oa_user." . $user_prefix . "full_name FROM oa_config LEFT JOIN oa_user ON oa_config.$edited_by = oa_user." . $user_prefix . "id";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        # decrypt any encrypted values
        foreach ($result as $key => $value) {
            $config_item_name = $result[$key]->config_name;
            if (($config_item_name == 'default_ipmi_password' or
                $config_item_name == 'default_snmp_community' or
                $config_item_name == 'default_ssh_password' or
                $config_item_name == 'default_windows_password') and
                ($result[$key]->config_value != '')) {
                $temp = $this->encrypt->decode($result[$key]->config_value);
                if (!isset($temp) or is_null($temp) or $temp == false) {
                    $result[$key]->config_value = '';
                } else {
                    $result[$key]->config_value = $temp;
                }
                unset($temp);
            }
        }
        # set all items to value or ''
        foreach ($result as $config_item) {
            $temp_name = $config_item->config_name;
            if (empty($config_item->config_value)) {
                $this->config->config[$temp_name] = '';
            } else {
                $this->config->config[$temp_name] = $config_item->config_value;
            }
        }
        $temp = explode('/', $_SERVER['REQUEST_URI']);
        $basic_url = '';
        for ($i = 0; $i<count($temp); $i++) {
            if ($temp[$i] == 'index.php') {
                for ($j = 1; $j <= $i; $j++) {
                    $basic_url .= '/'.$temp[$j];
                }
            }
        }

        # ensure we have a trailing slash
        if (!empty($this->config->config['discovery_linux_script_directory']) and substr($this->config->config['discovery_linux_script_directory'], -1) !== '/') {
            $this->config->config['discovery_linux_script_directory'] .= '/';
        } 

        $this->config->config['oa_web_index'] = $basic_url;
        $this->config->config['oa_web_folder'] = str_replace('/index.php', '', $basic_url);
        unset($i, $j, $temp, $basic_url);

        # get the server OS
        $this->config->config['server_os'] = php_uname('s');

        # get the total number of devices
        $sql = "SELECT count(system_id) as device_count FROM system WHERE man_status = 'production'";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        $this->config->config['device_count'] = intval($result[0]->device_count);
    }

    public function get_credentials()
    {
        $this->load->library('encrypt');
        $sql = "SELECT config_name, config_value FROM oa_config";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        $credentials = new stdClass();
        $credentials->default_snmp_community = '';
        $credentials->default_ssh_username = '';
        $credentials->default_ssh_password = '';
        $credentials->default_windows_username = '';
        $credentials->default_windows_password = '';
        $credentials->default_windows_domain = '';
        foreach ($result as $item) {
            if ($item->config_name == 'default_snmp_community') {
                $credentials->default_snmp_community = $this->encrypt->decode($item->config_value);
            }
            if ($item->config_name == 'default_ipmi_username') {
                $credentials->default_ipmi_username = $item->config_value;
            }
            if ($item->config_name == 'default_ipmi_password') {
                $credentials->default_ipmi_password = $this->encrypt->decode($item->config_value);
            }
            if ($item->config_name == 'default_ssh_username') {
                $credentials->default_ssh_username = $item->config_value;
            }
            if ($item->config_name == 'default_ssh_password') {
                $credentials->default_ssh_password = $this->encrypt->decode($item->config_value);
            }
            if ($item->config_name == 'default_windows_username') {
                $credentials->default_windows_username = $item->config_value;
            }
            if ($item->config_name == 'default_windows_password') {
                $credentials->default_windows_password = $this->encrypt->decode($item->config_value);
            }
            if ($item->config_name == 'default_windows_domain') {
                $credentials->default_windows_domain = $item->config_value;
            }
        }

        return ($credentials);
    }

    public function get_config_item($config_name = "display_version")
    {
        $this->load->library('encrypt');
        $sql = "SELECT config_value FROM oa_config WHERE config_name = 'internal_version' ";
        $sql = $this->clean_sql($sql);
        $data = array("$config_name");
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        $internal_version = $row->config_value;

        $sql = "SELECT config_value FROM oa_config WHERE config_name = ? ";
        $sql = $this->clean_sql($sql);
        $data = array("$config_name");
        $query = $this->db->query($sql, $data);
        $row = $query->row();

        # decrypt any credentials if 1.5.4 or later
        if ($internal_version >= '20150126') {
            if ($config_name == 'default_ipmi_password' or
                $config_name == 'default_snmp_community' or
                $config_name == 'default_ssh_password' or
                $config_name == 'default_windows_password') {
                $row->config_value = $this->encrypt->decode($row->config_value);
            }
        }
        if (isset($row->config_value)) {
            return ($row->config_value);
        } else {
            return;
        }
    }

    public function update_config($config_name, $config_value, $user_id, $timestamp)
    {
        $config_name = urldecode($config_name);
        $config_value = urldecode($config_value);

        // need to account for v2 having different column names
        $sql = "SELECT config_value FROM oa_config WHERE config_name = 'internal_version' ";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();
        $internal_version = $row->config_value;
        #if (isset($internal_version) and $internal_version > '20151230') {
        #    $edited_by = 'config_edited_by_user_id';
        #} else {
            $edited_by = 'config_edited_by';
        #}

        # encrypt any credentials
        if ($config_name == 'default_ipmi_password' or
            $config_name == 'default_snmp_community' or
            $config_name == 'default_ssh_password' or
            $config_name == 'default_windows_password') {
            $config_value = $this->encrypt->encode($config_value);
        }
        $sql = "UPDATE oa_config SET config_value = ?, $edited_by = ?, config_edited_date = ? WHERE config_name = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$config_value", "$user_id", "$timestamp", "$config_name");
        $query = $this->db->query($sql, $data);

        return($config_value);
    }

    public function get_server_ip_addresses()
    {
        $ip_address_array = array();
        # osx
        if (php_uname('s') == 'Darwin') {
            $command = "ifconfig | grep inet | grep -v inet6 | grep broadcast | awk '{print $2}'";
            exec($command, $output, $return_var);
            if ($return_var == 0) {
                foreach ($output as $line) {
                    $ip_address_array[] = trim($line);
                }
            }
        }
        # linux
        if (php_uname('s') == 'Linux') {
            $command = "ip addr | grep 'state UP' -A2 | grep inet | awk '{print $2}' | cut -f1  -d'/'";
            exec($command, $output, $return_var);
            if ($return_var == 0) {
                foreach ($output as $line) {
                    $ip_address_array[] = trim($line);
                }
            }
        }
        # windows
        if (php_uname('s') == 'Windows NT') {
            $command = "wmic nicconfig get ipaddress | findstr /B {";
            exec($command, $output, $return_var);
            if ($return_var == 0) {
                # success
                # each line is returned thus: {"192.168.1.140", "fe80::e837:7bea:99a6:13e"} or thus {"192.168.1.140"}
                # there are multiple empty lines as well
                foreach ($output as $line) {
                    $line = trim($line);
                    if ($line != '') {
                        $line = str_replace('{', '', $line);
                        $line = str_replace('}', '', $line);
                        $line = str_replace('"', '', $line);
                        $line = str_replace(',', '', $line);
                        if (strpos($line, ' ') !== false) {
                            $line_array = explode(' ', $line);
                            foreach ($line_array as $ip) {
                                $ip_address_array[] = $ip;
                            }
                        } else {
                            $ip_address_array[] = $line;
                        }
                    }
                }
            }
        }

        return ($ip_address_array);
    }

    public function get_server_subnets()
    {
        $this->load->helper('network');
        $ip_address_array = array();
        # osx
        // if (php_uname('s') == 'Darwin') {
        //     $command = "ifconfig | grep inet | grep -v inet6 | grep broadcast | awk '{print $2}'";
        //     exec($command, $output, $return_var);
        //     if ($return_var == 0) {
        //         foreach ($output as $line) {
        //             $ip_address_array[] = trim($line);
        //         }
        //     }
        // }
        # linux
        if (php_uname('s') == 'Linux') {
            $command = "ip addr | grep 'state ' -A2 | grep inet | awk '{print $2}'";
            exec($command, $output, $return_var);
            if ($return_var == 0) {
                foreach ($output as $line) {
                    $ip_address_array[] = trim($line);
                }
            }
        }
        # windows
        if (php_uname('s') == 'Windows NT') {
            $command = "wmic nicconfig get ipaddress,ipsubnet | findstr /B {";
            exec($command, $output, $return_var);
            if ($return_var == 0) {
                # success
                # each line is returned thus: {"192.168.1.140", "fe80::e837:7bea:99a6:13e"} {"255.255.255.0"}
                # or thus {"192.168.1.146", "fe80::e9e2:5fe6:e05a:d393"}  {"255.255.255.0", "64"}
                # or thus {"192.168.1.140"} {"255.255.255.0"}
                # there are multiple empty lines as well
                foreach ($output as $line) {
                    $line = trim($line);
                    if ($line != '') {
                        $line = str_replace(' ', '', $line);
                        $temp_line = explode('}{', $line);
                        $temp_ip = str_replace('{', '', $temp_line[0]);
                        $temp_ip_line = explode('"', $temp_ip);
                        $ip = $temp_ip_line[1];
                        $temp_sub = str_replace('}', '', $temp_line[1]);
                        $temp_sub_line = explode('"', $temp_sub);
                        $subnet = $temp_sub_line[1];
                        if (isset($ip) and isset($subnet)) {
                            $new = network_details($ip . ' ' . $subnet);
                            $ip_address_array[] = $new->network . '/' . $new->network_slash;
                        }
                        unset($line);
                        unset($temp_line);
                        unset($temp_ip);
                        unset($temp_ip_line);
                        unset($temp_sub);
                        unset($temp_sub_line);
                        unset($ip);
                        unset($subnet);
                    }
                }
            }
        }
        $this->load->helper('network_helper');
        $networks = array();
        foreach ($ip_address_array as $network) {
            $test = network_details($network);
            $networks[] = $test->network . '/' . $test->network_slash;
        }
        return ($networks);
    }

    public function get_server_domain()
    {
        $result = '';
        if (php_uname('s') == 'Windows NT') {
            $command = "wmic computersystem get domain";
            exec($command, $output, $return_var);
            $result = $output[1];
        }
        return($result);
    }



    # supply a standard ip address - 192.168.1.1
    # supply a list of comma separated subnets - 192.168.1.0/24,172.16.0.0/16 or an emptty string to retrieve from the DB
    # returns true if ip is contained in a subnet, false otherwise
    function check_blessed($ip = '')
    {
        if (empty($this->config)) {
            $this->load_config();
        }
        if (empty($this->config->config['blessed_subnets_use']) or trim(strtolower($this->config->config['blessed_subnets_use'])) != 'y') {
            return true;
        }
        if (empty($ip)) {
            return false;
        }
        if ($ip == '127.0.0.1' or $ip == '127.0.1.1') {
            return true;
        }
        $sql = "SELECT COUNT(id) AS count FROM networks WHERE (-1 << (33 - INSTR(BIN(INET_ATON(cidr_to_mask(SUBSTR(name, LOCATE('/', name)+1)))), '0'))) & INET_ATON(?) = INET_ATON(SUBSTR(name, 1, LOCATE('/', name)-1))";
        $sql = $this->clean_sql($sql);
        $data = array("$ip");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (intval($result[0]->count) > 0) {
            return true;
        } else {
            $this->load->helper('log_helper');
            $log_details = new stdClass();
            $log_details->severity = 5;
            $log_details->file = 'system';
            $log_details->message = 'Audit submission from an IP not in the list of blessed subnets (' . $_SERVER['REMOTE_ADDR'] . ')';
            stdlog($log_details);
            unset($log_details);
            return false;
        }
    }


    # return true if subnet added to networks table, false otherwise
    function update_blessed($network = '') {
        if (isset($this->config->config['blessed_subnets_use']) and trim(strtolower($this->config->config['blessed_subnets_use'])) != 'y') {
            return true;
        }
        if (empty($network)) {
            return false;
        }
        if (!$this->db->table_exists('networks')) {
            return true;
        }
        # ensure we remove and spaces - '192.168.1.0 / 24' becomes '192.168.1.0/24'
        $network = str_replace(' ', '', $network);
        # test that we have a valid subnet
        $this->load->helper('network_helper');
        $this->load->helper('log_helper');
        $test = network_details($network);
        if (!empty($test->error)) {
            return false;
        }
        # test to see if this subnet exists already in the netwokrs table
        $sql = "/* m_oa_config::update_blessed */ SELECT name FROM networks WHERE name = ?";
        $data = array("$network");
        $query = $this->db->query($sql, $data);
        if ($query->num_rows() == 0) {
            # the subnet does not exist. Log it and insert it
            $trace = debug_backtrace();
            $caller = $trace[1];
            $log_details = new stdClass();
            $log_details->severity = 7;
            $log_details->file = 'system';
            $log_details->message = "Inserting " . $network . ' into blessed subnet list.';
            stdlog($log_details);
            unset($log);
            $sql = "/* m_oa_config::update_blessed */ INSERT INTO `networks` VALUES(NULL, ?, '', ?, NOW())";
            $data = array("$network", 'auto-generated by '.@$caller['function']);
            $query = $this->db->query($sql, $data);
            return true;
        } else {
            return false;
        }
    }

}
