<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_log extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_log($system_id) {
		$sql = "SELECT 
				sys_sw_log.log_id, 
				sys_sw_log.log_name, 
				sys_sw_log.log_file_name, 
				sys_sw_log.log_file_size, 
				sys_sw_log.log_max_file_size,
				sys_sw_log.log_overwrite
			FROM 
				sys_sw_log,
				system
			WHERE 
				sys_sw_log.system_id = system.system_id AND
				sys_sw_log.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				sys_sw_log.log_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_log($input, $details) {
		// need to check for log changes
		$sql = "SELECT 
				sys_sw_log.log_id
			FROM 
				sys_sw_log, 
				system 
			WHERE 
				sys_sw_log.system_id 		= system.system_id AND 
				system.system_id		= ? AND
				system.man_status 		= 'production' AND
				sys_sw_log.log_name 		= ? AND 
				sys_sw_log.log_file_name	= ? AND
				sys_sw_log.log_overwrite	= ? AND
				( sys_sw_log.timestamp = ? OR sys_sw_log.timestamp = ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->log_name", 
				"$input->log_file_name", 
				"$input->log_overwrite", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the log exists - need to update its timestamp
			$sql = "UPDATE sys_sw_log SET timestamp = ? WHERE log_id = ?";
			$data = array("$details->timestamp", "$row->log_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the log does not exist - insert it
			$sql = "INSERT INTO sys_sw_log
					( system_id, 
					log_name, 
					log_file_name, 
					log_file_size, 
					log_max_file_size, 
					log_overwrite,
					timestamp,
					first_timestamp ) VALUES ( ?,?,?,?,?,?,?,? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->log_name", 
					"$input->log_file_name", 
					"$input->log_file_size", 
					"$input->log_max_file_size", 
					"$input->log_overwrite", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_log($details) {
		// log no longer detected
		$sql = "SELECT 
				sys_sw_log.log_id, 
				sys_sw_log.log_name,
				sys_sw_log.log_file_name
			FROM
				sys_sw_log, 
				system
			WHERE
				sys_sw_log.system_id = system.system_id AND
				sys_sw_log.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'log removed - ' . $myrow->log_name;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_log', $myrow->log_id, $alert_details, $details->timestamp);
		}

		// new log
		$sql = "SELECT  
				sys_sw_log.log_id,
				sys_sw_log.log_name,
				sys_sw_log.log_file_name
			FROM
				sys_sw_log, 
				system
			WHERE
				sys_sw_log.system_id = system.system_id AND
				sys_sw_log.timestamp = sys_sw_log.first_timestamp AND
				sys_sw_log.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'log installed - ' . $myrow->log_name . ' (' .$myrow->log_file_name . ')';
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_log', $myrow->log_id, $alert_details, $details->timestamp);
		}
	}	
}
?>