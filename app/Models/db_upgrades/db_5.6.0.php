<?php
$output .= "Upgrade database to 5.6.0 commenced.\n\n";

if (!$db->fieldExists('service_tag', 'devices')) {
    $sql = "ALTER TABLE `devices` ADD `service_tag` varchar(100) NOT NULL DEFAULT '' AFTER `manufacturer_code`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('antivirus')) {
    $sql = "CREATE TABLE `antivirus` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `device_id` int(10) unsigned DEFAULT NULL,
      `current` enum('y','n') NOT NULL DEFAULT 'y',
      `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
      `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
      `name` varchar(200) NOT NULL DEFAULT '',
      `owner` varchar(255) NOT NULL DEFAULT '',
      `executable` varchar(255) NOT NULL DEFAULT '',
      `reportable` varchar(255) NOT NULL DEFAULT '',
      `state` varchar(100) NOT NULL DEFAULT '',
      `status` varchar(100) NOT NULL DEFAULT '',
      PRIMARY KEY (`id`),
      KEY `system_id` (`device_id`),
      KEY `first_seen` (`first_seen`),
      KEY `last_seen` (`last_seen`),
      KEY `name` (`name`),
      CONSTRAINT `antivirus_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('firewall')) {
    $sql = "CREATE TABLE `firewall` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `device_id` int(10) unsigned DEFAULT NULL,
      `current` enum('y','n') NOT NULL DEFAULT 'y',
      `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
      `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
      `name` varchar(200) NOT NULL DEFAULT '',
      `owner` varchar(255) NOT NULL DEFAULT '',
      `executable` varchar(255) NOT NULL DEFAULT '',
      `reportable` varchar(255) NOT NULL DEFAULT '',
      `state` varchar(100) NOT NULL DEFAULT '',
      `status` varchar(100) NOT NULL DEFAULT '',
      PRIMARY KEY (`id`),
      KEY `system_id` (`device_id`),
      KEY `first_seen` (`first_seen`),
      KEY `last_seen` (`last_seen`),
      KEY `name` (`name`),
      CONSTRAINT `firewall_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('firewall_rule')) {
    $sql = "CREATE TABLE `firewall_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `action` varchar(100) NOT NULL DEFAULT '',
  `direction` varchar(100) NOT NULL DEFAULT '',
  `enabled` varchar(100) NOT NULL DEFAULT '',
  `external_ident` varchar(100) NOT NULL DEFAULT '',
  `group` varchar(100) NOT NULL DEFAULT '',
  `local_port` varchar(100) NOT NULL DEFAULT '',
  `profile` varchar(100) NOT NULL DEFAULT '',
  `protocol` varchar(100) NOT NULL DEFAULT '',
  `remote_address` varchar(100) NOT NULL DEFAULT '',
  `remote_port` varchar(100) NOT NULL DEFAULT '',
  `rule_group` varchar(100) NOT NULL DEFAULT '',
  `firewall` varchar(100) NOT NULL DEFAULT 'Windows Defender',
  PRIMARY KEY (`id`),
  KEY `system_id` (`device_id`),
  KEY `first_seen` (`first_seen`),
  KEY `last_seen` (`last_seen`),
  KEY `name` (`name`),
  CONSTRAINT `firewall_rule_system_id` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->tableExists('packages')) {
    $sql = "CREATE TABLE `packages` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `name` varchar(200) NOT NULL DEFAULT '',
      `org_id` int(10) unsigned NOT NULL DEFAULT '1',
      `description` text NOT NULL,
      `org_descendants` enum('y','n') NOT NULL DEFAULT 'y',
      `purchase_count` int(10) unsigned NOT NULL DEFAULT '0',
      `used_count` int(10) unsigned NOT NULL DEFAULT '0',
      `match_string` text NOT NULL,
      `software_name` text NOT NULL,
      `software_version` varchar(200) NOT NULL DEFAULT '',
      `expiry_date` date NOT NULL DEFAULT '2000-01-01',
      `end_of_life` date NOT NULL DEFAULT '2000-01-01',
      `end_of_service_life` date NOT NULL DEFAULT '2000-01-01',
      `type` enum('license','approved','banned','antivirus','other','cloud','') NOT NULL DEFAULT '',
      `os` enum('Windows','Linux','MacOS','other','all','') NOT NULL DEFAULT 'Windows',
      `sql` text NOT NULL,
      `edited_by` varchar(200) NOT NULL DEFAULT '',
      `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());



    $sql = "INSERT INTO `packages` (SELECT id, name, org_id, description, org_descendants, purchase_count, used_count, match_string, software_name, software_version, expiry_date, end_of_life, end_of_service_life, 'license','Windows','', edited_by, edited_date FROM `licenses`)";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Avast', 1, 'Default AntiVirus', 'y', 0, 0, '', '%Avast%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'AVG', 1, 'Default AntiVirus', 'y', 0, 0, '', 'AVG%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Avira', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Avira%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'BitDefender', 1, 'Default AntiVirus', 'y', 0, 0, '', 'BitDefender%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'CA AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'CA Anti-Virus', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'CA eTrust AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'CA eTrust Antivirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Carbon Black', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Carbon Black%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'CB Defense', 1, 'Default AntiVirus', 'y', 0, 0, '', 'CB Defense', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'ClamWin Free AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ClamWin Free Antivirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'COMODO AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'COMODO Antivirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Cortex XDR', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Cortex XDR%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'CrowdStrike Sensor', 1, 'Default AntiVirus', 'y', 0, 0, '', 'CrowdStrike % Sensor%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Cyclance', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Cyclance', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Dell Endpoint Security Suite', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Dell Endpoint Security Suite', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Dr Web AntiVirus for Windows', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Dr.Web Anti-Virus for Windows%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'eScan AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'eScan Anti-Virus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'ESET Endpoint AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ESET Endpoint Antivirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'ESET File Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ESET File Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'ESET NOD32', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ESET NOD32%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'ESET Smart Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ESET Smart Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'F-PROT AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'F-PROT Antivirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'F-Secure AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'F-Secure Anti-Virus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'F-Secure Client Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'F-Secure Client Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Falcon', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Falcon', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'FortiClient', 1, 'Default AntiVirus', 'y', 0, 0, '', 'FortiClient%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'FSecure AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', '%F%Secure anti-virus', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'G DATA AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'G DATA AntiVirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Kaspersky AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Kaspersky Anti%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Kaspersky Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Kaspersky %security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Malwarebytes', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Malwarebytes%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'McAfee AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'McAfee Virus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'McAfee Endpoint Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'McAfee Endpoint Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Microsoft Forefront', 1, 'Default AntiVirus', 'y', 0, 0, '', '%Microsoft Forefront%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Microsoft Security Essentials', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Microsoft Security Essentials%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'NOD32', 1, 'Default AntiVirus', 'y', 0, 0, '', 'NOD32%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Norman Endpoint', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Norman Endpoint%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Norman Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Norman Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Norman Virus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Norman Virus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Norton AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Norton AntiVirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Panda AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Panda Antivirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Panda Endpoint', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Panda Endpoint%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Panda Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Panda Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'PC Tools AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'PC Tools AntiVirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Sentinel Agent', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Sentinel Agent%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Sophos', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Sophos%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Symantec AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Symantec AntiVirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Symantec Cloud', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Symantec.cloud', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Symantec Endpoint Protection', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Symantec Endpoint Protection%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'System Center Endpoint Protection', 1, 'Default AntiVirus', 'y', 0, 0, '', 'System Center%Endpoint Protection', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'TotalAV', 1, 'Default AntiVirus', 'y', 0, 0, '', 'TotalAV', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Traps%', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Traps%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Trend Micro AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro AntiVirus%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Trend Micro Apex One', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro Apex One', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Trend Micro Client/Server Security Agent', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro Client/Server Security Agent', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Trend Micro Deep Security Agent', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro Deep Security Agent%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Trend Micro OfficeScan', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro OfficeScan%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Trend Micro Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Trend Micro Worry-Free Business Security', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Trend Micro Worry-Free Business Security%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'VIPRE Business Agent', 1, 'Default AntiVirus', 'y', 0, 0, '', 'VIPRE Business Agent', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Webroot SecureAnywhere', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Webroot SecureAnywhere', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Windows Defender AntiVirus', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Windows Defender Antivirus', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'Windows Intune', 1, 'Default AntiVirus', 'y', 0, 0, '', 'Windows Intune%', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'ZoneAlarm', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ZoneAlarm', '', '2000-01-01', '2000-01-01', '2000-01-01', 'antivirus', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `packages` VALUES (NULL, 'ZoneAlarm', 1, 'Default AntiVirus', 'y', 0, 0, '', 'ZoneAlarm', '', '2000-01-01', '2000-01-01', '2000-01-01', 'firewall', 'Windows', '', 'system', NOW())";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if ($db->tableExists('ldap_servers')) {
    $sql = "DROP TABLE `ldap_servers`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('last_os_update', 'devices')) {
    $sql = "ALTER TABLE `devices` ADD last_os_update datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `last_user`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "SELECT id, permissions FROM roles WHERE name = 'org_admin'";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
if (!empty($result)) {
    $permissions = json_decode($result[0]->permissions);
    $premissions->packages = 'crud';
    $sql = 'UPDATE roles SET permissions = ? WHERE id = ?';
    $db->query($sql, [$permissions, $result[0]->id]);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}
unset($result);

$sql = "SELECT id, permissions FROM roles WHERE name = 'user'";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
if (!empty($result)) {
    $permissions = json_decode($result[0]->permissions);
    $premissions->packages = 'r';
    $sql = 'UPDATE roles SET permissions = ? WHERE id = ?';
    $db->query($sql, [$permissions, $result[0]->id]);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}
unset($result);

$sql = "DELETE FROM dashboards WHERE name = 'Security Dashboard' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `dashboards` VALUES (null,'Security Dashboard',1,'org',0,'Security Information','n','[]','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM queries WHERE name = 'Windows Clients With AntiVirus' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1, 'Windows Clients With AntiVirus','software','n','', \"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name`, antivirus.status AS `antivirus.status`, antivirus.state AS `antivirus.state`, antivirus.name AS `antivirus.name` FROM devices LEFT JOIN antivirus ON (devices.id = antivirus.device_id AND antivirus.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND antivirus.status = 'UpToDate' AND antivirus.state = 'On' AND (devices.os_family LIKE 'Windows 10' or devices.os_family LIKE 'Windows 11')\",  '','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM queries WHERE name = 'Windows Clients Without AntiVirus' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1, 'Windows Clients Without AntiVirus','software','n','', \"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name` FROM devices LEFT JOIN antivirus ON (devices.id = antivirus.device_id AND antivirus.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND antivirus.status IS NULL AND (devices.os_family LIKE 'Windows 10' or devices.os_family LIKE 'Windows 11') GROUP BY devices.id ORDER BY devices.name\",  '','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM queries WHERE name = 'Windows Clients With AntiVirus Not UpToDate' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1, 'Windows Clients With AntiVirus Not UpToDate','software','n','', \"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name`, antivirus.status AS `antivirus.status`, antivirus.state AS `antivirus.state`, antivirus.name AS `antivirus.name`, MIN( CASE WHEN (antivirus.status = 'On' AND antivirus.state = 'OutOfDate') THEN 1 WHEN (antivirus.status = 'Off' AND antivirus.status = 'UpToDate') THEN 2 WHEN (antivirus.status = 'Off' AND antivirus.state = 'OutOfDate') THEN 3 END) AS `preferred` FROM devices LEFT JOIN antivirus ON (devices.id = antivirus.device_id AND antivirus.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND devices.id NOT IN (SELECT device_id FROM antivirus WHERE antivirus.status = 'UpToDate' AND antivirus.state = 'On') AND antivirus.status IS NOT NULL AND (devices.os_family LIKE 'Windows 10' or devices.os_family LIKE 'Windows 11') GROUP BY devices.id\",  '','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM queries WHERE name = 'Windows Clients With Firewall' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Clients With Firewall','software','n','',\"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name`, firewall.state AS `firewall.state`, firewall.name AS `firewall.name` FROM devices LEFT JOIN firewall ON (devices.id = firewall.device_id AND firewall.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND firewall.state = 'On' AND (devices.os_family LIKE 'Windows 10' or devices.os_family LIKE 'Windows 11')\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM queries WHERE name = 'Windows Clients Without Firewall' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Clients Without Firewall','software','n','',\"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name` FROM devices LEFT JOIN firewall ON (devices.id = firewall.device_id AND firewall.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND firewall.status IS NULL AND (devices.os_family LIKE 'Windows 10' or devices.os_family LIKE 'Windows 11') GROUP BY devices.id ORDER BY devices.name\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM queries WHERE name = 'Windows Clients With Firewall Disabled' AND edited_by = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Clients With Firewall Disabled','software','n','',\"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.user_name AS `windows.user_name`, firewall.status AS `firewall.status`, firewall.state AS `firewall.state`, firewall.name AS `firewall.name`, MIN( CASE WHEN (firewall.status = 'On') THEN 1 WHEN (firewall.status != 'On') THEN 2 END) AS `preferred` FROM devices LEFT JOIN firewall ON (devices.id = firewall.device_id AND firewall.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = 'y') WHERE @filter AND devices.id NOT IN (SELECT device_id FROM firewall WHERE firewall.status = 'UpToDate' AND firewall.state = 'On') AND firewall.status IS NOT NULL AND (devices.os_family LIKE 'Windows 10' or devices.os_family LIKE 'Windows 11') GROUP BY devices.id\",'','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Servers Firewalls Installed','software','n','',\"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, software.name AS `software.name`, software.version AS `software.version` FROM devices LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) RIGHT JOIN packages ON (software.name LIKE packages.software_name AND devices.os_group LIKE packages.os) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'firewall' AND devices.os_name LIKE '%Windows Server%' GROUP BY devices.id\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Servers AntiVirus Installed','software','n','',\"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, software.name AS `software.name`, software.version AS `software.version` FROM devices LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') LEFT JOIN locations ON (devices.location_id = locations.id) RIGHT JOIN packages ON (software.name LIKE packages.software_name AND devices.os_group LIKE packages.os) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'antivirus' AND devices.os_name LIKE '%Windows Server%' GROUP BY devices.id\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Servers Firewalls Not Installed','software','n','',\"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.id NOT IN (SELECT devices.id FROM devices LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name AND devices.os_group LIKE packages.os) WHERE devices.id IS NOT NULL AND packages.type = 'firewall' AND devices.os_name LIKE '%Server%') AND devices.os_name LIKE '%Windows Server%' GROUP BY devices.id\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Windows Servers AntiVirus Not Installed','software','n','',\"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.id NOT IN (SELECT devices.id FROM devices LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name AND devices.os_group LIKE packages.os) WHERE devices.id IS NOT NULL AND packages.type = 'antivirus' AND devices.os_name LIKE '%Server%') AND devices.os_name LIKE '%Windows Server%' GROUP BY devices.id\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Banned Software','software','n','',\"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'banned' GROUP BY devices.id\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Approved Software','Software','n','',\"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, software.name AS `software.name`, software.version AS `software.version` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'approved' GROUP BY devices.id\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Ignored Software','Software','n','',\"SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, software.name AS `software.name`, software.version AS `software.version` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN software ON (software.device_id = devices.id AND software.current = 'y') RIGHT JOIN packages ON (software.name LIKE packages.software_name) WHERE @filter AND devices.id IS NOT NULL AND packages.type = 'ignored' GROUP BY devices.id\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Devices Without OS Updates for more than 14 Days','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_os_update != '2000-01-01 00:00:00', devices.last_os_update, '') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_os_update < DATE(NOW() - INTERVAL 14 DAY) AND (os_group = 'Linux' OR os_group = 'Windows')\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Devices Seen less than 7 Days ago','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, devices.last_seen AS `devices.last_seen`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_seen > DATE(NOW() - INTERVAL 7 DAY)\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Devices Not Seen for more than 7 Days','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_seen != '2000-01-01 00:00:00', devices.last_seen, '') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_seen < DATE(NOW() - INTERVAL 7 DAY)\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Devices Not Seen for more than 30 Days','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, IF(devices.last_seen != '2000-01-01 00:00:00', devices.last_seen, '') AS `devices.last_os_update`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.last_seen < DATE(NOW() - INTERVAL 30 DAY)\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 10 All','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND devices.os_family = 'Windows 10'\",  '','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 10 Latest Build','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '19045.4894' AND devices.os_family = 'Windows 10'\", '','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 10 Not Latest Build','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number < '19045.4894' AND devices.os_family = 'Windows 10'\",'','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 11 All','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND devices.os_family = 'Windows 11'\",  '','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 11 Latest Build','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '22631.4169' AND devices.os_family = 'Windows 11'\", '','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 11 Not Latest Build','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number < '22631.4169' AND devices.os_family = 'Windows 11'\", '','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 2019 All','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND devices.os_family = 'Windows 2019'\",  '','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 2019 Latest Build','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '17763.6293' AND devices.os_family = 'Windows 2019'\",'','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 2019 Not Latest Build','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number < '17763.6293' AND devices.os_family = 'Windows 2019'\",'','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 2022 All','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND devices.os_family = 'Windows 2022'\",  '','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 2022 Latest Build','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number = '20348.2700' AND devices.os_family = 'Windows 2022'\",'','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (null, 1,'Windows 2022 Not Latest Build','Software','n','',\"SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.name AS `devices.name`, devices.ip AS `devices.ip`, devices.domain AS `devices.domain`, devices.os_name AS `devices.os_name`, locations.name AS `locations.name`, windows.build_number AS `windows.build_number` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (windows.device_id = devices.id AND windows.current = 'y') WHERE @filter AND windows.build_number < '20348.2700' AND devices.os_family = 'Windows 2022'\",'','n','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());


$sql = "INSERT INTO `queries` VALUES (null, 1,'Unknown Devices Found in the last 7 Days','Software','n','',\"WITH RECURSIVE DateRange AS (SELECT DATE(DATE_ADD(NOW(), INTERVAL -7 DAY)) AS StartDate UNION ALL SELECT DATE(DATE_ADD(StartDate, INTERVAL 1 DAY)) FROM DateRange WHERE StartDate < NOW()) SELECT StartDate AS `date`, IF(COUNT(devices.id) > 0, COUNT(devices.id), 0) AS `count` FROM DateRange LEFT JOIN change_log ON (DateRange.StartDate = DATE(change_log.timestamp) AND change_log.db_table = 'devices' AND change_log.db_action = 'create' AND DATE(change_log.timestamp) > DATE_SUB(NOW(), INTERVAL 7 DAY)) LEFT JOIN devices ON (change_log.device_id = devices.id AND devices.type IN ('unknown', 'unidentified') AND devices.org_id IN (@orgs)) GROUP BY DateRange.StartDate ORDER BY DateRange.StartDate\",'','y','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','type','SDN Controller','sdn controller','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Class based on Form Factor and OS (Virtual Windows Client)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"devices\",\"attribute\":\"form_factor\",\"operator\":\"eq\",\"value\":\"Virtual\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"devices\",\"attribute\":\"os_name\",\"operator\":\"nl\",\"value\":\"%Server%\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"class\",\"value\":\"virtual desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'product'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'product','community','text','n','system','2000-01-01 00:00:00','Product type.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'license_footer'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'license_footer','','text','n','system','2000-01-01 00:00:00','Footer text.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'license_limit'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'license_limit','','number','n','system','2000-01-01 00:00:00','Licensed devices.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'server_os'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'server_os','','text','n','system','2000-01-01 00:00:00','The OS Open-AudIT is running on (this server).')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM configuration WHERE name = 'server_platform'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'server_platform','','text','n','system','2000-01-01 00:00:00','The OS Platform Open-AudIT is running on (this server).')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '202411012' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '5.6.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 5.6.0 completed.\n\n";
config('Openaudit')->internal_version = 20241112;
config('Openaudit')->display_version = '5.6.0';
