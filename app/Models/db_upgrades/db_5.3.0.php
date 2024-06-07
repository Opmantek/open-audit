<?php
$output .= "Upgrade database to 5.3.0 commenced.\n\n";

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

if (!$db->tableExists('benchmarks_exception')) {
    $sql = "CREATE TABLE `benchmarks_exception` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `device_id` int(10) unsigned DEFAULT NULL,
        `current` enum('y','n') NOT NULL DEFAULT 'y',
        `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        `benchmark_id` int(10) unsigned DEFAULT NULL,
        `external_ident` varchar(200) NOT NULL DEFAULT '',
        `exemption_reason` varchar(2000) NOT NULL DEFAULT '',
        `edited_by` varchar(200) NOT NULL DEFAULT '',
        `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        PRIMARY KEY (`id`),
        KEY `benchmark_id` (`benchmark_id`),
        CONSTRAINT `benchmark_id` FOREIGN KEY (`benchmark_id`) REFERENCES `benchmarks` (`id`) ON DELETE CASCADE
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
        CONSTRAINT `benchmark_id` FOREIGN KEY (`benchmark_id`) REFERENCES `benchmarks` (`id`) ON DELETE CASCADE,
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
        `remediation_ansible` text NOT NULL,
        `remediation_bash` text NOT NULL,
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



// set our versions
$sql = "UPDATE `configuration` SET `value` = '2024810' WHERE `name` = 'internal_version'";
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
