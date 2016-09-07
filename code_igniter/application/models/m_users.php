<?php
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

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * 
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_users extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private function build_properties()
    {
        $CI = & get_instance();
        $properties = '';
        $temp = explode(',', $CI->response->meta->properties);
        for ($i=0; $i<count($temp); $i++) {
            if (strpos($temp[$i], '.') === false) {
                $temp[$i] = 'oa_user.'.trim($temp[$i]);
            } else {
                $temp[$i] = trim($temp[$i]);
            }
        }
        $properties = implode(',', $temp);
        return($properties);
    }

    private function build_filter()
    {
        $CI = & get_instance();
        $reserved = ' properties limit resource action sort current offset format ';
        $filter = '';
        foreach ($CI->response->meta->filter as $item) {
            if (strpos(' '.$item->name.' ', $reserved) === false) {
                $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
            }
        }
        return($filter);
    }

    public function read($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT oa_user.*, oa_org.name AS `org_name` FROM oa_user LEFT JOIN oa_org ON (oa_user.org_id = oa_org.id) WHERE oa_user.id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'users');
        return ($result);
    }

    public function collection()
    {
        $CI = & get_instance();
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == 'users') {
            $filter = $this->build_filter();
            $properties = $this->build_properties();
            if ($CI->response->meta->sort == '') {
                $sort = 'ORDER BY oa_user.id';
            } else {
                $sort = 'ORDER BY ' . $CI->response->meta->sort;
            }
            if ($CI->response->meta->limit == '') {
                $limit = '';
            } else {
                $limit = 'LIMIT ' . intval($CI->response->meta->limit);
                if ($CI->response->meta->offset != '') {
                    $limit = $limit . ', ' . intval($CI->response->meta->offset);
                }
            }
            # get the total count
            $sql = "SELECT COUNT(*) as `count` FROM `oa_user`";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $result = $query->result();
            if (!empty($CI->response->meta->total)) {
                $CI->response->meta->total = intval($result[0]->count);
            }
        } else {
            $properties = '*';
            $filter = '';
            $sort = '';
            $limit = '';
        }

        if ($filter != '') {
            $filter = substr($filter, 5);
            $filter = ' WHERE oa_org.id IN (' . $this->user->org_list . ') AND ' . $filter;
        } else {
            $filter = ' WHERE oa_org.id IN (' . $this->user->org_list . ')';
        }
        
        # get the response data
        $sql = "SELECT " . $properties . ", oa_org.name AS `org_name` FROM `oa_user` LEFT JOIN oa_org ON (oa_user.org_id = oa_org.id) " . $filter . " " . $sort . " " . $limit;
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'users');
        return ($result);
    }

    public function update()
    {
        #sleep(3);
        $CI = & get_instance();
        $sql = '';
        $fields = ' name permissions password org_id full_name email lang active roles orgs ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($key == 'password') {
                    $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM)); # get 256 random bits in hex
                    $hash = hash("sha256", $salt.$value); # prepend the salt, then hash
                    $value = $salt.$hash;
                }
                if ($key == 'roles') {
                    $value = json_encode($value);
                }
                if ($key == 'orgs') {
                    $value = json_encode($value);
                }
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql .= ", `edited_by` = ?, `edited_date` = NOW()";
        $sql = "UPDATE `oa_user` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql, array((string)$this->user->full_name));
        return;
    }

    public function delete($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if ($id != 0) {
            // attempt to delete the item
            $sql = "DELETE FROM `oa_user` WHERE id = ?";
            $data = array($id);
            $this->run_sql($sql, $data);
            return true;
        } else {
            log_error('ERR-0013', 'm_users::delete');
            return false;
        }
    }

    public function create()
    {
        $CI = & get_instance();
        if (empty($CI->response->meta->received_data->attributes->name)) {
            return false;
        } else {
            $name = $CI->response->meta->received_data->attributes->name;
        }
        $sql = "SELECT COUNT(*) AS `count` FROM oa_user WHERE oa_user.name = ?";
        $data = array("$name");
        $result = $this->run_sql($sql, $data);
        if (intval($result[0]->count) != 0) {
            log_error('ERR-0010', 'm_users::create');
            return false;
        }
        if (empty($CI->response->meta->received_data->attributes->password)) {
            $CI->response->meta->received_data->attributes->password = "";
        }
        $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM)); # get 256 random bits in hex
        $hash = hash("sha256", $salt.$CI->response->meta->received_data->attributes->password); # prepend the salt, then hash
        $password = $salt.$hash;
        $edited_by = $CI->user->full_name;
        if (!isset($this->response->meta->received_data->attributes->roles)) {
            $this->response->meta->received_data->attributes->roles = '';
        }
        $this->response->meta->received_data->attributes->roles = json_encode($this->response->meta->received_data->attributes->roles);
        if (!isset($this->response->meta->received_data->attributes->orgs)) {
            $this->response->meta->received_data->attributes->orgs = '';
        }
        for ($i=0; $i < count($this->response->meta->received_data->attributes->orgs); $i++) {
            $this->response->meta->received_data->attributes->orgs[$i] = intval($this->response->meta->received_data->attributes->orgs[$i]);
        }
        $this->response->meta->received_data->attributes->orgs = json_encode($this->response->meta->received_data->attributes->orgs);
        $sql = "INSERT INTO `oa_user` VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $data = array((string)$name, (string)$password, (string)$this->response->meta->received_data->attributes->full_name,
            (string)$this->response->meta->received_data->attributes->email, intval($this->response->meta->received_data->attributes->org_id),
            (string)$this->response->meta->received_data->attributes->roles, (string)$this->response->meta->received_data->attributes->orgs,
            (string)$this->response->meta->received_data->attributes->lang, (string)$this->response->meta->received_data->attributes->active,
            (string)$this->user->full_name);
        $this->run_sql($sql, $data);
        return $this->db->insert_id();
    }

    public function get_orgs($user_id)
    {
        $user_orgs = json_decode($this->user->orgs);
        $sql = "SELECT * FROM oa_org";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $this->orgs = $query->result();
        $org_id_list = array();
        foreach ($user_orgs as $user_org) {
            $org_id_list[] = intval($user_org);
            foreach ($this->get_org($user_org) as $array2) {
                $org_id_list[] = intval($array2);
            }
        }
        return($org_id_list);
    }

    private function get_org($org_id)
    {
        $org_list = array();
        foreach ($this->orgs as $org) {
            if ($org->parent_id == $org_id and $org->id != 0) {
                $org_list[] = intval($org->id);
                foreach ($this->get_org($org->id) as $org) {
                    $org_list[] = intval($org);
                }
            }
        }
        return($org_list);
    }

    public function get_user_permission($user_id = '', $endpoint = '', $permission = '')
    {
        if ($endpoint == '') {
            return false;
        }
        if ($permission == '') {
            return false;
        }
        $CI = & get_instance();
        if (empty($user_id)) {
            $user_id = @intval($CI->user->id);
            if (empty($user_id)) {
                return false;
            } else {
                $user_roles = $CI->user->roles;
                if (!empty($CI->roles)) {
                    $roles = $CI->roles;
                } else {
                    $CI->load->model('m_roles');
                    $roles = $CI->m_roles->collection();
                }
            }
        } else {
            $user_id = intval($user_id);
            $sql = "SELECT roles FROM oa_user WHERE id = ?";
            $data = array($user_id);
            $result = $this->run_sql($sql, $data);
            $user_roles = json_decode($result[0]->roles);
            $roles = $CI->m_roles->collection();
        }
        if (empty($user_roles)) {
            return false;
        }

        foreach ($user_roles as $user_role) {
            foreach ($roles as $role) {
                if ($role->attributes->name == $user_role) {
                    $permissions = json_decode($role->attributes->permissions);
                    if (!empty($permissions->$endpoint)) {
                        if (stripos($permissions->$endpoint, $permission) !== false) {
                            return true;
                        }
                    }
                }
            }
        }
        //log_error('ERR-0015', $endpoint . ':' . $permission);
        return false;
    }

    public function get_user_collection_org_permission($collection, $id)
    {
        if ($collection == '') {
            return false;
        }
        if ($id == '') {
            return false;
        } else {
            $id = intval($id);
        }

        $CI = & get_instance();
        $user_id = intval($CI->user->id);
        $user_orgs = $CI->user->org_list;

        $org_id_name = 'org_id';
        $table = $collection;
        $id_name = 'id';


        if ($collection == 'connections') {
            $table = 'oa_connection';
        }
        if ($collection == 'devices') {
            $table = 'system';
        }
        if ($collection == 'fields') {
            $table = 'additional_field';
        }
        if ($collection == 'locations') {
            $table = 'oa_location';
        }
        if ($collection == 'orgs') {
            $table = 'oa_org';
            $org_id_name = 'id';
        }
        if ($collection == 'users') {
            $table = 'oa_user';
        }

        if ($table == '') {
            return false;
        }

        $sql = "SELECT $org_id_name AS `org_id` FROM $table WHERE $id_name = ?";
        $data = array(intval($id));
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (count($result) == 0) {
            log_error('ERR-0007', '');
            return false;
        } else {
            $permitted = false;
            $temp = explode(',', str_replace('"', '', $CI->user->org_list));
            foreach ($temp as $key => $value) {
                if ($result[0]->org_id == $value) {
                    $permitted = true;
                }
            }
            if (!$permitted) {
                log_error('ERR-0008', '');
                return false;
            }
        }
        return true;
    }
}
