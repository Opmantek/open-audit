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

$this->log_db('Upgrade database to 1.12.4 commenced');

if ($this->db->table_exists('oa_group')) {
    $sql = "UPDATE oa_group SET group_category = 'org' WHERE group_category = 'owner'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
}

$this->alter_table('oa_group', 'group_category', "group_category enum('application','device','general','location','network','org','os') NOT NULL DEFAULT 'general'");

$this->alter_table('print_queue', 'system_key', "device varchar(200) NOT NULL DEFAULT ''");

$this->alter_table('print_queue', 'ip', "DROP ip", 'drop');

$this->alter_table('print_queue', 'type', 'DROP type', 'drop');

$this->alter_table('print_queue', 'type', "ADD type varchar(100) NOT NULL DEFAULT '' AFTER duplex", 'add');

$this->alter_table('print_queue', 'connection_status', "status varchar(100) NOT NULL DEFAULT '' AFTER type");

$this->alter_table('print_queue', 'capabilities', "ADD capabilities varchar(200) NOT NULL DEFAULT ''", 'add');

$this->alter_table('print_queue', 'driver', "ADD driver varchar(200) NOT NULL DEFAULT ''", 'add');

# set our versions
if ($this->db->table_exists('oa_config')) {
    $sql = "UPDATE `oa_config` SET `config_value` = '20160401' WHERE `config_name` = 'internal_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
} elseif ($this->db->table_exists('configuration')) {
    $sql = "UPDATE `configuration` SET `value` = '20160401' WHERE `name` = 'internal_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
}

if ($this->db->table_exists('oa_config')) {
    $sql = "UPDATE oa_config SET config_value = '1.12.4' WHERE `config_name` = 'display_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
} elseif ($this->db->table_exists('configuration')) {
    $sql = "UPDATE `configuration` SET `value` = '1.12.4' WHERE `name` = 'display_version'";
    $this->db->query($sql);
    $this->log_db($this->db->last_query());
}

$this->log_db('Upgrade database to 1.12.4 completed');
$this->config->config['internal_version'] = '20160401';
$this->config->config['display_version'] = '1.12.4';
