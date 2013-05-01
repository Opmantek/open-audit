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

class M_pagefile extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_pagefile($system_id) {
		$sql = "SELECT 
				pagefile_name, 
				pagefile_initial_size, 
				pagefile_max_size
			FROM 
				sys_sw_pagefile,
				system
			WHERE 
				sys_sw_pagefile.system_id = system.system_id AND
				sys_sw_pagefile.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				pagefile_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_pagefile($input, $details) {
		// need to check for pagefile changes
		$sql = "SELECT 
				sys_sw_pagefile.pagefile_id
			FROM 
				sys_sw_pagefile, 
				system 
			WHERE 	
				sys_sw_pagefile.system_id 	= system.system_id AND 
				system.system_id		= ? AND 
				system.man_status 		= 'production' AND 
				pagefile_name 		= ? AND 
				pagefile_initial_size 	= ? AND 
				pagefile_max_size	= ? AND
				( sys_sw_pagefile.timestamp = ? OR 
				sys_sw_pagefile.timestamp 	= ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->pagefile_name", 
				"$input->pagefile_initial_size", 
				"$input->pagefile_max_size", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the pagefile exists - need to update its timestamp
			$sql = "UPDATE sys_sw_pagefile SET timestamp = ? WHERE pagefile_id = ?";
			$data = array("$details->timestamp", "$row->pagefile_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the pagefile does not exist - insert it
			$sql = "INSERT INTO sys_sw_pagefile (	
					system_id, 
					pagefile_name, 
					pagefile_initial_size, 
					pagefile_max_size, 
					timestamp,
					first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->pagefile_name", 
					"$input->pagefile_initial_size", 
					"$input->pagefile_max_size", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_pagefile($details) {
		// pagefile no longer detected
		$sql = "SELECT 
				sys_sw_pagefile.pagefile_id, 
				sys_sw_pagefile.pagefile_name
			FROM 	
				sys_sw_pagefile, 
				system
			WHERE 	
				sys_sw_pagefile.system_id = system.system_id AND
				sys_sw_pagefile.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'pagefile removed - ' . $myrow->pagefile_name;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_pagefile', $myrow->pagefile_id, $alert_details, $details->timestamp);
		}

		// new pagefile
		$sql = "SELECT 
				sys_sw_pagefile.pagefile_id, 
				sys_sw_pagefile.pagefile_name
			FROM 	
				sys_sw_pagefile, 
				system
			WHERE 	
				sys_sw_pagefile.system_id = system.system_id AND
				sys_sw_pagefile.timestamp = sys_sw_pagefile.first_timestamp AND
				sys_sw_pagefile.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'pagefile installed - ' . $myrow->pagefile_name;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_pagefile', $myrow->pagefile_id, $alert_details, $details->timestamp);
		}
	}
}
?>