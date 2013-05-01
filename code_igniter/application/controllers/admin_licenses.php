<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin_licenses extends MY_Controller {

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

	function change_license() {
		$this->load->model("m_oa_licensing");
		$group_id = $this->uri->segment(3, 0);
		$licenses = $this->uri->segment(4, 0);
		$software_name = urldecode($this->uri->segment(5, 0));
		$software_name = html_entity_decode($software_name);
		$this->m_oa_licensing->change_license($group_id, $licenses, $software_name);
		redirect('report/software_licensing/' . $group_id);
	}

}
