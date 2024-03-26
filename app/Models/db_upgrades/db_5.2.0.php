<?php
$output .= "Upgrade database to 5.2.0 commenced.\n\n";

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

$sql = "DELETE FROM `configuration` WHERE `name` IN ('product', 'oae_product')";
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

$sql = "SELECT * FROM `roles`";
$roles = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

foreach ($roles as $role) {
    if ($role->name === 'org_admin' or $role->name === 'user') {
        $permissions = json_decode($role->permissions);
        if ($role->name === 'org_admin') {
            $permissions->executables = 'crud';
        }
        if ($role->name === 'user') {
            $permissions->executable = 'r';
        }
        $this->rolesModel->update(intval($role->id), $permissions);
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
