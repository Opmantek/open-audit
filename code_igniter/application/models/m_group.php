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

// TODO: group members
class M_group extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_group($system_id)
    {
        $sql = "SELECT sys_sw_group.group_id, sys_sw_group.group_name, sys_sw_group.group_description,
				sys_sw_group.group_sid, sys_sw_group.group_members FROM sys_sw_group, system
				WHERE sys_sw_group.system_id = system.system_id AND sys_sw_group.timestamp = system.timestamp AND
				system.system_id = ? GROUP BY sys_sw_group.group_id";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_group($input, $details)
    {
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_sw_group ( system_id, group_name, group_description, group_sid, group_members, timestamp, first_timestamp ) VALUES ( ?,?,?,?,?,?,? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id", "$input->name", "$input->description", "$input->sid", "$input->group_members", "$details->timestamp", "$details->first_timestamp");
            $query = $this->db->query($sql, $data);
        } else {
            // need to check for group changes
            $sql = "SELECT sys_sw_group.group_id FROM sys_sw_group, system WHERE
					sys_sw_group.system_id 	= system.system_id AND system.system_id	= ? AND
					system.man_status 	= 'production' AND sys_sw_group.group_name = ? AND
					sys_sw_group.group_sid	= ? AND ( sys_sw_group.timestamp = ? OR sys_sw_group.timestamp = ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id", "$input->name", "$input->sid",
                    "$details->original_timestamp", "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the group exists - need to update its timestamp
                $sql = "UPDATE sys_sw_group SET timestamp = ?, group_members = ? WHERE group_id = ?";
                $data = array("$details->timestamp", "$input->group_members", "$row->group_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the group does not exist - insert it
                $sql = "INSERT INTO sys_sw_group ( system_id, group_name, group_description, group_sid, group_members, timestamp, first_timestamp ) VALUES ( ?,?,?,?,?,?,? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id", "$input->name", "$input->description", "$input->sid", "$input->group_members", "$details->timestamp", "$details->timestamp");
                $query = $this->db->query($sql, $data);
            }
        }
    }

    public function alert_group($details)
    {
        // group no longer detected
        $sql = "SELECT group_id, group_name FROM sys_sw_group WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'group removed - '.$myrow->group_name;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_group', $myrow->group_id, $alert_details, $details->timestamp);
        }

        // new group
        $sql = "SELECT group_id, group_name
			FROM
				sys_sw_group LEFT JOIN system ON (sys_sw_group.system_id = system.system_id)
			WHERE
				sys_sw_group.system_id = ? AND
				sys_sw_group.first_timestamp = ? AND
				sys_sw_group.first_timestamp = sys_sw_group.timestamp AND
				sys_sw_group.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'group installed - '.$myrow->group_name;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_group', $myrow->group_id, $alert_details, $details->timestamp);
        }
    }
}
