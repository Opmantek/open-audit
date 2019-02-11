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
* @version   2.3.3
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

    public function collection($parent = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);

        $CI = & get_instance();
        if ($CI->response->meta->collection == 'rack_devices') {
            $properties = $CI->response->meta->internal->properties;
            $filter = $CI->response->meta->internal->filter;
            $sort = $CI->response->meta->internal->sort;
            $limit = $CI->response->meta->internal->limit;
        } else {
            $properties = 'rack_devices.*';
            $filter = 'WHERE orgs.id IN (' . $CI->user->org_list . ')';
            $sort = 'ORDER BY rack_devices.name';
            $limit = 'LIMIT 0,' . $CI->config->item('page_size');
        }
        $group_by = 'GROUP BY rack_devices.id';
        if (!empty($parent)) {
            $filter .= ' AND rack_devices.rack_id IN (' . $parent . ')';
        }

        #$sql = 'SELECT rack_devices.*, orgs.name AS `orgs.name`, racks.name as `racks.name`, racks.id as `racks.id`, 0 as `system_count`, rows.name as `rows.name`, rooms.name as `rooms.name`, floors.name as `floors.name`, buildings.name as `buildings.name`, locations.name as `locations.name`, image.filename as `image.filename`, system.name as `system.name`, system.ip as `system.ip`, system.type as `system.type`, system.id as `system.id`, system.icon as `system.icon` FROM `rack_devices` LEFT JOIN orgs ON (orgs.id = rack_devices.org_id) LEFT JOIN racks ON (racks.id = rack_devices.rack_id) LEFT JOIN rows ON (rows.id = racks.row_id) LEFT JOIN rooms ON (rooms.id = rows.room_id) LEFT JOIN floors ON (floors.id = rooms.floor_id) LEFT JOIN buildings ON (buildings.id = floors.building_id) LEFT JOIN locations ON (locations.id = buildings.location_id) LEFT JOIN image ON (image.system_id = rack_devices.system_id and image.orientation = "front") LEFT JOIN system ON (system.id = rack_devices.system_id) WHERE orgs.id IN (' . $CI->user->org_list . ')';

        $sql = 'SELECT ' . $properties . ', orgs.name AS `orgs.name`, racks.name as `racks.name`, racks.id as `racks.id`, 0 as `system_count`, rows.name as `rows.name`, rooms.name as `rooms.name`, floors.name as `floors.name`, buildings.name as `buildings.name`, locations.name as `locations.name`, image.filename as `image.filename`, system.name as `system.name`, system.ip as `system.ip`, system.type as `system.type`, system.id as `system.id`, system.icon as `system.icon` FROM `rack_devices` LEFT JOIN orgs ON (orgs.id = rack_devices.org_id) LEFT JOIN racks ON (racks.id = rack_devices.rack_id) LEFT JOIN rows ON (rows.id = racks.row_id) LEFT JOIN rooms ON (rooms.id = rows.room_id) LEFT JOIN floors ON (floors.id = rooms.floor_id) LEFT JOIN buildings ON (buildings.id = floors.building_id) LEFT JOIN locations ON (locations.id = buildings.location_id) LEFT JOIN image ON (image.system_id = rack_devices.system_id and image.orientation = "front") LEFT JOIN system ON (system.id = rack_devices.system_id) ' . $filter . ' ' . $group_by . ' ' . $sort . ' ' . $limit;

        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'rack_devices');
        $this->log->summary = 'finish';
        stdlog($this->log);
        return ($result);
    }

}
