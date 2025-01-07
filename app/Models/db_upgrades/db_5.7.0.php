<?php

$output .= "Upgrade database to 5.7.0 commenced.\n\n";


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
$sql = "UPDATE `configuration` SET `value` = '20250104' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.7.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.7.0 completed.\n\n";
config('Openaudit')->internal_version = 20250104;
config('Openaudit')->display_version = '5.7.0';
