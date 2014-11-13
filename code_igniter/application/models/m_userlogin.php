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
 * @version 1.5.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_userlogin extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function validate_user($username, $password) {
		
		$sql = "SELECT user_id, user_name, user_email, user_full_name, user_lang, user_theme, user_admin, user_password, user_sam FROM oa_user WHERE oa_user.user_name = ? LIMIT 1";
		$data = array("$username");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$user_id = $row->user_id;
			$hash_password = $row->user_password;
			$user_data = array(	'username' => $row->user_name, 'logged_in' => TRUE, 'user_id' => $row->user_id, 
							'user_full_name' => $row->user_full_name, 'user_lang' => $row->user_lang, 
							'user_theme' => $row->user_theme, 'user_admin' => $row->user_admin, 
							'user_debug' => 'n', 'user_sam' => $row->user_sam );
			
			# make sure to validate if we have any older style MD5 passwords
			if ($hash_password == md5($password)) {
				# change the password to a salted SHA256
				# get 256 random bits in hex
				$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM)); 
				# prepend the salt, then hash
				$hash = hash("sha256", $salt . $password); 
				# store the salt and hash in the same string, so only 1 DB column is needed
				$encrypted_password = $salt . $hash;
				$sql = "UPDATE oa_user SET user_password = ? WHERE user_id = ?";
				$data = array("$encrypted_password", "$user_id");
				$query = $this->db->query($sql, $data);
				return $user_data;
			}

			# compare the supplied and salted sha256 passwords
			# get the salt from the front of the hash
			$salt = substr($hash_password, 0, 64); 
			# the SHA256 form the end of the hash
			$valid_hash = substr($hash_password, 64, 64);
			# hash the password being tested
			$test_hash = hash("sha256", $salt . $password);
			# if the hashes are exactly the same, the password is valid
			if ($test_hash == $valid_hash) { 
				# correct password
				# NOTE - we must test if user is active when DB version > 20130512 release.
				# this releave (v1.0) added a flag to the users table for user_active.
				$sql = "SELECT config_value FROM oa_config WHERE config_name = 'internal_version'";
				$query = $this->db->query($sql);
				$row = $query->row();
				$db_version = $row->config_value;
				if ($db_version < '20130512') {
					# we have not updgraded the DB yet, so need to not attempt to check if user is active
				} else {
					# this is a 1.0 (or above) version of the database
					# only log user on to system if user is 'active'
					$sql = "SELECT user_active FROM oa_user WHERE user_id = ?";
					$data = array($user_id);
					$query = $this->db->query($sql, $data);
					$row = $query->row();
					if ($row->user_active == 'y') {
						# we have an active user
					} else {
						# remove the $data array
						unset($user_data);
						$user_data = 'fail';
					}
				}
			} else {
				unset($user_data);
				$user_data = 'fail';
			}
		} else {
			unset($user_data);
			$user_data = 'fail';
		}
		return $user_data;
	}
	
	function get_user_details($username) {
		$sql = "SELECT user_id, user_name, user_email, user_full_name, user_lang, user_theme, user_admin, user_password, user_sam, user_active FROM oa_user WHERE oa_user.user_name = ? LIMIT 1";
		$data = array($username);
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$data = array('username' => $row->user_name, 
				'logged_in' => TRUE, 
				'user_id' => $row->user_id, 
				'user_full_name' => $row->user_full_name, 
				'user_lang' => $row->user_lang, 
				'user_theme' => $row->user_theme, 
				'user_admin' => $row->user_admin, 
				'user_debug' => 'n', 
				'user_active' => $row->user_active );
		}
		return $data;
	}
}
?>
