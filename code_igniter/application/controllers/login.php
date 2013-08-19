<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	function index() {
		if ($this->session->userdata('logged_in') == TRUE) {
			redirect('/');
		}
		$data['title'] = 'Open-AudIT';
		$data['username'] = array('id' => 'username', 'name' => 'username');
		$data['password'] = array('id' => 'password', 'name' => 'password');
		$data['oae_message'] = "";
		$data['hidden'] = array('page' => $this->uri->segment(3), 
								'function' => $this->uri->segment(4), 
								'id' => $this->uri->segment(5),
								'first_attribute' => $this->uri->segment(6));
		$this->load->model("m_oa_admin_database");
		$data['systems'] = $this->m_oa_admin_database->count_systems();
		$data['logo'] = "logo.png";
		$data['oae_message'] = "";
		$license = "";


		$this->load->model('m_oa_config');
		$oae_url = $this->m_oa_config->get_config_item("oae_url");
		if ($oae_url > "") {
			# we need to attempt to get a URL even though it may only be a directory.
			if (stripos($oae_url, "http") === FALSE) {
				# we dont have http or https
				# we assume then it's a directory on the current server
				if (strpos($oae_url, '/') !== 0) {
					$oae_url = base_url() . "/" . $oae_url;
				} else {
					$oae_url = base_url() . $oae_url;
				}
			}
			# get the license status from the OAE API
			# license status are: valid, invalid, expired, none
			$license = @file_get_contents($oae_url . "/oaelicense");
			if ($license !== FALSE) {
				# remove the unneeded html tags
				$license = str_replace("<pre>", "", $license);
				$license = str_replace("</pre>", "", $license);
			} else {
				$license = "none";
			}
		}

		echo "<!-- " . $license . " -->";
		$data['logo'] = "logo-banner-oac-oae.png";
		$data['oae_message'] = "";
		$license = "expired";
		if ($oae_url == "") {
			# OAE is not installed
			# set the logo and show the logon page
			$data['logo'] = "logo-banner-oac.png";
			$data['oae_message'] = " ";
			$this->load->view('v_login', $data);
		}

		if (($data['hidden']['page'] != "") and ($oae_url > "") and ($license == "valid")) {
			# user going to an internal page and OAE is installed with a valid license
			# set the logo and show the logon page
			$data['logo'] = "logo-banner-oae.png";
			$data['oae_message'] = " ";
			$this->load->view('v_login', $data);
		}

		if (($data['hidden']['page'] == "") and ($oae_url > "") and ($license == "valid")) {
			# user going to logon page and OAE is installed and licensed
			# redirect
			redirect($oae_url);
		}

		if ($license == "invalid") {
			# OAE is installed but has an invalid license
			# show the logon page
			$data['oae_message'] = "Your license for Open-AudIT Enterprise is invalid. Please contact <a href='https://opmantek.com/contact-us/' style='color: blue;'>Opmantek</a> for a valid license.";
			$this->load->view('v_login', $data);
		}

		if ($license == "expired") {
			# OAE is installed but the license has expired
			# show the logon page
			$data['oae_message'] = "Thanks for trying Open-AudIT Enterprise. Your license for Open-AudIT Enterprise has expired.<br />Please contact <a href='https://opmantek.com/contact-us/' style='color: blue;'>Opmantek</a> today for a license renewal.";
			$this->load->view('v_login', $data);
		}

		if ($license == "none") {
			# OAE is installed but not licensed
			# show the logon page
			$data['oae_message'] = "Please try Open-AudIT Enterprise. Contact <a href='https://opmantek.com/contact-us/' style='color: blue;'>Opmantek</a> for a license today.";
			$this->load->view('v_login', $data);
		}

		if (($oae_url > "") and ($data['oae_message'] == "")) {
			# catch all default
			# show the logon page
			$data['oae_message'] = "Please try Open-AudIT Enterprise. Contact <a href='https://opmantek.com/contact-us/' style='color: blue;'>Opmantek</a> for a license today.";
			$this->load->view('v_login', $data);
		}
	}

	

	function audit_my_pc() {
		$filename = dirname(dirname(dirname(dirname(__FILE__)))) . "/other/audit_windows.vbs";
		if (!file_exists($filename)) {
			# do nothing - we don't have a template for audit_windows.vbs
		} else {
			$file = file($filename);
			$variable['strcomputer'] = '.';
			$variable['submit_online'] = 'y';
			$variable['create_file'] = 'n';
			$variable['url'] = base_url() . 'index.php/system';
			$variable['use_proxy'] = 'n';
			$variable['struser'] = '';
			$variable['strpass'] = '';
			$variable['org_id'] = '';
			$variable['windows_user_work_1'] = 'physicalDeliveryOfficeName';
			$variable['windows_user_work_2'] = 'company';
			$variable['debugging'] = '0';
			$variable['ping_target'] = 'n';

			foreach ($variable as $name => $value) {
				foreach ($file as $line_num => $line) {
					if (strpos($line, $name . " =") === 0) {
						# set the variable
						$file[$line_num] = $name . " = \"" . $value . "\"\n";
						break;
					}
				}
			}
			// Set headers
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=audit_windows.vbs");
			header("Content-Type: application/zip");
			header("Content-Transfer-Encoding: binary");
			foreach ($file as $line => $value) {
				echo $value;
			}
		}
	}

	function process_login() {
		$username = $this->input->post('username');    
		$password  = $this->input->post('password');
		$page = $this->input->post('page');
		$function = $this->input->post('function');
		$id = $this->input->post('id');
		$first_attribute = $this->input->post('first_attribute');
		$this->load->model("m_userlogin");

		$this->load->model("m_oa_config");
		$this->data['config'] = $this->m_oa_config->get_config();
		
		foreach ($this->data['config'] as $returned_result) {
			if (isset($returned_result->config_name)) {
				if ($returned_result->config_name == 'ad_domain') {
					$this->data['ad_domain'] = $returned_result->config_value;
				}
				if ($returned_result->config_name == 'ad_server') {
					$this->data['ad_server'] = $returned_result->config_value;
				}
				if ($returned_result->config_name == 'internal_version') {
					$this->data['db_version'] = $returned_result->config_value;
				}
			}
		}

		if (isset($this->data['ad_domain']) and 
			$this->data['ad_domain'] != "" and 
			isset($this->data['ad_server']) and 
			$this->data['ad_server'] != "" and 
			$password != '' and 
			$username != '' and 
			extension_loaded('ldap')) {
			# using Active Directory to validate logon details
			$ad_ldap_connect = "ldap://" . $this->data['ad_server'];
			$ad_user = $username . '@' . $this->data['ad_domain'];
			$ad_secret = $password;
			$ad = ldap_connect($ad_ldap_connect) or die("Couldn't connect to AD!");
			ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
			ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
			$bind = ldap_bind($ad, $ad_user, $ad_secret);
			if ($bind){
				$data = $this->m_userlogin->get_user_details($username);
				if ($data['user_active'] == 'y') {
					$this->session->set_userdata($data);
					if ($page != '1') {
						redirect($page . '/' . $function . '/' . $id . '/' . $first_attribute);
					} else {
						redirect('main/index');
					}
				} else {
					# the user does not have their 'user_active' flag set to 'y'.
					# don't log them in, redirect the to the login page.
					redirect('login/index');
				}
			} else {
				# failed Active Dirctory validation
				# fall through this function and attempt to validate using local credentials
			}
		}

		# attempt use the internal database to validate user
		if ($data = $this->m_userlogin->validate_user($username, $password)) {
			if ($data != 'fail') {
				$this->session->set_userdata($data);
				if ($page != '1') {
					redirect($page . '/' . $function . '/' . $id . '/' . $first_attribute);
				} else {
					redirect('main/index');
				}
			} else {
				$this->session->set_flashdata('message', '<div id="message">Incorrect credentials.</div>');
				redirect('login/index');		
			}
		} else {
			$this->session->set_flashdata('message', '<div id="message">Incorrect credentials.</div>');
			redirect('login/index');		
		}

		
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('login/index/main/list_groups');
	}
}
