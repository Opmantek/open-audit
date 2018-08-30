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

$this->log_db('Upgrade database to 2.2.7 commenced');

# Configuration
$sql = "UPDATE `configuration` SET `description` = 'Should we match a device based mac address even if its a known likely duplicate from VMware.' WHERE `name` = 'match_mac_vmware'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE name = 'discovery_ssh_timeout'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_ssh_timeout','300','number','y','system','2000-01-01 00:00:00','Timeout duration (in seconds) when discovering a device via SSH.')";
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
  `status` varchar(50) NOT NULL DEFAULT 'created',
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# Discoveries
$this->alter_table('discoveries', 'options', "ADD `options` text NOT NULL AFTER `other`", 'add');

# Locations
$this->alter_table('locations', 'description', "ADD `description` text NOT NULL AFTER `org_id`", 'add');
$this->alter_table('locations', 'external_ident', "ADD `external_ident` varchar(200) NOT NULL DEFAULT '' AFTER `picture`", 'add');
$this->alter_table('locations', 'options', "ADD `options` text NOT NULL AFTER `external_ident`", 'add');

# Network
$this->alter_table('network', 'speed', "`speed` bigint(20) unsigned NOT NULL DEFAULT '0' AFTER `connection_status`");

# Networks
$this->alter_table('networks', 'external_ident', "ADD `external_ident` varchar(200) NOT NULL DEFAULT '' AFTER `description`", 'add');
$this->alter_table('networks', 'options', "ADD `options` text NOT NULL AFTER `external_ident`", 'add');

# Roles
$this->load->model('m_roles');
$this->m_roles->update_permissions('org_admin', 'clouds', 'crud');
$this->m_roles->update_permissions('reporter', 'clouds', 'r');
$this->m_roles->update_permissions('user', 'clouds', 'r');

# Summaries
$sql = "UPDATE `summaries` SET org_id = 1, menu_category = 'Device', menu_display = 'y' WHERE name = 'Device Classes' AND org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET org_id = 1, menu_category = 'Device', menu_display = 'y' WHERE name = 'Device Status' AND org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET org_id = 1, menu_category = 'Device', menu_display = 'y' WHERE name = 'Device Types' AND org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET org_id = 1, menu_category = 'Network', menu_display = 'y' WHERE name = 'DNS Domains' AND org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET org_id = 1, menu_category = 'Device', menu_display = 'y' WHERE name = 'Form Factors' AND org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET org_id = 1, menu_category = 'Device', menu_display = 'y' WHERE name = 'Manufacturers' AND org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET org_id = 1, menu_category = 'Device', menu_display = 'y' WHERE name = 'Operating System Families' AND org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET org_id = 1, menu_category = 'Server', menu_display = 'y' WHERE name = 'Server Types' AND org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET org_id = 1, menu_category = 'Software', menu_display = 'y' WHERE name = 'Services' AND org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET org_id = 1, menu_category = 'Software', menu_display = 'y' WHERE name = 'Software Keys' AND org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET org_id = 1, menu_category = 'Network', menu_display = 'y', name = 'Active Directory OUs' WHERE (name = 'Active Directory OU\'s' or name = 'Active Directory OUs') AND org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET org_id = 1, menu_category = 'Device', menu_display = 'y' WHERE name = 'Operating System Names' AND org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `summaries` SET org_id = 1 WHERE org_id = 0";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# widgets
$sql = "DELETE FROM `widgets` WHERE id = 11";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (11,'End of Warranty (0-2+ Years)',1,'','pie','','','','','','','',0,'','SELECT if ( system.warranty_expires = \'2000-01-01\', \'unknown\', ( if ( system.warranty_expires < DATE(NOW()), \'expired\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 730 day), \'2 Years or more\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 365 day), \'1-2 years\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 270 day), \'270-365 days\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 180 day), \'180-270 days\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 90 day), \'90-180 days\', \'Less than 90 Days\' ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, if ( system.warranty_expires = \'2000-01-01\', \'system.warranty_expires=2000-01-01\', ( if ( system.warranty_expires < DATE(NOW()), CONCAT(\'system.warranty_expires=<\', DATE(NOW())), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 730 day), CONCAT(\'system.warranty_expires=>\', DATE(NOW() + INTERVAL 730 day)), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 365 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 730 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 365 day)), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 270 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 365 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 270 day), \'&system.warranty_expires=!=2000-01-01\'), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 180 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 270 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 180 day), \'&system.warranty_expires=!=2000-01-01\'), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 180 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 90 day), \'&system.warranty_expires=!=2000-01-01\'), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 90 day), \'&system.warranty_expires=>\', DATE(NOW()), \'&system.warranty_expires=!=2000-01-01\' ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name` ORDER BY system.warranty_expires','devices?@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `widgets` WHERE id = 32";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (32,'Devices Not Seen (1-7+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( DATE(system.last_seen) = \"2000-01-01\", \"unknown\", ( IF ( DATE(system.last_seen) < DATE(NOW() - INTERVAL 6 day), \"More than 7 Days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 6 day), \"7 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 5 day), \"6 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 4 day), \"5 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 3 day), \"4 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 2 day), \"3 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 1 day), \"2 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 0 day), \"1 day\", \"\") ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( DATE(system.last_seen) = \"2000-01-01\", \"system.last_seen=2000-01-01\", ( IF ( DATE(system.last_seen) < DATE(NOW() - INTERVAL 6 day), CONCAT(\"system.last_seen=<\", DATE(NOW() - INTERVAL 6 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 6 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 6 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 5 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 5 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 4 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 4 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 3 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 3 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 2 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 2 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 1 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 1 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 0 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 0 day)), \"\" ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name` ORDER BY system.last_seen','devices?@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT IF ( system.purchase_date = \'2000-01-01\', \'unknown\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 3 year), \'3+ Years\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 2 year), \'2-3 Years\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 1 year), \'1-2 Years\', \'Less Than 1 Year\' ) ) ) ) ) ) ) AS `my_name`, IF ( system.purchase_date = \'2000-01-01\', \'system.purchase_date=2000-01-01\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 3 year), CONCAT(\'system.purchase_date=<\', DATE(NOW() - INTERVAL 3 year), \'&system.purchase_date=>2000-01-01\'), ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 2 year), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 3 year), \'&system.purchase_date=<\', DATE(NOW() - INTERVAL 2 year)), ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 1 year), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 2 year), \'&system.purchase_date=<\', DATE(NOW() - INTERVAL 1 year)), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 1 year)) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name` ORDER BY system.purchase_date' WHERE name = 'Device Age (0-3+ Years)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20180810' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.2.7' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.2.7 completed");
$this->config->config['internal_version'] = '20180810';
$this->config->config['display_version'] = '2.2.7';
