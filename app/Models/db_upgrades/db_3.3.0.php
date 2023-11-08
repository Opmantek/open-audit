<?php
$output .= "Upgrade database to 3.3.0 commenced.\n\n";

$sql = "DROP TABLE IF EXISTS `baselines_policies`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `baselines`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `baselines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `notes` text NOT NULL,
  `documentation` text NOT NULL,
  `priority` int(10) unsigned NOT NULL DEFAULT '5',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  CONSTRAINT `baselines_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `baselines_policies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `baseline_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(200) NOT NULL DEFAULT '',
  `priority` int(10) unsigned NOT NULL DEFAULT '5',
  `notes` text NOT NULL,
  `documentation` text NOT NULL,
  `table` varchar(45) NOT NULL DEFAULT '',
  `tests` mediumtext NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `baseline_id` (`baseline_id`),
  CONSTRAINT `baselines_policies_baseline_id` FOREIGN KEY (`baseline_id`) REFERENCES `baselines` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('name', 'bios')) {
    $sql = "ALTER TABLE `bios` DROP `name`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `bios` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `current`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `bios` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `bios` CHANGE `manufacturer` `manufacturer` varchar(100) NOT NULL NOT NULL DEFAULT '' AFTER `name`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('description', 'bios')) {
    $sql = "ALTER TABLE `bios` CHANGE `description` `model` varchar(200) NOT NULL NOT NULL DEFAULT '' AFTER `manufacturer`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `bios` SET `name` = `model`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `clusters` CHANGE `type` `type` enum('high availability','load balancing','performance','storage','other','') NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `clusters` CHANGE `purpose` `purpose` enum('application','compute','database','storage','virtualisation','web','other','') NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `clusters` CHANGE `status` `status` enum('active','inactive','other','') NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('configuration', 'clusters')) {
    $sql = "ALTER TABLE `clusters` ADD `configuration` enum('active/active','active/passive','N+1','N+M','N-to-1','N-to-N','other','') NOT NULL DEFAULT '' AFTER `status`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('environment', 'clusters')) {
    $sql = "ALTER TABLE `clusters` ADD `environment` varchar(100) NOT NULL DEFAULT 'production' AFTER `configuration`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('scaling', 'clusters')) {
    $sql = "ALTER TABLE `clusters` ADD `scaling` enum('auto','fixed','other','') NOT NULL DEFAULT 'fixed' AFTER `environment`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('retrieved_name', 'clusters')) {
    $sql = "ALTER TABLE `clusters` ADD `retrieved_name` varchar(200) NOT NULL DEFAULT '' AFTER `scaling`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('retrieved_ident', 'clusters')) {
    $sql = "ALTER TABLE `clusters` ADD `retrieved_ident` varchar(200) NOT NULL DEFAULT '' AFTER `retrieved_name`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DROP TABLE IF EXISTS `cluster`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `cluster` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `clusters_id` int(10) unsigned NOT NULL DEFAULT '0',
  `role` enum('head','node','storage','network','other','') NOT NULL DEFAULT '',
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `cluster_clusters_id` (`clusters_id`),
  CONSTRAINT `cluster_clusters_id` FOREIGN KEY (`clusters_id`) REFERENCES `clusters` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cluster_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE `name` = 'device_auto_delete'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'device_auto_delete', 'n', 'bool', 'y', 'system', '2000-01-01 00:00:00','Should we delete the device data completely from the database when the device status is set to Deleted.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE `name` = 'devices_default_display_columns'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'devices_default_display_columns','system.id,system.icon,system.type,system.name,system.ip,system.dns_fqdn,system.identification,system.description,system.manufacturer,system.os_family,system.status', 'text', 'y', 'system', '2000-01-01 00:00:00','When requesting a list of devices, display these columns.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE `name` = 'devices_default_group_columns'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'devices_default_group_columns','system.id,system.icon,system.type,system.name,system.ip,system.dns_fqdn,system.identification,system.description,system.manufacturer,system.os_family,system.status', 'text', 'y', 'system', '2000-01-01 00:00:00','When requesting a group of devices, retrieve and display these columns.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE `name` = 'devices_default_retrieve_columns'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'devices_default_retrieve_columns','system.id,system.uuid,system.name,system.ip,system.hostname,system.dns_hostname,system.domain,system.dns_domain,system.dbus_identifier,system.fqdn,system.dns_fqdn,system.description,system.type,system.icon,system.os_group,system.os_family,system.os_name,system.os_version,system.manufacturer,system.model,system.serial,system.form_factor,system.status,system.environment,system.class,system.function,system.org_id,system.location_id,system.snmp_oid,system.sysDescr,system.sysObjectID,system.sysUpTime,system.sysContact,system.sysName,system.sysLocation,system.first_seen,system.last_seen,system.last_seen_by,system.identification', 'text', 'y', 'system', '2000-01-01 00:00:00','When requesting a list of devices, provide these columns.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_override_nmap'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_override_nmap','n','bool','y','system','2000-01-01 00:00:00','Override the detction of Nmap to enable discoveries.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_route_retrieve_limit'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_route_retrieve_limit','500','number','y','system','2000-01-01 00:00:00','When discovering a device using SNMP, do not retrieve the route table if it contains more than this number of entries.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_scan_limit'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_sudo_path'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_sudo_path','','text','y','system','2000-01-01 00:00:00','Optional hardcoded path to sudo executable. Comma seperated for multiple paths.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'match_ip_no_data'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'match_ip_no_data','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its ip if we have an existing device with no data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = 'y' WHERE `name` = 'match_mac' and `edited_by` = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'queue_limit'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'queue_limit','20','number','y','system','2000-01-01 00:00:00','The maximum number of concurrent device scans we should run.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'queue_count'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'queue_count','0','number','n','system','2000-01-01 00:00:00','The current number of concurrent device scans running.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('limit', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` DROP `limit`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('pid', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` DROP `pid`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('device_count', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` DROP `device_count`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('complete', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` DROP `complete`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('discovered', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` DROP `discovered`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('last_log', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` DROP `last_log`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('ip_all_count', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` DROP `ip_all_count`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('ip_responding_count', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` DROP `ip_responding_count`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('ip_scanned_count', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` DROP `ip_scanned_count`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('ip_discovered_count', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` DROP `ip_discovered_count`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('ip_audited_count', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` DROP `ip_audited_count`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('last_finished', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` DROP `last_finished`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `discoveries` ADD `last_finished` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `last_run`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `discoveries` ADD `ip_all_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `status`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `discoveries` ADD `ip_responding_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `ip_all_count`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `discoveries` ADD `ip_scanned_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `ip_responding_count`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `discoveries` ADD `ip_discovered_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `ip_scanned_count`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `discoveries` ADD `ip_audited_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `ip_discovered_count`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `discoveries` CHANGE `duration` `duration` time NOT NULL DEFAULT '00:00:00' AFTER `last_finished`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `discoveries` CHANGE `edited_by` `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `ip_audited_count`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `discoveries` CHANGE `edited_date` `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('open|filtered', 'discovery_scan_options')) {
    $sql = "ALTER TABLE `discovery_scan_options` ADD `open|filtered` enum('','y','n') NOT NULL DEFAULT 'n' AFTER `service_version`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `discovery_scan_options` SET `description` = 'Approximately 1 second per target. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.' WHERE `name` = 'UltraFast'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `discovery_scan_options` SET `description` = 'Approximately 5 seconds per target. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is  considered closed. Device must respond to an Nmap ping. Use aggressive timing.' WHERE `name` = 'SuperFast'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `discovery_scan_options` SET `description` = 'Approximately 40 seconds per target. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.' WHERE `name` = 'Fast'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `discovery_scan_options` SET `open|filtered` = 'y' WHERE `name` = 'Medium (Classic)'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `discovery_scan_options` SET `open|filtered` = 'y' WHERE `name` = 'Slow'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `discovery_scan_options` SET `open|filtered` = 'y' WHERE `name` = 'UltraSlow'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('name', 'disk')) {
    $sql = "ALTER TABLE `disk` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `disk` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `disk` SET `manufacturer` = '' WHERE `manufacturer` = '(Standard disk drives)'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `disk` SET `manufacturer` = 'VMware' WHERE `model` LIKE '%vmware%' AND `manufacturer` = ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `disk` SET `manufacturer` = 'Intel' WHERE `model` LIKE '%intel%' AND `manufacturer` = ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `disk` SET `manufacturer` = 'VirtualBox' WHERE `model` = 'VBOX HARDDISK' AND `manufacturer` = ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `disk` SET `manufacturer` = 'Western Digital' WHERE `model` LIKE '%wdc%' AND `manufacturer` = ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `disk` SET `manufacturer` = 'Western Digital' WHERE `model_family` LIKE '%Western Digital%' AND `manufacturer` = ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `disk` SET `manufacturer` = 'Seagate' WHERE `model_family` LIKE '%Seagate%' AND `manufacturer` = ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `disk` SET `manufacturer` = 'Hewlett Packard' WHERE `model_family` LIKE 'HP %' AND `manufacturer` = ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `disk` SET `manufacturer` = 'Apple Inc.' WHERE `manufacturer` LIKE 'Apple%'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `disk` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`))";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `groups` SET `sql` = \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_family LIKE '%debian%'\" WHERE `name` = 'Debian Computers'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `groups` SET `sql` = \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type LIKE '%printer%'\" WHERE `name` = 'Printers'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `groups` SET `sql` = \"SELECT distinct(system.id) FROM system LEFT JOIN ip ON (ip.system_id = system.id AND ip.current = \'y\') WHERE @filter AND ((( ip.ip > \'000.000.000.000\' AND ip.ip < \'010.000.000.000\' ) OR ( ip.ip > \'010.255.255.255\' AND ip.ip < \'169.254.0.0\' ) OR ( ip.ip > \'169.254.255.255\' AND ip.ip < \'172.016.000.000\' ) OR ( ip.ip > \'172.31.255.255\' AND ip.ip < \'192.168.000.000\' ) OR ip.ip > \'192.168.255.255\' ) OR ( ( system.ip > \'000.000.000.000\' AND system.ip < \'010.000.000.000\' ) OR ( system.ip > \'010.255.255.255\' AND system.ip < \'169.254.0.0\' ) OR ( system.ip > \'169.254.255.255\' AND system.ip < \'172.016.000.000\' ) OR ( system.ip > \'172.31.255.255\' AND system.ip < \'192.168.000.000\' ) OR system.ip > \'192.168.255.255\' )) AND system.status = \'production\' AND ip.version = 4\" WHERE `name` = 'Public IP Devices'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('name', 'ip')) {
    $sql = "ALTER TABLE `ip` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `ip` SET `name` = REPLACE(REPLACE(`ip`, '.0', '.'), '.0', '.') WHERE `version` = 4";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `ip` SET `name` = `ip` WHERE `version` != 4";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('use_auth', 'ldap_servers')) {
    $sql = "ALTER TABLE `ldap_servers` ADD `use_auth` enum('y','n') NOT NULL DEFAULT 'y' AFTER `user_membership_attribute`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('use_discovery', 'ldap_servers')) {
    $sql = "ALTER TABLE `ldap_servers` ADD `use_discovery` enum('y','n') NOT NULL DEFAULT 'y' AFTER `use_auth`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('use_people', 'ldap_servers')) {
    $sql = "ALTER TABLE `ldap_servers` ADD `use_people` enum('y','n') NOT NULL DEFAULT 'y' AFTER `use_discovery`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('name', 'memory')) {
    $sql = "ALTER TABLE `memory` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `memory` SET `name` = `tag`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('manufacturer', 'memory')) {
    $sql = "ALTER TABLE `memory` ADD `manufacturer` varchar(100) NOT NULL DEFAULT '' AFTER `name`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('name', 'module')) {
    $sql = "ALTER TABLE `module` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `module` SET `name` = `description`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('name', 'monitor')) {
    $sql = "ALTER TABLE `monitor` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `monitor` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `monitor` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`))";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('name', 'motherboard')) {
    $sql = "ALTER TABLE `motherboard` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `motherboard` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `motherboard` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`))";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('name', 'netstat')) {
    $sql = "ALTER TABLE `netstat` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `netstat` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`program`, ' on ', `ip`, ' ', `protocol`, ' port ', `port`))";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('name', 'network')) {
    $sql = "ALTER TABLE `network` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `network` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `network` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`))";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `network` CHANGE `dhcp_lease_obtained` `dhcp_lease_obtained` varchar(20) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `network` CHANGE `dhcp_lease_expires` `dhcp_lease_expires` varchar(20) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('gateways', 'networks')) {
    $sql = "ALTER TABLE `networks` ADD `gateways` TEXT NOT NULL AFTER `cloud_id`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('name', 'nmap')) {
    $sql = "ALTER TABLE `nmap` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `nmap` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`program`, ' on ', `ip`, ' ', `protocol`, ' port ', `port`))";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('name', 'optical')) {
    $sql = "ALTER TABLE `optical` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `optical` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `optical` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`model`))";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('name', 'partition')) {
    $sql = "ALTER TABLE `partition` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `partition` SET `description` = `name`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `policy` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `current`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `policy` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `print_queue` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `print_queue` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT '' AFTER `manufacturer`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('name', 'processor')) {
    $sql = "ALTER TABLE `processor` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('hyperthreading', 'processor')) {
    $sql = "ALTER TABLE `processor` ADD `hyperthreading` enum('y','n','') NOT NULL DEFAULT '' AFTER `socket`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `processor` SET `hyperthreading` = 'y' WHERE `logical_count` = (2 * `core_count`)";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `processor` SET `hyperthreading` = 'n' WHERE `logical_count` = `core_count`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `processor` SET `name` = `description`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `queries` SET `sql` = 'SELECT system.id AS `system.id`, system.name AS `system.name`, system.hostname AS `system.hostname`, system.dns_hostname AS `system.dns_hostname`, system.fqdn AS `system.fqdn`, system.dns_fqdn AS `system.dns_fqdn`, system.ip AS `system.ip`, system.type AS `system.type`, system.credentials AS `system.credentials`, system.nmis_group AS `system.nmis_group`, system.nmis_name AS `system.nmis_name`, system.nmis_role AS `system.nmis_role`, system.nmis_manage AS `system.nmis_manage`, system.nmis_business_service AS `system.nmis_business_service`, system.nmis_customer AS `system.nmis_customer`, system.nmis_poller AS `system.nmis_poller`, system.snmp_version AS `system.snmp_version`, system.omk_uuid AS `system.omk_uuid`, locations.name AS `locations.name`, IF(system.snmp_version != \'\', \'true\', \'false\') AS `system.collect_snmp`, IF(system.os_group LIKE \'%windows%\', \'true\', \'false\') AS `system.collect_wmi` FROM `system` LEFT JOIN `locations` ON system.location_id = locations.id WHERE @filter AND system.nmis_manage = \'y\'' WHERE `name` = 'Integration Default for NMIS'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('name', 'route')) {
    $sql = "ALTER TABLE `route` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `route` SET `name` = CONCAT(`destination`, '/', `mask`, ' via ', `next_hop`)";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `rules` WHERE `name` = 'Form Factor based on Manufacturer (like innotek GmbH)'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `rules` WHERE `name` = 'Manufacturer change HP to Hewlett Packard'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Form Factor based on Manufacturer (like innotek GmbH)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"innotek GmbH\",\"operator\":\"li\"}]','[{\"value\":\"Virtual\",\"table\":\"system\",\"attribute\":\"form_factor\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Manufacturer change HP to Hewlett Packard',1,'Set manufacturer to Hewlett Packard if we receive HP.',100,'[{\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"table\":\"system\",\"value\":\"HP\"}]','[{\"attribute\":\"manufacturer\",\"table\":\"system\",\"value\":\"Hewlett Packard\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('name', 'scsi')) {
    $sql = "ALTER TABLE `scsi` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `scsi` SET `name` = `model`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `server` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `server_item` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `share` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('name', 'sound')) {
    $sql = "ALTER TABLE `sound` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `sound` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `sound` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`))";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `summaries` SET `extra_columns` = 'server.name,server.full_name,server.version,server.edition,server.status' WHERE `name` = 'Server Types' and `edited_by` = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('nmis_customer', 'system')) {
    $sql = "ALTER TABLE `system` ADD `nmis_customer` varchar(200) NOT NULL DEFAULT '' AFTER `nmis_poller`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('password_disabled', 'user')) {
    $sql = "ALTER TABLE `user` DROP `password_disabled`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `user` ADD `password_disabled` varchar(20) NOT NULL DEFAULT '' AFTER `password_required`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('keys', 'user')) {
    $sql = "ALTER TABLE `user` DROP `keys`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `user` ADD `keys` text NOT NULL AFTER `status`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('home', 'user')) {
    $sql = "ALTER TABLE `user` DROP `home`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `user` ADD `home` text NOT NULL AFTER `keys`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('shell', 'user')) {
    $sql = "ALTER TABLE `user` DROP `shell`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `user` ADD `shell` text NOT NULL AFTER `home`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `users` WHERE `name` = 'nmis' AND `edited_by` = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('devices_default_display_columns', 'users')) {
    $sql = "ALTER TABLE `users` DROP `devices_default_display_columns`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `users` ADD `devices_default_display_columns` text NOT NULL AFTER `dashboard_id`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `variable` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('name', 'video')) {
    $sql = "ALTER TABLE `video` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `video` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `video` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`))";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `vm` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `link` = 'devices?change_log.db_table=in(\'bios\',\'disk\',\'memory\',\'module\',\'monitor\',\'motherboard\',\'network\',\'optical\',\'partition\',\'processor\',\'san\',\'scsi\',\'sound\',\'video\')&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Hardware Additions by Day'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `link` = 'devices?change_log.db_table=in(\'dns\',\'file\',\'ip\',\'log\',\'pagefile\',\'print_queue\',\'route\',\'share\',\'task\',\'user\',\'user_group\',\'variable\',\'vm\',\'windows\')&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Settings Additions by Day'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `link` = 'devices?change_log.db_table=in(\'server\',\'server_item\',\'service\',\'software\',\'software_key\')&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Software Additions by Day'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `link` = 'devices?system.location_id=@description&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.location_id' WHERE `name` = 'Devices by Location'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `link`= 'devices?audit_log.timestamp=like@date&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.identification,system.os_family,system.status&groupby=audit_log.system_id&system.cloud_id=!=' WHERE `name` = 'Cloud Devices Audited per Day'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "ALTER TABLE `windows` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `windows` SET `name` = `domain_role`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20191010' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '3.3.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 3.3.0 completed.\n\n";
config('Openaudit')->internal_version = 20191010;
config('Openaudit')->display_version = '3.3.0';
