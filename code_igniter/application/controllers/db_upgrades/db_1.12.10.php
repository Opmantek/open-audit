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

$this->log_db('Upgrade database to 1.12.10 commenced');

# configuration
if ($this->db->table_exists('oa_config')) {
    $sql[] = "UPDATE `oa_config` SET config_name = 'match_ip', config_description = 'Should we match a device based on its ip.' WHERE config_name = 'discovery_ip_match'";

    $sql[] = "UPDATE `oa_config` SET config_name = 'match_mac', config_description = 'Should we match a device based on its mac address.' WHERE config_name = 'discovery_mac_match'";

    $sql[] = "UPDATE `oa_config` SET config_name = 'match_hostname', config_description = 'Should we match a device based only on its hostname.' WHERE config_name = 'discovery_name_match'";

    $sql[] = "UPDATE `oa_config` SET config_name = 'match_serial' WHERE config_name = 'discovery_serial_match'";

    if (!isset($this->config->config['match_dbus'])) {
        $sql[] = "INSERT INTO `oa_config` VALUES ('match_dbus','n','y',NOW(),0,'Should we match a device based on its dbus id.')";
    }

    if (!isset($this->config->config['match_uuid'])) {
        $sql[] = "INSERT INTO `oa_config` VALUES ('match_uuid','y','y',NOW(),0,'Should we match a device based on its UUID.')";
    }

    if (!isset($this->config->config['match_hostname_dbus'])) {
        $sql[] = "INSERT INTO `oa_config` VALUES ('match_hostname_dbus','y','y',NOW(),0,'Should we match a device based on its hostname and dbus id.')";
    }

    if (!isset($this->config->config['match_hostname_uuid'])) {
        $sql[] = "INSERT INTO `oa_config` VALUES ('match_hostname_uuid','y','y',NOW(),0,'Should we match a device based on its hostname and UUID.')";
    }

    if (!isset($this->config->config['match_hostname_serial'])) {
        $sql[] = "INSERT INTO `oa_config` VALUES ('match_hostname_serial','y','y',NOW(),0,'Should we match a device based on its hostname and serial.')";
    }

    if (!isset($this->config->config['match_serial_type'])) {
        $sql[] = "INSERT INTO `oa_config` VALUES ('match_serial_type','y','y',NOW(),0,'Should we match a device based on its serial and type.')";
    }

    if (!isset($this->config->config['match_fqdn'])) {
        $sql[] = "INSERT INTO `oa_config` VALUES ('match_fqdn','y','y',NOW(),0,'Should we match a device based on its fqdn.')";
    }

    if (!isset($this->config->config['match_mac_vmware'])) {
        $sql[] = "INSERT INTO `oa_config` VALUES ('match_mac_vmware','n','y',NOW(),0,'Should we match a device based mac address even if it\'s a known likely duplicate from VMware.')";
    }
}

# fix our user <-> org table
if ($this->db->table_exists('oa_user_org') and $this->db->table_exists('oa_user')) {
    $sql[] = "DELETE FROM oa_user_org";
    $sql[] = "INSERT INTO oa_user_org (id, user_id, org_id, access_level, permissions) SELECT NULL, id, 0, 10, '' FROM oa_user";
}

foreach ($sql as $this_query) {
    $this->db->query($this_query);
    $this->log_db($this->db->last_query());
}

# set our versions
if ($this->db->table_exists('oa_config')) {
    $sql = "UPDATE `oa_config` SET `config_value` = '20160811' WHERE `config_name` = 'internal_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
} elseif ($this->db->table_exists('configuration')) {
    $sql = "UPDATE `configuration` SET `value` = '20160811' WHERE `name` = 'internal_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
}

if ($this->db->table_exists('oa_config')) {
    $sql = "UPDATE oa_config SET config_value = '1.12.10' WHERE `config_name` = 'display_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
} elseif ($this->db->table_exists('configuration')) {
    $sql = "UPDATE `configuration` SET `value` = '1.12.10' WHERE `name` = 'display_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
}

$this->log_db('Upgrade database to 1.12.10 completed');
$this->config->config['internal_version'] = '20160811';
$this->config->config['display_version'] = '1.12.10';
