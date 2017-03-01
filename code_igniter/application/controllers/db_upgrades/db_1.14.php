<?php
/**
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************
*
**/

$this->db_log('Upgrade database to 1.14 commenced');

$temp_debug = $this->db->db_debug;
$this->db->db_debug = false;

$this->drop_table('oa_user_org');

# our default Org and Locations are now id = 1
$org_1_id = 1;
$sql = "SELECT COUNT(*) AS `count` FROM oa_org WHERE id = 0";
$query = $this->db->query($sql);
$result = $query->result();
if ($result[0]->count > 0) {
    // OK, we have a default Org at id = 0, check to see if we have an Org at id = 1
    $sql = "SELECT COUNT(*) AS `count` FROM oa_org WHERE id = 1";
    $query = $this->db->query($sql);
    $result = $query->result();
    if ($result[0]->count > 0) {
        // Move this Org
        $sql = "INSERT INTO oa_org (SELECT NULL, `name`, 0, `comments`, 'system', NOW() FROM oa_org WHERE org_id = 1)";
        $query = $this->db->query($sql);
        $org_1_id = $this->db->insert_id();
        $org_1_id = intval($org_1_id);
        $sql = "DELETE FROM oa_org WHERE id = 1";
        $query = $this->db->query($sql);
        $this->db_log($this->db->last_query());
    }
    // Move our old id = 0 into id = 1
    $sql = "UPDATE oa_org SET id = 1, parent_id = 1 WHERE id = 0";
    $query = $this->db->query($sql);
    $this->db_log($this->db->last_query());
    // update any old Orgs that had 1 as a parent to the new inserted id
    $sql = "UPDATE oa_org SET parent_id = $org_1_id WHERE parent_id = 1";
    $query = $this->db->query($sql);
    $this->db_log($this->db->last_query());
    // update any orgs that had 0 as a parent to 1
    $sql = "UPDATE oa_org SET parent_id = 1 WHERE parent_id = 0";
    $query = $this->db->query($sql);
    $this->db_log($this->db->last_query());
} else {
    // Nothing at id = 0, check something is at id = 1
    $sql = "SELECT COUNT(*) as `count` FROM oa_org WHERE id = 1";
    $query = $this->db->query($sql);
    $result = $query->result();
    $this->db_log($this->db->last_query());
    if ($result[0]->count == 0) {
        // Insert the default Org
        $sql = "INSERT INTO `oa_org` VALUES (1,'Default Organisation',1,'','system',NOW())";
        $query = $this->db->query($sql);
        $this->db_log($this->db->last_query());
    }
}

$location_1_id =1;
$sql = "SELECT COUNT(*) AS `count` FROM oa_location WHERE id = 0";
$query = $this->db->query($sql);
$result = $query->result();
$this->db_log($this->db->last_query());
if ($result[0]->count > 0) {
    // OK, we have a default Org at id = 0, check to see if we have an Org at id = 1
    $sql = "SELECT COUNT(*) AS `count` FROM oa_location WHERE id = 1";
    $query = $this->db->query($sql);
    $result = $query->result();
    $this->db_log($this->db->last_query());
    if ($result[0]->count > 0) {
        // Move this Location
        if ($this->db->field_exists('org_id', 'oa_location')) {
            $sql = "INSERT INTO oa_location (SELECT NULL, `name`,`org_id`,`type`,`room`,`suite`,`level`,`address`,`suburb`,`city`,`district`,`region`,`area`,`state`,`postcode`,`country`,`tags`,`phone`,`picture`,`latitude`,`longitude`,`geo`,`comments`,`icon`,'system',NOW() FROM oa_location WHERE id = 1)";
        } else {
            $sql = "INSERT INTO oa_location (SELECT NULL, `name`,`type`,`room`,`suite`,`level`,`address`,`suburb`,`city`,`district`,`region`,`area`,`state`,`postcode`,`country`,`tags`,`phone`,`picture`,`latitude`,`longitude`,`geo`,`comments`,`icon`, `group_id` FROM oa_location WHERE id = 1)";
        }
        $query = $this->db->query($sql);
        $this->db_log($this->db->last_query());
        $location_1_id = $this->db->insert_id();
        $location_1_id = intval($location_1_id);
        $sql = "DELETE FROM oa_location WHERE id = 1";
        $query = $this->db->query($sql);
        $this->db_log($this->db->last_query());
    }
    $sql = "UPDATE oa_location SET id = 1 WHERE id = 0";
    $query = $this->db->query($sql);
    $this->db_log($this->db->last_query());
} else {
    // Nothing at id = 0, check something is at id = 1
    $sql = "SELECT COUNT(*) as `count` FROM oa_location WHERE id = 1";
    $query = $this->db->query($sql);
    $result = $query->result();
    $this->db_log($this->db->last_query());
    if ($result[0]->count == 0) {
        // Insert the default Org
        $sql = "INSERT INTO `oa_location` VALUES (1,'Default Location',1,'Office','','','','','','Gold Coast','','','','Queensland','','Australia','','','',-28.017260,153.425705,'','Default location','office','system',NOW())";
        $query = $this->db->query($sql);
        $this->db_log($this->db->last_query());
    }
}


# additional field
$this->alter_table('additional_field', 'org_id', "ADD org_id int unsigned NOT NULL DEFAULT 1 AFTER `name`", 'add');
$this->alter_table('additional_field', 'org_id', "org_id int unsigned NOT NULL DEFAULT 1 AFTER `name`");

$sql = "UPDATE `additional_field` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `additional_field` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('additional_field', 'edited_by', "ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `placement`", 'add');
$this->alter_table('additional_field', 'edited_date', "ADD `ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`", 'add');


# attachment
$sql = "set @var=if((SELECT true FROM information_schema.TABLE_CONSTRAINTS WHERE CONSTRAINT_SCHEMA = DATABASE() AND TABLE_NAME = 'attachment' AND CONSTRAINT_NAME = 'att_user_id' AND CONSTRAINT_TYPE = 'FOREIGN KEY') = true,'ALTER TABLE `attachment` DROP FOREIGN KEY att_user_id','select 1')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "prepare stmt from @var";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "execute stmt";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "deallocate prepare stmt";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('attachment', 'timestamp', "`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('attachment', 'edited_by', "ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `filename`", 'add');
$sql = "UPDATE `attachment`, `oa_user` SET attachment.edited_by = oa_user.full_name WHERE attachment.user_id = oa_user.id";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());
$this->alter_table('attachment', 'user_id', "DROP user_id", 'drop');


# audit log
$this->alter_table('audit_log', 'timestamp', "`timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# bios
$this->alter_table('bios', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('bios', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# change log
$this->alter_table('change_log', 'ack_time', "`ack_time` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('change_log', 'timestamp', "`timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# chart
$this->alter_table('chart', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `what`", 'add');
$this->alter_table('chart', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `what`");

$sql = "UPDATE `chart` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `chart` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('chart', 'when', "`when` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# cluster
$this->alter_table('cluster', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `description`", 'add');
$this->alter_table('cluster', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `description`");
$sql = "UPDATE `cluster` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `cluster` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('cluster', 'edited_date', "`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# configuration
$this->drop_table('configuration');
$sql = "CREATE TABLE `configuration` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  `value` varchar(250) NOT NULL DEFAULT '',
  `editable` varchar(1) NOT NULL DEFAULT 'n',
  `edited_by`varchar(100) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `description` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `configuration` (SELECT NULL, config_name, config_value, config_editable, 'system', NOW(), config_description FROM oa_config)";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'ad_domain'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'ad_server'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'log_style'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` LIKE 'log_retain_level%'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_0','180','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 0.')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_1','180','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 1.')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_2','180','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 2.')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_3','180','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 3.')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_4','180','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 4.')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_5','90','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 5.')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_6','30','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 6.')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_7','7','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 7.')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());


# credential
$this->alter_table('credential', 'edited_date', "`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# credentials
$this->alter_table('credentials', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `credentials`", 'add');
$this->alter_table('credentials', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `credentials`");

$sql = "UPDATE `credentials` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `credentials` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('credentials', 'edited_date', "`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# discoveries
$this->drop_table('discoveries');
$sql = "CREATE TABLE `discoveries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `devices_assigned_to_org` int(10) unsigned DEFAULT NULL,
  `devices_assigned_to_location` int(10) unsigned DEFAULT NULL,
  `network_address` varchar(100) NOT NULL DEFAULT '',
  `system_id` int(10) unsigned NOT NULL DEFAULT '0',
  `other` text NOT NULL,
  `device_count` int(10) unsigned NOT NULL DEFAULT '0',
  `discard` enum('y','n') NOT NULL DEFAULT 'n',
  `created_by` varchar(200) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `complete` enum('y','n') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());


# discovery log
$this->drop_table('discovery_log');
$sql = "CREATE TABLE `discovery_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `discovery_id` int(10) unsigned DEFAULT NULL,
  `system_id` int(10) unsigned DEFAULT NULL,
  `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `severity` int(1) unsigned NOT NULL DEFAULT '5',
  `severity_text` enum ('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `file` varchar(100) NOT NULL DEFAULT '',
  `function` varchar(100) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `command` text NOT NULL,
  `command_status` varchar(100) NOT NULL DEFAULT '',
  `command_time_to_execute` decimal(12,6) NOT NULL,
  `command_output` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `pid` (`pid`),
  CONSTRAINT `discovery_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());


# disk
$this->alter_table('disk', 'first_seen', "first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('disk', 'last_seen', "last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# dns
$this->alter_table('dns', 'first_seen', "first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('dns', 'last_seen', "last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# edit log
$this->alter_table('edit_log', 'timestamp', "`timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# file
$this->alter_table('file', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('file', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# files
$this->alter_table('files', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`", 'add');
$this->alter_table('files', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`");

$sql = "UPDATE `files` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `files` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('files', 'edited_date', "`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# graph
$this->alter_table('graph', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`", 'add');
$this->alter_table('graph', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`");
$sql = "UPDATE `graph` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `graph` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('graph', 'timestamp', "`timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# groups
$this->drop_table('groups');
$sql = "CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `sql` text NOT NULL,
  `link` text NOT NULL,
  `expose` enum('y','n') NOT NULL DEFAULT 'y',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"All Devices\", \"All the devices a user is authorised to view.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Apple Computers\", \"Devices with type = computer and os_family like OSX.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND (os_family LIKE '%osx' OR os_family LIKE '%macos%')\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Centos Computers\", \"Devices with type = computer and os_family like Centos.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_family LIKE 'centos'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Computers\", \"Devices with type = computer.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Debian Computers\", \"Devices with type = computer and os_family like Debian.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_family LIKE 'debian'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Linux Computers\", \"Devices with type = computer and os_group like Linux.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_group LIKE 'linux'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Open-AudIT Enterprise Managed Devices\", \"Devices Managed by Open-AudIT Enterprise.\", \"SELECT distinct(system.id) FROM system WHERE @filter AND system.status = 'production' and oae_manage = 'y'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Printers\", \"Devices with type = printer.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'printer'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Public IP Devices\", \"Devices with a public IP address and a status of production.\", \"SELECT distinct(system.id) FROM system LEFT JOIN ip ON (ip.system_id = system.id AND ip.current = 'y') WHERE @filter AND ((( ip.ip > '000.000.000.000' AND ip.ip < '010.000.000.000' ) OR ( ip.ip > '010.255.255.255' AND ip.ip < '169.254.0.0' ) OR ( ip.ip > '169.254.255.255' AND ip.ip < '172.016.000.000' ) OR ( ip.ip > '172.31.255.255' AND ip.ip < '192.168.000.000' ) OR ip.ip > '192.168.255.255' ) OR ( ( system.ip > '000.000.000.000' AND system.ip < '010.000.000.000' ) OR ( system.ip > '010.255.255.255' AND system.ip < '169.254.0.0' ) OR ( system.ip > '169.254.255.255' AND system.ip < '172.016.000.000' ) OR ( system.ip > '172.31.255.255' AND system.ip < '192.168.000.000' ) OR system.ip > '192.168.255.255' )) AND system.status = 'production'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"RedHat Computers\", \"Devices with type = computer and os_family like RedHat.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_family LIKE 'redhat'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Routers\", \"Devices with type = router.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'router'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Switches\", \"Devices with type = switch.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'switch'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Virtual Hosts\", \"Devices with class = hypervisor.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.class = 'hypervisor'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Windows Computers\", \"Devices with type = computer and os_group like Windows.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_group LIKE 'windows'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Windows Servers\", \"Devices with type = computer and os_name like Windows Server.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_name LIKE '%windows%server%'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO groups VALUES(NULL, 1, \"Windows Workstations\", \"Devices with type = computer and os_name like Windows and os_name not like Server.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND system.os_name LIKE '%windows%' AND system.os_name NOT LIKE '%server%')\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());


# invoice
$this->alter_table('invoice', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`", 'add');
$this->alter_table('invoice', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`");

$sql = "UPDATE `invoice` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `invoice` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('invoice', 'edited_by', "ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `filename`", 'add');

$this->alter_table('invoice', 'edited_date', "ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`", 'add');


#ip
$this->alter_table('ip', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('ip', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# ldap groups
$this->drop_table('ldap_groups');
$sql = "CREATE TABLE `ldap_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ldap_servers_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(200) NOT NULL DEFAULT '',
  `dn` text NOT NULL,
  `primary_token` varchar(200) NOT NULL DEFAULT '',
  `memberof` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

# ldap servers
$this->drop_table('ldap_servers');
$sql = "CREATE TABLE `ldap_servers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `lang` varchar(200) NOT NULL DEFAULT '',
  `host` varchar(200) NOT NULL DEFAULT '',
  `domain` varchar(200) NOT NULL DEFAULT '',
  `use_roles` enum('y','n') NOT NULL DEFAULT 'n',
  `refresh` int(10) unsigned NOT NULL DEFAULT '24',
  `refreshed` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

if (!empty($this->config->config['ad_domain']) and !empty($this->config->config['ad_server'])) {
    $sql = "INSERT INTO `ldap_servers` VALUES (NULL, 'Default Domain', 1, 'Migrated by system', 'en', '" . $this->config->config['ad_server'] . "', '" . $this->config->config['ad_domain'] . "', 'n', 'system', NOW())";
    $query = $this->db->query($sql);
    $this->db_log($this->db->last_query());
}

# licenses
if (!$this->db->table_exists('licenses')) {
    $sql = "CREATE TABLE `licenses` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT,`org_id` int(10) unsigned NOT NULL DEFAULT '1',`invoice_id` int(10) unsigned NOT NULL DEFAULT '0',`invoice_item_id` int(10) unsigned NOT NULL DEFAULT '0',`name` varchar(200) NOT NULL DEFAULT '',`description` text NOT NULL,`match_string` text NOT NULL,`type` enum('','software','hardware','service','other') NOT NULL DEFAULT '',`edited_by` varchar(200) NOT NULL DEFAULT '',`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $query = $this->db->query($sql);
    $this->db_log($this->db->last_query());
}
if ($this->db->table_exists('oa_asset_select')) {
    if ($this->db->count_all('oa_asset_select') > 0) {
        if ($this->db->count_all('licenses') == 0) {
            $sql = "INSERT INTO licenses (SELECT NULL AS `id`, 1 AS `org_id`, 0 AS `invoice_id`, 0 AS `invoice_item_id`, `select_name` AS `name`, '' AS `description`, `select_name` AS `match_string`, 'software' AS `type`, 'system' AS `edited_by`, NOW() AS `edited_on` FROM oa_asset_select)";
            $query = $this->db->query($sql);
            $this->db_log($this->db->last_query());
        }
    }
}

# log
$this->alter_table('log', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('log', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# memory
$this->alter_table('memory', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('memory', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# module
$this->alter_table('module', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('module', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# monitor
$this->alter_table('monitor', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('monitor', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# motherboard
$this->alter_table('motherboard', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('motherboard', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# netstat
$this->alter_table('netstat', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('netstat', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# network
$this->alter_table('network', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('network', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# networks
$this->alter_table('networks', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`", 'add');
$this->alter_table('networks', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`");

$sql = "UPDATE `networks` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `networks` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('networks', 'edited_date', "`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# nmap
$this->alter_table('nmap', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('nmap', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# notes
$this->alter_table('notes', 'user_id', "DROP `user_id`", 'drop');
$this->alter_table('notes', 'timestamp', "`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('notes', 'edited_by', "ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `edited_date`", 'add');


# oa_change
$this->alter_table('oa_change', 'planned_date', "`planned_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('oa_change', 'implemented_date', "`implemented_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('oa_change', 'timestamp', "`timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# oa_connection
$this->alter_table('oa_connection', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`", 'add');
$this->alter_table('oa_connection', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`");

$sql = "UPDATE `oa_connection` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `oa_connection` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('oa_connection', 'edited_by', "ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `ip_address_internal_b`", 'add');
$this->alter_table('oa_connection', 'edited_date', "ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`", 'add');
$this->alter_table('oa_connection', 'edited_date', "`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

# oa_group
$this->alter_table('oa_group', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `group_id`", 'add');
$this->alter_table('oa_group', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `group_id`");
$this->alter_table('oa_group', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `group_id`");

$sql = "UPDATE `oa_group` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `oa_group` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());


# oa_location
$this->alter_table('oa_location', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`", 'add');
$this->alter_table('oa_location', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`");

$sql = "UPDATE `oa_location` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `oa_location` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('oa_location', 'edited_by', "ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `icon`", 'add');
$this->alter_table('oa_location', 'edited_date', "ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`", 'add');
$this->alter_table('oa_location', 'group_id', "DROP `group_id`", 'add');
$this->alter_table('oa_location', 'type', "`type` enum ('Airforce','Airport','Ambulance Station','Army','Cloud','Conference Center','Court House','Data Center','Depot','District','Doctors Office','Embassy','Factory','Fire Station','Guard','Head Office','High School','Hospital','Hotel','House','Library','Light House','Marina','Mobile Phone Tower','Motel','Navy','Newsagent','Nursing Home','Observatory','Office','Oil Rig','Police','Power Plant','Power Substation','Prison','Radio Station','Regional','Resort','Retail','School','Security','Stadium','Train Station','Travel Agency','TV Station','University','Warehouse','Workshop') NOT NULL DEFAULT 'Office' AFTER `org_id`");
$this->alter_table('oa_connection', 'location_id_a', "`location_id_a` int(10) unsigned NOT NULL DEFAULT '1'");
$this->alter_table('oa_connection', 'location_id_b', "`location_id_b` int(10) unsigned NOT NULL DEFAULT '1'");

# oa_org
$this->alter_table('oa_org', 'edited_by', "ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `comments`", 'add');
$this->alter_table('oa_org', 'edited_date', "ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`", 'add');
$this->alter_table('oa_org', 'group_id', "DROP `group_id`", 'drop');
$this->alter_table('oa_org', 'ad_group', "ADD `ad_group` varchar(100) NOT NULL DEFAULT '' AFTER `comments`", 'add');
$this->alter_table('oa_org', 'parent_id', "`parent_id` int(10) unsigned DEFAULT '1'");

$sql = "UPDATE oa_org SET ad_group = CONCAT('open-audit_orgs_', LOWER(REPLACE(`name`, ' ', '_')))";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE oa_org SET edited_by = 'system'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE oa_org SET edited_date = NOW()";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());


# oa_report
$this->alter_table('oa_report', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `report_id`", 'add');
$this->alter_table('oa_report', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `report_id`");

$sql = "UPDATE `oa_report` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `oa_report` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('oa_report', 'edited_by', "ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `report_sort_column`", 'add');
$this->alter_table('oa_report', 'edited_date', "ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`", 'add');


# oa_temp
$this->alter_table('oa_temp', 'temp_timestamp', "`temp_timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

# oa_user
$this->alter_table('oa_user', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`", 'add');
$this->alter_table('oa_user', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`");

$sql = "UPDATE `oa_user` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `oa_user` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('oa_user', 'permissions', "DROP permissions", 'drop');
$this->alter_table('oa_user', 'sam', "DROP sam", 'drop');
$this->alter_table('oa_user', 'admin', "DROP admin", 'drop');
$this->alter_table('oa_user', 'display_count', "DROP display_count", 'drop');
$this->alter_table('oa_user', 'theme', "DROP theme", 'drop');
$this->alter_table('oa_user', 'roles', "ADD roles text NOT NULL default '' AFTER email", 'add');
$this->alter_table('oa_user', 'orgs', "ADD orgs text NOT NULL default '' AFTER roles", 'add');
$this->alter_table('oa_user', 'ldap', "ADD ldap text NOT NULL after active", 'add');
$this->alter_table('oa_user', 'edited_by', "ADD `edited_by` varchar(200) NOT NULL DEFAULT '' after active", 'add');
$this->alter_table('oa_user', 'edited_date', "ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'", 'add');

$sql = "UPDATE oa_user SET roles = '[\"admin\",\"org_admin\"]' WHERE name IN ('admin', 'nmis', 'open-audit_enterprise')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE oa_user SET roles = '[\"user\"]' WHERE name NOT IN ('admin', 'nmis', 'open-audit_enterprise')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE oa_user SET orgs = '[1]'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());


# optical
$this->alter_table('optical', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('optical', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# pagefile
$this->alter_table('pagefile', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('pagefile', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# partition
$this->alter_table('partition', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('partition', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# print_queue
$this->alter_table('print_queue', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('print_queue', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# processor
$this->alter_table('processor', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('processor', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

            # queries
$this->drop_table('queries');
$sql = "CREATE TABLE `queries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `sql` text NOT NULL,
  `link` text NOT NULL,
  `expose` enum('y','n') NOT NULL DEFAULT 'y',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Audit Dates\", \"The first and last times a device was audited.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_name AS `system.os_name`, system.first_seen AS `system.first_seen`, system.last_seen AS `system.last_seen`, GROUP_CONCAT(DISTINCT(audit_log.type) ORDER BY audit_log.type) AS `seen_by` FROM system LEFT JOIN audit_log ON (audit_log.system_id = system.id) WHERE @filter GROUP BY system.id\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Billing Report\", \"Name, last seen on and by, type, class, manufacturer, model, serial, user, location.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, oa_org.name AS `oa_org.name`, system.last_seen AS `system.last_seen`, system.last_seen_by AS `system.last_seen_by`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.class AS `system.class`, windows.user_name AS `windows.user_name`, oa_location.name AS `oa_location.name` FROM system LEFT JOIN oa_location ON (system.location_id = oa_location.id) LEFT JOIN windows ON (system.id = windows.system_id AND windows.current = 'y') LEFT JOIN oa_org ON (system.org_id = oa_org.id) WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Changes - Files\", \"Any changes in the table 'file'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table = 'files'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Changes - Hardware\", \"Any changes created in the tables 'bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'optical', 'partition', 'processor', 'network', 'scsi', 'sound' and 'video'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table in ('bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'optical', 'partition', 'processor', 'network', 'scsi', 'sound', 'video')\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Changes - New Devices\", \"Any changes in the table 'system'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table = 'system'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Changes - Settings\", \"Any changes in the tables 'dns', 'ip', 'log', netstat', 'pagefile', 'print_queue', 'route', 'task', 'user', 'user_group' and 'variable'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table in ('dns', 'ip', 'log', 'netstat', 'pagefile', 'print_queue', 'route', 'task', 'user', 'user_group', 'variable')\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Changes - Software\", \"Any changes in the tables 'service', 'server', 'server_item', 'software' and 'software_key'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table in ('service', 'server', 'server_item', 'software', 'software_key')\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Consumed IP Addresses\", \"The ip addresses used by a group.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_family AS `system.os_family`, system.description AS `system.description`, ip.ip as `ip.ip` FROM ip LEFT JOIN system ON (system.id = ip.system_id AND ip.current = 'y') WHERE @filter AND ip.ip IS NOT NULL AND ip.ip != '127.000.000.001' AND ip.ip != '' AND ip.ip != '0.0.0.0' AND ip.ip != '000.000.000.000' AND ip.version = '4' GROUP BY ip.id, ip.ip ORDER BY ip.ip\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Devices Without Credentials\", \"Device details - name, ip, last seen on and by for those devices only discovered by Nmap and have therefore not been audited.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, audit_log.timestamp AS `audit_log.timestamp`, audit_log.ip AS `audit_log.ip` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.id) WHERE @filter AND audit_log.system_id NOT IN (SELECT DISTINCT(audit_log.system_id) FROM audit_log WHERE type != 'nmap') GROUP BY system.id\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Disk Partition Use\", \"Partition details where partition free and used space aren't 0 and type isn't Volume or Network Drive and mount point isn't [SWAP].\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, partition.id AS `partition.id`, partition.hard_drive_index AS `partition.hard_drive_index`, partition.mount_point AS `partition.mount_point`, partition.mount_type as `partition.mount_type`, partition.size AS `partition.size`, partition.used AS `partition.used`, partition.free AS `partition.free`, ROUND(((partition.free / partition.size) * 100), 0) AS percent_free, partition.name AS `partition.name` FROM system INNER JOIN `partition` ON (partition.system_id = system.id AND partition.current = 'y') WHERE @filter AND partition.used > 0 AND partition.free > 0 AND LOWER(partition.type) != 'volume' AND LOWER(partition.type) != 'network drive' AND LOWER(partition.mount_point) != '[swap]' ORDER BY system.name, partition.id\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Export Details\", \"Icon, type, name, first seen on, last seen on, last seen by, manufacturer, model, serial, owner, organisation, location, operating system.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.fqdn AS `system.fqdn`, system.serial AS `system.serial`, system.class AS `system.class`, system.function AS `system.function`, system.owner AS `system.owner`, system.asset_number AS `system.asset_number` FROM system WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Failed Audits\", \"Name, ip address, audit time, audit stage.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, audit_log.timestamp AS `audit_log.timestamp`, audit_log.debug AS `audit_log.debug` FROM system LEFT JOIN audit_log ON (system.id = audit_log.system_id) WHERE @filter AND audit_log.debug > ''\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Hardware - Device\", \"Icon, name, ip address, manufacturer, model, serial.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.asset_number AS `system.asset_number` FROM system WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Hardware - Memory and Processors\", \"Device details - name, ip, memory, total processor cores, processor speed, processor description.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, CAST(system.memory_count/1024 AS UNSIGNED) AS `system.memory_count`, processor.physical_count AS `processor.physical_count`, processor.core_count AS `processor.core_count`, processor.logical_count AS `processor.logical_count`, processor.speed AS `processor.speed`, processor.description AS `processor.description` FROM system INNER JOIN processor ON (system.id = processor.system_id AND processor.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Hardware - Workstations\", \"Device details - name, ip, manufacturer, model, serial, form factor, memory, processor.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.memory_count AS `system.memory_count`, system.form_factor AS `system.form_factor`, processor.description AS `processor.description` FROM system LEFT JOIN processor ON (processor.system_id = system.id AND processor.current = 'y') LEFT JOIN oa_location ON (system.location_id = oa_location.id) WHERE @filter AND system.type = 'computer' AND system.class != 'server' AND system.class != 'hypervisor' ORDER BY system.name\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Installed - Acrobat\", \"Adobe Acrobat installations (software name contains 'acrobat' or 'adobe reader').\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND (software.name LIKE '%acrobat%' OR software.name LIKE 'adobe reader%')) LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Installed - Antivirus\", \"Installed AntiVirus software (software name contains 'virus' or 'trend micro' or 'endpoint').\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version` FROM system LEFT JOIN software ON (software.system_id = system.id AND software.current = 'y' AND (software.name LIKE '%virus%' or software.name LIKE '%trend micro%' or software.name LIKE '%endpoint%')) LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter AND system.type = 'computer'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Installed - Flash\", \"Flash Player installations.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND software.name LIKE '%Flash Player%') LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Installed - MS FrontPage\", \"MS Frontpage installations (software name contains 'Microsoft Office Frontpage' or 'with Frontpage').\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND (software.name LIKE 'Microsoft Office Frontpage%' OR software.name LIKE '%with FrontPage')) LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Installed - MS Office\", \"MS Office installations.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND software.name LIKE 'Microsoft Office%') LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Installed - MS Project\", \"MS Project installations (software name contains 'Microsoft Project').\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND software.name LIKE '%Microsoft%Project%') LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Installed - MS Visio\", \"MS Visio installations (software name contains 'Microsoft Visio').\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND software.name LIKE 'Microsoft%Visio%') LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Interfaces Used or Available\", \"Query to determine if a device interface is available for use.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, network.alias as `network.alias`, network.net_index AS `network.net_index`, network.description as `network.description`, network.ifadminstatus as `network.ifadminstatus`, network.ip_enabled as `network.ip_enabled`, system.sysuptime AS `system.sysuptime`, (system.sysuptime - network.iflastchange) AS diff, floor((system.sysuptime - network.iflastchange) /60/60/24/100) as diff_days, IF((network.ifadminstatus = 'down') OR (network.ifadminstatus = 'up' AND (network.ip_enabled != 'up' AND network.ip_enabled != 'dormant') AND (((system.sysuptime - network.iflastchange) > 60480000) OR (system.sysuptime < network.iflastchange))), 'available', 'used') AS available FROM network LEFT JOIN system ON (network.system_id = system.id AND network.current = 'y') WHERE @filter AND network.ifadminstatus != ''\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Log Files\", \"Log file details.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, log.name as `log.name`, log.file_name AS `log.file_name`, log.file_size AS `log.file_size`, log.max_file_size AS `log.max_file_size`, log.overwrite AS `log.overwrite` FROM log LEFT JOIN system ON (system.id = log.system_id and log.current = 'y') WHERE @filter ORDER BY system.name\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Netstat Ports\", \"Detected Netstat ports.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_name AS `system.os_name`, netstat.protocol AS `netstat.protocol`, netstat.port AS `netstat.port`, netstat.ip AS `netstat.ip`, netstat.program AS `netstat.program` FROM system LEFT JOIN netstat ON (system.id = netstat.system_id AND netstat.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Printer Queues\", \"Printer details - manufacturer, model, status, capabilities, etc.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, print_queue.manufacturer AS `print_queue.manufacturer`, print_queue.model AS `print_queue.model`, print_queue.description AS `print_queue.description`, print_queue.driver AS `print_queue.driver`, print_queue.status AS `print_queue.status`, print_queue.port_name AS `print_queue.port_name`, print_queue.duplex AS `print_queue.duplex`, print_queue.color AS `print_queue.color`, print_queue.location AS `print_queue.location`, print_queue.type AS `print_queue.type`, print_queue.shared AS `print_queue.shared`, print_queue.shared_name AS `print_queue.shared_name`, print_queue.capabilities AS `print_queue.capabilities` FROM print_queue LEFT JOIN system ON (system.id = print_queue.system_id AND print_queue.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Servers - Database\", \"All databases.\", \"SELECT system.id AS `system.id`, system.name AS `system.name`, system.fqdn AS `system.fqdn`, system.os_family AS `system.os_family`, system.environment AS `system.environment`, server_item.parent_name AS `server_item.parent_name`, server_item.name AS `server_item.name`, server_item.instance AS `server_item.instance`, server_item.path AS `server_item.path`, server_item.log_status AS `server_item.log_status`, server_item.log_format AS `server_item.log_format`, server_item.log_rotation AS `server_item.log_rotation`, server_item.log_path AS `server_item.log_path` FROM system LEFT JOIN server_item ON (server_item.system_id = system.id and server_item.current = 'y') WHERE @filter AND server_item.type = 'database'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Servers - Websites\", \"All detected websites (IIS based).\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_family AS `system.os_family`, system.environment AS `system.environment`, server_item.parent_name AS `server_item.parent_name`, server_item.name AS `server_item.name`, server_item.description AS `server_item.description`, server_item.status AS `server_item.status`, server_item.instance AS `server_item.instance`, server_item.path AS `server_item.path`, server_item.log_status AS `server_item.log_status`, server_item.log_format AS `server_item.log_format`, server_item.log_rotation AS `server_item.log_rotation`, server_item.log_path AS `server_item.log_path` FROM system LEFT JOIN server_item ON (server_item.system_id = system.id and server_item.current = 'y') WHERE @filter AND server_item.type = 'website'\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Shares\", \"Shared directory details.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, share.id AS `share.id`, share.name AS `share.name`, share.description AS `share.description`, share.size AS `share.size`, share.path AS `share.path` FROM share LEFT JOIN system ON (system.id = share.system_id and share.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Users - Elevated\", \"Name, group name, group members.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM user_group LEFT JOIN system ON (user_group.system_id = system.id AND user_group.current = 'y') WHERE @filter AND (user_group.name = 'Administrators' OR user_group.name = 'Power Users' OR user_group.name = 'Remote Desktop Users' OR user_group.name = 'wheel' OR user_group.name = 'sudo') AND user_group.members > '' GROUP BY system.id, user_group.name ORDER BY system.name\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Users - Orphaned\", \"User accounts that no longer appear to be valid.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM system LEFT JOIN user_group ON (user_group.system_id = system.id AND user_group.current = 'y') WHERE @filter AND user_group.members LIKE '%@,%' AND user_group.members NOT LIKE 'Everyone@,' GROUP BY user_group.id ORDER BY system.name\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO queries VALUES (NULL, 1, \"Users - Standard\", \"Name, group name, group members.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.members AS `user_group.members`, user_group.name AS `user_group.name` FROM user_group LEFT JOIN system ON (user_group.system_id = system.id AND user_group.current = 'y') WHERE @filter AND (user_group.name = 'Users' OR user_group.name = 'Guests') AND user_group.members > ''\", \"\", \"y\", \"system\", NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

# roles
$this->drop_table('roles');
$sql = "CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `permissions` text NOT NULL DEFAULT '',
  `ad_group` varchar(100) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO roles VALUES (NULL, 'admin', 'This role can change global options.', '{\"configuration\":\"crud\",\"database\":\"crud\",\"groups\":\"crud\",\"ldap_servers\":\"crud\",\"logs\":\"crud\",\"nmis\":\"crud\",\"queries\":\"crud\",\"roles\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"summaries\":\"crud\"}', 'open-audit_roles_admin', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO roles VALUES (NULL, 'org_admin', 'This role is used for administration of endpoints that contain an org_id.', '{\"charts\":\"crud\",\"connections\":\"crud\",\"credentials\":\"crud\",\"summaries\":\"crud\",\"devices\":\"crud\",\"discoveries\":\"crud\",\"fields\":\"crud\",\"files\":\"crud\",\"graph\":\"crud\",\"groups\":\"crud\",\"invoice\":\"crud\",\"licenses\":\"crud\",\"locations\":\"crud\",\"networks\":\"crud\",\"orgs\":\"crud\",\"queries\":\"crud\",\"scripts\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"users\":\"crud\"}', 'open-audit_roles_org_admin', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO roles VALUES (NULL, 'reporter', 'The role used for reading endpoints and creating reports above to the user role.', '{\"charts\":\"r\",\"connections\":\"r\",\"credentials\":\"r\",\"summaries\":\"r\",\"devices\":\"r\",\"fields\":\"r\",\"files\":\"r\",\"graph\":\"r\",\"invoice\":\"r\",\"licenses\":\"crud\",\"locations\":\"r\",\"networks\":\"r\",\"orgs\":\"r\",\"queries\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\"}', 'open-audit_roles_reporter', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO roles VALUES (NULL, 'user', 'A standard role that can read all endpoints that contain an org_id.', '{\"charts\":\"r\",\"connections\":\"r\",\"credentials\":\"r\",\"summaries\":\"r\",\"devices\":\"r\",\"fields\":\"r\",\"files\":\"r\",\"graph\":\"r\",\"invoice\":\"r\",\"licenses\":\"r\",\"locations\":\"r\",\"networks\":\"r\",\"orgs\":\"r\",\"queries\":\"r\",\"search\":\"crud\",\"sessions\":\"crud\"}', 'open-audit_roles_user', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

            # route
$this->alter_table('route', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('route', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

            # san
$this->alter_table('san', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('san', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

# scripts
$this->alter_table('scripts', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`", 'add');
$this->alter_table('scripts', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`");

$sql = "UPDATE `scripts` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `scripts` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('scripts', 'edited_date', "`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

# scsi
$this->alter_table('scsi', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('scsi', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

# server
$this->alter_table('server', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('server', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

# server_item
$this->alter_table('server_item', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('server_item', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

# service
$this->alter_table('service', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('service', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

# share
$this->alter_table('share', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('share', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

# software
$this->alter_table('software', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('software', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('software', 'installed_on', "`installed_on` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

# software_key
$this->alter_table('software_key', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('software_key', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

# sound
$this->alter_table('sound', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('sound', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

# summaries
$this->drop_table('summaries');
$sql = "CREATE TABLE `summaries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `table` varchar(100) NOT NULL DEFAULT '',
  `column` varchar(100) NOT NULL DEFAULT '',
  `extra_columns` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO summaries VALUES (NULL, 'Device Classes', 1, 'system', 'class', '', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO summaries VALUES (NULL, 'Device Status', 1, 'system', 'status', '', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO summaries VALUES (NULL, 'Device Types', 1, 'system', 'type', '', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO summaries VALUES (NULL, 'DNS Domains', 1, 'system', 'dns_domain', '', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO summaries VALUES (NULL, 'Form Factors', 1, 'system', 'form_factor', 'system.form_factor,system.class', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO summaries VALUES (NULL, 'Manufacturers', 1, 'system', 'manufacturer', 'system.model', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO summaries VALUES (NULL, 'Operating Systems', 1, 'system', 'os_family', '', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO summaries VALUES (NULL, 'Server Types', 1, 'server', 'type', '', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO summaries VALUES (NULL, 'Software', 1, 'software', 'name', 'software.name,software.version', 'system', NOW())";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());


# system
$this->alter_table('system', 'org_id', "ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `owner`", 'add');
$this->alter_table('system', 'org_id', "`org_id` int unsigned NOT NULL DEFAULT 1 AFTER `owner`");

$sql = "UPDATE `system` SET `org_id` = $org_1_id WHERE `org_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `system` SET `org_id` = 1 WHERE `org_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());


$this->alter_table('system', 'location_id', "ADD `location_id` int unsigned NOT NULL DEFAULT 1 AFTER `org_id`", 'add');
$this->alter_table('system', 'location_id', "`location_id` int unsigned NOT NULL DEFAULT 1 AFTER `org_id`");

$sql = "UPDATE `system` SET `location_id` = $location_1_id WHERE `location_id` = 1";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE `system` SET `location_id` = 1 WHERE `location_id` = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('system', 'os_installation_date', "`os_installation_date` date NOT NULL DEFAULT '2000-01-01'");
$this->alter_table('system', 'purchase_date', "`purchase_date` date NOT NULL DEFAULT '2000-01-01'");
$this->alter_table('system', 'lease_expiry_date', "`lease_expiry_date` date NOT NULL DEFAULT '2000-01-01'");
$this->alter_table('system', 'warranty_expires', "`warranty_expires` date NOT NULL DEFAULT '2000-01-01'");
$this->alter_table('system', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('system', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

$sql = "UPDATE system SET manufacturer = 'VMware' WHERE manufacturer like 'VMware%'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE system SET form_factor = 'Virtual' WHERE manufacturer = 'VMware' AND form_factor = 'Other'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());


# task
$this->alter_table('task', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('task', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# user
$this->alter_table('user', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('user', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# user_group
$this->alter_table('user_group', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('user_group', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# variable
$this->alter_table('variable', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('variable', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# video
$this->alter_table('video', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('video', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# vm
$this->alter_table('vm', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('vm', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# warranty
$this->alter_table('warranty', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('warranty', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('warranty', 'start', "`start` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('warranty', 'end', "`end` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");


# windows
$this->alter_table('windows', 'first_seen', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('windows', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_serial_match'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL, 'discovery_serial_match','y','y','system',NOW(),'Should we match a device based on its serial number.')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE configuration SET value = '20160904' WHERE name = 'internal_version'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE configuration SET value = '1.14' WHERE name = 'display_version'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());


# Migrate old fields groups
$field_sql = "SELECT * FROM `additional_field`";
$query = $this->db->query($field_sql);
$result = $query->result();
$this->db_log($this->db->last_query());
foreach ($result as $field) {
    $field_sql = "SELECT * FROM oa_group WHERE group_id = ?";
    $data = array(intval($field->group_id));
    $query = $this->db->query($field_sql, $data);
    $result_group = $query->result();
    $this->db_log($this->db->last_query());
    if (!empty($result_group)) {
        $old_group = $result_group[0];
        $new_group = array();
        $new_group['org_id'] = 1;
        $new_group['name'] = $old_group->group_name . ' (used by fields)';
        $new_group['description'] = 'Migrated for use in fields.';
        $new_group['sql'] = str_ireplace('where ', 'WHERE @filter', $old_group->group_dynamic_select);
        $new_group['link'] = '';
        $new_group['expose'] = 'n';
        $field_sql = "INSERT INTO `groups` VALUES (NULL, ?, ?, ?, ?, ?, ?, 'system', NOW())";
        $query = $this->db->query($field_sql, $new_group);
        $this->db_log($this->db->last_query());
        
        $new_group['id'] = $this->db->insert_id();
        $field_sql = "UPDATE `additional_field` SET `group_id` = ? WHERE `id` = ?";
        $data = array(intval($new_group['id']), intval($field->id));
        $query = $this->db->query($field_sql, $new_group);
        $this->db_log($this->db->last_query());
    }
}

$this->db->db_debug = $temp_debug;

$this->config->config['internal_version'] = '20160904';
$this->config->config['display_version'] = '1.14';
$this->db_log('Upgrade database to 1.14 completed');
