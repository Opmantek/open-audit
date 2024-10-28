-- MariaDB dump 10.19  Distrib 10.10.2-MariaDB, for osx10.18 (arm64)
--
-- Host: localhost    Database: openaudit
-- ------------------------------------------------------
-- Server version	10.10.2-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `access_point`
--

DROP TABLE IF EXISTS `access_point`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `access_point` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(200) NOT NULL DEFAULT '',
  `mac` varchar(200) NOT NULL DEFAULT '',
  `ethernet_mac` varchar(200) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `netmask` varchar(30) NOT NULL DEFAULT '',
  `gateway` varchar(100) NOT NULL DEFAULT '',
  `location` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `software_version` varchar(100) NOT NULL DEFAULT '',
  `ios_version` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(200) NOT NULL DEFAULT '',
  `port_number` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `access_point_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access_point`
--

LOCK TABLES `access_point` WRITE;
/*!40000 ALTER TABLE `access_point` DISABLE KEYS */;
/*!40000 ALTER TABLE `access_point` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agents`
--

DROP TABLE IF EXISTS `agents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT 'Default Agent',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT '100',
  `test_minutes` int(10) unsigned DEFAULT 1300,
  `test_subnet` varchar(45) NOT NULL DEFAULT '',
  `test_os` varchar(45) NOT NULL DEFAULT '',
  `tests` text NOT NULL DEFAULT '[]',
  `action_download` varchar(2000) NOT NULL DEFAULT '',
  `action_command` varchar(2000) NOT NULL DEFAULT '',
  `action_devices_assigned_to_org` int(10) unsigned DEFAULT NULL,
  `action_devices_assigned_to_location` int(10) unsigned DEFAULT NULL,
  `action_audit` enum('y','n') NOT NULL DEFAULT 'y',
  `action_uninstall` enum('y','n') NOT NULL DEFAULT 'n',
  `actions` text NOT NULL DEFAULT '[]',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agents`
--

LOCK TABLES `agents` WRITE;
/*!40000 ALTER TABLE `agents` DISABLE KEYS */;
INSERT INTO `agents` VALUES (NULL, 'Default Agent', 1, 'Audit every day.', 100, 1300, '', '', '[]', '', '', null, null, 'y', 'n', '[]', 'system', '2000-01-01 00:00:00');
/*!40000 ALTER TABLE `agents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `antivirus`
--

DROP TABLE IF EXISTS `antivirus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antivirus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `owner` varchar(255) NOT NULL DEFAULT '',
  `executable` varchar(255) NOT NULL DEFAULT '',
  `reportable` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `first_seen` (`first_seen`),
  KEY `last_seen` (`last_seen`),
  KEY `name` (`name`),
  CONSTRAINT `antivirus_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antivirus`
--

LOCK TABLES `antivirus` WRITE;
/*!40000 ALTER TABLE `antivirus` DISABLE KEYS */;
/*!40000 ALTER TABLE `antivirus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `application` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `application_id` int(10) unsigned NOT NULL DEFAULT '0',
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `application_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application`
--

LOCK TABLES `application` WRITE;
/*!40000 ALTER TABLE `application` DISABLE KEYS */;
/*!40000 ALTER TABLE `application` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachment`
--

DROP TABLE IF EXISTS `attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `filename` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `attachment_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachment`
--

LOCK TABLES `attachment` WRITE;
/*!40000 ALTER TABLE `attachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attributes`
--

DROP TABLE IF EXISTS `attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attributes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `resource` varchar(200) NOT NULL DEFAULT '',
  `type` varchar(200) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL DEFAULT '',
  `value` varchar(200) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attributes`
--

LOCK TABLES `attributes` WRITE;
/*!40000 ALTER TABLE `attributes` DISABLE KEYS */;
INSERT INTO `attributes` VALUES (NULL,1,'devices','class','','','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','class','Desktop','desktop','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','class','Hypervisor','hypervisor','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','class','Laptop','laptop','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','class','Server','server','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','class','Tablet','tablet','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','class','Virtual Desktop','virtual desktop','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','class','Virtual Server','virtual server','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','class','Workstation','workstation','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','environment','Development','dev','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','environment','Disaster Recovery','dr','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','environment','Evaluation','eval','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','environment','Pre-Production','pre-prod','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','environment','Production','production','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','environment','Testing','test','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','environment','Training','train','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','environment','User Acceptance Testing','uat','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','status','Deleted','deleted','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','status','Lost','lost','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','status','Maintenance','maintenance','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','status','Production','production','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','status','Retired','retired','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','status','Unallocated','unallocated','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Access Control','access control','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Access Point','access point','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Access Server','access server','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Access Token','access token','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','ADSL Modem','adsl modem','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Alarm','alarm','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Android','android','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Application Accelerator','application accelerator','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Bar Code Reader','bar code reader','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','BDSL Modem','bdsl modem','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Bridge','bridge','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Broadband Router','broadband router','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Building Management','building management','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Cable Modem','cable modem','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Cell Phone','cell phone','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Chassis','chassis','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Cisco Module','cisco module','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Computer','computer','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','DSL Modem','dsl modem','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','DSLAM','dslam','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Environment Monitor','environment monitor','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Firewall','firewall','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Game Console','game console','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Gateway','gateway','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','General Purpose','general purpose','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Hub','hub','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','IoT Sensor','iot sensor','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','IP Phone','ip phone','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','iPad','ipad','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','iPhone','iphone','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','iPod','ipod','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Keyboard, Video, Mouse switch','kvm','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Load Balancer','load balancer','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Media Device','media device','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Mobile Modem','mobile modem','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Monitor','monitor','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','NAS (Network Attached Storage)','nas','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Network Device','network device','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Network IDS (Intrusion Detection)','network ids','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Network Printer','network printer','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Network Scanner','network scanner','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','OT Sensor','ot sensor','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Patch Panel','patch panel','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','PBX','pbx','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','PDA','pda','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Phone','phone','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Point of Sale','point of sale','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Power Device','power device','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Power Distribution Unit','pdu','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Print Server','print server','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Printer','printer','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Projector','projector','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Proxy Server','proxy server','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Proxy','proxy','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Remote Access Controller (ILO / RSA)','remote access controller','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Remote Management','remote management','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Router','router','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','SAN (Storage Area Network)','san','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Satellite Phone','satellite phone','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Satellite Receiver','satellite receiver','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Scanner','scanner','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','SDN Controller','sdn controller','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Security Camera','security camera','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Security Misc','security misc','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Sensor','sensor','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Serial to Ethernet Adapter','serial to ethernet','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Shelf','shelf','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Smart Phone','smart phone','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Specialized','specialized','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Storage Misc','storage misc','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Switch','switch','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Tablet','tablet','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Tape Library','tape library','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Telecom Misc','telecom misc','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Terminal Server','terminal server','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Terminal','terminal','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Time Clock','time clock','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Unclassified','unclassified','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Unknown','unknown','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','UPS (Uninterruptible Power Supply)','ups','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Video Conference','video conference','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Video Wall','video wall','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','VoIP Adapter','voip adapter','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','VoIP Gateway','voip gateway','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','VoIP Phone','voip phone','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','VPN Terminator','vpn terminator','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','WAN Accelerator','wan accelerator','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','WAC (Wireless Access Controller)','wac','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','WAP (Wireless Access Point)','wap','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','WDM (Wavelength Division Multiplexer)','wdm','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Web Cache','web cache','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Web Camera','webcam','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Wireless Link','wireless link','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Wireless Router','wireless router','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Airforce','Airforce','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Airport','Airport','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Ambulance Station','Ambulance Station','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Army','Army','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Campus','Campus','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Cloud Region','Cloud Region','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Cloud Zone','Cloud Zone','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Cloud','Cloud','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Conference Center','Conference Center','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Court House','Court House','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Data Center','Data Center','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Depot','Depot','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','District','District','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Doctors Office','Doctors Office','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Embassy','Embassy','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Factory','Factory','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Fire Station','Fire Station','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Guard','Guard','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Head Office','Head Office','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','High School','High School','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Hospital','Hospital','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Hotel','Hotel','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','House','House','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Library','Library','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Light House','Light House','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Marina','Marina','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Mobile Phone Tower','Mobile Phone Tower','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Motel','Motel','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Navy','Navy','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Newsagent','Newsagent','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Nursing Home','Nursing Home','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Observatory','Observatory','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Office','Office','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Oil Rig','Oil Rig','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Police','Police','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Power Plant','Power Plant','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Power Substation','Power Substation','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Prison','Prison','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Radio Station','Radio Station','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Regional','Regional','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Resort','Resort','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Retail','Retail','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','School','School','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Security','Security','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Stadium','Stadium','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Train Station','Train Station','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Travel Agency','Travel Agency','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','TV Station','TV Station','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','University','University','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Warehouse','Warehouse','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Workshop','Workshop','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Agency','agency','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Association','association','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Authority','authority','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Board','board','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Body','body','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Bureau','bureau','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Business','business','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Centre','centre','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Charity','charity','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Commission','commission','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Committee','committee','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Corporation','corporation','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Council','council','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Court','court','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Department','department','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Directorate','directorate','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Division','division','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Foundation','foundation','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Government Owned Corporation','government owned corporation','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Government','government','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Group','group','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Institute','institute','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Office','office','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Ombudsman','ombudsman','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Organisation','organisation','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Project','project','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Regulator','regulator','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Scheme','scheme','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Section','section','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Service','service','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Tribunal','tribunal','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'orgs','type','Trust','trust','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','','','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Change','Change','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Device','Device','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Discovery','Discovery','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Hardware','Hardware','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Network','Network','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Other','Other','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Server','Server','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','Software','Software','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'queries','menu_category','User','User','system','2000-01-01 00:00:00');
/*!40000 ALTER TABLE `attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit_log`
--

DROP TABLE IF EXISTS `audit_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `username` varchar(45) NOT NULL DEFAULT '',
  `type` varchar(45) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `debug` text NOT NULL,
  `wmi_fails` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `version` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `audit_log_system_id_type` (`device_id`,`type`),
  KEY `audit_log_system_id_timestamp` (`device_id`,`timestamp`),
  CONSTRAINT `audit_log_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit_log`
--

LOCK TABLES `audit_log` WRITE;
/*!40000 ALTER TABLE `audit_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth`
--

DROP TABLE IF EXISTS `auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `use_authentication` enum('y','n') NOT NULL DEFAULT 'y',
  `use_authorisation` enum('y','n') NOT NULL DEFAULT 'n',
  `lang` varchar(200) NOT NULL DEFAULT 'en',
  `secure` enum('y','n') NOT NULL DEFAULT 'n',
  `host` varchar(200) NOT NULL DEFAULT '',
  `port` varchar(200) NOT NULL DEFAULT '389',
  `domain` varchar(200) NOT NULL DEFAULT '',
  `type` enum('active directory','entra','openldap','github','okta') NOT NULL DEFAULT 'active directory',
  `version` int(1) unsigned NOT NULL DEFAULT '3',
  `ldap_base_dn` varchar(200) NOT NULL DEFAULT '',
  `ldap_dn_account` varchar(200) NOT NULL DEFAULT '',
  `ldap_dn_password` varchar(250) NOT NULL DEFAULT '',
  `openldap_user_dn` varchar(200) NOT NULL DEFAULT '',
  `openldap_user_membership_attribute` varchar(200) NOT NULL DEFAULT 'memberUid',
  `client_ident` varchar(2000) NOT NULL DEFAULT '',
  `client_secret` varchar(2000) NOT NULL DEFAULT '',
  `redirect_uri` varchar(200) NOT NULL DEFAULT '',
  `issuer` varchar(2000) NOT NULL DEFAULT '',
  `tenant` varchar(2000) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth`
--

LOCK TABLES `auth` WRITE;
/*!40000 ALTER TABLE `auth` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `baselines`
--

DROP TABLE IF EXISTS `baselines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `baselines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `notes` text NOT NULL,
  `documentation` text NOT NULL,
  `priority` int(10) unsigned NOT NULL DEFAULT '5',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  CONSTRAINT `baselines_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baselines`
--

LOCK TABLES `baselines` WRITE;
/*!40000 ALTER TABLE `baselines` DISABLE KEYS */;
/*!40000 ALTER TABLE `baselines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `baselines_policies`
--

DROP TABLE IF EXISTS `baselines_policies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `baselines_policies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `baseline_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(200) NOT NULL DEFAULT '',
  `priority` int(10) unsigned NOT NULL DEFAULT '5',
  `notes` text NOT NULL,
  `documentation` text NOT NULL,
  `table` varchar(45) NOT NULL DEFAULT '',
  `tests` mediumtext NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `baseline_id` (`baseline_id`),
  CONSTRAINT `baselines_policies_baseline_id` FOREIGN KEY (`baseline_id`) REFERENCES `baselines` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baselines_policies`
--

LOCK TABLES `baselines_policies` WRITE;
/*!40000 ALTER TABLE `baselines_policies` DISABLE KEYS */;
/*!40000 ALTER TABLE `baselines_policies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `baselines_results`
--

DROP TABLE IF EXISTS `baselines_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `baselines_results` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `baseline_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(200) NOT NULL DEFAULT '',
  `baseline` longtext NOT NULL,
  `result` longtext NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `baseline_id` (`baseline_id`),
  CONSTRAINT `baselines_results_baseline_id` FOREIGN KEY (`baseline_id`) REFERENCES `baselines` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baselines_results`
--

LOCK TABLES `baselines_results` WRITE;
/*!40000 ALTER TABLE `baselines_results` DISABLE KEYS */;
/*!40000 ALTER TABLE `baselines_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `benchmarks`
--

DROP TABLE IF EXISTS `benchmarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `benchmarks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `os` varchar(200) NOT NULL DEFAULT '',
  `type` varchar(200) NOT NULL DEFAULT '',
  `install` enum('y','n') NOT NULL DEFAULT 'y',
  `devices` text NOT NULL,
  `last_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  CONSTRAINT `benchmarks_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `benchmarks`
--

LOCK TABLES `benchmarks` WRITE;
/*!40000 ALTER TABLE `benchmarks` DISABLE KEYS */;
/*!40000 ALTER TABLE `benchmarks` ENABLE KEYS */;
UNLOCK TABLES;

-- Table structure for table `benchmarks_exceptions`
--

DROP TABLE IF EXISTS `benchmarks_exceptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `benchmarks_exceptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `external_ident` varchar(200) NOT NULL DEFAULT '',
  `benchmarks` text NOT NULL,
  `devices` text NOT NULL,
  `exemption_reason` varchar(2000) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `benchmarks_exceptions`
--

LOCK TABLES `benchmarks_exceptions` WRITE;
/*!40000 ALTER TABLE `benchmarks_exceptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `benchmarks_exceptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `benchmarks_log`
--

DROP TABLE IF EXISTS `benchmarks_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `benchmarks_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `benchmark_id` int(10) unsigned DEFAULT NULL,
  `device_id` int(10) unsigned DEFAULT NULL,
  `timestamp` datetime DEFAULT current_timestamp(),
  `severity` enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
  `message` text NOT NULL,
  `command_output` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `benchmark_id` (`benchmark_id`),
  CONSTRAINT `benchmarks_log_benchmark_id` FOREIGN KEY (`benchmark_id`) REFERENCES `benchmarks` (`id`) ON DELETE CASCADE,
  CONSTRAINT `benchmarks_log_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `benchmarks_log`
--

LOCK TABLES `benchmarks_log` WRITE;
/*!40000 ALTER TABLE `benchmarks_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `benchmarks_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `benchmarks_policies`
--

DROP TABLE IF EXISTS `benchmarks_policies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `benchmarks_policies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `external_ident` varchar(200) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL DEFAULT '',
  `severity` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `rationale` text NOT NULL,
  `remediation` text NOT NULL,
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `created_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `created_by` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `external_ident` (`external_ident`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `benchmarks_policies`
--

LOCK TABLES `benchmarks_policies` WRITE;
/*!40000 ALTER TABLE `benchmarks_policies` DISABLE KEYS */;
/*!40000 ALTER TABLE `benchmarks_policies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `benchmarks_result`
--

DROP TABLE IF EXISTS `benchmarks_result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `benchmarks_result` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `benchmark_id` int(10) unsigned DEFAULT NULL,
  `external_ident` varchar(200) NOT NULL DEFAULT '',
  `result` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `benchmarks_result_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `benchmarks_result`
--

LOCK TABLES `benchmarks_result` WRITE;
/*!40000 ALTER TABLE `benchmarks_result` DISABLE KEYS */;
/*!40000 ALTER TABLE `benchmarks_result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bios`
--

DROP TABLE IF EXISTS `bios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(200) NOT NULL DEFAULT '',
  `smversion` varchar(100) NOT NULL DEFAULT '',
  `version` varchar(100) NOT NULL DEFAULT '',
  `revision` varchar(100) NOT NULL DEFAULT '',
  `date` varchar(100) NOT NULL DEFAULT '',
  `asset_tag` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `bios_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bios`
--

LOCK TABLES `bios` WRITE;
/*!40000 ALTER TABLE `bios` DISABLE KEYS */;
/*!40000 ALTER TABLE `bios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificate`
--

DROP TABLE IF EXISTS `certificate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `issuer` text NOT NULL,
  `valid_from_raw` varchar(100) NOT NULL DEFAULT '',
  `valid_from` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `valid_to_raw` varchar(100) NOT NULL DEFAULT '',
  `valid_to` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `encryption` varchar(100) NOT NULL DEFAULT '',
  `algorithm` varchar(100) NOT NULL DEFAULT '',
  `version` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `certificate_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificate`
--

LOCK TABLES `certificate` WRITE;
/*!40000 ALTER TABLE `certificate` DISABLE KEYS */;
/*!40000 ALTER TABLE `certificate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `change_log`
--

DROP TABLE IF EXISTS `change_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `change_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `db_table` varchar(50) NOT NULL DEFAULT '',
  `db_row` int(10) unsigned NOT NULL DEFAULT '0',
  `db_action` enum('','create','update','delete') NOT NULL DEFAULT '',
  `details` text NOT NULL,
  `ack_by` varchar(200) NOT NULL DEFAULT '',
  `ack_time` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `external_link` varchar(200) NOT NULL DEFAULT '',
  `external_ident` varchar(200) NOT NULL DEFAULT '',
  `notes` text NOT NULL,
  `change_id` int(10) unsigned DEFAULT NULL,
  `change_type` enum('','standard','normal','emergency','unauthorised') NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `change_log_db_table` (`db_table`),
  KEY `change_log_db_action` (`db_action`),
  KEY `change_log_timestamp` (`timestamp`),
  CONSTRAINT `change_log_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart`
--

LOCK TABLES `chart` WRITE;
/*!40000 ALTER TABLE `chart` DISABLE KEYS */;
/*!40000 ALTER TABLE `chart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cloud_log`
--

DROP TABLE IF EXISTS `cloud_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cloud_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cloud_id` int(10) unsigned DEFAULT NULL,
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `severity_text` enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `cloud_id` (`cloud_id`),
  CONSTRAINT `cloud_log_cloud_id` FOREIGN KEY (`cloud_id`) REFERENCES `clouds` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloud_log`
--

LOCK TABLES `cloud_log` WRITE;
/*!40000 ALTER TABLE `cloud_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `cloud_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clouds`
--

DROP TABLE IF EXISTS `clouds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clouds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `type` enum('amazon','microsoft','google','digitalocean','') NOT NULL DEFAULT '',
  `credentials` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'created',
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clouds`
--

LOCK TABLES `clouds` WRITE;
/*!40000 ALTER TABLE `clouds` DISABLE KEYS */;
/*!40000 ALTER TABLE `clouds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cluster`
--

DROP TABLE IF EXISTS `cluster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cluster` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `cluster_id` int(10) unsigned NOT NULL DEFAULT '0',
  `role` enum('head','node','storage','network','other','') NOT NULL DEFAULT '',
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `cluster_clusters_id` (`cluster_id`),
  CONSTRAINT `cluster_clusters_id` FOREIGN KEY (`cluster_id`) REFERENCES `clusters` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cluster_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cluster`
--

LOCK TABLES `cluster` WRITE;
/*!40000 ALTER TABLE `cluster` DISABLE KEYS */;
/*!40000 ALTER TABLE `cluster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clusters`
--

DROP TABLE IF EXISTS `clusters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clusters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `type` enum('high availability','load balancing','performance','storage','other','') NOT NULL DEFAULT '',
  `purpose` enum('application','compute','database','storage','virtualisation','web','other','') NOT NULL DEFAULT '',
  `status` enum('active','inactive','other','') NOT NULL DEFAULT '',
  `configuration` enum('active/active','active/passive','N+1','N+M','N-to-1','N-to-N','other','') NOT NULL DEFAULT '',
  `environment` varchar(100) NOT NULL DEFAULT 'production',
  `scaling` enum('auto','fixed','other','') NOT NULL DEFAULT 'fixed',
  `retrieved_name` varchar(200) NOT NULL DEFAULT '',
  `retrieved_ident` varchar(200) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clusters`
--

LOCK TABLES `clusters` WRITE;
/*!40000 ALTER TABLE `clusters` DISABLE KEYS */;
/*!40000 ALTER TABLE `clusters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collectors`
--

DROP TABLE IF EXISTS `collectors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collectors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `ip` varchar(45) NOT NULL DEFAULT '',
  `status` enum('created','pending','approved','denied','deleted','') NOT NULL DEFAULT '',
  `check_minutes` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned DEFAULT NULL,
  `uuid` text NOT NULL,
  `network_address` varchar(100) NOT NULL DEFAULT '',
  `os` varchar(100) NOT NULL DEFAULT '',
  `type` enum('collector','stand-alone','') NOT NULL DEFAULT 'collector',
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collectors`
--

LOCK TABLES `collectors` WRITE;
/*!40000 ALTER TABLE `collectors` DISABLE KEYS */;
/*!40000 ALTER TABLE `collectors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuration`
--

DROP TABLE IF EXISTS `configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configuration` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `value` longtext NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'text',
  `editable` varchar(1) NOT NULL DEFAULT 'n',
  `edited_by` varchar(100) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuration`
--

LOCK TABLES `configuration` WRITE;
/*!40000 ALTER TABLE `configuration` DISABLE KEYS */;
INSERT INTO `configuration` VALUES (NULL,'access_token_count','20','number','y','system','2000-01-01 00:00:00','Allow this many access tokens to be stored in the cookie.');
INSERT INTO `configuration` VALUES (NULL,'access_token_enable','y','bool','y','system','2000-01-01 00:00:00','Should we enable access tokens for CSRF mitigation.');
INSERT INTO `configuration` VALUES (NULL,'blessed_subnets_use','y','bool','y','system','2000-01-01 00:00:00','Should we only accept data from the blessed subnets list.');
INSERT INTO `configuration` VALUES (NULL,'collector_check_minutes','5','number','y','Administrator','2023-04-26 14:29:40','The default check interval for collectors.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_bios','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the bios table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_certificate','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the Certificate table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_disk','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the disk table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_dns','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the dns table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_file','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the file table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_ip','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the ip table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_log','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the log table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_memory','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the memory table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_module','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the module table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_monitor','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the monitor table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_motherboad','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the motherboard table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_dynamic','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is 49152 or greater.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_registered','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is in the range of 1024 to 49151.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_well_known','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is 1023 or lower.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_network','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the network table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_nmap','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the nmap table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_optical','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the optical table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_pagefile','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the pagefile table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_partition','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the partition table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_policy','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the policy table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_print_queue','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the print_queue table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_processor','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the processor table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_radio','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the radio table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_route','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the route table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_san','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the san table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_scsi','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the scsi table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_server','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the server table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_server_item','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the server_item table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_service','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the service table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_share','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the share table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_software','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the software table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_software_key','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the software_key table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_sound','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the sound table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_task','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the task table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_usb','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the USB table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_user','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the user table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_user_group','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the user_group table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_variable','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the variable table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_video','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the video table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_vm','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the vm table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_windows','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the windows table.');
INSERT INTO `configuration` VALUES (NULL,'database_show_row_limit','1000','number','y','system','2000-01-01 00:00:00','The limit of rows to show, rather than download when exporting a database table.');
INSERT INTO `configuration` VALUES (NULL,'decrypt_credentials','y','bool','y','system','2000-01-01 00:00:00','When we display or export credentials, should we decrypt them.');
INSERT INTO `configuration` VALUES (NULL,'default_network_address','','text','y','system','2000-01-01 00:00:00','The URL used by external devices to talk to Open-AudIT.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent','n','bool','y','system','2000-01-01 00:00:00','Should we delete all non-current data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_bios','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current bios data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_certificate','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current Certificate data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_disk','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current disk data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_dns','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current dns data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_file','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current file data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_ip','y','bool','y','system','2000-01-01 00:00:00','Should we delete non-current ip data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_log','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current log data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_memory','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current memory data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_module','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current module data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_monitor','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current monitor data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_motherboard','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current motherboard data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_netstat','y','bool','y','system','2000-01-01 00:00:00','Should we delete non-current netstat data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_network','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current network data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_nmap','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current nmap data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_optical','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current optical data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_pagefile','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current pagefile data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_partition','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current partition data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_policy','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current policy data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_print_queue','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current print_queue data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_processor','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current processor data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_radio','y','bool','y','system','2000-01-01 00:00:00','Should we delete non-current radio data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_route','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current route data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_san','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current san data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_scsi','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current scsi data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_server','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current server data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_server_item','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current server_item data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_service','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current service data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_share','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current share data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_software','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current software data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_software_key','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current software_key data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_sound','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current sound data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_task','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current task data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_usb','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current USB data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_user','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current user data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_user_group','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current user_group data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_variable','y','bool','y','system','2000-01-01 00:00:00','Should we delete non-current variable data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_video','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current video data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_vm','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current vm data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_windows','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current windows data.');
INSERT INTO `configuration` VALUES (NULL,'device_auto_delete','n','bool','y','system','2000-01-01 00:00:00','Should we delete the device data completely from the database when the device status is set to Deleted.');
INSERT INTO `configuration` VALUES (NULL,'devices_default_display_columns','devices.id,devices.icon,devices.type,devices.name,devices.ip,devices.dns_fqdn,devices.identification,devices.description,devices.manufacturer,devices.os_family,devices.status','text','y','system','2000-01-01 00:00:00','When requesting a list of devices, display these columns.');
INSERT INTO `configuration` VALUES (NULL,'devices_default_group_columns','devices.id,devices.icon,devices.type,devices.name,devices.ip,devices.dns_fqdn,devices.identification,devices.description,devices.manufacturer,devices.os_family,devices.status,devices.org_id','text','y','system','2000-01-01 00:00:00','When requesting a group of devices, retrieve and display these columns.');
INSERT INTO `configuration` VALUES (NULL,'devices_default_retrieve_columns','devices.id,devices.icon,devices.type,devices.name,devices.ip,devices.uuid,devices.hostname,devices.dns_hostname,devices.domain,devices.dns_domain,devices.dbus_identifier,devices.fqdn,devices.dns_fqdn,devices.description,devices.os_group,devices.os_family,devices.os_name,devices.os_version,devices.manufacturer,devices.model,devices.serial,devices.form_factor,devices.status,devices.environment,devices.class,devices.function,devices.org_id,devices.location_id,devices.snmp_oid,devices.sysDescr,devices.sysObjectID,devices.sysUpTime,devices.sysContact,devices.sysName,devices.sysLocation,devices.first_seen,devices.last_seen,devices.last_seen_by,devices.identification,devices.tags','text','y','system','2000-01-01 00:00:00','When requesting a list of devices, provide these columns.');
INSERT INTO `configuration` VALUES (NULL,'discovery_default_scan_option','1','number','y','system','2000-01-01 00:00:00','The default discovery options for Nmap.');
INSERT INTO `configuration` VALUES (NULL,'discovery_ip_exclude','','text','y','system','2000-01-01 00:00:00','Populate this list with ip addresses to be excluded from discovery. IPs should be separated by a space.');
INSERT INTO `configuration` VALUES (NULL,'discovery_linux_script_directory','/tmp/','text','y','system','2000-01-01 00:00:00','The directory the script is copied into on the target device.');
INSERT INTO `configuration` VALUES (NULL,'discovery_linux_script_permissions','700','text','y','system','2000-01-01 00:00:00','The permissions set on the audit_linux.sh script when it is copied to the target device.');
INSERT INTO `configuration` VALUES (NULL,'discovery_linux_use_sudo','y','bool','y','system','2000-01-01 00:00:00','When running discovery commands on a Linux target, should we use sudo.');
INSERT INTO `configuration` VALUES (NULL,'discovery_override_nmap','n','bool','y','system','2000-01-01 00:00:00','Override the detection of Nmap to enable discoveries.');
INSERT INTO `configuration` VALUES (NULL,'discovery_pid','','number','n','system','2000-01-01 00:00:00','The discovery queue process pid.');
INSERT INTO `configuration` VALUES (NULL,'discovery_route_retrieve_limit','500','number','y','system','2000-01-01 00:00:00','When discovering a device using SNMP, do not retrieve the route table if it contains more than this number of entries.');
INSERT INTO `configuration` VALUES (NULL,'discovery_ssh_timeout','900','number','y','system','2000-01-01 00:00:00','Timeout duration (in seconds) when discovering a device via SSH.');
INSERT INTO `configuration` VALUES (NULL,'discovery_sudo_path','','text','y','system','2000-01-01 00:00:00','Optional hardcoded path to sudo executable. Comma seperated for multiple paths.');
INSERT INTO `configuration` VALUES (NULL,'discovery_sunos_use_sudo','y','bool','y','system','2000-01-01 00:00:00','When running discovery commands on a SunOS target, should we use sudo.');
INSERT INTO `configuration` VALUES (NULL,'discovery_use_dns','y','bool','y','system','2000-01-01 00:00:00','Should we use DNS for looking up the hostname and domain.');
INSERT INTO `configuration` VALUES (NULL,'discovery_use_ipmi','y','bool','y','system','2000-01-01 00:00:00','Should we use ipmitool for discovering management ports if ipmitool is installed.');
INSERT INTO `configuration` VALUES (NULL,'discovery_use_org_id_match','n','bool','y','system','2000-01-01 00:00:00','When matching a device and assign_devices_to_org is set, use that attribute in the relevant match rules.');
INSERT INTO `configuration` VALUES (NULL,'discovery_use_vintage_service','n','bool','y','system','2000-01-01 00:00:00','On Windows, use the old way of running discovery with the Apache service account.');
INSERT INTO `configuration` VALUES (NULL,'discovery_wmi_timeout','900','number','y','system','2000-01-01 00:00:00','Timeout duration (in seconds) when discovering a device from Linux via WMI.');
INSERT INTO `configuration` VALUES (NULL,'display_version','5.6.0','text','n','system','2000-01-01 00:00:00','The version shown on the web pages.');
INSERT INTO `configuration` VALUES (NULL,'download_reports','n','bool','y','system','2000-01-01 00:00:00','Tells Open-AudIT to advise the browser to download as a file or display the csv, xml, json reports.');
INSERT INTO `configuration` VALUES (NULL,'mail_domain','','text','y','system','2000-01-01 00:00:00','Email domain to use.');
INSERT INTO `configuration` VALUES (NULL,'mail_from','','text','y','system','2000-01-01 00:00:00','Email address used for as the sender.');
INSERT INTO `configuration` VALUES (NULL,'mail_password','','text','y','system','2000-01-01 00:00:00','Email password for the email account.');
INSERT INTO `configuration` VALUES (NULL,'mail_server','','text','y','system','2000-01-01 00:00:00','Email server to use to send email.');
INSERT INTO `configuration` VALUES (NULL,'mail_server_port','25','text','y','system','2000-01-01 00:00:00','Email server port to use to send email.');
INSERT INTO `configuration` VALUES (NULL,'mail_use_tls','y','bool','y','system','2000-01-01 00:00:00','Email use TLS or not.');
INSERT INTO `configuration` VALUES (NULL,'mail_user','','text','y','system','2000-01-01 00:00:00','Email account name used to send emails.');
INSERT INTO `configuration` VALUES (NULL,'firstwave_prompt','2000-01-01','date','n','system','2000-01-01 00:00:00','Prompt about FirstWave products.');
INSERT INTO `configuration` VALUES (NULL,'graph_days','30','number','y','system','2000-01-01 00:00:00','The number of days to report on for the Enterprise graphs.');
INSERT INTO `configuration` VALUES (NULL,'gui_trim_characters','25','number','y','system','2000-01-01 00:00:00','When showing a table of information in the web GUI, replace characters greater than this with \"...\".');
INSERT INTO `configuration` VALUES (NULL,'homepage','summaries','text','y','system','2000-01-01 00:00:00','Any links to the default page should be directed to this endpoint.');
INSERT INTO `configuration` VALUES (NULL,'internal_version','20241112','number','n','system','2000-01-01 00:00:00','The internal numerical version.');
INSERT INTO `configuration` VALUES (NULL,'maps_api_key','','text','y','system','2000-01-01 00:00:00','Your API key for Google Maps.');
INSERT INTO `configuration` VALUES (NULL,'match_dbus','n','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its dbus id.');
INSERT INTO `configuration` VALUES (NULL,'match_dns_fqdn','n','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its DNS fqdn.');
INSERT INTO `configuration` VALUES (NULL,'match_dns_hostname','n','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its DNS hostname.');
INSERT INTO `configuration` VALUES (NULL,'match_fqdn','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its fqdn.');
INSERT INTO `configuration` VALUES (NULL,'match_hostname','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based only on its hostname.');
INSERT INTO `configuration` VALUES (NULL,'match_hostname_dbus','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its hostname and dbus id.');
INSERT INTO `configuration` VALUES (NULL,'match_hostname_serial','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its hostname and serial.');
INSERT INTO `configuration` VALUES (NULL,'match_hostname_uuid','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its hostname and UUID.');
INSERT INTO `configuration` VALUES (NULL,'match_ip','n','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its ip.');
INSERT INTO `configuration` VALUES (NULL,'match_ip_no_data','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its ip if we have an existing device with no data.');
INSERT INTO `configuration` VALUES (NULL,'match_mac','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its mac address.');
INSERT INTO `configuration` VALUES (NULL,'match_mac_vmware','n','bool','y','system','2000-01-01 00:00:00','Should we match a device based mac address even if its a known likely duplicate from VMware.');
INSERT INTO `configuration` VALUES (NULL,'match_serial','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its serial number.');
INSERT INTO `configuration` VALUES (NULL,'match_serial_type','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its serial and type.');
INSERT INTO `configuration` VALUES (NULL,'match_sysname','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based only on its SNMP sysName.');
INSERT INTO `configuration` VALUES (NULL,'match_sysname_serial','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based only on its SNMP sysName and serial.');
INSERT INTO `configuration` VALUES (NULL,'match_uuid','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its UUID.');
INSERT INTO `configuration` VALUES (NULL,'modules','','text','n','system','2000-01-01 00:00:00','The list of installed FirstWave modules.');
INSERT INTO `configuration` VALUES (NULL,'nmis','n','bool','y','system','2000-01-01 00:00:00','Enable import / export to NMIS functions.');
INSERT INTO `configuration` VALUES (NULL,'nmis_url','','text','y','system','2000-01-01 00:00:00','The web server address of NMIS.');
INSERT INTO `configuration` VALUES (NULL,'license','','text','n','system','2000-01-01 00:00:00','License status of Open-AudIT Enterprise.');
INSERT INTO `configuration` VALUES (NULL,'license_string','','text','y','system','2000-01-01 00:00:00','The license string (or key) for Open-AudIT (if used).');
INSERT INTO `configuration` VALUES (NULL,'license_string_collector','','text','y','system','2000-01-01 00:00:00','The license string (or key) for Open-AudIT Collectors (if used).');
INSERT INTO `configuration` VALUES (NULL,'license_eula','','text','n','system','2000-01-01 00:00:00','The date of EULA acceptance.');
INSERT INTO `configuration` VALUES (NULL,'oae_prompt','2015-06-01','date','n','system','2000-01-01 00:00:00','Prompt to activate a license for Open-AudIT Enterprise.');
INSERT INTO `configuration` VALUES (NULL,'output_escape_csv','y','bool','y','system','2000-01-01 00:00:00','Escape CSV output so Excel will not attempt to run contents.');
INSERT INTO `configuration` VALUES (NULL,'page_size','1000','number','y','system','2000-01-01 00:00:00','The default limit of rows to retrieve.');
INSERT INTO `configuration` VALUES (NULL,'process_netstat_windows_dns','n','bool','y','system','2000-01-01 00:00:00','Should we keep track of Windows netstat ports used by DNS above port 1000.');
INSERT INTO `configuration` VALUES (NULL,'queue_count','0','number','n','system','2000-01-01 00:00:00','The current number of concurrent device scans running.');
INSERT INTO `configuration` VALUES (NULL,'queue_limit','20','number','y','system','2000-01-01 00:00:00','The maximum number of concurrent device scans we should run.');
INSERT INTO `configuration` VALUES (NULL,'rss_enable','n','bool','y','system','2000-01-01 00:00:00','Enable the RSS feed.');
INSERT INTO `configuration` VALUES (NULL,'rss_url','https://docs.community.firstwave.com/wiki/createrssfeed.action?types=page&types=blogpost&spaces=OA&sort=modified&maxResults=10&timeSpan=10&showContent=true','text','y','system','2000-01-01 00:00:00','The RSS feed URL.');
INSERT INTO `configuration` VALUES (NULL,'server_ip','','text','n','system','2000-01-01 00:00:00','The locally detected IP Addresses of this server.');
INSERT INTO `configuration` VALUES (NULL,'servers','','text','n','system','2000-01-01 00:00:00','The servers to report to when using Agent / Collector / Server.');
INSERT INTO `configuration` VALUES (NULL,'uuid',UUID(),'text','n','system','2000-01-01 00:00:00','The unique identfier of this Open-AudIT server.');
INSERT INTO `configuration` VALUES (NULL,'feature_agents_advanced','n','bool','y','system','2000-01-01 00:00:00','Allow Agents to execute commands and download files.');
INSERT INTO `configuration` VALUES (NULL,'feature_queries_advanced','n','bool','y','system','2000-01-01 00:00:00','Allow Queries without a filter.');
INSERT INTO `configuration` VALUES (NULL,'feature_executables','n','bool','y','system','2000-01-01 00:00:00','Activate the linux based Executables feature.');
INSERT INTO `configuration` VALUES (NULL,'feature_powershell_audit','n','bool','y','system','2000-01-01 00:00:00','Use the PowerShell audit script instead of the VBScript audit script in discoveries.');
INSERT INTO `configuration` VALUES (NULL,'product','community','text','n','system','2000-01-01 00:00:00','Product type.');
INSERT INTO `configuration` VALUES (NULL,'license_footer','','text','n','system','2000-01-01 00:00:00','Footer text.');
INSERT INTO `configuration` VALUES (NULL,'license_limit','','number','n','system','2000-01-01 00:00:00','Licensed devices.');
INSERT INTO `configuration` VALUES (NULL,'server_os','','text','n','system','2000-01-01 00:00:00','The OS Open-AudIT is running on (this server).');
INSERT INTO `configuration` VALUES (NULL,'server_platform','','text','n','system','2000-01-01 00:00:00','The OS Platform Open-AudIT is running on (this server).');
INSERT INTO `configuration` VALUES (NULL,'enterprise_env','','text','y','system','2000-01-01 00:00:00','Set to allow execution not in /tmp for Linux.');
/*!40000 ALTER TABLE `configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `connections`
--

DROP TABLE IF EXISTS `connections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `connections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `provider` varchar(100) NOT NULL DEFAULT '',
  `service_type` varchar(100) NOT NULL DEFAULT '',
  `product_name` varchar(100) NOT NULL DEFAULT '',
  `service_identifier` varchar(100) NOT NULL DEFAULT '',
  `circuit_status` varchar(100) NOT NULL DEFAULT '',
  `speed_down_a` float(7,3) NOT NULL DEFAULT '0.000',
  `speed_up_a` float(7,3) NOT NULL DEFAULT '0.000',
  `speed_down_b` float(7,3) NOT NULL DEFAULT '0.000',
  `speed_up_b` float(7,3) NOT NULL DEFAULT '0.000',
  `location_id_a` int(10) unsigned NOT NULL DEFAULT '1',
  `location_id_b` int(10) unsigned NOT NULL DEFAULT '1',
  `device_id_a` int(10) unsigned DEFAULT NULL,
  `device_id_b` int(10) unsigned DEFAULT NULL,
  `line_number_a` varchar(100) NOT NULL DEFAULT '',
  `line_number_b` varchar(100) NOT NULL DEFAULT '',
  `ip_address_external_a` varchar(30) NOT NULL DEFAULT '',
  `ip_address_external_b` varchar(30) NOT NULL DEFAULT '',
  `ip_address_internal_a` varchar(30) NOT NULL DEFAULT '',
  `ip_address_internal_b` varchar(30) NOT NULL DEFAULT '',
  `site_hours_a` varchar(200) NOT NULL DEFAULT '',
  `site_hours_b` varchar(200) NOT NULL DEFAULT '',
  `service_level_a` varchar(200) NOT NULL DEFAULT '',
  `service_level_b` varchar(200) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `connections`
--

LOCK TABLES `connections` WRITE;
/*!40000 ALTER TABLE `connections` DISABLE KEYS */;
/*!40000 ALTER TABLE `connections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credential`
--

DROP TABLE IF EXISTS `credential`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credential` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `type` enum('aws','basic_auth','cim','ipmi','mysql','netapp','other','snmp','snmp_v3','sql_server','ssh','ssh_key','vmware','web','windows') NOT NULL DEFAULT 'other',
  `credentials` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `credential_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credentials`
--

LOCK TABLES `credentials` WRITE;
/*!40000 ALTER TABLE `credentials` DISABLE KEYS */;
/*!40000 ALTER TABLE `credentials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dashboards`
--

DROP TABLE IF EXISTS `dashboards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dashboards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `type` enum('default','org','user','') NOT NULL DEFAULT '',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `sidebar` enum('y','n') NOT NULL DEFAULT 'y',
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dashboards`
--

LOCK TABLES `dashboards` WRITE;
/*!40000 ALTER TABLE `dashboards` DISABLE KEYS */;
INSERT INTO `dashboards` VALUES (null,'Default Dashboard',1,'org',0,'The Default Open-AudIT Dashboard','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"1\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"2\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"3\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"4\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"5\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"6\"}]}','system','2000-01-01 00:00:00');
INSERT INTO `dashboards` VALUES (null,'Purchasing Dashboard',1,'org',0,'Purchase Management','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"11\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"26\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"25\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"15\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"8\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"31\"}]}','system','2000-01-01 00:00:00');
INSERT INTO `dashboards` VALUES (null,'Network Dashboard',1,'org',0,'Networks and Locations','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"20\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"19\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"15\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"16\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"21\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"22\"}]}','system','2000-01-01 00:00:00');
INSERT INTO `dashboards` VALUES (null,'Discovery Dashboard',1,'org',0,'Discovered Devices','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"1\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"2\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"22\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"27\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"28\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"29\"}]}','system','2000-01-01 00:00:00');
INSERT INTO `dashboards` VALUES (null,'Devices Dashboard',1,'org',0,'Devices Information','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"15\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"30\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"8\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"22\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"27\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"29\"}]}','system','2000-01-01 00:00:00');
INSERT INTO `dashboards` VALUES (null,'Clouds Dashboard',1,'org',0,'The details of your cloud infrastructure','n','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"33\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"34\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"35\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"36\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"37\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"38\"}]}','system','2000-01-01 00:00:00');
INSERT INTO `dashboards` VALUES (null,'Summary Dashboard',1,'org',0,'Summary Information','n','[]','system','2000-01-01 00:00:00');
INSERT INTO `dashboards` VALUES (null,'Windows Security Dashboard',1,'org',0,'Windows Security Information','n','{\"layout\":\"4x4\",\"widget_count\":16,\"widgets\":[{\"size\":1,\"position\":1,\"widget_id\":41},{\"size\":1,\"position\":2,\"widget_id\":42},{\"size\":1,\"position\":3,\"widget_id\":44},{\"size\":1,\"position\":4,\"widget_id\":43},{\"size\":1,\"position\":5,\"widget_id\":48},{\"size\":1,\"position\":6,\"widget_id\":47},{\"size\":1,\"position\":7,\"widget_id\":45},{\"size\":1,\"position\":8,\"widget_id\":46},{\"size\":1,\"position\":9,\"widget_id\":50},{\"size\":1,\"position\":10,\"widget_id\":53},{\"size\":1,\"position\":11,\"widget_id\":49},{\"size\":1,\"position\":12,\"widget_id\":52},{\"size\":1,\"position\":13,\"widget_id\":54}]}','system','2000-01-01 00:00:00');
/*!40000 ALTER TABLE `dashboards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `devices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `ip` varchar(45) NOT NULL DEFAULT '',
  `hostname` varchar(100) NOT NULL DEFAULT '',
  `dns_hostname` varchar(100) NOT NULL DEFAULT '',
  `domain` varchar(100) NOT NULL DEFAULT '',
  `dns_domain` varchar(100) NOT NULL DEFAULT '',
  `dbus_identifier` varchar(255) NOT NULL DEFAULT '',
  `fqdn` text NOT NULL,
  `dns_fqdn` text NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'unknown',
  `comments` text NOT NULL,
  `icon` varchar(50) NOT NULL DEFAULT '',
  `os_group` varchar(50) NOT NULL DEFAULT '',
  `os_family` varchar(50) NOT NULL DEFAULT '',
  `os_name` varchar(100) NOT NULL DEFAULT '',
  `os_version` varchar(200) NOT NULL DEFAULT '',
  `os_cpe` varchar(200) NOT NULL DEFAULT '',
  `kernel_version` varchar(200) NOT NULL DEFAULT '',
  `tags` text NOT NULL DEFAULT '[]',
  `attached_device_id` int(10) unsigned DEFAULT NULL,
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `manufacturer_code` varchar(200) NOT NULL DEFAULT '',
  `service_tag` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(200) NOT NULL DEFAULT '',
  `uptime` varchar(50) NOT NULL DEFAULT '',
  `form_factor` varchar(50) NOT NULL DEFAULT '',
  `os_bit` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `os_arch` varchar(50) NOT NULL DEFAULT '',
  `os_license` varchar(250) NOT NULL DEFAULT '',
  `os_license_code` varchar(250) NOT NULL DEFAULT '',
  `os_license_mode` varchar(250) NOT NULL DEFAULT '',
  `os_license_type` varchar(250) NOT NULL DEFAULT '',
  `os_licence_expiry` date NOT NULL DEFAULT '2000-01-01',
  `memory_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  `processor_count` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `storage_count` int(10) unsigned NOT NULL DEFAULT '0',
  `os_installation_date` date NOT NULL DEFAULT '2000-01-01',
  `printer_port_name` varchar(50) NOT NULL DEFAULT '',
  `printer_shared` varchar(50) NOT NULL DEFAULT '',
  `printer_shared_name` varchar(50) NOT NULL DEFAULT '',
  `printer_color` enum('y','n','') NOT NULL DEFAULT '',
  `printer_duplex` enum('y','n','') NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'production',
  `environment` varchar(100) NOT NULL DEFAULT 'production',
  `class` varchar(100) NOT NULL DEFAULT '',
  `function` varchar(100) NOT NULL DEFAULT '',
  `owner` varchar(100) NOT NULL DEFAULT '',
  `location_id` int(10) unsigned NOT NULL DEFAULT '1',
  `location_level` varchar(100) NOT NULL DEFAULT '',
  `location_suite` varchar(100) NOT NULL DEFAULT '',
  `location_room` varchar(100) NOT NULL DEFAULT '',
  `location_rack` varchar(100) NOT NULL DEFAULT '',
  `location_rack_position` varchar(100) NOT NULL DEFAULT '',
  `location_rack_size` int(10) unsigned NOT NULL DEFAULT '0',
  `location_latitude` float(10,6) NOT NULL DEFAULT '0.000000',
  `location_longitude` float(10,6) NOT NULL DEFAULT '0.000000',
  `asset_number` varchar(50) NOT NULL DEFAULT '',
  `asset_tag` text NOT NULL,
  `vm_server_name` varchar(150) NOT NULL DEFAULT '',
  `vm_device_id` int(10) unsigned DEFAULT NULL,
  `vm_group` varchar(150) NOT NULL DEFAULT '',
  `cluster_name` varchar(150) NOT NULL DEFAULT '',
  `cluster_type` varchar(150) NOT NULL DEFAULT '',
  `cluster_id` int(10) unsigned DEFAULT NULL,
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
  `warranty_status` varchar(100) NOT NULL DEFAULT '',
  `maintenance_expires` date NOT NULL DEFAULT '2000-01-01',
  `end_of_life` date NOT NULL DEFAULT '2000-01-01',
  `end_of_service` date NOT NULL DEFAULT '2000-01-01',
  `end_of_production` date NOT NULL DEFAULT '2000-01-01',
  `switch_device_id` int(10) unsigned DEFAULT NULL,
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
  `nmis_manage` enum('y','n') NOT NULL DEFAULT 'n',
  `nmis_notes` text NOT NULL,
  `nmis_business_service` varchar(50) NOT NULL DEFAULT '',
  `nmis_poller` text NOT NULL,
  `nmis_poller_uuid` varchar(45) NOT NULL DEFAULT '',
  `nmis_customer` varchar(200) NOT NULL DEFAULT '',
  `oae_manage` enum('y','n') NOT NULL DEFAULT 'y',
  `snmp_oid` text NOT NULL,
  `sysDescr` text NOT NULL,
  `sysObjectID` varchar(255) NOT NULL DEFAULT '',
  `sysUpTime` varchar(255) NOT NULL DEFAULT '',
  `sysContact` varchar(255) NOT NULL DEFAULT '',
  `sysName` varchar(255) NOT NULL DEFAULT '',
  `sysLocation` varchar(255) NOT NULL DEFAULT '',
  `snmp_version` varchar(10) NOT NULL DEFAULT '',
  `snmp_enterprise_id` int(10) unsigned NOT NULL DEFAULT '0',
  `snmp_enterprise_name` varchar(255) NOT NULL DEFAULT '',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen_by` varchar(150) NOT NULL DEFAULT '',
  `last_user` varchar(150) NOT NULL DEFAULT '',
  `last_os_update` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `omk_uuid` text NOT NULL,
  `collector_uuid` text NOT NULL,
  `credentials` text NOT NULL,
  `cloud_id` int(10) unsigned DEFAULT NULL,
  `instance_provider` varchar(200) NOT NULL DEFAULT '',
  `instance_ident` varchar(200) NOT NULL DEFAULT '',
  `instance_type` varchar(200) NOT NULL DEFAULT '',
  `instance_state` varchar(200) NOT NULL DEFAULT '',
  `instance_reservation_ident` varchar(200) NOT NULL DEFAULT '',
  `instance_tags` text NOT NULL,
  `instance_options` text NOT NULL,
  `discovery_id` int(10) unsigned DEFAULT NULL,
  `identification` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devices`
--

LOCK TABLES `devices` WRITE;
/*!40000 ALTER TABLE `devices` DISABLE KEYS */;
/*!40000 ALTER TABLE `devices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discoveries`
--

DROP TABLE IF EXISTS `discoveries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discoveries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT '',
  `subnet` varchar(45) NOT NULL DEFAULT '',
  `seed_ip` varchar(45) NOT NULL DEFAULT '',
  `seed_restrict_to_subnet` enum('y','n') NOT NULL DEFAULT 'y',
  `seed_restrict_to_private` enum('y','n') NOT NULL DEFAULT 'y',
  `seed_ping` enum('y','n') NOT NULL DEFAULT 'y',
  `ad_domain` varchar(200) NOT NULL DEFAULT '',
  `ad_server` varchar(45) NOT NULL DEFAULT '',
  `require_port` enum('y','n') NOT NULL DEFAULT 'n',
  `devices_assigned_to_org` int(10) unsigned DEFAULT NULL,
  `devices_assigned_to_location` int(10) unsigned DEFAULT NULL,
  `network_address` varchar(100) NOT NULL DEFAULT '',
  `device_id` int(10) unsigned DEFAULT NULL,
  `scan_options` text NOT NULL,
  `match_options` text NOT NULL,
  `command_options` text NOT NULL,
  `discard` enum('y','n') NOT NULL DEFAULT 'n',
  `last_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_finished` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `duration` time NOT NULL DEFAULT '00:00:00',
  `status` varchar(20) NOT NULL DEFAULT '',
  `ip_all_count` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_responding_count` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_scanned_count` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_discovered_count` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_audited_count` int(10) unsigned NOT NULL DEFAULT '0',
  `cloud_id` int(10) unsigned NOT NULL DEFAULT '0',
  `cloud_name` varchar(200) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discoveries`
--

LOCK TABLES `discoveries` WRITE;
/*!40000 ALTER TABLE `discoveries` DISABLE KEYS */;
INSERT INTO `discoveries` VALUES (1,'Default Discovery',1,'','subnet','','','y','y','y','','','n',NULL,NULL,'',0,'','','','n','2000-01-01 00:00:00','2000-01-01 00:00:00','00:00:00','',0,0,0,0,0,0,'','system',NOW());
INSERT INTO `discoveries` VALUES (2,'Discovery for Default NMIS Integration',1,'','integration','','','y','y','y','','','n',NULL,NULL,'http://127.0.0.1/open-audit/index.php/input/discoveries',0,'{\"id\":1,\"ping\":\"\",\"service_version\":\"\",\"open|filtered\":\"\",\"filtered\":\"\",\"timeout\":\"\",\"timing\":\"\",\"nmap_tcp_ports\":\"\",\"nmap_udp_ports\":\"\",\"tcp_ports\":\"\",\"udp_ports\":\"\",\"exclude_tcp_ports\":\"\",\"exclude_udp_ports\":\"\",\"exclude_ip\":\"\",\"ssh_ports\":\"\",\"script_timeout\":\"\",\"snmp_timeout\":\"\",\"ssh_timeout\":\"\",\"wmi_timeout\":\"\"}','{\"match_dbus\":\"\",\"match_fqdn\":\"\",\"match_dns_fqdn\":\"\",\"match_dns_hostname\":\"\",\"match_hostname\":\"\",\"match_hostname_dbus\":\"\",\"match_hostname_serial\":\"\",\"match_hostname_uuid\":\"\",\"match_ip\":\"\",\"match_ip_no_data\":\"\",\"match_mac\":\"\",\"match_mac_vmware\":\"\",\"match_serial\":\"\",\"match_serial_type\":\"\",\"match_sysname\":\"\",\"match_sysname_serial\":\"\",\"match_uuid\":\"\"}','','n','2000-01-01 00:00:00','2000-01-01 00:00:00','00:00:00','complete',0,0,0,0,0,0,'','system',NOW());
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `timestamp` datetime DEFAULT current_timestamp(),
  `severity` int(1) unsigned NOT NULL DEFAULT '5',
  `severity_text` enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `file` varchar(100) NOT NULL DEFAULT '',
  `function` varchar(100) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `command` text NOT NULL,
  `command_status` varchar(100) NOT NULL DEFAULT '',
  `command_time_to_execute` decimal(12,6) NOT NULL DEFAULT '0.000000',
  `command_output` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `pid` (`pid`),
  KEY `discovery_id` (`discovery_id`),
  CONSTRAINT `discovery_log_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discovery_log`
--

LOCK TABLES `discovery_log` WRITE;
/*!40000 ALTER TABLE `discovery_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `discovery_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discovery_scan_options`
--

DROP TABLE IF EXISTS `discovery_scan_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discovery_scan_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `ping` enum('','y','n') NOT NULL DEFAULT 'y',
  `service_version` enum('','y','n') NOT NULL DEFAULT 'n',
  `open|filtered` enum('','y','n') NOT NULL DEFAULT 'n',
  `filtered` enum('','y','n') NOT NULL DEFAULT 'n',
  `timeout` int(10) unsigned NOT NULL DEFAULT '0',
  `snmp_timeout` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ssh_timeout` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `wmi_timeout` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `script_timeout` tinyint(5) unsigned NOT NULL DEFAULT '0',
  `timing` int(1) unsigned NOT NULL DEFAULT '4',
  `nmap_tcp_ports` int(10) unsigned NOT NULL DEFAULT '0',
  `nmap_udp_ports` int(10) unsigned NOT NULL DEFAULT '0',
  `tcp_ports` text NOT NULL,
  `udp_ports` text NOT NULL,
  `exclude_tcp_ports` text NOT NULL,
  `exclude_udp_ports` text NOT NULL,
  `exclude_ip` text NOT NULL,
  `ssh_ports` text NOT NULL,
  `options` text NOT NULL,
  `ports_in_order` enum('','y','n') NOT NULL DEFAULT 'n',
  `ports_stop_after` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `command_options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discovery_scan_options`
--

LOCK TABLES `discovery_scan_options` WRITE;
/*!40000 ALTER TABLE `discovery_scan_options` DISABLE KEYS */;
INSERT INTO `discovery_scan_options` VALUES (1,'UltraFast',1,'Approximately 1 second per target. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n','n',0,0,0,0,0,4,0,0,'22,135,62078','161','','','','22','','n',0,'','system','2000-01-01 00:00:00');
INSERT INTO `discovery_scan_options` VALUES (2,'SuperFast',1,'Approximately 5 seconds per target. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n','n',0,0,0,0,0,4,10,10,'62078','','','','','22','','n',0,'','system','2000-01-01 00:00:00');
INSERT INTO `discovery_scan_options` VALUES (3,'Fast',1,'Approximately 40 seconds per target. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n','n',0,0,0,0,0,4,100,100,'62078','','','','','22','','n',0,'','system','2000-01-01 00:00:00');
INSERT INTO `discovery_scan_options` VALUES (4,'Medium (Classic)',1,'Approximately 90 seconds per target. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An open|filtered port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.','n','n','y','y',0,0,0,0,0,4,1000,0,'62078','161','','','','22','','n',0,'','system','2000-01-01 00:00:00');
INSERT INTO `discovery_scan_options` VALUES (5,'Medium',1,'Approximately 100 seconds per target. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n','n',0,0,0,0,0,4,1000,100,'62078','','','','','22','','n',0,'','system','2000-01-01 00:00:00');
INSERT INTO `discovery_scan_options` VALUES (6,'Slow',1,'Approximately 4 minutes per target. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An open|filtered port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.','y','y','y','y',0,0,0,0,0,3,1000,100,'62078','','','','','22','','n',0,'','system','2000-01-01 00:00:00');
INSERT INTO `discovery_scan_options` VALUES (7,'UltraSlow',1,'Approximately 20 minutes. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An open|filtered port is considered open (and will trigger device detection). Use polite timing.','n','y','y','y',0,0,0,0,0,2,1000,1000,'62078','','','','','22','','n',0,'','system','2000-01-01 00:00:00');
/*!40000 ALTER TABLE `discovery_scan_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disk`
--

DROP TABLE IF EXISTS `disk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
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
  KEY `system_id` (`device_id`),
  CONSTRAINT `disk_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `fqdn` varchar(200) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `dns_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `details` varchar(200) NOT NULL DEFAULT '',
  `source` varchar(100) NOT NULL DEFAULT '',
  `weight` int(10) unsigned NOT NULL DEFAULT '0',
  `db_table` varchar(100) NOT NULL DEFAULT '',
  `db_column` varchar(100) NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `value` text NOT NULL,
  `previous_value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `edit_log_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_log`
--

LOCK TABLES `edit_log` WRITE;
/*!40000 ALTER TABLE `edit_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_log` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `enterprise`
--

DROP TABLE IF EXISTS `enterprise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enterprise` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `request` text NOT NULL,
  `response` mediumtext NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `output` mediumtext NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enterprise`
--

LOCK TABLES `enterprise` WRITE;
/*!40000 ALTER TABLE `enterprise` DISABLE KEYS */;
/*!40000 ALTER TABLE `enterprise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `executable`
--

DROP TABLE IF EXISTS `executable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `executable` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `executable_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `full_name` text NOT NULL,
  `description` varchar(1000) NOT NULL,
  `package` varchar(1000) NOT NULL,
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
  `ack_by` varchar(200) NOT NULL DEFAULT '',
  `ack_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `notes` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `name` (`name`),
  CONSTRAINT `executable_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `executable`
--

LOCK TABLES `executable` WRITE;
/*!40000 ALTER TABLE `executable` DISABLE KEYS */;
/*!40000 ALTER TABLE `executable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `executables`
--

DROP TABLE IF EXISTS `executables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `executables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `path` text NOT NULL,
  `description` text NOT NULL,
  `os_family` varchar(50) NOT NULL DEFAULT '',
  `exclude` enum('y','n') NOT NULL DEFAULT 'n',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `executables`
--

LOCK TABLES `executables` WRITE;
/*!40000 ALTER TABLE `executables` DISABLE KEYS */;
/*!40000 ALTER TABLE `executables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field`
--

DROP TABLE IF EXISTS `field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `field_id` int(10) unsigned NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `field_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field`
--

LOCK TABLES `field` WRITE;
/*!40000 ALTER TABLE `field` DISABLE KEYS */;
/*!40000 ALTER TABLE `field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fields`
--

DROP TABLE IF EXISTS `fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `group_id` int(10) unsigned NOT NULL DEFAULT '1',
  `type` enum('varchar','list','date') NOT NULL DEFAULT 'varchar',
  `values` text NOT NULL,
  `placement` enum('custom','system') NOT NULL DEFAULT 'system',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fields`
--

LOCK TABLES `fields` WRITE;
/*!40000 ALTER TABLE `fields` DISABLE KEYS */;
INSERT INTO `fields` VALUES (1,'nmis_active',1,1,'varchar','','system','Administrator','2023-05-04 07:07:46');
INSERT INTO `fields` VALUES (2,'nmis_collect',1,1,'varchar','','system','Administrator','2023-05-04 07:07:46');
INSERT INTO `fields` VALUES (3,'nmis_model',1,1,'varchar','','system','Administrator','2023-05-04 07:07:46');
INSERT INTO `fields` VALUES (4,'nmis_netType',1,1,'varchar','','system','Administrator','2023-05-04 07:07:46');
INSERT INTO `fields` VALUES (5,'nmis_ping',1,1,'varchar','','system','Administrator','2023-05-04 07:07:46');
INSERT INTO `fields` VALUES (6,'nmis_port',1,1,'varchar','','system','Administrator','2023-05-04 07:07:46');
INSERT INTO `fields` VALUES (7,'activated_NMIS',1,1,'varchar','','system','Administrator','2023-05-04 07:07:46');
INSERT INTO `fields` VALUES (8,'activated_opConfig',1,1,'varchar','','system','Administrator','2023-05-04 07:07:46');
INSERT INTO `fields` VALUES (9,'activated_opEvents',1,1,'varchar','','system','Administrator','2023-05-04 07:07:46');
/*!40000 ALTER TABLE `fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `files_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
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
  KEY `system_id` (`device_id`),
  KEY `name` (`name`),
  CONSTRAINT `file_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `path` text NOT NULL,
  `description` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `firewall`
--

DROP TABLE IF EXISTS `firewall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `firewall` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `owner` varchar(255) NOT NULL DEFAULT '',
  `executable` varchar(255) NOT NULL DEFAULT '',
  `reportable` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `first_seen` (`first_seen`),
  KEY `last_seen` (`last_seen`),
  KEY `name` (`name`),
  CONSTRAINT `firewall_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `firewall`
--

LOCK TABLES `firewall` WRITE;
/*!40000 ALTER TABLE `firewall` DISABLE KEYS */;
/*!40000 ALTER TABLE `firewall` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `firewall_rule`
--

DROP TABLE IF EXISTS `firewall_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `firewall_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `action` varchar(100) NOT NULL DEFAULT '',
  `direction` varchar(100) NOT NULL DEFAULT '',
  `enabled` varchar(100) NOT NULL DEFAULT '',
  `external_ident` varchar(100) NOT NULL DEFAULT '',
  `group` varchar(100) NOT NULL DEFAULT '',
  `local_port` varchar(100) NOT NULL DEFAULT '',
  `profile` varchar(100) NOT NULL DEFAULT '',
  `protocol` varchar(100) NOT NULL DEFAULT '',
  `remote_address` varchar(100) NOT NULL DEFAULT '',
  `remote_port` varchar(100) NOT NULL DEFAULT '',
  `rule_group` varchar(100) NOT NULL DEFAULT '',
  `firewall` varchar(100) NOT NULL DEFAULT 'Windows Defender',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `first_seen` (`first_seen`),
  KEY `last_seen` (`last_seen`),
  KEY `name` (`name`),
  CONSTRAINT `firewall_rule_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `firewall_rule`
--

LOCK TABLES `firewall_rule` WRITE;
/*!40000 ALTER TABLE `firewall_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `firewall_rule` ENABLE KEYS */;
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
  `device_id` int(10) unsigned DEFAULT NULL,
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
  KEY `system_id` (`device_id`),
  CONSTRAINT `graph_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `sql` text NOT NULL,
  `link` text NOT NULL,
  `expose` enum('y','n') NOT NULL DEFAULT 'y',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (NULL,1,'All Devices','All the devices a user is authorised to view.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Apple Computers','Devices with type = computer and os_family like OSX.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.type = \'computer\' AND (os_family LIKE \'%osx\' OR os_family LIKE \'%macos%\')','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Centos Computers','Devices with type = computer and os_family like Centos.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.type = \'computer\' AND os_family LIKE \'centos\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Computers','Devices with type = computer.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.type = \'computer\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Debian Computers','Devices with type = computer and os_family like Debian.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.type = \'computer\' AND os_family LIKE \'%debian%\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Linux Computers','Devices with type = computer and os_group like Linux.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.type = \'computer\' AND os_group LIKE \'linux\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Open-AudIT Enterprise Managed Devices','Devices Managed by Open-AudIT Enterprise.','SELECT distinct(devices.id) FROM devices WHERE @filter AND devices.status = \'production\' and oae_manage = \'y\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Printers','Devices with type = printer.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.type LIKE \'%printer%\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Public IP Devices','Devices with a public IP address and a status of production.','SELECT distinct(devices.id) FROM devices LEFT JOIN ip ON (ip.device_id = devices.id AND ip.current = \'y\') WHERE @filter AND ((( ip.ip > \'000.000.000.000\' AND ip.ip < \'010.000.000.000\' ) OR ( ip.ip > \'010.255.255.255\' AND ip.ip < \'169.254.0.0\' ) OR ( ip.ip > \'169.254.255.255\' AND ip.ip < \'172.016.000.000\' ) OR ( ip.ip > \'172.31.255.255\' AND ip.ip < \'192.168.000.000\' ) OR ip.ip > \'192.168.255.255\' ) OR ( ( devices.ip > \'000.000.000.000\' AND devices.ip < \'010.000.000.000\' ) OR ( devices.ip > \'010.255.255.255\' AND devices.ip < \'169.254.0.0\' ) OR ( devices.ip > \'169.254.255.255\' AND devices.ip < \'172.016.000.000\' ) OR ( devices.ip > \'172.31.255.255\' AND devices.ip < \'192.168.000.000\' ) OR devices.ip > \'192.168.255.255\' )) AND devices.status = \'production\' AND ip.version = 4','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'RedHat Computers','Devices with type = computer and os_family like RedHat.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.type = \'computer\' AND os_family LIKE \'redhat\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Routers','Devices with type = router.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.type = \'router\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Switches','Devices with type = switch.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.type = \'switch\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Virtual Hosts','Devices with class = hypervisor.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.class = \'hypervisor\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Windows Computers','Devices with type = computer and os_group like Windows.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.type = \'computer\' AND os_group LIKE \'windows\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Windows Servers','Devices with type = computer and os_name like Windows Server.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.type = \'computer\' AND os_name LIKE \'%windows%server%\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (NULL,1,'Windows Workstations','Devices with type = computer and os_name like Windows and os_name not like Server.','SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.type = \'computer\' AND devices.os_name LIKE \'%windows%\' AND devices.os_name NOT LIKE \'%server%\'','','y','system','2000-01-01 00:00:00');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `filename` text NOT NULL,
  `orientation` enum('front','rear','left','right','top','bottom','other','') NOT NULL DEFAULT 'front',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `image_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `integrations`
--

DROP TABLE IF EXISTS `integrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `duration` int(10) unsigned DEFAULT '0',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `integrations`
--

LOCK TABLES `integrations` WRITE;
/*!40000 ALTER TABLE `integrations` DISABLE KEYS */;
INSERT INTO `integrations` VALUES (1,'Default NMIS Integration',1,'','nmis','{\"pollers\":[],\"groups\":[],\"roles\":[],\"customers\":[],\"business_services\":[]}','{\"password\":\"\",\"url\":\"http://localhost/omk/\",\"username\":\"\"}',0,'y',0,'y','[]','[]','n',2,'y','[{\"default_value\":\"\",\"external_field_name\":\"configuration.version\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.snmp_version\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.community\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_community\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.username\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_v3_security_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.authpassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_v3_authentication_passphrase\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.authprotocol\",\"external_field_type\":\"lower\",\"internal_field_name\":\"credentials.snmp_v3_authentication_protocol\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.privpassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_v3_privacy_passphrase\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.privprotocol\",\"external_field_type\":\"lower\",\"internal_field_name\":\"credentials.snmp_v3_privacy_protocol\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.wmiusername\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.windows_username\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.wmipassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.windows_password\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.businessService\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_business_service\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"server_name\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_poller\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.notes\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_notes\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"y\",\"external_field_name\":\"\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_manage\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.sysDescr\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.sysDescr\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"Default Location\",\"external_field_name\":\"configuration.location\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.locations_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.customer\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_customer\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"1\",\"external_field_name\":\"configuration.active\",\"external_field_type\":\"bool_one_zero\",\"internal_field_name\":\"fields.nmis_active\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"1\",\"external_field_name\":\"configuration.collect\",\"external_field_type\":\"bool_one_zero\",\"internal_field_name\":\"fields.nmis_collect\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"automatic\",\"external_field_name\":\"configuration.model\",\"external_field_type\":\"text\",\"internal_field_name\":\"fields.nmis_model\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"wan\",\"external_field_name\":\"configuration.netType\",\"external_field_type\":\"text\",\"internal_field_name\":\"fields.nmis_netType\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"true\",\"external_field_name\":\"configuration.ping\",\"external_field_type\":\"bool\",\"internal_field_name\":\"fields.nmis_ping\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"161\",\"external_field_name\":\"configuration.port\",\"external_field_type\":\"integer\",\"internal_field_name\":\"fields.nmis_port\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"name\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"name\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.display_name\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"Open-AudIT\",\"external_field_name\":\"configuration.group\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_group\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.host\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.ip\",\"matching_attribute\":\"y\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"uuid\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.omk_uuid\",\"matching_attribute\":\"y\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.roleType\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_role\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.serviceStatus\",\"external_field_type\":\"capitalise\",\"internal_field_name\":\"devices.environment\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"cluster_id\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_poller_uuid\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\" : \"1\",\"matching_attribute\" : \"n\",\"external_field_name\" : \"activated.NMIS\",\"priority\" : \"internal\",\"internal_field_name\" : \"fields.activated_NMIS\",\"external_field_type\" : \"integer\"},{\"default_value\" : \"1\",\"matching_attribute\" : \"n\",\"external_field_name\" : \"activated.opConfig\",\"priority\" : \"internal\",\"external_field_type\" : \"integer\",\"internal_field_name\" : \"fields.activated_opConfig\"},{\"default_value\" : \"1\",\"matching_attribute\" : \"n\",\"external_field_name\" : \"activated.opEvents\",\"internal_field_name\" : \"fields.activated_opEvents\",\"priority\" : \"internal\",\"external_field_type\" : \"integer\"}]','',0,'all','','nmis_manage',0,'attribute','y',0,'y',0,'y','n','','2000-01-01 00:00:00',0,'system',NOW());
/*!40000 ALTER TABLE `integrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `integrations_log`
--

DROP TABLE IF EXISTS `integrations_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `integrations_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `integrations_id` int(10) unsigned DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `microtime` decimal(16,6) DEFAULT NULL,
  `severity_text` enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `integrations_log`
--

LOCK TABLES `integrations_log` WRITE;
/*!40000 ALTER TABLE `integrations_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `integrations_log` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `invoice_id` int(10) unsigned DEFAULT NULL,
  `line_text` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(200) NOT NULL DEFAULT '',
  `asset_number` varchar(200) NOT NULL DEFAULT '',
  `line_amount` varchar(200) NOT NULL DEFAULT '',
  `notes` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `mac` varchar(200) NOT NULL DEFAULT '',
  `net_index` varchar(10) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `netmask` varchar(30) NOT NULL DEFAULT '',
  `cidr` varchar(4) NOT NULL DEFAULT '',
  `version` tinyint(3) unsigned NOT NULL DEFAULT '4',
  `network` varchar(40) NOT NULL DEFAULT '',
  `set_by` enum('','dhcp','static','auto','local') NOT NULL DEFAULT '',
  `interface` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `mac` (`mac`),
  KEY `network` (`network`),
  CONSTRAINT `ip_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ip`
--

LOCK TABLES `ip` WRITE;
/*!40000 ALTER TABLE `ip` DISABLE KEYS */;
/*!40000 ALTER TABLE `ip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `licenses`
--

DROP TABLE IF EXISTS `licenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `licenses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `org_descendants` enum('y','n') NOT NULL DEFAULT 'y',
  `purchase_count` int(10) unsigned NOT NULL DEFAULT '0',
  `used_count` int(10) unsigned NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `match_string` text NOT NULL,
  `software_name` text NOT NULL,
  `software_version` varchar(200) NOT NULL DEFAULT '',
  `expiry_date` date NOT NULL DEFAULT '2000-01-01',
  `end_of_life` date NOT NULL DEFAULT '2000-01-01',
  `end_of_service_life` date NOT NULL DEFAULT '2000-01-01',
  `sql` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `licenses`
--

LOCK TABLES `licenses` WRITE;
/*!40000 ALTER TABLE `licenses` DISABLE KEYS */;
/*!40000 ALTER TABLE `licenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `parent_id` int(10) unsigned DEFAULT '1',
  `type` varchar(100) NOT NULL DEFAULT '',
  `sub_type` enum('location','building','floor','room','row','') DEFAULT 'location',
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
  `contact` varchar(250) NOT NULL DEFAULT '',
  `picture` varchar(100) NOT NULL DEFAULT '',
  `external_ident` varchar(200) NOT NULL DEFAULT '',
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `latitude` float(10,6) NOT NULL DEFAULT '0.000000',
  `longitude` float(10,6) NOT NULL DEFAULT '0.000000',
  `geo` varchar(200) NOT NULL DEFAULT '',
  `cloud_id` int(10) unsigned DEFAULT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Default Location',1,'Our default location',1,'Office','location','','','','','','Gold Coast','','','','Queensland','','Australia','','','','','','','',-28.017260,153.425705,'',NULL,'','2000-01-01 00:00:00');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `file_name` text NOT NULL,
  `file_size` int(10) unsigned NOT NULL DEFAULT '0',
  `max_file_size` int(10) unsigned NOT NULL DEFAULT '0',
  `overwrite` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `log_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maps`
--

DROP TABLE IF EXISTS `maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maps`
--

LOCK TABLES `maps` WRITE;
/*!40000 ALTER TABLE `maps` DISABLE KEYS */;
/*!40000 ALTER TABLE `maps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `memory`
--

DROP TABLE IF EXISTS `memory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `memory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `bank` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `form_factor` varchar(100) NOT NULL DEFAULT '',
  `detail` varchar(100) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `speed` int(10) unsigned NOT NULL DEFAULT '0',
  `tag` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `memory_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
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
  KEY `system_id` (`device_id`),
  CONSTRAINT `module_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(50) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `device` varchar(100) NOT NULL DEFAULT '',
  `manufacture_date` varchar(20) NOT NULL DEFAULT '',
  `size` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `aspect_ratio` varchar(5) NOT NULL DEFAULT '',
  `interface` varchar(100) NOT NULL DEFAULT '',
  `cost_code` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `monitor_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(50) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `version` varchar(100) NOT NULL DEFAULT '',
  `memory_slot_count` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `processor_slot_count` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `processor_type` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `motherboard_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `protocol` enum('tcp','udp','tcp6','udp6','tcp4','udp4','') NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `port` int(5) NOT NULL DEFAULT '0',
  `program` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `netstat_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `mac` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `alias` varchar(255) NOT NULL DEFAULT '',
  `ip_enabled` varchar(10) NOT NULL DEFAULT '',
  `net_index` varchar(10) NOT NULL DEFAULT '',
  `dhcp_enabled` varchar(100) NOT NULL DEFAULT '',
  `dhcp_server` varchar(30) NOT NULL DEFAULT '',
  `dhcp_lease_obtained` varchar(30) NOT NULL DEFAULT '',
  `dhcp_lease_expires` varchar(30) NOT NULL DEFAULT '',
  `dns_host_name` varchar(100) NOT NULL DEFAULT '',
  `dns_server` varchar(100) NOT NULL DEFAULT '',
  `dns_domain` varchar(100) NOT NULL DEFAULT '',
  `dns_domain_reg_enabled` varchar(10) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `connection` varchar(255) NOT NULL DEFAULT '',
  `connection_status` varchar(30) NOT NULL DEFAULT '',
  `speed` bigint(20) unsigned NOT NULL DEFAULT '0',
  `slaves` varchar(100) NOT NULL DEFAULT '',
  `ifadminstatus` varchar(100) NOT NULL DEFAULT '',
  `iflastchange` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `net_index` (`net_index`),
  KEY `mac` (`mac`),
  KEY `dhcp_server` (`dhcp_server`),
  KEY `dns_server` (`dns_server`),
  CONSTRAINT `network_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `network` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `type` enum('Campus Area Network','Cloud Network','Enterprise Private Network','Home Area Network','Local Area Network','Metropolitan Area Network','Passive Optical Local Area Network','Personal Area Network','Storage-Area Network','System-Area Network','Virtual Private Network','Wide Area Network','Wireless Local Area Network') NOT NULL DEFAULT 'Local Area Network',
  `description` text NOT NULL,
  `external_ident` varchar(200) NOT NULL DEFAULT '',
  `cloud_id` int(10) unsigned DEFAULT NULL,
  `gateways` varchar(200) NOT NULL DEFAULT '',
  `network_domain` varchar(200) NOT NULL DEFAULT '',
  `security_zone` varchar(200) NOT NULL DEFAULT '',
  `admin_status` enum('allocated','delegated','planning','reserved','unallocated','unknown','unmanaged') NOT NULL DEFAULT 'allocated',
  `environment` varchar(100) NOT NULL DEFAULT 'Production',
  `location_id` int(10) unsigned DEFAULT NULL,
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `networks_cloud_id` (`cloud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `protocol` enum('tcp','udp','tcp6','udp6','tcp4','udp4','') NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `port` int(5) NOT NULL DEFAULT '0',
  `program` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `nmap_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nmap`
--

LOCK TABLES `nmap` WRITE;
/*!40000 ALTER TABLE `nmap` DISABLE KEYS */;
/*!40000 ALTER TABLE `nmap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `optical`
--

DROP TABLE IF EXISTS `optical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `optical` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `device` varchar(100) NOT NULL DEFAULT '',
  `mount_point` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `optical_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `optical`
--

LOCK TABLES `optical` WRITE;
/*!40000 ALTER TABLE `optical` DISABLE KEYS */;
/*!40000 ALTER TABLE `optical` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orgs`
--

DROP TABLE IF EXISTS `orgs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orgs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `parent_id` int(10) unsigned DEFAULT '1',
  `description` text NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'organisation',
  `ad_group` varchar(100) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orgs`
--

LOCK TABLES `orgs` WRITE;
/*!40000 ALTER TABLE `orgs` DISABLE KEYS */;
INSERT INTO `orgs` VALUES (1,'Default Organisation',1,'','organisation','open-audit_orgs_default_organisation','system','2000-01-01 00:00:00');
/*!40000 ALTER TABLE `orgs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `org_descendants` enum('y','n') NOT NULL DEFAULT 'y',
  `purchase_count` int(10) unsigned NOT NULL DEFAULT '0',
  `used_count` int(10) unsigned NOT NULL DEFAULT '0',
  `match_string` text NOT NULL,
  `software_name` text NOT NULL,
  `software_version` varchar(200) NOT NULL DEFAULT '',
  `expiry_date` date NOT NULL DEFAULT '2000-01-01',
  `end_of_life` date NOT NULL DEFAULT '2000-01-01',
  `end_of_service_life` date NOT NULL DEFAULT '2000-01-01',
  `type` enum('antivirus','approved','backup','banned','cloud','firewall','ignored','license','other','') NOT NULL DEFAULT '',
  `os` enum('Windows','Linux','MacOS','other','all','') NOT NULL DEFAULT 'Windows',
  `sql` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` VALUES (NULL, 'Avast', 1, 'Default AntiVirus', 'y', 0, 0, '', '%Avast%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'AVG', 1, 'Default AntiVirus', 'y', 0, 0, '', 'AVG%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Avira', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Avira%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'BitDefender', 1, 'Default AntiVirus', 'y', 0, 0, '', 'BitDefender%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'CA AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'CA Anti-Virus', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'CA eTrust AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'CA eTrust Antivirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Carbon Black', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Carbon Black%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'CB Defense', 1, 'Default AntiVirus', 'y', 0, 0, '', 'CB Defense', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'ClamWin Free AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ClamWin Free Antivirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'COMODO AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'COMODO Antivirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Cortex XDR', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Cortex XDR%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'CrowdStrike Sensor', 1, 'Default AntiVirus', 'y', 0, 0, '', 'CrowdStrike % Sensor%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Cyclance', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Cyclance', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Dell Endpoint Security Suite', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Dell Endpoint Security Suite', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Dr Web AntiVirus for Windows', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Dr.Web Anti-Virus for Windows%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'eScan AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'eScan Anti-Virus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'ESET Endpoint AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ESET Endpoint Antivirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'ESET File Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ESET File Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'ESET NOD32', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ESET NOD32%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'ESET Smart Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ESET Smart Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'F-PROT AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'F-PROT Antivirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'F-Secure AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'F-Secure Anti-Virus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'F-Secure Client Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'F-Secure Client Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Falcon', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Falcon', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'FortiClient', 1, 'Default AntiVirus', 'y', 0, 0, '', 'FortiClient%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'FSecure AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', '%F%Secure anti-virus', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'G DATA AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'G DATA AntiVirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Kaspersky AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Kaspersky Anti%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Kaspersky Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Kaspersky %security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Malwarebytes', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Malwarebytes%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'McAfee AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'McAfee Virus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'McAfee Endpoint Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'McAfee Endpoint Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Microsoft Forefront', 1, 'Default AntiVirus', 'y', 0, 0, '', '%Microsoft Forefront%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Microsoft Security Essentials', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Microsoft Security Essentials%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'NOD32', 1, 'Default AntiVirus', 'y', 0, 0, '', 'NOD32%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Norman Endpoint', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Norman Endpoint%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Norman Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Norman Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Norman Virus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Norman Virus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Norton AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Norton AntiVirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Panda AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Panda Antivirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Panda Endpoint', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Panda Endpoint%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Panda Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Panda Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'PC Tools AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'PC Tools AntiVirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Sentinel Agent', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Sentinel Agent%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Sophos', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Sophos%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Symantec AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Symantec AntiVirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Symantec Cloud', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Symantec.cloud', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Symantec Endpoint Protection', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Symantec Endpoint Protection%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'System Center Endpoint Protection', 1, 'Default AntiVirus', 'y', 0, 0, '', 'System Center%Endpoint Protection', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'TotalAV', 1, 'Default AntiVirus', 'y', 0, 0, '', 'TotalAV', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Traps%', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Traps%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Trend Micro AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro AntiVirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Trend Micro Apex One', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro Apex One', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Trend Micro Client/Server Security Agent', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro Client/Server Security Agent', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Trend Micro Deep Security Agent', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro Deep Security Agent%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Trend Micro OfficeScan', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro OfficeScan%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Trend Micro Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Trend Micro Worry-Free Business Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro Worry-Free Business Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'VIPRE Business Agent', 1, 'Default AntiVirus', 'y', 0, 0, '', 'VIPRE Business Agent', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Webroot SecureAnywhere', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Webroot SecureAnywhere', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Windows Defender AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Windows Defender Antivirus', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Windows Intune', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Windows Intune%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'ZoneAlarm', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ZoneAlarm', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Windows Defender Firewall', 1, 'Default Firewall', 'y', 0, 0, '', 'Windows Defender Firewall', '', '2000-01-01', '2000-01-01', '2000-01-01', 'firewall', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'ZoneAlarm', 1, 'Default Firewall', 'y', 0, 0, '', 'ZoneAlarm', '', '2000-01-01', '2000-01-01', '2000-01-01', 'firewall', 'Windows', '', 'system', NOW());
INSERT INTO `packages` VALUES (NULL, 'Veritas NetBackup Client', 1, 'Default BackUp', 'y', 0, 0, '', 'Veritas NetBackup Client', '', '2000-01-01', '2000-01-01', '2000-01-01', 'backup', 'Windows', '', 'system', NOW());
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagefile`
--

DROP TABLE IF EXISTS `pagefile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagefile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `initial_size` int(10) unsigned NOT NULL DEFAULT '0',
  `max_size` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `pagefile_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `device` varchar(100) NOT NULL DEFAULT '',
  `hard_drive_index` varchar(100) NOT NULL DEFAULT '',
  `partition_disk_index` varchar(50) NOT NULL DEFAULT '',
  `mount_type` enum('mount point','partition','other') NOT NULL DEFAULT 'partition',
  `mount_point` varchar(200) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '1',
  `free` int(10) unsigned NOT NULL DEFAULT '1',
  `used` int(10) unsigned NOT NULL DEFAULT '1',
  `format` varchar(20) NOT NULL DEFAULT '',
  `bootable` varchar(10) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT 'local',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `partition_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partition`
--

LOCK TABLES `partition` WRITE;
/*!40000 ALTER TABLE `partition` DISABLE KEYS */;
/*!40000 ALTER TABLE `partition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `policy`
--

DROP TABLE IF EXISTS `policy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `policy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `guid` text NOT NULL,
  `options` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `policy_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `policy`
--

LOCK TABLES `policy` WRITE;
/*!40000 ALTER TABLE `policy` DISABLE KEYS */;
/*!40000 ALTER TABLE `policy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `print_queue`
--

DROP TABLE IF EXISTS `print_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `print_queue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `device` varchar(200) NOT NULL DEFAULT '',
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
  KEY `system_id` (`device_id`),
  CONSTRAINT `print_queue_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `physical_count` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `core_count` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `logical_count` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `speed` int(10) unsigned NOT NULL DEFAULT '0',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `architecture` varchar(100) NOT NULL DEFAULT '',
  `socket` varchar(100) NOT NULL DEFAULT '',
  `hyperthreading` enum('y','n','') NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `processor_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `menu_category` varchar(200) NOT NULL DEFAULT 'Device',
  `menu_display` enum('y','n') NOT NULL DEFAULT 'y',
  `description` text NOT NULL,
  `sql` text NOT NULL,
  `link` text NOT NULL,
  `advanced` enum('y','n') NOT NULL DEFAULT 'n',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `queries`
--

LOCK TABLES `queries` WRITE;
/*!40000 ALTER TABLE `queries` DISABLE KEYS */;
INSERT INTO `queries` VALUES (NULL,1,'Audit Dates','Device','y','The first and last times a device was audited.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.os_name AS `devices.os_name`, devices.first_seen AS `devices.first_seen`, devices.last_seen AS `devices.last_seen`, GROUP_CONCAT(DISTINCT(audit_log.type) ORDER BY audit_log.type) AS `seen_by` FROM devices LEFT JOIN audit_log ON (audit_log.device_id = devices.id) WHERE @filter GROUP BY devices.id','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Billing Report','Device','y','Name, last seen on and by, type, class, manufacturer, model, serial, user, location.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, orgs.name AS `orgs.name`, devices.last_seen AS `devices.last_seen`, devices.last_seen_by AS `devices.last_seen_by`, devices.manufacturer AS `devices.manufacturer`, devices.model AS `devices.model`, devices.serial AS `devices.serial`, devices.class AS `devices.class`, windows.user_name AS `windows.user_name`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = \'y\') LEFT JOIN orgs ON (devices.org_id = orgs.id) WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Consumed IP Addresses','Network','y','The ip addresses used by a group.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.description AS `devices.description`, ip.ip as `ip.ip` FROM ip LEFT JOIN devices ON (devices.id = ip.device_id AND ip.current = \'y\') WHERE @filter AND ip.ip IS NOT NULL AND ip.ip != \'127.000.000.001\' AND ip.ip != \'\' AND ip.ip != \'0.0.0.0\' AND ip.ip != \'000.000.000.000\' AND ip.version = \'4\' GROUP BY ip.id, ip.ip ORDER BY ip.ip','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Devices Without Credentials','Device','y','Device details - name, ip, last seen on and by for those devices only discovered by Nmap and have therefore not been audited.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, audit_log.timestamp AS `audit_log.timestamp`, audit_log.ip AS `audit_log.ip` FROM audit_log LEFT JOIN devices ON (audit_log.device_id = devices.id) WHERE @filter AND audit_log.device_id NOT IN (SELECT DISTINCT(audit_log.device_id) FROM audit_log WHERE type != \'nmap\') GROUP BY devices.id','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Disk Partition Use','Device','y','Partition details where partition free and used space aren\'t 0 and type isn\'t Volume or Network Drive and mount point isn\'t [SWAP].','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, partition.id AS `partition.id`, partition.hard_drive_index AS `partition.hard_drive_index`, partition.mount_point AS `partition.mount_point`, partition.mount_type as `partition.mount_type`, partition.size AS `partition.size`, partition.used AS `partition.used`, partition.free AS `partition.free`, ROUND(((partition.free / partition.size) * 100), 0) AS percent_free, partition.name AS `partition.name` FROM devices INNER JOIN `partition` ON (partition.device_id = devices.id AND partition.current = \'y\') WHERE @filter AND partition.used > 0 AND partition.free > 0 AND LOWER(partition.type) != \'volume\' AND LOWER(partition.type) != \'network drive\' AND LOWER(partition.mount_point) != \'[swap]\' ORDER BY devices.name, partition.id','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Export Details','Device','y','Icon, type, name, first seen on, last seen on, last seen by, manufacturer, model, serial, owner, organisation, location, operating devices.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.fqdn AS `devices.fqdn`, devices.serial AS `devices.serial`, devices.class AS `devices.class`, devices.function AS `devices.function`, devices.owner AS `devices.owner`, devices.asset_number AS `devices.asset_number` FROM devices WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Failed Audits','Device','y','Name, ip address, audit time, audit stage.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, audit_log.timestamp AS `audit_log.timestamp`, audit_log.debug AS `audit_log.debug` FROM devices LEFT JOIN audit_log ON (devices.id = audit_log.device_id) WHERE @filter AND audit_log.debug > \'\'','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Device','Hardware','y','Icon, name, ip address, manufacturer, model, serial.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.manufacturer AS `devices.manufacturer`, devices.model AS `devices.model`, devices.serial AS `devices.serial`, devices.os_family AS `devices.os_family`, devices.asset_number AS `devices.asset_number` FROM devices WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Memory and Processors','Hardware','y','Device details - name, ip, memory, total processor cores, processor speed, processor description.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, CAST(devices.memory_count/1024 AS UNSIGNED) AS `devices.memory_count`, processor.physical_count AS `processor.physical_count`, processor.core_count AS `processor.core_count`, processor.logical_count AS `processor.logical_count`, processor.speed AS `processor.speed`, processor.description AS `processor.description` FROM devices INNER JOIN processor ON (devices.id = processor.device_id AND processor.current = \'y\') WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Workstations','Hardware','y','Device details - name, ip, manufacturer, model, serial, form factor, memory, processor.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.manufacturer AS `devices.manufacturer`, devices.model AS `devices.model`, devices.serial AS `devices.serial`, devices.os_family AS `devices.os_family`, devices.memory_count AS `devices.memory_count`, devices.form_factor AS `devices.form_factor`, processor.description AS `processor.description` FROM devices LEFT JOIN processor ON (processor.device_id = devices.id AND processor.current = \'y\') WHERE @filter AND devices.type = \'computer\' AND devices.class != \'server\' AND devices.class != \'hypervisor\' ORDER BY devices.name','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Acrobat','Software','y','Adobe Acrobat installations (software name contains \'acrobat\' or \'adobe reader\').','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.class AS `devices.class`, devices.os_family AS `devices.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN devices ON (software.device_id = devices.id AND software.current = \'y\' AND (software.name LIKE \'%acrobat%\' OR software.name LIKE \'adobe reader%\')) LEFT JOIN orgs ON (orgs.id = devices.org_id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Antivirus','Software','y','Installed AntiVirus software (software name contains \'virus\' or \'trend micro\' or \'endpoint\').','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.class AS `devices.class`, devices.os_family AS `devices.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version` FROM devices LEFT JOIN software ON (software.device_id = devices.id AND software.current = \'y\' AND (software.name LIKE \'%virus%\' or software.name LIKE \'%trend micro%\' or software.name LIKE \'%endpoint%\')) LEFT JOIN orgs ON (orgs.id = devices.org_id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND devices.type = \'computer\'','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Flash','Software','y','Flash Player installations.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.class AS `devices.class`, devices.os_family AS `devices.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN devices ON (software.device_id = devices.id AND software.current = \'y\' AND software.name LIKE \'%Flash Player%\') LEFT JOIN orgs ON (orgs.id = devices.org_id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'MS FrontPage','Software','y','MS Frontpage installations (software name contains \'Microsoft Office Frontpage\' or \'with Frontpage\').','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.class AS `devices.class`, devices.os_family AS `devices.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN devices ON (software.device_id = devices.id AND software.current = \'y\' AND (software.name LIKE \'Microsoft Office Frontpage%\' OR software.name LIKE \'%with FrontPage\')) LEFT JOIN orgs ON (orgs.id = devices.org_id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'MS Office','Software','y','MS Office installations.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.os_family AS `devices.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name` FROM software LEFT JOIN devices ON (software.device_id = devices.id) LEFT JOIN orgs ON (orgs.id = devices.org_id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter AND software.current = \'y\' AND software.name LIKE \'Microsoft Office%\' AND (software.name LIKE \'%Starter%\' OR software.name LIKE \'%Basic%\' OR software.name LIKE \'%Personal%\' OR software.name LIKE \'%Home%\' OR software.name LIKE \'%Student%\' OR software.name LIKE \'%Business%\' OR software.name LIKE \'%Standard%\' OR software.name LIKE \'%Ultimate%\' OR software.name LIKE \'%Enterprise%\' OR software.name LIKE \'%Professional%\' OR software.name LIKE \'%Professional Plus%\') AND (software.name LIKE \'%2003%\' OR software.name LIKE \'%2007%\' OR software.name LIKE \'%2010%\' OR software.name LIKE \'%2013%\' OR software.name LIKE \'%2016%\' OR software.name LIKE \'%365%\')','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'MS Project','Software','y','MS Project installations (software name contains \'Microsoft Project\').','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.class AS `devices.class`, devices.os_family AS `devices.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN devices ON (software.device_id = devices.id AND software.current = \'y\' AND software.name LIKE \'%Microsoft%Project%\') LEFT JOIN orgs ON (orgs.id = devices.org_id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'MS Visio','Software','y','MS Visio installations (software name contains \'Microsoft Visio\').','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.class AS `devices.class`, devices.os_family AS `devices.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN devices ON (software.device_id = devices.id AND software.current = \'y\' AND software.name LIKE \'Microsoft%Visio%\') LEFT JOIN orgs ON (orgs.id = devices.org_id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = \'y\') WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Interfaces Used or Available','Network','y','Query to determine if a device interface is available for use.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, network.alias as `network.alias`, network.net_index AS `network.net_index`, network.description as `network.description`, network.ifadminstatus as `network.ifadminstatus`, network.ip_enabled as `network.ip_enabled`, devices.sysuptime AS `devices.sysuptime`, (devices.sysuptime - network.iflastchange) AS diff, floor((devices.sysuptime - network.iflastchange) /60/60/24/100) as diff_days, IF((network.ifadminstatus = \'down\') OR (network.ifadminstatus = \'up\' AND (network.ip_enabled != \'up\' AND network.ip_enabled != \'dormant\') AND (((devices.sysuptime - network.iflastchange) > 60480000) OR (devices.sysuptime < network.iflastchange))), \'available\', \'used\') AS available FROM network LEFT JOIN devices ON (network.device_id = devices.id AND network.current = \'y\') WHERE @filter AND network.ifadminstatus != \'\'','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Log Files','Device','y','Log file details.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, log.name as `log.name`, log.file_name AS `log.file_name`, log.file_size AS `log.file_size`, log.max_file_size AS `log.max_file_size`, log.overwrite AS `log.overwrite` FROM log LEFT JOIN devices ON (devices.id = log.device_id and log.current = \'y\') WHERE @filter ORDER BY devices.name','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Netstat Ports','Device','y','Detected Netstat ports.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.os_name AS `devices.os_name`, netstat.protocol AS `netstat.protocol`, netstat.port AS `netstat.port`, netstat.ip AS `netstat.ip`, netstat.program AS `netstat.program` FROM devices LEFT JOIN netstat ON (devices.id = netstat.device_id AND netstat.current = \'y\') WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Printer Queues','Device','y','Printer details - manufacturer, model, status, capabilities, etc.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, print_queue.manufacturer AS `print_queue.manufacturer`, print_queue.model AS `print_queue.model`, print_queue.description AS `print_queue.description`, print_queue.driver AS `print_queue.driver`, print_queue.status AS `print_queue.status`, print_queue.port_name AS `print_queue.port_name`, print_queue.duplex AS `print_queue.duplex`, print_queue.color AS `print_queue.color`, print_queue.location AS `print_queue.location`, print_queue.type AS `print_queue.type`, print_queue.shared AS `print_queue.shared`, print_queue.shared_name AS `print_queue.shared_name`, print_queue.capabilities AS `print_queue.capabilities` FROM print_queue LEFT JOIN devices ON (devices.id = print_queue.device_id AND print_queue.current = \'y\') WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Database','Server','y','All databases.','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.fqdn AS `devices.fqdn`, devices.os_family AS `devices.os_family`, devices.environment AS `devices.environment`, server_item.parent_name AS `server_item.parent_name`, server_item.name AS `server_item.name`, server_item.instance AS `server_item.instance`, server_item.path AS `server_item.path`, server_item.log_status AS `server_item.log_status`, server_item.log_format AS `server_item.log_format`, server_item.log_rotation AS `server_item.log_rotation`, server_item.log_path AS `server_item.log_path` FROM devices LEFT JOIN server_item ON (server_item.device_id = devices.id and server_item.current = \'y\') WHERE @filter AND server_item.type = \'database\'','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Websites','Server','y','All detected websites (IIS based).','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.environment AS `devices.environment`, server_item.parent_name AS `server_item.parent_name`, server_item.name AS `server_item.name`, server_item.description AS `server_item.description`, server_item.status AS `server_item.status`, server_item.instance AS `server_item.instance`, server_item.path AS `server_item.path`, server_item.log_status AS `server_item.log_status`, server_item.log_format AS `server_item.log_format`, server_item.log_rotation AS `server_item.log_rotation`, server_item.log_path AS `server_item.log_path` FROM devices LEFT JOIN server_item ON (server_item.device_id = devices.id and server_item.current = \'y\') WHERE @filter AND server_item.type = \'website\'','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Shares','Device','y','Shared directory details.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, share.id AS `share.id`, share.name AS `share.name`, share.description AS `share.description`, share.size AS `share.size`, share.path AS `share.path` FROM share LEFT JOIN devices ON (devices.id = share.device_id and share.current = \'y\') WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Elevated','User','y','Name, group name, group members.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM user_group LEFT JOIN devices ON (user_group.device_id = devices.id AND user_group.current = \'y\') WHERE @filter AND (user_group.name = \'Administrators\' OR user_group.name = \'Power Users\' OR user_group.name = \'Remote Desktop Users\' OR user_group.name = \'wheel\' OR user_group.name = \'sudo\') AND user_group.members > \'\' GROUP BY devices.id, user_group.name ORDER BY devices.name','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Orphaned','User','y','User accounts that no longer appear to be valid.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM devices LEFT JOIN user_group ON (user_group.device_id = devices.id AND user_group.current = \'y\') WHERE @filter AND user_group.members LIKE \'%@,%\' AND user_group.members NOT LIKE \'Everyone@,\' GROUP BY user_group.id ORDER BY devices.name','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Standard','User','y','Name, group name, group members.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, user_group.members AS `user_group.members`, user_group.name AS `user_group.name` FROM user_group LEFT JOIN devices ON (user_group.device_id = devices.id AND user_group.current = \'y\') WHERE @filter AND (user_group.name = \'Users\' OR user_group.name = \'Guests\') AND user_group.members > \'\'','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Files','Change','y','Any changes in the table \'file\'.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id`, CONCAT(\"components/\", change_log.id, \"?components.type=change_log\") AS `link` FROM change_log LEFT JOIN devices ON (change_log.device_id = devices.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table = \'file\'','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Hardware','Change','y','Any changes created in the tables \'bios\', \'disk\', \'memory\', \'module\', \'monitor\', \'motherboard\', \'optical\', \'partition\', \'processor\', \'network\', \'scsi\', \'sound\' and \'video\'.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, CONCAT(\"components/\", change_log.id, \"?components.type=change_log\") AS `link` FROM change_log LEFT JOIN devices ON (change_log.device_id = devices.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table in (\'bios\', \'disk\', \'memory\', \'module\', \'monitor\', \'motherboard\', \'optical\', \'partition\', \'processor\', \'network\', \'scsi\', \'sound\', \'video\')','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'New Devices','Change','y','Any changes in the table \'devices\'.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id`, CONCAT(\"components/\", change_log.id, \"?components.type=change_log\") AS `link` FROM change_log LEFT JOIN devices ON (change_log.device_id = devices.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table = \'devices\'','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Settings','Change','y','Any changes in the tables \'dns\', \'ip\', \'log\', netstat\', \'pagefile\', \'print_queue\', \'route\', \'task\', \'user\', \'user_group\' and \'variable\'.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id`, CONCAT(\"components/\", change_log.id, \"?components.type=change_log\") AS `link` FROM change_log LEFT JOIN devices ON (change_log.device_id = devices.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table in (\'dns\', \'ip\', \'log\', \'netstat\', \'pagefile\', \'print_queue\', \'route\', \'task\', \'user\', \'user_group\', \'variable\')','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Software','Change','y','Any changes in the tables \'service\', \'server\', \'server_item\', \'software\' and \'software_key\'.','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id`, CONCAT(\"components/\", change_log.id, \"?components.type=change_log\") AS `link` FROM change_log LEFT JOIN devices ON (change_log.device_id = devices.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table in (\'service\', \'server\', \'server_item\', \'software\', \'software_key\')','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'AD Controllers','Server','y','Active Directory Domain Controllers','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.description AS `devices.description`, devices.os_family AS `devices.os_family`, devices.status AS `devices.status` FROM devices LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = \'y\') WHERE @filter AND windows.domain_role LIKE \'%Domain Controller\' AND devices.status = \'production\'','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Cloud Device Details','Device','y','Details about your cloud based devices','SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.instance_type AS `devices.instance.type`, clouds.type AS `clouds.type`, clouds.name AS `clouds.name`, locations.name AS `locations.name` FROM devices LEFT JOIN clouds ON (clouds.id = devices.cloud_id) LEFT JOIN locations ON (locations.id = devices.location_id) WHERE @filter AND devices.cloud_id != \'\';','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'NMIS','Device','y','NMIS Export query','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.hostname AS `devices.hostname`, devices.fqdn AS `devices.fqdn`, devices.dns_hostname AS `devices.dns_hostname`, devices.omk_uuid AS `devices.omk_uuid`, devices.nmis_name AS `devices.nmis_name`, devices.nmis_group AS `devices.nmis_group`, devices.nmis_role AS `devices.nmis_role`, devices.nmis_manage AS `devices.nmis_manage`, devices.nmis_business_service AS `devices.nmis_business_service`, devices.nmis_poller AS `devices.nmis_poller` FROM `devices` WHERE @filter AND devices.nmis_manage = \'y\'','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Integration Default for NMIS','Other','y','The default query for integration with NMIS. Uses all devices with nmis_manage set to y.','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.hostname AS `devices.hostname`, devices.dns_hostname AS `devices.dns_hostname`, devices.fqdn AS `devices.fqdn`, devices.dns_fqdn AS `devices.dns_fqdn`, devices.ip AS `devices.ip`, devices.type AS `devices.type`, devices.credentials AS `devices.credentials`, devices.nmis_group AS `devices.nmis_group`, devices.nmis_name AS `devices.nmis_name`, devices.nmis_role AS `devices.nmis_role`, devices.nmis_manage AS `devices.nmis_manage`, devices.nmis_business_service AS `devices.nmis_business_service`, devices.nmis_customer AS `devices.nmis_customer`, devices.nmis_poller AS `devices.nmis_poller`, devices.snmp_version AS `devices.snmp_version`, devices.omk_uuid AS `devices.omk_uuid`, locations.name AS `locations.name`, IF(devices.snmp_version != \'\', \'true\', \'false\') AS `devices.collect_snmp`, IF(devices.os_group LIKE \'%windows%\', \'true\', \'false\') AS `devices.collect_wmi` FROM `devices` LEFT JOIN `locations` ON devices.location_id = locations.id WHERE @filter AND devices.nmis_manage = \'y\'','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'opAddress','Other','y','The default query for integration with opAddress.','SELECT devices.id AS `devices.id`, devices.ip AS `devices.ip`, devices.hostname AS `devices.hostname`, devices.sysName AS `devices.sysName`, devices.fqdn AS `devices.fqdn`, devices.dns_fqdn AS `devices.dns_fqdn`, devices.last_seen AS `devices.last_seen`, network.speed AS `network.speed`, network.connection AS `network.connection`, ip.ip AS `ip.ip`, ip.mac AS `ip.mac`,ip.netmask AS `ip.netmask`, ip.network AS `ip.network`, ip.version AS `ip.version`, locations.name AS `locations.name` FROM ip LEFT JOIN devices ON (ip.device_id = devices.id AND ip.current = \'y\') LEFT JOIN network ON (ip.net_index = network.net_index AND ip.mac = network.mac) LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Expiring Certificates','Server','y','Certificates expiring between today - 7 days and today + 30 days','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN devices ON (certificate.device_id = devices.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to > DATE(NOW() - INTERVAL 1 DAY) AND certificate.valid_to < DATE(NOW() + INTERVAL 30 day)','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Expiring Certificates (action immediately)','Server','y','Certificates expiring between in the next 8 days','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN devices ON (certificate.device_id = devices.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to > NOW() AND certificate.valid_to < DATE(NOW() + INTERVAL 8 day)','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Expiring Certificates (action soon)','Server','y','Certificates expiring between 8 and 32 days','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN devices ON (certificate.device_id = devices.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to > DATE(NOW() + INTERVAL 8 DAY) AND certificate.valid_to < DATE(NOW() + INTERVAL 32 day)','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Expiring Certificates (action later)','Server','y','Certificates expiring between 32 and 92 days','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN devices ON (certificate.device_id = devices.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to > DATE(NOW() + INTERVAL 32 DAY) AND certificate.valid_to < DATE(NOW() + INTERVAL 92 day)','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Expired Certificates','Server','y','Expired certificates','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN devices ON (certificate.device_id = devices.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to < DATE(NOW())','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Benchmarks Query','','n','For use in benchmarks (do not edit or delete)','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.os_version AS `devices.os_version`, devices.credentials AS `devices.credentials`, software.name AS `software.name`, software.version AS `software.version`, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, c1.type AS `c1.type`, c2.type AS `c2.type`, c3.type AS `c3.type` FROM devices LEFT JOIN `software` ON (devices.id = software.device_id AND software.name = \'openscap-scanne\' AND software.current = \'y\') LEFT JOIN `orgs` ON (devices.org_id = orgs.id) LEFT JOIN credentials c1 ON (JSON_EXTRACT(devices.credentials, \'$[0]\') = c1.id) LEFT JOIN credentials c2 ON (JSON_EXTRACT(devices.credentials, \'$[1]\') = c2.id) LEFT JOIN credentials c3 ON (JSON_EXTRACT(devices.credentials, \'$[2]\') = c3.id) WHERE @filter AND devices.os_family LIKE \'OSFAMILY\' AND devices.os_version LIKE \'OSVERSION%\'','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Devices Not in Benchmarks','','n','For use in benchmarks (do not edit or delete)','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.os_version AS `devices.os_version` FROM devices WHERE @filter AND ((devices.os_family LIKE \'centos\' AND (devices.os_version LIKE \'7%\' OR devices.os_version LIKE \'8%\')) OR (devices.os_family LIKE \'debian\' AND devices.os_version LIKE \'12%\') OR (devices.os_family LIKE \'redhat\' AND (devices.os_version LIKE \'7%\' OR devices.os_version LIKE \'8%\' OR devices.os_version LIKE \'9%\')) OR (devices.os_family LIKE \'sles\' AND (devices.os_version LIKE \'15%\')) OR (devices.os_family LIKE \'suse\' AND (devices.os_version LIKE \'15%\')) OR (devices.os_family LIKE \'ubuntu\' AND (devices.os_version LIKE \'20.04%\' OR devices.os_version LIKE \'22.04%\' OR devices.os_version LIKE \'24.04%\'))) AND devices.id NOT IN (SELECT JSON_VALUE(benchmarks.devices, \'$[*]\') FROM benchmarks) GROUP BY devices.id','','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Devices in Benchmarks','','n','For use in benchmarks (do not edit or delete)','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.os_version AS `devices.os_version`, CONCAT(\'<a href="../../benchmarks/\', benchmarks.id, \'">\', benchmarks.name, \'</a>\') AS `benchmarks_name` FROM benchmarks LEFT JOIN devices ON (JSON_CONTAINS(benchmarks.devices, devices.id, \'$\')) WHERE @filter GROUP BY devices.id, benchmarks.id','','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Devices Could be Benchmarked','','n','For use in benchmarks (do not edit or delete)','SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.os_version AS `devices.os_version`, CONCAT(\'<a href="../../benchmarks/\', benchmarks.id, \'">\', benchmarks.name, \'</a>\') AS `benchmarks_name` FROM devices LEFT JOIN benchmarks ON (JSON_CONTAINS(benchmarks.devices, devices.id, \'$\')) WHERE @filter AND ((devices.os_family LIKE \'centos\' AND (devices.os_version LIKE \'7%\' OR devices.os_version LIKE \'8%\')) OR (devices.os_family LIKE \'debian\' AND devices.os_version LIKE \'12%\') OR (devices.os_family LIKE \'redhat\' AND (devices.os_version LIKE \'7%\' OR devices.os_version LIKE \'8%\' OR devices.os_version LIKE \'9%\')) OR (devices.os_family LIKE \'sles\' AND (devices.os_version LIKE \'15%\')) OR (devices.os_family LIKE \'suse\' AND (devices.os_version LIKE \'15%\')) OR (devices.os_family LIKE \'ubuntu\' AND (devices.os_version LIKE \'20.04%\' OR devices.os_version LIKE \'22.04%\' OR devices.os_version LIKE \'24.04%\'))) GROUP BY devices.id, benchmarks.id','','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Clients With AntiVirus','Software','n','',"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name`, antivirus.status AS `antivirus.status`, antivirus.state AS `antivirus.state`, antivirus.name AS `antivirus.name` FROM devices LEFT JOIN antivirus ON (devices.id = antivirus.device_id AND antivirus.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND antivirus.status = 'UpToDate' AND antivirus.state = 'On' AND (devices.os_family LIKE 'Windows 10' or devices.os_family LIKE 'Windows 11')",'','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Clients Without AntiVirus','Software','n','',"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name` FROM devices LEFT JOIN antivirus ON (devices.id = antivirus.device_id AND antivirus.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND antivirus.status IS NULL AND (devices.os_family LIKE 'Windows 10' or devices.os_family LIKE 'Windows 11') GROUP BY devices.id ORDER BY devices.name",'','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Clients With AntiVirus Not UpToDate','Software','n','',"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name`, antivirus.status AS `antivirus.status`, antivirus.state AS `antivirus.state`, antivirus.name AS `antivirus.name`, MIN( CASE WHEN (antivirus.status = 'On' AND antivirus.state = 'OutOfDate') THEN 1 WHEN (antivirus.status = 'Off' AND antivirus.status = 'UpToDate') THEN 2 WHEN (antivirus.status = 'Off' AND antivirus.state = 'OutOfDate') THEN 3 END) AS `preferred` FROM devices LEFT JOIN antivirus ON (devices.id = antivirus.device_id AND antivirus.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND devices.id NOT IN (SELECT device_id FROM antivirus WHERE antivirus.status = 'UpToDate' AND antivirus.state = 'On') AND antivirus.status IS NOT NULL AND (devices.os_family LIKE 'Windows 10' or devices.os_family LIKE 'Windows 11') GROUP BY devices.id",'','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Clients With Firewall','Software','n','',"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name`, firewall.state AS `firewall.state`, firewall.name AS `firewall.name` FROM devices LEFT JOIN firewall ON (devices.id = firewall.device_id AND firewall.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND firewall.state = 'On' AND (devices.os_family LIKE 'Windows 10' or devices.os_family LIKE 'Windows 11')",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Clients Without Firewall','Software','n','',"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name` FROM devices LEFT JOIN firewall ON (devices.id = firewall.device_id AND firewall.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND firewall.status IS NULL AND (devices.os_family LIKE 'Windows 10' or devices.os_family LIKE 'Windows 11') GROUP BY devices.id ORDER BY devices.name",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Clients With Firewall Disabled','Software','n','',"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name`, firewall.status AS `firewall.status`, firewall.state AS `firewall.state`, firewall.name AS `firewall.name`, MIN( CASE WHEN (firewall.status = 'On') THEN 1 WHEN (firewall.status != 'On') THEN 2 END) AS `preferred` FROM devices LEFT JOIN firewall ON (devices.id = firewall.device_id AND firewall.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND devices.id NOT IN (SELECT device_id FROM firewall WHERE firewall.status = 'UpToDate' AND firewall.state = 'On') AND firewall.status IS NOT NULL AND (devices.os_family LIKE 'Windows 10' or devices.os_family LIKE 'Windows 11') GROUP BY devices.id",'','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Servers Firewalls Installed','Software','n','',"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, software.name AS `software.name`, software.version AS `software.version` FROM devices LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) RIGHT JOIN packages ON (software.name LIKE packages.software_name AND devices.os_group LIKE packages.os) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'firewall' AND devices.os_name LIKE '%Windows Server%' GROUP BY devices.id",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Servers AntiVirus Installed','Software','n','',"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, software.name AS `software.name`, software.version AS `software.version` FROM devices LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) RIGHT JOIN packages ON (software.name LIKE packages.software_name AND devices.os_group LIKE packages.os) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'antivirus' AND devices.os_name LIKE '%Windows Server%' GROUP BY devices.id",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Servers Firewalls Not Installed','Software','n','',"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.id NOT IN (SELECT devices.id FROM devices LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name AND devices.os_group LIKE packages.os) WHERE devices.id IS NOT NULL AND packages.type = 'firewall' AND devices.os_name LIKE '%Server%') AND devices.os_name LIKE '%Windows Server%' GROUP BY devices.id",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Servers AntiVirus Not Installed','Software','n','',"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.id NOT IN (SELECT devices.id FROM devices LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name AND devices.os_group LIKE packages.os) WHERE devices.id IS NOT NULL AND packages.type = 'antivirus' AND devices.os_name LIKE '%Server%') AND devices.os_name LIKE '%Windows Server%' GROUP BY devices.id",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Banned Software','Software','n','',"SELECT devices.id AS `devices.id`, packages.id AS `packages.id`, devices.name AS `Device Name`, devices.ip AS `Device IP`, devices.domain AS `Device Domain`, locations.name AS `Location Name`, software.name AS `Installed Software Name`, packages.software_name AS `Banned Software Name`, devices.os_name AS `Device OS Name`, packages.os AS `Banned Software OS` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'banned' AND (devices.os_group LIKE CONCAT('%', packages.os, '%') OR devices.os_family LIKE CONCAT('%', packages.os, '%') OR devices.os_name LIKE CONCAT('%', packages.os, '%')) GROUP BY devices.id",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Approved Software','Software','n','',"SELECT devices.id AS `devices.id`, packages.id AS `packages.id`, devices.name AS `Device Name`, devices.ip AS `Device IP`, devices.domain AS `Device Domain`, locations.name AS `Location Name`, software.name AS `Installed Software Name`, packages.software_name AS `Approved Software Name`, devices.os_name AS `Device OS Name`, packages.os AS `Approved Software OS` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'approved' AND (devices.os_group LIKE CONCAT('%', packages.os, '%') OR devices.os_family LIKE CONCAT('%', packages.os, '%') OR devices.os_name LIKE CONCAT('%', packages.os, '%')) GROUP BY devices.id",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Ignored Software','Software','n','',"SELECT devices.id AS `devices.id`, packages.id AS `packages.id`, devices.name AS `Device Name`, devices.ip AS `Device IP`, devices.domain AS `Device Domain`, locations.name AS `Location Name`, software.name AS `Installed Software Name`, packages.software_name AS `Ignored Software Name`, devices.os_name AS `Device OS Name`, packages.os AS `Ignored Software OS` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'ignored' AND (devices.os_group LIKE CONCAT('%', packages.os, '%') OR devices.os_family LIKE CONCAT('%', packages.os, '%') OR devices.os_name LIKE CONCAT('%', packages.os, '%')) GROUP BY devices.id",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Devices Without OS Updates for more than 14 Days','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_os_update != '2000-01-01 00:00:00', devices.last_os_update, '') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_os_update < DATE(NOW() - INTERVAL 14 DAY) AND devices.last_os_update != '' AND devices.last_os_update != '2000-01-01 00:00:00' AND (os_group = 'Linux' OR os_group = 'Windows')",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Any Devices Seen less than 7 Days ago','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, devices.last_seen AS `devices.last_seen`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_seen > DATE(NOW() - INTERVAL 7 DAY)",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Any Devices Not Seen for more than 7 Days','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_seen != '2000-01-01 00:00:00', devices.last_seen, '') AS `devices.last_seen`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_seen < DATE(NOW() - INTERVAL 7 DAY)",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Any Devices Not Seen for more than 30 Days','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_seen != '2000-01-01 00:00:00', devices.last_seen, '') AS `devices.last_seen`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_seen < DATE(NOW() - INTERVAL 30 DAY)",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Devices Seen less than 7 Days ago','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, devices.last_seen AS `devices.last_seen`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.os_group = 'Windows' AND devices.last_seen > DATE(NOW() - INTERVAL 7 DAY)",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Devices Not Seen for more than 7 Days','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_seen != '2000-01-01 00:00:00', devices.last_seen, '') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.os_group = 'Windows' AND devices.last_seen < DATE(NOW() - INTERVAL 7 DAY)",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Devices Not Seen for more than 30 Days','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_seen != '2000-01-01 00:00:00', devices.last_seen, '') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.os_group = 'Windows' AND devices.last_seen < DATE(NOW() - INTERVAL 30 DAY)",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Windows 10 All','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND devices.os_family = 'Windows 10'",  '','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Windows 10 Latest Build','Software','n','https://learn.microsoft.com/en-us/windows/release-health/release-information',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '19045.5011' AND devices.os_family = 'Windows 10'", '','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Windows 10 Not Latest Build','Software','n','Use the same build number as Windows 10 Latest Build.',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number < '19045.5011' AND devices.os_family = 'Windows 10'",'','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Windows 11 All','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND devices.os_family = 'Windows 11'",  '','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Windows 11 Latest Build','Software','n','https://learn.microsoft.com/en-us/windows/release-health/windows11-release-information',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '26100.2033' AND devices.os_family = 'Windows 11'", '','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Windows 11 Not Latest Build','Software','n','Use the same build number as Windows 11 Latest Build.',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number < '26100.2033' AND devices.os_family = 'Windows 11'", '','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Windows 2019 All','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND devices.os_family = 'Windows 2019'",  '','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Windows 2019 Latest Build','Software','n','https://learn.microsoft.com/en-us/windows/release-health/windows-server-release-info',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '17763.6414' AND devices.os_family = 'Windows 2019'",'','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Windows 2019 Not Latest Build','Software','n','Use the same build number as Windows 2019 Latest Build.',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number < '17763.6414' AND devices.os_family = 'Windows 2019'",'','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Windows 2022 All','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND devices.os_family = 'Windows 2022'",  '','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Windows 2022 Latest Build','Software','n','https://learn.microsoft.com/en-us/windows/release-health/windows-server-release-info',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '20348.2762' AND devices.os_family = 'Windows 2022'",'','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Windows 2022 Not Latest Build','Software','n','Use the same build number as Windows 2022 Latest Build.',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number < '20348.2762' AND devices.os_family = 'Windows 2022'",'','n','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (null,1,'Unknown Devices Found in the last 7 Days','Software','n','',"WITH RECURSIVE DateRange AS (SELECT DATE(DATE_ADD(NOW(), INTERVAL -7 DAY)) AS StartDate UNION ALL SELECT DATE(DATE_ADD(StartDate, INTERVAL 1 DAY)) FROM DateRange WHERE StartDate < NOW()) SELECT StartDate AS `date`, IF(COUNT(devices.id) > 0, COUNT(devices.id), 0) AS `count` FROM DateRange LEFT JOIN change_log ON (DateRange.StartDate = DATE(change_log.timestamp) AND change_log.db_table = 'devices' AND change_log.db_action = 'create' AND DATE(change_log.timestamp) > DATE_SUB(NOW(), INTERVAL 7 DAY)) LEFT JOIN devices ON (change_log.device_id = devices.id AND devices.type IN ('unknown', 'unidentified') AND devices.org_id IN @orgs) GROUP BY DateRange.StartDate ORDER BY DateRange.StartDate",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Shares Writable by Everyone','Software','n','',"SELECT devices.id AS `devices.id`, share.id AS `share.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, share.name AS `share.name`, share.path AS `share.path`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name` FROM devices LEFT JOIN share ON (devices.id = share.device_id AND share.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND JSON_CONTAINS(users, '{\"Everyone\": [\"Write\"]}', '$')",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Clients Without OS Updates for more than 14 Days','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_os_update != '2000-01-01 00:00:00', devices.last_os_update, '') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_os_update < DATE(NOW() - INTERVAL 14 DAY) AND devices.last_os_update != '' AND devices.last_os_update != '2000-01-01 00:00:00' AND os_family IN ('Windows 10', 'Windows 11')",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Windows Servers Without OS Updates for more than 14 Days','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_os_update != '2000-01-01 00:00:00', devices.last_os_update, '') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_os_update < DATE(NOW() - INTERVAL 14 DAY) AND devices.last_os_update != '' AND devices.last_os_update != '2000-01-01 00:00:00' AND os_family IN ('Windows 2019', 'Windows 2022')",'','y','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Linux Without OS Updates for more than 14 Days','Software','n','',"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_os_update != '2000-01-01 00:00:00', devices.last_os_update, '') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_os_update < DATE(NOW() - INTERVAL 14 DAY) AND devices.last_os_update != '' AND devices.last_os_update != '2000-01-01 00:00:00' AND os_group = 'Linux'",'','y','system','2000-01-01 00:00:00');
/*!40000 ALTER TABLE `queries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `queue`
--

DROP TABLE IF EXISTS `queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `queue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `pid` int(10) NOT NULL DEFAULT '0',
  `status` varchar(20) NOT NULL DEFAULT '',
  `details` text NOT NULL,
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `started_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `queue`
--

LOCK TABLES `queue` WRITE;
/*!40000 ALTER TABLE `queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rack_devices`
--

DROP TABLE IF EXISTS `rack_devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rack_devices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `rack_id` int(10) unsigned DEFAULT NULL,
  `device_id` int(10) unsigned DEFAULT NULL,
  `position` int(10) unsigned NOT NULL DEFAULT '1',
  `height` int(10) unsigned NOT NULL DEFAULT '1',
  `width` int(10) unsigned NOT NULL DEFAULT '1',
  `orientation` enum('front','front-right','front-left','rear','rear-left','rear-right') NOT NULL DEFAULT 'front',
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `rack_id` (`rack_id`),
  CONSTRAINT `rack_devices_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rack_devices_rack_id` FOREIGN KEY (`rack_id`) REFERENCES `racks` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rack_devices`
--

LOCK TABLES `rack_devices` WRITE;
/*!40000 ALTER TABLE `rack_devices` DISABLE KEYS */;
/*!40000 ALTER TABLE `rack_devices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `racks`
--

DROP TABLE IF EXISTS `racks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `racks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `location_id` int(10) unsigned DEFAULT NULL,
  `description` text NOT NULL,
  `building` varchar(200) NOT NULL DEFAULT '',
  `floor` varchar(200) NOT NULL DEFAULT '',
  `room` varchar(200) NOT NULL DEFAULT '',
  `row` varchar(200) NOT NULL DEFAULT '',
  `row_position` varchar(200) NOT NULL DEFAULT '',
  `pod` varchar(200) NOT NULL DEFAULT '',
  `physical_height` int(10) unsigned NOT NULL DEFAULT '2000',
  `physical_width` int(10) unsigned NOT NULL DEFAULT '600',
  `physical_depth` int(10) unsigned NOT NULL DEFAULT '1050',
  `weight_empty` int(10) unsigned NOT NULL DEFAULT '1',
  `weight_current` int(10) unsigned NOT NULL DEFAULT '1',
  `weight_max` int(10) unsigned NOT NULL DEFAULT '1',
  `ru_start` int(10) unsigned NOT NULL DEFAULT '1',
  `ru_height` int(10) unsigned NOT NULL DEFAULT '42',
  `type` varchar(200) NOT NULL DEFAULT '',
  `purpose` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(200) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `series` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(200) NOT NULL DEFAULT '',
  `asset_number` varchar(200) NOT NULL DEFAULT '',
  `asset_tag` varchar(200) NOT NULL DEFAULT '',
  `bar_code` varchar(200) NOT NULL DEFAULT '',
  `power_circuit` varchar(200) NOT NULL DEFAULT '',
  `power_sockets` varchar(200) NOT NULL DEFAULT '',
  `circuit_count` int(10) unsigned NOT NULL DEFAULT '1',
  `btu_total` int(10) unsigned NOT NULL DEFAULT '1',
  `btu_max` int(10) unsigned NOT NULL DEFAULT '1',
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  CONSTRAINT `racks_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `racks`
--

LOCK TABLES `racks` WRITE;
/*!40000 ALTER TABLE `racks` DISABLE KEYS */;
/*!40000 ALTER TABLE `racks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `radio`
--

DROP TABLE IF EXISTS `radio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `radio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `net_index` varchar(200) NOT NULL DEFAULT '',
  `rx_level` varchar(200) NOT NULL DEFAULT '',
  `rx_profile` varchar(200) NOT NULL DEFAULT '',
  `rx_freq` varchar(200) NOT NULL DEFAULT '',
  `rx_power` varchar(200) NOT NULL DEFAULT '',
  `rx_bitrate` varchar(200) NOT NULL DEFAULT '',
  `tx_level` varchar(200) NOT NULL DEFAULT '',
  `tx_profile` varchar(200) NOT NULL DEFAULT '',
  `tx_freq` varchar(200) NOT NULL DEFAULT '',
  `tx_power` varchar(200) NOT NULL DEFAULT '',
  `tx_bitrate` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `radio_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `radio`
--

LOCK TABLES `radio` WRITE;
/*!40000 ALTER TABLE `radio` DISABLE KEYS */;
/*!40000 ALTER TABLE `radio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `permissions` text NOT NULL,
  `ad_group` varchar(100) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (NULL,'admin','This role can change global options.','{\"agents\":\"crud\",\"applications\":\"crud\",\"attributes\":\"crud\",\"baselines\":\"crud\",\"clusters\":\"r\",\"collectors\":\"crud\",\"configuration\":\"crud\",\"dashboards\":\"crud\",\"database\":\"crud\",\"devices\":\"r\",\"executables\":\"r\",\"errors\":\"r\",\"groups\":\"crud\",\"ldap_servers\":\"crud\",\"logs\":\"crud\",\"nmis\":\"crud\",\"orgs\":\"crud\",\"queue\":\"crud\",\"queries\":\"crud\",\"reports\":\"r\",\"roles\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"summaries\":\"crud\",\"tasks\":\"crud\",\"users\":\"crud\",\"widgets\":\"crud\"}','open-audit_roles_admin','system','2000-01-01 00:00:00');
INSERT INTO `roles` VALUES (NULL,'org_admin','This role is used for administration of endpoints that contain an org_id.','{\"agents\":\"crud\",\"applications\":\"crud\",\"attributes\":\"crud\",\"baselines\":\"crud\",\"benchmarks\":\"crud\",\"benchmarks_exceptions\":\"crud\",\"benchmarks_policies\":\"crud\",\"buildings\":\"crud\",\"charts\":\"crud\",\"clouds\":\"crud\",\"clusters\":\"crud\",\"connections\":\"crud\",\"credentials\":\"crud\",\"dashboards\":\"crud\",\"errors\":\"r\",\"floors\":\"crud\",\"queue\":\"cr\",\"summaries\":\"r\",\"devices\":\"crud\",\"discoveries\":\"crud\",\"discovery_scan_options\":\"crud\",\"executables\":\"crud\",\"fields\":\"crud\",\"files\":\"crud\",\"graph\":\"crud\",\"groups\":\"r\",\"integrations\":\"crud\",\"invoice\":\"crud\",\"licenses\":\"crud\",\"locations\":\"crud\",\"networks\":\"crud\",\"orgs\":\"crud\",\"packages\":\"crud\",\"queue\":\"cr\",\"queries\":\"r\",\"racks\":\"crud\",\"rack_devices\":\"crud\",\"reports\":\"r\",\"rooms\":\"crud\",\"rows\":\"crud\",\"rules\":\"crud\",\"scripts\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"tasks\":\"crud\",\"users\":\"r\",\"widgets\":\"r\"}','open-audit_roles_org_admin','system','2000-01-01 00:00:00');
INSERT INTO `roles` VALUES (NULL,'user','A standard role that can read all endpoints that contain an org_id.','{\"agents\":\"r\",\"applications\":\"r\",\"baselines\":\"r\",\"buildings\":\"r\",\"charts\":\"r\",\"clouds\":\"r\",\"clusters\":\"r\",\"connections\":\"r\",\"credentials\":\"r\",\"dashboards\":\"r\",\"summaries\":\"r\",\"devices\":\"r\",\"errors\":\"r\",\"executables\":\"r\",\"floors\":\"r\",\"fields\":\"r\",\"files\":\"r\",\"graph\":\"r\",\"groups\":\"r\",\"invoice\":\"r\",\"licenses\":\"r\",\"locations\":\"r\",\"networks\":\"r\",\"orgs\":\"r\",\"packages\":\"r\",\"queue\":\"cr\",\"queries\":\"r\",\"racks\":\"r\",\"rack_devices\":\"r\",\"reports\":\"r\",\"rooms\":\"r\",\"rows\":\"r\",\"rules\":\"r\",\"search\":\"crud\",\"sessions\":\"crud\",\"widgets\":\"r\"}','open-audit_roles_user','system','2000-01-01 00:00:00');
INSERT INTO `roles` VALUES (NULL,'collector','The collector specific role.','{\"collectors\":\"crud\",\"configuration\":\"r\",\"credentials\":\"crud\",\"dashboards\":\"r\",\"devices\":\"crud\",\"discoveries\":\"crud\",\"discovery_scan_options\":\"crud\",\"locations\":\"crud\",\"networks\":\"crud\",\"orgs\":\"crud\",\"sessions\":\"crud\",\"tasks\":\"crud\",\"users\":\"r\",\"widgets\":\"r\"}','open-audit_roles_collector','system','2000-01-01 00:00:00');
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `destination` varchar(20) NOT NULL DEFAULT '',
  `mask` varchar(20) NOT NULL DEFAULT '',
  `metric` varchar(10) NOT NULL DEFAULT '',
  `next_hop` varchar(40) NOT NULL DEFAULT '',
  `protocol` varchar(10) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `next_hop` (`next_hop`),
  CONSTRAINT `route_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `route`
--

LOCK TABLES `route` WRITE;
/*!40000 ALTER TABLE `route` DISABLE KEYS */;
/*!40000 ALTER TABLE `route` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rules`
--

DROP TABLE IF EXISTS `rules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT '100',
  `inputs` text NOT NULL,
  `outputs` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rules`
--

LOCK TABLES `rules` WRITE;
/*!40000 ALTER TABLE `rules` DISABLE KEYS */;
INSERT INTO `rules` VALUES (1,'Mac Model Match (iMac)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"iMac\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (2,'Mac Model Match (iMacPro)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"iMacPro\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (3,'Mac Model Match (MacBook)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"MacBook\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"laptop\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"laptop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (4,'Mac Model Match (MacBookAir)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"MacBookAir\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"laptop\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"laptop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (5,'Mac Model Match (MacBookPro)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"MacBookPro\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"laptop\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"laptop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (6,'Mac Model Match (MacMini)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"Macmini\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (7,'Mac Model Match (MacPro)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"MacPro\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (8,'Mac Model Match (PowerBook)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"PowerBook\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"laptop\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"laptop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (9,'Mac Model Match (PowerMac)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"PowerMac\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (10,'Mac Model Match (RackMac)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"RackMac\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"server\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"rack\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (11,'Mac Model Match (Xserve)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"Xserve\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"server\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"rack\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (12,'Detect DD-WRT in sysDescr',1,'Set the OS group, OS Name and type based on the sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"dd-wrt\"}]','[{\"table\":\"devices\",\"attribute\":\"os_group\",\"value\":\"Linux\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"os_name\",\"value\":\"DD-WRT\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"router\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (13,'Detect Apple Darwin in sysDescr',1,'Set the manufacturer and OS family based on the sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"Darwin Kernel Version\"}]','[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"value\":\"Apple, Inc.\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"os_family\",\"value\":\"Apple OSX\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (14,'Detect Apple AirPort in sysDescr',1,'Set the manufacturer, model and type based on the sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"Apple AirPort\"}]','[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"value\":\"Apple, Inc.\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"Apple AirPort\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (15,'Detect Buffalo Terrastation in sysDescr',1,'Set the manufacturer, model and type and based on the sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"buffalo terastation\"}]','[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"value\":\"Buffalo\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"nas\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"TeraStation\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (16,'Manufacturer Name TPLink',1,'Set the manufacturer.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"tplink\"}]','[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"value\":\"TP-Link\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (17,'Ubiquiti Model',1,'Set the manufacturer and OS group based on UBNT in model.',100,'[{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"st\",\"value\":\"UBNT \"}]','[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"value\":\"Ubiquiti Networks Inc.\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"value\":\"Linux\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (18,'VoIP Phone guess based on Nmap port',1,'Set the type based on Nmap port 5060.',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"5060\"},{\"table\":\"devices\",\"attribute\":\"snmp_oid\",\"operator\":\"eq\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"voip phone\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (19,'Apple IOS devices',1,'Set attributes based on Nmap port 62078.',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"62078\"}]','[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"value\":\"Apple, Inc.\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"value\":\"Apple IOS\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"os_family\",\"value\":\"Apple IOS\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"os_name\",\"value\":\"Apple IOS\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (20,'Apple iPhone devices',1,'Set attributes based on Nmap port 62078 and hostname contains iphone.',100,'[{\"table\":\"devices\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"iphone\"},{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"62078\"}]','[{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"Apple iPhone\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"iphone\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (21,'Apple iPad devices',1,'Set attributes based on Nmap port 62078 and hostname contains ipad.',100,'[{\"table\":\"devices\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"ipad\"},{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"62078\"}]','[{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"Apple iPad\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"ipad\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (22,'Apple iPod devices',1,'Set attributes based on Nmap port 62078 and hostname contains ipod.',100,'[{\"table\":\"devices\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"ipod\"},{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"62078\"}]','[{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"Apple iPod\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"ipod\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (23,'Android devices',1,'Set attributes based hostname contains android.',100,'[{\"table\":\"devices\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"android\"}]','[{\"table\":\"devices\",\"attribute\":\"os_group\",\"value\":\"Android\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"os_family\",\"value\":\"Android\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"os_name\",\"value\":\"Android\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"android\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (24,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (25,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-LR\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP-LR\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (26,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-Pro\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP-Pro\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (27,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (28,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-EDU\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-EDU\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (29,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-HD\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-HD\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (30,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-Lite\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-Lite\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (31,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-LR\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-LR\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (32,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-PRO\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-Pro\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (33,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-PRO-Gen2\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-Pro gen 2\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (34,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-SHD\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-SHD\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (35,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-Mesh-Pro\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-Mesh-Pro\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (36,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"devices\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-Outdoor\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"UniFi AP-Outdoor\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (37,'Compaq iLO',1,'Set type as a default based on OID.',90,'[{\"table\":\"devices\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.232.9.4.10\"},{\"table\":\"devices\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"remote access controller\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"Compaq iLO\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (38,'Netonix switches default',1,'Set type as a default based on OID.',90,'[{\"table\":\"devices\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.46242\"},{\"table\":\"devices\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"switch\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (39,'Apresia switches default',1,'Set type as a default based on OID.',90,'[{\"table\":\"devices\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.278.1.27\"},{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"switch\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"Apresia\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (40,'Apresia WAPs default',1,'Set type as a default based on OID.',90,'[{\"table\":\"devices\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.278.1.19\"},{\"table\":\"devices\",\"attribute\":\"model\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"Apresia\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (41,'Ceragon Wireless Link default',1,'Set type as a default based on manufacturer.',80,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"Ceragon\"},{\"table\":\"devices\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"wireless link\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (42,'VSS Monitor',1,'Set model and type based on OID.',90,'[{\"table\":\"devices\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.21671.1.2\"},{\"table\":\"devices\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"network device\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"model\",\"value\":\"VSS Monitor\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (43,'Form Factor based on Manufacturer (like VMware)',1,'Set the form factor based on the manufacturer.',90,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"vmware\"}]','[{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"Virtual\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (44,'Form Factor based on Manufacturer (like Parallels)',1,'Set the form factor based on the manufacturer.',90,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"parallels\"}]','[{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"Virtual\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (45,'Form Factor based on Manufacturer (like Systemtechnik)',1,'Set the form factor based on the manufacturer.',90,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"PCS Systemtechnik GmbH\"}]','[{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"Virtual\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (46,'Form Factor based on Manufacturer (like Virtual)',1,'Set the form factor based on the manufacturer.',90,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"virtual\"}]','[{\"table\":\"devices\",\"attribute\":\"form_factor\",\"value\":\"Virtual\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (47,'Class based on Form Factor and OS (Virtual Server)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"devices\",\"attribute\":\"form_factor\",\"operator\":\"eq\",\"value\":\"Virtual\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"Windows\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"virtual server\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (48,'Class based on Form Factor and OS (Physical Server)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"devices\",\"attribute\":\"form_factor\",\"operator\":\"ne\",\"value\":\"Virtual\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"Windows\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"nl\",\"value\":\"Ubiquiti\"},{\"table\":\"devices\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"computer\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"server\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (49,'Class based on Form Factor and OS (Virtual Windows Server)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"devices\",\"attribute\":\"form_factor\",\"operator\":\"eq\",\"value\":\"Virtual\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"devices\",\"attribute\":\"os_name\",\"operator\":\"li\",\"value\":\"Server\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"virtual server\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (50,'Class based on Form Factor and OS (Physical Windows Server)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"devices\",\"attribute\":\"form_factor\",\"operator\":\"ne\",\"value\":\"Virtual\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"devices\",\"attribute\":\"os_name\",\"operator\":\"li\",\"value\":\"Server\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"server\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (51,'Type based on Manufacturer and Hostname (playstation)',1,'Set the type based on the manufacturer and hostname.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"sony\"},{\"table\":\"devices\",\"attribute\":\"hostname\",\"operator\":\"li\",\"value\":\"playstation\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"game console\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (52,'Type based on Manufacturer and DNS Hostname (playstation)',1,'Set the type based on the manufacturer and dns_hostname.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"sony\"},{\"table\":\"devices\",\"attribute\":\"dns_hostname\",\"operator\":\"li\",\"value\":\"playstation\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"game console\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (53,'Form Factor based on Manufacturer (like innotek GmbH)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"devices\",\"attribute\":\"manufacturer\",\"value\":\"innotek GmbH\",\"operator\":\"li\"}]','[{\"value\":\"Virtual\",\"table\":\"devices\",\"attribute\":\"form_factor\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (54,'Manufacturer change HP to Hewlett Packard',1,'Set manufacturer to Hewlett Packard if we receive HP.',100,'[{\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"table\":\"devices\",\"value\":\"HP\"}]','[{\"attribute\":\"manufacturer\",\"table\":\"devices\",\"value\":\"Hewlett Packard\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (55,'Ubiquiti RP-5AC-Gen2 set type',1,'Set type based on model.',100,'[{\"attribute\":\"model\",\"operator\":\"li\",\"table\":\"devices\",\"value\":\"RP-5AC-Gen2\"}]','[{\"attribute\":\"type\",\"table\":\"devices\",\"value\":\"wireless link\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (56,'NMIS Manage for SNMP devices',1,'Set nmis_manage to y if we detect an SNMP OID.',100,'[{\"attribute\":\"snmp_oid\",\"operator\":\"gt\",\"table\":\"devices\",\"value\":\"\"}]','[{\"attribute\":\"nmis_manage\",\"table\":\"devices\",\"value\":\"y\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (57,'LENOVO to Lenovo for Manufacturer',1,'Change the manufacturer from LENOVO to Lenovo.',100,'[{\"attribute\":\"manufacturer\",\"operator\":\"li\",\"table\":\"devices\",\"value\":\"LENOVO\"}]','[{\"attribute\":\"manufacturer\",\"table\":\"devices\",\"value\":\"Lenovo\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (58,'Class based on Form Factor and OS (Virtual Windows Client)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"devices\",\"attribute\":\"form_factor\",\"operator\":\"eq\",\"value\":\"Virtual\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"devices\",\"attribute\":\"os_name\",\"operator\":\"nl\",\"value\":\"%Server%\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"virtual desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
/*!40000 ALTER TABLE `rules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `san`
--

DROP TABLE IF EXISTS `san`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `san` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
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
  KEY `system_id` (`device_id`),
  CONSTRAINT `san_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `options` text NOT NULL,
  `description` text NOT NULL,
  `based_on` varchar(200) NOT NULL DEFAULT '',
  `hash` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scripts`
--

LOCK TABLES `scripts` WRITE;
/*!40000 ALTER TABLE `scripts` DISABLE KEYS */;
INSERT INTO `scripts` VALUES (NULL,'audit_aix.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit AIX config.','audit_aix.sh','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (NULL,'audit_linux.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit Linux config.','audit_linux.sh','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (NULL,'audit_osx.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit OSX config.','audit_osx.sh','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (NULL,'audit_windows.vbs',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit Windows config.','audit_windows.vbs','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (NULL,'audit_esxi.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit ESXi config.','audit_esxi.sh','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (NULL,'audit_solaris.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit Solaris config.','audit_solaris.sh','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (NULL,'audit_hpux.sh',1,'{\"submit_online\":\"n\",\"create_file\":\"y\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit HPUX config.','audit_hpux.sh','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (NULL,'audit_windows.ps1',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit Windows config.','audit_windows.ps1','','system','2000-01-01 00:00:00');
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(200) NOT NULL DEFAULT '',
  `device` varchar(200) NOT NULL DEFAULT '',
  `type` enum('raid','hba','other','san controller','san shelf') NOT NULL DEFAULT 'other',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `scsi_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `full_name` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `version` varchar(100) NOT NULL DEFAULT '',
  `version_string` varchar(100) NOT NULL DEFAULT '',
  `edition` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `port` smallint(5) unsigned NOT NULL DEFAULT '0',
  `certificates` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `server_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `server_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(100) NOT NULL DEFAULT '',
  `parent_name` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
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
  KEY `system_id` (`device_id`),
  CONSTRAINT `server_item_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `executable` text NOT NULL,
  `user` varchar(100) NOT NULL DEFAULT '',
  `start_mode` varchar(200) NOT NULL DEFAULT '',
  `state` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `first_seen` (`first_seen`),
  KEY `last_seen` (`last_seen`),
  KEY `name` (`name`),
  CONSTRAINT `service_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `path` varchar(250) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `users` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `share_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
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
  KEY `system_id` (`device_id`),
  KEY `first_seen` (`first_seen`),
  KEY `last_seen` (`last_seen`),
  KEY `name` (`name`),
  CONSTRAINT `software_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `string` varchar(100) NOT NULL DEFAULT '',
  `rel` varchar(100) NOT NULL DEFAULT '',
  `edition` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `software_key_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `device` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `sound_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `menu_category` varchar(200) NOT NULL DEFAULT 'Device',
  `menu_display` enum('y','n') NOT NULL DEFAULT 'y',
  `table` varchar(100) NOT NULL DEFAULT '',
  `column` varchar(100) NOT NULL DEFAULT '',
  `extra_columns` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `summaries`
--

LOCK TABLES `summaries` WRITE;
/*!40000 ALTER TABLE `summaries` DISABLE KEYS */;
INSERT INTO `summaries` VALUES (NULL,'Device Classes',1,'Device','y','devices','class','','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (NULL,'Device Status',1,'Device','y','devices','status','','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (NULL,'Device Types',1,'Device','y','devices','type','','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (NULL,'DNS Domains',1,'Network','y','devices','dns_domain','','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (NULL,'Form Factors',1,'Device','y','devices','form_factor','devices.form_factor,devices.class','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (NULL,'Manufacturers',1,'Device','y','devices','manufacturer','devices.model','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (NULL,'Operating System Families',1,'Device','y','devices','os_family','','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (NULL,'Server Types',1,'Server','y','server','type','server.name,server.full_name,server.version,server.edition,server.status','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (NULL,'Services',1,'Software','y','service','name','service.name,service.state','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (NULL,'Software',1,'Software','y','software','name','software.name,software.version','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (NULL,'Software Keys',1,'Software','y','software_key','name','software_key.name,software_key.string,software_key.rel,software_key.edition','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (NULL,'Active Directory OUs',1,'Network','y','windows','active_directory_ou','windows.active_directory_ou,windows.client_site_name','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (NULL,'Operating System Names',1,'Device','y','devices','os_name','','system','2000-01-01 00:00:00');
/*!40000 ALTER TABLE `summaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `next_run` varchar(50) NOT NULL DEFAULT '',
  `status` varchar(50) NOT NULL DEFAULT '',
  `last_run` varchar(50) NOT NULL DEFAULT '',
  `last_result` varchar(50) NOT NULL DEFAULT '',
  `creator` varchar(50) NOT NULL DEFAULT '',
  `schedule` varchar(100) NOT NULL DEFAULT '',
  `task` text NOT NULL,
  `state` varchar(10) NOT NULL DEFAULT '',
  `runas` varchar(50) NOT NULL DEFAULT '',
  `comment` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `task_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `sub_resource_id` int(10) unsigned NOT NULL DEFAULT '1',
  `uuid` varchar(100) NOT NULL DEFAULT '',
  `enabled` enum('y','n') NOT NULL DEFAULT 'y',
  `type` varchar(100) NOT NULL DEFAULT 'command',
  `minute` varchar(100) NOT NULL DEFAULT '*',
  `hour` varchar(100) NOT NULL DEFAULT '*',
  `day_of_month` varchar(100) NOT NULL DEFAULT '*',
  `month` varchar(100) NOT NULL DEFAULT '*',
  `day_of_week` varchar(100) NOT NULL DEFAULT '*',
  `delay_minutes` int(10) unsigned NOT NULL DEFAULT '0',
  `expire_minutes` int(10) unsigned NOT NULL DEFAULT '0',
  `first_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `email_address` varchar(100) NOT NULL DEFAULT '',
  `format` varchar(100) NOT NULL DEFAULT '',
  `group_id` int(10) unsigned NOT NULL DEFAULT '0',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usb`
--

DROP TABLE IF EXISTS `usb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `availability` varchar(100) NOT NULL DEFAULT '',
  `class` varchar(100) NOT NULL DEFAULT '',
  `config_manager_error_code` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `device` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `present` varchar(100) NOT NULL DEFAULT '',
  `serial` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `usb_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usb`
--

LOCK TABLES `usb` WRITE;
/*!40000 ALTER TABLE `usb` DISABLE KEYS */;
/*!40000 ALTER TABLE `usb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `caption` varchar(255) NOT NULL DEFAULT '',
  `sid` varchar(100) NOT NULL DEFAULT '',
  `domain` varchar(100) NOT NULL DEFAULT '',
  `disabled` varchar(20) NOT NULL DEFAULT '',
  `full_name` varchar(100) NOT NULL DEFAULT '',
  `password_changeable` varchar(20) NOT NULL DEFAULT '',
  `password_expires` varchar(20) NOT NULL DEFAULT '',
  `password_required` varchar(20) NOT NULL DEFAULT '',
  `password_disabled` varchar(20) NOT NULL DEFAULT '',
  `password_last_changed` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `status` varchar(100) NOT NULL DEFAULT '',
  `keys` text NOT NULL,
  `home` text NOT NULL,
  `shell` text NOT NULL,
  `type` enum('local','domain','database','application','other') NOT NULL DEFAULT 'local',
  `last_logon` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `user_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `sid` varchar(100) NOT NULL DEFAULT '',
  `members` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `user_group_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_group`
--

LOCK TABLES `user_group` WRITE;
/*!40000 ALTER TABLE `user_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `password` varchar(250) NOT NULL DEFAULT '',
  `full_name` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`roles`)),
  `orgs` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`orgs`)),
  `lang` enum('cs','de','en','es','fr','pt-br','zh-tw') NOT NULL DEFAULT 'en',
  `active` varchar(1) NOT NULL DEFAULT 'y',
  `ldap` text NOT NULL,
  `type` enum('agent','collector','user') NOT NULL DEFAULT 'user',
  `dashboard_id` int(10) unsigned DEFAULT '1',
  `devices_default_display_columns` text NOT NULL,
  `toolbar_style` enum('','icon','text','icontext') NOT NULL DEFAULT 'icontext',
  `list_table_format` enum('','compact') NOT NULL DEFAULT '',
  `access_token` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`access_token`)),
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_id_index` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin',1,'0ab0a153e5bbcd80c50a02da8c97f3c87686eb8512f5457d30e328d2d4448c8968e9f4875c2eb61356197b851dd33f90658b20b32139233b217be54d903ca3b6','Administrator','admin@openaudit','[\"admin\",\"org_admin\"]','[1]','en','y','','user',1,'','icontext','','[]','system','2000-01-01 00:00:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `variable`
--

DROP TABLE IF EXISTS `variable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `variable` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `program` varchar(100) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `variable_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `device` varchar(100) NOT NULL DEFAULT '',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `caption` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `video_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `guest_device_id` int(10) unsigned DEFAULT NULL,
  `vm_ident` varchar(50) NOT NULL DEFAULT '',
  `type` varchar(50) NOT NULL DEFAULT '',
  `uuid` text NOT NULL,
  `vm_group` text NOT NULL,
  `config_file` text NOT NULL,
  `memory_count` int(12) unsigned NOT NULL DEFAULT '0',
  `cpu_count` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT '',
  `icon` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `vm_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `end_date` date NOT NULL DEFAULT '2000-01-01',
  `start_date` date NOT NULL DEFAULT '2000-01-01',
  `retrieved` text NOT NULL,
  `vendor` varchar(200) NOT NULL DEFAULT '',
  `tag_1` varchar(200) NOT NULL DEFAULT '',
  `tag_2` varchar(200) NOT NULL DEFAULT '',
  `tag_3` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  CONSTRAINT `warranty_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warranty`
--

LOCK TABLES `warranty` WRITE;
/*!40000 ALTER TABLE `warranty` DISABLE KEYS */;
/*!40000 ALTER TABLE `warranty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgets`
--

DROP TABLE IF EXISTS `widgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `widgets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `type` enum('line','pie','traffic','') DEFAULT 'line',
  `table` varchar(50) NOT NULL DEFAULT '',
  `primary` varchar(50) NOT NULL DEFAULT '',
  `secondary` varchar(50) NOT NULL DEFAULT '',
  `ternary` varchar(50) NOT NULL DEFAULT '',
  `dataset_title` varchar(200) NOT NULL DEFAULT '',
  `group_by` varchar(100) NOT NULL DEFAULT '',
  `where` text NOT NULL,
  `limit` smallint(6) NOT NULL DEFAULT '0',
  `options` text NOT NULL,
  `sql` text NOT NULL,
  `link` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgets`
--

LOCK TABLES `widgets` WRITE;
/*!40000 ALTER TABLE `widgets` DISABLE KEYS */;
INSERT INTO `widgets` VALUES (1,'New Devices Discovered per Day',1,'','line','','devices','create','','Devices','','',30,'','','devices?devices.first_seen=LIKE@date&properties=devices.id,devices.icon,devices.type,devices.os_group,devices.name,devices.domain,devices.ip,devices.identification,devices.manufacturer,devices.os_family,devices.status,devices.first_seen','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (2,'New Software Discovered per Day',1,'','line','','software','create','','Software','','',30,'','','devices?change_log.db_table=software&change_log.db_action=create&change_log.timestamp=LIKE@date&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,change_log.details,change_log.timestamp','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (3,'Devices Not Seen (0-180+ Days)',1,'','pie','','','','','','','',0,'','SELECT IF ( devices.last_seen = \'2000-01-01\', \'unknown\', ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 180 day), \'180 Days or more\', ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 150 day), \'150-180 days\', ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 120 day), \'120-150 days\', ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 90 day), \'90-120 days\', ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 60 day), \'60-90 days\', ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 30 day), \'30-60 days\', \'7-30 days\' ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( devices.last_seen = \'2000-01-01\', \'devices.last_seen=\', ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 180 day), CONCAT(\'devices.last_seen=<\', DATE(NOW() - INTERVAL 180 day)), ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 150 day), CONCAT(\'devices.last_seen=>\', DATE(NOW() - INTERVAL 180 day), \'&devices.last_seen=<\', DATE(NOW() - INTERVAL 150 day)), ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 120 day), CONCAT(\'devices.last_seen=>\', DATE(NOW() - INTERVAL 150 day), \'&devices.last_seen=<\', DATE(NOW() - INTERVAL 120 day)), ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 90 day), CONCAT(\'devices.last_seen=>\', DATE(NOW() - INTERVAL 120 day), \'&devices.last_seen=<\', DATE(NOW() - INTERVAL 90 day)), ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 60 day), CONCAT(\'devices.last_seen=>\', DATE(NOW() - INTERVAL 90 day), \'&devices.last_seen=<\', DATE(NOW() - INTERVAL 60 day)), ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 30 day), CONCAT(\'devices.last_seen=>\', DATE(NOW() - INTERVAL 60 day), \'&devices.last_seen=<\', DATE(NOW() - INTERVAL 30 day)), CONCAT(\'devices.last_seen=>\', DATE(NOW() - INTERVAL 30 day), \'&devices.last_seen=<\', DATE(NOW() - INTERVAL 7 day))) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(devices.id) AS `count` FROM devices WHERE @filter AND DATE(devices.last_seen) < DATE(NOW() - INTERVAL 7 day) GROUP BY `my_name`','devices?@description&properties=devices.id,devices.type,devices.name,devices.ip,devices.os_family,devices.last_seen,devices.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (4,'Devices by Type',1,'','pie','','devices.type','','','','','',0,'','','','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (5,'Devices by OS Family',1,'','pie','','devices.os_family','','','','','',0,'','','','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (6,'Devices by Manufacturer',1,'','pie','','devices.manufacturer','','','','','',0,'','','','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (7,'Software Keys',1,'','pie','','software_key.name','','','','','',0,'','','devices?software_key.name=@name&properties=devices.id,devices.icon,devices.name,devices.domain,devices.ip,software_key.name,software_key.string','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (8,'Devices by Status',1,'','pie','','devices.status','','','','','',0,'','','','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (9,'Devices by Function',1,'','pie','','devices.function','','','','','',0,'','','devices?devices.function=@name&properties=devices.id,devices.icon,devices.type,devices.os_group,devices.name,devices.domain,devices.ip,devices.os_family,devices.function,devices.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (10,'Servers',1,'','pie','','server.name','','','','','',0,'','','devices?server.name=@name&properties=devices.id,devices.icon,devices.type,devices.os_group,devices.name,devices.domain,devices.ip,devices.os_family,server.name,server.version,server.version_string,server.port','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (11,'End of Warranty (0-2+ Years)',1,'','pie','','','','','','','',0,'','SELECT if ( devices.warranty_expires = \'2000-01-01\', \'unknown\', ( if ( devices.warranty_expires < DATE(NOW()), \'expired\', ( if ( devices.warranty_expires > DATE(NOW() + INTERVAL 730 day), \'2 Years or more\', ( if ( devices.warranty_expires > DATE(NOW() + INTERVAL 365 day), \'1-2 years\', ( if ( devices.warranty_expires > DATE(NOW() + INTERVAL 270 day), \'270-365 days\', ( if ( devices.warranty_expires > DATE(NOW() + INTERVAL 180 day), \'180-270 days\', ( if ( devices.warranty_expires > DATE(NOW() + INTERVAL 90 day), \'90-180 days\', \'Less than 90 Days\' ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, if ( devices.warranty_expires = \'2000-01-01\', \'devices.warranty_expires=2000-01-01\', ( if ( devices.warranty_expires < DATE(NOW()), CONCAT(\'devices.warranty_expires=<\', DATE(NOW())), ( if ( devices.warranty_expires > DATE(NOW() + INTERVAL 730 day), CONCAT(\'devices.warranty_expires=>\', DATE(NOW() + INTERVAL 730 day)), ( if ( devices.warranty_expires > DATE(NOW() + INTERVAL 365 day), CONCAT(\'devices.warranty_expires=<\', DATE(NOW() + INTERVAL 730 day), \'&devices.warranty_expires=>\', DATE(NOW() + INTERVAL 365 day)), ( if ( devices.warranty_expires > DATE(NOW() + INTERVAL 270 day), CONCAT(\'devices.warranty_expires=<\', DATE(NOW() + INTERVAL 365 day), \'&devices.warranty_expires=>\', DATE(NOW() + INTERVAL 270 day), \'&devices.warranty_expires=!=2000-01-01\'), ( if ( devices.warranty_expires > DATE(NOW() + INTERVAL 180 day), CONCAT(\'devices.warranty_expires=<\', DATE(NOW() + INTERVAL 270 day), \'&devices.warranty_expires=>\', DATE(NOW() + INTERVAL 180 day), \'&devices.warranty_expires=!=2000-01-01\'), ( if ( devices.warranty_expires > DATE(NOW() + INTERVAL 90 day), CONCAT(\'devices.warranty_expires=<\', DATE(NOW() + INTERVAL 180 day), \'&devices.warranty_expires=>\', DATE(NOW() + INTERVAL 90 day), \'&devices.warranty_expires=!=2000-01-01\'), CONCAT(\'devices.warranty_expires=<\', DATE(NOW() + INTERVAL 90 day), \'&devices.warranty_expires=>\', DATE(NOW()), \'&devices.warranty_expires=!=2000-01-01\' ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(devices.id) AS `count` FROM devices WHERE @filter GROUP BY `my_name`','devices?devices.warranty_expires=!=2000-01-01&properties=devices.id,devices.icon,devices.type,devices.os_group,devices.name,devices.domain,devices.ip,devices.os_family,devices.warranty_expires','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (12,'Devices by Class',1,'','pie','','devices.class','','','','','',0,'','','devices?devices.class=@name&properties=devices.id,devices.icon,devices.type,devices.os_group,devices.name,devices.domain,devices.ip,devices.os_family,devices.class,devices.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (13,'Devices by DNS Domain',1,'','pie','','devices.dns_domain','','','','','',0,'','','devices?devices.dns_domain=@name&properties=devices.id,devices.icon,devices.type,devices.os_group,devices.name,devices.dns_domain,devices.domain,devices.ip,devices.os_family,devices.os_group','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (14,'Devices by OS Group',1,'','pie','','devices.os_group','','','','','',0,'','','devices?devices.os_group=@name&properties=devices.id,devices.icon,devices.type,devices.os_group,devices.name,devices.domain,devices.ip,devices.os_family','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (15,'Devices by Location',1,'','pie','','','','','','','',0,'','SELECT locations.name as `name`, locations.id AS `description`, count(devices.id) AS `count` FROM locations LEFT JOIN devices ON (locations.id = devices.location_id) WHERE @filter GROUP BY locations.name, locations.id','devices?devices.location_id=@description&properties=devices.id,devices.icon,devices.type,devices.os_group,devices.name,devices.domain,devices.ip,devices.os_family,devices.location_id','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (16,'Devices by Collector',1,'','pie','','','','','','','',0,'','SELECT IF (collectors.name IS NULL, \'localhost\', collectors.name) AS `my_name`, IF(collectors.uuid IS NULL, \'\', collectors.uuid) AS `description`, COUNT(devices.id) AS `count` FROM `devices` LEFT JOIN `collectors` ON (collectors.uuid = devices.collector_uuid) WHERE @filter GROUP BY `my_name`, collectors.uuid','devices?devices.collector_uuid=@description','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (17,'Disk Manufacturers',1,'','pie','','disk.manufacturer','','','','','',0,'','','devices?disk.manufacturer=@name&properties=devices.id,devices.icon,devices.type,devices.os_group,devices.name,devices.domain,devices.ip,devices.os_group,disk.manufacturer,disk.model,disk.size','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (18,'Processor Models',1,'','pie','','processor.description','','','','','',0,'','','devices?processor.description=LIKE@name&properties=devices.id,devices.icon,devices.type,devices.os_group,devices.name,devices.ip,devices.os_group,devices.manufacturer,processor.description,processor.physical_count,processor.core_count,processor.logical_count','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (19,'Active Directory Sites',1,'','pie','','windows.client_site_name','','','','','',0,'','','devices?windows.client_site_name=@name&properties=devices.id,devices.icon,devices.os_group,devices.name,devices.ip,windows.client_site_name,windows.domain_controller_name,windows.active_directory_ou','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (20,'Active Directory OUs',1,'','pie','','windows.active_directory_ou','','','','','',0,'','','devices?windows.active_directory_ou=@name&properties=devices.id,devices.icon,devices.os_group,devices.name,devices.ip,windows.client_site_name,windows.domain_controller_name,windows.active_directory_ou','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (21,'Devices by Network',1,'','pie','','','','','','','',0,'','SELECT ip.network AS `my_name`, COUNT(ip.device_id) AS `count` FROM devices LEFT JOIN ip ON (devices.id = ip.device_id AND ip.current = \'y\') WHERE @filter AND ip.network != \'\' GROUP BY `my_name`','devices?ip.network=@name&properties=devices.id,devices.icon,devices.type,devices.os_group,devices.name,ip.ip,ip.mac,ip.network','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (22,'Devices Audited per Day',1,'','line','','','','','Devices','','',30,'','SELECT DATE(audit_log.timestamp) AS `date`, COUNT(DISTINCT audit_log.device_id) AS `count` FROM `audit_log` LEFT JOIN `devices` ON (audit_log.device_id = devices.id) WHERE DATE(audit_log.timestamp) >  DATE_SUB(CURDATE(), INTERVAL 30 DAY) GROUP BY DATE(audit_log.timestamp)','devices?audit_log.timestamp=like@date%&groupby=devices.id','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (23,'End Of Life (0-90+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( devices.end_of_life = \'2000-01-01\', \'Unknown\', ( IF ( devices.end_of_life < DATE(NOW()), \'Expired\', ( IF ( devices.end_of_life > DATE(NOW() + INTERVAL 90 day), \'90+ Days\', ( IF ( devices.end_of_life > DATE(NOW() + INTERVAL 60 day), \'60-90 Days\', ( IF ( devices.end_of_life > DATE(NOW() + INTERVAL 30 day), \'30-60 Days\', ( IF ( devices.end_of_life > DATE(NOW()), \'0-30 days\', \'Less than 30 Days\' ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( devices.end_of_life = \'2000-01-01\', \'devices.end_of_life=2000-01-01\', ( IF ( devices.end_of_life < DATE(NOW()), CONCAT(\'devices.end_of_life=!=2000-01-01&devices.end_of_life=<\', DATE(NOW())), ( IF ( devices.end_of_life > DATE(NOW() + INTERVAL 90 day), CONCAT(\'devices.end_of_life=>\', DATE(NOW() + INTERVAL 90 day)), ( IF ( devices.end_of_life > DATE(NOW() + INTERVAL 60 day), CONCAT(\'devices.end_of_life=<\', DATE(NOW() + INTERVAL 90 day), \'&devices.end_of_life=>\', DATE(NOW() + INTERVAL 60 day)), ( IF ( devices.end_of_life > DATE(NOW() + INTERVAL 30 day), CONCAT(\'devices.end_of_life=<\', DATE(NOW() + INTERVAL 60 day), \'&devices.end_of_life=>\', DATE(NOW() + INTERVAL 30 day)), (  CONCAT(\'devices.end_of_life=<\', DATE(NOW() + INTERVAL 30 day), \'&devices.end_of_life=>\', DATE(NOW())) ) ) ) ) ) ) ) ) ) ) AS `my_description`,  count(devices.id) AS `count` FROM devices WHERE @filter GROUP BY `my_name`, `my_description`','devices?@description&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,devices.end_of_life,devices.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (24,'End of Service (0-90+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( devices.end_of_service = \'2000-01-01\', \'Unknown\', ( IF ( devices.end_of_service < DATE(NOW()), \'Expired\', ( IF ( devices.end_of_service > DATE(NOW() + INTERVAL 90 day), \'90+ Days\', ( IF ( devices.end_of_service > DATE(NOW() + INTERVAL 60 day), \'60-90 Days\', ( IF ( devices.end_of_service > DATE(NOW() + INTERVAL 30 day), \'30-60 Days\', ( IF ( devices.end_of_service > DATE(NOW()), \'0-30 days\', \'Less than 30 Days\' ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( devices.end_of_service = \'2000-01-01\', \'devices.end_of_service=2000-01-01\', ( IF ( devices.end_of_service < DATE(NOW()), CONCAT(\'devices.end_of_service=<\', DATE(NOW()), \'&devices.end_of_service=!=2000-01-01\'), ( IF ( devices.end_of_service > DATE(NOW() + INTERVAL 90 day), CONCAT(\'devices.end_of_service=>\', DATE(NOW() + INTERVAL 90 day)), ( IF ( devices.end_of_service > DATE(NOW() + INTERVAL 60 day), CONCAT(\'devices.end_of_service=<\', DATE(NOW() + INTERVAL 90 day), \'&devices.end_of_service=>\', DATE(NOW() + INTERVAL 60 day)), ( IF ( devices.end_of_service > DATE(NOW() + INTERVAL 30 day), CONCAT(\'devices.end_of_service=<\', DATE(NOW() + INTERVAL 60 day), \'&devices.end_of_service=>\', DATE(NOW() + INTERVAL 30 day)), ( CONCAT(\'devices.end_of_service=<\', DATE(NOW() + INTERVAL 30 day), \'&devices.end_of_service=>\', DATE(NOW())) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(devices.id) AS `count` FROM devices WHERE @filter GROUP BY `my_name`, `my_description`','devices?@description&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,devices.end_of_service,devices.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (25,'Device Age (0-3+ Years)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( devices.purchase_date = \'2000-01-01\', \'unknown\', ( IF ( devices.purchase_date < DATE(NOW() - INTERVAL 3 year), \'3+ Years\', ( IF ( devices.purchase_date < DATE(NOW() - INTERVAL 2 year), \'2-3 Years\', ( IF ( devices.purchase_date < DATE(NOW() - INTERVAL 1 year), \'1-2 Years\', \'Less Than 1 Year\' ) ) ) ) ) ) ) AS `my_name`, IF ( devices.purchase_date = \'2000-01-01\', \'devices.purchase_date=2000-01-01\', ( IF ( devices.purchase_date < DATE(NOW() - INTERVAL 3 year), CONCAT(\'devices.purchase_date=<\', DATE(NOW() - INTERVAL 3 year), \"&devices.purchase_date=>2000-01-01\"), ( IF ( devices.purchase_date < DATE(NOW() - INTERVAL 2 year), CONCAT(\'devices.purchase_date=>\', DATE(NOW() - INTERVAL 3 year), \'&devices.purchase_date=<\', DATE(NOW() - INTERVAL 2 year)), ( IF ( devices.purchase_date < DATE(NOW() - INTERVAL 1 year), CONCAT(\'devices.purchase_date=>\', DATE(NOW() - INTERVAL 2 year), \'&devices.purchase_date=<\', DATE(NOW() - INTERVAL 1 year)), CONCAT(\'devices.purchase_date=>\', DATE(NOW() - INTERVAL 1 year)) ) ) ) ) ) ) ) AS `my_description`, count(devices.id) AS `count` FROM devices WHERE @filter GROUP BY `my_name`','devices?@description&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,devices.manufacturer,devices.os_family,devices.purchase_date,devices.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (26,'End of Lease (0-90+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( devices.lease_expiry_date = \'2000-01-01\' OR devices.lease_expiry_date = \'0000-00-00\', \'Unknown\', ( IF ( devices.lease_expiry_date < DATE(NOW()), \'Expired\', ( IF ( devices.lease_expiry_date > DATE(NOW() + INTERVAL 90 day), \'90+ Days\', ( IF ( devices.lease_expiry_date > DATE(NOW() + INTERVAL 60 day), \'60-90 Days\', ( IF ( devices.lease_expiry_date > DATE(NOW() + INTERVAL 30 day), \'30-60 Days\', \'Less than 30 Days\' ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( devices.lease_expiry_date = \'2000-01-01\' OR devices.lease_expiry_date = \'0000-00-00\', \'devices.lease_expiry_date=2000-01-01\', ( IF ( devices.lease_expiry_date < DATE(NOW()), CONCAT(\'devices.lease_expiry_date=<\', DATE(NOW()), \'&devices.lease_expiry_date=!=2000-01-01\'), ( IF ( devices.lease_expiry_date > DATE(NOW() + INTERVAL 90 day), CONCAT(\'devices.lease_expiry_date=>\', DATE(NOW() + INTERVAL 90 day)), ( IF ( devices.lease_expiry_date > DATE(NOW() + INTERVAL 60 day), CONCAT(\'devices.lease_expiry_date=<\', DATE(NOW() + INTERVAL 90 day), \'&devices.lease_expiry_date=>\', DATE(NOW() + INTERVAL 60 day)), ( IF ( devices.lease_expiry_date > DATE(NOW() + INTERVAL 30 day), CONCAT(\'devices.lease_expiry_date=<\', DATE(NOW() + INTERVAL 60 day), \'&devices.lease_expiry_date=>\', DATE(NOW() + INTERVAL 30 day)), ( CONCAT(\'devices.lease_expiry_date=<\', DATE(NOW() + INTERVAL 30 day), \'&devices.lease_expiry_date=>\', DATE(NOW())) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(devices.id) AS `count` FROM devices WHERE @filter GROUP BY `my_name`, `my_description`','devices?@description&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,devices.manufacturer,devices.os_family,devices.lease_expiry_date,devices.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (27,'Hardware Additions by Day',1,'Any items in the following tables that are new - bios, disk, memory, module, monitor, motherboard, network, optical, partition, processor, san, scsi, sound, video.','line','','devices','create','','Devices','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `devices` ON (`devices`.`id` = `change_log`.`device_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'bios\', \'disk\', \'memory\', \'module\', \'monitor\', \'motherboard\', \'network\', \'optical\', \'partition\', \'processor\', \'san\', \'scsi\', \'sound\', \'video\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?change_log.db_table=in(\'bios\',\'disk\',\'memory\',\'module\',\'monitor\',\'motherboard\',\'network\',\'optical\',\'partition\',;processor\',\'san\',\'scsi\',\'sound\',\'video\')&change_log.timestamp=like@date&change_log.db_action=create&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,change_log.details,change_log.timestamp','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (28,'Settings Additions by Day',1,'Any items in the following tables that are new - dns, file, ip, log, pagefile, print_queue, route, share, task, user, user_group, variable, vm, windows.','line','','devices','create','','Devices','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `devices` ON (`devices`.`id` = `change_log`.`device_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'dns\', \'file\', \'ip\', \'log\', \'pagefile\', \'print_queue\', \'route\', \'share\', \'task\', \'user\', \'user_group\', \'variable\', \'vm\', \'windows\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?change_log.db_table=in(\'dns\',\'file\',\'ip\',\'log\',\'pagefile\',\'print_queue\',\'route\',\'share\',\'task\',\'user\',\'user_group\',\'variable\',\'vm\',\'windows\')&change_log.timestamp=like@date&change_log.db_action=create&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,change_log.details,change_log.timestamp','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (29,'Software Additions by Day',1,'Any items in the following tables that are new - server, server_item, service, software, software_key.','line','','devices','create','','Devices','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `devices` ON (`devices`.`id` = `change_log`.`device_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'server\', \'server_item\', \'service\', \'software\', \'software_key\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?change_log.db_table=in(\'server\',\'server_item\',\'service\',\'software\',\'software_key\')&change_log.timestamp=like@date&change_log.db_action=create&properties=devices.id,devices.icon,devices.ip,devices.name,devices.os_family,change_log.details,change_log.timestamp','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (30,'Devices by Org',1,'Devies assigned by Org','pie','','','','','Devices','','',0,'','SELECT orgs.name as `name`, orgs.id AS `description`, count(devices.id) AS `count` FROM orgs LEFT JOIN devices ON (orgs.id = devices.org_id) WHERE @filter GROUP BY orgs.name, orgs.id','devices?devices.org_id=@description','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (31,'Application Services',1,'Devices by defined Application','pie','','','','','Devices','','',0,'','SELECT applications.name AS `my_name`, COUNT(application.device_id) AS `count`, applications.id AS `my_description` FROM applications LEFT JOIN application ON (applications.id = application.application_id) LEFT JOIN `devices` ON (application.device_id = devices.id) WHERE @filter GROUP BY `my_name`, applications.id','devices?application.application_id=@description','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (32,'Devices Not Seen (1-7+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( DATE(devices.last_seen) = \'2000-01-01\', \'unknown\', ( IF ( DATE(devices.last_seen) < DATE(NOW() - INTERVAL 6 day), \'More than 7 Days\', ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 6 day), \'7 days\', ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 5 day), \'6 days\', ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 4 day), \'5 days\', ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 3 day), \'4 days\', ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 2 day), \'3 days\', ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 1 day), \'2 days\', ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 0 day), \'1 day\', \'\') ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( DATE(devices.last_seen) = \'2000-01-01\', \'devices.last_seen=2000-01-01\', ( IF ( DATE(devices.last_seen) < DATE(NOW() - INTERVAL 6 day), CONCAT(\'devices.last_seen=<\', DATE(NOW() - INTERVAL 6 day)), ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 6 day), CONCAT(\'devices.last_seen=LIKE\', DATE(NOW() - INTERVAL 6 day)), ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 5 day), CONCAT(\'devices.last_seen=LIKE\', DATE(NOW() - INTERVAL 5 day)), ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 4 day), CONCAT(\'devices.last_seen=LIKE\', DATE(NOW() - INTERVAL 4 day)), ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 3 day), CONCAT(\'devices.last_seen=LIKE\', DATE(NOW() - INTERVAL 3 day)), ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 2 day), CONCAT(\'devices.last_seen=LIKE\', DATE(NOW() - INTERVAL 2 day)), ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 1 day), CONCAT(\'devices.last_seen=LIKE\', DATE(NOW() - INTERVAL 1 day)), ( IF ( DATE(devices.last_seen) = DATE(NOW() - INTERVAL 0 day), CONCAT(\'devices.last_seen=LIKE\', DATE(NOW() - INTERVAL 0 day)), \'\' ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(devices.id) AS `count` FROM devices WHERE @filter GROUP BY `my_name`','devices?@description','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (33,'Devices by Cloud Type',1,'','pie','','devices.instance_provider','','','Devices','','devices.instance_provider != \'\'',0,'','','','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (34,'Devices per Cloud',1,'','pie','','','','','Devices','','',0,'','SELECT clouds.name as `name`, clouds.id AS `description`, count(devices.id) AS `count` FROM clouds LEFT JOIN devices ON (clouds.id = devices.cloud_id) WHERE @filter AND devices.cloud_id IS NOT NULL GROUP BY clouds.name, clouds.id','devices?devices.cloud_id=@description&properties=devices.id,devices.icon,devices.type,devices.name,devices.domain,devices.ip,devices.os_family,devices.status,devices.instance_type,instance_state','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (35,'Devices by Cloud Network',1,'','pie','','','','','Devices','','',0,'','SELECT IF(networks.name = networks.network, networks.network, CONCAT(networks.network, \' (\', networks.name, \')\')) as `name`, networks.network AS `description`, count(devices.id) AS `count` FROM networks LEFT JOIN ip ON (ip.network = networks.network and ip.current = \'y\') LEFT JOIN devices ON (ip.device_id = devices.id) WHERE @filter AND networks.options != \'\' GROUP BY networks.network, networks.name ORDER BY networks.network','devices?ip.network=@description&properties=devices.id,devices.icon,devices.type,devices.name,devices.domain,devices.ip,devices.os_family,devices.status,devices.instance_type,instance_state','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (36,'Devices by Cloud Region',1,'','pie','','','','','Devices','','',0,'','SELECT CONCAT(clouds.type, \' - \', locations.name) as `name`, locations.id AS `description`, count(devices.id) AS `count` FROM locations LEFT JOIN devices ON (locations.id = devices.location_id) LEFT JOIN clouds ON (devices.cloud_id = clouds.id) WHERE @filter AND devices.cloud_id IS NOT NULL AND locations.type = \'Cloud\' GROUP BY devices.location_id, clouds.type','devices?devices.location_id=@description&properties=devices.id,devices.icon,devices.type,devices.name,devices.domain,devices.ip,devices.os_family,devices.status,devices.instance_type,instance_state','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (37,'Devices by Instance Type',1,'','pie','','','','','Devices','','',0,'','SELECT CONCAT(clouds.type, \' - \', devices.instance_type) as `name`, devices.instance_type AS `description`, count(devices.id) AS `count` FROM devices LEFT JOIN clouds ON (devices.cloud_id = clouds.id) WHERE @filter AND devices.instance_type != \'\' GROUP BY devices.instance_type, clouds.type','devices?devices.instance_type=@description&properties=devices.id,devices.icon,devices.type,devices.name,devices.domain,devices.ip,devices.os_family,devices.status,devices.instance_type,instance_state','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (38,'Cloud Devices Audited per Day',1,'','line','','','','','Devices','','',0,'','SELECT DATE(audit_log.timestamp) AS `date`, COUNT(DISTINCT audit_log.device_id) AS `count` FROM `audit_log` LEFT JOIN `devices` ON (audit_log.device_id = devices.id) WHERE @filter AND DATE(audit_log.timestamp) >  DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND devices.cloud_id != \'\' GROUP BY DATE(audit_log.timestamp)','devices?audit_log.timestamp=like@date&properties=devices.id,devices.icon,devices.type,devices.name,devices.domain,devices.ip,devices.identification,devices.os_family,devices.status&groupby=audit_log.device_id&devices.cloud_id=!=','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (39,'Cloud Instances by Org and Type',1,'','pie','','','','','Devices','','',0,'','SELECT CONCAT(orgs.name, \' - \', devices.instance_type) as `name`, CONCAT(devices.instance_type, \'&devices.org_id=\', orgs.id) AS `description`, count(devices.id) AS `count` FROM devices LEFT JOIN orgs ON (orgs.id = devices.org_id) WHERE @filter AND devices.cloud_id != \'\' GROUP BY devices.org_id, devices.instance_type','devices?devices.instance_type=@description&properties=devices.id,devices.icon,devices.type,devices.name,devices.domain,devices.ip,devices.os_family,devices.status,devices.instance_type,instance_state','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (40,'Last Seen By',1,'','pie','','devices.last_seen_by','','','Devices Last Seen By','','',0,'','','devices?devices.last_seen_by=@name&properties=devices.id,devices.icon,devices.type,devices.os_group,devices.name,devices.domain,devices.ip,devices.identification,devices.manufacturer,devices.os_family,devices.last_seen_by,devices.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (41,'Windows Clients AntiVirus Status',1,'Windows Clients AntiVirus Status.','traffic','','48','49','47','ANTIVIRUS','Windows 10 & 11','fa-solid fa-shield-virus',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (42,'Windows Clients Firewall Status',1,'','traffic','','51','52','50','FIREWALL','Windows 10 & 11','fa-solid fa-shield-halved',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (43,'Windows 11 Latest Build',1,'','traffic','','72','','71','LATEST BUILD WINDOWS 11','Without / With the latest Windows 11','fa-brands fa-windows',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (44,'Windows 10 Latest Build',1,'','traffic','','69','','68','LATEST BUILD WINDOWS 10','Without / With the latest Windows 10','fa-brands fa-windows',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (45,'Windows 2019 Server Latest Build',1,'','traffic','','75','','74','LATEST BUILD SERVER 2019','Without / With the latest Windows 2019','fa-brands fa-windows',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (46,'Windows 2022 Server Latest Build',1,'','traffic','','78','','77','LATEST BUILD SERVER 2022','Without / With the latest Windows 2022','fa-brands fa-windows',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (47,'Windows Server Firewall Status',1,'','traffic','','55','','53','FIREWALL','Windows Server','fa-solid fa-shield-halved',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (48,'Windows Server AntiVirus Status',1,'','traffic','','56','','54','ANTIVIRUS','Windows Server','fa-solid fa-shield-virus',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (49,'Software',1,'','traffic','','57','59','58','SOFTWARE','Banned / Ignored / Approved','fa-solid fa-box-open',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (50,'Windows Client Devices Without OS Updates',1,'','traffic','','81','','','CLIENT OS UPDATES','Windows 10 & 11, Last Checked For Updates > 2 weeks','fa-solid fa-download',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (51,'Devices Not Seen for 30 / 7 / Less than 7 Days',1,'','traffic','','63','62','61','DEVICES NOT SEEN','Not Seen for 30 / 7 / Less than 7 Days','fa-solid fa-computer',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (52,'Open Windows Shares',1,'','traffic','','80','','','WORLD WRITABLE SHARES','Anyone can write here','fa-regular fa-folder-open',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (53,'Windows Server Devices Without OS Updates',1,'','traffic','','82','','','SERVER OS UPDATES','Windows 2019 & 2022, Last Checked For Updates > 2 weeks','fa-solid fa-download',0,'','','','system','2001-01-01 00:00:00');
INSERT INTO `widgets` VALUES (54,'Windows Devices Not Seen',1,'','traffic','','66','65','64','WINDOWS DEVICES NOT SEEN','Not Seen for 30+, 7+ and less than 7 Days','fa-brands fa-windows',0,'','','','system','2001-01-01 00:00:00');
/*!40000 ALTER TABLE `widgets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `windows`
--

DROP TABLE IF EXISTS `windows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `windows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `build_number` varchar(20) NOT NULL DEFAULT '',
  `build_number_full` varchar(100) NOT NULL DEFAULT '',
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
  KEY `system_id` (`device_id`),
  CONSTRAINT `windows_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
/*!50003 DROP FUNCTION IF EXISTS `cidr_to_mask` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb3 */ ;
/*!50003 SET character_set_results = utf8mb3 */ ;
/*!50003 SET collation_connection  = utf8mb3_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`openaudit`@`localhost` FUNCTION `cidr_to_mask`(cidr INT(2)) RETURNS char(15) CHARSET latin1 COLLATE latin1_swedish_ci
    DETERMINISTIC
RETURN INET_NTOA(CONV(CONCAT(REPEAT(1,cidr),REPEAT(0,32-cidr)),2,10)) ;;
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

-- Dump completed on 2023-05-04 15:48:47
