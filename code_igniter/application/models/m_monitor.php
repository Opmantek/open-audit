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
class M_monitor extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_monitor($system_id)
    {
        $sql = "SELECT
				sys_hw_monitor.*
			FROM
				sys_hw_monitor,
				system
			WHERE
				sys_hw_monitor.system_id = system.system_id AND
				sys_hw_monitor.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY
				monitor_id";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_monitor($input, $details)
    {
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_hw_monitor ( system_id, manufacturer, model, serial,
					man_serial, device_id, manufacture_date, edid_version, size,
					aspect_ratio, timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->manufacturer",
                    "$input->model",
                    "$input->serial",
                    "$input->serial",
                    "$input->device_id",
                    "$input->manufacture_date",
                    "$input->edid_version",
                    "$input->size",
                    "$input->aspect_ratio",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // need to check for monitor changes
            $sql = "SELECT
					sys_hw_monitor.monitor_id
				FROM
					sys_hw_monitor,
					system
				WHERE
					sys_hw_monitor.system_id	 = system.system_id AND
					system.system_id		= ? AND
					system.man_status 		= 'production' AND
					sys_hw_monitor.manufacturer 	= ? AND
					sys_hw_monitor.model 		= ? AND
					sys_hw_monitor.serial		= ? AND
					( sys_hw_monitor.timestamp 	= ? OR
					sys_hw_monitor.timestamp 	= ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->manufacturer",
                    "$input->model",
                    "$input->serial",
                    "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the monitor exists - need to update its timestamp
                $start = explode(' ', microtime());
                $sql = "UPDATE sys_hw_monitor SET timestamp = ?, size = ?, aspect_ratio = ? WHERE monitor_id = ?";
                $data = array("$details->timestamp", "$input->size", "$input->aspect_ratio", "$row->monitor_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the monitor does not exist - insert it
                $sql = "INSERT INTO sys_hw_monitor (
						system_id,
						manufacturer,
						model,
						serial,
						man_serial,
						device_id,
						manufacture_date,
						edid_version,
						size,
						aspect_ratio,
						timestamp,
						first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->manufacturer",
                        "$input->model",
                        "$input->serial",
                        "$input->serial",
                        "$input->device_id",
                        "$input->manufacture_date",
                        "$input->edid_version",
                        "$input->size",
                        "$input->aspect_ratio",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    }

    public function alert_monitor($details)
    {
        // monitor no longer detected
        $sql = "SELECT monitor_id, manufacturer, model, serial FROM sys_hw_monitor WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'monitor removed - '.$myrow->manufacturer.', '.$myrow->model.', (Serial: '.$myrow->serial.')';
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_monitor', $myrow->monitor_id, $alert_details, $details->timestamp);
        }

        // new monitor
        $sql = "SELECT sys_hw_monitor.monitor_id, sys_hw_monitor.manufacturer, sys_hw_monitor.model, sys_hw_monitor.serial
			FROM
				sys_hw_monitor LEFT JOIN system ON (sys_hw_monitor.system_id = system.system_id)
			WHERE
				sys_hw_monitor.system_id = ? AND
				sys_hw_monitor.first_timestamp = ? AND
				sys_hw_monitor.first_timestamp = sys_hw_monitor.timestamp AND
				sys_hw_monitor.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'monitor installed - '.$myrow->manufacturer.', '.$myrow->model.', (Serial: '.$myrow->serial.')';
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_monitor', $myrow->monitor_id, $alert_details, $details->timestamp);
        }
    }
}
