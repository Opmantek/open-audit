<?php
$output .= "Upgrade database to 3.5.2 commenced.\n\n";

$sql = "ALTER TABLE `networks` CHANGE `gateways` `gateways` varchar(200) NOT NULL DEFAULT '' AFTER `cloud_id`";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20201115' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '3.5.2' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 3.5.2 completed.\n\n";
config('Openaudit')->internal_version = 20201115;
config('Openaudit')->display_version = '3.5.2';
