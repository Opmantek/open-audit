<?php
$output .= "Upgrade database to 4.1.2 commenced.\n\n";

if ($db->fieldExists('cloud_id', 'discoveries')) {
    $db->query("ALTER TABLE `discoveries` DROP `cloud_id`");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
}

$db->query("ALTER TABLE `discoveries` ADD `cloud_id`` int(10) unsigned NOT NULL DEFAULT '1' AFTER ip_audited_count`");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

if ($db->fieldExists('cloud_name', 'discoveries')) {
    $db->query("ALTER TABLE `discoveries` DROP `cloud_name`");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
}

$db->query("ALTER TABLE `discoveries` ADD `cloud_name` varchar(200) NOT NULL DEFAULT '' AFTER `cloud_id`");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20210620' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$sql = "UPDATE `configuration` SET `value` = '4.1.2' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";

$output .= "Upgrade database to 4.1.2 completed.\n\n";
config('Openaudit')->internal_version = 20210620;
config('Openaudit')->display_version = '4.3.1';
