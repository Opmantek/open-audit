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
* @version   GIT: Open-AudIT_4.3.2
* @link      http://www.open-audit.org
*/

/**
* Base Model Racks
*
* @access   public
* @category Model
* @package  Racks
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_racks extends MY_Model
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
        if ($id = $this->insert_collection('racks', $data)) {
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
        $sql = 'SELECT racks.*, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, rows.id AS `rows.id`, `rows`.`name` as `rows.name`, rooms.id AS `rooms.id`, rooms.name as `rooms.name`, floors.id AS `floors.id`, floors.name as `floors.name`, buildings.id AS `buildings.id`, buildings.name as `buildings.name`, locations.id AS `locations.id`, locations.name as `locations.name`, count(rack_devices.id) as `rack_devices_count`, SUM(rack_devices.height) AS `used`, COALESCE(racks.ru_height, 0) - COALESCE(SUM(rack_devices.height), 0) AS `free` FROM `racks` LEFT JOIN orgs ON (racks.org_id = orgs.id) LEFT JOIN `rows` ON (`rows`.`id` = racks.row_id) LEFT JOIN rooms ON (rooms.id = `rows`.`room_id`) LEFT JOIN floors ON (floors.id = rooms.floor_id) LEFT JOIN buildings ON (buildings.id = floors.building_id) LEFT JOIN locations ON (locations.id = buildings.location_id) LEFT JOIN rack_devices ON (rack_devices.rack_id = racks.id) WHERE racks.id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'racks');
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
        $data = array(intval($id));
        $sql = 'DELETE FROM `racks` WHERE `id` = ?';
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
        $sql = 'SELECT `rows`.* FROM `rows`, racks WHERE `rows`.`id` = `racks`.`row_id` AND `racks`.`id` = ?';
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'rows');
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
        $sql = 'SELECT rack_devices.*, orgs.name AS `orgs.name`, racks.name as `racks.name`, racks.id as `racks.id`, 0 as `system_count`, rows.name as `rows.name`, rooms.name as `rooms.name`, floors.name as `floors.name`, buildings.name as `buildings.name`, locations.name as `locations.name`, image.filename as `image.filename`, system.name as `system.name`, system.ip as `system.ip`, system.type as `system.type`, system.id as `system.id`, system.icon as `system.icon` FROM `rack_devices` LEFT JOIN orgs ON (orgs.id = rack_devices.org_id) LEFT JOIN racks ON (racks.id = rack_devices.rack_id) LEFT JOIN `rows` ON (`rows`.`id` = racks.row_id) LEFT JOIN rooms ON (rooms.id = `rows`.`room_id`) LEFT JOIN floors ON (floors.id = rooms.floor_id) LEFT JOIN buildings ON (buildings.id = floors.building_id) LEFT JOIN locations ON (locations.id = buildings.location_id) LEFT JOIN image ON (image.system_id = rack_devices.system_id and image.orientation = "front") LEFT JOIN system ON (system.id = rack_devices.system_id) WHERE rack_devices.rack_id = ? GROUP BY rack_devices.id';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'rack_devices');
        return ($result)    ;
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id)));
        $sql = 'SELECT COUNT(id) AS `count` FROM racks WHERE org_id IN (' . implode(',', $org_list) . ')';
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
            $sql = 'SELECT * FROM racks WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'racks');
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = 'SELECT ' . $CI->response->meta->internal->properties . ', count(rack_devices.id) as `rack_devices_count`, SUM(rack_devices.height) AS `used`, COALESCE(racks.ru_height, 0) - COALESCE(SUM(rack_devices.height), 0) AS `free`,
                rows.id AS `rows.id`, rows.name as `rows.name`,
                rooms.id AS `rooms.id`, rooms.name as `rooms.name`,
                floors.id AS `floors.id`, floors.name as `floors.name`,
                buildings.id AS `buildings.id`, buildings.name as `buildings.name`,
                locations.id AS `locations.id`, locations.name as `locations.name`,
                orgs.id AS `orgs.id`, orgs.name AS `orgs.name`
                FROM `racks`
                LEFT JOIN `rack_devices` ON (rack_devices.rack_id = racks.id)
                LEFT JOIN `rows` ON (rows.id = racks.row_id)
                LEFT JOIN `rooms` ON (rooms.id = rows.room_id)
                LEFT JOIN `floors` ON (floors.id = rooms.floor_id)
                LEFT JOIN `buildings` ON (buildings.id = floors.building_id)
                LEFT JOIN `locations` ON (locations.id = buildings.location_id)
                LEFT JOIN `orgs` ON (racks.org_id = orgs.id) ' .
                $CI->response->meta->internal->filter . ' ' .
                ' GROUP BY racks.id ' .
                $CI->response->meta->internal->sort . ' ' .
                $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'racks');
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
        $collection = 'racks';
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
        $dictionary->sentence = 'Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.';
        $dictionary->marketing = '<p>Your racks help refine exactly where your devices are located.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>Your racks help refine exactly where your devices are located.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'enterprise';
        $dictionary->notes = '<p>Your racks help refine exactly where your devices are located.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->row_id = 'The row the rack is located in. Links to <code>rows.id</code>.';
        $dictionary->columns->row_position = 'The height of this rack in rack units.';
        $dictionary->columns->pod = 'The pod (if any) that this rack is part of.';
        $dictionary->columns->physical_height = 'The physical height (in CMs) of the rack.';
        $dictionary->columns->physical_width = 'The physical width (in CMs) of the rack.';
        $dictionary->columns->physical_depth = 'The physical depth (in CMs) of the rack.';
        $dictionary->columns->weight_empty = 'The physical weight (in KGs) of the rack when empty.';
        $dictionary->columns->weight_current = 'The physical weight (in KGs) of the rack at present.';
        $dictionary->columns->weight_max = 'The maximum physical weight (in KGs) this rack can hold.';
        $dictionary->columns->ru_start = 'The starting RU number this device occupies.';
        $dictionary->columns->ru_height = 'How many rack units in height is this rack.';
        $dictionary->columns->type = 'The type of rack (compute, power, network, etc).';
        $dictionary->columns->purpose = 'What is the purpose of this rack.';
        $dictionary->columns->manufacturer = 'Who made this rack.';
        $dictionary->columns->model = 'The rack model.';
        $dictionary->columns->series = 'The rack series.';
        $dictionary->columns->serial = 'The rack serial.';
        $dictionary->columns->asset_number = 'The rack asset number.';
        $dictionary->columns->asset_tag = 'The rack asset tag.';
        $dictionary->columns->bar_code = 'The rack bar code.';
        $dictionary->columns->power_circuit = 'The power circuit this rack attaches to.';
        $dictionary->columns->power_sockets = 'How many power sockets in this rack.';
        $dictionary->columns->circuit_count = 'How many circuit feed to this rack.';
        $dictionary->columns->btu_total = 'The total BTU output by this rack.';
        $dictionary->columns->btu_max = 'The maximum total BTUs this rack is rated for.';
        $dictionary->columns->options = 'unused';
        $dictionary->columns->notes = 'unused';
        $dictionary->columns->tags = 'unused';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_racks.php
// Location: ./models/m_racks.php
