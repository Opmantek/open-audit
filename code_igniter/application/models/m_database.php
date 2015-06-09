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
class M_database extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_db($system_id)
    {
        $sql = "SELECT sys_sw_database.* FROM sys_sw_database, system
			WHERE sys_sw_database.system_id = system.system_id AND sys_sw_database.timestamp = system.timestamp AND system.system_id = ?
			GROUP BY db_id";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_database($input, $details)
    {
        // find the version string, based on the version integer.
        $version_string = "unknown";

        // SQL 2014
        if (mb_strpos($input->db_version, "12.00.4050") === 0 or mb_strpos($input->db_version, "12.0.4050") === 0) {
            $version_string = "SQL Server 2014 Service Pack 1";
        }
        if (mb_strpos($input->db_version, "12.00.2000") === 0 or mb_strpos($input->db_version, "12.0.2000") === 0) {
            $version_string = "SQL Server 2014 RTM";
        }
        if (mb_strpos($input->db_version, "12.00.1524") === 0 or mb_strpos($input->db_version, "12.0.1524") === 0) {
            $version_string = "SQL Server 2014 Community Technology Preview 2 (CTP2)";
        }
        if (mb_strpos($input->db_version, "11.00.9120") === 0 or mb_strpos($input->db_version, "11.0.9120") === 0) {
            $version_string = "SQL Server 2014 Community Technology Preview 1 (CTP1)";
        }

        // SQL 2012
        if (mb_strpos($input->db_version, "11.00.5058") === 0 or mb_strpos($input->db_version, "11.0.5058") === 0 or mb_strpos($input->db_version, "11.2.5058.0") === 0) {
            $version_string = "SQL Server 2012 Service Pack 2";
        }
        if (mb_strpos($input->db_version, "11.00.3000") === 0 or mb_strpos($input->db_version, "11.0.3000") === 0) {
            $version_string = "SQL Server 2012 Service Pack 1";
        }
        if (mb_strpos($input->db_version, "11.00.2100") === 0 or mb_strpos($input->db_version, "11.0.2100") === 0) {
            $version_string = "SQL Server 2012 RTM";
        }

        // SQL 2008 r2
        if (mb_strpos($input->db_version, "10.50.6000") === 0 or mb_strpos($input->db_version, "10.53.6000") === 0) {
            $version_string = "SQL Server 2008 R2 Service Pack 3";
        }
        if (mb_strpos($input->db_version, "10.50.4000") === 0 or mb_strpos($input->db_version, "10.52.4000") === 0) {
            $version_string = "SQL Server 2008 R2 Service Pack 2";
        }
        if (mb_strpos($input->db_version, "10.50.2500") === 0 or mb_strpos($input->db_version, "10.51.2500") === 0) {
            $version_string = "SQL Server 2008 R2 Service Pack 1";
        }
        if (mb_strpos($input->db_version, "10.50.1600") === 0) {
            $version_string = "SQL Server 2008 R2 RTM";
        }

        // SQL 2008
        if (mb_strpos($input->db_version, "10.00.6000") === 0 or mb_strpos($input->db_version, "10.0.6000") === 0 or mb_strpos($input->db_version, "10.4.6000") === 0) {
            $version_string = "SQL Server 2008 Service Pack 4";
        }
        if (mb_strpos($input->db_version, "10.00.5500") === 0 or mb_strpos($input->db_version, "10.0.5500") === 0 or mb_strpos($input->db_version, "10.3.5500") === 0) {
            $version_string = "SQL Server 2008 Service Pack 3";
        }
        if (mb_strpos($input->db_version, "10.00.4000") === 0 or mb_strpos($input->db_version, "10.0.4000") === 0 or mb_strpos($input->db_version, "10.2.4000") === 0) {
            $version_string = "SQL Server 2008 Service Pack 2";
        }
        if (mb_strpos($input->db_version, "10.00.2531") === 0 or mb_strpos($input->db_version, "10.0.2531") === 0 or mb_strpos($input->db_version, "10.1.2531") === 0) {
            $version_string = "SQL Server 2008 Service Pack 1";
        }
        if (mb_strpos($input->db_version, "10.00.1600") === 0 or mb_strpos($input->db_version, "10.0.1600") === 0) {
            $version_string = "SQL Server 2008 RTM";
        }

        // SQL 2005
        if (mb_strpos($input->db_version, "9.00.5000") === 0 or mb_strpos($input->db_version, "9.0.5000") === 0) {
            $version_string = "SQL Server 2005 Service Pack 4";
        }
        if (mb_strpos($input->db_version, "9.00.4035") === 0 or mb_strpos($input->db_version, "9.0.4035") === 0) {
            $version_string = "SQL Server 2005 Service Pack 3";
        }
        if (mb_strpos($input->db_version, "9.00.3042") === 0 or mb_strpos($input->db_version, "9.0.3042") === 0) {
            $version_string = "SQL Server 2005 Service Pack 2";
        }
        if (mb_strpos($input->db_version, "9.00.2047") === 0 or mb_strpos($input->db_version, "9.0.2047") === 0) {
            $version_string = "SQL Server 2005 Service Pack 1";
        }
        if (mb_strpos($input->db_version, "9.00.1399") === 0 or mb_strpos($input->db_version, "9.0.1399") === 0) {
            $version_string = "SQL Server 2005 RTM";
        }

        // SQL 2000
        if (mb_strpos($input->db_version, "8.00.2039") === 0 or mb_strpos($input->db_version, "8.00.2305") === 0) {
            $version_string = "SQL Server 2000 Service Pack 4";
        }
        if (mb_strpos($input->db_version, "8.00.761") === 0) {
            $version_string = "SQL Server 2000 Service Pack 3a";
        }
        if (mb_strpos($input->db_version, "8.00.760") === 0) {
            $version_string = "SQL Server 2000 Service Pack 3";
        }
        if (mb_strpos($input->db_version, "8.00.534") === 0 or mb_strpos($input->db_version, "8.00.532") === 0) {
            $version_string = "SQL Server 2000 Service Pack 2";
        }
        if (mb_strpos($input->db_version, "8.00.384") === 0) {
            $version_string = "SQL Server 2000 Service Pack 1";
        }
        if (mb_strpos($input->db_version, "8.00.194") === 0) {
            $version_string = "SQL Server 2000 RTM";
        }

        // SQL 7
        if (mb_strpos($input->db_version, "7.00.1063") === 0 or mb_strpos($input->db_version, "7.00.1152") === 0) {
            $version_string = "SQL Server 7 Service Pack 4";
        }
        if (mb_strpos($input->db_version, "7.00.961") === 0) {
            $version_string = "SQL Server 7 Service Pack 3";
        }
        if (mb_strpos($input->db_version, "7.00.842") === 0) {
            $version_string = "SQL Server 7 Service Pack 2";
        }
        if (mb_strpos($input->db_version, "7.00.699") === 0) {
            $version_string = "SQL Server 7 Service Pack 1";
        }
        if (mb_strpos($input->db_version, "7.00.623") === 0) {
            $version_string = "SQL Server 7 RTM";
        }

        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_sw_database (system_id, db_type, db_version, db_version_string, db_edition, db_port, timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->db_type",
                    "$input->db_version",
                    "$version_string",
                    "$input->db_edition",
                    "$input->db_port",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // need to check for database changes
            $sql = "SELECT sys_sw_database.db_id FROM sys_sw_database, system WHERE sys_sw_database.system_id = system.system_id AND
						system.system_id = ? AND system.man_status = 'production' AND sys_sw_database.db_type = ? AND sys_sw_database.db_version = ? AND
						( sys_sw_database.timestamp = ? OR sys_sw_database.timestamp = ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->db_type",
                    "$input->db_version",
                    "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the database entry exists - need to update its timestamp
                $sql = "UPDATE sys_sw_database SET timestamp = ? , db_edition = ?, db_version_string = ? WHERE db_id = ?";
                $data = array("$details->timestamp", "$input->db_edition", "$version_string", "$row->db_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the database entry does not exist - insert it
                $sql = "INSERT INTO sys_sw_database (system_id, db_type, db_version, db_version_string, db_edition, db_port, timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->db_type",
                        "$input->db_version",
                        "$version_string",
                        "$input->db_edition",
                        "$input->db_port",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    }

    public function alert_database($details)
    {
        // database entry no longer detected
        $sql = "SELECT db_id, db_version FROM sys_sw_database WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'database service removed - '.$myrow->db_version;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_database', $myrow->db_id, $alert_details, $details->timestamp);
        }

        // new database
        $sql = "SELECT sys_sw_database.db_id, sys_sw_database.db_version
			FROM
				sys_sw_database LEFT JOIN system ON (sys_sw_database.system_id = system.system_id)
			WHERE
				sys_sw_database.system_id = ? AND
				sys_sw_database.first_timestamp = ? AND
				sys_sw_database.first_timestamp = sys_sw_database.timestamp AND
				sys_sw_database.first_timestamp != system.first_timestamp";

        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'database service detected - '.$myrow->db_version;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_database', $myrow->db_id, $alert_details, $details->timestamp);
        }
    }
}
