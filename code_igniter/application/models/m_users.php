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
* @package   Users
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.5.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Users
*
* @access   public
* @category Model
* @package  Users
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_users extends MY_Model
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
        // JSON encode our roles
        if ( ! empty($data->roles) && ! is_string($data->roles)) {
            $data->roles = json_encode($data->roles);
        }
        // JSON encode our orgs
        if ( ! empty($data->orgs) && ! is_string($data->orgs)) {
            $data->orgs = json_encode(array_map('intval', $data->orgs));
        }
        // Encrypt the password
        if ( ! empty($data->password)) {
            set_include_path($this->config->config['base_path'] . '/code_igniter/application/third_party/random_compat');
            require_once 'lib/random.php';
            $salt = bin2hex(random_bytes(32));
            $data->password = $salt.hash('sha256', $salt.(string)$data->password);
            unset($salt);
        }
        $data->access_token = '';
        if (empty($data->devices_default_display_columns)) {
            $data->devices_default_display_columns = '';
        }
        if ($id = $this->insert_collection('users', $data)) {
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
        if (empty($id)) {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        }
        $sql = 'SELECT users.*, orgs.name AS `org_name` FROM users LEFT JOIN orgs ON (users.org_id = orgs.id) WHERE users.id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if ( ! empty($result[0]->roles)) {
            $result[0]->roles = json_decode($result[0]->roles);
        }
        if ( ! empty($result[0]->orgs)) {
            $result[0]->orgs = json_decode($result[0]->orgs);
        }
        $result = $this->format_data($result, 'users');
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
        $id = intval($id);
        if ($id === 1) {
            // never allowed to delete the default user
            log_error('ERR-0013', 'm_users::delete');
            return false;
        }
        $sql = 'DELETE FROM `users` WHERE id = ?';
        $data = array($id);
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id)));
        $sql = 'SELECT COUNT(id) AS `count` FROM users WHERE org_id IN (' . implode(',', $org_list) . ')';
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
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = 'SELECT * FROM users WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'users');
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, dashboards.id AS `dashboards.id`, dashboards.name AS `dashboards.name` FROM users LEFT JOIN orgs ON (users.org_id = orgs.id) LEFT JOIN dashboards ON (users.dashboard_id = dashboards.id) " .
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            if ( ! empty($result)) {
                for ($i=0; $i < count($result); $i++) {
                    $result[$i]->roles = json_decode($result[$i]->roles);
                    $result[$i]->orgs = json_decode($result[$i]->orgs);
                    $result[$i]->access_token = json_decode($result[$i]->access_token);
                }
            }
            $CI->response->data = $this->format_data($result, 'users');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    /**
     * [get_parent_orgs description]
     * @param  integer $org_id [description]
     * @return [type]          [description]
     */
    public function get_parent_orgs($org_id = 0)
    {
        $CI = & get_instance();
        $parents_array = array();

        if ( ! $this->db->table_exists('orgs')) {
            return $parents_array;
        }

        if (empty($org_id)) {
            if ( ! empty($CI->user->org_id)) {
                $org_id = $CI->user->org_id;
            } else {
                return $parents_array;
            }
        }

        do {
            $sql = '/* M_users::get_parent_orgs */ SELECT a.id AS id FROM orgs a, orgs b WHERE b.id = ? AND a.id = b.parent_id';
            $query = $this->db->query($sql, array($org_id));
            $result = $query->result();
            if ( ! empty($result[0]->id)) {
                $org_id = intval($result[0]->id);
                $parents_array[] = $org_id;
            } else {
                $org_id = 1;
            }
        } while ($org_id !== 1);

        return $parents_array;
    }

    /**
     * [get_orgs description]
     * @param  [type] $user_id [description]
     * @return [type]          [description]
     */
    public function get_orgs($user_id)
    {
        $CI = & get_instance();

        if (empty($user_id)) {
            $user_orgs = json_decode($CI->user->orgs);
        } else {
            if ($this->db->table_exists('oa_user')) {
                return array(1);
            } else {
                $sql = '/* m_users::get_orgs */ ' .  'SELECT orgs FROM users WHERE id = ?';
                $query = $this->db->query($sql, array($user_id));
                $result = $query->result();
                if (count($result) > 0) {
                    $user_orgs = json_decode($result[0]->orgs);
                }
            }
        }

        if (empty($user_orgs)) {
            return array();
        }
        
        $sql = 'SELECT * FROM orgs';
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

    /**
     * [get_org description]
     * @param  [type] $org_id [description]
     * @return [type]         [description]
     */
    private function get_org($org_id)
    {
        $org_list = array();
        foreach ($this->orgs as $org) {
            if (intval($org->parent_id) === intval($org_id) && intval($org->id) !== 1) {
                $org_list[] = intval($org->id);
                foreach ($this->get_org($org->id) as $org) {
                    $org_list[] = intval($org);
                }
            }
        }
        return($org_list);
    }

    /**
     * [get_user_permission description]
     * @param  string $user_id    [description]
     * @param  string $endpoint   [description]
     * @param  string $permission [description]
     * @return [type]             [description]
     */
    public function get_user_permission($user_id = '', $endpoint = '', $permission = '')
    {
        if ($this->config->config['internal_version'] < 20160904) {
            if ( ! empty($this->user->admin) && $this->user->admin === 'y') {
                return true;
            } else {
                return false;
            }
        }
        if ($endpoint === '') {
            return false;
        }
        if ($endpoint === 'discovery_log') {
            $endpoint = 'discoveries';
        }
        if ($permission === '') {
            return false;
        }
        $CI = & get_instance();
        if ($user_id === '') {
            $user_id = @intval($CI->user->id);
            if (empty($user_id)) {
                return false;
            } else {
                if ( ! is_array($CI->user->roles)) {
                    $user_roles = json_decode($CI->user->roles);
                } else {
                    $user_roles = $CI->user->roles;
                }
                if ( ! empty($CI->roles)) {
                    $roles = $CI->roles;
                } else {
                    $CI->load->model('m_roles');
                    $roles = $CI->m_roles->collection(1);
                }
            }
        } else {
            $user_id = intval($user_id);
            if ($this->db->table_exists('users')) {
                $sql = 'SELECT roles FROM users WHERE id = ?';
            } else {
                $sql = 'SELECT roles FROM oa_user WHERE id = ?';
            }
            $data = array($user_id);
            $result = $this->run_sql($sql, $data);
            if ( ! empty($result[0]->roles)) {
                $user_roles = json_decode($result[0]->roles);
            } else {
                if (intval($this->config->config['internal_version']) < 20160904) {
                    unset($this->response->errors);
                }
                $user_roles = array();
            }
            $CI->load->model('m_roles');
            $roles = $CI->m_roles->collection(1);
        }
        if (empty($user_roles)) {
            return false;
        }
        if ( ! empty($user_roles) && ! empty($roles)) {
            foreach ($user_roles as $user_role) {
                foreach ($roles as $role) {
                    if ($role->attributes->name === $user_role) {
                        $permissions = json_decode($role->attributes->permissions);
                        if ( ! empty($permissions->$endpoint)) {
                            if (stripos($permissions->$endpoint, $permission) !== false) {
                                return true;
                            }
                        }
                    }
                }
            }
        }
        return false;
    }

    /**
     * [get_user_collection_org_permission description]
     * @param  [type] $collection [description]
     * @param  [type] $id         [description]
     * @return [type]             [description]
     */
    public function get_user_collection_org_permission($collection, $id)
    {
        $CI = & get_instance();
        $id = intval($id);
        if (empty($collection) OR empty($id)) {
            return false;
        }

        if ($collection === 'help') {
            // Always allow a user to view help
            return true;
        }
        if ($collection === 'users' && $id === $CI->user->id) {
            // Always allow a user to view their own user item
            return true;
        }

        if (is_string($CI->user->org_list)) {
            $org_list = explode(',', $CI->user->org_list);
        } else {
            $org_list = $CI->user->org_list;
        }

        if ($collection === 'devices') {
            $sql = 'SELECT `system`.`org_id` AS org_id FROM `system` WHERE `id` = ?';

        } else if ($collection === 'orgs') {
            $sql = 'SELECT `orgs`.`id` AS org_id FROM `orgs` WHERE `id` = ?';

        } else if ($collection === 'baselines_policies') {
            $sql = 'SELECT `orgs`.`id` AS org_id FROM `baselines_policies` LEFT JOIN `baselines` ON (`baselines_policies`.`baseline_id` = `baselines`.`id`) LEFT JOIN `orgs` ON (`baselines`.`org_id` = `orgs`.`id`) WHERE `baselines_policies`.`id` = ?';

        } else {
            $sql = "SELECT `{$collection}`.`org_id` AS org_id FROM `{$collection}` WHERE `id` = ?";
        }

        $data = array($id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (count($result) === 0) {
            log_error('ERR-0007', '');
            return false;
        }
        $permitted = false;
        // if (in_array($result[0]->org_id, explode(',', $CI->user->org_list))) {
        if (in_array($result[0]->org_id, $org_list)) {
            $permitted = true;
        }
        if ( ! $permitted) {
            log_error('ERR-0008', '');
            return false;
        }
        return true;
    }

    /**
     * [has_role description]
     * @param  string $role  [description]
     * @param  array  $roles [description]
     * @return boolean        [description]
     */
    public function has_role($role = '', $roles = array())
    {
        if ($role === '') {
            return false;
        }
        if (count($roles) === 0) {
            $roles = $this->user->roles;
        }
        if (empty($roles)) {
            return false;
        }
        foreach ($roles as $thisrole) {
            if ($role === $thisrole) {
                return true;
            }
        }
        return false;
    }

    /**
     * [has_org description]
     * @param  integer $org  [description]
     * @param  array   $orgs [description]
     * @return boolean       [description]
     */
    public function has_org($org = 0, $orgs = array())
    {
        if (empty($org)) {
            return false;
        }
        if (empty($orgs)) {
            $orgs = $this->user->orgs;
        }
        if (empty($orgs)) {
            return false;
        }
        foreach ($orgs as $this_org) {
            if (intval($org) === intval($this_org)) {
                return true;
            }
        }
        return false;
    }

    /**
     * [validate description]
     * @return [type] [description]
     */
    public function validate()
    {
        $CI = & get_instance();
        $this->config = $CI->config;
        $CI->user = new stdClass();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('log');
        $this->load->helper('error');

        if (empty($this->config->config['access_token_count'])) {
            $this->config->config['access_token_count'] = 20;
        }
        $db_table = 'oa_user';
        if ($this->db->table_exists('users')) {
            $db_table = 'users';
        }
        $db_id_column = 'user_id';
        $db_prefix = 'user_';
        if ($this->db->field_exists('id', $db_table)) {
            $db_id_column = 'id';
            $db_prefix = '';
        }

        if ( ! empty($_SERVER['HTTP_USER'])) {
            if (stripos($_SERVER['HTTP_USER'], '@') !== false) {
                $temp = explode('@', $_SERVER['HTTP_USER']);
                $_SERVER['HTTP_USER'] = $temp[0];
                unset($temp);
            }
            $sql = 'SELECT * FROM `users` WHERE `name` = ?';
            $data = array($_SERVER['HTTP_USER']);
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() === 1) {
                $this->log->summary = 'Valid username submitted via headers (' . $_SERVER['HTTP_USER'] . ')';
                stdlog($this->log);
                $user = $query->row();
            } else {
                $this->log->summary = 'Invalid username submitted via headers (' . $_SERVER['HTTP_USER'] . ')';
                stdlog($this->log);
                log_error('ERR-0036');
                redirect('logon');
            }
        }
        if ( ! empty($_SERVER['REMOTE_ADDR']) && ($_SERVER['REMOTE_ADDR'] === '127.0.0.1' OR $_SERVER['REMOTE_ADDR'] === '::1')) {
            $ip = '127.0.0.1';
        }
        if ( ! empty($_SERVER['HTTP_UUID'])) {
            $supplied_uuid = $_SERVER['HTTP_UUID'];
            $files = array('/usr/local/omk/conf/opCommon.nmis', '/usr/local/opmojo/conf/opCommon.nmis');
            $operating_system = php_uname('s');
            if ($operating_system === 'Windows NT') {
                $files = array('c:\\omk\\conf\\opCommon.nmis', 'c:\\usr\\local\\opmojo\\conf\\opCommon.nmis');
            }
            unset($operating_system);
            if ( ! empty($CI->config->config['oae_location'])) {
                $files = array($CI->config->config['oae_location']);
            }
            $uuid = '';
            foreach ($files as $file) {
                if (empty($uuid)) {
                    $contents = @file($file);
                    if ( ! empty($contents)) {
                        foreach ($contents as $line) {
                            if (empty($uuid)) {
                                if (stripos($line, 'uuid') !== false) {
                                    $line = trim(str_replace("'uuid' =>", '', $line));
                                    $line = trim(str_replace('"uuid" =>', '', $line));
                                    $line = trim(str_replace("'", '', $line));
                                    $line = trim(str_replace('"', '', $line));
                                    $uuid = $line;
                                    break;
                                }
                            }
                        }
                    }
                }
            }
            if (empty($uuid)) {
                // Cannot read from filesystem and parse opCommon.nmis config file - abort
                $CI->response = new stdClass();
                $CI->response->meta = new stdClass();
                $CI->response->errors = array();
                log_error('ERR-0015', 'm_users:validate Cannot read UUID');
                $this->log->summary = 'Cannot read UUID';
                stdlog($this->log);
                if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
                    echo json_encode($CI->response);
                    exit();
                } else if ( ! empty($_GET['format']) && $_GET['format'] === 'json') {
                    echo json_encode($CI->response);
                    exit();
                } else {
                    $this->session->set_userdata('url', current_url());
                    redirect('logon');
                    exit();
                }
            }
            if ($supplied_uuid !== $uuid) {
                // Bad UUID supplied
                $CI->response = new stdClass();
                $CI->response->meta = new stdClass();
                $CI->response->errors = array();
                log_error('ERR-0015', 'm_users:validate Bad UUID');
                $this->log->summary = 'Bad UUID';
                stdlog($this->log);
                if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false OR ( ! empty($_GET['format']) && $_GET['format'] === 'json')) {
                    echo json_encode($CI->response);
                    exit();
                } else {
                    $this->session->set_userdata('url', current_url());
                    redirect('logon');
                    exit();
                }
            }
            if ($supplied_uuid === $uuid) {
                $this->log->summary = 'Valid UUID submitted via headers';
                stdlog($this->log);
            }
        }
        if ( ! empty($user) && ! empty($ip) && ! empty($supplied_uuid)) {
            unset($_GET['user']);
            unset($_GET['uuid']);
            $CI->user = $user;
            $access_token = array();
            if ( ! empty($CI->user->access_token)) {
                $access_token = @json_decode($CI->user->access_token);
            }
            $temp = bin2hex(openssl_random_pseudo_bytes(30));
            $access_token[] = $temp;
            $access_token = array_slice($access_token, -intval($CI->config->config['access_token_count']));
            $sql = 'UPDATE `users` SET `access_token` = ? WHERE `id` = ?';
            $data = array(json_encode($access_token), $CI->user->id);
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql, $data);
            $CI->user->access_token = $access_token;
            $CI->access_token = $temp;
            $userdata = array('user_id' => $CI->user->id, 'user_debug' => '', 'access_token' => $access_token);
            $this->session->set_userdata($userdata);
            $this->log->summary = 'User validated by name, uuid and localhost';
            stdlog($this->log);
            return;
        }

        if (isset($this->session->userdata['user_id']) && is_numeric($this->session->userdata['user_id'])) {
            // user is logged in, return the $this->user object
            $sql = "SELECT * FROM `{$db_table}` WHERE `{$db_table}`.`{$db_id_column}` = ?";
            $sql = $this->clean_sql($sql);
            $access_token = '';
            if ( ! empty($this->session->userdata['access_token'])) {
                $access_token = $this->session->userdata['access_token'];
            }
            if (is_string($access_token)) {
                $access_token = array($access_token);
            }
            $data = array(intval($this->session->userdata['user_id']));
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                // set the user object
                $CI->user = $query->row();
                $CI->user->db_table = $db_table;
                $CI->user->db_prefix = $db_prefix;
                $CI->user->db_id_column = $db_id_column;
                if ($CI->user->db_id_column === 'user_id') {
                    $CI->user->id = $CI->user->user_id;
                    $CI->user->name = $CI->user->user_name;
                    $CI->user->password = $CI->user->user_password;
                    $CI->user->full_name = $CI->user->user_full_name;
                }
                $temp = bin2hex(openssl_random_pseudo_bytes(30));
                $access_token[] = $temp;
                $access_token = array_slice($access_token, -intval($this->config->config['access_token_count']));
                $CI->user->access_token = $access_token;
                $CI->access_token = $temp;
                $userdata = array('user_id' => $CI->user->id, 'user_debug' => '', 'access_token' => $access_token);
                $this->session->set_userdata($userdata);
                return;
            } else {
                // the user_id stored in the session does not exist
                log_error('ERR-0015', 'm_users:validate Bad session data');
                if ($CI->response->meta->format === 'json') {
                    echo json_encode($CI->response);
                    exit();
                } else {
                    if (strtoupper($CI->input->server('REQUEST_METHOD')) === 'GET') {
                        $this->session->set_userdata('url', current_url());
                    }
                    redirect('logon');
                }
            }
        } else {
            log_error('ERR-0020', current_url());
            if ( ! empty($CI->response->meta->format) && $CI->response->meta->format === 'json') {
                echo json_encode($CI->response);
                exit();
            } else {
                if (strtoupper($CI->input->server('REQUEST_METHOD')) === 'GET') {
                    $this->session->set_userdata('url', current_url());
                }
                redirect('logon');
            }
        }
    }

    /**
     * [user_org description]
     * @param  integer $org_id [description]
     * @return [type]          [description]
     */
    public function user_org($org_id = 0)
    {
        $org_id = intval($org_id);
        $CI = & get_instance();
        $temp = explode(',', $CI->user->org_list);
        foreach ($temp as $value) {
            if (intval($value) === $org_id) {
                return true;
            }
        }
        log_error('ERR-0018', $CI->response->meta->collection . '::' . $CI->response->meta->action . ', org_id:' . $org_id);
        return false;
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'users';
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
        $dictionary->sentence = "Open-AudIT Enterprise includes Users &amp; Roles, full role-based access control (RBAC) allowing fine-grained control over each user's experience.";
        $dictionary->marketing = '<p>Users and Roles in Open-AudIT are key items. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>Users and Roles in Open-AudIT are key items. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->notes = 'If the following conditions are met:<br /><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br /><br />';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->dashboard_id = 'The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.';
        $dictionary->columns->password = 'A hashed password that enables logon when using application authentication.';
        $dictionary->columns->full_name = 'The complete first name, last name fo this user.';
        $dictionary->columns->email = 'The users email address.';
        $dictionary->columns->lang = 'The language to translate the web interface into for the user.';
        $dictionary->columns->active = "Is this account active? If set to 'n', the user cannot logon.";
        $dictionary->columns->roles = 'A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.';
        $dictionary->columns->orgs = 'A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>.';
        $dictionary->columns->ldap = 'The LDAP OU of this user (if LDAP is used).';
        $dictionary->columns->type = "Can be 'user' or 'collector'.";
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_users.php
// Location: ./models/m_users.php
