<?php

# Copyright © 2026 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class TasksModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'tasks' table.
     */
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
     * @param  object $resp An object containing the properties, filter, sort and limit as passed by the user
     *
     * @return array        An array of formatted entries
     */
    public function collection(object $resp): array
    {
        return array();
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
        return null;
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int|null $id    The ID of the task to delete
     * @param  bool     $purge Unused; present for interface compatibility
     *
     * @return bool            true on success, false on failure
     */
    public function delete($id = null, bool $purge = false): bool
    {
        return true;
    }

    /**
     * Return supplementary data for a single task's read view
     *
     * @param  int   $id The ID of the task whose supplementary data to load
     *
     * @return array     An array of supplementary data for the read view
     */
    public function includedRead(int $id = 0): array
    {
        return array();
    }

    /**
     * Return supplementary data for the task create/edit form
     *
     * @param  int   $id The ID of the task whose supplementary data to load
     *
     * @return array     An array of supplementary data for the create/edit form
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
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
     * @return array        An array of formatted tasks entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        return array();
    }

    /**
     * Read every task from the database with no org-based filtering
     *
     * Returns all rows from the `tasks` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every task row
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
        return array();
    }

    /**
     * Truncate the tasks table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'tasks' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
     */
    public function reset(string $table = ''): bool
    {
        return false;
    }

    /**
     * Update an individual item in the database
     *
     * @param  int|null          $id   The ID of the task to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        return true;
    }

    /**
     * Build and return the data dictionary for the tasks collection
     *
     * Constructs a stdClass describing the `tasks` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('tasks')
     *  - columns     : per-column human-readable descriptions and allowed values
     *  - attributes  : lists of fields used for collection display, create, and update
     *  - sentence    : a one-line summary of the resource
     *  - about       : an HTML paragraph describing the resource
     *  - notes       : additional free-text notes (may be empty)
     *  - link        : URL to external documentation
     *  - product     : minimum product tier required ('professional')
     *
     * @return object  Populated stdClass dictionary object
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

        $dictionary->about = '<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>';

        $dictionary->notes = '<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma separated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Baselines is <code>group_id</code>.<br> <br></p>';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'professional';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->type = 'The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.';
        $dictionary->columns->sub_resource_id = 'The ID of the item of the associated type.';
        $dictionary->columns->uuid = 'The unique identifier of this server.';
        $dictionary->columns->enabled = 'Is this task enabled (y/n).';
        $dictionary->columns->minute = 'The minute of the hour when this task should execute (* for every minute).';
        $dictionary->columns->hour = 'The hour of the day when this task should execute (* for every hour).';
        $dictionary->columns->day_of_month = 'The day of the month when this task should execute (* for every day).';
        $dictionary->columns->month = 'The month of the year when this task should execute (* for every month).';
        $dictionary->columns->day_of_week = 'The day of the week when this task should execute (* for every day).';
        $dictionary->columns->delay_minutes = 'Unused.';
        $dictionary->columns->expire_minutes = 'Unused.';
        $dictionary->columns->first_run = 'The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.';
        $dictionary->columns->last_run = 'The last date and time this item was executed (read only).';
        $dictionary->columns->email_address = 'The email address of the receiver';
        $dictionary->columns->format = 'The format used for the output to be emailed.';
        $dictionary->columns->group_id = 'The Group used to run the Baseline. Links to <code>groups.id</code>.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
