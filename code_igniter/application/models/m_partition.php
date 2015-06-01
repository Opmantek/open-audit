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
class M_partition extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_partition($system_id)
    {
        $sql = "SELECT
				partition_id,
				partition_device_id,
				partition_mount_point,
				partition_name,
				partition_size,
				partition_format,
				partition_caption,
				partition_type,
				hard_drive_index,
				partition_free_space,
				partition_used_space
			FROM
				sys_hw_partition,
				system
			WHERE
				sys_hw_partition.system_id = system.system_id AND
				sys_hw_partition.timestamp = system.timestamp AND
				sys_hw_partition.partition_size > '0' AND
				system.system_id = ?
			GROUP BY
				partition_id";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function get_partition_details($partition_id)
    {
        $sql = "SELECT
				partition_id,
				partition_mount_point,
				partition_name,
				partition_size,
				partition_format,
				partition_caption,
				hard_drive_index,
				partition_free_space,
				partition_used_space,
				partition_mount_type
			FROM
				sys_hw_partition
			WHERE
				sys_hw_partition.partition_id = ?
			GROUP BY
				partition_id
			LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($partition_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_partitions($input, $details)
    {
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_hw_partition ( system_id, hard_drive_index, partition_mount_type,
					partition_mount_point, partition_name, partition_size, partition_free_space,
					partition_used_space, partition_format, partition_caption, partition_device_id,
					partition_disk_index, partition_bootable, partition_type, partition_quotas_supported,
					partition_quotas_enabled, partition_serial, timestamp,
					first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->hard_drive_index",
                    "$input->partition_mount_type",
                    "$input->partition_mount_point",
                    "$input->partition_name",
                    "$input->partition_size",
                    "$input->partition_free_space",
                    "$input->partition_used_space",
                    "$input->partition_format",
                    "$input->partition_caption",
                    "$input->partition_device_id",
                    "$input->partition_disk_index",
                    "$input->partition_bootable",
                    "$input->partition_type",
                    "$input->partition_quotas_supported",
                    "$input->partition_quotas_enabled",
                    "$input->partition_serial",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
            $partition_id = $this->db->insert_id();
        } else {
            // need to check for partition changes
            $sql = "SELECT sys_hw_partition.partition_id
					FROM sys_hw_partition, system
					WHERE sys_hw_partition.system_id 	= system.system_id AND
						system.system_id				= ? AND
						system.man_status 				= 'production' AND
						((system.man_os_family 			<> 'IBM AIX' AND
						sys_hw_partition.hard_drive_index 				= ? AND
						sys_hw_partition.partition_mount_point 			= ? AND
						sys_hw_partition.partition_size 				= ? ) OR
						(system.man_os_family 			= 'IBM AIX' AND
						sys_hw_partition.hard_drive_index 				= ? AND
						sys_hw_partition.partition_mount_point 			= ? AND
						sys_hw_partition.partition_size 				= ? AND
						sys_hw_partition.partition_name 				= ? )) AND
						( sys_hw_partition.timestamp 			= ? OR
						sys_hw_partition.timestamp 			= ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->hard_drive_index",
                    "$input->partition_mount_point",
                    "$input->partition_size",
                    "$input->hard_drive_index",
                    "$input->partition_mount_point",
                    "$input->partition_size",
                    "$input->partition_name",
                    "$details->original_timestamp",
                    "$details->timestamp", );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the partition exists - need to update its timestamp, free and used space
                $sql = "UPDATE sys_hw_partition SET partition_free_space = ?, partition_used_space = ?, timestamp = ? WHERE partition_id = ?";
                $data = array("$input->partition_free_space", "$input->partition_used_space", "$details->timestamp", "$row->partition_id");
                $partition_id = $row->partition_id;
                $query = $this->db->query($sql, $data);
            } else {
                // the partition does not exist - insert it
                $sql = "INSERT INTO sys_hw_partition ( system_id, hard_drive_index, partition_mount_type,
						partition_mount_point, partition_name, partition_size, partition_free_space,
						partition_used_space, partition_format, partition_caption, partition_device_id,
						partition_disk_index, partition_bootable, partition_type, partition_quotas_supported,
						partition_quotas_enabled, partition_serial, timestamp,
						first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->hard_drive_index",
                        "$input->partition_mount_type",
                        "$input->partition_mount_point",
                        "$input->partition_name",
                        "$input->partition_size",
                        "$input->partition_free_space",
                        "$input->partition_used_space",
                        "$input->partition_format",
                        "$input->partition_caption",
                        "$input->partition_device_id",
                        "$input->partition_disk_index",
                        "$input->partition_bootable",
                        "$input->partition_type",
                        "$input->partition_quotas_supported",
                        "$input->partition_quotas_enabled",
                        "$input->partition_serial",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
                $partition_id = $this->db->insert_id();
            }
        }
        // we need to insert a row into the "graphs" table
        if ($input->partition_size != 0) {
            $used_percent = intval($input->partition_used_space / $input->partition_size * 100);
        } else {
            $used_percent = 0;
        }
        $free_percent = intval(100 - $used_percent);
        $sql = "INSERT INTO sys_hw_graphs_disk (system_id, partition_id, graph_type, partition_mount_point, used_percent, free_percent, used, free, total) VALUES (?,?,?,?,?,?,?,?,?)";
        $data = array("$details->system_id",
                        "$partition_id",
                        "partition",
                        "$input->partition_mount_point",
                        "$used_percent",
                        "$free_percent",
                        "$input->partition_used_space",
                        "$input->partition_free_space",
                        "$input->partition_size", );
        $query = $this->db->query($sql, $data);
    }

    public function alert_partition($details)
    {
        // partition no longer detected
        $sql = "SELECT partition_id, partition_mount_point FROM sys_hw_partition WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'partition removed - '.$myrow->partition_mount_point;
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_partition', $myrow->partition_id, $alert_details, $details->timestamp);
        }

        // new partition
        $sql = "SELECT partition_id, partition_mount_point
			FROM
				sys_hw_partition LEFT JOIN system ON (sys_hw_partition.system_id = system.system_id)
			WHERE
				sys_hw_partition.system_id = ? AND
				sys_hw_partition.first_timestamp = ? AND
				sys_hw_partition.first_timestamp = sys_hw_partition.timestamp AND
				sys_hw_partition.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'partition installed - '.$myrow->partition_mount_point;
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_partition', $myrow->partition_id, $alert_details, $details->timestamp);
        }
    }

    public function get_partition_graph($system_id, $partition_mount_point = 'C:', $days = 30)
    {
        $sql = "SELECT
                used_percent as percent_used,
                DATE(timestamp) AS timestamp
            FROM
                sys_hw_graphs_disk
            WHERE
                system_id = ? AND
                partition_id = ? AND
                timestamp > adddate(current_date(), interval -".$days." day)
            GROUP BY
                DAY(timestamp)
            ORDER BY
                timestamp";
        $sql = $this->clean_sql($sql);
        $data = array($system_id, $partition_mount_point);
        $query = $this->db->query($sql, $data);

        return ($query->result());
    }

    public function partition_alert($group_id, $user_id, $days = '120')
    {
        $resultset = array();
        $sql = "SELECT
				DISTINCT(system.system_id),
				system.hostname,
				system.man_status,
				system.man_function,
				system.man_criticality,
				system.man_environment,
				system.man_description,
				sys_hw_partition.partition_id,
				sys_hw_partition.partition_mount_point,
				sys_hw_partition.partition_name
			FROM
				system,
				oa_group_sys,
				sys_hw_partition
			WHERE
				system.man_status = 'production' AND
				system.system_id = oa_group_sys.system_id AND
				oa_group_sys.group_id = ? AND
				system.timestamp = sys_hw_partition.timestamp AND
				system.system_id = sys_hw_partition.system_id AND
				sys_hw_partition.partition_mount_point > '' AND
				sys_hw_partition.partition_mount_point <> 'Y:' AND
				sys_hw_partition.partition_mount_point not like ?
			GROUP BY
				system.hostname, sys_hw_partition.partition_mount_point
			ORDER BY
				system.hostname,
				sys_hw_partition.partition_mount_point ";
        $sql = $this->clean_sql($sql);
        $data = array($group_id, '%?%');
        $query = $this->db->query($sql, $data);
        $returned_data = array();
        foreach ($query->result() as $system) {
            $partition_sql = "SELECT
					partition_id,
					round(AVG(used),0) AS used,
					used AS partition_used_space,
					total,
					(used / total) * 100 AS percent_used,
					(free / total) * 100 AS percent_free,
					DATE(timestamp) AS timestamp
				FROM
					sys_hw_graphs_disk
				WHERE
					system_id = ? AND
					partition_mount_point = ?
				GROUP BY
					DATE(timestamp)
				ORDER BY
					timestamp";
            $partition_sql = $this->clean_sql($partition_sql);
            $data = array($system->system_id, $system->partition_mount_point);
            $partition_query = $this->db->query($partition_sql, $data);
            $count = 0;
            $current_date = '';
            $prev_date = '';
            $current_used = 0;
            $prev_used = 0;
            $days_between = 0;
            $used_calc = 0;
            $used_diff = 0;
            $total_days = 0;
            $total_use = 0;
            foreach ($partition_query->result() as $partition) {
                $count++;
                if ($count > 1) {
                    $current_date = strtotime($partition->timestamp);
                    $prev_date = strtotime($prev_date);
                    $days_between = round((($current_date - $prev_date) / 84600), 0);
                    $current_used = $partition->used;
                    if ($days_between < 2) {
                        $days_between = 1;
                    }
                    $used_calc = ($current_used - $prev_used);
                    if (($used_calc < 1) and ($used_calc > -500)) {
                        $used_calc = abs($used_calc);
                        $used_diff = round(($used_calc / $days_between), 2);
                        $used_diff = $used_diff - (2* $used_diff);
                    }
                    if ($used_calc > 0) {
                        $used_diff = round(($used_calc / $days_between), 2);
                    }
                    if ($used_calc < -499) {
                        $used_diff = 0;
                        $days_between = 0;
                    }
                }
                $partition_id = $partition->partition_id;
                $prev_used = $partition->used;
                $prev_date = $partition->timestamp;
                $total_days += $days_between;
                $total_use += $used_diff;
                $total = $partition->total;
                $partition_used_space = $partition->partition_used_space;
            }
            if ($total_use < 1) {
                $total_use = 1;
            }
            if ($total_days < 1) {
                $total_days = 1;
            }
            if ($total < 1) {
                $total = 1;
            }
            if ($partition_used_space < 1) {
                $partition_used_space = 1;
            }
            $i = ceil($total_use / $total_days);
            if ($i < 1) {
                $i = 1;
            }
            $days_until_full = round((($total - $partition_used_space) / $i), 2, 0);
            if (intval($days_until_full) <= intval($days)) {
                $returned_row["system_id"] = $system->system_id;
                $returned_row["hostname"] = $system->hostname;
                $returned_row["partition_name"] = $system->partition_name;
                $returned_row["partition_mount_point"] = $system->partition_mount_point;
                $returned_row["man_environment"] = $system->man_environment;
                $returned_row["man_description"] = $system->man_description;
                $returned_row["man_function"] = $system->man_function;
                $returned_row["man_criticality"] = $system->man_criticality;
                $returned_row["partition_id"] = $partition_id;
                $returned_row["partition_size"] = $total;
                $returned_row["partition_used_space"] = $partition_used_space;
                $returned_row["partition_free_space"] = ($total - $partition_used_space);
                #$returned_row["days_until_used"] = round(($total - $partition_used_space) / round(($total_use / $total_days), 2),0);
                $returned_row["days_until_used"] = $days_until_full;
                if ($returned_row["days_until_used"] == 0) {
                    $returned_row["days_until_used"] = 'unknown';
                }
                $returned_row["change_per_day"] = round(($total_use / $total_days), 2);
                $resultset[] = $returned_row;
            }
        }

        return ($resultset);
    }
}
