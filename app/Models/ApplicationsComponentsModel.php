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
        $dictionary->types->{'container'} = 'Links to <code>vm.name</code> (which includes Docker containers).';
        $dictionary->types->{'container_external'} = 'External Docker, Podman, et al.';
        $dictionary->types->{'database'} = 'Links to <code>server_item.name</code>';
        $dictionary->types->{'database_external'} = 'External Database';
        $dictionary->types->{'device'} = 'Links to <code>devices.id</code>';
        $dictionary->types->{'device_external'} = 'External Device';
        // TODO $dictionary->types->{'dns'} = 'Links to <code>';
        $dictionary->types->{'dns_external'} = 'An external DNS service';
        $dictionary->types->{'location'} = 'Links to <code>location.name</code>.';
        $dictionary->types->{'location_external'} = 'External Location';
        $dictionary->types->{'network'} = 'Links to <code>networks.name</code>.';
        $dictionary->types->{'network_external'} = 'External Network';
        $dictionary->types->{'other'} = 'Something else that we do not have a current type for. Add a description for these items.';
        $dictionary->types->{'program'} = 'Links to <code>executable.name</code> (Linux detection only).';
        // $dictionary->types->{'program_external'} = 'External Program';
        $dictionary->types->{'queue'} = 'Links to <code>service.name</code>';
        $dictionary->types->{'queue_external'} = 'External Queue';
        $dictionary->types->{'service'} = 'Links to <code>service.name</code>';
        $dictionary->types->{'service_external'} = 'External Service';
        $dictionary->types->{'share'} = 'Links to <code>share.name</code>';
        $dictionary->types->{'storage'} = 'Links to <code>partition.name</code>';
        $dictionary->types->{'storage_external'} = 'External Storage';
        $dictionary->types->{'website'} = 'Links to <code>server_item.name</code>';
        $dictionary->types->{'website_external'} = 'External Website';

        $dictionary->relationships = new stdClass();
        $dictionary->relationships->{'accessed-via'} = 'A <code>network</code>.';
        $dictionary->relationships->{'accessed-by'} = 'A <code>device</code>.';
        $dictionary->relationships->{'authenticates-via'} = 'A device running an <code>authentication</code> service.';
        $dictionary->relationships->{'calls-api'} = 'A device running a web <code>api</code> service.';
        $dictionary->relationships->{'connected-via'} = 'A <code>network</code>.';
        $dictionary->relationships->{'consumes'} = 'A <code>service</code>.';
        $dictionary->relationships->{'depends-on'} = 'Depends upon the secondary type.';
        $dictionary->relationships->{'hosted-on'} = 'A virtual machine or docker <code>container</code> or a <code>cluster</code>.';
        $dictionary->relationships->{'located-in'} = 'A <code>service</code>.';
        $dictionary->relationships->{'powered-by'} = 'A <code>device</code> or other item, internal or external.';
        $dictionary->relationships->{'publishes-to'} = 'An external <code>service</code>.';
        $dictionary->relationships->{'reads-data-from'} = 'A secondary item, internal or external.';
        $dictionary->relationships->{'runs-on'} = 'A <code>device</code>.';
        $dictionary->relationships->{'sends-data-to'} = 'A secondary item, internal or external.';
        $dictionary->relationships->{'uses-application'} = 'An <code>application</code> installed on a device or hosted service.';
        $dictionary->relationships->{'uses-certificate'} = 'A <code>certificate</code> installed on a device or hosted service.';
        $dictionary->relationships->{'uses-database'} = 'A <code>database</code> on a device or hosted service.';
        $dictionary->relationships->{'uses-storage'} = '<code>Storage</code> or a <code>share</code> on a device or hosted service.';
        $dictionary->relationships->{'uses-website'} = 'A device running a <code>website</code>.';
        $dictionary->relationships->{'uses'} = 'A generic relationship linked to whatever suits best.';

        return $dictionary;
    }
}
