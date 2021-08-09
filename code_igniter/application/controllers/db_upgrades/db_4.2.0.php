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
  `additional_items` longtext NOT NULL,
  `attributes` longtext NOT NULL,
  `create_external_count` int(10) unsigned DEFAULT NULL,
  `create_external_from_internal` enum('y','n') NOT NULL DEFAULT 'n',
  `create_internal_count` int(10) unsigned DEFAULT NULL,
  `create_internal_from_external` enum('y','n') NOT NULL DEFAULT 'n',
  `devices` longtext NOT NULL,
  `locations` longtext NOT NULL,
  `debug` enum('y','n') NOT NULL DEFAULT 'n',
  `discovery_id` int(10) unsigned DEFAULT NULL,
  `discovery_run` enum('y','n') NOT NULL DEFAULT 'n',
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
  `status` varchar(200) NOT NULL DEFAULT '',
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE system DROP IF EXISTS nmis_poller_uuid;

ALTER TABLE system ADD `nmis_poller_uuid` varchar(45) NOT NULL DEFAULT '' AFTER nmis_poller;

INSERT INTO `rules` VALUES (NULL,'NMIS Manage for SNMP devices',1,'Set nmis_manage to y if we detect an SNMP OID.',100,'[{\"attribute\":\"snmp_oid\",\"operator\":\"ne\",\"table\":\"system\",\"value\":\"\"}]','[{\"attribute\":\"nmis_manage\",\"table\":\"system\",\"value\":\"y\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');

INSERT INTO `discoveries` (id, name, org_id, type, subnet, edited_date, edited_by) VALUES (null,'Default Discovery',1,'subnet','',NOW(),'system');

INSERT INTO `discoveries` VALUES (NULL,'Discovery for Default NMIS Integration',1,'','integration','','','y','y','y','','',NULL,NULL,'http://127.0.0.1/open-audit/index.php/input/discoveries',0,'','{\"id\":1,\"ping\":\"\",\"service_version\":\"\",\"open|filtered\":\"\",\"filtered\":\"\",\"timeout\":\"\",\"timing\":\"\",\"nmap_tcp_ports\":\"\",\"nmap_udp_ports\":\"\",\"tcp_ports\":\"\",\"udp_ports\":\"\",\"exclude_tcp_ports\":\"\",\"exclude_udp_ports\":\"\",\"exclude_ip\":\"\",\"ssh_ports\":\"\",\"script_timeout\":\"\",\"snmp_timeout\":\"\",\"ssh_timeout\":\"\",\"wmi_timeout\":\"\"}','{\"match_dbus\":\"\",\"match_fqdn\":\"\",\"match_dns_fqdn\":\"\",\"match_dns_hostname\":\"\",\"match_hostname\":\"\",\"match_hostname_dbus\":\"\",\"match_hostname_serial\":\"\",\"match_hostname_uuid\":\"\",\"match_ip\":\"\",\"match_ip_no_data\":\"\",\"match_mac\":\"\",\"match_mac_vmware\":\"\",\"match_serial\":\"\",\"match_serial_type\":\"\",\"match_sysname\":\"\",\"match_sysname_serial\":\"\",\"match_uuid\":\"\"}','','n','2000-01-01 00:00:00','2000-01-01 00:00:00','00:00:00','complete',0,0,0,0,0,0,'','system',NOW());

INSERT INTO `integrations` VALUES (NULL,'Default NMIS Integration',1,'','nmis','[]','{\"pollers\":[],\"groups\":[],\"roles\":[],\"customers\":[],\"business_services\":[]}','{\"password\":\"\",\"url\":\"http:\\/\\/localhost\\/omk\\/\",\"username\":\"\"}',0,'y',0,'y','[]','[]',2,'y','[{\"default_value\":\"\",\"external_field_name\":\"configuration.businessService\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_business_service\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"server_name\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_poller\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.notes\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_notes\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"y\",\"external_field_name\":\"\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_manage\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.sysDescr\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.sysDescr\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"Default Location\",\"external_field_name\":\"configuration.location\",\"external_field_type\":\"text\",\"internal_field_name\":\"locations.name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.wmiusername\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.windows_username\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.wmipassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.windows_password\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.version\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.version\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.community\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_community\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.username\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.security_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.customer\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_customer\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.authpassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.authentication_passphrase\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.authprotocol\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.authentication_protocol\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.privpassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.privacy_passphrase\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.privprotocol\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.privacy_protocol\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"1\",\"external_field_name\":\"configuration.active\",\"external_field_type\":\"bool_one_zero\",\"internal_field_name\":\"fields.nmis_active\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"1\",\"external_field_name\":\"configuration.collect\",\"external_field_type\":\"bool_one_zero\",\"internal_field_name\":\"fields.nmis_collect\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"automatic\",\"external_field_name\":\"configuration.model\",\"external_field_type\":\"text\",\"internal_field_name\":\"fields.nmis_model\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"wan\",\"external_field_name\":\"configuration.netType\",\"external_field_type\":\"text\",\"internal_field_name\":\"fields.nmis_netType\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"true\",\"external_field_name\":\"configuration.ping\",\"external_field_type\":\"bool\",\"internal_field_name\":\"fields.nmis_ping\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"161\",\"external_field_name\":\"configuration.port\",\"external_field_type\":\"integer\",\"internal_field_name\":\"fields.nmis_port\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"name\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"name\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.display_name\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"Open-AudIT\",\"external_field_name\":\"configuration.group\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_group\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.host\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.ip\",\"matching_attribute\":\"y\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"uuid\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.omk_uuid\",\"matching_attribute\":\"y\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.roleType\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_role\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.serviceStatus\",\"external_field_type\":\"capitalise\",\"internal_field_name\":\"system.environment\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"cluster_id\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_poller_uuid\",\"matching_attribute\":\"n\",\"priority\":\"external\"}]','',0,'all','','nmis_manage',0,'attribute','y',0,'y',0,'y','n','','2000-01-01 00:00:00',0,'system',NOW());

INSERT INTO `fields` VALUES (NULL,'nmis_active',1,1,'varchar','','system','Administrator',NOW());
INSERT INTO `fields` VALUES (NULL,'nmis_collect',1,1,'varchar','','system','Administrator',NOW());
INSERT INTO `fields` VALUES (NULL,'nmis_model',1,1,'varchar','','system','Administrator',NOW());
INSERT INTO `fields` VALUES (NULL,'nmis_netType',1,1,'varchar','','system','Administrator',NOW());
INSERT INTO `fields` VALUES (NULL,'nmis_ping',1,1,'varchar','','system','Administrator',NOW());
INSERT INTO `fields` VALUES (NULL,'nmis_port',1,1,'varchar','','system','Administrator',NOW());

UPDATE `configuration` SET `value` = '20210810' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '4.2.0' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 4.2.0 commenced');

$sql = "DROP TABLE IF EXISTS integrations";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "CREATE TABLE `integrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'nmis',
  `additional_items` longtext NOT NULL,
  `attributes` longtext NOT NULL,
  `create_external_count` int(10) unsigned DEFAULT NULL,
  `create_external_from_internal` enum('y','n') NOT NULL DEFAULT 'n',
  `create_internal_count` int(10) unsigned DEFAULT NULL,
  `create_internal_from_external` enum('y','n') NOT NULL DEFAULT 'n',
  `devices` longtext NOT NULL,
  `locations` longtext NOT NULL,
  `debug` enum('y','n') NOT NULL DEFAULT 'n',
  `discovery_id` int(10) unsigned DEFAULT NULL,
  `discovery_run` enum('y','n') NOT NULL DEFAULT 'n',
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
  `status` varchar(200) NOT NULL DEFAULT '',
  `last_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `duration` int(10) unsigned DEFAULT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "DROP TABLE IF EXISTS `integrations_log`";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "CREATE TABLE `integrations_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `integrations_id` int(10) unsigned DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `microtime` decimal(16,6) DEFAULT NULL,
  `severity_text` enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$integration = new stdClass();
$integration->attributes = '{"username" : "","url" : "http://localhost/omk/","password" : ""}';
$integration->create_external_from_internal = "y";
$integration->create_internal_from_external = "y";
$integration->delete_external_from_internal = "n";
$integration->description = "";
$integration->discovery_run = "y";
$integration->name = "Default NMIS Integration";
$integration->org_id = 1;
$integration->select_external_attribute = "";
$integration->select_external_type = "all";
$integration->select_external_value = "";
$integration->select_internal_attribute = "nmis_manage";
$integration->select_internal_type = "attribute";
$integration->select_internal_value = "y";
$integration->type = "nmis";
$integration->update_external_from_internal = "y";
$integration->update_internal_from_external = "y";
$integration->fields = '[{
     "external_field_type" : "text",
     "priority" : "internal",
     "external_field_name" : "configuration.businessService",
     "default_value" : "",
     "matching_attribute" : "n",
     "internal_field_name" : "system.nmis_business_service"
  },
  {
     "external_field_type" : "text",
     "external_field_name" : "server_name",
     "priority" : "external",
     "default_value" : "",
     "matching_attribute" : "n",
     "internal_field_name" : "system.nmis_poller"
  },
  {
     "internal_field_name" : "system.nmis_notes",
     "matching_attribute" : "n",
     "priority" : "external",
     "external_field_name" : "configuration.notes",
     "default_value" : "",
     "external_field_type" : "text"
  },
  {
     "internal_field_name" : "system.nmis_manage",
     "matching_attribute" : "n",
     "external_field_name" : "",
     "priority" : "internal",
     "default_value" : "y",
     "external_field_type" : "text"
  },
  {
     "external_field_type" : "text",
     "default_value" : "",
     "external_field_name" : "configuration.sysDescr",
     "priority" : "external",
     "matching_attribute" : "n",
     "internal_field_name" : "system.sysDescr"
  },
  {
     "default_value" : "Default Location",
     "external_field_name" : "configuration.location",
     "priority" : "internal",
     "external_field_type" : "text",
     "internal_field_name" : "locations.name",
     "matching_attribute" : "n"
  },
  {
     "matching_attribute" : "n",
     "internal_field_name" : "credentials.windows_username",
     "external_field_type" : "text",
     "priority" : "internal",
     "external_field_name" : "configuration.wmiusername",
     "default_value" : ""
  },
  {
     "matching_attribute" : "n",
     "internal_field_name" : "credentials.windows_password",
     "external_field_type" : "text",
     "external_field_name" : "configuration.wmipassword",
     "priority" : "internal",
     "default_value" : ""
  },
  {
     "default_value" : "",
     "external_field_name" : "configuration.version",
     "priority" : "internal",
     "external_field_type" : "text",
     "internal_field_name" : "credentials.version",
     "matching_attribute" : "n"
  },
  {
     "matching_attribute" : "n",
     "internal_field_name" : "credentials.snmp_community",
     "external_field_type" : "text",
     "priority" : "internal",
     "external_field_name" : "configuration.community",
     "default_value" : ""
  },
  {
     "priority" : "internal",
     "external_field_name" : "configuration.username",
     "default_value" : "",
     "external_field_type" : "text",
     "internal_field_name" : "credentials.security_name",
     "matching_attribute" : "n"
  },
  {
     "external_field_type" : "text",
     "default_value" : "",
     "priority" : "internal",
     "external_field_name" : "configuration.customer",
     "matching_attribute" : "n",
     "internal_field_name" : "system.nmis_customer"
  },
  {
     "priority" : "internal",
     "external_field_name" : "configuration.authpassword",
     "default_value" : "",
     "external_field_type" : "text",
     "internal_field_name" : "credentials.authentication_passphrase",
     "matching_attribute" : "n"
  },
  {
     "internal_field_name" : "credentials.authentication_protocol",
     "matching_attribute" : "n",
     "default_value" : "",
     "external_field_name" : "configuration.authprotocol",
     "priority" : "internal",
     "external_field_type" : "text"
  },
  {
     "default_value" : "",
     "external_field_name" : "configuration.privpassword",
     "priority" : "internal",
     "external_field_type" : "text",
     "internal_field_name" : "credentials.privacy_passphrase",
     "matching_attribute" : "n"
  },
  {
     "external_field_type" : "text",
     "default_value" : "",
     "external_field_name" : "configuration.privprotocol",
     "priority" : "internal",
     "matching_attribute" : "n",
     "internal_field_name" : "credentials.privacy_protocol"
  },
  {
     "priority" : "external",
     "external_field_name" : "configuration.active",
     "default_value" : "1",
     "external_field_type" : "bool_one_zero",
     "internal_field_name" : "fields.nmis_active",
     "matching_attribute" : "n"
  },
  {
     "internal_field_name" : "fields.nmis_collect",
     "matching_attribute" : "n",
     "default_value" : "1",
     "external_field_name" : "configuration.collect",
     "priority" : "external",
     "external_field_type" : "bool_one_zero"
  },
  {
     "internal_field_name" : "fields.nmis_model",
     "matching_attribute" : "n",
     "default_value" : "automatic",
     "priority" : "external",
     "external_field_name" : "configuration.model",
     "external_field_type" : "text"
  },
  {
     "external_field_type" : "text",
     "default_value" : "wan",
     "external_field_name" : "configuration.netType",
     "priority" : "external",
     "matching_attribute" : "n",
     "internal_field_name" : "fields.nmis_netType"
  },
  {
     "internal_field_name" : "fields.nmis_ping",
     "matching_attribute" : "n",
     "default_value" : "true",
     "external_field_name" : "configuration.ping",
     "priority" : "external",
     "external_field_type" : "bool"
  },
  {
     "internal_field_name" : "fields.nmis_port",
     "matching_attribute" : "n",
     "priority" : "external",
     "external_field_name" : "configuration.port",
     "default_value" : "161",
     "external_field_type" : "integer"
  },
  {
     "matching_attribute" : "n",
     "internal_field_name" : "system.name",
     "external_field_type" : "text",
     "default_value" : "",
     "priority" : "internal",
     "external_field_name" : "name"
  },
  {
     "external_field_type" : "text",
     "external_field_name" : "name",
     "priority" : "internal",
     "default_value" : "",
     "matching_attribute" : "n",
     "internal_field_name" : "system.nmis_name"
  },
  {
     "matching_attribute" : "n",
     "internal_field_name" : "system.name",
     "external_field_type" : "text",
     "default_value" : "",
     "priority" : "internal",
     "external_field_name" : "configuration.display_name"
  },
  {
     "external_field_type" : "text",
     "default_value" : "Open-AudIT",
     "external_field_name" : "configuration.group",
     "priority" : "internal",
     "matching_attribute" : "n",
     "internal_field_name" : "system.nmis_group"
  },
  {
     "external_field_type" : "text",
     "external_field_name" : "configuration.host",
     "priority" : "internal",
     "default_value" : "",
     "matching_attribute" : "y",
     "internal_field_name" : "system.ip"
  },
  {
     "internal_field_name" : "system.omk_uuid",
     "matching_attribute" : "y",
     "default_value" : "",
     "priority" : "external",
     "external_field_name" : "uuid",
     "external_field_type" : "text"
  },
  {
     "external_field_type" : "text",
     "external_field_name" : "configuration.roleType",
     "priority" : "internal",
     "default_value" : "",
     "matching_attribute" : "n",
     "internal_field_name" : "system.nmis_role"
  },
  {
     "external_field_type" : "capitalise",
     "priority" : "internal",
     "external_field_name" : "configuration.serviceStatus",
     "default_value" : "",
     "matching_attribute" : "n",
     "internal_field_name" : "system.environment"
  },
  {
     "external_field_type" : "text",
     "priority" : "external",
     "external_field_name" : "cluster_id",
     "default_value" : "",
     "matching_attribute" : "n",
     "internal_field_name" : "system.nmis_poller_uuid"
  }
]';
$integration->fields = str_replace("\n", "", $integration->fields);
$this->load->model('m_integrations');
$this->m_integrations->create($integration);

$sql = 'UPDATE tasks set sub_resource_id = 1 WHERE type = "integrations"';
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->alter_table('system', 'nmis_poller_uuid', "ADD `nmis_poller_uuid` varchar(45) NOT NULL DEFAULT '' AFTER `nmis_poller`", 'add');

$sql = "DELETE FROM rules WHERE name = 'NMIS Manage for SNMP devices'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `rules` VALUES (NULL,'NMIS Manage for SNMP devices',1,'Set nmis_manage to y if we detect an SNMP OID.',100,'[{\"attribute\":\"snmp_oid\",\"operator\":\"gt\",\"table\":\"system\",\"value\":\"\"}]','[{\"attribute\":\"nmis_manage\",\"table\":\"system\",\"value\":\"y\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$ips = $this->config->config['server_ip'];
$ips = explode(',', $ips);
$ip = trim($ips[0]);
$ip = explode('.', $ip);
$ip[3] = 0;
$ip = implode('.', $ip);
$subnet = $ip . '/24';

$sql = "INSERT INTO `discoveries` (id, name, org_id, description, type, subnet, edited_date, edited_by) VALUES (null,'Default Discovery',1,'Automatically created default discovery for $subnet.','subnet','$subnet',NOW(),'system')";
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
