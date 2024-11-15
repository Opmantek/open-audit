<?php

$output .= "Upgrade database to 5.6.1 commenced.\n\n";

$sql = "UPDATE queries SET sql = \"SELECT devices.id AS `devices.id`, packages.id AS `packages.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, locations.name AS `locations.name`, software.name AS `Installed Software Name`, packages.software_name AS `Packages Software Name`, devices.os_name AS `devices.os_name`, packages.os AS `Packages OS` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'banned' AND (devices.os_group LIKE CONCAT('%', packages.os, '%') OR devices.os_family LIKE CONCAT('%', packages.os, '%') OR devices.os_name LIKE CONCAT('%', packages.os, '%')) GROUP BY devices.id, software.id, packages.id\" WHERE name = 'Banned Software'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE queries SET sql = \"SELECT devices.id AS `devices.id`, packages.id AS `packages.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, locations.name AS `locations.name`, software.name AS `Installed Software Name`, packages.software_name AS `Packages Software Name`, devices.os_name AS `devices.os_name`, packages.os AS `Packages OS` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'approved' AND (devices.os_group LIKE CONCAT('%', packages.os, '%') OR devices.os_family LIKE CONCAT('%', packages.os, '%') OR devices.os_name LIKE CONCAT('%', packages.os, '%')) GROUP BY devices.id, software.id, packages.id\" WHERE name = 'Approved Software'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE queries SET sql = \"SELECT devices.id AS `devices.id`, packages.id AS `packages.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, locations.name AS `locations.name`, software.name AS `Installed Software Name`, packages.software_name AS `Packages Software Name`, devices.os_name AS `devices.os_name`, packages.os AS `Packages OS` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'ignored' AND (devices.os_group LIKE CONCAT('%', packages.os, '%') OR devices.os_family LIKE CONCAT('%', packages.os, '%') OR devices.os_name LIKE CONCAT('%', packages.os, '%')) GROUP BY devices.id, software.id, packages.id\" WHERE name = 'Ignored Software'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20241130' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.6.1' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.6.1 completed.\n\n";
config('Openaudit')->internal_version = 20241130;
config('Openaudit')->display_version = '5.6.1';
