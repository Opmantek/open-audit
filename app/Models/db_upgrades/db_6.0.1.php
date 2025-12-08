<?php

$output .= "Upgrade database to 6.0.1 commenced.\n\n";

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20251130' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '6.0.1' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 6.0.1 completed.\n\n";
config('Openaudit')->internal_version = 20251130;
config('Openaudit')->display_version = '6.0.1';
