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

class M_route extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_route($system_id) {
		$sql = "SELECT 
				sys_sw_route.route_id, 
				sys_sw_route.destination, 
				sys_sw_route.mask, 
				sys_sw_route.metric, 
				sys_sw_route.next_hop,
				sys_sw_route.protocol,
				sys_sw_route.type
			FROM 
				sys_sw_route,
				system
			WHERE 
				sys_sw_route.system_id = system.system_id AND
				sys_sw_route.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				sys_sw_route.route_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_route($input, $details) {
		// need to check for route changes
		$sql = "SELECT 
				sys_sw_route.route_id
			FROM 
				sys_sw_route, 
				system 
			WHERE 
				sys_sw_route.system_id 		= system.system_id AND 
				system.system_id		= ? AND
				system.man_status 		= 'production' AND
				sys_sw_route.destination 	= ? AND 
				sys_sw_route.next_hop 		= ? AND
				( sys_sw_route.timestamp = ? OR sys_sw_route.timestamp = ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", $this->ip_address_to_db($input->destination), $this->ip_address_to_db($input->next_hop), "$details->original_timestamp", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the route exists - need to update its timestamp
			$sql = "UPDATE sys_sw_route SET timestamp = ? WHERE route_id = ?";
			$data = array("$details->timestamp", "$row->route_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the route does not exist - insert it
			$sql = "INSERT INTO sys_sw_route
				( 	system_id, 
					destination, 
					mask, 
					metric, 
					next_hop, 
					protocol,
					type,
					timestamp,
					first_timestamp ) VALUES ( ?,?,?,?,?,?,?,?,? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					$this->ip_address_to_db($input->destination), 
					"$input->mask", 
					"$input->metric", 
					$this->ip_address_to_db($input->next_hop), 
					"$input->protocol", 
					"$input->type", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_route($details) {
		// route no longer detected
		$sql = "SELECT 
				sys_sw_route.route_id, 
				sys_sw_route.destination, 
				sys_sw_route.next_hop 
			FROM
				sys_sw_route, 
				system
			WHERE
				sys_sw_route.system_id = system.system_id AND
				sys_sw_route.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'route removed - ' . $this->ip_address_from_db($myrow->destination) . ' -> ' . $this->ip_address_from_db($myrow->next_hop);
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_route', $myrow->route_id, $alert_details, $details->timestamp);
		}

		// new route
		$sql = "SELECT  
				sys_sw_route.route_id,
				sys_sw_route.destination, 
				sys_sw_route.next_hop
			FROM
				sys_sw_route, 
				system
			WHERE
				sys_sw_route.system_id = system.system_id AND
				sys_sw_route.timestamp = sys_sw_route.first_timestamp AND
				sys_sw_route.timestamp = ? AND
				system.system_id = ? AND
				system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'route installed - ' . $this->ip_address_from_db($myrow->destination) . ' -> ' . $this->ip_address_from_db($myrow->next_hop);
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_route', $myrow->route_id, $alert_details, $details->timestamp);
		}
	}
}
?>