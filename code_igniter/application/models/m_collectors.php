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
* @package   Collectors
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Collectors
*
* @access   public
* @category Model
* @package  Collectors
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_collectors extends MY_Model
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
        $sql = 'SELECT collectors.*, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, users.id AS `users.id`, users.name AS `users.name` FROM `collectors` LEFT JOIN orgs ON (collectors.org_id = orgs.id)  LEFT JOIN `users` ON (collectors.user_id = users.id) WHERE collectors.id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'collectors');
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
        $sql = 'DELETE FROM `collectors` WHERE `id` = ?';
        $data = array($id);
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Upsert an individual item in the database
     *
     * @return null
     */
    public function upsert()
    {
        $CI = & get_instance();
        $sql = '/* m_collectors::upsert */ ' . 'SELECT * FROM `collectors` WHERE uuid = ?';
        $query = $this->db->query($sql, array($CI->input->post('uuid')));
        $CI->response->meta->sql[] = $this->db->last_query();
        $result = $query->result();
        if ( ! empty($result)) {
            if ($result[0]->ip !== $_SERVER['REMOTE_ADDR']) {
                log_error('ERR-0031', current_url());
                $CI->response->errors[0]->detail = 'A collector can only log in from a single IP address. Supplied IP (' . $_SERVER['REMOTE_ADDR'] . ') does not match IP on record (' . $result[0]->ip . ').';
                return;
            }
            $sql = '/* m_collectors::upsert */ ' . "UPDATE `collectors` SET `status` = 'pending' WHERE id = " . $result[0]->id;
            $query = $this->db->query($sql);
            $CI->response->meta->sql[] = $this->db->last_query();
            $result[0]->status = 'pending';
            unset($result[0]->password);
            $return = array();
            foreach ($result as $entry) {
                $item = new stdClass();
                $item->id = intval($entry->id);
                $item->type = 'collectors';
                $item->attributes = $entry;
                $item->links = new stdClass();
                $item->links->self = $this->config->config['base_url'] . 'index.php/collectors/' . $item->id;
                $return[] = $item;
                unset($item);
            }
            $CI->response->data = $return;
            return;
        } else {
            // create our collector item
            $sql = '/* m_collectors::upsert */ ' . 'INSERT INTO `collectors` VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())';
            $temp = @$CI->input->post('collector_name');
            if (empty($temp)) {
                $name = $CI->input->post('username') . ' from ' . $_SERVER['REMOTE_ADDR'];
            } else {
                $name = $CI->input->post('collector_name');
            }
            $description = $CI->input->post('username') . ' from ' . $_SERVER['REMOTE_ADDR'] . ' using ' . $CI->input->post('uuid');
            $data = array($name, intval($CI->user->org_id), $description, (string)$_SERVER['REMOTE_ADDR'], 'created', $this->config->config['collector_check_minutes'], $CI->user->id, $CI->input->post('uuid'), '', 'system');
            $query = $this->db->query($sql, $data);
            $CI->response->meta->sql[] = $this->db->last_query();
            // return this new collector
            $sql = '/* m_collectors::upsert */ ' . 'SELECT * FROM `collectors` WHERE id = ?';
            $query = $this->db->query($sql, array($this->db->insert_id()));
            $CI->response->meta->sql[] = $this->db->last_query();
            $result = $query->result();
            $return = array();
            foreach ($result as $entry) {
                $item = new stdClass();
                $item->id = intval($entry->id);
                $item->type = 'collectors';
                $item->attributes = $entry;
                $item->links = new stdClass();
                $item->links->self = $this->config->config['base_url'] . 'index.php/collectors/' . $item->id;
                $return[] = $item;
                unset($item);
            }
            $CI->response->data = $return;
            return;
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
            $sql = 'SELECT * FROM collectors WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'collectors');
            return $result;
        }
        if ( ! empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = 'SELECT ' . $CI->response->meta->internal->properties . ', orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, users.id AS `users.id`, users.name AS `users.name` FROM collectors LEFT JOIN orgs ON (collectors.org_id = orgs.id) LEFT JOIN users ON (collectors.user_id = users.id) ' . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'collectors');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }
}
// End of file m_collectors.php
// Location: ./models/m_collectors.php
