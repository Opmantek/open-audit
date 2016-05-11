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
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_oa_org extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function check_org_name($name, $id)
    {
        $sql = "SELECT id FROM oa_org WHERE name = ? AND id <> ?";
        $sql = $this->clean_sql($sql);
        $data = array($name, $id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function get_group_id($id)
    {
        $sql = "SELECT group_id FROM oa_org WHERE id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        return ($row->group_id);
    }

    public function set_group_id($id, $group_id)
    {
        $sql = "UPDATE oa_org SET group_id = ? WHERE id = ? ";
        $sql = $this->clean_sql($sql);
        $data = array("$group_id", "$id");
        $query = $this->db->query($sql, $data);
    }

    public function select_org($name)
    {
        $sql = "SELECT id FROM oa_org WHERE name = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$name");
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return ($row->id);
        } else {
            return;
        }
    }

    public function get_org_details($id)
    {
        $sql = "SELECT o1.*, o2.name as parent_name, count(oa_group_sys.system_id) as total FROM oa_org o1 LEFT JOIN oa_org o2 ON o1.parent_id = o2.id LEFT JOIN oa_group_sys ON oa_group_sys.group_id = o1.group_id where o1.id = ? GROUP BY o1.id LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        return ($row);
    }

    public function get_org_name($id)
    {
        $sql = "SELECT name FROM oa_org WHERE id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        return ($row->name);
    }

    public function get_all_orgs()
    {
        $sql = "SELECT o1.*, o2.name as parent_name, count(oa_group_sys.system_id) as total FROM oa_org o1 LEFT JOIN oa_org o2 ON o1.parent_id = o2.id LEFT JOIN oa_group_sys ON oa_group_sys.group_id = o1.group_id GROUP BY o1.id ORDER BY o1.name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        return ($result);
    }

    public function get_org_names()
    {
        $sql = "SELECT name, id FROM oa_org ORDER BY name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        return ($result);
    }

    public function get_system_org($system_id)
    {
        $sql = "SELECT a.*, b.name as parent_name FROM oa_org a LEFT JOIN system ON a.id = system.man_org_id LEFT JOIN oa_org b ON b.id = a.parent_id WHERE system.system_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }

    public function add_org($org)
    {
        $sql = "INSERT INTO oa_org (name, parent_id, comments) VALUES (?, ?, ?)";
        $sql = $this->clean_sql($sql);
        $data = array("$org->name", "$org->parent_id", "$org->comments");
        $query = $this->db->query($sql, $data);
        return ($this->db->insert_id());
    }

    public function delete_org($id)
    {
        $data = array("$id");
        $sql = "UPDATE system SET man_org_id = '0' WHERE man_org_id = ?";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        $sql = "DELETE FROM oa_org WHERE id = ?";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
    }

    public function edit_org($org)
    {
        $sql = "UPDATE oa_org SET name = ?, parent_id = ?, comments = ? WHERE id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$org->name", "$org->parent_id", "$org->comments", "$org->id", );
        if ($query = $this->db->query($sql, $data)) {
            return(true);
        } else {
            return false;
        }
    }

    public function list_devices_in_org($id = 0, $user_id = 0)
    {
        // we have not requested a specific group.
        // display all items the current user has at least 'level 3' - view list rights on.
        $sql = " SELECT system.system_id, system.hostname, system.man_description,
    				system.man_ip_address, system.icon, system.man_os_name, system.man_os_family
    			FROM
    				system, oa_group, oa_group_sys, oa_group_user
    			WHERE
    				system.system_id IN (
    					SELECT
    						system.system_id
    					FROM
    						system, oa_group_sys, oa_group, oa_group_user
    					WHERE
    						system.man_status = 'production' AND
    						system.system_id = oa_group_sys.system_id AND
    						oa_group_sys.group_id = oa_group.group_id AND
    						oa_group.group_id = oa_group_user.group_id AND
    						oa_group_user.user_id = ?
    						) AND
    				system.system_id = oa_group_sys.system_id AND
    				oa_group_sys.group_id = oa_group.group_id AND
    				oa_group.group_id = oa_group_user.group_id AND
    				oa_group_user.group_user_access_level > '2' AND
    				oa_group_user.user_id = ? AND
    				system.man_org_id = ?
    			GROUP BY
    				system.system_id";
        $sql = $this->clean_sql($sql);
        $data = array("$user_id", "$user_id", "$id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }
}
