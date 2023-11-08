<?php
$output .= "Upgrade database to 4.3.4 commenced.\n\n";

if ($db->fieldExists('cloud_id', 'discoveries')) {
    $db->query("ALTER TABLE `discoveries` CHANGE `cloud_id` `cloud_id` int(10) unsigned NOT NULL DEFAULT '0'");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('end_of_life', 'licenses')) {
    $db->query("ALTER TABLE `licenses` ADD `end_of_life` date NOT NULL DEFAULT '2000-01-01' AFTER `expiry_date`");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('end_of_service_life', 'licenses')) {
    $db->query("ALTER TABLE `licenses` ADD `end_of_service_life` date NOT NULL DEFAULT '2000-01-01' AFTER `end_of_life`");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('users', 'share')) {
    $db->query("ALTER TABLE `share` CHANGE `users` `users` text NOT NULL AFTER `size`");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('os_cpe', 'system')) {
    $db->query("ALTER TABLE `system` ADD `os_cpe` varchar(200) NOT NULL DEFAULT '' AFTER `os_version`");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$db->query("UPDATE `discoveries` SET `cloud_id` = 0 WHERE `type` <> 'cloud'");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$db->query("DELETE FROM `configuration` WHERE name = 'discovery_use_org_id_match'");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$db->query("INSERT INTO `configuration` VALUES (NULL,'discovery_use_org_id_match','n','bool','y','system','2000-01-01 00:00:00','When matching a device and assign_devices_to_org is set, use that attribute in the relevant match rules.')");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20220620' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '4.3.4' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 4.3.4 completed.\n\n";
config('Openaudit')->internal_version = 20220620;
config('Openaudit')->display_version = '4.3.4';
