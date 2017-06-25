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

if (($db_internal_version < '20111001') and ($this->db->platform() == 'mysql')) {
    # upgrade for beta3
    $this->db->trans_start();

    $this->data['output'] .= "Upgrading to beta3.<br />Transaction starting.<br /><br />\n";

    $sql = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_status hard_drive_status varchar(100) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_partition DROP FOREIGN KEY sys_hw_partition_hard_drive_index";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_man_audits ADD audit_debug text NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_service MODIFY service_path_name text NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_software ADD software_installed_by varchar(100) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_software ADD software_installed_on datetime NOT NULL default '0000-00-00 00:00:00'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD uptime varchar(50) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD pc_os_bit varchar(3) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value) VALUES ('internal_version', '20111001')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value) VALUES ('display_version', 'beta3')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $this->db->trans_complete();

    if ($this->db->trans_status() === false) {
        $this->data['output'] .= "ALERT - error encountered. Transactions rolled back.<br /><br />\n";
    } else {
        $this->data['output'] .= "Transaction committed.<br />beta3 upgrade successful.<br /><br />\n";
    }
}

if (($db_internal_version < '20111010') and ($this->db->platform() == 'mysql')) {
    # upgrade for beta4
    $this->db->trans_start();

    $this->data['output'] .= "Upgrading to beta4.<br />Transaction starting.<br /><br />\n";

    $sql = "UPDATE oa_group SET group_dynamic_select = 'SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\'' WHERE group_id = '1'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE sys_hw_warranty ( warranty_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, warranty_provider varchar(200) NOT NULL default '', warranty_type varchar(100) NOT NULL default '', warranty_start datetime NOT NULL default '0000-00-00 00:00:00', warranty_end datetime NOT NULL default '0000-00-00 00:00:00', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (warranty_id), KEY system_id (system_id), CONSTRAINT sys_hw_warranty_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '1', 'Hostname',        'hostname',         'link',         'main/system_display/', 'system_id', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '2', 'Description', 'man_description',  'text',         '',                     '', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '3', 'IP Address',      'man_ip_address',   'ip_address',   '',                     '', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '4', 'Type',            'man_icon',         'image',        '',                     'man_os_family', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '5', 'OS / Device',     'man_os_name',      'text',         '',                     '', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '6', 'Tags',            'tag',              'text',         '',                     '', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20111010' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = 'beta4' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $this->db->trans_complete();

    if ($this->db->trans_status() === false) {
        $this->data['output'] .= "ALERT - error encountered. Transactions rolled back.<br /><br />\n";
    } else {
        $this->data['output'] .= "Transaction committed.<br />beta4 upgrade successful.<br /><br />\n";
    }
}

if (($db_internal_version < '20120317') and ($this->db->platform() == 'mysql')) {
    # upgrade for beta5
    $this->db->trans_start();

    $this->data['output'] .= "Upgrading to beta5.<br />Transaction starting.<br /><br />\n";

    $sql = "ALTER TABLE sys_hw_monitor ADD size varchar(5) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_monitor ADD aspect_ratio varchar(5) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_class enum ('desktop', 'laptop', 'tablet', 'workstation', 'server', 'virtual server', 'virtual desktop', '') NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD last_seen DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD last_seen_by VARCHAR(150) NOT NULL DEFAULT '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD last_user VARCHAR(150) NOT NULL DEFAULT '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_log_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_log_user_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_oa_change";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_alert_log ADD CONSTRAINT oa_alert_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_alert_log ADD CONSTRAINT oa_alert_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_alert_log ADD CONSTRAINT oa_alert_oa_change FOREIGN KEY (change_id) REFERENCES oa_change (change_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_audit_log DROP FOREIGN KEY oa_audit_log_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_audit_log DROP FOREIGN KEY oa_audit_log_user_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_audit_log ADD CONSTRAINT oa_audit_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_audit_log ADD CONSTRAINT oa_audit_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_change DROP FOREIGN KEY oa_change_user_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_change ADD CONSTRAINT oa_change_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_change_log DROP FOREIGN KEY oa_change_log_change_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_change_log DROP FOREIGN KEY oa_change_log_user_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_change_log ADD CONSTRAINT oa_change_log_change_id FOREIGN KEY (change_id) REFERENCES oa_change (change_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_change_log ADD CONSTRAINT oa_change_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_graph DROP FOREIGN KEY oa_graph_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_graph ADD CONSTRAINT oa_graph_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_group_column DROP FOREIGN KEY oa_group_column_group_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_group_column ADD CONSTRAINT oa_group_column_group_id FOREIGN KEY (group_id) REFERENCES oa_group (group_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_group_sys DROP FOREIGN KEY oa_group_sys_group_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_group_sys DROP FOREIGN KEY oa_group_sys_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_group_sys ADD CONSTRAINT oa_group_sys_group_id FOREIGN KEY (group_id) REFERENCES oa_group (group_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_group_sys ADD CONSTRAINT oa_group_sys_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_group_user DROP FOREIGN KEY oa_group_user_group_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_group_user DROP FOREIGN KEY oa_group_user_user_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_group_user ADD CONSTRAINT oa_group_user_group_id FOREIGN KEY (group_id) REFERENCES oa_group (group_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_group_user ADD CONSTRAINT oa_group_user_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location_org DROP FOREIGN KEY oa_loc_org_loc_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location_org DROP FOREIGN KEY oa_loc_org_org_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location_org ADD CONSTRAINT oa_loc_org_loc_id FOREIGN KEY (location_id) REFERENCES oa_location (location_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location_org ADD CONSTRAINT oa_loc_org_org_id FOREIGN KEY (org_id) REFERENCES oa_org (org_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_net_nmap_ports DROP FOREIGN KEY oa_net_nmap_ports_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_net_nmap_ports ADD CONSTRAINT oa_net_nmap_ports_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_net_scan_latest DROP FOREIGN KEY oa_net_scan_latest_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_net_scan_latest ADD CONSTRAINT oa_net_scan_latest_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_net_scan_log DROP FOREIGN KEY oa_net_scan_log_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_net_scan_log ADD CONSTRAINT oa_net_scan_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_net_scan_type DROP FOREIGN KEY oa_net_scan_type_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_net_scan_type ADD CONSTRAINT oa_net_scan_type_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_report_column DROP FOREIGN KEY oa_report_column_group_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_report_column ADD CONSTRAINT oa_report_column_group_id FOREIGN KEY (report_id) REFERENCES oa_report (report_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_switch_ports DROP FOREIGN KEY oa_switch_ports_switch_switch_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_switch_ports DROP FOREIGN KEY oa_switch_ports_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_switch_ports ADD CONSTRAINT oa_switch_ports_switch_switch_id FOREIGN KEY (switch_system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_switch_ports ADD CONSTRAINT oa_switch_ports_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_battery DROP FOREIGN KEY sys_hw_battery_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_battery ADD CONSTRAINT sys_hw_battery_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_bios DROP FOREIGN KEY sys_hw_bios_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_bios ADD CONSTRAINT sys_hw_bios_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_graphs_disk DROP FOREIGN KEY sys_hw_graphs_disk_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_graphs_disk ADD CONSTRAINT sys_hw_graphs_disk_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_hard_drive DROP FOREIGN KEY sys_hw_hard_drive_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_hard_drive ADD CONSTRAINT sys_hw_hard_drive_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_memory DROP FOREIGN KEY sys_hw_memory_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_memory ADD CONSTRAINT sys_hw_memory_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_modem DROP FOREIGN KEY sys_hw_modem_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_modem ADD CONSTRAINT sys_hw_modem_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_monitor DROP FOREIGN KEY sys_hw_monitor_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_monitor ADD CONSTRAINT sys_hw_monitor_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_motherboard DROP FOREIGN KEY sys_hw_motherboard_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_motherboard ADD CONSTRAINT sys_hw_motherboard_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_network_card DROP FOREIGN KEY sys_hw_network_card_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_network_card ADD CONSTRAINT sys_hw_network_card_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_network_card_ip DROP FOREIGN KEY sys_hw_network_card_ip_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_network_card_ip ADD CONSTRAINT sys_hw_network_card_ip_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_optical_drive DROP FOREIGN KEY sys_hw_optical_drive_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_optical_drive ADD CONSTRAINT sys_hw_optical_drive_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_partition DROP FOREIGN KEY sys_hw_partition_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_partition ADD CONSTRAINT sys_hw_partition_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_processor DROP FOREIGN KEY sys_hw_processor_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_processor ADD CONSTRAINT sys_hw_processor_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_scsi_controller DROP FOREIGN KEY sys_hw_scsi_controller_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_scsi_controller ADD CONSTRAINT sys_hw_scsi_controller_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_sound DROP FOREIGN KEY sys_hw_sound_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_sound ADD CONSTRAINT sys_hw_sound_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_video DROP FOREIGN KEY sys_hw_video_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_video ADD CONSTRAINT sys_hw_video_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_warranty DROP FOREIGN KEY sys_hw_warranty_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_warranty ADD CONSTRAINT sys_hw_warranty_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_man_audits DROP FOREIGN KEY sys_man_audits_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_man_audits ADD CONSTRAINT sys_man_audits_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE additional_field DROP FOREIGN KEY additional_field_group_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE additional_field ADD CONSTRAINT additional_field_group_id FOREIGN KEY (group_id) REFERENCES oa_group (group_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE additional_field_item DROP FOREIGN KEY additional_field_item_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE additional_field_item ADD CONSTRAINT additional_field_item_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE additional_field_item DROP FOREIGN KEY additional_field_item_field_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE additional_field_item ADD CONSTRAINT additional_field_item_field_id FOREIGN KEY (field_id) REFERENCES additional_field (field_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_man_notes DROP FOREIGN KEY sys_man_notes_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_man_notes ADD CONSTRAINT sys_man_notes_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_man_notes DROP FOREIGN KEY sys_man_notes_user_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_man_notes ADD CONSTRAINT sys_man_notes_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id)";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_antivirus DROP FOREIGN KEY sys_sw_antivirus_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_antivirus ADD CONSTRAINT sys_sw_antivirus_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_database DROP FOREIGN KEY sys_sw_db_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_database ADD CONSTRAINT sys_sw_db_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_database_details DROP FOREIGN KEY sys_sw_db_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_database_details ADD CONSTRAINT sys_sw_db_id FOREIGN KEY (db_id) REFERENCES sys_sw_database (db_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_database_log DROP FOREIGN KEY sys_sw_db_details_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_database_log ADD CONSTRAINT sys_sw_db_details_id FOREIGN KEY (details_id) REFERENCES sys_sw_database_details (details_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_firewall DROP FOREIGN KEY sys_sw_firewall_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_firewall ADD CONSTRAINT sys_sw_firewall_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_firewall_auth_app DROP FOREIGN KEY sys_sw_firewall_auth_app_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_firewall_auth_app ADD CONSTRAINT sys_sw_firewall_auth_app_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_firewall_ports DROP FOREIGN KEY sys_sw_firewall_ports_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_firewall_ports ADD CONSTRAINT sys_sw_firewall_ports_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_group DROP FOREIGN KEY sys_sw_groups_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_group ADD CONSTRAINT sys_sw_groups_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_log DROP FOREIGN KEY sys_sw_log_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_log ADD CONSTRAINT sys_sw_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_route DROP FOREIGN KEY sys_sw_ip_route_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_route ADD CONSTRAINT sys_sw_ip_route_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_pagefile DROP FOREIGN KEY sys_sw_pagefile_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_pagefile ADD CONSTRAINT sys_sw_pagefile_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_scheduled_task DROP FOREIGN KEY sys_sw_scheduled_task_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_scheduled_task ADD CONSTRAINT sys_sw_scheduled_task_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_service DROP FOREIGN KEY sys_sw_service_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_service ADD CONSTRAINT sys_sw_service_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_share DROP FOREIGN KEY sys_sw_share_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_share ADD CONSTRAINT sys_sw_share_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_share_perms DROP FOREIGN KEY sys_sw_share_perm_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_share_perms ADD CONSTRAINT sys_sw_share_perm_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_share_perms DROP FOREIGN KEY sys_sw_share_perm_share_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_share_perms ADD CONSTRAINT sys_sw_share_perm_share_id FOREIGN KEY (share_id) REFERENCES sys_sw_share (share_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_software DROP FOREIGN KEY sys_sw_software_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_software ADD CONSTRAINT sys_sw_software_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_software_key DROP FOREIGN KEY sys_sw_software_key_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_software_key ADD CONSTRAINT sys_sw_software_key_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_startup DROP FOREIGN KEY sys_sw_startup_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_startup ADD CONSTRAINT sys_sw_startup_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_user DROP FOREIGN KEY sys_sw_user_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_user ADD CONSTRAINT sys_sw_user_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_variable DROP FOREIGN KEY sys_sw_variable_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_variable ADD CONSTRAINT sys_sw_variable_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_server DROP FOREIGN KEY sys_sw_web_server_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_server ADD CONSTRAINT sys_sw_web_server_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_server_ext DROP FOREIGN KEY sys_sw_web_server_extn_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_server_ext ADD CONSTRAINT sys_sw_web_server_extn_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_server_ext DROP FOREIGN KEY sys_sw_web_server_extn_server_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_server_ext ADD CONSTRAINT sys_sw_web_server_extn_server_id FOREIGN KEY (webserver_id) REFERENCES sys_sw_web_server (webserver_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_site DROP FOREIGN KEY sys_sw_web_site_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_site ADD CONSTRAINT sys_sw_web_site_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_site DROP FOREIGN KEY sys_sw_web_site_server_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_site ADD CONSTRAINT sys_sw_web_site_server_id FOREIGN KEY (webserver_id) REFERENCES sys_sw_web_server (webserver_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_site_header DROP FOREIGN KEY sys_sw_web_site_header_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_site_header ADD CONSTRAINT sys_sw_web_site_header_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_site_header DROP FOREIGN KEY sys_sw_web_site_header_site_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_site_header ADD CONSTRAINT sys_sw_web_site_header_site_id FOREIGN KEY (site_id) REFERENCES sys_sw_web_site (site_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_site_virtual DROP FOREIGN KEY sys_sw_web_site_virtual_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_site_virtual ADD CONSTRAINT sys_sw_web_site_virtual_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_site_virtual DROP FOREIGN KEY sys_sw_web_site_virtual_site_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_web_site_virtual ADD CONSTRAINT sys_sw_web_site_virtual_site_id FOREIGN KEY (site_id) REFERENCES sys_sw_web_site (site_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_windows DROP FOREIGN KEY sys_sw_windows_system_id";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_windows ADD CONSTRAINT sys_sw_windows_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20120317' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = 'beta5' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $this->db->trans_complete();

    if ($this->db->trans_status() === false) {
        $this->data['output'] .= "ALERT - error encountered. Transactions rolled back.<br /><br />\n";
    } else {
        $this->data['output'] .= "Transaction committed.<br />beta5 upgrade successful.<br /><br />\n";
    }
}

if (($db_internal_version < '20120530') and ($this->db->platform() == 'mysql')) {
    # upgrade for beta6

    $this->data['output'] .= "Upgrading to beta6.<br /><br />\n";

    $sql = "ALTER TABLE oa_user MODIFY user_password varchar(250) NOT NULL ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE INDEX hostname ON system (hostname) ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE INDEX linked_sys ON system (linked_sys) ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE INDEX system_key ON system (system_key) ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE INDEX user_id_index ON oa_user (user_id) ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE INDEX user_id_index ON oa_group_user (user_id) ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE INDEX system_id_index ON oa_group_sys (system_id) ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE INDEX group_id_index ON oa_group (group_id) ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_sw_dns";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE sys_sw_dns (dns_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, dns_name varchar(100) NOT NULL default '', dns_full_name varchar(200) NOT NULL default '', dns_ip_address varchar(30) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (dns_id), KEY system_id (system_id), CONSTRAINT sys_sw_dns_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_database_details ADD system_id int(10) unsigned default NULL ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_database_log ADD system_id int(10) unsigned NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_database ADD db_version_string varchar(50) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_database ADD db_edition varchar(50) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_database_details ADD details_instance varchar(50) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system CHANGE man_status man_status enum('production', 'retired', 'maintenance', 'deleted', 'unallocated', 'lost') NOT NULL default 'production' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD printer_color varchar(5) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD printer_duplex varchar(5) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_service_provider varchar(100) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_service_number varchar(100) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_service_type varchar(100) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_service_plan varchar(100) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_service_network varchar(100) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_unlock_pin varchar(100) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_serial_imei varchar(100) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_serial_sim varchar(100) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE sys_sw_print_queue (queue_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, queue_system_key varchar(100) NOT NULL default '', queue_name varchar(100) NOT NULL default '', queue_port_name varchar(100) NOT NULL default '', queue_ip_address varchar(100) NOT NULL default '', queue_description varchar(100) NOT NULL default '', queue_model varchar(100) NOT NULL default '', queue_manufacturer varchar(100) NOT NULL default '', queue_shared varchar(100) NOT NULL default '', queue_shared_name varchar(100) NOT NULL default '', queue_location varchar(100) NOT NULL default '', queue_color varchar(100) NOT NULL default '', queue_duplex varchar(100) NOT NULL default '', queue_type enum('virtual', 'physical', '') NOT NULL default '', queue_connection_status varchar(100) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY (queue_id), KEY system_id (system_id), CONSTRAINT sys_sw_print_queue_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_connection ADD name varchar(100) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_connection DROP speed ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_connection ADD speed FLOAT(7,3) NOT NULL default '0' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_connection ADD status enum('production', 'retired', 'maintenance', 'deleted') NOT NULL default 'production' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_org ADD org_group_id int(10) unsigned NOT NULL default '0' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_man_audits ADD audit_wmi_fails text NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20120530' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = 'beta6' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $this->data['output'] .= "Transaction committed.<br />beta6 upgrade successful.<br /><br />\n";
}

if (($db_internal_version < '20120830') and ($this->db->platform() == 'mysql')) {
    # upgrade for beta7
    $sql = "ALTER TABLE oa_location ADD location_group_id int(10) unsigned NOT NULL default '0' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20120830' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = 'beta7' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20121130') and ($this->db->platform() == 'mysql')) {
    # upgrade for beta8
    $sql = "DROP TABLE IF EXISTS sys_man_attachment";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE sys_man_attachment ( att_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, user_id int(10) unsigned default NULL, att_title varchar(200) NOT NULL default '', att_filename text NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00',  PRIMARY KEY  (att_id),  KEY system_id (system_id),  CONSTRAINT att_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE, CONSTRAINT att_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_man_notes DROP timestamp";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_man_notes ADD timestamp datetime NOT NULL default '0000-00-00 00:00:00'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS oa_device_col";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS oa_device";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE oa_device ( dev_id int(10) unsigned NOT NULL auto_increment, dev_name varchar(100) NOT NULL default '', dev_group_id int(10) unsigned NOT NULL default '0', PRIMARY KEY (dev_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE oa_device_col ( col_id int(10) unsigned NOT NULL auto_increment, dev_id int(10) unsigned default NULL, col_table varchar(100) NOT NULL default '', col_column varchar(100) NOT NULL default '', col_type varchar(100) NOT NULL default '', col_order int(10) unsigned default NULL, PRIMARY KEY (col_id), KEY dev_id (dev_id), CONSTRAINT oa_dev_col_dev_id FOREIGN KEY (dev_id) REFERENCES oa_device (dev_id) ON DELETE CASCADE) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_config ADD config_editable varchar(1) NOT NULL default 'n'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_config ADD config_edited_date datetime NOT NULL default '0000-00-00 00:00:00'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_config ADD config_edited_by int(10) unsigned NOT NULL default '0'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_config ADD config_description varchar(200) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20130126', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = 'beta8', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('non_admin_search', 'y', 'y', 'Enable or disable search for non-Administrators');";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20130130') and ($this->db->platform() == 'mysql')) {
    # upgrade for beta8
    $sql = "UPDATE oa_config set config_value = '20130130', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = 'beta8.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20130131') and ($this->db->platform() == 'mysql')) {
    # upgrade for beta8
    $sql = "UPDATE oa_config set config_value = '20130131', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = 'beta8.4', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20130201') and ($this->db->platform() == 'mysql')) {
    # upgrade for beta8
    $sql = "UPDATE oa_config set config_value = '20130201', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = 'beta8.5', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20130202') and ($this->db->platform() == 'mysql')) {
    # upgrade for beta9

    $sql = "DROP TABLE IF EXISTS oa_asset_line";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE oa_asset_line ( line_id int(10) NOT NULL auto_increment, order_id int(10) unsigned default NULL, org_id int(10) unsigned default NULL, select_id int(10) unsigned default NULL, line_amount int(10) unsigned default NULL, line_cost_each int(10) unsigned default NULL, line_tax_each int(10) unsigned default NULL, line_asset_number varchar(50) NOT NULL, line_gl varchar(50) NOT NULL, line_type enum('', 'sw', 'hw') NOT NULL default '', line_sw_license_expires_date datetime NOT NULL default '0000-00-00 00:00:00', line_sw_license_key varchar(50) NOT NULL, line_sw_license_number varchar(50) NOT NULL, line_sw_license_agreement varchar(50) NOT NULL, line_sw_license_type enum('', 'license', 'license and maintenance', 'upgrade', 'upgrade and maintenance', 'maintenance') NOT NULL default '', line_vendor_producit_id varchar(50) NOT NULL, line_vendor_part_id varchar(50) NOT NULL, line_maintenance_included varchar(50) NOT NULL, line_maintenance_date_expires datetime NOT NULL default '0000-00-00 00:00:00', allocate_type enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default '', allocate_text varchar(50) NOT NULL default '', PRIMARY KEY  (line_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS oa_asset_order";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE oa_asset_order ( order_id int(10) NOT NULL auto_increment, order_date datetime NOT NULL default '0000-00-00 00:00:00', order_po varchar(50) NOT NULL, order_vn varchar(50) NOT NULL, order_in varchar(50) NOT NULL, order_vendor varchar(50) NOT NULL, order_auth_officer varchar(100) NOT NULL, order_cost_code varchar(50) NOT NULL, order_notes text NOT NULL default '', PRIMARY KEY  (order_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS oa_asset_select";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE oa_asset_select (select_id int(10) NOT NULL auto_increment, select_name varchar(50) NOT NULL, select_type enum('', 'sw', 'hw', 'service', 'other') NOT NULL default '', select_sql varchar(250) NOT NULL, group_id int(10) unsigned default NULL, group_amount int(10) unsigned default '0', PRIMARY KEY (select_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_asset_line CHANGE line_type line_type enum('', 'sw', 'hw', 'service', 'other') NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_asset_line CHANGE allocate_type allocate_type enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_asset_line CHANGE allocate_text allocate_text varchar(50) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('ad_domain', '', 'y', 'The domain name against which your users will validate. EG - open-audit.org') ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('ad_server', '', 'y', 'The IP Address of your domain controller. EG - 192.168.0.1') ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20130202', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = 'beta 9', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20130204') and ($this->db->platform() == 'mysql')) {
    # upgrade for beta 9.1

    $sql = "DROP TABLE IF EXISTS oa_asset_line";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE oa_asset_line ( line_id int(10) NOT NULL auto_increment, order_id int(10) unsigned default NULL, org_id int(10) unsigned default NULL, select_id int(10) unsigned default NULL, line_amount int(10) unsigned default NULL, line_cost_each int(10) unsigned default NULL, line_tax_each int(10) unsigned default NULL, line_asset_number varchar(50) NOT NULL, line_gl varchar(50) NOT NULL, line_type enum('', 'sw', 'hw') NOT NULL default '', line_sw_license_expires_date datetime NOT NULL default '0000-00-00 00:00:00', line_sw_license_key varchar(50) NOT NULL, line_sw_license_number varchar(50) NOT NULL, line_sw_license_agreement varchar(50) NOT NULL, line_sw_license_type enum('', 'license', 'license and maintenance', 'upgrade', 'upgrade and maintenance', 'maintenance') NOT NULL default '', line_vendor_producit_id varchar(50) NOT NULL, line_vendor_part_id varchar(50) NOT NULL, line_maintenance_included varchar(50) NOT NULL, line_maintenance_date_expires datetime NOT NULL default '0000-00-00 00:00:00', allocate_type enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default '', allocate_text varchar(50) NOT NULL default '', PRIMARY KEY  (line_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS oa_asset_order";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE oa_asset_order ( order_id int(10) NOT NULL auto_increment, order_date datetime NOT NULL default '0000-00-00 00:00:00', order_po varchar(50) NOT NULL, order_vn varchar(50) NOT NULL, order_in varchar(50) NOT NULL, order_vendor varchar(50) NOT NULL, order_auth_officer varchar(100) NOT NULL, order_cost_code varchar(50) NOT NULL, order_notes text NOT NULL default '', PRIMARY KEY  (order_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('auto_create_network_groups', 'y', 'y', 'Have Open-AudIT automatically create Groups based on Subnet.') ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20130204', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = 'beta 9.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20130205') and ($this->db->platform() == 'mysql')) {
    # upgrade for beta 9.2
    $sql = "DROP TABLE IF EXISTS oa_asset_line";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE oa_asset_line ( line_id int(10) NOT NULL auto_increment, order_id int(10) unsigned default NULL, org_id int(10) unsigned default NULL, select_id int(10) unsigned default NULL, line_amount int(10) unsigned default NULL, line_cost_each int(10) unsigned default NULL, line_tax_each int(10) unsigned default NULL, line_asset_number varchar(50) NOT NULL, line_gl varchar(50) NOT NULL, line_type enum('', 'sw', 'hw') NOT NULL default '', line_sw_license_expires_date datetime NOT NULL default '0000-00-00 00:00:00', line_sw_license_key varchar(50) NOT NULL, line_sw_license_number varchar(50) NOT NULL, line_sw_license_agreement varchar(50) NOT NULL, line_sw_license_type enum('', 'license', 'license and maintenance', 'upgrade', 'upgrade and maintenance', 'maintenance') NOT NULL default '', line_vendor_producit_id varchar(50) NOT NULL, line_vendor_part_id varchar(50) NOT NULL, line_maintenance_included varchar(50) NOT NULL, line_maintenance_date_expires datetime NOT NULL default '0000-00-00 00:00:00', allocate_type enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default '', allocate_text varchar(50) NOT NULL default '', PRIMARY KEY  (line_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS oa_asset_order";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE oa_asset_order ( order_id int(10) NOT NULL auto_increment, order_date datetime NOT NULL default '0000-00-00 00:00:00', order_po varchar(50) NOT NULL, order_vn varchar(50) NOT NULL, order_in varchar(50) NOT NULL, order_vendor varchar(50) NOT NULL, order_auth_officer varchar(100) NOT NULL, order_cost_code varchar(50) NOT NULL, order_notes text NOT NULL default '', PRIMARY KEY  (order_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('auto_create_network_groups', 'y', 'y', 'Have Open-AudIT automatically create Groups based on Subnet.') ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20130205', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = 'beta 9.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20130512') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.0
    $this->data['output'] .= "New 'All Devices' Group created. Ensure you have access via Admin -> Users -> Edit User<br /><br />\n";

    $sql = "ALTER TABLE system ADD nmap_type varchar(50) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD contact_name varchar(50) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD fqdn text NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD access_details text NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD snmp_oid text NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD nmis_group varchar(50) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD nmis_name varchar(50) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD nmis_role varchar(50) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_report_column MODIFY column_type enum('','link','image','ip_address','text','timestamp','url', 'multi')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location MODIFY location_latitude float(10,6)";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location MODIFY location_longitude float(10,6)";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location ADD location_icon varchar(100) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location ADD location_geotag varchar(200) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_user ADD user_active varchar(1) NOT NULL default 'y'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_user SET user_active = 'y'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system DROP man_acting_server";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD system_key_type varchar(4) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('nmis', 'n', 'y', 'Enable import / export to NMIS functions.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_group_column set column_link = '/main/system_display/' WHERE group_id = '1' and column_name = 'Hostname'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE system SET type = 'computer', man_type = 'computer' WHERE type = 'system' or man_type = 'system'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    # grab a copy of the users and their access levels to group_id 1
    $sql = "SELECT user_id, group_user_access_level FROM oa_group_user WHERE group_id = '1'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
    $user_array = $query->result();

    $sql = "DELETE FROM oa_group WHERE group_id = '1'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DELETE FROM oa_group_column WHERE group_id = '1'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group VALUES  ('1', 'All Devices', '', 'SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\'',1,'Any items that have their status attribute set to production.', 'device', '', 'devices')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '1', 'Icon', 'man_icon', 'image', '',  'man_os_family', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '2', 'Hostname', 'hostname', 'link', '/main/system_display/', 'system_id', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '3', 'IP Address', 'man_ip_address', 'ip_address', '',  '', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '4', 'Type', 'man_type', 'text', '',  '', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '5', 'Description', 'man_description', 'text', '',  '', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '6', 'OS / Device', 'man_os_name', 'text', '',  '', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '7', 'Tags', 'tag',  'text', '',  '', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    # re-insert the users who originally had access to the group_id 1 which should be the All Devices group
    foreach ($user_array as $user) {
        $sql = "INSERT INTO oa_group_user (group_user_id, user_id, group_id,
            group_user_access_level) VALUES (NULL, ?, '1', ?)";
        $data = array($user->id, $user->group_user_access_level);
        $query = $this->db->query($sql, $data);
        $this->data['output'] .= $this->db->last_query()."<br /><br />\n";
    }

    $sql = "update oa_group_column set column_link = '/main/system_display/' where column_link = 'main/system_display/'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20130512', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.0', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20130620') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.0.3

    $sql = "ALTER TABLE sys_man_audits ADD system_audits_ip varchar(30) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location CHANGE location_geotag location_geo varchar(200) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location ADD location_suburb varchar(100) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location ADD location_district varchar(100) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location ADD location_region varchar(100) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location ADD location_area varchar(100) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_location ADD location_tags varchar(250) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '(R)', '')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '(r)', '')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '(TM)', '')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '(tm)', '')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE system SET man_os_name = replace (man_os_name, '(R)', '')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE system SET man_os_name = replace (man_os_name, '(r)', '')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE system SET man_os_name = replace (man_os_name, '(TM)', '')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE system SET man_os_name = replace (man_os_name, '(tm)', '')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('nmis_url', '', 'y', 'The web server address of Open-AudIT Enterprise.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('oae_url', '', 'y', 'The web server address of Open-AudIT Enterprise.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('maps_url', '', 'y', 'The web server address of opMaps.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20130620', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.0.3', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20130810') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.0.4
    $this->load->model('m_oa_user');

    $sql = "ALTER TABLE sys_sw_pagefile ADD pagefile_size varchar(10) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_location_rack_size int(10) unsigned NOT NULL default '0'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS oa_net_nmap_ports";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS oa_net_scan_latest";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS oa_net_scan_log";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS oa_net_scan_type";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_hw_battery";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_hw_firewire";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_hw_floppy";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_hw_keyboard";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_hw_modem";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_hw_mouse";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_hw_onboard_device";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_hw_scsi_device";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_hw_tape_drive";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_hw_usb";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_sw_antivirus";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_sw_database_log";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_sw_firewall";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_sw_firewall_auth_app";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_sw_firewall_ports";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_sw_mapped";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_sw_odbc";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_sw_startup";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_sw_system_security";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_sw_system_security_bulletins";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    # Add the Open-AudIT Enterprise user if not already present
    if (!$this->m_oa_user->select_user("open-audit_enterprise")) {
        $sql = "INSERT INTO oa_user (user_id, user_name, user_password, user_full_name, user_lang, user_theme, user_admin, user_change, user_sam, user_active) VALUES (NULL, 'open-audit_enterprise', '43629bd846bb90e40221d5276c832857ca51e49e325f7344704543439ffd6b6d3a963a32a41f55fca6d995fd302acbe03ea7d8bf2b3af91d662d497b0ad9ba1e', 'Open-AudIT Enterprise', 'en', 'tango', 'n', '0', '1', 'y')";
        $this->data['output'] .= $sql."<br /><br />\n";
        $query = $this->db->query($sql);
        $user_id = $this->db->insert_id();
        $sql = "INSERT INTO oa_group_user (user_id, group_id, group_user_access_level) VALUES ('".$user_id."', '1', '3')";
        $this->data['output'] .= $sql."<br /><br />\n";
        $query = $this->db->query($sql);
        $this->data['message'] .= "A new user 'open-audit_enterprise' has been created. This user has 'list view only' access to the All Devices group. Please disable if you are not using Open-AudIT Enterprise.<br /><br />";
    }

    # Add the NMIS user if not already present
    if (!$this->m_oa_user->select_user("nmis")) {
        $sql = "INSERT INTO oa_user (user_id, user_name, user_password, user_full_name, user_lang, user_theme, user_admin, user_change, user_sam, user_active) VALUES (NULL, 'nmis', '5a7f9a638ea430196d765ef8d3875eafd64ee3d155ceddaced75467a76b97ab24080cba4a2e74cde03799a6a49dbc5c36ee204eff1d5f42e08cf7a423fdf9757', 'NMIS', 'en', 'tango', 'y', '0', '1', 'y')";
        $this->data['output'] .= $sql."<br /><br />\n";
        $query = $this->db->query($sql);
        $user_id = $this->db->insert_id();
        $sql = "INSERT INTO oa_group_user (user_id, group_id, group_user_access_level) VALUES ('".$user_id."', '1', '3')";
        $this->data['output'] .= $sql."<br /><br />\n";
        $query = $this->db->query($sql);
        $this->data['message'] .= "A new user 'nmis' has been created. This user has admin access. Please disable if you are not using Open-AudIT Enterprise.<br /><br />";
    }

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable) VALUES ('logo', 'oac-oae', 'n')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('name_match', 'n', 'y', 'Should we match a device based only on its hostname as a last resort.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_log CHANGE log_file_name log_file_name varchar(250) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "DROP TABLE IF EXISTS sys_sw_netstat";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE sys_sw_netstat (id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, protocol enum('tcp', 'udp', 'tcp6', 'udp6', '') NOT NULL default '', ip_address varchar(45) NOT NULL default '', port int(5) NOT NULL default '0', program  varchar(250) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00',  PRIMARY KEY  (id), KEY system_id (system_id), CONSTRAINT sys_sw_netstat_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    # we are removing man_vendor from the database
    # there is a column called man_purchase_vendor which is used on several forms
    # man_vendor data (if exists) will be copied to man_purchase_vendor (if not exists)
    $sql = "SELECT system_id, man_vendor, man_purchase_vendor FROM system";
    $query = $this->db->query($sql);
    $system_array = $query->result();

    foreach ($system_array as $system) {
        if ($system->man_vendor > "" and $system->man_purchase_vendor == "") {
            $sql = "UPDATE system SET man_purchase_vendor = ? WHERE system_id = ?";
            $data = array($system->man_vendor, $system->system_id);
            $query = $this->db->query($sql, $data);
            $this->data['output'] .= $this->db->last_query()."<br /><br />\n";
        }
    }

    $sql = "ALTER TABLE system CHANGE description description varchar(250) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system CHANGE man_description man_description varchar(250) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system DROP man_vendor";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_config CHANGE config_value config_value varchar(250) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('snmp_default_community', 'public', 'y', 'The default community string Open-AudIT will use when connecting to a new device.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20130810', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.0.4', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20131130') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.0.5
    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('distinct_groups', 'y', 'y', 'Display Groups on the homepage, separated into the type of each Group.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20131130', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.0.5', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20131211') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.0.6
    $sql = "UPDATE oa_config set config_value = '20131211', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.0.6', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20131219') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.1
    $sql = "UPDATE oa_config set config_value = '20131219', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20140126') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.1.1

    # update the details of the default group
    $sql = "UPDATE oa_location set location_name = 'Default Location', location_type = 'Office', location_city = 'Gold Coast', location_state = 'Queensland', location_country = 'Australia', location_latitude = '-28.017260', location_longitude = '153.425705', location_icon = 'office' WHERE location_id = '0'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    # insert the accompanying group
    $sql = "INSERT INTO oa_group (group_id, group_name, group_dynamic_select, group_parent, group_description, group_category, group_icon) VALUES (NULL, 'Items in Default Location', 'SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = \'0\' and system.man_status = \'production\'', '1', 'Items in Default Location', 'location', 'location')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
    $group_id = $this->db->insert_id();

    # give Admin level users access to the group
    $sql = "INSERT INTO oa_group_user (SELECT NULL, user_id, ?, '10' FROM oa_user WHERE user_admin = 'y')";
    $data = array( $group_id );
    $query = $this->db->query($sql, $data);
    $this->data['output'] .= $this->db->last_query()."<br /><br />\n";

    # and update the location with the inserted group_id
    $sql = "UPDATE oa_location SET location_group_id = ? WHERE location_id = '0'";
    $data = array( $group_id );
    $query = $this->db->query($sql, $data);
    $this->data['output'] .= $this->db->last_query()."<br /><br />\n";

    $sql = "UPDATE oa_config set config_value = '/omk/oae' WHERE config_name = 'oae_url'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '/omk/oae/map' WHERE config_name = 'maps_url'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_description = 'The web server address of NMIS.' WHERE config_name = 'nmis_url'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "SELECT config_value FROM oa_config WHERE config_name = 'nmis_url'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
    $row = $query->row();
    if ($row->config_value == 'http://localhost/cgi-nmis8/nmiscgi.pl') {
        $sql = "UPDATE oa_config set config_value = '' WHERE config_name = 'nmis_url'";
        $this->data['output'] .= $sql."<br /><br />\n";
        $query = $this->db->query($sql);
    }

    $sql = "UPDATE oa_config set config_value = '20140126', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.1.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "SELECT count(*) AS systems FROM system";
    $query = $this->db->query($sql);
    $row = $query->row();
    if ($row->systems > "0") {
        $this->data['output'] .= "<br /><span style=\"color:red;\">NOTE</span> Please click <a href=\"../groups\" style=\"color: blue;\">this link</a> (or go to Admin -> List Groups) and update (icon on the right) the new Group for 'Items in Default Location'.<br />";
    }
}

if (($db_internal_version < '20140204') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.2

    $sql = "ALTER TABLE sys_hw_memory ADD memory_serial varchar(100) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_netstat CHANGE protocol protocol enum('tcp', 'udp', 'tcp6', 'udp6', 'tcp4', 'udp4', '') NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_software ADD software_description text NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_windows_username', '', 'y', 'The default username used by Open-AudIT to audit Windows PCs.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_windows_password', '', 'y', 'The default password used by Open-AudIT to audit Windows PCs.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_windows_domain', '', 'y', 'The default active directory domain used by Open-AudIT to audit Windows PCs.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_ssh_username', '', 'y', 'The default username used by Open-AudIT to audit devices via SSH.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_ssh_password', '', 'y', 'The default password used by Open-AudIT to audit devices via SSH.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_network_address', '', 'y', 'The ip address or resolvable hostname used by external devices to talk to Open-AudIT.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = 'y' WHERE config_name = 'name_match'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
    $this->data['output'] .= "<br /><span style=\"color:red;\">NOTE</span> The configuration item name_match has been set to \"y\". This is for the new discovery features. If you do not wish to match devices based on their hostname, please go to Admin -> Config and change it to \"n\".\n";

    $sql = "UPDATE oa_config SET config_name = 'default_snmp_community' WHERE config_name = 'snmp_default_community'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE oa_temp ( temp_id int(10) unsigned NOT NULL auto_increment, temp_name text NOT NULL, temp_value text NOT NULL, temp_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (temp_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('show_snmp_community', 'y', 'y', 'Show the SNMP community string on forms.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('show_passwords', 'y', 'y', 'Show any passwords on forms.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '20140204', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '1.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20140228') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.2.1

    $sql = "UPDATE oa_config set config_value = '20140228', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.2.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20140403') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.3

    $sql = "ALTER TABLE sys_hw_processor ADD processor_count int(2) unsigned NOT NULL default '0' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_processor ADD processor_logical int(2) unsigned NOT NULL default '0' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    # we need to upgrade the OAE user to admin because it needs to read the config to populate the discovery page in OAE
    $sql = "UPDATE oa_user SET user_admin = 'y' WHERE user_name = 'open-audit_enterprise' ";
    $this->data['output'] .= "We need to upgrade the open-audit_enterprise user to admin level because it needs to read the config to populate the discovery page in Open-AudIT Enterprise.<br /><br />\n";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20140403', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.3', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20140501') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.3.1

    $sql = "UPDATE oa_config set config_value = '20140501', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.3.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20140515') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.3.2

    $sql = "ALTER TABLE sys_hw_network_card_ip ADD net_index varchar(10) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('rss_enable', 'y', 'y', 'Enable the RSS feed.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('rss_url', 'https://community.opmantek.com/rss/OA.xml', 'y', 'The RSS feed URL.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system CHANGE man_class man_class enum('desktop','laptop','tablet','workstation','server','virtual server','virtual desktop','','hypervisor') NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE sys_sw_virtual_machine ( id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, guest_system_id int(10) unsigned default NULL, name varchar(100) NOT NULL default '', vm_id int(12) unsigned NOT NULL default '0', vm_group text NOT NULL default '', config_file text NOT NULL default '', uuid text NOT NULL default '', memory int(12) unsigned NOT NULL default '0', cpu int(10) unsigned NOT NULL default '0', status varchar(100) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (id), KEY system_id (system_id), CONSTRAINT sys_sw_virtual_machine_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20140515', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.3.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20140620') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.3.3

    $sql = "ALTER TABLE sys_hw_network_card ADD net_alias varchar(255) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '20140620', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '1.3.3', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20140720') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.4

    $sql = "ALTER TABLE sys_hw_hard_drive ADD hard_drive_firmware varchar(100) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_processor ADD processor_architecture varchar(100) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_ipmi_username', '', 'y', 'The default username used by Open-AudIT to audit devices via IPMI.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_ipmi_password', '', 'y', 'The default password used by Open-AudIT to audit devices via IPMI.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_network_card CHANGE net_model net_model varchar(255) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '20140720', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '1.4', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20140827') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.4.1

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('download_reports', 'download', 'y', 'Tells Open-AudIT to advise the browser to download as a file or display the csv, xml, json reports. Valid values are download and display.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '20140827', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '1.4.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20141024') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.5

    $sql = "ALTER TABLE oa_user_sessions CHANGE ip_address ip_address varchar(45) DEFAULT '0' NOT NULL";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_user_sessions CHANGE user_agent user_agent varchar(120) NOT NULL";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $fields = $this->db->list_fields('sys_hw_hard_drive');
    $temp_hit = 0;
    foreach ($fields as $field) {
        if ($field == 'hard_drive_model_family') {
            $temp_hit = 1;
        }
    }
    if ($temp_hit == 0) {
        $sql = "ALTER TABLE sys_hw_hard_drive ADD hard_drive_model_family varchar(200) NOT NULL default '' ";
        $this->data['output'] .= $sql."<br /><br />\n";
        $query = $this->db->query($sql);
    }

    $sql = 'UPDATE oa_report_column SET column_link = "/report/Specific Software/$group_id/" WHERE column_link = "/report/specific_software/$group_id/"';
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = 'UPDATE oa_report_column SET column_link = "/report/Specific Key Name/$group_id/" WHERE column_link = "/report/specific_key_name/$group_id/"';
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = 'UPDATE oa_report_column SET column_link = "/report/Specific Key Text/$group_id/" WHERE column_link = "/report/specific_key_text/$group_id/"';
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20141024', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.5', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20141130') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.5.1

    $sql = "ALTER TABLE system ADD sysDescr varchar(255) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD sysObjectID varchar(255) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD sysUpTime varchar(255) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD sysContact varchar(255) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD sysName varchar(255) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD sysLocation varchar(255) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20141130', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.5.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20141208') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.5.2

    $sql = "ALTER TABLE system ADD nmis_export enum('true', 'false') NOT NULL default 'false' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system CHANGE sysDescr sysDescr text NOT NULL";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system CHANGE description description text NOT NULL";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system CHANGE man_description man_description text NOT NULL";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '20141208', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_value = '1.5.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);
}

if (($db_internal_version < '20141225') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.5.3

    $log_details = new stdClass();
    $log_details->file = 'system';
    $log_details->message = 'Upgrade database to 1.5.3 commenced';
    stdlog($log_details);

    $sql = "ALTER TABLE sys_sw_windows ADD windows_workgroup varchar(255) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_location_latitude float(10,6) NOT NULL ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_location_longitude float(10,6) NOT NULL ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_purchase_service_contract_number varchar(255) NOT NULL default '' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_lease_expiry_date date NOT NULL default '0000-00-00' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE system SET type = LOWER(type)";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE system SET man_type = LOWER(man_type)";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Devices Discovered in the Last Days','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE system.man_status = \'production\' and oa_group_sys.group_id = @group and system.first_timestamp > (NOW() - INTERVAL ? DAY) and system.man_ip_address <> \'\' and system.man_ip_address <> \'0.0.0.0\' and system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
    (NULL,$insert_id,1,'IP Address','man_ip_address','ip_address','','','','left'),
    (NULL,$insert_id,2,'Type','man_type','text','','','','left'),
    (NULL,$insert_id,3,'OS','man_os_name','text','','','','left'),
    (NULL,$insert_id,4,'First Audited','first_timestamp','timestamp','','','','left'),
    (NULL,$insert_id,5,'Last Audited','timestamp','timestamp','','','','left'),
    (NULL,$insert_id,6,'Status','status','text','','','','left')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Software Discovered in the Last Days','','n','SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, DATE(sys_sw_software.timestamp) AS first_attribute FROM sys_sw_software LEFT JOIN system ON sys_sw_software.system_id = system.system_id WHERE system.man_status = \'production\' and sys_sw_software.first_timestamp != system.first_timestamp and sys_sw_software.first_timestamp > (NOW() - INTERVAL ? DAY) GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'Package Name','software_name','link','/omk/oae/show_report/specific software/','software_id','first_attribute','left'),
    (NULL,$insert_id,1,'Type','software_comment','text','','','','center'),
    (NULL,$insert_id,2,'Installs','software_count','text','','','','center'),
    (NULL,$insert_id,3,'Contact','software_url','url','','','','center'),
    (NULL,$insert_id,4,'Version','software_version','text','','','','left'),
    (NULL,$insert_id,5,'Publisher','software_publisher','text','','','','left'),
    (NULL,$insert_id,6,'Google Search','','url','https://encrypted.google.com/search?q=','software_name','google','center')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Devices Not Seen by Date','','n','SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN oa_location on system.man_location_id = oa_location.location_id LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id and system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(?, INTERVAL 30 day) and oa_group_sys.group_id = @group and man_status = \'production\' and (system.man_ip_address <> \'\' and system.man_ip_address <> \'000.000.000.000\' and system.man_ip_address <> \'0.0.0.0\') GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
    (NULL,$insert_id,1,'Type','man_type','text','','','','left'),
    (NULL,$insert_id,2,'Location','location_name','text','','','','left'),
    (NULL,$insert_id,3,'User','windows_user_name','text','','','','left'),
    (NULL,$insert_id,4,'Manufacturer','man_manufacturer','text','','','','left'),
    (NULL,$insert_id,5,'Model','man_model','text','','','','left'),
    (NULL,$insert_id,6,'Serial','man_serial','text','','','','left'),
    (NULL,$insert_id,7,'First Audited','first_timestamp','timestamp','','','','left'),
    (NULL,$insert_id,8,'Last Audited','timestamp','timestamp','','','','left')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Specific Software','','n','SELECT system.system_id, system.hostname, sys_sw_software.software_id, sys_sw_software.software_name, sys_sw_software.software_installed_by, date(sys_sw_software.software_installed_on) as software_installed_on, sys_sw_software.software_version, date(sys_sw_software.first_timestamp) as first_timestamp FROM system LEFT JOIN sys_sw_software ON (system.system_id = sys_sw_software.system_id and system.first_timestamp < sys_sw_software.first_timestamp) WHERE system.man_status = \'production\' and sys_sw_software.software_name = (SELECT software_name FROM sys_sw_software WHERE software_id = ? LIMIT 1) and date(sys_sw_software.first_timestamp) = date(?) GROUP BY system.system_id','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'Software Name','software_name','link','/omk/oae/show_report/Specific Software/','software_id','','left'),
    (NULL,$insert_id,1,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
    (NULL,$insert_id,2,'Software Version','software_version','text','','','','left'),
    (NULL,$insert_id,3,'Detected On','first_timestamp','timestamp','','','','center'),
    (NULL,$insert_id,4,'Installed By','software_installed_by','text','','','','left'),
    (NULL,$insert_id,5,'Installed On','software_installed_on','timestamp','','','','center')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Software Discovered by Date','','n','SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, date(sys_sw_software.first_timestamp) as first_attribute FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id and sys_sw_software.first_timestamp != system.first_timestamp) LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE system.man_status = \'production\' and oa_group_sys.group_id = @group and date(sys_sw_software.first_timestamp) = ? GROUP BY sys_sw_software.software_name ORDER BY sys_sw_software.software_name','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'Package Name','software_name','link','/omk/oae/show_report/Enterprise - Specific Software/','software_id','first_attribute','left'),
    (NULL,$insert_id,1,'Type','software_comment','text','','','','center'),
    (NULL,$insert_id,2,'Installs','software_count','text','','','','center'),
    (NULL,$insert_id,3,'Contact','software_url','url','','','','center'),
    (NULL,$insert_id,4,'Version','software_version','text','','','','left'),
    (NULL,$insert_id,5,'Publisher','software_publisher','text','','','','left'),
    (NULL,$insert_id,6,'Google Search','','url','https://encrypted.google.com/search?q=','software_name','google','center')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Devices Discovered by Date','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, man_status AS status, last_seen_by FROM system WHERE system.man_status = \'production\' and date(system.first_timestamp) = ? and system.man_ip_address <> \'\' and system.man_ip_address <> \'0.0.0.0\' and system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
    (NULL,$insert_id,1,'IP Address','man_ip_address','ip_address','','','','left'),
    (NULL,$insert_id,2,'Type','man_type','text','','','','left'),
    (NULL,$insert_id,3,'OS','man_os_name','text','','','','left'),
    (NULL,$insert_id,5,'Last Seen By','last_seen_by','text','','','','left'),
    (NULL,$insert_id,6,'Status','status','text','','','','left')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Devices Not Seen in the Last Days','','n','SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN oa_location on system.man_location_id = oa_location.location_id LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id and system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(NOW(), INTERVAL ? day) and oa_group_sys.group_id = @group and man_status = \'production\' and (system.man_ip_address <> \'\' and system.man_ip_address <> \'000.000.000.000\' and system.man_ip_address <> \'0.0.0.0\') GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
    (NULL,$insert_id,1,'Type','man_type','text','','','','left'),
    (NULL,$insert_id,2,'Location','location_name','text','','','','left'),
    (NULL,$insert_id,3,'User','windows_user_name','text','','','','left'),
    (NULL,$insert_id,4,'Manufacturer','man_manufacturer','text','','','','left'),
    (NULL,$insert_id,5,'Model','man_model','text','','','','left'),
    (NULL,$insert_id,6,'Serial','man_serial','text','','','','left'),
    (NULL,$insert_id,7,'First Audited','first_timestamp','timestamp','','','','left'),
    (NULL,$insert_id,8,'Last Audited','timestamp','timestamp','','','','left')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - OS Group','','n','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) WHERE man_os_group = ? and man_status = \'production\'','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'Icon','man_icon','image','','man_os_family','','center'),
    (NULL,$insert_id,1,'OS Family','man_os_family','link','/omk/oae/show_report/Enterprise - OS Family/','man_os_family','','left'),
    (NULL,$insert_id,2,'Hostname','hostname','link','/omk/oae/device_details/','system_id','','left'),
    (NULL,$insert_id,3,'IP Address','man_ip_address','ip_address','','','','left'),
    (NULL,$insert_id,4,'Type','man_type','text','','','','left'),
    (NULL,$insert_id,5,'Manufacturer','man_manufacturer','text','','','','left'),
    (NULL,$insert_id,6,'Model','man_model','text','','','','left'),
    (NULL,$insert_id,7,'Serial','man_serial','text','','','','left'),
    (NULL,$insert_id,8,'Location','location_name','text','','','','left')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - OS Types','','n','SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system WHERE man_status = \'production\')) * 100) AS y, IF(CHAR_LENGTH(man_os_group)=0,\'Other\', man_os_group) AS name, count(*) as count FROM system WHERE man_status = \'production\' GROUP BY name;','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'Type','name','link','/omk/oae/show_report/Enterprise - OS Group/','name','','left'),
    (NULL,$insert_id,1,'Count','count','text','','','','left'),
    (NULL,$insert_id,2,'Percent','y','text','','','','left')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - OS Family','','n','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) WHERE man_os_family = ? and man_status = \'production\'','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'Icon','man_icon','image','','man_os_family','','center'),
    (NULL,$insert_id,1,'OS Name','man_os_name','link','/omk/oae/show_report/Enterprise - OS Name/','man_os_name','','left'),
    (NULL,$insert_id,2,'Hostname','hostname','link','/omk/oae/device_details/','system_id','','left'),
    (NULL,$insert_id,3,'IP Address','man_ip_address','ip_address','','','','left'),
    (NULL,$insert_id,4,'Type','man_type','text','','','','left'),
    (NULL,$insert_id,5,'Manufacturer','man_manufacturer','text','','','','left'),
    (NULL,$insert_id,6,'Model','man_model','text','','','','left'),
    (NULL,$insert_id,7,'Serial','man_serial','text','','','','left'),
    (NULL,$insert_id,8,'Location','location_name','text','','','','left')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - OS Name','','n','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) WHERE man_os_name = ? and man_status = \'production\'','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'Icon','man_icon','image','','man_os_family','','center'),
    (NULL,$insert_id,1,'OS Name','man_os_name','text','','','','left'),
    (NULL,$insert_id,2,'Hostname','hostname','link','/omk/oae/device_details/','system_id','','left'),
    (NULL,$insert_id,3,'IP Address','man_ip_address','ip_address','','','','left'),
    (NULL,$insert_id,4,'Type','man_type','text','','','','left'),
    (NULL,$insert_id,5,'Manufacturer','man_manufacturer','text','','','','left'),
    (NULL,$insert_id,6,'Model','man_model','text','','','','left'),
    (NULL,$insert_id,7,'Serial','man_serial','text','','','','left'),
    (NULL,$insert_id,8,'Location','location_name','text','','','','left')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Device Types','','n','SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system WHERE man_status = \'production\')) * 100) AS y, man_type AS name, count(*) as count FROM system WHERE man_status = \'production\' GROUP BY name','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'Type','name','link','/omk/oae/show_report/Enterprise - Device Type/','name','','left'),
    (NULL,$insert_id,1,'Count','count','text','','','','left'),
    (NULL,$insert_id,2,'Percent','y','text','','','','left')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Device Type','','n','SELECT system.system_id, system.hostname, system.man_manufacturer, system.man_model, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system WHERE system.man_status = \'production\' and man_type = ?','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
    (NULL,$insert_id,1,'IP Address','man_ip_address','ip_address','','','','left'),
    (NULL,$insert_id,2,'Manufacturer','man_manufacturer','text','','','','left'),
    (NULL,$insert_id,3,'Model','man_model','text','','','','left'),
    (NULL,$insert_id,4,'OS','man_os_name','text','','','','left'),
    (NULL,$insert_id,5,'First Audited','first_timestamp','timestamp','','','','left'),
    (NULL,$insert_id,6,'Last Audited','timestamp','timestamp','','','','left'),
    (NULL,$insert_id,7,'Status','status','text','','','','left')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Software Discovered Range','','n','SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id and sys_sw_software.first_timestamp != system.first_timestamp) LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE system.man_status = \'production\' and oa_group_sys.group_id = @group and date(sys_sw_software.first_timestamp) >= ? and date(sys_sw_software.first_timestamp) <= ? GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'Package Name','software_name','link','/omk/oae/report/SpecificSoftwareRange/','software_id','first_attribute','left'),
    (NULL,$insert_id,1,'Type','software_comment','text','','','','center'),
    (NULL,$insert_id,2,'Installs','software_count','text','','','','center'),
    (NULL,$insert_id,3,'Contact','software_url','url','','','','center'),
    (NULL,$insert_id,4,'Version','software_version','text','','','','left'),
    (NULL,$insert_id,5,'Publisher','software_publisher','text','','','','left'),
    (NULL,$insert_id,6,'Google Search','','url','https://encrypted.google.com/search?q=','software_name','google','center')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Devices Discovered Range','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id and oa_group_sys.group_id = @group WHERE system.man_status = \'production\' and date(system.first_timestamp) >= ? and date(system.first_timestamp) <= ? and system.man_ip_address <> \'\' and system.man_ip_address <> \'0.0.0.0\' and system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0)";
    $query = $this->db->query($sql);
    $insert_id = $this->db->insert_id();

    $sql = "INSERT INTO `oa_report_column` VALUES
    (NULL,$insert_id,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
    (NULL,$insert_id,1,'IP Address','man_ip_address','ip_address','','','','left'),
    (NULL,$insert_id,2,'Type','man_type','text','','','','left'),
    (NULL,$insert_id,3,'OS','man_os_name','text','','','','left'),
    (NULL,$insert_id,4,'First Audited','first_timestamp','timestamp','','','','left'),
    (NULL,$insert_id,5,'Last Audited','timestamp','timestamp','','','','left')";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('log_style', 'syslog', 'y', 'Tells Open-AudIT which log format to use. Valid values are json and syslog.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('log_level', '5', 'y', 'Tells Open-AudIT which severity of event (at least) should be logged.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_group_column VALUES (NULL, 1, 3, 'Domain', 'domain', 'text', '', '', '', 'left')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_group_column SET column_order = 4 WHERE group_id = 1 and column_variable = 'man_ip_address' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_group_column SET column_order = 5 WHERE group_id = 1 and column_variable = 'man_type' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_group_column SET column_order = 6 WHERE group_id = 1 and column_variable = 'man_description' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_group_column SET column_order = 7 WHERE group_id = 1 and column_variable = 'man_os_name' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_group_column SET column_order = 8 WHERE group_id = 1 and column_variable = 'tag' ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '20141225', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '1.5.3', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $log_details->message = 'Upgrade database to 1.5.3 completed';
    stdlog($log_details);
    unset($log_details);
}

if (($db_internal_version < '20150227') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.5.5

    $log_details = new stdClass();
    $log_details->file = 'system';
    $log_details->message = 'Upgrade database to 1.5.5 commenced';
    stdlog($log_details);

    $this->load->library('encrypt');
    $this->load->model('m_oa_group');

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('page_refresh', '300', 'y', 'Interval in seconds between auto-refreshing the page. Set to 0 to canel auto-refresh.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE system ADD man_oae_manage enum('y', 'n') NOT NULL default 'y'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    # need to alter the allowable length of a MAC Address to cope with created addresses for 'bond' adapters
    $sql = "ALTER TABLE sys_hw_network_card CHANGE net_mac_address net_mac_address varchar(200) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_network_card_ip CHANGE net_mac_address net_mac_address varchar(200) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_network_card ADD net_slaves varchar(100) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    # need to edit some Enterprise SQL
    $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_manufacturer, system.man_model, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE man_type = ? and oa_group_sys.group_id = @group' WHERE report_name = 'Enterprise - Device Type'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group)) * 100) AS y, man_type AS name, count(*) as count FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group GROUP BY name\" WHERE report_name = 'Enterprise - Device Types'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, man_status AS status, last_seen_by FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and date(system.first_timestamp) = ? and system.man_ip_address <> '' and system.man_ip_address <> '0.0.0.0' and system.man_ip_address <> '000.000.000.000' GROUP BY system.system_id ORDER BY system.hostname\" WHERE report_name = 'Enterprise - Devices Discovered by Date'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and system.first_timestamp > (NOW() - INTERVAL ? DAY) and system.man_ip_address <> '' and system.man_ip_address <> '0.0.0.0' and system.man_ip_address <> '000.000.000.000' GROUP BY system.system_id ORDER BY system.hostname\" WHERE report_name = 'Enterprise - Devices Discovered in the Last Days'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and date(system.first_timestamp) >= ? and date(system.first_timestamp) <= ? and system.man_ip_address <> '' and system.man_ip_address <> '0.0.0.0' and system.man_ip_address <> '000.000.000.000' GROUP BY system.system_id ORDER BY system.hostname\" WHERE report_name = 'Enterprise - Devices Discovered Range'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id and system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(?, INTERVAL 30 day) and oa_group_sys.group_id = @group and (system.man_ip_address <> '' and system.man_ip_address <> '000.000.000.000' and system.man_ip_address <> '0.0.0.0') GROUP BY system.system_id ORDER BY system.hostname\" WHERE report_name = 'Enterprise - Devices Not Seen by Date'";
    $query = $this->db->query($sql);

    #$sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id and system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(?, INTERVAL ? day) and oa_group_sys.group_id = @group and (system.man_ip_address <> '' and system.man_ip_address <> '000.000.000.000' and system.man_ip_address <> '0.0.0.0') GROUP BY system.system_id ORDER BY system.hostname\" WHERE report_name = 'Enterprise - Devices Not Seen in the Last Days From'";
    #$query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id and system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(NOW(), INTERVAL ? day) and oa_group_sys.group_id = @group and (system.man_ip_address <> '' and system.man_ip_address <> '000.000.000.000' and system.man_ip_address <> '0.0.0.0') GROUP BY system.system_id ORDER BY system.hostname\" WHERE report_name = 'Enterprise - Devices Not Seen in the Last Days'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and man_os_family = ?\" WHERE report_name = 'Enterprise - OS Family'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and man_os_group = ?\" WHERE report_name = 'Enterprise - OS Group'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and man_os_name = ?\" WHERE report_name = 'Enterprise - OS Name'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group)) * 100) AS y, IF(CHAR_LENGTH(man_os_group)=0,'Other', man_os_group) AS name, count(*) as count FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group GROUP BY name\" WHERE report_name = 'Enterprise - OS Types'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, date(sys_sw_software.first_timestamp) as first_attribute FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id and sys_sw_software.first_timestamp != system.first_timestamp) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and date(sys_sw_software.first_timestamp) = ? GROUP BY sys_sw_software.software_name ORDER BY sys_sw_software.software_name\" WHERE report_name = 'Enterprise - Software Discovered by Date'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, DATE(sys_sw_software.timestamp) AS first_attribute FROM sys_sw_software LEFT JOIN system ON sys_sw_software.system_id = system.system_id LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and sys_sw_software.first_timestamp != system.first_timestamp and sys_sw_software.first_timestamp > (NOW() - INTERVAL ? DAY) GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name\" WHERE report_name = 'Enterprise - Software Discovered in the Last Days'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id and sys_sw_software.first_timestamp != system.first_timestamp) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and date(sys_sw_software.first_timestamp) >= ? and date(sys_sw_software.first_timestamp) <= ? GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name\" WHERE report_name = 'Enterprise - Software Discovered Range'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, sys_sw_software.software_id, sys_sw_software.software_name, sys_sw_software.software_installed_by, date(sys_sw_software.software_installed_on) as software_installed_on, sys_sw_software.software_version, date(sys_sw_software.first_timestamp) as first_timestamp FROM system LEFT JOIN sys_sw_software ON (system.system_id = sys_sw_software.system_id and system.first_timestamp < sys_sw_software.first_timestamp) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and sys_sw_software.software_name = (SELECT software_name FROM sys_sw_software WHERE software_id = ? LIMIT 1) and date(sys_sw_software.first_timestamp) = date(?) GROUP BY system.system_id\" WHERE report_name = 'Enterprise - Specific Software'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = \"SELECT COUNT(key_text) as count, key_name, key_text, key_id FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN sys_sw_software_key ON (sys_sw_software_key.system_id = system.system_id and sys_sw_software_key.timestamp = system.timestamp) WHERE oa_group_sys.group_id = @group and key_text IS NOT NULL GROUP BY key_name, key_text ORDER BY key_name\" WHERE report_name = 'Software Keys'";
    $query = $this->db->query($sql);

    $sql = "CREATE TABLE sys_hw_module ( id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, description varchar(200) NOT NULL default '', module_index varchar(100) NOT NULL default '', object_id varchar(100) NOT NULL default '', contained_in varchar(100) NOT NULL default '', class varchar(10) NOT NULL default '', class_text varchar(20) NOT NULL, hardware_revision varchar(100) NOT NULL, firmware_revision varchar(100) NOT NULL default '', software_revision varchar(100) NOT NULL default '', serial_number varchar(100) NOT NULL default '', asset_id varchar(100) NOT NULL default '', is_fru varchar(100) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY (id), KEY system_id (system_id), CONSTRAINT sys_hw_module_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '20150227' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '1.5.5' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $log_details->message = 'Upgrade database to 1.5.5 completed';
    stdlog($log_details);
    unset($log_details);
}

if (($db_internal_version < '20150303') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.6

    $log_details = new stdClass();
    $log_details->file = 'system';
    $log_details->message = 'Upgrade database to 1.6 commenced';
    stdlog($log_details);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('oae_license_status', '', 'n', 'License status of Open-AudIT Enterprise.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = CONCAT('logo-banner-', config_value) WHERE config_name = 'logo'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_editable = 'y', config_description = 'The logo to be used in Open-AudIT. Should be a 475x60 .png. Name should not include the file extension. logo-banner-oac-oae is the default.' WHERE config_name = 'logo'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '20150303' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '1.6' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $log_details->message = 'Upgrade database to 1.6 completed';
    stdlog($log_details);
    unset($log_details);
}

if (($db_internal_version < '20150318') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.6.2

    $log_details = new stdClass();
    $log_details->file = 'system';
    $log_details->message = 'Upgrade database to 1.6.2 commenced';
    stdlog($log_details);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(NOW(), INTERVAL ? day) AND oa_group_sys.group_id = @group AND (system.man_ip_address <> \"\" AND system.man_ip_address <> \"000.000.000.000\" AND system.man_ip_address <> \"0.0.0.0\") GROUP BY system.system_id ORDER BY system.hostname' WHERE report_name = 'Enterprise - Devices Not Seen in the Last Days'";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '20150318' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '1.6.2' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $log_details->message = 'Upgrade database to 1.6.2 completed';
    stdlog($log_details);
    unset($log_details);
}

if (($db_internal_version < '20150404') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.6.4

    $log_details = new stdClass();
    $log_details->file = 'system';
    $log_details->message = 'Upgrade database to 1.6.4 commenced';
    stdlog($log_details);

    $sql = "UPDATE oa_config SET config_value = 'logo-banner-oac-oae' WHERE config_name = 'logo'";
    $query = $this->db->query($sql);

    $sql = "SELECT report_id FROM oa_report WHERE report_name = 'Enterprise - Software Discovered Range'";
    $query = $this->db->query($sql);
    $row = $query->row();

    if (isset($row->report_id) and $row->report_id != '' and $row->report_id != '0') {
        $sql = "UPDATE oa_report_column SET column_link = '/omk/oae/show_report/Specific Software/' WHERE column_order = 0 AND report_id = " . $row->report_id;
        $query = $this->db->query($sql);
    }

    $sql = "UPDATE oa_config SET config_value = '20150404' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '1.6.4' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $log_details->message = 'Upgrade database to 1.6.4 completed';
    stdlog($log_details);
    unset($log_details);
}


if (($db_internal_version < '20150512') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.8

    $log_details = new stdClass();
    $log_details->file = 'system';
    $log_details->message = 'Upgrade database to 1.8 commenced';
    stdlog($log_details);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('network_group_subnet', '30', 'y', 'If the netmask is equal to or greater than this number, do not create a network group.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_name = 'network_group_auto_create' WHERE config_name = 'auto_create_network_groups'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_description = 'The domain name against which your users will validate to log on to Open-AudIT. EG - open-audit.org' WHERE config_name = 'ad_domain'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_description = 'The IP Address of the domain controller your users will validate to log to Open-AudIT. EG - 192.168.0.1' WHERE config_name = 'ad_server'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config set config_description = 'Interval in seconds between auto-refreshing the page. Set to 0 to cancel auto-refresh.' WHERE config_name = 'page_refresh'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('network_group_homepage_limit', '20', 'y', 'The number of network groups to display on the homepage.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_network_card ADD ifadminstatus varchar(100) NOT NULL default ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_hw_network_card ADD iflastchange bigint NOT NULL default '0'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '20150512' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '1.8' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $log_details->message = 'Upgrade database to 1.8 completed';
    stdlog($log_details);
    unset($log_details);
}

if (($db_internal_version < '20150610') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.8.1

    $log_details = new stdClass();
    $log_details->file = 'system';
    $log_details->message = 'Upgrade database to 1.8.1 commenced';
    stdlog($log_details);

    $sql = 'UPDATE oa_report_column SET column_link = "/report/specific_software/$group_id/" WHERE column_link = "/report/Specific Software/$group_id/"';
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '20150610' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '1.8.1' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $log_details->message = 'Upgrade database to 1.8.1 completed';
    stdlog($log_details);
    unset($log_details);
}

if (($db_internal_version < '20150620') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.8.2

    $log_details = new stdClass();
    $log_details->file = 'system';
    $log_details->message = 'Upgrade database to 1.8.2 commenced';
    stdlog($log_details);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('oae_prompt', '2015-06-01', 'n', 'Prompt to activate a license for Open-AudIT Enterprise.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('discovery_create_alerts', 'y', 'y', 'Should Open-AudIT create an entry in the alert table if a change is detected.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('discovery_update_groups', 'y', 'y', 'Should Open-AudIT update the device groups after discovering a device.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_name = 'oae_license' WHERE config_name = 'oae_license_status'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_name = 'discovery_name_match', config_description = 'Should we match a device based only on its hostname during discovery.' WHERE config_name = 'name_match'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config VALUES ('discovery_ip_match','n','y','0000-00-00 00:00:00',0,'Should we match a device based only on its ip during discovery.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "INSERT INTO oa_config VALUES ('discovery_use_ipmi','y','y','0000-00-00 00:00:00',0,'Should we use ipmitool for discovering management ports if ipmitool is installed.')";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE INDEX net_index ON sys_hw_network_card (net_index) ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "CREATE INDEX `timestamp` ON sys_hw_network_card (`timestamp`) ";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    # Activate a couple of reports
    $this->load->model('m_oa_report');
    $this->load->model('m_oa_report_column');

    $sql = "SELECT report_name from oa_report";
    $query = $this->db->query($sql);
    $result = $query->result();
    $activate_disk = 'y';
    $activate_interfaces = 'y';
    foreach ($result as $key => $value) {
        if ($value == 'Disk Partition Use') {
            $activate_disk = 'n';
        }
        if ($value == 'Interfaces Used - Available') {
            $activate_interfaces = 'n';
        }
    }

    # The Disk Partition Use report
    if ($activate_disk == 'y') {
        $file_report = BASEPATH.'../application/controllers/reports/DiskPartitionUse.xml';
        $file_handle = fopen($file_report, "rb");
        $contents = fread($file_handle, filesize($file_report));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $report_id = $this->m_oa_report->import_report($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_report_column->import_report($child, $report_id);
            }
        }
    }

    # The Interfaces Used / Available report
    if ($activate_interfaces == 'y') {
        $file_report = BASEPATH.'../application/controllers/reports/InterfacesUsed-Available.xml';
        $file_handle = fopen($file_report, "rb");
        $contents = fread($file_handle, filesize($file_report));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $report_id = $this->m_oa_report->import_report($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_report_column->import_report($child, $report_id);
            }
        }
    }

    $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, system.man_manufacturer, system.man_model, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_type = ?' WHERE report_name = 'Enterprise - Device Type'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT CEILING(COUNT(*) / (SELECT COUNT(system.system_id) FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id) * 100) AS y, man_type AS name, count(*) as count FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp2 ON system.system_id = grp2.system_id GROUP BY name' WHERE report_name = 'Enterprise - Device Types'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, man_status AS status, last_seen_by FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE oa_group_sys.group_id = @group AND date(system.first_timestamp) = ? AND system.man_ip_address <> \'\' AND system.man_ip_address <> \'0.0.0.0\' AND system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname LIMIT @limit' WHERE report_name = 'Enterprise - Devices Discovered by Date'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE system.first_timestamp > (NOW() - INTERVAL ? DAY) AND system.man_ip_address <> \'\' AND system.man_ip_address <> \'0.0.0.0\' AND system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname' WHERE report_name = 'Enterprise - Devices Discovered in the Last Days'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE date(system.first_timestamp) >= ? AND date(system.first_timestamp) <= ? AND system.man_ip_address <> \'\' AND system.man_ip_address <> \'0.0.0.0\' AND system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname' WHERE report_name = 'Enterprise - Devices Discovered Range'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id  LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(?, INTERVAL 30 day) AND (system.man_ip_address <> \'\' AND system.man_ip_address <> \'000.000.000.000\' AND system.man_ip_address <> \'0.0.0.0\') GROUP BY system.system_id ORDER BY system.hostname' WHERE report_name = 'Enterprise - Devices Not Seen by Date'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(?, INTERVAL ? day) AND (system.man_ip_address <> \'\' AND system.man_ip_address <> \'000.000.000.000\' AND system.man_ip_address <> \'0.0.0.0\') GROUP BY system.system_id ORDER BY system.hostname' WHERE report_name = 'Enterprise - Devices Not Seen in the Last Days From'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_os_family = ?' WHERE report_name = 'Enterprise - OS Family'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_os_group = ?' WHERE report_name = 'Enterprise - OS Group'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_os_name = ?' WHERE report_name = 'Enterprise - OS Name'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id)) * 100) AS y, IF(CHAR_LENGTH(man_os_group)=0,\'Other\', man_os_group) AS name, count(*) as count FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id GROUP BY name' WHERE report_name = 'Enterprise - OS Types'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, date(sys_sw_software.first_timestamp) as first_attribute FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id AND sys_sw_software.first_timestamp != system.first_timestamp) LEFT JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE date(sys_sw_software.first_timestamp) = ? GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name' WHERE report_name = 'Enterprise - Software Discovered by Date'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, DATE(sys_sw_software.timestamp) AS first_attribute FROM sys_sw_software LEFT JOIN system ON sys_sw_software.system_id = system.system_id INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE sys_sw_software.first_timestamp != system.first_timestamp AND sys_sw_software.first_timestamp > (NOW() - INTERVAL ? DAY) GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name' WHERE report_name = 'Enterprise - Software Discovered in the Last Days'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id AND sys_sw_software.first_timestamp != system.first_timestamp) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE date(sys_sw_software.first_timestamp) >= ? AND date(sys_sw_software.first_timestamp) <= ? GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name' WHERE report_name = 'Enterprise - Software Discovered Range'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, sys_sw_software.software_id, sys_sw_software.software_name, sys_sw_software.software_installed_by, date(sys_sw_software.software_installed_on) as software_installed_on, sys_sw_software.software_version, date(sys_sw_software.first_timestamp) as first_timestamp FROM system LEFT JOIN sys_sw_software ON (system.system_id = sys_sw_software.system_id and system.first_timestamp < sys_sw_software.first_timestamp) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE sys_sw_software.software_name = (SELECT software_name FROM sys_sw_software WHERE software_id = ? LIMIT 1) AND date(sys_sw_software.first_timestamp) = date(?) GROUP BY system.system_id' WHERE report_name = 'Enterprise - Specific Software'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE oa_group_sys DROP group_sys_type";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "ALTER TABLE sys_sw_service CHANGE service_start_mode service_start_mode varchar(100) NOT NULL DEFAULT ''";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '20150620' WHERE config_name = 'internal_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $sql = "UPDATE oa_config SET config_value = '1.8.2' WHERE config_name = 'display_version'";
    $this->data['output'] .= $sql."<br /><br />\n";
    $query = $this->db->query($sql);

    $log_details->message = 'Upgrade database to 1.8.2 completed';
    stdlog($log_details);
    unset($log_details);
}

if (($db_internal_version < '20151112') and ($this->db->platform() == 'mysql')) {
    # upgrade for 1.8.4

    $log_details = new stdClass();
    $log_details->file = 'system';
    $log_details->message = 'Upgrade database to 1.8.4 commenced';
    stdlog($log_details);

    unset($sql);
    $sql = array();
    $sql[] = "ALTER TABLE sys_sw_service MODIFY service_start_mode varchar(200) NOT NULL default ''";
    $sql[] = "ALTER TABLE sys_sw_service MODIFY service_state varchar(200) NOT NULL default ''";
    $sql[] = "DELETE FROM oa_config WHERE config_name = 'discovery_ip_exclude'";
    $sql[] = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('discovery_ip_exclude', '', 'y', 'Populate this list with ip addresses to be excluded from discovery. IPs should be separated by a space.')";

    $sql[] = "UPDATE oa_config SET config_value = '20151112' WHERE config_name = 'internal_version'";
    $sql[] = "UPDATE oa_config SET config_value = '1.8.4' WHERE config_name = 'display_version'";

    foreach ($sql as $this_query) {
        $this->data['output'] .= $this_query."<br /><br />\n";
        $log_details->message = $this_query;
        stdlog($log_details);
        $query = $this->db->query($this_query);
    }

    $log_details->message = 'Upgrade database to 1.8.4 completed';
    stdlog($log_details);
    unset($log_details);
    $this->config->config['internal_version'] = '20151112';
    $this->config->config['display_version'] = '1.8.4';
}
