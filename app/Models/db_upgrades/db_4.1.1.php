<?php
$output .= "Upgrade database to 4.1.1 commenced.\n\n";

$sql = "ALTER TABLE `audit_log` DROP INDEX audit_log_system_id_timestamp";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = 'CREATE INDEX `audit_log_system_id_timestamp` ON audit_log (`system_id`,`timestamp`)';
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "DELETE FROM queries WHERE name = 'opAddress'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "INSERT INTO `queries` VALUES(NULL,1,'opAddress','Other','y','The default query for integration with opAddress.','SELECT system.id AS `system.id`, system.ip AS `system.ip`, system.hostname AS `system.hostname`, system.sysName AS `system.sysName`, system.fqdn AS `system.fqdn`, system.dns_fqdn AS `system.dns_fqdn`, system.last_seen AS `system.last_seen`, network.speed AS `network.speed`, network.connection AS `network.connection`, ip.ip AS `ip.ip`, ip.mac AS `ip.mac`,ip.netmask AS `ip.netmask`, ip.network AS `ip.network`, ip.version AS `ip.version`, locations.name AS `locations.name` FROM ip LEFT JOIN system ON (ip.system_id = system.id AND ip.current = \'y\') LEFT JOIN network ON (ip.net_index = network.net_index AND ip.mac = network.mac) LEFT JOIN locations ON (system.location_id = locations.id) WHERE @filter','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20210512' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "UPDATE `configuration` SET `value` = '4.1.1' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$output .= "Upgrade database to 4.1.1 completed.\n\n";
config('Openaudit')->internal_version = 20210512;
config('Openaudit')->display_version = '4.1.1';
