<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
declare(strict_types=1);

namespace App\Models;

use stdClass;

class QueriesModel extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('queries');
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
        $this->builder->join('orgs', 'queries.org_id = orgs.id', 'left');
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
        return format_data($query->getResult(), 'queries');
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null): int|false
    {
        if (empty($data)) {
            return false;
        }
        if (! empty($data->sql)) {
            if (stripos($data->sql, 'update ') !== false or stripos($data->sql, 'update`') !== false) {
                $error['message'] = 'SQL cannot contain UPDATE clause';
                \Config\Services::session()->setFlashdata('error', json_encode($error));
                log_message('error', 'SQL cannot contain UPDATE clause');
                return false;
            }
            if (stripos($data->sql, 'delete from ') !== false or stripos($data->sql, 'delete from`') !== false) {
                $error['message'] = 'SQL cannot contain DELETE clause';
                \Config\Services::session()->setFlashdata('error', json_encode($error));
                log_message('error', 'SQL cannot contain DELETE clause');
                return false;
            }
            if (stripos($data->sql, 'insert into ') !== false or stripos($data->sql, 'insert into`') !== false) {
                $error['message'] = 'SQL cannot contain INSERT clause';
                \Config\Services::session()->setFlashdata('error', json_encode($error));
                log_message('error', 'SQL cannot contain INSERT clause');
                return false;
            }
            if (stripos($data->sql, 'where @filter') === false or stripos($data->sql, 'where @filter or') !== false) {
                $error['message'] = 'SQL must contain @filter clause';
                \Config\Services::session()->setFlashdata('error', json_encode($error));
                log_message('error', 'SQL must contain @filter clause');
                return false;
            }
        }
        $data = $this->createFieldData('queries', $data);
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
     * Run the SQL definition and return the provided properties or the system.id list
     * @param  integer $id The ID of the group
     * @return array       An array of standard formatted devices, or an empty array
     */
    public function execute(int $id = 0, object $user = null): array
    {
        $instance = & get_instance();
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $query = $query->getResult()[0];
        $sql = trim($query->sql);
        if (strpos($sql, ';') === strlen($sql)-1) {
            $sql = substr($sql, 0, strlen($sql)-1);
            $sql = trim($sql);
        }
        if (stripos($sql, "SELECT devices") !== false and stripos($sql, "SELECT devices") === 0) {
            $filter = "devices.org_id IN ({$user->org_list})";
            $type = 'devices';
        } else {
            $words = explode(' ', $sql);
            $tables = explode('.', $words[1]);
            $filter = $tables[0] . ".org_id IN ({$user->org_list})";
            $type = $tables[0];
        }
        $sql = str_ireplace('WHERE @filter', "WHERE {$filter}", $sql);
        $sql .= ' ' . $instance->resp->meta->internal->limit;
        $query = $this->db->query($sql);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = format_data($query->getResult(), $type);
        return $result;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $attributesModel = new \App\Models\AttributesModel();
        $menu_category = $attributesModel->listUser(['attributes.type', 'menu_category']);
        $return['menu_category'] = $menu_category;
        return $return;
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

    public function listUser($where = array()): array
    {
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = array_unique(array_merge($org_list, $instance->orgsModel->getUserAscendants($instance->user->orgs, $instance->orgs)));
        $org_list[] = 1;
        $org_list = array_unique($org_list);

        $properties = array();
        $properties[] = 'queries.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'queries.org_id = orgs.id', 'left');
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
        return format_data($query->getResult(), 'queries');
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
        return format_data($query->getResult(), 'queries');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('queries')) {
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
        if (! empty($data->sql)) {
            if (stripos($data->sql, 'update ') !== false or stripos($data->sql, 'update`') !== false) {
                $error = new \stdClass();
                $error->level = 'error';
                $error->message = 'SQL cannot contain UPDATE clause';
                $GLOBALS['stash'] = $error;
                log_message('error', $error->message);
                return false;
            }
            if (stripos($data->sql, 'delete from ') !== false or stripos($data->sql, 'delete from`') !== false) {
                $error = new \stdClass();
                $error->level = 'error';
                $error->message = 'SQL cannot contain DELETE clause';
                $GLOBALS['stash'] = $error;
                log_message('error', $error->message);
                return false;
            }
            if (stripos($data->sql, 'insert into ') !== false or stripos($data->sql, 'insert into`') !== false) {
                $error = new \stdClass();
                $error->level = 'error';
                $error->message = 'SQL cannot contain +INSERT clause';
                $GLOBALS['stash'] = $error;
                log_message('error', $error->message);
                return false;
            }
            if (stripos($data->sql, 'where @filter') === false) {
                $error = new \stdClass();
                $error->level = 'error';
                $error->message = 'SQL must contain where @filter clause';
                $GLOBALS['stash'] = $error;
                log_message('error', $error->message);
                return false;
            }
            if (stripos($data->sql, 'where @filter or') !== false) {
                $error = new \stdClass();
                $error->level = 'error';
                $error->message = 'SQL must not contain where @filter OR';
                $GLOBALS['stash'] = $error;
                log_message('error', $error->message);
                return false;
            }
        }
        $data = $this->updateFieldData('queries', $data);
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

        $collection = 'queries';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'orgs.name');
        $dictionary->attributes->create = array('name','sql'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->about = '<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it\'s quite easy to create a new one and load it into Open-AudIT for running.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';
        $dictionary->notes = '<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT system.id AS `system.id`, system.name AS `system.name` ...</code>.<br /><br />The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br /><br />An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br /><code>SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, <br />system.name AS `system.name`, system.os_name AS `system.os_name` FROM<br /> system WHERE @filter AND system.os_group = "Linux"</code><br /><br /></p>';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->sql = 'Your SQL to select attributes that will populate this query.';
        $dictionary->columns->link = 'unused';
        $dictionary->columns->menu_display = 'Should we expose this query in the list of reports under the "Report" menu in the web interface.';
        $dictionary->columns->menu_category = 'Which sub-menu should we display this query in.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
