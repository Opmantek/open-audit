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

class M_scsi_controller extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_scsi_controller($system_id) {
		$sql = "SELECT 
				scsi_controller_id, 
				scsi_controller_name, 
				scsi_controller_manufacturer, 
				scsi_controller_device_id, 
				scsi_controller_type
			FROM 
				sys_hw_scsi_controller,
				system
			WHERE 
				sys_hw_scsi_controller.system_id = system.system_id AND
				sys_hw_scsi_controller.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				scsi_controller_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_scsi_controller($input, $details) {
		// need to check for sound card changes
		$sql = "SELECT 
				sys_hw_scsi_controller.scsi_controller_id
			FROM 
				sys_hw_scsi_controller, 
				system 
			WHERE 
				sys_hw_scsi_controller.system_id 	= system.system_id AND 
				system.system_id			= ? AND
				system.man_status 			= 'production' AND
				scsi_controller_manufacturer 		= ? AND 
				scsi_controller_name 			= ? AND
				scsi_controller_device_id		= ? AND
				( sys_hw_scsi_controller.timestamp = ? OR sys_hw_scsi_controller.timestamp = ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->manufacturer", 
				"$input->name", 
				"$input->device_id", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the scsi_controller exists - need to update its timestamp
			$sql = "UPDATE sys_hw_scsi_controller SET timestamp = ? WHERE scsi_controller_id = ?";
			$data = array("$details->timestamp", "$row->scsi_controller_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the scsi_controller does not exist - insert it
			$sql = "INSERT INTO sys_hw_scsi_controller 
				( 	system_id, 
					scsi_controller_name, 
					scsi_controller_manufacturer, 
					scsi_controller_device_id, 
					scsi_controller_type, 
					timestamp,
					first_timestamp ) VALUES ( ?,?,?,?,?,?,? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->name", 
					"$input->manufacturer", 
					"$input->device_id", 
					"$input->type", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_scsi_controller($details) {
		// scsi no longer detected
		$sql = "SELECT 
				sys_hw_scsi_controller.scsi_controller_id, 
				sys_hw_scsi_controller.scsi_controller_name
			FROM
				sys_hw_scsi_controller, 
				system
			WHERE
				sys_hw_scsi_controller.system_id = system.system_id AND
				sys_hw_scsi_controller.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'scsi controller removed - ' . $myrow->scsi_controller_name;
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_scsi_controller', $myrow->scsi_controller_id, $alert_details, $details->timestamp);
		}

		// new scsi card
		$sql = "SELECT  
				sys_hw_scsi_controller.scsi_controller_id, 
				sys_hw_scsi_controller.scsi_controller_name
			FROM
				sys_hw_scsi_controller, 
				system
			WHERE
				sys_hw_scsi_controller.system_id = system.system_id AND
				sys_hw_scsi_controller.timestamp = sys_hw_scsi_controller.first_timestamp AND
				sys_hw_scsi_controller.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'scsi controller installed - ' . $myrow->scsi_controller_name;
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_scsi_controller', $myrow->scsi_controller_id, $alert_details, $details->timestamp);
		}
	}
}
?>