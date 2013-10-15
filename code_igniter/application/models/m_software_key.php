<?php
/**
 * @package Open-AudIT
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_software_key extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_key($system_id) {
		$sql = "SELECT 
				DISTINCT(key_name), 
				key_edition, 
				key_release, 
				key_text, 
				sys_sw_software_key.first_timestamp 
			FROM 
				sys_sw_software_key,
				system
			WHERE 	
				sys_sw_software_key.system_id = system.system_id AND
				sys_sw_software_key.timestamp = system.timestamp AND
				system.system_id = ? 
			ORDER BY 
				key_name";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}


	function process_software_key($input, $details) {		
		// need to check for software changes
		$sql = "SELECT sys_sw_software_key.key_id 
				FROM sys_sw_software_key, system 
				WHERE sys_sw_software_key.system_id = system.system_id AND 
					system.system_id				= ? AND 
					system.man_status			 	= 'production' AND 
					key_name 						= ? AND 
					key_release 					= ? AND 
					key_text						= ? AND
					key_edition						= ? AND
					( sys_sw_software_key.timestamp = ? OR 
					sys_sw_software_key.timestamp 	= ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->key_name", 
				"$input->key_release", 
				"$input->key_text", 
				"$input->key_edition", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the software key exists - need to update its timestamp
			$sql = "UPDATE sys_sw_software_key SET timestamp = ? WHERE key_id = ?";
			$data = array("$details->timestamp", "$row->key_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the software key does not exist - insert it
			$sql = "INSERT INTO sys_sw_software_key (	system_id, 
										key_name, 
										key_text, 
										key_release, 
										key_edition, 
										timestamp,
										first_timestamp ) VALUES ( ?,?,?,?,?,?,? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->key_name", 
					"$input->key_text", 
					"$input->key_release", 
					"$input->key_edition", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	} // end of function

	function alert_software_key($details) {
		// software no longer detected
		$sql = "SELECT sys_sw_software_key.key_id, sys_sw_software_key.key_name, sys_sw_software_key.key_edition
				FROM 	sys_sw_software_key, system
				WHERE 	sys_sw_software_key.system_id = system.system_id AND
						sys_sw_software_key.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) { 
			$alert_details =  'key removed - ' . $myrow->key_name .' (' . $myrow->key_edition . ')';
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_software_key', $myrow->key_id, $alert_details, $details->timestamp);
		}
		
		// new software
		$sql = "SELECT sys_sw_software_key.key_id, sys_sw_software_key.key_name, sys_sw_software_key.key_edition
				FROM 	sys_sw_software_key, system
				WHERE 	sys_sw_software_key.system_id = system.system_id AND
						sys_sw_software_key.timestamp = sys_sw_software_key.first_timestamp AND
						sys_sw_software_key.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) { 
			$alert_details = 'key installed - ' . $myrow->key_name . ' (' . $myrow->key_edition . ')';
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_software_key', $myrow->key_id, $alert_details, $details->timestamp);
		}
	}
}
?>