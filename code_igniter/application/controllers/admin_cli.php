<?php
/**
 * @package OAv2
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
			$device['ip_address'] = '';
			$device['hostname'] = '';
			$device['fqdn'] = '';

			if (filter_var($device['host'], FILTER_VALIDATE_IP)) {
				# we have an ip address as opposed to a name or fqdn
				$device['ip_address'] = $device['host'];
			} else {
				# we have a name or fqdn
				if (strpos($device['host'], ".")) {
					# fqdn - explode it
					$device['fqdn'] = $device['host'];
					$i = explode(".", $device['host']);
					$device['hostname'] = $i[0];
				} else {
					# its just a name
					$device['hostname'] = $device['host'];
				}
			}

			if ($device['ip_address'] > '') {
				# lookup the name
				$device['hostname'] = gethostbyaddr($device['ip_address']);
			} else {
				# lookup the ip
				if ($device['fqdn'] > '') {
					$device['ip_address'] = gethostbyname($device['fqdn']);
				} else {
					$device['ip_address'] = gethostbyname($device['host']);
				}
			}

			$log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $device['ip_address'] . " (" . $device['hostname'] . ") - scanning" . PHP_EOL;
			file_put_contents("/var/log/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);

			if ($device['version'] == 'snmpv2c') {$device['version'] = '2c';}

			$snmp_details->name = '';
			if (($device['community'] > '') and ($device['version'] == '2c') and ($device['ip_address'] > '')) {
				$encode['ip_address'] = $device['ip_address'];
				$encode['fqdn'] = $device['fqdn'];
				$encode['hostname'] = $device['hostname'];
				$encode['snmp_version'] = $device['version'];
				$encode['snmp_community'] = $device['community'];
				$encode['snmp_v3_sec_name'] = '';
				$encode['snmp_v3_sec_level'] = '';
				$encode['snmp_v3_auth_protocol'] = $device['authprotocol'];
				$encode['snmp_v3_auth_passphrase'] = $device['authpassword'];
				$encode['snmp_v3_priv_protocol'] = $device['privprotocol'];
				$encode['snmp_v3_priv_passphrase'] = $device['privpassword'];
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
				
				$snmp_details = get_snmp($device['ip_address'], $device['version'], $device['community']);
				$snmp_details->access_details = $encoded;
				$snmp_details->hostname = $device['hostname'];
				$snmp_details->nmis_group = $device['group'];
				$snmp_details->nmis_name = $device['name'];
				$snmp_details->nmis_role = $device['roleType'];
			}
			if ($snmp_details->name > '') {
				# we have a result from the SNMP query.
				# use this information to update the database
				$snmp_details->system_id = '';
				$snmp_details->system_id = $this->m_system->find_system($snmp_details);
				if ($snmp_details->system_id == '') {
					# insert a new device
					$log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $device['ip_address'] . " (" . $device['hostname'] . ") - insert snmp result" . PHP_EOL;
					file_put_contents("/var/log/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);
					$this->m_system->insert_snmp($snmp_details);

				} else {
					# update an existing device
					$log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $device['ip_address'] . " (" . $device['hostname'] . ") - update snmp result" . PHP_EOL;
					file_put_contents("/var/log/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);
					$this->m_system->update_snmp($snmp_details);
				}
				$this->m_oa_group->update_system_groups($snmp_details);
			} else {
				# todo - nothing from SNMP
				# just use the info we have from the file
				$node_file = '/usr/local/nmis8/var/asgard-node.nmis';
				if (file_exists($node_file)) {
					$node_handle = fopen($node_file, "r");
					$string = fread($node_handle, filesize($node_file));
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
						echo "Error importing $node_file<br />\n";
						echo 'Unknown error<br />';
						exit();
					  break;
					}
					$snmp_details->manufacturer = @$conf['system']['nodeVendor'];
					$snmp_details->man_manufacturer = @$conf['system']['nodeVendor'];
					$snmp_details->serial = @$conf['system']['serialNum'];
					$snmp_details->man_serial = @$conf['system']['serialNum'];
					$snmp_details->description = @$conf['system']['sysDescr'];
					$snmp_details->man_description = @$conf['system']['sysDescr'];
					$snmp_details->oid = @$conf['system']['sysObjectID'];
				}

				$snmp_details->system_id = '';
				$snmp_details->system_id = $this->m_system->find_system($snmp_details);
				if ($snmp_details->system_id == '') {
					# insert a new device
					$log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $device['ip_address'] . " (" . $device['hostname'] . ") - new basic result" . PHP_EOL;
					file_put_contents("/var/log/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);
					$this->m_system->insert_nmis($snmp_details);
				} else {
					# update an existing device
					$log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $device['ip_address'] . " (" . $device['hostname'] . ") - update basic result" . PHP_EOL;
					file_put_contents("/var/log/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);
					# $this->m_system->update_nmis($snmp_details);
				}
			}
		}
		$log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis Finishing nodes.nmis import" . PHP_EOL;
		file_put_contents("/var/log/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);
	}


}