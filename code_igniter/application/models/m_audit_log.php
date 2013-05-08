<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_audit_log extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function insert_audit_event($field_name, $field_value, $system_id) {
		$sql = "INSERT INTO oa_audit_log 
				(user_id, system_id, audit_log_event_type, audit_log_event_details, timestamp) 
				VALUES (?, ?, ?, ?, ?)";
		$sql = $this->clean_sql($sql);
		$data = array($this->session->userdata['user_id'], "$system_id", 'System Manual Data Changed', "$field_name" . ' - ' . "$field_value", date('Y-m-d H:i:s'));
		$query = $this->db->query($sql, $data); 
	}

	function get_audit_log($system_id) {
		$sql = "SELECT 
				oa_audit_log.user_id, 
				oa_audit_log.audit_log_event_type, 
				oa_audit_log.audit_log_event_details, 
				oa_user.user_full_name,
				oa_audit_log.timestamp
			FROM 
				oa_audit_log, 
				oa_user
			WHERE 
				oa_audit_log.system_id = ? AND 
				oa_user.user_id = oa_audit_log.user_id 
			ORDER BY 
				oa_audit_log.timestamp DESC
			LIMIT 500";
		$sql = $this->clean_sql($sql);
		$data = array("$system_id");
		$query = $this->db->query($sql, $data); 
		$result = $query->result();
		return ($result);
	}
}
?>