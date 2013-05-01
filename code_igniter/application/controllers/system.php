<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8.1
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
 
class System extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("m_system");
		# No need for "user" to be logged in
		# Have to be able to submit systems via the audit script
		$this->data['title'] = 'Open-AudIT';
	}

	function index() {
		$this->load->view('v_system_add', $this->data);
	}

	function add_nmap() {
		if (isset($_POST['form_nmap'])) {
			$this->load->helper('url');
			$this->load->helper('xml');
			$this->load->library('encrypt');
			if (extension_loaded('snmp')) { 
				$this->load->helper('snmp'); 
				$this->load->helper('snmp_oid'); 
			}
			$this->load->model("m_system");
			$this->load->model("m_oa_group");
			$timestamp = date('Y-m-d H:i:s');
			$xml_input = $_POST['form_nmap'];

			try {
				$xml = new SimpleXMLElement($xml_input);
			} catch (Exception $e) {
				# not a valid XML string
				$error_output = "Invalid XML input for NMap import.";
				error_log($error_output);
				exit;
			}
			$count = 0;

			echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" 
			\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
			<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">";
			echo "<head>
			<title>Open-AudIT</title>
			</head>\n
			<body>
			<pre>\n";

			foreach ($xml->children() as $device) {
				echo "Device IP: " . $device->man_ip_address . "\n";	
				$count++;
				$device->hostname = '';
				$device->hostname = gethostbyaddr($device->man_ip_address);
				$device->system_id = '';
				$device->system_id = $this->m_system->find_system($device);
				
				if (extension_loaded('snmp')) { 
					# try to get more information using SNMP
					$snmp_details = new stdClass;
					if ($device->system_id > '') {
						# get any access details
						$encrypted_access_details = $this->m_system->get_access_details($device->system_id);
						if ($encrypted_access_details == '') {
							# just attempt the default SNMP retrieval - 
							# community = public
							# version = 2c
							$snmp_details = get_snmp($device->man_ip_address);
						} else {
							$decoded_access_details = $this->encrypt->decode($encrypted_access_details);
							$decoded_access_details = json_decode($decoded_access_details);
							$snmp_details = get_snmp($decoded_access_details->ip_address, 
									$decoded_access_details->snmp_version, 
									@$decoded_access_details->snmp_community, 
									@$decoded_access_details->snmp_port, 
									@$decoded_access_details->snmp_v3_user, 
									@$decoded_access_details->snmp_v3_auth_pass, 
									@$decoded_access_details->snmp_v3_auth_key, 
									@$decoded_access_details->snmp_v3_auth_proto, 
									@$decoded_access_details->snmp_v3_priv_pass, 
									@$decoded_access_details->snmp_v3_priv_key, 
									@$decoded_access_details->snmp_v3_priv_proto );
						}
					} else {
						# just attempt the default SNMP retrieval - 
						# community = public
						# version = 2c
						$snmp_details = get_snmp($device->man_ip_address);
					}

					if (($snmp_details->mac == '') and ($device->mac_address > '')) {
						$snmp_details->mac = (string)$device->mac_address;
					}

					if (($snmp_details->man_type == '') and ($device->type > '')) {
						$snmp_details->man_type = (string)$device->type;
					}

					if (($snmp_details->type == '') and ($device->type > '')) {
						$snmp_details->type = (string)$device->type;
					}

					if (($snmp_details->device_type == '') and ($device->type > '')) {
						$snmp_details->device_type = (string)$device->type;
					}

					if ($device->manufacturer == 'VMware') {
						$snmp_details->manufacturer = 'VMware, Inc.';
						$snmp_details->man_manufacturer = 'VMware, Inc.';
						$snmp_details->model = 'VMware Virtual Platform';
						$snmp_details->man_model = 'VMware Virtual Platform';
					}

					$snmp_details->system_id = $this->m_system->find_system($snmp_details);
				}

				if ((isset($snmp_details->name)) and ($snmp_details->name > '')){
					# we received a result from SNMP, use this data to update or insert
					echo "Using SNMP details.\n";
					if ($snmp_details->system_id > '') {
						# we have a system_id, so update it
						$this->m_system->update_snmp($snmp_details);
					} else {
						# we have a new system
						$i = $this->m_system->insert_snmp($snmp_details);
					}
					$system_id = $i;
					$snmp_details->system_id = $i;
					$man_type = $snmp_details->man_type;
					$this->m_oa_group->update_system_groups($snmp_details);
				} else {
					# just insert or update the limited nmap data
					echo "Using Nmap details.\n";
					if ($device->system_id > '') {
						# we have a system_id, update
						# $this->m_system->update_nmap($device);
						$this->m_system->process_system_from_nmap($device);
					} else {
						# this is a new system - insert
						# $device->system_id = $this->m_system->insert_nmap($device);
						$i = $this->m_system->process_system_from_nmap($device);
						$device->system_id = $i->system_id;
						$device->man_type = $i->type;
						$system_id = $i->system_id;
					}
					$system_id = $device->system_id;
					$man_type = $device->man_type;
					$this->m_oa_group->update_system_groups($device);
				}

				echo "SystemID: <a href='" . base_url() . "index.php/main/system_display/" . $system_id . "'>" . $system_id . "</a> which is a '" . $man_type . "' device type.<br />\n";
				echo "<hr />\n";
			}
			echo $count . " systems processed.<br />";
			echo "<a href='" . base_url() . "index.php/system/add_nmap'>Back to input page</a><br />\n";
			echo "<a href='" . base_url() . "index.php'>Front Page</a><br />\n";
		} else {
			$this->load->view('v_system_add_nmap', $this->data);
		}
	}

	function add_system_ad() {
		if (isset($_POST['form_systemXML']) and $_POST['form_systemXML'] > '' ) {
			$this->load->helper('html');
			echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" 
			\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
			<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">";
			echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');
			echo "<head>
			<title>XHTML-document</title>
			</head>\n
			<body>\n";
			$this->load->helper('xml');
			$this->load->model("m_system");
			$this->load->model("m_oa_group");
			$timestamp = date('Y-m-d H:i:s');
			$input = html_entity_decode($_POST['form_reportXML']);
			$input = utf8_encode($input);
			$xml_input = iconv("UTF-8", "UTF-8//TRANSLIT", $input);
			try {
				$xml = new SimpleXMLElement($xml_input);
			} catch (Exception $e) {
				# not a valid XML string
				$error_output = "Invalid XML input for Active Directory import.";
				error_log($error_output);
				exit;
			}
			$count = 0;
			foreach ($xml->children() as $child) {
				$count++;
				if ($child->getName() == 'computer') { $details->system_id = ($this->m_system->process_system_from_ad($child));}
				$details->type = 'system';
				$this->m_oa_group->update_system_groups($details);
			}
			echo "<hr>\n";
			echo "Count: " . $count . "<br />\n";
			echo "<a href='" . base_url() . "index.php/system/add_system_ad'>Back to input page</a><br />\n";
			echo "AD Data submitted.<br />\n";
			echo "</body>\n</html>";
			exit;
		} else {
			$this->load->view('v_system_add_ad', $this->data);
		}
	}

	function add_system() {
		$this->benchmark->mark('code_start');
		$this->load->helper('url');
		set_time_limit(600);
		$this->load->helper('html');
		echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" 
		\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
		<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">";
		echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');
		echo "<head>
		<title>Open-AudIT</title>
		</head>\n
		<body>\n";
		echo "<a href='" . base_url() . "index.php/system'>Back to input page</a><br />\n";
		echo "<a href='" . base_url() . "index.php'>Front Page</a><br />\n";
		$this->load->model("m_alerts");
		$this->load->model("m_bios");
		$this->load->model("m_database");
		$this->load->model("m_database_details");
		$this->load->model("m_dns");
		$this->load->model("m_group");
		$this->load->model("m_hard_drive");
		$this->load->model("m_ip_address");
		$this->load->model("m_log");
		$this->load->model("m_memory");
		$this->load->model("m_monitor");
		$this->load->model("m_motherboard");
		$this->load->model("m_network_card");
		$this->load->model("m_optical_drive");
		$this->load->model("m_partition");
		$this->load->model("m_print_queue");
		$this->load->model("m_printer");
		$this->load->model("m_processor");
		$this->load->model("m_route");
		$this->load->model("m_scsi_controller");
		$this->load->model("m_service");
		$this->load->model("m_share");
		$this->load->model("m_software");
		$this->load->model("m_software_key");
		$this->load->model("m_sound");
		$this->load->model("m_sys_man_audits");
		$this->load->model("m_user");
		$this->load->model("m_video");
		$this->load->model("m_variable");
		$this->load->model("m_windows");
		$this->load->model("m_webserver");

		#date_default_timezone_set("Australia/Queensland");
		$timestamp = date('Y-m-d H:i:s');
		
		# first, undo what the XSS filter does
		$input = html_entity_decode($_POST['form_systemXML']);
		
		# then convert to UTF8 (if required)
		if ( mb_detect_encoding($input) <> "UTF-8") {
			$input = utf8_encode($input);
		}
		
		$xml_input = iconv("UTF-8", "UTF-8//TRANSLIT", $input);	
		
		libxml_use_internal_errors(true);
		$xml = simplexml_load_string($xml_input);
		if ($xml === false) {
			echo "Failed loading XML\n";
			foreach(libxml_get_errors() as $error) {
				echo "<pre>\n";
				print_r($error);
				echo "</pre>\n";
			}
			exit;
		}
		
		try {
			$xml = new SimpleXMLElement($xml_input, LIBXML_NOCDATA);
		} catch (Exception $e) {
			# not a valid XML string
			$xml_split = explode("\n", $xml_input, 10);
			$hostname = str_replace("\t\t<system_hostname>", "", $xml_split[5]);
			$hostname = str_replace("</system_hostname>", "", $hostname);
			$error_output = "Invalid XML input for: " . $hostname;
			error_log($error_output);
			exit;
		}

		// new code to account for a system detected by nmap that
		// may not have a traditional system_key / system_uuid
		// we will check to see if any reported MAC Addresses are already
		// in the sys_hw_network_card table.
		// If they are, grab the system id
		// $mac_address_array = array();
		// foreach ($xml->children() as $child) {
		// 	if ($child->getName() == 'network_cards') {  
		// 		foreach($xml->network_cards->network_card as $input) { 
		// 			$mac_address_array .= $input->net_mac_address;
		// 		}
		// 	}
		// }
		// we now have an array of all MAC addresses in this PC
		// we will send this to process_sys
		

		
		foreach ($xml->children() as $child) {
			if ($child->getName() == 'sys')				{ $details = ($this->m_system->process_sys($xml->sys)); $this->m_sys_man_audits->insert_audit($details);}
			if ($child->getName() == 'audit_wmi_fail') 	{ $this->m_sys_man_audits->update_audit($details, $child->getName()); $this->m_sys_man_audits->update_wmi_fails($xml->audit_wmi_fail, $details); }
			if ($child->getName() == 'windows') 		{ $this->m_sys_man_audits->update_audit($details, $child->getName()); $this->m_windows->process_windows($xml->windows, $details); }
			if ($child->getName() == 'bios') 			{ $this->m_sys_man_audits->update_audit($details, $child->getName()); $this->m_bios->process_bios($xml->bios, $details); }
			if ($child->getName() == 'processor') 		{ $this->m_sys_man_audits->update_audit($details, $child->getName()); $this->m_processor->process_processor($xml->processor, $details); } 
			if ($child->getName() == 'motherboard') 	{ $this->m_sys_man_audits->update_audit($details, $child->getName()); $this->m_motherboard->process_motherboard($xml->motherboard, $details); }
			if ($child->getName() == 'database') 		{ $this->m_sys_man_audits->update_audit($details, $child->getName()); $this->m_database->process_database($xml->database, $details); }
			if ($child->getName() == 'webserver') 		{ $this->m_sys_man_audits->update_audit($details, $child->getName()); $this->m_webserver->process_webserver($xml->webserver, $details); }
			if ($child->getName() == 'services') 		{ $this->m_sys_man_audits->update_audit($details, $child->getName()); $this->m_service->process_service($xml->services, $details); }
			if ($child->getName() == 'software') 		{ $this->m_sys_man_audits->update_audit($details, $child->getName()); $this->m_software->process_software($xml->software, $details); }
			if ($child->getName() == 'dns') 			{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->dns->dns_entry as $input) 	{ $this->m_dns->process_dns($input, $details); } }
			if ($child->getName() == 'database_details'){ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->database_details->details as $input)	{ $this->m_database_details->process_db_details($input, $details); } }
			if ($child->getName() == 'groups') 			{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->groups->group as $input) 		{ $this->m_group->process_group($input, $details); } }
			if ($child->getName() == 'hard_disks') 		{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->hard_disks->hard_disk as $input) 	{ $this->m_hard_drive->process_hard_drive($input, $details); } }
			if ($child->getName() == 'logs') 			{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->logs->log as $input) 			{ $this->m_log->process_log($input, $details); } }
			if ($child->getName() == 'memory') 			{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->memory->slot as $input) 		{ $this->m_memory->process_memory($input, $details); } }
			if ($child->getName() == 'monitors') 		{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->monitors->monitor as $input) 		{ $this->m_monitor->process_monitor($input, $details); } }
			if ($child->getName() == 'addresses') 		{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->addresses->ip_address as $input) 	{ $this->m_ip_address->process_addresses($input, $details); } }
			if ($child->getName() == 'partitions') 		{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->partitions->partition as $input) 	{ $this->m_partition->process_partitions($input, $details); } }
			if ($child->getName() == 'printers') 		{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->printers->printer as $input) 		{ $this->m_printer->process_printer($input, $details); $this->m_print_queue->process_print_queue($input, $details);} }
			if ($child->getName() == 'routes') 			{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->routes->route as $input) 		{ $this->m_route->process_route($input, $details); } }
			if ($child->getName() == 'shares') 			{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->shares->share as $input) 		{ $this->m_share->process_shares($input, $details); } }
			if ($child->getName() == 'software_keys')	{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->software_keys->key as $input) 		{ $this->m_software_key->process_software_key($input, $details); } }
			if ($child->getName() == 'sound_cards') 	{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->sound_cards->sound_card as $input) 	{ $this->m_sound->process_sound_cards($input, $details); } }
			if ($child->getName() == 'users') 			{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->users->user as $input) 			{ $this->m_user->process_user($input, $details); } }
			if ($child->getName() == 'variables') 		{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->variables->variable as $input) 		{ $this->m_variable->process_variable($input, $details); } }
			if ($child->getName() == 'video_cards') 	{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->video_cards->video_card as $input) 	{ $this->m_video->process_video_cards($input, $details); } }
			if ($child->getName() == 'scsi_controllers'){ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->scsi_controllers->scsi_controller as $input) { $this->m_scsi_controller->process_scsi_controller($input, $details); } }
			if ($child->getName() == 'optical_drives') 	{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->optical_drives->optical_drive as $input) { $this->m_optical_drive->process_optical_drives($input, $details); } }
			if ($child->getName() == 'network_cards') 	{ $this->m_sys_man_audits->update_audit($details, $child->getName()); foreach($xml->network_cards->network_card as $input) 	 { $this->m_network_card->process_network_cards($input, $details); } }
		} 
		$this->m_sys_man_audits->update_audit($details, 'finished xml processing');
		
		// Now generate any needed alerts
		$this->m_sys_man_audits->update_audit($details, 'generate initial audit alert'); 
		if ($details->original_timestamp == '') {
			// We have a new PC, so generate an alert
			$this->m_alerts->generate_alert($details->system_id, 'system', $details->system_id, 'system detected', $details->timestamp);
			// And also take an educated guess as to whether this PC is being used as a server
			$this->m_system->is_server($details);
			// And also set it's IP Address in system.man_ip_address
			$this->m_ip_address->set_initial_address($details);
		}	

		// double check man_ip_address
		$this->m_sys_man_audits->update_audit($details, 'check man_ip_address'); 
		$dhcp = FALSE;
		$network_details = $this->m_network_card->get_system_network($details->system_id);
		foreach ($network_details as $card){
			if ($card->net_dhcp_enabled <> '') {
				$dhcp = TRUE;
			}
		}
		$this->m_sys_man_audits->update_audit($details, 'double check man_ip_address'); 
		$man_ip_address = $this->m_system->check_man_ip_address($details->system_id);
		if (($man_ip_address == '000.000.000.000') OR ($man_ip_address == '') OR ($dhcp == TRUE)){
			$this->m_ip_address->set_initial_address($details);
		}
		
		

		$this->m_sys_man_audits->update_audit($details, 'now generate any needed alerts'); 
		if (($details->original_timestamp != '') && ($details->exist_type != 'bulk')) {
			$this->m_sys_man_audits->update_audit($details, 'alerts'); 
			// We have to go through all tables, checking for
			// entries with current_timestamp = first_timestamp
			$this->m_bios->alert_bios($details);
			$this->m_group->alert_group($details);
			$this->m_hard_drive->alert_hard_drive($details);
			if ($dhcp != TRUE) {
				$this->m_ip_address->alert_ip_address($details);
			}
			$this->m_log->alert_log($details);
			$this->m_memory->alert_memory($details);
			$this->m_monitor->alert_monitor($details);
			$this->m_motherboard->alert_motherboard($details);
			$this->m_network_card->alert_network_card($details);
			$this->m_optical_drive->alert_optical_drive($details);
			$this->m_partition->alert_partition($details); #TODO - check if NOT a USB drive
			$this->m_processor->alert_processor($details);
			if ($dhcp != TRUE) {
				$this->m_route->alert_route($details);
			}
			$this->m_scsi_controller->alert_scsi_controller($details);
			$this->m_service->alert_service($details);
			$this->m_share->alert_share($details);
			$this->m_software->alert_software($details);
			$this->m_software_key->alert_software_key($details);
			$this->m_sound->alert_sound($details);
			$this->m_variable->alert_variable($details);
			$this->m_video->alert_video($details);
			#$this->m_database_details->alert_db_details($details);  #TODO check if this is complete
		}
		
		
		$this->load->model("m_oa_group");
		// update any tags for new printers
		$this->m_sys_man_audits->update_audit($details, 'network printers'); 
		$network_printers = $this->m_printer->get_new_network_printer($details);
		if (count($network_printers) > 0) {
			foreach ($network_printers as $printer) {
				$this->m_oa_group->update_system_groups($printer);
			}
		}
		// Finally, update any tags for this system
		$this->m_sys_man_audits->update_audit($details, 'system groups'); 
		$this->m_oa_group->update_system_groups($details);
		$this->m_sys_man_audits->update_audit($details, ""); 
		$this->benchmark->mark('code_end');
		echo "<br />Time: " . $this->benchmark->elapsed_time('code_start', 'code_end') . ' seconds.';
		echo "</body>\n</html>";
	}
}
