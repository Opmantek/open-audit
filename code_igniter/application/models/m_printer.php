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

class M_printer extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_system_printer($system_id) {
		$sql = "SELECT 	
				system_id, 
				man_description, 
				man_model, 
				man_manufacturer, 
				man_serial, 
				printer_port_name, 
				printer_shared, 
				printer_shared_name 
			FROM 
				system 
			WHERE 
				system.linked_sys = ? ";
		$sql = $this->clean_sql($sql);
		// note - need to fix and check for timestamp
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function get_new_network_printer($details) {
		$sql = "SELECT 	
				system_id, 
				type 
			FROM 
				system 
			WHERE 
				system.timestamp = ? AND 
				system.type = 'printer' AND 
				system.man_ip_address > '000.000.000.000' ";
		$sql = $this->clean_sql($sql);
		$sql = "SELECT system_id, type FROM system WHERE system.timestamp = ? AND system.type = 'printer' ";
		$data = array("$details->timestamp");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_printer($input, $details) {
		if ($input->printer_connection_status == 'OK') {
			# only put printers that actually exist in the DB
			$exist_type = '';

			# check for a local printer
			$sql = "SELECT system_id FROM system WHERE man_type = 'printer' AND linked_sys = ? AND (timestamp = ? OR timestamp = ?) AND system_key = ?";
			$data = array("$details->system_id", "$details->original_timestamp", "$details->timestamp", "$input->system_key");
			$query = $this->db->query($sql, $data);
			if ($query->num_rows() > 0) { 
				$row = $query->row();
				$system_id = $row->system_id;
				$exist_type = 'local'; 
			}
			
			if ($exist_type == '') {
				# if the above is empty, check for an network printer
				$sql = "SELECT system_id FROM system WHERE (man_type = 'printer' or type = 'network printer') AND man_ip_address = ? AND man_ip_address <> '000.000.000.000' ";
				$data = array($this->ip_address_to_db("$input->man_ip_address"));
				$query = $this->db->query($sql, $data);
				if ($query->num_rows() > 0) { 
					$row = $query->row();
					$system_id = $row->system_id;
					$exist_type = 'network'; 
				}
			}

			$serial = '';
			$input->serial = '';
			$snmp_model = "";
			$snmp_manufacturer = "";
			$manufacturer = "";
			$hex = FALSE;
			$snmp_description = "";
			
			if ($input->man_ip_address > '') {
				$type = 'network printer';
				$linked_sys = '';
				# Network printer, should try SNMP
				# Check if SNMP is enabled in PHP
				if (extension_loaded('snmp')) { 
					# SNMP is installed in PHP
					# Now run the SNMP query
					$serial = @snmp2_get($input->man_ip_address, "public", "1.3.6.1.2.1.43.5.1.1.17.1");
					if ($serial !== FALSE) {
						# SNMP query did return a result
						$serial = str_replace("STRING: ", "", $serial);
						$serial = str_replace('"', '', $serial);
						if (strpos($serial, "No Such Object available on this agent at this OID") === FALSE) {
							if (strpos($serial, "Hex-") === FALSE) {
								# The result was a serial number
								$input->serial = $serial;
							} else {
								$serial = str_replace("Hex-STRING: ", "", $serial);
								for ($i=0; $i<strlen($serial); $i++) {
									$new_serial .= chr(hexdec(substr($serial,$i,2))); 
								}
								$input->serial = $new_serial;
							}
						}
					}
					
					$hex = @snmp2_walk($input->man_ip_address, "public", "1.3.6.1.2.1.43.8.2.1.14.1");
					if ((is_array($hex)) and (count($hex) > 0)) {
						if (mb_strpos($hex[1], "Hex-STRING: ") !== FALSE) {
							$hex[1] = str_replace("Hex-STRING: ", "", $hex[1]);
							for ($i=0; $i<strlen($hex[1]); $i++) {
								$manufacturer .= chr(hexdec(substr($hex[1],$i,2)));
							}
							$snmp_manufacturer = str_replace("\"", "", str_replace("STRING: ", "", $manufacturer));
						} else {
							$snmp_manufacturer = str_replace("\"", "", str_replace("STRING: ", "", $hex[1]));
						}
					}
					if ($snmp_manufacturer > "") {
						if (stripos($snmp_manufacturer, "Hewlett") !== FALSE) {
							$snmp_manufacturer = "Hewlett Packard";
						}
						$snmp_manufacturer = ucfirst($snmp_manufacturer);
						$input->manufacturer = $snmp_manufacturer;
					}

					$snmp_model = @snmp2_get($input->man_ip_address, "public", "1.3.6.1.2.1.25.3.2.1.3.1");
					$snmp_model = str_replace("\"", "", str_replace("STRING: ", "", $snmp_model));
					if ($snmp_model > "") { $input->model = $snmp_model; }

					$snmp_description = @snmp2_get($input->man_ip_address, "public", "1.3.6.1.2.1.1.1.0");
					$snmp_description = str_replace("\"", "", str_replace("STRING: ", "", $snmp_description));
				} else {
					# SNMP extension not loaded
				}
			} else {
				$type = 'printer';
				$linked_sys = $details->system_id;
			}

			if ($exist_type > '') {
				# update a printer
				$sql = "UPDATE system SET timestamp = ?, serial = ?, type = ?, man_type = ? WHERE system_id = ?";
				$data = array("$details->timestamp", "$input->serial", "$type", "$type", "$system_id");
				$query = $this->db->query($sql, $data);
			}
			
			if ($exist_type == '') {
				# actually insert a new printer
				$sql = "INSERT INTO system (system_key, uuid, hostname, description, type, icon, linked_sys, serial, 
					man_serial, model, manufacturer, printer_port_name, printer_shared, printer_shared_name, 
					printer_color, printer_duplex, man_status, man_environment, man_description, man_type, 
					man_ip_address, man_model, man_manufacturer, man_icon, first_timestamp, timestamp, 
					last_seen, last_seen_by ) 
					VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
				$data = array( "$input->system_key", "$input->uuid", "$input->hostname", "$input->description", "$type", "printer", "$linked_sys", "$input->serial", 
					"$input->serial", "$input->model", "$input->manufacturer", "$input->printer_port_name", "$input->printer_shared", "$input->printer_shared_name", 
					"$input->printer_color", "$input->printer_duplex", "production", "production", "$input->description", "$type", 
					$this->ip_address_to_db($input->man_ip_address), "$input->model", "$input->manufacturer", "printer", "$details->timestamp", "$details->timestamp", 
					"$details->timestamp", "audit");
				$query = $this->db->query($sql, $data);

				$system_id = $this->db->insert_id();
				$inserted_via = 'audit';
				$inserted_user = '';
				$sql = "INSERT INTO sys_man_audits ( system_id, system_audits_username, system_audits_type, system_audits_time, timestamp ) VALUES (?, ?, ?, ?, ?)";
				$data = array("$system_id", "$inserted_user", "$inserted_via", "$details->timestamp", "$details->timestamp");
				$query = $this->db->query($sql, $data);
			}
		}
	} // end of function

	function alert_printer($details)
	{
		#$sql = "SELECT system.system_id, system.description
		#	FROM 	system
		#	WHERE 	system.linked_sys = ? AND
		#		system.first_timestamp = ? ";
		#		// does not account for local "not seen" printers yet
		#$data = array("$details->system_id", "$details->timestamp");
		#$query = $this->db->query($sql, $data);
		#$result = $query->result();
		#foreach ($result as $myrow){ 
		#	$alert_details = 'printer detected - ' . $myrow->description;
		#	$this->m_alerts->generate_alert($details->system_id, 'system', $myrow->system_id, $alert_details, $details->timestamp);
		#}
	}
}
?>