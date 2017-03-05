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
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}


# attributes
$this->drop_table('attributes');
$sql = "CREATE TABLE `attributes` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `resource` varchar(200) NOT NULL DEFAULT '',
    `type` varchar(200) NOT NULL DEFAULT '',
    `name` varchar(200) NOT NULL DEFAULT '',
    `value` varchar(200) NOT NULL DEFAULT '',
    `edited_by` varchar(200) NOT NULL DEFAULT '',
    `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = array();
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_class','','','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_class','Desktop','desktop','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_class','Hypervisor','hypervisor','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_class','Laptop','laptop','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_class','Server','server','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_class','Tablet','tablet','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_class','Virtual Desktop','virtual desktop','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_class','Virtual Server','virtual server','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_class','Workstation','workstation','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_environment','Development','dev','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_environment','Disaster Recovery','dr','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_environment','Evaluation','eval','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_environment','Pre-Production','pre-prod','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_environment','Production','production','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_environment','Testing','test','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_environment','Training','train','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_environment','User Acceptance Testing','uat','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_status','Deleted','deleted','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_status','Lost','lost','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_status','Maintenance','maintenance','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_status','Production','production','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_status','Retired','retired','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_status','Unallocated','unallocated','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Access Control','access control','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Access Point','access point','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Access Server','access server','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Access Token','access token','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','ADSL Modem','adsl modem','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Alarm','alarm','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Bar Code Reader','bar code reader','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','BDSL Modem','bdsl modem','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Bridge','bridge','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Broadband Router','broadband router','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Building Management','building management','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Cable Modem','cable modem','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Cell Phone','cell phone','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Cisco Module','cisco module','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Computer','computer','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Chassis','chassis','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','DSL Modem','dsl modem','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','DSLAM','dslam','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Environment Monitor','environment monitor','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Firewall','firewall','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Game Console','game console','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Gateway','gateway','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','General Purpose','general purpose','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Hub','hub','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','IP Phone','ip phone','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','KVM','Keyboard, Video, Mouse switch','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Load Balancer','load balancer','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Media Device','media device','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Mobile Modem','mobile modem','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','NAS (Network Attached Storage)','nas','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Network Device','network device','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Network IDS (Intrusion Detection)','network ids','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Network Printer','network printer','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Network Scanner','network scanner','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','PBX','pbx','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','PDA','pda','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Power Distribution Unit','pdu','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Phone','phone','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Point of Sale','point of sale','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Power Device','power device','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Printer','printer','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Print Server','print server','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Projector','projector','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Proxy','proxy','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Proxy Server','proxy server','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Remote Access Controller (ILO / RSA)','remote access controller','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Remote Management','remote management','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Router','router','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','SAN (Storage Area Network)','san','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Satellite Phone','satellite phone','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Satellite Receiver','satellite receiver','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Scanner','scanner','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Security Camera','security camera','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Security Misc','security misc','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Serial to Ethernet Adapter','serial to ethernet','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Smart Phone','smart phone','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Specialized','specialized','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Storage Misc','storage misc','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Switch','switch','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Tablet','tablet','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Tape Library','tape library','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Telecom Misc','telecom misc','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Terminal','terminal','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Terminal Server','terminal server','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Time Clock','time clock','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Unknown','unknown','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','UPS (Uninterruptible Power Supply)','ups','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Video Conference','video conference','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','VoIP Adapter','voip adapter','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','VoIP Gateway','voip gateway','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','VoIP Phone','voip phone','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','VPN Terminator','vpn terminator','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','WAN Accelerator','wan accelerator','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','WAP (Wireless Access Point)','wap','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','WDM (Wavelength Division Multiplexer)','wdm','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Web Cache','web cache','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Web Camera','webcam','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Wireless Link','wireless link','system',' 2001-01-01 00:00:00')";
$sql[] = "INSERT INTO `attributes` VALUES (NULL,'devices','device_type','Wireless Router','wireless router','system',' 2001-01-01 00:00:00')";

# configuration
$sql[] = "DELETE FROM `configuration` WHERE name = 'distinct_groups'";
$sql[] = "DELETE FROM `configuration` WHERE name = 'discovery_update_groups'";
$sql[] = "INSERT INTO `configuration` VALUES (NULL, 'graph_days','30','y','system','2001-01-01 00:00:00','The number of days to report on for the Enterprise graphs.')";

foreach ($sql as $query) {
      $this->db->query($query);
      $this->log_db($this->db->last_query());
}
unset($sql);

# fields
$sql = "UPDATE `fields` SET `type` = 'varchar' WHERE `type` != 'list'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('fields', 'type', "`type` enum('varchar','list') NOT NULL DEFAULT 'varchar'");

$sql = "UPDATE `fields` SET `placement` = 'custom' WHERE `placement` != 'system'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('fields', 'placement', "`placement` enum('custom','system') NOT NULL DEFAULT 'system'");
$this->alter_table('fields', 'values', "`values` text NOT NULL");

# files
$this->alter_table('files', 'path', "`path` text NOT NULL");

# locations
$this->alter_table('locations', 'icon', "DROP `icon`", 'drop');
$this->alter_table('locations', 'comments', "DROP `comments`", 'drop');
$this->alter_table('locations', 'group_id', "DROP `group_id`", 'drop');

# partition
$this->alter_table('partition', 'name', "`name` text NOT NULL");

# queries
$sql = array();
$sql[] = "DELETE FROM queries WHERE `name` LIKE 'Changes - %'";

$sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Changes - Files\", \"Any changes in the table 'file'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2000-01-01 00:00:00' AND change_log.db_table = 'files'\", \"\", \"y\", \"system\", '2001-01-01 00:00:00')";

$sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Changes - Hardware\", \"Any changes created in the tables 'bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'optical', 'partition', 'processor', 'network', 'scsi', 'sound' and 'video'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2000-01-01 00:00:00' AND change_log.db_table in ('bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'optical', 'partition', 'processor', 'network', 'scsi', 'sound', 'video')\", \"\", \"y\", \"system\", '2001-01-01 00:00:00')";

$sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Changes - New Devices\", \"Any changes in the table 'system'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2000-01-01 00:00:00' AND change_log.db_table = 'system'\", \"\", \"y\", \"system\", '2001-01-01 00:00:00')";

$sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Changes - Settings\", \"Any changes in the tables 'dns', 'ip', 'log', netstat', 'pagefile', 'print_queue', 'route', 'task', 'user', 'user_group' and 'variable'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2000-01-01 00:00:00' AND change_log.db_table in ('dns', 'ip', 'log', 'netstat', 'pagefile', 'print_queue', 'route', 'task', 'user', 'user_group', 'variable')\", \"\", \"y\", \"system\", '2001-01-01 00:00:00')";

$sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Changes - Software\", \"Any changes in the tables 'service', 'server', 'server_item', 'software' and 'software_key'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2000-01-01 00:00:00' AND change_log.db_table in ('service', 'server', 'server_item', 'software', 'software_key')\", \"\", \"y\", \"system\", '2001-01-01 00:00:00')";

$sql[] = "DELETE FROM `queries` WHERE `name` = 'Servers - AD Controllers'";

$sql[] = "INSERT INTO `queries` VALUES (NULL, 1, 'Servers - AD Controllers', 'Active Directory Domain Controllers', \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.description AS `system.description`, system.os_family AS `system.os_family`, system.status AS `system.status` FROM system LEFT JOIN windows ON (system.id = windows.system_id AND windows.current = 'y') WHERE @filter AND windows.domain_role LIKE '%Domain Controller' AND system.status = 'production'\", '', 'y', 'system', '2001-01-01 00:00:00')";

foreach ($sql as $query) {
      $this->db->query($query);
      $this->log_db($this->db->last_query());
}
unset($sql);

# scripts
$sql = "DELETE FROM `scripts` WHERE `based_on` = 'audit_esx.sh'";
$query = $this->db->query($sql);
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

$sql = "INSERT INTO `scripts` VALUES (NULL, 'audit_esxi.sh', 1, '" . $options . "', 'The default audit ESXi config.', 'audit_esxi.sh', '', 'system',' 2001-01-01 00:00:00')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `scripts` VALUES (NULL,'audit_solaris.sh', 1, '" . $options . "', 'The default audit Solaris config.', 'audit_solaris.sh', '', 'system',' 2001-01-01 00:00:00')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

unset($options);

# users
$this->alter_table('oa_user', 'lang', "`lang` enum('de','en','es','fr','pt-br') NOT NULL DEFAULT 'en'");

$sql = "UPDATE configuration SET value = '20170104' WHERE name = 'internal_version'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE configuration SET value = '1.14.4' WHERE name = 'display_version'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());


#$this->db->db_debug = $temp_debug;
$this->log_db("Upgrade database to 1.14.4 completed");
$this->config->config['internal_version'] = '20170104';
$this->config->config['display_version'] = '1.14.4';
