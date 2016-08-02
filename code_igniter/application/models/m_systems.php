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
class M_systems extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function api_index($level = 'min')
    {
        if ($level === 'list') {
            $sql = 'SELECT id, concat("/omk/oae/node_config_documents/", id) as show_resource FROM system WHERE status = "production"';
        }
        if ($level === 'min') {
            $sql = 'SELECT id AS `system_id`, hostname, ip, os_name AS `man_os_name`, type AS `man_type` FROM system WHERE status = "production"';
        }
        if ($level === 'select') {
            $sql = 'SELECT id AS `system_id`, hostname, domain, ip, os_group AS `man_os_group`, os_family AS `man_os_family`, os_name AS `man_os_name`, type AS `man_type`, serial AS `man_serial`, model AS `man_model`, manufacturer AS `man_manufacturer`, memory_count AS `pc_memory`, processor_count AS `pc_num_processor`, environment AS `man_environment`, clss AS `man_class` FROM system WHERE status = "production"';
        }
        if ($level === 'max') {
            $sql = 'SELECT * FROM system WHERE status = "production"';
        }
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function search($search_term = '', $group_id = '0')
    {
        $tables = array('bios', 'disk', 'dns', 'ip', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'print_queue', 'processor', 'route', 'san', 'scsi', 'service', 'server', 'server_item', 'share', 'software', 'software_key', 'sound', 'system', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
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
                $sql = "SELECT DISTINCT(system.id) AS `system.id`, system.icon, system.hostname, system.domain, system.ip, system.type, `$table`.id, $select_string
			            FROM system, oa_group_sys, $table
			            WHERE system.id = $table.system_id AND system.id = oa_group_sys.system_id AND oa_group_sys.group_id = '".$group_id."' AND $table.current = 'y' AND ( $search_string )  AND `$table`.current = 'y' GROUP BY `$table`.`id`";
            } else {
                $sql = "SELECT DISTINCT(system.id) AS `system.id`, system.icon, system.hostname, system.domain, system.ip, system.type, $select_string
                        FROM system, oa_group_sys
                        WHERE system.id = oa_group_sys.system_id AND oa_group_sys.group_id = '".$group_id."' AND ( $search_string )";
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
                        $i->{'system.id'} = $row->{'system.id'};
                        $i->icon = $row->icon;
                        $i->hostname = $row->hostname;
                        $i->domain = $row->domain;
                        $i->ip = $row->ip;
                        $i->type = $row->type;
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
            $sql = "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.dns_domain AS `system.dns_domain`, system.ip AS `system.ip`, system.description AS `system.description`, system.os_family AS `system.os_family`, system.os_name AS `system.os_name`, system.status AS `system.status`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial` FROM system, oa_group_sys WHERE system.id = oa_group_sys.system_id AND oa_group_sys.group_id = ? GROUP BY system.id";
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
        $sql = "SELECT distinct(os_group) FROM system ORDER BY os_group";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function get_distinct_os_family()
    {
        $sql = "SELECT distinct(os_family) FROM system ORDER BY os_family";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function get_distinct_os_name()
    {
        $sql = "SELECT distinct(os_name) FROM system ORDER BY os_name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function get_count()
    {
        $sql = "SELECT count(*) AS count FROM system WHERE status = 'production'";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        $count = $result[0]->count;

        return($count);
    }

    public function get_non_prod_count()
    {
        $sql = "SELECT count(*) AS count FROM system WHERE status <> 'production'";
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
