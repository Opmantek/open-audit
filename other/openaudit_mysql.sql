-- MySQL dump 10.13  Distrib 5.5.29, for osx10.6 (i386)
--
-- Host: localhost    Database: openaudit
-- ------------------------------------------------------
-- Server version	5.5.29-log

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
-- Table structure for table `additional_field`
--

DROP TABLE IF EXISTS `additional_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `additional_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `type` enum('varchar','bool','int','memo','list','datetime','timestamp') NOT NULL DEFAULT 'varchar',
  `values` varchar(100) NOT NULL DEFAULT '',
  `placement` varchar(100) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `additional_field`
--

LOCK TABLES `additional_field` WRITE;
/*!40000 ALTER TABLE `additional_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `additional_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `additional_field_item`
--

DROP TABLE IF EXISTS `additional_field_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `additional_field_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `additional_field_id` int(10) unsigned NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `additional_field_item_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `additional_field_item`
--

LOCK TABLES `additional_field_item` WRITE;
/*!40000 ALTER TABLE `additional_field_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `additional_field_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachment`
--

DROP TABLE IF EXISTS `attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `filename` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `attachment_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachment`
--

LOCK TABLES `attachment` WRITE;
/*!40000 ALTER TABLE `attachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `attachment` ENABLE KEYS */;
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
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `audit_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit_log`
--

LOCK TABLES `audit_log` WRITE;
/*!40000 ALTER TABLE `audit_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit_log` ENABLE KEYS */;
UNLOCK TABLES;

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
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `manufacturer` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `smversion` varchar(100) NOT NULL DEFAULT '',
  `version` varchar(100) NOT NULL DEFAULT '',
  `asset_tag` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `bios_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `details` text NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ack_time` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `external_link` varchar(200) NOT NULL DEFAULT '',
  `external_ident` varchar(200) NOT NULL DEFAULT '',
  `note` varchar(200) NOT NULL DEFAULT '',
  `change_id` int(10) unsigned DEFAULT NULL,
  `change_type` enum('','standard','normal','emergency','unauthorised') NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `change_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `chart`
--

DROP TABLE IF EXISTS `chart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chart` (
  `when` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `what` varchar(50) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
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
-- Table structure for table `cluster`
--

DROP TABLE IF EXISTS `cluster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cluster` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `type` enum('high availability','load balancing','perforance','storage','other') DEFAULT NULL,
  `purpose` enum('application','database','file','virtualisation','web','other') DEFAULT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cluster`
--

LOCK TABLES `cluster` WRITE;
/*!40000 ALTER TABLE `cluster` DISABLE KEYS */;
/*!40000 ALTER TABLE `cluster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuration`
--

DROP TABLE IF EXISTS `configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configuration` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  `value` varchar(250) NOT NULL DEFAULT '',
  `editable` varchar(1) NOT NULL DEFAULT 'n',
  `edited_by`varchar(100) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `description` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuration`
--

LOCK TABLES `configuration` WRITE;
/*!40000 ALTER TABLE `configuration` DISABLE KEYS */;
INSERT INTO `configuration` VALUES (NULL, 'blessed_subnets_use','y','y','system',NOW(),'Should we only accept data from the blessed subnets list.');
INSERT INTO `configuration` VALUES (NULL, 'default_network_address','','y','system',NOW(),'The ip address or resolvable hostname used by external devices to talk to Open-AudIT.');
INSERT INTO `configuration` VALUES (NULL, 'delete_noncurrent','n','y','system',NOW(),'Should we delete any attributes that are not present when we audit a device.');
INSERT INTO `configuration` VALUES (NULL, 'discovery_create_alerts','y','y','system',NOW(),'Should Open-AudIT create an entry in the alert table if a change is detected.');
INSERT INTO `configuration` VALUES (NULL, 'discovery_ip_exclude','','y','system',NOW(),'Populate this list with ip addresses to be excluded from discovery. IPs should be separated by a space.');
INSERT INTO `configuration` VALUES (NULL, 'discovery_ip_match','n','y','system',NOW(),'Should we match a device based only on its ip during discovery.');
INSERT INTO `configuration` VALUES (NULL, 'discovery_linux_script_directory','/tmp/','y','system',NOW(),'The directory the script is copied into on the target device.');
INSERT INTO `configuration` VALUES (NULL, 'discovery_linux_script_permissions','700','y','system',NOW(),'The permissions set on the audit_linux.sh script when it is copied to the target device.');
INSERT INTO `configuration` VALUES (NULL, 'discovery_mac_match','n','y','system',NOW(),'Should we match a device based only on its mac address during discovery.');
INSERT INTO `configuration` VALUES (NULL, 'discovery_name_match','y','y','system',NOW(),'Should we match a device based only on its hostname during discovery.');
INSERT INTO `configuration` VALUES (NULL, 'discovery_nmap_os','n','y','system',NOW(),'When discovery runs Nmap, should we use the -O flag to capture OS information (will slow down scan and requires SUID on the Nmap binary under Linux).');
INSERT INTO `configuration` VALUES (NULL, 'discovery_serial_match','y','y','system',NOW(),'Should we match a device based on its serial number.');
INSERT INTO `configuration` VALUES (NULL, 'discovery_update_groups','y','y','system',NOW(),'Should Open-AudIT update the device groups after discovering a device.');
INSERT INTO `configuration` VALUES (NULL, 'discovery_use_ipmi','y','y','system',NOW(),'Should we use ipmitool for discovering management ports if ipmitool is installed.');
INSERT INTO `configuration` VALUES (NULL, 'discovery_use_dns','y','y','system',NOW(),'Should we use DNS for looking up the hostname and domain.');
INSERT INTO `configuration` VALUES (NULL, 'display_version','1.12.10','n','system',NOW(),'The version shown on the web pages.');
INSERT INTO `configuration` VALUES (NULL, 'distinct_groups','y','y','system',NOW(),'Display Groups on the homepage, separated into the type of each Group.');
INSERT INTO `configuration` VALUES (NULL, 'download_reports','download','y','system',NOW(),'Tells Open-AudIT to advise the browser to download as a file or display the csv, xml, json reports. Valid values are download and display.');
INSERT INTO `configuration` VALUES (NULL, 'maps_api_key','AIzaSyAhAUqssRASeC0Pfyx1TW1DXRmboG5bdG0','y','system',NOW(),'The API key for Google Maps.');
INSERT INTO `configuration` VALUES (NULL, 'internal_version','20160904','n','system',NOW(),'The internal numerical version.');
INSERT INTO `configuration` VALUES (NULL, 'logo','logo-banner-oac-oae','y','system',NOW(),'The logo to be used in Open-AudIT. Should be a 475x60 .png. Name should not include the file extension. logo-banner-oac-oae is the default.');
INSERT INTO `configuration` VALUES (NULL, 'log_level','5','y','system',NOW(),'Tells Open-AudIT which severity of event (at least) should be logged.');
INSERT INTO `configuration` VALUES (NULL, 'log_style','syslog','y','system',NOW(),'Tells Open-AudIT which log format to use. Valid values are json and syslog.');
INSERT INTO `configuration` VALUES (NULL, 'maps_url','/omk/oae/map','y','system',NOW(),'The web server address of opMaps.');
INSERT INTO `configuration` VALUES (NULL, 'network_group_auto_create','y','y','system',NOW(),'Have Open-AudIT automatically create Groups based on Subnet.');
INSERT INTO `configuration` VALUES (NULL, 'network_group_homepage_limit','20','y','system',NOW(),'The number of network groups to display on the homepage.');
INSERT INTO `configuration` VALUES (NULL, 'network_group_subnet','30','y','system',NOW(),'If the netmask is equal to or greater than this number, do not create a network group.');
INSERT INTO `configuration` VALUES (NULL, 'nmis','n','y','system',NOW(),'Enable import / export to NMIS functions.');
INSERT INTO `configuration` VALUES (NULL, 'nmis_url','','y','system',NOW(),'The web server address of NMIS.');
INSERT INTO `configuration` VALUES (NULL, 'non_admin_search','y','y','system',NOW(),'Enable or disable search for non-Administrators');
INSERT INTO `configuration` VALUES (NULL, 'oae_license','none','n','system',NOW(),'License status of Open-AudIT Enterprise.');
INSERT INTO `configuration` VALUES (NULL, 'oae_prompt','2015-06-01','n','system',NOW(),'Prompt to activate a license for Open-AudIT Enterprise.');
INSERT INTO `configuration` VALUES (NULL, 'oae_url','/omk/oae','y','system',NOW(),'The web server address of Open-AudIT Enterprise.');
INSERT INTO `configuration` VALUES (NULL, 'page_refresh','300','y','system',NOW(),'Interval in seconds between auto-refreshing the page. Set to 0 to cancel auto-refresh.');
INSERT INTO `configuration` VALUES (NULL, 'rss_enable','y','y','system',NOW(),'Enable the RSS feed.');
INSERT INTO `configuration` VALUES (NULL, 'rss_url','https://community.opmantek.com/rss/OA.xml','y','system',NOW(),'The RSS feed URL.');
INSERT INTO `configuration` VALUES (NULL, 'show_passwords','n','y','system',NOW(),'Show any passwords on forms.');
INSERT INTO `configuration` VALUES (NULL, 'show_snmp_community','n','y','system',NOW(),'Show the SNMP community string on forms.');
/*!40000 ALTER TABLE `configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credential`
--

DROP TABLE IF EXISTS `credential`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credential` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `type` enum('aws','basic_auth','cim','ipmi','mysql','netapp','other','snmp','snmp_v3','sql_server','ssh','ssh_key','vmware','web','windows') NOT NULL DEFAULT 'other',
  `credentials` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `credential_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credential`
--

LOCK TABLES `credential` WRITE;
/*!40000 ALTER TABLE `credential` DISABLE KEYS */;
/*!40000 ALTER TABLE `credential` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credentials`
--

DROP TABLE IF EXISTS `credentials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credentials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `type` enum('aws','basic_auth','cim','ipmi','mysql','netapp','other','snmp','snmp_v3','sql_server','ssh','ssh_key','vmware','web','windows') NOT NULL DEFAULT 'other',
  `credentials` text NOT NULL,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credentials`
--

LOCK TABLES `credentials` WRITE;
/*!40000 ALTER TABLE `credentials` DISABLE KEYS */;
INSERT INTO credentials VALUES (NULL, 'Default SNMP', '', 'snmp', 'ZO6BkpM46ukP0SjCV7oJKkV/ab1pf2KXVgBxstNZIP9a9pEVoHG6oytxCp2C9GtG3wx2qDHjuIO8bo2wm1MwwQ==', 1, 'system', NOW());
/*!40000 ALTER TABLE `credentials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discoveries`
--

DROP TABLE IF EXISTS `discoveries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discoveries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `devices_assigned_to_org` int(10) unsigned DEFAULT NULL,
  `devices_assigned_to_location` int(10) unsigned DEFAULT NULL,
  `network_address` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `subnet` varchar(100) NOT NULL DEFAULT '',
  `system_id` int(10) unsigned NOT NULL DEFAULT '0',
  `other` text NOT NULL,
  `device_count` int(10) unsigned NOT NULL DEFAULT '0',
  `discard` enum('y','n') NOT NULL DEFAULT 'n',
  `created_by` varchar(200) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `updated_on` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `complete` enum('y','n') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discoveries`
--

LOCK TABLES `discoveries` WRITE;
/*!40000 ALTER TABLE `discoveries` DISABLE KEYS */;
/*!40000 ALTER TABLE `discoveries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discovery_log`
--

DROP TABLE IF EXISTS `discovery_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discovery_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `discovery_id` int(10) unsigned DEFAULT NULL,
  `system_id` int(10) unsigned DEFAULT NULL,
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `severity` int(1) unsigned NOT NULL DEFAULT '5',
  `severity_text` enum ('debug', 'info', 'notice', 'warning', 'error', 'critical', 'alert', 'emergency') NOT NULL DEFAULT 'notice',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `file` varchar(100) NOT NULL DEFAULT '',
  `function` varchar(100) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `command` text NOT NULL,
  `command_status` varchar(100) NOT NULL DEFAULT '',
  `command_time_to_execute` decimal(12,6) NOT NULL,
  `command_output` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `pid` (`pid`),
  CONSTRAINT `discovery_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discovery_log`
--

LOCK TABLES `discovery_log` WRITE;
/*!40000 ALTER TABLE `discovery_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `discovery_log` ENABLE KEYS */;
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `disk_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `dns`
--

DROP TABLE IF EXISTS `dns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(100) NOT NULL DEFAULT '',
  `fqdn` varchar(200) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `dns_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `value` text NOT NULL,
  `previous_value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `edit_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `files_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `full_name` text NOT NULL,
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `directory` text NOT NULL,
  `hash` varchar(250) NOT NULL DEFAULT '',
  `last_changed` varchar(100) NOT NULL DEFAULT '',
  `meta_last_changed` varchar(100) NOT NULL DEFAULT '',
  `permission` varchar(250) NOT NULL DEFAULT '',
  `owner` varchar(100) NOT NULL DEFAULT '',
  `group` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `version` varchar(100) NOT NULL DEFAULT '',
  `inode` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `file_files_id` (`files_id`),
  CONSTRAINT `file_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `path` varchar(45) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `graph`
--

DROP TABLE IF EXISTS `graph`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graph` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `system_id` int(10) unsigned DEFAULT NULL,
  `linked_table` varchar(100) NOT NULL DEFAULT '',
  `linked_row` varchar(100) NOT NULL DEFAULT '',
  `type` enum('disk','partition','directory','file','database','share','other') NOT NULL DEFAULT 'partition',
  `used_percent` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `free_percent` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `used` int(10) unsigned NOT NULL DEFAULT '0',
  `free` int(10) unsigned NOT NULL DEFAULT '0',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `graph_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `sql` text NOT NULL,
  `link` text NOT NULL,
  `expose` enum('y','n') NOT NULL DEFAULT 'y',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO groups VALUES(NULL, 1, "All Devices", "All the devices a user is authorised to view.", "SELECT DISTINCT(system.id) FROM system WHERE @filter", "", "y", "system", NOW());
INSERT INTO groups VALUES(NULL, 1, "Open-AudIT Enterprise Managed Devices", "Devices Managed by Open-AudIT Enterprise.", "SELECT distinct(system.id) FROM system WHERE @filter AND system.status = 'production' and oae_manage = 'y'", "", "y", "system", NOW());
INSERT INTO groups VALUES(NULL, 1, "Public IP Devices", "Devices with a public IP address and a status of production.", "SELECT distinct(system.id) FROM system LEFT JOIN ip ON (ip.system_id = system.id AND ip.current = 'y') WHERE @filter AND ((( ip.ip > '000.000.000.000' AND ip.ip < '010.000.000.000' ) OR ( ip.ip > '010.255.255.255' AND ip.ip < '169.254.0.0' ) OR ( ip.ip > '169.254.255.255' AND ip.ip < '172.016.000.000' ) OR ( ip.ip > '172.31.255.255' AND ip.ip < '192.168.000.000' ) OR ip.ip > '192.168.255.255' ) OR ( ( system.ip > '000.000.000.000' AND system.ip < '010.000.000.000' ) OR ( system.ip > '010.255.255.255' AND system.ip < '169.254.0.0' ) OR ( system.ip > '169.254.255.255' AND system.ip < '172.016.000.000' ) OR ( system.ip > '172.31.255.255' AND system.ip < '192.168.000.000' ) OR system.ip > '192.168.255.255' )) AND system.status = 'production'", "", "y", "system", NOW());
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `purchase_order` varchar(100) NOT NULL DEFAULT '',
  `cost_center` varchar(100) NOT NULL DEFAULT '',
  `date_received` varchar(100) NOT NULL DEFAULT '',
  `date_paid` varchar(100) NOT NULL DEFAULT '',
  `supplier` varchar(100) NOT NULL DEFAULT '',
  `filename` varchar(100) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice_item`
--

DROP TABLE IF EXISTS `invoice_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoice_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `invoice_id` int(10) unsigned DEFAULT NULL,
  `line_text` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(200) NOT NULL DEFAULT '',
  `asset_number` varchar(200) NOT NULL DEFAULT '',
  `line_amount` varchar(200) NOT NULL DEFAULT '',
  `notes` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice_item`
--

LOCK TABLES `invoice_item` WRITE;
/*!40000 ALTER TABLE `invoice_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoice_item` ENABLE KEYS */;
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `ip_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `ldap_groups`
--

DROP TABLE IF EXISTS `ldap_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ldap_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ldap_servers_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(200) NOT NULL DEFAULT '',
  `dn` text NOT NULL,
  `primary_token` varchar(200) NOT NULL DEFAULT '',
  `memberof` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ldap_groups`
--

LOCK TABLES `ldap_groups` WRITE;
/*!40000 ALTER TABLE `ldap_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `ldap_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ldap_servers`
--

DROP TABLE IF EXISTS `ldap_servers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ldap_servers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `lang` varchar(200) NOT NULL DEFAULT '',
  `host` varchar(200) NOT NULL DEFAULT '',
  `domain` varchar(200) NOT NULL DEFAULT '',
  `use_roles` enum('y','n') NOT NULL DEFAULT 'n',
  `refresh` int(10) unsigned NOT NULL DEFAULT '24',
  `refreshed` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ldap_servers`
--

LOCK TABLES `ldap_servers` WRITE;
/*!40000 ALTER TABLE `ldap_servers` DISABLE KEYS */;
/*!40000 ALTER TABLE `ldap_servers` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `licenses`
--

DROP TABLE IF EXISTS `licenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `licenses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `invoice_id` int(10) unsigned NOT NULL DEFAULT '0',
  `invoice_item_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `match_string` text NOT NULL,
  `type` enum('','software','hardware','service','other') NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `licenses`
--

LOCK TABLES `licenses` WRITE;
/*!40000 ALTER TABLE `licenses` DISABLE KEYS */;
/*!40000 ALTER TABLE `licenses` ENABLE KEYS */;
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(50) NOT NULL DEFAULT '',
  `file_name` varchar(250) NOT NULL DEFAULT '',
  `file_size` int(10) unsigned NOT NULL DEFAULT '0',
  `max_file_size` int(10) unsigned NOT NULL DEFAULT '0',
  `overwrite` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `memory_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `module_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `monitor_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `manufacturer` varchar(50) NOT NULL DEFAULT '',
  `model` varchar(50) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `memory_slot_count` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `processor_slot_count` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `processor_type` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `motherboard_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `protocol` enum('tcp','udp','tcp6','udp6','tcp4','udp4','') NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `port` int(5) NOT NULL DEFAULT '0',
  `program` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `netstat_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  KEY `mac` (`mac`),
  CONSTRAINT `network_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `networks`
--

DROP TABLE IF EXISTS `networks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `networks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
-- Table structure for table `nmap`
--

DROP TABLE IF EXISTS `nmap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nmap` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `protocol` enum('tcp','udp','tcp6','udp6','tcp4','udp4','') NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `port` int(5) NOT NULL DEFAULT '0',
  `program` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `nmap_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nmap`
--

LOCK TABLES `nmap` WRITE;
/*!40000 ALTER TABLE `nmap` DISABLE KEYS */;
/*!40000 ALTER TABLE `nmap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `comment` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `notes_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
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
-- Table structure for table `oa_change`
--

DROP TABLE IF EXISTS `oa_change`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_change` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL DEFAULT '',
  `reason` text NOT NULL,
  `planned_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `implemented_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `external_id` varchar(200) NOT NULL DEFAULT '',
  `external_link` varchar(200) NOT NULL DEFAULT '',
  `authorized_by` varchar(100) NOT NULL DEFAULT '',
  `performed_by` varchar(100) NOT NULL DEFAULT '',
  `details` text NOT NULL,
  `potential_issues` text NOT NULL,
  `backout_plan` text NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_change`
--

LOCK TABLES `oa_change` WRITE;
/*!40000 ALTER TABLE `oa_change` DISABLE KEYS */;
INSERT INTO `oa_change` VALUES (NULL,'Default Change.','',NOW(),NOW(),'','','','','','','',1,NOW());
/*!40000 ALTER TABLE `oa_change` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_connection`
--

DROP TABLE IF EXISTS `oa_connection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_connection` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(100) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `service_identifier` varchar(100) NOT NULL,
  `speed` float(7,3) NOT NULL DEFAULT '0.000',
  `location_id_a` int(10) unsigned NOT NULL DEFAULT '1',
  `location_id_b` int(10) unsigned NOT NULL DEFAULT '1',
  `system_id_a` int(10) unsigned DEFAULT NULL,
  `system_id_b` int(10) unsigned DEFAULT NULL,
  `line_number_a` varchar(100) NOT NULL,
  `line_number_b` varchar(100) NOT NULL,
  `ip_address_external_a` varchar(30) NOT NULL,
  `ip_address_external_b` varchar(30) NOT NULL,
  `ip_address_internal_a` varchar(30) NOT NULL,
  `ip_address_internal_b` varchar(30) NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
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
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `column_order` int(10) unsigned NOT NULL,
  `column_name` varchar(100) NOT NULL,
  `column_variable` varchar(100) NOT NULL,
  `column_type` enum('','link','image','ip_address','text','timestamp','url') NOT NULL DEFAULT '',
  `column_link` varchar(100) NOT NULL,
  `column_secondary` varchar(100) NOT NULL,
  `column_ternary` varchar(100) NOT NULL,
  `column_align` varchar(6) NOT NULL,
  PRIMARY KEY (`id`),
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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `group_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `group_id` (`group_id`),
  KEY `system_id_index` (`system_id`),
  CONSTRAINT `oa_group_sys_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_group_sys_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `group_user_access_level` int(10) NOT NULL,
  PRIMARY KEY (`id`),
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
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `type` enum('Airforce','Airport','Ambulance Station','Army','Cloud','Conference Center','Court House','Data Center','Depot','District','Doctors Office','Embassy','Factory','Fire Station','Guard','Head Office','High School','Hospital','Hotel','House','Library','Light House','Marina','Mobile Phone Tower','Motel','Navy','Newsagent','Nursing Home','Observatory','Office','Oil Rig','Police','Power Plant','Power Substation','Prison','Radio Station','Regional','Resort','Retail','School','Security','Stadium','Train Station','Travel Agency','TV Station','University','Warehouse','Workshop') NOT NULL DEFAULT 'Office',
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
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_location`
--

LOCK TABLES `oa_location` WRITE;
/*!40000 ALTER TABLE `oa_location` DISABLE KEYS */;
INSERT INTO `oa_location` VALUES (1,'Default Location',1,'Office','','','','','','Gold Coast','','','','Queensland','','Australia','','','',-28.017260,153.425705,'','Default location','office','system',NOW());
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
  `parent_id` int(10) unsigned DEFAULT '1',
  `comments` text NOT NULL,
  `ad_group` varchar(100) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_org`
--

LOCK TABLES `oa_org` WRITE;
/*!40000 ALTER TABLE `oa_org` DISABLE KEYS */;
INSERT INTO `oa_org` VALUES (1,'Default Organisation',1,'','open-audit_orgs_default_organisation','system',NOW());
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
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `report_name` varchar(100) NOT NULL DEFAULT '',
  `report_description` text NOT NULL,
  `report_display_in_menu` enum('y','n') NOT NULL DEFAULT 'y',
  `report_sql` text NOT NULL,
  `report_display_sql` text NOT NULL,
  `report_view_file` varchar(100) NOT NULL DEFAULT '',
  `report_view_contents` text NOT NULL,
  `report_processing` text NOT NULL,
  `report_sort_column` int(10) unsigned NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `report_id` int(10) unsigned NOT NULL,
  `column_order` int(10) unsigned NOT NULL,
  `column_name` varchar(100) NOT NULL,
  `column_variable` varchar(100) NOT NULL,
  `column_type` enum('','link','image','ip_address','text','timestamp','url') NOT NULL DEFAULT '',
  `column_link` varchar(100) NOT NULL,
  `column_secondary` varchar(100) NOT NULL,
  `column_ternary` varchar(100) NOT NULL,
  `column_align` varchar(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `report_id` (`report_id`),
  CONSTRAINT `oa_report_column_group_id` FOREIGN KEY (`report_id`) REFERENCES `oa_report` (`report_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
  `temp_timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `password` varchar(250) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `roles` text NOT NULL,
  `orgs` text NOT NULL,
  `lang` varchar(100) NOT NULL,
  `active` varchar(1) NOT NULL DEFAULT 'y',
  `ldap` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',  
  PRIMARY KEY (`id`),
  KEY `user_id_index` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_user`
--

LOCK TABLES `oa_user` WRITE;
/*!40000 ALTER TABLE `oa_user` DISABLE KEYS */;
INSERT INTO `oa_user` VALUES (NULL,'admin',1,'0ab0a153e5bbcd80c50a02da8c97f3c87686eb8512f5457d30e328d2d4448c8968e9f4875c2eb61356197b851dd33f90658b20b32139233b217be54d903ca3b6','Administrator','admin@openaudit','["admin","org_admin"]','[1]','en','y','','system',NOW());
INSERT INTO `oa_user` VALUES (NULL,'open-audit_enterprise',1,'43629bd846bb90e40221d5276c832857ca51e49e325f7344704543439ffd6b6d3a963a32a41f55fca6d995fd302acbe03ea7d8bf2b3af91d662d497b0ad9ba1e','Open-AudIT Enterprise','','["admin","org_admin"]','[1]','en','y','','system',NOW());
INSERT INTO `oa_user` VALUES (NULL,'nmis',1,'5a7f9a638ea430196d765ef8d3875eafd64ee3d155ceddaced75467a76b97ab24080cba4a2e74cde03799a6a49dbc5c36ee204eff1d5f42e08cf7a423fdf9757','NMIS','','["admin","org_admin"]','[1]','en','y','','system',NOW());
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `model` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  `device` varchar(100) NOT NULL DEFAULT '',
  `mount_point` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `optical_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `optical`
--

LOCK TABLES `optical` WRITE;
/*!40000 ALTER TABLE `optical` DISABLE KEYS */;
/*!40000 ALTER TABLE `optical` ENABLE KEYS */;
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(100) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `initial_size` int(10) unsigned NOT NULL DEFAULT '0',
  `max_size` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `pagefile_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `partition`
--

DROP TABLE IF EXISTS `partition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partition` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  `device` varchar(100) NOT NULL DEFAULT '',
  `hard_drive_index` varchar(100) NOT NULL DEFAULT '',
  `partition_disk_index` varchar(50) NOT NULL DEFAULT '',
  `mount_type` enum('mount point','partition','other') NOT NULL DEFAULT 'partition',
  `mount_point` varchar(100) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '1',
  `free` int(10) unsigned NOT NULL DEFAULT '1',
  `used` int(10) unsigned NOT NULL DEFAULT '1',
  `format` varchar(20) NOT NULL DEFAULT '',
  `bootable` varchar(10) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT 'local',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `partition_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `print_queue`
--

DROP TABLE IF EXISTS `print_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `print_queue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  `status` varchar(100) NOT NULL DEFAULT '',
  `capabilities` varchar(200) NOT NULL DEFAULT '',
  `driver` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `print_queue_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `processor`
--

DROP TABLE IF EXISTS `processor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `processor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `processor_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `queries`
--

DROP TABLE IF EXISTS `queries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `queries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `sql` text NOT NULL,
  `link` text NOT NULL,
  `expose` enum('y','n') NOT NULL DEFAULT 'y',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `queries`
--

LOCK TABLES `queries` WRITE;
/*!40000 ALTER TABLE `queries` DISABLE KEYS */;
INSERT INTO queries VALUES (NULL, 1, "Audit Dates", "The first and last times a device was audited.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_name AS `system.os_name`, system.first_seen AS `system.first_seen`, system.last_seen AS `system.last_seen`, GROUP_CONCAT(DISTINCT(audit_log.type) ORDER BY audit_log.type) AS `seen_by` FROM system LEFT JOIN audit_log ON (audit_log.system_id = system.id) WHERE @filter GROUP BY system.id", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Billing Report", "Name, last seen on and by, type, class, manufacturer, model, serial, user, location.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, oa_org.name AS `oa_org.name`, system.last_seen AS `system.last_seen`, system.last_seen_by AS `system.last_seen_by`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.class AS `system.class`, windows.user_name AS `windows.user_name`, oa_location.name AS `oa_location.name` FROM system LEFT JOIN oa_location ON (system.location_id = oa_location.id) LEFT JOIN windows ON (system.id = windows.system_id AND windows.current = 'y') LEFT JOIN oa_org ON (system.org_id = oa_org.id) WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Changes - Hardware", "Any changes created in the tables 'bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'optical', 'partition', 'processor', 'network', 'scsi', 'sound' and 'video'.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table in ('bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'optical', 'partition', 'processor', 'network', 'scsi', 'sound', 'video')", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Changes - New Devices", "Any changes in the table 'system'.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table = 'system'", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Changes - Settings", "Any changes in the tables 'dns', 'ip', 'log', netstat', 'pagefile', 'print_queue', 'route', 'task', 'user', 'user_group' and 'variable'.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table in ('dns', 'ip', 'log', 'netstat', 'pagefile', 'print_queue', 'route', 'task', 'user', 'user_group', 'variable')", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Changes - Software", "Any changes in the tables 'service', 'server', 'server_item', 'software' and 'software_key'.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table in ('service', 'server', 'server_item', 'software', 'software_key')", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Consumed IP Addresses", "The ip addresses used by a group.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_family AS `system.os_family`, system.description AS `system.description`, ip.ip as `ip.ip` FROM ip LEFT JOIN system ON (system.id = ip.system_id AND ip.current = 'y') WHERE @filter AND ip.ip IS NOT NULL AND ip.ip != '127.000.000.001' AND ip.ip != '' AND ip.ip != '0.0.0.0' AND ip.ip != '000.000.000.000' AND ip.version = '4' GROUP BY ip.id, ip.ip ORDER BY ip.ip", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Devices Without Credentials", "Device details - name, ip, last seen on and by for those devices only discovered by Nmap and have therefore not been audited.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, audit_log.timestamp AS `audit_log.timestamp`, audit_log.ip AS `audit_log.ip` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.id) WHERE @filter AND audit_log.system_id NOT IN (SELECT DISTINCT(audit_log.system_id) FROM audit_log WHERE type != 'nmap') GROUP BY system.id", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Disk Partition Use", "Partition details where partition free and used space aren't 0 and type isn't Volume or Network Drive and mount point isn't [SWAP].", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, partition.id AS `partition.id`, partition.hard_drive_index AS `partition.hard_drive_index`, partition.mount_point AS `partition.mount_point`, partition.mount_type as `partition.mount_type`, partition.size AS `partition.size`, partition.used AS `partition.used`, partition.free AS `partition.free`, ROUND(((partition.free / partition.size) * 100), 0) AS percent_free, partition.name AS `partition.name` FROM system INNER JOIN `partition` ON (partition.system_id = system.id AND partition.current = 'y') WHERE @filter AND partition.used > 0 AND partition.free > 0 AND LOWER(partition.type) != 'volume' AND LOWER(partition.type) != 'network drive' AND LOWER(partition.mount_point) != '[swap]' ORDER BY system.name, partition.id", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Export Details", "Icon, type, name, first seen on, last seen on, last seen by, manufacturer, model, serial, owner, organisation, location, operating system.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.fqdn AS `system.fqdn`, system.serial AS `system.serial`, system.class AS `system.class`, system.function AS `system.function`, system.owner AS `system.owner`, system.asset_number AS `system.asset_number` FROM system WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Failed Audits", "Name, ip address, audit time, audit stage.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, audit_log.timestamp AS `audit_log.timestamp`, audit_log.debug AS `audit_log.debug` FROM system LEFT JOIN audit_log ON (system.id = audit_log.system_id) WHERE @filter AND audit_log.debug > ''", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Hardware - Device", "Icon, name, ip address, manufacturer, model, serial.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.asset_number AS `system.asset_number` FROM system WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Hardware - Memory and Processors", "Device details - name, ip, memory, total processor cores, processor speed, processor description.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, CAST(system.memory_count/1024 AS UNSIGNED) AS `system.memory_count`, processor.physical_count AS `processor.physical_count`, processor.core_count AS `processor.core_count`, processor.logical_count AS `processor.logical_count`, processor.speed AS `processor.speed`, processor.description AS `processor.description` FROM system INNER JOIN processor ON (system.id = processor.system_id AND processor.current = 'y') WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Hardware - Workstations", "Device details - name, ip, manufacturer, model, serial, form factor, memory, processor.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.memory_count AS `system.memory_count`, system.form_factor AS `system.form_factor`, processor.description AS `processor.description` FROM system LEFT JOIN processor ON (processor.system_id = system.id AND processor.current = 'y') LEFT JOIN oa_location ON (system.location_id = oa_location.id) WHERE @filter AND system.type = 'computer' AND system.class != 'server' AND system.class != 'hypervisor' ORDER BY system.name", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Installed - Acrobat", "Adobe Acrobat installations (software name contains 'acrobat' or 'adobe reader').", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND (software.name LIKE '%acrobat%' OR software.name LIKE 'adobe reader%')) LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Installed - Antivirus", "Installed AntiVirus software (software name contains 'virus' or 'trend micro' or 'endpoint').", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version` FROM system LEFT JOIN software ON (software.system_id = system.id AND software.current = 'y' AND (software.name LIKE '%virus%' or software.name LIKE '%trend micro%' or software.name LIKE '%endpoint%')) LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter AND system.type = 'computer'", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Installed - Flash", "Flash Player installations.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND software.name LIKE '%Flash Player%') LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Installed - MS FrontPage", "MS Frontpage installations (software name contains 'Microsoft Office Frontpage' or 'with Frontpage').", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND (software.name LIKE 'Microsoft Office Frontpage%' OR software.name LIKE '%with FrontPage')) LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Installed - MS Office", "MS Office installations.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND software.name LIKE 'Microsoft Office%') LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Installed - MS Project", "MS Project installations (software name contains 'Microsoft Project').", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND software.name LIKE '%Microsoft%Project%') LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Installed - MS Visio", "MS Visio installations (software name contains 'Microsoft Visio').", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND software.name LIKE 'Microsoft%Visio%') LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Interfaces Used or Available", "Query to determine if a device interface is available for use.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, network.alias as `network.alias`, network.net_index AS `network.net_index`, network.description as `network.description`, network.ifadminstatus as `network.ifadminstatus`, network.ip_enabled as `network.ip_enabled`, system.sysuptime AS `system.sysuptime`, (system.sysuptime - network.iflastchange) AS diff, floor((system.sysuptime - network.iflastchange) /60/60/24/100) as diff_days, IF((network.ifadminstatus = 'down') OR (network.ifadminstatus = 'up' AND (network.ip_enabled != 'up' AND network.ip_enabled != 'dormant') AND (((system.sysuptime - network.iflastchange) > 60480000) OR (system.sysuptime < network.iflastchange))), 'available', 'used') AS available FROM network LEFT JOIN system ON (network.system_id = system.id AND network.current = 'y') WHERE @filter AND network.ifadminstatus != ''", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Log Files", "Log file details.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, log.name as `log.name`, log.file_name AS `log.file_name`, log.file_size AS `log.file_size`, log.max_file_size AS `log.max_file_size`, log.overwrite AS `log.overwrite` FROM log LEFT JOIN system ON (system.id = log.system_id and log.current = 'y') WHERE @filter ORDER BY system.name", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Netstat Ports", "Detected Netstat ports.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_name AS `system.os_name`, netstat.protocol AS `netstat.protocol`, netstat.port AS `netstat.port`, netstat.ip AS `netstat.ip`, netstat.program AS `netstat.program` FROM system LEFT JOIN netstat ON (system.id = netstat.system_id AND netstat.current = 'y') WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Printer Queues", "Printer details - manufacturer, model, status, capabilities, etc.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, print_queue.manufacturer AS `print_queue.manufacturer`, print_queue.model AS `print_queue.model`, print_queue.description AS `print_queue.description`, print_queue.driver AS `print_queue.driver`, print_queue.status AS `print_queue.status`, print_queue.port_name AS `print_queue.port_name`, print_queue.duplex AS `print_queue.duplex`, print_queue.color AS `print_queue.color`, print_queue.location AS `print_queue.location`, print_queue.type AS `print_queue.type`, print_queue.shared AS `print_queue.shared`, print_queue.shared_name AS `print_queue.shared_name`, print_queue.capabilities AS `print_queue.capabilities` FROM print_queue LEFT JOIN system ON (system.id = print_queue.system_id AND print_queue.current = 'y') WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Servers - Database", "All databases.", "SELECT system.id AS `system.id`, system.name AS `system.name`, system.fqdn AS `system.fqdn`, system.os_family AS `system.os_family`, system.environment AS `system.environment`, server_item.parent_name AS `server_item.parent_name`, server_item.name AS `server_item.name`, server_item.instance AS `server_item.instance`, server_item.path AS `server_item.path`, server_item.log_status AS `server_item.log_status`, server_item.log_format AS `server_item.log_format`, server_item.log_rotation AS `server_item.log_rotation`, server_item.log_path AS `server_item.log_path` FROM system LEFT JOIN server_item ON (server_item.system_id = system.id and server_item.current = 'y') WHERE @filter AND server_item.type = 'database'", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Servers - Websites", "desc", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_family AS `system.os_family`, system.environment AS `system.environment`, server_item.parent_name AS `server_item.parent_name`, server_item.name AS `server_item.name`, server_item.description AS `server_item.description`, server_item.status AS `server_item.status`, server_item.instance AS `server_item.instance`, server_item.path AS `server_item.path`, server_item.log_status AS `server_item.log_status`, server_item.log_format AS `server_item.log_format`, server_item.log_rotation AS `server_item.log_rotation`, server_item.log_path AS `server_item.log_path` FROM system LEFT JOIN server_item ON (server_item.system_id = system.id and server_item.current = 'y') WHERE @filter AND server_item.type = 'website'", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Shares", "Shared directory details.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, share.id AS `share.id`, share.name AS `share.name`, share.description AS `share.description`, share.size AS `share.size`, share.path AS `share.path` FROM share LEFT JOIN system ON (system.id = share.system_id and share.current = 'y') WHERE @filter", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Users - Elevated", "Name, group name, group members.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM user_group LEFT JOIN system ON (user_group.system_id = system.id AND user_group.current = 'y') WHERE @filter AND (user_group.name = 'Administrators' OR user_group.name = 'Power Users' OR user_group.name = 'Remote Desktop Users' OR user_group.name = 'wheel' OR user_group.name = 'sudo') AND user_group.members > '' GROUP BY system.id, user_group.name ORDER BY system.name", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Users - Orphaned", "User accounts that no longer appear to be valid.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM system LEFT JOIN user_group ON (user_group.system_id = system.id AND user_group.current = 'y') WHERE @filter AND user_group.members LIKE '%@,%' AND user_group.members NOT LIKE 'Everyone@,' GROUP BY user_group.id ORDER BY system.name", "", "y", "system", NOW());
INSERT INTO queries VALUES (NULL, 1, "Users - Standard", "Name, group name, group members.", "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.members AS `user_group.members`, user_group.name AS `user_group.name` FROM user_group LEFT JOIN system ON (user_group.system_id = system.id AND user_group.current = 'y') WHERE @filter AND (user_group.name = 'Users' OR user_group.name = 'Guests') AND user_group.members > ''", "", "y", "system", NOW());
/*!40000 ALTER TABLE `queries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `permissions` text NOT NULL DEFAULT '',
  `ad_group` varchar(100) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO roles VALUES (NULL, 'admin', 'This role can change global options.', '{"configuration":"crud","database":"crud","groups":"crud","ldap_servers":"crud","logs":"crud","nmis": "crud","queries":"crud","roles":"crud","search":"crud","sessions":"crud","summaries":"crud"}', 'open-audit_roles_admin', 'system', NOW());
INSERT INTO roles VALUES (NULL, 'org_admin', 'This role is used for administration of endpoints that contain an org_id.', '{"charts":"crud","connections":"crud","credentials":"crud","summaries":"crud","devices":"crud","discoveries":"crud","fields":"crud","files":"crud","graph":"crud","groups":"crud","invoice":"crud","licenses":"crud","locations":"crud","networks":"crud","orgs":"crud","queries":"crud","scripts":"crud","search":"crud","sessions":"crud","users":"crud"}', 'open-audit_roles_org_admin', 'system', NOW());
INSERT INTO roles VALUES (NULL, 'reporter', 'The role used for reading endpoints and creating reports above to the user role.', '{"charts":"r","connections":"r","credentials":"r","summaries":"r","devices":"r","fields":"r","files":"r","graph":"r","invoice":"r","licenses":"crud","locations":"r","networks":"r","orgs":"r","queries":"crud","search":"crud","sessions":"crud"}', 'open-audit_roles_reporter', 'system', NOW());
INSERT INTO roles VALUES (NULL, 'user', 'A standard role that can read all endpoints that contain an org_id.', '{"charts":"r","connections":"r","credentials":"r","summaries":"r","devices":"r","fields":"r","files":"r","graph":"r","invoice":"r","licenses":"r","locations":"r","networks":"r","orgs":"r","queries":"r","search":"crud","sessions":"crud"}', 'open-audit_roles_user', 'system', NOW());
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `destination` varchar(20) NOT NULL DEFAULT '',
  `mask` varchar(20) NOT NULL DEFAULT '',
  `metric` varchar(10) NOT NULL DEFAULT '',
  `next_hop` varchar(40) NOT NULL DEFAULT '',
  `protocol` varchar(10) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `route_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `san`
--

DROP TABLE IF EXISTS `san`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `san` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `type` varchar(100) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `serial` varchar(50) NOT NULL DEFAULT '',
  `part_number` varchar(100) NOT NULL DEFAULT '',
  `location` varchar(100) NOT NULL DEFAULT '',
  `attached_to` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `date_of_manufacture` varchar(100) NOT NULL DEFAULT '',
  `notes` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `san_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `scripts`
--

DROP TABLE IF EXISTS `scripts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scripts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `options` text NOT NULL,
  `description` varchar(200) NOT NULL DEFAULT '',
  `based_on` varchar(200) NOT NULL DEFAULT '',
  `hash` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scripts`
--

LOCK TABLES `scripts` WRITE;
/*!40000 ALTER TABLE `scripts` DISABLE KEYS */;
INSERT INTO `scripts` VALUES (NULL,'audit_aix.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http://open-audit/index.php/system/add_system\",\"debugging\":1}','The default audit AIX config.','audit_aix.sh','','system',NOW());
INSERT INTO `scripts` VALUES (NULL,'audit_esx.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http://open-audit/index.php/system/add_system\",\"debugging\":1}','The default audit ESX config.','audit_esx.sh','','system',NOW());
INSERT INTO `scripts` VALUES (NULL,'audit_linux.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http://open-audit/index.php/system/add_system\",\"debugging\":1}','The default audit Linux config.','audit_linux.sh','','system',NOW());
INSERT INTO `scripts` VALUES (NULL,'audit_osx.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http://open-audit/index.php/system/add_system\",\"debugging\":1}','The default audit OSX config.','audit_osx.sh','','system',NOW());
INSERT INTO `scripts` VALUES (NULL,'audit_windows.vbs',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http://open-audit/index.php/system/add_system\",\"debugging\":1}','The default audit Windows config.','audit_windows.vbs','','system',NOW());
/*!40000 ALTER TABLE `scripts` ENABLE KEYS */;
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(200) NOT NULL DEFAULT '',
  `device` varchar(200) NOT NULL DEFAULT '',
  `type` enum('raid','hba','other','san controller','san shelf') NOT NULL DEFAULT 'other',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `scsi_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `server_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `server_item_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `service_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `description` varchar(250) NOT NULL DEFAULT '',
  `name` varchar(250) NOT NULL DEFAULT '',
  `path` varchar(250) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `users` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `share_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(255) NOT NULL DEFAULT '',
  `version` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL DEFAULT '',
  `uninstall` mediumtext NOT NULL,
  `install_date` varchar(100) NOT NULL DEFAULT '',
  `installed_by` varchar(100) NOT NULL DEFAULT '',
  `installed_on` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `software_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(250) NOT NULL DEFAULT '',
  `string` varchar(100) NOT NULL DEFAULT '',
  `rel` varchar(100) NOT NULL DEFAULT '',
  `edition` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `software_key_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(100) NOT NULL DEFAULT '',
  `device` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sound_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `summaries`
--

DROP TABLE IF EXISTS `summaries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `summaries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `table` varchar(100) NOT NULL DEFAULT '',
  `column` varchar(100) NOT NULL DEFAULT '',
  `extra_columns` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `summaries`
--

LOCK TABLES `summaries` WRITE;
/*!40000 ALTER TABLE `summaries` DISABLE KEYS */;
INSERT INTO summaries VALUES (NULL, 'Device Classes', 1, 'system', 'class', '', 'system', NOW());
INSERT INTO summaries VALUES (NULL, 'Device Status', 1, 'system', 'status', '', 'system', NOW());
INSERT INTO summaries VALUES (NULL, 'Device Types', 1, 'system', 'type', '', 'system', NOW());
INSERT INTO summaries VALUES (NULL, 'DNS Domains', 1, 'system', 'dns_domain', '', 'system', NOW());
INSERT INTO summaries VALUES (NULL, 'Form Factors', 1, 'system', 'form_factor', 'system.form_factor,system.class', 'system', NOW());
INSERT INTO summaries VALUES (NULL, 'Manufacturers', 1, 'system', 'manufacturer', 'system.model', 'system', NOW());
INSERT INTO summaries VALUES (NULL, 'Operating Systems', 1, 'system', 'os_family', '', 'system', NOW());
INSERT INTO summaries VALUES (NULL, 'Server Types', 1, 'server', 'type', 'server.name,server.full_name,server.version,server.status', 'system', NOW());
INSERT INTO summaries VALUES (NULL, 'Services', 1, 'service', 'name', 'service.name,service.state', 'system', NOW());
INSERT INTO summaries VALUES (NULL, 'Software', 1, 'software', 'name', 'software.name,software.version', 'system', NOW());
INSERT INTO summaries VALUES (NULL, 'Software Keys', 1, 'software_key', 'name', 'software_key.name,software_key.string,software_key.rel,software_key.edition', 'system', NOW());
INSERT INTO summaries VALUES (NULL, 'Active Directory OU\'s', 1, 'windows', 'active_directory_ou', 'windows.active_directory_ou,windows.client_site_name', 'system', NOW());
/*!40000 ALTER TABLE `summaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system`
--

DROP TABLE IF EXISTS `system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `hostname` varchar(100) NOT NULL DEFAULT '',
  `dns_hostname` varchar(100) NOT NULL DEFAULT '',
  `domain` varchar(100) NOT NULL DEFAULT '',
  `dns_domain` varchar(100) NOT NULL DEFAULT '',
  `dbus_identifier` varchar(255) NOT NULL DEFAULT '',
  `fqdn` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT '',
  `comments` text NOT NULL,
  `icon` varchar(50) NOT NULL DEFAULT '',
  `os_group` varchar(50) NOT NULL DEFAULT '',
  `os_family` varchar(50) NOT NULL DEFAULT '',
  `os_name` varchar(100) NOT NULL DEFAULT '',
  `os_version` varchar(50) NOT NULL DEFAULT '',
  `attached_system_id` int(10) DEFAULT NULL,
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(200) NOT NULL DEFAULT '',
  `uptime` varchar(50) NOT NULL DEFAULT '',
  `form_factor` varchar(50) NOT NULL DEFAULT '',
  `os_bit` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `memory_count` int(10) unsigned NOT NULL DEFAULT '0',
  `processor_count` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `os_installation_date` date NOT NULL DEFAULT '2000-01-01',
  `printer_port_name` varchar(50) NOT NULL DEFAULT '',
  `printer_shared` varchar(50) NOT NULL DEFAULT '',
  `printer_shared_name` varchar(50) NOT NULL DEFAULT '',
  `printer_color` enum('y','n','') NOT NULL DEFAULT '',
  `printer_duplex` enum('y','n','') NOT NULL DEFAULT '',
  `status` enum('production','deleted','lost','maintenance','retired','unallocated') NOT NULL DEFAULT 'production',
  `environment` enum('production','dev','dr','eval','pre-prod','test','train','uat') NOT NULL DEFAULT 'production',
  `class` enum('desktop','laptop','tablet','workstation','server','virtual server','virtual desktop','hypervisor','') NOT NULL DEFAULT '',
  `function` varchar(100) NOT NULL DEFAULT '',
  `owner` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `location_id` int(10) unsigned NOT NULL DEFAULT '1',
  `location_level` varchar(100) NOT NULL DEFAULT '',
  `location_suite` varchar(100) NOT NULL DEFAULT '',
  `location_room` varchar(100) NOT NULL DEFAULT '',
  `location_rack` varchar(100) NOT NULL DEFAULT '',
  `location_rack_position` varchar(100) NOT NULL DEFAULT '',
  `location_rack_size` int(10) unsigned NOT NULL DEFAULT '0',
  `location_latitude` float(10,6) NOT NULL,
  `location_longitude` float(10,6) NOT NULL,
  `asset_number` varchar(50) NOT NULL DEFAULT '',
  `vm_server_name` varchar(150) NOT NULL DEFAULT '',
  `vm_system_id` int(10) unsigned DEFAULT NULL,
  `vm_group` varchar(150) NOT NULL DEFAULT '',
  `cluster_name` varchar(150) NOT NULL DEFAULT '',
  `cluster_type` varchar(150) NOT NULL DEFAULT '',
  `invoice_id` int(10) unsigned DEFAULT NULL,
  `purchase_invoice` varchar(50) NOT NULL DEFAULT '',
  `purchase_order_number` varchar(50) NOT NULL DEFAULT '',
  `purchase_cost_center` varchar(50) NOT NULL DEFAULT '',
  `purchase_vendor` varchar(100) NOT NULL DEFAULT '',
  `purchase_date` date NOT NULL DEFAULT '2000-01-01',
  `purchase_service_contract_number` varchar(255) NOT NULL DEFAULT '',
  `lease_expiry_date` date NOT NULL DEFAULT '2000-01-01',
  `purchase_amount` varchar(50) NOT NULL DEFAULT '',
  `warranty_duration` int(5) unsigned NOT NULL DEFAULT '0',
  `warranty_expires` date NOT NULL DEFAULT '2000-01-01',
  `warranty_type` enum('','24x7x365','9x5x5','Next Business Day') NOT NULL DEFAULT '',
  `switch_system_id` int(10) DEFAULT NULL,
  `switch_port` int(10) unsigned NOT NULL DEFAULT '0',
  `patch_panel` varchar(45) NOT NULL DEFAULT '',
  `patch_panel_port` int(10) unsigned NOT NULL DEFAULT '0',
  `wall_port` varchar(100) NOT NULL DEFAULT '',
  `contact_name` varchar(50) NOT NULL DEFAULT '',
  `service_number` varchar(100) NOT NULL DEFAULT '',
  `service_provider` varchar(100) NOT NULL DEFAULT '',
  `service_type` varchar(100) NOT NULL DEFAULT '',
  `service_plan` varchar(100) NOT NULL DEFAULT '',
  `service_network` varchar(100) NOT NULL DEFAULT '',
  `unlock_pin` varchar(100) NOT NULL DEFAULT '',
  `serial_imei` varchar(100) NOT NULL DEFAULT '',
  `serial_sim` varchar(100) NOT NULL DEFAULT '',
  `nmis_group` varchar(50) NOT NULL DEFAULT '',
  `nmis_name` varchar(50) NOT NULL DEFAULT '',
  `nmis_role` varchar(50) NOT NULL DEFAULT '',
  `nmis_export` enum('y','n') NOT NULL DEFAULT 'n',
  `oae_manage` enum('y','n') NOT NULL DEFAULT 'y',
  `snmp_oid` text NOT NULL,
  `sysDescr` text NOT NULL,
  `sysObjectID` varchar(255) NOT NULL DEFAULT '',
  `sysUpTime` varchar(255) NOT NULL DEFAULT '',
  `sysContact` varchar(255) NOT NULL DEFAULT '',
  `sysName` varchar(255) NOT NULL DEFAULT '',
  `sysLocation` varchar(255) NOT NULL DEFAULT '',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen_by` varchar(150) NOT NULL DEFAULT '',
  `last_user` varchar(150) NOT NULL DEFAULT '',
  `omk_uuid` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`),
  KEY `name` (`name`)
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
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `task_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `user_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `sid` varchar(100) NOT NULL DEFAULT '',
  `members` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `user_group_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `variable`
--

DROP TABLE IF EXISTS `variable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `variable` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `program` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `variable_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(100) NOT NULL DEFAULT '',
  `device` varchar(100) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `caption` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `video_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `vm`
--

DROP TABLE IF EXISTS `vm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vm` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `vm_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `warranty`
--

DROP TABLE IF EXISTS `warranty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `warranty` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `provider` varchar(200) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `start` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `end` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `warranty_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
-- Table structure for table `windows`
--

DROP TABLE IF EXISTS `windows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `windows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  CONSTRAINT `windows_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `windows`
--

LOCK TABLES `windows` WRITE;
/*!40000 ALTER TABLE `windows` DISABLE KEYS */;
/*!40000 ALTER TABLE `windows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'openaudit'
--
/*!50003 DROP FUNCTION IF EXISTS `cidr_to_mask` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50020 DEFINER=`openaudit`@`localhost`*/ /*!50003 FUNCTION `cidr_to_mask`(cidr INT(2)) RETURNS char(15) CHARSET latin1
    DETERMINISTIC
RETURN INET_NTOA(CONV(CONCAT(REPEAT(1,cidr),REPEAT(0,32-cidr)),2,10)) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-20 10:46:10
