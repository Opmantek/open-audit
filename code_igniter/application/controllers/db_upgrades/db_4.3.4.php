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

UPDATE `configuration` SET `value` = '20220620' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '4.3.4' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 4.3.4 commenced');

$this->alter_table('discoveries', 'cloud_id', "cloud_id int(10) unsigned NOT NULL DEFAULT '0'", "change");

$this->alter_table('licenses', 'end_of_life', "ADD end_of_life date NOT NULL DEFAULT '2000-01-01' AFTER expiry_date", 'add');

$this->alter_table('licenses', 'end_of_service_life', "ADD end_of_service_life date NOT NULL DEFAULT '2000-01-01' AFTER end_of_life", 'add');

$this->alter_table('share', 'users', "users text NOT NULL AFTER `size`", "change");

$this->alter_table('system', 'os_cpe', "ADD `os_cpe` varchar(200) NOT NULL DEFAULT '' AFTER os_version", 'add');

$sql = "UPDATE discoveries SET cloud_id = 0 WHERE type <> 'cloud'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "DELETE FROM `configuration` WHERE name = 'discovery_use_org_id_match'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_use_org_id_match','n','bool','y','system','2000-01-01 00:00:00','When matching a device and assign_devices_to_org is set, use that attribute in the relevant match rules.')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20220620' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "UPDATE `configuration` SET `value` = '4.3.4' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->log_db('Upgrade database to 4.3.4 completed');
$this->config->config['internal_version'] = '20220620';
$this->config->config['display_version'] = '4.3.4';