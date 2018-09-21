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
* @version   2.2.7
* @link      http://www.open-audit.org
 */
class M_rack_devices extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function read($id = 0)
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $id = intval($id);
        $sql = "SELECT * FROM `rack_devices` WHERE `id` = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'rack_devices');
        return ($result);
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        $id = intval($id);
        $sql = "DELETE FROM `rack_devices` WHERE `id` = ?";
        $data = array($id);
        $test = $this->run_sql($sql, $data);
        if (!empty($test)) {
            return true;
        } else {
            return false;
        }
    }

    public function parent($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'reading parent data';
        stdlog($this->log);
        $id = intval($id);
        $sql = "SELECT racks.* FROM racks, rack_devices WHERE racks.id = rack_devices.rack_id AND rack_devices.id = ?";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'rack_devices');
        return ($result);
    }

    public function collection($rack = '')
    {
        $CI = & get_instance();
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);
        $sql = 'SELECT rack_devices.*, orgs.name AS `orgs.name`, racks.name as `racks.name`, 0 as `system_count` FROM `rack_devices` LEFT JOIN orgs ON (rack_devices.org_id = orgs.id) LEFT JOIN racks ON (racks.id = rack_devices.rack_id) WHERE orgs.id IN (' . $CI->user->org_list . ')';
        if (!empty($rack)) {
            $sql .= ' AND rack_devices.rack_id IN (' . $rack . ')';
        }
        $sql .= ' GROUP BY rack_devices.id';
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'rack_devices');
        $this->log->summary = 'finish';
        stdlog($this->log);
        return ($result);
    }
}
