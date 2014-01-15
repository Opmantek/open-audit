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

class M_print_queue extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_print_queue($system_id) {
		$sql = "SELECT 
				sys_sw_print_queue.*
			FROM 
				sys_sw_print_queue,
				system
			WHERE 
				sys_sw_print_queue.system_id = system.system_id AND
				sys_sw_print_queue.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				sys_sw_print_queue.queue_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_print_queue($input, $details) {
		// need to check for print queue changes
		$sql = "SELECT 
				sys_sw_print_queue.queue_id
			FROM 
				sys_sw_print_queue, 
				system 
			WHERE 
				sys_sw_print_queue.queue_system_key = ? AND 
				sys_sw_print_queue.system_id = system.system_id AND 
				system.system_id			= ? AND
				system.man_status 			= 'production' AND
				( sys_sw_print_queue.timestamp 	= ? OR sys_sw_print_queue.timestamp = ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$input->system_key", "$details->system_id", "$details->original_timestamp", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the print queue exists - need to update its timestamp
			$sql = "UPDATE sys_sw_print_queue SET timestamp = ? WHERE queue_id = ?";
			$data = array("$details->timestamp", "$row->queue_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the print queue does not exist - insert it
			if ($input->man_ip_address == '') {
				$printer_ip = '';
			} else {
				$printer_ip = $this->ip_address_to_db($input->man_ip_address);
			}
			$sql = "INSERT INTO sys_sw_print_queue
					( system_id, 
					queue_system_key, 
					queue_name, 
					queue_port_name, 
					queue_ip_address, 
					queue_description, 
					queue_model, 
					queue_manufacturer, 
					queue_shared, 
					queue_shared_name, 
					queue_location, 
					queue_color, 
					queue_duplex, 
					queue_type, 
					queue_connection_status, 
					timestamp,
					first_timestamp ) VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->system_key", 
					"$input->printer_name", 
					"$input->printer_port_name", 
					"$printer_ip", 
					"$input->description", 
					"$input->model", 
					"$input->manufacturer", 
					"$input->printer_shared", 
					"$input->printer_shared_name", 
					"$input->printer_location", 
					"$input->printer_color", 
					"$input->printer_duplex", 
					"$input->printer_type", 
					"$input->printer_connection_status", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_print_queue($details) {
		// print queue no longer detected
		$sql = "SELECT 
				sys_sw_print_queue.queue_id, 
				sys_sw_print_queue.queue_system_key, 
				sys_sw_print_queue.model 
			FROM
				sys_sw_print_queue, 
				system
			WHERE
				sys_sw_print_queue.system_id = system.system_id AND
				sys_sw_print_queue.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'print queue removed - ' . $myrow->queue_system_key . ' (' . $myrow->model . ')';
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_print_queue', $myrow->queue_id, $alert_details, $details->timestamp);
		}

		// new print queue
		$sql = "SELECT  
				sys_sw_print_queue.queue_id,
				sys_sw_print_queue.queue_system_key, 
				sys_sw_print_queue.model 
			FROM
				sys_sw_print_queue, 
				system
			WHERE
				sys_sw_print_queue.system_id = system.system_id AND
				sys_sw_print_queue.timestamp = sys_sw_print_queue.first_timestamp AND
				sys_sw_print_queue.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'print queue installed - ' . $myrow->queue_system_key . ' (' . $myrow->model . ')';
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_print_queue', $myrow->queue_id, $alert_details, $details->timestamp);
		}
	}
}
?>