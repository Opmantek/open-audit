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
 * @version 1.12.6
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

        $this->load->helper('report_helper');
        check_default_reports();
        $this->load->helper('group_helper');
        check_default_groups();
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

        $this->load->model('m_devices_components');
        $this->load->model('m_system');
        $this->load->model('m_oa_user');
        $this->load->library('encrypt');
        $this->load->helper('url');
        $system_ids = '';

        // accept a list passed into the function from PHP
        if ($ids != '') {
            $ids = str_replace(' ', '', $ids);
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
            $ip_address = ip_address_from_db($this->m_devices_components->read($system_id, 'y', 'system', '', 'man_ip_address'));
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
            $sql = '/* discovery::discover_list */ INSERT INTO oa_temp (temp_id, temp_name, temp_value, temp_timestamp) VALUES (null, "Subnet Credentials - '.$ip_address.'", "'.$credentials.'", "'.$timestamp.'")';
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
            if (!empty($this->config->config['discovery_nmap_os'])) {
                $nmap_os = $this->config->config['discovery_nmap_os'];
            } else {
                $nmap_os = 'n';
            }
            if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
                // run the script and continue (do not wait for result)
                $command_string = "nohup $filepath/discover_subnet.sh subnet_range=$ip_address url=".$url."index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\" os_scan=" . $nmap_os . " > /dev/null 2>&1 &";
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
                $command_string = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs subnet_range=$ip_address url=".$url."index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\" os_scan=" . $nmap_os . " ";
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

            if (isset($_POST['limit']) and is_numeric($_POST['limit']) and $_POST['limit'] != 0) {
                $limit = (int)$_POST['limit'];
            } else {
                $limit = 1000000;
            }

            # get the list of subnets from AD
            $ad_ldap_connect = 'ldap://' . $_POST['server'];
            $ad_user = $_POST['windows_username'] . '@' . $_POST['windows_domain'];
            $error_reporting = error_reporting();
            error_reporting(0);
            $ad = @ldap_connect($ad_ldap_connect);
            error_reporting($error_reporting);
            unset($error_reporting);
            if (!$ad) {
                // log the failed attempt to connect to AD 
                $log_details->severity = 5;
                $log_details->message = 'Could not connect to AD ' . $_POST['windows_domain'] . ' at ' . $_POST['server'];
                stdlog($log_details);
                $log_details->severity = 7;
            } else {
                // successful connect to AD, now try to bind using the credentials
                ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
                ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
                $bind = @ldap_bind( $ad, $ad_user, $_POST['windows_password']);
                if ($bind) {
                    $log_details->message = 'Retrieving subnets from AD ' . $_POST['windows_domain'] . ' at ' . $_POST['server'];
                    stdlog($log_details);
                    $dn = "CN=Subnets,CN=Sites,CN=Configuration,dc=".implode(", dc=", explode(".", $_POST['windows_domain']));
                    $filter = "(&(objectclass=*))";
                    $justthese = array("distinguishedName", "name");
                    $sr = ldap_search($ad, $dn, $filter, $justthese);
                    $info = ldap_get_entries($ad, $sr);
                    for ($i = 0; $i < count($info)-1; $i++) {
                        if ( $info[$i]['name'][0] != 'Subnets') {
                            $this->m_oa_config->update_blessed($info[$i]['name'][0]);
                        }
                    }
                } else {
                    $log_details->message = 'Could not bind to AD ' . $_POST['windows_domain'] . ' at ' . $_POST['server'];
                    stdlog($log_details);
                }
            }

            if ((php_uname('s') == 'Windows NT') and ($error == '')) {
                // Windows host - start the script locally
                $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."\\open-audit\\other";

                if ($display == 'y') {
                    $script_string = "$filepath\\discover_domain.vbs local_domain=LDAP://".$_POST['windows_domain']." number_of_audits=".$_POST['number_of_audits']." script_name=$filepath\\audit_windows.vbs url=".$url." struser=".$_POST['windows_domain']."\\".$_POST['windows_username']." strpass=".$_POST['windows_password']." limit=" . $limit . " debugging=1";
                } else {
                    $script_string = "$filepath\\discover_domain.vbs local_domain=LDAP://".$_POST['windows_domain']." number_of_audits=".$_POST['number_of_audits']." script_name=$filepath\\audit_windows.vbs url=".$url." struser=".$_POST['windows_domain']."\\".$_POST['windows_username']." strpass=".$_POST['windows_password']." limit=". $limit ." debugging=0";
                }
                $command_string = "%comspec% /c start /b cscript //nologo ".$script_string." &";

                if ($display == 'y') {
                    exec($command_string, $output, $return_var);
                    $command_string = str_replace($_POST['windows_password'], '******', $command_string);
                    echo 'DEBUG - Command Executed: '.$command_string."\n";
                    echo 'DEBUG - Return Value: '.$return_var."\n";
                    echo "DEBUG - Command Output:\n";
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
                        $command_string = str_replace($_POST['windows_password'], '******', $command_string);
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
                        $command_string = str_replace($_POST['windows_password'], '******', $command_string);
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
                    $command_string = "screen -D -m timeout 5m /usr/local/open-audit/other/winexe-static -U ".$_POST['windows_domain']."/".$_POST['windows_username']."%".$_POST['windows_password']." --uninstall //".$_POST['server']." \"cscript //nologo c:\windows\discover_domain.vbs local_domain=LDAP://".$_POST['windows_domain']." number_of_audits=".$_POST['number_of_audits']." script_name=c:\windows\audit_windows.vbs url=".$url." limit=".$limit." debugging=0 struser=".$_POST['windows_domain']."\\".$_POST['windows_username']." strpass=".$_POST['windows_password']." \" ";
                    exec($command_string, $output, $return_var);
                    if ($display == 'y') {
                        $command_string = str_replace($_POST['windows_password'], '******', $command_string);
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
            if ($this->user->admin != 'y') {
                if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                    redirect($_SERVER['HTTP_REFERER']);
                } else {
                    redirect('main/list_groups');
                }
            }

            $this->data['apppath'] = APPPATH;
            $this->data['image_path'] = base_url().'theme-'.$this->user->theme.'/'.$this->user->theme.'-images/';
            $this->load->model("m_oa_report");
            $this->load->model('m_devices_components');
            $this->data['menu'] = $this->m_oa_report->list_reports_in_menu();

            // show the form to accept scan details
            $this->data['type'] = "";
            $this->data['credentials'] = new stdClass();
            if ($this->uri->segment(3) and $this->uri->segment(3)) {
                if (is_numeric($this->uri->segment(3))) {
                    $this->data['system_id'] = $this->uri->segment(3);
                    $this->data['credentials'] = $this->m_system->get_credentials($this->data['system_id']);
                    $this->data['ip_address'] = ip_address_from_db($this->m_devices_components->read($this->data['system_id'], 'y', 'system', '', 'man_ip_address'));
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
                $this->data['ip_address'] = ip_address_from_db($this->m_devices_components->read($this->data['system_id'], 'y', 'system', '', 'man_ip_address'));
            }
            if (!empty($this->data['system_id'])) {
                $temp_system = $this->m_system->get_system_summary($this->data['system_id']);
                #echo "<pre>\n"; print_r($temp_system); exit();
                $this->data['org_id'] = $temp_system[0]->man_org_id;
                $this->data['location_id'] = $temp_system[0]->man_location_id;
                unset($temp_system);
            }
            $this->load->model('m_oa_org');
            $this->data['orgs'] = $this->m_oa_org->get_org_names();
            $this->load->model('m_oa_location');
            $this->data['locations'] = $this->m_oa_location->get_location_names();

            $this->data['warning'] = '';
            $this->data['include'] = "v_discover_subnet";
            $this->data['sortcolumn'] = '1';
            $this->data['heading'] = 'Discovery';
            $this->load->view('v_template', $this->data);
        } else {
            // process the scan details and call the discovery script
            $this->load->model('m_oa_config');
            $this->m_oa_config->load_config();

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

            if (isset($_POST['subnet_range']) and $_POST['subnet_range'] > '') {
                $subnet_range = $_POST['subnet_range'];
                $credentials->man_ip_address = $_POST['subnet_range'];
            } else {
                $subnet_range = "";
            }

            $encode = array();
            if (isset($_POST['limit']) and $_POST['limit'] != '' and is_numeric($_POST['limit'])) {
                $encode['limit'] = (int)$_POST['limit'];
            } else {
                $encode['limit'] = 1000000;
            }
            $encode['count'] = 0;

            $log_details->message = 'Discovery submitted for '.$subnet_range;
            stdlog($log_details);

            // add to the list of blessed subnets
            $this->m_oa_config->update_blessed($subnet_range);

            // we encode the supplied credentials and store them in the database
            // the script will simply pass back the timestamp and the credentials will be retrieved and used
            $this->load->library('encrypt');

            if (isset($_POST['snmp_community']) and $_POST['snmp_community'] > '') {
                $encode['snmp_community'] = $this->input->post('snmp_community', false);
                $credentials->snmp_community = $this->input->post('snmp_community', false);
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
                $encode['ssh_password'] = $this->input->post('ssh_password', false);
                $credentials->ssh_password = $this->input->post('ssh_password', false);
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
                $encode['windows_password'] = $this->input->post('windows_password', false);
                $credentials->windows_password = $this->input->post('windows_password', false);
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

            if (isset($_POST['use_https']) and $_POST['use_https'] > '') {
                $encode['use_https'] = $_POST['use_https'];
            } else {
                $encode['use_https'] = '';
            }

            if (isset($_POST['org']) and $_POST['org'] > '') {
                $encode['org'] = $_POST['org'];
            } else {
                $encode['org'] = '';
            }

            if (isset($_POST['location']) and $_POST['location'] > '') {
                $encode['location'] = $_POST['location'];
            } else {
                $encode['location'] = '';
            }

            if (isset($_POST['type']) and $_POST['type'] == 'device' and
                isset($_POST['system_id']) and $_POST['system_id'] > '') {
                // we are auditing a single device that exists in the DB
                // update the device access credentials
                $this->m_system->update_credentials($credentials, $_POST['system_id']);
            }
            if (isset($this->user->full_name)) {
                $encode['last_user'] = $this->user->full_name;
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
            $sql = '/* discovery::discover_subnet */ INSERT INTO oa_temp (temp_id, temp_name, temp_value, temp_timestamp) VALUES (null, "Subnet Credentials - '.$subnet_range.'", "'.$credentials.'", "'.$timestamp.'")';
            $query = $this->db->query($sql);
            $credentials = "";

            // create a network group if provided a subnet that includes a slash in the string and
            // auto create network is set in the config to 'y'
            if (strpos($subnet_range, "/")) {
                // we have a subnet_range - if it's not a /32, then test for a group
                $subnet_split = explode("/", $subnet_range);
                $subnet_details = network_details($subnet_split[0] . '/' . $subnet_split[1]);
                if (! isset($this->config->config['network_group_subnet']) or $this->config->config['network_group_subnet'] == '') {
                    $net_group_subnet = '30';
                } else {
                    $net_group_subnet = $this->config->config['network_group_subnet'];
                }
                if (isset($this->config->config['network_group_auto_create']) and $this->config->config['network_group_auto_create'] != 'n' and $subnet_split[1] < $net_group_subnet) {
                    // we want to auto create network groups
                    // test if a network group exists with the matching definition
                    $group_dynamic_select = "SELECT distinct(system.system_id) FROM system, ip WHERE ( ip.version = '4' AND ip.ip >= '".ip_address_to_db($subnet_details->host_min)."' and ip.ip <= '".ip_address_to_db($subnet_details->host_max)."' and ip.netmask = '".$subnet_details->netmask."' and ip.system_id = system.system_id and ip.current = 'y' and system.man_status = 'production') UNION SELECT distinct(system.system_id) FROM system WHERE (system.man_ip_address >= '".ip_address_to_db($subnet_details->host_min)."' and system.man_ip_address <= '".ip_address_to_db($subnet_details->host_max)."' and system.man_status = 'production')";
                    $start = explode(' ', microtime());
                    $sql = "/* discovery::discover_subnet */ SELECT * FROM oa_group WHERE group_dynamic_select = ? ";
                    $data = array($group_dynamic_select);
                    $query = $this->db->query($sql, $data);
                    if ($query->num_rows() > 0) {
                        // group exists - no need to do anything
                    } else {
                        // group does not exist - insert
                        $log_details->message = "Creating Group for $subnet_range";
                        stdlog($log_details);
                        $sql = "/* discovery::discover_subnet */ INSERT INTO oa_group (group_id, group_name, group_padded_name, group_dynamic_select, group_parent, group_description, group_category, group_icon) VALUES (null, ?, ?, ?, '1', ?, 'network', 'switch')";
                        $group_name = "Network - ".$subnet_details->network.' / '.$subnet_details->network_slash;
                        $group_padded_name = "Network - ".ip_address_to_db($subnet_details->network);
                        $data = array("$group_name", "$group_padded_name", "$group_dynamic_select", $subnet_details->network);
                        $query = $this->db->query($sql, $data);
                        $insert_id = $this->db->insert_id();
                        // We need to insert an entry into oa_group_user for any Admin level user
                        $sql = "/* discovery::discover_subnet */ INSERT INTO oa_group_user (SELECT null, oa_user.id, ?, '10' FROM oa_user WHERE admin = 'y')";
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
                    $temp_network_address = $this->config->config['default_network_address'];
                }
                $url = str_replace($temp_network_address, $this->config->config['default_network_address'], base_url());
            # if nothing, then just try the base_url - this will likely use 127.0.0.1 and fail...
            # TODO - fix this
            } else {
                $url = base_url();
            }
            unset($temp_network_address);

            if (!empty($_POST['use_https'])) {
                $url = str_ireplace('http://', 'https://', $url);
            }

             if (!empty($this->config->config['discovery_nmap_os'])) {
                $nmap_os = $this->config->config['discovery_nmap_os'];
            } else {
                $nmap_os = 'n';
            }

            if ((php_uname('s') == 'Linux') or (php_uname('s') == 'Darwin')) {
                if ($subnet_range > '') {
                    if ($display == 'y') {
                        // run the script and wait for the output so we can echo it.
                        $command_string = "$filepath/discover_subnet.sh subnet_range=$subnet_range url=".$url."index.php/discovery/process_subnet submit_online=n echo_output=y create_file=n debugging=0 subnet_timestamp=\"$timestamp\" os_scan=" . $nmap_os . " 2>&1";
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
                        $command_string = "nohup $filepath/discover_subnet.sh subnet_range=$subnet_range url=".$url."index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\" os_scan=" . $nmap_os . " > /dev/null 2>&1 &";
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
                        $command_string = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs subnet_range=$subnet_range url=".$url."index.php/discovery/process_subnet submit_online=n echo_output=y create_file=n debugging=0 subnet_timestamp=\"$timestamp\" os_scan=" . $nmap_os;
                        @exec($command_string, $output, $return_var);
                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                        echo 'DEBUG - Return Value: '.$return_var."\n";
                        echo "DEBUG - Command Output:\n";
                        $output_new = str_replace("<", "&lt;", $output);
                        print_r($output_new);

                        if ($return_var != '0') {
                            $error = 'Discovery subnet starting script discover_subnet.vbs ('.$subnet_range.') has failed';
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
                        $command_string = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs subnet_range=$subnet_range url=".$url."index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\" os_scan=" . $nmap_os;
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
                echo "***********************************************************************************\n";
                echo "* NOTE - THIS PAGE WILL CONTINUOUSLY RENDER UNTIL THE DISCOVERY HAS FINISHED      *\n";
                echo "* WATCH YOUR BROSWER TO SEE WHEN THE PAGE FINISHES RENDERING                      *\n";
                echo "* DO NOT REFRESH THIS PAGE OR ATTEMPT TO GO 'back' UNTIL THE PAGE HAS COMPLETED   *\n";
                echo "***********************************************************************************\n";
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

            if (!$this->m_oa_config->check_blessed($_SERVER['REMOTE_ADDR'], '')) {
                if ($display == 'y') {
                    echo "\nAudit submission from an IP (" . $_SERVER['REMOTE_ADDR'] . ") not in the list of blessed subnets, exiting.\n";
                }
                exit;
            }

            $this->load->helper('url');
            // below should be loaded in the constructor
            // $this->load->model('m_oa_config');
            // $this->m_oa_config->load_config();

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
            $this->load->model('m_oa_group');
            $this->load->model('m_audit_log');
            $this->load->model('m_change_log');
            $this->load->model('m_devices_components');
            $timestamp = date('Y-m-d H:i:s');

            $count = 0;
            foreach ($xml->children() as $details) {
                $details = (object) $details;

                if (isset($details->complete) and $details->complete == 'y') {
                    // delete the credential set
                    if ($display == 'y') {
                        echo "DEBUG - ----------------------------------------------------\n";
                    }
                    $this->echo_details($details);
                    sleep(5);
                    $log_details->message = 'Deleting credential set for '.$details->subnet_range.' submitted on '.$details->subnet_timestamp;
                    stdlog($log_details);
                    $sql = '/* discovery::process_subnet */ DELETE FROM oa_temp WHERE temp_name = \'Subnet Credentials - '.$details->subnet_range.'\' and temp_timestamp = \''.$details->subnet_timestamp.'\' ';
                    $query = $this->db->query($sql);
                } else {
                    $skip = false;
                    if (stripos(' ' . $this->config->config['discovery_ip_exclude'] . ' ', ' ' . $details->man_ip_address . ' ') !== false ) {
                        # Our ip address matched an ip in the discovery_ip_exclude list - exit
                        $log_details->message = $details->man_ip_address . ' is in the list of excluded ip addresses - skipping.';
                        stdlog($log_details);
                        $skip = true;
                    }
                    if (!$skip) {
                        $log_details->message = 'Start processing '.$details->man_ip_address;
                        stdlog($log_details);
                        $count++;
                        $details->timestamp = $timestamp;
                        $details->last_seen = $timestamp;
                        $details->last_user = '';
                        $details->last_seen_by = 'nmap';
                        $details->domain = '';
                        $details->audits_ip = ip_address_to_db($_SERVER['REMOTE_ADDR']);
                        $details->hostname = '';

                        $details = dns_validate($details, $display);

                        // process what little data we have and try to make a system_key
                        $details->system_key = '';
                        $details->system_key = $this->m_system->create_system_key($details, $display);

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
                        $sql = '/* discovery::process_subnet */ SELECT temp_value FROM oa_temp WHERE temp_name = \'Subnet Credentials - '.$details->subnet_range.'\' and temp_timestamp = \''.$details->subnet_timestamp.'\' ORDER BY temp_id DESC LIMIT 1';
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
                            $details->limit = (int)@$supplied_credentials->limit;
                            $details->count = (int)@$supplied_credentials->count;
                            $details->org_id = (int)@$supplied_credentials->org;
                            $details->location_id = (int)@$supplied_credentials->location;
                            $details->man_org_id = (int)@$supplied_credentials->org;
                            $details->man_location_id = (int)@$supplied_credentials->location;
                            $details->use_https = (string)@$supplied_credentials->use_https;
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
                            $details->limit = 1000000;
                            $details->count = 0;
                            $details->use_https = '';
                        }

                        if (intval($details->count) >= intval($details->limit)) {
                            # we have discovered the requested number of devcies
                            $log_details->message = 'Count from DB is higher than requested limit, exiting. Count: ' . $details->count . ' Limit: ' . $details->limit;
                            stdlog($log_details);
                            return;
                        }
                        $supplied_credentials->count++;

                        $sql = '/* discovery::process_subnet */ UPDATE oa_temp SET temp_value = ? WHERE temp_name = \'Subnet Credentials - '.$details->subnet_range.'\' and temp_timestamp = \''.$details->subnet_timestamp.'\'';
                        $data_in = json_encode($supplied_credentials);
                        $data_in = $this->encrypt->encode($data_in);
                        $data = array("$data_in");
                        $query = $this->db->query($sql, $data);

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

                        if ($details->use_https == 'on') {
                            $url = str_ireplace('http://', 'https://', $url);
                        }

                        if (isset($supplied->snmp_community) and $supplied->snmp_community != '') {
                            $details->snmp_community = $supplied->snmp_community;
                        }

                        // output to log file and DEBUG the status of the three main services
                        $log_details->message = 'WMI Status is '.$details->wmi_status.' on '.$details->man_ip_address;
                        stdlog($log_details);

                        $log_details->message = 'SNMP Status is '.$details->snmp_status.' on '.$details->man_ip_address;
                        stdlog($log_details);

                        $log_details->message = 'SSH Status is '.$details->ssh_status.' on '.$details->man_ip_address;
                        stdlog($log_details);

                        // get rid of os_* as nmap only guesses
                        $details->os_group = '';
                        $details->os_family = '';
                        $details->os_name = '';

                        // try to get more information using SNMP (if ext loaded in PHP)
                        if (extension_loaded('snmp') and $details->snmp_status == 'true') {
                            $log_details->message = 'Attempting SNMP discovery on '.$details->man_ip_address;
                            stdlog($log_details);
                            try {
                                $temp_array = get_snmp($details);
                            } catch (Exception $error) {
                                $log_details->message = 'Something went awry when trying to run the SNMP function for ' . $details->man_ip_address;
                                stdlog($log_details);
                                $log_details->message = $error;
                                stdlog($log_details);
                                if ($display == 'y') {
                                    print_r($error);
                                }
                            }
                            $details = $temp_array['details'];
                            $network_interfaces = $temp_array['interfaces'];
                            $modules = $temp_array['modules'];
                            $ip = $temp_array['ip'];

                            unset($guests);
                            if (isset($temp_array['guests']) and count($temp_array['guests']) > 0) {
                                $guests = $temp_array['guests'];
                            }
                            if (isset($temp_array['interfaces']) and count($temp_array['interfaces'] > 0)) {
                                foreach ($network_interfaces as $interface) {
                                    if (isset($interface->mac) and (string) $interface->mac != '') {
                                        // we have a mac address, insert it into the $details object
                                        $mac_address = strtolower((string) $interface->mac);
                                        $details->mac_addresses->$mac_address = $mac_address;
                                    }
                                }
                            }
                            if ((isset($details->snmp_oid)) and ($details->snmp_oid > '')) {
                                // we received a result from SNMP, use this data to update or insert
                                $details->last_seen_by = 'snmp';
                                $details->audits_ip = '127.0.0.1';
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
                                $impi_installed = 'n';
                                $log_details->message = 'Ipmitools not detected when discovering '.$details->man_ip_address;
                                stdlog($log_details);
                            } else {
                                $impi_installed = 'y';
                            }

                            $command_string = null;
                            $output = null;
                            $return_var = null;

                            if (isset($this->config->config['discovery_use_ipmi']) and $this->config->config['discovery_use_ipmi'] == 'y') {
                                $ipmi_use = 'y';
                            } else {
                                $ipmi_use = 'n';
                            }

                            if ($impi_installed == 'y' and $ipmi_use == 'n') {
                                $log_details->message = 'Ipmitools detected but not used (as per config) when discovering '.$details->man_ip_address;
                                stdlog($log_details);
                            }

                            if ($impi_installed == 'y' and $ipmi_use == 'y') {
                                // ipmitools are installed
                                $log_details->message = 'Ipmitools detected and used (as per config) when discovering '.$details->man_ip_address;
                                stdlog($log_details);
                                // Attempt to get MAC Address
                                $command_string = 'ipmitool -H '.$details->man_ip_address.' -U '.$default->default_ipmi_username.' -P '.escapeshellarg($default->default_ipmi_password).' lan print 2>/dev/null | grep "^MAC Address" | cut -d":" -f2- | cut -d" " -f2';
                                exec($command_string, $output, $return_var);
                                if ($display == 'y') {
                                    $command_string = str_replace(escapeshellarg($default->default_ipmi_password), '******', $command_string);
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
                                    $details->last_seen_by = 'ipmi';
                                    $details->description = '';
                                    if ($details->mac_address == '') {
                                        $details->mac_address = strtolower($output[0]);
                                    }
                                    $output = null;

                                    // attempt to retrieve the Subnet Mask
                                    $command_string = 'ipmitool -H '.$details->man_ip_address.' -U '.$default->default_ipmi_username.' -P '.escapeshellarg($default->default_ipmi_password).' lan print 2>/dev/null | grep "Subnet Mask" | cut -d":" -f2 ';
                                    exec($command_string, $output, $return_var);
                                    if ($display == 'y') {
                                        $command_string = str_replace(escapeshellarg($default->default_ipmi_password), '******', $command_string);
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
                                    $command_string = 'ipmitool -H '.$details->man_ip_address.' -U '.$default->default_ipmi_username.' -P '.escapeshellarg($default->default_ipmi_password).' fru list 2>/dev/null | grep "Product Manufacturer" | cut -d":" -f2 ';
                                    exec($command_string, $output, $return_var);
                                    if ($display == 'y') {
                                        $command_string = str_replace(escapeshellarg($default->default_ipmi_password), '******', $command_string);
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
                                    $command_string = 'ipmitool -H '.$details->man_ip_address.' -U '.$default->default_ipmi_username.' -P '.escapeshellarg($default->default_ipmi_password).' fru list 2>/dev/null | grep "Product Name" | cut -d":" -f2 ';
                                    exec($command_string, $output, $return_var);
                                    if ($display == 'y') {
                                        $command_string = str_replace(escapeshellarg($default->default_ipmi_password), '******', $command_string);
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
                                    $command_string = 'ipmitool -H '.$details->man_ip_address.' -U '.$default->default_ipmi_username.' -P '.escapeshellarg($default->default_ipmi_password).' fru list 2>/dev/null | grep "Product Serial" | cut -d":" -f2 ';
                                    exec($command_string, $output, $return_var);
                                    if ($display == 'y') {
                                        $command_string = str_replace(escapeshellarg($default->default_ipmi_password), '******', $command_string);
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

                        // new for 1.8.4 - if we have a non-computer, do not attempt to connect using SSH
                        if ($details->type != 'computer' and $details->type != '' and $details->type != 'unknown' and $details->os_family != 'DD-WRT' and stripos($details->sysDescr, 'dd-wrt') === false ) {
                            $log_details->message = 'Not a computer and not a DD-WRT device, setting SSH status to false for '.$details->man_ip_address.' (System ID '.$details->system_id.')';
                            stdlog($log_details);
                            $details->ssh_status = 'false';
                        }

                        if ($details->ssh_status == 'true') {
                            $log_details->message = 'Testing SSH credentials for '.$details->man_ip_address;
                            stdlog($log_details);

                            # attempt to connect using various credentials
                            if (php_uname('s') == 'Windows NT') {
                                # attempt to store the targets host key, regardless of credentials
                                $command_string = 'echo y | c:\xampplite\open-audit\other\plink.exe -ssh ' . $details->ssh_username . "@" . $details->man_ip_address . ' -pw ' . str_replace('"', '\"', $details->ssh_password) . ' exit';
                                exec($command_string, $output, $status);
                            }
                            $credentials = array();
                            $credentials['supplied']['user'] = @$supplied->ssh_username;
                            $credentials['supplied']['pass'] = @$supplied->ssh_password;
                            $credentials['supplied']['type'] = 'supplied';
                            $credentials['specific']['user'] = @$specific->ssh_username;
                            $credentials['specific']['pass'] = @$specific->ssh_password;
                            $credentials['specific']['type'] = 'specific';
                            $credentials['default']['user'] = @$default->default_ssh_username;
                            $credentials['default']['pass'] = @$default->default_ssh_password;
                            $credentials['default']['type'] = 'default';
                            # unset these as we test below and set only if correct
                            $details->ssh_username = '';
                            $details->ssh_password = '';

                            foreach ($credentials as $cred_set) {
                                if ( $cred_set['user'] != '' and $cred_set['pass'] != '') {
                                    $ssh_result = $this->ssh($cred_set['user'], $details->man_ip_address, 'exit', $cred_set['pass'], $display);
                                    if ($ssh_result['status'] == 0) {
                                        $details->ssh_username = $cred_set['user'];
                                        $details->ssh_password = $cred_set['pass'];
                                        $log_details->message = 'SSH ' . $cred_set['type'] . ' credentials for '.$details->man_ip_address . ' succeeded';
                                        stdlog($log_details);
                                        if ((!isset($details->snmp_oid)) or ($details->snmp_oid == '')) {
                                            $details->description = '';
                                        }
                                        break;
                                    } else {
                                        $log_details->message = 'SSH ' . $cred_set['type'] . ' credentials for '.$details->man_ip_address . ' failed';
                                        stdlog($log_details);
                                    }
                                }
                            }
                            if ($details->ssh_username != '') {
                                # we have a working credential set
                                $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'uname', $details->ssh_password, $display);
                                if ($ssh_result['status'] == 0) {
                                    $details->os_group = $ssh_result['output'][0];
                                    if ($details->os_group == 'WindowsNT') {
                                        $details->os_group = 'Windows';
                                    }
                                } else {
                                    # check to see if we have a Windows box
                                    $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'wmic os get name', $details->ssh_password, $display);
                                    if ($ssh_result['status'] == 0) {
                                        # the command ran successfully, but we need to see if we got a result
                                        foreach ($ssh_result['output'] as $line) {
                                            if (stripos($line, 'Windows') !== false) {
                                                $details->os_group = 'Windows';
                                            }
                                        }
                                    } else {
                                        $details->ssh_status = 'false';
                                    }
                                }
                                # Now we should have Linux, Windows or Darwin (or something else)
                                # based on this we can run appropriate commands for that OS and get some initial
                                # values used to determine uniqueness (UUID, hostname, et al)

                                # Start with hostname
                                if ($details->os_group != 'Windows') {
                                    $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'hostname -s', $details->ssh_password, $display);
                                    if ($ssh_result['status'] == 0) {
                                        $details->hostname = $ssh_result['output'][0];
                                    }
                                } else {
                                    // Windows SSH not supported yet
                                    // $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'wmic computersystem get name', $details->ssh_password, $display);
                                    // if ($ssh_result['status'] == 0) {
                                    //     $details->hostname = $ssh_result['output'][1];
                                    // }
                                }

                                # Get the FQDN
                                if ($details->os_group != 'Windows') {
                                    $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'hostname -f | grep -F .', $details->ssh_password, $display);
                                    if ($ssh_result['status'] == 0) {
                                        $details->fqdn = $ssh_result['output'][0];
                                    }
                                } else {
                                    // Windows SSH not supported yet
                                    // $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'wmic computersystem get domain', $details->ssh_password, $display);
                                    // if ($ssh_result['status'] == 0) {
                                    //     $details->fqdn = $details->hostname . '.' . $ssh_result['output'][1];
                                    // }
                                }

                                # Get the UUID
                                if ($details->os_group == 'Linux') {
                                    if ($details->ssh_username == 'root') {
                                        $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'dmidecode -s system-uuid', $details->ssh_password, $display);
                                    } else {
                                        $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'echo ' . escapeshellarg($details->ssh_password) . ' | sudo -S dmidecode -s system-uuid', $details->ssh_password, $display);
                                    }
                                    if ($ssh_result['status'] == 0) {
                                        $details->uuid = $ssh_result['output'][0];
                                    } else {
                                        if ($details->ssh_username == 'root') {
                                            $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'cat /sys/class/dmi/id/product_uuid', $details->ssh_password, $display);
                                        } else {
                                            $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'echo ' . escapeshellarg($details->ssh_password) . ' | sudo -S cat /sys/class/dmi/id/product_uuid', $details->ssh_password, $display);
                                        }
                                        if ($ssh_result['status'] == 0) {
                                            $details->uuid = $ssh_result['output'][0];
                                        }
                                    }
                                }

                                # get the dbus machine id
                                if ($details->os_group == 'Linux') {
                                    $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'cat /var/lib/dbus/machine-id', $details->ssh_password, $display);
                                    if ($ssh_result['status'] == 0) {
                                        $details->dbus_identifier = $ssh_result['output'][0];
                                    } else {
                                        $details->dbus_identifier = '';
                                    }
                                }

                                if ($details->os_group == 'VMkernel') {
                                    $command = "vim-cmd hostsvc/hostsummary | sed -n '/^   hardware = (vim.host.Summary.HardwareSummary) {/,/^   \},/p' | grep uuid | cut -d= -f2 | sed 's/,//g' | sed 's/\\\"//g'";
                                    $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, $command, $details->ssh_password, $display);
                                    if ($ssh_result['status'] == 0) {
                                        $details->uuid = trim($ssh_result['output'][0]);
                                    }
                                }
                                if ($details->os_group == 'Windows') {
                                    // Windows SSH not supported yet
                                    // $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'wmic csproduct get uuid', $details->ssh_password, $display);
                                    // if ($ssh_result['status'] == 0) {
                                    //     $details->uuid = $ssh_result['output'][1];
                                    // }
                                }
                                if ($details->os_group == 'Darwin') {
                                    $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'system_profiler SPHardwareDataType | grep UUID | cut -d: -f2', $details->ssh_password, $display);
                                    if ($ssh_result['status'] == 0) {
                                        $details->uuid = $ssh_result['output'][0];
                                    }
                                }
                                # DD-WRT related items
                                if ($details->os_group != 'Windows') {
                                    $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'cat /etc/motd | grep -i DD-WRT', $details->ssh_password, $display);
                                    if ($ssh_result['status'] == 0) {
                                        if (stripos($ssh_result['output'][0], 'dd-wrt') !== false) {
                                            $details->os_family = 'DD-WRT';
                                            $details->os_name = trim($ssh_result['output'][0]);
                                            $details->type = 'router';
                                            $details->ssh_status = 'false';
                                        }
                                    }
                                    if ($details->os_family == 'DD-WRT') {
                                        $ssh_result = $this->ssh($details->ssh_username, $details->man_ip_address, 'nvram get DD_BOARD', $details->ssh_password, $display);
                                        if ($ssh_result['status'] == 0) {
                                            $details->model = $ssh_result['output'][0];
                                        }
                                        if (stripos($details->model, "tplink") !== false) {
                                            $details->manufacturer = "TP-Link Technology";
                                        }
                                    }
                                }
                            }
                        }

                        if ($details->wmi_status == 'true') {
                            $log_details->message = 'Testing Windows credentials for '.$details->man_ip_address;
                            stdlog($log_details);
                            $credentials = array();
                            $credentials['supplied']['user'] = $supplied->windows_username;
                            $credentials['supplied']['pass'] = $supplied->windows_password;
                            $credentials['supplied']['domain'] = $supplied->windows_domain;
                            $credentials['supplied']['type'] = 'supplied';
                            $credentials['specific']['user'] = @$specific->windows_username;
                            $credentials['specific']['pass'] = @$specific->windows_password;
                            $credentials['specific']['domain'] = @$specific->windows_domain;
                            $credentials['specific']['type'] = 'specific';
                            $credentials['default']['user'] = @$default->default_windows_username;
                            $credentials['default']['pass'] = @$default->default_windows_password;
                            $credentials['default']['domain'] = @$default->default_windows_domain;
                            $credentials['default']['type'] = 'default';
                            # unset these as we test below and set only if correct
                            $details->windows_username = '';
                            $details->windows_password = '';
                            $details->windows_domain = '';
                            foreach ($credentials as $cred_set) {
                                $wmi_result = $this->wmic($cred_set['user'], $details->man_ip_address, 'csproduct get uuid', $cred_set['pass'], $cred_set['domain'], $display);
                                if ($wmi_result['status'] == 0) {
                                    $details->windows_username = $cred_set['user'];
                                    $details->windows_password = $cred_set['pass'];
                                    $details->windows_domain = $cred_set['domain'];
                                    $log_details->message = 'WMIC ' . $cred_set['type'] . ' credentials for '.$details->man_ip_address . ' succeeded';
                                    stdlog($log_details);
                                    if ((!isset($details->snmp_oid)) or ($details->snmp_oid == '')) {
                                        $details->description = '';
                                    }
                                    break;
                                } else {
                                    $log_details->message = 'WMIC ' . $cred_set['type'] . ' credentials for '.$details->man_ip_address . ' failed';
                                    stdlog($log_details);
                                }
                            }
                            if ($details->windows_username !='') {
                                $details->type = 'computer';
                                $details->os_group = 'Windows';
                                # we have working WMI credentials - remove SSH status as it's not supported right now anyway
                                $details->ssh_status = 'false';

                                # get the UUID
                                $wmi_result = $this->wmic($details->windows_username, $details->man_ip_address, 'csproduct get uuid', $details->windows_password, $details->windows_domain, $display);
                                if ($wmi_result['status'] == 0) {
                                    # the command ran successfully, insert the correct line into the appropriate attribute
                                    $details->uuid = $wmi_result['output'][1];
                                }

                                # get the serial
                                $wmi_result = $this->wmic($details->windows_username, $details->man_ip_address, 'csproduct get IdentifyingNumber', $details->windows_password, $details->windows_domain, $display);
                                if ($wmi_result['status'] == 0) {
                                    # the command ran successfully, insert the correct line into the appropriate attribute
                                    $details->serial = $wmi_result['output'][1];
                                }

                                # get the hostname
                                $wmi_result = $this->wmic($details->windows_username, $details->man_ip_address, 'computersystem get name', $details->windows_password, $details->windows_domain, $display);
                                if ($wmi_result['status'] == 0) {
                                    # the command ran successfully, insert the correct line into the appropriate attribute
                                    $details->hostname = strtolower($wmi_result['output'][1]);
                                }

                                # get the domain
                                $wmi_result = $this->wmic($details->windows_username, $details->man_ip_address, 'computersystem get domain', $details->windows_password, $details->windows_domain, $display);
                                if ($wmi_result['status'] == 0) {
                                    # the command ran successfully, insert the correct line into the appropriate attribute
                                    $details->domain = strtolower($wmi_result['output'][1]);
                                }

                                # get the os name
                                $wmi_result = $this->wmic($details->windows_username, $details->man_ip_address, 'os get name', $details->windows_password, $details->windows_domain, $display);
                                if ($wmi_result['status'] == 0) {
                                    # the command ran successfully, insert the correct line into the appropriate attribute
                                    $details->os_name = $wmi_result['output'][1];
                                    $details->os_name = trim(substr($details->os_name, 0, stripos($details->os_name, '|')));
                                    if (stripos($details->os_name, " 95") !== false) {
                                        $details->os_family = "Windows 95";
                                    }
                                    if (stripos($details->os_name, " 98") !== false) {
                                        $details->os_family = "Windows 98";
                                    }
                                    if (stripos($details->os_name, " NT") !== false) {
                                        $details->os_family = "Windows NT";
                                    }
                                    if (stripos($details->os_name, " 2000") !== false) {
                                        $details->os_family = "Windows 2000";
                                    }
                                    if (stripos($details->os_name, " XP") !== false) {
                                        $details->os_family = "Windows XP";
                                    }
                                    if (stripos($details->os_name, "2003") !== false) {
                                        $details->os_family = "Windows 2003";
                                    }
                                    if (stripos($details->os_name, "Vista") !== false) {
                                        $details->os_family = "Windows Vista";
                                    }
                                    if (stripos($details->os_name, "2008") !== false) {
                                        $details->os_family = "Windows 2008";
                                    }
                                    if (stripos($details->os_name, "Windows 7") !== false) {
                                        $details->os_family = "Windows 7";
                                    }
                                    if (stripos($details->os_name, "Windows 8") !== false) {
                                        $details->os_family = "Windows 8";
                                    }
                                    if (stripos($details->os_name, "2012") !== false) {
                                        $details->os_family = "Windows 2012";
                                    }
                                    if (stripos($details->os_name, "Windows 10") !== false) {
                                        $details->os_family = "Windows 10";
                                    }
                                }

                                # get the manufacturer
                                $wmi_result = $this->wmic($details->windows_username, $details->man_ip_address, 'csproduct get vendor', $details->windows_password, $details->windows_domain, $display);
                                if ($wmi_result['status'] == 0) {
                                    # the command ran successfully, insert the correct line into the appropriate attribute
                                    $details->manufacturer = $wmi_result['output'][1];
                                }

                                # get the description
                                $wmi_result = $this->wmic($details->windows_username, $details->man_ip_address, 'os get description', $details->windows_password, $details->windows_domain, $display);
                                if ($wmi_result['status'] == 0) {
                                    # the command ran successfully, insert the correct line into the appropriate attribute
                                    $details->description = $wmi_result['output'][1];
                                }
                            }
                        }

                        # in the case where 5060 is detected and we have no other information, assign type 'voip phone'
                        if (empty($details->type) and 
                            empty($details->snmp_oid) and 
                            empty($details->uuid) and 
                            stripos($details->nmap_result, 'Discovered open port 5060') !== false) {
                            $details->type = 'voip phone';
                        }

                        # We have new details - create a new system key
                        $details->system_key = $this->m_system->create_system_key($details, $display);
                        $details = dns_validate($details, $display);
                        $details->system_id = $this->m_system->find_system($details, $display);

                        if ($display == 'y') {
                            $details->show_output = true;
                            echo "DEBUG ---------------\n";
                            $this->echo_details($details);
                            echo "DEBUG ---------------\n";
                        }

                        // insert or update the device
                        if (isset($details->system_id) and $details->system_id != '') {
                            // we have a system id - UPDATE
                            $log_details->message = strtoupper($details->last_seen_by) . " update for $details->man_ip_address (System ID $details->system_id)";
                            stdlog($log_details);
                            $details->original_timestamp = $this->m_devices_components->read($details->system_id, 'y', 'system', '', 'timestamp');
                            $details->original_last_seen_by = $this->m_devices_components->read($details->system_id, 'y', 'system', '', 'last_seen_by');
                            $this->m_system->update_system($details, $display);
                        } else {
                            // we have a new system - INSERT
                            $log_details->message = strtoupper($details->last_seen_by) . " insert for $details->man_ip_address";
                            stdlog($log_details);
                            $details->system_id = $this->m_system->insert_system($details, $display);
                        }
                        // grab some timestamps
                        $details->timestamp = $this->m_devices_components->read($details->system_id, 'y', 'system', '', 'timestamp');
                        $details->first_timestamp = $this->m_devices_components->read($details->system_id, 'y', 'system', '', 'first_timestamp');

                        // Insert an audit log
                        if (isset($this->user->full_name)) {
                            $temp_user = $this->user->full_name;
                        } else {
                            $temp_user = '';
                        }
                        $this->m_audit_log->create($details->system_id, $temp_user, $details->last_seen_by, $details->audits_ip, '', '', $details->timestamp);
                        unset($temp_user);

                        // Update the groups
                        if ($this->config->config['discovery_update_groups'] == 'y') {
                            $this->m_oa_group->update_system_groups($details);
                        }

                        // update any network interfaces and ip addresses retrieved by SNMP
                        if (isset($network_interfaces) and is_array($network_interfaces) and count($network_interfaces) > 0) {
                            $input = new stdClass();
                            $input->item = array();
                            $input->item = $network_interfaces;
                            $this->m_devices_components->process_component('network', $details, $input, $display);
                        }
                        // insert any ip addresses
                        if (isset($ip->item) and count($ip->item) > 0) {
                            $this->m_devices_components->process_component('ip', $details, $ip, $display);
                        }
                        // finish off with updating any network IPs that don't have a matching interface
                        $this->m_devices_components->update_missing_interfaces($details->system_id);
                        // insert any modules
                        if (isset($modules) and count($modules) > 0) {
                            $input = new stdClass();
                            $input->item = array();
                            $input->item = $modules;
                            $this->m_devices_components->process_component('module', $details, $input, $display);
                        }

                        // insert any found virtual machines
                        if (isset($guests) and is_array($guests) and count($guests) > 0) {
                            $vm = new stdClass();
                            $vm->item = array();
                            $vm->item = $guests;
                            $this->m_devices_components->process_component('vm', $details, $vm, $display);
                        }

                        if (isset($details->snmp_oid) and $details->snmp_oid != '' and $details->snmp_status == 'true') {
                            $credentials = new stdClass();
                            $credentials->ip_address = $details->man_ip_address;
                            $credentials->snmp_community = $details->snmp_community;
                            $credentials->snmp_version = $details->snmp_version;
                            $this->m_system->update_credentials($credentials, $details->system_id);
                            unset($credentials);
                            $log_details->message = 'SNMP credential update for '.$details->man_ip_address.' (System ID '.$details->system_id.')';
                            stdlog($log_details);
                            unset($credentials);
                        }

                        if (isset($details->ssh_username) and $details->ssh_username != '' and $details->ssh_status == 'true') {
                            $credentials = new stdClass();
                            $credentials->ip_address = $details->man_ip_address;
                            $credentials->ssh_username = $details->ssh_username;
                            $credentials->ssh_password = $details->ssh_password;
                            $this->m_system->update_credentials($credentials, $details->system_id);
                            unset($credentials);
                            $log_details->message = 'SSH credential update for '.$details->man_ip_address.' (System ID '.$details->system_id.')';
                            stdlog($log_details);
                        }

                        if (isset($details->windows_username) and $details->windows_username != '' and $details->wmi_status == 'true') {
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

                        // We got nmap only or nmap and snmp details, either way, $details->system_id is now set
                        // Output to DEBUG
                        if ($display == 'y') {
                            echo "DEBUG - System ID <a href='".base_url()."index.php/main/system_display/".$details->system_id."'>".$details->system_id."</a>\n";
                        }

                        // insert a blank to indicate we're finished this part of the discovery
                        // if required, the audit scripts will insert their own audit logs
                        $this->m_audit_log->update('debug', '', $details->system_id, $details->last_seen);

                        // Windows WMI audit - audit_windows.vbs
                        if ($details->wmi_status == "true" and $details->windows_username > '' and $details->windows_domain > '' and $details->windows_password > '') {
                            $log_details->message = 'Attempt Windows audit for '.$details->man_ip_address;
                            stdlog($log_details);

                            // Auditing a Windows target device from a Linux Open-AudIT Server
                            if (php_uname('s') == 'Linux') {
                                $details->windows_password = str_replace('$', '\$', $details->windows_password);
                                $error = "";
                                $command_string = 'smbclient \\\\\\\\'.$details->man_ip_address.'\\\\admin$ -U "'.str_replace("'", "", escapeshellarg($details->windows_domain)).'\\\\'.str_replace("'", "", escapeshellarg($details->windows_username)).'%'.str_replace("'", "", escapeshellarg($details->windows_password)).'" -c "put '.$filepath.'/audit_windows.vbs audit_windows.vbs" 2>&1';
                                exec($command_string, $output, $return_var);
                                if ($display == 'y') {
                                    $command_string = str_replace(str_replace("'", "", escapeshellarg($details->windows_password)), '******', $command_string);
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
                                    $command_string = "screen -D -m timeout 5m /usr/local/open-audit/other/winexe-static -U ".str_replace("'", "", escapeshellarg($details->windows_domain))."/".str_replace("'", "", escapeshellarg($details->windows_username))."%".str_replace("'", "", escapeshellarg($details->windows_password))." --uninstall //".str_replace("'", "", escapeshellarg($details->man_ip_address))." \"cscript c:\windows\audit_windows.vbs submit_online=y create_file=n strcomputer=".str_replace("'", "", escapeshellarg($details->man_ip_address))." url=".$url."index.php/system/add_system debugging=3 system_id=".$details->system_id."\" ";

                                    exec($command_string, $output, $return_var);
                                    if ($display == 'y') {
                                        $command_string = str_replace(str_replace("'", "", escapeshellarg($details->windows_password)), '******', $command_string);
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
                                    }
                                    $command_string = null;
                                    $output = null;
                                    $return_var = null;
                                }
                                $details->windows_password = str_replace('$', '\$', $details->windows_password);
                            }

                            // Auditing a Windows target device from a Windows Open-AudIT Server
                            if (php_uname('s') == 'Windows NT') {
                                $log_details->message = "Windows audit for $details->man_ip_address (System ID $details->system_id)";
                                stdlog($log_details);

                                if ($display == 'y') {
                                    $script_string = "$filepath\\audit_windows.vbs strcomputer=".$details->man_ip_address." submit_online=y create_file=n struser=".$details->windows_domain."\\".$details->windows_username." strpass=".$details->windows_password." url=".$url."index.php/system/add_system debugging=3 system_id=".$details->system_id;
                                    $command_string = "%comspec% /c start /b cscript //nologo ".$script_string;
                                    exec($command_string, $output, $return_var);
                                    $command_string = str_replace($details->windows_password, '******', $command_string);
                                    echo 'DEBUG - Command Executed: '.$command_string."\n";
                                    echo 'DEBUG - Return Value: '.$return_var."\n";
                                    echo "DEBUG - Command Output:\n";
                                    print_r($output);

                                    if ($return_var != '0') {
                                        $error = "Attempt to run audit_windows.vbs on $details->man_ip_address has failed";
                                        $log_details->message = $error;
                                        stdlog($log_details);
                                    } else {
                                        $log_details->message = "Attempt to run audit_windows.vbs on $details->man_ip_address has succeeded";
                                        stdlog($log_details);
                                    }
                                    $output = null;
                                    $return_var = null;
                                } else {
                                    $script_string = "$filepath\\audit_windows.vbs strcomputer=".$details->man_ip_address." submit_online=y create_file=n struser=".$details->windows_domain."\\".$details->windows_username." strpass=".$details->windows_password." url=".$url."index.php/system/add_system debugging=0  system_id=".$details->system_id;
                                    $command_string = "%comspec% /c start /b cscript //nologo ".$script_string." &";
                                    pclose(popen($command_string, "r"));
                                }
                                $command_string = null;
                            }
                        }

                        // SSH based audit (usually Linux, Unix, OSX, AIX or ESX)
                        if ($details->ssh_status == "true" and $details->os_family != 'DD-WRT') {
                            $log_details->message = "Starting ssh audit for $details->man_ip_address (System ID $details->system_id)";
                            stdlog($log_details);
                            $error = '';
                            if ($details->ssh_username == '' or $details->ssh_password == '') {
                                $script_string = "audit_linux.sh strcomputer=".$details->man_ip_address." submit_online=y create_file=n struser=".escapeshellarg($details->ssh_username)." strpass=".escapeshellarg($details->ssh_password)." debugging=0";
                                $log_details->message = "No credentials supplied for SSH audit for $details->man_ip_address (System ID $details->system_id)";
                                stdlog($log_details);
                            } else {
                                if (php_uname('s') == 'Linux') {
                                    // Auditing a target device from a Linux Open-AudIT Server
                                    if ($display == 'y') {
                                        echo "DEBUG - Attempting SSH audit.\n";
                                        #echo "DEBUG - struser: ".$details->ssh_username."\n";
                                        #echo "DEBUG - strpass: ".$details->ssh_password."\n";
                                    }
                                    $ssh_command = "timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null ".escapeshellarg($details->ssh_username)."@".escapeshellarg($details->man_ip_address)." uname ";
                                    $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                                    if ($ssh_result['status'] != '0') {
                                        $error = 'Audit routine for SSH audit on '.$details->man_ip_address.' failed to run uname on target';
                                        $log_details->message = $error;
                                        stdlog($log_details);
                                        if ($display == 'y') {
                                            echo "DEBUG - Running with 'ssh -v' for your inspection. Possible credential failure.\n";
                                            $ssh_command = "timeout 5m sshpass ssh -v -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null ".escapeshellarg($details->ssh_username)."@".escapeshellarg($details->man_ip_address)." uname 2>&1";
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

                                        $audit_script = '';
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
                                        if (strtolower($remote_os) === 'windowsnt') {
                                            $audit_script = '';
                                        }

                                        if ($error == '' and $audit_script != '') {
                                            $log_details->message = 'Attempting SSH audit for discovery on '.$details->man_ip_address.' ('.$remote_os.')';
                                            stdlog($log_details);

                                            // Attempt to copy the audit script
                                            $ssh_command = 'timeout 5m sshpass scp -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null '.$filepath.'/'.$audit_script.' '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).':'.$this->config->item('discovery_linux_script_directory');
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
                                                $ssh_command = "timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null ".escapeshellarg($details->ssh_username)."@".escapeshellarg($details->man_ip_address)." chmod " . $this->config->item('discovery_linux_script_permissions') . " " . $this->config->item('discovery_linux_script_directory') . $audit_script.' ';
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
                                                $ssh_command = 'timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).' which sudo ';
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
                                                        $ssh_command = 'timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).' "echo '.escapeshellarg($details->ssh_password).' | '.$sudo.' -S '.$this->config->item('discovery_linux_script_directory').$audit_script.' submit_online=y create_file=n url='.$url.'index.php/system/add_system debugging=1 system_id='.$details->system_id.' display=' . $display . '" ';
                                                        $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                                                        if ($ssh_result['status'] != '0') {
                                                            $error = 'SSH audit command for '.$remote_os.' audit using sudo on '.$details->man_ip_address.' failed. Attempting to run without sudo.';
                                                            $log_details->message = $error;
                                                            stdlog($log_details);
                                                            $ssh_command = 'timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).'  "'.$this->config->item('discovery_linux_script_directory').$audit_script.' submit_online=y create_file=n url='.$url.'index.php/system/add_system debugging=3 system_id='.$details->system_id.' display=' . $display . '" ';
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
                                                        $ssh_command = 'timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).' "'.$this->config->item('discovery_linux_script_directory').$audit_script.' submit_online=y create_file=n url='.$url.'index.php/system/add_system debugging=1 system_id='.$details->system_id.' display=' . $display . '" 2>/dev/null';
                                                        $ssh_result = $this->run_ssh($ssh_command, $details->ssh_password, $display);
                                                        if ($ssh_result['status'] != '0') {
                                                            $error = 'SSH audit command for '.$remote_os.' audit script on '.$details->man_ip_address.' failed';
                                                            $log_details->message = $error;
                                                            stdlog($log_details);
                                                        }
                                                    }
                                                } else {
                                                    # ESXi
                                                    $ssh_command = 'timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null '.escapeshellarg($details->ssh_username).'@'.escapeshellarg($details->man_ip_address).' "'.$this->config->item('discovery_linux_script_directory').$audit_script.' submit_online=y create_file=n debugging=0 echo_output=y system_id='.$details->system_id.'" 2>/dev/null';
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
                                                        foreach ($esx_xml->children() as $child) {
                                                            if ($child->getName() === 'sys') {
                                                                $esx_details = (object) $esx_xml->sys;
                                                                if (!isset($esx_details->man_ip_address) or $esx_details->man_ip_address == '') {
                                                                    $esx_details->man_ip_address = $details->man_ip_address;
                                                                }
                                                                $esx_details->system_key = $this->m_system->create_system_key($esx_details, $display);
                                                                $esx_details->system_id = $this->m_system->find_system($esx_details, $display);
                                                                $esx_details->timestamp = $details->timestamp;

                                                                if (isset($esx_details->system_id) and $esx_details->system_id != '') {
                                                                    // we have an existing device
                                                                    $esx_details->original_last_seen_by = $this->m_devices_components->read($esx_details->system_id, 'y', 'system', '', 'last_seen_by');
                                                                    $esx_details->original_timestamp = $this->m_devices_components->read($esx_details->system_id, 'y', 'system', '', 'timestamp');
                                                                    $this->m_system->update_system($esx_details);
                                                                    $log_details->message = "ESX update for $esx_details->man_ip_address (System ID $esx_details->system_id)";
                                                                    stdlog($log_details);
                                                                } else {
                                                                    // we have a new system
                                                                    $esx_details->system_id = $this->m_system->insert_system($esx_details);
                                                                    $log_details->message = "ESX insert for $esx_details->man_ip_address (System ID $esx_details->system_id)";
                                                                    stdlog($log_details);
                                                                }
                                                                if (!isset($esx_details->audits_ip)) {
                                                                    $esx_details->audits_ip = $details->audits_ip;
                                                                }

                                                                if (isset($this->user->full_name)) {
                                                                    $temp_user = $this->user->full_name;
                                                                } else {
                                                                    $temp_user = '';
                                                                }
                                                                $this->m_audit_log->create($esx_details->system_id, $temp_user, $esx_details->last_seen_by, $esx_details->audits_ip, '', '', $esx_details->timestamp);
                                                                unset($temp_user);

                                                            }
                                                        }
                                                        $this->m_devices_components->process_component('network', $esx_details, $esx_xml->network, $display);
                                                        $this->m_devices_components->process_component('software', $esx_details, $esx_xml->software, $display);
                                                        $this->m_devices_components->process_component('processor', $esx_details, $esx_xml->processor, $display);
                                                        $this->m_devices_components->process_component('bios', $esx_details, $esx_xml->bios, $display);
                                                        $this->m_devices_components->process_component('memory', $esx_details, $esx_xml->memory, $display);
                                                        $this->m_devices_components->process_component('motherboard', $esx_details, $esx_xml->motherboard, $display);
                                                        $this->m_devices_components->process_component('video', $esx_details, $esx_xml->video, $display);
                                                        $this->m_devices_components->process_component('vm', $esx_details, $esx_xml->vm, $display);
                                                        $this->m_devices_components->process_component('ip', $esx_details, $esx_xml->ip, $display);
                                                    }
                                                } // end of ESXi
                                            } // end of run audit script

                                            if ($error == '') {
                                                $log_details->message = 'Successful SSH audit for discovery on '.$details->man_ip_address.' ('.$remote_os.')';
                                                stdlog($log_details);
                                            }
                                        } // End of if error
                                    } // end of uname attempt
                                } // Close Linux server

                                if (php_uname('s') == 'Windows NT') {
                                    // Auditing a unix based target device from a Windows Open-AudIT Server
                                    if ($display == 'y') {
                                        echo "DEBUG - Attempting SSH audit.\n";
                                        #echo "DEBUG - struser: ".$details->ssh_username."\n";
                                        #echo "DEBUG - strpass: ".$details->ssh_password."\n";
                                    }
                                    $error = '';
                                    $audit_script = '';
                                    $command_string = "echo y | $filepath\\plink.exe -ssh ".$details->ssh_username."@".$details->man_ip_address." -pw ".$this->escape_plink_command($details->ssh_password)." exit";
                                    exec($command_string, $output, $return_var);
                                    if ($display == 'y') {
                                        $command_string = str_replace($this->escape_plink_command($details->ssh_password), '******', $command_string);
                                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                                        echo 'DEBUG - Return Value: '.$return_var."\n";
                                        if ($return_var != '0') {
                                            echo "DEBUG - Command Output:\n";
                                            print_r($output);
                                        }
                                    }
                                    if ($return_var != '0') {
                                        $error = 'Audit routine for SSH audit failed to store SSH sig for '.$details->man_ip_address . ' failed';
                                        $log_details->message = $error;
                                        stdlog($log_details);
                                    } else {
                                        $log_details->message = 'Audit routine for SSH audit stored SSH sig for '.$details->man_ip_address . ' succeeded';
                                        stdlog($log_details);
                                    }
                                    $command_string = null;
                                    $output = null;
                                    $return_var = null;
                                    $remote_os = "";

                                    if ($error == '') {
                                        $command_string = "$filepath\\plink.exe -ssh ".$details->ssh_username."@".$details->man_ip_address." -pw ".$this->escape_plink_command($details->ssh_password)." uname";
                                        exec($command_string, $output, $return_var);
                                        if ($display == 'y') {
                                            $command_string = str_replace($this->escape_plink_command($details->ssh_password), '******', $command_string);
                                            echo 'DEBUG - Command Executed: '.$command_string."\n";
                                            echo 'DEBUG - Return Value: '.$return_var."\n";
                                            echo "DEBUG - Command Output:\n";
                                            print_r($output);
                                        }
                                        // Linux, Darwin, ESX, AIX
                                        if (isset($output[0]) and $output[0] > '') {
                                            $remote_os = $output[0];
                                        } else {
                                            $remote_os = "";
                                        }
                                        if ($return_var != '0') {
                                            $error = 'Audit routine for SSH audit ran uname (' . $remote_os . ') on '.$details->man_ip_address . ' and failed';
                                            $log_details->message = $error;
                                            stdlog($log_details);
                                        } else {
                                            $log_details->message = 'Audit routine for SSH audit ran uname (' . $remote_os . ') on '.$details->man_ip_address . ' and succeeded';
                                            stdlog($log_details);
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
                                        $command_string = "$filepath\\pscp.exe -pw ".$this->escape_plink_command($details->ssh_password)." $filepath\\$audit_script ".$details->ssh_username."@".$details->man_ip_address.":".$this->config->item('discovery_linux_script_directory');
                                        exec($command_string, $output, $return_var);
                                        if ($display == 'y') {
                                            $command_string = str_replace($this->escape_plink_command($details->ssh_password), '******', $command_string);
                                            echo 'DEBUG - Command Executed: '.$command_string."\n";
                                            echo 'DEBUG - Return Value: '.$return_var."\n";
                                            echo "DEBUG - Command Output:\n";
                                            print_r($output);
                                        }
                                        if ($return_var != '0') {
                                            $error = 'SSH copy of '.$audit_script.' to '.$details->man_ip_address.' has failed';
                                            $log_details->message = $error;
                                            stdlog($log_details);
                                        } else {
                                            $log_details->message = 'SSH copy of '.$audit_script.' to '.$details->man_ip_address.' has succeeded';
                                            stdlog($log_details);
                                        }
                                        $command_string = null;
                                        $output = null;
                                        $return_var = null;
                                    }

                                    // Attempt to chmod the script so it's executable
                                    if ($error == '' and $audit_script != '') {
                                        $command_string = "$filepath\\plink.exe -pw ".$this->escape_plink_command($details->ssh_password)." ".$details->ssh_username."@".$details->man_ip_address." chmod " . $this->config->item('discovery_linux_script_permissions') . " " . $this->config->item('discovery_linux_script_directory') . $audit_script;
                                        exec($command_string, $output, $return_var);
                                        if ($display == 'y') {
                                            $command_string = str_replace($this->escape_plink_command($details->ssh_password), '******', $command_string);
                                            echo 'DEBUG - Command Executed: '.$command_string."\n";
                                            echo 'DEBUG - Return Value: '.$return_var."\n";
                                            echo "DEBUG - Command Output:\n";
                                            print_r($output);
                                        }
                                        if ($return_var != '0') {
                                            $error = 'SSH chmod command for '.$this->config->item('discovery_linux_script_directory').$audit_script.' audit script on '.$details->man_ip_address.' failed';
                                            $log_details->message = $error;
                                            stdlog($log_details);
                                            # as at 1.8.4 DO NOT fail on this as an existing script may already be +x
                                            # at least try running it anyway (below)
                                            # TODO - fix this with a text for +x and make a decision to proceed based on that
                                            $error = '';
                                        } else {
                                            $log_details->message = 'SSH chmod command for '.$this->config->item('discovery_linux_script_directory').$audit_script.' audit script on '.$details->man_ip_address.' succeeded';
                                            stdlog($log_details);
                                        }
                                        $command_string = null;
                                        $output = null;
                                        $return_var = null;
                                    }

                                    if ($error == '' and $audit_script != 'audit_esxi.sh') {
                                        $sudo = '';
                                        // Attempt to determine if SUDO is present on target system
                                        if ($error == '' and $audit_script != '' and $details->ssh_username != 'root') {
                                            $command_string = "$filepath\\plink.exe -pw ".$this->escape_plink_command($details->ssh_password)." ".$details->ssh_username."@".$details->man_ip_address." which sudo";
                                            exec($command_string, $output, $return_var);
                                            if ($display == 'y') {
                                                $command_string = str_replace($this->escape_plink_command($details->ssh_password), '******', $command_string);
                                                echo 'DEBUG - Command Executed: '.$command_string."\n";
                                                echo 'DEBUG - Return Value: '.$return_var."\n";
                                                echo "DEBUG - Command Output:\n";
                                                print_r($output);
                                            }
                                            if ($return_var != '0') {
                                                $log_details->message = 'SSH which sudo command for ' . $remote_os . ' audit script on ' . $details->man_ip_address . ' failed';
                                                stdlog($log_details);
                                            } else {
                                                $log_details->message = 'SSH which sudo command for ' . $remote_os . ' audit script on ' . $details->man_ip_address . ' succeeded';
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
                                                $command_string = "$filepath\\plink.exe -pw ".$this->escape_plink_command($details->ssh_password)." ".$details->ssh_username."@".$details->man_ip_address." \"echo ".$this->escape_plink_command($details->ssh_password)." | $sudo -S ".$this->config->item('discovery_linux_script_directory').$audit_script." submit_online=y create_file=n url=".$url."index.php/system/add_system debugging=1 system_id=".$details->system_id." self_delete=y\"";
                                                @exec($command_string, $output, $return_var);
                                                if ($display == 'y') {
                                                    $command_string = str_replace($this->escape_plink_command($details->ssh_password), '******', $command_string);
                                                    echo 'DEBUG - Command Executed: '.$command_string."\n";
                                                    echo 'DEBUG - Return Value: '.$return_var."\n";
                                                    echo "DEBUG - Command Output:\n";
                                                    print_r($output);
                                                }
                                                if ($return_var != '0') {
                                                    $error = 'SSH run audit command for '.$audit_script.' audit script on '.$details->man_ip_address.' failed';
                                                    $log_details->message = $error;
                                                    stdlog($log_details);
                                                    $command_string = $filepath.'\\plink.exe -pw '.$this->escape_plink_command($details->ssh_password).' '.$details->ssh_username.'@'.$details->man_ip_address." \"".$this->config->item('discovery_linux_script_directory').$audit_script." submit_online=y create_file=n url=".$url."index.php/system/add_system debugging=1 system_id=".$details->system_id." self_delete=y\"";
                                                    @exec($command_string, $output, $return_var);
                                                    if ($display == 'y') {
                                                        $command_string = str_replace($this->escape_plink_command($details->ssh_password), '******', $command_string);
                                                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                                                        echo 'DEBUG - Return Value: '.$return_var."\n";
                                                        echo "DEBUG - Command Output:\n";
                                                        print_r($output);
                                                    }
                                                    if ($return_var != '0') {
                                                        $error = 'SSH run audit command for '.$audit_script.' script on '.$details->man_ip_address.' running without sudo has failed';
                                                        $log_details->message = $error;
                                                        stdlog($log_details);
                                                    } else {
                                                        $log_details->message = 'SSH run audit command for '.$audit_script.' script on '.$details->man_ip_address.' running without sudo has succeeded';
                                                        stdlog($log_details);
                                                    }
                                                } else {
                                                    $log_details->message = 'SSH run audit command for '.$audit_script.' audit script on '.$details->man_ip_address.' succeeded';
                                                    stdlog($log_details);
                                                }
                                                $command_string = null;
                                                $output = null;
                                                $return_var = null;
                                            } else {
                                                $command_string = "$filepath\\plink.exe -pw ".$this->escape_plink_command($details->ssh_password)." ".$details->ssh_username."@".$details->man_ip_address." \"".$this->config->item('discovery_linux_script_directory').$audit_script." submit_online=y create_file=n url=".$url."index.php/system/add_system debugging=1 system_id=".$details->system_id." self_delete=y\"";
                                                @exec($command_string, $output, $return_var);
                                                if ($display == 'y') {
                                                    $command_string = str_replace($this->escape_plink_command($details->ssh_password), '******', $command_string);
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
                                                    #exit();
                                                } else {
                                                    if ($details->ssh_username == 'root') {
                                                        $log_details->message = 'SSH audit command for '.$remote_os.' '.$audit_script.' as root on '.$details->man_ip_address.' succeeded';
                                                    } else {
                                                        $log_details->message = 'SSH audit command for '.$remote_os.' '.$audit_script.' not as root and not using sudo on '.$details->man_ip_address.' succeeded';
                                                    }
                                                    stdlog($log_details);
                                                }
                                            } // end of use sudo / root
                                        }
                                    }
                                    if ($error == '' and $audit_script == 'audit_esxi.sh') {
                                        // Audit ESXi
                                        $command_string = "$filepath\\plink.exe -pw ".$this->escape_plink_command($details->ssh_password)." ".$details->ssh_username."@".$details->man_ip_address." \"".$this->config->item('discovery_linux_script_directory').$audit_script." submit_online=n create_file=n debugging=0 echo_output=y url=".$url."index.php/system/add_system system_id=".$details->system_id."\"";
                                        # this is the linux command # $command_string = 'timeout 5m sshpass -p ' . escapeshellarg($details->ssh_password) . ' ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null ' . escapeshellarg($details->ssh_username) . '@' . escapeshellarg($details->man_ip_address) . ' "' . $this->config->item('discovery_linux_script_directory') . $audit_script . ' submit_online=y create_file=n debugging=0 echo_output=y system_id=' . $details->system_id . '" 2>/dev/null';
                                        @exec($command_string, $output, $return_var);
                                        if ($display == 'y') {
                                            $command_string = str_replace($this->escape_plink_command($details->ssh_password), '******', $command_string);
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
                                            $log_details->message = 'SSH audit command for ESXi audit script on '.$details->man_ip_address.' succeeded';
                                            stdlog($log_details);
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
                                                $error = 'Invalid XML input for ESX audit script';
                                                $log_details->message = $error;
                                                stdlog($log_details);
                                            }
                                            if ($error == '') {
                                                $count = 0;
                                                // $this->load->model('m_processor');
                                                // $this->load->model('m_bios');
                                                // $this->load->model('m_memory');
                                                // $this->load->model('m_motherboard');
                                                // $this->load->model('m_video');

                                                foreach ($esx_xml->children() as $child) {
                                                    if ($child->getName() === 'sys') {
                                                        $esx_details = (object) $esx_xml->sys;
                                                        $esx_details->system_key = $this->m_system->create_system_key($esx_details, $display);
                                                        $esx_details->system_id = $this->m_system->find_system($esx_details);
                                                        $esx_details->timestamp = $details->timestamp;
                                                        if ((!isset($esx_details->man_ip_address) or $esx_details->man_ip_address == '') and
                                                            isset($details->man_ip_address) and $details->man_ip_address != '') {
                                                            $esx_details->man_ip_address = $details->man_ip_address;
                                                        }
                                                        if (isset($esx_details->system_id) and $esx_details->system_id != '') {
                                                            // we have an existing device
                                                            $esx_details->original_last_seen_by = $this->m_devices_components->read($esx_details->system_id, 'y', 'system', '', 'last_seen_by');
                                                            $esx_details->original_timestamp = $this->m_devices_components->read($esx_details->system_id, 'y', 'system', '', 'timestamp');
                                                            $this->m_system->update_system($esx_details);
                                                            $log_details->message = "ESX update for $esx_details->man_ip_address (System ID $esx_details->system_id)";
                                                            stdlog($log_details);
                                                        } else {
                                                            // we have a new system
                                                            $esx_details->system_id = $this->m_system->insert_system($esx_details);
                                                            $log_details->message = "ESX insert for $esx_details->man_ip_address (System ID $esx_details->system_id)";
                                                            stdlog($log_details);
                                                        }
                                                        if (!isset($esx_details->audits_ip)) {
                                                            $esx_details->audits_ip = $details->audits_ip;
                                                        }
                                                        if (isset($this->user->full_name)) {
                                                            $temp_user = $this->user->full_name;
                                                        } else {
                                                            $temp_user = '';
                                                        }
                                                        $this->m_audit_log->create($esx_details->system_id, $temp_user, $esx_details->last_seen_by, $esx_details->audits_ip, '', '', $esx_details->timestamp);
                                                        unset($temp_user);
                                                    }
                                                }
                                                $this->m_devices_components->process_component('network', $esx_details, $esx_xml->network, $display);
                                                $this->m_devices_components->process_component('software', $esx_details, $esx_xml->software, $display);
                                                $this->m_devices_components->process_component('processor', $esx_details, $esx_xml->processor, $display);
                                                $this->m_devices_components->process_component('bios', $esx_details, $esx_xml->bios, $display);
                                                $this->m_devices_components->process_component('memory', $esx_details, $esx_xml->memory, $display);
                                                $this->m_devices_components->process_component('motherboard', $esx_details, $esx_xml->motherboard, $display);
                                                $this->m_devices_components->process_component('video', $esx_details, $esx_xml->video, $display);
                                                $this->m_devices_components->process_component('vm', $esx_details, $esx_xml->vm, $display);
                                                $this->m_devices_components->process_component('ip', $esx_details, $esx_xml->ip, $display);
                                            }
                                        } // end of ESXi script
                                        if ($error == '') {
                                            $log_details->message = "Successful SSH audit for discovery on $details->man_ip_address ($remote_os)";
                                            stdlog($log_details);
                                        }
                                    } // End of remote OS == Linux, OSX or ESX
                                } // close Windows server
                            } // close SSH user and password
                        } // close ssh_status
                        $log_details->message = "Completed processing $details->man_ip_address (System ID $details->system_id)";
                        stdlog($log_details);
                    } // close the 'skip'
                } // close the device / complete switch
                unset($details);
            } // close for each device in XML
        } // close for form submission
    } // close function


    public function escape_plink_command($text) {
        $text = str_replace('"', '\"', $text);
        return($text);
    }

    public function run_ssh($ssh_command = '', $ssh_password = '', $ssh_display = 'n')
    {
        // $ssh_command should be your SSHPASS command string, sans password
        // ex: 'timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oUserKnownHostsFile=/dev/null user@target sleep 15'
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
                // stdOut
                $temp = stream_get_contents($pipes[1]);
                $return['output'] = explode("\n", $temp);
                if (end($return['output']) == '') {
                    unset($return['output'][count($return['output'])-1]);
                }
                fclose($pipes[1]);
                $return['status'] = proc_close($process);
            }
            if ($ssh_display == 'y') {
                $ssh_command = str_replace($ssh_password, '******', $ssh_command);
                $ssh_command = str_replace(escapeshellarg($ssh_password), '******', $ssh_command);
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














    function ssh($user = '', $host = '', $command = '', $password = '', $display = 'n')
    {
        $log_details = new stdClass();
        $log_details->severity = 7;
        $log_details->file = 'system';
        $log_details->display = $display;
        $return = array('output' => '', 'status' => '');

        if (php_uname('s') == 'Linux') {
            $descriptorspec = array(
                0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
                1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
                2 => array("file", "/dev/null", "a"), // stderr is a file to write to
            );
            $cwd = '/tmp';
            $env = array();
            if ($command != '') {
                $command_string = 'timeout 5m sshpass ssh -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null ' . $user . '@' . $host . ' "' . $command . '"';
                $process = proc_open($command_string, $descriptorspec, $pipes, $cwd, $env);
                if (is_resource($process)) {
                    fwrite($pipes[0], $password);
                    fclose($pipes[0]);
                    // stdOut
                    $temp = stream_get_contents($pipes[1]);
                    $return['output'] = explode("\n", $temp);
                    if (end($return['output']) == '') {
                        unset($return['output'][count($return['output'])-1]);
                    }
                    fclose($pipes[1]);
                    $return['status'] = proc_close($process);
                }
            }
        }

        if (php_uname('s') == 'Windows NT') {
            $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."\open-audit\other";
            $command_string = $filepath . '\plink.exe -ssh ' . $user . "@" . $host . ' -pw ' . str_replace('"', '\"', $password) . ' ' . $command;
            exec($command_string, $return['output'], $return['status']);
            if ((isset($return['output'][0]) and stripos($return['output'][0], 'password') !== false) or
                (isset($return['output'][0]) and stripos($return['output'][0], 'using keyboard-interactive authentication') !== false) or
                (isset($return['output'][1]) and stripos($return['output'][1], 'password') !== false) ) {
                $return['output'][0] = '';
                $return['status'] = 5;
            }
        }

        $command_string = str_replace($password, '******', $command_string);
        $command_string = str_replace(str_replace('"', '\"', $password), '******', $command_string);
        $command_string = str_replace(escapeshellarg($password), '******', $command_string);

        if ($display == 'y') {
            echo "\n";
            echo 'DEBUG - Command Executed: '.$command_string."\n";
            echo 'DEBUG - Return Value: '.$return['status']."\n";
            echo "DEBUG - Command Output:\n";
            $formatted_output = implode("\n", $return['output']);
            $formatted_output = htmlentities($formatted_output);
            $formatted_output = explode("\n", $formatted_output);
            if (end($formatted_output) == '') {
                unset($formatted_output[count($formatted_output)-1]);
            }
            print_r($formatted_output);
        }

        if ($return['status'] != '0') {
            $log_details->message = 'SSH command \'' . $command_string . '\' on ' . $host . ' failed';
            stdlog($log_details);
        } else {
            $log_details->message = 'SSH command \'' . $command_string . '\' on ' . $host . ' succeeded';
            stdlog($log_details);
        }

        return($return);
    }


    function wmic($user = '', $host = '', $command = '', $password = '', $domain = '', $display = 'n')
    {
        $log_details = new stdClass();
        $log_details->severity = 7;
        $log_details->file = 'system';
        $log_details->display = $display;
        $return = array('output' => '', 'status' => '');

        $password = str_replace('$', '\$', $password);

        if (php_uname('s') == 'Linux') {
            $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/open-audit/other";
            $command_string = 'timeout 5m ' . $filepath . "/winexe-static -U ".str_replace("'", "", escapeshellarg($domain))."/".str_replace("'", "", escapeshellarg($user))."%".str_replace("'", "", escapeshellarg($password))." --uninstall //".str_replace("'", "", escapeshellarg($host))." \"wmic $command\" ";
            exec($command_string, $return['output'], $return['status']);
        }

        if (php_uname('s') == 'Windows NT') {
            $command_string = '%comspec% /c start /b wmic /Node:"' . $host . '" /user:' . $domain . '\\' . $user . ' /password:"' . str_replace('"', '\"', $password) . '" ' . $command;
            exec($command_string, $return['output'], $return['status']);
        }

        if ($display == 'y') {
            $command_string = str_replace($password, '******', $command_string);
            $command_string = str_replace(str_replace('"', '\"', $password), '******', $command_string);
            $command_string = str_replace(escapeshellarg($password), '******', $command_string);
            echo 'DEBUG - Command Executed: '.$command_string."\n";
            echo 'DEBUG - Return Value: '.$return['status']."\n";
            echo "DEBUG - Command Output:\n";
            $formatted_output = implode("\n", $return['output']);
            $formatted_output = htmlentities($formatted_output);
            $formatted_output = explode("\n", $formatted_output);
            if (end($formatted_output) == '') {
                unset($formatted_output[count($formatted_output)-1]);
            }
            print_r($formatted_output);
            echo "\nDEBUG ---------------\n";
        }

        $password = str_replace('\$', '$', $password);

        if ($return['status'] != '0') {
            $log_details->message = 'WMIC command \'' . $command_string . '\' on ' . $host . ' failed';
            stdlog($log_details);
        } else {
            $log_details->message = 'WMIC command \'' . $command_string . '\' on ' . $host . ' succeeded';
            stdlog($log_details);
        }

        return($return);
    }

    function scp($user = '', $host = '', $source = '', $password = '', $destination = '', $display = 'n')
    {
        $log_details = new stdClass();
        $log_details->severity = 7;
        $log_details->file = 'system';
        $log_details->display = $display;
        $return = array('output' => '', 'status' => '');

        if (php_uname('s') == 'Linux') {
            $descriptorspec = array(
                0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
                1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
                2 => array("file", "/dev/null", "a"), // stderr is a file to write to
            );
            $cwd = '/tmp';
            $env = array();
            if ($command != '') {
                $command_string = 'timeout 5m sshpass scp -oStrictHostKeyChecking=no -oConnectTimeout=10 -oUserKnownHostsFile=/dev/null ' . $source . ' ' . escapeshellarg($user) . '@' . escapeshellarg($host) . ':' . $destination;
                $process = proc_open($command_string, $descriptorspec, $pipes, $cwd, $env);
                if (is_resource($process)) {
                    fwrite($pipes[0], $password);
                    fclose($pipes[0]);
                    // stdOut
                    $temp = stream_get_contents($pipes[1]);
                    $return['output'] = explode("\n", $temp);
                    if (end($return['output']) == '') {
                        unset($return['output'][count($return['output'])-1]);
                    }
                    fclose($pipes[1]);
                    $return['status'] = proc_close($process);
                }
            }
        }

        if (php_uname('s') == 'Windows NT') {
            $filepath = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."\open-audit\other";
            $command_string = $filepath . '\pscp.exe -pw "' . str_replace('"', '\"', $password) . '" ' . $source . ' ' . $user . '@' . $host . ':' . $destination;
            exec($command_string, $return['output'], $return['status']);
        }

        if ($display == 'y') {
            $command_string = str_replace($password, '******', $command_string);
            $command_string = str_replace(str_replace('"', '\"', $password), '******', $command_string);
            $command_string = str_replace(escapeshellarg($password), '******', $command_string);
            echo 'DEBUG - Command Executed: '.$command_string."\n";
            echo 'DEBUG - Return Value: '.$return['status']."\n";
            echo "DEBUG - Command Output:\n";
            $formatted_output = implode("\n", $return['output']);
            $formatted_output = htmlentities($formatted_output);
            $formatted_output = explode("\n", $formatted_output);
            if (end($formatted_output) == '') {
                unset($formatted_output[count($formatted_output)-1]);
            }
            print_r($formatted_output);
            echo "\nDEBUG ---------------\n";
        }

        if ($return['status'] != '0') {
            $log_details->message = 'SCP copy \'' . $source . '\' to ' . $host . ' failed';
            stdlog($log_details);
        } else {
            $log_details->message = 'SCP copy \'' . $source . '\' to ' . $host . ' succeeded';
            stdlog($log_details);
        }

        return($return);
    }

function echo_details ($details) {
    // remove all the null, false and Empty Strings but leaves 0 (zero) values
    $filtered_details = (object) array_filter((array) $details, 'strlen' );
    foreach ($filtered_details as $key => $value) {
        if (stripos($key, 'password') !== false) {
            $filtered_details->$key = '******';
        }
        if ($key == 'snmp_community') {
            $filtered_details->snmp_community = '******';
        }
    }
    print_r($filtered_details);
    unset($filtered_details);
}

}
