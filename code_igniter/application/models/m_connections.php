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
* @package   Connections
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.5.2
* @link      http://www.open-audit.org
*/

/**
* Base Model Connections
*
* @access   public
* @category Model
* @package  Connections
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_connections extends MY_Model
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
     * Create an individual item in the database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data = null)
    {
        if ($id = $this->insert_collection('connections', $data)) {
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
        $sql = 'SELECT connections.*, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, loc_a.name AS `location_name_a`, loc_b.name AS `location_name_b`, sys_a.hostname as `system_hostname_a`, sys_b.hostname AS `system_hostname_b` FROM connections LEFT JOIN orgs ON (connections.org_id = orgs.id) LEFT JOIN locations loc_a ON (connections.location_id_a = loc_a.id) LEFT JOIN locations loc_b ON (connections.location_id_b = loc_b.id) LEFT JOIN system sys_a ON (connections.system_id_a = sys_a.id) LEFT JOIN system sys_b ON (connections.system_id_b = sys_b.id)  WHERE connections.id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'connections');
        return ($result);
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = 0)
    {
        $sql = 'DELETE FROM `connections` WHERE `id` = ?';
        $data = array($id);
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id)));
        $sql = 'SELECT COUNT(id) AS `count` FROM connections WHERE org_id IN (' . implode(',', $org_list) . ')';
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
            $sql = 'SELECT * FROM connections WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'connections');
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = 'SELECT ' . $CI->response->meta->internal->properties . ', orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, loc_a.name AS `location_name_a`, loc_b.name AS `location_name_b`, sys_a.hostname as `system_hostname_a`, sys_b.hostname AS `system_hostname_b` FROM connections LEFT JOIN orgs ON (connections.org_id = orgs.id) LEFT JOIN locations loc_a ON (connections.location_id_a = loc_a.id) LEFT JOIN locations loc_b ON (connections.location_id_b = loc_b.id) LEFT JOIN system sys_a ON (connections.system_id_a = sys_a.id) LEFT JOIN system sys_b ON (connections.system_id_b = sys_b.id) ' .
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'connections');
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
        $collection = 'connections';
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
        $dictionary->sentence = 'Track your connections to branch offices, the internet, where-ever else you need to. Simple, easy, intuitive.';
        $dictionary->marketing = '<p>Attributes such as the locations, the speed, provider, connected devices, type of connection and more are available.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'community';
        $dictionary->notes = '';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->provider = 'The ISP or Telco providing this link.';
        $dictionary->columns->service_type = 'ADSL, HFC, ISDN, etc.';
        $dictionary->columns->product_name = 'The name provided by the provider.';
        $dictionary->columns->service_identifier = 'The ID provided by the provider.';
        $dictionary->columns->speed = 'Usually Mb/s.';
        $dictionary->columns->location_id_a = 'The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>.';
        $dictionary->columns->system_id_a = 'The ID from the system table (the system.name will be displayed) of the NTU at this end of the connection. Links to <code>system.id</code>.';
        $dictionary->columns->line_number_a = 'The line number assigned by the provider to the line at this end of the connection.';
        $dictionary->columns->ip_address_external_a = 'The IP of the external interface.';
        $dictionary->columns->ip_address_internal_a = 'The IP of the internal interface.';
        $dictionary->columns->location_id_b = 'The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>.';
        $dictionary->columns->system_id_b = 'The ID from the system table (the system.name will be displayed) of the NTU at this end of the connection. Links to <code>system.id</code>.';
        $dictionary->columns->line_number_b = 'The line number assigned by the provider to the line at this end of the connection.';
        $dictionary->columns->ip_address_external_b = 'The IP of the external interface.';
        $dictionary->columns->ip_address_internal_b = 'The IP of the internal interface.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_connections.php
// Location: ./models/m_connections.php
