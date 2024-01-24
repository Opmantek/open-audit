<?php
$output .= "Upgrade database to 5.1.0 commenced.\n\n";

if (!$db->fieldExists('kernel_version', 'devices')) {
    $sql = "ALTER TABLE `devices` ADD `kernel_version` varchar(200) NOT NULL DEFAULT '' AFTER `os_cpe`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DELETE FROM `dashboards` WHERE `name` = 'Summary Dashboard' and `description` = 'Summary Information'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `dashboards` VALUES (null, 'Summary Dashboard', 1, 'org', 0, 'Summary Information', 'n', '[]', 'system', NOW())";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20240104' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.1.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.1.0 completed.\n\n";
config('Openaudit')->internal_version = 20240104;
config('Openaudit')->display_version = '5.1.0';
