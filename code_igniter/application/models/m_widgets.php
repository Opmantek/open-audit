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
        $other_tables = array('agents','attributes','collectors','connections','credentials','dashboards','discoveries','fields','files','groups','ldap_servers','licenses','locations','networks','orgs','queries','scripts','summaries','tasks','users','widgets');
        $sql = '';
        $group_by = $widget->group_by;
        if (empty($group_by)) {
            $group_by = $widget->primary;
        }
        $temp = explode('.', $widget->primary);
        $primary_table = $temp[0];
        $primary_table = $this->sql_unesc($primary_table);
        unset($temp);
        $temp = explode('.', $widget->secondary);
        $secondary_table = $temp[0];
        $secondary_table = $this->sql_unesc($secondary_table);
        unset($temp);

        $CI = & get_instance();
        if (!empty($widget->sql)) {
            $sql = $widget->sql;
            if (stripos($sql, 'where @filter and') === false and stripos($sql, 'where @filter group by') === false) {
                # invalid query
                return false;
            }
            $temp = explode(' ', $sql);
            $full = $temp[1];
            $temp = explode('.', $full);
            $primary_table = $temp[0];
            $attribute = $full;
            unset($temp);
            if ($primary_table == 'system' or in_array($primary_table, $device_tables)) {
                $collection = 'devices';
                $sql = str_replace('@filter', $this->sql_esc('system.org_id') . " IN (" . $org_list . ")", $sql);
            } else if (in_array($primary_table, $other_tables)) {
                $collection = $primary_table;
                $sql = str_replace('@filter', $this->sql_esc($primary_table.'.org_id') . " IN (" . $org_list . ")", $sql);
            } else {
                # invalid query
                #return false;
                $collection = 'devices';
                $sql = str_replace('@filter', $this->sql_esc('system.org_id') . " IN (" . $org_list . ")", $sql);
            }

        } else if (in_array($primary_table, $device_tables)) {
            $collection = 'devices';
            $attribute = $widget->primary;
            $sql = "SELECT " .  $this->sql_esc($widget->primary) . " AS " . $this->sql_esc('name') . ", " . 
                                $this->sql_esc($widget->secondary) . " AS " . $this->sql_esc('description') . ", " . 
                                $this->sql_esc($widget->ternary) . " AS " . $this->sql_esc('ternary') . ", " . 
                                " COUNT(" . $this->sql_esc($widget->primary) . ") AS " . $this->sql_esc('count') . 
                                " FROM " .  $this->sql_esc('system') . " LEFT JOIN " . $this->sql_esc($primary_table) . 
                                " ON (" . $this->sql_esc('system.id') . ' = ' . $this->sql_esc($primary_table . '.system_id') . ") " . 
                                " WHERE @filter GROUP BY " . $this->sql_esc($group_by);
            if (!empty($widget->where)) {
                $sql = str_replace('@filter',$this->sql_esc('system.org_id') . " IN (" . $org_list . ") AND " . $widget->where, $sql);
            } else {
                $sql = str_replace('@filter',$this->sql_esc('system.org_id') . " IN (" . $org_list . ")", $sql);
            }
            if (!empty($widget->limit)) {
                $limit = intval($widget->limit);
                $sql .= ' LIMIT ' . $limit;
            }

        } else if ($primary_table == 'system') {
            $collection = 'devices';
            $attribute = $widget->primary;
            $sql = "SELECT " .  $this->sql_esc($widget->primary) . " AS " . $this->sql_esc('name') . ", " . 
                                $this->sql_esc($widget->secondary) . " AS " . $this->sql_esc('description') . ", " . 
                                $this->sql_esc($widget->ternary) . " AS " . $this->sql_esc('ternary') . ", " . 
                                " COUNT(" . $this->sql_esc($widget->primary) . ") AS " . $this->sql_esc('count') . ", " . 
                                " CAST((COUNT(*) / (SELECT COUNT(" . $this->sql_esc($widget->primary) . ") FROM " . $this->sql_esc($primary_table) . " WHERE " . $this->sql_esc('system.org_id') . "IN (" . $org_list . ")) * 100) AS unsigned) AS 'percent'" . 
                                " FROM " .  $this->sql_esc('system') . 
                                " WHERE @filter GROUP BY " . $this->sql_esc($group_by);
            if (!empty($widget->where)) {
                $sql = str_replace('@filter',$this->sql_esc('system.org_id') . " IN (" . $org_list . ") AND " . $widget->where, $sql);
            } else {
                $sql = str_replace('@filter',$this->sql_esc('system.org_id') . " IN (" . $org_list . ")", $sql);
            }
            if (!empty($widget->limit)) {
                $limit = intval($widget->limit);
                $sql .= ' ORDER BY `count` DESC LIMIT ' . $limit;
            }
        }
        $result = $this->run_sql($sql, array());
        $CI->response->meta->sql[] = $sql;
        if (!empty($result)) {
            for ($i=0; $i < count($result); $i++) {
                if (empty($result[$i]->name) and empty($result[$i]->count)) {
                    unset($result[$i]);
                }
            }
        }
        if (!empty($result)) {
            $result = array_values($result);
        }
        $total_count = 0;
        # We need to allow for grouping using a column name that is NOT 'name' as this can clash with existing schema.
        #   In this case (always in custom SQL), you should use my_name instead
        if (!empty($result)) {
            for ($i=0; $i < count($result); $i++) { 
                foreach ($result[$i] as $key => $value) {
                    if (strpos($key, 'my_') === 0) {
                        $new_key = str_replace('my_', '', $key);
                        $result[$i]->{$new_key} = $value;
                        unset($result[$i]->{$key});
                    }
                }
            }
            for ($i=0; $i < count($result); $i++) {
                $total_count += intval($result[$i]->count);
                if (intval($result[$i]->count) === 0 and is_null($result[$i]->name)) {
                    unset($result[$i]);
                }
            }
            $result = array_values($result);
            for ($i=0; $i < count($result); $i++) {
                if (!empty($result[$i]->count) and !empty($total_count)) {
                    $result[$i]->percent = intval(($result[$i]->count / $total_count) * 100);
                } else {
                    $result[$i]->percent = 0;
                }
                if (!empty($widget->link)) {
                    $result[$i]->link = $widget->link;
                    if (isset($result[$i]->name)) {
                        $result[$i]->link = str_ireplace('@name', $result[$i]->name, $result[$i]->link);
                    }
                    if (isset($result[$i]->description)) {
                        $result[$i]->link = str_ireplace('@description', $result[$i]->description, $result[$i]->link);
                    }
                    if (isset($result[$i]->ternary)) {
                        $result[$i]->link = str_ireplace('@ternary', $result[$i]->ternary, $result[$i]->link);
                    }
                } else {
                    $result[$i]->link = $collection . '?' . $attribute . '=' . $result[$i]->name;
                }
            }
        } else {
            $item = new stdClass();
            $item->name = '';
            $item->description = '';
            $item->ternary = '';
            $item->count = 0;
            $item->percent = 100;
            $item->link = '';
            $result[] = $item;
        }
        return $result;
    }

    private function line_data($widget, $org_list) {
        if (!empty($widget->sql)) {
            $sql = $widget->sql;
            if (stripos($sql, 'where @filter and') === false and stripos($sql, 'where @filter group by') === false) {
                # invalid query
                # return false;
                # These entries musy only be created by a user with Admin role as no filter allows anything in the DB to be queried (think multi-tenancy).
            } else {
                $sql = str_replace('@filter',$this->sql_esc('system.org_id') . " IN (" . $org_list . ")", $sql);
            }
            $result = $this->run_sql($sql, array());
            if (!empty($result)) {
                foreach ($result as $row) {
                    $row->timestamp = strtotime($row->date);
                }
                usort($result, array($this,'cmp_timestamp'));
                for ($i=0; $i < count($result); $i++) {
                    $result[$i]->link = $widget->link;
                    if (isset($result[$i]->name)) {
                        $result[$i]->link = str_ireplace('@name', $result[$i]->name, $result[$i]->link);
                    }
                    if (isset($result[$i]->description)) {
                        $result[$i]->link = str_ireplace('@description', $result[$i]->description, $result[$i]->link);
                    }
                    if (isset($result[$i]->ternary)) {
                        $result[$i]->link = str_ireplace('@ternary', $result[$i]->ternary, $result[$i]->link);
                    }
                    if (isset($result[$i]->date)) {
                        $result[$i]->link = str_ireplace('@date', $result[$i]->date, $result[$i]->link);
                    }
                    if (isset($result[$i]->timestamp)) {
                        $result[$i]->link = str_ireplace('@timestamp', $result[$i]->timestamp, $result[$i]->link);
                    }
                }

                if (count($result) < 2) {
                    $start = date('Y-m-d', strtotime('-' . $widget->limit . ' days'));
                    $begin = new DateTime( $start );
                    $finish = date('Y-m-d', strtotime('+1 days'));
                    $end = new DateTime($finish);
                    $interval = new DateInterval('P1D');
                    $period = new DatePeriod($begin, $interval, $end);
                } else {
                    $start = date('Y-m-d', strtotime($result[0]->date));
                    $begin = new DateTime( $start );
                    $i = count($result)-1;
                    $end = new DateTime($result[$i]->date);
                    $interval = DateInterval::createFromDateString('1 day');
                    $period = new DatePeriod($begin, $interval, $end);
                }

                foreach ( $period as $dt ) {
                    $the_date = $dt->format('Y-m-d');
                    $add_row = true;
                    for ($i=0; $i < count($result); $i++) {
                        if (!empty($result[$i]->date) and $result[$i]->date == $the_date) {
                            $add_row = false;
                            $result[$i]->timestamp = strtotime($the_date);
                        }
                    }
                    if ($add_row) {
                        $row = new stdClass();
                        $row->timestamp = strtotime($the_date);
                        $row->date = $the_date;
                        $row->count = 0;
                        $row->link = '';
                        $result[] = $row;
                    }
                }

            } else {
                $item = new stdClass();
                $item->timestamp = strtotime(date('Y-m-d'));
                $item->date = date('Y-m-d');
                $item->count = 0;
                $item->link = '';
                $result[] = $item;
            }
            usort($result, array($this,'cmp_timestamp'));
            return $result;
        }

        if (empty($widget->sql)) {
            $device_tables = array('bios','disk','dns','ip','log','memory','module','monitor','motherboard','netstat','network','nmap','optical','pagefile','partition','print_queue','processor','route','san','scsi','server','server_item','service','share','software','software_key','sound','system','task','user','user_group','variable','video','vm','warranty','windows');
            if (!in_array($widget->primary, $device_tables)) {
                return false;
            }
            $sql = "SELECT DATE(" . $this->sql_esc('change_log.timestamp') . ") AS " . $this->sql_esc('date') . ", count(DATE(" . $this->sql_esc('change_log.timestamp') . " )) AS " . $this->sql_esc('count') . "  FROM " . $this->sql_esc('change_log') . " LEFT JOIN " . $this->sql_esc('system') . " ON (" . $this->sql_esc('system.id') . " = " . $this->sql_esc('change_log.system_id') . ") WHERE @filter AND " . $this->sql_esc('change_log.timestamp') . " >= DATE_SUB(CURDATE(), INTERVAL " . intval($widget->limit) . " DAY) AND " . $this->sql_esc('change_log.db_table') . " = '" . $widget->primary . "'  AND " . $this->sql_esc('change_log.db_action') . " = '" . $widget->secondary . "' GROUP BY DATE(" . $this->sql_esc('change_log.timestamp') . ")";
            if (!empty($widget->where)) {
                $sql = str_replace('@filter',$this->sql_esc('system.org_id') . " IN (" . $org_list . ") AND " . $widget->where, $sql);
            } else {
                $sql = str_replace('@filter',$this->sql_esc('system.org_id') . " IN (" . $org_list . ")", $sql);
            }
            $result = $this->run_sql($sql, array());
            if (!empty($result)) {
                foreach ($result as $row) {
                    $row->name = strtotime($row->date);
                    $row->link = 'devices?sub_resource=change_log&change_log.db_table=' . $widget->primary . '&change_log.db_action=' . $widget->secondary . '&change_log.timestamp=LIKE' . $row->date;
                }
            }
            $start = date('Y-m-d', strtotime('-' . $widget->limit . ' days'));
            $begin = new DateTime( $start );
            $finish = date('Y-m-d', strtotime('+1 days'));
            $end = new DateTime($finish);
            $interval = new DateInterval('P1D');
            $period = new DatePeriod($begin, $interval, $end);

            foreach ( $period as $dt ) {
                $the_date = $dt->format('Y-m-d');
                $add_row = true;
                if (!empty($result)) {
                    for ($i=0; $i < count($result); $i++) {
                        if (!empty($result[$i]->date) and $result[$i]->date == $the_date) {
                            $add_row = false;
                            $result[$i]->timestamp = strtotime($the_date);
                        }
                    }
                }
                if ($add_row) {
                    $row = new stdClass();
                    $row->timestamp = strtotime($the_date);
                    $row->date = $the_date;
                    $row->count = 0;
                    $row->link = '';
                    $result[] = $row;
                }
            }
            usort($result, array($this,'cmp_timestamp'));
            return $result;
        }
    }

    function cmp_name($a, $b) {
        if (!empty($a->name) and !empty($b->name)) {
            return strcmp(strtolower($a->name), strtolower($b->name));
        } else {
            return;
        }
    }

    function cmp_timestamp($a, $b) {
        if (!empty($a->timestamp) and !empty($b->timestamp)) {
            return strcmp(strtolower($a->timestamp), strtolower($b->timestamp));
        } else {
            return;
        }
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
        if ($widget->type == 'line') {
            $result = $this->line_data($widget, $CI->user->org_list);
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
