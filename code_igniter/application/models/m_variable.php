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
class M_variable extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_variable($system_id)
    {
        $sql = "SELECT
				sys_sw_variable.variable_id,
				sys_sw_variable.variable_name,
				sys_sw_variable.variable_value
			FROM
				sys_sw_variable,
				system
			WHERE
				sys_sw_variable.system_id = system.system_id AND
				sys_sw_variable.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY
				sys_sw_variable.variable_id";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_variable($input, $details)
    {
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_sw_variable
				( 	system_id,
					variable_name,
					variable_value,
					timestamp,
					first_timestamp ) VALUES ( ?,?,?,?,? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->variable_name",
                    "$input->variable_value",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // need to check for variable changes
            $sql = "SELECT
					sys_sw_variable.variable_id
				FROM
					sys_sw_variable,
					system
				WHERE
					sys_sw_variable.system_id 	= system.system_id AND
					system.system_id		= ? AND
					system.man_status 		= 'production' AND
					sys_sw_variable.variable_name 	= ? AND
					sys_sw_variable.variable_value	= ? AND
					( sys_sw_variable.timestamp = ? OR sys_sw_variable.timestamp = ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->variable_name",
                    "$input->variable_value",
                    "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the variable exists - need to update its timestamp
                $sql = "UPDATE sys_sw_variable SET timestamp = ? WHERE variable_id = ?";
                $data = array("$details->timestamp", "$row->variable_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the variable does not exist - insert it
                $sql = "INSERT INTO sys_sw_variable
					( 	system_id,
						variable_name,
						variable_value,
						timestamp,
						first_timestamp ) VALUES ( ?,?,?,?,? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->variable_name",
                        "$input->variable_value",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    }

    public function alert_variable($details)
    {
        // variable no longer detected
        $sql = "SELECT variable_id, variable_name, variable_value FROM sys_sw_variable WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'variable removed - '.$myrow->variable_name.' ('.$myrow->variable_value.')';
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_variable', $myrow->variable_id, $alert_details, $details->timestamp);
        }

        // new variable
        $sql = "SELECT variable_id, variable_name, variable_value
			FROM
				sys_sw_variable LEFT JOIN system ON (sys_sw_variable.system_id = system.system_id)
			WHERE
				sys_sw_variable.system_id = ? AND
				sys_sw_variable.first_timestamp = ? AND
				sys_sw_variable.first_timestamp = sys_sw_variable.timestamp AND
				sys_sw_variable.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'variable installed - '.$myrow->variable_name.' ('.$myrow->variable_value.')';
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_variable', $myrow->variable_id, $alert_details, $details->timestamp);
        }
    }
}
