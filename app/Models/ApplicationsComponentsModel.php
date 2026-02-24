<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class ApplicationsComponentsModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('applications_components');
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
            $this->builder->groupBy('applications_components.id');
        }
        if (!empty($resp->meta->sort)) {
            $this->builder->orderBy($resp->meta->sort);
        } else {
            $this->builder->orderBy('applications_components.name DESC');
        }
        $properties = $resp->meta->properties;
        $this->builder->select($properties, false);
        foreach ($resp->meta->filter as $filter) {
            if ($filter->name === 'search') {
                $this->builder->where('(applications_components.name LIKE ' . $this->db->escape($filter->value) . ')');
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
        $this->builder = $this->db->table('applications_components');
        if (!empty($resp->meta->groupby)) {
            $this->builder->groupBy($resp->meta->groupby);
        } else {
            $this->builder->groupBy('applications_components.id');
        }
        if (!empty($resp->meta->sort)) {
            $this->builder->orderBy($resp->meta->sort);
        } else {
            $this->builder->orderBy('applications_components.name DESC');
        }
        $properties = $resp->meta->properties;
        $this->builder->select($properties, false);
        foreach ($resp->meta->filter as $filter) {
            if ($filter->name === 'search') {
                $this->builder->where('(applications_components.name LIKE ' . $this->db->escape($filter->value) .')');
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
        return format_data($result, 'applications_components');
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
        if (empty($data->org_id)) {
            if (!empty($data->application_id)) {
                $sql = "SELECT org_id FROM applications WHERE id = " . intval($data->application_id);
                $result = $this->db->query($sql)->getResult();
                if (!empty($result[0]->org_id)) {
                    $data->org_id = intval($result[0]->org_id);
                }
            }
        }
        $data->name = $data->primary_type;
        $data->description = '';
        $data = $this->createFieldData('applications_components', $data);
        log_message('debug', json_encode($data, JSON_PRETTY_PRINT));
        if (empty($data)) {
            return null;
        }
        $this->builder->insert($data);
        $error = $this->sqlError($this->db->error());
        if ($error) {
            session()->setFlashdata('error', json_encode($error));
            return null;
        }
        return (intval($this->db->insertID()));
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

    public function executeAll(): bool
    {
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
        $device_links = array('api','application','authentication','certificate','client','database','device','program','queue','service','storage','website');
        $properties = array();
        $properties[] = 'applications_components.*';
        $properties[] = 'applications.id AS `applications.id`';
        $properties[] = 'applications.name AS `applications.name`';
        $properties[] = 'orgs.name AS `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('applications', 'applications_components.application_id = applications.id', 'left');
        $this->builder->join('orgs', 'applications_components.org_id = orgs.id', 'left');
        $query = $this->builder->getWhere(['applications_components.id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $query->getResult();
        if (!empty($result)) {
            $result[0]->{'primary_devices.name'} = '';
            $result[0]->{'primary_devices.icon'} = '';
            $result[0]->{'secondary_devices.name'} = '';
            $result[0]->{'secondary_devices.icon'} = '';
            if (in_array($result[0]->primary_type, $device_links)) {
                $sql = "SELECT devices.name, devices.icon FROM devices WHERE id = ?";
                $queryResult = $this->db->query($sql, [$result[0]->primary_internal_id_a])->getResult();
                if (!empty($queryResult)) {
                    $result[0]->{'primary_devices.name'} = $queryResult[0]->name;
                    $result[0]->{'primary_devices.icon'} = $queryResult[0]->icon;
                }
            }
            if (in_array($result[0]->secondary_type, $device_links)) {
                $sql = "SELECT devices.name, devices.icon FROM devices WHERE id = ?";
                $queryResult = $this->db->query($sql, [$result[0]->secondary_internal_id_a])->getResult();
                if (!empty($queryResult)) {
                    $result[0]->{'secondary_devices.name'} = $queryResult[0]->name;
                    $result[0]->{'secondary_devices.icon'} = $queryResult[0]->icon;
                }
            }
            if ($result[0]->primary_type === 'cluster') {
                $sql = "SELECT * FROM clusters WHERE id = ?";
                $queryResult = $this->db->query($sql, [$result[0]->primary_internal_id_b])->getResult();
                if (!empty($queryResult)) {
                    $result[0]->{'primary_clusters.name'} = $queryResult[0]->name;
                    $result[0]->{'primary_clusters.id'} = $queryResult[0]->id;
                }
            }
            if ($result[0]->secondary_type === 'cluster') {
                $sql = "SELECT * FROM clusters WHERE id = ?";
                $queryResult = $this->db->query($sql, [$result[0]->secondary_internal_id_b])->getResult();
                if (!empty($queryResult)) {
                    $result[0]->{'secondary_clusters.name'} = $queryResult[0]->name;
                    $result[0]->{'secondary_clusters.id'} = $queryResult[0]->id;
                }
            }

        }
        return format_data($result, 'applications_components');
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
        $data = $this->updateFieldData('applications_components', $data);
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

        $collection = 'applications_components';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('name');
        $dictionary->attributes->create = array('name', 'primary_type', 'application_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields
        $dictionary->sentence = '';

        $dictionary->about = '';

        $dictionary->notes = 'When populating an external provider, use AWS, Azure, Google Compute and we have existing icons for those.';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->application_id = 'The ID of the application this component belongs to.';

        $dictionary->columns->primary_type = 'The type of the primary component.';
        $dictionary->columns->primary_internal_id_a = 'Links to either <code>devices.id</code> or <code>clusters.id</code>.';
        $dictionary->columns->primary_internal_id_b = 'Links to a component table (software, service, server, et al) <code>component.name</code>.';
        $dictionary->columns->primary_external_provider = 'A text description of the external provider.';
        $dictionary->columns->primary_external_service = 'A text description of the external service.';
        $dictionary->columns->primary_description = 'A description (optional) of the primary component.';
        $dictionary->columns->primary_owner = 'The person or team responsible for this component.';
        $dictionary->columns->primary_icon = 'Override the default icon per type. Should be the filename (without extension) of an SVG file in /icons/ directory.';
        $dictionary->columns->relationship = 'The relationship to the secondary component.';
        $dictionary->columns->secondary_type = 'The type of the primary component.';
        $dictionary->columns->secondary_internal_id_a = 'Links to either <code>devices.id</code> or <code>clusters.id</code>.';
        $dictionary->columns->secondary_internal_id_b = 'Links to a component table (software, service, server, et al) <code>component.name</code>.';
        $dictionary->columns->secondary_external_provider = 'A text description of the external provider.';
        $dictionary->columns->secondary_external_service = 'A text description of the external service.';
        $dictionary->columns->secondary_description = 'A description (optional) of the secondary component.';
        $dictionary->columns->secondary_owner = 'The person or team responsible for this component.';
        $dictionary->columns->secondary_icon = 'Override the default icon. Should be the filename (without extension) of an SVG file in /icons/ directory.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;

        $dictionary->types = new stdClass();
        $dictionary->types->{'api'} = 'Links to <code>server_item.name</code>';
        $dictionary->types->{'api_external'} = 'External API';
        $dictionary->types->{'application'} = 'Links to <code>software.name</code>';
        $dictionary->types->{'application_external'} = 'External Application';
        $dictionary->types->{'authentication'} = 'Links to <code>service.name</code>';
        $dictionary->types->{'authentication_external'} = 'External Authentication';
        $dictionary->types->{'certificate'} = 'Links to <code>certificates.id</code>';
        $dictionary->types->{'certificate_external'} = 'External Certificate';
        $dictionary->types->{'client'} = 'Links to <code>devices.id</code>';
        $dictionary->types->{'client_external'} = 'External Client';
        $dictionary->types->{'cluster'} = 'Links to <code>clusters.id</code>';
        $dictionary->types->{'cluster_external'} = 'External Cluster';
        $dictionary->types->{'container'} = 'Links to <code>vm.name</code>';
        $dictionary->types->{'container_external'} = 'External Docker, Podman, et al.';
        $dictionary->types->{'database'} = 'Links to <code>server_item.name</code>';
        $dictionary->types->{'database_external'} = 'External Database';
        $dictionary->types->{'device'} = 'Links to <code>devices.id</code>';
        $dictionary->types->{'device_external'} = 'External Device';
        $dictionary->types->{'dnsname'} = 'Text';
        $dictionary->types->{'other'} = 'Text';
        $dictionary->types->{'program'} = 'Links to <code>file.name</code>.';
        $dictionary->types->{'program_external'} = 'External Program';
        $dictionary->types->{'queue'} = 'Links to <code>service.name</code>';
        $dictionary->types->{'queue_external'} = 'External Queue';
        $dictionary->types->{'service'} = 'Links to <code>service.name</code>';
        $dictionary->types->{'service_external'} = 'External Service';
        $dictionary->types->{'storage'} = 'Links to <code>share.name</code>';
        $dictionary->types->{'storage_external'} = 'External Storage';
        $dictionary->types->{'website'} = 'Links to <code>server_item.name</code>';
        $dictionary->types->{'website_external'} = 'External Website';

        $dictionary->relationships = new stdClass();
        $dictionary->relationships->{'accessed-via'} = 'A network. Links to <code>networks.id</code>.';
        $dictionary->relationships->{'authenticates-via'} = 'A device running a service. Links to <code>service.name</code>.';
        $dictionary->relationships->{'calls-api'} = 'A device running a web service. Links to <code>server_item.name</code>.';
        $dictionary->relationships->{'connected-via'} = 'A network. Links to <code>networks.id</code>';
        $dictionary->relationships->{'consumes'} = 'An external service.';
        $dictionary->relationships->{'depends-on'} = 'Another component of this application. Links to <code>application.name</code>.';
        $dictionary->relationships->{'hosted-on'} = 'A VM host. Links to <code>devices.id</code>.';
        $dictionary->relationships->{'publishes-to'} = 'An external service.';
        $dictionary->relationships->{'relies-on'} = 'A device or hosted service. Links to <code>devices.id</code> or an external service.';
        $dictionary->relationships->{'runs-on'} = 'A device. Links to <code>devices.id</code>';
        $dictionary->relationships->{'used-by'} = 'Another component of this application. Links to <code>application.name</code>.';
        $dictionary->relationships->{'uses-database'} = 'A database on a device or hosted service. Links to <code>server_item.name</code> or an external service.';
        $dictionary->relationships->{'uses-storage'} = 'Storage on a device or hosted service. Links to <code>shares.name</code> or an external service.';
        $dictionary->relationships->{'writes-to'} = 'Storage on a device or hosted service. Links to <code>share.name</code> or an external service.';

        return $dictionary;
    }
}
