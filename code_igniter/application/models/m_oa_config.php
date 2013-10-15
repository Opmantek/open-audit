<?php
/**
 * @package Open-AudIT
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
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
