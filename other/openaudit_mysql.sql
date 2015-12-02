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
  `interface_type` varchar(10) NOT NULL DEFAULT '',
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
-- Table structure for table `oa_alert_log`
--

DROP TABLE IF EXISTS `oa_alert_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_alert_log` (
  `alert_id` int(10) NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `alert_table` varchar(50) NOT NULL,
  `alert_foreign_row` int(10) NOT NULL,
  `link_row_action` enum('','create','update','delete') NOT NULL DEFAULT '',
  `alert_details` varchar(200) NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `alert_ack_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `alert_note` varchar(200) NOT NULL,
  `external_change_id` varchar(200) NOT NULL,
  `external_change_link` varchar(200) NOT NULL,
  `change_id` int(10) unsigned DEFAULT NULL,
  `change_type` enum('','standard','normal','emergency','unauthorised') NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`alert_id`),
  KEY `system_id` (`system_id`),
  KEY `oa_alert_log_user_id` (`user_id`),
  KEY `oa_alert_change_id` (`change_id`),
  CONSTRAINT `oa_alert_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_alert_log_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_alert_oa_change` FOREIGN KEY (`change_id`) REFERENCES `oa_change` (`change_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_alert_log`
--

LOCK TABLES `oa_alert_log` WRITE;
/*!40000 ALTER TABLE `oa_alert_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_alert_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_audit_log`
--

DROP TABLE IF EXISTS `oa_audit_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_audit_log` (
  `audit_log_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT '0',
  `system_id` int(10) unsigned DEFAULT NULL,
  `audit_log_event_type` varchar(50) NOT NULL,
  `audit_log_event_details` varchar(200) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`audit_log_id`),
  KEY `user_id` (`user_id`),
  KEY `oa_audit_log_system_id` (`system_id`),
  CONSTRAINT `oa_audit_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_audit_log_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_audit_log`
--

LOCK TABLES `oa_audit_log` WRITE;
/*!40000 ALTER TABLE `oa_audit_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_audit_log` ENABLE KEYS */;
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
  CONSTRAINT `oa_change_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE
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
INSERT INTO `oa_config` VALUES ('discovery_name_match','y','y','0000-00-00 00:00:00',0,'Should we match a device based only on its hostname during discovery.');
INSERT INTO `oa_config` VALUES ('discovery_update_groups','y','y','0000-00-00 00:00:00',0,'Should Open-AudIT update the device groups after discovering a device.');
INSERT INTO `oa_config` VALUES ('discovery_use_ipmi','y','y','0000-00-00 00:00:00',0,'Should we use ipmitool for discovering management ports if ipmitool is installed.');
INSERT INTO `oa_config` VALUES ('display_version','1.10','n','0000-00-00 00:00:00',0,'The version shown on the web pages.');
INSERT INTO `oa_config` VALUES ('distinct_groups','y','y','0000-00-00 00:00:00',0,'Display Groups on the homepage, separated into the type of each Group.');
INSERT INTO `oa_config` VALUES ('download_reports','download','y','0000-00-00 00:00:00',0,'Tells Open-AudIT to advise the browser to download as a file or display the csv, xml, json reports. Valid values are download and display.');
INSERT INTO `oa_config` VALUES ('internal_version','20160104','n','0000-00-00 00:00:00',0,'The internal numerical version.');
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
  `group_category` enum('application','device','general','location','network','org','os','owner') NOT NULL DEFAULT 'general',
  `group_display_sql` text NOT NULL,
  `group_icon` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`group_id`),
  KEY `group_id_index` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_group`
--

LOCK TABLES `oa_group` WRITE;
/*!40000 ALTER TABLE `oa_group` DISABLE KEYS */;
INSERT INTO `oa_group` VALUES (1,'All Devices','','SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\'',1,'Any items that have their status attribute set to \'production\'.','device','SELECT system.system_id, system.hostname, system.man_description, system.man_ip_address, system.man_type, system.man_os_family, system.man_os_name, system.man_icon FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','devices');
INSERT INTO `oa_group` VALUES (9,'Items in Default Location','','SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = \'0\' AND system.man_status = \'production\'',1,'Items in Default Location','location','','location');
INSERT INTO `oa_group` VALUES (12,'Default Organisation owned items','','SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = \'0\' AND system.man_status = \'production\'',1,'Items in Default Organisation','location','','location');
INSERT INTO `oa_group` VALUES (13,'All Printers','','SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\' and (man_type = \'printer\' or man_type = \'network printer\')',1,'Any items that have their status attribute set to \'production\' and have their type attribute set to \'printer\'.','device','SELECT system.system_id, system.hostname, system.man_description, system.man_manufacturer, system.man_model, system.man_serial, system.man_ip_address, system.man_type, system.man_icon FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = ? group by system_id','printer');
INSERT INTO `oa_group` VALUES (14,'Routers','','SELECT distinct(system.system_id) FROM system WHERE system.man_type = \'router\' AND system.man_status = \'production\'',1,'Any items that have their status attribute set to \'production\' and have their type attribute set to \'router\'.','device','SELECT system.system_id, system.hostname, system.man_description, system.man_ip_address, system.man_type, system.man_os_family, system.man_os_name, system.man_icon, system.man_manufacturer, system.man_model FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','router');
INSERT INTO `oa_group` VALUES (15,'Switches','','SELECT distinct(system.system_id) FROM system WHERE system.man_type = \'switch\' AND system.man_status = \'production\'',1,'Any items that have their status attribute set to \'production\' and have their type attribute set to \'switch\'.','device','SELECT system.system_id, system.hostname, system.man_description, system.man_ip_address, system.man_type, system.man_os_family, system.man_os_name, system.man_icon, system.man_manufacturer, system.man_model FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','switch');
INSERT INTO `oa_group` VALUES (16,'Windows Computers','','SELECT distinct(system.system_id) FROM system WHERE system.man_os_group = \'Windows\' AND system.man_status = \'production\'',1,'Any items that have their status attribute set to \'production\' and have their os_name attribute containing \'windows\'.','os','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_manufacturer, system.man_model, system.man_serial, windows.user_name, oa_location.location_name FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN windows ON (system.system_id = windows.system_id AND windows.current = \'y\') LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) WHERE oa_group_sys.group_id = ?','windows');
INSERT INTO `oa_group` VALUES (17,'GNU/Linux Systems','','SELECT distinct(system.system_id) FROM system WHERE system.man_os_group LIKE LOWER(\'linux\') AND system.man_status = \'production\'',1,'Any items that have their status attribute set to \'production\' and have their os_group attribute set to \'linux\'.','os','SELECT system.system_id, system.hostname, system.man_description, system.man_ip_address, system.man_type, system.man_os_family, system.man_os_name, system.man_icon, system.man_manufacturer, system.man_model FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','linux');
INSERT INTO `oa_group` VALUES (18,'Virtual Hosts','','SELECT distinct(system.system_id) FROM system WHERE LOWER(man_class) = \'hypervisor\' AND system.man_status = \'production\'',1,'Any items that have their status attribute set to \'production\' and have their class attribute set to \'hypervisor\'.','device','SELECT system.system_id, system.hostname, system.man_description, system.man_ip_address, system.man_type, system.man_os_family, system.man_os_name, system.man_icon FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','vmware');
INSERT INTO `oa_group` VALUES (19,'Computers','','SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\' and system.man_type = \'computer\'',1,'Any items that have their status attribute set to \'production\' and have their type attribute set to \'computer\'.','device','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_manufacturer, system.man_model, system.man_description, system.man_os_name FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','computer');
INSERT INTO `oa_group` VALUES (20,'Non Production Devices','','SELECT distinct(system.system_id) FROM system WHERE system.man_status != \'production\'',1,'Any items that have their status attribute not set to \'production\'.','device','SELECT system.man_icon, system.man_os_family, system.man_type, system.hostname, system.system_id, system.man_ip_address, system.man_manufacturer, system.man_model, system.man_serial, system.man_description, system.man_owner FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','devices');
INSERT INTO `oa_group` VALUES (21,'Virtual Guests','','SELECT distinct(system.system_id) FROM system WHERE (system.man_manufacturer LIKE \'VMware%\' or system.man_manufacturer LIKE \'Parallels%\') AND system.man_status = \'production\' and man_os_name NOT LIKE \'%ESX%\'',1,'Any items that have their status attribute set to \'production\' and their manufacturer attribute contains \'VMware\', \'Parallels\' or \'KVM\' and their OS Name does not contain ESX.','device','SELECT system.man_icon, system.system_id, system.hostname, system.man_ip_address, system.man_function, system.man_environment, system.man_description, system.man_os_name, system.man_manufacturer, system.man_vm_group, man_os_family, oa_location.location_name FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN oa_location ON system.man_location_id = oa_location.location_id WHERE oa_group_sys.group_id = ? GROUP BY system.system_id','vmware');
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
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_group_column`
--

LOCK TABLES `oa_group_column` WRITE;
/*!40000 ALTER TABLE `oa_group_column` DISABLE KEYS */;
INSERT INTO `oa_group_column` VALUES (78,1,1,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (79,1,2,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (80,1,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (81,1,4,'Type','man_type','text','','','','left');
INSERT INTO `oa_group_column` VALUES (82,1,5,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (83,1,6,'OS Name','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (84,1,7,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (85,13,1,'Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (86,13,2,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (87,13,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (88,13,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (89,13,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (90,13,6,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_group_column` VALUES (91,13,7,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (92,14,1,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (93,14,2,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (94,14,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (95,14,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (96,14,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (97,14,5,'OS Name','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (98,14,6,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (99,14,7,'','man_os_family','','','','','left');
INSERT INTO `oa_group_column` VALUES (100,14,8,'','system_id','','','','','left');
INSERT INTO `oa_group_column` VALUES (101,15,1,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (102,15,2,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (103,15,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (104,15,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (105,15,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (106,15,5,'OS / Device','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (107,15,6,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (108,16,1,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (109,16,2,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (110,16,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (111,16,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (112,16,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (113,16,6,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_group_column` VALUES (114,16,7,'User','user_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (115,16,8,'Location','location_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (116,16,9,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (117,17,1,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (118,17,2,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (119,17,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (120,17,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (121,17,4,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (122,17,5,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (123,17,6,'OS / Device','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (124,17,7,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (125,18,0,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (126,18,1,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (127,18,2,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (128,18,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (129,18,4,'OS Name','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (130,18,5,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (131,19,1,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (132,19,2,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (133,19,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (134,19,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (135,19,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (136,19,6,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (137,19,7,'OS Name','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (138,19,8,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (139,20,1,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (140,20,2,'Type','man_type','text','','','','left');
INSERT INTO `oa_group_column` VALUES (141,20,3,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (142,20,4,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (143,20,5,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (144,20,6,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (145,20,7,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_group_column` VALUES (146,20,8,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (147,20,9,'Assigned','man_owner','text','','','','left');
INSERT INTO `oa_group_column` VALUES (148,20,10,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (149,21,0,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (150,21,1,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (151,21,2,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (152,21,3,'Function','man_function','text','','','','center');
INSERT INTO `oa_group_column` VALUES (153,21,4,'Environment','man_environment','text','','','','center');
INSERT INTO `oa_group_column` VALUES (154,21,5,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (155,21,6,'OS','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (156,21,7,'VM Group','man_vm_group','text','','','','left');
INSERT INTO `oa_group_column` VALUES (157,21,8,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (158,21,9,'Location','location_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (159,21,10,'Tags','tag','text','','','','left');
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
  CONSTRAINT `oa_group_user_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_group_user`
--

LOCK TABLES `oa_group_user` WRITE;
/*!40000 ALTER TABLE `oa_group_user` DISABLE KEYS */;
INSERT INTO `oa_group_user` VALUES (18,1,9,10);
INSERT INTO `oa_group_user` VALUES (19,3,9,10);
INSERT INTO `oa_group_user` VALUES (27,2,9,0);
INSERT INTO `oa_group_user` VALUES (33,1,1,10);
INSERT INTO `oa_group_user` VALUES (34,3,1,10);
INSERT INTO `oa_group_user` VALUES (35,2,1,3);
INSERT INTO `oa_group_user` VALUES (36,1,13,10);
INSERT INTO `oa_group_user` VALUES (37,3,13,10);
INSERT INTO `oa_group_user` VALUES (38,2,13,0);
INSERT INTO `oa_group_user` VALUES (39,1,14,10);
INSERT INTO `oa_group_user` VALUES (40,3,14,10);
INSERT INTO `oa_group_user` VALUES (41,2,14,0);
INSERT INTO `oa_group_user` VALUES (42,1,15,10);
INSERT INTO `oa_group_user` VALUES (43,3,15,10);
INSERT INTO `oa_group_user` VALUES (44,2,15,0);
INSERT INTO `oa_group_user` VALUES (45,1,16,10);
INSERT INTO `oa_group_user` VALUES (46,3,16,10);
INSERT INTO `oa_group_user` VALUES (47,2,16,0);
INSERT INTO `oa_group_user` VALUES (48,1,17,10);
INSERT INTO `oa_group_user` VALUES (49,3,17,10);
INSERT INTO `oa_group_user` VALUES (50,2,17,0);
INSERT INTO `oa_group_user` VALUES (51,1,18,10);
INSERT INTO `oa_group_user` VALUES (52,3,18,10);
INSERT INTO `oa_group_user` VALUES (53,2,18,0);
INSERT INTO `oa_group_user` VALUES (54,1,19,10);
INSERT INTO `oa_group_user` VALUES (55,3,19,10);
INSERT INTO `oa_group_user` VALUES (56,2,19,0);
INSERT INTO `oa_group_user` VALUES (57,1,20,10);
INSERT INTO `oa_group_user` VALUES (58,3,20,10);
INSERT INTO `oa_group_user` VALUES (59,2,20,5);
/*!40000 ALTER TABLE `oa_group_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_location`
--

DROP TABLE IF EXISTS `oa_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_location` (
  `location_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location_name` varchar(100) NOT NULL DEFAULT '',
  `location_type` varchar(100) NOT NULL DEFAULT '',
  `location_room` varchar(100) NOT NULL DEFAULT '',
  `location_suite` varchar(100) NOT NULL DEFAULT '',
  `location_level` varchar(100) NOT NULL DEFAULT '',
  `location_address` varchar(100) NOT NULL DEFAULT '',
  `location_suburb` varchar(100) NOT NULL DEFAULT '',
  `location_city` varchar(100) NOT NULL DEFAULT '',
  `location_district` varchar(100) NOT NULL DEFAULT '',
  `location_region` varchar(100) NOT NULL DEFAULT '',
  `location_area` varchar(100) NOT NULL DEFAULT '',
  `location_state` varchar(100) NOT NULL DEFAULT '',
  `location_postcode` varchar(10) NOT NULL DEFAULT '',
  `location_country` varchar(100) NOT NULL DEFAULT '',
  `location_tags` varchar(250) NOT NULL DEFAULT '',
  `location_phone` varchar(20) NOT NULL DEFAULT '',
  `location_picture` varchar(100) NOT NULL DEFAULT '',
  `location_latitude` float(10,6) NOT NULL,
  `location_longitude` float(10,6) NOT NULL,
  `location_geo` varchar(200) NOT NULL DEFAULT '',
  `location_comments` varchar(100) NOT NULL DEFAULT '',
  `location_icon` varchar(100) NOT NULL DEFAULT '',
  `location_group_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_location`
--

LOCK TABLES `oa_location` WRITE;
/*!40000 ALTER TABLE `oa_location` DISABLE KEYS */;
INSERT INTO `oa_location` VALUES (0,'Default Location','Office','','','','','','Gold Coast','','','','Queensland','','Australia','','','',-28.017260,153.425705,'','Default location','office',9);
/*!40000 ALTER TABLE `oa_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_org`
--

DROP TABLE IF EXISTS `oa_org`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_org` (
  `org_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_name` varchar(100) NOT NULL DEFAULT '',
  `org_parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `org_group_id` int(10) unsigned NOT NULL DEFAULT '0',
  `contact_id` varchar(100) NOT NULL DEFAULT '',
  `org_picture` varchar(100) NOT NULL DEFAULT '',
  `org_comments` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`org_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_org`
--

LOCK TABLES `oa_org` WRITE;
/*!40000 ALTER TABLE `oa_org` DISABLE KEYS */;
INSERT INTO `oa_org` VALUES (0,'',0,12,'','','Default Organisation.');
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
INSERT INTO `oa_report` VALUES (27,'Device Details','Icon, type, name, first seen on, last seen on, last seen by, manufacturer, model, serial, owner, organisation, location, operating system.','y','SELECT system.man_icon, system.man_type, system.system_id, system.hostname, date(system.first_timestamp) as first_seen, date(system.last_seen) as last_seen, system.last_seen_by, system.man_model, system.man_manufacturer, system.man_serial, system.man_owner, oa_location.location_name, system.os_family, oa_org.org_name FROM system LEFT JOIN oa_location ON system.man_location_id = oa_location.location_id LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN oa_org ON system.man_org_id = oa_org.org_id WHERE oa_group_sys.group_id = @group GROUP BY system.system_id ORDER BY system.hostname','','v_report','','',0);
INSERT INTO `oa_report` VALUES (28,'Device Hardware','Icon, name, ip address, manufacturer, model, serial.','y','SELECT system.system_id, system.hostname, system.man_ip_address, system.man_manufacturer, system.man_model, system.man_serial, man_icon, man_os_family, man_asset_number, man_type FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE oa_group_sys.group_id = @group GROUP BY system.system_id ORDER BY system.system_id','','v_report','','',0);
INSERT INTO `oa_report` VALUES (29,'Installed - Software','Currently installed software.','y','SELECT COUNT(DISTINCT system.system_id) AS `count`, software.name, software.version, software.publisher, software.url, software.email, software.id, software.type, system.icon, system.man_os_family FROM software LEFT JOIN system ON (software.system_id = system.system_id AND software.current = \'y\') LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group GROUP BY software.name, software.version','','v_report','','',0);
INSERT INTO `oa_report` VALUES (30,'Specific Software','Specific installed software.','n','SELECT system.system_id, system.hostname, software.name, software.installed_by, software.installed_on, software.version, windows.user_name, oa_org.org_name, software.first_seen FROM system LEFT JOIN oa_group_sys ON oa_group_sys.system_id = system.system_id LEFT JOIN windows ON (system.system_id = windows.system_id AND windows.current = \'y\') LEFT JOIN software ON (system.system_id = software.system_id AND software.current = \'y\') LEFT JOIN oa_org ON (system.man_org_id = oa_org.org_id) INNER JOIN (SELECT software.name, software.version FROM software WHERE software.id = ?) software_version_temp ON software.name = software_version_temp.name AND software.version = software_version_temp.version WHERE oa_group_sys.group_id = @group','','v_report','','',0);
INSERT INTO `oa_report` VALUES (31,'Software Keys','Software install keys.','y','SELECT COUNT(string) as count, name, string, id FROM system LEFT JOIN software_key ON (software_key.system_id = system.system_id and software_key.current = \'y\') LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group AND string IS NOT NULL GROUP BY name, string ORDER BY name','','v_report','','',1);
INSERT INTO `oa_report` VALUES (32,'Specific Key Name','Specific software install keys, by name.','n','SELECT system.system_id, system.hostname, software_key.name, software_key.string FROM system LEFT JOIN software_key ON (system.system_id = software_key.system_id AND software_key.current = \'y\') LEFT JOIN oa_group_sys ON (oa_group_sys.system_id = system.system_id) WHERE oa_group_sys.group_id = @group AND software_key.name = (SELECT name FROM software_key WHERE id = ? LIMIT 1)','','v_report','','',0);
INSERT INTO `oa_report` VALUES (33,'Specific Key Text','Specific software install keys, by key.','n','SELECT system.system_id, system.hostname, software_key.name, software_key.string FROM system LEFT JOIN software_key ON (system.system_id = software_key.system_id AND software_key.current = \'y\') LEFT JOIN oa_group_sys ON (oa_group_sys.system_id = system.system_id) WHERE oa_group_sys.group_id = @group AND software_key.string = ?','','v_report','','',0);
INSERT INTO `oa_report` VALUES (34,'Alerts','Any Alerts created by newly found, no longer present or changed items.','y','SELECT oa_alert_log.alert_id, oa_alert_log.system_id, oa_alert_log.timestamp, system.man_ip_address, system.hostname, system.man_description, oa_alert_log.alert_details FROM system, oa_alert_log, oa_group_sys WHERE oa_alert_log.user_id is NULL AND oa_alert_log.system_id = system.system_id AND oa_alert_log.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = @group GROUP BY oa_alert_log.alert_id ORDER BY oa_alert_log.timestamp DESC ','','v_report_alerts','','',0);
INSERT INTO `oa_report` VALUES (35,'Alerts - Software','Any Alerts created by newly found, no longer present or changed software.','y','SELECT oa_alert_log.alert_id, oa_alert_log.system_id, oa_alert_log.timestamp, system.man_ip_address, system.hostname, system.man_description, oa_alert_log.alert_details FROM system, oa_alert_log, oa_group_sys WHERE oa_alert_log.user_id is NULL AND oa_alert_log.system_id = system.system_id AND oa_alert_log.timestamp > DATE_SUB(NOW(),INTERVAL 100 DAY) AND oa_alert_log.system_id = oa_group_sys.system_id AND oa_alert_log.alert_details LIKE \'software%\' AND oa_group_sys.group_id = @group GROUP BY oa_alert_log.alert_id ASC ','','v_report_alerts','','',0);
INSERT INTO `oa_report` VALUES (36,'Enterprise - Devices Discovered in the Last Days','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE system.first_timestamp > (NOW() - INTERVAL ? DAY) AND system.man_ip_address <> \'\' AND system.man_ip_address <> \'0.0.0.0\' AND system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (37,'Enterprise - Software Discovered in the Last Days','','n','SELECT COUNT(oa_alert_log.system_id) AS `count`, software.id, name, type, url, version, publisher, DATE(oa_alert_log.timestamp) AS `date` FROM oa_alert_log LEFT JOIN software ON (oa_alert_log.alert_foreign_row = software.id) LEFT JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON oa_alert_log.system_id = grp.system_id WHERE oa_alert_log.alert_table = \'software\' AND oa_alert_log.link_row_action = \'create\' AND DATE(oa_alert_log.timestamp) > (NOW() - INTERVAL ? DAY) GROUP BY software.name, software.version','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (38,'Enterprise - Devices Not Seen by Date','','n','SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id  LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(?, INTERVAL 30 day) AND (system.man_ip_address <> \'\' AND system.man_ip_address <> \'000.000.000.000\' AND system.man_ip_address <> \'0.0.0.0\') GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (39,'Enterprise - Specific Software','','n','SELECT system.system_id, system.hostname, software.id, software.name, software.installed_by, date(software.installed_on) as software_installed_on, software.version, date(software.first_seen) as first_seen FROM system LEFT JOIN software ON (system.system_id = software.system_id and software.current = \'y\') INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE software.name = (SELECT name FROM software WHERE id = ? LIMIT 1) AND date(software.first_seen) = date(?) GROUP BY system.system_id','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (40,'Enterprise - Software Discovered by Date','','n','SELECT COUNT(oa_alert_log.system_id) AS `count`, id, name, type, url, version, publisher, DATE(oa_alert_log.timestamp) AS `date` FROM oa_alert_log LEFT JOIN software ON (oa_alert_log.alert_foreign_row = software.id) LEFT JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON oa_alert_log.system_id = grp.system_id WHERE oa_alert_log.alert_table = \'software\' AND oa_alert_log.link_row_action = \'create\' AND DATE(oa_alert_log.timestamp) = ? GROUP BY software.name, software.version','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (41,'Enterprise - Devices Discovered by Date','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, man_status AS status, last_seen_by FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE oa_group_sys.group_id = @group AND date(system.first_timestamp) = ? AND system.man_ip_address <> \'\' AND system.man_ip_address <> \'0.0.0.0\' AND system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname LIMIT @limit','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (42,'Enterprise - Devices Not Seen in the Last Days','','n','SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(NOW(), INTERVAL ? day) AND (system.man_ip_address <> \'\' AND system.man_ip_address <> \'000.000.000.000\' AND system.man_ip_address <> \'0.0.0.0\') GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (43,'Enterprise - OS Group','','n','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_os_group = ?','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (44,'Enterprise - OS Types','','n','SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id)) * 100) AS y, IF(CHAR_LENGTH(man_os_group)=0,\'Other\', man_os_group) AS name, count(*) as count FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id GROUP BY name','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (45,'Enterprise - OS Family','','n','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_os_family = ?','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (46,'Enterprise - OS Name','','n','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_os_name = ?','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (47,'Enterprise - Device Types','','n','SELECT CEILING(COUNT(*) / (SELECT COUNT(system.system_id) FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id) * 100) AS y, man_type AS name, count(*) as count FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp2 ON system.system_id = grp2.system_id GROUP BY name','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (48,'Enterprise - Device Type','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_manufacturer, system.man_model, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_type = ?','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (49,'Enterprise - Software Discovered Range','','n','SELECT COUNT(oa_alert_log.system_id) AS `count`, id, name, type, url, version, publisher, DATE(oa_alert_log.timestamp) AS `date` FROM oa_alert_log LEFT JOIN software ON (oa_alert_log.alert_foreign_row = software.id) LEFT JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON oa_alert_log.system_id = grp.system_id WHERE oa_alert_log.alert_table = \'software\' AND oa_alert_log.link_row_action = \'create\' AND DATE(oa_alert_log.timestamp) >= ? AND DATE(oa_alert_log.timestamp) <= ? GROUP BY software.name, software.version','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (50,'Enterprise - Devices Discovered Range','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE date(system.first_timestamp) >= ? AND date(system.first_timestamp) <= ? AND system.man_ip_address <> \'\' AND system.man_ip_address <> \'0.0.0.0\' AND system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (51,'Disk Partition Use','Partition details where partition free and used space aren\'t 0 and type isn\'t Volume or Network Drive and mount point isn\'t [SWAP].','y','SELECT partition_id, system.system_id, system.hostname, sys_hw_partition.hard_drive_index AS disk, sys_hw_partition.partition_mount_point AS mount_point, partition_mount_type as type, sys_hw_partition.partition_size AS size, sys_hw_partition.partition_used_space AS used, sys_hw_partition.partition_free_space AS free, ROUND(((sys_hw_partition.partition_free_space / sys_hw_partition.partition_size) * 100), 0) AS percent_free FROM sys_hw_partition LEFT JOIN system ON (sys_hw_partition.system_id = system.system_id AND sys_hw_partition.timestamp = system.timestamp) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE partition_used_space > 0 AND partition_free_space > 0 AND oa_group_sys.group_id = @group AND partition_type != \'Volume\' AND partition_type != \'Network Drive\' AND partition_mount_point != \'[SWAP]\' ORDER BY sys_hw_partition.system_id, partition_id ','','v_report','','',0);
INSERT INTO `oa_report` VALUES (52,'Interfaces Used - Available','','y','SELECT system.system_id, system.hostname, alias as ifAlias, net_index AS ifIndex, description as ifDescription, ifadminstatus as ifAdminStatus, ip_enabled as ifOperStatus, sysUpTime, iflastchange as ifLastChange, (sysuptime - iflastchange) AS diff, floor((sysuptime - iflastchange) /60/60/24/100) as diff_days, IF((ifadminstatus = \\\'down\\\') OR (ifadminstatus = \'up\' AND (ip_enabled != \'up\' AND ip_enabled != \'dormant\') AND (((sysuptime - iflastchange) > 60480000) OR (sysuptime < iflastchange))), \'available\', \'used\') AS available FROM network LEFT JOIN system ON (network.system_id = system.system_id AND network.current = \'y\') LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group AND ifadminstatus != \'\'','','v_report','','',0);
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
INSERT INTO `oa_report_column` VALUES (181,27,0,'Icon','man_icon','image','','man_type','','center');
INSERT INTO `oa_report_column` VALUES (182,27,1,'Type','man_type','text','','','','');
INSERT INTO `oa_report_column` VALUES (183,27,2,'System Name','hostname','link','/main/system_display/','system_id','','');
INSERT INTO `oa_report_column` VALUES (184,27,3,'First Seen','first_seen','timestamp','','','','');
INSERT INTO `oa_report_column` VALUES (185,27,4,'Last Seen','last_seen','timestamp','','','','');
INSERT INTO `oa_report_column` VALUES (186,27,5,'Last Seen By','last_seen_by','text','','','','');
INSERT INTO `oa_report_column` VALUES (187,27,6,'Manufacturer','man_manufacturer','text','','','','');
INSERT INTO `oa_report_column` VALUES (188,27,7,'Model','man_model','text','','','','');
INSERT INTO `oa_report_column` VALUES (189,27,8,'Serial','man_serial','text','','','','');
INSERT INTO `oa_report_column` VALUES (190,27,9,'Assigned To','man_owner','text','','','','');
INSERT INTO `oa_report_column` VALUES (191,27,10,'Organisation','org_name','text','','','','');
INSERT INTO `oa_report_column` VALUES (192,27,11,'Location','location_name','text','','','','');
INSERT INTO `oa_report_column` VALUES (193,27,12,'OS','os_family','text','','','','left');
INSERT INTO `oa_report_column` VALUES (194,27,13,'Tags','tag','text','','','','center');
INSERT INTO `oa_report_column` VALUES (195,28,1,'Icon','man_icon','image','','man_os_family','','center');
INSERT INTO `oa_report_column` VALUES (196,28,2,'System Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (197,28,3,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (198,28,4,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (199,28,5,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (200,28,6,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (201,28,7,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_report_column` VALUES (202,28,8,'Asset Number','man_asset_number','text','','','','left');
INSERT INTO `oa_report_column` VALUES (203,29,1,'Icon','icon','image','','man_os_family','','center');
INSERT INTO `oa_report_column` VALUES (204,29,2,'Software Name','name','link','/report/specific_software/$group_id/','id','','left');
INSERT INTO `oa_report_column` VALUES (205,29,3,'Version','version','text','','','','right');
INSERT INTO `oa_report_column` VALUES (206,29,4,'Installs','count','text','','','','center');
INSERT INTO `oa_report_column` VALUES (207,29,5,'Publisher','publisher','text','','','','left');
INSERT INTO `oa_report_column` VALUES (208,29,6,'Type','type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (209,29,7,'Contact','url','url','','','','center');
INSERT INTO `oa_report_column` VALUES (210,29,8,'Google Search','','url','https://encrypted.google.com/search?q=','name','google','center');
INSERT INTO `oa_report_column` VALUES (211,30,0,'System Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (212,30,1,'User','user_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (213,30,2,'Organisation','org_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (214,30,3,'Software Name','name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (215,30,4,'Software Version','version','text','','','','left');
INSERT INTO `oa_report_column` VALUES (216,30,5,'Installed By','installed_by','text','','','','left');
INSERT INTO `oa_report_column` VALUES (217,30,6,'Detected On','first_seen','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (218,30,7,'Installed On','installed_on','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (219,30,8,'Tags','tag','text','','','','center');
INSERT INTO `oa_report_column` VALUES (220,31,0,'System Count','count','text','','','','center');
INSERT INTO `oa_report_column` VALUES (221,31,0,'Key Name','name','link','/report/Specific Key Name/$group_id/','id','','left');
INSERT INTO `oa_report_column` VALUES (222,31,2,'Key String','string','link','/report/Specific Key Text/$group_id/','string','','left');
INSERT INTO `oa_report_column` VALUES (223,32,0,'System Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (224,32,2,'Key Name','name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (225,32,3,'Key String','string','text','','','','left');
INSERT INTO `oa_report_column` VALUES (226,32,7,'Tags','tag','text','','','','center');
INSERT INTO `oa_report_column` VALUES (227,33,0,'System Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (228,33,2,'Key Name','name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (229,33,3,'Key String','string','text','','','','left');
INSERT INTO `oa_report_column` VALUES (230,33,7,'Tags','tag','text','','','','center');
INSERT INTO `oa_report_column` VALUES (231,34,0,'Timestamp','timestamp','text','','','','left');
INSERT INTO `oa_report_column` VALUES (232,34,1,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (233,34,2,'System Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (234,34,3,'System Description','man_description','text','','','','left');
INSERT INTO `oa_report_column` VALUES (235,34,4,'Details','alert_details','text','','','','left');
INSERT INTO `oa_report_column` VALUES (236,34,5,'Tags','tag','text','','','','left');
INSERT INTO `oa_report_column` VALUES (237,35,0,'Timestamp','timestamp','text','','','','');
INSERT INTO `oa_report_column` VALUES (238,35,1,'IP Address','man_ip_address','ip_address','','','','');
INSERT INTO `oa_report_column` VALUES (239,35,2,'System Name','hostname','link','/main/system_display/','system_id','','');
INSERT INTO `oa_report_column` VALUES (240,35,3,'System Description','man_description','text','','','','');
INSERT INTO `oa_report_column` VALUES (241,35,4,'Details','alert_details','text','','','','');
INSERT INTO `oa_report_column` VALUES (242,35,5,'Tags','tag','text','','','','');
INSERT INTO `oa_report_column` VALUES (243,36,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (244,36,1,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (245,36,2,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (246,36,3,'OS','man_os_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (247,36,4,'First Audited','first_timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (248,36,5,'Last Audited','timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (249,36,6,'Status','status','text','','','','left');
INSERT INTO `oa_report_column` VALUES (250,37,0,'Package Name','name','link','/omk/oae/show_report/Enterprise - Specific Software/$group_id/','date','id','left');
INSERT INTO `oa_report_column` VALUES (251,37,1,'Type','type','text','','','','center');
INSERT INTO `oa_report_column` VALUES (252,37,2,'Installs','count','text','','','','center');
INSERT INTO `oa_report_column` VALUES (253,37,3,'Contact','url','url','','','','center');
INSERT INTO `oa_report_column` VALUES (254,37,4,'Version','version','text','','','','left');
INSERT INTO `oa_report_column` VALUES (255,37,5,'Publisher','publisher','text','','','','left');
INSERT INTO `oa_report_column` VALUES (256,37,6,'Google Search','','url','https://encrypted.google.com/search?q=','name','google','center');
INSERT INTO `oa_report_column` VALUES (257,38,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (258,38,1,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (259,38,2,'Location','location_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (260,38,3,'User','windows_user_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (261,38,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (262,38,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (263,38,6,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_report_column` VALUES (264,38,7,'First Audited','first_timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (265,38,8,'Last Audited','timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (266,39,1,'Software Name','name','link','/omk/oae/show_report/Specific Software/','id','','left');
INSERT INTO `oa_report_column` VALUES (267,39,2,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (268,39,3,'Software Version','version','text','','','','left');
INSERT INTO `oa_report_column` VALUES (269,39,4,'Detected On','first_seen','timestamp','','','','center');
INSERT INTO `oa_report_column` VALUES (270,39,5,'Installed By','installed_by','text','','','','left');
INSERT INTO `oa_report_column` VALUES (271,39,6,'Installed On','software_installed_on','timestamp','','','','center');
INSERT INTO `oa_report_column` VALUES (272,40,0,'Package Name','name','link','/omk/oae/show_report/Enterprise - Specific Software/','id','date','left');
INSERT INTO `oa_report_column` VALUES (273,40,1,'Type','type','text','','','','center');
INSERT INTO `oa_report_column` VALUES (274,40,2,'Installs','count','text','','','','center');
INSERT INTO `oa_report_column` VALUES (275,40,3,'Contact','url','url','','','','center');
INSERT INTO `oa_report_column` VALUES (276,40,4,'Version','version','text','','','','left');
INSERT INTO `oa_report_column` VALUES (277,40,5,'Publisher','publisher','text','','','','left');
INSERT INTO `oa_report_column` VALUES (278,40,6,'Google Search','','url','https://encrypted.google.com/search?q=','name','google','center');
INSERT INTO `oa_report_column` VALUES (279,41,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (280,41,1,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (281,41,2,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (282,41,3,'OS','man_os_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (283,41,5,'Last Seen By','last_seen_by','text','','','','left');
INSERT INTO `oa_report_column` VALUES (284,41,6,'Status','status','text','','','','left');
INSERT INTO `oa_report_column` VALUES (285,42,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (286,42,1,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (287,42,2,'Location','location_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (288,42,3,'User','windows_user_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (289,42,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (290,42,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (291,42,6,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_report_column` VALUES (292,42,7,'First Audited','first_timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (293,42,8,'Last Audited','timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (294,43,1,'Icon','man_icon','image','','man_os_family','','center');
INSERT INTO `oa_report_column` VALUES (295,43,2,'OS Family','man_os_family','link','/omk/oae/show_report/Enterprise - OS Family/','man_os_family','','left');
INSERT INTO `oa_report_column` VALUES (296,43,3,'Hostname','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (297,43,4,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (298,43,5,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (299,43,6,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (300,43,7,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (301,43,8,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_report_column` VALUES (302,43,9,'Location','location_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (303,44,0,'Type','name','link','/omk/oae/show_report/Enterprise - OS Group/','name','','left');
INSERT INTO `oa_report_column` VALUES (304,44,1,'Count','count','text','','','','left');
INSERT INTO `oa_report_column` VALUES (305,44,2,'Percent','y','text','','','','left');
INSERT INTO `oa_report_column` VALUES (306,45,1,'Icon','man_icon','image','','man_os_family','','center');
INSERT INTO `oa_report_column` VALUES (307,45,2,'OS Name','man_os_name','link','/omk/oae/show_report/Enterprise - OS Name/','man_os_name','','left');
INSERT INTO `oa_report_column` VALUES (308,45,3,'Hostname','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (309,45,4,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (310,45,5,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (311,45,6,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (312,45,7,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (313,45,8,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_report_column` VALUES (314,45,9,'Location','location_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (315,46,1,'Icon','man_icon','image','','man_os_family','','center');
INSERT INTO `oa_report_column` VALUES (316,46,2,'OS Name','man_os_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (317,46,3,'Hostname','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (318,46,4,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (319,46,5,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (320,46,6,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (321,46,7,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (322,46,8,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_report_column` VALUES (323,46,9,'Location','location_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (324,47,0,'Type','name','link','/omk/oae/show_report/Enterprise - Device Type/','name','','left');
INSERT INTO `oa_report_column` VALUES (325,47,1,'Count','count','text','','','','left');
INSERT INTO `oa_report_column` VALUES (326,47,2,'Percent','y','text','','','','left');
INSERT INTO `oa_report_column` VALUES (327,48,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (328,48,1,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (329,48,2,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (330,48,2,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (331,48,3,'OS','man_os_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (332,48,4,'First Audited','first_timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (333,48,5,'Last Audited','timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (334,48,6,'Status','status','text','','','','left');
INSERT INTO `oa_report_column` VALUES (335,49,0,'Package Name','name','link','/omk/oae/show_report/Enterprise - Specific Software/$group_id/','date','id','left');
INSERT INTO `oa_report_column` VALUES (336,49,1,'Type','type','text','','','','center');
INSERT INTO `oa_report_column` VALUES (337,49,2,'Installs','count','text','','','','center');
INSERT INTO `oa_report_column` VALUES (338,49,3,'Contact','url','url','','','','center');
INSERT INTO `oa_report_column` VALUES (339,49,4,'Version','version','text','','','','left');
INSERT INTO `oa_report_column` VALUES (340,49,5,'Publisher','publisher','text','','','','left');
INSERT INTO `oa_report_column` VALUES (341,49,6,'Google Search','','url','https://encrypted.google.com/search?q=','name','google','center');
INSERT INTO `oa_report_column` VALUES (342,50,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (343,50,1,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (344,50,2,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (345,50,3,'OS','man_os_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (346,50,4,'First Audited','first_timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (347,50,5,'Last Audited','timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (348,51,0,'System Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (349,51,1,'Disk','disk','text','','','','left');
INSERT INTO `oa_report_column` VALUES (350,51,2,'Type','type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (351,51,3,'Mount Point','mount_point','text','','','','left');
INSERT INTO `oa_report_column` VALUES (352,51,4,'Size MB','size','text','','','','left');
INSERT INTO `oa_report_column` VALUES (353,51,5,'Used MB','used','text','','','','left');
INSERT INTO `oa_report_column` VALUES (354,51,6,'Free MB','free','text','','','','left');
INSERT INTO `oa_report_column` VALUES (355,51,7,'Free %','percent_free','text','','','','left');
INSERT INTO `oa_report_column` VALUES (356,52,0,'Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (357,52,1,'Index','ifIndex','text','','','','center');
INSERT INTO `oa_report_column` VALUES (358,52,2,'Description','ifDescription','text','','','','left');
INSERT INTO `oa_report_column` VALUES (359,52,3,'Alias','ifAlias','text','','','','left');
INSERT INTO `oa_report_column` VALUES (360,52,4,'Admin Status','ifAdminStatus','text','','','','left');
INSERT INTO `oa_report_column` VALUES (361,52,5,'Operational Status','ifOperStatus','text','','','','left');
INSERT INTO `oa_report_column` VALUES (362,52,6,'Days Since Changed','diff_days','text','','','','left');
INSERT INTO `oa_report_column` VALUES (363,52,7,'Availability','available','text','','','','left');
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
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_lang` varchar(100) NOT NULL,
  `user_display_number` smallint(6) NOT NULL DEFAULT '10',
  `user_theme` varchar(100) NOT NULL,
  `user_admin` varchar(1) NOT NULL,
  `user_active` varchar(1) NOT NULL DEFAULT 'y',
  `user_change` int(10) NOT NULL DEFAULT '1',
  `user_sam` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  KEY `user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_user`
--

LOCK TABLES `oa_user` WRITE;
/*!40000 ALTER TABLE `oa_user` DISABLE KEYS */;
INSERT INTO `oa_user` VALUES (1,'admin','0ab0a153e5bbcd80c50a02da8c97f3c87686eb8512f5457d30e328d2d4448c8968e9f4875c2eb61356197b851dd33f90658b20b32139233b217be54d903ca3b6','Administrator','admin@openaudit','en',10,'tango','y','y',10,3);
INSERT INTO `oa_user` VALUES (2,'open-audit_enterprise','43629bd846bb90e40221d5276c832857ca51e49e325f7344704543439ffd6b6d3a963a32a41f55fca6d995fd302acbe03ea7d8bf2b3af91d662d497b0ad9ba1e','Open-AudIT Enterprise','','en',10,'tango','y','y',1,1);
INSERT INTO `oa_user` VALUES (3,'nmis','5a7f9a638ea430196d765ef8d3875eafd64ee3d155ceddaced75467a76b97ab24080cba4a2e74cde03799a6a49dbc5c36ee204eff1d5f42e08cf7a423fdf9757','NMIS','','en',10,'tango','y','y',10,3);
/*!40000 ALTER TABLE `oa_user` ENABLE KEYS */;
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
  `device` varchar(200) NOT NULL DEFAULT '',
  `type` enum('raid','hba','other') NOT NULL DEFAULT 'other',
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
  `count` varchar(5) NOT NULL DEFAULT '',
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
-- Table structure for table `sys_hw_graphs_disk`
--

DROP TABLE IF EXISTS `sys_hw_graphs_disk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_graphs_disk` (
  `graph_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `disk_id` int(10) unsigned DEFAULT NULL,
  `partition_id` int(10) unsigned DEFAULT NULL,
  `directory_id` int(10) unsigned DEFAULT NULL,
  `database_id` int(10) unsigned DEFAULT NULL,
  `graph_type` enum('disk','partition','directory','file','database') NOT NULL DEFAULT 'partition',
  `partition_mount_point` varchar(100) NOT NULL DEFAULT '',
  `dir_description` varchar(100) NOT NULL DEFAULT '',
  `dir_path` varchar(100) NOT NULL DEFAULT '',
  `used_percent` int(3) unsigned NOT NULL DEFAULT '0',
  `free_percent` int(3) unsigned NOT NULL DEFAULT '0',
  `used` int(10) unsigned NOT NULL DEFAULT '0',
  `free` int(10) unsigned NOT NULL DEFAULT '0',
  `total` int(10) unsigned NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`graph_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_graphs_disk_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_graphs_disk`
--

LOCK TABLES `sys_hw_graphs_disk` WRITE;
/*!40000 ALTER TABLE `sys_hw_graphs_disk` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_graphs_disk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_hw_network_card_ip`
--

DROP TABLE IF EXISTS `sys_hw_network_card_ip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_network_card_ip` (
  `ip_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `net_mac_address` varchar(200) NOT NULL DEFAULT '',
  `system_id` int(10) unsigned DEFAULT NULL,
  `net_index` varchar(10) NOT NULL DEFAULT '',
  `ip_address_v4` varchar(30) NOT NULL DEFAULT '',
  `ip_address_v6` varchar(30) NOT NULL DEFAULT '',
  `ip_subnet` varchar(30) NOT NULL DEFAULT '',
  `ip_address_version` varchar(10) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ip_id`),
  KEY `id` (`net_mac_address`),
  KEY `sys_hw_network_card_ip_system_id` (`system_id`),
  CONSTRAINT `sys_hw_network_card_ip_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_network_card_ip`
--

LOCK TABLES `sys_hw_network_card_ip` WRITE;
/*!40000 ALTER TABLE `sys_hw_network_card_ip` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_network_card_ip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_hw_partition`
--

DROP TABLE IF EXISTS `sys_hw_partition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_partition` (
  `partition_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `hard_drive_index` varchar(100) NOT NULL DEFAULT '',
  `partition_mount_type` varchar(100) NOT NULL DEFAULT '',
  `partition_mount_point` varchar(100) NOT NULL DEFAULT '',
  `partition_name` varchar(100) NOT NULL DEFAULT '',
  `partition_size` int(10) unsigned NOT NULL DEFAULT '1',
  `partition_free_space` int(10) unsigned NOT NULL DEFAULT '1',
  `partition_used_space` int(10) unsigned NOT NULL DEFAULT '1',
  `partition_format` varchar(20) NOT NULL DEFAULT '',
  `partition_caption` varchar(100) NOT NULL DEFAULT '',
  `partition_device_id` varchar(100) NOT NULL DEFAULT '',
  `partition_disk_index` varchar(50) NOT NULL DEFAULT '',
  `partition_bootable` varchar(10) NOT NULL DEFAULT '',
  `partition_type` varchar(50) NOT NULL DEFAULT '',
  `partition_quotas_supported` varchar(10) NOT NULL DEFAULT '',
  `partition_quotas_enabled` varchar(10) NOT NULL DEFAULT '',
  `partition_serial` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`partition_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_partition_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_partition`
--

LOCK TABLES `sys_hw_partition` WRITE;
/*!40000 ALTER TABLE `sys_hw_partition` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_partition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_hw_warranty`
--

DROP TABLE IF EXISTS `sys_hw_warranty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_warranty` (
  `warranty_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `warranty_provider` varchar(200) NOT NULL DEFAULT '',
  `warranty_type` varchar(100) NOT NULL DEFAULT '',
  `warranty_start` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `warranty_end` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`warranty_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_warranty_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_warranty`
--

LOCK TABLES `sys_hw_warranty` WRITE;
/*!40000 ALTER TABLE `sys_hw_warranty` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_warranty` ENABLE KEYS */;
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
  KEY `sys_man_additional_fields_group` (`group_id`),
  CONSTRAINT `sys_man_additional_fields_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE
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
  CONSTRAINT `att_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`)
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
-- Table structure for table `sys_man_audits`
--

DROP TABLE IF EXISTS `sys_man_audits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_man_audits` (
  `system_audits_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `system_audits_username` varchar(45) NOT NULL DEFAULT '',
  `system_audits_type` varchar(45) NOT NULL DEFAULT '',
  `system_audits_time` varchar(45) NOT NULL DEFAULT '',
  `system_audits_ip` varchar(30) NOT NULL DEFAULT '',
  `audit_debug` text NOT NULL,
  `audit_wmi_fails` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`system_audits_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_man_audits_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_man_audits`
--

LOCK TABLES `sys_man_audits` WRITE;
/*!40000 ALTER TABLE `sys_man_audits` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_man_audits` ENABLE KEYS */;
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
  CONSTRAINT `sys_man_notes_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`)
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
-- Table structure for table `sys_sw_database`
--

DROP TABLE IF EXISTS `sys_sw_database`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_database` (
  `db_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `db_type` varchar(50) NOT NULL DEFAULT '',
  `db_version` varchar(50) NOT NULL DEFAULT '',
  `db_version_string` varchar(50) NOT NULL DEFAULT '',
  `db_edition` varchar(50) NOT NULL DEFAULT '',
  `db_port` int(10) unsigned DEFAULT NULL,
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`db_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_db_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_database`
--

LOCK TABLES `sys_sw_database` WRITE;
/*!40000 ALTER TABLE `sys_sw_database` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_database` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_database_details`
--

DROP TABLE IF EXISTS `sys_sw_database_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_database_details` (
  `details_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `db_id` int(10) unsigned DEFAULT NULL,
  `system_id` int(10) unsigned DEFAULT NULL,
  `details_name` varchar(50) NOT NULL DEFAULT '',
  `details_internal_id` varchar(50) NOT NULL DEFAULT '',
  `details_instance` varchar(50) NOT NULL DEFAULT '',
  `details_current_size` varchar(50) NOT NULL DEFAULT '',
  `details_compatibility_mode` varchar(50) NOT NULL DEFAULT '',
  `details_filename` varchar(200) NOT NULL DEFAULT '',
  `details_creation_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `details_last_accessed_date` varchar(50) NOT NULL DEFAULT '',
  `details_last_accessed_login_name` varchar(50) NOT NULL DEFAULT '',
  `details_last_accessed_hostname` varchar(50) NOT NULL DEFAULT '',
  `details_last_accessed_program` varchar(50) NOT NULL DEFAULT '',
  `details_last_accessed_domain` varchar(50) NOT NULL DEFAULT '',
  `details_last_accessed_username` varchar(50) NOT NULL DEFAULT '',
  `details_last_accessed_protocol` varchar(50) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`details_id`),
  KEY `system_id` (`db_id`),
  CONSTRAINT `sys_sw_db_id` FOREIGN KEY (`db_id`) REFERENCES `sys_sw_database` (`db_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_database_details`
--

LOCK TABLES `sys_sw_database_details` WRITE;
/*!40000 ALTER TABLE `sys_sw_database_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_database_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_dns`
--

DROP TABLE IF EXISTS `sys_sw_dns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_dns` (
  `dns_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `dns_name` varchar(100) NOT NULL DEFAULT '',
  `dns_full_name` varchar(200) NOT NULL DEFAULT '',
  `dns_ip_address` varchar(30) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`dns_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_dns_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_dns`
--

LOCK TABLES `sys_sw_dns` WRITE;
/*!40000 ALTER TABLE `sys_sw_dns` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_dns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_group`
--

DROP TABLE IF EXISTS `sys_sw_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_group` (
  `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `group_name` varchar(100) NOT NULL DEFAULT '',
  `group_description` varchar(200) NOT NULL DEFAULT '',
  `group_sid` varchar(100) NOT NULL DEFAULT '',
  `group_members` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`group_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_groups_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_group`
--

LOCK TABLES `sys_sw_group` WRITE;
/*!40000 ALTER TABLE `sys_sw_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_pagefile`
--

DROP TABLE IF EXISTS `sys_sw_pagefile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_pagefile` (
  `pagefile_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `pagefile_name` varchar(100) NOT NULL DEFAULT '',
  `pagefile_initial_size` varchar(10) NOT NULL DEFAULT '',
  `pagefile_max_size` varchar(10) NOT NULL DEFAULT '',
  `pagefile_size` varchar(10) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pagefile_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_pagefile_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_pagefile`
--

LOCK TABLES `sys_sw_pagefile` WRITE;
/*!40000 ALTER TABLE `sys_sw_pagefile` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_pagefile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_print_queue`
--

DROP TABLE IF EXISTS `sys_sw_print_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_print_queue` (
  `queue_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `queue_system_key` varchar(100) NOT NULL DEFAULT '',
  `queue_name` varchar(100) NOT NULL DEFAULT '',
  `queue_port_name` varchar(100) NOT NULL DEFAULT '',
  `queue_ip_address` varchar(100) NOT NULL DEFAULT '',
  `queue_description` varchar(100) NOT NULL DEFAULT '',
  `queue_model` varchar(100) NOT NULL DEFAULT '',
  `queue_manufacturer` varchar(100) NOT NULL DEFAULT '',
  `queue_shared` varchar(100) NOT NULL DEFAULT '',
  `queue_shared_name` varchar(100) NOT NULL DEFAULT '',
  `queue_location` varchar(100) NOT NULL DEFAULT '',
  `queue_color` varchar(100) NOT NULL DEFAULT '',
  `queue_duplex` varchar(100) NOT NULL DEFAULT '',
  `queue_type` enum('virtual','physical','') NOT NULL DEFAULT '',
  `queue_connection_status` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`queue_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_print_queue_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_print_queue`
--

LOCK TABLES `sys_sw_print_queue` WRITE;
/*!40000 ALTER TABLE `sys_sw_print_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_print_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_route`
--

DROP TABLE IF EXISTS `sys_sw_route`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_route` (
  `route_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `destination` varchar(20) NOT NULL DEFAULT '',
  `mask` varchar(20) NOT NULL DEFAULT '',
  `metric` varchar(10) NOT NULL DEFAULT '',
  `next_hop` varchar(20) NOT NULL DEFAULT '',
  `protocol` varchar(10) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`route_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_ip_route_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_route`
--

LOCK TABLES `sys_sw_route` WRITE;
/*!40000 ALTER TABLE `sys_sw_route` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_route` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_scheduled_task`
--

DROP TABLE IF EXISTS `sys_sw_scheduled_task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_scheduled_task` (
  `sched_task_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `sched_task_name` varchar(100) NOT NULL DEFAULT '',
  `sched_task_next_run` varchar(50) NOT NULL DEFAULT '',
  `sched_task_status` varchar(50) NOT NULL DEFAULT '',
  `sched_task_last_run` varchar(50) NOT NULL DEFAULT '',
  `sched_task_last_result` varchar(50) NOT NULL DEFAULT '',
  `sched_task_creator` varchar(50) NOT NULL DEFAULT '',
  `sched_task_schedule` varchar(100) NOT NULL DEFAULT '',
  `sched_task_task` varchar(100) NOT NULL DEFAULT '',
  `sched_task_state` varchar(10) NOT NULL DEFAULT '',
  `sched_task_runas` varchar(50) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`sched_task_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_scheduled_task_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_scheduled_task`
--

LOCK TABLES `sys_sw_scheduled_task` WRITE;
/*!40000 ALTER TABLE `sys_sw_scheduled_task` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_scheduled_task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_variable`
--

DROP TABLE IF EXISTS `sys_sw_variable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_variable` (
  `variable_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `variable_name` varchar(100) NOT NULL DEFAULT '',
  `variable_value` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`variable_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_variable_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_variable`
--

LOCK TABLES `sys_sw_variable` WRITE;
/*!40000 ALTER TABLE `sys_sw_variable` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_variable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_virtual_machine`
--

DROP TABLE IF EXISTS `sys_sw_virtual_machine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_virtual_machine` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `guest_system_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `vm_id` int(12) unsigned NOT NULL DEFAULT '0',
  `uuid` text NOT NULL,
  `vm_group` text NOT NULL,
  `config_file` text NOT NULL,
  `memory` int(12) unsigned NOT NULL DEFAULT '0',
  `cpu` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_virtual_machine_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_virtual_machine`
--

LOCK TABLES `sys_sw_virtual_machine` WRITE;
/*!40000 ALTER TABLE `sys_sw_virtual_machine` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_virtual_machine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_web_server`
--

DROP TABLE IF EXISTS `sys_sw_web_server`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_web_server` (
  `webserver_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `webserver_type` varchar(100) NOT NULL DEFAULT '',
  `webserver_version` varchar(100) NOT NULL DEFAULT '',
  `webserver_state` varchar(100) NOT NULL DEFAULT '',
  `webserver_man_description` varchar(100) NOT NULL DEFAULT '',
  `webserver_log_enabled` varchar(100) NOT NULL DEFAULT '',
  `webserver_log_dir` varchar(100) NOT NULL DEFAULT '',
  `webserver_log_format` varchar(100) NOT NULL DEFAULT '',
  `webserver_log_time_period` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`webserver_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_web_server_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_web_server`
--

LOCK TABLES `sys_sw_web_server` WRITE;
/*!40000 ALTER TABLE `sys_sw_web_server` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_web_server` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_web_server_ext`
--

DROP TABLE IF EXISTS `sys_sw_web_server_ext`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_web_server_ext` (
  `ext_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `webserver_id` int(10) unsigned DEFAULT NULL,
  `system_id` int(10) unsigned DEFAULT NULL,
  `ext_name` varchar(100) NOT NULL DEFAULT '',
  `ext_path` varchar(100) NOT NULL DEFAULT '',
  `ext_access` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ext_id`),
  KEY `webserver_id` (`webserver_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_web_server_extn_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_sw_web_server_extn_server_id` FOREIGN KEY (`webserver_id`) REFERENCES `sys_sw_web_server` (`webserver_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_web_server_ext`
--

LOCK TABLES `sys_sw_web_server_ext` WRITE;
/*!40000 ALTER TABLE `sys_sw_web_server_ext` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_web_server_ext` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_web_site`
--

DROP TABLE IF EXISTS `sys_sw_web_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_web_site` (
  `site_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `webserver_id` int(10) unsigned DEFAULT NULL,
  `system_id` int(10) unsigned DEFAULT NULL,
  `site_internal_id` int(12) unsigned DEFAULT NULL,
  `site_description` varchar(100) NOT NULL DEFAULT '',
  `site_state` varchar(100) NOT NULL DEFAULT '',
  `site_logging` varchar(100) NOT NULL DEFAULT '',
  `site_log_format` varchar(100) NOT NULL DEFAULT '',
  `site_log_directory` varchar(100) NOT NULL DEFAULT '',
  `site_log_rotation` varchar(100) NOT NULL DEFAULT '',
  `site_secure_ip` varchar(100) NOT NULL DEFAULT '',
  `site_secure_port` varchar(100) NOT NULL DEFAULT '',
  `site_path` varchar(100) NOT NULL DEFAULT '',
  `site_size` varchar(100) NOT NULL DEFAULT '',
  `site_app_pool` varchar(100) NOT NULL DEFAULT '',
  `site_directory_browsing` varchar(100) NOT NULL DEFAULT '',
  `site_anon_user` varchar(100) NOT NULL DEFAULT '',
  `site_anon_auth` varchar(100) NOT NULL DEFAULT '',
  `site_basic_auth` varchar(100) NOT NULL DEFAULT '',
  `site_ntlm_auth` varchar(100) NOT NULL DEFAULT '',
  `site_ssl_enabled` varchar(100) NOT NULL DEFAULT '',
  `site_ssl_128_enabled` varchar(100) NOT NULL DEFAULT '',
  `site_default_documents` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`site_id`),
  KEY `webserver_id` (`webserver_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_web_site_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_sw_web_site_server_id` FOREIGN KEY (`webserver_id`) REFERENCES `sys_sw_web_server` (`webserver_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_web_site`
--

LOCK TABLES `sys_sw_web_site` WRITE;
/*!40000 ALTER TABLE `sys_sw_web_site` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_web_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_web_site_header`
--

DROP TABLE IF EXISTS `sys_sw_web_site_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_web_site_header` (
  `header_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(10) unsigned DEFAULT NULL,
  `system_id` int(10) unsigned DEFAULT NULL,
  `header_address` varchar(30) NOT NULL DEFAULT '',
  `header_port` varchar(100) NOT NULL DEFAULT '',
  `header_hostname` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`header_id`),
  KEY `site_id` (`site_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_web_site_header_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_sw_web_site_header_site_id` FOREIGN KEY (`site_id`) REFERENCES `sys_sw_web_site` (`site_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_web_site_header`
--

LOCK TABLES `sys_sw_web_site_header` WRITE;
/*!40000 ALTER TABLE `sys_sw_web_site_header` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_web_site_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_web_site_virtual`
--

DROP TABLE IF EXISTS `sys_sw_web_site_virtual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_web_site_virtual` (
  `virtual_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(10) unsigned DEFAULT NULL,
  `system_id` int(10) unsigned DEFAULT NULL,
  `virtual_name` varchar(100) NOT NULL DEFAULT '',
  `virtual_path` varchar(100) NOT NULL DEFAULT '',
  `virtual_app_pool` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`virtual_id`),
  KEY `site_id` (`site_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_web_site_virtual_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_sw_web_site_virtual_site_id` FOREIGN KEY (`site_id`) REFERENCES `sys_sw_web_site` (`site_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_web_site_virtual`
--

LOCK TABLES `sys_sw_web_site_virtual` WRITE;
/*!40000 ALTER TABLE `sys_sw_web_site_virtual` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_web_site_virtual` ENABLE KEYS */;
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
  `hostname` varchar(100) NOT NULL DEFAULT '',
  `domain` varchar(100) NOT NULL DEFAULT '',
  `fqdn` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT '',
  `icon` varchar(50) NOT NULL DEFAULT '',
  `os_group` varchar(50) NOT NULL DEFAULT '',
  `os_family` varchar(50) NOT NULL DEFAULT '',
  `os_name` varchar(100) NOT NULL DEFAULT '',
  `os_version` varchar(50) NOT NULL DEFAULT '',
  `linked_sys` int(10) NOT NULL DEFAULT '0',
  `serial` varchar(200) NOT NULL DEFAULT '',
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
  `man_serial` varchar(200) NOT NULL DEFAULT '',
  `man_asset_number` varchar(50) NOT NULL DEFAULT '',
  `man_model` varchar(50) NOT NULL DEFAULT '',
  `man_manufacturer` varchar(50) NOT NULL DEFAULT '',
  `man_form_factor` varchar(50) NOT NULL DEFAULT '',
  `man_icon` varchar(50) NOT NULL DEFAULT '',
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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-01 11:42:35
