<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
 
class Main extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		redirect('main/list_groups/');
	}


	function view_org() {
		$this->load->model("m_oa_org");
		$this->data['org'] = $this->m_oa_org->get_org_details($this->data['id']);
		$this->data['include'] = 'v_org'; 
		$this->data['sortcolumn'] = '1';
		$this->data['heading'] = 'View Organisation';
		$this->load->view('v_template', $this->data);
	}

	function view_location() {
		$this->load->model("m_oa_location");
		$this->data['location'] = $this->m_oa_location->get_location_details($this->data['id']);
		$this->data['include'] = 'v_location'; 
		$this->data['sortcolumn'] = '1';
		$this->data['heading'] = 'View Location';
		$this->load->view('v_template', $this->data);
	}

	function edit_systems() {
		$this->load->model("m_oa_group");
		if (is_numeric($_POST['group_id'])) {
			// we must check to see if the user has at least VIEW permission on the group
			$this->data['user_access_level'] = $this->m_oa_group->get_group_access($_POST['group_id'], $this->data['user_id']);
			if ( $this->data['user_access_level'] < '10')
			{
				// not enough permission - redirect
				redirect('main/list_groups/');
			}
		} else {
			redirect('main/list_groups/');
		}
		$this->load->model("m_system");
		$this->load->model("m_oa_location");
		$this->load->model("m_oa_org");
		$this->data['locations'] = $this->m_oa_location->get_all_locations();
		$this->data['orgs'] = $this->m_oa_org->get_org_names();
		$data['query'] = array();
		foreach ($_POST as $key => $value) {
			if (mb_strpos($key, 'system_id_') !== false) {
				$system = $this->m_system->get_system_summary(mb_substr($key, 10));
				foreach ($system as $system_2) {
					array_push($data['query'], $system_2);
				}
			}
			if (mb_strpos($key, 'group_id') !== false) {
				$this->data['group_id'] = $value;
			}
		}
		$this->data['query'] = $data['query'];
		$this->data['include'] = 'v_edit_systems'; 
		$this->data['sortcolumn'] = '1';
		$this->data['heading'] = 'Edit Systems';
		$this->load->view('v_template', $this->data);
	}

	function process_edit_systems() {
		if (!(isset($_POST['submit']))) {
			redirect('main/list_groups/');
		}
		$this->load->model("m_oa_group");
		if (is_numeric($_POST['group_id'])) {
			// we must check to see if the user has at least VIEW permission on the group
			$this->data['user_access_level'] = $this->m_oa_group->get_group_access($_POST['group_id'], $this->data['user_id']);
			if ( $this->data['user_access_level'] < '10')
			{
				// not enough permission - redirect
				redirect('main/list_groups/');
			}
		} else {
			redirect('main/list_groups/');
		}
		$this->load->model("m_system");
		$this->load->library('encrypt');
		$group_id = $_POST['group_id'];
		$data['items'] = array();
		foreach ($_POST as $key => $value) {
			if ( (mb_strpos($key, 'man_') !== false) && ($value != '') ){
				$item = array($key, $value);
				array_push($data['items'], ($item));
				$item = NULL;
			}
		}
		$data['systems'] = array();
		foreach ($_POST as $key => $value) {
			if ( (mb_strpos($key, 'system_') !== false) && ($value != '') ){
				$item = array($key, $value);
				array_push($data['systems'], ($item));
				$item = NULL;
			}
		}

		# create the SNMP credentials
		if (($_POST['snmp_community'] > '') and ($_POST['snmp_version'] > '')) {
			foreach ($data['systems'] as $system) {
				$encode['ip_address'] = ip_address_from_db($this->m_system->check_man_ip_address($system[1]));
				# make sure the device in question actually has an ip address
				if (($encode['ip_address'] > '') and ($encode['ip_address'] <> '0.0.0.0')) {
					$encode['snmp_version'] = $_POST['snmp_version'];
					$encode['snmp_community'] = $_POST['snmp_community'];
					$encoded = json_encode($encode);
					$encoded = $this->encrypt->encode($encoded);
					$this->m_system->update_system_man($system[1], 'access_details', $encoded);
				}
			}
		}
		foreach ($_POST as $field_name => $field_data) {
			# input all the manual fields 
			if ( (mb_strpos($field_name, 'man_') !== false) && ($field_data != '') ){
				foreach ($data['systems'] as $system) {
					$this->m_system->update_system_man($system[1], $field_name, $field_data);
				}
			}
		}
		foreach ($data['systems'] as $system) {
			$details->system_id = $system[1];
			$details->type = 'computer';
			$this->m_oa_group->update_system_groups($details);
		}
		redirect('/main/list_devices/' . $group_id);
	}

	function list_groups() {
		$this->load->model("m_oa_group");
		$this->data['query'] = $this->m_oa_group->get_user_groups($this->data['user_id']);
		$this->data['heading'] = 'Groups'; 
		$this->data['include'] = 'v_main'; 
		$this->data['sortcolumn'] = '2';
		$this->data['export_report'] = 'y';
		$this->determine_output($this->uri->segment($this->uri->total_rsegments()));
	}

	function list_devices() {
		$this->load->model("m_oa_group");
		if (is_numeric($this->data['id'])) {
			// we must check to see if the user has at least VIEW permission on the group
			$this->data['user_access_level'] = $this->m_oa_group->get_group_access($this->data['id'], $this->data['user_id']);
			if ( $this->data['user_access_level'] < '3')
			{
				// not even VIEW permission - redirect
				redirect('main/list_groups/');
			}
		} else {
			redirect('main/list_groups/');
		}
		$this->load->model("m_systems");
		$this->data['heading'] = 'List Devices';
		if ($this->data['id'] != '0') {
			$this->data['heading'] = $this->m_oa_group->get_group_name($this->data['id']);
		}
				
		$segs = $this->uri->segment_array();
		$i = 0;
		$filter = array();
		foreach ($segs as $segment) {
			if ( ( (strpos($segment, 'out') === 0) || (strpos($segment, 'only') === 0) ) && (strpos($segment, '___') ) ) {
				$filter_array = explode("___", $segment);
				$filter[$i]['variable'] = $filter_array[1];
				$filter[$i]['value'] = str_replace("%20", " ", html_entity_decode($filter_array[2]));
				if ($filter_array[0] == 'only') {
					$filter[$i]['condition'] = '=';
				} else {
					$filter[$i]['condition'] = '<>';
				}
				$i++;
			}
		}
		
		$this->load->model("m_oa_group_column");
		$this->data['column'] = $this->m_oa_group_column->get_group_column($this->data['id']);
		$this->data['query'] = $this->m_systems->get_group_systems($this->data['id']);
		
		$remove = FALSE;
		$new_query = array();
		if (count($filter) > 0 ) {
			foreach ($this->data['query'] as $key) {
				foreach ($filter as $enum_filter) {
					if (property_exists($key, $enum_filter['variable'])) {
						if ( ($key->$enum_filter['variable'] == $enum_filter['value']) && ($enum_filter['condition'] == '<>') ){
							$remove = TRUE;
						} 
						if (($key->$enum_filter['variable'] != $enum_filter['value']) && ($enum_filter['condition'] == '=') ){
							$remove = TRUE;
						}
					}
				}
				if ($remove == TRUE) {
					# do not push this object to the new array
				} else {
					# we want to keep this element - no matches above.
					# push this onto the new query array
					$new_query[] = $key;
				}
				$remove = FALSE;
			}
			$this->data['query'] = $new_query;
		}

		$this->data['count'] = count($this->data['query']);
		$this->data['group_id'] = $this->data['id'];
		$this->data['include'] = 'v_report'; 
		$this->data['sortcolumn'] = '2';
		$this->data['export_report'] = 'y';
		$this->determine_output($this->uri->segment($this->uri->total_rsegments()));
	}

	function search() {
		# TODO: for completeness we should check if user is admin and if not, check is search is allowed in confg variable
		if ($this->data['id'] == '') {
			redirect('main/list_groups/');
		}
		if ( ($this->data['id'] > '0') && (is_int($this->data['id'])) ) {
			// we must check to see if the user has at least VIEW permission on the group
			if ( $this->m_oa_group->get_group_access($this->data['id'], $this->data['user_id']) < '3')
			{
				// not even VIEW permission - redirect
				redirect('main/list_groups/');
			}
		}
		if (isset($_POST["search"])) {
			redirect('main/search/' . $this->data['id'] . '/' . $_POST['search']);
		}
		$this->data['group_id'] = $this->uri->segment(3,0);
		$this->data['search_term'] = urldecode($this->uri->segment(4,0));
		$this->data['search_term'] = html_entity_decode($this->data['search_term']);
		$this->load->model("m_systems");
		$result = $this->m_systems->search($this->data['search_term'], $this->data['group_id']);
		$this->data['query'] = $result;
		$this->data['heading'] = 'Search Result (' . $this->data['search_term'] . ")";
		$this->data['include'] = 'v_search_result'; 
		$this->data['sortcolumn'] = '0';
		$this->data['export_report'] = 'y';
		$this->determine_output($this->uri->segment($this->uri->total_rsegments()));
	}

	function disk_graph() {
		$this->load->model("m_partition");
		$this->load->model("m_system");
		$this->data['system_id'] = $this->uri->segment(3, 0);
		$this->data['partition_id'] = $this->uri->segment(4, 0);
		$this->data['days'] = $this->uri->segment(5, 0);
		if ($this->data['days'] > "0") {
			//
		} else {
			$this->data['days'] = "30";
		}
		$this->data['query'] = $this->m_partition->get_partition_graph($this->data['system_id'], $this->data['partition_id'], $this->data['days']);
		$this->data['count'] = count($this->data['query']);
		$this->data['include'] = 'v_partition_graph';
		$this->data['sortcolumn'] = '0';
		$system_name = $this->m_system->get_system_hostname($this->data['system_id']);
		$this->data['heading'] = 'Storage use for ' . $system_name ;
		$this->data['partition_details'] = $this->m_partition->get_partition_details($this->data['partition_id']);
		$this->load->view('v_template', $this->data);
    }

	function database_graph() {
		$this->load->model("m_database_details");
		$this->load->model("m_system");
		$this->data['system_id'] = $this->uri->segment(3, 0);
		$this->data['database_id'] = $this->uri->segment(4, 0);
		$this->data['days'] = $this->uri->segment(5, 0);
		if ($this->data['days'] > "0") {
			//
		} else {
			$this->data['days'] = "30";
		}
		$this->data['query'] = $this->m_database_details->get_database_graph($this->data['system_id'], $this->data['database_id'], $this->data['days']);
		$this->data['count'] = count($this->data['query']);
		$this->data['include'] = 'v_database_graph';
		$this->data['sortcolumn'] = '0';
		$system_name = $this->m_system->get_system_hostname($this->data['system_id']);
		$this->data['heading'] = 'Storage use for ' . $system_name ;
		#$this->data['database_details'] = $this->m_partition->get_partition_details($this->data['partition_id']);
		$this->load->view('v_template', $this->data);
	}

	function help_about() {
		$this->data['heading'] = 'About Open-AudIT'; 
		$this->data['include'] = 'v_help_about'; 
		$this->data['export_report'] = 'n';
		$this->load->view('v_template', $this->data);
	}

	function help_statistics() {
		# need to check if being called from localhost.
		$this->load->model("m_oa_admin_database");
		$this->data['stats'] = $this->m_oa_admin_database->statistics();
		$this->data['heading'] = 'Statistics'; 
		$this->data['include'] = 'v_help_statistics'; 
		$this->data['export_report'] = 'n';
		$this->load->view('v_template', $this->data);
	}

	function help_faq() {
		$this->data['heading'] = 'Frequently Asked Questions'; 
		$this->data['include'] = 'v_help_faq'; 
		$this->load->view('v_template', $this->data);
	}

	function help_how_do_i() {
		$this->data['heading'] = 'How Do I?'; 
		$this->data['include'] = 'v_help_how_do_i'; 
		$this->load->view('v_template', $this->data);
	}

	function help_importing() {
		$this->data['heading'] = 'Importing Devices'; 
		$this->data['include'] = 'v_help_importing'; 
		$this->load->view('v_template', $this->data);
	}

	function help_oae() {
		$this->data['heading'] = 'Open-AudIT Enterprise'; 
		$this->data['include'] = 'v_help_oae'; 
		$this->load->view('v_template', $this->data);
	}

	function help_opmaps() {
		$this->data['heading'] = 'opMaps'; 
		$this->data['include'] = 'v_help_opmaps'; 
		$this->load->view('v_template', $this->data);
	}

	function add_attachment() {
		$this->load->model("m_system");
		$system_id = $this->m_system->get_system_id($this->data['id']);
		if ($system_id > '0') {
			// we must check to see if the user has at least VIEW permission on the system
			$this->data['access_level'] = $this->m_system->get_system_access_level($system_id, $this->data['user_id']);
			if ( $this->data['access_level'] < '10') {
				// no 'edit details' permission - redirect
				redirect('main');
			}
		} else {
			// not a valid system (system_id, hostname or system_key)
			redirect('main');
		}
		
		if ( !isset($_POST['attachment']) AND !isset($_POST['submit']) ) {
			redirect('main');
		} else {
			# we have an uploaded file - store and process			
			$target = BASEPATH . "../application/attachments/" . $_POST['system_id'] . "_" . basename( $_FILES['attachment']['name']);
			if(move_uploaded_file($_FILES['attachment']['tmp_name'], $target)) {
				$this->load->model("m_attachment");
				$this->m_attachment->create_system_attachment($_POST['system_id'], $_POST['title'], $target);
				redirect("main/system_display/" . $_POST['system_id']);
			} else {
				echo "There was an error uploading the file, please try again!<br />\n";
				exit();
			}
		}
	}

	function delete_attachment() {
		$this->load->model("m_attachment");
		$attachment_id = $this->data['id'];
		$attachment = $this->m_attachment->get_attachment($attachment_id);
		$system_id = $attachment->system_id;
		$this->load->model("m_system");
		if ($system_id > '0') {
			// we must check to see if the user has at least VIEW permission on the system
			$this->data['access_level'] = $this->m_system->get_system_access_level($system_id, $this->data['user_id']);
			if ( $this->data['access_level'] < '10') {
				// no 'edit details' permission - redirect
				redirect('main');
			}
		} else {
			// not a valid system (system_id, hostname or system_key)
			redirect('main');
		}
		$this->m_attachment->delete_attachment($attachment_id);
		unlink($attachment->att_filename);
		redirect("main/system_display/" . $attachment->system_id);
	}

	function show_attachment() {
		$this->load->model("m_attachment");
		$attachment = $this->m_attachment->get_attachment($this->data['id']);
		$system_id = $attachment->system_id;
		$this->load->model("m_system");
		if ($system_id > '0') {
			// we must check to see if the user has at least VIEW permission on the system
			$this->data['access_level'] = $this->m_system->get_system_access_level($system_id, $this->data['user_id']);
			if ( $this->data['access_level'] < '5') {
				// not even view permission - redirect
				redirect('main');
			}
		} else {
			// not a valid system (system_id, hostname or system_key)
			redirect('main');
		}
		$this->load->helper('file');
		$i = explode('/', $attachment->att_filename);
		$filename = $i[count($i)-1];
		header('Content-Type: ' . get_mime_by_extension($attachment->att_filename));
		#header('Content-Disposition: attachment;filename="' . $filename . '"');
		header('Content-Disposition: inline;filename="' . $filename . '"');
		header('Cache-Control: max-age=0');
		readfile($attachment->att_filename);
	}

	function download_attachment() {
		$this->load->model("m_attachment");
		$attachment = $this->m_attachment->get_attachment($this->data['id']);
		$system_id = $attachment->system_id;
		$this->load->model("m_system");
		if ($system_id > '0') {
			// we must check to see if the user has at least VIEW permission on the system
			$this->data['access_level'] = $this->m_system->get_system_access_level($system_id, $this->data['user_id']);
			if ( $this->data['access_level'] < '5') {
				// not even view permission - redirect
				redirect('main');
			}
		} else {
			// not a valid system (system_id, hostname or system_key)
			redirect('main');
		}
		$this->load->helper('file');
		$i = explode('/', $attachment->att_filename);
		$filename = $i[count($i)-1];
		header('Content-Type: ' . get_mime_by_extension($attachment->att_filename));
		header('Content-Disposition: attachment;filename="' . $filename . '"');
		#header('Content-Disposition: inline;filename="' . $filename . '"');
		header('Cache-Control: max-age=0');
		readfile($attachment->att_filename);
	}

	function system_display() {
		$this->load->model("m_system");
		$this->data['id'] = $this->m_system->get_system_id($this->data['id']);
		if ($this->data['id'] > '0') {
			// we must check to see if the user has at least VIEW permission on the system
			$this->data['access_level'] = $this->m_system->get_system_access_level($this->data['id'], $this->data['user_id']);
			if ( $this->data['access_level'] < '5') {
				// not even VIEW BASIC permission - redirect
				redirect('main');
			}
		} else {
			// not a valid system (system_id, hostname or system_key)
			redirect('main');
		}
		$this->load->model("m_oa_general");
		$this->load->model("m_additional_fields");
		$this->load->model("m_alerts");
		$this->load->model("m_attachment");
		$this->load->model("m_audit_log");
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
		$this->load->model("m_oa_location");
		$this->load->model("m_oa_org");
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
		$this->load->model("m_sound");
		$this->load->model("m_sys_man_audits");
		$this->load->model("m_user");
		$this->load->model("m_variable");
		$this->load->model("m_video");
		$this->load->model("m_webserver");
		$this->load->model("m_windows");
		$this->data['additional_fields_data'] = $this->m_additional_fields->get_additional_fields_data($this->data['id']);
		
		$sorted_names = $this->m_additional_fields->get_additional_fields_names();
		sort($sorted_names);
		$this->data['additional_fields_names'] = $sorted_names;
		$sort = $this->m_additional_fields->get_additional_fields($this->data['id']);
		sort($sort);
		$this->data['additional_fields'] = $sort;

		$this->data['alerts'] = $this->m_alerts->get_system_alerts($this->data['id']);
		$this->data['assembly'] = $this->m_software->get_system_software($this->data['id'], 6);
		$this->data['attachment'] = $this->m_attachment->get_system_attachment($this->data['id']);
		$this->data['audit_log'] = $this->m_audit_log->get_audit_log($this->data['id']);
		$this->data['audits'] = $this->m_sys_man_audits->get_system_audits($this->data['id']);
		
		#$this->data['bios'] = $this->m_bios->get_system_bios($this->data['id']);
		$this->data['bios'] = $this->m_oa_general->get_system_attribute('sys_hw_bios', '*', $this->data['id']);
		
		$this->data['codecs'] = $this->m_software->get_system_software($this->data['id'], 5);
		$this->data['database'] = $this->m_database->get_system_db($this->data['id']);
		$this->data['database_details'] = $this->m_database_details->get_system_db_details($this->data['id']);
		$this->data['dns'] = $this->m_dns->get_system_dns($this->data['id']);
		$this->data['hard_drive'] = $this->m_hard_drive->get_system_hard_drive($this->data['id']);
		$this->data['ip'] = $this->m_ip_address->get_system_ip($this->data['id']);
		$this->data['locations'] = $this->m_oa_location->get_location_names();
		$this->data['memory'] = $this->m_memory->get_system_memory($this->data['id']);
		$this->data['monitor'] = $this->m_monitor->get_system_monitor($this->data['id']);
		$this->data['motherboard'] = $this->m_motherboard->get_system_motherboard($this->data['id']);
		$this->data['network'] = $this->m_network_card->get_system_network($this->data['id']);
		$this->data['odbc'] = $this->m_software->get_system_software($this->data['id'], 3);
		$this->data['optical'] = $this->m_optical_drive->get_system_optical($this->data['id']);
		$this->data['orgs'] = $this->m_oa_org->get_all_orgs();
		$this->data['partition'] = $this->m_partition->get_system_partition($this->data['id']);
		$this->data['print_queue'] = $this->m_print_queue->get_print_queue($this->data['id']);
		$this->data['printer'] = $this->m_printer->get_system_printer($this->data['id']);
		$this->data['processor'] = $this->m_processor->get_system_processor($this->data['id']);
		$this->data['route'] = $this->m_route->get_system_route($this->data['id']);
		$this->data['scsi_controller'] = $this->m_scsi_controller->get_system_scsi_controller($this->data['id']);
		$this->data['service'] = $this->m_service->get_system_service($this->data['id']);

		#$this->data['share'] = $this->m_share->get_system_share($this->data['id']);
		$this->data['share'] = $this->m_oa_general->get_system_attribute('sys_sw_share', '*', $this->data['id']);

		$this->data['software'] = $this->m_software->get_system_software($this->data['id'], 0);
		$this->data['sound'] = $this->m_sound->get_system_sound($this->data['id']);

		#$this->data['system'] = $this->m_system->get_system_summary($this->data['id']);
		$this->data['system'] = $this->m_oa_general->get_attribute('system', '*', $this->data['id']);

		$this->data['system_group'] = $this->m_group->get_system_group($this->data['id']);
		$this->data['system_id'] = $this->data['id'];
		$this->data['system_location'] = $this->m_oa_location->get_system_location($this->data['id']);
		$this->data['system_org'] = $this->m_oa_org->get_system_org($this->data['id']);
		$this->data['system_log'] = $this->m_log->get_system_log($this->data['id']);
		$this->data['system_user'] = $this->m_user->get_system_user($this->data['id']);
		$this->data['system_variable'] = $this->m_variable->get_system_variable($this->data['id']);
		$this->data['updates'] = $this->m_software->get_system_software($this->data['id'], 2);
		$this->data['video'] = $this->m_video->get_system_video($this->data['id']);
		$this->data['windows'] = $this->m_windows->get_system_windows($this->data['id']);
		$this->data['webserver'] = $this->m_webserver->get_system_webserver($this->data['id']);
		$this->data['website_details'] = $this->m_webserver->get_system_websites($this->data['id']);

		# TODO: add in browser addons and odbc drivers
		
		# only show to users with 'view sensitive details' level of access access level >= 7
		if ( $this->data['access_level'] >= '7') {
			$this->load->model("m_software_key");
			$this->data['software_key'] = $this->m_software_key->get_system_key($this->data['id']);

			if ($this->data['system'][0]->access_details) {
				$this->load->library('encrypt');
				$this->data['decoded_access_details'] = $this->encrypt->decode($this->data['system'][0]->access_details);
				$this->data['decoded_access_details'] = json_decode($this->data['decoded_access_details']);
			}

		}

		$this->data['include'] = "";
		$formatted_type = str_replace(" ", "_", trim($this->data['system'][0]->man_type));
		
		if ($this->data['system'][0]->man_type == 'computer') {
			if(file_exists(APPPATH . "views/theme-" . $this->data['user_theme'] . "/v_display_computer_" . $this->data['system'][0]->man_os_group . ".php")) {
				$this->data['include'] = "v_display_computer_" . $this->data['system'][0]->man_os_group;
			} else { 
				$this->data['include'] = "v_display_computer";
			}

		} elseif (file_exists(APPPATH . "views/theme-" . $this->data['user_theme'] . "/v_display_" . $this->data['system'][0]->man_type . ".php")) {
			$this->data['include'] = "v_display_" . trim($this->data['system'][0]->man_type);

		} elseif (file_exists(APPPATH . "views/theme-" . $this->data['user_theme'] . "/v_display_" . $formatted_type . ".php")) {
			$this->data['include'] = "v_display_" . str_replace(" ", "_", trim($this->data['system'][0]->man_type));

		} else {
			$this->data['include'] = "v_display_general";
		}
		
		foreach ($this->data['system'] as $system) {
			$model_formatted = str_replace(" ", "_", trim(mb_strtolower($system->man_model)));
			$model_formatted = str_replace("/", "_", $model_formatted);
			$file_exists = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]) . 'device_images/' . $model_formatted . '.jpg';
			if ($system->man_picture > '') {
				$system->man_picture = $system->man_picture . '.jpg';
			}
			if ( ($system->man_picture == '') AND (file_exists($file_exists)) ) {
				$system->man_picture = '' . $model_formatted . '.jpg';
			}
			$type_formatted = str_replace(" ", "_", trim(mb_strtolower($system->man_type)));
			$file_exists = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]) . 'device_images/' . $type_formatted . '.png';

			if ( ($system->man_picture == '') AND (file_exists($file_exists)) ) {
				$system->man_picture = '' . $type_formatted . '.png';
			}
			if ($system->man_picture == '') { $system->man_picture = 'unknown.png'; }
		}

		$this->data['heading'] = 'Summary - ' . $this->m_system->get_system_hostname($this->data['id']);
		$this->load->view('v_template', $this->data);
	}

	function edit_user() {
		$this->load->model("m_oa_user");
		$this->load->model("m_oa_group");
		$this->load->helper('url');
		if (!isset($_POST['EditUser'])) {
			# load the initial form
			$this->data['user'] = $this->m_oa_user->get_user_details($this->data['user_id']);
			if ($this->session->userdata('user_admin') == 'y') {
				$this->data['user_group'] = $this->m_oa_group->get_all_user_groups($this->data['user_id']);
			}
			$this->data['heading'] = 'Edit User';
			$this->data['include'] = 'v_edit_user'; 
			$this->data['sortcolumn'] = '1';
			$this->data['url'] = current_url();
			$this->load->view('v_template', $this->data);
		} else {
			# process the form
			$error = '0';
			foreach ($_POST as $key => $value) {
				$details->$key = $value;
			}
			$details->user_id = $this->data['user_id'];
			if ($details->user_password != $details->user_password_confirm) {
				$error = '1';
				$this->data['error_message'] = "Passwords must match.";
				$this->data['user'] = $this->m_oa_user->get_user_details($this->data['user_id']);
				$this->data['user_group'] = $this->m_oa_group->get_all_user_groups($this->data['user_id']);
				$this->data['heading'] = 'Edit User';
				$this->data['include'] = 'v_edit_user'; 
				$this->data['url'] = current_url();
				$this->load->view('v_template', $this->data);
			}
			
			if ($this->m_oa_user->check_user_name($details->user_name, $details->user_id) == FALSE) {
				$error = '1';
				$this->data['error_message'] = "Username already exists.";
				$this->data['user'] = $this->m_oa_user->get_user_details($this->data['user_id']);
				$this->data['user_group'] = $this->m_oa_group->get_all_user_groups($this->data['user_id']);
				$this->data['heading'] = 'Edit User';
				$this->data['include'] = 'v_edit_user'; 
				$this->data['url'] = current_url();
				$this->load->view('v_template', $this->data);
			}
			
			if ($error == '0') {
				$this->m_oa_user->edit_user($details);
				if ($this->session->userdata('user_admin') == 'y') {
					$this->m_oa_group->edit_user_groups($details);
				}
				redirect('admin_user/list_users');
			}
		}
	}
	
}
