<?php
$output .= "Upgrade database to 3.5.1 commenced.\n\n";

$sql = "ALTER TABLE `users` CHANGE `lang` `lang` enum('cs','de','en','es','fr','pt-br','zh-tw') NOT NULL DEFAULT 'en' AFTER `orgs`";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20201012' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '3.5.1' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 3.5.1 completed.\n\n";
config('Openaudit')->internal_version = 20201012;
config('Openaudit')->display_version = '3.5.1';
