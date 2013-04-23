<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin_field extends MY_Controller {

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

	function list_fields() {
		$this->load->model("m_additional_fields");
		$this->data['query'] = $this->m_additional_fields->get_all_additional_fields();
		$this->data['heading'] = 'List Additional Fields';
		$this->data['include'] = 'v_list_fields'; 
		$this->data['sortcolumn'] = '0';
		$this->load->view('v_template', $this->data);
	}

	function add_field() {
		if (!isset($_POST['AddField'])) {
			# load the initial form
			$this->load->model("m_oa_group");
			$this->data['groups'] = $this->m_oa_group->get_all_groups();
			$this->data['heading'] = 'Add Additional Field';
			$this->data['include'] = 'v_add_field'; 
			$this->load->view('v_template', $this->data);
		} else {
			# process the form
			foreach ($_POST as $key => $value) {
				$details->$key = $value;
			}
			$this->load->model("m_additional_fields");
			$i = array();
			$i = $this->m_additional_fields->get_additional_field_id($details->field_name);
			if (count($i) > 0) {
				$this->data['error_message'] = "A Field with that name already exists.";
				$this->data['heading'] = 'Add Additional Field';
				$this->data['include'] = 'v_add_field'; 
				$this->load->view('v_template', $this->data);
			} else {
				# the field does not exist - good
				$this->m_additional_fields->add_additional_field($details);
			}
			unset($i);
			redirect('admin_field/list_fields');
		}
	}

	function edit_field() {
		$this->load->model("m_additional_fields");
		if (!isset($_POST['EditField'])) {
			# load the initial form
			$field_id = $this->uri->segment(3, '');
			$this->load->model("m_oa_group");
			$this->data['groups'] = $this->m_oa_group->get_all_groups();
			$this->data['field'] = $this->m_additional_fields->get_additional_field($field_id);
			$this->data['heading'] = 'Edit Additional Field';
			$this->data['include'] = 'v_edit_field'; 
			$this->data['sortcolumn'] = '1';
			$this->load->view('v_template', $this->data);
		} else {
			# process the form
			foreach ($_POST as $key => $value) {
				$details->$key = $value;
			}
			//echo "<pre>\n";
			//print_r($details);
			//echo "</pre>\n";
			//exit();
			$this->load->model("m_additional_fields");
			$i = array();
			$i = $this->m_additional_fields->check_additional_fields_name($details->field_name, $details->field_id);
			if (count($i) > 0) {
				echo "A Field with that name already exists.";
				//$this->data['error_message'] = "A Field with that name already exists.";
				//$this->data['heading'] = 'Add Additional Field';
				//$this->data['include'] = 'v_add_field'; 
				//$this->load->view('v_template', $this->data);
			} else {
				# the name does not exist - good
				$this->m_additional_fields->edit_additional_field($details);
			}
			unset($i);
			redirect('admin_field/list_fields');
		}
	}

	function delete_field() {
		$this->load->model("m_additional_fields");
		$this->m_additional_fields->delete_field($this->data['id']);
		redirect('admin_field/list_fields');
	}
}
