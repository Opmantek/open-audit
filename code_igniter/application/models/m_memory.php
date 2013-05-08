<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_memory extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_memory($system_id) {
		$sql = "SELECT 
				memory_id, 
				memory_bank, 
				memory_type, 
				memory_form_factor,
				memory_detail,
				memory_capacity,
				memory_speed
			FROM 
				sys_hw_memory,
				system
			WHERE 
				sys_hw_memory.system_id = system.system_id AND
				sys_hw_memory.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				memory_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_memory($input, $details) {
		// need to check for memory changes
		$sql = "SELECT 
				sys_hw_memory.memory_id
			FROM 
				sys_hw_memory, 
				system 
			WHERE 
				sys_hw_memory.system_id 	= system.system_id AND 
				system.system_id		= ? AND
				system.man_status 		= 'production' AND
				memory_bank 			= ? AND 
				memory_capacity 		= ? AND
				memory_speed 			= ? AND
				( sys_hw_memory.timestamp = ? OR sys_hw_memory.timestamp = ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->bank", 
				"$input->capacity", 
				"$input->speed", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the memory exists - need to update its timestamp
			$sql = "UPDATE sys_hw_memory SET timestamp = ? WHERE memory_id = ?";
			$data = array("$details->timestamp", "$row->memory_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the memory does not exist - insert it
			$sql = "INSERT INTO sys_hw_memory 
				( 	system_id, 
					memory_bank, 
					memory_type, 
					memory_form_factor,
					memory_detail,
					memory_capacity,
					memory_speed, 
					memory_tag, 
					timestamp,
					first_timestamp ) VALUES ( ?,?,?,?,?,?,?,?,?,? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->bank", 
					"$input->type", 
					"$input->form_factor", 
					"$input->detail", 
					"$input->capacity", 
					"$input->speed", 
					"$input->tag", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_memory($details) {
		// memory no longer detected
		$sql = "SELECT 
				sys_hw_memory.memory_id, 
				sys_hw_memory.memory_bank
			FROM
				sys_hw_memory, 
				system
			WHERE
				sys_hw_memory.system_id = system.system_id AND
				sys_hw_memory.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'memory removed - ' . $myrow->memory_bank;
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_memory', $myrow->memory_id, $alert_details, $details->timestamp);
		}

		// new memory
		$sql = "SELECT  
				sys_hw_memory.memory_id, 
				sys_hw_memory.memory_bank,
				sys_hw_memory.memory_capacity
			FROM
				sys_hw_memory, 
				system
			WHERE
				sys_hw_memory.system_id = system.system_id AND
				sys_hw_memory.timestamp = sys_hw_memory.first_timestamp AND
				sys_hw_memory.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'memory installed - ' . $myrow->memory_bank . ' bank, ' . $myrow->memory_capacity . ' Mb.';
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_memory', $myrow->memory_id, $alert_details, $details->timestamp);
		}
	}
}
?>