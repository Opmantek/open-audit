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
        $properties = $resp->meta->properties;
        $properties[] = "orgs.name as `orgs.name`";
        $properties[] = "orgs.id as `orgs.id`";
        # NOTE - need to add the false arguement to the below so we don't escape the `orgs.name` as `orgs`.`name` above
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'clouds.org_id = orgs.id', 'left');
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
        return format_data($query->getResult(), 'clouds');
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
        if (! empty($data->credentials) && is_string($data->credentials)) {
            $data->credentials = simpleEncrypt($data->credentials, config('Encryption')->key);
        } else {
            $data->credentials = simpleEncrypt(json_encode($data->credentials), config('Encryption')->key);
        }
        if (! empty($data->options)) {
            $data->options = json_encode($data->options);
        }
        $data = $this->createFieldData('clouds', $data);
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return false;
        }
        return ($this->db->insertID());

        # $id = intval($this->db->insertID());
        # The discovery
        // $instance = & get_instance();
        // $instance->discoveriesModel = new \App\Models\DiscoveriesModel;
        // $discovery = new stdClass();
        // $discovery->type = 'cloud';
        // $discovery->name = 'Discovery for ' . $data->name;
        // $discovery->network_address = 'http://127.0.0.1/open-audit/index.php/input/discoveries';
        // $discovery->org_id = $data->org_id;
        // $discovery->discard = 'n';
        // $discovery->complete = 'n';
        // $discovery->subnet = '';
        // $discovery->cloud_id = $id;
        // $discovery->cloud_name = $data->name;
        // $instance->discoveriesModel->create($discovery);
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
        $properties[] = 'clouds.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'clouds.org_id = orgs.id', 'left');
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
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $cloud = $query->getResult();
        if (!empty($cloud[0]->options)) {
            $cloud[0]->options = json_decode($cloud[0]->options);
        } else {
            $cloud[0]->options = new stdClass();
            $cloud[0]->options->ssh = 'y';
            $cloud[0]->options->wmi = 'y';
            $cloud[0]->options->snmp = 'n';
        }
        if (!empty($cloud[0]->credentials)) {
            $cloud[0]->credentials = simpleDecrypt($cloud[0]->credentials, config('Encryption')->key);
            $cloud[0]->credentials = json_decode($cloud[0]->credentials);
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
            $received_credentials = new stdClass();
            foreach ($data->credentials as $key => $value) {
                    $received_credentials->$key = $value;
            }
            $existing_credentials = json_decode(simpleDecrypt($get_result[0]->credentials, config('Encryption')->key));
            $new_credentials = new stdClass();
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

        $dictionary->about = '<p>This endpoint enables you to add your cloud infrastructre details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br /><br /><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = "<p>If you intend to completely audit your cloud machines, don't forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br /><br /></p>";

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->credentials = 'Your access credentials, as per that clouds native API.';
        $dictionary->columns->type = 'At the moment, only Amazon AWS is supported.';
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
        $dictionary->columns->status = 'The current status of the Cloud Discovery.';
        $dictionary->columns->options = 'Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.';
        $dictionary->columns->snmp = 'Should we test for SNMP using UDP port 161.';
        $dictionary->columns->ssh = 'Should we test for SSH using TCP port 21.';
        $dictionary->columns->wmi = 'Should we test for WMI using TCP port 135.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
