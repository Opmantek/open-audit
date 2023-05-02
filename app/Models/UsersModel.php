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
        # NOTE - need to add the false arguement to the below so we don't escape the `orgs.name` as `orgs`.`name` above
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'users.org_id = orgs.id', 'left');
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<'])) {
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
        return format_data($query->getResult(), 'users');
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null)
    {
        if (empty($data)) {
            return false;
        }
        $data = $this->createFieldData('users', $data);
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return false;
        }
        return ($this->db->insertID());
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
        return array();
    }

    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function listUser($where = array()): array
    {
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list[] = 1;
        $org_list = array_unique($org_list);

        $properties = array();
        $properties[] = 'users.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'users.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $org_list);
        if (!empty($where[0]) and !empty($where[1])) {
            $this->builder->where($where[0], $where[1]);
        }
        if (!empty($where[2]) and !empty($where[3])) {
            $this->builder->where($where[2], $where[3]);
        }
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
        $db = db_connect();
        $sql = '/* m_logon::logon */ ' . "SELECT * FROM users WHERE name = ? and password = ? and active = 'y'";
        $query = $db->query($sql, [$username, $password]);
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
        $instance = & get_instance();
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
                $user->roles = json_decode($user->roles);
                $user->orgs = json_decode($user->orgs);
                $user->password = null;
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
                $access_token[] = $temp;
                $access_token = array_slice($access_token, -intval(config('Openaudit')->access_token_count));
                $user->access_token = $access_token;
                $userdata = array('user_id' => $user->id, 'access_token' => $access_token);
                $session->set($userdata);
                return $user;
            } else {
                // the user_id stored in the session does not exist
                stdlog('ERR-0015', 'm_users:validate Bad session data');
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
        $dictionary = new \stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new \stdClass();

        $dictionary->attributes = new \stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'full_name', 'email', 'active', 'roles', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->about = '<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->full_name = 'The actual full name of this user.';
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->dashboard_id = 'The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.';
        $dictionary->columns->password = 'A hashed password that enables logon when using application authentication.';
        $dictionary->columns->full_name = 'The complete first name, last name fo this user.';
        $dictionary->columns->email = 'The users email address.';
        $dictionary->columns->lang = 'The language to translate the web interface into for the user.';
        $dictionary->columns->active = "Is this account active? If set to 'n', the user cannot logon.";
        $dictionary->columns->roles = 'A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.';
        $dictionary->columns->orgs = 'A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>.';
        $dictionary->columns->ldap = 'The LDAP OU of this user (if LDAP is used).';
        $dictionary->columns->type = "Can be 'user' or 'collector'.";
        $dictionary->columns->devices_default_display_columns = 'If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.';
        $dictionary->columns->access_token = 'Internal JSON array of valid access tokens for this user.';
        $dictionary->columns->toolbar_style = 'Icon only, text only or icon and text.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
