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

$this->log_db('Upgrade database to 2.1.1 commenced');

# Rmove an unused configutration item
$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_nmap_os'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# Attributes
$sql = "DELETE FROM `attributes` WHERE `resource` = 'orgs'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Agency','agency','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Association','association','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Authority','authority','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Board','board','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Body','body','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Bureau','bureau','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Business','business','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Centre','centre','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Charity','charity','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Commission','commission','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Committee','committee','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Corporation','corporation','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Council','council','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Court','court','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Department','department','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Directorate','directorate','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Division','division','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Foundation','foundation','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Government Owned Corporation','government owned corporation','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Government','government','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Group','group','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Institute','institute','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Office','office','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Ombudsman','ombudsman','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Organisation','organisation','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Project','project','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Regulator','regulator','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Scheme','scheme','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Section','section','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Service','service','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Tribunal','tribunal','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Trust','trust','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# Orgs type
$this->alter_table('orgs', 'type', "ADD `type` varchar(100) NOT NULL DEFAULT 'organisation' AFTER `description`", 'add');

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20180105' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.1.1' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.1.1 completed");
$this->config->config['internal_version'] = '20180105';
$this->config->config['display_version'] = '2.1.1';
