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
* @package   Racks
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Rooms
*
* @access   public
* @category Model
* @package  Racks
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_rooms extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $id = intval($id);
        $sql = "SELECT rooms.*, orgs.name AS `orgs.name`, floors.name as `floors.name`, buildings.name as `buildings.name`, locations.name as `locations.name`, count(rows.id) as `rows_count` FROM `rooms` LEFT JOIN orgs ON (rooms.org_id = orgs.id) LEFT JOIN floors ON (floors.id = rooms.floor_id) LEFT JOIN buildings ON (floors.building_id = buildings.id)  LEFT JOIN locations ON (buildings.location_id = locations.id) LEFT JOIN rows ON (rows.room_id = rooms.id) WHERE rooms.id = ?";

        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'rooms');
        return ($result);
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        $id = intval($id);
        $sql = "DELETE FROM `rooms` WHERE `id` = ?";
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
        $sql = "SELECT floors.* FROM floors, rooms WHERE floors.id = rooms.floor_id AND rooms.id = ?";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'floors');
        return ($result);
    }

    public function children($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'reading children data';
        stdlog($this->log);
        $id = intval($id);
        $sql = "SELECT rows.*, orgs.name AS `orgs.name`, floors.name as `floors.name`, rooms.name as `rooms.name`, buildings.name as `buildings.name`, locations.name as `locations.name`, racks.name as `racks.name`, racks.id as `racks.id`, count(rows.id) as `rows_count` FROM `rows` LEFT JOIN orgs ON (orgs.id = rows.org_id) LEFT JOIN racks ON (racks.row_id = rows.id) LEFT JOIN rooms ON (rooms.id = rows.room_id) LEFT JOIN floors ON (floors.id = rooms.floor_id) LEFT JOIN buildings ON (buildings.id = floors.building_id) LEFT JOIN locations ON (locations.id = buildings.location_id) WHERE rows.room_id = ? GROUP BY rows.id";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'rows');
        return ($result)    ;
    }

    /**
     * Read the collection from the database
     *
     * @param  int $user_id  The ID of the requesting user, no $response->meta->filter used and no $response->data populated
     * @param  int $response A flag to tell us if we need to use $response->meta->filter and populate $response->data
     * @return bool True = success, False = fail
     */
    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if ( ! empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = 'SELECT rooms.*, floors.id AS `floors.id`, floors.name AS `floors.name`, orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM rooms LEFT JOIN floors ON (rooms.floor_id = floors.id) LEFT JOIN orgs ON (rooms.org_id = orgs.id) WHERE orgs.id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'rooms');
            return $result;
        }
        if ( ! empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, floors.id AS `floors.id`, floors.name as `floors.name`, count(rows.id) as `rows_count` FROM `rooms` LEFT JOIN orgs ON (rooms.org_id = orgs.id) LEFT JOIN floors ON (rooms.floor_id = floors.id) LEFT JOIN rows ON (rooms.id = rows.room_id) " .
                    $CI->response->meta->internal->filter . ' ' .
                    'GROUP BY rooms.id ' .
                    $CI->response->meta->internal->sort . ' ' .
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'rooms');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }
}
