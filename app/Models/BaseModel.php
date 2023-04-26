<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
declare(strict_types=1);

namespace App\Models;

use CodeIgniter\Model;

use stdClass;

class BaseModel extends Model
{

    public function __construct()
    {
        // $this->session = \Config\Services::session();
        // $this->uri = new \CodeIgniter\HTTP\URI(current_url(true));
        $this->sql_file = '/Users/mark/code/open-audit-5/open-audit.sql';
    }


    public function createFieldData($table, $data)
    {
        $db = db_connect();
        $insert_data = new \stdClass();
        $instance = & get_instance();
        if (empty($dictionary)) {
            $dictionary = $instance->{$table.'Model'}->dictionary();
        }

        # Our MUST have attributes
        foreach ($dictionary->attributes->create as $field) {
            if (!isset($data->{$field}) or $data->{$field} === '') {
                $session = \Config\Services::session();
                $session->setFlashdata('error', "Object in {$table} could not be created, no {$field} supplied.");
                $log = new \stdClass();
                $log->severity = 3;
                $log->summary = 'Create is missing a mandatory field';
                $log->detail = "m_{$table}::create Missing field: {$field}";
                stdlog($log);
                return false;
            }
        }

        # Set any non-provided TEXT database columns to an empty string
        foreach ($dictionary->attributes->fieldsMeta as $definition) {
            if ($definition->type === 'text' and empty($data->{$definition->name})) {
                // NOTE - Provide a blank string if column type is TEXT but empty (or not set)
                //        because TEXT cannot have a default value in MySQL
                //        If we don't do this, strict mode MySQL will fail
                // NOTE #2 - All columns in our schema except IDs (and *_id) have
                //           NOT NULL DEFAULT <default> set, except TEXT type.
                $insert_data->{$definition->name} = '';
            }
        }

        # Only include valid fields in the result
        foreach ($dictionary->attributes->update as $field) {
            if (isset($data->{$field})) {
                $insert_data->{$field} = $data->{$field};
            }
        }

        # Set the Edited By value to the of the username or system.
        if ($db->fieldExists('edited_by', $table)) {
            $insert_data->edited_by = 'system';
            if (!empty($instance->user->full_name)) {
                $insert_data->edited_by = $instance->user->full_name;
            }
        }
        if ($db->fieldExists('edited_date', $table)) {
            $insert_data->edited_date = config('Openaudit')->timestamp;
        }
        return $insert_data;
    }

    public function updateFieldData($table, $data)
    {
        $db = db_connect();
        $update_data = new \stdClass();
        $instance = & get_instance();
        $updateFields = $this->updateFields($table);

        # Our allowed attributes
        foreach ($updateFields as $field) {
            if (isset($data->{$field})) {
                $update_data->{$field} = $data->{$field};
            }
        }
        # Set the Edited By value to the of the username or system.
        if ($db->fieldExists('edited_by', $table)) {
            $update_data->edited_by = 'system';
            if (!empty($instance->user->full_name)) {
                $update_data->edited_by = $instance->user->full_name;
            }
        }
        if ($db->fieldExists('edited_date', $table)) {
            $update_data->edited_date = config('Openaudit')->timestamp;
        }
        return $update_data;
    }

    public function sqlError($error = null)
    {
        if (!empty($error['code'])) {
            $error['sql'] = str_replace("\n", " ", (string)$this->db->getLastQuery());
            $log = new \stdClass();
            $log->severity = 3;
            $log->summary = 'SQL Error';
            $log->detail = json_encode($error);
            stdlog($log);
            $GLOBALS['stash'] = $error;
            return $error;
        }
        return false;
    }

    public function tableReset(string $table = ''): bool
    {
        $db = db_connect();

        $sql = "DELETE FROM `{$table}`";
        $query = $db->query($sql);
        if ($this->sqlError($db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($GLOBALS['stash']));
            return false;
        }

        $sql = "ALTER TABLE `{$table}` AUTO_INCREMENT = 1";
        $query = $db->query($sql);
        if ($this->sqlError($db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($GLOBALS['stash']));
            return false;
        }

        $sql = "OPTIMIZE TABLE `{$table}`";
        $query = $db->query($sql);
        if ($this->sqlError($db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($GLOBALS['stash']));
            return false;
        }

        $this->sql_file = '/Users/mark/code/open-audit-5/open-audit.sql';
        $sql_file = file($this->sql_file);
        for ($i=0; $i < count($sql_file); $i++) {
            if (stripos($sql_file[$i], "INSERT INTO `{$table}` VALUES") !== false) {
                $db->query($sql_file[$i]);
                if ($this->sqlError($db->error())) {
                    \Config\Services::session()->setFlashdata('error', json_encode($GLOBALS['stash']));
                    return false;
                }
            }
        }

        \Config\Services::session()->setFlashdata('success', "The {$table} table has been reset - existing data removed and default data inserted.");
        return true;
    }

    public function tableDefaults(string $table = ''): array
    {
        $result = array();
        $sql_file = file($this->sql_file);
        for ($i=0; $i < count($sql_file); $i++) {
            if (stripos($sql_file[$i], "INSERT INTO `{$table}` VALUES") !== false) {
                $result[] = $sql_file[$i];
            }
        }
        #echo "<pre>\n"; print_r($result); exit;
        return ($result);
    }

    /**
     * Return an array of columns the user is permitted to change the value of.
     * @param  string $collection The collection
     * @return array              An array of columns the user can update
     */
    public function updateFields(string $collection = ''): array
    {
        if (empty($collection)) {
            return array();
        }
        if (!$this->db->tableExists($collection)) {
            return array();
        }
        $fields = $this->db->getFieldNames($collection);
        // Remove any non-user setable columns
        foreach ($fields as $key => $value) {
            if ($value === 'id') {
                unset($fields[$key]);
            }
            if ($value === 'edited_by') {
                unset($fields[$key]);
            }
            if ($value === 'edited_date') {
                unset($fields[$key]);
            }
        }
        $fields = array_values($fields);
        return $fields;
    }
}
