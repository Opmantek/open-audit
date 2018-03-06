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
* @version   2.2
* @link      http://www.open-audit.org
 */
class M_widgets extends MY_Model
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
        $sql = "SELECT * FROM widgets WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'widgets');
        return ($result);
    }

    public function update()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $CI = & get_instance();
        $sql = '';
        $fields = ' name org_id type user_id description options ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `widgets` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
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
            $sql = "SELECT type FROM widgets WHERE id = ?";
            $data = array($id);
            $result = $this->run_sql($sql, $data);
            if ($result[0]->type == 'default') {
                log_error('ERR-0013', 'm_widgets::delete');
                return false;
            }
            // attempt to delete the item
            $sql = "DELETE FROM `widgets` WHERE id = ?";
            $data = array($id);
            $this->run_sql($sql, $data);
            return true;
        } else {
            log_error('ERR-0013', 'm_widgets::delete');
            return false;
        }
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        if (!$this->db->table_exists('widgets')) {
            return;
        }
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == 'widgets') {
            $filter = $this->build_filter();
            $properties = $this->build_properties();
            if ($CI->response->meta->sort == '') {
                $sort = 'ORDER BY id';
            } else {
                $sort = 'ORDER BY ' . $CI->response->meta->sort;
            }
            if ($CI->response->meta->limit == '') {
                $limit = '';
            } else {
                $limit = 'LIMIT ' . intval($CI->response->meta->limit);
                if ($CI->response->meta->offset != '') {
                    $limit = $limit . ', ' . intval($CI->response->meta->offset);
                }
            }
            # get the total count
            $sql = "SELECT COUNT(*) as `count` FROM `widgets`";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $result = $query->result();
            if (!empty($CI->response->meta->total)) {
                $CI->response->meta->total = intval($result[0]->count);
            }
        } else {
            $properties = '*';
            $filter = '';
            $sort = '';
            $limit = '';
        }
        # get the response data
        $sql = "SELECT " . $properties . " FROM `widgets` " . $filter . " " . $sort . " " . $limit;
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'widgets');
        return ($result);
    }

    private function pie_data($widget, $org_list) {
        $device_tables = array('bios','connections','disk','dns','ip','log','memory','module','monitor','motherboard','netstat','network','nmap','optical','pagefile','partition','print_queue','processor','route','san','scsi','server','server_item','service','share','software','software_key','sound','task','user','user_group','variable','video','vm','warranty','windows');
        $group_by = $widget->group_by;
        if (empty($group_by)) {
            $group_by = $widget->primary;
        }
        $temp = explode('.', $widget->primary);
        $primary_table = $temp[0];
        unset($temp);
        $temp = explode('.', $widget->secondary);
        $secondary_table = $temp[0];
        unset($temp);
        if ($primary_table == 'system') {
            if ($primary_table == $secondary_table) {
                $join = 'system';
                $filter = 'system.org_id IN (' . $org_list . ') AND ';
            } else {
                $join = 'system';
                $filter = 'system.org_id IN (' . $org_list . ') AND ';
            }
        }
        if (!empty($widget->sql)) {
            $sql = $widget_sql;
        } else  if (in_array($primary_table, $device_tables)) {
            $sql = "SELECT " .  $this->sql_esc($widget->primary) . " AS " . $this->sql_esc('name') . ", " . 
                                $this->sql_esc($widget->secondary) . " AS " . $this->sql_esc('description') . ", " . 
                                $this->sql_esc($widget->ternary) . " AS " . $this->sql_esc('ternary') . ", " . 
                                " COUNT(" . $this->sql_esc($widget->primary) . ") AS " . $this->sql_esc('count') . 
                                " FROM " .  $this->sql_esc('system') . " LEFT JOIN " . $this->sql_esc($primary_table) . 
                                " ON (" . $this->sql_esc('system.id') . ' = ' . $this->sql_esc($primary_table . '.system_id') . ") " . 
                                " WHERE @filter GROUP BY " . $this->sql_esc($group_by);
            $sql = str_replace('@filter', $this->sql_esc($primary_table.'.org_id') . " IN (" . $org_list . ")", $sql);
            // if (!empty($widget->filter)) {
            //     $sql = str_replace('@filter', $widget->table . ".org_id IN (" . $CI->user->org_list . ") AND " . $widget->filter, $sql);
            // } else {
            //     $sql = str_replace('@filter', $widget->table . ".org_id IN (" . $CI->user->org_list . ")", $sql);
            // }
        } else if ($primary_table == 'system') {
            $sql = "SELECT " .  $this->sql_esc($widget->primary) . " AS " . $this->sql_esc('name') . ", " . 
                                $this->sql_esc($widget->secondary) . " AS " . $this->sql_esc('description') . ", " . 
                                $this->sql_esc($widget->ternary) . " AS " . $this->sql_esc('ternary') . ", " . 
                                " COUNT(" . $this->sql_esc($widget->primary) . ") AS " . $this->sql_esc('count') . ", " . 
                                " CAST((COUNT(*) / (SELECT COUNT(" . $this->sql_esc($widget->primary) . ") FROM " . $this->sql_esc($primary_table) . " WHERE " . $this->sql_esc('system.org_id') . "IN (" . $org_list . ")) * 100) AS unsigned) AS 'percent'" . 
                                " FROM " .  $this->sql_esc('system') . 
                                " WHERE @filter GROUP BY " . $this->sql_esc($group_by);
            if (!empty($widget->limit)) {
                $limit = intval($widget->limit);
                $sql .= ' LIMIT ' . $limit;
            }
            $sql = str_replace('@filter', $this->sql_esc($primary_table.'.org_id') . " IN (" . $org_list . ")", $sql);
        }
        $result = $this->run_sql($sql, array());
        return $result;
    }

    public function execute($id = '') {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        $CI = & get_instance();
        if ($id == '') {
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "/* m_widgets::execute */ " . "SELECT * FROM widgets WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $widget = $result[0];
        if ($widget->type == 'pie') {
            $result = $this->pie_data($widget, $CI->user->org_list);
        }
        $result = $this->format_data($result, 'widgets');
        return ($result);
    }

    private function build_properties() {
        $CI = & get_instance();
        $properties = '';
        $temp = explode(',', $CI->response->meta->properties);
        for ($i=0; $i<count($temp); $i++) {
            if (strpos($temp[$i], '.') === false) {
                $temp[$i] = 'roles.'.trim($temp[$i]);
            } else {
                $temp[$i] = trim($temp[$i]);
            }
        }
        $properties = implode(',', $temp);
        return($properties);
    }

    private function build_filter() {
        $CI = & get_instance();
        $reserved = ' properties limit resource action sort current offset format ';
        $filter = '';
        foreach ($CI->response->meta->filter as $item) {
            if (strpos(' '.$item->name.' ', $reserved) === false) {
                $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
            }
        }
        if ($filter != '') {
            $filter = substr($filter, 5);
            $filter = ' WHERE ' . $filter;
        }
        return($filter);
    }
}
