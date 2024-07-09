<?php
$output .= "Upgrade database to 5.3.0 commenced.\n\n";

if ($db->fieldExists('edid_version', 'monitor')) {
    $sql = "ALTER TABLE `monitor` DROP `edid_version`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('interface', 'monitor')) {
    $sql = "ALTER TABLE `monitor` ADD `interface` varchar(100) NOT NULL DEFAULT '' AFTER `aspect_ratio`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('benchmarks')) {
    $sql = "CREATE TABLE `benchmarks` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `name` varchar(200) NOT NULL DEFAULT '',
        `org_id` int(10) unsigned NOT NULL DEFAULT '1',
        `description` text NOT NULL,
        `os` varchar(200) NOT NULL DEFAULT '',
        `type` varchar(200) NOT NULL DEFAULT '',
        `install` enum('y','n') NOT NULL DEFAULT 'y',
        `devices` text NOT NULL,
        `last_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        `edited_by` varchar(200) NOT NULL DEFAULT '',
        `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        PRIMARY KEY (`id`),
        KEY `org_id` (`org_id`),
        CONSTRAINT `benchmarks_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('benchmarks_exceptions')) {
    $sql = "CREATE TABLE `benchmarks_exceptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `external_ident` varchar(200) NOT NULL DEFAULT '',
  `benchmarks` text NOT NULL,
  `devices` text NOT NULL,
  `exemption_reason` varchar(2000) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('benchmarks_log')) {
    $sql = "CREATE TABLE `benchmarks_log` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `benchmark_id` int(10) unsigned DEFAULT NULL,
        `device_id` int(10) unsigned DEFAULT NULL,
        `timestamp` datetime DEFAULT current_timestamp(),
        `severity` enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
        `message` text NOT NULL,
        `command_output` text NOT NULL,
        PRIMARY KEY (`id`),
        KEY `system_id` (`device_id`),
        KEY `benchmark_id` (`benchmark_id`),
        CONSTRAINT `benchmarks_log_benchmark_id` FOREIGN KEY (`benchmark_id`) REFERENCES `benchmarks` (`id`) ON DELETE CASCADE,
        CONSTRAINT `benchmarks_log_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('benchmarks_policies')) {
    $sql = "CREATE TABLE `benchmarks_policies` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `external_ident` varchar(200) NOT NULL DEFAULT '',
        `name` varchar(200) NOT NULL DEFAULT '',
        `severity` varchar(200) NOT NULL DEFAULT '',
        `description` text NOT NULL,
        `rationale` text NOT NULL,
        `remediation` text NOT NULL,
        `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        `edited_by` varchar(200) NOT NULL DEFAULT '',
        `created_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        `created_by` varchar(200) NOT NULL DEFAULT '',
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('benchmarks_result')) {
    $sql = "CREATE TABLE `benchmarks_result` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `device_id` int(10) unsigned DEFAULT NULL,
        `current` enum('y','n') NOT NULL DEFAULT 'y',
        `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        `benchmark_id` int(10) unsigned DEFAULT NULL,
        `external_ident` varchar(200) NOT NULL DEFAULT '',
        `result` varchar(200) NOT NULL DEFAULT '',
        PRIMARY KEY (`id`),
        KEY `system_id` (`device_id`),
        CONSTRAINT `benchmarks_result_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "SELECT * FROM `roles`";
$roles = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

foreach ($roles as $role) {
    $permissions = json_decode($role->permissions);
    if (!empty($permissions)) {
        if ($role->name === 'org_admin') {
            $permissions->benchmarks = 'crud';
            $permissions->benchmarks_exceptions = 'crud';
            $permissions->benchmarks_policies = 'crud';
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }
    }
}

$sql = "DELETE FROM queries WHERE `name` = 'Benchmarks Query'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null,1,'Benchmarks Query','','n','For use in benchmarks (do not edit or delete)','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.os_version AS `devices.os_version`, devices.credentials AS `devices.credentials`, software.name AS `software.name`, software.version AS `software.version`, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, c1.type AS `c1.type`, c2.type AS `c2.type`, c3.type AS `c3.type` FROM devices LEFT JOIN `software` ON (devices.id = software.device_id AND software.name = \'openscap-scanne\' AND software.current = \'y\') LEFT JOIN `orgs` ON (devices.org_id = orgs.id) LEFT JOIN credentials c1 ON (JSON_EXTRACT(devices.credentials, \'$[0]\') = c1.id) LEFT JOIN credentials c2 ON (JSON_EXTRACT(devices.credentials, \'$[1]\') = c2.id) LEFT JOIN credentials c3 ON (JSON_EXTRACT(devices.credentials, \'$[2]\') = c3.id) WHERE @filter AND devices.os_family LIKE \'OSFAMILY\' AND devices.os_version LIKE \'OSVERSION%\'','','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM queries WHERE `name` = 'Devices Not in Benchmarks'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null,1,'Devices Not in Benchmarks','','n','For use in benchmarks (do not edit or delete)','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.os_version AS `devices.os_version` FROM devices WHERE @filter AND ((devices.os_family LIKE \'centos\' AND (devices.os_version LIKE \'7%\' OR devices.os_version LIKE \'8%\')) OR (devices.os_family LIKE \'debian\' AND devices.os_version LIKE \'12%\') OR (devices.os_family LIKE \'redhat\' AND (devices.os_version LIKE \'7%\' OR devices.os_version LIKE \'8%\' OR devices.os_version LIKE \'9%\')) OR (devices.os_family LIKE \'sles\' AND (devices.os_version LIKE \'15%\')) OR (devices.os_family LIKE \'suse\' AND (devices.os_version LIKE \'15%\')) OR (devices.os_family LIKE \'ubuntu\' AND (devices.os_version LIKE \'20.04%\' OR devices.os_version LIKE \'22.04%\' OR devices.os_version LIKE \'24.04%\'))) AND devices.id NOT IN (SELECT JSON_VALUE(benchmarks.devices, \'$[*]\') FROM benchmarks) GROUP BY devices.id','','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM queries WHERE `name` = 'Devices in Benchmarks'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null,1,'Devices in Benchmarks','','n','For use in benchmarks (do not edit or delete)','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.os_version AS `devices.os_version`, CONCAT(\'<a href=\"../../benchmarks/\', benchmarks.id, \'\">\', benchmarks.name, \'</a>\') AS `benchmarks_name` FROM benchmarks LEFT JOIN devices ON (JSON_CONTAINS(benchmarks.devices, devices.id, \'$\')) WHERE @filter GROUP BY devices.id, benchmarks.id','','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM queries WHERE `name` = 'Devices Could be Benchmarked'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null,1,'Devices Could be Benchmarked','','n','For use in benchmarks (do not edit or delete)', 'SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.os_version AS `devices.os_version`, CONCAT(\'<a href=\"../../benchmarks/\', benchmarks.id, \'\">\', benchmarks.name, \'</a>\') AS `benchmarks_name` FROM devices LEFT JOIN benchmarks ON (JSON_CONTAINS(benchmarks.devices, devices.id, \'$\')) WHERE @filter AND ((devices.os_family LIKE \'centos\' AND (devices.os_version LIKE \'7%\' OR devices.os_version LIKE \'8%\')) OR (devices.os_family LIKE \'debian\' AND devices.os_version LIKE \'12%\') OR (devices.os_family LIKE \'redhat\' AND (devices.os_version LIKE \'7%\' OR devices.os_version LIKE \'8%\' OR devices.os_version LIKE \'9%\')) OR (devices.os_family LIKE \'sles\' AND (devices.os_version LIKE \'15%\')) OR (devices.os_family LIKE \'suse\' AND (devices.os_version LIKE \'15%\')) OR (devices.os_family LIKE \'ubuntu\' AND (devices.os_version LIKE \'20.04%\' OR devices.os_version LIKE \'22.04%\' OR devices.os_version LIKE \'24.04%\'))) GROUP BY devices.id, benchmarks.id','','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20240810' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.3.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.3.0 completed.\n\n";
config('Openaudit')->internal_version = 20240810;
config('Openaudit')->display_version = '5.3.0';
