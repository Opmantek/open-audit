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

$this->log_db('Upgrade database to 2.1 commenced');

# licenses
$this->alter_table('licenses', 'software_name', "ADD `software_name` TEXT NOT NULL AFTER `match_string`", 'add');
$this->alter_table('licenses', 'software_version', "ADD `software_version` varchar(200) NOT NULL DEFAULT '' AFTER `software_name`", 'add');
$this->alter_table('licenses', 'sql', "ADD `sql` TEXT NOT NULL AFTER `software_version`", 'add');

# oa_asset_select
$this->drop_table('oa_asset_select');

# queries
$sql = "DELETE FROM `queries` WHERE `name` = 'MS Office' AND `sql` = 'SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = \'y\' AND software.name LIKE \'Microsoft Office%\') LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `queries` WHERE `name` = 'MS Office' AND `sql` = 'SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.name AS `system.name`, system.domain AS `system.domain`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name` FROM software LEFT JOIN system ON (software.system_id = system.id) LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter AND software.current = \'y\' AND software.name LIKE \'Microsoft Office%\' AND (software.name LIKE \'%Starter%\' OR software.name LIKE \'%Basic%\' OR software.name LIKE \'%Personal%\' OR software.name LIKE \'%Home%\' OR software.name LIKE \'%Student%\' OR software.name LIKE \'%Business%\' OR software.name LIKE \'%Standard%\' OR software.name LIKE \'%Ultimate%\' OR software.name LIKE \'%Enterprise%\' OR software.name LIKE \'%Professional%\' OR software.name LIKE \'%Professional Plus%\') AND (software.name LIKE \'%2003%\' OR software.name LIKE \'%2007%\' OR software.name LIKE \'%2010%\' OR software.name LIKE \'%2013%\' OR software.name LIKE \'%2016%\')'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'MS Office','Software','y','MS Office installations.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.name AS `system.name`, system.domain AS `system.domain`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name` FROM software LEFT JOIN system ON (software.system_id = system.id) LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter AND software.current = \'y\' AND software.name LIKE \'Microsoft Office%\' AND (software.name LIKE \'%Starter%\' OR software.name LIKE \'%Basic%\' OR software.name LIKE \'%Personal%\' OR software.name LIKE \'%Home%\' OR software.name LIKE \'%Student%\' OR software.name LIKE \'%Business%\' OR software.name LIKE \'%Standard%\' OR software.name LIKE \'%Ultimate%\' OR software.name LIKE \'%Enterprise%\' OR software.name LIKE \'%Professional%\' OR software.name LIKE \'%Professional Plus%\') AND (software.name LIKE \'%2003%\' OR software.name LIKE \'%2007%\' OR software.name LIKE \'%2010%\' OR software.name LIKE \'%2013%\' OR software.name LIKE \'%2016%\')','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# system
$this->alter_table('system', 'environment', "`environment` varchar(100) NOT NULL DEFAULT 'production'");
$this->alter_table('system', 'class', "`class` varchar(100) NOT NULL DEFAULT ''");

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20171225' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.1' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.1 completed");
$this->config->config['internal_version'] = '20171225';
$this->config->config['display_version'] = '2.1';
