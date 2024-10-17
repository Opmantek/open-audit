<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class SummariesModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('summaries');
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
        $data = $this->createFieldData('summaries', $data);
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

    public function execute(int $id = 0): array
    {
        $instance = & get_instance();
        $limit_lower = 0;
        $limit_upper = 8888888888;
        $dashboard = $this->builder->getWhere(['id' => intval($id)])->getResult();

        if ($dashboard[0]->table == 'orgs') {
            $org_id = 'id';
        } else {
            $org_id = 'org_id';
        }
        $tables = ' field audit_log bios change_log credential disk dns edit_log file ip log memory module monitor motherboard netstat network nmap optical partition pagefile print_queue processor purchase route san scsi service server server_item share software software_key sound task user user_group variable video vm windows ';
        if (stripos($tables, $dashboard[0]->table) !== false) {
            $sql = "SELECT " . $dashboard[0]->id . " AS `id`, COUNT(*) AS `count`, " . $dashboard[0]->table . "." . $dashboard[0]->column . " AS `name` FROM devices LEFT JOIN `" . $dashboard[0]->table . "` ON (devices.id = " . $dashboard[0]->table . ".device_id and " . $dashboard[0]->table . ".current = 'y') WHERE " . $dashboard[0]->table . "." . $dashboard[0]->column . " IS NOT NULL AND " . $dashboard[0]->table . "." . $dashboard[0]->column . " != '' AND devices.org_id IN (" . $instance->user->org_list . ") GROUP BY " . $dashboard[0]->table . "." . $dashboard[0]->column;
        } else {
            $sql = "SELECT " . $dashboard[0]->id . " AS `id`, COUNT(*) AS `count`, " . $dashboard[0]->column . " AS `name` FROM `" . $dashboard[0]->table . "` WHERE `$org_id` IN (" . $instance->user->org_list . ") GROUP BY `" . $dashboard[0]->column . "`";
        }

        $result = $this->db->query($sql)->getResult();
        // log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
        $result = format_data($result, 'summaries');

        switch ($dashboard[0]->table) {
            case 'networks':
                $collection = 'networks';
                break;

            case 'orgs':
                $collection = 'orgs';
                break;

            case 'devices':
                $collection = 'devices';
                break;

            default:
                $collection = 'devices';
                break;
        }
        if (!empty($dashboard[0]->extra_columns)) {
            $properties = 'devices.id,devices.icon,devices.type,devices.name,devices.domain,devices.ip,devices.os_family,devices.status,' . $dashboard[0]->extra_columns;
        } else {
            $properties = 'devices.id,devices.icon,devices.type,devices.name,devices.domain,devices.ip,devices.os_family,devices.status';
        }
        $link = url_to($collection . 'Collection') . '?' . $dashboard[0]->table . '.' . $dashboard[0]->column . '=';
        for ($i = 0; $i < count($result); $i++) {
            $result[$i]->attributes->link = $link . urlencode($result[$i]->attributes->name) . '&properties=' . $properties;
        }
        if (!empty($set_count)) {
            if ($limit_upper == 8888888888) {
                $instance->resp->meta->filtered = count($result);
            }
            $instance->resp->meta->total = count($result);
        }
        if ($limit_upper != 8888888888) {
            $result = array_slice($result, $limit_lower, $limit_upper);
            if (!empty($set_count)) {
                $instance->resp->meta->filtered = count($result);
            }
        }
        if (empty($result)) {
            $result = array();
            $item = new \stdClass();
            $item->id = 0;
            $item->type = 'summaries';
            $item->attributes = new \stdClass();
            $item->attributes->id = 0;
            $item->attributes->count = 0;
            $item->attributes->name = '';
            $item->attributes->link = '';
            $result[] = $item;
            unset($item);
        }

        return ($result);
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
        $return = array();
        $return['menu_category'] = $attributesModel->listUser(['attributes.resource' => 'queries', 'attributes.type' => 'menu_category']);
        $tables = $this->db->listTables();
        foreach ($tables as $table) {
            $result = array();
            $item = new \stdClass();
            $item->id = $table;
            $item->type = 'tables';
            $item->attributes = new \stdClass();
            $item->attributes->id = $table;
            $item->attributes->name = $table;
            $item->attributes->value = $table;
            $return['tables'][] = $item;
            unset($item);
        }
        return $return;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedCollection(): array
    {
        $instance = & get_instance();
        $collections = clone $instance->collections;
        foreach ($collections as $name => $collection) {
            if ($name !== 'reports') {
                if (!$this->db->tableExists($name) or !$this->db->fieldExists('org_id', $name) and ($name !== 'orgs' and $name !== 'roles')) {
                    unset($collections->{$name});
                }
            }
        }
        foreach ($collections as $name => $collection) {
            if ($this->db->tableExists($name) and $this->db->fieldExists('org_id', $name)) {
                $collection->count = 0;
                $table = str_replace(' ', '_', strtolower($name));
                $orgs = array();
                if ($collection->orgs === 'd') {
                    $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
                }
                if ($collection->orgs === 'u') {
                    $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserAscendants($instance->user->orgs, $instance->orgs)));
                }
                if ($collection->orgs === 'b') {
                    $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
                    $orgs = array_unique(array_merge($orgs, $instance->orgsModel->getUserAscendants($instance->user->orgs, $instance->orgs)));
                }
                if (empty($orgs)) {
                    $orgs = $instance->user->orgs;
                }
                $sql = "SELECT COUNT(*) AS `count` FROM `$table` WHERE `org_id` IN (" . implode(',', $orgs) . ")";
                $count = intval($this->db->query($sql)->getResult()[0]->count);
                $collection->count = $count;
            }
        }
        if (empty($instance->config->feature_executables) or $instance->config->feature_executables !== 'y') {
            unset($collections->executables);
        }
        $collections->maps->count = 1;
        $collections->reports->count = 12;
        $sql = "SELECT COUNT(*) AS `count` FROM `orgs` WHERE `id` IN (" . implode(',', $orgs) . ")";
        $count = intval($this->db->query($sql)->getResult()[0]->count);
        $collections->orgs->count = $count;
        $sql = "SELECT COUNT(*) AS `count` FROM `roles`";
        $count = intval($this->db->query($sql)->getResult()[0]->count);
        $collections->roles->count = $count;
        unset($collections->baselines_policies);
        unset($collections->baselines_results);
        unset($collections->rack_devices);
        unset($collections->benchmarks_exceptions);

        $included = array();
        $included['collections'] = $collections;
        return $included;
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
        $attributesModel = new \App\Models\AttributesModel();
        $attributes = $attributesModel->listUser(['attributes.resource' => 'queries', 'attributes.type' => 'menu_category']);
        $included['menu_category'] = $attributes;
        foreach ($included['menu_category'] as $category) {
            if (empty($category->attributes->value)) {
                $category->attributes->name = '&nbsp;';
            }
        }
        $included['database'] = $this->db->listTables();
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
            $orgs = array_unique(array_merge($orgs, $instance->orgsModel->getUserAscendants($instance->user->orgs, $instance->orgs)));
            $orgs[] = 1;
            $orgs = array_unique($orgs);
        }

        $properties = array();
        $properties[] = 'summaries.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'summaries.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'summaries');
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
        $data = $this->updateFieldData('summaries', $data);
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
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

        $collection = 'summaries';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'table', 'column', 'menu_category', 'orgs.name');
        $dictionary->attributes->create = array('name', 'org_id', 'table', 'column', 'menu_category');
        $dictionary->attributes->fields = $this->db->getFieldNames($collection);
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection);
        $dictionary->attributes->update = $this->updateFields($collection);

        $dictionary->sentence = 'Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.';

        $dictionary->about = "<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it's quite easy to create a new one and load it into Open-AudIT for running.<br /><br />" . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br /><br />When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br /><br />If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br /><br /></p>';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->table = 'The specific database table.';
        $dictionary->columns->column = 'The specific database column from the specified database table.';
        $dictionary->columns->extra_columns = 'The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).';
        $dictionary->columns->menu_display = 'Should we expose this query in the list of reports under the Reports menu in the web interface.';
        $dictionary->columns->menu_category = 'Which sub-menu should we display this query in.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
