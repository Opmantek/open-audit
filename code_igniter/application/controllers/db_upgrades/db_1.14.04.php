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

$this->log_db('Upgrade database to 1.14.4 commenced');

// $temp_debug = $this->db->db_debug;
// $this->db->db_debug = false;

# logs
$sql = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '" . $this->db->database . "' AND `TABLE_NAME` = 'logs'";
$query = $this->db->query($sql);
$result = $query->result();
if (count($result) === 0) {
    $sql = "CREATE TABLE `logs` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
      `type` varchar(200) NOT NULL DEFAULT '',
      `severity` int(10) unsigned NOT NULL DEFAULT '0',
      `severity_text` varchar(20) NOT NULL DEFAULT '',
      `pid` int(10) unsigned NOT NULL DEFAULT '0',
      `user` varchar(200) NOT NULL DEFAULT '',
      `server` varchar(200) NOT NULL DEFAULT '',
      `ip` varchar(200) NOT NULL DEFAULT '',
      `collection` varchar(200) NOT NULL DEFAULT '',
      `action` varchar(200) NOT NULL DEFAULT '',
      `function` varchar(200) NOT NULL DEFAULT '',
      `status` varchar(200) NOT NULL DEFAULT '',
      `summary` text NOT NULL,
      `detail` text NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
}


# attributes
$this->drop_table('attributes');
$sql = "CREATE TABLE `attributes` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `org_id` int(10) unsigned NOT NULL DEFAULT '1',
    `resource` varchar(200) NOT NULL DEFAULT '',
    `type` varchar(200) NOT NULL DEFAULT '',
    `name` varchar(200) NOT NULL DEFAULT '',
    `value` varchar(200) NOT NULL DEFAULT '',
    `edited_by` varchar(200) NOT NULL DEFAULT '',
    `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = array();
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_class','','','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_class','Desktop','desktop','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_class','Hypervisor','hypervisor','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_class','Laptop','laptop','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_class','Server','server','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_class','Tablet','tablet','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_class','Virtual Desktop','virtual desktop','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_class','Virtual Server','virtual server','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_class','Workstation','workstation','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_environment','Development','dev','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_environment','Disaster Recovery','dr','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_environment','Evaluation','eval','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_environment','Pre-Production','pre-prod','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_environment','Production','production','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_environment','Testing','test','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_environment','Training','train','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_environment','User Acceptance Testing','uat','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_status','Deleted','deleted','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_status','Lost','lost','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_status','Maintenance','maintenance','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_status','Production','production','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_status','Retired','retired','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_status','Unallocated','unallocated','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Access Control','access control','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Access Point','access point','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Access Server','access server','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Access Token','access token','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','ADSL Modem','adsl modem','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Alarm','alarm','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Bar Code Reader','bar code reader','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','BDSL Modem','bdsl modem','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Bridge','bridge','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Broadband Router','broadband router','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Building Management','building management','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Cable Modem','cable modem','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Cell Phone','cell phone','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Cisco Module','cisco module','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Computer','computer','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Chassis','chassis','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','DSL Modem','dsl modem','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','DSLAM','dslam','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Environment Monitor','environment monitor','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Firewall','firewall','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Game Console','game console','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Gateway','gateway','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','General Purpose','general purpose','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Hub','hub','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','IP Phone','ip phone','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','KVM','Keyboard, Video, Mouse switch','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Load Balancer','load balancer','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Media Device','media device','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Mobile Modem','mobile modem','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','NAS (Network Attached Storage)','nas','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Network Device','network device','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Network IDS (Intrusion Detection)','network ids','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Network Printer','network printer','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Network Scanner','network scanner','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','PBX','pbx','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','PDA','pda','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Power Distribution Unit','pdu','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Phone','phone','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Point of Sale','point of sale','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Power Device','power device','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Printer','printer','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Print Server','print server','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Projector','projector','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Proxy','proxy','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Proxy Server','proxy server','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Remote Access Controller (ILO / RSA)','remote access controller','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Remote Management','remote management','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Router','router','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','SAN (Storage Area Network)','san','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Satellite Phone','satellite phone','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Satellite Receiver','satellite receiver','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Scanner','scanner','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Security Camera','security camera','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Security Misc','security misc','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Serial to Ethernet Adapter','serial to ethernet','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Smart Phone','smart phone','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Specialized','specialized','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Storage Misc','storage misc','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Switch','switch','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Tablet','tablet','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Tape Library','tape library','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Telecom Misc','telecom misc','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Terminal','terminal','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Terminal Server','terminal server','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Time Clock','time clock','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Unknown','unknown','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','UPS (Uninterruptible Power Supply)','ups','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Video Conference','video conference','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','VoIP Adapter','voip adapter','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','VoIP Gateway','voip gateway','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','VoIP Phone','voip phone','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','VPN Terminator','vpn terminator','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','WAN Accelerator','wan accelerator','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','WAP (Wireless Access Point)','wap','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','WDM (Wavelength Division Multiplexer)','wdm','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Web Cache','web cache','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Web Camera','webcam','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Wireless Link','wireless link','system',' 2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,1,'devices','device_type','Wireless Router','wireless router','system',' 2000-01-01 00:00:00')";

# bios
$this->alter_table('bios', 'description', "`description` text NOT NULL");

# configuration
$this->alter_table('configurarion', 'description', "`description` text NOT NULL");
$this->alter_table('configurarion', 'value', "`value` longtext NOT NULL");
$this->alter_table('configurarion', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");
$sql[] = "DELETE FROM `configuration` WHERE name = 'distinct_groups'";
$sql[] = "DELETE FROM `configuration` WHERE name = 'discovery_update_groups'";
$sql[] = "INSERT INTO `configuration` VALUES (NULL, 'graph_days','30','y','system','2000-01-01 00:00:00','The number of days to report on for the Enterprise graphs.')";
$sql[] = "INSERT INTO `configuration` VALUES (NULL,'uuid',UUID(),'n','system',NOW(),'The unique identfier of this Open-AudIT server.')";

foreach ($sql as $query) {
      $this->db->query($query);
      $this->log_db($this->db->last_query());
}
unset($sql);

# connections
$this->alter_table('connections', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# discoveries
$this->alter_table('discoveries', 'description', "`description` text NOT NULL");
$this->alter_table('discoveries', 'created_by', "`edited_by` varchar(200) NOT NULL DEFAULT ''");
$this->alter_table('discoveries', 'created_on', "`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('discoveries', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# dns
$this->alter_table('dns', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# fields
$sql = "UPDATE `fields` SET `type` = 'varchar' WHERE `type` != 'list'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('fields', 'type', "`type` enum('varchar','list') NOT NULL DEFAULT 'varchar'");
$this->alter_table('fields', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

$sql = "UPDATE `fields` SET `placement` = 'custom' WHERE `placement` != 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('fields', 'placement', "`placement` enum('custom','system') NOT NULL DEFAULT 'system'");
$this->alter_table('fields', 'values', "`values` text NOT NULL");

# file
$this->alter_table('file', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# files
$this->alter_table('files', 'description', "`description` text NOT NULL");
$this->alter_table('files', 'name', "ADD `name` varchar(200) NOT NULL DEFAULT '' AFTER `id`", 'add');
$this->alter_table('files', 'path', "`path` text NOT NULL");

# groups
$this->alter_table('groups', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# licenses
$this->drop_table('licenses');
$sql = "CREATE TABLE `licenses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `org_descendants` enum('y','n') NOT NULL DEFAULT 'y',
  `purchase_count` int(10) unsigned NOT NULL DEFAULT '0',
  `used_count` int(10) unsigned NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `match_string` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO licenses (SELECT NULL AS `id`, `select_name` AS `name`, 1 AS `org_id`, 'y' AS `org_decendants`, `group_amount` AS `count`,  0 AS `used_count`, '' AS `description`, `select_name` AS `match_string`, 'system' AS `edited_by`, NOW() AS `edited_on` FROM oa_asset_select)";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# locations
$this->alter_table('locations', 'icon', "DROP `icon`", 'drop');
$this->alter_table('locations', 'comments', "DROP `comments`", 'drop');
$this->alter_table('locations', 'group_id', "DROP `group_id`", 'drop');
$this->alter_table('locations', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# log
$this->alter_table('log', 'file_name', "`file_name` text NOT NULL");
$this->alter_table('log', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

$this->drop_table('maps');
$sql = "CREATE TABLE `maps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# module
$this->alter_table('module', 'description', "`description` text NOT NULL");

# monitor
$this->alter_table('monitor', 'description', "`description` text NOT NULL");

# network
$this->alter_table('network', 'description', "`description` text NOT NULL");

# networks
$this->alter_table('networks', 'network', "ADD `network` varchar(200) NOT NULL DEFAULT '' AFTER `name`", 'add');
$sql = "UPDATE `networks` SET `network` = `name`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# oa_change
$sql = "DELETE FROM oa_change WHERE id = 1";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `oa_change` VALUES (1,'Default Change.','','2000-01-01 00:00:00','2000-01-01 00:00:00','','','','','','','',1,'2000-01-01 00:00:00');";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# oa_config - not required anymore
$this->drop_table('oa_config');

# oa_group - not required anymore. Dump to a file for backup purposes
if (php_uname('s') == 'Windows NT') {
    $mysqldump = 'c:\\xampplite\\mysql\\bim\\mysqldump.exe';
}
if (php_uname('s') == 'Darwin') {
    $mysqldump = '/usr/local/mysql/bin/mysqldump';
}
if (php_uname('s') == 'Linux') {
    exec('which mysqldump', $temp);
    $mysqldump = $temp[0];
    unset($temp);
}
$table = 'oa_group';
if ($this->db->table_exists($table)) {
    $command = $mysqldump . ' --extended-insert=FALSE -u ' . $this->db->username . ' -p' . $this->db->password . ' ' . $this->db->database . ' ' . $table;
    $this->log_db($command);
    exec($command, $backup);
    $backup = implode("\n", $backup);
    $source_name = $table . '_backup.sql';
    #@unlink($this->config->config['base_path'] . '/other/' . $source_name);
    $proceed = true;
    try {
        $fp = fopen($this->config->config['base_path'] . '/other/' . $source_name, 'w');
    } catch (Exception $e) {
        $this->log_db('ERROR - Could not backup your ' . $table . ' table.');
        $this->log_db($e->getMessage());
        $proceed = false;
    }
    if ($proceed === true) {
        try {
            fwrite($fp, $backup);
        } catch (Exception $e) {
            $this->log_db('ERROR - Could not write your ' . $table . ' data to the file ' . $this->config->config['base_path'] . '/other/' . $source_name);
            $proceed = false;
            $this->log_db($e->getMessage());
        }
        @fclose($fp);
    }
    if ($proceed === true) {
        $this->drop_table($table);
    }
}

# orgs
$this->alter_table('oa_org', 'comments', "`description` text NOT NULL");
$sql = "UPDATE `oa_org` SET `edited_date` = '2000-01-01 00:00:00' WHERE `id` = 1";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$this->rename_table('oa_org', 'orgs');
$this->alter_table('orgs', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# oa_reports
$table = 'oa_report';
if ($this->db->table_exists($table)) {
    $sql = "DELETE FROM `oa_report` WHERE `report_name` LIKE 'Enterprise - %'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());

    $command = $mysqldump . ' --extended-insert=FALSE -u ' . $this->db->username . ' -p' . $this->db->password . ' ' . $this->db->database . ' ' . $table;
    $this->log_db($command);
    exec($command, $backup);
    $backup = implode("\n", $backup);
    $source_name = $table . '_backup.sql';
    @unlink($this->config->config['base_path'] . '/other/' . $source_name);
    $proceed = true;
    try {
        $fp = @fopen($this->config->config['base_path'] . '/other/' . $source_name, 'w');
    } catch (Exception $e) {
        $this->log_db('ERROR - Could not backup your ' . $table . ' table.');
        $proceed = false;
        $this->log_db($e->getMessage());
    }
    if ($proceed === true) {
        try {
            @fwrite($fp, $backup);
        } catch (Exception $e) {
            $this->log_db('ERROR - Could not write your ' . $table . ' data to the file ' . $this->config->config['base_path'] . '/other/' . $source_name);
            $proceed = false;
            $this->log_db($e->getMessage());
        }
        @fclose($fp);
    }
    if ($proceed === true) {
        $this->drop_table($table);
    }
}

# oa_user
$this->alter_table('oa_user', 'lang', "`lang` enum('de','en','es','fr','pt-br') NOT NULL DEFAULT 'en'");

# optical
$this->alter_table('optical', 'description', "`description` text NOT NULL");

# pagefile
$this->alter_table('pagefile', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# partition
$this->alter_table('partition', 'name', "`name` text NOT NULL");
$this->alter_table('partition', 'description', "`description` text NOT NULL");

# print_queue
$this->alter_table('print_queue', 'description', "`description` text NOT NULL");
$this->alter_table('print_queue', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

#processor
$this->alter_table('processor', 'description', "`description` text NOT NULL");

# queries
$this->alter_table('queries', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");
$sql = array();
$sql[] = "DELETE FROM `queries`";
$this->alter_table('queries', 'type', "ADD `type` enum('Change','Device','Hardware','Network','Other',Server','Software','User','') NOT NULL DEFAULT '' AFTER `name`", 'add');

$sql[] = "INSERT INTO `queries` VALUES (1,1,'Audit Dates','Device','The first and last times a device was audited.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_name AS `system.os_name`, system.first_seen AS `system.first_seen`, system.last_seen AS `system.last_seen`, GROUP_CONCAT(DISTINCT(audit_log.type) ORDER BY audit_log.type) AS `seen_by` FROM system LEFT JOIN audit_log ON (audit_log.system_id = system.id) WHERE @filter GROUP BY system.id','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (2,1,'Billing Report','Device','Name, last seen on and by, type, class, manufacturer, model, serial, user, location.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, orgs.name AS `orgs.name`, system.last_seen AS `system.last_seen`, system.last_seen_by AS `system.last_seen_by`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.class AS `system.class`, windows.user_name AS `windows.user_name`, locations.name AS `locations.name` FROM system LEFT JOIN locations ON (system.location_id = locations.id) LEFT JOIN windows ON (system.id = windows.system_id AND windows.current = \'y\') LEFT JOIN orgs ON (system.org_id = orgs.id) WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (8,1,'Consumed IP Addresses','Network','The ip addresses used by a group.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_family AS `system.os_family`, system.description AS `system.description`, ip.ip as `ip.ip` FROM ip LEFT JOIN system ON (system.id = ip.system_id AND ip.current = \'y\') WHERE @filter AND ip.ip IS NOT NULL AND ip.ip != \'127.000.000.001\' AND ip.ip != \'\' AND ip.ip != \'0.0.0.0\' AND ip.ip != \'000.000.000.000\' AND ip.version = \'4\' GROUP BY ip.id, ip.ip ORDER BY ip.ip','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (9,1,'Devices Without Credentials','Device','Device details - name, ip, last seen on and by for those devices only discovered by Nmap and have therefore not been audited.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, audit_log.timestamp AS `audit_log.timestamp`, audit_log.ip AS `audit_log.ip` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.id) WHERE @filter AND audit_log.system_id NOT IN (SELECT DISTINCT(audit_log.system_id) FROM audit_log WHERE type != \'nmap\') GROUP BY system.id','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (10,1,'Disk Partition Use','Device','Partition details where partition free and used space aren\'t 0 and type isn\'t Volume or Network Drive and mount point isn\'t [SWAP].','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, partition.id AS `partition.id`, partition.hard_drive_index AS `partition.hard_drive_index`, partition.mount_point AS `partition.mount_point`, partition.mount_type as `partition.mount_type`, partition.size AS `partition.size`, partition.used AS `partition.used`, partition.free AS `partition.free`, ROUND(((partition.free / partition.size) * 100), 0) AS percent_free, partition.name AS `partition.name` FROM system INNER JOIN `partition` ON (partition.system_id = system.id AND partition.current = \'y\') WHERE @filter AND partition.used > 0 AND partition.free > 0 AND LOWER(partition.type) != \'volume\' AND LOWER(partition.type) != \'network drive\' AND LOWER(partition.mount_point) != \'[swap]\' ORDER BY system.name, partition.id','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (11,1,'Export Details','Device','Icon, type, name, first seen on, last seen on, last seen by, manufacturer, model, serial, owner, organisation, location, operating system.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.fqdn AS `system.fqdn`, system.serial AS `system.serial`, system.class AS `system.class`, system.function AS `system.function`, system.owner AS `system.owner`, system.asset_number AS `system.asset_number` FROM system WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (12,1,'Failed Audits','Device','Name, ip address, audit time, audit stage.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, audit_log.timestamp AS `audit_log.timestamp`, audit_log.debug AS `audit_log.debug` FROM system LEFT JOIN audit_log ON (system.id = audit_log.system_id) WHERE @filter AND audit_log.debug > \'\'','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (13,1,'Device','Hardware','Icon, name, ip address, manufacturer, model, serial.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.asset_number AS `system.asset_number` FROM system WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (14,1,'Memory and Processors','Hardware','Device details - name, ip, memory, total processor cores, processor speed, processor description.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, CAST(system.memory_count/1024 AS UNSIGNED) AS `system.memory_count`, processor.physical_count AS `processor.physical_count`, processor.core_count AS `processor.core_count`, processor.logical_count AS `processor.logical_count`, processor.speed AS `processor.speed`, processor.description AS `processor.description` FROM system INNER JOIN processor ON (system.id = processor.system_id AND processor.current = \'y\') WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (15,1,'Workstations','Hardware','Device details - name, ip, manufacturer, model, serial, form factor, memory, processor.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.memory_count AS `system.memory_count`, system.form_factor AS `system.form_factor`, processor.description AS `processor.description` FROM system LEFT JOIN processor ON (processor.system_id = system.id AND processor.current = \'y\') WHERE @filter AND system.type = \'computer\' AND system.class != \'server\' AND system.class != \'hypervisor\' ORDER BY system.name','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (16,1,'Acrobat','Software','Adobe Acrobat installations (software name contains \'acrobat\' or \'adobe reader\').','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = \'y\' AND (software.name LIKE \'%acrobat%\' OR software.name LIKE \'adobe reader%\')) LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (17,1,'Antivirus','Software','Installed AntiVirus software (software name contains \'virus\' or \'trend micro\' or \'endpoint\').','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version` FROM system LEFT JOIN software ON (software.system_id = system.id AND software.current = \'y\' AND (software.name LIKE \'%virus%\' or software.name LIKE \'%trend micro%\' or software.name LIKE \'%endpoint%\')) LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter AND system.type = \'computer\'','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (18,1,'Flash','Software','Flash Player installations.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = \'y\' AND software.name LIKE \'%Flash Player%\') LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (19,1,'MS FrontPage','Software','MS Frontpage installations (software name contains \'Microsoft Office Frontpage\' or \'with Frontpage\').','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = \'y\' AND (software.name LIKE \'Microsoft Office Frontpage%\' OR software.name LIKE \'%with FrontPage\')) LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (20,1,'MS Office','Software','MS Office installations.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = \'y\' AND software.name LIKE \'Microsoft Office%\') LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (21,1,'MS Project','Software','MS Project installations (software name contains \'Microsoft Project\').','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = \'y\' AND software.name LIKE \'%Microsoft%Project%\') LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (22,1,'MS Visio','Software','MS Visio installations (software name contains \'Microsoft Visio\').','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = \'y\' AND software.name LIKE \'Microsoft%Visio%\') LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (23,1,'Interfaces Used or Available','Network','Query to determine if a device interface is available for use.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, network.alias as `network.alias`, network.net_index AS `network.net_index`, network.description as `network.description`, network.ifadminstatus as `network.ifadminstatus`, network.ip_enabled as `network.ip_enabled`, system.sysuptime AS `system.sysuptime`, (system.sysuptime - network.iflastchange) AS diff, floor((system.sysuptime - network.iflastchange) /60/60/24/100) as diff_days, IF((network.ifadminstatus = \'down\') OR (network.ifadminstatus = \'up\' AND (network.ip_enabled != \'up\' AND network.ip_enabled != \'dormant\') AND (((system.sysuptime - network.iflastchange) > 60480000) OR (system.sysuptime < network.iflastchange))), \'available\', \'used\') AS available FROM network LEFT JOIN system ON (network.system_id = system.id AND network.current = \'y\') WHERE @filter AND network.ifadminstatus != \'\'','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (24,1,'Log Files','Device','Log file details.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, log.name as `log.name`, log.file_name AS `log.file_name`, log.file_size AS `log.file_size`, log.max_file_size AS `log.max_file_size`, log.overwrite AS `log.overwrite` FROM log LEFT JOIN system ON (system.id = log.system_id and log.current = \'y\') WHERE @filter ORDER BY system.name','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (25,1,'Netstat Ports','Device','Detected Netstat ports.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_name AS `system.os_name`, netstat.protocol AS `netstat.protocol`, netstat.port AS `netstat.port`, netstat.ip AS `netstat.ip`, netstat.program AS `netstat.program` FROM system LEFT JOIN netstat ON (system.id = netstat.system_id AND netstat.current = \'y\') WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (26,1,'Printer Queues','Device','Printer details - manufacturer, model, status, capabilities, etc.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, print_queue.manufacturer AS `print_queue.manufacturer`, print_queue.model AS `print_queue.model`, print_queue.description AS `print_queue.description`, print_queue.driver AS `print_queue.driver`, print_queue.status AS `print_queue.status`, print_queue.port_name AS `print_queue.port_name`, print_queue.duplex AS `print_queue.duplex`, print_queue.color AS `print_queue.color`, print_queue.location AS `print_queue.location`, print_queue.type AS `print_queue.type`, print_queue.shared AS `print_queue.shared`, print_queue.shared_name AS `print_queue.shared_name`, print_queue.capabilities AS `print_queue.capabilities` FROM print_queue LEFT JOIN system ON (system.id = print_queue.system_id AND print_queue.current = \'y\') WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (27,1,'Database','Server','All databases.','SELECT system.id AS `system.id`, system.name AS `system.name`, system.fqdn AS `system.fqdn`, system.os_family AS `system.os_family`, system.environment AS `system.environment`, server_item.parent_name AS `server_item.parent_name`, server_item.name AS `server_item.name`, server_item.instance AS `server_item.instance`, server_item.path AS `server_item.path`, server_item.log_status AS `server_item.log_status`, server_item.log_format AS `server_item.log_format`, server_item.log_rotation AS `server_item.log_rotation`, server_item.log_path AS `server_item.log_path` FROM system LEFT JOIN server_item ON (server_item.system_id = system.id and server_item.current = \'y\') WHERE @filter AND server_item.type = \'database\'','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (28,1,'Websites','Server','All detected websites (IIS based).','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_family AS `system.os_family`, system.environment AS `system.environment`, server_item.parent_name AS `server_item.parent_name`, server_item.name AS `server_item.name`, server_item.description AS `server_item.description`, server_item.status AS `server_item.status`, server_item.instance AS `server_item.instance`, server_item.path AS `server_item.path`, server_item.log_status AS `server_item.log_status`, server_item.log_format AS `server_item.log_format`, server_item.log_rotation AS `server_item.log_rotation`, server_item.log_path AS `server_item.log_path` FROM system LEFT JOIN server_item ON (server_item.system_id = system.id and server_item.current = \'y\') WHERE @filter AND server_item.type = \'website\'','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (29,1,'Shares','Device','Shared directory details.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, share.id AS `share.id`, share.name AS `share.name`, share.description AS `share.description`, share.size AS `share.size`, share.path AS `share.path` FROM share LEFT JOIN system ON (system.id = share.system_id and share.current = \'y\') WHERE @filter','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (30,1,'Elevated','User','Name, group name, group members.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM user_group LEFT JOIN system ON (user_group.system_id = system.id AND user_group.current = \'y\') WHERE @filter AND (user_group.name = \'Administrators\' OR user_group.name = \'Power Users\' OR user_group.name = \'Remote Desktop Users\' OR user_group.name = \'wheel\' OR user_group.name = \'sudo\') AND user_group.members > \'\' GROUP BY system.id, user_group.name ORDER BY system.name','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (31,1,'Orphaned','User','User accounts that no longer appear to be valid.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM system LEFT JOIN user_group ON (user_group.system_id = system.id AND user_group.current = \'y\') WHERE @filter AND user_group.members LIKE \'%@,%\' AND user_group.members NOT LIKE \'Everyone@,\' GROUP BY user_group.id ORDER BY system.name','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (32,1,'Standard','User','Name, group name, group members.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.members AS `user_group.members`, user_group.name AS `user_group.name` FROM user_group LEFT JOIN system ON (user_group.system_id = system.id AND user_group.current = \'y\') WHERE @filter AND (user_group.name = \'Users\' OR user_group.name = \'Guests\') AND user_group.members > \'\'','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (34,1,'Files','Change','Any changes in the table \'file\'.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table = \'files\'','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (35,1,'Hardware','Change','Any changes created in the tables \'bios\', \'disk\', \'memory\', \'module\', \'monitor\', \'motherboard\', \'optical\', \'partition\', \'processor\', \'network\', \'scsi\', \'sound\' and \'video\'.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table in (\'bios\', \'disk\', \'memory\', \'module\', \'monitor\', \'motherboard\', \'optical\', \'partition\', \'processor\', \'network\', \'scsi\', \'sound\', \'video\')','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (36,1,'New Devices','Change','Any changes in the table \'system\'.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table = \'system\'','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (37,1,'Settings','Change','Any changes in the tables \'dns\', \'ip\', \'log\', netstat\', \'pagefile\', \'print_queue\', \'route\', \'task\', \'user\', \'user_group\' and \'variable\'.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table in (\'dns\', \'ip\', \'log\', \'netstat\', \'pagefile\', \'print_queue\', \'route\', \'task\', \'user\', \'user_group\', \'variable\')','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (38,1,'Software','Change','Any changes in the tables \'service\', \'server\', \'server_item\', \'software\' and \'software_key\'.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = \'2000-01-01 00:00:00\' AND change_log.db_table in (\'service\', \'server\', \'server_item\', \'software\', \'software_key\')','','y','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `queries` VALUES (39,1,'AD Controllers','Server','Active Directory Domain Controllers','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.description AS `system.description`, system.os_family AS `system.os_family`, system.status AS `system.status` FROM system LEFT JOIN windows ON (system.id = windows.system_id AND windows.current = \'y\') WHERE @filter AND windows.domain_role LIKE \'%Domain Controller\' AND system.status = \'production\'','','y','system','2000-01-01 00:00:00')";


foreach ($sql as $query) {
      $this->db->query($query);
      $this->log_db($this->db->last_query());
}
unset($sql);

# roles
$this->alter_table('roles', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");
$sql[] = "DELETE FROM `roles`";
$sql[] = "INSERT INTO `roles` VALUES (1,'admin','This role can change global options.','{\"attributes\":\"crud\",\"baselines\":\"crud\",\"configuration\":\"crud\",\"database\":\"crud\",\"errors\":\"r\",\"groups\":\"crud\",\"ldap_servers\":\"crud\",\"logs\":\"crud\",\"nmis\":\"crud\",\"queries\":\"crud\",\"reports\":\"r\",\"roles\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"summaries\":\"crud\",\"tasks\":\"crud\"}','open-audit_roles_admin','system','2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `roles` VALUES (2,'org_admin','This role is used for administration of endpoints that contain an org_id.','{\"attributes\":\"crud\",\"baselines\":\"crud\",\"charts\":\"crud\",\"connections\":\"crud\",\"credentials\":\"crud\",\"errors\":\"r\",\"summaries\":\"crud\",\"devices\":\"crud\",\"discoveries\":\"crud\",\"fields\":\"crud\",\"files\":\"crud\",\"graph\":\"crud\",\"groups\":\"crud\",\"invoice\":\"crud\",\"licenses\":\"crud\",\"locations\":\"crud\",\"networks\":\"crud\",\"orgs\":\"crud\",\"queries\":\"crud\",\"reports\":\"r\",\"scripts\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"tasks\":\"crud\",\"users\":\"crud\"}','open-audit_roles_org_admin','system','2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `roles` VALUES (3,'reporter','The role used for reading endpoints and creating reports above to the user role.','{\"baselines\":\"crud\",\"charts\":\"r\",\"connections\":\"r\",\"credentials\":\"r\",\"errors\":\"r\",\"summaries\":\"r\",\"devices\":\"r\",\"fields\":\"r\",\"files\":\"r\",\"graph\":\"r\",\"groups\":\"r\",\"invoice\":\"r\",\"licenses\":\"crud\",\"locations\":\"r\",\"networks\":\"r\",\"orgs\":\"r\",\"queries\":\"crud\",\"reports\":\"r\",\"search\":\"crud\",\"sessions\":\"crud\"}','open-audit_roles_reporter','system','2000-01-01 00:00:00')";
$sql[] = "INSERT INTO `roles` VALUES (4,'user','A standard role that can read all endpoints that contain an org_id.','{\"baselines\":\"r\",\"charts\":\"r\",\"connections\":\"r\",\"credentials\":\"r\",\"summaries\":\"r\",\"devices\":\"r\",\"errors\":\"r\",\"fields\":\"r\",\"files\":\"r\",\"graph\":\"r\",\"groups\":\"r\",\"invoice\":\"r\",\"licenses\":\"r\",\"locations\":\"r\",\"networks\":\"r\",\"orgs\":\"r\",\"queries\":\"r\",\"search\":\"crud\",\"sessions\":\"crud\"}','open-audit_roles_user','system','2000-01-01 00:00:00')";
foreach ($sql as $query) {
      $this->db->query($query);
      $this->log_db($this->db->last_query());
}
unset($sql);

# scripts
$this->alter_table('scripts', 'description', "`description` text NOT NULL");
$this->alter_table('scripts', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");
$sql = "DELETE FROM `scripts` WHERE `based_on` = 'audit_esx.sh'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$options = array();
$options['submit_online'] = 'y';
$options['create_file'] = 'n';
if ($this->config->item('default_network_address') != '') {
      $options['url'] = 'http://' . $this->config->item('default_network_address') . '/open-audit/index.php/system/add_system';
} else {
      $options['url'] = 'http://localhost/open-audit/index.php/system/add_system';
}
$options['debugging'] = 1;
$options = json_encode($options);

$sql = "INSERT INTO `scripts` VALUES (NULL, 'audit_esxi.sh', 1, '" . $options . "', 'The default audit ESXi config.', 'audit_esxi.sh', '', 'system',' 2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `scripts` VALUES (NULL,'audit_solaris.sh', 1, '" . $options . "', 'The default audit Solaris config.', 'audit_solaris.sh', '', 'system',' 2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());
unset($sql);
unset($options);

# server
$this->alter_table('server', 'description', "`description` text NOT NULL");
$this->alter_table('server', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# server_item
$this->alter_table('server_item', 'description', "`description` text NOT NULL");
$this->alter_table('server_item', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# service
$this->alter_table('service', 'description', "`description` text NOT NULL");
$this->alter_table('service', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# share
$this->alter_table('share', 'description', "`description` text NOT NULL");
$this->alter_table('share', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# software
$this->alter_table('software', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# software_key
$this->alter_table('software_key', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# summaries
$this->alter_table('summaries', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

$sql[] = "DELETE FROM `summaries`";

$this->alter_table('summaries', 'type', "ADD `type` enum('Change','Device','Hardware','Network','Other',Server','Software','User','') NOT NULL DEFAULT '' AFTER `org_id`", 'add');

$sql[] = "INSERT INTO `summaries` VALUES (1,'Device Classes',1,'Device','system','class','','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `summaries` VALUES (2,'Device Status',1,'Device','system','status','','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `summaries` VALUES (3,'Device Types',1,'Device','system','type','','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `summaries` VALUES (4,'DNS Domains',1,'Network','system','dns_domain','','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `summaries` VALUES (5,'Form Factors',1,'Device','system','form_factor','system.form_factor,system.class','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `summaries` VALUES (6,'Manufacturers',1,'Device','system','manufacturer','system.model','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `summaries` VALUES (7,'Operating Systems',1,'Device','system','os_family','','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `summaries` VALUES (8,'Server Types',1,'Server','server','type','server.name,server.full_name,server.version,server.status','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `summaries` VALUES (9,'Services',1,'Software','service','name','service.name,service.state','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `summaries` VALUES (10,'Software',1,'Software','software','name','software.name,software.version','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `summaries` VALUES (11,'Software Keys',1,'Software','software_key','name','software_key.name,software_key.string,software_key.rel,software_key.edition','system','2000-01-01 00:00:00')";

$sql[] = "INSERT INTO `summaries` VALUES (12,'Active Directory OU\'s',1,'Network','windows','active_directory_ou','windows.active_directory_ou,windows.client_site_name','system','2000-01-01 00:00:00')";

# system
$this->alter_table('system', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");
$this->alter_table('system', 'last_seen', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER first_seen");
$this->alter_table('system', 'status', "`status` varchar(100) NOT NULL DEFAULT ''");
$this->drop_key('system', 'system_id');

# task
$this->alter_table('task', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# user
$this->alter_table('user', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# users
$this->rename_table('oa_user', 'users');
$this->alter_table('users', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# user_group
$this->alter_table('user_group', 'description', "`description` text NOT NULL");
$this->alter_table('user_group', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# variable
$this->alter_table('variable', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# vm
$this->alter_table('vm', 'name', "`name` varchar(200) NOT NULL DEFAULT ''");

# Reindex our configuration table
$sql = "SELECT * FROM configuration ORDER BY `name`";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
$result = $query->result();

$sql = "DELETE FROM `configuration`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "ALTER TABLE `configuration` AUTO_INCREMENT = 1";
$this->db->query($sql);
$this->log_db($this->db->last_query());

foreach ($result as $item) {
    if ($item->edited_by === 'system') {
        $item->edited_date = '2000-01-01 00:00:00';
    }
    $sql = "INSERT INTO `configuration` VALUES (NULL, ?, ?, ?, ?, ?, ?)";
    $data = array((string)$item->name,
                (string)$item->value,
                (string)$item->editable,
                (string)$item->edited_by,
                (string)$item->edited_date,
                (string)$item->description);
    $query = $this->db->query($sql, $data);
    $this->log_db($this->db->last_query());
}

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20170104' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '1.14.4' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

#$this->db->db_debug = $temp_debug;
$this->log_db("Upgrade database to 1.14.4 completed");
$this->config->config['internal_version'] = '20170104';
$this->config->config['display_version'] = '1.14.4';
