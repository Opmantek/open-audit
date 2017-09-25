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

$this->log_db('Upgrade database to 2.0.8 commenced');

# Attributes
$sql = "DELETE FROM `attributes` WHERE `resource` = 'locations' and `type` = 'type'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Airforce','Airforce','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Airport','Airport','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Ambulance Station','Ambulance Station','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Army','Army','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Cloud','Cloud','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Conference Center','Conference Center','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Court House','Court House','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Data Center','Data Center','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Depot','Depot','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','District','District','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Doctors Office','Doctors Office','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Embassy','Embassy','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Factory','Factory','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Fire Station','Fire Station','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Guard','Guard','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Head Office','Head Offic','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','High School','High School','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Hospital','Hospital','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Hotel','Hotel','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','House','House','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Library','Library','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Light House','Light House','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Marina','Marina','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Mobile Phone Tower','Mobile Phone Tower','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Motel','Motel','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Navy','Navy','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Newsagent','Newsagent','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Nursing Home','Nursing Home','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Observatory','Observatory','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Office','Office','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Oil Rig','Oil Rig','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Police','Police','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Power Plant','Power Plant','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Power Substation','Power Substation','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Prison','Prison','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Radio Station','Radio Station','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Regional','Regional','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Resort','Resort','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Retail','Retail','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','School','School','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Security','Security','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Stadium','Stadium','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Train Station','Train Station','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Travel Agency','Travel Agency','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','TV Station','TV Station','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','University','University','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Warehouse','Warehouse','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Workshop','Workshop','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# system
$this->alter_table('system', 'credentials', "ADD `credentials` TEXT NOT NULL AFTER `collector_uuid`", 'add');

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20170919' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.0.8' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.0.8 completed");
$this->config->config['internal_version'] = '20170919';
$this->config->config['display_version'] = '2.0.8';
