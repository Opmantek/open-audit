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

$this->log_db('Upgrade database to 3.0.0 commenced');
# queries
$sql = "DELETE FROM queries WHERE `name` = 'NMIS' AND `edited_by` = 'system' AND `edited_date` = '2000-01-01 00:00:00'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `queries` VALUES (NULL,1,'NMIS','Device','y','NMIS Export query','SELECT system.id AS `system.id`, system.name AS `system.name`, system.ip AS `system.ip`, system.hostname AS `system.hostname`, system.fqdn AS `system.fqdn`, system.dns_hostname AS `system.dns_hostname`, system.omk_uuid AS `system.omk_uuid`, system.nmis_name AS `system.nmis_name`, system.nmis_group AS `system.nmis_group`, system.nmis_role AS `system.nmis_role`, system.nmis_manage AS `system.nmis_manage`, system.nmis_business_service AS `system.nmis_business_service`, system.nmis_poller AS `system.nmis_poller` FROM `system` WHERE @filter AND system.nmis_manage = \'y\'','','system','2000-01-01 00:00:00')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# system
$this->alter_table('system', 'nmis_poller', "ADD `nmis_poller` TEXT NOT NULL AFTER `nmis_business_service`", 'add');

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20190214' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '3.0.0' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 3.0.0 completed");
$this->config->config['internal_version'] = '20190214';
$this->config->config['display_version'] = '3.0.0';
