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
class M_pagefile extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_pagefile($system_id)
    {
        $sql = "SELECT
				pagefile_name,
				pagefile_initial_size,
				pagefile_max_size,
				pagefile_size
			FROM
				sys_sw_pagefile,
				system
			WHERE
				sys_sw_pagefile.system_id = system.system_id AND
				sys_sw_pagefile.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY
				pagefile_id";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_pagefile($input, $details)
    {
        # check and set this value as it is new to the audit script
        if (!isset($input->size)) {
            $input->size = '';
        }
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_sw_pagefile (
					system_id,
					pagefile_name,
					pagefile_initial_size,
					pagefile_max_size,
					pagefile_size,
					timestamp,
					first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->file_name",
                    "$input->initial_size",
                    "$input->max_size",
                    "$input->size",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // need to check for pagefile changes
            $sql = "SELECT sys_sw_pagefile.pagefile_id FROM sys_sw_pagefile LEFT JOIN
					system ON (sys_sw_pagefile.system_id = system.system_id )
				WHERE
					system.system_id = ? AND
					pagefile_name = ? AND
					pagefile_initial_size = ? AND
					pagefile_max_size = ? AND
					( sys_sw_pagefile.timestamp = ? OR
					sys_sw_pagefile.timestamp 	= ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->file_name",
                    "$input->initial_size",
                    "$input->max_size",
                    "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the pagefile exists - need to update its timestamp
                $sql = "UPDATE sys_sw_pagefile SET timestamp = ?, pagefile_size = ? WHERE pagefile_id = ?";
                $data = array("$details->timestamp", "$input->size", "$row->pagefile_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the pagefile does not exist - insert it
                $sql = "INSERT INTO sys_sw_pagefile (
						system_id,
						pagefile_name,
						pagefile_initial_size,
						pagefile_max_size,
						pagefile_size,
						timestamp,
						first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->file_name",
                        "$input->initial_size",
                        "$input->max_size",
                        "$input->size",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    }

    public function alert_pagefile($details)
    {
        // pagefile no longer detected
        $sql = "SELECT pagefile_id, pagefile_name FROM sys_sw_pagefile WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'pagefile removed - '.$myrow->pagefile_name;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_pagefile', $myrow->pagefile_id, $alert_details, $details->timestamp);
        }

        // new pagefile
        $sql = "SELECT pagefile_id, pagefile_name
			FROM
				sys_sw_pagefile LEFT JOIN system ON (sys_sw_pagefile.system_id = system.system_id)
			WHERE
				sys_sw_pagefile.system_id = ? AND
				sys_sw_pagefile.first_timestamp = ? AND
				sys_sw_pagefile.first_timestamp = sys_sw_pagefile.timestamp AND
				sys_sw_pagefile.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'pagefile installed - '.$myrow->pagefile_name;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_pagefile', $myrow->pagefile_id, $alert_details, $details->timestamp);
        }
    }
}
