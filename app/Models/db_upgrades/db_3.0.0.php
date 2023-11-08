<?php
$output .= "Upgrade database to 3.0.0 commenced.\n\n";

$sql = "DELETE FROM queries WHERE `name` = 'NMIS' AND `edited_by` = 'system' AND `edited_date` = '2000-01-01 00:00:00'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "INSERT INTO `queries` VALUES (NULL,1,'NMIS','Device','y','NMIS Export query','SELECT system.id AS `system.id`, system.name AS `system.name`, system.ip AS `system.ip`, system.hostname AS `system.hostname`, system.fqdn AS `system.fqdn`, system.dns_hostname AS `system.dns_hostname`, system.omk_uuid AS `system.omk_uuid`, system.nmis_name AS `system.nmis_name`, system.nmis_group AS `system.nmis_group`, system.nmis_role AS `system.nmis_role`, system.nmis_manage AS `system.nmis_manage`, system.nmis_business_service AS `system.nmis_business_service`, system.nmis_poller AS `system.nmis_poller` FROM `system` WHERE @filter AND system.nmis_manage = \'y\'','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('nmis_poller', 'system')) {
    $sql = "ALTER TABLE `system` ADD `nmis_poller` TEXT NOT NULL AFTER `nmis_business_service`";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20190214' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '3.0.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 3.0.0 completed.\n\n";
config('Openaudit')->internal_version = 20190214;
config('Openaudit')->display_version = '3.0.0';
