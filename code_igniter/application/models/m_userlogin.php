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
		# first check is the password is MD5 hashed
		$sql = "SELECT 	user_id, user_name, user_email, user_full_name, user_lang, user_theme, user_admin, user_password, user_sam   
				FROM 	oa_user 
				WHERE 	oa_user.user_name = ? AND 
						oa_user.user_password = md5(?) AND 
						oa_user.user_active = 'y' 
				LIMIT 1";
		$data = array($username, $password);
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		if ($myrow = $query->result()) {
			$user_id = $row->user_id;
			$data = array('username' => $row->user_name, 'logged_in' => TRUE, 'user_id' => $user_id, 'user_full_name' => $row->user_full_name, 'user_lang' => $row->user_lang, 'user_theme' => $row->user_theme, 'user_admin' => $row->user_admin, 'user_debug' => 'n', 'user_sam' => $row->user_sam );
			# test if m_crypt extension is installed and activated
			if (function_exists('mcrypt_create_iv')) {
				$installed_mcrypt = 'y';
			} else {
				$installed_mcrypt = 'n';
			}
			# check if using the beta6 database schema (user_password field is > 100 characters in beta6 and above)
			$sql = "SELECT config_value FROM oa_config WHERE config_name = 'internal_version'";
			$query = $this->db->query($sql);
			$row = $query->row();
			# if both above are true
			if (($installed_mcrypt == 'y') AND ($row->config_value >= '20120530')) {
				# Mcrypt Installed and password field length > 100
				#create and insert the updated password
				$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM)); //get 256 random bits in hex
				$hash = hash("sha256", $salt . $password); //prepend the salt, then hash
				//store the salt and hash in the same string, so only 1 DB column is needed
				$final_password = $salt . $hash;
				$sql = "UPDATE oa_user SET user_password = ? WHERE user_id = ?";
				$data2 = array($final_password, $user_id);
				$query = $this->db->query($sql, $data2);
			} else {
				#echo "Not high enough DB version to upgrade password.<br />\n";
			}
			#echo "Correct Weak Password.<br />\n";
		} else {
			$data = 'fail';
		}
		
		# next check is the password is salted and hashed
		if ($data == 'fail') {
			# first get the hashed password for the given user name
			$sql = "SELECT 	user_id, user_name, user_email, user_full_name, user_lang, user_theme, user_admin, user_password, user_sam  
					FROM oa_user 
					WHERE oa_user.user_name = ? 
					LIMIT 1";
			$data = array($username);
			$query = $this->db->query($sql, $data);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$hash_password = $row->user_password;
				# then compare it to the provided password
				# first, get the salt from the front of the hash
				$salt = substr($hash_password, 0, 64); 
				# next, the SHA256
				$validHash = substr($hash_password, 64, 64);
				# finally, hash the password being tested
				$testHash = hash("sha256", $salt . $password);
				// now, if the hashes are exactly the same, the password is valid
				if ($testHash == $validHash) { 
					# correct password
					$data = array('username' => $row->user_name, 'logged_in' => TRUE, 'user_id' => $row->user_id, 'user_full_name' => $row->user_full_name, 'user_lang' => $row->user_lang, 'user_theme' => $row->user_theme, 'user_admin' => $row->user_admin, 'user_debug' => 'n', 'user_sam' => $row->user_sam );
				} else {
					$data = 'fail';
				}
			} else {
				$data = 'fail';
			}
		}
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
