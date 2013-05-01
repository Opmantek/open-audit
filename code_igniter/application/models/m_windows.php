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

class M_windows extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_windows($system_id) {
	$sql = "SELECT sys_sw_windows.*
		FROM 
			sys_sw_windows,
			system
		WHERE 
			sys_sw_windows.system_id = system.system_id AND
			sys_sw_windows.timestamp = system.timestamp AND
			system.system_id = ?
		GROUP BY windows_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_windows($input, $details) {
		// need to check for windows changes
		$sql = "SELECT sys_sw_windows.windows_id 
				FROM sys_sw_windows, system 
				WHERE sys_sw_windows.system_id = system.system_id AND 
					system.system_id = ? AND 
					system.man_status = 'production' AND 
					windows_registered_user = ? AND 
					windows_client_site_name = ? AND 
					windows_service_pack = ? AND
					( sys_sw_windows.timestamp = ? OR 
					sys_sw_windows.timestamp = ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->windows_registered_user", 
				"$input->windows_client_site_name", 
				"$input->windows_service_pack", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the windows entry exists - need to update it
			$sql = "UPDATE sys_sw_windows SET
						windows_build_number = ?, 
						windows_user_name = ?, 
						windows_client_site_name = ?, 
						windows_domain_short = ?, 
						windows_domain_controller_address = ?, 
						windows_domain_controller_name = ?, 
						windows_domain_role = ?, 
						windows_part_of_domain = ?, 
						windows_id_number = ?, 
						windows_time_caption = ?, 
						windows_time_daylight = ?, 
						windows_boot_device = ?, 
						windows_country_code = ?, 
						windows_organisation = ?, 
						windows_language = ?, 
						windows_registered_user = ?, 
						windows_service_pack = ?, 
						windows_version = ?, 
						windows_install_directory = ?, 
						windows_active_directory_ou = ?, 
						timestamp = ?
					WHERE windows_id = ?";
			$sql = $this->clean_sql($sql);
			$data = array("$input->windows_build_number", 
					"$input->windows_user_name", 
					"$input->windows_client_site_name", 
					"$input->windows_domain_short", 
					"$input->windows_domain_controller_address", 
					"$input->windows_domain_controller_name", 
					"$input->windows_domain_role", 
					"$input->windows_part_of_domain", 
					"$input->windows_id_number", 
					"$input->windows_time_caption", 
					"$input->windows_time_daylight", 
					"$input->windows_boot_device", 
					"$input->windows_country_code", 
					"$input->windows_organisation", 
					"$input->windows_language", 
					"$input->windows_registered_user", 
					"$input->windows_service_pack", 
					"$input->windows_version", 
					"$input->windows_install_directory",
					"$input->windows_active_directory_ou",
					"$details->timestamp", 
					"$row->windows_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the windows entry does not exist - insert it
			$sql = "INSERT INTO sys_sw_windows ( system_id, 
						windows_build_number, 
						windows_user_name, 
						windows_client_site_name, 
						windows_domain_short,
						windows_domain_controller_address, 
						windows_domain_controller_name, 
						windows_domain_role, 
						windows_part_of_domain, 
						windows_id_number, 
						windows_time_caption, 
						windows_time_daylight, 
						windows_boot_device, 
						windows_country_code, 
						windows_organisation, 
						windows_language, 
						windows_registered_user, 
						windows_service_pack, 
						windows_version, 
						windows_install_directory, 
						windows_active_directory_ou,
						timestamp,
						first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->windows_build_number", 
					"$input->windows_user_name", 
					"$input->windows_client_site_name", 
					"$input->windows_domain_short", 
					"$input->windows_domain_controller_address", 
					"$input->windows_domain_controller_name", 
					"$input->windows_domain_role", 
					"$input->windows_part_of_domain", 
					"$input->windows_id_number", 
					"$input->windows_time_caption", 
					"$input->windows_time_daylight", 
					"$input->windows_boot_device", 
					"$input->windows_country_code", 
					"$input->windows_organisation", 
					"$input->windows_language", 
					"$input->windows_registered_user", 
					"$input->windows_service_pack", 
					"$input->windows_version", 
					"$input->windows_install_directory",
					"$input->windows_active_directory_ou",
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_windows($details) {
		// windows entry no longer detected
		$sql = "SELECT sys_sw_windows.windows_id
				FROM 	sys_sw_windows, system
				WHERE 	sys_sw_windows.system_id = system.system_id AND
						sys_sw_windows.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'windows entry removed - ' . $myrow->windows_id;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_windows', $myrow->windows_id, $alert_details, $details->timestamp);
		}

		// new windows
		$sql = "SELECT  sys_sw_windows.windows_id
				FROM 	sys_sw_windows, system
				WHERE 	sys_sw_windows.system_id = system.system_id AND
						sys_sw_windows.timestamp = sys_sw_windows.first_timestamp AND
						sys_sw_windows.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'windows detected - ' . $myrow->windows_id;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_windows', $myrow->windows_id, $alert_details, $details->timestamp);
		}
	}
}
?>