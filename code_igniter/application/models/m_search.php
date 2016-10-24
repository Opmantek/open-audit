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
class M_search extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        $CI = & get_instance();
        $value = $CI->response->meta->received_data->attributes->value;
        $columns = json_decode($CI->response->meta->received_data->attributes->columns);
        $tables = json_decode($CI->response->meta->received_data->attributes->tables);
        $return = array();

        // This is our standard menu bar search for name or IP
        if ($tables[0] == 'system' and $columns[0] == 'name' and $columns[1] == 'ip') {
            // make our padded IP
            // TODO - better logic here - account for 2 digit and 1 digit octets
            $temp = explode('.', $value);
            for ($i=0; $i < count($temp); $i++) { 
                $temp[$i] = mb_substr("000".$temp[$i], -3);
            }
            #$padded_ip = '%' . implode('.', $temp) . '%';
            $padded_ip = implode('.', $temp);

            $sql = "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.description AS `system.description`, system.os_family AS `system.os_family`, system.status AS `system.status`, ip.ip AS `ip.ip` FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE system.org_id IN (" . $CI->user->org_list . ") AND (
                system.name LIKE '%" . $value . "%' OR
                system.hostname LIKE '%" . $value . "%' OR 
                system.dns_hostname LIKE '%" . $value . "%' OR 
                system.sysName LIKE '%" . $value . "%' OR 
                system.domain LIKE '%" . $value . "%' OR 
                system.dns_domain LIKE '%" . $value . "%' OR 
                system.ip LIKE '" . $padded_ip . "' OR
                system.ip LIKE '%" . $value . "%' OR
                ip.ip LIKE '" . $padded_ip . "' OR
                ip.ip LIKE '%" . $value . "%'
                ) GROUP BY system.id";
            $result = $this->run_sql($sql, array());
            $return = $this->format_data($result, 'devices');
        } else {
            foreach ($tables as $table) {
                unset($result);
                $sql_select = '';
                $sql_where = '';
                foreach ($columns as $column) {
                    if ($this->db->field_exists($column, $table)) {
                        if ($sql_select != '') {
                            $sql_select .= ", `" . $column . "`";
                        } else {
                            $sql_select = "`" . $column . "`";
                        }
                        if ($sql_where != '') {
                            $sql_where .= " OR `" . $column . "` LIKE ?";
                        } else {
                            $sql_where = "`" . $column . "` LIKE ?";
                        }
                        $data_array[] = '%'.$value.'%';
                    }
                }
                $sql = "SELECT id, " . $sql_select . " FROM `$table` WHERE " . $sql_where;
                $result = $this->run_sql($sql, $data_array);
                $return = $this->format_data($result, 'devices');
            }
        }
        return $return;
    }

    public function collection()
    {
        $CI = & get_instance();
        $sql = $this->collection_sql('files', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'files');
        return ($result);
    }

    public function update()
    {
        $CI = & get_instance();
        $sql = '';
        $fields = ' path description ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `files` " . $sql . ", `edited_by` = '" . $CI->user->full_name . "', `edited_date` = NOW() WHERE id = " . intval($CI->response->meta->id);
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
        $CI = & get_instance();
        $sql = "DELETE FROM `files` WHERE id = ?";
        $data = array(intval($id));
        $this->run_sql($sql, $data);
        return true;
    }

    private function count_data($result)
    {
        // do we have any retrieved rows?
        $CI = & get_instance();
        $trace = debug_backtrace();
        $caller = $trace[1];
        if (count($result) == 0) {
            log_error('ERR-0005', strtolower(@$caller['class'] . '::' . @$caller['function']));
        }
    }

}
