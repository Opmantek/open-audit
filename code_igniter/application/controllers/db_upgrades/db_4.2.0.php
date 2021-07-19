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

/*
DROP TABLE IF EXISTS integrations;

CREATE TABLE `integrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'nmis',
  `options` longtext NOT NULL,
  `additional_items` longtext NOT NULL,
  `attributes` longtext NOT NULL,
  `create_external_count` int(10) unsigned DEFAULT NULL,
  `create_external_from_internal` enum('y','n') NOT NULL DEFAULT 'n',
  `create_internal_count` int(10) unsigned DEFAULT NULL,
  `create_internal_from_external` enum('y','n') NOT NULL DEFAULT 'n',
  `devices` longtext NOT NULL,
  `locations` longtext NOT NULL,
  `discovery_id` int(10) unsigned DEFAULT NULL,
  `discovery_run_on_create` enum('y','n') NOT NULL DEFAULT 'n',
  `fields` longtext NOT NULL,
  `select_external_attribute` varchar(200) NOT NULL DEFAULT '',
  `select_external_count` int(10) unsigned DEFAULT NULL,
  `select_external_type` enum('','all','none','attribute') DEFAULT 'all',
  `select_external_value` varchar(200) NOT NULL DEFAULT '',
  `select_internal_attribute` varchar(200) NOT NULL DEFAULT '',
  `select_internal_count` int(10) unsigned DEFAULT NULL,
  `select_internal_type` enum('','none','attribute','group','query') DEFAULT 'attribute',
  `select_internal_value` varchar(200) NOT NULL DEFAULT '',
  `update_external_count` int(10) unsigned DEFAULT NULL,
  `update_external_from_internal` enum('y','n') NOT NULL DEFAULT 'y',
  `update_internal_count` int(10) unsigned DEFAULT NULL,
  `update_internal_from_external` enum('y','n') NOT NULL DEFAULT 'y',
  `delete_external_from_internal` enum('y','n') NOT NULL DEFAULT 'n',
  `last_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `duration` int(10) unsigned DEFAULT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `integrations_log`;

CREATE TABLE `integrations_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `integrations_id` int(10) unsigned DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `microtime` decimal(16,6) DEFAULT NULL,
  `severity_text` enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
  `message` text NOT NULL,
  `result` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE system DROP IF EXISTS nmis_poller_uuid;

ALTER TABLE system ADD `nmis_poller_uuid` varchar(45) NOT NULL DEFAULT '' AFTER nmis_poller;

INSERT INTO `rules` VALUES (NULL,'NMIS Manage for SNMP devices',1,'Set nmis_manage to y if we detect an SNMP OID.',100,'[{\"attribute\":\"snmp_oid\",\"operator\":\"ne\",\"table\":\"system\",\"value\":\"\"}]','[{\"attribute\":\"nmis_manage\",\"table\":\"system\",\"value\":\"y\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');

UPDATE `configuration` SET `value` = '20210810' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '4.2.0' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 4.2.0 commenced');

$sql = "DROP TABLE IF EXISTS integrations_log";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->alter_table('integrations', 'additional_items', "ADD `additional_items` longtext NOT NULL AFTER `options`", 'add');

$this->alter_table('integrations', 'attributes', "ADD `attributes` longtext NOT NULL AFTER `additional_items`", 'add');

$this->alter_table('integrations', 'create_external_count', "ADD `create_external_count` int(10) unsigned DEFAULT NULL AFTER `attributes`", 'add');

$this->alter_table('integrations', 'create_external_from_internal', "ADD `create_external_from_internal` enum('y','n') NOT NULL DEFAULT 'n' AFTER `create_external_count`", 'add');

$this->alter_table('integrations', 'create_internal_count', "ADD `create_internal_count` int(10) unsigned DEFAULT NULL AFTER `create_external_from_internal`", 'add');

$this->alter_table('integrations', 'create_internal_from_external', "ADD `create_internal_from_external` enum('y','n') NOT NULL DEFAULT 'n' AFTER `create_internal_count`", 'add');

$this->alter_table('integrations', 'devices', "ADD `devices` longtext NOT NULL AFTER `create_internal_from_external`", 'add');

$this->alter_table('integrations', 'locations', "ADD `locations` longtext NOT NULL AFTER `devices`", 'add');

$this->alter_table('integrations', 'discovery_id', "ADD `discovery_id` int(10) unsigned DEFAULT NULL AFTER `locations`", 'add');

$this->alter_table('integrations', 'discovery_run_on_create', "ADD `discovery_run_on_create` enum('y','n') NOT NULL DEFAULT 'n' AFTER `discovery_id`", 'add');

$this->alter_table('integrations', 'fields', "ADD `fields` longtext NOT NULL AFTER `discovery_run_on_create`", 'add');

$this->alter_table('integrations', 'select_external_attribute', "ADD `select_external_attribute` varchar(200) NOT NULL DEFAULT '' AFTER `fields`", 'add');

$this->alter_table('integrations', 'select_external_count', "ADD `select_external_count` int(10) unsigned DEFAULT NULL AFTER `select_external_attribute`", 'add');

$this->alter_table('integrations', 'select_external_type', "ADD `select_external_type` enum('','all','none','attribute') DEFAULT 'all' AFTER `select_external_count`", 'add');

$this->alter_table('integrations', 'select_external_value', "ADD `select_external_value` varchar(200) NOT NULL DEFAULT '' AFTER `select_external_type`", 'add');

$this->alter_table('integrations', 'select_internal_attribute', "ADD `select_internal_attribute` varchar(200) NOT NULL DEFAULT '' AFTER `select_external_value`", 'add');

$this->alter_table('integrations', 'select_internal_count', "ADD `select_internal_count` int(10) unsigned DEFAULT NULL AFTER `select_internal_attribute`", 'add');

$this->alter_table('integrations', 'select_internal_type', "ADD `select_internal_type` enum('','none','attribute','group','query') DEFAULT 'attribute' AFTER `select_internal_count`", 'add');

$this->alter_table('integrations', 'select_internal_value', "ADD `select_internal_value` varchar(200) NOT NULL DEFAULT '' AFTER `select_internal_type`", 'add');

$this->alter_table('integrations', 'update_external_count', "ADD `update_external_count` int(10) unsigned DEFAULT NULL AFTER `select_internal_value`", 'add');

$this->alter_table('integrations', 'update_external_from_internal', "ADD `update_external_from_internal` enum('y','n') NOT NULL DEFAULT 'y' AFTER `update_external_count`", 'add');

$this->alter_table('integrations', 'update_internal_count', "ADD `update_internal_count` int(10) unsigned DEFAULT NULL AFTER `update_external_from_internal`", 'add');

$this->alter_table('integrations', 'update_internal_from_external', "ADD `update_internal_from_external` enum('y','n') NOT NULL DEFAULT 'y' AFTER `update_internal_count`", 'add');

$this->alter_table('integrations', 'delete_external_from_internal', "ADD `delete_external_from_internal` enum('y','n') NOT NULL DEFAULT 'n' AFTER `update_internal_from_external`", 'add');

$this->alter_table('integrations', 'duration', "ADD `duration` int(10) unsigned DEFAULT NULL AFTER `last_run`", 'add');

$sql = "DROP TABLE IF EXISTS `integrations_log`";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sq= "CREATE TABLE `integrations_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `integrations_id` int(10) unsigned DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `microtime` decimal(16,6) DEFAULT NULL,
  `severity_text` enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
  `message` text NOT NULL,
  `result` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->alter_table('system', 'nmis_poller_uuid', "ADD `nmis_poller_uuid` varchar(45) NOT NULL DEFAULT '' AFTER `nmis_poller`", 'add');

$sql = "DELETE FROM rules WHERE name = 'NMIS Manage for SNMP devices'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `rules` VALUES (NULL,'NMIS Manage for SNMP devices',1,'Set nmis_manage to y if we detect an SNMP OID.',100,'[{\"attribute\":\"snmp_oid\",\"operator\":\"ne\",\"table\":\"system\",\"value\":\"\"}]','[{\"attribute\":\"nmis_manage\",\"table\":\"system\",\"value\":\"y\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20210810' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "UPDATE `configuration` SET `value` = '4.2.0' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->log_db('Upgrade database to 4.2.0 completed');
$this->config->config['internal_version'] = '20210810';
$this->config->config['display_version'] = '4.2.0';
