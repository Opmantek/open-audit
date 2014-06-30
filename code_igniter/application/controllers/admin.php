<?php
#
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
 * @version 1.3.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

/**
 * Base Object Admin
 *
 * @access	 public
 * @category Object
 * @package  Open-AudIT
 * @author   Mark Unwin <marku@opmantek.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 * @return	 Admin
 */
class Admin extends MY_Controller {

	/**
	 * Constructor
	 *
	 * @access	  public
	 * @category  Constructor
	 * @package   Open-AudIT
	 * @author    Mark Unwin <marku@opmantek.com>
	 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
	 * @link      http://www.open-audit.org
	 * @return	  Admin
	 */
	function __construct() 
	{
		parent::__construct();
		// must be an admin to access this page
		if ($this->session->userdata('user_admin') !== 'y') {
			$referer = $this->input->server('HTTP_REFERER');
			if ($referer > '') {
				redirect($referer);
			} 
			else {
				redirect('login/index');
			}
		}
		$this->log_event();
	}

	/**
	 * Index
	 *
	 * @access	  public
	 * @category  Function
	 * @package   Open-AudIT
	 * @author    Mark Unwin <marku@opmantek.com>
	 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
	 * @link      http://www.open-audit.org
	 * @return	  NULL
	 */
	function index()
	{
		redirect('/');
	}

	/**
	 * Just a simple echo of the page name for a test
	 *
	 * @access	  public
	 * @category  Function
	 * @package   Open-AudIT
	 * @author    Mark Unwin <marku@opmantek.com>
	 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
	 * @link      http://www.open-audit.org
	 * @return	  string
	 */
	function test()
	{
		echo "<pre>\n";
		exit();
	}

	/**
	 * Reset the device icons in the database
	 *
	 * @access	  public
	 * @category  Function
	 * @package   Open-AudIT
	 * @author    Mark Unwin <marku@opmantek.com>
	 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
	 * @link      http://www.open-audit.org
	 * @return	  NULL
	 */
	function reset_icons()
	{
		$this->load->model('m_system');
		$this->m_system->reset_icons();
		redirect('/');
	}

	/**
	 * The edit config page
	 *
	 * @access	  public
	 * @category  Function
	 * @package   Open-AudIT
	 * @author    Mark Unwin <marku@opmantek.com>
	 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
	 * @link      http://www.open-audit.org
	 * @return	  NULL
	 */
	function edit_config()
	{
		$this->load->model("m_oa_config");
		$this->data['query'] = $this->m_oa_config->get_config();
		$this->data['heading'] = 'Edit Config';
		$this->data['include'] = 'v_edit_config'; 
		$this->data['sortcolumn'] = '0';
		$this->load->view('v_template', $this->data);
	}

	/**
	 * Get the config
	 *
	 * @access	  public
	 * @category  Function
	 * @package   Open-AudIT
	 * @author    Mark Unwin <marku@opmantek.com>
	 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
	 * @link      http://www.open-audit.org
	 * @return	  JSON array
	 */
	function get_config()
	{
		$json = json_encode($this->data['config']);
		print_r($json);
	}

	/**
	 * Purge the logfile
	 *
	 * @access	  public
	 * @category  Function
	 * @package   Open-AudIT
	 * @author    Mark Unwin <marku@opmantek.com>
	 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
	 * @link      http://www.open-audit.org
	 * @return	  NULL
	 */
	function purge_log()
	{
		// full path to text file
		if (php_uname('s') == 'Linux') {
			$file = "/usr/local/open-audit/other/open-audit.log";
		} else {
			$file = "c:\\xampplite\\open-audit\\other\\open-audit.log";
		}
		$handle = fopen($file, "w");
		fwrite($handle, "");
		fclose($handle);
		redirect("admin/view_log");

	}

	function download_file() {
        $this->load->helper('file');
		$file = @intval($this->uri->segment(3,0));
		$complete_filename = '';
		if (php_uname('s') == 'Linux') {
			switch ($file) {
				case '1':
					$complete_filename = '/usr/local/open-audit/other/open-audit.log';
					break;

				case '2':
					$complete_filename = '/usr/local/omk/log/oae.log';
					break;

				case '3':
					$complete_filename = '/usr/local/omk/log/opCommon.log';
					break;

				case '4':
					$complete_filename = '/usr/local/omk/log/opDaemon.log';
					break;

				case '5':
					$complete_filename = '/usr/local/omk/log/performance.log';
					break;

				case '6':
					$complete_filename = '/usr/local/omk/conf/opCommon.nmis';
					break;
				
				default:
					# code...
					break;
			}
		}
		if (php_uname('s') == 'Windows NT') {
			switch ($file) {
				case '1':
					$complete_filename = 'c:\xampplite\open-audit\other\open-audit.log';
					break;

				case '2':
					$complete_filename = 'c:\omk\log\oae.log';
					break;

				case '3':
					$complete_filename = 'c:\omk\log\opCommon.log';
					break;

				case '4':
					$complete_filename = 'c:\omk\log\opDaemon.log';
					break;

				case '5':
					$complete_filename = 'c:\omk\log\performance.log';
					break;

				case '6':
					$complete_filename = 'c:\omk\conf\opCommon.nmis';
					break;
				
				default:
					# code...
					break;
			}
		}
		if ($complete_filename != '') {
        	$i = explode('/', $complete_filename);
	        $filename = $i[count($i)-1];
	        header('Content-Type: ' . get_mime_by_extension($complete_filename));
	        header('Content-Disposition: attachment;filename="' . $filename . '"');
	        header('Cache-Control: max-age=0');
	        readfile($complete_filename);
	    } else {
	    	echo "No file specified.";
	    }
	}

	function view_log() {		
		// number of lines to read from the end of file
		$lines = @intval($this->uri->segment(3,0));
		if ($lines < 1) { $lines = 25; }

		// full path to text file
		if (php_uname('s') == 'Linux') {
			$file = "/usr/local/open-audit/other/open-audit.log";
		} else {
			$file = "c:\\xampplite\\open-audit\\other\\open-audit.log";
		}

		$fsize = round(filesize($file)/1024/1024,2);
		$this->data['comment'] = "<strong>" . $file . "</strong><br />";
		$this->data['comment'] .= "File size is {$fsize} megabytes<br />";
		$this->data['comment'] .= "Last " . $lines . " lines of the file:<br /><pre>";
		$handle = fopen($file, "r");
		$linecounter = $lines;
		$pos = -2;
		$beginning = false;
		$text = array();
		while ($linecounter > 0) {
			$t = " ";
			while ($t != "\n") {
				if(fseek($handle, $pos, SEEK_END) == -1) {
					$beginning = true; 
					break; 
				}
				$t = fgetc($handle);
				$pos --;
			}
			$linecounter --;
			if ($beginning) {
				rewind($handle);
			}
			$text[$lines-$linecounter-1] = fgets($handle);
			if ($beginning) break;
		}
		fclose ($handle);
		#$lines = array_reverse($text);
		$lines = $text;
		$this->data['query'] = $lines;
		$this->data['heading'] = 'View Open-AudIT log';
		$this->data['include'] = 'v_list_log'; 
		$this->data['sortcolumn'] = '1';
		$this->load->view('v_template', $this->data);
	}

	function import_nmis() {
		if (!isset($_POST['import'])) {
			# show the form
			$this->data['heading'] = 'Import from NMIS';
			$this->data['include'] = 'v_import_nmis'; 
			$this->data['sortcolumn'] = '1';
			$this->load->view('v_template', $this->data);
		} else {
			$cmd = "php " . $_SERVER['SCRIPT_FILENAME'] . " admin_cli import_nmis " . $_POST['nodes_file'] . " >> /usr/local/open-audit/other/open-audit.log 2>&1 &";
			redirect('/admin/view_log');
		}
	}

	function export_nmis() {
		if (!isset($_POST['export'])) {
			# show the list
			$this->data['heading'] = 'Export to NMIS';
			$this->data['include'] = 'v_export_nmis'; 
			$this->data['export_report'] = 'y';
			$this->data['sortcolumn'] = '1';
			$this->load->model("m_systems");
			$data = array($this->data['id']);
			$query = $this->db->query('SET @group = ?', $data);
			$sql = "SELECT system.system_id, system.nmis_name, system.hostname, system.fqdn, system.man_ip_address as nmis_host, '' as nmis_community, '' as nmis_version, system.nmis_group, 'true' as nmis_collect, system.nmis_role, '' as nmis_net, access_details FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE oa_group_sys.group_id = @group GROUP BY system.system_id ORDER BY system.system_id"; 
			$query = $this->db->query($sql);
			$this->data['query'] = $query->result();
			$this->load->library('encrypt');
			for ($i=0; $i<count($this->data['query']); $i++) {

				if ($this->data['query'][$i]->access_details > '') {
					$j = $this->encrypt->decode($this->data['query'][$i]->access_details);
					$j = json_decode($j);
				}

				# nmis name
				if ($this->data['query'][$i]->nmis_name == '' and $this->data['query'][$i]->hostname > '') {$this->data['query'][$i]->nmis_name = $this->data['query'][$i]->hostname; }
				if (($this->data['query'][$i]->nmis_name == '' or $this->data['query'][$i]->nmis_name == $this->data['query'][$i]->hostname) and $this->data['query'][$i]->fqdn > '') { $this->data['query'][$i]->nmis_name = $this->data['query'][$i]->fqdn; }
				if ($this->data['query'][$i]->nmis_name == '') { $this->data['query'][$i]->nmis_name = ip_address_from_db($this->data['query'][$i]->nmis_host); }

				# nmis host
				$this->data['query'][$i]->nmis_host = ip_address_from_db($this->data['query'][$i]->nmis_host);
				if (isset($j->ip_address)) { $this->data['query'][$i]->nmis_host = $j->ip_address; } 

				# nmis group
				if ($this->data['query'][$i]->nmis_group == '') { $this->data['query'][$i]->nmis_group = "<span style=\"color: blue;\">Open-AudIT</span>"; }

				# nmis role
				if ($this->data['query'][$i]->nmis_role == '') { $this->data['query'][$i]->nmis_role = "<span style=\"color: blue;\">core</span>"; }

				# snmp community
				if (isset($j->snmp_community)) { $this->data['query'][$i]->nmis_community = $j->snmp_community; }
				if ($this->data['query'][$i]->nmis_community == '') { $this->data['query'][$i]->nmis_community = "<span style=\"color: blue;\">" . $this->data['config']->default_snmp_community . "</span>"; }

				$j=null;
			}
			$this->data['group_id'] = $this->data['id'];
			$this->load->view('v_template', $this->data);
		} else {
			$device_array = array();
			foreach ($_POST as $key => $value) {
				if (strpos($key, 'system_id_') !== FALSE) {
					$i = explode("_", $key);
					if ($i[2] > 0) { $device_array[] .= $i[2];}
				}
			}
			$this->load->model("m_system");
			$this->load->model("m_oa_group");
			$this->load->library('encrypt');
			$csv = "name,host,group,role,community\n";
			$query = array();
			$i = 0; # I set $i = 0 so I could copy/paste the code from above :-)
			foreach ($device_array as $key => $value) {
				$sql = "SELECT system.nmis_name, system.man_ip_address as nmis_host, system.nmis_group, system.nmis_role, system.hostname, system.fqdn, '' as nmis_community, '' as nmis_version, 'true' as nmis_collect, '' as nmis_net, access_details FROM system WHERE system_id = ?"; 
				$data = array($value);
				$query = $this->db->query($sql, $data);
				$this->data['query'] = $query->result();

				if ($this->data['query'][$i]->access_details > '') {
					$j = $this->encrypt->decode($this->data['query'][$i]->access_details);
					$j = json_decode($j);
				}

				# nmis name
				if ($this->data['query'][$i]->nmis_name == '' and $this->data['query'][$i]->hostname > '') {$this->data['query'][$i]->nmis_name = $this->data['query'][$i]->hostname; }
				if (($this->data['query'][$i]->nmis_name == '' or $this->data['query'][$i]->nmis_name == $this->data['query'][$i]->hostname) and $this->data['query'][$i]->fqdn > '') { $this->data['query'][$i]->nmis_name = $this->data['query'][$i]->fqdn; }
				if ($this->data['query'][$i]->nmis_name == '') { $this->data['query'][$i]->nmis_name = ip_address_from_db($this->data['query'][$i]->nmis_host); }

				# nmis host
				$this->data['query'][$i]->nmis_host = ip_address_from_db($this->data['query'][$i]->nmis_host);
				if (isset($j->ip_address)) { $this->data['query'][$i]->nmis_host = $j->ip_address; } 

				# nmis group
				if ($this->data['query'][$i]->nmis_group == '') { $this->data['query'][$i]->nmis_group = "Open-AudIT"; }

				# nmis role
				if ($this->data['query'][$i]->nmis_role == '') { $this->data['query'][$i]->nmis_role = "core"; }

				# snmp community
				if (isset($j->snmp_community)) { $this->data['query'][$i]->nmis_community = $j->snmp_community; }
				if ($this->data['query'][$i]->nmis_community == '') { $this->data['query'][$i]->nmis_community = $this->data['config']->default_snmp_community; }

				$j=null;

				$csv .= $this->data['query'][$i]->nmis_name . "," . 
						$this->data['query'][$i]->nmis_host . "," . 
						$this->data['query'][$i]->nmis_group . "," . 
						$this->data['query'][$i]->nmis_role . "," . 
						$this->data['query'][$i]->nmis_community . "\n";
			}
			if (!file_exists("/usr/local/nmis8/admin/import_nodes.pl")) {
				echo $csv;
				header('Content-Type: text/csv');
				header('Content-Disposition: attachment;filename="Nodes.open-audit"');
				header('Cache-Control: max-age=0');
			} else {
				$filename = '/usr/local/nmis8/conf/Nodes.open-audit';
				$handle = fopen($filename, "w");
				fwrite($handle, $csv);
				fclose($handle);
				$cmd = "/usr/local/nmis8/admin/import_nodes.pl csv=$filename nodes=/usr/local/nmis8/conf/Nodes.nmis overwrite=true >> /usr/local/open-audit/other/open-audit.log 2>&1 &";
				exec($cmd);
				redirect('/admin/view_log');	
			}
		}
	}

	function scan_subnet_nmap() {
		if (php_uname('s') == "Windows NT") {
			$operating_system = "Windows";
		} else {
			$operating_system = php_uname('s');
		}

		if (isset($_POST['ScanNmap'])) {
			# test if we have a subnet or only an IP
			if (isset($_POST['subnet'])) {
				$subnet = $_POST['subnet'];
			} else {
				$subnet = "";
			}

			if (strpos($subnet, "/")) {
				# we have a subnet - if it's not a /32, then test for a group
				$subnet_split = explode("/", $subnet);
				if ($subnet_split[1] <> "32") {
					# we have a real subnet
					$subnet_details = network_details($subnet);
					$sql = "SELECT config_value FROM oa_config WHERE config_name = 'auto_create_network_groups' ";
					$query = $this->db->query($sql);
					$row = $query->row();
					if ($row->config_value <> 'n') {
						echo "Yes, create network groups.\n";
						# we do want to auto create network groups
						$group_dynamic_select = "SELECT distinct(system.system_id) FROM system, sys_hw_network_card_ip WHERE ( sys_hw_network_card_ip.ip_address_v4 >= '" . ip_address_to_db($subnet_details->host_min) . "' AND sys_hw_network_card_ip.ip_address_v4 <= '" . ip_address_to_db($subnet_details->host_max) . "' AND sys_hw_network_card_ip.ip_subnet = '" . $subnet_details->netmask . "' AND sys_hw_network_card_ip.system_id = system.system_id AND sys_hw_network_card_ip.timestamp = system.timestamp AND system.man_status = 'production') UNION SELECT distinct(system.system_id) FROM system WHERE (system.man_ip_address >= '" . ip_address_to_db($subnet_details->host_min) . "' AND system.man_ip_address <= '" . ip_address_to_db($subnet_details->host_max) . "' AND system.man_status = 'production')";
						$start = explode(' ',microtime()); 
						$sql = "SELECT * FROM oa_group WHERE group_dynamic_select = ? ";
						$data = array($group_dynamic_select);
						$query = $this->db->query($sql, $data);
						if ($query->num_rows() > 0) {
							// group exists - no need to do anything
						} else {
							// insert new group
							$sql = "INSERT INTO oa_group (group_id, group_name, group_padded_name, group_dynamic_select, group_parent, group_description, group_category, group_icon) VALUES (NULL, ?, ?, ?, '1', ?, 'network', 'switch')";
							#$sql = $this->clean_sql($sql);
							$group_name = "Network - " . $subnet_details->network . ' / ' . $subnet_details->network_slash;
							$group_padded_name = "Network - " . ip_address_to_db($subnet_details->network);
							$data = array("$group_name", "$group_padded_name", "$group_dynamic_select", $subnet_details->network);
							$query = $this->db->query($sql, $data);
							$insert_id = $this->db->insert_id();
							// We need to insert an entry into oa_group_user for any Admin level user
							$sql = "INSERT INTO oa_group_user (SELECT NULL, user_id, ?, '10' FROM oa_user WHERE user_admin = 'y')";
							$data = array( $insert_id );
							$result = $this->db->query($sql, $data);
							# now we update this specific group
							# this accounts for if another system has a IP that would fall in this group, but was submitted
							# without a subnet and no matching network group was previously created.
							# update the group with all systems that match
							$this->load->model('m_oa_group');
							$this->m_oa_group->update_specific_group($insert_id); 
						}
					}

				}
			}

			if ($operating_system == 'Darwin') {
				if ($subnet > '' ) {
					#$cmd = "/usr/local/open-audit/other/audit_subnet.sh subnet=$subnet >> /usr/local/open-audit/other/open-audit.log 2>&1 &";
					$cmd = "/usr/local/open-audit/other/audit_subnet.sh subnet=$subnet url=" . base_url() . "index.php/system/add_nmap  submit_online=y create_file=n debugging=0 >> /usr/local/open-audit/other/open-audit.log 2>&1 &";
					exec($cmd);
				}
			}

			if ($operating_system == 'Linux') {
				if ($subnet > '' ) {
					#$cmd = "/usr/local/open-audit/other/audit_subnet.sh subnet=$subnet >> /usr/local/open-audit/other/open-audit.log 2>&1 &";
					$cmd = "/usr/local/open-audit/other/audit_subnet.sh subnet=$subnet url=" . base_url() . "index.php/system/add_nmap  submit_online=y create_file=n debugging=0 >> /usr/local/open-audit/other/open-audit.log 2>&1 &";
					exec($cmd);
				}
			}
			if ($operating_system == 'Windows') {
				if ($subnet > '' ) {
					#$cmd = "%comspec% /c start /b cscript //nologo c:\\xampplite\\open-audit\\other\\audit_subnet.vbs subnet=$subnet submit_online=y create_file=n debugging=0 &";
					$cmd = "%comspec% /c start /b cscript //nologo c:\\xampplite\\open-audit\\other\\audit_subnet.vbs subnet=$subnet url=" . base_url() . "index.php/system/add_nmap submit_online=y create_file=n debugging=0 &";
					pclose(popen($cmd,"r"));
				}
			}
			redirect('/admin/view_log');
		} else {
			$this->data['warning'] = '';
			$this->data['heading'] = 'NMap Scanning';
			$this->data['include'] = 'v_scan_subnet_nmap'; 
			$this->data['sortcolumn'] = '1';
			$this->load->view('v_template', $this->data);
		}
	}

	function scan_ad() {
		if (isset($_POST['ScanAD'])) {
			$this->load->model("m_system");
			$this->load->model("m_oa_group");
			$this->load->model("m_sys_man_audits");
			$details = new stdClass();
			$timestamp = date('Y-m-d H:i:s');
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
					$details = new stdClass();
					$details->timestamp = $timestamp;
					$details->dns_hostname = @strtolower($info[$i]['dnshostname'][0]);
					$details->fqdn = $details->dns_hostname;
					$j = explode(".", $details->dns_hostname);
					$details->hostname = $j[0];
					$details->man_ip_address = '0.0.0.0';
					$details->domain = $ad_domain_name;
					$details->type = 'computer';
					$details->icon = 'windows';
					$details->os_name = "";
					$details->os_name = $info[$i]['operatingsystem'][0];
					if (strpos(strtolower($details->os_name), "windows") !== FALSE) {
						$details->os_group = "Windows";
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
					$details->man_os_family = $details->os_family;
					$details->man_os_name = $details->os_name;

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
					$details->audits_ip = '127.0.0.1';
					$details->last_user = $this->data['user_full_name'];
					#$details->location = @$info[$i]['location'][0];
					$details->windows_active_directory_ou = '';
					$j = explode(",", @strtolower($info[$i]['distinguishedname'][0]));
					for ($k = 1; $k<count($j); $k++){
						$details->windows_active_directory_ou = $details->windows_active_directory_ou . "," . $j[$k];
					}
					$details->windows_active_directory_ou = substr($details->windows_active_directory_ou, 1);
					$details->icon = strtolower(str_replace(" ", "_", $details->os_family));
					$details->man_icon = $details->icon;
					$full_name = $details->dns_hostname;

					$details->man_ip_address = gethostbyname($full_name);
					if ($details->man_ip_address == $full_name) { unset($details->man_ip_address); }
					if (isset($details->man_ip_address) and ($details->man_ip_address == '0.0.0.0' or $details->man_ip_address == '000.000.000.000')) {
						unset($details->man_ip_address);
					}

					$details->system_key = $this->m_system->create_system_key($details);
					$details->system_id = $this->m_system->find_system($details);
					if (isset($details->system_id) and $details->system_id != '') {
						# update an existing system
						$this->m_system->update_system($details);
					} else {
						# insert a new system
						$details->system_id = $this->m_system->insert_system($details);
					}
					#echo "<pre>\n";
					#print_r($details);
					$this->m_sys_man_audits->insert_audit($details);
					$this->m_oa_group->update_system_groups($details);
				}
				redirect('/');
			} else {
				# TODO: redirect to homepage and create an alert to show on screen
				# there were errors with processing.
				$this->data['error'] = "Could not connect to Active Directory.";
				$this->data['query'] = $this->data['error'];
				$this->data['heading'] = 'Error'; 
				$this->data['include'] = 'v_error'; 
				$this->data['export_report'] = 'y';
				$this->data['group_id'] = '0';
				$this->load->view('v_template', $this->data);
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
			$variable['run_netstat'] = $_POST['run_netstat'];
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

	function list_devices_in_location() {
		$this->load->model("m_oa_location");
		$this->load->model("m_oa_group_column");
		$this->data['query'] = $this->m_oa_location->list_devices_in_location($this->data['id'], $this->data['user_id']);
		$this->data['column'] = $this->m_oa_group_column->get_group_column();
		$location_name = $this->m_oa_location->get_location_name($this->data['id']);
		$this->data['heading'] = 'Systems in Location - ' . $location_name; 
		$this->data['include'] = 'v_report'; 
		$this->data['export_report'] = 'y';
		$this->data['group_id'] = '0';
		if ($this->data['user_admin'] == 'y') {
			$this->data['user_access_level'] = '10';
		} else {
			$this->data['user_access_level'] = '3';
		}
		$this->determine_output($this->uri->segment($this->uri->total_rsegments()));
	}

	function list_devices_in_org() {
		$this->load->model("m_oa_org");
		$this->load->model("m_oa_group_column");
		$this->data['user_access_level'] = '7';
		$this->data['query'] = $this->m_oa_org->list_devices_in_org($this->data['id'], $this->data['user_id']);
		$this->data['column'] = $this->m_oa_group_column->get_group_column();
		$org_name = $this->m_oa_org->get_org_name($this->data['id']);
		$this->data['heading'] = 'Systems in Org - ' . $org_name; 
		$this->data['include'] = 'v_report'; 
		$this->data['export_report'] = 'y';
		$this->data['group_id'] = '0';
		if ($this->data['user_admin'] == 'y') {
			$this->data['user_access_level'] = '10';
		} else {
			$this->data['user_access_level'] = '3';
		}
		$this->determine_output($this->uri->segment($this->uri->total_rsegments()));
	}

	function upgrade() {
		error_reporting(E_ALL);		

		$web_internal_version = $this->config->item('web_internal_version');
		$web_display_version = $this->config->item('web_display_version');
		$this->data['message'] = '';
		
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
		$this->data['output'] = "";
		#$this->data['output'] =  "Current web version: "      . $web_display_version . " (" . $web_internal_version . ")<br />\n";
		#$this->data['output'] .= "Current database version: " . $db_display_version . " (" . $db_internal_version . ")<br /><br />\n";
		#$this->data['output'] .= "Database type: " . $this->db->platform() . "<br /><br />\n";

		
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
			
			
			$sql = "CREATE TABLE sys_hw_warranty ( warranty_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, warranty_provider varchar(200) NOT NULL default '', warranty_type varchar(100) NOT NULL default '', warranty_start datetime NOT NULL default '0000-00-00 00:00:00', warranty_end datetime NOT NULL default '0000-00-00 00:00:00', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (warranty_id), KEY system_id (system_id), CONSTRAINT sys_hw_warranty_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '1', 'Hostname', 		'hostname', 		'link', 		'main/system_display/', 'system_id', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '2', 'Description',	'man_description', 	'text', 		'', 					'', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '3', 'IP Address',  	'man_ip_address', 	'ip_address', 	'', 					'', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '4', 'Type', 			'man_icon', 		'image', 		'', 					'man_os_family', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '5', 'OS / Device', 	'man_os_name', 		'text', 		'', 					'', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '6', 'Tags', 			'tag', 				'text', 		'', 					'', '', 'left')";
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

			$sql = "ALTER TABLE oa_alert_log ADD CONSTRAINT oa_alert_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_alert_log ADD CONSTRAINT oa_alert_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_alert_log ADD CONSTRAINT oa_alert_oa_change FOREIGN KEY (change_id) REFERENCES oa_change (change_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_audit_log DROP FOREIGN KEY oa_audit_log_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_audit_log DROP FOREIGN KEY oa_audit_log_user_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_audit_log ADD CONSTRAINT oa_audit_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_audit_log ADD CONSTRAINT oa_audit_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_change DROP FOREIGN KEY oa_change_user_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_change ADD CONSTRAINT oa_change_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_change_log DROP FOREIGN KEY oa_change_log_change_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_change_log DROP FOREIGN KEY oa_change_log_user_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_change_log ADD CONSTRAINT oa_change_log_change_id FOREIGN KEY (change_id) REFERENCES oa_change (change_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_change_log ADD CONSTRAINT oa_change_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_graph DROP FOREIGN KEY oa_graph_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_graph ADD CONSTRAINT oa_graph_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_column DROP FOREIGN KEY oa_group_column_group_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_column ADD CONSTRAINT oa_group_column_group_id FOREIGN KEY (group_id) REFERENCES oa_group (group_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE oa_group_sys DROP FOREIGN KEY oa_group_sys_group_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE oa_group_sys DROP FOREIGN KEY oa_group_sys_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_sys ADD CONSTRAINT oa_group_sys_group_id FOREIGN KEY (group_id) REFERENCES oa_group (group_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_sys ADD CONSTRAINT oa_group_sys_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_user DROP FOREIGN KEY oa_group_user_group_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_user DROP FOREIGN KEY oa_group_user_user_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_user ADD CONSTRAINT oa_group_user_group_id FOREIGN KEY (group_id) REFERENCES oa_group (group_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_group_user ADD CONSTRAINT oa_group_user_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location_org DROP FOREIGN KEY oa_loc_org_loc_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location_org DROP FOREIGN KEY oa_loc_org_org_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location_org ADD CONSTRAINT oa_loc_org_loc_id FOREIGN KEY (location_id) REFERENCES oa_location (location_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location_org ADD CONSTRAINT oa_loc_org_org_id FOREIGN KEY (org_id) REFERENCES oa_org (org_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_nmap_ports DROP FOREIGN KEY oa_net_nmap_ports_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_nmap_ports ADD CONSTRAINT oa_net_nmap_ports_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_scan_latest DROP FOREIGN KEY oa_net_scan_latest_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_scan_latest ADD CONSTRAINT oa_net_scan_latest_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_scan_log DROP FOREIGN KEY oa_net_scan_log_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_scan_log ADD CONSTRAINT oa_net_scan_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_scan_type DROP FOREIGN KEY oa_net_scan_type_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_net_scan_type ADD CONSTRAINT oa_net_scan_type_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_report_column DROP FOREIGN KEY oa_report_column_group_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_report_column ADD CONSTRAINT oa_report_column_group_id FOREIGN KEY (report_id) REFERENCES oa_report (report_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_switch_ports DROP FOREIGN KEY oa_switch_ports_switch_switch_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_switch_ports DROP FOREIGN KEY oa_switch_ports_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_switch_ports ADD CONSTRAINT oa_switch_ports_switch_switch_id FOREIGN KEY (switch_system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_switch_ports ADD CONSTRAINT oa_switch_ports_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_battery DROP FOREIGN KEY sys_hw_battery_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_battery ADD CONSTRAINT sys_hw_battery_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_bios DROP FOREIGN KEY sys_hw_bios_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_bios ADD CONSTRAINT sys_hw_bios_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_graphs_disk DROP FOREIGN KEY sys_hw_graphs_disk_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_graphs_disk ADD CONSTRAINT sys_hw_graphs_disk_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_hard_drive DROP FOREIGN KEY sys_hw_hard_drive_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_hard_drive ADD CONSTRAINT sys_hw_hard_drive_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_memory DROP FOREIGN KEY sys_hw_memory_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_memory ADD CONSTRAINT sys_hw_memory_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_modem DROP FOREIGN KEY sys_hw_modem_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_modem ADD CONSTRAINT sys_hw_modem_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_monitor DROP FOREIGN KEY sys_hw_monitor_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_monitor ADD CONSTRAINT sys_hw_monitor_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_motherboard DROP FOREIGN KEY sys_hw_motherboard_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_motherboard ADD CONSTRAINT sys_hw_motherboard_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_network_card DROP FOREIGN KEY sys_hw_network_card_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_network_card ADD CONSTRAINT sys_hw_network_card_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_network_card_ip DROP FOREIGN KEY sys_hw_network_card_ip_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_network_card_ip ADD CONSTRAINT sys_hw_network_card_ip_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_optical_drive DROP FOREIGN KEY sys_hw_optical_drive_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_optical_drive ADD CONSTRAINT sys_hw_optical_drive_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_partition DROP FOREIGN KEY sys_hw_partition_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_partition ADD CONSTRAINT sys_hw_partition_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_processor DROP FOREIGN KEY sys_hw_processor_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_processor ADD CONSTRAINT sys_hw_processor_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_scsi_controller DROP FOREIGN KEY sys_hw_scsi_controller_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_scsi_controller ADD CONSTRAINT sys_hw_scsi_controller_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_sound DROP FOREIGN KEY sys_hw_sound_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_sound ADD CONSTRAINT sys_hw_sound_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_video DROP FOREIGN KEY sys_hw_video_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_video ADD CONSTRAINT sys_hw_video_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "ALTER TABLE sys_hw_warranty DROP FOREIGN KEY sys_hw_warranty_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_warranty ADD CONSTRAINT sys_hw_warranty_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_audits DROP FOREIGN KEY sys_man_audits_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_audits ADD CONSTRAINT sys_man_audits_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_additional_fields DROP FOREIGN KEY sys_man_additional_fields_group_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_additional_fields ADD CONSTRAINT sys_man_additional_fields_group_id FOREIGN KEY (group_id) REFERENCES oa_group (group_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_additional_fields_data DROP FOREIGN KEY sys_man_additional_fields_data_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_additional_fields_data ADD CONSTRAINT sys_man_additional_fields_data_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_additional_fields_data DROP FOREIGN KEY sys_man_additional_fields_data_field_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_additional_fields_data ADD CONSTRAINT sys_man_additional_fields_data_field_id FOREIGN KEY (field_id) REFERENCES sys_man_additional_fields (field_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_notes DROP FOREIGN KEY sys_man_notes_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_notes ADD CONSTRAINT sys_man_notes_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_notes DROP FOREIGN KEY sys_man_notes_user_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_man_notes ADD CONSTRAINT sys_man_notes_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id)";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_antivirus DROP FOREIGN KEY sys_sw_antivirus_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_antivirus ADD CONSTRAINT sys_sw_antivirus_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database DROP FOREIGN KEY sys_sw_db_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database ADD CONSTRAINT sys_sw_db_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database_details DROP FOREIGN KEY sys_sw_db_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database_details ADD CONSTRAINT sys_sw_db_id FOREIGN KEY (db_id) REFERENCES sys_sw_database (db_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database_log DROP FOREIGN KEY sys_sw_db_details_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_database_log ADD CONSTRAINT sys_sw_db_details_id FOREIGN KEY (details_id) REFERENCES sys_sw_database_details (details_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_firewall DROP FOREIGN KEY sys_sw_firewall_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_firewall ADD CONSTRAINT sys_sw_firewall_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_firewall_auth_app DROP FOREIGN KEY sys_sw_firewall_auth_app_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_firewall_auth_app ADD CONSTRAINT sys_sw_firewall_auth_app_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_firewall_ports DROP FOREIGN KEY sys_sw_firewall_ports_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_firewall_ports ADD CONSTRAINT sys_sw_firewall_ports_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_group DROP FOREIGN KEY sys_sw_groups_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_group ADD CONSTRAINT sys_sw_groups_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_log DROP FOREIGN KEY sys_sw_log_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_log ADD CONSTRAINT sys_sw_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_route DROP FOREIGN KEY sys_sw_ip_route_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_route ADD CONSTRAINT sys_sw_ip_route_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_pagefile DROP FOREIGN KEY sys_sw_pagefile_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_pagefile ADD CONSTRAINT sys_sw_pagefile_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_scheduled_task DROP FOREIGN KEY sys_sw_scheduled_task_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_scheduled_task ADD CONSTRAINT sys_sw_scheduled_task_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_service DROP FOREIGN KEY sys_sw_service_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_service ADD CONSTRAINT sys_sw_service_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_share DROP FOREIGN KEY sys_sw_share_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_share ADD CONSTRAINT sys_sw_share_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_share_perms DROP FOREIGN KEY sys_sw_share_perm_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_share_perms ADD CONSTRAINT sys_sw_share_perm_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_share_perms DROP FOREIGN KEY sys_sw_share_perm_share_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_share_perms ADD CONSTRAINT sys_sw_share_perm_share_id FOREIGN KEY (share_id) REFERENCES sys_sw_share (share_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_software DROP FOREIGN KEY sys_sw_software_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_software ADD CONSTRAINT sys_sw_software_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_software_key DROP FOREIGN KEY sys_sw_software_key_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_software_key ADD CONSTRAINT sys_sw_software_key_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_startup DROP FOREIGN KEY sys_sw_startup_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_startup ADD CONSTRAINT sys_sw_startup_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_user DROP FOREIGN KEY sys_sw_user_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_user ADD CONSTRAINT sys_sw_user_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_variable DROP FOREIGN KEY sys_sw_variable_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_variable ADD CONSTRAINT sys_sw_variable_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_server DROP FOREIGN KEY sys_sw_web_server_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_server ADD CONSTRAINT sys_sw_web_server_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_server_ext DROP FOREIGN KEY sys_sw_web_server_extn_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_server_ext ADD CONSTRAINT sys_sw_web_server_extn_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_server_ext DROP FOREIGN KEY sys_sw_web_server_extn_server_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_server_ext ADD CONSTRAINT sys_sw_web_server_extn_server_id FOREIGN KEY (webserver_id) REFERENCES sys_sw_web_server (webserver_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site DROP FOREIGN KEY sys_sw_web_site_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site ADD CONSTRAINT sys_sw_web_site_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site DROP FOREIGN KEY sys_sw_web_site_server_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site ADD CONSTRAINT sys_sw_web_site_server_id FOREIGN KEY (webserver_id) REFERENCES sys_sw_web_server (webserver_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_header DROP FOREIGN KEY sys_sw_web_site_header_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_header ADD CONSTRAINT sys_sw_web_site_header_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_header DROP FOREIGN KEY sys_sw_web_site_header_site_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_header ADD CONSTRAINT sys_sw_web_site_header_site_id FOREIGN KEY (site_id) REFERENCES sys_sw_web_site (site_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_virtual DROP FOREIGN KEY sys_sw_web_site_virtual_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_virtual ADD CONSTRAINT sys_sw_web_site_virtual_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_virtual DROP FOREIGN KEY sys_sw_web_site_virtual_site_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_web_site_virtual ADD CONSTRAINT sys_sw_web_site_virtual_site_id FOREIGN KEY (site_id) REFERENCES sys_sw_web_site (site_id) ON DELETE CASCADE";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_windows DROP FOREIGN KEY sys_sw_windows_system_id";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_windows ADD CONSTRAINT sys_sw_windows_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
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

			$sql = "CREATE TABLE sys_sw_dns (dns_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, dns_name varchar(100) NOT NULL default '', dns_full_name varchar(200) NOT NULL default '', dns_ip_address varchar(30) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (dns_id), KEY system_id (system_id), CONSTRAINT sys_sw_dns_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ";
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

			$sql = "CREATE TABLE sys_sw_print_queue (queue_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, queue_system_key varchar(100) NOT NULL default '', queue_name varchar(100) NOT NULL default '', queue_port_name varchar(100) NOT NULL default '', queue_ip_address varchar(100) NOT NULL default '', queue_description varchar(100) NOT NULL default '', queue_model varchar(100) NOT NULL default '', queue_manufacturer varchar(100) NOT NULL default '', queue_shared varchar(100) NOT NULL default '', queue_shared_name varchar(100) NOT NULL default '', queue_location varchar(100) NOT NULL default '', queue_color varchar(100) NOT NULL default '', queue_duplex varchar(100) NOT NULL default '', queue_type enum('virtual', 'physical', '') NOT NULL default '', queue_connection_status varchar(100) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY (queue_id), KEY system_id (system_id), CONSTRAINT sys_sw_print_queue_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
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

			$sql = "CREATE TABLE sys_man_attachment ( att_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, user_id int(10) unsigned default NULL, att_title varchar(200) NOT NULL default '', att_filename text NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00',  PRIMARY KEY  (att_id),  KEY system_id (system_id),  CONSTRAINT att_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE, CONSTRAINT att_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
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

		if (($db_internal_version < '20130512') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.0
			$this->data['output'] .= "New 'All Devices' Group created. Ensure you have access via Admin -> Users -> Edit User<br /><br />\n";
		
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

			$sql = "ALTER TABLE oa_report_column MODIFY column_type enum('','link','image','ip_address','text','timestamp','url', 'multi')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location MODIFY location_latitude float(10,6)";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location MODIFY location_longitude float(10,6)";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location ADD location_icon varchar(100) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location ADD location_geotag varchar(200) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_user ADD user_active varchar(1) NOT NULL default 'y'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_user SET user_active = 'y'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system DROP man_acting_server";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD system_key_type varchar(4) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('nmis', 'n', 'y', 'Enable import / export to NMIS functions.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_group_column set column_link = '/main/system_display/' WHERE group_id = '1' and column_name = 'Hostname'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE system SET type = 'computer', man_type = 'computer' WHERE type = 'system' or man_type = 'system'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			# grab a copy of the users and their access levels to group_id 1
			$sql = "SELECT user_id, group_user_access_level FROM oa_group_user WHERE group_id = '1'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			$user_array = $query->result();

			$sql = "DELETE FROM oa_group WHERE group_id = '1'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DELETE FROM oa_group_column WHERE group_id = '1'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_group VALUES  ('1', 'All Devices', '', 'SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\'',1,'Any items that have their status attribute set to production.', 'device', '', 'devices')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '1', 'Icon', 'man_icon', 'image', '',  'man_os_family', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);			

			$sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '2', 'Hostname', 'hostname', 'link', '/main/system_display/', 'system_id', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '3', 'IP Address', 'man_ip_address', 'ip_address', '',  '', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '4', 'Type', 'man_type', 'text', '',  '', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '5', 'Description', 'man_description', 'text', '',  '', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '6', 'OS / Device', 'man_os_name', 'text', '',  '', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '7', 'Tags', 'tag',  'text', '',  '', '', 'left')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			# re-insert the users who originally had access to the group_id 1 which should be the All Devices group
			foreach ($user_array as $user) {
				$sql = "INSERT INTO oa_group_user (group_user_id, user_id, group_id, 
					group_user_access_level) VALUES (NULL, ?, '1', ?)";
				$data = array($user->user_id, $user->group_user_access_level);
				$query = $this->db->query($sql, $data);
				$this->data['output'] .= $this->db->last_query() . "<br /><br />\n";
			}

			$sql = "update oa_group_column set column_link = '/main/system_display/' where column_link = 'main/system_display/'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '20130512', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.0', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			}

		if (($db_internal_version < '20130620') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.0.3

			$sql = "ALTER TABLE sys_man_audits ADD system_audits_ip varchar(30) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location CHANGE location_geotag location_geo varchar(200) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location ADD location_suburb varchar(100) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location ADD location_district varchar(100) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location ADD location_region varchar(100) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location ADD location_area varchar(100) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_location ADD location_tags varchar(250) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '(R)', '')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '(r)', '')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '(TM)', '')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '(tm)', '')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE system SET man_os_name = replace (man_os_name, '(R)', '')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE system SET man_os_name = replace (man_os_name, '(r)', '')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE system SET man_os_name = replace (man_os_name, '(TM)', '')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE system SET man_os_name = replace (man_os_name, '(tm)', '')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('nmis_url', '', 'y', 'The web server address of Open-AudIT Enterprise.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('oae_url', '', 'y', 'The web server address of Open-AudIT Enterprise.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('maps_url', '', 'y', 'The web server address of opMaps.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20130620', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.0.3', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20130810') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.0.4 
			$this->load->model('m_oa_user');

			$sql = "ALTER TABLE sys_sw_pagefile ADD pagefile_size varchar(10) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system ADD man_location_rack_size int(10) unsigned NOT NULL default '0'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS oa_net_nmap_ports";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS oa_net_scan_latest";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS oa_net_scan_log";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS oa_net_scan_type";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_hw_battery";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_hw_firewire";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_hw_floppy";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_hw_keyboard";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_hw_modem";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_hw_mouse";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_hw_onboard_device";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_hw_scsi_device";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_hw_tape_drive";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_hw_usb";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_sw_antivirus";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_sw_database_log";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_sw_firewall";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_sw_firewall_auth_app";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_sw_firewall_ports";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_sw_mapped";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_sw_odbc";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_sw_startup";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_sw_system_security";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_sw_system_security_bulletins";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			# Add the Open-AudIT Enterprise user if not already present
			if (!$this->m_oa_user->select_user("open-audit_enterprise")) {
				$sql = "INSERT INTO oa_user (user_id, user_name, user_password, user_full_name, user_lang, user_theme, user_admin, user_change, user_sam, user_active) VALUES (NULL, 'open-audit_enterprise', '43629bd846bb90e40221d5276c832857ca51e49e325f7344704543439ffd6b6d3a963a32a41f55fca6d995fd302acbe03ea7d8bf2b3af91d662d497b0ad9ba1e', 'Open-AudIT Enterprise', 'en', 'tango', 'n', '0', '1', 'y')";
				$this->data['output'] .= $sql . "<br /><br />\n";
				$query = $this->db->query($sql);
				$user_id = $this->db->insert_id();
				$sql = "INSERT INTO oa_group_user (user_id, group_id, group_user_access_level) VALUES ('" . $user_id . "', '1', '3')";
				$this->data['output'] .= $sql . "<br /><br />\n";
				$query = $this->db->query($sql);
				$this->data['message'] .= "A new user 'open-audit_enterprise' has been created. This user has 'list view only' access to the All Devices group. Please disable if you are not using Open-AudIT Enterprise.<br /><br />";
			}

			# Add the NMIS user if not already present
			if (!$this->m_oa_user->select_user("nmis")) {
				$sql = "INSERT INTO oa_user (user_id, user_name, user_password, user_full_name, user_lang, user_theme, user_admin, user_change, user_sam, user_active) VALUES (NULL, 'nmis', '5a7f9a638ea430196d765ef8d3875eafd64ee3d155ceddaced75467a76b97ab24080cba4a2e74cde03799a6a49dbc5c36ee204eff1d5f42e08cf7a423fdf9757', 'NMIS', 'en', 'tango', 'y', '0', '1', 'y')";
				$this->data['output'] .= $sql . "<br /><br />\n";
				$query = $this->db->query($sql);
				$user_id = $this->db->insert_id();
				$sql = "INSERT INTO oa_group_user (user_id, group_id, group_user_access_level) VALUES ('" . $user_id . "', '1', '3')";
				$this->data['output'] .= $sql . "<br /><br />\n";
				$query = $this->db->query($sql);
				$this->data['message'] .= "A new user 'nmis' has been created. This user has admin access. Please disable if you are not using Open-AudIT Enterprise.<br /><br />";
			}

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable) VALUES ('logo', 'oac-oae', 'n')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('name_match', 'n', 'y', 'Should we match a device based only on its hostname as a last resort.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_log CHANGE log_file_name log_file_name varchar(250) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "DROP TABLE IF EXISTS sys_sw_netstat";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "CREATE TABLE sys_sw_netstat (id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, protocol enum('tcp', 'udp', 'tcp6', 'udp6', '') NOT NULL default '', ip_address varchar(45) NOT NULL default '', port int(5) NOT NULL default '0', program  varchar(250) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00',  PRIMARY KEY  (id), KEY system_id (system_id), CONSTRAINT sys_sw_netstat_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			# we are removing man_vendor from the database
			# there is a column called man_purchase_vendor which is used on several forms
			# man_vendor data (if exists) will be copied to man_purchase_vendor (if not exists)
			$sql = "SELECT system_id, man_vendor, man_purchase_vendor FROM system";
			$query = $this->db->query($sql);
			$system_array = $query->result();

			foreach ($system_array as $system) {
				if ($system->man_vendor > "" AND $system->man_purchase_vendor == "") {
					$sql = "UPDATE system SET man_purchase_vendor = ? WHERE system_id = ?";
					$data = array($system->man_vendor, $system->system_id);
					$query = $this->db->query($sql, $data);
					$this->data['output'] .= $this->db->last_query() . "<br /><br />\n";
				}
			}

			$sql = "ALTER TABLE system CHANGE description description varchar(250) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system CHANGE man_description man_description varchar(250) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system DROP man_vendor";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE oa_config CHANGE config_value config_value varchar(250) NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('snmp_default_community', 'public', 'y', 'The default community string Open-AudIT will use when connecting to a new device.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '20130810', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.0.4', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

		}

		if (($db_internal_version < '20131130') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.0.5
			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('distinct_groups', 'y', 'y', 'Display Groups on the homepage, separated into the type of each Group.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '20131130', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.0.5', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20131211') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.0.6			
			$sql = "UPDATE oa_config set config_value = '20131211', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.0.6', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20131219') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.1			
			$sql = "UPDATE oa_config set config_value = '20131219', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20140126') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.1.1	

			# update the details of the default group
			$sql = "UPDATE oa_location set location_name = 'Default Location', location_type = 'Office', location_city = 'Gold Coast', location_state = 'Queensland', location_country = 'Australia', location_latitude = '-28.017260', location_longitude = '153.425705', location_icon = 'office' WHERE location_id = '0'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			# insert the accompanying group
			$sql = "INSERT INTO oa_group (group_id, group_name, group_dynamic_select, group_parent, group_description, group_category, group_icon) VALUES (NULL, 'Items in Default Location', 'SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = \'0\' AND system.man_status = \'production\'', '1', 'Items in Default Location', 'location', 'location')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			$group_id = $this->db->insert_id();

			# give Admin level users access to the group
			$sql = "INSERT INTO oa_group_user (SELECT NULL, user_id, ?, '10' FROM oa_user WHERE user_admin = 'y')";
			$data = array( $group_id );
			$query = $this->db->query($sql, $data);
			$this->data['output'] .= $this->db->last_query() . "<br /><br />\n";

			# and update the location with the inserted group_id
			$sql = "UPDATE oa_location SET location_group_id = ? WHERE location_id = '0'";
			$data = array( $group_id );
			$query = $this->db->query($sql, $data);
			$this->data['output'] .= $this->db->last_query() . "<br /><br />\n";

			$sql = "UPDATE oa_config set config_value = '/omk/oae' WHERE config_name = 'oae_url'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '/omk/oae/map' WHERE config_name = 'maps_url'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_description = 'The web server address of NMIS.' WHERE config_name = 'nmis_url'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "SELECT config_value FROM oa_config WHERE config_name = 'nmis_url'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			$row = $query->row();
			if ($row->config_value == 'http://localhost/cgi-nmis8/nmiscgi.pl') {
				$sql = "UPDATE oa_config set config_value = '' WHERE config_name = 'nmis_url'";
				$this->data['output'] .= $sql . "<br /><br />\n";
				$query = $this->db->query($sql);
			}

			$sql = "UPDATE oa_config set config_value = '20140126', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.1.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "SELECT count(*) AS systems FROM system";
			$query = $this->db->query($sql);
			$row = $query->row();
			if ($row->systems > "0") {
				$this->data['output'] .= "<br /><span style=\"color:red;\">NOTE</span> Please click <a href=\"../admin_group/list_groups\" style=\"color: blue;\">this link</a> (or go to Admin -> List Groups) and update (icon on the right) the new Group for 'Items in Default Location'.<br />";
			}
		}

		if (($db_internal_version < '20140204') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.2

			$sql = "ALTER TABLE sys_hw_memory ADD memory_serial varchar(100) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_netstat CHANGE protocol protocol enum('tcp', 'udp', 'tcp6', 'udp6', 'tcp4', 'udp4', '') NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_sw_software ADD software_description text NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_windows_username', '', 'y', 'The default username used by Open-AudIT to audit Windows PCs.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_windows_password', '', 'y', 'The default password used by Open-AudIT to audit Windows PCs.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_windows_domain', '', 'y', 'The default active directory domain used by Open-AudIT to audit Windows PCs.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_ssh_username', '', 'y', 'The default username used by Open-AudIT to audit devices via SSH.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_ssh_password', '', 'y', 'The default password used by Open-AudIT to audit devices via SSH.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_network_address', '', 'y', 'The ip address or resolvable hostname used by external devices to talk to Open-AudIT.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config SET config_value = 'y' WHERE config_name = 'name_match'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			$this->data['output'] .= "<br /><span style=\"color:red;\">NOTE</span> The configuration item name_match has been set to \"y\". This is for the new discovery features. If you do not wish to match devices based on their hostname, please go to Admin -> Config and change it to \"n\".\n";

			$sql = "UPDATE oa_config SET config_name = 'default_snmp_community' WHERE config_name = 'snmp_default_community'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "CREATE TABLE oa_temp ( temp_id int(10) unsigned NOT NULL auto_increment, temp_name text NOT NULL, temp_value text NOT NULL, temp_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (temp_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('show_snmp_community', 'y', 'y', 'Show the SNMP community string on forms.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('show_passwords', 'y', 'y', 'Show any passwords on forms.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config SET config_value = '20140204', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config SET config_value = '1.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20140228') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.2.1

			$sql = "UPDATE oa_config set config_value = '20140228', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.2.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20140403') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.3

			$sql = "ALTER TABLE sys_hw_processor ADD processor_count int(2) unsigned NOT NULL default '0' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE sys_hw_processor ADD processor_logical int(2) unsigned NOT NULL default '0' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			# we need to upgrade the OAE user to admin because it needs to read the config to populate the discovery page in OAE
			$sql = "UPDATE oa_user SET user_admin = 'y' WHERE user_name = 'open-audit_enterprise' ";
			$this->data['output'] .= "We need to upgrade the open-audit_enterprise user to admin level because it needs to read the config to populate the discovery page in Open-AudIT Enterprise.<br /><br />\n";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20140403', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.3', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20140501') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.3.1

			$sql = "UPDATE oa_config set config_value = '20140501', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.3.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20140515') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.3.2

			$sql = "ALTER TABLE sys_hw_network_card_ip ADD net_index varchar(10) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('rss_enable', 'y', 'y', 'Enable the RSS feed.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('rss_url', 'https://community.opmantek.com/rss/OA.xml', 'y', 'The RSS feed URL.')";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "ALTER TABLE system CHANGE man_class man_class enum('desktop','laptop','tablet','workstation','server','virtual server','virtual desktop','','hypervisor') NOT NULL default ''";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "CREATE TABLE sys_sw_virtual_machine ( id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, guest_system_id int(10) unsigned default NULL, name varchar(100) NOT NULL default '', vm_id int(12) unsigned NOT NULL default '0', vm_group text NOT NULL default '', config_file text NOT NULL default '', uuid text NOT NULL default '', memory int(12) unsigned NOT NULL default '0', cpu int(10) unsigned NOT NULL default '0', status varchar(100) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (id), KEY system_id (system_id), CONSTRAINT sys_sw_virtual_machine_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20140515', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.3.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
		}

		if (($db_internal_version < '20140620') AND ($this->db->platform() == 'mysql')) {
			# upgrade for 1.3.3

			$sql = "ALTER TABLE sys_hw_network_card ADD net_alias varchar(255) NOT NULL default '' ";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);

			$sql = "UPDATE oa_config set config_value = '20140620', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
			$this->data['output'] .= $sql . "<br /><br />\n";
			$query = $this->db->query($sql);
			
			$sql = "UPDATE oa_config set config_value = '1.3.3', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
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
					$this->data['config']->display_version = $returned_result->config_value;
				}
			}
		}
		
		$this->data['message'] .= "New (now current) database version: " . $db_display_version . " (" . $db_internal_version . ")<br />
		Don't forget to use the new audit scripts!<br/>\n";
		$this->data['include'] = 'v_upgrade'; 
		$this->data['heading'] = 'Upgrade';
		$this->load->view('v_template', $this->data);
	}
}




