<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class AgentsModel extends BaseModel
{
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
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null): ?int
    {
        if (empty($data)) {
            return null;
        }
        if (is_array($data->inputs) or is_object($data->inputs)) {
            $new_inputs = array();
            foreach ($data->inputs as $input) {
                $item = new \stdClass();
                foreach ($input as $key => $value) {
                    $item->{$key} = $value;
                }
                $new_inputs[] = $item;
            }
            $data->inputs = json_encode($new_inputs);
        }

        if (is_array($data->outputs) or is_object($data->outputs)) {
            $new_outputs = array();
            foreach ($data->outputs as $output) {
                $item = new \stdClass();
                foreach ($output as $key => $value) {
                    $item->{$key} = $value;
                }
                $new_outputs[] = $item;
            }
            $data->outputs = json_encode($new_outputs);
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

    public function download(int $id = 0): ?string
    {
        $instance = & get_instance();
        // $result = $this->read($id);
        // $data = $result[0]->attributes;
        // if (empty($data)) {
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
     * [execute description]
     * @param  [type] $parameters MUST contain either a device ID or a device object, SHOULD contain an action, default is to update, SHOULD contain a discovery ID for logging
     * @return [type]             [description]
     */
    public function execute()
    {
        log_message('debug', 'AgentsExecute called.');
        return;
    }


    public function getByOs(string $os = ''): ?int
    {
        switch (strtolower($os)) {
            case 'linux':
                $script = 'agent_installer_linux.sh';
                break;

            case 'darwin':
            case 'osx':
                $script = 'agent_installer_apple.sh';
                break;

            case 'windows':
                $script = 'agent_installer_windows.ps1';
                break;

            default:
                $audit_script = '';
                break;
        }
        $sql = "SELECT * FROM agents WHERE os = ? LIMIT 1";
        $query = $this->db->query($sql, [$audit_script])->getResult();
        if (empty($query[0]->id)) {
            // Invalid OS
            log_message('error', "Invalid OS provided to ScriptsModel::getByOs ($os).");
            return null;
        }
        return intval($query[0]->id);
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
        $locationsModel = new \App\Models\LocationsModel();
        $included['locations'] = $locationsModel->listUser();
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
        $instance = & get_instance();
        $locationsModel = new \App\Models\LocationsModel();
        $include = array();
        $include['locations'] = $locationsModel->listUser();
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
     * Read the entire collection from the database
     *
     * @return array  An array of all entries
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
     * Reset a table
     *
     * @return bool Did it work or not?
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
     * @param  object  $data The data attributes
     *
     * @return bool    true || false depending on success
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
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
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
        $dictionary->sentence = 'Think \'if this, then that\' for devices with an Agent installed.';

        $dictionary->about = '<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It doesn\'t matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>';

        $dictionary->notes = '<p></p>';

        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->weight = 'A lower number means it will be applied before other rules.';

        $dictionary->columns->test_minutes = 'If this many or more minutes have passed since the device contacted the server, perform the actions.';
        $dictionary->columns->test_subnet = 'If an agent reports its primary IP is in this subnet, perform the actions.';
        $dictionary->columns->test_os = 'If the agent OS family (case insensitive) contains this string, perform the actions.';
        $dictionary->columns->tests = 'Unused.'; #'A JSON object containing an array of attributes to match.';

        $dictionary->columns->action_download = 'A URL to a file to download.';
        $dictionary->columns->action_command = 'A command to run. When the agent is Windows based, this command is run from within the powershell agent.';
        $dictionary->columns->action_audit = 'Should we run an audit and submit it (y/n).';
        $dictionary->columns->action_uninstall = 'Should we uninstall the agent (y/n).';
        $dictionary->columns->action_devices_assigned_to_location = 'Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.';
        $dictionary->columns->action_devices_assigned_to_org = "Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.";
        $dictionary->columns->actions = 'Unused.'; #'A JSON object containing an array of attributes to change if the match occurs.';

        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
