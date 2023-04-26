<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class AttributesModel extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('attributes');
        # Use the below to execute BaseModel::__construct
        # parent::__construct();
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
        $this->builder->join('orgs', 'attributes.org_id = orgs.id', 'left');
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
        return format_data($query->getResult(), 'attributes');
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
        if (!in_array($data->resource, ['devices', 'locations', 'orgs', 'queries'])) {
            \Config\Services::session()->setFlashdata('error', 'Invalid attribute value. Should be one of: devices, locations, orgs or queries.');
            stdlog(((object) array('code' => 'ERR-0021', 'detail' => 'Invalid attribute value. Should be one of: devices, locations, orgs or queries.')));
            return false;
        }
        if (!in_array($data->type, ['class', 'environment', 'status', 'type', 'menu_category'])) {
            \Config\Services::session()->setFlashdata('error', 'Invalid attribute type. Should be one of: class, environment, status, type or menu_category. Type is set to: ' . $data->type);
            stdlog(((object) array('code' => 'ERR-0021', 'detail' => 'Invalid attribute type. Should be one of: class, environment, status, type or menu_category.')));
            return false;
        }
        $data = $this->createFieldData('attributes', $data);
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
        $properties[] = 'attributes.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'attributes.org_id = orgs.id', 'left');
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
        return format_data($query->getResult(), 'attributes');
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
        return format_data($query->getResult(), 'attributes');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('attributes')) {
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
        // Some minor data cleansing, 'attributes' specific

        if (isset($data->resource) and !in_array($data->resource, ['devices', 'locations', 'orgs', 'queries'])) {
            $error = new \stdClass();
            $error->level = 'error';
            $error->message = 'Invalid attribute value. Should be one of: devices, locations, orgs or queries.';
            $GLOBALS['stash'] = $error;
            log_message('error', $error->message);
            return false;
        }
        if (isset($data->type) and !in_array($data->type, ['class', 'environment', 'status', 'type', 'menu_category'])) {
            $error = new \stdClass();
            $error->level = 'error';
            $error->message = 'Invalid attribute type. Should be one of: class, environment, status, type or menu_category.';
            $GLOBALS['stash'] = $error;
            log_message('error', $error->message);
            return false;
        }
        // Accept our client data
        $data = $this->updateFieldData('attributes', $data);
        # $data->blah = 123; # Our bad record for testing failing
        // And update the record
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    /**
     * The dictionary item for attributes
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'attributes';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'resource', 'type', 'name', 'value', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','type','resource','value'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->about = '<p>Attributes are stored for Open-AudIT to use for particular fields.</p>';

        $dictionary->notes = '<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br /><em>Linux</em>: /usr/local/open-audit/www/open-audit/device_images<br /><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br /><br />If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br /><em>Linux</em>: /usr/local/open-audit/www/open-audit/images/map_icons<br /><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a \'device\', valid <i>types</i> are: \'class\', \'environment\', \'status\' and \'type\'. If the <i>resource</i> is \'locations\' or \'orgs\' the only valid <i>type</i> is \'type\'. If the <i>resource</i> is a \'query\' the only valid <i>type</i> is \'menu_category\'.</p>';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->resource = 'The foreign table to reference. Should be one of: devices, locations, orgs or queries.';
        $dictionary->columns->type = 'The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.';
        $dictionary->columns->name = 'The text that is displayed.';
        $dictionary->columns->value = 'The value that is stored for this particular item.';
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
