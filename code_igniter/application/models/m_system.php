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

class M_system extends MY_Model {

	function __construct() {
		parent::__construct();
		$this->load->helper('network');
		$this->load->database();
	}

	function get_access_details($system_id) {
		if ($system_id == '') { return; }
		$sql = "SELECT access_details FROM system WHERE system_id = ? LIMIT 1";
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		if (count($row) > 0) {return($row->access_details);} else {return;}
	}

	function export_nmis($group_id) {
		$sql = "SELECT nmis_name, hostname, fqdn, man_ip_address, nmis_group, nmis_role, access_details 
				FROM system WHERE system_id = ? LIMIT 1";
		$data = array($group_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function create_system_key($details) {
		$details = (object) $details;
		if (!isset($details->system_key) or $details->system_key == '') {
			# we will try to build a key.
			$details->system_key = '';

			# this is a computer from an audit script
			if (isset($details->uuid) and $details->uuid != '' and 
				isset($details->hostname) and $details->hostname != '' and 
				$details->system_key == '') { 
					$details->system_key = $details->uuid . "-" . $details->hostname; 
					$details->system_key_type = 'uuho';
			}

			# this is anything that has a FQDN
			if (isset($details->fqdn) and $details->fqdn != '' and $details->system_key == '') {
				$details->system_key = $details->fqdn;
				$details->system_key_type = 'fqdn';
			}

			# this is anything that has a hostname and domain (which makes a FQDN)
			if ((isset($details->hostname) and $details->hostname != '') and 
				(isset($details->domain) and $details->domain != '') and 
				(!isset($details->system_key)) ){
				$details->system_key = $details->hostname . "." . $details->domain;
				$details->system_key_type = 'hodo';
			}

			# anything with an IP Address
			if (isset($details->man_ip_address) and $details->man_ip_address != '' and $details->system_key == '') {
				$details->system_key = $details->man_ip_address;
				$details->system_key_type = 'ipad';
			}

			# lastly, we might have only a serial number
			# if this is all we have, we also require a type.
			# first check to make sure we have a type or man_type
			if ((!isset($details->type) or $details->type == '') and 
				isset($details->man_type) and $details->man_type != '') { $details->type = $details->man_type; }

			# next check if we also have a serial and set the system_key if so
			if (isset($details->serial) and $details->serial != '') {
				if (isset($details->type) and $details->type != '') {
					if ($details->system_key == '') {
						$details->system_key = $details->type . "_" . $details->serial;
						$details->system_key_type = 'tyse';
					}
				}
			}
			return $details->system_key;
		}
	}

	function find_system($details) {
		# we are searching for a system_id.
		# search order is:
		# system_key, mac_address, man_ip_address, serial, man_serial, hostname
		$details = (object) $details;
		$details->system_id = '';

		# check system_key
		if (isset($details->system_key) and ($details->system_id == '')) {
			$sql = "SELECT system.system_id FROM system WHERE system_key = ? AND system.man_status = 'production' LIMIT 1";
			$data = array("$details->system_key");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) { 
				$details->system_id = $row->system_id; 
				#echo "HIT on system_key. " . $details->system_id . "<br />";
			} 
		}

		# check if the previous hostname had 13 characters and the submittied hostname has > 13
		if ((strlen($details->hostname) > 15) and (isset($details->uuid))) {
			$temp_uuid = $details->uuid . "-" . substr($details->hostname, 0, 15);
			$sql = "SELECT system.system_id FROM system WHERE system_key = ? AND system.man_status = 'production' LIMIT 1";
			$data = array("$temp_uuid");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) { 
				$details->system_id = $row->system_id; 
				#echo "HIT on truncated system_key. " . $details->system_id . "<br />";
			} 
		}

		if (isset($details->fqdn) and $details->fqdn != '' and $details->system_id == '') {
			$sql = "SELECT system.system_id FROM system WHERE system_key = ? AND system.man_status = 'production' LIMIT 1";
			$data = array("$details->fqdn");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) { 
				$details->system_id = $row->system_id; 
				#echo "HIT on fqdn. " . $details->system_id . "<br />";
			} 
		}

		if (isset($details->hostname) and $details->hostname != '' and isset($details->domain) and $details->domain != '' and $details->system_id == '') {
			$details->fqdn = $details->hostname . "." . $details->domain;
			$sql = "SELECT system.system_id FROM system WHERE system_key = ? AND system.man_status = 'production' LIMIT 1";
			$data = array("$details->fqdn");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) { 
				$details->system_id = $row->system_id; 
				#echo "HIT on host + domain. " . $details->system_id . "<br />";
			} 			
		}


		# todo - fix this by making sure (snmp in particular) calls with the proper variable name
		if (!isset($details->mac_address) and (isset($details->mac))) {$details->mac_address = $details->mac;}

		# check MAC Address
		if (isset($details->mac_address) and $details->mac_address > '' and ($details->system_id == '')) {
			# check the sys_hw_network_card_ip table
			$sql = "SELECT system.system_id FROM system 
					LEFT JOIN sys_hw_network_card_ip ON (system.system_id = sys_hw_network_card_ip.system_id AND system.timestamp = sys_hw_network_card_ip.timestamp) 
					WHERE sys_hw_network_card_ip.net_mac_address = ? 
					AND system.man_status = 'production' LIMIT 1";
			$sql = $this->clean_sql($sql);
			$data = array("$details->mac_address");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0 ) { 
				$details->system_id = $row->system_id; 
				#echo "Hit on MAC Address.";
			}
		}

		# check IP Address in system, then sys_hw_network_card_ip tables
		if (isset($details->man_ip_address) and 
				$details->man_ip_address > '' and 
				$details->man_ip_address != '0.0.0.0' and 
				$details->man_ip_address != '000.000.000.000' and 
				$details->system_id == '') {

			$sql = "SELECT system.system_id FROM system WHERE system_key = ? and system.man_status = 'production'";
			$data = array(ip_address_to_db($details->man_ip_address));
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) {  
				$details->system_id = $row->system_id; 
			}


			if ($details->system_id == '') {
				$sql = "SELECT system.system_id FROM system WHERE man_ip_address = ? and system.man_status = 'production'";
				$data = array(ip_address_to_db($details->man_ip_address));
				$query = $this->db->query($sql, $data);
				$row = $query->row();
				if (count($row) > 0) {  
					$details->system_id = $row->system_id; 
				}
			}

			if ($details->system_id == '') {
				# we didn't get a hit from the system table - try the sys_hw_network_card_ip table
				$sql = "SELECT system.system_id FROM system 
						LEFT JOIN sys_hw_network_card_ip ON (system.system_id = sys_hw_network_card_ip.system_id AND system.timestamp = sys_hw_network_card_ip.timestamp) 
						WHERE (sys_hw_network_card_ip.ip_address_v4 = ? OR sys_hw_network_card_ip.ip_address_v6 = ?)
						AND system.man_status = 'production' LIMIT 1";
				$sql = $this->clean_sql($sql);
				$data = array(ip_address_to_db($details->man_ip_address), "$details->man_ip_address");
				$query = $this->db->query($sql, $data);
				$row = $query->row();
				if (count($row) > 0) { 
					$details->system_id = $row->system_id; 
					#echo "Hit on IP2.";
				}
			}
		}

		# check serial
		# in this case, we also need to know a TYPE
		if ((isset($details->serial) and ($details->serial > '') and ($details->system_id == ''))) {
			if ((!isset($details->type) or $details->type == '') and 
				isset($details->man_type) and $details->man_type != '') { 
				$details->type = $details->man_type; }
			if ($details->type != '' or $details->man_type != '') {
				$sql = "SELECT system.system_id FROM system WHERE system.system_key = ? AND system.man_status = 'production'";
				$data = array("$details->type" . "_" . "$details->serial");
				$query = $this->db->query($sql, $data);
				$row = $query->row();
				if (count($row) > 0) { 
					$details->system_id = $row->system_id;
				}

				if ($details->system_key == '') {
					$sql = "SELECT system.system_id FROM system WHERE system.serial = ? AND (system.man_type = ? OR system.type = ?) AND system.man_status = 'production'";
					$data = array("$details->serial", "$details->man_type", "$details->type");
					$query = $this->db->query($sql, $data);
					$row = $query->row();
					if (count($row) > 0) { 
						$details->system_id = $row->system_id;
					}
				}
			}
		}

		# check man_serial
		if ((isset($details->man_serial) and ($details->man_serial > '') and ($details->system_id == ''))) {
			if (isset($details->man_type) and $details->man_type > '') {$man_type = $details->man_type; }
			if (isset($details->type) and $details->type > '') {$type = $details->type; }
			if ($type > '' or $man_type> '') {
				$sql = "SELECT system.system_id FROM system WHERE system.man_serial = ? AND (system.man_type = ? OR system.type = ?) AND system.man_status = 'production'";
				$data = array("$details->man_serial", "$details->man_type", "$details->type");
				$query = $this->db->query($sql, $data);
				$row = $query->row();
				if (count($row) > 0) { 
					$details->system_id = $row->system_id; 
					#echo "Hit on man_serial.";
				}
			}
		}

		#check hostname
		if (isset($details->hostname) and ($details->system_id == '') ) {
			$i = explode(".", $details->hostname);
			$hostname = $i[0];
			$sql = "SELECT system.system_id FROM system WHERE hostname = ? AND system.man_status = 'production'";
			$data = array("$details->hostname");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) { 
				$details->system_id = $row->system_id; 
				#echo "Hit on hostname.";
			}
		}
		#echo "Returning SystemID: " . $details->system_id . "<br />\n";
		return $details->system_id;

	}

	function process_system_from_ad($details) {
		// only process items with a OS
		if ($details->os_family == '') { return; }
		$sql = "SELECT system_id FROM system WHERE (hostname = ? or hostname = ? ) AND man_status = 'production' LIMIT 1";
		$data = array("$details->hostname", "$details->man_ip_address");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		$system_id = '0';
		if (!$row) {
			$system_id = '0';
		} else {
			$system_id = $row->system_id;
		}
		# echo $details->hostname . " - ";
		if ($system_id > '0') {
			// ok, we have a hit
			$sql = "SELECT last_seen FROM system WHERE system_id = '" . $system_id . "'";
			$query = $this->db->query($sql);
			$row = $query->row();
			$last_seen = $row->last_seen;
			if ($last_seen > $details->last_seen) {
				// we have a later date for this system - don't update.
			} else {
				// the ad audit is later - update
				$sql = "UPDATE system SET last_seen = '" . $details->last_seen . "', last_seen_by = 'active directory' WHERE system_id = '" . $system_id . "'";
				$query = $this->db->query($sql, $data);
			}
			# update the various settings that we KNOW because of an AD scan.
			$sql = "UPDATE system SET type = 'computer', man_type = 'computer', os_group = ?, man_os_group = ?, os_family = ?, man_os_family = ?, os_name = ?, man_os_name = ?, icon = ?, man_icon = ?, domain = ?, hostname = ? WHERE system_id = ?";
			$data = array ("$details->os_group", "$details->os_group", "$details->os_family", "$details->os_family", "$details->os_name", "$details->os_name", "$details->icon", "$details->icon", "$details->domain", "$details->hostname", "$system_id");
			$query = $this->db->query($sql, $data);
			#echo $this->db->last_query();
		} else {
			// this is a new system
			$timestamp = date('Y-m-d H:i:s');
			$sql = "INSERT INTO system (hostname, man_ip_address, domain, type, man_type, icon, man_icon, os_group, os_family, os_name, man_os_group, man_os_family, man_os_name, last_seen, last_seen_by, timestamp, first_timestamp) VALUES (?, ?, ?, 'computer', 'computer', ?, ?, ?, ?, ?, ?, ?, ?, ?, 'active directory', ?, ?)";
			$data = array("$details->hostname", $this->ip_address_to_db($details->man_ip_address), "$details->domain", "$details->icon", "$details->icon", "$details->os_group", "$details->os_family", "$details->os_name", "$details->os_group", "$details->os_family", "$details->os_name", "$details->last_seen", $timestamp, "$details->last_seen" );
			$query = $this->db->query($sql, $data);
			$system_id = $this->db->insert_id();
			$sql = "INSERT INTO sys_sw_windows (system_id, windows_active_directory_ou, timestamp, first_timestamp) values (?, ?, ?, ?)";
			$data = array("$system_id", "$details->windows_active_directory_ou", $timestamp, $timestamp );
			$query = $this->db->query($sql, $data);
		}
		return($system_id);
	}

	function get_system_access_level($system_id, $user_id = '0') {
		$sql = "SELECT 
				group_user_access_level
			FROM 
				oa_group_user, 
				oa_group,
				oa_user,
				oa_group_sys,
				system
			WHERE 
				oa_user.user_id = ? AND
				oa_user.user_id = oa_group_user.user_id AND
				oa_group_user.group_id = oa_group.group_id AND
				oa_group.group_id = oa_group_sys.group_id AND
				oa_group_sys.system_id = ?
			ORDER BY 
				group_user_access_level DESC
			LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array($user_id, $system_id);
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		return ($row->group_user_access_level);
	}

	function update_system_man($system_id, $field_name, $field_data) {
		if ($field_name == 'man_ip_address'){
			$field_data = $this->ip_address_to_db($field_data);
		}
		$sql = "UPDATE system SET $field_name = ? WHERE system_id = ?";
		$data = array("$field_data", "$system_id");
		$query = $this->db->query($sql, $data);
	}
	
	function check_man_ip_address($system_id) {
		$sql = "SELECT system.man_ip_address FROM system WHERE system.system_id = ? LIMIT 1";
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		return ($row->man_ip_address);
	}

	function get_system_type($system_id) {
		$sql = "SELECT system.man_type FROM system WHERE system.system_id = ? LIMIT 1";
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		return ($row->man_type);
	}

	function get_system_hostname($system_id) {
		$sql = "SELECT 
				system.hostname 
			FROM 
				system 
			WHERE 
				(system.system_id = ? OR
				system.system_key = ? OR
				system.hostname = ? )
			ORDER BY 
				system.timestamp
			LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array($system_id, $system_id, $system_id);
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		return ($row->hostname);
	}

	function get_system_popup($system_id) {
		$sql = "SELECT 		system_id, man_status, man_manufacturer, man_form_factor, man_model, man_picture, man_serial, man_form_factor
				FROM 		system
				WHERE 		system.system_id = ? 
				ORDER BY 	system.timestamp
				LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}
	
	function get_system_groups($system_id, $user_id) {
		$sql = "SELECT 
				oa_group.group_id, 
				oa_group.group_name 
			FROM 
				oa_group,
				oa_group_sys, 
				oa_group_user, 
				system
			WHERE 
				system.system_id = ? AND
				system.system_id = oa_group_sys.system_id AND
				oa_group_sys.group_id = oa_group.group_id AND
				oa_group_user.group_id = oa_group.group_id AND
				oa_group_user.user_id = ? AND
				oa_group_user.group_user_access_level > '0'
			ORDER BY group_name";
		$sql = $this->clean_sql($sql);
		$data = array($system_id, $user_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function get_system_id_from_hostname($hostname) {
		$sql = "SELECT system.system_id FROM system WHERE system.hostname = ? AND system.man_status = 'production' ORDER BY system_id LIMIT 1";
		$data = array("$hostname");
		$query = $this->db->query($sql, $data);
		$row = $query->row(); 
		if (!$row) {
			return(FALSE);
		} else {
			return($row->system_id);
		}
	}

	function get_system_id($system_id) {
		$sql = "SELECT 
				system.system_id 
			FROM system 
			WHERE 	
				(system.system_id = ? OR
				system.system_key = ? OR
				system.hostname = ? )
			ORDER BY 
				system.man_status, 
				system.timestamp, 
				system.system_id 
			LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array($system_id, $system_id, $system_id);
		$query = $this->db->query($sql, $data);
		$row = $query->row(); 
		if (!$row) {
			$systemid = '0';
		} else {
			$systemid = $row->system_id;
		}
		return ($systemid);
	}

	function get_system_summary($system_id) {
		$sql = "SELECT * FROM system WHERE system.system_id = ? LIMIT 1";
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_sys($input) {
		$details = (object) $input;
#		$details = new stdClass();
		$details->system_id = '';
		# shouldn't need the below, but the transition from beta 9.2 onwards changes 
		# the TYPE attribute from system to computer.
		# if we had old audit scripts running, they would submit using type='system'
		if ($input->system_type == 'system') {$input->system_type = 'computer'; }

		$details->timestamp = strval($input->system_timestamp);
		$details->original_timestamp = '';
		$details->type = $input->system_type;
		$details->system_id = '';
		$system_uuid = $input->system_uuid;
		$system_hostname = $input->system_hostname;
		$system_domain = $input->system_domain;
		$system_key = $system_uuid . '-' . $system_hostname;

		if ((isset($input->hostname) and $input->hostname != '') and 
			(isset($input->domain) and $input->domain != '') and 
			(!isset($input->fqdn) or $input->fqdn == '') ) {
			$input->fqdn = $input->hostname . "." . $input->domain; 
		}

		if (!isset($input->fqdn)) {$input->fqdn = '';}
		#if ($input->fqdn == '') {unset($input->fqdn);}

		if (isset($input->man_org_id)) {
			$man_org_id = $input->man_org_id;
		} else {
			$man_org_id = '';
		}

		# check for an existing audited system
		$details->system_id = $this->find_system($input);

		if ($details->system_id > '') {
			// we update the existing entry
			if ($man_org_id > '') {
				# if we have been given org_id from the script, overwrite whatever is in the DB
				$sql = " UPDATE system SET fqdn = ?, hostname = ?, domain = ?, description = ?, type = 'computer', icon = ?, man_icon = ?, os_group = ?, man_os_group = ?, os_family = ?, man_os_family = ?, os_name = ?, man_os_name = ?, os_version = ?, serial = ?, model = ?, manufacturer = ?, uptime = ?, form_factor = ?, pc_os_bit = ?, pc_memory = ?, pc_num_processor = ?, pc_date_os_installation = ?, man_org_id = ?, last_seen = ?, last_seen_by = 'audit', timestamp = ? WHERE system.system_id = ?";
				$data = array("$input->fqdn", "$input->system_hostname", "$input->system_domain", "$input->system_description", "$input->system_os_icon", "$input->system_os_icon", "$input->system_os_group", "$input->system_os_group", "$input->system_os_family", "$input->system_os_family", "$input->system_os_name", "$input->system_os_name", "$input->system_os_version", "$input->system_serial", "$input->system_model", "$input->system_manufacturer", "$input->system_uptime", "$input->system_form_factor", "$input->system_pc_os_bit", "$input->system_pc_memory", "$input->system_pc_num_processor", "$input->system_pc_date_os_installation", "$man_org_id", "$input->system_timestamp", "$input->system_timestamp", "$details->system_id");
			} else {
				# we haven't been given org_id, but we can't just run an update because it will replace whatever
				# is in the DB with an empty value. This value may have been set via the web interface.
				$sql = " UPDATE system SET fqdn = ?, hostname = ?, domain = ?, description = ?, type = 'computer', icon = ?, man_icon = ?, os_group = ?, man_os_group = ?, os_family = ?, man_os_family = ?, os_name = ?, man_os_name = ?, os_version = ?, serial = ?, model = ?, manufacturer = ?, uptime = ?, form_factor = ?, pc_os_bit = ?, pc_memory = ?, pc_num_processor = ?, pc_date_os_installation = ?,                 last_seen = ?, last_seen_by = 'audit', timestamp = ? WHERE system.system_id = ?";
				$data = array("$input->fqdn", "$input->system_hostname", "$input->system_domain", "$input->system_description", "$input->system_os_icon", "$input->system_os_icon", "$input->system_os_group", "$input->system_os_group", "$input->system_os_family", "$input->system_os_family", "$input->system_os_name", "$input->system_os_name", "$input->system_os_version", "$input->system_serial", "$input->system_model", "$input->system_manufacturer", "$input->system_uptime", "$input->system_form_factor", "$input->system_pc_os_bit", "$input->system_pc_memory", "$input->system_pc_num_processor", "$input->system_pc_date_os_installation",                 "$input->system_timestamp", "$input->system_timestamp", "$details->system_id");
			}
			$sql = $this->clean_sql($sql);
			$query = $this->db->query($sql, $data);
			echo "SystemID (updated): <a href='" . base_url() . "index.php/main/system_display/" . $details->system_id . "'>" . $details->system_id . "</a>.<br />\n";
		} else {
			// we insert a new entry
			$sql = "INSERT INTO system SET system_key = ?, fqdn = ?, uuid = ?, hostname = ?, domain = ?, description = ?, man_description = ?, type = ?, icon = ?, os_group = ?, os_family = ?, os_name = ?, os_version = ?, serial = ?, model = ?, manufacturer = ?, uptime = ?, form_factor = ?, man_form_factor = ?, pc_os_bit = ?, pc_memory = ?, man_status = 'production', man_manufacturer = ?, man_model = ?, man_serial = ?, man_icon = ?, man_os_group = ?, man_os_family = ?, man_os_name = ?, man_type = 'computer', pc_num_processor = ?, pc_date_os_installation = ?, man_org_id = ?, last_seen = ?, last_seen_by = 'audit', first_timestamp = ?, timestamp = ?";
			$data = array($system_key, "$input->system_uuid", "$input->fqdn", "$input->system_hostname", "$input->system_domain", "$input->system_description", "$input->system_description", "$input->system_type", "$input->system_os_icon", "$input->system_os_group", "$input->system_os_family", "$input->system_os_name", "$input->system_os_version", "$input->system_serial", "$input->system_model", "$input->system_manufacturer", "$input->system_uptime", "$input->system_form_factor", "$input->system_form_factor", "$input->system_pc_os_bit", "$input->system_pc_memory", "$input->system_manufacturer", "$input->system_model", "$input->system_serial", "$input->system_os_icon", "$input->system_os_group", "$input->system_os_family", "$input->system_os_name", "$input->system_pc_num_processor", "$input->system_pc_date_os_installation", "$man_org_id", "$input->system_timestamp", "$input->system_timestamp", "$input->system_timestamp");
			$sql = $this->clean_sql($sql);
			$query = $this->db->query($sql, $data);
			$details->system_id = $this->db->insert_id();
			echo "SystemID (new): <a href='" . base_url() . "index.php/main/system_display/" . $details->system_id . "'>" . $details->system_id . "</a>.<br />\n";
		} 
		return $details;
	} // end of function


	function get_columns() {
		$sql = "SHOW COLUMNS FROM system";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}

	function get_non_production_systems() {
		$sql = "SELECT system_id, hostname, timestamp, oa_org.org_name FROM system LEFT JOIN oa_org ON system.man_org_id = oa_org.org_id WHERE man_status = 'deleted'";
		$query = $this->db->query($sql);
		$result = $query->result();
		$i = 0;
		foreach ($result as $system) {
			$sql = "SELECT count(*) AS count FROM system WHERE hostname = ?";
			$data = array($system->hostname);
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			$result2 = $query->result();
			$result[$i]->count = $row->count;
			$i++;
		}
		return ($result);
	}

	function delete_non_production_systems() {
		$sql = "DELETE FROM system WHERE man_status = 'deleted'";
		$query = $this->db->query($sql);
		$result = $query->result();	
	}

	function delete_linked_system($system_id) {
		$sql = "DELETE FROM system WHERE linked_sys = ?";
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
	}

	function insert_system($details) {
		# this is a NEW system
		# we insert whatever we have from the $details object
		# we add additional data based on what we can glean from $details

		# nasty hack because when a simplexmlobject is sent (ie, from audit_windows.vbs)
		# the foreach iterators below don't work.
		# if we cast it to an "object", it stays as a SimpleXMLObject and doesn't work
		# because our XML is quite simple, we can cast it to an array and back to a 'normal'
		# object and the foreach below works.
		$details = (object) $details;
		$details = (array) $details;
		$details = (object) $details;
		# this is an insert - we do NOT want a system_id
		unset($details->system_id);

		# ensure we have something not null for all the below
		if (!isset($details->timestamp) or $details->timestamp == '') { $details->timestamp = date('Y-m-d H:i:s'); }
		$details->first_timestamp = $details->timestamp;

		if (!isset($details->description)) { $details->description = ''; }
		if (!isset($details->domain)) { $details->domain = ''; }
		if (!isset($details->form_factor)) { $details->form_factor = ''; }
		if (!isset($details->fqdn)) { $details->fqdn = ''; }
		if (!isset($details->hostname)) { $details->hostname = ''; }
		if (!isset($details->last_seen)) { $details->last_seen = $details->timestamp; }
		if (!isset($details->manufacturer)) { $details->manufacturer = ''; }
		if (!isset($details->model)) { $details->model = ''; }
		if (!isset($details->os_family)) { $details->os_family = ''; }
		if (!isset($details->os_group)) { $details->os_group = ''; }
		if (!isset($details->os_name)) { $details->os_name = ''; }
		if (!isset($details->os_version)) { $details->os_version = ''; }
		if (!isset($details->serial)) { $details->serial = ''; }
		if (!isset($details->status)) { $details->status = 'production'; }
		if (!isset($details->type) or $details->type == '') { $details->type = 'unknown'; }
		if (!isset($details->uuid)) { $details->uuid = ''; }
		if (!isset($details->icon) or $details->icon == '') { $details->icon = str_replace(" ", "_", $details->type); }
		$details->icon = strtolower($details->icon);

		# account for any "man_" items
		if (!isset($details->man_description)) { $details->man_description = $details->description; }
		if (!isset($details->man_domain)) { $details->man_domain = $details->domain; }
		if (!isset($details->man_environment)) { $details->man_environment = 'production'; }
		if (!isset($details->man_form_factor)) { $details->man_form_factor = $details->form_factor; }
		if (!isset($details->man_icon)) { $details->man_icon = $details->icon; }
		if (!isset($details->man_manufacturer)) { $details->man_manufacturer = $details->manufacturer; }
		if (!isset($details->man_ip_address)) { $details->man_ip_address = ''; }
		if (!isset($details->man_model)) { $details->man_model = $details->model; }
		if (!isset($details->man_os_family)) { $details->man_os_family = $details->os_family; }
		if (!isset($details->man_os_group)) { $details->man_os_group = $details->os_group; }
		if (!isset($details->man_os_name)) { $details->man_os_name = $details->os_name; }
		if (!isset($details->man_serial)) { $details->man_serial = $details->serial; }
		if (!isset($details->man_status)) { $details->man_status = 'production'; }
		if (!isset($details->man_serial)) { $details->man_serial = $details->serial; }
		if (!isset($details->man_type)) { $details->man_type = $details->type; }

		if ((strripos($details->manufacturer, "vmware") !== false) or 
			(strripos($details->manufacturer, "parallels") !== false) or 
			(strripos($details->manufacturer, "virtual") !== false)) {
			$details->form_factor = 'Virtual';
			$details->man_form_factor = 'Virtual';
		}

		$details->man_ip_address = ip_address_to_db($details->man_ip_address);

		if ($details->hostname != '' and $details->domain != '' and $details->fqdn == '') {
			$details->fqdn = $details->hostname . "." . $details->domain;
		}

		$sql = "SHOW COLUMNS FROM system";
		$query = $this->db->query($sql);
		$columns = $query->result();

		$sql = "INSERT INTO system ( ";
		foreach ($details as $key => $value) {
			if ($key > '') {
				# need to iterate through available columns and only insert where $key == valid column name
				foreach ($columns as $column) {
					if ($key == $column->Field) { $sql .= $key . ", "; }
				}
			}
		}
		$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
		$sql .= " ) VALUES ( ";
		foreach ($details as $key => $value) {
			if ($key > '') {
				foreach ($columns as $column) {
					if ($key == $column->Field) { $sql .= "'" . mysql_real_escape_string(str_replace('"', '', $value)) . "', "; }
				}
			}
		}
		$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
		$sql .= ")";

		$query = $this->db->query($sql);
		$details->system_id = $this->db->insert_id();

		# insert the network card details of we have them
		if ((isset($details->mac_address) and $details->mac_address != '') and 
			(isset($details->man_ip_address) and $details->man_ip_address != '') and 
			(isset($details->subnet) and $details->subnet != '') and 
			(isset($details->system_id) and $details->system_id != '')) {
			$sql = "INSERT INTO sys_hw_network_card_ip (net_mac_address, 
				system_id, ip_address_v4, ip_subnet, ip_address_version, 
				timestamp, first_timestamp) 
				VALUES(?, ?, ?, ?, '4', ?, ?)";
			$sql = $this->clean_sql($sql);
			$data = array("$details->mac_address", 
				"$details->system_id", 
				"$details->man_ip_address", 
				"$details->subnet", 
				"$details->timestamp", 
				"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
		return $details->system_id;
	}

	function update_system($details) {
		if (!isset($details->system_id) or $details->system_id == '') {
			# this is an update - we need a system_id
			return;
		}

		# nasty hack because when a simplexmlobject is sent (ie, from audit_windows.vbs)
		# the foreach iterators below don't work.
		# if we cast it to an "object", it stays as a SimpleXMLObject and doesn't work
		# because our XML is quite simple, we can cast it to an array and back to a 'normal'
		# object and the foreach below works.
		$details = (object) $details;
		$details = (array) $details;
		$details = (object) $details;

		# if we're updating and we don't have a real hostname, only the ip address
		# stored in the hostname field, we shouldn't update it
		if (strpos($details->hostname, ".")) {
			$sql = "SELECT hostname FROM system WHERE system_id = ?";
			$data = array("$details->system_id");
			$query = $this->db->query($sql, $data);
			$result = $query->row();
			$db_hostname = $result->hostname;
			if (!strpos($db_hostname, ".")) {
				$details->hostname = $db_hostname;
			}
		}

		# we have to try to get the 'best' system key
		# the key in the db may be better than what we have
		if (isset($details->system_key)) {
			$sql = "SELECT system_key, system_key_type FROM system WHERE system_id = ?";
			$data = array("$details->system_id");
			$query = $this->db->query($sql, $data);
			$result = $query->row();
			$db_system_key = $result->system_key;
			$db_system_key_type = $result->system_key_type;

			if ($details->system_key_type == 'uuho') {
				# we already have a system key based on UUID . "_" . hostname
				#echo "1\n";
			} else {
				# we need to check the existing key
				if ($db_system_key_type == 'uuho') {
					# the system key in the database is based on UUID . "_" . hostname
					$details->system_key = $db_system_key;
					$details->system_key_type = 'uuho';
					#echo "2\n";

				} elseif ($db_system_key == 'fqdn') {
					# the system key in the database is based on the fqdn
					$details->system_key = $db_system_key;
					$details->system_key_type = 'fqdn';
					#echo "3\n";

				} elseif ($db_system_key_type == 'hodo') {
					# the system key in the database is based on the fqdn
					$details->system_key = $db_system_key;
					$details->system_key_type = 'hodo';
					#echo "4\n";

				} elseif ($db_system_key_type == 'ipad') {
					# the system key in the database is based on the ip address
					$details->system_key = $db_system_key;
					$details->system_key_type = 'ipad';
					#echo "5\n";

				} elseif ($db_system_key_type = 'tyse') {
					# the system key in the database is based on the type and serial
					$details->system_key = $db_system_key;
					$details->system_key_type = 'tyse';
					#echo "6\n";
				}
			}
		}

		# if submitting an nmap or snmp scan, do not update the type or man_type
		if (isset($details->last_seen_by) and $details->last_seen_by == 'nmap') {
			unset ($details->type);
			unset ($details->man_type);
		}	

		# we check a few man_ items when we are submitting an audit script result
		# if they are blank (previously submitted info is incomplete) we over write them
		# we would not normally over write man_ items
		if (isset($details->last_seen_by) and $details->last_seen_by == 'audit') {
			$sql = "SELECT * FROM system WHERE system_id = ? LIMIT 1";
			$data = array("$details->system_id");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if ($row->man_manufacturer == '') {$details->man_manufacturer = $details->manufacturer;}
			if ($row->man_model == '') {$details->man_model = $details->model;}
			if ($row->man_serial == '') {$details->man_serial = $details->serial;}
			if ($row->man_description == '') {$details->man_description = $details->description;}
			if ($row->man_form_factor == '') {$details->man_form_factor = $details->form_factor;}
			if ($row->man_os_group == '') {$details->man_os_group = $details->os_group;}
			if ($row->man_os_family == '') {$details->man_os_family = $details->os_family;}
			if ($row->man_os_name == '') {$details->man_os_name = $details->os_name;}
			if ((strripos($details->manufacturer, "vmware") !== false) or 
				(strripos($details->manufacturer, "parallels") !== false) or 
				(strripos($details->manufacturer, "virtual") !== false)) {
				$details->form_factor = 'Virtual';
				$details->man_form_factor = 'Virtual';
			}
		}

		if (isset($details->last_seen_by) and $details->last_seen_by == 'snmp') {
			$details->icon = $details->type;
			$details->man_icon = $details->type;
		}	

		# only update system.timestamp if we have an audit result - not for nmap, snmp, etc
		if (isset($details->last_seen_by) and $details->last_seen_by == 'audit') {
			# leave it alone
		} else {
			unset ($details->timestamp);
			unset ($details->first_timestamp);
		}

		if (isset($details->man_ip_address)) {
			$details->man_ip_address = ip_address_to_db($details->man_ip_address);
		}

		$sql = "SHOW COLUMNS FROM system";
		$query = $this->db->query($sql);
		$columns = $query->result();
		$sql = "UPDATE system SET ";
		foreach ($details as $key=>$value) {
			if (($key != '') and ($value != '')) {
				# need to iterate through available columns and only insert where $key == valid column name
				foreach ($columns as $column) {
					if ($key == $column->Field) { 
						$sql .= $key . "= '" . str_replace("'", "\'", $value) . "', "; 
					}
				}
			}
		}
		$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
		$sql .= " WHERE system_id = '" . $details->system_id . "'";
		$query = $this->db->query($sql);
	}
}
?>
