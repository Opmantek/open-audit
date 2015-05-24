<?php
#
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
/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.6.4
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
/**
 * Base Object Admin.
 *
 * @access   public
 *
 * @category Object
 *
 * @author   Mark Unwin <marku@opmantek.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 *
 * @link     http://www.open-audit.org
 *
 * @return   Admin
 */
class v2 extends MY_Controller
{
    /**
     * Constructor.
     *
     * @access    public
     *
     * @category  Constructor
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return Admin
     */
    public function __construct()
    {
        parent::__construct();
        $log_details = new stdClass();
        stdlog($log_details);
        unset($log_details);
    }
    /**
     * Index.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return NULL
     */
    public function index()
    {
        redirect('/');
    }
    /**
     * Upgrade the database to v2
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return string
     */
    public function upgrade()
    {
        #if (($db_internal_version < '20160101') and ($this->db->platform() == 'mysql')) {
            # upgrade for 2.0
            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 2.0 commenced';
            stdlog($log_details);
            $this->data['output'] = '';
            $sql = array();

            # delete all non current attributes in the db
            $tables = $this->db->list_tables();
            foreach ($tables as $table) {
                if (((strpos($table, 'sys_hw_') !== false) or (strpos($table, 'sys_sw_') !== false)) and (strpos($table, "sys_hw_warranty") === false)) {
                    $sql_query = "DELETE $table FROM $table LEFT JOIN system ON (system.system_id = $table.system_id) WHERE system.timestamp <> $table.timestamp";
                    $query = $this->db->query($sql_query);
                }
            }

            # sys_man_audits -> sys_audit_log
            $sql[] = "DROP TABLE IF EXISTS sys_audit_log";
            $sql[] = "CREATE TABLE sys_audit_log ( id int(10) unsigned NOT NULL AUTO_INCREMENT, system_id int(10) unsigned DEFAULT '0', username varchar(45) NOT NULL DEFAULT '', type varchar(45) NOT NULL DEFAULT '', time varchar(45) NOT NULL DEFAULT '', ip varchar(40) NOT NULL DEFAULT '', debug text NOT NULL DEFAULT '', wmi_fails text NOT NULL DEFAULT '', timestamp datetime NOT NULL DEFAULT '0000-00-00 00:00:00', PRIMARY KEY (id), KEY system_id (system_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $sql[] = "INSERT INTO sys_audit_log SELECT NULL, system_id, system_audits_username, system_audits_type, system_audits_time, system_audits_ip, audit_debug, audit_wmi_fails, timestamp FROM sys_man_audits";
            $sql[] = "DROP TABLE IF EXISTS sys_man_audits";

            # oa_alert_log -> sys_change_log
            $sql[] = "DROP TABLE IF EXISTS sys_change_log";
            $sql[] = "CREATE TABLE sys_change_log ( id int(10) NOT NULL AUTO_INCREMENT, system_id int(10) unsigned DEFAULT '0', link_table varchar(50) NOT NULL DEFAULT '', link_row int(10) NOT NULL DEFAULT '0', details varchar(200) NOT NULL DEFAULT '', user_id int(10) unsigned DEFAULT '0', ack_time datetime NOT NULL DEFAULT '0000-00-00 00:00:00', note varchar(200) NOT NULL DEFAULT '', external_change_id varchar(200) NOT NULL DEFAULT '', external_change_link varchar(200) NOT NULL DEFAULT '', change_id int(10) unsigned NOT NULL DEFAULT '0', change_type enum('','standard','normal','emergency','unauthorised') NOT NULL DEFAULT '', timestamp datetime NOT NULL DEFAULT '0000-00-00 00:00:00', PRIMARY KEY (id), KEY system_id (system_id), KEY oa_alert_log_user_id (user_id), KEY oa_alert_change_id (change_id), CONSTRAINT sys_change_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $sql[] = "INSERT INTO sys_change_log SELECT NULL, system_id, alert_table, alert_foreign_row, alert_details, user_id, alert_ack_time, alert_note, external_change_id, external_change_link, change_id, change_type, timestamp FROM oa_alert_log";
            $sql[] = "DROP TABLE IF EXISTS oa_alert_log";

            # oa_audit_log -> sys_edit_log
            $sql[] = "DROP TABLE IF EXISTS sys_edit_log";
            $sql[] = "CREATE TABLE sys_edit_log ( id int(10) NOT NULL AUTO_INCREMENT, user_id int(10) unsigned DEFAULT '0', system_id int(10) unsigned DEFAULT '0', type varchar(50) NOT NULL DEFAULT '', details varchar(200) NOT NULL DEFAULT '', source varchar(100) NOT NULL DEFAULT '', timestamp datetime NOT NULL DEFAULT '0000-00-00 00:00:00', PRIMARY KEY (id), KEY user_id (user_id), KEY sys_edit_log_system_id (system_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $sql[] = "INSERT INTO sys_edit_log SELECT NULL, user_id, system_id, audit_log_event_type, audit_log_event_details, '', timestamp FROM oa_audit_log";
            $sql[] = "DROP TABLE IF EXISTS oa_audit_log";

            # We know these tables aren't used - drop them
            $sql[] = "DROP TABLE IF EXISTS oa_change_log";
            $sql[] = "ALTER TABLE oa_change DROP FOREIGN KEY oa_change_user_id";
            $sql[] = "DROP TABLE IF EXISTS oa_change";
            $sql[] = "DROP TABLE IF EXISTS oa_asset_line";
            $sql[] = "DROP TABLE IF EXISTS oa_asset_order";
            $sql[] = "DROP TABLE IF EXISTS oa_asset_select";
            $sql[] = "DROP TABLE IF EXISTS oa_device_col";
            $sql[] = "DROP TABLE IF EXISTS oa_device";
            $sql[] = "DROP TABLE IF EXISTS oa_graph";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_antivirus";
            $sql[] = "DROP TABLE IF EXISTS oa_switch_ports";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_share_perms";

            # DROP all the table indexes / foreign keys that link to system.system_id
            $sql[] = "ALTER TABLE oa_group_sys DROP FOREIGN KEY oa_group_sys_system_id";
            $sql[] = "ALTER TABLE sys_hw_bios DROP FOREIGN KEY sys_hw_bios_system_id";
            $sql[] = "ALTER TABLE sys_hw_hard_drive DROP FOREIGN KEY sys_hw_hard_drive_system_id";
            $sql[] = "ALTER TABLE sys_hw_graphs_disk DROP FOREIGN KEY sys_hw_graphs_disk_system_id";
            $sql[] = "ALTER TABLE sys_hw_memory DROP FOREIGN KEY sys_hw_memory_system_id";
            $sql[] = "ALTER TABLE sys_hw_module DROP FOREIGN KEY sys_hw_module_system_id";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP FOREIGN KEY sys_hw_monitor_system_id";
            $sql[] = "ALTER TABLE sys_hw_motherboard DROP FOREIGN KEY sys_hw_motherboard_system_id";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP FOREIGN KEY sys_hw_network_card_system_id";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip DROP FOREIGN KEY sys_hw_network_card_ip_system_id";
            $sql[] = "ALTER TABLE sys_hw_optical_drive DROP FOREIGN KEY sys_hw_optical_drive_system_id";
            $sql[] = "ALTER TABLE sys_hw_partition DROP FOREIGN KEY sys_hw_partition_system_id";
            $sql[] = "ALTER TABLE sys_hw_processor DROP FOREIGN KEY sys_hw_processor_system_id";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller DROP FOREIGN KEY sys_hw_scsi_controller_system_id";
            $sql[] = "ALTER TABLE sys_hw_sound DROP FOREIGN KEY sys_hw_sound_system_id";
            $sql[] = "ALTER TABLE sys_hw_video DROP FOREIGN KEY sys_hw_video_system_id";
            $sql[] = "ALTER TABLE sys_hw_warranty DROP FOREIGN KEY sys_hw_warranty_system_id";
            $sql[] = "ALTER TABLE sys_man_additional_fields_data DROP FOREIGN KEY sys_man_additional_fields_data_system_id";
            $sql[] = "ALTER TABLE sys_man_additional_fields_data DROP FOREIGN KEY sys_man_additional_fields_data_field_id";
            $sql[] = "ALTER TABLE sys_man_attachment DROP FOREIGN KEY att_system_id";
            $sql[] = "ALTER TABLE sys_man_notes DROP FOREIGN KEY sys_man_notes_system_id";
            $sql[] = "ALTER TABLE sys_sw_database DROP FOREIGN KEY sys_sw_db_system_id";
            $sql[] = "ALTER TABLE sys_sw_dns DROP FOREIGN KEY sys_sw_dns_system_id";
            $sql[] = "ALTER TABLE sys_sw_group DROP FOREIGN KEY sys_sw_groups_system_id";
            $sql[] = "ALTER TABLE sys_sw_log DROP FOREIGN KEY sys_sw_log_system_id";
            $sql[] = "ALTER TABLE sys_sw_netstat DROP FOREIGN KEY sys_sw_netstat_system_id";
            $sql[] = "ALTER TABLE sys_sw_pagefile DROP FOREIGN KEY sys_sw_pagefile_system_id";
            $sql[] = "ALTER TABLE sys_sw_print_queue DROP FOREIGN KEY sys_sw_print_queue_system_id";
            $sql[] = "ALTER TABLE sys_sw_route DROP FOREIGN KEY sys_sw_ip_route_system_id";
            $sql[] = "ALTER TABLE sys_sw_scheduled_task DROP FOREIGN KEY sys_sw_scheduled_task_system_id";
            $sql[] = "ALTER TABLE sys_sw_service DROP FOREIGN KEY sys_sw_service_system_id";
            $sql[] = "ALTER TABLE sys_sw_share DROP FOREIGN KEY sys_sw_share_system_id";
            $sql[] = "ALTER TABLE sys_sw_software DROP FOREIGN KEY sys_sw_software_system_id";
            $sql[] = "ALTER TABLE sys_sw_software_key DROP FOREIGN KEY sys_sw_software_key_system_id";
            $sql[] = "ALTER TABLE sys_sw_user DROP FOREIGN KEY sys_sw_user_system_id";
            $sql[] = "ALTER TABLE sys_sw_variable DROP FOREIGN KEY sys_sw_variable_system_id";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine DROP FOREIGN KEY sys_sw_virtual_machine_system_id";
            $sql[] = "ALTER TABLE sys_sw_web_server DROP FOREIGN KEY sys_sw_web_server_system_id";
            $sql[] = "ALTER TABLE sys_sw_web_server_ext DROP FOREIGN KEY sys_sw_web_server_extn_system_id";
            $sql[] = "ALTER TABLE sys_sw_web_site DROP FOREIGN KEY sys_sw_web_site_system_id";
            $sql[] = "ALTER TABLE sys_sw_web_site_header DROP FOREIGN KEY sys_sw_web_site_header_system_id";
            $sql[] = "ALTER TABLE sys_sw_web_site_virtual DROP FOREIGN KEY sys_sw_web_site_virtual_system_id";
            $sql[] = "ALTER TABLE sys_sw_windows DROP FOREIGN KEY sys_sw_windows_system_id";

            # the changes for the system table
            $sql[] = "ALTER TABLE system DROP KEY id";
            $sql[] = "ALTER TABLE system DROP KEY id2";
            $sql[] = "ALTER TABLE system DROP KEY id3";
            $sql[] = "ALTER TABLE system DROP KEY hostname";
            $sql[] = "ALTER TABLE system DROP KEY linked_sys";
            $sql[] = "ALTER TABLE system DROP KEY system_key";
            $sql[] = "ALTER TABLE system CHANGE system_id system_id int(10) unsigned NOT NULL";
            $sql[] = "ALTER TABLE system DROP PRIMARY KEY";
            $sql[] = "ALTER TABLE system DROP KEY system_id";
            $sql[] = "ALTER TABLE system CHANGE system_id id int(10) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT FIRST";
            $sql[] = "ALTER TABLE system CHANGE system_key system_key varchar(200) NOT NULL DEFAULT '' AFTER id";
            $sql[] = "ALTER TABLE system CHANGE system_key_type system_key_type varchar(4) NOT NULL DEFAULT '' AFTER system_key";
            $sql[] = "ALTER TABLE system CHANGE uuid uuid varchar(100) NOT NULL DEFAULT '' AFTER system_key_type";
            $sql[] = "ALTER TABLE system CHANGE hostname name varchar(100) NOT NULL DEFAULT '' AFTER uuid";
            $sql[] = "ALTER TABLE system CHANGE man_ip_address ip varchar(40) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE system ADD hostname varchar(100) NOT NULL default '' AFTER ip";
            $sql[] = "ALTER TABLE system ADD dns_name varchar(100) NOT NULL default '' AFTER hostname";
            $sql[] = "ALTER TABLE system DROP domain";
            $sql[] = "ALTER TABLE system CHANGE man_domain domain varchar(100) NOT NULL DEFAULT '' AFTER dns_name";
            $sql[] = "ALTER TABLE system DROP description";
            $sql[] = "ALTER TABLE system CHANGE man_description description text NOT NULL AFTER fqdn";
            $sql[] = "ALTER TABLE system DROP type";
            $sql[] = "ALTER TABLE system CHANGE man_type type varchar(50) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE system DROP os_group";
            $sql[] = "ALTER TABLE system CHANGE man_os_group os_group varchar(50) NOT NULL DEFAULT '' AFTER icon";
            $sql[] = "ALTER TABLE system DROP os_family";
            $sql[] = "ALTER TABLE system CHANGE man_os_family os_family varchar(50) NOT NULL DEFAULT '' AFTER os_group";
            $sql[] = "ALTER TABLE system DROP os_name";
            $sql[] = "ALTER TABLE system CHANGE man_os_name os_name varchar(100) NOT NULL DEFAULT '' AFTER os_family";
            $sql[] = "ALTER TABLE system CHANGE linked_sys system_id_attached int(10) NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system DROP manufacturer";
            $sql[] = "ALTER TABLE system CHANGE man_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER system_id_attached";
            $sql[] = "ALTER TABLE system DROP model";
            $sql[] = "ALTER TABLE system CHANGE man_model model varchar(200) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE system DROP serial";
            $sql[] = "ALTER TABLE system CHANGE man_serial serial varchar(200) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE system DROP form_factor";
            $sql[] = "ALTER TABLE system CHANGE man_form_factor form_factor varchar(50) NOT NULL DEFAULT '' AFTER uptime";
            $sql[] = "ALTER TABLE system CHANGE pc_os_bit os_bit tinyint unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE pc_memory memory int unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE pc_num_processor num_processor tinyint unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE pc_date_os_installation os_installation_date date NOT NULL DEFAULT '0000-00-00'";
            $sql[] = "UPDATE system SET printer_color = 'y' WHERE LOWER(printer_color) ='true' OR LOWER(printer_color) = 't'";
            $sql[] = "UPDATE system SET printer_color = 'n' WHERE LOWER(printer_color) ='false' OR LOWER(printer_color) = 'f'";
            $sql[] = "ALTER TABLE system CHANGE printer_color printer_color enum('y','n','') NOT NULL DEFAULT ''";
            $sql[] = "UPDATE system SET printer_duplex = 'y' WHERE LOWER(printer_duplex) ='true' OR LOWER(printer_duplex) = 't'";
            $sql[] = "UPDATE system SET printer_duplex = 'n' WHERE LOWER(printer_duplex) ='false' OR LOWER(printer_duplex) = 'f'";
            $sql[] = "ALTER TABLE system CHANGE printer_duplex printer_duplex enum('y','n','') NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_status status enum('production','deleted','lost','maintenance','retired','unallocated') NOT NULL DEFAULT 'production'";
            $sql[] = "ALTER TABLE system CHANGE man_environment environment enum('production','dev','dr','eval','pre-prod','test','train','uat') NOT NULL DEFAULT 'production'";
            $sql[] = "ALTER TABLE system CHANGE man_class class enum('desktop','laptop','tablet','workstation','server','virtual server','virtual desktop','hypervisor','') NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_function function varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_owner owner varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_org_id org_id int(10) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system DROP man_icon";
            $sql[] = "ALTER TABLE system DROP man_criticality";
            $sql[] = "ALTER TABLE system CHANGE man_location_id location_id int(10) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE man_location_level location_level varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_location_suite location_suite varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_location_room location_room varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_location_rack location_rack varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_location_rack_position location_rack_position varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_location_rack_size location_rack_size int(10) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE man_location_latitude location_latitude float(10,6) NOT NULL";
            $sql[] = "ALTER TABLE system CHANGE man_location_longitude location_longitude float(10,6) NOT NULL";
            $sql[] = "ALTER TABLE system CHANGE man_asset_number asset_number varchar(50) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_vm_server_name vm_server_name varchar(150) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_vm_system_id vm_system_id varchar(150) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_vm_group vm_group varchar(150) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_cluster_name cluster_name varchar(150) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system ADD cluster_type varchar(150) NOT NULL DEFAULT '' AFTER cluster_name";
            $sql[] = "ALTER TABLE system CHANGE invoice_id invoice_id int(10) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_invoice purchase_invoice varchar(50) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_order_number purchase_order_number varchar(50) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_cost_center purchase_cost_center varchar(50) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_vendor purchase_vendor varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_date purchase_date date NOT NULL DEFAULT '0000-00-00'";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_service_contract_number purchase_service_contract_number varchar(255) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_lease_expiry_date lease_expiry_date date NOT NULL DEFAULT '0000-00-00'";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_amount purchase_amount varchar(50) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_warranty_duration warranty_duration int(5) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE man_warranty_expires warranty_expires date NOT NULL DEFAULT '0000-00-00'";
            $sql[] = "ALTER TABLE system CHANGE man_warranty_type warranty_type enum('','24x7x365','9x5x5','Next Business Day') NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system DROP man_terminal_number";
            $sql[] = "ALTER TABLE system DROP nmap_type";
            $sql[] = "ALTER TABLE system CHANGE man_switch_id system_id_switch int(10) NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE man_switch_port switch_port_new int unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE switch_port_new switch_port int unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE man_patch_panel patch_panel varchar(45) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_patch_panel_port patch_panel_port_new int unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE patch_panel_port_new patch_panel_port int unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE man_wall_port wall_port varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_picture picture varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_service_number service_number varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_service_provider service_provider varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_service_type service_type varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_service_plan service_plan varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_service_network service_network varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_unlock_pin unlock_pin varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_serial_imei serial_imei varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_serial_sim serial_sim varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE nmis_export nmis_export enum('true','false','y','n') NOT NULL DEFAULT 'false'";
            $sql[] = "UPDATE system SET nmis_export = 'n' WHERE LOWER(nmis_export) ='false'";
            $sql[] = "UPDATE system SET nmis_export = 'y' WHERE LOWER(nmis_export) ='true'";
            $sql[] = "ALTER TABLE system CHANGE nmis_export nmis_export enum('y','n') NOT NULL DEFAULT 'n'";
            $sql[] = "ALTER TABLE system CHANGE man_oae_manage oae_manage enum('y','n') NOT NULL DEFAULT 'y' AFTER nmis_export";
            $sql[] = "ALTER TABLE system CHANGE snmp_oid snmp_oid text NOT NULL AFTER oae_manage";
            $sql[] = "ALTER TABLE system DROP last_seen";
            $sql[] = "ALTER TABLE system CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER sysLocation";
            $sql[] = "ALTER TABLE system CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE system CHANGE last_seen_by last_seen_by varchar(150) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE system CHANGE last_user last_user varchar(150) NOT NULL DEFAULT '' AFTER last_seen_by";
            $sql[] = "ALTER TABLE system ADD KEY ip (`ip`)";
            $sql[] = "ALTER TABLE system ADD KEY name (`name`)";
            $sql[] = "ALTER TABLE system ADD KEY system_key (`system_key`)";

            // Add foreign keys to our three tables - sys_audit_log, sys_change_log, sys_edit_log.
            $sql[] = "ALTER TABLE sys_audit_log ADD CONSTRAINT sys_audit_log_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE sys_change_log ADD CONSTRAINT sys_change_log_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE sys_edit_log ADD CONSTRAINT sys_edit_log_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # start changing our tables

            # connection
            $sql[] = "ALTER TABLE oa_connection CHANGE system_id_a system_id_a int(10) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE oa_connection CHANGE system_id_b system_id_b int(10) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE oa_connection CHANGE ip_address_external_a ip_external_a varchar(40) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_connection CHANGE ip_address_external_b ip_external_b varchar(40) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_connection CHANGE ip_address_internal_a ip_internal_a varchar(40) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_connection CHANGE ip_address_internal_b ip_internal_b varchar(40) NOT NULL DEFAULT ''";
            $sql[] = "UPDATE oa_group_column SET column_name = 'Name', column_variable = 'name' WHERE column_name = 'Hostname'";
            $sql[] = "UPDATE oa_group_column SET column_variable = 'ip', column_type = 'ip_address' WHERE column_name = 'IP Address'";
            $sql[] = "ALTER TABLE oa_group_sys ADD CONSTRAINT `oa_group_sys_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE";

            # bios
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_bios ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_manufacturer manufacturer varchar(200) NOT NULL DEFAULT '' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_serial serial varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_description description varchar(200) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_smversion smversion varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_version version varchar(100) NOT NULL DEFAULT '' AFTER smversion";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_asset_tag asset_tag varchar(100) NOT NULL DEFAULT '' AFTER version";
            $sql[] = "ALTER TABLE sys_hw_bios ADD CONSTRAINT sys_hw_bios_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";


            # graphs
            $sql[] = "DROP TABLE IF EXISTS sys_hw_graphs_disk";
            $sql[] = "DROP TABLE IF EXISTS sys_hw_graph";
            $sql[] = "CREATE TABLE `sys_hw_graph` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `system_id` int(10) unsigned DEFAULT NULL, `linked_table` varchar(100) NOT NULL DEFAULT '', `linked_row` varchar(100) NOT NULL DEFAULT '', `type` enum('disk','partition','directory','file','database','share','other') NOT NULL DEFAULT 'partition', `used_percent` tinyint unsigned NOT NULL DEFAULT '0', `free_percent` tinyint unsigned NOT NULL DEFAULT '0', `used` int unsigned NOT NULL DEFAULT '0', `free` int unsigned NOT NULL DEFAULT '0', `total` int unsigned NOT NULL DEFAULT '0', `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00', PRIMARY KEY (`id`), KEY `system_id` (`system_id`), CONSTRAINT `sys_hw_graph_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

            # hard_drive
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_hard_drive ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_model model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_serial serial varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_device_id device_id varchar(200) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_caption caption varchar(100) NOT NULL DEFAULT '' AFTER device_id";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_index hard_drive_index varchar(100) NOT NULL DEFAULT '' AFTER caption";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_interface_type interface_type varchar(10) NOT NULL DEFAULT '' AFTER hard_drive_index";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_partitions partitions tinyint unsigned NOT NULL DEFAULT '0' AFTER interface_type";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_scsi_bus scsi_bus varchar(10) NOT NULL DEFAULT '' AFTER partitions";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_scsi_logical_unit scsi_logical_unit varchar(100) NOT NULL DEFAULT '' AFTER scsi_bus";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_scsi_port scsi_port varchar(10) NOT NULL DEFAULT '' AFTER scsi_logical_unit";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_size size int unsigned NOT NULL DEFAULT '0' AFTER scsi_port";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_status status varchar(100) NOT NULL DEFAULT '' AFTER size";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_firmware firmware varchar(100) NOT NULL DEFAULT '' AFTER status";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_model_family model_family varchar(200) NOT NULL DEFAULT '' AFTER firmware";
            $sql[] = "ALTER TABLE sys_hw_hard_drive ADD CONSTRAINT sys_hw_hard_drive_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # memory
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_memory ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_serial serial varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_bank bank varchar(100) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_type type varchar(100) NOT NULL DEFAULT '' AFTER bank";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_form_factor form_factor varchar(100) NOT NULL DEFAULT '' AFTER type";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_detail detail varchar(100) NOT NULL DEFAULT '' AFTER form_factor";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_capacity size int unsigned NOT NULL AFTER detail";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_speed speed int unsigned NOT NULL AFTER size";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_tag tag varchar(100) NOT NULL DEFAULT '' AFTER speed";
            $sql[] = "ALTER TABLE sys_hw_memory ADD CONSTRAINT sys_hw_memory_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # module
            $sql[] = "ALTER TABLE sys_hw_module CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_module ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_module ADD CONSTRAINT sys_hw_module_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # monitor
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE monitor_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_monitor ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE model model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE serial serial varchar(50) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE man_description description varchar(200) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE device_id device_id varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE manufacture_date manufacture_date varchar(20) NOT NULL DEFAULT '' AFTER device_id";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE size size tinyint unsigned NOT NULL DEFAULT '0' AFTER manufacture_date";
            $sql[] = "ALTER TABLE sys_hw_monitor ADD CONSTRAINT sys_hw_monitor_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP man_serial";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP man_value";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP man_purchase_order_number";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP man_date_purchased";

            # motherboard
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE motherboard_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_motherboard ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE manufacturer manufacturer varchar(50) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE model model varchar(50) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE serial serial varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE memory_slots memory_slots tinyint unsigned NOT NULL DEFAULT '0' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE processor_slots processor_slots tinyint unsigned NOT NULL DEFAULT '0' AFTER memory_slots";
            $sql[] = "ALTER TABLE sys_hw_motherboard ADD CONSTRAINT sys_hw_motherboard_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # network card
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_network_card ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_mac_address mac varchar(200) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER mac";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_model model varchar(255) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_description description varchar(255) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_alias alias varchar(255) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_ip_enabled ip_enabled varchar(10) NOT NULL DEFAULT '' AFTER alias";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_index net_index varchar(10) NOT NULL DEFAULT '' AFTER ip_enabled";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dhcp_enabled dhcp_enabled varchar(100) NOT NULL DEFAULT '' AFTER net_index";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dhcp_server dhcp_server varchar(30) NOT NULL DEFAULT '' AFTER dhcp_enabled";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dhcp_lease_obtained dhcp_lease_obtained varchar(14) NOT NULL DEFAULT '' AFTER dhcp_server";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dhcp_lease_expires dhcp_lease_expires varchar(14) NOT NULL DEFAULT '' AFTER dhcp_lease_obtained";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dns_host_name dns_host_name varchar(100) NOT NULL DEFAULT '' AFTER dhcp_lease_expires";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dns_server dns_server varchar(100) NOT NULL DEFAULT '' AFTER dns_host_name";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dns_domain dns_domain varchar(100) NOT NULL DEFAULT '' AFTER dns_server";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dns_domain_reg_enabled dns_domain_reg_enabled varchar(10) NOT NULL DEFAULT '' AFTER dns_domain";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_adapter_type type varchar(100) NOT NULL DEFAULT '' AFTER dns_domain_reg_enabled";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_connection_id connection_id varchar(255) NOT NULL DEFAULT '' AFTER type";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_connection_status connection_status varchar(30) NOT NULL DEFAULT '' AFTER connection_id";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_speed speed varchar(10) NOT NULL DEFAULT '' AFTER connection_status";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_slaves slaves varchar(100) NOT NULL DEFAULT '' AFTER speed";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP net_dns_domain_suffix";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP net_wins_primary";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP net_wins_secondary";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP net_wins_lmhosts_enabled";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP KEY net_mac_address";
            $sql[] = "ALTER TABLE sys_hw_network_card ADD KEY mac (`mac`)";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP KEY system_id";
            $sql[] = "ALTER TABLE sys_hw_network_card ADD KEY system_id (`system_id`)";
            $sql[] = "ALTER TABLE sys_hw_network_card ADD CONSTRAINT sys_hw_network_card_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # ip address
            $sql[] = "ALTER TABLE sys_hw_network_card_ip CHANGE ip_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip CHANGE net_mac_address mac varchar(200) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip CHANGE net_index net_index varchar(10) NOT NULL DEFAULT '' AFTER mac";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip ADD ip varchar(40) NOT NULL DEFAULT '' AFTER net_index";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip CHANGE ip_subnet subnet varchar(30) NOT NULL DEFAULT '' AFTER ip";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip CHANGE ip_address_version version tinyint unsigned NOT NULL DEFAULT '4' AFTER subnet";
            $sql[] = "UPDATE sys_hw_network_card_ip SET ip = ip_address_v4 WHERE version = '4'";
            $sql[] = "UPDATE sys_hw_network_card_ip SET ip = ip_address_v6 WHERE version = '6'";
            $sql[] = "UPDATE sys_hw_network_card_ip SET ip = '' WHERE ip = 'Not-Networked'";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip DROP ip_address_v4";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip DROP ip_address_v6";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip DROP KEY id";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip DROP KEY sys_hw_network_card_ip_system_id";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip ADD KEY system_id (`system_id`)";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip ADD KEY mac (`mac`)";
            $sql[] = "ALTER TABLE sys_hw_network_card_ip ADD CONSTRAINT sys_hw_network_card_ip_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # optical drive
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_optical_drive ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_model model varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_caption description varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_device_id device_id varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_mount_point mount_point varchar(10) NOT NULL DEFAULT '' AFTER device_id";
            $sql[] = "ALTER TABLE sys_hw_optical_drive ADD CONSTRAINT sys_hw_optical_drive_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # partition
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_partition ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_serial serial varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_name name varchar(100) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_caption description varchar(100) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_device_id device_id varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE hard_drive_index hard_drive_index varchar(100) NOT NULL DEFAULT '' AFTER device_id";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_disk_index partition_disk_index varchar(50) NOT NULL DEFAULT '' AFTER hard_drive_index";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_mount_type mount_type varchar(100) NOT NULL DEFAULT '' AFTER partition_disk_index";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_mount_point mount_point varchar(100) NOT NULL DEFAULT '' AFTER mount_type";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_size size int unsigned NOT NULL DEFAULT '1' AFTER mount_point";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_free_space free int unsigned NOT NULL DEFAULT '1' AFTER size";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_used_space used int unsigned NOT NULL DEFAULT '1' AFTER free";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_format format varchar(20) NOT NULL DEFAULT '' AFTER used";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_bootable bootable varchar(10) NOT NULL DEFAULT '' AFTER format";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_type type varchar(50) NOT NULL DEFAULT '' AFTER bootable";
            $sql[] = "ALTER TABLE sys_hw_partition DROP partition_quotas_supported";
            $sql[] = "ALTER TABLE sys_hw_partition DROP partition_quotas_enabled";
            $sql[] = "ALTER TABLE sys_hw_partition ADD CONSTRAINT sys_hw_partition_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # processor
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_processor ADD current enum('y', 'n') NOT NULL default 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE first_timestamp first_seen datetime NOT NULL default '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE timestamp last_seen datetime NOT NULL default '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_count count tinyint unsigned NOT NULL default '1' AFTER last_seen";
            $sql[] = "UPDATE sys_hw_processor SET count = 1 WHERE count = 0 OR count = ''";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_cores cores tinyint unsigned NOT NULL default '1' AFTER count";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_logical logical tinyint unsigned NOT NULL default '1' AFTER cores";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_description description varchar(100) NOT NULL default '' AFTER logical";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_speed speed int unsigned NOT NULL default '0' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_manufacturer manufacturer varchar(100) NOT NULL default '' AFTER speed";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_architecture architecture varchar(100) NOT NULL default '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_processor DROP COLUMN processor_power_management_supported";
            $sql[] = "ALTER TABLE sys_hw_processor ADD CONSTRAINT sys_hw_processor_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # scsi controller
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller ADD model varchar(200) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_device_id device_id varchar(200) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_type type enum('raid','hba','other') NOT NULL DEFAULT 'other' AFTER device_id";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller DROP scsi_controller_name";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller ADD CONSTRAINT sys_hw_scsi_controller_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # sound
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE sound_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_sound ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE sound_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_sound ADD model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE sound_device_id device_id varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_sound DROP sound_name";
            $sql[] = "ALTER TABLE sys_hw_sound ADD CONSTRAINT sys_hw_sound_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # switch ports
            $sql[] = "DROP TABLE IF EXISTS sys_hw_switch_ports";
            $sql[] = "CREATE TABLE sys_hw_switch_ports ( id int(10) unsigned NOT NULL AUTO_INCREMENT, system_id int(10) unsigned DEFAULT NULL, 
                current enum('y','n') NOT NULL DEFAULT 'y', first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00', last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00', 
                system_id_device int(10) unsigned DEFAULT NULL, port varchar(100) NOT NULL DEFAULT '', ip varchar(40) NOT NULL DEFAULT '', mac varchar(200) NOT NULL DEFAULT '', 
                PRIMARY KEY (id), KEY system_id (system_id), CONSTRAINT sys_hw_switch_ports_switch_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE, 
                CONSTRAINT sys_hw_switch_ports_device_id FOREIGN KEY (system_id_device) REFERENCES system (id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            # video
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_video ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_description model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_device_id device_id varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_memory memory int unsigned NOT NULL DEFAULT '0' AFTER device_id";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_caption caption varchar(100) NOT NULL DEFAULT '' AFTER memory";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_current_horizontal_res";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_current_vertical_res";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_current_number_colours";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_current_refresh_rate";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_driver_date";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_driver_version";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_max_refresh_rate";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_min_refresh_rate";
            $sql[] = "ALTER TABLE sys_hw_video ADD CONSTRAINT sys_hw_video_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # warranty
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE warranty_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_warranty ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE warranty_provider provider varchar(200) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE warranty_type type varchar(100) NOT NULL DEFAULT '' AFTER provider";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE warranty_start start datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER type";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE warranty_end end datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER start";
            $sql[] = "ALTER TABLE sys_hw_warranty ADD CONSTRAINT sys_hw_warranty_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # fields
            $sql[] = "ALTER TABLE sys_man_additional_fields CHANGE field_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_man_additional_fields CHANGE group_id group_id int(10) unsigned NOT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_man_additional_fields CHANGE field_name name varchar(100) NOT NULL DEFAULT '' AFTER group_id";
            $sql[] = "ALTER TABLE sys_man_additional_fields CHANGE field_type type enum('varchar','bool','int','memo','list','datetime','timestamp') NOT NULL DEFAULT 'varchar' AFTER name";
            $sql[] = "ALTER TABLE sys_man_additional_fields CHANGE field_values values_list varchar(100) NOT NULL DEFAULT '' AFTER type";
            $sql[] = "ALTER TABLE sys_man_additional_fields CHANGE field_placement placement varchar(100) NOT NULL DEFAULT '' AFTER values_list";
            $sql[] = "ALTER TABLE sys_man_additional_fields DROP field_sys_type";
            $sql[] = "ALTER TABLE sys_man_additional_fields DROP field_derived_type";
            $sql[] = "ALTER TABLE sys_man_additional_fields DROP field_derived_sql";

            # fields data
            $sql[] = "ALTER TABLE sys_man_additional_fields_data CHANGE field_details_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_man_additional_fields_data CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_man_additional_fields_data CHANGE field_id field_id int(10) unsigned NOT NULL DEFAULT '0' AFTER system_id";
            $sql[] = "ALTER TABLE sys_man_additional_fields_data CHANGE field_varchar value text NOT NULL AFTER field_id";
            $sql[] = "ALTER TABLE sys_man_additional_fields_data DROP field_datetime";
            $sql[] = "ALTER TABLE sys_man_additional_fields_data DROP field_int";
            $sql[] = "ALTER TABLE sys_man_additional_fields_data DROP field_memo";
            $sql[] = "ALTER TABLE sys_man_additional_fields_data ADD CONSTRAINT sys_man_additional_fields_data_field_id FOREIGN KEY (field_id) REFERENCES sys_man_additional_fields (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE sys_man_additional_fields_data ADD CONSTRAINT sys_man_additional_fields_data_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # attachment
            $sql[] = "ALTER TABLE sys_man_attachment CHANGE att_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_man_attachment CHANGE att_title title varchar(200) NOT NULL DEFAULT '' AFTER user_id";
            $sql[] = "ALTER TABLE sys_man_attachment CHANGE att_filename filename text NOT NULL AFTER title";
            $sql[] = "ALTER TABLE sys_man_attachment ADD KEY user_id (user_id)";
            $sql[] = "ALTER TABLE sys_man_attachment ADD CONSTRAINT sys_man_attachment_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE sys_man_attachment ADD CONSTRAINT sys_man_attachment_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id)";

            # invoice
            $sql[] = "ALTER TABLE sys_man_invoice CHANGE invoice_id id int(10) unsigned NOT NULL AUTO_INCREMENT";

            # invoice line
            $sql[] = "ALTER TABLE sys_man_invoice_line CHANGE line_id id int(10) unsigned NOT NULL AUTO_INCREMENT";

            # notes
            $sql[] = "ALTER TABLE sys_man_notes CHANGE notes_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_man_notes CHANGE notes_title title varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE sys_man_notes CHANGE notes_text `text` text NOT NULL";
            $sql[] = "ALTER TABLE sys_man_notes ADD CONSTRAINT sys_man_notes_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # dns
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE dns_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_dns ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE dns_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE dns_full_name fqdn varchar(200) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE dns_ip_address ip varchar(40) NOT NULL DEFAULT '' AFTER fqdn";
            $sql[] = "ALTER TABLE sys_sw_dns ADD CONSTRAINT sys_sw_dns_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # group
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_group ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_description description varchar(200) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_sid sid varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_members members text NOT NULL AFTER sid";
            $sql[] = "ALTER TABLE sys_sw_group ADD CONSTRAINT sys_sw_group_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # log
            $sql[] = "ALTER TABLE sys_sw_log CHANGE log_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_log ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE log_name name varchar(50) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE log_file_name file_name varchar(250) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE log_file_size file_size int unsigned NOT NULL DEFAULT '0' AFTER file_name";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE log_max_file_size max_file_size int unsigned NOT NULL DEFAULT '0' AFTER file_size";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE log_overwrite overwrite varchar(30) NOT NULL DEFAULT '' AFTER max_file_size";
            $sql[] = "ALTER TABLE sys_sw_log ADD CONSTRAINT sys_sw_log_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # netstat
            $sql[] = "ALTER TABLE sys_sw_netstat ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_netstat CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_netstat CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_netstat CHANGE ip_address ip varchar(40) NOT NULL DEFAULT '' AFTER protocol";
            $sql[] = "ALTER TABLE sys_sw_netstat ADD CONSTRAINT sys_sw_netstat_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # pagefile
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_pagefile ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_size size int unsigned NOT NULL DEFAULT '0' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_initial_size initial_size int unsigned NOT NULL DEFAULT '0' AFTER size";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_max_size max_size int unsigned NOT NULL DEFAULT '0' AFTER initial_size";
            $sql[] = "ALTER TABLE sys_sw_pagefile ADD CONSTRAINT sys_sw_pagefile_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # print queue
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_print_queue ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_model model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_description description varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_system_key system_key varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_name name varchar(100) NOT NULL DEFAULT '' AFTER system_key";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_port_name port_name varchar(100) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_ip_address ip varchar(40) NOT NULL DEFAULT '' AFTER port_name";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_shared shared varchar(100) NOT NULL DEFAULT '' AFTER ip";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_shared_name shared_name varchar(100) NOT NULL DEFAULT '' AFTER shared";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_location location varchar(100) NOT NULL DEFAULT '' AFTER shared_name";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_color color varchar(100) NOT NULL DEFAULT '' AFTER location";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_duplex duplex varchar(100) NOT NULL DEFAULT '' AFTER color";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_type type enum('virtual','physical','') NOT NULL DEFAULT '' AFTER duplex";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_connection_status connection_status varchar(100) NOT NULL DEFAULT '' AFTER type";
            $sql[] = "ALTER TABLE sys_sw_print_queue ADD CONSTRAINT sys_sw_print_queue_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # route
            $sql[] = "ALTER TABLE sys_sw_route CHANGE route_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_route ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE next_hop next_hop varchar(40) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE sys_sw_route ADD CONSTRAINT sys_sw_route_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # server - new table
            $sql[] = "DROP TABLE IF EXISTS sys_sw_server";
            $sql[] = "CREATE TABLE sys_sw_server ( id int(10) unsigned NOT NULL AUTO_INCREMENT, system_id int(10) unsigned DEFAULT NULL, current enum('y','n') NOT NULL DEFAULT 'y', first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00', last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00', type varchar(100) NOT NULL DEFAULT '', name varchar(100) NOT NULL DEFAULT '', full_name varchar(100) NOT NULL DEFAULT '', description varchar(100) NOT NULL DEFAULT '', version varchar(100) NOT NULL DEFAULT '', version_string varchar(100) NOT NULL DEFAULT '', edition varchar(100) NOT NULL DEFAULT '', status varchar(100) NOT NULL DEFAULT '', ip varchar(40) NOT NULL DEFAULT '', port smallint unsigned NOT NULL DEFAULT '0', PRIMARY KEY (id), KEY system_id (system_id), CONSTRAINT sys_sw_server_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            # server item - new table
            $sql[] = "DROP TABLE IF EXISTS sys_sw_server_item";
            $sql[] = "CREATE TABLE sys_sw_server_item ( id int(10) unsigned NOT NULL AUTO_INCREMENT, system_id int(10) unsigned DEFAULT NULL, current enum('y','n') NOT NULL DEFAULT 'y', first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00', last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00', server_id int(10) unsigned NOT NULL, type varchar(100) NOT NULL DEFAULT '', name varchar(100) NOT NULL DEFAULT '', description varchar(100) NOT NULL DEFAULT '', internal_id varchar(100) NOT NULL DEFAULT '', ip varchar(40) NOT NULL DEFAULT '', hostname varchar(100) NOT NULL DEFAULT '', port smallint unsigned NOT NULL DEFAULT '0', status varchar(100) NOT NULL DEFAULT '', parent int(11) NOT NULL DEFAULT '0', instance varchar(100) NOT NULL DEFAULT '', path varchar(250) NOT NULL DEFAULT '', size int unsigned NOT NULL DEFAULT '0', log_status varchar(100) NOT NULL DEFAULT '', log_format varchar(100) NOT NULL DEFAULT '', log_path varchar(100) NOT NULL DEFAULT '', log_rotation varchar(100) NOT NULL DEFAULT '', PRIMARY KEY (id), KEY system_id (system_id), CONSTRAINT sys_sw_server_item_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE, CONSTRAINT `sys_sw_server_item_server_id` FOREIGN KEY (`server_id`) REFERENCES `sys_sw_server` (`id`) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            # service
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_service ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE user_id user_id int(10) unsigned DEFAULT NULL AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_display_name display_name varchar(100) NOT NULL DEFAULT '' AFTER user_id";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_name name varchar(100) NOT NULL DEFAULT '' AFTER display_name";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_path_name path_name text NOT NULL AFTER name";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_started started varchar(10) NOT NULL DEFAULT '' AFTER path_name";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_start_name start_name varchar(100) NOT NULL DEFAULT '' AFTER started";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_start_mode start_mode varchar(10) NOT NULL DEFAULT '' AFTER start_name";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_state state varchar(20) NOT NULL DEFAULT '' AFTER start_mode";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_count count varchar(5) NOT NULL DEFAULT '' AFTER state";
            $sql[] = "ALTER TABLE sys_sw_service DROP KEY `timestamp`";
            $sql[] = "ALTER TABLE sys_sw_service DROP KEY `first_timestamp`";
            $sql[] = "ALTER TABLE sys_sw_service DROP KEY `service_name`";
            $sql[] = "ALTER TABLE sys_sw_service DROP KEY `service_display_name`";
            $sql[] = "ALTER TABLE sys_sw_service ADD KEY `first_seen` (`first_seen`)";
            $sql[] = "ALTER TABLE sys_sw_service ADD KEY `last_seen` (`last_seen`)";
            $sql[] = "ALTER TABLE sys_sw_service ADD KEY `name` (`name`)";
            $sql[] = "ALTER TABLE sys_sw_service ADD KEY `display_name` (`display_name`)";
            $sql[] = "ALTER TABLE sys_sw_service ADD CONSTRAINT sys_sw_service_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # share
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_share ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_caption description varchar(250) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_name name varchar(250) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_path path varchar(250) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_size size int unsigned NOT NULL DEFAULT '0' AFTER path";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_users users varchar(200) NOT NULL DEFAULT '' AFTER size";
            $sql[] = "ALTER TABLE sys_sw_share ADD CONSTRAINT sys_sw_share_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # software
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_software ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_name name varchar(255) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_version version varchar(255) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_description description text NOT NULL AFTER version";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_location location varchar(255) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_uninstall uninstall mediumtext NOT NULL AFTER location";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_install_date install_date varchar(100) NOT NULL DEFAULT '' AFTER uninstall";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_installed_by installed_by varchar(100) NOT NULL DEFAULT '' AFTER install_date";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_installed_on installed_on datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER installed_by";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_publisher publisher varchar(255) NOT NULL DEFAULT '' AFTER installed_on";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_install_source install_source varchar(200) NOT NULL DEFAULT '' AFTER publisher";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_system_component system_component varchar(2) NOT NULL DEFAULT '' AFTER install_source";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_url url varchar(255) NOT NULL DEFAULT '' AFTER system_component";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_email email varchar(255) NOT NULL DEFAULT '' AFTER url";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_comment type varchar(200) NOT NULL DEFAULT '' AFTER email";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_key";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_key_release";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_key_edition";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_man_comment";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_count";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_code_base";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_status";
            $sql[] = "ALTER TABLE sys_sw_software DROP KEY `timestamp`";
            $sql[] = "ALTER TABLE sys_sw_software DROP KEY `first_timestamp`";
            $sql[] = "ALTER TABLE sys_sw_software DROP KEY `software_name`";
            $sql[] = "ALTER TABLE sys_sw_software ADD KEY `first_seen` (`first_seen`)";
            $sql[] = "ALTER TABLE sys_sw_software ADD KEY `last_seen` (`last_seen`)";
            $sql[] = "ALTER TABLE sys_sw_software ADD KEY `name` (`name`)";
            $sql[] = "ALTER TABLE sys_sw_software ADD CONSTRAINT sys_sw_software_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # software key
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_software_key ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_name name varchar(250) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_text string varchar(100) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_release rel varchar(100) NOT NULL DEFAULT '' AFTER string";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_edition edition varchar(100) NOT NULL DEFAULT '' AFTER rel";
            $sql[] = "ALTER TABLE sys_sw_software_key ADD CONSTRAINT sys_sw_software_key_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            # user
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_user ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_caption caption varchar(255) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_sid sid varchar(100) NOT NULL DEFAULT '' AFTER caption";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_domain domain varchar(100) NOT NULL DEFAULT '' AFTER sid";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_disabled disabled varchar(20) NOT NULL DEFAULT '' AFTER domain";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_full_name full_name varchar(100) NOT NULL DEFAULT '' AFTER disabled";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_password_changeable password_changeable varchar(20) NOT NULL DEFAULT '' AFTER full_name";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_password_expires password_expires varchar(20) NOT NULL DEFAULT '' AFTER password_changeable";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_password_required password_required varchar(20) NOT NULL DEFAULT '' AFTER password_expires";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_status status varchar(100) NOT NULL DEFAULT '' AFTER password_required";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_type type enum('local','domain','database','application','other') NOT NULL DEFAULT 'local' AFTER status";
            $sql[] = "ALTER TABLE sys_sw_user ADD CONSTRAINT sys_sw_user_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";


            $sql[] = "ALTER TABLE sys_sw_variable CHANGE variable_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_variable ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE variable_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE variable_value value text NOT NULL AFTER name";
            $sql[] = "ALTER TABLE sys_sw_variable ADD CONSTRAINT sys_sw_variable_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";


            $sql[] = "ALTER TABLE sys_sw_virtual_machine ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine ADD CONSTRAINT sys_sw_virtual_machine_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";


            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_windows ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_build_number build_number varchar(20) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_user_name user_name varchar(100) NOT NULL DEFAULT '' AFTER build_number";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_client_site_name client_site_name varchar(100) NOT NULL DEFAULT '' AFTER user_name";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_domain_short domain_short varchar(100) NOT NULL DEFAULT '' AFTER client_site_name";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_domain_controller_address domain_controller_address varchar(100) NOT NULL DEFAULT '' AFTER domain_short";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_domain_controller_name domain_controller_name varchar(100) NOT NULL DEFAULT '' AFTER domain_controller_address";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_domain_role domain_role varchar(40) NOT NULL DEFAULT '' AFTER domain_controller_name";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_part_of_domain part_of_domain varchar(10) NOT NULL DEFAULT '' AFTER domain_role";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_id_number id_number varchar(100) NOT NULL DEFAULT '' AFTER part_of_domain";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_time_caption time_caption varchar(100) NOT NULL DEFAULT '' AFTER id_number";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_time_daylight time_daylight varchar(100) NOT NULL DEFAULT '' AFTER time_caption";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_boot_device boot_device varchar(100) NOT NULL DEFAULT '' AFTER time_daylight";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_country_code country_code varchar(50) NOT NULL DEFAULT '' AFTER boot_device";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_organisation organisation varchar(80) NOT NULL DEFAULT '' AFTER country_code";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_language language varchar(50) NOT NULL DEFAULT '' AFTER organisation";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_registered_user registered_user varchar(100) NOT NULL DEFAULT '' AFTER language";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_service_pack service_pack varchar(20) NOT NULL DEFAULT '' AFTER registered_user";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_version version varchar(20) NOT NULL DEFAULT '' AFTER service_pack";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_install_directory install_directory varchar(20) NOT NULL DEFAULT '' AFTER version";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_active_directory_ou active_directory_ou varchar(200) NOT NULL DEFAULT '' AFTER install_directory";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_workgroup workgroup varchar(255) NOT NULL DEFAULT '' AFTER active_directory_ou";
            $sql[] = "ALTER TABLE sys_sw_windows ADD CONSTRAINT sys_sw_windows_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";


            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2012 RTM'            WHERE db_version LIKE '11.0.2100%' OR db_version LIKE '11.00.2100%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2012 Service Pack 1' WHERE db_version LIKE '11.0.3000%' OR db_version LIKE '11.00.3000%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2012 Service Pack 2' WHERE db_version LIKE '11.0.5058%' OR db_version LIKE '11.00.5058%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2014 Community Technology Preview 1 (CTP1)' WHERE db_version LIKE '11.0.9120%' OR db_version LIKE '11.00.9120%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2014 Community Technology Preview 2 (CTP2)' WHERE db_version LIKE '12.0.1524%' OR db_version LIKE '12.00.1524%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2014 RTM'                                   WHERE db_version LIKE '12.0.2000%' OR db_version LIKE '12.00.2000%'";

            $sql[] = "INSERT INTO sys_sw_server SELECT db_id, sys_sw_database.system_id, 'y', sys_sw_database.first_timestamp, sys_sw_database.timestamp, 'database', db_type, db_version_string, '', db_version, '', db_edition, '', '', db_port FROM sys_sw_database LEFT JOIN system ON sys_sw_database.system_id = system.id AND sys_sw_database.timestamp = system.last_seen";
            $sql[] = "INSERT INTO sys_sw_server_item SELECT NULL, sys_sw_database.system_id, 'y', sys_sw_database_details.first_timestamp, sys_sw_database_details.timestamp, sys_sw_database_details.db_id, 'database', sys_sw_database_details.details_name, '', sys_sw_database_details.details_internal_id, '', '', '', '', '', sys_sw_database_details.details_instance, sys_sw_database_details.details_filename, sys_sw_database_details.details_current_size, '', '', '', '' FROM sys_sw_database_details LEFT JOIN sys_sw_database ON sys_sw_database_details.db_id = sys_sw_database.db_id AND sys_sw_database_details.timestamp = sys_sw_database.timestamp";

            $sql[] = "INSERT INTO sys_sw_server SELECT NULL, sys_sw_web_server.system_id, 'y', sys_sw_web_server.first_timestamp, sys_sw_web_server.timestamp, 'web', 'IIS', '', '', sys_sw_web_server.webserver_version, '', '', sys_sw_web_server.webserver_state, '', '' FROM sys_sw_web_server";
            $sql[] = "INSERT INTO sys_sw_server_item SELECT NULL as id, sys_sw_web_site.system_id, 'y' as current, sys_sw_web_site.first_timestamp as first_seen, sys_sw_web_site.timestamp as last_seen, sys_sw_server.id as server_id, 'web site' as type, '' as name, sys_sw_web_site.site_description as description, sys_sw_web_site.site_internal_id as internal_id, '' as ip, '' as hostname, '' as port, sys_sw_web_site.site_state as status, '' as parent, sys_sw_web_site.site_app_pool as instance, sys_sw_web_site.site_path as path, sys_sw_web_site.site_size as size, '' as log_status, sys_sw_web_site.site_log_format as log_format, sys_sw_web_site.site_log_directory as log_path, sys_sw_web_site.site_log_rotation as log_rotation FROM sys_sw_web_site LEFT JOIN sys_sw_server ON sys_sw_web_site.first_timestamp = sys_sw_server.first_seen AND sys_sw_web_site.timestamp = sys_sw_server.last_seen AND sys_sw_web_site.system_id = sys_sw_server.system_id WHERE sys_sw_server.type = 'web'";

            $sql[] = "DROP TABLE IF EXISTS sys_sw_database_details";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_database";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_server_ext";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_site_header";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_site_virtual";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_site";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_server";

            $sql[] = "UPDATE oa_config SET config_value = '20150606' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '2.0' WHERE config_name = 'display_version'";

            echo "<pre>\n";
            foreach ($sql as $this_query) {
                echo $this_query . "\n\n";
                $query = $this->db->query($this_query);
            }

            $this->load->model("m_oa_report");
            $this->load->model("m_oa_report_column");
            # recreate the reports
            $sql = "SELECT report_id, report_name FROM oa_report";
            # get the list of activated reports
            $query = $this->db->query($sql);
            $result = $query->result();
            # get the list of report XML definitions
            $report_files = array();
            if ($handle = opendir(BASEPATH.'../application/controllers/reports')) {
                $i = 0;
                while (false !== ($file = readdir($handle))) {
                    if (mb_strpos($file, ".xml") !== false) {
                        $file_handle = fopen(BASEPATH.'../application/controllers/reports/'.$file, "rb");
                        $contents = fread($file_handle, filesize(BASEPATH.'../application/controllers/reports/'.$file));
                        $error = 0;
                        try {
                            $xml = new SimpleXMLElement($contents);
                        } catch (Exception $error) {
                            $error = 1;
                        }
                        if ($error == 0) {
                            $report_file_details = array();
                            $report_file_details['report_name'] = $xml->details->report_name;
                            $report_file_details['report_file'] = $file;
                            $report_files[] = $report_file_details;
                            unset ($report_file_details);
                        }
                        unset($xml);
                        fclose($file_handle);
                    }
                }
                closedir($handle);
            }
            foreach ($result as $report) {
                foreach ($report_files as $file) {
                    if ($report->report_name == $file['report_name']) {
                        $sql = "DELETE FROM oa_report WHERE report_id = '" . $report->report_id . "'";
                        $this->data['output'] .= $sql."<br /><br />\n";
                        $query = $this->db->query($sql);
                        $file_report = BASEPATH.'../application/controllers/reports/'.$file['report_file'];
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
                }
            }





            
            $log_details->message = 'Upgrade database to 2.0 completed';
            stdlog($log_details);
            unset($log_details);
        #}
    }
}
