<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class AuthModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'auth' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('auth');
        # Use the below to execute BaseModel::__construct
        # parent::__construct();
    }

    /**
     * Read the collection from the database
     *
     * @param  object $resp An object containing the properties, filter, sort and limit as passed by the user
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
     * @param  object|array|null $data The data attributes
     *
     * @return int|null              The integer ID of the newly created item, or null on failure
     */
    public function create($data = null): ?int
    {
        helper('security');
        if (empty($data)) {
            return null;
        }
        $data = $this->createFieldData('auth', $data);
        if (empty($data)) {
            return null;
        }
        if (!empty($data->ldap_dn_password)) {
            $data->ldap_dn_password = simpleEncrypt($data->ldap_dn_password, config('Encryption')->key);
        }
        if (!empty($data->client_secret)) {
            $data->client_secret = simpleEncrypt($data->client_secret, config('Encryption')->key);
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
     * @param  int|null $id    The ID of the auth to delete
     * @param  bool     $purge Unused; present for interface compatibility
     *
     * @return bool            true on success, false on failure
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
     * Return supplementary data for a single auth's read view (stub)
     *
     * Reserved for future implementation. Currently returns an empty array;
     * no data is fetched from the database.
     *
     * @param  int   $id Unused; present for interface compatibility
     *
     * @return array     An empty array
     */
    public function includedRead(int $id = 0): array
    {
        return array();
    }

    /**
     * Return supplementary data for the auth create/edit form (stub)
     *
     * Reserved for future implementation. Currently returns an empty array;
     * no data is fetched from the database.
     *
     * @param  int   $id Unused; present for interface compatibility
     *
     * @return array     An empty array
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
    }


    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * Resolves the full set of org IDs visible to the current user (including
     * both ancestors and descendants) and filters the result accordingly.
     *
     * @param  array $where Additional WHERE conditions to apply to the query
     * @param  array $orgs  List of org IDs to restrict results to; if empty,
     *                      the current user's accessible orgs are used
     *
     * @return array        An array of formatted auth entries
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
        $properties[] = 'auth.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'auth.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $this->builder->orderBy('auth.name', 'ASC');
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'auth');
    }

    /**
     * Read every auth from the database with no org-based filtering
     *
     * Returns all rows from the `auth` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every auth row
     */
    public function listAll(): array
    {
        helper('security');
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $query->getResult();
        $count = count($result);
        for ($i = 0; $i < $count; $i++) {
            $decrypted = '';
            if (!empty($result[$i]->ldap_dn_password)) {
                $decrypted = simpleDecrypt($result[$i]->ldap_dn_password, config('Encryption')->key);
            }
            if (!empty($decrypted)) {
                $result[$i]->ldap_dn_password = $decrypted;
            }
            $decrypted = '';
            if (!empty($result[$i]->client_secret)) {
                $decrypted = simpleDecrypt($result[$i]->client_secret, config('Encryption')->key);
            }
            if (!empty($decrypted)) {
                $result[$i]->client_secret = $decrypted;
            }
        }
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
        return format_data($query->getResult(), 'auth');
    }

    /**
     * Truncate the auth table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'auth' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('auth')) {
            return true;
        }
        return false;
    }

    /**
     * Update an individual item in the database
     *
     * @param  int|null          $id   The ID of the auth to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        $data = $this->updateFieldData('auth', $data);
        if (!empty($data->ldap_dn_password)) {
            $data->ldap_dn_password = simpleEncrypt($data->ldap_dn_password, config('Encryption')->key);
        }
        if (!empty($data->client_secret)) {
            $data->client_secret = simpleEncrypt($data->client_secret, config('Encryption')->key);
        }
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    /**
     * Build and return the data dictionary for the auth collection
     *
     * Constructs a stdClass describing the `auth` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('auth')
     *  - columns     : per-column human-readable descriptions and allowed values
     *  - attributes  : lists of fields used for collection display, create, and update
     *  - sentence    : a one-line summary of the resource
     *  - about       : an HTML paragraph describing the resource
     *  - notes       : additional free-text notes (may be empty)
     *  - link        : URL to external documentation
     *  - product     : minimum product tier required ('community')
     *
     * @return object  Populated stdClass dictionary object
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $uri = new \CodeIgniter\HTTP\URI(url_to('helpFAQ'));
        $helpFAQ = $uri->getPath();
        $uri = new \CodeIgniter\HTTP\URI(url_to('authHelp'));
        $authHelp = $uri->getPath();

        $collection = 'auth';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'type', 'description', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','type','use_authentication','use_authorisation');
        $dictionary->attributes->fields = $this->db->getFieldNames($collection);
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection);
        $dictionary->attributes->update = $this->updateFields($collection);

        $dictionary->sentence = '';

        $dictionary->about = '<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>';

        $dictionary->notes = '<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="' . $authHelp . '">General Auth Help</a><br> <br>
        <a href="' . $helpFAQ . '?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="' . $helpFAQ . '?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="' . $helpFAQ . '?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="' . $helpFAQ . '?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->use_authentication = 'Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.';
        $dictionary->columns->use_authorisation = 'Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.';
        $dictionary->columns->lang = 'The default language assigned to any user created by this method.';
        $dictionary->columns->host = 'The ip address of the Auth method.';
        $dictionary->columns->port = 'Default of 389. Normally 636 used for Active Directory LDAPS.';
        $dictionary->columns->secure = 'Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.';
        $dictionary->columns->domain = 'The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.';
        $dictionary->columns->type = 'One of either <code>active directory</code> or <code>openldap</code>.';
        $dictionary->columns->version = 'Default of <code>3</code> for LDAP and Active Directory.';
        $dictionary->columns->ldap_base_dn = 'The base path from which to search for Users.';
        $dictionary->columns->ldap_dn_account = 'If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.';
        $dictionary->columns->ldap_dn_password = 'The password for the dn_account attribute.';
        $dictionary->columns->openldap_user_dn = 'Used by OpenLDAP only.';
        $dictionary->columns->openldap_user_membership_attribute = 'Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.';
        $dictionary->columns->client_ident = 'Commonly referred to as the clientId.';
        $dictionary->columns->client_secret = 'Commonly referred to as the clientSecret.';
        $dictionary->columns->redirect_uri = 'This will auto-populate.';
        $dictionary->columns->issuer = 'Specific to OKTA.';
        $dictionary->columns->tenant = 'Specific to Azure.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
