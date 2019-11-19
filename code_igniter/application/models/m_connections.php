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
* @version   GIT: Open-AudIT_3.3.0
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
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read(int $id = 0)
    {
        $sql = 'SELECT * FROM `connections` WHERE `id` = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'connections');
        return ($result);
    }

    /**
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete(int $id = 0)
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
            $sql = 'SELECT * FROM connections WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'connections');
            return $result;
        }
        if ( ! empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = 'SELECT ' . $CI->response->meta->internal->properties . ', orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM connections LEFT JOIN orgs ON (connections.org_id = orgs.id) ' . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            // Add in locations.name for location_name_a and _b
            if (is_array($result)) {
                $CI->load->model('m_locations');
                $locations = $CI->m_locations->collection($CI->user->id);
                for ($i=0; $i < count($result); $i++) {
                    $result[$i]->location_id_a = intval($result[$i]->location_id_a);
                    $result[$i]->location_id_b = intval($result[$i]->location_id_b);
                    $result[$i]->location_name_a = '';
                    $result[$i]->location_name_b = '';
                    foreach ($locations as $location) {
                        if (intval($location->id) === intval($result[$i]->location_id_a)) {
                            $result[$i]->location_name_a = $location->attributes->name;
                        }
                        if (intval($location->id) === intval($result[$i]->location_id_b)) {
                            $result[$i]->location_name_b = $location->attributes->name;
                        }
                    }
                }
            }
            // Add in device names for system_id_a and _b
            if (is_array($result)) {
                for ($i=0; $i < count($result); $i++) {
                    $result[$i]->system_id_a = intval($result[$i]->system_id_a);
                    $result[$i]->system_id_b = intval($result[$i]->system_id_b);
                    if ( ! empty($result[$i]->system_id_a)) {
                        $sql = 'SELECT `name` FROM system WHERE id = ' . $result[$i]->system_id_a;
                        $query = $this->db->query($sql);
                        $result = $query->result();
                        if ( ! empty($result[0]->name)) {
                            $result[$i]->system_name_a = $result[0]->name;
                        }
                    }
                    if ( ! empty($result[$i]->system_id_b)) {
                        $sql = 'SELECT `name` FROM system WHERE id = ' . $result[$i]->system_id_b;
                        $query = $this->db->query($sql);
                        $result = $query->result();
                        if ( ! empty($result[0]->name)) {
                            $result[$i]->system_name_b = $result[0]->name;
                        }
                    }
                }
            }
            $CI->response->data = $this->format_data($result, 'connections');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }
}
// End of file m_connections.php
// Location: ./models/m_connections.php
