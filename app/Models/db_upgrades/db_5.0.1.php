<?php
$output .= "Upgrade database to 5.0.1 commenced.\n\n";

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20231130' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.0.1' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.0.1 completed.\n\n";
config('OpenAudit')->internal_version = 20231130;
config('OpenAudit')->display_version = '5.0.1';
