<?php
$output .= "Upgrade database to 4.3.3 commenced.\n\n";

if ($db->fieldExists('memory_count', 'system')) {
    $db->query("ALTER TABLE `system` CHANGE `memory_count` `memory_count` bigint(20) unsigned NOT NULL DEFAULT '0'");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('password_last_changed', 'user')) {
    $db->query("ALTER TABLE `user` ADD `password_last_changed` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `password_disabled`");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('last_logon', 'user')) {
    $db->query("ALTER TABLE `user` ADD `last_logon` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `type`");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('name', 'users')) {
    $db->query("ALTER TABLE `users` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT ''");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$db->query("DELETE FROM `configuration` WHERE `name` = 'firstwave_prompt'");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$db->query("INSERT INTO `configuration` VALUES (NULL,'firstwave_prompt','2000-01-01','date','n','system','2000-01-01 00:00:00','Prompt about FirstWave products.')");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20220321' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '4.3.3' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 4.3.3 completed.\n\n";
config('Openaudit')->internal_version = 20220321;
config('Openaudit')->display_version = '4.3.3';
