<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class DashboardsModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('dashboards');
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
     * @param  object $data The data dashboards
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
        if ($id !== 1) {
            $this->builder->delete(['id' => intval($id)]);
            if ($this->sqlError($this->db->error())) {
                return false;
            }
            $sql = "UPDATE users SET dashboard_id = 1 WHERE dashboard_id = ?";
            $query = $this->db->query($sql, [$id]);
            return true;
        } else {
            return false;
        }
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
        $widgetsModel = new \App\Models\WidgetsModel();
        $included['widgets'] = $widgetsModel->listUser();
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
        $included = array();
        $widgetsModel = new \App\Models\WidgetsModel();
        $included['widgets'] = $widgetsModel->listUser();
        return $included;
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
            $orgs = array_unique(array_merge($orgs, $instance->orgsModel->getUserAscendants($instance->user->orgs, $instance->orgs)));
            $orgs[] = 1;
            $orgs = array_unique($orgs);
        }

        $properties = array();
        $properties[] = 'dashboards.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'dashboards.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $this->builder->orderBy('dashboards.name');
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'dashboards');
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
        return format_data($query->getResult(), 'dashboards');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('dashboards')) {
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
        if (!empty($data->options)) {
            $dashboard = $this->builder->getWhere(['id' => intval($id)])->getResult()[0];
            $existing = new stdClass();
            if (!empty($dashboard->options)) {
                try {
                    $existing = json_decode($dashboard->options, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
            }
            if (!empty($data->options->layout)) {
                $existing->layout = $data->options->layout;
            }
            if (!empty($data->options->widgets->position)) {
                foreach ($data->options->widgets->position as $key => $value) {
                    $widget_position = $key;
                    $widget_id = $value;
                }
            }
            foreach ($existing->widgets as $widget) {
                if (isset($widget->position) and isset($widget_position) and intval($widget->position) === intval($widget_position)) {
                    $widget->widget_id = $widget_id;
                }
            }
            $data->options = (string)json_encode($existing);
        }
        $data = $this->updateFieldData('dashboards', $data);
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

        $collection = 'dashboards';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description');
        $dictionary->attributes->create = array('name','org_id', 'options', 'sidebar');
        $dictionary->attributes->fields = $this->db->getFieldNames($collection);
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection);
        $dictionary->attributes->update = $this->updateFields($collection);

        $dictionary->sentence = "Open-AudIT Professional and Enterprises' interactive Dashboard provides a single point of access to audit status and results. The ability to customize and create Dashboards is an Enterprise feature.";

        $dictionary->about = '<p>Quickly view the status of devices on your network.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '<p>3 x 2<br><table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td rowspan="2">Sidebar</td>
                                                <td>Widget #1</td>
                                                <td>Widget #2</td>
                                                <td>Widget #3</td>
                                            </tr>
                                            <tr>
                                                <td>Widget #4</td>
                                                <td>Widget #5</td>
                                                <td>Widget #6</td>
                                            </tr>
                                        </tbody>
                                    </table><br /><br /></p>
                                    <p>4 x 2<br><table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td rowspan="2">Sidebar</td>
                                                <td>Widget #1</td>
                                                <td>Widget #2</td>
                                                <td>Widget #3</td>
                                                <td>Widget #4</td>
                                            </tr>
                                            <tr>
                                                <td>Widget #5</td>
                                                <td>Widget #6</td>
                                                <td>Widget #7</td>
                                                <td>Widget #8</td>
                                            </tr>
                                        </tbody>
                                    </table><br /><br /></p>';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->sidebar = 'Do you wish to see the standard sidebar on the left.';
        $dictionary->columns->user_id = 'Unused.';
        $dictionary->columns->options = 'Contains a JSON object details the associated widgets and their positions.';
        $dictionary->columns->type = 'Unused.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
