<?php
/**
 * OAv2
 *
 * An open source network auditing application
 *
 * @package OAv2
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_userlogin extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function validate_user($username, $password) {
		
		$sql = "SELECT user_id, user_name, user_email, user_full_name, user_lang, user_theme, user_admin, user_password, user_sam FROM oa_user WHERE oa_user.user_name = ? LIMIT 1";
		$data = array($username);
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$user_id = $row->user_id;
			$hash_password = $row->user_password;
	#echo "<pre>\n";
			# make sure to validate if we have any older style MD5 passwords
			if ($hash_password == md5($password)) {
	#echo "A hashed password match.<br />\n";
				$data = array(	'username' => $row->user_name, 
								'logged_in' => TRUE, 
								'user_id' => $row->user_id, 
								'user_full_name' => $row->user_full_name, 
								'user_lang' => $row->user_lang, 
								'user_theme' => $row->user_theme, 
								'user_admin' => $row->user_admin, 
								'user_debug' => 'n', 
								'user_sam' => $row->user_sam );
					# create the password 
				$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM)); # get 256 random bits in hex
				$hash = hash("sha256", $salt . $password); # prepend the salt, then hash
				# store the salt and hash in the same string, so only 1 DB column is needed
				$encrypted_password = $salt . $hash;
				$sql = "UPDATE oa_user SET user_password = ? WHERE user_id = ?";
				$data = array("$encrypted_password", "$user_id");
				$query = $this->db->query($sql, $data);
				return $data;
			}

	#echo "hash_password: " . $hash_password . "<br />";
			# first, get the salt from the front of the hash
			$salt = substr($hash_password, 0, 64); 
	#echo "salt: " . $salt . "<br />\n";
			# next, the SHA256
			$valid_hash = substr($hash_password, 64, 64);
	#echo "valid_hash: " . $valid_hash . "<br />";
			# finally, hash the password being tested
			$test_hash = hash("sha256", $salt . $password);
	#echo "password: " . $password . "<br />\n";
	#echo "test_hash: " . $test_hash . "<br />";
			// now, if the hashes are exactly the same, the password is valid
			if ($test_hash == $valid_hash) { 
				# correct password
	#echo "Valid.<br />\n";
				$data = array(	'username' => $row->user_name, 
								'logged_in' => TRUE, 
								'user_id' => $row->user_id, 
								'user_full_name' => $row->user_full_name, 
								'user_lang' => $row->user_lang, 
								'user_theme' => $row->user_theme, 
								'user_admin' => $row->user_admin, 
								'user_debug' => 'n', 
								'user_sam' => $row->user_sam );
				# NOTE - we must (assuming release >= 1.0) test if user is active
				$sql = "SELECT config_value FROM oa_config WHERE config_name = 'internal_version'";
				$query = $this->db->query($sql);
				$row = $query->row();
				$db_version = $row->config_value;
	#echo "DB Version: " . $db_version . "<br />\n";
				if ($db_version < '20130512') {
					# we have not updgraded the DB yet, so need to not attempt to check if user is active
	#echo "No need to test user=active.<br />\n";
				} else {
					# this is a 1.0 (or above) version of the database - only log
					# user on to system if user is 'active'
					$sql = "SELECT user_active FROM oa_user WHERE user_id = ?";
					$data_sql = array($user_id);
					$query = $this->db->query($sql, $data_sql);
					$row = $query->row();
					if ($row->user_active == 'y') {
						# we have an active user
	#echo "User is active.<br />\n";
					} else {
						# remove the $data array
	#echo "User is not active.<br />\n";
						unset($data);
						$data = 'fail';
					}
				}
			} else {
				$data = 'fail';
			}
		} else {
			$data = 'fail';
		}
	#echo "<pre>\n";
	#print_r($data);
	#exit();
		return $data;
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
