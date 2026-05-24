<?php

$output .= "Upgrade database to 6.0.4 commenced.\n\n";

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20260512' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '6.0.4' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 6.0.4 completed.\n\n";
config('OpenAudit')->internal_version = 20260512;
config('OpenAudit')->display_version = '6.0.4';
