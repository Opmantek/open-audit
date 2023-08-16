<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use \stdClass;

class NetworksModel extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('networks');
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
    public function create($data = null): ?int
    {
        if (empty($data)) {
            return null;
        }
        $data = $this->createFieldData('networks', $data);
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return null;
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
        return array();
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        // TODO - Get devices et al.
        return array();
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
        $properties[] = 'networks.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'networks.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
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
        // $query = $this->builder->getWhere(['id' => intval($id)]);
        // if ($this->sqlError($this->db->error())) {
        //     return array();
        // }
        // $result = $query->getResult();
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = implode(',', $org_list);

        $sql = "SELECT networks.*, COUNT(DISTINCT devices.id) as `device_count`, orgs.id AS `orgs.id`, orgs.name AS `org_name`, clouds.id AS `clouds.id`, clouds.name AS `clouds.name`, locations.id AS `locations.id`, locations.name AS `locations.name` FROM networks LEFT JOIN ip ON (networks.network = ip.network) LEFT JOIN devices ON (devices.id = ip.device_id AND devices.org_id IN ($org_list)) LEFT JOIN orgs ON (networks.org_id = orgs.id) LEFT JOIN clouds ON (networks.cloud_id = clouds.id) LEFT JOIN locations ON (networks.location_id = locations.id) WHERE networks.id = ?";
        $query = $this->db->query($sql, [$id]);
        // log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
        if (empty($query)) {
            return array();
        }
        $result = $query->getResult();

        $network = network_details($result[0]->network);
        $result[0]->ip_total_count = @intval($network->hosts_total);
        $result[0]->ip_available_count = $result[0]->ip_total_count - $result[0]->device_count;

        // Get the DHCP Servers for this network
        $sql = "SELECT DISTINCT(network.dhcp_server) FROM devices LEFT JOIN ip ON (devices.id = ip.device_id AND ip.current = 'y') LEFT JOIN network ON (ip.mac = network.mac) WHERE devices.org_id IN ({$org_list}) AND network.dhcp_server != '' ORDER BY network.dhcp_server";
        $dhcp_result = $this->db->query($sql)->getResult();
        $dhcp_servers = array();
        foreach ($dhcp_result as $dhcp_entry) {
            if (@ip_address_to_db($dhcp_entry->dhcp_server) >= @ip_address_to_db($network->host_min) and @ip_address_to_db($dhcp_entry->dhcp_server) <= @ip_address_to_db($network->host_max)) {
                $dhcp_servers[] = $dhcp_entry->dhcp_server;
            }
        }
        $dhcp_servers = array_unique($dhcp_servers);
        $result[0]->dhcp_servers = implode(', ', $dhcp_servers);

        // Get the DNS Servers for this network
        $sql = "SELECT DISTINCT(network.dns_server) FROM devices LEFT JOIN ip ON (devices.id = ip.device_id AND ip.current = 'y') LEFT JOIN network ON (ip.mac = network.mac) WHERE devices.org_id IN ({$org_list}) AND network.dns_server != '' ORDER BY network.dns_server";
        $dns_result = $this->db->query($sql)->getResult();
        $dns_servers = array();
        foreach ($dns_result as $dns_entry) {
            $dns_items = explode(',', $dns_entry->dns_server);
            foreach ($dns_items as $dns_item) {
                if (@ip_address_to_db(trim($dns_item)) >= @ip_address_to_db($network->host_min) && @ip_address_to_db(trim($dns_item)) <= @ip_address_to_db($network->host_max)) {
                    $dns_servers[] = $dns_item;
                }
            }
        }
        $dns_servers = array_unique($dns_servers);
        $result[0]->dns_servers = implode(', ', $dns_servers);

        // Get the Gateways for this network
        $sql = "SELECT DISTINCT(route.next_hop) FROM devices LEFT JOIN route ON (route.device_id = devices.id AND route.current= 'y') WHERE devices.org_id IN ({$org_list}) AND route.next_hop != '' AND route.next_hop != '0.0.0.0' ORDER BY route.next_hop";
        $gateway_result = $this->db->query($sql)->getResult();
        $gateways = array();
        foreach ($gateway_result as $gateway) {
            if (@ip_address_to_db($gateway->next_hop) >= @ip_address_to_db($network->host_min) && @ip_address_to_db($gateway->next_hop) <= @ip_address_to_db($network->host_max)) {
                $gateways[] = $gateway->next_hop;
            }
        }
        $gateways = array_unique($gateways);
        $result[0]->gateways = implode(', ', $gateways);

        return format_data($result, 'networks');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
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
     * @param  object  $data The data attributes
     *
     * @return bool    true || false depending on success
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
     * @param  object  $data The data attributes
     *
     * @return bool    true || false depending on success
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
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'networks';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'network', 'description', 'orgs.name');
        $dictionary->attributes->create = array('network'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->about = '<p>A network is derived from discovery entries and device attribtes.<br /><br />Open-AudIT can be configured to only accept audit results from the networks contained here. To set this go to the configuration and set the attribute <code>blessed_subnets_use</code>.<br /><br />For more detailed information, check the Open-AudIT <a href="https://community.opmantek.com/display/OA/networks">Knowledge Base</a>.<br /><br /></p>';
        $dictionary->notes = '<p>The network should be in the format 192.168.1.0/24.<br /><br /></p>';

        $dictionary->product = 'community';

        // Set the below directly for when we don't call using a normal user, via CLI discovery
        $dictionary->columns->id = 'The identifier column (integer) in the database (read only).';
        $dictionary->columns->name = 'The name given to this item. Ideally it should be unique.';
        $dictionary->columns->org_id = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';
        $dictionary->columns->description = 'Your description of this item.';
        // $dictionary->columns->id = $instance->dictionary->id;
        // $dictionary->columns->name = $instance->dictionary->name;
        // $dictionary->columns->org_id = $instance->dictionary->org_id;
        // $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->network = 'The network in the format 192.168.1.0/24.';
        $dictionary->columns->type = "One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.";
        $dictionary->columns->external_ident = 'The ID retrieved from a Cloud discovery.';
        $dictionary->columns->cloud_id = 'The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.';
        $dictionary->columns->environment = 'One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing';
        $dictionary->columns->gateways = 'Derived from device audits.';
        $dictionary->columns->network_domain = 'A routing domain or address space where the IP addresses and MAC addresses are unique.';
        $dictionary->columns->security_zone = 'A security zone is a administrative domain or policy domain within the Network Domain.';
        $dictionary->columns->admin_status = 'One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.';
        $dictionary->columns->location_id = 'The Location that contains this network. Links to <code>locations.id</code>.';
        $dictionary->columns->options = 'A JSON object populated via a Cloud discovery.';
        // Not in schema, but populated in GUI of Pro/Ent.
        $dictionary->columns->dhcp_servers = 'Derived from device audits.';
        $dictionary->columns->dns_servers = 'Derived from device audits.';
        $dictionary->columns->ip_total_count = 'The total number of valid IP addresses for this network.';
        $dictionary->columns->device_count = 'Populated using discovery.';
        $dictionary->columns->ip_available_count = 'Calculated from discovery.';
        // Set the below directly for when we don't call using a normal user, via CLI discovery
        $dictionary->columns->edited_by = 'The name of the user who last changed or added this item (read only).';
        $dictionary->columns->edited_date = 'The date this item was changed or added (read only). NOTE - This is the timestamp from the server.';
        // $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        // $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
