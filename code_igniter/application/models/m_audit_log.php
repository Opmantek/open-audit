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
* @package   AuditLog
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.5.3
* @link      http://www.open-audit.org
*/

/**
* Base Model AuditLog
*
* @access   public
* @category Model
* @package  AuditLog
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_audit_log extends MY_Model
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
     * @param  int    $system_id  The ID of the device linked to this audit_log entry
     * @param  string $username   The username The username making this change
     * @param  string $type       The type of change
     * @param  string $ip_address The IP Address for this change
     * @param  string $debug      Should we log using debug?
     * @param  string $wmi_fails  Any failed WMI rtequests
     * @param  string $timestamp  The timestamp of this item (if blank use config -> timestamp).
     * @param  string $version    The version of Open-AudIT audit script (if blank, use config -> display_version).
     * @return array The array of requested items
     */
    public function create($system_id = 0, $username = '', $type = '', $ip_address = '', $debug = '', $wmi_fails = '', $timestamp = '', $version = '')
    {
        $CI = & get_instance();
        if (empty($system_id)) {
            return;
        }
        if (empty($type)) {
            $type = 'audit';
        }
        if (empty($timestamp)) {
            $timestamp = $this->config->config['timestamp'];
        }
        if (empty($version)) {
            $version = $this->config->config['display_version'];
        }
        if (empty($username)) {
            if ( ! empty($CI->user->name)) {
                $username = $CI->user->name;
            } else {
                $username = '';
            }
        }
        $sql = 'INSERT INTO audit_log (`system_id`, `username`, `type`, `ip`, `debug`, `wmi_fails`, `timestamp`, `version`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $data = array($system_id, $username, $type, $ip_address, $debug, $wmi_fails, $timestamp, $version);
        $this->run_sql($sql, $data);
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read($id = 0)
    {
        $sql = 'SELECT * FROM audit_log WHERE audit_log.system_id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        return ($result);
    }

    /**
     * Update an individual item from the database, by ID
     *
     * @param  string $column    The column to update
     * @param  string $value     The value to update with
     * @param  string $id        The system.id linked
     * @param  string $timestamp The timestamp
     * @return null
     */
    public function update($column, $value, $id = 0, $timestamp)
    {
        $sql = 'UPDATE audit_log SET ' . $column . ' = ? WHERE system_id = ? AND timestamp = ?';
        $data = array($value, $id, $timestamp);
        $this->run_sql($sql, $data);
    }
}
// End of file m_audit_log.php
// Location: ./models/m_audit_log.php
