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

$this->log_db('Upgrade database to 1.12.6 commenced');

$this->drop_foreign_key('sys_man_additional_fields', 'sys_man_additional_fields_group_id');
$this->drop_key('sys_man_additional_fields', 'sys_man_additional_fields_group');
$this->alter_table('system', 'man_icon', 'DROP man_icon', 'drop');
$this->drop_foreign_key('oa_user_org', 'oa_user_org_org_id');
$this->alter_table('oa_org', 'org_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('oa_org', 'org_name', "name varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_org', 'org_parent_id', "parent_id int(10) unsigned DEFAULT '0'");
$this->alter_table('oa_org', 'org_group_id', "group_id int(10) unsigned DEFAULT '0'");
$this->alter_table('oa_org', 'contact_id', "DROP contact_id", 'drop');
$this->alter_table('oa_org', 'org_picture', "DROP org_picture", 'drop');
$this->alter_table('oa_org', 'org_comments', "comments text NOT NULL DEFAULT ''");
$sql = "UPDATE oa_org SET name = 'Default Organisation' WHERE id = 0";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
$this->add_foreign_key('oa_user_org', 'oa_user_org_org_id', "FOREIGN KEY (org_id) REFERENCES oa_org (id) ON DELETE CASCADE");
$this->drop_foreign_key('edit_log', 'edit_log_user_id');
$this->drop_foreign_key('oa_change', 'oa_change_user_id');
$this->drop_foreign_key('oa_group_user', 'oa_group_user_user_id');
$this->drop_foreign_key('oa_user_org', 'oa_user_org_user_id');
$this->drop_foreign_key('sys_man_attachment', 'att_user_id');
$this->drop_key('sys_man_attachment', 'att_user_id');
$this->drop_foreign_key('sys_man_notes', 'sys_man_notes_user_id');

# change the user table to the new SQL schema format
$this->alter_table('oa_user', 'user_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('oa_user', 'user_name', "name varchar(100) NOT NULL");
$this->alter_table('oa_user', 'user_password', "password varchar(250) NOT NULL");
$this->alter_table('oa_user', 'user_full_name', "full_name varchar(100) NOT NULL");
$this->alter_table('oa_user', 'user_email', "email varchar(100) NOT NULL");
$this->alter_table('oa_user', 'user_lang', "lang varchar(100) NOT NULL");
$this->alter_table('oa_user', 'user_display_number', "display_count smallint(6) NOT NULL DEFAULT '10'");
$this->alter_table('oa_user', 'user_theme', "theme varchar(100) NOT NULL");
$this->alter_table('oa_user', 'user_admin', "admin varchar(1) NOT NULL");
$this->alter_table('oa_user', 'user_active', "active varchar(1) NOT NULL DEFAULT 'y'");
$this->alter_table('oa_user', 'user_sam', "sam int(10) NOT NULL DEFAULT '1'");
$this->alter_table('oa_user', 'user_change', "DROP user_change", 'drop');

# now add the foreign keys back
$this->add_foreign_key('edit_log', 'edit_log_user_id', "FOREIGN KEY (user_id) REFERENCES oa_user (id)");
$this->add_foreign_key('oa_change', 'oa_change_user_id', "FOREIGN KEY (user_id) REFERENCES oa_user (id)");
$this->add_foreign_key('oa_group_user', 'oa_group_user_user_id', "FOREIGN KEY (user_id) REFERENCES oa_user (id) ON DELETE CASCADE");
$this->add_foreign_key('oa_user_org', 'oa_user_org_user_id', "FOREIGN KEY (user_id) REFERENCES oa_user (id) ON DELETE CASCADE");
$this->add_foreign_key('sys_man_notes', 'sys_man_notes_user_id', "FOREIGN KEY (user_id) REFERENCES oa_user (id)");

# change the location table to use the new SQL schema format
$this->alter_table('oa_location', 'location_id', "id int(10) unsigned NOT NULL AUTO_INCREMENT");
$this->alter_table('oa_location', 'location_name', "name varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_type', "type varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_room', "room varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_suite', "suite varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_level', "level varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_address', "address varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_suburb', "suburb varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_city', "city varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_district', "district varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_region', "region varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_area', "area varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_state', "state varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_postcode', "postcode varchar(10) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_country', "country varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_tags', "tags varchar(250) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_phone', "phone varchar(20) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_picture', "picture varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_latitude', "latitude float(10,6) NOT NULL");
$this->alter_table('oa_location', 'location_longitude', "longitude float(10,6) NOT NULL");
$this->alter_table('oa_location', 'location_geo', "geo varchar(200) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_comments', "comments varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_icon', "icon varchar(100) NOT NULL DEFAULT ''");
$this->alter_table('oa_location', 'location_group_id', "group_id int(10) unsigned NOT NULL DEFAULT '0'");
$this->alter_table('service', 'count', "DROP count", 'drop');
$this->alter_table('system', 'serial', "`serial` varchar(250) NOT NULL DEFAULT ''");
$this->alter_table('system', 'man_serial', "`man_serial` varchar(250) NOT NULL DEFAULT ''");
$this->alter_table('system', 'dbus_identifier', "ADD `dbus_identifier` varchar(255) NOT NULL DEFAULT '' AFTER uuid", 'add');

# a new function we'll use for checking if an IP is in a blessed subnet
$sql = "DROP FUNCTION IF EXISTS cidr_to_mask";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "CREATE FUNCTION cidr_to_mask (cidr INT(2)) RETURNS CHAR(15) DETERMINISTIC RETURN INET_NTOA(CONV(CONCAT(REPEAT(1,cidr),REPEAT(0,32-cidr)),2,10))";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

# our new blessed subnets config item
$sql = "UPDATE `ip` SET `network` = REPLACE(`network`, ' ', '')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `oa_config` VALUES ('blessed_subnets_use','y','y',NOW(),0,'Should we only accept data from the blessed subnets list.')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

# new table for network descriptions and blessed subnets
$this->drop_table('networks');

$sql = "CREATE TABLE `networks` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(200) NOT NULL DEFAULT '', `description` text NOT NULL, `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `networks` SELECT NULL, REPLACE(REPLACE(`group_name`, ' ', ''), 'Network-', '')  AS name, TRIM(both '\t' from group_description) as description, 'system upgrade' as edited_by, NOW() as edited_date FROM oa_group WHERE group_category = 'network' AND SUBSTR(REPLACE(REPLACE(`group_name`, ' ', ''), 'Network-', ''),1,LOCATE('/',REPLACE(REPLACE(`group_name`, ' ', ''), 'Network-', ''))-1) != `group_description`";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `networks` (SELECT NULL, ip.network as name, '' as description, 'system upgrade' as edited_by, NOW() as edited_date FROM ip WHERE network NOT IN (SELECT networks.name FROM networks) AND ip.network != '' GROUP BY ip.network)";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->drop_table('chart');

$sql = "CREATE TABLE `chart` ( `when` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', `what` varchar(50) NOT NULL DEFAULT '', `org_id` int unsigned NOT NULL DEFAULT 0, `count` int unsigned NOT NULL DEFAULT 0, PRIMARY KEY (`when`, `what`, `org_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(audit_log.timestamp) as `when`, 'audit' as `what`, system.man_org_id as `org_id`, count(audit_log.system_id) AS `new_count` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.system_id) WHERE audit_log.type = 'audit' AND system.man_org_id IS NOT NULL GROUP BY system.man_org_id, DATE(audit_log.timestamp) ORDER BY DATE(audit_log.timestamp))";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(audit_log.timestamp) as `when`, 'snmp' as `what`, system.man_org_id as `org_id`, count(audit_log.system_id) AS `count` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.system_id) WHERE audit_log.type = 'snmp' AND system.man_org_id IS NOT NULL GROUP BY system.man_org_id, DATE(audit_log.timestamp) ORDER BY DATE(audit_log.timestamp))";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(audit_log.timestamp) as `when`, 'nmap' as `what`, system.man_org_id as `org_id`, count(audit_log.system_id) AS `count` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.system_id) WHERE audit_log.type = 'nmap' AND system.man_org_id IS NOT NULL GROUP BY system.man_org_id, DATE(audit_log.timestamp) ORDER BY DATE(audit_log.timestamp))";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(change_log.timestamp) as `when`, CONCAT(change_log.db_table, '_', change_log.db_action) as `what`, system.man_org_id as `org_id`, count(change_log.id) AS `count` FROM change_log LEFT JOIN system ON (change_log.system_id = system.system_id) WHERE DATE(change_log.timestamp) >= '2015-01-01' AND change_log.db_table != 'system' GROUP BY system.man_org_id, CONCAT(change_log.db_table, '_', change_log.db_action), DATE(change_log.timestamp) ORDER BY DATE(change_log.timestamp))";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(`first_timestamp`) as `when`, 'system_create' as `what`, system.man_org_id as `org_id`, count(system_id) AS `count` FROM system WHERE DATE(`first_timestamp`) >= '2015-01-01' GROUP BY DATE(`first_timestamp`), man_org_id ORDER BY DATE(`first_timestamp`))";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

// update any leftover group definitions by changing man_icon to icon
$sql = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'man_icon', 'icon')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE oa_group_column SET column_variable = 'icon' WHERE column_variable = 'man_icon'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

// update any leftover report definitions by changing man_icon to icon
$sql = "UPDATE oa_report SET report_sql = REPLACE(report_sql, 'man_icon', 'icon')";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE oa_report_column SET column_variable = 'icon' WHERE column_variable = 'man_icon'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

# have to re-run this as we left it in the original SQL script.
$sql = "UPDATE oa_group SET group_category = 'org' WHERE group_category = 'owner'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->alter_table('oa_group', 'group_category', "group_category enum('application','device','general','location','network','org','os') NOT NULL DEFAULT 'general'");

$this->load->model('m_networks');
foreach ($this->m_configuration->read_subnet() as $subnet) {
    $network = new stdClass();
    $network->name = $subnet;
    $network->org_id = 0;
    $this->m_networks->upsert($network);
}

# set our versions
$sql = "UPDATE oa_config SET config_value = '20160409' WHERE config_name = 'internal_version'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE oa_config SET config_value = '1.12.6' WHERE config_name = 'display_version'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db('Upgrade database to 1.12.6 completed');
$this->config->config['internal_version'] = '20160409';
$this->config->config['display_version'] = '1.12.6';

