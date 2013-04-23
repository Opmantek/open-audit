<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
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
	
	function update_config($config_name, $config_value, $user_id, $timestamp) {
		$config_name = urldecode($config_name);
		$config_value = urldecode($config_value);
		$sql = "UPDATE oa_config SET config_value = ?, config_edited_by = ?, config_edited_date = ? WHERE config_name = ?";
		$data = array("$config_value", "$user_id", "$timestamp", "$config_name");
		$query = $this->db->query($sql, $data); 
		echo $config_value;
	}
}
?>
