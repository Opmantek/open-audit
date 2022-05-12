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

UPDATE `configuration` SET `value` = '20220321' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '4.3.3' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 4.3.3 commenced');

$this->alter_table('system', 'memory_count', "memory_count bigint(20) unsigned NOT NULL DEFAULT '0'", 'change');

$this->alter_table('user', 'password_last_changed', "ADD password_last_changed datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER password_disabled", 'add');

$this->alter_table('user', 'last_logon', "ADD last_logon datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER type", 'add');

$this->alter_table('users', 'name', "name varchar(200) NOT NULL DEFAULT ''", 'change');

$sql = "DELETE FROM configuration WHERE name = 'firstwave_prompt'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `configuration` VALUES (NULL,'firstwave_prompt','2000-01-01','date','n','system','2000-01-01 00:00:00','Prompt about FirstWave products.')";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20220321' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "UPDATE `configuration` SET `value` = '4.3.3' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->log_db('Upgrade database to 4.3.3 completed');
$this->config->config['internal_version'] = '20220321';
$this->config->config['display_version'] = '4.3.3';
