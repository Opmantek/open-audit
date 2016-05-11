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
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

/**
 * @access	 public
 *
 * @category Object
 *
 * @author   Mark Unwin <marku@opmantek.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 *
 * @link     http://www.open-audit.org
 */
class M_change_log extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Delete all alerts in the DB.
     *
     * @access	public
     *
     * @return int
     */
    public function deleteAll()
    {
        $sql = "DELETE FROM change_log";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $count = $this->db->affected_rows();
        return ($count);
    }

    /**
     * Delete all alerts older than $days in the DB.
     *
     * @access	public
     *
     * @return int
     */
    public function deleteDays($days = 365)
    {
        $sql = "DELETE FROM change_log WHERE DATE(timestamp) < DATE_SUB(curdate(), INTERVAL $days day)";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $count = $this->db->affected_rows();
        return ($count);
    }

    /**
     * Count all alerts in the DB.
     *
     * @access	public
     *
     * @return int
     */
    public function count()
    {
        $sql = "SELECT COUNT(*) AS count FROM change_log";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();
        return($row->count);
    }

    /**
     * All alerts in the DB older than XX days.
     *
     * @access	public
     *
     * @return int
     */
    public function countDays($days = 7)
    {
        $sql = "SELECT COUNT(*) AS count FROM change_log WHERE DATE(timestamp) < DATE_SUB(curdate(), INTERVAL $days day)";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();
        return($row->count);
    }

    /**
     * Get the alert's for a given system.
     *
     * @access	public
     *
     * @param	system_id
     *
     * @return array
     */
    public function readDevice($id)
    {
        $id = intval($id);
        if ($id > 0) {
            $sql = "SELECT change_log.*, oa_user.full_name FROM change_log LEFT JOIN oa_user ON change_log.user_id = oa_user.id WHERE change_log.system_id = ? ORDER BY timestamp";
            $sql = $this->clean_sql($sql);
            $data = array($id);
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            return ($result);
        } else {
            return;
        }
    }

    /**
     * Create an alert for a given piece for a given system.
     *
     * @access	public
     *
     * @param	system_id, alert table, alert row, details, timestamp
     *
     * @return nothing
     */
    public function create($system_id, $db_table, $db_row, $db_action, $details, $timestamp)
    {
        $sql = "INSERT INTO change_log ( system_id, db_table, db_row, db_action, details, `timestamp` ) VALUES ( ?, ?, ?, ?, ?, ? )";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id", "$db_table", "$db_row", "$db_action", "$details", "$timestamp");
        $query = $this->db->query($sql, $data);
    }

    /**
     * Get the details fo a given alert.
     *
     * @access	public
     *
     * @param	alert_id
     *
     * @return array
     */
    public function readChange($id)
    {
        $sql = "SELECT change_log.*, system.hostname, system.man_ip_address, system.man_description FROM
			change_log LEFT JOIN system ON (change_log.system_id = system.system_id) WHERE change_log.id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    /**
     * Update an alert with details of a Change record.
     *
     * @access	public
     *
     * @param	array(alert id, change type, change id, external change id, external change link, alert note, user id, alert acknowledge timestamp)
     *
     * @return nothing
     */
    public function updateChange($details)
    {
        foreach ($details['alerts'] as $key => $value) {
            $sql = "UPDATE change_log SET change_type = ?, change_id = ?, external_ident = ?, external_link = ?, note = ?, user_id = ?, ack_time = ? WHERE id = ?";
            $sql = $this->clean_sql($sql);
            $data = array($details['change_type'], $details['change_id'], $details['external_change_id'], $details['external_change_link'], $details['alert_note'], $details['user_id'], $details['alert_ack_time'], "$value");
            $query = $this->db->query($sql, $data);
        }
    }
}
