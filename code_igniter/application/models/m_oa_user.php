<?php 
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
 * @version 1.5.2
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

	// function validate_user() {

	// 	if ((strpos(current_url(), '/username/') !== FALSE) AND (strpos(current_url(), '/password/') !== FALSE)) {
	// 		$split_url = explode('/', current_url());
	// 		for ($i=0; $i <= count($split_url)-1 ; $i++) {
	// 			if (strpos($split_url[$i], 'username') !== FALSE) {
	// 				$username = $split_url[$i+1];
	// 			}
	// 			if (strpos($split_url[$i], 'password') !== FALSE) {
	// 				$password = $split_url[$i+1];
	// 			}
	// 		}
	// 	}

	// 	$user_data = $this->m_userlogin->validate_user($username, $password);
	// 	if (isset($user_data) AND $user_data->)



	// 		if ($this->input->post('username') AND $this->input->post('password')) {
	// 			$username = $this->input->post('username');
	// 			$password = $this->input->post('password');
	// 		}
	// 		if (isset($username) AND (string)$username !== '' AND isset($password) AND (string)$password !== '') {
	// 			$this->load->model('m_userlogin');
	// 			if ($data = $this->m_userlogin->validate_user($username, $password)) {
	// 				if (is_array($data)) {
	// 					$this->session->set_userdata($data);
	// 					$this->data['user_full_name'] = $data['user_full_name'];
	// 					$this->data['user_lang'] = $data['user_lang'];
	// 					$this->data['user_theme'] = $data['user_theme'];
	// 					$this->data['user_admin'] = $data['user_admin'];
	// 					$this->data['user_id'] = $data['user_id'];
	// 					$this->data['user_debug'] = 'n';
	// 					$loggedin = TRUE;
	// 				}
	// 				else {
	// 					// username and password are set but do not validate
	// 					exit();       
	// 				}
	// 			}
	// 			else {
	// 				// username and password are set but validate_user fails for some reason
	// 				exit();
	// 			}
	// 		}

	// }
}
?>
