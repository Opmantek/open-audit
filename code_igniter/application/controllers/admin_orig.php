<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin extends MY_Controller {

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

	function import_nmis() {
		if (!isset($_POST['import'])) {
			# show the form
			$this->data['heading'] = 'Import from NMIS';
			$this->data['include'] = 'v_import_nmis'; 
			$this->data['sortcolumn'] = '1';
			$this->load->view('v_template', $this->data);
		} else {
			$nodes_file = $_POST['nodes_file'];
			$this->load->helper('snmp_oid');
			$this->load->helper('snmp');
			$this->load->library('encrypt');
			$this->load->model("m_system");
			$this->load->model("m_oa_group");
			# the Nodes.nmis file should be located at /usr/local/nmis8/conf/Nodes.nmis
			# grab a list of the devices in the file

			# read in the Nodes.nmis file
			#$file_handle = fopen('/usr/local/nmis8/conf/Nodes.nmis', "r");
			#$string = fread($file_handle, filesize('/usr/local/nmis8/conf/Nodes.nmis'));
			
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
						# it's just a name
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
						$this->m_system->insert_snmp($snmp_details);
					} else {
						# update an existing device
						$this->m_system->update_snmp($snmp_details);
					}
					$this->m_oa_group->update_system_groups($snmp_details);
				} else {
					# todo - nothing from SNMP
					# just use the info we have from the file
					# $this->m_system->process_nmis($snmp_details);
				}
			}
			redirect('/');
		} # end "form" if
	}

	function scan_subnet_nmap() {
		# get subnet
		if (isset($_POST['ScanNmap'])) {
			if ($_POST['subnet'] > '' ) {
				$subnet = $_POST['subnet'];
				$cmd = "sudo /usr/share/open-audit/other/audit_subnet.sh subnet=$subnet >> /var/log/open-audit.log 2>&1 &";
				exec($cmd);
			}
			redirect('/');		
		} else {
			$this->data['heading'] = 'NMap Scanning';
			$this->data['include'] = 'v_scan_subnet_nmap'; 
			$this->data['sortcolumn'] = '1';
			$this->load->view('v_template', $this->data);
		}
	}

	function scan_ad() {
		#todo - make sure we're on Linux
		if (isset($_POST['ScanAD'])) {
			$this->load->model("m_system");
			$this->load->model("m_oa_group");
			$details = new stdClass;
			$ad_ldap_server = $_POST['ad_ldap_server'];
			$ad_ldap_connect = "ldap://" . $ad_ldap_server;
			$ad_user = $_POST['ad_user'];
			$ad_secret = $_POST['ad_secret'];
			$ad_domain_name = $_POST['ad_domain_name'];
			$dn = "dc=" . implode(", dc=", explode(".", $ad_domain_name));
			$ad = ldap_connect($ad_ldap_connect) or die("Couldn't connect to AD!");
			ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
			ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
			$bind = @ldap_bind($ad, $ad_user, $ad_secret);
			if ($bind){
				# extract the list of computers from AD
				$filter = "(&(objectclass=computer))";
				$justthese = array("dnshostname", "name", "location", "operatingSystem", "lastLogon", "pwdLastSet", "lastlogon", "distinguishedName");
				$sr = ldap_search($ad, $dn, $filter, $justthese);
				$info = ldap_get_entries($ad, $sr);
				for ($i = 0; $i < count($info)-1; $i++) {
					$details->dns_hostname = @strtolower($info[$i]['dnshostname'][0]);
					$j = explode(".", $details->dns_hostname);
					$details->hostname = $j[0];
					$details->man_ip_address = '0.0.0.0';
					$details->domain = $ad_domain_name;
					$details->type = 'system';
					$details->icon = 'windows';
					$details->os_name = "";
					$details->os_name = $info[$i]['operatingsystem'][0];
					if (strpos(strtolower($details->os_name), "windows") !== FALSE) {
						$details->os_group = "windows";
					} else {
						$details->os_group = "";
					}
					$details->os_family = "";
					if (strpos($details->os_name, " 95") !== FALSE) { $details->os_family = "Windows 95"; }
					if (strpos($details->os_name, " 98") !== FALSE) { $details->os_family = "Windows 98"; }
					if (strpos($details->os_name, " NT") !== FALSE) { $details->os_family = "Windows NT"; }
					if (strpos($details->os_name, "2000") !== FALSE) { $details->os_family = "Windows 2000"; }
					if (strpos($details->os_name, " XP") !== FALSE) { $details->os_family = "Windows XP"; $details->os_name = str_replace('Windows XP', 'Microsoft Windows XP', $details->os_name); }
					if (strpos($details->os_name, "2003") !== FALSE) { $details->os_family = "Windows 2003"; }
					if (strpos($details->os_name, "Vista") !== FALSE) { $details->os_family = "Windows Vista"; }
					if (strpos($details->os_name, "2008") !== FALSE) { $details->os_family = "Windows 2008"; $details->os_name = str_replace('Windows Server®', 'Microsoft Windows Server', $details->os_name);} 
					if (strpos($details->os_name, "Windows 7") !== FALSE) { $details->os_family = "Windows 7"; $details->os_name = str_replace('Windows 7', 'Microsoft Windows 7', $details->os_name); }
					if (strpos($details->os_name, "Windows 8") !== FALSE) { $details->os_family = "Windows 8"; }
					if (strpos($details->os_name, "2012") !== FALSE) { $details->os_family = "Windows 2012"; }

					if (@$info[$i]['lastlogon'][0] > @$info[$i]['pwdLastSet'][0]) {
						$details->last_seen = @$info[$i]['lastlogon'][0];
					} else {
						$details->last_seen = @$info[$i]['pwdLastSet'][0];
					}

					$j = $details->last_seen; 
					$k = $j / (10000000); 
					$l = ((1970-1601) * 365.242190) * 86400; 
					$m = intval($k-$l); 
					$details->last_seen = date("Y-m-d H:i:s", $m); 
					$details->last_seen_by = 'active directory';
					#$details->location = @$info[$i]['location'][0];
					$details->windows_active_directory_ou = '';
					$j = explode(",", @strtolower($info[$i]['distinguishedname'][0]));
					for ($k = 1; $k<count($j); $k++){
						$details->windows_active_directory_ou = $details->windows_active_directory_ou . "," . $j[$k];
					}
					$details->windows_active_directory_ou = substr($details->windows_active_directory_ou, 1);
					$details->icon = strtolower(str_replace(" ", "_", $details->os_family));
					$full_name = $details->dns_hostname;
					$query = `nslookup -timeout=5 -retry=1 $full_name `;
					if(preg_match('/\nAddress: (.*)\n/', $query, $matches)) { $details->man_ip_address = trim($matches[1]); }
					if ($details->man_ip_address == '0.0.0.0') {
						# try using the domain controller to rsolve DNS
						$query = `nslookup -timeout=5 -retry=1 $full_name $ad_ldap_server `;
						if(preg_match('/\nAddress: (.*)\n/', $query, $matches)) { $details->man_ip_address = trim($matches[1]); }
					}
					$details->system_id = $this->m_system->process_system_from_ad($details);
					$this->m_oa_group->update_system_groups($details);
				}
				redirect('/');
			} else {
				# todo - redirect to homepage and create an alert to show on screen
				echo "Could not connect to AD.";
			}
		} else {
			$this->data['heading'] = 'Scanning';
			$this->data['include'] = 'v_scan_ad'; 
			$this->data['sortcolumn'] = '1';
			$this->load->view('v_template', $this->data);
		}


		
	}


	function add_script_audit_windows() {
		if (!isset($_POST['AddScript'])) {
			# display the form
			$this->load->model("m_oa_org");	
			$this->data['org_names'] = $this->m_oa_org->get_org_names();
			$this->data['heading'] = 'Create a Windows Audit Script';
			$this->data['include'] = 'v_add_script_audit_windows'; 
			$this->data['sortcolumn'] = '1';
			$this->load->view('v_template', $this->data);
		} else {
			# process the form
			if ($_POST['strcomputer'] == '') { $variable['strcomputer'] = '.'; } else { $variable['strcomputer'] = $_POST['strcomputer']; }
			if (isset($_POST['submit_online'])) { $variable['submit_online'] = 'y'; } else { $variable['submit_online'] = 'n'; }
			if (isset($_POST['create_file'])) { $variable['create_file'] = 'y'; } else { $variable['create_file'] = 'n'; }
			$variable['url'] = $_POST['url'];
			if (isset($_POST['use_proxy'])) { $variable['use_proxy'] = 'y'; } else { $variable['use_proxy'] = 'n'; }
			$variable['struser'] = $_POST['struser'];
			$variable['strpass'] = $_POST['strpass'];
			if ($_POST['org_id'] == '0') { $variable['org_id'] = ''; } else { $variable['org_id'] = $_POST['org_id']; }
			$variable['windows_user_work_1'] = $_POST['windows_user_work_1'];
			$variable['windows_user_work_2'] = $_POST['windows_user_work_2'];
			if (isset($_POST['skip_mount_point'])) { $variable['skip_mount_point'] = 'y'; } else { $variable['skip_mount_point'] = 'n'; }
			if (isset($_POST['skip_printer'])) { $variable['skip_printer'] = 'y'; } else { $variable['skip_printer'] = 'n'; }
			if (isset($_POST['skip_software'])) { $variable['skip_software'] = 'y'; } else { $variable['skip_software'] = 'n'; }
			if (isset($_POST['skip_dns'])) { $variable['skip_dns'] = 'y'; } else { $variable['skip_dns'] = 'n'; }
			if (isset($_POST['self_delete'])) { $variable['self_delete'] = 'y'; } else { $variable['self_delete'] = 'n'; }
			$variable['debugging'] = $_POST['debugging'];
			if (isset($_POST['ldap'])) { $variable['ldap'] = $_POST['ldap']; } else { $variable['ldap'] = ''; }
			$variable['ldap_seen_days'] = $_POST['ldap_seen_days'];
			$variable['ldap_seen_date'] = $_POST['ldap_seen_date'];
			if (isset($_POST['ping_target'])) { $variable['ping_target'] = 'y'; } else { $variable['ping_target'] = 'n'; }
			$filename = dirname(dirname(dirname(dirname(__FILE__)))) . "/other/audit_windows.vbs";
			if (!file_exists($filename)) {
				exit("Error - $filename does not exist.<br />\n");
			}
			$file = file($filename);
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

	function edit_config() {
		$this->load->model("m_oa_config");
		$this->data['query'] = $this->m_oa_config->get_config();
		$this->data['heading'] = 'Edit Config';
		$this->data['include'] = 'v_edit_config'; 
		$this->data['sortcolumn'] = '0';
		$this->load->view('v_template', $this->data);
	}

	function ad_import() {
		if (!isset($_POST['form_systemXML'])) {
			$this->data['heading'] = 'Import Active Directory';
			$this->data['include'] = 'v_add_active_directory';
			$this->load->view('v_template', $this->data);
		} else {
			set_time_limit(6000);
			$this->load->helper('xml');
			$this->load->model("m_system");
			$this->load->model("m_oa_group");
			$timestamp = date('Y-m-d H:i:s');
			$xml_input = iconv("UTF-8", "UTF-8//TRANSLIT", $this->input->post('form_systemXML'));
			try {
				$xml = new SimpleXMLElement($xml_input);
			} catch (Exception $e) {
				# not a valid XML string
				$error_output = "Invalid XML input for Active Directory import.";
				error_log($error_output);
				exit;
			}
			$count = 0;
			foreach ($xml->children() as $child) {
				$count++;
				if ($child->getName() == 'computer') { $details->system_id = ($this->m_system->process_system_from_ad($child));}
				$details->type = 'system';
				if ($details->system_id > '0') {
					// this is a new system - update its GROUPS
					echo "Updating Groups (new system)<br />\n";
					$this->m_oa_group->update_system_groups($details);
				}
			}
			echo "Count: " . $count . "<br />\n";
			echo "<a href='" . base_url() . "index.php/admin/ad_import'>Back to input page</a><br />\n";
		}
	}

	function bulk_import() {
		# load the import form
		$this->data['heading'] = 'Bulk Import';
		$this->data['include'] = 'v_bulk_import'; 
		$this->load->view('v_template', $this->data);
	}
	
	function process_bulk_import() {
		$this->load->helper('xml');
		$this->load->model("m_system");
		$this->load->model("m_oa_location");
		$this->load->model("m_oa_org");
		$xml_post = utf8_encode(str_replace('&', '&amp;', $this->input->post('form_systemXML')));
		$xml = new SimpleXMLElement(utf8_encode(str_replace('&', '&amp;', $this->input->post('form_systemXML'))));
		foreach ($xml->children() as $child) {			
			if ($child->getName() == 'location') {
				echo $child->location_name . "<br />\n";
				if ($location_id = $this->m_oa_location->get_location_id($child->location_name)) {
					# we need to update an existing location
					$sql = "UPDATE oa_location SET ";
					foreach ($child->children() as $detail) {
						if ($detail->getName() != 'location_name') {
							$sql .= $detail->getName() . " = '" . $detail . "', "; 
						} 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= " WHERE location_name = '" . $child->location_name . "'";
				} else {
					# this is a new location (we don't have a name match)
					$sql = "INSERT INTO oa_location ( ";
					foreach ($child->children() as $detail) {
						#if ($detail->getName() != 'location_name')
						#{
							$sql .= $detail->getName() . ", "; 
						#} 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= " ) VALUES ( ";
					foreach ($child->children() as $detail) {
						#if ($detail->getName() != 'location_name')
						#{
							$sql .= "'" . mysql_real_escape_string (str_replace('"', '', $detail)) . "', "; 
						#} 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= ")";
				}
				if ($child->location_name != '') { 
					# run the query !!!
					$query = $this->db->query($sql);
				} else { 
					echo "no location name provided"; 
				}
			}
			
			if ($child->getName() == 'organisation') {
				echo $child->org_name . "<br />\n";
				if ($org_id = $this->m_oa_org->select_org($child->org_name)) {
					# we need to update an existing org
					$sql = "UPDATE oa_org SET ";
					foreach ($child->children() as $detail) {
						if ($detail->getName() != 'org_name')
						{
							$sql .= $detail->getName() . " = '" . $detail . "', "; 
						} 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= " WHERE org_name = '" . $child->org_name . "'";
				} else {
					# this is a new org (we don't have a name match)
					$sql = "INSERT INTO oa_org ( ";
					foreach ($child->children() as $detail) {
						if ($detail->getName() != 'org_name') {
							$sql .= $detail->getName() . ", "; 
						} 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= " ) VALUES ( ";
					foreach ($child->children() as $detail) {
						if ($detail->getName() != 'org_name') {
							$sql .= "'" . $detail . "', "; 
						} 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= ")";
					
				}
				if ($child->org_name != '') 
				{ 
					# run the query !!!
					$query = $this->db->query($sql);
				} else { 
					echo "no org name provided"; 
				}
			}
			
			
			if ($child->getName() == 'system') 
			{
				if ($child->org_name != '') {
					#echo "Org: " . $child->org_name . "<br />\n";
					# we have an org name - need to find it's ID
					if($org_id = $this->m_oa_org->select_org($child->org_name)) {
						# we have a matching org
						$sql_org = "man_org_id = '" . $org_id . "', ";
					} else {
						# no matching org name
						$sql_org = '';
					}
				} else {
					$sql_org = '';
				}
				
				if ($child->location_name != '')  {
					#echo "Location: " . $child->location_name . "<br />\n";
					# we have a location name - need to find it's ID
					if ($location_id = $this->m_oa_location->get_location_id($child->location_name)) {
						# we have a match
						$sql_loc = "man_location_id = '" . $location_id . "', ";
					} else {
						# no match
						$sql_loc = '';
					}
				}

				echo "Hostname: " . $child->hostname . "<br />\n";
				if ($system_id = $this->m_system->get_system_id_from_hostname($child->hostname)) {
					# we have an existing system - need to update it
					$sql = "UPDATE system SET ";
					foreach ($child->children() as $detail) {
						if (mb_strpos($detail->getName(), 'man_') !== false ) {
							$sql .= $detail->getName() . " = '" . $detail . "', "; 
						}
					}
					$sql .= $sql_org . $sql_loc;
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= " WHERE hostname = '" . mb_strtolower($child->hostname) . "'";
					if ($child->hostname != '') { 
						# run the query !!!
						$query = $this->db->query($sql);
					} else { 
						# fail
						echo "no hostname provided"; 
					}
				} else {
					# this is a new system, not yet audited
					$sql = "INSERT INTO system (system_id, hostname, type, man_status, timestamp, first_timestamp, ";
					foreach ($child->children() as $detail) {
						if (mb_strpos($detail->getName(), 'man_') !== false ) {
							$sql .= $detail->getName() . ", "; 
						}
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= " ) VALUES ( NULL, '" . mb_strtolower($child->hostname) . "', 'system', 'production', '" . date('Y-m-d G:i:s') . "', '" . date('Y-m-d G:i:s') . "', ";
					foreach ($child->children() as $detail) {
						if (mb_strpos($detail->getName(), 'man_') !== false ) {
							$sql .= "'" . $detail . "', "; 
						} 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= ")";
					if ($child->hostname != '') 
					{ 
						# todo - we should use the update_system_man function in m_system for this.
						# run the query !!!
						$query = $this->db->query($sql);
						$system_id = $this->db->insert_id();
						$sql = "INSERT INTO oa_group_sys SET system_id = ?, group_id = '1', group_sys_type = 'system'";
						$data = array($system_id);
						$query = $this->db->query($sql, $data);
						# todo - we should use the insert_audit function in m_sys_man_audits for this
						$sql = "
						INSERT INTO 
							sys_man_audits ( 
								system_id, 
								system_audits_username, 
								system_audits_type, 
								system_audits_time, 
								timestamp 
							) VALUES (
								?, 
								?, 
								?, 
								?, 
								?)";
						$data = array("$system_id", "bulk insert", "online", date('Y-m-d G:i:s'), date('Y-m-d G:i:s'));
						$query = $this->db->query($sql, $data);
					} else { 
						# fail
						echo "no hostname provided"; 
					}
				}
			}
		}
	}

	function bulk_update_from_file() {
		error_reporting(E_ALL);

		/** PHPExcel_IOFactory */
		require_once BASEPATH . '../application/libraries/phpexcel/PHPExcel/IOFactory.php';

		$filename = dirname(__FILE__) . '\\' . "cisco_farm.xls";
		
		if (!file_exists($filename)) {
			exit("File cisco_farm.xls does not exist.\n");
		}

		if (!$objPHPExcel = PHPExcel_IOFactory::load($filename)) {
			exit;
		} else {}
		
		$attributes = array();
		$details = array();
		
		$this->load->model("m_system");
		$this->load->model("m_sys_man_audits");
		$this->load->model("m_oa_group");
		$this->load->model("m_oa_location");
		$this->load->model("m_oa_org");
		
		$objWorksheet = $objPHPExcel->getActiveSheet();
		$count = 0;
		foreach ($objWorksheet->getRowIterator() as $row) {
			$cellIterator = $row->getCellIterator();
			$cellIterator->setIterateOnlyExistingCells(false); 
			if ($count == 0) {
				foreach ($cellIterator as $cell) {
					$attributes[] = $cell->getValue();
				}
			} else {
				# here we go - turn the row into an array (based on row1's names)
				# once done, check to see if we have an ORG_NAME or LOCATION_NAME and retrieve the relevant ID's
				# once that is done, update or insert the "system"
				$cell_number = 0;
				foreach ($cellIterator as $cell) {
					$details[$attributes[$cell_number]] = $cell->getValue();
					$cell_number++;
				}
				# OK, we now have the row in an array
				
				# get the org_id (if set)
				if ( isset($details['org_name']) AND !isset($details['man_org_id']) ) {
					if($org_id = $this->m_oa_org->select_org($details['org_name'])) {
						# we have a matching org
						$details['man_org_id'] = $org_id;
					} else {
						# no matching org name
						$details['man_org_id'] = '';
					}
				} else {
					$details['man_org_id'] = '';
				}
				
				# get the location_id (if set)
				if ( (isset($details['location_name'])) AND (!isset($details['man_location_id'])) ) {
					if ($location_id = $this->m_oa_location->get_location_id($details['location_name'])) {
						# we have a matching location
						$details['man_location_id'] = $location_id;
					} else {
						$details['man_location_id'] = '';
					}
				} else {
					$details['man_location_id'] = '';
				}
				
				if ( !isset($details['hostname']) OR $details['hostname'] == '' ) {
					# we dont have a hostname, therefore substitute the IP Address
					if ( isset($details['man_ip_address']) ) {
						$details['hostname'] = $details['man_ip_address'];
					} else {
						$details['hostname'] = 'unknown';
					}
				}
				$details['hostname'] = mb_strtolower($details['hostname']);
				
				$details['timestamp'] = date('Y-m-d H:i:s');
				
				# account for manually set items
				if (!isset($details['man_os_family'])){ $details['man_os_family'] = $details['os_family']; }
				if (!isset($details['man_os_name'])){ $details['man_os_name'] = $details['os_name']; }
				if (!isset($details['man_domain'])){ $details['man_domain'] = $details['domain']; }
				if (!isset($details['man_acting_server'])){ $details['man_acting_server'] = 'no'; }
				if (!isset($details['man_status'])){ $details['man_status'] = 'production'; }
				if (!isset($details['man_environment'])){ $details['man_environment'] = 'production'; }
				if (!isset($details['man_criticality'])){ $details['man_criticality'] = 'critical'; }
				if (!isset($details['man_description'])){ $details['man_description'] = $details['description']; }
				if (!isset($details['man_type'])){ $details['man_type'] = $details['type']; }
				if (!isset($details['man_ip_address'])){ $details['man_ip_address'] = $details['ip_address']; }
				if (!isset($details['man_serial'])){ $details['man_serial'] = $details['serial']; }
				if (!isset($details['man_model'])){ $details['man_model'] = $details['model']; }
				if (!isset($details['man_manufacturer'])){ $details['man_manufacturer'] = $details['manufacturer']; }
				if (!isset($details['man_icon'])){ $details['man_icon'] = $details['icon']; }
				if (!isset($details['man_form_factor'])){ $details['man_form_factor'] = $details['form_factor']; }
					
				if (isset($details['uuid'])) {
					$details['system_key'] = $details['uuid'] . '-' . $details['hostname'];
				} else {
					$details['uuid'] = '';
					$details['system_key'] = $details['hostname'];
				}
				
				# need to determine if this system already exists
				# first check to see if we received a system_id
				# if we didn't, then try to match on hostname
				if (isset($details['system_id'])) {
					# don't do anything - we already have a system_id
				} else {
					$details['system_id'] = $this->m_system->get_system_id_from_hostname($details['hostname']);
				}
				
				# make the array into an object
				
				$object = new stdClass();
				foreach ($details AS $name=>$value) {
					$object->$name = $value;
				}
				
				if ( ($object->uuid == '') AND ($object->hostname == '') ) {
					# do not attempt to update or insert - not enough info to determine a unique system
				} else {
					# update or insert
					if ($object->system_id > '') {
						# run an update
						$sql = "UPDATE system SET ";
						foreach($object as $key => $value) {
							if (($key != 'system_id') AND ($key != 'location_name') AND ($key != 'org_name')) {
								$sql .= $key . " = '" . $value . "', ";
							}
						}
						$sql = mb_substr($sql, 0, -2);
						$sql .= " WHERE system_id = '" . $object->system_id . "'";
						$query = $this->db->query($sql);						
					} else {
						# run an insert
						$sql = "INSERT INTO system (";
						foreach($object as $key => $value) {
							if (($key != 'system_id') AND ($key != 'location_name') AND ($key != 'org_name')) {
								$sql .= $key . ", ";
							}
						}
						$sql = mb_substr($sql, 0, -2);
						$sql .= ") VALUES (";
						foreach($object as $key => $value) {
							if (($key != 'system_id') AND ($key != 'location_name') AND ($key != 'org_name')) {
								$sql .= "'" . $value . "', ";
							}
						}
						$sql = mb_substr($sql, 0, -2);
						$sql .= ")";
						$query = $this->db->query($sql);
						$object->system_id = $this->db->insert_id();
					}
				}
				$this->m_sys_man_audits->insert_audit($object);
				$this->m_oa_group->update_system_groups($object);
				echo $sql . "<br />\n";
				echo "<pre>\n";
				print_r($object);
				echo "</pre>\n";
				$details = NULL;
			}
			$count ++;
		}
		echo "<pre>\n";
		print_r($attributes);
		echo "</pre>\n";
	}


	function upgrade() {		
		error_reporting(E_ALL);		

		$web_internal_version = $this->config->item('web_internal_version');
		$web_display_version = $this->config->item('web_display_version');
		
		$this->load->model("m_oa_config");
		$config = $this->m_oa_config->get_config();
		foreach ($config as $returned_result) {
			if (isset($returned_result->config_name)) {
				if ($returned_result->config_name == 'internal_version') {
					$db_internal_version = $returned_result->config_value;
				}
				if ($returned_result->config_name == 'display_version') {
					$db_display_version = $returned_result->config_value;
				}
			}
		}
		
		$this->data['output'] =  "Current web version: "      . $web_display_version . " (" . $web_internal_version . ")<br />\n";
		$this->data['output'] .= "Current database version: " . $db_display_version . " (" . $db_internal_version . ")<br /><br />\n";
		$this->data['output'] .= "Database type: " . $this->db->platform() . "<br /><br />\n";

		
		if (($db_internal_version < '20111001') AND ($this->db->platform() == 'mysql')) {
			# upgrade for beta3
			$this->db->trans_start();

			$this->data['output'] .= "Upgrading to beta3.<br />Transaction starting.<br /><br />\n";
			
			$sql = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_status hard_drive_status varchar(100) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE sys_hw_partition DROP FOREIGN KEY sys_hw_partition_hard_drive_index";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE sys_man_audits ADD audit_debug text NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE sys_sw_service MODIFY service_path_name text NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE sys_sw_software ADD software_installed_by varchar(100) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE sys_sw_software ADD software_installed_on datetime NOT NULL default '0000-00-00 00:00:00'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE system ADD uptime varchar(50) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE system ADD pc_os_bit varchar(3) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "INSERT INTO oa_config (config_name, config_value) VALUES ('internal_version', '20111001')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "INSERT INTO oa_config (config_name, config_value) VALUES ('display_version', 'beta3')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$this->db->trans_complete();
			
			if ($this->db->trans_status() === FALSE) {
				$this->data['output'] .= "ALERT - error encountered. Transactions rolled back.<br /><br />\n";
			} else {
				$this->data['output'] .= "Transaction committed.<br />beta3 upgrade successful.<br /><br />\n";
			}
		} 

		if (($db_internal_version < '20111010') AND ($this->db->platform() == 'mysql')) {
			# upgrade for beta4
			$this->db->trans_start();

			$this->data['output'] .= "Upgrading to beta4.<br />Transaction starting.<br /><br />\n";
			
			$sql = "UPDATE oa_group SET group_dynamic_select = 'SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\'' WHERE group_id = '1'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			
			$sql = "CREATE TABLE `sys_hw_warranty` ( `warranty_id` int(10) unsigned NOT NULL auto_increment, `system_id` int(10) unsigned default NULL, `warranty_provider` varchar(200) NOT NULL default '', `warranty_type` varchar(100) NOT NULL default '', `warranty_start` datetime NOT NULL default '0000-00-00 00:00:00', `warranty_end` datetime NOT NULL default '0000-00-00 00:00:00', `timestamp` datetime NOT NULL default '0000-00-00 00:00:00', `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (`warranty_id`), KEY `system_id` (`system_id`), CONSTRAINT `sys_hw_warranty_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO `oa_group_column` VALUES  (NULL, '1', '1', 'Hostname', 		'hostname', 		'link', 		'main/system_display/', 'system_id', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO `oa_group_column` VALUES  (NULL, '1', '2', 'Description',	'man_description', 	'text', 		'', 					'', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO `oa_group_column` VALUES  (NULL, '1', '3', 'IP Address',  	'man_ip_address', 	'ip_address', 	'', 					'', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO `oa_group_column` VALUES  (NULL, '1', '4', 'Type', 			'man_icon', 		'image', 		'', 					'man_os_family', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO `oa_group_column` VALUES  (NULL, '1', '5', 'OS / Device', 	'man_os_name', 		'text', 		'', 					'', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO `oa_group_column` VALUES  (NULL, '1', '6', 'Tags', 			'tag', 				'text', 		'', 					'', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20111010' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = 'beta4' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$this->db->trans_complete();
			
			if ($this->db->trans_status() === FALSE) {
				$this->data['output'] .= "ALERT - error encountered. Transactions rolled back.<br /><br />\n";
			} else {
				$this->data['output'] .= "Transaction committed.<br />beta4 upgrade successful.<br /><br />\n";
			}
		}
		
			
			
		if (($db_internal_version < '20120317') AND ($this->db->platform() == 'mysql')) {
			# upgrade for beta5
			$this->db->trans_start();

			$this->data['output'] .= "Upgrading to beta5.<br />Transaction starting.<br /><br />\n";

			$sql = "ALTER TABLE sys_hw_monitor ADD size varchar(5) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_monitor ADD aspect_ratio varchar(5) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD man_class enum ('desktop', 'laptop', 'tablet', 'workstation', 'server', 'virtual server', 'virtual desktop', '') NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE system ADD last_seen DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD last_seen_by VARCHAR(150) NOT NULL DEFAULT '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD last_user VARCHAR(150) NOT NULL DEFAULT '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_log_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_log_user_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_oa_change";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_alert_log ADD CONSTRAINT `oa_alert_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_alert_log ADD CONSTRAINT `oa_alert_log_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_alert_log ADD CONSTRAINT `oa_alert_oa_change` FOREIGN KEY (`change_id`) REFERENCES `oa_change` (`change_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_audit_log DROP FOREIGN KEY oa_audit_log_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_audit_log DROP FOREIGN KEY oa_audit_log_user_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_audit_log ADD CONSTRAINT `oa_audit_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_audit_log ADD CONSTRAINT `oa_audit_log_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_change DROP FOREIGN KEY oa_change_user_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_change ADD CONSTRAINT `oa_change_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_change_log DROP FOREIGN KEY oa_change_log_change_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_change_log DROP FOREIGN KEY oa_change_log_user_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_change_log ADD CONSTRAINT `oa_change_log_change_id` FOREIGN KEY (`change_id`) REFERENCES `oa_change` (`change_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_change_log ADD CONSTRAINT `oa_change_log_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_graph DROP FOREIGN KEY oa_graph_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_graph ADD CONSTRAINT `oa_graph_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_column DROP FOREIGN KEY oa_group_column_group_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_column ADD CONSTRAINT `oa_group_column_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE oa_group_sys DROP FOREIGN KEY oa_group_sys_group_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE oa_group_sys DROP FOREIGN KEY oa_group_sys_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_sys ADD CONSTRAINT `oa_group_sys_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_sys ADD CONSTRAINT `oa_group_sys_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_user DROP FOREIGN KEY oa_group_user_group_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_user DROP FOREIGN KEY oa_group_user_user_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_user ADD CONSTRAINT `oa_group_user_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_user ADD CONSTRAINT `oa_group_user_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location_org DROP FOREIGN KEY oa_loc_org_loc_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location_org DROP FOREIGN KEY oa_loc_org_org_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location_org ADD CONSTRAINT `oa_loc_org_loc_id` FOREIGN KEY (`location_id`) REFERENCES `oa_location` (`location_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location_org ADD CONSTRAINT `oa_loc_org_org_id` FOREIGN KEY (`org_id`) REFERENCES `oa_org` (`org_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_nmap_ports DROP FOREIGN KEY oa_net_nmap_ports_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_nmap_ports ADD CONSTRAINT `oa_net_nmap_ports_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_scan_latest DROP FOREIGN KEY oa_net_scan_latest_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_scan_latest ADD CONSTRAINT `oa_net_scan_latest_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_scan_log DROP FOREIGN KEY oa_net_scan_log_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_scan_log ADD CONSTRAINT `oa_net_scan_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_scan_type DROP FOREIGN KEY oa_net_scan_type_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_scan_type ADD CONSTRAINT `oa_net_scan_type_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_report_column DROP FOREIGN KEY oa_report_column_group_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_report_column ADD CONSTRAINT `oa_report_column_group_id` FOREIGN KEY (`report_id`) REFERENCES `oa_report` (`report_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_switch_ports DROP FOREIGN KEY oa_switch_ports_switch_switch_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_switch_ports DROP FOREIGN KEY oa_switch_ports_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_switch_ports ADD CONSTRAINT `oa_switch_ports_switch_switch_id` FOREIGN KEY (`switch_system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_switch_ports ADD CONSTRAINT `oa_switch_ports_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_battery DROP FOREIGN KEY sys_hw_battery_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_battery ADD CONSTRAINT `sys_hw_battery_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_bios DROP FOREIGN KEY sys_hw_bios_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_bios ADD CONSTRAINT `sys_hw_bios_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_graphs_disk DROP FOREIGN KEY sys_hw_graphs_disk_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_graphs_disk ADD CONSTRAINT `sys_hw_graphs_disk_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_hard_drive DROP FOREIGN KEY sys_hw_hard_drive_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_hard_drive ADD CONSTRAINT `sys_hw_hard_drive_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_memory DROP FOREIGN KEY sys_hw_memory_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_memory ADD CONSTRAINT `sys_hw_memory_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_modem DROP FOREIGN KEY sys_hw_modem_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_modem ADD CONSTRAINT `sys_hw_modem_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_monitor DROP FOREIGN KEY sys_hw_monitor_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_monitor ADD CONSTRAINT `sys_hw_monitor_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_motherboard DROP FOREIGN KEY sys_hw_motherboard_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_motherboard ADD CONSTRAINT `sys_hw_motherboard_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_network_card DROP FOREIGN KEY sys_hw_network_card_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_network_card ADD CONSTRAINT `sys_hw_network_card_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_network_card_ip DROP FOREIGN KEY sys_hw_network_card_ip_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_network_card_ip ADD CONSTRAINT `sys_hw_network_card_ip_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_optical_drive DROP FOREIGN KEY sys_hw_optical_drive_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_optical_drive ADD CONSTRAINT `sys_hw_optical_drive_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_partition DROP FOREIGN KEY sys_hw_partition_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_partition ADD CONSTRAINT `sys_hw_partition_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_processor DROP FOREIGN KEY sys_hw_processor_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_processor ADD CONSTRAINT `sys_hw_processor_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_scsi_controller DROP FOREIGN KEY sys_hw_scsi_controller_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_scsi_controller ADD CONSTRAINT `sys_hw_scsi_controller_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_sound DROP FOREIGN KEY sys_hw_sound_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_sound ADD CONSTRAINT `sys_hw_sound_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_video DROP FOREIGN KEY sys_hw_video_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_video ADD CONSTRAINT `sys_hw_video_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE sys_hw_warranty DROP FOREIGN KEY sys_hw_warranty_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_warranty ADD CONSTRAINT `sys_hw_warranty_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_audits DROP FOREIGN KEY sys_man_audits_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_audits ADD CONSTRAINT `sys_man_audits_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_additional_fields DROP FOREIGN KEY sys_man_additional_fields_group_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_additional_fields ADD CONSTRAINT `sys_man_additional_fields_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_additional_fields_data DROP FOREIGN KEY sys_man_additional_fields_data_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_additional_fields_data ADD CONSTRAINT `sys_man_additional_fields_data_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_additional_fields_data DROP FOREIGN KEY sys_man_additional_fields_data_field_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_additional_fields_data ADD CONSTRAINT `sys_man_additional_fields_data_field_id` FOREIGN KEY (`field_id`) REFERENCES `sys_man_additional_fields` (`field_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_notes DROP FOREIGN KEY sys_man_notes_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_notes ADD CONSTRAINT `sys_man_notes_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_notes DROP FOREIGN KEY sys_man_notes_user_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_notes ADD CONSTRAINT `sys_man_notes_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`)";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_antivirus DROP FOREIGN KEY sys_sw_antivirus_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_antivirus ADD CONSTRAINT `sys_sw_antivirus_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database DROP FOREIGN KEY sys_sw_db_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database ADD CONSTRAINT `sys_sw_db_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database_details DROP FOREIGN KEY sys_sw_db_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database_details ADD CONSTRAINT `sys_sw_db_id` FOREIGN KEY (`db_id`) REFERENCES `sys_sw_database` (`db_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database_log DROP FOREIGN KEY sys_sw_db_details_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database_log ADD CONSTRAINT `sys_sw_db_details_id` FOREIGN KEY (`details_id`) REFERENCES `sys_sw_database_details` (`details_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_firewall DROP FOREIGN KEY sys_sw_firewall_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_firewall ADD CONSTRAINT `sys_sw_firewall_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_firewall_auth_app DROP FOREIGN KEY sys_sw_firewall_auth_app_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_firewall_auth_app ADD CONSTRAINT `sys_sw_firewall_auth_app_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_firewall_ports DROP FOREIGN KEY sys_sw_firewall_ports_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_firewall_ports ADD CONSTRAINT `sys_sw_firewall_ports_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_group DROP FOREIGN KEY sys_sw_groups_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_group ADD CONSTRAINT `sys_sw_groups_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_log DROP FOREIGN KEY sys_sw_log_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_log ADD CONSTRAINT `sys_sw_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_route DROP FOREIGN KEY sys_sw_ip_route_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_route ADD CONSTRAINT `sys_sw_ip_route_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_pagefile DROP FOREIGN KEY sys_sw_pagefile_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_pagefile ADD CONSTRAINT `sys_sw_pagefile_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_scheduled_task DROP FOREIGN KEY sys_sw_scheduled_task_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_scheduled_task ADD CONSTRAINT `sys_sw_scheduled_task_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_service DROP FOREIGN KEY sys_sw_service_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_service ADD CONSTRAINT `sys_sw_service_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_share DROP FOREIGN KEY sys_sw_share_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_share ADD CONSTRAINT `sys_sw_share_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_share_perms DROP FOREIGN KEY sys_sw_share_perm_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_share_perms ADD CONSTRAINT `sys_sw_share_perm_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_share_perms DROP FOREIGN KEY sys_sw_share_perm_share_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_share_perms ADD CONSTRAINT `sys_sw_share_perm_share_id` FOREIGN KEY (`share_id`) REFERENCES `sys_sw_share` (`share_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_software DROP FOREIGN KEY sys_sw_software_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_software ADD CONSTRAINT `sys_sw_software_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_software_key DROP FOREIGN KEY sys_sw_software_key_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_software_key ADD CONSTRAINT `sys_sw_software_key_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_startup DROP FOREIGN KEY sys_sw_startup_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_startup ADD CONSTRAINT `sys_sw_startup_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_user DROP FOREIGN KEY sys_sw_user_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_user ADD CONSTRAINT `sys_sw_user_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_variable DROP FOREIGN KEY sys_sw_variable_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_variable ADD CONSTRAINT `sys_sw_variable_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_server DROP FOREIGN KEY sys_sw_web_server_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_server ADD CONSTRAINT `sys_sw_web_server_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_server_ext DROP FOREIGN KEY sys_sw_web_server_extn_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_server_ext ADD CONSTRAINT `sys_sw_web_server_extn_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_server_ext DROP FOREIGN KEY sys_sw_web_server_extn_server_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_server_ext ADD CONSTRAINT `sys_sw_web_server_extn_server_id` FOREIGN KEY (`webserver_id`) REFERENCES `sys_sw_web_server` (`webserver_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site DROP FOREIGN KEY sys_sw_web_site_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site ADD CONSTRAINT `sys_sw_web_site_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site DROP FOREIGN KEY sys_sw_web_site_server_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site ADD CONSTRAINT `sys_sw_web_site_server_id` FOREIGN KEY (`webserver_id`) REFERENCES `sys_sw_web_server` (`webserver_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_header DROP FOREIGN KEY sys_sw_web_site_header_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_header ADD CONSTRAINT `sys_sw_web_site_header_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_header DROP FOREIGN KEY sys_sw_web_site_header_site_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_header ADD CONSTRAINT `sys_sw_web_site_header_site_id` FOREIGN KEY (`site_id`) REFERENCES `sys_sw_web_site` (`site_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_virtual DROP FOREIGN KEY sys_sw_web_site_virtual_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_virtual ADD CONSTRAINT `sys_sw_web_site_virtual_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_virtual DROP FOREIGN KEY sys_sw_web_site_virtual_site_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_virtual ADD CONSTRAINT `sys_sw_web_site_virtual_site_id` FOREIGN KEY (`site_id`) REFERENCES `sys_sw_web_site` (`site_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_windows DROP FOREIGN KEY sys_sw_windows_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_windows ADD CONSTRAINT `sys_sw_windows_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20120317' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = 'beta5' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$this->db->trans_complete();
			
			if ($this->db->trans_status() === FALSE) {
				$this->data['output'] .= "ALERT - error encountered. Transactions rolled back.<br /><br />\n";
			} else {
				$this->data['output'] .= "Transaction committed.<br />beta5 upgrade successful.<br /><br />\n";
			}
		}

		if (($db_internal_version < '20120530') AND ($this->db->platform() == 'mysql')) {
			# upgrade for beta6

			$this->data['output'] .= "Upgrading to beta6.<br /><br />\n";

			$sql = "ALTER TABLE oa_user MODIFY user_password varchar(250) NOT NULL ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "CREATE INDEX hostname ON system (hostname) ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "CREATE INDEX linked_sys ON system (linked_sys) ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "CREATE INDEX system_key ON system (system_key) ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "CREATE INDEX user_id_index ON oa_user (user_id) ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "CREATE INDEX user_id_index ON oa_group_user (user_id) ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "CREATE INDEX system_id_index ON oa_group_sys (system_id) ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "CREATE INDEX group_id_index ON oa_group (group_id) ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "DROP TABLE IF EXISTS sys_sw_dns";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "CREATE TABLE `sys_sw_dns` (`dns_id` int(10) unsigned NOT NULL auto_increment, `system_id` int(10) unsigned default NULL, `dns_name` varchar(100) NOT NULL default '', `dns_full_name` varchar(200) NOT NULL default '', `dns_ip_address` varchar(30) NOT NULL default '', `timestamp` datetime NOT NULL default '0000-00-00 00:00:00', `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (`dns_id`), KEY `system_id` (`system_id`), CONSTRAINT `sys_sw_dns_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database_details ADD system_id int(10) unsigned default NULL ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE sys_sw_database_log ADD system_id int(10) unsigned NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database ADD db_version_string varchar(50) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database ADD db_edition varchar(50) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database_details ADD details_instance varchar(50) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system CHANGE man_status man_status enum('production', 'retired', 'maintenance', 'deleted', 'unallocated', 'lost') NOT NULL default 'production' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD printer_color varchar(5) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD printer_duplex varchar(5) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD man_service_provider varchar(100) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD man_service_number varchar(100) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD man_service_type varchar(100) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD man_service_plan varchar(100) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD man_service_network varchar(100) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD man_unlock_pin varchar(100) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD man_serial_imei varchar(100) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD man_serial_sim varchar(100) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "CREATE TABLE `sys_sw_print_queue` (`queue_id` int(10) unsigned NOT NULL auto_increment, `system_id` int(10) unsigned default NULL, `queue_system_key` varchar(100) NOT NULL default '', `queue_name` varchar(100) NOT NULL default '', `queue_port_name` varchar(100) NOT NULL default '', `queue_ip_address` varchar(100) NOT NULL default '', `queue_description` varchar(100) NOT NULL default '', `queue_model` varchar(100) NOT NULL default '', `queue_manufacturer` varchar(100) NOT NULL default '', `queue_shared` varchar(100) NOT NULL default '', `queue_shared_name` varchar(100) NOT NULL default '', `queue_location` varchar(100) NOT NULL default '', `queue_color` varchar(100) NOT NULL default '', `queue_duplex` varchar(100) NOT NULL default '', `queue_type` enum('virtual', 'physical', '') NOT NULL default '', `queue_connection_status` varchar(100) NOT NULL default '', `timestamp` datetime NOT NULL default '0000-00-00 00:00:00', `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY (`queue_id`), KEY `system_id` (`system_id`), CONSTRAINT `sys_sw_print_queue_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_connection ADD name varchar(100) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_connection DROP speed ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_connection ADD speed FLOAT(7,3) NOT NULL default '0' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_connection ADD status enum('production', 'retired', 'maintenance', 'deleted') NOT NULL default 'production' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_org ADD org_group_id int(10) unsigned NOT NULL default '0' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_audits ADD audit_wmi_fails text NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20120530' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = 'beta6' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$this->data['output'] .= "Transaction committed.<br />beta6 upgrade successful.<br /><br />\n";
		}

		if (($db_internal_version < '20120830') AND ($this->db->platform() == 'mysql')) {
			# upgrade for beta7
			$sql = "ALTER TABLE oa_location ADD location_group_id int(10) unsigned NOT NULL default '0' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20120830' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = 'beta7' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20121130') AND ($this->db->platform() == 'mysql')) {
			# upgrade for beta8
			$sql = "DROP TABLE IF EXISTS sys_man_attachment";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "CREATE TABLE sys_man_attachment ( att_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, user_id int(10) unsigned default NULL, att_title varchar(200) NOT NULL default '', att_filename text NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00',  PRIMARY KEY  (`att_id`),  KEY system_id (system_id),  CONSTRAINT att_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE, CONSTRAINT att_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_notes DROP timestamp";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_notes ADD timestamp datetime NOT NULL default '0000-00-00 00:00:00'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS oa_device_col";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "DROP TABLE IF EXISTS oa_device";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "CREATE TABLE oa_device ( dev_id int(10) unsigned NOT NULL auto_increment, dev_name varchar(100) NOT NULL default '', dev_group_id int(10) unsigned NOT NULL default '0', PRIMARY KEY (dev_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "CREATE TABLE oa_device_col ( col_id int(10) unsigned NOT NULL auto_increment, dev_id int(10) unsigned default NULL, col_table varchar(100) NOT NULL default '', col_column varchar(100) NOT NULL default '', col_type varchar(100) NOT NULL default '', col_order int(10) unsigned default NULL, PRIMARY KEY (col_id), KEY dev_id (dev_id), CONSTRAINT oa_dev_col_dev_id FOREIGN KEY (dev_id) REFERENCES oa_device (dev_id) ON DELETE CASCADE) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE oa_config ADD config_editable varchar(1) NOT NULL default 'n'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_config ADD config_edited_date datetime NOT NULL default '0000-00-00 00:00:00'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_config ADD config_edited_by int(10) unsigned NOT NULL default '0'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);			

			$sql = "ALTER TABLE oa_config ADD config_description varchar(200) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20130126', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = 'beta8', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('non_admin_search', 'y', 'y', 'Enable or disable search for non-Administrators');";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20130130') AND ($this->db->platform() == 'mysql')) {
			# upgrade for beta8
			$sql = "UPDATE oa_config set config_value = '20130130', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = 'beta8.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20130131') AND ($this->db->platform() == 'mysql')) {
			# upgrade for beta8
			$sql = "UPDATE oa_config set config_value = '20130131', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = 'beta8.4', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20130201') AND ($this->db->platform() == 'mysql')) {
			# upgrade for beta8
			$sql = "UPDATE oa_config set config_value = '20130201', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = 'beta8.5', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}
		
		if (($db_internal_version < '20130202') AND ($this->db->platform() == 'mysql')) {
			# upgrade for beta9

			$sql = "DROP TABLE IF EXISTS oa_asset_line";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "CREATE TABLE oa_asset_line ( line_id int(10) NOT NULL auto_increment, order_id int(10) unsigned default NULL, org_id int(10) unsigned default NULL, select_id int(10) unsigned default NULL, line_amount int(10) unsigned default NULL, line_cost_each int(10) unsigned default NULL, line_tax_each int(10) unsigned default NULL, line_asset_number varchar(50) NOT NULL, line_gl varchar(50) NOT NULL, line_type enum('', 'sw', 'hw') NOT NULL default '', line_sw_license_expires_date datetime NOT NULL default '0000-00-00 00:00:00', line_sw_license_key varchar(50) NOT NULL, line_sw_license_number varchar(50) NOT NULL, line_sw_license_agreement varchar(50) NOT NULL, line_sw_license_type enum('', 'license', 'license and maintenance', 'upgrade', 'upgrade and maintenance', 'maintenance') NOT NULL default '', line_vendor_producit_id varchar(50) NOT NULL, line_vendor_part_id varchar(50) NOT NULL, line_maintenance_included varchar(50) NOT NULL, line_maintenance_date_expires datetime NOT NULL default '0000-00-00 00:00:00', allocate_type enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default '', allocate_text varchar(50) NOT NULL default '', PRIMARY KEY  (line_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS oa_asset_order";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);	

			$sql = "CREATE TABLE oa_asset_order ( order_id int(10) NOT NULL auto_increment, order_date datetime NOT NULL default '0000-00-00 00:00:00', order_po varchar(50) NOT NULL, order_vn varchar(50) NOT NULL, order_in varchar(50) NOT NULL, order_vendor varchar(50) NOT NULL, order_auth_officer varchar(100) NOT NULL, order_cost_code varchar(50) NOT NULL, order_notes text NOT NULL default '', PRIMARY KEY  (order_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "DROP TABLE IF EXISTS oa_asset_select";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "CREATE TABLE oa_asset_select (select_id int(10) NOT NULL auto_increment, select_name varchar(50) NOT NULL, select_type enum('', 'sw', 'hw', 'service', 'other') NOT NULL default '', select_sql varchar(250) NOT NULL, group_id int(10) unsigned default NULL, group_amount int(10) unsigned default '0', PRIMARY KEY (select_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE oa_asset_line CHANGE line_type line_type enum('', 'sw', 'hw', 'service', 'other') NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE oa_asset_line CHANGE allocate_type allocate_type enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE oa_asset_line CHANGE allocate_text allocate_text varchar(50) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('ad_domain', '', 'y', 'The domain name against which your users will validate. EG - open-audit.org') ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('ad_server', '', 'y', 'The IP Address of your domain controller. EG - 192.168.0.1') ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20130202', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = 'beta 9', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}
		
		if (($db_internal_version < '20130204') AND ($this->db->platform() == 'mysql')) {
			# upgrade for beta 9.1

			$sql = "DROP TABLE IF EXISTS oa_asset_line";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "CREATE TABLE oa_asset_line ( line_id int(10) NOT NULL auto_increment, order_id int(10) unsigned default NULL, org_id int(10) unsigned default NULL, select_id int(10) unsigned default NULL, line_amount int(10) unsigned default NULL, line_cost_each int(10) unsigned default NULL, line_tax_each int(10) unsigned default NULL, line_asset_number varchar(50) NOT NULL, line_gl varchar(50) NOT NULL, line_type enum('', 'sw', 'hw') NOT NULL default '', line_sw_license_expires_date datetime NOT NULL default '0000-00-00 00:00:00', line_sw_license_key varchar(50) NOT NULL, line_sw_license_number varchar(50) NOT NULL, line_sw_license_agreement varchar(50) NOT NULL, line_sw_license_type enum('', 'license', 'license and maintenance', 'upgrade', 'upgrade and maintenance', 'maintenance') NOT NULL default '', line_vendor_producit_id varchar(50) NOT NULL, line_vendor_part_id varchar(50) NOT NULL, line_maintenance_included varchar(50) NOT NULL, line_maintenance_date_expires datetime NOT NULL default '0000-00-00 00:00:00', allocate_type enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default '', allocate_text varchar(50) NOT NULL default '', PRIMARY KEY  (line_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS oa_asset_order";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);	

			$sql = "CREATE TABLE oa_asset_order ( order_id int(10) NOT NULL auto_increment, order_date datetime NOT NULL default '0000-00-00 00:00:00', order_po varchar(50) NOT NULL, order_vn varchar(50) NOT NULL, order_in varchar(50) NOT NULL, order_vendor varchar(50) NOT NULL, order_auth_officer varchar(100) NOT NULL, order_cost_code varchar(50) NOT NULL, order_notes text NOT NULL default '', PRIMARY KEY  (order_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('auto_create_network_groups', 'y', 'y', 'Have Open-AudIT automatically create Groups based on Subnet.') ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20130204', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = 'beta 9.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20130205') AND ($this->db->platform() == 'mysql')) {
			# upgrade for beta 9.2
			$sql = "DROP TABLE IF EXISTS oa_asset_line";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "CREATE TABLE oa_asset_line ( line_id int(10) NOT NULL auto_increment, order_id int(10) unsigned default NULL, org_id int(10) unsigned default NULL, select_id int(10) unsigned default NULL, line_amount int(10) unsigned default NULL, line_cost_each int(10) unsigned default NULL, line_tax_each int(10) unsigned default NULL, line_asset_number varchar(50) NOT NULL, line_gl varchar(50) NOT NULL, line_type enum('', 'sw', 'hw') NOT NULL default '', line_sw_license_expires_date datetime NOT NULL default '0000-00-00 00:00:00', line_sw_license_key varchar(50) NOT NULL, line_sw_license_number varchar(50) NOT NULL, line_sw_license_agreement varchar(50) NOT NULL, line_sw_license_type enum('', 'license', 'license and maintenance', 'upgrade', 'upgrade and maintenance', 'maintenance') NOT NULL default '', line_vendor_producit_id varchar(50) NOT NULL, line_vendor_part_id varchar(50) NOT NULL, line_maintenance_included varchar(50) NOT NULL, line_maintenance_date_expires datetime NOT NULL default '0000-00-00 00:00:00', allocate_type enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default '', allocate_text varchar(50) NOT NULL default '', PRIMARY KEY  (line_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS oa_asset_order";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);	

			$sql = "CREATE TABLE oa_asset_order ( order_id int(10) NOT NULL auto_increment, order_date datetime NOT NULL default '0000-00-00 00:00:00', order_po varchar(50) NOT NULL, order_vn varchar(50) NOT NULL, order_in varchar(50) NOT NULL, order_vendor varchar(50) NOT NULL, order_auth_officer varchar(100) NOT NULL, order_cost_code varchar(50) NOT NULL, order_notes text NOT NULL default '', PRIMARY KEY  (order_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('auto_create_network_groups', 'y', 'y', 'Have Open-AudIT automatically create Groups based on Subnet.') ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20130205', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = 'beta 9.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20130215') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.0
			$sql = "ALTER TABLE system ADD nmap_type varchar(50) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD contact_name varchar(50) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD fqdn text NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD access_details text NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD snmp_oid text NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD nmis_group varchar(50) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD nmis_name varchar(50) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD nmis_role varchar(50) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('nmis', 'y', 'y', 'Enable import / export to NMIS functions.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_group_column set column_link = '/main/system_display/' WHERE group_id = '1' and column_name = 'Hostname'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20130215', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.0', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		$config = $this->m_oa_config->get_config();
		foreach ($config as $returned_result) {
			if (isset($returned_result->config_name)) {
				if ($returned_result->config_name == 'internal_version') {
					$db_internal_version = $returned_result->config_value;
				}
				if ($returned_result->config_name == 'display_version') {
					$db_display_version = $returned_result->config_value;
				}
			}
		}
		$this->data['output'] .= "New (now current) database version: " . $db_display_version . " (" . $db_internal_version . ")<br />\n";
		$this->data['output'] .= "<br/><br />Don't forget to use the new audit scripts!<br/>\n";
		$this->data['include'] = 'v_upgrade'; 
		$this->data['heading'] = 'Upgrade';
		$this->load->view('v_template', $this->data);
	}
}




