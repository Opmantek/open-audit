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
class M_charts extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private function build_filter() {
        $CI = & get_instance();

        # use the sub_resource as the first preference for the type
        $count = 0;
        if (!empty($CI->response->sub_resource)) {
            $filter = new stdClass();
            $filter->name = 'what';
            $filter->operator = '=';
            $filter->value = $CI->response->sub_resource;
            $CI->response->filter[] = $filter;
            $CI->response->internal->what = $CI->response->sub_resource;
            $count = 1;
        }
        foreach ($CI->response->filter as $item) {
            if ($item->name == 'what') {
                $CI->response->internal->what = $item->value;
                $count += 1;
            }
        }
        if ($count == 0) {
            $filter = new stdClass();
            $filter->name = 'what';
            $filter->operator = '=';
            $filter->value = 'audit';
            $CI->response->filter[] = $filter;
            $CI->response->internal->what = 'audit';
        }

        $count = 0;
        foreach ($CI->response->filter as $item) {
            if ($item->name == 'start' or ($item->name == 'when' and ($item->operator == '>=' or $item->operator == '>'))) {
                $count += 1;
                $CI->response->internal->start = $item->value;
            }
        }
        if ($count == 0) {
            $filter = new stdClass();
            $filter->name = 'start';
            $filter->operator = '>=';
            $filter->value = date('Y-m-d', strtotime('-29 days'));
            $CI->response->filter[] = $filter;
            $CI->response->internal->start = $filter->value;
        }

        $count = 0;
        foreach ($CI->response->filter as $item) {
            if ($item->name == 'end' or ($item->name == 'when' and ($item->operator == '<=' or $item->operator == '<'))) {
                $count += 1;
                $CI->response->internal->end = $item->value;
            }
        }
        if ($count == 0) {
            $filter = new stdClass();
            $filter->name = 'end';
            $filter->operator = '=<';
            $filter->value = (string)date('Y-m-d');
            $CI->response->filter[] = $filter;
            $CI->response->internal->end = $filter->value;
        }

        foreach ($CI->response->filter as $item) {
            if (($item->name == 'start' or $item->name == 'when') and $item->operator == '=') {
                $CI->response->internal->start = $item->value;
                $CI->response->internal->end = $item->value;
            }
        }



        return;
    }

    public function read_charts()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $CI->response->internal->filter = $filter;

        $sql = "SELECT DISTINCT `what`, DATE(MAX(`when`)) AS start, DATE(MIN(`when`)) AS `end` FROM chart GROUP BY `what`";
        $result = $this->run_sql($sql, array());
        $this->count_data($result);
        return $result;
    }

    public function read_chart()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $CI->response->internal->filter = $filter;

        $sql = "SELECT COUNT(*) AS `count` FROM chart WHERE `what` = ?";
        $data = array($CI->response->internal->what);
        $result = $this->run_sql($sql, $data);
        $CI->response->total = intval($result[0]->count);

        if ($CI->response->internal->what == 'device_missing') {
            $sql = "SELECT DATE(DATE_ADD(dynamic_calendar.calendar_day, INTERVAL 1 HOUR)) AS 'date', UNIX_TIMESTAMP(DATE(DATE_ADD(dynamic_calendar.calendar_day, INTERVAL 1 HOUR))) AS 'timestamp', COUNT(ftd.system_id) AS count FROM (SELECT @start_date := DATE_SUB( @start_date, INTERVAL 1 day ) calendar_day FROM (SELECT @start_date := DATE_ADD(CURDATE(), INTERVAL 1 DAY) ) sqlvars, system LIMIT 30) dynamic_calendar LEFT JOIN (SELECT system.system_id, first_timestamp, timestamp, last_seen FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = ? AND man_ip_address <> '' AND man_ip_address <> '0.0.0.0' AND man_ip_address <> '000.000.000.000' and man_status = 'production') ftd ON (DATE(ftd.timestamp) < DATE_SUB(dynamic_calendar.calendar_day, INTERVAL 30 day) AND DATE(ftd.last_seen) < DATE_SUB(dynamic_calendar.calendar_day, INTERVAL 30 day)) GROUP BY DATE(dynamic_calendar.calendar_day) ORDER BY 'date' asc";
            $data = array(1, $CI->response->internal->end, $CI->response->internal->end);
        } else {
            // $sql = "SELECT DATE(a.Date) AS `date`, UNIX_TIMESTAMP(a.Date) AS `timestamp`, SUM(IF(`count` IS NULL, 0, `count`)) as `count` FROM ( SELECT a.Date FROM ( 
            // SELECT CURDATE() - INTERVAL (a.a + (10 * b.a) + (100 * c.a)) DAY AS Date
            // FROM (SELECT 0 AS a UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) AS a
            // CROSS JOIN (SELECT 0 AS a UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) AS b
            // CROSS JOIN (SELECT 0 AS a UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) AS c
            //     ) a WHERE a.Date BETWEEN ? AND ?
            // ) AS a 
            // LEFT JOIN chart ON (DATE(`when`) = DATE(a.Date) AND chart.what = ?)
            // WHERE chart.org_id IN (" . $CI->user->org_list . ")
            // GROUP BY a.Date
            // ORDER BY a.Date asc";

            $sql = "SELECT DATE(a.Date) AS `date`, UNIX_TIMESTAMP(a.Date) AS `timestamp`, SUM(z.count) as `count`
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
                        (SELECT SUM(`count`) AS 'count', DATE(`when`) AS 'date', `what` FROM `chart` WHERE DATE(`when`) BETWEEN ? AND ? AND `what` = ? and `org_id` in (" . $CI->user->org_list . ") group by date(`when`)) AS z 
                        ON (DATE(z.date) = DATE(a.Date))
                    GROUP BY a.Date 
                    ORDER BY a.Date asc";


            $data = array($CI->response->internal->start, $CI->response->internal->end, $CI->response->internal->start, $CI->response->internal->end, $CI->response->internal->what);
        }
        $result = $this->run_sql($sql, $data);
        foreach ($result as $item) {
            if (!empty($item->timestamp)) {
                $item->timestamp = intval($item->timestamp);
            }
        }
        return($result);
    }

    private function run_sql($sql, $data = array())
    {
        $CI = & get_instance();
        if ($sql == '') {
            return;
        }
        $trace = debug_backtrace();
        $caller = $trace[1];
        // clean our SQL (usually adding the running model, etc)
        $sql = $this->clean_sql($sql);
        // store the current setting of db_debug
        $temp_debug = $this->db->db_debug;
        // set the db_debug setting to FALSE - this prevents the default CI error page and allows us
        // to output a nice formatted page with the $error object
        $this->db->db_debug = FALSE;
        // run the query
        $query = $this->db->query($sql, $data);
        // if we have debug set to TRUE, store the last run query
        if ($CI->response->debug) {
            $CI->response->sql = $this->db->last_query();
        }
        // restore the origin setting to db_debug
        $this->db->db_debug = $temp_debug;
        // do we have an error?
        if ($this->db->_error_message()) {
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function']));
            $CI->response->errors[count($CI->response->errors)-1]->detail_specific = $this->db->_error_message();
            return false;
        }
        // no error, so get the result
        $result = $query->result();
        // return what we have
        return ($result);
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
