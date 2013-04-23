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

	function find_system($details) {
		# we are searching for a system_id.
		# search order is:
		# mac_address, ip_address, serial, hostname
		$details->system_id = '';
		if (isset($details->mac_address)) {
			# we have a MAC Address, check the sys_hw_network_card_ip table
			$sql = "SELECT system.system_id FROM system 
					LEFT JOIN sys_hw_network_card_ip ON (system.system_id = sys_hw_network_card_ip.system_id AND system.timestamp = sys_hw_network_card_ip.timestamp) 
					WHERE sys_hw_network_card_ip.net_mac_address = ? 
					AND system.man_status = 'production' LIMIT 1";
			$sql = $this->clean_sql($sql);
			$data = array("$details->mac_address");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0 ) { $details->system_id = $row->system_id; }
		}

		if (($details->system_id == '') and (isset($details->ip_address))) {
			# we have an ip address
			$sql = "SELECT system.system_id FROM system WHERE man_ip_address = ?";
			$data = array(ip_address_to_db($details->ip_address));
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) { $details->system_id = $row->system_id; }
			if ($details->system_id == '') {
				# we didn't get a hit from the system table - try the sys_hw_network_card_ip table
			$sql = "SELECT system.system_id FROM system 
					LEFT JOIN sys_hw_network_card_ip ON (system.system_id = sys_hw_network_card_ip.system_id AND system.timestamp = sys_hw_network_card_ip.timestamp) 
					WHERE (sys_hw_network_card_ip.ip_address_v4 = ? OR sys_hw_network_card_ip.ip_address_v6 = ?)
					AND system.man_status = 'production' LIMIT 1";
			$sql = $this->clean_sql($sql);
			$data = array(ip_address_to_db($details->ip_address), "$details->ip_address");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) { $details->system_id = $row->system_id; }
			}
		}

		if (($details->system_id == '') and (isset($details->system_key))) {
			# check for a serial number in the system table
			$sql = "SELECT system.system_id FROM system WHERE system_key = ?";
			$data = array("$details->system_key");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) { $details->system_id = $row->system_id; }
		}

		if (($details->system_id == '') and (isset($details->serial)) and ($details->serial > '') ) {
			# check for a serial number in the system table
			$sql = "SELECT system.system_id FROM system WHERE serial = ?";
			$data = array("$details->serial");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) { $details->system_id = $row->system_id; }
		}


		if (($details->system_id == '') and (isset($details->serial)) and ($details->serial > '') ) {
			# check for a serial number in the system table using man_serial
			$sql = "SELECT system.system_id FROM system WHERE man_serial = ?";
			$data = array("$details->serial");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) { $details->system_id = $row->system_id; }
		}

		if (($details->system_id == '') and (isset($details->hostname))) {
			# check for a hostname in the system table
			$sql = "SELECT system.system_id FROM system WHERE hostname = ?";
			$data = array("$details->hostname");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if (count($row) > 0) { $details->system_id = $row->system_id; }
		}

		return $details->system_id;
	}

	function insert_nmis($details) {
		# we do NOT have a system_id
		$timestamp = date('Y-m-d H:i:s');
		print_r($details);
		exit();
	}

	function insert_snmp($details) {
		# we do NOT have a system_id
		$timestamp = date('Y-m-d H:i:s');
		if (!isset($details->ip_address)) {$details->ip_address = '';}
		if (!isset($details->hostname)) {$details->hostname = '';}
		if (!isset($details->description)) {$details->description = '';}
		if (!isset($details->uptime)) {$details->uptime = '';}
		if (!isset($details->contact)) {$details->contact = '';}
		if (!isset($details->os_group)) {$details->os_group = '';}
		if (!isset($details->os_family)) {$details->os_family = '';}
		if (!isset($details->os_name)) {$details->os_name = '';}
		if (!isset($details->manufacturer)) {$details->manufacturer = '';}
		if (!isset($details->model)) {$details->model = '';}
		if (!isset($details->serial)) {$details->serial = '';}
		if (!isset($details->type)) {$details->type = '';}
		if (!isset($details->oid)) {$details->oid = '';}
		if (!isset($details->fqdn)) {$details->fqdn = '';}
		if (!isset($details->printer_duplex)) {$details->printer_duplex = '';}
		if (!isset($details->printer_color)) {$details->printer_color = '';}
		if (!isset($details->access_details)) {$details->access_details = '';}
		if (!isset($details->nmis_group)) {$details->nmis_group = '';}
		if (!isset($details->nmis_name)) {$details->nmis_name = '';}
		if (!isset($details->nmis_role)) {$details->nmis_role = '';}

		$sql = "INSERT INTO system (man_ip_address, hostname, description, man_description, uptime, 
			contact_name, os_group, man_os_group, os_family, man_os_family, os_name, man_os_name, 
			manufacturer, man_manufacturer, model, man_model, serial, man_serial, type, man_type, 
			icon, man_icon, access_details, last_seen_by, nmis_group, nmis_name, nmis_role, 
			snmp_oid, fqdn, printer_duplex, printer_color, man_status, timestamp, first_timestamp) VALUES (
			?, ?, ?, ?, ?, 
			?, ?, ?, ?, ?, ?, ?, 
			?, ?, ?, ?, ?, ?, ?, ?, 
			?, ?, ?, ?, ?, ?, ?, 
			?, ?, ?, ?, ?, ?, ?)";

		$data = array(ip_address_to_db($details->ip_address), "$details->hostname", "$details->description", "$details->description", "$details->uptime",
			"$details->contact", "$details->os_group", "$details->os_group", "$details->os_family", "$details->os_family", "$details->os_name", "$details->os_name",
			"$details->manufacturer", "$details->manufacturer", "$details->model", "$details->model", "$details->serial", "$details->serial", "$details->type", "$details->type", 
			"$details->type", "$details->type", "$details->access_details", "snmp", "$details->nmis_group", "$details->nmis_name", "$details->nmis_role", 
			"$details->oid", "$details->fqdn", "$details->printer_duplex", "$details->printer_color", "production", "$timestamp", "$timestamp" );

		$sql = $this->clean_sql($sql);
		$query = $this->db->query($sql, $data);
		#echo $this->db->last_query() . "\n";

		$details->system_id = $this->db->insert_id();
		if (!isset($details->subnet)) { $details->subnet = ''; }

		if ($details->mac > '') {
			$sql = "SELECT sys_hw_network_card_ip.* 
					FROM sys_hw_network_card_ip 
					LEFT JOIN system ON (sys_hw_network_card_ip.system_id = system.system_id AND sys_hw_network_card_ip.timestamp = system.timestamp) 
					WHERE system.system_id = ? AND
					sys_hw_network_card_ip.net_mac_address = ? AND 
					sys_hw_network_card_ip.ip_address_version = '4' ";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", "$details->mac");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if ($query->num_rows() > 0) {
				if ($row->ip_subnet == "") {
					# update the subnet
					$sql = "UPDATE sys_hw_network_card_ip SET ip_subnet = ? WHERE system_id = ? AND timestamp = ?";
					$data = array("$details->subnet", "$details->system_id", "$row->timestamp");
					$query = $this->db->query($sql, $data);
				}
			} else {
				# insert a new record
				$sql = "INSERT INTO sys_hw_network_card_ip (net_mac_address, system_id, ip_address_v4, ip_subnet, ip_address_version, timestamp, first_timestamp)
						VALUES(?, ?, ?, ?, '4', ?, ?)";
				$sql = $this->clean_sql($sql);
				$data = array("$details->mac", "$details->system_id", "$details->man_ip_address", "$details->subnet", "$timestamp", "$timestamp");
				$query = $this->db->query($sql, $data);
			}
		}

	}

	function update_snmp($details) {
		# v1 does not return much, mainly network information
		# 
		# todo update/insert ROUTE information

		# we need to make sure we get a different timestamp than the nmap input routine.
		sleep(1);
		$details->timestamp = date('Y-m-d H:i:s');

		# the system exists
		$sql = "SELECT * FROM system WHERE system_id = ?";
		$data = array("$details->system_id");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		$timestamp = $row->timestamp;
		$details->man_type = $details->type;
		$details->man_serial = $details->serial;
		$details->man_description = $details->description;
		$details->man_manufacturer = $details->manufacturer;
		$details->man_model = $details->model;
		$details->icon = $details->type;
		$details->man_icon = $details->type;
		if (!isset($details->nmis_group)) {$details->nmis_group = '';}
		if (!isset($details->nmis_name)) {$details->nmis_name = '';}
		if (!isset($details->nmis_role)) {$details->nmis_role = '';}


		if ($details->snmp_version == '2c') {

			if (($row->type > '') and ($row->last_seen <> $row->first_timestamp) and ($row->type <> 'unknown')) {
				$details->type = $row->type;
			}

			if (($row->man_type > '') and ($row->last_seen <> $row->first_timestamp) and ($row->man_type <> 'unknown')) {
				$details->man_type = $row->man_type;
			}

			if ($row->icon > '' and $row->last_seen <> $row->first_timestamp) {
				$details->icon = $row->icon;
			}

			if ($row->man_icon > '' and $row->last_seen <> $row->first_timestamp) {
				$details->man_icon = $row->man_icon;
			}

			if ($row->os_group > '' and $row->last_seen <> $row->first_timestamp) {
				$details->os_group = $row->os_group;
			}

			if ($row->man_os_group > '' and $row->last_seen <> $row->first_timestamp) {
				$details->man_os_group = $row->man_os_group;
			}

			if ($row->os_family > '' and $row->last_seen <> $row->first_timestamp) {
				$details->os_family = $row->os_family;
			}

			if ($row->man_os_family > '' and $row->last_seen <> $row->first_timestamp) {
				$details->man_os_family = $row->man_os_family;
			}

			if ($row->os_name > '' and $row->last_seen <> $row->first_timestamp) {
				$details->os_name = $row->os_name;
			}

			if ($row->man_os_name > '' and $row->last_seen <> $row->first_timestamp) {
				$details->man_os_name = $row->man_os_name;
			}

			if ($row->description > '' and $row->last_seen <> $row->first_timestamp) {
				$details->description = $row->description;
			}

			if ($row->man_description > '' and $row->last_seen <> $row->first_timestamp) {
				$details->man_description = $row->man_description;
			}

			if ($row->serial > '' and $row->last_seen <> $row->first_timestamp) {
				$details->serial = $row->serial;
			}

			if ($row->man_serial > '' and $row->last_seen <> $row->first_timestamp) {
				$details->man_serial = $row->serial;
			}

			if ($row->manufacturer > '' and $row->last_seen <> $row->first_timestamp) {
				$details->manufacturer = $row->manufacturer;
			}

			if ($row->man_manufacturer > '' and $row->last_seen <> $row->first_timestamp) {
				$details->man_manufacturer = $row->man_manufacturer;
			}

			if ($row->model > '' and $row->last_seen <> $row->first_timestamp) {
				$details->model = $row->model;
			}

			if ($row->man_model > '' and $row->last_seen <> $row->first_timestamp) {
				$details->man_model = $row->man_model;
			}

			if ($row->man_ip_address > '' and $row->last_seen <> $row->first_timestamp) {
				$details->man_ip_address = $row->man_ip_address;
			} 

			if ($row->contact_name > '' and $row->last_seen <> $row->first_timestamp) {
				$details->contact = $row->contact_name;
			}

			if ($row->access_details > '') {
				$details->access_details = $row->access_details;
			}

			if ($row->nmis_group > '' and $details->nmis_group == '') {
				$details->nmis_group = $row->nmis_group;
			}

			if ($row->nmis_name > '' and $details->nmis_name == '') {
				$details->nmis_name = $row->nmis_name;
			}

			if ($row->nmis_role > '' and $details->nmis_role == '') {
				$details->nmis_role = $row->nmis_role;
			}

			$sql = "UPDATE system SET 
					man_status = 'production', 
					last_seen_by = 'snmp', 
					type = ?, 
					man_type = ?, 
					model = ?, 
					man_model = ?, 
					description = ?, 
					man_description = ?, 
					manufacturer = ?, 
					man_manufacturer = ?, 
					serial = ?, 
					man_serial = ?, 
					man_ip_address = ?, 
					last_seen = ?, 
					os_group = ?, 
					man_os_group = ?, 
					os_family = ?, 
					man_os_family = ?,
					os_name = ?, 
					man_os_name = ?, 
					icon = ?, 
					man_icon = ?, 
					contact_name = ?, 
					uptime = ?, 
					access_details = ?, 
					nmis_group = ?, 
					nmis_name = ?, 
					nmis_role = ? 
					WHERE system_id = ? ";
			$sql = $this->clean_sql($sql);
			$data = array("$details->type", "$details->man_type", "$details->model", "$details->man_model", 
						"$details->description", "$details->man_description", "$details->manufacturer", "$details->man_manufacturer", 
						"$details->serial", "$details->man_serial", ip_address_to_db($details->man_ip_address), "$details->timestamp", 
						"$details->os_group", "$details->man_os_group", "$details->os_family", "$details->man_os_family", 
						"$details->os_name", "$details->man_os_name", "$details->icon", "$details->man_icon", 
						"$details->contact", "$details->uptime", "$details->access_details", "$details->nmis_group", 
						"$details->nmis_name", "$details->nmis_role", "$details->system_id" );
			$query = $this->db->query($sql, $data);
		} 

		# check that we have the subnet populated
		# sometimes we only get an IP Address
		# maybe we have nothing at all?
		if ($details->mac > '') {
			$sql = "SELECT sys_hw_network_card_ip.* 
					FROM sys_hw_network_card_ip 
					LEFT JOIN system ON (sys_hw_network_card_ip.system_id = system.system_id AND sys_hw_network_card_ip.timestamp = system.timestamp) 
					WHERE system.system_id = ? AND
					sys_hw_network_card_ip.net_mac_address = ? AND 
					sys_hw_network_card_ip.ip_address_version = '4' ";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", "$details->mac");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if ($query->num_rows() > 0) {
				if ($row->ip_subnet == "") {
					# update the subnet
					$sql = "UPDATE sys_hw_network_card_ip SET ip_subnet = ? WHERE system_id = ? AND timestamp = ?";
					$data = array("$details->subnet", "$details->system_id", "$row->timestamp");
					$query = $this->db->query($sql, $data);
				}
			} else {
				# insert a new record
				$sql = "INSERT INTO sys_hw_network_card_ip (net_mac_address, system_id, ip_address_v4, ip_subnet, ip_address_version, timestamp, first_timestamp)
						VALUES(?, ?, ?, ?, '4', ?, ?)";
				$sql = $this->clean_sql($sql);
				$data = array("$details->mac", "$details->system_id", "$details->man_ip_address", "$details->subnet", "$timestamp", "$timestamp");
				$query = $this->db->query($sql, $data);
			}
		}
	}

	function process_system_from_nmap($details) {

		$details->system_id = '';
		$details->timestamp = date('Y-m-d H:i:s');
		if ($details->hostname == '') {	$details->hostname = ip_address_from_db($details->man_ip_address); }
		$details->man_ip_address = $this->ip_address_to_db($details->man_ip_address);
		$result = @gethostbyaddr($details->hostname);
		if (($result > '') and ($result != ip_address_from_db($details->man_ip_address))) {
			$i = explode(".", $result);
			$details->hostname = $i[0];
		}
		if ($details->mac_address > '') {
			# we have a MAC Address, check the sys_hw_network_card_ip table
			$sql = "SELECT system.system_id, system.system_key FROM system 
					LEFT JOIN sys_hw_network_card_ip ON (system.system_id = sys_hw_network_card_ip.system_id AND system.timestamp = sys_hw_network_card_ip.timestamp) 
					WHERE (sys_hw_network_card_ip.net_mac_address = ? OR sys_hw_network_card_ip.ip_address_v4 = ?) 
						AND (system.nmap_type = ? OR system.nmap_type = '' OR nmap_type = 'unknown') 
						AND system.man_status = 'production' ";
			$sql = $this->clean_sql($sql);
			$data = array("$details->mac_address", $this->ip_address_to_db($details->man_ip_address), "$details->type" );
			$query = $this->db->query($sql, $data);
			$result = $query->result();
			$match = 'n';
			foreach ($result as $i) {
				if (($i->system_key > '') and ($match == 'n')) {
					$match = 'y';
					$details->system_id = $i->system_id;
				}
			}
			if (($details->system_id == '') and ($match == 'n')) {
				foreach ($result as $i) {
					$details->system_id = $i->system_id;
				}
			}

			if ($details->system_id > '') {
				# we should update the details
				$sql = "SELECT * FROM system WHERE system_id = ?";
				$data = array("$details->system_id");
				$query = $this->db->query($sql, $data);
				$row = $query->row();

				if ($row->type > '') {
					$details->type = $row->type;
				} else {
					$details->type = $details->type;
				}

				if ($row->man_type > '') {
					$details->man_type = $row->man_type;
				} else {
					$details->man_type = $details->type;
				}

				if ($row->description > '') {
					$details->description = $row->description;
				}

				if ($row->man_description > '') {
					$details->man_description = $row->man_description;
				} else {
					$details->man_description = $details->description;
				}

				if ($row->os_name > '') {
					$details->os_name = $row->os_name;
				} 

				if ($row->man_os_name > '') {
					$details->man_os_name = $row->man_os_name;
				} else {
					$details->man_os_name = $details->os_name;
				}

				if ($row->manufacturer > '') {
					$details->manufacturer = $row->manufacturer;
				}

				if ($row->man_manufacturer > '') {
					$details->man_manufacturer = $row->man_manufacturer;
				} else {
					$details->man_manufacturer = $details->manufacturer;
				}

				if ($row->icon > '') {
					$details->icon = $row->icon;
				} else {
					$details->icon = 'switch';
				}

				if ($row->man_icon > '') {
					$details->man_icon = $row->man_icon;
				} else {
					$details->man_icon = 'switch';
				}

				if ($row->man_ip_address > '') {
					$details->man_ip_address = $row->man_ip_address;
				} 

				$sql = "UPDATE system SET 
						man_status = 'production', 
						last_seen_by = 'nmap', 
						type = ?, 
						man_type = ?, 
						nmap_type = ?, 
						description = ?, 
						man_description = ?, 
						os_name = ?, 
						man_os_name = ?, 
						manufacturer = ?, 
						man_manufacturer = ?, 
						icon = ?, 
						man_icon = ?, 
						man_ip_address = ?, 
						last_seen = ? 
						WHERE system_id = ? ";
				$sql = $this->clean_sql($sql);
				$data = array("$details->type",    "$details->man_type",    "$details->nmap_type",      "$details->description",      "$details->man_description",
							  "$details->os_name", "$details->man_os_name", "$details->manufacturer",   "$details->man_manufacturer", 
							  "$details->icon",    "$details->man_icon",    ip_address_to_db($details->man_ip_address), "$details->timestamp",        "$details->system_id" );
				$query = $this->db->query($sql, $data);
			}
		}

		if ($details->system_id == '') {
			# we have no MAC - best guess based on IP and type
			$sql = "SELECT * FROM system WHERE man_ip_address = ? and (nmap_type = ? or nmap_type = '') and man_status = 'production'";
			$data = array ("$details->man_ip_address", "$details->type");
			$query = $this->db->query($sql, $data);
			$row = $query->row();
			if ($row) {
				# in the db - update the details
				$details->system_id = $row->system_id;

				if ($row->type > '') {
					$details->type = $row->type;
				} else {
					$details->type = $details->type;
				}

				if ($row->man_type > '') {
					$details->man_type = $row->man_type;
				} else {
					$details->man_type = $details->type;
				}

				if ($row->description > '') {
					$details->description = $row->description;
				}

				if ($row->man_description > '') {
					$details->man_description = $row->man_description;
				} else {
					$details->man_description = $details->description;
				}

				if ($row->os_name > '') {
					$details->os_name = $row->os_name;
				} 

				if ($row->man_os_name > '') {
					$details->man_os_name = $row->man_os_name;
				} else {
					$details->man_os_name = $details->os_name;
				}

				if ($row->manufacturer > '') {
					$details->manufacturer = $row->manufacturer;
				}

				if ($row->man_manufacturer > '') {
					$details->man_manufacturer = $row->man_manufacturer;
				} else {
					$details->man_manufacturer = $details->manufacturer;
				}

				if ($row->icon > '') {
					$details->icon = $row->icon;
				} else {
					$details->icon = 'switch';
				}

				if ($row->man_icon > '') {
					$details->man_icon = $row->man_icon;
				} else {
					$details->man_icon = 'switch';
				}

				if ($row->man_ip_address > '') {
					$details->man_ip_address = $row->man_ip_address;
				} 

				$sql = "UPDATE system SET 
						man_status = 'production', 
						last_seen_by = 'nmap', 
						type = ?, 
						man_type = ?, 
						nmap_type = ?, 
						description = ?, 
						man_description = ?, 
						os_name = ?, 
						man_os_name = ?, 
						manufacturer = ?, 
						man_manufacturer = ?, 
						icon = ?, 
						man_icon = ?, 
						man_ip_address = ?, 
						last_seen = ? 
						WHERE system_id = ? ";
				$sql = $this->clean_sql($sql);
				$data = array("$details->type",    "$details->man_type",    "$details->nmap_type",      "$details->description",      "$details->man_description",
							  "$details->os_name", "$details->man_os_name", "$details->manufacturer",   "$details->man_manufacturer", 
							  "$details->icon",    "$details->man_icon",    ip_address_to_db($details->man_ip_address), "$details->timestamp",        "$details->system_id" );
				$query = $this->db->query($sql, $data);
			}
		}

		if ($details->system_id == ''){
			# we still haven't found something - insert a new device
			$details->first_timestamp - $details->timestamp;

			if (strpos(strtolower($details->os_name), "windows") !== FALSE) {
				$details->type = 'computer';
				$details->man_type = 'computer';
				$details->os_group = 'Windows';
				$details->man_os_group = 'Windows';
				$details->icon = 'windows';
			} else {
				$details->man_type = $details->type;
				$details->os_group = '';
				$details->man_os_group = '';
				$details->icon = 'switch';
			}

			$sql = "INSERT INTO system (man_status, man_environment, man_criticality, last_seen_by, 
										icon, man_icon, hostname, description, 
										man_description, nmap_type, type, man_type, 
										os_name, man_os_name, manufacturer, man_manufacturer, 
										man_ip_address, last_seen, timestamp, first_timestamp) VALUES (
										'production', 'production', 'normal', 'nmap', 
										?, ?, ?, ?, 
										?, ?, ?, ?, 
										?, ?, ?, ?, 
										?, ?, ?, ?)";

			$sql = $this->clean_sql($sql);

			$data = array(	"$details->icon",           "$details->icon",      "$details->hostname", "$details->description", 
							"$details->description",    "$details->type",      "$details->type",           "$details->man_type", 
							"$details->os_name",        "$details->os_name",   "$details->manufacturer",   "$details->manufacturer", 
							ip_address_to_db($details->man_ip_address), "$details->timestamp", "$details->timestamp",      "$details->timestamp");

			$query = $this->db->query($sql, $data);
			$details->system_id = $this->db->insert_id();

			if ($details->mac_address > '') {
				$sql = "INSERT INTO sys_hw_network_card_ip (net_mac_address, system_id, ip_address_v4, ip_address_version, timestamp, first_timestamp) VALUES ( 
					?, ?, ?, '4', ?, ?)";
				$data = array("$details->mac_address", "$details->system_id", "$details->man_ip_address","$details->timestamp", "$details->timestamp" );
				$query = $this->db->query($sql, $data);
			}
		}
		return($details);
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
		$sql = "SELECT 		system_id, man_status, man_acting_server, man_manufacturer, man_form_factor, man_model, man_picture, man_serial, man_form_factor
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
		$details = new stdClass();
		$details->system_id = '';

		// if (count($mac_address_array) > 0){
		// 	// new code to check if a nmap audited system exists
		// 	$sql = "SELECT system.system_id FROM system 
		// 			LEFT JOIN sys_hw_network_card_ip ON (system.system_id = sys_hw_network_card_ip.system_id AND system.timestamp = sys_hw_network_card_ip.timestamp) 
		// 			WHERE sys_hw_network_card_ip.net_mac_address = ? AND 
		// 					system.man_status = 'production' 
		// 			LIMIT 1";
		// 	$sql = $this->clean_sql($sql);
		// 	$data = array("$details->mac");
		// 	$query = $this->db->query($sql, $data);
		// 	$row = $query->row();

		// 	if (!$row) {
		// 		# no match
		// 	} else {
		// 		# we should update the details
		// 		$details->system_id = $row->system_id;
		// 	}
		// }
		$details = new stdClass();
		$details->timestamp = strval($input->system_timestamp);
		$details->original_timestamp = '';
		$details->type = $input->system_type;
		$details->system_id = '';
		$system_uuid = $input->system_uuid;
		$system_hostname = $input->system_hostname;
		$system_domain = $input->system_domain;
		$system_key = $system_uuid . '-' . $system_hostname;
		if (isset($input->man_org_id)) {
			$man_org_id = $input->man_org_id;
		} else {
			$man_org_id = '';
		}
		#echo "System Key: " . $system_key . "<br />\n";
		$details->exist_type = 'new';

		# check for an existing audited system
		$sql = "SELECT system.system_id, system.timestamp, system.last_seen FROM system WHERE system.system_key = ? AND system.man_status = 'production' ORDER BY timestamp LIMIT 1";
		$data = array("$system_key");
		$query = $this->db->query($sql, $data);		
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$details->system_id = $row->system_id; 
			$details->original_timestamp = $row->timestamp;
			$details->last_seen = $row->last_seen;
			$details->exist_type = 'full';
		}

		# check for a bulk imported system
		if ($details->system_id == '') {
			$sql = "SELECT system.system_id, system.timestamp, system.last_seen FROM system WHERE (system.hostname = ? AND system.system_key = '') AND system.man_status = 'production' ORDER BY timestamp LIMIT 1";
			$data = array("$system_hostname");
			$query = $this->db->query($sql, $data);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$details->system_id = $row->system_id; 
				$details->original_timestamp = $row->timestamp;
				$details->last_seen = $row->last_seen;
				$details->exist_type = 'bulk';
			}
		}

		if ($details->system_id > '') {
			echo "SystemID (updated): <a href='" . base_url() . "index.php/main/system_display/" . $details->system_id . "'>" . $details->system_id . "</a>.<br />\n";
			// we update the existing entry
			if ($details->exist_type == 'bulk') {
				if ($man_org_id > '') {
					$sql = "UPDATE system SET system_key = ?, uuid = ?, hostname = ?, domain = ?, description = ?, man_description = ?, type = ?, icon = ?, os_group = ?, os_family = ?, os_name = ?, os_version = ?, serial = ?, model = ?, manufacturer = ?, uptime = ?, form_factor = ?, man_form_factor = ?, pc_os_bit = ?, pc_memory = ?, man_status = 'production', man_manufacturer = ?, man_model = ?, man_serial = ?, man_icon = ?, man_acting_server = '', man_type = 'computer', pc_num_processor = ?, pc_date_os_installation = ?, man_org_id = ?, last_seen = ?, last_seen_by = 'audit', timestamp = ? WHERE system.system_id = ?";
					
					$data = array( $system_key, "$input->system_uuid", "$input->system_hostname", "$input->system_domain", "$input->system_description", "$input->system_description", "$input->system_type", "$input->system_os_icon", "$input->system_os_group", "$input->system_os_family", "$input->system_os_name", "$input->system_os_version", "$input->system_serial", "$input->system_model", "$input->system_manufacturer", "$input->system_uptime", "$input->system_form_factor", "$input->system_form_factor", "$input->system_pc_os_bit", "$input->system_pc_memory", "$input->system_manufacturer", "$input->system_model", "$input->system_serial", str_replace(" ", "_", mb_strtolower($input->system_os_short_name)), "$input->system_pc_num_processor", "$input->system_pc_date_os_installation", "$man_org_id", "$input->system_timestamp", "$input->system_timestamp", "$details->system_id");
				} else {
					$sql = "UPDATE system SET system_key = ?, uuid = ?, hostname = ?, domain = ?, description = ?, man_description = ?, type = ?, icon = ?, os_group = ?, os_family = ?, os_name = ?, os_version = ?, serial = ?, model = ?, manufacturer = ?, uptime = ?, form_factor = ?, man_form_factor = ?, pc_os_bit = ?, pc_memory = ?, man_status = 'production', man_manufacturer = ?, man_model = ?, man_serial = ?, man_icon = ?, man_acting_server = '', man_type = 'computer', pc_num_processor = ?, pc_date_os_installation = ?,  last_seen = ?, last_seen_by = 'audit', timestamp = ? WHERE system.system_id = ?";
					
					$data = array( $system_key, "$input->system_uuid", "$input->system_hostname", "$input->system_domain", "$input->system_description", "$input->system_description", "$input->system_type", "$input->system_os_icon", "$input->system_os_group", "$input->system_os_family", "$input->system_os_name", "$input->system_os_version", "$input->system_serial", "$input->system_model", "$input->system_manufacturer", "$input->system_uptime", "$input->system_form_factor", "$input->system_form_factor", "$input->system_pc_os_bit", "$input->system_pc_memory", "$input->system_manufacturer", "$input->system_model", "$input->system_serial", str_replace(" ", "_", mb_strtolower($input->system_os_short_name)), "$input->system_pc_num_processor", "$input->system_pc_date_os_installation", "$input->system_timestamp", "$input->system_timestamp", "$details->system_id");
				}
				$sql = $this->clean_sql($sql);
				$query = $this->db->query($sql, $data);
			}
			
			if ($details->exist_type == 'full') {
				if ($man_org_id > '') {
					$sql = " UPDATE system SET hostname = ?, domain = ?, description = ?, type = 'computer', icon = ?, man_icon = ?, os_group = ?, man_os_group = ?, os_family = ?, man_os_family = ?, os_name = ?, man_os_name = ?, os_version = ?, serial = ?, model = ?, manufacturer = ?, uptime = ?, form_factor = ?, pc_os_bit = ?, pc_memory = ?, pc_num_processor = ?, pc_date_os_installation = ?, man_org_id = ?, last_seen = ?, last_seen_by = 'audit', timestamp = ? WHERE system.system_id = ?";
				
					$data = array("$input->system_hostname", "$input->system_domain", "$input->system_description", "$input->system_os_icon", "$input->system_os_icon", "$input->system_os_group", "$input->system_os_group", "$input->system_os_family", "$input->system_os_family", "$input->system_os_name", "$input->system_os_name", "$input->system_os_version", "$input->system_serial", "$input->system_model", "$input->system_manufacturer", "$input->system_uptime", "$input->system_form_factor", "$input->system_pc_os_bit", "$input->system_pc_memory", "$input->system_pc_num_processor", "$input->system_pc_date_os_installation", "$man_org_id", "$input->system_timestamp", "$input->system_timestamp", "$details->system_id");
				} else {
					$sql = " UPDATE system SET hostname = ?, domain = ?, description = ?, type = 'computer', icon = ?, man_icon = ?, os_group = ?, man_os_group = ?, os_family = ?, man_os_family = ?, os_name = ?, man_os_name = ?, os_version = ?, serial = ?, model = ?, manufacturer = ?, uptime = ?, form_factor = ?, pc_os_bit = ?, pc_memory = ?, pc_num_processor = ?, pc_date_os_installation = ?, last_seen = ?, last_seen_by = 'audit', timestamp = ? WHERE system.system_id = ?";
				
					$data = array("$input->system_hostname", "$input->system_domain", "$input->system_description", "$input->system_os_icon", "$input->system_os_icon", "$input->system_os_group", "$input->system_os_group", "$input->system_os_family", "$input->system_os_family", "$input->system_os_name", "$input->system_os_name", "$input->system_os_version", "$input->system_serial", "$input->system_model", "$input->system_manufacturer", "$input->system_uptime", "$input->system_form_factor", "$input->system_pc_os_bit", "$input->system_pc_memory", "$input->system_pc_num_processor", "$input->system_pc_date_os_installation", "$input->system_timestamp", "$input->system_timestamp", "$details->system_id");
				}
				$sql = $this->clean_sql($sql);
				$query = $this->db->query($sql, $data);
			}
		} else {
			// we insert a new entry
			$sql = "INSERT INTO system SET system_key = ?, uuid = ?, hostname = ?, domain = ?, description = ?, man_description = ?, type = ?, icon = ?, os_group = ?, os_family = ?, os_name = ?, os_version = ?, serial = ?, model = ?, manufacturer = ?, uptime = ?, form_factor = ?, man_form_factor = ?, pc_os_bit = ?, pc_memory = ?, man_status = 'production', man_manufacturer = ?, man_model = ?, man_serial = ?, man_icon = ?, man_os_group = ?, man_os_family = ?, man_os_name = ?, man_acting_server = 'no', man_type = 'computer', pc_num_processor = ?, pc_date_os_installation = ?, man_org_id = ?, last_seen = ?, last_seen_by = 'audit', first_timestamp = ?, timestamp = ?";

			$data = array($system_key, "$input->system_uuid", "$input->system_hostname", "$input->system_domain", "$input->system_description", "$input->system_description", "$input->system_type", "$input->system_os_icon", "$input->system_os_group", "$input->system_os_family", "$input->system_os_name", "$input->system_os_version", "$input->system_serial", "$input->system_model", "$input->system_manufacturer", "$input->system_uptime", "$input->system_form_factor", "$input->system_form_factor", "$input->system_pc_os_bit", "$input->system_pc_memory", "$input->system_manufacturer", "$input->system_model", "$input->system_serial", "$input->system_os_icon", "$input->system_os_group", "$input->system_os_family", "$input->system_os_name", "$input->system_pc_num_processor", "$input->system_pc_date_os_installation", "$man_org_id", "$input->system_timestamp", "$input->system_timestamp", "$input->system_timestamp");

			$sql = $this->clean_sql($sql);
			$query = $this->db->query($sql, $data);
			$details->system_id = $this->db->insert_id();
			echo "SystemID (new): <a href='" . base_url() . "index.php/main/system_display/" . $details->system_id . "'>" . $details->system_id . "</a>.<br />\n";
		} // end of if ($details['system_id'] <> '')
		return $details;
	} // end of function


	function is_server($details) {
		$sql = "SELECT * FROM sys_sw_software, system WHERE ( 
			sys_sw_software.software_name LIKE '%apache%' OR
			sys_sw_software.software_name LIKE '%IIS%' OR
			sys_sw_software.software_name LIKE '%sendmail%' OR
			sys_sw_software.software_name LIKE '%sql%server%' OR
			sys_sw_software.software_name LIKE '%postgres%' OR
			sys_sw_software.software_name LIKE '%bind%' OR 
			system.os_group = 'Windows 2003' OR
			system.os_group = 'Windows 2008' OR 
			( system.os_group = 'Windows 2000' AND system.os_name LIKE '%Server%' ) 
			) AND
			sys_sw_software.software_comment = '' AND 
			sys_sw_software.system_id = system.system_id AND
			sys_sw_software.timestamp = ? AND
			system.system_id = ? AND
			system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array($details->timestamp, $details->system_id, $details->timestamp);
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$sql = "UPDATE system SET man_acting_server = 'yes' WHERE system.system_id = ? AND system.timestamp = ?";
		} else {
			$sql = "UPDATE system SET man_acting_server = 'no' WHERE system.system_id = ? AND system.timestamp = ?";
		}
		$data = array($details->system_id, $details->timestamp);
		$query = $this->db->query($sql, $data);
	}
	
	function read_server($system_id) {
		$sql = "SELECT man_acting_server FROM system WHERE system_id = ? LIMIT 1";
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$return = $row->man_acting_server; 
		}
		if (($return == '') OR (isnull($return))){
			$return = 'no';
		}
		return $return;
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

	function process_other_system($details) {
		# check if MAN + MOD + SER already exist and system is in PROD state
		$sql = "SELECT system.system_id FROM system WHERE system.man_manufacturer = ? AND system.man_model = ? AND system.man_serial = ? AND system.man_status = ? ORDER BY timestamp LIMIT 1";
		$data = array($details->man_manufacturer, $details->man_model, $details->man_serial, $details->man_status);
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$details->system_id = $row->system_id; 
			echo "System already exists - exiting.<br />\n";
			echo "Return to <a href='add_system'> Add System</a> page.<br />\n";
			exit();
		}
		$sql = "INSERT INTO system (";
		foreach ($details as $key => $value) {
			$sql .= $key . ",";
		}
		$sql = substr($sql, 0, -1);
		$sql .= ") VALUES (";
		foreach ($details as $key => $value) {
			$sql .= "\"" . $value . "\",";
		}
		$sql = substr($sql, 0, -1);
		$sql .= ")";
		$query = $this->db->query($sql);
		return($this->db->insert_id());
	}
}
?>
