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

$this->log_db('Upgrade database to 2.2.6 commenced');

# locations tables
$this->drop_table('rows');
$this->drop_table('rooms');
$this->drop_table('floors');
$this->drop_table('buildings');

$sql = "CREATE TABLE `buildings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `location_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `location_id` (`location_id`),
  KEY `org_id` (`org_id`),
  CONSTRAINT `buildings_location_id` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `buildings_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());


$sql = "CREATE TABLE `floors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `building_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `building_id` (`building_id`),
  KEY `org_id` (`org_id`),
  CONSTRAINT `floors_building_id` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE,
  CONSTRAINT `floors_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());


$sql = "CREATE TABLE `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `floor_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `floor_id` (`floor_id`),
  KEY `org_id` (`org_id`),
  CONSTRAINT `rooms_floor_id` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rooms_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());


$sql = "CREATE TABLE `rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `room_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  KEY `org_id` (`org_id`),
  CONSTRAINT `rows_room_id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rows_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "SELECT * FROm `locations`";
$query = $this->db->query($sql);
$result = $query->result();
$this->log_db($this->db->last_query());
foreach ($result as $row) {
	$sql = "INSERT INTO `buildings` VALUES (NULL, 'Default', ?, ?, 'The default entry for a building at this location.', '', '', 'system', '2000-01-01 00:00:00')";
	$data = array($row->org_id, $row->id);
	$this->db->query($sql, $data);
	$building_id = $this->db->insert_id();
	$this->log_db($this->db->last_query());

	$level = 'Ground Floor';
	$description = 'The default entry for a floor at this location.';
	if (!empty($row->level)) {
		$level = $row->level;
		$description = '';
	}
	$sql = "INSERT INTO `floors` VALUES (NULL, ?, ?, ?, ?, '', '', 'system', '2000-01-01 00:00:00')";
	$data = array($level, $row->org_id, $building_id, $description);
	$this->db->query($sql, $data);
	$floor_id = $this->db->insert_id();
	$this->log_db($this->db->last_query());

	$room = 'Default';
	$description = 'The default entry for a room at this location.';
	if (!empty($row->room)) {
		$room = $row->room;
		$description = '';
	}
	if ($room == 'Default' and !empty($row->suite)) {
		$room = $row->suite;
		$description = '';
	}
	$sql = "INSERT INTO `rooms` VALUES (NULL, ?, ?, ?, ?, '', '', 'system', '2000-01-01 00:00:00')";
	$data = array($room, $row->org_id, $floor_id, $description);
	$this->db->query($sql, $data);
	$room_id = $this->db->insert_id();
	$this->log_db($this->db->last_query());


	$description = 'The default entry for a row at this location.';
	$sql = "INSERT INTO `rows` VALUES (NULL, 'Default', ?, ?, ?, '', '', 'system', '2000-01-01 00:00:00')";
	$data = array($row->org_id, $room_id, $description);
	$this->db->query($sql, $data);
	$this->log_db($this->db->last_query());
}


# set our versions
$sql = "UPDATE `configuration` SET `value` = '20180710' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.2.6' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.2.6 completed");
$this->config->config['internal_version'] = '20180710';
$this->config->config['display_version'] = '2.2.6';
