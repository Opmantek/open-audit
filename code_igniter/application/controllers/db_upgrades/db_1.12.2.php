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

$this->db_log('Upgrade database to 1.12.2 commenced');

$sql = "UPDATE system SET man_class = 'virtual server' WHERE (manufacturer LIKE '%vmware%' OR manufacturer LIKE '%Parallels%') AND os_family IN ('Windows 2008', 'Windows 2012', 'Windows 2003')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE system SET man_class = 'hypervisor' WHERE os_family LIKE 'VMware ESX%'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE system SET man_class = 'virtual desktop' WHERE manufacturer LIKE '%vmware%' AND os_family IN ('Windows XP', 'Windows 7', 'Windows 8', 'Windows 10')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "DELETE FROM `oa_config` WHERE config_name = 'discovery_mac_match'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `oa_config` VALUES ('discovery_mac_match','n','y',NOW(),0,'Should we match a device based only on its mac address during discovery.')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "DELETE FROM `oa_config` WHERE config_name = 'discovery_linux_script_directory'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `oa_config` VALUES ('discovery_linux_script_directory','/tmp/','y',NOW(),0,'The directory the script is copied into on the target device.')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "DELETE FROM `oa_config` WHERE config_name = 'discovery_linux_script_permissions'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `oa_config` VALUES ('discovery_linux_script_permissions','700','y',NOW(),0,'The permissions set on the audit_linux.sh script when it is copied to the target device.')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "DELETE FROM `oa_config` WHERE config_name = 'discovery_nmap_os'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO `oa_config` VALUES ('discovery_nmap_os','n','y',NOW(),0,'When discovery runs Nmap, should we use the -O flag to capture OS information (will slow down scan and requires SUID on the Nmap binary under Linux).')";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->alter_table('oa_user', 'permissions', "permissions text NOT NULL default ''", 'add');

$sql = "UPDATE oa_org SET org_name = 'Default Organisation' WHERE org_name = '' AND org_id = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE oa_org SET org_comments = '' WHERE org_comments = 'Default Organisation.' AND org_id = 0";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->drop_table('oa_user_org');

$sql = "CREATE TABLE `oa_user_org` (
          `id` int(10) NOT NULL AUTO_INCREMENT,
          `user_id` int(10) unsigned NOT NULL,
          `org_id` int(10) unsigned NOT NULL,
          `access_level` int(10) unsigned NOT NULL,
          `permissions` text NOT NULL DEFAULT '',
          PRIMARY KEY (`id`),
          KEY `user_id` (`user_id`),
          KEY `org_id` (`org_id`),
          CONSTRAINT `oa_user_org_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE,
          CONSTRAINT `oa_user_org_org_id` FOREIGN KEY (`org_id`) REFERENCES `oa_org` (`org_id`) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "INSERT INTO oa_user_org (SELECT NULL, oa_user.user_id, 0, 10, '' FROM oa_user LEFT JOIN oa_group_user ON (oa_user.user_id = oa_group_user.user_id AND oa_group_user.group_user_access_level = 10) WHERE oa_user.user_admin = 'y' OR oa_group_user.group_id = 1 GROUP BY oa_user.user_id)";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->drop_table('ip');

$sql = "CREATE TABLE `ip` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `current` enum('y','n') NOT NULL DEFAULT 'y',
  `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `mac` varchar(200) NOT NULL DEFAULT '',
  `net_index` varchar(10) NOT NULL DEFAULT '',
  `ip` varchar(45) NOT NULL DEFAULT '',
  `netmask` varchar(30) NOT NULL DEFAULT '',
  `cidr` varchar(4) NOT NULL DEFAULT '',
  `version` tinyint(3) unsigned NOT NULL DEFAULT '4',
  `network` varchar(40) NOT NULL DEFAULT '',
  `set_by` enum('','dhcp','static','auto','local') NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  KEY `mac` (`mac`),
  CONSTRAINT `ip_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

if ($this->db->table_exists('sys_hw_network_card_ip')) {
    $sql = "INSERT INTO ip (SELECT NULL, system_id, 'y', first_timestamp, `timestamp`, net_mac_address, net_index, ip_address_v4, ip_subnet, NULL, '4', '', '' FROM sys_hw_network_card_ip WHERE ip_address_version = '4')";
    $query = $this->db->query($sql);
    $this->db_log($this->db->last_query());

    $sql = "INSERT INTO ip (SELECT NULL, system_id, 'y', first_timestamp, `timestamp`, net_mac_address, net_index, ip_address_v6, NULL, ip_subnet, '6', '', '' FROM sys_hw_network_card_ip WHERE ip_address_version = '6')";
    $query = $this->db->query($sql);
    $this->db_log($this->db->last_query());
}

$this->drop_table('sys_hw_network_card_ip');

$sql = "UPDATE oa_config SET config_value = '20160303' WHERE config_name = 'internal_version'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE oa_config SET config_value = '1.12.2' WHERE config_name = 'display_version'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

// update the network groups
if ($this->db->table_exists('oa_group')) {
    $this->data['output'] .= "Converting network groups.<br /><br />\n";
    $sql = "SELECT group_id, group_dynamic_select, group_name FROM oa_group WHERE group_category = 'network'";
    $query = $this->db->query($sql);
    $result = $query->result();
    $this->db_log($this->db->last_query());
    foreach ($result as $group) {
        $dynamic_select = $group->group_dynamic_select;
        $dynamic_select = str_replace("SELECT distinct(system.system_id) FROM system, sys_hw_network_card_ip", "SELECT distinct(system.system_id) FROM system, ip", $dynamic_select);
        $dynamic_select = str_replace("WHERE ( sys_hw_network_card_ip", "WHERE ( ip.version = '4' AND ip", $dynamic_select);
        $dynamic_select = str_replace("sys_hw_network_card_ip.ip_address_v4", "ip.ip", $dynamic_select);
        $dynamic_select = str_replace("sys_hw_network_card_ip.ip_subnet", "ip.netmask", $dynamic_select);
        $dynamic_select = str_replace("sys_hw_network_card_ip.timestamp = system.timestamp", "ip.current = 'y'", $dynamic_select);
        $dynamic_select = str_replace("oa_group_sys.group_id = ?", "oa_group_sys.group_id = @group", $dynamic_select);
        $dynamic_select = str_replace("ip.ip_address_v4", "ip.ip", $dynamic_select);
        $dynamic_select = str_replace("sys_hw_network_card_ip.system_id", "ip.system_id", $dynamic_select);
        $sql = "UPDATE oa_group SET group_dynamic_select = \"" . $dynamic_select . "\" WHERE group_id = " . intval($group->group_id);
        $query = $this->db->query($sql);
        $this->db_log($this->db->last_query());
    }
}
# remove any groups that are using sys_hw_network_card_ip
if ($this->db->table_exists('oa_group')) {
    $sql = "SELECT group_name, group_dynamic_select from oa_group WHERE group_dynamic_select like '%sys_hw_network_card_ip%'";
    $query = $this->db->query($sql);
    $result = $query->result();
    $this->db_log($this->db->last_query());
    foreach ($result as $row) {
        $this->data['output'] .= 'WARNING - the folloing group has been deleted as it used incompatible SQL. We no longer have a table named sys_hw_network_ip_address (it is now \'ip\' with renamed columns). Please recreate this group: ' . $row->group_name . '\n<br />The SQL for this group was: ' . $row->group_dynamic_select . "<br /><br />\n";
    }
    $sql = "DELETE oa_group FROM oa_group WHERE group_dynamic_select like '%sys_hw_network_card_ip%'";
    $query = $this->db->query($sql);
    $this->db_log($this->db->last_query());
}

# remove any incorrectly formatted netmasks
if ($this->db->table_exists('ip')) {
    $sql = "UPDATE ip SET netmask = '0.0.0.0' WHERE netmask = '000.000.000.000'";
    $this->db->query($sql);
    $this->db_log($this->db->last_query());
}

# get all our candidate ip addresses and add a network name and a CIDR
$sql = "SELECT * FROM ip WHERE ip.ip != '' AND ip.netmask != '' AND ip.netmask != '0.0.0.0' AND ip.version = 4 and ip.network = ''";
$query = $this->db->query($sql);
$result = $query->result();
$this->db_log($this->db->last_query());
foreach ($result as $row) {
    $temp_long = ip2long($row->netmask);
    $temp_base = ip2long('255.255.255.255');
    $temp_cidr = 32-log(($temp_long ^ $temp_base)+1, 2);
    $network_details = network_details($row->ip.'/'.$temp_cidr);
    if (isset($network_details) and isset($network_details->network) and $network_details->network != '') {
        $temp_network = $network_details->network.' / '.$temp_cidr;
        $sql = "UPDATE ip SET network = ?, cidr = ? WHERE id = ?";
        $data = array("$temp_network", "$temp_cidr", $row->id);
        $this->db->query($sql, $data);
        $this->db_log($this->db->last_query());
    }
    unset($temp_long);
    unset($temp_base);
    unset($temp_cidr);
    unset($network_details);
    unset($temp_network);
}

$this->db_log('Upgrade database to 1.12.2 completed');
