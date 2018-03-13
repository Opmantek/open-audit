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

$this->log_db('Upgrade database to 2.2 commenced');

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

$sql = 'INSERT INTO `dashboards` VALUES (NULL,\'Dashboard\',1,\'org\',0,\'The Default Open-AudIT Dashboard\',\'y\',\'{"layout":"3x2","widget_count":6,"widgets":[{"position":"1","size":"1","widget_id":"1"},{"position":"2","size":"1","widget_id":"2"},{"position":"3","size":"1","widget_id":"3"},{"position":"4","size":"1","widget_id":"5"},{"position":"5","size":"1","widget_id":"6"},{"position":"6","size":"1","widget_id":"2"}]}\',\'system\',\'2000-01-01 00:00:00\')';
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

$sql = "INSERT INTO `widgets` VALUES (NULL,'Daily Discovered Devices',1,'','line','','system','create','','','',90,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Daily Discovered Software',1,'','line','','software','create','','','',30,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Devices Not Seen',1,'','pie','','','','','','',0,'','SELECT IF ( system.last_seen = \"2000-01-01\", \"unknown\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 180 day), \"180 Days or more\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 150 day), \"150-180 days\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 120 day), \"120-150 days\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 90 day), \"90-120 days\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 60 day), \"60-90 days\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 30 day), \"30-60 days\", \"7-30 days\" ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.last_seen = \"2000-01-01\", \"system.last_seen=\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 180 day), CONCAT(\"system.last_seen=<\", DATE(NOW() - INTERVAL 180 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 150 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 180 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 150 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 120 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 150 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 120 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 90 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 120 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 90 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 60 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 90 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 60 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 30 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 60 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 30 day)), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 30 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 7 day))) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter AND DATE(system.last_seen) < DATE(NOW() - INTERVAL 7 day) GROUP BY `my_name` ORDER BY system.last_seen','devices?@description','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Device Types',1,'','pie','','system.type','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Operating System Families',1,'','pie','','system.os_family','','','','',0,'','','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `widgets` VALUES (NULL,'Device manufacturers',1,'','pie','','system.manufacturer','','','','',0,'','','','system','2000-01-01 00:00:00')";
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

$sql = "UPDATE `configuration` SET `value` = '2.2' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.2 completed");
$this->config->config['internal_version'] = '20180218';
$this->config->config['display_version'] = '2.2';
