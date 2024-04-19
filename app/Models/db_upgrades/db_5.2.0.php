<?php
$output .= "Upgrade database to 5.2.0 commenced.\n\n";

$sql = "DROP TABLE IF EXISTS `agents`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `agents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT 'Default Agent',
  `org_id` int(10) unsigned NOT NULL DEFAULT 1,
  `description` text NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT 100,
  `test_minutes` int(10) unsigned DEFAULT 1300,
  `test_subnet` varchar(45) NOT NULL DEFAULT '',
  `test_os` varchar(45) NOT NULL DEFAULT '',
  `tests` text NOT NULL default'[]',
  `action_download` varchar(2000) NOT NULL DEFAULT '',
  `action_command` varchar(2000) NOT NULL DEFAULT '',
  `action_devices_assigned_to_org` int(10) unsigned DEFAULT NULL,
  `action_devices_assigned_to_location` int(10) unsigned DEFAULT NULL,
  `action_audit` enum('y','n') NOT NULL DEFAULT 'y',
  `action_uninstall` enum('y','n') NOT NULL DEFAULT 'n',
  `actions` text NOT NULL default'[]',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `agents` VALUES (NULL, 'Default Agent', 1, 'Audit every day.', 100, 1300, '', '', '[]', '', '', null, null, 'y', 'n', '[]', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `bios` CHANGE `serial` `serial` VARCHAR(200) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('user_id', 'change_log')) {
    $sql = "ALTER TABLE `change_log` DROP `user_id`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('ack_by', 'change_log')) {
    $sql = "ALTER TABLE `change_log` ADD `ack_by` varchar(200) NOT NULL DEFAULT '' AFTER `details`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('notes', 'change_log') and $db->fieldExists('note', 'change_log')) {
    $sql = "ALTER TABLE `change_log` CHANGE `note` `notes` TEXT NOT NULL";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DELETE FROM `configuration` WHERE `name` IN ('product', 'oae_product', 'discovery_limit', 'discovery_wmi_timeout', 'feature_queries_advanced', 'feature_executables', 'feature_agents_advanced')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = 'n' WHERE `name` = 'create_change_log_ip'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = 'y' WHERE `name` = 'delete_noncurrent_ip'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_wmi_timeout','900','number','y','system','2000-01-01 00:00:00','Timeout duration (in seconds) when discovering a device from Linux via WMI.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_queries_advanced','n','bool','y','system','2000-01-01 00:00:00','Allow Queries without a filter.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_executables','n','bool','y','system','2000-01-01 00:00:00','Activate the linux based Executables feature.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_agents_advanced','n','bool','y','system','2000-01-01 00:00:00','Allow Agents to execute commands and download files.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `discovery_log` CHANGE `timestamp` `timestamp` datetime DEFAULT current_timestamp()";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `enterprise` CHANGE `response` `response` mediumtext NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->tableExists('executables')) {
    $sql = "CREATE TABLE `executables` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `name` varchar(200) NOT NULL DEFAULT '',
        `org_id` int(10) unsigned NOT NULL DEFAULT '1',
        `path` text NOT NULL,
        `description` text NOT NULL,
        `os_family` varchar(50) NOT NULL DEFAULT '',
        `exclude` enum('y', 'n') NOT NULL DEFAULT 'n',
        `edited_by` varchar(200) NOT NULL DEFAULT '',
        `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('executable')) {
    $sql = "  CREATE TABLE `executable` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `device_id` int(10) unsigned DEFAULT NULL,
    `current` enum('y','n') NOT NULL DEFAULT 'y',
    `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
    `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
    `executable_id` int(10) unsigned DEFAULT NULL,
    `name` varchar(200) NOT NULL DEFAULT '',
    `full_name` text NOT NULL,
    `description` varchar(1000) NOT NULL,
    `package` varchar(1000) NOT NULL,
    `size` int(10) unsigned NOT NULL DEFAULT '0',
    `directory` text NOT NULL,
    `hash` varchar(250) NOT NULL DEFAULT '',
    `last_changed` varchar(100) NOT NULL DEFAULT '',
    `meta_last_changed` varchar(100) NOT NULL DEFAULT '',
    `permission` varchar(250) NOT NULL DEFAULT '',
    `owner` varchar(100) NOT NULL DEFAULT '',
    `group` varchar(100) NOT NULL DEFAULT '',
    `type` varchar(100) NOT NULL DEFAULT '',
    `version` varchar(100) NOT NULL DEFAULT '',
    `inode` bigint(20) unsigned NOT NULL DEFAULT '0',
    `ack_by` varchar(200) NOT NULL DEFAULT '',
    `ack_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
    `notes` text NOT NULL,
    PRIMARY KEY (`id`),
    KEY `system_id` (`device_id`),
    KEY `name` (`name`),
    CONSTRAINT `executable_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `partition` CHANGE `mount_point` `mount_point` VARCHAR(200) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `scripts` WHERE `based_on` = 'audit_windows.ps1'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `scripts` VALUES (NULL,'audit_windows.ps1',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit Windows config.','audit_windows.ps1','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "SELECT * FROM `roles`";
$roles = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

foreach ($roles as $role) {
    $permissions = json_decode($role->permissions);
    if (!empty($permissions)) {
        if ($role->name === 'admin') {
            $permissions->agents = 'crud';
            $permissions->executables = 'r';
        }
        if ($role->name === 'org_admin') {
            $permissions->executables = 'crud';
            $permissions->agents = 'crud';
        }
        if ($role->name === 'user') {
            $permissions->executables = 'r';
            $permissions->agents = 'r';
        }
        $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
        $query = $db->query($sql, [json_encode($permissions), $role->id]);
        $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
        log_message('info', (string)$db->getLastQuery());
    }
}

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20240512' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.2.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.2.0 completed.\n\n";
config('Openaudit')->internal_version = 20240512;
config('Openaudit')->display_version = '5.2.0';
