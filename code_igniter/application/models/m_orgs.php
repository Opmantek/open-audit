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
* @version   3.2.2
* @link      http://www.open-audit.org
 */
class M_orgs extends MY_Model
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
        $sql = "SELECT orgs.*, COUNT(DISTINCT system.id) as `device_count` FROM orgs LEFT JOIN system ON (orgs.id = system.org_id) WHERE orgs.id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'orgs');
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
            $sql = "DELETE FROM `orgs` WHERE id = ?";
            $data = array($id);
            $this->run_sql($sql, $data);
            return true;
        } else {
            log_error('ERR-0013', 'm_orgs::delete');
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
        $sql = "SELECT `type`, count(`system`.`id`) as `count`, org_id FROM `system` WHERE system.org_id = ? AND system.status = 'production' GROUP BY `system`.`type`";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (count($result) == 0) {
            return false;
        } else {
            $result = $this->format_data($result, 'devices');
            return ($result);
        }
    }

    public function get_orgs()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $sql = "SELECT o1.*, o2.name as parent_name, count(system.id) as device_count FROM orgs o1 LEFT JOIN orgs o2 ON o1.parent_id = o2.id LEFT JOIN system ON (o1.id = system.org_id) WHERE o1.id IN (" . $CI->user->org_list . ") GROUP BY o1.id ";
        $result = $this->run_sql($sql);
        return($result);
    }

    public function get_children($org_id)
    {
        $org_list = array();
        if (empty($this->orgs)) {
            $sql = "SELECT * FROM orgs";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $this->orgs = $query->result();
        }
        foreach ($this->orgs as $org) {
            if ($org->parent_id == $org_id and $org->id != 1) {
                $org_list[] = intval($org->id);
                foreach ($this->get_children($org->id) as $org) {
                    $org_list[] = intval($org);
                }
            }
        }
        return($org_list);
    }

    public function is_desc($parent_id = 0, $desc_id = 0)
    {
        if (empty($parent_id) or empty($desc_id)) {
            return false;
        }
        $CI = & get_instance();
        if (empty($CI->orgs)) {
            $sql = "/* m_orgs::is_desc */ " . "SELECT * FROM orgs";
            $CI->orgs = $this->run_sql($sql, array());
        }
        $children = $this->get_children($parent_id);
        foreach ($CI->orgs as $org) {
            foreach ($children as $child) {
                if ($desc_id == $org->id and $org->id == $child) {
                    return true;
                }
            }
        }
        return false;
    }

    public function get_parent($org_id)
    {
        if (empty($org_id)) {
            return false;
        }
        $sql = "/* m_orgs::get_parent */ " . "SELECT parent_id FROM orgs WHERE org_id = " . intval($org_id);
        $orgs = $this->run_sql($sql, array());
        if (empty($orgs[0]->parent_id)) {
            return false;
        } else {
            return intval($orgs[0]->parent_id);
        }
    }

    public function get_siblings($org_id)
    {
        if (empty($org_id)) {
            return array();
        } else {
            $org_id = intval($org_id);
        }
        $sql = "/* m_orgs::get_siblings */ " . "SELECT a.id FROM orgs a LEFT JOIN orgs b ON (a.parent_id = b.parent_id) WHERE b.id = " . $org_id . " AND a.id != " . $org_id . " and a.parent_id != 1";
        $orgs = $this->run_sql($sql, array());
        if (!empty($orgs) and is_array($orgs)) {
            $return_orgs = array();
            foreach ($orgs as $org) {
                $return_orgs[] = $org->id;
            }
            return $return_orgs;
        } else {
            return array();
        }

    }

    public function get_descendants($org_id)
    {
        if (empty($org_id)) {
            return array();
        } else {
            $org_id = intval($org_id);
        }
        $org_list = array();
        if (empty($this->orgs)) {
            $sql = "/* m_orgs::get_descendants */ " . "SELECT * FROM orgs";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $this->orgs = $query->result();
        }
        foreach ($this->orgs as $org) {
            if ($org->parent_id == $org_id and $org->id != 1) {
                $org_list[] = intval($org->id);
                foreach ($this->get_descendants($org->id) as $org) {
                    $org_list[] = intval($org);
                }
            }
        }
        return($org_list);
    }

    public function get_ascendants($org_id)
    {
        if (empty($org_id)) {
            return array();
        } else {
            $org_id = intval($org_id);
        }
        $orgs = $this->get_ascendant($org_id);
        for ($i=0; $i < count($orgs); $i++) { 
            if ($orgs[$i] == $org_id) {
                unset($orgs[$i]);
            }
        }
        sort($orgs);
        return $orgs;
    }

    public function get_ascendant($org_id)
    {
        $org_list = array();
        if (empty($this->orgs)) {
            $sql = "/* m_orgs::get_ascendant */ " . "SELECT * FROM orgs";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $this->orgs = $query->result();
        }
        foreach ($this->orgs as $org) {
            if ($org->id == $org_id and $org->parent_id != $org_id) {
                $org_list[] = intval($org->parent_id);
                foreach ($this->get_ascendant($org->parent_id) as $org) {
                    $org_list[] = intval($org);
                }
            }
        }
        return($org_list);
    }

    public function get_user_descendants($user_id)
    {
        if (empty($user_id)) {
            return array();
        } else {
            $user_id = intval($user_id);
        }
        if (!empty($this->user) and $this->user->id == $user_id) {
            $org_list = $this->user->orgs_list;
        } else {
            $sql = "/* m_orgs::get_user_descendants */ " . "SELECT orgs FROM users WHERE id = " . intval($user_id);
            $query = $this->db->query($sql);
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
            if ($orgs[$i] == $org_id) {
                unset($orgs[$i]);
            }
        }
        $orgs = array_unique($orgs);
        sort($orgs);
        return $orgs;
    }

    public function get_user_ascendants($user_id)
    {
        if (empty($user_id)) {
            return array();
        } else {
            $user_id = intval($user_id);
        }
        if (!empty($this->user) and $this->user->id == $user_id) {
            $org_list = $this->user->orgs_list;
        } else {
            $sql = "/* m_orgs::get_user_ascendants */ " . "SELECT orgs FROM users WHERE id = " . intval($user_id);
            $query = $this->db->query($sql);
            $result = $query->result();
            if (empty($result[0])) {
                return array();
            }
            $user = $result[0];
            $org_list = json_decode($user->orgs);
        }
        $orgs = array();
        foreach ($org_list as $org_id) {
            $orgs = array_merge($orgs, $this->get_ascendant($org_id));
        }
        for ($i=0; $i < count($orgs); $i++) { 
            if ($orgs[$i] == $org_id) {
                unset($orgs[$i]);
            }
        }
        $orgs = array_unique($orgs);
        sort($orgs);
        return $orgs;
    }

    public function get_user_all($user_id)
    {
        $user_id = intval($user_id);
        if (empty($user_id)) {
            return array();
        }
        $sql = "/* m_orgs::get_user_all */ " . "SELECT orgs FROM users WHERE id = " . intval($user_id);
        $query = $this->db->query($sql);
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


    public function collection(int $user_id = null, int $response = null)
    {
        $CI = & get_instance();
        if (!empty($user_id)) {
            $org_list = $CI->m_orgs->get_user_descendants($user_id);
            $org_list = array_merge($CI->user->orgs, $org_list);
            $org_list = array_unique($org_list);
            $sql = "SELECT * FROM orgs WHERE id IN (" . implode(',', $org_list) . ")";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'orgs');
            return $result;
        }
        if (!empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT " . $CI->response->meta->internal->properties . ", o2.name as `parent_name`, count(DISTINCT system.id) as device_count FROM orgs LEFT JOIN orgs o2 ON orgs.parent_id = o2.id LEFT JOIN system ON (orgs.id = system.org_id) " . $CI->response->meta->internal->filter . " GROUP BY orgs.id " . $CI->response->meta->internal->sort . " " . $CI->response->meta->internal->limit;
            if (!empty($CI->response->meta->requestor)) {
                $sql = "SELECT " . $CI->response->meta->internal->properties . ", o2.name as `parent_name`, count(DISTINCT system.id) as device_count FROM orgs LEFT JOIN orgs o2 ON orgs.parent_id = o2.id LEFT JOIN system ON (orgs.id = system.org_id AND system.oae_manage = 'y') " . $CI->response->meta->internal->filter . " GROUP BY orgs.id " . $CI->response->meta->internal->sort . " " . $CI->response->meta->internal->limit;
            }
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'orgs');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }
}
