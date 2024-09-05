<?php
$output .= "Upgrade database to 5.5.0 commenced.\n\n";

if (!$db->fieldExists('last_os_update', 'devices')) {
    $sql = "ALTER TABLE `devices` ADD last_os_update datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `last_user`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "INSERT INTO `rules` VALUES (null,'Class based on Form Factor and OS (Virtual Windows Client)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"devices\",\"attribute\":\"form_factor\",\"operator\":\"eq\",\"value\":\"Virtual\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"devices\",\"attribute\":\"os_name\",\"operator\":\"nl\",\"value\":\"%Server%\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"virtual desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20241012' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.5.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.5.0 completed.\n\n";
config('Openaudit')->internal_version = 20241012;
config('Openaudit')->display_version = '5.5.0';
