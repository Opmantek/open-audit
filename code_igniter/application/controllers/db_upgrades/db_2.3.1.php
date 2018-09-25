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

$this->log_db('Upgrade database to 2.3.1 commenced');

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

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Patch Panel','patch panel','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Monitor','monitor','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Shelf','shelf','system','2000-01-01 00:00:00')";
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

// $sql = "INSERT INTO `buildings` VALUES (1, 'Default Building', 1, 1, 'The default entry for a building at this location.', '', '', '', 'system', '2000-01-01 00:00:00')";
// $this->db->query($sql);
// $this->log_db($this->db->last_query());


# floors
$sql = "DROP TABLE IF EXISTS `floors`";
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

// $sql = "INSERT INTO `floors` VALUES (1, 'Ground Floor', 1, 1, 'The default entry for a floor at this location.', '', '', '', 'system', '2000-01-01 00:00:00')";
// $this->db->query($sql);
// $this->log_db($this->db->last_query());


# racks
$sql = "DROP TABLE IF EXISTS `racks`";
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
  `physical_height` int(10) unsigned NOT NULL DEFAULT '1',
  `physical_width` int(10) unsigned NOT NULL DEFAULT '1',
  `physical_depth` int(10) unsigned NOT NULL DEFAULT '1',
  `weight_empty` int(10) unsigned NOT NULL DEFAULT '1',
  `weight_current` int(10) unsigned NOT NULL DEFAULT '1',
  `weight_max` int(10) unsigned NOT NULL DEFAULT '1',
  `ru_start` int(10) unsigned NOT NULL DEFAULT '1',
  `ru_height` int(10) unsigned NOT NULL DEFAULT '1',
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
  CONSTRAINT `racks_row_id` FOREIGN KEY (`row_id`) REFERENCES `rows` (`id`) ON DELETE CASCADE,
  CONSTRAINT `racks_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());


# rack devices
$sql = "DROP TABLE IF EXISTS `rack_devices`";
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
  `type` varchar(50) NOT NULL DEFAULT 'unknown',
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `rack_id` (`rack_id`),
  CONSTRAINT `rack_devices_rack_id` FOREIGN KEY (`rack_id`) REFERENCES `racks` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rack_devices_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());


# rooms
$sql = "DROP TABLE IF EXISTS `rooms`";
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

// $sql = "INSERT INTO `rooms` VALUES (1, 'Default', 1, 1, 'The default entry for a room at this location.', '', '', '', 'system', '2000-01-01 00:00:00')";
// $this->db->query($sql);
// $this->log_db($this->db->last_query());


# rows
$sql = "DROP TABLE IF EXISTS `rows`";
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
  CONSTRAINT `rows_room_id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rows_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

// $sql = "INSERT INTO `rows` VALUES (1, 'Default', 1, 1, 'The default entry for a row at this location.', '', '', '', 'system', '2000-01-01 00:00:00')";
// $this->db->query($sql);
// $this->log_db($this->db->last_query());

# Roles
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
$query = $this->db->query($select);
$this->log_db($this->db->last_query());
$result = $query->result();
foreach ($result as $location) {
    $location_id = intval($location->id);
    $org_id = intval($location->org_id);

    $sql = "INSERT INTO `buildings` VALUES (NULL, 'Default Building', ?, ?, 'The default entry for a building at this location.', '', '', '', 'system', NOW())";
    $data_array = array($org_id, $location_id);
    $building_id = intval($this->run_sql($sql, $data_array));
    $this->log_db($this->db->last_query());

    $sql = "INSERT INTO `floors` VALUES (NULL, 'Ground Floor', ?, ?, 'The default entry for a floor at this location.', '', '', '', 'system', NOW())";
    $data_array = array($org_id, $building_id);
    $floor_id = intval($this->run_sql($sql, $data_array));
    $this->log_db($this->db->last_query());

    $sql = "INSERT INTO `rooms` VALUES (NULL, 'Default', ?, ?, 'The default entry for a room at this location.', '', '', '', 'system', NOW())";
    $data_array = array($org_id, $floor_id);
    $room_id = intval($this->run_sql($sql, $data_array));
    $this->log_db($this->db->last_query());

    $sql = "INSERT INTO `rows` VALUES (NULL, 'Default', ?, ?, 'The default entry for a row at this location.', '', '', '', 'system', NOW())";
    $data_array = array($org_id, $room_id);
    $this->run_sql($sql, $data_array);
    $this->log_db($this->db->last_query());
}

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20180901' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.3.1' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.3.1 completed");
$this->config->config['internal_version'] = '20180901';
$this->config->config['display_version'] = '2.3.1';
