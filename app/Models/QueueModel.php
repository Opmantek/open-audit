<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class QueueModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('queue');
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
    public function collection(string $type = ''): array
    {
        if ($type !== 'discoveries' and $type !== 'scans' and $type !== 'audits') {
            $sql = "SELECT * FROM `queue`";
        } else {
            $sql = "SELECT * FROM `queue` WHERE `type` = '$type'";
        }
        $query = $this->db->query($sql);
        $result = $query->getResult();
        if (!empty($result) and is_array($result)) {
            for ($i = 0; $i < count($result); $i++) {
                if (!empty($result[$i]->details)) {
                    try {
                        $result[$i]->details = json_decode($result[$i]->details, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $e) {
                        log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                    }
                    foreach ($result[$i]->details as $key => $value) {
                        $result[$i]->{'details.' . $key} = $value;
                    }
                } else {
                    $result[$i]->details = new \stdClass();
                }
            }
            return $result;
        } else {
            return array();
        }
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
        if (empty($data->details) or empty($data->type)) {
            log_message('error', 'Empty type or details supplied to QueueModel::create.');
            return null;
        }
        if (is_string($data->details)) {
            try {
                $data->details = json_decode($data->details, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
        }
        $org_id = (!empty($data->details->org_id)) ? intval($data->details->org_id) : 1;
        $name = (!empty($data->details->name)) ? $data->details->name : '';
        $details = json_encode($data->details);
        $sql = "LOCK TABLES queue WRITE";
        $this->db->query($sql);
        $sql = "INSERT INTO `queue` VALUES (null, ?, ?, ?, 0, 'queued', ?, NOW(), '2000-01-01 00:00:00')";
        $this->db->query($sql, [$name, $data->type, $org_id, $details]);
        $result = intval($this->db->insertID());
        $sql = "UNLOCK TABLES";
        $query = $this->db->query($sql);
        if (!empty($result)) {
            return $result;
        } else {
            log_message('error', 'Could not create queue item.');
            return null;
        }
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
        return format_data($query->getResult(), 'queue');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('queue')) {
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
        return false;
    }

    # Return a queue item or FALSE
    # If nothing left in queue table, reset auto-inc
    public function pop()
    {
        $queue_item = false;
        $sql = "LOCK TABLES queue WRITE";
        $query = $this->db->query($sql);
        $sql = 'SELECT * FROM `queue` ORDER BY `id` LIMIT 1';
        $query = $this->db->query($sql);
        $result = $query->getResult();
        if (empty($result)) {
            $sql = 'ALTER TABLE queue AUTO_INCREMENT = 1';
            $query = $this->db->query($sql);
        } else {
            $queue_item = $result[0];
            $sql = 'DELETE FROM `queue` WHERE `id` = ?';
            $query = $this->db->query($sql, [$queue_item->id]);
        }
        $sql = "UNLOCK TABLES";
        $query = $this->db->query($sql);
        return $queue_item;
    }

    /**
     * [start description]
     * @return [type] [description]
     */
    public function start()
    {
        if (php_uname('s') === 'Windows NT') {
            $command = "%comspec% /c start /b c:\\xampp\\php\\php.exe " . FCPATH . "index.php queue start";
            log_message('debug', $command);
            pclose(popen($command, 'r'));
        } elseif (php_uname('s') === 'Darwin') {
            $command = 'php ' . FCPATH . 'index.php queue start > /dev/null 2>&1 &';
            log_message('debug', $command);
            @exec($command);
        } else {
            $command = 'nohup php ' . FCPATH . 'index.php queue start > /dev/null 2>&1 &';
            log_message('debug', $command);
            @exec($command);
        }
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'attributes';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'resource', 'type', 'name', 'value', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','type','resource','value'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'An internal table used for queuing discovery items.';

        $dictionary->about = '<p>Attributes are stored for Open-AudIT to use for particular fields.</p>';

        $dictionary->notes = '<p></p>';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->resource = 'The foreign table to reference. Should be one of: devices, locations, orgs or queries.';
        $dictionary->columns->type = 'The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.';
        $dictionary->columns->name = 'The text that is displayed.';
        $dictionary->columns->value = 'The value that is stored for this particular item.';
        $dictionary->columns->pid = 'The process identifier of this queue item.';
        $dictionary->columns->status = 'The status of this queued item.';
        $dictionary->columns->details = 'A JSON representation containing the details of the queue item to be executed.';
        $dictionary->columns->started_date = 'When this queue item started processing.';
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
