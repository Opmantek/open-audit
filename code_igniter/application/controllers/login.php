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
 * @version 1.12.6
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

        $this->load->helper('report_helper');
        check_default_reports();
        $this->load->helper('group_helper');
        check_default_groups();

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

        foreach ($this->m_oa_config->get_server_subnets() as $subnet) {
            $this->m_oa_config->update_blessed($subnet, 0);
        }

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
                $oae_license_url = 'http://localhost'.$oae_url.'license';
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
                $license = json_decode($license);
                if (json_last_error()) {
                    $license = new stdClass();
                    $license->license = 'none';
                }
            } else {
                $license = new stdClass();
                $license->license = 'none';
            }
        } else {
            $license = new stdClass();
            $license->license = 'none';
        }

        if ($license->license != 'none' and $license->license != 'commercial' and $license->license != 'free') {
            $license->license = 'none';
        }

        // echo "<!-- " . $license->license . " -->\n";
        // echo "<!-- " . $oae_url . " -->\n";
        // echo "<!-- " . $oae_license_url . " -->\n";
        $data['logo'] = 'logo-banner-oac-oae.png';
        $data['oae_message'] = '';
        $this->m_oa_config->update_config('oae_license', $license->license, '', date('Y-m-d H:i:s'));

        if ($license->license == 'free' or $license->license == 'commercial') {
            // user going to an internal page and OAE is installed with a valid license, set the logo and show the logon page
            $data['oae_message'] = ' ';
            if (isset($this->config->config['logo']) and ($this->config->config['logo'] == '' or $this->config->config['logo'] == 'logo-banner-oac' or $this->config->config['logo'] == 'logo-banner-oac-oae' or $this->config->config['logo'] == 'oac' or $this->config->config['logo'] == 'oac-oae')) {
                $this->m_oa_config->update_config('logo', 'logo-banner-oae', '', date('Y-m-d H:i:s'));
                $data['logo'] = 'logo-banner-oae';
            }
        }
        if ($license->license == 'none') {
            // OAE is installed but not licensed, show the logon page
            $data['oae_message'] = "Please try Open-AudIT Enterprise. Contact <a href='https://opmantek.com/contact-us/' style='color: blue;'>Opmantek</a> for a license today<br /> or click <a href='".$oae_url."' style='color: blue;'>here</a> to enter your license details.";
            if (isset($this->config->config['logo']) and ($this->config->config['logo'] == '' or $this->config->config['logo'] == 'logo-banner-oae' or $this->config->config['logo'] == 'logo-banner-oac-oae' or $this->config->config['logo'] == 'oae' or $this->config->config['logo'] == 'oac-oae')) {
                $this->m_oa_config->update_config('logo', 'logo-banner-oac-oae', '', date('Y-m-d H:i:s'));
                $data['logo'] = 'logo-banner-oac-oae';
            }
        }
        $this->load->view('v_login', $data);
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

        foreach ($this->m_oa_config->get_server_subnets() as $subnet) {
            $this->m_oa_config->update_blessed($subnet, 0);
        }

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
                if (!empty($data['user_active']) and $data['user_active'] == 'y') {
                    // SUCCESS
                    // valid user, authenticated by AD and authorised by OA
                    $this->session->set_userdata($data);
                    if ($data['user_admin'] == 'y') {
                        header('Content-Type: application/json');
                        header('HTTP/1.1 200 OK');
                        echo '{"valid": true, "admin": true}';
                        exit();
                    } else {
                        header('Content-Type: application/json');
                        header('HTTP/1.1 403 Not Authorised');
                        echo '{"valid": false, "admin": false}';
                        exit();
                    }
                } else {
                    // FAIL
                    // the user was authenticated by AD but 
                    // does not have their OA 'user_active' flag set to 'y'.
                    header('Content-Type: application/json');
                    header('HTTP/1.1 403 Not Authorised');
                    echo '{"valid": false, "admin": false}';
                }
            } else {
                // not authorised by Active Dirctory
                // fall through this function and attempt to validate using local credentials
            }
        }
        // attempt use the internal database to validate user
        if ($data = $this->m_userlogin->validate_user($username, $password)) {
            if (isset($data) and $data != 'fail' and $data['user_admin'] == 'y') {
                // SUCCESS
                $this->session->set_userdata($data);
                header('Content-Type: application/json');
                header('HTTP/1.1 200 OK');
                echo '{"valid": true, "admin": true}';
            } else {
                // FAIL
                header('Content-Type: application/json');
                header('HTTP/1.1 403 Not Authorised');
                echo '{"valid": false, "admin": false}';
            }
        } else {
            // FAIL
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

    public function modal()
    {
        $file = @json_decode(file_get_contents('/usr/local/opmojo/conf/modal_oae.json'));
        if (!$file) {
            $file = @json_decode(file_get_contents('/usr/local/open-audit/other/modal_oae.json'));
        }
        if (!$file) {
            $file = @json_decode(file_get_contents('c:\\omk\\conf\\modal_oae.json'));
        }
        if (!$file) {
            $file = @json_decode(file_get_contents('c:\\xampplite\\open-audit\\other\\modal_oae.json'));
        }
        if (!$file) {
            $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
            header($protocol . ' 500 Cannot open json file.');
            exit();
        }

        # add the stylesheet
        $output = "<link href=\"/open-audit/css/bootstrap.min.css\" rel=\"stylesheet\" />";

        # enclose the content
        $output .= "<div>\n";

        # add the header
        if ($file->header[0]->text and $file->header[0]->text != "") {
            $output .= "<h2>" . $file->header[0]->text . "</h2>";
        }

        # add top message
        if ($file->top_message and $file->top_message != "") {
            $output .= "<span>" . $file->top_message . "</span><br />\n";
        }

        # add the table
        if ($file->table) {
            $output .= "<table class=\"table table-striped table-bordered\" width=\"100%\">";
            if ($file->table->header) {
            $output .= "<tr>\n";
                foreach ($file->table->header as $header) {
                    $output .= "<th class=\"" . $header->class . "\">" . $header->text . "</th>";
                }
                $output .= "</tr>\n";
            }
            if ($file->table->rows) {
                foreach ($file->table->rows as $row) {
                    $output .= "<tr>\n";
                    foreach ($row as $cell) {
                        if (isset($cell->button)) {
                            $output .= "<td class=\"" . $cell->class . "\">" . $cell->text . "<br /><button type=\"button\" class=\"btn btn-success btn-sm\"><a style=\"color:white;\" href=\"" . $cell->button_link . "\">" . $cell->button . "</a></button></td>";
                        } else {
                            $output .= "<td class=\"" . $cell->class . "\">" . $cell->text . "</td>";
                        }
                    }
                    $output .= "</tr>\n";
                }
            }
            $output .= "</table>\n";
        }

        # add bottom message
        if ($file->bottom_message and $file->bottom_message != "") {
            $output .= "<span>" . $file->bottom_message . "</span><br />\n";
        }

        # add the footer
        if ($file->footer) {
            foreach ($file->footer as $footer) {
                $output .= "<span style=\"" . $footer->button_parent_style . "\"><button type=\"button\" class=\"btn btn-default btn-sm\"><a href=\"" . $footer->button_link . "\">" . $footer->button . "</a></button></span>";
            }
        }
        # enclose the content
        $output .= "<br /></div>\n";

        # echo the result
        echo $output;
    }
}
