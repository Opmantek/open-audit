<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class CloudsModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('clouds');
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
        $config = new \Config\OpenAudit();
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
        $query = $this->builder->get()->getResult();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        if ($config->decrypt_credentials === 'y') {
            $count = count($query);
            for ($i = 0; $i < $count; $i++) {
                if (!empty($query[$i]->credentials)) {
                    try {
                        $query[$i]->credentials = json_decode(simpleDecrypt($query[$i]->credentials, config('Encryption')->key), false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $e) {
                        log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                    }
                }
            }
        }
        return format_data($query, $resp->meta->collection);
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
        if (! empty($data->credentials) && is_string($data->credentials)) {
            $data->credentials = (string)simpleEncrypt($data->credentials, config('Encryption')->key);
        } else {
            $data->credentials = (string)simpleEncrypt(json_encode($data->credentials), config('Encryption')->key);
        }
        if (! empty($data->options)) {
            $data->options = json_encode($data->options);
        }
        $data = $this->createFieldData('clouds', $data);
        if (empty($data)) {
            return null;
        }
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return null;
        }
        $id = intval($this->db->insertID());

        # The discovery
        $instance = & get_instance();
        $instance->discoveriesModel = new \App\Models\DiscoveriesModel();
        $discovery = new \stdClass();
        $discovery->type = 'cloud';
        $discovery->name = 'Discovery for ' . $data->name;
        $discovery->network_address = 'http://127.0.0.1/open-audit/index.php/input/discoveries';
        $discovery->org_id = $data->org_id;
        $discovery->discard = 'n';
        $discovery->complete = 'n';
        $discovery->subnet = '';
        $discovery->cloud_id = $id;
        $discovery->cloud_name = $data->name;
        $instance->discoveriesModel->create($discovery);

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
        // Delete any related discoveries
        $sql = "DELETE FROM `discoveries` WHERE `cloud_id` = ?";
        $this->db->query($sql, [$id]);

        $sql = "DELETE FROM `tasks` WHERE `sub_resource_id` = ? AND `type` = 'clouds'";
        $this->db->query($sql, [$id]);

        $sql = 'DELETE FROM `cloud_log` WHERE `cloud_id` = ?';
        $this->db->query($sql, [$id]);

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
    public function includedCollection(int $id = 0): array
    {
        $included = array();
        $included['devices_retrieved'] = 0;
        $included['devices_audited'] = 0;
        $included['devices_not_audited'] = 0;
        $included['devices_running'] = 0;
        $included['devices_stopped'] = 0;
        $included['locations'] = 0;
        $included['networks'] = 0;

        $sql = "SELECT * FROM devices WHERE cloud_id != ''";
        $devices = $this->db->query($sql, [$id])->getResult();
        $included['devices_retrieved'] = count($devices);
        foreach ($devices as $device) {
            if ($device->serial !== '') {
                $included['devices_audited'] += 1;
            } else {
                $included['devices_not_audited'] += 1;
            }
            if ($device->instance_state === 'running') {
                $included['devices_running'] += 1;
            } else {
                $included['devices_stopped'] += 1;
            }
        }

        $sql = "SELECT count(*) AS `count` FROM locations WHERE cloud_id != ''";
        $included['locations'] = intval($this->db->query($sql, [$id])->getResult()[0]->count);

        $sql = "SELECT count(*) AS `count` FROM networks WHERE cloud_id != ''";
        $included['networks'] = intval($this->db->query($sql, [$id])->getResult()[0]->count);

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
        $included = array();
        $sql = "SELECT * FROM cloud_log WHERE cloud_id = ? ORDER BY id";
        $included['logs'] = $this->db->query($sql, [$id])->getResult();

        $included['stats'] = new stdClass();
        $included['stats']->devices_retrieved = 0;
        $included['stats']->devices_audited = 0;
        $included['stats']->devices_not_audited = 0;
        $included['stats']->devices_running = 0;
        $included['stats']->devices_stopped = 0;
        $included['stats']->locations = 0;
        $included['stats']->networks = 0;
        $included['stats']->last_run = '';
        $included['stats']->duration = '';

        $sql = "SELECT COUNT(*) as `count` FROM `locations` WHERE `cloud_id` = ?";
        $included['stats']->locations = intval($this->db->query($sql, [$id])->getResult()[0]->count);

        $sql = "SELECT COUNT(*) as `count` FROM `networks` WHERE `cloud_id` = ?";
        $included['stats']->networks = intval($this->db->query($sql, [$id])->getResult()[0]->count);

        $sql = "SELECT `timestamp` FROM `cloud_log` WHERE `cloud_id` = ? ORDER BY `id` ASC LIMIT 1";
        $temp = $this->db->query($sql, [$id])->getResult();
        $included['stats']->last_run = (!empty($temp)) ? $temp[0]->timestamp : '';
        $finished = $included['stats']->last_run;

        $date = new \DateTime($included['stats']->last_run);
        $date2 = new \DateTime($finished);
        $included['stats']->duration = $date2->getTimestamp() - $date->getTimestamp();

        $sql = "SELECT devices.id AS `devices.id`, devices.ip AS `devices.ip`, devices.name AS `devices.name`, devices.type AS `devices.type`, devices.os_group AS `devices.os_group`, devices.icon AS `devices.icon`, devices.serial AS `devices.serial`, devices.instance_state AS `devices.instance_state` FROM `devices` WHERE devices.cloud_id = ?";
        $query = $this->db->query($sql, [$id]);
        $devices = $query->getResult();
        $count = count($devices);
        for ($i = 0; $i < $count; $i++) {
            $devices[$i]->{'devices.padded_ip'} = $devices[$i]->{'devices.ip'};
            $devices[$i]->{'devices.ip'} = ip_address_from_db($devices[$i]->{'devices.ip'});
            $included['stats']->devices_retrieved += 1;
            if (!empty($devices[$i]->serial)) {
                $included['stats']->devices_audited += 1;
            } else {
                $included['stats']->devices_not_audited += 1;
            }
            if ($devices[$i]->{'devices.instance_state'} === 'running') {
                $included['stats']->devices_running += 1;
            } else {
                $included['stats']->devices_stopped += 1;
            }
        }
        $included['devices'] = $devices;

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
        return array();
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
        $properties[] = 'clouds.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'clouds.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'clouds');
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
        $config = new \Config\OpenAudit();
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $cloud = $query->getResult();
        if (!empty($cloud[0]->options)) {
            try {
                $cloud[0]->options = json_decode($cloud[0]->options, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
        } else {
            $cloud[0]->options = new \stdClass();
            $cloud[0]->options->ssh = 'y';
            $cloud[0]->options->wmi = 'y';
            $cloud[0]->options->snmp = 'n';
        }
        if ($config->decrypt_credentials === 'y') {
            if (!empty($cloud[0]->credentials)) {
                try {
                    $cloud[0]->credentials = json_decode(simpleDecrypt($cloud[0]->credentials, config('Encryption')->key), false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
            }
        }
        return format_data($cloud, 'clouds');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('clouds')) {
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

        if (!empty($data->credentials) or !empty($data->options)) {
            $query = $this->builder->getWhere(['id' => intval($id)]);
            $get_result = $query->getResult();
        }

        if (!empty($data->credentials)) {
            $received_credentials = new \stdClass();
            foreach ($data->credentials as $key => $value) {
                    $received_credentials->$key = $value;
            }
            try {
                $existing_credentials = json_decode(simpleDecrypt($get_result[0]->credentials, config('Encryption')->key), false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
            $new_credentials = new \stdClass();
            foreach ($existing_credentials as $key => $value) {
                if (!empty($received_credentials->$key)) {
                    $new_credentials->$key = $received_credentials->$key;
                } else {
                    $new_credentials->$key = $existing_credentials->$key;
                }
            }
            $data->credentials = (string)simpleEncrypt(json_encode($new_credentials), config('Encryption')->key);
        }
        if (!empty($data->options)) {
            $options = json_decode($get_result[0]->options);
            foreach ($data->options as $key => $value) {
                $options->{$key} = $value;
            }
            $data->options = json_encode($options);
        }
        $data = $this->updateFieldData('clouds', $data);
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

        $collection = 'clouds';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'type', 'description', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','type','credentials','options'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Open-AudIT can discover and audit your cloud-based virtual machines. You provide the credentials and Open-AudIT will query the Amazon or Microsoft APIs to determine what devices you have, their state, any associated networks and locations and then run discovery upon each cloud instance. You get all the regular Open-AudIT details, but now you also get cloud-specific details like size.';

        $dictionary->about = '<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br /><br /><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br /><br />' . $instance->dictionary->link . '<br /><br />Credentials for your cloud (<a href="' . url_to('helpFAQ') . '?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="' . url_to('helpFAQ') . '?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br><br></p>';

        $dictionary->notes = "<p>If you intend to completely audit your cloud machines, don't forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br /><br /></p>";

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->credentials = 'Your access credentials, as per that clouds native API.';
        $dictionary->columns->type = 'Either Amazon, Google or Microsoft.';
        $dictionary->columns->status = 'The current status of the Cloud Discovery.';
        $dictionary->columns->options = 'Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.';
        $dictionary->columns->snmp = 'Should we test for SNMP using UDP port 161.';
        $dictionary->columns->ssh = 'Should we test for SSH using TCP port 21.';
        $dictionary->columns->wmi = 'Should we test for WMI using TCP port 135.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        # AWS
        $dictionary->columns->key = 'Your AWS EC2 API key.';
        $dictionary->columns->secret_key = 'The secret key used in conjunction with your AWS EC2 API key.';
        # Azue
        $dictionary->columns->subscription_id = 'Your Microsoft Azure Subscription ID.';
        $dictionary->columns->tenant_id = 'Your Microsoft Azure Tennant ID.';
        $dictionary->columns->client_id = 'Your Microsoft Azure Client ID.';
        $dictionary->columns->client_secret = 'Your Microsoft Azure Client Secret.';
        # Google Compute
        $dictionary->columns->json = 'Your Google Compute credentials as JSON.';

        return $dictionary;
    }
}
