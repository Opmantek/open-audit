<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class ConfigurationModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('configuration');
    }

    /**
     * Read the collection from the database
     *
     * @param  $resp object An object containing the properties, filter, sort and limit as passed by the user
     * @return array        An array of formatted Orgs
     */
    public function collection(object $resp): array
    {
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
        return format_data($query->getResult(), 'configuration');
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
     * Read the entire collection from the database
     *
     * @return array  An array of all Orgs
     */
    public function listAll()
    {
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query->getResult();
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all Orgs
     */
    public function listUser($where = array(), $orgs = array()): array
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
     * @param int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read(int $id = 0): array
    {
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'configuration');
    }

    /**
     * Read an individual item from the database, by name
     *
     * @param int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function readName(string $name = ''): array
    {
        $query = $this->builder->getWhere(['name' => $name]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'configuration');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('configuration')) {
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
        $data = $this->updateFieldData('configuration', $data);
        // And update the record
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        $sql = "SELECT * FROM configuration WHERE id = ?";
        $result = $this->db->query($sql, [$id])->getResult();
        if (!empty($result[0]->name) and $result[0]->name === 'license_string') {
            $instance = & get_instance();
            // $sql = "UPDATE configuration SET value = '' WHERE name IN ('license', 'license_limit', 'license_eula', 'license_footer')";
            $sql = "UPDATE configuration SET value = '' WHERE name IN ('license', 'license_limit', 'license_footer')";
            $this->db->query($sql);
            if (!empty($result[0]->value)) {
                $newsModel = model('App\Models\NewsModel');
                $newsModel->executeAll('add_license');
            }
            // NOTE - We call the enterprise binary here to update the config items related to the license
            //        This way, when the page redirects, it has an updated product / product_name already in the DB
            //        and it shows straight away, without an additional page refresh.
            if (!empty($instance->config->enterprise_binary)) {
                if (php_uname('s') === 'Windows NT') {
                    $command = "%comspec% /c start /b " . $instance->config->enterprise_binary . ' --license';
                    $cwd = getcwd();
                    chdir('C:\\xampp\\open-audit\\other');
                    @exec($command, $output);
                    pclose(popen($command, 'r'));
                    chdir($cwd);
                } else {
                    $command = $instance->config->enterprise_binary . ' --license';
                    if (!empty($instance->config->enterprise_env) and strpos($command, 'enterprise.bin') !== false) {
                        $command = 'export PAR_GLOBAL_TMPDIR=' . $instance->config->enterprise_env . '; ' . $command;
                    }
                    @exec($command, $output);
                }
            }
        }
        return true;
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'configuration';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'value', 'description');
        $dictionary->attributes->create = array('name','org_id','type','resource','value'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = '';

        $dictionary->about = '';

        $dictionary->notes = '';

        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->value = 'The value assigned to the item.';
        $dictionary->columns->type = 'int, text, bool (y/n), etc';
        $dictionary->columns->editable = 'Can the user edit this item.';
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
