<?php

$output .= "Upgrade database to 6.1.0 commenced.\n\n";

if (!$db->fieldExists('environment', 'applications')) {
    $sql = "ALTER TABLE `applications` ADD `environment` varchar(200) NOT NULL DEFAULT 'production' AFTER `description`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('status', 'applications')) {
    $sql = "ALTER TABLE `applications` ADD `status` varchar(200) NOT NULL DEFAULT 'production' AFTER `environment`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('owner', 'applications')) {
    $sql = "ALTER TABLE `applications` ADD `owner` varchar(200) NOT NULL DEFAULT '' AFTER `status`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('vendor', 'applications')) {
    $sql = "ALTER TABLE `applications` ADD `vendor` varchar(200) NOT NULL DEFAULT '' AFTER `owner`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('criticality', 'applications')) {
    $sql = "ALTER TABLE `applications` ADD `criticality` varchar(200) NOT NULL DEFAULT 'unassigned' AFTER `vendor`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('sensitivity', 'applications')) {
    $sql = "ALTER TABLE `applications` ADD `sensitivity` varchar(200) NOT NULL DEFAULT 'unassigned' AFTER `criticality`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('replaces', 'applications')) {
    $sql = "ALTER TABLE `applications` ADD `replaces` varchar(200) NOT NULL DEFAULT '' AFTER `criticality`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('replaced_by', 'applications')) {
    $sql = "ALTER TABLE `applications` ADD `replaced_by` varchar(200) NOT NULL DEFAULT '' AFTER `replaces`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DROP TABLE IF EXISTS `applications_components`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `applications_components` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(200) NOT NULL DEFAULT '',
    `org_id` int(10) unsigned NOT NULL DEFAULT 1,
    `application_id` int(10) unsigned NOT NULL DEFAULT 0,
    `description` varchar(200) NOT NULL DEFAULT '',
    `primary_type` varchar(100) NOT NULL DEFAULT '',
    `primary_internal_id_a` int(10) unsigned NOT NULL DEFAULT 0,
    `primary_internal_id_b` varchar(100) NOT NULL DEFAULT '',
    `primary_external_provider` varchar(100) NOT NULL DEFAULT '',
    `primary_external_service` varchar(100) NOT NULL DEFAULT '',
    `primary_description` varchar(100) NOT NULL DEFAULT '',
    `primary_owner` varchar(200) NOT NULL DEFAULT '',
    `primary_icon` varchar(200) NOT NULL DEFAULT '',
    `relationship` varchar(100) NOT NULL DEFAULT '',
    `secondary_type` varchar(100) NOT NULL DEFAULT '',
    `secondary_internal_id_a` int(10) unsigned NOT NULL DEFAULT 0,
    `secondary_internal_id_b` varchar(100) NOT NULL DEFAULT '',
    `secondary_external_provider` varchar(100) NOT NULL DEFAULT '',
    `secondary_external_service` varchar(100) NOT NULL DEFAULT '',
    `secondary_description` varchar(100) NOT NULL DEFAULT '',
    `secondary_owner` varchar(200) NOT NULL DEFAULT '',
    `secondary_icon` varchar(200) NOT NULL DEFAULT '',
    `edited_by` varchar(200) NOT NULL DEFAULT '',
    `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
    PRIMARY KEY (`id`),
    CONSTRAINT `applications_components_application_id` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->tableExists('applications_components')) {
    $sql = "INSERT INTO applications_components VALUES (SELECT null, applications.name, applications.org_id, applications.id, 'Device imported.', 'application', application.device_id, 0, '', '', '', '', 'runs-on-device', '', 0, 0, '', '', '', '', application.edited_by, application.edited_date FROM application LEFT JOIN applications ON application.application_id = applications.id)";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->tableExists('application')) {
    $sql = "DROP TABLE `application`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "SELECT * FROM `roles`";
$roles = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

foreach ($roles as $role) {
    $permissions = json_decode($role->permissions);
    if (!empty($permissions)) {
        if ($role->name === 'org_admin') {
            $permissions->applications_components = 'crud';
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        } if ($role->name === 'user') {
            $permissions->applications_components = 'r';
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        } else {
            $permissions->applications_components = '';
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }
    }
}

$sql = "DELETE FROM rules WHERE name = 'Windows on Port 135, not working'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Windows on Port 135, not working',1,'',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"135\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value_type\":\"string\",\"value\":\"computer\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"value_type\":\"string\",\"value\":\"Windows\"},{\"table\":\"devices\",\"attribute\":\"description\",\"value_type\":\"string\",\"value\":\"Discovery Issue\"}]','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM rules WHERE name = 'Windows on Port 139, not working'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Windows on port 139, not working',1,'',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"139\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value_type\":\"string\",\"value\":\"computer\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"value_type\":\"string\",\"value\":\"Windows\"},{\"table\":\"devices\",\"attribute\":\"description\",\"value_type\":\"string\",\"value\":\"Discovery Issue\"}]','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM rules WHERE name = 'Windows on Port 445, not working'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Windows on port 445, not working',1,'',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"445\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"computer\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"value\":\"Windows\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"description\",\"value\":\"Discovery Issue\",\"value_type\":\"string\"}]','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM rules WHERE name = 'Windows on Port 135, working'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Windows on port 135, working',1,'',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"135\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"description\",\"operator\":\"eq\",\"value\":\"Discovery Issue\"}]','[{\"table\":\"devices\",\"attribute\":\"description\",\"value\":\"\",\"value_type\":\"string\"}]','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM rules WHERE name = 'Windows on Port 139, working'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Windows on port 139, working',1,'',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"139\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"description\",\"operator\":\"eq\",\"value\":\"Discovery Issue\"}]','[{\"table\":\"devices\",\"attribute\":\"description\",\"value\":\"\",\"value_type\":\"string\"}]','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM rules WHERE name = 'Windows on Port 445, working'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Windows on port 445, working',1,'',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"445\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"description\",\"operator\":\"eq\",\"value\":\"Discovery Issue\"}]','[{\"table\":\"devices\",\"attribute\":\"description\",\"value\":\"\",\"value_type\":\"string\"}]','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `attributes` VALUES (null,1,'devices','environment','Research and Development','rnd','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20260512' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '6.1.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 6.1.0 completed.\n\n";
config('Openaudit')->internal_version = 20260512;
config('Openaudit')->display_version = '6.1.0';
