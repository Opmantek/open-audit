<?php
$output .= "Upgrade database to 3.2.0 commenced.\n\n";

$sql = "ALTER TABLE `collectors` ADD `os` varchar(100) NOT NULL DEFAULT '' AFTER `network_address`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "UPDATE `configuration` SET value = 5 WHERE `name` = 'collector_check_minutes'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `connections` CHANGE `provider` `provider` varchar(100) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `connections` CHANGE `service_type` `service_type` varchar(100) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `connections` CHANGE `product_name` `product_name` varchar(100) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `connections` CHANGE `service_identifier` `service_identifier` varchar(100) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `connections` CHANGE `line_number_a` `line_number_a` varchar(100) NOT NULL NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `connections` CHANGE `line_number_b` `line_number_b` varchar(100) NOT NULL NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `connections` CHANGE `ip_address_external_a` `ip_address_external_a` varchar(30) NOT NULL NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `connections` CHANGE `ip_address_external_b` `ip_address_external_b` varchar(30) NOT NULL NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `connections` CHANGE `ip_address_internal_a` `ip_address_internal_a` varchar(30) NOT NULL NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `connections` CHANGE `ip_address_internal_b` `ip_address_internal_b` varchar(30) NOT NULL NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `discovery_log` CHANGE `command_time_to_execute` `command_time_to_execute` decimal(12,6) NOT NULL DEFAULT '0.000000'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `locations` CHANGE `latitude` `latitude` float(10,6) NOT NULL DEFAULT '0.000000'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `locations` CHANGE `longitude` `longitude` float(10,6) NOT NULL DEFAULT '0.000000'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `maps` CHANGE `name` `name` varchar(200) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `oa_user_sessions` CHANGE `user_agent` `user_agent` varchar(120) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `system` CHANGE `location_latitude` `location_latitude` float(10,6) NOT NULL DEFAULT '0.000000'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `system` CHANGE `location_longitude` `location_longitude` float(10,6) NOT NULL DEFAULT '0.000000'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `users` CHANGE `password` `password` varchar(250) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `users` CHANGE `full_name` `full_name` varchar(100) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `users` CHANGE `email` `email` varchar(100) NOT NULL DEFAULT ''";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `discovery_scan_options` CHANGE `ssh_ports` `ssh_ports` TEXT NOT NULL AFTER `exclude_ip`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `networks` CHANGE `type` `type` enum('Campus Area Network','Cloud Network','Enterprise Private Network','Home Area Network','Local Area Network','Metropolitan Area Network','Passive Optical Local Area Network','Personal Area Network','Storage-Area Network','System-Area Network','Virtual Private Network','Wide Area Network','Wireless Local Area Network') NOT NULL DEFAULT 'Local Area Network'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `networks` ADD `gateways` TEXT NOT NULL AFTER `cloud_id`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `system` ADD `dns_fqdn` TEXT NOT NULL AFTER `fqdn`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `system` ADD `cluster_id` int(10) unsigned DEFAULT NULL AFTER cluster_type";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `system` ADD `manufacturer_code` varchar(200) NOT NULL DEFAULT '' AFTER manufacturer";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `system` ADD `snmp_enterprise_id` int(10) unsigned NOT NULL DEFAULT '0' AFTER snmp_version";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "ALTER TABLE `system` ADD `snmp_enterprise_name` varchar(255) NOT NULL DEFAULT '' AFTER snmp_enterprise_id";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "DELETE FROM configuration WHERE name = 'match_dns_fqdn'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "INSERT INTO `configuration` VALUES (NULL,'match_dns_fqdn','n','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its DNS fqdn.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "DELETE FROM configuration WHERE name = 'match_dns_hostname'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "INSERT INTO `configuration` VALUES (NULL,'match_dns_hostname','n','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its DNS hostname.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "DROP TABLE IF EXISTS `clusters`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "CREATE TABLE `clusters` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT,  `name` varchar(200) NOT NULL DEFAULT '',  `org_id` int(10) unsigned NOT NULL DEFAULT '1',   `description` text NOT NULL,   `type` enum('high availability','load balancing','perforance','storage','other','') NOT NULL DEFAULT '',   `purpose` enum('application','database','file','virtualisation','web','other','') NOT NULL DEFAULT '',   `status` varchar(100) NOT NULL DEFAULT '',   `edited_by` varchar(200) NOT NULL DEFAULT '',   `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',   PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "DROP TABLE IF EXISTS rules";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "CREATE TABLE `rules` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT,  `name` varchar(200) NOT NULL DEFAULT '',  `org_id` int(10) unsigned NOT NULL DEFAULT '1',  `description` text NOT NULL,  `weight` int(10) unsigned NOT NULL DEFAULT '100',  `inputs` text NOT NULL,  `outputs` text NOT NULL,  `edited_by` varchar(200) NOT NULL DEFAULT '',  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',  PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "UPDATE `roles` SET `permissions` = '{\"applications\":\"crud\",\"attributes\":\"crud\",\"baselines\":\"crud\",\"buildings\":\"crud\",\"charts\":\"crud\",\"clouds\":\"crud\",\"connections\":\"crud\",\"credentials\":\"crud\",\"dashboards\":\"crud\",\"errors\":\"r\",\"floors\":\"crud\",\"queue\":\"cr\",\"summaries\":\"crud\",\"devices\":\"crud\",\"discoveries\":\"crud\",\"discovery_scan_options\":\"crud\",\"fields\":\"crud\",\"files\":\"crud\",\"graph\":\"crud\",\"groups\":\"crud\",\"integrations\":\"crud\",\"invoice\":\"crud\",\"licenses\":\"crud\",\"locations\":\"crud\",\"networks\":\"crud\",\"orgs\":\"crud\",\"queue\":\"cr\",\"queries\":\"crud\",\"racks\":\"crud\",\"rack_devices\":\"crud\",\"reports\":\"r\",\"rooms\":\"crud\",\"rows\":\"crud\",\"rules\":\"crud\",\"scripts\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"tasks\":\"crud\",\"users\":\"crud\",\"widgets\":\"crud\"}' WHERE `name` = 'org_admin'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "UPDATE `roles`SET `permissions` = '{\"applications\":\"r\",\"baselines\":\"r\",\"buildings\":\"r\",\"charts\":\"r\",\"clouds\":\"r\",\"connections\":\"r\",\"credentials\":\"r\",\"dashboards\":\"r\",\"summaries\":\"r\",\"devices\":\"r\",\"errors\":\"r\",\"floors\":\"r\",\"fields\":\"r\",\"files\":\"r\",\"graph\":\"r\",\"groups\":\"r\",\"invoice\":\"r\",\"licenses\":\"r\",\"locations\":\"r\",\"networks\":\"r\",\"orgs\":\"r\",\"queue\":\"cr\",\"queries\":\"r\",\"racks\":\"r\",\"rack_devices\":\"r\",\"reports\":\"r\",\"rooms\":\"r\",\"rows\":\"r\",\"rules\":\"r\",\"search\":\"crud\",\"sessions\":\"crud\",\"widgets\":\"r\"}' WHERE `name` = 'user'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20190810' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '3.2.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 3.2.0 completed.\n\n";
config('Openaudit')->internal_version = 20190810;
config('Openaudit')->display_version = '3.2.0';
