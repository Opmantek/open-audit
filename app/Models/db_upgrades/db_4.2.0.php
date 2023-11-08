<?php
$output .= "Upgrade database to 4.2.0 commenced.\n\n";


$sql = "DROP TABLE IF EXISTS `integrations`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `integrations` (
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
  `duration` int(10) unsigned DEFAULT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `integrations_log`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `integrations_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `integrations_id` int(10) unsigned DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `microtime` decimal(16,6) DEFAULT NULL,
  `severity_text` enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `integrations` VALUES (1,'Default NMIS Integration',1,'','nmis','{\"pollers\":[],\"groups\":[],\"roles\":[],\"customers\":[],\"business_services\":[]}','{\"password\":\"\",\"url\":\"http://localhost/omk/\",\"username\":\"\"}',0,'y',0,'y','[]','[]','n',2,'y','[{\"default_value\":\"\",\"external_field_name\":\"configuration.version\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.snmp_version\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.community\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_community\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.username\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_v3_security_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.authpassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_v3_authentication_passphrase\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.authprotocol\",\"external_field_type\":\"lower\",\"internal_field_name\":\"credentials.snmp_v3_authentication_protocol\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.privpassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_v3_privacy_passphrase\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.privprotocol\",\"external_field_type\":\"lower\",\"internal_field_name\":\"credentials.snmp_v3_privacy_protocol\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.wmiusername\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.windows_username\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.wmipassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.windows_password\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.businessService\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_business_service\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"server_name\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_poller\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.notes\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_notes\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"y\",\"external_field_name\":\"\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_manage\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.sysDescr\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.sysDescr\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"Default Location\",\"external_field_name\":\"configuration.location\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.locations_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.customer\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_customer\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"1\",\"external_field_name\":\"configuration.active\",\"external_field_type\":\"bool_one_zero\",\"internal_field_name\":\"fields.nmis_active\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"1\",\"external_field_name\":\"configuration.collect\",\"external_field_type\":\"bool_one_zero\",\"internal_field_name\":\"fields.nmis_collect\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"automatic\",\"external_field_name\":\"configuration.model\",\"external_field_type\":\"text\",\"internal_field_name\":\"fields.nmis_model\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"wan\",\"external_field_name\":\"configuration.netType\",\"external_field_type\":\"text\",\"internal_field_name\":\"fields.nmis_netType\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"true\",\"external_field_name\":\"configuration.ping\",\"external_field_type\":\"bool\",\"internal_field_name\":\"fields.nmis_ping\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"161\",\"external_field_name\":\"configuration.port\",\"external_field_type\":\"integer\",\"internal_field_name\":\"fields.nmis_port\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"name\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"name\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.display_name\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"Open-AudIT\",\"external_field_name\":\"configuration.group\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_group\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.host\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.ip\",\"matching_attribute\":\"y\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"uuid\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.omk_uuid\",\"matching_attribute\":\"y\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.roleType\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_role\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.serviceStatus\",\"external_field_type\":\"capitalise\",\"internal_field_name\":\"devices.environment\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"cluster_id\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_poller_uuid\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\" : \"1\",\"matching_attribute\" : \"n\",\"external_field_name\" : \"activated.NMIS\",\"priority\" : \"internal\",\"internal_field_name\" : \"fields.activated_NMIS\",\"external_field_type\" : \"integer\"},{\"default_value\" : \"1\",\"matching_attribute\" : \"n\",\"external_field_name\" : \"activated.opConfig\",\"priority\" : \"internal\",\"external_field_type\" : \"integer\",\"internal_field_name\" : \"fields.activated_opConfig\"},{\"default_value\" : \"1\",\"matching_attribute\" : \"n\",\"external_field_name\" : \"activated.opEvents\",\"internal_field_name\" : \"fields.activated_opEvents\",\"priority\" : \"internal\",\"external_field_type\" : \"integer\"}]','',0,'all','','nmis_manage',0,'attribute','y',0,'y',0,'y','n','','2000-01-01 00:00:00',0,'system',NOW())";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = 'UPDATE `tasks` set `sub_resource_id` = 1 WHERE `type` = "integrations"';
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('nmis_poller_uuid', 'system')) {
    $sql = "ALTER TABLE `system` ADD `nmis_poller_uuid` varchar(45) NOT NULL DEFAULT '' AFTER `nmis_poller`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DELETE FROM `rules` WHERE `name` = 'NMIS Manage for SNMP devices'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'NMIS Manage for SNMP devices',1,'Set nmis_manage to y if we detect an SNMP OID.',100,'[{\"attribute\":\"snmp_oid\",\"operator\":\"gt\",\"table\":\"system\",\"value\":\"\"}]','[{\"attribute\":\"nmis_manage\",\"table\":\"system\",\"value\":\"y\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$ips = server_ip();
$ips = explode(',', $ips);
$subnet = '';
foreach ($ips as $ip) {
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) and !filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE)) {
        $ip = explode('.', $ip);
        $ip[3] = 0;
        $ip = implode('.', $ip);
        $subnet = $ip . '/24';
        break;
    }
}

if ($subnet !== '') {
    $sql = "INSERT INTO `discoveries` (id, name, org_id, description, type, subnet, edited_date, edited_by) VALUES (null,'Default Discovery',1,'Automatically created default discovery for $subnet.','subnet','$subnet',NOW(),'system')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
} else {
    $output .= "WARNING - Could not determine a private IP for server, no default discovery created.\n\n";
}

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20210810' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '4.2.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 4.2.0 completed.\n\n";
config('Openaudit')->internal_version = 20210810;
config('Openaudit')->display_version = '4.2.0';
