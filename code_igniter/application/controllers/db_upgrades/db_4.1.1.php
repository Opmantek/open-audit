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
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************
*
**/

/*

DROP INDEX `audit_log_system_id_timestamp` ON `audit_log`;

CREATE INDEX `audit_log_system_id_timestamp` ON audit_log (`system_id`,`timestamp`)

DELETE FROM queries WHERE name = 'opAddress';

INSERT INTO `queries` VALUES(NULL,1,'opAddress','Other','y','The default query for integration with opAddress.','SELECT system.id AS `system.id`, system.ip AS `system.ip`, system.hostname AS `system.hostname`, system.sysName AS `system.sysName`, system.fqdn AS `system.fqdn`, system.dns_fqdn AS `system.dns_fqdn`, system.last_seen AS `system.last_seen`, network.speed AS `network.speed`, network.connection AS `network.connection`, ip.ip AS `ip.ip`, ip.mac AS `ip.mac`,ip.netmask AS `ip.netmask`, ip.network AS `ip.network`, ip.version AS `ip.version`, locations.name AS `locations.name` FROM ip LEFT JOIN system ON (ip.system_id = system.id AND ip.current = \'y\') LEFT JOIN network ON (ip.net_index = network.net_index AND ip.mac = network.mac) LEFT JOIN locations ON (system.location_id = locations.id) WHERE @filter','','system','2000-01-01 00:00:00');

UPDATE `configuration` SET `value` = '20210512' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '4.1.1' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 4.1.1 commenced');

$this->drop_key('audit_log', 'audit_log_system_id_timestamp');

$sql = 'CREATE INDEX `audit_log_system_id_timestamp` ON audit_log (`system_id`,`timestamp`)';
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "DELETE FROM queries WHERE name = 'opAddress'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `queries` VALUES(NULL,1,'opAddress','Other','y','The default query for integration with opAddress.','SELECT system.id AS `system.id`, system.ip AS `system.ip`, system.hostname AS `system.hostname`, system.sysName AS `system.sysName`, system.fqdn AS `system.fqdn`, system.dns_fqdn AS `system.dns_fqdn`, system.last_seen AS `system.last_seen`, network.speed AS `network.speed`, network.connection AS `network.connection`, ip.ip AS `ip.ip`, ip.mac AS `ip.mac`,ip.netmask AS `ip.netmask`, ip.network AS `ip.network`, ip.version AS `ip.version`, locations.name AS `locations.name` FROM ip LEFT JOIN system ON (ip.system_id = system.id AND ip.current = \'y\') LEFT JOIN network ON (ip.net_index = network.net_index AND ip.mac = network.mac) LEFT JOIN locations ON (system.location_id = locations.id) WHERE @filter','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20210512' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "UPDATE `configuration` SET `value` = '4.1.1' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->log_db('Upgrade database to 4.1.1 completed');
$this->config->config['internal_version'] = '20210512';
$this->config->config['display_version'] = '4.1.1';
