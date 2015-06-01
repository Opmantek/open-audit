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
class M_share extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_share($system_id)
    {
        $sql = "SELECT
				share_caption,
				share_name,
				share_path,
				share_size,
				share_users
			FROM
				sys_sw_share,
				system
			WHERE
				sys_sw_share.system_id = system.system_id AND
				sys_sw_share.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY
				share_id
			ORDER BY
				share_path";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_shares($input, $details)
    {
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_sw_share (	system_id, share_caption, share_name, share_path,
					share_size, share_users, timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->share_caption",
                    "$input->share_name",
                    "$input->share_path",
                    "$input->share_size",
                    "$input->share_users",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // need to check for shared directory changes
            $sql = "SELECT sys_sw_share.share_id
					FROM sys_sw_share, system
					WHERE 	sys_sw_share.system_id 	= system.system_id AND
							system.system_id		= ? AND
							system.man_status 	= 'production' AND
							share_name			= ? AND
							share_path			= ? AND
							( sys_sw_share.timestamp = ? OR
							sys_sw_share.timestamp 	= ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->share_name",
                    "$input->share_path",
                    "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the share exists - need to update its timestamp
                $sql = "UPDATE sys_sw_share SET share_size = ?, share_users = ?, timestamp = ? WHERE share_id = ?";
                $data = array("$input->share_size", "$input->share_users", "$details->timestamp", "$row->share_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the share does not exist - insert it
                $sql = "INSERT INTO sys_sw_share (	system_id, share_caption, share_name, share_path,
						share_size, share_users, timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->share_caption",
                        "$input->share_name",
                        "$input->share_path",
                        "$input->share_size",
                        "$input->share_users",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    }

    public function alert_share($details)
    {
        // share no longer detected
        $sql = "SELECT share_id, share_name, share_caption FROM sys_sw_share WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'share deleted - '.$myrow->share_name;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_share', $myrow->share_id, $alert_details, $details->timestamp);
        }

        // new share
        $sql = "SELECT share_id, share_name, share_caption
			FROM
				sys_sw_share LEFT JOIN system ON (sys_sw_share.system_id = system.system_id)
			WHERE
				sys_sw_share.system_id = ? AND
				sys_sw_share.first_timestamp = ? AND
				sys_sw_share.first_timestamp = sys_sw_share.timestamp AND
				sys_sw_share.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'share created - '.$myrow->share_name;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_share', $myrow->share_id, $alert_details, $details->timestamp);
        }
    }
}
