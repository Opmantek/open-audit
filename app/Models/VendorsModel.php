<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class VendorsModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('vendors');
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
        // Our query without limit
        if (!empty($resp->meta->groupby)) {
            $this->builder->groupBy($resp->meta->groupby);
        } else {
            $this->builder->groupBy('vendors.id');
        }
        if (!empty($resp->meta->sort)) {
            $this->builder->orderBy($resp->meta->sort);
        } else {
            $this->builder->orderBy('vendors.name DESC');
        }
        $properties = $resp->meta->properties;
        $this->builder->select($properties, false);
        foreach ($resp->meta->filter as $filter) {
            if ($filter->name === 'search') {
                $this->builder->where('(vendors.name LIKE ' . $this->db->escape($filter->value) . ')');
                continue;
            }
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        // log_message('debug', 'SQL: ' . str_replace("\n", " ", (string)$this->builder->getCompiledSelect(false)));
        $query = $this->builder->get();
        $result = $query->getResult();
        $GLOBALS['recordsFiltered'] = count($result);

        // Our query as the user asked
        $this->builder = $this->db->table('vendors');
        if (!empty($resp->meta->groupby)) {
            $this->builder->groupBy($resp->meta->groupby);
        } else {
            $this->builder->groupBy('vendors.id');
        }
        if (!empty($resp->meta->sort)) {
            $this->builder->orderBy($resp->meta->sort);
        } else {
            $this->builder->orderBy('vendors.name DESC');
        }
        $properties = $resp->meta->properties;
        $this->builder->select($properties, false);
        foreach ($resp->meta->filter as $filter) {
            if ($filter->name === 'search') {
                $this->builder->where('(vendors.name LIKE ' . $this->db->escape($filter->value) .')');
                continue;
            }
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        // log_message('debug', 'SQL: ' . str_replace("\n", " ", (string)$this->builder->getCompiledSelect(false)));
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $query->getResult();
        // log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
        return format_data($result, 'vendors');
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
        return 0;
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
        return true;
    }

    public function executeAll(): bool
    {
        $start = microtime(true);
        // Get all vulnerabilities with a vendor in the list
        $sql = "SELECT * FROM vulnerabilities WHERE `vendor` IN (SELECT `name` FROM `vendors` WHERE `use` = 'y')";
        $query = $this->db->query($sql);
        log_message('debug', 'VendorsModel::executeAll SQL: ' . str_replace("\n", " ", (string)$this->db->getLastQuery()));
        if (empty($query)) {
            return false;
        }
        $vulnerabilities = $query->getResult();
        // Get all Orgs
        $orgsModel = new \App\Models\OrgsModel();
        $allOrgs = $orgsModel->listAll();
        foreach ($allOrgs as $singleOrg) {
            $orgs[] = $singleOrg->id;
        }
        // Loop through vulnerabilities and orgs
        $count = 1;
        $total = count($vulnerabilities);
        foreach ($vulnerabilities as $vulnerability) {
            log_message('debug', $count . ' / ' . $total . ' vulnerabilities executed.');
            if (empty($vulnerability->sql)) {
                log_message('warning', 'No SQL for VendorsModel::executeAll, ID: ' . $vulnerability->id . '.');
                continue;
            }
            foreach ($orgs as $org) {
                set_time_limit(60);
                $sql = $vulnerability->sql . " AND devices.org_id = " . $org . ' GROUP BY devices.id';
                $devices = $this->db->query($sql)->getResult();
                $sql = "DELETE FROM vulnerabilities_cache WHERE vulnerability_id = ? AND org_id = ?";
                $this->db->query($sql, [$vulnerability->id, $org]);
                if (!empty($devices) and count($devices) > 0) {
                    $sql = "INSERT INTO vulnerabilities_cache VALUES (null, ?, ?, ?, NOW())";
                    $this->db->query($sql, [$vulnerability->id, $org, count($devices)]);
                    foreach ($devices as $device) {
                        $sql = "UPDATE devices SET cve = CONCAT(`cve`, ',', ?) WHERE devices.id = ? AND devices.cve NOT LIKE ?";
                        $this->db->query($sql, [$vulnerability->cve, $device->{'devices.id'}, $vulnerability->cve]);
                    }
                }
            }
            $count++;
        }
        log_message('info', 'VendorsModel::executeAll, ' . $total . ' vulnerabilities took ' . (microtime(true) - $start) . ' seconds.');
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
     * @return array  An array of anything needed for screen output
     */
    public function includedCollection()
    {
        $return = array();
        $return['indb'] = array();
        $sql = "SELECT vulnerabilities.vendor, vulnerabilities.base_severity, COUNT(vulnerabilities.id) AS `count`, vendors.use, vendors.id FROM vendors LEFT JOIN vulnerabilities ON vulnerabilities.vendor = vendors.name GROUP BY vulnerabilities.vendor, vulnerabilities.base_severity";

        $result = $this->db->query($sql)->getResult();
        foreach ($result as $row) {
            if (empty($row->vendor)) {
                continue;
            }
            if ($row->base_severity === '') {
                $row->base_severity = 'none';
            }
            if (!isset($return['indb'][$row->vendor])) {
                $return['indb'][$row->vendor] = new stdClass();
                $return['indb'][$row->vendor]->critical = 0;
                $return['indb'][$row->vendor]->high = 0;
                $return['indb'][$row->vendor]->medium = 0;
                $return['indb'][$row->vendor]->low = 0;
                $return['indb'][$row->vendor]->none = 0;
                $return['indb'][$row->vendor]->use = $row->use;
                $return['indb'][$row->vendor]->id = $row->id;
            }
            $return['indb'][$row->vendor]->{$row->base_severity} = intval($row->count);
        }
        // Account for vendors with no local vulnerabilities entries
        $sql = "SELECT * FROM vendors WHERE `use` = 'y'";
        $result = $this->db->query($sql)->getResult();
        foreach ($result as $row) {
            if (empty($return['indb'][$row->name])) {
                $return['indb'][$row->name] = new stdClass();
                $return['indb'][$row->name]->critical = 0;
                $return['indb'][$row->name]->high = 0;
                $return['indb'][$row->name]->medium = 0;
                $return['indb'][$row->name]->low = 0;
                $return['indb'][$row->name]->none = 0;
                $return['indb'][$row->name]->use = $row->use;
                $return['indb'][$row->name]->id = $row->id;
            }
        }

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
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function listUser($where = array(), $orgs = array()): array
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
        return array();
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
        return array();
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('vendors')) {
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
        $data = $this->updateFieldData('vendors', $data);
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    /**
     * Insert or Update an individual item in the database
     *
     * @param  object  $data The data attributes
     *
     * @return int     The integer ID of the item or 0 for error
     */
    public function upsert($vendor): int
    {
        if (empty($vendor)) {
            return 0;
        }
        $sql = "SELECT * FROM vendors WHERE name = ?";
        $result = $this->db->query($sql, [$vendor->name])->getResult();
        if (empty($result)) {
            // Insert a new vendor
            $sql = "INSERT INTO vendors VALUES (null, ?, 1, ?, ?, ?, ?, ?, 'n', 'system', NOW())";
            $this->db->query($sql, [$vendor->name, intval($vendor->critical), intval($vendor->high), intval($vendor->medium), intval($vendor->low), intval($vendor->none)]);
            log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
            $id = intval($this->db->insertID());
            return intval($id);
        } else {
            // Update an existing vendor - do not change the 'use' column
            $sql = 'UPDATE vendors SET `critical` = ?, `high` = ?, `medium` = ?, `low` = ?, `none` = ?, `use` = ? WHERE id = ?';
            $this->db->query($sql, [intval($vendor->critical), intval($vendor->high), intval($vendor->medium), intval($vendor->low), intval($vendor->none), $result[0]->use, $result[0]->id]);
            log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
            return intval($result[0]->id);
        }
    }

    /**
     * Get a JSON array of all vendors names with use = y
     *
     * @return string   A JSON array of vendor names
     */
    public function getUse(): string
    {
        $rows = $this->builder->getWhere(['use' => 'y'])->getResult();
        $names = array();
        foreach ($rows as $row) {
            $names[] = $row->name;
        }
        log_message('info', 'Names: ' . json_encode($names));
        return json_encode($names);
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'vendors';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('name', 'critical', 'high', 'medium', 'low', 'none', 'use');
        $dictionary->attributes->create = array('vendor'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields
        $dictionary->sentence = '';

        $dictionary->about = '';

        $dictionary->notes = '';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = 'The vendor name as per CPE entries.';
        $dictionary->columns->critical = 'The number of critical severity vulnerabilities held by FirstWave (not in your database).';
        $dictionary->columns->high = 'The number of high severity vulnerabilities held by FirstWave (not in your database).';
        $dictionary->columns->medium = 'The number of medium severity vulnerabilities held by FirstWave (not in your database).';
        $dictionary->columns->low = 'The number of low severity vulnerabilities held by FirstWave (not in your database).';
        $dictionary->columns->none = 'The number of vulnerabilities without a severity held by FirstWave (not in your database).';
        $dictionary->columns->use = 'Should this vendor be used when retrieving vulnerabilities from FirstWave.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
