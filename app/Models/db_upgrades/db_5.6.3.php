<?php

$output .= "Upgrade database to 5.6.3 commenced.\n\n";

$sql = "UPDATE `roles` SET `permissions` = REPLACE(`permissions`, 'ldap_servers', 'auth')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('encryption_status', 'partition')) {
    $sql = "ALTER TABLE `partition` ADD `encryption_status` varchar(100) NOT NULL DEFAULT '' AFTER `type`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('encryption_method', 'partition')) {
    $sql = "ALTER TABLE `partition` ADD `encryption_method` varchar(100) NOT NULL DEFAULT '' AFTER `encryption_status`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE queries SET `sql` = \"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '19045.5487' AND devices.os_family = 'Windows 10'\" WHERE name = 'Windows 10 Latest Build' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE queries SET `sql` = \"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number != '19045.5487' AND devices.os_family = 'Windows 10'\" WHERE name = 'Windows 10 Not Latest Build' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE queries SET `sql` = \"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '26100.3194' AND devices.os_family = 'Windows 11'\" WHERE name = 'Windows 11 Latest Build' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE queries SET `sql` = \"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number != '26100.3194' AND devices.os_family = 'Windows 11'\" WHERE name = 'Windows 11 Not Latest Build' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE queries SET `sql` = \"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '17763.6893' AND devices.os_family = 'Windows 2019'\" WHERE name = 'Windows 2019 Latest Build' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE queries SET `sql` = \"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number != '17763.6893' AND devices.os_family = 'Windows 2019'\" WHERE name = 'Windows 2019 Not Latest Build' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE queries SET `sql` = \"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '20348.3207' AND devices.os_family = 'Windows 2022'\" WHERE name = 'Windows 2022 Latest Build'  AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE queries SET `sql` = \"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number != '20348.3207' AND devices.os_family = 'Windows 2022'\" WHERE name = 'Windows 2022 Not Latest Build'  AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM queries WHERE name = 'Windows 2025 Latest Build' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 2025 Latest Build','Software','n','https://learn.microsoft.com/en-us/windows/release-health/windows-server-release-info',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '26100.3194' AND devices.os_family = 'Windows 2025'\",'','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$w2025lb = $db->insertID();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM queries WHERE name = 'Windows 2025 Not Latest Build' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 2025 Not Latest Build','Software','n','Use the same build number as Windows 2025 Latest Build.',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number != '26100.3194' AND devices.os_family = 'Windows 2025'\",'','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$w2025nlb = $db->insertID();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM widgets WHERE name = 'Windows 2025 Server Latest Build' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows 2025 Server Latest Build',1,'','traffic','',?,'',?,'LATEST BUILD SERVER 2025','Without / With the latest Windows 2025','fa-brands fa-windows',0,'','','','system','2001-01-01 00:00:00')";
$db->query($sql, [$w2025nlb, $w2025lb]);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20250218' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.6.3' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.6.3 completed.\n\n";
config('Openaudit')->internal_version = 20250218;
config('Openaudit')->display_version = '5.6.3';
