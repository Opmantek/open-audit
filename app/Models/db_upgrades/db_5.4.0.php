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
  `type` enum('active directory','entra','openldap','github','okta') NOT NULL DEFAULT 'active directory',
  `version` int(1) unsigned NOT NULL DEFAULT '3',
  `ldap_base_dn` varchar(200) NOT NULL DEFAULT '',
  `ldap_dn_account` varchar(200) NOT NULL DEFAULT '',
  `ldap_dn_password` varchar(250) NOT NULL DEFAULT '',
  `openldap_user_dn` varchar(200) NOT NULL DEFAULT '',
  `openldap_user_membership_attribute` varchar(200) NOT NULL DEFAULT 'memberUid',
  `client_ident` varchar(2000) NOT NULL DEFAULT '',
  `client_secret` varchar(2000) NOT NULL DEFAULT '',
  `redirect_uri` varchar(200) NOT NULL DEFAULT '',
  `issuer` varchar(2000) NOT NULL DEFAULT '',
  `tenant` varchar(2000) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `roles` SET `permissions` = REPLACE(permissions, 'ldap_servers', 'auth')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `auth` (SELECT id, name, org_id, description, use_auth, use_roles, lang, secure, host, port, domain, type, version, base_dn, dn_account, dn_password, user_dn, user_membership_attribute, '', '', '', '', '', edited_by, edited_date FROM ldap_servers)";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = 'n' WHERE `name` = 'rss_enable'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = 'https://docs.community.firstwave.com/wiki/createrssfeed.action?types=page&types=blogpost&spaces=OA&sort=modified&maxResults=10&timeSpan=10&showContent=true' WHERE `name` = 'rss_url'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20240822' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.4.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.4.0 completed.\n\n";
config('Openaudit')->internal_version = 20240822;
config('Openaudit')->display_version = '5.4.0';
