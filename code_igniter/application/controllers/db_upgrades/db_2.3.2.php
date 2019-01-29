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

$this->log_db('Upgrade database to 2.3.2 commenced');

# configuration
$sql = "DELETE FROM configuration WHERE name = 'discovery_default_scan_option'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_default_scan_option','1','number','y','system','2000-01-01 00:00:00','The default discovery options for Nmap.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE configuration SET description = 'The URL used by external devices to talk to Open-AudIT.' WHERE name = 'default_network_address'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# re-encode or credentials
$this->load->helper('security');
$sql = "SELECT * FROM `credentials` WHERE (`edited_by` != 'system' or `id` = 1)";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
$result = $query->result();
if (!empty($result)) {
    foreach ($result as $item) {
        $credentials = @json_decode($this->encrypt->decode($item->credentials));
        if (!empty($credentials)) {
            $item->credentials = simpleEncrypt(json_encode($credentials));
            $sql = "UPDATE `credentials` SET `credentials` = ?, `edited_by` = 'system', `edited_date` = NOW() WHERE `id` = ?";
            $data = array($item->credentials, intval($item->id));
            $this->db->query($sql, $data);
            $this->log_db($this->db->last_query());
        }
    }
}

# re-encode the ldap_servers.dn_password
$sql = "SELECT * FROM `ldap_servers` WHERE `edited_by` != 'system'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
$result = $query->result();
if (!empty($result)) {
    foreach ($result as $item) {
        $dn_password = $this->encrypt->decode($item->dn_password);
        if (!empty($dn_password)) {
            $item->dn_password = simpleEncrypt($dn_password);
            $sql = "UPDATE `ldap_servers` SET `dn_password` = ?, `edited_by` = 'system', `edited_date` = NOW() WHERE `id` = ?";
            $data = array($item->dn_password, intval($item->id));
            $this->db->query($sql, $data);
            $this->log_db($this->db->last_query());
        }
    }
}

$sql = "SELECT * FROM `clouds` WHERE `edited_by` != 'system'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
$result = $query->result();
if (!empty($result)) {
    foreach ($result as $item) {
        $credentials = @json_decode($this->encrypt->decode($item->credentials));
        if (!empty($credentials)) {
            $item->credentials = simpleEncrypt(json_encode($credentials));
            $sql = "UPDATE `clouds` SET `credentials` = ?, `edited_by` = 'system', `edited_date` = NOW() WHERE `id` = ?";
            $data = array($item->credentials, intval($item->id));
            $this->db->query($sql, $data);
            $this->log_db($this->db->last_query());
        }
    }
}


# discovery scan profiles
$sql = "DROP table if exists `discovery_scan_options`";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE TABLE `discovery_scan_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `ping` enum('','y','n') NOT NULL DEFAULT 'y',
  `service_version` enum('','y','n') NOT NULL DEFAULT 'n',
  `filtered` enum('','y','n') NOT NULL DEFAULT 'n',
  `timeout` int(10) unsigned NOT NULL DEFAULT '0',
  `timing` int(1) unsigned NOT NULL DEFAULT 4,
  `nmap_tcp_ports` int(10) unsigned NOT NULL DEFAULT '0',
  `nmap_udp_ports` int(10) unsigned NOT NULL DEFAULT '0',
  `tcp_ports` text NOT NULL,
  `udp_ports` text NOT NULL,
  `exclude_tcp_ports` text NOT NULL,
  `exclude_udp_ports` text NOT NULL,
  `exclude_ip` text NOT NULL,
  `ssh_ports` int(10) unsigned NOT NULL,
  `options` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `discovery_scan_options` VALUES (1,'UltraFast',1,'Approximately 1 second per target. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An open|filtered port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n',0,4,0,0,'22,135,62078','161','','','','22','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `discovery_scan_options` VALUES (2,'SuperFast',1,'Approximately 5 seconds per target. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n',0,4,10,10,'62078','','','','','22','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `discovery_scan_options` VALUES (3,'Fast',1,'Approximately 40 seconds per target. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n',0,4,100,100,'62078','','','','','22','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `discovery_scan_options` VALUES (4,'Medium (Classic)',1,'Approximately 90 seconds per target. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An open|filtered port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.','n','n','y',0,4,1000,0,'62078','161','','','','22','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `discovery_scan_options` VALUES (5,'Medium',1,'Approximately 100 seconds per target. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An open|filtered port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.','y','n','n',0,4,1000,100,'62078','','','','','22','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `discovery_scan_options` VALUES (6,'Slow',1,'Approximately 4 minutes per target. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An open|filtered port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.','y','y','y',0,3,1000,100,'62078','','','','','22','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `discovery_scan_options` VALUES (7,'UltraSlow',1,'Approximately 20 minutes. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An open|filtered port is considered open (and will trigger device detection). Use polite timing.','n','y','y',0,2,1000,1000,'62078','','','','','22','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# queue
$this->alter_table('queue', 'name', "ADD `name` varchar(100) NOT NULL DEFAULT '' AFTER `id`", 'add');
$this->alter_table('queue', 'status', "ADD `status` varchar(20) NOT NULL DEFAULT '' AFTER `pid`", 'add');
$this->alter_table('queue', 'org_id', "ADD `org_id` int(10) unsigned NOT NULL DEFAULT '1' AFTER `type`", 'add');

$this->load->model('m_roles');
$this->m_roles->update_permissions('admin', 'queue', 'crud');
$this->m_roles->update_permissions('org_admin', 'queue', 'cr');
$this->m_roles->update_permissions('reporter', 'queue', 'r');
$this->m_roles->update_permissions('user', 'queue', 'r');

$this->m_roles->update_permissions('org_admin', 'discovery_scan_options', 'crud');

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20181225' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.3.2' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.3.2 completed");
$this->config->config['internal_version'] = '20181225';
$this->config->config['display_version'] = '2.3.2';
