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

$this->log_db('Upgrade database to 1.12.8 commenced');

$sql = "SELECT TABLE_NAME,COLUMN_NAME,CONSTRAINT_NAME, REFERENCED_TABLE_NAME,REFERENCED_COLUMN_NAME FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE WHERE REFERENCED_TABLE_SCHEMA = '" . $this->db->database . "' AND  REFERENCED_TABLE_NAME = 'system' and REFERENCED_COLUMN_NAME = 'system_id'";
$query = $this->db->query($sql);
$result = $query->result();
foreach ($result as $item) {
    $this->drop_foreign_key($item->TABLE_NAME, $item->CONSTRAINT_NAME);
}

$this->drop_key('system', "id");
$this->drop_key('system', "id2");
$this->drop_key('system', "id3");
$this->drop_key('system', "hostname");
$this->drop_key('system', "linked_sys");
$this->drop_key('system', "system_key");
$this->alter_table('system', 'system_id', "system_id int(10) unsigned NOT NULL");

// Need to hack this for the case where it's run again
$temp_debug = $this->db->db_debug;
$this->db->db_debug = false;
$sql = "ALTER TABLE `system` DROP PRIMARY KEY";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$this->db->db_debug = $temp_debug;

#$this->drop_key('system', "system_id");
$this->alter_table('system', 'system_id', "id int(10) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT FIRST");
$this->alter_table('system', 'system_key', "DROP system_key", 'drop');
$this->alter_table('system', 'system_key_type', "DROP system_key_type", 'drop');
$this->alter_table('system', 'uuid', "uuid varchar(100) NOT NULL DEFAULT '' AFTER id");

$this->alter_table('system', 'linked_sys', "attached_system_id int(10) DEFAULT NULL");
$this->alter_table('system', 'pc_os_bit', "os_bit tinyint unsigned NOT NULL DEFAULT '0'");
$this->alter_table('system', 'pc_memory', "memory_count int unsigned NOT NULL DEFAULT '0'");
$this->alter_table('system', 'pc_num_processor', "processor_count tinyint unsigned NOT NULL DEFAULT '0'");
$this->alter_table('system', 'pc_date_os_installation', "os_installation_date date NOT NULL DEFAULT '2000-01-01'");

# Need to be careful with the below - first time running upgrade works as expected, but if it's run again bad things will happen without these tests
if (!$this->db->field_exists('name', 'system')) {
    $this->alter_table('system', 'hostname', "name varchar(100) NOT NULL DEFAULT '' AFTER uuid");
}
$this->alter_table('system', 'man_ip_address', "ip varchar(45) NOT NULL DEFAULT '' AFTER name");
$this->alter_table('system', 'hostname', "ADD hostname varchar(100) NOT NULL default '' AFTER ip", 'add');
$this->alter_table('system', 'dns_hostname', "ADD dns_hostname varchar(100) NOT NULL default '' AFTER hostname", 'add');
if ($this->db->field_exists('man_domain', 'system')) {
    $this->alter_table('system', 'domain', "DROP domain", 'drop');
    $this->alter_table('system', 'man_domain', "domain varchar(100) NOT NULL DEFAULT '' AFTER dns_hostname");
}
$this->alter_table('system', 'dns_domain', "ADD dns_domain varchar(100) NOT NULL default '' AFTER domain", 'add');
if ($this->db->field_exists('man_description', 'system')) {
    $this->alter_table('system', 'description', "DROP description", 'drop');
    $this->alter_table('system', 'man_description', "description text NOT NULL AFTER fqdn");
}
if ($this->db->field_exists('man_type', 'system')) {
    $this->alter_table('system', 'type', "DROP type", 'drop');
    $this->alter_table('system', 'man_type', "type varchar(50) NOT NULL DEFAULT '' AFTER description");
}
if ($this->db->field_exists('man_os_group', 'system')) {
    $this->alter_table('system', 'os_group', "DROP os_group", 'drop');
    $this->alter_table('system', 'man_os_group', "os_group varchar(50) NOT NULL DEFAULT '' AFTER icon");
}
if ($this->db->field_exists('man_os_family', 'system')) {
    $this->alter_table('system', 'os_family', "DROP os_family", 'drop');
    $this->alter_table('system', 'man_os_family', "os_family varchar(50) NOT NULL DEFAULT '' AFTER os_group");
}
if ($this->db->field_exists('man_os_name', 'system')) {
    $this->alter_table('system', 'os_name', "DROP os_name", 'drop');
    $this->alter_table('system', 'man_os_name', "os_name varchar(100) NOT NULL DEFAULT '' AFTER os_family");
}
if ($this->db->field_exists('man_manufacturer', 'system')) {
    $this->alter_table('system', 'manufacturer', "DROP manufacturer", 'drop');
    $this->alter_table('system', 'man_manufacturer', "manufacturer varchar(100) NOT NULL DEFAULT '' AFTER attached_system_id");
}
if ($this->db->field_exists('man_model', 'system')) {
    $this->alter_table('system', 'model', "DROP model", 'drop');
    $this->alter_table('system', 'man_model', "model varchar(200) NOT NULL DEFAULT '' AFTER manufacturer");
}
if ($this->db->field_exists('man_serial', 'system')) {
    $this->alter_table('system', 'serial', "DROP `serial`", 'drop');
    $this->alter_table('system', 'man_serial', "`serial` varchar(200) NOT NULL DEFAULT '' AFTER model");
}
if ($this->db->field_exists('man_form_factor', 'system')) {
    $this->alter_table('system', 'form_factor', "DROP form_factor", 'drop');
    $this->alter_table('system', 'man_form_factor', "form_factor varchar(50) NOT NULL DEFAULT '' AFTER uptime");
}

$sql = "UPDATE system SET printer_color = 'y' WHERE LOWER(printer_color) ='true' OR LOWER(printer_color) = 't'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE system SET printer_color = 'n' WHERE LOWER(printer_color) ='false' OR LOWER(printer_color) = 'f'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('system', 'printer_color', "printer_color enum('y','n','') NOT NULL DEFAULT ''");

$sql = "UPDATE system SET printer_duplex = 'y' WHERE LOWER(printer_duplex) ='true' OR LOWER(printer_duplex) = 't'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE system SET printer_duplex = 'n' WHERE LOWER(printer_duplex) ='false' OR LOWER(printer_duplex) = 'f'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('system', 'printer_duplex', "printer_duplex enum('y','n','') NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_status', "status enum('production','deleted','lost','maintenance','retired','unallocated') NOT NULL DEFAULT 'production'");
$this->alter_table('system', 'man_environment', "environment enum('production','dev','dr','eval','pre-prod','test','train','uat') NOT NULL DEFAULT 'production'");
$this->alter_table('system', 'man_class', "class enum('desktop','laptop','tablet','workstation','server','virtual server','virtual desktop','hypervisor','') NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_function', "function varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_owner', "owner varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_org_id', "org_id int(10) unsigned NOT NULL DEFAULT '0'");
$this->alter_table('system', 'man_criticality', "DROP man_criticality", 'drop');
$this->alter_table('system', 'man_location_id', "location_id int(10) unsigned NOT NULL DEFAULT '0'");
$this->alter_table('system', 'man_location_level', "location_level varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_location_suite', "location_suite varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_location_room', "location_room varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_location_rack', "location_rack varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_location_rack_position', "location_rack_position varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_location_rack_size', "location_rack_size int(10) unsigned NOT NULL DEFAULT '0'");
$this->alter_table('system', 'man_location_latitude', "location_latitude float(10,6) NOT NULL");
$this->alter_table('system', 'man_location_longitude', "location_longitude float(10,6) NOT NULL");
$this->alter_table('system', 'man_asset_number', "asset_number varchar(50) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_vm_server_name', "vm_server_name varchar(150) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_vm_system_id', "vm_system_id int(10) unsigned DEFAULT NULL");
$this->alter_table('system', 'man_vm_group', "vm_group varchar(150) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_cluster_name', "cluster_name varchar(150) NOT NULL DEFAULT ''");
$this->alter_table('system', 'cluster_type', "ADD cluster_type varchar(150) NOT NULL DEFAULT '' AFTER cluster_name", 'add');
$this->alter_table('system', 'invoice_id', "invoice_id int(10) unsigned DEFAULT NULL");
$this->alter_table('system', 'man_purchase_invoice', "purchase_invoice varchar(50) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_purchase_order_number', "purchase_order_number varchar(50) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_purchase_cost_center', "purchase_cost_center varchar(50) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_purchase_vendor', "purchase_vendor varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_purchase_date', "purchase_date date NOT NULL DEFAULT '2000-01-01'");
$this->alter_table('system', 'man_purchase_service_contract_number', "purchase_service_contract_number varchar(255) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_lease_expiry_date', "lease_expiry_date date NOT NULL DEFAULT '2000-01-01'");
$this->alter_table('system', 'man_purchase_amount', "purchase_amount varchar(50) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_warranty_duration', "warranty_duration int(5) unsigned NOT NULL DEFAULT '0'");
$this->alter_table('system', 'man_warranty_expires', "warranty_expires date NOT NULL DEFAULT '2000-01-01'");
$this->alter_table('system', 'man_warranty_type', "warranty_type enum('','24x7x365','9x5x5','Next Business Day') NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_terminal_number', "DROP man_terminal_number", 'drop');
$this->alter_table('system', 'nmap_type', "DROP nmap_type", 'drop');
$this->alter_table('system', 'contact_id', "DROP contact_id", 'drop');
$this->alter_table('system', 'man_switch_id', "switch_system_id int(10) DEFAULT NULL");
$this->alter_table('system', 'man_switch_port', "switch_port int unsigned NOT NULL DEFAULT '0'");
$this->alter_table('system', 'man_patch_panel', "patch_panel varchar(45) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_patch_panel_port', "patch_panel_port_new int unsigned NOT NULL DEFAULT '0'");
$this->alter_table('system', 'patch_panel_port_new', "patch_panel_port int unsigned NOT NULL DEFAULT '0'");
$this->alter_table('system', 'man_wall_port', "wall_port varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_picture', "DROP man_picture", 'drop');
$this->alter_table('system', 'man_service_number', "service_number varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_service_provider', "service_provider varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_service_type', "service_type varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_service_plan', "service_plan varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_service_network', "service_network varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_unlock_pin', "unlock_pin varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_serial_imei', "serial_imei varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_serial_sim', "serial_sim varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('system', 'nmis_export', "nmis_export enum('true','false','y','n') NOT NULL DEFAULT 'false'");

$sql = "UPDATE system SET nmis_export = 'n' WHERE LOWER(nmis_export) ='false'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE system SET nmis_export = 'y' WHERE LOWER(nmis_export) ='true'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('system', 'nmis_export', "`nmis_export` enum('y','n') NOT NULL DEFAULT 'n'");
$this->alter_table('system', 'man_oae_manage', "`oae_manage` enum('y','n') NOT NULL DEFAULT 'y' AFTER nmis_export");
$this->alter_table('system', 'snmp_oid', "`snmp_oid` text NOT NULL AFTER oae_manage");
$this->alter_table('system', 'last_seen', "DROP last_seen", 'drop');
$this->alter_table('system', 'first_timestamp', "`first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER sysLocation");
$this->alter_table('system', 'timestamp', "`last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER first_seen");
$this->alter_table('system', 'last_seen_by', "`last_seen_by` varchar(150) NOT NULL DEFAULT '' AFTER first_seen");
$this->alter_table('system', 'last_user', "`last_user` varchar(150) NOT NULL DEFAULT '' AFTER last_seen_by");


$sql = "SHOW INDEX FROM `system` WHERE Key_name = 'ip'";
$query = $this->db->query($sql);
$result = $query->result();
if (count($result) === 0) {
    $this->add_key('system', 'ip');
}

$sql = "SHOW INDEX FROM `system` WHERE Key_name = 'name'";
$query = $this->db->query($sql);
$result = $query->result();
if (count($result) === 0) {
    $this->add_key('system', 'name');
}

# recreate the indexes
$tables = array('additional_field_item', 'attachment', 'audit_log', 'bios', 'change_log', 'disk', 'dns', 'graph', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'oa_group_sys', 'optical', 'pagefile', 'partition', 'print_queue', 'processor', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'sys_man_additional_fields_data', 'sys_man_attachment', 'sys_man_notes', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'warranty', 'windows');
foreach ($tables as $table) {
    $sql = "SHOW TABLES WHERE Tables_in_" . $this->db->database . " = '" . $table . "'";
    $query = $this->db->query($sql);
    $result = $query->result();
    if (count($result) === 1) {
        $sql = "SHOW COLUMNS FROM `" . $table . "` WHERE Field = 'system_id'";
        $query = $this->db->query($sql);
        $result = $query->result();
        if (count($result) === 1) {
            $sql = "DELETE FROM `" . $table . "` WHERE `" . $table . "`.`system_id` NOT IN (SELECT system.id FROM system)";
            $query = $this->db->query($sql);
            $this->log_db($this->db->last_query());
        }
    }
}

$this->add_foreign_key("audit_log", "audit_log_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("bios", "bios_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("change_log", "change_log_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("disk", "disk_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("dns", "dns_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("graph", "graph_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("ip", "ip_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("log", "log_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("memory", "memory_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("module", "module_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("monitor", "monitor_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("motherboard", "motherboard_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("netstat", "netstat_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("network", "network_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("oa_group_sys", "oa_group_sys_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("optical", "optical_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("pagefile", "pagefile_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("partition", "partition_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("print_queue", "print_queue_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("processor", "processor_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("route", "route_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("san", "san_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("scsi", "scsi_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("server", "server_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("server_item", "server_item_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("service", "service_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("share", "share_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("software", "software_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("software_key", "software_key_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("sound", "sound_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("sys_man_additional_fields_data", "additional_field_item_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("sys_man_attachment", "attachment_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("sys_man_notes", "notes_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("task", "task_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("user", "user_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("user_group", "user_group_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("variable", "variable_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("video", "video_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("vm", "vm_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("warranty", "warranty_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->add_foreign_key("windows", "windows_system_id", "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");

$this->rename_table('sys_man_attachment', 'attachment');
$this->alter_table('attachment', 'att_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('attachment', 'att_title', "title varchar(200) NOT NULL DEFAULT ''");
$this->alter_table('attachment', 'att_filename', "filename text NOT NULL");

$this->alter_table('change_log', 'details', "details text NOT NULL");

$this->rename_table('sys_man_invoice', 'invoice');
$this->alter_table('invoice', 'invoice_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('invoice', 'org_id', "org_id int(10) unsigned NOT NULL DEFAULT '0'");

$this->rename_table('sys_man_invoice_line', 'invoice_item');
$this->alter_table('invoice_item', 'line_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('invoice_item', 'system_id', "system_id int(10) unsigned DEFAULT NULL AFTER id");
$this->alter_table('invoice_item', 'man_serial', " serial varchar(200) NOT NULL DEFAULT ''");
$this->alter_table('invoice_item', 'man_asset_number', "asset_number varchar(200) NOT NULL DEFAULT ''");

$this->rename_table('sys_man_notes', 'notes');
$this->alter_table('notes', 'notes_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('notes', 'notes_title', "title varchar(200) NOT NULL DEFAULT ''");
$this->alter_table('notes', 'notes_text', "comment text NOT NULL DEFAULT ''");
$this->drop_foreign_key('notes', "sys_man_notes_user_id");

$this->rename_table('sys_man_additional_fields_data', 'additional_field_item');
$this->drop_foreign_key('additional_field_item', "sys_man_additional_fields_data_field_id");
$this->drop_key('additional_field_item', "sys_man_additional_fields_data_field_id");
$this->alter_table('additional_field_item', 'field_int', "DROP field_int", 'drop');
$this->alter_table('additional_field_item', 'field_memo', "DROP field_memo", 'drop');
$this->alter_table('additional_field_item', 'field_details_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('additional_field_item', 'field_id', "additional_field_id int(10) unsigned NOT NULL DEFAULT '0'");
$this->alter_table('additional_field_item', 'field_datetime', "`timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('additional_field_item', 'field_varchar', "value text NOT NULL DEFAULT ''");

$this->rename_table('sys_man_additional_fields', 'additional_field');
$this->alter_table('additional_field', 'field_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('additional_field', 'field_sys_type', "DROP field_sys_type", 'drop');
$this->alter_table('additional_field', 'field_derived_type', "DROP field_derived_type", 'drop');
$this->alter_table('additional_field', 'field_derived_sql', "DROP field_derived_sql", 'drop');
$this->alter_table('additional_field', 'field_name', "name varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('additional_field', 'field_type', "type enum('varchar','bool','int','memo','list','datetime','timestamp') NOT NULL DEFAULT 'varchar'");
$this->alter_table('additional_field', 'field_values', "`values` varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('additional_field', 'field_placement', "placement varchar(100) NOT NULL DEFAULT ''");

$this->drop_key('network', "timestamp");
$this->drop_foreign_key('edit_log', "edit_log_user_id");
$this->drop_key('edit_log', "user_id");
$this->add_key('edit_log', 'system_id');
$this->add_foreign_key('edit_log', 'edit_log_system_id', "FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE");
$this->drop_key('edit_log', "edit_log_system_id");
$this->drop_key('notes', "user_id");
$this->alter_table('oa_connection', 'connection_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('oa_group_column', 'column_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('oa_group_sys', 'group_sys_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('oa_group_user', 'group_user_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('oa_report_column', 'column_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->drop_key('service', "description");
$this->drop_foreign_key('oa_change', "oa_change_user_id");
$this->drop_key('oa_change', "oa_change_user_id");
$this->alter_table('oa_change', 'change_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('oa_change', 'change_short_desc', "title varchar(200) NOT NULL DEFAULT ''");
$this->alter_table('oa_change', 'change_reason', "reason text NOT NULL");
$this->alter_table('oa_change', 'change_planned_date', "planned_date datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('oa_change', 'change_implemented_date', "implemented_date datetime NOT NULL DEFAULT '2000-01-01 00:00:00'");
$this->alter_table('oa_change', 'change_external_id', "external_id varchar(200) NOT NULL DEFAULT ''");
$this->alter_table('oa_change', 'change_external_link', "external_link varchar(200) NOT NULL DEFAULT '' AFTER `external_id`");
$this->alter_table('oa_change', 'change_authorising_person', "authorized_by varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_change', 'change_performing_person', "performed_by varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_change', 'change_detailed_desc', "details text NOT NULL");
$this->alter_table('oa_change', 'change_potential_issues', "potential_issues text NOT NULL");
$this->alter_table('oa_change', 'change_backout_plan', "backout_plan text NOT NULL");

$this->drop_table('cluster');
$sql = "CREATE TABLE `cluster` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(200) NOT NULL DEFAULT '', `description` text NOT NULL, `org_id` int(10) unsigned NOT NULL DEFAULT '0', `type` enum('high availability', 'load balancing', 'perforance', 'storage', 'other'), `purpose` enum('application', 'database', 'file', 'virtualisation', 'web', 'other'), `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE system SET hostname = name";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE system SET dns_hostname = name";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE system SET dns_domain = domain";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
 
$sql = "DROP FUNCTION IF EXISTS cidr_to_mask";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE FUNCTION cidr_to_mask (cidr INT(2)) RETURNS CHAR(15) DETERMINISTIC RETURN INET_NTOA(CONV(CONCAT(REPEAT(1,cidr),REPEAT(0,32-cidr)),2,10))";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->drop_table('files');

$sql = "CREATE TABLE `files` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT, `org_id` int(10) unsigned NOT NULL DEFAULT '0', `path` varchar(45) NOT NULL DEFAULT '', `description` varchar(200) NOT NULL DEFAULT '', `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->drop_table('file');

$sql = "CREATE TABLE `file` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT, `system_id` int(10) unsigned DEFAULT NULL, `current` enum('y','n') NOT NULL DEFAULT 'y', `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', `files_id` int(10) unsigned DEFAULT NULL, `name` varchar(250) NOT NULL DEFAULT '', `full_name` text NOT NULL DEFAULT '', `size` int(10) unsigned NOT NULL DEFAULT '0', `directory` text NOT NULL DEFAULT '', `hash` varchar(250) NOT NULL DEFAULT '', `last_changed` varchar(100) NOT NULL DEFAULT '', `meta_last_changed` varchar(100) NOT NULL DEFAULT '', `permission` varchar(250) NOT NULL DEFAULT '', `owner` varchar(100) NOT NULL DEFAULT '', `group` varchar(100) NOT NULL DEFAULT '', `type` varchar(100) NOT NULL DEFAULT '', `version` varchar(100) NOT NULL DEFAULT '', `inode` bigint unsigned NOT NULL DEFAULT '0', PRIMARY KEY (`id`), KEY `system_id` (`system_id`), CONSTRAINT `file_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

            # fix a previous missed item
$this->alter_table('partition', 'type', "`type` varchar(100) NOT NULL DEFAULT 'local' AFTER bootable");

$this->drop_table('scripts');

$sql = "CREATE TABLE `scripts` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(250) NOT NULL DEFAULT '', `options` text NOT NULL DEFAULT '', `description` varchar(200) NOT NULL DEFAULT '', `based_on` varchar(200) NOT NULL DEFAULT '', `hash` varchar(250) NOT NULL DEFAULT '', `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
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

$sql = "INSERT INTO `scripts` VALUES (NULL, 'audit_aix.sh', '" . $options . "', 'The default audit AIX config.', 'audit_aix.sh', '', 'system', '2000-01-01 00:00:00')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `scripts` VALUES (NULL, 'audit_esx.sh', '" . $options . "', 'The default audit ESX config.', 'audit_esx.sh', '', 'system', '2000-01-01 00:00:00')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `scripts` VALUES (NULL, 'audit_linux.sh', '" . $options . "', 'The default audit Linux config.', 'audit_linux.sh', '', 'system', '2000-01-01 00:00:00')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `scripts` VALUES (NULL, 'audit_osx.sh', '" . $options . "', 'The default audit OSX config.', 'audit_osx.sh', '', 'system', '2000-01-01 00:00:00')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `scripts` VALUES (NULL, 'audit_windows.vbs', '" . $options . "', 'The default audit Windows config.', 'audit_windows.vbs', '', 'system', '2000-01-01 00:00:00')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE additional_field SET placement = 'custom' WHERE placement = 'view_summary_custom'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE additional_field SET placement = 'location' WHERE placement = 'view_summary_location'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE additional_field SET placement = 'network' WHERE placement = 'view_summary_network'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE additional_field SET placement = 'purchase' WHERE placement = 'view_summary_purchase'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE additional_field SET placement = 'san' WHERE placement = 'view_hardware_san'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE additional_field SET placement = 'san_disk' WHERE placement = 'view_hardware_san_disk'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE additional_field SET placement = 'system' WHERE placement = 'system_details'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE additional_field SET placement = 'windows' WHERE placement = 'view_summary_windows'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->drop_table('credential');

$sql = "CREATE TABLE `credential` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `system_id` int(10) unsigned DEFAULT NULL, `current` enum('y','n') NOT NULL DEFAULT 'y', `name` varchar(200) NOT NULL DEFAULT '', `description` text NOT NULL, `type` enum('aws','basic_auth','cim','ipmi','mysql','netapp','other','snmp','snmp_v3','sql_server','ssh','ssh_key','vmware','web','windows') NOT NULL DEFAULT 'other', `credentials` text NOT NULL, `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`), KEY `system_id` (`system_id`), CONSTRAINT `credential_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->drop_table('credentials');

$sql = "CREATE TABLE `credentials` (  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,  `name` varchar(200) NOT NULL DEFAULT '',  `description` text NOT NULL,  `type` enum('aws','basic_auth','cim','ipmi','mysql','netapp','other','snmp','snmp_v3','sql_server','ssh','ssh_key','vmware','web','windows') NOT NULL DEFAULT 'other',  `credentials` text NOT NULL, `org_id` int(10) unsigned NOT NULL DEFAULT '0', `edited_by` varchar(200) NOT NULL DEFAULT '',  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',  PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('oa_user_org', 'org_id', "`org_id` int(10) unsigned NOT NULL DEFAULT '0'");

// update any leftover group definitions by changing man_icon to icon
$sql = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'system.man_', 'system.')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'man_', 'system.')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'system.ip_address', 'system.ip')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'system.system_id', 'system.id')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'system.timestamp', 'system.last_seen')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE oa_group SET group_dynamic_select = REPLACE(group_dynamic_select, 'system.man_', 'system.')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE oa_group SET group_dynamic_select = REPLACE(group_dynamic_select, 'man_', 'system.')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE oa_group SET group_dynamic_select = REPLACE(group_dynamic_select, 'system.ip_address', 'system.ip')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE oa_group SET group_dynamic_select = REPLACE(group_dynamic_select, 'system.system_id', 'system.id')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE oa_group SET group_dynamic_select = REPLACE(group_dynamic_select, 'system.timestamp', 'system.last_seen')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());


$this->drop_table('nmap');
$sql = "CREATE TABLE `nmap` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT, `system_id` int(10) unsigned DEFAULT NULL,`current` enum('y','n') NOT NULL DEFAULT 'y', `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', `protocol` enum('tcp','udp','tcp6','udp6','tcp4','udp4','') NOT NULL DEFAULT '', `ip` varchar(45) NOT NULL DEFAULT '', `port` int(5) NOT NULL DEFAULT '0', `program` varchar(250) NOT NULL DEFAULT '', PRIMARY KEY (`id`), KEY `system_id` (`system_id`),CONSTRAINT `nmap_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

# set our versions
$sql = "DELETE FROM `oa_config` WHERE config_name = 'discovery_use_dns'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `oa_config` VALUES ('discovery_use_dns','y','y',NOW(),0,'Should we use DNS for looking up the hostname and domain.')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `oa_config` VALUES ('maps_api_key','AIzaSyAhAUqssRASeC0Pfyx1TW1DXRmboG5bdG0','y',NOW(),0,'The API key for Google Maps.')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

# Move of default config values for credentials into credential sets
$this->load->model('m_configuration');
$this->m_configuration->load();
$this->load->model('m_credentials');
$this->load->library('encrypt');
$this->response = new stdClass();
$this->response->meta = new stdClass();
$this->response->meta->received_data = new stdClass();
$this->response->meta->received_data->attributes = new stdClass();
if (!empty($this->config->config['default_snmp_community'])) {
    unset($this->response->meta->received_data->attributes->credentials);
    $this->response->meta->received_data->attributes->credentials = new stdClass();
    $this->response->meta->received_data->attributes->name = 'Default SNMP';
    $this->response->meta->received_data->attributes->description = 'Migrated from configuration.';
    $this->response->meta->received_data->attributes->org_id = 1;
    $this->response->meta->received_data->attributes->type = 'snmp';
    $this->response->meta->received_data->attributes->credentials = new stdClass();
    $this->response->meta->received_data->attributes->credentials->community = $this->config->config['default_snmp_community'];
    if ($this->m_credentials->create()) {
        $this->log_db("Default SNMP community migrated into credentials.");
    } else {
        $this->log_db("Could not migrate default SNMP community into credentials. Please add this to the credential sets.");
    }
}
if (!empty($this->config->config['default_ssh_username']) and !empty($this->config->config['default_ssh_password'])) {
    unset($this->response->meta->received_data->attributes->credentials);
    $this->response->meta->received_data->attributes->credentials = new stdClass();
    $this->response->meta->received_data->attributes->name = 'Default SSH';
    $this->response->meta->received_data->attributes->description = 'Migrated from configuration.';
    $this->response->meta->received_data->attributes->org_id = 1;
    $this->response->meta->received_data->attributes->type = 'ssh';
    $this->response->meta->received_data->attributes->credentials->username = $this->config->config['default_ssh_username'];
    $this->response->meta->received_data->attributes->credentials->password = $this->config->config['default_ssh_password'];
    if ($id =$this->m_credentials->create()) {
        $this->log_db("Default SSH username and password migrated into credentials.");
    } else {
        $this->log_db("Could not migrate default SSH username and password into credentials. Please add this to the credential sets.");
    }
}
if (!empty($this->config->config['default_windows_username']) and !empty($this->config->config['default_windows_password'])) {
    unset($this->response->meta->received_data->attributes->credentials);
    $this->response->meta->received_data->attributes->credentials = new stdClass();
    $this->response->meta->received_data->attributes->name = 'Default Windows';
    $this->response->meta->received_data->attributes->description = 'Migrated from configuration.';
    $this->response->meta->received_data->attributes->org_id = 1;
    $this->response->meta->received_data->attributes->type = 'windows';
    $this->response->meta->received_data->attributes->credentials->username = $this->config->config['default_windows_username'] . '@' . $this->config->config['default_windows_domain'];
    $this->response->meta->received_data->attributes->credentials->password = $this->config->config['default_windows_password'];
    if ($id =$this->m_credentials->create()) {
        $this->log_db("Default Windows username and password migrated into credentials.");
    } else {
        $this->log_db("Could not migrate default Windows username and password into credentials. Please add this to the credential sets.");
    }
}
if (!empty($this->config->config['default_ipmi_username']) and !empty($this->config->config['default_ipmi_password'])) {
    unset($this->response->meta->received_data->attributes->credentials);
    $this->response->meta->received_data->attributes->credentials = new stdClass();
    $this->response->meta->received_data->attributes->name = 'Default IPMI';
    $this->response->meta->received_data->attributes->description = 'Migrated from configuration.';
    $this->response->meta->received_data->attributes->org_id = 0;
    $this->response->meta->received_data->attributes->type = 'ipmi';
    $this->response->meta->received_data->attributes->credentials->username = $this->config->config['default_ipmi_username'];
    $this->response->meta->received_data->attributes->credentials->password = $this->config->config['default_ipmi_password'];
    if ($id =$this->m_credentials->create()) {
        $this->log_db("Default IPMI username and password migrated into credentials.");
    } else {
        $this->log_db("Could not migrate default IPMI username and password into credentials. Please add this to the credential sets.");
    }
}

$sql = "DELETE FROM oa_config WHERE config_name IN ('default_ipmi_password', 'default_ipmi_username', 'default_snmp_community', 'default_ssh_password', 'default_ssh_username', 'default_windows_username', 'default_windows_domain', 'default_windows_password')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# populate our new credential table with the system.access_details columns
$sql = "SELECT NOW() as `timestamp`";
$query = $this->db->query($sql);
$result = $query->result();
$timestamp = $result[0]->timestamp;
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `credential`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "SELECT id, access_details FROM system WHERE access_details != ''";
$query = $this->db->query($sql);
$result = $query->result();
$this->log_db($this->db->last_query());

foreach ($result as $device) {
    $creds = $this->encrypt->decode($device->access_details);
    $creds = json_decode($creds);
    $newcreds = array();
    if (!empty($creds->snmp_community)) {
        $cred = new stdClass();
        $cred->community = $creds->snmp_community;
        $credentials = (string)$this->encrypt->encode(json_encode($cred));
        $sql = "INSERT INTO credential VALUES (NULL, ?, 'y', 'Device SNMP credentials.', 'Migrated from device upon upgrade.', 'snmp', ?, 'system', ?)";
        $data = array(intval($device->id), (string)$credentials, "$timestamp");
        $this->db->query($sql, $data);
        $this->log_db($this->db->last_query());
        unset($cred);
        unset($credentials);
    }
    if (!empty($creds->windows_username)) {
        $cred = new stdClass();
        $cred->username = $creds->windows_username . '@' . $creds->windows_domain;
        $cred->password = $creds->windows_password;
        $credentials = (string)$this->encrypt->encode(json_encode($cred));
        $sql = "INSERT INTO credential VALUES (NULL, ?, 'y', 'Device Windows credentials.', 'Migrated from device upon upgrade.', 'windows', ?, 'system', ?)";
        $data = array(intval($device->id), (string)$credentials, "$timestamp");
        $this->db->query($sql, $data);
        $this->log_db($this->db->last_query());
        unset($cred);
        unset($credentials);
    }
    if (!empty($creds->ssh_username)) {
        $cred = new stdClass();
        $cred->username = $creds->ssh_username;
        $cred->password = $creds->ssh_password;
        $credentials = (string)$this->encrypt->encode(json_encode($cred));
        $sql = "INSERT INTO credential VALUES (NULL, ?, 'y', 'Device SSH credentials.', 'Migrated from device upon upgrade.', 'ssh', ?, 'system', ?)";
        $data = array(intval($device->id), (string)$credentials, "$timestamp");
        $this->db->query($sql, $data);
        $this->log_db($this->db->last_query());
        unset($cred);
        unset($credentials);
    }
}

$this->alter_table('system', 'access_details', "DROP access_details", 'drop');

# set our versions
if ($this->db->table_exists('oa_config')) {
    $sql = "UPDATE `oa_config` SET `config_value` = '20160620' WHERE `config_name` = 'internal_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
} elseif ($this->db->table_exists('configuration')) {
    $sql = "UPDATE `configuration` SET `value` = '20160620' WHERE `name` = 'internal_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
}

if ($this->db->table_exists('oa_config')) {
    $sql = "UPDATE oa_config SET config_value = '1.12.8' WHERE `config_name` = 'display_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
} elseif ($this->db->table_exists('configuration')) {
    $sql = "UPDATE `configuration` SET `value` = '1.12.8' WHERE `name` = 'display_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
}

$this->log_db('Upgrade database to 1.12.8 completed');
$this->config->config['internal_version'] = '20160620';
$this->config->config['display_version'] = '1.12.8';
