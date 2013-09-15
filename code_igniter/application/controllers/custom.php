<?php
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Opmantek, 2013
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
 
class Custom extends MY_Controller {

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
		$this->load->helper(array('form', 'url'));
	}


	function index() {
		redirect('/');
	}

}
