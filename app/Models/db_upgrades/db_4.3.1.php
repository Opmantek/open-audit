<?php
$output .= "Upgrade database to 4.3.1 commenced.\n\n";

$db->query("UPDATE `licenses` SET expiry_date = '2000-01-01' WHERE `expiry_date` = '2001-01-01'");
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('expiry_date', 'licenses')) {
    $db->query("ALTER TABLE `licenses` CHANGE `expiry_date` `expiry_date` DATE NOT NULL DEFAULT '2000-01-01'");
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20211213' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '4.3.1' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 4.3.1 completed.\n\n";
config('Openaudit')->internal_version = 20211213;
config('Openaudit')->display_version = '4.3.1';
