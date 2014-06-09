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
 * @version 1.3.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_virtual_machine extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_vm($system_id) {
		$sql = "SELECT sys_sw_virtual_machine.*, system_guest.man_icon 
			FROM	
				sys_sw_virtual_machine 
				LEFT JOIN system ON (sys_sw_virtual_machine.system_id = system.system_id AND sys_sw_virtual_machine.timestamp = system.timestamp) 
				LEFT JOIN system system_guest ON (sys_sw_virtual_machine.guest_system_id = system_guest.system_id)
			WHERE 
				system.system_id = ? ";
		$sql = $this->clean_sql($sql);
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_vm($input, $details) {
		# make sure group is set
		if (!isset($input->vm_group)) { $input->vm_group = ''; }

		# make sure guest_system_id is set
		if (!isset($input->guest_system_id)) {
			$input->guest_system_id = '';
		}

		# attempt to match system_id
		if ($input->guest_system_id == '') {
			$sql = "SELECT system_id FROM system WHERE uuid = LOWER(?) and man_status = 'production'";
			$data = array(strtolower("$input->uuid"));
			$query = $this->db->query($sql, $data);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$input->guest_system_id = $row->system_id;
			}
		}

		# check for virtual machine changes
		$sql = "SELECT 
				sys_sw_virtual_machine.id 
			FROM 
				sys_sw_virtual_machine LEFT JOIN system ON 
					(sys_sw_virtual_machine.system_id = system.system_id AND 
						sys_sw_virtual_machine.timestamp = system.timestamp) 
			WHERE 
				system.system_id = ? AND 
				sys_sw_virtual_machine.uuid = ? AND 
				( sys_sw_virtual_machine.timestamp = ? OR sys_sw_virtual_machine.timestamp = ? ) 
			LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array(	"$details->system_id", 
				"$input->uuid", 
				"$details->original_timestamp", 
				"$details->timestamp"	);
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the vm exists - need to update it
			$sql = "UPDATE sys_sw_virtual_machine SET guest_system_id = ?, status = ?, timestamp = ? WHERE id = ? ";
			$data = array("$input->guest_system_id", "$input->status", "$details->timestamp", "$row->id");
			$query = $this->db->query($sql, $data);
		} else {
			// the vm does not exist - insert it
			$sql = "INSERT INTO sys_sw_virtual_machine 
				( 	system_id, 
					guest_system_id, 
					name, 
					vm_id,  
					uuid, 
					vm_group,
					memory,
					cpu,
					status, 
					timestamp,
					first_timestamp ) 
				VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->guest_system_id", 
					"$input->name", 
					"$input->vm_id", 
					"$input->uuid", 
					"$input->vm_group", 
					"$input->memory", 
					"$input->cpu", 
					"$input->status", 
					"$details->timestamp", 
					"$details->timestamp"	);
			$query = $this->db->query($sql, $data);
		}
	} // end of function

	// function alert_bios($details) {
	// 	// only detect new bios
	// 	$sql = "SELECT sys_hw_bios.bios_id, sys_hw_bios.bios_description 
	// 		FROM 
	// 			sys_hw_bios LEFT JOIN system ON (sys_hw_bios.system_id = system.system_id) 
	// 		WHERE 
	// 			sys_hw_bios.system_id = ? AND 
	// 			sys_hw_bios.first_timestamp = ? AND 
	// 			sys_hw_bios.first_timestamp = sys_hw_bios.timestamp AND 
	// 			sys_hw_bios.first_timestamp != system.first_timestamp";
	// 	$data = array("$details->system_id", "$details->timestamp");

	// 	$sql = $this->clean_sql($sql);
	// 	$query = $this->db->query($sql, $data);
	// 	$result = $query->result();
	// 	foreach ($result as $myrow) { 
	// 		$alert_details = 'bios installed - ' . $myrow->bios_description;
	// 		$this->m_alerts->generate_alert($details->system_id, 'sys_hw_bios', $myrow->bios_id, $alert_details, $details->timestamp);
	// 	}
	// }
}
?>