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

ALTER TABLE `user` ADD `password_disabled` varchar(20) NOT NULL DEFAULT '' AFTER `password_required`;

ALTER TABLE `user` ADD `keys` text NOT NULL AFTER `status`;

ALTER TABLE `user` ADD `home` varchar(255) NOT NULL DEFAULT '' AFTER `keys`;

ALTER TABLE `user` ADD `shell` varchar(255) NOT NULL DEFAULT '' AFTER `home`;

DELETE FROM configuration WHERE `name` = 'device_delete_prompt';

INSERT INTO `configuration` VALUES (NULL, 

UPDATE `configuration` SET `value` = '20191010' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '3.3.0' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 3.3.0 commenced');

$this->alter_table('user', 'password_disabled', "ADD `password_disabled` varchar(20) NOT NULL DEFAULT '' AFTER `password_required`", 'add');

$this->alter_table('user', 'keys', "ADD `keys` text NOT NULL AFTER `status`", 'add');

$this->alter_table('user', 'home', "ADD `home` text NOT NULL AFTER `keys`", 'add');

$this->alter_table('user', 'shell', "ADD `shell` text NOT NULL AFTER `home`", 'add');

$sql = "DELETE FROM configuration WHERE `name` = 'device_delete_prompt'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'device_auto_delete', 'n', 'bool', 'y', 'system', '2000-01-01 00:00:00','Should we delete the device data completely from the database when the device status is set to Deleted.')";
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
