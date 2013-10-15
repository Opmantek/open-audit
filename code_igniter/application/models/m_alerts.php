<?php
/**
 * @package Open-AudIT
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_alerts extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	/**
	 * Delete all alerts in the DB 
	 *
	 * @access	public
	 * @return	int
	 */
	function delete_all_alerts() {
		$sql = "DELETE FROM oa_alert_log";
		$query = $this->db->query($sql); 
		$count = $this->db->affected_rows();
		return ($count);
	}

	function delete_alerts_days($days = 365) {
		$sql = "DELETE FROM oa_alert_log WHERE DATE(timestamp) < DATE_SUB(curdate(), INTERVAL $days day)";
		$query = $this->db->query($sql); 
		$count = $this->db->affected_rows();
		return ($count);
	}

	/**
	 * Count all alerts in the DB 
	 *
	 * @access	public
	 * @return	int
	 */
	function count_alerts() {
		$sql = "SELECT COUNT(*) AS count FROM oa_alert_log";
		$query = $this->db->query($sql);
		$row = $query->row();
		return($row->count);
	}

	/**
	 * All alerts in the DB older than XX days
	 *
	 * @access	public
	 * @return	int
	 */
	function count_alerts_days($days = 7) {
		$sql = "SELECT COUNT(*) AS count FROM oa_alert_log WHERE DATE(timestamp) < DATE_SUB(curdate(), INTERVAL $days day)";
		$query = $this->db->query($sql);
		$row = $query->row();
		return($row->count);
	}

	/**
	 * Get the alert's for a given system 
	 *
	 * @access	public
	 * @param	system_id
	 * @return	array
	 */
	function get_system_alerts($system_id) {
		$sql = "SELECT 
				oa_alert_log.*, 
				oa_user.user_full_name 
			FROM 
				oa_alert_log
			LEFT JOIN 
				oa_user ON oa_alert_log.user_id = oa_user.user_id 
			WHERE 
				oa_alert_log.system_id = ?  
			ORDER BY 
				timestamp";
		$sql = $this->clean_sql($sql);
		$data = array("$system_id");
		$query = $this->db->query($sql, $data); 
		$result = $query->result();
		return ($result);
	}

	/**
	 * Create an alert for a given piece for a given system 
	 *
	 * @access	public
	 * @param	system_id, alert table, alert row, details, timestamp
	 * @return	nothing
	 */
	function generate_alert($system_id, $alert_table, $alert_foreign_row, $alert_details, $alert_timestamp) {
		$sql = "INSERT INTO 
				oa_alert_log 
					( system_id, 
					alert_table,
					alert_foreign_row, 
					alert_details, 
					timestamp ) 
			VALUES ( ?, ?, ?, ?, ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$system_id", "$alert_table", "$alert_foreign_row", "$alert_details", "$alert_timestamp");
		$query = $this->db->query($sql, $data);
	}

	/**
	 * Get the details fo a given alert 
	 *
	 * @access	public
	 * @param	alert_id
	 * @return	array
	 */
	function get_alert_details($alert_id) {
		$sql = "SELECT 
			oa_alert_log.alert_id, 
			oa_alert_log.system_id, 
			oa_alert_log.alert_details, 
			oa_alert_log.timestamp, 
			system.hostname, 
			system.man_ip_address, 
			system.man_description 
		FROM 
			oa_alert_log, 
			system 
		WHERE 
			alert_id = ? AND 
			oa_alert_log.system_id = system.system_id";
		$sql = $this->clean_sql($sql);
		$data = array("$alert_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	/**
	 * Update an alert with details of  a Change record 
	 *
	 * @access	public
	 * @param	array(alert id, change type, change id, external change id, external change link, alert note, user id, alert acknowledge timestamp)
	 * @return	nothing
	 */
	function assign_change($details) {
		foreach ($details['alerts'] as $key => $value)
		{
			$sql = "UPDATE oa_alert_log SET change_type = ?, change_id = ?, external_change_id = ?, 
					external_change_link = ?, alert_note = ?, user_id = ?, alert_ack_time = ? 
					WHERE alert_id = ?";
			$sql = $this->clean_sql($sql);
			$data = array($details['change_type'], $details['change_id'], $details['external_change_id'], $details['external_change_link'], $details['alert_note'], $details['user_id'], $details['alert_ack_time'], "$value");
			$query = $this->db->query($sql, $data);
		}
	}
}
?>