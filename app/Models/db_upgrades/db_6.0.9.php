<?php

$output .= "Upgrade database to 6.0.9 commenced.\n\n";

if (! $db->fieldExists('entra_group', 'orgs')) {
    $sql = "ALTER TABLE `orgs` ADD `entra_group` varchar(100) NOT NULL DEFAULT '' AFTER `ad_group`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (! $db->fieldExists('entra_group', 'roles')) {
    $sql = "ALTER TABLE `roles` ADD `entra_group` varchar(100) NOT NULL DEFAULT '' AFTER `ad_group`";
    $result = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$output .= "Upgrade database to 6.0.9 completed.\n\n";
config('OpenAudit')->internal_version = 20260311;
config('OpenAudit')->display_version = '6.0.9';
