<?php 
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_oa_config extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_config() {
		$sql = "SELECT oa_config.*, oa_user.user_full_name FROM oa_config LEFT JOIN oa_user ON oa_config.config_edited_by = oa_user.user_id";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}

	function get_credentials() {
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
			if ($item->config_name == 'default_snmp_community') { $credentials->default_snmp_community = $item->config_value; }
			if ($item->config_name == 'default_ssh_username') { $credentials->default_ssh_username = $item->config_value; }
			if ($item->config_name == 'default_ssh_password') { $credentials->default_ssh_password = $item->config_value; }
			if ($item->config_name == 'default_windows_username') { $credentials->default_windows_username = $item->config_value; }
			if ($item->config_name == 'default_windows_password') { $credentials->default_windows_password = $item->config_value; }
			if ($item->config_name == 'default_windows_domain') { $credentials->default_windows_domain = $item->config_value; }
		}
		return ($credentials);
	}

	function get_config_item($config_name = "display_version") {
		$sql = "SELECT config_value FROM oa_config WHERE config_name = ? ";
		$data = array("$config_name");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		return ($row->config_value);
	}

	function update_config($config_name, $config_value, $user_id, $timestamp) {
		$config_name = urldecode($config_name);
		$config_value = urldecode($config_value);
		$sql = "UPDATE oa_config SET config_value = ?, config_edited_by = ?, config_edited_date = ? WHERE config_name = ?";
		$data = array("$config_value", "$user_id", "$timestamp", "$config_name");
		$query = $this->db->query($sql, $data); 
		return($config_value);
	}
}
?>
