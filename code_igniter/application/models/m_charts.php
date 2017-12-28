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
* @version   2.1
* @link      http://www.open-audit.org
 */
class M_charts extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    private function build_filter()
    {
        $CI = & get_instance();

        # use the sub_resource as the first preference for the type
        $count = 0;
        if (!empty($CI->response->meta->sub_resource)) {
            $filter = new stdClass();
            $filter->name = 'what';
            $filter->operator = '=';
            $filter->value = $CI->response->meta->sub_resource;
            $CI->response->meta->filter[] = $filter;
            $CI->response->meta->internal->what = $CI->response->meta->sub_resource;
            $count = 1;
        }
        foreach ($CI->response->meta->filter as $item) {
            if ($item->name == 'what') {
                $CI->response->meta->internal->what = $item->value;
                $count += 1;
            }
        }
        if ($count == 0) {
            $filter = new stdClass();
            $filter->name = 'what';
            $filter->operator = '=';
            $filter->value = 'audit';
            $CI->response->meta->filter[] = $filter;
            $CI->response->meta->internal->what = 'audit';
        }

        $count = 0;
        foreach ($CI->response->meta->filter as $item) {
            if ($item->name == 'start' or ($item->name == 'when' and ($item->operator == '>=' or $item->operator == '>'))) {
                $count += 1;
                $CI->response->meta->internal->start = $item->value;
            }
        }
        if ($count == 0) {
            $filter = new stdClass();
            $filter->name = 'start';
            $filter->operator = '>=';
            $temp = $this->config->item('graph_days');
            $days = intval($temp);
            if (empty($temp)) {
                $days = 30;
            }
            $filter->value = date('Y-m-d', strtotime('-' . $days . ' days'));
            $CI->response->meta->filter[] = $filter;
            $CI->response->meta->internal->start = $filter->value;
        }

        $count = 0;
        foreach ($CI->response->meta->filter as $item) {
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
            $CI->response->meta->filter[] = $filter;
            $CI->response->meta->internal->end = $filter->value;
        }

        foreach ($CI->response->meta->filter as $item) {
            if (($item->name == 'start' or $item->name == 'when') and $item->operator == '=') {
                $CI->response->meta->internal->start = $item->value;
                $CI->response->meta->internal->end = $item->value;
            }
        }
        return;
    }

    public function read_charts()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $filter = $this->build_filter();
        $CI->response->meta->internal->filter = $filter;

        $sql = "SELECT DISTINCT `what`, DATE(MAX(`when`)) AS start, DATE(MIN(`when`)) AS `end` FROM chart GROUP BY `what`";
        $result = $this->run_sql($sql, array());
        return $result;
    }

    public function read_chart()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $filter = $this->build_filter();
        $CI->response->meta->internal->filter = $filter;

        $sql = "SELECT COUNT(*) AS `count` FROM chart WHERE `what` = ?";
        $data = array($CI->response->meta->internal->what);
        $result = $this->run_sql($sql, $data);
        $CI->response->meta->total = intval($result[0]->count);

        $sql = "/* " . $CI->response->meta->internal->what . " */ " . "SELECT DATE(a.Date) AS `date`, UNIX_TIMESTAMP(a.Date) AS `timestamp`, SUM(z.count) as `count`
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
                    (SELECT SUM(`count`) AS 'count', DATE(`when`) AS 'date', `what` FROM `chart` WHERE DATE(`when`) BETWEEN ? AND ? AND `what` = ? AND `org_id` in (" . $CI->user->org_list . ") GROUP BY DATE(`when`)) AS z 
                    ON (DATE(z.date) = DATE(a.Date))
                GROUP BY a.Date 
                ORDER BY a.Date asc";


        $data = array($CI->response->meta->internal->start, $CI->response->meta->internal->end, $CI->response->meta->internal->start, $CI->response->meta->internal->end, $CI->response->meta->internal->what);

        if ($CI->response->meta->internal->what == 'device_missing') {
            $sql = "/* device_missing */ SELECT DATE(DATE_ADD(dynamic_calendar.calendar_day, INTERVAL 1 HOUR)) AS 'date', UNIX_TIMESTAMP(DATE(DATE_ADD(dynamic_calendar.calendar_day, INTERVAL 1 HOUR))) AS 'timestamp', COUNT(ftd.id) AS count FROM (SELECT @start_date := DATE_SUB( @start_date, INTERVAL 1 day ) calendar_day FROM (SELECT @start_date := DATE_ADD(CURDATE(), INTERVAL 1 DAY) ) sqlvars, system LIMIT 30) dynamic_calendar LEFT JOIN (SELECT system.id, system.first_seen, system.last_seen FROM system WHERE system.org_id in (" . $CI->user->org_list . ") AND system.ip <> '' AND system.ip <> '0.0.0.0' AND system.ip <> '000.000.000.000' and system.status = 'production' and system.oae_manage = 'y') ftd ON (DATE(ftd.last_seen) < DATE_SUB(dynamic_calendar.calendar_day, INTERVAL 30 day) AND DATE(ftd.last_seen) < DATE_SUB(dynamic_calendar.calendar_day, INTERVAL 30 day)) GROUP BY DATE(dynamic_calendar.calendar_day) ORDER BY 'date' asc";
            $data = array($CI->response->meta->internal->end, $CI->response->meta->internal->end);
        }

        $result = $this->run_sql($sql, $data);
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
            $item = new stdClass();
            $item->date = $CI->response->meta->internal->end;
            $item->timestamp = strtotime($CI->response->meta->internal->end);
            $item->count = 0;
            $result[] = $item;
        }
        return($result);
    }
}
