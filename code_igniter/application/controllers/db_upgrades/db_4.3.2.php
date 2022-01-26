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

UPDATE `configuration` SET `value` = '20220126' WHERE `name` = 'internal_version';

UPDATE `configuration` SET `value` = '4.3.2' WHERE `name` = 'display_version';
*/

$this->log_db('Upgrade database to 4.3.2 commenced');

// Fix the default integration
$sql = "DELETE FROM integrations WHERE id = 1 and edited_by = 'system'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "INSERT INTO `integrations` VALUES (1,'Default NMIS Integration',1,'','nmis','{\"pollers\":[],\"groups\":[],\"roles\":[],\"customers\":[],\"business_services\":[]}','{\"password\":\"\",\"url\":\"http://localhost/omk/\",\"username\":\"\"}',0,'y',0,'y','[]','[]','n',2,'y','[{\"default_value\":\"\",\"external_field_name\":\"configuration.version\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.snmp_version\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.community\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_community\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.username\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_v3_security_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.authpassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_v3_authentication_passphrase\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.authprotocol\",\"external_field_type\":\"lower\",\"internal_field_name\":\"credentials.snmp_v3_authentication_protocol\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.privpassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_v3_privacy_passphrase\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.privprotocol\",\"external_field_type\":\"lower\",\"internal_field_name\":\"credentials.snmp_v3_privacy_protocol\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.wmiusername\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.windows_username\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.wmipassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.windows_password\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.businessService\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_business_service\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"server_name\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_poller\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.notes\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_notes\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"y\",\"external_field_name\":\"\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_manage\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.sysDescr\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.sysDescr\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"Default Location\",\"external_field_name\":\"configuration.location\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.locations_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.customer\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_customer\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"1\",\"external_field_name\":\"configuration.active\",\"external_field_type\":\"bool_one_zero\",\"internal_field_name\":\"fields.nmis_active\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"1\",\"external_field_name\":\"configuration.collect\",\"external_field_type\":\"bool_one_zero\",\"internal_field_name\":\"fields.nmis_collect\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"automatic\",\"external_field_name\":\"configuration.model\",\"external_field_type\":\"text\",\"internal_field_name\":\"fields.nmis_model\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"wan\",\"external_field_name\":\"configuration.netType\",\"external_field_type\":\"text\",\"internal_field_name\":\"fields.nmis_netType\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"true\",\"external_field_name\":\"configuration.ping\",\"external_field_type\":\"bool\",\"internal_field_name\":\"fields.nmis_ping\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"161\",\"external_field_name\":\"configuration.port\",\"external_field_type\":\"integer\",\"internal_field_name\":\"fields.nmis_port\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"name\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"name\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.display_name\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"Open-AudIT\",\"external_field_name\":\"configuration.group\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_group\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.host\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.ip\",\"matching_attribute\":\"y\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"uuid\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.omk_uuid\",\"matching_attribute\":\"y\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.roleType\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_role\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.serviceStatus\",\"external_field_type\":\"capitalise\",\"internal_field_name\":\"system.environment\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"cluster_id\",\"external_field_type\":\"text\",\"internal_field_name\":\"system.nmis_poller_uuid\",\"matching_attribute\":\"n\",\"priority\":\"external\"}]','',0,'all','','nmis_manage',0,'attribute','y',0,'y',0,'y','n','','2000-01-01 00:00:00',0,'system',NOW())";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20220126' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$sql = "UPDATE `configuration` SET `value` = '4.3.2' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query() . ';');

$this->log_db('Upgrade database to 4.3.2 completed');
$this->config->config['internal_version'] = '20220126';
$this->config->config['display_version'] = '4.3.2';
