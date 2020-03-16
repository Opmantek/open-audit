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
* Base Model Rows
*
* @access   public
* @category Model
* @package  Racks
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_rows extends MY_Model
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
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read($id = 0)
    {
        $id = intval($id);
        $sql = 'SELECT `rows`.*, orgs.name AS `orgs.name`, floors.name as `floors.name`, rooms.name as `rooms.name`, buildings.name as `buildings.name`, locations.name as `locations.name`, racks.name as `racks.name`, racks.id as `racks.id`, count(`rows`.`id`) as `rows_count` FROM `rows` LEFT JOIN orgs ON (orgs.id = `rows`.`org_id`) LEFT JOIN racks ON (racks.row_id = `rows`.`id`) LEFT JOIN rooms ON (rooms.id = `rows`.`room_id`) LEFT JOIN floors ON (floors.id = rooms.floor_id) LEFT JOIN buildings ON (buildings.id = floors.building_id) LEFT JOIN locations ON (locations.id = buildings.location_id) WHERE `rows`.`id` = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'rows');
        return ($result);
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = '')
    {
        $id = intval($id);
        $sql = 'DELETE FROM `rows` WHERE `id` = ?';
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
     * @param  int|integer $id [description]
     * @return [type]          [description]
     */
    public function parent($id = '')
    {
        $id = intval($id);
        $sql = 'SELECT `rooms`.* FROM `rooms`, `rows` WHERE `rooms`.`id` = `rows`.`room_id` AND `rows`.`id` = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'rooms');
        return ($result);
    }

    /**
     * Read the associated items children from the DB by ID
     * 
     * @param  int|integer $id [description]
     * @return [type]          [description]
     */
    public function children($id = '')
    {
        $id = intval($id);
        $sql = 'SELECT `racks`.* from `racks` WHERE `racks`.`row_id` = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'racks');
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
            $sql = 'SELECT `rows`.*, rooms.id AS `rooms.id`, rooms.name AS `rooms.name`, orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM `rows` LEFT JOIN rooms ON (rows.room_id = rooms.id) LEFT JOIN orgs ON (`rows`.`org_id` = orgs.id) WHERE orgs.id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'rows');
            return $result;
        }
        if ( ! empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            // Replaced $CI->response->meta->internal->properties with * as rows is now a reserved word and our internal->properties code doesn't ` escape words.
            // $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, rooms.is AS `rooms.id`, rooms.name as `rooms.name`, count(racks.id) as `racks` FROM `rows` LEFT JOIN orgs ON (rows.org_id = orgs.id) LEFT JOIN rooms ON (rows.room_id = rooms.id) LEFT JOIN racks ON (rows.id = racks.row_id) " .
            $sql = 'SELECT `rows`.*, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, rooms.is AS `rooms.id`, rooms.name as `rooms.name`, count(racks.id) as `racks` FROM `rows` LEFT JOIN orgs ON (rows.org_id = orgs.id) LEFT JOIN rooms ON (rows.room_id = rooms.id) LEFT JOIN racks ON (rows.id = racks.row_id) ' .
                    $CI->response->meta->internal->filter . ' ' .
                    'GROUP BY rows.id ' .
                    $CI->response->meta->internal->sort . ' ' .
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'rows');
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
        $collection = 'rows';
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
        $dictionary->sentence = 'Define your rows and assign them to a room of your choosing.';
        $dictionary->marketing = '<p>Your rows help refine exactly where your racks are located.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>Your rows help refine exactly where your racks are located.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->notes = '<p></p>';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->room_id = 'The room the rack is located in.';
        $dictionary->columns->options = 'Not implemented as yet.';
        $dictionary->columns->notes = 'Not implemented as yet.';
        $dictionary->columns->tags = 'Not implemented as yet.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_rows.php
// Location: ./models/m_rows.php
