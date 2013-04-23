<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Change extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		redirect('/');
	}

	function edit_alert() {
		$this->load->model("m_alerts");
		$data['query'] = array();
		foreach ($_POST as $key => $value) {
			if (mb_strpos($key, 'alert_id_') !== false) {
				$alert = $this->m_alerts->get_alert_details(mb_substr($key, 9));
				foreach ($alert as $alert2) {
					array_push($data['query'], $alert2);
				}
			}
			if (mb_strpos($key, 'group_id') !== false) {
				$this->data['group_id'] = $value;
			}
		}
		$this->data['query'] = $data['query'];
		$this->data['include'] = 'v_edit_alert'; 
		$this->data['sortcolumn'] = '1';
		$this->data['heading'] = 'Edit Alerts';
		$this->load->view('v_template', $this->data);
	}

	
	function process_edit_alert() {
		if (!(isset($_POST['submit']))) {
			redirect('report/list_alerts/0');
		}		
		if (isset($_POST['change_type'])) {
			$details['change_type'] = $this->input->post('change_type');
		} else {
			$details['change_type'] = '';
		}
		if (isset($_POST['change_id'])) {
			$details['change_id'] = $this->input->post('change_id');
		} else {
			$details['change_id'] = '';
		}
		if ($details['change_id'] == '') {
			$details['change_id'] = '1';
		}
		if (isset($_POST['external_change_id'])) {
			$details['external_change_id'] = $this->input->post('external_change_id');
		} else {
			$details['external_change_id'] = '';
		}
		if (isset($_POST['external_change_link'])) {
			$details['external_change_link'] = $this->input->post('external_change_link');
		} else {
			$details['external_change_link'] = '';
		}
		if (isset($_POST['alert_note'])) {
			$details['alert_note'] = $this->input->post('alert_note');
		} else {
			$details['alert_note'] = '';
		}
		$data['alerts'] = array();
		foreach ($_POST as $key => $value) {
			if (mb_strpos($key, 'alert_id_') !== false) {
				array_push($data['alerts'], mb_substr($key, 9));
			}
		}
		if (isset($_POST['group_id'])) {
			$this->data['group_id'] = $this->input->post('group_id');
		} else {
			$this->data['group_id'] = '';
		}
		
		$details['alerts'] = $data['alerts'];
		$details['user_id'] = $this->data['user_id'];
		$details['alert_ack_time'] = date('Y-m-d H:i:s');
		$this->load->model("m_alerts");
		$result = $this->m_alerts->assign_change($details);
		redirect('report/show_report/3/' . $this->data['group_id']);
	}

	function add_change() {
		$this->data['rte'] = 'y';
		$this->data['include'] = 'v_add_change'; 
		$this->data['sortcolumn'] = '1';
		$this->data['heading'] = 'Add Change';
		$this->load->view('v_template', $this->data);
	}
	
	function process_add_change() {
		echo "<pre>\n";
		print_r($_POST);
		echo "</pre>\n";
	}
}
