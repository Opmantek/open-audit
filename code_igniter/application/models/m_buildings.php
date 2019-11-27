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
* Base Model Buildings
*
* @access   public
* @category Model
* @package  Racks
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_buildings extends MY_Model
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
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read(int $id = 0)
    {
        $sql = 'SELECT buildings.*, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, locations.id AS `locations.id`, locations.name as `locations.name`, count(floors.id) as `floors_count` FROM `buildings` LEFT JOIN orgs ON (buildings.org_id = orgs.id) LEFT JOIN locations ON (locations.id = buildings.location_id) LEFT JOIN floors ON (floors.building_id = buildings.id) WHERE buildings.id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'buildings');
        return ($result);
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete(int $id = 0)
    {
        $sql = 'DELETE FROM `buildings` WHERE `id` = ?';
        $data = array($id);
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Read the associated items parents from the DB by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items parent
     */
    public function parent(int $id = 0)
    {
        $sql = 'SELECT locations.* FROM locations, buildings WHERE locations.id = buildings.location_id AND buildings.id = ?';
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'locations');
        return ($result);
    }
    /**
     * Read the associated items children from the DB by ID
     *
     * @param  int $id The ID of the requested items parent
     * @return array The array of requested items children
     */
    public function children(int $id = 0)
    {
        $sql = 'SELECT floors.*, orgs.name AS `orgs.name`, buildings.name as `buildings.name`, locations.name as `locations.name`, count(rooms.id) as `rooms_count` FROM `floors` LEFT JOIN orgs ON (floors.org_id = orgs.id) LEFT JOIN buildings ON (buildings.id = floors.building_id) LEFT JOIN locations ON (buildings.location_id = locations.id) LEFT JOIN rooms ON (rooms.floor_id = floors.id)  WHERE floors.building_id = ?';
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'floors');
        return ($result);
    }

    /**
     * Read the collection from the database
     *
     * @param  int $user_id  The ID of the requesting user, no $response->meta->filter used and no $response->data populated
     * @param  int $response A flag to tell us if we need to use $response->meta->filter and populate $response->data
     * @return bool True = success, False = fail
     */
    public function collection(int $user_id = null, int $response = null)
    {
        $CI = & get_instance();
        if ( ! empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = 'SELECT * FROM buildings WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'buildings');
            return $result;
        }
        if ( ! empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = 'SELECT ' . $CI->response->meta->internal->properties . ', orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, locations.id AS `locations.id`, locations.name AS `locations.name`, count(floors.id) AS `floors_count` FROM buildings LEFT JOIN orgs ON (buildings.org_id = orgs.id) LEFT JOIN locations ON (locations.id = buildings.location_id) LEFT JOIN floors ON (floors.building_id = buildings.id) ' . 
                    $CI->response->meta->internal->filter . ' ' . 
                    'GROUP BY buildings.id ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'buildings');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }
}
// End of file m_buildings.php
// Location: ./models/m_buildings.php
