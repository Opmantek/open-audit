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

$this->log_db('Upgrade database to 2.0.6 commenced');

# agents
$this->drop_table('agents');
$sql = "CREATE TABLE `agents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `ip` varchar(45) NOT NULL DEFAULT '',
  `status` enum('created','pending','approved','denied','deleted','') NOT NULL DEFAULT '',
  `check_minutes` int unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned,
  `uuid` text NOT NULL,
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# attributes update
$sql = "DELETE FROM `attributes` WHERE `name` = 'Video Wall'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Video Wall','video wall','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# collectors
$this->drop_table('collectors');
$sql = "CREATE TABLE `collectors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `ip` varchar(45) NOT NULL DEFAULT '',
  `status` enum('created','pending','approved','denied','deleted','') NOT NULL DEFAULT '',
  `check_minutes` int unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned,
  `uuid` text NOT NULL,
  `network_address` varchar(100) NOT NULL DEFAULT '',
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# configuration
$sql = "DELETE from `configuration` WHERE `name` = 'database_show_row_limit'";
$this->db->query($sql);
$sql = "INSERT INTO `configuration` VALUES (NULL,'database_show_row_limit','1000','number','y','system','2000-01-01 00:00:00','The limit of rows to show, rather than download when exporting a database table.')";
$this->db->query($sql);

$sql = "DELETE from `configuration` WHERE `name` = 'collector_check_minutes'";
$this->db->query($sql);
$sql = "INSERT INTO `configuration` VALUES (NULL,'collector_check_minutes','15','number','y','system','2000-01-01 00:00:00','The default check interval for collectors.')";
$this->db->query($sql);

$sql = "DELETE from `configuration` WHERE `name` = 'page_size'";
$this->db->query($sql);
$sql = "INSERT INTO `configuration` VALUES (NULL,'page_size','1000','number','y','system','2000-01-01 00:00:00','The default limit of rows to retrieve.')";
$this->db->query($sql);

$sql = "DELETE FROM `configuration` WHERE name = 'servers'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'servers','','text','n','system','2000-01-01 00:00:00','The servers to report to when using Agent / Collector / Server.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# queries
$sql = "DELETE FROM `queries` WHERE name = 'Software' AND `menu_category` = 'Change'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `queries` VALUES (null,1,'Software','Change','y','Any changes in the tables \'service\', \'server\', \'server_item\', \'software\' and \'software_key\'.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table in (\'service\', \'server\', \'server_item\', \'software\', \'software_key\')','','system','2000-01-01 00:00:00');";
$this->db->query($sql);
$this->log_db($this->db->last_query());


# roles (updates to include agents and collectors)
$sql = "SELECT * FROM roles WHERE name = 'admin'";
$query = $this->db->query($sql);
$result = @$query->result();
$this->log_db($this->db->last_query());
$permissions = json_decode($result[0]->permissions);
$permissions->agents = 'crud';
$permissions->collectors = 'crud';
$permissions_json = (string)json_encode($permissions);
$sql = "UPDATE roles SET permissions = ? WHERE name = 'admin'";
$this->db->query($sql, array($permissions_json));
$this->log_db($this->db->last_query());
unset($permissions);
unset($result);

$sql = "DELETE FROM `roles` WHERE name = 'agent'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `roles` VALUES (NULL,'agent','The agent specific role.','{\"configuration\":\"r\",\"credentials\":\"r\",\"devices\":\"cr\",\"discoveries\":\"r\",\"locations\":\"r\",\"networks\":\"cr\",\"orgs\":\"r\",\"sessions\":\"crud\"}','open-audit_roles_agent','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `roles` WHERE name = 'collector'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `roles` VALUES (NULL,'collector','The collector specific role.','{\"collectors\":\"crud\",\"configuration\":\"r\",\"credentials\":\"r\",\"devices\":\"cr\",\"discoveries\":\"r\",\"locations\":\"r\",\"networks\":\"cr\",\"orgs\":\"r\",\"sessions\":\"crud\",\"tasks\":\"crud\",\"users\":\"r\"}','open-audit_roles_collector','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# system
$this->alter_table('system', 'collector_uuid', "ADD `collector_uuid` text NOT NULL AFTER `omk_uuid`", 'add');
$this->alter_table('system', 'nmis_manage', "ADD `nmis_manage` enum('y','n') NOT NULL DEFAULT 'y' AFTER `oae_manage`", 'add');

# tasks
$this->alter_table('tasks', 'sub_resource_id', "ADD `sub_resource_id` int(10) unsigned NOT NULL DEFAULT '1' AFTER `description`", 'add');

# users
$this->alter_table('users', 'type', "ADD `type` enum('agent','collector','user') NOT NULL DEFAULT 'user' AFTER `ldap`", 'add');

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20170820' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.0.6' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

#$this->db->db_debug = $temp_debug;
$this->log_db("Upgrade database to 2.0.6 completed");
$this->config->config['internal_version'] = '20170820';
$this->config->config['display_version'] = '2.0.6';
