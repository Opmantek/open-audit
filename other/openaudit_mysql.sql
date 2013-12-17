-- Open Audit
-- Software and Hardware Inventory
-- (c) Mark Unwin 2012 
-- http://www.open-audit.org
-- Licensed under the AGPL v3
-- http://www.fsf.org/licensing/licenses/agpl-3.0.html 


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
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
SET foreign_key_checks = 0; 


--
-- Table structure for table `oa_asset_order`
--

DROP TABLE IF EXISTS `oa_asset_order`;
CREATE TABLE `oa_asset_order` (
  `order_id` int(10) NOT NULL auto_increment,
  `order_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `order_po` varchar(50) NOT NULL,
  `order_vn` varchar(50) NOT NULL,
  `order_in` varchar(50) NOT NULL,
  `order_vendor` varchar(50) NOT NULL,
  `order_auth_officer` varchar(100) NOT NULL,
  `order_cost_code` varchar(50) NOT NULL,
  `order_notes` text NOT NULL default '',
  PRIMARY KEY  (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oa_asset_line`
--

DROP TABLE IF EXISTS `oa_asset_line`;
CREATE TABLE `oa_asset_line` (
  `line_id` int(10) NOT NULL auto_increment,
  `order_id` int(10) unsigned default NULL,
  `org_id` int(10) unsigned default NULL,
  `select_id` int(10) unsigned default NULL,
  `line_amount` int(10) unsigned default NULL,
  `line_cost_each` int(10) unsigned default NULL,
  `line_tax_each` int(10) unsigned default NULL,
  `line_asset_number` varchar(50) NOT NULL,
  `line_gl` varchar(50) NOT NULL,
  `line_type` enum('', 'sw', 'hw') NOT NULL default '',
  `line_sw_license_expires_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `line_sw_license_key` varchar(50) NOT NULL,
  `line_sw_license_number` varchar(50) NOT NULL,
  `line_sw_license_agreement` varchar(50) NOT NULL,
  `line_sw_license_type` enum('', 'license', 'license and maintenance', 'upgrade', 'upgrade and maintenance', 'maintenance') NOT NULL default '',
  `line_vendor_producit_id` varchar(50) NOT NULL,
  `line_vendor_part_id` varchar(50) NOT NULL,
  `line_maintenance_included` varchar(50) NOT NULL,
  `line_maintenance_date_expires` datetime NOT NULL default '0000-00-00 00:00:00',
  `allocate_type` enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default '',
  `allocate_text` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`line_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oa_asset_select`
--

DROP TABLE IF EXISTS `oa_asset_select`;
CREATE TABLE `oa_asset_select` (
  `select_id` int(10) NOT NULL auto_increment,
  `select_name` varchar(50) NOT NULL,
  `select_type` enum('', 'sw', 'hw', 'service', 'other') NOT NULL default '',
  `select_sql` varchar(250) NOT NULL,
  `group_id` int(10) unsigned default NULL,
  `group_amount` int(10) unsigned default '0',
  PRIMARY KEY  (`select_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oa_alert_log`
--

DROP TABLE IF EXISTS `oa_alert_log`;
CREATE TABLE `oa_alert_log` (
  `alert_id` int(10) NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `alert_table` varchar(50) NOT NULL,
  `alert_foreign_row` int(10) NOT NULL,
  `alert_details` varchar(200) NOT NULL,
  `user_id` int(10) unsigned default NULL,
  `alert_ack_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `alert_note` varchar(200) NOT NULL,
  `external_change_id` varchar(200) NOT NULL,
  `external_change_link` varchar(200) NOT NULL,
  `change_id` int(10) unsigned default NULL,
  `change_type` enum('', 'standard', 'normal', 'emergency', 'unauthorised') NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`alert_id`),
  KEY `system_id` (`system_id`),
  KEY `oa_alert_log_user_id` (`user_id`),
  KEY `oa_alert_change_id` (`change_id`),
  CONSTRAINT `oa_alert_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_alert_log_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_alert_oa_change` FOREIGN KEY (`change_id`) REFERENCES `oa_change` (`change_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_audit_log`
--

DROP TABLE IF EXISTS `oa_audit_log`;
CREATE TABLE `oa_audit_log` (
  `audit_log_id` int(10) NOT NULL auto_increment,
  `user_id` int(10) unsigned default '0',
  `system_id` int(10) unsigned default NULL,
  `audit_log_event_type` varchar(50) NOT NULL,
  `audit_log_event_details` varchar(200) NOT NULL,
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`audit_log_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `oa_audit_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_audit_log_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `oa_change`
--

DROP TABLE IF EXISTS `oa_change`;
CREATE TABLE `oa_change` (
  `change_id` int(10) unsigned NOT NULL auto_increment,
  `change_short_desc` varchar(200) NOT NULL default '',
  `change_reason` text NOT NULL default '',
  `change_planned_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `change_implemented_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `change_external_id` varchar(200) NOT NULL default '',
  `change_external_link` varchar(200) NOT NULL default '',
  `change_authorising_person` varchar(100) NOT NULL default '',
  `change_performing_person` varchar(100) NOT NULL default '',
  `change_detailed_desc` text NOT NULL default '',
  `change_potential_issues` text NOT NULL default '',
  `change_backout_plan` text NOT NULL default '',
  `user_id` int(10) unsigned NOT NULL default '0',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`change_id`),
  CONSTRAINT `oa_change_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_change_log`
--

DROP TABLE IF EXISTS `oa_change_log`;
CREATE TABLE `oa_change_log` (
  `change_log_id` int(10) unsigned NOT NULL auto_increment,
  `change_id` int(10) unsigned NOT NULL default '0',
  `user_id` int(10) unsigned NOT NULL default '0',
  `change_log_attachment` varchar(200) NOT NULL default '',
  `change_log_comments` text NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`change_log_id`),
  KEY `change_id` (`change_id`),
  CONSTRAINT `oa_change_log_change_id` FOREIGN KEY (`change_id`) REFERENCES `oa_change` (`change_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_change_log_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_config`
--

DROP TABLE IF EXISTS `oa_config`;
CREATE TABLE `oa_config` (
  `config_name` varchar(45) NOT NULL default '',
  `config_value` varchar(250) NOT NULL default '',
  `config_editable` varchar(1) NOT NULL default 'n',
  `config_edited_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `config_edited_by` int(10) unsigned NOT NULL default '0',
  `config_description` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_connection`
--

DROP TABLE IF EXISTS `oa_connection`;
CREATE TABLE `oa_connection` (
  `connection_id` int(10) NOT NULL auto_increment,
  `org_id` int(10) unsigned NOT NULL default '0',
  `name` varchar(100) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `service_identifier` varchar(100) NOT NULL,
  `speed` float(7,3) NOT NULL default '0',
  `location_id_a` int(10) unsigned NOT NULL default '0',
  `location_id_b` int(10) unsigned NOT NULL default '0',
  `system_id_a` int(10) unsigned default NULL,
  `system_id_b` int(10) unsigned default NULL,
  `line_number_a` varchar(100) NOT NULL,
  `line_number_b` varchar(100) NOT NULL,
  `ip_address_external_a` varchar(30) NOT NULL,
  `ip_address_external_b` varchar(30) NOT NULL,
  `ip_address_internal_a` varchar(30) NOT NULL,
  `ip_address_internal_b` varchar(30) NOT NULL,
  PRIMARY KEY  (`connection_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_contact`
--

DROP TABLE IF EXISTS `oa_contact`;
CREATE TABLE `oa_contact` (
  `contact_id` int(10) NOT NULL auto_increment,
  `location_id` int(10) unsigned NOT NULL default '0',
  `org_id` int(10) unsigned NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  `phone_number` varchar(20) NOT NULL default '',
  `mobile_number` varchar(20) NOT NULL default '',
  `fax_number` varchar(20) NOT NULL default '',
  `picture` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- table structure for table `oa_device`
--
DROP TABLE IF EXISTS `oa_device`;
CREATE TABLE `oa_device` (
  `dev_id` int(10) unsigned NOT NULL auto_increment,
  `dev_name` varchar(100) NOT NULL default '',
  `dev_group_id` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`dev_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- table structure for table `oa_device_columns`
--
DROP TABLE IF EXISTS `oa_device_col`;
CREATE TABLE `oa_device_col` (
  `col_id` int(10) unsigned NOT NULL auto_increment,
  `dev_id` int(10) unsigned default NULL,
  `col_table` varchar(100) NOT NULL default '',
  `col_column` varchar(100) NOT NULL default '',
  `col_type` varchar(100) NOT NULL default '',
  `col_order` int(10) unsigned default NULL, 
  PRIMARY KEY  (`col_id`),
  KEY `dev_id` (`dev_id`),
  CONSTRAINT `oa_dev_col_dev_id` FOREIGN KEY (`dev_id`) REFERENCES `oa_device` (`dev_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_graph`
--

DROP TABLE IF EXISTS `oa_graph`;
CREATE TABLE `oa_graph` (
  `graph_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `type` enum('disk', 'partition', 'directory', 'file', 'database') NOT NULL default 'partition',
  `foreign_id` int(10) unsigned default NULL,
  `foreign_description` varchar(100) NOT NULL default '',
  `path_to` varchar(200) NOT NULL default '',
  `used` int(10) unsigned NOT NULL default '0',
  `free` int(10) unsigned NOT NULL default '0',
  `total` int(10) unsigned NOT NULL default '0',
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`graph_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `oa_graph_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_group`
--

DROP TABLE IF EXISTS `oa_group`;
CREATE TABLE `oa_group` (
  `group_id` int(10) unsigned NOT NULL auto_increment,
  `group_name` varchar(100) NOT NULL default '',
  `group_padded_name` varchar(100) NOT NULL default '', 
  `group_dynamic_select` text NOT NULL default '',
  `group_parent` int(10) NOT NULL default '1',
  `group_description` varchar(255) NOT NULL default '',
  `group_category` enum('application', 'device', 'general', 'location', 'network', 'org', 'os', 'owner') NOT NULL default 'general',
  `group_display_sql` text NOT NULL default '',
  `group_icon` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`group_id`),
  KEY `group_id_index` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_group_column`
--

DROP TABLE IF EXISTS `oa_group_column`;
CREATE TABLE `oa_group_column` (
  `column_id` int(10) NOT NULL auto_increment,
  `group_id` int(10) unsigned NOT NULL,
  `column_order` int(10) unsigned NOT NULL,
  `column_name` varchar(100) NOT NULL,
  `column_variable` varchar(100) NOT NULL,
  `column_type` enum('', 'link', 'image', 'ip_address', 'text', 'timestamp', 'url') NOT NULL default '',
  `column_link` varchar(100) NOT NULL,
  `column_secondary` varchar(100) NOT NULL,
  `column_ternary` varchar(100) NOT NULL,
  `column_align` varchar(6) NOT NULL,
  PRIMARY KEY  (`column_id`),
  KEY `group_id` (`group_id`),
  CONSTRAINT `oa_group_column_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_group_sys`
--

DROP TABLE IF EXISTS `oa_group_sys`;
CREATE TABLE `oa_group_sys` (
  `group_sys_id` int(10) NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `group_id` int(10) unsigned default NULL,
  `group_sys_type` varchar(20) NOT NULL,
  PRIMARY KEY  (`group_sys_id`),
  KEY `system_id` (`system_id`),
  KEY `group_id` (`group_id`),
  CONSTRAINT `oa_group_sys_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_group_sys_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  KEY `system_id_index` (`system_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_group_user`
--

DROP TABLE IF EXISTS `oa_group_user`;
CREATE TABLE `oa_group_user` (
  `group_user_id` int(10) NOT NULL auto_increment,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `group_user_access_level` int(10) NOT NULL,
  PRIMARY KEY  (`group_user_id`),
  KEY `user_id` (`user_id`),
  KEY `group_id` (`group_id`),
  CONSTRAINT `oa_group_user_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_group_user_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE,
  KEY `user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_location`
--

DROP TABLE IF EXISTS `oa_location`;
CREATE TABLE `oa_location` (
  `location_id` int(10) unsigned NOT NULL auto_increment,
  `location_name` varchar(100) NOT NULL default '',
  `location_type` varchar(100) NOT NULL default '',
  `location_room` varchar(100) NOT NULL default '',
  `location_suite` varchar(100) NOT NULL default '',
  `location_level` varchar(100) NOT NULL default '',
  `location_address` varchar(100) NOT NULL default '',
  `location_suburb` varchar(100) NOT NULL default '',
  `location_city` varchar(100) NOT NULL default '',
  `location_district` varchar(100) NOT NULL default '',
  `location_region` varchar(100) NOT NULL default '',
  `location_area` varchar(100) NOT NULL default '',
  `location_state` varchar(100) NOT NULL default '',
  `location_postcode` varchar(10) NOT NULL default '',
  `location_country` varchar(100) NOT NULL default '',
  `location_tags` varchar(250) NOT NULL default '',
  `location_phone` varchar(20) NOT NULL default '',
  `location_picture` varchar(100) NOT NULL default '',
  `location_latitude` float(10,6) NOT NULL,
  `location_longitude` float(10,6) NOT NULL,
  `location_geo` varchar(200) NOT NULL default '',
  `location_comments` varchar(100) NOT NULL default '',
  `location_icon` varchar(100) NOT NULL default '',
  `location_group_id` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_location_org`
--

DROP TABLE IF EXISTS `oa_location_org`;
CREATE TABLE `oa_location_org` (
  `loc_org_id` int(10) NOT NULL auto_increment,
  `location_id` int(10) unsigned default NULL,
  `location_name` varchar(100) NOT NULL default '',
  `org_id` int(10) unsigned default NULL,
  PRIMARY KEY  (`loc_org_id`),
  KEY `id2` (`location_id`),
  KEY `id3` (`org_id`),
  CONSTRAINT `oa_loc_org_loc_id` FOREIGN KEY (`location_id`) REFERENCES `oa_location` (`location_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_loc_org_org_id` FOREIGN KEY (`org_id`) REFERENCES `oa_org` (`org_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_org`
--

DROP TABLE IF EXISTS `oa_org`;
CREATE TABLE `oa_org` (
  `org_id` int(10) unsigned NOT NULL auto_increment,
  `org_name` varchar(100) NOT NULL default '',
  `org_parent_id` int(10) unsigned NOT NULL default '0',
  `org_group_id` int(10) unsigned NOT NULL default '0',
  `contact_id` varchar(100) NOT NULL default '',
  `org_picture` varchar(100) NOT NULL default '',
  `org_comments` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`org_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_report`
--

DROP TABLE IF EXISTS `oa_report`;
CREATE TABLE `oa_report` (
  `report_id` int(10) unsigned NOT NULL auto_increment,
  `report_name` varchar(100) NOT NULL default '',
  `report_description` text NOT NULL default '',
  `report_display_in_menu` enum('y', 'n') NOT NULL default 'y',
  `report_sql` text NOT NULL default '',
  `report_display_sql` text NOT NULL default '',
  `report_view_file` varchar(100) NOT NULL default '',
  `report_view_contents` text NOT NULL default '',
  `report_processing` text NOT NULL default '',
  `report_sort_column` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_group_column`
--

DROP TABLE IF EXISTS `oa_report_column`;
CREATE TABLE `oa_report_column` (
  `column_id` int(10) NOT NULL auto_increment,
  `report_id` int(10) unsigned NOT NULL,
  `column_order` int(10) unsigned NOT NULL,
  `column_name` varchar(100) NOT NULL,
  `column_variable` varchar(100) NOT NULL,
  `column_type` enum('', 'link', 'image', 'ip_address', 'text', 'timestamp', 'url') NOT NULL default '',
  `column_link` varchar(100) NOT NULL,
  `column_secondary` varchar(100) NOT NULL,
  `column_ternary` varchar(100) NOT NULL,
  `column_align` varchar(6) NOT NULL,
  PRIMARY KEY  (`column_id`),
  KEY `report_id` (`report_id`),
  CONSTRAINT `oa_report_column_group_id` FOREIGN KEY (`report_id`) REFERENCES `oa_report` (`report_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_switch_ports`
--

DROP TABLE IF EXISTS `oa_switch_ports`;
CREATE TABLE `oa_switch_ports` (
  `switch_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `switch_system_id` int(10) unsigned default NULL,
  `switch_port` varchar(100) NOT NULL default '',
  `timestamp` varchar(200) NOT NULL default '',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`switch_id`),
  KEY `system_id` (`system_id`),
  KEY `switch_system_id` (`switch_system_id`),
  CONSTRAINT `oa_switch_ports_switch_switch_id` FOREIGN KEY (`switch_system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `oa_switch_ports_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `oa_user`
--

DROP TABLE IF EXISTS `oa_user`;
CREATE TABLE `oa_user` (
  `user_id` int(10) unsigned NOT NULL auto_increment,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_lang` varchar(100) NOT NULL,
  `user_display_number` smallint(6) NOT NULL default '10',
  `user_theme` varchar(100) NOT NULL,
  `user_admin` varchar(1) NOT NULL,
  `user_active` varchar(1) NOT NULL default 'y',
  `user_change` int(10) NOT NULL default '1',
  `user_sam` int(10) NOT NULL default '1',
  PRIMARY KEY  (`user_id`),
  KEY `user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Definition of table `oa_user_sessions`
--

DROP TABLE IF EXISTS `oa_user_sessions`;
CREATE TABLE  `oa_user_sessions` (
  `session_id` varchar(40) NOT NULL default '0',
  `ip_address` varchar(16) NOT NULL default '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text NOT NULL,
  PRIMARY KEY  (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Table structure for table `sys_hw_bios`
--

DROP TABLE IF EXISTS `sys_hw_bios`;
CREATE TABLE `sys_hw_bios` (
  `bios_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `bios_description` varchar(200) NOT NULL default '',
  `bios_manufacturer` varchar(200) NOT NULL default '',
  `bios_serial` varchar(100) NOT NULL default '',
  `bios_smversion` varchar(100) NOT NULL default '',
  `bios_version` varchar(100) NOT NULL default '',
  `bios_asset_tag` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`bios_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_bios_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_graphs_disk`
--

DROP TABLE IF EXISTS `sys_hw_graphs_disk`;
CREATE TABLE `sys_hw_graphs_disk` (
  `graph_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `disk_id` int(10) unsigned default NULL,
  `partition_id` int(10) unsigned default NULL,
  `directory_id` int(10) unsigned default NULL,
  `database_id` int(10) unsigned default NULL,
  `graph_type` enum('disk', 'partition', 'directory', 'file', 'database') NOT NULL default 'partition',
  `partition_mount_point` varchar(100) NOT NULL default '',
  `dir_description` varchar(100) NOT NULL default '',
  `dir_path` varchar(100) NOT NULL default '',
  `used_percent` int(3) unsigned NOT NULL default '0',
  `free_percent` int(3) unsigned NOT NULL default '0',
  `used` int(10) unsigned NOT NULL default '0',
  `free` int(10) unsigned NOT NULL default '0',
  `total` int(10) unsigned NOT NULL default '0',
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`graph_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_graphs_disk_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_hard_drive`
--

DROP TABLE IF EXISTS `sys_hw_hard_drive`;
CREATE TABLE `sys_hw_hard_drive` (
  `hard_drive_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `hard_drive_caption` varchar(100) NOT NULL default '',
  `hard_drive_index` varchar(100) NOT NULL default '',
  `hard_drive_interface_type` varchar(10) NOT NULL default '',
  `hard_drive_manufacturer` varchar(100) NOT NULL default '',
  `hard_drive_model` varchar(100) NOT NULL default '',
  `hard_drive_serial` varchar(100) NOT NULL default '',
  `hard_drive_partitions` int(10) unsigned NOT NULL default '0',
  `hard_drive_scsi_bus` varchar(10) NOT NULL default '',
  `hard_drive_scsi_logical_unit` varchar(100) NOT NULL default '',
  `hard_drive_scsi_port` varchar(10) NOT NULL default '',
  `hard_drive_size` int(10) unsigned NOT NULL default '0',
  `hard_drive_device_id` varchar(200) NOT NULL default '',
  `hard_drive_status` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`hard_drive_id`),
  KEY `hard_drive_index` (`hard_drive_index`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_hard_drive_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_memory`
--

DROP TABLE IF EXISTS `sys_hw_memory`;
CREATE TABLE `sys_hw_memory` (
  `memory_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `memory_bank` varchar(100) NOT NULL default '',
  `memory_type` varchar(100) NOT NULL default '',
  `memory_form_factor` varchar(100) NOT NULL default '',
  `memory_detail` varchar(100) NOT NULL default '',
  `memory_capacity` int(10) NOT NULL,
  `memory_speed` int(10) NOT NULL,
  `memory_tag` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`memory_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_memory_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_monitor`
--

DROP TABLE IF EXISTS `sys_hw_monitor`;
CREATE TABLE `sys_hw_monitor` (
  `monitor_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `manufacturer` varchar(100) NOT NULL default '',
  `device_id` varchar(100) NOT NULL default '',
  `manufacture_date` varchar(20) NOT NULL default '',
  `model` varchar(100) NOT NULL default '',
  `serial` varchar(50) NOT NULL default '',
  `size` varchar(5) NOT NULL default '',
  `aspect_ratio` varchar(5) NOT NULL default '',
  `man_serial` varchar(50) NOT NULL default '',
  `edid_version` varchar(50) NOT NULL default '',
  `man_description` varchar(100) NOT NULL default '',
  `man_value` varchar(50) NOT NULL default '',
  `man_purchase_order_number` varchar(50) NOT NULL default '',
  `man_date_purchased` date NOT NULL default '0000-00-00',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`monitor_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_monitor_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_motherboard`
--

DROP TABLE IF EXISTS `sys_hw_motherboard`;
CREATE TABLE `sys_hw_motherboard` (
  `motherboard_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `manufacturer` varchar(50) NOT NULL default '',
  `model` varchar(50) NOT NULL default '',
  `serial` varchar(100) NOT NULL default '',
  `memory_slots` int(10) unsigned NOT NULL default '0',
  `processor_slots` int(10) unsigned NOT NULL default '0',
  `processor_type` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`motherboard_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_motherboard_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_network_card`
--

DROP TABLE IF EXISTS `sys_hw_network_card`;
CREATE TABLE `sys_hw_network_card` (
  `net_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `net_mac_address` varchar(17) NOT NULL default '',
  `net_manufacturer` varchar(100) NOT NULL default '',
  `net_model` varchar(100) NOT NULL default '',
  `net_description` varchar(255) NOT NULL default '',
  `net_ip_enabled` varchar(10) NOT NULL default '',
  `net_index` varchar(10) NOT NULL default '',
  `net_dhcp_enabled` varchar(100) NOT NULL default '',
  `net_dhcp_server` varchar(30) NOT NULL default '',
  `net_dhcp_lease_obtained` varchar(14) NOT NULL default '',
  `net_dhcp_lease_expires` varchar(14) NOT NULL default '',
  `net_dns_host_name` varchar(100) NOT NULL default '',
  `net_dns_server` varchar(100) NOT NULL default '',
  `net_dns_domain` varchar(100) NOT NULL default '',
  `net_dns_domain_suffix` varchar(100) NOT NULL default '',
  `net_dns_domain_reg_enabled` varchar(10) NOT NULL default '',
  `net_wins_primary` varchar(30) NOT NULL default '',
  `net_wins_secondary` varchar(30) NOT NULL default '',
  `net_wins_lmhosts_enabled` varchar(10) NOT NULL default '',
  `net_adapter_type` varchar(100) NOT NULL default '',
  `net_connection_id` varchar(255) NOT NULL default '',
  `net_connection_status` varchar(30) NOT NULL default '',
  `net_speed` varchar(10) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`net_id`),
  KEY `net_mac_address` (`net_mac_address`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_network_card_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_network_card_ip`
--

DROP TABLE IF EXISTS `sys_hw_network_card_ip`;
CREATE TABLE `sys_hw_network_card_ip` (
  `ip_id` int(10) unsigned NOT NULL auto_increment,
  `net_mac_address` varchar(17) NOT NULL default '',
  `system_id` int(10) unsigned default NULL,
  `ip_address_v4` varchar(30) NOT NULL default '',
  `ip_address_v6` varchar(30) NOT NULL default '',
  `ip_subnet` varchar(30) NOT NULL default '',
  `ip_address_version` varchar(10) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`ip_id`),
  KEY `id` (`net_mac_address`),
  CONSTRAINT `sys_hw_network_card_ip_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_optical_drive`
--

DROP TABLE IF EXISTS `sys_hw_optical_drive`;
CREATE TABLE `sys_hw_optical_drive` (
  `optical_drive_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `optical_drive_caption` varchar(100) NOT NULL default '',
  `optical_drive_model` varchar(100) NOT NULL default '',
  `optical_drive_device_id` varchar(100) NOT NULL default '',
  `optical_drive_mount_point` varchar(10) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`optical_drive_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_optical_drive_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_partition`
--

DROP TABLE IF EXISTS `sys_hw_partition`;
CREATE TABLE `sys_hw_partition` (
  `partition_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `hard_drive_index` varchar(100) NOT NULL default '',
  `partition_mount_type` varchar(100) NOT NULL default '',
  `partition_mount_point` varchar(100) NOT NULL default '',
  `partition_name` varchar(100) NOT NULL default '',
  `partition_size` int(10) unsigned NOT NULL default '1',
  `partition_free_space` int(10) unsigned NOT NULL default '1',
  `partition_used_space` int(10) unsigned NOT NULL default '1',
  `partition_format` varchar(20) NOT NULL default '',
  `partition_caption` varchar(100) NOT NULL default '',
  `partition_device_id` varchar(100) NOT NULL default '',
  `partition_disk_index` varchar(50) NOT NULL default '',
  `partition_bootable` varchar(10) NOT NULL default '',
  `partition_type` varchar(50) NOT NULL default '',
  `partition_quotas_supported` varchar(10) NOT NULL default '',
  `partition_quotas_enabled` varchar(10) NOT NULL default '',
  `partition_serial` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`partition_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_partition_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_processor`
--

DROP TABLE IF EXISTS `sys_hw_processor`;
CREATE TABLE `sys_hw_processor` (
  `processor_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `processor_cores` int(2) unsigned NOT NULL default '0',
  `processor_description` varchar(100) NOT NULL default '',
  `processor_speed` int(10) unsigned NOT NULL default '0',
  `processor_manufacturer` varchar(100) NOT NULL default '',
  `processor_power_management_supported` varchar(20) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`processor_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_processor_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_scsi_controller`
--

DROP TABLE IF EXISTS `sys_hw_scsi_controller`;
CREATE TABLE `sys_hw_scsi_controller` (
  `scsi_controller_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `scsi_controller_name` varchar(200) NOT NULL default '',
  `scsi_controller_manufacturer` varchar(100) NOT NULL default '',
  `scsi_controller_device_id` varchar(200) NOT NULL default '',
  `scsi_controller_type` enum('raid', 'hba', 'other') NOT NULL default 'other',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`scsi_controller_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_scsi_controller_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_sound`
--

DROP TABLE IF EXISTS `sys_hw_sound`;
CREATE TABLE `sys_hw_sound` (
  `sound_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `sound_manufacturer` varchar(100) NOT NULL default '',
  `sound_device_id` varchar(100) NOT NULL default '',
  `sound_name` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`sound_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_sound_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_video`
--

DROP TABLE IF EXISTS `sys_hw_video`;
CREATE TABLE `sys_hw_video` (
  `video_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `video_description` varchar(100) NOT NULL default '',
  `video_manufacturer` varchar(100) NOT NULL default '',
  `video_current_horizontal_res` varchar(20) NOT NULL default '',
  `video_current_vertical_res` varchar(20) NOT NULL default '',
  `video_memory` varchar(100) NOT NULL default '',
  `video_caption` varchar(100) NOT NULL default '',
  `video_current_number_colours` varchar(20) NOT NULL default '',
  `video_current_refresh_rate` varchar(20) NOT NULL default '',
  `video_device_id` varchar(100) NOT NULL default '',
  `video_driver_date` varchar(20) NOT NULL default '',
  `video_driver_version` varchar(20) NOT NULL default '',
  `video_max_refresh_rate` varchar(20) NOT NULL default '',
  `video_min_refresh_rate` varchar(20) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`video_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_video_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_hw_warranty`
--

DROP TABLE IF EXISTS `sys_hw_warranty`;
CREATE TABLE `sys_hw_warranty` (
  `warranty_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `warranty_provider` varchar(200) NOT NULL default '',
  `warranty_type` varchar(100) NOT NULL default '',
  `warranty_start` datetime NOT NULL default '0000-00-00 00:00:00',
  `warranty_end` datetime NOT NULL default '0000-00-00 00:00:00',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`warranty_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_hw_warranty_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `sys_man_audits`
--

DROP TABLE IF EXISTS `sys_man_audits`;
CREATE TABLE `sys_man_audits` (
  `system_audits_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `system_audits_username` varchar(45) NOT NULL default '',
  `system_audits_type` varchar(45) NOT NULL default '',
  `system_audits_time` varchar(45) NOT NULL default '',
  `system_audits_ip` varchar(30) NOT NULL default '',
  `audit_debug` text NOT NULL default '',
  `audit_wmi_fails` text NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`system_audits_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_man_audits_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_man_additional_fields`
--

DROP TABLE IF EXISTS `sys_man_additional_fields`;
CREATE TABLE `sys_man_additional_fields` (
  `field_id` int(10) unsigned NOT NULL auto_increment,
  `group_id` int(10) unsigned NOT NULL,
  `field_name` varchar(100) NOT NULL default '',
  `field_type` enum('varchar', 'bool', 'int', 'memo', 'list', 'datetime', 'timestamp') NOT NULL default 'varchar',
  `field_values` varchar(100) NOT NULL default '',
  `field_sys_type` varchar(100) NOT NULL default '',
  `field_derived_type` varchar(100) NOT NULL default '',
  `field_derived_sql` varchar(100) NOT NULL default '',
  `field_placement` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`field_id`),
  KEY `sys_man_additional_fields_group` (`group_id`),
  CONSTRAINT `sys_man_additional_fields_group_id` FOREIGN KEY (`group_id`) REFERENCES `oa_group` (`group_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_man_additional_fields_data`
--

DROP TABLE IF EXISTS `sys_man_additional_fields_data`;
CREATE TABLE `sys_man_additional_fields_data` (
  `field_details_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `field_id` int(10) unsigned NOT NULL default '0',
  `field_datetime` datetime NOT NULL default '2000-01-01 00:00:00',
  `field_varchar` varchar(255) NOT NULL default '',
  `field_int` int(10) NOT NULL default '0',
  `field_memo` text NOT NULL default '',
  PRIMARY KEY  (`field_details_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_man_additional_fields_data_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_man_additional_fields_data_field_id` FOREIGN KEY (`field_id`) REFERENCES `sys_man_additional_fields` (`field_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_man_attachment`
--

DROP TABLE IF EXISTS `sys_man_attachment`;
CREATE TABLE `sys_man_attachment` (
  `att_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `user_id` int(10) unsigned default NULL,
  `att_title` varchar(200) NOT NULL default '',
  `att_filename` text NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`att_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `att_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `att_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_man_invoice`
--

DROP TABLE IF EXISTS `sys_man_invoice`;
CREATE TABLE `sys_man_invoice` (
  `invoice_id` int(10) unsigned NOT NULL auto_increment,
  `org_id` int(10) unsigned default NULL,
  `purchase_order` varchar(100) NOT NULL default '',
  `cost_center` varchar(100) NOT NULL default '',
  `date_received` varchar(100) NOT NULL default '',
  `date_paid` varchar(100) NOT NULL default '',
  `supplier` varchar(100) NOT NULL default '',
  `filename` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_man_invoice_line`
--

DROP TABLE IF EXISTS `sys_man_invoice_line`;
CREATE TABLE `sys_man_invoice_line` (
  `line_id` int(10) unsigned NOT NULL auto_increment,
  `invoice_id` int(10) unsigned default NULL,
  `line_text` varchar(200) NOT NULL default '',
  `system_id` int(10) unsigned default NULL,
  `man_serial` varchar(200) NOT NULL default '',
  `man_asset_number` varchar(200) NOT NULL default '',
  `line_amount` varchar(200) NOT NULL default '',
  `notes` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`line_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_man_notes`
--

DROP TABLE IF EXISTS `sys_man_notes`;
CREATE TABLE `sys_man_notes` (
  `notes_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `user_id` int(10) unsigned default NULL,
  `notes_title` varchar(200) NOT NULL default '',
  `notes_text` text NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`notes_id`),
  KEY `system_id` (`system_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `sys_man_notes_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_man_notes_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_antivirus`
--

DROP TABLE IF EXISTS `sys_sw_antivirus`;
CREATE TABLE `sys_sw_antivirus` (
  `virus_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `virus_manufacturer` varchar(150) NOT NULL default '',
  `virus_version` varchar(45) NOT NULL default '',
  `virus_name` varchar(100) NOT NULL default '',
  `virus_uptodate` varchar(45) NOT NULL default '',
  `virus_def_date` date NOT NULL default '0000-00-00',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`virus_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_antivirus_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_database`
--

DROP TABLE IF EXISTS `sys_sw_database`;
CREATE TABLE `sys_sw_database` (
  `db_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `db_type` varchar(50) NOT NULL default '',
  `db_version` varchar(50) NOT NULL default '',
  `db_version_string` varchar(50) NOT NULL default '',
  `db_edition` varchar(50) NOT NULL default '',
  `db_port` int(10) unsigned default NULL,
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`db_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_db_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_database_details`
--

DROP TABLE IF EXISTS `sys_sw_database_details`;
CREATE TABLE `sys_sw_database_details` (
  `details_id` int(10) unsigned NOT NULL auto_increment,
  `db_id` int(10) unsigned default NULL,
  `system_id` int(10) unsigned default NULL,
  `details_name` varchar(50) NOT NULL default '',
  `details_internal_id` varchar(50) NOT NULL default '',
  `details_instance` varchar(50) NOT NULL default '',
  `details_current_size` varchar(50) NOT NULL default '',
  `details_compatibility_mode` varchar(50) NOT NULL default '',
  `details_filename` varchar(200) NOT NULL default '',
  `details_creation_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `details_last_accessed_date` varchar(50) NOT NULL default '',
  `details_last_accessed_login_name` varchar(50) NOT NULL default '',
  `details_last_accessed_hostname` varchar(50) NOT NULL default '',
  `details_last_accessed_program` varchar(50) NOT NULL default '',
  `details_last_accessed_domain` varchar(50) NOT NULL default '',
  `details_last_accessed_username` varchar(50) NOT NULL default '',
  `details_last_accessed_protocol` varchar(50) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`details_id`),
  KEY `system_id` (`db_id`),
  CONSTRAINT `sys_sw_db_id` FOREIGN KEY (`db_id`) REFERENCES `sys_sw_database` (`db_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_dns`
--

DROP TABLE IF EXISTS `sys_sw_dns`;
CREATE TABLE `sys_sw_dns` (
  `dns_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `dns_name` varchar(100) NOT NULL default '',
  `dns_full_name` varchar(200) NOT NULL default '',
  `dns_ip_address` varchar(30) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`dns_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_dns_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_group`
--

DROP TABLE IF EXISTS `sys_sw_group`;
CREATE TABLE `sys_sw_group` (
  `group_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `group_name` varchar(100) NOT NULL default '',
  `group_description` varchar(200) NOT NULL default '',
  `group_sid` varchar(100) NOT NULL default '',
  `group_members` text NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`group_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_groups_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_log`
--

DROP TABLE IF EXISTS `sys_sw_log`;
CREATE TABLE `sys_sw_log` (
  `log_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `log_name` varchar(50) NOT NULL default '',
  `log_file_name` varchar(250) NOT NULL default '',
  `log_file_size` int(10) NOT NULL default '0',
  `log_max_file_size` int(10) NOT NULL default '0',
  `log_overwrite` varchar(30) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`log_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_netstat`
--

DROP TABLE IF EXISTS `sys_sw_netstat`;
CREATE TABLE `sys_sw_netstat` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `protocol` enum('tcp', 'udp', 'tcp6', 'udp6', '') NOT NULL default '',
  `ip_address` varchar(45) NOT NULL default '',
  `port` int(5) NOT NULL default '0',
  `program`  varchar(250) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_netstat_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_route`
--

DROP TABLE IF EXISTS `sys_sw_route`;
CREATE TABLE `sys_sw_route` (
  `route_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `destination` varchar(20) NOT NULL default '',
  `mask` varchar(20) NOT NULL default '',
  `metric` varchar(10) NOT NULL default '',
  `next_hop` varchar(20) NOT NULL default '',
  `protocol` varchar(10) NOT NULL default '',
  `type` varchar(10) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`route_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_ip_route_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_pagefile`
--

DROP TABLE IF EXISTS `sys_sw_pagefile`;
CREATE TABLE `sys_sw_pagefile` (
  `pagefile_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `pagefile_name` varchar(100) NOT NULL default '',
  `pagefile_initial_size` varchar(10) NOT NULL default '',
  `pagefile_max_size` varchar(10) NOT NULL default '',
  `pagefile_size` varchar(10) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`pagefile_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_pagefile_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_print_queue`
--

DROP TABLE IF EXISTS `sys_sw_print_queue`;
CREATE TABLE `sys_sw_print_queue` (
  `queue_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `queue_system_key` varchar(100) NOT NULL default '',
  `queue_name` varchar(100) NOT NULL default '',
  `queue_port_name` varchar(100) NOT NULL default '',
  `queue_ip_address` varchar(100) NOT NULL default '',
  `queue_description` varchar(100) NOT NULL default '',
  `queue_model` varchar(100) NOT NULL default '',
  `queue_manufacturer` varchar(100) NOT NULL default '',
  `queue_shared` varchar(100) NOT NULL default '',
  `queue_shared_name` varchar(100) NOT NULL default '',
  `queue_location` varchar(100) NOT NULL default '',
  `queue_color` varchar(100) NOT NULL default '',
  `queue_duplex` varchar(100) NOT NULL default '',
  `queue_type` enum('virtual', 'physical', '') NOT NULL default '',
  `queue_connection_status` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`queue_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_print_queue_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_scheduled_task`
--

DROP TABLE IF EXISTS `sys_sw_scheduled_task`;
CREATE TABLE `sys_sw_scheduled_task` (
  `sched_task_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `sched_task_name` varchar(100) NOT NULL default '',
  `sched_task_next_run` varchar(50) NOT NULL default '',
  `sched_task_status` varchar(50) NOT NULL default '',
  `sched_task_last_run` varchar(50) NOT NULL default '',
  `sched_task_last_result` varchar(50) NOT NULL default '',
  `sched_task_creator` varchar(50) NOT NULL default '',
  `sched_task_schedule` varchar(100) NOT NULL default '',
  `sched_task_task` varchar(100) NOT NULL default '',
  `sched_task_state` varchar(10) NOT NULL default '',
  `sched_task_runas` varchar(50) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`sched_task_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_scheduled_task_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_service`
--

DROP TABLE IF EXISTS `sys_sw_service`;
CREATE TABLE `sys_sw_service` (
  `service_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `user_id` int(10) unsigned default NULL,
  `service_display_name` varchar(100) NOT NULL default '',
  `service_name` varchar(100) NOT NULL default '',
  `service_path_name` text NOT NULL default '',
  `service_started` varchar(10) NOT NULL default '',
  `service_start_name` varchar(100) NOT NULL default '',
  `service_start_mode` varchar(10) NOT NULL default '',
  `service_state` varchar(20) NOT NULL default '',
  `service_count` varchar(5) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`service_id`),
  KEY `system_id` (`system_id`),
  KEY `timestamp` (`timestamp`),
  KEY `first_timestamp` (`first_timestamp`),
  KEY `service_name` (`service_name`),
  KEY `service_display_name` (`service_display_name`),
  CONSTRAINT `sys_sw_service_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_share`
--

DROP TABLE IF EXISTS `sys_sw_share`;
CREATE TABLE `sys_sw_share` (
  `share_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `share_caption` varchar(250) NOT NULL default '',
  `share_name` varchar(250) NOT NULL default '',
  `share_path` varchar(250) NOT NULL default '',
  `share_size` varchar(10) NOT NULL default '',
  `share_users` varchar(200) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`share_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_share_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_share_perms`
--

DROP TABLE IF EXISTS `sys_sw_share_perms`;
CREATE TABLE `sys_sw_share_perms` (
  `perm_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `share_id` int(10) unsigned default NULL,
  `perm_prefix` varchar(100) NOT NULL default '',
  `perm_name` varchar(100) NOT NULL default '',
  `perm_type` enum('local_user', 'local_group', 'domain_user', 'domain_group', 'remote_user', 'remote_group') NOT NULL default 'local_user',
  `perm_access` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`perm_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_share_perm_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_sw_share_perm_share_id` FOREIGN KEY (`share_id`) REFERENCES `sys_sw_share` (`share_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_software`
--

DROP TABLE IF EXISTS `sys_sw_software`;
CREATE TABLE `sys_sw_software` (
  `software_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `software_name` varchar(255) NOT NULL default '',
  `software_version` varchar(255) NOT NULL default '',
  `software_location` varchar(255) NOT NULL default '',
  `software_uninstall` mediumtext NOT NULL,
  `software_install_date` varchar(100) NOT NULL default '',
  `software_installed_by` varchar(100) NOT NULL default '',
  `software_installed_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `software_publisher` varchar(255) NOT NULL default '',
  `software_install_source` varchar(200) NOT NULL default '',
  `software_system_component` varchar(2) NOT NULL default '',
  `software_url` varchar(255) NOT NULL default '',
  `software_email` varchar(255) NOT NULL default '',
  `software_comment` varchar(200) NOT NULL default '',
  `software_man_comment` varchar(200) NOT NULL default '',
  `software_count` varchar(5) NOT NULL default '',
  `software_code_base` varchar(255) NOT NULL default '',
  `software_status` varchar(45) NOT NULL default '',
  `software_key` varchar(45) NOT NULL default '',
  `software_key_release` varchar(45) NOT NULL default '',
  `software_key_edition` varchar(45) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`software_id`),
  KEY `system_id` (`system_id`),
  KEY `timestamp` (`timestamp`),
  KEY `first_timestamp` (`first_timestamp`),
  KEY `software_name` (`software_name`),
  CONSTRAINT `sys_sw_software_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_software_key`
--

DROP TABLE IF EXISTS `sys_sw_software_key`;
CREATE TABLE `sys_sw_software_key` (
  `key_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `key_name` varchar(250) NOT NULL default '',
  `key_text` varchar(100) NOT NULL default '',
  `key_release` varchar(100) NOT NULL default '',
  `key_edition` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`key_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_software_key_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_user`
--

DROP TABLE IF EXISTS `sys_sw_user`;
CREATE TABLE `sys_sw_user` (
  `user_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `user_name` varchar(100) NOT NULL default '',
  `user_caption` varchar(255) NOT NULL default '',
  `user_sid` varchar(100) NOT NULL default '',
  `user_domain` varchar(100) NOT NULL default '',
  `user_disabled` varchar(20) NOT NULL default '',
  `user_full_name` varchar(100) NOT NULL default '',
  `user_password_changeable` varchar(20) NOT NULL default '',
  `user_password_expires` varchar(20) NOT NULL default '',
  `user_password_required` varchar(20) NOT NULL default '',
  `user_status` varchar(100) NOT NULL default '',
  `user_type` enum('local', 'domain', 'database', 'application') NOT NULL default 'local',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`user_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_user_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_variable`
--

DROP TABLE IF EXISTS `sys_sw_variable`;
CREATE TABLE `sys_sw_variable` (
  `variable_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `variable_name` varchar(100) NOT NULL default '',
  `variable_value` text NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`variable_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_variable_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_web_server`
--

DROP TABLE IF EXISTS `sys_sw_web_server`;
CREATE TABLE `sys_sw_web_server` (
  `webserver_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `webserver_type` varchar(100) NOT NULL default '', 
  `webserver_version` varchar(100) NOT NULL default '', 
  `webserver_state` varchar(100) NOT NULL default '', 
  `webserver_man_description` varchar(100) NOT NULL default '',
  `webserver_log_enabled` varchar(100) NOT NULL default '',
  `webserver_log_dir` varchar(100) NOT NULL default '',
  `webserver_log_format` varchar(100) NOT NULL default '',
  `webserver_log_time_period` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`webserver_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_web_server_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_web_server_extn`
--

DROP TABLE IF EXISTS `sys_sw_web_server_ext`;
CREATE TABLE `sys_sw_web_server_ext` (
  `ext_id` int(10) unsigned NOT NULL auto_increment,
  `webserver_id` int(10) unsigned default NULL,
  `system_id` int(10) unsigned default NULL,
  `ext_name` varchar(100) NOT NULL default '', 
  `ext_path` varchar(100) NOT NULL default '',
  `ext_access` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`ext_id`),
  KEY `webserver_id` (`webserver_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_web_server_extn_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_sw_web_server_extn_server_id` FOREIGN KEY (`webserver_id`) REFERENCES `sys_sw_web_server` (`webserver_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_web_site`
--

DROP TABLE IF EXISTS `sys_sw_web_site`;
CREATE TABLE `sys_sw_web_site` (
  `site_id` int(10) unsigned NOT NULL auto_increment,
  `webserver_id` int(10) unsigned default NULL,
  `system_id` int(10) unsigned default NULL,
  `site_internal_id` int(12) unsigned default NULL,
  `site_description` varchar(100) NOT NULL default '',
  `site_state` varchar(100) NOT NULL default '',
  `site_logging` varchar(100) NOT NULL default '',
  `site_log_format` varchar(100) NOT NULL default '',
  `site_log_directory` varchar(100) NOT NULL default '',
  `site_log_rotation` varchar(100) NOT NULL default '',
  `site_secure_ip` varchar(100) NOT NULL default '',
  `site_secure_port` varchar(100) NOT NULL default '',
  `site_path` varchar(100) NOT NULL default '',
  `site_size` varchar(100) NOT NULL default '',
  `site_app_pool` varchar(100) NOT NULL default '',
  `site_directory_browsing` varchar(100) NOT NULL default '',
  `site_anon_user` varchar(100) NOT NULL default '',
  `site_anon_auth` varchar(100) NOT NULL default '',
  `site_basic_auth` varchar(100) NOT NULL default '',
  `site_ntlm_auth` varchar(100) NOT NULL default '',
  `site_ssl_enabled` varchar(100) NOT NULL default '',
  `site_ssl_128_enabled` varchar(100) NOT NULL default '',
  `site_default_documents` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`site_id`),
  KEY `webserver_id` (`webserver_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_web_site_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_sw_web_site_server_id` FOREIGN KEY (`webserver_id`) REFERENCES `sys_sw_web_server` (`webserver_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_web_site_header`
--

DROP TABLE IF EXISTS `sys_sw_web_site_header`;
CREATE TABLE `sys_sw_web_site_header` (
  `header_id` int(10) unsigned NOT NULL auto_increment,
  `site_id` int(10) unsigned default NULL,
  `system_id` int(10) unsigned default NULL,
  `header_address` varchar(30) NOT NULL default '',
  `header_port` varchar(100) NOT NULL default '',
  `header_hostname` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`header_id`),
  KEY `site_id` (`site_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_web_site_header_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_sw_web_site_header_site_id` FOREIGN KEY (`site_id`) REFERENCES `sys_sw_web_site` (`site_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_web_site_virtual`
--

DROP TABLE IF EXISTS `sys_sw_web_site_virtual`;
CREATE TABLE `sys_sw_web_site_virtual` (
  `virtual_id` int(10) unsigned NOT NULL auto_increment,
  `site_id` int(10) unsigned default NULL,
  `system_id` int(10) unsigned default NULL,
  `virtual_name` varchar(100) NOT NULL default '',
  `virtual_path` varchar(100) NOT NULL default '',
  `virtual_app_pool` varchar(100) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`virtual_id`),
  KEY `site_id` (`site_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_web_site_virtual_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE,
  CONSTRAINT `sys_sw_web_site_virtual_site_id` FOREIGN KEY (`site_id`) REFERENCES `sys_sw_web_site` (`site_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `sys_sw_windows`
--

DROP TABLE IF EXISTS `sys_sw_windows`;
CREATE TABLE `sys_sw_windows` (
  `windows_id` int(10) unsigned NOT NULL auto_increment,
  `system_id` int(10) unsigned default NULL,
  `windows_build_number` varchar(20) NOT NULL default '',
  `windows_user_name` varchar(100) NOT NULL default '',
  `windows_client_site_name` varchar(100) NOT NULL default '',
  `windows_domain_short` varchar(100) NOT NULL default '',
  `windows_domain_controller_address` varchar(100) NOT NULL default '',
  `windows_domain_controller_name` varchar(100) NOT NULL default '',
  `windows_domain_role` varchar(40) NOT NULL default '',
  `windows_part_of_domain` varchar(10) NOT NULL default '',
  `windows_id_number` varchar(100) NOT NULL default '',
  `windows_time_caption` varchar(100) NOT NULL default '',
  `windows_time_daylight` varchar(100) NOT NULL default '',
  `windows_boot_device` varchar(100) NOT NULL default '',
  `windows_country_code` varchar(50) NOT NULL default '',
  `windows_organisation` varchar(80) NOT NULL default '',
  `windows_language` varchar(50) NOT NULL default '',
  `windows_registered_user` varchar(50) NOT NULL default '',
  `windows_service_pack` varchar(20) NOT NULL default '',
  `windows_version` varchar(20) NOT NULL default '',
  `windows_install_directory` varchar(20) NOT NULL default '',
  `windows_active_directory_ou` varchar(200) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`windows_id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `sys_sw_windows_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `system`
--

DROP TABLE IF EXISTS `system`;
CREATE TABLE `system` (
  `system_id` int(10) unsigned NOT NULL auto_increment,
  `system_key` varchar(200) NOT NULL default '',
  `uuid` varchar(100) NOT NULL default '',
  `hostname` varchar(100) NOT NULL default '',
  `domain` varchar(100) NOT NULL default '',
  `fqdn` text NOT NULL default '',
  `description` varchar(250) NOT NULL default '',
  `type` varchar(50) NOT NULL default '',
  `icon` varchar(50) NOT NULL default '',
  `os_group` varchar(50) NOT NULL default '',
  `os_family` varchar(50) NOT NULL default '',
  `os_name` varchar(100) NOT NULL default '',
  `os_version` varchar(50) NOT NULL default '',
  `linked_sys` int(10) NOT NULL default '0',
  `serial` varchar(200) NOT NULL default '',
  `model` varchar(200) NOT NULL default '',
  `manufacturer` varchar(50) NOT NULL default '',
  `uptime` varchar(50) NOT NULL default '', 
  `form_factor` varchar(50) NOT NULL default '',
  `pc_os_bit` varchar(3) NOT NULL default '', 
  `pc_memory` int(10) NOT NULL default '0',
  `pc_num_processor` int(10) NOT NULL default '0',
  `pc_date_os_installation` date NOT NULL default '0000-00-00',
  `printer_port_name` varchar(50) NOT NULL default '',
  `printer_shared` varchar(50) NOT NULL default '',
  `printer_shared_name` varchar(50) NOT NULL default '',
  `printer_color` varchar(5) NOT NULL default '', 
  `printer_duplex` varchar(5) NOT NULL default '', 
  `man_os_group` varchar(50) NOT NULL default '',
  `man_os_family` varchar(50) NOT NULL default '',
  `man_os_name` varchar(100) NOT NULL default '',
  `man_domain` varchar(100) NOT NULL default '',
  `man_status` enum('production', 'retired', 'maintenance', 'deleted', 'unallocated', 'lost') NOT NULL default 'production',
  `man_environment` enum('production', 'pre-prod', 'test', 'uat', 'dev', 'eval', 'dr', 'train') NOT NULL default 'production',
  `man_criticality` enum('critical', 'normal', 'low') NOT NULL default 'normal', 
  `man_class` enum('desktop','laptop','tablet','workstation','server','virtual server','virtual desktop','') NOT NULL default '', 
  `man_description` varchar(250) NOT NULL default '',
  `man_function` varchar(100) NOT NULL default '',
  `man_type` varchar(100) NOT NULL default '',
  `man_ip_address` varchar(30) NOT NULL default '',
  `man_owner` varchar(100) NOT NULL default '',
  `man_org_id` int(10) unsigned NOT NULL default '0',
  `man_location_id` int(10) unsigned NOT NULL default '0',
  `man_location_level` varchar(100) NOT NULL default '',
  `man_location_suite` varchar(100) NOT NULL default '',
  `man_location_room` varchar(100) NOT NULL default '',
  `man_location_rack` varchar(100) NOT NULL default '',
  `man_location_rack_position` varchar(100) NOT NULL default '',
  `man_location_rack_size` int(10) unsigned NOT NULL default '0', 
  `man_serial` varchar(200) NOT NULL default '',
  `man_asset_number` varchar(50) NOT NULL default '',
  `man_model` varchar(50) NOT NULL default '',
  `man_manufacturer` varchar(50) NOT NULL default '',
  `man_form_factor` varchar(50) NOT NULL default '',
  `man_icon` varchar(50) NOT NULL default '',
  `man_vm_server_name` varchar(150) NOT NULL default '',
  `man_vm_system_id` varchar(150) NOT NULL default '',
  `man_vm_group` varchar(150) NOT NULL default '',
  `man_cluster_name` varchar(150) NOT NULL default '',
  `invoice_id` int(10) unsigned default NULL,
  `man_purchase_invoice` varchar(50) NOT NULL default '',
  `man_purchase_order_number` varchar(50) NOT NULL default '',
  `man_purchase_cost_center` varchar(50) NOT NULL default '',
  `man_purchase_vendor` varchar(100) NOT NULL default '',
  `man_purchase_date` date NOT NULL default '0000-00-00',
  `man_purchase_amount` varchar(50) NOT NULL default '',
  `man_warranty_duration` int(5) unsigned NOT NULL default '0',
  `man_warranty_expires` date NOT NULL default '0000-00-00',
  `man_warranty_type` enum('', '24x7x365', '9x5x5', 'Next Business Day') NOT NULL default '', 
  `man_terminal_number` int(10) NOT NULL default '0',
  `man_switch_id` varchar(100) NOT NULL default '',
  `man_switch_port` varchar(100) NOT NULL default '',
  `man_patch_panel` varchar(45) NOT NULL default '',
  `man_patch_panel_port` varchar(45) NOT NULL default '',
  `man_wall_port` varchar(100) NOT NULL default '',
  `man_picture` varchar(100) NOT NULL default '',
  `contact_name` varchar(50) NOT NULL default '',
  `contact_id` int(10) unsigned NOT NULL default '0',
  `man_service_number` varchar(100) NOT NULL default '', 
  `man_service_provider` varchar(100) NOT NULL default '', 
  `man_service_type` varchar(100) NOT NULL default '', 
  `man_service_plan` varchar(100) NOT NULL default '', 
  `man_service_network` varchar(100) NOT NULL default '', 
  `man_unlock_pin` varchar(100) NOT NULL default '', 
  `man_serial_imei` varchar(100) NOT NULL default '', 
  `man_serial_sim` varchar(100) NOT NULL default '', 
  `nmap_type` varchar(50) NOT NULL default '',
  `last_seen` datetime NOT NULL default '0000-00-00 00:00:00',
  `last_seen_by` varchar(150) NOT NULL default '',
  `last_user` varchar(150) NOT NULL default '',
  `access_details` text NOT NULL default '',
  `snmp_oid` text NOT NULL default '',
  `nmis_group` varchar(50) NOT NULL default '',
  `nmis_name` varchar(50) NOT NULL default '',
  `nmis_role` varchar(50) NOT NULL default '',
  `system_key_type` varchar(4) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `first_timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`system_id`),
  KEY `id` (`timestamp`),
  KEY `id2` (`system_key`),
  KEY `id3` (`man_ip_address`),
  KEY `system_id` (`system_id`),
  KEY `hostname` (`hostname`),
  KEY `linked_sys` (`linked_sys`),
  KEY `system_key` (`system_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET character_set_client = @saved_cs_client;

INSERT INTO `oa_group` VALUES  (1,'All Devices','', 'SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\'',1,'Any items that have their status attribute set to production.','device','','devices');

INSERT INTO `oa_group_column` VALUES (NULL, '1', '1', 'Icon', 'man_icon', 'image', '',  'man_os_family', '', 'left');
INSERT INTO `oa_group_column` VALUES (NULL, '1', '2', 'Hostname', 'hostname', 'link', '/main/system_display/', 'system_id', '', 'left');
INSERT INTO `oa_group_column` VALUES (NULL, '1', '3', 'IP Address', 'man_ip_address', 'ip_address', '',  '', '', 'left');
INSERT INTO `oa_group_column` VALUES (NULL, '1', '4', 'Type', 'man_type', 'text', '',  '', '', 'left');
INSERT INTO `oa_group_column` VALUES (NULL, '1', '5', 'Description', 'man_description', 'text', '',  '', '', 'left');
INSERT INTO `oa_group_column` VALUES (NULL, '1', '6', 'OS / Device', 'man_os_name', 'text', '',  '', '', 'left');
INSERT INTO `oa_group_column` VALUES (NULL, '1', '7', 'Tags', 'tag',  'text', '',  '', '', 'left');

INSERT INTO `oa_user` VALUES  (1, 'admin', '0ab0a153e5bbcd80c50a02da8c97f3c87686eb8512f5457d30e328d2d4448c8968e9f4875c2eb61356197b851dd33f90658b20b32139233b217be54d903ca3b6', 'Administrator', 'admin@openaudit', 'en', '10', 'tango', 'y', 'y', '10', '3');
INSERT INTO `oa_user` VALUES  (2, 'open-audit_enterprise', '43629bd846bb90e40221d5276c832857ca51e49e325f7344704543439ffd6b6d3a963a32a41f55fca6d995fd302acbe03ea7d8bf2b3af91d662d497b0ad9ba1e', 'Open-AudIT Enterprise', '', 'en', '10', 'tango', 'n', 'y', '1', '1');
INSERT INTO `oa_user` VALUES  (3, 'nmis', '5a7f9a638ea430196d765ef8d3875eafd64ee3d155ceddaced75467a76b97ab24080cba4a2e74cde03799a6a49dbc5c36ee204eff1d5f42e08cf7a423fdf9757', 'NMIS', '', 'en', '10', 'tango', 'y', 'y', '10', '3');

INSERT INTO `oa_group_user` VALUES  (1,1,1,10);
INSERT INTO `oa_group_user` VALUES  (2,2,1,3);

INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('internal_version', '20131219', 'n', 'The internal numerical version.');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('display_version', '1.1', 'n', 'The version shown on the web pages.');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('non_admin_search', 'y', 'y', 'Enable or disable search for non-Administrators');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('ad_domain', '', 'y', 'The domain name against which your users will validate. EG - open-audit.org');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('ad_server', '', 'y', 'The IP Address of your domain controller. EG - 192.168.0.1');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('auto_create_network_groups', 'y', 'y', 'Have Open-AudIT automatically create Groups based on Subnet.');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('nmis', 'n', 'y', 'Enable import / export to NMIS functions.');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('oae_url', 'http://localhost/omk/oae', 'y', 'The web server address of Open-AudIT Enterprise.');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('nmis_url', 'http://localhost/cgi-nmis8/nmiscgi.pl', 'y', 'The web server address of Open-AudIT Enterprise.');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('logo', 'oac-oae', 'n', '');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('maps_url', '', 'y', 'The web server address of opMaps.');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('name_match', 'n', 'y', 'Should we match a device based only on its hostname as a last resort.');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('snmp_default_community', 'public', 'y', 'The default community string Open-AudIT will use when connecting to a new device.');
INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('distinct_groups', 'y', 'y', 'Display Groups on the homepage, separated into the type of each Group.');

INSERT INTO oa_location (location_id, location_comments) VALUES ('', 'Default Location.');
INSERT INTO oa_org (org_id, org_comments) VALUES ('', 'Default Organisation.');
INSERT INTO oa_change (user_id, change_short_desc ) VALUES ('1', 'Default Change.');

SET foreign_key_checks = 1; 

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
