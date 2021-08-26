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

UPDATE `configuration` SET `value` = '20210830' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '4.2.1' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 4.2.1 commenced');

if ($this->db->field_exists('comment', 'task')) {
    $this->alter_table('task', 'comment', "DROP `comment`", 'drop');
}
$this->alter_table('task', 'comment', "ADD comment TEXT NOT NULL AFTER runas", 'add');

$sql = "DROP TABLE IF EXISTS usb";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "CREATE TABLE `usb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `availability` varchar(100) NOT NULL DEFAULT '',
  `config_manager_error_code` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `device` varchar(200) NOT NULL DEFAULT '',
  `pnp_class` varchar(100) NOT NULL DEFAULT '',
  `present` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `usb_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20210830' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "UPDATE `configuration` SET `value` = '4.2.1' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->log_db('Upgrade database to 4.2.1 completed');
$this->config->config['internal_version'] = '20210830';
$this->config->config['display_version'] = '4.2.1';
