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

$this->log_db('Upgrade database to 2.0.12 commenced');

$this->alter_table('queries', 'menu_category', "`menu_category` varchar(200) NOT NULL DEFAULT 'Devices'");

$sql = "DELETE FROM `attributes` WHERE `resource` = 'queries' and `type` = 'menu_category'";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Change','Change','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Device','Device','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Discovery','Discovery','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Hardware','Hardware','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Network','Network','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Other','Other','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Server','Server','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Software','Software','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','User','User','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# VMs
$this->alter_table('vm', 'vm_id', "`vm_ident` varchar(50) NOT NULL DEFAULT ''");
$this->alter_table('vm', 'type', "ADD type varchar(50) NOT NULL DEFAULT '' AFTER `vm_ident`", 'add');

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20171130' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.0.12' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.0.12 completed");
$this->config->config['internal_version'] = '20171130';
$this->config->config['display_version'] = '2.0.12';
