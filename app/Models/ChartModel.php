<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class ChartModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('chart');
    }


    private function buildFilter()
    {
        $instance = & get_instance();

        # use the sub_resource as the first preference for the type
        $count = 0;
        if (!empty($instance->resp->meta->sub_resource)) {
            $filter = new \stdClass();
            $filter->name = 'what';
            $filter->operator = '=';
            $filter->value = $instance->resp->meta->sub_resource;
            $instance->resp->meta->filter[] = $filter;
            $instance->resp->meta->internal->what = $instance->resp->meta->sub_resource;
            $count = 1;
        }
        foreach ($instance->resp->meta->filter as $item) {
            if ($item->name == 'what') {
                $instance->resp->meta->internal->what = $item->value;
                $count += 1;
            }
        }
        if ($count == 0) {
            $filter = new \stdClass();
            $filter->name = 'what';
            $filter->operator = '=';
            $filter->value = 'audit';
            $instance->resp->meta->filter[] = $filter;
            $instance->resp->meta->internal->what = 'audit';
        }

        $count = 0;
        foreach ($instance->resp->meta->filter as $item) {
            if ($item->name == 'start' or ($item->name == 'when' and ($item->operator == '>=' or $item->operator == '>'))) {
                $count += 1;
                $instance->resp->meta->internal->start = $item->value;
            }
        }
        if ($count == 0) {
            $filter = new \stdClass();
            $filter->name = 'start';
            $filter->operator = '>=';
            $temp = $instance->config->graph_days;
            $days = intval($temp);
            if (empty($temp)) {
                $days = 30;
            }
            $filter->value = date('Y-m-d', strtotime('-' . $days . ' days'));
            $instance->resp->meta->filter[] = $filter;
            $instance->resp->meta->internal->start = $filter->value;
        }

        $count = 0;
        foreach ($instance->resp->meta->filter as $item) {
            if ($item->name == 'end' or ($item->name == 'when' and ($item->operator == '<=' or $item->operator == '<'))) {
                $count += 1;
                $instance->resp->internal->end = $item->value;
            }
        }
        if ($count == 0) {
            $filter = new \stdClass();
            $filter->name = 'end';
            $filter->operator = '=<';
            $filter->value = (string)date('Y-m-d');
            $instance->resp->meta->filter[] = $filter;
            $instance->resp->meta->internal->end = $filter->value;
        }

        foreach ($instance->resp->meta->filter as $item) {
            if (($item->name == 'start' or $item->name == 'when') and $item->operator == '=') {
                $instance->resp->meta->internal->start = $item->value;
                $instance->resp->meta->internal->end = $item->value;
            }
        }
        return;
    }


    /**
     * Read the collection from the database
     *
     * @param  $resp object An object containing the properties, filter, sort and limit as passed by the user
     *
     * @return array        An array of entries
     */
    public function collection(object $resp): array
    {
        $sql = "SELECT DISTINCT `what`, DATE(MAX(`when`)) AS start, DATE(MIN(`when`)) AS `end` FROM chart GROUP BY `what`";
        $query = $this->db->query($sql);
        $result = $query->getResult();
        return $result;
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null)
    {
        return false;
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

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        return array();
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
    }

    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        if (empty($orgs)) {
            $instance = & get_instance();
            $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
            $orgs[] = 1;
            $orgs = array_unique($orgs);
        }

        $properties = array();
        $properties[] = 'chart.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'chart.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'charts');
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
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return array   The array containing the requested item
     */
    public function read(object $resp): array
    {
        $instance = & get_instance();
        $filter = $this->buildFilter();
        $instance->resp->meta->internal->filter = $filter;

        $properties = array();
        $properties[] = 'chart.*';
        $properties[] = 'orgs.id as `orgs.id`';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'chart.org_id = orgs.id', 'left');
        $this->builder->where('chart.what', $resp->meta->internal->what);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $instance->resp->total = intval($query->getResult()[0]->count);

        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list[] = 1;
        $org_list = array_unique($org_list);
        $org_list = implode(',', $org_list);

        $sql = "/* " . $resp->meta->internal->what . " */ " . "SELECT DATE(a.Date) AS `date`, UNIX_TIMESTAMP(a.Date) AS `timestamp`, SUM(z.count) as `count`
                FROM 
                ( SELECT a.Date FROM 
                    ( SELECT CURDATE() - INTERVAL (a.a + (10 * b.a) + (100 * c.a)) DAY AS `Date` 
                        FROM 
                            (SELECT 0 AS a UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) AS a 
                            CROSS JOIN 
                                (SELECT 0 AS a UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) AS b 
                                    CROSS JOIN (SELECT 0 AS a UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) AS c 
                        WHERE CURDATE() - INTERVAL (a.a + (10 * b.a) + (100 * c.a)) DAY BETWEEN ? and ?  
                    ) a
                ) AS a 
                LEFT JOIN 
                    (SELECT SUM(`count`) AS 'count', DATE(`when`) AS 'date', `what` FROM `chart` WHERE DATE(`when`) BETWEEN ? AND ? AND `what` = ? AND `org_id` in (" . $org_list . ") GROUP BY DATE(`when`)) AS z 
                    ON (DATE(z.date) = DATE(a.Date))
                GROUP BY a.Date 
                ORDER BY a.Date asc";


        $data = array($resp->meta->internal->start, $resp->meta->internal->end, $resp->meta->internal->start, $resp->meta->internal->end, $resp->meta->internal->what);

        if ($resp->meta->internal->what == 'device_missing') {
            $sql = "/* device_missing */ SELECT DATE(DATE_ADD(dynamic_calendar.calendar_day, INTERVAL 1 HOUR)) AS 'date', UNIX_TIMESTAMP(DATE(DATE_ADD(dynamic_calendar.calendar_day, INTERVAL 1 HOUR))) AS 'timestamp', COUNT(ftd.id) AS count FROM (SELECT @start_date := DATE_SUB( @start_date, INTERVAL 1 day ) calendar_day FROM (SELECT @start_date := DATE_ADD(CURDATE(), INTERVAL 1 DAY) ) sqlvars, devices LIMIT 30) dynamic_calendar LEFT JOIN (SELECT devices.id, devices.first_seen, devices.last_seen FROM devices WHERE devices.org_id in (" . $org_list . ") AND devices.ip <> '' AND devices.ip <> '0.0.0.0' AND devices.ip <> '000.000.000.000' and devices.status = 'production' and devices.oae_manage = 'y') ftd ON (DATE(ftd.last_seen) < DATE_SUB(dynamic_calendar.calendar_day, INTERVAL 30 day) AND DATE(ftd.last_seen) < DATE_SUB(dynamic_calendar.calendar_day, INTERVAL 30 day)) GROUP BY DATE(dynamic_calendar.calendar_day) ORDER BY 'date' asc";
            $data = array($resp->meta->internal->end, $resp->meta->internal->end);
        }

        $query = $this->db->query($sql, $data);
        $result = $query->getResult();

        if (!empty($result)) {
            foreach ($result as $item) {
                if (!empty($item->timestamp)) {
                    $item->timestamp = intval($item->timestamp);
                }
                if (empty($item->count)) {
                    $item->count = 0;
                }
            }
        } else {
            $result = array();
            $item = new \stdClass();
            $item->date = $resp->meta->internal->end;
            $item->timestamp = strtotime($resp->meta->internal->end);
            $item->count = 0;
            $result[] = $item;
        }
        return($result);
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('chart')) {
            return true;
        }
        return false;
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

        $collection = 'charts';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array();
        $dictionary->attributes->create = array(); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = '';

        $dictionary->about =  '';

        $dictionary->notes = '';

        $dictionary->product = 'professional';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
