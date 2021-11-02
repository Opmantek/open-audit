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
* @version   GIT: Open-AudIT_4.3.0
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
     * Create an individual item in the database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data = null)
    {
        if ( ! empty($data->credentials) && is_string($data->credentials)) {
            $data->credentials = (string)simpleEncrypt($data->credentials);
        } else {
            $data->credentials = (string)simpleEncrypt(json_encode($data->credentials));
        }
        if ($id = $this->insert_collection('credentials', $data)) {
            return intval($id);
        } else {
            return false;
        }
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
        $data = array(intval($id));
        $sql = 'DELETE FROM `credentials` WHERE id = ?';
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
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
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = $CI->m_orgs->get_user_all($CI->user->id);
        $sql = 'SELECT COUNT(id) AS `count` FROM credentials WHERE org_id IN (' . implode(',', $org_list) . ')';
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
            $CI->response->meta->total = $this->count();
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
                    }
                }
            }
            $CI->response->data = $this->format_data($result, 'credentials');
            $CI->response->meta->filtered = count($CI->response->data);

            if (php_uname('s') === 'Windows NT') {
                $security_names = array();
                $multiple = false;
                foreach ($CI->response->data as $credential) {
                    if ($credential->attributes->type === 'snmp_v3') {
                        $security_names[] = $credential->attributes->credentials->security_name;
                    }
                }
                $counts = array_count_values($security_names);
                foreach ($counts as $key => $value) {
                    if ($value > 1) {
                        $multiple = true;
                    }
                }
                if ($multiple) {
                    $error_message = "You have multiple SNMPv3 credential sets with the same security name. Please see <a href=\"https://community.opmantek.com/display/OA/SNMPv3+and+Windows\" target=\"_blank\">the wiki</a>.";
                    $CI->response->meta->flash = new stdClass();
                    $CI->response->meta->flash->status = 'warning';
                    $CI->response->meta->flash->message = $error_message;
                    $CI->response->meta->flash->html = 1;
                }
            }
        }
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'credentials';
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
        $dictionary->sentence = 'Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.';
        $dictionary->marketing = '<p>Credentials are used to access devices.<br /><br />The only supplied credential is that of SNMP public.<br /><br />Configuring credentials should be one of the first things you do after installing Open-AudIT.<br /><br /></p>';
        $dictionary->about = '<p>Credentials are used to access devices.<br /><br />The only supplied credential is that of SNMP public.<br /><br />Configuring credentials should be one of the first things you do after installing Open-AudIT.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'community';
        $dictionary->notes = '<p>Credentials are encrypted when stored in the database.<br /><br />When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br /><br />SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br /><br />For ease of use, Windows passwords should not contain a \' or ". This is a remote WMI limitation, not an Open-AudIT limitation.<br /><br /></p>';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->type = 'Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.';
        $dictionary->columns->credentials = 'An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_credentials.php
// Location: ./models/m_credentials.php
