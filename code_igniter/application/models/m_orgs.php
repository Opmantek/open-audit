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
 * @version   2.0.2
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
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

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $sql = $this->collection_sql('orgs', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'orgs');
        return ($result);
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
            $sql = "SELECT * FROM orgs";
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
}
