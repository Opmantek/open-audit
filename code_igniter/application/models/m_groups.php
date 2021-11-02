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
* @package   Groups
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Groups
*
* @access   public
* @category Model
* @package  Groups
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_groups extends MY_Model
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
        if ( ! empty($data->sql)) {
            if (stripos($data->sql, 'update ') !== false OR stripos($data->sql, 'update`') !== false) {
                log_error('ERR-0045', 'm_groups::create', 'SQL cannot contain UPDATE clause');
                return false;
            }
            if (stripos($data->sql, 'delete from ') !== false OR stripos($data->sql, 'delete from`') !== false) {
                log_error('ERR-0045', 'm_groups::create', 'SQL cannot contain DELETE clause.');
                return false;
            }
            if (stripos($data->sql, 'insert into ') !== false OR stripos($data->sql, 'insert into`') !== false) {
                log_error('ERR-0045', 'm_groups::create', 'SQL cannot contain INSERT clause.');
                return false;
            }
        }
        if ($id = $this->insert_collection('groups', $data)) {
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
        $sql = 'SELECT * FROM groups WHERE id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'groups');
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
        $data = array(intval($id));
        if ($id === 1) {
            // never allowed to delete the default group
            log_error('ERR-0013', 'm_groups::delete');
            return false;
        }
        $sql = 'DELETE FROM `groups` WHERE id = ?';
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
    }

    public function execute_count($id = 0)
    {
        $CI = & get_instance();
        $sql = 'SELECT * FROM groups WHERE id = ? LIMIT 1';
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        if ( ! empty($result) && is_array($result)) {
            $group = $result[0];
            // below accounts for queries that end in a ; and/or a CR or spaces, etc
            // when we add on LIMIT = 12345, it will break unless we strip those characters
            $sql = trim($group->sql);
            if (strpos($sql, ';') === strlen($sql)-1) {
                $sql = substr($sql, 0, strlen($sql)-1);
                $sql = trim($sql);
            }
            $filter = "system.org_id IN ({$CI->user->org_list})";
            if ( ! empty($CI->response->meta->requestor)) {
                $filter = "system.org_id IN ({$CI->user->org_list}) AND system.oae_manage = 'y'";
            }
            $sql = str_ireplace('WHERE @filter', "WHERE {$filter}", $sql);
            $result = $this->run_sql($sql, array());
        }
        return count($result);
    }

    /**
     * Run the SQL definition and return the provided properties OR the system.id list
     * @param  integer $id         The ID of the group
     * @param  string  $properties A string list of comma seperated properties
     * @return array              An array of standard formatted devices, or an empty array
     */
    public function execute($id = 0, $properties = '')
    {
        $CI = & get_instance();
        $sql = 'SELECT * FROM groups WHERE id = ? LIMIT 1';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if ( ! empty($result) && is_array($result)) {
            $group = $result[0];
            // below accounts for queries that end in a ; and/or a CR or spaces, etc
            // when we add on LIMIT = 12345, it will break unless we strip those characters
            $sql = trim($group->sql);
            if (strpos($sql, ';') === strlen($sql)-1) {
                $sql = substr($sql, 0, strlen($sql)-1);
                $sql = trim($sql);
            }
            if ($properties === '') {
                $sql = str_ireplace('SELECT DISTINCT(system.id) FROM system', 'SELECT DISTINCT(system.id) AS `system.id` FROM system', $sql);
            } else {
                $properties_array = explode(',', $properties);
                $properties_new_array = array();
                foreach ($properties_array as $property) {
                    $properties_new_array[] = "{$property} AS `{$property}`";
                }
                $properties = implode(', ', $properties_new_array);
                $sql = str_ireplace('SELECT DISTINCT(system.id) FROM system', "SELECT {$properties} FROM system", $sql);
            }
            $filter = "system.org_id IN ({$CI->user->org_list})";
            if ( ! empty($CI->response->meta->requestor)) {
                $filter = "system.org_id IN ({$CI->user->org_list}) AND system.oae_manage = 'y'";
            }
            $sql = str_ireplace('WHERE @filter', "WHERE {$filter}", $sql);
            $sql .= ' ' . $CI->response->meta->internal->groupby . ' ' .
                    $CI->response->meta->internal->sort . ' ' .
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'devices');
        }
        if (empty($result)) {
            return array();
        } else {
            return $result;
        }
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = implode(',', array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id))));
        $sql = "SELECT COUNT(id) AS `count` FROM groups WHERE org_id IN ({$org_list})";
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
            $org_list = implode(',', array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id))));
            $sql = "SELECT * FROM groups WHERE org_id IN ({$org_list})";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'groups');
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM `groups` LEFT JOIN `orgs` ON (`groups`.`org_id` = `orgs`.`id`) " .
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'groups');
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
        $collection = 'groups';
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
        $dictionary->sentence = 'Easily group together devices for simple reporting. Open-AudIT provides more than a dozen groups out of the box and makes it simple to create more.';
        $dictionary->marketing = "<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of system.id's only. If requested using the web interface, they return the standard column attribute list.<br /><br />" . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = "<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of system.id's only. If requested using the web interface, they return the standard column attribute list.<br /><br />" . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'community';
        $dictionary->notes = '<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(system.id)</code>.<br /><br />The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br /><br />An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.os_family = \'Debian\'</code><br /><br /></p>';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->sql = 'Your SQL to select devices that will populate this group.';
        $dictionary->columns->link = 'unused';
        $dictionary->columns->expose = 'Should we expose this group in the web interface.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_groups.php
// Location: ./models/m_groups.php
