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
 * 
 * @version 1.12.8
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
        $this->load->helper('ssh');
        $this->load->helper('wmi');
        $this->load->library('session');
        $this->load->model('m_system');
        $this->load->model('m_oa_config');
        $this->m_oa_config->load_config();
        $timestamp = $this->config->config['timestamp'];
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
        // take a list of system.id's and run discovery on them
        // do not wait for the return result, go back to the webpage ASAP
        //
        // ids should be a comma separated list of device id's (integers) - no spaces
        // this will be converted to an array (system_ids)

        # enable the $_GET global
        parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);

        $log_details = new stdClass();
        $log_details->severity = 6;
        $log_details->file = 'system';

        $this->load->model('m_devices_components');
        $this->load->model('m_system');
        $this->load->model('m_oa_user');
        $this->load->library('encrypt');
        $this->load->helper('url');
        $system_ids = array();

        // accept a list passed into the function from PHP
        if ($ids != '') {
            $ids = str_replace(' ', '', $ids);
            $system_ids = explode(',', $ids);
            $log_details->message = "Accepted a list of system ids from PHP function call";
            stdlog($log_details);
        }

        // accept the "ids" POST variable as a list
        if (! empty($_POST['ids']) and count($system_ids) == 0) {
            $system_ids = explode(',', $_GET['ids']);
            $log_details->message = "Accepted a list of system ids from POST";
            stdlog($log_details);
        }
        unset($test);

        // accept a GET variable that's a comma separated list
        if (! empty($_GET['ids']) and count($system_ids) == 0) {
            $system_ids = explode(',', $_GET['ids']);
            $log_details->message = "Accepted a list of system ids from GET";
            stdlog($log_details);
        }
        unset($test);

        // accept a redirect from bulk credential update
        $test = @$this->session->flashdata('discover_list');
        if (strlen($test) > 0 and count($system_ids) == 0) {
            $system_ids = explode(',', $test);
            $log_details->message = "Accepted a list of system ids from FLASHDATA";
            stdlog($log_details);
        }
        unset($test);

        // make sure we have some ids
        if (count($system_ids) == 0) {
            $log_details->message = "No system ids supplied, ending";
            stdlog($log_details);
            return;
        }

        // spawn a discovery process for each system.id
        foreach ($system_ids as $key => $value) {
            $timestamp = $this->config->config['timestamp'];
            $system_id = $value;
            $credentials = new stdClass();
            $ip = ip_address_from_db($this->m_devices_components->read($system_id, 'y', 'system', '', 'ip'));
            $log_details->message = 'Discovery subnet starting for '.$ip;
            $log_details->severity = 7;
            stdlog($log_details);
            // $credentials = $this->m_system->get_credentials($system_id);
            if (isset($this->session->userdata['user_id']) and is_numeric($this->session->userdata['user_id'])) {
                unset($temp);
                $temp = $this->m_oa_user->get_user_details($this->session->userdata['user_id']);
                $credentials->last_user = $temp[0]->full_name;
            } else {
                $credentials->last_user = '';
            }
            $credentials->limit = 10;
            $credentials->count = 1;
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
            $sql = '/* discovery::discover_list */ INSERT INTO oa_temp (temp_id, temp_name, temp_value, temp_timestamp) VALUES (null, "Subnet Credentials - '.$ip.'", "'.$credentials.'", "'.$timestamp.'")';
            $query = $this->db->query($sql);
            // $credentials = "";


            // TODO - check if this IP fits into any existing subnets
            $temp = network_details($ip.'/30');
            $this->m_oa_config->update_blessed($temp->network.'/'.$temp->network_slash);
            unset($temp);

            if (php_uname('s') != 'Windows NT') {
                $filepath = $this->config->config['base_path'] . '/other';
            } else {
                $filepath = $this->config->config['base_path'] . '\\other';
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
            if (php_uname('s') != 'Windows NT') {
                // run the script and continue (do not wait for result)
                if (php_uname('s') == 'Darwin') {
                    $nohup = '';
                } else {
                    $nohup = 'nohup ';
                }
                $command_string = "$nohup $filepath/discover_subnet.sh subnet_range=$ip url=".$url."index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\" os_scan=" . $nmap_os . " > /dev/null 2>&1 &";

                #$command_string =        "$filepath/discover_subnet.sh subnet_range=$ip url=".$url."index.php/discovery/process_subnet submit_online=n echo_output=y create_file=n debugging=0 subnet_timestamp=\"$timestamp\" os_scan=" . $nmap_os . " 2>&1";

                exec($command_string, $output, $return_var);
                if ($return_var != '0') {
                    $log_details->message = 'Discovery subnet starting script discover_subnet.sh ('.$ip_address.') has failed';
                    $log_details->severity = 5;
                    stdlog($log_details);
                } else {
                    $log_details->message = $command_string;
                    $log_details->severity = 7;
                    stdlog($log_details);
                }

                // if ($return_var != '0') {
                //     $error = 'Discovery subnet starting script discover_subnet.vbs ('.$subnet_range.') has failed';
                //     $log_details->message = $error;
                //     stdlog($log_details);
                // } else {
                //     $script_result = '';
                //     foreach ($output as $line) {
                //         $script_result .= $line;
                //     }
                //     $script_result = preg_replace('/\s+/', ' ', $script_result);
                //     $script_result = str_replace("> <", "><", $script_result);
                //     $_POST['form_details'] = $script_result;
                //     $_POST['debug'] = true;
                //     $this->process_subnet();
                // }

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
                $bind = @ldap_bind($ad, $ad_user, $_POST['windows_password']);
                if ($bind) {
                    $log_details->message = 'Retrieving subnets from AD ' . $_POST['windows_domain'] . ' at ' . $_POST['server'];
                    stdlog($log_details);
                    $dn = "CN=Subnets,CN=Sites,CN=Configuration,dc=".implode(", dc=", explode(".", $_POST['windows_domain']));
                    $filter = "(&(objectclass=*))";
                    $justthese = array("distinguishedName", "name");
                    $sr = ldap_search($ad, $dn, $filter, $justthese);
                    $info = ldap_get_entries($ad, $sr);
                    for ($i = 0; $i < count($info)-1; $i++) {
                        if ($info[$i]['name'][0] != 'Subnets') {
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
                $filepath = $this->config->config['base_path'] . '\\other';

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
                $filepath = $this->config->config['base_path'] . '/other';
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
            #$this->data['credentials'] = new stdClass();
            if ($this->uri->segment(3) and $this->uri->segment(3)) {
                if (is_numeric($this->uri->segment(3))) {
                    $this->data['system_id'] = $this->uri->segment(3);
                    #$this->data['credentials'] = $this->m_system->get_credentials($this->data['system_id']);
                    $this->data['ip_address'] = ip_address_from_db($this->m_devices_components->read($this->data['system_id'], 'y', 'system', '', 'ip'));
                    $this->data['type'] = 'device';
                } else {
                    $this->data['system_id'] = "";
                    $this->data['ip_address'] = "";
                    $this->data['type'] = $this->uri->segment(3);
                }
            }
            if ($this->uri->segment(4) and is_numeric($this->uri->segment(4))) {
                $this->data['system_id'] = $this->uri->segment(4);
                #$this->data['credentials'] = $this->m_system->get_credentials($this->data['system_id']);
                $this->data['ip_address'] = ip_address_from_db($this->m_devices_components->read($this->data['system_id'], 'y', 'system', '', 'ip'));
            }
            if (!empty($this->data['system_id'])) {
                $temp_system = $this->m_system->get_system_summary($this->data['system_id']);
                $this->data['org_id'] = $temp_system[0]->org_id;
                $this->data['location_id'] = $temp_system[0]->location_id;
                unset($temp_system);
            }
            $this->load->model('m_oa_org');
            $this->data['orgs'] = $this->m_oa_org->get_org_names();
            $this->load->model('m_oa_location');
            $this->data['locations'] = $this->m_oa_location->get_location_names();
            $this->data['warning'] = '';
            
            $sql = "SELECT COUNT(*) AS `count` FROM credentials";
            $query = $this->db->query($sql);
            $result = $query->result();
            $row = $query->row();
            if (isset($row->count) and intval($row->count) == 0) {
                $this->data['warning'] = 'You do not have any credentials stored. Please create some using menu -> Admin -> Credentials -> Add Credential Set.';
            }
            $this->data['include'] = "v_discover_subnet";
            $this->data['sortcolumn'] = '1';
            $this->data['heading'] = 'Discovery';
            $this->load->view('v_template', $this->data);
        } else {
            // process the scan details and call the discovery script
            $this->load->model('m_oa_config');
            $this->m_oa_config->load_config();
            $this->load->helper('network_helper');

            $return_var = "";
            $output = "";
            $display = '';
            $timestamp = $this->config->config['timestamp'];

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
                $credentials->ip = $_POST['subnet_range'];
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
            if (strpos($subnet_range, '/') !== false) {
                $this->m_oa_config->update_blessed($subnet_range);
            } else {
                if (filter_var($subnet_range, FILTER_VALIDATE_IP) !== false) {
                    $temp = network_details($subnet_range.'/30');
                    $this->m_oa_config->update_blessed($temp->network.'/'.$temp->network_slash);
                }
            }

            // we encode the supplied credentials and store them in the database
            // the script will simply pass back the timestamp and the credentials will be retrieved and used
            $this->load->library('encrypt');

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
                    $group_dynamic_select = "SELECT distinct(system.id) FROM system, ip WHERE ( ip.version = '4' AND ip.ip >= '".ip_address_to_db($subnet_details->host_min)."' and ip.ip <= '".ip_address_to_db($subnet_details->host_max)."' and ip.netmask = '".$subnet_details->netmask."' and ip.system_id = system.id and ip.current = 'y' and system.status = 'production') UNION SELECT distinct(system.id) FROM system WHERE (system.ip >= '".ip_address_to_db($subnet_details->host_min)."' and system.ip <= '".ip_address_to_db($subnet_details->host_max)."' and system.status = 'production')";
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
            if (php_uname('s') != 'Windows NT') {
                $filepath = $this->config->config['base_path'] . '/other';
            } else {
                $filepath = $this->config->config['base_path'] . '\\other';
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

            if (php_uname('s') != 'Windows NT') {
                if ($subnet_range != '') {
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
                        #$command_string = "nohup $filepath/discover_subnet.sh subnet_range=$subnet_range url=".$url."index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\" os_scan=" . $nmap_os . " > /dev/null 2>&1 &";
                        $command_string = "$filepath/discover_subnet.sh subnet_range=$subnet_range url=".$url."index.php/discovery/process_subnet submit_online=y echo_output=n create_file=n debugging=0 subnet_timestamp=\"$timestamp\" os_scan=" . $nmap_os . " > /dev/null 2>&1 &";
                        if (php_uname('s') == 'Linux') {
                            $command_string = 'nohup ' . $command_string;
                        }
                        @exec($command_string, $output, $return_var);
                        if ($return_var != '0') {
                            $error = 'Discovery subnet starting script discover_subnet.sh ('.$subnet_range.') has failed';
                            $log_details->message = $error;
                            stdlog($log_details);
                        } else {
                            $error = 'Discovery subnet starting script discover_subnet.sh ('.$subnet_range.') has started';
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
            $this->load->model('m_scripts');

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
                    $log_details->message = "Audit submission from an IP (" . $_SERVER['REMOTE_ADDR'] . ") not in the list of blessed subnets, exiting.";
                    echo "\n" . $log_details->message . "\n";
                    stdlog($log_details);
                }
                exit;
            }

            $this->load->helper('url');
            $this->load->model('m_credentials');

            if ($display == 'y') {
                echo 'DEBUG - <a href=\''.base_url()."index.php/discovery/discover_subnet'>Back to input page</a>\n";
                echo 'DEBUG - <a href=\''.base_url()."index.php'>Front Page</a>\n";
            }

            if (php_uname('s') != 'Windows NT') {
                $filepath = $this->config->config['base_path'] . '/other';
            } else {
                $filepath = $this->config->config['base_path'] . '\\other';
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
            $this->load->helper('ipmi');
            if (extension_loaded('snmp')) {
                $this->load->helper('snmp');
                $this->load->helper('snmp_oid');
            }
            $this->load->model('m_system');
            $this->load->model('m_oa_group');
            $this->load->model('m_audit_log');
            $this->load->model('m_change_log');
            $this->load->model('m_devices_components');
            $this->load->model('m_devices');
            $timestamp = $this->config->config['timestamp'];

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
                    if (stripos(' ' . $this->config->config['discovery_ip_exclude'] . ' ', ' ' . $details->ip . ' ') !== false) {
                        # Our ip address matched an ip in the discovery_ip_exclude list - exit
                        $log_details->message = $details->ip . ' is in the list of excluded ip addresses - skipping.';
                        stdlog($log_details);
                        $skip = true;
                    }
                    if (!$skip) {
                        $log_details->message = 'Start processing '.$details->ip;
                        stdlog($log_details);
                        $count++;
                        $details->last_seen = $timestamp;
                        $details->last_user = '';
                        $details->last_seen_by = 'nmap';
                        $details->domain = '';
                        $details->audits_ip = ip_address_to_db($_SERVER['REMOTE_ADDR']);
                        $details->hostname = '';
                        if ($this->config->item('discovery_use_dns') == 'y') {
                            $details = dns_validate($details, $display);
                        }
                        $details->id = '';
                        $details->id = $this->m_system->find_system($details);
                        $details->last_seen_user = '';
                        $details->network_address = '';
                        $details->limit = 1000000;
                        $details->count = 0;
                        $details->use_https = '';

                        // # 1.12.6
                        $credentials = array();

                        // If we find a device and we're in DEBUG, output a result line.
                        if ($display == 'y') {
                            if (!empty($details->id)) {
                                echo 'DEBUG - Device found with ID: <a href=\''.base_url().'index.php/main/system_display/'.$details->id.'\'>'.$details->id."</a>.\n";
                            }
                        }

                        // Device specific credentials
                        if (!empty($details->id)) {
                            $temp = $this->m_devices_components->read(intval($details->id), 'y', 'credential', '', '*');
                            if (count($temp) > 0) {
                                foreach ($temp as $credential) {
                                    $credentials[] = $credential;
                                }
                            }
                            unset($temp);
                        }

                        // Credential Sets
                        $temp = $this->m_credentials->collection();
                        if (count($temp) > 0) {
                            $credentials = array_merge($credentials, $temp);
                        }
                        unset($temp);

                        // supplied credentials
                        $sql = '/* discovery::process_subnet */ SELECT temp_value FROM oa_temp WHERE temp_name = \'Subnet Credentials - '.$details->subnet_range.'\' and temp_timestamp = \''.$details->subnet_timestamp.'\' ORDER BY temp_id DESC LIMIT 1';
                        $query = $this->db->query($sql);
                        $row = $query->row();
                        $supplied_credentials = @$row->temp_value;
                        $supplied = new stdClass();
                        if (isset($supplied_credentials) and $supplied_credentials > '') {
                            $supplied_credentials = $this->encrypt->decode($supplied_credentials);
                            $supplied_credentials = json_decode($supplied_credentials);
                            $details->last_seen_user =  @$supplied_credentials->last_user;
                            $details->network_address =   @$supplied_credentials->network_address;
                            $details->limit = (int)@$supplied_credentials->limit;
                            $details->count = (int)@$supplied_credentials->count;
                            $details->org_id = (int)@$supplied_credentials->org;
                            $details->location_id = (int)@$supplied_credentials->location;
                            $details->org_id = (int)@$supplied_credentials->org;
                            $details->location_id = (int)@$supplied_credentials->location;
                            $details->use_https = (string)@$supplied_credentials->use_https;
                        }
                        # TODO - replace the ugly code below
                        $creds = array();
                        foreach ($credentials as $credential) {
                            $creds[] = $credential->attributes;
                        }
                        unset($credentials);
                        $credentials = $creds;
                        unset($creds);

                        // default Open-AudIT credentials
                        // $default = $this->m_oa_config->get_credentials();
                        // unset($default);

                        if (intval($details->count) >= intval($details->limit)) {
                            # we have discovered the requested number of devcies
                            $log_details->message = 'Count from DB is higher than requested limit, exiting. Count: ' . $details->count . ' Limit: ' . $details->limit;
                            stdlog($log_details);
                            return;
                        }
                        if (empty($supplied_credentials)) {
                            $supplied_credentials = new stdClass();
                        }
                        if (empty($supplied_credentials->count)) {
                            $supplied_credentials->count = 0;
                        } else {
                            $supplied_credentials->count++;
                        }

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
                        $log_details->message = 'WMI Status is '.$details->wmi_status.' on '.$details->ip;
                        stdlog($log_details);

                        // On OSX we cannot run Nmap and get a UDP port result for 161 as 'You requested a scan type which requires root privileges.' So just set the snmp_status to true and attempt to snmp_audit the target device
                        if (php_uname('s') == 'Darwin') {
                            $details->snmp_status = 'true';
                            $details->nmap_ports .= ',161/udp/snmp';
                        }

                        $log_details->message = 'SNMP Status is '.$details->snmp_status.' on '.$details->ip;
                        stdlog($log_details);

                        $log_details->message = 'SSH Status is '.$details->ssh_status.' on '.$details->ip;
                        stdlog($log_details);

                        // get rid of os_* as nmap only guesses
                        unset($details->os_group);
                        unset($details->os_family);
                        unset($details->os_name);


                        # IPMI audit
                        # TODO - make a ipmi_helper::ipmi_credentials function
                        // if (isset($this->config->config['discovery_use_ipmi']) and $this->config->config['discovery_use_ipmi'] == 'y') {
                        //     $credentials_ipmi = new stdClass();
                        //     $credentials_ipmi->type = 'ipmi';
                        //     $credentials_ipmi->credentials = new stdClass();
                        //     $credentials_ipmi->credentials->username = $this->config->config['default_ipmi_username'];
                        //     $credentials_ipmi->credentials->password = $this->config->config['default_ipmi_username'];
                        //     $credentials[] = $credentials_ipmi;
                        //     $ipmi_details = ipmi_audit($details->ip, $credentials_ipmi, $display);
                        //     if (!empty($ipmi_details)) {
                        //         foreach ($ipmi_details as $key => $value) {
                        //             if (!empty($value)) {
                        //                 $details->key = $value;
                        //             }
                        //         }
                        //     }
                        //     if ($details->serial) {
                        //         $details->last_seen_by = 'ipmi';
                        //         $details->audits_ip = '127.0.0.1';
                        //     }
                        // }

                        // SNMP audit
                        if (!extension_loaded('snmp') and $details->snmp_status == 'true') {
                            $log_details->message = 'PHP extension not loaded, skipping SNMP data retrieval for ' . $details->ip;
                            stdlog($log_details);
                        }

                        if (extension_loaded('snmp') and $details->snmp_status == 'true') {
                            $log_details->message = 'Testing SNMP credentials for '.$details->ip;
                            stdlog($log_details);
                            $credentials_snmp = snmp_credentials($details->ip, $credentials, $display);
                        } else {
                            $credentials_snmp = false;
                        }

                        if ($credentials_snmp) {
                            $temp_array = snmp_audit($details->ip, $credentials_snmp, $display);
                            if (!empty($temp_array['details'])) {
                                foreach ($temp_array['details'] as $key => $value) {
                                    if (!empty($value)) {
                                        $details->$key = $value;
                                    }
                                }
                                $details->last_seen_by = 'snmp';
                                $details->audits_ip = '127.0.0.1';
                            }
                            if (!empty($temp_array['interfaces'])) {
                                $network_interfaces = $temp_array['interfaces'];
                            }
                            if (!empty($temp_array['modules'])) {
                                $modules = $temp_array['modules'];
                            }
                            if (!empty($temp_array['ip'])) {
                                $ip = $temp_array['ip'];
                            }
                            if (!empty($temp_array['guests'])) {
                                $guests = $temp_array['guests'];
                            }
                        }

                        // new for 1.8.4 - if we have a non-computer, do not attempt to connect using SSH
                        if ($details->type != 'computer' and $details->type != '' and $details->type != 'unknown' and $details->os_family != 'DD-WRT' and stripos($details->sysDescr, 'dd-wrt') === false) {
                            $log_details->message = 'Not a computer and not a DD-WRT device, setting SSH status to false for '.$details->ip.' (System ID '.$details->id.')';
                            stdlog($log_details);
                            $details->ssh_status = 'false';
                        }
                        # test for working SSH credentials
                        if ($details->ssh_status == 'true') {
                            $log_details->message = 'Testing SSH credentials for '.$details->ip;
                            stdlog($log_details);
                            $credentials_ssh = ssh_credentials($details->ip, $credentials, $display);
                        } else {
                            $credentials_ssh = false;
                        }
                        # run SSH audit commands
                        if ($details->ssh_status == 'true' and $credentials_ssh) {
                            $ssh_details = ssh_audit($details->ip, $credentials_ssh, $display);
                            if (!empty($ssh_details)) {
                                $details->last_seen_by = 'ssh';
                                $details->audits_ip = '127.0.0.1';
                                foreach ($ssh_details as $key => $value) {
                                    if (!empty($value)) {
                                        $details->$key = $value;
                                    }
                                }
                            }
                        }

                        // test for working Windows credentials
                        if ($details->wmi_status == 'true') {
                            $log_details->message = 'Testing Windows credentials for '.$details->ip;
                            stdlog($log_details);
                            $credentials_windows = windows_credentials($details->ip, $credentials, $display);
                        } else {
                            $credentials_windows = false;
                        }
                        # run Windows audit commands
                        if ($details->wmi_status == 'true' and $credentials_windows) {
                            $windows_details = wmi_audit($details->ip, $credentials_windows, $display);
                            if (!empty($windows_details)) {
                                $details->last_seen_by = 'windows';
                                $details->audits_ip = '127.0.0.1';
                                foreach ($windows_details as $key => $value) {
                                    if (!empty($value)) {
                                        $details->$key = $value;
                                    }
                                }
                            }
                        }


                        # in the case where port 5060 is detected and we have no other information, assign type 'voip phone'
                        if (empty($details->type) and empty($details->snmp_oid) and empty($details->uuid) and stripos($details->nmap_result, '5060/') !== false) {
                            $details->type = 'voip phone';
                        }

                        if ($this->config->item('discovery_use_dns') == 'y') {
                            $details = dns_validate($details, $display);
                        }
                        $details->id = $this->m_system->find_system($details, $display);

                        if ($display == 'y') {
                            $details->show_output = true;
                            echo "=======DETAILS======\n";
                            foreach ($details as $key => $value) {
                                echo "DEBUG - " . $key . ": " . (string)$value . "\n";
                            }
                            echo "====================\n";
                            ob_flush();
                            flush();
                        }

                        // insert or update the device
                        if (isset($details->id) and $details->id != '') {
                            // we have a system id - UPDATE
                            $log_details->message = strtoupper($details->last_seen_by) . " update for $details->ip (System ID $details->id)";
                            stdlog($log_details);
                            $details->original_last_seen = $this->m_devices_components->read($details->id, 'y', 'system', '', 'last_seen');
                            $details->original_last_seen_by = $this->m_devices_components->read($details->id, 'y', 'system', '', 'last_seen_by');
                            $this->m_system->update_system($details, $display);
                        } else {
                            // we have a new system - INSERT
                            $log_details->message = strtoupper($details->last_seen_by) . " insert for $details->ip";
                            stdlog($log_details);
                            $details->id = $this->m_system->insert_system($details, $display);
                        }
                        // grab some timestamps
                        $details->last_seen = $this->m_devices_components->read($details->id, 'y', 'system', '', 'last_seen');
                        $details->first_seen = $this->m_devices_components->read($details->id, 'y', 'system', '', 'first_seen');

                        // Insert an audit log
                        if (isset($this->user->full_name)) {
                            $temp_user = $this->user->full_name;
                        } else {
                            $temp_user = '';
                        }
                        $this->m_audit_log->create($details->id, $temp_user, $details->last_seen_by, $details->audits_ip, '', '', $details->last_seen);
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
                        $this->m_devices_components->update_missing_interfaces($details->id);
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

                        if (!empty($credentials_snmp) and $details->snmp_status == 'true') {
                            $log_details->message = 'SNMP credential update for '.$details->ip.' (System ID '.$details->id.')';
                            stdlog($log_details);
                            $this->m_devices->sub_resource_create($details->id, 'credential', $credentials_snmp);
                        }

                        if (!empty($credentials_ssh) and $details->ssh_status == 'true') {
                            $log_details->message = 'SSH credential update for '.$details->ip.' (System ID '.$details->id.')';
                            stdlog($log_details);
                            $this->m_devices->sub_resource_create($details->id, 'credential', $credentials_ssh);
                        }

                        if (isset($credentials_windows) and $details->wmi_status == 'true') {
                            $log_details->message = "Windows credential update for $details->ip (System ID $details->id)";
                            stdlog($log_details);
                            $this->m_devices->sub_resource_create($details->id, 'credential', $credentials_windows);
                        }

                        // $details->id is now set
                        if ($display == 'y') {
                            echo "DEBUG - System ID <a href='".base_url()."index.php/devices/".$details->id."'>".$details->id."</a>\n";
                        }

                        // process and store the Nmap result
                        $nmap_result = array();
                        foreach (explode(',', $details->nmap_ports) as $port) {
                            $temp = explode('/', $port);
                            $nmap_item = new stdClass();
                            $nmap_item->ip = (string)$details->ip;
                            $nmap_item->port = $temp[0];
                            $nmap_item->protocol = $temp[1];
                            $nmap_item->program = $temp[2];
                            if ($nmap_item->port != '') {
                                $nmap_result[] = $nmap_item;
                            }
                            unset($nmap_item);
                            unset($temp);
                        }
                        if (count($nmap_result) > 0) {
                            $input = new stdClass();
                            $input->item = array();
                            $input->item = $nmap_result;
                            $this->m_devices_components->process_component('nmap', $details, $input, $display);
                        }

                        // insert a blank to indicate we're finished this part of the discovery
                        // if required, the audit scripts will insert their own audit logs
                        $this->m_audit_log->update('debug', '', $details->id, $details->last_seen);

                        # Audit Windows
                        if ($details->wmi_status == "true" and $credentials_windows) {
                            $log_details->message = "Starting windows audit for $details->ip (System ID $details->id)";
                            stdlog($log_details);
                            $share = '\\admin$';
                            $destination = 'audit_windows.vbs';
                            if ($display = 'y') {
                                $debugging = 3;
                            } else {
                                $debugging = 0;
                            }
                            $sql = "/* discovery::process_subnet */ SELECT * FROM `scripts` WHERE `name` = 'audit_windows.vbs' AND `based_on` = 'audit_windows.vbs' ORDER BY `id` LIMIT 1";
                            $query = $this->db->query($sql);
                            $result = $query->result();
                            if (!empty($result[0])) {
                                $script_details = $result[0];
                                # Just ensure we delete any audit scripts that might exist.
                                # Shouldn't be required because we're creating based on the timestamp
                                # Then open the file for writing
                                $ts = date('y_m_d_H_i_s');
                                if (php_uname('s') == 'Windows NT') {
                                    $source_name = 'scripts\\audit_windows_' . $ts . '.vbs';
                                    @unlink($this->config->config['base_path'] . '\\other\\' . $source_name);
                                    try {
                                        $fp = fopen($this->config->config['base_path'] . '\\other\\' . $source_name, 'w');
                                    } catch (Exception $e) {
                                        print_r($e);
                                    }
                                } else {
                                    $source_name = 'scripts/audit_windows_' . $ts . '.vbs';
                                    @unlink($this->config->config['base_path'] . '/other/' . $source_name);
                                    try {
                                        $fp = fopen($this->config->config['base_path'] . '/other/' . $source_name, 'w');
                                    } catch (Exception $e) {
                                        print_r($e);
                                    }
                                }
                                $script = $this->m_scripts->download($script_details->id);
                                fwrite($fp, $script);
                                fclose($fp);

                            } else {
                                $source_name = 'audit_windows.vbs';
                            }

                            if (php_uname('s') != 'Windows NT') {
                                $source = $this->config->config['base_path'] . '/other/' . $source_name;
                                $command = "cscript c:\\windows\\audit_windows.vbs submit_online=y create_file=n strcomputer=. url=".$url."index.php/system/add_system debugging=" . $debugging . " system_id=".$details->id." last_seen_by=audit_wmi";
                                if (copy_to_windows($details->ip, $credentials_windows, $share, $source, $destination, $display)) {
                                    if (execute_windows($details->ip, $credentials_windows, $command, $display)) {
                                        # All complete!
                                    } else {
                                        # run audit script failed
                                    }
                                } else {
                                    # copy audit script to Windows failed
                                }
                                if ($source_name != 'audit_windows.vbs') {
                                    unlink($this->config->config['base_path'] . '/other/' . $source_name);
                                }
                            } else {
                                #if (strtolower($_SERVER['USERPROFILE']) == 'c:\windows\system32\config\systemprofile') {
                                if (exec('whoami') == 'nt authority\system') {
                                    # We're running on the LocalSystem account.
                                    # We cannot copy the audit script to the target and then run it,
                                    # We _must_ run the script locally and use $details->ip as the script target
                                    # We will loose the ability to retrieve certain items like files, netstat, tasks, etc
                                    $log_details->message = "Windows audit for $details->ip (System ID $details->id)";
                                    stdlog($log_details);
                                    $username = $credentials_windows->credentials->username;
                                    $temp = explode('@', $username);
                                    $username = $temp[0];
                                    if (count($temp) > 1) {
                                        $domain = $temp[1] . '\\';
                                    } else {
                                        $domain = '';
                                    }
                                    unset($temp);

                                    if ($display == 'y') {
                                        $script_string = "$filepath\\" . $source_name . " strcomputer=".$details->ip." submit_online=y create_file=n struser=".$domain.$username." strpass=".$credentials_windows->credentials->password." url=".$url."index.php/system/add_system debugging=3 system_id=".$details->id." last_seen_by=audit_wmi";
                                        $command_string = "%comspec% /c start /b cscript //nologo ".$script_string;
                                        exec($command_string, $output, $return_var);
                                        $command_string = str_replace($credentials_windows->credentials->password, '******', $command_string);
                                        echo 'DEBUG - Command Executed: '.$command_string."\n";
                                        echo 'DEBUG - Return Value: '.$return_var."\n";
                                        echo "DEBUG - Command Output:\n";
                                        print_r($output);

                                        if ($return_var != '0') {
                                            $error = "Attempt to run audit_windows.vbs on $details->ip has failed";
                                            $log_details->message = $error;
                                            stdlog($log_details);
                                        } else {
                                            $log_details->message = "Attempt to run audit_windows.vbs on $details->ip has succeeded";
                                            stdlog($log_details);
                                        }
                                        $output = null;
                                        $return_var = null;
                                    } else {
                                        $script_string = "$filepath\\" . $source_name . " strcomputer=".$details->ip." submit_online=y create_file=n struser=".$domain.$username." strpass=".$credentials_windows->credentials->password." url=".$url."index.php/system/add_system debugging=0  system_id=".$details->id." last_seen_by=audit_wmi";
                                        $command_string = "%comspec% /c start /b cscript //nologo ".$script_string." &";
                                        pclose(popen($command_string, "r"));
                                    }
                                    $command_string = null;
                                    if ($source_name != 'audit_windows.vbs') {
                                        unlink($this->config->config['base_path'] . '/other/' . $source_name);
                                    }
                                } else {
                                    # We are running as something other than the LocalSystem account.
                                    # Therefore we _should_ be able to copy the audit script to tthe target and start it there
                                    # and therefore retrieve ALL information
                                    $source = $this->config->config['base_path'] . '\\other\\' . $source_name;
                                    rename($source, 'c:\\windows\\audit_windows_' . $ts . '.vbs');
                                    $source = 'audit_windows_' . $ts . '.vbs';
                                    $command = "cscript \\\\" . $details->ip . "\\admin\$\\audit_windows_" . $ts . ".vbs submit_online=y create_file=n strcomputer=. url=".$url."index.php/system/add_system debugging=" . $debugging . " system_id=".$details->id . " self_delete=y last_seen_by=audit_wmi";
                                    if (copy_to_windows($details->ip, $credentials_windows, $share, $source, $destination, $display)) {
                                        if (execute_windows($details->ip, $credentials_windows, $command, $display)) {
                                            # All complete!
                                        } else {
                                            # run audit script failed
                                        }
                                    } else {
                                        # copy audit script to Windows failed
                                    }
                                    if ($source_name != 'audit_windows.vbs') {
                                        unlink('c:\\windows\\audit_windows_' . $ts . '.vbs');
                                    }
                                }
                            }

                        }

                        # Audit SSH
                        if ($details->ssh_status == "true" and $details->os_family != 'DD-WRT' and $credentials_ssh) {
                            $log_details->message = "Starting ssh audit for $details->ip (System ID $details->id)";
                            stdlog($log_details);
                            // $command = 'uname';
                            // $ssh_result = ssh_command($details->ip, $credentials_ssh, $command, $display);
                            // if ($ssh_result['status'] == 0) {
                            //     $remote_os = $ssh_result['output'][0];
                            // }

                            // switch (strtolower($remote_os)) {
                            switch (strtolower($details->os_group)) {
                                
                                case 'aix':
                                    $audit_script = 'audit_aix.sh';
                                    break;
                                
                                case 'vmkernel':
                                    $audit_script = 'audit_esxi.sh';
                                    break;
                                
                                case 'linux':
                                    $audit_script = 'audit_linux.sh';
                                    break;
                                
                                case 'darwin':
                                    $audit_script = 'audit_osx.sh';
                                    break;
                                
                                case 'windows':
                                    $audit_script = '';
                                    break;
                                
                                default:
                                    $audit_script = '';
                                    break;
                            }


                            $destination = $audit_script;
                            if ($display = 'y') {
                                $debugging = 3;
                            } else {
                                $debugging = 0;
                            }
                            $sql = "/* discovery::process_subnet */ SELECT * FROM `scripts` WHERE `name` = '$audit_script' AND `based_on` = '$audit_script' ORDER BY `id` LIMIT 1";
                            $query = $this->db->query($sql);
                            $result = $query->result();
                            if (!empty($result[0])) {
                                $script_details = $result[0];
                                # Just ensure we delete any audit scripts that might exist.
                                # Shouldn't be required because we're creating based on the timestamp
                                # Then open the file for writing
                                $ts = date('y_m_d_H_i_s');
                                if (php_uname('s') == 'Windows NT') {
                                    $source_name = 'scripts\\' . str_replace('.sh', '_'.$ts.'.sh', $audit_script);
                                    $unlink = $this->config->config['base_path'] . '\\other\\' . $source_name;
                                    @unlink($unlink);
                                    $fp = fopen($this->config->config['base_path'] . '\\other\\' . $source_name, 'w');
                                } else {
                                    $source_name = 'scripts/' . str_replace('.sh', '_'.$ts.'.sh', $audit_script);
                                    $unlink = $this->config->config['base_path'] . '/other/' . $source_name;
                                    @unlink($unlink);
                                    try {
                                        $fp = fopen($this->config->config['base_path'] . '/other/' . $source_name, 'w');
                                    } catch (Exception $e) {
                                        print_r($e);
                                    }
                                }
                                $script = $this->m_scripts->download($script_details->id);
                                fwrite($fp, $script);
                                fclose($fp);

                            } else {
                                $unlink = '';
                                $source_name = $audit_script;
                            }



                            unset($temp);
                            if ($audit_script != '') {
                                # copy the audit script to the target ip
                                if (php_uname('s') == 'Windows NT') {
                                    $source = $filepath.'\\'.$source_name;
                                } else {
                                    $source = $filepath.'/'.$source_name;
                                }
                                $destination = $this->config->item('discovery_linux_script_directory');
                                if (substr($destination, -1) != '/') {
                                    $destination .= '/';
                                }
                                $destination .= $audit_script;
                                if ($ssh_result = scp($details->ip, $credentials_ssh, $source, $destination, $display)) {
                                    # Successfully copied the audit script
                                    $command = 'chmod ' . $this->config->item('discovery_linux_script_permissions') . ' ' . $destination;
                                    $temp = ssh_command($details->ip, $credentials_ssh, $command, $display);
                                }
                                if ($display = 'y') {
                                    $debugging = 3;
                                } else {
                                    $debugging = 0;
                                }
                            }

                            # audit anything that's not ESX
                            if ($audit_script != 'audit_esxi.sh' and $audit_script != '') {
                                # successfully copied and chmodded the audit script
                                if (!empty($credentials_ssh->sudo)) {
                                    # run the audit script as a normal user, using sudo
                                    $command = 'echo "'.$credentials_ssh->credentials->password.'" | '.$credentials_ssh->sudo.' -S '.$this->config->item('discovery_linux_script_directory').$audit_script.' submit_online=y create_file=n url='.$url.'index.php/system/add_system debugging='.$debugging.' system_id='.$details->id.' display=' . $display . ' last_seen_by=audit_ssh';
                                } else {
                                    # run the script without using sudo
                                    $command = $this->config->item('discovery_linux_script_directory').$audit_script.' submit_online=y create_file=n url='.$url.'index.php/system/add_system debugging='.$debugging.' system_id='.$details->id.' display=' . $display . ' last_seen_by=audit_ssh';
                                }
                                $result = ssh_command($details->ip, $credentials_ssh, $command, $display);
                                if ($unlink != '') {
                                    unlink($unlink);
                                }
                            }
                            # audit ESX
                            if ($audit_script == 'audit_esxi.sh') {
                                $command = $this->config->item('discovery_linux_script_directory').$audit_script.' submit_online=y last_seen_by=audit_ssh create_file=n debugging=0 echo_output=y system_id='.$details->id.' 2>/dev/null';
                                if ($result = ssh_command($details->ip, $credentials_ssh, $command, $display)) {
                                    if ($result['status'] == 0) {
                                        $script_result = '';
                                        foreach ($result['output'] as $line) {
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
                                                if (!isset($esx_details->ip) or $esx_details->ip == '') {
                                                    $esx_details->ip = $details->ip;
                                                }
                                                $esx_details->system_id = $this->m_system->find_system($esx_details, $display);
                                                $esx_details->last_seen = $details->last_seen;

                                                if (isset($esx_details->system_id) and $esx_details->system_id != '') {
                                                    // we have an existing device
                                                    $esx_details->original_last_seen_by = $this->m_devices_components->read($esx_details->system_id, 'y', 'system', '', 'last_seen_by');
                                                    $esx_details->original_last_seen = $this->m_devices_components->read($esx_details->system_id, 'y', 'system', '', 'last_seen');
                                                    $this->m_system->update_system($esx_details);
                                                    $log_details->message = "ESX update for $esx_details->ip (System ID $esx_details->system_id)";
                                                    stdlog($log_details);
                                                } else {
                                                    // we have a new system
                                                    $esx_details->system_id = $this->m_system->insert_system($esx_details);
                                                    $log_details->message = "ESX insert for $esx_details->ip (System ID $esx_details->system_id)";
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
                                                $this->m_audit_log->create($esx_details->system_id, $temp_user, $esx_details->last_seen_by, $esx_details->audits_ip, '', '', $esx_details->last_seen);
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
                                }
                            }
                            $log_details->message = "Completed processing $details->ip (System ID $details->id)";
                            stdlog($log_details);
                        } // close the 'skip'
                    } // close the device / complete switch
                    unset($details);
                } // close for each device in XML
            } // close for form submission
        } // close function
    }

    public function echo_details ($details)
    {
        // remove all the null, false and Empty Strings but leaves 0 (zero) values
        $filtered_details = (object) array_filter((array) $details, 'strlen');
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
