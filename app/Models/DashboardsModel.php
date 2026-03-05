<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class DashboardsModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'dashboards' table.
     */
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
     * @param  object|array|null $data The data dashboards
     *
     * @return int|null              The integer ID of the newly created item, or null on failure
     */
    public function create($data = null): ?int
    {
        return null;
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int|null $id    The ID of the dashboard to delete
     * @param  bool     $purge Unused; present for interface compatibility
     *
     * @return bool            true on success, false on failure
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
     * Return supplementary data for a single dashboard's read view
     *
     * @param  int   $id The ID of the dashboard whose supplementary data to load
     *
     * @return array     An array of supplementary data for the read view
     */
    public function includedRead(int $id = 0): array
    {
        $included = array();
        $widgetsModel = new \App\Models\WidgetsModel();
        $included['widgets'] = $widgetsModel->listUser();
        return $included;
    }

    /**
     * Return supplementary data for the dashboard create/edit form
     *
     * @param  int   $id The ID of the dashboard whose supplementary data to load
     *
     * @return array     An array of supplementary data for the create/edit form
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
     * Resolves the full set of org IDs visible to the current user (including
     * both ancestors and descendants) and filters the result accordingly.
     *
     * @param  array $where Additional WHERE conditions to apply to the query
     * @param  array $orgs  List of org IDs to restrict results to; if empty,
     *                      the current user's accessible orgs are used
     *
     * @return array        An array of formatted dashboards entries
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
     * Read every dashboard from the database with no org-based filtering
     *
     * Returns all rows from the `dashboards` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every dashboard row
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
        $data = format_data($query->getResult(), 'dashboards');
        if (!empty($data[0]->attributes->options->widgets)) {
            $widgetsModel = new \App\Models\WidgetsModel();
            foreach ($data[0]->attributes->options->widgets as $dashboardWidget) {
                if (empty($dashboardWidget->widget_id) and !empty($dashboardWidget->widget_name)) {
                    $widget_id = $widgetsModel->findIdByName($dashboardWidget->widget_name);
                    if (!empty($widget_id)) {
                        $dashboardWidget->widget_id = $widget_id;
                    }
                }
            }
        }
        return $data;
    }

    /**
     * Truncate the dashboards table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'dashboards' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
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
     * @param  int|null          $id   The ID of the dashboard to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
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
            $updated = false;
            foreach ($existing->widgets as $widget) {
                if (isset($widget->position) and isset($widget_position) and intval($widget->position) === intval($widget_position)) {
                    $widget->widget_id = $widget_id;
                    $updated = true;
                }
            }
            if (!$updated and !empty($widget_position)) {
                $widget = new stdClass();
                $widget->id = $widget_id;
                $widget->position = $widget_position;
                $widget->size = 1;
                $existing->widgets->{$widget_position} = $widget;
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
     * Build and return the data dictionary for the dashboards collection
     *
     * Constructs a stdClass describing the `dashboards` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('dashboards')
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

        $dictionary->about = '<p>Quickly view the status of devices on your network.<br> <br></p>';

        $dictionary->notes = '';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->sidebar = 'Do you wish to see the standard sidebar on the left.';
        $dictionary->columns->layout = 'One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.';
        $dictionary->columns->user_id = 'Unused.';
        $dictionary->columns->options = 'Contains a JSON object details the associated widgets and their positions.';
        $dictionary->columns->{'options.type'} = 'optionally ';
        $dictionary->columns->type = 'Unused.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
