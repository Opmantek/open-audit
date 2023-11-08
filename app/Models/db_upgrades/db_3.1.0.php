<?php
$output .= "Upgrade database to 3.1.0 commenced.\n\n";


$sql = "DELETE FROM `attributes` WHERE `resource` = 'locations' AND `type` = 'type' AND `name` = 'Cloud Region'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `attributes` WHERE `resource` = 'locations' AND `type` = 'type' AND `name` = 'Cloud Zone'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Cloud Region','Cloud Region','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `attributes` VALUES (NULL,1,'locations','type','Cloud Zone','Cloud Zone','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$audit_log_system_id_type = false;
$sql = "SHOW INDEX FROM `audit_log`";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
if (count($result) > 0) {
    foreach ($result as $row) {
        if ($row->Key_name === 'audit_log_system_id_type') {
            $audit_log_system_id_type = true;
        }
    }
}

if ($audit_log_system_id_type) {
    $sql = "DROP INDEX audit_log_system_id_type ON audit_log";
    $this->db->query($sql);
    $this->log_db($this->db->last_query() . ';');
}

$sql = "CREATE INDEX audit_log_system_id_type ON audit_log (`system_id`, `type`)";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$change_log_timestamp = false;
$change_log_db_table = false;
$change_log_db_action = false;
$sql = "SHOW INDEX FROM `change_log`";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
if (count($result) > 0) {
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
    $this->log_db($this->db->last_query() . ';');
}

if ($change_log_db_table) {
    $sql = "DROP INDEX change_log_db_table ON change_log";
    $this->db->query($sql);
    $this->log_db($this->db->last_query() . ';');
}

if ($change_log_db_action) {
    $sql = "DROP INDEX change_log_db_action ON change_log";
    $this->db->query($sql);
    $this->log_db($this->db->last_query() . ';');
}

$sql = "CREATE INDEX change_log_timestamp ON change_log (`timestamp`)";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE INDEX change_log_db_table ON change_log (`db_table`)";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE INDEX change_log_db_action ON change_log (`db_action`)";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('snmp_version', 'system')) {
    $sql = "ALTER TABLE `system` ADD `snmp_version` varchar(10) NOT NULL DEFAULT '' AFTER `sysLocation`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "UPDATE `configuration` SET `value` = 'y', `type` = 'bool', description = 'Tells Open-AudIT to advise the browser to download as a file or display the csv, xml, json reports.' WHERE `name` = 'download_reports' AND value = 'download'";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

# new config item to allow 'old' way of working
$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_use_vintage_service'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_use_vintage_service','n','bool','y','system','2000-01-01 00:00:00','On Windows, use the old way of running discovery with the Apache service account.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = 'n', `type` = 'bool', description = 'Tells Open-AudIT to advise the browser to download as a file or display the csv, xml, json reports.' WHERE `name` = 'download_reports' AND value != 'y'";
$query = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

# remove no longer required config item (replaced by create_change_log items below)
$sql = "UPDATE `configuration` SET `name` = 'create_change_log', `value` = 'y', `type` = 'bool', `description` = 'Should Open-AudIT create an entry in the change log table if a change is detected.' WHERE `name` = 'discovery_create_alerts' and `value` != 'n'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `name` = 'create_change_log', `value` = 'n', `type` = 'bool', `description` = 'Should Open-AudIT create an entry in the change log table if a change is detected.' WHERE `name` = 'discovery_create_alerts' and `value` != 'y'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` LIKE 'create_change_log_%'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_bios','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the bios table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_disk','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the disk table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_dns','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the dns table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_file','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the file table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_ip','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the ip table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_log','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the log table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_memory','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the memory table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_module','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the module table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_monitor','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the monitor table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_motherboad','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the motherboard table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_network','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the network table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_nmap','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the nmap table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_well_known','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is 1023 or lower.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_registered','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is in the range of 1024 to 49151.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_netstat_dynamic','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the netstat table and the port is 49152 or greater.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_optical','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the optical table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_pagefile','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the pagefile table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_partition','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the partition table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_policy','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the policy table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_print_queue','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the print_queue table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_processor','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the processor table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_route','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the route table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_san','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the san table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_scsi','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the scsi table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_server','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the server table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_server_item','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the server_item table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_service','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the service table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_share','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the share table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_software','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the software table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_software_key','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the software_key table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_sound','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the sound table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_task','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the task table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_user','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the user table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_user_group','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the user_group table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_variable','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the variable table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_video','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the video table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_vm','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the vm table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'create_change_log_windows','y','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in the change log table if a change is detected in the windows table.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` LIKE 'delete_noncurrent%'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent','n','bool','y','system','2000-01-01 00:00:00','Should we delete all non-current data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_bios','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current bios data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_disk','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current disk data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_dns','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current dns data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_file','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current file data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_ip','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current ip data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_log','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current log data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_memory','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current memory data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_module','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current module data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_monitor','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current monitor data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_motherboard','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current motherboard data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_netstat','y','bool','y','system','2000-01-01 00:00:00','Should we delete non-current netstat data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_network','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current network data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_nmap','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current nmap data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_optical','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current optical data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_pagefile','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current pagefile data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_partition','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current partition data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_policy','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current policy data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_print_queue','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current print_queue data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_processor','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current processor data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_route','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current route data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_san','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current san data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_scsi','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current scsi data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_server','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current server data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_server_item','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current server_item data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_service','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current service data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_share','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current share data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_software','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current software data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_software_key','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current software_key data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_sound','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current sound data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_task','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current task data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_user','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current user data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_user_group','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current user_group data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_variable','y','bool','y','system','2000-01-01 00:00:00','Should we delete non-current variable data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_video','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current video data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_vm','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current vm data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'delete_noncurrent_windows','n','bool','y','system','2000-01-01 00:00:00','Should we delete non-current windows data.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` LIKE 'match_sysname%'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'match_sysname','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based only on its SNMP sysName.')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'match_sysname_serial','y','bool','y','system','2000-01-01 00:00:00','Should we match a device based only on its SNMP sysName and serial.');";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if ($db->fieldExists('value', 'policy')) {
    $sql = "ALTER TABLE `policy` CHANGE `value` `value` TEXT NOT NULL";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DELETE FROM `queries` WHERE `name` = 'Integration Default for NMIS'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'Integration Default for NMIS','Other','y','The default query for integration with NMIS. Uses all devices with nmis_manage set to y.','SELECT system.id AS `system.id`, system.name AS `system.name`, system.hostname AS `system.hostname`, system.dns_hostname AS `system.dns_hostname`, system.fqdn AS `system.fqdn`, system.ip AS `system.ip`, system.type AS `system.type`, system.credentials AS `system.credentials`, system.nmis_group AS `system.nmis_group`, system.nmis_name AS `system.nmis_name`, system.nmis_role AS `system.nmis_role`, system.nmis_manage AS `system.nmis_manage`, system.nmis_business_service AS `system.nmis_business_service`, system.nmis_poller AS `system.nmis_poller`, system.snmp_version AS `system.snmp_version`, system.omk_uuid AS `system.omk_uuid`, locations.name AS `locations.name`, IF(system.snmp_version != \'\', \'true\', \'false\') AS `system.collect_snmp`, IF(system.os_group LIKE \'%windows%\', \'true\', \'false\') AS `system.collect_wmi` FROM `system` LEFT JOIN `locations` ON system.location_id = locations.id WHERE @filter AND system.nmis_manage = \'y\'','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `queries` WHERE `name` = 'MS Office'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'MS Office','Software','y','MS Office installations.','SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.name AS `system.name`, system.domain AS `system.domain`, system.os_family AS `system.os_family`, orgs.name AS `orgs.name`, windows.user_name AS `windows.user_name`, software.name as `software.name` FROM software LEFT JOIN system ON (software.system_id = system.id) LEFT JOIN orgs ON (orgs.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = \'y\') WHERE @filter AND software.current = \'y\' AND software.name LIKE \'Microsoft Office%\' AND (software.name LIKE \'%Starter%\' OR software.name LIKE \'%Basic%\' OR software.name LIKE \'%Personal%\' OR software.name LIKE \'%Home%\' OR software.name LIKE \'%Student%\' OR software.name LIKE \'%Business%\' OR software.name LIKE \'%Standard%\' OR software.name LIKE \'%Ultimate%\' OR software.name LIKE \'%Enterprise%\' OR software.name LIKE \'%Professional%\' OR software.name LIKE \'%Professional Plus%\') AND (software.name LIKE \'%2003%\' OR software.name LIKE \'%2007%\' OR software.name LIKE \'%2010%\' OR software.name LIKE \'%2013%\' OR software.name LIKE \'%2016%\' OR software.name LIKE \'%365%\')','','system','2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `integrations`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `integrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'nmis',
  `options` longtext NOT NULL,
  `last_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20190512' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '3.1.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 3.1.0 completed.\n\n";
config('Openaudit')->internal_version = 20190512;
config('Openaudit')->display_version = '3.1.0';
