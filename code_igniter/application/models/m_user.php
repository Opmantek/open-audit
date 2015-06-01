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
class M_user extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_user($system_id = '0')
    {
        $sql = "SELECT * FROM sys_sw_user, system WHERE
				sys_sw_user.system_id = system.system_id AND
				sys_sw_user.timestamp = system.timestamp AND
				? = system.system_id";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_user($input, $details)
    {
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_sw_user ( system_id, user_name, user_caption, user_sid, user_domain,
					user_disabled, user_full_name, user_password_changeable, user_password_expires, user_password_required,
					user_status, user_type, timestamp, first_timestamp ) VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->user_name",
                    "$input->user_caption",
                    "$input->user_sid",
                    "$input->user_domain",
                    "$input->user_disabled",
                    str_replace(",,,", "", "$input->user_full_name"),
                    "$input->user_password_changeable",
                    "$input->user_password_expires",
                    "$input->user_password_required",
                    "$input->user_status",
                    "$input->user_type",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // check for user changes
            $sql = "SELECT sys_sw_user.user_id FROM sys_sw_user, system
				WHERE sys_sw_user.system_id = system.system_id AND system.system_id = ? AND
					system.man_status = 'production' AND  user_name = ? AND user_sid = ? AND
					( sys_sw_user.timestamp = ? OR sys_sw_user.timestamp= ? )
				LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->user_name",
                    "$input->user_sid",
                    "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the user exists - need to update it
                $sql = "UPDATE sys_sw_user SET timestamp = ? WHERE ? = user_id";
                $data = array("$details->timestamp", "$row->user_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the user does not exist - insert it
                $sql = "INSERT INTO sys_sw_user ( system_id, user_name, user_caption, user_sid, user_domain,
						user_disabled, user_full_name, user_password_changeable, user_password_expires, user_password_required,
						user_status, user_type, timestamp, first_timestamp ) VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->user_name",
                        "$input->user_caption",
                        "$input->user_sid",
                        "$input->user_domain",
                        "$input->user_disabled",
                        str_replace(",,,", "", "$input->user_full_name"),
                        "$input->user_password_changeable",
                        "$input->user_password_expires",
                        "$input->user_password_required",
                        "$input->user_status",
                        "$input->user_type",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    } // end of function

    public function alert_user($details)
    {
        // user no longer detected
        $sql = "SELECT user_id, user_name FROM sys_sw_user WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($result as $myrow) {
            $alert_details = 'user removed - '.$myrow->user_name;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_user', $myrow->processor_id, $alert_details, $details->timestamp);
        }

        // new user
        $sql = "SELECT user_id, user_name
			FROM
				sys_sw_user LEFT JOIN system ON (sys_sw_user.system_id = system.system_id)
			WHERE
				sys_sw_user.system_id = ? AND
				sys_sw_user.first_timestamp = ? AND
				sys_sw_user.first_timestamp = sys_sw_user.timestamp AND
				sys_sw_user.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $myrow) {
            $alert_details = 'user installed - '.$myrow->user_name;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_user', $myrow->processor_id, $alert_details, $details->timestamp);
        }
    }
}
