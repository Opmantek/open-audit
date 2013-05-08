<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_motherboard extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_motherboard($system_id) {
		$sql = "SELECT 
				sys_hw_motherboard.motherboard_id, 
				sys_hw_motherboard.manufacturer, 
				sys_hw_motherboard.model, 
				sys_hw_motherboard.serial, 
				sys_hw_motherboard.memory_slots,
				sys_hw_motherboard.processor_slots,
				sys_hw_motherboard.processor_type
			FROM 
				sys_hw_motherboard,
				system
			WHERE 
				sys_hw_motherboard.system_id = system.system_id AND
				sys_hw_motherboard.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				sys_hw_motherboard.motherboard_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_motherboard($input, $details) {
		// need to check for motherboard changes
		$sql = "SELECT 
				sys_hw_motherboard.motherboard_id
			FROM 
				sys_hw_motherboard, 
				system 
			WHERE 
				sys_hw_motherboard.system_id 	= system.system_id AND 
				system.system_id				= ? AND
				system.man_status 				= 'production' AND
				sys_hw_motherboard.manufacturer 		= ? AND 
				sys_hw_motherboard.model 				= ? AND
				sys_hw_motherboard.serial 				= ? AND
				( sys_hw_motherboard.timestamp = ? OR sys_hw_motherboard.timestamp = ? )";
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
			// the motherboard exists - need to update its timestamp
			$sql = "UPDATE sys_hw_motherboard SET timestamp = ? WHERE motherboard_id = ?";
			$data = array("$details->timestamp", "$row->motherboard_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the motherboard does not exist - insert it
			$sql = "INSERT INTO sys_hw_motherboard
				( 	system_id, 
					manufacturer, 
					model, 
					serial, 
					processor_slots,
					processor_type,
					memory_slots,
					timestamp,
					first_timestamp ) VALUES ( ?,?,?,?,?,?,?,?,? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->manufacturer", 
					"$input->model", 
					"$input->serial", 
					"$input->processor_slots", 
					"$input->processor_type", 
					"$input->memory_slots", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_motherboard($details) {
		// motherboard no longer detected
		$sql = "SELECT 
				sys_hw_motherboard.motherboard_id, 
				sys_hw_motherboard.manufacturer
			FROM
				sys_hw_motherboard, 
				system
			WHERE
				sys_hw_motherboard.system_id = system.system_id AND
				sys_hw_motherboard.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'motherboard removed - ' . $myrow->manufacturer;
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_motherboard', $myrow->motherboard_id, $alert_details, $details->timestamp);
		}

		// new motherboard
		$sql = "SELECT  
				sys_hw_motherboard.motherboard_id, 
				sys_hw_motherboard.manufacturer, 
				sys_hw_motherboard.model
			FROM
				sys_hw_motherboard, 
				system
			WHERE
				sys_hw_motherboard.system_id = system.system_id AND
				sys_hw_motherboard.timestamp = sys_hw_motherboard.first_timestamp AND
				sys_hw_motherboard.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'motherboard installed - ' . $myrow->manufacturer . ' - ' . $myrow->model;
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_motherboard', $myrow->motherboard_id, $alert_details, $details->timestamp);
		}
	}
}
?>