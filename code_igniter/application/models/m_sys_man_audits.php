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
class M_sys_man_audits extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_audits($system_id)
    {
        $sql = "SELECT
				sys_man_audits.*
			FROM
				sys_man_audits,
				system
			WHERE
				sys_man_audits.system_id = system.system_id AND
				system.system_id = ?
			GROUP BY
				system_audits_id";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function insert_audit($details)
    {
        // TODO: - create a variable for the username running the script_windows.vbs
        if (isset($details->last_seen_by)) {
            $inserted_via = $details->last_seen_by;
        } else {
            $inserted_via = 'audit';
        }

        if (! isset($details->last_seen_user) or is_null($details->last_seen_user)) {
            $inserted_user = '';
        } elseif (isset($this->user->user_full_name)) {
            $inserted_user = @$this->user->user_full_name;
        } else {
            $inserted_user = @$details->last_seen_user;
        }

        $timestamp = date('Y-m-d H:i:s');
        if (isset($details->last_seen)) {
            $timestamp = $details->last_seen;
        } elseif (isset($details->timestamp)) {
            $timestamp = $details->timestamp;
        }

        $sql = "INSERT INTO sys_man_audits ( system_id, system_audits_username, system_audits_type, system_audits_time, timestamp, system_audits_ip ) VALUES (?, ?, ?, ?, ?, ?)";
        $data = array("$details->system_id", "$inserted_user", "$inserted_via", "$timestamp", date('Y-m-d H:i:s'), "$details->audits_ip");
        $query = $this->db->query($sql, $data);
    }

    public function update_audit($details, $update)
    {
        $sql = "UPDATE sys_man_audits SET audit_debug = ? WHERE system_id = ? AND system_audits_time = ?";
        $data = array("$update", "$details->system_id", "$details->timestamp");
        $query = $this->db->query($sql, $data);
    }

    public function update_wmi_fails($input, $details)
    {
        $sql = "UPDATE sys_man_audits SET audit_wmi_fails = ? WHERE system_id = ? AND system_audits_time = ?";
        $data = array("$input->audit_wmi_fails", "$details->system_id", "$details->timestamp");
        $query = $this->db->query($sql, $data);
    }

    public function get_last_audit_date($system_id)
    {
        $sql = "SELECT system_audits_time FROM sys_man_audits WHERE system_id = ? AND system_audits_type = 'audit' ORDER BY system_audits_time LIMIT 1;";
        $data = array("$input->system_id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if (count($row) > 0) {
            return($row->system_audits_time);
        } else {
            return "";
        }
    }
}
