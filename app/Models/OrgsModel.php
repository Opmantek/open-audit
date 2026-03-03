<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class OrgsModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'orgs' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('orgs');
    }

    /**
     * Read the collection from the database
     *
     * @param  object $resp An object containing the properties, filter, sort and limit as passed by the user
     * 
     * @return array        An array of formatted Orgs
     */
    public function collection(object $resp): array
    {
        $properties = $resp->meta->properties;
        $properties[] = "o2.name as parent_name";
        $properties[] = "COUNT(DISTINCT devices.id) as `device_count`";
        $this->builder->select($properties);
        $this->builder->join('orgs o2', 'orgs.parent_id = o2.id', 'left');
        $this->builder->join('devices', 'orgs.id = devices.org_id', 'left');
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->orderBy($resp->meta->sort);
        if (!empty($resp->meta->groupby)) {
            $this->builder->groupBy($resp->meta->groupby);
        } else {
            $this->builder->groupBy('orgs.id');
        }
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        $error = $this->db->error();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'orgs');
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
        if (empty($data->ad_group) && !empty($data->name)) {
            $data->ad_group = 'open-audit_orgs_' . strtolower(str_replace(' ', '_', $data->name));
            $data->ad_group = preg_replace('/[^\w-]/', '', $data->ad_group);
        }
        $data = $this->createFieldData('orgs', $data);
        if (empty($data)) {
            return null;
        }
        $this->builder->insert($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return (intval($this->db->insertID()));
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int|null $id    The ID of the org to delete
     * @param  bool     $purge Unused; present for interface compatibility
     *
     * @return bool            true on success, false on failure
     */
    public function delete($id = null, bool $purge = false): bool
    {
        if ($id === 1) {
            # We cannot delete the default Org
            return false;
        }
        $query = $this->builder->getWhere(['id' => intval($id)]);
        $org = $query->getResult();
        $this->builder->delete(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        if ($this->db->affectedRows() !== 1) {
            return false;
        }
        $tables = array('applications', 'attributes', 'auth', 'baselines', 'buildings', 'clouds', 'clusters', 'collectors', 'connections', 'credentials', 'dashboards', 'devices', 'discoveries', 'discovery_scan_options', 'fields', 'files', 'floors', 'groups', 'integrations', 'licenses', 'locations', 'maps', 'networks', 'queries', 'queue', 'rack_devices', 'racks', 'rooms', 'rows', 'rules', 'scripts', 'summaries', 'system', 'tasks', 'users', 'widgets');
        foreach ($tables as $table) {
            $builder = $this->db->table($table);
            $builder->set('org_id', $org[0]->parent_id, false);
            $builder->where('org_id', $id);
            $builder->update();
        }
        return true;
    }

    /**
     * Return an array of ancestor org IDs for the given org, walking up the hierarchy
     *
     * Recursively traverses the org tree upward from the given org ID, collecting
     * the IDs of all parent orgs. Stops when an org's parent_id equals its own id.
     *
     * @param  int   $id The org ID to start from
     *
     * @return array     An array of ancestor org IDs (may contain duplicates)
     */
    public function getAscendant(int $id = 0)
    {
        $org_list = array();
        if (empty($this->orgs)) {
            $sql = 'SELECT * FROM orgs';
            $orgs = $this->db->query($sql)->getResult();
        }
        foreach ($orgs as $org) {
            if (intval($org->id) === $id && intval($org->parent_id) !== $id) {
                $org_list[] = intval($org->parent_id);
                foreach ($this->getAscendant($org->parent_id) as $childOrg) {
                    $org_list[] = intval($childOrg);
                }
            }
        }
        return($org_list);
    }

    /**
     * Return a sorted, deduplicated array of ancestor org IDs for the given org
     *
     * Calls {@see getAscendant()} to collect all ancestor org IDs, removes any
     * occurrence of the starting org's own ID, then returns a sorted unique list.
     *
     * @param  int   $id The org ID whose ancestors to retrieve
     *
     * @return array     A sorted array of unique ancestor org IDs
     */
    public function getAscendants(int $id = 0)
    {
        $orgs = $this->getAscendant($id);
        for ($i = 0; $i < count($orgs); $i++) {
            if (intval($orgs[$i]) === $id) {
                unset($orgs[$i]);
            }
        }
        sort($orgs);
        return $orgs;
    }

    /**
     * Return an array of descendant org IDs for the given org, walking down the hierarchy
     *
     * Recursively traverses the org tree downward from the given org ID, collecting
     * the IDs of all child and grandchild orgs.
     *
     * @param  int   $id The org ID whose descendants to retrieve
     *
     * @return array     An array of descendant org IDs
     */
    public function getDescendants($id = 0)
    {
        $id = intval($id);
        $org_list = array();
        if (empty($this->orgs)) {
            $sql = 'SELECT * FROM orgs';
            $orgs = $this->db->query($sql)->getResult();
        }
        foreach ($orgs as $org) {
            if (intval($org->parent_id) === $id && intval($org->id) !== 1) {
                $org_list[] = intval($org->id);
                foreach ($this->getDescendants($org->id) as $childOrg) {
                    $org_list[] = intval($childOrg);
                }
            }
        }
        return($org_list);
    }

    /**
     * getUserAscendants get the parent Orgs for a user.orgs array
     * @param  array  $userOrgs    An array of orgs.id
     * @param  array  $orgs        The global list of all orgs in the database. Usually retrieved in BaseController
     * @return array  $ascendants  An array of orgs.id that the user has access to, including descendants
     */
    public function getUserAscendants($userOrgs = [0], $orgs = array()): array
    {
        while (true) {
            $continue = false;
            foreach ($userOrgs as $userOrg) {
                foreach ($orgs as $org) {
                    if ($userOrg == $org->id) {
                        if (!in_array($org->parent_id, $userOrgs)) {
                            $userOrgs[] = $org->parent_id;
                            $continue = true;
                        }
                    }
                }
            }
            if (!$continue) {
                break;
            }
        }
        asort($userOrgs);
        return $userOrgs;
    }

    /**
     * getUserDescendants get the child Orgs for a user.orgs array
     * @param  array  $userOrgs    An array of orgs.id
     * @param  array  $orgs        The global list of all orgs in the database. Usually retrieved in BaseController
     * @return array  $ascendants  An array of orgs.id that the user has access to, including descendants
     */
    public function getUserDescendants($userOrgs = [0], $orgs = array()): array
    {
        while (true) {
            $continue = false;
            foreach ($userOrgs as $userOrg) {
                foreach ($orgs as $org) {
                    if ($userOrg == $org->parent_id) {
                        if (!in_array($org->id, $userOrgs)) {
                            $userOrgs[] = $org->id;
                            $continue = true;
                        }
                    }
                }
            }
            if (!$continue) {
                break;
            }
        }
        asort($userOrgs);
        return $userOrgs;
    }

    /**
     * Return supplementary data for a single org's read view
     *
     * @param  int   $id The ID of the org whose supplementary data to load
     *
     * @return array     An array of supplementary data for the read view
     */
    public function includedRead(int $id = 0): array
    {
        $attributesModel = new \App\Models\AttributesModel();
        $return = array();
        $types = $attributesModel->listUser(['attributes.resource' => 'orgs', 'attributes.type' => 'type']);
        $return['types'] = $types;
        return $return;
    }

    /**
     * Return supplementary data for the org create/edit form
     *
     * @param  int   $id The ID of the org whose supplementary data to load
     *
     * @return array     An array of supplementary data for the create/edit form
     */
    public function includedCreateForm(int $id = 0): array
    {
        $attributesModel = new \App\Models\AttributesModel();
        $return = array();
        $types = $attributesModel->listUser(['attributes.resource' => 'orgs', 'attributes.type' => 'type']);
        $return['types'] = $types;
        return $return;
    }

    public function import(?array $csv = null)
    {
        $instance = & get_instance();

        $org_list = array_unique(array_merge($instance->user->orgs, $this->getUserDescendants($instance->user->orgs, $instance->orgs)));

        $result = new \stdClass();
        $result->all = 0;
        $result->good = 0;
        $result->bad = 0;
        $result->update = 0;
        $result->create = 0;
        $result->ids = array();
        $header = $csv[0];
        unset($csv[0]);

        foreach ($csv as $key => $value) {
            $item = new \stdClass();
            for ($i = 0; $i < count($value); $i++) {
                $item->{@$header[$i]} = @$value[$i];
            }
            // Check user is auth on org_id
            $test = false;
            $result->all += 1;
            if (!in_array($item->parent_id, $org_list)) {
                $result->bad += 1;
            } else {
                $test = false;
                if (!empty($item->id)) {
                    if (in_array($item->id, $org_list)) {
                        // UPDATE
                        $id = intval($item->id);
                        $test = $this->update(intval($item->id), $item);
                        if ($test !== false) {
                            $result->update += 1;
                            $result->ids[] = $item->id;
                        }
                    } else {
                        log_message('warning', 'Supplied OrgID on import CSV is not in list of allowed Orgs');
                    }
                } else {
                    // CREATE
                    unset($item->id);
                    $test = false;
                    $test = $this->create($item);
                    if (!empty($test)) {
                        $result->create += 1;
                        $result->ids[] = $test;
                        $id = $test;
                        $org_list[] = $test;
                    }
                }
                if ($test === false) {
                    $result->bad += 1;
                }
            }
        }
        return $result;
    }

    /**
     * Read the entire collection from the database, not restricted to the user
     *
     * @return array  An array of all Orgs
     */
    public function listAll(): array
    {
        $sql = 'SELECT orgs.*, o2.name as `parent_name`, count(DISTINCT devices.id) as device_count FROM orgs LEFT JOIN orgs o2 ON orgs.parent_id = o2.id LEFT JOIN devices ON (orgs.id = devices.org_id) GROUP BY orgs.id';
        $orgs = $this->db->query($sql)->getResult();
        foreach ($orgs as $org) {
            $org->id = intval($org->id);
            $org->parent_id = intval($org->parent_id);
        }
        return $orgs;
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all Orgs
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
        $properties[] = 'orgs.*';
        $properties[] = 'o2.name as parent_name';
        $this->builder->select($properties);
        $this->builder->join('orgs o2', 'orgs.parent_id = o2.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $this->builder->orderBy('orgs.name', 'ASC');
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'orgs');
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read(int $id = 0): array
    {
        $sql = 'SELECT orgs.*, COUNT(DISTINCT devices.id) as `device_count` FROM orgs LEFT JOIN devices ON (orgs.id = devices.org_id) WHERE orgs.id = ? LIMIT 1';
        $query = $this->db->query($sql, [$id]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'orgs');
    }

    /**
     * Truncate the orgs table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'orgs' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
     */
    public function reset(string $table = ''): bool
    {
        if (!empty($this->tableReset('orgs'))) {
            return false;
        }
        $tables = array('agents', 'applications', 'attributes', 'auth', 'baselines', 'buildings', 'clouds', 'clusters', 'collectors', 'connections', 'credentials', 'dashboards', 'devices', 'discoveries', 'discovery_scan_options', 'fields', 'files', 'floors', 'groups', 'integrations', 'invoice', 'licenses', 'locations', 'maps', 'networks', 'queries', 'queue', 'rack_devices', 'racks', 'rooms', 'rows', 'rules', 'scripts', 'summaries', 'system', 'tasks', 'users', 'widgets');
        foreach ($tables as $table) {
            $sql = "UPDATE `$table` SET org_id = 1";
            $query = $this->db->query($sql);
        }
        return true;
    }

    /**
     * Update an individual item in the database
     *
     * @param  int|null          $id   The ID of the org to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        // Accept our client data
        $data = $this->updateFieldData('orgs', $data);
        // And update the record
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    /**
     * Build and return the data dictionary for the orgs collection
     *
     * Constructs a stdClass describing the `orgs` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('orgs')
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

        $collection = 'orgs';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'parent_name', 'type', 'ad_group', 'device_count');
        $dictionary->attributes->create = array('name','parent_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Open-AudIT provides multi-tenancy out of the box!';

        $dictionary->about = '<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="' . $helpFAQ . '?name=Users, Roles and Orgs">FAQ</a>.</p>';

        $dictionary->notes = '';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->parent_id = 'The ID of this orgs parent org. Linked to <code>orgs.id</code>';
        $dictionary->columns->type = 'The type of organisation.';
        $dictionary->columns->ad_group = 'Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
