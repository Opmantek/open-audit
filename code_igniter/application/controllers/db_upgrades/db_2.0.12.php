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

# attachment
$this->alter_table('attachment', 'user_id', "DROP user_id", 'drop');

# bios
$this->alter_table('bios', 'revision', "ADD `revision` varchar(100) NOT NULL DEFAULT '' AFTER `version`", 'add');
$this->alter_table('bios', 'date', "ADD `date` varchar(100) NOT NULL DEFAULT '' AFTER `revision`", 'add');

# locations
$sql = "DELETE FROM `attributes` WHERE `resource` = 'locations' AND `type` = 'type' AND `name` = 'Head Office'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Head Office','Head Office','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# motherboard
$this->alter_table('motherboard', 'version', "ADD `version` varchar(100) NOT NULL DEFAULT '' AFTER `serial`", 'add');

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20171025' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.0.12' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.0.12 completed");
$this->config->config['internal_version'] = '20171025';
$this->config->config['display_version'] = '2.0.12';
