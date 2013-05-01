<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_monitor extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_monitor($system_id) {
		$sql = "SELECT 
				sys_hw_monitor.*
			FROM 
				sys_hw_monitor,
				system
			WHERE 
				sys_hw_monitor.system_id = system.system_id AND
				sys_hw_monitor.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				monitor_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_monitor($input, $details) {
		// need to check for monitor changes
		$sql = "SELECT 
				sys_hw_monitor.monitor_id
			FROM 
				sys_hw_monitor, 
				system 
			WHERE 	
				sys_hw_monitor.system_id	 = system.system_id AND 
				system.system_id		= ? AND 
				system.man_status 		= 'production' AND 
				sys_hw_monitor.manufacturer 	= ? AND 
				sys_hw_monitor.model 		= ? AND 
				sys_hw_monitor.serial		= ? AND 
				( sys_hw_monitor.timestamp 	= ? OR 
				sys_hw_monitor.timestamp 	= ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->manufacturer", 
				"$input->model", 
				"$input->serial", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the monitor exists - need to update its timestamp
			$start=explode(' ',microtime());
			$sql = "UPDATE sys_hw_monitor SET timestamp = ?, size = ?, aspect_ratio = ? WHERE monitor_id = ?";
			$data = array("$details->timestamp", "$input->size", "$input->aspect_ratio", "$row->monitor_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the monitor does not exist - insert it
			$sql = "INSERT INTO sys_hw_monitor (	
					system_id, 
					manufacturer, 
					model, 
					serial, 
					man_serial, 
					device_id, 
					manufacture_date, 
					edid_version, 
					size, 
					aspect_ratio, 
					timestamp,
					first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->manufacturer", 
					"$input->model", 
					"$input->serial", 
					"$input->serial", 
					"$input->device_id", 
					"$input->manufacture_date", 
					"$input->edid_version", 
					"$input->size", 
					"$input->aspect_ratio", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_monitor($details) {
		// monitor no longer detected
		$sql = "SELECT 
				sys_hw_monitor.monitor_id, 
				sys_hw_monitor.manufacturer, 
				sys_hw_monitor.serial, 
				sys_hw_monitor.model 
			FROM 	
				sys_hw_monitor, 
				system
			WHERE 	
				sys_hw_monitor.system_id = system.system_id AND
				sys_hw_monitor.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'monitor removed - ' . $myrow->manufacturer . ', ' . $myrow->model . ', (Serial: ' . $myrow->serial . ')';
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_monitor', $myrow->monitor_id, $alert_details, $details->timestamp);
		}

		// new monitor
		$sql = "SELECT 
				sys_hw_monitor.monitor_id, 
				sys_hw_monitor.manufacturer, 
				sys_hw_monitor.serial, 
				sys_hw_monitor.model 
			FROM 	
				sys_hw_monitor, 
				system
			WHERE 	
				sys_hw_monitor.system_id = system.system_id AND
				sys_hw_monitor.timestamp = sys_hw_monitor.first_timestamp AND
				sys_hw_monitor.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'monitor installed - ' . $myrow->manufacturer . ', ' . $myrow->model . ', (Serial: ' . $myrow->serial . ')';
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_monitor', $myrow->monitor_id, $alert_details, $details->timestamp);
		}
	}
}
?>