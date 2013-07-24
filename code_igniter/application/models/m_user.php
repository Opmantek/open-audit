<?php
/**
 * OAv2
 *
 * An open source network auditing application
 *
 * @package OAv2
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_user extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_system_user($system_id = '0') {
		$sql = "SELECT * FROM sys_sw_user, system WHERE 	
				sys_sw_user.system_id = system.system_id AND
				sys_sw_user.timestamp = system.timestamp AND
				? = system.system_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_user($input, $details) {
		// check for user changes
		$sql = "SELECT sys_sw_user.user_id FROM sys_sw_user, system 
			WHERE sys_sw_user.system_id = system.system_id AND system.system_id = ? AND 
				system.man_status = 'production' AND  user_name = ? AND user_sid = ? AND 
				( sys_sw_user.timestamp = ? OR sys_sw_user.timestamp= ? ) 
			LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->user_name", 
				"$input->user_sid", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the user exists - need to update it
			$sql = "UPDATE sys_sw_user SET timestamp = ? WHERE ? = user_id";
			$data = array("$details->timestamp", "$row->user_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the user does not exist - insert it
			$sql = "INSERT INTO 
					sys_sw_user (	
					system_id, 
					user_name,
					user_caption,
					user_sid,
					user_domain,
					user_disabled,
					user_full_name,
					user_password_changeable,
					user_password_expires,
					user_password_required,
					user_status,
					user_type,
					timestamp,
					first_timestamp ) 
				VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->user_name", 
					"$input->user_caption", 
					"$input->user_sid", 
					"$input->user_domain", 
					"$input->user_disabled", 
					str_replace(",,,", "", "$input->user_full_name"), 
					"$input->user_password_changeable", 
					"$input->user_password_expires", 
					"$input->user_password_required", 
					"$input->user_status", 
					"$input->user_type", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	} // end of function

	function alert_user($details) {
		$sql = "SELECT 
				sys_sw_user.user_id, 
				sys_sw_user.user_name
			FROM 	
				sys_sw_user, system
			WHERE 	
				sys_sw_user.system_id = system.system_id AND
				sys_sw_user.timestamp = sys_sw_user.first_timestamp AND
				sys_sw_user.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		foreach ($result as $myrow) { 
			$alert_details = 'user installed - ' . $myrow->processor_description;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_user', $myrow->processor_id, $alert_details, $details->timestamp);
		}
	}
}
?>