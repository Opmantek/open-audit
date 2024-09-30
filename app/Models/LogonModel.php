<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;
use CodeIgniter\Model;

class LogonModel extends Model
{
    public function logon($username = '', $password = '')
    {
        helper('security');

        if (empty($username) or empty($password)) {
            // log an issue
            log_message('info', 'Logon without username or password refused.');
            return false;
        }

        $db = db_connect();
        $ldapServers = array();
        if ($db->tableExists('auth')) {
            $sql = "SELECT * FROM auth WHERE `type` IN ('active directory', 'openldap')";
            $ldapServers = $db->query($sql)->getResult();
        }

        $sql = "SELECT * FROM roles";
        $roles = $db->query($sql)->getResult();

        $sql = "SELECT * FROM orgs";
        $orgs = $db->query($sql)->getResult();

        // Auth against any configured LDAP servers
        if (!empty($ldapServers)) {
            log_message('debug', 'LDAP Servers in database, validating user against.');
            $user = new stdClass();
            $user->full = $username;
            $user->name = explode('@', $username)[0];
            $user->password = $password;
            $user->domain = '';
            if (strpos($username, '@') !== false) {
                $user->domain = explode('@', $username)[1];
            }
            if (!empty($user->domain)) {
                $sql = 'SELECT * FROM auth WHERE domain LIKE ?';
                $ldapServers = $db->query($sql, [$user->domain])->getResult();
            }
            if (!empty($ldapServers)) {
                # Added so we do not fail when checking self-signed certificates
                # See here - https://docs.community.firstwave.com/wiki/spaces/OA/pages/3163949406/Troubleshooting+LDAP+logins
                putenv('LDAPTLS_REQCERT=never');
                log_message('debug', count($ldapServers) . ' LDAP servers retrieved from database.');
                // We have configured ldapServers - validate
                foreach ($ldapServers as $ldap) {
                    if ($ldap->type !== 'active directory' and $ldap->type !== 'openldap') {
                        log_message('error', 'An invalid LDAP server type was supplied (' . $ldap->type . '), skipping.');
                        continue;
                    }
                    if (empty($ldap->use_authentication) or $ldap->use_authentication !== 'y') {
                        log_message('info', $ldap->name . ' not configured to use authentication, skipping.');
                        continue;
                    }

                    $ldap->connect_string = ($ldap->secure === 'y') ? 'ldaps://' . $ldap->host . ':' . $ldap->port : 'ldap://' . $ldap->host . ':' . $ldap->port;

                    // Connecting make sure all our attributes for LDAP are correct
                    $ldap_connection = $this->my_ldap_connect($ldap);
                    if (empty($ldap_connection)) {
                        log_message('error', $ldap->name . ' failed ldap_connect, skipping.');
                        continue;
                    }

                    // Binding tests if we can connect with a valid username and password
                    $ldap_bind = $this->my_ldap_bind($ldap, $ldap_connection, $user);
                    if (empty($ldap_bind)) {
                        // The credentials did not work
                        log_message('warning', $ldap->name . ' failed ldap_bind, skipping.');
                        continue;
                    }

                    // If we're not using Roles, get the from the DB->user or move on
                    if (strtolower($ldap->use_authorisation) !== 'y') {
                        $sql = "SELECT * FROM users WHERE name = ? AND active = 'y' LIMIT 1";
                        $users = $db->query($sql, [$username])->getResult();
                        if (count($users) === 1) {
                            return $users[0];
                        } else {
                            log_message('info', "User {$username} in LDAP {$ldap->name} but not in Open-AudIT and not using LDAP for roles. Trying next LDAP Server.");
                            // Skip the rest of this ldap server as there may be other ldap server's we use for roles.
                            break;
                        }
                    }

                    // Get the users LDAP groups
                    $result = $this->my_ldap_search($ldap, $ldap_connection, $user);
                    if (empty($result)) {
                        log_message('warning', 'LDAP search failed for user ' . $username . ' at ' . $ldap->host . ', ' . (string)ldap_error($ldap_connection));
                        continue;
                    }
                    $entries = $this->my_ldap_get_entries($ldap, $ldap_connection, $result, $user);

                    // Build the new user from LDAP attributes
                    $user = $this->my_user($user, $ldap, $entries);
                    if (empty($user)) {
                        log_message('error', 'Create user from LDAP entries retrieval failed for user ' . $username . ' at ' . $ldap->host . ', ' . (string)ldap_error($ldap_connection));
                        continue;
                    }

                    // Match the AD groups to roles and orgs
                    $ad_users_groups = array();
                    $user_ldap_groups = '';
                    if ($ldap->type === 'active directory') {
                        log_message('debug', 'Checking AD group membership for ' . $username);
                        foreach ($roles as $role) {
                            if (!empty($role->ad_group)) {
                                foreach ($entries[0]['memberof'] as $key => $group) {
                                    if (is_integer($key)) {
                                        $ad_users_groups[] = '<br />"' . $group . '"';
                                        if (strpos($group, $role->ad_group) !== false) {
                                            log_message('debug', 'User ' . $user->name . ' is a member of LDAP group for Role ' . $role->ad_group);
                                            $user->roles[] = $role->name;
                                        }
                                    }
                                }
                            } else {
                                log_message('warning', 'No AD group associated with role ' . $role->name . ', skipping.');
                            }
                        }
                        foreach ($orgs as $org) {
                            if (!empty($org->ad_group)) {
                                foreach ($entries[0]['memberof'] as $key => $group) {
                                    if (is_integer($key)) {
                                        if (strpos($group, $org->ad_group) !== false) {
                                            $user->orgs[] = intval($org->id);
                                            log_message('debug', "User {$user->name} is a member of LDAP group for Org {$org->ad_group}");
                                        }
                                    }
                                }
                            } else {
                                log_message('warning', "No AD group associated with org {$org->name}, skipping.");
                            }
                        }
                    }
                    $user_ldap_groups = (!empty($ad_users_groups)) ? implode(' ', array_unique($ad_users_groups)) : '';
                    unset($ad_users_groups);

                    // Match the OpenLDAP groups to roles and orgs
                    if ($ldap->type === 'openldap') {
                        foreach ($roles as $role) {
                            if (!empty($role->ad_group)) {
                                $ldap->filter = "(&(cn={$role->ad_group})({$ldap->openldap_user_membership_attribute}={$user->uid}))";
                                if ($result = @ldap_search($ldap_connection, $ldap->ldap_base_dn, $ldap->filter)) {
                                    $entries = @ldap_get_entries($ldap_connection, $result);
                                    if (!empty($entries[0]['cn'][0])) {
                                        $user->roles[] = $role->name;
                                        log_message('debug', 'LDAP search for role ' . $role->ad_group . ' succeeded, ' . $user->name . ' is in group.');
                                    } else {
                                        log_message('debug', 'LDAP search for role ' . $role->ad_group . ' succeeded, ' . $user->name . ' is NOT in group.');
                                    }
                                } else {
                                    log_message('warning', "LDAP search failed for groups (roles) {$user->name} at {$ldap->host}");
                                }
                            } else {
                                log_message('warning', "No AD group associated with role {$role->name}, skipping.");
                            }
                        }
                        foreach ($orgs as $org) {
                            if (!empty($org->ad_group)) {
                                $ldap->filter = "(&(cn={$org->ad_group})({$ldap->openldap_user_membership_attribute}={$user->uid}))";
                                if ($result = ldap_search($ldap_connection, $ldap->ldap_base_dn, $ldap->filter)) {
                                    $entries = ldap_get_entries($ldap_connection, $result);
                                    if (!empty($entries[0]['cn'][0])) {
                                        $user->orgs[] = intval($org->id);
                                        log_message('debug', "LDAP search for org {$org->ad_group} succeeded, {$user->name} is in group.");
                                    } else {
                                        log_message('debug', "LDAP search for org {$org->ad_group} succeeded, {$user->name} is NOT in group.");
                                    }
                                } else {
                                    log_message('warning', "LDAP search failed for groups (orgs) {$user->name} at {$ldap->host}");
                                }
                            } else {
                                log_message('warning', "No AD group associated with org {$org->name}, skipping.");
                            }
                        }
                    }

                    // If we have our required roles and orgs
                    if (!empty($user->roles) and !empty($user->orgs)) {
                        $user->roles = json_encode($user->roles);
                        $user->orgs = json_encode($user->orgs);
                        $user_sql = "SELECT * FROM users WHERE name = ? and ldap = ? and active = 'y' LIMIT 1";
                        $user_data = array((string)$user->name, (string)$user->ldap);
                        $user_query = $db->query($user_sql, $user_data);
                        $user_result = $user_query->getResult();
                        if (count($user_result) === 0) {
                            // The user does not exist, insert
                            $user_sql = 'INSERT INTO users (name, org_id, full_name, email, roles, orgs, lang, active, ldap, type, dashboard_id, edited_by, edited_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())';
                            $user_query = $db->query($user_sql, [$user->name, $user->org_id, $user->full_name, $user->email, $user->roles, $user->orgs, $user->lang, 'y', $user->ldap, 'user', 1, 'system']);
                            $user->id = $db->insertID();
                            $user->password = '';
                            $log_user = (!empty($user->full_name)) ? $user->full_name : $username;
                            log_message('info', 'ACCESS:users:create::' . $log_user . ':' . json_encode($user));
                        } else {
                            // The user exists, update
                            $user_sql = 'UPDATE users SET full_name = ?, email = ?, orgs = ?, roles = ?, ldap = ? WHERE id = ?';
                            $user_data = array($user->full_name, $user->email, $user->orgs, $user->roles, $user->ldap, $user_result[0]->id);
                            $db->query($user_sql, $user_data);
                            $user->id = $user_result[0]->id;
                            log_message('debug', "Existing user {$username} logged on (AD account).");
                        }
                        return $user;
                    } else {
                        // The user is missing from required LDAP groups
                        if (empty($user->roles) && empty($user->orgs)) {
                            // The user exists in AD, but has no Open-AudIT roles or Organisations
                            $message = "User {$username} exists in LDAP ({$ldap->name}) and attempted to logon, but does not belong to any OA groups for Roles or Organisations.";
                            if ($ldap->type === 'active directory') {
                                $message .= " Users AD groups are: {$user_ldap_groups}";
                            }
                            log_message('warning', $message);
                        } elseif (empty($user->orgs)) {
                            // The user exists in AD, but has no Open-AudIT Organisations
                            $message = "User {$username} exists in LDAP ({$ldap->name}) and attempted to logon, but does not belong to any OA groups for Organisations.";
                            if ($ldap->type === 'active directory') {
                                $message .= " Users AD groups are: {$user_ldap_groups}";
                            }
                            log_message('warning', $message);
                        } elseif (empty($user->roles)) {
                            // The user exists in AD, but has no Open-AudIT roles
                            $message = "User {$username} exists in LDAP ({$ldap->name}) and attempted to logon, but does not belong to any OA groups for Roles.";
                            if ($ldap->type === 'active directory') {
                                $message .= " Users AD groups are: {$user_ldap_groups}";
                            }
                            log_message('warning', $message);
                        }
                    }
                }
            }
        }

        // Local users
        $sql = "SELECT * FROM users WHERE name = ? and active = 'y'";
        $query = $db->query($sql, [$username]);
        $result = $query->getResult();
        if (!empty($result)) {
            // New style password
            foreach ($result as $db_user) {
                if (password_verify($password, $db_user->password)) {
                    $db_user->password = '';
                    return $db_user;
                }
            }
            // Old style password
            foreach ($result as $db_user) {
                // get the salt from the front of the hash
                $salt = substr($db_user->password, 0, 64);
                // the SHA256 from the end of the hash
                $valid_hash = substr($db_user->password, 64, 64);
                // hash the password being tested
                $test_hash = hash('sha256', $salt . $password);
                // if the hashes are exactly the same, the password is valid
                if ($test_hash === $valid_hash) {
                    // A match - update the password to the new style
                    $sql = "UPDATE users SET `password` = ? WHERE id = ?";
                    $db->query($sql, [password_hash($password, PASSWORD_DEFAULT), $db_user->id]);
                    log_message('info', 'ACCESS:users:update:' . $db_user->id . ':' . $db_user->full_name . ':{"password":"removed for logging"}');
                    $db_user->password = '';
                    return $db_user;
                }
            }
        }
        return false;
    }

    public function my_ldap_connect($ldap)
    {
        ldap_set_option(null, LDAP_OPT_NETWORK_TIMEOUT, 5);
        ldap_set_option(null, LDAP_OPT_DEBUG_LEVEL, 7);
        ldap_set_option(null, LDAP_OPT_X_TLS_REQUIRE_CERT, 0);
        $ldap->version = intval($ldap->version);
        if ($ldap->version === 2 or $ldap->version === 3) {
            ldap_set_option(null, LDAP_OPT_PROTOCOL_VERSION, $ldap->version);
        } else {
            log_message('error', 'Invalid LDAP version (' . $ldap->version . '), skipping.');
            return false;
        }
        $ldap_connection = @ldap_connect($ldap->connect_string);
        if (empty($ldap_connection)) {
            log_message('warning', "LDAP connect failed for LDAP server at {$ldap->host}. Check your host, port and secure settings. Attempted to use {$ldap->connect_string}, " . (string)ldap_error($ldap_connection));
        }
        return $ldap_connection;
    }

    public function my_ldap_bind($ldap, $ldap_connection, $user)
    {
        $bind_string = '';
        $bind_password = '';
        if ($ldap->type === 'active directory') {
            if (strpos($user->full, '@') !== false) {
                $bind_string = $user->full;
            } else {
                $bind_string = $user->name . '@' . $ldap->domain;
            }
            $bind_password = $user->password;
            $bind = @ldap_bind($ldap_connection, $bind_string, $bind_password);
        }
        if ($ldap->type === 'openldap') {
            $bind_string = str_replace('@username', $user->full, $ldap->openldap_user_dn);
            $bind_string = str_replace('@domain', $user->domain, $bind_string) . ',' . $ldap->ldap_base_dn;
            $bind_password = $user->password;
            $bind = @ldap_bind($ldap_connection, $bind_string, $bind_password);
        }
        if (empty($bind)) {
            if (ldap_get_option($ldap_connection, LDAP_OPT_DIAGNOSTIC_MESSAGE, $extended_error)) {
                log_message('error', "LDAP_OPT_DIAGNOSTIC_MESSAGE: $extended_error");
            }
            $error = (string)ldap_error($ldap_connection);
            log_message('error', 'ldap_error: ' . $error);
            log_message('error', $bind_string . ' at ' . $ldap->connect_string);
            if ($error === 'Invalid credentials') {
                log_message('warning', 'Invalid user supplied credentials for LDAP server at ' . $ldap->host . ', skipping.');
            } elseif ($error === "Can't contact LDAP server") {
                log_message('error', 'LDAP server could not be reached at ' . $ldap->host . ', skipping.');
            } else {
                log_message('error', 'Could not bind to LDAP server at ' . $ldap->host . ', skipping.');
            }
            return false;
        }
        log_message('debug', 'Successful bind using credentials for LDAP server at ' . $ldap->connect_string . ' : ' . $bind_string);
        $ldap->dn_password = (string)simpleDecrypt($ldap->ldap_dn_password, config('Encryption')->key);
        if (!empty($ldap->ldap_dn_account) && empty($ldap->ldap_dn_password)) {
            log_message('warning', 'DN Account set, but no DN Password.');
        }
        if (!empty($ldap->ldap_dn_account) and !empty($ldap->ldap_dn_password)) {
            $bind_string = $ldap->ldap_dn_account;
            $bind_password = $ldap->ldap_dn_password;
            $bind = @ldap_bind($ldap_connection, $bind_string, $bind_password);
            if (empty($bind)) {
                log_message('error', 'Invalid DN supplied credentials for LDAP server at ' . $ldap->host . ', skipping');
                return false;
            }
            log_message('info', 'Bound to LDAP using supplied dn details: ' . $ldap->ldap_dn_account);
        }
        return $bind;
    }

    public function my_ldap_search($ldap, $ldap_connection, $user)
    {
        if ($ldap->type === 'active directory') {
            $ldap->filter = '(samaccountname=' . $user->name . ')';
        }
        if ($ldap->type === 'openldap') {
            $ldap->filter = '(' . $ldap->openldap_user_dn . ')';
            $ldap->filter = str_replace('@username', $user->name, $ldap->filter);
            $ldap->filter = str_replace('@domain', $user->domain, $ldap->filter);
            $temp = explode(',', $ldap->openldap_user_dn);
            for ($i = 0; $i < count($temp); $i++) {
                if (stripos($temp[$i], '@username') !== false) {
                    $ldap->filter = '(' . str_replace('@username', $user->name, $temp[$i]) . ')';
                }
            }
        }
        $result = @ldap_search($ldap_connection, $ldap->ldap_base_dn, $ldap->filter);
        return $result;
    }

    public function my_ldap_get_entries($ldap, $ldap_connection, $result, $user)
    {
        $entries = @ldap_get_entries($ldap_connection, $result);
        if (empty($entries)) {
            return false;
        }
        log_message('debug', "LDAP entries retrieval successful for user {$user->full} at {$ldap->host}");
        return $entries;
    }

    public function my_user($user, $ldap, $entries)
    {
        // NOTE - attribute order must match SQL schema order
        $thisuser = new stdClass();
        $thisuser->name = $user->full;
        $thisuser->org_id = intval($ldap->org_id);
        $thisuser->password = '';
        $thisuser->full_name = @(string)$entries[0]['givenname'][0] . ' ' . @(string)$entries[0]['sn'][0];
        $thisuser->email = @(string)$entries[0]['mail'][0];
        $thisuser->roles = array();
        $thisuser->orgs = array();
        $thisuser->lang = (string)$ldap->lang;
        $thisuser->active = 'y';
        $thisuser->ldap = '';
        if ($ldap->type === 'active directory') {
            $thisuser->ldap = @(string)$entries[0]['distinguishedname'][0];
        }
        if ($ldap->type === 'openldap') {
            $thisuser->ldap = @(string)$entries[0]['dn'];
        }
        $thisuser->type = 'user';
        $thisuser->dashboard_id = 1;
        $thisuser->devices_default_display_columns = '';
        $thisuser->access_token = '';
        $thisuser->edited_by = 'system';
        $thisuser->edited_by = 'system';
        $thisuser->uid = @(string)$entries[0]['uid'][0];
        return $thisuser;
    }
}
