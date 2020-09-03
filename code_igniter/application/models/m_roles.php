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
* @package   Roles
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.4.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Roles
*
* @access   public
* @category Model
* @package  Roles
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_roles extends MY_Model
{
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
        if (empty($data->ad_group) && ! empty($data->name)) {
            $data->ad_group = 'open-audit_roles_' . strtolower(str_replace(' ', '_', $data->name));
        }
        if ( ! empty($data->permissions) && gettype($data->permissions) === 'string') {
            // We likely have a CSV submitted item
            // Replace quotes as it should already be stringified JSON
            $item->permissions = str_replace("'", '"', $item->permissions);
        } else if ( ! empty($data->permissions) && gettype($data->permissions) !== 'string') {
            // We likely have a submitted form or a JSON submission using the API
            // Build up our permissions
            $permissions = new stdClass();
            foreach ($data->permissions as $endpoint => $object) {
                $permissions->{$endpoint} = '';
                foreach ($object as $key => $value) {
                    $permissions->{$endpoint} .= $key;
                }
            }
            $data->permissions = json_encode($permissions);
        }
        if ($id = $this->insert_collection('roles', $data)) {
            return intval($id);
        } else {
            return false;
        }
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
        $sql = "SELECT * FROM roles WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (!empty($result[0]->permissions)) {
            $result[0]->permissions = json_decode($result[0]->permissions);
        }
        $result = $this->format_data($result, 'roles');
        return ($result);
    }

    public function update()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $CI = & get_instance();
        $sql = '';
        $fields = ' description name permissions ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `roles` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql, array());
        return;
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
        if ($id != 0) {
            // do NOT allow deleting the default roles
            $sql = "SELECT name FROM roles WHERE id = ?";
            $data = array($id);
            $result = $this->run_sql($sql, $data);
            if ($result[0]->name == 'admin' or $result[0]->name == 'org_admin' or $result[0]->name == 'reporter' or $result[0]->name == 'user') {
                log_error('ERR-0013', 'm_roles::delete');
                return false;
            }
            // attempt to delete the item
            $sql = "DELETE FROM `roles` WHERE id = ?";
            $data = array($id);
            $this->run_sql($sql, $data);
            return true;
        } else {
            log_error('ERR-0013', 'm_roles::delete');
            return false;
        }
    }

    public function read_sub_resource($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT name FROM `roles` WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (empty($result[0]->name)) {
            return false;
        } else {
            $name = $result[0]->name;
        }

        $sql = "select users.id, users.full_name, users.roles, users.org_id, orgs.name AS `org_name` FROM users LEFT JOIN orgs ON (users.org_id = orgs.id) WHERE users.roles LIKE '%\"" . $name . "\"%'";
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'users');
        return $result;
    }

    # pass this a collection and permission and it will update the role->permissions if that collection exists
    # and insert it if it doesn't exist
    public function update_permissions($rolename, $collection, $permissions)
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if (empty($rolename) or empty($collection)) {
            return false;
        }
        if (empty($permissions)) {
            $permissions = '';
        }
        if (!empty($rolename)) {
            $sql = "SELECT * FROM `roles` WHERE `name` = ?";
            $data = array($rolename);
            $result = $this->run_sql($sql, $data);
        }
        if (!empty($result)) {
            foreach ($result as $role) {
                $role_permissions = @json_decode($role->permissions);
                $role_permissions->{$collection} = $permissions;
                $role->permissions = json_encode($role_permissions);
                $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
                $data = array($role->permissions, $role->id);
                $result = $this->run_sql($sql, $data);
            }
        }
        return true;
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $sql = 'SELECT COUNT(id) AS `count` FROM roles';
        $result = $this->run_sql($sql, array());
        return intval($result[0]->count);
    }

    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if ( ! empty($user_id)) {
            $sql = 'SELECT * FROM roles';
            $temp_debug = $this->db->db_debug;
            $this->db->db_debug = false;
            $query = $this->db->query($sql);
            $this->db->db_debug = $temp_debug;
            unset($temp_debug);
            $CI->response->meta->sql[] = $this->db->last_query();
            if ( ! empty($result)) {
                $result = @$query->result();
                $result = $this->format_data($result, 'dashboards');
            } else {
                $result = array();
            }
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT " . $CI->response->meta->internal->properties . " FROM roles " . 
                    $CI->response->meta->internal->groupby . " " . 
                    $CI->response->meta->internal->sort . " " . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'roles');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'roles';
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
        $dictionary->sentence = 'Open-AudIT Enterprise includes User Roles, full role-based access control (RBAC) allowing fine-grained control over each user\'s experience.';
        $dictionary->about = '<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->marketing = '<p>Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br /><br />
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br /><br />Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br /><br />' . $CI->temp_dictionary->link . '<br /><br />' . $CI->temp_dictionary->purchase_link . '<br /><br /></p>';
        $dictionary->notes = '';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->ad_group = 'Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.';
        $dictionary->columns->permissions = 'This attribute is stored as a JSON object. It is the result of the table above and contained the endpoint name along with "c", "r", "u" and/or "d" which represent create, read, update and delete. These are the actions a user can perform on items from the particular endpoint.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_roles.php
// Location: ./models/m_roles.php
