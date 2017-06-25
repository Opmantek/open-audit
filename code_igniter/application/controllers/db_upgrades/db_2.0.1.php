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

$this->log_db('Upgrade database to 2.0.1 commenced');

# summaries
$this->alter_table('summaries', 'expose', "`menu_display` enum('y','n') NOT NULL DEFAULT 'y' AFTER `menu_category`");

$sql = = "DELETE FROM `summaries`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (1,'Device Classes',1,'Device','y','system','class','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (2,'Device Status',1,'Device','y','system','status','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (3,'Device Types',1,'Device','y','system','type','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (4,'DNS Domains',1,'Network','y','system','dns_domain','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (5,'Form Factors',1,'Device','y','system','form_factor','system.form_factor,system.class','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (6,'Manufacturers',1,'Device','y','system','manufacturer','system.model','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (7,'Operating System Families',1,'Device','y','system','os_family','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (8,'Server Types',1,'Server','y','server','type','server.name,server.full_name,server.version,server.status','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (9,'Services',1,'Software','y','service','name','service.name,service.state','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (10,'Software',1,'Software','y','software','name','software.name,software.version','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (11,'Software Keys',1,'Software','y','software_key','name','software_key.name,software_key.string,software_key.rel,software_key.edition','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (12,'Active Directory OU\'s',1,'Network','y','windows','active_directory_ou','windows.active_directory_ou,windows.client_site_name','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `summaries` VALUES (13,'Operating System Names',1,'Device','y','system','os_name','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());


# A config item for other Opmantek installed modules
$sql = "INSERT INTO `configuration` VALUES (NULL, 'modules', '', 'n', 'system','2000-01-01 00:00:00', 'The list of installed Opmantek modules.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# A config item for other the commercial application name
$sql = "INSERT INTO `configuration` VALUES (NULL, 'oae_product', 'Open-AudIT Community', 'n', 'system','2000-01-01 00:00:00', 'The name of the installed commercial application.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# Update our URL if it's the default
$sql = "UPDATE `configuration` SET `value` = '/omk/open-audit' WHERE `name` = 'oae_url' and value = '/omk/oae'";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "UPDATE `configuration` SET `value` = '/omk/open-audit/map' WHERE `name` = 'maps_url' and value = '/omk/oae/map'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20170620' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.0.1' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

#$this->db->db_debug = $temp_debug;
$this->log_db("Upgrade database to 2.0.1 completed");
$this->config->config['internal_version'] = '20170620';
$this->config->config['display_version'] = '2.0.1';