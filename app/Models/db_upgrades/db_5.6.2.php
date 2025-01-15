<?php

$output .= "Upgrade database to 5.6.2 commenced.\n\n";

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20250104' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.6.2' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.6.2 completed.\n\n";
config('Openaudit')->internal_version = 20250104;
config('Openaudit')->display_version = '5.6.2';
