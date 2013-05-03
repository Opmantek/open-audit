<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin_system extends MY_Controller {

	function __construct() {
		parent::__construct();
		// must be an admin to access this page
		if ($this->session->userdata('user_admin') != 'y') {
			if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
				redirect($_SERVER['HTTP_REFERER']);
			} else {
				redirect('login/index');
			}
		}
	}

	function index() {
		redirect('/');
	}

	function add_system_def() {
		if (!isset($_POST['AddSystemDef'])) {
			$this->load->model("m_oa_admin_database");
			$this->data['fields'] = $this->m_oa_admin_database->get_fields('system');
			$this->data['custom_fields'] = $this->m_oa_admin_database->export_table('sys_man_additional_fields');
			$result = array();
			foreach ($this->data['fields'] as $field)
			{
				if ((mb_strpos($field, 'man_') !== false) and 
					(mb_strpos($field, 'man_type') === false)) {
					$result[] = $field;
				}
			}
			sort($result);
			$this->data['fields'] = $result;
			$this->data['heading'] = 'Add System Definition';
			$this->data['include'] = 'v_add_system_def'; 
			$this->load->view('v_template', $this->data);
		} else {
			# process the form
			$this->data['error_message'] = '';
			echo "<pre>\n"; print_r($_POST); echo "</pre>\n";
			$select_string = '';
			foreach ($_POST as $key => $value) {
				if (($value == 'on') and (strpos($key, "man_") !== false)){
					$select_string .= 'system.' . $key . ', ';
				}
			}
			$select_string = substr($select_string, 0, strlen($select_string)-2);
			
			echo "NAME: " . $_POST['name'] . "<br />\n";
			echo "TYPE: " . $_POST['man_type'] . "<br />\n";
			echo "SELECT: " . $select_string . "<br />\n";
			
			$select_custom = '';
			foreach ($_POST as $key => $value) {
				if (strpos($key, "custom_new_") !== false) {
					echo "CUSTOM: " . $key . " - " . $value . "<br />\n";
					$select_custom .= 'sys_man_additional_fields.' . $value . ', ';
				}
			}
			foreach ($_POST as $key => $value) {
				if (($value == 'on') and (strpos($key, "custom_exist_") !== false)){
					echo "Custom Existing: " . $key . " - " . $value . "<br />\n";
					$new_key = str_replace("custom_exist_", "", $key);
					$select_custom .= 'sys_man_additional_fields.' . $new_key . ', ';
				}
			}
			$select_custom = substr($select_custom, 0, strlen($select_custom)-2);
			echo "SELECT CUSTOM: " . $select_custom . "<br />\n";
		}
	}

	function system_add_credentials() {
		if (!isset($_POST['AddCredentials'])) {
			$details = new stdClass;
			$details->system_id = intval($this->uri->segment(3,0));
			if ( (!is_int($details->system_id)) or ($details->system_id == 0)) { redirect('main/list_devices'); }
			$this->load->model("m_system");	
			$this->data['system_id'] = $details->system_id;
			$this->data['ip_address'] = ip_address_from_db($this->m_system->check_man_ip_address($details->system_id));
			$this->data['heading'] = 'Add Device SNMP Credentials';
			$this->data['include'] = 'v_add_system_c'; 
			$this->load->view('v_template', $this->data);
		} else {
			$system_id = $_POST['system_id'];
			$this->load->model("m_system");	
			$this->load->library('encrypt');
			if (($_POST['snmp_community'] > '') and ($_POST['snmp_version'] > '') and ($_POST['ip_address'] > '')) {
				$encode['ip_address'] = $_POST['ip_address'];
				$encode['snmp_version'] = $_POST['snmp_version'];
				$encode['snmp_community'] = $_POST['snmp_community'];
				$encoded = json_encode($encode);
				$encoded = $this->encrypt->encode($encoded);
				$this->m_system->update_system_man($system_id, 'access_details', $encoded);
				if ($_POST['snmp_scan'] == TRUE) { 
					redirect('admin_system/system_snmp/' . $system_id); 
				} else {
					redirect('main/system_display/' . $system_id);
				}
			} else { 
				redirect('admin_system/system_add_credentials/' . $system_id);
			}
				#$encode['fqdn'] = $device['fqdn'];
				#$encode['hostname'] = $device['hostname'];
				#$encode['snmp_v3_sec_name'] = '';
				#$encode['snmp_v3_sec_level'] = '';
				#$encode['snmp_v3_auth_protocol'] = $device['authprotocol'];
				#$encode['snmp_v3_auth_passphrase'] = $device['authpassword'];
				#$encode['snmp_v3_priv_protocol'] = $device['privprotocol'];
				#$encode['snmp_v3_priv_passphrase'] = $device['privpassword'];
		}
	}

	function system_snmp() {
		// check to make sure we have SNMP capability
		if (!extension_loaded('snmp')) { redirect('main/list_devices'); }
		$this->load->model("m_system");	
		$this->load->library('encrypt');
		$this->load->helper('snmp');
		$this->load->helper('snmp_oid');
		$details = new stdClass;
		$details->system_id = $this->uri->segment(3,0);
		if (intval($details->system_id) == $details->system_id) {
			$encrypted_access_details = $this->m_system->get_access_details($details->system_id);
			if ($encrypted_access_details == '') {
				# redirect to a form to input the details
				redirect('admin_system/system_add_credentials/' . $details->system_id);
			}
			$decoded_access_details = $this->encrypt->decode($encrypted_access_details);
			$decoded_access_details = json_decode($decoded_access_details);
			#echo "<pre>\n";
			#print_r($decoded_access_details);
			$details = get_snmp($decoded_access_details->ip_address, 
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
			#print_r($details);
			$details->system_id = $this->uri->segment(3,0);
			$this->m_system->update_snmp($details);
		}
		#print_r($details);
		redirect('main/system_display/' . $details->system_id);
	}

	function add_system() {
		if (!isset($_POST['AddSystem'])) {
			# load the initial form
			$this->load->model("m_oa_org");	
			$this->data['orgs'] = $this->m_oa_org->get_org_names();
			$this->load->model("m_oa_location");	
			$this->data['locations'] = $this->m_oa_location->get_location_names();
			$this->load->model("m_systems");
			$this->data['os_group'] = $this->m_systems->get_distinct_os_group();
			$this->data['os_family'] = $this->m_systems->get_distinct_os_family();
			$this->data['os_name'] = $this->m_systems->get_distinct_os_name();
			$this->data['heading'] = 'Add Device';
			$this->data['include'] = 'v_add_system'; 
			$this->load->view('v_template', $this->data);
		} else {
			# process the form
			$this->data['error_message'] = '';
			$this->load->model('m_system');
			$this->load->model('m_oa_group');
			$details = new stdClass();
			foreach ($_POST as $key => $value) {
				$details->$key = $value;
			}
			$details->type = $details->man_type;
			if (($details->man_manufacturer == '') or ($details->man_model == '') or ($details->man_serial == '')) {
				$this->data['error_message'] = 'Please complete all required attributes.';
			}
			
			if (isset($details->man_ip_address)) { $details->man_ip_address = $this->ip_address_to_db($details->man_ip_address); }
			
			if ($details->man_type == 'local printer') {
				if ($details->hostname > '') {
					if ($details->linked_sys = $this->m_system->get_system_id_from_hostname($details->hostname)) {
						unset($details->hostname);
					} else {
						$this->data['error_message'] = 'That hostname is not valid.';
					}
				} else {
					$this->data['error_message'] = 'Hostname required.';
				}
			}
			if (($details->man_type == 'system') and ($details->hostname == '')){
				$this->data['error_message'] = 'Hostname required.';
			}
			if (($details->man_type == 'network printer') and ($details->man_ip_address == '000.000.000.000')){
				$this->data['error_message'] = 'Valid IP Address required';
			}
			if ((($details->man_type == 'cell phone') or ($details->man_type == 'sat phone') or ($details->man_type == '3g modem') or ($details->man_type == 'smart phone')) and ($details->man_service_number == '')) {
				$this->data['error_message'] = 'Phone number required';
			}
			if (($details->man_os_group_2 > '') and ($details->man_os_group == '')) { 
				$details->man_os_group = $details->man_os_group_2;
				unset($details->man_os_group_2);
			} else {
				unset($details->man_os_group_2);
			}
			if (($details->man_os_family_typed > '') and ($details->man_os_family == '')) { 
				$details->man_os_family = $details->man_os_family_typed;
				unset($details->man_os_family_typed);
			} else {
				unset($details->man_os_family_typed);
			}
			if (($details->man_os_name_2 > '') and ($details->man_os_name == '')) { 
				$details->man_os_name = $details->man_os_name_2;
				unset($details->man_os_name_2);
			} else {
				unset($details->man_os_name_2);
			}
				
			unset($details->AddSystem);
			if ($this->data['error_message'] > '') {
				# reload the initial form
				$submitted_data = array();
				foreach ($_POST as $key => $value) {
					$submitted_data[$key] = $value;
				}
				$this->load->model("m_systems");
				$this->data['os_group'] = $this->m_systems->get_distinct_os_group();
				$this->data['os_family'] = $this->m_systems->get_distinct_os_family();
				$this->data['os_name'] = $this->m_systems->get_distinct_os_name();
				$this->data["form"] = $submitted_data;
				$this->load->model("m_oa_org");	
				$this->data['orgs'] = $this->m_oa_org->get_org_names();
				$this->load->model("m_oa_location");	
				$this->data['locations'] = $this->m_oa_location->get_location_names();
				$this->data['heading'] = 'Add Device';
				$this->data['include'] = 'v_add_system'; 
				$this->load->view('v_template', $this->data);
			} else {
				$details->timestamp = date('Y-m-d H:i:s');
				$details->first_timestamp = $details->timestamp;
				$details->icon = $details->man_icon;
				# finally add the system
				$details->system_id = $this->m_system->process_other_system($details);
				# need to add to Groups now
				$this->m_oa_group->update_system_groups($details);
				redirect('main/index');
			}
		}
	}

	function add_systems() {
		if ( !isset($_POST['submit_xml']) AND !isset($_POST['submit_file']) ) {
			# nothing submitted - display the form
			$this->data['heading'] = 'Add Devices';
			$this->data['include'] = 'v_add_systems'; 
			$this->load->view('v_template', $this->data);
		} 
		if ( isset($_POST['submit_file']) ) {
			# we have an uploaded file - store and process	
			$import_timestamp = date("Y-m-d H:i:s");
			$target_path = BASEPATH . "../application/uploads/" . basename( $_FILES['upload_file']['name']);
			if(move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path)) {
				# echo "The file ".  basename( $_FILES['upload_file']['name']). " has been uploaded.<br />\n";
			} else {
				echo "There was an error uploading the file, please try again!<br />\n";
				exit();
			}
			require_once BASEPATH . '../application/libraries/phpexcel/PHPExcel/IOFactory.php';
			if (!$objPHPExcel = PHPExcel_IOFactory::load($target_path)) { exit; }
			$attributes = array();
			$details = array();
			$object = new stdClass();
			$this->load->model("m_system");
			$this->load->model("m_oa_org");
			$this->load->model("m_oa_location");
			$objWorksheet = $objPHPExcel->getActiveSheet();
			$count = 0;
			$error = '';
			$this->data['error'] = '';
			$error_details = array();
			foreach ($objWorksheet->getRowIterator() as $row) {
				$count++;
				$cellIterator = $row->getCellIterator();
				$cellIterator->setIterateOnlyExistingCells(false); 
				if ($count == 1) {
					# grab the first row and use as column names
					foreach ($cellIterator as $cell) {
						$attributes[] = $cell->getValue();
					}
				} else {
					# populate the array values
					$cellIterator = $row->getCellIterator();
					$cellIterator->setIterateOnlyExistingCells(false); 
					$cell_number = 0;
					foreach ($cellIterator as $cell) {
						$details[$attributes[$cell_number]] = $cell->getValue();
						$cell_number++;
					}

					if (isset($details['org_name'])) {
						# we have an org name - need to find it's ID
						if($org_id = $this->m_oa_org->select_org($details['org_name'])) {
							# we have a matching org
							$details['man_org_id'] = $org_id;
						} else {
							# no matching org name
						}
					} 
					
					if (isset($details['location_name'])) {
						# we have a location name - need to find it's ID
						if ($location_id = $this->m_oa_location->get_location_id($details['location_name'])) {
							# we have a match
							$details['man_location_id'] = $location_id;
						} else {
							# no match
						}
					}
					unset($details['location_name']);					

					# default to a 'computer' type if none provided
					if ( (!isset($details['type'])) OR ($details['type'] == '') ) { $details['type'] = 'computer'; }
					
					# ensure we have something not null for all the below
					if (!isset($details['description'])) { $details['description'] = ''; }
					if (!isset($details['domain'])) { $details['domain'] = ''; }
					if (!isset($details['form_factor'])) { $details['form_factor'] = ''; }
					if (!isset($details['fqdn'])) { $details['fqdn'] = ''; }
					if (!isset($details['icon']) or $details['icon'] == '') { $details['icon'] = str_replace(" ", "_", $details['type']); }
					if (!isset($details['hostname'])) { $details['hostname'] = ''; }
					if (!isset($details['last_seen'])) { $details['last_seen'] = $import_timestamp; }
					if (!isset($details['manufacturer'])) { $details['manufacturer'] = ''; }
					if (!isset($details['model'])) { $details['model'] = ''; }
					if (!isset($details['os_family'])) { $details['os_family'] = ''; }
					if (!isset($details['os_group'])) { $details['os_group'] = ''; }
					if (!isset($details['os_name'])) { $details['os_name'] = ''; }
					if (!isset($details['os_version'])) { $details['os_version'] = ''; }
					if (!isset($details['man_status'])) { $details['man_status'] = 'production'; }
					if (!isset($details['man_environment'])) { $details['man_environment'] = 'production'; }
					if (!isset($details['serial'])) { $details['serial'] = ''; }
					if (!isset($details['type']) or $details['type'] == '') { $details['type'] = 'unknown'; }
					if (!isset($details['uuid'])) { $details['uuid'] = ''; }

					# account for any "man_" items
					if (!isset($details['man_description'])) { $details['man_description'] = $details['description']; }
					if (!isset($details['man_form_factor'])) { $details['man_form_factor'] = $details['form_factor']; }
					if (!isset($details['man_icon'])) { $details['man_icon'] = $details['icon']; }
					if (!isset($details['man_manufacturer'])) { $details['man_manufacturer'] = $details['manufacturer']; }
					if (!isset($details['man_ip_address'])) { $details['man_ip_address'] = ''; }
					if (!isset($details['man_model'])) { $details['man_model'] = $details['model']; }
					if (!isset($details['man_os_family'])) { $details['man_os_family'] = $details['os_family']; }
					if (!isset($details['man_os_group'])) { $details['man_os_group'] = $details['os_group']; }
					if (!isset($details['man_os_name'])) { $details['man_os_name'] = $details['os_name']; }
					if (!isset($details['man_status'])) { $details['man_status'] = $details['status']; }
					if (!isset($details['man_serial'])) { $details['man_serial'] = $details['serial']; }
					if (!isset($details['man_type'])) { $details['man_type'] = $details['type']; }


					$details['last_seen_by'] = "spreadsheet";


					# setting the system_key - try the uuid + hostname
					if (isset($details['uuid']) and $details['uuid'] != '' and 
						isset($details['hostname']) and $details['hostname'] != '' and 
						!isset($details['system_key'])) {
						$details['system_key'] = $details['uuid'] . "-" . $details['hostname'];
						$this->data['error'] = "uuid + hostname<br />\n";
					}
					# setting the system_key - try for a FQDN
					if (isset($details['fqdn']) and $details['fqdn'] != '' and !isset($details['system_key'])) {
						$details['system_key'] = $details['fqdn'];
					}
					# setting the system_key - try for a hostname and domain to make a FQDN
					if (isset($details['hostname']) and $details['hostname'] != '' and 
						isset($details['domain'])   and $details['domain'] != '' and 
						!isset($details['system_key'])) {
						$details['system_key'] = $details['hostname'] . "." . $details['domain'];
					}
					# setting the system_key - try for a serial
					if (isset($details['serial']) and $details['serial'] != '' and !isset($details['system_key'])) {
						$details['system_key'] = $details['serial'];
					}
					# setting the system_key - we don't have the required info to create a unique key
					if (!isset($details['system_key']) or $details['system_key'] == '') {
						$error .= "Error on row #" . $count . ". Insufficient details to create system key. Please supply (in order of preference) fqdn, hostname and domain, ip address or (unique) serial.<br />";
						$error_details[] = $details;
					}

					# make sure we have a name (a hostname)
					if ((!isset($details['hostname']) or $details['hostname'] == '') and isset($details['man_ip_address'])) {
						$details['hostname'] = $details['man_ip_address'];
					}
					if ((!isset($details['hostname']) or $details['hostname'] == '') and isset($details['description'])) {
						$details['hostname'] = $details['description'];
					}
					if ((!isset($details['hostname']) or $details['hostname'] == '') and isset($details['serial'])) {
						$details['hostname'] = $details['serial'];
					}
					if (!isset($details['hostname']) or $details['hostname'] == '') {
						$error .= "Error on row #" . $count . ". Insufficient details to create name. Please supply wither hostname or IP Address for a networked device, a description or a serial for a non-networks device.<br />";
						$error_details[] = $details;
					}

					$details['hostname'] = preg_replace("/[^a-z0-9-.]+/i", "", $details['hostname']);
					$details['hostname'] = mb_strtolower($details['hostname']);
					if (isset($details['man_ip_address'])) { $details['man_ip_address'] = $this->ip_address_to_db($details['man_ip_address']); }

					# try to determine if this device is already in the database
					if (!isset($details['system_id']) or $details['system_id'] == '') {
						$details['system_id'] = $this->m_system->find_system($details);
					} 
					
					



					if (!$error > '') {
						if ($details['system_id'] > '') {
							# we need to update an existing system
							unset($details['timestamp']);
							$sql = "UPDATE system SET ";
							foreach ($details as $detail=>$value) {
								if ($value != '') {
									$sql .= $detail . " = '" . mysql_real_escape_string($value) . "', "; 
								}
							}
							$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
							$sql .= " WHERE system_id = '" . $details['system_id'] . "'";
							$query = $this->db->query($sql);
						} else {
							# this is a new system (we don't have a hostname match)
							$details['timestamp'] = date('Y-m-d H:i:s');
							$details['first_timestamp'] = $details['timestamp'];
							$sql = "INSERT INTO system ( ";
							foreach ($details as $detail=>$value) {
								if ($detail > '') {
									$sql .= $detail . ", "; 
								}
							}
							$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
							$sql .= " ) VALUES ( ";
							foreach ($details as $detail=>$value) {
								if ($detail > '') {
									$sql .= "'" . mysql_real_escape_string(str_replace('"', '', $value)) . "', "; 
								}
							}
							$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
							$sql .= ")";
							$query = $this->db->query($sql);
							$details['system_id'] = $this->db->insert_id();
						}
						// convert the $details array to an object
						if (!isset($details['timestamp'])){ $details['timestamp'] = date('Y-m-d H:i:s'); }
						$details_object = (object) $details;
						// Insert an entry in to the audit log
						$this->load->model("m_sys_man_audits");
						$this->m_sys_man_audits->insert_audit($details_object);
						// Finally, update 'tags'
						$this->load->model("m_oa_group");
						$this->m_oa_group->update_system_groups($details_object);
						unset($details);
					} else {
						$this->data['error'] .= $error;
						$error = '';
					}
				}
			}
			unlink($target_path);
			if (isset($this->data['error']) and $this->data['error'] > '') {
				# there were errors with processing.
				$this->data['query'] = $error_details;;
				$this->data['heading'] = 'Error'; 
				$this->data['include'] = 'v_error'; 
				$this->data['export_report'] = 'y';
				$this->data['group_id'] = '0';
				$this->load->view('v_template', $this->data);
			} else {
				redirect('main/index');
			}
		}
	}

	function list_devices_in_location() {
		$this->load->model("m_oa_location");
		$this->load->model("m_oa_group_column");
		$this->data['query'] = $this->m_oa_location->list_devices_in_location($this->data['id'], $this->data['user_id']);
		$this->data['column'] = $this->m_oa_group_column->get_group_column();
		$location_name = $this->m_oa_location->get_location_name($this->data['id']);
		$this->data['heading'] = 'Systems in Location - ' . $location_name; 
		$this->data['include'] = 'v_report'; 
		$this->data['export_report'] = 'y';
		$this->data['group_id'] = '0';
		if ($this->data['user_admin'] == 'y') {
			$this->data['user_access_level'] = '10';
		} else {
			$this->data['user_access_level'] = '3';
		}
		$this->determine_output($this->uri->segment($this->uri->total_rsegments()));
	}

	function list_devices_in_org() {
		$this->load->model("m_oa_org");
		$this->load->model("m_oa_group_column");
		$this->data['user_access_level'] = '7';
		$this->data['query'] = $this->m_oa_org->list_devices_in_org($this->data['id'], $this->data['user_id']);
		$this->data['column'] = $this->m_oa_group_column->get_group_column();
		$org_name = $this->m_oa_org->get_org_name($this->data['id']);
		$this->data['heading'] = 'Systems in Org - ' . $org_name; 
		$this->data['include'] = 'v_report'; 
		$this->data['export_report'] = 'y';
		$this->data['group_id'] = '0';
		if ($this->data['user_admin'] == 'y') {
			$this->data['user_access_level'] = '10';
		} else {
			$this->data['user_access_level'] = '3';
		}
		$this->determine_output($this->uri->segment($this->uri->total_rsegments()));
	}

	function ip_address_to_db($ip) {
		if (($ip <> "") AND (!(is_null($ip))) AND (substr_count($ip, '.') == 3)) {
			$myip = explode(".",$ip);
			$myip[0] = mb_substr("000" . $myip[0], -3);
			$myip[1] = mb_substr("000" . $myip[1], -3);
			$myip[2] = mb_substr("000" . $myip[2], -3);
			$myip[3] = mb_substr("000" . $myip[3], -3);
			$ip_post = $myip[0] . "." . $myip[1] . "." . $myip[2] . "." . $myip[3];
		} else {
			$ip_post = "000.000.000.000";
		}
		return $ip_post;
	}

}
