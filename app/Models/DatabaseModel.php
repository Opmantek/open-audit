<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class DatabaseModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function collection(): array
    {
        $return = array();
        $tables = $this->db->listTables();
        foreach ($tables as $table) {
            $item = new \stdClass();
            $item->type = 'database';
            $item->id = $table;
            $item->attributes = new \stdClass();

            $sql = 'SELECT COUNT(*) AS `count` FROM `' . $table . '`';
            $query = $this->db->query($sql);
            $result = $query->getResult();
            $item->attributes->name = $table;
            $item->attributes->count = intval($result[0]->count);

            if ($this->db->fieldExists('current', $table)) {
                $sql = 'SELECT COUNT(*) AS `count` FROM `' . $table . "` WHERE current = 'y'";
                $query = $this->db->query($sql);
                $result = $query->getResult();
                $item->attributes->current_row = true;
                $item->attributes->current = intval($result[0]->count);
                $item->attributes->non_current = intval($item->attributes->count - $item->attributes->current);
            } else {
                $item->attributes->current_row = false;
            }

            if ($this->db->fieldExists('org_id', $table)) {
                $item->attributes->org_id_row = true;
            } else {
                $item->attributes->org_id_row = false;
            }

            if ($this->db->fieldExists('device_id', $table)) {
                $item->attributes->device_id_row = true;
            } else {
                $item->attributes->device_id_row = false;
            }
            $return[] = $item;
        }
        return $return;
    }

    public function deleteAll(string $table = '', string $status = ''): bool
    {
        if ($table === 'devices') {
            log_message('info', 'In here');
            if (empty($status)) {
                log_message('info', 'no status');
                return false;
            }
            $sql = "DELETE FROM devices WHERE status = ?";
            $this->db->query($sql, [$status]);
            log_message('info', 'SQL: ' . str_replace("\n", " ", (string)$this->db->getLastQuery()));
            return true;
        }
        if (in_array($table, $this->db->listTables())) {
            $sql = "DELETE FROM $table";
            $this->db->query($sql);
            log_message('info', 'SQL: ' . str_replace("\n", " ", (string)$this->db->getLastQuery()));
            return true;
        }
        return false;
    }

    /**
     * Return an array containing all data from the given database table
     *
     * @param  string $table The name of the database table to retrieve data from
     * @return array  An array of all rows from the dsatabase table. When a column is JSON, provide $columnName.$JSONAttribute and delete $columnName
     */
    public function export(string $table = ''): array
    {
        $instance = & get_instance();
        if (!$this->db->tableExists($table)) {
            return array();
        }
        $builder = $this->db->table($table);
        $sql = "SELECT * FROM $table";
        $result = $this->db->query($sql)->getResult();
        $count = count($result);
        // Credentials Clouds both use an encrypted JSON string in the credentials column. Decode this.
        if ($table === 'clouds' or $table === 'credential' or $table === 'credentials') {
            if ($instance->config->decrypt_credentials === 'y') {
                for ($i = 0; $i < $count; $i++) {
                    try {
                        $result[$i]->credentials = json_decode(simpleDecrypt($result[$i]->credentials, config('Encryption')->key), false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $e) {
                        log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                    }
                }
            }
        }
        if ($table === 'dashboards' or $table === 'scripts' or $table === 'tasks') {
            for ($i = 0; $i < $count; $i++) {
                $result[$i]->options = json_decode($result[$i]->options);
            }
        }
        if ($table === 'discoveries') {
            for ($i = 0; $i < $count; $i++) {
                try {
                    $result[$i]->scan_options = json_decode($result[$i]->scan_options, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                try {
                    $result[$i]->match_options = json_decode($result[$i]->match_options, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
                unset($result[$i]->command_options);
            }
        }
        return $result;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(string $id = ''): array
    {
        return array();
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all Orgs
     */
    public function listAll()
    {
        $query = $this->db->listTables();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query;
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all Orgs
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        $query = $this->db->listTables();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query;
    }

    public function read(string $table = ''): array
    {
        if (!$this->db->tableExists($table)) {
            return array();
        }
        $builder = $this->db->table($table);
        $item = new \stdClass();
        $item->id = $table;
        $item->attributes = new \stdClass();
        # Count all rows
        $item->attributes->count = $builder->countAll();
        # Count current rows
        $item->attributes->current = 0;
        $item->attributes->non_current = 0;
        $item->attributes->current_row = false;
        if ($this->db->fieldExists('current', $table)) {
            $builder->where('current', 'y');
            $item->attributes->current = $builder->countAllResults();
            $item->attributes->non_current = $item->attributes->count - $item->attributes->current;
            $item->attributes->current_row = true;
        }
        if ($this->db->fieldExists('org_id', $table)) {
            $item->attributes->org_id_row = true;
        } else {
            $item->attributes->org_id_row = false;
        }
        if ($table === 'devices') {
            $item->attributes->status = array();
            $sql = 'SELECT status, COUNT(*) AS `count` FROM devices GROUP BY `status`';
            $query = $this->db->query($sql);
            $item->attributes->status = $query->getResult();
        }
        $item->attributes->columns = array();
        $item->attributes->columns = $this->db->getFieldData($table);
        foreach ($item->attributes->columns as &$column) {
            if ($column->type === 'enum') {
                $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `values` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = '" . $table . "' AND COLUMN_NAME = '" . $column->name . "'";
                $query = $this->db->query($sql);
                $column->values = $query->getResult()[0]->values;
            }
        }

        $result = array();
        $result[] = $item;
        return $result;
    }

    public function update($id = null, $data = null): bool
    {
        $output = '';
        // NOTE the below is simply because all the SQL statements in the following include files use $db->query, not $this->db->query.
        $db = db_connect();
        $instance = & get_instance();

        if (intval(config('Openaudit')->internal_version) < 20190214) {
            # upgrade for 3.0.0
            include "db_upgrades/db_3.0.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20190301) {
            # upgrade for 3.0.1
            include "db_upgrades/db_3.0.1.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20190401) {
            # upgrade for 3.0.2
            include "db_upgrades/db_3.0.2.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20190512) {
            # upgrade for 3.1.0
            include "db_upgrades/db_3.1.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20190810) {
            # upgrade for 3.2.0
            include "db_upgrades/db_3.2.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20190923) {
            # upgrade for 3.2.2
            include "db_upgrades/db_3.2.2.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20191010) {
            # upgrade for 3.3.0
            include "db_upgrades/db_3.3.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20200620) {
            # upgrade for 3.4.0
            include "db_upgrades/db_3.4.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20200810) {
            # upgrade for 3.5.0
            include "db_upgrades/db_3.5.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20201012) {
            # upgrade for 3.5.1
            include "db_upgrades/db_3.5.1.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20201115) {
            # upgrade for 3.5.2
            include "db_upgrades/db_3.5.2.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20210104) {
            # upgrade for 3.5.3
            include "db_upgrades/db_3.5.3.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20210126) {
            # upgrade for 3.5.4
            include "db_upgrades/db_3.5.4.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20210512) {
            # upgrade for 4.1.1
            include "db_upgrades/db_4.1.1.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20210620) {
            # upgrade for 4.1.2
            include "db_upgrades/db_4.1.2.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20210810) {
            # upgrade for 4.2.0
            include "db_upgrades/db_4.2.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20211112) {
            # upgrade for 4.3.0
            include "db_upgrades/db_4.3.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20211213) {
            # upgrade for 4.3.1
            include "db_upgrades/db_4.3.1.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20220321) {
            # upgrade for 4.3.3
            include "db_upgrades/db_4.3.3.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20220620) {
            # upgrade for 4.3.4
            include "db_upgrades/db_4.3.4.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20221130) {
            # upgrade for 4.4.0
            include "db_upgrades/db_4.4.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20230615) {
            include "db_upgrades/db_5.0.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20231130) {
            include "db_upgrades/db_5.0.1.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20231207) {
            include "db_upgrades/db_5.0.2.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20231219) {
            include "db_upgrades/db_5.0.3.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20240104) {
            include "db_upgrades/db_5.1.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20240512) {
            include "db_upgrades/db_5.2.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20240620) {
            include "db_upgrades/db_5.2.1.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20240621) {
            include "db_upgrades/db_5.2.2.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20240810) {
            include "db_upgrades/db_5.3.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20240822) {
            include "db_upgrades/db_5.4.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20241012) {
            include "db_upgrades/db_5.5.0.php";
        }

        if (intval(config('Openaudit')->internal_version) < 20241112) {
            include "db_upgrades/db_5.6.0.php";
        }

        $instance = & get_instance();
        $instance->data = $output;
        return true;
    }

    public function updateForm()
    {
        $instance = & get_instance();
        $result = new \stdClass();
        if (php_uname('s') === 'Windows NT') {
            exec('echo. |WMIC OS Get Caption', $output);
            if (isset($output[1])) {
                $result->operating_system = $output[1];
            } else {
                $result->operating_system = 'unknown (You must run Apache as an administrator on Windows to determine this)';
            }
        } else {
            $result->operating_system = php_uname('a');
        }

        $result->current_version = config('Openaudit')->display_version;
        $result->new_version = config('Openaudit')->displayVersion;
        $result->hostname = php_uname('n');
        $result->database_platform = $this->db->getPlatform();
        $result->database_version = $this->db->getVersion();
        $result->web_server = (!empty(getenv("SERVER_SOFTWARE"))) ? getenv("SERVER_SOFTWARE") : '';
        if (empty($result->web_server) and !empty(php_sapi_name())) {
            $result->web_server = php_sapi_name();
        }
        $result->php_version = phpversion();

        return $result;
    }


    public function matchColumns($table)
    {
        $match_columns = array();
        if ($table === 'bios') {
                $match_columns = array('manufacturer', 'model', 'serial', 'smversion', 'version');
        }
        if ($table === 'certificate') {
                $match_columns = array('name', 'issuer', 'serial', 'valid_from_raw', 'valid_to_raw');
        }
        if ($table === 'disk') {
                $match_columns = array('model', 'serial', 'hard_drive_index', 'size');
        }
        if ($table === 'dns') {
                $match_columns = array('ip', 'name', 'fqdn');
        }
        if ($table === 'file') {
                $match_columns = array('full_name', 'hash', 'inode', 'last_changed');
        }
        if ($table === 'ip') {
                $match_columns = array('ip', 'mac', 'netmask');
        }
        if ($table === 'log') {
                $match_columns = array('name', 'file_name', 'overwrite');
        }
        if ($table === 'memory') {
                $match_columns = array('bank', 'size', 'serial');
        }
        if ($table === 'module') {
                $match_columns = array('description', 'module_index', 'serial');
        }
        if ($table === 'monitor') {
                $match_columns = array('model', 'manufacturer', 'serial');
        }
        if ($table === 'motherboard') {
                $match_columns = array('model', 'manufacturer', 'serial');
        }
        if ($table === 'netstat') {
                $match_columns = array('protocol', 'ip', 'port', 'program');
        }
        if ($table === 'network') {
                $match_columns = array('mac');
        }
        if ($table === 'nmap') {
                $match_columns = array('protocol', 'ip', 'port', 'program');
        }
        if ($table === 'optical') {
                $match_columns = array('model', 'mount_point');
        }
        if ($table === 'pagefile') {
                $match_columns = array('name', 'initial_size', 'max_size');
        }
        if ($table === 'partition') {
                // $match_columns = array('name', 'hard_drive_index', 'mount_point', 'size');
                $match_columns = array('serial', 'hard_drive_index', 'mount_point', 'size');
        }
        if ($table === 'policy') {
                $match_columns = array('type', 'name', 'value', 'guid');
        }
        if ($table === 'print_queue') {
                $match_columns = array('device');
        }
        if ($table === 'processor') {
                $match_columns = array('description');
        }
        if ($table === 'radio') {
                $match_columns = array('name');
        }
        if ($table === 'route') {
                $match_columns = array('destination', 'next_hop');
        }
        if ($table === 'san') {
                $match_columns = array('serial');
        }
        if ($table === 'scsi') {
                $match_columns = array('model', 'manufacturer', 'device');
        }
        if ($table === 'server') {
                $match_columns = array('name', 'type', 'full_name', 'version');
        }
        if ($table === 'server_item') {
                $match_columns = array('name', 'type', 'instance', 'port');
        }
        if ($table === 'service') {
                // $match_columns = array('description', 'name', 'executable');
                $match_columns = array('name', 'executable');
        }
        if ($table === 'share') {
                $match_columns = array('name', 'path');
        }
        if ($table === 'software') {
                $match_columns = array('name', 'version');
        }
        if ($table === 'software_key') {
                $match_columns = array('name', 'string', 'rel', 'edition');
        }
        if ($table === 'sound') {
                $match_columns = array('model', 'manufacturer');
        }
        if ($table === 'task') {
                $match_columns = array('name', 'task');
        }
        if ($table === 'usb') {
                $match_columns = array('device');
        }
        if ($table === 'user') {
                $match_columns = array('name', 'sid', 'keys');
        }
        if ($table === 'user_group') {
                $match_columns = array('name', 'sid');
        }
        if ($table === 'variable') {
                $match_columns = array('program', 'name', 'value');
        }
        if ($table === 'video') {
                $match_columns = array('model');
        }
        if ($table === 'vm') {
                $match_columns = array('uuid');
        }
        if ($table === 'windows') {
                $match_columns = array('service_pack', 'build_number');
        }
        return($match_columns);
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $collection = 'database';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();
        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'count');
        $dictionary->attributes->create = array();
        $dictionary->attributes->fields = array();
        $dictionary->attributes->update = array();
        $dictionary->attributes->fieldsMeta = array();
        $dictionary->sentence = '';
        $dictionary->about = '';
        $dictionary->notes = '';
        return $dictionary;
    }
}
