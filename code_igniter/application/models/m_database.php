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
 * @version   2.0.1

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_database extends MY_Model
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
                $result = $this->run_sql($sql, array());
                $item->attributes->count = intval($result[0]->count);

                if ($this->db->field_exists('current', $table)) {
                    $sql = "SELECT COUNT(*) AS `count` FROM `" . $table . "` WHERE current = 'y'";
                    $result = $this->run_sql($sql, array());
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

                if ($table == 'system') {
                    $item->attributes->status = array();
                    $sql = "SELECT status, COUNT(*) AS `count` FROM system GROUP BY `status`";
                    $query = $this->db->query($sql);
                    $item->attributes->status = $query->result();
                }

                # TODO - add in if the column has an index or is a foreign key

                $item->attributes->columns = array();
                $item->attributes->columns = $this->db->field_data($table);
                foreach ($item->attributes->columns as &$column) {
                    if ($column->type == 'enum') {
                        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `values` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . $this->db->database . "' AND TABLE_NAME = '" . $table . "' AND COLUMN_NAME = '" . $column->name . "'";
                        $result = $this->run_sql($sql, array());
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
        // $result = $this->format_data($result, 'summaries');
        return ($return);
    }

    public function delete($table = '', $current = '', $status = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if ($table == '') {
            $CI = & get_instance();
            $table = $CI->response->meta->id;
        }
        if ($current == '') {
            if (!empty($this->response->meta->current)) {
                $current = $this->response->meta->current;
            } else {
                $current = 'n';
            }
        }
        if ($status == '') {
            if (!empty($CI->response->meta->filter)) {
                foreach ($CI->response->meta->filter as $filter) {
                    if ($filter->name == 'status') {
                        $status = $filter->value;
                    }
                }
            }
        }
        if ($this->db->table_exists($table)) {
            if ($this->db->field_exists('current', $table)) {
                $sql = "DELETE FROM `" . $table . "` WHERE current = '" . $current . "'";
                $this->run_sql($sql, array());
                return true;
            } elseif ($table == 'system') {
                if ($status != '') {
                    $sql = "DELETE FROM system WHERE status = ?";
                    $this->run_sql($sql, array($status));
                    return true;
                } else {
                    return false;
                }
            } else {
                if ($current == 'all') {
                    $sql = "DELETE FROM `" . $table . "`";
                    $this->run_sql($sql, array());
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    public function execute($table = '', $action = '', $format = '', $attributes = array())
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        if ($table == '') {
            $table = $CI->response->meta->id;
        }
        if (!$this->db->table_exists($table)) {
            return;
        }
        if ($action == '') {
            $action = $CI->response->meta->sub_resource;
        }
        if ($format == '') {
            $format = $CI->response->meta->format;
        }

        $sql = '';

        switch ($action) {
            case 'table and row count':
                $sql = "SELECT TABLE_NAME AS `table`, TABLE_ROWS AS `count` FROM `information_schema`.`tables` WHERE `table_schema` = '". $this->db->database . "'";
                $return = 'array';
                break;

            case 'row count':
                $sql = "SELECT COUNT(*) AS `count` FROM `" . $table . "`";
                $return = 'count';
                break;

            case 'export table':
                $sql = "SELECT COUNT(*) AS `count` FROM `$table`";
                $result = $this->run_sql($sql, array());
                $count = intval($result[0]->count);
                if ($format == 'csv') {
                    $this->load->dbutil();
                    $sql = "SELECT * FROM `" . $table . "`";
                    $return = 'array';
                    $delimiter = ",";
                    $newline = "\r\n";
                    $query = $this->db->query($sql);
                    if ($count < 1001) {
                        $return = $this->dbutil->csv_from_result($query, $delimiter, $newline);
                        return $return;
                    } else {
                        $backup = $this->dbutil->csv_from_result($query, $delimiter, $newline);
                        $this->load->helper('download');
                        force_download('open-audit_' . $table . '.csv', $backup);
                    }
                    exit();
                }
                if ($format == 'xml') {
                    $this->load->dbutil();
                    $sql = "SELECT * FROM `" . $table . "`";
                    $query = $this->db->query($sql);
                    $config = array ('root' => 'root', 'element' => 'item', 'newline' => "\n", 'tab' => "\t");
                    if ($count < 1001) {
                        $return = $this->dbutil->xml_from_result($query, $config);
                        return $return;
                    } else {
                        $backup = $this->dbutil->xml_from_result($query, $config);
                        $this->load->helper('download');
                        force_download('open-audit_' . $table . '.xml', $backup);
                    }
                    exit();
                }
                if ($format == 'sql') {
                    if (php_uname('s') == 'Windows NT') {
                        $mysqldump = 'c:\\xampplite\\mysql\\bin\\mysqldump.exe';
                    }
                    if (php_uname('s') == 'Darwin') {
                        $mysqldump = '/usr/local/mysql/bin/mysqldump';
                    }
                    if (php_uname('s') == 'Linux') {
                        exec('which mysqldump', $temp);
                        $mysqldump = $temp[0];
                        unset($temp);
                    }
                    #$command = $mysqldump . ' --extended-insert=FALSE -u ' . $CI->db->username . ' -p' . $CI->db->password . ' ' . $CI->db->database . ' ' . $table;
                    $command = '"' . $mysqldump . '" --extended-insert=FALSE -u ' . $CI->db->username . ' -p' . $CI->db->password . ' -h' . $CI->db->hostname . ' ' . $CI->db->database . ' ' . $table;
                    
                    if ($count < 1001) {
                        // echo "<pre>\n";
                        // passthru($command);
                        exec($command, $return);
                        return implode("\n", $return);
                    } else {
                        exec($command, $backup);
                        $backup = implode("\n", $backup);
                        $this->load->helper('download');
                        force_download('open-audit_' . $table . '.sql', $backup);
                    }
                    exit();
                }
                break;
            
            case 'tables':
                $sql = "SHOW TABLES";
                $return = 'array';
                break;
            
            case 'fields':
                $sql = "SELECT COLUMN_NAME FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA` = '". $this->db->database . "' AND TABLE_NAME = '" . $table . "'";
                $return = 'array';
                break;
            
            case 'distinct fields':
                $sql = "SELECT DISTINCT(@field) AS `field` FROM `" . $table . "` ORDER BY `field`";
                $return = 'array';
                break;
            
            case 'delete non-current':
                $sql = "DELETE FROM `" . $table . "` WHERE current = 'n'";
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
        if ($return != 'text') {
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
        } else {
            $result = shell_exec($command);
            return $result;
        }
        #print_r($result);
    }



    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
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
}
