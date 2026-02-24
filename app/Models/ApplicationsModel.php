<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

/**
 * Model for the 'applications' table.
 *
 * Provides CRUD operations and helper methods for Application records,
 * including resolution of component details for both on-premises (server
 * items) and cloud-hosted (AWS / Azure) resources.
 */
class ApplicationsModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'applications' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('applications');
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
     * @return int|null     The integer ID of the newly created item, or null on failure
     */
    public function create($data = null): ?int
    {
        if (empty($data)) {
            return null;
        }
        $data = $this->createFieldData('applications', $data);
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
     * @param  int  $id    The ID of the item to delete
     * @param  bool $purge Unused; present for interface compatibility
     *
     * @return bool        true on success, false on failure
     */
    public function delete($id = null, bool $purge = false): bool
    {
        $sql = "DELETE FROM applications_components WHERE application_id = ?";

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
        $include = array();

        $instance = & get_instance();
        if ($instance->resp->meta->format === 'html') {
            $attributesModel = new \App\Models\AttributesModel();
            $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'environment']);
            $include['environment'] = $attributes;
            $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'status']);
            $include['status'] = $attributes;
            $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'criticality']);
            $include['criticality'] = $attributes;
            $attributes = $attributesModel->listUser(['attributes.resource' => 'devices', 'attributes.type' => 'sensitivity']);
            $include['sensitivity'] = $attributes;
        }

        $sql = "SELECT *, '' AS `primary`, '' AS `secondary` FROM applications_components WHERE application_id = ?";
        $result = $this->db->query($sql, [intval($id)])->getResult();

        foreach ($result as $component) {
            if ($component->primary_type === 'api') {
                $component = $this->getComponentServerItem($component, 'primary');
            }
            if ($component->secondary_type === 'api') {
                $component = $this->getComponentServerItem($component, 'secondary');
            }

            if ($component->primary_type === 'application') {
                $component = $this->getComponentServerItem($component, 'primary');
            }
            if ($component->secondary_type === 'application') {
                $component = $this->getComponentServerItem($component, 'secondary');
            }

            if ($component->primary_type === 'authentication') {
                $component = $this->getComponentServerItem($component, 'primary');
            }
            if ($component->secondary_type === 'authentication') {
                $component = $this->getComponentServerItem($component, 'secondary');
            }

            if ($component->primary_type === 'certificate') {
                $component = $this->getComponentCertificate($component, 'primary');
            }
            if ($component->secondary_type === 'certificate') {
                $sql = "SELECT * FROM certificates WHERE id = ? LIMIT 1";
                $component = $this->getComponentCertificate($component, 'secondary');
            }

            if ($component->primary_type === 'client') {
                $component = $this->getComponentServerItem($component, 'primary');
            }
            if ($component->secondary_type === 'client') {
                $component = $this->getComponentServerItem($component, 'secondary');
            }

            if ($component->primary_type === 'cluster') {
                $component = $this->getComponentCluster($component, 'primary');
            }
            if ($component->secondary_type === 'cluster') {
                $sql = "SELECT * FROM clusters WHERE id = ? LIMIT 1";
                $component = $this->getComponentCluster($component, 'secondary');
            }

            if ($component->primary_type === 'container') {
                $component = $this->getComponentServerItem($component, 'primary');
            }
            if ($component->secondary_type === 'container') {
                $component = $this->getComponentServerItem($component, 'secondary');
            }

            if ($component->primary_type === 'device') {
                $component = $this->getComponentDevice($component, 'primary');
            }
            if ($component->secondary_type === 'device') {
                $sql = "SELECT * FROM devices WHERE id = ? LIMIT 1";
                $component = $this->getComponentDevice($component, 'secondary');
            }

            if ($component->primary_type === 'database') {
                $component = $this->getComponentServerItem($component, 'primary');
            }
            if ($component->secondary_type === 'database') {
                $component = $this->getComponentServerItem($component, 'secondary');
            }

            if ($component->primary_type === 'dnsname') {
                $component->primary = $this->getComponentExtName($component->primary_external_provider, $component->primary_external_service);
                $component->primary_icon = $this->getComponentExtIcon($component->primary_icon, $component->primary_external_provider, $component->primary_external_service);
            }
            if ($component->secondary_type === 'dnsname') {
                $component->secondary = $this->getComponentExtName($component->secondary_external_provider, $component->secondary_external_service);
                $component->secondary_icon = $this->getComponentExtIcon($component->secondary_icon, $component->secondary_external_provider, $component->secondary_external_service);
            }

            if ($component->primary_type === 'other') {
                $component->primary = $this->getComponentExtName($component->primary_external_provider, $component->primary_external_service);
                $component->primary_icon = $this->getComponentExtIcon($component->primary_icon, $component->primary_external_provider, $component->primary_external_service);
            }
            if ($component->secondary_type === 'other') {
                $component->secondary = $this->getComponentExtName($component->secondary_external_provider, $component->secondary_external_service);
                $component->secondary_icon = $this->getComponentExtIcon($component->secondary_icon, $component->secondary_external_provider, $component->secondary_external_service);
            }

            if ($component->primary_type === 'program') {
                $component = $this->getComponentServerItem($component, 'primary');
            }
            if ($component->secondary_type === 'program') {
                $component = $this->getComponentServerItem($component, 'secondary');
            }

            if ($component->primary_type === 'queue') {
                $component = $this->getComponentServerItem($component, 'primary');
            }
            if ($component->secondary_type === 'queue') {
                $component = $this->getComponentServerItem($component, 'secondary');
            }

            if ($component->primary_type === 'service') {
                $component = $this->getComponentServerItem($component, 'primary');
            }
            if ($component->secondary_type === 'service') {
                $component = $this->getComponentServerItem($component, 'secondary');
            }

            if ($component->primary_type === 'storage') {
                $component = $this->getComponentServerItem($component, 'primary');
            }
            if ($component->secondary_type === 'storage') {
                $component = $this->getComponentServerItem($component, 'secondary');
            }

            if ($component->primary_type === 'website') {
                $component = $this->getComponentServerItem($component, 'primary');
            }
            if ($component->secondary_type === 'website') {
                $component = $this->getComponentServerItem($component, 'secondary');
            }

            if ($component->primary_external_provider === 'AWS') {
                $component->primary = $this->getComponentExtName($component->primary_external_provider, $component->primary_external_service);
                $component->primary_icon = $this->getComponentExtIcon($component->primary_icon, $component->primary_external_provider, $component->primary_external_service);
            }
            if ($component->secondary_external_provider === 'AWS') {
                $component->secondary = $this->getComponentExtName($component->secondary_external_provider, $component->secondary_external_service);
                $component->secondary_icon = $this->getComponentExtIcon($component->secondary_icon, $component->secondary_external_provider, $component->secondary_external_service);
            }

            if ($component->primary_external_provider === 'Azure') {
                $component->primary = $this->getComponentExtName($component->primary_external_provider, $component->primary_external_service);
                $component->primary_icon = $this->getComponentExtIcon($component->primary_icon, $component->primary_external_provider, $component->primary_external_service);
            }
            if ($component->secondary_external_provider === 'Azure') {
                $component->secondary = $this->getComponentExtName($component->secondary_external_provider, $component->secondary_external_service);
                $component->secondary_icon = $this->getComponentExtIcon($component->secondary_icon, $component->secondary_external_provider, $component->secondary_external_service);
            }

            if (str_contains($component->primary_type, '_external') or $component->primary_type === '') {
                $component->primary = $this->getComponentExtName($component->primary_external_provider, $component->primary_external_service);
                $component->primary_icon = $this->getComponentExtIcon($component->primary_icon, $component->primary_external_provider, $component->primary_external_service);
            }
            if (str_contains($component->secondary_type, '_external') or $component->secondary_type === '') {
                $component->secondary = $this->getComponentExtName($component->secondary_external_provider, $component->secondary_external_service);
                $component->secondary_icon = $this->getComponentExtIcon($component->secondary_icon, $component->secondary_external_provider, $component->secondary_external_service);
            }

            // catch all for icon-
            if (strpos($component->primary_icon, 'icon-') === 0) {
                $component->primary_icon = $this->getComponentExtIcon($component->primary_icon, $component->primary_external_provider, $component->primary_external_service);
            }
            if (strpos($component->secondary_icon, 'icon-') === 0) {
                $component->secondary_icon = $this->getComponentExtIcon($component->secondary_icon, $component->secondary_external_provider, $component->secondary_external_service);
            }
        }
        $include['components'] = $result;
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
        return array();
    }

    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @param  array $where Additional WHERE conditions to apply to the query
     * @param  array $orgs  List of org IDs to restrict results to; if empty,
     *                      the current user's accessible orgs are used
     *
     * @return array        An array of formatted entries
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
        $properties[] = 'applications.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'applications.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $this->builder->orderBy('applications.name', 'ASC');
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'applications');
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
        return format_data($query->getResult(), 'applications');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('applications')) {
            return true;
        }
        return false;
    }

    public function search(string $search): array
    {
        $exclude_fields = array('primary', 'primary_icon', 'secondary', 'secondary_icon');
        $result = array();
        $applications = $this->listUser();
        foreach ($applications as $application) {
            $include = $this->includedRead($application->id);
            foreach ($include['components'] as $component) {
                foreach ($component as $key => $value) {
                    if (str_contains(strtolower($value), strtolower($search)) and !in_array($key, $exclude_fields)) {
                        $item = new stdClass();
                        $item->application_id = $application->id;
                        $item->application_name = $application->attributes->name;
                        $item->attribute = $key;
                        $item->value = $value;
                        $item->description = '';
                        if (str_contains($key, 'primary')) {
                            $item->description = $component->primary;
                        }
                        if (str_contains($key, 'secondary')) {
                            $item->description = $component->secondary;
                        }
                        $result[] = $item;
                    }
                }
            }
        }
        return $result;
    }

    /**
     * Update an individual item in the database
     *
     * @param  int|null        $id   The ID of the item to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                  true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        // Accept our client data
        $data = $this->updateFieldData('applications', $data);
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    public function getComponentExtName(string $external_provider, string $external_service): string
    {
        $name = '';
        $name = "{$external_provider} / {$external_service}";
        $name = "{$external_service} on {$external_provider}";
        if ($name === ' / ') {
            $name = '';
        }
        return $name;
    }

    public function getComponentExtIcon(string $icon, string $external_provider, string $external_service): string
    {
        $width = '40px';
        if (!empty($icon)) {
            if (file_exists(ROOTPATH . 'public/icons/' . $icon . '.svg')) {
                $icon = '<img src="' . BASE_URL() . 'icons/' . $icon . '.svg" style="width:' . $width . ';">';
                return $icon;
            } else {
                if (strpos($icon, 'icon-') === 0) {
                    $icon = "<span class=\"{$icon}\" style=\"font-size:2.5rem; strokeWidth:2px;\">";
                    return $icon;
                }
            }
        }
        if (empty($icon) and $external_provider === 'AWS') {
            # AWS Logo :: AWS -> AWS-Logo/AWS.svg
            $temp = explode(' :: ', $external_service);
            $directory = str_replace(' ', '-', $temp[0]);
            $file = str_replace(' ', '-', $temp[1]);
            if (file_exists(ROOTPATH . 'public/aws_icons/' . $directory . '/' . $file . '.svg')) {
                $icon = '<img src="' . BASE_URL() . 'aws_icons/' . rawurlencode($directory) . '/' . rawurlencode($file) . '.svg" style="width:' . $width . ';">';
                return $icon;
            }
        }
        if (empty($icon) and $external_provider === 'Azure') {
            # app services :: App Service Certificates
            $temp = explode(' :: ', $external_service);
            $directory = ROOTPATH . 'public/azure_icons/' . $temp[0];
            $file = str_replace(' ', '-', $temp[1]);
            $icon = '';
            if (is_dir($directory)) {
                if ($handle = opendir($directory)) {
                    while (false !== ($entry = readdir($handle))) {
                        if ($entry === '.' || $entry === '..') {
                            continue;
                        }
                        if (stripos($entry, $file . '.svg') !== false) {
                            $icon = $entry;
                        }
                    }
                    closedir($handle);
                }
            }
            $icon = '<img src="' . BASE_URL() . 'azure_icons/' . rawurlencode($temp[0]) . '/' . rawurlencode($icon) . '" style="width:' . $width . ';">';
            return $icon;
        }
        return $icon;
    }

    public function getComponentApplication(object $component, string $section): object
    {
        return $component;
    }

    public function getComponentCertificate(object $component, string $section): object
    {
        $width = '40px';
        $component->{$section} = '';
        $sql = "SELECT * FROM certificates WHERE id = ?";
        $result = $this->db->query($sql, [$component->{$section . '_internal_id_b'}])->getResult();
        if (!empty($result[0])) {
            $component->{$section} = '<a href="' . url_to('certificatesRead', $result[0]->id) . '">' . $result[0]->name . '</a>';
            $component->{$section . '_icon'} = '<img src="' . BASE_URL() . 'icons/certificates.svg" style="width:' . $width . ';">';
        }
        return $component;
    }

    public function getComponentCluster(object $component, string $section): object
    {
        $width = '40px';
        $component->{$section} = '';
        $sql = "SELECT * FROM clusters WHERE id = ?";
        $result = $this->db->query($sql, [$component->{$section . '_internal_id_b'}])->getResult();
        if (!empty($result[0])) {
            $component->{$section} = '<a href="' . url_to('clustersRead', $result[0]->id) . '">' . $result[0]->name . '</a>';
            $component->{$section . '_icon'} = '<img src="' . BASE_URL() . 'icons/clusters.svg" style="width:' . $width . ';">';
        }
        return $component;
    }

    public function getComponentDevice(object $component, string $section): object
    {
        return $component;
    }

    /**
     * Resolve server item and device details for a component hosted on a
     * local (on-premises) device.
     *
     * Queries the `server_item` and `devices` tables using the internal IDs
     * stored on the component, then merges the resulting fields onto the
     * component object. Also builds an HTML icon tag and a human-readable
     * display string (e.g. "Service named foo\nRunning on <a>bar</a>") and
     * assigns it to `$component->{$section}`.
     *
     * @param  object $component The application component object to enrich
     * @param  string $section   Which side of the component to resolve:
     *                           'primary' or 'secondary'
     *
     * @return object|null       The enriched component object, or null if the
     *                           supplied component was empty
     */
    public function getComponentServerItem(object $component, string $section): object
    {
        if (empty($component)) {
            log_message('warning', 'Empty component passed to ApplicationsComponentsModel::getComponentServerItem');
            return null;
        }
        // server_item and device details
        if ($component->{$section . '_type'} === 'api') {
            $sql = "SELECT server_item.id AS `{$section}.server_item.id`, server_item.name AS `{$section}.server_item.name`, devices.id AS `{$section}.devices.id`, devices.environment AS `{$section}.devices.environment`, devices.name AS `{$section}.devices.name`, devices.type AS `{$section}.devices.type`, devices.os_family AS `{$section}.devices.os_family`, devices.icon AS `{$section}.devices.icon` FROM server_item LEFT JOIN devices ON server_item.device_id = devices.id WHERE devices.id = ? AND server_item.type = 'website' AND server_item.name = ? AND server_item.current = 'y' LIMIT 1";
            $fields = array(intval($component->{$section . '_internal_id_a'}), $component->{$section . '_internal_id_b'});
            $thisResult = $this->db->query($sql, $fields)->getResult();

        } else if ($component->{$section . '_type'} === 'application') {
            $sql = "SELECT software.id AS `{$section}.software.id`, software.name AS `{$section}.software.name`, devices.id AS `{$section}.devices.id`, devices.environment AS `{$section}.devices.environment`, devices.name AS `{$section}.devices.name`, devices.type AS `{$section}.devices.type`, devices.os_family AS `{$section}.devices.os_family`, devices.icon AS `{$section}.devices.icon` FROM software LEFT JOIN devices ON software.device_id = devices.id WHERE devices.id = ? AND software.name = ? AND software.current = 'y' LIMIT 1";
            $fields = array(intval($component->{$section . '_internal_id_a'}), $component->{$section . '_internal_id_b'});
            $thisResult = $this->db->query($sql, $fields)->getResult();

        } else if ($component->{$section . '_type'} === 'authentication') {
            $sql = "SELECT service.id AS `{$section}.service.id`, service.name AS `{$section}.service.name`, devices.id AS `{$section}.devices.id`, devices.environment AS `{$section}.devices.environment`, devices.name AS `{$section}.devices.name`, devices.type AS `{$section}.devices.type`, devices.os_family AS `{$section}.devices.os_family`, devices.icon AS `{$section}.devices.icon` FROM service LEFT JOIN devices ON service.device_id = devices.id WHERE devices.id = ? AND service.name = ? AND service.current = 'y' LIMIT 1";
            $fields = array(intval($component->{$section . '_internal_id_a'}), $component->{$section . '_internal_id_b'});
            $thisResult = $this->db->query($sql, $fields)->getResult();

        } else if ($component->{$section . '_type'} === 'client') {
            $sql = "SELECT software.id AS `{$section}.software.id`, software.name AS `{$section}.software.name`, devices.id AS `{$section}.devices.id`, devices.environment AS `{$section}.devices.environment`, devices.name AS `{$section}.devices.name`, devices.type AS `{$section}.devices.type`, devices.os_family AS `{$section}.devices.os_family`, devices.icon AS `{$section}.devices.icon` FROM software LEFT JOIN devices ON software.device_id = devices.id WHERE devices.id = ? AND software.name = ? AND software.current = 'y' LIMIT 1";
            $fields = array(intval($component->{$section . '_internal_id_a'}), $component->{$section . '_internal_id_b'});
            $thisResult = $this->db->query($sql, $fields)->getResult();

        } else if ($component->{$section . '_type'} === 'container') {
            $sql = "SELECT vm.id AS `{$section}.vm.id`, vm.name AS `{$section}.vm.name`, devices.id AS `{$section}.devices.id`, devices.environment AS `{$section}.devices.environment`, devices.name AS `{$section}.devices.name`, devices.type AS `{$section}.devices.type`, devices.os_family AS `{$section}.devices.os_family`, devices.icon AS `{$section}.devices.icon` FROM vm LEFT JOIN devices ON vm.device_id = devices.id WHERE devices.id = ? AND vm.name = ? AND vm.current = 'y' LIMIT 1";
            $fields = array(intval($component->{$section . '_internal_id_a'}), $component->{$section . '_internal_id_b'});
            $thisResult = $this->db->query($sql, $fields)->getResult();

        } else if ($component->{$section . '_type'} === 'database') {
            $sql = "SELECT server_item.id AS `{$section}.server_item.id`, server_item.name AS `{$section}.server_item.name`, devices.id AS `{$section}.devices.id`, devices.environment AS `{$section}.devices.environment`, devices.name AS `{$section}.devices.name`, devices.type AS `{$section}.devices.type`, devices.os_family AS `{$section}.devices.os_family`, devices.icon AS `{$section}.devices.icon` FROM server_item LEFT JOIN devices ON server_item.device_id = devices.id WHERE devices.id = ? AND server_item.type = 'database' AND server_item.name = ? AND server_item.current = 'y' LIMIT 1";
            $fields = array(intval($component->{$section . '_internal_id_a'}), $component->{$section . '_internal_id_b'});
            $thisResult = $this->db->query($sql, $fields)->getResult();

        } else if ($component->{$section . '_type'} === 'program') {
            $sql = "SELECT executable.id AS `{$section}.executable.id`, executable.name AS `{$section}.executable.name`, devices.id AS `{$section}.devices.id`, devices.environment AS `{$section}.devices.environment`, devices.name AS `{$section}.devices.name`, devices.type AS `{$section}.devices.type`, devices.os_family AS `{$section}.devices.os_family`, devices.icon AS `{$section}.devices.icon` FROM executable LEFT JOIN devices ON executable.device_id = devices.id WHERE devices.id = ? AND executable.name = ? AND executable.current = 'y' LIMIT 1";
            $fields = array(intval($component->{$section . '_internal_id_a'}), $component->{$section . '_internal_id_b'});
            $thisResult = $this->db->query($sql, $fields)->getResult();

        } else if ($component->{$section . '_type'} === 'queue') {
            $sql = "SELECT service.id AS `{$section}.service.id`, service.name AS `{$section}.service.name`, devices.id AS `{$section}.devices.id`, devices.environment AS `{$section}.devices.environment`, devices.name AS `{$section}.devices.name`, devices.type AS `{$section}.devices.type`, devices.os_family AS `{$section}.devices.os_family`, devices.icon AS `{$section}.devices.icon` FROM service LEFT JOIN devices ON service.device_id = devices.id WHERE devices.id = ? AND service.name = ? AND service.current = 'y' LIMIT 1";
            $fields = array(intval($component->{$section . '_internal_id_a'}), $component->{$section . '_internal_id_b'});
            $thisResult = $this->db->query($sql, $fields)->getResult();

        } else if ($component->{$section . '_type'} === 'service') {
            $sql = "SELECT service.id AS `{$section}.service.id`, service.name AS `{$section}.service.name`, devices.id AS `{$section}.devices.id`, devices.environment AS `{$section}.devices.environment`, devices.name AS `{$section}.devices.name`, devices.type AS `{$section}.devices.type`, devices.os_family AS `{$section}.devices.os_family`, devices.icon AS `{$section}.devices.icon` FROM service LEFT JOIN devices ON service.device_id = devices.id WHERE devices.id = ? AND service.name = ? AND service.current = 'y' LIMIT 1";
            $fields = array(intval($component->{$section . '_internal_id_a'}), $component->{$section . '_internal_id_b'});
            $thisResult = $this->db->query($sql, $fields)->getResult();

        } else if ($component->{$section . '_type'} === 'storage') {
            $sql = "SELECT share.id AS `{$section}.share.id`, share.name AS `{$section}.share.name`, devices.id AS `{$section}.devices.id`, devices.environment AS `{$section}.devices.environment`, devices.name AS `{$section}.devices.name`, devices.type AS `{$section}.devices.type`, devices.os_family AS `{$section}.devices.os_family`, devices.icon AS `{$section}.devices.icon` FROM share LEFT JOIN devices ON share.device_id = devices.id WHERE devices.id = ? AND share.name = ? AND share.current = 'y' LIMIT 1";
            $fields = array(intval($component->{$section . '_internal_id_a'}), $component->{$section . '_internal_id_b'});
            $thisResult = $this->db->query($sql, $fields)->getResult();

        } else if ($component->{$section . '_type'} === 'website') {
            $sql = "SELECT server_item.id AS `{$section}.server_item.id`, server_item.name AS `{$section}.server_item.name`, devices.id AS `{$section}.devices.id`, devices.environment AS `{$section}.devices.environment`, devices.name AS `{$section}.devices.name`, devices.type AS `{$section}.devices.type`, devices.os_family AS `{$section}.devices.os_family`, devices.icon AS `{$section}.devices.icon` FROM server_item LEFT JOIN devices ON server_item.device_id = devices.id WHERE devices.id = ? AND server_item.type = 'website' AND server_item.name = ? AND server_item.current = 'y' LIMIT 1";
            $fields = array(intval($component->{$section . '_internal_id_a'}), $component->{$section . '_internal_id_b'});
            $thisResult = $this->db->query($sql, $fields)->getResult();

        } else {
            return $component;
        }
        // log_message('debug', str_replace("\n", " ", (string) $this->db->getLastQuery()));
        if (!empty($thisResult[0])) {
            foreach ($thisResult[0] as $key => $value) {
                $component->$key = $value;
            }
        }
        // if ($component->{$section . '_type'} === 'application') {
        //     echo "<pre>" . json_encode($component);
        //     exit;
        // }
        // Icon(s)
        if (!empty($component->{$section . '_icon'})) {
            if (file_exists(ROOTPATH . 'public/icons/' . $component->{$section . '_icon'} . '.svg')) {
                $component->{$section . '_icon'} = '<img src="' . BASE_URL() . 'icons/' . $component->{$section . '_icon'} . '.svg" style="width:' . $width . ';">';
            } else {
                if (str_contains($component->{$section . '_icon'}, 'icon-')) {
                    $component->{$section . '_icon'} = '<span class="' . $component->{$section . '_icon'} . '" style="font-size:2.5rem; strokeWidth:2px;">';
                }
            }
        } else {
            $component->{$section . '_icon'} = '<img src="' . BASE_URL() . 'icons/' . $component->{$section . '_type'} . '.svg" style="width:30px;">';
        }
        if (!empty($component->{$section . '.devices.icon'})) {
            $component->{$section . '_icon'} .= '<br><img src="' . BASE_URL() . 'device_images/' . @$component->{$section . '.devices.icon'} . '.svg" style="width:30px;">';
        }

        // Primary Name
        $component->{$section} = '';
        $url = '';
        if (isset($component->{$section . '.devices.id'})) {
            $url = url_to('devicesRead', $component->{$section . '.devices.id'});
        }
        $name = '';
        if (isset($component->{$section . '.devices.name'})) {
            $name = $component->{$section . '.devices.name'};
        }
        if ($url !== '' and $name !== '') {
            $component->{$section} = ucfirst($component->{$section . '_type'}) . ' named ' . $component->{$section . '_internal_id_b'} . '<br> Running on <a href="' . $url . '">' . $name . '</a>';
            if (!empty($component->{'devices.environment'})) {
                $component->{$section} .= ' in ' . $component->{$section . '.devices.environment'};
            }
            $component->{$section} .= '<br>';
            if (!empty($component->{$section . '_owner'})) {
                $component->{$section} .= 'Managed by ' . $component->{$section . '_owner'};
            }
        }
        if ($component->primary_type === 'container') {
        #    echo "<pre>" . json_encode($component, JSON_PRETTY_PRINT);
        #    exit;
        }
        return $component;
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'applications';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'orgs.name', 'environment', 'owner', 'criticality', 'sensitivity');
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'You can tag devices with an Application of your choosing.';

        $dictionary->about = '<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>';

        $dictionary->notes = '';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'professional';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->environment = 'Manually set by user, defaults to Production.';
        $dictionary->columns->status = 'Manually set by user, defaults to Production.';
        $dictionary->columns->owner = 'Manually set by user.';
        $dictionary->columns->class = 'Manually set by user.';
        $dictionary->columns->vendor = 'Who produced this application.';
        $dictionary->columns->criticality = 'extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.';
        $dictionary->columns->sensitivity = 'top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.';

        $dictionary->columns->replaces  = 'This is a new application that replaces this older application.';
        $dictionary->columns->replaced_by  = 'This application was replaced by.';
        $dictionary->columns->options  = 'Unused.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;

        return $dictionary;
    }
}
