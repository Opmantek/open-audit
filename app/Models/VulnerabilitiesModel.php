<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class VulnerabilitiesModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('vulnerabilities');
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
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = array_unique($org_list);

        // Our query without limit
        $this->builder = $this->db->table('vulnerabilities');
        if (!empty($resp->meta->groupby)) {
            $this->builder->groupBy($resp->meta->groupby);
        } else {
            $this->builder->groupBy('vulnerabilities.id');
        }
        if (!empty($instance->resp->meta->sort)) {
            if (strpos($instance->resp->meta->sort, 'vulnerabilities.count') !== false) {
                if (strpos($instance->resp->meta->sort, ' DESC') === false) {
                    $this->builder->orderBy('`count` DESC');
                } else {
                    $this->builder->orderBy('`count`');
                }
            } else {
                $this->builder->orderBy($resp->meta->sort);
            }
        } else {
            $this->builder->orderBy('vulnerabilities.published DESC');
        }
        $properties = $resp->meta->properties;
        $properties[] = 'SUM(vulnerabilities_cache.count) AS `count`';
        $this->builder->join('vulnerabilities_cache', 'vulnerabilities.id = vulnerabilities_cache.vulnerability_id', 'left');
        $this->builder->select($properties, false);
        foreach ($resp->meta->filter as $filter) {

            if ($filter->name === 'search') {
                $this->builder->where('(vulnerabilities.name LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.cve LIKE ' . $this->db->escape(ip_address_to_db($filter->value)) .
                    ' OR vulnerabilities.vendor LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.filter LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.nvd_json LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.mitre_json LIKE ' . $this->db->escape($filter->value) .
                    ')');
                continue;
            }

            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        if (!empty($resp->meta->filter)) {
            $sql = '(vulnerabilities_cache.org_id IN (' . implode(',', $org_list) . ') OR vulnerabilities_cache.id IS NULL)';
            $this->builder->where($sql);
        } else {
            $this->builder->whereIn('vulnerabilities_cache.org_id', $org_list);
            $this->builder->where('`count` > 0');
        }
        // log_message('debug', 'SQL: ' . str_replace("\n", " ", (string)$this->builder->getCompiledSelect(false)));
        $query = $this->builder->get();
        $result = $query->getResult();
        $GLOBALS['recordsFiltered'] = count($result);

        // Our query as the user asked
        $this->builder = $this->db->table('vulnerabilities');
        if (!empty($resp->meta->groupby)) {
            $this->builder->groupBy($resp->meta->groupby);
        } else {
            $this->builder->groupBy('vulnerabilities.id');
        }
        if (!empty($instance->resp->meta->sort)) {
            if (strpos($instance->resp->meta->sort, 'vulnerabilities.count') !== false) {
                if (strpos($instance->resp->meta->sort, ' DESC') === false) {
                    $this->builder->orderBy('`count` DESC');
                } else {
                    $this->builder->orderBy('`count`');
                }
            } else {
                $this->builder->orderBy($resp->meta->sort);
            }
        } else {
            $this->builder->orderBy('vulnerabilities.published DESC');
        }
        $properties = $resp->meta->properties;
        $properties[] = 'SUM(vulnerabilities_cache.count) AS `count`';
        $this->builder->join('vulnerabilities_cache', 'vulnerabilities.id = vulnerabilities_cache.vulnerability_id', 'left');
        $this->builder->select($properties, false);
        foreach ($resp->meta->filter as $filter) {

            if ($filter->name === 'search') {
                $this->builder->where('(vulnerabilities.name LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.cve LIKE ' . $this->db->escape(ip_address_to_db($filter->value)) .
                    ' OR vulnerabilities.vendor LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.filter LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.nvd_json LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.mitre_json LIKE ' . $this->db->escape($filter->value) .
                    ')');
                continue;
            }

            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        if (!empty($resp->meta->filter)) {
            $org_list = implode(',', $org_list);
            $sql = '(vulnerabilities_cache.org_id IN (' . $org_list . ') OR vulnerabilities_cache.id IS NULL)';
            $this->builder->where($sql);
        } else {
            $this->builder->whereIn('vulnerabilities_cache.org_id', $org_list);
            $this->builder->where('`count` > 0');
        }
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        // log_message('debug', 'SQL: ' . str_replace("\n", " ", (string)$this->builder->getCompiledSelect(false)));
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $query->getResult();
        // log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
        return format_data($result, $resp->meta->collection);
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
        if (empty($data->cve)) {
            log_message('error', 'CVE for inserting, but no CVE ID supplied.');
            return null;
        }

        if (!empty($data->filter) and !is_string($data->filter)) {
            $data->filter = json_encode($data->filter);
        }
        if (!empty($data->links) and !is_string($data->links)) {
            $data->links = json_encode($data->links);
        }
        if (!empty($data->nvd_json) and !is_string($data->nvd_json)) {
            $data->nvd_json = json_encode($data->nvd_json);
        }
        if (!empty($data->mitre_json) and !is_string($data->mitre_json)) {
            $data->mitre_json = json_encode($data->mitre_json);
        }
        if (!empty($data->products) and !is_string($data->products)) {
            $data->products = json_encode($data->products);
        }
        if (!empty($data->references) and !is_string($data->references)) {
            $data->references = json_encode($data->references);
        }
        $data = $this->createFieldData('vulnerabilities', $data);
        if (empty($data)) {
            return null;
        }
        if (empty($data->filter)) {
            log_message('warning', 'No Filter after createFieldData.');
        }

        // Does this CVE already exist in our database?
        $existing = $this->builder->getWhere(['cve' => $data->cve])->getResult();
        $formattedData = new stdClass();
        foreach ($data as $key => $value) {
            if ($this->db->fieldExists($key, 'vulnerabilities')) {
                $formattedData->{$key} = $value;
            }
        }
        if (!empty($existing[0]->cve)) {
            // We have an existing matching CVE, update it
            // TODO - combine products from feeds with existing from DB so we don't loose any user customisations
            log_message('debug', 'Updating: ' . $existing[0]->cve);
            $this->builder->where('cve', $existing[0]->cve);
            $this->builder->update($formattedData);
            $id = intval($existing[0]->id);
        } else {
            log_message('debug', 'Creating: ' . $data->cve);
            $this->builder->insert($formattedData);
            $id = intval($this->db->insertID());
        }
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return null;
        }
        $this->updateCacheSingle($id);
        return ($id);
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
     * Execute a given vulnerability for each supplied Org (or All Orgs), update the cache and return the array of affected devices
     *
     * @param  $id   int   The integer ID of the vulnerability to execute
     * 
     * @param  $orgs array An optional list of integers representing specific Orgs to run the vulnerability against
     *
     * @return array        Success or failure
     */
    public function execute(int $id = 0, ?array $orgs = array()): array
    {
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            log_message('warning', 'Invalid id: ' . $id . ' passed to execute.');
            return false;
        }
        $temp = $query->getResult();
        if (empty($temp[0])) {
            log_message('warning', 'No result matching id: ' . $id . ' for vulnerabilities execute.');
            return false;
        }
        $vulnerability = $temp[0];
        if (empty($vulnerability->sql)) {
            log_message('warning', 'No SQL for vulnerability ' . $id . ', CVE: ' . $vulnerability->cve);
            return array();
        }
        log_message('debug', 'Executing vulnerability ' . $id . ', CVE: ' . $vulnerability->cve);
        if (empty($orgs)) {
            $orgsModel = model('orgsModel');
            $allOrgs = $orgsModel->listAll();
            foreach ($allOrgs as $singleOrg) {
                $orgs[] = $singleOrg->id;
            }
        }
        // Update the cache
        $this->updateCacheSingle($id);
        // Run the SQL for the required Orgs and return the result
        $sql = $vulnerability->sql . " AND devices.org_id IN (" . implode(',', $orgs) . ")";
        $query = $this->db->query($sql);
        $devices = array();
        if (!empty($query)) {
            $devices = $query->getResult();
        }
        return format_data($devices, 'devices');
    }


    public function includedCollection()
    {
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = array_unique($org_list);

        $included = array();
        $included['severity'] = new stdClass();
        $included['severity']->critical = 0;
        $included['severity']->high = 0;
        $included['severity']->medium = 0;
        $included['severity']->low = 0;
        $included['severity']->none = 0;
        $sql = "SELECT vulnerabilities.base_severity, COUNT(DISTINCT `vulnerabilities_cache`.`vulnerability_id`) AS `count` FROM `vulnerabilities` LEFT JOIN `vulnerabilities_cache` ON `vulnerabilities`.`id` = `vulnerabilities_cache`.`vulnerability_id` WHERE `vulnerabilities_cache`.`org_id` IN (" . implode(',', $org_list) . ") AND `count` > 0 GROUP BY `vulnerabilities`.`base_severity` ";

        $result = $this->db->query($sql)->getResult();
        foreach($result as $row) {
            $included['severity']->{$row->base_severity} = intval($row->count);
        }
        $included['all_severity'] = new stdClass();
        $included['all_severity']->critical = 0;
        $included['all_severity']->high = 0;
        $included['all_severity']->medium = 0;
        $included['all_severity']->low = 0;
        $included['all_severity']->none = 0;
        $sql = "SELECT vulnerabilities.base_severity, COUNT(vulnerabilities.id) AS `count` FROM `vulnerabilities` GROUP BY `vulnerabilities`.`base_severity` ";
        $result = $this->db->query($sql)->getResult();
        foreach($result as $row) {
            $included['all_severity']->{$row->base_severity} = intval($row->count);
        }
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
        $configModel = model('ConfigurationModel');
        $return = array();
        $return['feature_vulnerabilities'] = $configModel->readName('feature_vulnerabilities');
        $return['feature_vulnerabilities_interval'] = $configModel->readName('feature_vulnerabilities_interval');
        $return['feature_vulnerabilities_date'] = $configModel->readName('feature_vulnerabilities_date');
        $return['feature_vulnerabilities_vendors'] = $configModel->readName('feature_vulnerabilities_vendors');
        return $return;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = array_unique($org_list);

        $included = array();
        $included['devices'] = $this->execute($id, $org_list);
        $included['software'] = '';
        if (!empty($included['devices']) and isset($included['devices'][0]->attributes->{'software.name'})) {
            $software = array();
            foreach ($included['devices'] as $device) {
                $software[] = $device->attributes->{'software.name'};
            }
            $software = array_unique($software);
            $included['software'] = implode(', ', $software);
        }
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
        $properties[] = 'vulnerabilities.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'vulnerabilities.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'vulnerabilities');
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
        $item = $query->getResult();
        if (strpos($item[0]->filter, 'cpe:2.3:h:') !== false) {
            $_SESSION['warning'] = 'The devices.hw_cpe attribute is not automatically populated during discovery. Use Rules to populate the hw_cpe attribute.';
        }
        $item[0]->filter = json_decode($item[0]->filter);
        $item[0]->nvd_json = json_decode($item[0]->nvd_json);
        $item[0]->mitre_json = json_decode($item[0]->mitre_json);
        $item[0]->references = json_decode($item[0]->references);
        $item[0]->products = json_decode($item[0]->products);
        return format_data($item, 'vulnerabilities');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('vulnerabilities')) {
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
        $id = intval($id);
        $data = $this->updateFieldData('vulnerabilities', $data);
        if (!empty($data->filter)) {
            if (!is_string($data->filter)) {
                $data->filter = json_encode($data->filter);
            } else {
                $data->filter = json_decode($data->filter);
                $data->filter = json_encode($data->filter);
            }
        }
        if (!empty($data->products)) {
            $products = new stdClass();
            foreach ($data->products as $key => $value) {
                $products->{$key} = array();
                $values = explode(',', $value);
                for ($i=0; $i < count($values); $i++) {
                    $values[$i] = trim($values[$i]);
                }
                $products->{$key} = $values;
            }
            $vuln = $this->read($id);
            if (is_string($vuln[0]->attributes->products)) {
                $vuln[0]->attributes->products = json_decode($vuln[0]->attributes->products);
            }
            $data->products = new stdClass();
            foreach ($vuln[0]->attributes->products as $vuln_product_name => $vuln_product_data) {
                if (empty($data->products->{$vuln_product_name})) {
                    $data->products->{$vuln_product_name} = new stdClass();
                }
                $data->products->{$vuln_product_name}->vendor = $vuln_product_data->vendor;
                $data->products->{$vuln_product_name}->names = $products->{$vuln_product_name};
            }
            $data->products = json_encode($data->products);
        }
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }


    /**
     * Execute a given vulnerability for each supplied Org (or All Orgs) and update the cache
     *
     * @param  $id   int   The integer ID of the vulnerability to execute
     * 
     * @param  $orgs array An optional list of integers representing specific Orgs to run the vulnerability against
     *
     * @return array        Success or failure
     */
    public function updateCacheSingle(int $id = 0, ?array $orgs = array()): bool
    {
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            log_message('warning', 'Invalid id passed to execute.');
            return false;
        }
        $temp = $query->getResult();
        if (empty($temp[0])) {
            log_message('warning', 'No result matching id for vulnerabilities execute.');
            return false;
        }
        $vulnerability = $temp[0];
        if (empty($vulnerability->sql)) {
            log_message('warning', 'No SQL for VulnerabilitiesModel::updateCacheSingle, ID: ' . $id . '.');
            return false;
        }
        if (empty($orgs)) {
            $orgsModel = model('orgsModel');
            $allOrgs = $orgsModel->listAll();
            foreach ($allOrgs as $singleOrg) {
                $orgs[] = $singleOrg->id;
            }
        }
        foreach ($orgs as $org) {
            set_time_limit(60);
            $sql = $vulnerability->sql . " AND devices.org_id = " . $org;
            $query = $this->db->query($sql);
            if (!empty($query)) {
                $devices = $query->getResult();
                // log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
                $sql = "DELETE FROM vulnerabilities_cache WHERE vulnerability_id = ? AND org_id = ?";
                $this->db->query($sql, [$id, $org]);
                if (count($devices) > 0) {
                    $sql = "INSERT INTO vulnerabilities_cache VALUES (null, ?, ?, ?, NOW())";
                    $this->db->query($sql, [$id, $org, count($devices)]);
                }
            }
        }
        return true;
    }

    public function updateCacheAll(): bool
    {
        $db = \Config\Database::connect('nodebug');
        $builder = $db->table('vulnerabilities');
        $vulnerabilities = $builder->get()->getResult();
        $orgsModel = model('orgsModel');
        $allOrgs = $orgsModel->listAll();
        foreach ($allOrgs as $singleOrg) {
            $orgs[] = $singleOrg->id;
        }
        foreach ($vulnerabilities as $vulnerability) {
            if (empty($vulnerability->sql)) {
                log_message('warning', 'No SQL for VulnerabilitiesModel::updateCacheAll, ID: ' . $id . '.');
                continue;
            }
            foreach ($orgs as $org) {
                set_time_limit(60);
                $sql = $vulnerability->sql . " AND devices.org_id = " . $org->id;
                $devices = $db->query($sql)->getResult();
                $sql = "DELETE FROM vulnerabilities_cache WHERE vulnerability_id = ? AND org_id = ?";
                $this->db->query($sql, [$id, $org->id]);
                if (!empty($devices) and count($devices) > 0) {
                    $sql = "INSERT INTO vulnerabilities_cache VALUES (null, ?, ?, ?, NOW())";
                    $this->db->query($sql, [$id, $org->id, count($devices)]);
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

        $collection = 'vulnerabilities';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'base_severity', 'cve', 'name', 'vendor', 'published', 'count');
        $dictionary->attributes->create = array('name', 'org_id', 'cve'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Vulnerabilities reporting based on the NIST CVE feed.';

        $dictionary->about = '<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>';

        $dictionary->notes = '';

        $dictionary->link = '';
        $dictionary->product = 'enterprise';
        $dictionary->columns->id = 'The identifier column (integer) in the database (read only).';
        $dictionary->columns->name = 'The name given to this item. Ideally it should be unique.';
        $dictionary->columns->org_id = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';
        $dictionary->columns->cve  = 'The CVE identifier.';
        $dictionary->columns->status = 'The user assigned status of pending, confirmed or declined. This should occur after reviewing the <code>filter</code> and generated <code>SQL</code>. If set to declined, this item will not appear on the Vulnerability list by default.';
        $dictionary->columns->affected = '';
        $dictionary->columns->attack_complexity = 'Complexity of the attack (Low or High).';
        $dictionary->columns->attack_requirements = '';
        $dictionary->columns->attack_vector = 'How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).';
        $dictionary->columns->automatable = '';
        $dictionary->columns->base_score = 'Overall severity score (0–10).';
        $dictionary->columns->base_severity = 'Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.';
        $dictionary->columns->description  = 'Human-readable explanation of the vulnerability.';
        $dictionary->columns->exploit_maturity = 'Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.';
        $dictionary->columns->impact_availability = 'A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).';
        $dictionary->columns->impact_confidentiality = 'A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).';
        $dictionary->columns->impact_integrity = 'A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).';
        $dictionary->columns->lastModified = 'Date when the CVE was last updated.';
        $dictionary->columns->privileges_required = 'Level of privileges needed to exploit (None, Low, High).';
        $dictionary->columns->products = '';
        $dictionary->columns->published = 'Date and time when the CVE was published.';
        $dictionary->columns->published_date = 'Date when the CVE was published.';
        $dictionary->columns->references = '';
        $dictionary->columns->remediation = '';
        $dictionary->columns->scope = 'Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.';
        $dictionary->columns->type = 'Application, Operating System or Hardware.';
        $dictionary->columns->user_interaction = 'Whether user interaction is required (None, Passive, Active).';
        $dictionary->columns->vendor = 'The vendor taken from the CPE.';
        $dictionary->columns->vuln_status = 'The NVD assigned base status.';
        $dictionary->columns->filter  = 'A JSON array of values to test for this vulnerability.';
        $dictionary->columns->sql  = 'The generated SQL query to test for this vulnerability. This field can be editied to correct the query as required.';
        $dictionary->columns->nvd_json  = 'The JSON record from the NVD feed.';
        $dictionary->columns->mitre_json = 'The JSON record from Mitre.';
        $dictionary->columns->edited_by = 'The name of the user who last changed or added this item (read only).';
        $dictionary->columns->edited_date = 'The date this item was changed or added (read only). NOTE - This is the timestamp from the server.';

        return $dictionary;
    }
}
