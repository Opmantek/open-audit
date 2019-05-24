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
CREATE INDEX audit_log_system_id_type ON audit_log (`system_id`, `type`);
CREATE INDEX change_log_timestamp ON change_log (`timestamp`);
CREATE INDEX change_log_db_table ON change_log (`db_table`);
CREATE INDEX change_log_db_action ON change_log (`db_action`);
ALTER TABLE `system` ADD `snmp_version` varchar(10) NOT NULL DEFAULT '' AFTER `sysLocation`;
DELETE FROM `configuration` WHERE `name` = 'discovery_use_vintage_service';
INSERT INTO `configuration` VALUES (NULL,'discovery_use_vintage_service','n','bool','y','system','2000-01-01 00:00:00','On Windows, use the old way of running discovery with the Apache service account.');
UPDATE `configuration` SET `value` = 'y', `type` = 'bool', description = 'Tells Open-AudIT to advise the browser to download as a file or display the csv, xml, json reports.' WHERE `name` = 'download_reports'
DELETE FROM `configuration` WHERE `name` = 'discovery_create_alerts';
DELETE FROM `configuration` WHERE `name` LIKE 'create_change_log%';
INSERT INTO `configuration` VALUES (NULL,'create_change_log','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_bios','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the bios table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_disk','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the disk table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_dns','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the dns table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_file','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the file table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_ip','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the ip table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_log','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the log table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_memory','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the memory table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_module','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the module table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_monitor','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the monitor table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_motherboad','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the motherboard table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_network','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the network table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_nmap','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the nmap table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_well_known','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is 1023 or lower.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_registered','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is in the range of 1024 to 49151.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_dynamic','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is 49152 or greater.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_optical','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the optical table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_pagefile','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the pagefile table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_partition','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the partition table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_policy','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the policy table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_print_queue','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the print_queue table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_processor','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the processor table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_route','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the route table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_san','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the san table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_scsi','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the scsi table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_server','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the server table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_server_item','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the server_item table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_service','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the service table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_share','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the share table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_software','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the software table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_software_key','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the software_key table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_sound','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the sound table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_task','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the task table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_user','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the user table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_user_group','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the user_group table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_variable','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the variable table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_video','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the video table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_vm','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the vm table.');
INSERT INTO `configuration` VALUES (NULL,'create_change_log_windows','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the windows table.');
DELETE FROM `configuration` WHERE `name` LIKE 'delete_noncurrent%';
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent','n','bool','y','system','2000-01-01 00:00:00','Should we delete all non-current data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_bios','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current bios data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_disk','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current disk data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_dns','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current dns data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_file','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current file data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_ip','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current ip data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_log','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current log data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_memory','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current memory data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_module','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current module data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_monitor','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current monitor data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_motherboard','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current motherboard data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_netstat','y','bool','y','system','2000-01-01 00:00:00','Should we delete non-current netstat data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_network','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current network data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_nmap','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current nmap data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_optical','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current optical data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_pagefile','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current pagefile data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_partition','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current partition data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_policy','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current policy data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_print_queue','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current print_queue data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_processor','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current processor data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_route','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current route data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_san','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current san data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_scsi','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current scsi data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_server','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current server data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_server_item','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current server_item data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_service','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current service data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_share','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current share data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_software','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current software data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_software_key','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current software_key data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_sound','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current sound data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_task','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current task data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_user','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current user data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_user_group','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current user_group data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_variable','y','bool','y','system','2000-01-01 00:00:00','Should we delete non-current variable data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_video','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current video data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_vm','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current vm data.');
INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_windows','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current windows data.');

UPDATE `configuration` SET `value` = '20190512' WHERE `name` = 'internal_version';
UPDATE `configuration` SET `value` = '3.1.0' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 3.1.0 commenced');

$audit_log_system_id_type = false;
$sql = "SHOW INDEX FROM `audit_log`";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
if ($query->num_rows() > 0) {
	$result = $query->result();
	foreach ($result as $row) {
		if ($row->Key_name === 'audit_log_system_id_type') {
			$audit_log_system_id_type = true;
		}
	}
}

if ($audit_log_system_id_type) {
	$sql = "DROP INDEX audit_log_system_id_type ON audit_log";
	$this->db->query($sql);
	$this->log_db($this->db->last_query());
}

$sql = "CREATE INDEX audit_log_system_id_type ON audit_log (`system_id`, `type`)";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$change_log_timestamp = false;
$change_log_db_table = false;
$change_log_db_action = false;
$sql = "SHOW INDEX FROM `change_log`";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
if ($query->num_rows() > 0) {
	$result = $query->result();
	foreach ($result as $row) {
		if ($row->Key_name === 'change_log_timestamp') {
			$change_log_timestamp = true;
		}
		if ($row->Key_name === 'change_log_db_table') {
			$change_log_db_table = true;
		}
		if ($row->Key_name === 'change_log_db_action') {
			$change_log_db_action = true;
		}
	}
}

if ($change_log_timestamp) {
	$sql = "DROP INDEX change_log_timestamp ON change_log";
	$this->db->query($sql);
	$this->log_db($this->db->last_query());
}

if ($change_log_db_table) {
	$sql = "DROP INDEX change_log_db_table ON change_log";
	$this->db->query($sql);
	$this->log_db($this->db->last_query());
}

if ($change_log_db_action) {
	$sql = "DROP INDEX change_log_db_action ON change_log";
	$this->db->query($sql);
	$this->log_db($this->db->last_query());
}

$sql = "CREATE INDEX change_log_timestamp ON change_log (`timestamp`)";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE INDEX change_log_db_table ON change_log (`db_table`)";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE INDEX change_log_db_action ON change_log (`db_action`)";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('system', 'snmp_version', "ADD `snmp_version` varchar(10) NOT NULL DEFAULT '' AFTER `sysLocation`", 'add');

# change our download_reports option
$sql = "SELECT * FROM `configuration` WHERE `name` = 'download_reports'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
$result = $query->result();
$value = 'y';
if (!empty($result[0]->value)) {
	if ($result[0]->value != 'download') {
		$value = 'n';
	}
}
$sql = "UPDATE `configuration` SET `value` = '$value', `type` = 'bool', description = 'Tells Open-AudIT to advise the browser to download as a file or display the csv, xml, json reports.' WHERE `name` = 'download_reports'";
$query = $this->db->query($sql);

# new config item to allow 'old' way of working
$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_use_vintage_service'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_use_vintage_service','n','bool','y','system','2000-01-01 00:00:00','On Windows, use the old way of running discovery with the Apache service account.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# remove no longer required config item (replaced by create_change_log items below)
$sql = "SELECT * FROM `configuration` WHERE `name` = 'discovery_create_alerts'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
$result = $query->result();
$value = 'y';
if (!empty($result[0]->value)) {
	$value = $result[0]->value;
}

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_create_alerts'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# new change log and 'current' config items
$sql = "DELETE FROM `configuration` WHERE `name` LIKE 'create_change_log%'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log','" . $value . "','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_bios','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the bios table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_disk','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the disk table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_dns','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the dns table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_file','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the file table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_ip','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the ip table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_log','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the log table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_memory','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the memory table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_module','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the module table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_monitor','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the monitor table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_motherboad','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the motherboard table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_network','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the network table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_nmap','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the nmap table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_well_known','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is 1023 or lower.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_registered','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is in the range of 1024 to 49151.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_dynamic','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is 49152 or greater.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_optical','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the optical table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_pagefile','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the pagefile table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_partition','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the partition table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_policy','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the policy table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_print_queue','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the print_queue table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_processor','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the processor table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_route','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the route table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_san','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the san table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_scsi','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the scsi table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_server','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the server table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_server_item','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the server_item table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_service','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the service table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_share','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the share table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_software','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the software table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_software_key','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the software_key table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_sound','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the sound table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_task','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the task table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_user','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the user table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_user_group','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the user_group table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_variable','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the variable table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_video','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the video table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_vm','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the vm table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_windows','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the windows table.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` LIKE 'delete_noncurrent%'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent','n','bool','y','system','2000-01-01 00:00:00','Should we delete all non-current data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_bios','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current bios data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_disk','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current disk data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_dns','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current dns data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_file','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current file data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_ip','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current ip data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_log','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current log data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_memory','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current memory data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_module','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current module data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_monitor','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current monitor data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_motherboard','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current motherboard data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_netstat','y','bool','y','system','2000-01-01 00:00:00','Should we delete non-current netstat data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_network','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current network data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_nmap','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current nmap data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_optical','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current optical data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_pagefile','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current pagefile data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_partition','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current partition data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_policy','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current policy data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_print_queue','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current print_queue data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_processor','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current processor data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_route','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current route data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_san','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current san data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_scsi','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current scsi data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_server','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current server data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_server_item','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current server_item data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_service','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current service data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_share','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current share data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_software','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current software data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_software_key','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current software_key data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_sound','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current sound data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_task','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current task data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_user','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current user data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_user_group','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current user_group data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_variable','y','bool','y','system','2000-01-01 00:00:00','Should we delete non-current variable data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_video','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current video data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_vm','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current vm data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_windows','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current windows data.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());


# set our versions
$sql = "UPDATE `configuration` SET `value` = '20190512' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '3.1.0' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 3.1.0 completed");
$this->config->config['internal_version'] = '20190512';
$this->config->config['display_version'] = '3.1.0';
