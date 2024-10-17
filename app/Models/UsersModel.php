<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class UsersModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('users');
    }

    /**
     * Read the collection from the database
     *
     * @param  $resp object An object containing the properties, filter, sort and limit as passed by the user
     *
     * @return array        An array of formatted entries
     */
    public function collection(object $resp): array
    {
        $properties = $resp->meta->properties;
        $properties[] = "orgs.name as `orgs.name`";
        $properties[] = "orgs.id as `orgs.id`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->orderBy($resp->meta->sort);
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), $resp->meta->collection);
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null): ?int
    {
        if (empty($data)) {
            return null;
        }
        if (!is_string($data->roles)) {
            $data->roles = json_encode($data->roles);
        }
        if (!is_string($data->orgs)) {
            $data->orgs = json_encode($data->orgs);
        }
        $data->password = password_hash($data->password, PASSWORD_DEFAULT);
        $data = $this->createFieldData('users', $data);
        if (empty($data)) {
            return null;
        }
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return null;
        }
        return (intval($this->db->insertID()));
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return bool    true || false depending on success
     */
    public function delete($id = null, bool $purge = false): bool
    {
        $this->builder->delete(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        if ($this->db->affectedRows() !== 1) {
            return false;
        }
        return true;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $instance = & get_instance();
        $roles = $instance->rolesModel->listAll();
        return format_data($roles, 'roles');
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedCreateForm(int $id = 0): array
    {
        $rolesModel = new \App\Models\RolesModel();
        $included = array();
        $included['roles'] = $rolesModel->listUser();
        $dashboardsModel = new \App\Models\DashboardsModel();
        $included['dashboards'] = $dashboardsModel->listUser();
        return $included;
    }

    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        if (empty($orgs)) {
            $instance = & get_instance();
            $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
            $orgs[] = 1;
            $orgs = array_unique($orgs);
        }

        $properties = array();
        $properties[] = 'users.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'users.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'users');
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all entries
     */
    public function listAll(): array
    {
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query->getResult();
    }

    public function logon($username = '', $password = '', $domain = '')
    {
        $sql = '/* m_logon::logon */ ' . "SELECT * FROM users WHERE name = ? and password = ? and active = 'y'";
        $query = $this->db->query($sql, [$username, $password]);
        $result = $query->getResult();
        return $result;
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return array   The array containing the requested item
     */
    public function read(int $id = 0): array
    {
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'users');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('users')) {
            return true;
        }
        return false;
    }

    /**
     * Update an individual item in the database
     *
     * @param  object  $data The data attributes
     *
     * @return bool    true || false depending on success
     */
    public function update($id = null, $data = null): bool
    {
        // JSON encode our roles
        if (!empty($data->roles)) {
            $data->roles = json_encode($data->roles);
        }
        // JSON encode our orgs
        if (!empty($data->orgs)) {
            $data->orgs = json_encode(array_map('intval', $data->orgs));
        }
        if (!empty($data->password)) {
            $data->password = password_hash($data->password, PASSWORD_DEFAULT);
        }
        $data = $this->updateFieldData('users', $data);
        // And update the record
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    /**
     * [validate description]
     * @return [type] [description]
     */
    public function userValidate()
    {
        if (function_exists('get_instance')) {
            $instance = & get_instance();
        } else {
            $instance = new stdClass();
            $instance->config = config('Openaudit');
        }
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $uri = $request->getUri();
        $uri->setSilent();

        $temp = bin2hex(openssl_random_pseudo_bytes(30));
        $access_token[] = $temp;

        if (empty($session->get('user_id'))) {
            redirect('logon');
            return;
        } else {
            // user is logged in, return the $user object
            $user = false;
            $query = $this->builder->getWhere(['id' => intval($session->get('user_id'))]);
            $result = $query->getResult();
            if (!empty($result[0])) {
                $user = $result[0];
                try {
                    $user->roles = json_decode($user->roles, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                try {
                    $user->orgs = json_decode($user->orgs, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                $user->password = null;
            }



            // Map the user to roles to collections
            $userRoles = array();
            foreach ($user->roles as $userRole) {
                foreach ($instance->roles as $role) {
                    if ($userRole === $role->name) {
                        $permissions = json_decode($role->permissions);
                        foreach ($permissions as $key => $value) {
                            if (empty($userRoles[$key])) {
                                $userRoles[$key] = $value;
                            } else {
                                if (!empty($value) and (empty($userRoles[$key]) or strpos($userRoles[$key], $value) === false)) {
                                    $userRoles[$key] = $userRoles[$key] . $value;
                                }
                                if (empty($value)) {
                                    // Do not log as some collections will not have been populated for a given role
                                    // log_message('warning', $userRole . '::' . $role->name . '::' . $key . ' has an empty value. You may wish to reset Roles to their defaults.');
                                }
                            }
                        }
                    }
                }
            }
            $user->permissions = $userRoles;
            if (empty($user->permissions['baselines_policies'])) {
                $user->permissions['baselines_policies'] = (!empty($user->permissions['baselines'])) ? $user->permissions['baselines'] : '';
            }
            if (empty($user->permissions['baselines_results'])) {
                $user->permissions['baselines_results'] = (!empty($user->permissions['baselines'])) ? $user->permissions['baselines'] : '';
            }
            if (empty($user->permissions['components'])) {
                $user->permissions['components'] = (!empty($user->permissions['devices'])) ? $user->permissions['devices'] : '';
            }
            if (empty($user->permissions['discovery_log'])) {
                $user->permissions['discovery_log'] = (!empty($user->permissions['discoveries'])) ? $user->permissions['discoveries'] : '';
            }
            if (empty($user->permissions['integrations_log'])) {
                $user->permissions['integrations_log'] = (!empty($user->permissions['integrations'])) ? $user->permissions['integrations'] : '';
            }
            if (empty($user->permissions['integrations_rules'])) {
                $user->permissions['integrations_rules'] = (!empty($user->permissions['integrations'])) ? $user->permissions['integrations'] : '';
            }
            if (empty($user->permissions['rack_devices'])) {
                $user->permissions['rack_devices'] = (!empty($user->permissions['racks'])) ? $user->permissions['racks'] : '';
            }
            if (empty($user->permissions['search'])) {
                $user->permissions['search'] = (!empty($user->permissions['devices'])) ? $user->permissions['devices'] : '';
            }
            if (empty($user->permissions['maps'])) {
                $user->permissions['maps'] = 'r';
            }
            if (empty($user->permissions['support'])) {
                $user->permissions['support'] = 'r';
            }

            $access_token = '';
            if (!empty($session->get('access_token'))) {
                $access_token = $session->get('access_token');
            }
            if (is_string($access_token)) {
                $access_token = array($access_token);
            }

            if (!empty($user)) {
                $temp = bin2hex(openssl_random_pseudo_bytes(30));
                $user->access_token = $temp;
                $access_token[] = $temp;
                $access_token = array_slice($access_token, -intval($instance->config->access_token_count));
                $userdata = array('user_id' => $user->id, 'access_token' => $access_token);
                $session->set($userdata);
                return $user;
            } else {
                // the user_id stored in the session does not exist
                log_message('warning', 'userValidate Bad session data, user_id in session does not exist.');
                $instance = & get_instance();
                if ($instance->resp->meta->format === 'json') {
                    echo json_encode($instance->resp);
                    echo '{["error":"Bad session UserID."]}';
                    exit();
                } else {
                    if (strtoupper($instance->resp->meta->request_method) === 'GET') {
                        $session->set_userdata(['url' => current_url()]);
                    }
                    redirect('logon');
                    return;
                }
            }
        }
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'users';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'full_name', 'email', 'active', 'roles', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','lang','roles','orgs'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = "Open-AudIT Enterprise includes Users &amp; Roles, full role-based access control (RBAC) allowing fine-grained control over each user's experience.";

        $dictionary->about = '<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = 'If the following conditions are met:<br /><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br /><br />';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = 'The name given to this user (used to login). Ideally it should be unique.';
        $dictionary->columns->full_name = 'The actual full name of this user.';
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->password = 'A hashed password that enables logon when using application authentication.';
        $dictionary->columns->email = 'The users email address.';
        $dictionary->columns->lang = 'The language to translate the web interface into for the user.';
        $dictionary->columns->toolbar_style = 'Icon only, text only or icon and text.';
        $dictionary->columns->list_table_format = 'Set the size (normal or compact) of the tables on the List screens.';
        $dictionary->columns->roles = 'A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.';
        $dictionary->columns->orgs = 'A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.';
        $dictionary->columns->dashboard_id = 'The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.';
        $dictionary->columns->active = "Is this account active? If set to 'n', the user cannot logon.";
        $dictionary->columns->ldap = 'The LDAP OU of this user (if LDAP is used).';
        $dictionary->columns->type = "Can be 'user' or 'collector'.";
        $dictionary->columns->devices_default_display_columns = 'If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.';
        $dictionary->columns->access_token = 'Internal JSON array of valid access tokens for this user.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
