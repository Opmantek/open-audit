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
class M_rows extends MY_Model
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
        $sql = "SELECT * FROM `rows` WHERE `id` = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'rows');
        return ($result);
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        $id = intval($id);
        $sql = "DELETE FROM `rows` WHERE `id` = ?";
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
        $sql = "SELECT rooms.* FROM rooms, rows WHERE rooms.id = rows.room_id AND rows.id = ?";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'rooms');
        return ($result);
    }

    public function children($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'reading children data';
        stdlog($this->log);
        $id = intval($id);
        $sql = "SELECT racks.* from racks WHERE racks.row_id = ?";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'racks');
        return ($result)    ;
    }

    public function collection($room = '')
    {
        $CI = & get_instance();
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);
        $sql = 'SELECT rows.*, orgs.name AS `orgs.name`, floors.name as `floors.name`, rooms.name as `rooms.name`, buildings.name as `buildings.name`, locations.name as `locations.name`, count(rows.id) as `rows_count` FROM `rows` LEFT JOIN orgs ON (orgs.id = rows.org_id) LEFT JOIN rooms ON (rooms.id = rows.room_id) LEFT JOIN floors ON (floors.id = rooms.floor_id) LEFT JOIN buildings ON (buildings.id = floors.building_id) LEFT JOIN locations ON (locations.id = buildings.location_id) WHERE orgs.id IN (' . $CI->user->org_list . ')';
        if (!empty($room)) {
            $sql .= ' AND rows.room_id IN (' . $room . ')';
        }
        $sql .= ' GROUP BY rows.id';
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'rows');
        $this->log->summary = 'finish';
        stdlog($this->log);
        return ($result);
    }
}
