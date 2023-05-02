<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class BaselinesPoliciesModel extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('baselines_policies');
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
        return format_data($query->getResult(), 'baselines_policies');
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

        if (!empty($data->table) && $data->table === 'software') {
            $data->name = $data->tests->name->value . ' ' . $data->tests->version->operator . ' ' . $data->tests->version->value;
            $tests = array();
            $entry = new stdClass();
            $entry->column = 'name';
            $entry->operator = '=';
            $entry->value = $data->tests->name->value;
            $tests[] = $entry;

            $entry = new stdClass();
            $entry->column = 'version';
            $entry->operator = $data->tests->version->operator;
            $entry->value = $data->tests->version->value;
            $tests[] = $entry;

            $entry = new stdClass();
            $entry->column = 'version_padded';
            $entry->operator = $data->tests->version->operator;
            $entry->value = $this->versionPadded($data->tests->version->value);
            $tests[] = $entry;

            unset($data->tests);
            $data->tests = json_encode($tests);
        }

        if (!empty($data->table) && $data->table === 'netstat') {
            $data->name = $data->tests->program->value . ' on ' . $data->tests->port->value . ' using ' . $data->tests->protocol->value;
            $tests = array();
            $entry = new stdClass();
            $entry->column = 'protocol';
            $entry->operator = '=';
            $entry->value = $data->tests->protocol->value;
            $tests[] = $entry;

            $entry = new stdClass();
            $entry->column = 'program';
            $entry->operator = '=';
            $entry->value = $data->tests->program->value;
            $tests[] = $entry;

            $entry = new stdClass();
            $entry->column = 'port';
            $entry->operator = '=';
            $entry->value = $data->tests->port->value;
            $tests[] = $entry;

            unset($data->tests);
            $data->tests = json_encode($tests);
        }

        if (!empty($data->table) && $data->table === 'user') {
            $data->name = $data->tests->name->value;
            $tests = array();
            $entry = new stdClass();
            $entry->column = 'name';
            $entry->operator = '=';
            $entry->value = $data->tests->name->value;
            $tests[] = $entry;

            $entry = new stdClass();
            $entry->column = 'status';
            $entry->operator = '=';
            $entry->value = $data->tests->status->value;
            $tests[] = $entry;

            $entry = new stdClass();
            $entry->column = 'type';
            $entry->operator = '=';
            $entry->value = $data->tests->type->value;
            $tests[] = $entry;

            $entry = new stdClass();
            $entry->column = 'password_expires';
            $entry->operator = '=';
            $entry->value = $data->tests->password_expires->value;
            $tests[] = $entry;

            $entry = new stdClass();
            $entry->column = 'password_changeable';
            $entry->operator = '=';
            $entry->value = $data->tests->password_changeable->value;
            $tests[] = $entry;

            $entry = new stdClass();
            $entry->column = 'password_required';
            $entry->operator = '=';
            $entry->value = $data->tests->password_required->value;
            $tests[] = $entry;

            unset($data->tests);
            $data->tests = json_encode($tests);
        }
        $data = $this->createFieldData('baselines_policies', $data);
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
        return array();
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
        $properties[] = 'baselines_policies.*';
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'baselines_policies');
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
        return format_data($query->getResult(), 'baselines_policies');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('baselines_policies')) {
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
        // Accept our client data
        $data = $this->updateFieldData('baselines_policies', $data);
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    public function versionPadded(string $version = ''): string
    {
        if (empty($version)) {
            return '';
        }
        $version_padded = '';
        $pieces = array();
        $pieces = preg_split("/[\s,\+\-\_\.\\\+\~]+/", $version);
        foreach ($pieces as $piece) {
            $array = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $piece);
            foreach ($array as $item) {
                $p2 = preg_split('/([a-z]+)([0-9]+)/i', $item, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
                foreach ($p2 as $p) {
                    if (strlen($p) > 10) {
                        $version_padded .= $p;
                    } else {
                        $version_padded .= mb_substr("00000000000000000000".$p, -10);
                    }
                }
            }
        }
        return $version_padded;
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'baselines_policies';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'orgs.name', 'edited_by', 'edited_date');
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->about = '';

        $dictionary->notes = '';

        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->attributes->baseline_id = 'The associated baseline. Links to <code>baselines.id</code>.';
        $dictionary->columns->notes = 'Any additional notes you care to make.';
        $dictionary->columns->documentation = 'Any additional documentation you need.';
        $dictionary->columns->priority = 'The importance of this baseline (not used yet).';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
