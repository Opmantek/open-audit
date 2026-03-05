<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class NetworksModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'networks' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('networks');
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
        $properties[] = "locations.name as `locations.name`";
        $properties[] = "locations.id as `locations.id`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        $this->builder->join('locations', $resp->meta->collection . '.location_id = locations.id', 'left');
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
        $data = $this->createFieldData('networks', $data);
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
     * @param  int|null $id    The ID of the network to delete
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
     * Unused
     * @param  integer $id The ID of the group
     * @return array       An array of standard formatted devices, or an empty array
     */
    public function execute(int $id = 0, ?object $user = null): array
    {
        return array();
    }

    /**
     * Return supplementary data for a single network's read view
     *
     * @param  int   $id The ID of the network whose supplementary data to load
     *
     * @return array     An array of supplementary data for the read view
     */
    public function includedRead(int $id = 0): array
    {
        $included = array();
        $included['devices'] = array();
        $query = $this->builder->getWhere(['id' => $id]);
        if (empty($query)) {
            return $included;
        }
        $result = $query->getResult();
        $network = $result[0]->network;
        $network_details = network_details($network);
        $network_details->host_min = ip_address_to_db($network_details->host_min);
        $network_details->host_max = ip_address_to_db($network_details->host_max);
        $instance = & get_instance();
        $org_list = $instance->orgsModel->getUserDescendants([$result[0]->org_id], $instance->orgs);
        $org_list[] = $result[0]->org_id;
        $org_list = implode(',', $org_list);
        $sql = "SELECT devices.id, MAX(devices.icon) AS `icon`, devices.type, MAX(devices.name) AS `name`, MAX(devices.dns_fqdn) AS `dns_fqdn`, MAX(devices.domain) AS `domain`, ip.ip AS `ip.ip`, MAX(ip.last_seen) AS `ip.last_seen`, MAX(ip.mac) AS `ip.mac`, MAX(ip.set_by) AS `ip.set_by`, MAX(devices.os_family) AS `os_family`, MAX(devices.status) AS `status`, MAX(network.connection) AS `network.connection` FROM devices LEFT JOIN ip ON (devices.id = ip.device_id AND ip.current = 'y') LEFT JOIN network ON (ip.mac = network.mac AND devices.id = network.device_id) WHERE (ip.network = ? OR (ip.ip >= ? AND ip.ip <= ?)) AND devices.org_id IN ($org_list) GROUP BY ip.ip, devices.id ORDER BY ip.ip";
        $devices = $this->db->query($sql, [(string)$network, $network_details->host_min, $network_details->host_max])->getResult();
        $included['devices'] = format_data($devices, 'devices');

        $included['locations'] = array();
        $locationsModel = new \App\Models\LocationsModel();
        $included['locations'] = $locationsModel->listUser();

        $included['discovery'] = 0;

        // The first time we try to match subnet and org
        $sql = "SELECT id FROM discoveries WHERE subnet = ? AND discoveries.org_id = ?";
        $discoveryResult = $this->db->query($sql, [(string)$network, intval($result[0]->org_id)])->getResult();
        if (!empty($discoveryResult)) {
            $included['discovery'] = intval($discoveryResult[0]->id);
        }
        // If above fails, try to match subnet and any allowed org
        if (empty($included['discovery'])) {
            $sql = "SELECT id FROM discoveries WHERE subnet = ? AND discoveries.org_id IN ($org_list)";
            $discoveryResult = $this->db->query($sql, [(string)$network])->getResult();
            if (!empty($discoveryResult)) {
                $included['discovery'] = intval($discoveryResult[0]->id);
            }
        }

        return $included;
    }

    /**
     * Return supplementary data for the network collection view
     *
     * @return array  An array of supplementary data for the collection view
     */
    public function includedCollection(): array
    {
        $included = array();

        $sql = "SELECT DISTINCT (SUBSTRING_INDEX(networks.network,'/',-1)) AS `cidr`, count(*) as `count` FROM networks GROUP BY cidr ORDER BY CAST(cidr AS INT)";
        $included['cidrs'] = $this->db->query($sql)->getResult();

        $sql = "SELECT DISTINCT type, COUNT(*) as `count` FROM networks GROUP BY type ORDER BY type";
        $included['types'] = $this->db->query($sql)->getResult();

        $sql = "SELECT COUNT(*) AS `count`, 'discoveries' AS `discoveries` FROM networks WHERE edited_by = 'auto-generated by discoveries::index'";
        $included['discoveries'] = intval($this->db->query($sql)->getResult()[0]->count);

        $sql = "SELECT COUNT(*) AS `count`, 'collectors' AS `collectors` FROM networks WHERE description like '%collector address%'";
        $included['collectors'] = intval($this->db->query($sql)->getResult()[0]->count);

        $sql = "SELECT COUNT(*) AS `count`, 'devices' AS `devices` FROM networks WHERE description = 'Inserted from audit result.'";
        $included['devices'] = intval($this->db->query($sql)->getResult()[0]->count);

        $sql = "SELECT COUNT(*) AS `count`, 'clouds' AS `clouds` FROM networks WHERE options != ''";
        $included['clouds'] = intval($this->db->query($sql)->getResult()[0]->count);
        return $included;
    }

    /**
     * Return supplementary data for the network create/edit form (stub)
     *
     * Reserved for future implementation. Currently returns an empty array;
     * no data is fetched from the database.
     *
     * @param  int   $id Unused; present for interface compatibility
     *
     * @return array     An empty array
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
    }

    /**
     * Read every network from the database with no org-based filtering
     *
     * Returns all rows from the `networks` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every network row
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
     * @return array        An array of formatted networks entries
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
        $properties[] = 'networks.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'networks.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $this->builder->orderBy('networks.name', 'ASC');
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'networks');
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
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = implode(',', $org_list);

        $sql = "SELECT networks.*, COUNT(DISTINCT devices.id) as `device_count`, orgs.id AS `orgs.id`, orgs.name AS `org_name`, clouds.id AS `clouds.id`, clouds.name AS `clouds.name`, locations.id AS `locations.id`, locations.name AS `locations.name` FROM networks LEFT JOIN ip ON (networks.network = ip.network) LEFT JOIN devices ON (devices.id = ip.device_id AND ip.current = 'y' AND devices.org_id IN ($org_list)) LEFT JOIN orgs ON (networks.org_id = orgs.id) LEFT JOIN clouds ON (networks.cloud_id = clouds.id) LEFT JOIN locations ON (networks.location_id = locations.id) WHERE networks.id = ?";
        $query = $this->db->query($sql, [$id]);
        if (empty($query)) {
            return array();
        }
        $result = $query->getResult();

        $network = network_details($result[0]->network);
        $result[0]->ip_total_count = @intval($network->hosts_total);
        $result[0]->ip_available_count = $result[0]->ip_total_count - $result[0]->device_count;

        // Get the DHCP Servers for this network
        $result[0]->dhcp_servers = '';
        $sql = "SELECT GROUP_CONCAT(DISTINCT(network.dhcp_server) SEPARATOR ', ') AS `dhcp_server` FROM devices LEFT JOIN network ON (devices.id = network.device_id and network.current = 'y') WHERE devices.org_id IN ($org_list) AND network.dhcp_server != '' AND INET_ATON(network.dhcp_server) >= INET_ATON(?) AND INET_ATON(network.dhcp_server) <= INET_ATON(?) GROUP BY network.dhcp_server ORDER BY network.dhcp_server";
        $dhcp_results = $this->db->query($sql, [$network->host_min, $network->host_max])->getResult();
        if (!empty($dhcp_results[0]->dhcp_server)) {
            $result[0]->dhcp_servers = $dhcp_results[0]->dhcp_server;
        }

        // Get the DNS Servers for this network
        $result[0]->dns_servers = '';
        $sql = "SELECT GROUP_CONCAT(DISTINCT(network.dns_server) SEPARATOR ', ') AS `dns_server` FROM devices LEFT JOIN network ON (devices.id = network.device_id and network.current = 'y') WHERE devices.org_id IN ($org_list) AND network.dns_server != '' AND INET_ATON(network.dns_server) >= INET_ATON(?) AND INET_ATON(network.dns_server) <= INET_ATON(?) ORDER BY network.dns_server";
        $dns_results = $this->db->query($sql, [$network->host_min, $network->host_max])->getResult();
        if (!empty($dns_results[0]->dns_server)) {
            $result[0]->dns_servers = $dns_results[0]->dns_server;
        }

        // Get the Gateways for this network
        $result[0]->gateways = '';
        $sql = "SELECT GROUP_CONCAT(DISTINCT(route.next_hop) SEPARATOR ', ') AS `gateway` FROM devices LEFT JOIN route ON (route.device_id = devices.id AND route.current= 'y') WHERE devices.org_id IN ($org_list) AND route.next_hop != '' AND route.next_hop != '0.0.0.0' AND INET_ATON(route.next_hop) >= INET_ATON(?) AND INET_ATON(route.next_hop) <= INET_ATON(?) ORDER BY route.next_hop";
        $gateway_results = $this->db->query($sql, [$network->host_min, $network->host_max])->getResult();
        if (!empty($gateway_results[0]->gateway)) {
            $result[0]->gateways = $gateway_results[0]->gateway;
        }

        return format_data($result, 'networks');
    }

    /**
     * Truncate the networks table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'networks' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('networks')) {
            return true;
        }
        return false;
    }

    /**
     * Update an individual item in the database
     *
     * @param  int|null          $id   The ID of the network to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        $data = $this->updateFieldData('networks', $data);
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
     * @param  object|array|null $data The data attributes
     *
     * @return bool            true on success, false on failure
     */
    public function upsert($data = null): ?int
    {
        if (empty($data) or (empty($data->network) and empty($data->name))) {
            return null;
        }
        $data->network = (empty($data->network)) ? $data->name : $data->network;
        $data->name = (empty($data->name)) ? $data->network : $data->name;
        $data->org_id = (empty($data->org_id)) ? 1 : $data->org_id;
        $data->location_id = (empty($data->location_id)) ? 1 : $data->location_id;
        $query = $this->builder->getWhere(['org_id' => intval($data->org_id), 'network' => $data->network]);
        $row = $query->getRow();
        if (is_null($row)) {
            // the network does not exist, create it
            $id = $this->create($data);
            if (!empty($id)) {
                return $id;
            } else {
                return null;
            }
        } else {
            // This network exists, return false
            return null;
        }
    }

    /**
     * Build and return the data dictionary for the networks collection
     *
     * Constructs a stdClass describing the `networks` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('networks')
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
        helper('utility');
        $instance = & get_instance();

        $collection = 'networks';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'network', 'description', 'orgs.name');
        $dictionary->attributes->create = array('network'); # We MUST have each of these present and assigned a value # TODO - wiki says name, org_id, network. Check this.
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Open-AudIT stores your networks and in addition, provides a secure mechanism for accepting input data.';

        $dictionary->about = '<p>A network is derived from discovery entries and device attributes.<br> <br></p>';
        $dictionary->notes = '<p>The network should be in the format 192.168.1.0/24.<br> <br></p>';

        $dictionary->link = @$instance->dictionary->link;
        $dictionary->product = 'community';
        // Set the below directly for when we don't call using a normal user, via CLI discovery
        $dictionary->columns->id = 'The identifier column (integer) in the database (read only).';
        $dictionary->columns->name = 'The name given to this item. Ideally it should be unique.';
        $dictionary->columns->org_id = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';
        $dictionary->columns->description = 'Your description of this item.';
        $dictionary->columns->network = 'The network in the format 192.168.1.0/24.';
        $dictionary->columns->type = 'One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';
        $dictionary->columns->external_ident = 'The ID retrieved from a Cloud discovery.';
        $dictionary->columns->cloud_id = 'The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.';
        $dictionary->columns->environment = 'One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing';
        $dictionary->columns->gateways = 'Populated from device audits.';
        $dictionary->columns->network_domain = 'A routing domain or address space where the IP addresses and MAC addresses are unique.';
        $dictionary->columns->security_zone = 'A security zone is a administrative domain or policy domain within the Network Domain.';
        $dictionary->columns->admin_status = 'One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.';
        $dictionary->columns->location_id = 'The Location that contains this network. Links to <code>locations.id</code>.';
        $dictionary->columns->options = 'A JSON object populated via a Cloud discovery.';
        // Not in schema, but populated in GUI of Pro/Ent.
        $dictionary->columns->dhcp_servers = 'Derived from device audits.';
        $dictionary->columns->dns_servers = 'Derived from device audits.';
        $dictionary->columns->ip_total_count = 'Calculated total number of valid IP addresses for this network.';
        $dictionary->columns->device_count = 'Calculated from discovery.';
        $dictionary->columns->ip_available_count = 'Calculated from discovery.';
        // Set the below directly for when we don't call using a normal user, via CLI discovery
        $dictionary->columns->edited_by = 'The name of the user who last changed or added this item (read only).';
        $dictionary->columns->edited_date = 'The date this item was changed or added (read only). NOTE - This is the timestamp from the server.';
        return $dictionary;
    }
}
