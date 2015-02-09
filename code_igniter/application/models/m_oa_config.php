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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.5.6
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_oa_config extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_config() {
		$this->load->library('encrypt');
		$sql = "SELECT oa_config.*, oa_user.user_full_name FROM oa_config LEFT JOIN oa_user ON oa_config.config_edited_by = oa_user.user_id";
		$query = $this->db->query($sql);
		$result = $query->result();
		foreach ($result as $key => $value) {
			$config_item_name = $result[$key]->config_name;
			if ($config_item_name == 'default_ipmi_password' OR 
				$config_item_name == 'default_snmp_community' OR 
				$config_item_name == 'default_ssh_password' OR 
				$config_item_name == 'default_windows_password' ) {
					# we need to decrypt
					$result[$key]->config_value = $this->encrypt->decode($result[$key]->config_value);
			}
		}
		return ($result);
	}

	function load_config() {
		$this->load->library('encrypt');
		$sql = "SELECT oa_config.*, oa_user.user_full_name FROM oa_config LEFT JOIN oa_user ON oa_config.config_edited_by = oa_user.user_id";
		$query = $this->db->query($sql);
		$result = $query->result();
		foreach ($result as $key => $value) {
			$config_item_name = $result[$key]->config_name;
			if ($config_item_name == 'default_ipmi_password' OR 
				$config_item_name == 'default_snmp_community' OR 
				$config_item_name == 'default_ssh_password' OR 
				$config_item_name == 'default_windows_password' ) {
					# we need to decrypt
					$result[$key]->config_value = $this->encrypt->decode($result[$key]->config_value);
			}
		}
		foreach ($result AS $config_item) {
			$temp_name = $config_item->config_name;
			$this->config->config[$temp_name] = $config_item->config_value;
		}
		$temp = explode('/', $_SERVER['REQUEST_URI']);
		$basic_url = '';
		for($i=0; $i<count($temp); $i++) {
			if ($temp[$i] == 'index.php') {
				for($j=1; $j<=$i; $j++){
					$basic_url .= '/' . $temp[$j];
				}
			}
		}
		$this->config->config['oa_web_index'] = $basic_url;
		$this->config->config['oa_web_folder'] = str_replace('/index.php', '', $basic_url);
		unset($i, $j, $temp, $basic_url);
	}

	function get_credentials() {
		$this->load->library('encrypt');
		$sql = "SELECT config_name, config_value FROM oa_config";
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
			if ($item->config_name == 'default_snmp_community') { $credentials->default_snmp_community = $this->encrypt->decode($item->config_value); }
			if ($item->config_name == 'default_ipmi_username') { $credentials->default_ipmi_username = $item->config_value; }
			if ($item->config_name == 'default_ipmi_password') { $credentials->default_ipmi_password = $this->encrypt->decode($item->config_value); }
			if ($item->config_name == 'default_ssh_username') { $credentials->default_ssh_username = $item->config_value; }
			if ($item->config_name == 'default_ssh_password') { $credentials->default_ssh_password = $this->encrypt->decode($item->config_value); }
			if ($item->config_name == 'default_windows_username') { $credentials->default_windows_username = $item->config_value; }
			if ($item->config_name == 'default_windows_password') { $credentials->default_windows_password = $this->encrypt->decode($item->config_value); }
			if ($item->config_name == 'default_windows_domain') { $credentials->default_windows_domain = $item->config_value; }
		}
		return ($credentials);
	}

	function get_config_item($config_name = "display_version") {
		$this->load->library('encrypt');
		$sql = "SELECT config_value FROM oa_config WHERE config_name = 'internal_version' ";
		$data = array("$config_name");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		$internal_version = $row->config_value;


		$sql = "SELECT config_value FROM oa_config WHERE config_name = ? ";
		$data = array("$config_name");
		$query = $this->db->query($sql, $data);
		$row = $query->row();


		# decrypt any credentials if 1.5.4 or later
		if ($internal_version >= '20150126') {
			if ($config_name == 'default_ipmi_password' OR 
				$config_name == 'default_snmp_community' OR 
				$config_name == 'default_ssh_password' OR 
				$config_name == 'default_windows_password' ) {
					$config_value = $this->encrypt->decode($config_value);
			}
		}
		if (isset($row->config_value)) {
			return ($row->config_value);
		} else {
			return;
		}
	}

	function update_config($config_name, $config_value, $user_id, $timestamp) {
		$config_name = urldecode($config_name);
		$config_value = urldecode($config_value);

		# encrypt any credentials
		if ($config_name == 'default_ipmi_password' OR 
			$config_name == 'default_snmp_community' OR 
			$config_name == 'default_ssh_password' OR 
			$config_name == 'default_windows_password' ) {
				$config_value = $this->encrypt->encode($config_value);
		}
		$sql = "UPDATE oa_config SET config_value = ?, config_edited_by = ?, config_edited_date = ? WHERE config_name = ?";
		$data = array("$config_value", "$user_id", "$timestamp", "$config_name");
		$query = $this->db->query($sql, $data); 
		return($config_value);
	}

	function get_server_ip_addresses() {
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
				# each line is returned thus: {"192.168.1.140", "fe80::e837:7bea:99a6:13e"}
				# there are multiple empty lines as well
				foreach ($output as $line) {
					$line = trim($line);
					if ($line != '') {
						$line = str_replace('{', '', $line);
						$line = str_replace('}', '', $line);
						$line = str_replace('"', '', $line);
						$line = str_replace(',', '', $line);
						$line_array = explode(' ', $line);
						foreach ($line_array as $ip) {
							$ip_address_array[] = $ip;
						}
					}
				}
			}
		}
	return ($ip_address_array);
	}

}
?>
