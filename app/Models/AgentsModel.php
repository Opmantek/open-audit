<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class AgentsModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'agents' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('agents');
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
     * @param  object|array|null $data The data attributes
     *
     * @return int|null              The integer ID of the newly created item, or null on failure
     */
    public function create($data = null): ?int
    {
        if (empty($data)) {
            return null;
        }
        $data = $this->createFieldData('agents', $data);
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
     * @param  int|null $id    The ID of the agent to delete
     * @param  bool     $purge Unused; present for interface compatibility
     *
     * @return bool            true on success, false on failure
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
     * Retrieve and prepare the Windows agent PowerShell script for download
     *
     * Reads `other/agent_windows.ps1` from the filesystem, normalises all
     * line endings to Unix style (LF), and injects the current server base
     * URL into the script's `$url` variable. Returns null if the file does
     * not exist on disk.
     *
     * @param  int    $id Unused; present for future per-agent script customisation
     * @param  string $os Unused; present for future OS-specific script selection
     *
     * @return string|null  The prepared script content, or null if the file is missing
     */
    public function download(int $id = 0, string $os = ''): ?string
    {
        $instance = & get_instance();
        // $result = $this->read($id);
        // $data = $result[0]->attributes;
        // if (empty($id)) {
        //     log_message('error', 'No script returned when ScriptsModel::download called with ID ' . $id);
        //     return null;
        // }
        $filename = ROOTPATH . 'other/agent_windows.ps1';
        if (!file_exists($filename)) {
            log_message('error', "Script does not exist on filesystem for $filename.");
            return null;
        }
        $file = file_get_contents($filename);
        // Force all line endings to be Unix style
        // Windows audit scripts with Unix line endings work
        // Unix audit scripts with Windows line endings do not work (bash for one, chokes)
        $file = str_replace("\r\n", "\n", $file);
        $file = str_replace("\r", "\n", $file);
        // Set our URL
        $file = str_replace('$url = ""', '$url = "' . base_url() . '"', $file);
        return $file;
    }

    /**
     * Execute agent actions (stub)
     *
     * Reserved for future implementation. Currently logs a debug message and
     * returns immediately without performing any actions.
     *
     * @return void
     */
    public function execute()
    {
        log_message('debug', 'AgentsExecute called.');
        return;
    }

    /**
     * Return supplementary data for a single agent's read view
     *
     * Fetches the list of locations accessible to the current user so the
     * view can display or link location information alongside the agent record.
     *
     * @param  int   $id Unused; present for interface compatibility
     *
     * @return array     Associative array with key 'locations' containing an
     *                   array of user-accessible location objects
     */
    public function includedRead(int $id = 0): array
    {
        $included = array();
        $locationsModel = new \App\Models\LocationsModel();
        $included['locations'] = $locationsModel->listUser();
        return $included;
    }

    /**
     * Return supplementary data for the agent create/edit form
     *
     * Fetches the list of locations accessible to the current user so the
     * form can populate location assignment drop-downs.
     *
     * @param  int   $id Unused; present for interface compatibility
     *
     * @return array     Associative array with key 'locations' containing an
     *                   array of user-accessible location objects
     */
    public function includedCreateForm(int $id = 0): array
    {
        $instance = & get_instance();
        $locationsModel = new \App\Models\LocationsModel();
        $include = array();
        $include['locations'] = $locationsModel->listUser();
        return $include;
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
     * @return array        An array of formatted agent entries
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
        $properties[] = 'agents.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'agents.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'agents');
    }

    /**
     * Read every agent from the database with no org-based filtering
     *
     * Returns all rows from the `agents` table ordered by the `weight`
     * column ascending. Use {@see listUser()} when results should be
     * restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every agent row
     */
    public function listAll(): array
    {
        $this->builder->orderBy('weight');
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
        return format_data($query->getResult(), 'agents');
    }

    /**
     * Truncate the agents table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'agents' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('agents')) {
            return true;
        }
        return false;
    }

    /**
     * Update an individual item in the database
     *
     * @param  int|null          $id   The ID of the agent to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        $data = $this->updateFieldData('agents', $data);
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    /**
     * Build and return the data dictionary for the agents collection
     *
     * Constructs a stdClass describing the `agents` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('agents')
     *  - columns     : per-column human-readable descriptions and allowed values
     *  - attributes  : lists of fields used for collection display, create, and update
     *  - sentence    : a one-line summary of the resource
     *  - about       : an HTML paragraph describing the resource
     *  - notes       : additional free-text notes (may be empty)
     *  - link        : URL to external documentation
     *  - product     : minimum product tier required ('enterprise')
     *
     * @return object  Populated stdClass dictionary object
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'agents';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description');
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields
        $dictionary->sentence = 'Think <code>if this, then that</code> for devices with an Agent installed.';

        $dictionary->about = '<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>';

        $dictionary->notes = '';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->weight = 'A lower number means it will be applied before other rules.';

        $dictionary->columns->test_minutes = 'If this many or more minutes have passed since the device contacted the server, perform the actions.';
        $dictionary->columns->test_subnet = 'If an agent reports its primary IP is in this subnet, perform the actions.';
        $dictionary->columns->test_os = 'If the agent OS family (case insensitive) contains this string, perform the actions.';

        #'A JSON object containing an array of attributes to match.';
        $dictionary->columns->tests = 'Unused.';

        $dictionary->columns->action_download = 'A URL to a file to download.';
        $dictionary->columns->action_command = 'A command to run. When the agent is Windows based, this command is run from within the powershell agent.';
        $dictionary->columns->action_audit = 'Should we run an audit and submit it (y/n).';
        $dictionary->columns->action_uninstall = 'Should we uninstall the agent (y/n).';
        $dictionary->columns->action_delay = 'The delay between the Agent checking in and when it should execute the action. This is the maximum value of a random number of minutes starting at 0.';
        $dictionary->columns->action_devices_assigned_to_location = 'Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.';
        $dictionary->columns->action_devices_assigned_to_org = 'Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.';

        #'A JSON object containing an array of attributes to change if the match occurs.';
        $dictionary->columns->actions = 'Unused.';

        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
