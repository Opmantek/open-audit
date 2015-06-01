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
class M_memory extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_memory($system_id)
    {
        $sql = "SELECT
				sys_hw_memory.*
			FROM
				sys_hw_memory,
				system
			WHERE
				sys_hw_memory.system_id = system.system_id AND
				sys_hw_memory.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY
				memory_id";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_memory($input, $details)
    {
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_hw_memory ( system_id, memory_bank,
					memory_type, memory_form_factor, memory_detail, memory_capacity,
					memory_speed, memory_tag, memory_serial, timestamp,
					first_timestamp ) VALUES ( ?,?,?,?,?,?,?,?,?,?,? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->bank",
                    "$input->type",
                    "$input->form_factor",
                    "$input->detail",
                    "$input->capacity",
                    "$input->speed",
                    "$input->tag",
                    "$input->serial",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // need to check for memory changes
            $sql = "SELECT sys_hw_memory.memory_id FROM sys_hw_memory, system WHERE
					sys_hw_memory.system_id 	= system.system_id AND
					system.system_id		= ? AND
					system.man_status 		= 'production' AND
					memory_bank 			= ? AND
					memory_capacity 		= ? AND
					memory_speed 			= ? AND
					memory_serial 			= ? AND
					( sys_hw_memory.timestamp = ? OR sys_hw_memory.timestamp = ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->bank",
                    "$input->capacity",
                    "$input->speed",
                    "$input->serial",
                    "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the memory exists - need to update its timestamp
                $sql = "UPDATE sys_hw_memory SET timestamp = ? WHERE memory_id = ?";
                $data = array("$details->timestamp", "$row->memory_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the memory does not exist - insert it
                $sql = "INSERT INTO sys_hw_memory
					( 	system_id,
						memory_bank,
						memory_type,
						memory_form_factor,
						memory_detail,
						memory_capacity,
						memory_speed,
						memory_tag,
						memory_serial,
						timestamp,
						first_timestamp ) VALUES ( ?,?,?,?,?,?,?,?,?,?,? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->bank",
                        "$input->type",
                        "$input->form_factor",
                        "$input->detail",
                        "$input->capacity",
                        "$input->speed",
                        "$input->tag",
                        "$input->serial",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    }

    public function alert_memory($details)
    {
        // memory no longer detected
        $sql = "SELECT memory_id, memory_bank, memory_capacity FROM sys_hw_memory WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'memory removed - '.$myrow->memory_bank.' bank, '.$myrow->memory_capacity.' Mb.';
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_memory', $myrow->memory_id, $alert_details, $details->timestamp);
        }

        // new memory
        $sql = "SELECT memory_id, memory_bank, memory_capacity
			FROM
				sys_hw_memory LEFT JOIN system ON (sys_hw_memory.system_id = system.system_id)
			WHERE
				sys_hw_memory.system_id = ? AND
				sys_hw_memory.first_timestamp = ? AND
				sys_hw_memory.first_timestamp = sys_hw_memory.timestamp AND
				sys_hw_memory.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'memory installed - '.$myrow->memory_bank.' bank, '.$myrow->memory_capacity.' Mb.';
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_memory', $myrow->memory_id, $alert_details, $details->timestamp);
        }
    }
}
