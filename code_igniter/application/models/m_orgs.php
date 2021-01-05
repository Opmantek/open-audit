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
* @package   Orgs
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.5.3
* @link      http://www.open-audit.org
*/

/**
* Base Model Orgs
*
* @access   public
* @category Model
* @package  Orgs
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_orgs extends MY_Model
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
        if (empty($data->ad_group) && ! empty($data->name)) {
            $data->ad_group = 'open-audit_orgs_' . strtolower(str_replace(' ', '_', $data->name));
        }
        if ($id = $this->insert_collection('orgs', $data)) {
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
        $sql = 'SELECT orgs.*, COUNT(DISTINCT system.id) as `device_count` FROM orgs LEFT JOIN system ON (orgs.id = system.org_id) WHERE orgs.id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'orgs');
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
            // never allowed to delete the default org
            log_error('ERR-0013', 'm_orgs::delete');
            return false;
        }
        $sql = 'DELETE FROM `orgs` WHERE id = ?';
        $data = array($id);
        $this->run_sql($sql, $data);
        return true;
    }

    /**
     * [read_sub_resource description]
     * @param  integer $id [description]
     * @return [type]      [description]
     */
    public function read_sub_resource($id = 0)
    {
        $id = intval($id);
        $sql = "SELECT `type`, count(`system`.`id`) as `count`, org_id FROM `system` WHERE system.org_id = ? AND system.status = 'production' GROUP BY `system`.`type`";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (count($result) === 0) {
            return false;
        } else {
            $result = $this->format_data($result, 'devices');
            return ($result);
        }
    }

    /**
     * [get_orgs description]
     * @return [type] [description]
     */
    public function get_orgs()
    {
        $CI = & get_instance();
        $sql = "SELECT o1.*, o2.name as parent_name, count(system.id) as device_count FROM orgs o1 LEFT JOIN orgs o2 ON o1.parent_id = o2.id LEFT JOIN system ON (o1.id = system.org_id) WHERE o1.id IN ({$CI->user->org_list}) GROUP BY o1.id";
        $result = $this->run_sql($sql);
        return($result);
    }

    /**
     * [get_children description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function get_children($id = 0)
    {
        $id = intval($id);
        $org_list = array();
        if (empty($this->orgs)) {
            $sql = 'SELECT * FROM orgs';
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $this->orgs = $query->result();
        }
        foreach ($this->orgs as $org) {
            if (intval($org->parent_id) === $id && intval($org->id) !== 1) {
                $org_list[] = intval($org->id);
                foreach ($this->get_children($org->id) as $org) {
                    $org_list[] = intval($org);
                }
            }
        }
        return($org_list);
    }

    /**
     * [is_desc description]
     * @param  integer $parent_id [description]
     * @param  integer $desc_id   [description]
     * @return boolean            [description]
     */
    public function is_desc($parent_id = 0, $desc_id = 0)
    {
        $parent_id = intval($parent_id);
        $desc_id = intval($desc_id);
        if (empty($parent_id) OR empty($desc_id)) {
            return false;
        }
        $CI = & get_instance();
        if (empty($CI->orgs)) {
            $sql = '/* m_orgs::is_desc */ ' . 'SELECT * FROM orgs';
            $CI->orgs = $this->run_sql($sql, array());
        }
        $children = $this->get_children($parent_id);
        foreach ($CI->orgs as $org) {
            foreach ($children as $child) {
                if (intval($org->id) === $desc_id && intval($org->id) === intval($child)) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * [get_parent description]
     * @param  integer $id [description]
     * @return [type]      [description]
     */
    public function get_parent($id = 0)
    {
        $id = intval($id);
        $sql = '/* m_orgs::get_parent */ ' . 'SELECT parent_id FROM orgs WHERE org_id = ?';
        $data = array($id);
        $orgs = $this->run_sql($sql, $data);
        if (empty($orgs[0]->parent_id)) {
            return false;
        } else {
            return intval($orgs[0]->parent_id);
        }
    }

    /**
     * [get_siblings description]
     * @param  integer $id [description]
     * @return [type]      [description]
     */
    public function get_siblings($id = 0)
    {
        $id = intval($id);
        $sql = '/* m_orgs::get_siblings */ ' . "SELECT a.id FROM orgs a LEFT JOIN orgs b ON (a.parent_id = b.parent_id) WHERE b.id = {$id} AND a.id != {$id} and a.parent_id != 1";
        $orgs = $this->run_sql($sql, array());
        if ( ! empty($orgs) && is_array($orgs)) {
            $return_orgs = array();
            foreach ($orgs as $each_org) {
                $return_orgs[] = $each_org->id;
            }
            return $return_orgs;
        } else {
            return array();
        }

    }

    /**
     * [get_descendants description]
     * @param  integer $id [description]
     * @return [type]      [description]
     */
    public function get_descendants($id = 0)
    {
        $id = intval($id);
        $org_list = array();
        if (empty($this->orgs)) {
            $sql = 'SELECT * FROM orgs';
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $this->orgs = $query->result();
        }
        foreach ($this->orgs as $org) {
            if (intval($org->parent_id) === $id && intval($org->id) !== 1) {
                $org_list[] = intval($org->id);
                foreach ($this->get_descendants($org->id) as $org) {
                    $org_list[] = intval($org);
                }
            }
        }
        return($org_list);
    }

    /**
     * [get_ascendants description]
     * @param  integer $id [description]
     * @return [type]      [description]
     */
    public function get_ascendants($id = 0)
    {
        $id = intval($id);
        $orgs = $this->get_ascendant($id);
        for ($i=0; $i < count($orgs); $i++) { 
            if (intval($orgs[$i]) === $id) {
                unset($orgs[$i]);
            }
        }
        sort($orgs);
        return $orgs;
    }

    /**
     * [get_ascendant description]
     * @param  integer $id [description]
     * @return [type]      [description]
     */
    public function get_ascendant($id = 0)
    {
        $org_list = array();
        if (empty($this->orgs)) {
            $sql = '/* m_orgs::get_ascendant */ ' . 'SELECT * FROM orgs';
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $this->orgs = $query->result();
        }
        foreach ($this->orgs as $org) {
            if (intval($org->id) === $id && intval($org->parent_id) !== $id) {
                $org_list[] = intval($org->parent_id);
                foreach ($this->get_ascendant($org->parent_id) as $org) {
                    $org_list[] = intval($org);
                }
            }
        }
        return($org_list);
    }

    /**
     * [get_user_descendants description]
     * @param  integer $user_id [description]
     * @return [type]           [description]
     */
    public function get_user_descendants($user_id = 0)
    {
        if ($this->config->config['internal_version'] < '20170104') {
            return array(1);
        }
        $user_id = intval($user_id);
        if ( ! empty($this->user) && intval($this->user->id) === $user_id) {
            $org_list = $this->user->orgs_list;
        } else {
            $sql = '/* m_orgs::get_user_descendants */ ' . 'SELECT orgs FROM users WHERE id = ?';
            $data = array($user_id);
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            if (empty($result[0])) {
                return array();
            }
            $user = $result[0];
            $org_list = json_decode($user->orgs);
        }
        $orgs = array();
        foreach ($org_list as $org_id) {
            $orgs = array_merge($orgs, $this->get_descendants($org_id));
        }
        for ($i=0; $i < count($orgs); $i++) { 
            if (intval($orgs[$i]) === intval($org_id)) {
                unset($orgs[$i]);
            }
        }
        $orgs = array_unique($orgs);
        sort($orgs);
        return $orgs;
    }

    /**
     * [get_user_ascendants description]
     * @param  integer $user_id [description]
     * @return [type]           [description]
     */
    public function get_user_ascendants($user_id = 0)
    {
        // NOTE - Calling function should add org.id 1 itself
        //        because attempting to derive it here results in a circular reference
        $user_id = intval($user_id);
        if ( ! empty($this->user) && intval($this->user->id) === $user_id) {
            $org_list = $this->user->orgs_list;
        } else {
            $sql = '/* m_orgs::get_user_ascendants */ ' . 'SELECT orgs FROM users WHERE id = ?';
            $data = array($user_id);
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            if (empty($result[0])) {
                return array();
            }
            $user = $result[0];
            $org_list = json_decode($user->orgs);
        }
        $orgs = array();
        if ( ! is_array($org_list)) {
            $org_list = explode(',', $org_list);
        }
        foreach ($org_list as $org_id) {
            $orgs = array_merge($orgs, $this->get_ascendant($org_id));
        }
        for ($i=0; $i < count($orgs); $i++) { 
            if (intval($orgs[$i]) === intval($org_id)) {
                unset($orgs[$i]);
            }
        }
        $orgs = array_unique($orgs);
        sort($orgs);
        return $orgs;
    }

    /**
     * [get_user_all description]
     * @param  integer $user_id [description]
     * @return [type]           [description]
     */
    public function get_user_all($user_id = 0)
    {
        $user_id = intval($user_id);
        if (empty($user_id)) {
            return array();
        }
        $sql = '/* m_orgs::get_user_all */ ' . 'SELECT orgs FROM users WHERE id = ?';
        $data = array($user_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (empty($result[0])) {
            return array();
        }
        $user = $result[0];
        $org_list = json_decode($user->orgs);
        $descendants = $this->get_user_descendants($user_id);
        $ascendants = $this->get_user_ascendants($user_id);
        $org_list = array_merge($org_list, $descendants);
        $org_list = array_merge($org_list, $ascendants);
        $org_list = array_unique($org_list);
        return ($org_list);
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id)));
        $sql = 'SELECT COUNT(id) AS `count` FROM orgs WHERE id IN (' . implode(',', $org_list) . ')';
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
            $org_list = $CI->m_orgs->get_user_descendants($user_id);
            $org_list = array_merge($CI->user->orgs, $org_list);
            $org_list = array_unique($org_list);
            $sql = 'SELECT orgs.*, o2.name as `parent_name`, count(DISTINCT system.id) as device_count FROM orgs LEFT JOIN orgs o2 ON orgs.parent_id = o2.id LEFT JOIN system ON (orgs.id = system.org_id)  WHERE orgs.id IN (' . implode(',', $org_list) . ') GROUP BY orgs.id';

            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'orgs');
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT {$CI->response->meta->internal->properties}, o2.name as `parent_name`, count(DISTINCT system.id) as device_count FROM orgs LEFT JOIN orgs o2 ON orgs.parent_id = o2.id LEFT JOIN system ON (orgs.id = system.org_id) {$CI->response->meta->internal->filter} GROUP BY orgs.id {$CI->response->meta->internal->sort} {$CI->response->meta->internal->limit}";
            if ( ! empty($CI->response->meta->requestor)) {
                $sql = "SELECT {$CI->response->meta->internal->properties}, o2.name as `parent_name`, count(DISTINCT system.id) as device_count FROM orgs LEFT JOIN orgs o2 ON orgs.parent_id = o2.id LEFT JOIN system ON (orgs.id = system.org_id AND system.oae_manage = 'y') {$CI->response->meta->internal->filter} GROUP BY orgs.id {$CI->response->meta->internal->sort} {$CI->response->meta->internal->limit}";
            }
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'orgs');
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
        $collection = 'orgs';
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
        $dictionary->sentence = 'Open-AudIT provides multi-tenancy out of the box!';
        $dictionary->marketing = '<p>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br /><br />Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br /><br />Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'community';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->parent_id = 'The ID of this orgs parent org. Linked to <code>orgs.id</code>';
        $dictionary->columns->type = 'The type of organisation.';
        $dictionary->columns->ad_group = 'Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_orgs.php
// Location: ./models/m_orgs.php
