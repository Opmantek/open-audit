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
DELETE FROM configuration WHERE name = 'oae_location';

INSERT INTO `configuration` VALUES (NULL,'oae_location','','text','n','system','2000-01-01 00:00:00','The non-default location of Open-AudIT Enterprise.');

ALTER TABLE connections CHANGE `name` `name` varchar(200) NOT NULL DEFAULT '';

ALTER TABLE network CHANGE `dhcp_lease_obtained` `dhcp_lease_obtained` varchar(30) NOT NULL DEFAULT '';

ALTER TABLE network CHANGE `dhcp_lease_expires` `dhcp_lease_expires` varchar(30) NOT NULL DEFAULT '';

ALTER TABLE system ADD end_of_production date NOT NULL DEFAULT '2000-01-01' AFTER end_of_service;

ALTER TABLE system ADD maintenance_expires date NOT NULL DEFAULT '2000-01-01' AFTER warranty_type;

ALTER TABLE system ADD warranty_status VARCHAR(100) NOT NULL DEFAULT '' AFTER warranty_type;

UPDATE `configuration` SET `value` = '20200810' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '3.4.1' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 3.4.1 commenced');

$sql = "DELETE FROM configuration WHERE name = 'oae_location'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `configuration` VALUES (NULL,'oae_location','','text','n','system','2000-01-01 00:00:00','The non-default location of Open-AudIT Enterprise.')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->alter_table('connections', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

$this->alter_table('network', 'dhcp_lease_obtained', "`dhcp_lease_obtained` varchar(30) NOT NULL DEFAULT ''");

$this->alter_table('network', 'dhcp_lease_expires', "`dhcp_lease_expires` varchar(30) NOT NULL DEFAULT ''");

$this->alter_table('system', 'end_of_production', "ADD `end_of_production` date NOT NULL DEFAULT '2000-01-01' AFTER `end_of_service`", 'add');

$this->alter_table('system', 'maintenance_expires', "ADD `maintenance_expires` date NOT NULL DEFAULT '2000-01-01' AFTER `warranty_type`", 'add');

$this->alter_table('system', 'warranty_status', "ADD warranty_status VARCHAR(100) NOT NULL DEFAULT '' AFTER warranty_type", 'add');

$sql = "SELECT COUNT(*) FROM users WHERE name = 'nmis'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query() . ';');
$result = $query->result();

if (count($result) == 0) {
	$sql = "INSERT INTO `users` VALUES (null, 'nmis', 1, '', 'NMIS', '', '[\"admin\",\"org_admin\"]', '[1]', 'en', 'y', '', 'user', 1, '', '', 'system', '2000-01-01 00:00:00')";
	$this->db->query($sql);
	$this->log_db($this->db->last_query() . ';');
}

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20200810' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "UPDATE `configuration` SET `value` = '3.4.1' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->log_db('Upgrade database to 3.4.1 completed');
$this->config->config['internal_version'] = '20200810';
$this->config->config['display_version'] = '3.4.1';
