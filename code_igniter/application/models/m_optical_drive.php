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

class M_optical_drive extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_optical($system_id) {
		$sql = "SELECT 
				optical_drive_id, 
				optical_drive_model, 
				optical_drive_caption, 
				optical_drive_mount_point 
			FROM 
				sys_hw_optical_drive,
				system
			WHERE 
				sys_hw_optical_drive.system_id = system.system_id AND
				sys_hw_optical_drive.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				optical_drive_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_optical_drives($input, $details) {
		// need to check for optical_drive changes
		$sql = "SELECT sys_hw_optical_drive.optical_drive_id
				FROM sys_hw_optical_drive, system 
				WHERE 	sys_hw_optical_drive.system_id 	= system.system_id AND 
						system.system_id				= ? AND 
						system.man_status 				= 'production' AND 
						optical_drive_model 			= ? AND 
						optical_drive_mount_point 		= ? AND 
						( sys_hw_optical_drive.timestamp = ? OR 
						sys_hw_optical_drive.timestamp 	= ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->optical_drive_model", 
				"$input->optical_drive_mount_point", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the optical_drive exists - need to update its timestamp
			$sql = "UPDATE sys_hw_optical_drive SET timestamp = ? WHERE optical_drive_id = ?";
			$data = array("$details->timestamp", "$row->optical_drive_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the optical_drive does not exist - insert it
			$sql = "INSERT INTO sys_hw_optical_drive (	system_id, 
										optical_drive_caption, 
										optical_drive_model, 
										optical_drive_device_id, 
										optical_drive_mount_point,
										timestamp,
										first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->optical_drive_caption", 
					"$input->optical_drive_model", 
					"$input->optical_drive_device_id", 
					"$input->optical_drive_mount_point", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_optical_drive($details) {
		// optical_drive no longer detected
		$sql = "SELECT sys_hw_optical_drive.optical_drive_id, sys_hw_optical_drive.optical_drive_model, sys_hw_optical_drive.optical_drive_mount_point
				FROM 	sys_hw_optical_drive, system
				WHERE 	sys_hw_optical_drive.system_id = system.system_id AND
						sys_hw_optical_drive.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'optical drive removed - ' . $myrow->optical_drive_mount_point . ' (' . $myrow->optical_drive_model . ')';
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_optical_drive', $myrow->optical_drive_id, $alert_details, $details->timestamp);
		}
		
		// new optical_drive
		$sql = "SELECT sys_hw_optical_drive.optical_drive_id, sys_hw_optical_drive.optical_drive_model, sys_hw_optical_drive.optical_drive_mount_point
				FROM 	sys_hw_optical_drive, system
				WHERE 	sys_hw_optical_drive.system_id = system.system_id AND
						sys_hw_optical_drive.timestamp = sys_hw_optical_drive.first_timestamp AND
						sys_hw_optical_drive.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'optical drive installed - ' . $myrow->optical_drive_mount_point . ' (' . $myrow->optical_drive_model . ')';
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_optical_drive', $myrow->optical_drive_id, $alert_details, $details->timestamp);
		}
	}
}
?>