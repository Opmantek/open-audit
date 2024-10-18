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
        $properties[] = 'baselines.id AS `basleines.id`';
        $properties[] = 'baselines.name AS `baselines.name`';
        $properties[] = 'orgs.id AS `orgs.id`';
        $properties[] = 'orgs.name AS `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        $this->builder->join('baselines', $resp->meta->collection . '.baseline_id = baselines.id', 'left');
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
        $result = $query->getResult();
        for ($i = 0; $i < count($result); $i++) {
            if (!empty($result[$i]->table) and $result[$i]->table === 'software') {
                try {
                    $tests = json_decode($result[$i]->tests, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                if (!empty($tests)) {
                    foreach ($tests as $test) {
                        if ($test->column === 'name') {
                            $result[$i]->detail_name = $test->value;
                        }
                        if ($test->column === 'version') {
                            $result[$i]->detail = $test->value;
                        }
                    }
                }
            }
            if (!empty($result[$i]->table) and $result[$i]->table === 'netstat') {
                try {
                    $tests = json_decode($result[$i]->tests, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                if (!empty($tests)) {
                    foreach ($tests as $test) {
                        if ($test->column === 'program') {
                            $result[$i]->detail_name = $test->value;
                        }
                        if ($test->column === 'port') {
                            $result[$i]->detail = $test->value;
                        }
                    }
                }
            }
            if (!empty($result[$i]->table) and $result[$i]->table === 'user') {
                try {
                    $tests = json_decode($result[$i]->tests, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                if (!empty($tests)) {
                    foreach ($tests as $test) {
                        if ($test->column === 'name') {
                            $result[$i]->detail_name = $test->value;
                        }
                        if ($test->column === 'status') {
                            $result[$i]->detail = $test->value;
                        }
                    }
                }
            }
        }
        return format_data($result, 'baselines_policies');
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
        if (empty($data->baseline_id)) {
            return null;
        }

        $sql = "SELECT org_id FROM baselines WHERE id = ?";
        $org_id = $this->db->query($sql, [$data->baseline_id])->getResult();
        if (empty($org_id)) {
            return null;
        }
        $data->org_id = intval($org_id[0]->org_id);

        if (empty($data->type or $data->type === 'single')) {
            log_message('ingo', 'Creating a siongle policy based on ' . $data->table);
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
        }

        if (!empty($data->type) and $data->type === 'device') {
            log_message('info', 'Creating policies from device based on ' . $data->table);
            if ($data->table === 'software') {
                $columns = array('name', 'version', 'version_padded');
                $sql = "SELECT name, version, version_padded FROM software WHERE software.device_id = ? and current = 'y' and name != 'kernel' and name != 'kernel-devel' GROUP BY name, version, version_padded";
            } elseif ($data->table === 'netstat') {
                $columns = array('protocol', 'program', 'port');
                $sql = "SELECT protocol, program, port, CONCAT(`program`, ' on ', `port`, ' using ', `protocol`) AS `name` FROM netstat WHERE netstat.device_id = ? and current = 'y' GROUP BY protocol, program, port";
            } elseif ($data->table === 'user') {
                $columns = array('name', 'status', 'type', 'password_expires', 'password_changeable', 'password_required');
                $sql = "SELECT name, status, type, password_expires, password_changeable, password_required FROM user WHERE user.device_id = ? and current = 'y' GROUP BY name, status, type, password_expires, password_changeable, password_required";
            }
            $result = $this->db->query($sql, [$data->device_id])->getResult();
            $policies = array();
            foreach ($result as $row) {
                $policy = new stdClass();
                $policy->org_id = $data->org_id;
                $policy->baseline_id = $data->baseline_id;
                $policy->name = $row->name;
                $policy->priority = 5;
                $policy->notes = '';
                $policy->documentation = '';
                $policy->table = $data->table;
                $policy->tests = array();
                foreach ($columns as $column) {
                    $operator = $data->operator;
                    if ($data->table === "software" and $column === "name") {
                        # hard set the operator for this case
                        $operator = "=";
                    }
                    if ($data->table === "software" and $column === "version") {
                        $policy->name .= ' ' . $operator . ' ' . $row->version;
                    }
                    $policy->tests[] = array('column' => $column, 'operator' => $operator, 'value' => $row->{$column});
                }
                $policy->tests = json_encode($policy->tests);
                $policies[] = $policy;
                log_message('debug', 'Policy: ' . json_encode($policy));
            }
            foreach ($policies as $policy) {
                $data = $this->createFieldData('baselines_policies', $policy);
                $this->builder->insert($data);
            }
        }
        if ($error = $this->sqlError($this->db->error())) {
            log_message('error', json_encode($error));
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
        $included = array();
        $instance = & get_instance();
        if (!empty($instance->resp->meta->filter)) {
            foreach ($instance->resp->meta->filter as $item) {
                if ($item->name === 'baselines.id') {
                    $id = intval($item->value);
                }
            }
        }
        $baselinesModel = new \App\Models\BaselinesModel();
        $included['baseline'] = $baselinesModel->read($id);
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
        $properties[] = 'baselines_policies.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'baselines_policies.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
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
        $properties = array();
        $properties[] = 'baselines_policies.*';
        $properties[] = 'baselines.id AS `basleines.id`';
        $properties[] = 'baselines.name AS `baselines.name`';
        $properties[] = 'orgs.id AS `orgs.id`';
        $properties[] = 'orgs.name AS `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'baselines_policies.org_id = orgs.id', 'left');
        $this->builder->join('baselines', 'baselines_policies.baseline_id = baselines.id', 'left');
        $query = $this->builder->getWhere(['baselines_policies.id' => intval($id)]);
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

        if (!empty($data->tests)) {
            $existing_policy = $this->read(intval($id))[0]->attributes;
            $existing_tests = $existing_policy->tests;

            if ($existing_policy->table === 'netstat') {
                $attributes = array('protocol', 'program', 'port');
                foreach ($attributes as $attribute) {
                    if (isset($data->tests->{$attribute})) {
                        for ($i = 0; $i < count($existing_tests); $i++) {
                            if ($existing_tests[$i]->column === $attribute) {
                                $existing_tests[$i]->value = $data->tests->{$attribute};
                            }
                        }
                    }
                }
            }

            if ($existing_policy->table === 'software') {
                if (isset($data->tests->name)) {
                    for ($i = 0; $i < count($existing_tests); $i++) {
                        if ($existing_tests[$i]->column === 'name') {
                            $existing_tests[$i]->value = $data->tests->name;
                        }
                    }
                }
                if (isset($data->tests->operator)) {
                    for ($i = 0; $i < count($existing_tests); $i++) {
                        if ($existing_tests[$i]->column === 'version') {
                            $existing_tests[$i]->operator = $data->tests->operator;
                        }
                    }
                    for ($i = 0; $i < count($existing_tests); $i++) {
                        if ($existing_tests[$i]->column === 'version_padded') {
                            $existing_tests[$i]->operator = $data->tests->operator;
                        }
                    }
                }
                if (isset($data->tests->version)) {
                    for ($i = 0; $i < count($existing_tests); $i++) {
                        if ($existing_tests[$i]->column === 'version') {
                            $existing_tests[$i]->value = $data->tests->version;
                        }
                    }
                    for ($i = 0; $i < count($existing_tests); $i++) {
                        if ($existing_tests[$i]->column === 'version_padded') {
                            $existing_tests[$i]->value = $this->versionPadded($data->tests->version);
                        }
                    }
                }
            }

            if ($existing_policy->table === 'user') {
                $attributes = array('name', 'status', 'type', 'password_expires', 'password_changeable', 'password_required');
                foreach ($attributes as $attribute) {
                    if (isset($data->tests->{$attribute})) {
                        for ($i = 0; $i < count($existing_tests); $i++) {
                            if ($existing_tests[$i]->column === $attribute) {
                                $existing_tests[$i]->value = $data->tests->{$attribute};
                            }
                        }
                    }
                }
            }
            $data->tests = json_encode($existing_tests);
        }


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
                        $version_padded .= mb_substr("00000000000000000000" . $p, -10);
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
        $dictionary->attributes->collection = array('id', 'table', 'name', 'baselines.name', 'detail_name', 'detail', 'edited_by', 'edited_date');
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = '';

        $dictionary->about = '';

        $dictionary->notes = '';

        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->baseline_id = 'The associated baseline. Links to <code>baselines.id</code>.';
        $dictionary->columns->notes = 'Any additional notes you care to make.';
        $dictionary->columns->table = 'At present we can use netstat_ports, software and users.';
        $dictionary->columns->tests = 'A JSON representation of the tests that make up this policy.';
        $dictionary->columns->documentation = 'Any additional documentation you need.';
        $dictionary->columns->priority = 'The importance of this baseline (not used yet).';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
