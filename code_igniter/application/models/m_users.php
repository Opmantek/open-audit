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
* @category  Model
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.2.1
* @link      http://www.open-audit.org
 */
class M_users extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT users.*, orgs.name AS `org_name` FROM users LEFT JOIN orgs ON (users.org_id = orgs.id) WHERE users.id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'users');
        return ($result);
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if ($id != 1) {
            // attempt to delete the item
            $sql = "DELETE FROM `users` WHERE id = ?";
            $data = array($id);
            $this->run_sql($sql, $data);
            return true;
        } else {
            log_error('ERR-0013', 'm_users::delete');
            return false;
        }
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $sql = $this->collection_sql('users', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'users');
        return ($result);
    }

    public function get_parent_orgs($org_id = 0)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'pre';
        $this->log->summary = 'retrieving parent orgs';
        stdlog($this->log);
        $CI = & get_instance();
        $parents_array = array();

        if (!$this->db->table_exists('orgs')) {
            return $parents_array;
        }

        if (empty($org_id)) {
            if (!empty($CI->user->org_id)) {
                $org_id = $CI->user->org_id;
            } else {
                return $parents_array;
            }
        }

        do {
            $sql = "SELECT a.id AS id FROM orgs a, orgs b WHERE b.id = ? AND a.id = b.parent_id";
            $query = $this->db->query($sql, array($org_id));
            $result = $query->result();
            if (!empty($result[0]->id)) {
                $org_id = intval($result[0]->id);
                $parents_array[] = $org_id;
            } else {
                $org_id = 1;
            }

        } while ($org_id != 1);

        return $parents_array;
    }

    public function get_orgs($user_id)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'pre';
        $this->log->summary = 'retrieving orgs';
        stdlog($this->log);
        $CI = & get_instance();

        if (empty($user_id)) {
            $user_orgs = json_decode($CI->user->orgs);
        } else {
            if ($this->db->table_exists('oa_user')) {
                return array(1);
            } else {
                $sql = "/* m_users::get_orgs */ " .  "SELECT orgs FROM users WHERE id = ?";
                $query = $this->db->query($sql, array($user_id));
                $result = $query->result();
                if (count($result) > 0) {
                    $user_orgs = json_decode($result[0]->orgs);
                } else {
                    return array();
                }
            }
        }

        if (empty($user_orgs)) {
            return array();
        }
        
        $sql = "SELECT * FROM orgs";
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
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'pre';
        $this->log->summary = 'retrieving org';
        stdlog($this->log);
        $org_list = array();
        foreach ($this->orgs as $org) {
            if ($org->parent_id == $org_id and $org->id != 1) {
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
        if ($this->config->config['internal_version'] < 20160904) {
            if (!empty($this->user->admin) and $this->user->admin == 'y') {
                return true;
            } else {
                return false;
            }
        }
        if ($endpoint == '') {
            return false;
        }
        if ($permission == '') {
            return false;
        }
        $CI = & get_instance();
        if ($user_id == '') {
            $user_id = @intval($CI->user->id);
            if (empty($user_id)) {
                return false;
            } else {
                if (!is_array($CI->user->roles)) {
                    $user_roles = json_decode($CI->user->roles);
                } else {
                    $user_roles = $CI->user->roles;
                }
                if (!empty($CI->roles)) {
                    $roles = $CI->roles;
                } else {
                    $CI->load->model('m_roles');
                    $roles = $CI->m_roles->collection();
                }
            }
        } else {
            $user_id = intval($user_id);
            if ($this->db->table_exists('users')) {
                $sql = "SELECT roles FROM users WHERE id = ?";
            } else {
                $sql = "SELECT roles FROM oa_user WHERE id = ?";
            }
            $data = array($user_id);
            $result = $this->run_sql($sql, $data);
            if (!empty($result[0]->roles)) {
                $user_roles = json_decode($result[0]->roles);
            } else {
                if (intval($this->config->config['internal_version']) < 20160904) {
                    unset($this->response->errors);
                }
                $user_roles = array();
            }
            $CI->load->model('m_roles');
            $roles = $CI->m_roles->collection();
        }
        if (empty($user_roles)) {
            return false;
        }
        if (!empty($user_roles) and !empty($roles)) {
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
        }
        //log_error('ERR-0015', $endpoint . ':' . $permission);
        return false;
    }

    public function get_user_collection_org_permission($collection, $id)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'retrieving collection orgs';
        stdlog($this->log);
        if ($collection == '') {
            return false;
        }
        if ($id == '') {
            return false;
        } else {
            $id = intval($id);
        }

        $CI = & get_instance();

        $org_id_name = 'org_id';
        $table = $collection;
        $id_name = 'id';

        if ($collection == 'devices') {
            $table = 'system';
        }
        if ($collection == 'orgs') {
            $org_id_name = 'id';
        }
        if ($table == '') {
            return false;
        }

        $sql = "SELECT $org_id_name AS org_id FROM $table WHERE $id_name = ?";
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

    public function has_role($role = '', $roles = array()) {
        if ($role == '') {
            return false;
        }
        if (count($roles) === 0) {
            $roles = $this->user->roles;
        }
        if (empty($roles)) {
            return false;
        }
        foreach ($roles as $thisrole) {
            if ($role == $thisrole) {
                return true;
            }
        }
        return false;
    }

    public function has_org($org = '', $orgs = '') {
        if ($org == '') {
            return false;
        }
        if ($orgs == '') {
            $orgs = $this->user->orgs;
        }
        if (empty($orgs)) {
            return false;
        }
        foreach ($orgs as $thisorg) {
            if ($org == $thisorg) {
                return true;
            }
        }
        return false;
    }

    public function validate()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'validating user';
        $this->log->status = 'pre';
        stdlog($this->log);

        $CI = & get_instance();
        $this->config = $CI->config;
        $CI->user = new stdClass();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('log');
        $user_prefix = '';
        if (isset($CI->config->config['internal_version']) and intval($CI->config->config['internal_version']) < 20160409) {
            $user_prefix = 'user_';
        }
        if ($this->db->dbdriver === 'mysql') {
            $sql = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '" . $this->db->database . "' AND `TABLE_NAME` = 'users'";
            $query = $this->db->query($sql);
            $result = $query->result();
            if (count($result) !== 0) {
                $db_table = 'users';
            } else {
                $db_table = 'oa_user';
            }
        } else {
            $db_table = 'users';
        }

        if ($this->db->dbdriver === 'mysql') {
            # See if we have a column named $column in the DB
            # SELECT * FROM COLUMNS WHERE `TABLE_SCHEMA` = 'openaudit' AND `TABLE_NAME` = 'bios' AND `COLUMN_NAME` = 'system_id';
            $sql = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE `TABLE_SCHEMA` = '" . $this->db->database . "' AND `TABLE_NAME` = '" . $db_table . "' AND `COLUMN_NAME` = 'user_id'";
            $query = $this->db->query($sql);
            $result = $query->result();
            if (count($result) !== 1) {
                $db_id_column = 'id';
                $db_prefix = '';
            } else {
                $db_id_column = 'user_id';
                $db_prefix = 'user_';
            }
        } else {
            $db_id_column = 'id';
            $db_prefix = '';
        }


        if (isset($this->session->userdata['user_id']) and is_numeric($this->session->userdata['user_id'])) {
            // user is logged in, return the $this->user object
            $sql = "SELECT * FROM " . $db_table . " WHERE " . $db_table . "." . $db_id_column . " = ?";
            $sql = $this->clean_sql($sql);
            $access_token = '';
            if (!empty($this->session->userdata['access_token'])) {
                $access_token = $this->session->userdata['access_token'];
            }
            $data = array(intval($this->session->userdata['user_id']));
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                // set the user object
                $CI->user = $query->row();
                $CI->user->db_table = $db_table;
                $CI->user->db_prefix = $db_prefix;
                $CI->user->db_id_column = $db_id_column;
                if ($CI->user->db_id_column == 'user_id') {
                    $CI->user->id = $CI->user->user_id;
                    $CI->user->name = $CI->user->user_name;
                    $CI->user->password = $CI->user->user_password;
                    $CI->user->full_name = $CI->user->user_full_name;
                }
                $CI->user->access_token = $access_token;
                $access_token = bin2hex(openssl_random_pseudo_bytes(30));
                $CI->access_token = $access_token;
                $userdata = array('user_id' => $CI->user->id, 'user_debug' => '', 'access_token' => $access_token);
                $this->session->set_userdata($userdata);
                return;
            } else {
                // the user_id stored in the session does not exist
                log_error('ERR-0015', $CI->response->meta->collection . ':' . $CI->response->meta->action . ' Bad session data');
                if ($CI->response->meta->format == 'json') {
                    echo json_encode($CI->response);
                    exit();
                } else {
                    if (strtoupper($CI->input->server('REQUEST_METHOD')) == 'GET') {
                        $this->session->set_userdata('url', current_url());
                    }
                    redirect('logon');
                }
            }
        } else {
            log_error('ERR-0020', current_url());
            if (!empty($CI->response->meta->format) and $CI->response->meta->format == 'json') {
                echo json_encode($CI->response);
                exit();
            } else {
                if (strtoupper($CI->input->server('REQUEST_METHOD')) == 'GET') {
                    $this->session->set_userdata('url', current_url());
                }
                redirect('logon');
            }
        }
    }

    public function user_org($org_id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'retrieving user orgs';
        stdlog($this->log);
        $CI = & get_instance();
        $temp = explode(',', $CI->user->org_list);
        foreach ($temp as $key => $value) {
            if ($org_id == $value) {
                return true;
            }
        }
        log_error('ERR-0018', $CI->response->meta->collection . '::' . $CI->response->meta->action . ', org_id:' . $org_id);
        return false;
    }
}
