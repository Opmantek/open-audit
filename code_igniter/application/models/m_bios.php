<?php 
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published 
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.1.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_bios extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_system_bios($system_id) {
		$sql = "SELECT 	
				bios_id, 
				bios_description, 
				bios_manufacturer, 
				bios_serial, 
				bios_smversion,
				bios_version 
			FROM	
				sys_hw_bios,
				system
			WHERE 	
				sys_hw_bios.system_id = system.system_id AND
				sys_hw_bios.timestamp = system.timestamp AND
				system.system_id = ?
			LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_bios($input, $details) {
		// check for processor changes
		$sql = "SELECT 
				sys_hw_bios.bios_id 
			FROM 
				sys_hw_bios, 
				system 
			WHERE 
				sys_hw_bios.system_id = system.system_id AND 
				system.system_id = ? AND 
				system.man_status = 'production' AND  
				bios_description = ? AND 
				bios_manufacturer = ? AND 
				bios_serial = ? AND 
				bios_smversion = ? AND 
				bios_version = ? AND 
				( sys_hw_bios.timestamp = ? OR sys_hw_bios.timestamp = ? ) 
			LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array(	"$details->system_id", 
				"$input->bios_description", 
				"$input->bios_manufacturer", 
				"$input->bios_serial", 
				"$input->bios_smversion", 
				"$input->bios_version", 
				"$details->original_timestamp", 
				"$details->timestamp"	);
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the processor exists - need to update it
			$sql = "UPDATE sys_hw_bios SET bios_asset_tag = ?, timestamp = ? WHERE bios_id = ? ";
			$data = array("$details->bios_asset_tag", "$details->timestamp", "$row->bios_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the bios does not exist - insert it
			$sql = "INSERT INTO sys_hw_bios 
				( 	system_id, 
					bios_description, 
					bios_manufacturer, 
					bios_serial,  
					bios_smversion, 
					bios_version,
					bios_asset_tag,
					timestamp,
					first_timestamp ) 
				VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->bios_description", 
					"$input->bios_manufacturer", 
					"$input->bios_serial", 
					"$input->bios_smversion", 
					"$input->bios_version", 
					"$input->bios_asset_tag", 
					"$details->timestamp", 
					"$details->timestamp"	);
			$query = $this->db->query($sql, $data);
		}
	} // end of function

	function alert_bios($details) {
		$sql = "SELECT 
				sys_hw_bios.bios_id, 
				sys_hw_bios.bios_description
			FROM 	
				sys_hw_bios, 
				system
			WHERE 	
				sys_hw_bios.system_id = system.system_id AND
				sys_hw_bios.timestamp = sys_hw_bios.first_timestamp AND
				sys_hw_bios.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		foreach ($result as $myrow) { 
			$alert_details = 'bios installed - ' . $myrow->bios_description;
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_bios', $myrow->bios_id, $alert_details, $details->timestamp);
		}
	}
}
?>