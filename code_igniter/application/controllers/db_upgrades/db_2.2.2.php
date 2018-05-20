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

$this->log_db('Upgrade database to 2.2.2 commenced');

$sql = "DELETE FROM `configuration` WHERE `name` = 'access_token_count'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'access_token_count','10','number','y','system','2000-01-01 00:00:00','Allow this many access tokens to be stored in the cookie.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'access_token_enable'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'access_token_enable','y','bool','y','system','2000-01-01 00:00:00','Should we enable access tokens for CSRF mitigation.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "DELETE FROM `configuration` WHERE `name` = 'discovery_sunos_use_sudo'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_sunos_use_sudo','y','bool','y','system','2000-01-01 00:00:00','When running discovery commands on a SunOS target, should we use sudo.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20180620' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.2.2' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.2.2 completed");
$this->config->config['internal_version'] = '20180620';
$this->config->config['display_version'] = '2.2.2';
