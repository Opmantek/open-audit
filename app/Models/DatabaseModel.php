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
        $db = db_connect();
        $return = array();
        $tables = $db->listTables();
        foreach ($tables as $table) {
            $item = new \StdClass();
            $item->type = 'database';
            $item->id = $table;
            $item->attributes = new \StdClass();
            
            $sql = 'SELECT COUNT(*) AS `count` FROM `' . $table . '`';
            $query = $db->query($sql);
            $result = $query->getResult();
            $item->attributes->name = $table;
            $item->attributes->count = intval($result[0]->count);

            if ($db->fieldExists('current', $table)) {
                $sql = 'SELECT COUNT(*) AS `count` FROM `' . $table . "` WHERE current = 'y'";
                $query = $db->query($sql);
                $result = $query->getResult();
                $item->attributes->current_row = true;
                $item->attributes->current = intval($result[0]->count);
                $item->attributes->non_current = intval($item->attributes->count -$item->attributes->current);
            } else {
                $item->attributes->current_row = false;
            }

            if ($db->fieldExists('org_id', $table)) {
                $item->attributes->org_id_row = true;
            } else {
                $item->attributes->org_id_row = false;
            }

            if ($db->fieldExists('device_id', $table)) {
                $item->attributes->device_id_row = true;
            } else {
                $item->attributes->device_id_row = false;
            }
            $return[] = $item;
        }
        return $return;
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
    public function listUser()
    {
        $query = $this->db->listTables();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query;
    }

    public function read(string $table = ''): array
    {
        $db = db_connect();
        $builder = $db->table($table);
        $item = new \stdClass();
        $item->id = $table;
        $item->attributes = new \stdClass();
        # Count all rows
        $item->attributes->count = $builder->countAll();
        # Count current rows
        $item->attributes->current = 0;
        $item->attributes->non_current = 0;
            $item->attributes->current_row = false;
        if ($db->fieldExists('current', $table)) {
            $builder->where('current', 'y');
            $item->attributes->current = $builder->countAllResults();
            $item->attributes->non_current = $item->attributes->count - $item->attributes->current;
            $item->attributes->current_row = true;
        }
        if ($db->fieldExists('org_id', $table)) {
            $item->attributes->org_id_row = true;
        } else {
            $item->attributes->org_id_row = false;
        }
        if ($table === 'devices') {
            $item->attributes->status = array();
            $sql = 'SELECT status, COUNT(*) AS `count` FROM system GROUP BY `status`';
            $query = $db->query($sql);
            $item->attributes->status = $query->getResult();
        }
        $item->attributes->columns = array();
        $item->attributes->columns = $db->getFieldData($table);
        foreach ($item->attributes->columns as &$column) {
            if ($column->type === 'enum') {
                $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `values` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = '" . $table . "' AND COLUMN_NAME = '" . $column->name . "'";
                $query = $db->query($sql);
                $column->values = $query->getResult()[0]->values;
            }
        }

        $result = array();
        $result[] = $item;
        return $result;
    }

    public function update($id = null, $data = null): bool
    {
        $db = db_connect();
        echo "<pre>\n";

        if ($db->tableExists('agents')) {
            $sql = "DROP TABLE agents";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->fieldExists('applications_id', 'application')) {
            $sql = "ALTER TABLE application RENAME COLUMN applications_id TO application_id";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->fieldExists('clusters_id', 'cluster')) {
            $sql = "ALTER TABLE cluster RENAME COLUMN clusters_id TO cluster_id";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->fieldExists('system_id_a', 'connections')) {
            $sql = "ALTER TABLE connections RENAME COLUMN system_id_a TO device_id_a";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->fieldExists('system_id_b', 'connections')) {
            $sql = "ALTER TABLE connections RENAME COLUMN system_id_b TO device_id_b";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->tableExists('system') and !$db->tableExists('devices')) {
            $sql = "RENAME TABLE system TO devices";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());

            $sql = "ALTER TABLE devices RENAME COLUMN attached_system_id TO attached_device_id";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());

            $sql = "ALTER TABLE devices RENAME COLUMN vm_system_id TO vm_device_id";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());

            $sql = "ALTER TABLE devices RENAME COLUMN switch_system_id TO switch_device_id";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());

            $sql = "ALTER TABLE devices CHANGE org_id org_id int(10) unsigned NOT NULL DEFAULT 1 AFTER name";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());

            $sql = "ALTER TABLE devices CHANGE description description text NOT NULL AFTER org_id";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());

            $sql = "CREATE VIEW system AS SELECT * FROM devices";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->tableExists('invoice')) {
            $sql = "DROP TABLE invoice";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->tableExists('invoice_item')) {
            $sql = "DROP TABLE invoice_item";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->tableExists('ldap_groups')) {
            $sql = "DROP TABLE ldap_groups";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if (!$db->fieldExists('refresh', 'ldap_servers')) {
            $sql = "ALTER TABLE ldap_servers DROP refresh";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if (!$db->fieldExists('refreshed', 'ldap_servers')) {
            $sql = "ALTER TABLE ldap_servers DROP refreshed";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if (!$db->fieldExists('parent_id', 'locations')) {
            $sql = "ALTER TABLE locations ADD parent_id int(10) unsigned DEFAULT '1' AFTER description";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if (!$db->fieldExists('sub_type', 'locations')) {
            $sql = "ALTER TABLE locations ADD sub_type enum('location','building','floor','room','row','') DEFAULT 'location' AFTER type";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if (!$db->fieldExists('notes', 'locations')) {
            $sql = "ALTER TABLE locations ADD notes TEXT NOT NULL AFTER options";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        $component_tables = array('application', 'attachment', 'audit_log', 'bios', 'certificate', 'change_log', 'cluster', 'credential', 'discoveries', 'discovery_log', 'disk', 'dns', 'edit_log', 'field', 'file', 'graph', 'image', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'rack_devices', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
        foreach ($component_tables as $table) {
            if ($db->fieldExists('system_id', $table)) {
                $sql = "ALTER TABLE `$table` RENAME COLUMN system_id TO device_id";
                $query = $db->query($sql);
                echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
                log_message('info', (string)$db->getLastQuery());
            }
        }

        if ($db->fieldExists('guest_system_id', 'vm')) {
            $sql = "ALTER TABLE `vm` RENAME COLUMN `guest_system_id` TO `guest_device_id`";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->tableExists('notes')) {
            $sql = "DROP TABLE notes";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->tableExists('oa_change')) {
            $sql = "DROP TABLE oa_change";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->tableExists('oa_temp')) {
            $sql = "DROP TABLE oa_temp";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->tableExists('oa_user_sessions')) {
            $sql = "DROP TABLE oa_user_sessions";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        if ($db->tableExists('warranty')) {
            $sql = "DROP TABLE warranty";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        $sql = "ALTER TABLE users CHANGE roles roles longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`roles`)) AFTER email";
        $query = $db->query($sql);
        echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
        log_message('info', (string)$db->getLastQuery());

        $sql = "ALTER TABLE users CHANGE orgs orgs longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`orgs`)) AFTER roles";
        $query = $db->query($sql);
        echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
        log_message('info', (string)$db->getLastQuery());

        if (!$db->fieldExists('toolbar_style', 'users')) {
            $sql = "ALTER TABLE users ADD toolbar_style enum('','icon','text','icontext') NOT NULL DEFAULT 'icontext' AFTER devices_default_display_columns";
            $query = $db->query($sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        $sql = "SELECT * FROM users";
        $query = $db->query($sql);
        $result = $query->getResult();
        foreach ($result as $item) {
            if ($item->access_token === '') {
                $sql = "UPDATE users SET access_token = '[]' WHERE id = " . intval($item->id);
                $query = $db->query($sql);
            }
        }

        $sql = "ALTER TABLE users CHANGE access_token access_token longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`access_token`)) AFTER toolbar_style";
        $query = $db->query($sql);
        echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
        log_message('info', (string)$db->getLastQuery());

        $sql = "DELETE FROM roles WHERE name = 'agent'";
        $query = $db->query($sql);
        echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
        log_message('info', (string)$db->getLastQuery());

        $sql = "SELECT * FROM `queries`";
        $query = $db->query($sql);
        $result = $query->getResult();
        foreach ($result as $item) {
            $newsql = $item->sql;
            $newsql = str_ireplace('.system_', '.device_', $newsql);
            $newsql = str_ireplace('system.', 'devices.', $newsql);
            $newsql = str_ireplace(' system ', ' devices ', $newsql);
            $my_sql = "UPDATE queries SET `sql` = " . $db->escape($newsql) . " WHERE id = " . intval($item->id);
            $query = $db->query($my_sql);
            echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }

        $sql = "UPDATE edit_log SET db_table = 'devices' WHERE db_table = 'system'";
        $query = $db->query($sql);
        log_message('info', (string)$db->getLastQuery());


        // if (!$db->tableExists('components')) {
        //     $sql = "CREATE TABLE `components` (
        //           `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        //           `device_id` int(10) unsigned DEFAULT NULL,
        //           `current` enum('y','n') NOT NULL DEFAULT 'y',
        //           `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        //           `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        //           `type` varchar(100) NOT NULL DEFAULT '',
        //           `name` varchar(250) NOT NULL DEFAULT '',
        //           `key` text NOT NULL,
        //           `parent_id` varchar(250) NOT NULL DEFAULT '',
        //           `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`details`)),
        //           PRIMARY KEY (`id`),
        //           KEY `device_id` (`device_id`),
        //           KEY `current` (`current`),
        //           KEY `type` (`type`),
        //           CONSTRAINT `component_fk_device_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
        //         ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
        //     $query = $db->query($sql);

        //     $tables = array('bios', 'certificate', 'disk', 'log', 'ip', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');

        //     foreach ($tables as $table => $limit) {
        //         $sql = "SELECT CONCAT(\"'\", column_name, \"', `\", column_name, \"`\") as `string` FROM information_schema.columns WHERE  table_name = '$table' AND table_schema = 'openaudit' AND column_name NOT IN ('id', 'system_id', 'first_seen', 'last_seen', 'current')";
        //         $columns = '';
        //         $query = $db->query($sql);
        //         $result = $query->getResult();
        //         foreach ($result as $item) {
        //             $columns .= ',' . $item->string;
        //         }
        //         $columns = substr($columns, 1);
        //         $match_columns = $this->matchColumns($table);
        //         $match_columns_string = "`" . implode("`, '-', `", $match_columns) . "`";
        //         $sql = "INSERT INTO `components` (SELECT NULL, " . $newdevice->id . ", 'y', NOW(), NOW(), '$table', " . $table . ".name, CONCAT($match_columns_string), null, JSON_OBJECT($columns) FROM `$table` ORDER BY RAND() LIMIT $limit)";
        //         $query = $db->query($sql);
        //     }
        // }

        return true;
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
        $dictionary = new \StdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new \StdClass();
        $dictionary->attributes = new \StdClass();
        $dictionary->attributes->collection = array('id', 'name', 'count');
        $dictionary->attributes->create = array();
        $dictionary->attributes->fields = array();
        $dictionary->attributes->update = array();
        $dictionary->attributes->fieldsMeta = array();
        $dictionary->about = '<p></p>';
        $dictionary->notes = '<p></p>';
        return $dictionary;
    }
}
