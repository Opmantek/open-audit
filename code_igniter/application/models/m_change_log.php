<?php
/**
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
*
* PHP version 5.3.3
* 
* @category  Model
* @package   ChangeLog
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.4.1
* @link      http://www.open-audit.org
*/

/**
* Base Model ChangeLog
*
* @access   public
* @category Model
* @package  ChangeLog
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_change_log extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Create an individual entry in the DB
     *
     * @param  int    $system_id The system.id
     * @param  string $db_table  Which database table
     * @param  string $db_row    Which row
     * @param  string $db_action What action
     * @param  string $details   What actually happened - a description
     * @param  string $timestamp When did this happen
     * @return array The array of requested items parent
     */
    public function create($system_id = 0, $db_table, $db_row, $db_action, $details, $timestamp)
    {
        $sql = 'INSERT INTO change_log (`system_id`, `db_table`, `db_row`, `db_action`, `details`, `timestamp` ) VALUES ( ?, ?, ?, ?, ?, ? )';
        $data = array($system_id, $db_table, $db_row, $db_action, $details, $timestamp);
        $this->run_sql($sql, $data);
    }

    /**
     * Delete All items from the DB
     *
     * @return int
     */
    public function deleteAll()
    {
        $sql = 'DELETE FROM change_log';
        $sql = $this->clean_sql($sql);
        $this->db->query($sql);
        $count = $this->db->affected_rows();
        return ($count);
    }

    /**
     * Delete all items older than $days in the DB.
     *
     * @param  int $days How many days from NOW() shouyld we delete data for
     * @return int The number of rows deleted
     */
    public function deleteDays($days = 365)
    {
        $sql = 'DELETE FROM change_log WHERE DATE(timestamp) < DATE_SUB(curdate(), INTERVAL ' . $days . ' day)';
        $sql = $this->clean_sql($sql);
        $this->db->query($sql);
        $count = $this->db->affected_rows();
        return ($count);
    }

    /**
     * Count all items in the DB.
     *
     * @return int The count of rows in the change_log table
     */
    public function count()
    {
        $sql = 'SELECT COUNT(*) AS count FROM change_log';
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();
        return($row->count);
    }

    /**
     * Count all items older than $days in the DB.
     *
     * @param  int $days How many days to count from NOW()
     * @return int The count of rows between NOW() and the supplied $days
     */
    public function countDays($days = 7)
    {
        $sql = 'SELECT COUNT(*) AS count FROM change_log WHERE DATE(timestamp) < DATE_SUB(curdate(), INTERVAL ' . $days . ' day)';
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();
        return($row->count);
    }

    /**
     * Read all items by system.id
     *
     * @param  int $id The system.id of the device
     * @return array
     */
    public function readDevice($id = 0)
    {
        $sql = 'SELECT change_log.*, users.full_name FROM change_log LEFT JOIN users ON change_log.user_id = users.id WHERE change_log.system_id = ? ORDER BY timestamp';
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        return ($result);
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The system.id of the device
     * @return array
     */
    public function readChange($id = 0)
    {
        $sql = 'SELECT change_log.*, system.name, system.ip, system.description FROM change_log LEFT JOIN system ON (change_log.system_id = system.id) WHERE change_log.id = ?';
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        return ($result);
    }

    /**
     * Update an individual item from the database, by ID
     *
     * @param  array $details array(alert id, change type, change id, external change id, external change link, alert note, user id, alert acknowledge timestamp)
     * @return null
     */
    public function updateChange($details)
    {
        foreach ($details['alerts'] as $key => $value) {
            $sql = 'UPDATE change_log SET change_type = ?, change_id = ?, external_ident = ?, external_link = ?, note = ?, user_id = ?, ack_time = ? WHERE id = ?';
            $data = array($details['change_type'], $details['change_id'], $details['external_change_id'], $details['external_change_link'], $details['alert_note'], $details['user_id'], $details['alert_ack_time'], $value);
            $this->run_sql($sql, $data);
        }
    }
}
// End of file m_change_log.php
// Location: ./models/m_change_log.php
