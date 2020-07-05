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
* @package   Locations
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.4.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Locations
*
* @access   public
* @category Model
* @package  Locations
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_locations extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    /**
     * Create an individual item in the database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data = null)
    {
        if ($id = $this->insert_collection('locations', $data)) {
            $user = 'system';
            if ( ! empty($this->user->full_name)) {
                $user = $this->user->full_name;
            }
            $sql = "INSERT INTO `buildings` VALUES (NULL, 'Default Building', ?, ?, 'The default entry for a building at this location.', '', '', '', ?, NOW())";
            $data_array = array($data->org_id, $id, $user);
            $building_id = intval($this->run_sql($sql, $data_array));

            if ( ! empty($building_id)) {
                $sql = "INSERT INTO `floors` VALUES (NULL, 'Ground Floor', ?, ?, 'The default entry for a floor at this location.', '', '', '', ?, NOW())";
                $data_array = array($data->org_id, $building_id, $user);
                $floor_id = intval($this->run_sql($sql, $data_array));
            }

            if ( ! empty($floor_id)) {
                $sql = "INSERT INTO `rooms` VALUES (NULL, 'Default Room', ?, ?, 'The default entry for a room at this location.', '', '', '', ?, NOW())";
                $data_array = array($data->org_id, $floor_id, $user);
                $room_id = intval($this->run_sql($sql, $data_array));
            }

            if ( ! empty($room_id)) {
                $sql = "INSERT INTO `rows` VALUES (NULL, 'Default Row', ?, ?, 'The default entry for a row at this location.', '', '', '', ?, NOW())";
                $data_array = array($data->org_id, $room_id, $user);
                $this->run_sql($sql, $data_array);
            }

            return intval($id);
        } else {
            return false;
        }
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read($id = 0)
    {
        $id = intval($id);
        $sql = 'SELECT `locations`.*, `orgs`.`id` AS `orgs.id`, `orgs`.`name` AS `orgs.name`, `clouds`.`id` AS `clouds.id`, `clouds`.`name` AS `clouds.name` FROM `locations` LEFT JOIN `orgs` ON (`orgs`.`id` = `locations`.`org_id`) LEFT JOIN `clouds` ON (`locations`.`cloud_id` = `clouds`.`id`) WHERE `locations`.`id` = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'locations');
        return ($result);
    }

    /**
     * Delete an individual item from the database, by ID.
     * NOTE - All descendants will also be deleted (buildings, floors, rooms, rows) 
     *        because of the foreign keys in the database schema
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = 0)
    {
        $id = intval($id);
        if ($id === 1) {
            // never allowed to delete the default location
            log_error('ERR-0013', 'm_locations::delete');
            return false;
        }
        $sql = 'DELETE FROM `locations` WHERE id = ?';
        $data = array($id);
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Read the associated items children from the DB by ID
     * 
     * @param  int|integer $id [description]
     * @return [type]          [description]
     */
    public function children($id = 0)
    {
        $id = intval($id);
        $sql = 'SELECT buildings.*, orgs.name AS `orgs.name`, locations.name as `locations.name`, count(floors.id) as `floors_count` FROM `buildings` LEFT JOIN orgs ON (buildings.org_id = orgs.id) LEFT JOIN locations ON (locations.id = buildings.location_id) LEFT JOIN floors ON (floors.building_id = buildings.id) WHERE buildings.location_id = ? GROUP BY buildings.id';
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'buildings');
        return ($result);
    }

    /**
     * [sub_resource description]
     * @param  integer $id [description]
     * @return [type]      [description]
     */
    public function sub_resource($id = 0)
    {
        $id = intval($id);
        $sql = 'SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.description AS `system.description`, system.os_family AS `system.os_family`, system.status AS `system.status` FROM system WHERE system.location_id = ?';
        $data = array((string)$id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'devices');
        return $result;
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id)));
        $sql = 'SELECT COUNT(id) AS `count` FROM locations WHERE org_id IN (' . implode(',', $org_list) . ')';
        $result = $this->run_sql($sql, array());
        return intval($result[0]->count);
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
            $sql = 'SELECT locations.*, orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM locations LEFT JOIN orgs ON (locations.org_id = orgs.id) WHERE locations.org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'locations');
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, COUNT(DISTINCT system.id) AS `device_count` FROM `locations` LEFT JOIN orgs ON (locations.org_id = orgs.id) LEFT JOIN system ON (locations.id = system.location_id) " .
                $CI->response->meta->internal->filter .
                ' GROUP BY locations.id ' .
                $CI->response->meta->internal->sort  . ' ' .
                $CI->response->meta->internal->limit;

            if ( ! empty($CI->response->meta->requestor)) {
                $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, COUNT(DISTINCT system.id) AS `device_count` FROM `locations` LEFT JOIN orgs ON (locations.org_id = orgs.id) LEFT JOIN system ON (locations.id = system.location_id AND system.oae_manage = 'y') " .
                    $CI->response->meta->internal->filter .
                    ' GROUP BY locations.id ' .
                    $CI->response->meta->internal->sort  . ' ' .
                    $CI->response->meta->internal->limit;
            }
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'locations');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'locations';
        $CI->temp_dictionary->link = str_replace('$collection', $collection, $CI->temp_dictionary->link);
        $this->load->helper('collections');

        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->about = '';
        $dictionary->marketing = '';
        $dictionary->notes = '';
        $dictionary->columns = new stdClass();
        $dictionary->attributes = new stdClass();
        $dictionary->attributes->fields = $this->db->list_fields($collection);
        $dictionary->attributes->create = mandatory_fields($collection);
        $dictionary->attributes->update = update_fields($collection);
        $dictionary->sentence = 'Open-AudIT Professional and Enterprise leverage Google Maps to provide live, interactive geographic mapping of device location.';
        $dictionary->marketing = '<p>A location is a physical address that can have devices associated with it.<br /><br />You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>A location is a physical address that can have devices associated with it.<br /><br />You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->notes = '<p>The <code>type</code> of the location will assign its icon.<br /><br /></p>';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->type = 'What is the type of this location.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_locations.php
// Location: ./models/m_locations.php
