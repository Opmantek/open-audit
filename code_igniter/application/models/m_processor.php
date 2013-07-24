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

class M_processor extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_system_processor($system_id) {
		$sql = "SELECT 	
				processor_cores, 
				processor_description, 
				processor_speed, 
				processor_manufacturer 
			FROM	
				sys_hw_processor,
				system
			WHERE 	
				sys_hw_processor.system_id = system.system_id AND
				sys_hw_processor.timestamp = system.timestamp AND
				system.system_id = ?
			LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_processor($input, $details) {
		// check for processor changes

		# we need to do some cleaning here in case a description not formatted correctly gets through
		$input->processor_description = str_ireplace("(r)", "", $input->processor_description);
		$input->processor_description = str_ireplace("(tm)", "", $input->processor_description);
		$input->processor_description = preg_replace('/\s\s+/', ' ', $input->processor_description);

		$sql = "SELECT sys_hw_processor.processor_id 
				FROM sys_hw_processor, system 
				WHERE 
					sys_hw_processor.system_id = system.system_id AND 
					system.system_id = ? AND 
					system.man_status = 'production' AND  
					processor_description = ? AND 
					( sys_hw_processor.timestamp = ? OR sys_hw_processor.timestamp = ?) LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", "$input->processor_description", "$details->original_timestamp", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the processor exists - need to update it
			$sql = "UPDATE sys_hw_processor SET timestamp = ?, processor_description = ? WHERE ? = processor_id";
			$data = array("$details->timestamp", "$input->processor_description", "$row->processor_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the processor does not exist - insert it
			$sql = "INSERT INTO sys_hw_processor (	system_id, 
										processor_cores, 
										processor_description, 
										processor_speed, 
										processor_manufacturer,
										timestamp,
										first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->processor_cores", 
					"$input->processor_description", 
					"$input->processor_speed", 
					"$input->processor_manufacturer", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	} // end of function

	function alert_processor($details) {
		$sql = "SELECT sys_hw_processor.processor_id, sys_hw_processor.processor_description 
			FROM 	sys_hw_processor, system 
			WHERE 	sys_hw_processor.system_id = system.system_id AND 
					sys_hw_processor.timestamp = sys_hw_processor.first_timestamp AND 
					sys_hw_processor.timestamp = ? AND 
					system.system_id = ? AND 
					system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		foreach ($result as $myrow) { 
			$alert_details = 'processor installed - ' . $myrow->processor_description;
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_processor', $myrow->processor_id, $alert_details, $details->timestamp);
		}
	}
}
?>
