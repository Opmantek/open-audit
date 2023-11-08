<?php
$output .= "Upgrade database to 3.5.3 commenced.\n\n";

$sql = "SHOW INDEX FROM `change_log` WHERE Key_name = 'change_log_timestamp'";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!empty($result) and is_array($result) and count($result) > 0) {
    $sql = "ALTER TABLE `change_log` DROP KEY change_log_timestamp";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = 'CREATE INDEX change_log_timestamp ON change_log (`timestamp`)';
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20210104' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '3.5.3' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 3.5.3 completed.\n\n";
config('Openaudit')->internal_version = 20210104;
config('Openaudit')->display_version = '3.5.3';
