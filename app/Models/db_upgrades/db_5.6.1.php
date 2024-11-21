<?php

$output .= "Upgrade database to 5.6.1 commenced.\n\n";

$sql = "UPDATE queries SET `sql` = \"SELECT devices.id AS `devices.id`, packages.id AS `packages.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, locations.name AS `locations.name`, software.name AS `Installed Software Name`, packages.software_name AS `Packages Software Name`, devices.os_name AS `devices.os_name`, packages.os AS `Packages OS` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'banned' AND (devices.os_group LIKE CONCAT('%', packages.os, '%') OR devices.os_family LIKE CONCAT('%', packages.os, '%') OR devices.os_name LIKE CONCAT('%', packages.os, '%')) GROUP BY devices.id, software.id, packages.id\" WHERE name = 'Banned Software'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE queries SET `sql` = \"SELECT devices.id AS `devices.id`, packages.id AS `packages.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, locations.name AS `locations.name`, software.name AS `Installed Software Name`, packages.software_name AS `Packages Software Name`, devices.os_name AS `devices.os_name`, packages.os AS `Packages OS` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'approved' AND (devices.os_group LIKE CONCAT('%', packages.os, '%') OR devices.os_family LIKE CONCAT('%', packages.os, '%') OR devices.os_name LIKE CONCAT('%', packages.os, '%')) GROUP BY devices.id, software.id, packages.id\" WHERE name = 'Approved Software'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE queries SET `sql` = \"SELECT devices.id AS `devices.id`, packages.id AS `packages.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, locations.name AS `locations.name`, software.name AS `Installed Software Name`, packages.software_name AS `Packages Software Name`, devices.os_name AS `devices.os_name`, packages.os AS `Packages OS` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'ignored' AND (devices.os_group LIKE CONCAT('%', packages.os, '%') OR devices.os_family LIKE CONCAT('%', packages.os, '%') OR devices.os_name LIKE CONCAT('%', packages.os, '%')) GROUP BY devices.id, software.id, packages.id\" WHERE name = 'Ignored Software'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "CREATE TABLE `feeds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `short` varchar(200) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `type` enum('advertisement','code','config','blog','file','howto','news','notification','other','package','query','release','') NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `published` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `link` varchar(200) NOT NULL DEFAULT '',
  `image` varchar(200) DEFAULT NULL,
  `requested` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `expires` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `alert_style` enum('primary','secondary','success','danger','warning','info','light','dark') NOT NULL DEFAULT 'primary',
  `version` varchar(20) NOT NULL DEFAULT '',
  `read` enum('y','n','') DEFAULT NULL,
  `actioned` enum('y','n','') DEFAULT NULL,
  `actioned_by` varchar(200) NOT NULL DEFAULT '',
  `actioned_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'feature_feeds'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_feeds','n','bool','y','system','2000-01-01 00:00:00','Use online requests for news, updates, queries and packages.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'feature_feeds_url'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_feeds_url','https://open-audit.com/feeds','text','y','system','2000-01-01 00:00:00','The URL to connect to, to retrieve feeds articles.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'feature_feeds_last_request_date'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_feeds_last_request_date','2000-01-01','text','y','system','2000-01-01 00:00:00','When did we last request a feed article.')";
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
