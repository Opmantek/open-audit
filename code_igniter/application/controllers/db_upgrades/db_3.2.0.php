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

/*
ALTER TABLE `collectors` ADD `os` varchar(100) NOT NULL DEFAULT '' AFTER `network_address`;

UPDATE `configuration` SET value = 5 WHERE `name` = 'collector_check_minutes';

ALTER TABLE `discovery_scan_options` CHANGE `ssh_ports` `ssh_ports` TEXT NOT NULL AFTER `exclude_ip`;

ALTER TABLE `networks` CHANGE `type` `type` enum('Campus Area Network','Cloud Network','Enterprise Private Network','Home Area Network','Local Area Network','Metropolitan Area Network','Passive Optical Local Area Network','Personal Area Network','Storage-Area Network','System-Area Network','Virtual Private Network','Wide Area Network','Wireless Local Area Network') NOT NULL DEFAULT 'Local Area Network';

ALTER TABLE `networks` ADD `gateways` TEXT NOT NULL AFTER `cloud_id`;

ALTER TABLE `system` ADD `dns_fqdn` TEXT NOT NULL AFTER `fqdn`;

ALTER TABLE `system` ADD `cluster_id` int(10) unsigned DEFAULT NULL AFTER cluster_type;

ALTER TABLE `system` ADD `manufacturer_code` varchar(200) NOT NULL DEFAULT '' AFTER manufacturer;

ALTER TABLE `system` ADD `snmp_enterprise_id` int(10) unsigned NOT NULL DEFAULT '0' AFTER snmp_version;

ALTER TABLE `system` ADD `snmp_enterprise_name` varchar(255) NOT NULL DEFAULT '' AFTER snmp_enterprise_id;

DELETE FROM configuration WHERE name = 'match_dns_fqdn';

INSERT INTO `configuration` VALUES (NULL,'match_dns_fqdn','n','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its DNS fqdn.');

DROP TABLE IF EXISTS `clusters`;

CREATE TABLE `clusters` (  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,  `name` varchar(200) NOT NULL DEFAULT '',  `org_id` int(10) unsigned NOT NULL DEFAULT '1',   `description` text NOT NULL,   `type` enum('high availability','load balancing','perforance','storage','other','') NOT NULL DEFAULT '',   `purpose` enum('application','database','file','virtualisation','web','other','') NOT NULL DEFAULT '',   `status` varchar(100) NOT NULL DEFAULT '',   `edited_by` varchar(200) NOT NULL DEFAULT '',   `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',   PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS rules;

CREATE TABLE `rules` (  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,  `name` varchar(200) NOT NULL DEFAULT '',  `org_id` int(10) unsigned NOT NULL DEFAULT '1',  `description` text NOT NULL,  `weight` int(10) unsigned NOT NULL DEFAULT '100',  `inputs` text NOT NULL,  `outputs` text NOT NULL,  `edited_by` varchar(200) NOT NULL DEFAULT '',  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',  PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;

$command = 'c:\\xampp\\mysql\\bin\\mysql.exe -h ' . $this->db->hostname . ' -u ' . $this->db->username . ' -p' . $this->db->password . ' ' . $this->db->database . ' rules < c:\\xampp\\open-audit\\other\\assets\\rules.sql';
}
exec($command);

UPDATE `roles` SET `permissions` = '{\"applications\":\"crud\",\"attributes\":\"crud\",\"baselines\":\"crud\",\"buildings\":\"crud\",\"charts\":\"crud\",\"clouds\":\"crud\",\"connections\":\"crud\",\"credentials\":\"crud\",\"dashboards\":\"crud\",\"errors\":\"r\",\"floors\":\"crud\",\"queue\":\"cr\",\"summaries\":\"crud\",\"devices\":\"crud\",\"discoveries\":\"crud\",\"discovery_scan_options\":\"crud\",\"fields\":\"crud\",\"files\":\"crud\",\"graph\":\"crud\",\"groups\":\"crud\",\"integrations\":\"crud\",\"invoice\":\"crud\",\"licenses\":\"crud\",\"locations\":\"crud\",\"networks\":\"crud\",\"orgs\":\"crud\",\"queue\":\"cr\",\"queries\":\"crud\",\"racks\":\"crud\",\"rack_devices\":\"crud\",\"reports\":\"r\",\"rooms\":\"crud\",\"rows\":\"crud\",\"rules\":\"crud\",\"scripts\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"tasks\":\"crud\",\"users\":\"crud\",\"widgets\":\"crud\"}' WHERE `name` = 'org_admin';

UPDATE `configuration` SET `value` = '20190810' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '3.2.0' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 3.2.0 commenced');

$this->alter_table('collectors', 'os', "ADD `os` varchar(100) NOT NULL DEFAULT '' AFTER `network_address`", 'add');

$this->alter_table('discovery_scan_options', 'ssh_ports', "`ssh_ports` TEXT NOT NULL AFTER exclude_ip");

$this->alter_table('networks', 'type', "`type` enum('Campus Area Network','Cloud Network','Enterprise Private Network','Home Area Network','Local Area Network','Metropolitan Area Network','Passive Optical Local Area Network','Personal Area Network','Storage-Area Network','System-Area Network','Virtual Private Network','Wide Area Network','Wireless Local Area Network') NOT NULL DEFAULT 'Local Area Network'");


$this->alter_table('network', 'gateways', "ADD `gateways` TEXT NOT NULL AFTER `cloud_id`", 'add');

$this->alter_table('system', 'dns_fqdn', "ADD `dns_fqdn` TEXT NOT NULL AFTER fqdn", 'add');

$this->alter_table('system', 'cluster_id', "ADD `cluster_id` int(10) unsigned DEFAULT NULL AFTER cluster_type", 'add');

$this->alter_table('system', 'manufacturer_code', "ADD `manufacturer_code` varchar(200) NOT NULL DEFAULT '' AFTER manufacturer", 'add');

$this->alter_table('system', 'snmp_enterprise_id', "ADD `snmp_enterprise_id` int(10) unsigned NOT NULL DEFAULT '0' AFTER snmp_version", 'add');

$this->alter_table('system', 'snmp_enterprise_name', "ADD `snmp_enterprise_name` varchar(255) NOT NULL DEFAULT '' AFTER snmp_enterprise_id", 'add');

$sql = "UPDATE `configuration` SET value = 5 WHERE `name` = 'collector_check_minutes'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM configuration WHERE name = 'match_dns_fqdn'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'match_dns_fqdn','n','bool','y','system','2000-01-01 00:00:00','Should we match a device based on its DNS fqdn.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->drop_table("clusters");

$sql = "CREATE TABLE `clusters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `type` enum('high availability','load balancing','perforance','storage','other','') NOT NULL DEFAULT '',
  `purpose` enum('application','database','file','virtualisation','web','other','') NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

if ($this->db->table_exists('cluster')) {
    $sql = "SELECT COUNT(*) AS `count` FROM `cluster`";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
    $result = $query->result();
    if (!empty($result[0]->count)) {
        $sql = "INSERT INTO `clusters` SELECT (NULL, name, org_id, description, type, purpose, 'active', edited_by, edited_date FROM `cluster`)";
        $this->db->query($sql);
        $this->log_db($this->db->last_query());
    } else {
        $this->drop_table("cluster");
    }
}

$sql = "DROP TABLE IF EXISTS rules";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT '100',
  `inputs` text NOT NULL,
  `outputs` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

if (php_uname('s') != 'Windows NT') {
	$command = 'mysql -h ' . $this->db->hostname . ' -u ' . $this->db->username . ' -p' . $this->db->password . ' ' . $this->db->database . ' rules < /usr/local/open-audit/other/assets/rules.sql';
} else {
	$command = 'c:\\xampp\\mysql\\bin\\mysql.exe -h ' . $this->db->hostname . ' -u ' . $this->db->username . ' -p' . $this->db->password . ' ' . $this->db->database . ' rules < c:\\xampp\\open-audit\\other\\assets\\rules.sql';
}
$this->log_db($command);
exec($command);

$this->m_roles->update_permissions('org_admin', 'rules', 'crud');

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20190810' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '3.2.0' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 3.2.0 completed");
$this->config->config['internal_version'] = '20190810';
$this->config->config['display_version'] = '3.2.0';
