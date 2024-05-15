<?php
$output .= "Upgrade database to 5.2.2 commenced.\n\n";

if (!$db->fieldExists('require_port', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` ADD `require_port` enum('y','n') NOT NULL DEFAULT 'n' AFTER ad_server";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20240621' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.2.2' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.2.2 completed.\n\n";
config('Openaudit')->internal_version = 20240621;
config('Openaudit')->display_version = '5.2.2';
