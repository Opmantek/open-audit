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
class M_systems extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function api_index($level = 'min')
    {
        if ($level === 'list') {
            $sql = 'SELECT system_id AS id, concat("/omk/oae/node_config_documents/", system_id) as show_resource FROM system WHERE man_status = "production"';
        }
        if ($level === 'min') {
            $sql = 'SELECT system_id, hostname, man_ip_address, man_os_name, man_type FROM system WHERE man_status = "production"';
        }
        if ($level === 'select') {
            $sql = 'SELECT system_id, hostname, domain, man_ip_address, man_os_group, man_os_family, man_os_name, man_type, man_serial, man_model, man_manufacturer, pc_memory, pc_num_processor, man_environment, man_class FROM system WHERE man_status = "production"';
        }
        if ($level === 'max') {
            $sql = 'SELECT * FROM system WHERE man_status = "production"';
        }
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function search($search_term = '', $group_id = '0')
    {
        $tables = array('bios', 'disk', 'dns', 'ip', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'optical', 'pagefile', 'partition', 'print_queue', 'processor', 'route', 'san', 'scsi', 'service', 'server', 'server_item', 'share', 'software', 'software_key', 'sound', 'system', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
        $sql = '';
        $result_set = array();
        foreach ($tables as $table) {
            $fields = $this->db->list_fields($table);
            $select_string = '';
            $search_string = '';
            foreach ($fields as $field) {
                if ((mb_strpos($field, '_id') === false) and (mb_strpos($field, 'timestamp') === false)) {
                    // we have column that is not an "id" column, nor a timestamp
                    // search on this column
                    $select_string .= ", ".$table.".".$field." ";
                    $search_string .= " OR ".$table.".".$field." LIKE '%".$search_term."%' ";
                }
            }
            $search_string = mb_substr($search_string, 3);
            $select_string = mb_substr($select_string, 1);
            // now create the search statement
            if ($table != 'system') {
                $sql = "SELECT DISTINCT(a.system_id), a.icon, a.hostname, a.domain, a.man_ip_address, a.man_type, $select_string
			            FROM system a, oa_group_sys, $table
			            WHERE a.system_id = $table.system_id AND a.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = '".$group_id."' AND $table.current = 'y' AND ( $search_string ) ";
            } else {
                $sql = "SELECT DISTINCT(a.system_id), a.icon, a.hostname, a.domain, a.man_ip_address, a.man_type, $select_string
                        FROM system a, oa_group_sys, $table
                        WHERE a.system_id = $table.system_id AND a.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = '".$group_id."' AND ( $search_string ) ";
            }
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $result = $query->result();
            if (count($result > 0)) {
                // we have a returned resultset - enumerate our way through it
                foreach ($result as $row) {
                    // enumerate each row of the resultset
                    foreach ($fields as $field) {
                        // for each field in this table, check to see if the result matches the search
                        $i = new stdClass();
                        $i->system_id = $row->system_id;
                        $i->icon = $row->icon;
                        $i->hostname = $row->hostname;
                        $i->domain = $row->domain;
                        $i->man_ip_address = $row->man_ip_address;
                        $i->man_type = $row->man_type;
                        $i->table = $table;
                        $i->field = '';
                        $i->result = '';
                        if ((mb_strpos($field, '_id') === false) and (mb_strpos($field, 'timestamp') === false)) {
                            if (mb_strpos(mb_strtoupper($row->$field), mb_strtoupper($search_term)) !== false) {
                                $i->field = $field;
                                $i->result = $row->$field;
                                $result_set[] = $i;
                            }
                        }
                        unset($i);
                    }
                }
            }
        }

        return ($result_set);
    }

    public function get_group_systems($group_id = 0)
    {
        $group_id = intval($group_id);
        // check if the group has SQL defined in the DB (group_display_sql)
        $sql = "SELECT group_display_sql FROM oa_group WHERE group_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$group_id");
        $query = $this->db->query($sql, $data);
        $result = $query->row();
        $display_sql = $result;
        if (($display_sql->group_display_sql === '') or ($display_sql->group_display_sql === ' ')) {
            // the group has no specific SQL Select (group_display_sql).
            // Use a standard SQL Select.
            $sql = "SELECT
					system.system_id,
					system.hostname,
					system.domain,
					system.man_description,
					system.man_ip_address,
					system.man_type,
					system.man_os_family,
					system.man_os_name,
					system.icon,
					system.man_manufacturer,
					system.man_model,
					system.man_serial,
					system.type
				FROM
					system,
					oa_group_sys
				WHERE
					system.system_id = oa_group_sys.system_id AND
					oa_group_sys.group_id = ? AND
					system.man_status = 'production'
				GROUP BY
					system.system_id";
            $data = array("$group_id");
        } else {
            $sql = $display_sql->group_display_sql;
            $data = array("$group_id");
        }
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function get_distinct_os_group()
    {
        $sql = "SELECT distinct(man_os_group) FROM system ORDER BY man_os_group";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function get_distinct_os_family()
    {
        $sql = "SELECT distinct(man_os_family) FROM system ORDER BY man_os_family";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function get_distinct_os_name()
    {
        $sql = "SELECT distinct(man_os_name) FROM system ORDER BY man_os_name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function get_count()
    {
        $sql = "SELECT count(*) AS count FROM system WHERE man_status = 'production'";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        $count = $result[0]->count;

        return($count);
    }

    public function get_non_prod_count()
    {
        $sql = "SELECT count(*) AS count FROM system WHERE man_status <> 'production'";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        $count = $result[0]->count;

        return($count);
    }

    public function get_group_system_count($group_id = '0')
    {
        $sql = "SELECT count(*) as total FROM oa_group_sys WHERE group_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$group_id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();

        return $row->total;
    }
}
