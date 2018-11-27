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

$this->log_db('Upgrade database to 2.3.1 commenced');

# configuration
$value = $this->config->config['default_network_address'];
$value = str_replace('https://', '', $value);
$value = str_replace('http://', '', $value);
$value = str_replace('/open-audit/', '', $value);
$value = str_replace('/open-audit', '', $value);
$value = 'http://' . $value . '/open-audit/';
$data = array($value);
$sql = "UPDATE `configuration` SET `value` = ? WHERE `name` = 'default_network_address'";
$this->db->query($sql, $data);
$this->log_db($this->db->last_query());

# locations
$this->alter_table('locations', 'cloud_id', "ADD `cloud_id` int(10) unsigned DEFAULT NULL AFTER `geo`", 'add');

# networks
$this->alter_table('networks', 'cloud_id', "ADD `cloud_id` int(10) unsigned DEFAULT NULL AFTER `external_ident`", 'add');

# system
$this->alter_table('system', 'storage_count', "ADD `storage_count` int(10) unsigned NOT NULL DEFAULT '0' AFTER `processor_count`", 'add');
$this->alter_table('system', 'discovery_id', "ADD `discovery_id` int(10) unsigned DEFAULT NULL AFTER `instance_options`", 'add');

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20181130' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.3.1' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.3.1 completed");
$this->config->config['internal_version'] = '20181130';
$this->config->config['display_version'] = '2.3.1';
