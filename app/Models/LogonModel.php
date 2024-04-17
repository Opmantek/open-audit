<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use \stdClass;

use CodeIgniter\Model;

class LogonModel extends Model
{

    public function logon($username = '', $password = '')
    {
        helper('security');

        if (empty($username) or empty($password)) {
            // log an issue
        }
        $domain = '';
        if (strpos($username, '@') !== false) {
            $domain = explode('@', $username)[1];
        }

        $db = db_connect();
        $sql = "SELECT * FROM ldap_servers";
        $ldapServers = $db->query($sql)->getResult();

        $sql = "SELECT * FROM roles";
        $roles = $db->query($sql)->getResult();

        $sql = "SELECT * FROM orgs";
        $orgs = $db->query($sql)->getResult();

        // Auth against any configured LDAP servers
        if (!empty($ldapServers)) {
            log_message('debug', 'LDAP Servers in database, validating user against.');
            $user = explode('@', $username)[0];
            if (!empty($domain)) {
                $sql = 'SELECT * FROM ldap_servers WHERE domain LIKE ?';
                $ldapServers = $db->query($sql, [$domain])->getResult();
            }
            if (!empty($ldapServers)) {
                # Added so we do not fail when checking self-signed certificates
                # See here - https://community.opmantek.com/display/OA/Troubleshooting+LDAP+logins
                putenv('LDAPTLS_REQCERT=never');
                log_message('debug', count($ldapServers) . ' LDAP servers retrieved from database.');
                // We have configured ldapServers - validate
                foreach ($ldapServers as $ldap) {
                    if ($ldap->type !== 'active directory' && $ldap->type !== 'openldap') {
                        log_message('error', 'An invalid LDAP server type was supplied (' . $ldap->type . '), skipping.');
                        // \Config\Services::session()->setFlashdata('error', 'Invalid LDAP server type supplied (' . $ldap->type . '), skipping.');
                        continue;
                    }
                    // New for 3.3.0 - use_auth, by default set to 'y', but if a user changes this, skip.
                    if (!empty($ldap->use_auth) && $ldap->use_auth === 'n') {
                        continue;
                    }
                    ldap_set_option(null, LDAP_OPT_NETWORK_TIMEOUT, 5);
                    ldap_set_option(null, LDAP_OPT_DEBUG_LEVEL, 7);
                    ldap_set_option(null, LDAP_OPT_X_TLS_REQUIRE_CERT, 0);
                    $ldap->version = intval($ldap->version);
                    if ($ldap->version === 2 or $ldap->version === 3) {
                        ldap_set_option(null, LDAP_OPT_PROTOCOL_VERSION, $ldap->version);
                    } else {
                        log_message('error', 'Invalid LDAP version (' . $ldap->version . '), skipping.');
                        // \Config\Services::session()->setFlashdata('error',  'Invalid LDAP version (' . $ldap->version . '), skipping.');
                        continue;
                    }
                    $ldap_connect_string = '';
                    if ($ldap->secure === 'y') {
                        $ldap_connect_string = 'ldaps://' . $ldap->host . ':' . $ldap->port;
                    } else {
                        $ldap_connect_string = 'ldap://' . $ldap->host . ':' . $ldap->port;
                    }
                    if ($ldap_connection = @ldap_connect($ldap_connect_string)) {
                        $bind_string = '';
                        $bind_password = '';
                        if ($ldap->type === 'active directory') {
                            if (strpos($username, '@') !== false) {
                                $bind_string = $username;
                            } else {
                                $bind_string = $user . '@' . $ldap->domain;
                            }
                            $bind_password = $password;
                            $bind = @ldap_bind($ldap_connection, $bind_string, $bind_password);
                        }
                        if ($ldap->type === 'openldap') {
                            $bind_string = str_replace('@username', $username, $ldap->user_dn);
                            $bind_string = str_replace('@domain', $domain, $bind_string) . ',' . $ldap->base_dn;
                            $bind_password = $password;
                            $bind = @ldap_bind($ldap_connection, $bind_string, $bind_password);
                        }
                        if (empty($bind)) {
                            if (ldap_get_option($ldap_connection, LDAP_OPT_DIAGNOSTIC_MESSAGE, $extended_error)) {
                                log_message('error', "LDAP_OPT_DIAGNOSTIC_MESSAGE: $extended_error");
                            }
                            $error = (string)ldap_error($ldap_connection);
                            log_message('error', 'ldap_error: ' . $error);
                            log_message('error', $bind_string . ' at ' . $ldap_connect_string);
                            if ($error === 'Invalid credentials') {
                                log_message('warning', 'Invalid user supplied credentials for LDAP server at ' . $ldap->host . ', skipping.');
                            } else if ($error === "Can't contact LDAP server") {
                                log_message('error', 'LDAP server could not be reached at ' . $ldap->host . ', skipping.');
                            } else {
                                log_message('error', 'Could not bind to LDAP server at ' . $ldap->host . ', skipping.');
                            }
                            // \Config\Services::session()->setFlashdata('warning',  $message);
                            continue;
                        } else {
                            log_message('debug', 'Successful bind using credentials for LDAP server at ' . $ldap_connect_string . ' : ' . $bind_string);
                        }
                        $ldap->dn_password = (string)simpleDecrypt($ldap->dn_password, config('Encryption')->key);
                        if (!empty($ldap->dn_account) && empty($ldap->dn_password)) {
                            $message = 'DN Account set, but no DN Password.';
                            // \Config\Services::session()->setFlashdata('warning',  $message);
                            log_message('warning', $message);
                        }
                        if (!empty($ldap->dn_account) and !empty($ldap->dn_password)) {
                            $bind_string = $ldap->dn_account;
                            $bind_password = $ldap->dn_password;
                            $bind = @ldap_bind($ldap_connection, $bind_string, $bind_password);
                            if (empty($bind)) {
                                $message = 'Invalid DN supplied credentials for LDAP server at ' . $ldap->host . ', skipping';
                                // \Config\Services::session()->setFlashdata('error',  $message);
                                log_message('error', $message);
                            } else {
                                $message = 'Bound to LDAP using supplied dn details: ' . $ldap->dn_account;
                                // \Config\Services::session()->setFlashdata('error',  $message);
                                log_message('info', $message);
                            }
                        }
                        if ($ldap->type === 'active directory') {
                            $ldap->filter = '(samaccountname=' . $username . ')';
                        }
                        if ($ldap->type === 'openldap') {
                            $ldap->filter = '(' . $ldap->user_dn . ')';
                            $ldap->filter = str_replace('@username', $username, $ldap->filter);
                            $ldap->filter = str_replace('@domain', $domain, $ldap->filter);
                            $temp = explode(',', $ldap->user_dn);
                            for ($i=0; $i < count($temp); $i++) {
                                if (stripos($temp[$i], '@username') !== false) {
                                    $ldap->filter = '(' . str_replace('@username', $username, $temp[$i]) . ')';
                                }
                            }
                        }

                        if (strtolower($ldap->use_roles) !== 'y') {
                            $sql = "SELECT * FROM users WHERE name = ? AND active = 'y' LIMIT 1";
                            $users = $db->query($sql, [$username])->getResult();
                            if (count($users) === 1) {
                                return $users[0];
                            } else {
                                $message = "User {$username} in LDAP {$ldap->name} but not in Open-AudIT and not using LDAP for roles. Trying next LDAP Server.";
                                log_message('warning', $message);
                                // \Config\Services::session()->setFlashdata('warning',  $message);
                                // Skip the rest of this ldap server as there may be other ldap server's we use for roles.
                                break;
                            }
                        }

                        // Get the user details
                        if ($result = @ldap_search($ldap_connection, $ldap->base_dn, $ldap->filter)) {
                            $message = "LDAP search successful for user {$username} at {$ldap->host}, BaseDN: {$ldap->base_dn}, Filter: {$ldap->filter}')";
                            log_message('debug', $message);
                            unset($user);
                            $user = new \stdClass();
                            $user->name = $username;
                            $user_ldap_groups = '';
                            if ($entries = @ldap_get_entries($ldap_connection, $result)) {
                                $message = "LDAP entries retrieval successful for user {$username} at {$ldap->host}";
                                log_message('debug', "LDAP entries retrieval successful for user {$username} at {$ldap->host}");
                                // \Config\Services::session()->setFlashdata('warning',  $message);
                                // NOTE - attribute order must match SQL schema order
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
                                if ($ldap->type === 'active directory') {
                                    $user->ldap = @(string)$entries[0]['distinguishedname'][0];
                                }
                                if ($ldap->type === 'openldap') {
                                    $user->ldap = @(string)$entries[0]['dn'];
                                }
                                $user->type = 'user';
                                $user->dashboard_id = 1;
                                $user->devices_default_display_columns = '';
                                $user->access_token = '';
                                $user->edited_by = 'system';
                                $user->edited_by = 'system';
                                $user->uid = @(string)$entries[0]['uid'][0];
                            } else {
                                $message = 'LDAP entries retrieval failed for user ' . $username . ' at ' . $ldap->host . ', ' . (string)ldap_error($ldap_connection);
                                log_message('error', 'LDAP entries retrieval failed for user ' . $username . ' at ' . $ldap->host . ', ' . (string)ldap_error($ldap_connection));
                                // \Config\Services::session()->setFlashdata('warning',  $message);
                                continue;
                            }
                        } else {
                            $message = 'LDAP search failed for user ' . $username . ' at ' . $ldap->host . ', ' . (string)ldap_error($ldap_connection);
                            log_message('warning', 'LDAP search failed for user ' . $username . ' at ' . $ldap->host . ', ' . (string)ldap_error($ldap_connection));
                            // \Config\Services::session()->setFlashdata('warning',  $message);
                            continue;
                        }
                        // get the roles groups and match
                        $ad_users_groups = array();
                        if ($ldap->type === 'active directory') {
                            log_message('debug', 'Checking AD group membership for ' . $username);
                            foreach ($roles as $role) {
                                if (!empty($role->ad_group)) {
                                    foreach ($entries[0]['memberof'] as $key => $group) {
                                        if (is_integer($key)) {
                                            $ad_users_groups[] = '<br />"' . $group . '"';
                                            if (strpos($group, $role->ad_group) !== false) {
                                                $message = 'User ' . $user->name . ' is a member of LDAP group for Role ' . $role->ad_group;
                                                log_message('debug', $message);
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
                        $ad_users_groups = array_unique($ad_users_groups);
                        $user_ldap_groups = implode(' ', $ad_users_groups);
                        $ad_users_groups = array();
                        if ($ldap->type === 'openldap') {
                            foreach ($roles as $role) {
                                if (!empty($role->ad_group)) {
                                    $ldap->filter = "(&(cn={$role->ad_group})({$ldap->user_membership_attribute}={$user->uid}))";
                                    if ($result = @ldap_search($ldap_connection, $ldap->base_dn, $ldap->filter)) {
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
                                    $ldap->filter = "(&(cn={$org->ad_group})({$ldap->user_membership_attribute}={$user->uid}))";
                                    if ($result = ldap_search($ldap_connection, $ldap->base_dn, $ldap->filter)) {
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
                        if (!empty($user->roles) && ! empty($user->orgs)) {
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
                            if (empty($user->roles) && empty($user->orgs)) {
                                // The user exists in AD, but has no Open-AudIT roles or Organisations
                                $message = "User {$username} exists in LDAP ({$ldap->name}) and attempted to logon, but does not belong to any OA groups for Roles or Organisations.";
                                if ($ldap->type === 'active directory') {
                                    $message .= " Users AD groups are: {$user_ldap_groups}";
                                }
                                log_message('warning', $message);
                                // \Config\Services::session()->setFlashdata('warning',  $message);
                            } else if (empty($user->orgs)) {
                                // The user exists in AD, but has no Open-AudIT Organisations
                                $message = "User {$username} exists in LDAP ({$ldap->name}) and attempted to logon, but does not belong to any OA groups for Organisations.";
                                if ($ldap->type === 'active directory') {
                                    $message .= " Users AD groups are: {$user_ldap_groups}";
                                }
                                log_message('warning', $message);
                                // \Config\Services::session()->setFlashdata('warning',  $message);
                            } else if (empty($user->roles)) {
                                // The user exists in AD, but has no Open-AudIT roles
                                $message = "User {$username} exists in LDAP ({$ldap->name}) and attempted to logon, but does not belong to any OA groups for Roles.";
                                if ($ldap->type === 'active directory') {
                                    $message .= " Users AD groups are: {$user_ldap_groups}";
                                }
                                log_message('warning', $message);
                                // \Config\Services::session()->setFlashdata('warning',  $message);
                            }
                        }
                    } else {
                        // ERROR - could not connect to LDAP / AD server
                        $message = "LDAP connect failed for LDAP server at {$ldap->host}. Check your host, port and secure settings. Attempted to use {$ldap_connect_string}, " . (string)ldap_error($ldap_connection);
                        log_message('warning', $message);
                        // \Config\Services::session()->setFlashdata('warning',  $message);
                        continue;
                    }
                }
            }
        }

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
                $test_hash = hash('sha256', $salt.$password);
                // if the hashes are exactly the same, the password is valid
                if ($test_hash === $valid_hash) {
                    // A match - update the password to the new style
                    $sql = "UPDATE users SET `password` = ? WHERE id = ?";
                    $db->query($sql, [password_hash($password, PASSWORD_DEFAULT), $db_user->id]);
                    $message = 'ACCESS:users:update:' . $db_user->id . ':' . $db_user->full_name . ':{"password":"removed for logging"}';
                    log_message('info', $message);
                    $db_user->password = '';
                    return $db_user;
                }
            }
        }
        return false;
    }
}
