<?php
#
//  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
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
//  MERCHANTABILITY or FITNESS For A PARTICULAR PURPOSE.  See the
//  GNU Affero General Public License for more details.
#
//  You should have received a copy of the GNU Affero General Public License
//  along with Open-AudIT (most likely in a file named LICENSE).
//  If not, see <http://www.gnu.org/licenses/>
#
//  For further information on Open-AudIT or for a license other than AGPL please see
//  www.opmantek.com or email contact@opmantek.com
#
// *****************************************************************************

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.6.4
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class discovery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['title'] = 'Open-AudIT';
        $this->load->helper('url');
        $this->load->helper('network');
        $this->load->library('session');
        $this->load->model('m_system');
        $this->load->model('m_oa_config');
        $this->m_oa_config->load_config();
        $timestamp = date('Y-m-d H:i:s');
        // log the attempt
        $this->load->helper('log');
        $log_details = new stdClass();
        $log_details->severity = 6;
        stdlog($log_details);
        unset($log_details);
    }

    public function index()
    {
        $this->load->view('v_system_add', $this->data);
    }

    public function discover_list($ids = '')
    {
        // take a list of system_id's and run discovery on them
        // do not wait for the return result, go back to the webpage ASAP
        //
        // ids should be a comma separated list of device id's (integers) - no spaces
        // this will be converted to an array (system_ids)

        $log_details = new stdClass();
        $log_details->severity = 6;

        $this->load->model('m_oa_general');
        $this->load->model('m_system');
        $this->load->model('m_oa_user');
        $this->load->library('encrypt');
        $this->load->helper('url');
        $system_ids = '';

        // accept a list passed into the function from PHP
        if ($ids != '') {
            $system_ids = explode(',', $ids);
        }

        // accept the "ids" POST variable as a list
        $test = @$this->input->post('ids');
        if ($test != '' and $system_ids == '') {
            $system_ids = explode(',', $test);
        }
        unset($test);

        // accept a GET variable that's a comma separated list
        $test = @$this->uri->segment(3);
        if ($test != '' and $system_ids == '') {
            $system_ids = explode(',', $test);
        }
        unset($test);

        // accept a redirect from bulk credential update
        $test = @$this->session->flashdata('discover_list');
        if (strlen($test) > 0 and $system_ids == '') {
            $system_ids = explode(',', $test);
        }
        unset($test);

        // make sure we have some ids
        if (count($system_ids) == 0) {
            return;
        }

        // spawn a discovery process for each system_id
        foreach ($system_ids as $key => $value) {
            $timestamp = date('Y-m-d H:i:s');
            $system_id = $value;
            $ip_address = $this->ip_address_from_db($this->m_oa_general->get_attribute('system', 'man_ip_address', $system_id));
            $credentials = $this->m_system->get_credentials($system_id);
            if (isset($this->session->userdata['user_id']) and is_numeric($this->session->userdata['user_id'])) {
                unset($temp);
                $temp = $this->m_oa_user->get_user_details($this->session->userdata['user_id']);
                $credentials->last_user = $temp[0]->user_full_name;
            } else {
                $credentials->last_user = '';
            }
            $encoded = json_encode($credentials);
            $credentials = $this->encrypt->encode($encoded);
            // make sure we don't have any '/' characters as it breaks the SQL storage
            $i = 0;
            do {
                if (strpos($credentials, "\"") != false) {
                    $credentials = $this->encrypt->encode($encoded);
                } else {
                    $i = 1;
                }
            } while ($i = 0);
            // store it in the DB
            $sql = 'INSERT INTO oa_temp (temp_id, temp_name, temp_value, temp_timestamp) VALUES (null, "Subnet Credentials - '.$ip_address.'", "'.$credentials.'", "'.$timestamp.'")';
            $query = $this->db->query($sql);
            $credentials = "";

            if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/open-audit/other";
            } else {
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."\\open-audit\\other";
            }
            // set the URL to submit to
            // TODO - check this on the form
            $i = explode('/', base_url());
            $url = str_replace($i[2], $this->config->item('default_network_address'), base_url());
            if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
                // run the script and continue (do not wait for result)
                $command_string = "nohup $filepath/discover_subnet.sh subnet_range=$ip_address url=".$url."index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\"  > /dev/null 2>&1 &";
                @exec($command_string, $output, $return_var);
                if ($return_var != '0') {
                    $error = 'Discovery subnet starting script discover_subnet.sh ('.$ip_address.') has failed';
                    $log_details->message = $error;
                    $log_details->severity = 5;
                    stdlog($log_details);
                }
                $command_string = null;
                $output = null;
                $return_var = null;
            }
            if (php_uname('s') == 'Windows NT') {
                // run the script and continue (do not wait for result)
                $command_string = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs subnet_range=$ip_address url=".$url."index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\" ";
                pclose(popen($command_string, "r"));
            }
        }
        // remove the log object
        unset($log_details);
        // redirect to the log page
        redirect('admin/view_log');
    }

    public function discover_active_directory()
    {
        if (! $this->input->post('submit')) {
            // only Admin users can access this function
            $this->load->model('m_oa_user');
            $this->m_oa_user->validate_user('y');

            // show the form
            $log_details = new stdClass();
            $log_details->severity = 6;
            $log_details->message = "AD Discovery form page request";
            $log_details->file = 'system';
            stdlog($log_details);

            // show the form to accept scan details
            $this->data['type'] = $this->uri->segment(3);
            $this->data['warning'] = '';
            $this->data['include'] = 'v_discover_active_directory';
            $this->data['sortcolumn'] = '1';
            $this->data['heading'] = 'Active Directory Discovery';
            $this->load->view('v_template', $this->data);
        } else {
            // process the form submit
            $this->load->model('m_oa_user');
            $this->m_oa_user->validate_user('y');

            $display = '';
            if ($this->input->post('debug') and strpos($_SERVER['HTTP_ACCEPT'], 'html')) {
                $display = 'y';
                echo "<pre>\n";
            }

            // all logging will be as below, only the message will change
            $log_details = new stdClass();
            $log_details->severity = 7;
            $log_details->file = 'system';
            $log_details->display = $display;

            // run the audit_domain script
            if ((isset($_POST['server']) and $_POST['server'] > '') and
            (isset($_POST['windows_username']) and $_POST['windows_username'] > '') and
            (isset($_POST['windows_password']) and $_POST['windows_password'] > '') and
            (isset($_POST['windows_domain']) and $_POST['windows_domain'] > '')) {
                $error = '';
                $log_details->message = 'Discovery AD submitted for '.$_POST['windows_domain'];
                stdlog($log_details);
                $i = explode('/', base_url());
                $url = str_replace($i[2], $_POST['network_address'], base_url()).'index.php/system/add_system';
            } else {
                $error = 'Discovery AD incomplete credentials for '.$_POST['windows_domain'].'(WinUser: '.$_POST['windows_user'].', Server: '.$_POST['server'].')';
                $log_details->message = $error;
                stdlog($log_details);
                $url = '';
            }

            if ((php_uname('s') == 'Windows NT') and ($error == '')) {
                // Windows host - start the script locally
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."\\open-audit\\other";

                if ($display == 'y') {
                    $script_string = "$filepath\\discover_domain.vbs local_domain=LDAP://".$_POST['windows_domain']." number_of_audits=".$_POST['number_of_audits']." script_name=$filepath\\audit_windows.vbs url=".$url." struser=".$_POST['windows_domain']."\\".$_POST['windows_username']." strpass=".$_POST['windows_password']." debugging=1";
                } else {
                    $script_string = "$filepath\\discover_domain.vbs local_domain=LDAP://".$_POST['windows_domain']." number_of_audits=".$_POST['number_of_audits']." script_name=$filepath\\audit_windows.vbs url=".$url." struser=".$_POST['windows_domain']."\\".$_POST['windows_username']." strpass=".$_POST['windows_password']." debugging=0";
                }
                $command_string = "%comspec% /c start /b cscript //nologo ".$script_string." &";

                if ($display == 'y') {
                    exec($command_string, $output, $return_var);
                    echo 'DEBUG - Command Executed: '.$command_string."\n";
                    echo 'DEBUG - Return Value: '.$return_var."\n";
                    echo "DEBUG - Command Output:\n";
                    print_r($output);
                    if ($return_var != '0') {
                        $log_details->message = 'Attempt to run discover_domain.vbs on localhost has failed';
                        stdlog($log_details);
                    } else {
                        $log_details->message = 'Attempt to run discover_domain.vbs on localhost has succeeded';
                        stdlog($log_details);
                    }
                } else {
                    pclose(popen($command_string, 'r'));
                }
                $output = null;
                $return_var = null;
                $command_string = null;
            }

            if (php_uname('s') == 'Linux' or php_uname('s') == "Darwin") {
                // linux or OSX host - copy the script to the DC and start it
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/open-audit/other";
                $_POST['windows_username'] = str_replace('$', '\$', $_POST['windows_username']);
                $_POST['windows_password'] = str_replace('$', '\$', $_POST['windows_password']);

                // copy the domain audit script
                if ($error == '') {
                    $command_string = "smbclient \\\\\\\\".$_POST['server']."\\\\admin$ -U \"".$_POST['windows_domain']."\\".$_POST['windows_username']."%".$_POST['windows_password']."\" -c \"put $filepath/discover_domain.vbs discover_domain.vbs\" 2>&1";
                    exec($command_string, $output, $return_var);
                    if ($display == 'y') {
                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                        echo 'DEBUG - Return Value: '.$return_var."\n";
                        echo "DEBUG - Command Output:\n";
                        print_r($output);
                    }
                    if ($return_var != '0') {
                        $error = 'SMBClient copy of discover_domain.vbs to '.$_POST['server'].' has failed';
                        $log_details->message = $error;
                        stdlog($log_details);
                    } else {
                        $log_details->message = 'SMBClient copy of discover_domain.vbs to '.$_POST['server'].' has succeeded';
                        stdlog($log_details);
                    }
                    $command_string = null;
                    $output = null;
                    $return_var = null;
                }

                // copy the windows audit script
                if ($error == '') {
                    $command_string = "smbclient \\\\\\\\".$_POST['server']."\\\\admin$ -U \"".$_POST['windows_domain']."\\".$_POST['windows_username']."%".$_POST['windows_password']."\" -c \"put $filepath/audit_windows.vbs audit_windows.vbs\" 2>&1";
                    exec($command_string, $output, $return_var);
                    if ($display == 'y') {
                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                        echo 'DEBUG - Return Value: '.$return_var."\n";
                        echo "DEBUG - Command Output:\n";
                        print_r($output);
                    }
                    if ($return_var != '0') {
                        $error = 'SMBClient copy of audit_windows.vbs to '.$_POST['server'].' has failed';
                        $log_details->message = $error;
                        stdlog($log_details);
                    } else {
                        $log_details->message = 'SMBClient copy of audit_windows.vbs to '.$_POST['server'].' has succeeded';
                        stdlog($log_details);
                    }
                    $command_string = null;
                    $output = null;
                    $return_var = null;
                }

                // start the domain audit
                if ($error == '') {
                    $command_string = "screen -D -m /usr/local/open-audit/other/winexe-static -U ".$_POST['windows_domain']."/".$_POST['windows_username']."%".$_POST['windows_password']." --uninstall //".$_POST['server']." \"cscript //nologo c:\windows\discover_domain.vbs local_domain=LDAP://".$_POST['windows_domain']." number_of_audits=".$_POST['number_of_audits']." script_name=c:\windows\audit_windows.vbs url=".$url." debugging=0 struser=".$_POST['windows_domain']."\\".$_POST['windows_username']." strpass=".$_POST['windows_password']." \" ";
                    exec($command_string, $output, $return_var);
                    if ($display == 'y') {
                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                        echo 'DEBUG - Return Value: '.$return_var."\n";
                        // echo "DEBUG - Command Output:\n";  // nooutput because of use of 'screen' command
                        // print_r($output);
                    }
                    if ((string) $return_var !== '0') {
                        $error = 'Attempt to run discover_domain.vbs on '.$this->input->post('server').' has failed';
                        $log_details->message = $error;
                        stdlog($log_details);
                    } else {
                        $log_details->message = 'Attempt to run discover_domain.vbs on '.$this->input->post('server').' has succeeded';
                        stdlog($log_details);
                    }
                    $command_string = null;
                    $output = null;
                    $return_var = null;
                }
            } // end of Linux domain audit

            unset($log_details);

            if ($display != 'y') {
                redirect('admin/view_log');
            }
        } // end of submit / not submit
    }

    public function discover_subnet()
    {
        set_time_limit(600);
        if (!isset($_POST['submit'])) {
            // must be an admin to access this page
            $this->load->model('m_oa_user');
            $this->m_oa_user->validate_user();
            if ($this->user->user_admin != 'y') {
                if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                    redirect($_SERVER['HTTP_REFERER']);
                } else {
                    redirect('main/list_groups');
                }
            }

            $this->data['apppath'] = APPPATH;
            $this->data['image_path'] = base_url().'theme-'.$this->user->user_theme.'/'.$this->user->user_theme.'-images/';
            $this->load->model("m_oa_report");
            $this->load->model('m_oa_general');
            $this->data['menu'] = $this->m_oa_report->list_reports_in_menu();

            // show the form to accept scan details
            $this->data['type'] = "";
            $this->data['credentials'] = new stdClass();
            if ($this->uri->segment(3) and $this->uri->segment(3)) {
                if (is_numeric($this->uri->segment(3))) {
                    $this->data['system_id'] = $this->uri->segment(3);
                    $this->data['credentials'] = $this->m_system->get_credentials($this->data['system_id']);
                    $this->data['ip_address'] = $this->ip_address_from_db($this->m_oa_general->get_attribute('system', 'man_ip_address', $this->data['system_id']));
                    $this->data['type'] = 'device';
                } else {
                    $this->data['system_id'] = "";
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
            // process the scan details and call the discovery script

            $return_var = "";
            $output = "";
            $display = '';
            $timestamp = date('Y-m-d H:i:s');

            if ($this->input->post('debug') and strpos($_SERVER['HTTP_ACCEPT'], 'html')) {
                $display = 'y';
                echo "<pre>\n";
            }
            $credentials = new stdClass();

            // all logging will be as below, only the message will change
            $log_details = new stdClass();
            $log_details->severity = 7;
            $log_details->file = 'system';
            $log_details->display = $display;

            // create a network group if provided a subnet that includes a slash in the string and
            // auto create network is set in the config to 'y'
            if (isset($_POST['subnet_range']) and $_POST['subnet_range'] > '') {
                $subnet_range = $_POST['subnet_range'];
                $credentials->man_ip_address = $_POST['subnet_range'];
            } else {
                $subnet_range = "";
            }

            $log_details->message = 'Discovery submitted for '.$subnet_range;
            stdlog($log_details);

            // we encode the supplied credentials and store them in the database
            // the script will simply pass back the timestamp and the credentials will be retrieved and used
            $this->load->library('encrypt');

            if (isset($_POST['snmp_community']) and $_POST['snmp_community'] > '') {
                $encode['snmp_community'] = $_POST['snmp_community'];
                $credentials->snmp_community = $_POST['snmp_community'];
            } else {
                $encode['snmp_community'] = '';
            }

            if (isset($_POST['ssh_username']) and $_POST['ssh_username'] > '') {
                $encode['ssh_username'] = $_POST['ssh_username'];
                $credentials->ssh_username = $_POST['ssh_username'];
            } else {
                $encode['ssh_username'] = '';
            }

            if (isset($_POST['ssh_password']) and $_POST['ssh_password'] > '') {
                $encode['ssh_password'] = $_POST['ssh_password'];
                $credentials->ssh_password = $_POST['ssh_password'];
            } else {
                $encode['ssh_password'] = '';
            }

            if (isset($_POST['windows_username']) and $_POST['windows_username'] > '') {
                $encode['windows_username'] = $_POST['windows_username'];
                $credentials->windows_username = $_POST['windows_username'];
            } else {
                $encode['windows_username'] = '';
            }

            if (isset($_POST['windows_password']) and $_POST['windows_password'] > '') {
                $encode['windows_password'] = $_POST['windows_password'];
                $credentials->windows_password = $_POST['windows_password'];
            } else {
                $encode['windows_password'] = '';
            }

            if (isset($_POST['windows_domain']) and $_POST['windows_domain'] > '') {
                $encode['windows_domain'] = $_POST['windows_domain'];
                $credentials->windows_domain = $_POST['windows_domain'];
            } else {
                $encode['windows_domain'] = '';
            }

            if (isset($_POST['network_address']) and $_POST['network_address'] > '') {
                $encode['network_address'] = $_POST['network_address'];
            } else {
                $encode['network_address'] = '';
            }

            if (isset($_POST['type']) and $_POST['type'] == 'device' and
                isset($_POST['system_id']) and $_POST['system_id'] > '') {
                // we are auditing a single device that exists in the DB
                // update the device access credentials
                $this->m_system->update_credentials($credentials, $_POST['system_id']);
            }
            if (isset($this->user->user_full_name)) {
                $encode['last_user'] = $this->user->user_full_name;
            } else {
                $encode['last_user'] = '';
            }
            $encoded = json_encode($encode);
            $credentials = $this->encrypt->encode($encoded);
            $i = 0;
            do {
                if (strpos($credentials, "\"") != false) {
                    $credentials = $this->encrypt->encode($encoded);
                } else {
                    $i = 1;
                }
            } while ($i = 0);

            // TODO - fix this SQL with proper escaping
            $sql = 'INSERT INTO oa_temp (temp_id, temp_name, temp_value, temp_timestamp) VALUES (null, "Subnet Credentials - '.$subnet_range.'", "'.$credentials.'", "'.$timestamp.'")';
            $query = $this->db->query($sql);
            $credentials = "";

            if (strpos($subnet_range, "/")) {
                // we have a subnet_range - if it's not a /32, then test for a group
                $subnet_split = explode("/", $subnet_range);
                if ($subnet_split[1] != "32") {
                    // we have a real subnet_range
                    $subnet_details = network_details($subnet_range);
                    $sql = "SELECT config_value FROM oa_config WHERE config_name = 'auto_create_network_groups' ";
                    $query = $this->db->query($sql);
                    $row = $query->row();
                    if ($row->config_value != 'n') {
                        // we do want to auto create network groups
                        // test if a network group exists with the matching definition
                        $group_dynamic_select = "SELECT distinct(system.system_id) FROM system, sys_hw_network_card_ip WHERE ( sys_hw_network_card_ip.ip_address_v4 >= '".ip_address_to_db($subnet_details->host_min)."' and sys_hw_network_card_ip.ip_address_v4 <= '".ip_address_to_db($subnet_details->host_max)."' and sys_hw_network_card_ip.ip_subnet = '".$subnet_details->netmask."' and sys_hw_network_card_ip.system_id = system.system_id and sys_hw_network_card_ip.timestamp = system.timestamp and system.man_status = 'production') UNION SELECT distinct(system.system_id) FROM system WHERE (system.man_ip_address >= '".ip_address_to_db($subnet_details->host_min)."' and system.man_ip_address <= '".ip_address_to_db($subnet_details->host_max)."' and system.man_status = 'production')";
                        $start = explode(' ', microtime());
                        $sql = "SELECT * FROM oa_group WHERE group_dynamic_select = ? ";
                        $data = array($group_dynamic_select);
                        $query = $this->db->query($sql, $data);
                        if ($query->num_rows() > 0) {
                            // group exists - no need to do anything
                        } else {
                            // group does not exist - insert
                            $log_details->message = "Creating Group for $subnet_range";
                            stdlog($log_details);
                            $sql = "INSERT INTO oa_group (group_id, group_name, group_padded_name, group_dynamic_select, group_parent, group_description, group_category, group_icon) VALUES (null, ?, ?, ?, '1', ?, 'network', 'switch')";
                            $group_name = "Network - ".$subnet_details->network.' / '.$subnet_details->network_slash;
                            $group_padded_name = "Network - ".ip_address_to_db($subnet_details->network);
                            $data = array("$group_name", "$group_padded_name", "$group_dynamic_select", $subnet_details->network);
                            $query = $this->db->query($sql, $data);
                            $insert_id = $this->db->insert_id();
                            // We need to insert an entry into oa_group_user for any Admin level user
                            $sql = "INSERT INTO oa_group_user (SELECT null, user_id, ?, '10' FROM oa_user WHERE user_admin = 'y')";
                            $data = array( $insert_id );
                            $result = $this->db->query($sql, $data);
                            // now we update this specific group
                            // this accounts for if another system has a IP that would fall in this group, but was submitted
                            // without a subnet_range and no matching network group was previously created.
                            // update the group with all systems that match
                            $this->load->model('m_oa_group');
                            $this->m_oa_group->update_specific_group($insert_id);
                        }
                    }
                }
            }

            if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/open-audit/other";
            } else {
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."\\open-audit\\other";
            }

            # if we are supplied a network address, use it
            if (isset($_POST['network_address']) and $_POST['network_address'] > '') {
                if (strpos($_POST['network_address'], '/')) {
                    $i = explode('/', base_url());
                    $temp_network_address = $i[2];
                    $url = str_replace($temp_network_address, $_POST['network_address'], base_url());
                } else {
                    $url = 'http://'.$_POST['network_address'].'/open-audit/';
                }
            # if not, check if we have on in the config and use it
            } elseif (isset($this->config->config['default_network_address']) and $this->config->config['default_network_address'] > '') {
                if (strpos($this->config->config['default_network_address'], '/')) {
                    $i = explode('/', base_url());
                    $temp_network_address = $i[2];
                } else {
                    $temp_network_address = $this->config->item('default_network_address');
                }
                $url = str_replace($temp_network_address, $this->config->config['default_network_address'], base_url());
            # if nothing, then just try the base_url - this will likely use 127.0.0.1 and fail...
            # TODO - fix this
            } else {
                $url = base_url();
            }
            unset($temp_network_address);

            if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
                if ($subnet_range > '') {
                    if ($display == 'y') {
                        // run the script and wait for the output so we can echo it.
                        $command_string = "$filepath/discover_subnet.sh subnet_range=$subnet_range url=".$url."index.php/discovery/process_subnet submit_online=n echo_output=y create_file=n debugging=0 subnet_timestamp=\"$timestamp\" 2>&1";
                        @exec($command_string, $output, $return_var);
                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                        echo 'DEBUG - Return Value: '.$return_var."\n";
                        echo "DEBUG - Command Output:\n";
                        $output_new = str_replace("<", "&lt;", $output);
                        print_r($output_new);

                        if ($return_var != '0') {
                            $error = 'Discovery subnet starting script discover_subnet.sh ('.$subnet_range.') has failed';
                            $log_details->message = $error;
                            stdlog($log_details);
                        } else {
                            $script_result = '';
                            foreach ($output as $line) {
                                $script_result .= $line."\n";
                            }
                            $script_result = preg_replace('/\s+/', ' ', $script_result);
                            $script_result = str_replace("> <", "><", $script_result);
                            $_POST['form_details'] = trim($script_result);
                            $this->process_subnet();
                        }
                        exit();
                    } else {
                        // run the script and continue (do not wait for result)
                        $command_string = "nohup $filepath/discover_subnet.sh subnet_range=$subnet_range url=".$url."index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\"  > /dev/null 2>&1 &";
                        @exec($command_string, $output, $return_var);
                        if ($return_var != '0') {
                            $error = 'Discovery subnet starting script discover_subnet.sh ('.$subnet_range.') has failed';
                            $log_details->message = $error;
                            stdlog($log_details);
                        }
                    }
                    $command_string = null;
                    $output = null;
                    $return_var = null;
                }
            }
            if (php_uname('s') == 'Windows NT') {
                if ($subnet_range > '') {
                    if ($display == 'y') {
                        // run the script and wait for the output so we can echo it.
                        $command_string = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs subnet_range=$subnet_range url=".$url."index.php/discovery/process_subnet submit_online=n echo_output=y create_file=n debugging=0 subnet_timestamp=\"$timestamp\" ";
                        @exec($command_string, $output, $return_var);
                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                        echo 'DEBUG - Return Value: '.$return_var."\n";
                        echo "DEBUG - Command Output:\n";
                        $output_new = str_replace("<", "&lt;", $output);
                        print_r($output_new);

                        if ($return_var != '0') {
                            $error = 'Discovery subnet starting script discover_subnet.sh ('.$subnet_range.') has failed';
                            $log_details->message = $error;
                            stdlog($log_details);
                        } else {
                            $script_result = '';
                            foreach ($output as $line) {
                                $script_result .= $line;
                            }
                            $script_result = preg_replace('/\s+/', ' ', $script_result);
                            $script_result = str_replace("> <", "><", $script_result);
                            $_POST['form_details'] = $script_result;
                            $_POST['debug'] = true;
                            $this->process_subnet();
                        }
                    } else {
                        // run the script and continue (do not wait for result)
                        $command_string = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs subnet_range=$subnet_range url=".$url."index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\" ";
                        pclose(popen($command_string, "r"));
                    }
                }
            }

            unset($log_details);

            if ($display != 'y') {
                // redirect to the log page or the device details
                if (isset($this->data['type']) and $this->data['type'] === 'device') {
                    // function was called from device details page - redirect back there
                    redirect('main/system_display/'.$this->data['system_id']);
                } else {
                    // function was called from Discovery page, redirect to log viewer
                    redirect('admin/view_log');
                }
            }
        }
    }

    public function process_subnet()
    {
        // accept or process the output of the discover subnet script - nmap details
        if (! isset($_POST['form_details'])) {
            $this->load->view('v_process_subnet', $this->data);
        } else {
            $display = '';
            if ($this->input->post('debug') and strpos($_SERVER['HTTP_ACCEPT'], 'html')) {
                $display = 'y';
                echo "<pre>\n";
                echo "DEBUG - Starting process_subnet.\n";
            }

            $this->load->model('m_oa_user');

            if (isset($this->session->userdata['user_id']) and is_numeric($this->session->userdata['user_id'])) {
                $this->user = $this->m_oa_user->get_user_details($this->session->userdata['user_id']);
            }

            // all logging will be as below, only the message will change
            $log_details = new stdClass();
            $log_details->severity = 7;
            $log_details->file = 'system';
            $log_details->display = $display;

            $this->load->helper('url');
            $this->load->model('m_oa_config');
            $this->m_oa_config->load_config();

            if ($display == 'y') {
                echo 'DEBUG - <a href=\''.base_url()."index.php/discovery/discover_subnet'>Back to input page</a>\n";
                echo 'DEBUG - <a href=\''.base_url()."index.php'>Front Page</a>\n";
            }

            if ((php_uname('s') === 'Linux') or (php_uname('s') === 'Darwin')) {
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/open-audit/other';
            }

            if (php_uname('s') === 'Windows NT') {
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__))))).'\\open-audit\\other';
            }

            $this->load->helper('xml');
            $xml_input = $_POST['form_details'];
            try {
                $xml = new SimpleXMLElement($xml_input);
            } catch (Exception $error) {
                // not a valid XML string
                $log_details->message = 'Invalid XML input for discovery from '.$_SERVER['REMOTE_ADDR'];
                stdlog($log_details);
                exit;
            }

            $this->load->helper('url');
            $this->load->library('encrypt');
            if (extension_loaded('snmp')) {
                $this->load->helper('snmp');
                $this->load->helper('snmp_oid');
            }
            $this->load->model('m_system');
            $this->load->model('m_network_card');
            $this->load->model('m_ip_address');
            $this->load->model('m_virtual_machine');
            $this->load->model('m_module');
            $this->load->model('m_oa_group');
            $this->load->model('m_oa_general');
            $this->load->model('m_sys_man_audits');
            $this->load->model('m_alerts');
            $timestamp = date('Y-m-d H:i:s');

            $count = 0;
            foreach ($xml->children() as $details) {
                $details = (object) $details;

                if (isset($details->complete) and $details->complete == 'y') {
                    // delete the credential set
                    if ($display == 'y') {
                        echo "DEBUG - ----------------------------------------------------\n";
                    }
                    print_r($details);
                    sleep(5);
                    $log_details->message = 'Deleting credential set for '.$details->subnet_range.' submitted on '.$details->subnet_timestamp;
                    stdlog($log_details);
                    $sql = 'DELETE FROM oa_temp WHERE temp_name = \'Subnet Credentials - '.$details->subnet_range.'\' and temp_timestamp = \''.$details->subnet_timestamp.'\' ';
                    $query = $this->db->query($sql);
                } else {
                    // process the device result
                    if ($display == 'y') {
                        $details->show_output = true;
                        echo "DEBUG - ----------------------------------------------------\n";
                        print_r($details);
                    }

                    $log_details->message = 'Start processing '.$details->man_ip_address;
                    stdlog($log_details);

                    $count++;
                    $details->timestamp = $timestamp;
                    $details->last_seen = $timestamp;
                    $details->last_user = '';

                    $details->domain = '';
                    $details->audits_ip = ip_address_to_db($_SERVER['REMOTE_ADDR']);
                    $details->hostname = '';
                    if (!filter_var($details->man_ip_address, FILTER_VALIDATE_IP)) {
                        $details->hostname = $details->man_ip_address;
                        $details->man_ip_address = gethostbyname($details->man_ip_address);
                        if (!filter_var($details->man_ip_address, FILTER_VALIDATE_IP)) {
                            $details->man_ip_address = '0.0.0.0';
                        }
                    } else {
                        $details->hostname = strtolower(gethostbyaddr($details->man_ip_address));
                    }

                    if (!filter_var($details->hostname, FILTER_VALIDATE_IP)) {
                        if (strpos($details->hostname, ".") != false) {
                            // we have a domain returned
                            $details->fqdn = strtolower($details->hostname);
                            $i = explode(".", $details->hostname);
                            $details->hostname = $i[0];
                            unset($i[0]);
                            $details->domain = implode(".", $i);
                        }
                    }

                    // process what little data we have and try to make a system_key
                    $details->system_key = '';
                    $details->system_key = $this->m_system->create_system_key($details);

                    // we have a system_key (best we can) - see if we can find an existing device
                    $details->system_id = '';
                    $details->system_id = $this->m_system->find_system($details);

                    // If we find a device and we're in DEBUG, output a result line.
                    if ($display == 'y') {
                        if (isset($details->system_id) and $details->system_id != '') {
                            echo 'DEBUG - existing system key found for System ID: <a href=\''.base_url().'index.php/main/system_display/'.$details->system_id.'\'>'.$details->system_id."</a>.\n";
                        }
                    }

                    // device specific credentials
                    $device_specific_credentials = $this->m_system->get_access_details($details->system_id);
                    $device_specific_credentials = $this->encrypt->decode($device_specific_credentials);
                    $specific = json_decode($device_specific_credentials);

                    // default Open-AudIT credentials
                    $default = $this->m_oa_config->get_credentials();

                    // supplied credentials
                    $sql = 'SELECT temp_value FROM oa_temp WHERE temp_name = \'Subnet Credentials - '.$details->subnet_range.'\' and temp_timestamp = \''.$details->subnet_timestamp.'\' orDER BY temp_id DESC LIMIT 1';
                    $query = $this->db->query($sql);
                    $row = $query->row();
                    $supplied_credentials = @$row->temp_value;
                    $supplied = new stdClass();
                    if (isset($supplied_credentials) and $supplied_credentials > '') {
                        $supplied_credentials = $this->encrypt->decode($supplied_credentials);
                        $supplied_credentials = json_decode($supplied_credentials);

                        $supplied->snmp_community =   @$supplied_credentials->snmp_community;
                        $supplied->snmp_version =    @$supplied_credentials->snmp_version;
                        $supplied->snmp_port =      @$supplied_credentials->snmp_port;
                        $supplied->ssh_username =    @$supplied_credentials->ssh_username;
                        $supplied->ssh_password =    @$supplied_credentials->ssh_password;
                        $supplied->windows_username = @$supplied_credentials->windows_username;
                        $supplied->windows_password = @$supplied_credentials->windows_password;
                        $supplied->windows_domain =   @$supplied_credentials->windows_domain;
                        $details->last_seen_user =  @$supplied_credentials->last_user;
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
                    $log_details->user = $details->last_seen_user;

                    // create the URL for use by the audit scripts
                    # use $_POST if supplied
                    if (isset($_POST['network_address']) and $_POST['network_address'] > '') {
                        $temp = explode('/', base_url());
                        $url = str_replace($temp[2], $_POST['network_address'], base_url());
                    # use $details->network_address if stored in DB
                    } elseif (isset($details->network_address) and $details->network_address != '') {
                        $temp = explode('/', base_url());
                        $url = str_replace($temp[2], $details->network_address, base_url());
                    # use the open-audit default config value
                    } elseif (isset($this->config->config['default_network_address']) and $this->config->config['default_network_address'] > '') {
                        $temp = explode('/', base_url());
                        $url = str_replace($temp[2], $this->config->config['default_network_address'], base_url());
                    # use the PHP function to guess as a last resort
                    } else {
                        $url = base_url();
                    }
                    unset($details->network_address);

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

                    // output to log file and DEBUG the status of the three main services
                    $log_details->message = 'WMI Status is '.$details->wmi_status.' on '.$details->man_ip_address;
                    stdlog($log_details);

                    $log_details->message = 'SNMP Status is '.$details->snmp_status.' on '.$details->man_ip_address;
                    stdlog($log_details);

                    $log_details->message = 'SSH Status is '.$details->ssh_status.' on '.$details->man_ip_address;
                    stdlog($log_details);

                    // try to get more information using SNMP (if ext loaded in PHP)
                    if (extension_loaded('snmp') and $details->snmp_status == 'true') {
                        $log_details->message = 'Attempting SNMP discovery on '.$details->man_ip_address;
                        stdlog($log_details);

                        // get rid of os_* as nmap only guesses
                        $details->os_group = '';
                        $details->os_family = '';
                        $details->os_name = '';

                        $temp_array = get_snmp($details);
                        $details = $temp_array['details'];
                        $network_interfaces = $temp_array['interfaces'];
                        $modules = $temp_array['modules'];
                        unset($guests);
                        if (isset($temp_array['guests']) and count($temp_array['guests']) > 0) {
                            $guests = $temp_array['guests'];
                        }
                        if (isset($network_interfaces) and count($network_interfaces > 0)) {
                            foreach ($network_interfaces as $interface) {
                                if (isset($interface->net_mac_address) and (string) $interface->net_mac_address != '') {
                                    // we have a mac address, insert it into the $details object
                                    $mac_address = strtolower((string) $interface->net_mac_address);
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
                        if ($display == 'y') {
                            echo 'DEBUG - Command Executed: '.$command_string."\n";
                            echo 'DEBUG - Return Value: '.$return_var."\n";
                            echo "DEBUG - Command Output:\n";
                            print_r($output);
                        }
                        if ($return_var != '0') {
                            $error = 'Ipmitools not detected when discovering '.$details->man_ip_address;
                            $log_details->message = $error;
                            stdlog($log_details);
                        } else {
                            $log_details->message = 'Ipmitools detected when discovering '.$details->man_ip_address;
                            stdlog($log_details);
                        }
                        $command_string = null;
                        $output = null;
                        $return_var = null;

                        if ($error == '') {
                            // ipmitools are installed
                            // Attempt to get MAC Address
                            $command_string = 'ipmitool -H '.$details->man_ip_address.' -U '.$default->default_ipmi_username.' -P '.$default->default_ipmi_password.' lan print 2>/dev/null | grep "^MAC Address" | cut -d":" -f2- | cut -d" " -f2';
                            exec($command_string, $output, $return_var);
                            if ($display == 'y') {
                                echo 'DEBUG - Command Executed: '.$command_string."\n";
                                echo 'DEBUG - Return Value: '.$return_var."\n";
                                echo "DEBUG - Command Output:\n";
                                print_r($output);
                            }
                            if ($return_var != '0') {
                                $error = 'Ipmitools could not retrieve MAC Address for '.$details->man_ip_address;
                                $log_details->message = $error;
                                stdlog($log_details);
                            }
                            $command_string = null;
                            $return_var = null;

                            if ($error == '' and isset($output[0]) and $output[0] != '') {
                                $log_details->message = 'Ipmitools successfully retrieved MAC Address from '.$details->man_ip_address;
                                stdlog($log_details);
                                // We have a response (containing a MAC Address) from the target
                                $details->type = 'remote access controller';
                                if ($details->mac_address == '') {
                                    $details->mac_address = strtolower($output[0]);
                                }
                                $output = null;

                                // attempt to retrieve the Subnet Mask
                                $command_string = 'ipmitool -H '.$details->man_ip_address.' -U '.$default->default_ipmi_username.' -P '.$default->default_ipmi_password.' lan print 2>/dev/null | grep "Subnet Mask" | cut -d":" -f2 ';
                                exec($command_string, $output, $return_var);
                                if ($display == 'y') {
                                    echo 'DEBUG - Command Executed: '.$command_string."\n";
                                    echo 'DEBUG - Return Value: '.$return_var."\n";
                                    echo "DEBUG - Command Output:\n";
                                    print_r($output);
                                }
                                if (isset($output[0]) and trim($output[0]) != '') {
                                    $details->subnet = trim($output[0]);
                                }
                                $command_string = null;
                                $output = null;
                                $return_var = null;

                                // attempt to retrieve the Manufacturer
                                $command_string = 'ipmitool -H '.$details->man_ip_address.' -U '.$default->default_ipmi_username.' -P '.$default->default_ipmi_password.' fru list 2>/dev/null | grep "Product Manufacturer" | cut -d":" -f2 ';
                                exec($command_string, $output, $return_var);
                                if ($display == 'y') {
                                    echo 'DEBUG - Command Executed: '.$command_string."\n";
                                    echo 'DEBUG - Return Value: '.$return_var."\n";
                                    echo "DEBUG - Command Output:\n";
                                    print_r($output);
                                }
                                if (isset($output[0]) and trim($output[0]) != '') {
                                    $details->manufacturer = trim($output[0]);
                                }
                                $command_string = null;
                                $output = null;
                                $return_var = null;

                                // attempt to retrieve the Model
                                $command_string = 'ipmitool -H '.$details->man_ip_address.' -U '.$default->default_ipmi_username.' -P '.$default->default_ipmi_password.' fru list 2>/dev/null | grep "Product Name" | cut -d":" -f2 ';
                                exec($command_string, $output, $return_var);
                                if ($display == 'y') {
                                    echo 'DEBUG - Command Executed: '.$command_string."\n";
                                    echo 'DEBUG - Return Value: '.$return_var."\n";
                                    echo "DEBUG - Command Output:\n";
                                    print_r($output);
                                }
                                if (isset($output[0]) and trim($output[0]) != '') {
                                    $details->model = trim($output[0]);
                                }
                                $command_string = null;
                                $output = null;
                                $return_var = null;

                                // attempt to retrieve the Serial
                                $command_string = 'ipmitool -H '.$details->man_ip_address.' -U '.$default->default_ipmi_username.' -P '.$default->default_ipmi_password.' fru list 2>/dev/null | grep "Product Serial" | cut -d":" -f2 ';
                                exec($command_string, $output, $return_var);
                                if ($display == 'y') {
                                    echo 'DEBUG - Command Executed: '.$command_string."\n";
                                    echo 'DEBUG - Return Value: '.$return_var."\n";
                                    echo "DEBUG - Command Output:\n";
                                    print_r($output);
                                }
                                if (isset($output[0]) and trim($output[0]) != '') {
                                    $details->serial = trim($output[0]);
                                }
                                $command_string = null;
                                $output = null;
                                $return_var = null;
                            }
                        }
                        $command_string = null;
                        $output = null;
                        $return_var = null;
                        $error = "";
                    }

                    // remove all the null, false and Empty Strings but leaves 0 (zero) values
                    // $details = (object) array_filter((array) $details, 'strlen' );

                    if ((isset($details->snmp_oid)) and ($details->snmp_oid > '')) {
                        // we received a result from SNMP, use this data to update or insert
                        $details->last_seen_by = 'snmp';
                        $details->audits_ip = '127.0.0.1';

                        // new for 1.2.2 - after we get additional SNMP data, re-check if we match an existing device
                        $details->system_key = $this->m_system->create_system_key($details);
                        $details->system_id = $this->m_system->find_system($details);

                        if (isset($details->system_id) and $details->system_id != '') {
                            // we have a system_id and snmp details to update
                            $log_details->message = 'SNMP update for '.$details->man_ip_address.' (System ID '.$details->system_id.')';
                            stdlog($log_details);
                            $this->m_system->update_system($details);
                        } else {
                            // we have a new system
                            $details->system_id = $this->m_system->insert_system($details);
                            $this->m_alerts->generate_alert($details->system_id, 'system', $details->system_id, 'system detected', date('Y-m-d H:i:s'));
                            $log_details->message = 'SNMP insert for '.$details->man_ip_address.' (System ID '.$details->system_id.')';
                            stdlog($log_details);
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

                        // update any network interfaces and ip addresses retrieved by SNMP
                        if (isset($network_interfaces) and is_array($network_interfaces) and count($network_interfaces) > 0) {
                            foreach ($network_interfaces as $input) {
                                $this->m_network_card->process_network_cards($input, $details);

                                if (isset($input->ip_addresses) and is_array($input->ip_addresses)) {
                                    foreach ($input->ip_addresses as $ip_input) {
                                        $ip_input = (object) $ip_input;
                                        $this->m_ip_address->process_addresses($ip_input, $details);
                                    }
                                }
                            }
                            // finish off with updating any network IPs that don't have a matching interface
                            $this->m_ip_address->update_missing_interfaces($details->system_id);
                        }

                        // insert any modules
                        if (isset($modules) and count($modules) > 0) {
                            foreach ($modules as $input) {
                                $this->m_module->process_module($input, $details);
                            }
                        }

                        // insert any found virtual machines
                        if (isset($guests) and is_array($guests) and count($guests) > 0) {
                            foreach ($guests as $guest) {
                                $this->m_virtual_machine->process_vm($guest, $details);
                            }
                        }
                        $log_details->message = 'SNMP credential update for '.$details->man_ip_address.' (System ID '.$details->system_id.')';
                        stdlog($log_details);
                    } else {
                        // we received a result from nmap only, use this data to update or insert
                        $details->last_seen_by = 'nmap';
                        if (isset($details->system_id) and $details->system_id != '') {
                            // we have a system id and nmap details to update
                            $this->m_system->update_system($details);
                            $log_details->message = "Nmap update for $details->man_ip_address (System ID $details->system_id)";
                            stdlog($log_details);
                        } else {
                            // we have a new system
                            $details->system_id = $this->m_system->insert_system($details);
                            $log_details->message = "Nmap insert for $details->man_ip_address (System ID ".$details->system_id.")";
                            stdlog($log_details);
                            $this->m_alerts->generate_alert($details->system_id, 'system', $details->system_id, 'system detected', date('Y-m-d H:i:s'));
                        }
                    }

                    // Insert an audit
                    $this->m_sys_man_audits->insert_audit($details);

                    // Update the groups
                    $this->m_oa_group->update_system_groups($details);

                    // We got nmap only or nmap and snmp details, either way, $details->system_id is now set
                    // Output to DEBUG
                    if ($display == 'y') {
                        echo "DEBUG - System ID <a href='".base_url()."index.php/main/system_display/".$details->system_id."'>".$details->system_id."</a>\n";
                    }

                    // Windows WMI audit - audit_windows.vbs
                    if ($details->wmi_status == "true" and $details->windows_username > '' and $details->windows_domain > '' and $details->windows_password > '') {
                        $log_details->message = 'Attempt Windows audit for '.$details->man_ip_address;
                        stdlog($log_details);

                        // Auditing a Windows target device from a Linux Open-AudIT Server
                        if (php_uname('s') == 'Linux') {
                            $error = "";
                            $command_string = 'smbclient \\\\\\\\'.$details->man_ip_address.'\\\\admin$ -U "'.str_replace("'", "", escapeshellarg($details->windows_domain)).'\\\\'.str_replace("'", "", escapeshellarg($details->windows_username)).'%'.str_replace("'", "", escapeshellarg($details->windows_password)).'" -c "put '.$filepath.'/audit_windows.vbs audit_windows.vbs" 2>&1';
                            exec($command_string, $output, $return_var);
                            if ($display == 'y') {
                                echo 'DEBUG - Command Executed: '.$command_string."\n";
                                echo 'DEBUG - Return Value: '.$return_var."\n";
                                echo "DEBUG - Command Output:\n";
                                print_r($output);
                            }
                            if ($return_var != '0') {
                                $error = "SMBClient copy of audit_windows.vbs to $details->man_ip_address has failed";
                                $log_details->message = $error;
                                stdlog($log_details);
                            } else {
                                $log_details->message = "SMBClient copy of audit_windows.vbs to $details->man_ip_address has succeeded";
                                stdlog($log_details);
                            }
                            $command_string = null;
                            $output = null;
                            $return_var = null;

                            if ($error == '') {
                                $command_string = "screen -D -m /usr/local/open-audit/other/winexe-static -U ".str_replace("'", "", escapeshellarg($details->windows_domain))."/".str_replace("'", "", escapeshellarg($details->windows_username))."%".str_replace("'", "", escapeshellarg($details->windows_password))." --uninstall //".str_replace("'", "", escapeshellarg($details->man_ip_address))." \"cscript c:\windows\audit_windows.vbs submit_online=y create_file=n strcomputer=".str_replace("'", "", escapeshellarg($details->man_ip_address))." url=".$url."index.php/system/add_system debugging=3 system_id=".$details->system_id."\" ";

                                exec($command_string, $output, $return_var);
                                if ($display == 'y') {
                                    echo 'DEBUG - Command Executed: '.$command_string."\n";
                                    echo 'DEBUG - Return Value: '.$return_var."\n";
                                    // echo "DEBUG - Command Output:\n"; // no output because of use of 'screen' command
                                    // print_r($output);
                                }

                                if ($return_var != '0') {
                                    $error = "Attempting to run audit_windows.vbs on $details->man_ip_address has failed";
                                    $log_details->message = $error;
                                    stdlog($log_details);
                                } else {
                                    $log_details->message = "Attempt to run audit_windows.vbs on $details->man_ip_address has succeeded";
                                    stdlog($log_details);

                                    // also update the device credentials
                                    $credentials = new stdClass();
                                    $credentials->ip_address = $details->man_ip_address;
                                    $credentials->windows_username = $details->windows_username;
                                    $credentials->windows_password = $details->windows_password;
                                    $credentials->windows_domain = $details->windows_domain;
                                    $this->m_system->update_credentials($credentials, $details->system_id);
                                    unset($credentials);
                                    $log_details->message = "Windows credential update for $details->man_ip_address (System ID $details->system_id)";
                                    stdlog($log_details);
                                }
                                $command_string = null;
                                $output = null;
                                $return_var = null;
                            }
                        }

                        // Auditing a Windows target device from a Windows Open-AudIT Server
                        if (php_uname('s') == 'Windows NT') {
                            $log_details->message = "Windows audit for $details->man_ip_address (System ID $details->system_id)";
                            stdlog($log_details);

                            if ($display == 'y') {
                                $script_string = "$filepath\\audit_windows.vbs strcomputer=".$details->man_ip_address." submit_online=y create_file=n struser=".$details->windows_domain."\\".$details->windows_username." strpass=".$details->windows_password." url=".$url."index.php/system/add_system debugging=3 system_id=".$details->system_id;
                                $command_string = "%comspec% /c start /b cscript //nologo ".$script_string;
                                exec($command_string, $output, $return_var);
                                echo 'DEBUG - Command Executed: '.$command_string."\n";
                                echo 'DEBUG - Return Value: '.$return_var."\n";
                                echo "DEBUG - Command Output:\n";

                                if ($return_var != '0') {
                                    $error = "Attempt to run audit_windows.vbs on $details->man_ip_address has failed";
                                    $log_details->message = $error;
                                    stdlog($log_details);
                                } else {
                                    $log_details->message = "Attempt to run audit_windows.vbs on $details->man_ip_address has succeeded";
                                    stdlog($log_details);
                                    // also update the device credentials
                                    $credentials = new stdClass();
                                    $credentials->ip_address = $details->man_ip_address;
                                    $credentials->windows_username = $details->windows_username;
                                    $credentials->windows_password = $details->windows_password;
                                    $credentials->windows_domain = $details->windows_domain;
                                    $this->m_system->update_credentials($credentials, $details->system_id);
                                    unset($credentials);
                                    $log_details->message = "Windows credential update for $details->man_ip_address (System ID $details->system_id)";
                                    stdlog($log_details);
                                }
                                $output = null;
                                $return_var = null;
                            } else {
                                $script_string = "$filepath\\audit_windows.vbs strcomputer=".$details->man_ip_address." submit_online=y create_file=n struser=".$details->windows_domain."\\".$details->windows_username." strpass=".$details->windows_password." url=".$url."index.php/system/add_system debugging=0  system_id=".$details->system_id;
                                $command_string = "%comspec% /c start /b cscript //nologo ".$script_string." &";
                                pclose(popen($command_string, "r"));
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
                                $log_details->message = "Windows credential update for $details->man_ip_address (System ID $details->system_id)";
                                stdlog($log_details);
                            }
                            $command_string = null;
                        }
                    }

                    if ($details->ssh_status == 'true' and
                        isset($details->sysDescr) and
                        stripos($details->sysDescr, 'dd-wrt') !== false) {
                        # we have a DD-WRT based system with SSH open
                        # run some DD-WRT specific commands
                        $ssh_command = "sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ".escapeshellarg($details->ssh_username)."@".escapeshellarg($details->man_ip_address)." nvram get DD_BOARD";
                        $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                        if ($ssh_result['status'] == 0) {
                            # success
                            $temp_array = explode(' ', end($ssh_result['output']));
                            $details->manufacturer = $temp_array[0];
                            if (trim($details->manufacturer) == 'TPLINK') {
                                $details->manufacturer = "TP-Link Technology";
                            }
                            $details->model = $temp_array[1];
                            unset($temp_array);
                            $details->last_seen_by = 'audit';

                            $ssh_command = "sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ".escapeshellarg($details->ssh_username)."@".escapeshellarg($details->man_ip_address)." cat /etc/motd | grep DD-WRT";
                            $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                            if ($ssh_result['status'] == 0) {
                                $details->os_name = trim(end($ssh_result['output']));
                            }

                            $details->os_group = 'linux';
                            $details->os_family = 'DD-WRT';

                            $log_details->message = "DD-WRT ssh audit update for $details->man_ip_address (System ID $details->system_id)";
                            stdlog($log_details);
                            $this->m_system->update_system($details);
                        } else {
                            $log_details->message = 'DD-WRT ssh audit attempted but failed for '.$details->man_ip_address;
                            stdlog($log_details);
                        }
                    }

                    // SSH based audit (usually Linux, Unix, OSX, AIX or ESX)
                    if ($details->ssh_status == "true" and (!isset($details->sysDescr) or (isset($details->sysDescr) and stripos($details->sysDescr, 'dd-wrt') === false))) {
                        $error = '';
                        if ($details->ssh_username == '' or $details->ssh_password == '') {
                            $script_string = "audit_linux.sh strcomputer=".$details->man_ip_address." submit_online=y create_file=n struser=".$details->ssh_username." strpass=".$details->ssh_password." debugging=0";
                            $log_details->message = "No credentials supplied for SSH audit for $details->man_ip_address (System ID $details->system_id)";
                            stdlog($log_details);
                        } else {
                            if (php_uname('s') == 'Linux') {
                                // Auditing a target device from a Linux Open-AudIT Server
                                if ($display == 'y') {
                                    echo "DEBUG - Attempting SSH audit.\n";
                                    echo "DEBUG - struser: ".$details->ssh_username."\n";
                                    echo "DEBUG - strpass: ".$details->ssh_password."\n";
                                }
                                $ssh_command = "sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ".escapeshellarg($details->ssh_username)."@".escapeshellarg($details->man_ip_address)." uname ";
                                $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                                if ($ssh_result['status'] != '0') {
                                    $error = 'Audit routine for SSH audit on '.$details->man_ip_address.' failed to run uname on target';
                                    $log_details->message = $error;
                                    stdlog($log_details);
                                    if ($display == 'y') {
                                        echo "DEBUG - Running with 'ssh -v' for your inspection. Possible credential failure.\n";
                                        $ssh_command = "sshpass ssh -v -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ".escapeshellarg($details->ssh_username)."@".escapeshellarg($details->man_ip_address)." uname 2>&1";
                                        $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                                    }
                                } else {
                                    // Linux, Darwin, AIX, VMKernel
                                    if (isset($ssh_result['output'][0]) and $ssh_result['output'][0] > '') {
                                        $remote_os = $ssh_result['output'][0];
                                    } else {
                                        $remote_os = "";
                                    }
                                    if ($display == 'y') {
                                        echo "DEBUG - Remote OS: ".$remote_os."\n";
                                    }
                                    unset($ssh_command);
                                    unset($ssh_result);

                                    if (strtolower($remote_os) === 'linux') {
                                        $audit_script = 'audit_linux.sh';
                                    }
                                    if (strtolower($remote_os) === 'darwin') {
                                        $audit_script = 'audit_osx.sh';
                                    }
                                    if (strtolower($remote_os) === 'aix') {
                                        $audit_script = 'audit_aix.sh';
                                    }
                                    if (strtolower($remote_os) === 'vmkernel') {
                                        $audit_script = 'audit_esxi.sh';
                                    }

                                    if ($error == '' and $audit_script != '') {
                                        $log_details->message = 'Attempting SSH audit for discovery on '.$details->man_ip_address.' ('.$remote_os.')';
                                        stdlog($log_details);

                                        // Attempt to copy the audit script
                                        $ssh_command = 'sshpass scp -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null '.$filepath.'/'.$audit_script.' '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).':/tmp/ ';
                                        $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                                        if ($ssh_result['status'] != '0') {
                                            $error = 'SSH copy of '.$audit_script.' to '.$details->man_ip_address.' has failed';
                                            $log_details->message = $error;
                                            stdlog($log_details);
                                            exit();
                                        }
                                        unset($ssh_command);
                                        unset($ssh_result);

                                        // Attempt to chmod the script so it's executable
                                        if ($error == '') {
                                            $ssh_command = "sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ".escapeshellarg($details->ssh_username)."@".escapeshellarg($details->man_ip_address)." chmod 777 /tmp/".$audit_script.' ';
                                            $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                                            if ($ssh_result['status'] != '0') {
                                                $error = 'SSH chmod command for '.$remote_os.'audit script on '.$details->man_ip_address.' failed';
                                                $log_details->message = $error;
                                                stdlog($log_details);
                                                exit();
                                            }
                                            unset($ssh_command);
                                            unset($ssh_result);
                                        }

                                        // Attempt to determine if SUDO is present on target system
                                        if ($error == '' and strtolower($details->ssh_username) != 'root') {
                                            $ssh_command = 'sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).' which sudo ';
                                            $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                                            if ($ssh_result['status'] != '0') {
                                                $log_details->message = 'SSH which sudo command for '.$remote_os.' audit script on '.$details->man_ip_address.' failed';
                                                stdlog($log_details);
                                            }
                                            if (isset($ssh_result['output'][0]) and $ssh_result['output'][0] != '') {
                                                $sudo = $ssh_result['output'][0];
                                            } else {
                                                $sudo = '';
                                            }
                                            unset($ssh_command);
                                            unset($ssh_result);
                                        } else {
                                            $sudo = '';
                                        }

                                        // Attempt to run the audit script
                                        if ($error == '') {
                                            if (strtolower($remote_os) != 'vmkernel') {
                                                // Exclude VMware ESX as it does not have a usable wget to send post-data back to Open-AudIT
                                                if ($sudo != '' and $details->ssh_username != 'root') {
                                                    $ssh_command = 'sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).' "echo '.escapeshellarg($details->ssh_password).' | '.$sudo.' -S /tmp/'.$audit_script.' submit_online=y create_file=n url='.$url.'index.php/system/add_system debugging=1 system_id='.$details->system_id.'" ';
                                                    $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);

                                                    #$ssh_command = 'sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).' "'.$sudo.' -S /tmp/'.$audit_script.' submit_online=y create_file=n url='.$url.'index.php/system/add_system debugging=1 system_id='.$details->system_id.'" ';

                                                    # for other items we call 'run_ssh', but for this one we need to pass the password through TWICE.
                                                    # once for the SSH connection and once for the sudo call
                                                    ############### START
                                                    // $descriptorspec = array(
                                                    //     0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
                                                    //     1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
                                                    //     2 => array("file", "/dev/null", "a"), // stderr is a file to write to
                                                    // );
                                                    // $cwd = '/tmp';
                                                    // $env = array();
                                                    // $return = array('output' => '', 'status' => '');
                                                    // $process = proc_open($ssh_command, $descriptorspec, $pipes, $cwd, $env);
                                                    // $ssh_result['status'] = '';
                                                    // if (is_resource($process)) {
                                                    //     fwrite($pipes[0], $details->ssh_password);
                                                    //     # below is the second pipe of the password
                                                    //     sleep(3);
                                                    //     fwrite($pipes[0], $details->ssh_password);
                                                    //     # and close...
                                                    //     fclose($pipes[0]);
                                                    //     $temp = stream_get_contents($pipes[1]);
                                                    //     $return['output'] = explode("\n", $temp);
                                                    //     if (end($return['output']) == '') {
                                                    //         unset($return['output'][count($return['output'])-1]);
                                                    //     }
                                                    //     fclose($pipes[1]);
                                                    //     $ssh_result['status'] = proc_close($process);
                                                    // }
                                                    // if ($display == 'y') {
                                                    //     echo 'DEBUG - Command Executed: '.$ssh_command."\n";
                                                    //     echo 'DEBUG - Return Value: '.$ssh_result['status']."\n";
                                                    //     echo "DEBUG - Command Output:\n";
                                                    //     $formatted_output = htmlentities($temp);
                                                    //     $formatted_output = explode("\n", $formatted_output);
                                                    //     if (end($formatted_output) == '') {
                                                    //         unset($formatted_output[count($formatted_output)-1]);
                                                    //     }
                                                    //     print_r($formatted_output);
                                                    // }
                                                    ############### END

                                                    if ($ssh_result['status'] != '0') {
                                                        $error = 'SSH audit command for '.$remote_os.' audit using sudo on '.$details->man_ip_address.' failed. Attempting to run without sudo.';
                                                        $log_details->message = $error;
                                                        stdlog($log_details);
                                                        $ssh_command = 'sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).'  /tmp/'.$audit_script.' submit_online=y create_file=n url='.$url.'index.php/system/add_system debugging=3 system_id='.$details->system_id.'" ';
                                                        $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                                                        if ($ssh_result['status'] != '0') {
                                                            $error = 'SSH audit command for '.$remote_os.' audit not using sudo on '.$details->man_ip_address.' failed';
                                                            $log_details->message = $error;
                                                            stdlog($log_details);
                                                            exit();
                                                        } else {
                                                            $error = '';
                                                        }
                                                    }
                                                    unset($ssh_command);
                                                    unset($ssh_result);
                                                } else {
                                                    $ssh_command = 'sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).' "/tmp/'.$audit_script.' submit_online=y create_file=n url='.$url.'index.php/system/add_system debugging=1 system_id='.$details->system_id.'" 2>/dev/null';
                                                    $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                                                    if ($ssh_result['status'] != '0') {
                                                        $error = 'SSH audit command for '.$remote_os.' audit script on '.$details->man_ip_address.' failed';
                                                        $log_details->message = $error;
                                                        stdlog($log_details);
                                                    }
                                                }
                                            } else {
                                                # ESXi
                                                $ssh_command = 'sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).' "/tmp/'.$audit_script.' submit_online=y create_file=n debugging=0 echo_output=y system_id='.$details->system_id.'" 2>/dev/null';
                                                $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                                                if ($ssh_result['status'] != '0') {
                                                    $error = 'SSH audit command for ESXi audit script on '.$details->man_ip_address.' failed';
                                                    $log_details->message = $error;
                                                    stdlog($log_details);
                                                } else {
                                                    $script_result = '';
                                                    foreach ($ssh_result['output'] as $line) {
                                                        $script_result .= $line."\n";
                                                    }
                                                    $script_result = preg_replace('/\s+/', ' ', $script_result);
                                                    $script_result = str_replace("> <", "><", $script_result);
                                                    $esx_input = trim($script_result);
                                                    try {
                                                        $esx_xml = new SimpleXMLElement($esx_input);
                                                    } catch (Exception $error) {
                                                        // not a valid XML string
                                                        $log_details->message = 'Invalid XML input for ESX audit script';
                                                        stdlog($log_details);
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

                                                            if (isset($esx_details->system_id) and $esx_details->system_id != '') {
                                                                // we have an existing device
                                                                $esx_details->original_last_seen_by = $this->m_oa_general->get_attribute('system', 'last_seen_by', $esx_details->system_id);
                                                                $esx_details->original_timestamp = $this->m_oa_general->get_attribute('system', 'timestamp', $esx_details->system_id);
                                                                $this->m_system->update_system($esx_details);
                                                                $log_details->message = "ESX update for $esx_details->man_ip_address (System ID $esx_details->system_id)";
                                                                stdlog($log_details);
                                                            } else {
                                                                // we have a new system
                                                                $esx_details->system_id = $this->m_system->insert_system($esx_details);
                                                                $log_details->message = "ESX insert for $esx_details->man_ip_address (System ID $esx_details->system_id)";
                                                                stdlog($log_details);
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
                                                            foreach ($esx_xml->guests->guest as $input) {
                                                                $this->m_virtual_machine->process_vm($input, $details);
                                                            }
                                                        }
                                                    }
                                                }
                                            } // end of ESXi
                                        } // end of run audit script

                                        if ($error == '') {
                                            $log_details->message = 'Successful SSH audit for discovery on '.$details->man_ip_address.' ('.$remote_os.')';
                                            stdlog($log_details);
                                            // also update the device credentials
                                            $credentials = new stdClass();
                                            $credentials->ip_address = $details->man_ip_address;
                                            $credentials->ssh_username = $details->ssh_username;
                                            $credentials->ssh_password = $details->ssh_password;
                                            $this->m_system->update_credentials($credentials, $details->system_id);
                                            unset($credentials);
                                            $log_details->message = 'SSH credential update for '.$details->man_ip_address.' (System ID '.$details->system_id.')';
                                            stdlog($log_details);
                                        }
                                    } // End of if error
                                } // end of uname attempt
                            } // Close Linux server

                            if (php_uname('s') == 'Windows NT') {
                                // Auditing a unix based target device from a Windows Open-AudIT Server
                                $error = '';
                                $audit_script = '';
                                $command_string = "echo y | $filepath\\plink.exe -ssh ".$details->ssh_username."@".$details->man_ip_address." -pw ".$details->ssh_password." exit";
                                exec($command_string, $output, $return_var);
                                if ($display == 'y') {
                                    echo 'DEBUG - Command Executed: '.$command_string."\n";
                                    echo 'DEBUG - Return Value: '.$return_var."\n";
                                    if ($return_var != '0') {
                                        echo "DEBUG - Command Output:\n";
                                        print_r($output);
                                    }
                                }
                                if ($return_var != '0') {
                                    $error = 'Audit routine for SSH audit on '.$details->man_ip_address.' failed to store SSH sig';
                                    $log_details->message = $error;
                                    stdlog($log_details);
                                }
                                $command_string = null;
                                $output = null;
                                $return_var = null;
                                $remote_os = "";

                                if ($error == '') {
                                    $command_string = "$filepath\\plink.exe -ssh ".$details->ssh_username."@".$details->man_ip_address." -pw ".$details->ssh_password." uname";
                                    exec($command_string, $output, $return_var);
                                    if ($display == 'y') {
                                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                                        echo 'DEBUG - Return Value: '.$return_var."\n";
                                        echo "DEBUG - Command Output:\n";
                                        print_r($output);
                                    }
                                    if ($return_var != '0') {
                                        $error = 'Audit routine for SSH audit on '.$details->man_ip_address.' failed to run uname on target';
                                        $log_details->message = $error;
                                        stdlog($log_details);
                                    }
                                    // Linux, Darwin, ESX, AIX
                                    if (isset($output[0]) and $output[0] > '') {
                                        $remote_os = $output[0];
                                    } else {
                                        $remote_os = "";
                                    }
                                    $command_string = null;
                                    $return_var = null;
                                    $output = null;
                                }

                                // which script do we need to use
                                if (strtolower($remote_os) === 'linux') {
                                    $audit_script = 'audit_linux.sh';
                                }
                                if (strtolower($remote_os) === 'darwin') {
                                    $audit_script = 'audit_osx.sh';
                                }
                                if (strtolower($remote_os) === 'aix') {
                                    $audit_script = 'audit_aix.sh';
                                }
                                if (strtolower($remote_os) === 'vmkernel') {
                                    $audit_script = 'audit_esxi.sh';
                                }

                                if ($error == '' and $audit_script != '') {
                                    $log_details->message = "Attempting SSH audit for discovery on $details->man_ip_address ($remote_os)";
                                    stdlog($log_details);
                                    // Attempt to copy the audit script
                                    $command_string = "$filepath\\pscp.exe -pw ".$details->ssh_password." $filepath\\$audit_script ".$details->ssh_username."@".$details->man_ip_address.":/tmp/";
                                    exec($command_string, $output, $return_var);
                                    if ($display == 'y') {
                                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                                        echo 'DEBUG - Return Value: '.$return_var."\n";
                                        echo "DEBUG - Command Output:\n";
                                        print_r($output);
                                    }
                                    if ($return_var != '0') {
                                        $error = 'SSH copy of '.$audit_script.' to '.$details->man_ip_address.' has failed';
                                        $log_details->message = $error;
                                        stdlog($log_details);
                                    }
                                    $command_string = null;
                                    $output = null;
                                    $return_var = null;
                                }

                                // Attempt to chmod the script so it's executable
                                if ($error == '' and $audit_script != '') {
                                    $command_string = "$filepath\\plink.exe -pw ".$details->ssh_password." ".$details->ssh_username."@".$details->man_ip_address." chmod 777 /tmp/$audit_script";
                                    exec($command_string, $output, $return_var);
                                    if ($display == 'y') {
                                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                                        echo 'DEBUG - Return Value: '.$return_var."\n";
                                        echo "DEBUG - Command Output:\n";
                                        print_r($output);
                                    }
                                    if ($return_var != '0') {
                                        $error = 'SSH chmod command for /tmp/'.$audit_script.' audit script on '.$details->man_ip_address.' failed';
                                        $log_details->message = $error;
                                        stdlog($log_details);
                                    }
                                    $command_string = null;
                                    $output = null;
                                    $return_var = null;
                                }

                                if ($audit_script != 'audit_esxi.sh') {
                                    $sudo = '';
                                    // Attempt to determine if SUDO is present on target system
                                    if ($error == '' and $audit_script != '' and $details->ssh_username != 'root') {
                                        $command_string = "$filepath\\plink.exe -pw ".$details->ssh_password." ".$details->ssh_username."@".$details->man_ip_address." which sudo";
                                        exec($command_string, $output, $return_var);
                                        if ($display == 'y') {
                                            echo 'DEBUG - Command Executed: '.$command_string."\n";
                                            echo 'DEBUG - Return Value: '.$return_var."\n";
                                            echo "DEBUG - Command Output:\n";
                                            print_r($output);
                                        }
                                        if ($return_var != '0') {
                                            $log_details->message = "SSH which sudo command for $remote_os audit script on $details->man_ip_address failed";
                                            stdlog($log_details);
                                        }
                                        if (isset($output[0]) and $output[0] > '') {
                                            $sudo = $output[0];
                                        } else {
                                            $sudo = "";
                                        }
                                        $command_string = null;
                                        $output = null;
                                        $return_var = null;
                                    }

                                    // Attempt to run the audit script
                                    if ($error == '' and $audit_script != '') {
                                        if ($sudo > "" and $details->ssh_username != 'root') {
                                            $command_string = "$filepath\\plink.exe -pw ".$details->ssh_password." ".$details->ssh_username."@".$details->man_ip_address." \"echo ".$details->ssh_password." | $sudo -S /tmp/".$audit_script." submit_online=y create_file=n url=".$url."index.php/system/add_system debugging=1 system_id=".$details->system_id."\"";
                                            @exec($command_string, $output, $return_var);
                                            if ($display == 'y') {
                                                echo 'DEBUG - Command Executed: '.$command_string."\n";
                                                echo 'DEBUG - Return Value: '.$return_var."\n";
                                                echo "DEBUG - Command Output:\n";
                                                print_r($output);
                                            }
                                            if ($return_var != '0') {
                                                $error = 'SSH audit command for '.$audit_script.' audit script on '.$details->man_ip_address.' failed';
                                                $log_details->message = $error;
                                                stdlog($log_details);
                                                $command_string = $filepath.'\\plink.exe -pw '.$details->ssh_password.' '.$details->ssh_username.'@'.$details->man_ip_address." \"/tmp/".$audit_script." submit_online=y create_file=n url=".$url."index.php/system/add_system debugging=1 system_id=".$details->system_id."\"";
                                                @exec($command_string, $output, $return_var);
                                                if ($display == 'y') {
                                                    echo 'DEBUG - Command Executed: '.$command_string."\n";
                                                    echo 'DEBUG - Return Value: '.$return_var."\n";
                                                    echo "DEBUG - Command Output:\n";
                                                    print_r($output);
                                                }
                                                if ($return_var != '0') {
                                                    $error = 'SSH audit command for '.$audit_script.' script on '.$details->man_ip_address.' running without sudo has failed';
                                                    $log_details->message = $error;
                                                    stdlog($log_details);
                                                }
                                            }
                                            $command_string = null;
                                            $output = null;
                                            $return_var = null;
                                        } else {
                                            $command_string = "$filepath\\plink.exe -pw ".$details->ssh_password." ".$details->ssh_username."@".$details->man_ip_address." \"/tmp/".$audit_script." submit_online=y create_file=n url=".$url."index.php/system/add_system debugging=1 system_id=".$details->system_id."\"";
                                            @exec($command_string, $output, $return_var);
                                            if ($display == 'y') {
                                                echo 'DEBUG - Command Executed: '.$command_string."\n";
                                                echo 'DEBUG - Return Value: '.$return_var."\n";
                                                echo "DEBUG - Command Output:\n";
                                                print_r($output);
                                            }
                                            if ($return_var != '0') {
                                                if ($details->ssh_username == 'root') {
                                                    $error = 'SSH audit command for '.$remote_os.' '.$audit_script.' as root on '.$details->man_ip_address.' failed';
                                                } else {
                                                    $error = 'SSH audit command for '.$remote_os.' '.$audit_script.' not as root and not using sudo on '.$details->man_ip_address.' failed';
                                                }
                                                $log_details->message = $error;
                                                stdlog($log_details);
                                                exit();
                                            }
                                        } // end of use sudo / root
                                    }
                                } else {
                                    // Audit ESXi
                                    $command_string = "$filepath\\plink.exe -pw ".$details->ssh_password." ".$details->ssh_username."@".$details->man_ip_address." \"/tmp/".$audit_script." submit_online=n create_file=n debugging=0 echo_output=y url=".$url."index.php/system/add_system system_id=".$details->system_id."\"";
                                    # this is the linux command # $command_string = 'sshpass -p ' . escapeshellarg($details->ssh_password) . ' ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ' . escapeshellarg($details->ssh_username) . '@' . escapeshellarg($details->man_ip_address) . ' "/tmp/' . $audit_script . ' submit_online=y create_file=n debugging=0 echo_output=y system_id=' . $details->system_id . '" 2>/dev/null';
                                    @exec($command_string, $output, $return_var);
                                    if ($display == 'y') {
                                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                                        echo 'DEBUG - Return Value: '.$return_var."\n";
                                        if ($return_var != '0') {
                                            echo "DEBUG - Command Output:\n";
                                            $output_new = str_replace("<", "&lt;", $output);
                                            print_r($output_new);
                                        }
                                    }
                                    if ($return_var != '0') {
                                        $error = 'SSH audit command for ESXi audit script on '.$details->man_ip_address.' failed';
                                        $log_details->message = $error;
                                        stdlog($log_details);
                                    } else {
                                        $script_result = '';
                                        foreach ($output as $line) {
                                            $script_result .= $line."\n";
                                        }
                                        $script_result = preg_replace('/\s+/', ' ', $script_result);
                                        $script_result = str_replace("> <", "><", $script_result);
                                        $esx_input = trim($script_result);
                                        try {
                                            $esx_xml = new SimpleXMLElement($esx_input);
                                        } catch (Exception $error) {
                                            // not a valid XML string
                                            $log_details->message = 'Invalid XML input for ESX audit script';
                                            stdlog($log_details);
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
                                                if ((!isset($esx_details->man_ip_address) or $esx_details->man_ip_address == '') and
                                                    isset($details->man_ip_address) and $details->man_ip_address != '') {
                                                    $esx_details->man_ip_address = $details->man_ip_address;
                                                }
                                                if (isset($esx_details->system_id) and $esx_details->system_id != '') {
                                                    // we have an existing device
                                                    $esx_details->original_last_seen_by = $this->m_oa_general->get_attribute('system', 'last_seen_by', $esx_details->system_id);
                                                    $esx_details->original_timestamp = $this->m_oa_general->get_attribute('system', 'timestamp', $esx_details->system_id);
                                                    $this->m_system->update_system($esx_details);
                                                    $log_details->message = "ESX update for $esx_details->man_ip_address (System ID $esx_details->system_id)";
                                                    stdlog($log_details);
                                                } else {
                                                    // we have a new system
                                                    $esx_details->system_id = $this->m_system->insert_system($esx_details);
                                                    $log_details->message = "ESX insert for $esx_details->man_ip_address (System ID $esx_details->system_id)";
                                                    stdlog($log_details);
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
                                                foreach ($esx_xml->guests->guest as $input) {
                                                    $this->m_virtual_machine->process_vm($input, $details);
                                                }
                                            }
                                        }
                                    } // end of ESXi script
                                    if ($error == '') {
                                        $log_details->message = "Successful SSH audit for discovery on $details->man_ip_address ($remote_os)";
                                        stdlog($log_details);
                                        // also update the device credentials
                                        $credentials = new stdClass();
                                        $credentials->ip_address = $details->man_ip_address;
                                        $credentials->ssh_username = $details->ssh_username;
                                        $credentials->ssh_password = $details->ssh_password;
                                        $this->m_system->update_credentials($credentials, $details->system_id);
                                        unset($credentials);
                                        $log_details->message = "SSH credential update for $details->man_ip_address (System ID $details->system_id)";
                                        stdlog($log_details);
                                    }
                                } // End of remote OS == Linux, OSX or ESX
                            } // close Windows server
                        } // close SSH user and password
                    } // close ssh_status
                    $log_details->message = "Completed processing $details->man_ip_address (System ID $details->system_id)";
                    stdlog($log_details);
                } // close the device / complete switch
                unset($details);
            } // close for each device in XML
        } // close for form submission
    } // close function

    public function ip_address_from_db($ip)
    {
        $ip_pre = $ip;
        if (($ip != '') and (!(is_null($ip)))) {
            $myip = explode(".", $ip);
            $myip[0] = ltrim($myip[0], "0");
            if ($myip[0] == "") {
                $myip[0] = "0";
            }
            if (isset($myip[1])) {
                $myip[1] = ltrim($myip[1], "0");
            }
            if (!isset($myip[1]) or $myip[1] == "") {
                $myip[1] = "0";
            }
            if (isset($myip[2])) {
                $myip[2] = ltrim($myip[2], "0");
            }
            if (!isset($myip[2]) or $myip[2] == "") {
                $myip[2] = "0";
            }
            if (isset($myip[3])) {
                $myip[3] = ltrim($myip[3], "0");
            }
            if (!isset($myip[3]) or $myip[3] == "") {
                $myip[3] = "0";
            }
            $ip = $myip[0].".".$myip[1].".".$myip[2].".".$myip[3];
        } else {
            $ip = " Not-Networked";
        }

        return $ip;
    }

    public function ip_address_to_db($ip)
    {
        if (($ip != '') and (!(is_null($ip))) and (substr_count($ip, '.') == 3)) {
            $myip = explode(".", $ip);
            $myip[0] = mb_substr("000".$myip[0], -3);
            $myip[1] = mb_substr("000".$myip[1], -3);
            $myip[2] = mb_substr("000".$myip[2], -3);
            $myip[3] = mb_substr("000".$myip[3], -3);
            $ip_post = $myip[0].".".$myip[1].".".$myip[2].".".$myip[3];
        } else {
            $ip_post = "000.000.000.000";
        }

        return $ip_post;
    }

    public function run_ssh($ssh_command = '', $ssh_password = '', $ssh_display = 'n')
    {
        // $ssh_command should be your SSHPASS command string, sans password
        // ex: 'sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null user@target sleep 15'
        // $ssh_password should be what you wish to pass to that command - the SSH password
        // $ssh_display is usually whatever is set in the discovery function $display variable
        $descriptorspec = array(
            0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
            1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
            2 => array("file", "/dev/null", "a"), // stderr is a file to write to
        );
        $cwd = '/tmp';
        $env = array();
        $return = array('output' => '', 'status' => '');
        if ($ssh_command != '') {
            $process = proc_open($ssh_command, $descriptorspec, $pipes, $cwd, $env);
            if (is_resource($process)) {
                fwrite($pipes[0], $ssh_password);
                fclose($pipes[0]);
                $temp = stream_get_contents($pipes[1]);
                $return['output'] = explode("\n", $temp);
                if (end($return['output']) == '') {
                    unset($return['output'][count($return['output'])-1]);
                }
                fclose($pipes[1]);
                $return['status'] = proc_close($process);
            }
            if ($ssh_display == 'y') {
                echo 'DEBUG - Command Executed: '.$ssh_command."\n";
                echo 'DEBUG - Return Value: '.$return['status']."\n";
                echo "DEBUG - Command Output:\n";
                $formatted_output = htmlentities($temp);
                $formatted_output = explode("\n", $formatted_output);
                if (end($formatted_output) == '') {
                    unset($formatted_output[count($formatted_output)-1]);
                }
                print_r($formatted_output);
            }
        }

        return($return);
    }
}
