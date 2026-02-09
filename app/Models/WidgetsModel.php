<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;
use DateTime;
use DateInterval;
use DatePeriod;

class WidgetsModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('widgets');
    }

    public function compareName($a, $b)
    {
        if (!empty($a->name) and !empty($b->name)) {
            return strcmp(strtolower((string)$a->name), strtolower((string)$b->name));
        }
        return;
    }

    public function compareTimestamp($a, $b)
    {
        if (!empty($a->timestamp) and !empty($b->timestamp)) {
            return strcmp(strtolower((string)$a->timestamp), strtolower((string)$b->timestamp));
        }
        return;
    }

    /**
     * Read the collection from the database
     *
     * @param  $resp object An object containing the properties, filter, sort and limit as passed by the user
     *
     * @return array        An array of formatted entries
     */
    public function collection(object $resp): array
    {
        log_message('debug', 'WidgetsModel::collection start');
        $properties = $resp->meta->properties;
        $properties[] = "orgs.name as `orgs.name`";
        $properties[] = "orgs.id as `orgs.id`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->orderBy($resp->meta->sort);
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $query->getResult();
        foreach ($result as $widget) {
            $widget->{'queries.primary_query_name'} = '';
            $widget->{'queries.secondary_query_name'} = '';
            $widget->{'queries.ternary_query_name'} = '';
            if (!empty($widget->type) and $widget->type === 'traffic') {
                $sql = "SELECT name FROM queries WHERE id = " . intval($widget->traffic_primary_query_id);
                $name = $this->db->query($sql)->getResult();
                $widget->{'queries.primary_query_name'} = !empty($name[0]->name) ? $name[0]->name : '';
                unset($name);

                $sql = "SELECT name FROM queries WHERE id = " . intval($widget->traffic_secondary_query_id);
                $name = $this->db->query($sql)->getResult();
                $widget->{'queries.secondary_query_name'} = !empty($name[0]->name) ? $name[0]->name : '';
                unset($name);

                $sql = "SELECT name FROM queries WHERE id = " . intval($widget->traffic_ternary_query_id);
                $name = $this->db->query($sql)->getResult();
                $widget->{'queries.ternary_query_name'} = !empty($name[0]->name) ? $name[0]->name : '';
                unset($name);
            }
        }
        log_message('debug', 'WidgetsModel::collection finish');
        return format_data($result, $resp->meta->collection);
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null): ?int
    {
        return null;
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return bool    true || false depending on success
     */
    public function delete($id = null, bool $purge = false): bool
    {
        $this->builder->delete(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        if ($this->db->affectedRows() !== 1) {
            return false;
        }
        return true;
    }

    public function execute(?int $id = 0, ?object $user = null)
    {
        if (empty($id)) {
            return new \stdClass();
        }
        $instance = & get_instance();
        if (is_string($instance->user->org_list)) {
            $orgs = explode(',', $instance->user->org_list);
        } else {
            $orgs = $instance->user->org_list;
        }
        $widget = $this->builder->getWhere(['id' => intval($id)])->getResult()[0];
        if ($widget->type === 'pie') {
            $widget->result = $this->pieData($widget, $orgs);
        }
        if ($widget->type === 'line') {
            $widget->result = $this->lineData($widget, $orgs);
        }
        if ($widget->type === 'traffic') {
            $widget->result = $this->trafficData($widget, $orgs);
        }
        if ($widget->type === 'status') {
            $widget->result = $this->statusData($widget, $orgs);
        }
        return ($widget);
    }

    public function findIdByName(string $name = ''): int
    {
        $this->builder->select('id');
        $this->builder->where('name', $name);
        $result = $this->builder->get(1)->getResult();
        if (!empty($result[0]->id)) {
            return intval($result[0]->id);
        }
        log_message('warning', 'WidgetsModel::findIdByName name not found: ' . $name);
        return 0;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $included = array();
        $widget = $this->read($id)[0];
        if ($widget->attributes->type === 'traffic' or $widget->attributes->type === 'status') {
            $queriesModel = new \App\Models\QueriesModel();
            $included['queries'] = $queriesModel->listUser();
        }
        return $included;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedCreateForm(int $id = 0): array
    {
        $queriesModel = new \App\Models\QueriesModel();
        $included['queries'] = $queriesModel->listUser();
        return $included;
    }

    /**
     * [line_data description]
     * @param  [type] $widget   [description]
     * @param  [type] $org_list [description]
     * @return [type]           [description]
     */
    private function lineData(object $widget, array $org_list)
    {
        log_message('debug', 'WidgetsModel::lineData start.');
        $org_list = implode(',', $org_list);
        $instance = & get_instance();
        if (!empty($widget->sql)) {
            $sql = $widget->sql;
            if (stripos($sql, 'where @filter and') === false && stripos($sql, 'where @filter group by') === false) {
                // These entries must only be created by a user with Admin role as no filter allows anything in the DB to be queried (think multi-tenancy).
            } else {
                $filter = "devices.org_id IN ({$org_list})";
                $sql = str_replace('@filter', $filter, $sql);
            }
            $result = $this->db->query($sql)->getResult();
            log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
            if (!empty($result)) {
                foreach ($result as $row) {
                    $row->timestamp = strtotime($row->date);
                }
                usort($result, array($this,'compareTimestamp'));
                for ($i = 0; $i < count($result); $i++) {
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
                        $result[$i]->link = str_ireplace('@timestamp', (string)$result[$i]->timestamp, $result[$i]->link);
                    }
                }

                if (count($result) < 2) {
                    $start = date('Y-m-d', strtotime('-' . $widget->line_days . ' days'));
                    $begin = new DateTime($start);
                    $finish = date('Y-m-d', strtotime('+1 days'));
                    $end = new DateTime($finish);
                    $interval = new DateInterval('P1D');
                    $period = new DatePeriod($begin, $interval, $end);
                } else {
                    $start = date('Y-m-d', strtotime($result[0]->date));
                    $begin = new \DateTime($start);
                    $i = count($result) - 1;
                    $end = new DateTime($result[$i]->date);
                    $interval = DateInterval::createFromDateString('1 day');
                    $period = new DatePeriod($begin, $interval, $end);
                }

                foreach ($period as $dt) {
                    $the_date = $dt->format('Y-m-d');
                    $add_row = true;
                    for ($i = 0; $i < count($result); $i++) {
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
            usort($result, array($this,'compareTimestamp'));
            log_message('debug', 'WidgetsModel::lineData finish.');
            return $result;
        }

        if (empty($widget->sql)) {
            if ($widget->line_table === 'system') {
                $widget->line_table = 'devices';
            }
            $device_tables = array('bios','devices','disk','dns','ip','license','log','memory','module','monitor','motherboard','netstat','network','nmap','optical','pagefile','partition','print_queue','processor','route','san','scsi','server','server_item','service','share','software','software_key','sound','task','user','user_group','variable','video','vm','warranty','windows');
            if (!in_array($widget->line_table, $device_tables)) {
                return false;
            }
            $sql = "SELECT DATE(change_log.timestamp) AS `date`, count(DATE(change_log.timestamp)) AS `count`  FROM change_log LEFT JOIN devices ON (devices.id = change_log.device_id) WHERE @filter AND change_log.timestamp >= DATE_SUB(CURDATE(), INTERVAL " . intval($widget->line_days) . " DAY) AND change_log.db_table = '" . $widget->line_table . "'  AND change_log.db_action = '" . $widget->line_event . "' GROUP BY DATE(change_log.timestamp)";
            $filter = "devices.org_id IN (" . $org_list . ")";
            if (!empty($widget->where)) {
                $sql .= " AND " . $widget->where;
            }
            $sql = str_replace('@filter', $filter, $sql);
            $result = $this->db->query($sql)->getResult();
            log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
            if (!empty($result)) {
                foreach ($result as $row) {
                    if (empty($widget->link)) {
                        $row->name = strtotime($row->date);
                        $row->link = 'components?components.type=change_log&change_log.db_table=' . $widget->line_table . '&change_log.db_action=' . $widget->secondary . '&change_log.timestamp=LIKE' . $row->date;
                    } else {
                        $row->link = $widget->link;
                        if (isset($row->name)) {
                            $row->link = str_ireplace('@name', $row->name, $row->link);
                        }
                        if (isset($row->description)) {
                            $row->link = str_ireplace('@description', $row->description, $row->link);
                        }
                        if (isset($row->ternary)) {
                            $row->link = str_ireplace('@ternary', $row->ternary, $row->link);
                        }
                        if (isset($row->date)) {
                            $row->link = str_ireplace('@date', $row->date, $row->link);
                        }
                        if (isset($row->timestamp)) {
                            $row->link = str_ireplace('@timestamp', $row->timestamp, $row->link);
                        }
                    }
                }
            }
            $start = date('Y-m-d', strtotime('-' . $widget->line_days . ' days'));
            $begin = new \DateTime($start);
            $finish = date('Y-m-d', strtotime('+1 days'));
            $end = new \DateTime($finish);
            $interval = new \DateInterval('P1D');
            $period = new \DatePeriod($begin, $interval, $end);

            foreach ($period as $dt) {
                $the_date = $dt->format('Y-m-d');
                $add_row = true;
                if (!empty($result)) {
                    for ($i = 0; $i < count($result); $i++) {
                        if (!empty($result[$i]->date) and $result[$i]->date == $the_date) {
                            $add_row = false;
                            $result[$i]->timestamp = strtotime($the_date);
                        }
                    }
                }
                if ($add_row) {
                    $row = new \stdClass();
                    $row->timestamp = strtotime($the_date);
                    $row->date = $the_date;
                    $row->count = 0;
                    $row->link = '';
                    $result[] = $row;
                }
            }
            usort($result, array($this,'compareTimestamp'));
            log_message('debug', 'WidgetsModel::lineData finish.');
            return $result;
        }
    }

    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        log_message('debug', 'WidgetsModel::listUser start.');
        if (empty($orgs)) {
            $instance = & get_instance();
            $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
            $orgs = array_unique(array_merge($orgs, $instance->orgsModel->getUserAscendants($instance->user->orgs, $instance->orgs)));
            $orgs[] = 1;
            $orgs = array_unique($orgs);
        }

        $properties = array();
        $properties[] = 'widgets.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'widgets.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $this->builder->orderBy('widgets.name');
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        log_message('debug', 'WidgetsModel::listUser finish.');
        return format_data($query->getResult(), 'widgets');
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all entries
     */
    public function listAll(): array
    {
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query->getResult();
    }


    /**
     * [pie_data description]
     * @param  [type] $widget   [description]
     * @param  [type] $org_list [description]
     * @return [type]           [description]
     */
    private function pieData(object $widget, array $org_list)
    {
        log_message('debug', 'WidgetsModel::pieData start');
        $org_list = implode(',', $org_list);
        $device_tables = array('bios','connections','disk','dns','ip','license','log','memory','module','monitor','motherboard','netstat','network','nmap','optical','pagefile','partition','print_queue','processor','route','san','scsi','server','server_item','service','share','software','software_key','sound','task','user','user_group','variable','video','vm','warranty','windows');

        $other_tables = array('agents','attributes','auth','collectors','connections','credentials','dashboards','discoveries','fields','files','groups','licenses','locations','networks','orgs','queries','scripts','summaries','tasks','users','vulnerabilities','vulnerabilities_cache','widgets');

        $sql = '';
        $group_by = $widget->pie_column;
        $pattern = "/[^A-Za-z0-9._]/";
        $temp = explode('.', $widget->pie_column);
        $primary_table = $temp[0];
        $primary_table = preg_replace($pattern, "", $primary_table);
        unset($temp);

        $instance = & get_instance();

        if (!empty($widget->sql)) {
            // remove excessive white space and line breaks
            $sql = preg_replace('/\s+/u', ' ', $widget->sql);
            if (stripos($sql, 'where @filter and') === false && stripos($sql, 'where @filter group by') === false) {
                // invalid query
                log_message('error', 'Invalid widget SQL query.');
                \Config\Services::session()->setFlashdata('error', 'Invalid widget SQL query.');
                return false;
            }
            $temp = explode(' ', $sql);
            $full = $temp[1];

            $temp = explode('.', $full);
            $primary_table = $temp[0];
            $primary_table = preg_replace($pattern, "", $primary_table);

            $attribute = $full;
            unset($temp);

            if ($primary_table === 'devices' or in_array($primary_table, $device_tables)) {
                $collection = 'devices';
                $filter = "devices.org_id IN ({$org_list})";
                $sql = str_replace('@filter', $filter, $sql);
            } elseif (in_array($primary_table, $other_tables)) {
                $collection = $primary_table;
                if ($collection !== 'orgs') {
                    $sql = str_replace('@filter', $primary_table . '.org_id IN (' . $org_list . ')', $sql);
                } else {
                    $filter = "devices.org_id in ({$org_list})";
                    $sql = str_replace('@filter', $filter, $sql);
                }
            } else {
                // invalid query
                $collection = 'devices';
                $filter = "devices.org_id in ({$org_list})";
                $sql = str_replace('@filter', $filter, $sql);
            }
        } elseif (in_array($primary_table, $device_tables)) {
            $collection = 'devices';
            $attribute = $widget->pie_column;
            $primary = "''";
            if (!empty(preg_replace($pattern, "", $widget->pie_column))) {
                $primary = preg_replace($pattern, "", $widget->pie_column);
            }
            $sql = 'SELECT ' .  $primary . ' AS `name`, ' .
                                " COUNT(" . $primary . ') AS `count` ' .
                                " FROM devices LEFT JOIN " . $primary_table .
                                " ON (devices.id = " . $primary_table . '.device_id' .
                                " AND " . $primary_table . ".current = 'y' ) " .
                                " WHERE @filter GROUP BY " . preg_replace($pattern, "", $group_by);
            $filter = "devices.org_id in (" . $org_list . ")";
            if (!empty($widget->where)) {
                $filter .= " AND " . $widget->where;
            }
            $sql = str_replace('@filter', $filter, $sql);
            if (!empty($widget->limit)) {
                $sql .= ' LIMIT ' . intval($widget->limit);
            }
        } elseif ($primary_table === 'devices') {
            $collection = 'devices';
            $attribute = $widget->pie_column;
            $primary = "''";
            if (!empty(preg_replace($pattern, "", $widget->pie_column))) {
                $primary = preg_replace($pattern, "", $widget->pie_column);
            }
            $sql = 'SELECT ' .  $primary . ' AS `name`, ' .
                                " COUNT(" . $primary . ') AS `count`, ' .
                                " CAST((COUNT(*) / (SELECT COUNT(" . $primary . ") FROM " . $primary_table . " WHERE" .
                                " devices.org_id IN (" . $org_list . ")) * 100) AS unsigned) AS `percent`" .
                                " FROM devices" .
                                " WHERE @filter GROUP BY " . preg_replace($pattern, "", $group_by);
            $filter = "devices.org_id in (" . $org_list . ")";
            if (!empty($widget->where)) {
                $filter .= " AND " . $widget->where;
            }
            $sql = str_replace('@filter', $filter, $sql);
            if (!empty($widget->limit)) {
                $limit = intval($widget->limit);
                $sql .= ' ORDER BY `count` DESC LIMIT ' . $limit;
            }
        } else {
            log_message('debug', 'Widget definition is bad. Widget: ' . json_encode($widget));
        }
        $result = $this->db->query($sql)->getResult();
        log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
        if (!empty($result)) {
            for ($i = 0; $i < count($result); $i++) {
                if (empty($result[$i]->name) and empty($result[$i]->count)) {
                    unset($result[$i]);
                }
            }
        }
        if (!empty($result)) {
            $result = array_values($result);
        }
        $total_count = 0;
        // We need to allow for grouping using a column name that is NOT 'name' as this can clash with existing schema.
        //   In this case (always in custom SQL), you should use my_name instead
        if (!empty($result)) {
            for ($i = 0; $i < count($result); $i++) {
                foreach ($result[$i] as $key => $value) {
                    if (strpos($key, 'my_') === 0) {
                        $new_key = str_replace('my_', '', $key);
                        $result[$i]->{$new_key} = $value;
                        unset($result[$i]->{$key});
                    }
                }
            }
            for ($i = 0; $i < count($result); $i++) {
                $total_count += intval($result[$i]->count);
                if (intval($result[$i]->count) === 0 and is_null($result[$i]->name)) {
                    unset($result[$i]);
                }
            }
            $result = array_values($result);
            for ($i = 0; $i < count($result); $i++) {
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
            $item = new \stdClass();
            $item->name = '';
            $item->description = '';
            $item->ternary = '';
            $item->count = 0;
            $item->percent = 100;
            $item->link = '';
            $result[] = $item;
        }
        log_message('debug', 'WidgetsModel::pieData finish.');
        return $result;
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return array   The array containing the requested item
     */
    public function read(int $id = 0): array
    {
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'widgets');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('widgets')) {
            return true;
        }
        return false;
    }


    /**
     * Produce the data for the Status widget
     * @param  [type] $widget   [description]
     * @param  [type] $org_list [description]
     * @return [type]           [description]
     */
    public function statusData(object $widget, array $org_list)
    {
        log_message('debug', 'WidgetsModel::statusData start.');
        $instance = & get_instance();
        $org_list = implode(',', $org_list);
        $return = new stdClass();
        $return->result = 0;
        $return->color = $widget->status_secondary_color;

        if (empty($widget->sql) and empty($widget->status_query_id)) {
            $instance->resp->meta->errors = 'You must specify SQL or a query ID for WidgetsModel::statusData';
            log_message('warning', 'You must specify SQL or a query ID for a status widget');
            return $return;
        }

        if (!empty($widget->sql)) {
            $sql = $widget->sql;
            if (strpos($sql, 'WHERE @filter') !== false) {
                $filter = "WHERE devices.org_id in (" . $org_list . ")";
                $sql = str_replace('WHERE @filter', $filter, $sql);
            }
            if (strpos($sql, '(@filter)') !== false) {
                $sql = str_replace('@filter', $org_list, $sql);
            }
            $query = $this->db->query($sql);
            if (empty($query)) {
                log_message('error', 'Could not execute SQL: ' . $sql);
                return $return;
            }
            $result = $query->getResult();
            log_message('debug', $sql);
            if (empty($result)) {
                log_message('error', 'Could not retrieve result');
                return $return;
            }
            if (isset($result[0]->count)) {
                $return->result = $result[0]->count;
                log_message('debug', 'Count in resulset, set to ' . $return->result);
            } elseif (!empty($result) and count($result) > 0) {
                $return->result = count($result);
            }
            unset($result);
        }
        if (empty($widget->sql) and !empty($widget->status_query_id)) {
            $queriesModel = new \App\Models\QueriesModel();
            $result = $queriesModel->execute(intval($widget->status_query_id), $instance->user);
            if (isset($result[0]->count)) {
                $return->result = $result[0]->count;
            } elseif (!empty($result) and count($result) > 0) {
                $return->result = count($result);
            }
        }
        log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
        if (empty($return->result)) {
            $return->result = 0;
            $return->color = $widget->status_secondary_color;
        } else {
            $return->color = $widget->status_primary_color;
        }
        log_message('debug', 'Resulset is ' . $return->result);
        if (!empty($widget->status_secondary_sql)) {
            $sql = $widget->status_secondary_sql;
            if (strpos($sql, 'WHERE @filter') !== false) {
                $filter = "WHERE devices.org_id in (" . $org_list . ")";
                $sql = str_replace('WHERE @filter', $filter, $sql);
            }
            if (strpos($sql, '(@filter)') !== false) {
                $sql = str_replace('@filter', $org_list, $sql);
            }
            $query = $this->db->query($sql);
            log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
            if (empty($query)) {
                log_message('error', 'Could not execute SQL: ' . $sql);
                return $return;
            }
            $result = $query->getResult();
            if (empty($result)) {
                log_message('error', 'Could not retrieve result');
                return $return;
            }
            if (isset($result[0]->secondary_text)) {
                $widget->secondary_text = $result[0]->secondary_text;
            }
        }
        log_message('debug', json_encode($return));
        log_message('debug', 'WidgetsModel::statusData finish.');
        return $return;
    }

    /**
     * Produce the data for the Traffic Light widget
     * @param  [type] $widget   [description]
     * @param  [type] $org_list [description]
     * @return [type]           [description]
     */
    private function trafficData(object $widget, array $org_list)
    {
        log_message('debug', 'WidgetsModel::trafficData start.');
        $user = new stdClass();
        $user->org_list = $org_list;

        $name = preg_replace("/[^A-Za-z0-9]/", '', $widget->name);

        $result = new \stdClass();
        $result->red = 0;
        $result->yellow = 0;
        $result->green = 0;

        $queriesModel = new \App\Models\QueriesModel();

        if (!empty($widget->traffic_primary_query_id)) {
            $query = $queriesModel->execute(intval($widget->traffic_primary_query_id), $user);
            log_message('debug', 'Primary: ' . str_replace("\n", " ", (string)$this->db->getLastQuery()));
            $result->red = 0;
            if (!empty($query)) {
                $result->red = count($query);
            }
        }

        if (!empty($widget->traffic_secondary_query_id)) {
            $query = $queriesModel->execute(intval($widget->traffic_secondary_query_id), $user);
            log_message('debug', 'Secondary: ' . str_replace("\n", " ", (string)$this->db->getLastQuery()));
            $result->yellow = 0;
            if (!empty($query)) {
                $result->yellow = count($query);
            }
        }

        if (!empty($widget->traffic_ternary_query_id)) {
            $query = $queriesModel->execute(intval($widget->traffic_ternary_query_id), $user);
            log_message('debug', 'Ternary: ' . str_replace("\n", " ", (string)$this->db->getLastQuery()));
            $result->green = 0;
            if (!empty($query)) {
                $result->green = count($query);
            }
        }
        if ($result->red > 0) {
            $result->color = 'danger';
        } else if ($result->yellow > 0) {
            $result->color = 'warning';
        } else {
            $result->color = 'success';
        }

        log_message('debug', 'WidgetsModel::trafficData finish.');
        return $result;
    }

    /**
     * Update an individual item in the database
     *
     * @param  object  $data The data attributes
     *
     * @return bool    true || false depending on success
     */
    public function update($id = null, $data = null): bool
    {
        return true;
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'widgets';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'type', 'description', 'primary_text', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','type');
        $dictionary->attributes->fields = $this->db->getFieldNames($collection);
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection);
        $dictionary->attributes->update = $this->updateFields($collection);

        $dictionary->sentence = 'Widgets are used on Dashboards and are completely open to user design.';

        $dictionary->about = '<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>';

        $dictionary->notes = ''; #'<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'professional';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->type = 'Can be <code>line</code>, <code>pie</code>, <code>status</code> or <code>traffic</code>.';
        $dictionary->columns->options = 'Unused.';
        $dictionary->columns->sql = 'For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND</code> in your SQL. For status widgets, must return the required number using the <code>count</code> name. Used by line, pie and status widgets.';
        $dictionary->columns->link = 'The template for the link to be generated per result line. Used by line, pie and status widgets.';
        $dictionary->columns->icon = 'Can be an svg from /open-audit/public/icons (just the name, android, not android.svg) or an icon from Lucide (icon-computer). Used for status and traffic widgets.';
        $dictionary->columns->help_text = 'A short clarifying description. Used by status and traffic widgets.';
        $dictionary->columns->primary_text = 'The heading for display. Used by line, pie, status and traffic widgets.';
        $dictionary->columns->secondary_text = 'The secondary heading.';
        $dictionary->columns->ternary_text = 'The ternary heading.';
        $dictionary->columns->where = 'Any required filter. Used by line and pie charts.';
        $dictionary->columns->line_table = 'The primary database table upon which to base this widget. Used by line charts.';
        $dictionary->columns->line_event = 'The event to test. Used by line charts.';
        $dictionary->columns->line_days = 'How many days in the past should we report on. Used by line charts.';
        $dictionary->columns->pie_column = 'The column to summarise in the widget. used by pie charts.';
        $dictionary->columns->pie_limit = 'The number of items to report on. Used by pie charts.';
        $dictionary->columns->traffic_primary_query_id = 'The ID of the query for the red result. Used by traffic widgets.';
        $dictionary->columns->traffic_secondary_query_id = 'The ID of the query for the yellow result. Used by traffic widgets.';
        $dictionary->columns->traffic_ternary_query_id = 'The ID of the query for the green result. Used by traffic widgets.';
        $dictionary->columns->status_secondary_sql = 'Used to create the small secondary text. Must return the required data using the <code>secondary_text</code> name. Used by status widgets.';
        $dictionary->columns->status_primary_color = 'The color of the widget. This is used if the query triggers a positive result. Used by status widget.';
        $dictionary->columns->status_secondary_color = 'The color of the widget. This is used if the query does not trigger a result. Used by status widget.';
        $dictionary->columns->status_query_id = 'The ID of the query to populate the main number. If SQL is provided, this will be ignored. Counts the rows returned. Used by status widgets.';
        $dictionary->columns->status_link_query_id = 'When link is empty, used to build a URL to the associated query. Used by status widgets.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;

        $dictionary->valid_columns = array('','bios.current','bios.description','bios.manufacturer','bios.version','disk.current','disk.description','disk.interface_type','disk.manufacturer','disk.model','disk.model_family','disk.partition_count','disk.status','disk.version','ip.cidr','ip.current','ip.netmask','ip.network','ip.version','log.current','log.file_name','log.name','memory.current','memory.detail','memory.form_factor','memory.size','memory.speed','memory.type','module.class_text','module.current','module.description','monitor.aspect_ratio','monitor.current','monitor.description','monitor.manufacturer','monitor.model','monitor.size','motherboard.current','motherboard.manufacturer','motherboard.memory_slot_count','motherboard.model','motherboard.processor_slot_count','network.connection_status','network.current','network.dhcp_enabled','network.dhcp_server','network.dns_domain','network.dns_server','network.manufacturer','network.model','network.type','optical.current','optical.model','optical.mount_point','pagefile.current','pagefile.max_size','pagefile.name','pagefile_initial_size','partition.bootable','partition.current','partition.description','partition.format','partition.mount_point','partition.mount_type','partition.name','partition.type','print_queue.color','print_queue.current','print_queue.duplex','print_queue.location','print_queue.manufacturer','print_queue.model','print_queue.port_name','print_queue.shared','print_queue.status','print_queue.type','processor.architecture','processor.core_count','processor.current','processor.description','processor.logical_count','processor.manufacturer','processor.physical_count','processor.socket','route.current','route.destination','route.mask','route.next_hop','route.type','server.current','server.description','server.edition','server.full_name','server.name','server.status','server.type','server.version','server.version_string','server_item.current','server_item.type','service.current','service.executable','service.name','service.start_mode','service.state','service.user','share.current','share.name','share.path','software.current','software.install_source','software.name','software_key.current','software_key.edition','software_key.name','software_key.rel','software_key.string','sound.current','sound.manufacturer','sound.model','devices.class','devices.cloud_id','devices.contact_name','devices.environment','devices.form_factor','devices.function','devices.icon','devices.instance_provider', 'devices.instance_state', 'devices.instance_type','devices.invoice_id','devices.last_seen_by','devices.lease_expiry_date','devices.location_id','devices.location_latitude','devices.location_level','devices.location_longitude','devices.location_rack','devices.location_rack_position','devices.location_rack_size','devices.location_room','devices.location_suite','devices.manufacturer','devices.memory_count','devices.model','devices.oae_manage','devices.org_id','devices.os_bit','devices.os_family','devices.os_group','devices.os_installation_date','devices.os_name','devices.os_version','devices.owner','devices.patch_panel','devices.printer_color','devices.printer_duplex','devices.printer_port_name','devices.printer_shared','devices.printer_shared_name','devices.processor_count','devices.purchase_amount','devices.purchase_cost_center','devices.purchase_date','devices.purchase_invoice','devices.purchase_order_number','devices.purchase_service_contract_number','devices.purchase_vendor','devices.service_network','devices.service_number','devices.service_plan','devices.service_provider','devices.service_type','devices.snmp_oid','devices.status','devices.sysContact','devices.sysDescr','devices.sysLocation','devices.sysObjectID','devices.type','devices.wall_port','devices.warranty_duration','devices.warranty_expires','devices.warranty_type','user.current','user.domain','user.password_changeable','user.password_required','user.status','user.type','user_group.current','user_group.name','video.current','video.manufacturer','video.model','video.size','vm.current','vm.cpu_count','vm.memory_count','vm.status','windows.active_directory_ou','windows.boot_device','windows.build_number','windows.client_site_name','windows.country_code','windows.current','windows.domain_controller_address','windows.domain_controller_name','windows.domain_role','windows.domain_short','windows.id_number','windows.install_directory','windows.language','windows.organisation','windows.part_of_domain','windows.registered_user','windows.service_pack','windows.time_caption','windows.time_daylight','windows.version','windows.workgroup');

        $dictionary->valid_tables = array('','bios','devices','disk','dns','ip','log','memory','module','monitor','motherboard','netstat','network','nmap','optical','pagefile','partition','print_queue','processor','route','san','scsi','server','server_item','service','share','software','software_key','sound','task','user','user_group','variable','video','vm','warranty','windows');

        $dictionary->colors = array('primary','secondary','success','danger','warning','info','light','dark','critical');
        $dictionary->text_fields = array('link', 'icon', 'help_text', 'primary_text', 'secondary_text', 'ternary_text', 'where', 'line_table', 'line_days', 'pie_column', 'pie_limit');
        $dictionary->line_fields = array('sql', 'primary_text', 'where', 'line_table', 'line_event', 'line_days');
        $dictionary->pie_fields = array('link', 'sql', 'primary_text', 'where', 'pie_column', 'pie_limit');
        $dictionary->status_fields = array('sql', 'link', 'icon', 'help_text', 'primary_text', 'secondary_text', 'status_secondary_sql', 'status_primary_color', 'status_secondary_color', 'status_query_id', 'status_link_query_id');
        $dictionary->traffic_fields = array('link', 'icon', 'help_text', 'primary_text', 'secondary_text', 'traffic_primary_query_id', 'traffic_secondary_query_id', 'traffic_ternary_query_id');

        $dictionary->all_fields = array_merge($dictionary->line_fields, $dictionary->pie_fields, $dictionary->status_fields, $dictionary->traffic_fields);
        $dictionary->all_fields = array_unique($dictionary->all_fields);

        #$all_fields = array_merge($text_fields, $line_fields, $pie_fields, $line_fields, $traffic_fields, $status_fields);
        #$all_fields = array_unique($all_fields);

        #$all_fields = array_merge($text_fields, $line_fields, $pie_fields, $line_fields, $traffic_fields, $status_fields);
        #$all_fields = array_unique($all_fields);

        return $dictionary;
    }
}
