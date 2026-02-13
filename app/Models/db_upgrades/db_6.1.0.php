<?php

$output .= "Upgrade database to 6.1.0 commenced.\n\n";

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
    `relationship` varchar(100) NOT NULL DEFAULT '',
    `secondary_type` varchar(100) NOT NULL DEFAULT '',
    `secondary_internal_id_a` int(10) unsigned NOT NULL DEFAULT 0,
    `secondary_internal_id_b` varchar(100) NOT NULL DEFAULT '',
    `secondary_external_provider` varchar(100) NOT NULL DEFAULT '',
    `secondary_external_service` varchar(100) NOT NULL DEFAULT '',
    `secondary_description` varchar(100) NOT NULL DEFAULT '',
    `secondary_owner` varchar(200) NOT NULL DEFAULT '',
    `edited_by` varchar(200) NOT NULL DEFAULT '',
    `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
$roles = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->tableExists('applications_components')) {
    $sql = "INSERT INTO applications_components VALUES (SELECT null, applications.name, applications.org_id, applications.id, 'Device imported.', 'application', application.device_id, 0, '', '', '', '', 'runs-on-device', '', 0, 0, '', '', '', '', application.edited_by, application.edited_date FROM application LEFT JOIN applications ON application.application_id = applications.id)";
    $roles = $db->query($sql)->getResult();
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
        } else {
            $permissions->applications_components = '';
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }
    }
}

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
