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
class M_scsi_controller extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_scsi_controller($system_id)
    {
        $sql = "SELECT
				scsi_controller_id,
				scsi_controller_name,
				scsi_controller_manufacturer,
				scsi_controller_device_id,
				scsi_controller_type
			FROM
				sys_hw_scsi_controller,
				system
			WHERE
				sys_hw_scsi_controller.system_id = system.system_id AND
				sys_hw_scsi_controller.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY
				scsi_controller_id";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_scsi_controller($input, $details)
    {
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_hw_scsi_controller
				( 	system_id,
					scsi_controller_name,
					scsi_controller_manufacturer,
					scsi_controller_device_id,
					scsi_controller_type,
					timestamp,
					first_timestamp ) VALUES ( ?,?,?,?,?,?,? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->name",
                    "$input->manufacturer",
                    "$input->device_id",
                    "$input->type",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // need to check for sound card changes
            $sql = "SELECT sys_hw_scsi_controller.scsi_controller_id
				FROM sys_hw_scsi_controller, system
				WHERE sys_hw_scsi_controller.system_id 	= system.system_id AND
					system.system_id			= ? AND
					system.man_status 			= 'production' AND
					scsi_controller_manufacturer 		= ? AND
					scsi_controller_name 			= ? AND
					scsi_controller_device_id		= ? AND
					( sys_hw_scsi_controller.timestamp = ? OR sys_hw_scsi_controller.timestamp = ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->manufacturer",
                    "$input->name",
                    "$input->device_id",
                    "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the scsi_controller exists - need to update its timestamp
                $sql = "UPDATE sys_hw_scsi_controller SET timestamp = ? WHERE scsi_controller_id = ?";
                $data = array("$details->timestamp", "$row->scsi_controller_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the scsi_controller does not exist - insert it
                $sql = "INSERT INTO sys_hw_scsi_controller
					( 	system_id,
						scsi_controller_name,
						scsi_controller_manufacturer,
						scsi_controller_device_id,
						scsi_controller_type,
						timestamp,
						first_timestamp ) VALUES ( ?,?,?,?,?,?,? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->name",
                        "$input->manufacturer",
                        "$input->device_id",
                        "$input->type",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    }

    public function alert_scsi_controller($details)
    {
        // scsi no longer detected
        $sql = "SELECT scsi_controller_id, scsi_controller_name FROM sys_hw_scsi_controller WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'scsi controller removed - '.$myrow->scsi_controller_name;
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_scsi_controller', $myrow->scsi_controller_id, $alert_details, $details->timestamp);
        }

        // new scsi card
        $sql = "SELECT scsi_controller_id, scsi_controller_name
			FROM
				sys_hw_scsi_controller LEFT JOIN system ON (sys_hw_scsi_controller.system_id = system.system_id)
			WHERE
				sys_hw_scsi_controller.system_id = ? AND
				sys_hw_scsi_controller.first_timestamp = ? AND
				sys_hw_scsi_controller.first_timestamp = sys_hw_scsi_controller.timestamp AND
				sys_hw_scsi_controller.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'scsi controller installed - '.$myrow->scsi_controller_name;
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_scsi_controller', $myrow->scsi_controller_id, $alert_details, $details->timestamp);
        }
    }
}
