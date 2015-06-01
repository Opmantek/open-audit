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
class M_optical_drive extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_optical($system_id)
    {
        $sql = "SELECT
				optical_drive_id,
				optical_drive_model,
				optical_drive_caption,
				optical_drive_mount_point
			FROM
				sys_hw_optical_drive,
				system
			WHERE
				sys_hw_optical_drive.system_id = system.system_id AND
				sys_hw_optical_drive.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY
				optical_drive_id";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_optical_drives($input, $details)
    {
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_hw_optical_drive (	system_id,
					optical_drive_caption, optical_drive_model,
					optical_drive_device_id, optical_drive_mount_point,
					timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->optical_drive_caption",
                    "$input->optical_drive_model",
                    "$input->optical_drive_device_id",
                    "$input->optical_drive_mount_point",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // need to check for optical_drive changes
            $sql = "SELECT sys_hw_optical_drive.optical_drive_id
					FROM sys_hw_optical_drive, system
					WHERE 	sys_hw_optical_drive.system_id 	= system.system_id AND
							system.system_id				= ? AND
							system.man_status 				= 'production' AND
							optical_drive_model 			= ? AND
							optical_drive_mount_point 		= ? AND
							( sys_hw_optical_drive.timestamp = ? OR
							sys_hw_optical_drive.timestamp 	= ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->optical_drive_model",
                    "$input->optical_drive_mount_point",
                    "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the optical_drive exists - need to update its timestamp
                $sql = "UPDATE sys_hw_optical_drive SET timestamp = ? WHERE optical_drive_id = ?";
                $data = array("$details->timestamp", "$row->optical_drive_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the optical_drive does not exist - insert it
                $sql = "INSERT INTO sys_hw_optical_drive (	system_id,
						optical_drive_caption, optical_drive_model,
						optical_drive_device_id, optical_drive_mount_point,
						timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->optical_drive_caption",
                        "$input->optical_drive_model",
                        "$input->optical_drive_device_id",
                        "$input->optical_drive_mount_point",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    }

    public function alert_optical_drive($details)
    {
        // optical_drive no longer detected
        $sql = "SELECT optical_drive_id, optical_drive_model, optical_drive_mount_point FROM sys_hw_optical_drive WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'optical drive removed - '.$myrow->optical_drive_mount_point.' ('.$myrow->optical_drive_model.')';
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_optical_drive', $myrow->optical_drive_id, $alert_details, $details->timestamp);
        }

        // new optical_drive
        $sql = "SELECT optical_drive_id, optical_drive_model, optical_drive_mount_point
			FROM
				sys_hw_optical_drive LEFT JOIN system ON (sys_hw_optical_drive.system_id = system.system_id)
			WHERE
				sys_hw_optical_drive.system_id = ? AND
				sys_hw_optical_drive.first_timestamp = ? AND
				sys_hw_optical_drive.first_timestamp = sys_hw_optical_drive.timestamp AND
				sys_hw_optical_drive.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'optical drive installed - '.$myrow->optical_drive_mount_point.' ('.$myrow->optical_drive_model.')';
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_optical_drive', $myrow->optical_drive_id, $alert_details, $details->timestamp);
        }
    }
}
