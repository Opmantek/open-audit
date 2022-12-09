<?php
/**
#  Copyright 2022 Firstwave (www.firstwave.com)
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
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************
*
**/

/*

UPDATE `configuration` SET `value` = '20211213' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '4.3.1' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 4.3.1 commenced');

$sql = "UPDATE `licenses` SET expiry_date = '2000-01-01' WHERE expiry_date = '2001-01-01'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->alter_table('licenses', 'expiry_date', "expiry_date DATE NOT NULL DEFAULT '2000-01-01'", 'change');

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20211213' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "UPDATE `configuration` SET `value` = '4.3.1' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->log_db('Upgrade database to 4.3.1 completed');
$this->config->config['internal_version'] = '20211213';
$this->config->config['display_version'] = '4.3.1';
