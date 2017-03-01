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

$this->db_log('Upgrade database to 1.12.4 commenced');

if ($this->db->table_exists('oa_group')) {
    $sql = "UPDATE oa_group SET group_category = 'org' WHERE group_category = 'owner'";
    $query = $this->db->query($sql);
    $this->db_log($this->db->last_query());
}

$this->alter_table('oa_group', 'group_category', "group_category enum('application','device','general','location','network','org','os') NOT NULL DEFAULT 'general'");

$this->alter_table('print_queue', 'system_key', "system_key device varchar(200) NOT NULL DEFAULT ''");

$this->alter_table('print_queue', 'ip', "DROP ip", 'drop');

$this->alter_table('print_queue', 'type', 'DROP type', 'drop');

$this->alter_table('print_queue', 'type', "ADD type varchar(100) NOT NULL DEFAULT '' AFTER duplex", 'add');

$this->alter_table('print_queue', 'connection_status', "connection_status status varchar(100) NOT NULL DEFAULT '' AFTER type");

$this->alter_table('print_queue', 'capabilities', "ADD capabilities varchar(200) NOT NULL DEFAULT ''", 'add');

$this->alter_table('print_queue', 'driver', "ADD driver varchar(200) NOT NULL DEFAULT ''", 'add');

$this->alter_table('print_queue', '', "");

$sql = "UPDATE oa_config SET config_value = '20160401' WHERE config_name = 'internal_version'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$sql = "UPDATE oa_config SET config_value = '1.12.4' WHERE config_name = 'display_version'";
$query = $this->db->query($sql);
$this->db_log($this->db->last_query());

$this->db_log('Upgrade database to 1.12.4 completed');
