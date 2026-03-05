<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class ConfigurationModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'configuration' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('configuration');
    }

    /**
     * Read the collection from the database
     *
     * @param  object $resp An object containing the properties, filter, sort and limit as passed by the user
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
     * Return supplementary data for a single configuration's read view (stub)
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
     * Return supplementary data for the configuration create/edit form (stub)
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
     * Truncate the configuration table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'configuration' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
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
     * @param  int|null          $id   The ID of the configuration to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
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
            if ($data->value === '') {
                // User deleted license, reset the oae_prompt
                $sql = "UPDATE configuration SET value = '2000-01-01' WHERE name = 'oae_prompt'";
                $this->db->query($sql);
            }
            // These will be populated by the enterprise binary
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
                    if (!empty($instance->config->enterprise_env) and str_contains($command, 'enterprise.bin')) {
                        $command = 'export PAR_GLOBAL_TMPDIR=' . $instance->config->enterprise_env . '; ' . $command;
                    }
                    @exec($command, $output);
                }
            }
        }
        if (!empty($result[0]->name) and $result[0]->name === 'feature_vulnerabilities' and $data->value === 'n') {
            // Delete all vulnerabilities
            $sql = "DELETE FROM vulnerabilities";
            $this->db->query($sql);
            // And the cache
            $sql = "DELETE FROM vulnerabilities_cache";
            $this->db->query($sql);
            // Reset the request interval
            $sql = "UPDATE configuration SET VALUE = 60 WHERE name = 'feature_vulnerabilities_interval'";
            $this->db->query($sql);
            // And set the last request to default
            $sql = "UPDATE configuration SET VALUE = '2000-01-01' WHERE name = 'feature_vulnerabilities_last_request_datetime'";
            $this->db->query($sql);
        }

        return true;
    }

    /**
     * Build and return the data dictionary for the configuration collection
     *
     * Constructs a stdClass describing the `configuration` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('configuration')
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
