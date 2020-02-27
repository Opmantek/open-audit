<?php
/**
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************
*
**/

/* NOTE - No Role update for clusters in raw SQL below */

/*
DROP TABLE IF EXISTS `baselines_policies`;

DROP TABLE IF EXISTS `baselines`;

CREATE TABLE `baselines` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `baselines_policies` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `bios` DROP `name`;

ALTER TABLE `bios` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `current`;

ALTER TABLE `bios` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `bios` CHANGE `manufacturer` `manufacturer` varchar(100) NOT NULL NOT NULL DEFAULT '' AFTER `name`;

ALTER TABLE `bios` CHANGE `description` `model` varchar(200) NOT NULL NOT NULL DEFAULT '' AFTER `manufacturer`;

UPDATE `bios` SET `name` = `model`;

ALTER TABLE `clusters` CHANGE `type` `type` enum('high availability','load balancing','performance','storage','other','') NOT NULL DEFAULT '';

ALTER TABLE `clusters` CHANGE `purpose` `purpose` enum('application','compute','database','storage','virtualisation','web','other','') NOT NULL DEFAULT '';

ALTER TABLE `clusters` CHANGE `status` `status` enum('active','inactive','other','') NOT NULL DEFAULT '';

ALTER TABLE `clusters` ADD `configuration` enum('active/active','active/passive','N+1','N+M','N-to-1','N-to-N','other','') NOT NULL DEFAULT '' AFTER `status`;

ALTER TABLE `clusters` ADD `environment` varchar(100) NOT NULL DEFAULT 'production' AFTER `configuration`;

ALTER TABLE `clusters` ADD `scaling` enum('auto','fixed','other','') NOT NULL DEFAULT 'fixed' AFTER `environment`;

ALTER TABLE `clusters` ADD `retrieved_name` varchar(200) NOT NULL DEFAULT '' AFTER `scaling`;

ALTER TABLE `clusters` ADD `retrieved_ident` varchar(200) NOT NULL DEFAULT '' AFTER `retrieved_name`;

DROP TABLE IF EXISTS `cluster`;

CREATE TABLE `cluster` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DELETE FROM configuration WHERE `name` = 'device_auto_delete';

INSERT INTO `configuration` VALUES (NULL,'device_auto_delete', 'n', 'bool', 'y', 'system', '2000-01-01 00:00:00','Should we delete the device data completely from the database when the device status is set to Deleted.');

DELETE FROM configuration WHERE `name` = 'devices_default_display_columns';

INSERT INTO `configuration` VALUES (NULL,'devices_default_display_columns','system.id,system.icon,system.type,system.name,system.ip,system.dns_fqdn,system.identification,system.description,system.manufacturer,system.os_family,system.status', 'text', 'y', 'system', '2000-01-01 00:00:00','When requesting a list of devices, display these columns.');

DELETE FROM configuration WHERE `name` = 'devices_default_group_columns';

INSERT INTO `configuration` VALUES (NULL,'devices_default_group_columns','system.id,system.icon,system.type,system.name,system.ip,system.dns_fqdn,system.identification,system.description,system.manufacturer,system.os_family,system.status', 'text', 'y', 'system', '2000-01-01 00:00:00','When requesting a group of devices, retrieve and display these columns.');

DELETE FROM configuration WHERE `name` = 'devices_default_retrieve_columns';

INSERT INTO `configuration` VALUES (NULL,'devices_default_retrieve_columns','system.id,system.uuid,system.name,system.ip,system.hostname,system.dns_hostname,system.domain,system.dns_domain,system.dbus_identifier,system.fqdn,system.dns_fqdn,system.description,system.type,system.icon,system.os_group,system.os_family,system.os_name,system.os_version,system.manufacturer,system.model,system.serial,system.form_factor,system.status,system.environment,system.class,system.function,system.org_id,system.location_id,system.snmp_oid,system.sysDescr,system.sysObjectID,system.sysUpTime,system.sysContact,system.sysName,system.sysLocation,system.first_seen,system.last_seen,system.last_seen_by,system.identification', 'text', 'y', 'system', '2000-01-01 00:00:00','When requesting a list of devices, provide these columns.');

DELETE FROM `configuration` WHERE `name` = 'discovery_override_nmap';

INSERT INTO `configuration` VALUES (NULL,'discovery_override_nmap','n','bool','y','system','2000-01-01 00:00:00','Override the detction of Nmap to enable discoveries.');

DELETE FROM `configuration` WHERE `name` = 'discovery_route_retrieve_limit';

INSERT INTO `configuration` VALUES (NULL,'discovery_route_retrieve_limit','500','number','y','system','2000-01-01 00:00:00','When discovering a device using SNMP, do not retrieve the route table if it contains more than this number of entries.');

DELETE FROM `configuration` WHERE `name` = 'discovery_scan_limit';

DELETE FROM `configuration` WHERE `name` = 'discovery_sudo_path';

INSERT INTO `configuration` VALUES (NULL,'discovery_sudo_path','','text','y','system','2000-01-01 00:00:00','Optional hardcoded path to sudo executable. Comma seperated for multiple paths.');

DELETE FROM `configuration` WHERE `name` = 'match_ip_no_data';

INSERT INTO `configuration` VALUES (NULL,'match_ip_no_data','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its ip if we have an existing device with no data.');

UPDATE `configuration` SET `value` = 'y' WHERE `name` = 'match_mac' and `edited_by` = 'system';

DELETE FROM `configuration` WHERE `name` = 'queue_limit';

INSERT INTO `configuration` VALUES (NULL,'queue_limit','20','number','y','system','2000-01-01 00:00:00','The maximum number of concurrent device scans we should run.');

DELETE FROM `configuration` WHERE `name` = 'queue_count';

INSERT INTO `configuration` VALUES (NULL,'queue_count','0','number','n','system','2000-01-01 00:00:00','The current number of concurrent device scans running.');

ALTER TABLE `discoveries` DROP `limit`;

ALTER TABLE `discoveries` DROP `pid`;

ALTER TABLE `discoveries` DROP `device_count`;

ALTER TABLE `discoveries` DROP `complete`;

ALTER TABLE `discoveries` DROP `discovered`;

ALTER TABLE `discoveries` DROP `last_log`;

ALTER TABLE `discoveries` DROP `ip_all_count`;

ALTER TABLE `discoveries` DROP `ip_responding_count`;

ALTER TABLE `discoveries` DROP `ip_scanned_count`;

ALTER TABLE `discoveries` DROP `ip_discovered_count`;

ALTER TABLE `discoveries` DROP `ip_audited_count`;

ALTER TABLE `discoveries` DROP `last_finished`;

ALTER TABLE `discoveries` ADD `last_finished` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `last_run`;

ALTER TABLE `discoveries` ADD `ip_all_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `status`;

ALTER TABLE `discoveries` ADD `ip_responding_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `ip_all_count`;

ALTER TABLE `discoveries` ADD `ip_scanned_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `ip_responding_count`;

ALTER TABLE `discoveries` ADD `ip_discovered_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `ip_scanned_count`;

ALTER TABLE `discoveries` ADD `ip_audited_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `ip_discovered_count`;

ALTER TABLE `discoveries` CHANGE `duration` `duration` time NOT NULL DEFAULT '00:00:00' AFTER `last_finished`;

ALTER TABLE `discoveries` CHANGE `edited_by` `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `ip_audited_count`;

ALTER TABLE `discoveries` CHANGE `edited_date` `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`;

ALTER TABLE `discovery_scan_options` ADD `open|filtered` enum('','y','n') NOT NULL DEFAULT 'n' AFTER `service_version`;

UPDATE `discovery_scan_options` SET `description` = 'Approximately 1 second per target. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.' WHERE `name` = 'UltraFast';

UPDATE `discovery_scan_options` SET `description` = 'Approximately 5 seconds per target. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is  considered closed. Device must respond to an Nmap ping. Use aggressive timing.' WHERE `name` = 'SuperFast';

UPDATE `discovery_scan_options` SET `description` = 'Approximately 40 seconds per target. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.' WHERE `name` = 'Fast';

UPDATE `discovery_scan_options` SET `open|filtered` = 'y' WHERE `name` = 'Medium (Classic)';

UPDATE `discovery_scan_options` SET `open|filtered` = 'y' WHERE `name` = 'Slow';

UPDATE `discovery_scan_options` SET `open|filtered` = 'y' WHERE `name` = 'UltraSlow';

ALTER TABLE `disk` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `disk` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT '';

UPDATE `disk` SET `manufacturer` = '' WHERE `manufacturer` = '(Standard disk drives)';

UPDATE `disk` SET `manufacturer` = 'VMware' WHERE `model` LIKE '%vmware%' AND `manufacturer` = '';

UPDATE `disk` SET `manufacturer` = 'Intel' WHERE `model` LIKE '%intel%' AND `manufacturer` = '';

UPDATE `disk` SET `manufacturer` = 'VirtualBox' WHERE `model` = 'VBOX HARDDISK' AND `manufacturer` = '';

UPDATE `disk` SET `manufacturer` = 'Western Digital' WHERE `model` LIKE '%wdc%' AND `manufacturer` = '';

UPDATE `disk` SET `manufacturer` = 'Western Digital' WHERE `model_family` LIKE '%Western Digital%' AND `manufacturer` = '';

UPDATE `disk` SET `manufacturer` = 'Seagate' WHERE `model_family` LIKE '%Seagate%' AND `manufacturer` = '';

UPDATE `disk` SET `manufacturer` = 'Hewlett Packard' WHERE `model_family` LIKE 'HP %' AND `manufacturer` = '';

UPDATE `disk` SET `manufacturer` = 'Apple Inc.' WHERE `manufacturer` LIKE 'Apple%';

UPDATE `disk` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`));

ALTER TABLE `ip` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

UPDATE `ip` SET `name` = REPLACE(REPLACE(`ip`, '.0', '.'), '.0', '.') WHERE `version` = 4;

UPDATE `ip` SET `name` = `ip` WHERE `version` != 4;

ALTER TABLE `ldap_servers` ADD `use_auth` enum('y','n') NOT NULL DEFAULT 'y' AFTER `user_membership_attribute`;

ALTER TABLE `ldap_servers` ADD `use_discovery` enum('y','n') NOT NULL DEFAULT 'y' AFTER `use_auth`;

ALTER TABLE `ldap_servers` ADD `use_people` enum('y','n') NOT NULL DEFAULT 'y' AFTER `use_discovery`;

ALTER TABLE `memory` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

UPDATE `memory` SET `name` = `tag`;

ALTER TABLE `memory` ADD `manufacturer` varchar(100) NOT NULL DEFAULT '' AFTER `name`;

ALTER TABLE `module` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

UPDATE `module` SET `name` = `description`;

ALTER TABLE `monitor` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `monitor` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT '';

UPDATE `monitor` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`));

ALTER TABLE `motherboard` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `motherboard` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT '';

UPDATE `motherboard` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`));

ALTER TABLE `netstat` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

UPDATE `netstat` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`program`, ' on ', `ip`, ' ', `protocol`, ' port ', `port`));

ALTER TABLE `network` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `network` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT '';

UPDATE `network` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`));

ALTER TABLE `network` CHANGE `dhcp_lease_obtained` `dhcp_lease_obtained` varchar(20) NOT NULL DEFAULT '';

ALTER TABLE `network` CHANGE `dhcp_lease_expires` `dhcp_lease_expires` varchar(20) NOT NULL DEFAULT '';

ALTER TABLE `nmap` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

UPDATE `nmap` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`program`, ' on ', `ip`, ' ', `protocol`, ' port ', `port`));

ALTER TABLE `optical` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `optical` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT '';

UPDATE `optical` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`model`));

ALTER TABLE `partition` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

UPDATE `partition` SET `description` = `name`;

ALTER TABLE `policy` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `current`;

ALTER TABLE `policy` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `print_queue` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `print_queue` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT '' AFTER `manufacturer`;

ALTER TABLE `processor` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `processor` ADD `hyperthreading` enum('y','n','') NOT NULL DEFAULT '' AFTER `socket`;

UPDATE `processor` SET `hyperthreading` = 'y' WHERE `logical_count` = (2 * `core_count`);

UPDATE `processor` SET `hyperthreading` = 'n' WHERE `logical_count` = `core_count`;

UPDATE `processor` SET `name` = `description`;

UPDATE `queries` SET `sql` = 'SELECT system.id AS `system.id`, system.name AS `system.name`, system.hostname AS `system.hostname`, system.dns_hostname AS `system.dns_hostname`, system.fqdn AS `system.fqdn`, system.ip AS `system.ip`, system.type AS `system.type`, system.credentials AS `system.credentials`, system.nmis_group AS `system.nmis_group`, system.nmis_name AS `system.nmis_name`, system.nmis_role AS `system.nmis_role`, system.nmis_manage AS `system.nmis_manage`, system.nmis_business_service AS `system.nmis_business_service`, system.nmis_customer AS `system.nmis_customer`, system.nmis_poller AS `system.nmis_poller`, system.snmp_version AS `system.snmp_version`, system.omk_uuid AS `system.omk_uuid`, locations.name AS `locations.name`, IF(system.snmp_version != \'\', \'true\', \'false\') AS `system.collect_snmp`, IF(system.os_group LIKE \'%windows%\', \'true\', \'false\') AS `system.collect_wmi` FROM `system` LEFT JOIN `locations` ON system.location_id = locations.id WHERE @filter AND system.nmis_manage = \'y\'' WHERE `name` = 'Integration Default for NMIS';

ALTER TABLE `route` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

UPDATE `route` SET `name` = CONCAT(`destination`, '/', `mask`, ' via ', `next_hop`);

DELETE FROM `rules` WHERE `name` = 'Form Factor based on Manufacturer (like innotek GmbH)';

DELETE FROM `rules` WHERE `name` = 'Manufacturer change HP to Hewlett Packard';

INSERT INTO `rules` VALUES (NULL,'Form Factor based on Manufacturer (like innotek GmbH)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"innotek GmbH\",\"operator\":\"li\"}]','[{\"value\":\"Virtual\",\"table\":\"system\",\"attribute\":\"form_factor\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');

INSERT INTO `rules` VALUES (NULL,'Manufacturer change HP to Hewlett Packard',1,'Set manufacturer to Hewlett Packard if we receive HP.',100,'[{\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"table\":\"system\",\"value\":\"HP\"}]','[{\"attribute\":\"manufacturer\",\"table\":\"system\",\"value\":\"Hewlett Packard\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');

ALTER TABLE `scsi` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

UPDATE `scsi` SET `name` = `model`;

ALTER TABLE `server` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `server_item` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `share` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `sound` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `sound` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT '';

UPDATE `sound` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`));

UPDATE `summaries` SET `extra_columns` = 'server.name,server.full_name,server.version,server.edition,server.status' WHERE `name` = 'Server Types' and `edited_by` = 'system';

ALTER TABLE `system` ADD `nmis_customer` varchar(200) NOT NULL DEFAULT '' AFTER `nmis_poller`;

ALTER TABLE `user` DROP `password_disabled`;

ALTER TABLE `user` ADD `password_disabled` varchar(20) NOT NULL DEFAULT '' AFTER `password_required`;

ALTER TABLE `user` DROP `keys`;

ALTER TABLE `user` ADD `keys` text NOT NULL AFTER `status`;

ALTER TABLE `user` DROP `home`;

ALTER TABLE `user` ADD `home` varchar(255) NOT NULL DEFAULT '' AFTER `keys`;

ALTER TABLE `user` DROP `shell`;

ALTER TABLE `user` ADD `shell` varchar(255) NOT NULL DEFAULT '' AFTER `home`;

DELETE FROM `users` WHERE `name` = 'nmis' AND `edited_by` = 'system';

ALTER TABLE `users` DROP `devices_default_display_columns`;

ALTER TABLE `users` ADD `devices_default_display_columns` text NOT NULL AFTER `dashboard_id`;

ALTER TABLE `variable` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `video` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

ALTER TABLE `video` CHANGE `model` `model` varchar(200) NOT NULL DEFAULT '';

UPDATE `video` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`));

ALTER TABLE `vm` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

UPDATE `widgets` SET `link` = 'devices?change_log.db_table=in(\'bios\',\'disk\',\'memory\',\'module\',\'monitor\',\'motherboard\',\'network\',\'optical\',\'partition\',\'processor\',\'san\',\'scsi\',\'sound\',\'video\')&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Hardware Additions by Day';

UPDATE `widgets` SET `link` = 'devices?change_log.db_table=in(\'dns\',\'file\',\'ip\',\'log\',\'pagefile\',\'print_queue\',\'route\',\'share\',\'task\',\'user\',\'user_group\',\'variable\',\'vm\',\'windows\')&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Settings Additions by Day';

UPDATE `widgets` SET `link` = 'devices?change_log.db_table=in(\'server\',\'server_item\',\'service\',\'software\',\'software_key\')&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Software Additions by Day';

UPDATE `widgets` SET `link` = 'devices?system.location_id=@description&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.location_id' WHERE `name` = 'Devices by Location';

UPDATE `widgets` SET `link`= 'devices?audit_log.timestamp=like@date&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.identification,system.os_family,system.status&groupby=audit_log.system_id&system.cloud_id=!=' WHERE `name` = 'Cloud Devices Audited per Day';

ALTER TABLE `windows` ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`;

UPDATE `windows` SET `name` = `domain_role`;

UPDATE `configuration` SET `value` = '20191010' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '3.3.0' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 3.3.0 commenced');

$sql = "DROP TABLE IF EXISTS `baselines_policies`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DROP TABLE IF EXISTS `baselines`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

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
$this->db->query($sql);
$this->log_db($this->db->last_query());

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
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('bios', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `current`");

$this->alter_table('bios', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$this->alter_table('bios', 'manufacturer', "`manufacturer` varchar(100) NOT NULL NOT NULL DEFAULT '' AFTER `name`");

$this->alter_table('bios', 'description', "`model` varchar(100) NOT NULL NOT NULL DEFAULT '' AFTER `manufacturer`");

$sql = "UPDATE `bios` SET `name` = `model`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('clusters', 'type', "`type` enum('high availability','load balancing','performance','storage','other','') NOT NULL DEFAULT ''");

$this->alter_table('clusters', 'purpose', "`purpose` enum('application','compute','database','storage','virtualisation','web','other','') NOT NULL DEFAULT ''");

$this->alter_table('clusters', 'status', "`status` enum('active','inactive','other','') NOT NULL DEFAULT ''");

$this->alter_table('clusters', 'configuration', "ADD `configuration` enum('active/active','active/passive','N+1','N+M','N-to-1','N-to-N','other','') NOT NULL DEFAULT '' AFTER `status`", 'add');

$this->alter_table('clusters', 'environment', "ADD `environment` varchar(100) NOT NULL DEFAULT 'production' AFTER `configuration`", 'add');

$this->alter_table('clusters', 'scaling', "ADD `scaling` enum('auto','fixed','other','') NOT NULL DEFAULT 'fixed' AFTER `environment`", 'add');

$this->alter_table('clusters', 'retrieved_name', "ADD `retrieved_name` varchar(200) NOT NULL DEFAULT '' AFTER `scaling`", 'add');

$this->alter_table('clusters', 'retrieved_ident', "ADD `retrieved_ident` varchar(200) NOT NULL DEFAULT '' AFTER `retrieved_name`", 'add');

$sql = "DROP TABLE IF EXISTS `cluster`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

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
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM configuration WHERE `name` = 'device_auto_delete'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'device_auto_delete', 'n', 'bool', 'y', 'system', '2000-01-01 00:00:00','Should we delete the device data completely from the database when the device status is set to Deleted.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM configuration WHERE `name` = 'devices_default_display_columns'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'devices_default_display_columns','system.id,system.icon,system.type,system.name,system.ip,system.dns_fqdn,system.identification,system.description,system.manufacturer,system.os_family,system.status', 'text', 'y', 'system', '2000-01-01 00:00:00','When requesting a list of devices, display these columns.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM configuration WHERE `name` = 'devices_default_group_columns'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'devices_default_group_columns','system.id,system.icon,system.type,system.name,system.ip,system.dns_fqdn, system.identification,system.description,system.manufacturer,system.os_family,system.status', 'text', 'y', 'system', '2000-01-01 00:00:00','When requesting a list of devices, display these columns.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM configuration WHERE `name` = 'devices_default_retrieve_columns'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'devices_default_retrieve_columns','system.id,system.uuid,system.name,system.ip,system.hostname,system.dns_hostname,system.domain,system.dns_domain,system.dbus_identifier,system.fqdn,system.dns_fqdn,system.description,system.type,system.icon,system.os_group,system.os_family,system.os_name,system.os_version,system.manufacturer,system.model,system.serial,system.form_factor,system.status,system.environment,system.class,system.function,system.org_id,system.location_id,system.snmp_oid,system.sysDescr,system.sysObjectID,system.sysUpTime,system.sysContact,system.sysName,system.sysLocation,system.first_seen,system.last_seen,system.last_seen_by,system.identification', 'text', 'y', 'system', '2000-01-01 00:00:00','When requesting a list of devices, provide these columns.');";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_override_nmap'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_override_nmap','n','bool','y','system','2000-01-01 00:00:00','Override the detction of Nmap to enable discoveries.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_route_retrieve_limit'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_route_retrieve_limit','500','number','y','system','2000-01-01 00:00:00','When discovering a device using SNMP, do not retrieve the route table if it contains more than this number of entries.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_scan_limit'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_sudo_path'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_sudo_path','','text','y','system','2000-01-01 00:00:00','Optional hardcoded path to sudo executable. Comma seperated for multiple paths.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM configuration WHERE `name` = 'match_ip_no_data'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'match_ip_no_data','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its ip if we have an existing device with no data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = 'y' WHERE `name` = 'match_mac' and `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'queue_limit'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'queue_limit','20','number','y','system','2000-01-01 00:00:00','The maximum number of concurrent device scans we should run.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'queue_count'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'queue_count','0','number','n','system','2000-01-01 00:00:00','The current number of concurrent device scans running.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());


$this->alter_table('discoveries', 'limit', "DROP `limit`", 'drop');
$this->alter_table('discoveries', 'pid', "DROP pid", 'drop');
$this->alter_table('discoveries', 'device_count', "DROP device_count", 'drop');
$this->alter_table('discoveries', 'complete', "DROP complete", 'drop');
$this->alter_table('discoveries', 'discovered', "DROP discovered", 'drop');
$this->alter_table('discoveries', 'last_log', "DROP last_log", 'drop');
$this->alter_table('discoveries', 'ip_all_count', "DROP ip_all_count", 'drop');
$this->alter_table('discoveries', 'ip_responding_count', "DROP ip_responding_count", 'drop');
$this->alter_table('discoveries', 'ip_scanned_count', "DROP ip_scanned_count", 'drop');
$this->alter_table('discoveries', 'ip_discovered_count', "DROP ip_discovered_count", 'drop');
$this->alter_table('discoveries', 'ip_audited_count', "DROP ip_audited_count", 'drop');
$this->alter_table('discoveries', 'last_finished', "DROP last_finished", 'drop');

$this->alter_table('discoveries', 'last_finished', "ADD `last_finished` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `last_run`", 'add');
$this->alter_table('discoveries', 'ip_all_count', "ADD `ip_all_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `status`", 'add');
$this->alter_table('discoveries', 'ip_responding_count', "ADD `ip_responding_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `ip_all_count`", 'add');
$this->alter_table('discoveries', 'ip_scanned_count', "ADD `ip_scanned_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `ip_responding_count`", 'add');
$this->alter_table('discoveries', 'ip_discovered_count', "ADD `ip_discovered_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `ip_scanned_count`", 'add');
$this->alter_table('discoveries', 'ip_audited_count', "ADD `ip_audited_count` int(10) unsigned NOT NULL DEFAULT 0 AFTER `ip_discovered_count`", 'add');

$this->alter_table('discoveries', 'duration', "`duration` time NOT NULL DEFAULT '00:00:00' AFTER `last_finished`");
$this->alter_table('discoveries', 'edited_by', "`edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `ip_audited_count`");
$this->alter_table('discoveries', 'edited_date', "`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`");

$this->alter_table('discovery_scan_options', 'open|filtered', "ADD `open|filtered` enum('','y','n') NOT NULL DEFAULT 'n' AFTER `service_version`", 'add');

$sql = "UPDATE `discovery_scan_options` SET `description` = 'Approximately 1 second per target. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.' WHERE `name` = 'UltraFast'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `discovery_scan_options` SET `description` = 'Approximately 5 seconds per target. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is  considered closed. Device must respond to an Nmap ping. Use aggressive timing.' WHERE `name` = 'SuperFast'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `discovery_scan_options` SET `description` = 'Approximately 40 seconds per target. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.' WHERE `name` = 'Fast'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `discovery_scan_options` SET `open|filtered` = 'y' WHERE `name` = 'Medium (Classic)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `discovery_scan_options` SET `open|filtered` = 'y' WHERE `name` = 'Slow'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `discovery_scan_options` SET `open|filtered` = 'y' WHERE `name` = 'UltraSlow'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('disk', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('disk', 'model', "`model` varchar(200) NOT NULL NOT NULL DEFAULT ''");
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `disk` SET `manufacturer` = '' WHERE `manufacturer` = '(Standard disk drives)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `disk` SET `manufacturer` = 'VMware' WHERE `model` LIKE '%vmware%' AND `manufacturer` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `disk` SET `manufacturer` = 'Intel' WHERE `model` LIKE '%intel%' AND `manufacturer` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `disk` SET `manufacturer` = 'VirtualBox' WHERE `model` = 'VBOX HARDDISK' AND `manufacturer` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `disk` SET `manufacturer` = 'Western Digital' WHERE `model` LIKE '%wdc%' AND `manufacturer` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `disk` SET `manufacturer` = 'Western Digital' WHERE `model_family` LIKE '%Western Digital%' AND `manufacturer` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `disk` SET `manufacturer` = 'Seagate' WHERE `model_family` LIKE '%Seagate%' AND `manufacturer` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `disk` SET `manufacturer` = 'Hewlett Packard' WHERE `model_family` LIKE 'HP %' AND `manufacturer` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `disk` SET `manufacturer` = 'Apple Inc.' WHERE `manufacturer` LIKE 'Apple%'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `disk` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`))";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('ip', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$sql = "UPDATE `ip` SET `name` = REPLACE(REPLACE(`ip`, '.0', '.'), '.0', '.') WHERE `version` = 4";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `ip` SET `name` = `ip` WHERE `version` != 4";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('ldap_servers', 'use_auth', "ADD `use_auth` enum('y','n') NOT NULL DEFAULT 'y' AFTER `user_membership_attribute`", 'add');
$this->alter_table('ldap_servers', 'use_discovery', "ADD `use_discovery` enum('y','n') NOT NULL DEFAULT 'y' AFTER `use_auth`", 'add');
$this->alter_table('ldap_servers', 'use_people', "ADD `use_people` enum('y','n') NOT NULL DEFAULT 'y' AFTER `use_discovery`", 'add');

$this->alter_table('memory', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$sql = "UPDATE `memory` SET `name` = `tag`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('memory', 'manufacturer', "ADD `manufacturer` varchar(100) NOT NULL DEFAULT '' AFTER `name`", 'add');

$this->alter_table('module', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$sql = "UPDATE `module` SET `name` = `description`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('monitor', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$this->alter_table('monitor', 'model', "`model` varchar(200) NOT NULL NOT NULL DEFAULT ''");

$sql = "UPDATE `monitor` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`))";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('motherboard', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$this->alter_table('motherboard', 'model', "`model` varchar(200) NOT NULL NOT NULL DEFAULT ''");

$sql = "UPDATE `motherboard` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`))";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('netstat', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$sql = "UPDATE `netstat` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`program`, ' on ', `ip`, ' ', `protocol`, ' port ', `port`))";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('network', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$this->alter_table('network', 'model', "`model` varchar(200) NOT NULL NOT NULL DEFAULT ''");

$sql = "UPDATE `network` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`))";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('network', "`dhcp_lease_obtained` varchar(20) NOT NULL DEFAULT ''");

$this->alter_table('network', "`dhcp_lease_expires` varchar(20) NOT NULL DEFAULT ''");

$this->alter_table('nmap', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$sql = "UPDATE `nmap` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`program`, ' on ', `ip`, ' ', `protocol`, ' port ', `port`))";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('optical', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$this->alter_table('optical', 'model', "`model` varchar(200) NOT NULL NOT NULL DEFAULT ''");

$sql = "UPDATE `optical` SET `name` = `model`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('partition', 'name', "`name` varchar(200) NOT NULL NOT NULL DEFAULT '' AFTER `last_seen`");

$this->alter_table('policy', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `current`");

$this->alter_table('policy', 'name', "`name` varchar(200) NOT NULL NOT NULL DEFAULT '' AFTER `last_seen`");

$this->alter_table('print_queue', 'model', "`model` varchar(200) NOT NULL NOT NULL DEFAULT '' AFTER `last_seen`");

$this->alter_table('processor', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$this->alter_table('processor', 'hyperthreading', "ADD `hyperthreading` enum('y','n','') NOT NULL DEFAULT '' AFTER `socket`", 'add');

$sql = "UPDATE `processor` SET `hyperthreading` = 'y' WHERE `logical_count` = (2 * `core_count`)";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `processor` SET `hyperthreading` = 'n' WHERE `logical_count` = `core_count`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `processor` SET `name` = `description`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `queries` SET `sql` = 'SELECT system.id AS `system.id`, system.name AS `system.name`, system.hostname AS `system.hostname`, system.dns_hostname AS `system.dns_hostname`, system.fqdn AS `system.fqdn`, system.ip AS `system.ip`, system.type AS `system.type`, system.credentials AS `system.credentials`, system.nmis_group AS `system.nmis_group`, system.nmis_name AS `system.nmis_name`, system.nmis_role AS `system.nmis_role`, system.nmis_manage AS `system.nmis_manage`, system.nmis_business_service AS `system.nmis_business_service`, system.nmis_customer AS `system.nmis_customer`, system.nmis_poller AS `system.nmis_poller`, system.snmp_version AS `system.snmp_version`, system.omk_uuid AS `system.omk_uuid`, locations.name AS `locations.name`, IF(system.snmp_version != \'\', \'true\', \'false\') AS `system.collect_snmp`, IF(system.os_group LIKE \'%windows%\', \'true\', \'false\') AS `system.collect_wmi` FROM `system` LEFT JOIN `locations` ON system.location_id = locations.id WHERE @filter AND system.nmis_manage = \'y\'' WHERE `name` = 'Integration Default for NMIS'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('route', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$sql = "UPDATE `route` SET `name` = CONCAT(`destination`, '/', `mask`, ' via ', `next_hop`)";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `rules` WHERE `name` = 'Form Factor based on Manufacturer (like innotek GmbH)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `rules` WHERE `name` = 'Manufacturer change HP to Hewlett Packard'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `rules` VALUES (NULL,'Form Factor based on Manufacturer (like innotek GmbH)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"innotek GmbH\",\"operator\":\"li\"}]','[{\"value\":\"Virtual\",\"table\":\"system\",\"attribute\":\"form_factor\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `rules` VALUES (NULL,'Manufacturer change HP to Hewlett Packard',1,'Set manufacturer to Hewlett Packard if we receive HP.',100,'[{\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"table\":\"system\",\"value\":\"HP\"}]','[{\"attribute\":\"manufacturer\",\"table\":\"system\",\"value\":\"Hewlett Packard\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('scsi', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$sql = "UPDATE `scsi` SET `name` = `model`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('server', 'name', "`name` varchar(200) NOT NULL NOT NULL DEFAULT '' AFTER `last_seen`");

$this->alter_table('server_item', 'name', "`name` varchar(200) NOT NULL NOT NULL DEFAULT '' AFTER `last_seen`");

$this->alter_table('share', 'name', "`name` varchar(200) NOT NULL NOT NULL DEFAULT '' AFTER `last_seen`");

$this->alter_table('sound', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$this->alter_table('sound', 'model', "`model` varchar(200) NOT NULL NOT NULL DEFAULT ''");

$sql = "UPDATE `sound` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`))";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET `extra_columns` = 'server.name,server.full_name,server.version,server.edition,server.status' WHERE `name` = 'Server Types' and `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('system', 'nmis_customer', "ADD `nmis_customer` varchar(200) NOT NULL DEFAULT '' AFTER `nmis_poller`", 'add');

$this->alter_table('user', 'password_disabled', "ADD `password_disabled` varchar(20) NOT NULL DEFAULT '' AFTER `password_required`", 'add');

$this->alter_table('user', 'keys', 'ADD `keys` text NOT NULL AFTER `status`', 'add');

$this->alter_table('user', 'home', 'ADD `home` text NOT NULL AFTER `keys`', 'add');

$this->alter_table('user', 'shell', 'ADD `shell` text NOT NULL AFTER `home`', 'add');

$sql = "DELETE FROM `users` WHERE `name` = 'nmis' AND `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('users', 'devices_default_display_columns', 'ADD `devices_default_display_columns` text NOT NULL AFTER `dashboard_id`', 'add');

$this->alter_table('variable', 'name', "`name` varchar(200) NOT NULL NOT NULL DEFAULT '' AFTER `last_seen`");

$this->alter_table('video', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$this->alter_table('video', 'model', "`model` varchar(200) NOT NULL NOT NULL DEFAULT ''");

$sql = "UPDATE `video` SET `name` = TRIM(BOTH ' ' FROM CONCAT(`manufacturer`, ' ', `model`))";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('vm', 'name', "`name` varchar(200) NOT NULL NOT NULL DEFAULT '' AFTER `last_seen`");

$sql = "UPDATE `widgets` SET `link` = 'devices?change_log.db_table=in(\'bios\',\'disk\',\'memory\',\'module\',\'monitor\',\'motherboard\',\'network\',\'optical\',\'partition\',\'processor\',\'san\',\'scsi\',\'sound\',\'video\')&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Hardware Additions by Day';";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `widgets` SET `link` = 'devices?change_log.db_table=in(\'dns\',\'file\',\'ip\',\'log\',\'pagefile\',\'print_queue\',\'route\',\'share\',\'task\',\'user\',\'user_group\',\'variable\',\'vm\',\'windows\')&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Settings Additions by Day'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `widgets` SET `link` = 'devices?change_log.db_table=in(\'server\',\'server_item\',\'service\',\'software\',\'software_key\')&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Software Additions by Day'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `widgets` SET `link` = 'devices?system.location_id=@description&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.location_id' WHERE `name` = 'Devices by Location'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `widgets` SET `link`= 'devices?audit_log.timestamp=like@date&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.identification,system.os_family,system.status&groupby=audit_log.system_id&system.cloud_id=!=' WHERE `name` = 'Cloud Devices Audited per Day'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('windows', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `last_seen`", 'add');

$sql = "UPDATE `windows` SET `name` = `domain_role`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20191010' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '3.3.0' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

// Migrate any existing baselines
$sql = 'DELETE FROM baselines';
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = 'DELETE FROM baselines_policies';
$this->db->query($sql);
$this->log_db($this->db->last_query());

$directory_path = 'c:\\omk\\var\\oae\\baselines\\definitions\\';
if (php_uname('s') !== 'Windows NT') {
	$directory_path = '/usr/local/omk/var/oae/baselines/definitions/';
	if (is_dir('/usr/local/opmojo/var/oae/baselines/definitions/')) {
		$directory_path = '/usr/local/opmojo/var/oae/baselines/definitions/';
	}
}
if (is_dir($directory_path)) {
	$directory = dir($directory_path);
	while (false !== ($entry = $directory->read())) {
		$contents = '';
		if (strpos($entry, '.json') !== false) {
			$contents = file_get_contents($directory_path . $entry);
			$definition = @json_decode($contents);
			if ($definition) {
				if (is_array($definition->policies)) {
					$sql = 'INSERT INTO `baselines` VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
					$data = array($definition->id, $definition->name, $definition->org_id, $definition->description, $definition->notes, $definition->documentation, $definition->priority, 'system', '2000-01-01 00:00:00');
					$this->db->query($sql, $data);
					$this->log_db($this->db->last_query());
					foreach ($definition->policies as $policy) {
						if ( ! empty($policy->name)) {
							$sql = 'INSERT INTO baselines_policies VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
							$notes = '';
							if ( ! empty($policy->notes)) {
								$notes = $policy->notes;
							}
							$documentation = '';
							if ( ! empty($policy->documentation)) {
								$documentation = $policy->documentation;
							}
							$data = array($definition->id, $policy->name, $policy->priority, $notes, $documentation, $policy->table, json_encode($policy->tests), 'system', '2000-01-01 00:00:00');
							$this->db->query($sql, $data);
						}
					}
				}
			}
		}
	}
	$directory->close();
}

$this->m_roles->update_permissions('admin', 'clusters', 'r');
$this->m_roles->update_permissions('org_admin', 'clusters', 'crud');
$this->m_roles->update_permissions('reporter', 'clusters', 'r');
$this->m_roles->update_permissions('user', 'clusters', 'r');

$this->log_db("Upgrade database to 3.3.0 completed");
$this->config->config['internal_version'] = '20191010';
$this->config->config['display_version'] = '3.3.0';
