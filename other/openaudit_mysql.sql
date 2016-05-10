-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ttt
-- ------------------------------------------------------
-- Server version	5.5.44-0+deb7u1-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bios`
--

DROP TABLE IF EXISTS `bios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `manufacturer` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `smversion` varchar(100) NOT NULL DEFAULT '',
  `version` varchar(100) NOT NULL DEFAULT '',
  `asset_tag` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_bios_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bios`
--

LOCK TABLES `bios` WRITE;
/*!40000 ALTER TABLE `bios` DISABLE KEYS */;
/*!40000 ALTER TABLE `bios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `when` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `what` varchar(50) NOT NULL DEFAULT '',
  `org_id` int unsigned NOT NULL DEFAULT 0,
  `count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`when`,`what`,`org_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart`
--

LOCK TABLES `chart` WRITE;
/*!40000 ALTER TABLE `chart` DISABLE KEYS */;
/*!40000 ALTER TABLE `chart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disk`
--

DROP TABLE IF EXISTS `disk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(100) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `device` varchar(200) NOT NULL DEFAULT '',
  `caption` varchar(100) NOT NULL DEFAULT '',
  `hard_drive_index` varchar(100) NOT NULL DEFAULT '',
  `interface_type` varchar(100) NOT NULL DEFAULT '',
  `partition_count` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `scsi_bus` varchar(10) NOT NULL DEFAULT '',
  `scsi_logical_unit` varchar(100) NOT NULL DEFAULT '',
  `scsi_port` varchar(10) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT '',
  `firmware` varchar(100) NOT NULL DEFAULT '',
  `model_family` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `hard_drive_index` (`hard_drive_index`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_hard_drive_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disk`
--

LOCK TABLES `disk` WRITE;
/*!40000 ALTER TABLE `disk` DISABLE KEYS */;
/*!40000 ALTER TABLE `disk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `graph`
--

DROP TABLE IF EXISTS `graph`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graph` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `linked_table` varchar(100) NOT NULL DEFAULT '',
  `linked_row` varchar(100) NOT NULL DEFAULT '',
  `type` enum('disk','partition','directory','file','database','share','other') NOT NULL DEFAULT 'partition',
  `used_percent` tinyint unsigned NOT NULL DEFAULT '0',
  `free_percent` tinyint unsigned NOT NULL DEFAULT '0',
  `used` int unsigned NOT NULL DEFAULT '0',
  `free` int unsigned NOT NULL DEFAULT '0',
  `size` int unsigned NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`), KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_graph_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graph`
--

LOCK TABLES `graph` WRITE;
/*!40000 ALTER TABLE `graph` DISABLE KEYS */;
/*!40000 ALTER TABLE `graph` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ip`
--

DROP TABLE IF EXISTS `ip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ip` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mac` varchar(200) NOT NULL DEFAULT '',
  `net_index` varchar(10) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `netmask` varchar(30) NOT NULL DEFAULT '',
  `cidr` varchar(4) NOT NULL DEFAULT '',
  `version` tinyint(3) unsigned NOT NULL DEFAULT '4',
  `network` varchar(40) NOT NULL DEFAULT '',
  `set_by` enum('','dhcp','static','auto','local') NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `mac` (`mac`),
  CONSTRAINT `ip_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ip`
--

LOCK TABLES `ip` WRITE;
/*!40000 ALTER TABLE `ip` DISABLE KEYS */;
/*!40000 ALTER TABLE `ip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(50) NOT NULL DEFAULT '',
  `file_name` varchar(250) NOT NULL DEFAULT '',
  `file_size` int(10) unsigned NOT NULL DEFAULT '0',
  `max_file_size` int(10) unsigned NOT NULL DEFAULT '0',
  `overwrite` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `memory`
--

DROP TABLE IF EXISTS `memory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `memory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `bank` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `form_factor` varchar(100) NOT NULL DEFAULT '',
  `detail` varchar(100) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `speed` int(10) unsigned NOT NULL DEFAULT '0',
  `tag` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_memory_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `memory`
--

LOCK TABLES `memory` WRITE;
/*!40000 ALTER TABLE `memory` DISABLE KEYS */;
/*!40000 ALTER TABLE `memory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `module` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `description` varchar(200) NOT NULL DEFAULT '',
  `module_index` varchar(100) NOT NULL DEFAULT '',
  `object_ident` varchar(100) NOT NULL DEFAULT '',
  `contained_in` varchar(100) NOT NULL DEFAULT '',
  `class` varchar(10) NOT NULL DEFAULT '',
  `class_text` varchar(20) NOT NULL DEFAULT '',
  `hardware_revision` varchar(100) NOT NULL DEFAULT '',
  `firmware_revision` varchar(100) NOT NULL DEFAULT '',
  `software_revision` varchar(100) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `asset_ident` varchar(100) NOT NULL DEFAULT '',
  `is_fru` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_module_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module`
--

LOCK TABLES `module` WRITE;
/*!40000 ALTER TABLE `module` DISABLE KEYS */;
/*!40000 ALTER TABLE `module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monitor`
--

DROP TABLE IF EXISTS `monitor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monitor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(100) NOT NULL DEFAULT '',
  `serial` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `device` varchar(100) NOT NULL DEFAULT '',
  `manufacture_date` varchar(20) NOT NULL DEFAULT '',
  `size` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `aspect_ratio` varchar(5) NOT NULL DEFAULT '',
  `edid_version` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_monitor_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monitor`
--

LOCK TABLES `monitor` WRITE;
/*!40000 ALTER TABLE `monitor` DISABLE KEYS */;
/*!40000 ALTER TABLE `monitor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motherboard`
--

DROP TABLE IF EXISTS `motherboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motherboard` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `manufacturer` varchar(50) NOT NULL DEFAULT '',
  `model` varchar(50) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `memory_slot_count` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `processor_slot_count` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `processor_type` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_motherboard_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motherboard`
--

LOCK TABLES `motherboard` WRITE;
/*!40000 ALTER TABLE `motherboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `motherboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `netstat`
--

DROP TABLE IF EXISTS `netstat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `netstat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `protocol` enum('tcp','udp','tcp6','udp6','tcp4','udp4','') NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `port` int(5) NOT NULL DEFAULT '0',
  `program` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_netstat_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `netstat`
--

LOCK TABLES `netstat` WRITE;
/*!40000 ALTER TABLE `netstat` DISABLE KEYS */;
/*!40000 ALTER TABLE `netstat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `network`
--

DROP TABLE IF EXISTS `network`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `network` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mac` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(255) NOT NULL DEFAULT '',
  `ip_enabled` varchar(10) NOT NULL DEFAULT '',
  `net_index` varchar(10) NOT NULL DEFAULT '',
  `dhcp_enabled` varchar(100) NOT NULL DEFAULT '',
  `dhcp_server` varchar(30) NOT NULL DEFAULT '',
  `dhcp_lease_obtained` varchar(14) NOT NULL DEFAULT '',
  `dhcp_lease_expires` varchar(14) NOT NULL DEFAULT '',
  `dns_host_name` varchar(100) NOT NULL DEFAULT '',
  `dns_server` varchar(100) NOT NULL DEFAULT '',
  `dns_domain` varchar(100) NOT NULL DEFAULT '',
  `dns_domain_reg_enabled` varchar(10) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `connection` varchar(255) NOT NULL DEFAULT '',
  `connection_status` varchar(30) NOT NULL DEFAULT '',
  `speed` int(10) unsigned NOT NULL DEFAULT '0',
  `slaves` varchar(100) NOT NULL DEFAULT '',
  `ifadminstatus` varchar(100) NOT NULL DEFAULT '',
  `iflastchange` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `net_index` (`net_index`),
  KEY `timestamp` (`last_seen`),
  KEY `mac` (`mac`),
  CONSTRAINT `sys_hw_network_card_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `network`
--

LOCK TABLES `network` WRITE;
/*!40000 ALTER TABLE `network` DISABLE KEYS */;
/*!40000 ALTER TABLE `network` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `change_log`
--

DROP TABLE IF EXISTS `change_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `change_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `db_table` varchar(50) NOT NULL DEFAULT '',
  `db_row` int(10) unsigned NOT NULL DEFAULT '0',
  `db_action` enum('','create','update','delete') NOT NULL DEFAULT '',
  `details` varchar(200) NOT NULL DEFAULT '',
  `user_id` int(10) unsigned DEFAULT NULL,
  `ack_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `external_link` varchar(200) NOT NULL DEFAULT '',
  `external_ident` varchar(200) NOT NULL DEFAULT '',
  `note` varchar(200) NOT NULL DEFAULT '',
  `change_id` int(10) unsigned DEFAULT NULL,
  `change_type` enum('','standard','normal','emergency','unauthorised') NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `change_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `change_log`
--

LOCK TABLES `change_log` WRITE;
/*!40000 ALTER TABLE `change_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `change_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_asset_select`
--

DROP TABLE IF EXISTS `oa_asset_select`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_asset_select` (
  `select_id` int(10) NOT NULL AUTO_INCREMENT,
  `select_name` varchar(50) NOT NULL,
  `select_type` enum('','sw','hw','service','other') NOT NULL DEFAULT '',
  `select_sql` varchar(250) NOT NULL,
  `group_id` int(10) unsigned DEFAULT NULL,
  `group_amount` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`select_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_asset_select`
--

LOCK TABLES `oa_asset_select` WRITE;
/*!40000 ALTER TABLE `oa_asset_select` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_asset_select` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_log`
--

DROP TABLE IF EXISTS `edit_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `system_id` int(10) unsigned DEFAULT NULL,
  `details` varchar(200) NOT NULL DEFAULT '',
  `source` varchar(100) NOT NULL DEFAULT '',
  `weight` int(10) unsigned NOT NULL DEFAULT '0',
  `db_table` varchar(100) NOT NULL DEFAULT '',
  `db_column` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `value` text NOT NULL,
  `previous_value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `edit_log_system_id` (`system_id`),
  CONSTRAINT `edit_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `edit_log_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_log`
--

LOCK TABLES `edit_log` WRITE;
/*!40000 ALTER TABLE `edit_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_change`
--

DROP TABLE IF EXISTS `oa_change`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_change` (
  `change_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `change_short_desc` varchar(200) NOT NULL DEFAULT '',
  `change_reason` text NOT NULL,
  `change_planned_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `change_implemented_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `change_external_id` varchar(200) NOT NULL DEFAULT '',
  `change_external_link` varchar(200) NOT NULL DEFAULT '',
  `change_authorising_person` varchar(100) NOT NULL DEFAULT '',
  `change_performing_person` varchar(100) NOT NULL DEFAULT '',
  `change_detailed_desc` text NOT NULL,
  `change_potential_issues` text NOT NULL,
  `change_backout_plan` text NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`change_id`),
  KEY `oa_change_user_id` (`user_id`),
  CONSTRAINT `oa_change_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_change`
--

LOCK TABLES `oa_change` WRITE;
/*!40000 ALTER TABLE `oa_change` DISABLE KEYS */;
INSERT INTO `oa_change` VALUES (1,'Default Change.','','0000-00-00 00:00:00','0000-00-00 00:00:00','','','','','','','',1,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `oa_change` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `networks`
--

DROP TABLE IF EXISTS `networks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `networks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `networks`
--

LOCK TABLES `networks` WRITE;
/*!40000 ALTER TABLE `networks` DISABLE KEYS */;
/*!40000 ALTER TABLE `networks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_config`
--

DROP TABLE IF EXISTS `oa_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_config` (
  `config_name` varchar(45) NOT NULL DEFAULT '',
  `config_value` varchar(250) NOT NULL DEFAULT '',
  `config_editable` varchar(1) NOT NULL DEFAULT 'n',
  `config_edited_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `config_edited_by` int(10) unsigned NOT NULL DEFAULT '0',
  `config_description` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_config`
--

LOCK TABLES `oa_config` WRITE;
/*!40000 ALTER TABLE `oa_config` DISABLE KEYS */;
INSERT INTO `oa_config` VALUES ('ad_domain','','y','0000-00-00 00:00:00',0,'The domain name against which your users will validate to log on to Open-AudIT. EG - open-audit.org');
INSERT INTO `oa_config` VALUES ('ad_server','','y','0000-00-00 00:00:00',0,'The IP Address of the domain controller your users will validate to log to Open-AudIT. EG - 192.168.0.1');
INSERT INTO `oa_config` VALUES ('blessed_subnets_use','y','y','0000-00-00 00:00:00',0,'Should we only accept data from the blessed subnets list.');
INSERT INTO `oa_config` VALUES ('default_ipmi_password','','y','0000-00-00 00:00:00',0,'The default password used by Open-AudIT to audit devices via IPMI.');
INSERT INTO `oa_config` VALUES ('default_ipmi_username','','y','0000-00-00 00:00:00',0,'The default username used by Open-AudIT to audit devices via IPMI.');
INSERT INTO `oa_config` VALUES ('default_network_address','','y','0000-00-00 00:00:00',0,'The ip address or resolvable hostname used by external devices to talk to Open-AudIT.');
INSERT INTO `oa_config` VALUES ('default_snmp_community','JkrvUXb3p2EgImzlSLbgLiOZQT7lrWLzFuCJW44UfFtp7LZwZa1K7TRdpCIce1YNocQHJCHqoKYgKoRd+yoKxA==','y','0000-00-00 00:00:00',0,'The default community string Open-AudIT will use when connecting to a new device.');
INSERT INTO `oa_config` VALUES ('default_ssh_password','','y','0000-00-00 00:00:00',0,'The default password used by Open-AudIT to audit devices via SSH.');
INSERT INTO `oa_config` VALUES ('default_ssh_username','','y','0000-00-00 00:00:00',0,'The default username used by Open-AudIT to audit devices via SSH.');
INSERT INTO `oa_config` VALUES ('default_windows_domain','','y','0000-00-00 00:00:00',0,'The default active directory domain used by Open-AudIT to audit Windows PCs.');
INSERT INTO `oa_config` VALUES ('default_windows_password','','y','0000-00-00 00:00:00',0,'The default password used by Open-AudIT to audit Windows PCs.');
INSERT INTO `oa_config` VALUES ('default_windows_username','','y','0000-00-00 00:00:00',0,'The default username used by Open-AudIT to audit Windows PCs.');
INSERT INTO `oa_config` VALUES ('discovery_create_alerts','y','y','0000-00-00 00:00:00',0,'Should Open-AudIT create an entry in the alert table if a change is detected.');
INSERT INTO `oa_config` VALUES ('discovery_ip_exclude','','y','0000-00-00 00:00:00',0,'Populate this list with ip addresses to be excluded from discovery. IPs should be separated by a space.');
INSERT INTO `oa_config` VALUES ('discovery_ip_match','n','y','0000-00-00 00:00:00',0,'Should we match a device based only on its ip during discovery.');
INSERT INTO `oa_config` VALUES ('discovery_linux_script_directory','/tmp/','y','0000-00-00 00:00:00',0,'The directory the script is copied into on the target device.');
INSERT INTO `oa_config` VALUES ('discovery_linux_script_permissions','700','y','0000-00-00 00:00:00',0,'The permissions set on the audit_linux.sh script when it is copied to the target device.');
INSERT INTO `oa_config` VALUES ('discovery_mac_match','n','y','0000-00-00 00:00:00',0,'Should we match a device based only on its mac address during discovery.');
INSERT INTO `oa_config` VALUES ('discovery_name_match','y','y','0000-00-00 00:00:00',0,'Should we match a device based only on its hostname during discovery.');
INSERT INTO `oa_config` VALUES ('discovery_nmap_os','n','y','0000-00-00 00:00:00',0,'When discovery runs Nmap, should we use the -O flag to capture OS information (will slow down scan and requires SUID on the Nmap binary under Linux).');
INSERT INTO `oa_config` VALUES ('discovery_update_groups','y','y','0000-00-00 00:00:00',0,'Should Open-AudIT update the device groups after discovering a device.');
INSERT INTO `oa_config` VALUES ('discovery_use_ipmi','y','y','0000-00-00 00:00:00',0,'Should we use ipmitool for discovering management ports if ipmitool is installed.');
INSERT INTO `oa_config` VALUES ('display_version','1.12.6','n','0000-00-00 00:00:00',0,'The version shown on the web pages.');
INSERT INTO `oa_config` VALUES ('distinct_groups','y','y','0000-00-00 00:00:00',0,'Display Groups on the homepage, separated into the type of each Group.');
INSERT INTO `oa_config` VALUES ('download_reports','download','y','0000-00-00 00:00:00',0,'Tells Open-AudIT to advise the browser to download as a file or display the csv, xml, json reports. Valid values are download and display.');
INSERT INTO `oa_config` VALUES ('internal_version','20160409','n','0000-00-00 00:00:00',0,'The internal numerical version.');
INSERT INTO `oa_config` VALUES ('logo','logo-banner-oac-oae','y','0000-00-00 00:00:00',0,'The logo to be used in Open-AudIT. Should be a 475x60 .png. Name should not include the file extension. logo-banner-oac-oae is the default.');
INSERT INTO `oa_config` VALUES ('log_level','5','y','0000-00-00 00:00:00',0,'Tells Open-AudIT which severity of event (at least) should be logged.');
INSERT INTO `oa_config` VALUES ('log_style','syslog','y','0000-00-00 00:00:00',0,'Tells Open-AudIT which log format to use. Valid values are json and syslog.');
INSERT INTO `oa_config` VALUES ('maps_url','/omk/oae/map','y','0000-00-00 00:00:00',0,'The web server address of opMaps.');
INSERT INTO `oa_config` VALUES ('network_group_auto_create','y','y','0000-00-00 00:00:00',0,'Have Open-AudIT automatically create Groups based on Subnet.');
INSERT INTO `oa_config` VALUES ('network_group_homepage_limit','20','y','0000-00-00 00:00:00',0,'The number of network groups to display on the homepage.');
INSERT INTO `oa_config` VALUES ('network_group_subnet','30','y','0000-00-00 00:00:00',0,'If the netmask is equal to or greater than this number, do not create a network group.');
INSERT INTO `oa_config` VALUES ('nmis','n','y','0000-00-00 00:00:00',0,'Enable import / export to NMIS functions.');
INSERT INTO `oa_config` VALUES ('nmis_url','','y','0000-00-00 00:00:00',0,'The web server address of NMIS.');
INSERT INTO `oa_config` VALUES ('non_admin_search','y','y','0000-00-00 00:00:00',0,'Enable or disable search for non-Administrators');
INSERT INTO `oa_config` VALUES ('oae_license','','n','0000-00-00 00:00:00',0,'License status of Open-AudIT Enterprise.');
INSERT INTO `oa_config` VALUES ('oae_prompt','2015-06-01','n','0000-00-00 00:00:00',0,'Prompt to activate a license for Open-AudIT Enterprise.');
INSERT INTO `oa_config` VALUES ('oae_url','/omk/oae','y','0000-00-00 00:00:00',0,'The web server address of Open-AudIT Enterprise.');
INSERT INTO `oa_config` VALUES ('page_refresh','300','y','0000-00-00 00:00:00',0,'Interval in seconds between auto-refreshing the page. Set to 0 to cancel auto-refresh.');
INSERT INTO `oa_config` VALUES ('rss_enable','y','y','0000-00-00 00:00:00',0,'Enable the RSS feed.');
INSERT INTO `oa_config` VALUES ('rss_url','https://community.opmantek.com/rss/OA.xml','y','0000-00-00 00:00:00',0,'The RSS feed URL.');
INSERT INTO `oa_config` VALUES ('show_passwords','n','y','0000-00-00 00:00:00',0,'Show any passwords on forms.');
INSERT INTO `oa_config` VALUES ('show_snmp_community','n','y','0000-00-00 00:00:00',0,'Show the SNMP community string on forms.');
/*!40000 ALTER TABLE `oa_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_connection`
--

DROP TABLE IF EXISTS `oa_connection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_connection` (
  `connection_id` int(10) NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `service_identifier` varchar(100) NOT NULL,
  `speed` float(7,3) NOT NULL DEFAULT '0.000',
  `location_id_a` int(10) unsigned NOT NULL DEFAULT '0',
  `location_id_b` int(10) unsigned NOT NULL DEFAULT '0',
  `system_id_a` int(10) unsigned DEFAULT NULL,
  `system_id_b` int(10) unsigned DEFAULT NULL,
  `line_number_a` varchar(100) NOT NULL,
  `line_number_b` varchar(100) NOT NULL,
  `ip_address_external_a` varchar(30) NOT NULL,
  `ip_address_external_b` varchar(30) NOT NULL,
  `ip_address_internal_a` varchar(30) NOT NULL,
  `ip_address_internal_b` varchar(30) NOT NULL,
  PRIMARY KEY (`connection_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_connection`
--

LOCK TABLES `oa_connection` WRITE;
/*!40000 ALTER TABLE `oa_connection` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_connection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_group`
--

DROP TABLE IF EXISTS `oa_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_group` (
  `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL DEFAULT '',
  `group_padded_name` varchar(100) NOT NULL DEFAULT '',
  `group_dynamic_select` text NOT NULL,
  `group_parent` int(10) NOT NULL DEFAULT '1',
  `group_description` varchar(255) NOT NULL DEFAULT '',
  `group_category` enum('application','device','general','location','network','org','os') NOT NULL DEFAULT 'general',
  `group_display_sql` text NOT NULL,
  `group_icon` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`group_id`),
  KEY `group_id_index` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_group`
--

LOCK TABLES `oa_group` WRITE;
/*!40000 ALTER TABLE `oa_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_group_column`
--

DROP TABLE IF EXISTS `oa_group_column`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_group_column` (
  `column_id` int(10) NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `column_order` int(10) unsigned NOT NULL,
  `column_name` varchar(100) NOT NULL,
  `column_variable` varchar(100) NOT NULL,
  `column_type` enum('','link','image','ip_address','text','timestamp','url') NOT NULL DEFAULT '',
  `column_link` varchar(100) NOT NULL,
  `column_secondary` varchar(100) NOT NULL,
  `column_ternary` varchar(100) NOT NULL,
  `column_align` varchar(6) NOT NULL,
  PRIMARY KEY (`column_id`),
  KEY `group_id` (`group_id`),
  CONSTRAINT `oa_group_column_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_group_column`
--

LOCK TABLES `oa_group_column` WRITE;
/*!40000 ALTER TABLE `oa_group_column` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_group_column` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_group_sys`
--

DROP TABLE IF EXISTS `oa_group_sys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_group_sys` (
  `group_sys_id` int(10) NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `group_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`group_sys_id`),
  KEY `system_id` (`system_id`),
  KEY `group_id` (`group_id`),
  KEY `system_id_index` (`system_id`),
  CONSTRAINT `oa_group_sys_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_group_sys_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_group_sys`
--

LOCK TABLES `oa_group_sys` WRITE;
/*!40000 ALTER TABLE `oa_group_sys` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_group_sys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_group_user`
--

DROP TABLE IF EXISTS `oa_group_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_group_user` (
  `group_user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `group_user_access_level` int(10) NOT NULL,
  PRIMARY KEY (`group_user_id`),
  KEY `user_id` (`user_id`),
  KEY `group_id` (`group_id`),
  KEY `user_id_index` (`user_id`),
  CONSTRAINT `oa_group_user_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_group_user_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_group_user`
--

LOCK TABLES `oa_group_user` WRITE;
/*!40000 ALTER TABLE `oa_group_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_group_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_location`
--

DROP TABLE IF EXISTS `oa_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_location` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `room` varchar(100) NOT NULL DEFAULT '',
  `suite` varchar(100) NOT NULL DEFAULT '',
  `level` varchar(100) NOT NULL DEFAULT '',
  `address` varchar(100) NOT NULL DEFAULT '',
  `suburb` varchar(100) NOT NULL DEFAULT '',
  `city` varchar(100) NOT NULL DEFAULT '',
  `district` varchar(100) NOT NULL DEFAULT '',
  `region` varchar(100) NOT NULL DEFAULT '',
  `area` varchar(100) NOT NULL DEFAULT '',
  `state` varchar(100) NOT NULL DEFAULT '',
  `postcode` varchar(10) NOT NULL DEFAULT '',
  `country` varchar(100) NOT NULL DEFAULT '',
  `tags` varchar(250) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL DEFAULT '',
  `picture` varchar(100) NOT NULL DEFAULT '',
  `latitude` float(10,6) NOT NULL,
  `longitude` float(10,6) NOT NULL,
  `geo` varchar(200) NOT NULL DEFAULT '',
  `comments` varchar(100) NOT NULL DEFAULT '',
  `icon` varchar(100) NOT NULL DEFAULT '',
  `group_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_location`
--

LOCK TABLES `oa_location` WRITE;
/*!40000 ALTER TABLE `oa_location` DISABLE KEYS */;
INSERT INTO `oa_location` VALUES (0,'Default Location','Office','','','','','','Gold Coast','','','','Queensland','','Australia','','','',-28.017260,153.425705,'','Default location','office',0);
/*!40000 ALTER TABLE `oa_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_org`
--

DROP TABLE IF EXISTS `oa_org`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_org` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `group_id` int(10) unsigned NOT NULL DEFAULT '0',
  `comments` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_org`
--

LOCK TABLES `oa_org` WRITE;
/*!40000 ALTER TABLE `oa_org` DISABLE KEYS */;
INSERT INTO `oa_org` VALUES (0,'Default Organisation',0,0,'');
/*!40000 ALTER TABLE `oa_org` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_report`
--

DROP TABLE IF EXISTS `oa_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_report` (
  `report_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `report_name` varchar(100) NOT NULL DEFAULT '',
  `report_description` text NOT NULL,
  `report_display_in_menu` enum('y','n') NOT NULL DEFAULT 'y',
  `report_sql` text NOT NULL,
  `report_display_sql` text NOT NULL,
  `report_view_file` varchar(100) NOT NULL DEFAULT '',
  `report_view_contents` text NOT NULL,
  `report_processing` text NOT NULL,
  `report_sort_column` int(10) unsigned NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_report`
--

LOCK TABLES `oa_report` WRITE;
/*!40000 ALTER TABLE `oa_report` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_report_column`
--

DROP TABLE IF EXISTS `oa_report_column`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_report_column` (
  `column_id` int(10) NOT NULL AUTO_INCREMENT,
  `report_id` int(10) unsigned NOT NULL,
  `column_order` int(10) unsigned NOT NULL,
  `column_name` varchar(100) NOT NULL,
  `column_variable` varchar(100) NOT NULL,
  `column_type` enum('','link','image','ip_address','text','timestamp','url') NOT NULL DEFAULT '',
  `column_link` varchar(100) NOT NULL,
  `column_secondary` varchar(100) NOT NULL,
  `column_ternary` varchar(100) NOT NULL,
  `column_align` varchar(6) NOT NULL,
  PRIMARY KEY (`column_id`),
  KEY `report_id` (`report_id`),
  CONSTRAINT `oa_report_column_group_id` FOREIGN KEY (`report_id`) REFERENCES `oa_report` (`report_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=364 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_report_column`
--

LOCK TABLES `oa_report_column` WRITE;
/*!40000 ALTER TABLE `oa_report_column` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_report_column` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_temp`
--

DROP TABLE IF EXISTS `oa_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_temp` (
  `temp_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `temp_name` text NOT NULL,
  `temp_value` text NOT NULL,
  `temp_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`temp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_temp`
--

LOCK TABLES `oa_temp` WRITE;
/*!40000 ALTER TABLE `oa_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_user`
--

DROP TABLE IF EXISTS `oa_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `lang` varchar(100) NOT NULL,
  `display_count` smallint(6) NOT NULL DEFAULT '10',
  `theme` varchar(100) NOT NULL,
  `admin` varchar(1) NOT NULL,
  `active` varchar(1) NOT NULL DEFAULT 'y',
  `sam` int(10) NOT NULL DEFAULT '1',
  `permissions` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_user`
--

LOCK TABLES `oa_user` WRITE;
/*!40000 ALTER TABLE `oa_user` DISABLE KEYS */;
INSERT INTO `oa_user` VALUES (1,'admin','0ab0a153e5bbcd80c50a02da8c97f3c87686eb8512f5457d30e328d2d4448c8968e9f4875c2eb61356197b851dd33f90658b20b32139233b217be54d903ca3b6','Administrator','admin@openaudit','en',10,'tango','y','y',3,'');
INSERT INTO `oa_user` VALUES (2,'open-audit_enterprise','43629bd846bb90e40221d5276c832857ca51e49e325f7344704543439ffd6b6d3a963a32a41f55fca6d995fd302acbe03ea7d8bf2b3af91d662d497b0ad9ba1e','Open-AudIT Enterprise','','en',10,'tango','y','y',1,'');
INSERT INTO `oa_user` VALUES (3,'nmis','5a7f9a638ea430196d765ef8d3875eafd64ee3d155ceddaced75467a76b97ab24080cba4a2e74cde03799a6a49dbc5c36ee204eff1d5f42e08cf7a423fdf9757','NMIS','','en',10,'tango','y','y',3,'');
/*!40000 ALTER TABLE `oa_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_user_org`
--

DROP TABLE IF EXISTS `oa_user_org`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_user_org` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `org_id` int(10) unsigned NOT NULL,
  `access_level` int(10) unsigned NOT NULL,
  `permissions` text NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `org_id` (`org_id`),
  CONSTRAINT `oa_user_org_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `oa_user_org_org_id` FOREIGN KEY (`org_id`) REFERENCES `oa_org` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_user_org`
--

LOCK TABLES `oa_user_org` WRITE;
/*!40000 ALTER TABLE `oa_user_org` DISABLE KEYS */;
INSERT INTO `oa_user_org` VALUES (NULL, 1, 0, 10, '');
INSERT INTO `oa_user_org` VALUES (NULL, 2, 0, 10, '');
INSERT INTO `oa_user_org` VALUES (NULL, 3, 0, 10, '');
/*!40000 ALTER TABLE `oa_user_org` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_user_sessions`
--

DROP TABLE IF EXISTS `oa_user_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_user_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_user_sessions`
--

LOCK TABLES `oa_user_sessions` WRITE;
/*!40000 ALTER TABLE `oa_user_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_user_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `optical`
--

DROP TABLE IF EXISTS `optical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `optical` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `model` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  `device` varchar(100) NOT NULL DEFAULT '',
  `mount_point` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_optical_drive_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16947 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `optical`
--

LOCK TABLES `optical` WRITE;
/*!40000 ALTER TABLE `optical` DISABLE KEYS */;
/*!40000 ALTER TABLE `optical` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partition`
--

DROP TABLE IF EXISTS `partition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partition` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  `device` varchar(100) NOT NULL DEFAULT '',
  `hard_drive_index` varchar(100) NOT NULL DEFAULT '',
  `partition_disk_index` varchar(50) NOT NULL DEFAULT '',
  `mount_type` enum('mount point', 'partition', 'other') NOT NULL DEFAULT 'partition',
  `mount_point` varchar(100) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '1',
  `free` int(10) unsigned NOT NULL DEFAULT '1',
  `used` int(10) unsigned NOT NULL DEFAULT '1',
  `format` varchar(20) NOT NULL DEFAULT '',
  `bootable` varchar(10) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT 'local',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_partition_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partition`
--

LOCK TABLES `partition` WRITE;
/*!40000 ALTER TABLE `partition` DISABLE KEYS */;
/*!40000 ALTER TABLE `partition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `processor`
--

DROP TABLE IF EXISTS `processor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `processor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `physical_count` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `core_count` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `logical_count` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `description` varchar(100) NOT NULL DEFAULT '',
  `speed` int(10) unsigned NOT NULL DEFAULT '0',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `architecture` varchar(100) NOT NULL DEFAULT '',
  `socket` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_processor_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `processor`
--

LOCK TABLES `processor` WRITE;
/*!40000 ALTER TABLE `processor` DISABLE KEYS */;
/*!40000 ALTER TABLE `processor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `san`
--

DROP TABLE IF EXISTS `san`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `san` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(100) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `serial` varchar(50) NOT NULL DEFAULT '',
  `part_number` varchar(100) NOT NULL DEFAULT '',
  `location` varchar(100) NOT NULL DEFAULT '',
  `attached_to` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `date_of_manufacture` varchar(100) NOT NULL DEFAULT '',
  `notes` text NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `san_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san`
--

LOCK TABLES `san` WRITE;
/*!40000 ALTER TABLE `san` DISABLE KEYS */;
/*!40000 ALTER TABLE `san` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scsi`
--

DROP TABLE IF EXISTS `scsi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scsi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(200) NOT NULL DEFAULT '',
  `device` varchar(200) NOT NULL DEFAULT '',
  `type` enum('raid','hba','other','san controller','san shelf') NOT NULL DEFAULT 'other',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_scsi_controller_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scsi`
--

LOCK TABLES `scsi` WRITE;
/*!40000 ALTER TABLE `scsi` DISABLE KEYS */;
/*!40000 ALTER TABLE `scsi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `server`
--

DROP TABLE IF EXISTS `server`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `server` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `full_name` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  `version` varchar(100) NOT NULL DEFAULT '',
  `version_string` varchar(100) NOT NULL DEFAULT '',
  `edition` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `port` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `server_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `server`
--

LOCK TABLES `server` WRITE;
/*!40000 ALTER TABLE `server` DISABLE KEYS */;
/*!40000 ALTER TABLE `server` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `server_item`
--

DROP TABLE IF EXISTS `server_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `server_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `server_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(100) NOT NULL DEFAULT '',
  `parent_name` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  `id_internal` varchar(100) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `hostname` varchar(100) NOT NULL DEFAULT '',
  `port` smallint(5) unsigned NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT '',
  `parent_id` int(11) unsigned DEFAULT NULL,
  `instance` varchar(100) NOT NULL DEFAULT '',
  `path` varchar(250) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `log_status` varchar(100) NOT NULL DEFAULT '',
  `log_format` varchar(100) NOT NULL DEFAULT '',
  `log_path` varchar(100) NOT NULL DEFAULT '',
  `log_rotation` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `server_item_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `server_item`
--

LOCK TABLES `server_item` WRITE;
/*!40000 ALTER TABLE `server_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `server_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  `executable` text NOT NULL,
  `user` varchar(100) NOT NULL DEFAULT '',
  `start_mode` varchar(200) NOT NULL DEFAULT '',
  `state` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `first_seen` (`first_seen`),
  KEY `last_seen` (`last_seen`),
  KEY `name` (`name`),
  KEY `description` (`description`),
  CONSTRAINT `sys_sw_service_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `share`
--

DROP TABLE IF EXISTS `share`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `share` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `description` varchar(250) NOT NULL DEFAULT '',
  `name` varchar(250) NOT NULL DEFAULT '',
  `path` varchar(250) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `users` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_share_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `share`
--

LOCK TABLES `share` WRITE;
/*!40000 ALTER TABLE `share` DISABLE KEYS */;
/*!40000 ALTER TABLE `share` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `software`
--

DROP TABLE IF EXISTS `software`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `software` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(255) NOT NULL DEFAULT '',
  `version` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL DEFAULT '',
  `uninstall` mediumtext NOT NULL,
  `install_date` varchar(100) NOT NULL DEFAULT '',
  `installed_by` varchar(100) NOT NULL DEFAULT '',
  `installed_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publisher` varchar(255) NOT NULL DEFAULT '',
  `install_source` varchar(200) NOT NULL DEFAULT '',
  `system_component` varchar(2) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(200) NOT NULL DEFAULT '',
  `version_padded` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `first_seen` (`first_seen`),
  KEY `last_seen` (`last_seen`),
  KEY `name` (`name`),
  CONSTRAINT `sys_sw_software_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `software`
--

LOCK TABLES `software` WRITE;
/*!40000 ALTER TABLE `software` DISABLE KEYS */;
/*!40000 ALTER TABLE `software` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `software_key`
--

DROP TABLE IF EXISTS `software_key`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `software_key` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(250) NOT NULL DEFAULT '',
  `string` varchar(100) NOT NULL DEFAULT '',
  `rel` varchar(100) NOT NULL DEFAULT '',
  `edition` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_software_key_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `software_key`
--

LOCK TABLES `software_key` WRITE;
/*!40000 ALTER TABLE `software_key` DISABLE KEYS */;
/*!40000 ALTER TABLE `software_key` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sound`
--

DROP TABLE IF EXISTS `sound`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sound` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(100) NOT NULL DEFAULT '',
  `device` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_sound_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sound`
--

LOCK TABLES `sound` WRITE;
/*!40000 ALTER TABLE `sound` DISABLE KEYS */;
/*!40000 ALTER TABLE `sound` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `warranty`
--

DROP TABLE IF EXISTS `warranty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `warranty` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `provider` varchar(200) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `start` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_warranty_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warranty`
--

LOCK TABLES `warranty` WRITE;
/*!40000 ALTER TABLE `warranty` DISABLE KEYS */;
/*!40000 ALTER TABLE `warranty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_man_additional_fields`
--

DROP TABLE IF EXISTS `sys_man_additional_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_man_additional_fields` (
  `field_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `field_name` varchar(100) NOT NULL DEFAULT '',
  `field_type` enum('varchar','bool','int','memo','list','datetime','timestamp') NOT NULL DEFAULT 'varchar',
  `field_values` varchar(100) NOT NULL DEFAULT '',
  `field_sys_type` varchar(100) NOT NULL DEFAULT '',
  `field_derived_type` varchar(100) NOT NULL DEFAULT '',
  `field_derived_sql` varchar(100) NOT NULL DEFAULT '',
  `field_placement` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`field_id`),
  KEY `sys_man_additional_fields_group` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_man_additional_fields`
--

LOCK TABLES `sys_man_additional_fields` WRITE;
/*!40000 ALTER TABLE `sys_man_additional_fields` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_man_additional_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_man_additional_fields_data`
--

DROP TABLE IF EXISTS `sys_man_additional_fields_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_man_additional_fields_data` (
  `field_details_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `field_id` int(10) unsigned NOT NULL DEFAULT '0',
  `field_datetime` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `field_varchar` varchar(255) NOT NULL DEFAULT '',
  `field_int` int(10) NOT NULL DEFAULT '0',
  `field_memo` text NOT NULL,
  PRIMARY KEY (`field_details_id`),
  KEY `system_id` (`system_id`),
  KEY `sys_man_additional_fields_data_field_id` (`field_id`),
  CONSTRAINT `sys_man_additional_fields_data_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_man_additional_fields_data_field_id` FOREIGN KEY (`field_id`) REFERENCES `sys_man_additional_fields` (`field_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_man_additional_fields_data`
--

LOCK TABLES `sys_man_additional_fields_data` WRITE;
/*!40000 ALTER TABLE `sys_man_additional_fields_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_man_additional_fields_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_man_attachment`
--

DROP TABLE IF EXISTS `sys_man_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_man_attachment` (
  `att_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `att_title` varchar(200) NOT NULL DEFAULT '',
  `att_filename` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`att_id`),
  KEY `system_id` (`system_id`),
  KEY `att_user_id` (`user_id`),
  CONSTRAINT `att_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `att_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_man_attachment`
--

LOCK TABLES `sys_man_attachment` WRITE;
/*!40000 ALTER TABLE `sys_man_attachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_man_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit_log`
--

DROP TABLE IF EXISTS `audit_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT '0',
  `username` varchar(45) NOT NULL DEFAULT '',
  `type` varchar(45) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `debug` text NOT NULL,
  `wmi_fails` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit_log`
--

LOCK TABLES `audit_log` WRITE;
/*!40000 ALTER TABLE `audit_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_man_invoice`
--

DROP TABLE IF EXISTS `sys_man_invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_man_invoice` (
  `invoice_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned DEFAULT NULL,
  `purchase_order` varchar(100) NOT NULL DEFAULT '',
  `cost_center` varchar(100) NOT NULL DEFAULT '',
  `date_received` varchar(100) NOT NULL DEFAULT '',
  `date_paid` varchar(100) NOT NULL DEFAULT '',
  `supplier` varchar(100) NOT NULL DEFAULT '',
  `filename` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_man_invoice`
--

LOCK TABLES `sys_man_invoice` WRITE;
/*!40000 ALTER TABLE `sys_man_invoice` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_man_invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_man_invoice_line`
--

DROP TABLE IF EXISTS `sys_man_invoice_line`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_man_invoice_line` (
  `line_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invoice_id` int(10) unsigned DEFAULT NULL,
  `line_text` varchar(200) NOT NULL DEFAULT '',
  `system_id` int(10) unsigned DEFAULT NULL,
  `man_serial` varchar(200) NOT NULL DEFAULT '',
  `man_asset_number` varchar(200) NOT NULL DEFAULT '',
  `line_amount` varchar(200) NOT NULL DEFAULT '',
  `notes` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`line_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_man_invoice_line`
--

LOCK TABLES `sys_man_invoice_line` WRITE;
/*!40000 ALTER TABLE `sys_man_invoice_line` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_man_invoice_line` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_man_notes`
--

DROP TABLE IF EXISTS `sys_man_notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_man_notes` (
  `notes_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `notes_title` varchar(200) NOT NULL DEFAULT '',
  `notes_text` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`notes_id`),
  KEY `system_id` (`system_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `sys_man_notes_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_man_notes_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_man_notes`
--

LOCK TABLES `sys_man_notes` WRITE;
/*!40000 ALTER TABLE `sys_man_notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_man_notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dns`
--

DROP TABLE IF EXISTS `dns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(100) NOT NULL DEFAULT '',
  `fqdn` varchar(200) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_dns_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dns`
--

LOCK TABLES `dns` WRITE;
/*!40000 ALTER TABLE `dns` DISABLE KEYS */;
/*!40000 ALTER TABLE `dns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagefile`
--

DROP TABLE IF EXISTS `pagefile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagefile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(100) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `initial_size` int(10) unsigned NOT NULL DEFAULT '0',
  `max_size` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_pagefile_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagefile`
--

LOCK TABLES `pagefile` WRITE;
/*!40000 ALTER TABLE `pagefile` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagefile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `print_queue`
--

DROP TABLE IF EXISTS `print_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `print_queue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  `device` varchar(200) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `port_name` varchar(100) NOT NULL DEFAULT '',
  `shared` varchar(100) NOT NULL DEFAULT '',
  `shared_name` varchar(100) NOT NULL DEFAULT '',
  `location` varchar(100) NOT NULL DEFAULT '',
  `color` varchar(100) NOT NULL DEFAULT '',
  `duplex` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) DEFAULT NULL,
  `capabilities` varchar(200) NOT NULL DEFAULT '',
  `driver` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_print_queue_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `print_queue`
--

LOCK TABLES `print_queue` WRITE;
/*!40000 ALTER TABLE `print_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `print_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `route`
--

DROP TABLE IF EXISTS `route`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `route` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `destination` varchar(20) NOT NULL DEFAULT '',
  `mask` varchar(20) NOT NULL DEFAULT '',
  `metric` varchar(10) NOT NULL DEFAULT '',
  `next_hop` varchar(40) NOT NULL DEFAULT '',
  `protocol` varchar(10) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_ip_route_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `route`
--

LOCK TABLES `route` WRITE;
/*!40000 ALTER TABLE `route` DISABLE KEYS */;
/*!40000 ALTER TABLE `route` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(100) NOT NULL DEFAULT '',
  `next_run` varchar(50) NOT NULL DEFAULT '',
  `status` varchar(50) NOT NULL DEFAULT '',
  `last_run` varchar(50) NOT NULL DEFAULT '',
  `last_result` varchar(50) NOT NULL DEFAULT '',
  `creator` varchar(50) NOT NULL DEFAULT '',
  `schedule` varchar(100) NOT NULL DEFAULT '',
  `task` varchar(100) NOT NULL DEFAULT '',
  `state` varchar(10) NOT NULL DEFAULT '',
  `runas` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `task_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `variable`
--

DROP TABLE IF EXISTS `variable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `variable` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `program` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_variable_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `variable`
--

LOCK TABLES `variable` WRITE;
/*!40000 ALTER TABLE `variable` DISABLE KEYS */;
/*!40000 ALTER TABLE `variable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vm`
--

DROP TABLE IF EXISTS `vm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vm` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `guest_system_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `vm_id` int(12) unsigned DEFAULT NULL,
  `uuid` text NOT NULL,
  `vm_group` text NOT NULL,
  `config_file` text NOT NULL,
  `memory_count` int(12) unsigned NOT NULL DEFAULT '0',
  `cpu_count` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT '',
  `icon` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_virtual_machine_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vm`
--

LOCK TABLES `vm` WRITE;
/*!40000 ALTER TABLE `vm` DISABLE KEYS */;
/*!40000 ALTER TABLE `vm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system`
--

DROP TABLE IF EXISTS `system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system` (
  `system_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_key` varchar(200) NOT NULL DEFAULT '',
  `uuid` varchar(100) NOT NULL DEFAULT '',
  `dbus_identifier` varchar(255) NOT NULL DEFAULT '',
  `hostname` varchar(100) NOT NULL DEFAULT '',
  `domain` varchar(100) NOT NULL DEFAULT '',
  `fqdn` text NOT NULL,
  `description` text NOT NULL,
  `comments` text NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT '',
  `icon` varchar(50) NOT NULL DEFAULT '',
  `os_group` varchar(50) NOT NULL DEFAULT '',
  `os_family` varchar(50) NOT NULL DEFAULT '',
  `os_name` varchar(100) NOT NULL DEFAULT '',
  `os_version` varchar(50) NOT NULL DEFAULT '',
  `linked_sys` int(10) NOT NULL DEFAULT '0',
  `serial` varchar(250) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(50) NOT NULL DEFAULT '',
  `uptime` varchar(50) NOT NULL DEFAULT '',
  `form_factor` varchar(50) NOT NULL DEFAULT '',
  `pc_os_bit` varchar(3) NOT NULL DEFAULT '',
  `pc_memory` int(10) NOT NULL DEFAULT '0',
  `pc_num_processor` int(10) NOT NULL DEFAULT '0',
  `pc_date_os_installation` date NOT NULL DEFAULT '0000-00-00',
  `printer_port_name` varchar(50) NOT NULL DEFAULT '',
  `printer_shared` varchar(50) NOT NULL DEFAULT '',
  `printer_shared_name` varchar(50) NOT NULL DEFAULT '',
  `printer_color` varchar(5) NOT NULL DEFAULT '',
  `printer_duplex` varchar(5) NOT NULL DEFAULT '',
  `man_os_group` varchar(50) NOT NULL DEFAULT '',
  `man_os_family` varchar(50) NOT NULL DEFAULT '',
  `man_os_name` varchar(100) NOT NULL DEFAULT '',
  `man_domain` varchar(100) NOT NULL DEFAULT '',
  `man_status` enum('production','deleted','lost','maintenance','retired','unallocated') NOT NULL DEFAULT 'production',
  `man_environment` enum('production','dev','dr','eval','pre-prod','test','train','uat') NOT NULL DEFAULT 'production',
  `man_criticality` enum('critical','normal','low') NOT NULL DEFAULT 'normal',
  `man_class` enum('desktop','laptop','tablet','workstation','server','virtual server','virtual desktop','','hypervisor') NOT NULL DEFAULT '',
  `man_description` text NOT NULL,
  `man_function` varchar(100) NOT NULL DEFAULT '',
  `man_type` varchar(100) NOT NULL DEFAULT '',
  `man_ip_address` varchar(30) NOT NULL DEFAULT '',
  `man_owner` varchar(100) NOT NULL DEFAULT '',
  `man_org_id` int(10) unsigned NOT NULL DEFAULT '0',
  `man_location_id` int(10) unsigned NOT NULL DEFAULT '0',
  `man_location_level` varchar(100) NOT NULL DEFAULT '',
  `man_location_suite` varchar(100) NOT NULL DEFAULT '',
  `man_location_room` varchar(100) NOT NULL DEFAULT '',
  `man_location_rack` varchar(100) NOT NULL DEFAULT '',
  `man_location_rack_position` varchar(100) NOT NULL DEFAULT '',
  `man_location_rack_size` int(10) unsigned NOT NULL DEFAULT '0',
  `man_location_latitude` float(10,6) NOT NULL,
  `man_location_longitude` float(10,6) NOT NULL,
  `man_serial` varchar(250) NOT NULL DEFAULT '',
  `man_asset_number` varchar(50) NOT NULL DEFAULT '',
  `man_model` varchar(50) NOT NULL DEFAULT '',
  `man_manufacturer` varchar(50) NOT NULL DEFAULT '',
  `man_form_factor` varchar(50) NOT NULL DEFAULT '',
  `man_vm_server_name` varchar(150) NOT NULL DEFAULT '',
  `man_vm_system_id` varchar(150) NOT NULL DEFAULT '',
  `man_vm_group` varchar(150) NOT NULL DEFAULT '',
  `man_cluster_name` varchar(150) NOT NULL DEFAULT '',
  `invoice_id` int(10) unsigned DEFAULT NULL,
  `man_purchase_invoice` varchar(50) NOT NULL DEFAULT '',
  `man_purchase_order_number` varchar(50) NOT NULL DEFAULT '',
  `man_purchase_cost_center` varchar(50) NOT NULL DEFAULT '',
  `man_purchase_vendor` varchar(100) NOT NULL DEFAULT '',
  `man_purchase_date` date NOT NULL DEFAULT '0000-00-00',
  `man_purchase_service_contract_number` varchar(255) NOT NULL DEFAULT '',
  `man_lease_expiry_date` date NOT NULL DEFAULT '0000-00-00',
  `man_purchase_amount` varchar(50) NOT NULL DEFAULT '',
  `man_warranty_duration` int(5) unsigned NOT NULL DEFAULT '0',
  `man_warranty_expires` date NOT NULL DEFAULT '0000-00-00',
  `man_warranty_type` enum('','24x7x365','9x5x5','Next Business Day') NOT NULL DEFAULT '',
  `man_terminal_number` int(10) NOT NULL DEFAULT '0',
  `man_switch_id` varchar(100) NOT NULL DEFAULT '',
  `man_switch_port` varchar(100) NOT NULL DEFAULT '',
  `man_patch_panel` varchar(45) NOT NULL DEFAULT '',
  `man_patch_panel_port` varchar(45) NOT NULL DEFAULT '',
  `man_wall_port` varchar(100) NOT NULL DEFAULT '',
  `man_picture` varchar(100) NOT NULL DEFAULT '',
  `contact_name` varchar(50) NOT NULL DEFAULT '',
  `contact_id` int(10) unsigned NOT NULL DEFAULT '0',
  `man_service_number` varchar(100) NOT NULL DEFAULT '',
  `man_service_provider` varchar(100) NOT NULL DEFAULT '',
  `man_service_type` varchar(100) NOT NULL DEFAULT '',
  `man_service_plan` varchar(100) NOT NULL DEFAULT '',
  `man_service_network` varchar(100) NOT NULL DEFAULT '',
  `man_unlock_pin` varchar(100) NOT NULL DEFAULT '',
  `man_serial_imei` varchar(100) NOT NULL DEFAULT '',
  `man_serial_sim` varchar(100) NOT NULL DEFAULT '',
  `nmap_type` varchar(50) NOT NULL DEFAULT '',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen_by` varchar(150) NOT NULL DEFAULT '',
  `last_user` varchar(150) NOT NULL DEFAULT '',
  `access_details` text NOT NULL,
  `snmp_oid` text NOT NULL,
  `nmis_group` varchar(50) NOT NULL DEFAULT '',
  `nmis_name` varchar(50) NOT NULL DEFAULT '',
  `nmis_role` varchar(50) NOT NULL DEFAULT '',
  `nmis_export` enum('true','false') NOT NULL DEFAULT 'false',
  `system_key_type` varchar(4) NOT NULL DEFAULT '',
  `sysDescr` text NOT NULL,
  `sysObjectID` varchar(255) NOT NULL DEFAULT '',
  `sysUpTime` varchar(255) NOT NULL DEFAULT '',
  `sysContact` varchar(255) NOT NULL DEFAULT '',
  `sysName` varchar(255) NOT NULL DEFAULT '',
  `sysLocation` varchar(255) NOT NULL DEFAULT '',
  `man_oae_manage` enum('y','n') NOT NULL DEFAULT 'y',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`system_id`),
  KEY `id` (`timestamp`),
  KEY `id2` (`system_key`),
  KEY `id3` (`man_ip_address`),
  KEY `system_id` (`system_id`),
  KEY `hostname` (`hostname`),
  KEY `linked_sys` (`linked_sys`),
  KEY `system_key` (`system_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system`
--

LOCK TABLES `system` WRITE;
/*!40000 ALTER TABLE `system` DISABLE KEYS */;
/*!40000 ALTER TABLE `system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(100) NOT NULL DEFAULT '',
  `caption` varchar(255) NOT NULL DEFAULT '',
  `sid` varchar(100) NOT NULL DEFAULT '',
  `domain` varchar(100) NOT NULL DEFAULT '',
  `disabled` varchar(20) NOT NULL DEFAULT '',
  `full_name` varchar(100) NOT NULL DEFAULT '',
  `password_changeable` varchar(20) NOT NULL DEFAULT '',
  `password_expires` varchar(20) NOT NULL DEFAULT '',
  `password_required` varchar(20) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `type` enum('local','domain','database','application','other') NOT NULL DEFAULT 'local',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_user_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_group`
--

DROP TABLE IF EXISTS `user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `sid` varchar(100) NOT NULL DEFAULT '',
  `members` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_groups_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_group`
--

LOCK TABLES `user_group` WRITE;
/*!40000 ALTER TABLE `user_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(100) NOT NULL DEFAULT '',
  `device` varchar(100) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `caption` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_video_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `windows`
--

DROP TABLE IF EXISTS `windows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `windows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `build_number` varchar(20) NOT NULL DEFAULT '',
  `user_name` varchar(100) NOT NULL DEFAULT '',
  `client_site_name` varchar(100) NOT NULL DEFAULT '',
  `domain_short` varchar(100) NOT NULL DEFAULT '',
  `domain_controller_address` varchar(100) NOT NULL DEFAULT '',
  `domain_controller_name` varchar(100) NOT NULL DEFAULT '',
  `domain_role` varchar(40) NOT NULL DEFAULT '',
  `part_of_domain` varchar(10) NOT NULL DEFAULT '',
  `id_number` varchar(100) NOT NULL DEFAULT '',
  `time_caption` varchar(100) NOT NULL DEFAULT '',
  `time_daylight` varchar(100) NOT NULL DEFAULT '',
  `boot_device` varchar(100) NOT NULL DEFAULT '',
  `country_code` varchar(50) NOT NULL DEFAULT '',
  `organisation` varchar(80) NOT NULL DEFAULT '',
  `language` varchar(50) NOT NULL DEFAULT '',
  `registered_user` varchar(100) NOT NULL DEFAULT '',
  `service_pack` varchar(20) NOT NULL DEFAULT '',
  `version` varchar(20) NOT NULL DEFAULT '',
  `install_directory` varchar(20) NOT NULL DEFAULT '',
  `active_directory_ou` varchar(200) NOT NULL DEFAULT '',
  `workgroup` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_windows_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `windows`
--

LOCK TABLES `windows` WRITE;
/*!40000 ALTER TABLE `windows` DISABLE KEYS */;
/*!40000 ALTER TABLE `windows` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

CREATE FUNCTION cidr_to_mask (cidr INT(2)) RETURNS CHAR(15) DETERMINISTIC RETURN INET_NTOA(CONV(CONCAT(REPEAT(1,cidr),REPEAT(0,32-cidr)),2,10));

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-01 11:42:35
