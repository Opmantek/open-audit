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
class M_processor extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_processor($system_id)
    {
        $sql = "SELECT * FROM sys_hw_processor, system WHERE sys_hw_processor.system_id = system.system_id AND sys_hw_processor.timestamp = system.timestamp AND system.system_id = ? LIMIT 1";
        #$sql = "SELECT id AS processor_id, count AS processor_count, cores AS processor_cores, logical AS processor_logical, description AS processor_description, manufacturer AS processor_manufacturer, speed AS processor_speed, architecture AS processor_architecture FROM sys_hw_processor WHERE system_id = ? AND current = 'y' LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_processor($input, $details)
    {
        # we need to do some cleaning here in case a description not formatted correctly gets through
        $input->processor_description = str_ireplace("(r)", "", $input->processor_description);
        $input->processor_description = str_ireplace("(tm)", "", $input->processor_description);
        $input->processor_description = preg_replace('/\s\s+/', ' ', $input->processor_description);

        if (! isset($input->processor_count)) {
            $input->processor_count = '';
        }
        if (! isset($input->processor_logical)) {
            $input->processor_logical = '';
        }
        if (! isset($input->processor_architecture)) {
            $input->processor_architecture = '';
        }

        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_hw_processor ( system_id, processor_count, processor_cores, processor_logical,
					processor_description, processor_speed, processor_manufacturer, processor_architecture,
					timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->processor_count",
                    "$input->processor_cores",
                    "$input->processor_logical",
                    "$input->processor_description",
                    "$input->processor_speed",
                    "$input->processor_manufacturer",
                    "$input->processor_architecture",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // check for processor changes
            $sql = "SELECT sys_hw_processor.processor_id
					FROM sys_hw_processor, system
					WHERE
						sys_hw_processor.system_id = system.system_id AND
						system.system_id = ? AND
						system.man_status = 'production' AND
						processor_description = ? AND
						( sys_hw_processor.timestamp = ? OR sys_hw_processor.timestamp = ?) LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id", "$input->processor_description", "$details->original_timestamp", "$details->timestamp");
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the processor exists - need to update it
                $sql = "UPDATE sys_hw_processor SET timestamp = ?, processor_description = ?, processor_count = ?, processor_cores = ?, processor_logical = ?, processor_architecture = ?  WHERE ? = processor_id";
                $data = array("$details->timestamp", "$input->processor_description", "$input->processor_count", "$input->processor_cores", "$input->processor_logical", "$input->processor_architecture", "$row->processor_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the processor does not exist - insert it
            $sql = "INSERT INTO sys_hw_processor ( system_id, processor_count, processor_cores, processor_logical,
					processor_description, processor_speed, processor_manufacturer, processor_architecture,
					timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->processor_count",
                        "$input->processor_cores",
                        "$input->processor_logical",
                        "$input->processor_description",
                        "$input->processor_speed",
                        "$input->processor_manufacturer",
                        "$input->processor_architecture",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    } // end of function

    public function alert_processor($details)
    {
        // new processor
        $sql = "SELECT processor_id, processor_description
			FROM
				sys_hw_processor LEFT JOIN system ON (sys_hw_processor.system_id = system.system_id)
			WHERE
				sys_hw_processor.system_id = ? AND
				sys_hw_processor.first_timestamp = ? AND
				sys_hw_processor.first_timestamp = sys_hw_processor.timestamp AND
				sys_hw_processor.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $myrow) {
            $alert_details = 'processor installed - '.$myrow->processor_description;
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_processor', $myrow->processor_id, $alert_details, $details->timestamp);
        }
    }
}
