<?php
#
//  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
#
//  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
//  This file is part of Open-AudIT.
#
//  Open-AudIT is free software: you can redistribute it and/or modify
//  it under the terms of the GNU Affero General Public License as published
//  by the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
#
//  Open-AudIT is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU Affero General Public License for more details.
#
//  You should have received a copy of the GNU Affero General Public License
//  along with Open-AudIT (most likely in a file named LICENSE).
//  If not, see <http://www.gnu.org/licenses/>
#
//  For further information on Open-AudIT OR for a license other than AGPL please see
//  www.opmantek.com OR email contact@opmantek.com
#
// *****************************************************************************

/**
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.5.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class discovery extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_system');
		// No need for "user" to be logged in
		// Have to be able to submit systems via the discovery script
		$this->data['title'] = 'Open-AudIT';
		$this->load->library('session');
		$loggedin = @$this->session->userdata('logged_in');
		$this->load->model('m_oa_config');
		$conf = $this->m_oa_config->get_config();
		$this->data['config'] = new stdclass();
		foreach ($conf as $returned_result) {
			$config_name = $returned_result->config_name;
			$this->data['config']->$config_name = $returned_result->config_value;
		}
	}

	public function index()
	{
		$this->load->view('v_system_add', $this->data);
	}

	public function discover_active_directory()
	{
		$this->load->helper('url');
		// only Admin users can access this function
		// NOTE - because we're not using the My_Controller, we have to do a bit of manual setup
		if ((string)$this->session->userdata('user_admin') !== 'y') {
			if ($this->input->server('HTTP_REFERER')) {
				redirect($this->input->server('HTTP_REFERER'));
			}
			else {
				redirect('login/index');
			}
		}
		else {
			$this->data['user_admin'] = 'y';
			$this->load->model('m_oa_config');
			$conf = $this->m_oa_config->get_config();
			$this->data['config'] = new stdclass();
			foreach ($conf as $returned_result) {
				$config_name = $returned_result->config_name;
				$this->data['config']->$config_name = $returned_result->config_value;
			}
			$this->data['user_full_name'] = $this->session->userdata('user_full_name');
			$this->data['user_theme'] = 'tango';
		}
		$timestamp = date('Y-m-d H:i:s');

		if ( ! $this->input->post('submit')) {
			// show the form to accept scan details
			$this->data['type'] = $this->uri->segment(3);
			$this->data['warning'] = '';
			$this->data['include'] = 'v_discover_active_directory';
			$this->data['sortcolumn'] = '1';
			$this->data['heading'] = 'Active Directory Discovery';
			$this->load->view('v_template', $this->data);
		}
		else {
			if ($this->input->post('debug') AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') === TRUE))) {
				echo "<pre>\n";
			}
			// run the audit_domain script
			if ((isset($_POST['server']) AND $_POST['server'] > '') and
			(isset($_POST['windows_username']) AND $_POST['windows_username'] > '') AND
			(isset($_POST['windows_password']) AND $_POST['windows_password'] > '') AND
			(isset($_POST['windows_domain']) AND $_POST['windows_domain'] > '')) {
				$error = '';
				$log = 'C:discovery F:discover_active_directory U:' . $this->data['user_full_name'] . ' Discovery AD submitted for ' . $_POST['windows_domain'];
				$this->log_event($log);
				$i = explode('/', base_url());
				$url = str_replace($i[2], $_POST['network_address'], base_url()) . 'index.php/system/add_system';
			} else {
				$error = 'C:discovery F:discover_active_directory U:' . $this->data['user_full_name'] . ' Discovery AD incomplete credentials.';
				$this->log_event($log);
				$url = '';
			}

			if ((php_uname('s') == 'Windows NT') AND ($error == '')) {
				// Windows host - start the script locally
				$filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "\\open-audit\\other";

				if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
					$script_string = "$filepath\\discover_domain.vbs local_domain=LDAP://" . $_POST['windows_domain'] . " number_of_audits=" . $_POST['number_of_audits'] . " script_name=$filepath\\audit_windows.vbs url=" . $url . " struser=" . $_POST['windows_domain'] . "\\" . $_POST['windows_username'] . " strpass=" . $_POST['windows_password'] . " debugging=1";
				}
				else {
					$script_string = "$filepath\\discover_domain.vbs local_domain=LDAP://" . $_POST['windows_domain'] . " number_of_audits=" . $_POST['number_of_audits'] . " script_name=$filepath\\audit_windows.vbs url=" . $url . " struser=" . $_POST['windows_domain'] . "\\" . $_POST['windows_username'] . " strpass=" . $_POST['windows_password'] . " debugging=0";
				}
				$command_string = "%comspec% /c start /b cscript //nologo " . $script_string . " &";


				if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
					exec($command_string, $output, $return_var);
					echo 'DEBUG - Command Executed: ' . $command_string . "\n";
					echo 'DEBUG - Return Value: ' . $return_var . "\n";
					echo "DEBUG - Command Output:\n";
					print_r($output);
					if ($return_var != '0') {
						$error = "C:discovery F:process_subnet Attempt to run discover_domain.vbs on localhost has failed";
						$this->log_event($error);
					}
					else {
						$log = "C:discovery F:process_subnet Attempt to run discover_domain.vbs on localhost has succeeded";
						$this->log_event($log);
					}
				}
				else {
					pclose(popen($command_string, 'r'));
				}
				$output = NULL;
				$return_var = NULL;
				$command_string = NULL;
			}

			if (php_uname('s') == 'Linux' OR php_uname('s') == "Darwin") {
				// linux OR OSX host - copy the script to the DC AND start it
				$filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "/open-audit/other";
				$_POST['windows_username'] = str_replace('$', '\$', $_POST['windows_username']);
				$_POST['windows_password'] = str_replace('$', '\$', $_POST['windows_password']);

				// copy the domain audit script
				if ($error == '') {
					$command_string = "smbclient \\\\\\\\" . $_POST['server'] . "\\\\admin$ -U \"" . $_POST['windows_domain'] . "\\" . $_POST['windows_username'] . "%" . $_POST['windows_password'] . "\" -c \"put $filepath/discover_domain.vbs discover_domain.vbs\" 2>&1";
					exec($command_string, $output, $return_var);
					if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') === TRUE))) {
						echo 'DEBUG - Command Executed: ' . $command_string . "\n";
						echo 'DEBUG - Return Value: ' . $return_var . "\n";
						echo "DEBUG - Command Output:\n";
						print_r($output);
					}
					if ($return_var != '0') {
						$error = "C:discovery F:process_subnet SMBClient copy of discover_domain.vbs to " . $_POST['server'] . " has failed";
						$this->log_event($error);
					}
					else {
						$log = "C:discovery F:process_subnet SMBClient copy of discover_domain.vbs to " . $_POST['server'] . " has succeeded";
						$this->log_event($log);
					}
					$command_string = NULL;
					$output = NULL;
					$return_var = NULL;
				}

				// copy the windows audit script
				if ($error == '') {
					$command_string = "smbclient \\\\\\\\" . $_POST['server'] . "\\\\admin$ -U \"" . $_POST['windows_domain'] . "\\" . $_POST['windows_username'] . "%" . $_POST['windows_password'] . "\" -c \"put $filepath/audit_windows.vbs audit_windows.vbs\" 2>&1";
					exec($command_string, $output, $return_var);
					if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
						echo 'DEBUG - Command Executed: ' . $command_string . "\n";
						echo 'DEBUG - Return Value: ' . $return_var . "\n";
						echo "DEBUG - Command Output:\n";
						print_r($output);
					}
					if ($return_var != '0') {
						$error = "C:discovery F:process_subnet SMBClient copy of audit_windows.vbs to " . $_POST['server'] . " has failed";
						$this->log_event($error);
					}
					else {
						$log = "C:discovery F:process_subnet SMBClient copy of audit_windows.vbs to " . $_POST['server'] . " has succeeded";
						$this->log_event($log);
					}
					$command_string = NULL;
					$output = NULL;
					$return_var = NULL;
				}

				// start the domain audit
				if ($error == '') {
					$command_string = "screen -D -m /usr/local/open-audit/other/winexe-static -U " . $_POST['windows_domain'] . "/" . $_POST['windows_username'] . "%" . $_POST['windows_password'] . " --uninstall //" . $_POST['server'] . " \"cscript //nologo c:\windows\discover_domain.vbs local_domain=LDAP://" . $_POST['windows_domain'] . " number_of_audits=" . $_POST['number_of_audits'] . " script_name=c:\windows\audit_windows.vbs url=" . $url . " debugging=0 struser=" . $_POST['windows_domain'] . "\\" . $_POST['windows_username'] . " strpass=" . $_POST['windows_password'] . " \" ";
					exec($command_string, $output, $return_var);
					if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
						echo 'DEBUG - Command Executed: ' . $command_string . "\n";
						echo 'DEBUG - Return Value: ' . $return_var . "\n";
						// echo "DEBUG - Command Output:\n";  // nooutput because of use of 'screen' command
						// print_r($output);
					}
					if ((string)$return_var !== '0') {
						$error = 'C:discovery F:process_subnet Attempt to run discover_domain.vbs on ' . $this->input->post('server') . ' has failed';
						$this->log_event($error);
					}
					else {
						$log = 'C:discovery F:process_subnet Attempt to run discover_domain.vbs on ' . $this->input->post('server') . ' has succeeded';
						$this->log_event($log);
					}
					$command_string = NULL;
					$output = NULL;
					$return_var = NULL;
				}

			} // end of Linux domain audit
			if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
				// do not redirect
			}
			else {
				redirect('admin/view_log');
			}
		} // end of submit / not submit
	}
























	public function discover_subnet()
	{

		$this->load->helper('url');

		// if GET OR POST has username AND password, use that to validate AND deliver page AND do NOT set a cookie
		if ((!isset($loggedin)) AND ($this->session->userdata('logged_in') != TRUE AND $this->session->userdata('user_admin') != 'y')) {

			if ((strpos(current_url(), 'username') != FALSE) AND (strpos(current_url(), 'password') != FALSE)) {
				$split_url = explode("/", current_url());
				for ($i=0; $i <= count($split_url)-1 ; $i++) {
					if (strpos($split_url[$i], 'username') != FALSE) {
						$username = $split_url[$i+1];
					}
					if (strpos($split_url[$i], 'password') != FALSE) {
						$password = $split_url[$i+1];
					}
				}
			}

			if (isset($_POST['username']) AND isset($_POST['password'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
			}

			if (isset($username) AND $username != "" AND isset($password) AND $password != "") {
				$this->load->model("m_userlogin");
				if ($data = $this->m_userlogin->validate_user($username, $password)) {
					if ($data != 'fail') {
						if ($data['user_admin'] == 'y' OR $data['user_full_name'] == 'Open-AudIT Enterprise') {
							// setup the user details
							$this->session->set_userdata($data);
							$this->data['user_full_name'] = $data['user_full_name'];
							$this->data['user_lang'] = $data['user_lang'];
							$this->data['user_theme'] = $data['user_theme'];
							$this->data['user_admin'] = $data['user_admin'];
							$this->data['user_id'] = $data['user_id'];
							$this->data['user_debug'] = 'n';
							$loggedin = TRUE;

							// load the config
							$this->load->model("m_oa_config");
							$conf = $this->m_oa_config->get_config();
							$this->data['config'] = new stdclass();
							foreach ($conf as $returned_result) {
								$config_name = $returned_result->config_name;
								$this->data['config']->$config_name = $returned_result->config_value;
							}
						} else {
							// valid user, but user is not an admin OR OAE
						}
					} else {
						// username AND password are set but do not validate
						exit();	   
					}
				} else {
					// username AND password are set but validate_user fails for some reason
					exit();
				}
			}
		} else {
			if (!isset($this->data['user_full_name']) OR $this->data['user_full_name'] == '') { $this->data['user_full_name'] = $this->session->userdata('user_full_name'); }
			if (!isset($this->data['user_lang']) OR $this->data['user_lang'] == '') { $this->data['user_lang'] = $this->session->userdata('user_lang'); }
			if (!isset($this->data['user_theme']) OR $this->data['user_theme'] == '') { $this->data['user_theme'] = $this->session->userdata('user_theme'); }
			if (!isset($this->data['user_admin']) OR $this->data['user_admin'] == '') { $this->data['user_admin'] = $this->session->userdata('user_admin'); }
			if (!isset($this->data['user_id']) OR $this->data['user_id'] == '') { $this->data['user_id'] = $this->session->userdata('user_id'); }
			if (!isset($this->data['user_debug']) OR $this->data['user_debug'] == '') { $this->data['user_debug'] = $this->session->userdata('user_debug'); }
			$this->load->helper('url');
			$this->load->helper('network');
			$this->data['apppath'] = APPPATH;
			$this->data['image_path'] = base_url() . 'theme-' . $this->data['user_theme'] . '/' . $this->data['user_theme'] . '-images/';
			$this->load->model("m_oa_report");
			$this->data['menu'] = $this->m_oa_report->list_reports_in_menu();
			set_time_limit(600);
		}

		$timestamp = date('Y-m-d H:i:s');
		$this->load->model("m_system");
		$this->load->model("m_oa_general");
		if (!isset($_POST['submit'])) {
			// show the form to accept scan details
			$this->data['type'] = "";
			$this->data['credentials'] = new stdClass();
			if ($this->uri->segment(3)) { 
				if (is_numeric($this->uri->segment(3))) {
					$this->data['system_id'] = $this->uri->segment(3);
					$this->data['credentials'] = $this->m_system->get_credentials($this->data['system_id']);
					$this->data['ip_address'] = $this->ip_address_from_db($this->m_oa_general->get_attribute('system', 'man_ip_address', $this->data['system_id']));
					$this->data['type'] = 'device';
				} else {
					$this->data['ip_address'] = "";
					$this->data['type'] = $this->uri->segment(3);
				}
			}
			if ($this->uri->segment(4) AND is_numeric($this->uri->segment(4))) {
				$this->data['system_id'] = $this->uri->segment(4);
				$this->data['credentials'] = $this->m_system->get_credentials($this->data['system_id']);
					$this->data['ip_address'] = $this->ip_address_from_db($this->m_oa_general->get_attribute('system', 'man_ip_address', $this->data['system_id']));
			}
			$this->data['warning'] = '';
			$this->data['include'] = "v_discover_subnet";
			$this->data['sortcolumn'] = '1';
			$this->data['heading'] = 'Discovery';
			$this->load->view('v_template', $this->data);
		} else {
			// process the scan details and call the discovery script

			$return_var = "";
			$output = "";

			if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
				echo "<pre>\n";
			}

			$credentials = new stdClass();

			// create a network group if provided a subnet that includes a slash in the string AND
			// auto create network is set in the config to 'y'
			if (isset($_POST['subnet_range']) AND $_POST['subnet_range'] > '') {
				$subnet_range = $_POST['subnet_range'];
				$credentials->man_ip_address = $_POST['subnet_range'];
			} else {
				$subnet_range = "";
			}

			$log = "C:discovery F:discover_subnet U:" . $this->data['user_full_name'] . " Discovery submitted for $subnet_range"; $this->log_event($log);

			// we encode the supplied credentials AND store them in the database
			// the script will simply pass back the timestamp AND the credentials will be retrieved AND used
			$this->load->library('encrypt');

			if (isset($_POST['snmp_community']) AND $_POST['snmp_community'] > '') {
				$encode['snmp_community'] = $_POST['snmp_community'];
				$credentials->snmp_community = $_POST['snmp_community'];
			} else {
				$encode['snmp_community'] = '';
			}

			if (isset($_POST['ssh_username']) AND $_POST['ssh_username'] > '') {
				$encode['ssh_username'] = $_POST['ssh_username'];
				$credentials->ssh_username = $_POST['ssh_username'];
			} else {
				$encode['ssh_username'] = '';
			}

			if (isset($_POST['ssh_password']) AND $_POST['ssh_password'] > '') {
				$encode['ssh_password'] = $_POST['ssh_password'];
				$credentials->ssh_password = $_POST['ssh_password'];
			} else {
				$encode['ssh_password'] = '';
			}

			if (isset($_POST['windows_username']) AND $_POST['windows_username'] > '') {
				$encode['windows_username'] = $_POST['windows_username'];
				$credentials->windows_username = $_POST['windows_username'];
			} else {
				$encode['windows_username'] = '';
			}

			if (isset($_POST['windows_password']) AND $_POST['windows_password'] > '') {
				$encode['windows_password'] = $_POST['windows_password'];
				$credentials->windows_password = $_POST['windows_password'];
			} else {
				$encode['windows_password'] = '';
			}

			if (isset($_POST['windows_domain']) AND $_POST['windows_domain'] > '') {
				$encode['windows_domain'] = $_POST['windows_domain'];
				$credentials->windows_domain = $_POST['windows_domain'];
			} else {
				$encode['windows_domain'] = '';
			}

			if (isset($_POST['network_address']) AND $_POST['network_address'] > '') {
				$encode['network_address'] = $_POST['network_address'];
			} else {
				$encode['network_address'] = '';
			}

			if (isset($_POST['type']) AND $_POST['type'] == 'device' and
				isset($_POST['system_id']) AND $_POST['system_id'] > '') {
				// we are auditing a single device that exists in the DB
				// update the device access credentials
				$this->m_system->update_credentials($credentials, $_POST['system_id']);

			}

			$encode['last_user'] = $this->data['user_full_name'];
			$encoded = json_encode($encode);
			$credentials = $this->encrypt->encode($encoded);
			$i = 0;
			do {
				if (strpos($credentials, "\"") != FALSE) {
					$credentials = $this->encrypt->encode($encoded);
				} else {
					$i = 1;
				}
			} while ($i = 0);

			// TODO - fix this SQL with proper escaping
			$sql = 'INSERT INTO oa_temp (temp_id, temp_name, temp_value, temp_timestamp) VALUES (NULL, "Subnet Credentials - ' . $subnet_range . '", "' . $credentials . '", "' . $timestamp . '")';
			$query = $this->db->query($sql);
			$credentials = "";

			if (strpos($subnet_range, "/")) {
				// we have a subnet_range - if it's not a /32, then test for a group
				$subnet_split = explode("/", $subnet_range);
				if ($subnet_split[1] <> "32") {
					// we have a real subnet_range
					$subnet_details = network_details($subnet_range);
					$sql = "SELECT config_value FROM oa_config WHERE config_name = 'auto_create_network_groups' ";
					$query = $this->db->query($sql);
					$row = $query->row();
					if ($row->config_value <> 'n') {
						// we do want to auto create network groups
						// test if a network group exists with the matching definition
						$group_dynamic_select = "SELECT distinct(system.system_id) FROM system, sys_hw_network_card_ip WHERE ( sys_hw_network_card_ip.ip_address_v4 >= '" . ip_address_to_db($subnet_details->host_min) . "' AND sys_hw_network_card_ip.ip_address_v4 <= '" . ip_address_to_db($subnet_details->host_max) . "' AND sys_hw_network_card_ip.ip_subnet = '" . $subnet_details->netmask . "' AND sys_hw_network_card_ip.system_id = system.system_id AND sys_hw_network_card_ip.timestamp = system.timestamp AND system.man_status = 'production') UNION SELECT distinct(system.system_id) FROM system WHERE (system.man_ip_address >= '" . ip_address_to_db($subnet_details->host_min) . "' AND system.man_ip_address <= '" . ip_address_to_db($subnet_details->host_max) . "' AND system.man_status = 'production')";
						$start = explode(' ',microtime());
						$sql = "SELECT * FROM oa_group WHERE group_dynamic_select = ? ";
						$data = array($group_dynamic_select);
						$query = $this->db->query($sql, $data);
						if ($query->num_rows() > 0) {
							// group exists - no need to do anything
						} else {
							// group does not exist - insert
							$log = "C:discovery F:discover_subnet U:" . $this->data['user_full_name'] . " Creating Group for $subnet_range"; 
							$this->log_event($log, 'y');
							$sql = "INSERT INTO oa_group (group_id, group_name, group_padded_name, group_dynamic_select, group_parent, group_description, group_category, group_icon) VALUES (NULL, ?, ?, ?, '1', ?, 'network', 'switch')";
							$group_name = "Network - " . $subnet_details->network . ' / ' . $subnet_details->network_slash;
							$group_padded_name = "Network - " . ip_address_to_db($subnet_details->network);
							$data = array("$group_name", "$group_padded_name", "$group_dynamic_select", $subnet_details->network);
							$query = $this->db->query($sql, $data);
							$insert_id = $this->db->insert_id();
							// We need to insert an entry into oa_group_user for any Admin level user
							$sql = "INSERT INTO oa_group_user (SELECT NULL, user_id, ?, '10' FROM oa_user WHERE user_admin = 'y')";
							$data = array( $insert_id );
							$result = $this->db->query($sql, $data);
							// now we update this specific group
							// this accounts for if another system has a IP that would fall in this group, but was submitted
							// without a subnet_range AND no matching network group was previously created.
							// update the group with all systems that match
							$this->load->model('m_oa_group');
							$this->m_oa_group->update_specific_group($insert_id);
						}
					}

				}
			}

			if ((php_uname('s') == 'Linux') OR (php_uname('s') == 'Darwin')) {
				$filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "/open-audit/other";
			} else {
				$filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "\\open-audit\\other";
			}

			if (isset($_POST['network_address']) AND $_POST['network_address'] > '') {
				$i = explode('/', base_url());
				$url = str_replace($i[2], $_POST['network_address'], base_url());
			} elseif (isset($this->data['config']->default_network_address) AND $this->data['config']->default_network_address > '') {
				$i = explode('/', base_url());
				$url = str_replace($i[2], $this->data['config']->default_network_address, base_url());
			} else {
				$url = base_url();
			}

			if ((php_uname('s') == 'Linux') OR (php_uname('s') == 'Darwin')) {
				if ($subnet_range > '') {
					if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
						// run the script and wait for the output so we can echo it.
						$command_string = "$filepath/discover_subnet.sh subnet_range=$subnet_range url=" . $url . "index.php/discovery/process_subnet submit_online=n echo_output=y create_file=n debugging=0 subnet_timestamp=\"$timestamp\" 2>&1";
						@exec($command_string, $output, $return_var);
						echo 'DEBUG - Command Executed: ' . $command_string . "\n";
						echo 'DEBUG - Return Value: ' . $return_var . "\n";
						echo "DEBUG - Command Output:\n";
						$output_new = str_replace("<", "&lt;", $output);
						print_r($output_new);

						if ($return_var != '0') {
							$error = "Discovery subnet starting script discover_subnet.sh ($subnet_range) has failed"; 
							$this->log_event($error);
						} else {
							$script_result = '';
							foreach ($output as $line) {
								$script_result .= $line . "\n";
							}
							$script_result = preg_replace('/\s+/', ' ',$script_result);
							$script_result = str_replace("> <", "><", $script_result);
							$_POST['form_details'] = trim($script_result);
							$this->process_subnet();
						}
						exit();
					} else {
						// run the script and continue (do not wait for result)
						$command_string = "nohup $filepath/discover_subnet.sh subnet_range=$subnet_range url=" . $url . "index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\"  > /dev/null 2>&1 &";
						@exec($command_string, $output, $return_var);
						if ($return_var != '0') {
							$error = "Discovery subnet starting script discover_subnet.sh ($subnet_range) has failed"; 
							$this->log_event($error);
						}
					}
					$command_string = NULL;
					$output = NULL;
					$return_var = NULL;
				}
			}
			if (php_uname('s') == 'Windows NT') {
				if ($subnet_range > '') {
					if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
						// run the script and wait for the output so we can echo it.
						$command_string = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs subnet_range=$subnet_range url=" . $url . "index.php/discovery/process_subnet submit_online=n echo_output=y create_file=n debugging=0 subnet_timestamp=\"$timestamp\" ";
						@exec($command_string, $output, $return_var);
						echo 'DEBUG - Command Executed: ' . $command_string . "\n";
						echo 'DEBUG - Return Value: ' . $return_var . "\n";
						echo "DEBUG - Command Output:\n";
						$output_new = str_replace("<", "&lt;", $output);
						print_r($output_new);

						if ($return_var != '0') {
							$error = "Discovery subnet starting script discover_subnet.sh ($subnet_range) has failed"; 
							$this->log_event($error);
						} else {
							$script_result = '';
							foreach ($output as $line) {
								$script_result .= $line;
							}
							$script_result = preg_replace('/\s+/', ' ',$script_result);
							$script_result = str_replace("> <", "><", $script_result);
							$_POST['form_details'] = $script_result;
							$this->process_subnet();
						}
					} else {
						// run the script and continue (do not wait for result)
						$command_string = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs subnet_range=$subnet_range url=" . $url . "index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\" ";
						pclose(popen($command_string,"r"));
					}
				}
			}
			if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
				// do nothing so we echo out the logs
			} else {
				// redirect to the log page or the device details
				if (isset($this->data['type']) AND $this->data['type'] === 'device') {
					// function was called from device details page - redirect back there
					redirect('main/system_display/' . $this->data['system_id']);
				} else {
					// function was called from Dscovery page, redirect to log viewer
					redirect('admin/view_log');
				}
			}

		}
	}













	public function process_subnet()
	{
		// accept OR process the output of the discover subnet script - nmap details
		if ( ! isset($_POST['form_details'])) {
			$this->load->view('v_process_subnet', $this->data);
		} else {
			if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
				echo "<pre>\n";
				echo "DEBUG - Starting process_subnet.\n";
			}

			$this->load->helper('url');
			$this->load->model('m_oa_config');
			$this->data['config'] = new stdclass();
			//$conf = $this->m_oa_config->get_config();
			//foreach ($conf as $returned_result) {
			foreach ($this->m_oa_config->get_config() as $returned_result) {
				$config_name = $returned_result->config_name;
				$this->data['config']->$config_name = $returned_result->config_value;
			}

			if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
				echo 'DEBUG - <a href=\'' . base_url() . "index.php/discovery/discover_subnet'>Back to input page</a>\n";
				echo 'DEBUG - <a href=\'' . base_url() . "index.php'>Front Page</a>\n";
			}

			if ((php_uname('s') === 'Linux') OR (php_uname('s') === 'Darwin')) {
				$filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/open-audit/other';
			}

			if (php_uname('s') === 'Windows NT') {
				$filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '\\open-audit\\other';
			}

			$this->load->helper('url');
			$this->load->helper('xml');
			$this->load->library('encrypt');
			if (extension_loaded('snmp')) {
				$this->load->helper('snmp');
				$this->load->helper('snmp_oid');
			}
			$this->load->model('m_system');
			$this->load->model('m_network_card');
			$this->load->model('m_ip_address');
			$this->load->model('m_virtual_machine');
			$this->load->model('m_oa_group');
			$this->load->model('m_oa_general');
			$this->load->model('m_sys_man_audits');
			$this->load->model('m_alerts');
			$timestamp = date('Y-m-d H:i:s');
			$xml_input = $_POST['form_details'];
			try {
				$xml = new SimpleXMLElement($xml_input);
			} catch (Exception $error) {
				// not a valid XML string
				$log_details = 'Invalid XML input for discovery from ' . $_SERVER['REMOTE_ADDR'];
				$this->log_event($log_details);
				exit;
			}

			$count = 0;
			foreach ($xml->children() AS $details) {
				$details = (object) $details;

				if (isset($details->complete) AND $details->complete == 'y') {
					// delete the credential set
					if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
						echo "DEBUG - ----------------------------------------------------\n";
					}
					print_r($details);
					sleep(5);
					$log_details = 'C:discovery F:process_subnet Deleting credential set for ' . $details->subnet_range . ' submitted on ' . $details->subnet_timestamp;
					$this->log_event($log_details);
					$sql = 'DELETE FROM oa_temp WHERE temp_name = \'Subnet Credentials - ' . $details->subnet_range . '\' AND temp_timestamp = \'' . $details->subnet_timestamp . '\' ';
					$query = $this->db->query($sql);
				} else {
					// process the device result
					if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
						$details->show_output = TRUE;
						echo "DEBUG - ----------------------------------------------------\n";
					}
					print_r($details);
					$log_details = 'C:discovery F:process_subnet Start processing ' . $details->man_ip_address;
					$this->log_event($log_details);
					$count++;
					$details->timestamp = $timestamp;
					$details->last_seen = $timestamp;
					$details->last_user = '';

					$details->hostname = '';
					if (!filter_var($details->man_ip_address, FILTER_VALIDATE_IP)) {
						$details->hostname = $details->man_ip_address;
					} else {
						$details->hostname = strtolower(gethostbyaddr($details->man_ip_address));
					}
					$details->domain = '';
					$details->audits_ip = ip_address_to_db($_SERVER['REMOTE_ADDR']);

					if (!filter_var($details->hostname, FILTER_VALIDATE_IP)) {
						if (strpos($details->hostname, ".") != FALSE) {
							// we have a domain returned
							$details->fqdn = strtolower($details->hostname);
							$i = explode(".", $details->hostname);
							$details->hostname = $i[0];
							unset($i[0]);
							$details->domain = implode(".", $i);
						}
					}

					// process what little data we have AND try to make a system_key
					$details->system_key = '';
					$details->system_key = $this->m_system->create_system_key($details);

					// we have a system_key (best we can) - see if we can find an existing device
					$details->system_id = '';
					$details->system_id = $this->m_system->find_system($details);

					// If we find a device AND we're in DEBUG, output a result line.
					if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
						if (isset($details->system_id) AND $details->system_id > ''){
							echo 'DEBUG - existing system key found for System ID: <a href=\'' . base_url() . 'index.php/main/system_display/' . $details->system_id . '\'>' . $details->system_id . "</a>.\n";
						}
					}

					// device specific credentials
					$device_specific_credentials = $this->m_system->get_access_details($details->system_id);
					$device_specific_credentials = $this->encrypt->decode($device_specific_credentials);
					$specific = json_decode($device_specific_credentials);

					// default Open-AudIT credentials
					$default = $this->m_oa_config->get_credentials();

					// supplied credentials
					$sql = 'SELECT temp_value FROM oa_temp WHERE temp_name = \'Subnet Credentials - ' . $details->subnet_range . '\' AND temp_timestamp = \'' . $details->subnet_timestamp . '\' ORDER BY temp_id DESC LIMIT 1';
					$query = $this->db->query($sql);
					$row = $query->row();
					$supplied_credentials = @$row->temp_value;
					$supplied = new stdClass();
					if (isset($supplied_credentials) AND $supplied_credentials > '') {

						$supplied_credentials = $this->encrypt->decode($supplied_credentials);
						$supplied_credentials = json_decode($supplied_credentials);

						$supplied->snmp_community =   @$supplied_credentials->snmp_community;
						$supplied->snmp_version =	 @$supplied_credentials->snmp_version;
						$supplied->snmp_port =		@$supplied_credentials->snmp_port;
						$supplied->ssh_username =	 @$supplied_credentials->ssh_username;
						$supplied->ssh_password =	 @$supplied_credentials->ssh_password;
						$supplied->windows_username = @$supplied_credentials->windows_username;
						$supplied->windows_password = @$supplied_credentials->windows_password;
						$supplied->windows_domain =   @$supplied_credentials->windows_domain;
						$details->last_seen_user =	@$supplied_credentials->last_user;
						$details->network_address =   @$supplied_credentials->network_address;
					} else {
						$supplied->snmp_community = '';
						$supplied->snmp_version = '';
						$supplied->snmp_port = '';
						$supplied->ssh_username = '';
						$supplied->ssh_password = '';
						$supplied->windows_username = '';
						$supplied->windows_password = '';
						$supplied->windows_domain = '';
						$details->last_seen_user = '';
						$details->network_address = '';
					}

					$details->last_user = $details->last_seen_user;

					// create the URL for use by the audit scripts
					if (isset($_POST['network_address']) AND $_POST['network_address'] > '') {
						$temp = explode('/', base_url());
						$url = str_replace($temp[2], $_POST['network_address'], base_url());
					} elseif (isset($this->data['config']->default_network_address) AND $this->data['config']->default_network_address > '') {
						$temp = explode('/', base_url());
						$url = str_replace($temp[2], $this->data['config']->default_network_address, base_url());
					} else {
						$url = base_url();
					}
					unset($details->network_address);

					$details->snmp_community = '';
					if ($details->snmp_community == '' AND isset($specific->snmp_community) AND $specific->snmp_community > '') {
						$details->snmp_community = $specific->snmp_community;
					}
					if ($details->snmp_community == '' AND isset($supplied->snmp_community) AND $supplied->snmp_community > '') {
						$details->snmp_community = $supplied->snmp_community;
					}
					if ($details->snmp_community == '' AND isset($default->default_snmp_community) AND $default->default_snmp_community > '') {
						$details->snmp_community = $default->default_snmp_community;
					}

					$details->ssh_username = '';
					if ($details->ssh_username == '' AND isset($specific->ssh_username) AND $specific->ssh_username > '') {
						$details->ssh_username = $specific->ssh_username;
					}
					if ($details->ssh_username == '' AND isset($supplied->ssh_username) AND $supplied->ssh_username > '') {
						$details->ssh_username = $supplied->ssh_username;
					}
					if ($details->ssh_username == '' AND isset($default->default_ssh_username) AND $default->default_ssh_username > '') {
						$details->ssh_username = $default->default_ssh_username;
					}

					$details->ssh_password = '';
					if ($details->ssh_password == '' AND isset($specific->ssh_password) AND $specific->ssh_password > '') {
						$details->ssh_password = $specific->ssh_password;
					}
					if ($details->ssh_password == '' AND isset($supplied->ssh_password) AND $supplied->ssh_password > '') {
						$details->ssh_password = $supplied->ssh_password;
					}
					if ($details->ssh_password == '' AND isset($default->default_ssh_password) AND $default->default_ssh_password > '') {
						$details->ssh_password = $default->default_ssh_password;
					}

					$details->windows_username = '';
					if ($details->windows_username == '' AND isset($specific->windows_username) AND $specific->windows_username > '') {
						$details->windows_username = $specific->windows_username;
					}
					if ($details->windows_username == '' AND isset($supplied->windows_username) AND $supplied->windows_username > '') {
						$details->windows_username = $supplied->windows_username;
					}
					if ($details->windows_username == '' AND isset($default->default_windows_username) AND $default->default_windows_username > '') {
						$details->windows_username = $default->default_windows_username;
					}

					$details->windows_password = '';
					if ($details->windows_password == '' AND isset($specific->windows_password) AND $specific->windows_password > '') {
						$details->windows_password = $specific->windows_password;
					}
					if ($details->windows_password == '' AND isset($supplied->windows_password) AND $supplied->windows_password > '') {
						$details->windows_password = $supplied->windows_password;
					}
					if ($details->windows_password == '' AND isset($default->default_windows_password) AND $default->default_windows_password > '') {
						$details->windows_password = $default->default_windows_password;
					}

					$details->windows_domain = '';
					if ($details->windows_domain == '' AND isset($specific->windows_domain) AND $specific->windows_domain > '') {
						$details->windows_domain = $specific->windows_domain;
					}
					if ($details->windows_domain == '' AND isset($supplied->windows_domain) AND $supplied->windows_domain > '') {
						$details->windows_domain = $supplied->windows_domain;
					}
					if ($details->windows_domain == '' AND isset($default->default_windows_domain) AND $default->default_windows_domain > '') {
						$details->windows_domain = $default->default_windows_domain;
					}

					// output to log file AND DEBUG the status of the three main services
					$log_details = 'C:discovery F:process_subnet WMI Status: ' . $details->wmi_status . ' ' . $details->man_ip_address; 
					$this->log_event($log_details);
					$log_details = 'C:discovery F:process_subnet SNMP Status: ' . $details->snmp_status . ' ' . $details->man_ip_address; 
					$this->log_event($log_details);
					$log_details = 'C:discovery F:process_subnet SSH Status: ' . $details->ssh_status . ' ' . $details->man_ip_address; 
					$this->log_event($log_details);

					// try to get more information using SNMP (if ext loaded in PHP)
					if (extension_loaded('snmp') AND $details->snmp_status == 'true') {
						$log_details = 'C:discovery F:process_subnet Attempting SNMP discovery on ' . $details->man_ip_address; 
						$this->log_event($log_details);

						// get rid of os_* as nmap only guesses
						$details->os_group = '';
						$details->os_family = '';
						$details->os_name = '';

						$temp_array = get_snmp($details);
						$details = $temp_array['details'];
						$network_interfaces = $temp_array['interfaces'];
						unset($guests);
						if (isset($temp_array['guests']) AND count($temp_array['guests']) > 0) {
							$guests = $temp_array['guests'];
						}
						if (isset($network_interfaces) AND count($network_interfaces > 0)) {
							foreach ($network_interfaces as $interface) {
								if (isset($interface->net_mac_address) AND (string)$interface->net_mac_address != '') {
									// we have a mac address, insert it into the $details object
									$mac_address = strtolower((string)$interface->net_mac_address);
									$details->mac_addresses->$mac_address = $mac_address;
								}
							}
						}
					}

					// if ipmi tools are installed and we're running Linux
					if (php_uname('s') == 'Linux') {
						$error = '';
						$command_string = 'which ipmitool 2>&1';
						exec($command_string, $output, $return_var);
						if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
							echo 'DEBUG - Command Executed: ' . $command_string . "\n";
							echo 'DEBUG - Return Value: ' . $return_var . "\n";
							echo "DEBUG - Command Output:\n";
							print_r($output);
						}
						if ($return_var != '0') {
							$error = 'C:discovery F:process_subnet ipmitools not detected';
							$this->log_event($error);
						} else {
							$log = 'C:discovery F:process_subnet ipmitools detected';
							$this->log_event($log);
						}
						$command_string = NULL;
						$output = NULL;
						$return_var = NULL;

						if ($error == '') {
							// ipmitools are installed
							// Attempt to get MAC Address
							$command_string = 'ipmitool -H ' . $details->man_ip_address . ' -U ' . $default->default_ipmi_username . ' -P ' . $default->default_ipmi_password . ' lan print 2>/dev/null | grep "^MAC Address" | cut -d":" -f2- | cut -d" " -f2';
							exec($command_string, $output, $return_var);
							if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
								echo 'DEBUG - Command Executed: ' . $command_string . "\n";
								echo 'DEBUG - Return Value: ' . $return_var . "\n";
								echo "DEBUG - Command Output:\n";
								print_r($output);
							}
							if ($return_var != '0') {
								$error = 'C:discovery F:process_subnet ipmitools could not retrieve MAC Address';
								$this->log_event($error);
							} 
							$command_string = NULL;
							$return_var = NULL;

							if ($error == '' AND isset($output[0]) AND $output[0] != '') {
								$log = 'C:discovery F:process_subnet ipmitools successfully retrieved MAC Address';
								$this->log_event($log);
								// We have a response (containing a MAC Address) from the target
								$details->type = 'remote access controller';
								if ($details->mac_address == '') { $details->mac_address = strtolower($output[0]); }
								$output = NULL;
								
								// attempt to retrieve the Subnet Mask
								$command_string = 'ipmitool -H ' . $details->man_ip_address . ' -U ' . $default->default_ipmi_username . ' -P ' . $default->default_ipmi_password . ' lan print 2>/dev/null | grep "Subnet Mask" | cut -d":" -f2 ';
								exec($command_string, $output, $return_var);
								if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
									echo 'DEBUG - Command Executed: ' . $command_string . "\n";
									echo 'DEBUG - Return Value: ' . $return_var . "\n";
									echo "DEBUG - Command Output:\n";
									print_r($output);
								}
								if (isset($output[0]) AND trim($output[0]) != '') {
									$details->subnet = trim($output[0]);
								}
								$command_string = NULL;
								$output = NULL;
								$return_var = NULL;
								
								// attempt to retrieve the Manufacturer
								$command_string = 'ipmitool -H ' . $details->man_ip_address . ' -U ' . $default->default_ipmi_username . ' -P ' . $default->default_ipmi_password . ' fru list 2>/dev/null | grep "Product Manufacturer" | cut -d":" -f2 ';
								exec($command_string, $output, $return_var);
								if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
									echo 'DEBUG - Command Executed: ' . $command_string . "\n";
									echo 'DEBUG - Return Value: ' . $return_var . "\n";
									echo "DEBUG - Command Output:\n";
									print_r($output);
								}
								if (isset($output[0]) AND trim($output[0]) != '') {
									$details->manufacturer = trim($output[0]);
								}
								$command_string = NULL;
								$output = NULL;
								$return_var = NULL;

								// attempt to retrieve the Model
								$command_string = 'ipmitool -H ' . $details->man_ip_address . ' -U ' . $default->default_ipmi_username . ' -P ' . $default->default_ipmi_password . ' fru list 2>/dev/null | grep "Product Name" | cut -d":" -f2 ';
								exec($command_string, $output, $return_var);
								if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
									echo 'DEBUG - Command Executed: ' . $command_string . "\n";
									echo 'DEBUG - Return Value: ' . $return_var . "\n";
									echo "DEBUG - Command Output:\n";
									print_r($output);
								}
								if (isset($output[0]) AND trim($output[0]) != '') {
									$details->model = trim($output[0]);
								}
								$command_string = NULL;
								$output = NULL;
								$return_var = NULL;

								// attempt to retrieve the Serial
								$command_string = 'ipmitool -H ' . $details->man_ip_address . ' -U ' . $default->default_ipmi_username . ' -P ' . $default->default_ipmi_password . ' fru list 2>/dev/null | grep "Product Serial" | cut -d":" -f2 ';
								exec($command_string, $output, $return_var);
								if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
									echo 'DEBUG - Command Executed: ' . $command_string . "\n";
									echo 'DEBUG - Return Value: ' . $return_var . "\n";
									echo "DEBUG - Command Output:\n";
									print_r($output);
								}
								if (isset($output[0]) AND trim($output[0]) != '') {
									$details->serial = trim($output[0]);
								}
								$command_string = NULL;
								$output = NULL;
								$return_var = NULL;
							}
						}
						$command_string = NULL;
						$output = NULL;
						$return_var = NULL;
						$error = "";
					}


					// remove all the NULL, FALSE AND Empty Strings but leaves 0 (zero) values
					// $details = (object) array_filter((array) $details, 'strlen' );

					if ((isset($details->snmp_oid)) AND ($details->snmp_oid > '')) {

						// we received a result from SNMP, use this data to update OR insert
						$details->last_seen_by = 'snmp';
						$details->audits_ip = '127.0.0.1';

						// new for 1.2.2 - after we get additional SNMP data, re-check if we match an existing device
						$details->system_key = $this->m_system->create_system_key($details);
						$details->system_id = $this->m_system->find_system($details);

						if (isset($details->system_id) AND $details->system_id != '') {
							// we have a system_id AND snmp details to update
							$this->m_system->update_system($details);
							$log_details = "C:discovery F:process_subnet SNMP update for $details->man_ip_address (System ID $details->system_id)";
							$this->log_event($log_details);
						} else {
							// we have a new system
							$details->system_id = $this->m_system->insert_system($details);
							$this->m_alerts->generate_alert($details->system_id, 'system', $details->system_id, 'system detected', date('Y-m-d H:i:s'));
							$log_details = "C:discovery F:process_subnet SNMP insert for $details->man_ip_address (System ID $details->system_id)"; 
							$this->log_event($log_details);
						}

						$details->timestamp = $this->m_oa_general->get_attribute('system', 'timestamp', $details->system_id);
						$details->first_timestamp = $this->m_oa_general->get_attribute('system', 'first_timestamp', $details->system_id);

						// also update the device credentials
						$credentials = new stdClass();
						$credentials->ip_address = $details->man_ip_address;
						$credentials->snmp_community = $details->snmp_community;
						$credentials->snmp_version = $details->snmp_version;
						$this->m_system->update_credentials($credentials, $details->system_id);
						unset($credentials);

						// update any network interfaces AND ip addresses retrieved by SNMP
						if (isset($network_interfaces) AND is_array($network_interfaces) AND count($network_interfaces) > 0) {
							foreach ($network_interfaces as $input) {
								$this->m_network_card->process_network_cards($input, $details);

								if (isset($input->ip_addresses) AND is_array($input->ip_addresses)) {
									foreach ($input->ip_addresses as $ip_input) {
										$ip_input = (object) $ip_input;
										$this->m_ip_address->process_addresses($ip_input, $details);
									}
								}
							}
							// finish off with updating any network IPs that don't have a matching interface
							$this->m_ip_address->update_missing_interfaces($details->system_id);
						}

						// insert any found virtual machines
						if (isset($guests) AND is_array($guests) AND count($guests) > 0) {
							foreach($guests as $guest) {
								$this->m_virtual_machine->process_vm($guest, $details);
							}
						}
						$log_details = "C:discovery F:process_subnet SNMP credential update for $details->man_ip_address (System ID $details->system_id)";
						$this->log_event($log_details);

					} else {
						// we received a result from nmap only, use this data to update OR insert
						$details->last_seen_by = 'nmap';
						if (isset($details->system_id) AND $details->system_id != '') {
							// we have a system id AND nmap details to update
							$this->m_system->update_system($details);
							$log_details = "C:discovery F:process_subnet Nmap update for $details->man_ip_address (System ID $details->system_id)"; 
							$this->log_event($log_details);
						} else {
							// we have a new system
							$details->system_id = $this->m_system->insert_system($details);
							$log_details = "C:discovery F:process_subnet Nmap insert for $details->man_ip_address (System ID " . $details->system_id . ")"; 
							$this->log_event($log_details);
							$this->m_alerts->generate_alert($details->system_id, 'system', $details->system_id, 'system detected', date('Y-m-d H:i:s'));
						}
					}

					// Insert an audit
					$this->m_sys_man_audits->insert_audit($details);

					// Update the groups
					$this->m_oa_group->update_system_groups($details);

					// We got nmap only or nmap and snmp details, either way, $details->system_id is now set
					// Output to DEBUG
					if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
						echo "DEBUG - System ID <a href='" . base_url() . "index.php/main/system_display/" . $details->system_id . "'>" . $details->system_id . "</a>\n";
					}


					// Windows WMI audit - audit_windows.vbs
					if ($details->wmi_status == "true" AND $details->windows_username > '' AND $details->windows_domain > '' AND $details->windows_password > '') {
						$log_details = "C:discovery F:process_subnet Attempt Windows audit for $details->man_ip_address"; 
						$this->log_event($log_details);



						// Auditing a Windows target device from a Linux Open-AudIT Server
						if (php_uname('s') == 'Linux') {
							$error = "";
							$command_string = 'smbclient \\\\\\\\' . $details->man_ip_address . '\\\\admin$ -U "' . str_replace("'", "", escapeshellarg($details->windows_domain)) . '\\\\' . str_replace("'", "", escapeshellarg($details->windows_username)) . '%' . str_replace("'", "", escapeshellarg($details->windows_password)) . '" -c "put ' . $filepath . '/audit_windows.vbs audit_windows.vbs" 2>&1';
							exec($command_string, $output, $return_var);
							if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
								echo 'DEBUG - Command Executed: ' . $command_string . "\n";
								echo 'DEBUG - Return Value: ' . $return_var . "\n";
								echo "DEBUG - Command Output:\n";
								print_r($output);
							}
							if ($return_var != '0') {
								$error = "C:discovery F:process_subnet SMBClient copy of audit_windows.vbs to $details->man_ip_address has failed";
								$this->log_event($error);
							} else {
								$log =   "C:discovery F:process_subnet SMBClient copy of audit_windows.vbs to $details->man_ip_address has succeeded";
								$this->log_event($log);
							}
							$command_string = NULL;
							$output = NULL;
							$return_var = NULL;

							if ($error == "") {
								$command_string = "screen -D -m /usr/local/open-audit/other/winexe-static -U " . str_replace("'", "", escapeshellarg($details->windows_domain)) . "/" . str_replace("'", "", escapeshellarg($details->windows_username)) . "%" . str_replace("'", "", escapeshellarg($details->windows_password)) . " --uninstall //" . str_replace("'", "", escapeshellarg($details->man_ip_address)) . " \"cscript c:\windows\audit_windows.vbs submit_online=y create_file=n strcomputer=" . str_replace("'", "", escapeshellarg($details->man_ip_address)) . " url=" . $url . "index.php/system/add_system debugging=3 system_id=" . $details->system_id . "\" ";

								exec($command_string, $output, $return_var);
								if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
									echo 'DEBUG - Command Executed: ' . $command_string . "\n";
									echo 'DEBUG - Return Value: ' . $return_var . "\n";
									// echo "DEBUG - Command Output:\n"; // no output because of use of 'screen' command
									// print_r($output);
								}

								if ($return_var != '0') {
									$error = "C:discovery F:process_subnet Attempting to run audit_windows.vbs on $details->man_ip_address has failed";
									$this->log_event($error);
								} else {
									$log = "C:discovery F:process_subnet Attempt to run audit_windows.vbs on $details->man_ip_address has succeeded";
									$this->log_event($log);

									// also update the device credentials
									$credentials = new stdClass();
									$credentials->ip_address = $details->man_ip_address;
									$credentials->windows_username = $details->windows_username;
									$credentials->windows_password = $details->windows_password;
									$credentials->windows_domain = $details->windows_domain;
									$this->m_system->update_credentials($credentials, $details->system_id);
									unset($credentials);
									$log_details = "C:discovery F:process_subnet Windows credential update for $details->man_ip_address (System ID $details->system_id)";
									$this->log_event($log_details);
								}
								$command_string = NULL;
								$output = NULL;
								$return_var = NULL;
							}
						}



						// Auditing a Windows target device from a Windows Open-AudIT Server
						if (php_uname('s') == 'Windows NT') {

							$log_details = "C:discovery F:process_subnet Windows audit for $details->man_ip_address (System ID $details->system_id)"; $this->log_event($log_details);

							if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
								$script_string = "$filepath\\audit_windows.vbs strcomputer=" . $details->man_ip_address . " submit_online=y create_file=n struser=" . $details->windows_domain . "\\" . $details->windows_username . " strpass=" . $details->windows_password . " url=" . $url . "index.php/system/add_system debugging=3 system_id=" . $details->system_id;
								$command_string = "%comspec% /c start /b cscript //nologo " . $script_string;
								exec($command_string, $output, $return_var);
								echo 'DEBUG - Command Executed: ' . $command_string . "\n";
								echo 'DEBUG - Return Value: ' . $return_var . "\n";
								echo "DEBUG - Command Output:\n";

								if ($return_var != '0') {
									$error = "C:discovery F:process_subnet Attempt to run audit_windows.vbs on $details->man_ip_address has failed";
									$this->log_event($error);
								} else {
									$log = "C:discovery F:process_subnet Attempt to run audit_windows.vbs on $details->man_ip_address has succeeded";
									$this->log_event($log);
									// also update the device credentials
									$credentials = new stdClass();
									$credentials->ip_address = $details->man_ip_address;
									$credentials->windows_username = $details->windows_username;
									$credentials->windows_password = $details->windows_password;
									$credentials->windows_domain = $details->windows_domain;
									$this->m_system->update_credentials($credentials, $details->system_id);
									unset($credentials);
									$log_details = "C:discovery F:process_subnet Windows credential update for $details->man_ip_address (System ID $details->system_id)";
									$this->log_event($log_details);
								}
								$output = NULL;
								$return_var = NULL;
							} else {
								$script_string = "$filepath\\audit_windows.vbs strcomputer=" . $details->man_ip_address . " submit_online=y create_file=n struser=" . $details->windows_domain . "\\" . $details->windows_username . " strpass=" . $details->windows_password . " url=" . $url . "index.php/system/add_system debugging=0  system_id=" . $details->system_id;
								$command_string = "%comspec% /c start /b cscript //nologo " . $script_string . " &";
								pclose(popen($command_string,"r"));
								// also update the device credentials
								// TODO 
								// FIXME this may cause an issue as we start the command without waiting for a result (even pass/fail).
								// If the command fails to start because of a credential mismatch, we still store the (now incorrect) credentials
								$credentials = new stdClass();
								$credentials->ip_address = $details->man_ip_address;
								$credentials->windows_username = $details->windows_username;
								$credentials->windows_password = $details->windows_password;
								$credentials->windows_domain = $details->windows_domain;
								$this->m_system->update_credentials($credentials, $details->system_id);
								unset($credentials);
								$log_details = "C:discovery F:process_subnet Windows credential update for $details->man_ip_address (System ID $details->system_id)";
								$this->log_event($log_details);
							}
							$command_string = NULL;
						}
					}

					// SSH based audit (usually Linux, Unix, OSX, AIX or ESX)
					if ($details->ssh_status == "true") {
						if ($details->ssh_username == '' OR $details->ssh_password == '') {
							$script_string = "audit_linux.sh strcomputer=" . $details->man_ip_address . " submit_online=y create_file=n struser=" . $details->ssh_username . " strpass=" . $details->ssh_password . " debugging=0";
							$log_details = "C:discovery F:process_subnet No credentials supplied for SSH audit for $details->man_ip_address (System ID $details->system_id)";
							$this->log_event($log_details);
						} else {

							if (php_uname('s') == 'Linux') {
								// Auditing a target device from a Linux Open-AudIT Server
								if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) { 
									echo "DEBUG - Attempting SSH audit.\n";
									echo "DEBUG - struser: " . $details->ssh_username . "\n";
									echo "DEBUG - strpass: " . $details->ssh_password . "\n";
								}
								$command_string = "sshpass -p " . escapeshellarg($details->ssh_password) . " ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null " . escapeshellarg($details->ssh_username) . "@" . escapeshellarg($details->man_ip_address) . " uname ";
								exec($command_string, $output, $return_var);
								if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
									echo 'DEBUG - Command Executed: ' . $command_string . "\n";
									echo 'DEBUG - Return Value: ' . $return_var . "\n";
									echo "DEBUG - Command Output:\n";
									print_r($output);
								}
								if ($return_var != '0') {
									$error = 'C:discovery F:process_subnet Audit routine for SSH audit on ' . $details->man_ip_address . ' failed to run uname on target'; 
									$this->log_event($error);
									if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
										echo "DEBUG - Running with 'ssh -v' for your inspection. Possible credential failure.\n";
										$command_string = "sshpass -p " . escapeshellarg($details->ssh_password) . " ssh -v -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null " . escapeshellarg($details->ssh_username) . "@" . escapeshellarg($details->man_ip_address) . " uname 2>&1";
										exec($command_string, $output, $return_var);
										echo 'DEBUG - Command Executed: ' . $command_string . "\n";
										echo 'DEBUG - Return Value: ' . $return_var . "\n";
										echo "DEBUG - Command Output:\n";
										print_r($output);
									}
								} else {

									// Linux, Darwin, AIX, VMKernel
									if (isset($output[0]) AND $output[0] > '') {
										$remote_os = $output[0];
									} else {
										$remote_os = "";
									}
									echo "DEBUG - Remote OS: " . $remote_os . "\n";
									$command_string = NULL;
									$output = NULL;
									$return_var = NULL;

									if (strtolower($remote_os) === 'linux') { $audit_script = 'audit_linux.sh'; }
									if (strtolower($remote_os) === 'darwin') { $audit_script = 'audit_osx.sh'; }
									if (strtolower($remote_os) === 'aix') { $audit_script = 'audit_aix.sh'; }
									if (strtolower($remote_os) === 'vmkernel') { $audit_script = 'audit_esxi.sh'; }

									if ($error == '' and $audit_script != '') {
										$error = '';
										$log_details = 'C:discovery F:process_subnet Attempting SSH audit for discovery on ' . $details->man_ip_address . ' (' . $remote_os . ')'; 
										$this->log_event($log_details);

										// Attempt to copy the audit script
										$command_string = 'sshpass -p ' . escapeshellarg($details->ssh_password) . ' scp -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ' . $filepath . '/' . $audit_script . ' ' . escapeshellarg($details->ssh_username) . '@' . escapeshellarg($details->man_ip_address) . ':/tmp/ ';
										exec($command_string, $output, $return_var);
										if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
											echo 'DEBUG - Command Executed: ' . $command_string . "\n";
											echo 'DEBUG - Return Value: ' . $return_var . "\n";
											echo "DEBUG - Command Output:\n";
											print_r($output);
										}
										if ($return_var != '0') {
											$error = 'C:discovery F:process_subnet SSH copy of ' . $audit_script . ' to ' . $details->man_ip_address . ' has failed';
											$this->log_event($error);
											exit();
										}
										$command_string = NULL;
										$output = NULL;
										$return_var = NULL;

										// Attempt to chmod the script so it's executable
										if ($error == '') {
											$command_string = "sshpass -p " . escapeshellarg($details->ssh_password) . " ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null " . escapeshellarg($details->ssh_username) . "@" . escapeshellarg($details->man_ip_address) . " chmod 777 /tmp/" . $audit_script . ' ';
											exec($command_string, $output, $return_var);
											if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
												echo 'DEBUG - Command Executed: ' . $command_string . "\n";
												echo 'DEBUG - Return Value: ' . $return_var . "\n";
												echo "DEBUG - Command Output:\n";
												print_r($output);
											}
											if ($return_var != '0') { 
												$error = 'C:discovery F:process_subnet SSH chmod command for ' . $remote_os . 'audit script on ' . $details->man_ip_address . ' failed';
												$this->log_event($error);
												exit();
											}
											$command_string = NULL;
											$output = NULL;
											$return_var = NULL;
										}

										// Attempt to determine if SUDO is present on target system
										if ($error == '' AND strtolower($details->ssh_username) != 'root') {
											$command_string = 'sshpass -p ' . escapeshellarg($details->ssh_password) . ' ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ' . escapeshellarg($details->ssh_username) . '@' . escapeshellarg($details->man_ip_address) . ' which sudo ';
											exec($command_string, $output, $return_var);
											if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
												echo 'DEBUG - Command Executed: ' . $command_string . "\n";
												echo 'DEBUG - Return Value: ' . $return_var . "\n";
												echo "DEBUG - Command Output:\n";
												print_r($output);
											}
											if ($return_var != '0') {
												$log = 'C:discovery F:process_subnet SSH which sudo command for ' . $remote_os . ' audit script on ' . $details->man_ip_address . ' failed';
												$this->log_event($log); 
											}
											if (isset($output[0]) AND $output[0] != '') {
												$sudo = $output[0];
											} else {
												$sudo = '';
											}
											$command_string = NULL;
											$output = NULL;
											$return_var = NULL;
										} else {
											$sudo = '';
										}

										// Attempt to run the audit script
										if ($error == '') {
											if (strtolower($remote_os) != 'vmkernel') {
												// Exclude VMware ESX as it does not have a usable wget to send post-data back to Open-AudIT
												if ($sudo != '' AND $details->ssh_username != 'root') {
													$command_string = 'sshpass -p ' . escapeshellarg($details->ssh_password) . ' ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ' . escapeshellarg($details->ssh_username) . '@' . escapeshellarg($details->man_ip_address) . ' "echo ' . escapeshellarg($details->ssh_password) . ' | ' . $sudo . ' -S /tmp/' . $audit_script . ' submit_online=y create_file=n url=' . $url . 'index.php/system/add_system debugging=1 system_id=' . $details->system_id . '" ';
													@exec($command_string, $output, $return_var);
													if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
														echo 'DEBUG - Command Executed: ' . $command_string . "\n";
														echo 'DEBUG - Return Value: ' . $return_var . "\n";
														echo "DEBUG - Command Output:\n";
														print_r($output);
													}

													if ($return_var != '0') {
														$error = 'C:discovery F:process_subnet SSH audit command for ' . $remote_os . ' audit using sudo on ' . $details->man_ip_address . ' failed. Attempting to run without sudo.'; 
														$this->log_event($error);
														$command_string = 'sshpass -p ' . escapeshellarg($details->ssh_password) . ' ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ' . escapeshellarg($details->ssh_username) . '@' . escapeshellarg($details->man_ip_address) . ' "/tmp/' . $audit_script . ' submit_online=y create_file=n url=' . $url . 'index.php/system/add_system debugging=3 system_id=' . $details->system_id . '" ';
														@exec($command_string, $output, $return_var);
														if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
															echo 'DEBUG - Command Executed: ' . $command_string . "\n";
															echo 'DEBUG - Return Value: ' . $return_var . "\n";
															echo "DEBUG - Command Output:\n";
															print_r($output);
														}
														if ($return_var != '0') {
															$error = 'C:discovery F:process_subnet SSH audit command for ' . $remote_os . ' audit not using sudo on ' . $details->man_ip_address . ' failed';
															$this->log_event($error);
															exit();
														} else {
															$error = '';
														}
													}
													$command_string = NULL;
													$output = NULL;
													$return_var = NULL;
												} else {
													$command_string = 'sshpass -p ' . escapeshellarg($details->ssh_password) . ' ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ' . escapeshellarg($details->ssh_username) . '@' . escapeshellarg($details->man_ip_address) . ' "/tmp/' . $audit_script . ' submit_online=y create_file=n url=' . $url . 'index.php/system/add_system debugging=1 system_id=' . $details->system_id . '" 2>/dev/null';
													@exec($command_string, $output, $return_var);
													if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
														echo 'DEBUG - Command Executed: ' . $command_string . "\n";
														echo 'DEBUG - Return Value: ' . $return_var . "\n";
														echo "DEBUG - Command Output:\n";
														print_r($output);
													}
													if ($return_var != '0') {
														$error = 'C:discovery F:process_subnet SSH audit command for ' . $remote_os . ' audit script on ' . $details->man_ip_address . ' failed'; 
														$this->log_event($error);
													} 
												}
											} else {

												# ESXi
												$command_string = 'sshpass -p ' . escapeshellarg($details->ssh_password) . ' ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ' . escapeshellarg($details->ssh_username) . '@' . escapeshellarg($details->man_ip_address) . ' "/tmp/' . $audit_script . ' submit_online=y create_file=n debugging=0 echo_output=y system_id=' . $details->system_id . '" 2>/dev/null';
												@exec($command_string, $output, $return_var);
												if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
													echo 'DEBUG - Command Executed: ' . $command_string . "\n";
													echo 'DEBUG - Return Value: ' . $return_var . "\n";
													if ($return_var != '0') {
														echo "DEBUG - Command Output:\n";
														$output_new = str_replace("<", "&lt;", $output);
														print_r($output_new);
													}
												}

												if ($return_var != '0') {
													$error = 'C:discovery F:process_subnet SSH audit command for ESXi audit script on ' . $details->man_ip_address . ' failed'; 
													$this->log_event($error);
												} else {
													$script_result = '';
													foreach ($output as $line) {
														$script_result .= $line . "\n";
													}
													$script_result = preg_replace('/\s+/', ' ',$script_result);
													$script_result = str_replace("> <", "><", $script_result);
													$esx_input = trim($script_result);
													try {
														$esx_xml = new SimpleXMLElement($esx_input);
													} catch (Exception $error) {
														// not a valid XML string
														$log_details = 'C:discovery F:process_subnet Invalid XML input for ESX audit script';
														$this->log_event($log_details);
														exit;
													}

													$count = 0;
													$this->load->model('m_processor');
													$this->load->model('m_bios');
													$this->load->model('m_memory');
													$this->load->model('m_motherboard');
													$this->load->model('m_video');
													$this->load->model('m_software');

													foreach ($esx_xml->children() as $child) {
														if ($child->getName() === 'sys') {
															$esx_details = (object) $esx_xml->sys;
															if (!isset($esx_details->man_ip_address) or $esx_details->man_ip_address == '') {
																$esx_details->man_ip_address = $details->man_ip_address;
															}
															$esx_details->system_key = $this->m_system->create_system_key($esx_details);
															$esx_details->system_id = $this->m_system->find_system($esx_details);
															$esx_details->timestamp = $details->timestamp;

															if (isset($esx_details->system_id) AND $esx_details->system_id != '') {
																// we have an existing device
																$esx_details->original_last_seen_by = $this->m_oa_general->get_attribute('system', 'last_seen_by', $esx_details->system_id);
																$esx_details->original_timestamp = $this->m_oa_general->get_attribute('system', 'timestamp', $esx_details->system_id);
																$this->m_system->update_system($esx_details);
																$log_details = "C:discovery F:process_subnet ESX update for $esx_details->man_ip_address (System ID $esx_details->system_id)";
																$this->log_event($log_details);
															} else {
																// we have a new system
																$esx_details->system_id = $this->m_system->insert_system($esx_details);
																$log_details = "C:discovery F:process_subnet ESX insert for $esx_details->man_ip_address (System ID $esx_details->system_id)"; 
																$this->log_event($log_details);
																$this->m_alerts->generate_alert($details->system_id, 'system', $esx_details->system_id, 'system detected', date('Y-m-d H:i:s'));
															}
															if (!isset($esx_details->audits_ip)) {
																$esx_details->audits_ip = $details->audits_ip;
															}
															$this->m_sys_man_audits->insert_audit($esx_details);
														}
													}
													foreach ($esx_xml->children() as $child) {
														if ($child->getName() === 'bios') {
															$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
															$this->m_bios->process_bios($esx_xml->bios, $esx_details);
														}
														if ($child->getName() === 'memory') {
															$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
															foreach ($esx_xml->memory->slot as $input) {
																$this->m_memory->process_memory($input, $esx_details);
															}
														}
														if ($child->getName() === 'motherboard') {
															$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
															$this->m_motherboard->process_motherboard($esx_xml->motherboard, $esx_details);
														}
														if ($child->getName() === 'network_cards') {
															$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
															foreach ($esx_xml->network_cards->network_card as $input) {
																$this->m_network_card->process_network_cards($input, $esx_details);
															}
														}
														if ($child->getName() === 'addresses') {
															$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
															foreach ($esx_xml->addresses->ip_address as $input) {
																$this->m_ip_address->process_addresses($input, $esx_details);
															}
														}
														if ($child->getName() === 'processor') {
															$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
															$this->m_processor->process_processor($esx_xml->processor, $esx_details);
														}
														if ($child->getName() === 'software') {
															$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
															$this->m_software->process_software($esx_xml->software, $esx_details);
														}
														if ($child->getName() === 'video_cards') {
															$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
															foreach ($esx_xml->video_cards->video_card as $input) {
																$this->m_video->process_video_cards($input, $esx_details);
															}
														}
														if ($child->getName() === 'guests') {
															$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
															foreach($esx_xml->guests->guest as $input) {
																$this->m_virtual_machine->process_vm($input, $details);
															}
														}
													}
												}
											} // end of ESXi
										} // end of run audit script

										if ($error == '') {
											$log_details = 'C:discovery F:process_subnet Successful SSH audit for discovery on ' . $details->man_ip_address . ' (' . $remote_os . ')';
											$this->log_event($log_details);
											// also update the device credentials
											$credentials = new stdClass();
											$credentials->ip_address = $details->man_ip_address;
											$credentials->ssh_username = $details->ssh_username;
											$credentials->ssh_password = $details->ssh_password;
											$this->m_system->update_credentials($credentials, $details->system_id);
											unset($credentials);
											$log_details = 'C:discovery F:process_subnet SSH credential update for ' . $details->man_ip_address . ' (System ID ' . $details->system_id . ')';
											$this->log_event($log_details);
										} 
									} // End of if error
								} // end of uname attempt
							} // Close Linux server

							if (php_uname('s') == 'Windows NT') {
								// Auditing a unix based target device from a Windows Open-AudIT Server
								$error = '';
								$audit_script = '';
								$command_string = "echo y | $filepath\\plink.exe -ssh " . $details->ssh_username . "@" . $details->man_ip_address . " -pw " . $details->ssh_password . " exit";
								exec($command_string, $output, $return_var);
								if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
									echo 'DEBUG - Command Executed: ' . $command_string . "\n";
									echo 'DEBUG - Return Value: ' . $return_var . "\n";
									if ($return_var != '0') {
										echo "DEBUG - Command Output:\n";
										print_r($output);
									}
								}
								if ($return_var != '0') {
									$error = 'C:discovery F:process_subnet Audit routine for SSH audit on ' . $details->man_ip_address . ' failed to store SSH sig'; 
									$this->log_event($error);
								} 
								$command_string = NULL;
								$output = NULL;
								$return_var = NULL;
								$remote_os = "";

								if ($error == '') {
									$command_string = "$filepath\\plink.exe -ssh " . $details->ssh_username . "@" . $details->man_ip_address . " -pw " . $details->ssh_password . " uname";
									exec($command_string, $output, $return_var);
									if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
										echo 'DEBUG - Command Executed: ' . $command_string . "\n";
										echo 'DEBUG - Return Value: ' . $return_var . "\n";
										echo "DEBUG - Command Output:\n";
										print_r($output);
									}
									if ($return_var != '0') {
										$error = 'C:discovery F:process_subnet Audit routine for SSH audit on ' . $details->man_ip_address . ' failed to run uname on target'; 
										$this->log_event($error);
									} 
									// Linux, Darwin, ESX, AIX
									if (isset($output[0]) AND $output[0] > '') {
										$remote_os = $output[0];
									} else {
										$remote_os = "";
									}
									$command_string = NULL;
									$return_var = NULL;
									$output = NULL;
								}

								// which script do we need to use
								if (strtolower($remote_os) === 'linux') { $audit_script = 'audit_linux.sh'; }
								if (strtolower($remote_os) === 'darwin') { $audit_script = 'audit_osx.sh'; }
								if (strtolower($remote_os) === 'aix') { $audit_script = 'audit_aix.sh'; }
								if (strtolower($remote_os) === 'vmkernel') { $audit_script = 'audit_esxi.sh'; }

								if ($error == '' and $audit_script != '') {
									$log_details = "C:discovery F:process_subnet Attempting SSH audit for discovery on $details->man_ip_address ($remote_os)"; 
									$this->log_event($log_details);
									// Attempt to copy the audit script
									$command_string = "$filepath\\pscp.exe -pw " . $details->ssh_password . " $filepath\\$audit_script " . $details->ssh_username . "@" . $details->man_ip_address . ":/tmp/";
									exec($command_string, $output, $return_var);
									if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
										echo 'DEBUG - Command Executed: ' . $command_string . "\n";
										echo 'DEBUG - Return Value: ' . $return_var . "\n";
										echo "DEBUG - Command Output:\n";
										print_r($output);
									}
									if ($return_var != '0') {
										$error = 'C:discovery F:process_subnet SSH copy of ' . $audit_script . ' to ' . $details->man_ip_address . ' has failed'; 
										$this->log_event($error);
									}
									$command_string = NULL;
									$output = NULL;
									$return_var = NULL;
								}

								// Attempt to chmod the script so it's executable
								if ($error == '' and $audit_script != '') {
									$command_string = "$filepath\\plink.exe -pw " . $details->ssh_password . " " . $details->ssh_username . "@" . $details->man_ip_address . " chmod 777 /tmp/$audit_script";
									exec($command_string, $output, $return_var);
									if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
										echo 'DEBUG - Command Executed: ' . $command_string . "\n";
										echo 'DEBUG - Return Value: ' . $return_var . "\n";
										echo "DEBUG - Command Output:\n";
										print_r($output);
									}
									if ($return_var != '0') {
										$error = 'C:discovery F:process_subnet SSH chmod command for /tmp/' . $audit_script . ' audit script on ' . $details->man_ip_address . ' failed'; 
										$this->log_event($error);
									}
									$command_string = NULL;
									$output = NULL;
									$return_var = NULL;
								}

								if ($audit_script != 'audit_esxi.sh') {
									$sudo = '';
									// Attempt to determine if SUDO is present on target system
									if ($error == '' and $audit_script != '' and $details->ssh_username != 'root') {
										$command_string = "$filepath\\plink.exe -pw " . $details->ssh_password . " " . $details->ssh_username . "@" . $details->man_ip_address . " which sudo";
										exec($command_string, $output, $return_var);
										if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
											echo 'DEBUG - Command Executed: ' . $command_string . "\n";
											echo 'DEBUG - Return Value: ' . $return_var . "\n";
											echo "DEBUG - Command Output:\n";
											print_r($output);
										}
										if ($return_var != '0') {
											$log = "SSH which sudo command for $remote_os audit script on $details->man_ip_address failed"; $this->log_event($error);
											$this->log_event($error);
										}
										if (isset($output[0]) AND $output[0] > '') {
											$sudo = $output[0];
										} else {
											$sudo = "";
										}
										$command_string = NULL;
										$output = NULL;
										$return_var = NULL;
									}

									// Attempt to run the audit script
									if ($error == '' and $audit_script != '') {
										if ($sudo > "" AND $details->ssh_username != 'root') {
											$command_string = "$filepath\\plink.exe -pw " . $details->ssh_password . " " . $details->ssh_username . "@" . $details->man_ip_address . " \"echo " . $details->ssh_password . " | $sudo -S /tmp/" . $audit_script . " submit_online=y create_file=n url=" . $url . "index.php/system/add_system debugging=1 system_id=" . $details->system_id . "\"";
											@exec($command_string, $output, $return_var);
											if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
												echo 'DEBUG - Command Executed: ' . $command_string . "\n";
												echo 'DEBUG - Return Value: ' . $return_var . "\n";
												echo "DEBUG - Command Output:\n";
												print_r($output);
											}
											if ($return_var != '0') {
												$error = 'SSH audit command for ' . $audit_script . ' audit script on ' . $details->man_ip_address . ' failed'; 
												$this->log_event($error);
												$command_string = $filepath . '\\plink.exe -pw ' . $details->ssh_password . ' ' . $details->ssh_username . '@' . $details->man_ip_address . " \"/tmp/" . $audit_script . " submit_online=y create_file=n url=" . $url . "index.php/system/add_system debugging=1 system_id=" . $details->system_id . "\"";
												@exec($command_string, $output, $return_var);
												if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
													echo 'DEBUG - Command Executed: ' . $command_string . "\n";
													echo 'DEBUG - Return Value: ' . $return_var . "\n";
													echo "DEBUG - Command Output:\n";
													print_r($output);
												}
												if ($return_var != '0') {
													$error = 'SSH audit command for ' . $audit_script . ' script on ' . $details->man_ip_address . ' running without sudo has failed';
													$this->log_event($error);
												}
											} 
											$command_string = NULL;
											$output = NULL;
											$return_var = NULL;
										} else {
											$command_string = "$filepath\\plink.exe -pw " . $details->ssh_password . " " . $details->ssh_username . "@" . $details->man_ip_address . " \"/tmp/" . $audit_script . " submit_online=y create_file=n url=" . $url . "index.php/system/add_system debugging=1 system_id=" . $details->system_id . "\"";
											@exec($command_string, $output, $return_var);
											if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
												echo 'DEBUG - Command Executed: ' . $command_string . "\n";
												echo 'DEBUG - Return Value: ' . $return_var . "\n";
												echo "DEBUG - Command Output:\n";
												print_r($output);
											}
											if ($return_var != '0') {
												if ($details->ssh_username == 'root') {
													$error = 'SSH audit command for ' . $remote_os . ' ' . $audit_script . ' as root on ' . $details->man_ip_address . ' failed';
												} else {
													$error = 'SSH audit command for ' . $remote_os . ' ' . $audit_script . ' not as root and not using sudo on ' . $details->man_ip_address . ' failed';
												} 
												$this->log_event($error);
												exit();
											} 
										} // end of use sudo / root
									}
								} else {
									// Audit ESXi
									$command_string = "$filepath\\plink.exe -pw " . $details->ssh_password . " " . $details->ssh_username . "@" . $details->man_ip_address . " \"/tmp/" . $audit_script . " submit_online=n create_file=n debugging=0 echo_output=y url=" . $url . "index.php/system/add_system system_id=" . $details->system_id . "\"";
									# this is the linux command # $command_string = 'sshpass -p ' . escapeshellarg($details->ssh_password) . ' ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ' . escapeshellarg($details->ssh_username) . '@' . escapeshellarg($details->man_ip_address) . ' "/tmp/' . $audit_script . ' submit_online=y create_file=n debugging=0 echo_output=y system_id=' . $details->system_id . '" 2>/dev/null';
									@exec($command_string, $output, $return_var);
									if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
										echo 'DEBUG - Command Executed: ' . $command_string . "\n";
										echo 'DEBUG - Return Value: ' . $return_var . "\n";
										if ($return_var != '0') {
											echo "DEBUG - Command Output:\n";
											$output_new = str_replace("<", "&lt;", $output);
											print_r($output_new);
										}
									}
									if ($return_var != '0') {
										$error = 'C:discovery F:process_subnet SSH audit command for ESXi audit script on ' . $details->man_ip_address . ' failed'; 
										$this->log_event($error);
									} else {
										$script_result = '';
										foreach ($output as $line) {
											$script_result .= $line . "\n";
										}
										$script_result = preg_replace('/\s+/', ' ',$script_result);
										$script_result = str_replace("> <", "><", $script_result);
										$esx_input = trim($script_result);
										try {
											$esx_xml = new SimpleXMLElement($esx_input);
										} catch (Exception $error) {
											// not a valid XML string
											$log_details = 'C:discovery F:process_subnet Invalid XML input for ESX audit script';
											$this->log_event($log_details);
											exit;
										}
										$count = 0;
										$this->load->model('m_processor');
										$this->load->model('m_bios');
										$this->load->model('m_memory');
										$this->load->model('m_motherboard');
										$this->load->model('m_video');
										$this->load->model('m_software');

										foreach ($esx_xml->children() as $child) {
											if ($child->getName() === 'sys') {
												$esx_details = (object) $esx_xml->sys;
												$esx_details->system_key = $this->m_system->create_system_key($esx_details);
												$esx_details->system_id = $this->m_system->find_system($esx_details);
												$esx_details->timestamp = $details->timestamp;
												if ((!isset($esx_details->man_ip_address) OR $esx_details->man_ip_address == '') AND 
													isset($details->man_ip_address) AND $details->man_ip_address != '') {
													$esx_details->man_ip_address = $details->man_ip_address;
												}
												if (isset($esx_details->system_id) AND $esx_details->system_id != '') {
													// we have an existing device
													$esx_details->original_last_seen_by = $this->m_oa_general->get_attribute('system', 'last_seen_by', $esx_details->system_id);
													$esx_details->original_timestamp = $this->m_oa_general->get_attribute('system', 'timestamp', $esx_details->system_id);
													$this->m_system->update_system($esx_details);
													$log_details = "C:discovery F:process_subnet ESX update for $esx_details->man_ip_address (System ID $esx_details->system_id)";
													$this->log_event($log_details);
												} else {
													// we have a new system
													$esx_details->system_id = $this->m_system->insert_system($esx_details);
													$log_details = "C:discovery F:process_subnet ESX insert for $esx_details->man_ip_address (System ID $esx_details->system_id)"; 
													$this->log_event($log_details);
													$this->m_alerts->generate_alert($details->system_id, 'system', $esx_details->system_id, 'system detected', date('Y-m-d H:i:s'));
												}
												if (!isset($esx_details->audits_ip)) {
													$esx_details->audits_ip = $details->audits_ip;
												}
												$this->m_sys_man_audits->insert_audit($esx_details);
											}
										}
										foreach ($esx_xml->children() as $child) {
											if ($child->getName() === 'bios') {
												$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
												$this->m_bios->process_bios($esx_xml->bios, $esx_details);
											}
											if ($child->getName() === 'memory') {
												$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
												foreach ($esx_xml->memory->slot as $input) {
													$this->m_memory->process_memory($input, $esx_details);
												}
											}
											if ($child->getName() === 'motherboard') {
												$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
												$this->m_motherboard->process_motherboard($esx_xml->motherboard, $esx_details);
											}
											if ($child->getName() === 'network_cards') {
												$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
												foreach ($esx_xml->network_cards->network_card as $input) {
													$this->m_network_card->process_network_cards($input, $esx_details);
												}
											}
											if ($child->getName() === 'addresses') {
												$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
												foreach ($esx_xml->addresses->ip_address as $input) {
													$this->m_ip_address->process_addresses($input, $esx_details);
												}
											}
											if ($child->getName() === 'processor') {
												$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
												$this->m_processor->process_processor($esx_xml->processor, $esx_details);
											}
											if ($child->getName() === 'software') {
												$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
												$this->m_software->process_software($esx_xml->software, $esx_details);
											}
											if ($child->getName() === 'video_cards') {
												$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
												foreach ($esx_xml->video_cards->video_card as $input) {
													$this->m_video->process_video_cards($input, $esx_details);
												}
											}
											if ($child->getName() === 'guests') {
												$this->m_sys_man_audits->update_audit($esx_details, $child->getName());
												foreach($esx_xml->guests->guest as $input) {
													$this->m_virtual_machine->process_vm($input, $details);
												}
											}
										}
									} // end of ESXi script
									if ($error == '') {
										$log_details = "C:discovery F:process_subnet Successful SSH audit for discovery on $details->man_ip_address ($remote_os)";
										$this->log_event($log_details);
										// also update the device credentials
										$credentials = new stdClass();
										$credentials->ip_address = $details->man_ip_address;
										$credentials->ssh_username = $details->ssh_username;
										$credentials->ssh_password = $details->ssh_password;
										$this->m_system->update_credentials($credentials, $details->system_id);
										unset($credentials);
										$log_details = "C:discovery F:process_subnet SSH credential update for $details->man_ip_address (System ID $details->system_id)";
										$this->log_event($log_details);
									}
								} // End of remote OS == Linux, OSX or ESX
							} // close Windows server
						} // close SSH user AND password
					} // close ssh_status
					$log = "C:discovery F:process_subnet Completed processing $details->man_ip_address (System ID $details->system_id)"; $this->log_event($log);
				} // close the device / complete switch
				unset($details);
			} // close for each device in XML
		} // close for form submission
	} // close function

	public function ip_address_from_db($ip) {
		$ip_pre = $ip;
		if (($ip <> '') AND (!(is_NULL($ip)))){
			$myip = explode(".",$ip);
			$myip[0] = ltrim($myip[0], "0");
			if ($myip[0] == "") { $myip[0] = "0"; }
			if(isset($myip[1])) $myip[1] = ltrim($myip[1], "0");
			if (!isset($myip[1]) OR $myip[1] == "") { $myip[1] = "0"; }
			if(isset($myip[2])) $myip[2] = ltrim($myip[2], "0");
			if (!isset($myip[2]) OR $myip[2] == "") { $myip[2] = "0"; }
			if(isset($myip[3])) $myip[3] = ltrim($myip[3], "0");
			if (!isset($myip[3]) OR $myip[3] == "") { $myip[3] = "0"; }
			$ip = $myip[0] . "." . $myip[1] . "." . $myip[2] . "." . $myip[3];
		} else {
			$ip = " Not-Networked";
		}
		return $ip;
	}

	public function ip_address_to_db($ip) {
		if (($ip <> '') AND (!(is_NULL($ip))) AND (substr_count($ip, '.') == 3)) {
			$myip = explode(".",$ip);
			$myip[0] = mb_substr("000" . $myip[0], -3);
			$myip[1] = mb_substr("000" . $myip[1], -3);
			$myip[2] = mb_substr("000" . $myip[2], -3);
			$myip[3] = mb_substr("000" . $myip[3], -3);
			$ip_post = $myip[0] . "." . $myip[1] . "." . $myip[2] . "." . $myip[3];
		} else {
			$ip_post = "000.000.000.000";
		}
		return $ip_post;
	}

	public function log_event($log_details, $display='y')
	{
		// setup the log file
		if ((php_uname('s') == 'Linux') OR (php_uname('s') == 'Darwin')) {
			$file = "/usr/local/open-audit/other/open-audit.log";
		} else {
			$file = "c:\\xampplite\\open-audit\\other\\open-audit.log";
		}
		$log_timestamp = date("M d H:i:s");
		$log_hostname = php_uname('n');
		$log_pid = getmypid();
		$log_line = $log_timestamp . " " . $log_hostname . " " . $log_pid . " " . $log_details . "." . PHP_EOL;
		$handle = fopen($file, "a");
		fwrite($handle, $log_line);
		fclose($handle);
		if ($display != 'n') {
			if (isset($_POST['debug']) AND ((isset($loggedin)) OR ($this->session->userdata('logged_in') == true))) {
				echo "LOG   - " . $log_line;
			}
		}
	}

}
