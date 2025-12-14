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

// Set to daily between midnight and 4am
$sql = "UPDATE `tasks` SET `minute` = 30, `hour` = FLOOR(RAND()*(3)+1) WHERE `type` = 'vulnerabilities'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// Set daily after above, between 4am and 7am between minutes 45 and 55
$sql = "UPDATE `tasks` SET `minute` = FLOOR(RAND() * (55 - 45 + 1) + 45), `hour` = FLOOR(RAND()*(3)+3) WHERE `type` = 'vulnerabilities_all'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// Hourly vendors execute vulnerabilities task in between minutes 2 and 20
$sql = "INSERT INTO `tasks` VALUES (null, 'Vulnerabilities by Vendors', 1, 'Execute vulnerabilities for selected Vendors.', 0, '', 'y', 'vendors_execute_all', FLOOR(5 + RAND() * (20 - 5 + 1)), '*', '*', '*', '*', 0, 0, '2000-01-01 00:00:00', '2000-01-01 00:00:00', '', '', 0, 'system', '2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// New column agents.action_delay
if (!$db->fieldExists('action_delay', 'agents')) {
    $sql = "ALTER TABLE `agents` ADD `action_delay` int(10) unsigned DEFAULT 120 AFTER `action_uninstall`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

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
