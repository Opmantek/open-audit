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
        return null;
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
        $types = $attributesModel->listUser(['attributes.type' => 'environment']);
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
                        cluster.role AS `cluster.role`,
                        cluster.id AS `cluster.id`,
                        'host' AS `type`
                    FROM
                        cluster
                    LEFT JOIN
                        devices ON (cluster.device_id = devices.id)
                    LEFT JOIN
                        processor ON (devices.id = processor.device_id)
                    WHERE
                        cluster.cluster_id = " . intval($id) . " AND
                        devices.org_id IN (" . implode(',', $org_list) . ")";

            $query = $this->db->query($sql);
            if ($this->sqlError($this->db->error())) {
                return array();
            }
            $return['members'] = format_data($query->getResult(), 'devices');

            $sql = 'SELECT devices.name AS `host.name`, vm.icon AS `vm.icon`, vm.name AS `vm.name`, vm.id AS `vm.id`, vm.guest_device_id AS `vm.guest_device_id`, vm.cpu_count AS `vm.cpu_count`, vm.memory_count AS `vm.memory_count`, vm.status AS `vm.status`, "guest" as `type`, GROUP_CONCAT(DISTINCT server.name ORDER BY server.name ASC SEPARATOR ", ") AS `guest.servers`, guest.os_family AS `guest.os_family`, guest.ip AS `guest.ip`, guest.icon AS `guest.icon` FROM `devices` LEFT JOIN `cluster` ON (`devices`.`id` = `cluster`.`device_id`) LEFT JOIN `vm` ON (`devices`.`id` = `vm`.`device_id` AND `vm`.`current` = "y") LEFT JOIN `server` ON vm.guest_device_id = `server`.`device_id` LEFT JOIN `devices` `guest` ON vm.guest_device_id = guest.id WHERE devices.org_id IN (' . implode(',', $org_list) . ') AND `cluster`.`cluster_id` = ? GROUP BY vm.guest_device_id, vm.icon, vm.name, devices.name, vm.id, vm.cpu_count, vm.memory_count, vm.status, guest.os_family, guest.ip ORDER BY vm.name';

            $query = $this->db->query($sql, [$id]);
            if ($this->sqlError($this->db->error())) {
                return array();
            }
            $guests = $query->getResult();
            foreach ($guests as $guest) {
                $guest->{'guest.ip_padded'} = $guest->{'guest.ip'};
                $guest->{'guest.ip'} = ip_address_from_db($guest->{'guest.ip'});
            }
            $return['guests'] = format_data($guests, 'devices');
        }


        if ($cluster->attributes->purpose !== 'virtualisation') {
            $sql = 'SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.description AS `devices.description`, devices.memory_count AS `devices.memory_count`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.icon AS `devices.icon`, processor.hyperthreading AS `processor.hyperthreading`, processor.physical_count AS `processor.physical_count`, processor.core_count AS `processor.core_count`, processor.logical_count AS `processor.logical_count`, cluster.role AS `cluster.role`, cluster.id AS `cluster.id`, GROUP_CONCAT(DISTINCT server.name ORDER BY server.name ASC SEPARATOR ", ") AS `servers` FROM `devices` LEFT JOIN `orgs` ON (`devices`.`org_id` = `orgs`.`id`) LEFT JOIN `cluster` ON (`devices`.`id` = `cluster`.`device_id`) LEFT JOIN `processor` ON (`devices`.`id` = `processor`.`device_id` AND `processor`.`current` = "y") LEFT JOIN `server` ON `devices`.`id` = `server`.`device_id` WHERE `orgs`.`id` IN (' . implode(',', $org_list) . ') AND `cluster`.`cluster_id` = ? GROUP BY `devices`.`id`, `processor`.`hyperthreading`, `processor`.`logical_count`, `cluster`.`role`';
            $query = $this->db->query($sql, [$id]);
            if ($this->sqlError($this->db->error())) {
                return array();
            }
            $result = $query->getResult();
            $count = count($result);
            for ($i = 0; $i < $count; $i++) {
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
        $attributesModel = new \App\Models\AttributesModel();
        $include = array();
        $include['environment'] = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'environment']);
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
        $properties[] = 'clusters.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'clusters.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
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
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'type', 'purpose', 'status', 'configuration', 'environment', 'scaling', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Open-AudIT enables you to create and record your clusters';

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
        $dictionary->columns->retrieved_name = 'Unused.';
        $dictionary->columns->retrieved_ident = 'Unused.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
