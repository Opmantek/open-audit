-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.5.43-0+deb7u1-log

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
-- Table structure for table `oa_asset_line`
--

DROP TABLE IF EXISTS `oa_asset_line`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_asset_line` (
  `line_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned DEFAULT NULL,
  `org_id` int(10) unsigned DEFAULT NULL,
  `select_id` int(10) unsigned DEFAULT NULL,
  `line_amount` int(10) unsigned DEFAULT NULL,
  `line_cost_each` int(10) unsigned DEFAULT NULL,
  `line_tax_each` int(10) unsigned DEFAULT NULL,
  `line_asset_number` varchar(50) NOT NULL,
  `line_gl` varchar(50) NOT NULL,
  `line_type` enum('','sw','hw') NOT NULL DEFAULT '',
  `line_sw_license_expires_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `line_sw_license_key` varchar(50) NOT NULL,
  `line_sw_license_number` varchar(50) NOT NULL,
  `line_sw_license_agreement` varchar(50) NOT NULL,
  `line_sw_license_type` enum('','license','license and maintenance','upgrade','upgrade and maintenance','maintenance') NOT NULL DEFAULT '',
  `line_vendor_producit_id` varchar(50) NOT NULL,
  `line_vendor_part_id` varchar(50) NOT NULL,
  `line_maintenance_included` varchar(50) NOT NULL,
  `line_maintenance_date_expires` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `allocate_type` enum('','group','location','org','person','item','other') NOT NULL DEFAULT '',
  `allocate_text` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`line_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_asset_line`
--

LOCK TABLES `oa_asset_line` WRITE;
/*!40000 ALTER TABLE `oa_asset_line` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_asset_line` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_asset_order`
--

DROP TABLE IF EXISTS `oa_asset_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_asset_order` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `order_po` varchar(50) NOT NULL,
  `order_vn` varchar(50) NOT NULL,
  `order_in` varchar(50) NOT NULL,
  `order_vendor` varchar(50) NOT NULL,
  `order_auth_officer` varchar(100) NOT NULL,
  `order_cost_code` varchar(50) NOT NULL,
  `order_notes` text NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_asset_order`
--

LOCK TABLES `oa_asset_order` WRITE;
/*!40000 ALTER TABLE `oa_asset_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_asset_order` ENABLE KEYS */;
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
-- Table structure for table `oa_change_log`
--

DROP TABLE IF EXISTS `oa_change_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_change_log` (
  `change_log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `change_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `change_log_attachment` varchar(200) NOT NULL DEFAULT '',
  `change_log_comments` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`change_log_id`),
  KEY `change_id` (`change_id`),
  KEY `oa_change_log_user_id` (`user_id`),
  CONSTRAINT `oa_change_log_change_id` FOREIGN KEY (`change_id`) REFERENCES `oa_change` (`change_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_change_log_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_change_log`
--

LOCK TABLES `oa_change_log` WRITE;
/*!40000 ALTER TABLE `oa_change_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_change_log` ENABLE KEYS */;
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
INSERT INTO `oa_config` VALUES ('discovery_name_match','y','y','0000-00-00 00:00:00',0,'Should we match a device based only on its hostname during discovery.');
INSERT INTO `oa_config` VALUES ('discovery_ip_match','n','y','0000-00-00 00:00:00',0,'Should we match a device based only on its ip during discovery.');
INSERT INTO `oa_config` VALUES ('discovery_use_ipmi','y','y','0000-00-00 00:00:00',0,'Should we use ipmitool for discovering management ports if ipmitool is installed.');
INSERT INTO `oa_config` VALUES ('discovery_update_groups','y','y','0000-00-00 00:00:00',0,'Should Open-AudIT update the device groups after discovering a device.');
INSERT INTO `oa_config` VALUES ('display_version','1.8.2','n','0000-00-00 00:00:00',0,'The version shown on the web pages.');
INSERT INTO `oa_config` VALUES ('distinct_groups','y','y','0000-00-00 00:00:00',0,'Display Groups on the homepage, separated into the type of each Group.');
INSERT INTO `oa_config` VALUES ('download_reports','download','y','0000-00-00 00:00:00',0,'Tells Open-AudIT to advise the browser to download as a file or display the csv, xml, json reports. Valid values are download and display.');
INSERT INTO `oa_config` VALUES ('internal_version','20150620','n','0000-00-00 00:00:00',0,'The internal numerical version.');
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
-- Table structure for table `oa_contact`
--

DROP TABLE IF EXISTS `oa_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_contact` (
  `contact_id` int(10) NOT NULL AUTO_INCREMENT,
  `location_id` int(10) unsigned NOT NULL DEFAULT '0',
  `org_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `phone_number` varchar(20) NOT NULL DEFAULT '',
  `mobile_number` varchar(20) NOT NULL DEFAULT '',
  `fax_number` varchar(20) NOT NULL DEFAULT '',
  `picture` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_contact`
--

LOCK TABLES `oa_contact` WRITE;
/*!40000 ALTER TABLE `oa_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_device`
--

DROP TABLE IF EXISTS `oa_device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_device` (
  `dev_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dev_name` varchar(100) NOT NULL DEFAULT '',
  `dev_group_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`dev_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_device`
--

LOCK TABLES `oa_device` WRITE;
/*!40000 ALTER TABLE `oa_device` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_device_col`
--

DROP TABLE IF EXISTS `oa_device_col`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_device_col` (
  `col_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dev_id` int(10) unsigned DEFAULT NULL,
  `col_table` varchar(100) NOT NULL DEFAULT '',
  `col_column` varchar(100) NOT NULL DEFAULT '',
  `col_type` varchar(100) NOT NULL DEFAULT '',
  `col_order` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`col_id`),
  KEY `dev_id` (`dev_id`),
  CONSTRAINT `oa_dev_col_dev_id` FOREIGN KEY (`dev_id`) REFERENCES `oa_device` (`dev_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_device_col`
--

LOCK TABLES `oa_device_col` WRITE;
/*!40000 ALTER TABLE `oa_device_col` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_device_col` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_graph`
--

DROP TABLE IF EXISTS `oa_graph`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_graph` (
  `graph_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `type` enum('disk','partition','directory','file','database') NOT NULL DEFAULT 'partition',
  `foreign_id` int(10) unsigned DEFAULT NULL,
  `foreign_description` varchar(100) NOT NULL DEFAULT '',
  `path_to` varchar(200) NOT NULL DEFAULT '',
  `used` int(10) unsigned NOT NULL DEFAULT '0',
  `free` int(10) unsigned NOT NULL DEFAULT '0',
  `total` int(10) unsigned NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`graph_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `oa_graph_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_graph`
--

LOCK TABLES `oa_graph` WRITE;
/*!40000 ALTER TABLE `oa_graph` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_graph` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_group`
--

LOCK TABLES `oa_group` WRITE;
/*!40000 ALTER TABLE `oa_group` DISABLE KEYS */;
INSERT INTO `oa_group` VALUES (1,'All Devices','','SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\'',1,'Any items that have their status attribute set to \'production\'.','device','','devices');
INSERT INTO `oa_group` VALUES (2,'All Printers','','SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\' and (man_type = \'printer\' or man_type = \'network printer\')',1,'Any items that have their status attribute set to \'production\' and have their type attribute set to \'printer\'.','device','SELECT system.system_id, system.hostname, system.man_description, system.man_manufacturer, system.man_model, system.man_serial, system.man_ip_address, system.man_type, system.man_icon FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = ? group by system_id','printer');
INSERT INTO `oa_group` VALUES (3,'Routers','','SELECT distinct(system.system_id) FROM system WHERE system.man_type = \'router\' AND system.man_status = \'production\'',1,'Any items that have their status attribute set to \'production\' and have their type attribute set to \'router\'.','device','SELECT system.system_id, system.hostname, system.man_description, system.man_ip_address, system.man_type, system.man_os_family, system.man_os_name, system.man_icon, system.man_manufacturer, system.man_model FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','router');
INSERT INTO `oa_group` VALUES (4,'Switches','','SELECT distinct(system.system_id) FROM system WHERE system.man_type = \'switch\' AND system.man_status = \'production\'',1,'Any items that have their status attribute set to \'production\' and have their type attribute set to \'switch\'.','device','SELECT system.system_id, system.hostname, system.man_description, system.man_ip_address, system.man_type, system.man_os_family, system.man_os_name, system.man_icon, system.man_manufacturer, system.man_model FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','switch');
INSERT INTO `oa_group` VALUES (5,'Windows Computers','','SELECT distinct(system.system_id) FROM system WHERE system.man_os_group = \'Windows\' AND system.man_status = \'production\'',1,'Any items that have their status attribute set to \'production\' and have their os_name attribute containing \'windows\'.','os','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_manufacturer, system.man_model, system.man_serial, sys_sw_windows.windows_user_name, oa_location.location_name FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp) LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) WHERE oa_group_sys.group_id = ?','windows');
INSERT INTO `oa_group` VALUES (6,'GNU/Linux Systems','','SELECT distinct(system.system_id) FROM system WHERE system.man_os_group LIKE LOWER(\'linux\') AND system.man_status = \'production\'',1,'Any items that have their status attribute set to \'production\' and have their os_group attribute set to \'linux\'.','os','SELECT system.system_id, system.hostname, system.man_description, system.man_ip_address, system.man_type, system.man_os_family, system.man_os_name, system.man_icon, system.man_manufacturer, system.man_model FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','linux');
INSERT INTO `oa_group` VALUES (7,'Virtual Hosts','','SELECT distinct(system.system_id) FROM system WHERE system.system_id = system.system_id AND LOWER(man_class) = \'hypervisor\' AND system.man_status = \'production\' AND system.timestamp = system.timestamp',1,'Any items that have their status attribute set to \'production\' and have their class attribute set to \'hypervisor\'.','device','SELECT system.system_id, system.hostname, system.man_description, system.man_ip_address, system.man_type, system.man_os_family, system.man_os_name, system.man_icon FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','vmware');
INSERT INTO `oa_group` VALUES (8,'Computers','','SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\' and system.man_type = \'computer\'',1,'Any items that have their status attribute set to \'production\' and have their type attribute set to \'computer\'.','device','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_manufacturer, system.man_model, system.man_description, system.man_os_name FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','computer');
INSERT INTO `oa_group` VALUES (9,'Items in Default Location','','SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = \'0\' AND system.man_status = \'production\'',1,'Items in Default Location','location','','location');
INSERT INTO `oa_group` VALUES (10,'Non Production Devices','','SELECT distinct(system.system_id) FROM system WHERE system.man_status != \'production\'',1,'Any items that have their status attribute not set to \'production\'.','device','SELECT system.man_icon, system.man_os_family, system.man_type, system.hostname, system.system_id, system.man_ip_address, system.man_manufacturer, system.man_model, system.man_serial, system.man_description, system.man_owner FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.system_id','devices');
INSERT INTO `oa_group` VALUES (11,'Virtual Guests','','SELECT distinct(system.system_id) FROM system WHERE (system.man_manufacturer LIKE \'VMware\\%\' or system.man_manufacturer LIKE \'Parallels\\%\') AND system.man_status = \'production\' and man_os_name NOT LIKE \'\\%ESX\\%\'',1,'Any items that have their status attribute set to \'production\' and their manufacturer attribute contains \'VMware\', \'Parallels\' or \'KVM\' and their OS Name does not contain ESX.','device','SELECT system.man_icon, system.system_id, system.hostname, system.man_ip_address, system.man_function, system.man_environment, system.man_description, system.man_os_name, system.man_manufacturer, system.man_vm_group, man_os_family, oa_location.location_name FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN oa_location ON system.man_location_id = oa_location.location_id WHERE oa_group_sys.group_id = ? GROUP BY system.system_id','vmware');
INSERT INTO `oa_group` VALUES (12,'Default Organisation owned items','','SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = \'0\' AND system.man_status = \'production\'',1,'Items in Default Organisation','location','','location');
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
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_group_column`
--

LOCK TABLES `oa_group_column` WRITE;
/*!40000 ALTER TABLE `oa_group_column` DISABLE KEYS */;
INSERT INTO `oa_group_column` VALUES (1,1,1,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (2,1,2,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (3,1,3,'Domain','domain','text','','','','left');
INSERT INTO `oa_group_column` VALUES (4,1,4,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (5,1,5,'Type','man_type','text','','','','left');
INSERT INTO `oa_group_column` VALUES (6,1,6,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (7,1,7,'OS / Device','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (8,1,8,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (9,2,1,'Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (10,2,2,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (11,2,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (12,2,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (13,2,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (14,2,6,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_group_column` VALUES (15,2,7,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (16,3,1,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (17,3,2,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (18,3,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (19,3,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (20,3,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (21,3,6,'OS Name','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (22,3,7,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (23,3,8,'','man_os_family','','','','','left');
INSERT INTO `oa_group_column` VALUES (24,3,9,'','system_id','','','','','left');
INSERT INTO `oa_group_column` VALUES (25,4,1,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (26,4,2,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (27,4,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (28,4,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (29,4,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (30,4,6,'OS / Device','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (31,4,7,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (32,5,1,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (33,5,2,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (34,5,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (35,5,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (36,5,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (37,5,6,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_group_column` VALUES (38,5,7,'User','windows_user_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (39,5,8,'Location','location_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (40,5,9,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (41,6,1,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (42,6,2,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (43,6,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (44,6,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (45,6,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (46,6,6,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (47,6,7,'OS / Device','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (48,6,8,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (49,7,1,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (50,7,2,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (51,7,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (52,7,4,'Function','man_function','text','','','','center');
INSERT INTO `oa_group_column` VALUES (53,7,5,'Environment','man_environment','text','','','','center');
INSERT INTO `oa_group_column` VALUES (54,7,6,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (55,7,7,'OS','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (56,7,8,'VM Group','man_vm_group','text','','','','left');
INSERT INTO `oa_group_column` VALUES (57,7,9,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (58,7,10,'Location','location_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (59,7,11,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (60,8,1,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (61,8,2,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (62,8,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (63,8,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (64,8,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (65,8,6,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (66,8,7,'OS Name','man_os_name','text','','','','left');
INSERT INTO `oa_group_column` VALUES (67,8,8,'Tags','tag','text','','','','left');
INSERT INTO `oa_group_column` VALUES (68,10,1,'Icon','man_icon','image','','man_os_family','','left');
INSERT INTO `oa_group_column` VALUES (69,10,2,'Type','man_type','text','','','','left');
INSERT INTO `oa_group_column` VALUES (70,10,3,'Hostname','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_group_column` VALUES (71,10,4,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_group_column` VALUES (72,10,5,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_group_column` VALUES (73,10,6,'Model','man_model','text','','','','left');
INSERT INTO `oa_group_column` VALUES (74,10,7,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_group_column` VALUES (75,10,8,'Description','man_description','text','','','','left');
INSERT INTO `oa_group_column` VALUES (76,10,9,'Assigned','man_owner','text','','','','left');
INSERT INTO `oa_group_column` VALUES (77,10,10,'Tags','tag','text','','','','left');
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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_group_user`
--

LOCK TABLES `oa_group_user` WRITE;
/*!40000 ALTER TABLE `oa_group_user` DISABLE KEYS */;
INSERT INTO `oa_group_user` VALUES (2,1,1,10);
INSERT INTO `oa_group_user` VALUES (3,1,2,10);
INSERT INTO `oa_group_user` VALUES (4,1,8,10);
INSERT INTO `oa_group_user` VALUES (5,1,6,10);
INSERT INTO `oa_group_user` VALUES (6,1,3,10);
INSERT INTO `oa_group_user` VALUES (7,1,4,10);
INSERT INTO `oa_group_user` VALUES (8,1,7,10);
INSERT INTO `oa_group_user` VALUES (9,1,5,10);
INSERT INTO `oa_group_user` VALUES (10,3,1,10);
INSERT INTO `oa_group_user` VALUES (11,3,2,10);
INSERT INTO `oa_group_user` VALUES (12,3,8,10);
INSERT INTO `oa_group_user` VALUES (13,3,6,10);
INSERT INTO `oa_group_user` VALUES (14,3,3,10);
INSERT INTO `oa_group_user` VALUES (15,3,4,10);
INSERT INTO `oa_group_user` VALUES (16,3,7,10);
INSERT INTO `oa_group_user` VALUES (17,3,5,10);
INSERT INTO `oa_group_user` VALUES (18,1,9,10);
INSERT INTO `oa_group_user` VALUES (19,3,9,10);
INSERT INTO `oa_group_user` VALUES (20,1,10,10);
INSERT INTO `oa_group_user` VALUES (21,3,10,10);
INSERT INTO `oa_group_user` VALUES (23,2,1,3);
INSERT INTO `oa_group_user` VALUES (24,2,2,0);
INSERT INTO `oa_group_user` VALUES (25,2,8,0);
INSERT INTO `oa_group_user` VALUES (26,2,6,0);
INSERT INTO `oa_group_user` VALUES (27,2,9,0);
INSERT INTO `oa_group_user` VALUES (28,2,10,5);
INSERT INTO `oa_group_user` VALUES (29,2,3,0);
INSERT INTO `oa_group_user` VALUES (30,2,4,0);
INSERT INTO `oa_group_user` VALUES (31,2,7,0);
INSERT INTO `oa_group_user` VALUES (32,2,5,0);
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
-- Table structure for table `oa_location_org`
--

DROP TABLE IF EXISTS `oa_location_org`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_location_org` (
  `loc_org_id` int(10) NOT NULL AUTO_INCREMENT,
  `location_id` int(10) unsigned DEFAULT NULL,
  `location_name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`loc_org_id`),
  KEY `id2` (`location_id`),
  KEY `id3` (`org_id`),
  CONSTRAINT `oa_loc_org_loc_id` FOREIGN KEY (`location_id`) REFERENCES `oa_location` (`location_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_loc_org_org_id` FOREIGN KEY (`org_id`) REFERENCES `oa_org` (`org_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_location_org`
--

LOCK TABLES `oa_location_org` WRITE;
/*!40000 ALTER TABLE `oa_location_org` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_location_org` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_report`
--

LOCK TABLES `oa_report` WRITE;
/*!40000 ALTER TABLE `oa_report` DISABLE KEYS */;
INSERT INTO `oa_report` VALUES (1,'Device Details','','y','SELECT system.man_icon, system.man_type, system.system_id, system.hostname, date(system.first_timestamp) as first_seen, date(system.last_seen) as last_seen, system.last_seen_by, system.man_model, system.man_manufacturer, system.man_serial, system.man_owner, oa_location.location_name, system.os_family, oa_org.org_name FROM system LEFT JOIN oa_location ON system.man_location_id = oa_location.location_id LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN oa_org ON system.man_org_id = oa_org.org_id WHERE oa_group_sys.group_id = @group GROUP BY system.system_id ORDER BY system.hostname','','v_report','','',0);
INSERT INTO `oa_report` VALUES (2,'Device Hardware','','y','SELECT system.system_id, system.hostname, system.man_ip_address, system.man_manufacturer, system.man_model, system.man_serial, man_icon, man_os_family FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE oa_group_sys.group_id = @group GROUP BY system.system_id ORDER BY system.system_id','','v_report','','',0);
INSERT INTO `oa_report` VALUES (3,'Installed - Software','','y','SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment FROM sys_sw_software, system, oa_group_sys WHERE sys_sw_software.timestamp = system.timestamp AND sys_sw_software.system_id = system.system_id AND system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = @group GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name','','v_report','','',0);
INSERT INTO `oa_report` VALUES (4,'Specific Software','','n','SELECT system.system_id, system.hostname, sys_sw_software.software_name, sys_sw_software.software_installed_by, sys_sw_software.software_installed_on, sys_sw_software.software_version, sys_sw_windows.windows_user_name, oa_org.org_name, sys_sw_software.first_timestamp FROM system LEFT JOIN oa_group_sys ON oa_group_sys.system_id = system.system_id LEFT JOIN sys_sw_windows ON system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp LEFT JOIN sys_sw_software ON system.system_id = sys_sw_software.system_id AND system.timestamp = sys_sw_software.timestamp LEFT JOIN oa_org ON system.man_org_id = oa_org.org_id INNER JOIN (SELECT sys_sw_software.software_name, sys_sw_software.software_version FROM sys_sw_software WHERE sys_sw_software.software_id = ?) software_version_temp ON sys_sw_software.software_name = software_version_temp.software_name AND sys_sw_software.software_version = software_version_temp.software_version WHERE oa_group_sys.group_id = @group','','v_report','','',0);
INSERT INTO `oa_report` VALUES (5,'Software Keys','','y','SELECT COUNT(key_text) as count, key_name, key_text, key_id FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN sys_sw_software_key ON (sys_sw_software_key.system_id = system.system_id and sys_sw_software_key.timestamp = system.timestamp) WHERE oa_group_sys.group_id = @group GROUP BY key_text ORDER BY key_name','','v_report','','',1);
INSERT INTO `oa_report` VALUES (6,'Specific Key Name','','n','SELECT system.system_id, system.hostname, sys_sw_software_key.key_name, sys_sw_software_key.key_text FROM system LEFT JOIN oa_group_sys ON (oa_group_sys.system_id = system.system_id) LEFT JOIN sys_sw_software_key ON (system.system_id = sys_sw_software_key.system_id AND system.timestamp = sys_sw_software_key.timestamp) WHERE oa_group_sys.group_id = @group AND sys_sw_software_key.key_name = (SELECT key_name FROM sys_sw_software_key WHERE key_id = ? LIMIT 1)','','v_report','','',0);
INSERT INTO `oa_report` VALUES (7,'Specific Key Text','','n','SELECT system.system_id, system.hostname, sys_sw_software_key.key_name, sys_sw_software_key.key_text FROM system LEFT JOIN oa_group_sys ON (oa_group_sys.system_id = system.system_id) LEFT JOIN sys_sw_software_key ON (system.system_id = sys_sw_software_key.system_id AND system.timestamp = sys_sw_software_key.timestamp) WHERE oa_group_sys.group_id = @group AND sys_sw_software_key.key_text = (SELECT key_text FROM sys_sw_software_key WHERE key_text = ? LIMIT 1)','','v_report','','',0);
INSERT INTO `oa_report` VALUES (8,'Alerts','','y','SELECT oa_alert_log.alert_id, oa_alert_log.system_id, oa_alert_log.timestamp, system.man_ip_address, system.hostname, system.man_description, oa_alert_log.alert_details FROM system, oa_alert_log, oa_group_sys WHERE oa_alert_log.user_id is NULL AND oa_alert_log.system_id = system.system_id AND oa_alert_log.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = @group GROUP BY oa_alert_log.alert_id ORDER BY oa_alert_log.timestamp DESC ','','v_report_alerts','','',0);
INSERT INTO `oa_report` VALUES (9,'Alerts - Software','','y','SELECT oa_alert_log.alert_id, oa_alert_log.system_id, oa_alert_log.timestamp, system.man_ip_address, system.hostname, system.man_description, oa_alert_log.alert_details FROM system, oa_alert_log, oa_group_sys WHERE oa_alert_log.user_id is NULL AND oa_alert_log.system_id = system.system_id AND oa_alert_log.timestamp > DATE_SUB(NOW(),INTERVAL 100 DAY) AND oa_alert_log.system_id = oa_group_sys.system_id AND oa_alert_log.alert_details LIKE \'software%\' AND oa_group_sys.group_id = @group GROUP BY oa_alert_log.alert_id ASC ','','v_report_alerts','','',0);
INSERT INTO `oa_report` VALUES (10,'Enterprise - Devices Discovered in the Last Days','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE system.first_timestamp > (NOW() - INTERVAL ? DAY) AND system.man_ip_address <> \'\' AND system.man_ip_address <> \'0.0.0.0\' AND system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (11,'Enterprise - Software Discovered in the Last Days','','n','SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, DATE(sys_sw_software.timestamp) AS first_attribute FROM sys_sw_software LEFT JOIN system ON sys_sw_software.system_id = system.system_id INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE sys_sw_software.first_timestamp != system.first_timestamp AND sys_sw_software.first_timestamp > (NOW() - INTERVAL ? DAY) GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (12,'Enterprise - Devices Not Seen by Date','','n','SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id  LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(?, INTERVAL 30 day) AND (system.man_ip_address <> \'\' AND system.man_ip_address <> \'000.000.000.000\' AND system.man_ip_address <> \'0.0.0.0\') GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (13,'Enterprise - Specific Software','','n','SELECT system.system_id, system.hostname, sys_sw_software.software_id, sys_sw_software.software_name, sys_sw_software.software_installed_by, date(sys_sw_software.software_installed_on) as software_installed_on, sys_sw_software.software_version, date(sys_sw_software.first_timestamp) as first_timestamp FROM system LEFT JOIN sys_sw_software ON (system.system_id = sys_sw_software.system_id and system.first_timestamp < sys_sw_software.first_timestamp) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE sys_sw_software.software_name = (SELECT software_name FROM sys_sw_software WHERE software_id = ? LIMIT 1) AND date(sys_sw_software.first_timestamp) = date(?) GROUP BY system.system_id','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (14,'Enterprise - Software Discovered by Date','','n','SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, date(sys_sw_software.first_timestamp) as first_attribute FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id AND sys_sw_software.first_timestamp != system.first_timestamp) LEFT JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE date(sys_sw_software.first_timestamp) = ? GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (15,'Enterprise - Devices Discovered by Date','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, man_status AS status, last_seen_by FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE oa_group_sys.group_id = @group AND date(system.first_timestamp) = ? AND system.man_ip_address <> \'\' AND system.man_ip_address <> \'0.0.0.0\' AND system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname LIMIT @limit','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (16,'Enterprise - Devices Not Seen in the Last Days','','n','SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(NOW(), INTERVAL ? day) AND (system.man_ip_address <> \'\' AND system.man_ip_address <> \'000.000.000.000\' AND system.man_ip_address <> \'0.0.0.0\') GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (17,'Enterprise - OS Group','','n','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_os_group = ?','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (18,'Enterprise - OS Types','','n','SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id)) * 100) AS y, IF(CHAR_LENGTH(man_os_group)=0,\'Other\', man_os_group) AS name, count(*) as count FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id GROUP BY name','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (19,'Enterprise - OS Family','','n','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_os_family = ?','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (20,'Enterprise - OS Name','','n','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_os_name = ?','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (21,'Enterprise - Device Types','','n','SELECT CEILING(COUNT(*) / (SELECT COUNT(system.system_id) FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id) * 100) AS y, man_type AS name, count(*) as count FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp2 ON system.system_id = grp2.system_id GROUP BY name','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (22,'Enterprise - Device Type','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_manufacturer, system.man_model, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_type = ?','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (23,'Enterprise - Software Discovered Range','','n','SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id AND sys_sw_software.first_timestamp != system.first_timestamp) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE date(sys_sw_software.first_timestamp) >= ? AND date(sys_sw_software.first_timestamp) <= ? GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (24,'Enterprise - Devices Discovered Range','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE date(system.first_timestamp) >= ? AND date(system.first_timestamp) <= ? AND system.man_ip_address <> \'\' AND system.man_ip_address <> \'0.0.0.0\' AND system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0);
INSERT INTO `oa_report` VALUES (25,'Disk Partition Use','','y','SELECT partition_id, system.system_id, system.hostname, sys_hw_partition.hard_drive_index AS disk, sys_hw_partition.partition_mount_point AS mount_point, partition_mount_type as type, sys_hw_partition.partition_size AS size, sys_hw_partition.partition_used_space AS used, sys_hw_partition.partition_free_space AS free, ROUND(((sys_hw_partition.partition_free_space / sys_hw_partition.partition_size) * 100), 0) AS percent_free FROM sys_hw_partition LEFT JOIN system ON (sys_hw_partition.system_id = system.system_id AND sys_hw_partition.timestamp = system.timestamp) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE partition_used_space > 0 AND partition_free_space > 0 AND oa_group_sys.group_id = @group AND partition_type != \'Volume\' AND partition_type != \'Network Drive\' AND partition_mount_point != \'[SWAP]\' ORDER BY sys_hw_partition.system_id, partition_id ','','v_report','','',0);
INSERT INTO `oa_report` VALUES (26,'Interfaces Used - Available','','y',' SELECT system.system_id, system.hostname, net_alias as ifAlias, net_index AS ifIndex, net_description as ifDescription, ifadminstatus as ifAdminStatus, net_ip_enabled as ifOperStatus, sysUpTime, iflastchange as ifLastChange, (sysuptime - iflastchange) AS diff, floor((sysuptime - iflastchange) /60/60/24/100) as diff_days, IF((ifadminstatus = \'down\') OR (ifadminstatus = \'up\' AND (net_ip_enabled != \'up\' AND net_ip_enabled != \'dormant\') AND (((sysuptime - iflastchange) > 60480000) OR (sysuptime < iflastchange))), \'available\', \'used\') AS available FROM sys_hw_network_card LEFT JOIN system ON (sys_hw_network_card.system_id = system.system_id AND sys_hw_network_card.timestamp = system.timestamp) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group AND ifadminstatus != \'\' ','','v_report','','',0);
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
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_report_column`
--

LOCK TABLES `oa_report_column` WRITE;
/*!40000 ALTER TABLE `oa_report_column` DISABLE KEYS */;
INSERT INTO `oa_report_column` VALUES (1,1,0,'Icon','man_icon','image','','man_type','','center');
INSERT INTO `oa_report_column` VALUES (2,1,1,'Type','man_type','text','','','','');
INSERT INTO `oa_report_column` VALUES (3,1,2,'System Name','hostname','link','/main/system_display/','system_id','','');
INSERT INTO `oa_report_column` VALUES (4,1,3,'First Seen','first_seen','timestamp','','','','');
INSERT INTO `oa_report_column` VALUES (5,1,4,'Last Seen','last_seen','timestamp','','','','');
INSERT INTO `oa_report_column` VALUES (6,1,5,'Last Seen By','last_seen_by','text','','','','');
INSERT INTO `oa_report_column` VALUES (7,1,6,'Manufacturer','man_manufacturer','text','','','','');
INSERT INTO `oa_report_column` VALUES (8,1,7,'Model','man_model','text','','','','');
INSERT INTO `oa_report_column` VALUES (9,1,8,'Serial','man_serial','text','','','','');
INSERT INTO `oa_report_column` VALUES (10,1,9,'Assigned To','man_owner','text','','','','');
INSERT INTO `oa_report_column` VALUES (11,1,10,'Organisation','org_name','text','','','','');
INSERT INTO `oa_report_column` VALUES (12,1,11,'Location','location_name','text','','','','');
INSERT INTO `oa_report_column` VALUES (13,1,12,'OS','os_family','text','','','','left');
INSERT INTO `oa_report_column` VALUES (14,1,13,'Tags','tag','text','','','','center');
INSERT INTO `oa_report_column` VALUES (15,2,1,'Icon','man_icon','image','','man_os_family','','center');
INSERT INTO `oa_report_column` VALUES (16,2,2,'System Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (17,2,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (18,2,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (19,2,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (20,2,6,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_report_column` VALUES (21,3,1,'Package Name','software_name','link','/report/specific_software/$group_id/','software_id','','left');
INSERT INTO `oa_report_column` VALUES (22,3,2,'Version','software_version','text','','','','right');
INSERT INTO `oa_report_column` VALUES (23,3,3,'Installs','software_count','text','','','','center');
INSERT INTO `oa_report_column` VALUES (24,3,4,'Publisher','software_publisher','text','','','','left');
INSERT INTO `oa_report_column` VALUES (25,3,5,'Type','software_comment','text','','','','left');
INSERT INTO `oa_report_column` VALUES (26,3,6,'Contact','software_url','url','','','','left');
INSERT INTO `oa_report_column` VALUES (27,3,7,'Google Search','','url','https://encrypted.google.com/search?q=','software_name','google','center');
INSERT INTO `oa_report_column` VALUES (28,4,0,'System Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (29,4,1,'User','windows_user_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (30,4,2,'Organisation','org_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (31,4,3,'Software Name','software_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (32,4,4,'Software Version','software_version','text','','','','left');
INSERT INTO `oa_report_column` VALUES (33,4,5,'Installed By','software_installed_by','text','','','','left');
INSERT INTO `oa_report_column` VALUES (34,4,6,'Detected On','first_timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (35,4,7,'Installed On','software_installed_on','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (36,4,8,'Tags','tag','text','','','','center');
INSERT INTO `oa_report_column` VALUES (37,5,0,'System Count','count','text','','','','center');
INSERT INTO `oa_report_column` VALUES (38,5,0,'Key Name','key_name','link','/report/specific_key_name/$group_id/','key_id','','left');
INSERT INTO `oa_report_column` VALUES (39,5,2,'Key Text','key_text','link','/report/specific_key_text/$group_id/','key_text','','left');
INSERT INTO `oa_report_column` VALUES (40,6,0,'System Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (41,6,2,'Key Name','key_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (42,6,3,'Key Text','key_text','text','','','','left');
INSERT INTO `oa_report_column` VALUES (43,6,7,'Tags','tag','text','','','','center');
INSERT INTO `oa_report_column` VALUES (44,7,0,'System Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (45,7,2,'Key Name','key_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (46,7,3,'Key Text','key_text','text','','','','left');
INSERT INTO `oa_report_column` VALUES (47,7,7,'Tags','tag','text','','','','center');
INSERT INTO `oa_report_column` VALUES (48,8,0,'Timestamp','timestamp','text','','','','left');
INSERT INTO `oa_report_column` VALUES (49,8,1,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (50,8,2,'System Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (51,8,3,'System Description','man_description','text','','','','left');
INSERT INTO `oa_report_column` VALUES (52,8,4,'Details','alert_details','text','','','','left');
INSERT INTO `oa_report_column` VALUES (53,8,5,'Tags','tag','text','','','','left');
INSERT INTO `oa_report_column` VALUES (54,9,0,'Timestamp','timestamp','text','','','','');
INSERT INTO `oa_report_column` VALUES (55,9,1,'IP Address','man_ip_address','ip_address','','','','');
INSERT INTO `oa_report_column` VALUES (56,9,2,'System Name','hostname','link','/main/system_display/','system_id','','');
INSERT INTO `oa_report_column` VALUES (57,9,3,'System Description','man_description','text','','','','');
INSERT INTO `oa_report_column` VALUES (58,9,4,'Details','alert_details','text','','','','');
INSERT INTO `oa_report_column` VALUES (59,9,5,'Tags','tag','text','','','','');
INSERT INTO `oa_report_column` VALUES (60,10,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (61,10,1,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (62,10,2,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (63,10,3,'OS','man_os_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (64,10,4,'First Audited','first_timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (65,10,5,'Last Audited','timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (66,10,6,'Status','status','text','','','','left');
INSERT INTO `oa_report_column` VALUES (67,11,0,'Package Name','software_name','link','/omk/oae/show_report/specific software/','software_id','first_attribute','left');
INSERT INTO `oa_report_column` VALUES (68,11,1,'Type','software_comment','text','','','','center');
INSERT INTO `oa_report_column` VALUES (69,11,2,'Installs','software_count','text','','','','center');
INSERT INTO `oa_report_column` VALUES (70,11,3,'Contact','software_url','url','','','','center');
INSERT INTO `oa_report_column` VALUES (71,11,4,'Version','software_version','text','','','','left');
INSERT INTO `oa_report_column` VALUES (72,11,5,'Publisher','software_publisher','text','','','','left');
INSERT INTO `oa_report_column` VALUES (73,11,6,'Google Search','','url','https://encrypted.google.com/search?q=','software_name','google','center');
INSERT INTO `oa_report_column` VALUES (74,12,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (75,12,1,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (76,12,2,'Location','location_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (77,12,3,'User','windows_user_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (78,12,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (79,12,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (80,12,6,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_report_column` VALUES (81,12,7,'First Audited','first_timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (82,12,8,'Last Audited','timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (83,13,0,'Software Name','software_name','link','/omk/oae/show_report/Specific Software/','software_id','','left');
INSERT INTO `oa_report_column` VALUES (84,13,1,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (85,13,2,'Software Version','software_version','text','','','','left');
INSERT INTO `oa_report_column` VALUES (86,13,3,'Detected On','first_timestamp','timestamp','','','','center');
INSERT INTO `oa_report_column` VALUES (87,13,4,'Installed By','software_installed_by','text','','','','left');
INSERT INTO `oa_report_column` VALUES (88,13,5,'Installed On','software_installed_on','timestamp','','','','center');
INSERT INTO `oa_report_column` VALUES (89,14,0,'Package Name','software_name','link','/omk/oae/show_report/Enterprise - Specific Software/','software_id','first_attribute','left');
INSERT INTO `oa_report_column` VALUES (90,14,1,'Type','software_comment','text','','','','center');
INSERT INTO `oa_report_column` VALUES (91,14,2,'Installs','software_count','text','','','','center');
INSERT INTO `oa_report_column` VALUES (92,14,3,'Contact','software_url','url','','','','center');
INSERT INTO `oa_report_column` VALUES (93,14,4,'Version','software_version','text','','','','left');
INSERT INTO `oa_report_column` VALUES (94,14,5,'Publisher','software_publisher','text','','','','left');
INSERT INTO `oa_report_column` VALUES (95,14,6,'Google Search','','url','https://encrypted.google.com/search?q=','software_name','google','center');
INSERT INTO `oa_report_column` VALUES (96,15,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (97,15,1,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (98,15,2,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (99,15,3,'OS','man_os_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (100,15,5,'Last Seen By','last_seen_by','text','','','','left');
INSERT INTO `oa_report_column` VALUES (101,15,6,'Status','status','text','','','','left');
INSERT INTO `oa_report_column` VALUES (102,16,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (103,16,1,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (104,16,2,'Location','location_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (105,16,3,'User','windows_user_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (106,16,4,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (107,16,5,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (108,16,6,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_report_column` VALUES (109,16,7,'First Audited','first_timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (110,16,8,'Last Audited','timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (111,17,0,'Icon','man_icon','image','','man_os_family','','center');
INSERT INTO `oa_report_column` VALUES (112,17,1,'OS Family','man_os_family','link','/omk/oae/show_report/Enterprise - OS Family/','man_os_family','','left');
INSERT INTO `oa_report_column` VALUES (113,17,2,'Hostname','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (114,17,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (115,17,4,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (116,17,5,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (117,17,6,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (118,17,7,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_report_column` VALUES (119,17,8,'Location','location_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (120,18,0,'Type','name','link','/omk/oae/show_report/Enterprise - OS Group/','name','','left');
INSERT INTO `oa_report_column` VALUES (121,18,1,'Count','count','text','','','','left');
INSERT INTO `oa_report_column` VALUES (122,18,2,'Percent','y','text','','','','left');
INSERT INTO `oa_report_column` VALUES (123,19,0,'Icon','man_icon','image','','man_os_family','','center');
INSERT INTO `oa_report_column` VALUES (124,19,1,'OS Name','man_os_name','link','/omk/oae/show_report/Enterprise - OS Name/','man_os_name','','left');
INSERT INTO `oa_report_column` VALUES (125,19,2,'Hostname','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (126,19,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (127,19,4,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (128,19,5,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (129,19,6,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (130,19,7,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_report_column` VALUES (131,19,8,'Location','location_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (132,20,0,'Icon','man_icon','image','','man_os_family','','center');
INSERT INTO `oa_report_column` VALUES (133,20,1,'OS Name','man_os_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (134,20,2,'Hostname','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (135,20,3,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (136,20,4,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (137,20,5,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (138,20,6,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (139,20,7,'Serial','man_serial','text','','','','left');
INSERT INTO `oa_report_column` VALUES (140,20,8,'Location','location_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (141,21,0,'Type','name','link','/omk/oae/show_report/Enterprise - Device Type/','name','','left');
INSERT INTO `oa_report_column` VALUES (142,21,1,'Count','count','text','','','','left');
INSERT INTO `oa_report_column` VALUES (143,21,2,'Percent','y','text','','','','left');
INSERT INTO `oa_report_column` VALUES (144,22,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (145,22,1,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (146,22,2,'Manufacturer','man_manufacturer','text','','','','left');
INSERT INTO `oa_report_column` VALUES (147,22,3,'Model','man_model','text','','','','left');
INSERT INTO `oa_report_column` VALUES (148,22,4,'OS','man_os_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (149,22,5,'First Audited','first_timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (150,22,6,'Last Audited','timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (151,22,7,'Status','status','text','','','','left');
INSERT INTO `oa_report_column` VALUES (152,23,0,'Package Name','software_name','link','/omk/oae/report/SpecificSoftwareRange/','software_id','first_attribute','left');
INSERT INTO `oa_report_column` VALUES (153,23,1,'Type','software_comment','text','','','','center');
INSERT INTO `oa_report_column` VALUES (154,23,2,'Installs','software_count','text','','','','center');
INSERT INTO `oa_report_column` VALUES (155,23,3,'Contact','software_url','url','','','','center');
INSERT INTO `oa_report_column` VALUES (156,23,4,'Version','software_version','text','','','','left');
INSERT INTO `oa_report_column` VALUES (157,23,5,'Publisher','software_publisher','text','','','','left');
INSERT INTO `oa_report_column` VALUES (158,23,6,'Google Search','','url','https://encrypted.google.com/search?q=','software_name','google','center');
INSERT INTO `oa_report_column` VALUES (159,24,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (160,24,1,'IP Address','man_ip_address','ip_address','','','','left');
INSERT INTO `oa_report_column` VALUES (161,24,2,'Type','man_type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (162,24,3,'OS','man_os_name','text','','','','left');
INSERT INTO `oa_report_column` VALUES (163,24,4,'First Audited','first_timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (164,24,5,'Last Audited','timestamp','timestamp','','','','left');
INSERT INTO `oa_report_column` VALUES (165,25,0,'System Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (166,25,1,'Disk','disk','text','','','','left');
INSERT INTO `oa_report_column` VALUES (167,25,2,'Type','type','text','','','','left');
INSERT INTO `oa_report_column` VALUES (168,25,3,'Mount Point','mount_point','text','','','','left');
INSERT INTO `oa_report_column` VALUES (169,25,4,'Size MB','size','text','','','','left');
INSERT INTO `oa_report_column` VALUES (170,25,5,'Used MB','used','text','','','','left');
INSERT INTO `oa_report_column` VALUES (171,25,6,'Free MB','free','text','','','','left');
INSERT INTO `oa_report_column` VALUES (172,25,7,'Free %','percent_free','text','','','','left');
INSERT INTO `oa_report_column` VALUES (173,26,0,'Name','hostname','link','/main/system_display/','system_id','','left');
INSERT INTO `oa_report_column` VALUES (174,26,1,'Index','ifIndex','text','','','','center');
INSERT INTO `oa_report_column` VALUES (175,26,2,'Description','ifDescription','text','','','','left');
INSERT INTO `oa_report_column` VALUES (176,26,3,'Alias','ifAlias','text','','','','left');
INSERT INTO `oa_report_column` VALUES (177,26,4,'Admin Status','ifAdminStatus','text','','','','left');
INSERT INTO `oa_report_column` VALUES (178,26,5,'Operational Status','ifOperStatus','text','','','','left');
INSERT INTO `oa_report_column` VALUES (179,26,6,'Days Since Changed','diff_days','text','','','','left');
INSERT INTO `oa_report_column` VALUES (180,26,7,'Availability','available','text','','','','left');
/*!40000 ALTER TABLE `oa_report_column` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_switch_ports`
--

DROP TABLE IF EXISTS `oa_switch_ports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_switch_ports` (
  `switch_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `switch_system_id` int(10) unsigned DEFAULT NULL,
  `switch_port` varchar(100) NOT NULL DEFAULT '',
  `timestamp` varchar(200) NOT NULL DEFAULT '',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`switch_id`),
  KEY `system_id` (`system_id`),
  KEY `switch_system_id` (`switch_system_id`),
  CONSTRAINT `oa_switch_ports_switch_switch_id` FOREIGN KEY (`switch_system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_switch_ports_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_switch_ports`
--

LOCK TABLES `oa_switch_ports` WRITE;
/*!40000 ALTER TABLE `oa_switch_ports` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_switch_ports` ENABLE KEYS */;
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
-- Table structure for table `sys_hw_bios`
--

DROP TABLE IF EXISTS `sys_hw_bios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_bios` (
  `bios_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `bios_description` varchar(200) NOT NULL DEFAULT '',
  `bios_manufacturer` varchar(200) NOT NULL DEFAULT '',
  `bios_serial` varchar(100) NOT NULL DEFAULT '',
  `bios_smversion` varchar(100) NOT NULL DEFAULT '',
  `bios_version` varchar(100) NOT NULL DEFAULT '',
  `bios_asset_tag` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`bios_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_bios_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_bios`
--

LOCK TABLES `sys_hw_bios` WRITE;
/*!40000 ALTER TABLE `sys_hw_bios` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_bios` ENABLE KEYS */;
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
-- Table structure for table `sys_hw_hard_drive`
--

DROP TABLE IF EXISTS `sys_hw_hard_drive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_hard_drive` (
  `hard_drive_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `hard_drive_caption` varchar(100) NOT NULL DEFAULT '',
  `hard_drive_index` varchar(100) NOT NULL DEFAULT '',
  `hard_drive_interface_type` varchar(10) NOT NULL DEFAULT '',
  `hard_drive_manufacturer` varchar(100) NOT NULL DEFAULT '',
  `hard_drive_model` varchar(100) NOT NULL DEFAULT '',
  `hard_drive_serial` varchar(100) NOT NULL DEFAULT '',
  `hard_drive_partitions` int(10) unsigned NOT NULL DEFAULT '0',
  `hard_drive_scsi_bus` varchar(10) NOT NULL DEFAULT '',
  `hard_drive_scsi_logical_unit` varchar(100) NOT NULL DEFAULT '',
  `hard_drive_scsi_port` varchar(10) NOT NULL DEFAULT '',
  `hard_drive_size` int(10) unsigned NOT NULL DEFAULT '0',
  `hard_drive_device_id` varchar(200) NOT NULL DEFAULT '',
  `hard_drive_status` varchar(100) NOT NULL DEFAULT '',
  `hard_drive_firmware` varchar(100) NOT NULL DEFAULT '',
  `hard_drive_model_family` varchar(200) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`hard_drive_id`),
  KEY `hard_drive_index` (`hard_drive_index`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_hard_drive_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_hard_drive`
--

LOCK TABLES `sys_hw_hard_drive` WRITE;
/*!40000 ALTER TABLE `sys_hw_hard_drive` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_hard_drive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_hw_memory`
--

DROP TABLE IF EXISTS `sys_hw_memory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_memory` (
  `memory_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `memory_bank` varchar(100) NOT NULL DEFAULT '',
  `memory_type` varchar(100) NOT NULL DEFAULT '',
  `memory_form_factor` varchar(100) NOT NULL DEFAULT '',
  `memory_detail` varchar(100) NOT NULL DEFAULT '',
  `memory_capacity` int(10) NOT NULL,
  `memory_speed` int(10) NOT NULL,
  `memory_tag` varchar(100) NOT NULL DEFAULT '',
  `memory_serial` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`memory_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_memory_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_memory`
--

LOCK TABLES `sys_hw_memory` WRITE;
/*!40000 ALTER TABLE `sys_hw_memory` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_memory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_hw_module`
--

DROP TABLE IF EXISTS `sys_hw_module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_module` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `description` varchar(200) NOT NULL DEFAULT '',
  `module_index` varchar(100) NOT NULL DEFAULT '',
  `object_id` varchar(100) NOT NULL DEFAULT '',
  `contained_in` varchar(100) NOT NULL DEFAULT '',
  `class` varchar(10) NOT NULL DEFAULT '',
  `class_text` varchar(20) NOT NULL,
  `hardware_revision` varchar(100) NOT NULL,
  `firmware_revision` varchar(100) NOT NULL DEFAULT '',
  `software_revision` varchar(100) NOT NULL DEFAULT '',
  `serial_number` varchar(100) NOT NULL DEFAULT '',
  `asset_id` varchar(100) NOT NULL DEFAULT '',
  `is_fru` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_module_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_module`
--

LOCK TABLES `sys_hw_module` WRITE;
/*!40000 ALTER TABLE `sys_hw_module` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_hw_monitor`
--

DROP TABLE IF EXISTS `sys_hw_monitor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_monitor` (
  `monitor_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `device_id` varchar(100) NOT NULL DEFAULT '',
  `manufacture_date` varchar(20) NOT NULL DEFAULT '',
  `model` varchar(100) NOT NULL DEFAULT '',
  `serial` varchar(50) NOT NULL DEFAULT '',
  `size` varchar(5) NOT NULL DEFAULT '',
  `aspect_ratio` varchar(5) NOT NULL DEFAULT '',
  `man_serial` varchar(50) NOT NULL DEFAULT '',
  `edid_version` varchar(50) NOT NULL DEFAULT '',
  `man_description` varchar(100) NOT NULL DEFAULT '',
  `man_value` varchar(50) NOT NULL DEFAULT '',
  `man_purchase_order_number` varchar(50) NOT NULL DEFAULT '',
  `man_date_purchased` date NOT NULL DEFAULT '0000-00-00',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`monitor_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_monitor_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_monitor`
--

LOCK TABLES `sys_hw_monitor` WRITE;
/*!40000 ALTER TABLE `sys_hw_monitor` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_monitor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_hw_motherboard`
--

DROP TABLE IF EXISTS `sys_hw_motherboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_motherboard` (
  `motherboard_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `manufacturer` varchar(50) NOT NULL DEFAULT '',
  `model` varchar(50) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `memory_slots` int(10) unsigned NOT NULL DEFAULT '0',
  `processor_slots` int(10) unsigned NOT NULL DEFAULT '0',
  `processor_type` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`motherboard_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_motherboard_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_motherboard`
--

LOCK TABLES `sys_hw_motherboard` WRITE;
/*!40000 ALTER TABLE `sys_hw_motherboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_motherboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_hw_network_card`
--

DROP TABLE IF EXISTS `sys_hw_network_card`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_network_card` (
  `net_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `net_mac_address` varchar(200) NOT NULL DEFAULT '',
  `net_manufacturer` varchar(100) NOT NULL DEFAULT '',
  `net_model` varchar(255) NOT NULL DEFAULT '',
  `net_description` varchar(255) NOT NULL DEFAULT '',
  `net_alias` varchar(255) NOT NULL DEFAULT '',
  `net_ip_enabled` varchar(10) NOT NULL DEFAULT '',
  `net_index` varchar(10) NOT NULL DEFAULT '',
  `net_dhcp_enabled` varchar(100) NOT NULL DEFAULT '',
  `net_dhcp_server` varchar(30) NOT NULL DEFAULT '',
  `net_dhcp_lease_obtained` varchar(14) NOT NULL DEFAULT '',
  `net_dhcp_lease_expires` varchar(14) NOT NULL DEFAULT '',
  `net_dns_host_name` varchar(100) NOT NULL DEFAULT '',
  `net_dns_server` varchar(100) NOT NULL DEFAULT '',
  `net_dns_domain` varchar(100) NOT NULL DEFAULT '',
  `net_dns_domain_suffix` varchar(100) NOT NULL DEFAULT '',
  `net_dns_domain_reg_enabled` varchar(10) NOT NULL DEFAULT '',
  `net_wins_primary` varchar(30) NOT NULL DEFAULT '',
  `net_wins_secondary` varchar(30) NOT NULL DEFAULT '',
  `net_wins_lmhosts_enabled` varchar(10) NOT NULL DEFAULT '',
  `net_adapter_type` varchar(100) NOT NULL DEFAULT '',
  `net_connection_id` varchar(255) NOT NULL DEFAULT '',
  `net_connection_status` varchar(30) NOT NULL DEFAULT '',
  `net_speed` varchar(10) NOT NULL DEFAULT '',
  `net_slaves` varchar(100) NOT NULL DEFAULT '',
  `ifadminstatus` varchar(100) NOT NULL DEFAULT '',
  `iflastchange` bigint(20) NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`net_id`),
  KEY `net_mac_address` (`net_mac_address`),
  KEY `system_id` (`system_id`),
  KEY `net_index` (`net_index`),
  KEY `timestamp` (`timestamp`),
  CONSTRAINT `sys_hw_network_card_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_network_card`
--

LOCK TABLES `sys_hw_network_card` WRITE;
/*!40000 ALTER TABLE `sys_hw_network_card` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_network_card` ENABLE KEYS */;
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
-- Table structure for table `sys_hw_optical_drive`
--

DROP TABLE IF EXISTS `sys_hw_optical_drive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_optical_drive` (
  `optical_drive_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `optical_drive_caption` varchar(100) NOT NULL DEFAULT '',
  `optical_drive_model` varchar(100) NOT NULL DEFAULT '',
  `optical_drive_device_id` varchar(100) NOT NULL DEFAULT '',
  `optical_drive_mount_point` varchar(10) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`optical_drive_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_optical_drive_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_optical_drive`
--

LOCK TABLES `sys_hw_optical_drive` WRITE;
/*!40000 ALTER TABLE `sys_hw_optical_drive` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_optical_drive` ENABLE KEYS */;
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
-- Table structure for table `sys_hw_processor`
--

DROP TABLE IF EXISTS `sys_hw_processor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_processor` (
  `processor_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `processor_count` int(2) unsigned NOT NULL DEFAULT '0',
  `processor_cores` int(2) unsigned NOT NULL DEFAULT '0',
  `processor_logical` int(2) unsigned NOT NULL DEFAULT '0',
  `processor_description` varchar(100) NOT NULL DEFAULT '',
  `processor_speed` int(10) unsigned NOT NULL DEFAULT '0',
  `processor_manufacturer` varchar(100) NOT NULL DEFAULT '',
  `processor_architecture` varchar(100) NOT NULL DEFAULT '',
  `processor_power_management_supported` varchar(20) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`processor_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_processor_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_processor`
--

LOCK TABLES `sys_hw_processor` WRITE;
/*!40000 ALTER TABLE `sys_hw_processor` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_processor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_hw_scsi_controller`
--

DROP TABLE IF EXISTS `sys_hw_scsi_controller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_scsi_controller` (
  `scsi_controller_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `scsi_controller_name` varchar(200) NOT NULL DEFAULT '',
  `scsi_controller_manufacturer` varchar(100) NOT NULL DEFAULT '',
  `scsi_controller_device_id` varchar(200) NOT NULL DEFAULT '',
  `scsi_controller_type` enum('raid','hba','other') NOT NULL DEFAULT 'other',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`scsi_controller_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_scsi_controller_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_scsi_controller`
--

LOCK TABLES `sys_hw_scsi_controller` WRITE;
/*!40000 ALTER TABLE `sys_hw_scsi_controller` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_scsi_controller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_hw_sound`
--

DROP TABLE IF EXISTS `sys_hw_sound`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_sound` (
  `sound_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `sound_manufacturer` varchar(100) NOT NULL DEFAULT '',
  `sound_device_id` varchar(100) NOT NULL DEFAULT '',
  `sound_name` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`sound_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_sound_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_sound`
--

LOCK TABLES `sys_hw_sound` WRITE;
/*!40000 ALTER TABLE `sys_hw_sound` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_sound` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_hw_video`
--

DROP TABLE IF EXISTS `sys_hw_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_hw_video` (
  `video_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `video_description` varchar(100) NOT NULL DEFAULT '',
  `video_manufacturer` varchar(100) NOT NULL DEFAULT '',
  `video_current_horizontal_res` varchar(20) NOT NULL DEFAULT '',
  `video_current_vertical_res` varchar(20) NOT NULL DEFAULT '',
  `video_memory` varchar(100) NOT NULL DEFAULT '',
  `video_caption` varchar(100) NOT NULL DEFAULT '',
  `video_current_number_colours` varchar(20) NOT NULL DEFAULT '',
  `video_current_refresh_rate` varchar(20) NOT NULL DEFAULT '',
  `video_device_id` varchar(100) NOT NULL DEFAULT '',
  `video_driver_date` varchar(20) NOT NULL DEFAULT '',
  `video_driver_version` varchar(20) NOT NULL DEFAULT '',
  `video_max_refresh_rate` varchar(20) NOT NULL DEFAULT '',
  `video_min_refresh_rate` varchar(20) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`video_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_video_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_hw_video`
--

LOCK TABLES `sys_hw_video` WRITE;
/*!40000 ALTER TABLE `sys_hw_video` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_hw_video` ENABLE KEYS */;
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
-- Table structure for table `sys_sw_antivirus`
--

DROP TABLE IF EXISTS `sys_sw_antivirus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_antivirus` (
  `virus_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `virus_manufacturer` varchar(150) NOT NULL DEFAULT '',
  `virus_version` varchar(45) NOT NULL DEFAULT '',
  `virus_name` varchar(100) NOT NULL DEFAULT '',
  `virus_uptodate` varchar(45) NOT NULL DEFAULT '',
  `virus_def_date` date NOT NULL DEFAULT '0000-00-00',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`virus_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_antivirus_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_antivirus`
--

LOCK TABLES `sys_sw_antivirus` WRITE;
/*!40000 ALTER TABLE `sys_sw_antivirus` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_antivirus` ENABLE KEYS */;
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
-- Table structure for table `sys_sw_log`
--

DROP TABLE IF EXISTS `sys_sw_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `log_name` varchar(50) NOT NULL DEFAULT '',
  `log_file_name` varchar(250) NOT NULL DEFAULT '',
  `log_file_size` int(10) NOT NULL DEFAULT '0',
  `log_max_file_size` int(10) NOT NULL DEFAULT '0',
  `log_overwrite` varchar(30) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`log_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_log`
--

LOCK TABLES `sys_sw_log` WRITE;
/*!40000 ALTER TABLE `sys_sw_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_netstat`
--

DROP TABLE IF EXISTS `sys_sw_netstat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_netstat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `protocol` enum('tcp','udp','tcp6','udp6','tcp4','udp4','') NOT NULL DEFAULT '',
  `ip_address` varchar(45) NOT NULL DEFAULT '',
  `port` int(5) NOT NULL DEFAULT '0',
  `program` varchar(250) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_netstat_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_netstat`
--

LOCK TABLES `sys_sw_netstat` WRITE;
/*!40000 ALTER TABLE `sys_sw_netstat` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_netstat` ENABLE KEYS */;
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
-- Table structure for table `sys_sw_service`
--

DROP TABLE IF EXISTS `sys_sw_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_service` (
  `service_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `service_display_name` varchar(100) NOT NULL DEFAULT '',
  `service_name` varchar(100) NOT NULL DEFAULT '',
  `service_path_name` text NOT NULL,
  `service_started` varchar(10) NOT NULL DEFAULT '',
  `service_start_name` varchar(100) NOT NULL DEFAULT '',
  `service_start_mode` varchar(10) NOT NULL DEFAULT '',
  `service_state` varchar(20) NOT NULL DEFAULT '',
  `service_count` varchar(5) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`service_id`),
  KEY `system_id` (`system_id`),
  KEY `timestamp` (`timestamp`),
  KEY `first_timestamp` (`first_timestamp`),
  KEY `service_name` (`service_name`),
  KEY `service_display_name` (`service_display_name`),
  CONSTRAINT `sys_sw_service_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_service`
--

LOCK TABLES `sys_sw_service` WRITE;
/*!40000 ALTER TABLE `sys_sw_service` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_share`
--

DROP TABLE IF EXISTS `sys_sw_share`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_share` (
  `share_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `share_caption` varchar(250) NOT NULL DEFAULT '',
  `share_name` varchar(250) NOT NULL DEFAULT '',
  `share_path` varchar(250) NOT NULL DEFAULT '',
  `share_size` varchar(10) NOT NULL DEFAULT '',
  `share_users` varchar(200) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`share_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_share_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_share`
--

LOCK TABLES `sys_sw_share` WRITE;
/*!40000 ALTER TABLE `sys_sw_share` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_share` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_share_perms`
--

DROP TABLE IF EXISTS `sys_sw_share_perms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_share_perms` (
  `perm_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `share_id` int(10) unsigned DEFAULT NULL,
  `perm_prefix` varchar(100) NOT NULL DEFAULT '',
  `perm_name` varchar(100) NOT NULL DEFAULT '',
  `perm_type` enum('local_user','local_group','domain_user','domain_group','remote_user','remote_group') NOT NULL DEFAULT 'local_user',
  `perm_access` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`perm_id`),
  KEY `system_id` (`system_id`),
  KEY `sys_sw_share_perm_share_id` (`share_id`),
  CONSTRAINT `sys_sw_share_perm_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_sw_share_perm_share_id` FOREIGN KEY (`share_id`) REFERENCES `sys_sw_share` (`share_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_share_perms`
--

LOCK TABLES `sys_sw_share_perms` WRITE;
/*!40000 ALTER TABLE `sys_sw_share_perms` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_share_perms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_software`
--

DROP TABLE IF EXISTS `sys_sw_software`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_software` (
  `software_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `software_name` varchar(255) NOT NULL DEFAULT '',
  `software_version` varchar(255) NOT NULL DEFAULT '',
  `software_description` text NOT NULL,
  `software_location` varchar(255) NOT NULL DEFAULT '',
  `software_uninstall` mediumtext NOT NULL,
  `software_install_date` varchar(100) NOT NULL DEFAULT '',
  `software_installed_by` varchar(100) NOT NULL DEFAULT '',
  `software_installed_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `software_publisher` varchar(255) NOT NULL DEFAULT '',
  `software_install_source` varchar(200) NOT NULL DEFAULT '',
  `software_system_component` varchar(2) NOT NULL DEFAULT '',
  `software_url` varchar(255) NOT NULL DEFAULT '',
  `software_email` varchar(255) NOT NULL DEFAULT '',
  `software_comment` varchar(200) NOT NULL DEFAULT '',
  `software_man_comment` varchar(200) NOT NULL DEFAULT '',
  `software_count` varchar(5) NOT NULL DEFAULT '',
  `software_code_base` varchar(255) NOT NULL DEFAULT '',
  `software_status` varchar(45) NOT NULL DEFAULT '',
  `software_key` varchar(45) NOT NULL DEFAULT '',
  `software_key_release` varchar(45) NOT NULL DEFAULT '',
  `software_key_edition` varchar(45) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`software_id`),
  KEY `system_id` (`system_id`),
  KEY `timestamp` (`timestamp`),
  KEY `first_timestamp` (`first_timestamp`),
  KEY `software_name` (`software_name`),
  CONSTRAINT `sys_sw_software_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_software`
--

LOCK TABLES `sys_sw_software` WRITE;
/*!40000 ALTER TABLE `sys_sw_software` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_software` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_software_key`
--

DROP TABLE IF EXISTS `sys_sw_software_key`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_software_key` (
  `key_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `key_name` varchar(250) NOT NULL DEFAULT '',
  `key_text` varchar(100) NOT NULL DEFAULT '',
  `key_release` varchar(100) NOT NULL DEFAULT '',
  `key_edition` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`key_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_software_key_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_software_key`
--

LOCK TABLES `sys_sw_software_key` WRITE;
/*!40000 ALTER TABLE `sys_sw_software_key` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_software_key` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sw_user`
--

DROP TABLE IF EXISTS `sys_sw_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `user_name` varchar(100) NOT NULL DEFAULT '',
  `user_caption` varchar(255) NOT NULL DEFAULT '',
  `user_sid` varchar(100) NOT NULL DEFAULT '',
  `user_domain` varchar(100) NOT NULL DEFAULT '',
  `user_disabled` varchar(20) NOT NULL DEFAULT '',
  `user_full_name` varchar(100) NOT NULL DEFAULT '',
  `user_password_changeable` varchar(20) NOT NULL DEFAULT '',
  `user_password_expires` varchar(20) NOT NULL DEFAULT '',
  `user_password_required` varchar(20) NOT NULL DEFAULT '',
  `user_status` varchar(100) NOT NULL DEFAULT '',
  `user_type` enum('local','domain','database','application') NOT NULL DEFAULT 'local',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_user_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_user`
--

LOCK TABLES `sys_sw_user` WRITE;
/*!40000 ALTER TABLE `sys_sw_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_user` ENABLE KEYS */;
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
-- Table structure for table `sys_sw_windows`
--

DROP TABLE IF EXISTS `sys_sw_windows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sw_windows` (
  `windows_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `windows_build_number` varchar(20) NOT NULL DEFAULT '',
  `windows_user_name` varchar(100) NOT NULL DEFAULT '',
  `windows_client_site_name` varchar(100) NOT NULL DEFAULT '',
  `windows_domain_short` varchar(100) NOT NULL DEFAULT '',
  `windows_domain_controller_address` varchar(100) NOT NULL DEFAULT '',
  `windows_domain_controller_name` varchar(100) NOT NULL DEFAULT '',
  `windows_domain_role` varchar(40) NOT NULL DEFAULT '',
  `windows_part_of_domain` varchar(10) NOT NULL DEFAULT '',
  `windows_id_number` varchar(100) NOT NULL DEFAULT '',
  `windows_time_caption` varchar(100) NOT NULL DEFAULT '',
  `windows_time_daylight` varchar(100) NOT NULL DEFAULT '',
  `windows_boot_device` varchar(100) NOT NULL DEFAULT '',
  `windows_country_code` varchar(50) NOT NULL DEFAULT '',
  `windows_organisation` varchar(80) NOT NULL DEFAULT '',
  `windows_language` varchar(50) NOT NULL DEFAULT '',
  `windows_registered_user` varchar(50) NOT NULL DEFAULT '',
  `windows_service_pack` varchar(20) NOT NULL DEFAULT '',
  `windows_version` varchar(20) NOT NULL DEFAULT '',
  `windows_install_directory` varchar(20) NOT NULL DEFAULT '',
  `windows_active_directory_ou` varchar(200) NOT NULL DEFAULT '',
  `windows_workgroup` varchar(255) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`windows_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_windows_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sw_windows`
--

LOCK TABLES `sys_sw_windows` WRITE;
/*!40000 ALTER TABLE `sys_sw_windows` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sw_windows` ENABLE KEYS */;
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-09 14:13:03
