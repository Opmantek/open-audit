<?php
$output .= "Upgrade database to 5.5.0 commenced.\n\n";

if (!$db->tableExists('antivirus')) {
    $sql = "CREATE TABLE `antivirus` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `device_id` int(10) unsigned DEFAULT NULL,
      `current` enum('y','n') NOT NULL DEFAULT 'y',
      `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
      `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
      `name` varchar(200) NOT NULL DEFAULT '',
      `owner` varchar(255) NOT NULL DEFAULT '',
      `executable` varchar(255) NOT NULL DEFAULT '',
      `reportable` varchar(255) NOT NULL DEFAULT '',
      `state` varchar(100) NOT NULL DEFAULT '',
      `status` varchar(100) NOT NULL DEFAULT '',
      PRIMARY KEY (`id`),
      KEY `system_id` (`device_id`),
      KEY `first_seen` (`first_seen`),
      KEY `last_seen` (`last_seen`),
      KEY `name` (`name`),
      CONSTRAINT `antivirus_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('firewall')) {
    $sql = "CREATE TABLE `firewall` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `device_id` int(10) unsigned DEFAULT NULL,
      `current` enum('y','n') NOT NULL DEFAULT 'y',
      `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
      `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
      `name` varchar(200) NOT NULL DEFAULT '',
      `owner` varchar(255) NOT NULL DEFAULT '',
      `executable` varchar(255) NOT NULL DEFAULT '',
      `reportable` varchar(255) NOT NULL DEFAULT '',
      `state` varchar(100) NOT NULL DEFAULT '',
      `status` varchar(100) NOT NULL DEFAULT '',
      PRIMARY KEY (`id`),
      KEY `system_id` (`device_id`),
      KEY `first_seen` (`first_seen`),
      KEY `last_seen` (`last_seen`),
      KEY `name` (`name`),
      CONSTRAINT `firewall_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('packages')) {
    $sql = "CREATE TABLE `packages` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `name` varchar(200) NOT NULL DEFAULT '',
      `org_id` int(10) unsigned NOT NULL DEFAULT '1',
      `description` text NOT NULL,
      `org_descendants` enum('y','n') NOT NULL DEFAULT 'y',
      `purchase_count` int(10) unsigned NOT NULL DEFAULT '0',
      `used_count` int(10) unsigned NOT NULL DEFAULT '0',
      `match_string` text NOT NULL,
      `software_name` text NOT NULL,
      `software_version` varchar(200) NOT NULL DEFAULT '',
      `expiry_date` date NOT NULL DEFAULT '2000-01-01',
      `end_of_life` date NOT NULL DEFAULT '2000-01-01',
      `end_of_service_life` date NOT NULL DEFAULT '2000-01-01',
      `type` enum('license','approved','banned','antivirus','other','cloud','') NOT NULL DEFAULT '',
      `os` enum('Windows','Linux','MacOS','other','all','') NOT NULL DEFAULT 'Windows',
      `sql` text NOT NULL,
      `edited_by` varchar(200) NOT NULL DEFAULT '',
      `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` (SELECT id, name, org_id, description, org_descendants, purchase_count, used_count, match_string, software_name, software_version, expiry_date, end_of_life, end_of_service_life, 'license', 'Windows', '', edited_by, edited_date FROM `licenses`)";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('last_os_update', 'devices')) {
    $sql = "ALTER TABLE `devices` ADD last_os_update datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `last_user`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "INSERT INTO `rules` VALUES (null,'Class based on Form Factor and OS (Virtual Windows Client)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"devices\",\"attribute\":\"form_factor\",\"operator\":\"eq\",\"value\":\"Virtual\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"devices\",\"attribute\":\"os_name\",\"operator\":\"nl\",\"value\":\"%Server%\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"virtual desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20241012' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.5.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.5.0 completed.\n\n";
config('Openaudit')->internal_version = 20241012;
config('Openaudit')->display_version = '5.5.0';
