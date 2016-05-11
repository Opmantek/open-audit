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
class M_audit_log extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($system_id, $username = '', $type = '', $ip = '', $debug = '', $wmi_fails = '', $timestamp = '')
    {
        $system_id = intval($system_id);
        if ($system_id == '' or $system_id == 0) {
            return;
        }
        if ($type == '') {
            $type = 'audit';
        }
        if ($timestamp == '') {
            $timestamp = date('Y-m-d H:i:s');
        }

        if ($timestamp == '') {
            $timestamp = date('Y-m-d H:i:s');
        }
        $sql = "INSERT INTO audit_log (system_id, username, type, ip, debug, wmi_fails, `timestamp`) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $sql = $this->clean_sql($sql);
        $data = array($system_id, "$username", "$type", "$ip", "$debug", "$wmi_fails", "$timestamp");
        $query = $this->db->query($sql, $data);
    }

    public function update($column, $value, $system_id, $timestamp)
    {
        $system_id = intval($system_id);
        if ($system_id == '' or $system_id == 0) {
            return;
        }
        $sql = "UPDATE audit_log SET $column = ? WHERE system_id = ? AND timestamp = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$value", "$system_id", "$timestamp");
        $query = $this->db->query($sql, $data);
    }

    public function read($system_id)
    {
        $system_id = intval($system_id);
        if ($system_id == '' or $system_id == 0) {
            return;
        }
        $sql = "SELECT * FROM audit_log WHERE audit_log.system_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }
}
