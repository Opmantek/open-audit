<?php
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
 * @version 1.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_device extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function processResult($details, $section, $table, $match_columns = array())
    {
        // update the audit log
        $this->m_sys_man_audits->update_audit($details, "$table - start");

        if (count($match_columns == 0)) {
            if ((string)$table == 'sys_hw_bios') {
                $match_columns = array('bios_description', 'bios_manufacturer', 'bios_serial', 'bios_smversion', 'bios_version' );
            }
            if ((string)$table == 'sys_sw_database') {
                $match_columns = array('db_type', 'db_version');
            }
            if ((string)$table == 'sys_sw_database_details') {
                $match_columns = array('details_name', 'details_internal_id', 'details_instance');
            }
            if ((string)$table == 'sys_sw_dns') {
                $match_columns = array('dns_name', 'dns_full_name', 'dns_ip_address');
            }
            if ((string)$table == 'sys_sw_group') {
                $match_columns = array('group_name', 'group_sid');
            }
            if ((string)$table == 'sys_hw_hard_drive') {
                $match_columns = array('hard_drive_model', 'hard_drive_serial', 'hard_drive_index', 'hard_drive_size');
            }
            if ((string)$table == 'sys_hw_network_card_ip') {
                $match_columns = array(''); // TODO - revise this table
            }
            if ((string)$table == 'sys_sw_logfile') {
                $match_columns = array('log_name', 'log_file_name', 'log_overwrite');
            }
            if ((string)$table == 'sys_hw_memory') {
                $match_columns = array('memory_bank', 'memory_capacity', 'memory_speed', 'memory_serial ');
            }
            if ((string)$table == 'sys_hw_module') {
                $match_columns = array('');
            }
            if ((string)$table == 'sys_hw_monitor') {
                $match_columns = array('manufacturer', 'model', 'serial');
            }
            if ((string)$table == 'sys_hw_motherboard') {
                $match_columns = array('manufacturer', 'model', 'serial');
            }
            if ((string)$table == 'sys_sw_netstat') {
                $match_columns = array(''); // TODO - this is a special case, look at the model m_netstat
            }
            if ((string)$table == 'sys_hw_network_card') {
                if ($details->type == 'computer' and $details->os_group != 'VMware') {
                    $match_columns = array('net_mac_address');
                } elseif ($details->type == 'computer' and $details->os_group == 'VMware') {
                    $match_columns = array('net_mac_address', 'net_index', 'net_connection_id');
                } else {
                    $match_columns = array('net_mac_address', 'net_index');
                }
            }
            if ((string)$table == 'sys_hw_optical_drive') {
                $match_columns = array('optical_drive_model', 'optical_drive_mount_point');
            }
            if ((string)$table == 'sys_sw_pagefile') {
                $match_columns = array('pagefile_name', 'pagefile_initial_size', 'pagefile_max_size');
            }
            if ((string)$table == 'sys_hw_partition') {
                if ($details->os_family == 'IBM AIX') {
                    $match_columns = array('hard_drive_index', 'partition_mount_point', 'partition_size', 'partition_name');
                } else {
                    $match_columns = array('hard_drive_index', 'partition_mount_point', 'partition_size');
                }
            }
            if ((string)$table == 'sys_sw_print_queue') {
                $match_columns = array('system_key', 'printer_name', 'printer_port_name');
            }
            if ((string)$table == 'sys_hw_processor') {
                $match_columns = array('processor_description');
            }
            if ((string)$table == 'sys_sw_route') {
                $match_columns = array('destination', 'next_hop');
            }
            if ((string)$table == 'sys_hw_scsi_controller') {
                $match_columns = array('scsi_controller_manufacturer', 'scsi_controller_name', 'scsi_controller_device_id');
            }
            if ((string)$table == '') {
                $match_columns = array('');
            }
            if ((string)$table == '') {
                $match_columns = array('');
            }
            if ((string)$table == '') {
                $match_columns = array('');
            }
            if ((string)$table == '') {
                $match_columns = array('');
            }
            if ((string)$table == '') {
                $match_columns = array('');
            }
            if ((string)$table == '') {
                $match_columns = array('');
            }
            if ((string)$table == 'sys_sw_software') {
                $match_columns = array('software_name', 'software_version');
            }
            if ((string)$table == 'sys_sw_service') {
                $match_columns = array('service_name, service_status');
            }

        }

        if ($table == '' or count($match_columns == 0) or ! isset($details->system_id)) {
            // TODO probably should log something here
            $this->m_sys_man_audits->update_audit($details, "$table - failed 1");

            return;
        }

        // TODO - fix this. Just need to detect $table is a valid table name
        $found = 0;
        $result = $this->db->list_tables();
        foreach ($result as $key => $value) {
            if (strpos($value, $table) !== false) {
                $found = 1;
            }
        }
        if ($found == 0) {
            // TODO probably should log something here
            $this->m_sys_man_audits->update_audit($details, "$table - failed 2");

            return;
        }

        $sql = 'SELECT * FROM '.$table.' WHERE '.$table.'.current = "y" AND '.$table.'.system_id = ?';
        $data = array($details->system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($data->item as $data_xml) {
            $flag = 'insert';
            $match_count = 0;
            foreach ($result as $id => $data_db) {
                for ($i = 0; $i < count($match_columns); $i++) {
                    if ((string) $data_xml->$column[$i] == (string) $data_db->$column[$i]) {
                        $match_count ++;
                    }
                }
                if ($match_count == count($match_columns)-1) {
                    // we have a match - update
                    $flag = 'update';
                    $fields = $this->db->list_fields('$table');
                    foreach ($fields as $field) {
                        if ($data_db->$field == '' and $data_xml->$field != '') {
                            $data_db->$field = (string) $data_xml->$field;
                        }
                        $sql .= " $table.$field = ? , ";
                    }
                    $sql = substr($sql, 0, -2);
                    $data_db->timestamp = $details->timestamp;
                    $sql = "UPDATE $table SET $sql WHERE $table.id = '$data_db.id'";
                    $data = $this->db->list_fields('$table');
                    $query = $this->db->query($sql, $data);
                    unset($software_db);
                    // stop the loop
                    break;
                } else {
                    // no match - insert
                    // $flag stays unchanged
                }
            }
            if ($flag == 'insert') {
                // we did not get any matches to the array
                // insert a new row
                $data_xml->system_id = $details->system_id;
                $data_xml->first_timestamp = $details->timestamp;
                $data_xml->timestamp = $details->timestamp;
                $fields = get_object_vars($data_xml);
                $data = array();
                foreach ($field as $field) {
                    $set_fields .= " $field, ";
                    $set_values .= ' ?, ';
                    $data = $data_xml->$field;
                }
                $set_fields = substr($set_fields, 0, -2);
                $set_values = substr($set_values, 0, -2);
                $sql = "INSERT INTO $table ( $set_fields ) VALUES ( $set_values ) ";
                $query = $this->db->query($sql, $data);
            }
        }

        // get the total rows in the table that are current for the system_id
        unset($data);
        $sql = "SELECT count(*) as total FROM $table WHERE system_id = ? AND $table.current = 'y'";
        $data = array($details->system_id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        $total_current = $row->total;

        // get the total rows for the device
        unset($data);
        $sql = "SELECT count(*) as total FROM $table WHERE system_id = ?";
        $data = array($details->system_id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        $total_count = $row->total;

        if ($total_current = $total_count) {
            // we had no previous rows in this table - do not generate any alerts
        } else {
            // we had a count mismatch - totals not equal means not the first audit - generate alerts if required
            // test for item no longer detected
            $sql_select = "$table.id, ";
            foreach ($columns as $key => $value) {
                $sql_select .= " $table.$value, ";
            }
            $sql_select = substr($sql_select, 0, -2);

            $sql = "SELECT $sql_select FROM $table WHERE $table.system_id = ? and $table.timestamp = ?";
            $data = array("$details->system_id", "$details->original_timestamp");
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql, $data);
            foreach ($query->result() as $myrow) {
                $alert_details =  'item removed from $table - ';
                foreach ($columns as $column) {
                    $alert_details .= $column.' = '.$myrow->$column.', ';
                }
                $alert_details = substr($alert_details, 0, -2);
                $this->m_alerts->generate_alert($details->system_id, $table, $myrow->id, $alert_details, $details->timestamp);
            }
            // test for new items
            $sql = "SELECT $sql_select FROM $table WHERE $table.first_timestamp = $table.timestamp AND $table.system_id = ? AND $table.first_timestamp = ? ";
            $data = array("$details->system_id", "$details->timestamp");
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql, $data);
            foreach ($query->result() as $myrow) {
                $alert_details =  'item removed from $table - ';
                foreach ($columns as $column) {
                    $alert_details .= $column.' = '.$myrow->$column.', ';
                }
                $alert_details = substr($alert_details, 0, -2);
                $this->m_alerts->generate_alert($details->system_id, $table, $myrow->id, $alert_details, $details->timestamp);
            }
            // update the audit log
            $this->m_sys_man_audits->update_audit($details, "$table - end");
        }
    }
}
