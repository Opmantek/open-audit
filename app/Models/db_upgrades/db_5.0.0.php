<?php
$output .= "Upgrade database to 5.0.0 commenced.\n\n";


if ($db->tableExists('agents')) {
    $sql = "DROP TABLE agents";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('applications_id', 'application')) {
    $sql = "ALTER TABLE `application` RENAME COLUMN `applications_id` TO `application_id`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','type','IoT Device','iot device','system','2000-01-01 00:00:00')";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','type','IoT Sensor','iot sensor','system','2000-01-01 00:00:00')";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','type','OT Sensor','ot sensor','system','2000-01-01 00:00:00')";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Sensor','sensor','system','2000-01-01 00:00:00')";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('org_id', 'baselines_policies')) {
    $sql = "ALTER TABLE `baselines_policies` ADD org_id int(10) unsigned DEFAULT '1' AFTER `id`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "SELECT id, name, org_id FROM baselines";
$baselines = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!empty($baselines)) {
    foreach ($baselines as $baseline) {
        $sql = "UPDATE baselines_policies SET baselines_policies.org_id = (SELECT baselines.org_id FROM baselines WHERE baselines.id = ?)";
        $query = $db->query($sql);
        $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
        log_message('info', (string)$db->getLastQuery());
    }
}

if (!$db->tableExists('baselines_results')) {
    // We will now store Baseline Result in the database
    $sql = "CREATE TABLE `baselines_results` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `org_id` int(10) unsigned NOT NULL DEFAULT '1',
        `baseline_id` int(10) unsigned NOT NULL DEFAULT '1',
        `name` varchar(200) NOT NULL DEFAULT '',
        `baseline` longtext NOT NULL,
        `result` longtext NOT NULL,
        `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        PRIMARY KEY (`id`),
        KEY `baseline_id` (`baseline_id`),
        CONSTRAINT `baselines_results_baseline_id` FOREIGN KEY (`baseline_id`) REFERENCES `baselines` (`id`) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!empty($baselines)) {
    $path = '/usr/local/opmojo/var/oae/baselines/results/';
    if (file_exists($path)) {
        $results = array_diff(scandir($path), array('.', '..'));
    }
    if (empty($results)) {
        $path = '/usr/local/omk/var/oae/baselines/results/';
        if (file_exists($path)) {
            $results = array_diff(scandir($path), array('.', '..'));
        }
    }
    if (empty($results)) {
        $path = 'c:\\omk\\var\\oae\\baselines\\results\\';
        if (file_exists($path)) {
            $results = array_diff(scandir($path), array('.', '..'));
        }
    }

    foreach ($results as $result) {
        $contents = file_get_contents($path . $result);
        $json_result = json_decode($contents);
        $json_result->org_id = 1;
        foreach ($baselines as $baseline) {
            if (intval($baseline->id) === intval($json_result->baseline->id)) {
                $json_result->org_id = intval($baseline->org_id);
            }
        }
        $sql = "INSERT INTO baselines_results VALUES (null, ?, ?, ?, ?, ?, ?)";
        $timestamp = substr($json_result->result->timestamp, 0, 4) . '-' . substr($json_result->result->timestamp, 4, 2) . '-' .
                        substr($json_result->result->timestamp, 6, 2) . ' ' . substr($json_result->result->timestamp, 8, 2) . ':' .
                        substr($json_result->result->timestamp, 10, 2) . ':' . substr($json_result->result->timestamp, 12, 2);
        $name = 'Executed on ' . $timestamp;
        $db->query($sql, [$json_result->org_id, intval($json_result->baseline->id), $name, json_encode($json_result->baseline), json_encode($json_result->result), $timestamp]);
        $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
        log_message('info', (string)$db->getLastQuery());
    }
}

if ($db->fieldExists('clusters_id', 'cluster')) {
    $sql = "ALTER TABLE `cluster` RENAME COLUMN `clusters_id` TO `cluster_id`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('system_id_a', 'connections')) {
    $sql = "ALTER TABLE `connections` RENAME COLUMN `system_id_a` TO `device_id_a`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('system_id_b', 'connections')) {
    $sql = "ALTER TABLE connections RENAME COLUMN system_id_b TO device_id_b";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->tableExists('system') and !$db->tableExists('devices')) {
    $sql = "RENAME TABLE system TO devices";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "ALTER TABLE devices RENAME COLUMN attached_system_id TO attached_device_id";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "ALTER TABLE devices RENAME COLUMN vm_system_id TO vm_device_id";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "ALTER TABLE devices RENAME COLUMN switch_system_id TO switch_device_id";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "ALTER TABLE devices CHANGE org_id org_id int(10) unsigned NOT NULL DEFAULT 1 AFTER name";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "ALTER TABLE devices CHANGE description description text NOT NULL AFTER org_id";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "CREATE VIEW system AS SELECT * FROM devices";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->tableExists('ldap_groups')) {
    $sql = "DROP TABLE ldap_groups";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('refresh', 'ldap_servers')) {
    $sql = "ALTER TABLE ldap_servers DROP refresh";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('refreshed', 'ldap_servers')) {
    $sql = "ALTER TABLE ldap_servers DROP refreshed";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('parent_id', 'locations')) {
    $sql = "ALTER TABLE locations ADD parent_id int(10) unsigned DEFAULT '1' AFTER description";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('sub_type', 'locations')) {
    $sql = "ALTER TABLE locations ADD sub_type enum('location','building','floor','room','row','') DEFAULT 'location' AFTER type";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('notes', 'locations')) {
    $sql = "ALTER TABLE locations ADD notes TEXT NOT NULL AFTER options";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$component_tables = array('application', 'attachment', 'audit_log', 'bios', 'certificate', 'change_log', 'cluster', 'credential', 'discoveries', 'discovery_log', 'disk', 'dns', 'edit_log', 'field', 'file', 'graph', 'image', 'invoice_item', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'rack_devices', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
foreach ($component_tables as $table) {
    if ($db->fieldExists('system_id', $table)) {
        $sql = "ALTER TABLE `$table` RENAME COLUMN system_id TO device_id";
        $query = $db->query($sql);
        $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
        log_message('info', (string)$db->getLastQuery());
    }
}

if ($db->fieldExists('guest_system_id', 'vm')) {
    $sql = "ALTER TABLE `vm` RENAME COLUMN `guest_system_id` TO `guest_device_id`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->tableExists('notes')) {
    $sql = "DROP TABLE notes";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->tableExists('oa_change')) {
    $sql = "DROP TABLE oa_change";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->tableExists('oa_temp')) {
    $sql = "DROP TABLE oa_temp";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->tableExists('oa_user_sessions')) {
    $sql = "DROP TABLE oa_user_sessions";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->tableExists('warranty')) {
    $sql = "DROP TABLE warranty";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE users CHANGE roles roles longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`roles`)) AFTER email";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE users CHANGE orgs orgs longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`orgs`)) AFTER roles";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('toolbar_style', 'users')) {
    $sql = "ALTER TABLE users ADD toolbar_style enum('','icon','text','icontext') NOT NULL DEFAULT 'icontext' AFTER devices_default_display_columns";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
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
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM roles WHERE name = 'agent'";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
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
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE edit_log SET db_table = 'devices' WHERE db_table = 'system'";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = 'UPDATE `rules` SET inputs = REPLACE(`inputs`, \'"table":"system"\', \'"table":"devices"\'), outputs = REPLACE(`outputs`, \'"table":"system"\', \'"table":"devices"\')';
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = 'INSERT INTO `rules` VALUES (null,\'LENOVO to Lenovo for Manufacturer\',1,\'Change the manufacturer from LENOVO to Lenovo.\',100,\'[{\"attribute\":\"manufacturer\",\"operator\":\"li\",\"table\":\"devices\",\"value\":\"LENOVO\"}]\',\'[{\"attribute\":\"manufacturer\",\"table\":\"devices\",\"value\":\"Lenovo\",\"value_type\":\"string\"}]\',\'system\',\'2001-01-01 00:00:00\')';
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE summaries SET `table` = 'devices' WHERE `table` = 'system'";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = 'UPDATE `summaries` SET extra_columns = REPLACE(`extra_columns`, "system.", "devices.")';
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `devices` SET `manufacturer` = 'Lenovo' WHERE `manufacturer` LIKE '%LENOVO%'";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = 'UPDATE `integrations` SET fields = REPLACE(`fields`, "system.", "devices.")';
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = 'UPDATE widgets SET `sql` = REPLACE(`sql`, "system.", "devices.")';
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = 'UPDATE widgets SET `primary` = REPLACE(`primary`, "system.", "devices.")';
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = 'UPDATE widgets SET `sql` = REPLACE(`sql`, "system_id", "device_id")';
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = 'UPDATE widgets SET `sql` = REPLACE(`sql`, "system", "devices")';
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE configuration SET name = 'license' WHERE name = 'oae_license'";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE configuration SET name = 'product' WHERE name = 'oae_product'";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE configuration SET value = 'devices.id,devices.icon,devices.type,devices.name,devices.ip,devices.dns_fqdn,devices.identification,devices.description,devices.manufacturer,devices.os_family,devices.status' WHERE name = 'devices_default_display_columns'";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE configuration SET value = 'devices.id,devices.icon,devices.type,devices.name,devices.ip,devices.dns_fqdn,devices.identification,devices.description,devices.manufacturer,devices.os_family,devices.status' WHERE name = 'devices_default_group_columns'";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE configuration SET value = 'devices.id,devices.uuid,devices.name,devices.ip,devices.hostname,devices.dns_hostname,devices.domain,devices.dns_domain,devices.dbus_identifier,devices.fqdn,devices.dns_fqdn,devices.description,devices.type,devices.icon,devices.os_group,devices.os_family,devices.os_name,devices.os_version,devices.manufacturer,devices.model,devices.serial,devices.form_factor,devices.status,devices.environment,devices.class,devices.function,devices.org_id,devices.location_id,devices.snmp_oid,devices.sysDescr,devices.sysObjectID,devices.sysUpTime,devices.sysContact,devices.sysName,devices.sysLocation,devices.first_seen,devices.last_seen,devices.last_seen_by,devices.identification' WHERE name = 'devices_default_retrieve_columns'";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = 'UPDATE users SET `devices_default_display_columns` = REPLACE(`devices_default_display_columns`, "system.", "devices.")';
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
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

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20230615' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "UPDATE `configuration` SET `value` = '5.0.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$output .= "Upgrade database to 5.0.0 completed.\n\n";
config('Openaudit')->internal_version = 20230615;
config('Openaudit')->display_version = '5.0.0';