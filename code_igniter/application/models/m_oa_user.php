<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_oa_user extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_orgs($user_id)
    {
        $end = array();

        # only run if post 1.12.6
        if ($this->db->table_exists('oa_user_org')) {
            $sql = "SELECT * FROM oa_user_org WHERE user_id = ? ORDER BY access_level desc";
            $sql = $this->clean_sql($sql);
            $data = array(intval($user_id));
            $query = $this->db->query($sql, $data);
            $user_orgs = $query->result();
        }

        $sql = "SELECT * FROM oa_org";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $this->orgs = $query->result();

        # only run if post 1.12.6
        if ($this->db->table_exists('oa_user_org')) {
            foreach ($this->orgs as $org) {
                # need to allow for pre 1.12.6 DB structure
                if (!isset($org->id) and isset($org->org_id)) {
                    $org->id = $org->org_id;
                }
                # need to allow for pre 1.12.6 DB structure
                if (!isset($org->parent_id) and isset($org->org_parent_id)) {
                    $org->parent_id = $org->org_parent_id;
                }
                foreach ($user_orgs as $user_org) {
                    if ($user_org->org_id == $org->id) {
                        $end[$org->id] = $user_org->access_level;
                    }
                }
            }
        }
        # TODO - get a list of user_org.org_id's with perms like '%r%' and
        # feed it into the array below
        $org_id_list = array();
        foreach ($end as $key => $value) {
            $org_id_list[$key] = $value;
            foreach ($this->get_org($key, $value) as $key2 => $value2) {
                $org_id_list[$key2] = $value2;
            }
        }
        return($org_id_list);
    }


    private function get_org($org_id, $access_level)
    {
        $org_id_list = array();
        foreach ($this->orgs as $org) {
            if ($org->parent_id == $org_id and $org->id != 0) {
                $org_id_list[$org->id] = $access_level;
                #echo "Set OrgId: " . $org->id . " AccessLevel: $access_level\n-----\n";
                foreach ($this->get_org($org->id, $access_level) as $key2 => $value2) {
                    $org_id_list[$key2] = $value2;
                }
            }
        }
        return($org_id_list);
    }


    public function select_user($name)
    {
        $sql = "SELECT id FROM oa_user WHERE name = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($name);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return (intval($row->id));
        } else {
            return false;
        }
    }

    public function check_user_name($name, $id)
    {
        $sql = "SELECT id FROM oa_user WHERE name = ? AND id <> ?";
        $sql = $this->clean_sql($sql);
        $data = array($name, $id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function deactivate_user($id)
    {
        $sql = "DELETE FROM oa_group_user WHERE user_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $sql = "UPDATE oa_user SET active = 'n' WHERE id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $query = $this->db->query($sql, $data);
    }

    public function activate_user($id)
    {
        $sql = "UPDATE oa_user SET active = 'y' WHERE id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $query = $this->db->query($sql, $data);
    }

    public function get_user_details($id)
    {
        $sql = "SELECT * FROM oa_user WHERE id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }

    public function get_all_users()
    {
        $sql = "SELECT id, name, full_name, email, admin, active FROM oa_user ORDER BY name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        return ($result);
    }

    public function add_user($user)
    {
        if (isset($user->admin)) {
            if ($user->admin == 'on') {
                $user->admin = 'y';
            } else {
                $user->admin = 'n';
            }
        } else {
            $user->admin = 'n';
        }
        # create the password
        $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM)); # get 256 random bits in hex
        $hash = hash("sha256", $salt.$user->password); # prepend the salt, then hash
        # store the salt and hash in the same string, so only 1 DB column is needed
        $encrypted_password = $salt.$hash;
        $sql = "INSERT INTO oa_user (name, full_name, email, password, theme, lang, admin, sam) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $sql = $this->clean_sql($sql);
        $data = array("$user->name", "$user->full_name", "$user->email", "$encrypted_password", "$user->theme", "$user->lang", "$user->admin", "$user->sam", );
        $query = $this->db->query($sql, $data);
        return($this->db->insert_id());
    }

    public function edit_user($user)
    {
        // format the user_admin to 'y' or 'n'
        if (isset($user->admin)) {
            if ($user->admin == 'on') {
                $user->admin = 'y';
            } else {
                $user->admin = 'n';
            }
        } else {
            $user->admin = 'n';
        }

        if (isset($user->password) and isset($user->password_confirm) and $user->password == $user->password_confirm and $user->password != '') {
            # password has a value so salt + sha256 it, then insert it into the db.
            # create the password
            $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM)); # get 256 random bits in hex
            $hash = hash("sha256", $salt.$user->password); # prepend the salt, then hash
            # store the salt and hash in the same string, so only 1 DB column is needed
            $encrypted_password = $salt.$hash;

            $sql = "UPDATE oa_user SET name = ?, full_name = ?, email = ?, password = ?, theme = ?, lang = ?, admin = ?,  sam = ? WHERE id = ?";
            $sql = $this->clean_sql($sql);
            $data = array("$user->name", "$user->full_name", "$user->email", "$encrypted_password", "$user->theme", "$user->lang", "$user->admin", "$user->sam", "$user->id");
        } else {
            // do not update the password
            $sql = "UPDATE oa_user SET name = ?, full_name = ?, email = ?, theme = ?, lang = ?, admin = ?, sam = ? WHERE id = ?";
            $sql = $this->clean_sql($sql);
            $data = array("$user->name", "$user->full_name", "$user->email", "$user->theme", "$user->lang", "$user->admin", "$user->sam", "$user->id");
        }
        $query = $this->db->query($sql, $data);
        return(true);
    }

    public function validate_user($admin = 'n')
    {
        $CI = & get_instance();
        $CI->user = new stdClass();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('log');

        $log_details = new stdClass();
        $log_details->file = 'system';
        $status = '';

        $this->config = $CI->config;

        if (!isset($_SERVER['HTTP_ACCEPT'])) {
            $_SERVER['HTTP_ACCEPT'] = '';
        }

        $temp_debug = @$this->session->userdata['user_debug'];
        if ((string) $this->uri->segment($this->uri->total_rsegments()-1) === 'user_debug') {
            $temp_debug = @$this->uri->segment($this->uri->total_rsegments());
            if ($temp_debug != 'y') {
                $temp_debug = 'n';
            }
        }

        $user_prefix = '';
        if (isset($CI->config->config['internal_version']) and intval($CI->config->config['internal_version']) < 20160409) {
            $user_prefix = 'user_';
        }

        if (isset($this->session->userdata['user_id']) and is_numeric($this->session->userdata['user_id'])) {
            // user is logged in, return the $this->user object
            $sql = "SELECT * FROM oa_user WHERE oa_user." . $user_prefix . "id = ? LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array(intval($this->session->userdata['user_id']));
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                // set the user object
                $CI->user = $query->row();

                 if (isset($CI->config->config['internal_version']) and intval($CI->config->config['internal_version']) < 20160409) {
                    $CI->user->id = $CI->user->user_id;
                    $CI->user->name = $CI->user->user_name;
                    $CI->user->password = $CI->user->user_password;
                    $CI->user->theme = $CI->user->user_theme;
                    $CI->user->admin = $CI->user->user_admin;
                    $CI->user->full_name = $CI->user->user_full_name;
                    $CI->user->sam = $CI->user->user_sam;
                }

                if ($CI->user->admin == 'y') {
                    $CI->user->debug = $temp_debug;
                } else {
                    $CI->user->debug = 'n';
                }

                if ($admin == 'y') {
                    if ($CI->user->admin == 'y') {
                        $log_details->severity = 7;
                        $log_details->message = 'User validated as an admin';
                        stdlog($log_details);
                        unset($log_details);
                        $userdata = array('user_id' => $CI->user->id, 'user_debug' => $CI->user->debug);
                        $this->session->set_userdata($userdata);

                        return;
                    } else {
                        // admin requested but user is not
                        $response->status = "fail";
                        if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
                            // log the attempt
                            $log_details->severity = 5;
                            $log_details->message = 'Admin credentials required (json request)';
                            stdlog($log_details);
                            // set json response
                            $response = new stdClass();
                            $response->message = "Admin credentials required";
                            echo json_encode($response);
                            // set the headers
                            header('Content-Type: application/json');
                            header('Cache-Control: max-age=0');
                            header('HTTP/1.1 400 Bad Request');
                            exit();
                        } else {
                            // log the attempt
                            $log_details->severity = 5;
                            $log_details->message = 'Admin credentials required (html request)';
                            stdlog($log_details);
                            // redirect to the login page
                            redirect('main/list_groups');
                        }
                    }
                } else {
                    $userdata = array('user_id' => $CI->user->id, 'user_debug' => $CI->user->debug);
                    $this->session->set_userdata($userdata);
                    return;
                }
            } else {
                // the user_id stored in the session does not exist
                $status = 'fail';
                if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
                    // log the attempt
                    $log_details->severity = 5;
                    $log_details->message = 'Bad user_id in cookie (json request)';
                    stdlog($log_details);
                    unset($log_details);
                    // reply with JSON
                    $response = new stdClass();
                    $response->status = "fail";
                    $response->message = "Bad user_id in cookie";
                    echo json_encode($response);
                    // set the header
                    header('Content-Type: application/json');
                    header('Cache-Control: max-age=0');
                    header('HTTP/1.1 400 Bad Request');
                    exit();
                } else {
                    // log the attempt
                    $log_details->severity = 5;
                    $log_details->message = 'Bad user_id in cookie (html request)';
                    stdlog($log_details);
                    unset($log_details);
                    // set the original requested URL
                    $requested_url = array('url'  => current_url());
                    $this->session->set_userdata($requested_url);
                    // redirect to the login page
                    redirect('login/index');
                }
            }
        }

        // user is not logged in as at here

        // get $username from $_GET if supplied
        if (strpos(current_url(), 'username') !== false) {
            $split_url = explode('/', current_url());
            for ($i = 0; $i <= count($split_url)-1; $i++) {
                if (strpos($split_url[$i], 'username') !== false) {
                    $username = $split_url[$i+1];
                }
            }
        }
        // get $password from $_GET if supplied
        if (strpos(current_url(), 'password') !== false) {
            $split_url = explode('/', current_url());
            for ($i = 0; $i <= count($split_url)-1; $i++) {
                if (strpos($split_url[$i], 'password') !== false) {
                    $password = $split_url[$i+1];
                }
            }
        }
        // get $username from $_POST if supplied
        $temp = $this->input->post('username');
        if ($temp != '') {
            $username = $this->input->post('username');
        }
        // get $password from $_POST if supplied
        $temp = $this->input->post('password');
        if ($temp != '') {
            $password = $this->input->post('password');
        }

        // make sure we have a supplied username and password
        if (empty($username) or empty($password)) {
            // incomplete credentials supplied
            $status = 'fail';
            if (@$username == '') {
                $username = 'UNKNOWN USER';
            }
            if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
                // log the attempt
                $log_details->severity = 5;
                $log_details->message = 'Incomplete credentials supplied for '.$username.' (json request)';
                stdlog($log_details);
                unset($log_details);
                // reply with JSON
                $response = new stdClass();
                $response->status = "fail";
                $response->message = "Incomplete credentials supplied. Please supply valid username and password fields in the request.";
                echo json_encode($response);
                // set the header
                header('Content-Type: application/json');
                header('Cache-Control: max-age=0');
                header('HTTP/1.1 400 Bad Request');
                exit();
            } else {
                // log the attempt
                // $log_details->severity = 5;
                // $log_details->message = 'Incomplete credentials supplied for '.$username.' (html request)';
                // stdlog($log_details);
                // unset($log_details);
                // set the original requested URL
                $requested_url = array('url'  => current_url());
                $this->session->set_userdata($requested_url);
                // redirect to the login page
                redirect('login/index');
            }
        }

        // get the user object from the supplied user name
        // if (isset($CI->config->config['internal_version']) and $CI->config->config['internal_version'] < '20130512') {
        //     $sql = "SELECT * FROM oa_user WHERE name = ? LIMIT 1";
        // } else {
        //     $sql = "SELECT * FROM oa_user WHERE name = ? AND active = 'y' LIMIT 1";
        // }

        $user_prefix = 'user_';
        $sql = "SELECT * FROM oa_user WHERE name = ? LIMIT 1";
        if (isset($CI->config->config['internal_version']) and intval($CI->config->config['internal_version']) >= 20130512) {
            $sql = "SELECT * FROM oa_user WHERE user_name = ? AND user_active = 'y' LIMIT 1";
        }
        if (isset($CI->config->config['internal_version']) and intval($CI->config->config['internal_version']) >= 20160409) {
            $sql = "SELECT * FROM oa_user WHERE name = ? AND active = 'y' LIMIT 1";
            $user_prefix = '';
        }

        $sql = $this->clean_sql($sql);
        $data = array("$username");
        $query = $this->db->query($sql, $data);
        if ($query->num_rows() > 0) {
            $CI->user = $query->row();
            if (!isset($CI->config->config['internal_version']) or $CI->config->config['internal_version'] < '20130512') {
                $CI->user->active = 'y';
            }
        } else {
            $status = 'fail';
            if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
                // set the header response and reply with JSON
                $log_details->severity = 5;
                $log_details->message = 'Invalid username of '.$username.' supplied or user not active (json request)';
                stdlog($log_details);
                unset($log_details);
                $response = new stdClass();
                $response->status = "fail";
                $response->message = "Invalid username or user not active. Please supply valid username and password fields in the request.";
                echo json_encode($response);
                header('Content-Type: application/json');
                header('Cache-Control: max-age=0');
                header('HTTP/1.1 400 Bad Request');
                exit();
            } else {
                // log the attempt
                $log_details->severity = 5;
                $log_details->message = 'Invalid username of '.$username.' supplied or user not active (html request)';
                stdlog($log_details);
                unset($log_details);
                // set the original requested URL
                $requested_url = array('url'  => current_url());
                $this->session->set_userdata($requested_url);
                // redirect to the login page
                redirect('login/index');
            }
        }

        // if we get to here we have a valid $CI->user object, but not
        // necessarily a valid username + password
        // order of check is against AD (if set), the against an md5 (with update to sha256), then against sha256.


        // check against AD if configured
        if (!empty($CI->config->config['ad_domain']) and !empty($CI->config->config['ad_server']) and extension_loaded('ldap')) {
            $ad_ldap_connect = 'ldap://'.$CI->config->item('ad_server');
            $ad_user = $username.'@'.$CI->config->item('ad_domain');
            $ad_secret = $password;
            $error_reporting = error_reporting();
            error_reporting(0);
            $ad = @ldap_connect($ad_ldap_connect);
            error_reporting($error_reporting);
            unset($error_reporting);
            if (!$ad) {
                // log the failed attempt to connect to AD and fall through for local validation by Open-AudIT
                $log_details->severity = 5;
                $log_details->message = 'Error could not connect to Active Directory at '.$ad_ldap_connect.' (html request)';
                stdlog($log_details);
            } else {
                // successful connect to AD, now try to bind using the credentials
                ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
                ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
                $bind = @ldap_bind($ad, $ad_user, $ad_secret);
                if ($bind) {
                    // successful connect and bind, now check if user is active in Open-AudIT
                    if ($CI->user->active == 'y') {
                        // successful connect, bind and user is active - success
                        $status = 'success';
                        $log_details->severity = 7;
                        $log_details->message = 'User '.$username.' was verified by AD';
                        stdlog($log_details);
                    } else {
                        // successful connect and bind but user not active - fail
                        $status = 'fail';
                        if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
                            $log_details->severity = 5;
                            $log_details->message = $username.' was verified by AD, but does not have their user_active attribute set in Open-AudIT (json request)';
                            stdlog($log_details);
                            $response = new stdClass();
                            $response->status = "fail";
                            $response->message = "Username validated in AD, but not set to active in Open-AudIT";
                            echo json_encode($response);
                            header('Content-Type: application/json');
                            header('Cache-Control: max-age=0');
                            header('HTTP/1.1 400 Bad Request');
                            exit();
                        } else {
                            // log the attempt
                            $log_details->severity = 5;
                            $log_details->message = $username.' was verified by AD, but does not have their user_active attribute set in Open-AudIT (html request)';
                            stdlog($log_details);
                            // set the original requested URL
                            $requested_url = array('url'  => current_url());
                            $this->session->set_userdata($requested_url);
                            // redirect to the login page
                            redirect('login/index');
                        }
                    }
                } else {
                    // successful connect, but no bind - invalid credentials
                    // log attempt and fall through for local validation in Open-AudIT
                    $log_details->severity = 5;
                    if (strpos(@$_SERVER['HTTP_ACCEPT'], 'json') !== false) {
                        $log_details->message = $username.' Active Directory failed verification (json request)';
                    } else {
                        $log_details->message = $username.' Active Directory failed verification (html request)';
                    }
                    stdlog($log_details);
                }
            }
        }

         if (isset($CI->config->config['internal_version']) and intval($CI->config->config['internal_version']) < 20160409) {
            $CI->user->id = $CI->user->user_id;
            $CI->user->name = $CI->user->user_name;
            $CI->user->password = $CI->user->user_password;
            $CI->user->theme = $CI->user->user_theme;
            $CI->user->admin = $CI->user->user_admin;
            $CI->user->full_name = $CI->user->user_full_name;
        }

        # check against older style MD5 passwords
        if (isset($CI->user->password) and $CI->user->password == md5($password)) {
            // matching older style password
            // update to sha256 - success
            $status = 'success';
            $log_details->severity = 5;
            $log_details->message = $username.' updating password from md5 to sha256';
            stdlog($log_details);
            # change the password to a salted SHA256
            # get 256 random bits in hex
            $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
            # prepend the salt, then hash
            $hash = hash("sha256", $salt.$password);
            # store the salt and hash in the same string, so only 1 DB column is needed
            $encrypted_password = $salt.$hash;
            $sql = "UPDATE oa_user SET password = ? WHERE id = ?";
            $sql = $this->clean_sql($sql);
            $data = array("$encrypted_password", (string) $CI->user->id);
            $query = $this->db->query($sql, $data);
        }

        # check against salted sha256 passwords
        if ($status != 'success') {
            # get the salt from the front of the hash
            $salt = substr($CI->user->password, 0, 64);
            # the SHA256 form the end of the hash
            $valid_hash = substr($CI->user->password, 64, 64);
            # hash the password being tested
            $test_hash = hash("sha256", $salt.$password);
            # if the hashes are exactly the same, the password is valid
            if ($test_hash == $valid_hash) {
                # correct password
                $status = 'success';
            }
        }

        if ($status != 'success') {
            // incorrect credentials - fail
            unset($CI->user);
            if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
                // log the attempt
                $log_details->severity = 6;
                $log_details->message = $username.' attempted to logon with invalid credentials (json request)';
                stdlog($log_details);
                // create the json response
                $response = new stdClass();
                $response->status = "fail";
                $response->message = "Credentials not supplied or invalid. Please supply valid username and password fields in the request.";
                echo json_encode($response);
                // set the headers
                header('Content-Type: application/json');
                header('Cache-Control: max-age=0');
                header('HTTP/1.1 400 Bad Request');
                exit();
            } else {
                // log the attempt
                $log_details->severity = 6;
                $log_details->message = $username.' attempted to logon with invalid credentials (html request)';
                stdlog($log_details);
                // set the original requested URL
                $requested_url = array('url'  => current_url());
                $this->session->set_userdata($requested_url);
                // redirect to the login page
                redirect('login/index/main/list_groups');
            }
        } else {
            // correct credentials supplied
            // check if we need an admin user
            if ($admin == 'y') {
                if ($CI->user->admin == 'y') {
                    $userdata = array('user_id' => $CI->user->id);
                    $this->session->set_userdata($userdata);
                    return;
                } else {
                    // admin requested but user is not
                    $response->status = "fail";
                    if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
                        // log the attempt
                        $log_details->severity = 5;
                        $log_details->message = 'Admin credentials required (json request)';
                        stdlog($log_details);
                        // set json response
                        $response = new stdClass();
                        $response->message = "Admin credentials required. Please supply valid username and password fields in the request.";
                        echo json_encode($response);
                        // set the headers
                        header('Content-Type: application/json');
                        header('Cache-Control: max-age=0');
                        header('HTTP/1.1 400 Bad Request');
                        exit();
                    } else {
                        // log the attempt
                        $log_details->severity = 5;
                        $log_details->message = 'Admin credentials required (html request)';
                        stdlog($log_details);
                        // redirect to the login page
                        redirect('main/list_groups');
                    }
                }
            } else {
                // log the log on attempt details
                # $log_details->severity = 7;
                # $log_details->message = 'User logged on';
                # stdlog($log_details);
                $userdata = array('user_id' => $CI->user->id);
                $this->session->set_userdata($userdata);
                $requested_url = @$this->session->userdata('url');
                if ($requested_url != '') {
                    $requested_url = array('url'  => '');
                    $this->session->set_userdata($requested_url);
                    redirect($requested_url);
                }
                return;
            }
        }
    }
}
