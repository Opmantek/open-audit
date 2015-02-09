<?php 
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published 
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.5.6
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_oa_user extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	
	function select_user($name) {
		$sql = "SELECT user_id FROM oa_user WHERE user_name = ? LIMIT 1";
		$data = array($name);
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		if ($query->num_rows() > 0) {
			$row = $query->row(); 
			return ($row->user_id);
		} else {
			return null;
		}
	}

	function check_user_name($user_name, $user_id) {
		$sql = "SELECT user_id FROM oa_user WHERE user_name = ? AND user_id <> ?";
		$data = array($user_name, $user_id);
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		if ($query->num_rows() > 0) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

/*
	function delete_user($id) {
		$sql = "DELETE FROM oa_group_user WHERE user_id = ? LIMIT 1";
		$data = array($id);
		$query = $this->db->query($sql, $data);
		$sql = "DELETE FROM oa_user WHERE user_id = ? LIMIT 1";
		$data = array($id);
		$query = $this->db->query($sql, $data);
	}
*/

	function deactivate_user($id) {
		$sql = "DELETE FROM oa_group_user WHERE user_id = ? LIMIT 1";
		$data = array($id);
		$query = $this->db->query($sql, $data);
		$sql = "UPDATE oa_user SET user_active = 'n' WHERE user_id = ? LIMIT 1";
		$data = array($id);
		$query = $this->db->query($sql, $data);
	}

	function activate_user($id) {
		$sql = "UPDATE oa_user SET user_active = 'y' WHERE user_id = ? LIMIT 1";
		$data = array($id);
		$query = $this->db->query($sql, $data);
	}

	function get_user_details($id) {
		$sql = "SELECT * FROM oa_user WHERE user_id = ? LIMIT 1";
		$data = array($id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}
	
	function get_all_users() {
		$sql = "SELECT user_id, user_name, user_full_name, user_email, user_admin, user_active 
				FROM oa_user ORDER BY user_name";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}
	
	function add_user($details) {
		if (isset($details->user_admin)) {
			if ($details->user_admin == 'on') {
				$details->user_admin = 'y';
			} else {
				$details->user_admin = 'n';
			}
		} else {
			$details->user_admin = 'n';
		}
		# create the password 
		$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM)); # get 256 random bits in hex
		$hash = hash("sha256", $salt . $details->user_password); # prepend the salt, then hash
		# store the salt and hash in the same string, so only 1 DB column is needed
		$encrypted_password = $salt . $hash;

		$sql = "INSERT INTO oa_user (user_name, user_full_name, user_email, user_password, user_theme, 
				user_lang, user_admin, user_sam) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
		$sql = $this->clean_sql($sql);
		$data = array("$details->user_name", "$details->user_full_name", "$details->user_email", 
			"$encrypted_password", "$details->user_theme", "$details->user_lang", 
			"$details->user_admin", "$details->user_sam");
		$query = $this->db->query($sql, $data);
		return($this->db->insert_id());
	}

	function edit_user($details) {
		// format the user_admin to 'y' or 'n'
		if (isset($details->user_admin)) {
			if ($details->user_admin == 'on') {
				$details->user_admin = 'y';
			} else {
				$details->user_admin = 'n';
			}
		} else {
			$details->user_admin = 'n';
		}

		if ($details->user_password != '') {
			# password has a value so salt + sha256 it, then insert it into the db.
			# create the password 
			$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM)); # get 256 random bits in hex
			$hash = hash("sha256", $salt . $details->user_password); # prepend the salt, then hash
			# store the salt and hash in the same string, so only 1 DB column is needed
			$encrypted_password = $salt . $hash;

			$sql = "UPDATE oa_user SET user_name = ?, user_full_name = ?,
					user_email = ?, user_password = ?, user_theme = ?,
					user_lang = ?, user_admin = ?,  user_sam = ? 
					WHERE user_id = ?";
			$sql = $this->clean_sql($sql);
			$data = array(	"$details->user_name", "$details->user_full_name", "$details->user_email", 
						"$encrypted_password", "$details->user_theme", "$details->user_lang", 
						"$details->user_admin", "$details->user_sam", "$details->user_id");
		} else {
			// do not set the password
			$sql = "UPDATE oa_user SET user_name = ?, user_full_name = ?,
					user_email = ?, user_theme = ?, user_lang = ?,
					user_admin = ?, user_sam = ? WHERE user_id = ?";
			$sql = $this->clean_sql($sql);
			$data = array(	"$details->user_name", "$details->user_full_name", "$details->user_email", 
						"$details->user_theme", "$details->user_lang", "$details->user_admin", 
						"$details->user_sam", "$details->user_id");
		}
		$query = $this->db->query($sql, $data);
		return(TRUE);
	}

	function validate_user($admin = 'n') {
		$CI =& get_instance();
		$CI->user = new stdClass();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('log');

		$log_details = new stdClass();
		$log_details->file = 'system';
		$status = '';

		$this->config = $CI->config;

		$test = '';
		$test = $this->session->userdata('user_id');
		if (isset($test) AND is_numeric($test)) {
			// user is logged in, return the $this->user object
			$sql = "SELECT * FROM oa_user WHERE oa_user.user_id = ? LIMIT 1";
			$data = array("$test");
			$query = $this->db->query($sql, $data);
			if ($query->num_rows() > 0) {
				$CI->user = $query->row();
				if ($admin == 'y') {
					if ($CI->user->user_admin == 'y') {
						$log_details->severity = 7;
						$log_details->message = 'User validated as an admin';
						stdlog($log_details);
						unset($log_details);
						$userdata = array('user_id' => $CI->user->user_id);
						$this->session->set_userdata($userdata);
						return;
					} else {
						// admin requested but user is not
						$response->status = "fail";
						if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== FALSE) {
							// log the attempt
							$log_details->severity = 5;
							$log_details->message = 'Admin credentials required (json request)';
							stdlog($log_details);
							// set json response
							$response = new stdClass();
							$response->message = "Admin credentials required";
							echo json_encode($response);
							// set the headers
							header('Content-Type: application/json');
							header('Cache-Control: max-age=0');
							header('HTTP/1.1 400 Bad Request');
							exit();
						} else {
							// log the attempt
							$log_details->severity = 5;
							$log_details->message = 'Admin credentials required (html request)';
							stdlog($log_details);
							// redirect to the login page
							redirect('main/list_groups');
						}
					}
				} else {
					$log_details->severity = 7;
					$log_details->message = 'User validated by existing cookie';
					stdlog($log_details);
					unset($log_details);
					$userdata = array('user_id' => $CI->user->user_id);
					$this->session->set_userdata($userdata);
					return;
				}
			} else {
				// the user_id stored in the session does not exist
				$status = 'fail';
				if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== FALSE) {
					// log the attempt
					$log_details->severity = 5;
					$log_details->message = 'Bad user_id in cookie (json request)';
					stdlog($log_details);
					unset($log_details);
					// reply with JSON
					$response = new stdClass();
					$response->status = "fail";
					$response->message = "Bad user_id in cookie";
					echo json_encode($response);
					// set the header
					header('Content-Type: application/json');
					header('Cache-Control: max-age=0');
					header('HTTP/1.1 400 Bad Request');
					exit();
				} else {
					// log the attempt
					$log_details->severity = 5;
					$log_details->message = 'Bad user_id in cookie (html request)';
					stdlog($log_details);
					unset($log_details);
					// redirect to the login page
					redirect('login/index/main/list_groups');
				}
			}
		}
			
		// user is not logged in as at here

		// get $username from $_GET if supplied
		if (strpos(current_url(), 'username') !== FALSE) {
			$split_url = explode('/', current_url());
			for ($i=0; $i <= count($split_url)-1 ; $i++) {
				if (strpos($split_url[$i], 'username') !== FALSE) {
					$username = $split_url[$i+1];
				}
			}
		}
		// get $password from $_GET if supplied
		if (strpos(current_url(), 'password') !== FALSE) {
			$split_url = explode('/', current_url());
			for ($i=0; $i <= count($split_url)-1 ; $i++) {
				if (strpos($split_url[$i], 'password') !== FALSE) {
					$password = $split_url[$i+1];
				}
			}
		}
		// get $username from $_POST if supplied
		$temp = $this->input->post('username');
		if ($temp != '') {
			$username = $this->input->post('username');
		}
		// get $password from $_POST if supplied
		$temp = $this->input->post('password');
		if ($temp != '') {
			$password = $this->input->post('password');
		}

		// make sure we have a supplied username and password
		if ($username == '' OR $password == '') {
			// incomplete credentials supplied
			$status = 'fail';
			if ($username =='') {
				$username = 'UNKNOWN USER';
			}
			if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== FALSE) {
				// log the attempt
				$log_details->severity = 5;
				$log_details->message = 'Incomplete credentials supplied for ' . $username . ' (json request)';
				stdlog($log_details);
				unset($log_details);
				// reply with JSON
				$response = new stdClass();
				$response->status = "fail";
				$response->message = "Incomplete credentials supplied. Please supply valid username and password fields in the request.";
				echo json_encode($response);
				// set the header
				header('Content-Type: application/json');
				header('Cache-Control: max-age=0');
				header('HTTP/1.1 400 Bad Request');
				exit();
			} else {
				// log the attempt
				$log_details->severity = 5;
				$log_details->message = 'Incomplete credentials supplied for ' . $username . ' (html request)';
				stdlog($log_details);
				unset($log_details);
				// redirect to the login page
				redirect('login/index/main/list_groups');
			}
		}

		// get the user object from the supplied user name
		if ($CI->config->config['internal_version'] < '20130512') {
			$sql = "SELECT * FROM oa_user WHERE oa_user.user_name = ? LIMIT 1";
		} else {
			$sql = "SELECT * FROM oa_user WHERE oa_user.user_name = ? AND user_active = 'y' LIMIT 1";
		}
		$data = array("$username");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$CI->user = $query->row();
			if ($CI->config->config['internal_version'] < '20130512') {
				$CI->user->user_active = 'y';
			}
		} else {
			$status = 'fail';
			if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== FALSE) {
				// set the header response and reply with JSON
				$log_details->severity = 5;
				$log_details->message = 'Invalid username of ' . $username . ' supplied or user not active (json request)';
				stdlog($log_details);
				unset($log_details);
				$response = new stdClass();
				$response->status = "fail";
				$response->message = "Invalid username or user not active. Please supply valid username and password fields in the request.";
				echo json_encode($response);
				header('Content-Type: application/json');
				header('Cache-Control: max-age=0');
				header('HTTP/1.1 400 Bad Request');
				exit();
			} else {
				// redirect to the login page
				$log_details->severity = 5;
				$log_details->message = 'Invalid username of ' . $username . ' supplied or user not active (html request)';
				stdlog($log_details);
				unset($log_details);
				redirect('login/index/main/list_groups');
			}
		}

		// if we get to here we have a valid $CI->user object, but not
		// necessarily a valid username + password
		// order of check is against AD (if set), the against an md5 (with update to sha256), then against sha256.

		// check against AD if configured
		if (isset($CI->config->config['ad_domain']) AND $CI->config->config['ad_domain'] != '' AND 
			isset($CI->config->config['ad_server']) AND $CI->config->config['ad_server'] != '' AND 
			extension_loaded('ldap')) {
			$ad_ldap_connect = 'ldap://' . $CI->config->item('ad_server');
			$ad_user = $username . '@' . $CI->config->item('ad_domain');
			$ad_secret = $password;
			$ad = ldap_connect($ad_ldap_connect);
			if (!$ad) {
				// log the failed attempt to connect to AD and fall through for local validation by Open-AudIT
				$log_details->severity = 5;
				$log_details->message = 'Error could not connect to Active Directory at ' . $ad_ldap_connect . ' (html request)';
				stdlog($log_details);
			} else {
				// successful connect to AD, now try to bind using the credentials
				ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
				ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
				$bind = ldap_bind($ad, $ad_user, $ad_secret);
				if ($bind) {
					// successful connect and bind, now check if user is active in Open-AudIT
					if ($CI->user->user_active == 'y') {
						// successful connect, bind and user is active - success
						$status = 'success';
						$log_details->severity = 7;
						$log_details->message = 'User ' . $username . ' was verified by AD';
						stdlog($log_details);
					} else {
						// successful connect and bind but user not active - fail
						$status = 'fail';
						$log_details->severity = 5;
						if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== FALSE) {
							$log_details->message = $username . ' was verified by AD, but does not have their user_active attribute set in Open-AudIT (json request)';
							stdlog($log_details);
							$response = new stdClass();
							$response->status = "fail";
							$response->message = "Username validated in AD, but not set to active in Open-AudIT";
							echo json_encode($response);
							header('Content-Type: application/json');
							header('Cache-Control: max-age=0');
							header('HTTP/1.1 400 Bad Request');
							exit();
						} else {
							$log_details->message = $username . ' was verified by AD, but does not have their user_active attribute set in Open-AudIT (html request)';
							stdlog($log_details);
							redirect('login/index/main/list_groups');
						}
					}
				} else {
					// successful connect, but no bind - invalid credentials
					// log attempt and fall through for local validation in Open-AudIT
					$log_details->severity = 5;
					if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== FALSE) {
						$log_details->message = $username . ' Active Directory failed verification (json request)';
					} else {
						$log_details->message = $username . ' Active Directory failed verification (html request)';
					}
					stdlog($log_details);
				}
			}
		}


		# check against older style MD5 passwords
		if (isset($CI->user->password) AND $CI->user->password == md5($password)) {
			// matching older style password
			// update to sha256 - success
			$status = 'success';
			$log_details->severity = 5;
			$log_details->message = $username . ' updating password from md5 to sha256';
			stdlog($log_details);
			# change the password to a salted SHA256
			# get 256 random bits in hex
			$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM)); 
			# prepend the salt, then hash
			$hash = hash("sha256", $salt . $password); 
			# store the salt and hash in the same string, so only 1 DB column is needed
			$encrypted_password = $salt . $hash;
			$sql = "UPDATE oa_user SET user_password = ? WHERE user_id = ?";
			$data = array("$encrypted_password", (string)$CI->user->user_id);
			$query = $this->db->query($sql, $data);
		}


		# check against salted sha256 passwords
		if ($status != 'success') {
			# get the salt from the front of the hash
			$salt = substr($CI->user->user_password, 0, 64); 
			# the SHA256 form the end of the hash
			$valid_hash = substr($CI->user->user_password, 64, 64);
			# hash the password being tested
			$test_hash = hash("sha256", $salt . $password);
			# if the hashes are exactly the same, the password is valid
			if ($test_hash == $valid_hash) { 
				# correct password
				$status = 'success';
			}
		}

		if ($status != 'success') {
			// incorrect credentials - fail
			unset($CI->user);
			if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== FALSE) {
				// log the attempt
				$log_details->severity = 6;
				$log_details->message = $username . ' attempted to logon with invalid credentials (json request)';
				stdlog($log_details);
				// create the json response
				$response = new stdClass();
				$response->status = "fail";
				$response->message = "Credentials not supplied or invalid. Please supply valid username and password fields in the request.";
				echo json_encode($response);
				// set the headers
				header('Content-Type: application/json');
				header('Cache-Control: max-age=0');
				header('HTTP/1.1 400 Bad Request');
				exit();
			} else {
				// log the attempt
				$log_details->severity = 6;
				$log_details->message = $username . ' attempted to logon with invalid credentials (html request)';
				stdlog($log_details);
				// redirect to the login page
				redirect('login/index/main/list_groups');
			}
		} else {
			// correct credentials supplied
			// check if we need an admin user
			if ($admin == 'y') {
				if ($CI->user->user_admin == 'y') {
					$userdata = array('user_id' => $CI->user->user_id);
					$this->session->set_userdata($userdata);
					return;
				} else {
					// admin requested but user is not
					$response->status = "fail";
					if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== FALSE) {
						// log the attempt
						$log_details->severity = 5;
						$log_details->message = 'Admin credentials required (json request)';
						stdlog($log_details);
						// set json response
						$response = new stdClass();
						$response->message = "Admin credentials required. Please supply valid username and password fields in the request.";
						echo json_encode($response);
						// set the headers
						header('Content-Type: application/json');
						header('Cache-Control: max-age=0');
						header('HTTP/1.1 400 Bad Request');
						exit();
					} else {
						// log the attempt
						$log_details->severity = 5;
						$log_details->message = 'Admin credentials required (html request)';
						stdlog($log_details);
						// redirect to the login page
						redirect('main/list_groups');
					}
				}
			} else {
				// log the log on details
				$log_details->severity = 7;
				$log_details->message = 'User logged on';
				stdlog($log_details);
				$userdata = array('user_id' => $CI->user->user_id);
				$this->session->set_userdata($userdata);
				return;
			}
		}
	}
}
?>
