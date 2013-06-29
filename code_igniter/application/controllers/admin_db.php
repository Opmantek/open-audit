<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin_db extends MY_Controller {

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

	function export_table() {
		# load the export form
		$this->load->model("m_oa_admin_database");
		$this->data['query'] = $this->m_oa_admin_database->get_tables_and_row_count();
		$this->data['heading'] = 'Export a Database Table';
		$this->data['include'] = 'v_list_tables'; 
		$this->load->view('v_template', $this->data);
	}
	
	function backup() {
		# load the backup table page
		$this->load->model("m_oa_admin_database");
		$this->data['query'] = $this->m_oa_admin_database->backup_database();
	}

	function export_table_to_excel() {
		set_time_limit(240);
		$this->load->model("m_oa_admin_database");
		$this->data['query'] = $this->m_oa_admin_database->export_table($this->data['id']);
		$this->data['heading'] = $this->data['id'] . " table rows";
		$this->excel_report($this->data['query']);
	}

	function export_table_to_html() {
		set_time_limit(240);
		$this->load->model("m_oa_admin_database");
		$this->data['query'] = $this->m_oa_admin_database->export_table($this->data['id']);
		$this->data['heading'] = $this->data['id'] . " table rows";
		$this->data['include'] = 'v_export_table'; 
		$this->load->view('v_template', $this->data);
	}

	function export_table_to_csv() {
		set_time_limit(240);
		$this->load->model("m_oa_admin_database");
		$this->data['query'] = $this->m_oa_admin_database->export_table($this->data['id']);
		$this->data['heading'] = $this->data['id'] . " table rows";
		$this->csv_report($this->data['query']);
	}
	
	function get_non_production_systems() {
		set_time_limit(240);
		$this->load->model("m_system");
		$this->data['query'] = $this->m_system->get_non_production_systems();
		$this->data['count'] = count($this->data['query']);
		$this->data['heading'] = "Get Non Production Systems";
		$this->data['include'] = 'v_export_table'; 
		$this->load->view('v_template', $this->data);
		
	}	

	function delete_non_production_systems() {
		set_time_limit(240);
		$this->load->model("m_system");
		$this->data['query'] = $this->m_system->delete_non_production_systems();
		$this->data['count'] = '1';
		$this->data['heading'] = "Delete Non Production Systems";
		$this->data['include'] = 'v_general'; 
		$this->load->view('v_template', $this->data);
		
	}	

}
