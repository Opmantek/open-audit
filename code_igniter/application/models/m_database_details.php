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
 * @version 1.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_database_details extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_db_details($system_id)
    {
        $sql = "SELECT sys_sw_database_details.* FROM sys_sw_database_details, sys_sw_database, system WHERE
				sys_sw_database_details.db_id = sys_sw_database.db_id AND sys_sw_database.system_id = system.system_id AND
				sys_sw_database_details.timestamp = system.timestamp AND system.system_id = ? GROUP BY details_id";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function get_database_graph($system_id, $database_id, $days = 30)
    {
        $sql = "SELECT used, DATE(timestamp) AS timestamp FROM sys_hw_graphs_disk WHERE
				system_id = ? AND database_id = ? AND timestamp > adddate(current_date(), interval -".$days." day)
				GROUP BY DAY(timestamp) ORDER BY timestamp";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id", "$database_id");
        $query = $this->db->query($sql, $data);

        return ($query->result());
    }

    public function process_db_details($input, $details)
    {
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "SELECT db_id FROM sys_sw_database, system WHERE sys_sw_database.system_id = ? AND system.timestamp = ?";
            $data = array("$details->system_id", "$details->timestamp");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            // the database entry does not exist - insert it
            $sql = "INSERT INTO sys_sw_database_details (db_id, details_name, details_instance, details_internal_id, details_current_size,
					details_compatibility_mode, details_creation_date, details_filename, timestamp,first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$row->db_id",
                    "$input->details_name", "$input->details_instance", "$input->details_internal_id",
                    "$input->details_current_size", "$input->details_compatibility_mode", "$input->details_creation_date",
                    "$input->details_filename", "$details->timestamp", "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // need to check for database changes
            $sql = "SELECT sys_sw_database_details.details_id FROM sys_sw_database_details, sys_sw_database, system
					WHERE sys_sw_database_details.db_id = sys_sw_database.db_id AND sys_sw_database.system_id = system.system_id AND
						system.system_id = ? AND system.man_status = 'production' AND details_name = ? AND details_internal_id = ? AND
						details_instance = ? AND (sys_sw_database_details.timestamp = ? OR sys_sw_database_details.timestamp = ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->details_name",
                    "$input->details_internal_id",
                    "$input->details_instance",
                    "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the database entry exists - need to update its timestamp
                $sql = "UPDATE sys_sw_database_details SET timestamp = ? WHERE details_id = ?";
                $data = array("$details->timestamp", "$row->details_id");
                $query = $this->db->query($sql, $data);
            } else {
                $sql = "SELECT db_id FROM sys_sw_database, system WHERE sys_sw_database.system_id = ? AND system.timestamp = ?";
                $data = array("$details->system_id", "$details->timestamp");
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                // the database entry does not exist - insert it
                $sql = "INSERT INTO sys_sw_database_details (db_id, details_name, details_instance, details_internal_id, details_current_size,
						details_compatibility_mode, details_creation_date, details_filename, timestamp,first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$row->db_id",
                        "$input->details_name", "$input->details_instance", "$input->details_internal_id",
                        "$input->details_current_size", "$input->details_compatibility_mode", "$input->details_creation_date",
                        "$input->details_filename", "$details->timestamp", "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
        // we need to insert a row into the "graphs" table
        $sql = "INSERT INTO sys_hw_graphs_disk (system_id, database_id, graph_type, used) VALUES (?,?,?,?)";
        $data = array(  "$details->system_id", $this->db->insert_id(), "database", "$input->details_current_size");
        $query = $this->db->query($sql, $data);
    }

    public function alert_db_details($details)
    {
        // database entry no longer detected
        $sql = "SELECT details_id, details_name FROM sys_sw_database_details WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'database removed - '.$myrow->details_name.' ('.$myrow->details_id.')';
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_database_details', $myrow->details_id, $alert_details, $details->timestamp);
        }

        // new database
        $sql = "SELECT details_id, details_name FROM sys_sw_database_details WHERE system_id = ? and first_timestamp = timestamp and first_timestamp != ?";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'database detected - '.$myrow->db_name.' ('.$myrow->db_id.')';
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_database_details', $myrow->details_id, $alert_details, $details->timestamp);
        }
    }
}
