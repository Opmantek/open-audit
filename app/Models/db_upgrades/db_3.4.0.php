<?php
$output .= "Upgrade database to 3.4.0 commenced.\n\n";

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti RP-5AC-Gen2 set type',1,'Set type based on model.',100,'[{\"attribute\":\"model\",\"operator\":\"li\",\"table\":\"system\",\"value\":\"RP-5AC-Gen2\"}]','[{\"attribute\":\"type\",\"table\":\"system\",\"value\":\"wireless link\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "SHOW INDEX FROM `discovery_log` WHERE Key_name = 'discovery_log_discovery_id'";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!empty($result) and is_array($result) and count($result) > 0) {
    $sql = "ALTER TABLE `discovery_log` DROP KEY discovery_log_discovery_id";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "SHOW INDEX FROM `discovery_log` WHERE Key_name = 'discovery_id'";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!empty($result) and is_array($result) and count($result) > 0) {
    $sql = "ALTER TABLE `discovery_log` DROP KEY discovery_id";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = 'CREATE INDEX discovery_id ON discovery_log (`discovery_id`)';
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = 'CREATE INDEX networks_cloud_id ON networks (`cloud_id`)';
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20200620' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '3.4.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 3.4.0 completed.\n\n";
config('Openaudit')->internal_version = 20200620;
config('Openaudit')->display_version = '3.4.0';
