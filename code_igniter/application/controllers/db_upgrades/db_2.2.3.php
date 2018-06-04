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

$this->log_db('Upgrade database to 2.2.3 commenced');

# networks
$this->alter_table('networks', 'type', "ADD `type` enum('Personal Area Network', 'Local Area Network', 'Wireless Local Area Network', 'Campus Area Network', 'Metropolitan Area Network', 'Wide Area Network', 'Storage-Area Network', 'System-Area Network', 'Passive Optical Local Area Network', 'Enterprise Private Network', 'Virtual Private Network') NOT NULL DEFAULT 'Local Area Network'", 'add');

# scripts
$sql = "UPDATE `scripts` SET `options` = '{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}' WHERE                         `options` = '{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/system\\/add_system\",\"debugging\":1}'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# system
$this->alter_table('system', 'status', "`status` varchar(100) NOT NULL DEFAULT 'production' AFTER `printer_duplex`");

$this->alter_table('system', 'type', "`type` varchar(50) NOT NULL DEFAULT 'unknown' AFTER `description`");

$sql = "UPDATE `system` SET `status` = 'production' WHERE `status` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `system` SET `environment` = 'production' WHERE `environment` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `system` SET `type` = 'unknown' WHERE `type` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `system` SET `oae_manage` = 'y' WHERE `oae_manage` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `system` SET `nmis_manage` = 'y' WHERE `nmis_manage` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `system` SET `location_id` = 1 WHERE `location_id` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `system` SET `org_id` = 1 WHERE `org_id` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# users
$this->alter_table('users', 'access_token', "ADD `access_token` TEXT NOT NULL AFTER `dashboard_id`", 'add');

# widgets
$sql = "DELETE FROM `widgets` WHERE `name` = 'Devices by Org'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Org',1,'Devies assigned by Org','pie','','','','','Devices','','',0,'','SELECT orgs.name as `name`, orgs.id AS `description`, count(system.id) AS `count` FROM orgs LEFT JOIN system ON (orgs.id = system.org_id) WHERE @filter GROUP BY orgs.name','devices?system.org_id=@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `widgets` WHERE `name` = 'Device Age (0-3+ Years)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Device Age (0-3+ Years)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.purchase_date = \'2000-01-01\', \'unknown\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 3 year), \'3+ Years\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 2 year), \'2-3 Years\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 1 year), \'1-2 Years\', \'Less Than 1 Year\' ) ) ) ) ) ) ) AS `my_name`, IF ( system.purchase_date = \'2000-01-01\', \'system.purchase_date=2000-01-01\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 3 year), CONCAT(\'system.purchase_date=<\', DATE(NOW() - INTERVAL 3 year), \"system.purchase_date=>2001-01-01\"), ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 2 year), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 3 year), \'&system.purchase_date=<\', DATE(NOW() - INTERVAL 2 year)), ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 1 year), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 2 year), \'&system.purchase_date=<\', DATE(NOW() - INTERVAL 1 year)), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 1 year)) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name` ORDER BY system.purchase_date','devices?@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices Not Seen (1-7+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( DATE(system.last_seen) = \"2000-01-01\", \"unknown\", ( IF ( DATE(system.last_seen) < DATE(NOW() - INTERVAL 6 day), \"More than 7 Days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 6 day), \"7 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 5 day), \"6 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 4 day), \"5 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 3 day), \"4 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 2 day), \"3 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 1 day), \"2 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 0 day), \"1 day\", \"\") ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( DATE(system.last_seen) = \"2000-01-01\", \"system.last_seen=2000-01-01\", ( IF ( DATE(system.last_seen) < DATE(NOW() - INTERVAL 6 day), CONCAT(\"system.last_seen=<\", DATE(NOW() - INTERVAL 6 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 7 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 7 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 6 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 6 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 5 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 5 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 4 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 4 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 3 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 3 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 2 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 2 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 1 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 1 day)), \"\" ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name` ORDER BY system.last_seen','devices?@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20180625' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.2.3' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.2.3 completed");
$this->config->config['internal_version'] = '20180625';
$this->config->config['display_version'] = '2.2.3';
