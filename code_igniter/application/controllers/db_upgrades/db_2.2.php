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

# scripts
# New HP-UX saudit script
$sql = "INSERT INTO `scripts` VALUES (NULL, 'audit_hpux.sh', '" . $options . "', 'The default audit HP-UX config.', 'audit_hpux.sh', '', 'system', '2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

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
