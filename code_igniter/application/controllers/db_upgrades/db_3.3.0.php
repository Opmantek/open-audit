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

/*
DELETE FROM configuration WHERE `name` = 'device_auto_delete';

INSERT INTO `configuration` VALUES (NULL,'device_auto_delete', 'n', 'bool', 'y', 'system', '2000-01-01 00:00:00','Should we delete the device data completely from the database when the device status is set to Deleted.');

DELETE FROM `configuration` WHERE `name` = 'discovery_scan_limit';

DELETE FROM configuration WHERE `name` = 'match_ip_no_data';

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

ALTER TABLE `discoveries` DROP `network_address`;

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



UPDATE `queries` SET `sql` = 'SELECT system.id AS `system.id`, system.name AS `system.name`, system.hostname AS `system.hostname`, system.dns_hostname AS `system.dns_hostname`, system.fqdn AS `system.fqdn`, system.ip AS `system.ip`, system.type AS `system.type`, system.credentials AS `system.credentials`, system.nmis_group AS `system.nmis_group`, system.nmis_name AS `system.nmis_name`, system.nmis_role AS `system.nmis_role`, system.nmis_manage AS `system.nmis_manage`, system.nmis_business_service AS `system.nmis_business_service`, system.nmis_customer AS `system.nmis_customer`, system.nmis_poller AS `system.nmis_poller`, system.snmp_version AS `system.snmp_version`, system.omk_uuid AS `system.omk_uuid`, locations.name AS `locations.name`, IF(system.snmp_version != \'\', \'true\', \'false\') AS `system.collect_snmp`, IF(system.os_group LIKE \'%windows%\', \'true\', \'false\') AS `system.collect_wmi` FROM `system` LEFT JOIN `locations` ON system.location_id = locations.id WHERE @filter AND system.nmis_manage = \'y\'' WHERE `name` = 'Integration Default for NMIS';

ALTER TABLE `system` ADD `nmis_customer` varchar(200) NOT NULL DEFAULT '' AFTER `nmis_poller`;

ALTER TABLE `user` DROP `password_disabled`;

ALTER TABLE `user` ADD `password_disabled` varchar(20) NOT NULL DEFAULT '' AFTER `password_required`;

ALTER TABLE `user` DROP `keys`;

ALTER TABLE `user` ADD `keys` text NOT NULL AFTER `status`;

ALTER TABLE `user` DROP `home`;

ALTER TABLE `user` ADD `home` varchar(255) NOT NULL DEFAULT '' AFTER `keys`;

ALTER TABLE `user` DROP `shell`;

ALTER TABLE `user` ADD `shell` varchar(255) NOT NULL DEFAULT '' AFTER `home`;

UPDATE `widgets` SET `link` = 'devices?sub_resource=change_log&change_log.db_table=in(bios,disk,memory,module,monitor,motherboard,network,optical,partition,processor,san,scsi,sound,video)&change_log.timestamp=like@date&change_log.db_action=create&system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Hardware Additions by Day'

UPDATE `widgets` SET `link` = 'devices?sub_resource=change_log&change_log.db_table=in(dns,file,ip,log,pagefile,print_queue,route,share,task,user,user_group,variable,vm,windows)&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Settings Additions by Day'

UPDATE `widgets` SET `link` = 'devices?sub_resource=change_log&change_log.db_table=in(server,server_item,service,software,software_key)&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Software Additions by Day'

UPDATE `widgets` SET `link` = 'devices?system.location_id=@description&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.location_id' WHERE `name` = 'Devices by Location';

UPDATE `configuration` SET `value` = '20191010' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '3.3.0' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 3.3.0 commenced');

$sql = "DELETE FROM configuration WHERE `name` = 'device_auto_delete'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'device_auto_delete', 'n', 'bool', 'y', 'system', '2000-01-01 00:00:00','Should we delete the device data completely from the database when the device status is set to Deleted.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_scan_limit'";
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


$this->alter_table('discoveries', 'limit', "DROP limit", 'drop');
$this->alter_table('discoveries', 'pid', "DROP pid", 'drop');
$this->alter_table('discoveries', 'device_count', "DROP device_count", 'drop');
$this->alter_table('discoveries', 'complete', "DROP complete", 'drop');
$this->alter_table('discoveries', 'discovered', "DROP discovered", 'drop');
$this->alter_table('discoveries', 'network_address', "DROP network_address", 'drop');
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

$sql = "UPDATE `queries` SET `sql` = 'SELECT system.id AS `system.id`, system.name AS `system.name`, system.hostname AS `system.hostname`, system.dns_hostname AS `system.dns_hostname`, system.fqdn AS `system.fqdn`, system.ip AS `system.ip`, system.type AS `system.type`, system.credentials AS `system.credentials`, system.nmis_group AS `system.nmis_group`, system.nmis_name AS `system.nmis_name`, system.nmis_role AS `system.nmis_role`, system.nmis_manage AS `system.nmis_manage`, system.nmis_business_service AS `system.nmis_business_service`, system.nmis_customer AS `system.nmis_customer`, system.nmis_poller AS `system.nmis_poller`, system.snmp_version AS `system.snmp_version`, system.omk_uuid AS `system.omk_uuid`, locations.name AS `locations.name`, IF(system.snmp_version != \'\', \'true\', \'false\') AS `system.collect_snmp`, IF(system.os_group LIKE \'%windows%\', \'true\', \'false\') AS `system.collect_wmi` FROM `system` LEFT JOIN `locations` ON system.location_id = locations.id WHERE @filter AND system.nmis_manage = \'y\'' WHERE `name` = 'Integration Default for NMIS'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('system', 'nmis_customer', "ADD `nmis_customer` varchar(200) NOT NULL DEFAULT '' AFTER `nmis_poller`", 'add');

$this->alter_table('user', 'password_disabled', "ADD `password_disabled` varchar(20) NOT NULL DEFAULT '' AFTER `password_required`", 'add');

$this->alter_table('user', 'keys', "ADD `keys` text NOT NULL AFTER `status`", 'add');

$this->alter_table('user', 'home', "ADD `home` text NOT NULL AFTER `keys`", 'add');

$this->alter_table('user', 'shell', "ADD `shell` text NOT NULL AFTER `home`", 'add');

$sql = "UPDATE `widgets` SET `link` = 'devices?sub_resource=change_log&change_log.db_table=in(bios,disk,memory,module,monitor,motherboard,network,optical,partition,processor,san,scsi,sound,video)&change_log.timestamp=like@date&change_log.db_action=create&system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Hardware Additions by Day'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `widgets` SET `link` = 'devices?sub_resource=change_log&change_log.db_table=in(dns,file,ip,log,pagefile,print_queue,route,share,task,user,user_group,variable,vm,windows)&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Settings Additions by Day'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `widgets` SET `link` = 'devices?sub_resource=change_log&change_log.db_table=in(server,server_item,service,software,software_key)&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp' WHERE `name` = 'Software Additions by Day'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `widgets` SET `link` = 'devices?system.location_id=@description&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.location_id' WHERE `name` = 'Devices by Location'";
$this->db->query($sql);
$this->log_db($this->db->last_query());



# set our versions
$sql = "UPDATE `configuration` SET `value` = '20191010' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '3.3.0' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 3.3.0 completed");
$this->config->config['internal_version'] = '20191010';
$this->config->config['display_version'] = '3.3.0';
