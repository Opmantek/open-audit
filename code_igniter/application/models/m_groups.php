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
* @version   GIT: Open-AudIT_3.3.0
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
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id === '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
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
    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if ($id === '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if ($id !== 1) {
            $CI = & get_instance();
            $sql = 'DELETE FROM `groups` WHERE id = ?';
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        } else {
            log_error('ERR-0013', 'm_groups::delete');
            return false;
        }
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
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM groups LEFT JOIN orgs ON (groups.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'groups');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }
}
// End of file m_groups.php
// Location: ./models/m_groups.php
