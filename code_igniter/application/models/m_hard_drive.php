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
class M_hard_drive extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_hard_drive($system_id)
    {
        $sql = "SELECT sys_hw_hard_drive.* FROM sys_hw_hard_drive, system
			WHERE sys_hw_hard_drive.system_id = system.system_id AND sys_hw_hard_drive.timestamp = system.timestamp AND
			system.system_id = ? GROUP BY sys_hw_hard_drive.hard_drive_id ORDER BY sys_hw_hard_drive.hard_drive_index ";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_hard_drive($input, $details)
    {
        # A unique disk has the following:
        # model, serial, index, size

        # introduced hard drive firmware in 1.4
        if (!isset($input->hard_drive_firmware)) {
            $input->hard_drive_firmare = '';
        }

        # introduced hard drive model family in 1.5
        if (!isset($input->hard_drive_model_family)) {
            $input->hard_drive_model_family = '';
        }

        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_hw_hard_drive (	system_id, hard_drive_caption,
					hard_drive_index, hard_drive_interface_type, hard_drive_manufacturer,
					hard_drive_model, hard_drive_serial, hard_drive_size,
					hard_drive_device_id, hard_drive_scsi_logical_unit, hard_drive_status, hard_drive_firmware,
					hard_drive_model_family, timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id", "$input->hard_drive_caption", "$input->hard_drive_index",
                    mb_strtoupper($input->hard_drive_interface_type), "$input->hard_drive_manufacturer",
                    "$input->hard_drive_model", "$input->hard_drive_serial", "$input->hard_drive_size",
                    "$input->hard_drive_device_id", "$input->hard_drive_scsi_logical_unit",
                    "$input->hard_drive_status", "$input->hard_drive_firmware",
                    "$input->hard_drive_model_family", "$details->timestamp", "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // need to check for hard_drive changes

            // We altered the model result under Windows.
            // What used to return "VMware, VMware Virtual S SCSI Disk Device" now
            // returns "VMware Virtual Disk", hence when we check, we match on either string
            if ($input->hard_drive_model == 'VMware Virtual Disk') {
                $sql = "SELECT sys_hw_hard_drive.hard_drive_id FROM sys_hw_hard_drive, system WHERE
					sys_hw_hard_drive.system_id = system.system_id AND system.system_id = ? AND
					system.man_status = 'production' AND (hard_drive_model = ? or hard_drive_model = 'VMware, VMware Virtual S SCSI Disk Device') AND
					hard_drive_serial = ? AND hard_drive_index = ? AND
					hard_drive_size = ? AND ( sys_hw_hard_drive.timestamp = ? OR sys_hw_hard_drive.timestamp = ? )
				LIMIT 1";
            } else {
                $sql = "SELECT sys_hw_hard_drive.hard_drive_id FROM sys_hw_hard_drive, system WHERE
					sys_hw_hard_drive.system_id = system.system_id AND system.system_id = ? AND
					system.man_status = 'production' AND hard_drive_model = ? AND
					hard_drive_serial = ? AND hard_drive_index = ? AND
					hard_drive_size = ? AND ( sys_hw_hard_drive.timestamp = ? OR sys_hw_hard_drive.timestamp = ? )
				LIMIT 1";
            }
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id", "$input->hard_drive_model", "$input->hard_drive_serial",
                    "$input->hard_drive_index", "$input->hard_drive_size", "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the hard_drive exists - need to update its timestamp
                // we also update the -
                // model (as the VMware string changed, see above) and
                // manufacturer (as we altered the Windows audit, added VMware)
                // model family (introduced with linux disk auditing)
                $start = explode(' ', microtime());
                $sql = "UPDATE sys_hw_hard_drive SET timestamp = ?, hard_drive_status = ?, hard_drive_firmware = ?, hard_drive_model_family = ?, hard_drive_model = ?, hard_drive_manufacturer = ? WHERE hard_drive_id = ?";
                $data = array("$details->timestamp", "$input->hard_drive_status", "$input->hard_drive_firmware", "$input->hard_drive_model_family", "$input->hard_drive_model", "$input->hard_drive_manufacturer", "$row->hard_drive_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the hard_drive does not exist - insert it
                $sql = "INSERT INTO sys_hw_hard_drive (	system_id, hard_drive_caption,
						hard_drive_index, hard_drive_interface_type, hard_drive_manufacturer,
						hard_drive_model, hard_drive_serial, hard_drive_size,
						hard_drive_device_id, hard_drive_scsi_logical_unit, hard_drive_status, hard_drive_firmware,
						hard_drive_model_family, timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id", "$input->hard_drive_caption", "$input->hard_drive_index",
                        mb_strtoupper($input->hard_drive_interface_type), "$input->hard_drive_manufacturer",
                        "$input->hard_drive_model", "$input->hard_drive_serial", "$input->hard_drive_size",
                        "$input->hard_drive_device_id", "$input->hard_drive_scsi_logical_unit",
                        "$input->hard_drive_status", "$input->hard_drive_firmware",
                        "$input->hard_drive_model_family", "$details->timestamp", "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    } // end of function

    public function alert_hard_drive($details)
    {
        // hard_drive no longer detected - excluding USB attached drives
        $sql = "SELECT hard_drive_id, hard_drive_caption FROM sys_hw_hard_drive WHERE system_id = ? and timestamp = ? AND sys_hw_hard_drive.hard_drive_interface_type <> 'USB'";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);

        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'hard drive removed - '.$myrow->hard_drive_caption;
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_hard_drive', $myrow->hard_drive_id, $alert_details, $details->timestamp);
        }

        // new hard_drive - excluding USB attached drives
        $sql = "SELECT hard_drive_id, hard_drive_caption
			FROM
				sys_hw_hard_drive LEFT JOIN system ON (sys_hw_hard_drive.system_id = system.system_id)
			WHERE
				sys_hw_hard_drive.system_id = ? AND
				sys_hw_hard_drive.first_timestamp = ? AND
				sys_hw_hard_drive.first_timestamp = sys_hw_hard_drive.timestamp AND
				sys_hw_hard_drive.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);

        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'hard drive installed - '.$myrow->hard_drive_caption;
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_hard_drive', $myrow->hard_drive_id, $alert_details, $details->timestamp);
        }
    }
}
