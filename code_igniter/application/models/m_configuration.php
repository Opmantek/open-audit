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
* @version   3.1.1
* @link      http://www.open-audit.org
 */
class M_configuration extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('log');
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function create()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data';
        stdlog($this->log);
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        // We accept either an integer ID or a string NAME
        if (!empty($id) and !is_integer($id)) {
            $sql = "SELECT id FROM configuration WHERE name = ?";
            $data = array($id);
            $result = $this->run_sql($sql, array());
            if (!empty($result[0]->id)) {
                $id = $result[0]->id;
            } else {
                $id = '';
            }
        }
        // We might just use the response->meta->id
        if (empty($id) and !empty($CI->response->meta->collection) and $CI->response->meta->collection == 'configuration') {
            $id = $CI->response->meta->id;
        }
        // We might also use the received data
        if (empty($id) and !empty($CI->response->meta->collection) and $CI->response->meta->collection == 'configuration' and !empty($CI->response->meta->received_data->attributes->name)) {
            $sql = "/* m_configuration::read */ " . "SELECT id FROM configuration WHERE name = ?";
            $data = array($CI->response->meta->received_data->attributes->name);
            $result = $this->run_sql($sql, array());
            if (!empty($result[0]->id)) {
                $id = $result[0]->id;
            }
        }
        // We have nothing to ID the particular config item
        if (empty($id)) {
            return;
        }
        $sql = "/* m_configuration::read */ " . "SELECT * FROM configuration WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'configuration');
        return ($result);
    }

    public function update($id = '', $value = '', $edited_by = '')
    {
        if (!empty($this->config->config['internal_version']) and $this->config->config['internal_version'] < 20160904) {
            return;
        }
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $CI = & get_instance();
        // We might just use the response->meta->id
        if (empty($id) and !empty($CI->response->meta->collection) and $CI->response->meta->collection == 'configuration') {
            if (!empty($CI->response->meta->id)) {
                $id = $CI->response->meta->id;
            } else if (!empty($CI->response->meta->received_data->attributes->name)) {
                $id = $CI->response->meta->received_data->attributes->name;
            } else if (!empty($CI->response->meta->received_data->attributes->id)) {
                $id = $CI->response->meta->received_data->attributes->id;
            }
        }
        // We accept either an integer ID or a string NAME
        if (!empty($id) and !is_integer($id)) {
            $sql = "/* m_configuration::update */ " . "SELECT id FROM configuration WHERE name = ?";
            $data = array((string)$id);
            $result = $this->run_sql($sql, $data);
            if (!empty($result[0]->id)) {
                $id = $result[0]->id;
            } else {
                $id = '';
            }
        }
        // We have nothing to ID the particular config item
        if (empty($id)) {
            // TODO - throw a warning here
            return false;
        }
        // We can use the responsed received data if not explicitly provided a value
        if (empty($value) and $CI->response->meta->collection == 'configuration') {
            if (isset($CI->response->meta->received_data->attributes->value)) {
                $value = $CI->response->meta->received_data->attributes->value;
            }
        }
        if (empty($edited_by)) {
            $edited_by = $this->user->full_name;
        }
        if ($this->db->dbdriver === 'mysql' or $this->db->dbdriver === 'mysqli') {
            $sql = "/* m_configuration::update */ " . "UPDATE configuration SET value = ?, edited_by = ?, edited_date = NOW() WHERE id = ?";
        } else if ($this->db->dbdriver === 'mssql') {
            $sql = "/* m_configuration::update */ " . "UPDATE [configuration] SET value = ?, edited_by = ?, edited_date = getdatetime2() WHERE id = ?";
        }
        $data = array((string)$value, (string)$edited_by, intval($id));
        $this->run_sql($sql, $data);
        return true;
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = "deleting data $id";
        stdlog($this->log);
    }

    public function load()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'loading data';
        stdlog($this->log);

        if ($this->db->table_exists('configuration')) {
            if ($this->db->dbdriver === 'mysql' or $this->db->dbdriver === 'mysqli') {
                $sql = "SELECT name, value FROM `configuration`";
            } else if ($this->db->dbdriver === 'mssql') {
                $sql = "SELECT name, value FROM [configuration]";
            }
            $result = $this->run_sql($sql, array());
        } else if ($this->db->table_exists('oa_config')) {
            $this->load->library('encrypt');
            $sql = "SELECT config_name AS `name`, config_value AS `value` FROM `oa_config`";
            $result = $this->run_sql($sql, array());
        }

        # set all items to value or ''
        if (!empty($result)) {
            foreach ($result as $row) {
                $temp_name = $row->name;
                if (empty($row->value)) {
                    $this->config->config[$temp_name] = '';
                } else {
                    $this->config->config[$temp_name] = $row->value;
                }
                unset($temp_name);
            }
        }
        $temp = array();
        if (!empty($_SERVER['REQUEST_URI'])) {
            $temp = explode('/', $_SERVER['REQUEST_URI']);
        }
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

        # set the timestamp
        
        if ($this->db->dbdriver === 'mysql' or $this->db->dbdriver === 'mysqli') {
            $sql = "SELECT NOW() as `timestamp`";
        } else if ($this->db->dbdriver === 'mssql') {
            $sql = "SELECT CONVERT (smalldatetime, SYSDATETIME()) AS [timestamp]";
        }
        $result = $this->run_sql($sql, array());
        $this->config->config['timestamp'] = $result[0]->timestamp;

        $sql = "SELECT TIME_FORMAT(TIMEDIFF(NOW(),CONVERT_TZ(NOW(),@@session.time_zone,'+00:00')),'%H%i') AS `tz`";
        $result = $this->run_sql($sql, array());
        $this->config->config['timezone'] = $result[0]->tz;
        if ($this->config->config['timezone'] >= 0) {
            $this->config->config['timezone'] = 'UTC +' . $this->config->config['timezone'];
        } else {
            $this->config->config['timezone'] = 'UTC ' . $this->config->config['timezone'];
        }

        # get the server OS
        $this->config->config['server_os'] = php_uname('s');

        # get the total number of devices
        $sql = "SELECT count(*) as device_count FROM system";
        $result = $this->run_sql($sql, array());
        $this->config->config['device_count'] = @intval($result[0]->device_count);

        if ((string) php_uname('s') === 'Windows NT') {
            $this->config->config['base_path'] = str_replace('\code_igniter\application\models\m_configuration.php', '', __FILE__);
        } else {
            $this->config->config['base_path'] = str_replace('/code_igniter/application/models/m_configuration.php', '', __FILE__);
        }

        $this->load->helper('network');
        $this->config->config['ip'] = server_ip();
        $this->config->config['is_ssl'] = is_ssl();

    }

    public function read_subnet()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $this->load->helper('network');
        $ip_address_array = array();
        # osx
        if (php_uname('s') == 'Darwin') {
            $command = "ifconfig | grep inet | grep -v inet6 | grep broadcast | awk '{print $2}'";
            exec($command, $output, $return_var);
            if ($return_var == 0) {
                foreach ($output as $line) {
                    $ip_address_array[] = trim($line) . '/24';
                }
            }
        }
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
        if (is_array($ip_address_array) and count($ip_address_array) > 0) {
            foreach ($ip_address_array as $network) {
                if (!empty($network)) {
                    $test = network_details($network);
                }
                if (!empty($test->network) and !empty($test->network_slash)) {
                    $networks[] = $test->network . '/' . $test->network_slash;
                }
            }
        }
        return ($networks);
    }

    public function read_domain()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $result = '';
        if (php_uname('s') == 'Windows NT') {
            $command = "wmic computersystem get domain";
            exec($command, $output, $return_var);
            $result = $output[1];
        }
        return($result);
    }
}
