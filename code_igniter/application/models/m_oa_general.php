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
 * @version 1.4
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_oa_general extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	/**
	 * Get the attribute or attributes from the system_id
	 *
	 * @access	public
	 * @param	table & attribute & system_id
	 * @return	string | array of objects
	 */
	function get_attribute($table = 'system', $attribute = 'hostname', $system_id = '') {
		if ($system_id === '') { return(''); }
		if ((strpos($attribute, ",") !== FALSE) or ($attribute == "*")) { $limit = ""; } else { $limit = "LIMIT 1"; }
		$sql = "SELECT $attribute FROM $table WHERE system_id = ? " . $limit;
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);

		#if ($attribute === 'man_status'){
			#echo $this->db->last_query() . "<br />\n";
			#print_r($query->row());
		#}

		if ((strpos($attribute, ",") !== FALSE) or ($attribute == "*")) { 
			$result = $query->result();
			return ($result);
		} else {
			$row = $query->row();
			if (isset($row->$attribute)) {
				return ($row->$attribute);
			} else {
				return('');
			}
		}
	}

	function get_system_attribute_api($table = 'system', $attribute = 'hostname', $system_id = '') {
		if ($table == 'system') {
			$sql = "SELECT $attribute FROM $table WHERE system_id = ? ";
		} else {
			$sql = "SELECT $table.$attribute FROM $table LEFT JOIN system ON ($table.system_id = system.system_id AND $table.timestamp = system.timestamp) WHERE system.system_id = ? ";
		}
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function get_system_document_api($table = '', $system_id = '') {
		if ($table == '') {
			return;
		}
		if ($table == 'system') {
			$sql = 'SELECT system_id, hostname, man_ip_address, man_type, man_class, man_function, man_environment, man_status, man_description, man_os_group, man_os_family, man_os_name, man_manufacturer, man_model, man_serial, man_form_factor, man_vm_group, uptime, location_name, last_seen, last_seen_by, icon, snmp_oid FROM system LEFT JOIN oa_location ON system.man_location_id = oa_location.location_id WHERE system_id = ?';

		} elseif ($table == 'sys_hw_bios') {
			$sql = 'SELECT bios_description, bios_manufacturer, bios_serial, bios_smversion, bios_version, bios_asset_tag FROM sys_hw_bios LEFT JOIN system ON system.system_id = sys_hw_bios.system_id AND system.timestamp = sys_hw_bios.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_sw_group') {
			$sql = 'SELECT group_name, group_description, group_sid, group_members FROM sys_sw_group LEFT JOIN system ON system.system_id = sys_sw_group.system_id AND system.timestamp = sys_sw_group.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_hw_hard_drive') {
			$sql = 'SELECT hard_drive_caption, hard_drive_index, hard_drive_interface_type, hard_drive_manufacturer, hard_drive_model, hard_drive_serial, hard_drive_partitions, hard_drive_scsi_bus, hard_drive_scsi_logical_unit, hard_drive_scsi_port, hard_drive_size, hard_drive_status, hard_drive_firmware FROM sys_hw_hard_drive LEFT JOIN system ON system.system_id = sys_hw_hard_drive.system_id AND system.timestamp = sys_hw_hard_drive.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_sw_software') {
			$sql = 'SELECT software_name, software_url, software_email, software_version, software_publisher, date(sys_sw_software.timestamp) as software_date_detected, date(software_installed_on) as software_installed_on, software_installed_by FROM sys_sw_software LEFT JOIN system ON system.system_id = sys_sw_software.system_id AND system.timestamp = sys_sw_software.timestamp WHERE system.system_id = ? AND software_comment = ""';

		} elseif ($table == 'sys_hw_network_card_ip') {
			$sql = 'SELECT ip_address_v4, ip_address_v6, ip_subnet, ip_address_version, sys_hw_network_card_ip.net_mac_address, net_connection_id FROM sys_hw_network_card_ip LEFT JOIN system ON system.system_id = sys_hw_network_card_ip.system_id AND system.timestamp = sys_hw_network_card_ip.timestamp LEFT JOIN sys_hw_network_card ON sys_hw_network_card_ip.net_index = sys_hw_network_card.net_index WHERE system.system_id = ?';

		} elseif ($table == 'sys_hw_memory') {
			$sql = 'SELECT memory_bank, memory_type, memory_form_factor, memory_detail, memory_capacity, memory_speed, memory_tag, memory_serial FROM sys_hw_memory LEFT JOIN system ON system.system_id = sys_hw_memory.system_id AND system.timestamp = sys_hw_memory.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_hw_motherboard') {
			$sql = 'SELECT sys_hw_motherboard.* FROM sys_hw_motherboard LEFT JOIN system ON system.system_id = sys_hw_motherboard.system_id AND system.timestamp = sys_hw_motherboard.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_sw_netstat') {
			$sql = 'SELECT protocol, ip_address, port, program FROM sys_sw_netstat LEFT JOIN system ON system.system_id = sys_sw_netstat.system_id AND system.timestamp = sys_sw_netstat.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_hw_network_card') {
			$sql = 'SELECT net_connection_id, net_mac_address, net_model, man_manufacturer, net_speed, net_connection_status, net_adapter_type, net_dhcp_enabled, net_dhcp_server, net_dhcp_lease_obtained, net_dhcp_lease_expires, net_dns_domain, net_dns_server, net_dns_domain_reg_enabled FROM sys_hw_network_card LEFT JOIN system ON system.system_id = sys_hw_network_card.system_id AND system.timestamp = sys_hw_network_card.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_hw_partition') {
			$sql = 'SELECT hard_drive_index, partition_mount_type, partition_mount_point, partition_name, partition_size, partition_free_space, partition_used_space, partition_format, partition_caption, partition_disk_index, partition_bootable, partition_type, partition_quotas_supported, partition_quotas_enabled, partition_serial FROM sys_hw_partition LEFT JOIN system ON system.system_id = sys_hw_partition.system_id AND system.timestamp = sys_hw_partition.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_hw_processor') {
			$sql = 'SELECT processor_description, processor_speed, processor_count, processor_cores, processor_logical, processor_manufacturer FROM sys_hw_processor LEFT JOIN system ON system.system_id = sys_hw_processor.system_id AND system.timestamp = sys_hw_processor.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_sw_route') {
			$sql = 'SELECT destination, next_hop, mask, metric, protocol, sys_sw_route.type FROM sys_sw_route LEFT JOIN system ON system.system_id = sys_sw_route.system_id AND system.timestamp = sys_sw_route.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_sw_service') {
			$sql = 'SELECT service_display_name, service_name, service_start_mode, service_start_name, service_state FROM sys_sw_service LEFT JOIN system ON system.system_id = sys_sw_service.system_id AND system.timestamp = sys_sw_service.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_sw_share') {
			$sql = 'SELECT share_name, share_size, share_caption, share_path FROM sys_sw_share LEFT JOIN system ON system.system_id = sys_sw_share.system_id AND system.timestamp = sys_sw_share.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_sw_software_library') {
			$sql = 'SELECT software_name, software_url, software_email, software_version, software_publisher, date(sys_sw_software.timestamp) as software_date_detected, date(software_installed_on) as software_installed_on, software_installed_by FROM sys_sw_software LEFT JOIN system ON system.system_id = sys_sw_software.system_id AND system.timestamp = sys_sw_software.timestamp WHERE system.system_id = ? AND software_comment = "library"';

		} elseif ($table == 'sys_sw_software_update') {
			$sql = 'SELECT software_name, software_url, software_email, software_version, software_publisher, date(sys_sw_software.timestamp) as software_date_detected, date(software_installed_on) as software_installed_on, software_installed_by FROM sys_sw_software LEFT JOIN system ON system.system_id = sys_sw_software.system_id AND system.timestamp = sys_sw_software.timestamp WHERE system.system_id = ? AND software_comment = "update"';

		} elseif ($table == 'sys_sw_user') {
			$sql = 'SELECT user_name, user_caption, user_sid, user_domain, user_disabled, user_full_name, user_password_changeable, user_password_expires, user_password_required, user_status, user_type FROM sys_sw_user LEFT JOIN system ON system.system_id = sys_sw_user.system_id AND system.timestamp = sys_sw_user.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_sw_variable') {
			$sql = 'SELECT variable_name, variable_value FROM sys_sw_variable LEFT JOIN system ON system.system_id = sys_sw_variable.system_id AND system.timestamp = sys_sw_variable.timestamp WHERE system.system_id = ?';

		} elseif ($table == 'sys_sw_windows') {
			$sql = 'SELECT windows_build_number, windows_user_name, windows_client_site_name, windows_domain_short, windows_domain_controller_address, windows_domain_controller_name, windows_domain_role, windows_part_of_domain, windows_time_caption, windows_time_daylight, windows_boot_device, windows_country_code, windows_organisation, windows_language, windows_registered_user, windows_service_pack, windows_version, windows_install_directory, windows_active_directory_ou FROM sys_sw_windows LEFT JOIN system ON system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp WHERE system.system_id = ?';
		}
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function get_system_attribute($table = 'system', $attribute = 'hostname', $system_id = '') {
		if ((strpos($attribute, ",") !== FALSE) or ($attribute == "*")) { $limit = ""; } else { $limit = "LIMIT 1"; }
		$sql = "SELECT $table.$attribute FROM $table LEFT JOIN system ON ($table.system_id = system.system_id AND 
			$table.timestamp = system.timestamp) WHERE system.system_id = ? " . $limit;
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		if ((strpos($attribute, ",") !== FALSE) or ($attribute == "*")) { 
			$result = $query->result();
			return ($result);
		} else {
			$row = $query->row();
			return ($row->$attribute);
		}
	}

	function count_old_attributes($days = 7) {
		$tables = $this->db->list_tables();
		$string = '';
		$return = array();
		$object = new stdclass();
		foreach ($tables as $table){
			if (((strpos($table, 'sys_hw_') !== FALSE) OR (strpos($table, 'sys_sw_') !== FALSE)) AND (strpos($table, "sys_hw_warranty") === FALSE)) {
				$object->table = '';
				$object->count = '';
				$sql = "SELECT COUNT(*) as count FROM $table LEFT JOIN system ON (system.system_id = $table.system_id) 
				WHERE system.timestamp <> $table.timestamp AND DATE($table.timestamp) < DATE_SUB(curdate(), INTERVAL $days day);";
				$query = $this->db->query($sql);
				$row = $query->row();
				$object->count = $row->count;
				$object->table = $table;
				$return[] = clone $object;
			}
		}
		return($return);
	}

	function count_all_hw_attributes() {
		$tables = $this->db->list_tables();
		$string = '';
		$return = array();
		$object = new stdclass();
		foreach ($tables as $table){
			if (strpos($table, 'sys_hw_') !== FALSE AND strpos($table, "sys_hw_warranty") === FALSE) {
				$object->table = '';
				$object->count = '';
				$sql = "SELECT COUNT(*) as count FROM $table";
				$query = $this->db->query($sql);
				$row = $query->row();
				$object->count = $row->count;
				$object->table = $table;
				$return[] = clone $object;
			}
		}
		return($return);
	}

	function count_all_sw_attributes() {
		$tables = $this->db->list_tables();
		$string = '';
		$return = array();
		$object = new stdclass();
		foreach ($tables as $table){
			if (strpos($table, 'sys_sw_') !== FALSE) {
				$object->table = '';
				$object->count = '';
				$sql = "SELECT COUNT(*) as count FROM $table";
				$query = $this->db->query($sql);
				$row = $query->row();
				$object->count = $row->count;
				$object->table = $table;
				$return[] = clone $object;
			}
		}
		return($return);
	}

	function delete_all_non_current_attributes($days = 365) {
		$tables = $this->db->list_tables();
		$count = 0;
		foreach ($tables as $table){
			if (((strpos($table, 'sys_hw_') !== FALSE) OR (strpos($table, 'sys_sw_') !== FALSE)) AND (strpos($table, "sys_hw_warranty") === FALSE)) {
				$sql = "DELETE $table FROM $table LEFT JOIN system ON (system.system_id = $table.system_id) WHERE system.timestamp <> $table.timestamp AND DATE($table.timestamp) < DATE_SUB(curdate(), INTERVAL $days day);";
				$query = $this->db->query($sql);
				$count = $count + $this->db->affected_rows();
			}
		}
		return($count);
	}

	function delete_table_non_current_attributes($table, $days = 365) {
		if (((strpos($table, 'sys_hw_') !== FALSE) OR (strpos($table, 'sys_sw_') !== FALSE)) AND (strpos($table, "sys_hw_warranty") === FALSE)) {
			$sql = "DELETE $table FROM $table LEFT JOIN system ON (system.system_id = $table.system_id) WHERE system.timestamp <> $table.timestamp AND DATE($table.timestamp) < DATE_SUB(curdate(), INTERVAL $days day);";
			$query = $this->db->query($sql);
			$count = $this->db->affected_rows();
		}
		return($count);
	}
}