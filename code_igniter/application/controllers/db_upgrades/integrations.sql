
CREATE TABLE `system_external` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `name` varchar(45) NOT NULL DEFAULT '',      -- based on Integration type.
  `identifier` varchar(250) NOT NULL DEFAULT '', -- the field value of the 'id' in the remote integration
  `link` varchar(250) NOT NULL DEFAULT '', -- maybe not required
  `integrations_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `system_external_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE,
  CONSTRAINT `system_external_integrations_id` FOREIGN KEY (`integrations_id`) REFERENCES `integrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `integrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'nmis',
  `options` longtext NOT NULL,
  `populate_from_local` enum('y', 'n') NOT NULL DEFAULT 'y',
  `populate_from_remote` enum('y', 'n') NOT NULL DEFAULT 'n',
  `query_id` int(10) unsigned DEFAULT NULL,
  `group_id` int(10) unsigned DEFAULT NULL,
  `last_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `status` varchar(45) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `integrations_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `integrations_id` int(10) unsigned NOT NULL DEFAULT '1',
  `system_id` int(10) unsigned DEFAULT NULL,
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `severity` int(1) unsigned NOT NULL DEFAULT '5',
  `severity_text` enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
  `details` text NOT NULL,
  `command` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '',
  `time_to_execute` decimal(12,6) NOT NULL DEFAULT '0.000000',
  `output` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `integrations_id` (`integrations_id`),
  CONSTRAINT `integrations_log_integrations_id` FOREIGN KEY (`integrations_id`) REFERENCES `integrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `integrations_rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `integrations_id` int(10) unsigned NOT NULL DEFAULT '1',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `type` enum('create', 'update') NOT NULL DEFAULT 'create',
  `authoritive_source` enum('local', 'remote') NOT NULL DEFAULT 'local',
  `empty` enum('set_to_blank', 'ignore', 'use_default') NOT NULL DEFAULT 'ignore',
  `local_field` text NOT NULL,
  `remote_field` text NOT NULL,
  `remote_format` enum('', 'string', 'int', 'bool', 'date_YMD', 'date_MDY', 'date_DMY') NOT NULL DEFAULT 'string',
  `transform`     enum('', 'string', 'int', 'bool', 'capitalise', 'lower', 'upper', 'date', 'date_now', 'date_time', 'datetime_now', 'int_to_bool', 'int_to_yn', 'yn_to_int', 'yn_to_bool') NOT NULL DEFAULT '',
  `default_value` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `integration_id` (`integrations_id`),
  CONSTRAINT `integrations_rules_integrations_id` FOREIGN KEY (`integrations_id`) REFERENCES `integrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


$sql = 'CREATE INDEX change_log_timestamp ON change_log (`timestamp`)';
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

