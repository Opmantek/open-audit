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
* @package   Credentials
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Credentials
*
* @access   public
* @category Model
* @package  Credentials
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_credentials extends MY_Model
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
        $this->load->library('encrypt');
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  string $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();

        if (empty($id)) {
            $id = @intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if (empty($id)) {
            return null;
        }

        $sql = 'SELECT * FROM credentials WHERE id = ?';
        $result = $this->run_sql($sql, array($id));
        if ( ! empty($result[0]->credentials)) {
            $result[0]->credentials = json_decode(simpleDecrypt($result[0]->credentials));
        }
        $result = $this->format_data($result, 'credentials');
        if ( ! empty($result[0])) {
            return($result);
        } else {
            return null;
        }
    }

    /**
     * [update description]
     * @return [type] [description]
     */
    public function update()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';
        $CI = & get_instance();

        $sql = 'UPDATE `credentials` SET ';
        $data = array();

        if ( ! empty($CI->response->meta->received_data->attributes->credentials)) {
            $received_credentials = new stdClass();
            foreach ($CI->response->meta->received_data->attributes->credentials as $key => $value) {
                    $received_credentials->$key = $value;
            }
            $select = 'SELECT * FROM credentials WHERE id = ?';
            $existing_credentials = $this->run_sql($select, array($CI->response->meta->id));
            $existing_credentials = json_decode(simpleDecrypt($existing_credentials[0]->credentials));

            $new_credentials = new stdClass();
            foreach ($existing_credentials as $existing_key => $existing_value) {
                if ( ! empty($received_credentials->$existing_key)) {
                    $new_credentials->$existing_key = $received_credentials->$existing_key;
                } else {
                    $new_credentials->$existing_key = $existing_credentials->$existing_key;
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
        } else {
            $sql .= ' `edited_by` = ?, `edited_date` = NOW() WHERE id = ?';
            $data[] = (string)$CI->user->full_name;
            $data[] = intval($CI->response->meta->id);
            $this->run_sql($sql, $data);
        }
        return;
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool true
     */
    public function delete($id = 0)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if (empty($id)) {
            $id = @intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if (empty($id)) {
            return false;
        }
        $CI = & get_instance();
        $sql = 'DELETE FROM `credentials` WHERE id = ?';
        $data = array($id);
        $this->run_sql($sql, $data);
        return true;
    }

    /**
     * [get_discovery_credentials description]
     * @param  [type] $discovery_id [description]
     * @return [type]               [description]
     */
    public function get_discovery_credentials($discovery_id = null)
    {
        // Get the credentials of all orgs with discoveries.org_id and
        //     that Orgs descendants and ascendants (no siblings or other parts of the tree).
        if (empty($discovery_id)) {
            return array();
        }
        $CI = & get_instance();
        $sql = "SELECT org_id FROM discoveries WHERE discovery_id = {$discovery_id}";
        $query = $this->db->query();
        $result = $query->result;
        if (empty($result)) {
            return array();
        }
        $org_id = $result[0]->org_id;
        $org_list = array();
        $org_list[] = $org_id;
        $org_list = array_merge($org_list, $CI->m_orgs->get_children($org_id));
        $org_list = array_merge($org_list, $CI->m_orgs->get_ascendants($org_id));
        $org_list = array_unique($org_list);

        $sql = 'SELECT * FROM credentials WHERE org_id IN (' . implode(',', $org_list) . ')';
        $result = $this->run_sql($sql, array());
        for ($i=0; $i < count($result); $i++) {
            if ( ! empty($result[$i]->credentials)) {
                $result[$i]->credentials = json_decode(simpleDecrypt($result[$i]->credentials));
                if ( ! empty($result[$i]->credentials)) {
                    foreach ($result[$i]->credentials as $key => $value) {
                        $result[$i]->{'credentials.'.$key} = $value;
                    }
                }
            }
        }
        return $result;
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
            $org_list = $CI->m_orgs->get_user_all($user_id);
            $sql = 'SELECT * FROM credentials WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            for ($i=0; $i < count($result); $i++) {
                if ( ! empty($result[$i]->credentials)) {
                    $result[$i]->credentials = json_decode(simpleDecrypt($result[$i]->credentials));
                    if ( ! empty($result[$i]->credentials)) {
                        foreach ($result[$i]->credentials as $key => $value) {
                            $result[$i]->{'credentials.'.$key} = $value;
                        }
                    }
                }
            }
            $result = $this->format_data($result, 'credentials');
            return $result;
        }
        if ( ! empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM credentials LEFT JOIN orgs ON (credentials.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            if ( ! empty($result) && is_array($result)) {
                for ($i=0; $i < count($result); $i++) {
                    if ( ! empty($result[$i]->credentials)) {
                        $result[$i]->credentials = json_decode(simpleDecrypt($result[$i]->credentials));
                        if ( ! empty($result[$i]->credentials)) {
                            foreach ($result[$i]->credentials as $key => $value) {
                                $result[$i]->{'credentials.'.$key} = $value;
                            }
                        }
                    }
                }
            }
            $CI->response->data = $this->format_data($result, 'credentials');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }
}
// End of file m_credentials.php
// Location: ./models/m_credentials.php
