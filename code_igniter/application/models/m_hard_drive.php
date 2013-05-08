<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_hard_drive extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_system_hard_drive($system_id) {
		$sql = "SELECT sys_hw_hard_drive.* FROM sys_hw_hard_drive, system
			WHERE sys_hw_hard_drive.system_id = system.system_id AND sys_hw_hard_drive.timestamp = system.timestamp AND 
			system.system_id = ? GROUP BY sys_hw_hard_drive.hard_drive_id ORDER BY sys_hw_hard_drive.hard_drive_index ";
		$sql = $this->clean_sql($sql);
		$data = array("$system_id");
		$query = $this->db->query($sql, $data); 
		$result = $query->result();
		return ($result);
	}

	function process_hard_drive($input, $details) {
		// need to check for hard_drive changes
		$sql = "SELECT sys_hw_hard_drive.hard_drive_id FROM sys_hw_hard_drive, system WHERE 
				sys_hw_hard_drive.system_id = system.system_id AND system.system_id = ? AND 
				system.man_status = 'production' AND hard_drive_model = ? AND 
				hard_drive_serial = ? AND hard_drive_index = ? AND 
				hard_drive_size = ? AND ( sys_hw_hard_drive.timestamp = ? OR sys_hw_hard_drive.timestamp = ? ) 
			LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", "$input->hard_drive_model", "$input->hard_drive_serial", 
				"$input->hard_drive_index", "$input->hard_drive_size", "$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data); 
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the hard_drive exists - need to update its timestamp
			$start=explode(' ',microtime());
			$sql = "UPDATE sys_hw_hard_drive SET timestamp = ?, hard_drive_status = ? WHERE hard_drive_id = ?";
			$data = array("$details->timestamp", "$input->hard_drive_status", "$row->hard_drive_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the hard_drive does not exist - insert it
			$sql = "INSERT INTO sys_hw_hard_drive (	system_id, hard_drive_caption, 
					hard_drive_index, hard_drive_interface_type, hard_drive_manufacturer, 
					hard_drive_model, hard_drive_serial, hard_drive_size, 
					hard_drive_device_id, hard_drive_scsi_logical_unit, hard_drive_status, 
					timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", "$input->hard_drive_caption", "$input->hard_drive_index", 
					mb_strtoupper($input->hard_drive_interface_type), "$input->hard_drive_manufacturer", 
					"$input->hard_drive_model", "$input->hard_drive_serial", "$input->hard_drive_size", 
					"$input->hard_drive_device_id", "$input->hard_drive_scsi_logical_unit", 
					"$input->hard_drive_status", "$details->timestamp", "$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	} // end of function

	function alert_hard_drive($details) {
		// hard_drive no longer detected
		$sql = "SELECT sys_hw_hard_drive.hard_drive_id, sys_hw_hard_drive.hard_drive_caption
				FROM sys_hw_hard_drive, system WHERE sys_hw_hard_drive.system_id = system.system_id AND
				sys_hw_hard_drive.timestamp = ? AND system.system_id = ? AND system.timestamp = ? AND 
				sys_hw_hard_drive.hard_drive_interface_type <> 'USB'";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'hard drive removed - ' . $myrow->hard_drive_caption;
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_hard_drive', $myrow->hard_drive_id, $alert_details, $details->timestamp);
		}

		// new hard_drive
		$sql = "SELECT sys_hw_hard_drive.hard_drive_id, sys_hw_hard_drive.hard_drive_caption
				FROM 	sys_hw_hard_drive, system
				WHERE 	sys_hw_hard_drive.system_id = system.system_id AND
						sys_hw_hard_drive.timestamp = sys_hw_hard_drive.first_timestamp AND
						sys_hw_hard_drive.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ? AND 
						sys_hw_hard_drive.hard_drive_interface_type <> 'USB'";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'hard drive installed - ' . $myrow->hard_drive_caption;
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_hard_drive', $myrow->hard_drive_id, $alert_details, $details->timestamp);
		}
	}
}
?>