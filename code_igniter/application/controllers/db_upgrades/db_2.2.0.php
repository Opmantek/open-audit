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

$this->log_db('Upgrade database to 2.2.0 commenced');

# configuration
$sql = "UPDATE `configuration` SET `editable` = 'y' WHERE `name` = 'process_netstat_windows_dns'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = 'n' WHERE `name` = 'process_netstat_windows_dns' and `value` = ''";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# credentials
$this->alter_table('credentials', 'type', "`type` enum('aws','basic_auth','cim','ipmi','mysql','netapp','other','snmp','snmp_v3','sql_server','ssh','ssh_key','vmware','web','windows') NOT NULL DEFAULT 'other' AFTER `description`");

# dashboards
$sql = "DROP TABLE IF EXISTS `dashboards`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `dashboards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` enum('default','org','user','') NOT NULL DEFAULT '',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `sidebar` enum('y','n') NOT NULL DEFAULT 'y',
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `dashboards` VALUES (NULL,'Default Dashboard',1,'org',0,'The Default Open-AudIT Dashboard','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"1\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"2\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"3\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"5\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"6\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"2\"}]}','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());


$sql = "INSERT INTO `dashboards` VALUES (NULL,'Purchasing Dashboard',1,'org',0,'Hardware Management','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"11\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"26\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"25\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"8\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"23\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"24\"}]}','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `dashboards` VALUES (NULL,'Network Dashboard',1,'org',0,'Networks and Locations','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"20\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"19\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"15\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"16\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"21\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"22\"}]}','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `dashboards` VALUES (4,'Discovery Dashboard',1,'org',0,'Discovered Devices','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"1\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"2\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"22\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"27\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"28\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"29\"}]}','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());


# scripts
# New HP-UX saudit script
// $sql = "DELETE FROM `scripts` WHERE `name` = 'audit_hpux.sh'";
// $this->db->query($sql);
// $this->log_db($this->db->last_query());

// $sql = "INSERT INTO `scripts` VALUES (NULL, 'audit_hpux.sh', '" . $options . "', 'The default audit HP-UX config.', 'audit_hpux.sh', '', 'system', '2000-01-01 00:00:00')";
// $this->db->query($sql);
// $this->log_db($this->db->last_query());

# fields
$this->drop_key('fields', 'sys_man_additional_fields_group');

# file
#$this->drop_foreign_key('file', 'file_system_id');
#$this->drop_key('file', 'file_files_id');

# print_queue
$this->alter_table('print_queue', 'status', "`status` varchar(100) NOT NULL DEFAULT '' AFTER `type`");

# system
$this->alter_table('system', 'access_details', "DROP access_details", 'drop');

$this->alter_table('system', 'end_of_life', "ADD `end_of_life` date NOT NULL DEFAULT '2000-01-01' AFTER `warranty_type`", 'add');

$this->alter_table('system', 'end_of_service', "ADD `end_of_service` date NOT NULL DEFAULT '2000-01-01' AFTER `end_of_life`", 'add');

$this->alter_table('system', 'asset_tag', "ADD `asset_tag` text NOT NULL AFTER `asset_number`", 'add');

# users
$this->alter_table('users', 'lang', "`lang` enum('cs','de','en','es','fr','pt-br') NOT NULL DEFAULT 'en' AFTER `orgs`");

# widgets
$sql = "DROP TABLE IF EXISTS `widgets`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `widgets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `type` enum('line','pie','') DEFAULT 'line',
  `table` varchar(50) NOT NULL DEFAULT '',
  `primary` varchar(50) NOT NULL DEFAULT '',
  `secondary` varchar(50) NOT NULL DEFAULT '',
  `ternary` varchar(50) NOT NULL DEFAULT '',
  `dataset_title` varchar(200) NOT NULL DEFAULT '',
  `group_by` varchar(50) NOT NULL DEFAULT '',
  `where` text NOT NULL,
  `limit` smallint signed NOT NULL DEFAULT '0',
  `options` text NOT NULL,
  `sql` text NOT NULL,
  `link` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'New Devices Discovered per Day',1,'','line','','system','create','','Devices','','',30,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'New Software Discovered per Day',1,'','line','','software','create','','Software','','',30,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices Not Seen (0-180+ Days)',1,'','pie','','','','','','','',0,'','SELECT IF ( system.last_seen = \"2000-01-01\", \"unknown\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 180 day), \"180 Days or more\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 150 day), \"150-180 days\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 120 day), \"120-150 days\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 90 day), \"90-120 days\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 60 day), \"60-90 days\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 30 day), \"30-60 days\", \"7-30 days\" ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.last_seen = \"2000-01-01\", \"system.last_seen=\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 180 day), CONCAT(\"system.last_seen=<\", DATE(NOW() - INTERVAL 180 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 150 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 180 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 150 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 120 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 150 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 120 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 90 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 120 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 90 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 60 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 90 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 60 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 30 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 60 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 30 day)), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 30 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 7 day))) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter AND DATE(system.last_seen) < DATE(NOW() - INTERVAL 7 day) GROUP BY `my_name` ORDER BY system.last_seen','devices?@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Type',1,'','pie','','system.type','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by OS Family',1,'','pie','','system.os_family','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Manufacturer',1,'','pie','','system.manufacturer','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Software Keys',1,'','pie','','software_key.name','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Status',1,'','pie','','system.status','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Function',1,'','pie','','system.function','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Servers',1,'','pie','','server.name','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'End of Warranty (0-2+ Years)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.warranty_expires = \'2000-01-01\', \'unknown\', ( IF ( system.warranty_expires > DATE(NOW() + INTERVAL 730 day), \'2 Years or more\', ( IF ( system.warranty_expires > DATE(NOW() + INTERVAL 365 day), \'1-2 years\', ( IF ( system.warranty_expires > DATE(NOW() + INTERVAL 270 day), \'270-365 days\', ( IF ( system.warranty_expires > DATE(NOW() + INTERVAL 180 day), \'180-270 days\', ( IF ( system.warranty_expires > DATE(NOW() + INTERVAL 90 day), \'90-180 days\', \'Less than 90 Days\' ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.warranty_expires = \'2000-01-01\', \'system.warranty_expires=2000-01-01\', ( IF ( system.warranty_expires > DATE(NOW() + INTERVAL 730 day), CONCAT(\'system.warranty_expires=>\', DATE(NOW() + INTERVAL 730 day)), ( IF ( system.warranty_expires > DATE(NOW() + INTERVAL 365 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 730 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 365 day)), ( IF ( system.warranty_expires > DATE(NOW() + INTERVAL 270 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 365 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 270 day)), ( IF ( system.warranty_expires > DATE(NOW() + INTERVAL 180 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 270 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 180 day)), ( IF ( system.warranty_expires > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 180 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 90 day)), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 90 day), \'&system.warranty_expires=>\', DATE(NOW()) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name` ORDER BY system.warranty_expires','devices?@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Class',1,'','pie','','system.class','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by DNS Domain',1,'','pie','','system.dns_domain','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by OS Group',1,'','pie','','system.os_group','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Location',1,'','pie','','','','','','','',0,'','SELECT locations.name as `name`, locations.id AS `description`, count(system.id) AS `count` FROM locations LEFT JOIN system ON (locations.id = system.location_id) WHERE @filter GROUP BY locations.name','devices?system.location_id=@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Collector',1,'','pie','','','','','','','',0,'','SELECT IF (collectors.name IS NULL, \'localhost\', collectors.name) AS `my_name`, IF(collectors.uuid IS NULL, \'\', collectors.uuid) AS `description`, COUNT(system.id) AS `count` FROM `system` LEFT JOIN `collectors` ON (collectors.uuid = system.collector_uuid) WHERE @filter GROUP BY `my_name`','devices?system.collector_uuid=@description','system','2000-01-01 00:00:00');";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Disk Manufacturers',1,'','pie','','disk.manufacturer','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Processor Models',1,'','pie','','processor.description','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Active Directory Sites',1,'','pie','','windows.client_site_name','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Active Directory OUs',1,'','pie','','windows.active_directory_ou','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Network',1,'','pie','','','','','','','',0,'','SELECT ip.network AS `my_name`, COUNT(ip.system_id) AS `count` FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = \'y\') WHERE @filter AND ip.network != \'\' GROUP BY `my_name`','devices?ip.network=@name','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices Audited per Day',1,'','line','','','','','','','',30,'','SELECT DATE(audit_log.timestamp) AS `date`, COUNT(DISTINCT audit_log.system_id) AS `count` FROM `audit_log` LEFT JOIN `system` ON (audit_log.system_id = system.id) WHERE DATE(audit_log.timestamp) >  DATE_SUB(CURDATE(), INTERVAL 30 DAY) GROUP BY DATE(audit_log.timestamp)','devices?audit_log.timestamp=like@date%','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'End Of Life (0-90+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.end_of_life = \"2000-01-01\", \"unknown\", ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 90 day), \"90+ Days\", ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 60 day), \"60-90 Days\", ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 30 day), \"30-60 Days\", ( IF ( system.end_of_life > DATE(NOW()), \"0-30 days\", \"Less than 30 Days\" ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.end_of_life = \"2000-01-01\", \"system.end_of_life=2000-01-01\", ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 90 day), CONCAT(\"system.end_of_life=>\", DATE(NOW() + INTERVAL 90 day)), ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 60 day), CONCAT(\"system.end_of_life=<\", DATE(NOW() + INTERVAL 90 day), \"&system.end_of_life=>\", DATE(NOW() + INTERVAL 60 day)), ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 30 day), CONCAT(\"system.end_of_life=<\", DATE(NOW() + INTERVAL 60 day), \"&system.end_of_life=>\", DATE(NOW() + INTERVAL 30 day)), ( CONCAT(\"system.end_of_life=<\", DATE(NOW() + INTERVAL 30 day), \"&system.end_of_life=>\", DATE(NOW())) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name` ORDER BY system.end_of_life;','devices?@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'End of Service (0-90+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.end_of_service = \"2000-01-01\", \"unknown\", ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 90 day), \"90+ Days\", ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 60 day), \"60-90 Days\", ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 30 day), \"30-60 Days\", ( IF ( system.end_of_service > DATE(NOW()), \"0-30 days\", \"Less than 30 Days\" ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.end_of_service = \"2000-01-01\", \"system.end_of_service=2000-01-01\", ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 90 day), CONCAT(\"system.end_of_service=>\", DATE(NOW() + INTERVAL 90 day)), ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 60 day), CONCAT(\"system.end_of_service=<\", DATE(NOW() + INTERVAL 90 day), \"&system.end_of_service=>\", DATE(NOW() + INTERVAL 60 day)), ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 30 day), CONCAT(\"system.end_of_service=<\", DATE(NOW() + INTERVAL 60 day), \"&system.end_of_service=>\", DATE(NOW() + INTERVAL 30 day)), ( CONCAT(\"system.end_of_service=<\", DATE(NOW() + INTERVAL 30 day), \"&system.end_of_service=>\", DATE(NOW())) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name` ORDER BY system.end_of_service;','devices?@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Device Age (0-3+ Years)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.purchase_date = \"2000-01-01\", \"unknown\", ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 3 year), \"3+ Years\", ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 2 year), \"2-3 Years\", ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 1 year), \"1-2 Years\", \"Less Than 1 Year\" ) ) ) ) ) ) ) AS `my_name`, IF ( system.purchase_date = \"2000-01-01\", \"system.purchase_date=2000-01-01\", ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 3 year), CONCAT(\"system.purchase_date=<\", DATE(NOW() - INTERVAL 3 year)), ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 2 year), CONCAT(\"system.purchase_date=>\", DATE(NOW() - INTERVAL 3 year), \"&system.purchase_date=<\", DATE(NOW() - INTERVAL 2 year)), ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 1 year), CONCAT(\"system.purchase_date=>\", DATE(NOW() - INTERVAL 2 year), \"&system.purchase_date=<\", DATE(NOW() - INTERVAL 1 year)), CONCAT(\"system.purchase_date=>\", DATE(NOW() - INTERVAL 1 year)) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name` ORDER BY system.purchase_date','devices?@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql= "INSERT INTO `widgets` VALUES (NULL,'End of Lease (0-90+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.lease_expiry_date = \"2000-01-01\" OR system.lease_expiry_date = \"0000-00-00\", \"unknown\", ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 90 day), \"90+ Days\", ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 60 day), \"60-90 Days\", ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 30 day), \"30-60 Days\", \"Less than 30 Days\" ) ) ) ) ) ) ) AS `my_name`, IF ( system.lease_expiry_date = \"2000-01-01\" OR system.lease_expiry_date = \"0000-00-00\", \"system.lease_expiry_date=2000-01-01\", ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 90 day), CONCAT(\"system.lease_expiry_date=>\", DATE(NOW() + INTERVAL 90 day)), ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 60 day), CONCAT(\"system.lease_expiry_date=<\", DATE(NOW() + INTERVAL 90 day), \"&system.lease_expiry_date=>\", DATE(NOW() + INTERVAL 60 day)), ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 30 day), CONCAT(\"system.lease_expiry_date=<\", DATE(NOW() + INTERVAL 60 day), \"&system.lease_expiry_date=>\", DATE(NOW() + INTERVAL 30 day)), ( CONCAT(\"system.lease_expiry_date=<\", DATE(NOW() + INTERVAL 30 day), \"&system.lease_expiry_date=>\", DATE(NOW())) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name` ORDER BY system.lease_expiry_date','devices?@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql= "INSERT INTO `widgets` VALUES (NULL,'Hardware Additions by Day',1,'Any items in the following tables that are new - bios, disk, memory, module, monitor, motherbaord, network, optical, partition, processor, san, scsi, sound, video.','line','','system','create','','Devices','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `system` ON (`system`.`id` = `change_log`.`system_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'bios\', \'disk\', \'memory\', \'module\', \'monitor\', \'motherbaord\', \'network\', \'optical\', \'partition\', \'processor\', \'san\', \'scsi\', \'sound\', \'video\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?sub_resource=change_log&change_log.db_table=inbios,disk,memory,module,monitor,motherbaord,network,optical,partition,processor,san,scsi,sound,video&change_log.timestamp=like@date&change_log.db_action=create','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql= "INSERT INTO `widgets` VALUES (NULL,'Settings Additions by Day',1,'Any items in the following tables that are new - dns, file, ip, log, pagefile, print_queue, route, share, task, user, user_group, variable, vm, windows.','line','','system','create','','Devices','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `system` ON (`system`.`id` = `change_log`.`system_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'dns\', \'file\', \'ip\', \'log\', \'pagefile\', \'print_queue\', \'route\', \'share\', \'task\', \'user\', \'user_group\', \'variable\', \'vm\', \'windows\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?sub_resource=change_log&change_log.db_table=indns,file,ip,log,pagefile,print_queue,route,share,task,user,user_group,variable,vm,windows&change_log.timestamp=like@date&change_log.db_action=create','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql= "INSERT INTO `widgets` VALUES (NULL,'Software Additions by Day',1,'Any items in the following tables that are new - server, server_item, service, software, software_key.','line','','system','create','','Devices','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `system` ON (`system`.`id` = `change_log`.`system_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'server\', \'server_item\', \'service\', \'software\', \'software_key\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?sub_resource=change_log&change_log.db_table=inserver,server_item,service,software,software_key&change_log.timestamp=like@date&change_log.db_action=create','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices by Org',1,'Devies assigned by Org','pie','','','','','Devices','','',0,'','SELECT orgs.name as `name`, orgs.id AS `description`, count(system.id) AS `count` FROM orgs LEFT JOIN system ON (orgs.id = system.org_id) WHERE @filter GROUP BY orgs.name','devices?system.location_id=@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "SELECT * FROM `roles`";
$query = $this->db->query($sql);
$result = $query->result();
$this->log_db($this->db->last_query());

$already_updated = false;
foreach ($result as $row) {
	if ($row->name == 'admin') {
		$permissions = @json_decode($row->permissions);
		if (!empty($permissions->dashboards)) {
			$already_updated = true;
		}
	}
}

if (!$already_updated) {
	foreach ($result as $row) {
		$permissions = @json_decode($row->permissions);
		switch ($row->name) {
			case 'admin':
				$permissions->dashboards = 'crud';
				$permissions->widgets = 'crud';
				break;

			case 'org_admin':
				$permissions->dashboards = 'crud';
				$permissions->widgets = 'crud';
				break;

			case 'reporter':
				$permissions->dashboards = 'crud';
				$permissions->widgets = 'crud';
				break;

			case 'user':
				$permissions->dashboards = 'r';
				$permissions->widgets = 'r';
				break;

			case 'collector':
				$permissions->dashboards = '';
				$permissions->widgets = '';
				break;

			case 'agent':
				$permissions->dashboards = '';
				$permissions->widgets = '';
				break;

			default:
				$permissions->dashboards = '';
				$permissions->widgets = '';
				break;
		}
		$row->permissions = json_encode($permissions);
		$sql = "UPDATE `roles` SET permissions = ? WHERE id = ?";
		$data = array($row->permissions, $row->id);
		$this->db->query($sql, $data);
		$this->log_db($this->db->last_query());
	}
}

# users
$this->alter_table('users', 'dashboard_id', "ADD `dashboard_id` int(10) unsigned DEFAULT 1 AFTER `type`", 'add');

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20180218' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.2.0' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.2.0 completed");
$this->config->config['internal_version'] = '20180218';
$this->config->config['display_version'] = '2.2.0';
