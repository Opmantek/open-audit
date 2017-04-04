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
 * 
 * @version   1.14.4

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_logon extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function logon($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $CI->user = new stdClass();

        $log = new stdClass();
        $log->file = 'system';
        $log->controller = 'm_logon';
        $log->function = 'logon';
        $log->severity = 6;


        // get $username from $_POST
        $username = @$this->input->post('username');
        // get $password from $_POST
        $password = @$this->input->post('password');

        // make sure we have a supplied username and password
        if (empty($username) or empty($password)) {
            // incomplete credentials supplied
            log_error('ERR-0015', $CI->response->meta->collection . ':' . $CI->response->meta->action . ' Incomplete credentials');
            if ($CI->response->meta->format == 'json') {
                echo json_encode($CI->response);
                exit();
            } else {
                redirect('logon');
            }
        }

        // order of check is against AD (if set), then against a local account with sha256.
        if ($this->db->table_exists('ldap_servers')) {
            $sql = "/* m_logon::logon */" . "SELECT * FROM ldap_servers";
            $query = $this->db->query($sql);
            $ldap_servers = $query->result();
            if (count($ldap_servers > 0)) {
                // We have configured ldap_servers - validate
                foreach ($ldap_servers as $ldap) {
                    // Deriving the corrrectly formatted attributes from the user input
                    if (count($ldap_servers == 1)) {
                        // We only have a single ldap_server. Add the domain to the username if not already present
                        if (strpos($username, '@') === false) {
                            $temp = explode('@', $username . '@' . $ldap->domain);
                        } else {
                            $temp = explode('@', $username);
                        }
                    }
                    
                    $ldap->derived_user = $temp[0];
                    $ldap->derived_filter = "(samaccountname=" . $ldap->derived_user . ")";
                    if (!empty($temp[1])) {
                        $ldap->derived_domain = $temp[1];
                    } else {
                        $ldap->derived_domain = '';
                    }
                    unset($temp[0]);
                    $dn = '';
                    if (!empty($ldap->derived_domain)) {
                        foreach (explode('.', $ldap->derived_domain) as $key => $value) {
                            $dn .= 'DC=' . $value . ',';
                        }
                    } else {
                        foreach (explode('.', $ldap->domain) as $key => $value) {
                            $dn .= 'DC=' . $value . ',';
                        }
                    }
                    $ldap->derived_dn = substr($dn, 0, strlen($dn)-1);
                    // Connect to AD and retrieve the AD user details
                    $ldap->connection = ldap_connect($ldap->host);
                    ldap_set_option($ldap->connection, LDAP_OPT_PROTOCOL_VERSION, 3);
                    ldap_set_option($ldap->connection, LDAP_OPT_REFERRALS, 0);
                    $bind = false;
                    if (!empty($ldap->derived_user) and !empty($ldap->derived_domain) and !empty($password)) {
                        $bind = @ldap_bind($ldap->connection, $ldap->derived_user . '@' . $ldap->derived_domain, $password);
                    }
                    if (!$bind) {
                        // The supplied user/pass could not connect to this ldap server, try the next
                        log_error('ERR-0019', 'bind');
                        break;
                    }
                    // Successful bind, therefore valid AD username and password
                    if (strtolower($ldap->use_roles) != 'y') {
                        if ($this->db->table_exists('users')) {
                            $sql = "/* m_logon::logon */" . "SELECT * FROM users WHERE name = ? AND active = 'y' LIMIT 1";
                        } elseif ($this->db->field_exists('user_name', 'oa_user')) {
                            $sql = "/* m_logon::logon */" . "SELECT * FROM oa_user WHERE user_name = ? AND user_active = 'y' LIMIT 1";
                        } else {
                            $sql = "/* m_logon::logon */" . "SELECT * FROM oa_user WHERE name = ? AND active = 'y' LIMIT 1";
                        }
                        $data = array($username);
                        $query = $this->db->query($sql, $data);
                        $users = $query->result();
                        if (count($users) == 1) {
                            $userdata = array('user_id' => $users[0]->id);
                            $this->session->set_userdata($userdata);
                            return $users[0];
                        } else {
                            // TODO log a warning. User in AD and correct credentials supplied, but not in OA
                            $log->severity = 5;
                            $log->message = "User $username in " . $ldap->name . " but not in Open-AudIT.";
                            stdlog($log);
                            // Skip the rest of this ldap server.
                            // There may be other ldap server's we use for roles.
                            break;
                        }
                    }
                    // We only get to here if we are using ldap servers for RBAC
                    // Get the user details from AD
                    $read = ldap_search($ldap->connection, $ldap->derived_dn, $ldap->derived_filter);
                    if (!$read) {
                        log_error('ERR-0019', 'ldap_search');
                        output();
                        break;
                    }
                    $entries = ldap_get_entries($ldap->connection, $read);
                    if (!$entries) {
                        log_error('ERR-0019', 'ldap_get_entries');
                        output();
                        break;
                    }
                    asort($entries[0]);

                    unset($user);
                    $user = new stdClass();
                    $user->name = $username;
                    $user->org_id = intval($ldap->org_id);
                    $user->password = '';
                    $user->full_name = @(string)$entries[0]['displayname'][0];
                    $user->email = @(string)$entries[0]['mail'][0];
                    $user->roles = array();
                    $user->orgs = array();
                    $user->lang = (string)$ldap->lang;
                    $user->active = 'y';
                    $user->ldap = @(string)$entries[0]['distinguishedname'][0];
                    $user->edited_by = 'system';
                    $user->primarygroupid = @$entries[0]['primarygroupid'][0];
                    if (!empty($entries[0]['memberof'])) {
                        $user->memberof = $entries[0]['memberof'];
                        unset($user->memberof['count']);
                    } else {
                        $user->memberof = array();
                    }

                    // Roles
                    $roles_sql = "/* m_logon::logon */" . "SELECT * FROM roles";
                    $roles_query = $this->db->query($roles_sql);
                    $roles = $roles_query->result();
                    // Orgs
                    $orgs_sql = "/* m_logon::logon */" . "SELECT * FROM orgs";
                    $orgs_query = $this->db->query($orgs_sql);
                    $orgs = $orgs_query->result();
                    // Groups
                    $groups = array();

                    foreach ($user->memberof as $key => $value) {
                        // Get the LDAP groups
                        $filter = '(distinguishedname=' . $value . ')';
                        $ldap_result = @ldap_search($ldap->connection, $ldap->derived_dn, $filter, array("name","distinguishedname","primarygrouptoken","memberof"));
                        if (!$ldap_result) {
                            log_error('ERR-0019', 'ldap_result');
                            break;
                        }
                        $entries = @ldap_get_entries($ldap->connection, $ldap_result);
                        if (!$entries) {
                            log_error('ERR-0019', 'ldap_get_entries');
                            break;
                        }
                        $groups[] = $entries[0]['name'][0];
                        if (!empty($entries[0]['memberof'])) {
                            unset($entries[0]['memberof']['count']);
                            $memberof = $entries[0]['memberof'];
                            foreach ($memberof as $key1 => $value1) {
                                $filter1 ='(distinguishedname=' . $value1 . ')';
                                $ldap_result1 = @ldap_search($ldap->connection, $ldap->derived_dn, $filter1, array("name","distinguishedname","primarygrouptoken","memberof"));
                                $entries1 = @ldap_get_entries($ldap->connection, $ldap_result1);
                                $groups[] = $entries1[0]['name'][0];
                            }
                        }
                    }

                    $groups = array_unique($groups);
                    sort($groups);

                    foreach ($groups as $key => $value) {
                        foreach ($roles as $role) {
                            if ($value == $role->ad_group) {
                                $user->roles[] = $role->name;
                            }
                        }
                        foreach ($orgs as $org) {
                            if ($value == $org->ad_group) {
                                $user->orgs[] = intval($org->id);
                            }
                        }
                    }
                    unset($user->memberof);
                    unset($user->primarygroupid);
                    $user->roles = json_encode($user->roles);
                    $user->orgs = json_encode($user->orgs);

                    if (!empty($user->roles) and !empty($user->orgs)) {
                        if ($this->table_exists('users')) {
                            $user_sql = "/* m_logon::logon */" . "SELECT * FROM users WHERE name = ? and ldap = ? and active = 'y' LIMIT 1";
                        } else {
                            $user_sql = "/* m_logon::logon */" . "SELECT * FROM oa_user WHERE name = ? and ldap = ? and active = 'y' LIMIT 1";
                        }
                        $user_data = array((string)$user->name, (string)$user->ldap);
                        $user_query = $this->db->query($user_sql, $user_data);
                        $user_result = $user_query->result();
                        if (count($user_result) == 0) {
                            // The user does not exist, insert
                            $log->message = "New user $username logged on (AD account).";
                            $log->severity = 5;
                            if ($this->table_exists('users')) {
                                $user_sql = "/* m_logon::logon */" . "INSERT INTO users VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
                            } else {
                                $user_sql = "/* m_logon::logon */" . "INSERT INTO oa_user VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
                            }
                            $user_query = $this->db->query($user_sql, (array)$user);
                            $user->id = $this->db->insert_id();
                        } else {
                            // The user exists, update
                            $log->message = "Existing user $username logged on (AD account).";
                            $log->severity = 6;
                            if ($this->table_exists('users')) {
                                $user_sql = "/* m_logon::logon */" . "UPDATE users SET full_name = ?, email = ?, orgs = ?, roles = ?, ldap = ? WHERE id = ?";
                            } else {
                                $user_sql = "/* m_logon::logon */" . "UPDATE oa_user SET full_name = ?, email = ?, orgs = ?, roles = ?, ldap = ? WHERE id = ?";
                            }
                            $user_data = array($user->full_name,
                                                $user->email,
                                                $user->orgs,
                                                $user->roles,
                                                $user->ldap,
                                                $user_result[0]->id);
                            $this->db->query($user_sql, $user_data);
                            $user->id = $user_result[0]->id;
                        }
                        $CI->user = $user;
                        $userdata = array('user_id' => $CI->user->id, 'user_debug' => '');
                        $this->session->set_userdata($userdata);
                        stdlog($log);
                        return $user;
                    } else {
                        $log->severity = 5;
                        if (empty($user->roles) and empty($user->orgs)) {
                            // The user exists in AD, but has no Open-AudIT roles or Organisations
                            $log->message = "User $username exists in AD (" . $ldap->name . ") and attempted to logon, but does not belong to any OA groups for Roles or Organisations.";
                            stdlog($log);
                        }
                        else if (empty($user->orgs)) {
                            // The user exists in AD, but has no Open-AudIT Organisations
                            $log->message = "User $username exists in AD (" . $ldap->name . ") and attempted to logon, but does not belong to any OA groups for Organisations.";
                            stdlog($log);
                        }
                        else if (empty($user->roles)) {
                            // The user exists in AD, but has no Open-AudIT roles
                            $log->message = "User $username exists in AD (" . $ldap->name . ") and attempted to logon, but does not belong to any OA groups for Roles.";
                            stdlog($log);
                        }
                    }
                }
            }
        }

        // Check for a local account
        if ($this->db->table_exists('users')) {
            $sql = "/* m_logon::logon */" . "SELECT * FROM users WHERE name = ? and active = 'y'";
        } elseif ($this->db->field_exists('user_name', 'oa_user')) {
            $sql = "/* m_logon::logon */" . "SELECT `user_id` AS `id`, `user_name` AS `name`, `user_password` AS `password` FROM oa_user WHERE user_name = ?";
        } else {
            $sql = "/* m_logon::logon */" . "SELECT * FROM oa_user WHERE name = ? and active = 'y'";
        }
        $data = array($username);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (count($result) > 0) {
            foreach ($result as $db_user) {
                # get the salt from the front of the hash
                $salt = substr($db_user->password, 0, 64);
                # the SHA256 form the end of the hash
                $valid_hash = substr($db_user->password, 64, 64);
                # hash the password being tested
                $test_hash = hash("sha256", $salt.$password);
                # if the hashes are exactly the same, the password is valid
                if ($test_hash == $valid_hash) {
                    $log->message = "User $username logged on (local account).";
                    stdlog($log);
                    $CI->user = $db_user;
                    $userdata = array('user_id' => $CI->user->id, 'user_debug' => '');
                    $this->session->set_userdata($userdata);
                    return $db_user;
                }
            }
        }
        $log->severity = 5;
        $log->message = "User $username attempted to log on with invalid credentials. IP " . $_SERVER['REMOTE_ADDR'];
        stdlog($log);
        return false;
    }
}
