<?php
$output .= "Upgrade database to 3.0.1 commenced.\n\n";

if ($db->fieldExists('options', 'discoveries')) {
    $sql = "ALTER TABLE `discoveries` CHANGE `options` `options` TEXT AFTER `other`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DROP TABLE IF EXISTS policy";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `policy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `type` varchar(100) NOT NULL DEFAULT '',
  `name` text NOT NULL,
  `value` varchar(100) NOT NULL DEFAULT '',
  `guid` text NOT NULL,
  `options` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `policy_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('user_data', 'oa_user_sessions')) {
    $sql = "ALTER TABLE `oa_user_sessions` CHANGE `user_data` `user_data` TEXT AFTER `last_activity`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->fieldExists('os_version', 'system')) {
    $sql = "ALTER TABLE `system` CHANGE `os_version` `os_version` varchar(200) NOT NULL DEFAULT ''";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

# widgets
$sql = "UPDATE `widgets` SET `sql` = 'SELECT IF ( system.last_seen = \"2000-01-01\", \"unknown\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 180 day), \"180 Days or more\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 150 day), \"150-180 days\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 120 day), \"120-150 days\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 90 day), \"90-120 days\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 60 day), \"60-90 days\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 30 day), \"30-60 days\", \"7-30 days\" ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.last_seen = \"2000-01-01\", \"system.last_seen=\", ( IF ( system.last_seen < DATE(NOW() - INTERVAL 180 day), CONCAT(\"system.last_seen=<\", DATE(NOW() - INTERVAL 180 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 150 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 180 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 150 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 120 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 150 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 120 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 90 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 120 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 90 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 60 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 90 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 60 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 30 day), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 60 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 30 day)), CONCAT(\"system.last_seen=>\", DATE(NOW() - INTERVAL 30 day), \"&system.last_seen=<\", DATE(NOW() - INTERVAL 7 day))) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter AND DATE(system.last_seen) < DATE(NOW() - INTERVAL 7 day) GROUP BY `my_name`, `last_seen` ORDER BY system.last_seen' WHERE `id` = 3";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT if ( system.warranty_expires = \'2000-01-01\', \'unknown\', ( if ( system.warranty_expires < DATE(NOW()), \'expired\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 730 day), \'2 Years or more\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 365 day), \'1-2 years\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 270 day), \'270-365 days\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 180 day), \'180-270 days\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 90 day), \'90-180 days\', \'Less than 90 Days\' ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, if ( system.warranty_expires = \'2000-01-01\', \'system.warranty_expires=2000-01-01\', ( if ( system.warranty_expires < DATE(NOW()), CONCAT(\'system.warranty_expires=<\', DATE(NOW())), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 730 day), CONCAT(\'system.warranty_expires=>\', DATE(NOW() + INTERVAL 730 day)), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 365 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 730 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 365 day)), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 270 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 365 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 270 day), \'&system.warranty_expires=!=2000-01-01\'), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 180 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 270 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 180 day), \'&system.warranty_expires=!=2000-01-01\'), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 180 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 90 day), \'&system.warranty_expires=!=2000-01-01\'), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 90 day), \'&system.warranty_expires=>\', DATE(NOW()), \'&system.warranty_expires=!=2000-01-01\' ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`, `warranty_expires` ORDER BY system.warranty_expires' WHERE `id` = 11";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT locations.name as `name`, locations.id AS `description`, count(system.id) AS `count` FROM locations LEFT JOIN system ON (locations.id = system.location_id) WHERE @filter GROUP BY locations.name, locations.id' WHERE `id` = 15";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT IF (collectors.name IS NULL, \'localhost\', collectors.name) AS `my_name`, IF(collectors.uuid IS NULL, \'\', collectors.uuid) AS `description`, COUNT(system.id) AS `count` FROM `system` LEFT JOIN `collectors` ON (collectors.uuid = system.collector_uuid) WHERE @filter GROUP BY `my_name`, collectors.uuid' WHERE `id` = 16";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT IF ( system.end_of_life = \'2000-01-01\', \'unknown\', ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 90 day), \'90+ Days\', ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 60 day), \'60-90 Days\', ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 30 day), \'30-60 Days\', ( IF ( system.end_of_life > DATE(NOW()), \'0-30 days\', \'Less than 30 Days\' ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.end_of_life = \'2000-01-01\', \'system.end_of_life=2000-01-01\', ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.end_of_life=>\', DATE(NOW() + INTERVAL 90 day)), ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 60 day), CONCAT(\'system.end_of_life=<\', DATE(NOW() + INTERVAL 90 day), \'&system.end_of_life=>\', DATE(NOW() + INTERVAL 60 day)), ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 30 day), CONCAT(\'system.end_of_life=<\', DATE(NOW() + INTERVAL 60 day), \'&system.end_of_life=>\', DATE(NOW() + INTERVAL 30 day)), ( CONCAT(\'system.end_of_life=<\', DATE(NOW() + INTERVAL 30 day), \'&system.end_of_life=>\', DATE(NOW())) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`. system.end_of_life ORDER BY system.end_of_life' WHERE id = 23";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT IF ( system.end_of_service = \'2000-01-01\', \'unknown\', ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 90 day), \'90+ Days\', ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 60 day), \'60-90 Days\', ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 30 day), \'30-60 Days\', ( IF ( system.end_of_service > DATE(NOW()), \'0-30 days\', \'Less than 30 Days\' ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.end_of_service = \'2000-01-01\', \'system.end_of_service=2000-01-01\', ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.end_of_service=>\', DATE(NOW() + INTERVAL 90 day)), ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 60 day), CONCAT(\'system.end_of_service=<\', DATE(NOW() + INTERVAL 90 day), \'&system.end_of_service=>\', DATE(NOW() + INTERVAL 60 day)), ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 30 day), CONCAT(\'system.end_of_service=<\', DATE(NOW() + INTERVAL 60 day), \'&system.end_of_service=>\', DATE(NOW() + INTERVAL 30 day)), ( CONCAT(\'system.end_of_service=<\', DATE(NOW() + INTERVAL 30 day), \'&system.end_of_service=>\', DATE(NOW())) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`, system.end_of_service ORDER BY system.end_of_service' WHERE id = 24";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT IF ( system.purchase_date = \'2000-01-01\', \'unknown\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 3 year), \'3+ Years\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 2 year), \'2-3 Years\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 1 year), \'1-2 Years\', \'Less Than 1 Year\' ) ) ) ) ) ) ) AS `my_name`, IF ( system.purchase_date = \'2000-01-01\', \'system.purchase_date=2000-01-01\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 3 year), CONCAT(\'system.purchase_date=<\', DATE(NOW() - INTERVAL 3 year), \"&system.purchase_date=>2000-01-01\"), ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 2 year), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 3 year), \'&system.purchase_date=<\', DATE(NOW() - INTERVAL 2 year)), ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 1 year), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 2 year), \'&system.purchase_date=<\', DATE(NOW() - INTERVAL 1 year)), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 1 year)) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`, system.purchase_date ORDER BY system.purchase_date' WHERE id = 25";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT IF ( system.lease_expiry_date = \'2000-01-01\' OR system.lease_expiry_date = \'0000-00-00\', \'unknown\', ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 90 day), \'90+ Days\', ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 60 day), \'60-90 Days\', ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 30 day), \'30-60 Days\', \'Less than 30 Days\' ) ) ) ) ) ) ) AS `my_name`, IF ( system.lease_expiry_date = \'2000-01-01\' OR system.lease_expiry_date = \'0000-00-00\', \'system.lease_expiry_date=2000-01-01\', ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.lease_expiry_date=>\', DATE(NOW() + INTERVAL 90 day)), ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 60 day), CONCAT(\'system.lease_expiry_date=<\', DATE(NOW() + INTERVAL 90 day), \'&system.lease_expiry_date=>\', DATE(NOW() + INTERVAL 60 day)), ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 30 day), CONCAT(\'system.lease_expiry_date=<\', DATE(NOW() + INTERVAL 60 day), \'&system.lease_expiry_date=>\', DATE(NOW() + INTERVAL 30 day)), ( CONCAT(\'system.lease_expiry_date=<\', DATE(NOW() + INTERVAL 30 day), \'&system.lease_expiry_date=>\', DATE(NOW())) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`, system.lease_expiry_date ORDER BY system.lease_expiry_date' WHERE id = 26";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT orgs.name as `name`, orgs.id AS `description`, count(system.id) AS `count` FROM orgs LEFT JOIN system ON (orgs.id = system.org_id) WHERE @filter GROUP BY orgs.name, orgs.id' WHERE id = 30";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT applications.name AS `my_name`, COUNT(application.system_id) AS `count`, applications.id AS `my_description` FROM applications LEFT JOIN application ON (applications.id = application.applications_id) LEFT JOIN `system` ON (application.system_id = system.id) WHERE @filter GROUP BY `my_name`, applications.id' WHERE id = 31";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT IF ( DATE(system.last_seen) = \"2000-01-01\", \"unknown\", ( IF ( DATE(system.last_seen) < DATE(NOW() - INTERVAL 6 day), \"More than 7 Days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 6 day), \"7 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 5 day), \"6 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 4 day), \"5 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 3 day), \"4 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 2 day), \"3 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 1 day), \"2 days\", ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 0 day), \"1 day\", \"\") ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( DATE(system.last_seen) = \"2000-01-01\", \"system.last_seen=2000-01-01\", ( IF ( DATE(system.last_seen) < DATE(NOW() - INTERVAL 6 day), CONCAT(\"system.last_seen=<\", DATE(NOW() - INTERVAL 6 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 6 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 6 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 5 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 5 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 4 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 4 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 3 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 3 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 2 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 2 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 1 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 1 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 0 day), CONCAT(\"system.last_seen=LIKE\", DATE(NOW() - INTERVAL 0 day)), \"\" ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`, system.last_seen ORDER BY system.last_seen' WHERE id = 32";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT clouds.name as `name`, clouds.id AS `description`, count(system.id) AS `count` FROM clouds LEFT JOIN system ON (clouds.id = system.cloud_id) WHERE @filter AND system.cloud_id IS NOT NULL GROUP BY clouds.name, clouds.id' WHERE id = 34";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT IF(networks.name = networks.network, networks.network, CONCAT(networks.network, \' (\', networks.name, \')\')) as `name`, networks.network AS `description`, count(system.id) AS `count` FROM networks LEFT JOIN ip ON (ip.network = networks.network and ip.current = \'y\') LEFT JOIN system ON (ip.system_id = system.id) WHERE @filter AND networks.options != \'\' GROUP BY networks.network, networks.name ORDER BY networks.network' WHERE id = 35";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT CONCAT(clouds.type, \' - \', locations.name) as `name`, locations.id AS `description`, count(system.id) AS `count` FROM locations LEFT JOIN system ON (locations.id = system.location_id) LEFT JOIN clouds ON (system.cloud_id = clouds.id) WHERE @filter AND system.cloud_id IS NOT NULL AND locations.type = \'Cloud\' GROUP BY system.location_id, clouds.type' WHERE id = 36";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `widgets` SET `sql` = 'SELECT CONCAT(clouds.type, \' - \', system.instance_type) as `name`, system.instance_type AS `description`, count(system.id) AS `count` FROM system LEFT JOIN clouds ON (system.cloud_id = clouds.id) WHERE @filter AND system.instance_type != \'\' GROUP BY system.instance_type, clouds.type' WHERE id = 37";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20190301' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '3.0.1' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 3.0.1 completed.\n\n";
config('Openaudit')->internal_version = 20190301;
config('Openaudit')->display_version = '3.0.1';
