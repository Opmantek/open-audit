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
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
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
		if (((string)$details->first_timestamp == (string)$details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
			# we have only seen this system once, and not via an audit script
			# insert the software and set the first_timestamp == system.first_timestamp
			# otherwise we cause alerts
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
					timestamp,
					first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
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
					"$details->timestamp", 
					"$details->first_timestamp");
			$query = $this->db->query($sql, $data);
		} else {
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
				// the network_card exists - update it
				$sql = "UPDATE sys_hw_network_card SET 
						net_description = ?,
						net_manufacturer = ?,
						net_model = ?,
						net_ip_enabled = ?,
						net_index = ?,
						net_connection_id = ?,
						net_connection_status = ?,
						net_speed = ?,
						net_adapter_type = ?,
						net_dhcp_enabled = ?,
						net_dhcp_server = ?,
						net_dhcp_lease_obtained = ?,
						net_dhcp_lease_expires = ?,
						net_dns_host_name = ?,
						net_dns_domain = ?,
						net_dns_domain_reg_enabled = ?,
						net_dns_server = ?,
						net_wins_primary = ?,
						net_wins_secondary = ?,
						net_wins_lmhosts_enabled = ?,
						timestamp = ?
					WHERE net_id = ?";
				$data = array("$input->net_description",
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
						"$row->net_id");
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
						timestamp,
						first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
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
						"$details->timestamp", 
						"$details->timestamp");
				$query = $this->db->query($sql, $data);
			}
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