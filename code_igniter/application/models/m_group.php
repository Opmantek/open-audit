<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
 
 
// TODO - group members
class M_group extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_group($system_id) {
		$sql = "SELECT sys_sw_group.group_id, sys_sw_group.group_name, sys_sw_group.group_description,
				sys_sw_group.group_sid, sys_sw_group.group_members FROM sys_sw_group, system
				WHERE sys_sw_group.system_id = system.system_id AND sys_sw_group.timestamp = system.timestamp AND
				system.system_id = ? GROUP BY sys_sw_group.group_id";
		$sql = $this->clean_sql($sql);
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_group($input, $details) {
		// need to check for group changes
		$sql = "SELECT sys_sw_group.group_id FROM sys_sw_group, system WHERE 
				sys_sw_group.system_id 	= system.system_id AND system.system_id	= ? AND
				system.man_status 	= 'production' AND sys_sw_group.group_name = ? AND 
				sys_sw_group.group_sid	= ? AND ( sys_sw_group.timestamp = ? OR sys_sw_group.timestamp = ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", "$input->name", "$input->sid", 
				"$details->original_timestamp", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the group exists - need to update its timestamp
			$sql = "UPDATE sys_sw_group SET timestamp = ?, group_members = ? WHERE group_id = ?";
			$data = array("$details->timestamp", "$input->group_members", "$row->group_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the group does not exist - insert it
			$sql = "INSERT INTO sys_sw_group ( system_id, group_name, group_description, group_sid, group_members, timestamp, first_timestamp ) VALUES ( ?,?,?,?,?,?,? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", "$input->name", "$input->description", "$input->sid", "$input->group_members", "$details->timestamp", "$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_group($details) {
		// group no longer detected
		$sql = "SELECT sys_sw_group.group_id, sys_sw_group.group_name FROM sys_sw_group, 
				system WHERE sys_sw_group.system_id = system.system_id AND sys_sw_group.timestamp = ? AND
				system.system_id = ? AND system.timestamp = ?";
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow)
		{
			$alert_details = 'group removed - ' . $myrow->group_name;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_group', $myrow->group_id, $alert_details, $details->timestamp);
		}

		// new group
		$sql = "SELECT sys_sw_group.group_id, sys_sw_group.group_name FROM 
				sys_sw_group, system WHERE sys_sw_group.system_id = system.system_id AND 
				sys_sw_group.timestamp = sys_sw_group.first_timestamp AND 
				sys_sw_group.timestamp = ? AND system.system_id = ? AND system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'group installed - ' . $myrow->group_name;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_group', $myrow->group_id, $alert_details, $details->timestamp);
		}
	}
}
?>