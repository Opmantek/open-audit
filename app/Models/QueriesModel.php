<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class QueriesModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'queries' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('queries');
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
        if (empty($data)) {
            return null;
        }
        if (!empty($data->sql) and (empty($data->advanced) or $data->advanced === 'n')) {
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

        if (empty($data->sql) and !empty($_POST['select'])) {
            # Build the query
            $columns = array();
            $tables = array();
            if (!empty($_POST['select'])) {
                foreach ($_POST['select'] as $column) {
                    if (preg_match('/^[a-z_.]+$/', $column)) {
                        $columns[] = $column;
                    }
                }
                for ($i = 0; $i < count($columns); $i++) {
                    $tables[] = explode('.', $columns[$i])[0];
                    $columns[$i] = $columns[$i] . ' AS `' . $columns[$i] . '`';
                }
                $sql = 'SELECT ' . implode(', ', $columns) . ' FROM devices ';
                $tables = array_unique($tables);
                foreach ($tables as $table) {
                    if ($table !== 'devices') {
                        $sql .= " LEFT JOIN $table ON ($table.device_id = devices.id AND $table.current = 'y')";
                    }
                }
                $sql .= ' WHERE @filter';
                $allowed_operators = array('=', '!=', 'LIKE', 'NOT LIKE', '>', '=>', '<', '=<', 'IN', 'NOT IN');
                if (!empty($_POST['where'])) {
                    foreach ($_POST['where'] as $where) {
                        if (!empty($where['field'])) {
                            if (preg_match('/^[a-z_.]+$/', $where['field'])) {
                                if (in_array($where['operator'], $allowed_operators)) {
                                    $sql .= ' AND ' . $where['field'] . ' ' . $where['operator'] . ' ' . $this->db->escape($where['value']);
                                }
                            }
                        }
                    }
                }
                if (!empty($_POST['group_by'])) {
                    if (preg_match('/^[a-z_.]+$/', $_POST['group_by'])) {
                        $sql .= ' GROUP BY ' . $_POST['group_by'];
                    }
                }
                if (!empty($_POST['order_by'])) {
                    if (preg_match('/^[a-z_.]+$/', $_POST['order_by'])) {
                        $sql .= ' ORDER BY ' . $_POST['order_by'];
                    }
                }
            }
            $data->sql = $sql;
        }

        if (!empty($data->sql)) {
            $data = $this->createFieldData('queries', $data);
            $this->builder->insert($data);
        }

        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return null;
        }
        return (intval($this->db->insertID()));
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int|null $id    The ID of the query to delete
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
     * Run the SQL definition and return resultset
     * @param  integer $id The ID of the group
     * @return array       An array of standard formatted devices, or an empty array
     */
    public function execute(int $id = 0, ?object $user = null): array
    {
        $instance = & get_instance();
        if (!empty($user->org_list) and is_array($user->org_list)) {
            $user->org_list = implode(',', $user->org_list);
        }
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $temp = $query->getResult();
        if (empty($temp[0])) {
            return array();
        }
        $query = $temp[0];
        $sql = trim((string)$query->sql);
        if (strpos($sql, ';') === strlen($sql) - 1) {
            $sql = substr($sql, 0, strlen($sql) - 1);
            $sql = trim((string)$sql);
        }
        if (stripos($sql, "SELECT devices") !== false and stripos($sql, "SELECT devices") === 0) {
            $filter = "devices.org_id IN ({$user->org_list})";
            $type = 'devices';
            $sql = str_ireplace('WHERE @filter', "WHERE {$filter}", $sql);
        } else {
            $split1 = explode('.', $sql);
            $split2 = explode(' ', $split1[0]);
            $split3 = preg_split("/[^a-z_]/i", end($split2));
            $filter = end($split3) . ".org_id IN ({$user->org_list})";
            if (end($split3) === 'orgs') {
                $filter = end($split3) . ".id IN ({$user->org_list})";
            }
            $type = end($split3);
            $sql = str_ireplace('WHERE @filter', "WHERE {$filter}", $sql);
        }

        if (!empty($instance->config->feature_queries_advanced) and $instance->config->feature_queries_advanced === 'y' and !empty($query->advanced) and $query->advanced === 'y') {
            $sql = str_ireplace('@orgs', "({$user->org_list})", $sql);
        }

        $queryd = $this->db->query($sql);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $queryd->getResult();
        $GLOBALS['recordsTotal'] = count($result);
        $GLOBALS['recordsFiltered'] = count($result);
        if ($instance->config->license_limit > 0 and count($result) > $instance->config->license_limit) {
            $GLOBALS['recordsFiltered'] = $instance->config->license_limit;
        }
        unset($result);
        if (!empty($instance->resp->meta->limit) and is_int($instance->resp->meta->limit)) {
            if (stripos($sql, ' limit ') === false) {
                if (!empty($instance->resp->meta->sort) and stripos($sql, ' ORDER BY ') === false) {
                    $sort = str_replace(' DESC', '', $instance->resp->meta->sort);
                    if (stripos($sql, $sort) !== false) {
                        $sql .= ' ORDER BY ' . $instance->resp->meta->sort;
                    }
                }
                $limit = $instance->resp->meta->limit;
                $offset = (!empty($instance->resp->meta->offset)) ? intval($instance->resp->meta->offset) : 0;
                $total = $offset + $limit;
                if ($total > $instance->config->license_limit and $instance->config->license_limit > 0) {
                    $limit = $instance->config->license_limit - $offset;
                }
                $sql .= ' LIMIT ' . $limit;
                if (!empty($offset)) {
                    $sql .= ' OFFSET ' . $offset;
                }
            } else {
                if (!empty($instance->resp->meta->sort) and stripos($sql, $instance->resp->meta->sort) !== false) {
                    $sql = str_replace(' LIMIT ', ' ORDER BY ' . $instance->resp->meta->sort . ' LIMIT ', $sql);
                }
            }
        } else {
            if (stripos($sql, ' limit ') === false) {
                if (stripos($sql, 'devices') !== false) {
                    $sql .= ' LIMIT ' . intval($instance->config->license_limit);
                }
            }
            if (!empty($instance->resp->meta->sort) and stripos($sql, ' ORDER BY ') === false) {
                $sort = str_replace(' DESC', '', $instance->resp->meta->sort);
                if (stripos($sql, $sort) !== false) {
                    $sql = str_replace(' LIMIT ', ' ORDER BY ' . $instance->resp->meta->sort . ' LIMIT ', $sql);
                }
            }
        }
        if (!empty($instance->resp->meta->filter)) {
            foreach ($instance->resp->meta->filter as $filter) {
                if ($filter->name === 'devices.org_id') {
                    $replace = ' WHERE devices.org_id = ' . intval($filter->value) . ' AND ';
                    $sql = str_ireplace(' WHERE ', $replace , $sql);
                }
                if ($filter->name === 'devices.location_id') {
                    $replace = ' WHERE devices.location_id = ' . intval($filter->value) . ' AND ';
                    $sql = str_ireplace(' WHERE ', $replace , $sql);
                }
            }
        }
        if ($query->name === 'Benchmarks Query') {
            $request = \Config\Services::request();
            if (!empty($request->getGet('devices_os_family'))) {
                $sql = str_replace('OSFAMILY', preg_replace("/[^A-Za-z0-9 %]/", '', (string)$request->getGet('devices_os_family')), $sql);
            }
            if (!empty($request->getGet('devices_os_version'))) {
                $sql = str_replace('OSVERSION', preg_replace("/[^A-Za-z0-9\. ]/", '', (string)$request->getGet('devices_os_version')), $sql);
            }
            if (empty($request->getGet('devices_os_version'))) {
                $sql = str_replace('OSVERSION', '', $sql);
            }
            if (empty($request->getGet('devices_os_family')) and empty($request->getGet('devices_os_version'))) {
                $sql = str_replace('AND devices.os_family LIKE "OSFAMILY" AND devices.os_version LIKE "OSVERSION%"', '', $sql);
            }

            if (!empty($request->getGet('isInBenchmark'))) {
                $actual_devices = array();
                $sql2 = "SELECT devices FROM benchmarks WHERE org_id IN ($user->org_list)";
                $results = $this->db->query($sql2)->getResult();
                foreach ($results as $result) {
                    if (!empty($result->devices)) {
                        try {
                            $devices = json_decode($result->devices, false, 512, JSON_THROW_ON_ERROR);
                        } catch (\JsonException $e) {
                            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                        }
                        $actual_devices = array_merge($actual_devices, $devices);
                    }
                }
                $actual_devices = array_unique($actual_devices);
                $actual_devices = implode(', ', $actual_devices);
                if (!empty($actual_devices)) {
                    if ($request->getGet('isInBenchmark') === 'n') {
                        $sql = str_replace('LIMIT', " AND devices.id NOT IN ($actual_devices) LIMIT", $sql);
                    }
                    if ($request->getGet('isInBenchmark') === 'y') {
                        $sql = str_replace('LIMIT', " AND devices.id IN ($actual_devices) LIMIT", $sql);
                    }
                }
            }
        }
        log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
        $queryd = $this->db->query($sql);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $queryd->getResult();
        $result = formatQuery($result);
        $result = format_data($result, $type);
        return $result;
    }

    /**
     * Return supplementary data for a single query's read view
     *
     * @param  int   $id The ID of the query whose supplementary data to load
     *
     * @return array     An array of supplementary data for the read view
     */
    public function includedRead(int $id = 0): array
    {
        $attributesModel = new \App\Models\AttributesModel();
        $menu_category = $attributesModel->listUser(['attributes.type' => 'menu_category']);
        $return['menu_category'] = $menu_category;
        return $return;
    }

    /**
     * Return supplementary data for the query create/edit form
     *
     * @param  int   $id The ID of the query whose supplementary data to load
     *
     * @return array     An array of supplementary data for the create/edit form
     */
    public function includedCreateForm(int $id = 0): array
    {
        $included = array();
        $attributesModel = new \App\Models\AttributesModel();
        $return = array();
        $attributes = $attributesModel->listUser(['attributes.resource' => 'queries', 'attributes.type' => 'menu_category']);
        $included['attributes'] = $attributes;
        foreach ($included['attributes'] as $category) {
            if (empty($category->attributes->value)) {
                $category->attributes->name = ' ';
            }
        }
        $components = array('devices', 'arp', 'bios', 'certificate', 'disk', 'dns', 'executable', 'field', 'file', 'ip', 'license', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
        $included['tables'] = array();
        $databaseModel = new \App\Models\DatabaseModel();
        foreach ($components as $component) {
            $included['tables'][$component] = $this->db->getFieldNames($component);
        }
        return $included;
    }

    /**
     * Read every query from the database with no org-based filtering
     *
     * Returns all rows from the `queries` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every query row
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
     * Read the entire collection from the database that the user is allowed to read
     *
     * Resolves the full set of org IDs visible to the current user (including
     * both ancestors and descendants) and filters the result accordingly.
     *
     * @param  array $where Additional WHERE conditions to apply to the query
     * @param  array $orgs  List of org IDs to restrict results to; if empty,
     *                      the current user's accessible orgs are used
     *
     * @return array        An array of formatted queries entries
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

        $instance = & get_instance();
        $commercial = array();
        $commercial[] = 'n';
        if (!empty($instance->config->product) and $instance->config->product !== 'community') {
            $commercial[] = 'y';
        }


        $properties = array();
        $properties[] = 'queries.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'queries.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        #$this->builder->whereIn('commercial', $commercial);
        $this->builder->where($where);
        $this->builder->orderBy('queries.name');
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
     * Truncate the queries table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'queries' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
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
     * @param  int|null          $id   The ID of the query to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        $instance = & get_instance();
        if (!empty($data->sql) and !$instance->config->feature_queries_advanced) {
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
     * Build and return the data dictionary for the queries collection
     *
     * Constructs a stdClass describing the `queries` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('queries')
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

        $collection = 'queries';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'orgs.name');
        $dictionary->attributes->create = array('name', 'sql', 'menu_display', 'menu_category', 'org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Open-AudIT provides many built-in queries and makes it simple to create your own.';

        $dictionary->about = '<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>';

        $dictionary->notes = '<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->sql = 'Your SQL to select attributes that will populate this query.';
        $dictionary->columns->link = 'Unused.';
        $dictionary->columns->advanced = 'Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.';
        $dictionary->columns->menu_display = 'Should we expose this query in the list of reports under the Report menu in the web interface.';
        $dictionary->columns->menu_category = 'Which sub-menu should we display this query in.';
        $dictionary->columns->commercial = 'Is this query restricted to licensed customers.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
