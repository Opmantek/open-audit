<?php
//
//  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
//
//  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
//
//  This file is part of Open-AudIT.
//
//  Open-AudIT is free software: you can redistribute it and/or modify
//  it under the terms of the GNU Affero General Public License as published
//  by the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  Open-AudIT is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU Affero General Public License for more details.
//
//  You should have received a copy of the GNU Affero General Public License
//  along with Open-AudIT (most likely in a file named LICENSE).
//  If not, see <http://www.gnu.org/licenses/>
//
//  For further information on Open-AudIT or for a license other than AGPL please see
//  www.opmantek.com or email contact@opmantek.com
//
// *****************************************************************************

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

/**
 *
 */
class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('log');

        $this->load->model('m_oa_config');
        $this->m_oa_config->load_config();

        // log the attempt
        $log_details = new stdClass();
        $log_details->severity = 6;
        stdlog($log_details);
        unset($log_details);
    }

    /**
     * [index description].
     *
     * @return [type] [description]
     */
    public function index()
    {
        $data['title'] = 'Open-AudIT';
        $data['username'] = array('id' => 'username', 'name' => 'username');
        $data['password'] = array('id' => 'password', 'name' => 'password');
        $data['oae_message'] = '';

        // cater to an unauth page request
        // get the requested page from the session
        $form_url = @$this->session->userdata('url');
        $this->session->set_userdata(array('url'  => ''));
        $uri_string = uri_string();
        // set the form url so if nothing in the session and requested special login page, it has a default
        if ($form_url == '' and $uri_string == 'login/index/main/list_groups') {
            $form_url = 'main/list_groups';
        }

        $data['form_url'] = $form_url;

        $this->load->model('m_oa_admin_database');
        $this->load->model('m_oa_config');
        $data['systems'] = $this->m_oa_admin_database->count_systems();
        $data['logo'] = 'logo.png';
        $data['oae_message'] = '';
        $license = '';

        $this->load->model('m_oa_config');
        $oae_url = $this->m_oa_config->get_config_item('oae_url');

        if ($oae_url > '') {
            if (substr($oae_url, -1, 1) != '/') {
                $oae_url = $oae_url.'/';
            }
            // if we already have http... in the oae_url variable, no need to do anything.
            if (strpos(strtolower($oae_url), 'http') === false) {
                // if we ONLY have a link thus - "/oae/omk" we assume the OAE install is on the same machine.
                // Make sure we have a leading /
                if (substr($oae_url, 0, 1) != '/') {
                    $oae_url = '/'.$oae_url;
                }
                // need to create a link to OAE on port 8042 to check the license
                // we cannot detect and use the browser http[s] as it may being used in the client browser,
                //     but stripped by a https offload or proxy
                $oae_license_url = 'http://localhost:8042'.$oae_url.'license';
                // we create a link for the browser using the same address + the path & file in oae_url
                if (isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on') {
                    $oae_url = 'https://'.$_SERVER['HTTP_HOST'].$oae_url;
                } else {
                    $oae_url = 'http://'.$_SERVER['HTTP_HOST'].$oae_url;
                }
            } else {
                // we already have a URL like http://something/omk/oae/ - leave it alone
                $oae_license_url = $oae_url.'license';
            }

            ini_set('default_socket_timeout', 3);
            // get the license status from the OAE API
            // license status are: valid, invalid, expired, none
            $license = @file_get_contents($oae_license_url, false);
            if ($license !== false) {
                // remove the unneeded html tags
                $license = str_replace('<pre>', '', $license);
                $license = str_replace('</pre>', '', $license);
            } else {
                $license = 'none';
            }
        }

        // echo "<!-- " . $license . " -->\n";
        // echo "<!-- " . $oae_url . " -->\n";
        // echo "<!-- " . $oae_license_url . " -->\n";
        $data['logo'] = 'logo-banner-oac-oae.png';
        $data['oae_message'] = '';

        if ($oae_url == '') {
            // OAE is not installed
            // set the logo and show the logon page
            $data['oae_message'] = 'Please try Open-AudIT Enterprise. Contact <a href="https://opmantek.com/contact-us/" style="color: blue;">Opmantek</a> for a license today.';
            if (isset($this->config->config['logo']) and ($this->config->config['logo'] == '' or $this->config->config['logo'] == 'logo-banner-oae' or $this->config->config['logo'] == 'logo-banner-oac-oae' or $this->config->config['logo'] == 'oae' or $this->config->config['logo'] == 'oac-oae')) {
                $this->m_oa_config->update_config('logo', 'logo-banner-oac', '', date('Y-m-d H:i:s'));
            }
            $this->m_oa_config->update_config('oae_license_status', 'not installed', '', date('Y-m-d H:i:s'));
            $this->load->view('v_login', $data);
        }

        if (($data['form_url'] != '') and ($oae_url > '') and ($license == 'valid')) {
            // user going to an internal page and OAE is installed with a valid license
            // set the logo and show the logon page
            $data['oae_message'] = ' ';
            if (isset($this->config->config['logo']) and ($this->config->config['logo'] == '' or $this->config->config['logo'] == 'logo-banner-oac' or $this->config->config['logo'] == 'logo-banner-oac-oae' or $this->config->config['logo'] == 'oac' or $this->config->config['logo'] == 'oac-oae')) {
                $this->m_oa_config->update_config('logo', 'logo-banner-oae', '', date('Y-m-d H:i:s'));
            }
            $this->m_oa_config->update_config('oae_license_status', 'valid', '', date('Y-m-d H:i:s'));
            $this->load->view('v_login', $data);
        }

        if (($data['form_url'] == '') and ($oae_url > '') and ($license == 'valid')) {
            // user going to logon page (not internal page) and OAE is installed and licensed
            // redirect
            if (isset($this->config->config['logo']) and ($this->config->config['logo'] == '' or $this->config->config['logo'] == 'logo-banner-oac' or $this->config->config['logo'] == 'logo-banner-oac-oae' or $this->config->config['logo'] == 'oac' or $this->config->config['logo'] == 'oac-oae')) {
                $this->m_oa_config->update_config('logo', 'logo-banner-oae', '', date('Y-m-d H:i:s'));
            }
            $this->m_oa_config->update_config('oae_license_status', 'valid', '', date('Y-m-d H:i:s'));
            redirect($oae_url);
        }

        if ($license == 'invalid') {
            // OAE is installed but has an invalid license
            // show the logon page
            $data['oae_message'] = "Your license for Open-AudIT Enterprise is invalid. Please contact <a href='https://opmantek.com/contact-us/' style='color: blue;' style='color: blue;'>Opmantek</a> for a valid license<br /> or click <a href='".$oae_url."' style='color: blue;'>here</a> to enter your license details.";
            if (isset($this->config->config['logo']) and ($this->config->config['logo'] == '' or $this->config->config['logo'] == 'logo-banner-oae' or $this->config->config['logo'] == 'logo-banner-oac-oae' or $this->config->config['logo'] == 'oae' or $this->config->config['logo'] == 'oac-oae')) {
                $this->m_oa_config->update_config('logo', 'logo-banner-oac-oae', '', date('Y-m-d H:i:s'));
            }
            $this->m_oa_config->update_config('oae_license_status', 'invalid', '', date('Y-m-d H:i:s'));
            $this->load->view('v_login', $data);
        }

        if ($license == 'expired') {
            // OAE is installed but the license has expired
            // show the logon page
            $data['oae_message'] = "Thanks for trying Open-AudIT Enterprise. Your license for Open-AudIT Enterprise has expired.<br />Please contact <a href='https://opmantek.com/contact-us/' style='color: blue;'>Opmantek</a> today for a license renewal<br /> or click <a href='".$oae_url."' style='color: blue;'>here</a> to enter your license details.";
            if (isset($this->config->config['logo']) and ($this->config->config['logo'] == '' or $this->config->config['logo'] == 'logo-banner-oae' or $this->config->config['logo'] == 'logo-banner-oac-oae' or $this->config->config['logo'] == 'oae' or $this->config->config['logo'] == 'oac-oae')) {
                $this->m_oa_config->update_config('logo', 'logo-banner-oac-oae', '', date('Y-m-d H:i:s'));
            }
            $this->m_oa_config->update_config('oae_license_status', 'expired', '', date('Y-m-d H:i:s'));
            $this->load->view('v_login', $data);
        }

        if ($license == 'none') {
            // OAE is installed but not licensed
            // show the logon page
            $data['oae_message'] = "Please try Open-AudIT Enterprise. Contact <a href='https://opmantek.com/contact-us/' style='color: blue;'>Opmantek</a> for a license today<br /> or click <a href='".$oae_url."' style='color: blue;'>here</a> to enter your license details.";
            if (isset($this->config->config['logo']) and ($this->config->config['logo'] == '' or $this->config->config['logo'] == 'logo-banner-oae' or $this->config->config['logo'] == 'logo-banner-oac-oae' or $this->config->config['logo'] == 'oae' or $this->config->config['logo'] == 'oac-oae')) {
                $this->m_oa_config->update_config('logo', 'logo-banner-oac-oae', '', date('Y-m-d H:i:s'));
            }
            $this->m_oa_config->update_config('oae_license_status', 'none', '', date('Y-m-d H:i:s'));
            $this->load->view('v_login', $data);
        }

        if (($oae_url > '') and ($data['oae_message'] == '')) {
            // catch all default
            // show the logon page
            $data['oae_message'] = "Please try Open-AudIT Enterprise. Contact <a href='https://opmantek.com/contact-us/' style='color: blue;'>Opmantek</a> for a license today.";
            if (isset($this->config->config['logo']) and ($this->config->config['logo'] == '' or $this->config->config['logo'] == 'logo-banner-oae' or $this->config->config['logo'] == 'logo-banner-oac-oae' or $this->config->config['logo'] == 'oae' or $this->config->config['logo'] == 'oac-oae')) {
                $this->m_oa_config->update_config('logo', 'logo-banner-oac-oae', '', date('Y-m-d H:i:s'));
            }
            $this->m_oa_config->update_config('oae_license_status', '', '', date('Y-m-d H:i:s'));
            $this->load->view('v_login', $data);
        }
    }

    /**
     * [audit_my_pc description].
     *
     * @return [type] [description]
     */
    public function audit_my_pc()
    {
        $client = 'win';
        $client = $this->uri->segment(3, 0);
        if ($client == '') {
            $client = 'win';
        }

        if ($client == 'win') {
            // the Windows audit
            $filename = dirname(dirname(dirname(dirname(__FILE__)))).'/other/audit_windows.vbs';
            if (! file_exists($filename)) {
                // do nothing - we don't have a template for audit_windows.vbs
            } else {
                $file = file($filename);
                $variable['strcomputer'] = '.';
                $variable['submit_online'] = 'y';
                $variable['create_file'] = 'n';
                $variable['url'] = base_url().'index.php/system/add_system';
                $variable['use_proxy'] = 'n';
                $variable['struser'] = '';
                $variable['strpass'] = '';
                $variable['org_id'] = '';
                $variable['windows_user_work_1'] = 'physicalDeliveryOfficeName';
                $variable['windows_user_work_2'] = 'company';
                $variable['debugging'] = '1';
                $variable['ping_target'] = 'n';

                foreach ($variable as $name => $value) {
                    foreach ($file as $line_num => $line) {
                        if (strpos($line, $name.' =') === 0) {
                            // set the variable
                            $file[$line_num] = $name.' = "'.$value."\"\n";
                            break;
                        }
                    }
                }
                // Set headers
                header('Cache-Control: public');
                header('Content-Description: File Transfer');
                header('Content-Disposition: attachment; filename=audit_windows.vbs');
                // header("Content-Type: application/zip");
                // header("Content-Type: text/vbscript");
                header('Content-Type: text/plain');
                header('Content-Transfer-Encoding: binary');
                foreach ($file as $line => $value) {
                    echo $value;
                }
            }
        }

        if ($client == 'lin') {
            // the linux audit
            $filename = dirname(dirname(dirname(dirname(__FILE__)))).'/other/audit_linux.sh';
            if (! file_exists($filename)) {
                // do nothing - we don't have a template for audit_linux.sh
            } else {
                $file = file($filename);
                $variable['strcomputer'] = '.';
                $variable['submit_online'] = 'y';
                $variable['create_file'] = 'n';
                $variable['url'] = base_url().'index.php/system/add_system';
                $variable['use_proxy'] = 'n';
                $variable['struser'] = '';
                $variable['strpass'] = '';
                $variable['org_id'] = '';
                $variable['windows_user_work_1'] = 'physicalDeliveryOfficeName';
                $variable['windows_user_work_2'] = 'company';
                $variable['debugging'] = '1';
                $variable['ping_target'] = 'n';

                foreach ($variable as $name => $value) {
                    foreach ($file as $line_num => $line) {
                        if (strpos($line, $name.'=') === 0) {
                            // set the variable
                            $file[$line_num] = $name.'="'.$value."\"\n";
                            break;
                        }
                    }
                }
                // Set headers
                header('Cache-Control: public');
                header('Content-Description: File Transfer');
                header('Content-Disposition: attachment; filename=audit_linux.sh');
                header('Content-Type: text/plain');
                // header('Content-Type: application/x-sh');
                header('Content-Transfer-Encoding: binary');
                foreach ($file as $line => $value) {
                    echo $value;
                }
            }
        }

        if ($client == 'osx') {
            // the linux audit
            $filename = dirname(dirname(dirname(dirname(__FILE__)))).'/other/audit_osx.sh';
            if (! file_exists($filename)) {
                // do nothing - we don't have a template for audit_linux.sh
            } else {
                $file = file($filename);
                $variable['strcomputer'] = '.';
                $variable['submit_online'] = 'y';
                $variable['create_file'] = 'n';
                $variable['url'] = base_url().'index.php/system/add_system';
                $variable['use_proxy'] = 'n';
                $variable['struser'] = '';
                $variable['strpass'] = '';
                $variable['org_id'] = '';
                $variable['windows_user_work_1'] = 'physicalDeliveryOfficeName';
                $variable['windows_user_work_2'] = 'company';
                $variable['debugging'] = '1';
                $variable['ping_target'] = 'n';

                foreach ($variable as $name => $value) {
                    foreach ($file as $line_num => $line) {
                        if (strpos($line, $name.'=') === 0) {
                            // set the variable
                            $file[$line_num] = $name.'="'.$value."\"\n";
                            break;
                        }
                    }
                }
                // Set headers
                header('Cache-Control: public');
                header('Content-Description: File Transfer');
                header('Content-Disposition: attachment; filename=audit_osx.sh');
                header('Content-Type: text/plain');
                // header('Content-Type: application/x-sh');
                header('Content-Transfer-Encoding: binary');
                foreach ($file as $line => $value) {
                    echo $value;
                }
            }
        }
    }

    /**
     * [process_login_get description].
     *
     * @return [type] [description]
     */
    public function login_auth()
    {
        // this uses the GET/POST variables to log the user in and set a cookie.
        // it does not redirect.
        // it is designed to be used from the OAE logon page.
        // the OAE login page will call this with the supplied user/pass and if
        // those attributes are useable in OAC, this page will set a cookie/session.
        // OAE will then proceed to log the user into OAE, but will have an OAC cookie set so if the user clicks
        // the OAC link from within OAE, they will not be asked to re-login.
        $username = urldecode($this->uri->segment(3));
        $password  = urldecode($this->uri->segment(4));
        $this->load->model('m_userlogin');
        $this->load->model('m_oa_config');
        $this->m_oa_config->load_config();

        if (isset($_POST['username']) and isset($_POST['password']) and $_POST['username'] != '' and $_POST['password'] != '') {
            $username = $_POST['username'];
            $password = $_POST['password'];
        }

        if (isset($this->config->config['ad_domain']) and $this->config->config['ad_domain'] != '' and
            isset($this->config->config['ad_server']) and $this->config->config['ad_server'] != '' and
            $password != '' and $username != '' and extension_loaded('ldap')) {
            // using Active Directory to validate logon details
            $ad_ldap_connect = 'ldap://'.$this->config->item('ad_server');
            $ad_user = $username.'@'.$this->config->item('ad_domain');
            $ad_secret = $password;
            $ad = ldap_connect($ad_ldap_connect) or die('Couldn\'t connect to AD!');
            ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
            ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
            $bind = ldap_bind($ad, $ad_user, $ad_secret);
            if ($bind) {
                $data = $this->m_userlogin->get_user_details($username);
                if (isset($data['user_active']) and $data['user_active'] == 'y') {
                    $this->session->set_userdata($data);
                    if (isset($data['user_admin']) and $data['user_admin'] == 'y') {
                        $is_admin = 'true';
                    } else {
                        $is_admin = 'false';
                    }
                    header('Content-Type: application/json');
                    header('HTTP/1.1 200 OK');
                    echo '{"valid": true, "admin": ' . $is_admin . '}';
                    exit();

                } else {
                    // the user does not have their 'user_active' flag set to 'y'.
                    // don't log them in, redirect the to the login page.
                    #header('Content-Type: application/json');
                    #header('HTTP/1.1 401 Not Authorised');
                    #echo '{"valid": false, "role": ""}';
                }
            } else {
                // failed Active Dirctory validation
                // fall through this function and attempt to validate using local credentials
            }
        }
        // attempt use the internal database to validate user
        if ($data = $this->m_userlogin->validate_user($username, $password)) {
            if (isset($data['user_admin']) and $data['user_admin'] == 'y') {
                $is_admin = 'true';
            } else {
                $is_admin = 'false';
            }
            if (isset($data) and $data != 'fail') {
                $this->session->set_userdata($data);
                header('Content-Type: application/json');
                header('HTTP/1.1 200 OK');
                echo '{"valid": true, "admin": ' . $is_admin . '}';
            } else {
                header('Content-Type: application/json');
                header('HTTP/1.1 403 Not Authorised');
                echo '{"valid": false, "admin": false}';
            }
        } else {
            header('Content-Type: application/json');
            header('HTTP/1.1 403 Not Authorised');
            echo '{"valid": false, "admin": false}';
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/index/main/list_groups');
    }
}
