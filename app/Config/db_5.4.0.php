<?php
$output .= "Upgrade database to 5.4.0 commenced.\n\n";

if (!$db->tableExists('auth')) {
    $sql = "CREATE TABLE `auth` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `use_authentication` enum('y','n') NOT NULL DEFAULT 'y',
  `use_authorisation` enum('y','n') NOT NULL DEFAULT 'n',
  `lang` varchar(200) NOT NULL DEFAULT 'en',
  `secure` enum('y','n') NOT NULL DEFAULT 'n',
  `host` varchar(200) NOT NULL DEFAULT '',
  `port` varchar(200) NOT NULL DEFAULT '389',
  `domain` varchar(200) NOT NULL DEFAULT '',
  `type` enum('active directory','openldap') NOT NULL DEFAULT 'active directory',
  `version` int(1) unsigned NOT NULL DEFAULT '3',
  `ldap_base_dn` varchar(200) NOT NULL DEFAULT '',
  `ldap_dn_account` varchar(200) NOT NULL DEFAULT '',
  `ldap_dn_password` varchar(250) NOT NULL DEFAULT '',
  `openldap_user_dn` varchar(200) NOT NULL DEFAULT '',
  `openldap_user_membership_attribute` varchar(200) NOT NULL DEFAULT 'memberUid',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20240810' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.4.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.4.0 completed.\n\n";
config('Openaudit')->internal_version = 20240810;
config('Openaudit')->display_version = '5.4.0';
