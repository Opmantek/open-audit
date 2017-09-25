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
* @category  Model
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.0.8
* @link      http://www.open-audit.org
 */
class M_audit_log extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function create($system_id, $username = '', $type = '', $ip_address = '', $debug = '', $wmi_fails = '', $timestamp = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data';
        stdlog($this->log);
        $system_id = intval($system_id);
        if ($system_id == '' or $system_id == 0) {
            return;
        }
        if ($type == '') {
            $type = 'audit';
        }
        if ($timestamp == '') {
            $timestamp = $this->config->config['timestamp'];
        }
        $sql = "INSERT INTO audit_log (`system_id`, `username`, `type`, `ip`, `debug`, `wmi_fails`, `timestamp`) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $data = array($system_id, "$username", "$type", "$ip_address", "$debug", "$wmi_fails", "$timestamp");
        $this->run_sql($sql, $data);
    }

    public function read($system_id)
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $system_id = intval($system_id);
        if ($system_id == '' or $system_id == 0) {
            return;
        }
        $sql = "SELECT * FROM audit_log WHERE audit_log.system_id = ?";
        $data = array("$system_id");
        $result = $this->run_sql($sql, $data);
        return ($result);
    }

    public function update($column, $value, $system_id, $timestamp)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $system_id = intval($system_id);
        if ($system_id == '' or $system_id == 0) {
            return;
        }
        $sql = "UPDATE audit_log SET $column = ? WHERE system_id = ? AND timestamp = ?";
        $data = array("$value", "$system_id", "$timestamp");
        $this->run_sql($sql, $data);
    }
}
