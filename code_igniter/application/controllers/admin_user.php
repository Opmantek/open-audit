<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin_user extends MY_Controller {

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

/*
	function delete_user() {
		$this->load->model("m_oa_user");
		$this->data['query'] = $this->m_oa_user->delete_user($this->data['id']);
		redirect('admin_user/list_users');
	}
*/

	function deactivate_user() {
		$this->load->model("m_oa_user");
		$this->data['query'] = $this->m_oa_user->deactivate_user($this->data['id']);
		redirect('admin_user/list_users');
	}

	function activate_user() {
		$this->load->model("m_oa_user");
		$this->data['query'] = $this->m_oa_user->activate_user($this->data['id']);
		redirect('admin_user/list_users');
	}

	function list_users() {
		$this->load->model("m_oa_user");
		$this->data['query'] = $this->m_oa_user->get_all_users($this->data['id']);
		$this->data['heading'] = 'List Users';
		$this->data['include'] = 'v_list_users'; 
		$this->data['sortcolumn'] = '0';
		$this->load->view('v_template', $this->data);
	}

	function edit_user() {
		$this->load->model("m_oa_user");
		$this->load->model("m_oa_group");
		$this->load->helper('url');
		if (!isset($_POST['EditUser'])) {
			# load the initial form
			$this->data['user'] = $this->m_oa_user->get_user_details($this->data['id']);
			$this->data['user_group'] = $this->m_oa_group->get_all_user_groups($this->data['id']);
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
			if ($details->user_password != $details->user_password_confirm) {
				$error = '1';
				$this->data['error_message'] = "Passwords must match.";
				$this->data['user'] = $this->m_oa_user->get_user_details($details->user_id);
				$this->data['user_group'] = $this->m_oa_group->get_all_user_groups($details->user_id);
				$this->data['heading'] = 'Edit User';
				$this->data['include'] = 'v_edit_user'; 
				$this->load->view('v_template', $this->data);
			}
			
			if ($this->m_oa_user->check_user_name($details->user_name, $details->user_id) == FALSE) {
				$error = '1';
				$this->data['error_message'] = "Username already exists.";
				$this->data['user'] = $this->m_oa_user->get_user_details($details->user_id);
				$this->data['user_group'] = $this->m_oa_group->get_all_user_groups($details->user_id);
				$this->data['heading'] = 'Edit User';
				$this->data['include'] = 'v_edit_user'; 
				$this->load->view('v_template', $this->data);
			}
			
			if ($error == '0') {
				$this->m_oa_user->edit_user($details);
				$this->m_oa_group->edit_user_groups($details);
				redirect('admin_user/list_users');
			}
		}
	}
	
	function add_user() {
		if (!isset($_POST['AddUser'])) {
			# load the initial form
			$this->load->model("m_oa_group");
			$this->data['query'] = $this->m_oa_group->get_all_groups();
			$this->data['total_count'] = $this->m_oa_group->count_all_groups();
			$this->data['heading'] = 'Add User';
			$this->data['include'] = 'v_add_user'; 
			$this->load->view('v_template', $this->data);
		} else {
			# process the form
			foreach ($_POST as $key => $value) {
				$details->$key = $value;
			}
			$this->load->model("m_oa_group");
			$this->load->model("m_oa_user");
			if (is_null($this->m_oa_user->select_user($details->user_name))) {
				#user does not exist - good
				$details->user_id = $this->m_oa_user->add_user($details);
				$this->m_oa_group->edit_user_groups($details);
			} else {
				$this->data['error_message'] = "Username already exists.";
				$this->load->model("m_oa_group");
				$this->data['query'] = $this->m_oa_group->get_all_groups();
				$this->data['total_count'] = $this->m_oa_group->count_all_groups();
				$this->data['heading'] = 'Add User';
				$this->data['include'] = 'v_add_user'; 
				$this->load->view('v_template', $this->data);
			}
			redirect('admin_user/list_users');
		}
	}
}
