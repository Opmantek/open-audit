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

$this->log_db('Upgrade database to 2.3.0 commenced');

# attributes
$sql = "UPDATE `attributes` SET name = 'NAS (Network Attached Storage)' WHERE name = 'NAS (,Network Attached Storage)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `attributes` SET name = 'Network IDS (Intrusion Detection)' WHERE name = 'Network IDS (,Intrusion Detection)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `attributes` SET name = 'Remote Access Controller (ILO / RSA)' WHERE name = 'Remote Access Controller (,ILO / RSA)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `attributes` SET name = 'SAN (Storage Area Network)' WHERE name = 'SAN (,Storage Area Network)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `attributes` SET name = 'UPS (Uninterruptible Power Supply)' WHERE name = 'UPS (,Uninterruptible Power Supply)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `attributes` SET name = 'WAP (Wireless Access Point)' WHERE name = 'WAP (,Wireless Access Point)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `attributes` SET name = 'WDM (Wavelength Division Multiplexer)' WHERE name = 'WDM (,Wavelength Division Multiplexer)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM attributes WHERE `resource` = 'devices' AND `type` = 'type' AND `name` = 'Patch Panel'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Patch Panel','patch panel','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM attributes WHERE `resource` = 'devices' AND `type` = 'type' AND `name` = 'Monitor'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Monitor','monitor','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM attributes WHERE `resource` = 'devices' AND `type` = 'type' AND `name` = 'Shelf'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Shelf','shelf','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Campus','Campus','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# Configuration
$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_limit'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_limit','20','number','y','system','2000-01-01 00:00:00','The maximum number of concurrent discoveries we should run.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_scan_limit'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_scan_limit','50','number','y','system','2000-01-01 00:00:00','The maximum number of concurrent device scans we should process.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_pid'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_pid','','number','n','system','2000-01-01 00:00:00','The discovery queue process pid.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# cloud_log
$sql = "DROP TABLE IF EXISTS `cloud_log`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `cloud_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cloud_id` int(10) unsigned DEFAULT NULL,
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `severity_text` enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `cloud_id` (`cloud_id`),
  CONSTRAINT `cloud_log_cloud_id` FOREIGN KEY (`cloud_id`) REFERENCES `clouds` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# discoveries
$this->alter_table('discoveries', 'status', "ADD `status` varchar(20) NOT NULL DEFAULT '' AFTER `complete`", 'add');

$this->alter_table('discoveries', 'discovered', "ADD `discovered` varchar(20) NOT NULL DEFAULT '' AFTER `status`", 'add');

$this->alter_table('discoveries', 'last_log', "ADD `last_log` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `discovered`", 'add');

$this->alter_table('discoveries', 'duration', "ADD `duration` time NOT NULL DEFAULT '00:00:00' AFTER `last_log`", 'add');

$this->alter_table('discoveries', 'pid', "ADD `pid` int(10) unsigned NOT NULL DEFAULT '0' AFTER `duration`", 'add');

# queue
$sql = "DROP TABLE IF EXISTS `queue`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `queue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL DEFAULT '',
  `details` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# ip
$this->alter_table('ip', 'interface', "ADD `interface` varchar(200) NOT NULL DEFAULT '' AFTER `set_by`", 'add');

# rack devices
$sql = "DROP TABLE IF EXISTS `rack_devices`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# racks
$sql = "DROP TABLE IF EXISTS `racks`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# rows
$sql = "DROP TABLE IF EXISTS `rows`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# rooms
$sql = "DROP TABLE IF EXISTS `rooms`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# floors
$sql = "DROP TABLE IF EXISTS `floors`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# buildings
$sql = "DROP TABLE IF EXISTS `buildings`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `buildings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `location_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `location_id` (`location_id`),
  CONSTRAINT `buildings_location_id` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `buildings_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `floors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `building_id` int(10) unsigned DEFAULT NULL,
  `description` text NOT NULL,
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `building_id` (`building_id`),
  CONSTRAINT `floors_building_id` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE,
  CONSTRAINT `floors_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `floor_id` int(10) unsigned DEFAULT NULL,
  `description` text NOT NULL,
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `floor_id` (`floor_id`),
  CONSTRAINT `rooms_floor_id` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rooms_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `room_id` int(10) unsigned DEFAULT NULL,
  `description` text NOT NULL,
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `rows_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rows_room_id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `racks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `row_id` int(10) unsigned DEFAULT NULL,
  `description` text NOT NULL,
  `row_position` varchar(200) NOT NULL DEFAULT '',
  `pod` varchar(200) NOT NULL DEFAULT '',
  `physical_height` int(10) unsigned NOT NULL DEFAULT '2000',
  `physical_width` int(10) unsigned NOT NULL DEFAULT '600',
  `physical_depth` int(10) unsigned NOT NULL DEFAULT '1050',
  `weight_empty` int(10) unsigned NOT NULL DEFAULT '1',
  `weight_current` int(10) unsigned NOT NULL DEFAULT '1',
  `weight_max` int(10) unsigned NOT NULL DEFAULT '1',
  `ru_start` int(10) unsigned NOT NULL DEFAULT '1',
  `ru_height` int(10) unsigned NOT NULL DEFAULT '42',
  `type` varchar(200) NOT NULL DEFAULT '',
  `purpose` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(200) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `series` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(200) NOT NULL DEFAULT '',
  `asset_number` varchar(200) NOT NULL DEFAULT '',
  `asset_tag` varchar(200) NOT NULL DEFAULT '',
  `bar_code` varchar(200) NOT NULL DEFAULT '',
  `power_circuit` varchar(200) NOT NULL DEFAULT '',
  `power_sockets` varchar(200) NOT NULL DEFAULT '',
  `circuit_count` int(10) unsigned NOT NULL DEFAULT '1',
  `btu_total` int(10) unsigned NOT NULL DEFAULT '1',
  `btu_max` int(10) unsigned NOT NULL DEFAULT '1',
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `row_id` (`row_id`),
  CONSTRAINT `racks_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `racks_row_id` FOREIGN KEY (`row_id`) REFERENCES `rows` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `rack_devices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `rack_id` int(10) unsigned DEFAULT NULL,
  `system_id` int(10) unsigned DEFAULT NULL,
  `position` int(10) unsigned NOT NULL DEFAULT '1',
  `height` int(10) unsigned NOT NULL DEFAULT '1',
  `width` int(10) unsigned NOT NULL DEFAULT '1',
  `orientation` enum('front','front-right','front-left','rear','rear-left','rear-right') NOT NULL DEFAULT 'front',
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `rack_id` (`rack_id`),
  CONSTRAINT `rack_devices_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rack_devices_rack_id` FOREIGN KEY (`rack_id`) REFERENCES `racks` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# roles
$this->load->model('m_roles');
$this->m_roles->update_permissions('org_admin', 'buildings', 'crud');
$this->m_roles->update_permissions('org_admin', 'floors', 'crud');
$this->m_roles->update_permissions('org_admin', 'racks', 'crud');
$this->m_roles->update_permissions('org_admin', 'rack_devices', 'crud');
$this->m_roles->update_permissions('org_admin', 'rooms', 'crud');
$this->m_roles->update_permissions('org_admin', 'rows', 'crud');

$this->m_roles->update_permissions('reporter', 'buildings', 'crud');
$this->m_roles->update_permissions('reporter', 'floors', 'crud');
$this->m_roles->update_permissions('reporter', 'racks', 'crud');
$this->m_roles->update_permissions('reporter', 'rack_devices', 'crud');
$this->m_roles->update_permissions('reporter', 'rooms', 'crud');
$this->m_roles->update_permissions('reporter', 'rows', 'crud');

$this->m_roles->update_permissions('user', 'buildings', 'r');
$this->m_roles->update_permissions('user', 'floors', 'r');
$this->m_roles->update_permissions('user', 'racks', 'r');
$this->m_roles->update_permissions('user', 'rack_devices', 'r');
$this->m_roles->update_permissions('user', 'rooms', 'r');
$this->m_roles->update_permissions('user', 'rows', 'r');

# Default buildings, floors, rooms and rows for each location
$sql = "SELECT id, org_id FROM locations";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
$result = $query->result();
foreach ($result as $location) {
    $location_id = intval($location->id);
    $org_id = intval($location->org_id);

    $sql = "INSERT INTO `buildings` VALUES (NULL, 'Default Building', ?, ?, 'The default entry for a building at this location.', '', '', '', 'system', NOW())";
    $data_array = array($org_id, $location_id);
    $query = $this->db->query($sql, $data_array);
    $building_id = $this->db->insert_id();
    $this->log_db($this->db->last_query());

    $sql = "INSERT INTO `floors` VALUES (NULL, 'Ground Floor', ?, ?, 'The default entry for a floor at this location.', '', '', '', 'system', NOW())";
    $data_array = array($org_id, $building_id);
    $query = $this->db->query($sql, $data_array);
    $floor_id = $this->db->insert_id();
    $this->log_db($this->db->last_query());

    $sql = "INSERT INTO `rooms` VALUES (NULL, 'Default Room', ?, ?, 'The default entry for a room at this location.', '', '', '', 'system', NOW())";
    $data_array = array($org_id, $floor_id);
    $query = $this->db->query($sql, $data_array);
    $room_id = $this->db->insert_id();
    $this->log_db($this->db->last_query());

    $sql = "INSERT INTO `rows` VALUES (NULL, 'Default Row', ?, ?, 'The default entry for a row at this location.', '', '', '', 'system', NOW())";
    $data_array = array($org_id, $room_id);
    $query = $this->db->query($sql, $data_array);
    $this->log_db($this->db->last_query());
}

# queries
$sql = "DELETE FROM queries WHERE `name` = 'Cloud Device Details' AND `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Cloud Device Details','Device','y','Details about your cloud based devices','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.name AS `system.name`, system.ip AS `system.ip`, system.instance_type AS `system.instance.type`, clouds.type AS `clouds.type`, clouds.name AS `clouds.name`, locations.name AS `locations.name` FROM system LEFT JOIN clouds ON (clouds.id = system.cloud_id) LEFT JOIN locations ON (locations.id = system.location_id) WHERE @filter AND system.cloud_id != \'\';','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());


# system
$this->alter_table('system', 'cloud_id', "ADD `cloud_id` int(10) unsigned DEFAULT NULL AFTER `credentials`", 'add');

$this->alter_table('system', 'instance_provider', "ADD `instance_provider` varchar(200) NOT NULL DEFAULT '' AFTER `cloud_id`", 'add');

$this->alter_table('system', 'instance_ident', "ADD `instance_ident` varchar(200) NOT NULL DEFAULT '' AFTER `instance_provider`", 'add');

$this->alter_table('system', 'instance_type', "ADD `instance_type` varchar(200) NOT NULL DEFAULT '' AFTER `instance_ident`", 'add');

$this->alter_table('system', 'instance_state', "ADD `instance_state` varchar(200) NOT NULL DEFAULT '' AFTER `instance_type`", 'add');

$this->alter_table('system', 'instance_reservation_ident', "ADD `instance_reservation_ident` varchar(200) NOT NULL DEFAULT '' AFTER `instance_state`", 'add');

$this->alter_table('system', 'instance_tags', "ADD `instance_tags` TEXT NOT NULL AFTER `instance_reservation_ident`", 'add');

$this->alter_table('system', 'instance_options', "ADD `instance_options` TEXT NOT NULL AFTER `instance_tags`", 'add');

# widgets
$sql = "DELETE FROM widgets WHERE name = 'Hardware Additions by Day' and `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Hardware Additions by Day',1,'Any items in the following tables that are new - bios, disk, memory, module, monitor, motherboard, network, optical, partition, processor, san, scsi, sound, video.','line','','system','create','','Devices','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `system` ON (`system`.`id` = `change_log`.`system_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'bios\', \'disk\', \'memory\', \'module\', \'monitor\', \'motherboard\', \'network\', \'optical\', \'partition\', \'processor\', \'san\', \'scsi\', \'sound\', \'video\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?sub_resource=change_log&change_log.db_table=inbios,disk,memory,module,monitor,motherboard,network,optical,partition,processor,san,scsi,sound,video&change_log.timestamp=like@date&change_log.db_action=create','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM widgets WHERE name = 'Devices by Cloud Type' and `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Cloud Type',1,'','pie','','system.instance_provider','','','Devices','','system.instance_provider != \'\'',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$widget_1 = $this->db->insert_id();
$this->log_db($this->db->last_query());

$sql = "DELETE FROM widgets WHERE name = 'Devices per Cloud' and `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices per Cloud',1,'','pie','','','','','Devices','','',0,'','SELECT clouds.name as `name`, clouds.id AS `description`, count(system.id) AS `count` FROM clouds LEFT JOIN system ON (clouds.id = system.cloud_id) WHERE @filter AND system.cloud_id IS NOT NULL GROUP BY clouds.name','devices?system.cloud_id=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$widget_2 = $this->db->insert_id();
$this->log_db($this->db->last_query());

$sql = "DELETE FROM widgets WHERE name = 'Devices by Cloud Network' and `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Cloud Network',1,'','pie','','','','','Devices','','',0,'','SELECT IF(networks.name = networks.network, networks.network, CONCAT(networks.network, \' (\', networks.name, \')\')) as `name`, networks.id AS `description`, count(system.id) AS `count` FROM networks LEFT JOIN ip ON (ip.network = networks.network and ip.current = \'y\') LEFT JOIN system ON (ip.system_id = system.id) WHERE @filter AND networks.options != \'\' GROUP BY networks.network ORDER BY networks.network','devices?ip.network=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$widget_3 = $this->db->insert_id();
$this->log_db($this->db->last_query());

$sql = "DELETE FROM widgets WHERE name = 'Devices by Cloud Region' and `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Cloud Region',1,'','pie','','','','','Devices','','',0,'','SELECT CONCAT(clouds.type, \' - \', locations.name) as `name`, locations.id AS `description`, count(system.id) AS `count` FROM locations LEFT JOIN system ON (locations.id = system.location_id) LEFT JOIN clouds ON (system.cloud_id = clouds.id) WHERE @filter AND system.cloud_id IS NOT NULL AND locations.type = \'Cloud\' GROUP BY system.location_id','devices?system.location_id=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$widget_4 = $this->db->insert_id();
$this->log_db($this->db->last_query());

$sql = "DELETE FROM widgets WHERE name = 'Devices by Instance Type' and `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Instance Type',1,'','pie','','','','','Devices','','',0,'','SELECT CONCAT(clouds.type, \' - \', system.instance_type) as `name`, system.instance_type AS `description`, count(system.id) AS `count` FROM system LEFT JOIN clouds ON (system.cloud_id = clouds.id) WHERE @filter AND system.instance_type != \'\' GROUP BY system.instance_type','devices?system.instance_type=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$widget_5 = $this->db->insert_id();
$this->log_db($this->db->last_query());

$sql = "DELETE FROM widgets WHERE name = 'Cloud Devices Audited per Day' and `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Cloud Devices Audited per Day',1,'','line','','','','','Devices','','',0,'','SELECT DATE(audit_log.timestamp) AS `date`, COUNT(DISTINCT audit_log.system_id) AS `count` FROM `audit_log` LEFT JOIN `system` ON (audit_log.system_id = system.id) WHERE @filter AND DATE(audit_log.timestamp) >  DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND system.cloud_id != \'\' GROUP BY DATE(audit_log.timestamp)','devices?audit_log.timestamp=like@date%','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$widget_6 = $this->db->insert_id();
$this->log_db($this->db->last_query());

$sql = "DELETE FROM widgets WHERE name = 'Cloud Instances by Org and Type' and `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Cloud Instances by Org and Type',1,'','pie','','','','','Devices','','',0,'','SELECT CONCAT(orgs.name, \' - \', system.instance_type) as `name`, CONCAT(system.instance_type, \'&system.org_id=\', orgs.id) AS `description`, count(system.id) AS `count` FROM system LEFT JOIN orgs ON (orgs.id = system.org_id) WHERE @filter AND system.cloud_id != \'\' GROUP BY system.org_id, system.instance_type','devices?system.instance_type=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# dashboards
$sql = "DELETE FROM dashboards WHERE name = 'Cloud Dashboard' and `edited_by` = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$dashboards_options = '{"layout":"3x2","widget_count":6,"widgets":[{"position":"1","size":"1","widget_id":"' . $widget_1 . '"},{"position":"2","size":"1","widget_id":"' . $widget_2 . '"},{"position":"3","size":"1","widget_id":"' . $widget_3 . '"},{"position":"4","size":"1","widget_id":"' . $widget_4 . '"},{"position":"5","size":"1","widget_id":"' . $widget_5 . '"},{"position":"6","size":"1","widget_id":"' . $widget_6 . '"}]}';
$sql = "INSERT INTO `dashboards` VALUES (NULL, 'Cloud Dashboard', 1, 'org', 0, 'The details of your cloud infrastructure', 'n', ?, 'system', '2000-01-01 00:00:00')";
$data = array($dashboards_options);
$this->db->query($sql, $data);
$this->log_db($this->db->last_query());


# set our versions
$sql = "UPDATE `configuration` SET `value` = '20180925' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.3.0' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.3.0 completed");
$this->config->config['internal_version'] = '20180925';
$this->config->config['display_version'] = '2.3.0';
