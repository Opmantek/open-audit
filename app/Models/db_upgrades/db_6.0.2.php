<?php

$output .= "Upgrade database to 6.0.2 commenced.\n\n";

// New column agents.action_delay
if (!$db->fieldExists('query_id', 'locations')) {
    $sql = "ALTER TABLE `locations` ADD `query_id` int(10) unsigned DEFAULT NULL AFTER `cloud_id`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DELETE FROM `configuration` WHERE name = 'locations_query_id'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (null, 'locations_query_id', (SELECT `id` FROM `queries` WHERE `name` = 'Windows Software' LIMIT 1), 'number', 'y', 'system', '2000-01-01 00:00:00', 'The default Query ID to use when viewing a location.')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20260104' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '6.0.2' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 6.0.2 completed.\n\n";
config('Openaudit')->internal_version = 20260104;
config('Openaudit')->display_version = '6.0.2';
