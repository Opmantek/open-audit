<?php
$output .= "Upgrade database to 3.0.2 commenced.\n\n";

if ($db->fieldExists('ssh_ports', 'discovery_scan_options')) {
    $sql = "ALTER TABLE `discovery_scan_options` CHANGE `ssh_ports` `ssh_ports` TEXT NOT NULL AFTER `exclude_ip`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DELETE FROM `widgets` WHERE id < 41";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (1,'New Devices Discovered per Day',1,'','line','','system','create','','Devices','','',30,'','','devices?system.first_seen=LIKE@date&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.identification,system.manufacturer,system.os_family,system.status,system.first_seen','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (2,'New Software Discovered per Day',1,'','line','','software','create','','Software','','',30,'','','devices?change_log.db_table=software&change_log.db_action=create&change_log.timestamp=LIKE@date&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (3,'Devices Not Seen (0-180+ Days)',1,'','pie','','','','','','','',0,'','SELECT IF ( system.last_seen = \'2000-01-01\', \'unknown\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 180 day), \'180 Days or more\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 150 day), \'150-180 days\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 120 day), \'120-150 days\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 90 day), \'90-120 days\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 60 day), \'60-90 days\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 30 day), \'30-60 days\', \'7-30 days\' ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.last_seen = \'2000-01-01\', \'system.last_seen=\', ( IF ( system.last_seen < DATE(NOW() - INTERVAL 180 day), CONCAT(\'system.last_seen=<\', DATE(NOW() - INTERVAL 180 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 150 day), CONCAT(\'system.last_seen=>\', DATE(NOW() - INTERVAL 180 day), \'&system.last_seen=<\', DATE(NOW() - INTERVAL 150 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 120 day), CONCAT(\'system.last_seen=>\', DATE(NOW() - INTERVAL 150 day), \'&system.last_seen=<\', DATE(NOW() - INTERVAL 120 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 90 day), CONCAT(\'system.last_seen=>\', DATE(NOW() - INTERVAL 120 day), \'&system.last_seen=<\', DATE(NOW() - INTERVAL 90 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 60 day), CONCAT(\'system.last_seen=>\', DATE(NOW() - INTERVAL 90 day), \'&system.last_seen=<\', DATE(NOW() - INTERVAL 60 day)), ( IF ( system.last_seen < DATE(NOW() - INTERVAL 30 day), CONCAT(\'system.last_seen=>\', DATE(NOW() - INTERVAL 60 day), \'&system.last_seen=<\', DATE(NOW() - INTERVAL 30 day)), CONCAT(\'system.last_seen=>\', DATE(NOW() - INTERVAL 30 day), \'&system.last_seen=<\', DATE(NOW() - INTERVAL 7 day))) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter AND DATE(system.last_seen) < DATE(NOW() - INTERVAL 7 day) GROUP BY `my_name`','devices?@description&properties=system.id,system.type,system.name,system.ip,system.os_family,system.last_seen,system.status','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (4,'Devices by Type',1,'','pie','','system.type','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (5,'Devices by OS Family',1,'','pie','','system.os_family','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (6,'Devices by Manufacturer',1,'','pie','','system.manufacturer','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (7,'Software Keys',1,'','pie','','software_key.name','','','','','',0,'','','devices?software_key.name=@name&properties=system.id,system.icon,system.name,system.domain,system.ip,software_key.name,software_key.string','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (8,'Devices by Status',1,'','pie','','system.status','','','','','',0,'','','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (9,'Devices by Function',1,'','pie','','system.function','','','','','',0,'','','devices?system.function=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.function,system.status','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (10,'Servers',1,'','pie','','server.name','','','','','',0,'','','devices?server.name=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,server.name,server.version,server.version_string,server.port','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (11,'End of Warranty (0-2+ Years)',1,'','pie','','','','','','','',0,'','SELECT if ( system.warranty_expires = \'2000-01-01\', \'unknown\', ( if ( system.warranty_expires < DATE(NOW()), \'expired\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 730 day), \'2 Years or more\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 365 day), \'1-2 years\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 270 day), \'270-365 days\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 180 day), \'180-270 days\', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 90 day), \'90-180 days\', \'Less than 90 Days\' ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, if ( system.warranty_expires = \'2000-01-01\', \'system.warranty_expires=2000-01-01\', ( if ( system.warranty_expires < DATE(NOW()), CONCAT(\'system.warranty_expires=<\', DATE(NOW())), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 730 day), CONCAT(\'system.warranty_expires=>\', DATE(NOW() + INTERVAL 730 day)), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 365 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 730 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 365 day)), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 270 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 365 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 270 day), \'&system.warranty_expires=!=2000-01-01\'), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 180 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 270 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 180 day), \'&system.warranty_expires=!=2000-01-01\'), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 180 day), \'&system.warranty_expires=>\', DATE(NOW() + INTERVAL 90 day), \'&system.warranty_expires=!=2000-01-01\'), CONCAT(\'system.warranty_expires=<\', DATE(NOW() + INTERVAL 90 day), \'&system.warranty_expires=>\', DATE(NOW()), \'&system.warranty_expires=!=2000-01-01\' ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`','devices?system.warranty_expires=!=2000-01-01&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.warranty_expires','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (12,'Devices by Class',1,'','pie','','system.class','','','','','',0,'','','devices?system.class=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.class,system.status','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (13,'Devices by DNS Domain',1,'','pie','','system.dns_domain','','','','','',0,'','','devices?system.dns_domain=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.dns_domain,system.domain,system.ip,system.os_family,system.os_group','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (14,'Devices by OS Group',1,'','pie','','system.os_group','','','','','',0,'','','devices?system.os_group=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (15,'Devices by Location',1,'','pie','','','','','','','',0,'','SELECT locations.name as `name`, locations.id AS `description`, count(system.id) AS `count` FROM locations LEFT JOIN system ON (locations.id = system.location_id) WHERE @filter GROUP BY locations.name, locations.id','devices?system.location_id=@description&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_family,system.locations_id','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (16,'Devices by Collector',1,'','pie','','','','','','','',0,'','SELECT IF (collectors.name IS NULL, \'localhost\', collectors.name) AS `my_name`, IF(collectors.uuid IS NULL, \'\', collectors.uuid) AS `description`, COUNT(system.id) AS `count` FROM `system` LEFT JOIN `collectors` ON (collectors.uuid = system.collector_uuid) WHERE @filter GROUP BY `my_name`, collectors.uuid','devices?system.collector_uuid=@description','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (17,'Disk Manufacturers',1,'','pie','','disk.manufacturer','','','','','',0,'','','devices?disk.manufacturer=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.os_group,disk.manufacturer,disk.model,disk.size','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (18,'Processor Models',1,'','pie','','processor.description','','','','','',0,'','','devices?processor.description=LIKE@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.ip,system.os_group,system.manufacturer,processor.description,processor.physical_count,processor.core_count,processor.logical_count','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (19,'Active Directory Sites',1,'','pie','','windows.client_site_name','','','','','',0,'','','devices?windows.client_site_name=@name&properties=system.id,system.icon,system.os_group,system.name,system.ip,windows.client_site_name,windows.domain_controller_name,windows.active_directory_ou','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (20,'Active Directory OUs',1,'','pie','','windows.active_directory_ou','','','','','',0,'','','devices?windows.active_directory_ou=@name&properties=system.id,system.icon,system.os_group,system.name,system.ip,windows.client_site_name,windows.domain_controller_name,windows.active_directory_ou','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (21,'Devices by Network',1,'','pie','','','','','','','',0,'','SELECT ip.network AS `my_name`, COUNT(ip.system_id) AS `count` FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = \'y\') WHERE @filter AND ip.network != \'\' GROUP BY `my_name`','devices?ip.network=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,ip.ip,ip.mac,ip.network','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (22,'Devices Audited per Day',1,'','line','','','','','Devices','','',30,'','SELECT DATE(audit_log.timestamp) AS `date`, COUNT(DISTINCT audit_log.system_id) AS `count` FROM `audit_log` LEFT JOIN `system` ON (audit_log.system_id = system.id) WHERE DATE(audit_log.timestamp) >  DATE_SUB(CURDATE(), INTERVAL 30 DAY) GROUP BY DATE(audit_log.timestamp)','devices?audit_log.timestamp=like@date%','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (23,'End Of Life (0-90+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.end_of_life = \'2000-01-01\', \'Unknown\', ( IF ( system.end_of_life < DATE(NOW()), \'Expired\', ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 90 day), \'90+ Days\', ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 60 day), \'60-90 Days\', ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 30 day), \'30-60 Days\', ( IF ( system.end_of_life > DATE(NOW()), \'0-30 days\', \'Less than 30 Days\' ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.end_of_life = \'2000-01-01\', \'system.end_of_life=2000-01-01\', ( IF ( system.end_of_life < DATE(NOW()), CONCAT(\'system.end_of_life=!=2000-01-01&system.end_of_life=<\', DATE(NOW())), ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.end_of_life=>\', DATE(NOW() + INTERVAL 90 day)), ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 60 day), CONCAT(\'system.end_of_life=<\', DATE(NOW() + INTERVAL 90 day), \'&system.end_of_life=>\', DATE(NOW() + INTERVAL 60 day)), ( IF ( system.end_of_life > DATE(NOW() + INTERVAL 30 day), CONCAT(\'system.end_of_life=<\', DATE(NOW() + INTERVAL 60 day), \'&system.end_of_life=>\', DATE(NOW() + INTERVAL 30 day)), (  CONCAT(\'system.end_of_life=<\', DATE(NOW() + INTERVAL 30 day), \'&system.end_of_life=>\', DATE(NOW())) ) ) ) ) ) ) ) ) ) ) AS `my_description`,  count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`, `my_description`','devices?@description&properties=system.id,system.icon,system.ip,system.name,system.os_family,system.end_of_life,system.status','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (24,'End of Service (0-90+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.end_of_service = \'2000-01-01\', \'Unknown\', ( IF ( system.end_of_service < DATE(NOW()), \'Expired\', ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 90 day), \'90+ Days\', ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 60 day), \'60-90 Days\', ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 30 day), \'30-60 Days\', ( IF ( system.end_of_service > DATE(NOW()), \'0-30 days\', \'Less than 30 Days\' ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.end_of_service = \'2000-01-01\', \'system.end_of_service=2000-01-01\', ( IF ( system.end_of_service < DATE(NOW()), CONCAT(\'system.end_of_service=<\', DATE(NOW()), \'&system.end_of_service=!=2000-01-01\'), ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.end_of_service=>\', DATE(NOW() + INTERVAL 90 day)), ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 60 day), CONCAT(\'system.end_of_service=<\', DATE(NOW() + INTERVAL 90 day), \'&system.end_of_service=>\', DATE(NOW() + INTERVAL 60 day)), ( IF ( system.end_of_service > DATE(NOW() + INTERVAL 30 day), CONCAT(\'system.end_of_service=<\', DATE(NOW() + INTERVAL 60 day), \'&system.end_of_service=>\', DATE(NOW() + INTERVAL 30 day)), ( CONCAT(\'system.end_of_service=<\', DATE(NOW() + INTERVAL 30 day), \'&system.end_of_service=>\', DATE(NOW())) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`, `my_description`','devices?@description&properties=system.id,system.icon,system.ip,system.name,system.os_family,system.manufacturer,system.os_family,system.end_of_service,system.status','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (25,'Device Age (0-3+ Years)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.purchase_date = \'2000-01-01\', \'unknown\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 3 year), \'3+ Years\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 2 year), \'2-3 Years\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 1 year), \'1-2 Years\', \'Less Than 1 Year\' ) ) ) ) ) ) ) AS `my_name`, IF ( system.purchase_date = \'2000-01-01\', \'system.purchase_date=2000-01-01\', ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 3 year), CONCAT(\'system.purchase_date=<\', DATE(NOW() - INTERVAL 3 year), \"&system.purchase_date=>2000-01-01\"), ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 2 year), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 3 year), \'&system.purchase_date=<\', DATE(NOW() - INTERVAL 2 year)), ( IF ( system.purchase_date < DATE(NOW() - INTERVAL 1 year), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 2 year), \'&system.purchase_date=<\', DATE(NOW() - INTERVAL 1 year)), CONCAT(\'system.purchase_date=>\', DATE(NOW() - INTERVAL 1 year)) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`','devices?@description&properties=system.id,system.icon,system.ip,system.name,system.os_family,system.manufacturer,system.os_family,system.purchase_date,system.status','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (26,'End of Lease (0-90+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( system.lease_expiry_date = \'2000-01-01\' OR system.lease_expiry_date = \'0000-00-00\', \'Unknown\', ( IF ( system.lease_expiry_date < DATE(NOW()), \'Expired\', ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 90 day), \'90+ Days\', ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 60 day), \'60-90 Days\', ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 30 day), \'30-60 Days\', \'Less than 30 Days\' ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( system.lease_expiry_date = \'2000-01-01\' OR system.lease_expiry_date = \'0000-00-00\', \'system.lease_expiry_date=2000-01-01\', ( IF ( system.lease_expiry_date < DATE(NOW()), CONCAT(\'system.lease_expiry_date=<\', DATE(NOW()), \'&system.lease_expiry_date=!=2000-01-01\'), ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 90 day), CONCAT(\'system.lease_expiry_date=>\', DATE(NOW() + INTERVAL 90 day)), ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 60 day), CONCAT(\'system.lease_expiry_date=<\', DATE(NOW() + INTERVAL 90 day), \'&system.lease_expiry_date=>\', DATE(NOW() + INTERVAL 60 day)), ( IF ( system.lease_expiry_date > DATE(NOW() + INTERVAL 30 day), CONCAT(\'system.lease_expiry_date=<\', DATE(NOW() + INTERVAL 60 day), \'&system.lease_expiry_date=>\', DATE(NOW() + INTERVAL 30 day)), ( CONCAT(\'system.lease_expiry_date=<\', DATE(NOW() + INTERVAL 30 day), \'&system.lease_expiry_date=>\', DATE(NOW())) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`, `my_description`','devices?@description&properties=system.id,system.icon,system.ip,system.name,system.os_family,system.manufacturer,system.os_family,system.lease_expiry_date,system.status','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (27,'Hardware Additions by Day',1,'Any items in the following tables that are new - bios, disk, memory, module, monitor, motherboard, network, optical, partition, processor, san, scsi, sound, video.','line','','system','create','','Additions','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `system` ON (`system`.`id` = `change_log`.`system_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'bios\', \'disk\', \'memory\', \'module\', \'monitor\', \'motherboard\', \'network\', \'optical\', \'partition\', \'processor\', \'san\', \'scsi\', \'sound\', \'video\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?sub_resource=change_log&change_log.db_table=inbios,disk,memory,module,monitor,motherboard,network,optical,partition,processor,san,scsi,sound,video&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (28,'Settings Additions by Day',1,'Any items in the following tables that are new - dns, file, ip, log, pagefile, print_queue, route, share, task, user, user_group, variable, vm, windows.','line','','system','create','','Devices','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `system` ON (`system`.`id` = `change_log`.`system_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'dns\', \'file\', \'ip\', \'log\', \'pagefile\', \'print_queue\', \'route\', \'share\', \'task\', \'user\', \'user_group\', \'variable\', \'vm\', \'windows\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?sub_resource=change_log&change_log.db_table=indns,file,ip,log,pagefile,print_queue,route,share,task,user,user_group,variable,vm,windows&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (29,'Software Additions by Day',1,'Any items in the following tables that are new - server, server_item, service, software, software_key.','line','','system','create','','Devices','','',30,'','SELECT DATE(`change_log`.`timestamp`) AS `date`, count(DATE(`change_log`.`timestamp` )) AS `count` FROM `change_log` LEFT JOIN `system` ON (`system`.`id` = `change_log`.`system_id`) WHERE @filter AND `change_log`.`timestamp` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND `change_log`.`db_table` IN (\'server\', \'server_item\', \'service\', \'software\', \'software_key\') AND `change_log`.`db_action` = \'create\' GROUP BY DATE(`change_log`.`timestamp`)','devices?sub_resource=change_log&change_log.db_table=inserver,server_item,service,software,software_key&change_log.timestamp=like@date&change_log.db_action=create&properties=system.id,system.icon,system.ip,system.name,system.os_family,change_log.details,change_log.timestamp','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (30,'Devices by Org',1,'Devies assigned by Org','pie','','','','','Devices','','',0,'','SELECT orgs.name as `name`, orgs.id AS `description`, count(system.id) AS `count` FROM orgs LEFT JOIN system ON (orgs.id = system.org_id) WHERE @filter GROUP BY orgs.name, orgs.id','devices?system.org_id=@description','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (31,'Application Services',1,'Devices by defined Application','pie','','','','','Devices','','',0,'','SELECT applications.name AS `my_name`, COUNT(application.system_id) AS `count`, applications.id AS `my_description` FROM applications LEFT JOIN application ON (applications.id = application.applications_id) LEFT JOIN `system` ON (application.system_id = system.id) WHERE @filter GROUP BY `my_name`, applications.id','devices?application.applications_id=@description','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (32,'Devices Not Seen (1-7+ Days)',1,'','pie','','','','','Devices','','',0,'','SELECT IF ( DATE(system.last_seen) = \'2000-01-01\', \'unknown\', ( IF ( DATE(system.last_seen) < DATE(NOW() - INTERVAL 6 day), \'More than 7 Days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 6 day), \'7 days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 5 day), \'6 days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 4 day), \'5 days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 3 day), \'4 days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 2 day), \'3 days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 1 day), \'2 days\', ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 0 day), \'1 day\', \'\') ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, IF ( DATE(system.last_seen) = \'2000-01-01\', \'system.last_seen=2000-01-01\', ( IF ( DATE(system.last_seen) < DATE(NOW() - INTERVAL 6 day), CONCAT(\'system.last_seen=<\', DATE(NOW() - INTERVAL 6 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 6 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 6 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 5 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 5 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 4 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 4 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 3 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 3 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 2 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 2 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 1 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 1 day)), ( IF ( DATE(system.last_seen) = DATE(NOW() - INTERVAL 0 day), CONCAT(\'system.last_seen=LIKE\', DATE(NOW() - INTERVAL 0 day)), \'\' ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name`','devices?@description','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (33,'Devices by Cloud Type',1,'','pie','','system.instance_provider','','','Devices','','system.instance_provider != \'\'',0,'','','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (34,'Devices per Cloud',1,'','pie','','','','','Devices','','',0,'','SELECT clouds.name as `name`, clouds.id AS `description`, count(system.id) AS `count` FROM clouds LEFT JOIN system ON (clouds.id = system.cloud_id) WHERE @filter AND system.cloud_id IS NOT NULL GROUP BY clouds.name, clouds.id','devices?system.cloud_id=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (35,'Devices by Cloud Network',1,'','pie','','','','','Devices','','',0,'','SELECT IF(networks.name = networks.network, networks.network, CONCAT(networks.network, \' (\', networks.name, \')\')) as `name`, networks.network AS `description`, count(system.id) AS `count` FROM networks LEFT JOIN ip ON (ip.network = networks.network and ip.current = \'y\') LEFT JOIN system ON (ip.system_id = system.id) WHERE @filter AND networks.options != \'\' GROUP BY networks.network, networks.name ORDER BY networks.network','devices?ip.network=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (36,'Devices by Cloud Region',1,'','pie','','','','','Devices','','',0,'','SELECT CONCAT(clouds.type, \' - \', locations.name) as `name`, locations.id AS `description`, count(system.id) AS `count` FROM locations LEFT JOIN system ON (locations.id = system.location_id) LEFT JOIN clouds ON (system.cloud_id = clouds.id) WHERE @filter AND system.cloud_id IS NOT NULL AND locations.type = \'Cloud\' GROUP BY system.location_id, clouds.type','devices?system.location_id=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (37,'Devices by Instance Type',1,'','pie','','','','','Devices','','',0,'','SELECT CONCAT(clouds.type, \' - \', system.instance_type) as `name`, system.instance_type AS `description`, count(system.id) AS `count` FROM system LEFT JOIN clouds ON (system.cloud_id = clouds.id) WHERE @filter AND system.instance_type != \'\' GROUP BY system.instance_type, clouds.type','devices?system.instance_type=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (38,'Cloud Devices Audited per Day',1,'','line','','','','','Devices','','',0,'','SELECT DATE(audit_log.timestamp) AS `date`, COUNT(DISTINCT audit_log.system_id) AS `count` FROM `audit_log` LEFT JOIN `system` ON (audit_log.system_id = system.id) WHERE @filter AND DATE(audit_log.timestamp) >  DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND system.cloud_id != \'\' GROUP BY DATE(audit_log.timestamp)','devices?sub_resource=audit_log&audit_log.timestamp=like@date&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.identification,system.os_family,system.status&groupby=audit_log.system_id','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (39,'Cloud Instances by Org and Type',1,'','pie','','','','','Devices','','',0,'','SELECT CONCAT(orgs.name, \' - \', system.instance_type) as `name`, CONCAT(system.instance_type, \'&system.org_id=\', orgs.id) AS `description`, count(system.id) AS `count` FROM system LEFT JOIN orgs ON (orgs.id = system.org_id) WHERE @filter AND system.cloud_id != \'\' GROUP BY system.org_id, system.instance_type','devices?system.instance_type=@description&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.instance_type,instance_state','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `widgets` VALUES (40,'Last Seen By',1,'','pie','','system.last_seen_by','','','Devices Last Seen By','','',0,'','','devices?system.last_seen_by=@name&properties=system.id,system.icon,system.type,system.os_group,system.name,system.domain,system.ip,system.identification,system.manufacturer,system.os_family,system.last_seen_by,system.status','system','2000-01-01')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20190401' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '3.0.2' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 3.0.2 completed.\n\n";
config('Openaudit')->internal_version = 20190401;
config('Openaudit')->display_version = '3.0.2';
