<?php
/**
 * @package Open-AudIT
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
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

		# check if the previous hostname had 15 characters and the submittied hostname has > 15
		if (isset($details->hostname) and (strlen($details->hostname) > 15) and (isset($details->uuid))) {
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

		# use the full hostname as provided
		if (isset($details->hostname) and isset($details->uuid)) {
			$temp_uuid = $details->uuid . "-" . $details->hostname;
			$sql = "SELECT system.system_id FROM system WHERE system_key = ? AND system.man_status = 'production' LIMIT 1";
			$data = array("$temp_uuid");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) { 
				$details->system_id = $row->system_id; 
				#echo "HIT on full hostname + uuid system_key. " . $details->system_id . "<br />";
			} 
		}

		# check for a FQDN
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

		# check for a hostname + domain, making a FQDN
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


		# TODO: fix this by making sure (snmp in particular) calls with the proper variable name
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
			if (!isset($man_type)) { $man_type = ''; }
			if (isset($details->type) and $details->type > '') {$type = $details->type; }
			if ($type > '' or $man_type > '') {
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

		$sql = "SELECT config_value FROM oa_config WHERE config_name = 'name_match'";
		$query = $this->db->query($sql);
		$row = $query->row();
		$name_match = @$row->config_value;
		if (!isset($name_match) or is_null($name_match)) {
			$name_match = 'n';
		}

		if (isset($name_match) and $name_match == "y") {
			# check hostname
			if (isset($details->hostname) and ($details->system_id == '') ) {
				$i = explode(".", $details->hostname);
				$hostname = $i[0];
				$sql = "SELECT system.system_id FROM system WHERE hostname = ? AND system.man_status = 'production'";
				$data = array("$hostname");
				$query = $this->db->query($sql, $data);
				$row = $query->row();
				if (count($row) > 0) { 
					$details->system_id = $row->system_id; 
					#echo "Hit on hostname.";
				}
			}

			# check short hostname in $details
			if (isset($details->hostname) and ($details->system_id == '') ) {
				if (isset($details->hostname_length) and $details->hostname_length == 'short') {
					# we grabbed the hostname from SNMP.
					# SNMP hostnames on Windows are truncated to 15 characters
					$i = explode(".", $details->hostname);
					$hostname = $i[0];
					if (strlen($hostname) == 15) {
						# We do have a 15 character hostname - check if this exists in the DB
						$sql = "SELECT system.system_id FROM system WHERE hostname LIKE '" . $hostname . "%' AND system.man_status = 'production'";
						$query = $this->db->query($sql);
						$row = $query->row();
						if (count($row) > 0) { 
							$details->system_id = $row->system_id; 
							#echo "Hit on short hostname.";
						}
					}
				}
			}

			# check short hostname in database
			if (isset($details->hostname) and strlen($details->hostname) > 15 and $details->system_id == '') {
				$i = explode(".", $details->hostname);
				$hostname = $i[0];
				$hostname = substr($hostname, 0, 15);
				$sql = "SELECT system.system_id FROM system WHERE hostname = ? AND system.man_status = 'production'";
				$data = array("$hostname");
				$query = $this->db->query($sql, $data);
				$row = $query->row();
				if (count($row) > 0) { 
					$details->system_id = $row->system_id; 
					#echo "Hit on hostname.";
				}
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

	function search_device($search) {
		$search_ip = $search;
		# remove a trailing "." if present because the ip padding will insert "000" and not match any ip
		if (substr($search_ip, -1) == ".") {
			$search_ip = substr($search_ip, 0, -1);
		}
		$myip = explode(".",$search_ip);
		foreach ($myip as $index => $data) {
			$myip[$index] = mb_substr("000" . $myip[$index], -3);
		}
		$search_ip = implode(".", $myip);
		$sql = "SELECT 
				system.system_id, 
				system.hostname, 
				system.man_ip_address, 
				system.man_type, 
				system.man_icon 
			FROM 
				system LEFT JOIN sys_hw_network_card_ip ON (system.system_id = sys_hw_network_card_ip.system_id AND system.timestamp = sys_hw_network_card_ip.timestamp) 
			WHERE 
				( system.man_ip_address LIKE '%" . $search_ip . "%' OR
				system.hostname LIKE '%" . $search . "%' OR 
				sys_hw_network_card_ip.ip_address_v4 LIKE '%" . $search_ip . "%' OR 
				sys_hw_network_card_ip.ip_address_v6 LIKE '%" . $search . "%' ) AND 
				system.man_status = 'production' 
			GROUP BY 
				system.system_id 
			ORDER BY 
				system.hostname";
		$sql = $this->clean_sql($sql);
		$query = $this->db->query($sql);
		$result = $query->result();
		for ($i=0; $i<count($result); $i++) {
			$result[$i]->man_ip_address = $this->ip_address_from_db($result[$i]->man_ip_address);
		}
		#echo "<pre>\n";
		#print_r($result);
		#echo "</pre>\n";
		#exit();
		return ($result);
	}

	function search_device_columns() {
		$i = new stdclass();
		$result = array();
		$i->column_order = '3';
		$i->column_name = 'Icon';
		$i->column_variable = 'man_icon';
		$i->column_type = "image";
		$i->column_align = "center";
		$i->column_secondary = "man_type";
		$i->column_ternary = "";
		$i->column_link = "";
		$result[0] = $i;
		$i = new stdclass();
		$i->column_order = '1';
		$i->column_name = 'Type';
		$i->column_variable = 'man_type';
		$i->column_type = "text";
		$i->column_align = "left";
		$i->column_secondary = "";
		$i->column_ternary = "";
		$i->column_link = "";
		$result[1] = $i;
		$i = new stdclass();
		$i->column_order = '0';
		$i->column_name = 'Name';
		$i->column_variable = 'hostname';
		$i->column_type = "link";
		$i->column_align = "left";
		$i->column_secondary = "system_id";
		$i->column_ternary = "";
		$i->column_link = $this->data['config']->oae_url . "/system_summary/";
		$result[2] = $i;
		$i = new stdclass();
		$i->column_order = '1';
		$i->column_name = 'IP Address';
		$i->column_variable = 'man_ip_address';
		$i->column_type = "text";
		$i->column_align = "left";
		$i->column_secondary = "";
		$i->column_ternary = "";
		$i->column_link = "";
		$result[3] = $i;
		$i = new stdclass();
		return ($result);
	}

	function get_system_popup($system_id) {
		$sql = "SELECT 		system_id, man_status, man_manufacturer, man_form_factor, 
							man_model, man_picture, man_serial, man_form_factor, man_type 
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

	function system_summary($system_id) {
		$sql = "SELECT 		system.system_id, hostname, man_ip_address, man_environment, 
							man_status, man_description, man_type, 
							man_class, man_os_group, man_os_family, man_os_name, 
							man_manufacturer, man_model, man_serial, 
							man_form_factor, 
							location_name, date(system.timestamp) as 'timestamp'   
				FROM 		system
				LEFT JOIN   oa_location on system.man_location_id = oa_location.location_id 
				WHERE 		system.system_id = ? ";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		$result[0]->{'IP Address'} = $this->ip_address_from_db($result[0]->{'man_ip_address'});
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

	function count_non_production_systems() {
		$sql = "SELECT COUNT(*) AS count FROM system WHERE man_status <> 'production'";
		$query = $this->db->query($sql);
		$result = $query->result();
		$row = $query->row();
		return ($row->count);
	}

	function count_not_seen_days($days = 365) {
		$sql = "SELECT COUNT(*) AS count FROM system WHERE DATE(timestamp) < DATE_SUB(curdate(), INTERVAL $days day)";
		$query = $this->db->query($sql); 
		$row = $query->row();
		return ($row->count);
	}

	function delete_systems_not_seen_days($days = 365) {
		$sql = "DELETE FROM system WHERE DATE(timestamp) < DATE_SUB(curdate(), INTERVAL $days day)";
		$query = $this->db->query($sql); 
		$count = $this->db->affected_rows();
		return ($count);
	}

	function delete_non_production_systems() {
		$sql = "DELETE FROM system WHERE man_status = 'deleted'";
		$query = $this->db->query($sql); 
		$count = $this->db->affected_rows();
		return ($count);
	}

	#TODO what do we do with linked systems when the above is run from db_admin/maintenance?
	function delete_linked_system($system_id) {
		$sql = "DELETE FROM system WHERE linked_sys = ?";
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
	}

	/**
	 * Insert a NEW system
	 * We insert whatever we have from the $details object and 
	 * whatever additional data based on what we can derive
	 *
	 * @param	object $details 
	 * @access	public
	 * @return	int
	 */
	function insert_system($details) {

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
		$details->os_name = str_ireplace("(r)", "", $details->os_name);
		$details->os_name = str_ireplace("(tm)", "", $details->os_name);
		if (!isset($details->os_version)) { $details->os_version = ''; }
		if (!isset($details->serial)) { $details->serial = ''; }
		if (!isset($details->status)) { $details->status = 'production'; }
		if (!isset($details->type) or $details->type == '') { $details->type = 'unknown'; }
		if (!isset($details->uuid)) { $details->uuid = ''; }
		if (!isset($details->icon)) { $details->icon = ''; }

		if ($details->icon == '') { 
			# we set computer icons by OS, everything else by type
			if ($details->type == 'computer') {
				if ($details->os_name != '') {
					if ((strripos($details->os_name, "osx") !== false) or 
						(strpos(strtolower($details->os_name), "ios") !== false)) {
						$details->icon = 'apple';
					}
					if (strripos($details->os_name, "bsd") !== false) {
						$details->icon = 'bsd';
					}
					if (strripos($details->os_name, "centos") !== false) {
						$details->icon = 'centos';
					}
					if (strripos($details->os_name, "debian") !== false) {
						$details->icon = 'debian';
					}
					if (strripos($details->os_name, "fedora") !== false) {
						$details->icon = 'fedora';
					}
					if ((strripos($details->os_name, "mandriva") !== false) OR 
						(strripos($details->os_name, "mandrake") !== false)) {
						$details->icon = 'mandriva';
					}
					if (strripos($details->os_name, "mint") !== false) {
						$details->icon = 'mint';
					}
					if (strripos($details->os_name, "novell") !== false)  {
						$details->icon = 'novell';
					}
					if (strripos($details->os_name, "slackware") !== false) {
						$details->icon = 'slackware';
					}
					if (strripos($details->os_name, "suse") !== false) {
						$details->icon = 'suse';
					}
					if ((strripos($details->os_name, "red hat") !== false) OR 
						(strripos($details->os_name, "redhat") !== false)) {
						$details->icon = 'redhat';
					}
					if (strripos($details->os_name, "ubuntu") !== false) {
						$details->icon = 'ubuntu';
					}
					if (strripos($details->os_name, "vmware") !== false) {
						$details->icon = 'vmware';
					}
					if (strripos($details->os_name, "windows 2000") !== false) {
						$details->icon = 'windows_2000';
					}
					if (strripos($details->os_name, "server 2003") !== false) {
						$details->icon = 'windows_2003';
					}
					if (strripos($details->os_name, "server 2008") !== false) {
						$details->icon = 'windows_2008';
					}
					if (strripos($details->os_name, "server 2012") !== false) {
						$details->icon = 'windows_2012';
					}
					if (strripos($details->os_name, "windows 7") !== false) {
						$details->icon = 'windows_7';
					}
					if (strripos($details->os_name, "windows 8") !== false) {
						$details->icon = 'windows_8';
					}
					if (strripos($details->os_name, "windows nt") !== false) {
						$details->icon = 'windows_nt';
					}
					if (strripos($details->os_name, "windows rt") !== false) {
						$details->icon = 'windows_rt';
					}
					if (strripos($details->os_name, "vista") !== false) {
						$details->icon = 'windows_vista';
					}
					if (strripos($details->os_name, "windows xp") !== false) {
						$details->icon = 'windows_xp';
					}
					if ($details->icon == '' and strripos($details->os_name, "windows") !== false) {
						$details->icon = 'windows';
					}
					if ($details->icon == '' and strripos($details->os_name, "microsoft") !== false) {
						$details->icon = 'windows';
					}
				} else {
					if ($details->icon == '' and strripos($details->os_group, "linux") !== false) {
						$details->icon = 'linux';
					}
					if ($details->icon == '' and strripos($details->os_group, "apple") !== false) {
						$details->icon = 'apple';
					}
					if ($details->icon == '' and strripos($details->manufacturer, "apple") !== false) {
						$details->icon = 'apple';
					}
					if ($details->icon == '' and strripos($details->manufacturer, "vmware") !== false) {
						$details->icon = 'vmware';
					}
					if ($details->icon == '' and strripos($details->os_group, "windows") !== false) {
						$details->icon = 'windows';
					}
				}
				if ($details->icon == '') { $details->icon = 'computer'; }
			} else {
				if (strpos($details->type, "|") === false) {
					$details->icon = str_replace(" ", "_", $details->type);
				} else {
					$details->icon = 'unknown';
				}
			}
		}
		if ($details->icon == '') { $details->icon = 'unknown'; }
		$details->icon = str_replace(" ", "_", strtolower($details->icon));

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
		$details->man_os_name = str_ireplace("(r)", "", $details->man_os_name);
		$details->man_os_name = str_ireplace("(tm)", "", $details->man_os_name);
		if (!isset($details->man_serial)) { $details->man_serial = $details->serial; }
		if (!isset($details->man_status)) { $details->man_status = 'production'; }
		if (!isset($details->man_type)) { $details->man_type = $details->type; }

		# we now set a default location - 0 the location_id 
		if (!isset($details->man_location_id)) { $details->man_location_id = '0'; }

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
		if (isset($details->hostname) and strpos($details->hostname, ".")) {
			$sql = "SELECT hostname FROM system WHERE system_id = ?";
			$data = array("$details->system_id");
			$query = $this->db->query($sql, $data);
			$result = $query->row();
			$db_hostname = $result->hostname;
			if (!strpos($db_hostname, ".")) {
				$details->hostname = $db_hostname;
			}
		}

		if (!isset($details->system_key_type)) {$details->system_key_type = '';}

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

		# if submitting an nmap scan, do not update the type or man_type
		if (isset($details->last_seen_by) and $details->last_seen_by == 'nmap') {
			unset ($details->type);
			unset ($details->man_type);
		}	

		# for removing existing symbols
		if (isset($details->os_name)) { 
			$details->os_name = str_ireplace("(r)", "", $details->os_name);
			$details->os_name = str_ireplace("(tm)", "", $details->os_name);
		}

		# we check a few man_ items when we are submitting an audit script result
		# if they are blank (previously submitted info is incomplete) we over write them
		# we would not normally over write man_ items
		if (isset($details->last_seen_by) and ($details->last_seen_by == 'audit' or $details->last_seen_by == 'snmp')) {
			$sql = "SELECT * FROM system WHERE system_id = ? LIMIT 1";
			$data = array("$details->system_id");
			$query = $this->db->query($sql, $data);
			$row = $query->row();


			# if the database entry for man_manufacturer is empty but we have something from an audit, set it.
			if ($row->man_manufacturer == '' and isset($details->manufacturer)) {
				$details->man_manufacturer = $details->manufacturer; 
			} else {
				unset($details->man_manufacturer);
			}

			# account for a manufacturer attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
			if (($row->man_manufacturer == $row->manufacturer) and isset($details->manufacturer) and ($details->manufacturer <> $row->manufacturer)) {
				$details->man_manufacturer = $details->manufacturer;
			}


			# if the database entry for man_model is empty but we have something from an audit, set it.
			if ($row->man_model == '' and isset($details->model)) {
				$details->man_model = $details->model;
			} else {
				unset($details->man_model);
			}

			# account for a model attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
			if (($row->man_model == $row->model) and isset($details->model) and ($details->model <> $row->model)) {
				$details->man_model = $details->model;
			}


			# if the database entry for man_serial is empty but we have something from an audit, set it.
			if ($row->man_serial == '' and isset($details->serial)) {
				$details->man_serial = $details->serial;
			} else {
				unset($details->man_serial);
			}

			# account for a serial attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
			if (($row->man_serial == $row->serial) and isset($details->serial) and ($details->serial <> $row->serial)) {
				$details->man_serial = $details->serial;
			}


			# if the database entry for man_description is empty but we have something from an audit, set it.
			if ($row->man_description == '' and isset( $details->description)) {$details->man_description = $details->description;} else {unset($details->man_description);}

			# account for a serial attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
			if (($row->man_description == $row->description) and isset($details->description) and ($details->description <> $row->description)) {
				$details->man_description = $details->description;
			}


			# if the database entry for man_form_factor is empty but we have something from an audit, set it.
			if ($row->man_form_factor == '' and isset($details->form_factor)) {
				$details->man_form_factor = $details->form_factor;
			} else {
				unset($details->man_form_factor);
			}

			# account for a form_factor attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
			if (($row->man_form_factor == $row->form_factor) and isset($details->form_factor) and ($details->form_factor <> $row->form_factor)) {
				$details->man_form_factor = $details->form_factor;
			}


			# if the database entry for man_os_group is empty but we have something from an audit, set it.
			if ($row->man_os_group == '' and isset($details->os_group)) {
				$details->man_os_group = $details->os_group;
			} else {
				unset($details->man_os_group);
			}

			# account for a os_group attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
			if (($row->man_os_group == $row->os_group) and isset($details->os_group) and ($details->os_group <> $row->os_group)) {
				$details->man_os_group = $details->os_group;
			}


			# if the database entry for man_os_family is empty but we have something from an audit, set it.
			if ($row->man_os_family == '' and isset($details->os_family)) {
				$details->man_os_family = $details->os_family;
			} else {
				unset($details->man_os_family);
			}

			# account for a os_family attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
			if (($row->man_os_family == $row->os_family) and isset($details->os_family) and ($details->os_family <> $row->os_family)) {
				$details->man_os_family = $details->os_family;
			}


			# if the database entry for man_os_name is empty but we have something from an audit, set it.
			if ($row->man_os_name == '' and isset($details->os_name)) { 
				$details->man_os_name = $details->os_name;
			} else {
				unset($details->man_os_name);
			}

			# account for a os_name attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
			if (($row->man_os_name == $row->os_name) and isset($details->os_name) and ($details->os_name <> $row->os_name)) {
				$details->man_os_name = $details->os_name;
			}


			if (strlen($row->hostname) > 15 and isset($details->hostname) and strlen($details->hostname) == 15) { unset($details->hostname); }

			if (isset($details->manufacturer) and (
				(strripos($details->manufacturer, "vmware") !== false) or 
				(strripos($details->manufacturer, "parallels") !== false) or 
				(strripos($details->manufacturer, "virtual") !== false))) {
				$details->form_factor = 'Virtual';
				$details->man_form_factor = 'Virtual';
			}

			if ($row->icon > '') {
				if (isset($details->icon)) { 
					unset($details->icon); 
				}
			} else {
				if (!isset($details->icon) or $details->icon == '') {
					$details->icon = $details->type;
				}
			}
			
			if ($row->man_icon > '') {
				if (isset($details->man_icon)) { 
					unset($details->man_icon); 
				}
			} else {
				if (!isset($details->man_icon) or $details->man_icon == '') {
					$details->man_icon = $details->type;
				}
			}
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
						$sql .= $key . " = '" . str_replace("'", "\'", $value) . "', "; 
					}
				}
			}
		}
		$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
		$sql .= " WHERE system_id = '" . $details->system_id . "'";
		$query = $this->db->query($sql);
	}


	function reset_icons() {
		$sql = "SELECT system_id, man_type, type, os_name, man_os_name, os_family, man_os_family FROM system";
		$query = $this->db->query($sql);
		$result = $query->result();
		$count = $query->num_rows();
		foreach ($result as $details) { 
			# we set computer icons by OS, everything else by type
			if (($details->type == 'computer') or ($details->man_type == 'computer')) {
				if ($details->os_name != '') {
					if ((strripos($details->os_name, "osx") !== false) or 
						(strpos(strtolower($details->os_name), "ios") !== false)) {
						$details->icon = 'apple';
					}
					if (strripos($details->os_name, "bsd") !== false) {
						$details->icon = 'bsd';
					}
					if (strripos($details->os_name, "centos") !== false) {
						$details->icon = 'centos';
					}
					if (strripos($details->os_name, "debian") !== false) {
						$details->icon = 'debian';
					}
					if (strripos($details->os_name, "fedora") !== false) {
						$details->icon = 'fedora';
					}
					if ((strripos($details->os_name, "mandriva") !== false) OR 
						(strripos($details->os_name, "mandrake") !== false)) {
						$details->icon = 'mandriva';
					}
					if (strripos($details->os_name, "mint") !== false) {
						$details->icon = 'mint';
					}
					if (strripos($details->os_name, "novell") !== false)  {
						$details->icon = 'novell';
					}
					if (strripos($details->os_name, "slackware") !== false) {
						$details->icon = 'slackware';
					}
					if (strripos($details->os_name, "suse") !== false) {
						$details->icon = 'suse';
					}
					if ((strripos($details->os_name, "red hat") !== false) OR 
						(strripos($details->os_name, "redhat") !== false)) {
						$details->icon = 'redhat';
					}
					if (strripos($details->os_name, "ubuntu") !== false) {
						$details->icon = 'ubuntu';
					}
					if (strripos($details->os_name, "vmware") !== false) {
						$details->icon = 'vmware';
					}
					if (strripos($details->os_name, "windows 2000") !== false) {
						$details->icon = 'windows_2000';
					}
					if (strripos($details->os_name, "server 2003") !== false) {
						$details->icon = 'windows_2003';
					}
					if (strripos($details->os_name, "server 2008") !== false) {
						$details->icon = 'windows_2008';
					}
					if (strripos($details->os_name, "server 2012") !== false) {
						$details->icon = 'windows_2012';
					}
					if (strripos($details->os_name, "windows 7") !== false) {
						$details->icon = 'windows_7';
					}
					if (strripos($details->os_name, "windows 8") !== false) {
						$details->icon = 'windows_8';
					}
					if (strripos($details->os_name, "windows nt") !== false) {
						$details->icon = 'windows_nt';
					}
					if (strripos($details->os_name, "windows rt") !== false) {
						$details->icon = 'windows_rt';
					}
					if (strripos($details->os_name, "vista") !== false) {
						$details->icon = 'windows_vista';
					}
					if (strripos($details->os_name, "windows xp") !== false) {
						$details->icon = 'windows_xp';
					}
					if ($details->icon == '' and strripos($details->os_name, "windows") !== false) {
						$details->icon = 'windows';
					}
					if ($details->icon == '' and strripos($details->os_name, "microsoft") !== false) {
						$details->icon = 'windows';
					}
				} else {
					if ($details->icon == '' and strripos($details->os_group, "linux") !== false) {
						$details->icon = 'linux';
					}
					if ($details->icon == '' and strripos($details->os_group, "apple") !== false) {
						$details->icon = 'apple';
					}
					if ($details->icon == '' and strripos($details->manufacturer, "apple") !== false) {
						$details->icon = 'apple';
					}
					if ($details->icon == '' and strripos($details->manufacturer, "vmware") !== false) {
						$details->icon = 'vmware';
					}
					if ($details->icon == '' and strripos($details->os_group, "windows") !== false) {
						$details->icon = 'windows';
					}
				}
				if ($details->icon == '') { $details->icon = 'computer'; }
			} else {
				if (strpos($details->type, "|") === false) {
					$details->icon = str_replace(" ", "_", $details->type);
				} else {
					$details->icon = 'unknown';
				}
			}
			if ($details->icon == '') { $details->icon = 'unknown'; }
			$details->icon = str_replace(" ", "_", strtolower($details->icon));
			$details->man_icon = $details->icon;
			$sql = "UPDATE system SET icon = ?, man_icon = ? WHERE system_id = ?";
			$data = array("$details->icon", "$details->man_icon", "$details->system_id");
			$query = $this->db->query($sql, $data);
		}
		return ($count);
	}


}


?>
