<?php
$output .= "Upgrade database to 5.2.2 commenced.\n\n";

if (!$db->fieldExists('require_port', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` ADD `require_port` enum('y','n') NOT NULL DEFAULT 'n' AFTER ad_server";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('warranty')) {
    $sql = "CREATE TABLE `warranty` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `device_id` int(10) unsigned DEFAULT NULL,
        `current` enum('y','n') NOT NULL DEFAULT 'y',
        `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        `name` varchar(200) NOT NULL DEFAULT '',
        `description` varchar(200) NOT NULL DEFAULT '',
        `end_date` date NOT NULL DEFAULT '2000-01-01',
        `start_date` date NOT NULL DEFAULT '2000-01-01',
        `retrieved` text NOT NULL,
        `vendor` varchar(200) NOT NULL DEFAULT '',
        `tag_1` varchar(200) NOT NULL DEFAULT '',
        `tag_2` varchar(200) NOT NULL DEFAULT '',
        `tag_3` varchar(200) NOT NULL DEFAULT '',
        PRIMARY KEY (`id`),
        KEY `system_id` (`device_id`),
        CONSTRAINT `warranty_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20240621' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.2.2' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.2.2 completed.\n\n";
config('Openaudit')->internal_version = 20240621;
config('Openaudit')->display_version = '5.2.2';
