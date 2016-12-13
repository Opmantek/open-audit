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
* @category  Controller
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   1.14
* @link      http://www.open-audit.org
*/

/**
* Base Object Database.
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
* @return   NULL
 */
class Database extends MY_Controller_new
{
    /**
    * Constructor
    *
    * @access    public
    * @return    NULL
    */
    public function __construct()
    {
        parent::__construct();
        // log the attempt
        $log = new stdClass();
        $log->status = 'start';
        $log->function = strtolower(__METHOD__);
        stdlog($log);

        // ensure our URL doesn't have a trailing / as this may break image (and other) relative paths
        $this->load->helper('url');
        if (strrpos($this->input->server('REQUEST_URI'), '/') === strlen($this->input->server('REQUEST_URI'))-1) {
            redirect(uri_string());
        }
        $this->load->helper('input');
        $this->load->helper('output');
        $this->load->helper('log');
        $this->load->helper('error');
        $this->load->model('m_database');
        $this->load->model('m_orgs');
        inputRead();
        $this->output->url = $this->config->item('oa_web_index');
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
    }

    /**
    * Our remap function to override the inbuilt controller->method functionality
    *
    * @access public
    * @return NULL
    */
    public function _remap()
    {
        $this->{$this->response->meta->action}();
    }

    /**
    * Process the supplied data and create a new object
    *
    * @access public
    * @return NULL
    */
    // public function create()
    // {
    //     include 'include_create.php';
    // }

    /**
    * Read a single object
    *
    * @access public
    * @return NULL
    */
    public function read()
    {
        include 'include_read.php';
    }

    /**
    * Delete an existing object
    *
    * @access public
    * @return NULL
    */
    public function delete()
    {
        include 'include_delete.php';
    }

    /**
    * Collection of objects
    *
    * @access public
    * @return NULL
    */
    public function collection()
    {
        include 'include_collection.php';
    }

    /**
    * Supply a HTML form for the user to create an object
    *
    * @access public
    * @return NULL
    */
    // public function create_form()
    // {
    //     include 'include_create_form.php';
    // }

    /**
    * Execute one of various actions upon the database
    *
    * @access public
    * @return NULL
    */
    public function execute()
    {
        $this->data = $this->m_database->execute();
        $this->response->meta->action = 'read';
        $this->response->meta->format = 'screen';
        $this->response->errors = array();
        include 'include_read.php';
        #output($this->response);
    }

    /**
    * Supply a HTML form for the user to update an object
    *
    * @access public
    * @return NULL
    */
    public function update_form()
    {
        output($this->response);
    }

    public function update()
    {
        error_reporting(E_ALL);

        $web_internal_version = $this->config->item('web_internal_version');
        $web_display_version = $this->config->item('web_display_version');
        $this->data['message'] = '';
        $db_internal_version = $this->config->item('internal_version');

        $this->data['output'] = "";

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
                $this->data['output'] .= "<br /><span style=\"color:red;\">NOTE</span> Please click <a href=\"../admin_group/list_groups\" style=\"color: blue;\">this link</a> (or go to Admin -> List Groups) and update (icon on the right) the new Group for 'Items in Default Location'.<br />";
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
        }



        if (($db_internal_version < '20160104') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.10

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.10 commenced';
            stdlog($log_details);

            unset($sql);
            $sql = array();

            # We know these tables aren't used - drop them
            $sql[] = "DROP TABLE IF EXISTS oa_change_log";
            $sql[] = "DROP TABLE IF EXISTS oa_contact";
            $sql[] = "DROP TABLE IF EXISTS oa_location_org";
            $sql[] = "DROP TABLE IF EXISTS oa_asset_line";
            $sql[] = "DROP TABLE IF EXISTS oa_asset_order";
            $sql[] = "DROP TABLE IF EXISTS oa_device_col";
            $sql[] = "DROP TABLE IF EXISTS oa_device";
            $sql[] = "DROP TABLE IF EXISTS oa_graph";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_antivirus";
            $sql[] = "DROP TABLE IF EXISTS oa_switch_ports";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_share_perms";

            # bios
            $sql[] = "DELETE sys_hw_bios FROM sys_hw_bios LEFT JOIN system ON system.system_id = sys_hw_bios.system_id WHERE sys_hw_bios.timestamp <> system.timestamp";
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
            $sql[] = "RENAME TABLE sys_hw_bios TO `bios`";

            # disk
            $sql[] = "DELETE sys_hw_hard_drive FROM sys_hw_hard_drive LEFT JOIN system ON system.system_id = sys_hw_hard_drive.system_id WHERE sys_hw_hard_drive.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_hard_drive ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE `timestamp` last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_model model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_serial serial varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_device_id device varchar(200) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_caption caption varchar(100) NOT NULL DEFAULT '' AFTER device";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_index hard_drive_index varchar(100) NOT NULL DEFAULT '' AFTER caption";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_interface_type interface_type varchar(100) NOT NULL DEFAULT '' AFTER hard_drive_index";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_partitions partition_count tinyint unsigned NOT NULL DEFAULT '0' AFTER interface_type";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_scsi_bus scsi_bus varchar(10) NOT NULL DEFAULT '' AFTER partition_count";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_scsi_logical_unit scsi_logical_unit varchar(100) NOT NULL DEFAULT '' AFTER scsi_bus";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_scsi_port scsi_port varchar(10) NOT NULL DEFAULT '' AFTER scsi_logical_unit";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_size size int unsigned NOT NULL DEFAULT '0' AFTER scsi_port";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_status status varchar(100) NOT NULL DEFAULT '' AFTER size";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_firmware firmware varchar(100) NOT NULL DEFAULT '' AFTER status";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_model_family model_family varchar(200) NOT NULL DEFAULT '' AFTER firmware";
            $sql[] = "RENAME TABLE sys_hw_hard_drive TO `disk`";

            # dns
            $sql[] = "DELETE sys_sw_dns FROM sys_sw_dns LEFT JOIN system ON system.system_id = sys_sw_dns.system_id WHERE sys_sw_dns.timestamp <> system.timestamp";
            $sql[] = "DELETE sys_sw_dns FROM sys_sw_dns WHERE (dns_name = '' AND dns_full_name = '')";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE dns_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_dns ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE `timestamp` last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE dns_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE dns_full_name fqdn varchar(200) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE dns_ip_address ip varchar(45) NOT NULL DEFAULT '' AFTER fqdn";
            $sql[] = "RENAME TABLE sys_sw_dns TO `dns`";

            # graphs
            $sql[] = "DROP TABLE IF EXISTS sys_hw_graph";
            $sql[] = "CREATE TABLE `graph` (
                        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                        `system_id` int(10) unsigned DEFAULT NULL,
                        `linked_table` varchar(100) NOT NULL DEFAULT '',
                        `linked_row` varchar(100) NOT NULL DEFAULT '',
                        `type` enum('disk','partition','directory','file','database','share','other') NOT NULL DEFAULT 'partition',
                        `used_percent` tinyint unsigned NOT NULL DEFAULT '0',
                        `free_percent` tinyint unsigned NOT NULL DEFAULT '0',
                        `used` int unsigned NOT NULL DEFAULT '0',
                        `free` int unsigned NOT NULL DEFAULT '0',
                        `size` int unsigned NOT NULL DEFAULT '0',
                        `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                        PRIMARY KEY (`id`), KEY `system_id` (`system_id`),
                        CONSTRAINT `sys_hw_graph_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE)
                        ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $sql[] = "INSERT INTO graph SELECT NULL, system_id, 'partition', partition_id, 'partition', used_percent, free_percent, used, free, total as size, `timestamp` FROM sys_hw_graphs_disk";
            $sql[] = "DROP TABLE IF EXISTS sys_hw_graphs_disk";


            # log
            $sql[] = "DELETE sys_sw_log FROM sys_sw_log LEFT JOIN system ON system.system_id = sys_sw_log.system_id WHERE sys_sw_log.timestamp <> system.timestamp";
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
            $sql[] = "RENAME TABLE sys_sw_log TO `log`";

            # memory
            $sql[] = "DELETE sys_hw_memory FROM sys_hw_memory LEFT JOIN system ON system.system_id = sys_hw_memory.system_id WHERE sys_hw_memory.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_memory ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_serial serial varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_bank bank varchar(100) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_type type varchar(100) NOT NULL DEFAULT '' AFTER bank";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_form_factor form_factor varchar(100) NOT NULL DEFAULT '' AFTER type";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_detail detail varchar(100) NOT NULL DEFAULT '' AFTER form_factor";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_capacity size int unsigned NOT NULL DEFAULT '0' AFTER detail";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_speed speed int unsigned NOT NULL DEFAULT '0' AFTER size";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_tag tag varchar(100) NOT NULL DEFAULT '' AFTER speed";
            $sql[] = "RENAME TABLE sys_hw_memory TO `memory`";

            # module
            $sql[] = "DELETE sys_hw_module FROM sys_hw_module LEFT JOIN system ON system.system_id = sys_hw_module.system_id WHERE sys_hw_module.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_module ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE class_text class_text varchar(20) NOT NULL DEFAULT '' AFTER class";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE hardware_revision hardware_revision varchar(100) NOT NULL DEFAULT '' AFTER class_text";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE serial_number serial varchar(100) NOT NULL DEFAULT '' AFTER software_revision";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE object_id object_ident varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE asset_id asset_ident varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "RENAME TABLE sys_hw_module TO `module`";

            # monitor
            $sql[] = "DELETE sys_hw_monitor FROM sys_hw_monitor LEFT JOIN system ON system.system_id = sys_hw_monitor.system_id WHERE sys_hw_monitor.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE monitor_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_monitor ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE model model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE serial serial varchar(50) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE man_description description varchar(200) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE device_id device varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE manufacture_date manufacture_date varchar(20) NOT NULL DEFAULT '' AFTER device";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE size size tinyint unsigned NOT NULL DEFAULT '0' AFTER manufacture_date";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP man_serial";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP man_value";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP man_purchase_order_number";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP man_date_purchased";
            $sql[] = "RENAME TABLE sys_hw_monitor TO `monitor`";

            # motherboard
            $sql[] = "DELETE sys_hw_motherboard FROM sys_hw_motherboard LEFT JOIN system ON system.system_id = sys_hw_motherboard.system_id WHERE sys_hw_motherboard.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE motherboard_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_motherboard ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE manufacturer manufacturer varchar(50) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE model model varchar(50) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE serial serial varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE memory_slots memory_slot_count tinyint unsigned NOT NULL DEFAULT '0' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE processor_slots processor_slot_count tinyint unsigned NOT NULL DEFAULT '0' AFTER memory_slot_count";
            $sql[] = "RENAME TABLE sys_hw_motherboard TO `motherboard`";

            # optical drive
            $sql[] = "DELETE sys_hw_optical_drive FROM sys_hw_optical_drive LEFT JOIN system ON system.system_id = sys_hw_optical_drive.system_id WHERE sys_hw_optical_drive.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_optical_drive ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_model model varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_caption description varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_device_id device varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_mount_point mount_point varchar(10) NOT NULL DEFAULT '' AFTER device";
            $sql[] = "RENAME TABLE sys_hw_optical_drive TO `optical`";

            # netstat
            $sql[] = "DELETE sys_sw_netstat FROM sys_sw_netstat LEFT JOIN system ON system.system_id = sys_sw_netstat.system_id WHERE sys_sw_netstat.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_netstat ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_netstat CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_netstat CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_netstat CHANGE ip_address ip varchar(45) NOT NULL DEFAULT '' AFTER protocol";
            $sql[] = "RENAME TABLE sys_sw_netstat TO `netstat`";

            # network card
            $sql[] = "DELETE sys_hw_network_card FROM sys_hw_network_card LEFT JOIN system ON system.system_id = sys_hw_network_card.system_id WHERE sys_hw_network_card.timestamp <> system.timestamp";
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
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_connection_id connection varchar(255) NOT NULL DEFAULT '' AFTER type";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_connection_status connection_status varchar(30) NOT NULL DEFAULT '' AFTER connection";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_speed speed int(10) unsigned NOT NULL DEFAULT '0' AFTER connection_status";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_slaves slaves varchar(100) NOT NULL DEFAULT '' AFTER speed";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP net_dns_domain_suffix";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP net_wins_primary";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP net_wins_secondary";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP net_wins_lmhosts_enabled";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP KEY net_mac_address";
            $sql[] = "ALTER TABLE sys_hw_network_card ADD KEY mac (`mac`)";
            $sql[] = "RENAME TABLE sys_hw_network_card TO `network`";

            # partition
            $sql[] = "DELETE sys_hw_partition FROM sys_hw_partition LEFT JOIN system ON system.system_id = sys_hw_partition.system_id WHERE sys_hw_partition.timestamp <> system.timestamp";
            $sql[] = "UPDATE sys_hw_partition SET partition_type = 'volume'                                         WHERE partition_type = 'Volume'";
            $sql[] = "UPDATE sys_hw_partition SET partition_type = 'local'                                          WHERE partition_type = 'Local Disk'";
            $sql[] = "UPDATE sys_hw_partition SET partition_type = 'local removable'                                WHERE partition_type = 'Removable Disk'";
            $sql[] = "UPDATE sys_hw_partition SET partition_type = 'local'                                          WHERE partition_type = 'local hard disk'";
            $sql[] = "UPDATE sys_hw_partition SET partition_mount_type = 'partition', partition_type = 'local'      WHERE partition_type = 'partition'";
            $sql[] = "UPDATE sys_hw_partition SET partition_mount_type = 'mount point', partition_type = 'smb'      WHERE partition_type = 'Network Drive'";
            $sql[] = "UPDATE sys_hw_partition SET partition_mount_type = 'mount point'                              WHERE partition_type LIKE 'raid%'";
            $sql[] = "UPDATE sys_hw_partition SET partition_mount_type = 'mount point'                              WHERE partition_mount_type = 'lvm'";
            $sql[] = "UPDATE sys_hw_partition SET partition_mount_type = 'other' WHERE (partition_mount_type != 'partition' AND partition_mount_type != 'mount point')";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_partition ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_serial serial varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_name name varchar(100) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_caption description varchar(100) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_device_id device varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE hard_drive_index hard_drive_index varchar(100) NOT NULL DEFAULT '' AFTER device";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_disk_index partition_disk_index varchar(50) NOT NULL DEFAULT '' AFTER hard_drive_index";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_mount_type mount_type enum('mount point', 'partition', 'other') NOT NULL DEFAULT 'partition' AFTER partition_disk_index";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_mount_point mount_point varchar(100) NOT NULL DEFAULT '' AFTER mount_type";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_size size int unsigned NOT NULL DEFAULT '1' AFTER mount_point";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_free_space free int unsigned NOT NULL DEFAULT '1' AFTER size";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_used_space used int unsigned NOT NULL DEFAULT '1' AFTER free";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_format format varchar(20) NOT NULL DEFAULT '' AFTER used";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_bootable bootable varchar(10) NOT NULL DEFAULT '' AFTER format";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_type `type` varchar(100) NOT NULL DEFAULT 'local' AFTER bootable";
            $sql[] = "ALTER TABLE sys_hw_partition DROP partition_quotas_supported";
            $sql[] = "ALTER TABLE sys_hw_partition DROP partition_quotas_enabled";
            $sql[] = "RENAME TABLE sys_hw_partition TO `partition`";

            # processor
            $sql[] = "DELETE sys_hw_processor FROM sys_hw_processor LEFT JOIN system ON system.system_id = sys_hw_processor.system_id WHERE sys_hw_processor.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_processor ADD current enum('y', 'n') NOT NULL default 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE first_timestamp first_seen datetime NOT NULL default '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE timestamp last_seen datetime NOT NULL default '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_count physical_count tinyint unsigned NOT NULL default '1' AFTER last_seen";
            $sql[] = "UPDATE sys_hw_processor SET physical_count = 1 WHERE physical_count = 0 OR physical_count = ''";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_cores core_count tinyint unsigned NOT NULL default '1' AFTER physical_count";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_logical logical_count tinyint unsigned NOT NULL default '1' AFTER core_count";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_description description varchar(100) NOT NULL default '' AFTER logical_count";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_speed speed int unsigned NOT NULL default '0' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_manufacturer manufacturer varchar(100) NOT NULL default '' AFTER speed";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_architecture architecture varchar(100) NOT NULL default '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_processor ADD socket varchar(100) NOT NULL default '' AFTER architecture";
            $sql[] = "ALTER TABLE sys_hw_processor DROP COLUMN processor_power_management_supported";
            $sql[] = "RENAME TABLE sys_hw_processor TO `processor`";
            $sql[] = "UPDATE processor SET manufacturer = 'Intel' WHERE manufacturer = 'GenuineIntel'";
            $sql[] = "UPDATE processor SET manufacturer = 'AMD' WHERE manufacturer = 'AuthenticAMD'";

            # san (new table)
            $sql[] = "DROP TABLE IF EXISTS `san`";
            $sql[] = "CREATE TABLE `san` (
                id int(10) unsigned NOT NULL AUTO_INCREMENT,
                system_id int(10) unsigned DEFAULT NULL,
                current enum('y','n') NOT NULL DEFAULT 'y',
                first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                type varchar(100) NOT NULL DEFAULT '',
                manufacturer varchar(100) NOT NULL DEFAULT '',
                `serial` varchar(50) NOT NULL DEFAULT '',
                part_number varchar(100) NOT NULL DEFAULT '',
                location varchar(100) NOT NULL DEFAULT '',
                attached_to varchar(100) NOT NULL DEFAULT '',
                status varchar(100) NOT NULL DEFAULT '',
                date_of_manufacture varchar(100) NOT NULL DEFAULT '',
                notes text NOT NULL DEFAULT '',
                PRIMARY KEY (`id`), KEY `system_id` (`system_id`),
                CONSTRAINT `san_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE)
                ENGINE=InnoDB DEFAULT CHARSET=utf8";

            # scsi controller
            $sql[] = "DELETE sys_hw_scsi_controller FROM sys_hw_scsi_controller LEFT JOIN system ON system.system_id = sys_hw_scsi_controller.system_id WHERE sys_hw_scsi_controller.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_name model varchar(200) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller ADD `serial` varchar(200) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_device_id device varchar(200) NOT NULL DEFAULT '' AFTER `serial`";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_type type enum('raid','hba','other','san controller','san shelf') NOT NULL DEFAULT 'other' AFTER device";
            $sql[] = "RENAME TABLE sys_hw_scsi_controller TO `scsi`";

            # group
            $sql[] = "DELETE sys_sw_group FROM sys_sw_group LEFT JOIN system ON system.system_id = sys_sw_group.system_id WHERE sys_sw_group.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_group ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_description description varchar(200) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_sid sid varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_members members text NOT NULL AFTER sid";
            $sql[] = "RENAME TABLE sys_sw_group TO `user_group`";

            # pagefile
            $sql[] = "DELETE sys_sw_pagefile FROM sys_sw_pagefile LEFT JOIN system ON system.system_id = sys_sw_pagefile.system_id WHERE sys_sw_pagefile.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_pagefile ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_size size int unsigned NOT NULL DEFAULT '0' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_initial_size initial_size int unsigned NOT NULL DEFAULT '0' AFTER size";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_max_size max_size int unsigned NOT NULL DEFAULT '0' AFTER initial_size";
            $sql[] = "RENAME TABLE sys_sw_pagefile TO `pagefile`";

            # print queue
            $sql[] = "DELETE sys_sw_print_queue FROM sys_sw_print_queue LEFT JOIN system ON system.system_id = sys_sw_print_queue.system_id WHERE sys_sw_print_queue.timestamp <> system.timestamp";
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
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_ip_address ip varchar(45) NOT NULL DEFAULT '' AFTER port_name";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_shared shared varchar(100) NOT NULL DEFAULT '' AFTER ip";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_shared_name shared_name varchar(100) NOT NULL DEFAULT '' AFTER shared";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_location location varchar(100) NOT NULL DEFAULT '' AFTER shared_name";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_color color varchar(100) NOT NULL DEFAULT '' AFTER location";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_duplex duplex varchar(100) NOT NULL DEFAULT '' AFTER color";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_type type enum('virtual','physical','') NOT NULL DEFAULT '' AFTER duplex";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_connection_status connection_status varchar(100) NOT NULL DEFAULT '' AFTER type";
            $sql[] = "RENAME TABLE sys_sw_print_queue TO `print_queue`";

            # route
            $sql[] = "DELETE sys_sw_route FROM sys_sw_route LEFT JOIN system ON system.system_id = sys_sw_route.system_id WHERE sys_sw_route.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE route_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_route ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE next_hop next_hop varchar(40) NOT NULL DEFAULT ''";
            $sql[] = "RENAME TABLE sys_sw_route TO `route`";

            # service
            $sql[] = "DELETE sys_sw_service FROM sys_sw_service LEFT JOIN system ON system.system_id = sys_sw_service.system_id WHERE sys_sw_service.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_service DROP KEY `timestamp`";
            $sql[] = "ALTER TABLE sys_sw_service DROP KEY `first_timestamp`";
            $sql[] = "ALTER TABLE sys_sw_service DROP KEY `service_name`";
            $sql[] = "ALTER TABLE sys_sw_service DROP KEY `service_display_name`";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_service ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_service DROP user_id";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_display_name description varchar(100) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_path_name executable text NOT NULL AFTER description";
            $sql[] = "ALTER TABLE sys_sw_service DROP service_started";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_start_name user varchar(100) NOT NULL DEFAULT '' AFTER executable";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_start_mode start_mode varchar(200) NOT NULL DEFAULT '' AFTER user";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_state state varchar(200) NOT NULL DEFAULT '' AFTER start_mode";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_count count varchar(5) NOT NULL DEFAULT '' AFTER state";
            $sql[] = "ALTER TABLE sys_sw_service ADD KEY `first_seen` (`first_seen`)";
            $sql[] = "ALTER TABLE sys_sw_service ADD KEY `last_seen` (`last_seen`)";
            $sql[] = "ALTER TABLE sys_sw_service ADD KEY `name` (`name`)";
            $sql[] = "ALTER TABLE sys_sw_service ADD KEY `description` (`description`)";
            $sql[] = "RENAME TABLE sys_sw_service TO `service`";

            # share
            $sql[] = "DELETE sys_sw_share FROM sys_sw_share LEFT JOIN system ON system.system_id = sys_sw_share.system_id WHERE sys_sw_share.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_share ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE `timestamp` last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_caption description varchar(250) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_name name varchar(250) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_path `path` varchar(250) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_size size int unsigned NOT NULL DEFAULT '0' AFTER `path`";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_users users varchar(200) NOT NULL DEFAULT '' AFTER size";
            $sql[] = "RENAME TABLE sys_sw_share TO `share`";

            # software
            $sql[] = "DELETE sys_sw_software FROM sys_sw_software LEFT JOIN system ON system.system_id = sys_sw_software.system_id WHERE sys_sw_software.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_software ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE `timestamp` last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
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
            $sql[] = "ALTER TABLE sys_sw_software ADD version_padded text NOT NULL AFTER type";
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
            $sql[] = "RENAME TABLE sys_sw_software TO `software`";

            # software key
            $sql[] = "DELETE sys_sw_software_key FROM sys_sw_software_key LEFT JOIN system ON system.system_id = sys_sw_software_key.system_id WHERE sys_sw_software_key.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_software_key ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_name name varchar(250) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_text string varchar(100) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_release rel varchar(100) NOT NULL DEFAULT '' AFTER string";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_edition edition varchar(100) NOT NULL DEFAULT '' AFTER rel";
            $sql[] = "RENAME TABLE sys_sw_software_key TO `software_key`";

            # sound
            $sql[] = "DELETE sys_hw_sound FROM sys_hw_sound LEFT JOIN system ON system.system_id = sys_hw_sound.system_id WHERE sys_hw_sound.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE sound_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_sound ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE sound_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE sound_name model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE sound_device_id device varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "RENAME TABLE sys_hw_sound TO `sound`";

            # user
            $sql[] = "DELETE sys_sw_user FROM sys_sw_user LEFT JOIN system ON system.system_id = sys_sw_user.system_id WHERE sys_sw_user.timestamp <> system.timestamp";
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
            $sql[] = "RENAME TABLE sys_sw_user TO `user`";

            # variable
            $sql[] = "DELETE sys_sw_variable FROM sys_sw_variable LEFT JOIN system ON system.system_id = sys_sw_variable.system_id WHERE sys_sw_variable.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE variable_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_variable ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE variable_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE variable_value value text NOT NULL AFTER name";
            $sql[] = "RENAME TABLE sys_sw_variable TO `variable`";

            # video
            $sql[] = "DELETE sys_hw_video FROM sys_hw_video LEFT JOIN system ON system.system_id = sys_hw_video.system_id WHERE sys_hw_video.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_video ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_description model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_device_id device varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_memory size int unsigned NOT NULL DEFAULT '0' AFTER device";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_caption caption varchar(100) NOT NULL DEFAULT '' AFTER size";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_current_horizontal_res";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_current_vertical_res";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_current_number_colours";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_current_refresh_rate";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_driver_date";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_driver_version";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_max_refresh_rate";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_min_refresh_rate";
            $sql[] = "RENAME TABLE sys_hw_video TO `video`";

            # vm
            $sql[] = "DELETE sys_sw_virtual_machine FROM sys_sw_virtual_machine LEFT JOIN system ON system.system_id = sys_sw_virtual_machine.system_id WHERE sys_sw_virtual_machine.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine CHANGE memory memory_count int(12) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine CHANGE cpu cpu_count int(10) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine CHANGE vm_id vm_id int(12) unsigned DEFAULT NULL";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine ADD icon varchar(50) NOT NULL DEFAULT ''";
            $sql[] = "RENAME TABLE sys_sw_virtual_machine TO `vm`";

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
            $sql[] = "RENAME TABLE sys_hw_warranty TO `warranty`";

            # windows
            $sql[] = "DELETE sys_sw_windows FROM sys_sw_windows LEFT JOIN system ON system.system_id = sys_sw_windows.system_id WHERE sys_sw_windows.timestamp <> system.timestamp";
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
            $sql[] = "RENAME TABLE sys_sw_windows TO `windows`";

            # oa_alert_log -> change_log (list of detected changes)
            $sql[] = "DROP TABLE IF EXISTS change_log";
            $sql[] = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_log_user_id";
            $sql[] = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_log_system_id";
            $sql[] = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_oa_change";
            $sql[] = "ALTER TABLE oa_alert_log DROP KEY oa_alert_log_user_id";
            $sql[] = "ALTER TABLE oa_alert_log DROP KEY oa_alert_change_id";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE alert_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE alert_table db_table varchar(50) NOT NULL DEFAULT '' AFTER system_id";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE alert_foreign_row db_row int(10) unsigned NOT NULL DEFAULT '0' AFTER db_table";
            $sql[] = "ALTER TABLE oa_alert_log ADD db_action enum('','create','update','delete') NOT NULL DEFAULT '' AFTER db_row";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE alert_details details varchar(200) NOT NULL DEFAULT '' AFTER db_action";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE alert_ack_time ack_time datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER user_id";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE alert_note note varchar(200) NOT NULL DEFAULT '' AFTER ack_time";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE external_change_id external_ident varchar(200) NOT NULL DEFAULT '' AFTER ack_time";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE external_change_link external_link varchar(200) NOT NULL DEFAULT '' AFTER ack_time";
            $sql[] = "ALTER TABLE oa_alert_log ADD CONSTRAINT change_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $sql[] = "RENAME TABLE oa_alert_log TO `change_log`";

            # sys_man_audits -> audit_log (list of audits)
            $sql[] = "DROP TABLE IF EXISTS audit_log";
            $sql[] = "CREATE TABLE audit_log ( 
                id int(10) unsigned NOT NULL AUTO_INCREMENT,
                system_id int(10) unsigned DEFAULT '0',
                username varchar(45) NOT NULL DEFAULT '',
                type varchar(45) NOT NULL DEFAULT '',
                ip varchar(45) NOT NULL DEFAULT '',
                debug text NOT NULL DEFAULT '',
                wmi_fails text NOT NULL DEFAULT '',
                timestamp datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                PRIMARY KEY (id),
                KEY system_id (system_id),
                CONSTRAINT audit_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $sql[] = "INSERT INTO audit_log SELECT NULL, system_id, system_audits_username, system_audits_type, system_audits_ip, audit_debug, audit_wmi_fails, `timestamp` FROM sys_man_audits";
            $sql[] = "DROP TABLE IF EXISTS sys_man_audits";

            # oa_audit_log -> edit_log (list of edits by who [user||audit||snmp||etc])
            $sql[] = "DROP TABLE IF EXISTS edit_log";
            $sql[] = "CREATE TABLE edit_log (
                id int(10) NOT NULL AUTO_INCREMENT,
                user_id int(10) unsigned DEFAULT NULL,
                system_id int(10) unsigned DEFAULT NULL,
                details varchar(200) NOT NULL DEFAULT '',
                source varchar(100) NOT NULL DEFAULT '',
                weight int(10) unsigned NOT NULL DEFAULT '0',
                db_table varchar(100) NOT NULL DEFAULT '',
                db_column varchar(100) NOT NULL DEFAULT '',
                timestamp datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                value text NOT NULL DEFAULT '',
                previous_value text NOT NULL DEFAULT '',
                PRIMARY KEY (id),
                KEY user_id (user_id),
                KEY edit_log_system_id (system_id),
                CONSTRAINT edit_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE,
                CONSTRAINT edit_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $sql[] = "INSERT INTO edit_log SELECT NULL as id, oa_audit_log.user_id, system_id, CONCAT(oa_user.user_full_name, ' edited the ', SUBSTRING(`audit_log_event_details`, 5, LOCATE(' ', `audit_log_event_details`) - 5), ' attribute.') as details, 'user' as source, '1000' as weight, 'system' as db_table, SUBSTRING(`audit_log_event_details`, 5, LOCATE(' ', `audit_log_event_details`) - 5) as db_column, timestamp, SUBSTRING(`audit_log_event_details` FROM LOCATE(' - ', `audit_log_event_details`)+3) as value, '' as previous_value FROM oa_audit_log LEFT JOIN oa_user on oa_audit_log.user_id = oa_user.user_id WHERE audit_log_event_details LIKE 'man_%'";
            $sql[] = "INSERT INTO edit_log SELECT NULL as id, oa_audit_log.user_id, system_id, CONCAT(oa_user.user_full_name, ' edited the name attribute.') as details, 'user' as source, '1000' as weight, 'system' as db_table, 'name' as db_column, timestamp, SUBSTRING(`audit_log_event_details` FROM LOCATE(' - ', `audit_log_event_details`)+3) as value, '' as previous_value FROM oa_audit_log LEFT JOIN oa_user on oa_audit_log.user_id = oa_user.user_id WHERE audit_log_event_details LIKE 'hostname - %'";
            $sql[] = "INSERT INTO edit_log SELECT NULL as id, oa_audit_log.user_id, system_id, CONCAT(oa_user.user_full_name, ' edited a custom attribute.') as details, 'user' as source, '1000' as weight, 'sys_additional_fields_data' as db_table, '' db_column, timestamp, SUBSTRING(`audit_log_event_details` FROM LOCATE(' - ', `audit_log_event_details`)+3) as value, '' as previous_value FROM oa_audit_log LEFT JOIN oa_user on oa_audit_log.user_id = oa_user.user_id WHERE audit_log_event_details LIKE 'additional_field_item%'";
            $sql[] = "DROP TABLE IF EXISTS oa_audit_log";

            # tasks (scheduled tasks / cron)
            $sql[] = "DROP TABLE IF EXISTS sys_sw_scheduled_task";
            $sql[] = "CREATE TABLE `task` (
                  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                  `system_id` int(10) unsigned DEFAULT NULL,
                  `current` enum('y','n') NOT NULL DEFAULT 'y',
                  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                  `name` varchar(100) NOT NULL DEFAULT '',
                  `next_run` varchar(50) NOT NULL DEFAULT '',
                  `status` varchar(50) NOT NULL DEFAULT '',
                  `last_run` varchar(50) NOT NULL DEFAULT '',
                  `last_result` varchar(50) NOT NULL DEFAULT '',
                  `creator` varchar(50) NOT NULL DEFAULT '',
                  `schedule` varchar(100) NOT NULL DEFAULT '',
                  `task` varchar(100) NOT NULL DEFAULT '',
                  `state` varchar(10) NOT NULL DEFAULT '',
                  `runas` varchar(50) NOT NULL DEFAULT '',
                  PRIMARY KEY (`id`),
                  KEY `system_id` (`system_id`),
                  CONSTRAINT `task_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

            # server - new table
            $sql[] = "DROP TABLE IF EXISTS server";
            $sql[] = "CREATE TABLE server ( id int(10) unsigned NOT NULL AUTO_INCREMENT,
                system_id int(10) unsigned DEFAULT NULL,
                current enum('y','n') NOT NULL DEFAULT 'y',
                first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                type varchar(100) NOT NULL DEFAULT '',
                name varchar(100) NOT NULL DEFAULT '',
                full_name varchar(100) NOT NULL DEFAULT '',
                description varchar(100) NOT NULL DEFAULT '',
                version varchar(100) NOT NULL DEFAULT '',
                version_string varchar(100) NOT NULL DEFAULT '',
                edition varchar(100) NOT NULL DEFAULT '',
                status varchar(100) NOT NULL DEFAULT '',
                ip varchar(45) NOT NULL DEFAULT '',
                port smallint unsigned NOT NULL DEFAULT '0',
                PRIMARY KEY (id), KEY system_id (system_id),
                CONSTRAINT server_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE )
                ENGINE=InnoDB DEFAULT CHARSET=utf8";

            # server item - new table
            $sql[] = "DROP TABLE IF EXISTS server_item";
            $sql[] = "CREATE TABLE server_item (
                id int(10) unsigned NOT NULL AUTO_INCREMENT,
                system_id int(10) unsigned DEFAULT NULL,
                current enum('y','n') NOT NULL DEFAULT 'y',
                first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                server_id int(10) unsigned DEFAULT NULL,
                type varchar(100) NOT NULL DEFAULT '',
                parent_name varchar(100) NOT NULL DEFAULT '',
                name varchar(100) NOT NULL DEFAULT '',
                description varchar(100) NOT NULL DEFAULT '',
                id_internal varchar(100) NOT NULL DEFAULT '',
                ip varchar(45) NOT NULL DEFAULT '',
                hostname varchar(100) NOT NULL DEFAULT '',
                port smallint unsigned NOT NULL DEFAULT '0',
                status varchar(100) NOT NULL DEFAULT '',
                parent_id int(11) unsigned DEFAULT NULL,
                instance varchar(100) NOT NULL DEFAULT '',
                `path` varchar(250) NOT NULL DEFAULT '',
                size int unsigned NOT NULL DEFAULT '0',
                log_status varchar(100) NOT NULL DEFAULT '',
                log_format varchar(100) NOT NULL DEFAULT '',
                log_path varchar(100) NOT NULL DEFAULT '',
                log_rotation varchar(100) NOT NULL DEFAULT '',
                PRIMARY KEY (id), KEY system_id (system_id),
                CONSTRAINT server_item_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE)
                ENGINE=InnoDB DEFAULT CHARSET=utf8";


            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2012 RTM'            WHERE db_version LIKE '11.0.2100%' OR db_version LIKE '11.00.2100%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2012 Service Pack 1' WHERE db_version LIKE '11.0.3000%' OR db_version LIKE '11.00.3000%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2012 Service Pack 2' WHERE db_version LIKE '11.0.5058%' OR db_version LIKE '11.00.5058%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2014 Community Technology Preview 1 (CTP1)' WHERE db_version LIKE '11.0.9120%' OR db_version LIKE '11.00.9120%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2014 Community Technology Preview 2 (CTP2)' WHERE db_version LIKE '12.0.1524%' OR db_version LIKE '12.00.1524%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2014 RTM'                                   WHERE db_version LIKE '12.0.2000%' OR db_version LIKE '12.00.2000%'";

            $sql[] = "DELETE sys_sw_database FROM sys_sw_database LEFT JOIN system ON system.system_id = sys_sw_database.system_id WHERE sys_sw_database.timestamp <> system.timestamp";
            $sql[] = "INSERT INTO server SELECT db_id, sys_sw_database.system_id, 'y', sys_sw_database.first_timestamp, sys_sw_database.timestamp, 'database', db_type, db_version_string, '', db_version, '', db_edition, '', '', db_port FROM sys_sw_database LEFT JOIN system ON sys_sw_database.system_id = system.system_id AND sys_sw_database.timestamp = system.last_seen";
            $sql[] = "DELETE sys_sw_database_details FROM sys_sw_database_details LEFT JOIN system ON system.system_id = sys_sw_database_details.system_id WHERE sys_sw_database_details.timestamp <> system.timestamp";
            $sql[] = "INSERT INTO server_item SELECT NULL, sys_sw_database.system_id, 'y', sys_sw_database_details.first_timestamp, sys_sw_database_details.timestamp, sys_sw_database_details.db_id, 'database', sys_sw_database.db_type, sys_sw_database_details.details_name, '', sys_sw_database_details.details_internal_id, '', '', '', '', '', sys_sw_database_details.details_instance, sys_sw_database_details.details_filename, sys_sw_database_details.details_current_size, '', '', '', '' FROM sys_sw_database_details LEFT JOIN sys_sw_database ON sys_sw_database_details.db_id = sys_sw_database.db_id AND sys_sw_database_details.timestamp = sys_sw_database.timestamp";

            $sql[] = "DELETE sys_sw_web_server FROM sys_sw_web_server LEFT JOIN system ON system.system_id = sys_sw_web_server.system_id WHERE sys_sw_web_server.timestamp <> system.timestamp";
            $sql[] = "INSERT INTO server SELECT NULL, sys_sw_web_server.system_id, 'y', sys_sw_web_server.first_timestamp, sys_sw_web_server.timestamp, 'web', 'IIS', '', '', sys_sw_web_server.webserver_version, '', '', sys_sw_web_server.webserver_state, '', '' FROM sys_sw_web_server";
            $sql[] = "DELETE sys_sw_web_site FROM sys_sw_web_site LEFT JOIN system ON system.system_id = sys_sw_web_site.system_id WHERE sys_sw_web_site.timestamp <> system.timestamp";
            $sql[] = "INSERT INTO server_item SELECT NULL as id, sys_sw_web_site.system_id, 'y' as current, sys_sw_web_site.first_timestamp as first_seen, sys_sw_web_site.timestamp as last_seen, '' as server_id, 'website' as type, 'IIS' as parent_name, sys_sw_web_site.site_description as name, sys_sw_web_site.site_description as description, sys_sw_web_site.site_internal_id as id_internal, '' as ip, '' as hostname, '' as port, sys_sw_web_site.site_state as status, '' as parent_id, sys_sw_web_site.site_app_pool as instance, sys_sw_web_site.site_path as path, sys_sw_web_site.site_size as size, '' as log_status, sys_sw_web_site.site_log_format as log_format, sys_sw_web_site.site_log_directory as log_path, sys_sw_web_site.site_log_rotation as log_rotation FROM sys_sw_web_site";

            $sql[] = "DROP TABLE IF EXISTS sys_sw_database_details";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_database";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_server_ext";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_site_header";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_site_virtual";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_site";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_server";

            $sql[] = "UPDATE system SET description = '', man_description = '' WHERE man_description LIKE 'general purpose|%' AND description = man_description";
            $sql[] = "UPDATE system SET description = '', man_description = '' WHERE man_description LIKE '%\%)' AND description = man_description";
            $sql[] = "UPDATE system SET description = '', man_description = '' WHERE man_description LIKE '%|%|%' AND description = man_description";

            $sql[] = "UPDATE oa_config SET config_value = '20160104' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.10' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $log_details->message = $this_query;
                stdlog($log_details);
                $query = $this->db->query($this_query);
            }


            $this->load->model('m_oa_report');
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Changes'";
            if ($this->db->affected_rows() > 0) {
                $this->m_oa_report->activate_file('Changes - Acknowledged');
            }
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Alerts'";
            if ($this->db->affected_rows() > 0) {
                $this->m_oa_report->activate_file('Changes');
            }
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Alerts - Hardware'";
            if ($this->db->affected_rows() > 0) {
                $this->m_oa_report->activate_file('Changes - Hardware');
            }
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Alerts - Netstat Ports'";
            if ($this->db->affected_rows() > 0) {
                $this->m_oa_report->activate_file('Changes - Netstat Ports');
            }
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Alerts - New Systems'";
            if ($this->db->affected_rows() > 0) {
                $this->m_oa_report->activate_file('Changes - New Devices');
            }
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Alerts - Software'";
            if ($this->db->affected_rows() > 0) {
                $this->m_oa_report->activate_file('Changes - Software');
            }
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Alerts - Software Updates'";

            $log_details->message = 'Upgrade database to 1.10 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20160126') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.10.1

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.10.1 commenced';
            stdlog($log_details);

            unset($sql);
            $sql = array();
            $sql[] = "ALTER TABLE variable ADD program varchar(100) NOT NULL default '' AFTER last_seen";
            $sql[] = "UPDATE variable SET program = 'environment'";

            $sql[] = "UPDATE oa_config SET config_value = '20160126' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.10.1' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $log_details->message = $this_query;
                stdlog($log_details);
                $query = $this->db->query($this_query);
            }

            $log_details->message = 'Upgrade database to 1.10.1 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20160130') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.12

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.12 commenced';
            stdlog($log_details);

            unset($sql);
            $sql = array();
            $sql[] = "ALTER TABLE system ADD comments text NOT NULL AFTER description";

            $sql[] = "UPDATE oa_config SET config_value = '20160130' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.12' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $log_details->message = $this_query;
                stdlog($log_details);
                $query = $this->db->query($this_query);
            }

            $log_details->message = 'Upgrade database to 1.12 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20160303') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.12.2

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.12.2 commenced';
            stdlog($log_details);

            unset($sql);
            $sql = array();

            $sql[] = "UPDATE system SET man_class = 'virtual server' WHERE (manufacturer LIKE '%vmware%' OR manufacturer LIKE '%Parallels%') AND os_family IN ('Windows 2008', 'Windows 2012', 'Windows 2003')";
            $sql[] = "UPDATE system SET man_class = 'hypervisor' WHERE os_family LIKE 'VMware ESX%'";
            $sql[] = "UPDATE system SET man_class = 'virtual desktop' WHERE manufacturer LIKE '%vmware%' AND os_family IN ('Windows XP', 'Windows 7', 'Windows 8', 'Windows 10')";

            $sql[] = "DELETE FROM `oa_config` WHERE config_name = 'discovery_mac_match'";
            $sql[] = "INSERT INTO `oa_config` VALUES ('discovery_mac_match','n','y',NOW(),0,'Should we match a device based only on its mac address during discovery.')";

            $sql[] = "DELETE FROM `oa_config` WHERE config_name = 'discovery_linux_script_directory'";
            $sql[] = "INSERT INTO `oa_config` VALUES ('discovery_linux_script_directory','/tmp/','y',NOW(),0,'The directory the script is copied into on the target device.')";

            $sql[] = "DELETE FROM `oa_config` WHERE config_name = 'discovery_linux_script_permissions'";
            $sql[] = "INSERT INTO `oa_config` VALUES ('discovery_linux_script_permissions','700','y',NOW(),0,'The permissions set on the audit_linux.sh script when it is copied to the target device.')";

            $sql[] = "DELETE FROM `oa_config` WHERE config_name = 'discovery_nmap_os'";
            $sql[] = "INSERT INTO `oa_config` VALUES ('discovery_nmap_os','n','y',NOW(),0,'When discovery runs Nmap, should we use the -O flag to capture OS information (will slow down scan and requires SUID on the Nmap binary under Linux).')";

            $sql[] = "ALTER TABLE oa_user ADD permissions text NOT NULL default ''";

            $sql[] = "UPDATE oa_org SET org_name = 'Default Organisation' WHERE org_name = '' AND org_id = 0";
            $sql[] = "UPDATE oa_org SET org_comments = '' WHERE org_comments = 'Default Organisation.' AND org_id = 0";

            $sql[] = "DROP TABLE IF EXISTS `oa_user_org`";
            $sql[] = "CREATE TABLE `oa_user_org` (
                      `id` int(10) NOT NULL AUTO_INCREMENT,
                      `user_id` int(10) unsigned NOT NULL,
                      `org_id` int(10) unsigned NOT NULL,
                      `access_level` int(10) unsigned NOT NULL,
                      `permissions` text NOT NULL DEFAULT '',
                      PRIMARY KEY (`id`),
                      KEY `user_id` (`user_id`),
                      KEY `org_id` (`org_id`),
                      CONSTRAINT `oa_user_org_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE,
                      CONSTRAINT `oa_user_org_org_id` FOREIGN KEY (`org_id`) REFERENCES `oa_org` (`org_id`) ON DELETE CASCADE
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

            $sql[] = "INSERT INTO oa_user_org (SELECT NULL, oa_user.user_id, 0, 10, '' FROM oa_user LEFT JOIN oa_group_user ON (oa_user.user_id = oa_group_user.user_id AND oa_group_user.group_user_access_level = 10) WHERE oa_user.user_admin = 'y' OR oa_group_user.group_id = 1 GROUP BY oa_user.user_id)";

            $sql[] = "DROP TABLE IF EXISTS ip";

            $sql[] = "CREATE TABLE `ip` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `system_id` int(10) unsigned DEFAULT NULL,
              `current` enum('y','n') NOT NULL DEFAULT 'y',
              `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
              `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
              `mac` varchar(200) NOT NULL DEFAULT '',
              `net_index` varchar(10) NOT NULL DEFAULT '',
              `ip` varchar(45) NOT NULL DEFAULT '',
              `netmask` varchar(30) NOT NULL DEFAULT '',
              `cidr` varchar(4) NOT NULL DEFAULT '',
              `version` tinyint(3) unsigned NOT NULL DEFAULT '4',
              `network` varchar(40) NOT NULL DEFAULT '',
              `set_by` enum('','dhcp','static','auto','local') NOT NULL DEFAULT '',
              PRIMARY KEY (`id`),
              KEY `system_id` (`system_id`),
              KEY `mac` (`mac`),
              CONSTRAINT `ip_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            $sql[] = "INSERT INTO ip (SELECT NULL, system_id, 'y', first_timestamp, `timestamp`, net_mac_address, net_index, ip_address_v4, ip_subnet, NULL, '4', '', '' FROM sys_hw_network_card_ip WHERE ip_address_version = '4')";

            $sql[] = "INSERT INTO ip (SELECT NULL, system_id, 'y', first_timestamp, `timestamp`, net_mac_address, net_index, ip_address_v6, NULL, ip_subnet, '6', '', '' FROM sys_hw_network_card_ip WHERE ip_address_version = '6')";

            $sql[] = "DROP TABLE IF EXISTS sys_hw_network_card_ip";

            $sql[] = "UPDATE oa_config SET config_value = '20160303' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.12.2' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $log_details->message = $this_query;
                stdlog($log_details);
                $query = $this->db->query($this_query);
            }

            // update the network groups
            $this->data['output'] .= "Converting network groups.<br /><br />\n";
            $sql = "SELECT group_id, group_dynamic_select, group_name FROM oa_group WHERE group_category = 'network'";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);
            $result = $query->result();
            foreach ($result as $group) {
                $dynamic_select = $group->group_dynamic_select;
                $dynamic_select = str_replace("SELECT distinct(system.system_id) FROM system, sys_hw_network_card_ip", "SELECT distinct(system.system_id) FROM system, ip", $dynamic_select);
                $dynamic_select = str_replace("WHERE ( sys_hw_network_card_ip", "WHERE ( ip.version = '4' AND ip", $dynamic_select);
                $dynamic_select = str_replace("sys_hw_network_card_ip.ip_address_v4", "ip.ip", $dynamic_select);
                $dynamic_select = str_replace("sys_hw_network_card_ip.ip_subnet", "ip.netmask", $dynamic_select);
                $dynamic_select = str_replace("sys_hw_network_card_ip.timestamp = system.timestamp", "ip.current = 'y'", $dynamic_select);
                $dynamic_select = str_replace("oa_group_sys.group_id = ?", "oa_group_sys.group_id = @group", $dynamic_select);
                $dynamic_select = str_replace("ip.ip_address_v4", "ip.ip", $dynamic_select);
                $dynamic_select = str_replace("sys_hw_network_card_ip.system_id", "ip.system_id", $dynamic_select);
                $sql = "UPDATE oa_group SET group_dynamic_select = '" . $dynamic_select . "' WHERE group_id = " . intval($group->group_id);
                $sql = "UPDATE oa_group SET group_dynamic_select = \"" . $dynamic_select . "\" WHERE group_id = " . intval($group->group_id);
                $log_details->message = $sql;
                stdlog($log_details);
                $query = $this->db->query($sql);
                $this->data['output'] .= $this->db->last_query()."<br /><br />\n";
            }

            # remove any groups that are using sys_hw_network_card_ip
            $sql = "SELECT group_name, group_dynamic_select from oa_group WHERE group_dynamic_select like '%sys_hw_network_card_ip%'";
            $query = $this->db->query($sql);
            $log_details->message = $sql;
            stdlog($log_details);
            $result = $query->result();
            foreach ($result as $row) {
                $this->data['output'] .= 'WARNING - the folloing group has been deleted as it used incompatible SQL. We no longer have a table named sys_hw_network_ip_address (it is now \'ip\' with renamed columns). Please recreate this group: ' . $row->group_name . '\n<br />The SQL for this group was: ' . $row->group_dynamic_select . "<br /><br />\n";
            }
            $sql = "DELETE oa_group FROM oa_group WHERE group_dynamic_select like '%sys_hw_network_card_ip%'";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);

            # remove any incorrectly formatted netmasks
            $sql = "UPDATE ip SET netmask = '0.0.0.0' WHERE netmask = '000.000.000.000'";
            $log_details->message = $sql;
            stdlog($log_details);
            $this->db->query($sql);

            # get all our candidate ip addresses and add a network name and a CIDR
            $sql = "SELECT * FROM ip WHERE ip.ip != '' AND ip.netmask != '' AND ip.netmask != '0.0.0.0' AND ip.version = 4 and ip.network = ''";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);
            $result = $query->result();
            foreach ($result as $row) {
                $temp_long = ip2long($row->netmask);
                $temp_base = ip2long('255.255.255.255');
                $temp_cidr = 32-log(($temp_long ^ $temp_base)+1, 2);
                $network_details = network_details($row->ip.'/'.$temp_cidr);
                if (isset($network_details) and isset($network_details->network) and $network_details->network != '') {
                    $temp_network = $network_details->network.' / '.$temp_cidr;
                    $sql = "UPDATE ip SET network = ?, cidr = ? WHERE id = ?";
                    $data = array("$temp_network", "$temp_cidr", $row->id);
                    $this->db->query($sql, $data);
                }
                unset($temp_long);
                unset($temp_base);
                unset($temp_cidr);
                unset($network_details);
                unset($temp_network);
            }

            $log_details->message = 'Upgrade database to 1.12.2 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20160401') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.12.4

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.12.4 commenced';
            stdlog($log_details);

            unset($sql);
            $sql = array();

            $sql[] = "UPDATE oa_group SET group_category = 'org' WHERE group_category = 'owner'";
            $sql[] = "ALTER TABLE oa_group CHANGE group_category group_category enum('application','device','general','location','network','org','os') NOT NULL DEFAULT 'general'";
            $sql[] = "ALTER TABLE print_queue CHANGE system_key device varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE print_queue DROP ip";
            $sql[] = "ALTER TABLE print_queue DROP type";
            $sql[] = "ALTER TABLE print_queue ADD type varchar(100) NOT NULL DEFAULT '' AFTER duplex";
            $sql[] = "ALTER TABLE print_queue CHANGE connection_status status varchar(100) NOT NULL DEFAULT '' AFTER type";
            $sql[] = "ALTER TABLE print_queue ADD capabilities varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE print_queue ADD driver varchar(200) NOT NULL DEFAULT ''";


            $sql[] = "UPDATE oa_config SET config_value = '20160401' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.12.4' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $log_details->message = $this_query;
                stdlog($log_details);
                $query = $this->db->query($this_query);
            }

            $log_details->message = 'Upgrade database to 1.12.4 completed';
            stdlog($log_details);
            unset($log_details);
        }



        if (($db_internal_version < '20160409') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.12.6

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.12.6 commenced';
            stdlog($log_details);

            unset($sql);
            $sql = array();
            # we're removving the foreign key between additional fields and groups
            $sql[] = "ALTER TABLE sys_man_additional_fields DROP FOREIGN KEY `sys_man_additional_fields_group_id`";
            $sql[] = "ALTER TABLE sys_man_additional_fields DROP KEY `sys_man_additional_fields_group`";

            # this should be unused now - groups and reports refreshed further down
            $sql[] = "ALTER TABLE system DROP man_icon";

            # drop this key so we can change org_id to id
            $sql[] = "ALTER TABLE oa_user_org DROP FOREIGN KEY oa_user_org_org_id";

            # change the oa_org to the new SQL schema style
            $sql[] = "ALTER TABLE oa_org CHANGE org_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE oa_org CHANGE org_name name varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_org CHANGE org_parent_id parent_id int(10) unsigned DEFAULT '0'";
            $sql[] = "ALTER TABLE oa_org CHANGE org_group_id group_id int(10) unsigned DEFAULT '0'";
            $sql[] = "ALTER TABLE oa_org DROP contact_id";
            $sql[] = "ALTER TABLE oa_org DROP org_picture";
            $sql[] = "ALTER TABLE oa_org CHANGE org_comments comments text NOT NULL DEFAULT ''";
            $sql[] = "UPDATE oa_org SET name = 'Default Organisation' WHERE id = 0";

            # now add the key back
            $sql[] = "ALTER TABLE oa_user_org ADD CONSTRAINT oa_user_org_org_id FOREIGN KEY (org_id) REFERENCES oa_org (id) ON DELETE CASCADE";

            # drop these foreign keys so we can change user_id to id
            $sql[] = "ALTER TABLE edit_log DROP FOREIGN KEY edit_log_user_id";
            $sql[] = "ALTER TABLE oa_change DROP FOREIGN KEY oa_change_user_id";
            $sql[] = "ALTER TABLE oa_group_user DROP FOREIGN KEY oa_group_user_user_id";
            $sql[] = "ALTER TABLE oa_user_org DROP FOREIGN KEY oa_user_org_user_id";
            $sql[] = "ALTER TABLE sys_man_attachment DROP FOREIGN KEY att_user_id";
            $sql[] = "ALTER TABLE sys_man_attachment DROP KEY att_user_id";
            $sql[] = "ALTER TABLE sys_man_notes DROP FOREIGN KEY sys_man_notes_user_id";

            # change the user table to the new SQL schema format
            $sql[] = "ALTER TABLE oa_user CHANGE user_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE oa_user CHANGE user_name name varchar(100) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_password password varchar(250) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_full_name full_name varchar(100) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_email email varchar(100) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_lang lang varchar(100) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_display_number display_count smallint(6) NOT NULL DEFAULT '10'";
            $sql[] = "ALTER TABLE oa_user CHANGE user_theme theme varchar(100) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_admin admin varchar(1) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_active active varchar(1) NOT NULL DEFAULT 'y'";
            $sql[] = "ALTER TABLE oa_user CHANGE user_sam sam int(10) NOT NULL DEFAULT '1'";
            $sql[] = "ALTER TABLE oa_user DROP user_change";

            # now add the foreign keys back
            $sql[] = "ALTER TABLE edit_log ADD CONSTRAINT edit_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (id)";
            $sql[] = "ALTER TABLE oa_change ADD CONSTRAINT oa_change_user_id FOREIGN KEY (user_id) REFERENCES oa_user (id)";
            $sql[] = "ALTER TABLE oa_group_user ADD CONSTRAINT oa_group_user_user_id FOREIGN KEY (user_id) REFERENCES oa_user (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE oa_user_org ADD CONSTRAINT oa_user_org_user_id FOREIGN KEY (user_id) REFERENCES oa_user (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE sys_man_notes ADD CONSTRAINT sys_man_notes_user_id FOREIGN KEY (user_id) REFERENCES oa_user (id)";

            # change the location table to use the new SQL schema format
            $sql[] = "ALTER TABLE oa_location CHANGE location_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE oa_location CHANGE location_name name varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_type type varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_room room varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_suite suite varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_level level varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_address address varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_suburb suburb varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_city city varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_district district varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_region region varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_area area varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_state state varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_postcode postcode varchar(10) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_country country varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_tags tags varchar(250) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_phone phone varchar(20) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_picture picture varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_latitude latitude float(10,6) NOT NULL";
            $sql[] = "ALTER TABLE oa_location CHANGE location_longitude longitude float(10,6) NOT NULL";
            $sql[] = "ALTER TABLE oa_location CHANGE location_geo geo varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_comments comments varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_icon icon varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_group_id group_id int(10) unsigned NOT NULL DEFAULT '0'";

            # this is unused and having 'count' as a column name is not ideal because it's a SQL reserved word
            $sql[] = "ALTER TABLE service DROP count";

            # allow for some silly long serial numbers
            $sql[] = "ALTER TABLE system CHANGE `serial` `serial` varchar(250) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE `man_serial` `man_serial` varchar(250) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system ADD `dbus_identifier` varchar(255) NOT NULL DEFAULT '' AFTER uuid";

            # a new function we'll use for checking if an IP is in a blessed subnet
            $sql[] = "DROP FUNCTION IF EXISTS cidr_to_mask";
            $sql[] = "CREATE FUNCTION cidr_to_mask (cidr INT(2)) RETURNS CHAR(15) DETERMINISTIC RETURN INET_NTOA(CONV(CONCAT(REPEAT(1,cidr),REPEAT(0,32-cidr)),2,10))";

            # our new blessed subnets config item
            $sql[] = "UPDATE `ip` SET `network` = REPLACE(`network`, ' ', '')";
            $sql[] = "INSERT INTO `oa_config` VALUES ('blessed_subnets_use','y','y',NOW(),0,'Should we only accept data from the blessed subnets list.')";

            # new table for network descriptions and blessed subnets
            $sql[] = "DROP TABLE IF EXISTS `networks`";
            $sql[] = "CREATE TABLE `networks` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(200) NOT NULL DEFAULT '', `description` text NOT NULL, `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $sql[] = "INSERT INTO `networks` SELECT NULL, REPLACE(REPLACE(`group_name`, ' ', ''), 'Network-', '')  AS name, TRIM(both '\t' from group_description) as description, 'system upgrade' as edited_by, NOW() as edited_date FROM oa_group WHERE group_category = 'network' AND SUBSTR(REPLACE(REPLACE(`group_name`, ' ', ''), 'Network-', ''),1,LOCATE('/',REPLACE(REPLACE(`group_name`, ' ', ''), 'Network-', ''))-1) != `group_description`";

            $sql[] = "INSERT INTO `networks` (SELECT NULL, ip.network as name, '' as description, 'system upgrade' as edited_by, NOW() as edited_date FROM ip WHERE network NOT IN (SELECT networks.name FROM networks) AND ip.network != '' GROUP BY ip.network)";

            $sql[] = "DROP TABLE IF EXISTS `chart`";

            $sql[] = "CREATE TABLE `chart` ( `when` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', `what` varchar(50) NOT NULL DEFAULT '', `org_id` int unsigned NOT NULL DEFAULT 0, `count` int unsigned NOT NULL DEFAULT 0, PRIMARY KEY (`when`, `what`, `org_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            $sql[] = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(audit_log.timestamp) as `when`, 'audit' as `what`, system.man_org_id as `org_id`, count(audit_log.system_id) AS `new_count` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.system_id) WHERE audit_log.type = 'audit' AND system.man_org_id IS NOT NULL GROUP BY system.man_org_id, DATE(audit_log.timestamp) ORDER BY DATE(audit_log.timestamp))";

            $sql[] = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(audit_log.timestamp) as `when`, 'snmp' as `what`, system.man_org_id as `org_id`, count(audit_log.system_id) AS `count` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.system_id) WHERE audit_log.type = 'snmp' AND system.man_org_id IS NOT NULL GROUP BY system.man_org_id, DATE(audit_log.timestamp) ORDER BY DATE(audit_log.timestamp))";

            $sql[] = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(audit_log.timestamp) as `when`, 'nmap' as `what`, system.man_org_id as `org_id`, count(audit_log.system_id) AS `count` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.system_id) WHERE audit_log.type = 'nmap' AND system.man_org_id IS NOT NULL GROUP BY system.man_org_id, DATE(audit_log.timestamp) ORDER BY DATE(audit_log.timestamp))";

            $sql[] = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(change_log.timestamp) as `when`, CONCAT(change_log.db_table, '_', change_log.db_action) as `what`, system.man_org_id as `org_id`, count(change_log.id) AS `count` FROM change_log LEFT JOIN system ON (change_log.system_id = system.system_id) WHERE DATE(change_log.timestamp) >= '2015-01-01' AND change_log.db_table != 'system' GROUP BY system.man_org_id, CONCAT(change_log.db_table, '_', change_log.db_action), DATE(change_log.timestamp) ORDER BY DATE(change_log.timestamp))";

            $sql[] = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(`first_timestamp`) as `when`, 'system_create' as `what`, system.man_org_id as `org_id`, count(system_id) AS `count` FROM system WHERE DATE(`first_timestamp`) >= '2015-01-01' GROUP BY DATE(`first_timestamp`), man_org_id ORDER BY DATE(`first_timestamp`))";

            # set our versions
            $sql[] = "UPDATE oa_config SET config_value = '20160409' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.12.6' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $log_details->message = $this_query;
                stdlog($log_details);
                $query = $this->db->query($this_query);
            }

            // update any leftover group definitions by changing man_icon to icon
            $sql = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'man_icon', 'icon')";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_group_column SET column_variable = 'icon' WHERE column_variable = 'man_icon'";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);

            // update any leftover report definitions by changing man_icon to icon
            $sql = "UPDATE oa_report SET report_sql = REPLACE(report_sql, 'man_icon', 'icon')";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report_column SET column_variable = 'icon' WHERE column_variable = 'man_icon'";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);

            # have to re-run this as we left it in the original SQL script.
            $sql = "UPDATE oa_group SET group_category = 'org' WHERE group_category = 'owner'";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_group CHANGE group_category group_category enum('application','device','general','location','network','org','os') NOT NULL DEFAULT 'general'";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);

            $this->load->model('m_networks');
            foreach ($this->m_configuration->read_subnet() as $subnet) {
                $network = new stdClass();
                $network->name = $subnet;
                $network->org_id = 0;
                $this->m_networks->upsert($network);
            }

            $log_details->message = 'Upgrade database to 1.12.6 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20160620') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.12.8

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.12.8 commenced';
            stdlog($log_details);

            if (!empty($this->data['output'])) {
                $this->data['output'] .= 'Commencing 1.12.8 upgrade at ' . $this->config->config['timestamp'] . "\n\n";
            } else {
                $this->data['output'] = 'Commencing 1.12.8 upgrade at ' . $this->config->config['timestamp'] . "\n\n";
            }

            # initialise our $sql array
            unset($sql);
            $sql = array();

            $sql_indexes = "SELECT TABLE_NAME,COLUMN_NAME,CONSTRAINT_NAME, REFERENCED_TABLE_NAME,REFERENCED_COLUMN_NAME FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE WHERE REFERENCED_TABLE_SCHEMA = '" . $this->db->database . "' AND  REFERENCED_TABLE_NAME = 'system' and REFERENCED_COLUMN_NAME = 'system_id'";
            $query = $this->db->query($sql_indexes);
            $result = $query->result();
            foreach ($result as $item) {
                $sql[] = "ALTER TABLE `" . $item->TABLE_NAME . "` DROP FOREIGN KEY " . $item->CONSTRAINT_NAME;
            }
            unset($sql_indexes);

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
            $sql[] = "ALTER TABLE system DROP system_key";
            $sql[] = "ALTER TABLE system DROP system_key_type";
            $sql[] = "ALTER TABLE system CHANGE uuid uuid varchar(100) NOT NULL DEFAULT '' AFTER id";
            $sql[] = "ALTER TABLE system CHANGE hostname name varchar(100) NOT NULL DEFAULT '' AFTER uuid";
            $sql[] = "ALTER TABLE system CHANGE man_ip_address ip varchar(45) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE system ADD hostname varchar(100) NOT NULL default '' AFTER ip";
            $sql[] = "ALTER TABLE system ADD dns_hostname varchar(100) NOT NULL default '' AFTER hostname";
            $sql[] = "ALTER TABLE system DROP domain";
            $sql[] = "ALTER TABLE system CHANGE man_domain domain varchar(100) NOT NULL DEFAULT '' AFTER dns_hostname";
            $sql[] = "ALTER TABLE system ADD dns_domain varchar(100) NOT NULL default '' AFTER domain";
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
            $sql[] = "ALTER TABLE system CHANGE linked_sys attached_system_id int(10) DEFAULT NULL";
            $sql[] = "ALTER TABLE system DROP manufacturer";
            $sql[] = "ALTER TABLE system CHANGE man_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER attached_system_id";
            $sql[] = "ALTER TABLE system DROP model";
            $sql[] = "ALTER TABLE system CHANGE man_model model varchar(200) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE system DROP `serial`";
            $sql[] = "ALTER TABLE system CHANGE man_serial `serial` varchar(200) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE system DROP form_factor";
            $sql[] = "ALTER TABLE system CHANGE man_form_factor form_factor varchar(50) NOT NULL DEFAULT '' AFTER uptime";
            $sql[] = "ALTER TABLE system CHANGE pc_os_bit os_bit tinyint unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE pc_memory memory_count int unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE pc_num_processor processor_count tinyint unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE pc_date_os_installation os_installation_date date NOT NULL DEFAULT '2000-01-01'";
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
            $sql[] = "ALTER TABLE system CHANGE man_vm_system_id vm_system_id int(10) unsigned DEFAULT NULL";
            $sql[] = "ALTER TABLE system CHANGE man_vm_group vm_group varchar(150) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_cluster_name cluster_name varchar(150) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system ADD cluster_type varchar(150) NOT NULL DEFAULT '' AFTER cluster_name";
            $sql[] = "ALTER TABLE system CHANGE invoice_id invoice_id int(10) unsigned DEFAULT NULL";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_invoice purchase_invoice varchar(50) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_order_number purchase_order_number varchar(50) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_cost_center purchase_cost_center varchar(50) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_vendor purchase_vendor varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_date purchase_date date NOT NULL DEFAULT '2000-01-01'";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_service_contract_number purchase_service_contract_number varchar(255) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_lease_expiry_date lease_expiry_date date NOT NULL DEFAULT '2000-01-01'";
            $sql[] = "ALTER TABLE system CHANGE man_purchase_amount purchase_amount varchar(50) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_warranty_duration warranty_duration int(5) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE man_warranty_expires warranty_expires date NOT NULL DEFAULT '2000-01-01'";
            $sql[] = "ALTER TABLE system CHANGE man_warranty_type warranty_type enum('','24x7x365','9x5x5','Next Business Day') NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system DROP man_terminal_number";
            $sql[] = "ALTER TABLE system DROP nmap_type";
            $sql[] = "ALTER TABLE system DROP contact_id";
            $sql[] = "ALTER TABLE system CHANGE man_switch_id switch_system_id int(10) DEFAULT NULL";
            $sql[] = "ALTER TABLE system CHANGE man_switch_port switch_port int unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE man_patch_panel patch_panel varchar(45) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE man_patch_panel_port patch_panel_port_new int unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE patch_panel_port_new patch_panel_port int unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE system CHANGE man_wall_port wall_port varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system DROP man_picture";
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
            $sql[] = "ALTER TABLE system CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER sysLocation";
            $sql[] = "ALTER TABLE system CHANGE timestamp last_seen datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE system CHANGE last_seen_by last_seen_by varchar(150) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE system CHANGE last_user last_user varchar(150) NOT NULL DEFAULT '' AFTER last_seen_by";
            $sql[] = "ALTER TABLE system ADD KEY ip (`ip`)";
            $sql[] = "ALTER TABLE system ADD KEY name (`name`)";

            # recreate the indexes
            $tables = array('audit_log', 'bios', 'change_log', 'disk', 'dns', 'graph', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'oa_group_sys', 'optical', 'pagefile', 'partition', 'print_queue', 'processor', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'sys_man_additional_fields_data', 'sys_man_attachment', 'sys_man_notes', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'warranty', 'windows');
            foreach ($tables as $table) {
                if ($this->db->field_exists('system_id', $table)) {
                    $sql[] = "DELETE FROM `" . $table . "` WHERE `" . $table . "`.`system_id` NOT IN (SELECT system.id FROM system)";
                }
            }
            $sql[] = "ALTER TABLE audit_log ADD CONSTRAINT audit_log_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE bios ADD CONSTRAINT bios_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE change_log ADD CONSTRAINT change_log_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE disk ADD CONSTRAINT disk_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE dns ADD CONSTRAINT dns_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE graph ADD CONSTRAINT graph_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE ip ADD CONSTRAINT ip_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE log ADD CONSTRAINT log_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE memory ADD CONSTRAINT memory_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE module ADD CONSTRAINT module_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE monitor ADD CONSTRAINT monitor_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE motherboard ADD CONSTRAINT motherboard_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE netstat ADD CONSTRAINT netstat_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE network ADD CONSTRAINT network_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE oa_group_sys ADD CONSTRAINT oa_group_sys_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE optical ADD CONSTRAINT optical_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE pagefile ADD CONSTRAINT pagefile_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE `partition` ADD CONSTRAINT partition_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE print_queue ADD CONSTRAINT print_queue_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE processor ADD CONSTRAINT processor_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE route ADD CONSTRAINT route_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE san ADD CONSTRAINT san_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE scsi ADD CONSTRAINT scsi_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE server ADD CONSTRAINT server_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE server_item ADD CONSTRAINT server_item_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE service ADD CONSTRAINT service_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE share ADD CONSTRAINT share_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE software ADD CONSTRAINT software_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE software_key ADD CONSTRAINT software_key_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE sound ADD CONSTRAINT sound_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE sys_man_additional_fields_data ADD CONSTRAINT additional_field_item_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE sys_man_attachment ADD CONSTRAINT attachment_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE sys_man_notes ADD CONSTRAINT notes_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE task ADD CONSTRAINT task_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE user ADD CONSTRAINT user_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE user_group ADD CONSTRAINT user_group_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE variable ADD CONSTRAINT variable_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE video ADD CONSTRAINT video_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE vm ADD CONSTRAINT vm_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE warranty ADD CONSTRAINT warranty_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE windows ADD CONSTRAINT windows_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";

            $sql[] = "RENAME TABLE sys_man_attachment TO `attachment`";
            $sql[] = "ALTER TABLE `attachment` CHANGE att_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE `attachment` CHANGE `att_title` `title` varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE `attachment` CHANGE `att_filename` `filename` text NOT NULL";

            $sql[] = "ALTER TABLE `change_log` CHANGE `details` `details` text NOT NULL";

            $sql[] = "RENAME TABLE sys_man_invoice TO `invoice`";
            $sql[] = "ALTER TABLE `invoice` CHANGE invoice_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE `invoice` CHANGE `org_id` `org_id` int(10) unsigned NOT NULL DEFAULT '0'";

            $sql[] = "RENAME TABLE sys_man_invoice_line TO `invoice_item`";
            $sql[] = "ALTER TABLE `invoice_item` CHANGE line_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE `invoice_item` CHANGE `system_id` `system_id` int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE `invoice_item` CHANGE `man_serial` `serial` varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE `invoice_item` CHANGE `man_asset_number` `asset_number` varchar(200) NOT NULL DEFAULT ''";

            $sql[] = "RENAME TABLE sys_man_notes TO `notes`";
            $sql[] = "ALTER TABLE `notes` CHANGE notes_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE `notes` CHANGE `notes_title` `title` varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE `notes` CHANGE `notes_text` `comment` text NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE `notes` DROP FOREIGN KEY sys_man_notes_user_id";

            $sql[] = "RENAME TABLE `sys_man_additional_fields_data` TO `additional_field_item`";
            $sql[] = "ALTER TABLE `additional_field_item` DROP FOREIGN KEY sys_man_additional_fields_data_field_id";
            $sql[] = "ALTER TABLE `additional_field_item` DROP KEY         sys_man_additional_fields_data_field_id";
            $sql[] = "ALTER TABLE `additional_field_item` DROP field_int";
            $sql[] = "ALTER TABLE `additional_field_item` DROP field_memo";
            $sql[] = "ALTER TABLE `additional_field_item` CHANGE field_details_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE `additional_field_item` CHANGE `field_id` `additional_field_id` int(10) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE `additional_field_item` CHANGE `field_datetime` `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `additional_field_item` CHANGE `field_varchar` `value` text NOT NULL DEFAULT ''";

            $sql[] = "RENAME TABLE `sys_man_additional_fields` TO `additional_field`";
            $sql[] = "ALTER TABLE `additional_field` CHANGE field_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE `additional_field` DROP field_sys_type";
            $sql[] = "ALTER TABLE `additional_field` DROP field_derived_type";
            $sql[] = "ALTER TABLE `additional_field` DROP field_derived_sql";
            $sql[] = "ALTER TABLE `additional_field` CHANGE `field_name` `name` varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE `additional_field` CHANGE `field_type` `type` enum('varchar','bool','int','memo','list','datetime','timestamp') NOT NULL DEFAULT 'varchar'";
            $sql[] = "ALTER TABLE `additional_field` CHANGE `field_values` `values` varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE `additional_field` CHANGE `field_placement` `placement` varchar(100) NOT NULL DEFAULT ''";

            $sql[] = "ALTER TABLE `network` DROP KEY timestamp";
            $sql[] = "ALTER TABLE `edit_log` DROP FOREIGN KEY edit_log_user_id";
            $sql[] = "ALTER TABLE `edit_log` DROP KEY user_id";
            $sql[] = "ALTER TABLE `edit_log` ADD KEY system_id (system_id)";
            $sql[] = "ALTER TABLE `edit_log` ADD CONSTRAINT edit_log_system_id FOREIGN KEY (system_id) REFERENCES system (id) ON DELETE CASCADE";
            $sql[] = "ALTER TABLE `edit_log` DROP KEY edit_log_system_id";
            $sql[] = "ALTER TABLE `notes` DROP KEY user_id";
            $sql[] = "ALTER TABLE `oa_connection` CHANGE connection_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE `oa_group_column` CHANGE column_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE `oa_group_sys` CHANGE group_sys_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE `oa_group_user` CHANGE group_user_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE `oa_report_column` CHANGE column_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE `service` DROP KEY description";

            $sql[] = "ALTER TABLE `oa_change` DROP FOREIGN KEY oa_change_user_id";
            $sql[] = "ALTER TABLE `oa_change` DROP KEY oa_change_user_id";
            $sql[] = "ALTER TABLE `oa_change` CHANGE change_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `change_short_desc` `title` varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `change_reason` `reason` text NOT NULL";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `change_planned_date` `planned_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `change_implemented_date` `implemented_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `change_external_id` `external_id` varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `change_external_link` `external_link` varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `change_authorising_person` `authorized_by` varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `change_performing_person` `performed_by` varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `change_detailed_desc` `details` text NOT NULL";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `change_potential_issues` `potential_issues` text NOT NULL";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `change_backout_plan` `backout_plan` text NOT NULL";

            $sql[] = "DROP TABLE IF EXISTS cluster";
            $sql[] = "CREATE TABLE `cluster` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(200) NOT NULL DEFAULT '', `description` text NOT NULL, `org_id` int(10) unsigned NOT NULL DEFAULT '0', `type` enum('high availability', 'load balancing', 'perforance', 'storage', 'other'), `purpose` enum('application', 'database', 'file', 'virtualisation', 'web', 'other'), `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

            $sql[] = "UPDATE system SET hostname = name";
            $sql[] = "UPDATE system SET dns_hostname = name";
            $sql[] = "UPDATE system SET dns_domain = domain";
 
            $sql[] = "DROP FUNCTION IF EXISTS cidr_to_mask";
            $sql[] = "CREATE FUNCTION cidr_to_mask (cidr INT(2)) RETURNS CHAR(15) DETERMINISTIC RETURN INET_NTOA(CONV(CONCAT(REPEAT(1,cidr),REPEAT(0,32-cidr)),2,10))";

            $sql[] = "DROP TABLE IF EXISTS `files`";
            $sql[] = "CREATE TABLE `files` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT, `org_id` int(10) unsigned NOT NULL DEFAULT '0', `path` varchar(45) NOT NULL DEFAULT '', `description` varchar(200) NOT NULL DEFAULT '', `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

            $sql[] = "DROP TABLE IF EXISTS `file`";
            $sql[] = "CREATE TABLE `file` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT, `system_id` int(10) unsigned DEFAULT NULL, `current` enum('y','n') NOT NULL DEFAULT 'y', `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', `files_id` int(10) unsigned DEFAULT NULL, `name` varchar(250) NOT NULL DEFAULT '', `full_name` text NOT NULL DEFAULT '', `size` int(10) unsigned NOT NULL DEFAULT '0', `directory` text NOT NULL DEFAULT '', `hash` varchar(250) NOT NULL DEFAULT '', `last_changed` varchar(100) NOT NULL DEFAULT '', `meta_last_changed` varchar(100) NOT NULL DEFAULT '', `permission` varchar(250) NOT NULL DEFAULT '', `owner` varchar(100) NOT NULL DEFAULT '', `group` varchar(100) NOT NULL DEFAULT '', `type` varchar(100) NOT NULL DEFAULT '', `version` varchar(100) NOT NULL DEFAULT '', `inode` bigint unsigned NOT NULL DEFAULT '0', PRIMARY KEY (`id`), KEY `system_id` (`system_id`), CONSTRAINT `file_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            # fix a previous missed item
            $sql[] = "ALTER TABLE `partition` CHANGE `type` `type` varchar(100) NOT NULL DEFAULT 'local' AFTER bootable";

            $sql[] = "DROP TABLE IF EXISTS `scripts`";
            $sql[] = "CREATE TABLE `scripts` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(250) NOT NULL DEFAULT '', `options` text NOT NULL DEFAULT '', `description` varchar(200) NOT NULL DEFAULT '', `based_on` varchar(200) NOT NULL DEFAULT '', `hash` varchar(250) NOT NULL DEFAULT '', `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

            $options = array();
            $options['submit_online'] = 'y';
            $options['create_file'] = 'n';
            if ($this->config->item('default_network_address') != '') {
                $options['url'] = 'http://' . $this->config->item('default_network_address') . '/open-audit/index.php/system/add_system';
            } else {
                $options['url'] = 'http://localhost/open-audit/index.php/system/add_system';
            }
            $options['debugging'] = 1;
            $options = json_encode($options);

            $sql[] = "INSERT INTO `scripts` VALUES (NULL, 'audit_aix.sh', '" . $options . "', 'The default audit AIX config.', 'audit_aix.sh', '', 'system', '2016-06-01 00:00:00')";

            $sql[] = "INSERT INTO `scripts` VALUES (NULL, 'audit_esx.sh', '" . $options . "', 'The default audit ESX config.', 'audit_esx.sh', '', 'system', '2016-06-01 00:00:00')";

            $sql[] = "INSERT INTO `scripts` VALUES (NULL, 'audit_linux.sh', '" . $options . "', 'The default audit Linux config.', 'audit_linux.sh', '', 'system', '2016-06-01 00:00:00')";

            $sql[] = "INSERT INTO `scripts` VALUES (NULL, 'audit_osx.sh', '" . $options . "', 'The default audit OSX config.', 'audit_osx.sh', '', 'system', '2016-06-01 00:00:00')";

            $sql[] = "INSERT INTO `scripts` VALUES (NULL, 'audit_windows.vbs', '" . $options . "', 'The default audit Windows config.', 'audit_windows.vbs', '', 'system', '2016-06-01 00:00:00')";

            $sql[] = "UPDATE additional_field SET placement = 'custom' WHERE placement = 'view_summary_custom'";
            $sql[] = "UPDATE additional_field SET placement = 'location' WHERE placement = 'view_summary_location'";
            $sql[] = "UPDATE additional_field SET placement = 'network' WHERE placement = 'view_summary_network'";
            $sql[] = "UPDATE additional_field SET placement = 'purchase' WHERE placement = 'view_summary_purchase'";
            $sql[] = "UPDATE additional_field SET placement = 'san' WHERE placement = 'view_hardware_san'";
            $sql[] = "UPDATE additional_field SET placement = 'san_disk' WHERE placement = 'view_hardware_san_disk'";
            $sql[] = "UPDATE additional_field SET placement = 'system' WHERE placement = 'system_details'";
            $sql[] = "UPDATE additional_field SET placement = 'windows' WHERE placement = 'view_summary_windows'";

            $sql[] = "DROP TABLE IF EXISTS `credential`";
            $sql[] = "CREATE TABLE `credential` ( `id` int(10) unsigned NOT NULL AUTO_INCREMENT, `system_id` int(10) unsigned DEFAULT NULL, `current` enum('y','n') NOT NULL DEFAULT 'y', `name` varchar(200) NOT NULL DEFAULT '', `description` text NOT NULL, `type` enum('aws','basic_auth','cim','ipmi','mysql','netapp','other','snmp','snmp_v3','sql_server','ssh','ssh_key','vmware','web','windows') NOT NULL DEFAULT 'other', `credentials` text NOT NULL, `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', PRIMARY KEY (`id`), KEY `system_id` (`system_id`), CONSTRAINT `credential_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            $sql[] = "DROP TABLE IF EXISTS `credentials`";
            $sql[] = "CREATE TABLE `credentials` (  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,  `name` varchar(200) NOT NULL DEFAULT '',  `description` text NOT NULL,  `type` enum('aws','basic_auth','cim','impi','mysql','netapp','other','snmp','snmp_v3','sql_server','ssh','ssh_key','vmware','web','windows') NOT NULL DEFAULT 'other',  `credentials` text NOT NULL, `org_id` int(10) unsigned NOT NULL DEFAULT '0', `edited_by` varchar(200) NOT NULL DEFAULT '',  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',  PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            $sql[] = "ALTER TABLE `oa_user_org` CHANGE `org_id` `org_id` int(10) unsigned NOT NULL DEFAULT '0'";

            // update any leftover group definitions by changing man_icon to icon
            $sql[] = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'system.man_', 'system.')";
            $sql[] = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'man_', 'system.')";
            $sql[] = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'system.ip_address', 'system.ip')";
            $sql[] = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'system.system_id', 'system.id')";
            $sql[] = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'system.timestamp', 'system.last_seen')";

            $sql[] = "UPDATE oa_group SET group_dynamic_select = REPLACE(group_dynamic_select, 'system.man_', 'system.')";
            $sql[] = "UPDATE oa_group SET group_dynamic_select = REPLACE(group_dynamic_select, 'man_', 'system.')";
            $sql[] = "UPDATE oa_group SET group_dynamic_select = REPLACE(group_dynamic_select, 'system.ip_address', 'system.ip')";
            $sql[] = "UPDATE oa_group SET group_dynamic_select = REPLACE(group_dynamic_select, 'system.system_id', 'system.id')";
            $sql[] = "UPDATE oa_group SET group_dynamic_select = REPLACE(group_dynamic_select, 'system.timestamp', 'system.last_seen')";

            $sql[] = "DROP TABLE IF EXISTS `nmap`";
            $sql[] = "CREATE TABLE `nmap` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT, `system_id` int(10) unsigned DEFAULT NULL,`current` enum('y','n') NOT NULL DEFAULT 'y', `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00', `protocol` enum('tcp','udp','tcp6','udp6','tcp4','udp4','') NOT NULL DEFAULT '', `ip` varchar(45) NOT NULL DEFAULT '', `port` int(5) NOT NULL DEFAULT '0', `program` varchar(250) NOT NULL DEFAULT '', PRIMARY KEY (`id`), KEY `system_id` (`system_id`),CONSTRAINT `nmap_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            # set our versions
            $sql[] = "DELETE FROM `oa_config` WHERE config_name = 'discovery_use_dns'";
            $sql[] = "INSERT INTO `oa_config` VALUES ('discovery_use_dns','y','y',NOW(),0,'Should we use DNS for looking up the hostname and domain.')";
            $sql[] = "INSERT INTO `oa_config` VALUES ('maps_api_key','AIzaSyAhAUqssRASeC0Pfyx1TW1DXRmboG5bdG0','y',NOW(),0,'The API key for Google Maps.')";
            $sql[] = "UPDATE oa_config SET config_value = '20160620' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.12.8' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $log_details->message = $this_query;
                stdlog($log_details);
                $this->data['output'] .= $this_query.";\n\n";
                $query = $this->db->query($this_query);
            }

            # Move of default config values for credentials into credential sets
            $this->load->model('m_configuration');
            $this->m_configuration->load();
            $this->load->model('m_credentials');
            $this->load->library('encrypt');
            $this->response = new stdClass();
            $this->response->meta = new stdClass();
            $this->response->meta->received_data = new stdClass();
            $this->response->meta->received_data->attributes = new stdClass();
            if (!empty($this->config->config['default_snmp_community'])) {
                unset($this->response->meta->received_data->attributes->credentials);
                $this->response->meta->received_data->attributes->credentials = new stdClass();
                $this->response->meta->received_data->attributes->name = 'Default SNMP';
                $this->response->meta->received_data->attributes->description = 'Migrated from configuration.';
                $this->response->meta->received_data->attributes->org_id = 1;
                $this->response->meta->received_data->attributes->type = 'snmp';
                $this->response->meta->received_data->attributes->credentials = new stdClass();
                $this->response->meta->received_data->attributes->credentials->community = $this->config->config['default_snmp_community'];
                if ($this->m_credentials->create()) {
                    $message = "Default SNMP community migrated into credentials.";
                } else {
                    $message = "Could not migrate default SNMP community into credentials. Please add this to the credential sets.";
                }
                $this->data['output'] .= $message . "<br /><br />\n";
                $log_details->message = $message;
                stdlog($log_details);
            }
            if (!empty($this->config->config['default_ssh_username']) and !empty($this->config->config['default_ssh_password'])) {
                unset($this->response->meta->received_data->attributes->credentials);
                $this->response->meta->received_data->attributes->credentials = new stdClass();
                $this->response->meta->received_data->attributes->name = 'Default SSH';
                $this->response->meta->received_data->attributes->description = 'Migrated from configuration.';
                $this->response->meta->received_data->attributes->org_id = 1;
                $this->response->meta->received_data->attributes->type = 'ssh';
                $this->response->meta->received_data->attributes->credentials->username = $this->config->config['default_ssh_username'];
                $this->response->meta->received_data->attributes->credentials->password = $this->config->config['default_ssh_password'];
                if ($id =$this->m_credentials->create()) {
                    $message = "Default SSH username and password migrated into credentials.";
                } else {
                    $message = "Could not migrate default SSH username and password into credentials. Please add this to the credential sets.";
                }
                $this->data['output'] .= $message . "<br /><br />\n";
                $log_details->message = $message;
                stdlog($log_details);
            }
            if (!empty($this->config->config['default_windows_username']) and !empty($this->config->config['default_windows_password'])) {
                unset($this->response->meta->received_data->attributes->credentials);
                $this->response->meta->received_data->attributes->credentials = new stdClass();
                $this->response->meta->received_data->attributes->name = 'Default Windows';
                $this->response->meta->received_data->attributes->description = 'Migrated from configuration.';
                $this->response->meta->received_data->attributes->org_id = 1;
                $this->response->meta->received_data->attributes->type = 'windows';
                $this->response->meta->received_data->attributes->credentials->username = $this->config->config['default_windows_username'] . '@' . $this->config->config['default_windows_domain'];
                $this->response->meta->received_data->attributes->credentials->password = $this->config->config['default_windows_password'];
                if ($id =$this->m_credentials->create()) {
                    $message = "Default Windows username and password migrated into credentials.";
                } else {
                    $message = "Could not migrate default Windows username and password into credentials. Please add this to the credential sets.";
                }
                $this->data['output'] .= $message . "<br /><br />\n";
                $log_details->message = $message;
                stdlog($log_details);
            }
            if (!empty($this->config->config['default_ipmi_username']) and !empty($this->config->config['default_ipmi_password'])) {
                unset($this->response->meta->received_data->attributes->credentials);
                $this->response->meta->received_data->attributes->credentials = new stdClass();
                $this->response->meta->received_data->attributes->name = 'Default IPMI';
                $this->response->meta->received_data->attributes->description = 'Migrated from configuration.';
                $this->response->meta->received_data->attributes->org_id = 0;
                $this->response->meta->received_data->attributes->type = 'ipmi';
                $this->response->meta->received_data->attributes->credentials->username = $this->config->config['default_ipmi_username'];
                $this->response->meta->received_data->attributes->credentials->password = $this->config->config['default_ipmi_password'];
                if ($id =$this->m_credentials->create()) {
                    $message = "Default IPMI username and password migrated into credentials.";
                } else {
                    $message = "Could not migrate default IPMI username and password into credentials. Please add this to the credential sets.";
                }
                $this->data['output'] .= $message . "<br /><br />\n";
                $log_details->message = $message;
                stdlog($log_details);
            }

            $this_query = "DELETE FROM oa_config WHERE config_name IN ('default_ipmi_password', 'default_ipmi_username', 'default_snmp_community', 'default_ssh_password', 'default_ssh_username', 'default_windows_username', 'default_windows_domain', 'default_windows_password')";
            $log_details->message = $this_query;
            stdlog($log_details);
            $this->data['output'] .= $this_query.";\n\n";
            $query = $this->db->query($this_query);
            $this->data['output'] .= $this->db->last_query() . ";\n\n";

            # populate our new credential table with the system.access_details columns
            $sql = "SELECT NOW() as `timestamp`";
            $this->data['output'] .= $sql.";\n\n";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);
            $result = $query->result();
            $timestamp = $result[0]->timestamp;

            $sql = "DELETE FROM `credential`";
            $this->data['output'] .= $sql.";\n\n";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);

            $sql = "SELECT id, access_details FROM system WHERE access_details != ''";
            $this->data['output'] .= $sql.";\n\n";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);
            $result = $query->result();
            foreach ($result as $device) {
                $creds = $this->encrypt->decode($device->access_details);
                $creds = json_decode($creds);
                $newcreds = array();
                if (!empty($creds->snmp_community)) {
                    $cred = new stdClass();
                    $cred->community = $creds->snmp_community;
                    $credentials = (string)$this->encrypt->encode(json_encode($cred));
                    $sql = "INSERT INTO credential VALUES (NULL, ?, 'y', 'Device SNMP credentials.', 'Migrated from device upon upgrade.', 'snmp', ?, 'system', ?)";
                    $log_details->message = $sql;
                    stdlog($log_details);
                    $data = array(intval($device->id), (string)$credentials, "$timestamp");
                    $query = $this->db->query($sql, $data);
                    $this->data['output'] .= $this->db->last_query() . ";\n\n";
                    unset($cred);
                    unset($credentials);
                }
                if (!empty($creds->windows_username)) {
                    $cred = new stdClass();
                    $cred->username = $creds->windows_username . '@' . $creds->windows_domain;
                    $cred->password = $creds->windows_password;
                    $credentials = (string)$this->encrypt->encode(json_encode($cred));
                    $sql = "INSERT INTO credential VALUES (NULL, ?, 'y', 'Device Windows credentials.', 'Migrated from device upon upgrade.', 'windows', ?, 'system', ?)";
                    $log_details->message = $sql;
                    stdlog($log_details);
                    $data = array(intval($device->id), (string)$credentials, "$timestamp");
                    $query = $this->db->query($sql, $data);
                    $this->data['output'] .= $this->db->last_query() . ";\n\n";
                    unset($cred);
                    unset($credentials);
                }
                if (!empty($creds->ssh_username)) {
                    $cred = new stdClass();
                    $cred->username = $creds->ssh_username;
                    $cred->password = $creds->ssh_password;
                    $credentials = (string)$this->encrypt->encode(json_encode($cred));
                    $sql = "INSERT INTO credential VALUES (NULL, ?, 'y', 'Device SSH credentials.', 'Migrated from device upon upgrade.', 'ssh', ?, 'system', ?)";
                    $log_details->message = $sql;
                    stdlog($log_details);
                    $data = array(intval($device->id), (string)$credentials, "$timestamp");
                    $query = $this->db->query($sql, $data);
                    $this->data['output'] .= $this->db->last_query() . ";\n\n";
                    unset($cred);
                    unset($credentials);
                }
            }

            $sql = "ALTER TABLE `system` DROP access_details";
            $log_details->message = $sql;
            stdlog($log_details);
            $query = $this->db->query($sql);

            # reinitialise our $sql array
            unset($sql);
            $sql = array();

            $sql_time = "SELECT NOW() as `timestamp`";
            $query = $this->db->query($sql_time);
            $result = $query->result();
            $this->data['output'] .= 'Completing 1.12.8 upgrade at ' . $result[0]->timestamp . "\n\n";

            $log_details->message = 'Upgrade database to 1.12.8 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20160810') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.12.8.1
            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.12.8.1 commenced';
            stdlog($log_details);

            if (!empty($this->data['output'])) {
                $this->data['output'] .= 'Commencing 1.12.8.1 upgrade at ' . $this->config->config['timestamp'] . "\n\n";
            } else {
                $this->data['output'] = 'Commencing 1.12.8.1 upgrade at ' . $this->config->config['timestamp'] . "\n\n";
            }

            # initialise our $sql array
            unset($sql);
            $sql = array();

            $fields = $this->db->list_fields('system');
            $fields = implode($fields, "','");
            $fields = "'" . $fields . "'";
            $sql[] = "UPDATE additional_field SET name = CONCAT(`name`, '_1') WHERE name in (" . $fields . ")";
            unset($fields);
            $sql[] = "ALTER TABLE system ADD omk_uuid text NOT NULL AFTER last_user";
            $sql[] = "INSERT INTO `oa_config` VALUES ('delete_noncurrent','n','y',NOW(),0,'Should we delete any attributes that are not present when we audit a device.')";
            $sql[] = "UPDATE oa_config SET config_value = '20160810' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.12.8.1' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $log_details->message = $this_query;
                stdlog($log_details);
                $this->data['output'] .= $this_query.";\n\n";
                $query = $this->db->query($this_query);
            }

            $sql_time = "SELECT NOW() as `timestamp`";
            $query = $this->db->query($sql_time);
            $result = $query->result();
            $this->data['output'] .= 'Completing 1.12.8.1 upgrade at ' . $result[0]->timestamp . "\n\n";

            $log_details->message = 'Upgrade database to 1.12.8.1 completed';
            stdlog($log_details);
            unset($log_details);
        }


        if (($db_internal_version < '20160904') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.14

            $item_start = microtime(true);
            unset($sql);

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->severity = 5;
            $log_details->message = 'Upgrade database to 1.14 commenced';
            stdlog($log_details);

            if (!empty($this->data['output'])) {
                $this->data['output'] .= 'Commencing 1.14 upgrade at ' . $this->config->config['timestamp'] . "\n\n";
            } else {
                $this->data['output'] = 'Commencing 1.14 upgrade at ' . $this->config->config['timestamp'] . "\n\n";
            }

            # oa_user_org
            $sql = "DROP TABLE IF EXISTS oa_user_org";
            $query = $this->db->query($sql);

            # our default Org and Locations are now id = 1

            $org_1_id = 1;
            $sql = "SELECT COUNT(*) AS `count` FROM oa_org WHERE id = 0";
            $query = $this->db->query($sql);
            $result = $query->result();
            if ($result[0]->count > 0) {
                // OK, we have a default Org at id = 0, check to see if we have an Org at id = 1
                $sql = "SELECT COUNT(*) AS `count` FROM oa_org WHERE id = 1";
                $query = $this->db->query($sql);
                $result = $query->result();
                if ($result[0]->count > 0) {
                    // Move this Org
                    $sql = "INSERT INTO oa_org (SELECT NULL, `name`, 0, `comments`, 'system', NOW() FROM oa_org WHERE id = 1)";
                    $query = $this->db->query($sql);
                    $org_1_id = $this->db->insert_id();
                    $org_1_id = intval($org_1_id);
                    $sql = "DELETE FROM oa_org WHERE id = 1";
                    $query = $this->db->query($sql);
                }
                // Move our old id = 0 into id = 1
                $sql = "UPDATE oa_org SET id = 1, parent_id = 1 WHERE id = 0";
                $query = $this->db->query($sql);
                // update any old Orgs that had 1 as a parent to the new inserted id
                $sql = "UPDATE oa_org SET parent_id = $org_1_id WHERE parent_id = 1";
                $query = $this->db->query($sql);
                // update any orgs that had 0 as a parent to 1
                $sql = "UPDATE oa_org SET parent_id = 1 WHERE parent_id = 0";
                $query = $this->db->query($sql);
            } else {
                // Nothing at id = 0, check something is at id = 1
                $sql = "SELECT COUNT(*) as `count` FROM oa_org WHERE id = 1";
                $query = $this->db->query($sql);
                $result = $query->result();
                if ($result[0]->count == 0) {
                    // Insert the default Org
                    $sql = "INSERT INTO `oa_org` VALUES (1,'Default Organisation',1,'','system',NOW())";
                    $query = $this->db->query($sql);
                }
            }

            $location_1_id =1;
            $sql = "SELECT COUNT(*) AS `count` FROM oa_location WHERE id = 0";
            $query = $this->db->query($sql);
            $result = $query->result();
            if ($result[0]->count > 0) {
                // OK, we have a default Org at id = 0, check to see if we have an Org at id = 1
                $sql = "SELECT COUNT(*) AS `count` FROM oa_location WHERE id = 1";
                $query = $this->db->query($sql);
                $result = $query->result();
                if ($result[0]->count > 0) {
                    // Move this Location
                    if ($this->db->field_exists('org_id', 'oa_location')) {
                        $sql = "INSERT INTO oa_location (SELECT NULL, `name`,`org_id`,`type`,`room`,`suite`,`level`,`address`,`suburb`,`city`,`district`,`region`,`area`,`state`,`postcode`,`country`,`tags`,`phone`,`picture`,`latitude`,`longitude`,`geo`,`comments`,`icon`,'system',NOW() FROM oa_location WHERE id = 1)";
                        echo "here\n";
                    } else {
                        $sql = "INSERT INTO oa_location (SELECT NULL, `name`,`type`,`room`,`suite`,`level`,`address`,`suburb`,`city`,`district`,`region`,`area`,`state`,`postcode`,`country`,`tags`,`phone`,`picture`,`latitude`,`longitude`,`geo`,`comments`,`icon`, `group_id` FROM oa_location WHERE id = 1)";
                    }
                    $query = $this->db->query($sql);
                    $location_1_id = $this->db->insert_id();
                    $location_1_id = intval($location_1_id);
                    $sql = "DELETE FROM oa_location WHERE id = 1";
                    $query = $this->db->query($sql);
                }
                $sql = "UPDATE oa_location SET id = 1 WHERE id = 0";
                $query = $this->db->query($sql);
            } else {
                // Nothing at id = 0, check something is at id = 1
                $sql = "SELECT COUNT(*) as `count` FROM oa_location WHERE id = 1";
                $query = $this->db->query($sql);
                $result = $query->result();
                if ($result[0]->count == 0) {
                    // Insert the default Org
                    $sql = "INSERT INTO `oa_location` VALUES (1,'Default Location',1,'Office','','','','','','Gold Coast','','','','Queensland','','Australia','','','',-28.017260,153.425705,'','Default location','office','system',NOW())";
                    $query = $this->db->query($sql);
                }
            }

            # initialise our $sql array
            unset($sql);
            $sql = array();

            # additional field
            if (!$this->db->field_exists('org_id', 'additional_field')) {
                $sql[] = "ALTER TABLE `additional_field` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`";
            } else {
                $sql[] = "ALTER TABLE `additional_field` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`";
                $sql[] = "UPDATE `additional_field` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `additional_field` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            if (!$this->db->field_exists('edited_by', 'additional_field')) {
                $sql[] = "ALTER TABLE `additional_field` ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `placement`";
            }
            if (!$this->db->field_exists('edited_date', 'additional_field')) {
                $sql[] = "ALTER TABLE `additional_field` ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`";
            }
            if (!$this->db->field_exists('group_id', 'additional_field')) {
                $sql[] = "ALTER TABLE `additional_field` DROP `group_id`";
            }

            # attachment
            if ($this->db->field_exists('timestamp', 'attachment')) {
                $sql[] = "ALTER TABLE `attachment` CHANGE `timestamp` `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            }
            if (!$this->db->field_exists('edited_by', 'attachment')) {
                $sql[] = "ALTER TABLE `attachment` ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `filename`";
            }
            $sql[] = "UPDATE `attachment`, `oa_user` SET attachment.edited_by = oa_user.full_name WHERE attachment.user_id = oa_user.id";

            if (!$this->db->field_exists('user_id', 'attachment')) {
                $sql[] = "ALTER TABLE `attachment` DROP user_id";
            }

            # audit log
            $sql[] = "ALTER TABLE `audit_log` CHANGE `timestamp` `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # bios
            $sql[] = "ALTER TABLE `bios` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `bios` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # change log
            $sql[] = "ALTER TABLE `change_log` CHANGE `ack_time` `ack_time` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `change_log` CHANGE `timestamp` `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # chart
            if (!$this->db->field_exists('org_id', 'chart')) {
                $sql[] = "ALTER TABLE `chart` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `what`";
            } else {
                $sql[] = "ALTER TABLE `chart` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `what`";
                $sql[] = "UPDATE `chart` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `chart` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            $sql[] = "ALTER TABLE `chart` CHANGE `when` `when` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # cluster
            if (!$this->db->field_exists('org_id', 'cluster')) {
                $sql[] = "ALTER TABLE `cluster` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `description`";
            } else {
                $sql[] = "ALTER TABLE `cluster` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `description`";
                $sql[] = "UPDATE `cluster` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `cluster` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            $sql[] = "ALTER TABLE `cluster` CHANGE `edited_date` `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # configuration
            $sql[] = "DROP TABLE IF EXISTS `configuration`";
            $sql[] = "CREATE TABLE `configuration` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `name` varchar(45) NOT NULL DEFAULT '',
              `value` varchar(250) NOT NULL DEFAULT '',
              `editable` varchar(1) NOT NULL DEFAULT 'n',
              `edited_by`varchar(100) NOT NULL DEFAULT '',
              `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
              `description` varchar(200) NOT NULL DEFAULT '',
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $sql[] = "INSERT INTO `configuration` (SELECT NULL, config_name, config_value, config_editable, 'system', NOW(), config_description FROM oa_config)";

            $sql[] = "DELETE FROM `configuration` WHERE `name` = 'log_style'";
            $sql[] = "DELETE FROM `configuration` WHERE `name` LIKE 'log_retain_level%'";

            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_0','180','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 0.')";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_1','180','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 1.')";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_2','180','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 2.')";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_3','180','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 3.')";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_4','180','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 4.')";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_5','90','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 5.')";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_6','30','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 6.')";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'log_retain_level_7','7','y','system',NOW(),'Tells Open-AudIT how many days to keep logs with severity 7.')";

            # credential
            $sql[] = "ALTER TABLE `credential` CHANGE `edited_date` `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # credentials
            if (!$this->db->field_exists('org_id', 'credentials')) {
                $sql[] = "ALTER TABLE `credentials` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `credentials`";
            } else {
                $sql[] = "ALTER TABLE `credentials` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `credentials`";
                $sql[] = "UPDATE `credentials` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `credentials` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            $sql[] = "ALTER TABLE `credentials` CHANGE `edited_date` `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # discoveries
            $sql[] = "DROP TABLE IF EXISTS discoveries";
            $sql[] = "CREATE TABLE `discoveries` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `name` varchar(100) NOT NULL DEFAULT '',
              `org_id` int(10) unsigned NOT NULL DEFAULT '1',
              `description` varchar(100) NOT NULL DEFAULT '',
              `type` varchar(100) NOT NULL DEFAULT '',
              `devices_assigned_to_org` int(10) unsigned DEFAULT NULL,
              `devices_assigned_to_location` int(10) unsigned DEFAULT NULL,
              `network_address` varchar(100) NOT NULL DEFAULT '',
              `system_id` int(10) unsigned NOT NULL DEFAULT '0',
              `other` text NOT NULL,
              `device_count` int(10) unsigned NOT NULL DEFAULT '0',
              `discard` enum('y','n') NOT NULL DEFAULT 'n',
              `created_by` varchar(200) NOT NULL DEFAULT '',
              `created_on` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
              `last_run` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
              `complete` enum('y','n') NOT NULL DEFAULT 'n',
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            # discovery log
            $sql[] = "DROP TABLE IF EXISTS `discovery_log`";
            $sql[] = "CREATE TABLE `discovery_log` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `discovery_id` int(10) unsigned DEFAULT NULL,
              `system_id` int(10) unsigned DEFAULT NULL,
              `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
              `severity` int(1) unsigned NOT NULL DEFAULT '5',
              `severity_text` enum ('debug', 'info', 'notice', 'warning', 'error', 'critical', 'alert', 'emergency') NOT NULL DEFAULT 'notice',
              `pid` int(10) unsigned NOT NULL DEFAULT '0',
              `ip` varchar(45) NOT NULL DEFAULT '',
              `file` varchar(100) NOT NULL DEFAULT '',
              `function` varchar(100) NOT NULL DEFAULT '',
              `message` text NOT NULL,
              `command` text NOT NULL,
              `command_status` varchar(100) NOT NULL DEFAULT '',
              `command_time_to_execute` decimal(12,6) NOT NULL,
              `command_output` text NOT NULL,
              PRIMARY KEY (`id`),
              KEY `system_id` (`system_id`),
              KEY `pid` (`pid`),
              CONSTRAINT `discovery_log_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            # disk
            $sql[] = "ALTER TABLE `disk` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `disk` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # dns
            $sql[] = "ALTER TABLE `dns` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `dns` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # edit log
            $sql[] = "ALTER TABLE `edit_log` CHANGE `timestamp` `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # file
            $sql[] = "ALTER TABLE `file` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `file` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # files
            if (!$this->db->field_exists('org_id', 'files')) {
                $sql[] = "ALTER TABLE `files` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`";
            } else {
                $sql[] = "ALTER TABLE `files` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`";
                $sql[] = "UPDATE `files` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `files` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            $sql[] = "ALTER TABLE `files` CHANGE `edited_date` `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # graph
            if (!$this->db->field_exists('org_id', 'graph')) {
                $sql[] = "ALTER TABLE `graph` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`";
            } else {
                $sql[] = "ALTER TABLE `graph` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`";
                $sql[] = "UPDATE `graph` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `graph` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            $sql[] = "ALTER TABLE `graph` CHANGE `timestamp` `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # groups
            $sql[] = "DROP TABLE IF EXISTS `groups`";
            $sql[] = "CREATE TABLE `groups` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `org_id` int(10) unsigned NOT NULL DEFAULT '1',
              `name` varchar(100) NOT NULL DEFAULT '',
              `description` text NOT NULL,
              `sql` text NOT NULL,
              `link` text NOT NULL,
              `expose` enum('y','n') NOT NULL DEFAULT 'y',
              `edited_by` varchar(200) NOT NULL DEFAULT '',
              `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"All Devices\", \"All the devices a user is authorised to view.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Apple Computers\", \"Devices with type = computer and os_family like OSX.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND (os_family LIKE '%osx' OR os_family LIKE '%macos%')\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Centos Computers\", \"Devices with type = computer and os_family like Centos.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_family LIKE 'centos'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Computers\", \"Devices with type = computer.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Debian Computers\", \"Devices with type = computer and os_family like Debian.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_family LIKE 'debian'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Linux Computers\", \"Devices with type = computer and os_group like Linux.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_group LIKE 'linux'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Open-AudIT Enterprise Managed Devices\", \"Devices Managed by Open-AudIT Enterprise.\", \"SELECT distinct(system.id) FROM system WHERE @filter AND system.status = 'production' and oae_manage = 'y'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Printers\", \"Devices with type = printer.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'printer'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Public IP Devices\", \"Devices with a public IP address and a status of production.\", \"SELECT distinct(system.id) FROM system LEFT JOIN ip ON (ip.system_id = system.id AND ip.current = 'y') WHERE @filter AND ((( ip.ip > '000.000.000.000' AND ip.ip < '010.000.000.000' ) OR ( ip.ip > '010.255.255.255' AND ip.ip < '169.254.0.0' ) OR ( ip.ip > '169.254.255.255' AND ip.ip < '172.016.000.000' ) OR ( ip.ip > '172.31.255.255' AND ip.ip < '192.168.000.000' ) OR ip.ip > '192.168.255.255' ) OR ( ( system.ip > '000.000.000.000' AND system.ip < '010.000.000.000' ) OR ( system.ip > '010.255.255.255' AND system.ip < '169.254.0.0' ) OR ( system.ip > '169.254.255.255' AND system.ip < '172.016.000.000' ) OR ( system.ip > '172.31.255.255' AND system.ip < '192.168.000.000' ) OR system.ip > '192.168.255.255' )) AND system.status = 'production'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"RedHat Computers\", \"Devices with type = computer and os_family like RedHat.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_family LIKE 'redhat'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Routers\", \"Devices with type = router.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'router'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Switches\", \"Devices with type = switch.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'switch'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Virtual Hosts\", \"Devices with class = hypervisor.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.class = 'hypervisor'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Windows Computers\", \"Devices with type = computer and os_group like Windows.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_group LIKE 'windows'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Windows Servers\", \"Devices with type = computer and os_name like Windows Server.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_name LIKE '%windows%server%'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO groups VALUES(NULL, 1, \"Windows Workstations\", \"Devices with type = computer and os_name like Windows and os_name not like Server.\", \"SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND system.os_name LIKE '%windows%' AND system.os_name NOT LIKE '%server%')\", \"\", \"y\", \"system\", NOW())";



            # invoice
            if (!$this->db->field_exists('org_id', 'invoice')) {
                $sql[] = "ALTER TABLE `invoice` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`";
            } else {
                $sql[] = "ALTER TABLE `invoice` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`";
                $sql[] = "UPDATE `invoice` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `invoice` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            if (!$this->db->field_exists('edited_by', 'invoice')) {
                $sql[] = "ALTER TABLE `invoice` ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `filename`";
            }
            if (!$this->db->field_exists('edited_date', 'invoice')) {
                $sql[] = "ALTER TABLE `invoice` ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`";
            }

            #ip
            $sql[] = "ALTER TABLE `ip` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `ip` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # ldap groups
            $sql[] = "DROP TABLE IF EXISTS `ldap_groups`";
            $sql[] = "CREATE TABLE `ldap_groups` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `ldap_servers_id` int(10) unsigned NOT NULL DEFAULT '1',
              `name` varchar(200) NOT NULL DEFAULT '',
              `dn` text NOT NULL,
              `primary_token` varchar(200) NOT NULL DEFAULT '',
              `memberof` text NOT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            # ldap servers
            $sql[] = "DROP TABLE IF EXISTS `ldap_servers`";
            $sql[] = "CREATE TABLE `ldap_servers` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `name` varchar(200) NOT NULL DEFAULT '',
              `org_id` int(10) unsigned NOT NULL DEFAULT '1',
              `description` text NOT NULL,
              `lang` varchar(200) NOT NULL DEFAULT '',
              `host` varchar(200) NOT NULL DEFAULT '',
              `domain` varchar(200) NOT NULL DEFAULT '',
              `use_roles` enum('y','n') NOT NULL DEFAULT 'n',
              `refresh` int(10) unsigned NOT NULL DEFAULT '24',
              `refreshed` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
              `edited_by` varchar(200) NOT NULL DEFAULT '',
              `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            if (!empty($this->config->config['ad_domain']) and !empty($this->config->config['ad_server'])) {
                $sql[] = "INSERT INTO `ldap_servers` VALUES (NULL, 'Default Domain', 1, 'Migrated by system', 'en', '" . $this->config->config['ad_server'] . "', '" . $this->config->config['ad_domain'] . "', 'n', 'system', NOW())";
            }

            # licenses
            if (!$this->db->table_exists('licenses')) {
                $sql[] = "CREATE TABLE `licenses` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT,`org_id` int(10) unsigned NOT NULL DEFAULT '1',`invoice_id` int(10) unsigned NOT NULL DEFAULT '0',`invoice_item_id` int(10) unsigned NOT NULL DEFAULT '0',`name` varchar(200) NOT NULL DEFAULT '',`description` text NOT NULL,`match_string` text NOT NULL,`type` enum('','software','hardware','service','other') NOT NULL DEFAULT '',`edited_by` varchar(200) NOT NULL DEFAULT '',`edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            }
            if ($this->db->table_exists('oa_asset_select')) {
                if ($this->db->count_all('oa_asset_select') > 0) {
                    if ($this->db->count_all('licenses') == 0) {
                        $sql[] = "INSERT INTO licenses (SELECT NULL AS `id`, 1 AS `org_id`, 0 AS `invoice_id`, 0 AS `invoice_item_id`, `select_name` AS `name`, '' AS `description`, `select_name` AS `match_string`, 'software' AS `type`, 'system' AS `edited_by`, NOW() AS `edited_on` FROM oa_asset_select)";
                    }
                }
            }

            # log
            $sql[] = "ALTER TABLE `log` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `log` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # memory
            $sql[] = "ALTER TABLE `memory` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `memory` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # module
            $sql[] = "ALTER TABLE `module` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `module` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # monitor
            $sql[] = "ALTER TABLE `monitor` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `monitor` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # motherboard
            $sql[] = "ALTER TABLE `motherboard` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `motherboard` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # netstat
            $sql[] = "ALTER TABLE `netstat` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `netstat` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # network
            $sql[] = "ALTER TABLE `network` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `network` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # networks
            if (!$this->db->field_exists('org_id', 'networks')) {
                $sql[] = "ALTER TABLE `networks` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`";
            } else {
                $sql[] = "ALTER TABLE `networks` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`";
                $sql[] = "UPDATE `networks` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `networks` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            $sql[] = "ALTER TABLE `networks` CHANGE `edited_date` `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # nmap
            $sql[] = "ALTER TABLE `nmap` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `nmap` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # notes
            if ($this->db->field_exists('user_id', 'notes')) {
                $sql[] = "ALTER TABLE `notes` DROP `user_id`";
            }
            if ($this->db->field_exists('timestamp', 'notes')) {
                $sql[] = "ALTER TABLE `notes` CHANGE `timestamp` `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            }
            if (!$this->db->field_exists('edited_by', 'notes')) {
                $sql[] = "ALTER TABLE `notes` ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `edited_date`";
            }

            # oa_change
            $sql[] = "ALTER TABLE `oa_change` CHANGE `planned_date` `planned_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `implemented_date` `implemented_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `oa_change` CHANGE `timestamp` `timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # oa_connection
            if (!$this->db->field_exists('org_id', 'oa_connection')) {
                $sql[] = "ALTER TABLE `oa_connection` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`";
            } else {
                $sql[] = "ALTER TABLE `oa_connection` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `id`";
                $sql[] = "UPDATE `oa_connection` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `oa_connection` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            if (!$this->db->field_exists('edited_by', 'oa_connection')) {
                $sql[] = "ALTER TABLE `oa_connection` ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `ip_address_internal_b`";
            }
            if (!$this->db->field_exists('edited_date', 'oa_connection')) {
                $sql[] = "ALTER TABLE `oa_connection` ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`";
            }
            $sql[] = "ALTER TABLE `oa_connection` CHANGE `edited_date` `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # oa_group
            if (!$this->db->field_exists('org_id', 'oa_group')) {
                $sql[] = "ALTER TABLE `oa_group` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `group_id`";
            } else {
                $sql[] = "ALTER TABLE `oa_group` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `group_id`";
                $sql[] = "UPDATE `oa_group` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `oa_group` SET `org_id` = 1 WHERE `org_id` = 0";
            }

            # oa_location
            if (!$this->db->field_exists('org_id', 'oa_location')) {
                $sql[] = "ALTER TABLE `oa_location` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`";
            } else {
                $sql[] = "ALTER TABLE `oa_location` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`";
                $sql[] = "UPDATE `oa_location` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `oa_location` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            if (!$this->db->field_exists('edited_by', 'oa_location')) {
                $sql[] = "ALTER TABLE `oa_location` ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `icon`";
            }
            if (!$this->db->field_exists('edited_date', 'oa_location')) {
                $sql[] = "ALTER TABLE `oa_location` ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`";
            }
            if ($this->db->field_exists('group_id', 'oa_location')) {
                $sql[] = "ALTER TABLE `oa_location` DROP `group_id`";
            }
            $sql[] = "ALTER TABLE oa_location CHANGE `type` `type` enum ('Airforce','Airport','Ambulance Station','Army','Cloud','Conference Center','Court House','Data Center','Depot','District','Doctors Office','Embassy','Factory','Fire Station','Guard','Head Office','High School','Hospital','Hotel','House','Library','Light House','Marina','Mobile Phone Tower','Motel','Navy','Newsagent','Nursing Home','Observatory','Office','Oil Rig','Police','Power Plant','Power Substation','Prison','Radio Station','Regional','Resort','Retail','School','Security','Stadium','Train Station','Travel Agency','TV Station','University','Warehouse','Workshop') NOT NULL DEFAULT 'Office' AFTER `org_id`";
            $sql[] = "ALTER TABLE oa_connection CHANGE `location_id_a` `location_id_a` int(10) unsigned NOT NULL DEFAULT '1'";
            $sql[] = "ALTER TABLE oa_connection CHANGE `location_id_b` `location_id_b` int(10) unsigned NOT NULL DEFAULT '1'";

            # oa_org
            if (!$this->db->field_exists('edited_by', 'oa_org')) {
                $sql[] = "ALTER TABLE `oa_org` ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `comments`";
            }
            if (!$this->db->field_exists('edited_date', 'oa_org')) {
                $sql[] = "ALTER TABLE `oa_org` ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`";
            }
            if ($this->db->field_exists('group_id', 'oa_org')) {
                $sql[] = "ALTER TABLE `oa_org` DROP `group_id`";
            }
            if (!$this->db->field_exists('ad_group', 'oa_org')) {
                $sql[] = "ALTER TABLE `oa_org` ADD `ad_group` varchar(100) NOT NULL DEFAULT '' AFTER `comments`";
            }
            $sql[] = "ALTER TABLE `oa_org` CHANGE `parent_id` `parent_id` int(10) unsigned DEFAULT '1'";
            $sql[] = "UPDATE oa_org SET ad_group = CONCAT('open-audit_orgs_', LOWER(REPLACE(`name`, ' ', '_')))";

            # oa_report
            if (!$this->db->field_exists('org_id', 'oa_report')) {
                $sql[] = "ALTER TABLE `oa_report` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `report_id`";
            } else {
                $sql[] = "ALTER TABLE `oa_report` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `report_id`";
                $sql[] = "UPDATE `oa_report` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `oa_report` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            if (!$this->db->field_exists('edited_by', 'oa_report')) {
                $sql[] = "ALTER TABLE `oa_report` ADD `edited_by` varchar(200) NOT NULL DEFAULT '' AFTER `report_sort_column`";
            }
            if (!$this->db->field_exists('edited_date', 'oa_report')) {
                $sql[] = "ALTER TABLE `oa_report` ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' AFTER `edited_by`";
            }

            # oa_temp
            $sql[] = "ALTER TABLE `oa_temp` CHANGE `temp_timestamp` `temp_timestamp` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # oa_user
            if (!$this->db->field_exists('org_id', 'oa_user')) {
                $sql[] = "ALTER TABLE `oa_user` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`";
            } else {
                $sql[] = "ALTER TABLE `oa_user` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`";
                $sql[] = "UPDATE `oa_user` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `oa_user` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            if ($this->db->field_exists('permissions', 'oa_user')) {
                $sql[] = "ALTER TABLE oa_user DROP permissions";
            }
            if ($this->db->field_exists('sam', 'oa_user')) {
                $sql[] = "ALTER TABLE oa_user DROP sam";
            }
            if ($this->db->field_exists('admin', 'oa_user')) {
                $sql[] = "ALTER TABLE oa_user DROP admin";
            }
            if ($this->db->field_exists('display_count', 'oa_user')) {
                $sql[] = "ALTER TABLE oa_user DROP display_count";
            }
            if ($this->db->field_exists('theme', 'oa_user')) {
                $sql[] = "ALTER TABLE oa_user DROP theme";
            }
            if (!$this->db->field_exists('roles', 'oa_user')) {
                $sql[] = "ALTER TABLE oa_user ADD roles text NOT NULL default '' AFTER email";
            }
            if (!$this->db->field_exists('orgs', 'oa_user')) {
                $sql[] = "ALTER TABLE oa_user ADD orgs text NOT NULL default '' AFTER roles";
            }
            if (!$this->db->field_exists('ldap', 'oa_user')) {
                $sql[] = "ALTER TABLE oa_user ADD ldap text NOT NULL after active";
            }
            if (!$this->db->field_exists('edited_by', 'oa_user')) {
                $sql[] = "ALTER TABLE oa_user ADD `edited_by` varchar(200) NOT NULL DEFAULT '' after active";
            }
            if (!$this->db->field_exists('edited_date', 'oa_user')) {
                $sql[] = "ALTER TABLE oa_user ADD `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            }
            $sql[] = "UPDATE oa_user SET roles = '[\"admin\",\"org_admin\"]' WHERE name IN ('admin', 'nmis', 'open-audit_enterprise')";
            $sql[] = "UPDATE oa_user SET roles = '[\"user\"]' WHERE name NOT IN ('admin', 'nmis', 'open-audit_enterprise')";
            $sql[] = "UPDATE oa_user SET orgs = '[1]'";

            # optical
            $sql[] = "ALTER TABLE `optical` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `optical` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # pagefile
            $sql[] = "ALTER TABLE `pagefile` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `pagefile` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # partition
            $sql[] = "ALTER TABLE `partition` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `partition` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # print_queue
            $sql[] = "ALTER TABLE `print_queue` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `print_queue` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # processor
            $sql[] = "ALTER TABLE `processor` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `processor` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # queries
            $sql[] = "DROP TABLE IF EXISTS `queries`";
            $sql[] = "CREATE TABLE `queries` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `org_id` int(10) unsigned NOT NULL DEFAULT '1',
              `name` varchar(100) NOT NULL DEFAULT '',
              `description` text NOT NULL,
              `sql` text NOT NULL,
              `link` text NOT NULL,
              `expose` enum('y','n') NOT NULL DEFAULT 'y',
              `edited_by` varchar(200) NOT NULL DEFAULT '',
              `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Audit Dates\", \"The first and last times a device was audited.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_name AS `system.os_name`, system.first_seen AS `system.first_seen`, system.last_seen AS `system.last_seen`, GROUP_CONCAT(DISTINCT(audit_log.type) ORDER BY audit_log.type) AS `seen_by` FROM system LEFT JOIN audit_log ON (audit_log.system_id = system.id) WHERE @filter GROUP BY system.id\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Billing Report\", \"Name, last seen on and by, type, class, manufacturer, model, serial, user, location.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, oa_org.name AS `oa_org.name`, system.last_seen AS `system.last_seen`, system.last_seen_by AS `system.last_seen_by`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.class AS `system.class`, windows.user_name AS `windows.user_name`, oa_location.name AS `oa_location.name` FROM system LEFT JOIN oa_location ON (system.location_id = oa_location.id) LEFT JOIN windows ON (system.id = windows.system_id AND windows.current = 'y') LEFT JOIN oa_org ON (system.org_id = oa_org.id) WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Changes - Files\", \"Any changes in the table 'file'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table = 'files'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Changes - Hardware\", \"Any changes created in the tables 'bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'optical', 'partition', 'processor', 'network', 'scsi', 'sound' and 'video'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table in ('bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'optical', 'partition', 'processor', 'network', 'scsi', 'sound', 'video')\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Changes - New Devices\", \"Any changes in the table 'system'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table = 'system'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Changes - Settings\", \"Any changes in the tables 'dns', 'ip', 'log', netstat', 'pagefile', 'print_queue', 'route', 'task', 'user', 'user_group' and 'variable'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE @filter AND change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table in ('dns', 'ip', 'log', 'netstat', 'pagefile', 'print_queue', 'route', 'task', 'user', 'user_group', 'variable')\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Changes - Software\", \"Any changes in the tables 'service', 'server', 'server_item', 'software' and 'software_key'.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, change_log.timestamp AS `change_log.timestamp`, change_log.db_table AS `change_log.db_table`, change_log.db_action AS `change_log.db_action`, change_log.details AS `change_log.details`, change_log.id AS `change_log.id` FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE change_log.ack_time = '2001-01-01 00:00:00' AND change_log.db_table in ('service', 'server', 'server_item', 'software', 'software_key')\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Consumed IP Addresses\", \"The ip addresses used by a group.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_family AS `system.os_family`, system.description AS `system.description`, ip.ip as `ip.ip` FROM ip LEFT JOIN system ON (system.id = ip.system_id AND ip.current = 'y') WHERE @filter AND ip.ip IS NOT NULL AND ip.ip != '127.000.000.001' AND ip.ip != '' AND ip.ip != '0.0.0.0' AND ip.ip != '000.000.000.000' AND ip.version = '4' GROUP BY ip.id, ip.ip ORDER BY ip.ip\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Devices Without Credentials\", \"Device details - name, ip, last seen on and by for those devices only discovered by Nmap and have therefore not been audited.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, audit_log.timestamp AS `audit_log.timestamp`, audit_log.ip AS `audit_log.ip` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.id) WHERE @filter AND audit_log.system_id NOT IN (SELECT DISTINCT(audit_log.system_id) FROM audit_log WHERE type != 'nmap') GROUP BY system.id\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Disk Partition Use\", \"Partition details where partition free and used space aren't 0 and type isn't Volume or Network Drive and mount point isn't [SWAP].\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, partition.id AS `partition.id`, partition.hard_drive_index AS `partition.hard_drive_index`, partition.mount_point AS `partition.mount_point`, partition.mount_type as `partition.mount_type`, partition.size AS `partition.size`, partition.used AS `partition.used`, partition.free AS `partition.free`, ROUND(((partition.free / partition.size) * 100), 0) AS percent_free, partition.name AS `partition.name` FROM system INNER JOIN `partition` ON (partition.system_id = system.id AND partition.current = 'y') WHERE @filter AND partition.used > 0 AND partition.free > 0 AND LOWER(partition.type) != 'volume' AND LOWER(partition.type) != 'network drive' AND LOWER(partition.mount_point) != '[swap]' ORDER BY system.name, partition.id\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Export Details\", \"Icon, type, name, first seen on, last seen on, last seen by, manufacturer, model, serial, owner, organisation, location, operating system.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.fqdn AS `system.fqdn`, system.serial AS `system.serial`, system.class AS `system.class`, system.function AS `system.function`, system.owner AS `system.owner`, system.asset_number AS `system.asset_number` FROM system WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Failed Audits\", \"Name, ip address, audit time, audit stage.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, audit_log.timestamp AS `audit_log.timestamp`, audit_log.debug AS `audit_log.debug` FROM system LEFT JOIN audit_log ON (system.id = audit_log.system_id) WHERE @filter AND audit_log.debug > ''\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Hardware - Device\", \"Icon, name, ip address, manufacturer, model, serial.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.asset_number AS `system.asset_number` FROM system WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Hardware - Memory and Processors\", \"Device details - name, ip, memory, total processor cores, processor speed, processor description.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, CAST(system.memory_count/1024 AS UNSIGNED) AS `system.memory_count`, processor.physical_count AS `processor.physical_count`, processor.core_count AS `processor.core_count`, processor.logical_count AS `processor.logical_count`, processor.speed AS `processor.speed`, processor.description AS `processor.description` FROM system INNER JOIN processor ON (system.id = processor.system_id AND processor.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Hardware - Workstations\", \"Device details - name, ip, manufacturer, model, serial, form factor, memory, processor.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.memory_count AS `system.memory_count`, system.form_factor AS `system.form_factor`, processor.description AS `processor.description` FROM system LEFT JOIN processor ON (processor.system_id = system.id AND processor.current = 'y') LEFT JOIN oa_location ON (system.location_id = oa_location.id) WHERE @filter AND system.type = 'computer' AND system.class != 'server' AND system.class != 'hypervisor' ORDER BY system.name\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Installed - Acrobat\", \"Adobe Acrobat installations (software name contains 'acrobat' or 'adobe reader').\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND (software.name LIKE '%acrobat%' OR software.name LIKE 'adobe reader%')) LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Installed - Antivirus\", \"Installed AntiVirus software (software name contains 'virus' or 'trend micro' or 'endpoint').\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version` FROM system LEFT JOIN software ON (software.system_id = system.id AND software.current = 'y' AND (software.name LIKE '%virus%' or software.name LIKE '%trend micro%' or software.name LIKE '%endpoint%')) LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter AND system.type = 'computer'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Installed - Flash\", \"Flash Player installations.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND software.name LIKE '%Flash Player%') LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Installed - MS FrontPage\", \"MS Frontpage installations (software name contains 'Microsoft Office Frontpage' or 'with Frontpage').\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND (software.name LIKE 'Microsoft Office Frontpage%' OR software.name LIKE '%with FrontPage')) LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Installed - MS Office\", \"MS Office installations.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND software.name LIKE 'Microsoft Office%') LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Installed - MS Project\", \"MS Project installations (software name contains 'Microsoft Project').\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND software.name LIKE '%Microsoft%Project%') LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Installed - MS Visio\", \"MS Visio installations (software name contains 'Microsoft Visio').\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.class AS `system.class`, system.os_family AS `system.os_family`, oa_org.name AS `oa_org.name`, windows.user_name AS `windows.user_name`, software.name as `software.name`, software.version AS `software.version`, software.id as `software.id` FROM software LEFT JOIN system ON (software.system_id = system.id AND software.current = 'y' AND software.name LIKE 'Microsoft%Visio%') LEFT JOIN oa_org ON (oa_org.id = system.org_id) LEFT JOIN windows ON (windows.system_id = system.id AND windows.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Interfaces Used or Available\", \"Query to determine if a device interface is available for use.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, network.alias as `network.alias`, network.net_index AS `network.net_index`, network.description as `network.description`, network.ifadminstatus as `network.ifadminstatus`, network.ip_enabled as `network.ip_enabled`, system.sysuptime AS `system.sysuptime`, (system.sysuptime - network.iflastchange) AS diff, floor((system.sysuptime - network.iflastchange) /60/60/24/100) as diff_days, IF((network.ifadminstatus = 'down') OR (network.ifadminstatus = 'up' AND (network.ip_enabled != 'up' AND network.ip_enabled != 'dormant') AND (((system.sysuptime - network.iflastchange) > 60480000) OR (system.sysuptime < network.iflastchange))), 'available', 'used') AS available FROM network LEFT JOIN system ON (network.system_id = system.id AND network.current = 'y') WHERE @filter AND network.ifadminstatus != ''\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Log Files\", \"Log file details.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, log.name as `log.name`, log.file_name AS `log.file_name`, log.file_size AS `log.file_size`, log.max_file_size AS `log.max_file_size`, log.overwrite AS `log.overwrite` FROM log LEFT JOIN system ON (system.id = log.system_id and log.current = 'y') WHERE @filter ORDER BY system.name\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Netstat Ports\", \"Detected Netstat ports.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_name AS `system.os_name`, netstat.protocol AS `netstat.protocol`, netstat.port AS `netstat.port`, netstat.ip AS `netstat.ip`, netstat.program AS `netstat.program` FROM system LEFT JOIN netstat ON (system.id = netstat.system_id AND netstat.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Printer Queues\", \"Printer details - manufacturer, model, status, capabilities, etc.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, print_queue.manufacturer AS `print_queue.manufacturer`, print_queue.model AS `print_queue.model`, print_queue.description AS `print_queue.description`, print_queue.driver AS `print_queue.driver`, print_queue.status AS `print_queue.status`, print_queue.port_name AS `print_queue.port_name`, print_queue.duplex AS `print_queue.duplex`, print_queue.color AS `print_queue.color`, print_queue.location AS `print_queue.location`, print_queue.type AS `print_queue.type`, print_queue.shared AS `print_queue.shared`, print_queue.shared_name AS `print_queue.shared_name`, print_queue.capabilities AS `print_queue.capabilities` FROM print_queue LEFT JOIN system ON (system.id = print_queue.system_id AND print_queue.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Servers - Database\", \"All databases.\", \"SELECT system.id AS `system.id`, system.name AS `system.name`, system.fqdn AS `system.fqdn`, system.os_family AS `system.os_family`, system.environment AS `system.environment`, server_item.parent_name AS `server_item.parent_name`, server_item.name AS `server_item.name`, server_item.instance AS `server_item.instance`, server_item.path AS `server_item.path`, server_item.log_status AS `server_item.log_status`, server_item.log_format AS `server_item.log_format`, server_item.log_rotation AS `server_item.log_rotation`, server_item.log_path AS `server_item.log_path` FROM system LEFT JOIN server_item ON (server_item.system_id = system.id and server_item.current = 'y') WHERE @filter AND server_item.type = 'database'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Servers - Websites\", \"All detected websites (IIS based).\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.os_family AS `system.os_family`, system.environment AS `system.environment`, server_item.parent_name AS `server_item.parent_name`, server_item.name AS `server_item.name`, server_item.description AS `server_item.description`, server_item.status AS `server_item.status`, server_item.instance AS `server_item.instance`, server_item.path AS `server_item.path`, server_item.log_status AS `server_item.log_status`, server_item.log_format AS `server_item.log_format`, server_item.log_rotation AS `server_item.log_rotation`, server_item.log_path AS `server_item.log_path` FROM system LEFT JOIN server_item ON (server_item.system_id = system.id and server_item.current = 'y') WHERE @filter AND server_item.type = 'website'\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Shares\", \"Shared directory details.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, share.id AS `share.id`, share.name AS `share.name`, share.description AS `share.description`, share.size AS `share.size`, share.path AS `share.path` FROM share LEFT JOIN system ON (system.id = share.system_id and share.current = 'y') WHERE @filter\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Users - Elevated\", \"Name, group name, group members.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM user_group LEFT JOIN system ON (user_group.system_id = system.id AND user_group.current = 'y') WHERE @filter AND (user_group.name = 'Administrators' OR user_group.name = 'Power Users' OR user_group.name = 'Remote Desktop Users' OR user_group.name = 'wheel' OR user_group.name = 'sudo') AND user_group.members > '' GROUP BY system.id, user_group.name ORDER BY system.name\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Users - Orphaned\", \"User accounts that no longer appear to be valid.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM system LEFT JOIN user_group ON (user_group.system_id = system.id AND user_group.current = 'y') WHERE @filter AND user_group.members LIKE '%@,%' AND user_group.members NOT LIKE 'Everyone@,' GROUP BY user_group.id ORDER BY system.name\", \"\", \"y\", \"system\", NOW())";

            $sql[] = "INSERT INTO queries VALUES (NULL, 1, \"Users - Standard\", \"Name, group name, group members.\", \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, user_group.members AS `user_group.members`, user_group.name AS `user_group.name` FROM user_group LEFT JOIN system ON (user_group.system_id = system.id AND user_group.current = 'y') WHERE @filter AND (user_group.name = 'Users' OR user_group.name = 'Guests') AND user_group.members > ''\", \"\", \"y\", \"system\", NOW())";

            # roles
            $sql[] = "DROP TABLE IF EXISTS roles";
            $sql[] = "CREATE TABLE `roles` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `name` varchar(100) NOT NULL DEFAULT '',
              `description` text NOT NULL,
              `permissions` text NOT NULL DEFAULT '',
              `ad_group` varchar(100) NOT NULL DEFAULT '',
              `edited_by` varchar(200) NOT NULL DEFAULT '',
              `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            $sql[] = "INSERT INTO roles VALUES (NULL, 'admin', 'This role can change global options.', '{\"configuration\":\"crud\",\"database\":\"crud\",\"groups\":\"crud\",\"ldap_servers\":\"crud\",\"logs\":\"crud\",\"nmis\":\"crud\",\"queries\":\"crud\",\"roles\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"summaries\":\"crud\"}', 'open-audit_roles_admin', 'system', NOW())";

            $sql[] = "INSERT INTO roles VALUES (NULL, 'org_admin', 'This role is used for administration of endpoints that contain an org_id.', '{\"charts\":\"crud\",\"connections\":\"crud\",\"credentials\":\"crud\",\"summaries\":\"crud\",\"devices\":\"crud\",\"discoveries\":\"crud\",\"fields\":\"crud\",\"files\":\"crud\",\"graph\":\"crud\",\"groups\":\"crud\",\"invoice\":\"crud\",\"licenses\":\"crud\",\"locations\":\"crud\",\"networks\":\"crud\",\"orgs\":\"crud\",\"queries\":\"crud\",\"scripts\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\",\"users\":\"crud\"}', 'open-audit_roles_org_admin', 'system', NOW())";

            $sql[] = "INSERT INTO roles VALUES (NULL, 'reporter', 'The role used for reading endpoints and creating reports above to the user role.', '{\"charts\":\"r\",\"connections\":\"r\",\"credentials\":\"r\",\"summaries\":\"r\",\"devices\":\"r\",\"fields\":\"r\",\"files\":\"r\",\"graph\":\"r\",\"invoice\":\"r\",\"licenses\":\"crud\",\"locations\":\"r\",\"networks\":\"r\",\"orgs\":\"r\",\"queries\":\"crud\",\"search\":\"crud\",\"sessions\":\"crud\"}', 'open-audit_roles_reporter', 'system', NOW())";

            $sql[] = "INSERT INTO roles VALUES (NULL, 'user', 'A standard role that can read all endpoints that contain an org_id.', '{\"charts\":\"r\",\"connections\":\"r\",\"credentials\":\"r\",\"summaries\":\"r\",\"devices\":\"r\",\"fields\":\"r\",\"files\":\"r\",\"graph\":\"r\",\"invoice\":\"r\",\"licenses\":\"r\",\"locations\":\"r\",\"networks\":\"r\",\"orgs\":\"r\",\"queries\":\"r\",\"search\":\"crud\",\"sessions\":\"crud\"}', 'open-audit_roles_user', 'system', NOW())";

            # route
            $sql[] = "ALTER TABLE `route` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `route` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # san
            $sql[] = "ALTER TABLE `san` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `san` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # scripts
            if (!$this->db->field_exists('org_id', 'scripts')) {
                $sql[] = "ALTER TABLE `scripts` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`";
            } else {
                $sql[] = "ALTER TABLE `scripts` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `name`";
                $sql[] = "UPDATE `scripts` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `scripts` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            $sql[] = "ALTER TABLE `scripts` CHANGE `edited_date` `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # scsi
            $sql[] = "ALTER TABLE `scsi` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `scsi` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # server
            $sql[] = "ALTER TABLE `server` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `server` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # server_item
            $sql[] = "ALTER TABLE `server_item` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `server_item` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # service
            $sql[] = "ALTER TABLE `service` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `service` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # share
            $sql[] = "ALTER TABLE `share` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `share` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # software
            $sql[] = "ALTER TABLE `software` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `software` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `software` CHANGE `installed_on` `installed_on` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # software_key
            $sql[] = "ALTER TABLE `software_key` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `software_key` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # sound
            $sql[] = "ALTER TABLE `sound` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `sound` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # summaries
            $sql[] = "DROP TABLE IF EXISTS summaries";
            $sql[] = "CREATE TABLE `summaries` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `name` varchar(100) NOT NULL DEFAULT '',
              `org_id` int(10) unsigned NOT NULL DEFAULT '1',
              `table` varchar(100) NOT NULL DEFAULT '',
              `column` varchar(100) NOT NULL DEFAULT '',
              `extra_columns` text NOT NULL,
              `edited_by` varchar(200) NOT NULL DEFAULT '',
              `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            $sql[] = "INSERT INTO summaries VALUES (NULL, 'Device Classes', 1, 'system', 'class', '', 'system', NOW())";
            $sql[] = "INSERT INTO summaries VALUES (NULL, 'Device Status', 1, 'system', 'status', '', 'system', NOW())";
            $sql[] = "INSERT INTO summaries VALUES (NULL, 'Device Types', 1, 'system', 'type', '', 'system', NOW())";
            $sql[] = "INSERT INTO summaries VALUES (NULL, 'DNS Domains', 1, 'system', 'dns_domain', '', 'system', NOW())";
            $sql[] = "INSERT INTO summaries VALUES (NULL, 'Form Factors', 1, 'system', 'form_factor', 'system.form_factor,system.class', 'system', NOW())";
            $sql[] = "INSERT INTO summaries VALUES (NULL, 'Manufacturers', 1, 'system', 'manufacturer', 'system.model', 'system', NOW())";
            $sql[] = "INSERT INTO summaries VALUES (NULL, 'Operating Systems', 1, 'system', 'os_family', '', 'system', NOW())";
            $sql[] = "INSERT INTO summaries VALUES (NULL, 'Server Types', 1, 'server', 'type', '', 'system', NOW())";
            $sql[] = "INSERT INTO summaries VALUES (NULL, 'Software', 1, 'software', 'name', 'software.name,software.version', 'system', NOW())";

            # system
            if (!$this->db->field_exists('org_id', 'system')) {
                $sql[] = "ALTER TABLE `system` ADD `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `owner`";
            } else {
                $sql[] = "ALTER TABLE `system` CHANGE `org_id` `org_id` int unsigned NOT NULL DEFAULT 1 AFTER `owner`";
                $sql[] = "UPDATE `system` SET `org_id` = $org_1_id WHERE `org_id` = 1";
                $sql[] = "UPDATE `system` SET `org_id` = 1 WHERE `org_id` = 0";
            }
            if (!$this->db->field_exists('location_id', 'system')) {
                $sql[] = "ALTER TABLE `system` ADD `location_id` int unsigned NOT NULL DEFAULT 1 AFTER `org_id`";
            } else {
                $sql[] = "ALTER TABLE `system` CHANGE `location_id` `location_id` int unsigned NOT NULL DEFAULT 1 AFTER `org_id`";
                $sql[] = "UPDATE `system` SET `location_id` = $location_1_id WHERE `location_id` = 1";
                $sql[] = "UPDATE `system` SET `location_id` = 1 WHERE `location_id` = 0";
            }
            $sql[] = "ALTER TABLE `system` CHANGE `os_installation_date` `os_installation_date` date NOT NULL DEFAULT '2000-01-01'";
            $sql[] = "ALTER TABLE `system` CHANGE `purchase_date` `purchase_date` date NOT NULL DEFAULT '2000-01-01'";
            $sql[] = "ALTER TABLE `system` CHANGE `lease_expiry_date` `lease_expiry_date` date NOT NULL DEFAULT '2000-01-01'";
            $sql[] = "ALTER TABLE `system` CHANGE `warranty_expires` `warranty_expires` date NOT NULL DEFAULT '2000-01-01'";
            $sql[] = "ALTER TABLE `system` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `system` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "UPDATE system SET manufacturer = 'VMware' WHERE manufacturer like 'VMware%'";
            $sql[] = "UPDATE system SET form_factor = 'Virtual' WHERE manufacturer = 'VMware' AND form_factor = 'Other'";

            # task
            $sql[] = "ALTER TABLE `task` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `task` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # user
            $sql[] = "ALTER TABLE `user` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `user` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # user_group
            $sql[] = "ALTER TABLE `user_group` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `user_group` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # variable
            $sql[] = "ALTER TABLE `variable` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `variable` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # video
            $sql[] = "ALTER TABLE `video` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `video` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # vm
            $sql[] = "ALTER TABLE `vm` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `vm` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # warranty
            $sql[] = "ALTER TABLE `warranty` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `warranty` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `warranty` CHANGE `start` `start` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `warranty` CHANGE `end` `end` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            # windows
            $sql[] = "ALTER TABLE `windows` CHANGE `first_seen` `first_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";
            $sql[] = "ALTER TABLE `windows` CHANGE `last_seen` `last_seen` datetime NOT NULL DEFAULT '2000-01-01 00:00:00'";

            $sql[] = "DELETE FROM `configuration` WHERE `name` = 'discovery_serial_match'";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'discovery_serial_match','y','y','system',NOW(),'Should we match a device based on its serial number.')";

            $sql[] = "UPDATE configuration SET value = '20160904' WHERE name = 'internal_version'";
            $sql[] = "UPDATE configuration SET value = '1.14' WHERE name = 'display_version'";

            $temp_debug = $this->db->db_debug;
            $this->db->db_debug = false;
            foreach ($sql as $this_query) {
                $log_details->message = $this_query;
                $log_details->status = 'running sql';
                stdlog($log_details);
                $this->data['output'] .= $this_query.";\n\n";
                $query = $this->db->query($this_query);
                if ($this->db->_error_message()) {
                    $this->data['output'] .= 'ERROR - ' . $this->db->_error_message() . "\n\n";
                    log_error('ERR-0023', $this->db->_error_message());
                }
            }
            $this->db->db_debug = $temp_debug;
            $this->data['output'] .= 'Upgrade database to 1.14 completed';
            $this->config->config['internal_version'] = '20160904';
            $this->config->config['display_version'] = '1.14';

            $sql_time = "SELECT NOW() as `timestamp`";
            $query = $this->db->query($sql_time);
            $result = $query->result();
            $this->data['output'] .= 'Completing 1.14 upgrade at ' . $result[0]->timestamp . "\n\n";

            $log_details->message = "Upgrade database to 1.14 completed\n\n";
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20161130') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.14.2

            $item_start = microtime(true);
            unset($sql);
            $sql = array();

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->severity = 5;
            $log_details->message = 'Upgrade database to 1.14.2 commenced';
            stdlog($log_details);

            if (!empty($this->data['output'])) {
                $this->data['output'] .= 'Commencing 1.14.2 upgrade at ' . $this->config->config['timestamp'] . "\n\n";
            } else {
                $this->data['output'] = 'Commencing 1.14.2 upgrade at ' . $this->config->config['timestamp'] . "\n\n";
            }

            # configuration
            $sql[] = "UPDATE `configuration` SET name = 'match_ip', description = 'Should we match a device based on its ip.' WHERE name = 'discovery_ip_match'";
            $sql[] = "UPDATE `configuration` SET name = 'match_mac', description = 'Should we match a device based on its mac address.' WHERE name = 'discovery_mac_match'";
            $sql[] = "UPDATE `configuration` SET name = 'match_hostname', description = 'Should we match a device based only on its hostname.' WHERE name = 'discovery_name_match'";
            $sql[] = "UPDATE `configuration` SET name = 'match_serial' WHERE name = 'discovery_serial_match'";

            $sql[] = "DELETE FROM `configuration` WHERE name = 'match_dbus'";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'match_dbus','n','y','system',NOW(),'Should we match a device based on its dbus id.')";

            $sql[] = "DELETE FROM `configuration` WHERE name = 'match_uuid'";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'match_uuid','y','y','system',NOW(),'Should we match a device based on its UUID.')";

            $sql[] = "DELETE FROM `configuration` WHERE name = 'match_hostname_dbus'";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'match_hostname_dbus','y','y','system',NOW(),'Should we match a device based on its hostname and dbus id.')";

            $sql[] = "DELETE FROM `configuration` WHERE name = 'match_hostname_uuid'";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'match_hostname_uuid','y','y','system',NOW(),'Should we match a device based on its hostname and UUID.')";

            $sql[] = "DELETE FROM `configuration` WHERE name = 'match_hostname_serial'";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'match_hostname_serial','y','y','system',NOW(),'Should we match a device based on its hostname and serial.')";

            $sql[] = "DELETE FROM `configuration` WHERE name = 'match_serial_type'";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'match_serial_type','y','y','system',NOW(),'Should we match a device based on its serial and type.')";

            $sql[] = "DELETE FROM `configuration` WHERE name = 'match_fqdn'";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'match_fqdn','y','y','system',NOW(),'Should we match a device based on its fqdn.')";

            $sql[] = "DELETE FROM `configuration` WHERE name = 'match_mac_vmware'";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'match_mac_vmware','n','y','system',NOW(),'Should we match a device based mac address even if it\'s a known likely duplicate from VMware.')";

            $sql[] = "DELETE FROM `configuration` WHERE name = 'homepage'";
            $sql[] = "INSERT INTO `configuration` VALUES (NULL, 'homepage','groups','y','system',NOW(),'Any links to the default page should be directed to this endpoint.')";

            $sql[] = "DELETE FROM `configuration` WHERE name = 'network_group_auto_create'";
            $sql[] = "DELETE FROM `configuration` WHERE name = 'network_group_homepage_limit'";
            $sql[] = "DELETE FROM `configuration` WHERE name = 'network_group_subnet'";
            $sql[] = "DELETE FROM `configuration` WHERE name = 'non_admin_search'";
            $sql[] = "DELETE FROM `configuration` WHERE name = 'show_passwords'";
            $sql[] = "DELETE FROM `configuration` WHERE name = 'show_snmp_community'";

            # connections
            if ($this->db->table_exists('oa_connection')) {
                $sql[] = "RENAME TABLE `oa_connection` TO `connections`";
            }

            # locations
            if ($this->db->table_exists('oa_location')) {
                $sql[] = "RENAME TABLE `oa_location` TO `locations`";
            }

            # queries
            $sql[] = "UPDATE `queries` SET `sql` = \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, oa_org.name AS `oa_org.name`, system.last_seen AS `system.last_seen`, system.last_seen_by AS `system.last_seen_by`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.class AS `system.class`, windows.user_name AS `windows.user_name`, locations.name AS `locations.name` FROM system LEFT JOIN locations ON (system.location_id = locations.id) LEFT JOIN windows ON (system.id = windows.system_id AND windows.current = 'y') LEFT JOIN oa_org ON (system.org_id = oa_org.id) WHERE @filter\" WHERE name = \"Billing Report\" ";

            $sql[] = "UPDATE `queries` SET `sql` = \"SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.memory_count AS `system.memory_count`, system.form_factor AS `system.form_factor`, processor.description AS `processor.description` FROM system LEFT JOIN processor ON (processor.system_id = system.id AND processor.current = 'y') WHERE @filter AND system.type = 'computer' AND system.class != 'server' AND system.class != 'hypervisor' ORDER BY system.name\" WHERE name = \"Hardware - Workstations\" ";

            # oa_group_column
            if ($this->db->table_exists('oa_group_column')) {
                $sql[] = "DROP TABLE `oa_group_column`";
            }

            # oa_group_sys
            if ($this->db->table_exists('oa_group_sys')) {
                $sql[] = "DROP TABLE `oa_group_sys`";
            }

            # oa_group_user
            if ($this->db->table_exists('oa_group_user')) {
                $sql[] = "DROP TABLE `oa_group_user`";
            }

            # oa_report_column
            if ($this->db->table_exists('oa_report_column')) {
                $sql[] = "DROP TABLE `oa_report_column`";
            }

            # task
            $sql[] = "ALTER TABLE `task` CHANGE `task` `task` TEXT NOT NULL DEFAULT ''";

            $sql[] = "UPDATE configuration SET value = '20161130' WHERE name = 'internal_version'";
            $sql[] = "UPDATE configuration SET value = '1.14.2' WHERE name = 'display_version'";

            $temp_debug = $this->db->db_debug;
            $this->db->db_debug = false;
            foreach ($sql as $this_query) {
                $log_details->message = $this_query;
                $log_details->status = 'running sql';
                stdlog($log_details);
                $this->data['output'] .= $this_query.";\n\n";
                $query = $this->db->query($this_query);
                if ($this->db->_error_message()) {
                    $this->data['output'] .= 'ERROR - ' . $this->db->_error_message() . "\n\n";
                    log_error('ERR-0023', $this->db->_error_message());
                }
            }
            $this->db->db_debug = $temp_debug;
            $this->data['output'] .= "Upgrade database to 1.14.2 completed\n\n";
            $this->config->config['internal_version'] = '20161130';
            $this->config->config['display_version'] = '1.14.2';

            $sql_time = "SELECT NOW() as `timestamp`";
            $query = $this->db->query($sql_time);
            $result = $query->result();
            $this->data['output'] .= 'Completing 1.14.2 upgrade at ' . $result[0]->timestamp . "\n\n";

            $log_details->message = "Upgrade database to 1.14.2 completed\n\n";
            stdlog($log_details);
            unset($log_details);
        }

        # refresh the icons
        // $this->load->model('m_system');
        // $this->m_system->reset_icons();

        // $this->load->model('m_configuration');
        // $this->m_configuration->load();
        $this->data['include'] = 'v_database_update';
        $this->data['heading'] = 'Database Upgrade';
        $this->data['success'] = "Database upgraded successfully. New database version is ".$this->config->config['display_version']." (".$this->config->config['internal_version'].")";
        $this->load->view('v_template', $this->data);
    }
}
// End of file darabase.php
// Location: ./controllers/database.php
