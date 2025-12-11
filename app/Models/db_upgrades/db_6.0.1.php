<?php

$output .= "Upgrade database to 6.0.1 commenced.\n\n";

// This contained an invalid column - secondary-text, in the 6.0.0 upgrade
$sql = "UPDATE `widgets` SET `primary_text` = 'Open Shares', `secondary_text` = 'Anyone can write here', `help_text` = 'No authentication required.', `icon` = 'icon-folder' WHERE `name` = 'Open Windows Shares'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// Fix bad URL for link
$sql = "UPDATE `widgets` SET `link` = 'devices?devices.type=in(\'unknown\',\'unclassified\')' WHERE `name` = 'Unknown Devices'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// Set to daily between 12 and 4am
$sql = "UPDATE `tasks` SET `minute` = FLOOR(RAND()*(55-5)+5), `hour` = FLOOR(RAND()*(3)+1) WHERE `name` = 'Vulnerability Retrieval'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// Set daily after above, between 4 and 7 am
$sql = "UPDATE `tasks` SET `minute` = FLOOR(RAND()*(55-5)+5), `hour` = FLOOR(RAND()*(3)+3) WHERE `name` = 'Run All Vulnerabilities'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// Not used
$sql = "DELETE FROM tasks WHERE name = 'Vendor Retrieval'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

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
