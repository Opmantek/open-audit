<?php

$output .= "Upgrade database to 5.7.0 commenced.\n\n";

$sql = "UPDATE `roles` SET `permissions` = REPLACE(permissions, 'ldap_servers', 'auth')";
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

$sql = "DELETE FROM configuration WHERE name = 'feature_feeds_request_days'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_feeds_request_days','7','number','n','system','2000-01-01 00:00:00','Make a feed request every this number of days.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'feature_feeds_remind_days'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_feeds_remind_days','30','number','n','system','2000-01-01 00:00:00','If not enabled, reminder the user every this number of days.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'public_key'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'public_key','-----BEGIN PUBLIC KEY-----\nMIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEApMn+vnQhefYfQeojGy5t\np7hlZAgNhTshPYIGJida4KmWr72Ttbx/HsLA04HpUpBubeD1haryP30+EAhGDG2Z\nr/ZOMzyVgGngUtC/mNM+ECtst/YpOBZYknkVDftFDB94YDdq/848zawuX2b2ru2s\nrhOT9mXQy0JFHeaDtcDQhFWpcDNZ1fTI/9SNRPy3oCgeoJObGGFw+OLCqfd1PIzy\nWwYfSvddPNUa1DQyEdLsuGvVT9ZBuvjGph/cVLXmQLA8LDZBJDtft26z9auWKx1L\nJaox5k7FTjqCGhh7wgoaRHjOlvOm0dOF+agofoDeGqpsqyD3HZyGoE+f3cYQBFnW\n4yk4xmYR59vY0XDcbxrIqL4j1xYWCemzio5rX1iH9ntRmKcinXQ/m31BL1xjygD0\ntXHSePq2U/5jqsKSyMkrm1nJ39/4mB/+IY8IDwwaygA3kgbW5I4dFL9bDGTVpKs/\nxM48nPgSP23VsnfOLNprCYZoYZzlSDbkKC0fuVmn5N9gFsKORQ14oPYoNcvqRC/e\nFcuneG52bHJhAPRjkkCRBw9bRG45BxR3vS4ougCWuLMF0kIGr6o6AsuvCuWpuslc\nCii4ZwFd49VRQ9jaoluSaDVJJs4YhPP1yqYLV3EEVYw6yXyOVNNdvyExMyIjeSxo\nKW59oQWVc7WoMSxddVzjf1MCAwEAAQ==\n-----END PUBLIC KEY-----','text','y','system','2000-01-01 00:00:00','The public key for Open-AudIT.')";
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
