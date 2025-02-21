<?php

$output .= "Upgrade database to 5.6.3 commenced.\n\n";

$sql = "UPDATE `roles` SET `permissions` = REPLACE(`permissions`, 'ldap_servers', 'auth')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('encryption_status', 'partition')) {
    $sql = "ALTER TABLE `partition` ADD `encryption_status` varchar(100) NOT NULL DEFAULT '' AFTER `type`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('encryption_method', 'partition')) {
    $sql = "ALTER TABLE `partition` ADD `encryption_method` varchar(100) NOT NULL DEFAULT '' AFTER `encryption_status`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20250218' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.6.3' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.6.3 completed.\n\n";
config('Openaudit')->internal_version = 20250218;
config('Openaudit')->display_version = '5.6.3';
