<?php
$output .= "Upgrade database to 4.3.0 commenced.\n\n";

$db->query("DROP TABLE IF EXISTS `certificate`");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `certificate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
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
  KEY `system_id` (`system_id`),
  CONSTRAINT `certificate_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$db->query("DELETE FROM `configuration` WHERE name = 'create_change_log_certificate'");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$db->query("INSERT INTO `configuration` VALUES (NULL,'create_change_log_certificate','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the Certificate table.')");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$db->query("DELETE FROM `configuration` WHERE name = 'delete_noncurrent_certificate'");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$db->query("INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_certificate','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current Certificate data.')");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('certificates', 'server')) {
    $db->query("ALTER TABLE `server` DROP `certificates`");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$db->query("ALTER TABLE `server` ADD `certificates` text NOT NULL AFTER `port`");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `queries` WHERE `name` = 'Expiring Certificates'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Expiring Certificates','Server','y','Certificates expiring between today - 1 days and today + 30 days','SELECT system.id AS `system.id`, system.name AS `system.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN system ON (certificate.system_id = system.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to > DATE(NOW() - INTERVAL 1 DAY) AND certificate.valid_to < DATE(NOW() + INTERVAL 30 day)','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `queries` WHERE `name` = 'Expiring Certificates (action immediately)'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Expiring Certificates (action immediately)','Server','y','Certificates expiring in the next 8 days','SELECT system.id AS `system.id`, system.name AS `system.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN system ON (certificate.system_id = system.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to > NOW() AND certificate.valid_to < DATE(NOW() + INTERVAL 8 day)','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `queries` WHERE `name` = 'Expiring Certificates (action soon)'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Expiring Certificates (action soon)','Server','y','Certificates expiring between 8 and 32 days','SELECT system.id AS `system.id`, system.name AS `system.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN system ON (certificate.system_id = system.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to > DATE(NOW() + INTERVAL 8 DAY) AND certificate.valid_to < DATE(NOW() + INTERVAL 32 day)','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `queries` WHERE `name` = 'Expiring Certificates (action later)'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Expiring Certificates (action later)','Server','y','Certificates expiring between 32 and 92 days','SELECT system.id AS `system.id`, system.name AS `system.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN system ON (certificate.system_id = system.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to > DATE(NOW() + INTERVAL 32 DAY) AND certificate.valid_to < DATE(NOW() + INTERVAL 92 day)','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `queries` WHERE `name` = 'Expired Certificates'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Expired Certificates','Server','y','Expired certificates','SELECT system.id AS `system.id`, system.name AS `system.name`, certificate.name AS `certificate.name`, certificate.valid_to AS `certificate.valid_to` FROM certificate LEFT JOIN system ON (certificate.system_id = system.id AND certificate.current = \'y\') WHERE @filter AND certificate.valid_to < DATE(NOW())','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('other', 'discoveries')) {
    $db->query("ALTER TABLE `discoveries` DROP `other`");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('comment', 'task')) {
    $db->query("ALTER TABLE `task` DROP `comment`");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
}

$db->query("ALTER TABLE `task` ADD `comment` TEXT NOT NULL AFTER `runas`");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$db->query("DROP TABLE IF EXISTS `usb`");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `usb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
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
  KEY `system_id` (`system_id`),
  CONSTRAINT `usb_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'create_change_log_usb'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_usb','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the USB table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'delete_noncurrent_usb'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_usb','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current USB data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('expiry_date', 'licenses')) {
    $db->query("ALTER TABLE `licenses` DROP `expiry_date`");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "ALTER TABLE `licenses` ADD `expiry_date` DATE NOT NULL DEFAULT '2000-01-01' AFTER `software_version`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20211112' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '4.3.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 4.3.0 completed.\n\n";
config('Openaudit')->internal_version = 20211112;
config('Openaudit')->display_version = '4.3.0';
