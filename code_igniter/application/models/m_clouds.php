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
* @package   Clouds
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Clouds
*
* @access   public
* @category Model
* @package  Clouds
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_clouds extends MY_Model
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
        $sql = 'SELECT * FROM `clouds` WHERE `id` = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'clouds');
        if ( ! empty($result[0]->attributes->credentials)) {
            $result[0]->attributes->credentials = json_decode(simpleDecrypt($result[0]->attributes->credentials));
        }
        return ($result);
    }

    /**
     * Update an individual item from the database, by ID
     *
     * @return null
     */
    function update()
    {
        $CI = & get_instance();
        $sql = 'UPDATE `clouds` SET ';
        $data = array();
        if ( ! empty($CI->response->meta->received_data->attributes->credentials)) {
            $received_credentials = new stdClass();
            foreach ($CI->response->meta->received_data->attributes->credentials as $key => $value) {
                    $received_credentials->$key = $value;
            }
            $select = 'SELECT * FROM clouds WHERE id = ?';
            $existing_credentials = $this->run_sql($select, array($CI->response->meta->id));
            $existing_credentials = json_decode(simpleDecrypt($existing_credentials[0]->credentials));
            $new_credentials = new stdClass();
            foreach ($existing_credentials as $key => $value) {
                if ( ! empty($received_credentials->$key)) {
                    $new_credentials->$key = $received_credentials->$key;
                } else {
                    $new_credentials->$key = $existing_credentials->$key;
                }
            }
            $sql .= '`credentials` = ?, ';
            $data[] = (string)simpleEncrypt(json_encode($new_credentials));
        }
        
        if ( ! empty($CI->response->meta->received_data->attributes->name)) {
            $sql .= '`name` = ?, ';
            $data[] = $CI->response->meta->received_data->attributes->name;
        }

        if ( ! empty($CI->response->meta->received_data->attributes->description)) {
            $sql .= '`description` = ?, ';
            $data[] = $CI->response->meta->received_data->attributes->description;
        }

        if ( ! empty($CI->response->meta->received_data->attributes->org_id)) {
            $sql .= '`org_id` = ?, ';
            $data[] = $CI->response->meta->received_data->attributes->org_id;
        }

        if ($sql === 'UPDATE `credentials` SET ') {
            // TODO - THROW AN ERROR, no credentials or name or description supplied for updating
        }
        $sql .= ' `edited_by` = ?, `edited_date` = NOW() WHERE id = ?';
        $data[] = (string)$CI->user->full_name;
        $data[] = intval($CI->response->meta->id);
        $this->run_sql($sql, $data);
        return;
    }

    /**
     * Read the associated items from the DB by ID
     *
     * @param  int $id The ID of the cloud
     * @return array The array of cloud_logs associated with this cloud
     */
    public function read_sub_resource(int $id = 0)
    {
        $sql = 'SELECT * FROM cloud_log WHERE cloud_id = ? ORDER BY `id` LIMIT ' . $this->config->config['database_show_row_limit'];
        $result = $this->run_sql($sql, array($id));
        $result = $this->format_data($result, 'cloud_log');
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
        $sql = 'DELETE FROM `clouds` WHERE `id` = ?';
        $data = array($id);
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
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
            $sql = 'SELECT * FROM clouds WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'clouds');
            return $result;
        }
        if ( ! empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = 'SELECT ' . $CI->response->meta->internal->properties . ', orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM clouds LEFT JOIN orgs ON (clouds.org_id = orgs.id) ' . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'clouds');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }
}
// End of file m_clouds.php
// Location: ./models/m_clouds.php
