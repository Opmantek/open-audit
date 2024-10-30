<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class TasksModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('tasks');
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
        $instance = & get_instance();
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
        $result = $query->getResult();
        for ($i = 0; $i < count($result); $i++) {
            // SubResources
            if (!empty($result[$i]->type) and $this->db->tableExists($result[$i]->type)) {
                $sql = 'SELECT id, name FROM `' . $result[$i]->type . '` WHERE id = ?';
                $data_result = $this->db->query($sql, [$result[$i]->sub_resource_id])->getResult();
                if (!empty($data_result[0]->name)) {
                    $result[$i]->{$result[$i]->type . '.id'} = $data_result[0]->id;
                    $result[$i]->{$result[$i]->type . '.name'} = $data_result[0]->name;
                    $result[$i]->sub_resource_name = $data_result[0]->name;
                } else {
                    $result[$i]->sub_resource_name = '';
                }
            } else {
                $result[$i]->sub_resource_name = '';
            }
            // Collectors
            $result[$i]->{'collectors.name'} = 'localhost';
            $result[$i]->{'collectors.id'} = 0;
            if (!empty($result[$i]->uuid) and $result[$i]->uuid !== $instance->config->uuid) {
                $sql = 'SELECT id, name FROM collectors WHERE uuid = ? LIMIT 1';
                $data_result = $this->db->query($sql, [$result[$i]->uuid])->getResult();
                if (!empty($data_result[0]->name)) {
                    $result[$i]->{'collectors.name'} = $data_result[0]->name;
                    $result[$i]->{'collectors.id'} = $data_result[0]->id;
                }
            }
        }
        return format_data($result, 'tasks');
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
        $data->minute = implode(',', $data->minute);
        $data->hour = implode(',', $data->hour);
        $data->month = implode(',', $data->month);
        $data->day_of_month = implode(',', $data->day_of_month);
        $data->day_of_week = implode(',', $data->day_of_week);
        if (empty($data->uuid)) {
            $instance = & get_instance();
            $data->uuid = $instance->config->uuid;
        }
        $data = $this->createFieldData('tasks', $data);
        if (empty($data)) {
            return null;
        }
        $this->builder->insert($data);
        if ($this->sqlError($this->db->error())) {
            return false;
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

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $result = $this->builder->getWhere(['id' => intval($id)])->getResult()[0];
        $type = ucfirst($result->type);
        if ($type != 'Collector') {
            $namespace = "\\App\\Models\\" . $type . "Model";
        }
        if ($type === 'Collector') {
            $namespace = "\\App\\Models\\CollectorsModel";
        }
        $typeModel = new $namespace();
        $included[strtolower($type)] = $typeModel->listUser();

        if ($type === 'Baselines') {
            $groupsModel = new \App\Models\GroupsModel();
            $included['groups'] = $groupsModel->listUser();
        }
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
        $include = array();
        $instance = & get_instance();

        $baselinesModel = new \App\Models\BaselinesModel();
        $include['baselines'] = $baselinesModel->listUser();

        $benchmarksModel = new \App\Models\BenchmarksModel();
        $include['benchmarks'] = $benchmarksModel->listUser();

        $collectorsModel = new \App\Models\CollectorsModel();
        $include['collectors'] = $collectorsModel->listUser();

        $cloudsModel = new \App\Models\CloudsModel();
        $include['clouds'] = $cloudsModel->listUser();

        $discoveriesModel = new \App\Models\DiscoveriesModel();
        $include['discoveries'] = $discoveriesModel->listUser();

        $groupsModel = new \App\Models\GroupsModel();
        $include['groups'] = $groupsModel->listUser();

        $integrationsModel = new \App\Models\IntegrationsModel();
        $include['integrations'] = $integrationsModel->listUser();

        $queriesModel = new \App\Models\QueriesModel();
        $include['queries'] = $queriesModel->listUser();

        $reportsModel = new \App\Models\ReportsModel();
        $include['reports'] = $reportsModel->listUser();

        $summariesModel = new \App\Models\SummariesModel();
        $include['summaries'] = $summariesModel->listUser();

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
        $properties[] = 'tasks.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'tasks.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'tasks');
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
        $result = $this->builder->getWhere(['id' => intval($id)])->getResult();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        if ($result !== false) {
            for ($i = 0; $i < count($result); $i++) {
                if ($result[$i]->type !== 'reports' && $result[$i]->type !== 'collector') {
                    $sql = 'SELECT id, name FROM `' . $result[$i]->type . '` WHERE id = ?';
                    $data_result = $this->db->query($sql, [$result[$i]->sub_resource_id])->getResult();
                    if (!empty($data_result[0]->name)) {
                        $result[$i]->{$result[$i]->type . '.id'} = $data_result[0]->id;
                        $result[$i]->{$result[$i]->type . '.name'} = $data_result[0]->name;
                        $result[$i]->sub_resource_name = $data_result[0]->name;
                    } else {
                        $result[$i]->sub_resource_name = '';
                    }
                } else {
                    $result[$i]->sub_resource_name = '';
                }
            }
        }
        return format_data($result, 'tasks');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('tasks')) {
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
            $received = new \stdClass();
            if (gettype($data->options) === 'object' or gettype($data->options) === 'array') {
                foreach ($data->options as $key => $value) {
                        $received->$key = $value;
                }
            }
            $existing = new \stdClass();
            if (!empty($data->id)) {
                $select = 'SELECT * FROM tasks WHERE id = ?';
                $result = $this->db->query($select, array($data->id))->getResult();
                if (empty($result)) {
                    // ID provided, but does not exist
                    return null;
                }
                if (!empty($result[0]->options)) {
                    try {
                        $existing = json_decode($result[0]->options, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $e) {
                        log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                    }
                }
            }
            $new = new \stdClass();
            foreach ($existing as $existing_key => $existing_value) {
                if (isset($received->$existing_key)) {
                    $new->$existing_key = $received->$existing_key;
                } else {
                    $new->$existing_key = $existing->$existing_key;
                }
            }
            $data->options = (string)json_encode($new);
        }
        if (! empty($data->{'minute[]'}) && is_array($data->{'minute[]'})) {
            $data->minute = implode(',', $data->{'minute[]'});
            unset($data->{'minute[]'});
        }
        if (! empty($data->{'hour[]'}) && is_array($data->{'hour[]'})) {
            $data->hour = implode(',', $data->{'hour[]'});
            unset($data->{'hour[]'});
        }
        if (! empty($data->{'day_of_month[]'}) && is_array($data->{'day_of_month[]'})) {
            $data->day_of_month = implode(',', $data->{'day_of_month[]'});
            unset($data->{'day_of_month[]'});
        }
        if (! empty($data->{'month[]'}) && is_array($data->{'month[]'})) {
            $data->month = implode(',', $data->{'month[]'});
            unset($data->{'month[]'});
        }
        if (! empty($data->{'day_of_week[]'}) && is_array($data->{'day_of_week[]'})) {
            $data->day_of_week = implode(',', $data->{'day_of_week[]'});
            unset($data->{'day_of_week[]'});
        }
        $data = $this->updateFieldData('tasks', $data);
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

        $collection = 'tasks';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'type', 'sub_resource_name', 'minute', 'hour', 'day_of_month', 'month', 'day_of_week', 'enabled', 'last_run', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','type','sub_resource_id','uuid','enabled','minute','hour','day_of_month','month','day_of_week');
        $dictionary->attributes->fields = $this->db->getFieldNames($collection);
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection);
        $dictionary->attributes->update = $this->updateFields($collection);

        $dictionary->sentence = 'Open-AudIT Professional and Enterprise include Task Scheduling. Schedule device discovery, report generation, or run a baseline check on any schedule you need, as often as you need, or run them on-demand from one interface.';

        $dictionary->about = '<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br /><br />Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br /><br />The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br /><br />If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discovery\'s ID in <code>sub_resource_id</code>.<br /><br />The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br /><br />The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br /><br /></p>';

        $dictionary->product = 'professional';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->type = 'The type of task to run.';
        $dictionary->columns->sub_resource_id = 'The ID of the item of type (discoveries, reports, etc).';
        $dictionary->columns->uuid = 'The unique identifier of this server.';
        $dictionary->columns->enabled = 'Is this task enabled (y/n).';
        $dictionary->columns->minute = 'The minute of the hour when this task should execute (* for every minute).';
        $dictionary->columns->hour = 'The hour of the day when this task should execute (* for every hour).';
        $dictionary->columns->day_of_month = 'The day of the month when this task should execute (* for every day).';
        $dictionary->columns->month = 'The month of the year when this task should execute (* for every month).';
        $dictionary->columns->day_of_week = 'The day of the week when this task should execute (* for every day).';
        $dictionary->columns->delay_minutes = 'Unused.';
        $dictionary->columns->expire_minutes = 'Unused.';
        $dictionary->columns->first_run = "The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to '2017-06-01 09:59:00'. This value should be zero padded (ie, 09, not 9). This value defaults to '2001-01-01 00:00:00' which means by default, a scheduled task will run at next scheduled execution time.";
        $dictionary->columns->last_run = 'The last date and time this task was executed (read only).';
        $dictionary->columns->email_address = 'The email address of the reciever';
        $dictionary->columns->format = 'The format used for the output to be emailed.';
        $dictionary->columns->group_id = 'The Group used to run the Baseline. Links to <code>groups.id</code>.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
