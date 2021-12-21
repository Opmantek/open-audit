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


UPDATE `configuration` SET `value` = '2021112' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '4.3.0' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 4.3.0 commenced');

$sql = "DROP TABLE IF EXISTS certificate";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "CREATE TABLE `certificate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `issuer` text NOT NULL,
  `valid_from_raw` varchar(100) NOT NULL DEFAULT '',
  `valid_from` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `valid_to_raw` varchar(100) NOT NULL DEFAULT '',
  `valid_to` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `encryption` varchar(100) NOT NULL DEFAULT '',
  `algorithm` varchar(100) NOT NULL DEFAULT '',
  `version` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `certificate_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "DELETE FROM configuration WHERE name = 'create_change_log_certificate'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_certificate','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the Certificate table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "DELETE FROM configuration WHERE name = 'delete_noncurrent_certificate'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_certificate','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current Certificate data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

if ($this->db->field_exists('certificates', 'server')) {
    $this->alter_table('server', 'certificates', "DROP `certificates`", 'drop');
}
$this->alter_table('server', 'certificates', "ADD certificates text NOT NULL AFTER port", 'add');

$sql = "DELETE FROM queries WHERE name = 'Expiring Certificates'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Expiring Certificates','Server','y','Certificates expiring between today - 1 days and today + 30 days','SELECT system.id AS `system.id`, system.name AS `system.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN system ON (certificate.system_id = system.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to > DATE(NOW() - INTERVAL 1 DAY) AND certificate.valid_to < DATE(NOW() + INTERVAL 30 day)','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "DELETE FROM queries WHERE name = 'Expiring Certificates (action immediately)'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Expiring Certificates (action immediately)','Server','y','Certificates expiring in the next 8 days','SELECT system.id AS `system.id`, system.name AS `system.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN system ON (certificate.system_id = system.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to > NOW() AND certificate.valid_to < DATE(NOW() + INTERVAL 8 day)','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "DELETE FROM queries WHERE name = 'Expiring Certificates (action soon)'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Expiring Certificates (action soon)','Server','y','Certificates expiring between 8 and 32 days','SELECT system.id AS `system.id`, system.name AS `system.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN system ON (certificate.system_id = system.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to > DATE(NOW() + INTERVAL 8 DAY) AND certificate.valid_to < DATE(NOW() + INTERVAL 32 day)','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "DELETE FROM queries WHERE name = 'Expiring Certificates (action later)'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Expiring Certificates (action later)','Server','y','Certificates expiring between 32 and 92 days','SELECT system.id AS `system.id`, system.name AS `system.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN system ON (certificate.system_id = system.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to > DATE(NOW() + INTERVAL 32 DAY) AND certificate.valid_to < DATE(NOW() + INTERVAL 92 day)','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "DELETE FROM queries WHERE name = 'Expired Certificates'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Expired Certificates','Server','y','Expired certificates','SELECT system.id AS `system.id`, system.name AS `system.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN system ON (certificate.system_id = system.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to < DATE(NOW())','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

if ($this->db->field_exists('other', 'discoveries')) {
    $this->alter_table('discoveries', 'other', "DROP `other`", 'drop');
}

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
  `availability` varchar(100) NOT NULL DEFAULT '',
  `class` varchar(100) NOT NULL DEFAULT '',
  `config_manager_error_code` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `device` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `present` varchar(100) NOT NULL DEFAULT '',
  `serial` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `usb_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "DELETE FROM configuration WHERE name = 'create_change_log_usb'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_usb','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the USB table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "DELETE FROM configuration WHERE name = 'delete_noncurrent_usb'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_usb','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current USB data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

if ($this->db->field_exists('expiry_date', 'licenses')) {
    $this->alter_table('licenses', 'expiry_date', "DROP `expiry_date`", 'drop');
}
$this->alter_table('licenses', 'expiry_date', "ADD expiry_date DATE NOT NULL DEFAULT '2000-01-01' AFTER software_version", 'add');

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20211112' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "UPDATE `configuration` SET `value` = '4.3.0' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->log_db('Upgrade database to 4.3.0 completed');
$this->config->config['internal_version'] = '20211112';
$this->config->config['display_version'] = '4.3.0';
