<?php
/**
 * @package OAv2f
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin_cli extends CI_Controller {

	function __construct() {
		parent::__construct();
		// must be called form the CLI to access this page
		if (!$this->input->is_cli_request()) {
			exit();
		}
	}

	function index() {
		exit();
	}

	function php_info() {
		echo phpinfo();
	}

	function import_nmis() {

		# have to hack this string because code_igniter doesn't like /'s  
		# in the variable passed via cli
		$nodes_file = str_replace("/admin_cli/import_nmis/", "", $this->uri->uri_string());

		$log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis Starting Nodes.nmis import" . PHP_EOL;
		file_put_contents("/var/log/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);

		$this->load->helper('snmp_oid');
		$this->load->helper('snmp');
		$this->load->library('encrypt');
		$this->load->model("m_system");
		$this->load->model("m_oa_group");
/*
		# before the actual nodes, import the locations
		$locations_file = str_replace("Nodes.nmis", "Locations.nmis", $nodes_file);
		$file_handle = fopen($locations_file, "r");
		$string = fread($file_handle, filesize($locations_file));
		$string = str_replace(PHP_EOL, " ", $string);
		$string = str_replace("\r\n", " ", $string);
		$string = str_replace("\n", " ", $string);
		$string = str_replace(chr(13), " ", $string);
		$string = str_replace("%hash = (", "{", $string);
		$string = str_replace(");", "}", $string);
		$string = str_replace("=>", ":", $string);
		$string = str_replace("'undef'", "''", $string);
		$string = str_replace("undef", "''", $string);
		$string = str_replace("'", "\"", $string);
		$conf = json_decode($string, TRUE);		
		switch (json_last_error()) {
		  case JSON_ERROR_NONE:
		    # no errors
		  break;
		  case JSON_ERROR_DEPTH:
			echo "Error importing Nmis.nodes file<br />\n";
			echo 'JSON_ERROR_DEPTH - Maximum stack depth exceeded<br />';
			exit();
		  break;
		  case JSON_ERROR_STATE_MISMATCH:
			echo "Error importing Nmis.nodes file<br />\n";
			echo 'JSON_ERROR_STATE_MISMATCH - Underflow or the modes mismatch<br />';
			exit();
		  break;
		  case JSON_ERROR_CTRL_CHAR:
			echo "Error importing Nmis.nodes file<br />\n";
			echo 'JSON_ERROR_CTRL_CHAR - Unexpected control character found<br />';
			exit();
		  break;
		  case JSON_ERROR_SYNTAX:
			echo "Error importing Nmis.nodes file<br />\n";
			echo 'JSON_ERROR_SYNTAX - Syntax error, malformed JSON<br />';
			exit();
		  break;
		  case JSON_ERROR_UTF8:
			echo "Error importing Nmis.nodes file<br />\n";
			echo 'JSON_ERROR_UTF8 - Malformed UTF-8 characters, possibly incorrectly encoded<br />';
			exit();
		  break;
		  default:
			echo "Error importing Nmis.nodes file<br />\n";
			echo 'Unknown error<br />';
			exit();
		  break;
		}

		foreach ($conf as $location) {
			$this->load->model("m_oa_location");
		}	
*/

		# read in the Nodes.nmis file		
		$file_handle = fopen($nodes_file, "r");
		$string = fread($file_handle, filesize($nodes_file));
		$string = str_replace(PHP_EOL, " ", $string);
		$string = str_replace("\r\n", " ", $string);
		$string = str_replace("\n", " ", $string);
		$string = str_replace(chr(13), " ", $string);
		$string = str_replace("%hash = (", "{", $string);
		$string = str_replace(");", "}", $string);
		$string = str_replace("=>", ":", $string);
		$string = str_replace("'undef'", "''", $string);
		$string = str_replace("undef", "''", $string);
		$string = str_replace("'", "\"", $string);
		$conf = json_decode($string, TRUE);		
		switch (json_last_error()) {
		  case JSON_ERROR_NONE:
		    # no errors
		  break;
		  case JSON_ERROR_DEPTH:
			echo "Error importing Nmis.nodes file<br />\n";
			echo 'JSON_ERROR_DEPTH - Maximum stack depth exceeded<br />';
			exit();
		  break;
		  case JSON_ERROR_STATE_MISMATCH:
			echo "Error importing Nmis.nodes file<br />\n";
			echo 'JSON_ERROR_STATE_MISMATCH - Underflow or the modes mismatch<br />';
			exit();
		  break;
		  case JSON_ERROR_CTRL_CHAR:
			echo "Error importing Nmis.nodes file<br />\n";
			echo 'JSON_ERROR_CTRL_CHAR - Unexpected control character found<br />';
			exit();
		  break;
		  case JSON_ERROR_SYNTAX:
			echo "Error importing Nmis.nodes file<br />\n";
			echo 'JSON_ERROR_SYNTAX - Syntax error, malformed JSON<br />';
			exit();
		  break;
		  case JSON_ERROR_UTF8:
			echo "Error importing Nmis.nodes file<br />\n";
			echo 'JSON_ERROR_UTF8 - Malformed UTF-8 characters, possibly incorrectly encoded<br />';
			exit();
		  break;
		  default:
			echo "Error importing Nmis.nodes file<br />\n";
			echo 'Unknown error<br />';
			exit();
		  break;
		}

		foreach ($conf as $device) {
			$device = (object) $device;
			$device->ip_address = '';
			$device->hostname = '';
			$device->fqdn = '';

			if (filter_var($device->host, FILTER_VALIDATE_IP)) {
				# we have an ip address as opposed to a name or fqdn
				$device->ip_address = $device->host;
			} else {
				# we have a name or fqdn
				if (strpos($device->host, ".")) {
					# fqdn - explode it
					$device->fqdn = $device->host;
					$i = explode(".", $device->host);
					$device->hostname = $i[0];
				} else {
					# its just a name
					$device->hostname = $device->host;
				}
			}

			if ($device->ip_address > '') {
				# lookup the name
				$device->hostname = gethostbyaddr($device->ip_address);
			} else {
				# lookup the ip
				if ($device->fqdn > '') {
					$device->ip_address = gethostbyname($device->fqdn);
				} else {
					$device->ip_address = gethostbyname($device->host);
				}
			}

			$log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $device->ip_address . " (" . $device->hostname . ") - scanning" . PHP_EOL;
			file_put_contents("/var/log/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);

			if ($device->version == 'snmpv2c') {$device->version = '2c';}

			$snmp_details->name = '';
			if (($device->community > '') and ($device->version == '2c') and ($device->ip_address > '')) {
				$encode['ip_address'] = $device->ip_address;
				$encode['fqdn'] = $device->fqdn;
				$encode['hostname'] = $device->hostname;
				$encode['snmp_version'] = $device->version;
				$encode['snmp_community'] = $device->community;
				$encode['snmp_v3_sec_name'] = '';
				$encode['snmp_v3_sec_level'] = '';
				$encode['snmp_v3_auth_protocol'] = $device->authprotocol;
				$encode['snmp_v3_auth_passphrase'] = $device->authpassword;
				$encode['snmp_v3_priv_protocol'] = $device->privprotocol;
				$encode['snmp_v3_priv_passphrase'] = $device->privpassword;
				$encoded = json_encode($encode);
				$encoded = $this->encrypt->encode($encoded);

				// $encoded = json_encode($encode);
				// print_r($encoded);
				// echo "\n";
				// $encoded = $this->encrypt->encode($encoded);
				// echo $encoded . "\n";
				// $decoded = $this->encrypt->decode($encoded);
				// echo $decoded . "\n";
				// $decoded = json_decode($decoded);
				// print_r($decoded);
				$device->snmp_version = $device->version;
				$device->snmp_community = $device->community;
				$device->snmp_port = '161';

				$device = get_snmp($device);
				$device->access_details = $encoded;
				$device->nmis_group = $device['group'];
				$device->nmis_name = $device['name'];
				$device->nmis_role = $device['roleType'];
			}
			$details->system_key = '';
			$details->system_key = $this->m_system->create_system_key($details);
			$details->system_id = '';
			$details->system_id = $this->m_system->find_system($details);


			if ((isset($details->oid)) and ($details->oid > '')){
				# we received a result from snmp, use this data to update or insert
				if (isset($details->system_id) and $details->system_id != '') {
					# update an existing device with snmp
					$details->last_seen_by = 'snmp nmis import';
					$this->m_system->update_system($details);
					$log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $details['ip_address'] . " (" . $details['hostname'] . ") - update snmp result" . PHP_EOL;
					file_put_contents("/var/log/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);
					
				} else {
					# insert a new device
					$details->last_seen_by = 'snmp nmis import';
					$this->m_system->insert_system($details);
					$log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $details['ip_address'] . " (" . $details['hostname'] . ") - insert snmp result" . PHP_EOL;
					file_put_contents("/var/log/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);
				}
				$this->m_oa_group->update_system_groups($details);
			} else {
				# just use hat we have from the nodes.nmis file
				if (isset($details->system_id) and $details->system_id != '') {
					# update an existing device
					$details->last_seen_by = 'nmis import';
					$this->m_system->update_system($details);
					$log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $details['ip_address'] . " (" . $details['hostname'] . ") - update basic result" . PHP_EOL;
					file_put_contents("/var/log/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);
				} else {
					# insert a new device
					$details->last_seen_by = 'nmis import';
					$this->m_system->insert_system($snmp_details);
					$log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $details['ip_address'] . " (" . $details['hostname'] . ") - new basic result" . PHP_EOL;
					file_put_contents("/var/log/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);
				}
			}
		}
	}
}