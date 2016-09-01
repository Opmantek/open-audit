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

    private function build_properties() {
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

    private function build_filter() {
        $CI = & get_instance();
        $reserved = ' properties limit resource action sort current offset format ';
        $filter = '';
        foreach ($CI->response->meta->filter as $item) {
            if (strpos(' '.$item->name.' ', $reserved) === false) {
                $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
            }
        }
        if ($filter != '') {
            $filter = substr($filter, 5);
            $filter = ' WHERE ' . $filter;
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
        $sql = "SELECT * FROM oa_user WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'users');
        return ($result);
    }

    // public function read_sub_resource($id = '')
    // {
    //     if ($id == '') {
    //         $CI = & get_instance();
    //         $id = intval($CI->response->meta->id);
    //     } else {
    //         $id = intval($id);
    //     }
    //     $sql = "SELECT `type`, count(`system`.`id`) as `count`, org_id FROM `system` WHERE system.org_id = ? AND system.status = 'production' GROUP BY `system`.`type`";
    //     $data = array($id);
    //     $result = $this->run_sql($sql, $data);
    //     if (count($result) == 0) {
    //         return false;
    //     } else {
    //         $result = $this->format_data($result, 'devices');
    //         return ($result);
    //     }
    // }

    public function collection()
    {
        $CI = & get_instance();
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == 'users') {
            $filter = $this->build_filter();
            $properties = $this->build_properties();
            if ($CI->response->meta->sort == '') {
                $sort = 'ORDER BY id';
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
        # get the response data
        $sql = "SELECT " . $properties . " FROM `oa_user` " . $filter . " " . $sort . " " . $limit;
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'users');
        return ($result);
    }

    public function update()
    {
        $CI = & get_instance();
        $sql = '';
        $fields = ' name permissions ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `oa_user` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql, array());
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
            // // do NOT allow deleting the default users
            // $sql = "SELECT name FROM oa_user WHERE id = ?";
            // $data = array($id);
            // $result = $this->run_sql($sql, $data);
            // if ($result[0]->name == 'admin' or $result[0]->name == 'org_admin' or $result[0]->name == 'reporter' or $result[0]->name == 'user') {
            //     log_error('ERR-0013', 'm_roles::delete');
            //     return false;
            // }
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

        // $permissions = new stdClass();
        // if (empty($CI->response->meta->received_data->attributes->permissions)) {
        //     $permissions = '';
        // } else {
        //     foreach ($CI->response->meta->received_data->attributes->permissions as $endpoint => $object) {
        //         $permissions->{$endpoint} = '';
        //         foreach ($object as $key => $value) {
        //             $permissions->{$endpoint} .= $key;
        //         }
        //     }
        //     $permissions = json_encode($permissions);
        // }


        if (empty($CI->user->name)) {
            $user = '';
        } else {
            $user = $CI->user->name;
        }
        $sql = "INSERT INTO `oa_user` VALUES (NULL, ?, ?, ?, ?, NOW())";
        $data = array("$name", $permissions, $ad_group, $user);
        #$this->run_sql($sql, $data);
        #return $this->db->insert_id();
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
        if ($user_id == '') {
            $CI = & get_instance();
            $user_id = intval($CI->user->id);
            if (empty($user_id)) {
                return false;
            } else {
                $user_roles = $CI->user->roles;
                $user_roles = '"' . implode('","', $user_roles) .'"';
            }
        } else {
            $user_id = intval($user_id);
            $sql = "SELECT roles FROM oa_user WHERE id = ?";
            $data = array($user_id);
            $result = $this->run_sql($sql, $data);
            $user_roles = json_decode($result[0]->roles);
            $user_roles = '"' . implode('","', $user_roles) .'"';
        }
        if (empty($user_roles)) {
            return false;
        }
        if (empty($user_id)) {
            return false;
        }
        $sql = "SELECT * FROM roles WHERE name in ($user_roles)";
        $roles = $this->run_sql($sql, array());
        foreach ($roles as $role) {
            $permissions = json_decode($role->permissions);
            if (!empty($permissions->$endpoint) and stripos($permissions->$endpoint, $permission) !== false) {
                return true;
            }
        }
        log_error('ERR-0015', $endpoint . ':' . $permission);
        return false;
    }
}
