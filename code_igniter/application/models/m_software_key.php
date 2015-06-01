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
class M_software_key extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_key($system_id)
    {
        $sql = "SELECT
				DISTINCT(key_name),
				key_edition,
				key_release,
				key_text,
				sys_sw_software_key.first_timestamp
			FROM
				sys_sw_software_key,
				system
			WHERE
				sys_sw_software_key.system_id = system.system_id AND
				sys_sw_software_key.timestamp = system.timestamp AND
				system.system_id = ?
			ORDER BY
				key_name";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_software_key($input, $details)
    {
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_sw_software_key ( system_id, key_name, key_text,
					key_release, key_edition, timestamp, first_timestamp ) VALUES ( ?,?,?,?,?,?,? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->key_name",
                    "$input->key_text",
                    "$input->key_release",
                    "$input->key_edition",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // need to check for software changes
            $sql = "SELECT sys_sw_software_key.key_id
					FROM sys_sw_software_key, system
					WHERE sys_sw_software_key.system_id = system.system_id AND
						system.system_id				= ? AND
						system.man_status			 	= 'production' AND
						key_name 						= ? AND
						key_release 					= ? AND
						key_text						= ? AND
						key_edition						= ? AND
						( sys_sw_software_key.timestamp = ? OR
						sys_sw_software_key.timestamp 	= ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->key_name",
                    "$input->key_release",
                    "$input->key_text",
                    "$input->key_edition",
                    "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the software key exists - need to update its timestamp
                $sql = "UPDATE sys_sw_software_key SET timestamp = ? WHERE key_id = ?";
                $data = array("$details->timestamp", "$row->key_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the software key does not exist - insert it
                $sql = "INSERT INTO sys_sw_software_key ( system_id, key_name, key_text,
						key_release, key_edition, timestamp, first_timestamp ) VALUES ( ?,?,?,?,?,?,? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->key_name",
                        "$input->key_text",
                        "$input->key_release",
                        "$input->key_edition",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    } // end of function

    public function alert_software_key($details)
    {
        // software no longer detected
        $sql = "SELECT key_id, key_name, key_edition FROM sys_sw_software_key WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details =  'key removed - '.$myrow->key_name.' ('.$myrow->key_edition.')';
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_software_key', $myrow->key_id, $alert_details, $details->timestamp);
        }

        // new software
        $sql = "SELECT key_id, key_name, key_edition
			FROM
				sys_sw_software_key LEFT JOIN system ON (sys_sw_software_key.system_id = system.system_id)
			WHERE
				sys_sw_software_key.system_id = ? AND
				sys_sw_software_key.first_timestamp = ? AND
				sys_sw_software_key.first_timestamp = sys_sw_software_key.timestamp AND
				sys_sw_software_key.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'key installed - '.$myrow->key_name.' ('.$myrow->key_edition.')';
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_software_key', $myrow->key_id, $alert_details, $details->timestamp);
        }
    }
}
