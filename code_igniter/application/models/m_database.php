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
class M_database extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function execute($sub_resource = '', $attributes = '')
    {
        $CI = & get_instance();
        if ($sub_resource == '') {
            $sub_resource = $CI->response->meta->sub_resource;
        }
        if ($attributes == '') {
            $attributes = $CI->response->meta->received_data;
        }
        switch ($sub_resource) {
            case 'table and row count':
                $sql = "SELECT TABLE_NAME AS `table`, TABLE_ROWS AS `count` FROM `information_schema`.`tables` WHERE `table_schema` = '". $this->db->database . "'";
                $return = 'array';
                break;

            case 'row count':
                $sql = "SELECT COUNT(*) AS `count` FROM `@table`";
                $return = 'count';
                break;

            case 'export table':
                $sql = "SELECT * FROM `@table`";
                $return = 'array';
                break;
            
            case 'tables':
                $sql = "SHOW TABLES";
                $return = 'array';
                break;
            
            case 'fields':
                $sql = "SELECT COLUMN_NAME FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA` = '". $this->db->database . "' AND TABLE_NAME = '@table'";
                $return = 'array';
                break;
            
            case 'distinct fields':
                $sql = "SELECT DISTINCT(@field) AS `field` FROM `@table` ORDER BY `field`";
                $return = 'array';
                break;
            
            case 'delete non-current':
                $sql = "DELETE FROM `@table` WHERE current = 'n'";
                $return = 'delete_count';
                break;

            case 'delete user sessions':
                $sql = "DELETE FROM `oa_user_sessions` WHERE `last_activity` < UNIX_TIMESTAMP(NOW() - INTERVAL @day DAY)";
                $return = 'delete_count';
                break;
            
            default:
                # code...
                break;
        }

        foreach ($attributes as $key => $value) {
            if (stripos($sql, '@'.$key) !== false) {
                $sql = str_replace('@'.$key, $value, $sql);
            }
        }

        $result = $this->run_sql($sql, array());
        switch ($return) {
            case "array":
                return $result;
                break;

            case "count":
                return intval($result[0]->count);
                break;

            case "delete_count":
                return intval($this->db->affected_rows());
                break;

            default:
                return $result;
                break;
        }
        #print_r($result);
    }

    // public function create()
    // {
    //     $CI = & get_instance();
    //     if (empty($CI->response->meta->received_data->attributes->name)) {
    //         log_error('ERR-0010', 'm_dashboards::create');
    //         return false;
    //     }
    //     $attributes = array('name', 'org_id', 'table', 'column');
    //     $data = array();
    //     foreach ($attributes as $attribute) {
    //         $data[] = $CI->response->meta->received_data->attributes->{$attribute};
    //     }
    //     $data[] = $CI->user->full_name;
    //     $sql = "INSERT INTO `dashboards` VALUES (NULL, ?, ?, ?, ?, ?, NOW())";
    //     $this->run_sql($sql, $data);
    //     return $this->db->insert_id();
    // }

    public function read($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = $CI->response->meta->id;
        } else {
            $id = $id;
        }
        $return = array();
        $tables = $this->db->list_tables();
        foreach ($tables as $table) {
            if ($id == $table) {
                $item = new stdClass();
                $item->type = 'database';
                $item->id = $table;
                $item->attributes = new stdClass();
                $item->attributes->name = $table;
                
                $sql = "SELECT COUNT(*) AS `count` FROM `" . $table . "`";
                $query = $this->db->query($sql);
                $result = $query->result();
                $item->attributes->count = intval($result[0]->count);

                if ($this->db->field_exists('current', $table)) {
                    $sql = "SELECT COUNT(*) AS `count` FROM `" . $table . "` WHERE current = 'y'";
                    $query = $this->db->query($sql);
                    $result = $query->result();
                    $item->attributes->current_row = true;
                    $item->attributes->current = intval($result[0]->count);
                    $item->attributes->non_current = intval($item->attributes->count -$item->attributes->current);
                } else {
                    $item->attributes->current_row = false;
                }

                if ($this->db->field_exists('org_id', $table)) {
                    $item->attributes->org_id_row = true;
                } else {
                    $item->attributes->org_id_row = false;
                }


                $item->attributes->columns = array();
                $item->attributes->columns = $this->db->field_data($table);
                foreach ($item->attributes->columns as &$column) {
                    if ($column->type == 'enum') {
                        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `values` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . $this->db->database . "' AND TABLE_NAME = '" . $table . "' AND COLUMN_NAME = '" . $column->name . "'";
                        $query = $this->db->query($sql);
                        $result = $query->result();
                        $column->values = $result[0]->values;
                    }
                }
                $return[] = $item;
            }
        }

        // $fields = $this->db->field_data($id);

        // $return = array();
        // $item = new stdClass();
        // $sql = "SELECT COUNT(*) AS `count` FROM `" . $id . "`";
        // $data = array();
        // $result = $this->run_sql($sql, $data);
        // $item->type = 'database';
        // $item->id = $id;
        // $item->attributes = new stdClass();
        // $item->attributes->count = intval($result[0]->count);
        // $result = $this->format_data($result, 'dashboards');
        return ($return);
    }

    // public function update()
    // {
    //     $CI = & get_instance();
    //     $sql = '';
    //     $fields = ' name org_id table column ';
    //     foreach ($CI->response->meta->received_data->attributes as $key => $value) {
    //         if (strpos($fields, ' '.$key.' ') !== false) {
    //             if ($sql == '') {
    //                 $sql = "SET `" . $key . "` = '" . $value . "'";
    //             } else {
    //                 $sql .= ", `" . $key . "` = '" . $value . "'";
    //             }
    //         }
    //     }
    //     $sql = "UPDATE `dashboards` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
    //     $this->run_sql($sql);
    //     return;
    // }

    public function delete($table = '', $current = 'n')
    {
        if ($table == '') {
            $CI = & get_instance();
            $table = $CI->response->meta->id;
        }
        if ($this->db->table_exists($table)) {
            if ($this->db->field_exists('current', $table)) {
                $sql = "DELETE FROM `" . $table . "` WHERE current = '" . $current . "'";
                $data = array();
                $this->run_sql($sql, $data);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function collection()
    {
        $return = array();
        $tables = $this->db->list_tables();
        foreach ($tables as $table) {
            $item = new stdClass();
            $item->type = 'database';
            $item->id = $table;
            $item->attributes = new stdClass();
            
            $sql = "SELECT COUNT(*) AS `count` FROM `" . $table . "`";
            $query = $this->db->query($sql);
            $result = $query->result();
            $item->attributes->name = $table;
            $item->attributes->count = intval($result[0]->count);

            if ($this->db->field_exists('current', $table)) {
                $sql = "SELECT COUNT(*) AS `count` FROM `" . $table . "` WHERE current = 'y'";
                $query = $this->db->query($sql);
                $result = $query->result();
                $item->attributes->current_row = true;
                $item->attributes->current = intval($result[0]->count);
                $item->attributes->non_current = intval($item->attributes->count -$item->attributes->current);
            } else {
                $item->attributes->current_row = false;
            }

            if ($this->db->field_exists('org_id', $table)) {
                $item->attributes->org_id_row = true;
            } else {
                $item->attributes->org_id_row = false;
            }

            if ($this->db->field_exists('system_id', $table)) {
                $item->attributes->system_id_row = true;
            } else {
                $item->attributes->system_id_row = false;
            }
            $item->links = new stdClass();
            $item->links->self = $this->config->config['base_url'] . 'index.php/database/' . $item->id;

            $return[] = $item;
        }

        return $return;
    }

    // public function execute($id = '')
    // {
    //     if ($id == '') {
    //         $CI = & get_instance();
    //         $id = intval($CI->response->meta->id);
    //     } else {
    //         $id = intval($id);
    //     }
    //     $sql = "SELECT * FROM dashboards WHERE id = ?";
    //     $data = array($id);
    //     $dashboard = $this->run_sql($sql, $data);

    //     if ($dashboard[0]->table == 'oa_org') {
    //         $org_id = 'id';
    //     } else {
    //         $org_id = 'org_id';
    //     }
    //     $tables = ' additional_field_item audit_log bios change_log credential disk dns edit_log file ip log memory module monitor motherboard netstat network nmap optical partition pagefile print_queue processor purchase route san scsi service server server_item share software software_key sound task user user_group variable video vm windows ';
        
    //     if (stripos($tables, $dashboard[0]->table) !== false) {
    //         $sql = "SELECT " . $dashboard[0]->id . " AS `id`, COUNT(*) AS `count`, " . $dashboard[0]->table . "." . $dashboard[0]->column . " AS `name` FROM system LEFT JOIN " . $dashboard[0]->table . " ON (system.id = " . $dashboard[0]->table . ".system_id and " . $dashboard[0]->table . ".current = 'y') WHERE " . $dashboard[0]->table . "." . $dashboard[0]->column . " IS NOT NULL AND " . $dashboard[0]->table . "." . $dashboard[0]->column . " != '' AND system.org_id IN (" . $CI->user->org_list . ") GROUP BY " . $dashboard[0]->table . "." . $dashboard[0]->column;
        
    //     } else {
    //         $sql = "SELECT " . $dashboard[0]->id . " AS `id`, COUNT(*) AS `count`, " . $dashboard[0]->column . " AS `name` FROM `" . $dashboard[0]->table . "` WHERE `$org_id` IN (" . $CI->user->org_list . ") GROUP BY `" . $dashboard[0]->column . "`";
    //     }
    //     $result = $this->run_sql($sql, array());
    //     $result = $this->format_data($result, 'dashboards');

    //     switch ($dashboard[0]->table) {

    //         case 'oa_location':
    //             $collection = 'locations';
    //             break;

    //         case 'networks':
    //             $collection = 'networks';
    //             break;

    //         case 'oa_org':
    //             $collection = 'orgs';
    //             break;

    //         case 'system':
    //             $collection = 'devices';
    //             break;
            
    //         default:
    //             $collection = 'devices';
    //             break;
    //     }
    //     $link = $CI->config->config['base_url'] . 'index.php/' . $collection . '?' . $dashboard[0]->table . '.' . $dashboard[0]->column . '=';
    //     for ($i=0; $i < count($result); $i++) {
    //         $result[$i]->attributes->link = $link . urlencode($result[$i]->attributes->name);
    //     }

    //     return ($result);
    // }


}
