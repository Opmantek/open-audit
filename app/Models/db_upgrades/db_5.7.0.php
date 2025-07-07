<?php

$output .= "Upgrade database to 5.7.0 commenced.\n\n";

$sql = "DROP TABLE IF EXISTS `graph`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('notin', 'baselines')) {
    $sql = "ALTER TABLE `baselines` ADD `notin` enum('y','n') NOT NULL DEFAULT 'n' AFTER `documentation`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE packages CHANGE `os` `os` varchar(200) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `license`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `license` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `raw` text NOT NULL,
  `purchase_count` int(10) unsigned NOT NULL DEFAULT '0',
  `used_count` int(10) unsigned NOT NULL DEFAULT '0',
  `software_name` text NOT NULL,
  `software_version` varchar(200) NOT NULL DEFAULT '',
  `expiry_date` date NOT NULL DEFAULT '2000-01-01',
  `end_of_life` date NOT NULL DEFAULT '2000-01-01',
  `end_of_service_life` date NOT NULL DEFAULT '2000-01-01',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `license_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `news`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `short` varchar(200) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `type` enum('advertisement','code','config','cve','blog','file','howto','news','notification','other','package','query','release','') NOT NULL DEFAULT '',
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

$sql = "DELETE FROM configuration WHERE name = 'components_extra_columns'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'components_extra_columns','','text','y','system','2000-01-01 00:00:00','Any extra columns from the devices table to show on the components list page. Should be comman separated, no spaces, column name only.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
$sql = "DELETE FROM configuration WHERE name = 'feature_news'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_news','n','bool','y','system','2000-01-01 00:00:00','Use online requests for news, updates, queries and packages.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'feature_news_url'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_news_url','https://open-audit.com/news','text','y','system','2000-01-01 00:00:00','The URL to connect to, to retrieve news articles.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'feature_news_last_request_date'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_news_last_request_date','2000-01-01','text','y','system','2000-01-01 00:00:00','When did we last request a news article.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE name = 'feature_news_request_days'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_news_request_days','7','number','n','system','2000-01-01 00:00:00','Make a news request every this number of days.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE name = 'feature_news_remind_days'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_news_remind_days','30','number','n','system','2000-01-01 00:00:00','If not enabled, reminder the user every this number of days.')";
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

$sql = "DELETE FROM configuration WHERE name = 'download_reports'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'blessed_subnets_use'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'database_show_row_limit'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'discovery_use_ipmi'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'gui_trim_characters'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'nmis'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'nmis_url'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'rss_enable'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'rss_url'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "SELECT * FROM `roles`";
$roles = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

foreach ($roles as $role) {
    $permissions = json_decode($role->permissions);
    if (!empty($permissions)) {
        if ($role->name === 'org_admin' or $role->name === 'admin') {
            $permissions->news = 'crud';
            unset($permissions->reports);
            unset($permissions->charts);
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        } else {
            $permissions->news = '';
            unset($permissions->reports);
            unset($permissions->charts);
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }
    }
}

$sql = "DROP TABLE IF EXISTS `chart`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `queries` ADD `commercial` enum('y','n') NOT NULL DEFAULT 'n' AFTER `advanced`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `queries` SET `commercial` = 'y' WHERE `name` IN ('Windows Clients With AntiVirus','Windows Clients Without AntiVirus','Windows Clients With AntiVirus Not UpToDate','Windows Clients With Firewall','Windows Clients Without Firewall','Windows Clients With Firewall Disabled','Windows Servers Firewalls Installed','Windows Servers AntiVirus Installed','Windows Servers Firewalls Not Installed','Windows Servers AntiVirus Not Installed','Banned Software','Approved Software','Ignored Software','Devices Without OS Updates for more than 14 Days','Any Devices Seen less than 7 Days ago','Any Devices Not Seen for more than 7 Days','Any Devices Not Seen for more than 30 Days','Windows Devices Seen less than 7 Days ago','Windows Devices Not Seen for more than 7 Days','Windows Devices Not Seen for more than 30 Days','Windows 10 All','Windows 10 Latest Build','Windows 10 Not Latest Build','Windows 11 All','Windows 11 Latest Build','Windows 11 Not Latest Build','Windows 2019 All','Windows 2019 Latest Build','Windows 2019 Not Latest Build','Windows 2022 All','Windows 2022 Latest Build','Windows 2022 Not Latest Build','Unknown Devices Found in the last 7 Days','Windows Shares Writable by Everyone','Windows Clients Without OS Updates for more than 14 Days','Windows Servers Without OS Updates for more than 14 Days','Linux Without OS Updates for more than 14 Days','Windows 2025 Latest Build','Windows 2025 Not Latest Build')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Devices Discovered Today','Discovery','y','Any devices found today.','SELECT devices.id, devices.icon, devices.type, devices.name, devices.domain, devices.ip, devices.os_family, devices.status, devices.first_seen FROM devices WHERE @filter AND DATE(first_seen) = CURDATE()','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Devices Discovered Yesterday','Discovery','y','Any devices found today.','SELECT devices.id, devices.icon, devices.type, devices.name, devices.domain, devices.ip, devices.os_family, devices.status, devices.first_seen FROM devices WHERE @filter AND DATE(first_seen) = SUBDATE(CURDATE(),1)','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Devices Discovered in the Last 7 Days','Discovery','y','Any devices found today.','SELECT devices.id, devices.icon, devices.type, devices.name, devices.domain, devices.ip, devices.os_family, devices.status, devices.first_seen FROM devices WHERE @filter AND DATE(first_seen) > SUBDATE(CURDATE(),7)','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Devices Discovered in the Last 30 Days','Discovery','y','Any devices found today.','SELECT devices.id, devices.icon, devices.type, devices.name, devices.domain, devices.ip, devices.os_family, devices.status, devices.first_seen FROM devices WHERE @filter AND DATE(first_seen) > SUBDATE(CURDATE(),30)','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Devices Not Seen for 7 Days','Discovery','y','Any devices not seen in the last 7 days.','SELECT devices.id, devices.icon, devices.type, devices.name, devices.domain, devices.ip, devices.os_family, devices.status, devices.first_seen, devices.last_seen, devices.last_seen_by FROM devices WHERE @filter AND DATE(last_seen) < SUBDATE(CURDATE(),7)','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Devices Not Seen for 30 Days','Discovery','y','Any devices not seen in the last 30 days.','SELECT devices.id, devices.icon, devices.type, devices.name, devices.domain, devices.ip, devices.os_family, devices.status, devices.first_seen, devices.last_seen, devices.last_seen_by FROM devices WHERE @filter AND DATE(last_seen) < SUBDATE(CURDATE(),30)','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Devices Not Seen for 90 Days','Discovery','y','Any devices not seen in the last 90 days.','SELECT devices.id, devices.icon, devices.type, devices.name, devices.domain, devices.ip, devices.os_family, devices.status, devices.first_seen, devices.last_seen, devices.last_seen_by FROM devices WHERE @filter AND DATE(last_seen) < SUBDATE(CURDATE(),90)','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Devices Not Seen for 180 Days','Discovery','y','Any devices not seen in the last 180 days.','SELECT devices.id, devices.icon, devices.type, devices.name, devices.domain, devices.ip, devices.os_family, devices.status, devices.first_seen, devices.last_seen, devices.last_seen_by FROM devices WHERE @filter AND DATE(last_seen) < SUBDATE(CURDATE(),180)','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Software Discovered Today','Discovery','y','Any software discovered today.','SELECT devices.id, devices.name, devices.domain, change_log.details, change_log.timestamp FROM change_log LEFT JOIN devices ON (change_log.device_id = devices.id) WHERE @filter AND DATE(change_log.timestamp) = CURDATE() AND change_log.db_table = \'software\' AND change_log.db_action = \'create\'','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Software Discovered Yesterday','Discovery','y','Any software discovered yesterday.','SELECT devices.id, devices.name, devices.domain, change_log.details, change_log.timestamp FROM change_log LEFT JOIN devices ON (change_log.device_id = devices.id) WHERE DATE(change_log.timestamp) = SUBDATE(CURDATE(),1) AND change_log.db_table = \'software\' AND change_log.db_action = \'create\'','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Software Discovered in the Last 7 Days','Discovery','y','Any software discovered in the last 7 days.','SELECT devices.id, devices.name, devices.domain, change_log.details, change_log.timestamp FROM change_log LEFT JOIN devices ON (change_log.device_id = devices.id) WHERE DATE(change_log.timestamp) = SUBDATE(CURDATE(),7) AND change_log.db_table = \'software\' AND change_log.db_action = \'create\'','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Software Discovered in the Last 30 Days','Discovery','y','Any software discovered in the last 30 days.','SELECT devices.id, devices.name, devices.domain, change_log.details, change_log.timestamp FROM change_log LEFT JOIN devices ON (change_log.device_id = devices.id) WHERE DATE(change_log.timestamp) = SUBDATE(CURDATE(),30) AND change_log.db_table = \'software\' AND change_log.db_action = \'create\'','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `tasks` SET `type` = 'queries', sub_resource_id = (SELECT id FROM queries WHERE name = 'Devices Discovered Today' LIMIT 1) WHERE sub_resource_id = 10000";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `tasks` SET `type` = 'queries', sub_resource_id = (SELECT id FROM queries WHERE name = 'Devices Discovered Yesterday' LIMIT 1) WHERE sub_resource_id = 10001";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `tasks` SET `type` = 'queries', sub_resource_id = (SELECT id FROM queries WHERE name = 'Devices Discovered in the Last 7 Days' LIMIT 1) WHERE sub_resource_id = 10002";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `tasks` SET `type` = 'queries', sub_resource_id = (SELECT id FROM queries WHERE name = 'Devices Discovered in the Last 30 Days' LIMIT 1) WHERE sub_resource_id = 10003";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `tasks` SET `type` = 'queries', sub_resource_id = (SELECT id FROM queries WHERE name = 'Devices Not Seen for 7 Days' LIMIT 1) WHERE sub_resource_id = 30000";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `tasks` SET `type` = 'queries', sub_resource_id = (SELECT id FROM queries WHERE name = 'Devices Not Seen for 30 Days' LIMIT 1) WHERE sub_resource_id = 30001";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `tasks` SET `type` = 'queries', sub_resource_id = (SELECT id FROM queries WHERE name = 'Devices Not Seen for 90 Days' LIMIT 1) WHERE sub_resource_id = 30002";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `tasks` SET `type` = 'queries', sub_resource_id = (SELECT id FROM queries WHERE name = 'Devices Not Seen for 180 Days' LIMIT 1) WHERE sub_resource_id = 30003";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `tasks` SET `type` = 'queries', sub_resource_id = (SELECT id FROM queries WHERE name = 'Software Discovered Today' LIMIT 1) WHERE sub_resource_id = 20000";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `tasks` SET `type` = 'queries', sub_resource_id = (SELECT id FROM queries WHERE name = 'Software Discovered Yesterday' LIMIT 1) WHERE sub_resource_id = 20001";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `tasks` SET `type` = 'queries', sub_resource_id = (SELECT id FROM queries WHERE name = 'Software Discovered in the Last 7 Days' LIMIT 1) WHERE sub_resource_id = 20002";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `tasks` SET `type` = 'queries', sub_resource_id = (SELECT id FROM queries WHERE name = 'Software Discovered in the Last 30 Days' LIMIT 1) WHERE sub_resource_id = 20003";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


// set our versions
$sql = "UPDATE `configuration` SET `value` = '20250512' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.7.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.7.0 completed.\n\n";
config('Openaudit')->internal_version = 20250512;
config('Openaudit')->display_version = '5.7.0';
