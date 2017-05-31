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
        # order of authenticating is against ldap_server(s) (if set), then against a local account with sha256.
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

        if (strpos($username, '@') !== false) {
            $temp = explode('@', $username);
            $user['username'] = $temp[0];
            $user['domain'] = $temp[1];
            $user['password'] = $password;
            $username = $user['username'];
            $domain = $user['domain'];
            $log->summary = 'username@domain supplied, splitting.';
            stdlog($log);
        } else {
            $user['username'] = $username;
            $user['domain'] = '';
            $user['password'] = $password;
        }

        // Roles
        $roles_sql = "/* m_logon::logon */" . "SELECT * FROM roles";
        $roles_query = $this->db->query($roles_sql);
        $roles = $roles_query->result();

        // Orgs
        $orgs_sql = "/* m_logon::logon */" . "SELECT * FROM orgs";
        $orgs_query = $this->db->query($orgs_sql);
        $orgs = $orgs_query->result();

        // Auth against any configured LDAP servers
        if ($this->db->table_exists('ldap_servers')) {
            if (!empty($user['domain'])) {
                $sql = "/* m_logon::logon */" . "SELECT * FROM ldap_servers WHERE domain LIKE ?";
                $data = array($user['domain']);
                $query = $this->db->query($sql, $data);
            } else {
                $sql = "/* m_logon::logon */" . "SELECT * FROM ldap_servers";
                $query = $this->db->query($sql);
            }
            $ldap_servers = $query->result();
            if (count($ldap_servers > 0)) {
                $log->summary = 'LDAP server list retrieved.';
                $log->detail = count($ldap_servers) . ' LDAP servers retreieved from database.';
                stdlog($log);
                // We have configured ldap_servers - validate
                foreach ($ldap_servers as $ldap) {
                    if ($ldap->type != 'active directory' and $ldap->type != 'openldap') {
                        $log->summary = 'Invalid LDAP server type supplied, skipping.';
                        stdlog($log);
                        continue;
                    }
                    ldap_set_option(null, LDAP_OPT_DEBUG_LEVEL, 7);
                    ldap_set_option(null, LDAP_OPT_PROTOCOL_VERSION, $ldap->version);
                    $ldap->dn_password = (string)$this->encrypt->decode($ldap->dn_password);
                    if (count($ldap_servers == 1)) {
                        // We only have a single ldap_server. Add the domain to the username if not already present
                        if (empty($user['domain'])) {
                            $user['domain'] = $ldap->domain;
                            $domain = $ldap->domain;
                        }
                    }
                    $ldap_connect_string = '';
                    if ($ldap->secure == 'y') {
                        $ldap_connect_string = 'ldaps://' . $ldap->host . ':' . $ldap->port;
                    } else {
                        $ldap_connect_string = 'ldap://' . $ldap->host . ':' . $ldap->port;
                    }
                    if ($ldap_connection = @ldap_connect($ldap_connect_string)) {
                        $log->summary = 'Connected to LDAP server at ' . $ldap->host;
                        $log->details = '';
                        stdlog($log);
                        $bind_string = '';
                        $bind_password = '';
                        if ($ldap->type == 'active directory') {
                            $bind_string = $user['username'] . '@' . $user['domain'];
                            $bind_password = $user['password'];
                            $bind = @ldap_bind($ldap_connection, $bind_string, $bind_password);
                        }
                        if ($ldap->type == 'openldap') {
                            $bind_string = str_replace('@username', $user['username'], $ldap->user_dn);
                            $bind_string = str_replace('@domain', $user['domain'], $bind_string) . ',' . $ldap->base_dn;
                            $bind_password = $user['password'];
                            $bind = @ldap_bind($ldap_connection, $bind_string, $bind_password);
                        }
                        if (empty($bind)) {
                            $log->summary = 'Invalid user supplied credentials for LDAP server at ' . $ldap->host . ', skipping';
                            $log->detail = (string)ldap_error($ldap_connection);
                            stdlog($log);
                            continue;
                        }
                        if (!empty($ldap->dn_account) and !empty($ldap->dn_password)) {
                            $bind_string = $ldap->dn_account;
                            $bind_password = $ldap->dn_password;
                            $bind = @ldap_bind($ldap_connection, $bind_string, $bind_password);
                            if (empty($bind)) {
                                $log->summary = 'Invalid DN supplied credentials for LDAP server at ' . $ldap->host . ', skipping';
                                $log->detail = (string)ldap_error($ldap_connection);
                                stdlog($log);
                            } else {
                                $log->summary = 'Bound to LDAP using supplied dn details';
                                $log->detail = $ldap->dn_account;
                                stdlog($log);
                            }
                        }
                        if ($ldap->type == 'active directory') {
                            $ldap->filter = '(samaccountname=' . $user['username'] . ')';
                        }
                        if ($ldap->type == 'openldap') {
                            $ldap->filter = '(' . $ldap->user_dn . ')';
                            $ldap->filter = str_replace('@username', $user['username'], $ldap->filter);
                            $ldap->filter = str_replace('@domain', $user['domain'], $ldap->filter);

                            $temp = explode(',', $ldap->user_dn);
                            for ($i=0; $i < count($temp); $i++) {
                                if (stripos($temp[$i], '@username') !== false) {
                                    $ldap->filter = '(' . str_replace('@username', $user['username'], $temp[$i]) . ')';
                                }
                            }
                        }
                        $log->summary = 'ldap filter';
                        $log->detail = (string)$ldap->filter;
                        stdlog($log);
                        # Get the user details
                        if ($result = @ldap_search($ldap_connection, $ldap->base_dn, $ldap->filter)) {
                            $log->summary = "LDAP search successful for user " . $user['username'] . " at " . $ldap->host;
                            $log->detail = "ldap_search(\$ldap_connection, '" . $ldap->base_dn . "', '" . $ldap->filter . "')";
                            stdlog($log);
                            unset($user);
                            $user = new stdClass();
                            $user->name = $username;
                            if ($entries = @ldap_get_entries($ldap_connection, $result)) {
                                $log->summary = "LDAP entries retrieval successful for user " . $username . " at " . $ldap->host;
                                $log->detail = '';
                                stdlog($log);
                                # NOTE - attribute order must match SQL schema order
                                $user->name = $username;
                                $user->org_id = intval($ldap->org_id);
                                $user->password = '';
                                $user->full_name = @(string)$entries[0]['givenname'][0] . ' ' . @(string)$entries[0]['sn'][0];
                                $user->email = @(string)$entries[0]['mail'][0];
                                $user->roles = array();
                                $user->orgs = array();
                                $user->lang = (string)$ldap->lang;
                                $user->active = 'y';
                                $user->ldap = '';
                                //$user->primarygroupid = @$entries[0]['primarygroupid'][0];
                                if ($ldap->type == 'active directory') {
                                    $user->ldap = @(string)$entries[0]['distinguishedname'][0];
                                }
                                if ($ldap->type == 'openldap') {
                                    $user->ldap = @(string)$entries[0]['dn'];
                                }
                                $user->edited_by = 'system';
                                $user->uid = @(string)$entries[0]['uid'][0];
                            } else {
                                $log->summary = "LDAP entries retrieval failed for user " . $user->name . " at " . $ldap->host;
                                $log->detail = (string)ldap_error($ldap_connection);
                                stdlog($log);
                                continue;
                            }
                        } else {
                            $log->summary = "LDAP search failed for user " . $user->name . " at " . $ldap->host;
                            $log->detail = (string)ldap_error($ldap_connection);
                            stdlog($log);
                            continue;
                        }
                        $log->detail = '';
                        # get the roles groups and match
                        if ($ldap->type == 'active directory') {
                            foreach ($roles as $role) {
                                if (!empty($role->ad_group)) {
                                    foreach ($entries[0]['memberof'] as $group) {
                                        if (strpos($group, $role->ad_group) !== false) {
                                            $user->roles[] = $role->name;
                                            $log->summary = 'User ' . $user->name . ' is a member of LDAP group for Role ' . $role->ad_group;
                                            $log->detail = $ldap->filter;
                                            stdlog($log);
                                        }
                                    }
                                }
                            }
                            foreach ($orgs as $org) {
                                if (!empty($org->ad_group)) {
                                    foreach ($entries[0]['memberof'] as $group) {
                                        if (strpos($group, $org->ad_group) !== false) {
                                            $user->orgs[] = intval($org->id);
                                            $log->summary = 'User ' . $user->name . ' is a member of LDAP group for Org ' . $org->ad_group;
                                            $log->detail = $ldap->filter;
                                            stdlog($log);
                                        }
                                    }
                                }
                            }
                        }
                        if ($ldap->type == 'openldap') {
                            foreach ($roles as $role) {
                                if (!empty($role->ad_group)) {
                                    $ldap->filter = "(&(cn=" . $role->ad_group . ")(" . $ldap->user_membership_attribute . "=" . $user->uid . "))";
                                    if ($result = @ldap_search($ldap_connection, $ldap->base_dn, $ldap->filter)) {
                                        $entries = @ldap_get_entries($ldap_connection, $result);
                                        if (!empty($entries[0]['cn'][0])) {
                                            $user->roles[] = $role->name;
                                            $log->summary = 'LDAP search for role ' . $role->ad_group . ' succeeded, ' . $user->name . ' is in group.';
                                            $log->detail = $ldap->filter;
                                            stdlog($log);
                                        } else {
                                            $log->summary = 'LDAP search for role ' . $role->ad_group . ' succeeded, ' . $user->name . ' is NOT in group.';
                                            $log->detail = $ldap->filter;
                                            stdlog($log);
                                        }
                                    } else {
                                        $log->summary = "LDAP search failed for groups (roles) " . $user->name . " at " . $ldap->host;
                                        $log->detail = (string)ldap_error($ldap_connection);
                                        stdlog($log);
                                    }
                                }
                            }

                            foreach ($orgs as $org) {
                                if (!empty($org->ad_group)) {
                                    $ldap->filter = "(&(cn=" . $org->ad_group . ")(" . $ldap->user_membership_attribute . "=" . $user->uid . "))";
                                    if ($result = ldap_search($ldap_connection, $ldap->base_dn, $ldap->filter)) {
                                        $entries = ldap_get_entries($ldap_connection, $result);
                                        if (!empty($entries[0]['cn'][0])) {
                                            $user->orgs[] = intval($org->id);
                                            $log->summary = 'LDAP search for org ' . $org->ad_group . ' succeeded, ' . $user->name . ' is in group.';
                                            $log->detail = $ldap->filter;
                                            stdlog($log);
                                        } else {
                                            $log->summary = 'LDAP search for org ' . $org->ad_group . ' succeeded, ' . $user->name . ' is NOT in group.';
                                            $log->detail = $ldap->filter;
                                            stdlog($log);
                                        }
                                    } else {
                                        $log->summary = "LDAP search failed for groups (orgs) " . $user->name . " at " . $ldap->host;
                                        $log->detail = (string)ldap_error($ldap_connection);
                                        stdlog($log);
                                    }
                                }
                            }
                        }
                        $user->roles = json_encode($user->roles);
                        $user->orgs = json_encode($user->orgs);
                        $log->summary = 'user details';
                        $log->detail = json_encode($user);
                        stdlog($log);
                        $log->summary = '';
                        $og->detail = '';
                        if (!empty($user->roles) and !empty($user->orgs)) {
                            if ($this->db->table_exists('users')) {
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
                                if ($this->db->table_exists('users')) {
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
                                if ($this->db->table_exists('users')) {
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
                            return $user;
                        } else {
                            $log->severity = 5;
                            if (empty($user->roles) and empty($user->orgs)) {
                                // The user exists in AD, but has no Open-AudIT roles or Organisations
                                $log->message = "User $username exists in AD (" . $ldap->name . ") and attempted to logon, but does not belong to any OA groups for Roles or Organisations.";
                                stdlog($log);
                            } else if (empty($user->orgs)) {
                                // The user exists in AD, but has no Open-AudIT Organisations
                                $log->message = "User $username exists in AD (" . $ldap->name . ") and attempted to logon, but does not belong to any OA groups for Organisations.";
                                stdlog($log);
                            } else if (empty($user->roles)) {
                                // The user exists in AD, but has no Open-AudIT roles
                                $log->message = "User $username exists in AD (" . $ldap->name . ") and attempted to logon, but does not belong to any OA groups for Roles.";
                                stdlog($log);
                            }
                        }
                    } else {
                        # ERROR - could not connect to LDAP / AD server
                        $log->summary = "LDAP connect failed for LDAP server at " . $ldap->host;
                        $log->detail = (string)ldap_error($ldap_connection);
                        stdlog($log);
                        continue;
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
