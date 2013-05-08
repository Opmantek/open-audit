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

class M_variable extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_variable($system_id) {
		$sql = "SELECT 
				sys_sw_variable.variable_id, 
				sys_sw_variable.variable_name, 
				sys_sw_variable.variable_value
			FROM 
				sys_sw_variable,
				system
			WHERE 
				sys_sw_variable.system_id = system.system_id AND
				sys_sw_variable.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				sys_sw_variable.variable_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_variable($input, $details) {
		// need to check for variable changes
		$sql = "SELECT 
				sys_sw_variable.variable_id
			FROM 
				sys_sw_variable, 
				system 
			WHERE 
				sys_sw_variable.system_id 	= system.system_id AND 
				system.system_id		= ? AND
				system.man_status 		= 'production' AND
				sys_sw_variable.variable_name 	= ? AND 
				sys_sw_variable.variable_value	= ? AND
				( sys_sw_variable.timestamp = ? OR sys_sw_variable.timestamp = ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->variable_name", 
				"$input->variable_value", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the variable exists - need to update its timestamp
			$sql = "UPDATE sys_sw_variable SET timestamp = ? WHERE variable_id = ?";
			$data = array("$details->timestamp", "$row->variable_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the variable does not exist - insert it
			$sql = "INSERT INTO sys_sw_variable
				( 	system_id, 
					variable_name, 
					variable_value, 
					timestamp,
					first_timestamp ) VALUES ( ?,?,?,?,? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->variable_name", 
					"$input->variable_value", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_variable($details) {
		// variable no longer detected
		$sql = "SELECT 
				sys_sw_variable.variable_id, 
				sys_sw_variable.variable_name
			FROM
				sys_sw_variable, 
				system
			WHERE
				sys_sw_variable.system_id = system.system_id AND
				sys_sw_variable.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'variable removed - ' . $myrow->variable_name;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_variable', $myrow->variable_id, $alert_details, $details->timestamp);
		}

		// new variable
		$sql = "SELECT  
				sys_sw_variable.variable_id,
				sys_sw_variable.variable_name,
				sys_sw_variable.variable_value
			FROM
				sys_sw_variable, 
				system
			WHERE
				sys_sw_variable.system_id = system.system_id AND
				sys_sw_variable.timestamp = sys_sw_variable.first_timestamp AND
				sys_sw_variable.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'variable installed - ' . $myrow->variable_name . ' (' .$myrow->variable_value . ')';
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_variable', $myrow->variable_id, $alert_details, $details->timestamp);
		}
	}	
}
?>