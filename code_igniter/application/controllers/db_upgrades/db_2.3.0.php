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

$this->log_db('Upgrade database to 2.3.0 commenced');

# Configuration
$sql = "UPDATE `configuration` SET `description` = 'Should we match a device based mac address even if its a known likely duplicate from VMware.' WHERE `name` = 'match_mac_vmware'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# Clouds
$sql = "DROP TABLE IF EXISTS `clouds`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `clouds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `type` enum('amazon','microsoft','google','digitalocean','') NOT NULL DEFAULT '',
  `credentials` text NOT NULL,
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# Locations
$this->alter_table('locations', 'description', "ADD `description` text NOT NULL AFTER `org_id`", 'add');

# Network
$this->alter_table('network', 'speed', "`speed` bigint(20) unsigned NOT NULL DEFAULT '0' AFTER `connection_status`");

# Roles
$this->load->model('m_roles');
$this->m_roles->update_permissions('org_admin', 'clouds', 'crud');
$this->m_roles->update_permissions('reporter', 'clouds', 'r');
$this->m_roles->update_permissions('user', 'clouds', 'r');

# Summaries
$sql = "UPDATE `summaries` SET `name` = 'Active Directory OUs' WHERE `name` = 'Active Directory OU\'s'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20180810' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.3.0' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.3.0 completed");
$this->config->config['internal_version'] = '20180810';
$this->config->config['display_version'] = '2.3.0';
