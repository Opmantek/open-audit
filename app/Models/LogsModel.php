<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class Logs extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('logs');
    }

    /**
     * Read the collection from the database
     *
     * @param  $resp object An object containing the properties, filter, sort and limit as passed by the user
     * @return array        An array of formatted Orgs
     */
    public function collection(object $resp): array
    {
        $properties = $resp->meta->properties;
        $this->builder->select($properties);
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->orderBy($resp->meta->sort);
        if (!empty($resp->meta->groupby)) {
            $this->builder->groupBy($resp->meta->groupby);
        }
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        $error = $this->db->error();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'logs');
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    // public function create($data = null): int|false
    public function create($data = null)
    {
        $router = \Config\Services::router();
        if (empty($data)) {
            return false;
        }
        $data->severity = intval($data->severity);
        if (empty($data->severity)) {
            $data->severity = 7;
        }
        if (!empty($data->code)) {
            $logError = getErrorCode($data->code);
        }
        if (!empty($logError) and $logError->severity < $data->severity) {
            $data->severity = intval($logError->severity);
        }
        if ($data->severity > intval(config('Openaudit')->log_level)) {
            return 0;
        }
        if (empty($data->severity)) {
            switch ($data->severity) {
                // NOTE - This is not used and will never be hit because of the empty test above
                case 0:
                    $data->severity_text = 'emergency';
                    break;

                case 1:
                    $data->severity_text = 'alert';
                    break;

                case 2:
                    $data->severity_text = 'critical';
                    break;

                case 3:
                    $data->severity_text = 'error';
                    break;

                case 4:
                    $data->severity_text = 'warning';
                    break;

                case 5:
                    $data->severity_text = 'notice';
                    break;

                case 6:
                    $data->severity_text = 'info';
                    break;

                case 7:
                    $data->severity_text = 'debug';
                    break;
                
                default:
                    $data->severity_text = 'debug';
                    break;
            }
        }
        $data->request_microtime = config('OpenAudit')->microtime;
        $data->type = (!empty($data->type)) ? $data->type : 'access';
        $data->pid = getmypid();
        $data->user = get_instance()->user->name;
        $data->server = php_uname('n');
        $data->ip = (! empty($_SERVER['REMOTE_ADDR'])) ? (! empty($_SERVER['REMOTE_ADDR'])) : '127.0.0.1';
        if ($data->ip === true) {
            $data->ip = '127.0.0.1';
        }
        $data->collection = (!empty($data->collection)) ? $data->collection : strtolower(str_replace('\App\Controllers\\', '', $router->controllerName()));
        $data->action = (!empty($data->action)) ? $data->action : $router->methodName();
        $data->function = debug_backtrace()[1]['function'];
        $data->status = (!empty($data->status)) ? $data->status : @$logError->status;
        $data->summary = (!empty($data->summary)) ? $data->summary : @$logError->summary;
        $data->detail = (!empty($data->detail)) ? $data->detail : @$logError->detail;

        $data = $this->createFieldData('logs', $data);
        $this->builder->insert($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return ($this->db->insertID());
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
     * Read the entire collection from the database, not restricted to the user
     *
     * @return array  An array of all Orgs
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
     * Read the entire collection from the database
     *
     * @return array  An array of all Orgs
     */
    public function listUser($user = null): array
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
     * @param int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read(int $id = 0): array
    {
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'logs');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('logs')) {
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
        // Accept our client data
        $data = $this->updateFieldData('logs', $data);
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

        $collection = 'orgs';
        $dictionary = new \StdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new \StdClass();

        $dictionary->attributes = new \StdClass();
        $dictionary->attributes->collection = array('id', 'name', 'collection', 'action', 'function');
        $dictionary->attributes->create = array('timestamp'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->about = '';

        $dictionary->notes = '';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->timestamp = 'The date and time of the logs entry.';
        $dictionary->columns->request_microtime = 'The microtime of the entire request this log entry is associated with.';
        $dictionary->columns->type = 'system or access. System denotes regular logs where-as access denotes a user access log.';
        $dictionary->columns->severity = 'Standard Unix style log levels - 0: Emergency, 1: Alert, 2: Critical, 3: Error, 4: Warning, 5: Notice, 6: Info, 7: Debug.';
        $dictionary->columns->severity_text = 'The matching text as per the severity entry. Automatically set.';
        $dictionary->columns->pid = 'The process ID of the entire request this log entry is associated with.';
        $dictionary->columns->user = 'The user associated with the request.';
        $dictionary->columns->server = 'Unused';
        $dictionary->columns->ip = 'The user IP associated with this request.';
        $dictionary->columns->collection = 'The collection requested.';
        $dictionary->columns->action = 'The action requested (create, read, update, delete, execute, etc).';
        $dictionary->columns->function = 'The internal file and function logging this entry.';
        $dictionary->columns->status = 'The overall status of this log entry.';
        $dictionary->columns->summary = 'A short description of this entry.';
        $dictionary->columns->detail = 'A more detailed entry often containing data about this entry.';
        return $dictionary;
    }
}
