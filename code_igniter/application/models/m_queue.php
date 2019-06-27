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
* @version   3.1.1
* @link      http://www.open-audit.org
 */
class M_queue extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'success';
        $this->log->type = 'system';
    }

    # Return a queue object on success or FALSE on failure
    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->action = 'read';
        $this->log->summary = intval($id);
        $sql = "SELECT * FROM `queue` WHERE `id` = ?";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        if (!empty($result)) {
            stdlog($this->log);
            return ($result[0]);
        } else {
            $this->log->status = 'fail';
            stdlog($this->log);
            return false;
        }
    }

    # Return TRUE on success or FALSE on failure
    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->action = 'delete';
        $this->log->summary = intval($id);
        $sql = "DELETE FROM `queue` WHERE `id` = ?";
        $data = array(intval($id));
        $this->db->query($sql, $data);
        $affected_rows = $this->db->affected_rows();
        if (!empty($affected_rows)) {
            stdlog($this->log);
            return true;
        } else {
            $this->log->status = 'fail';
            stdlog($this->log);
            return false;
        }
    }

    # Return a queue array on success or FALSE on failure
    public function collection($parameters)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->action = 'collection';
        $type = '';
        if (!empty($parameters->type)) {
            $type = strtolower($parameters->type);
        }
        $this->log->summary = 'Passed type: ' . string($type);
        if ($type != 'discoveries' and $type != 'scans' and $type != 'audits') {
            $sql = "SELECT * FROM `queue`";
        } else {
            $sql = "SELECT * FROM `queue` WHERE `type` = '$type'";
        }
        $query = $this->db->query($sql);
        $result = $query->result();
        if (!empty($result)) {
            for ($i=0; $i < count($result); $i++) {
                $result[$i]->{'details'} = json_decode($result[$i]->{'details'});
            }
            stdlog($this->log);
            return $result;
        } else {
            $this->log->status = 'fail';
            stdlog($this->log);
            return false;
        }
    }

    # Return a queue ID (integer) on success or FALSE on failure
    public function create($type, $details)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->action = 'insert';
        $this->log->summary = (string)$type;
        stdlog($this->log);
        if (empty($details) or empty($type)) {
            $this->log->status = 'fail';
            $this->log->message = 'Empty type or details supplied.';
            stdlog($this->log);
            return false;
        }
        if (!is_string($details)) {
            $details = json_encode($details);
        }
        $temp_details = json_decode($details);
        $name = '';
        $org_id = 1;
        if (!empty($temp_details->name)) {
            $name = $temp_details->name;
        }
        if (!empty($temp_details->org_id)) {
            $org_id = intval($temp_details->org_id);
        }
        $this->log->details = $details;
        $sql = "INSERT INTO `queue` VALUES (null, ?, ?, ?, 0, 'queued', ?, NOW(), '2000-01-01 00:00:00')";
        $data = array($name, $type, $org_id, $details);
        $this->db->query($sql, $data);
        $result = intval($this->db->insert_id());
        if (empty($result)) {
            stdlog($this->log);
            return $result;
        } else {
            $this->log->status = 'fail';
            stdlog($this->log);
            return false;
        }
    }
}
