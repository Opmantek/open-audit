-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: openaudit
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB-0+deb9u1

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
-- Table structure for table `agents`
--

DROP TABLE IF EXISTS `agents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `ip` varchar(45) NOT NULL DEFAULT '',
  `status` enum('created','pending','approved','denied','deleted','') NOT NULL DEFAULT '',
  `check_minutes` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned DEFAULT NULL,
  `uuid` text NOT NULL,
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agents`
--

LOCK TABLES `agents` WRITE;
/*!40000 ALTER TABLE `agents` DISABLE KEYS */;
/*!40000 ALTER TABLE `agents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `application` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `applications_id` int(10) unsigned NOT NULL DEFAULT '0',
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `application_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
  `system_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `filename` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Security Camera','security camera','system','2000-01-01 00:00:00');
INSERT INTO `attributes` VALUES (NULL,1,'devices','type','Security Misc','security misc','system','2000-01-01 00:00:00');
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
  `system_id` int(10) unsigned DEFAULT '0',
  `username` varchar(45) NOT NULL DEFAULT '',
  `type` varchar(45) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `debug` text NOT NULL,
  `wmi_fails` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `version` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `audit_log_system_id_type` (`system_id`,`type`),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baselines_policies`
--

LOCK TABLES `baselines_policies` WRITE;
/*!40000 ALTER TABLE `baselines_policies` DISABLE KEYS */;
/*!40000 ALTER TABLE `baselines_policies` ENABLE KEYS */;
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
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `smversion` varchar(100) NOT NULL DEFAULT '',
  `version` varchar(100) NOT NULL DEFAULT '',
  `revision` varchar(100) NOT NULL DEFAULT '',
  `date` varchar(100) NOT NULL DEFAULT '',
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
-- Table structure for table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buildings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `location_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `location_id` (`location_id`),
  CONSTRAINT `buildings_location_id` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `buildings_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buildings`
--

LOCK TABLES `buildings` WRITE;
/*!40000 ALTER TABLE `buildings` DISABLE KEYS */;
INSERT INTO `buildings` VALUES (1, 'Default Building', 1, 1, 'The default entry for a building at this location.', '', '', '', 'system', '2000-01-01 00:00:00');
/*!40000 ALTER TABLE `buildings` ENABLE KEYS */;
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
  KEY `change_log_timestamp` (`timestamp`),
  KEY `change_log_db_table` (`db_table`),
  KEY `change_log_db_action` (`db_action`),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
  `system_id` int(10) unsigned DEFAULT NULL,
  `clusters_id` int(10) unsigned NOT NULL DEFAULT '0',
  `role` enum('head','node','storage','network','other','') NOT NULL DEFAULT '',
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `cluster_clusters_id` (`clusters_id`),
  CONSTRAINT `cluster_clusters_id` FOREIGN KEY (`clusters_id`) REFERENCES `clusters` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cluster_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuration`
--

LOCK TABLES `configuration` WRITE;
/*!40000 ALTER TABLE `configuration` DISABLE KEYS */;
INSERT INTO `configuration` VALUES (NULL,'access_token_count','20','number','y','system','2000-01-01 00:00:00','Allow this many access tokens to be stored in the cookie.');
INSERT INTO `configuration` VALUES (NULL,'access_token_enable','y','bool','y','system','2000-01-01 00:00:00','Should we enable access tokens for CSRF mitigation.');
INSERT INTO `configuration` VALUES (NULL,'blessed_subnets_use','y','bool','y','system','2000-01-01 00:00:00','Should we only accept data from the blessed subnets list.');
INSERT INTO `configuration` VALUES (NULL,'collector_check_minutes','5','number','y','system','2000-01-01 00:00:00','The default check interval for collectors.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_bios','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the bios table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_disk','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the disk table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_dns','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the dns table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_file','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the file table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_ip','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the ip table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_log','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the log table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_memory','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the memory table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_module','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the module table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_monitor','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the monitor table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_motherboad','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the motherboard table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_well_known','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is 1023 or lower.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_registered','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is in the range of 1024 to 49151.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_dynamic','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is 49152 or greater.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_network','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the network table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_nmap','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the nmap table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_optical','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the optical table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_pagefile','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the pagefile table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_partition','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the partition table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_policy','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the policy table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_print_queue','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the print_queue table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_processor','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the processor table.');
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
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_disk','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current disk data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_dns','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current dns data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_file','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current file data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_ip','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current ip data.');
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
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_user','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current user data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_user_group','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current user_group data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_variable','y','bool','y','system','2000-01-01 00:00:00','Should we delete non-current variable data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_video','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current video data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_vm','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current vm data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_windows','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current windows data.');
INSERT INTO `configuration` VALUES (NULL,'device_auto_delete', 'n', 'bool', 'y', 'system', '2000-01-01 00:00:00','Should we delete the device data completely from the database when the device status is set to Deleted.');
INSERT INTO `configuration` VALUES (NULL,'devices_default_display_columns','system.id,system.icon,system.type,system.name,system.ip,system.dns_fqdn,system.identification,system.description,system.manufacturer,system.os_family,system.status', 'text', 'y', 'system', '2000-01-01 00:00:00','When requesting a list of devices, display these columns.');
INSERT INTO `configuration` VALUES (NULL,'devices_default_group_columns','system.id,system.icon,system.type,system.name,system.ip,system.dns_fqdn,system.identification,system.description,system.manufacturer,system.os_family,system.status', 'text', 'y', 'system', '2000-01-01 00:00:00','When requesting a group of devices, retrieve and display these columns.');
INSERT INTO `configuration` VALUES (NULL,'devices_default_retrieve_columns','system.id,system.uuid,system.name,system.ip,system.hostname,system.dns_hostname,system.domain,system.dns_domain,system.dbus_identifier,system.fqdn,system.dns_fqdn,system.description,system.type,system.icon,system.os_group,system.os_family,system.os_name,system.os_version,system.manufacturer,system.model,system.serial,system.form_factor,system.status,system.environment,system.class,system.function,system.org_id,system.location_id,system.snmp_oid,system.sysDescr,system.sysObjectID,system.sysUpTime,system.sysContact,system.sysName,system.sysLocation,system.first_seen,system.last_seen,system.last_seen_by,system.identification', 'text', 'y', 'system', '2000-01-01 00:00:00','When requesting a list of devices, provide these columns.');
INSERT INTO `configuration` VALUES (NULL,'discovery_default_scan_option','1','number','y','system','2000-01-01 00:00:00','The default discovery options for Nmap.');
INSERT INTO `configuration` VALUES (NULL,'discovery_ip_exclude','','text','y','system','2000-01-01 00:00:00','Populate this list with ip addresses to be excluded from discovery. IPs should be separated by a space.');
INSERT INTO `configuration` VALUES (NULL,'discovery_limit','20','number','y','system','2000-01-01 00:00:00','The maximum number of concurrent discoveries we should run.');
INSERT INTO `configuration` VALUES (NULL,'discovery_linux_script_directory','/tmp/','text','y','system','2000-01-01 00:00:00','The directory the script is copied into on the target device.');
INSERT INTO `configuration` VALUES (NULL,'discovery_linux_script_permissions','700','text','y','system','2000-01-01 00:00:00','The permissions set on the audit_linux.sh script when it is copied to the target device.');
INSERT INTO `configuration` VALUES (NULL,'discovery_linux_use_sudo','y','bool','y','system','2000-01-01 00:00:00','When running discovery commands on a Linux target, should we use sudo.');
INSERT INTO `configuration` VALUES (NULL,'discovery_override_nmap','n','bool','y','system','2000-01-01 00:00:00','Override the detction of Nmap to enable discoveries.');
INSERT INTO `configuration` VALUES (NULL,'discovery_pid','','number','n','system','2000-01-01 00:00:00','The discovery queue process pid.');
INSERT INTO `configuration` VALUES (NULL,'discovery_route_retrieve_limit','500','number','y','system','2000-01-01 00:00:00','When discovering a device using SNMP, do not retrieve the route table if it contains more than this number of entries.');
INSERT INTO `configuration` VALUES (NULL,'discovery_ssh_timeout','300','number','y','system','2000-01-01 00:00:00','Timeout duration (in seconds) when discovering a device via SSH.');
INSERT INTO `configuration` VALUES (NULL,'discovery_sudo_path','','text','y','system','2000-01-01 00:00:00','Optional hardcoded path to sudo executable. Comma seperated for multiple paths.');
INSERT INTO `configuration` VALUES (NULL,'discovery_sunos_use_sudo','y','bool','y','system','2000-01-01 00:00:00','When running discovery commands on a SunOS target, should we use sudo.');
INSERT INTO `configuration` VALUES (NULL,'discovery_use_dns','y','bool','y','system','2000-01-01 00:00:00','Should we use DNS for looking up the hostname and domain.');
INSERT INTO `configuration` VALUES (NULL,'discovery_use_ipmi','y','bool','y','system','2000-01-01 00:00:00','Should we use ipmitool for discovering management ports if ipmitool is installed.');
INSERT INTO `configuration` VALUES (NULL,'discovery_use_vintage_service','n','bool','y','system','2000-01-01 00:00:00','On Windows, use the old way of running discovery with the Apache service account.');
INSERT INTO `configuration` VALUES (NULL,'display_version','3.3.2','text','n','system','2000-01-01 00:00:00','The version shown on the web pages.');
INSERT INTO `configuration` VALUES (NULL,'download_reports','y','bool','y','system','2000-01-01 00:00:00','Tells Open-AudIT to advise the browser to download as a file or display the csv, xml, json reports.');
INSERT INTO `configuration` VALUES (NULL,'graph_days','30','number','y','system','2000-01-01 00:00:00','The number of days to report on for the Enterprise graphs.');
INSERT INTO `configuration` VALUES (NULL,'gui_trim_characters','25','number','y','system','2000-01-01 00:00:00','When showing a table of information in the web GUI, replace characters greater than this with \"...\".');
INSERT INTO `configuration` VALUES (NULL,'homepage','groups','text','y','system','2000-01-01 00:00:00','Any links to the default page should be directed to this endpoint.');
INSERT INTO `configuration` VALUES (NULL,'internal_version','20200512','number','n','system','2000-01-01 00:00:00','The internal numerical version.');
INSERT INTO `configuration` VALUES (NULL,'log_level','5','number','y','system','2000-01-01 00:00:00','Tells Open-AudIT which severity of event (at least) should be logged.');
INSERT INTO `configuration` VALUES (NULL,'log_retain_level_0','180','number','y','system','2000-01-01 00:00:00','Tells Open-AudIT how many days to keep logs with severity 0.');
INSERT INTO `configuration` VALUES (NULL,'log_retain_level_1','180','number','y','system','2000-01-01 00:00:00','Tells Open-AudIT how many days to keep logs with severity 1.');
INSERT INTO `configuration` VALUES (NULL,'log_retain_level_2','180','number','y','system','2000-01-01 00:00:00','Tells Open-AudIT how many days to keep logs with severity 2.');
INSERT INTO `configuration` VALUES (NULL,'log_retain_level_3','180','number','y','system','2000-01-01 00:00:00','Tells Open-AudIT how many days to keep logs with severity 3.');
INSERT INTO `configuration` VALUES (NULL,'log_retain_level_4','180','number','y','system','2000-01-01 00:00:00','Tells Open-AudIT how many days to keep logs with severity 4.');
INSERT INTO `configuration` VALUES (NULL,'log_retain_level_5','90','number','y','system','2000-01-01 00:00:00','Tells Open-AudIT how many days to keep logs with severity 5.');
INSERT INTO `configuration` VALUES (NULL,'log_retain_level_6','30','number','y','system','2000-01-01 00:00:00','Tells Open-AudIT how many days to keep logs with severity 6.');
INSERT INTO `configuration` VALUES (NULL,'log_retain_level_7','7','number','y','system','2000-01-01 00:00:00','Tells Open-AudIT how many days to keep logs with severity 7.');
INSERT INTO `configuration` VALUES (NULL,'maps_api_key','','text','y','system','2000-01-01 00:00:00','The API key for Google Maps.');
INSERT INTO `configuration` VALUES (NULL,'maps_url','/omk/open-audit/map','text','y','system','2000-01-01 00:00:00','The web server address of opMaps.');
INSERT INTO `configuration` VALUES (NULL,'match_dbus','n','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its dbus id.');
INSERT INTO `configuration` VALUES (NULL,'match_fqdn','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its fqdn.');
INSERT INTO `configuration` VALUES (NULL,'match_dns_fqdn','n','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its DNS fqdn.');
INSERT INTO `configuration` VALUES (NULL,'match_dns_hostname','n','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its DNS hostname.');
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
INSERT INTO `configuration` VALUES (NULL,'modules','','text','n','system','2000-01-01 00:00:00','The list of installed Opmantek modules.');
INSERT INTO `configuration` VALUES (NULL,'nmis','n','bool','y','system','2000-01-01 00:00:00','Enable import / export to NMIS functions.');
INSERT INTO `configuration` VALUES (NULL,'nmis_url','','text','y','system','2000-01-01 00:00:00','The web server address of NMIS.');
INSERT INTO `configuration` VALUES (NULL,'oae_license','','text','n','system','2000-01-01 00:00:00','License status of Open-AudIT Enterprise.');
INSERT INTO `configuration` VALUES (NULL,'oae_product','Open-AudIT Community','text','n','system','2000-01-01 00:00:00','The name of the installed commercial application.');
INSERT INTO `configuration` VALUES (NULL,'oae_prompt','2015-06-01','date','n','system','2000-01-01 00:00:00','Prompt to activate a license for Open-AudIT Enterprise.');
INSERT INTO `configuration` VALUES (NULL,'oae_url','/omk/open-audit','text','y','system','2000-01-01 00:00:00','The web server address of Open-AudIT Enterprise.');
INSERT INTO `configuration` VALUES (NULL,'output_escape_csv','y','bool','y','system','2000-01-01 00:00:00','Escape CSV output so Excel will not attempt to run contents.');
INSERT INTO `configuration` VALUES (NULL,'page_size','1000','number','y','system','2000-01-01 00:00:00','The default limit of rows to retrieve.');
INSERT INTO `configuration` VALUES (NULL,'process_netstat_windows_dns','n','bool','y','system','2000-01-01 00:00:00','Should we keep track of Windows netstat ports used by DNS above port 1000.');
INSERT INTO `configuration` VALUES (NULL,'queue_limit','20','number','y','system','2000-01-01 00:00:00','The maximum number of concurrent device scans we should run.');
INSERT INTO `configuration` VALUES (NULL,'queue_count','0','number','n','system','2000-01-01 00:00:00','The current number of concurrent device scans running.');
INSERT INTO `configuration` VALUES (NULL,'rss_enable','y','bool','y','system','2000-01-01 00:00:00','Enable the RSS feed.');
INSERT INTO `configuration` VALUES (NULL,'rss_url','https://community.opmantek.com/rss/OA.xml','text','y','system','2000-01-01 00:00:00','The RSS feed URL.');
INSERT INTO `configuration` VALUES (NULL,'server_ip','','text','n','system','2000-01-01 00:00:00','The locally detected IP Addresses of this server.');
INSERT INTO `configuration` VALUES (NULL,'servers','','text','n','system','2000-01-01 00:00:00','The servers to report to when using Agent / Collector / Server.');
INSERT INTO `configuration` VALUES (NULL,'uuid',UUID(),'text','n','system',NOW(),'The unique identfier of this Open-AudIT server.');
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
  `speed` float(7,3) NOT NULL DEFAULT '0.000',
  `location_id_a` int(10) unsigned NOT NULL DEFAULT '1',
  `location_id_b` int(10) unsigned NOT NULL DEFAULT '1',
  `system_id_a` int(10) unsigned DEFAULT NULL,
  `system_id_b` int(10) unsigned DEFAULT NULL,
  `line_number_a` varchar(100) NOT NULL DEFAULT '',
  `line_number_b` varchar(100) NOT NULL DEFAULT '',
  `ip_address_external_a` varchar(30) NOT NULL DEFAULT '',
  `ip_address_external_b` varchar(30) NOT NULL DEFAULT '',
  `ip_address_internal_a` varchar(30) NOT NULL DEFAULT '',
  `ip_address_internal_b` varchar(30) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dashboards`
--

LOCK TABLES `dashboards` WRITE;
/*!40000 ALTER TABLE `dashboards` DISABLE KEYS */;
INSERT INTO `dashboards` VALUES (1,'Default Dashboard',1,'org',0,'The Default Open-AudIT Dashboard','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"1\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"2\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"3\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"4\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"5\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"6\"}]}','system','2000-01-01 00:00:00');
INSERT INTO `dashboards` VALUES (2,'Purchasing Dashboard',1,'org',0,'Purchase Management','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"11\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"26\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"25\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"15\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"8\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"31\"}]}','system','2000-01-01 00:00:00');
INSERT INTO `dashboards` VALUES (3,'Network Dashboard',1,'org',0,'Networks and Locations','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"20\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"19\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"15\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"16\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"21\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"22\"}]}','system','2000-01-01 00:00:00');
INSERT INTO `dashboards` VALUES (4,'Discovery Dashboard',1,'org',0,'Discovered Devices','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"1\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"2\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"22\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"27\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"28\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"29\"}]}','system','2000-01-01 00:00:00');
INSERT INTO `dashboards` VALUES (5,'Devices Dashboard',1,'org',0,'Devices Information','y','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"15\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"30\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"8\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"22\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"27\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"29\"}]}','system','2000-01-01 00:00:00');
INSERT INTO `dashboards` VALUES (6,'Clouds Dashboard',1,'org',0,'The details of your cloud infrastructure','n','{\"layout\":\"3x2\",\"widget_count\":6,\"widgets\":[{\"position\":\"1\",\"size\":\"1\",\"widget_id\":\"33\"},{\"position\":\"2\",\"size\":\"1\",\"widget_id\":\"34\"},{\"position\":\"3\",\"size\":\"1\",\"widget_id\":\"35\"},{\"position\":\"4\",\"size\":\"1\",\"widget_id\":\"36\"},{\"position\":\"5\",\"size\":\"1\",\"widget_id\":\"37\"},{\"position\":\"6\",\"size\":\"1\",\"widget_id\":\"38\"}]}','system','2000-01-01 00:00:00');
/*!40000 ALTER TABLE `dashboards` ENABLE KEYS */;
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
  `devices_assigned_to_org` int(10) unsigned DEFAULT NULL,
  `devices_assigned_to_location` int(10) unsigned DEFAULT NULL,
  `network_address` varchar(100) NOT NULL DEFAULT '',
  `system_id` int(10) unsigned NOT NULL DEFAULT '0',
  `other` text NOT NULL,
  `options` text NOT NULL,
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
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
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
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discovery_scan_options`
--

LOCK TABLES `discovery_scan_options` WRITE;
/*!40000 ALTER TABLE `discovery_scan_options` DISABLE KEYS */;
INSERT INTO `discovery_scan_options` VALUES (1,'UltraFast',1,'Approximately 1 second per target. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n','n',0,4,0,0,'22,135,62078','161','','','','22','','system','2000-01-01 00:00:00');
INSERT INTO `discovery_scan_options` VALUES (2,'SuperFast',1,'Approximately 5 seconds per target. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n','n',0,4,10,10,'62078','','','','','22','','system','2000-01-01 00:00:00');
INSERT INTO `discovery_scan_options` VALUES (3,'Fast',1,'Approximately 40 seconds per target. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is considered closed. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n','n',0,4,100,100,'62078','','','','','22','','system','2000-01-01 00:00:00');
INSERT INTO `discovery_scan_options` VALUES (4,'Medium (Classic)',1,'Approximately 90 seconds per target. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An open|filtered port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.','n','n','y','y',0,4,1000,0,'62078','161','','','','22','','system','2000-01-01 00:00:00');
INSERT INTO `discovery_scan_options` VALUES (5,'Medium',1,'Approximately 100 seconds per target. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n','n',0,4,1000,100,'62078','','','','','22','','system','2000-01-01 00:00:00');
INSERT INTO `discovery_scan_options` VALUES (6,'Slow',1,'Approximately 4 minutes per target. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An open|filtered port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.','y','y','y','y',0,3,1000,100,'62078','','','','','22','','system','2000-01-01 00:00:00');
INSERT INTO `discovery_scan_options` VALUES (7,'UltraSlow',1,'Approximately 20 minutes. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An open|filtered port is considered open (and will trigger device detection). Use polite timing.','n','y','y','y',0,2,1000,1000,'62078','','','','','22','','system','2000-01-01 00:00:00');
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
  `system_id` int(10) unsigned DEFAULT NULL,
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
  `name` varchar(200) NOT NULL DEFAULT '',
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
-- Table structure for table `field`
--

DROP TABLE IF EXISTS `field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `fields_id` int(10) unsigned NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `field_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fields`
--

LOCK TABLES `fields` WRITE;
/*!40000 ALTER TABLE `fields` DISABLE KEYS */;
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
  `system_id` int(10) unsigned DEFAULT NULL,
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
  KEY `system_id` (`system_id`),
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `path` text NOT NULL,
  `description` text NOT NULL,
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
-- Table structure for table `floors`
--

DROP TABLE IF EXISTS `floors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `floors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `building_id` int(10) unsigned DEFAULT NULL,
  `description` text NOT NULL,
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `building_id` (`building_id`),
  CONSTRAINT `floors_building_id` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE,
  CONSTRAINT `floors_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `floors`
--

LOCK TABLES `floors` WRITE;
/*!40000 ALTER TABLE `floors` DISABLE KEYS */;
INSERT INTO `floors` VALUES (1, 'Ground Floor', 1, 1, 'The default entry for a floor at this location.', '', '', '', 'system', '2000-01-01 00:00:00');
/*!40000 ALTER TABLE `floors` ENABLE KEYS */;
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `sql` text NOT NULL,
  `link` text NOT NULL,
  `expose` enum('y','n') NOT NULL DEFAULT 'y',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,1,'All Devices','All the devices a user is authorised to view.','SELECT DISTINCT(system.id) FROM system WHERE @filter','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (2,1,'Apple Computers','Devices with type = computer and os_family like OSX.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = \'computer\' AND (os_family LIKE \'%osx\' OR os_family LIKE \'%macos%\')','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (3,1,'Centos Computers','Devices with type = computer and os_family like Centos.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = \'computer\' AND os_family LIKE \'centos\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (4,1,'Computers','Devices with type = computer.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = \'computer\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (5,1,'Debian Computers','Devices with type = computer and os_family like Debian.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = \'computer\' AND os_family LIKE \'%debian%\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (6,1,'Linux Computers','Devices with type = computer and os_group like Linux.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = \'computer\' AND os_group LIKE \'linux\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (7,1,'Open-AudIT Enterprise Managed Devices','Devices Managed by Open-AudIT Enterprise.','SELECT distinct(system.id) FROM system WHERE @filter AND system.status = \'production\' and oae_manage = \'y\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (8,1,'Printers','Devices with type = printer.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type LIKE \'%printer%\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (9,1,'Public IP Devices','Devices with a public IP address and a status of production.','SELECT distinct(system.id) FROM system LEFT JOIN ip ON (ip.system_id = system.id AND ip.current = \'y\') WHERE @filter AND ((( ip.ip > \'000.000.000.000\' AND ip.ip < \'010.000.000.000\' ) OR ( ip.ip > \'010.255.255.255\' AND ip.ip < \'169.254.0.0\' ) OR ( ip.ip > \'169.254.255.255\' AND ip.ip < \'172.016.000.000\' ) OR ( ip.ip > \'172.31.255.255\' AND ip.ip < \'192.168.000.000\' ) OR ip.ip > \'192.168.255.255\' ) OR ( ( system.ip > \'000.000.000.000\' AND system.ip < \'010.000.000.000\' ) OR ( system.ip > \'010.255.255.255\' AND system.ip < \'169.254.0.0\' ) OR ( system.ip > \'169.254.255.255\' AND system.ip < \'172.016.000.000\' ) OR ( system.ip > \'172.31.255.255\' AND system.ip < \'192.168.000.000\' ) OR system.ip > \'192.168.255.255\' )) AND system.status = \'production\' AND ip.version = 4','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (10,1,'RedHat Computers','Devices with type = computer and os_family like RedHat.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = \'computer\' AND os_family LIKE \'redhat\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (11,1,'Routers','Devices with type = router.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = \'router\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (12,1,'Switches','Devices with type = switch.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = \'switch\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (13,1,'Virtual Hosts','Devices with class = hypervisor.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.class = \'hypervisor\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (14,1,'Windows Computers','Devices with type = computer and os_group like Windows.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = \'computer\' AND os_group LIKE \'windows\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (15,1,'Windows Servers','Devices with type = computer and os_name like Windows Server.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = \'computer\' AND os_name LIKE \'%windows%server%\'','','y','system','2000-01-01 00:00:00');
INSERT INTO `groups` VALUES (16,1,'Windows Workstations','Devices with type = computer and os_name like Windows and os_name not like Server.','SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = \'computer\' AND system.os_name LIKE \'%windows%\' AND system.os_name NOT LIKE \'%server%\'','','y','system','2000-01-01 00:00:00');
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
  `system_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `filename` text NOT NULL,
  `orientation` enum('front','rear','left','right','top','bottom','other','') NOT NULL DEFAULT 'front',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `image_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
  `options` longtext NOT NULL,
  `last_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `integrations`
--

LOCK TABLES `integrations` WRITE;
/*!40000 ALTER TABLE `integrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `integrations` ENABLE KEYS */;
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
  `lang` varchar(200) NOT NULL DEFAULT 'en',
  `host` varchar(200) NOT NULL DEFAULT '',
  `port` varchar(200) NOT NULL DEFAULT '389',
  `secure` enum('y','n') NOT NULL DEFAULT 'n',
  `domain` varchar(200) NOT NULL DEFAULT '',
  `type` enum('active directory','openldap') NOT NULL DEFAULT 'active directory',
  `version` int(1) unsigned NOT NULL DEFAULT '3',
  `base_dn` varchar(200) NOT NULL DEFAULT '',
  `user_dn` varchar(200) NOT NULL DEFAULT '',
  `user_membership_attribute` varchar(200) NOT NULL DEFAULT 'memberUid',
  `use_auth` enum('y','n') NOT NULL DEFAULT 'y',
  `use_discovery` enum('y','n') NOT NULL DEFAULT 'y',
  `use_people` enum('y','n') NOT NULL DEFAULT 'y',
  `use_roles` enum('y','n') NOT NULL DEFAULT 'n',
  `dn_account` varchar(200) NOT NULL DEFAULT '',
  `dn_password` varchar(250) NOT NULL DEFAULT '',
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `org_descendants` enum('y','n') NOT NULL DEFAULT 'y',
  `purchase_count` int(10) unsigned NOT NULL DEFAULT '0',
  `used_count` int(10) unsigned NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `match_string` text NOT NULL,
  `software_name` text NOT NULL,
  `software_version` varchar(200) NOT NULL DEFAULT '',
  `sql` text NOT NULL,
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
  `external_ident` varchar(200) NOT NULL DEFAULT '',
  `options` text NOT NULL,
  `latitude` float(10,6) NOT NULL DEFAULT '0.000000',
  `longitude` float(10,6) NOT NULL DEFAULT '0.000000',
  `geo` varchar(200) NOT NULL DEFAULT '',
  `cloud_id` int(10) unsigned DEFAULT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Default Location',1,'Our default location','Office','','','','','','Gold Coast','','','','Queensland','','Australia','','','','','',-28.017260,153.425705,'','','','2000-01-01 00:00:00');
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
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `file_name` text NOT NULL,
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
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `request_microtime` varchar(50) NOT NULL DEFAULT '',
  `type` varchar(200) NOT NULL DEFAULT '',
  `severity` int(10) unsigned NOT NULL DEFAULT '0',
  `severity_text` varchar(20) NOT NULL DEFAULT '',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `user` varchar(200) NOT NULL DEFAULT '',
  `server` varchar(200) NOT NULL DEFAULT '',
  `ip` varchar(200) NOT NULL DEFAULT '',
  `collection` varchar(200) NOT NULL DEFAULT '',
  `action` varchar(200) NOT NULL DEFAULT '',
  `function` varchar(200) NOT NULL DEFAULT '',
  `status` varchar(200) NOT NULL DEFAULT '',
  `summary` text NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
  `system_id` int(10) unsigned DEFAULT NULL,
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(50) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `device` varchar(100) NOT NULL DEFAULT '',
  `manufacture_date` varchar(20) NOT NULL DEFAULT '',
  `size` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `aspect_ratio` varchar(5) NOT NULL DEFAULT '',
  `edid_version` varchar(50) NOT NULL DEFAULT '',
  `cost_code` varchar(50) NOT NULL DEFAULT '',
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(50) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `version` varchar(100) NOT NULL DEFAULT '',
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
  `name` varchar(200) NOT NULL DEFAULT '',
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
  `dhcp_lease_obtained` varchar(20) NOT NULL DEFAULT '',
  `dhcp_lease_expires` varchar(20) NOT NULL DEFAULT '',
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
  `network` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `type` enum('Campus Area Network','Cloud Network','Enterprise Private Network','Home Area Network','Local Area Network','Metropolitan Area Network','Passive Optical Local Area Network','Personal Area Network','Storage-Area Network','System-Area Network','Virtual Private Network','Wide Area Network','Wireless Local Area Network') NOT NULL DEFAULT 'Local Area Network',
  `description` text NOT NULL,
  `external_ident` varchar(200) NOT NULL DEFAULT '',
  `cloud_id` int(10) unsigned DEFAULT NULL,
  `gateways` text NOT NULL,
  `options` text NOT NULL,
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
  `name` varchar(200) NOT NULL DEFAULT '',
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_change`
--

LOCK TABLES `oa_change` WRITE;
/*!40000 ALTER TABLE `oa_change` DISABLE KEYS */;
INSERT INTO `oa_change` VALUES (1,'Default Change.','','2000-01-01 00:00:00','2000-01-01 00:00:00','','','','','','','',1,'2000-01-01 00:00:00');
/*!40000 ALTER TABLE `oa_change` ENABLE KEYS */;
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
-- Table structure for table `oa_user_sessions`
--

DROP TABLE IF EXISTS `oa_user_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_user_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL DEFAULT '',
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
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
  `name` varchar(200) NOT NULL DEFAULT '',
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
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
-- Table structure for table `policy`
--

DROP TABLE IF EXISTS `policy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `policy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `guid` text NOT NULL,
  `options` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `policy_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
  `system_id` int(10) unsigned DEFAULT NULL,
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `menu_category` varchar(200) NOT NULL DEFAULT 'Device',
  `menu_display` enum('y','n') NOT NULL DEFAULT 'y',
  `description` text NOT NULL,
  `sql` text NOT NULL,
  `link` text NOT NULL,
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
INSERT INTO `queries` VALUES (NULL,1,'Audit Dates','Device','y','The first and last times a device was audited.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_name AS `system.os_name`, system.first_seen AS `system.first_seen`, system.last_seen AS `system.last_seen`, GROUP_CONCAT(DISTINCT(audit_log.type) ORDER BY audit_log.type) AS `seen_by` FROM system LEFT JOIN audit_log ON (audit_log.system_id = system.id) WHERE @filter GROUP BY system.id','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Billing Report','Device','y','Name, last seen on and by, type, class, manufacturer, model, serial, user, location.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, orgs.name AS `orgs.name`, system.last_seen AS `system.last_seen`, system.last_seen_by AS `system.last_seen_by`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.class AS `system.class`, windows.user_name AS `windows.user_name`, locations.name AS `locations.name` FROM system LEFT JOIN locations ON (system.location_id = locations.id) LEFT JOIN windows ON (system.id = windows.system_id AND windows.current = \'y\') LEFT JOIN orgs ON (system.org_id = orgs.id) WHERE @filter','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Consumed IP Addresses','Network','y','The ip addresses used by a group.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_family AS `system.os_family`, system.description AS `system.description`, ip.ip as `ip.ip` FROM ip LEFT JOIN system ON (system.id = ip.system_id AND ip.current = \'y\') WHERE @filter AND ip.ip IS NOT NULL AND ip.ip != \'127.000.000.001\' AND ip.ip != \'\' AND ip.ip != \'0.0.0.0\' AND ip.ip != \'000.000.000.000\' AND ip.version = \'4\' GROUP BY ip.id, ip.ip ORDER BY ip.ip','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Devices Without Credentials','Device','y','Device details - name, ip, last seen on and by for those devices only discovered by Nmap and have therefore not been audited.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, audit_log.timestamp AS `audit_log.timestamp`, audit_log.ip AS `audit_log.ip` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.id) WHERE @filter AND audit_log.system_id NOT IN (SELECT DISTINCT(audit_log.system_id) FROM audit_log WHERE type != \'nmap\') GROUP BY system.id','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Disk Partition Use','Device','y','Partition details where partition free and used space aren\'t 0 and type isn\'t Volume or Network Drive and mount point isn\'t [SWAP].','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, partition.id AS `partition.id`, partition.hard_drive_index AS `partition.hard_drive_index`, partition.mount_point AS `partition.mount_point`, partition.mount_type as `partition.mount_type`, partition.size AS `partition.size`, partition.used AS `partition.used`, partition.free AS `partition.free`, ROUND(((partition.free / partition.size) * 100), 0) AS percent_free, partition.name AS `partition.name` FROM system INNER JOIN `partition` ON (partition.system_id = system.id AND partition.current = \'y\') WHERE @filter AND partition.used > 0 AND partition.free > 0 AND LOWER(partition.type) != \'volume\' AND LOWER(partition.type) != \'network drive\' AND LOWER(partition.mount_point) != \'[swap]\' ORDER BY system.name, partition.id','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Export Details','Device','y','Icon, type, name, first seen on, last seen on, last seen by, manufacturer, model, serial, owner, organisation, location, operating system.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.fqdn AS `system.fqdn`, system.serial AS `system.serial`, system.class AS `system.class`, system.function AS `system.function`, system.owner AS `system.owner`, system.asset_number AS `system.asset_number` FROM system WHERE @filter','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Failed Audits','Device','y','Name, ip address, audit time, audit stage.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, audit_log.timestamp AS `audit_log.timestamp`, audit_log.debug AS `audit_log.debug` FROM system LEFT JOIN audit_log ON (system.id = audit_log.system_id) WHERE @filter AND audit_log.debug > \'\'','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Device','Hardware','y','Icon, name, ip address, manufacturer, model, serial.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.asset_number AS `system.asset_number` FROM system WHERE @filter','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Memory and Processors','Hardware','y','Device details - name, ip, memory, total processor cores, processor speed, processor description.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, CAST(system.memory_count/1024 AS UNSIGNED) AS `system.memory_count`, processor.physical_count AS `processor.physical_count`, processor.core_count AS `processor.core_count`, processor.logical_count AS `processor.logical_count`, processor.speed AS `processor.speed`, processor.description AS `processor.description` FROM system INNER JOIN processor ON (system.id = processor.system_id AND processor.current = \'y\') WHERE @filter','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Workstations','Hardware','y','Device details - name, ip, manufacturer, model, serial, form factor, memory, processor.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.memory_count AS `system.memory_count`, system.form_factor AS `system.form_factor`, processor.description AS `processor.description` FROM system LEFT JOIN processor ON (processor.system_id = system.id AND processor.current = \'y\') WHERE @filter AND system.type = \'computer\' AND system.class != \'server\' AND system.class != \'hypervisor\' ORDER BY system.name','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Acrobat','Software','y','Adobe Acrobat installations (software name contains \'acrobat\' or \'adobe reader\').','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = \'y\' AND (software.name LIKE \'%acrobat%\' OR software.name LIKE \'adobe reader%\')) LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Antivirus','Software','y','Installed AntiVirus software (software name contains \'virus\' or \'trend micro\' or \'endpoint\').','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version` FROM system LEFT JOIN software ON (software.system_id = system.id AND software.current = \'y\' AND (software.name LIKE \'%virus%\' or software.name LIKE \'%trend micro%\' or software.name LIKE \'%endpoint%\')) LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter AND system.type = \'computer\'','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Flash','Software','y','Flash Player installations.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = \'y\' AND software.name LIKE \'%Flash Player%\') LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'MS FrontPage','Software','y','MS Frontpage installations (software name contains \'Microsoft Office Frontpage\' or \'with Frontpage\').','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = \'y\' AND (software.name LIKE \'Microsoft Office Frontpage%\' OR software.name LIKE \'%with FrontPage\')) LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'MS Office','Software','y','MS Office installations.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.name AS `system.name`, system.domain AS `system.domain`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name` FROM software LEFT JOIN system ON (software.system_id = system.id) LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter AND software.current = \'y\' AND software.name LIKE \'Microsoft Office%\' AND (software.name LIKE \'%Starter%\' OR software.name LIKE \'%Basic%\' OR software.name LIKE \'%Personal%\' OR software.name LIKE \'%Home%\' OR software.name LIKE \'%Student%\' OR software.name LIKE \'%Business%\' OR software.name LIKE \'%Standard%\' OR software.name LIKE \'%Ultimate%\' OR software.name LIKE \'%Enterprise%\' OR software.name LIKE \'%Professional%\' OR software.name LIKE \'%Professional Plus%\') AND (software.name LIKE \'%2003%\' OR software.name LIKE \'%2007%\' OR software.name LIKE \'%2010%\' OR software.name LIKE \'%2013%\' OR software.name LIKE \'%2016%\' OR software.name LIKE \'%365%\')','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'MS Project','Software','y','MS Project installations (software name contains \'Microsoft Project\').','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = \'y\' AND software.name LIKE \'%Microsoft%Project%\') LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'MS Visio','Software','y','MS Visio installations (software name contains \'Microsoft Visio\').','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = \'y\' AND software.name LIKE \'Microsoft%Visio%\') LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Interfaces Used or Available','Network','y','Query to determine if a device interface is available for use.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, network.alias as `network.alias`, network.net_index AS `network.net_index`, network.description as `network.description`, network.ifadminstatus as `network.ifadminstatus`, network.ip_enabled as `network.ip_enabled`, system.sysuptime AS `system.sysuptime`, (system.sysuptime - network.iflastchange) AS diff, floor((system.sysuptime - network.iflastchange) /60/60/24/100) as diff_days, IF((network.ifadminstatus = \'down\') OR (network.ifadminstatus = \'up\' AND (network.ip_enabled != \'up\' AND network.ip_enabled != \'dormant\') AND (((system.sysuptime - network.iflastchange) > 60480000) OR (system.sysuptime < network.iflastchange))), \'available\', \'used\') AS available FROM network LEFT JOIN system ON (network.system_id = system.id AND network.current = \'y\') WHERE @filter AND network.ifadminstatus != \'\'','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Log Files','Device','y','Log file details.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, log.name as `log.name`, log.file_name AS `log.file_name`, log.file_size AS `log.file_size`, log.max_file_size AS `log.max_file_size`, log.overwrite AS `log.overwrite` FROM log LEFT JOIN system ON (system.id = log.system_id and log.current = \'y\') WHERE @filter ORDER BY system.name','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Netstat Ports','Device','y','Detected Netstat ports.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_name AS `system.os_name`, netstat.protocol AS `netstat.protocol`, netstat.port AS `netstat.port`, netstat.ip AS `netstat.ip`, netstat.program AS `netstat.program` FROM system LEFT JOIN netstat ON (system.id = netstat.system_id AND netstat.current = \'y\') WHERE @filter','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Printer Queues','Device','y','Printer details - manufacturer, model, status, capabilities, etc.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, print_queue.manufacturer AS `print_queue.manufacturer`, print_queue.model AS `print_queue.model`, print_queue.description AS `print_queue.description`, print_queue.driver AS `print_queue.driver`, print_queue.status AS `print_queue.status`, print_queue.port_name AS `print_queue.port_name`, print_queue.duplex AS `print_queue.duplex`, print_queue.color AS `print_queue.color`, print_queue.location AS `print_queue.location`, print_queue.type AS `print_queue.type`, print_queue.shared AS `print_queue.shared`, print_queue.shared_name AS `print_queue.shared_name`, print_queue.capabilities AS `print_queue.capabilities` FROM print_queue LEFT JOIN system ON (system.id = print_queue.system_id AND print_queue.current = \'y\') WHERE @filter','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Database','Server','y','All databases.','SELECT system.id AS `system.id`, system.name AS `system.name`, system.fqdn AS `system.fqdn`, system.os_family AS `system.os_family`, system.environment AS `system.environment`, server_item.parent_name AS `server_item.parent_name`, server_item.name AS `server_item.name`, server_item.instance AS `server_item.instance`, server_item.path AS `server_item.path`, server_item.log_status AS `server_item.log_status`, server_item.log_format AS `server_item.log_format`, server_item.log_rotation AS `server_item.log_rotation`, server_item.log_path AS `server_item.log_path` FROM system LEFT JOIN server_item ON (server_item.system_id = system.id and server_item.current = \'y\') WHERE @filter AND server_item.type = \'database\'','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Websites','Server','y','All detected websites (IIS based).','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_family AS `system.os_family`, system.environment AS `system.environment`, server_item.parent_name AS `server_item.parent_name`, server_item.name AS `server_item.name`, server_item.description AS `server_item.description`, server_item.status AS `server_item.status`, server_item.instance AS `server_item.instance`, server_item.path AS `server_item.path`, server_item.log_status AS `server_item.log_status`, server_item.log_format AS `server_item.log_format`, server_item.log_rotation AS `server_item.log_rotation`, server_item.log_path AS `server_item.log_path` FROM system LEFT JOIN server_item ON (server_item.system_id = system.id and server_item.current = \'y\') WHERE @filter AND server_item.type = \'website\'','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Shares','Device','y','Shared directory details.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, share.id AS `share.id`, share.name AS `share.name`, share.description AS `share.description`, share.size AS `share.size`, share.path AS `share.path` FROM share LEFT JOIN system ON (system.id = share.system_id and share.current = \'y\') WHERE @filter','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Elevated','User','y','Name, group name, group members.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM user_group LEFT JOIN system ON (user_group.system_id = system.id AND user_group.current = \'y\') WHERE @filter AND (user_group.name = \'Administrators\' OR user_group.name = \'Power Users\' OR user_group.name = \'Remote Desktop Users\' OR user_group.name = \'wheel\' OR user_group.name = \'sudo\') AND user_group.members > \'\' GROUP BY system.id, user_group.name ORDER BY system.name','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Orphaned','User','y','User accounts that no longer appear to be valid.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM system LEFT JOIN user_group ON (user_group.system_id = system.id AND user_group.current = \'y\') WHERE @filter AND user_group.members LIKE \'%@,%\' AND user_group.members NOT LIKE \'Everyone@,\' GROUP BY user_group.id ORDER BY system.name','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Standard','User','y','Name, group name, group members.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.members AS `user_group.members`, user_group.name AS `user_group.name` FROM user_group LEFT JOIN system ON (user_group.system_id = system.id AND user_group.current = \'y\') WHERE @filter AND (user_group.name = \'Users\' OR user_group.name = \'Guests\') AND user_group.members > \'\'','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Files','Change','y','Any changes in the table \'file\'.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table = \'file\'','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Hardware','Change','y','Any changes created in the tables \'bios\', \'disk\', \'memory\', \'module\', \'monitor\', \'motherboard\', \'optical\', \'partition\', \'processor\', \'network\', \'scsi\', \'sound\' and \'video\'.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table in (\'bios\', \'disk\', \'memory\', \'module\', \'monitor\', \'motherboard\', \'optical\', \'partition\', \'processor\', \'network\', \'scsi\', \'sound\', \'video\')','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'New Devices','Change','y','Any changes in the table \'system\'.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table = \'system\'','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Settings','Change','y','Any changes in the tables \'dns\', \'ip\', \'log\', netstat\', \'pagefile\', \'print_queue\', \'route\', \'task\', \'user\', \'user_group\' and \'variable\'.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table in (\'dns\', \'ip\', \'log\', \'netstat\', \'pagefile\', \'print_queue\', \'route\', \'task\', \'user\', \'user_group\', \'variable\')','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Software','Change','y','Any changes in the tables \'service\', \'server\', \'server_item\', \'software\' and \'software_key\'.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table in (\'service\', \'server\', \'server_item\', \'software\', \'software_key\')','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'AD Controllers','Server','y','Active Directory Domain Controllers','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.description AS `system.description`, system.os_family AS `system.os_family`, system.status AS `system.status` FROM system LEFT JOIN windows ON (system.id = windows.system_id AND windows.current = \'y\') WHERE @filter AND windows.domain_role LIKE \'%Domain Controller\' AND system.status = \'production\'','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Cloud Device Details','Device','y','Details about your cloud based devices','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.name AS `system.name`, system.ip AS `system.ip`, system.instance_type AS `system.instance.type`, clouds.type AS `clouds.type`, clouds.name AS `clouds.name`, locations.name AS `locations.name` FROM system LEFT JOIN clouds ON (clouds.id = system.cloud_id) LEFT JOIN locations ON (locations.id = system.location_id) WHERE @filter AND system.cloud_id != \'\';','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'NMIS','Device','y','NMIS Export query','SELECT system.id AS `system.id`, system.name AS `system.name`, system.ip AS `system.ip`, system.hostname AS `system.hostname`, system.fqdn AS `system.fqdn`, system.dns_hostname AS `system.dns_hostname`, system.omk_uuid AS `system.omk_uuid`, system.nmis_name AS `system.nmis_name`, system.nmis_group AS `system.nmis_group`, system.nmis_role AS `system.nmis_role`, system.nmis_manage AS `system.nmis_manage`, system.nmis_business_service AS `system.nmis_business_service`, system.nmis_poller AS `system.nmis_poller` FROM `system` WHERE @filter AND system.nmis_manage = \'y\'','','system','2000-01-01 00:00:00');
INSERT INTO `queries` VALUES (NULL,1,'Integration Default for NMIS','Other','y','The default query for integration with NMIS. Uses all devices with nmis_manage set to y.','SELECT system.id AS `system.id`, system.name AS `system.name`, system.hostname AS `system.hostname`, system.dns_hostname AS `system.dns_hostname`, system.fqdn AS `system.fqdn`, system.dns_fqdn AS `system.dns_fqdn`, system.ip AS `system.ip`, system.type AS `system.type`, system.credentials AS `system.credentials`, system.nmis_group AS `system.nmis_group`, system.nmis_name AS `system.nmis_name`, system.nmis_role AS `system.nmis_role`, system.nmis_manage AS `system.nmis_manage`, system.nmis_business_service AS `system.nmis_business_service`, system.nmis_customer AS `system.nmis_customer`, system.nmis_poller AS `system.nmis_poller`, system.snmp_version AS `system.snmp_version`, system.omk_uuid AS `system.omk_uuid`, locations.name AS `locations.name`, IF(system.snmp_version != \'\', \'true\', \'false\') AS `system.collect_snmp`, IF(system.os_group LIKE \'%windows%\', \'true\', \'false\') AS `system.collect_wmi` FROM `system` LEFT JOIN `locations` ON system.location_id = locations.id WHERE @filter AND system.nmis_manage = \'y\'','','system','2000-01-01 00:00:00');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `queue`
--

LOCK TABLES `queue` WRITE;
/*!40000 ALTER TABLE `queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `queue` ENABLE KEYS */;
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
  `row_id` int(10) unsigned DEFAULT NULL,
  `description` text NOT NULL,
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
  KEY `row_id` (`row_id`),
  CONSTRAINT `racks_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `racks_row_id` FOREIGN KEY (`row_id`) REFERENCES `rows` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `racks`
--

LOCK TABLES `racks` WRITE;
/*!40000 ALTER TABLE `racks` DISABLE KEYS */;
/*!40000 ALTER TABLE `racks` ENABLE KEYS */;
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
  `system_id` int(10) unsigned DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rack_devices`
--

LOCK TABLES `rack_devices` WRITE;
/*!40000 ALTER TABLE `rack_devices` DISABLE KEYS */;
/*!40000 ALTER TABLE `rack_devices` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','This role can change global options.','{\"agents\":\"crud\",\"applications\":\"crud\",\"attributes\":\"crud\",\"baselines\":\"crud\",\"clusters\":\"r\",\"collectors\":\"crud\",\"configuration\":\"crud\",\"dashboards\":\"crud\",\"database\":\"crud\",\"devices\":\"r\",\"errors\":\"r\",\"groups\":\"crud\",\"ldap_servers\":\"crud\",\"logs\":\"crud\",\"nmis\":\"crud\",\"orgs\":\"crud\",\"queue\":\"crud\",\"queries\":\"crud\",\"reports\":\"r\",\"roles\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"summaries\":\"crud\",\"tasks\":\"crud\",\"widgets\":\"crud\"}','open-audit_roles_admin','system','2000-01-01 00:00:00');
INSERT INTO `roles` VALUES (2,'org_admin','This role is used for administration of endpoints that contain an org_id.','{\"applications\":\"crud\",\"attributes\":\"crud\",\"baselines\":\"crud\",\"buildings\":\"crud\",\"charts\":\"crud\",\"clouds\":\"crud\",\"clusters\":\"crud\",\"connections\":\"crud\",\"credentials\":\"crud\",\"dashboards\":\"crud\",\"errors\":\"r\",\"floors\":\"crud\",\"queue\":\"cr\",\"summaries\":\"crud\",\"devices\":\"crud\",\"discoveries\":\"crud\",\"discovery_scan_options\":\"crud\",\"fields\":\"crud\",\"files\":\"crud\",\"graph\":\"crud\",\"groups\":\"crud\",\"integrations\":\"crud\",\"invoice\":\"crud\",\"licenses\":\"crud\",\"locations\":\"crud\",\"networks\":\"crud\",\"orgs\":\"crud\",\"queue\":\"cr\",\"queries\":\"crud\",\"racks\":\"crud\",\"rack_devices\":\"crud\",\"reports\":\"r\",\"rooms\":\"crud\",\"rows\":\"crud\",\"rules\":\"crud\",\"scripts\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"tasks\":\"crud\",\"users\":\"crud\",\"widgets\":\"crud\"}','open-audit_roles_org_admin','system','2000-01-01 00:00:00');
INSERT INTO `roles` VALUES (3,'reporter','The role used for reading endpoints and creating reports above to the user role.','{\"applications\":\"r\",\"baselines\":\"crud\",\"buildings\":\"crud\",\"charts\":\"r\",\"clouds\":\"r\",\"clusters\":\"r\",\"connections\":\"r\",\"credentials\":\"r\",\"dashboards\":\"crud\",\"errors\":\"r\",\"floors\":\"crud\",\"summaries\":\"r\",\"devices\":\"r\",\"fields\":\"r\",\"files\":\"r\",\"graph\":\"r\",\"groups\":\"r\",\"invoice\":\"r\",\"licenses\":\"crud\",\"locations\":\"r\",\"networks\":\"r\",\"orgs\":\"r\",\"queue\":\"cr\",\"queries\":\"crud\",\"racks\":\"crud\",\"rack_devices\":\"crud\",\"reports\":\"r\",\"rooms\":\"crud\",\"rows\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"widgets\":\"crud\"}','open-audit_roles_reporter','system','2000-01-01 00:00:00');
INSERT INTO `roles` VALUES (4,'user','A standard role that can read all endpoints that contain an org_id.','{\"applications\":\"r\",\"baselines\":\"r\",\"buildings\":\"r\",\"charts\":\"r\",\"clouds\":\"r\",\"clusters\":\"r\",\"connections\":\"r\",\"credentials\":\"r\",\"dashboards\":\"r\",\"summaries\":\"r\",\"devices\":\"r\",\"errors\":\"r\",\"floors\":\"r\",\"fields\":\"r\",\"files\":\"r\",\"graph\":\"r\",\"groups\":\"r\",\"invoice\":\"r\",\"licenses\":\"r\",\"locations\":\"r\",\"networks\":\"r\",\"orgs\":\"r\",\"queue\":\"cr\",\"queries\":\"r\",\"racks\":\"r\",\"rack_devices\":\"r\",\"reports\":\"r\",\"rooms\":\"r\",\"rows\":\"r\",\"rules\":\"r\",\"search\":\"crud\",\"sessions\":\"crud\",\"widgets\":\"r\"}','open-audit_roles_user','system','2000-01-01 00:00:00');
INSERT INTO `roles` VALUES (5,'collector','The collector specific role.','{\"collectors\":\"crud\",\"configuration\":\"r\",\"credentials\":\"r\",\"dashboards\":\"\",\"devices\":\"cr\",\"discoveries\":\"r\",\"locations\":\"r\",\"networks\":\"cr\",\"orgs\":\"r\",\"sessions\":\"crud\",\"tasks\":\"crud\",\"users\":\"r\",\"widgets\":\"\"}','open-audit_roles_collector','system','2000-01-01 00:00:00');
INSERT INTO `roles` VALUES (6,'agent','The agent specific role.','{\"configuration\":\"r\",\"credentials\":\"r\",\"dashboards\":\"\",\"devices\":\"cr\",\"discoveries\":\"r\",\"locations\":\"r\",\"networks\":\"cr\",\"orgs\":\"r\",\"sessions\":\"crud\",\"widgets\":\"\"}','open-audit_roles_agent','system','2000-01-01 00:00:00');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `floor_id` int(10) unsigned DEFAULT NULL,
  `description` text NOT NULL,
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `floor_id` (`floor_id`),
  CONSTRAINT `rooms_floor_id` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rooms_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1, 'Default Room', 1, 1, 'The default entry for a room at this location.', '', '', '', 'system', '2000-01-01 00:00:00');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
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
  `name` varchar(200) NOT NULL DEFAULT '',
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
-- Table structure for table `rows`
--

DROP TABLE IF EXISTS `rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `room_id` int(10) unsigned DEFAULT NULL,
  `description` text NOT NULL,
  `options` text NOT NULL,
  `notes` text NOT NULL,
  `tags` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `rows_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rows_room_id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rows`
--

LOCK TABLES `rows` WRITE;
/*!40000 ALTER TABLE `rows` DISABLE KEYS */;
INSERT INTO `rows` VALUES (1, 'Default Row', 1, 1, 'The default entry for a row at this location.', '', '', '', 'system', '2000-01-01 00:00:00');
/*!40000 ALTER TABLE `rows` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rules`
--

LOCK TABLES `rules` WRITE;
/*!40000 ALTER TABLE `rules` DISABLE KEYS */;
INSERT INTO `rules` VALUES (NULL,'Mac Model Match (iMac)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"iMac\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Mac Model Match (iMacPro)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"iMacPro\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Mac Model Match (MacBook)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"MacBook\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"laptop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"laptop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Mac Model Match (MacBookAir)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"MacBookAir\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"laptop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"laptop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Mac Model Match (MacBookPro)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"MacBookPro\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"laptop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"laptop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Mac Model Match (MacMini)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"Macmini\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Mac Model Match (MacPro)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"MacPro\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Mac Model Match (PowerBook)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"PowerBook\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"laptop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"laptop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Mac Model Match (PowerMac)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"PowerMac\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Mac Model Match (RackMac)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"RackMac\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"server\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"rack\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Mac Model Match (Xserve)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"Xserve\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"server\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"rack\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Detect DD-WRT in sysDescr',1,'Set the OS group, OS Name and type based on the sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"dd-wrt\"}]','[{\"table\":\"system\",\"attribute\":\"os_group\",\"value\":\"Linux\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_name\",\"value\":\"DD-WRT\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"router\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Detect Apple Darwin in sysDescr',1,'Set the manufacturer and OS family based on the sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"Darwin Kernel Version\"}]','[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"Apple, Inc.\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_family\",\"value\":\"Apple OSX\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Detect Apple AirPort in sysDescr',1,'Set the manufacturer, model and type based on the sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"Apple AirPort\"}]','[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"Apple, Inc.\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Apple AirPort\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Detect Buffalo Terrastation in sysDescr',1,'Set the manufacturer, model and type and based on the sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"buffalo terastation\"}]','[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"Buffalo\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"nas\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"TeraStation\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Manufacturer Name TPLink',1,'Set the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"tplink\"}]','[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"TP-Link\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the manufacturer and OS group based on UBNT in model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"st\",\"value\":\"UBNT \"}]','[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"Ubiquiti Networks Inc.\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"value\":\"Linux\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'VoIP Phone guess based on Nmap port',1,'Set the type based on Nmap port 5060.',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"5060\"},{\"table\":\"system\",\"attribute\":\"snmp_oid\",\"operator\":\"eq\",\"value\":\"\"},{\"table\":\"system\",\"attribute\":\"uuid\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"voip phone\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Apple IOS devices',1,'Set attributes based on Nmap port 62078.',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"62078\"}]','[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"Apple, Inc.\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"value\":\"Apple IOS\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_family\",\"value\":\"Apple IOS\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_name\",\"value\":\"Apple IOS\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Apple iPhone devices',1,'Set attributes based on Nmap port 62078 and hostname contains iphone.',100,'[{\"table\":\"system\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"iphone\"},{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"62078\"}]','[{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Apple iPhone\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"iphone\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Apple iPad devices',1,'Set attributes based on Nmap port 62078 and hostname contains ipad.',100,'[{\"table\":\"system\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"ipad\"},{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"62078\"}]','[{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Apple iPad\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"ipad\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Apple iPod devices',1,'Set attributes based on Nmap port 62078 and hostname contains ipod.',100,'[{\"table\":\"system\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"ipod\"},{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"62078\"}]','[{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Apple iPod\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"ipod\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Android devices',1,'Set attributes based hostname contains android.',100,'[{\"table\":\"system\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"android\"}]','[{\"table\":\"system\",\"attribute\":\"os_group\",\"value\":\"Android\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_family\",\"value\":\"Android\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_name\",\"value\":\"Android\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"android\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-LR\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-LR\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-Pro\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-Pro\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-EDU\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-EDU\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-HD\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-HD\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-Lite\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-Lite\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-LR\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-LR\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-PRO\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-Pro\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-PRO-Gen2\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-Pro gen 2\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-SHD\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-SHD\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-Mesh-Pro\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-Mesh-Pro\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-Outdoor\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-Outdoor\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Compaq iLO',1,'Set type as a default based on OID.',90,'[{\"table\":\"system\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.232.9.4.10\"},{\"table\":\"system\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"remote access controller\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Compaq iLO\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Netonix switches default',1,'Set type as a default based on OID.',90,'[{\"table\":\"system\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.46242\"},{\"table\":\"system\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"switch\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Apresia switches default',1,'Set type as a default based on OID.',90,'[{\"table\":\"system\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.278.1.27\"},{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"switch\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Apresia\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Apresia WAPs default',1,'Set type as a default based on OID.',90,'[{\"table\":\"system\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.278.1.19\"},{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Apresia\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Ceragon Wireless Link default',1,'Set type as a default based on manufacturer.',80,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"Ceragon\"},{\"table\":\"system\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wireless link\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'VSS Monitor',1,'Set model and type based on OID.',90,'[{\"table\":\"system\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.21671.1.2\"},{\"table\":\"system\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"network device\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"VSS Monitor\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Form Factor based on Manufacturer (like VMware)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"vmware\"}]','[{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"Virtual\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Form Factor based on Manufacturer (like Parallels)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"parallels\"}]','[{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"Virtual\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Form Factor based on Manufacturer (like Systemtechnik)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"PCS Systemtechnik GmbH\"}]','[{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"Virtual\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Form Factor based on Manufacturer (like Virtual)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"virtual\"}]','[{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"Virtual\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Class based on Form Factor and OS (Virtual Server)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"system\",\"attribute\":\"form_factor\",\"operator\":\"eq\",\"value\":\"Virtual\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"Windows\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"system\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"virtual server\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Class based on Form Factor and OS (Physical Server)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"system\",\"attribute\":\"form_factor\",\"operator\":\"ne\",\"value\":\"Virtual\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"Windows\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"system\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"},{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"nl\",\"value\":\"Ubiquiti\"},{\"table\":\"system\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"computer\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"server\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Class based on Form Factor and OS (Virtual Windows Server)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"system\",\"attribute\":\"form_factor\",\"operator\":\"eq\",\"value\":\"Virtual\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"system\",\"attribute\":\"os_name\",\"operator\":\"li\",\"value\":\"Server\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"system\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"virtual server\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Class based on Form Factor and OS (Physical Windows Server)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"system\",\"attribute\":\"form_factor\",\"operator\":\"ne\",\"value\":\"Virtual\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"system\",\"attribute\":\"os_name\",\"operator\":\"li\",\"value\":\"Server\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"system\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"server\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Type based on Manufacturer and Hostname (playstation)',1,'Set the type based on the manufacturer and hostname.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"sony\"},{\"table\":\"system\",\"attribute\":\"hostname\",\"operator\":\"li\",\"value\":\"playstation\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"game console\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Type based on Manufacturer and DNS Hostname (playstation)',1,'Set the type based on the manufacturer and dns_hostname.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"sony\"},{\"table\":\"system\",\"attribute\":\"dns_hostname\",\"operator\":\"li\",\"value\":\"playstation\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"game console\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Form Factor based on Manufacturer (like innotek GmbH)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"innotek GmbH\",\"operator\":\"li\"}]','[{\"value\":\"Virtual\",\"table\":\"system\",\"attribute\":\"form_factor\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
INSERT INTO `rules` VALUES (NULL,'Manufacturer change HP to Hewlett Packard',1,'Set manufacturer to Hewlett Packard if we receive HP.',100,'[{\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"table\":\"system\",\"value\":\"HP\"}]','[{\"attribute\":\"manufacturer\",\"table\":\"system\",\"value\":\"Hewlett Packard\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00');
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `options` text NOT NULL,
  `description` text NOT NULL,
  `based_on` varchar(200) NOT NULL DEFAULT '',
  `hash` varchar(250) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scripts`
--

LOCK TABLES `scripts` WRITE;
/*!40000 ALTER TABLE `scripts` DISABLE KEYS */;
INSERT INTO `scripts` VALUES (1,'audit_aix.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit AIX config.','audit_aix.sh','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (2,'audit_linux.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit Linux config.','audit_linux.sh','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (3,'audit_osx.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit OSX config.','audit_osx.sh','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (4,'audit_windows.vbs',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit Windows config.','audit_windows.vbs','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (5,'audit_esxi.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit ESXi config.','audit_esxi.sh','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (6,'audit_solaris.sh',1,'{\"submit_online\":\"y\",\"create_file\":\"n\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit Solaris config.','audit_solaris.sh','','system','2000-01-01 00:00:00');
INSERT INTO `scripts` VALUES (7,'audit_hpux.sh',1,'{\"submit_online\":\"n\",\"create_file\":\"y\",\"url\":\"http:\\/\\/localhost\\/open-audit\\/index.php\\/input\\/devices\",\"debugging\":1}','The default audit HPUX config.','audit_hpux.sh','','system','2000-01-01 00:00:00');
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
  `name` varchar(200) NOT NULL DEFAULT '',
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
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
  `name` varchar(200) NOT NULL DEFAULT '',
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `summaries`
--

LOCK TABLES `summaries` WRITE;
/*!40000 ALTER TABLE `summaries` DISABLE KEYS */;
INSERT INTO `summaries` VALUES (1,'Device Classes',1,'Device','y','system','class','','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (2,'Device Status',1,'Device','y','system','status','','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (3,'Device Types',1,'Device','y','system','type','','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (4,'DNS Domains',1,'Network','y','system','dns_domain','','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (5,'Form Factors',1,'Device','y','system','form_factor','system.form_factor,system.class','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (6,'Manufacturers',1,'Device','y','system','manufacturer','system.model','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (7,'Operating System Families',1,'Device','y','system','os_family','','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (8,'Server Types',1,'Server','y','server','type','server.name,server.full_name,server.version,server.edition,server.status','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (9,'Services',1,'Software','y','service','name','service.name,service.state','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (10,'Software',1,'Software','y','software','name','software.name,software.version','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (11,'Software Keys',1,'Software','y','software_key','name','software_key.name,software_key.string,software_key.rel,software_key.edition','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (12,'Active Directory OUs',1,'Network','y','windows','active_directory_ou','windows.active_directory_ou,windows.client_site_name','system','2000-01-01 00:00:00');
INSERT INTO `summaries` VALUES (13,'Operating System Names',1,'Device','y','system','os_name','','system','2000-01-01 00:00:00');
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `hostname` varchar(100) NOT NULL DEFAULT '',
  `dns_hostname` varchar(100) NOT NULL DEFAULT '',
  `domain` varchar(100) NOT NULL DEFAULT '',
  `dns_domain` varchar(100) NOT NULL DEFAULT '',
  `dbus_identifier` varchar(255) NOT NULL DEFAULT '',
  `fqdn` text NOT NULL,
  `dns_fqdn` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'unknown',
  `comments` text NOT NULL,
  `icon` varchar(50) NOT NULL DEFAULT '',
  `os_group` varchar(50) NOT NULL DEFAULT '',
  `os_family` varchar(50) NOT NULL DEFAULT '',
  `os_name` varchar(100) NOT NULL DEFAULT '',
  `os_version` varchar(200) NOT NULL DEFAULT '',
  `attached_system_id` int(10) DEFAULT NULL,
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `manufacturer_code` varchar(200) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
  `serial` varchar(200) NOT NULL DEFAULT '',
  `uptime` varchar(50) NOT NULL DEFAULT '',
  `form_factor` varchar(50) NOT NULL DEFAULT '',
  `os_bit` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `memory_count` int(10) unsigned NOT NULL DEFAULT '0',
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
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
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
  `vm_system_id` int(10) unsigned DEFAULT NULL,
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
  `end_of_life` date NOT NULL DEFAULT '2000-01-01',
  `end_of_service` date NOT NULL DEFAULT '2000-01-01',
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
  `nmis_manage` enum('y','n') NOT NULL DEFAULT 'n',
  `nmis_notes` text NOT NULL,
  `nmis_business_service` varchar(50) NOT NULL DEFAULT '',
  `nmis_poller` text NOT NULL,
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
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `options` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
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
  `status` varchar(100) NOT NULL DEFAULT '',
  `keys` text NOT NULL,
  `home` text NOT NULL,
  `shell` text NOT NULL,
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
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
  `roles` text NOT NULL,
  `orgs` text NOT NULL,
  `lang` enum('cs','de','en','es','fr','pt-br') NOT NULL DEFAULT 'en',
  `active` varchar(1) NOT NULL DEFAULT 'y',
  `ldap` text NOT NULL,
  `type` enum('agent','collector','user') NOT NULL DEFAULT 'user',
  `dashboard_id` int(10) unsigned DEFAULT '1',
  `devices_default_display_columns` text NOT NULL,
  `access_token` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin',1,'0ab0a153e5bbcd80c50a02da8c97f3c87686eb8512f5457d30e328d2d4448c8968e9f4875c2eb61356197b851dd33f90658b20b32139233b217be54d903ca3b6','Administrator','admin@openaudit','[\"admin\",\"org_admin\"]','[1]','en','y','','user',1,'','','system','2000-01-01 00:00:00');
INSERT INTO `users` VALUES (2,'open-audit_enterprise',1,'','Open-AudIT Enterprise','','[\"admin\",\"org_admin\"]','[1]','en','y','','user',1,'','','system','2000-01-01 00:00:00');
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
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `program` varchar(100) NOT NULL DEFAULT '',
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `manufacturer` varchar(100) NOT NULL DEFAULT '',
  `model` varchar(200) NOT NULL DEFAULT '',
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
  `name` varchar(200) NOT NULL DEFAULT '',
  `guest_system_id` int(10) unsigned DEFAULT NULL,
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
  `type` enum('line','pie','') DEFAULT 'line',
  `table` varchar(50) NOT NULL DEFAULT '',
  `primary` varchar(50) NOT NULL DEFAULT '',
  `secondary` varchar(50) NOT NULL DEFAULT '',
  `ternary` varchar(50) NOT NULL DEFAULT '',
  `dataset_title` varchar(200) NOT NULL DEFAULT '',
  `group_by` varchar(50) NOT NULL DEFAULT '',
  `where` text NOT NULL,
  `limit` smallint(6) NOT NULL DEFAULT '0',
  `options` text NOT NULL,
  `sql` text NOT NULL,
  `link` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgets`
--

LOCK TABLES `widgets` WRITE;
/*!40000 ALTER TABLE `widgets` DISABLE KEYS */;
INSERT INTO `widgets` VALUES (1,'New Devices Discovered per Day',1,'','line','','system','create','','Devices','','',30,'','','devices?system.first_seen=LIKE@date&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.identification,system.manufacturer,system.os_family,system.status,system.first_seen','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (2,'New Software Discovered per Day',1,'','line','','software','create','','Software','','',30,'','','devices?change_log.db_table=software&change_log.db_action=create&change_log.timestamp=LIKE@date&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (3,'Devices Not Seen (0-180+ Days)',1,'','pie','','','','','','','',0,'','SELECT IF ( system.last_seen = \'2000-01-01\', \'unknown\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 180 day), \'180 Days or more\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 150 day), \'150-180 days\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 120 day), \'120-150 days\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 90 day), \'90-120 days\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 60 day), \'60-90 days\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 30 day), \'30-60 days\', \'7-30 days\' ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.last_seen = \'2000-01-01\', \'system.last_seen=\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 180 day), CONCAT(\'system.last_seen=<\', DATE(NOW() - INTERVAL 180 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 150 day), CONCAT(\'system.last_seen=>\', DATE(NOW() - INTERVAL 180 day), \'&system.last_seen=<\', DATE(NOW() - INTERVAL 150 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 120 day), CONCAT(\'system.last_seen=>\', DATE(NOW() - INTERVAL 150 day), \'&system.last_seen=<\', DATE(NOW() - INTERVAL 120 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 90 day), CONCAT(\'system.last_seen=>\', DATE(NOW() - INTERVAL 120 day), \'&system.last_seen=<\', DATE(NOW() - INTERVAL 90 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 60 day), CONCAT(\'system.last_seen=>\', DATE(NOW() - INTERVAL 90 day), \'&system.last_seen=<\', DATE(NOW() - INTERVAL 60 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 30 day), CONCAT(\'system.last_seen=>\', DATE(NOW() - INTERVAL 60 day), \'&system.last_seen=<\', DATE(NOW() - INTERVAL 30 day)), CONCAT(\'system.last_seen=>\', DATE(NOW() - INTERVAL 30 day), \'&system.last_seen=<\', DATE(NOW() - INTERVAL 7 day))) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter AND DATE(system.last_seen) < DATE(NOW() - INTERVAL 7 day) GROUP BY `my_name`','devices?@description&properties=system.id,system.type,system.name,system.ip,system.os_family,system.last_seen,system.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (4,'Devices by Type',1,'','pie','','system.type','','','','','',0,'','','','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (5,'Devices by OS Family',1,'','pie','','system.os_family','','','','','',0,'','','','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (6,'Devices by Manufacturer',1,'','pie','','system.manufacturer','','','','','',0,'','','','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (7,'Software Keys',1,'','pie','','software_key.name','','','','','',0,'','','devices?software_key.name=@name&properties=system.id,system.icon,system.name,system.domain,system.ip,software_key.name,software_key.string','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (8,'Devices by Status',1,'','pie','','system.status','','','','','',0,'','','','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (9,'Devices by Function',1,'','pie','','system.function','','','','','',0,'','','devices?system.function=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.function,system.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (10,'Servers',1,'','pie','','server.name','','','','','',0,'','','devices?server.name=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,server.name,server.version,server.version_string,server.port','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (11,'End of Warranty (0-2+ Years)',1,'','pie','','','','','','','',0,'','SELECT if ( system.warranty_expires = \'2000-01-01\', \'unknown\', ( if ( system.warranty_expires < DATE(NOW()), \'expired\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 730 day), \'2 Years or more\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 365 day), \'1-2 years\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 270 day), \'270-365 days\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 180 day), \'180-270 days\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 90 day), \'90-180 days\', \'Less than 90 Days\' ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, if ( system.warranty_expires = \'2000-01-01\', \'system.warranty_expires=2000-01-01\', ( if ( system.warranty_expires < DATE(NOW()), CONCAT(\'system.warranty_expires=<\', DATE(NOW())), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 730 day), CONCAT(\'system.warranty_expires=>\', DATE(NOW() + INTERVAL 730 day)), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 365 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 730 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 365 day)), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 270 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 365 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 270 day), \'&system.warranty_expires=!=2000-01-01\'), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 180 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 270 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 180 day), \'&system.warranty_expires=!=2000-01-01\'), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 180 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 90 day), \'&system.warranty_expires=!=2000-01-01\'), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 90 day), \'&system.warranty_expires=>\', DATE(NOW()), \'&system.warranty_expires=!=2000-01-01\' ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`','devices?system.warranty_expires=!=2000-01-01&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.warranty_expires','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (12,'Devices by Class',1,'','pie','','system.class','','','','','',0,'','','devices?system.class=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.class,system.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (13,'Devices by DNS Domain',1,'','pie','','system.dns_domain','','','','','',0,'','','devices?system.dns_domain=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.dns_domain,system.domain,system.ip,system.os_family,system.os_group','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (14,'Devices by OS Group',1,'','pie','','system.os_group','','','','','',0,'','','devices?system.os_group=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (15,'Devices by Location',1,'','pie','','','','','','','',0,'','SELECT locations.name as `name`, locations.id AS `description`, count(system.id) AS `count` FROM locations LEFT JOIN system ON (locations.id = system.location_id) WHERE @filter GROUP BY locations.name, locations.id','devices?system.location_id=@description&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.location_id','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (16,'Devices by Collector',1,'','pie','','','','','','','',0,'','SELECT IF (collectors.name IS NULL, \'localhost\', collectors.name) AS `my_name`, IF(collectors.uuid IS NULL, \'\', collectors.uuid) AS `description`, COUNT(system.id) AS `count` FROM `system` LEFT JOIN `collectors` ON (collectors.uuid = system.collector_uuid) WHERE @filter GROUP BY `my_name`, collectors.uuid','devices?system.collector_uuid=@description','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (17,'Disk Manufacturers',1,'','pie','','disk.manufacturer','','','','','',0,'','','devices?disk.manufacturer=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_group,disk.manufacturer,disk.model,disk.size','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (18,'Processor Models',1,'','pie','','processor.description','','','','','',0,'','','devices?processor.description=LIKE@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.ip,system.os_group,system.manufacturer,processor.description,processor.physical_count,processor.core_count,processor.logical_count','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (19,'Active Directory Sites',1,'','pie','','windows.client_site_name','','','','','',0,'','','devices?windows.client_site_name=@name&properties=system.id,system.icon,system.os_group,system.name,system.ip,windows.client_site_name,windows.domain_controller_name,windows.active_directory_ou','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (20,'Active Directory OUs',1,'','pie','','windows.active_directory_ou','','','','','',0,'','','devices?windows.active_directory_ou=@name&properties=system.id,system.icon,system.os_group,system.name,system.ip,windows.client_site_name,windows.domain_controller_name,windows.active_directory_ou','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (21,'Devices by Network',1,'','pie','','','','','','','',0,'','SELECT ip.network AS `my_name`, COUNT(ip.system_id) AS `count` FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = \'y\') WHERE @filter AND ip.network != \'\' GROUP BY `my_name`','devices?ip.network=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,ip.ip,ip.mac,ip.network','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (22,'Devices Audited per Day',1,'','line','','','','','Devices','','',30,'','SELECT DATE(audit_log.timestamp) AS `date`, COUNT(DISTINCT audit_log.system_id) AS `count` FROM `audit_log` LEFT JOIN `system` ON (audit_log.system_id = system.id) WHERE DATE(audit_log.timestamp) >  DATE_SUB(CURDATE(), INTERVAL 30 DAY) GROUP BY DATE(audit_log.timestamp)','devices?audit_log.timestamp=like@date%','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (23,'End Of Life (0-90+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.end_of_life = \'2000-01-01\', \'Unknown\', ( IF ( system.end_of_life < DATE(NOW()), \'Expired\', ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 90 day), \'90+ Days\', ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 60 day), \'60-90 Days\', ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 30 day), \'30-60 Days\', ( IF ( system.end_of_life > DATE(NOW()), \'0-30 days\', \'Less than 30 Days\' ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.end_of_life = \'2000-01-01\', \'system.end_of_life=2000-01-01\', ( IF ( system.end_of_life < DATE(NOW()), CONCAT(\'system.end_of_life=!=2000-01-01&system.end_of_life=<\', DATE(NOW())), ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.end_of_life=>\', DATE(NOW() + INTERVAL 90 day)), ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 60 day), CONCAT(\'system.end_of_life=<\', DATE(NOW() + INTERVAL 90 day), \'&system.end_of_life=>\', DATE(NOW() + INTERVAL 60 day)), ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 30 day), CONCAT(\'system.end_of_life=<\', DATE(NOW() + INTERVAL 60 day), \'&system.end_of_life=>\', DATE(NOW() + INTERVAL 30 day)), (  CONCAT(\'system.end_of_life=<\', DATE(NOW() + INTERVAL 30 day), \'&system.end_of_life=>\', DATE(NOW())) ) ) ) ) ) ) ) ) ) ) AS `my_description`,  count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`, `my_description`','devices?@description&properties=system.id,system.icon,system.ip,system.name,system.os_family,system.end_of_life,system.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (24,'End of Service (0-90+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.end_of_service = \'2000-01-01\', \'Unknown\', ( IF ( system.end_of_service < DATE(NOW()), \'Expired\', ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 90 day), \'90+ Days\', ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 60 day), \'60-90 Days\', ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 30 day), \'30-60 Days\', ( IF ( system.end_of_service > DATE(NOW()), \'0-30 days\', \'Less than 30 Days\' ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.end_of_service = \'2000-01-01\', \'system.end_of_service=2000-01-01\', ( IF ( system.end_of_service < DATE(NOW()), CONCAT(\'system.end_of_service=<\', DATE(NOW()), \'&system.end_of_service=!=2000-01-01\'), ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.end_of_service=>\', DATE(NOW() + INTERVAL 90 day)), ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 60 day), CONCAT(\'system.end_of_service=<\', DATE(NOW() + INTERVAL 90 day), \'&system.end_of_service=>\', DATE(NOW() + INTERVAL 60 day)), ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 30 day), CONCAT(\'system.end_of_service=<\', DATE(NOW() + INTERVAL 60 day), \'&system.end_of_service=>\', DATE(NOW() + INTERVAL 30 day)), ( CONCAT(\'system.end_of_service=<\', DATE(NOW() + INTERVAL 30 day), \'&system.end_of_service=>\', DATE(NOW())) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`, `my_description`','devices?@description&properties=system.id,system.icon,system.ip,system.name,system.os_family,system.end_of_service,system.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (25,'Device Age (0-3+ Years)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.purchase_date = \'2000-01-01\', \'unknown\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 3 year), \'3+ Years\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 2 year), \'2-3 Years\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 1 year), \'1-2 Years\', \'Less Than 1 Year\' ) ) ) ) ) ) ) AS `my_name`, IF ( system.purchase_date = \'2000-01-01\', \'system.purchase_date=2000-01-01\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 3 year), CONCAT(\'system.purchase_date=<\', DATE(NOW() - INTERVAL 3 year), \"&system.purchase_date=>2000-01-01\"), ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 2 year), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 3 year), \'&system.purchase_date=<\', DATE(NOW() - INTERVAL 2 year)), ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 1 year), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 2 year), \'&system.purchase_date=<\', DATE(NOW() - INTERVAL 1 year)), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 1 year)) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`','devices?@description&properties=system.id,system.icon,system.ip,system.name,system.os_family,system.manufacturer,system.os_family,system.purchase_date,system.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (26,'End of Lease (0-90+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.lease_expiry_date = \'2000-01-01\' OR system.lease_expiry_date = \'0000-00-00\', \'Unknown\', ( IF ( system.lease_expiry_date < DATE(NOW()), \'Expired\', ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 90 day), \'90+ Days\', ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 60 day), \'60-90 Days\', ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 30 day), \'30-60 Days\', \'Less than 30 Days\' ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.lease_expiry_date = \'2000-01-01\' OR system.lease_expiry_date = \'0000-00-00\', \'system.lease_expiry_date=2000-01-01\', ( IF ( system.lease_expiry_date < DATE(NOW()), CONCAT(\'system.lease_expiry_date=<\', DATE(NOW()), \'&system.lease_expiry_date=!=2000-01-01\'), ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.lease_expiry_date=>\', DATE(NOW() + INTERVAL 90 day)), ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 60 day), CONCAT(\'system.lease_expiry_date=<\', DATE(NOW() + INTERVAL 90 day), \'&system.lease_expiry_date=>\', DATE(NOW() + INTERVAL 60 day)), ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 30 day), CONCAT(\'system.lease_expiry_date=<\', DATE(NOW() + INTERVAL 60 day), \'&system.lease_expiry_date=>\', DATE(NOW() + INTERVAL 30 day)), ( CONCAT(\'system.lease_expiry_date=<\', DATE(NOW() + INTERVAL 30 day), \'&system.lease_expiry_date=>\', DATE(NOW())) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`, `my_description`','devices?@description&properties=system.id,system.icon,system.ip,system.name,system.os_family,system.manufacturer,system.os_family,system.lease_expiry_date,system.status','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (27,'Hardware Additions by Day',1,'Any items in the following tables that are new - bios, disk, memory, module, monitor, motherboard, network, optical, partition, processor, san, scsi, sound, video.','line','','system','create','','Devices','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `system` ON (`system`.`id` = `change_log`.`system_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'bios\', \'disk\', \'memory\', \'module\', \'monitor\', \'motherboard\', \'network\', \'optical\', \'partition\', \'processor\', \'san\', \'scsi\', \'sound\', \'video\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?change_log.db_table=in(\'bios\',\'disk\',\'memory\',\'module\',\'monitor\',\'motherboard\',\'network\',\'optical\',\'partition\',\;processor\',\'san\',\'scsi\',\'sound\',\'video\')&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (28,'Settings Additions by Day',1,'Any items in the following tables that are new - dns, file, ip, log, pagefile, print_queue, route, share, task, user, user_group, variable, vm, windows.','line','','system','create','','Devices','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `system` ON (`system`.`id` = `change_log`.`system_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'dns\', \'file\', \'ip\', \'log\', \'pagefile\', \'print_queue\', \'route\', \'share\', \'task\', \'user\', \'user_group\', \'variable\', \'vm\', \'windows\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?change_log.db_table=in(\'dns\',\'file\',\'ip\',\'log\',\'pagefile\',\'print_queue\',\'route\',\'share\',\'task\',\'user\',\'user_group\',\'variable\',\'vm\',\'windows\')&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (29,'Software Additions by Day',1,'Any items in the following tables that are new - server, server_item, service, software, software_key.','line','','system','create','','Devices','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `system` ON (`system`.`id` = `change_log`.`system_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'server\', \'server_item\', \'service\', \'software\', \'software_key\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?change_log.db_table=in(\'server\',\'server_item\',\'service\',\'software\',\'software_key\')&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (30,'Devices by Org',1,'Devies assigned by Org','pie','','','','','Devices','','',0,'','SELECT orgs.name as `name`, orgs.id AS `description`, count(system.id) AS `count` FROM orgs LEFT JOIN system ON (orgs.id = system.org_id) WHERE @filter GROUP BY orgs.name, orgs.id','devices?system.org_id=@description','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (31,'Application Services',1,'Devices by defined Application','pie','','','','','Devices','','',0,'','SELECT applications.name AS `my_name`, COUNT(application.system_id) AS `count`, applications.id AS `my_description` FROM applications LEFT JOIN application ON (applications.id = application.applications_id) LEFT JOIN `system` ON (application.system_id = system.id) WHERE @filter GROUP BY `my_name`, applications.id','devices?application.applications_id=@description','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (32,'Devices Not Seen (1-7+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( DATE(system.last_seen) = \'2000-01-01\', \'unknown\', ( IF ( DATE(system.last_seen) < DATE(NOW() - INTERVAL 6 day), \'More than 7 Days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 6 day), \'7 days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 5 day), \'6 days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 4 day), \'5 days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 3 day), \'4 days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 2 day), \'3 days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 1 day), \'2 days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 0 day), \'1 day\', \'\') ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( DATE(system.last_seen) = \'2000-01-01\', \'system.last_seen=2000-01-01\', ( IF ( DATE(system.last_seen) < DATE(NOW() - INTERVAL 6 day), CONCAT(\'system.last_seen=<\', DATE(NOW() - INTERVAL 6 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 6 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 6 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 5 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 5 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 4 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 4 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 3 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 3 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 2 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 2 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 1 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 1 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 0 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 0 day)), \'\' ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`','devices?@description','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (33,'Devices by Cloud Type',1,'','pie','','system.instance_provider','','','Devices','','system.instance_provider != \'\'',0,'','','','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (34,'Devices per Cloud',1,'','pie','','','','','Devices','','',0,'','SELECT clouds.name as `name`, clouds.id AS `description`, count(system.id) AS `count` FROM clouds LEFT JOIN system ON (clouds.id = system.cloud_id) WHERE @filter AND system.cloud_id IS NOT NULL GROUP BY clouds.name, clouds.id','devices?system.cloud_id=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (35,'Devices by Cloud Network',1,'','pie','','','','','Devices','','',0,'','SELECT IF(networks.name = networks.network, networks.network, CONCAT(networks.network, \' (\', networks.name, \')\')) as `name`, networks.network AS `description`, count(system.id) AS `count` FROM networks LEFT JOIN ip ON (ip.network = networks.network and ip.current = \'y\') LEFT JOIN system ON (ip.system_id = system.id) WHERE @filter AND networks.options != \'\' GROUP BY networks.network, networks.name ORDER BY networks.network','devices?ip.network=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (36,'Devices by Cloud Region',1,'','pie','','','','','Devices','','',0,'','SELECT CONCAT(clouds.type, \' - \', locations.name) as `name`, locations.id AS `description`, count(system.id) AS `count` FROM locations LEFT JOIN system ON (locations.id = system.location_id) LEFT JOIN clouds ON (system.cloud_id = clouds.id) WHERE @filter AND system.cloud_id IS NOT NULL AND locations.type = \'Cloud\' GROUP BY system.location_id, clouds.type','devices?system.location_id=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (37,'Devices by Instance Type',1,'','pie','','','','','Devices','','',0,'','SELECT CONCAT(clouds.type, \' - \', system.instance_type) as `name`, system.instance_type AS `description`, count(system.id) AS `count` FROM system LEFT JOIN clouds ON (system.cloud_id = clouds.id) WHERE @filter AND system.instance_type != \'\' GROUP BY system.instance_type, clouds.type','devices?system.instance_type=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (38,'Cloud Devices Audited per Day',1,'','line','','','','','Devices','','',0,'','SELECT DATE(audit_log.timestamp) AS `date`, COUNT(DISTINCT audit_log.system_id) AS `count` FROM `audit_log` LEFT JOIN `system` ON (audit_log.system_id = system.id) WHERE @filter AND DATE(audit_log.timestamp) >  DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND system.cloud_id != \'\' GROUP BY DATE(audit_log.timestamp)','devices?audit_log.timestamp=like@date&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.identification,system.os_family,system.status&groupby=audit_log.system_id&system.cloud_id=!=','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (39,'Cloud Instances by Org and Type',1,'','pie','','','','','Devices','','',0,'','SELECT CONCAT(orgs.name, \' - \', system.instance_type) as `name`, CONCAT(system.instance_type, \'&system.org_id=\', orgs.id) AS `description`, count(system.id) AS `count` FROM system LEFT JOIN orgs ON (orgs.id = system.org_id) WHERE @filter AND system.cloud_id != \'\' GROUP BY system.org_id, system.instance_type','devices?system.instance_type=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00');
INSERT INTO `widgets` VALUES (40,'Last Seen By',1,'','pie','','system.last_seen_by','','','Devices Last Seen By','','',0,'','','devices?system.last_seen_by=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.identification,system.manufacturer,system.os_family,system.last_seen_by,system.status','system','2000-01-01');
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
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
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
CREATE DEFINER=`openaudit`@`localhost` FUNCTION `cidr_to_mask`(cidr INT(2)) RETURNS char(15) CHARSET latin1
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

-- Dump completed on 2018-06-25 16:08:29
