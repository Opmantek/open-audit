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
				if ((mb_strpos($field, 'man_') !== false) and (mb_strpos($field, 'man_acting_server') === false) and (mb_strpos($field, 'man_type') === false)) {
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
			$this->data['heading'] = 'Add Systems';
			$this->data['include'] = 'v_add_systems'; 
			$this->load->view('v_template', $this->data);
		} 
		if ( isset($_POST['submit_file']) ) {
			# we have an uploaded file - store and process			
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
					
					if (isset($details['man_ip_address'])) {
						$details['man_ip_address'] = $this->ip_address_to_db($details['man_ip_address']);
					}

					if ( !isset($details['hostname']) OR $details['hostname'] == '' ) {
						# we dont have a hostname, therefore substitute the IP Address
						if ( isset($details['man_ip_address']) ) {
							$details['hostname'] = $details['man_ip_address'];
						} else {
							$details['hostname'] = 'unknown';
						}
					}
					$details['hostname'] = mb_strtolower($details['hostname']);

					if ( (!isset($details['type'])) OR ($details['type'] == '') ) {
						$details['type'] = 'system';
					}
					
					if (!isset($details['icon'])) {
						$details['icon'] = '';
					}

					if (isset($details['uuid'])) {
						#$details['system_key'] = $details['uuid'] . '-' . $details['hostname'];
					} else {
						$details['uuid'] = '';
						#$details['system_key'] = $details['hostname'];
					}

					if (!isset($details['description'])) {
						$details['description'] = '';
					}

					if (!isset($details['os_group'])) {
						$details['os_group'] = '';
					}

					if (!isset($details['os_family'])) {
						$details['os_family'] = '';
					}

					if (!isset($details['os_name'])) {
						$details['os_name'] = '';
					}

					if (!isset($details['os_version'])) {
						$details['os_version'] = '';
					}

					if (!isset($details['serial'])) {
						$details['serial'] = '';
					}

					if (!isset($details['model'])) {
						$details['model'] = '';
					}

					if (!isset($details['manufacturer'])) {
						$details['manufacturer'] = '';
					}

					if (!isset($details['form_factor'])) {
						$details['form_factor'] = '';
					}

					if (!isset($details['man_os_group'])) {
						$details['man_os_group'] = $details['os_group'];
					}

					if (!isset($details['man_os_family'])) {
						$details['man_os_family'] = $details['os_family'];
					}

					if (!isset($details['man_os_name'])) {
						$details['man_os_name'] = $details['os_name'];
					}

					if (!isset($details['man_status'])) {
						$details['man_status'] = 'production';
					}

					if (!isset($details['man_description'])) {
						$details['man_description'] = $details['description'];
					}

					if (!isset($details['man_serial'])) {
						$details['man_serial'] = $details['serial'];
					}

					if (!isset($details['man_model'])) {
						$details['man_model'] = $details['model'];
					}

					if (!isset($details['man_manufacturer'])) {
						$details['man_manufacturer'] = $details['manufacturer'];
					}

					if (!isset($details['man_form_factor'])) {
						$details['man_form_factor'] = $details['form_factor'];
					}

					if (!isset($details['man_icon'])) {
						$details['man_icon'] = $details['icon'];
					}

					if (!isset($details['system_id'])) {
						$system_id = $this->m_system->get_system_id_from_hostname($details['hostname']);
					} else {
						$system_id = $details['system_id'];
					}

					
					if ($system_id > '') {
						# we need to update an existing system
						unset($details['timestamp']);
						$sql = "UPDATE system SET ";
						foreach ($details as $detail=>$value) {
							if ($value != '') {
								$sql .= $detail . " = '" . mysql_real_escape_string($value) . "', "; 
							}
						}
						$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
						$sql .= " WHERE system_id = '" . $system_id . "'";
						# run the query !!!
						#echo $sql . "<br /><br />\n";
						$query = $this->db->query($sql);
						$details['system_id'] = $system_id;
					} else {
						# this is a new system (we don't have a hostname match)
						$details['timestamp'] = date('Y-m-d H:i:s');
						$details['first_timestamp'] = $details['timestamp'];
						$sql = "INSERT INTO system ( ";
						foreach ($details as $detail=>$value) {
							$sql .= $detail . ", "; 
						}
						$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
						$sql .= " ) VALUES ( ";
						foreach ($details as $detail=>$value) {
							$sql .= "'" . mysql_real_escape_string(str_replace('"', '', $value)) . "', "; 
						}
						$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
						$sql .= ")";
						# run the query !!!
						#echo $sql . "<br /><br />\n";
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
				}
			}
			redirect('main/index');
		}
		if ( isset($_POST['submit_xml']) AND isset($_POST['form_systemXML']) AND $_POST['form_systemXML'] > '') {
			# we have XML text - process
			echo "XML processing<br />\n";
			$this->load->helper('xml');
			$this->load->model("m_oa_location");
			$xml = new SimpleXMLElement(utf8_encode(str_replace('&', '&amp;', $_POST['form_systemXML'])));
			foreach ($xml->children() as $child) {
				if ($location_id = $this->m_oa_location->get_location_id($child->location_name)) {
					# we need to update an existing location
					$sql = "UPDATE oa_location SET ";
					foreach ($child->children() as $detail) {
						$sql .= $detail->getName() . " = '" . $detail . "', "; 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= " WHERE location_name = '" . $child->location_name . "'";
				} else {
					# this is a new location (we don't have a name match)
					$sql = "INSERT INTO oa_location ( ";
					foreach ($child->children() as $detail) {
						$sql .= $detail->getName() . ", "; 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= " ) VALUES ( ";
					foreach ($child->children() as $detail) {
						$sql .= "'" . $detail . "', "; 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= ")";
				}
				if ($child->location_name != '') { 
					# run the query !!!
					$query = $this->db->query($sql);
				} else { 
					echo "no location name provided"; 
				}
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
