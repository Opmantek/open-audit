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
