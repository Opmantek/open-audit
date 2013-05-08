<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_ip_address extends MY_Model {

	function __construct() {
		parent::__construct();
		$this->load->helper('network');
	}

	function get_system_ip($system_id) {
		$sql = "SELECT sys_hw_network_card_ip.* FROM sys_hw_network_card_ip, system
			WHERE sys_hw_network_card_ip.system_id = system.system_id AND 
			sys_hw_network_card_ip.timestamp = system.timestamp AND system.system_id = ? GROUP BY ip_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_addresses($input, $details) {
		$sql = "SELECT sys_hw_network_card_ip.ip_id FROM sys_hw_network_card_ip, system 
			WHERE sys_hw_network_card_ip.system_id = system.system_id AND 
				system.system_id = ? AND 
				system.man_status = 'production' AND 
				sys_hw_network_card_ip.net_mac_address = ? AND 
				(sys_hw_network_card_ip.ip_address_v4 = ? OR 
				sys_hw_network_card_ip.ip_address_v6 = ? ) AND 
				sys_hw_network_card_ip.ip_subnet = ? AND 
				( sys_hw_network_card_ip.timestamp = ? OR 
				sys_hw_network_card_ip.timestamp = ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", "$input->net_mac_address", $this->ip_address_to_db($input->ip_address_v4), 
				"$input->ip_address_v6", "$input->ip_subnet", "$details->original_timestamp", "$details->timestamp");
		// note - removed the IPv6 address, below
		$sql = "SELECT sys_hw_network_card_ip.ip_id FROM sys_hw_network_card_ip, system 
			WHERE sys_hw_network_card_ip.system_id = system.system_id AND 
			system.system_id = ? AND system.man_status = 'production' AND 
			sys_hw_network_card_ip.net_mac_address = ? AND sys_hw_network_card_ip.ip_address_v4 = ? AND 
			sys_hw_network_card_ip.ip_subnet = ? AND ( sys_hw_network_card_ip.timestamp = ? OR 
			sys_hw_network_card_ip.timestamp = ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", "$input->net_mac_address", $this->ip_address_to_db($input->ip_address_v4), 
				"$input->ip_subnet", "$details->original_timestamp", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the network_card_ip exists - need to update its timestamp
			$sql = "UPDATE sys_hw_network_card_ip SET timestamp = ? WHERE ip_id = ?";
			$data = array("$details->timestamp", "$row->ip_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the network_card_ip does not exist - insert it
			$sql = "INSERT INTO sys_hw_network_card_ip ( net_mac_address, 
					system_id, ip_address_v4, ip_address_v6, ip_address_version, 
					ip_subnet, timestamp, first_timestamp ) 
					VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
			$sql = $this->clean_sql($sql);
			$data = array("$input->net_mac_address", "$details->system_id", 
					$this->ip_address_to_db($input->ip_address_v4), 
					"$input->ip_address_v6", "$input->ip_address_version", 
					"$input->ip_subnet", "$details->timestamp", "$details->timestamp");
			$query = $this->db->query($sql, $data);
		}

		if ($input->ip_address_v4 != ''){
			$myip = $input->ip_address_v4 . " " . $input->ip_subnet;
			$ipdetails = network_details($myip);
			# NOTE - below is a hack because a 255.255.255.254 subnet mask produces an error in the network_helper -> network_details function
			# enable the below to see the error (with a 255.255.255.254 mask)
			# print_r($ipdetails); 
			if ($input->ip_subnet == "255.255.255.254") {
				$start_ip = $this->ip_address_to_db($ipdetails->network);
				$finish_ip = $this->ip_address_to_db($input->ip_address_v4);
			} else {
				if (isset($ipdetails->host_min)) {
					$start_ip = $this->ip_address_to_db($ipdetails->host_min);
				} else {
					$start_ip = "0.0.0.0";
				}
				if (isset($ipdetails->host_max)) {
					$finish_ip = $this->ip_address_to_db($ipdetails->host_max);
				} else {
					$finish_ip = "0.0.0.0";
				}
			}
			if ($start_ip == "0.0.0.0"){
				// do nothing - we don't have a valid IP
			} else {
				$sql = "SELECT config_value FROM oa_config WHERE config_name = 'auto_create_network_groups' ";
				$query = $this->db->query($sql);
				$row = $query->row();
				if ($row->config_value <> 'n') {
					$group_dynamic_select = "SELECT distinct(system.system_id) FROM system, sys_hw_network_card_ip WHERE ( sys_hw_network_card_ip.ip_address_v4 >= '" . $start_ip . "' AND sys_hw_network_card_ip.ip_address_v4 <= '" . $finish_ip . "' AND sys_hw_network_card_ip.ip_subnet = '" . $input->ip_subnet . "' AND sys_hw_network_card_ip.system_id = system.system_id AND sys_hw_network_card_ip.timestamp = system.timestamp AND system.man_status = 'production') UNION SELECT distinct(system.system_id) FROM system WHERE (system.man_ip_address >= '" . $start_ip . "' AND system.man_ip_address <= '" . $finish_ip . "' AND system.man_status = 'production')";
					$start=explode(' ',microtime()); 
					$sql = "SELECT * FROM oa_group WHERE group_dynamic_select = ? ";
					$data=array($group_dynamic_select);
					$query = $this->db->query($sql, $data);
					if ($query->num_rows() > 0) {
						// group exists - no need to do anything
					} else {
						// insert new group
						$sql = "INSERT INTO oa_group (group_id, group_name, group_padded_name, group_dynamic_select, 
								group_parent, group_description, group_category, group_icon) VALUES 
								(NULL, ?, ?, ?, '1', ?, 'network', 'switch')";
						$sql = $this->clean_sql($sql);
						$group_name = "Network - " . $ipdetails->network . ' / ' . $ipdetails->network_slash;
						$group_padded_name = "Network - " . $this->ip_address_to_db($ipdetails->network);
						$data = array("$group_name", "$group_padded_name", "$group_dynamic_select", "$ipdetails->network");
						$query = $this->db->query($sql, $data);
						$insert_id = $this->db->insert_id();
						// We need to insert an entry into oa_group_user for any Admin level user
						$sql = "INSERT INTO oa_group_user (SELECT NULL, user_id, ?, '10' FROM oa_user WHERE user_admin = 'y')";
						$data = array( $insert_id );
						$result = $this->db->query($sql, $data);
						# now we update this specific group
						# this accounts for if another system has a IP that would fall in this group, but was submitted
						# without a subnet and no matching network group was previously created.
						# update the group with all systems that match
						$ci =& get_instance();
						$ci->load->model('m_oa_group');
						$ci->m_oa_group->update_specific_group($insert_id); 
					}
				}
			}	
		}
	} // end of function

	function alert_ip_address($details) {
		// new network_card_ip - ONLY for "servers" or devices not using DHCP
		$sql = "SELECT 
					sys_hw_network_card_ip.ip_id, 
					sys_hw_network_card_ip.ip_address_v4
				FROM 	
					sys_hw_network_card_ip, 
					sys_hw_network_card, 
					system
				WHERE 	
					sys_hw_network_card_ip.net_mac_address 	= sys_hw_network_card.net_mac_address AND
					sys_hw_network_card.system_id 			= system.system_id AND
					sys_hw_network_card_ip.timestamp 		= sys_hw_network_card_ip.first_timestamp AND
					sys_hw_network_card_ip.timestamp 		= ? AND
					system.system_id 						= ? AND
					system.timestamp 						= ? AND
					sys_hw_network_card.net_dhcp_enabled	= 'False' ";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'ip address changed - ' . $myrow->ip_address_v4;
			$this->m_alerts->generate_alert("$details->system_id", 'sys_hw_network_card_ip', "$myrow->ip_id", $alert_details, "$details->timestamp");
		}
	}

	function set_initial_address($details) {
		$sql = "SELECT 	
					sys_hw_network_card_ip.ip_address_v4, 
					sys_hw_network_card_ip.ip_subnet 
				FROM	
					sys_hw_network_card_ip,
					sys_hw_network_card
				WHERE	
					sys_hw_network_card_ip.net_mac_address = sys_hw_network_card.net_mac_address AND
					sys_hw_network_card.system_id = ? AND
					(sys_hw_network_card_ip.timestamp = ? OR
					sys_hw_network_card_ip.timestamp = ?) 
				ORDER BY 
					sys_hw_network_card_ip.ip_address_v4 DESC
				LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", "$details->original_timestamp", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$this->m_system->update_system_man($details->system_id, 'man_ip_address', $myrow->ip_address_v4);
		}
	}
}
?>
