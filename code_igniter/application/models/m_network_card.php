<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_network_card extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_network($system_id) {
		$sql = "SELECT 	
				sys_hw_network_card.*
			FROM 	
				sys_hw_network_card,
				system
			WHERE 	
				sys_hw_network_card.system_id = system.system_id AND
				sys_hw_network_card.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				net_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_network_cards($input, $details) {		
		// need to check for network_card changes
		$sql = "SELECT 	sys_hw_network_card.net_id 
				FROM 	sys_hw_network_card, system 
				WHERE 	sys_hw_network_card.system_id 	= system.system_id AND 
						system.system_id				= ? AND 
						system.man_status 				= 'production' AND 
						net_mac_address 				= ? AND 
						net_description 				= ? AND 
						net_model 						= ? AND 
						( sys_hw_network_card.timestamp = ? OR 
						sys_hw_network_card.timestamp 	= ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->net_mac_address", 
				"$input->net_description", 
				"$input->net_model", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the network_card exists - need to update its timestamp
			$sql = "UPDATE sys_hw_network_card SET timestamp = ? WHERE net_id = ?";
			$data = array("$details->timestamp", "$row->net_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the network_card does not exist - insert it
			$sql = "INSERT INTO sys_hw_network_card (	
					system_id, 
					net_mac_address, 
					net_description, 
					net_manufacturer, 
					net_model,
					net_ip_enabled,
					net_index,
					net_connection_id,
					net_connection_status,
					net_speed,
					net_adapter_type,
					net_dhcp_enabled,
					net_dhcp_server,
					net_dhcp_lease_obtained,
					net_dhcp_lease_expires,
					net_dns_host_name,
					net_dns_domain,
					net_dns_domain_reg_enabled,
					net_dns_server,
					net_wins_primary,
					net_wins_secondary,
					net_wins_lmhosts_enabled,
					timestamp,
					first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->net_mac_address", 
					"$input->net_description", 
					"$input->net_manufacturer", 
					"$input->net_model", 
					"$input->net_ip_enabled", 
					"$input->net_index", 
					"$input->net_connection_id", 
					"$input->net_connection_status", 
					"$input->net_speed", 
					"$input->net_adapter_type", 
					"$input->net_dhcp_enabled", 
					"$input->net_dhcp_server", 
					"$input->net_dhcp_lease_obtained", 
					"$input->net_dhcp_lease_expires", 
					"$input->net_dns_host_name", 
					"$input->net_dns_domain", 
					"$input->net_dns_domain_reg_enabled", 
					"$input->net_dns_server", 
					"$input->net_wins_primary", 
					"$input->net_wins_secondary", 
					"$input->net_wins_lmhosts_enabled", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	} // end of function

	function alert_network_card($details) {
		// network_card no longer detected
		$sql = "SELECT sys_hw_network_card.net_id, sys_hw_network_card.net_model, sys_hw_network_card.net_mac_address
				FROM 	sys_hw_network_card, system
				WHERE 	sys_hw_network_card.system_id = system.system_id AND
						sys_hw_network_card.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'network card removed - ' . $myrow->net_model . ' (' . $myrow->net_mac_address . ')';
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_network_card', $myrow->net_id, $alert_details, $details->timestamp);
		}
		
		// new network_card
		$sql = "SELECT sys_hw_network_card.net_id, sys_hw_network_card.net_model, sys_hw_network_card.net_mac_address
				FROM 	sys_hw_network_card, system
				WHERE 	sys_hw_network_card.system_id = system.system_id AND
						sys_hw_network_card.timestamp = sys_hw_network_card.first_timestamp AND
						sys_hw_network_card.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'network card installed - ' . $myrow->net_model . ' (' . $myrow->net_mac_address . ')';
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_network_card', $myrow->net_id, $alert_details, $details->timestamp);
		}
	}
}
?>