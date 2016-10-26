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
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_logon extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function logon($id = '')
    {
        $CI = & get_instance();
        $CI->user = new stdClass();

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
            $sql = "SELECT *, IF ( DATE_SUB(NOW(), INTERVAL `refresh` HOUR) > `refreshed`, 'true', 'false') AS `update` FROM ldap_servers";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                // We have configured ldap_servers - validate
                $result = $query->result();

                foreach ($result as $ldap) {
                    // Deriving the corrrectly formatted attributes from the user input
                    if (count($result == 1)) {
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
                    #$bind = @ldap_bind($ldap->connection, $username, $password);
                    $bind = false;
                    if (!empty($ldap->derived_user) and !empty($ldap->derived_domain) and !empty($password)) {
                        $bind = @ldap_bind($ldap->connection, $ldap->derived_user . '@' . $ldap->derived_domain, $password);
                    }
                    if (!$bind) {
                        log_error('ERR-0019', 'bind');
                        break;
                    }
                    // Successful bind, therefore valid AD username and password
                    if (strtolower($ldap->use_roles) != 'y') {
                        if ($this->db->field_exists('user_name', 'oa_user')) {
                            $sql = "SELECT * FROM oa_user WHERE user_name = ? AND user_active = 'y' LIMIT 1";
                        } else {
                            $sql = "SELECT * FROM oa_user WHERE name = ? AND active = 'y' LIMIT 1";
                        }
                        $data = array($username);
                        $query = $this->db->query($sql, $data);
                        $result = $query->result();
                        if (count($result) == 1) {
                            $userdata = array('user_id' => $result[0]->id);
                            $this->session->set_userdata($userdata);
                            return;
                        } else {
                            // TODO log a warning. User in AD and correct credentials supplied, but no in OA
                            echo "HERE";
                            exit();
                            break;
                        }
                    }
                    // Should we update our internal LDAP group listing?
                    if ($ldap->update == 'true') {
                        // Remove any (old) existing ldap groups
                        $ldap_groups_sql = "DELETE FROM ldap_groups WHERE ldap_servers_id = ?";
                        $ldap_groups_data = array($ldap->id);
                        $ldap_groups_query = $this->db->query($ldap_groups_sql, $ldap_groups_data);
                        // Get the LDAP groups
                        $filter = '(objectCategory=group)';
                        $ldap_result = ldap_search($ldap->connection, $ldap->derived_dn, $filter, array("name","distinguishedname","primarygrouptoken","memberof"));
                        $entries = ldap_get_entries($ldap->connection, $ldap_result);
                        foreach ($entries as $entry) {
                            if (!empty($entry['distinguishedname'])) {
                                $group = new stdClass();
                                $group->name = @$entry['name'][0];
                                $group->dn = @$entry['distinguishedname'][0];
                                $group->primary_token = @$entry['primarygrouptoken'][0];
                                if (!empty($entry['memberof'])) {
                                    $group->memberof = $entry['memberof'];
                                    unset($group->memberof['count']);
                                } else {
                                    $group->memberof = array();
                                }
                                $ldap_groups_sql = "INSERT INTO ldap_groups VALUES (NULL, ?, ?, ?, ?, ?)";
                                $ldap_groups_data = array($ldap->id, $group->name, $group->dn, $group->primary_token, json_encode($group->memberof));
                                $ldap_groups_query = $this->db->query($ldap_groups_sql, $ldap_groups_data);
                            }
                        }
                    }
                    // Update the refreshed timestamp on our ldap_server
                    $sql = "UPDATE ldap_servers SET refreshed = NOW() WHERE id = " . intval($ldap->id);
                    $this->db->query($sql);

                    // Get our LDAP groups from our DB
                    $ldap_groups_sql = "SELECT * FROM ldap_groups WHERE ldap_servers_id = ?";
                    $ldap_groups_data = array($ldap->id);
                    $ldap_groups_query = $this->db->query($ldap_groups_sql, $ldap_groups_data);
                    unset($ldap_groups);
                    $ldap_groups = $ldap_groups_query->result();
                    unset($item);
                    foreach ($ldap_groups as &$item) {
                        $item->memberof = json_decode($item->memberof);
                    }
                    unset($item);
                    // Update the user in our DB - first get the details from AD
                    $read = ldap_search($ldap->connection, $ldap->derived_dn, $ldap->derived_filter);
                    if (!$read) {
                        log_error('ERR-0019', 'search');
                        output();
                        exit();
                    }
                    $entries = ldap_get_entries($ldap->connection, $read);
                    if (!$entries) {
                        log_error('ERR-0019', 'get_entries');
                        output();
                        exit();
                    }
                    asort($entries[0]);

                    $user = new stdClass();
                    $user->name = $username;
                    $user->full_name = @(string)$entries[0]['displayname'][0];
                    $user->email = @(string)$entries[0]['mail'][0];
                    $user->lang = (string)$ldap->lang;
                    $user->ldap = @(string)$entries[0]['distinguishedname'][0];
                    $user->primarygroupid = @$entries[0]['primarygroupid'][0];
                    if (!empty($entries[0]['memberof'])) {
                        $user->memberof = $entries[0]['memberof'];
                        unset($user->memberof['count']);
                    } else {
                        $user->memberof = array();
                    }
                    // add the users primary group to their memberof attribute
                    foreach ($ldap_groups as $group) {
                        if ($group->primary_token == $user->primarygroupid) {
                            $user->memberof[] = $group->dn;
                            break;
                        }
                    }

                    // get the children of all the users groups
                    foreach ($user->memberof as $user_group) {
                        foreach ($this->get_children((string)$user_group) as $children) {
                            $user->group_list[] = $children;
                        }
                    }

                    unset ($user->memberof);
                    $user->group_list = array_unique($user->group_list);

                    $user->groups = array();
                    foreach ($user->group_list as $key => $value) {
                        for ($i=0; $i < count($ldap_groups); $i++) { 
                            if ($value == $ldap_groups[$i]->dn) {
                                $user->groups[] = $ldap_groups[$i]->name;
                                break;
                            }
                        }
                    }

                    unset($user->group_list);
                    // See if any user groups are role groups
                    $roles_sql = "SELECT * FROM roles";
                    $roles_query = $this->db->query($roles_sql);
                    $roles = $roles_query->result();
                    $user_roles = array();
                    foreach ($roles as $role) {
                        foreach ($user->groups as $key => $value) {
                            if ($role->ad_group == $value) {
                                $user_roles[] = $role->name;
                            }
                        }
                    }
                    $user->roles = json_encode($user_roles);

                    // See if any user groups are org groups
                    $orgs_sql = "SELECT * FROM oa_org";
                    $orgs_query = $this->db->query($orgs_sql);
                    $orgs = $orgs_query->result();
                    $user_orgs = array();
                    foreach ($orgs as $org) {
                        foreach ($user->groups as $key => $value) {
                            if ($org->ad_group == $value) {
                                $user_orgs[] = intval($org->id);
                            }
                        }
                    }
                    $user->orgs = json_encode($user_orgs);

                    if (!empty(json_decode($user->orgs)) and !empty(json_decode($user->roles))) {
                        $user_sql = "SELECT * FROM oa_user WHERE name = ? and ldap = ? and active = 'y' LIMIT 1";
                        $user_data = array((string)$username, intval($entries[0]['distinguishedname'][0]));
                        $user_query = $this->db->query($user_sql, $user_data);
                        $user_result = $user_query->result();
                        if (count($user_result) == 0) {
                            // The user does not exist, insert
                            $user_sql = "INSERT INTO oa_user VALUES (NULL, ?, ?, '', ?, ?, ?, ?, ?, 'y', ?, 'system', NOW())";
                            $user_data = array((string)$username,
                                                intval($ldap->org_id),
                                                (string)$user->full_name,
                                                (string)$user->email,
                                                (string)$user->roles,
                                                (string)$user->orgs,
                                                (string)$ldap->lang,
                                                (string)$user->ldap );
                            $user_query = $this->db->query($user_sql, $user_data);
                            $user->id = $this->db->insert_id();
                        } else {
                            // The user exists, update
                            $user_sql = "UPDATE oa_user SET full_name = ?, email = ?, orgs = ?, roles = ?, ldap = ? WHERE id = ?";
                            $user_data = array($user->full_name,
                                                $user->email,
                                                $user->orgs,
                                                $user->roles,
                                                $user->ldap,
                                                $user_result[0]->id);
                            $this->db->query($user_sql, $user_data);
                        }
                        $CI->user = $user;
                        $userdata = array('user_id' => $CI->user->id, 'user_debug' => '');
                        $this->session->set_userdata($userdata);
                        return;
                    } else {
                        // The user exists in AD, but has no Open-AudIT roles or Organisations
                        // echo "<pre>\n"; print_r($user); exit();
                    }
                }
            }
        }

        // Check for a local account
        if ($this->db->field_exists('user_name', 'oa_user')) {
            $sql = "SELECT `user_id` AS `id`, `user_name` AS `name`, `user_password` AS `password` FROM oa_user WHERE user_name = ?";
        } else {
            $sql = "SELECT * FROM oa_user WHERE name = ? and active = 'y'";
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
                    $CI->user = $db_user;
                    $userdata = array('user_id' => $CI->user->id, 'user_debug' => '');
                    $this->session->set_userdata($userdata);
                    return;
                }
            }
        }
    }

    private function get_children($parent)
    {
        global $ldap_groups;
        $group_list = array();
        $group_list[] = $parent;
        if (!empty($ldap_groups[$parent]->memberof)) {
            $group_list = array_merge($group_list, $ldap_groups[$parent]->memberof);
            foreach ($ldap_groups[$parent]->memberof as $child) {
                $group_list = array_merge($group_list, $this->get_children($child));
            }
        }
        return $group_list;
    }
}
