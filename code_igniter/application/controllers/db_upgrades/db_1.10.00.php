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

$this->log_db('Upgrade database to 1.10 commenced');

# We know these tables aren't used - drop them
$tables = array('oa_change_log', 'oa_contact', 'oa_location_org', 'oa_asset_line', 'oa_asset_order', 'oa_device_col', 'oa_device', 'oa_graph', 'sys_sw_antivirus', 'oa_switch_ports', 'sys_sw_share_perms');
foreach ($tables as $table) {
    $this->drop_table($table);
}
unset($tables);


# bios
if ($this->db->table_exists('sys_hw_bios') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_bios')) {
    $sql = "DELETE `sys_hw_bios` FROM `sys_hw_bios` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_bios`.`system_id` WHERE `sys_hw_bios`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_bios', 'bios_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_bios', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_bios', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_bios', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER last_seen");
$this->alter_table('sys_hw_bios', 'bios_manufacturer', "manufacturer varchar(200) NOT NULL DEFAULT '' AFTER first_seen");
$this->alter_table('sys_hw_bios', 'bios_serial', "serial varchar(100) NOT NULL DEFAULT '' AFTER manufacturer");
$this->alter_table('sys_hw_bios', 'bios_description', "description varchar(200) NOT NULL DEFAULT '' AFTER serial");
$this->alter_table('sys_hw_bios', 'bios_smversion', "smversion varchar(100) NOT NULL DEFAULT '' AFTER description");
$this->alter_table('sys_hw_bios', 'bios_version', "version varchar(100) NOT NULL DEFAULT '' AFTER smversion");
$this->alter_table('sys_hw_bios', 'bios_asset_tag', "asset_tag varchar(100) NOT NULL DEFAULT '' AFTER version");
$this->rename_table('sys_hw_bios', 'bios');


# disk
if ($this->db->table_exists('sys_hw_hard_drive') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_hard_drive')) {
    $sql = "DELETE `sys_hw_hard_drive` FROM `sys_hw_hard_drive` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_hard_drive`.`system_id` WHERE `sys_hw_hard_drive`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_hard_drive', 'hard_drive_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_hard_drive', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_hw_hard_drive', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_hard_drive', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_hard_drive', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_manufacturer', "manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_model', "model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_serial', "serial varchar(100) NOT NULL DEFAULT '' AFTER model");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_device_id', "device varchar(200) NOT NULL DEFAULT '' AFTER serial");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_caption', "caption varchar(100) NOT NULL DEFAULT '' AFTER device");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_index', "hard_drive_index varchar(100) NOT NULL DEFAULT '' AFTER caption");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_interface_type', "interface_type varchar(100) NOT NULL DEFAULT '' AFTER hard_drive_index");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_partitions', "partition_count tinyint unsigned NOT NULL DEFAULT '0' AFTER interface_type");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_scsi_bus', "scsi_bus varchar(10) NOT NULL DEFAULT '' AFTER partition_count");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_scsi_logical_unit', "scsi_logical_unit varchar(100) NOT NULL DEFAULT '' AFTER scsi_bus");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_scsi_port', "scsi_port varchar(10) NOT NULL DEFAULT '' AFTER scsi_logical_unit");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_size', "size int unsigned NOT NULL DEFAULT '0' AFTER scsi_port");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_status', "status varchar(100) NOT NULL DEFAULT '' AFTER size");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_firmware', "firmware varchar(100) NOT NULL DEFAULT '' AFTER status");
$this->alter_table('sys_hw_hard_drive', 'hard_drive_model_family', "model_family varchar(200) NOT NULL DEFAULT '' AFTER firmware");
$this->rename_table('sys_hw_hard_drive', 'disk');


# dns
if ($this->db->table_exists('sys_sw_dns') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_dns')) {
    $sql = "DELETE `sys_sw_dns` FROM `sys_sw_dns` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_dns`.`system_id` WHERE `sys_sw_dns`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
    $sql = "DELETE `sys_sw_dns` FROM `sys_sw_dns` WHERE (`dns_name` = '' AND `dns_full_name` = '')";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_dns', 'dns_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_dns', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_dns', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_dns', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_dns', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_dns', 'dns_name', "name varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_sw_dns', 'dns_full_name', "fqdn varchar(200) NOT NULL DEFAULT '' AFTER name");
$this->alter_table('sys_sw_dns', 'dns_ip_address', "ip varchar(45) NOT NULL DEFAULT '' AFTER fqdn");
$this->rename_table('sys_sw_dns', 'dns');


# graphs
$this->drop_table("graph");
if ($this->db->field_exists('system_id', 'system')) {
    $system_id = 'system_id';
} else {
    $system_id = 'id';
}
$sql = "CREATE TABLE `graph` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`system_id` int(10) unsigned DEFAULT NULL,
`linked_table` varchar(100) NOT NULL DEFAULT '',
`linked_row` varchar(100) NOT NULL DEFAULT '',
`type` enum('disk', 'partition', 'directory', 'file', 'database', 'share', 'other') NOT NULL DEFAULT 'partition',
`used_percent` tinyint unsigned NOT NULL DEFAULT '0',
`free_percent` tinyint unsigned NOT NULL DEFAULT '0',
`used` int unsigned NOT NULL DEFAULT '0',
`free` int unsigned NOT NULL DEFAULT '0',
`size` int unsigned NOT NULL DEFAULT '0',
`timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
PRIMARY KEY (`id`), KEY `system_id` (`system_id`),
CONSTRAINT `sys_hw_graph_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`" . $system_id . "`) ON DELETE CASCADE)
ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

if ($this->db->table_exists('sys_hw_graphs_disk') and $this->db->table_exists('graph')) {
    $sql = "INSERT INTO `graph` SELECT NULL, system_id, 'partition', partition_id, 'partition', used_percent, free_percent, used, free, total as size, `timestamp` FROM `sys_hw_graphs_disk`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->drop_table("sys_hw_graphs_disk");


# log
if ($this->db->table_exists('sys_sw_log') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_log')) {
    $sql = "DELETE `sys_sw_log` FROM `sys_sw_log` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_log`.`system_id` WHERE `sys_sw_log`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_log', 'log_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_log', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_log', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_log', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_log', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_log', 'log_name', "name varchar(50) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_sw_log', 'log_file_name', "file_name varchar(250) NOT NULL DEFAULT '' AFTER name");
$this->alter_table('sys_sw_log', 'log_file_size', " file_size int unsigned NOT NULL DEFAULT '0' AFTER file_name");
$this->alter_table('sys_sw_log', 'log_max_file_size', "max_file_size int unsigned NOT NULL DEFAULT '0' AFTER file_size");
$this->alter_table('sys_sw_log', 'log_overwrite', "overwrite varchar(30) NOT NULL DEFAULT '' AFTER max_file_size");
$this->rename_table("sys_sw_log", "log");


# memory
if ($this->db->table_exists('sys_hw_memory') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_memory')) {
    $sql = "DELETE `sys_hw_memory` FROM `sys_hw_memory` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_memory`.`system_id` WHERE `sys_hw_memory`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_memory', 'memory_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_memory', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_memory', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_memory', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_memory', 'memory_serial', "serial varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_hw_memory', 'memory_bank', "bank varchar(100) NOT NULL DEFAULT '' AFTER serial");
$this->alter_table('sys_hw_memory', 'memory_type', "type varchar(100) NOT NULL DEFAULT '' AFTER bank");
$this->alter_table('sys_hw_memory', 'memory_form_factor', "form_factor varchar(100) NOT NULL DEFAULT '' AFTER type");
$this->alter_table('sys_hw_memory', 'memory_detail', "detail varchar(100) NOT NULL DEFAULT '' AFTER form_factor");
$this->alter_table('sys_hw_memory', 'memory_capacity', "size int unsigned NOT NULL DEFAULT '0' AFTER detail");
$this->alter_table('sys_hw_memory', 'memory_speed', "speed int unsigned NOT NULL DEFAULT '0' AFTER size");
$this->alter_table('sys_hw_memory', 'memory_tag', "tag varchar(100) NOT NULL DEFAULT '' AFTER speed");
$this->rename_table("sys_hw_memory", "memory");

# module
if ($this->db->table_exists('sys_hw_module') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_module')) {
    $sql = "DELETE `sys_hw_module` FROM `sys_hw_module` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_module`.`system_id` WHERE `sys_hw_module`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_module', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_hw_module', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_module', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_module', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_module', 'class_text', "class_text varchar(20) NOT NULL DEFAULT '' AFTER class");
$this->alter_table('sys_hw_module', 'hardware_revision', "hardware_revision varchar(100) NOT NULL DEFAULT '' AFTER class_text");
$this->alter_table('sys_hw_module', 'serial_number', "serial varchar(100) NOT NULL DEFAULT '' AFTER software_revision");
$this->alter_table('sys_hw_module', 'object_id', "object_ident varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('sys_hw_module', 'asset_id', "asset_ident varchar(100) NOT NULL DEFAULT ''");
$this->rename_table("sys_hw_module", "module");

# monitor
if ($this->db->table_exists('sys_hw_monitor') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_monitor')) {
    $sql = "DELETE `sys_hw_monitor` FROM `sys_hw_monitor` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_monitor`.`system_id` WHERE `sys_hw_monitor`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_monitor', 'monitor_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_monitor', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_monitor', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_monitor', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_monitor', 'manufacturer', "manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_hw_monitor', 'model', "model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer");
$this->alter_table('sys_hw_monitor', 'serial', "serial varchar(50) NOT NULL DEFAULT '' AFTER model");
$this->alter_table('sys_hw_monitor', 'man_description', "description varchar(200) NOT NULL DEFAULT '' AFTER serial");
$this->alter_table('sys_hw_monitor', 'device_id', "device varchar(100) NOT NULL DEFAULT '' AFTER description");
$this->alter_table('sys_hw_monitor', 'manufacture_date', "manufacture_date varchar(20) NOT NULL DEFAULT '' AFTER device");
$this->alter_table('sys_hw_monitor', 'size', "size tinyint unsigned NOT NULL DEFAULT '0' AFTER manufacture_date");
$this->alter_table('sys_hw_monitor', 'man_serial', "DROP man_serial", 'drop');
$this->alter_table('sys_hw_monitor', 'man_value', "DROP man_value", 'drop');
$this->alter_table('sys_hw_monitor', 'man_purchase_order_number', "DROP man_purchase_order_number", 'drop');
$this->alter_table('sys_hw_monitor', 'man_date_purchased', "DROP man_date_purchased", 'drop');
$this->rename_table("sys_hw_monitor", "monitor");


# motherboard
if ($this->db->table_exists('sys_hw_motherboard') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_motherboard')) {
    $sql = "DELETE `sys_hw_motherboard` FROM `sys_hw_motherboard` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_motherboard`.`system_id` WHERE `sys_hw_motherboard`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_motherboard', 'motherboard_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_motherboard', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_hw_motherboard', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_motherboard', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_motherboard', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_motherboard', 'manufacturer', "manufacturer varchar(50) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_hw_motherboard', 'model', "model varchar(50) NOT NULL DEFAULT '' AFTER manufacturer");
$this->alter_table('sys_hw_motherboard', 'serial', "serial varchar(100) NOT NULL DEFAULT '' AFTER model");
$this->alter_table('sys_hw_motherboard', 'memory_slots', "memory_slot_count tinyint unsigned NOT NULL DEFAULT '0' AFTER serial");
$this->alter_table('sys_hw_motherboard', 'processor_slots', "processor_slot_count tinyint unsigned NOT NULL DEFAULT '0' AFTER memory_slot_count");
$this->rename_table("sys_hw_motherboard", "motherboard");


# optical drive
if ($this->db->table_exists('sys_hw_optical_drive') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_optical_drive')) {
    $sql = "DELETE `sys_hw_optical_drive` FROM `sys_hw_optical_drive` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_optical_drive`.`system_id` WHERE `sys_hw_optical_drive`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_optical_drive', 'optical_drive_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_optical_drive', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_hw_optical_drive', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_optical_drive', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_optical_drive', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_optical_drive', 'optical_drive_model', "model varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_hw_optical_drive', 'optical_drive_caption', "description varchar(100) NOT NULL DEFAULT '' AFTER model");
$this->alter_table('sys_hw_optical_drive', 'optical_drive_device_id', "device varchar(100) NOT NULL DEFAULT '' AFTER description");
$this->alter_table('sys_hw_optical_drive', 'optical_drive_mount_point', "mount_point varchar(10) NOT NULL DEFAULT '' AFTER device");
$this->rename_table("sys_hw_optical_drive", "optical");


# netstat
if ($this->db->table_exists('sys_sw_netstat') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_netstat')) {
    $sql = "DELETE `sys_sw_netstat` FROM `sys_sw_netstat` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_netstat`.`system_id` WHERE `sys_sw_netstat`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_netstat', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_netstat', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_netstat', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_netstat', 'ip_address', "ip varchar(45) NOT NULL DEFAULT '' AFTER protocol");
$this->rename_table("sys_sw_netstat", "netstat");


# network card
if ($this->db->table_exists('sys_hw_network_card') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_network_card')) {
    $sql = "DELETE `sys_hw_network_card` FROM `sys_hw_network_card` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_network_card`.`system_id` WHERE `sys_hw_network_card`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_network_card', 'net_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_network_card', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_hw_network_card', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_network_card', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_network_card', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_network_card', 'net_mac_address', "mac varchar(200) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_hw_network_card', 'net_manufacturer', "manufacturer varchar(100) NOT NULL DEFAULT '' AFTER mac");
$this->alter_table('sys_hw_network_card', 'net_model', "model varchar(255) NOT NULL DEFAULT '' AFTER manufacturer");
$this->alter_table('sys_hw_network_card', 'net_description', "description varchar(255) NOT NULL DEFAULT '' AFTER model");
$this->alter_table('sys_hw_network_card', 'net_alias', "alias varchar(255) NOT NULL DEFAULT '' AFTER description");
$this->alter_table('sys_hw_network_card', 'net_ip_enabled', "ip_enabled varchar(10) NOT NULL DEFAULT '' AFTER alias");
$this->alter_table('sys_hw_network_card', 'net_index', "net_index varchar(10) NOT NULL DEFAULT '' AFTER ip_enabled");
$this->alter_table('sys_hw_network_card', 'net_dhcp_enabled', "dhcp_enabled varchar(100) NOT NULL DEFAULT '' AFTER net_index");
$this->alter_table('sys_hw_network_card', 'net_dhcp_server', "dhcp_server varchar(30) NOT NULL DEFAULT '' AFTER dhcp_enabled");
$this->alter_table('sys_hw_network_card', 'net_dhcp_lease_obtained', "dhcp_lease_obtained varchar(14) NOT NULL DEFAULT '' AFTER dhcp_server");
$this->alter_table('sys_hw_network_card', 'net_dhcp_lease_expires', "dhcp_lease_expires varchar(14) NOT NULL DEFAULT '' AFTER dhcp_lease_obtained");
$this->alter_table('sys_hw_network_card', 'net_dns_host_name', "dns_host_name varchar(100) NOT NULL DEFAULT '' AFTER dhcp_lease_expires");
$this->alter_table('sys_hw_network_card', 'net_dns_server', "dns_server varchar(100) NOT NULL DEFAULT '' AFTER dns_host_name");
$this->alter_table('sys_hw_network_card', 'net_dns_domain', "dns_domain varchar(100) NOT NULL DEFAULT '' AFTER dns_server");
$this->alter_table('sys_hw_network_card', 'net_dns_domain_reg_enabled', "dns_domain_reg_enabled varchar(10) NOT NULL DEFAULT '' AFTER dns_domain");
$this->alter_table('sys_hw_network_card', 'net_adapter_type', "type varchar(100) NOT NULL DEFAULT '' AFTER dns_domain_reg_enabled");
$this->alter_table('sys_hw_network_card', 'net_connection_id', "connection varchar(255) NOT NULL DEFAULT '' AFTER type");
$this->alter_table('sys_hw_network_card', 'net_connection_status', "connection_status varchar(30) NOT NULL DEFAULT '' AFTER connection");
$this->alter_table('sys_hw_network_card', 'net_speed', "speed int(10) unsigned NOT NULL DEFAULT '0' AFTER connection_status");
$this->alter_table('sys_hw_network_card', 'net_slaves', "slaves varchar(100) NOT NULL DEFAULT '' AFTER speed");
$this->alter_table('sys_hw_network_card', 'net_dns_domain_suffix', "DROP net_dns_domain_suffix", 'drop');
$this->alter_table('sys_hw_network_card', 'net_wins_primary', "DROP net_wins_primary", 'drop');
$this->alter_table('sys_hw_network_card', 'net_wins_secondary', "DROP net_wins_secondary", 'drop');
$this->alter_table('sys_hw_network_card', 'net_wins_lmhosts_enabled', "DROP net_wins_lmhosts_enabled", 'drop');
$this->drop_key('sys_hw_network_card', 'net_mac_address');
$this->add_key('sys_hw_network_card', 'mac');
$this->rename_table("sys_hw_network_card", "network");


# partition
if ($this->db->table_exists('sys_hw_partition') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_partition')) {
    $sql = "DELETE `sys_hw_partition` FROM `sys_hw_partition` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_partition`.`system_id` WHERE `sys_hw_partition`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
    $sql = "UPDATE sys_hw_partition SET `partition_type` = 'volume'                                        WHERE `partition_type` = 'Volume'";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
    $sql = "UPDATE sys_hw_partition SET `partition_type` = 'local'                                         WHERE `partition_type` = 'Local Disk'";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
    $sql = "UPDATE sys_hw_partition SET `partition_type` = 'local removable'                               WHERE `partition_type` = 'Removable Disk'";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
    $sql = "UPDATE sys_hw_partition SET `partition_type` = 'local'                                         WHERE `partition_type` = 'local hard disk'";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
    $sql = "UPDATE sys_hw_partition SET `partition_mount_type` = 'partition', partition_type = 'local'     WHERE `partition_type` = 'partition'";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
    $sql = "UPDATE sys_hw_partition SET `partition_mount_type` = 'mount point', partition_type = 'smb'     WHERE `partition_type` = 'Network Drive'";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
    $sql = "UPDATE sys_hw_partition SET `partition_mount_type` = 'mount point'                             WHERE `partition_type` LIKE 'raid%'";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
    $sql = "UPDATE sys_hw_partition SET `partition_mount_type` = 'mount point'                             WHERE `partition_mount_type` = 'lvm'";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
    $sql = "UPDATE sys_hw_partition SET `partition_mount_type` = 'other' WHERE (`partition_mount_type` != 'partition' AND `partition_mount_type` != 'mount point')";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_partition', 'partition_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_partition', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_hw_partition', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_partition', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_partition', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_partition', 'partition_serial', "serial varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_hw_partition', 'partition_name', "name varchar(100) NOT NULL DEFAULT '' AFTER serial");
$this->alter_table('sys_hw_partition', 'partition_caption', "description varchar(100) NOT NULL DEFAULT '' AFTER name");
$this->alter_table('sys_hw_partition', 'partition_device_id', "device varchar(100) NOT NULL DEFAULT '' AFTER description");
$this->alter_table('sys_hw_partition', 'hard_drive_index', "hard_drive_index varchar(100) NOT NULL DEFAULT '' AFTER device");
$this->alter_table('sys_hw_partition', 'partition_disk_index', "partition_disk_index varchar(50) NOT NULL DEFAULT '' AFTER hard_drive_index");
$this->alter_table('sys_hw_partition', 'partition_mount_type', "mount_type enum('mount point', 'partition', 'other') NOT NULL DEFAULT 'partition' AFTER partition_disk_index");
$this->alter_table('sys_hw_partition', 'partition_mount_point', "mount_point varchar(100) NOT NULL DEFAULT '' AFTER mount_type");
$this->alter_table('sys_hw_partition', 'partition_size', "size int unsigned NOT NULL DEFAULT '1' AFTER mount_point");
$this->alter_table('sys_hw_partition', 'partition_free_space', "free int unsigned NOT NULL DEFAULT '1' AFTER size");
$this->alter_table('sys_hw_partition', 'partition_used_space', "used int unsigned NOT NULL DEFAULT '1' AFTER free");
$this->alter_table('sys_hw_partition', 'partition_format', "format varchar(20) NOT NULL DEFAULT '' AFTER used");
$this->alter_table('sys_hw_partition', 'partition_bootable', "bootable varchar(10) NOT NULL DEFAULT '' AFTER format");
$this->alter_table('sys_hw_partition', 'partition_type', "`type` varchar(100) NOT NULL DEFAULT 'local' AFTER bootable");
$this->alter_table('sys_hw_partition', 'partition_quotas_supported', "DROP partition_quotas_supported", 'drop');
$this->alter_table('sys_hw_partition', 'partition_quotas_enabled', "DROP partition_quotas_enabled", 'drop');
$this->rename_table("sys_hw_partition", "partition");


# processor
if ($this->db->table_exists('sys_hw_processor') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_processor')) {
    $sql = "DELETE `sys_hw_processor` FROM `sys_hw_processor` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_processor`.`system_id` WHERE `sys_hw_processor`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_processor', 'processor_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_processor', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_hw_processor', 'current', "ADD current enum('y', 'n') NOT NULL default 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_processor', 'first_timestamp', "first_seen datetime NOT NULL default '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_processor', 'timestamp', "last_seen datetime NOT NULL default '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_processor', 'processor_count', "physical_count tinyint unsigned NOT NULL default '1' AFTER last_seen");
if ($this->db->table_exists('sys_hw_processor')) {
    $sql = "UPDATE `sys_hw_processor` SET physical_count = 1 WHERE `physical_count` = 0 OR `physical_count` = ''";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_processor', 'processor_cores', "core_count tinyint unsigned NOT NULL default '1' AFTER physical_count");
$this->alter_table('sys_hw_processor', 'processor_logical', "logical_count tinyint unsigned NOT NULL default '1' AFTER core_count");
$this->alter_table('sys_hw_processor', 'processor_description', "description varchar(100) NOT NULL default '' AFTER logical_count");
$this->alter_table('sys_hw_processor', 'processor_speed', "speed int unsigned NOT NULL default '0' AFTER description");
$this->alter_table('sys_hw_processor', 'processor_manufacturer', "manufacturer varchar(100) NOT NULL default '' AFTER speed");
$this->alter_table('sys_hw_processor', 'processor_architecture', "architecture varchar(100) NOT NULL default '' AFTER manufacturer");
$this->alter_table('sys_hw_processor', 'socket', "ADD socket varchar(100) NOT NULL default '' AFTER architecture", 'add');
$this->alter_table('sys_hw_processor', 'processor_power_management_supported', "DROP COLUMN processor_power_management_supported", 'drop');
$this->rename_table("sys_hw_processor", "processor");
$sql = "UPDATE `processor` SET `manufacturer` = 'Intel' WHERE `manufacturer` = 'GenuineIntel'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "UPDATE `processor` SET `manufacturer` = 'AMD' WHERE `manufacturer` = 'AuthenticAMD'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());


# san (new table)
$this->drop_table('san');
if ($this->db->field_exists('system_id', 'system')) {
    $system_id = 'system_id';
} else {
    $system_id = 'id';
}
$sql = "CREATE TABLE `san` (
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    system_id int(10) unsigned DEFAULT NULL,
    current enum('y', 'n') NOT NULL DEFAULT 'y',
    first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    type varchar(100) NOT NULL DEFAULT '',
    manufacturer varchar(100) NOT NULL DEFAULT '',
    `serial` varchar(50) NOT NULL DEFAULT '',
    part_number varchar(100) NOT NULL DEFAULT '',
    location varchar(100) NOT NULL DEFAULT '',
    attached_to varchar(100) NOT NULL DEFAULT '',
    status varchar(100) NOT NULL DEFAULT '',
    date_of_manufacture varchar(100) NOT NULL DEFAULT '',
    notes text NOT NULL DEFAULT '',
    PRIMARY KEY (`id`), KEY `system_id` (`system_id`),
    CONSTRAINT `san_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`" . $system_id . "`) ON DELETE CASCADE)
    ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());


# scsi controller
if ($this->db->table_exists('sys_hw_scsi_controller') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_scsi_controller')) {
    $sql = "DELETE `sys_hw_scsi_controller` FROM `sys_hw_scsi_controller` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_scsi_controller`.`system_id` WHERE `sys_hw_scsi_controller`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_scsi_controller', 'scsi_controller_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_scsi_controller', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_hw_scsi_controller', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_scsi_controller', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_scsi_controller', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_scsi_controller', 'scsi_controller_manufacturer', "manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_hw_scsi_controller', 'scsi_controller_name', "model varchar(200) NOT NULL DEFAULT '' AFTER manufacturer");
$this->alter_table('sys_hw_scsi_controller', 'serial', "ADD `serial` varchar(200) NOT NULL DEFAULT '' AFTER model", 'add');
$this->alter_table('sys_hw_scsi_controller', 'scsi_controller_device_id', "device varchar(200) NOT NULL DEFAULT '' AFTER `serial`");
$this->alter_table('sys_hw_scsi_controller', 'scsi_controller_type', "type enum('raid', 'hba', 'other', 'san controller', 'san shelf') NOT NULL DEFAULT 'other' AFTER device");
$this->rename_table("sys_hw_scsi_controller", "scsi");


# group
if ($this->db->table_exists('sys_sw_group') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_group')) {
    $sql = "DELETE `sys_sw_group` FROM `sys_sw_group` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_group`.`system_id` WHERE `sys_sw_group`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_group', 'group_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_group', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_group', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_group', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_group', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_group', 'group_name', "name varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_sw_group', 'group_description', "description varchar(200) NOT NULL DEFAULT '' AFTER name");
$this->alter_table('sys_sw_group', 'group_sid', "sid varchar(100) NOT NULL DEFAULT '' AFTER description");
$this->alter_table('sys_sw_group', 'group_members', "members text NOT NULL AFTER sid");
$this->rename_table("sys_sw_group", "user_group");


# pagefile
if ($this->db->table_exists('sys_sw_pagefile') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_pagefile')) {
    $sql = "DELETE `sys_sw_pagefile` FROM `sys_sw_pagefile` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_pagefile`.`system_id` WHERE `sys_sw_pagefile`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_pagefile', 'pagefile_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_pagefile', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_pagefile', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_pagefile', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_pagefile', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_pagefile', 'pagefile_name', "name varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_sw_pagefile', 'pagefile_size', "size int unsigned NOT NULL DEFAULT '0' AFTER name");
$this->alter_table('sys_sw_pagefile', 'pagefile_initial_size', "initial_size int unsigned NOT NULL DEFAULT '0' AFTER size");
$this->alter_table('sys_sw_pagefile', 'pagefile_max_size', "max_size int unsigned NOT NULL DEFAULT '0' AFTER initial_size");
$this->rename_table("sys_sw_pagefile", "pagefile");


# print queue
if ($this->db->table_exists('sys_sw_print_queue') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_print_queue')) {
    $sql = "DELETE `sys_sw_print_queue` FROM `sys_sw_print_queue` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_print_queue`.`system_id` WHERE `sys_sw_print_queue`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_print_queue', 'queue_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_print_queue', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_print_queue', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_print_queue', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_print_queue', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_print_queue', 'queue_manufacturer', "manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_sw_print_queue', 'queue_model', "model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer");
$this->alter_table('sys_sw_print_queue', 'queue_description', "description varchar(100) NOT NULL DEFAULT '' AFTER model");
$this->alter_table('sys_sw_print_queue', 'queue_system_key', "system_key varchar(100) NOT NULL DEFAULT '' AFTER description");
$this->alter_table('sys_sw_print_queue', 'queue_name', "name varchar(100) NOT NULL DEFAULT '' AFTER system_key");
$this->alter_table('sys_sw_print_queue', 'queue_port_name', "port_name varchar(100) NOT NULL DEFAULT '' AFTER name");
$this->alter_table('sys_sw_print_queue', 'queue_ip_address', "ip varchar(45) NOT NULL DEFAULT '' AFTER port_name");
$this->alter_table('sys_sw_print_queue', 'queue_shared', "shared varchar(100) NOT NULL DEFAULT '' AFTER ip");
$this->alter_table('sys_sw_print_queue', 'queue_shared_name', "shared_name varchar(100) NOT NULL DEFAULT '' AFTER shared");
$this->alter_table('sys_sw_print_queue', 'queue_location', "location varchar(100) NOT NULL DEFAULT '' AFTER shared_name");
$this->alter_table('sys_sw_print_queue', 'queue_color', "color varchar(100) NOT NULL DEFAULT '' AFTER location");
$this->alter_table('sys_sw_print_queue', 'queue_duplex', "duplex varchar(100) NOT NULL DEFAULT '' AFTER color");
$this->alter_table('sys_sw_print_queue', 'queue_type', "type enum('virtual', 'physical', '') NOT NULL DEFAULT '' AFTER duplex");
$this->alter_table('sys_sw_print_queue', 'queue_connection_status', "connection_status varchar(100) NOT NULL DEFAULT '' AFTER type");
$this->rename_table("sys_sw_print_queue", "print_queue");


# route
if ($this->db->table_exists('sys_sw_route') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_route')) {
    $sql = "DELETE `sys_sw_route` FROM `sys_sw_route` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_route`.`system_id` WHERE `sys_sw_route`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_route', 'route_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_route', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_route', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_route', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_route', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_route', 'next_hop', "next_hop varchar(40) NOT NULL DEFAULT ''");
$this->rename_table("sys_sw_route", "route");


# service
if ($this->db->table_exists('sys_sw_service') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_service')) {
    $sql = "DELETE `sys_sw_service` FROM `sys_sw_service` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_service`.`system_id` WHERE `sys_sw_service`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->drop_key('sys_sw_service', 'timestamp');
$this->drop_key('sys_sw_service', 'first_timestamp');
$this->drop_key('sys_sw_service', 'service_name');
$this->drop_key('sys_sw_service', 'service_display_name');
$this->alter_table('sys_sw_service', 'service_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_service', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_service', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_service', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_service', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_service', 'user_id', "DROP user_id", 'drop');
$this->alter_table('sys_sw_service', 'service_name', "name varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_sw_service', 'service_display_name', "description varchar(100) NOT NULL DEFAULT '' AFTER name");
$this->alter_table('sys_sw_service', 'service_path_name', "executable text NOT NULL AFTER description");
$this->alter_table('sys_sw_service', 'service_started', "DROP service_started", 'drop');
$this->alter_table('sys_sw_service', 'service_start_name', "user varchar(100) NOT NULL DEFAULT '' AFTER executable");
$this->alter_table('sys_sw_service', 'service_start_mode', "start_mode varchar(200) NOT NULL DEFAULT '' AFTER user");
$this->alter_table('sys_sw_service', 'service_state', "state varchar(200) NOT NULL DEFAULT '' AFTER start_mode");
$this->alter_table('sys_sw_service', 'service_count', "count varchar(5) NOT NULL DEFAULT '' AFTER state");
$this->add_key('sys_sw_service', 'first_seen');
$this->add_key('sys_sw_service', 'last_seen');
$this->add_key('sys_sw_service', 'name');
$this->add_key('sys_sw_service', 'description');
$this->rename_table("sys_sw_service", "service");

# share
if ($this->db->table_exists('sys_sw_share') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_share')) {
    $sql = "DELETE `sys_sw_share` FROM `sys_sw_share` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_share`.`system_id` WHERE `sys_sw_share`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_share', 'share_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_share', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_share', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_share', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_share', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_share', 'share_caption', "description varchar(250) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_sw_share', 'share_name', "name varchar(250) NOT NULL DEFAULT '' AFTER description");
$this->alter_table('sys_sw_share', 'share_path', "`path` varchar(250) NOT NULL DEFAULT '' AFTER name");
$this->alter_table('sys_sw_share', 'share_size', "size int unsigned NOT NULL DEFAULT '0' AFTER `path`");
$this->alter_table('sys_sw_share', 'share_users', "users varchar(200) NOT NULL DEFAULT '' AFTER size");
$this->rename_table("sys_sw_share", "share");


# software
if ($this->db->table_exists('sys_sw_software') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_software')) {
    $sql = "DELETE `sys_sw_software` FROM `sys_sw_software` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_software`.`system_id` WHERE `sys_sw_software`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_software', 'software_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_software', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_software', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_software', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_software', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_software', 'software_name', "name varchar(255) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_sw_software', 'software_version', " version varchar(255) NOT NULL DEFAULT '' AFTER name");
$this->alter_table('sys_sw_software', 'software_description', "description text NOT NULL AFTER version");
$this->alter_table('sys_sw_software', 'software_location', "location varchar(255) NOT NULL DEFAULT '' AFTER description");
$this->alter_table('sys_sw_software', 'software_uninstall', "uninstall mediumtext NOT NULL AFTER location");
$this->alter_table('sys_sw_software', 'software_install_date', "install_date varchar(100) NOT NULL DEFAULT '' AFTER uninstall");
$this->alter_table('sys_sw_software', 'software_installed_by', "installed_by varchar(100) NOT NULL DEFAULT '' AFTER install_date");
$this->alter_table('sys_sw_software', 'software_installed_on', "installed_on datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER installed_by");
$this->alter_table('sys_sw_software', 'software_publisher', "publisher varchar(255) NOT NULL DEFAULT '' AFTER installed_on");
$this->alter_table('sys_sw_software', 'software_install_source', "install_source varchar(200) NOT NULL DEFAULT '' AFTER publisher");
$this->alter_table('sys_sw_software', 'software_system_component', "system_component varchar(2) NOT NULL DEFAULT '' AFTER install_source");
$this->alter_table('sys_sw_software', 'software_url', "url varchar(255) NOT NULL DEFAULT '' AFTER system_component");
$this->alter_table('sys_sw_software', 'software_email', "email varchar(255) NOT NULL DEFAULT '' AFTER url");
$this->alter_table('sys_sw_software', 'software_comment', "type varchar(200) NOT NULL DEFAULT '' AFTER email");
$this->alter_table('sys_sw_software', 'version_padded', "ADD version_padded text NOT NULL AFTER type", 'add');
$this->alter_table('sys_sw_software', 'software_key', "DROP software_key", 'drop');
$this->alter_table('sys_sw_software', 'software_key_release', "DROP software_key_release", 'drop');
$this->alter_table('sys_sw_software', 'software_key_edition', "DROP software_key_edition", 'drop');
$this->alter_table('sys_sw_software', 'software_man_comment', "DROP software_man_comment", 'drop');
$this->alter_table('sys_sw_software', 'software_count', "DROP software_count", 'drop');
$this->alter_table('sys_sw_software', 'software_code_base', "DROP software_code_base", 'drop');
$this->alter_table('sys_sw_software', 'software_status', "DROP software_status", 'drop');
$this->drop_key('sys_sw_software', 'timestamp');
$this->drop_key('sys_sw_software', 'first_timestamp');
$this->drop_key('sys_sw_software', 'software_name');
$this->add_key('sys_sw_software', 'first_seen');
$this->add_key('sys_sw_software', 'last_seen');
$this->add_key('sys_sw_software', 'name');
$this->rename_table("sys_sw_software", "software");


# software key
if ($this->db->table_exists('sys_sw_software_key') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_software_key')) {
    $sql = "DELETE `sys_sw_software_key` FROM `sys_sw_software_key` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_software_key`.`system_id` WHERE `sys_sw_software_key`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_software_key', 'key_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_software_key', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_software_key', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_software_key', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_software_key', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_software_key', 'key_name', "name varchar(250) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_sw_software_key', 'key_text', "string varchar(100) NOT NULL DEFAULT '' AFTER name");
$this->alter_table('sys_sw_software_key', 'key_release', "rel varchar(100) NOT NULL DEFAULT '' AFTER string");
$this->alter_table('sys_sw_software_key', 'key_edition', "edition varchar(100) NOT NULL DEFAULT '' AFTER rel");
$this->rename_table("sys_sw_software_key", "software_key");


# sound
if ($this->db->table_exists('sys_hw_sound') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_sound')) {
    $sql = "DELETE `sys_hw_sound` FROM `sys_hw_sound` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_sound`.`system_id` WHERE `sys_hw_sound`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_sound', 'sound_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_sound', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_hw_sound', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_sound', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_sound', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_sound', 'sound_manufacturer', "manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_hw_sound', 'sound_name', "model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer");
$this->alter_table('sys_hw_sound', 'sound_device_id', "device varchar(100) NOT NULL DEFAULT '' AFTER model");
$this->rename_table("sys_hw_sound", "sound");


# user
if ($this->db->table_exists('sys_sw_user') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_user')) {
    $sql = "DELETE `sys_sw_user` FROM `sys_sw_user` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_user`.`system_id` WHERE `sys_sw_user`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_user', 'user_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_user', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_user', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_user', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_user', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_user', 'user_name', "name varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_sw_user', 'user_caption', "caption varchar(255) NOT NULL DEFAULT '' AFTER name");
$this->alter_table('sys_sw_user', 'user_sid', "sid varchar(100) NOT NULL DEFAULT '' AFTER caption");
$this->alter_table('sys_sw_user', 'user_domain', "domain varchar(100) NOT NULL DEFAULT '' AFTER sid");
$this->alter_table('sys_sw_user', 'user_disabled', "disabled varchar(20) NOT NULL DEFAULT '' AFTER domain");
$this->alter_table('sys_sw_user', 'user_full_name', "full_name varchar(100) NOT NULL DEFAULT '' AFTER disabled");
$this->alter_table('sys_sw_user', 'user_password_changeable', "password_changeable varchar(20) NOT NULL DEFAULT '' AFTER full_name");
$this->alter_table('sys_sw_user', 'user_password_expires', "password_expires varchar(20) NOT NULL DEFAULT '' AFTER password_changeable");
$this->alter_table('sys_sw_user', 'user_password_required', "password_required varchar(20) NOT NULL DEFAULT '' AFTER password_expires");
$this->alter_table('sys_sw_user', 'user_status', "status varchar(100) NOT NULL DEFAULT '' AFTER password_required");
$this->alter_table('sys_sw_user', 'user_type', "type enum('local', 'domain', 'database', 'application', 'other') NOT NULL DEFAULT 'local' AFTER status");
$this->rename_table("sys_sw_user", "user");


# variable
if ($this->db->table_exists('sys_sw_variable') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_variable')) {
    $sql = "DELETE `sys_sw_variable` FROM `sys_sw_variable` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_variable`.`system_id` WHERE `sys_sw_variable`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_variable', 'variable_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_variable', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_variable', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_variable', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_variable', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_variable', 'variable_name', "name varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_sw_variable', 'variable_value', "value text NOT NULL AFTER name");
$this->rename_table("sys_sw_variable", "variable");


# video
if ($this->db->table_exists('sys_hw_video') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_hw_video')) {
    $sql = "DELETE `sys_hw_video` FROM `sys_hw_video` LEFT JOIN `system` ON `system`.`system_id` = `sys_hw_video`.`system_id` WHERE `sys_hw_video`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_hw_video', 'video_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_video', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_hw_video', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_video', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_video', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_video', 'video_manufacturer', "manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_hw_video', 'video_description', "model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer");
$this->alter_table('sys_hw_video', 'video_device_id', "device varchar(100) NOT NULL DEFAULT '' AFTER model");
$this->alter_table('sys_hw_video', 'video_memory', "size int unsigned NOT NULL DEFAULT '0' AFTER device");
$this->alter_table('sys_hw_video', 'video_caption', "caption varchar(100) NOT NULL DEFAULT '' AFTER size");
$this->alter_table('sys_hw_video', 'video_current_horizontal_res', "DROP video_current_horizontal_res", 'drop');
$this->alter_table('sys_hw_video', 'video_current_vertical_res', "DROP video_current_vertical_res", 'drop');
$this->alter_table('sys_hw_video', 'video_current_number_colours', "DROP video_current_number_colours", 'drop');
$this->alter_table('sys_hw_video', 'video_current_refresh_rate', "DROP video_current_refresh_rate", 'drop');
$this->alter_table('sys_hw_video', 'video_driver_date', "DROP video_driver_date", 'drop');
$this->alter_table('sys_hw_video', 'video_driver_version', "DROP video_driver_version", 'drop');
$this->alter_table('sys_hw_video', 'video_max_refresh_rate', "DROP video_max_refresh_rate", 'drop');
$this->alter_table('sys_hw_video', 'video_min_refresh_rate', "DROP video_min_refresh_rate", 'drop');
$this->rename_table("sys_hw_video", "video");


# vm
if ($this->db->table_exists('sys_sw_virtual_machine') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_virtual_machine')) {
    $sql = "DELETE `sys_sw_virtual_machine` FROM `sys_sw_virtual_machine` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_virtual_machine`.`system_id` WHERE `sys_sw_virtual_machine`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_virtual_machine', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_virtual_machine', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_virtual_machine', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_virtual_machine', 'memory', "memory_count int(12) unsigned NOT NULL DEFAULT '0'");
$this->alter_table('sys_sw_virtual_machine', 'cpu', "cpu_count int(10) unsigned NOT NULL DEFAULT '0'");
$this->alter_table('sys_sw_virtual_machine', 'vm_id', "vm_id int(12) unsigned DEFAULT NULL");
$this->alter_table('sys_sw_virtual_machine', 'icon', "ADD icon varchar(50) NOT NULL DEFAULT ''", 'add');
$this->rename_table("sys_sw_virtual_machine", "vm");


# warranty
$this->alter_table('sys_hw_warranty', 'warranty_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_hw_warranty', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_hw_warranty', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_hw_warranty', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_hw_warranty', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_hw_warranty', 'warranty_provider', "provider varchar(200) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_hw_warranty', 'warranty_type', "type varchar(100) NOT NULL DEFAULT '' AFTER provider");
$this->alter_table('sys_hw_warranty', 'warranty_start', "start datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER type");
$this->alter_table('sys_hw_warranty', 'warranty_end', "end datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER start");
$this->rename_table("sys_hw_warranty", "warranty");



# windows
if ($this->db->table_exists('sys_sw_windows') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_windows')) {
    $sql = "DELETE `sys_sw_windows` FROM `sys_sw_windows` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_windows`.`system_id` WHERE `sys_sw_windows`.`timestamp` <> `system`.`timestamp`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->alter_table('sys_sw_windows', 'windows_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('sys_sw_windows', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('sys_sw_windows', 'current', "ADD current enum('y', 'n') NOT NULL DEFAULT 'y' AFTER system_id", 'add');
$this->alter_table('sys_sw_windows', 'first_timestamp', "first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current");
$this->alter_table('sys_sw_windows', 'timestamp', "last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen");
$this->alter_table('sys_sw_windows', 'windows_build_number', "build_number varchar(20) NOT NULL DEFAULT '' AFTER last_seen");
$this->alter_table('sys_sw_windows', 'windows_user_name', "user_name varchar(100) NOT NULL DEFAULT '' AFTER build_number");
$this->alter_table('sys_sw_windows', 'windows_client_site_name', "client_site_name varchar(100) NOT NULL DEFAULT '' AFTER user_name");
$this->alter_table('sys_sw_windows', 'windows_domain_short', "domain_short varchar(100) NOT NULL DEFAULT '' AFTER client_site_name");
$this->alter_table('sys_sw_windows', 'windows_domain_controller_address', "domain_controller_address varchar(100) NOT NULL DEFAULT '' AFTER domain_short");
$this->alter_table('sys_sw_windows', 'windows_domain_controller_name', "domain_controller_name varchar(100) NOT NULL DEFAULT '' AFTER domain_controller_address");
$this->alter_table('sys_sw_windows', 'windows_domain_role', "domain_role varchar(40) NOT NULL DEFAULT '' AFTER domain_controller_name");
$this->alter_table('sys_sw_windows', 'windows_part_of_domain', "part_of_domain varchar(10) NOT NULL DEFAULT '' AFTER domain_role");
$this->alter_table('sys_sw_windows', 'windows_id_number', "id_number varchar(100) NOT NULL DEFAULT '' AFTER part_of_domain");
$this->alter_table('sys_sw_windows', 'windows_time_caption', "time_caption varchar(100) NOT NULL DEFAULT '' AFTER id_number");
$this->alter_table('sys_sw_windows', 'windows_time_daylight', "time_daylight varchar(100) NOT NULL DEFAULT '' AFTER time_caption");
$this->alter_table('sys_sw_windows', 'windows_boot_device', "boot_device varchar(100) NOT NULL DEFAULT '' AFTER time_daylight");
$this->alter_table('sys_sw_windows', 'windows_country_code', "country_code varchar(50) NOT NULL DEFAULT '' AFTER boot_device");
$this->alter_table('sys_sw_windows', 'windows_organisation', "organisation varchar(80) NOT NULL DEFAULT '' AFTER country_code");
$this->alter_table('sys_sw_windows', 'windows_language', "language varchar(50) NOT NULL DEFAULT '' AFTER organisation");
$this->alter_table('sys_sw_windows', 'windows_registered_user', "registered_user varchar(100) NOT NULL DEFAULT '' AFTER language");
$this->alter_table('sys_sw_windows', 'windows_service_pack', "service_pack varchar(20) NOT NULL DEFAULT '' AFTER registered_user");
$this->alter_table('sys_sw_windows', 'windows_version', "version varchar(20) NOT NULL DEFAULT '' AFTER service_pack");
$this->alter_table('sys_sw_windows', 'windows_install_directory', "install_directory varchar(20) NOT NULL DEFAULT '' AFTER version");
$this->alter_table('sys_sw_windows', 'windows_active_directory_ou', "active_directory_ou varchar(200) NOT NULL DEFAULT '' AFTER install_directory");
$this->alter_table('sys_sw_windows', 'windows_workgroup', "workgroup varchar(255) NOT NULL DEFAULT '' AFTER active_directory_ou");
$this->rename_table("sys_sw_windows", "windows");


# oa_alert_log -> change_log (list of detected changes)
if ($this->db->table_exists('oa_alert_log')) {
    $this->drop_table("change_log");
    $this->drop_foreign_key('oa_alert_log', "oa_alert_log_user_id");
    $this->drop_foreign_key('oa_alert_log', "oa_alert_log_system_id");
    $this->drop_foreign_key('oa_alert_log', "oa_alert_oa_change");
    $this->drop_key('oa_alert_log', "oa_alert_log_user_id");
    $this->drop_key('oa_alert_log', "oa_alert_change_id");
    $this->alter_table('oa_alert_log', 'alert_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
    $this->alter_table('oa_alert_log', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
    $this->alter_table('oa_alert_log', 'alert_table', "db_table varchar(50) NOT NULL DEFAULT '' AFTER system_id");
    $this->alter_table('oa_alert_log', 'alert_foreign_row', "db_row int(10) unsigned NOT NULL DEFAULT '0' AFTER db_table");
    $this->alter_table('oa_alert_log', 'db_action', "ADD db_action enum('', 'create', 'update', 'delete') NOT NULL DEFAULT '' AFTER db_row", 'add');
    $this->alter_table('oa_alert_log', 'alert_details', "details varchar(200) NOT NULL DEFAULT '' AFTER db_action");
    $this->alter_table('oa_alert_log', 'alert_ack_time', "ack_time datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER user_id");
    $this->alter_table('oa_alert_log', 'external_change_link', "external_link varchar(200) NOT NULL DEFAULT '' AFTER ack_time");
    $this->alter_table('oa_alert_log', 'external_change_id', "external_ident varchar(200) NOT NULL DEFAULT '' AFTER external_link");
    $this->alter_table('oa_alert_log', 'alert_note', "note varchar(200) NOT NULL DEFAULT '' AFTER external_ident");
    $this->add_foreign_key('oa_alert_log', 'change_log_system_id', "FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE");
    $this->rename_table("oa_alert_log", "change_log");
}


# sys_man_audits -> audit_log (list of audits)
$this->drop_table("audit_log");
if ($this->db->field_exists('system_id', 'system')) {
    $system_id = 'system_id';
} else {
    $system_id = 'id';
}
$sql = "CREATE TABLE audit_log ( 
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    system_id int(10) unsigned DEFAULT '0',
    username varchar(45) NOT NULL DEFAULT '',
    type varchar(45) NOT NULL DEFAULT '',
    ip varchar(45) NOT NULL DEFAULT '',
    debug text NOT NULL DEFAULT '',
    wmi_fails text NOT NULL DEFAULT '',
    timestamp datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY (id),
    KEY system_id (system_id),
    CONSTRAINT audit_log_system_id FOREIGN KEY (system_id) REFERENCES system (" . $system_id . ") ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

if ($this->db->table_exists('sys_man_audits')) {
    $sql = "INSERT INTO audit_log SELECT NULL, system_id, system_audits_username, system_audits_type, system_audits_ip, audit_debug, audit_wmi_fails, `timestamp` FROM `sys_man_audits`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}
$this->drop_table("sys_man_audits");

# oa_audit_log -> edit_log (list of edits by who [user||audit||snmp||etc])
$this->drop_table("edit_log");
if ($this->db->field_exists('system_id', 'system')) {
    $system_id = 'system_id';
} else {
    $system_id = 'id';
}
if ($this->db->field_exists('user_id', 'oa_user')) {
    $user_id = 'user_id';
} else {
    $user_id = 'id';
}
$sql = "CREATE TABLE edit_log (
    id int(10) NOT NULL AUTO_INCREMENT,
    user_id int(10) unsigned DEFAULT NULL,
    system_id int(10) unsigned DEFAULT NULL,
    details varchar(200) NOT NULL DEFAULT '',
    source varchar(100) NOT NULL DEFAULT '',
    weight int(10) unsigned NOT NULL DEFAULT '0',
    db_table varchar(100) NOT NULL DEFAULT '',
    db_column varchar(100) NOT NULL DEFAULT '',
    timestamp datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    value text NOT NULL DEFAULT '',
    previous_value text NOT NULL DEFAULT '',
    PRIMARY KEY (id),
    KEY user_id (user_id),
    KEY edit_log_system_id (system_id),
    CONSTRAINT edit_log_system_id FOREIGN KEY (system_id) REFERENCES system (" . $system_id . ") ON DELETE CASCADE,
    CONSTRAINT edit_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (" . $user_id . ")
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

if ($this->db->table_exists('oa_audit_log') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'oa_audit_log')) {
    $sql = "INSERT INTO edit_log SELECT NULL as id, oa_audit_log.user_id, system_id, CONCAT(oa_user.user_full_name, ' edited the ', SUBSTRING(`audit_log_event_details`, 5, LOCATE(' ', `audit_log_event_details`) - 5), ' attribute.') as details, 'user' as source, '1000' as weight, 'system' as db_table, SUBSTRING(`audit_log_event_details`, 5, LOCATE(' ', `audit_log_event_details`) - 5) as db_column, `timestamp`, SUBSTRING(`audit_log_event_details` FROM LOCATE(' - ', `audit_log_event_details`)+3) as value, '' as `previous_value` FROM oa_audit_log LEFT JOIN oa_user on oa_audit_log.user_id = oa_user.user_id WHERE `audit_log_event_details` LIKE 'man_%'";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());

    $sql = "INSERT INTO edit_log SELECT NULL as id, oa_audit_log.user_id, system_id, CONCAT(oa_user.user_full_name, ' edited the name attribute.') as details, 'user' as source, '1000' as weight, 'system' as db_table, 'name' as db_column, timestamp, SUBSTRING(`audit_log_event_details` FROM LOCATE(' - ', `audit_log_event_details`)+3) as value, '' as `previous_value` FROM oa_audit_log LEFT JOIN oa_user on oa_audit_log.user_id = oa_user.user_id WHERE `audit_log_event_details` LIKE 'hostname - %'";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());

    $sql = "INSERT INTO edit_log SELECT NULL as id, oa_audit_log.user_id, system_id, CONCAT(oa_user.user_full_name, ' edited a custom attribute.') as details, 'user' as source, '1000' as weight, 'sys_additional_fields_data' as db_table, '' db_column, timestamp, SUBSTRING(`audit_log_event_details` FROM LOCATE(' - ', `audit_log_event_details`)+3) as value, '' as `previous_value` FROM `oa_audit_log` LEFT JOIN oa_user on oa_audit_log.user_id = oa_user.user_id WHERE `audit_log_event_details` LIKE 'additional_field_item%'";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
    $this->drop_table("oa_audit_log");
}

# tasks (scheduled tasks / cron)
$this->drop_table("sys_sw_scheduled_task");
$this->drop_table("task");
if ($this->db->field_exists('system_id', 'system')) {
    $system_id = 'system_id';
} else {
    $system_id = 'id';
}
$sql = "CREATE TABLE `task` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `system_id` int(10) unsigned DEFAULT NULL,
      `current` enum('y', 'n') NOT NULL DEFAULT 'y',
      `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
      `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
      `name` varchar(100) NOT NULL DEFAULT '',
      `next_run` varchar(50) NOT NULL DEFAULT '',
      `status` varchar(50) NOT NULL DEFAULT '',
      `last_run` varchar(50) NOT NULL DEFAULT '',
      `last_result` varchar(50) NOT NULL DEFAULT '',
      `creator` varchar(50) NOT NULL DEFAULT '',
      `schedule` varchar(100) NOT NULL DEFAULT '',
      `task` varchar(100) NOT NULL DEFAULT '',
      `state` varchar(10) NOT NULL DEFAULT '',
      `runas` varchar(50) NOT NULL DEFAULT '',
      PRIMARY KEY (`id`),
      KEY `system_id` (`system_id`),
      CONSTRAINT `task_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`" . $system_id . "`) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

# server - new table
$this->drop_table("server");
if ($this->db->field_exists('system_id', 'system')) {
    $system_id = 'system_id';
} else {
    $system_id = 'id';
}
$sql = "CREATE TABLE server ( id int(10) unsigned NOT NULL AUTO_INCREMENT,
    system_id int(10) unsigned DEFAULT NULL,
    current enum('y', 'n') NOT NULL DEFAULT 'y',
    first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    type varchar(100) NOT NULL DEFAULT '',
    name varchar(100) NOT NULL DEFAULT '',
    full_name varchar(100) NOT NULL DEFAULT '',
    description varchar(100) NOT NULL DEFAULT '',
    version varchar(100) NOT NULL DEFAULT '',
    version_string varchar(100) NOT NULL DEFAULT '',
    edition varchar(100) NOT NULL DEFAULT '',
    status varchar(100) NOT NULL DEFAULT '',
    ip varchar(45) NOT NULL DEFAULT '',
    port smallint unsigned NOT NULL DEFAULT '0',
    PRIMARY KEY (id), KEY system_id (system_id),
    CONSTRAINT server_system_id FOREIGN KEY (system_id) REFERENCES system (" . $system_id . ") ON DELETE CASCADE )
    ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

# server item - new table
$this->drop_table("server_item");
if ($this->db->field_exists('system_id', 'system')) {
    $system_id = 'system_id';
} else {
    $system_id = 'id';
}
$sql = "CREATE TABLE server_item (
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    system_id int(10) unsigned DEFAULT NULL,
    current enum('y', 'n') NOT NULL DEFAULT 'y',
    first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    server_id int(10) unsigned DEFAULT NULL,
    type varchar(100) NOT NULL DEFAULT '',
    parent_name varchar(100) NOT NULL DEFAULT '',
    name varchar(100) NOT NULL DEFAULT '',
    description varchar(100) NOT NULL DEFAULT '',
    id_internal varchar(100) NOT NULL DEFAULT '',
    ip varchar(45) NOT NULL DEFAULT '',
    hostname varchar(100) NOT NULL DEFAULT '',
    port smallint unsigned NOT NULL DEFAULT '0',
    status varchar(100) NOT NULL DEFAULT '',
    parent_id int(11) unsigned DEFAULT NULL,
    instance varchar(100) NOT NULL DEFAULT '',
    `path` varchar(250) NOT NULL DEFAULT '',
    size int unsigned NOT NULL DEFAULT '0',
    log_status varchar(100) NOT NULL DEFAULT '',
    log_format varchar(100) NOT NULL DEFAULT '',
    log_path varchar(100) NOT NULL DEFAULT '',
    log_rotation varchar(100) NOT NULL DEFAULT '',
    PRIMARY KEY (id), KEY system_id (system_id),
    CONSTRAINT server_item_system_id FOREIGN KEY (system_id) REFERENCES system (" . $system_id . ") ON DELETE CASCADE)
    ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

if ($this->db->table_exists('sys_sw_database')) {
    if ($this->db->table_exists('sys_sw_database_details')) {
        $sql = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2012 RTM' WHERE `db_version` LIKE '11.0.2100%' OR db_version LIKE '11.00.2100%'";
        $query = $this->db->query($sql);
        $this->log_db($this->db->last_query());

        $sql = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2012 Service Pack 1' WHERE `db_version` LIKE '11.0.3000%' OR db_version LIKE '11.00.3000%'";
        $query = $this->db->query($sql);
        $this->log_db($this->db->last_query());

        $sql = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2012 Service Pack 2' WHERE `db_version` LIKE '11.0.5058%' OR db_version LIKE '11.00.5058%'";
        $query = $this->db->query($sql);
        $this->log_db($this->db->last_query());

        $sql = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2014 Community Technology Preview 1 (CTP1)' WHERE `db_version` LIKE '11.0.9120%' OR db_version LIKE '11.00.9120%'";
        $query = $this->db->query($sql);
        $this->log_db($this->db->last_query());

        $sql = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2014 Community Technology Preview 2 (CTP2)' WHERE `db_version` LIKE '12.0.1524%' OR db_version LIKE '12.00.1524%'";
        $query = $this->db->query($sql);
        $this->log_db($this->db->last_query());

        $sql = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2014 RTM' WHERE `db_version` LIKE '12.0.2000%' OR db_version LIKE '12.00.2000%'";
        $query = $this->db->query($sql);
        $this->log_db($this->db->last_query());


        if ($this->db->table_exists('sys_sw_database') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_database')) {
            $sql = "DELETE `sys_sw_database` FROM `sys_sw_database` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_database`.`system_id` WHERE `sys_sw_database`.`timestamp` <> `system`.`timestamp`";
            $query = $this->db->query($sql);
            $this->log_db($this->db->last_query());
        }

        $sql = "INSERT INTO server SELECT db_id, sys_sw_database.system_id, 'y', sys_sw_database.first_timestamp, sys_sw_database.timestamp, 'database', db_type, db_version_string, '', db_version, '', db_edition, '', '', db_port FROM `sys_sw_database` LEFT JOIN system ON sys_sw_database.system_id = system.system_id AND sys_sw_database.timestamp = system.last_seen";
        $query = $this->db->query($sql);
        $this->log_db($this->db->last_query());

        if ($this->db->table_exists('sys_sw_database_details') and $this->db->field_exists('system_id', 'system') and $this->db->field_exists('timestamp', 'system') and $this->db->field_exists('timestamp', 'sys_sw_database_details')) {
            $sql = "DELETE `sys_sw_database_details` FROM `sys_sw_database_details` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_database_details`.`system_id` WHERE `sys_sw_database_details`.`timestamp` <> `system`.`timestamp`";
            $query = $this->db->query($sql);
            $this->log_db($this->db->last_query());
        }

        $sql = "INSERT INTO server_item SELECT NULL, sys_sw_database.system_id, 'y', sys_sw_database_details.first_timestamp, sys_sw_database_details.timestamp, sys_sw_database_details.db_id, 'database', sys_sw_database.db_type, sys_sw_database_details.details_name, '', sys_sw_database_details.details_internal_id, '', '', '', '', '', sys_sw_database_details.details_instance, sys_sw_database_details.details_filename, sys_sw_database_details.details_current_size, '', '', '', '' FROM `sys_sw_database_details` LEFT JOIN `sys_sw_database` ON sys_sw_database_details.db_id = sys_sw_database.db_id AND sys_sw_database_details.timestamp = sys_sw_database.timestamp";
        $query = $this->db->query($sql);
        $this->log_db($this->db->last_query());
    }
}

if ($this->db->table_exists('sys_sw_web_server')) {
    if ($this->db->table_exists('sys_sw_web_site')) {
        $sql = "DELETE `sys_sw_web_server` FROM `sys_sw_web_server` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_web_server`.`system_id` WHERE `sys_sw_web_server`.`timestamp` <> `system`.`timestamp`";
        $query = $this->db->query($sql);
        $this->log_db($this->db->last_query());

        $sql = "INSERT INTO server SELECT NULL, sys_sw_web_server.system_id, 'y', sys_sw_web_server.first_timestamp, sys_sw_web_server.timestamp, 'web', 'IIS', '', '', sys_sw_web_server.webserver_version, '', '', sys_sw_web_server.webserver_state, '', '' FROM `sys_sw_web_server`";
        $query = $this->db->query($sql);
        $this->log_db($this->db->last_query());

        $sql = "DELETE `sys_sw_web_site` FROM `sys_sw_web_site` LEFT JOIN `system` ON `system`.`system_id` = `sys_sw_web_site`.`system_id` WHERE `sys_sw_web_site`.`timestamp` <> `system`.`timestamp`";
        $query = $this->db->query($sql);
        $this->log_db($this->db->last_query());

        $sql = "INSERT INTO server_item SELECT NULL as id, sys_sw_web_site.system_id, 'y' as current, sys_sw_web_site.first_timestamp as first_seen, sys_sw_web_site.timestamp as last_seen, '' as server_id, 'website' as type, 'IIS' as parent_name, sys_sw_web_site.site_description as name, sys_sw_web_site.site_description as description, sys_sw_web_site.site_internal_id as id_internal, '' as ip, '' as hostname, '' as port, sys_sw_web_site.site_state as status, '' as parent_id, sys_sw_web_site.site_app_pool as instance, sys_sw_web_site.site_path as path, sys_sw_web_site.site_size as size, '' as log_status, sys_sw_web_site.site_log_format as log_format, sys_sw_web_site.site_log_directory as log_path, sys_sw_web_site.site_log_rotation as log_rotation FROM `sys_sw_web_site`";
        $query = $this->db->query($sql);
        $this->log_db($this->db->last_query());
    }
}

$this->drop_table("sys_sw_database_details");
$this->drop_table("sys_sw_database");
$this->drop_table("sys_sw_web_server_ext");
$this->drop_table("sys_sw_web_site_header");
$this->drop_table("sys_sw_web_site_virtual");
$this->drop_table("sys_sw_web_site");
$this->drop_table("sys_sw_web_server");

if ($this->db->field_exists('man_description', 'system')) {
    $sql = "UPDATE system SET description = '', man_description = '' WHERE `man_description` LIKE 'general purpose|%' AND `description` = `man_description`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());

    $sql = "UPDATE system SET description = '', man_description = '' WHERE `man_description` LIKE '%\%)' AND `description` = `man_description`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());

    $sql = "UPDATE system SET description = '', man_description = '' WHERE `man_description` LIKE '%|%|%' AND `description` = `man_description`";
    $query = $this->db->query($sql);
    $this->log_db($this->db->last_query());
}

# set our versions
if ($this->db->table_exists('oa_config')) {
    $sql = "UPDATE `oa_config` SET `config_value` = '20160104' WHERE `config_name` = 'internal_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
} elseif ($this->db->table_exists('configuration')) {
    $sql = "UPDATE `configuration` SET `value` = '20160104' WHERE `name` = 'internal_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
}

if ($this->db->table_exists('oa_config')) {
    $sql = "UPDATE oa_config SET config_value = '1.10' WHERE `config_name` = 'display_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
} elseif ($this->db->table_exists('configuration')) {
    $sql = "UPDATE `configuration` SET `value` = '1.10' WHERE `name` = 'display_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
}

$this->log_db('Upgrade database to 1.10 completed');
$this->config->config['internal_version'] = '20160104';
$this->config->config['display_version'] = '1.10';
