<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_attachment extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function create_system_attachment($system_id, $attachment_title, $attachment_name) {
		$sql = "INSERT INTO sys_man_attachment (att_id, system_id, user_id, att_title, att_filename, timestamp) VALUES (NULL, ?, ?, ?, ?, ?)";
		$data = array("$system_id", $this->session->userdata('user_id'), "$attachment_title", "$attachment_name", date('Y-m-d H:i:s'));
		$query = $this->db->query($sql, $data);
		echo $this->db->last_query();
		return;
	}
	
	function get_system_attachment($system_id) {
		$sql = "SELECT * FROM sys_man_attachment WHERE system_id = ?";
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function get_attachment($attachment_id) {
		$sql = "SELECT * FROM sys_man_attachment WHERE att_id = ?";
		$data = array("$attachment_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result[0]);
	}
	
	function delete_attachment($attachment_id) {
		$sql = "DELETE FROM sys_man_attachment WHERE att_id = ?";
		$data = array("$attachment_id");
		$query = $this->db->query($sql, $data);
		#$result = $query->result();	
		return;
	}
}
?>