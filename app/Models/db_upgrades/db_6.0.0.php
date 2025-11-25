<?php

$output .= "Upgrade database to 6.0.0 commenced.\n\n";

helper('device');


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

if (!$db->fieldExists('vlan', 'arp')) {
    $sql = "ALTER TABLE `arp` ADD `vlan` varchar(200) NOT NULL DEFAULT '' AFTER `interface_id`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('vlan_id', 'arp')) {
    $sql = "ALTER TABLE `arp` ADD `vlan_id` int(10) unsigned DEFAULT NULL AFTER `vlan`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('vlan', 'network')) {
    $sql = "ALTER TABLE `network` ADD `vlan` varchar(100) NOT NULL DEFAULT '' AFTER `iflastchange`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('vlan_id', 'network')) {
    $sql = "ALTER TABLE `network` ADD `vlan_id` int(10) unsigned DEFAULT NULL AFTER `vlan`";
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
  `description` mediumtext NOT NULL,
  `raw` mediumtext NOT NULL,
  `purchase_count` int(10) unsigned NOT NULL DEFAULT '0',
  `used_count` int(10) unsigned NOT NULL DEFAULT '0',
  `software_name` mediumtext NOT NULL,
  `software_version` varchar(200) NOT NULL DEFAULT '',
  `expiry_date` date NOT NULL DEFAULT '2000-01-01',
  `end_of_life` date NOT NULL DEFAULT '2000-01-01',
  `end_of_service_life` date NOT NULL DEFAULT '2000-01-01',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `license_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
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
  `body` mediumtext NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'default_geocode'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'default_geocode','Uluru, Northern Territory, Australia','text','y','system','2000-01-01 00:00:00','When executing an Integration and the target system requires a GeoCode, use this if we cannot make one from the existing data.')";
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

$sql = "DELETE FROM configuration WHERE name = 'feature_devices_manufacturer_logo'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_devices_manufacturer_logo','y','bool','y','system','2000-01-01 00:00:00','When viewing the device list, should we show manufacturers logos, not just text.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'feature_news'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_news','y','bool','y','system','2000-01-01 00:00:00','Use online requests for news, updates, queries and packages.')";
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

if (!$db->fieldExists('commercial', 'queries')) {
    $sql = "ALTER TABLE `queries` ADD `commercial` enum('y','n') NOT NULL DEFAULT 'n' AFTER `advanced`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `queries` SET `commercial` = 'y' WHERE `name` IN ('Windows Clients With AntiVirus',
            'Windows Clients Without AntiVirus',
            'Windows Clients With AntiVirus Not UpToDate',
            'Windows Clients With Firewall',
            'Windows Clients Without Firewall',
            'Windows Clients With Firewall Disabled',
            'Windows Servers Firewalls Installed',
            'Windows Servers AntiVirus Installed',
            'Windows Servers Firewalls Not Installed',
            'Windows Servers AntiVirus Not Installed',
            'Banned Software',
            'Approved Software',
            'Ignored Software',
            'Devices Without OS Updates for more than 14 Days',
            'Any Devices Seen less than 7 Days ago',
            'Any Devices Not Seen for more than 7 Days',
            'Any Devices Not Seen for more than 30 Days',
            'Windows Devices Seen less than 7 Days ago',
            'Windows Devices Not Seen for more than 7 Days',
            'Windows Devices Not Seen for more than 30 Days',
            'Windows 10 All',
            'Windows 10 Latest Build',
            'Windows 10 Not Latest Build',
            'Windows 11 All',
            'Windows 11 Latest Build',
            'Windows 11 Not Latest Build',
            'Windows 2019 All',
            'Windows 2019 Latest Build',
            'Windows 2019 Not Latest Build',
            'Windows 2022 All',
            'Windows 2022 Latest Build',
            'Windows 2022 Not Latest Build',
            'Unknown Devices Found in the last 7 Days',
            'Windows Shares Writable by Everyone',
            'Windows Clients Without OS Updates for more than 14 Days',
            'Windows Servers Without OS Updates for more than 14 Days',
            'Linux Without OS Updates for more than 14 Days',
            'Windows 2025 Latest Build',
            'Windows 2025 Not Latest Build')";
$sql = str_replace("\n", "", $sql);
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

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Server Not Latest Build','','n','Windows Servers not running the latest build available from Microsoft.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, devices.os_family AS `devices.os_family`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND ((windows.build_number != \'14393.8594\' AND devices.os_family = \'Windows 2016\') OR (windows.build_number != \'17763.8027\' AND devices.os_family = \'Windows 2019\') OR (windows.build_number != \'20348.4405\' AND devices.os_family = \'Windows 2022\') OR (windows.build_number != \'26100.7171\' AND devices.os_family = \'Windows 2025\'))','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql, [$id]);
$widgets['Windows Server Not Latest Build'] = intval($db->insertID());
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Client Not Latest Build','','n','Windows 10 and 11 not running the latest build available from Microsoft.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, devices.os_family AS `devices.os_family`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND ((windows.build_number != \'19045.6575\' AND devices.os_family = \'Windows 10\') OR (windows.build_number != \'26200.7171\' AND devices.os_family = \'Windows 11\'))','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql, [$id]);
$widgets['Windows Server Not Latest Build'] = intval($db->insertID());
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows 2016 All','Software','n','','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND devices.os_family = \'Windows 2016\'','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql, [$id]);
$widgets['Windows Server Not Latest Build'] = intval($db->insertID());
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows 2016 Latest Build','Software','n','https://learn.microsoft.com/en-us/windows/release-health/windows-server-release-info','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND windows.build_number = \'14393.8594\' AND devices.os_family = \'Windows 2016\'','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql, [$id]);
$widgets['Windows Server Not Latest Build'] = intval($db->insertID());
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows 2016 Not Latest Build','Software','n','Use the same build number as Windows 2016 Latest Build.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND windows.build_number < \'14393.8594\' AND devices.os_family = \'Windows 2016\'','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql, [$id]);
$widgets['Windows Server Not Latest Build'] = intval($db->insertID());
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Clients Without OS Updates for more than 30 Days','Software','n','','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_os_update != \'2000-01-01 00:00:00\', devices.last_os_update, \'\') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_os_update < DATE(NOW() - INTERVAL 30 DAY) AND devices.last_os_update != \'\' AND devices.last_os_update != \'2000-01-01 00:00:00\' AND os_family IN (\'Windows 10\', \'Windows 11\')','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql, [$id]);
$widgets['Windows Server Not Latest Build'] = intval($db->insertID());
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Servers Without OS Updates for more than 30 Days','Software','n','','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_os_update != \'2000-01-01 00:00:00\', devices.last_os_update, \'\') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_os_update < DATE(NOW() - INTERVAL 30 DAY) AND devices.last_os_update != \'\' AND devices.last_os_update != \'2000-01-01 00:00:00\' AND os_family IN (\'Windows 2016\', \'Windows 2019\', \'Windows 2022\', \'Windows 2025\')','','n','y','system','2000-01-01 00:00:00')";
$db->query($sql, [$id]);
$widgets['Windows Server Not Latest Build'] = intval($db->insertID());
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Clients Not Seen for more than 30 Days','Software','n','','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_seen != \'2000-01-01 00:00:00\', devices.last_seen, \'\') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND os_family IN (\'Windows 10\', \'Windows 11\') AND devices.last_seen < DATE(NOW() - INTERVAL 30 DAY)','','y','y','system','2000-01-01 00:00:00')";
$db->query($sql, [$id]);
$widgets['Windows Server Not Latest Build'] = intval($db->insertID());
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Servers Not Seen for more than 30 Days','Software','n','','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_seen != \'2000-01-01 00:00:00\', devices.last_seen, \'\') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND os_family IN (\'Windows 2016\', \'Windows 2019\', \'Windows 2022\', \'Windows 2025\') AND devices.last_seen < DATE(NOW() - INTERVAL 30 DAY)','','y','y','system','2000-01-01 00:00:00')";
$db->query($sql, [$id]);
$widgets['Windows Server Not Latest Build'] = intval($db->insertID());
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Software','Software','y','','SELECT devices.id AS `devices.id`, software.name AS `software.name`, software.version AS `software.version`, devices.os_family AS `devices.os_family`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, locations.id AS `locations.id`, locations.name AS `locations.name` FROM `software` LEFT JOIN `devices` ON (software.device_id = devices.id AND software.current = \'y\') LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND software.name NOT LIKE \'KB%\' AND devices.os_group = \'Windows\' ORDER BY software.name','','n','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Hardware Manufacturers','Hardware','y','','SELECT devices.manufacturer AS `devices.manufacturer`, COUNT(id) AS `count` FROM devices WHERE @filter GROUP BY devices.manufacturer','','n','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Client Latest Build','Software','n','','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, devices.os_family AS `devices.os_family`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND ((windows.build_number = \'19045.6575\' AND devices.os_family = \'Windows 10\') OR (windows.build_number = \'26200.7171\' AND devices.os_family = \'Windows 11\'))','','n','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "UPDATE `queries` SET `sql` = 'SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND windows.build_number = \'19045.6575\' AND devices.os_family = \'Windows 10\'' WHERE name = 'Windows 10 Latest Build'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `queries` SET `sql` = 'SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND windows.build_number < \'19045.6575\' AND devices.os_family = \'Windows 10\'' WHERE name = 'Windows 10 Not Latest Build'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `queries` SET `sql` = 'SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND windows.build_number = \'26200.7171\' AND devices.os_family = \'Windows 11\'' WHERE name = 'Windows 11 Latest Build'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `queries` SET `sql` = 'SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND windows.build_number < \'26200.7171\' AND devices.os_family = \'Windows 11\'' WHERE name = 'Windows 11 Not Latest Build'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `queries` SET `sql` = 'SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND windows.build_number = \'17763.8027\' AND devices.os_family = \'Windows 2019\'' WHERE name = 'Windows 2019 Latest Build'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `queries` SET `sql` = 'SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND windows.build_number < \'17763.8027\' AND devices.os_family = \'Windows 2019\'' WHERE name = 'Windows 2019 Not Latest Build'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `queries` SET `sql` = 'SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND windows.build_number = \'20348.4405\' AND devices.os_family = \'Windows 2022\'' WHERE name = 'Windows 2022 Latest Build'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `queries` SET `sql` = 'SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND windows.build_number < \'20348.4405\' AND devices.os_family = \'Windows 2022\'' WHERE name = 'Windows 2022 Not Latest Build'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `queries` SET `sql` = 'SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND windows.build_number = \'26100.7178\' AND devices.os_family = \'Windows 2025\'' WHERE name = 'Windows 2025 Latest Build'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `queries` SET `sql` = 'SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND windows.build_number != \'26100.7178\' AND devices.os_family = \'Windows 2025\'' WHERE name = 'Windows 2025 Not Latest Build'";
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


$sql = "ALTER TABLE `users` CHANGE `lang` `lang` varchar(10) NOT NULL DEFAULT 'en'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `users` SET `lang` = 'zh' WHERE `lang` = 'zh-tw'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `users` SET `lang` = 'pb' WHERE `lang` = 'pt-br'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('version_raw', 'software')) {
    $sql = "ALTER TABLE `software` ADD `version_raw` varchar(255) NOT NULL DEFAULT '' AFTER `version_padded`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}
if (!$db->fieldExists('certificate_file', 'server_item')) {
    $sql = "ALTER TABLE `server_item` ADD `certificate_file` varchar(200) NOT NULL DEFAULT '' AFTER `log_rotation`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('certificate_name', 'server_item')) {
    $sql = "ALTER TABLE `server_item` ADD `certificate_name` varchar(200) NOT NULL DEFAULT '' AFTER `certificate_file`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('issuer_name', 'certificate')) {
    $sql = "ALTER TABLE `certificate` ADD `issuer_name` varchar(200) NOT NULL DEFAULT '' AFTER `issuer`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('common_name', 'certificate')) {
    $sql = "ALTER TABLE `certificate` ADD `common_name` varchar(200) NOT NULL DEFAULT '' AFTER `version`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('subject_key_ident', 'certificate')) {
    $sql = "ALTER TABLE `certificate` ADD `subject_key_ident` varchar(200) NOT NULL DEFAULT '' AFTER `common_name`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('authority_key_ident', 'certificate')) {
    $sql = "ALTER TABLE `certificate` ADD `authority_key_ident` varchar(200) NOT NULL DEFAULT '' AFTER `subject_key_ident`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DROP TABLE IF EXISTS `certificates`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `certificates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `active` enum('y','n','') NOT NULL DEFAULT '',
  `auto_renew` enum('y','n','') NOT NULL DEFAULT '',
  `managed_by` varchar(100) NOT NULL DEFAULT '',
  `expire_date` date NOT NULL DEFAULT '2000-01-01',
  `action_date` date NOT NULL DEFAULT '2000-01-01',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `standards_results`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `standards_policies`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `standards`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `standards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` mediumtext NOT NULL,
  `type` varchar(200) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  CONSTRAINT `standards_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `standards_results` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `standard_id` int(10) unsigned NOT NULL DEFAULT '1',
  `policy_id` int(10) unsigned NOT NULL DEFAULT '1',
  `applied` varchar(200) NOT NULL DEFAULT '',
  `maturity_score` decimal(1,1) NOT NULL DEFAULT '0.0',
  `maturity_level` enum('incomplete','performed','managed','established','predictable','optimized','') NOT NULL DEFAULT '',
  `legal_requirements` mediumtext NOT NULL,
  `contractual_obligations` mediumtext NOT NULL,
  `business_requirements` mediumtext NOT NULL,
  `best_practises` mediumtext NOT NULL,
  `risk_assesment_result` mediumtext NOT NULL,
  `implementation_notes` mediumtext NOT NULL,
  `exclusion_reasons` mediumtext NOT NULL,
  `responsibility` mediumtext NOT NULL,
  `attachments` mediumtext NOT NULL,
  `links` mediumtext NOT NULL,
  `improvement_opportunities` mediumtext NOT NULL,
  `result` enum('fail', 'other', 'excluded', 'not applicable', 'pass', '') NOT NULL DEFAULT '',
  `notes` longtext NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `standard_id` (`standard_id`),
  CONSTRAINT `standards_results_standard_id` FOREIGN KEY (`standard_id`) REFERENCES `standards` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `standards_policies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL DEFAULT '',
  `class` varchar(200) NOT NULL DEFAULT '',
  `section` varchar(200) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.1', 'Policies for information security', 'Information security policy and topic-specific policies shall be de-fined, approved by management, published, communicated to and acknowledged by relevant personnel and relevant interested parties and reviewed at planned intervals and if significant changes occur.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.2', 'Review of the policies for information security ', 'Information security roles and responsibilities shall be defined and allocated according to the organization needs.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.3', 'Segregation of duties', 'Conflicting duties and conflicting areas of responsibility shall be segregated.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.4', 'Management responsibilities', 'Management shall require all personnel to apply information security in accordance with the established information security policy, top- ic-specific policies and procedures of the organization.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.5', 'Contact with authorities', 'The organization shall establish and maintain contact with relevant authorities.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.6', 'Contact with special interest groups', 'The organization shall establish and maintain contact with special interest groups or other specialist security forums and professional associations.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.7', 'Threat intelligence', 'Infrormation relating to information security threats shall be collected and analysed to produce threat intelligence.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.8', 'Information security in project management', 'Information security shall be integrated into project management.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.9', 'Inventory of information and other associated assets', 'And inventory of information and other associated assets, including owners, shall be developed and maintained', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.10', 'Acceptable use of information and other associated assets', 'Rules for the accepable use and procedures for handling information and other associated assets shall be identified, documented and implemented', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.11', 'Return of assets', 'Personnel and other interested parties as appropriate shall return all the organization\'s assets in their possession upon change or termination of their employment, contract or agreement', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.12', 'Classification of Information', 'Information shall be classified according to the information security needs of the organization based on confidentiality, integrity, availability and relevant interested party requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.13', 'Labelling of information', 'An appropriate set of procedures for information labelling shall be developea and Implemented in accordance wit the Information clas sification scheme adopted by the organization', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.14', 'information transfer', 'Information transfer rules, procedures, or agreements shall be in place for all types of transter facilities within the organization and between the organization and other parties', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.15', 'Access control', 'Rules to control physical and logical access to information and other associated assets shall be established and implemented based on business and information security requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.16', 'Identity management', 'The full life cycle of identitites shall be managed', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.17', 'Authentication Information', 'Allocation and management of authentication information shall be controlled by a management process, including advising personnel on appropriate handling of authentication information', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.18', 'Access rights', 'Access rights to information and other associated assets shall be provisioned. reviewed, modified and removed in accordance with the organization\'s topic-specific policy on and rules for access control', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.19', 'Information security in supplier relationships', 'Processes and procedures shall be defined and implemented to manage the information security risks associated with the use of suppliers products or services.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.20', 'Addressing information security within supplier agreements', 'Relevant information security requirements shall be established and agreed with each supplier based on the type of supplier relationship', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.21', 'Managing information security in the information and communication technology(ICT) supply chain', 'Processes and procedures shall be defined and implemented to manage the information security risks associated with the ICT products and services supply chain', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.22', 'Monitoring, review and change management of supplier services', 'The organization shall regularly monitor, review, evaluate and manage change in supplier information security practices and service delivery.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.23', 'Information security for use of cloud services', 'Processes for acquisition, use, management and exit from cloud services shall be established in accordance with the organization\'s information security requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.24', 'Information security incident management planning and preparation', 'The organization shall plan and prepare for managing information security incidents by defining, establishing and communicating information security incident management processes, roles and responsibilities.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.25', 'Assessment and decision on information security events', 'The organization shall assess information security events and decide if they are to be categorized as information security incidents.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.26', 'Response to information security incidents', 'Information security incidents shall be responded to in accordance with the documented procedures', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.27', 'Learning from information security incidents', 'Knowledge gained from information security incidents shall be used to strangthen and improve the information security controls.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.28', 'Collection of evidence', 'The organization shall establish and implement procedures for the identification, collection, acquisition and preservation of evidence related to information security events', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.29', 'Information security during disruption', 'The organization shall plan how to maintain information security at an appropriate level during disruption', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.30', 'ICT readiness for business continuity', 'ICT readiness shall be planned, implemented, maintained and tested based on business continuity objectives and ICT continuity requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.31', 'Legal, statutory, regulatory and contractual requirements', 'Legal, statutory, regulatory and contractual requirements relevant to information security and the organization;s approach to meet these requirements shall be identified, documented and kept up to date.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.32', 'Intellectual property rights', 'The organization shall implement appropriate procedures to protect intellectual property rights.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.33', 'Protection of records', 'Records shall be protected from loss, destruction, falsification, unauthorized access and unauthorized release.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.34', 'Privacy and protetion of personal identifiable information (PII)', 'The organization shall identify and meet the requirements regarding the preservation of privacy and protection of PII according to applicable laes and regulations and contractual requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.35', 'Independent review of information security', 'The organization\'s approach to managing information security and its implementation including people, processes and technologies shall be reviewed independently at planned intervals, or when significant changes occur.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.36', 'Compliance with policies, rules and standards for information security', 'Compliance with the organization\'s information security policy, topic-specific policies, rules and standards shall be regularly reviewed.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.37', 'Documented operating procedures', 'Operating procedures for information processing facilities shall be documented and made available to personnel who need them.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.1', 'Screening', 'Background verification checks on all candidates to become personnel shall be carried out prior to joining the organization and on an ongoing basis taking into consideration applicable laws, regulations and ethics and be proportional to the business requirements, the classification of the information to be accessed and perceived risks.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.2', 'Terms and conditions of employment', 'The employment contractual agreements shall state the personnel\'s and the organization\'s responsibilities for information security.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.3', 'Information security awaremess education and training', 'Personnel of the organization and relevant interested parties shall receive appropriate information security awareness , education and training and regular updates of the organization\'s information security policy, topic-specific policies and procedures, as relevant for their job function.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.4', 'Disciplinary process', 'A disciplinary process shall be formalized and communicated to take actions against personnel and toher relevant interested parties who have committed and information security policy violation.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.5', 'Responsibilities after termination or change of employment', 'Information security responsibilities and duties that remain valid after termination or change of employment shall be defined, enforced and communicated to relevant personnel and other interested parties.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.6', 'Condifentiality or non-disclosure agreements', 'Confidentiality or non-disclosure agreements reflecting the organization\'s needs for the protection of information shall be identified, documented, regularly reviewed and signed by personnel and other relevant interested parites.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.7', 'Remote working', 'Security measures shall be implemented when personnel are working remotely to protect information accessed, processed or stored outside the organization\'s premises.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.8', 'Information security event reporting', 'The organization shall provide mecanism for personnel to report observed or suspected information security events through appropriate channels in a timely manner.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.1', 'Physical security perimeters', 'Security peimeters shall be defined and used to protect areas that contain information and other associated assets.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.2', 'Physical entry', 'Secure areas shall be protected by appropriate entry controls and access points.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.3', 'Securing offices, rooms and facilities', 'Physical security for offices, rooms and facilities shall be designed and implemented.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.4', 'Physical security monitoring', 'Premises shall be continuously monitored for unauthorized physical access.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.5', 'Protecting against physical and environmental threats', 'Protection against physical and environmental threats, such as natural disasters and other intentional or inuntentional physical threats to infrastructure shall be designed and implemented.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.6', 'Working in secure areas', 'Security measures for working in secure areas shall be designed and implemented.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.7', 'Clear desk and clear screen', 'Clear desk rules for papers and removable storage media and clear screen rules for information processing facilities shall be defined and appropriately enforced.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.8', 'Equipment siting and protection', 'Equipment shall be sited securely and protected.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.9', 'Security of assets off-premises', 'Off-site assets shall be protected.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.10', 'Storage media', 'Storage media shall be managed through their life cycle of acquisition, use, transportation and disposal in accordance with the organization\'s classification scheme and handling requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.11', 'Supporting utilities', 'Information processing facilities shall be protected from power faliures and other disruptions caused by failures in supporting utilities.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.12', 'Cabling security', 'Cables carrying power, data or supporting information services shall be protected from interception, interference or damage.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.13', 'Equipment maintenance', 'Equipment shall be maintained correctly to ensure availability, integrity and confidentiality of information.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.14', 'Secure disposal or re-use of equipment', 'Items of equipment containing storage media shall be verified to ensure that any sensitive data and licensed softeware has been removed or securely overwritten prior to disposal or re-use', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.1', 'User end point devices', 'Information stored on, processed by or accessible via user end point device shall be protected.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.2', 'Privileged access rights', 'The allocation and use of privileged access rights shall be restricted and managed', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.3', 'Information access restriction', 'Access to information and other associated assets shall be restricted in accordance with the established topic-specific policy on access control', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.4', 'Access to source code', 'Read and write access to source code, development tools and software libraries shall be appropriately managed', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.5', 'Secure authentication', 'Secure authentication technologies and procedures shall be implemented based on information access restrictions and the topic-specific policy on access control.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.6', 'Capacity management', 'The use of resources shall be monitored and adjusted in line with current and expected capacity requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.7', 'Protection against malware', 'Protection against malware shall be implemented and supported by appropriate user awareness.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.8', 'Management of technical vulnerabilities', 'Information about technical vulnerabilities of information systems in use shall be obtained, the organization\'s exposure to such vulnerabilities shall be evaluated and appropriate measures shall be taken.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.9', 'Configuration management', 'Configurations, including security configurations, of hardware, software, services and networks shall be established, documented, implemented, monitored and reviewed.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.10', 'Information deletion', 'Information stored in information systems, devices or in any other storage media shall be deleted when no longer required.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.11', 'Data masking', 'Data masking shall be used in accordance with the organisations topic-specific policy on access control and other related topic-specific policies, and business requirements, taking applicable legislation into consideration.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.12', 'Data leakage prevention', 'Data leakage prevention measures shall be applied to systems, networks and any other device that process, store or transmit sensitive information.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.13', 'Information backup', 'Backup copies of information, software and systems shall be maintained and regularly tested in accordance with the agreed topic-specific policy on backup.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.14', 'Redundancy of information processing facilities', 'Information processing facilities shall be implemented with redundancy sufficient to meet availability requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.15', 'Logging', 'Logs that record activities, exceptions, faults and other relevant events shall be produced, stored, protexted and analysed.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.16', 'Monitoring activities', 'Networks, systems and applications shall be monitored for anomalous behaviour and appropriate actions taken to evaluate potential information security incidients.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.17', 'Clock synchronization', 'The clocks of information processing systems used by the organization shall be sunchronized to approved time sources.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.18', 'Use of priviledge utility programs', 'The use of utility programs that can be capable of overriding system and application controls shall be restricted and tightly controlled.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.19', 'Installation of software on operational systems', 'Procedures and measures shall be implemented to securely manage software installation on operational systems.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.20', 'Network security', 'Networks and network devices shall be secured managed and controlled to protect information in systems and applications.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.21', 'Security of network services', 'Security mechanisms, service levels and service requirements of network services shall be identified, implemented and monitored.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.22', 'Segregation of networks', 'Groups of information services, users and information systems shall be segregated in the organization\'s networks', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.23', 'Web filtering', 'Access to external websites shall be managed to reduce exposure to malicious content.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.24', 'Use of cryptography', 'Rules for the effective use of cryptography, including cryptographic key management, shall be defined and implemented.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.25', 'Secure development life cycle', 'Rules for secure development of software and systems shall be established and applied.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.26', 'Application security requirements', 'Information security requirements shall be identified, specified and approved when developing or acquiring applications.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.27', 'Secure system architecture and engineering principles', 'Principles for engineering secure systems shall be established, documented, maintiained and applied to any information system development activities.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.28', 'Secure coding', 'Secure coding principles shall be applied to software development.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.29', 'Secure testing in development and acceptance', 'Security testing processes shall be defined and implemented in the development life cycle.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.30', 'Outsourced development', 'The organization shall direct, monitor and review the activities related to outsourced system development.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.31', 'Seperation of development, test and production environment', 'Development, testing and production environments shall be seperated and secured.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.32', 'Change management', 'Changes to information processing facilities and information systems shall be subject to change management procedured.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.33', 'Test information', 'Test information shall be appropriately selected, protected and managed.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.34', 'Protection of information systems during audit testing', 'Audit tests and other assurance activities involving assessment of operational systems shall be planned and agreed between the tester and appropriate management.', 'system', NOW());";
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
        if ($role->name === 'admin') {
            $permissions->certificates = 'crud';
            $permissions->standards = 'crud';
            $permissions->standards_results = 'crud';
            $permissions->vendors = 'crud';
            $permissions->vulnerabilities = 'crud';
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        } else if ($role->name === 'org_admin') {
            $permissions->certificates = 'crud';
            $permissions->standards = 'crud';
            $permissions->standards_results = 'crud';
            $permissions->vendors = 'r';
            $permissions->vulnerabilities = 'r';
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        } else {
            $permissions->certificates = 'r';
            $permissions->standards = '';
            $permissions->standards_results = '';
            $permissions->vendors = 'r';
            $permissions->vulnerabilities = 'r';
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }
    }
}

$sql = "SELECT DISTINCT index_name FROM INFORMATION_SCHEMA.STATISTICS WHERE (table_schema, table_name) = ('openaudit', 'software') AND index_type = 'FULLTEXT'";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!empty($result[0]->index_name) and $result[0]->index_name === 'software_name_fulltext') {
  // we already have an index, leave it
} else {
  // Make a new index
  $sql = "ALTER TABLE `software` ADD FULLTEXT INDEX `software_name_fulltext` (`name`)";
  $db->query($sql);
  $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
  log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('hw_cpe', 'devices')) {
  $sql = "ALTER TABLE devices ADD hw_cpe varchar(200) NOT NULL DEFAULT '' AFTER os_cpe";
  $db->query($sql);
  $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
  log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('cve', 'devices')) {
  $sql = "ALTER TABLE devices ADD `cve` mediumtext NOT NULL AFTER identification";
  $db->query($sql);
  $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
  log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('os_display_version', 'devices')) {
  $sql = "ALTER TABLE devices ADD os_display_version varchar(200) NOT NULL DEFAULT '' AFTER os_version";
  $db->query($sql);
  $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
  log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('vm_vendor', 'devices')) {
    $sql = "ALTER TABLE devices ADD vm_vendor varchar(50) NOT NULL DEFAULT '' AFTER asset_tag";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('criticality', 'devices')) {
    $sql = "ALTER TABLE devices ADD `criticality` varchar(100) NOT NULL DEFAULT 'unassigned' AFTER owner";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','criticality','extreme','extreme','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','criticality','very high','very high','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','criticality','high','high','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','criticality','medium','medium','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','criticality','low','low','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','criticality','unassigned','unassigned','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('sensitivity', 'devices')) {
    $sql = "ALTER TABLE devices ADD `sensitivity` varchar(100) NOT NULL DEFAULT 'unassigned' AFTER criticality";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','top secret','top secret','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','secret','secret','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','confidential','confidential','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','private','private','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','sensitive','sensitive','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','public','public','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','unclassified','unclassified','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','unassigned','unassigned','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DROP TABLE IF EXISTS `vulnerabilities`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `vulnerabilities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `cve` varchar(200) NOT NULL DEFAULT '',
  `attack_complexity` varchar(20) NOT NULL DEFAULT '',
  `attack_requirements` varchar(20) NOT NULL DEFAULT '',
  `attack_vector` varchar(20) NOT NULL DEFAULT '',
  `automatable` varchar(20) NOT NULL DEFAULT '',
  `base_score` varchar(20) NOT NULL DEFAULT '',
  `base_severity` varchar(20) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `exploit_maturity` varchar(20) NOT NULL DEFAULT '',
  `impact_availability` varchar(20) NOT NULL DEFAULT '',
  `impact_confidentiality` varchar(20) NOT NULL DEFAULT '',
  `impact_integrity` varchar(20) NOT NULL DEFAULT '',
  `lastModified` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `privileges_required` varchar(20) NOT NULL DEFAULT '',
  `published_date` date NOT NULL DEFAULT '2000-01-01',
  `published` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `references` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`references`)),
  `remediation` mediumtext NOT NULL,
  `scope` varchar(20) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  `user_interaction` varchar(20) NOT NULL DEFAULT '',
  `vendor` varchar(200) NOT NULL DEFAULT '',
  `vuln_status` varchar(30) NOT NULL DEFAULT '',
  `filter` longtext NOT NULL,
  `sql` longtext NOT NULL,
  `nvd_json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{}' CHECK (json_valid(`nvd_json`)),
  `products` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{}' CHECK (json_valid(`products`)),
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `cve` (`cve`),
  KEY `vendor` (`vendor`),
  KEY `published_date` (`published_date`),
  KEY `cvevendor` (`cve`,`vendor`),
  KEY `vendorbaseseverity` (`vendor`,`base_severity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `vulnerabilities_cache`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `vulnerabilities_cache` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vulnerability_id` int(10) unsigned NOT NULL DEFAULT 1,
  `org_id` int(10) unsigned NOT NULL DEFAULT 1,
  `count` int(10) unsigned NOT NULL DEFAULT 0,
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `vulnerabilities_cache_org_id` (`org_id`),
  CONSTRAINT `vulnerabilities_cache_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `vendors`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `vendors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `critical` int(10) unsigned NOT NULL DEFAULT 0,
  `high` int(10) unsigned NOT NULL DEFAULT 0,
  `medium` int(10) unsigned NOT NULL DEFAULT 0,
  `low` int(10) unsigned NOT NULL DEFAULT 0,
  `none` int(10) unsigned NOT NULL DEFAULT 0,
  `use` enum('y', 'n', '') NOT NULL DEFAULT 'n',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'adobe', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'apple', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'cisco', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'google', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'microsoft', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'mozilla', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'redhat', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('display_version', 'windows')) {
  $sql = "ALTER TABLE windows ADD display_version varchar(20) NOT NULL DEFAULT '' AFTER version";
  $db->query($sql);
  $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
  log_message('info', (string)$db->getLastQuery());
}

$sql = "SHOW INDEX FROM `variable` WHERE Key_name = 'device_id_name'";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (count($result) === 0) {
    $sql = "ALTER TABLE `variable` ADD INDEX `device_id_name` (`device_id`, `name`)";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_vulnerabilities'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_vulnerabilities','y','bool','y','system','2000-01-01 00:00:00','Enable the vulnerabilities feature.')";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_vulnerabilities_alert_date'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_vulnerabilities_alert_date','n','date','y','system','2000-01-01 00:00:00','The last time a vulnerabilitiy alert was shown.')";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_vulnerabilities_interval'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_vulnerabilities_interval','60','number','y','system','2000-01-01 00:00:00','Check for new vulnerabilities every X minutes.')";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_vulnerabilities_date'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_vulnerabilities_date','2025-01-01','date','y','system','2000-01-01 00:00:00','Retrieve vulnerabilities since this date.')";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_vulnerabilities_url'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_vulnerabilities_url','https://news.firstwave.com/news','text','y','system','2000-01-01 00:00:00','The URL to connect to, to retrieve vulnerability data.')";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_vulnerabilities_last_request_datetime'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_vulnerabilities_last_request_datetime','2000-01-01 00:00:00','text','y','system','2000-01-01 00:00:00','When did we last request the vulnerability list.')";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// Syslog Feature flags
$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_syslog_access'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_syslog_access','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT log access to syslog (Linux only).')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_syslog_components'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_syslog_components','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in syslog if a change is detected in a component table.')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_syslog_devices'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_syslog_devices','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in syslog if a new device detected.')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_syslog_vulnerabilities'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_syslog_vulnerabilities','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in syslog if a device has a vulnerability detected.')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// Retrieve the vulnerabilitiy list every hour on a random minute between 5 and 55
$sql = "INSERT INTO `tasks` VALUES (null, 'Vulnerabilitiy Retrieval', 1, 'Retrieve an updated vulnerability list.', 0, '', 'y', 'vulnerabilities', FLOOR(RAND()*(55-5)+5), '*', '*', '*', '*', 0, 0, '2000-01-01 00:00:00', '2000-01-01 00:00:00', '', '', 0, 'system', '2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// A daily task randomly between 1 and 6 AM, between 5 and 55 minute
$sql = "INSERT INTO `tasks` VALUES (null, 'Vendor Retrieval', 1, 'Retrieve an updated vendor list.', 0, '', 'y', 'vendors', FLOOR(RAND()*(55-5)+5), FLOOR(RAND()*(5)+1), '*', '*', '*', 0, 0, '2000-01-01 00:00:00', '2000-01-01 00:00:00', '', '', 0, 'system', '2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// A daily execution of all vulnerabilities for all orgs and all devices
$sql = "INSERT INTO `tasks` VALUES (null, 'Run All Vulnerabilities', 1, 'Execute all vulnerabilities for all Orgs and Devices.', 0, '', 'y', 'vulnerabilities_all', FLOOR(RAND()*(55-5)+5), FLOOR(RAND()*(5)+1), '*', '*', '*', 0, 0, '2000-01-01 00:00:00', '2000-01-01 00:00:00', '', '', 0, 'system', '2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// Set ALL os_cpe
$sql = "SELECT id, type, sysDescr, model, manufacturer, os_name, os_family, os_group, os_version, os_display_version FROM devices";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
foreach ($result as $device) {
    $os_cpe = cpe_create($device);
    $sql = "UPDATE devices SET os_cpe = ? WHERE id = ?";
    $db->query($sql, [$os_cpe, $device->id]);
}





$sql = "ALTER TABLE `widgets` CHANGE `type` `type` enum('line','pie','status','traffic','') DEFAULT 'line'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


if ($db->fieldExists('dataset_title', 'widgets')) {
    $sql = "ALTER TABLE `widgets` CHANGE `options` `options` mediumtext NOT NULL AFTER `dataset_title`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
} else if ($db->fieldExists('primary_text', 'widgets')) {
    $sql = "ALTER TABLE `widgets` CHANGE `options` `options` mediumtext NOT NULL AFTER `primary_text`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `widgets` CHANGE `sql` `sql` mediumtext NOT NULL AFTER `options`";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `widgets` CHANGE `link` `link` mediumtext NOT NULL AFTER `sql`";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('icon', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `icon` varchar(50) NOT NULL DEFAULT '' AFTER `link`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('help_text', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `help_text` varchar(200) NOT NULL DEFAULT '' AFTER `icon`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('dataset_title', 'widgets')) {
    $sql = "ALTER TABLE `widgets` CHANGE `dataset_title` `primary_text` varchar(200) NOT NULL DEFAULT '' AFTER `help_text`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('secondary_text', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `secondary_text` varchar(200) NOT NULL DEFAULT '' AFTER `primary_text`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('ternary_text', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `ternary_text` varchar(200) NOT NULL DEFAULT '' AFTER `secondary_text`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `widgets` CHANGE `where` `where` varchar(50) NOT NULL DEFAULT '' AFTER `ternary_text`";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('table', 'widgets')) {
    $sql = "ALTER TABLE `widgets` CHANGE `table` `line_table` varchar(50) NOT NULL DEFAULT '' AFTER `where`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('line_event', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `line_event` varchar(50) NOT NULL DEFAULT '' AFTER `line_table`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('line_days', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `line_days` smallint(6) NOT NULL DEFAULT '0' AFTER `line_event`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('pie_column', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `pie_column` varchar(50) NOT NULL DEFAULT '' AFTER `line_days`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('pie_limit', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `pie_limit` smallint(6) NOT NULL DEFAULT '0' AFTER `pie_column`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('traffic_primary_query_id', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `traffic_primary_query_id` smallint(6) NOT NULL DEFAULT '0' AFTER `pie_limit`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('traffic_secondary_query_id', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `traffic_secondary_query_id` smallint(6) NOT NULL DEFAULT '0' AFTER `traffic_primary_query_id`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('traffic_ternary_query_id', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `traffic_ternary_query_id` smallint(6) NOT NULL DEFAULT '0' AFTER `traffic_secondary_query_id`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('status_secondary_sql', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `status_secondary_sql` mediumtext NOT NULL AFTER `traffic_ternary_query_id`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('status_primary_color', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `status_primary_color` varchar(50) NOT NULL DEFAULT '' AFTER `status_secondary_sql`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('status_secondary_color', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `status_secondary_color` varchar(50) NOT NULL DEFAULT '' AFTER `status_primary_color`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('status_query_id', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `status_query_id` smallint(6) NOT NULL DEFAULT '0' AFTER status_secondary_color";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('status_link_query_id', 'widgets')) {
    $sql = "ALTER TABLE `widgets` ADD `status_link_query_id` smallint(6) NOT NULL DEFAULT '0' AFTER `status_query_id`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

// $sql = "UPDATE `widgets` SET `line_table` = `primary` WHERE `type` = 'line'";
// $result = $db->query($sql);
// $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
// log_message('info', (string)$db->getLastQuery());

// $sql = "UPDATE `widgets` SET `line_event` = `secondary` WHERE `type` = 'line'";
// $result = $db->query($sql);
// $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
// log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `line_days` = `limit` WHERE `type` = 'line'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `pie_column` = `primary` WHERE `type` = 'pie'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `pie_limit` = `limit` WHERE `type` = 'pie'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `traffic_primary_query_id` = IF(`primary` = '', 0, CAST(`primary` AS SIGNED)) WHERE `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `traffic_secondary_query_id` = IF(`secondary` = '', 0, CAST(`secondary` AS SIGNED)) WHERE `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `traffic_ternary_query_id` = IF(`ternary` = '', 0, CAST(`ternary` AS SIGNED)) WHERE `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `icon` = `where`, `where` = '' WHERE `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `icon` = 'antivirus' WHERE `icon` LIKE '%virus%' AND `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `icon` = 'firewall' WHERE `icon` LIKE '%shield%' AND `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `icon` = 'windows' WHERE `icon` LIKE '%windows%' AND `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `icon` = 'update' WHERE `icon` LIKE '%box-open%' AND `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `icon` = 'update' WHERE `icon` LIKE '%download%' AND `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `icon` = 'computer' WHERE `icon` LIKE '%computer%' AND `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `icon` = 'folder' WHERE `icon` LIKE '%folder-open%' AND `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `description` = '' WHERE `name` = 'Windows Clients AntiVirus Status' AND `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `primary_text` = `group_by` WHERE `type` = 'traffic'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('limit', 'widgets')) {
    $sql = "ALTER TABLE `widgets` DROP COLUMN `limit`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('primary', 'widgets')) {
    $sql = "ALTER TABLE `widgets` DROP COLUMN `primary`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('secondary', 'widgets')) {
    $sql = "ALTER TABLE `widgets` DROP COLUMN `secondary`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('ternary', 'widgets')) {
    $sql = "ALTER TABLE `widgets` DROP COLUMN `ternary`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('group_by', 'widgets')) {
    $sql = "ALTER TABLE `widgets` DROP COLUMN `group_by`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "INSERT INTO `widgets` VALUES (null,'Top 10 Vulnerable Devices',1,'','pie','','SELECT devices.id AS `description`, devices.name AS `name`, LENGTH(devices.cve) - LENGTH(REPLACE(devices.cve, \',\', \'\')) AS `count` FROM devices WHERE @filter AND devices.cve > \'\' ORDER BY `count` DESC LIMIT 10','devices?devices.id=@description','','','Top 10 Vulnerable Devices','','','','','',0,'',0,0,0,0,'','primary','',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Top 10 Vendors of Vulnerabilities',1,'','pie','','SELECT vulnerabilities.vendor AS `description`, vulnerabilities.vendor AS `name`, COUNT(vulnerabilities.id) AS `count` FROM `vulnerabilities` LEFT JOIN `orgs` ON `vulnerabilities`.`org_id` = `orgs`.`id` WHERE @filter GROUP BY vulnerabilities.vendor ORDER BY `count` LIMIT 10','vulnerabilities?vulnerabilities.vendor=@description','','','Top 10 Vendors of Vulnerabilities','','','','','',0,'',0,0,0,0,'','primary','',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Vulnerabilities Outstanding from Microsoft',1,'','pie','','SELECT vulnerabilities.base_severity AS `name`, COUNT(vulnerabilities_cache.vulnerability_id) AS `count`, \'\' AS `description` FROM vulnerabilities_cache LEFT JOIN vulnerabilities ON (vulnerabilities_cache.vulnerability_id = vulnerabilities.id) WHERE @filter AND vulnerabilities.vendor = \'microsoft\' GROUP BY base_severity','vulnerabilities?vulnerabilities.base_severity=@name&vulnerabilities.vendor=microsoft&count=>0','','','Vulnerabilities Outstanding from Microsoft','','','','','',0,'',0,0,0,0,'','primary','',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Vulnerabilities By Severity',1,'','pie','','SELECT vulnerabilities.base_severity AS `name`, COUNT(vulnerabilities_cache.vulnerability_id) AS `count`, \'\' AS `description` FROM vulnerabilities_cache LEFT JOIN vulnerabilities ON (vulnerabilities_cache.vulnerability_id = vulnerabilities.id) WHERE @filter GROUP BY base_severity','vulnerabilities?vulnerabilities.base_severity=@name&count=>0','','','Vulnerabilities By Severity','','','','','',0,'',0,0,0,0,'','primary','',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Clients Without AntiVirus',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices LEFT JOIN antivirus ON (devices.id = antivirus.device_id AND antivirus.current = \'y\') WHERE @filter AND antivirus.status IS NULL AND (devices.os_family LIKE \'Windows 10\' or devices.os_family LIKE \'Windows 11\') GROUP BY devices.id','','antivirus','Windows clients with no registered AntiVirus.','No AntiVirus','Windows Clients','','','','',0,'',0,0,0,0,'','danger','success',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows Clients Without AntiVirus'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows 10 Not Latest Build',1,'','traffic','','','','windows','Windows 10 devices not running the latest release from Microsoft.','Not Latest Version','Windows 10','','','','',0,'',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows 10 Not Latest Build'),0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows 10 Latest Build'),'','','',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows 11 Not Latest Build',1,'','traffic','','','','windows','Windows 11 devices not running the latest release from Microsoft.','Not Latest Version','Windows 11','','','','',0,'',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows 11 Not Latest Build'),0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows 11 Latest Build'),'','','',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Clients Without Firewall',1,'','traffic','','','','firewall','Windows 10 and 11 machines without a registered Firewall','No Firewall','Windows Clients','','','','',0,'',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows Clients Without Firewall'),(SELECT `id` FROM `queries` WHERE `name` = 'Windows Clients With Firewall Disabled'),(SELECT `id` FROM `queries` WHERE `name` = 'Windows Clients With Firewall'),'','','',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Clients Without OS Updates for more than 30 Days',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND devices.last_os_update < DATE(NOW() - INTERVAL 30 DAY) AND devices.last_os_update != \'\' AND devices.last_os_update != \'2000-01-01 00:00:00\' AND os_family IN (\'Windows 10\', \'Windows 11\')','','update','Windows 10 and 11 devices that have not been updated for 30 days or more.','No Updates','Windows Clients','','','','',0,'',0,0,0,0,'','danger','success',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows Clients Without OS Updates for more than 30 Days'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Clients Not Seen for more than 30 Days',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND os_family IN (\'Windows 10\', \'Windows 11\') AND devices.last_seen < DATE(NOW() - INTERVAL 30 DAY)','','discoveries','Windows 10 and 11 devices not seen for 30 or more days.','Not Seen','Windows Clients','','','','',0,'',0,0,0,0,'','danger','success',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows Clients Not Seen for more than 30 Days'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Server Without AntiVirus',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND devices.id NOT IN (SELECT devices.id FROM devices LEFT JOIN software ON (software.device_id = devices.id AND software.current = \'y\') RIGHT JOIN packages ON (software.name LIKE packages.software_name AND devices.os_group LIKE packages.os) WHERE devices.id IS NOT NULL AND packages.type = \'antivirus\' AND devices.os_name LIKE \'%Server%\') AND devices.os_name LIKE \'%Windows Server%\' GROUP BY devices.id','','antivirus','Windows Servers with no detected AntiVirus.','No AntiVirus','Windows Servers','','','','',0,'',0,0,0,0,'','danger','success',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows Servers AntiVirus Not Installed'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Server Without Firewall',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND devices.id NOT IN (SELECT devices.id FROM devices LEFT JOIN software ON (software.device_id = devices.id AND software.current = \'y\') RIGHT JOIN packages ON (software.name LIKE packages.software_name AND devices.os_group LIKE packages.os) WHERE devices.id IS NOT NULL AND packages.type = \'firewall\' AND devices.os_name LIKE \'%Server%\') AND devices.os_name LIKE \'%Windows Server%\' GROUP BY devices.id','','firewall','Windows Servers with no detected Firewall.','No Firewall','Windows Servers','','','','',0,'',0,0,0,0,'','danger','success',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows Servers Firewalls Not Installed'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Server Not Latest Build',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND ((windows.build_number != \'14393.8594\' AND devices.os_family = \'Windows 2016\') OR (windows.build_number != \'17763.8027\' AND devices.os_family = \'Windows 2019\') OR (windows.build_number != \'20348.4405\' AND devices.os_family = \'Windows 2022\') OR (windows.build_number != \'26100.7171\' AND devices.os_family = \'Windows 2025\'))','','windows','Windows Servers not running the latest release from Microsoft.','Not Latest Version','Windows Servers','','','','',0,'',0,0,0,0,'','danger','success',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows Server Not Latest Build'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Servers Without OS Updates for more than 30 Days',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND devices.last_os_update < DATE(NOW() - INTERVAL 14 DAY) AND devices.last_os_update != \'\' AND devices.last_os_update != \'2000-01-01 00:00:00\' AND os_family IN (\'Windows 2016\', \'Windows 2019\', \'Windows 2022\', \'Windows 2025\')','','update','Windows Servers that have not been updated for 30 days or more.','No Updates','Windows Servers','','','','',0,'',0,0,0,0,'','danger','success',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows Servers Without OS Updates for more than 30 Days'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Servers Not Seen for more than 30 Days',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND os_family IN (\'Windows 2016\', \'Windows 2019\', \'Windows 2022\', \'Windows 2025\') AND devices.last_seen < DATE(NOW() - INTERVAL 30 DAY)','','discoveries','Windows Servers not seen for 30 or more days.','Not Seen','Windows Servers','','','','',0,'',0,0,0,0,'','danger','success',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows Servers Not Seen for more than 30 Days'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// LIKELY REVISE AND ADD A QUERY LINK
$sql = "INSERT INTO `widgets` VALUES (null,'Total Devices',1,'','status','','SELECT COUNT(id) AS `count` FROM devices WHERE @filter','devices','icon-database','The total number of devices in Open-AudIT.','Total Devices','','','','','',0,'',0,0,0,0,'SELECT CONCAT(IF(COUNT(id) > 0, CONCAT(\'+\', COUNT(id), \' this week.\'), \'\')) AS `secondary_text` FROM devices WHERE @filter AND first_seen > DATE(NOW() - INTERVAL 7 DAY)','primary','primary',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// LIKELY REVISE AND ADD A QUERY LINK
$sql = "INSERT INTO `widgets` VALUES (null,'Recently Audited',1,'','status','','SELECT CONCAT(ROUND(COUNT(CASE WHEN devices.last_seen > DATE(NOW() - INTERVAL 7 DAY) THEN 1 END) / COUNT(devices.id) * 100, 0), \'%\') AS `count` FROM devices WHERE @filter','devices','icon-radar','Devices scanned this week.','Audited (7 Days)','','','','','',0,'',0,0,0,0,'SELECT CONCAT(COUNT(CASE WHEN devices.last_seen > DATE(NOW() - INTERVAL 7 DAY) THEN 1 END), \' / \', COUNT(id)) AS `secondary_text` FROM devices WHERE @filter','primary','primary',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Orphaned Devices',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND devices.last_seen < DATE(NOW() - INTERVAL 30 DAY)','','icon-eye-off','Devices not seen for 30+ days.','Orphaned Devices','30 days.','','','','',0,'',0,0,0,0,'','danger','success',0,(SELECT `id` FROM `queries` WHERE `name` = 'Devices Not Seen for 30 Days'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Software Changes',1,'','status','','SELECT COUNT(change_log.id) AS `count` FROM `change_log` LEFT JOIN `devices` ON change_log.device_id = devices.id WHERE @filter AND  `db_table` = \'software\' AND `timestamp` > DATE(NOW()  - INTERVAL 7 DAY) AND `db_action` = \'create\'','','icon-monitor-cloud','Software additions in the last 7 days.','Software Changes','Last 7 days.','','','','',0,'',0,0,0,0,'','warning','success',0,(SELECT `id` FROM `queries` WHERE `name` = 'Software'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Vulnerabilities',1,'','status','','SELECT COUNT(DISTINCT vulnerabilities_cache.vulnerability_id) AS `count` FROM vulnerabilities_cache LEFT JOIN orgs ON vulnerabilities_cache.org_id = orgs.id LEFT JOIN devices ON devices.org_id = orgs.id WHERE @filter','vulnerabilities','icon-bug','Detected vulnerabilites on your devices.','Vulnerabilities','To be Addressed','','','','',0,'',0,0,0,0,'','danger','success',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Hardware Changes',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM change_log LEFT JOIN devices ON (change_log.device_id = devices.id) WHERE @filter AND change_log.db_table in (\'bios\', \'disk\', \'memory\', \'module\', \'monitor\', \'motherboard\', \'optical\', \'partition\', \'processor\', \'network\', \'scsi\', \'sound\', \'video\') AND `timestamp` > DATE(NOW() - INTERVAL 7 DAY)','','icon-replace-all','Changes detected in bios, disk, memory, module, monitor, motherboard, optical, partition, processor, network, scsi, sound, video tables.','Hardware Changes','Last 7 days.','','','','',0,'',0,0,0,0,'','warning','success',0,(SELECT `id` FROM `queries` WHERE `name` = 'Hardware'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Software',1,'Windows Software, excluding names starting with KB','status','','SELECT COUNT(*) AS `count` FROM software LEFT JOIN devices ON (software.device_id = devices.id AND software.current = \'y\') WHERE @filter AND software.name NOT LIKE \'KB%\' AND devices.os_group = \'Windows\'','devices','icon-monitor-cloud','Windows Software, excluding names starting with KB','Windows Software','Installed','','','','',0,'',0,0,0,0,'','primary','primary',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows Software'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'/24 Networks',1,'','status','','SELECT COUNT(id) AS `count` FROM networks WHERE networks.org_id IN (@filter) AND networks.network LIKE \'%/24\'','networks?networks.network=LIKE%/24','icon-wifi','/24 Networks','/24 Networks','Discovered Networks','','','','',0,'',0,0,0,0,'SELECT IF(networks.edited_date > DATE(NOW() - INTERVAL 7 day), CONCAT(\'+\', COUNT(networks.id), \' this week\'), \'\') AS `secondary_text` FROM networks WHERE networks.org_id IN (@filter) AND networks.network LIKE \'%/24\';','success','success',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Clients',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND devices.os_family IN (\'Windows 10\', \'Windows 11\') AND devices.type = \'computer\'','devices?devices.os_family=in(\'windows 10\',\'windows 11\')','icon-computer','Windows 10 and 11 PCs.','Windows Clients','','','','','',0,'',0,0,0,0,'SELECT CONCAT(IF(COUNT(id) > 0, CONCAT(\'+\', COUNT(id), \' this week.\'), \'\')) AS `secondary_text` FROM devices WHERE @filter AND devices.os_family IN (\'Windows 10\', \'Windows 11\') AND devices.type = \'computer\' AND first_seen > DATE(NOW() - INTERVAL 7 DAY)','primary','primary',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Servers',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND devices.os_group = \'Windows\' AND devices.os_name LIKE \'%server%\' AND devices.type = \'computer\'','devices?devices.os_group=Windows&devices.os_name=LIKEserver','icon-server','Windows Servers','Windows Servers','','','','','',0,'',0,0,0,0,'SELECT CONCAT(IF(COUNT(id) > 0, CONCAT(\'+\', COUNT(id), \' this week.\'), \'\')) AS `secondary_text` FROM devices WHERE @filter AND devices.os_group = \'Windows\' AND devices.os_name LIKE \'%server%\' AND devices.type = \'computer\' AND first_seen > DATE(NOW() - INTERVAL 7 DAY)','primary','primary',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Other Computers',1,'Not Windows and Not Apple computers','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND devices.os_name NOT LIKE \'%Windows%\' AND devices.os_name NOT LIKE \'%MacOS%\'','devices?devices.os_name=NOT LIKEwindows&devices.os_name=NOT LIKEMacOS&devices.os_group=!=Linux','icon-database','Computers not running Windows or MacOS.','Other Computers','','','','','',0,'',0,0,0,0,'SELECT CONCAT(IF(COUNT(id) > 0, CONCAT(\'+\', COUNT(id), \' this week.\'), \'\')) AS `secondary_text` FROM devices WHERE @filter AND devices.os_name NOT LIKE \'%Windows%\' AND devices.os_name NOT LIKE \'%MacOS%\' AND devices.os_group != \'Linux\' AND first_seen > DATE(NOW() - INTERVAL 7 DAY)','primary','primary',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Apple Computers',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND devices.os_name LIKE \'%MacOS%\' AND devices.type = \'computer\'','devices?devices.os_nameLIKEMacOS','icon-apple','Apple computers running MacOS','Apple MacOS','','','','','',0,'',0,0,0,0,'SELECT CONCAT(IF(COUNT(id) > 0, CONCAT(\'+\', COUNT(id), \' this week.\'), \'\')) AS `secondary_text` FROM devices WHERE @filter AND devices.os_name LIKE \'%MacOS%\' AND devices.type = \'computer\' AND first_seen > DATE(NOW() - INTERVAL 7 DAY)','primary','primary',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Unknown Devices',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND devices.type IN (\'unknown\', \'unclassified\')','devices?devices.type=IN(\'unknown\',\'unclassified\')','icon-shield-question-mark','These devices are unknown or not yet classified. They should be investigated.','Unknown Devices','','','','','',0,'',0,0,0,0,'SELECT CONCAT(IF(COUNT(id) > 0, CONCAT(\'+\', COUNT(id), \' this week.\'), \'0 new devices\')) AS `secondary_text` FROM devices WHERE @filter AND devices.type IN (\'unknown\', \'unclassified\') AND first_seen > DATE(NOW() - INTERVAL 7 DAY)','danger','success',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Hardware Manufacturers',1,'','status','','SELECT COUNT(DISTINCT devices.manufacturer) AS `count` FROM devices WHERE @filter','','icon-factory','The number of hardware manufacturers in your database.','H/W Vendors','','','','','',0,'',0,0,0,0,'SELECT CONCAT(IF(COUNT(id) > 0, CONCAT(\'+\', COUNT(DISTINCT devices.manufacturer), \' this week.\'), \'\')) AS `secondary_text` FROM devices WHERE first_seen > DATE(NOW() - INTERVAL 7 DAY) AND devices.manufacturer NOT IN (SELECT devices.manufacturer FROM devices WHERE devices.first_seen < DATE(NOW() - INTERVAL 7 DAY))','primary','primary',0,(SELECT `id` FROM `queries` WHERE `name` = 'Hardware Manufacturers'),'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Linux Computers',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND devices.os_group = \'Linux\' AND devices.type = \'computer\'','devices?devices.os_group=Linux','icon-server','Computers running Linux.','Linux','','','','','',0,'',0,0,0,0,'SELECT CONCAT(IF(COUNT(id) > 0, CONCAT(\'+\', COUNT(id), \' this week.\'), \'\')) AS `secondary_text` FROM devices WHERE @filter AND devices.os_group = \'Linux\' AND devices.type = \'computer\' AND first_seen > DATE(NOW() - INTERVAL 7 DAY)','primary','primary',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Network Devices',1,'','status','','SELECT COUNT(devices.id) AS `count` FROM devices WHERE @filter AND devices.type NOT IN (\'computer\', \'unknown\', \'unclassified\')','devices?devices.type=not in(\'computer\',\'unknown\',\'unclassified\')','icon-radio-receiver','Devices that are not computers.','Network Devices','','','','','',0,'',0,0,0,0,'SELECT CONCAT(IF(COUNT(id) > 0, CONCAT(\'+\', COUNT(id), \' this week.\'), \'\')) AS `secondary_text` FROM devices WHERE @filter AND  devices.type NOT IN (\'computer\', \'unknown\', \'unclassified\') AND first_seen > DATE(NOW() - INTERVAL 7 DAY)','primary','primary',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (null,'Windows Client Not Latest Version',1,'','traffic','','','','icon-grid-2x2','Windows 10 and 11 not running the latest available version from Microsoft.','Not Latest Version','Windows Clients','','','','',0,'',0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows Client Not Latest Build'),0,(SELECT `id` FROM `queries` WHERE `name` = 'Windows Client Latest Build'),'','','',0,0,'system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `primary_text` = 'Anyone can write', `icon` = 'icon-folder' WHERE `name` = 'Open Windows Shares'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "DELETE FROM dashboards WHERE name = 'Windows Security Dashboard'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `dashboards` VALUES (null,'Windows Security Dashboard',1,'org',0,'Windows Security Information','n','{\"layout\":\"6x4\",\"widget_count\":16,\"widgets\":[{\"size\":1,\"position\":1,\"widget_name\":\"Windows Clients Without AntiVirus\"},{\"size\":1,\"position\":2,\"widget_name\":\"Windows Clients Without Firewall\"},{\"size\":1,\"position\":3,\"widget_name\":\"Windows 10 Not Latest Build\"},{\"size\":1,\"position\":4,\"widget_name\":\"Windows 11 Not Latest Build\"},{\"size\":1,\"position\":5,\"widget_name\":\"Windows Clients Without OS Updates for more than 30 Days\"},{\"size\":1,\"position\":6,\"widget_name\":\"Windows Clients Not Seen for more than 30 Days\"},{\"size\":1,\"position\":7,\"widget_name\":\"Windows Server Without AntiVirus\"},{\"size\":1,\"position\":8,\"widget_name\":\"Windows Server Without Firewall\"},{\"size\":1,\"position\":9,\"widget_name\":\"Windows Server Not Latest Build\"},{\"size\":1,\"position\":10,\"widget_name\":\"Windows Servers Without OS Updates for more than 30 Days\"},{\"size\":1,\"position\":11,\"widget_name\":\"Windows Servers Not Seen for more than 30 Days\"},{\"size\":1,\"position\":12,\"widget_name\":\"Open Windows Shares\"}]}','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "SELECT * FROM dashboards WHERE name = 'Default Dashboard' and `edited_by` = 'system'";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
if (!empty($result[0])) {
    // Default never edited dashboard - replace
    $sql = "UPDATE `dashboards` SET `sidebar` = 'n', `options` = '{\"widgets\":{\"1\":{\"widget_id\":\"75\",\"position\":\"1\",\"size\":\"1\"},\"11\":{\"widget_id\":\"62\",\"position\":\"11\",\"size\":\"1\"},\"10\":{\"widget_id\":\"52\",\"position\":\"10\",\"size\":\"1\"},\"8\":{\"size\":\"1\",\"widget_id\":\"80\",\"position\":\"8\"},\"14\":{\"widget_id\":\"81\",\"position\":\"14\",\"size\":\"1\"},\"16\":{\"size\":\"1\",\"widget_id\":\"84\",\"position\":\"16\"},\"6\":{\"size\":\"1\",\"position\":\"6\",\"widget_id\":\"74\"},\"5\":{\"position\":\"5\",\"widget_id\":\"76\",\"size\":\"1\"},\"9\":{\"widget_id\":\"77\",\"position\":\"9\",\"size\":\"1\"},\"15\":{\"widget_id\":\"83\",\"position\":\"15\",\"size\":\"1\"},\"4\":{\"position\":\"4\",\"widget_id\":\"73\",\"size\":\"1\"},\"12\":{\"position\":\"12\",\"widget_id\":\"70\",\"size\":\"1\"},\"2\":{\"position\":\"2\",\"widget_id\":\"71\",\"size\":\"1\"},\"7\":{\"position\":\"7\",\"widget_id\":\"79\",\"size\":\"1\"},\"3\":{\"widget_id\":\"72\",\"position\":\"3\",\"size\":\"1\"},\"13\":{\"widget_id\":\"82\",\"position\":\"13\",\"size\":\"1\"},\"85\":{\"id\":\"85\",\"position\":\"17\",\"size\":1,\"widget_id\":\"85\"},\"18\":{\"id\":\"86\",\"position\":\"18\",\"size\":1,\"widget_id\":\"86\"},\"19\":{\"id\":\"12\",\"position\":\"19\",\"size\":1,\"widget_id\":\"6\"},\"20\":{\"id\":\"5\",\"position\":\"20\",\"size\":1,\"widget_id\":\"22\"},\"21\":{\"id\":\"4\",\"position\":\"21\",\"size\":1,\"widget_id\":\"5\"},\"22\":{\"id\":\"15\",\"position\":\"22\",\"size\":1,\"widget_id\":\"4\"},\"23\":{\"id\":\"22\",\"position\":\"23\",\"size\":1,\"widget_id\":\"21\"},\"24\":{\"id\":\"40\",\"position\":\"24\",\"size\":1,\"widget_id\":\"27\"}},\"widget_count\":\"\",\"layout\":\"6x4\"}' WHERE `id` = 1";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
} else {
    // Default edited dashboard - add a new dashboard
    $sql = "UPDATE `dashboards` SET `name` = 'Old Default Dashboard', `id` = 8888 WHERE `name` = 'Default Dashboard'";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
    $sql = "INSERT INTO `dashboards` VALUES (null,'Default Dashboard',1,'org',0,'','n','{\"widgets\":{\"1\":{\"widget_id\":\"75\",\"position\":\"1\",\"size\":\"1\"},\"11\":{\"widget_id\":\"62\",\"position\":\"11\",\"size\":\"1\"},\"10\":{\"widget_id\":\"52\",\"position\":\"10\",\"size\":\"1\"},\"8\":{\"size\":\"1\",\"widget_id\":\"80\",\"position\":\"8\"},\"14\":{\"widget_id\":\"81\",\"position\":\"14\",\"size\":\"1\"},\"16\":{\"size\":\"1\",\"widget_id\":\"84\",\"position\":\"16\"},\"6\":{\"size\":\"1\",\"position\":\"6\",\"widget_id\":\"74\"},\"5\":{\"position\":\"5\",\"widget_id\":\"76\",\"size\":\"1\"},\"9\":{\"widget_id\":\"77\",\"position\":\"9\",\"size\":\"1\"},\"15\":{\"widget_id\":\"83\",\"position\":\"15\",\"size\":\"1\"},\"4\":{\"position\":\"4\",\"widget_id\":\"73\",\"size\":\"1\"},\"12\":{\"position\":\"12\",\"widget_id\":\"70\",\"size\":\"1\"},\"2\":{\"position\":\"2\",\"widget_id\":\"71\",\"size\":\"1\"},\"7\":{\"position\":\"7\",\"widget_id\":\"79\",\"size\":\"1\"},\"3\":{\"widget_id\":\"72\",\"position\":\"3\",\"size\":\"1\"},\"13\":{\"widget_id\":\"82\",\"position\":\"13\",\"size\":\"1\"},\"85\":{\"id\":\"85\",\"position\":\"17\",\"size\":1,\"widget_id\":\"85\"},\"18\":{\"id\":\"86\",\"position\":\"18\",\"size\":1,\"widget_id\":\"86\"},\"19\":{\"id\":\"12\",\"position\":\"19\",\"size\":1,\"widget_id\":\"6\"},\"20\":{\"id\":\"5\",\"position\":\"20\",\"size\":1,\"widget_id\":\"22\"},\"21\":{\"id\":\"4\",\"position\":\"21\",\"size\":1,\"widget_id\":\"5\"},\"22\":{\"id\":\"15\",\"position\":\"22\",\"size\":1,\"widget_id\":\"4\"},\"23\":{\"id\":\"22\",\"position\":\"23\",\"size\":1,\"widget_id\":\"21\"},\"24\":{\"id\":\"40\",\"position\":\"24\",\"size\":1,\"widget_id\":\"27\"}},\"widget_count\":\"\",\"layout\":\"6x4\"}','system','2000-01-01 00:00:00')";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$tables_to_utf8mb4 = array('access_point', 'agents', 'antivirus', 'application', 'applications', 'arp', 'attachment', 'attributes', 'audit_log', 'auth', 'baselines', 'baselines_policies', 'baselines_results', 'benchmarks', 'benchmarks_exceptions', 'benchmarks_log', 'benchmarks_policies', 'benchmarks_result', 'bios', 'certificate', 'change_log', 'cli_config', 'cloud_log', 'clouds', 'cluster', 'clusters', 'collectors', 'configuration', 'connections', 'credential', 'credentials', 'dashboards', 'devices', 'discoveries', 'discovery_log', 'discovery_scan_options', 'disk', 'dns', 'edit_log', 'enterprise', 'executable', 'executables', 'field', 'fields', 'file', 'files', 'firewall', 'firewall_rule', 'groups', 'image', 'integrations', 'integrations_log', 'invoice', 'invoice_item', 'ip', 'licenses', 'locations', 'log', 'maps', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'networks', 'nmap', 'optical', 'orgs', 'packages', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'queries', 'queue', 'rack_devices', 'racks', 'radio', 'roles', 'route', 'rules', 'san', 'scripts', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'summaries', 'task', 'tasks', 'usb', 'user', 'user_group', 'users', 'variable', 'video', 'vm', 'warranty', 'widgets', 'windows');
foreach ($tables_to_utf8mb4 as $table) {
    $sql = "ALTER TABLE `$table` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}


// set our versions
$sql = "UPDATE `configuration` SET `value` = '20250615' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '6.0.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 6.0.0 completed.\n\n";
config('Openaudit')->internal_version = 20250615;
config('Openaudit')->display_version = '6.0.0';
