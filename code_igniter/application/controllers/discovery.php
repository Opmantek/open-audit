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
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class discovery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_system");
        # No need for "user" to be logged in
        # Have to be able to submit systems via the discovery script
        $this->data['title'] = 'Open-AudIT';
        $this->load->library('session');
        $loggedin = @$this->session->userdata('logged_in');
    }

    public function index()
    {
        $this->load->view('v_system_add', $this->data);
    }

    public function discover_active_directory()
    {
        $this->load->helper('url');
        # only Admin users can access this function
        # NOTE - because we're not using the My_Controller, we have to do a bit of manual setup
        if ($this->session->userdata('user_admin') != 'y') {
            if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                redirect('login/index');
            }
        } else {
            $this->data['user_admin'] = 'y';
            $this->load->model("m_oa_config");
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

        if (!isset($_POST['submit'])) {
            # show the form to accept scan details
            $this->data['type'] = $this->uri->segment(3);
            $this->data['warning'] = '';
            $this->data['include'] = "v_discover_active_directory";
            $this->data['sortcolumn'] = '1';
            $this->data['heading'] = 'Active Directory Discovery';
            $this->load->view('v_template', $this->data);
        } else {
            if (isset($_POST['debug']) and ((isset($loggedin)) or ($this->session->userdata('logged_in') == true))) {
                echo "<pre>\n";
            }
            # run the audit_domain script
            if ((isset($_POST['server']) and $_POST['server'] > '') and
            (isset($_POST['user']) and $_POST['user'] > '') and
            (isset($_POST['password']) and $_POST['password'] > '') and
            (isset($_POST['domain']) and $_POST['domain'] > '')) {
                $error = "";
                $log = "C:discovery F:discover_active_directory U:" . $this->data['user_full_name'] . " Discovery AD submitted for " . $_POST['domain'];
                $this->log_event($log);
                $i = explode('/', base_url());
                $url = str_replace($i[2], $_POST['network_address'], base_url()) . "index.php/system";
            } else {
                $error = "C:discovery F:discover_active_directory U:" . $this->data['user_full_name'] . " Discovery AD incomplete credentials.";
                $this->log_event($log);
                $url = "";
            }

            if ((php_uname('s') == 'Windows NT') and ($error == '')) {
                # Windows host - start the script locally
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "\\open-audit\\other";
                $script_string = "$filepath\\discover_domain.vbs local_domain=LDAP://" . $_POST['domain'] . " number_of_audits=" . $_POST['number_of_audits'] . " script_name=$filepath\\audit_windows.vbs url=" . $url . " struser=" . $details->windows_domain . "\\" . $details->windows_username . " strpass=" . $details->windows_password . " url=" . $url . "index.php/system/add_system debugging=0";
                $log_details = "C:discovery F:process_subnet Windows audit for $details->man_ip_address (System ID $details->system_id)";
                $this->log_event($log_details);
                $command_string = "%comspec% /c start /b cscript //nologo " . $script_string . " &";

                if (isset($_POST['debug']) and ((isset($loggedin)) or ($this->session->userdata('logged_in') == true))) {
                    echo "\nCommand: $command_string\n\n";
                    exec($command_string, $output, $return_var);
                    echo "Return Code: $return_var (0 indicates success).\nOutput of the command (as an array):\n";
                    print_r($output);
                    if ($return_var != '0') {
                        $error = "C:discovery F:process_subnet Attempt to run discover_domain.vbs on " . $_POST['server'] . " has failed";
                        $this->log_event($error);
                    } else {
                        $log = "C:discovery F:process_subnet Attempt to run discover_domain.vbs on " . $_POST['server'] . " has succeeded";
                        $this->log_event($log);
                    }
                    $output = null;
                    $return_var = null;
                } else {
                    pclose(popen($command_string, "r"));
                }
                $command_string = null;
            }

            if ((php_uname('s') == 'Linux' or php_uname('s') == "Darwin") and ($error == '')) {
                # linux or OSX host - copy the script to the DC and start it
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "/open-audit/other";

                # copy the domain audit script
                if ($error == '') {
                    #$command_string = "$filepath/smbclient \\\\\\\\" . $_POST['server'] . "\\\\admin$ -U \"" . $_POST['domain'] . "\\" . $_POST['user'] . "%" . $_POST['password'] . "\" -c \"put $filepath/discover_domain.vbs discover_domain.vbs\"";
                    $command_string = "smbclient \\\\\\\\" . $_POST['server'] . "\\\\admin$ -U \"" . $_POST['domain'] . "\\" . $_POST['user'] . "%" . $_POST['password'] . "\" -c \"put $filepath/discover_domain.vbs discover_domain.vbs\"";
                    exec($command_string, $output, $return_var);
                    if (isset($_POST['debug']) and ((isset($loggedin)) or ($this->session->userdata('logged_in') == true))) {
                        echo "\nCommand: $command_string\n\n";
                        echo "Return Code: $return_var (0 indicates success).\nOutput of the command (as an array):\n";
                        print_r($output);
                    }
                    if ($return_var != '0') {
                        $error = "C:discovery F:process_subnet SMBClient copy of audit_domain.vbs to " . $_POST['server'] . " has failed";
                        $this->log_event($error);
                    } else {
                        $log = "C:discovery F:process_subnet SMBClient copy of audit_domain.vbs to " . $_POST['server'] . " has succeeded";
                        $this->log_event($log);
                    }
                    $command_string = null;
                    $output = null;
                    $return_var = null;
                }

                # copy the windows audit script
                if ($error == '') {
                    #$command_string = "$filepath/smbclient \\\\\\\\" . $_POST['server'] . "\\\\admin$ -U \"" . $_POST['domain'] . "\\" . $_POST['user'] . "%" . $_POST['password'] . "\" -c \"put $filepath/audit_windows.vbs audit_windows.vbs\"";
                    $command_string = "smbclient \\\\\\\\" . $_POST['server'] . "\\\\admin$ -U \"" . $_POST['domain'] . "\\" . $_POST['user'] . "%" . $_POST['password'] . "\" -c \"put $filepath/audit_windows.vbs audit_windows.vbs\"";
                    exec($command_string, $output, $return_var);
                    if (isset($_POST['debug']) and ((isset($loggedin)) or ($this->session->userdata('logged_in') == true))) {
                        echo "\nCommand: $command_string\n\n";
                        echo "Return Code: $return_var (0 indicates success).\nOutput of the command (as an array):\n";
                        print_r($output);
                    }
                    if ($return_var != '0') {
                        $error = "C:discovery F:process_subnet SMBClient copy of audit_windows.vbs to " . $_POST['server'] . " has failed";
                        $this->log_event($error);
                    } else {
                        $log = "C:discovery F:process_subnet SMBClient copy of audit_windows.vbs to " . $_POST['server'] . " has succeeded";
                        $this->log_event($log);
                    }
                    $command_string = null;
                    $output = null;
                    $return_var = null;
                }

                # start the domain audit
                if ($error == "") {
                    #$command_string = "screen -D -m $filepath/winexe -U " . $_POST['domain'] . "/" . $_POST['user'] . "%" . $_POST['password'] . " --uninstall //" . $_POST['server'] . " \"cscript c:\windows\discover_domain.vbs local_domain=LDAP://" . $_POST['domain'] . " number_of_audits=" . $_POST['number_of_audits'] . " script_name=c:\windows\audit_windows.vbs url=" . $url . " debugging=0 struser=" . $_POST['domain'] . "\\" . $_POST['user'] . " strpass=" . $_POST['password'] . " \" ";
                    $command_string = "screen -D -m winexe -U " . $_POST['domain'] . "/" . $_POST['user'] . "%" . $_POST['password'] . " --uninstall //" . $_POST['server'] . " \"cscript c:\windows\discover_domain.vbs local_domain=LDAP://" . $_POST['domain'] . " number_of_audits=" . $_POST['number_of_audits'] . " script_name=c:\windows\audit_windows.vbs url=" . $url . " debugging=0 struser=" . $_POST['domain'] . "\\" . $_POST['user'] . " strpass=" . $_POST['password'] . " \" ";
                    exec($command_string, $output, $return_var);
                    if (isset($_POST['debug']) and ((isset($loggedin)) or ($this->session->userdata('logged_in') == true))) {
                        echo "\nCommand: $command_string\n\n";
                        echo "Return Code: $return_var (0 indicates success).\nOutput of the command (as an array):\n";
                        print_r($output);
                    }
                    if ($return_var != '0') {
                        $error = "C:discovery F:process_subnet Attempt to run audit_domain.vbs on " . $_POST['server'] . " has failed";
                        $this->log_event($error);
                    } else {
                        $log = "C:discovery F:process_subnet Attempt to run audit_domain.vbs on " . $_POST['server'] . " has succeeded";
                        $this->log_event($log);
                    }
                    $command_string = null;
                    $output = null;
                    $return_var = null;
                }

            } // end of Linux domain audit
            if (isset($_POST['debug']) and ((isset($loggedin)) or ($this->session->userdata('logged_in') == true))) {
                # do not redirect
            } else {
                redirect('admin/view_log');
            }
        } // end of submit / not submit
    }
























    public function discover_subnet()
    {
        $this->load->helper('url');

        # Only Admin users can access this function
        # NOTE - because we're not using the My_Controller, we have to do a bit of manual setup
        if ($this->session->userdata('user_admin') != 'y') {
            if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                redirect('login/index');
            }
        } else {
            $this->data['user_admin'] = 'y';
            $this->load->model("m_oa_config");
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
        $this->load->model("m_system");
        $this->load->model("m_oa_general");
        if (!isset($_POST['submit'])) {
            # show the form to accept scan details
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
            if ($this->uri->segment(4) and is_numeric($this->uri->segment(4))) {
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
            # process the scan details and call the discovery script

            $return_var = "";
            $output = "";

            if (isset($_POST['debug']) and ((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                echo "<pre>\n";
            }


            $credentials = new stdClass();

            # create a network group if provided a subnet that includes a slash in the string AND
            # auto create network is set in the config to 'y'
            if (isset($_POST['subnet']) and $_POST['subnet'] > "") {
                $subnet = $_POST['subnet'];
                $credentials->man_ip_address = $_POST['subnet'];
            } else {
                $subnet = "";
            }

            $log = "C:discovery F:discover_subnet U:" . $this->data['user_full_name'] . " Discovery submitted for $subnet"; $this->log_event($log);

            # we encode the supplied credentials and pass them to the script
            # the script will simply pass them back (still encoded) with each device result
            $this->load->library('encrypt');

            if (isset($_POST['snmp_community']) and $_POST['snmp_community'] > "") {
                $encode['snmp_community'] = $_POST['snmp_community'];
                $credentials->snmp_community = $_POST['snmp_community'];
            } else {
                $encode['snmp_community'] = '';
            }

            if (isset($_POST['ssh_username']) and $_POST['ssh_username'] > "") {
                $encode['ssh_username'] = $_POST['ssh_username'];
                $credentials->ssh_username = $_POST['ssh_username'];
            } else {
                $encode['ssh_username'] = '';
            }

            if (isset($_POST['ssh_password']) and $_POST['ssh_password'] > "") {
                $encode['ssh_password'] = $_POST['ssh_password'];
                $credentials->ssh_password = $_POST['ssh_password'];
            } else {
                $encode['ssh_password'] = '';
            }

            if (isset($_POST['windows_username']) and $_POST['windows_username'] > "") {
                $encode['windows_username'] = $_POST['windows_username'];
                $credentials->windows_username = $_POST['windows_username'];
            } else {
                $encode['windows_username'] = '';
            }

            if (isset($_POST['windows_password']) and $_POST['windows_password'] > "") {
                $encode['windows_password'] = $_POST['windows_password'];
                $credentials->windows_password = $_POST['windows_password'];
            } else {
                $encode['windows_password'] = '';
            }

            if (isset($_POST['windows_domain']) and $_POST['windows_domain'] > "") {
                $encode['windows_domain'] = $_POST['windows_domain'];
                $credentials->windows_domain = $_POST['windows_domain'];
            } else {
                $encode['windows_domain'] = '';
            }

            if (isset($_POST['network_address']) and $_POST['network_address'] > "") {
                $encode['network_address'] = $_POST['network_address'];
            } else {
                $encode['network_address'] = '';
            }

            if (isset($_POST['type']) and $_POST['type'] == 'device' and
                isset($_POST['system_id']) and $_POST['system_id'] > '') {
                # we are auditing a single device that exists in the DB
                # update the device access credentials
                $this->m_system->update_credentials($credentials, $_POST['system_id']);

            }

            $encode['last_user'] = $this->data['user_full_name'];
            $encoded = json_encode($encode);
            $credentials = $this->encrypt->encode($encoded);
            $i = 0;
            do {
                if (strpos($credentials, "\"") !== FALSE) {
                    $credentials = $this->encrypt->encode($encoded);
                } else {
                    $i = 1;
                }
            } while ($i = 0);

            # TODO - fix this SQL with proper escaping
            $sql = 'INSERT INTO oa_temp (temp_id, temp_name, temp_value, temp_timestamp) VALUES (NULL, "Subnet Credentials - ' . $subnet . '", "' . $credentials . '", "' . $timestamp . '")';
            $query = $this->db->query($sql);
            $credentials = "";

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
                        # we do want to auto create network groups
                        # test if a network group exists with the matching definition
                        $group_dynamic_select = "SELECT distinct(system.system_id) FROM system, sys_hw_network_card_ip WHERE ( sys_hw_network_card_ip.ip_address_v4 >= '" . ip_address_to_db($subnet_details->host_min) . "' AND sys_hw_network_card_ip.ip_address_v4 <= '" . ip_address_to_db($subnet_details->host_max) . "' AND sys_hw_network_card_ip.ip_subnet = '" . $subnet_details->netmask . "' AND sys_hw_network_card_ip.system_id = system.system_id AND sys_hw_network_card_ip.timestamp = system.timestamp AND system.man_status = 'production') UNION SELECT distinct(system.system_id) FROM system WHERE (system.man_ip_address >= '" . ip_address_to_db($subnet_details->host_min) . "' AND system.man_ip_address <= '" . ip_address_to_db($subnet_details->host_max) . "' AND system.man_status = 'production')";
                        $start = explode(' ',microtime());
                        $sql = "SELECT * FROM oa_group WHERE group_dynamic_select = ? ";
                        $data = array($group_dynamic_select);
                        $query = $this->db->query($sql, $data);
                        if ($query->num_rows() > 0) {
                            // group exists - no need to do anything
                        } else {
                            // group does not exist - insert
                            $log = "C:discovery F:discover_subnet U:" . $this->data['user_full_name'] . " Creating Group for $subnet"; $this->log_event($log, 'y');
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

            if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "/open-audit/other";
            } else {
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "\\open-audit\\other";
            }

            if (isset($_POST['network_address']) and $_POST['network_address'] > '') {
                $i = explode('/', base_url());
                $url = str_replace($i[2], $_POST['network_address'], base_url());
            } elseif (isset($this->data['config']->default_network_address) and $this->data['config']->default_network_address > '') {
                $i = explode('/', base_url());
                $url = str_replace($i[2], $this->data['config']->default_network_address, base_url());
            } else {
                $url = base_url();
            }

            if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
                if ($subnet > '') {

                    if (isset($_POST['debug']) and ((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                        $command_string = "$filepath/discover_subnet.sh subnet=$subnet url=" . $url . "index.php/discovery/process_subnet submit_online=n echo_output=y create_file=n debugging=0 subnet_timestamp=\"$timestamp\" ";
                        echo "\nCommand: $command_string\n\n";
                        @exec($command_string, $output, $return_var);
                        echo "Return Code: $return_var (0 indicates success).\nOutput of the command (as an array):\n";
                        array_splice($output, 0, 1);
                        array_splice($output, 19);
                        $script_result = '';
                        foreach ($output as $line) {
                            $script_result .= $line;
                        }
                        $script_result = preg_replace('/\s+/', ' ',$script_result);
                        $script_result = str_replace("> <", "><", $script_result);
                        $formatted_script_result = str_replace("><", ">\n<", $script_result);
                        $formatted_script_result = str_replace(">\n</", "></", $formatted_script_result);
                        $formatted_script_result = str_replace("\n", "\n\t\t", $formatted_script_result);
                        $formatted_script_result = str_replace("\t\t<device>", "\t<device>", $formatted_script_result);
                        $formatted_script_result = str_replace("</device>", "\n\t</device>", $formatted_script_result);
                        $formatted_script_result = str_replace("</devices>", "\n</devices>", $formatted_script_result);
                        echo htmlentities($formatted_script_result) . "\n";
                        $_POST['form_details'] = $script_result;
                        $this->process_subnet();
                    } else {
                        $command_string = "nohup $filepath/discover_subnet.sh subnet=$subnet url=" . $url . "index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\"  > /dev/null 2>&1 &";
                        @exec($command_string, $output, $return_var);
                        if ($return_var != '0') {
                            $error = "Discovery subnet starting script discover_subnet.sh ($subnet) has failed"; $this->log_event($error);
                        }
                    }
                    $command_string = NULL;
                    $output = NULL;
                    $return_var = NULL;
                }
            }
            if (php_uname('s') == 'Windows NT') {
                if ($subnet > '') {
                    if (isset($_POST['debug']) and ((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                        $command_string = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs subnet=$subnet url=" . $url . "index.php/discovery/process_subnet submit_online=n echo_output=y create_file=n debugging=0 subnet_timestamp=\"$timestamp\" ";
                        echo "\nCommand: $command_string\n\n";
                        @exec($command_string, $output, $return_var);
                        echo "Return Code: $return_var (0 indicates success).\nOutput of the command (as an array):\n";
                        #array_splice($output, 0, 1);
                        #array_splice($output, 19);
                        $script_result = '';
                        foreach ($output as $line) {
                            $script_result .= $line;
                        }
                        $script_result = preg_replace('/\s+/', ' ',$script_result);
                        $script_result = str_replace("> <", "><", $script_result);
                        $formatted_script_result = str_replace("><", ">\n<", $script_result);
                        $formatted_script_result = str_replace(">\n</", "></", $formatted_script_result);
                        $formatted_script_result = str_replace("\n", "\n\t\t", $formatted_script_result);
                        $formatted_script_result = str_replace("\t\t<device>", "\t<device>", $formatted_script_result);
                        $formatted_script_result = str_replace("</device>", "\n\t</device>", $formatted_script_result);
                        $formatted_script_result = str_replace("</devices>", "\n</devices>", $formatted_script_result);
                        echo htmlentities($formatted_script_result) . "\n";
                        $_POST['form_details'] = $script_result;
                        $this->process_subnet();
                    } else {
                        $command_string = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs subnet=$subnet url=" . $url . "index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\" ";
                        pclose(popen($command_string,"r"));
                    }
                }
            }
            if (isset($_POST['debug']) and ((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                # do nothing so we echo out the logs
            } else {
                if (isset($this->data['type']) and $this->data['type'] == 'device') {
                    redirect('main/system_display/' . $this->data['system_id']);
                } else {
                    redirect('admin/view_log');
                }
            }

        }
    }













    public function process_subnet()
    {
        # accept or process the output of the discover subnet script - nmap details
        if (!isset($_POST['form_details'])) {
            $this->load->view('v_process_subnet', $this->data);
        } else {

            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                echo "<pre>\n";
                echo "DEBUG - Starting process_subnet.\n";
            }

            $this->load->helper("url");

            $this->load->model("m_oa_config");
            $conf = $this->m_oa_config->get_config();
            $this->data['config'] = new stdclass();
            foreach ($conf as $returned_result) {
                $config_name = $returned_result->config_name;
                $this->data['config']->$config_name = $returned_result->config_value;
            }

            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                echo "DEBUG - <a href='" . base_url() . "index.php/discovery/discover_subnet'>Back to input page</a>\n";
                echo "DEBUG - <a href='" . base_url() . "index.php'>Front Page</a>\n";
            }

            if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "/open-audit/other";
            }

            if (php_uname('s') == 'Windows NT') {
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "\\open-audit\\other";
            }

            $this->load->helper('url');
            $this->load->helper('xml');
            $this->load->library('encrypt');
            if (extension_loaded('snmp')) {
                $this->load->helper('snmp');
                $this->load->helper('snmp_oid');
            }
            $this->load->model("m_system");
            $this->load->model("m_oa_group");
            $this->load->model("m_sys_man_audits");
            $this->load->model("m_alerts");
            $timestamp = date('Y-m-d H:i:s');
            $xml_input = $_POST['form_details'];

            try {
                $xml = new SimpleXMLElement($xml_input);
            } catch (Exception $e) {
                # not a valid XML string
                $log_details = "Invalid XML input for discovery from " . $_SERVER['REMOTE_ADDR'];
                $this->log_event($log_details);
                # this would also log the received form data
                # $this->log_event($xml_input);
                exit;
            }

            $count = 0;
            foreach ($xml->children() as $details) {
                $details = (object) $details;

                if (isset($details->complete) and $details->complete == 'y') {
                    # delete the credential set
                    sleep(5);
                    $log_details = "C:discovery F:process_subnet Deleting credential set for " . $details->subnet . " submitted on " . $details->subnet_timestamp;
                    $this->log_event($log_details);
                    $sql = "DELETE FROM oa_temp WHERE temp_name = 'Subnet Credentials - " . $details->subnet . "' AND temp_timestamp = '" . $details->subnet_timestamp . "' ";
                    $query = $this->db->query($sql);
                } else {

                    if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                        $details->show_output = TRUE;
                    }
                    $log_details = "C:discovery F:process_subnet Start processing $details->man_ip_address"; $this->log_event($log_details);
                    $count++;
                    $details->last_seen = $timestamp;
                    $details->last_user = '';

                    $details->hostname = '';
                    $details->hostname = strtolower(gethostbyaddr($details->man_ip_address));
                    $details->domain = '';
                    $details->audits_ip = ip_address_to_db($_SERVER['REMOTE_ADDR']);

                    if (!filter_var($details->hostname, FILTER_VALIDATE_IP)) {
                        if (strpos($details->hostname, ".") !== FALSE) {
                            # we have a domain returned
                            $details->fqdn = strtolower($details->hostname);
                            $i = explode(".", $details->hostname);
                            $details->hostname = $i[0];
                            unset($i[0]);
                            $details->domain = implode(".", $i);
                        }
                    }

                    $details->system_key = '';
                    $details->system_key = $this->m_system->create_system_key($details);
                    $details->system_id = '';
                    $details->system_id = $this->m_system->find_system($details);
                    if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                        echo "DEBUG - find system_key: <a href='" . base_url() . "index.php/main/system_display/" . $details->system_id . "'>" . $details->system_id . "</a>\n";
                    }

                    $details->ssh_status = 'true';

                    # device specific credentials
                    $device_specific_credentials = $this->m_system->get_access_details($details->system_id);
                    $device_specific_credentials = $this->encrypt->decode($device_specific_credentials);
                    $specific = json_decode($device_specific_credentials);

                    # default Open-AudIT credentials
                    $default = $this->m_oa_config->get_credentials();

                    # supplied credentials
                    $sql = "SELECT temp_value FROM oa_temp WHERE temp_name = 'Subnet Credentials - " . $details->subnet . "' AND temp_timestamp = '" . $details->subnet_timestamp . "' ORDER BY temp_id DESC LIMIT 1";
                    $query = $this->db->query($sql);
                    $row = $query->row();
                    $supplied_credentials = @$row->temp_value;
                    $supplied = new stdClass();
                    if (isset($supplied_credentials) and $supplied_credentials > '') {

                        $supplied_credentials = $this->encrypt->decode($supplied_credentials);
                        $supplied_credentials = json_decode($supplied_credentials);

                        $supplied->snmp_community =   @$supplied_credentials->snmp_community;
                        $supplied->snmp_version =     @$supplied_credentials->snmp_version;
                        $supplied->snmp_port =        @$supplied_credentials->snmp_port;
                        $supplied->ssh_username =     @$supplied_credentials->ssh_username;
                        $supplied->ssh_password =     @$supplied_credentials->ssh_password;
                        $supplied->windows_username = @$supplied_credentials->windows_username;
                        $supplied->windows_password = @$supplied_credentials->windows_password;
                        $supplied->windows_domain =   @$supplied_credentials->windows_domain;
                        $details->last_seen_user =    @$supplied_credentials->last_user;
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

                    if (isset($_POST['network_address']) and $_POST['network_address'] > '') {
                        $i = explode('/', base_url());
                        $url = str_replace($i[2], $_POST['network_address'], base_url());
                    } elseif (isset($this->data['config']->default_network_address) and $this->data['config']->default_network_address > '') {
                        $i = explode('/', base_url());
                        $url = str_replace($i[2], $this->data['config']->default_network_address, base_url());
                    } else {
                        $url = base_url();
                    }
                    $details->network_address = NULL;

                    $details->snmp_community = '';
                    if ($details->snmp_community == '' and isset($specific->snmp_community) and $specific->snmp_community > '') {
                        $details->snmp_community = $specific->snmp_community;
                    }
                    if ($details->snmp_community == '' and isset($supplied->snmp_community) and $supplied->snmp_community > '') {
                        $details->snmp_community = $supplied->snmp_community;
                    }
                    if ($details->snmp_community == '' and isset($default->default_snmp_community) and $default->default_snmp_community > '') {
                        $details->snmp_community = $default->default_snmp_community;
                    }

                    $details->ssh_username = '';
                    if ($details->ssh_username == '' and isset($specific->ssh_username) and $specific->ssh_username > '') {
                        $details->ssh_username = $specific->ssh_username;
                    }
                    if ($details->ssh_username == '' and isset($supplied->ssh_username) and $supplied->ssh_username > '') {
                        $details->ssh_username = $supplied->ssh_username;
                    }
                    if ($details->ssh_username == '' and isset($default->default_ssh_username) and $default->default_ssh_username > '') {
                        $details->ssh_username = $default->default_ssh_username;
                    }

                    $details->ssh_password = '';
                    if ($details->ssh_password == '' and isset($specific->ssh_password) and $specific->ssh_password > '') {
                        $details->ssh_password = $specific->ssh_password;
                    }
                    if ($details->ssh_password == '' and isset($supplied->ssh_password) and $supplied->ssh_password > '') {
                        $details->ssh_password = $supplied->ssh_password;
                    }
                    if ($details->ssh_password == '' and isset($default->default_ssh_password) and $default->default_ssh_password > '') {
                        $details->ssh_password = $default->default_ssh_password;
                    }

                    $details->windows_username = '';
                    if ($details->windows_username == '' and isset($specific->windows_username) and $specific->windows_username > '') {
                        $details->windows_username = $specific->windows_username;
                    }
                    if ($details->windows_username == '' and isset($supplied->windows_username) and $supplied->windows_username > '') {
                        $details->windows_username = $supplied->windows_username;
                    }
                    if ($details->windows_username == '' and isset($default->default_windows_username) and $default->default_windows_username > '') {
                        $details->windows_username = $default->default_windows_username;
                    }


                    $details->windows_password = '';
                    if ($details->windows_password == '' and isset($specific->windows_password) and $specific->windows_password > '') {
                        $details->windows_password = $specific->windows_password;
                    }
                    if ($details->windows_password == '' and isset($supplied->windows_password) and $supplied->windows_password > '') {
                        $details->windows_password = $supplied->windows_password;
                    }
                    if ($details->windows_password == '' and isset($default->default_windows_password) and $default->default_windows_password > '') {
                        $details->windows_password = $default->default_windows_password;
                    }

                    $details->windows_domain = '';
                    if ($details->windows_domain == '' and isset($specific->windows_domain) and $specific->windows_domain > '') {
                        $details->windows_domain = $specific->windows_domain;
                    }
                    if ($details->windows_domain == '' and isset($supplied->windows_domain) and $supplied->windows_domain > '') {
                        $details->windows_domain = $supplied->windows_domain;
                    }
                    if ($details->windows_domain == '' and isset($default->default_windows_domain) and $default->default_windows_domain > '') {
                        $details->windows_domain = $default->default_windows_domain;
                    }


                    if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                        echo "DEBUG - SNMP Status: " . $details->snmp_status . "\n";
                        echo "DEBUG - WMI Status: " . $details->wmi_status . "\n";
                        echo "DEBUG - SSH Status: " . $details->ssh_status . "\n";
                    }

                    # need to escape the dollar sign when processing using bash (substitution will occur otherwise).
                    if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
                        $details->ssh_password = str_replace('$', '\$', $details->ssh_password);
                        $details->windows_password = str_replace('$', '\$', $details->windows_password);
                    }

                    $log_details = "C:discovery F:process_subnet WMI Status: $details->wmi_status $details->man_ip_address"; $this->log_event($log_details);
                    $log_details = "C:discovery F:process_subnet SNMP Status: $details->snmp_status $details->man_ip_address"; $this->log_event($log_details);
                    $log_details = "C:discovery F:process_subnet SSH Status: $details->ssh_status $details->man_ip_address"; $this->log_event($log_details);

                    if (extension_loaded('snmp') and $details->snmp_status == "true") {
                        # try to get more information using SNMP
                        $log_details = "C:discovery F:process_subnet Attempting SNMP discovery on $details->man_ip_address"; $this->log_event($log_details);
                        $details = get_snmp($details);
                        if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                            #echo "DEBUG - \$details\n";
                            $details_post_snmp = $details;
                        }
                    }

                    # remove all the NULL, FALSE and Empty Strings but leaves 0 (zero) values
                    # $details = (object) array_filter((array) $details, 'strlen' );

                    if ((isset($details->snmp_oid)) and ($details->snmp_oid > '')) {
                        # we received a result from SNMP, use this data to update or insert
                        $details->last_seen_by = 'snmp';
                        $details->audits_ip = '127.0.0.1';
                        if (isset($details->system_id) and $details->system_id != '') {
                            # we have a system_id and snmp details to update
                            $this->m_system->update_system($details);
                            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                echo "DEBUG - SNMP update for " . $details->system_id . "\n";
                            }
                            $log_details = "C:discovery F:process_subnet SNMP update for $details->man_ip_address (System ID $details->system_id)";
                            $this->log_event($log_details);
                        } else {
                            # we have a new system
                            $log_details = "C:discovery F:process_subnet SNMP insert for $details->man_ip_address"; $this->log_event($log_details);
                            $details->system_id = $this->m_system->insert_system($details);
                            $this->m_alerts->generate_alert($details->system_id, 'system', $details->system_id, 'system detected', date('Y-m-d H:i:s'));
                            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) { echo "DEBUG - SNMP insert for " . $details->system_id . "\n"; }
                        }
                        # also update the device credentials
                        $credentials = new stdClass();
                        $credentials->ip_address = $details->man_ip_address;
                        $credentials->snmp_community = $details->snmp_community;
                        $credentials->snmp_version = $details->snmp_version;
                        $this->m_system->update_credentials($credentials, $details->system_id);
                        unset($credentials);
                        if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                            echo "DEBUG - SNMP credential update for " . $details->system_id . "\n";
                        }
                        $log_details = "C:discovery F:process_subnet SNMP credential update for $details->man_ip_address (System ID $details->system_id)";
                        $this->log_event($log_details);
                    } else {
                        # we received a result from nmap only, use this data to update or insert
                        $details->last_seen_by = 'nmap';
                        if (isset($details->system_id) and $details->system_id != '') {
                            # we have a system id and nmap details to update
                            $this->m_system->update_system($details);
                            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) { echo "DEBUG - Nmap update for " . $details->system_id . "\n"; }
                            $log_details = "C:discovery F:process_subnet Nmap update for $details->man_ip_address (System ID $details->system_id)"; $this->log_event($log_details);
                        } else {
                            # we have a new system
                            $log_details = "C:discovery F:process_subnet Nmap insert for $details->man_ip_address"; $this->log_event($log_details);
                            $details->system_id = $this->m_system->insert_system($details);
                            $this->m_alerts->generate_alert($details->system_id, 'system', $details->system_id, 'system detected', date('Y-m-d H:i:s'));
                            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) { echo "DEBUG - Nmap insert for " . $details->system_id . "\n"; }
                        }
                    }
                    $this->m_sys_man_audits->insert_audit($details);
                    $this->m_oa_group->update_system_groups($details);

                    # either we got nmap only or nmap and snmp details
                    # either way, $details->system_id is now set
                    if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                        echo "DEBUG - System ID <a href='" . base_url() . "index.php/main/system_display/" . $details->system_id . "'>" . $details->system_id . "</a>\n";
                    }







                    # Windows WMI audit - audit_windows.vbs
                    if ($details->wmi_status == "true" and $details->windows_username > '' and $details->windows_domain > '' and $details->windows_password > '') {
                        $log_details = "C:discovery F:process_subnet Attempt Windows audit for $details->man_ip_address"; $this->log_event($log_details);

                        if (php_uname('s') == 'Linux') {
                            $error = "";
                            #$command_string = "$filepath/smbclient \\\\\\\\" . $details->man_ip_address . "\\\\admin$ -U \"" . $details->windows_domain . "\\" . $details->windows_username . "%" . $details->windows_password . "\" -c \"put $filepath/audit_windows.vbs audit_windows.vbs\"";
                            $command_string = "smbclient \\\\\\\\" . $details->man_ip_address . "\\\\admin$ -U \"" . $details->windows_domain . "\\" . $details->windows_username . "%" . $details->windows_password . "\" -c \"put $filepath/audit_windows.vbs audit_windows.vbs\"";
                            exec($command_string, $output, $return_var);
                            if ($return_var != '0') {
                                $error = "C:discovery F:process_subnet SMBClient copy of audit_windows.vbs to $details->man_ip_address has failed";
                                $this->log_event($error);
                            } else {
                                $log = "C:discovery F:process_subnet SMBClient copy of audit_windows.vbs to $details->man_ip_address has succeeded";
                                $this->log_event($log);
                            }
                            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                echo "DEBUG - command: " . $command_string . "\n";
                                print_r($output);
                                echo "\nDEBUG - Command Return Value: " . $return_var . "\n\n";
                            }
                            $command_string = NULL;
                            $output = NULL;
                            $return_var = NULL;
                            if ($error == "") {
                                #$command_string = "screen -D -m $filepath/winexe -U " . $details->windows_domain . "/" . $details->windows_username . "%" . $details->windows_password . " --uninstall //" . $details->man_ip_address . " \"cscript c:\windows\audit_windows.vbs submit_online=y create_file=n strcomputer=" . $details->man_ip_address . " url=" . $url . "index.php/system/add_system debugging=1 \" ";
                                $command_string = "screen -D -m winexe -U " . $details->windows_domain . "/" . $details->windows_username . "%" . $details->windows_password . " --uninstall //" . $details->man_ip_address . " \"cscript c:\windows\audit_windows.vbs submit_online=y create_file=n strcomputer=" . $details->man_ip_address . " url=" . $url . "index.php/system/add_system debugging=1 system_id=" . $details->system_id . "\" ";
                                exec($command_string, $output, $return_var);
                                if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                    echo "DEBUG - command: " . $command_string . "\n";
                                    print_r($output);
                                    echo "\nDEBUG - Command Return Value: " . $return_var . "\n\n";
                                }
                                if ($return_var != '0') {
                                    $error = "C:discovery F:process_subnet Attempting to run audit_windows.vbs on $details->man_ip_address has failed";
                                    $this->log_event($error);
                                } else {
                                    $log = "C:discovery F:process_subnet Attempt to run audit_windows.vbs on $details->man_ip_address has succeeded";
                                    $this->log_event($log);
                                    # also update the device credentials
                                    $credentials = new stdClass();
                                    $credentials->ip_address = $details->man_ip_address;
                                    $credentials->windows_username = $details->windows_username;
                                    $credentials->windows_password = $details->windows_password;
                                    $credentials->windows_domain = $details->windows_domain;
                                    $this->m_system->update_credentials($credentials, $details->system_id);
                                    unset($credentials);
                                    if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                        echo "DEBUG - Windows credential update for " . $details->system_id . "\n";
                                    }
                                    $log_details = "C:discovery F:process_subnet Windows credential update for $details->man_ip_address (System ID $details->system_id)";
                                    $this->log_event($log_details);
                                }
                                $command_string = NULL;
                                $output = NULL;
                                $return_var = NULL;
                            }
                        }

                        if (php_uname('s') == 'Windows NT') {

                            $log_details = "C:discovery F:process_subnet Windows audit for $details->man_ip_address (System ID $details->system_id)"; $this->log_event($log_details);

                            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                $script_string = "$filepath\\audit_windows.vbs strcomputer=" . $details->man_ip_address . " submit_online=y create_file=n struser=" . $details->windows_domain . "\\" . $details->windows_username . " strpass=" . $details->windows_password . " url=" . $url . "index.php/system/add_system debugging=3 system_id=" . $details->system_id;
                                $command_string = "%comspec% /c start /b cscript //nologo " . $script_string;
                                echo "DEBUG command: " . $command_string . "\n";
                                exec($command_string, $output, $return_var);
                                if ($return_var != '0') {
                                    $error = "C:discovery F:process_subnet Attempt to run audit_windows.vbs on $details->man_ip_address has failed";
                                    $this->log_event($error);
                                } else {
                                    $log = "C:discovery F:process_subnet Attempt to run audit_windows.vbs on $details->man_ip_address has succeeded";
                                    $this->log_event($log);
                                    # also update the device credentials
                                    $credentials = new stdClass();
                                    $credentials->ip_address = $details->man_ip_address;
                                    $credentials->windows_username = $details->windows_username;
                                    $credentials->windows_password = $details->windows_password;
                                    $credentials->windows_domain = $details->windows_domain;
                                    $this->m_system->update_credentials($credentials, $details->system_id);
                                    unset($credentials);
                                    if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                        echo "DEBUG - Windows credential update for " . $details->system_id . "\n";
                                    }
                                    $log_details = "C:discovery F:process_subnet Windows credential update for $details->man_ip_address (System ID $details->system_id)";
                                    $this->log_event($log_details);
                                }
                                print_r($output);
                                echo "\n\n" . $return_var;
                                $output = NULL;
                                $return_var = NULL;
                            } else {$script_string = "$filepath\\audit_windows.vbs strcomputer=" . $details->man_ip_address . " submit_online=y create_file=n struser=" . $details->windows_domain . "\\" . $details->windows_username . " strpass=" . $details->windows_password . " url=" . $url . "index.php/system/add_system debugging=0  system_id=" . $details->system_id;
                                $command_string = "%comspec% /c start /b cscript //nologo " . $script_string . " &";
                                pclose(popen($command_string,"r"));
                                # also update the device credentials
                                $credentials = new stdClass();
                                $credentials->ip_address = $details->man_ip_address;
                                $credentials->windows_username = $details->windows_username;
                                $credentials->windows_password = $details->windows_password;
                                $credentials->windows_domain = $details->windows_domain;
                                $this->m_system->update_credentials($credentials, $details->system_id);
                                unset($credentials);
                                if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                    echo "DEBUG - Windows credential update for " . $details->system_id . "\n";
                                }
                                $log_details = "C:discovery F:process_subnet Windows credential update for $details->man_ip_address (System ID $details->system_id)";
                                $this->log_event($log_details);
                            }
                            $command_string = NULL;
                        }
                    }





                    # SSH based audit (usually Linux, unix or OSX)
                    if ($details->ssh_status == "true") {
                        if ($details->ssh_username == '' or $details->ssh_password == '') {
                            $script_string = "audit_linux.sh strcomputer=" . $details->man_ip_address . " submit_online=y create_file=n struser=" . $details->ssh_username . " strpass=" . $details->ssh_password . " debugging=0";
                            $log_details = "C:discovery F:process_subnet No credentials supplied for SSH audit for $details->man_ip_address (System ID $details->system_id)";
                            $this->log_event($log_details);
                        } else {

                            if (php_uname('s') == 'Linux') {
                                # Linux server SSH audit
                                if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) { echo "DEBUG - Attempting SSH audit.\n"; }
                                echo "DEBUG - struser: " . $details->ssh_username . "\n";
                                echo "DEBUG - strpass: " . $details->ssh_password . "\n";
                                $command_string = "sshpass -p \"" . $details->ssh_password . "\" ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null " . $details->ssh_username . "@" . $details->man_ip_address . " uname";
                                exec($command_string, $output, $return_var);
                                if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                    echo "DEBUG - command: " . $command_string . "\n";
                                    #print_r($output);
                                    echo "\nReturn Value: " . $return_var . "\n\n";
                                }
                                # Linux, Darwin, Windows
                                if (isset($output[0]) and $output[0] > "") {
                                    $remote_os = $output[0];
                                } else {
                                    $remote_os = "";
                                }
                                echo "DEBUG - Remote OS: " . $remote_os . "\n";
                                $command_string = NULL;
                                $output = NULL;
                                $return_var = NULL;

                                if ($remote_os == "Linux") {
                                    $error = "";
                                    $log_details = "C:discovery F:process_subnet Attempting SSH audit for discovery on $details->man_ip_address (linux)"; $this->log_event($log_details);

                                    # Attempt to copy the audit script
                                    $command_string = "sshpass -p \"" . $details->ssh_password . "\" scp -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null $filepath/audit_linux.sh " . $details->ssh_username . "@" . $details->man_ip_address . ":/tmp/";
                                    exec($command_string, $output, $return_var);
                                    if ($return_var != '0') {
                                        $error = "SSH copy of audit_linux.sh to $details->man_ip_address has failed";
                                        $this->log_event($error);
                                    }
                                    if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                        echo "DEBUG command: " . $command_string . "\n";
                                    }
                                    $command_string = NULL;
                                    $output = NULL;
                                    $return_var = NULL;

                                    # Attempt to chmod the script so it's executable
                                    if ($error == "") {
                                        $command_string = "sshpass -p \"" . $details->ssh_password . "\" ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null " . $details->ssh_username . "@" . $details->man_ip_address . " chmod 777 /tmp/audit_linux.sh";
                                        exec($command_string, $output, $return_var);
                                        if ($return_var != '0') { $error = "SSH chmod command for linux audit script on $details->man_ip_address failed"; $this->log_event($error); }
                                        if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                            echo "DEBUG command: " . $command_string . "\n";
                                        }
                                        $command_string = NULL;
                                        $output = NULL;
                                        $return_var = NULL;
                                    }

                                    # Attempt to determine if SUDO is present on target system
                                    if ($error == "" and strtolower($details->ssh_username) != 'root') {
                                        $command_string = "sshpass -p \"" . $details->ssh_password . "\" ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null " . $details->ssh_username . "@" . $details->man_ip_address . " which sudo";
                                        exec($command_string, $output, $return_var);
                                        if ($return_var != '0') { $error = "SSH which sudo command for linux audit script on $details->man_ip_address failed"; $this->log_event($error); }
                                        if (isset($output[0]) and $output[0] > "") {
                                            $sudo = $output[0];
                                        } else {
                                            $sudo = "";
                                        }
                                        if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                            echo "DEBUG command: " . $command_string . "\n";
                                        }
                                        $command_string = NULL;
                                        $output = NULL;
                                        $return_var = NULL;
                                    } else {
                                        $sudo = "";
                                    }

                                    # Attempt to run the audit script
                                    if ($error == "") {
                                        if ($sudo > "" and $details->ssh_username != 'root') {
                                            $command_string = "sshpass -p \"" . $details->ssh_password . "\" ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null " . $details->ssh_username . "@" . $details->man_ip_address . " \"echo " . $details->ssh_password . " | $sudo -S /tmp/audit_linux.sh submit_online=y create_file=n url=" . $url . "index.php/system/add_system debugging=1 system_id=" . $details->system_id . "\"";
                                        
                                            @exec($command_string, $output, $return_var);
                                            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                                echo "DEBUG command: " . $command_string . "\n";
                                                print_r($output);
                                                echo "\nReturn Value: " . $return_var . "\n\n";
                                            }

                                            if ($return_var != '0') {
                                                $error = "C:discovery F:process_subnet SSH audit command for linux audit using sudo script on $details->man_ip_address failed. Attempting to run without sudo."; 
                                                $this->log_event($error);
                                                $command_string = "sshpass -p \"" . $details->ssh_password . "\" ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null " . $details->ssh_username . "@" . $details->man_ip_address . " \"/tmp/audit_linux.sh submit_online=y create_file=n url=" . $url . "index.php/system/add_system debugging=3 system_id=" . $details->system_id . "\"";
                                                @exec($command_string, $output, $return_var);
                                                if ($return_var != '0') {
                                                    $error = "SSH audit command for linux audit not using sudo script on $details->man_ip_address failed";
                                                    $this->log_event($error);
                                                } else {
                                                    $error = '';
                                                }
                                                if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                                    echo "DEBUG command: " . $command_string . "\n";
                                                    print_r($output);
                                                    echo "\nReturn Value: " . $return_var . "\n\n";
                                                }
                                            }
                                            $command_string = NULL;
                                            $output = NULL;
                                            $return_var = NULL;
                                        } else {
                                            $command_string = "sshpass -p \"" . $details->ssh_password . "\" ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null " . $details->ssh_username . "@" . $details->man_ip_address . " \"/tmp/audit_linux.sh submit_online=y create_file=n url=" . $url . "index.php/system/add_system debugging=1 system_id=" . $details->system_id . "\"";
                                            
                                            @exec($command_string, $output, $return_var);

                                            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                                echo "DEBUG command: " . $command_string . "\n";
                                                print_r($output);
                                                echo "\nReturn Value: " . $return_var . "\n\n";
                                            }

                                            if ($return_var != '0') {
                                                $error = "SSH audit command for linux audit script on $details->man_ip_address failed"; 
                                                $this->log_event($error);
                                            } 
                                        } # End of use sudo / root
                                    }

                                    if ($error == '') {
                                        $log_details = "C:discovery F:process_subnet Successful SSH audit for discovery on $details->man_ip_address (linux)"; $this->log_event($log_details);
                                        # also update the device credentials
                                        $credentials = new stdClass();
                                        $credentials->ip_address = $details->man_ip_address;
                                        $credentials->ssh_username = $details->ssh_username;
                                        $credentials->ssh_password = $details->ssh_password;
                                        $this->m_system->update_credentials($credentials, $details->system_id);
                                        unset($credentials);
                                        if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                            echo "DEBUG - SSH credential update for " . $details->system_id . "\n";
                                        }
                                        $log_details = "C:discovery F:process_subnet SSH credential update for $details->man_ip_address (System ID $details->system_id)";
                                        $this->log_event($log_details);
                                    } 
                                } # End of if error
                            } # Close Linux server

                            if (php_uname('s') == 'Windows NT') {
                                # Windows server SSH audit
                                $command_string = "echo y | $filepath\\plink.exe -ssh " . $details->ssh_username . "@" . $details->man_ip_address . " -pw " . $details->ssh_password . " exit";
                                exec($command_string, $output, $return_var);
                                if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                    echo "DEBUG command: " . $command_string . "\n";
                                    #print_r($output);
                                    echo "\nReturn Value: " . $return_var . "\n\n";
                                }
                                $command_string = NULL;
                                $output = NULL;
                                $return_var = NULL;
                                $command_string = "$filepath\\plink.exe -ssh " . $details->ssh_username . "@" . $details->man_ip_address . " -pw " . $details->ssh_password . " uname";
                                exec($command_string, $output, $return_var);
                                if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                    echo "DEBUG command: " . $command_string . "\n";
                                    #print_r($output);
                                    echo "\nReturn Value: " . $return_var . "\n\n";
                                }
                                # Linux, Darwin, Windows
                                if (isset($output[0]) and $output[0] > "") {
                                    $remote_os = $output[0];
                                } else {
                                    $remote_os = "";
                                }
                                $command_string = NULL;
                                $return_var = NULL;
                                $output = NULL;
                                if ($remote_os == "Linux") {
                                    $error = "";
                                    $log_details = "C:discovery F:process_subnet Attempting SSH audit for discovery on $details->man_ip_address (linux)"; $this->log_event($log_details);

                                    # Attempt to copy the audit script
                                    $command_string = "$filepath\\pscp.exe -pw " . $details->ssh_password . " $filepath\\audit_linux.sh " . $details->ssh_username . "@" . $details->man_ip_address . ":/tmp/";
                                    exec($command_string, $output, $return_var);
                                    if ($return_var != '0') { $error = "SSH copy of audit_linux.sh to $details->man_ip_address has failed"; $this->log_event($error); }
                                    if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                        echo "DEBUG command: " . $command_string . "\n";
                                        print_r($output);
                                        echo "\nReturn Value: " . $return_var . "\n\n";
                                    }
                                    $command_string = NULL;
                                    $output = NULL;
                                    $return_var = NULL;

                                    # Attempt to chmod the script so it's executable
                                    if ($error == "") {
                                        $command_string = "$filepath\\plink.exe -pw " . $details->ssh_password . " " . $details->ssh_username . "@" . $details->man_ip_address . " chmod 777 /tmp/audit_linux.sh";
                                        exec($command_string, $output, $return_var);
                                        if ($return_var != '0') { $error = "SSH chmod command for linux audit script on $details->man_ip_address failed"; $this->log_event($error); }
                                        if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                            echo "DEBUG command: " . $command_string . "\n";
                                            print_r($output);
                                            echo "\nReturn Value: " . $return_var . "\n\n";
                                        }
                                        $command_string = NULL;
                                        $output = NULL;
                                        $return_var = NULL;
                                    }

                                    # Attempt to determine if SUDO is present on target system
                                    if ($error == "") {
                                        $command_string = "$filepath\\plink.exe -pw " . $details->ssh_password . " " . $details->ssh_username . "@" . $details->man_ip_address . " which sudo";
                                        exec($command_string, $output, $return_var);
                                        if ($return_var != '0') { $error = "SSH which sudo command for linux audit script on $details->man_ip_address failed"; $this->log_event($error); }
                                        if (isset($output[0]) and $output[0] > "") {
                                            $sudo = $output[0];
                                        } else {
                                            $sudo = "";
                                        }
                                        if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                            echo "DEBUG command: " . $command_string . "\n";
                                            print_r($output);
                                            echo "\nReturn Value: " . $return_var . "\n\n";
                                        }
                                        $command_string = NULL;
                                        $output = NULL;
                                        $return_var = NULL;
                                    }

                                    # Attempt to run the audit script
                                    if ($error == "") {
                                        if ($sudo > "" and $details->ssh_username != 'root') {
                                            $command_string = "$filepath\\plink.exe -pw " . $details->ssh_password . " " . $details->ssh_username . "@" . $details->man_ip_address . " \"echo " . $details->ssh_password . " | $sudo -S /tmp/audit_linux.sh submit_online=y create_file=n url=" . $url . "index.php/system/add_system debugging=1 system_id=" . $details->system_id . "\"";
                                        
                                            @exec($command_string, $output, $return_var);
                                            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                                echo "DEBUG command: " . $command_string . "\n";
                                                print_r($output);
                                                echo "\nReturn Value: " . $return_var . "\n\n";
                                            }

                                            if ($return_var != '0') {
                                                $error = "SSH audit command for linux audit script on $details->man_ip_address failed"; 
                                                $this->log_event($error);
                                                $command_string = "$filepath\\plink.exe -pw " . $details->ssh_password . " " . $details->ssh_username . "@" . $details->man_ip_address . " \"/tmp/audit_linux.sh submit_online=y create_file=n url=" . $url . "index.php/system/add_system debugging=1 system_id=" . $details->system_id . "\"";
                                                @exec($command_string, $output, $return_var);
                                                if ($return_var != '0') {
                                                    $error = "SSH audit command for linux audit script on $details->man_ip_address running without sudo has failed"; 
                                                    $this->log_event($error);
                                                }
                                                if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                                    echo "DEBUG command: " . $command_string . "\n";
                                                    print_r($output);
                                                    echo "\nReturn Value: " . $return_var . "\n\n";
                                                }
                                            } 
                                            $command_string = NULL;
                                            $output = NULL;
                                            $return_var = NULL;

                                        } else {
                                            $command_string = "$filepath\\plink.exe -pw " . $details->ssh_password . " " . $details->ssh_username . "@" . $details->man_ip_address . " \"/tmp/audit_linux.sh submit_online=y create_file=n url=" . $url . "index.php/system/add_system debugging=1 system_id=" . $details->system_id . "\"";
                                            @exec($command_string, $output, $return_var);
                                            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                                echo "DEBUG command: " . $command_string . "\n";
                                                print_r($output);
                                                echo "\nReturn Value: " . $return_var . "\n\n";
                                            }
                                            if ($return_var != '0') {
                                                $error = "SSH audit command for linux audit script as root on $details->man_ip_address failed"; 
                                                $this->log_event($error);
                                            } 
                                        } # end of use sudo / root

                                        if ($error == '') {
                                            $log_details = "C:discovery F:process_subnet Successful SSH audit for discovery on $details->man_ip_address (windows)"; $this->log_event($log_details);
                                            # also update the device credentials
                                            $credentials = new stdClass();
                                            $credentials->ip_address = $details->man_ip_address;
                                            $credentials->ssh_username = $details->ssh_username;
                                            $credentials->ssh_password = $details->ssh_password;
                                            $this->m_system->update_credentials($credentials, $details->system_id);
                                            unset($credentials);
                                            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                                                echo "DEBUG - SSH credential update for " . $details->system_id . "\n";
                                            }
                                            $log_details = "C:discovery F:process_subnet SSH credential update for $details->man_ip_address (System ID $details->system_id)";
                                            $this->log_event($log_details);
                                        }
                                    } # End of if error
                                } # End of remote OS == Linux

                                if ($output[0] == "Darwin") {
                                    $log_details = "Attempting SSH audit for discovery on $details->man_ip_address (apple)"; $this->log_event($log_details);
                                    # An OSX machine.
                                    # no audit as yet
                                }
                            } # close Windows server

                        } # close SSH user and password
                    } # close ssh_status
                    if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                        echo "Finish processing " . $details->man_ip_address . "\n";
                    }
                    $log = "C:discovery F:process_subnet Completed processing $details->man_ip_address"; $this->log_event($log);
                } # close the device / complete switch
            } # close for each device in XML
        } # close for form submission
    } # close function

    public function ip_address_from_db($ip) {
        $ip_pre = $ip;
        if (($ip <> "") AND (!(is_null($ip)))){
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
        if (($ip <> "") AND (!(is_null($ip))) AND (substr_count($ip, '.') == 3)) {
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
        # setup the log file
        if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
            $file = "/usr/local/open-audit/other/open-audit.log";
        } else {
            $file = "c:\\xampplite\\open-audit\\other\\open-audit.log";
        }
        $log_timestamp = date("M d H:i:s");
        $log_hostname = php_uname('n');
        $log_pid = getmypid();
        $log_line = $log_timestamp . " " . $log_hostname . " " . $log_pid . " " . $log_details . ".\n";
        $handle = fopen($file, "a");
        fwrite($handle, $log_line);
        fclose($handle);
        if ($display != 'n') {
            if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE))) {
                echo "LOG - " . $log_line;
            }
        }
    }

}
