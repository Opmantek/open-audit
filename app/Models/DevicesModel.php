<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class DevicesModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('devices');
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
        // First run the requested query, but only retrieve count(*) and use that for recordsFiltered for dataTables (stored in GLOBAL)
        // Second, rebuild the query including all properties and return that result as data
        if (!empty($instance->config->license_limit) and $instance->config->device_known > intval($instance->config->license_limit * 1.1)) {
            log_message('warning', 'Restricting Devices to the first ' . $instance->config->license_limit . ' devices as per license. There are actually ' . $instance->config->device_known . ' licensed devices in the database.');
            $resp->warning = 'Restricting Devices to the first ' . $instance->config->license_limit . ' devices as per license. There are actually ' . $instance->config->device_known . ' licensed devices in the database.';

            $subquery = $this->db->table('devices');
            $subquery->orderBy('devices.id');
            $subquery->limit(intval($instance->config->license_limit));
            $this->builder = $this->db->newQuery()->fromSubquery($subquery, 'devices');
        }

        // Get the row count
        $this->builder->select('count(*) AS `count`', false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        $this->builder->join('locations', $resp->meta->collection . '.location_id = locations.id', 'left');
        $joined_tables = array();
        foreach ($resp->meta->filter as $filter) {
            if ($filter->name === 'search') {
                $this->builder->where('(devices.name LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.ip LIKE ' . $this->db->escape(ip_address_to_db($filter->value)) .
                    ' OR devices.hostname LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.domain LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.dns_hostname LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.dns_domain LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.sysName LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.type LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.model LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.manufacturer LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.os_family LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.os_name LIKE ' . $this->db->escape($filter->value) .
                    ')');
                continue;
            }
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                if ($filter->name === 'devices.tags' and $filter->operator === '=') {
                    $filter->function = 'like';
                    $filter->operator = '';
                    $filter->value = '"' . $filter->value . '"';
                }
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
            $joined_table = explode('.', $filter->name);
            if (count($joined_table) === 2 and $joined_table[0] !== 'devices' and $joined_table[0] !== 'system' and $joined_table[0] !== 'orgs' and $joined_table[0] !== 'locations') {
                $joined_tables[] = $joined_table[0];
            }
        }
        $joined_tables = array_unique($joined_tables);
        if (!empty($joined_tables)) {
            foreach ($joined_tables as $joined_table) {
                $this->builder->join($joined_table, "devices.id = $joined_table.device_id", 'left');
            }
        }
        // log_message('debug', str_replace("\n", " ", (string)$this->builder->getCompiledSelect(false)));
        $query = $this->builder->get();
        $result = $query->getResult();
        $GLOBALS['recordsFiltered'] = 0;
        if (isset($result[0]->count)) {
            $GLOBALS['recordsFiltered'] = intval($result[0]->count);
        }

        // Second - rebuild the query (including requested properties) and return the result as data
        // Get the actual row data
        $this->builder = $this->db->table('devices');
        if (!empty($instance->config->license_limit) and $instance->config->device_known > intval($instance->config->license_limit * 1.1)) {
            log_message('warning', 'Restricting Devices to the first ' . $instance->config->license_limit . ' devices as per license. There are actually ' . $instance->config->device_known . ' licensed devices in the database.');
            $resp->warning = 'Restricting Devices to the first ' . $instance->config->license_limit . ' devices as per license. There are actually ' . $instance->config->device_known . ' licensed devices in the database.';

            $subquery = $this->db->table('devices');
            $subquery->orderBy('devices.id');
            $subquery->limit(intval($instance->config->license_limit));
            $this->builder = $this->db->newQuery()->fromSubquery($subquery, 'devices');
        }
        $properties = $resp->meta->properties;
        $count = count($properties);
        for ($i = 0; $i < $count; $i++) {
            if (strpos($properties[$i], 'devices.') === false) {
                $properties[$i] = $properties[$i] . ' AS `' . $properties[$i] . '`';
            }
        }
        // Add these two properties so we can determine audit_status
        $properties[] = "devices.type as `devices.type`";
        $properties[] = "devices.last_seen_by as `devices.last_seen_by`";

        $properties[] = "devices.id as `devices.id`";
        if (!in_array('orgs.name', $properties)) {
            $properties[] = "orgs.name as `orgs.name`";
            $resp->meta->properties[] = 'orgs.name';
        }
        if (!in_array('orgs.id', $properties)) {
            $properties[] = "orgs.id as `orgs.id`";
            $resp->meta->properties[] = 'orgs.id';
        }

        if (!in_array('locations.name', $properties)) {
            $properties[] = "locations.name as `locations.name`";
            $resp->meta->properties[] = 'locations.name';
        }
        if (!in_array('locations.id', $properties)) {
            $properties[] = "locations.id as `locations.id`";
            $resp->meta->properties[] = 'locations.id';
        }
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        $this->builder->join('locations', $resp->meta->collection . '.location_id = locations.id', 'left');
        $joined_tables = array();
        foreach ($resp->meta->filter as $filter) {
            if ($filter->name === 'search') {
                $this->builder->where('(devices.name LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.ip LIKE ' . $this->db->escape(ip_address_to_db($filter->value)) .
                    ' OR devices.hostname LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.domain LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.dns_hostname LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.dns_domain LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.sysName LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.type LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.model LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.manufacturer LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.os_family LIKE ' . $this->db->escape($filter->value) .
                    ' OR devices.os_name LIKE ' . $this->db->escape($filter->value) .
                    ')');
                continue;
            }
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                if ($filter->name === 'devices.tags' and $filter->operator === '=') {
                    $filter->function = 'like';
                    $filter->operator = '';
                    $filter->value = '"' . $filter->value . '"';
                }
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
            $joined_table = explode('.', $filter->name);
            if (count($joined_table) === 2 and $joined_table[0] !== 'devices' and $joined_table[0] !== 'system' and $joined_table[0] !== 'orgs' and $joined_table[0] !== 'locations') {
                $joined_tables[] = $joined_table[0];
            }
        }
        $joined_tables = array_unique($joined_tables);
        if (!empty($joined_tables)) {
            foreach ($joined_tables as $joined_table) {
                $this->builder->join($joined_table, "devices.id = $joined_table.device_id", 'left');
            }
        }
        // Note that the below code uses lots of 'else' statements.
        // This is because if we don't use else statements and set a default orderBy
        // then change it based on the 'if', the orderBy's are chained, not replaced
        if (!empty($instance->resp->meta->sort)) {
            if (strpos($instance->resp->meta->sort, 'devices.ip') !== false) {
                if (strpos($instance->resp->meta->sort, ' DESC') === false) {
                    $this->builder->orderBy('INET_ATON(devices.ip) DESC');
                } else {
                    $this->builder->orderBy('INET_ATON(devices.ip)');
                }
            } else {
                $this->builder->orderBy($resp->meta->sort);
            }
        } else {
            $this->builder->orderBy('devices.id');
        }
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        log_message('debug', str_replace("\n", " ", (string)$this->builder->getCompiledSelect(false)));
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $query->getResult();
        $result = formatQuery($result);
        $count = count($result);

        if (isset($result[0]->{'devices.type'}) and isset($result[0]->{'devices.last_seen_by'})) {
            for ($i = 0; $i < $count; $i++) {
                $result[$i]->audit_status = '';
                $result[$i]->audit_class = '';
                $result[$i]->audit_text = '';
                # BAD
                if ($result[$i]->{'devices.last_seen_by'} === 'nmap' and ($result[$i]->{'devices.type'} === 'unclassified' or $result[$i]->{'devices.type'} === 'unknown')) {
                    $result[$i]->audit_class = 'fa fa-times text-danger';
                    $result[$i]->audit_text = 'Nmap discovered, data retrieval will be very limited.';
                # NOT GOOD
                } elseif ($result[$i]->{'devices.last_seen_by'} === 'nmap' and $result[$i]->{'devices.type'} !== 'unclassified' and $result[$i]->{'devices.type'} !== 'unknown') {
                    $result[$i]->audit_class = 'fa fa-exclamation-triangle text-warning';
                    $result[$i]->audit_text = 'Last discovery only Nmap worked. This may be an issue, or it may be a device of a type we cannot audit.';
                } elseif ($result[$i]->{'devices.last_seen_by'} === 'cloud') {
                    $result[$i]->audit_class = 'fa fa-exclamation-triangle text-warning';
                    $result[$i]->audit_text = 'Cloud import, data retrieval will be very limited.';
                } elseif ($result[$i]->{'devices.last_seen_by'} === 'integrations') {
                    $result[$i]->audit_class = 'fa fa-exclamation-triangle text-warning';
                    $result[$i]->audit_text = 'Integration import, data retrieval will be very limited.';
                } elseif ($result[$i]->{'devices.type'} === 'computer' and ($result[$i]->{'devices.last_seen_by'} === 'ssh' or $result[$i]->{'devices.last_seen_by'} === 'windows' or $result[$i]->{'devices.last_seen_by'} === 'wmi' or $result[$i]->{'devices.last_seen_by'} === 'snmp')) {
                    $result[$i]->audit_class = 'fa fa-exclamation-triangle text-warning';
                    $result[$i]->audit_text = 'Partially discovered computer. Data retrieval limited.';
                } elseif ($result[$i]->{'devices.last_seen_by'} === 'web form') {
                    $result[$i]->audit_class = 'fa fa-exclamation-triangle text-warning';
                    $result[$i]->audit_text = 'Manually created ' . $result[$i]->{'devices.type'} . '. Data retrieval limited.';
                # GOOD
                } elseif ($result[$i]->{'devices.type'} === 'computer' and ($result[$i]->{'devices.last_seen_by'} === 'audit_wmi' or $result[$i]->{'devices.last_seen_by'} === 'audit_ssh')) {
                    $result[$i]->audit_class = 'fa fa-check text-success';
                    $result[$i]->audit_text = 'Discovered and audited computer.';
                } elseif ($result[$i]->{'devices.type'} === 'computer' and $result[$i]->{'devices.last_seen_by'} === 'audit') {
                    $result[$i]->audit_class = 'fa fa-check text-success';
                    $result[$i]->audit_text = 'Audited computer.';
                } elseif ($result[$i]->{'devices.type'} === 'san' and $result[$i]->{'devices.last_seen_by'} === 'audit') {
                    $result[$i]->audit_class = 'fa fa-check text-success';
                    $result[$i]->audit_text = 'Audited SAN.';
                } elseif ($result[$i]->{'devices.type'} !== 'computer' and !empty($result[$i]->snmp_oid)) {
                    $result[$i]->audit_class = 'fa fa-check text-success';
                    $result[$i]->audit_text = 'Discovered and audited ' . $result[$i]->{'devices.type'} . '.';
                # BAD - FALLBACK
                } else {
                    $result[$i]->audit_class = 'fa fa-question text-danger';
                    $result[$i]->audit_text = 'Limited information available.';
                }
                $result[$i]->audit_status = '<span class="' . $result[$i]->audit_class . '" title="' . $result[$i]->audit_text . '"></span>';
            }
        }

        if (isset($result[0]->tags)) {
            for ($i = 0; $i < $count; $i++) {
                if (!empty($result[$i]->tags)) {
                    try {
                        $result[$i]->tags = json_decode($result[$i]->tags, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $e) {
                        log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                        $result[$i]->tags = array();
                    }
                }
                if (empty($result[$i]->tags)) {
                    $result[$i]->tags = array();
                }
            }
        }

        return format_data($result, $resp->meta->collection);
    }

    /**
     * Derive a name for this device from the hostname, sysName, dns hostname or IP
     *
     * @param  object   $device The device attributes
     *
     * @return string   The derived name or an empty string
     */
    public function deriveName(object $device = null): string
    {
        if (empty($device)) {
            return '';
        }
        if (empty($device->hostname) and empty($device->sysName) and empty($device->dns_hostname) and empty($device->ip)) {
            return '';
        }
        $name = '';
        if (!empty($device->hostname)) {
            $name = $device->hostname;
        } elseif (!empty($device->sysName)) {
            $name = $device->sysName;
        } elseif (!empty($device->dns_hostname)) {
            $name = $device->dns_hostname;
        } elseif (!empty($data->ip)) {
            $name = ip_address_from_db($device->ip);
        }
        $name = strtolower($name);
        if (strpos($name, '.') !== false and filter_var($name, FILTER_VALIDATE_IP) === false) {
            // We have a name, not an IP, that contains a 'dot'. Split it and use the first item as the name.
            $temp = explode('.', $name);
            $name = $temp[0];
        }
        return $name;
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

        $parameters = new \stdClass();
        $parameters->input = $data;
        if (!empty($data->discovery_id)) {
            $parameters->discovery_id = intval($data->discovery_id);
        }
        $parameters->ip = @$data->ip;
        $data = audit_format_system($parameters);
        // Ensure we have a name
        if (empty($data->name)) {
            $data->name = '';
            $name = $this->deriveName($data);
            if (!empty($name)) {
                $data->name = $name;
            }
            unset($name);
        }
        if (empty($data->name) and !empty($data->ip)) {
            $data->name = ip_address_from_db($data->ip);
        }
        if (empty($data->name)) {
            $data->name = 'name unknown';
        }
        if (empty($data->org_id)) {
            $data->org_id = 1;
        }
        if (!empty($data->last_seen)) {
            $data->first_seen = $data->last_seen;
        }
        if (empty($data->last_seen)) {
            $instance = get_instance();
            $data->last_seen = $instance->config->timestamp;
            $data->first_seen = $data->last_seen;
        }
        $lower = array('hostname', 'domain', 'fqdn', 'dns_hostname', 'dns_domain', 'dns_fqdn');
        foreach ($lower as $column) {
            if (!empty($data->{$column})) {
                $data->{$column} =  strtolower($data->{$column});
            }
        }
        $data = $this->createFieldData('devices', $data);
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return null;
        }
        $id = intval($this->db->insertID());
        // Set the device icon
        reset_icons($id);

        $sql = "INSERT INTO change_log VALUES (null, ?, 'devices', ?, 'create', 'Item added to devices', '', '2000-01-01 00:00:00', '', '', '', null, '', NOW())";
        $this->db->query($sql, [$id, $id]);

        $weight = weight($data->last_seen_by);
        $disallowed_fields = array('id', 'icon', 'sysUpTime', 'uptime', 'last_seen', 'first_seen', 'instance_options', 'credentials', 'discovery_id');
        foreach ($data as $key => $value) {
            if (!empty($value) and !in_array($key, $disallowed_fields)) {
                $edit_sql = "INSERT INTO edit_log VALUES (NULL, 0, ?, 'Data was changed', ?, ?, 'devices', ?, ?, ?, '')";
                $query = $this->db->query($edit_sql, [intval($id), $data->last_seen_by, $weight, $key, $data->last_seen, $value]);
            }
        }
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

    public function setIdentification(int $id = 0): bool
    {
        $identification = '';
        $sql = 'SELECT * FROM `devices` WHERE `id` = ?';
        $result = $this->db->query($sql, [$id])->getResult();
        if (!empty($result)) {
            $device = $result[0];
        } else {
            return false;
        }
        // Based on type
        if ($device->type !== 'unknown' && $device->type !== 'unclassified') {
            if ($device->type === 'computer' && $device->class !== '') {
                $identification = ucfirst($device->class);
            } elseif ($device->type === 'computer' && $device->os_group !== '') {
                $identification = 'Computer running ' . $device->os_group;
            } else {
                if ($device->type !== 'iphone' && $device->type !== 'ipod' && $device->type !== 'ipad') {
                    $identification = ucfirst($device->type);
                } else {
                    $identification = $device->type;
                }
            }
        }
        // Add the manufactuer
        if ($device->manufacturer !== '') {
            if ($identification !== '') {
                $identification .= ' from ' . $device->manufacturer;
            } else {
                $identification = 'Vendor: ' . $device->manufacturer;
            }
        }
        // Only resort to the Nmap ports if we have to
        if ($identification === '') {
            $sql = "SELECT * FROM nmap WHERE device_id = ? and current = 'y'";
            $nmap_ports = $this->db->query($sql, [$id])->getResult();
            if (!empty($nmap_ports)) {
                foreach ($nmap_ports as $port) {
                    if ($port->program === 'ssh') {
                        $identification = 'Device running SSH';
                    }
                    if ($port->program === 'snmp') {
                        if ($identification === '') {
                            $identification = 'Device running SNMP';
                        } else {
                            $identification .= ' and SNMP';
                        }
                    }
                    if ($port->program === 'msrpc') {
                        if ($identification === '') {
                            $identification = 'Device running WMI (likely a Windows computer)';
                        } else {
                            $identification .= ' and WMI (likely a Windows computer)';
                        }
                    }
                }
            }
        }
        if (!empty($identification)) {
            if (empty($device->type) or $device->type === 'unknown') {
                $sql = "UPDATE `devices` SET `type` = 'unclassified', `icon` = 'unclassified', `identification` = ? WHERE `id` = ?";
            } else {
                $sql = "UPDATE `devices` SET `identification` = ? WHERE `id` = ?";
            }
        } else {
            $identification = 'No information could be retrieved.';
            $sql = "UPDATE `devices` SET `identification` = ? WHERE `id` = ?";
            if (empty($device->type)) {
                $sql = "UPDATE `devices` SET `identification` = ?, `type` = 'unknown' WHERE `id` = ?";
            }
        }
        $query = $this->db->query($sql, [$identification, $id]);
        return true;
    }

    public function includedBulkUpdate(): array
    {
        $include = array();

        $attributesModel = new \App\Models\AttributesModel();
        $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'class']);
        $include['class'] = $attributes;
        $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'environment']);
        $include['environment'] = $attributes;
        $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'status']);
        $include['status'] = $attributes;
        $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'type']);
        $include['type'] = $attributes;

        $fieldsModel = new \App\Models\FieldsModel();
        $include['fields'] = $fieldsModel->listUser();

        $locationsModel = new \App\Models\LocationsModel();
        $include['locations'] = $locationsModel->listUser();

        $orgsModel = new \App\Models\OrgsModel();
        $include['orgs'] = $orgsModel->listUser();

        return $include;
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
        $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));

        $included = array();
        // No excecutable, file, radio, san, scsi, usb
        $current = array('antivirus', 'arp', 'audit_log', 'bios', 'change_log', 'cli_config', 'disk', 'dns', 'edit_log', 'file', 'firewall', 'firewall_rule', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'route', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');

        if (!empty($instance->config->feature_executables) and $instance->config->feature_executables === 'y') {
            $current = array('antivirus', 'arp', 'audit_log', 'bios', 'change_log', 'cli_config', 'disk', 'dns', 'edit_log', 'file', 'firewall', 'firewall_rule', 'executable', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'route', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
        }

        foreach ($current as $table) {
            if (!$this->db->tableExists($table)) {
                continue;
            }
            $sql = "SELECT count(*) AS `count` FROM `$table` LEFT JOIN `devices` ON $table.device_id = devices.id WHERE devices.org_id IN (" . implode(',', $orgs) . ")";
            $query = $this->db->query($sql);
            $result = $query->getResult();
            $included[$table] = intval($result[0]->count);
        }
        return $included;
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
        $resp_include = array();

        if ($instance->resp->meta->include === 'all') {
            $instance->resp->meta->include = '';
        }
        if (!empty($instance->resp->meta->include) and $instance->resp->meta->include !== 'all') {
            $resp_include = explode(',', $instance->resp->meta->include);
        }

        $include = array();
        $current = array('access_point', 'antivirus', 'arp', 'bios', 'certificate', 'cli_config', 'disk', 'dns', 'executable', 'file', 'firewall', 'firewall_rule', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'san', 'scsi', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'warranty', 'windows');
        foreach ($current as $table) {
            if (!$this->db->tableExists($table)) {
                continue;
            }
            if (empty($resp_include) or in_array($table, $resp_include)) {
                $sql = "SELECT * FROM `$table` WHERE device_id = ? and current = 'y'";
                $query = $this->db->query($sql, $id);
                $result = $query->getResult();
                if (!empty($result)) {
                    $include[$table] = $result;
                }
            }
        }

        if ($this->db->tableExists('arp')) {
            // $sql = "SELECT arp.*, ip.device_id AS `ip.device_id` FROM `arp` LEFT JOIN `ip` ON (arp.mac = ip.mac AND INET_ATON(arp.ip) = INET_ATON(ip.ip)) WHERE arp.device_id = ? and arp.current = 'y'";
            $sql = "SELECT arp.*, ip.device_id AS `ip.device_id` FROM `arp` LEFT JOIN `ip` ON (arp.mac = ip.mac) WHERE arp.device_id = ? and arp.current = 'y' GROUP BY arp.mac";
            $query = $this->db->query($sql, $id);
            $result = $query->getResult();
            if (!empty($result)) {
                $include['arp'] = $result;
            }
        }

        if (!empty($include['cli_config'])) {
            $sql = "SELECT d.* FROM cli_config d WHERE d.last_seen IN (SELECT max(d2.last_seen) FROM cli_config d2 WHERE d2.name = d.name AND d2.current = 'n' and d2.device_id = ?)";
            $query = $this->db->query($sql, $id);
            $result = $query->getResult();
            if (!empty($result)) {
                $include['cli_config_non_current'] = $result;
            }

            if (!empty($include['cli_config_non_current'])) {
                helper('diff');
                $output = '';
                foreach ($include['cli_config'] as $cli_config) {
                    $cli_config->config = (!empty(json_decode($cli_config->config))) ? json_encode(json_decode($cli_config->config), JSON_PRETTY_PRINT) : $cli_config->config;
                    $date = $date = '<div class="card-header col-12 clearfix"><h6>' . $cli_config->name . '&nbsp;&nbsp;on&nbsp;&nbsp;' . $cli_config->last_seen . '</h6></div>';
                    foreach ($include['cli_config_non_current'] as $cli_config_non_current) {
                        if ($cli_config->name === $cli_config_non_current->name) {
                            $date = '<div class="card-header col-6 clearfix"><h6>' . $cli_config->name . '&nbsp;&nbsp;on&nbsp;&nbsp;' . $cli_config->last_seen . '</h6></div><div class="card-header col-6 clearfix"><h6>' . $cli_config->name . '&nbsp;&nbsp;on&nbsp;&nbsp;' .  $cli_config_non_current->last_seen . '</h6></div>';
                        }
                    }
                    $output .= '<div class="card col-10 offset-1" style="margin-bottom:20px;">
                                        <div class="row">
                                            ' . $date . '
                                        </div>
                                    <div class="card-body">
                                        <div class="row text-center" style="overflow-y:scroll; height:12em;">';
                    $hit = false;
                    foreach ($include['cli_config_non_current'] as $cli_config_non_current) {
                        if ($cli_config->name === $cli_config_non_current->name) {
                            $diffClass = new \App\Helpers\Diff();
                            $cli_config_non_current->config = (!empty(json_decode($cli_config_non_current->config))) ? json_encode(json_decode($cli_config_non_current->config), JSON_PRETTY_PRINT) : $cli_config_non_current->config;
                            $table_output = $diffClass->toTable($diffClass->compare($cli_config->config, $cli_config_non_current->config));
                            $temp = str_replace('<table class="diff">', '<table class="diff font-monospace text-start" style="width:100%; font-size:.8em;">', $table_output);
                            $temp = str_replace('<td ', '<td style="padding:4px; spacing:4px;  white-space:pre-wrap;" width="50%" ', $temp);
                            $output .= $temp;
                            $hit = true;
                        }
                    }
                    if (!$hit) {
                        $output .= '<div class="text-start col-6 font-monospace" style="font-size:.8em; white-space:pre-wrap;">' . $cli_config->config . '</div>';
                    }
                    $output .= '</div></div></div>';
                }
                $include['cli_config_diff'] = $output;
            }
        }

        if (!empty($include['ip'])) {
            $count = count($include['ip']);
            for ($i = 0; $i < $count; $i++) {
                $include['ip'][$i]->ip_padded = $include['ip'][$i]->ip;
                $include['ip'][$i]->ip = ip_address_from_db($include['ip'][$i]->ip);
            }
        }

        $sql = "SELECT server.*, certificate.id AS `certificate.id` FROM `server` LEFT JOIN certificate ON (server.certificates = certificate.name and server.device_id = certificate.device_id and certificate.current = 'y') WHERE server.device_id = ? and server.current = 'y'";
        $query = $this->db->query($sql, $id);
        $result = $query->getResult();
        if (!empty($result)) {
            $include['server'] = $result;
        }


        $no_current = array('attachment', 'audit_log', 'change_log', 'credential', 'edit_log', 'image');
        foreach ($no_current as $table) {
            if (empty($resp_include) or in_array($table, $resp_include)) {
                $sql = "SELECT `$table`.*, devices.name AS `devices.name` FROM `$table` LEFT JOIN devices ON (`$table`.device_id = devices.id) WHERE device_id = ?";
                $query = $this->db->query($sql, $id);
                $result = $query->getResult();
                if (!empty($result)) {
                    $include[$table] = $result;
                }
            }
        }

        $sql = "SELECT `rack_devices`.*, devices.name AS `devices.name`, racks.name AS `racks.name`, locations.name AS `locations.name`, locations.id AS `locations.id` FROM `rack_devices` LEFT JOIN devices ON (rack_devices.device_id = devices.id) LEFT JOIN `racks` ON (rack_devices.rack_id = racks.id) LEFT JOIN `locations` ON (racks.location_id = locations.id) WHERE device_id = ?";
        $query = $this->db->query($sql, $id);
        $result = $query->getResult();
        if (!empty($result)) {
            $include['rack_devices'] = $result;
        } else {
            $blank_rack = new stdClass();
            $blank_rack->{'rack_id'} = 0;
            $blank_rack->{'position'} = 0;
            $blank_rack->{'racks.name'} = 'Not in a rack';
            $blank_rack->{'locations.name'} = '';
            $blank_rack->{'locations.id'} = 0;
            $include['rack_devices'][] = $blank_rack;
        }



        $sql = "SELECT `application`.*, applications.name AS `applications.name`, applications.description AS `applications.description` FROM `application` LEFT JOIN applications ON (`application`.application_id = applications.id) WHERE application.device_id = ?";
        $query = $this->db->query($sql, $id);
        $result = $query->getResult();
        if (!empty($result)) {
            $include['application'] = $result;
        }


        $sql = "SELECT `clusters`.*, `cluster`.`role`, `cluster`.`id` AS `cluster.id` FROM `clusters` RIGHT JOIN `cluster` ON `clusters`.`id` = `cluster`.`cluster_id` WHERE `cluster`.`device_id` = ?";
        $query = $this->db->query($sql, $id);
        $result = $query->getResult();
        if (!empty($result)) {
            $include['cluster'] = $result;
        }

        if (empty($resp_include) or in_array('applications', $resp_include) or $instance->resp->meta->format === 'html') {
            $sql = "SELECT application.*, applications.name AS `applications.name`, applications.description AS `applications.description` FROM `application` LEFT JOIN applications ON (application.application_id = applications.id) WHERE application.device_id = ?";
            $query = $this->db->query($sql, $id);
            $result = $query->getResult();
            if (!empty($result)) {
                $include['application'] = $result;
            }
        }

        if (empty($resp_include) or in_array('discovery_log', $resp_include)) {
            $sql = "SELECT discovery_log.*, discoveries.name AS `discoveries.name` FROM `discovery_log` LEFT JOIN discoveries ON discovery_log.discovery_id = discoveries.id WHERE discovery_log.device_id = ?";
            $query = $this->db->query($sql, [$id]);
            $result = $query->getResult();
            if (!empty($result)) {
                $include['discovery_log'] = $result;
            }
        }

        $orgsModel = new \App\Models\OrgsModel();
        $instance = & get_instance();
        $user = $instance->user;
        $orgsList = implode(',', $orgsModel->getUserDescendants(explode(',', $user->org_list)));

        if (empty($resp_include) or in_array('field', $resp_include) or in_array('fields', $resp_include) or $instance->resp->meta->format === 'html') {
            $sql = "SELECT fields.*, field.id AS `field.id`, field.value AS `field.value`, field.device_id AS `field.device_id` FROM fields LEFT JOIN field on (field.field_id = fields.id AND field.device_id = ?) WHERE fields.org_id IN (" . $orgsList . ")";
            $query = $this->db->query($sql, [$id]);
            $result = $query->getResult();
            if (!empty($result)) {
                $include['fields'] = $result;
            }
        }

        if (empty($resp_include) or in_array('location', $resp_include) or $instance->resp->meta->format === 'html') {
            $sql = "SELECT * FROM locations WHERE org_id IN (" . $orgsList . ")";
            $query = $this->db->query($sql);
            $result = $query->getResult();
            if (!empty($result)) {
                $include['locations'] = format_data($result, 'locations');
            }
        }

        if (empty($resp_include) or in_array('attributes', $resp_include) or $instance->resp->meta->format === 'html') {
            $attributesModel = new \App\Models\AttributesModel();
            $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'class']);
            $include['class'] = $attributes;
            $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'environment']);
            $include['environment'] = $attributes;
            $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'status']);
            $include['status'] = $attributes;
            $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'type']);
            $include['type'] = $attributes;
        }

        if (empty($resp_include) or in_array('nmis', $resp_include) or in_array('firstwave', $resp_include) or $instance->resp->meta->format === 'html') {
            $include['nmis_business_services'] = array();
            $include['nmis_groups'] = array();
            $include['nmis_roles'] = array();
            $include['nmis_customers'] = array();
            $include['nmis_pollers'] = array();
            $integrationsModel = new \App\Models\IntegrationsModel();
            $integrations = $integrationsModel->listUser(['integrations.type', 'nmis']);
            if (!empty($integrations)) {
                foreach ($integrations as $integration) {
                    if (!empty($integration->attributes->additional_items->business_services)) {
                        foreach ($integration->attributes->additional_items->business_services as $item) {
                            $entry = new \stdClass();
                            $entry->id = $item;
                            $entry->type = 'nmis';
                            $entry->attributes = new \stdClass();
                            $entry->attributes->name = $item;
                            $include['nmis_business_services'][] = $entry;
                        }
                    }
                    if (!empty($integration->attributes->additional_items->groups)) {
                        foreach ($integration->attributes->additional_items->groups as $item) {
                            $entry = new \stdClass();
                            $entry->id = $item;
                            $entry->type = 'nmis';
                            $entry->attributes = new \stdClass();
                            $entry->attributes->name = $item;
                            $include['nmis_groups'][] = $entry;
                        }
                    }
                    if (!empty($integration->attributes->additional_items->roles)) {
                        foreach ($integration->attributes->additional_items->roles as $item) {
                            $entry = new \stdClass();
                            $entry->id = $item;
                            $entry->type = 'nmis';
                            $entry->attributes = new \stdClass();
                            $entry->attributes->name = $item;
                            $include['nmis_roles'][] = $entry;
                        }
                    }
                    if (!empty($integration->attributes->additional_items->customers)) {
                        foreach ($integration->attributes->additional_items->customers as $item) {
                            $entry = new \stdClass();
                            $entry->id = $item;
                            $entry->type = 'nmis';
                            $entry->attributes = new \stdClass();
                            $entry->attributes->name = $item;
                            $include['nmis_customers'][] = $entry;
                        }
                    }
                    if (!empty($integration->attributes->additional_items->pollers)) {
                        foreach ($integration->attributes->additional_items->pollers as $item) {
                            $entry = new \stdClass();
                            $entry->id = $item->cluster_id;
                            $entry->type = 'nmis';
                            $entry->attributes = new \stdClass();
                            $entry->attributes->name = $item->server_name;
                            $include['nmis_pollers'][] = $entry;
                        }
                    }
                }
            }
        }
        return $include;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedCreateForm(int $id = 0): array
    {
        $include = array();
        $attributesModel = new \App\Models\AttributesModel();
        $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'type']);
        $include['type'] = $attributes;

        $locationsModel = new \App\Models\LocationsModel();
        $include['locations'] = $locationsModel->listUser();

        return $include;
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
        $properties[] = 'devices.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'devices.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'devices');
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
        $device = $query->getResult();
        if (isset($device[0]->tags)) {
            if (!empty($device[0]->tags)) {
                try {
                    $device[0]->tags = json_decode($device[0]->tags, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
            }
            if (empty($device[0]->tags)) {
                $device[0]->tags = array();
            }
        }
        if (!empty($device[0]->instance_tags)) {
            try {
                $device[0]->instance_tags = json_decode($device[0]->instance_tags, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
        }
        if (!empty($device[0]->instance_options)) {
            try {
                $device[0]->instance_options = json_decode($device[0]->instance_options, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
        }
        return format_data($device, 'devices');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        $instance = get_instance();
        $status = '';
        $orgs = array();
        foreach ($instance->resp->meta->filter as $filter) {
            if ($filter->name === 'status') {
                $status = $filter->value;
            }
            if ($filter->name === 'devices.org_id') {
                $orgs = $filter->value;
            }
        }
        if (!empty($status) and !empty($orgs)) {
            $sql = "DELETE FROM devices WHERE status = ? AND org_id IN (" . implode(',', $orgs) . ")";
            $query = $this->db->query($sql, [$status]);
            $message = "Deleted " . $this->db->affectedRows() . " devices with status: $status.";
            \Config\Services::session()->setFlashdata('error', $message);
            log_message('info', $message);
        } else {
            if (empty($status)) {
                log_message('error', 'No devices deleted because status not provided.');
                \Config\Services::session()->setFlashdata('error', 'No devices deleted because status not provided.');
            }
            if (empty($orgs)) {
                log_message('error', 'No devices deleted because Orgs not calculated.');
                \Config\Services::session()->setFlashdata('error', 'No devices deleted because Orgs not calculated.');
            }
        }
        return true;
    }


    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function summary(): array
    {
        $instance = & get_instance();
        $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $orgs[] = 1;
        $orgs = array_unique($orgs);

        $include = array();
        $properties = array();
        $properties[] = 'devices.type AS `type`';
        $properties[] = 'COUNT(devices.type) AS `count`';
        $properties[] = 'devices.icon AS `icon`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'devices.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->groupBy('devices.type');
        $this->builder->orderBy('devices.type');
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $include['devices'] = format_data($query->getResult(), 'devices');


        $properties = array();
        $properties[] = 'devices.os_family';
        $properties[] = 'COUNT(devices.type) AS `count`';
        $properties[] = 'devices.icon AS `icon`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'devices.org_id = orgs.id', 'left');
        $this->builder->where('devices.os_family !=', '');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->groupBy('devices.os_family');
        $this->builder->orderBy('devices.os_family');
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $include['os'] = format_data($query->getResult(), 'devices');
        for ($i = 0; $i < count($include['os']); $i++) {
            if (file_exists(ROOTPATH . 'public/device_images/' . strtolower(str_replace(' ', '_', $include['os'][$i]->attributes->os_family)) . '.svg')) {
                $include['os'][$i]->attributes->icon = strtolower(str_replace(' ', '_', $include['os'][$i]->attributes->os_family));
            }
        }
        return $include;
    }

    /**
     * Update an individual item in the database
     *
     * @param int    $id   The device id
     * @param object $data The data attributes
     *
     * @return bool    true || false depending on success
     */
    public function update($id = null, $data = null): bool
    {
        if (empty($data->id) and empty($id)) {
            // Something went wrong - we SHOULD have an ID in an update routine
            // Possibly removed via audit_format_system (if the supplied ID belonged to a device with status == deleted)
            log_message('error', 'DevicesModel::update not supplied a device ID. ' . json_encode($data));
            return false;
        }

        if (empty($data)) {
            log_message('error', 'DevicesModel::update called, but no $data object supplied.');
            return false;
        }
        $instance = get_instance();
        $user_id = 0;
        if (!empty($instance->user->id)) {
            $user_id = intval($instance->user->id);
        }

        $log = new \stdClass();
        $log->severity = 7;
        $log->file = 'DevicesModel';
        $log->function = 'DevicesModel::update';
        $log->status = 'notice';
        $log->command_status = 'notice';
        $log->command = 'process audit';
        $log->summary = 'start function';
        if (!empty($id)) {
            $id = intval($id);
            $log->device_id = $id;
            $data->id = $id;
        } else {
            $log->device_id = $data->id;
            $id = intval($data->id);
        }
        $log->ip = '';
        if (!empty($data->ip)) {
            $data->ip = ip_address_to_db($data->ip);
            $log->ip = ip_address_from_db($data->ip);
        }
        $log->discovery_id = '';
        if (!empty($data->discovery_id)) {
            $log->discovery_id = $data->discovery_id;
            $GLOBALS['discovery_id'] = $data->discovery_id;
        } elseif (!empty($GLOBALS['discovery_id'])) {
            $log->discovery_id = $GLOBALS['discovery_id'];
        }

        $log->message = "System update start for ID: $id";
        $source = 'user';
        if (!empty($data->last_seen_by)) {
            $source = $data->last_seen_by;
        }

        if (empty($data->discovery_id)) {
            unset($data->discovery_id);
        }
        // Get tthe existing device data
        $query = $this->builder->getWhere(['id' => intval($id)]);
        $db_entry = $query->getRow();
        // Cater for a short hostname
        if (isset($data->last_seen_by) and ($data->last_seen_by === 'audit' or $data->last_seen_by === 'snmp')) {
            if (!empty($db_entry)) {
                if (strlen($db_entry->hostname) > 15 && isset($data->hostname) && strlen($data->hostname) === 15) {
                    unset($data->hostname);
                }
            }
        }
        $data->original_last_seen_by = (!empty($db_entry->last_seen_by)) ? $db_entry->last_seen_by : '';
        $data->original_last_seen = (!empty($db_entry->last_seen)) ? $db_entry->last_seen : '';
        $data->original_timestamp = (!empty($db_entry->last_seen)) ? $db_entry->last_seen : '';
        if (empty($data->timestamp) and !empty($data->last_seen)) {
            $data->timestamp = $data->last_seen;
        }
        if (empty($data->timestamp)) {
            $data->timestamp = $instance->config->timestamp;
        }
        $lower = array('hostname', 'domain', 'fqdn', 'dns_hostname', 'dns_domain', 'dns_fqdn');
        foreach ($lower as $column) {
            if (!empty($data->{$column})) {
                $data->{$column} =  strtolower($data->{$column});
            }
        }
        // Get the latest edit_log data
        $sql = "SELECT weight, db_column, MAX(timestamp) as `timestamp`, value, previous_value, source FROM edit_log WHERE device_id = ? AND `db_table` = 'devices' GROUP BY db_column, weight, value, previous_value, source ORDER BY id";
        $query = $this->db->query($sql, [$id]);
        $edit_log = $query->getResult();

        // if (in_array($source, ['audit', 'audit_ssh', 'audit_wmi', 'audit_windows', 'windows', 'wmi', 'cloud', 'nmis', 'snmp', 'ssh', 'integrations'])) {
        //     $name = $this->deriveName($data);
        //     if (!empty($name)) {
        //         $data->name = $name;
        //     }
        // }

        if ($source !== 'user' and $source !== 'rules') {
            $data->name = $this->deriveName($data);
        }

        // Get the database column names
        $fields = $this->db->getFieldNames('devices');
        // We do not compare these with the edit_log data
        $disallowed_fields = array('id', 'icon', 'sysUpTime', 'uptime', 'last_seen', 'last_seen_by', 'first_seen', 'instance_options', 'credentials');
        $update_device = new \stdClass();
        foreach ($data as $key => $value) {
            if (!empty($key)) {
                if ((isset($value) and $value !== '') or $source === 'user') {
                    // need to iterate through available columns and only insert where $key == valid column name
                    if (!in_array($key, $disallowed_fields) && in_array($key, $fields)) {
                        $previous_value = (!empty($db_entry->{$key})) ? $db_entry->{$key} : '';
                        // get the current weight from the edit_log
                        $previous_weight = 10000;
                        $count = count($edit_log);
                        for ($i = 0; $i < $count; $i++) {
                            if ($edit_log[$i]->db_column === $key) {
                                $previous_weight = intval($edit_log[$i]->weight);
                            }
                        }
                        // calculate the weight
                        $weight = intval(weight($source));
                        if (!is_string($value)) {
                            $value = json_encode($value);
                        }
                        if ($weight <= $previous_weight && (string)$value !== (string)$previous_value) {
                            $update_device->$key = $value;
                            $sql = "INSERT INTO edit_log VALUES (NULL, ?, ?, 'Data was changed', ?, ?, 'devices', ?, ?, ?, ?)";
                            $query = $this->db->query($sql, [$user_id, $id, $source, $weight, $key, $data->timestamp, $value, $previous_value]);
                        } else {
                            // We have an existing edit_log entry with a more important change - don't touch the `devices`.`$key` value
                        }
                    }
                }
            }
        }
        $statuses = array('deleted', 'lost', 'retired');
        if (in_array($source, ['nmap', 'ssh', 'snmp', 'cloud', 'wmi', 'windows', 'audit_wmi', 'audit_windows', 'audit']) and in_array($db_entry->status, $statuses)) {
            // We discovered a device, set its status to production
            $update_device->status = 'production';
            $sql = "INSERT INTO edit_log VALUES (NULL, ?, ?, 'Data was changed', ?, ?, 'devices', ?, ?, ?, ?)";
            $query = $this->db->query($sql, [$user_id, $id, $source, 2000, 'status', $data->timestamp, 'production', $db_entry->status]);
        }
        // Add our non-edit_log compared attributes to the data to be updated
        foreach ($data as $key => $value) {
            if ($key !== 'id' && in_array($key, $disallowed_fields)) {
                $update_device->$key = (string)$value;
            }
        }
        $update = $this->updateFieldData('devices', $update_device);
        $this->builder->where('id', intval($id));
        if (count((array)$update_device) > 0) {
            $this->builder->update($update_device);
        }
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        reset_icons($id);

        if (isset($data->mac_address) && $data->mac_address !== '' && isset($data->ip) && $data->ip !== '' && isset($data->subnet) && $data->subnet !== '') {
            // we need to check if we have an entry in `network` if we do not, but we have details (ex- an nmap device that previously existed but did not have a MAC, but now does)
            // we need to insert it. ideally this would have already been done when the device was initially discovered, but we cannot count on that.
            // need to check if an entry in `network` exists and if it does not AND we have details, insert something search for any entries in `ip`
            $sql = "SELECT * FROM ip WHERE device_id = ? AND mac = ? AND current = 'y' AND ip = ?";
            $query = $this->db->query($sql, [intval($id), "{$data->mac_address}", "{$data->ip}"]);
            $result = $query->getResult();
            $count = $query->getNumRows();
            if ($count === 0) {
                // no match - insert
                $sql = "INSERT INTO ip (id, device_id, current, first_seen, last_seen, mac, net_index, ip, netmask, version, network, set_by) VALUES(NULL, ?, 'y', ?, ?, ?, '', ?, ?, '', '', '')";
                $query = $this->db->query($sql, [intval($id), "{$data->timestamp}", "{$data->timestamp}", "{$data->mac_address}", "{$data->ip}", "{$data->subnet}"]);
            } else {
                // match - update timestamp only
                $sql = "UPDATE ip SET last_seen = ? WHERE device_id = ? AND mac = ? AND current = 'y' AND ip = ?";
                $query = $this->db->query($sql, ["{$data->timestamp}", $id, "{$data->mac_address}", "{$data->ip}"]);
            }
        }

        // Check if we have a matching entry in the vm table and update it if required
        if (!empty($data->uuid) and !empty($data->vm_uuid)) {
            $sql = "SELECT vm.id AS `vm.id`, vm.device_id AS `vm.device_id`, devices.hostname AS `devices.hostname` FROM vm, devices WHERE (LOWER(vm.uuid) = LOWER(?) OR LOWER(vm.uuid) = LOWER(?)) AND vm.uuid != '' AND vm.current = 'y' AND vm.device_id = devices.id;";
            $query = $this->db->query($sql, [$data->uuid, $data->vm_uuid]);
            if ($query->getNumRows() > 0) {
                $row = $query->getRow();
                $temp_vm_id = $row->{'vm.id'};
                $data->vm_device_id = $row->{'vm.device_id'};
                $data->vm_server_name = $row->{'devices.hostname'};
                $sql = "SELECT icon, 'vm' FROM devices WHERE id = ?";
                $query = $this->db->query($sql, [$id]);
                $row = $query->getRow();
                $data->icon = $row->icon;
                $myName = (!empty($data->name)) ? $data->name : '';
                if (empty($myName) and !empty($data->hostname)) {
                    $myName = $data->hostname;
                }
                $sql = 'UPDATE vm SET guest_device_id = ?, icon = ?, name = ? WHERE id = ?';
                $query = $this->db->query($sql, [$id, $data->icon, $myName, intval($temp_vm_id)]);
                $sql = 'UPDATE devices SET vm_device_id = ?, vm_server_name = ? WHERE id = ?';
                $query = $this->db->query($sql, [$data->vm_device_id, $data->vm_server_name, $data->id]);
            }
        }
        // Ensure we have an OrgID
        if (empty($data->org_id)) {
            $sql = 'SELECT org_id FROM devices WHERE id = ?';
            $query = $this->db->query($sql, [$id]);
            $row = $query->getRow();
            $data->org_id = $row->org_id;
        }
        // Add a count to our chart table, if source is not from a user change
        if ($source !== 'user') {
            $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), ?, ?, 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1";
            $query = $this->db->query($sql, [$source, $data->org_id]);
        }

        // Check and update any custom fields, if the supplied data key name == the fields.name
        $fieldsModel = new \App\Models\FieldsModel();
        // TODO - can we restrict this to only those fields from discoveries.org_id and lower by populating listUser([], $orgs) ?
        //      - The incoming data may be from a user (web interface) a discovery or an audit.
        $fields = $fieldsModel->listAll();
        $sql = "SELECT * FROM field WHERE device_id = ?";
        $deviceFields = $this->db->query($sql, [$id])->getResult();
        foreach ($fields as $field) {
            foreach ($data as $key => $value) {
                if ($key === $field->name) {
                    // We have a matching field - check for an existing value
                    $updated = false;
                    if (!empty($deviceFields)) {
                        foreach ($deviceFields as $deviceField) {
                            if (intval($field->id) === intval($deviceField->field_id)) {
                                $previous_value = (!empty($deviceField->value)) ? $deviceField->value : '';
                                $updated = true;
                                $sql = "UPDATE field SET value = ?, `timestamp` = NOW() WHERE id = ?";
                                $this->db->query($sql, [$value, $deviceField->id]);
                                $sql = "INSERT INTO edit_log VALUES (null, ?, ?, 'Field data was updated', ?, ?, 'field', ?, NOW(), ?, ?)";
                                $this->db->query($sql, [$user_id, $id, $source, 1000, $field->name, $value, $previous_value]);
                            }
                        }
                    }
                    if ($updated === false) {
                        // A new field - insert it
                        $sql = "INSERT INTO field VALUES (null, ?, ?, NOW(), ?)";
                        $this->db->query($sql, [$id, $field->id, $value]);
                        $sql = "INSERT INTO edit_log VALUES (null, ?, ?, 'Field data was created', ?, ?, 'field', ?, NOW(), ?, '')";
                        $this->db->query($sql, [$user_id, $id, $source, 1000, $field->name, $value]);
                    }
                }
            }
        }

        $log->message = 'System update end for ID: ' . $id;
        $log->summary = 'finish function';
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

        // TODO - When running cli -> queue_start -> ip_audit, the $instance->dictionary is not populated.
        //      - Hence the @'s below. Fix this and remove the @'s.

        $collection = 'devices';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = explode(',', $instance->config->devices_default_display_columns);
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default

        $dictionary->sentence = 'Open-AudIT tracks every device on your network. Change a device - see it. Move a device - see it. Remove a device - see it.';

        $dictionary->about = '<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br /><br />Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br /><br />Expand on the stored fields easily with your own custom attributes.<br /><br />Even add devices that aren\'t connected to your network or those devices your Open-AudIT server cannot reach.<br /><br />Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br /><br />' .  @$instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '';

        $dictionary->product = 'community';
        $dictionary->columns->id = @$instance->dictionary->id;
        $dictionary->columns->name = @$instance->dictionary->name;
        $dictionary->columns->description = @$instance->dictionary->description;
        $dictionary->columns->org_id = @$instance->dictionary->org_id;
        $dictionary->columns->uuid = 'Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';
        $dictionary->columns->status = 'Normally \'production\'.';
        $dictionary->columns->last_seen = 'The last time that Open-AudIT retrieved details of this device.';
        $dictionary->columns->last_seen_by = 'The process that was used last to retrieve details about the device';
        return $dictionary;
    }
}
