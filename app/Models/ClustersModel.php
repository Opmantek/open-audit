<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class ClustersModel extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('clusters');
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
        return format_data($query->getResult(), $resp->meta->collection);
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
        $data = $this->createFieldData('clusters', $data);
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
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list[] = 1;
        $org_list = array_unique($org_list);

        $clusters = $this->read($id);
        $cluster = $clusters[0];
        $return = array();

        $attributesModel = new \App\Models\AttributesModel();
        $return = array();
        $types = $attributesModel->listUser(['attributes.type', 'environment']);
        $return['types'] = $types;

        if ($cluster->attributes->purpose === 'virtualisation') {
            $sql = "SELECT
                        devices.id AS `devices.id`,
                        devices.name AS `devices.name`,
                        (devices.memory_count / 1024) AS `devices.memory_count`,
                        devices.ip AS `devices.ip`,
                        devices.os_family AS `devices.os_family`,
                        devices.icon AS `devices.icon`,
                        processor.hyperthreading AS `processor.hyperthreading`,
                        processor.physical_count AS `processor.physical_count`,
                        processor.core_count AS `processor.core_count`,
                        processor.logical_count AS `processor.logical_count`,
                        clusters_devices.role AS `clusters_devices.role`,
                        clusters_devices.id AS `clusters_devices.id`
                    FROM
                        devices,
                        (SELECT device_id, JSON_EXTRACT(components.details, '$.physical_count') AS `physical_count`, JSON_EXTRACT(components.details, '$.core_count') AS `core_count`, JSON_EXTRACT(components.details, '$.logical_count') AS `logical_count`, JSON_UNQUOTE(JSON_EXTRACT(components.details, '$.hyperthreading')) AS `hyperthreading` FROM components WHERE components.current = 'y' AND components.type = 'processor') AS processor,
                        clusters_devices
                    WHERE
                        clusters_devices.clusters_id = " . intval($id) . " AND
                        clusters_devices.devices_id = devices.id AND
                        processor.device_id = devices.id AND
                        devices.org_id IN (" . implode(',', $org_list) . ")";
            $query = $this->db->query($sql);
            if ($this->sqlError($this->db->error())) {
                return array();
            }
            $return['members'] = format_data($query->getResult(), 'devices');

            $sql = "SELECT
                        components.device_id AS `devices.id`,
                        devices.name AS `devices.name`,
                        (devices.memory_count / 1024) AS `devices.memory_count`,
                        devices.ip AS `devices.ip`,
                        devices.os_family AS `devices.os_family`,
                        devices.icon AS `devices.icon`,
                        GROUP_CONCAT(DISTINCT JSON_UNQUOTE(JSON_EXTRACT(components.details, '$.name')) ORDER BY JSON_EXTRACT(components.details, '$.name') ASC SEPARATOR ', ') AS `servers`
                    FROM 
                        components
                    LEFT JOIN
                        clusters_devices ON components.device_id = clusters_devices.devices_id
                    LEFT JOIN
                        devices ON components.device_id = devices.id
                    WHERE
                        components.type = 'server' AND
                        clusters_devices.clusters_id = " . intval($id) . " AND
                        devices.org_id IN (" . implode(',', $org_list) . ")
                    GROUP BY
                        components.device_id";

            $sql = "SELECT
                        components.device_id AS `host.id`,
                        components.details AS `details`
                    FROM
                        components
                    LEFT JOIN
                        clusters_devices ON clusters_devices.devices_id = components.device_id
                    WHERE
                        components.type = 'vm'";

            $sql = "SELECT
                        devices.id AS `host.id`,
                        devices.name AS `host.name`,
                        components.details AS `details`
                    FROM
                        components
                    LEFT JOIN
                        clusters_devices ON clusters_devices.devices_id = components.device_id
                    LEFT JOIN
                        devices ON clusters_devices.devices_id = devices.id
                    WHERE
                        components.type = 'vm'";

            $query = $this->db->query($sql);
            if ($this->sqlError($this->db->error())) {
                return array();
            }
            $guests = $query->getResult();
            foreach ($guests as &$guest) {
                $guest->details = json_decode($guest->details);
                if (!empty($guest->details->guest_device_id)) {
                    $sql = "SELECT id, hostname, ip, os_family, icon FROM devices WHERE id = " . intval($guest->details->guest_device_id);
                    $query = $this->db->query($sql);
                    $details = $query->getResult();
                    $guest->hostname = $details[0]->hostname;
                    $guest->ip = $details[0]->ip;
                    $guest->os_family = $details[0]->os_family;
                    $guest->icon = $details[0]->icon;

                    $sql = "SELECT GROUP_CONCAT(DISTINCT JSON_UNQUOTE(JSON_EXTRACT(components.details, '$.name')) ORDER BY JSON_EXTRACT(components.details, '$.name') ASC SEPARATOR ', ') AS `servers` FROM components WHERE components.type = 'server' AND components.device_id = " . intval($guest->details->guest_device_id);
                    $query = $this->db->query($sql);
                    $details = $query->getResult();
                    $guest->servers = $details[0]->servers;
                }
            }

            if ($this->sqlError($this->db->error())) {
                return array();
            }
            $return['guests'] = $guests;
        }


        if ($cluster->attributes->purpose !== 'virtualisation') {
            $sql = "SELECT 
                        clusters_devices.role AS `clusters_devices.role`,
                        devices.id AS `host.id`,
                        devices.name AS `host.name`, 
                        devices.ip AS `host.ip`, 
                        components.id AS `components.id`,
                        JSON_UNQUOTE(JSON_EXTRACT(components.details, '$.status')) AS `vm.status`, 
                        if (devices.icon != '', devices.icon, JSON_UNQUOTE(JSON_EXTRACT(components.details, '$.icon'))) AS `vm.icon`, 
                        JSON_EXTRACT(components.details, '$.guest_device_id') AS `vm.devices_id`,
                        JSON_EXTRACT(components.details, '$.cpu_count') AS `vm.cpu_count`, 
                        JSON_UNQUOTE(JSON_EXTRACT(components.details, '$.memory_count')) AS `vm.memory_count`, 
                        JSON_UNQUOTE(JSON_EXTRACT(components.details, '$.name')) AS `vm.name`
                    FROM 
                        clusters_devices,
                        devices,
                        components
                    WHERE
                        clusters_devices.clusters_id = " . intval($id) . " AND
                        clusters_devices.devices_id = devices.id AND
                        devices.org_id IN (" . implode(',', $org_list) . ") AND
                        devices.id = components.device_id AND
                        components.type = 'vm'";

            $sql = preg_replace('!\s+!', ' ', $sql);
            $query = $this->db->query($sql);
            $result = $query->getResult();
            for ($i=0; $i < count($result); $i++) {
                    $result[$i]->{'guest.id'} = '';
                    $result[$i]->{'guest.name'} = '';
                    $result[$i]->{'guest.os_family'} = '';
                    $result[$i]->{'guest.servers'} = '';
                if (!empty($result[$i]->{'vm.devices_id'})) {
                    # Get the guest details
                    $sql = "SELECT name, os_family, icon FROM devices WHERE id = " . intval($result[$i]->{'vm.devices_id'});
                    $query = $this->db->query($sql);
                    $vm_result = $query->getResult();
                    $result[$i]->{'guest.id'} = intval($result[$i]->{'vm.devices_id'});
                    $result[$i]->{'guest.name'} = $vm_result[0]->name;
                    $result[$i]->{'guest.os_family'} = $vm_result[0]->os_family;
                    # Get the guest server(s) running on the guest
                    $sql = "SELECT JSON_UNQUOTE(JSON_EXTRACT(components.details, '$.name')) AS `server` FROM components WHERE type = 'server' AND device_id = " . intval($result[$i]->{'vm.devices_id'});
                    $query = $this->db->query($sql);
                    $vm_result = $query->getResult();
                    $servers = array();
                    if (!empty($vm_result)) {
                        foreach ($vm_result as $item) {
                            $servers[] = $item->server;
                        }
                    }
                    $result[$i]->{'guest.servers'} = implode(', ', $servers);
                }
            }

            if ($this->sqlError($this->db->error())) {
                return array();
            }
            $return['devices'] = format_data($result, 'devices');
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
    public function listUser($where = array()): array
    {
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list[] = 1;
        $org_list = array_unique($org_list);

        $properties = array();
        $properties[] = 'clusters.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'clusters.org_id = orgs.id', 'left');
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
        return format_data($query->getResult(), 'clusters');
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
        return format_data($query->getResult(), 'clusters');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('clusters')) {
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
        $data = $this->updateFieldData('clusters', $data);
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

        $collection = 'clusters';
        $dictionary = new \StdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new \StdClass();

        $dictionary->attributes = new \StdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'type', 'purpose', 'status', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->about = '<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '';

        $dictionary->product = 'professional';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->type = "Can be 'high availability','load balancing','performance','storage','other' or blank.";
        $dictionary->columns->purpose = "Can be 'application','compute','database','storage','virtualisation','web','other' or blank.";
        $dictionary->columns->status = "Can be 'active', 'passive' or blank.";
        $dictionary->columns->configuration = "The configuration of your cluster can be: 'active/active','active/passive','N+1','N+M','N-to-1','N-to-N','other' or blank.";
        $dictionary->columns->environment = 'As per the attributes for device environments. Production, Training, et al.';
        $dictionary->columns->scaling = "Can be 'auto', 'fixed', 'other' or blank.";
        $dictionary->columns->retrieved_name = 'unused';
        $dictionary->columns->retrieved_ident = 'unused';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
