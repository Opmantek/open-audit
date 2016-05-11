<?php
#
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
class query extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // log the attempt
        $log_details = new stdClass();
        $log_details->severity = 6;
        stdlog($log_details);
        unset($log_details);
    }

    public function index()
    {
        redirect('/');
    }

    /**
     * This will returns a JSON document containing a unix timestamp and a count of items per row for each date inclusive.
     * Can be requested via GET or POST
     * GET example - index.php/report/json_dates/REPORT-NAME/START-DATE/END-DATE
     * POST example should use the attributes as defined below.
     *
     * @access	public
     *
     * @category 	Function
     *
     * @author		Mark Unwin <marku@opmantek.com>
     * @license		http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link		http://www.open-audit.org
     *
     * @return JSON
     *
     * @param 		string report      The name of one of the available reports below (missing_devices, new_software, new_devices) (default = new_devices)
     * @param		date   start_date  The date you wish to report FROM (default = 30 days ago)
     * @param		date   end_date    The date you wish to report TO (default = today)
     */
    public function graph()
    {
        $debug = 'n';
        if ($debug == 'y') {
            $time_start = new DateTime();
            $start = $time_start->getTimestamp();
            echo "<pre>\n";
        }

        // make a default start date of 30 days ago if none provided
        $start_date = date('Y-m-d', strtotime('-30 days'));
        // check if GET start date passed
        $get_start_date = $this->uri->segment(4, 0);
        if (isset($get_start_date) and date('Y-m-d', strtotime($get_start_date)) and $get_start_date != '0') {
            $start_date = $get_start_date;
        }
        // check if POST start date passed
        $post_start_date = @$_POST['start_date'];
        if (isset($post_start_date) and date('Y-m-d', strtotime($post_start_date)) and $post_start_date != '0' and $post_start_date != '') {
            $start_date = $post_start_date;
        }

        // make a default end date of today if none provided
        $end_date = date('Y-m-d');
        // check if GET end date passed
        $get_end_date =  $this->uri->segment(5, 0);
        if (isset($get_end_date) and date('Y-m-d', strtotime($get_end_date)) and $get_end_date != '0') {
            $end_date = $get_end_date;
        }
        // check if POST end date passed
        $post_end_date = @$_POST['end_date'];
        if (isset($post_end_date) and date('Y-m-d', strtotime($post_end_date)) and $post_end_date != '0' and $post_end_date != '') {
            $end_date = $post_end_date;
        }

        $group_id = @$_POST['group_id'];
        if (!isset($group_id) or $group_id == '') {
            $group_id = '1';
        }

        // set the default repot name
        $report = 'new_devices';
        // get the report name if provided
        $post_report = $this->input->post('report');
        if (isset($post_report) and $post_report != '') {
            $report = $post_report;
        } elseif ($this->uri->segment(3, 0) != '0') {
            $report = $this->uri->segment(3, 0);
        }
        $report = str_replace("%20", " ", $report);
        $report = str_replace("+", " ", $report);

        // define the SQL for the report
        switch ($report) {
            case "missing_devices":
            $sql = "SELECT COUNT(ftd.system_id) AS count, DATE(DATE_ADD(dynamic_calendar.calendar_day, INTERVAL 1 HOUR)) AS 'date' FROM (SELECT @start_date := DATE_SUB( @start_date, INTERVAL 1 day ) calendar_day FROM (SELECT @start_date := DATE_ADD(CURDATE(), INTERVAL 1 DAY) ) sqlvars, system LIMIT 30) dynamic_calendar LEFT JOIN (SELECT system.system_id, first_timestamp, timestamp, last_seen FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = ? AND man_ip_address <> '' AND man_ip_address <> '0.0.0.0' AND man_ip_address <> '000.000.000.000' and man_status = 'production') ftd ON (DATE(ftd.timestamp) < DATE_SUB(dynamic_calendar.calendar_day, INTERVAL 30 day) AND DATE(ftd.last_seen) < DATE_SUB(dynamic_calendar.calendar_day, INTERVAL 30 day)) GROUP BY DATE(dynamic_calendar.calendar_day) ORDER BY 'date' asc;";
            $this->data['heading'] = "Devices Not Seen 30";
            $data = array($group_id, $end_date, $end_date);
            $json = 'y';
            break;

            case "new_software":
           $sql = "SELECT DATE(change_log.timestamp) AS 'date', count(change_log.id) AS 'count' FROM change_log LEFT JOIN oa_group_sys ON (change_log.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = ? AND change_log.db_table = 'software' AND change_log.db_action = 'create' AND DATE(change_log.timestamp) >= ? AND DATE(change_log.timestamp) <= ? GROUP BY DATE(change_log.timestamp)";
            $this->data['heading'] = "Software Discovered 30";
            $data = array($group_id, $start_date, $end_date);
            $json = 'y';
            break;

            case "new_devices":
            $sql = "SELECT DATE(first_timestamp) AS 'date', COUNT(*) as count FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = ? AND man_status = 'production' AND DATE(first_timestamp) >= ? AND DATE(first_timestamp) <= ? AND system.man_ip_address <> '' AND system.man_ip_address <> '0.0.0.0' AND system.man_ip_address <> '000.000.000.000' GROUP BY DATE(first_timestamp) ORDER BY DATE(first_timestamp) ";
            $this->data['heading'] = "Devices Discovered 30";
            $data = array($group_id, $start_date, $end_date);
            $json = 'y';
            break;

            case "os_types":
            $sql = "SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system WHERE man_status = 'production')) * 100) AS y, IF(CHAR_LENGTH(man_os_group)=0,'Other', man_os_group) AS name, count(*) as count FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = ? AND man_status = 'production' GROUP BY name";
            $this->data['heading'] = "Device Types";
            $data = array($group_id);
            $json = 'n';
            break;

            case "device_types":
            $sql = "SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system WHERE man_status = 'production')) * 100) AS y, man_type AS name, count(*) as count FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = ? AND man_status = 'production' GROUP BY name";
            $this->data['heading'] = "Device Types";
            $data = array($group_id);
            $json = 'n';
            break;

            default:
            $sql = "SELECT DATE(first_timestamp) AS 'date', COUNT(*) as count FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = ? AND man_status = 'production' AND DATE(first_timestamp) >= ? AND DATE(first_timestamp) <= ? AND system.man_ip_address <> '' AND system.man_ip_address <> '0.0.0.0' AND system.man_ip_address <> '000.000.000.000' ";
            $this->data['heading'] = "Devices Discovered 30";
            $data = array($group_id, $start_date, $end_date);
            $json = 'y';
            break;
        }
        $sql = '/* query::graph */ ' . $sql;
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        if ($json == 'y') {
            $return_json = array();
            $each_json = array();
            // populate the dataset from the returned SQL object
            $dataset = array();
            foreach ($result as $line) {
                $dataset[$line->date] = $line->count;
            }
            // make sure we have a result (even 0) for each date in the range
            $begin = new DateTime($start_date);
            $end = new DateTime($end_date);
            $interval = DateInterval::createFromDateString('1 day');
            $period = new DatePeriod($begin, $interval, $end);
            foreach ($period as $dt) {
                $the_date = $dt->format("Y-m-d");
                if (!isset($dataset[$the_date])) {
                    $dataset[$the_date] = 0;
                }
            }
            ksort($dataset);
            // convert the dates in the dataset to timestamps
            #date_default_timezone_set('Australia/Brisbane');
            foreach ($dataset as $key => $value) {
                if (isset($key) and $key != '') {
                    #$date = new DateTime($key);
                    #$offset = $date->getOffset();
                    $mktime_array = explode('-', $key);
                    $timestamp = gmmktime(0, 12, 0, intval($mktime_array[1]), intval($mktime_array[2]), intval($mktime_array[0]));
                    #$timestamp = mktime(0, 12, 0, intval($mktime_array[1]), intval($mktime_array[2]), intval($mktime_array[0])) + $offset;
                    $each_json = array('x' => intval($timestamp), 'y' => intval($value) );
                    $return_json[] = $each_json;
                }
            }
            $this->data['query'] = $return_json;
        } else {
            $this->data['query'] = $result;
            $return_json = '';
        }

        if ($debug == 'y') {
            echo "GSD: ".$get_start_date."\n";
            echo "PSD: ".$post_start_date."\n";
            echo "GED: ".$get_end_date."\n";
            echo "PED: ".$post_end_date."\n";
            echo "Start Date: ".$start_date."<br />\n";
            echo "End Date: ".$end_date."<br />\n";
            echo "Report: ".$report."\n";
            echo "SQL: ".$this->db->last_query()."\n";
            $time_end = new DateTime();
            $end = $time_end->getTimestamp();
            $elapsed_time = intval($end) - intval($start);
            echo "Elapsed: ".$elapsed_time."\n";
            echo "RESULT:\n";
            print_r($result);
            echo "RETURNED JSON:\n";
            print_r($return_json);
        }

        // send the resultset as json
        if ($debug != 'y') {
            $this->determine_output('json');
        }
    }
}
