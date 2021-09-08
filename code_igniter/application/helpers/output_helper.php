<?php
/**
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

* PHP version 5.3.3
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.2.0
* @link      http://www.open-audit.org
*/

if (! defined('BASEPATH')) {
     exit('No direct script access allowed');
}

if (! function_exists('output')) {
    /**
     * The standard log function for Open-AudIT. Writes logs to a text file in the desired format (json or syslog).
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @return NULL [logs the provided string to the log file]
     */
    function output()
    {
        $timer_start = microtime(true);
        error_reporting(E_ALL);
        $CI = & get_instance();

        if ($CI->response->meta->id === 888888888888) {
            $CI->response->meta->id = null;
            unset($CI->response->data);
            $CI->response->data = array();
        }
        if (!empty($CI->response->data) && count($CI->response->data) > 0) {
            $CI->response->data = output_convert($CI->response->data);
        }
        if (empty($CI->response->data)) {
            $CI->response->data = false;
        }
        if (!empty($CI->response->included) && $CI->response->meta->collection !== 'scripts') {
            $CI->response->included = output_convert($CI->response->included);
        }
        create_links();
        // if we have errors set, make sure we remove the data object / array
        if (!empty($CI->response->errors) && count($CI->response->errors) > 0) {
            if ($CI->response->meta->collection !== 'discoveries') {
                unset($CI->response->data);
            }
        } else {
            unset($CI->response->errors);
        }

        if ($CI->response->meta->collection === 'summaries' && $CI->response->meta->action === 'execute') {
            unset($CI->response->meta->data_order);
            $CI->response->meta->data_order = array('name','count');
        } else if ($CI->response->meta->collection === 'charts') {
            // Do nothing
        } else if ($CI->response->meta->collection === 'nmis') {
            // Do nothing
            if (empty($CI->response->meta->data_order)) {
                $CI->response->meta->data_order = array();
            }
        } else {
            unset($CI->response->meta->data_order);
            $CI->response->meta->data_order = array();

            if (!empty($CI->response->data[0]->attributes)) {
                foreach ($CI->response->data[0]->attributes as $key => $value) {
                    if (strpos($key, '.') !== false or $CI->response->meta->collection === 'reports' or $CI->response->meta->collection === 'search' or $CI->response->meta->collection === 'help' or $CI->response->meta->collection === 'database') {
                        $CI->response->meta->data_order[] = $key;
                    } else {
                        $table = $CI->response->meta->collection;
                        if ($table === 'devices') {
                            $table = 'system';
                        }
                        if ($CI->db->field_exists($key, $table)) {
                            $CI->response->meta->data_order[] = $table . '.' . $key;
                        } else {
                            $CI->response->meta->data_order[] = $key;
                        }
                    }
                }
            }

            if ($CI->response->meta->collection === 'devices' && $CI->response->meta->action === 'sub_resource_read') {
                unset($CI->response->meta->data_order);
                $CI->response->meta->data_order = array();
                if (!empty($CI->response->data) && is_array($CI->response->data)) {
                    foreach ($CI->response->data[0]->attributes as $key => $value) {
                        $CI->response->meta->data_order[] = $key;
                    }
                }
            }

            $CI->response->meta->data_order = array_unique($CI->response->meta->data_order);
            $CI->response->meta->data_order = array_values($CI->response->meta->data_order);
            // sort($CI->response->meta->data_order);
        }

        if ($CI->response->meta->format === 'screen' && $CI->response->meta->action === 'read' && $CI->m_users->get_user_permission('', $CI->response->meta->collection, 'u')) {
            $CI->response->edit = true;
        }

        $timer_end = microtime(true);
        $entry = new stdClass();
        $entry->time = ($timer_end - $timer_start);
        $entry->detail = 'output_helper::output';
        $entry->time_now = time();
        $GLOBALS['timer_log'][] = $entry;

        if (!empty($CI->response->meta->debug) && $CI->response->meta->debug === true) {
            $CI->response->meta->user = $CI->user;
            $CI->response->meta->timing = $GLOBALS['timer_log'];
            $CI->response->meta->time_end = microtime(true);
            $CI->response->meta->time_elapsed = '';
            if (!empty($CI->response->meta->time_end) && ! empty($CI->response->meta->time_start)) {
                $CI->response->meta->time_elapsed = ($CI->response->meta->time_end - $CI->response->meta->time_start);
            }
        } else {
            unset($CI->response->logs);
            unset($CI->response->meta->internal);
            unset($CI->response->meta->sql);
            unset($CI->response->meta->time_start);
            unset($CI->response->meta->time_end);
            unset($CI->response->meta->time_elapsed);
            unset($CI->response->meta->timing);
        }

        switch ($CI->response->meta->format) {
            case 'screen':
                output_screen($CI->response);
                break;

            case 'json_data':
                output_json_data();
                break;

            case 'datatables':
                output_datatables();
                break;

            case 'excel':
                output_csv($CI->response);
                break;

            case 'csv':
                output_csv($CI->response);
                break;

            case 'sql':
                output_sql($CI->response);
                break;

            case 'highcharts':
                output_highcharts($CI->response);
                break;

            case 'html':
                output_html($CI->response);
                break;

            case 'table':
                output_table($CI->response);
                break;

            case 'html_formatted':
                output_html_formatted($CI->response);
                break;

            case 'table_formatted':
                output_table_formatted($CI->response);
                break;

            case 'xml':
                output_xml($CI->response);
                break;

            case 'json':
                output_json($CI->response);
                break;

            case 'rss':
                output_rss($CI->response);
                break;

            default:
                output_screen($CI->response);
                break;
        }

        $log = new stdClass();
        $log->object = $CI->response->meta->collection;
        $log->function = strtolower($CI->response->meta->collection) . '::' . strtolower($CI->response->meta->action);
        $log->severity = 7;
        if ($CI->response->meta->action === 'create' or $CI->response->meta->action === 'update' or $CI->response->meta->action === 'delete') {
            $log->severity = 5;
        }
        $log->status = @$CI->response->meta->header;
        $log->summary = 'finish';
        $log->type = 'access';
        $log->detail = json_encode($CI->response->meta);
        stdLog($log);
    }

    /**
     * [output_csv description]
     * @return [type] [description]
     */
    function output_csv()
    {
        $CI = & get_instance();

        if (!empty($CI->response->meta->heading)) {
            $filename = $CI->response->meta->heading;
        } else if (!empty($CI->response->meta->collection)) {
            $filename = $CI->response->meta->collection;
        } else {
            $filename = 'openaudit';
        }

        $output_csv = '';

        if ($CI->response->meta->collection === 'clouds' and ! empty($CI->response->data)) {
            for ($i=0; $i < count($CI->response->data); $i++) {
                $CI->response->data[$i]->attributes->credentials = json_encode($CI->response->data[$i]->attributes->credentials);
            }
        }

        if ($CI->response->meta->collection === 'credentials' and ! empty($CI->response->data)) {
            for ($i=0; $i < count($CI->response->data); $i++) {
                $CI->response->data[$i]->attributes->credentials = json_encode($CI->response->data[$i]->attributes->credentials);
            }
        }

        if ($CI->response->meta->collection === 'dashboards' and ! empty($CI->response->data)) {
            for ($i=0; $i < count($CI->response->data); $i++) {
                $CI->response->data[$i]->attributes->options = json_encode($CI->response->data[$i]->attributes->options);
            }
        }

        if ($CI->response->meta->collection === 'discoveries' and ! empty($CI->response->data)) {
            for ($i=0; $i < count($CI->response->data); $i++) {
                $CI->response->data[$i]->attributes->scan_options = json_encode($CI->response->data[$i]->attributes->scan_options);
                $CI->response->data[$i]->attributes->match_options = json_encode($CI->response->data[$i]->attributes->match_options);
                $CI->response->data[$i]->attributes->command_options = json_encode($CI->response->data[$i]->attributes->command_options);
            }
        }

        if ($CI->response->meta->collection === 'tasks' and ! empty($CI->response->data)) {
            for ($i=0; $i < count($CI->response->data); $i++) {
                $CI->response->data[$i]->attributes->options = json_encode($CI->response->data[$i]->attributes->options);
            }
        }

        if ($CI->response->meta->collection === 'queue') {
            foreach ($CI->response->meta->data_order as $key => $value) {
                if ($value === 'details') {
                    unset($CI->response->meta->data_order[$key]);
                }
            }
        }

        $table = $CI->response->meta->collection;
        if ($table === 'devices' or $table === 'queries') {
            $table = 'system';
        }

        $CI->response->meta->data_order = array_values($CI->response->meta->data_order);

        $csv_header = $CI->response->meta->data_order;

        for ($i=0; $i < count($csv_header); $i++) {
            if (stripos($csv_header[$i], $table.'.') === 0) {
                $csv_header[$i] = str_ireplace($table.'.', '', $csv_header[$i]);
            }
        }

        // Our header line
        $output_csv = '"' . implode('","', $csv_header) . '"' . "\n";
        // Each individual data line
        $output_escape_csv = @$CI->config->config['output_escape_csv'];
        if (!empty($CI->response->data)) {
            foreach ($CI->response->data as $item) {
                $line_array = array();
                foreach ($CI->response->meta->data_order as $field) {
                    $value = '';
                    if (!empty($item->attributes->{$CI->response->meta->collection.'.'.$field})) {
                        $value = $item->attributes->{$CI->response->meta->collection.'.'.$field};
                    }
                    if (!empty($item->attributes->$field)) {
                        $value = $item->attributes->$field;
                    }
                    if (empty($value) && stripos($field, '.') !== false) {
                        $temp = explode('.', $field);
                        if (!empty($item->attributes->{$temp[1]})) {
                            $value = $item->attributes->{$temp[1]};
                        }
                    }
                    if (is_string($value) or is_int($value)) {
                        $value = str_replace('"', '""', (string)$value);
                    } else {
                        $value = '';
                    }
                    if (!empty($output_escape_csv) && $output_escape_csv === 'y') {
                        if (strpos($value, '=') === 0 or strpos($value, '+') === 0 or strpos($value, '-') === 0 or strpos($value, '@') === 0) {
                            $value = "'" . $value;
                        }
                    }
                    $line_array[] = $value;
                }
                $output_csv .= '"' . implode('","', $line_array) . '"' . "\n";
                unset($line_array);
            }
        }

        if ((string) $CI->config->config['download_reports'] === 'y') {
            echo $output_csv;
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment;filename="'.$filename.'.csv"');
            header('Cache-Control: max-age=0');
        } else {
            echo $output_csv;
        }
    }

    function sql()
    {
        $CI = & get_instance();
        echo "<pre>\n";
        print_r(json_encode($CI->response));
        echo "</pre>";
        exit();
    }

    function output_json()
    {
        $timer_start = microtime(true);
        $CI = & get_instance();
        $CI->output->enable_profiler(false);
        header('Content-Type: application/json');
        if ((string) $CI->config->config['download_reports'] === 'y') {
            if (!empty($CI->response->meta->heading)) {
                $filename = $CI->response->meta->heading;
            } else if (!empty($CI->response->meta->collection)) {
                $filename = $CI->response->meta->collection;
            } else {
                $filename = 'openaudit';
            }
            header('Content-Disposition: attachment;filename="'.$filename.'.json"');
            header('Cache-Control: max-age=0');
        }
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        header($CI->response->meta->header);
        echo json_encode($CI->response);
    }

    function output_json_data()
    {
        $CI = & get_instance();
        $CI->output->enable_profiler(false);
        header('Content-Type: application/json');
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        header($CI->response->meta->header);
        if (isset($CI->response->data)) {
            echo json_encode($CI->response->data);
        } else if (isset($CI->response->error)) {
            echo json_encode($CI->response->error);
        }
    }

    function output_highcharts($response)
    {

        # $CI = & get_instance();

        switch ($response->included[0]->attributes->type) {
            case 'line':
                $response = highcharts_line($response);
                break;

            case 'pie':
                $response = highcharts_pie($response);
                break;

            default:
                # code...
                break;
        }

        header('Content-Type: application/json');
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        #echo str_replace('"function(event){location.href = this.options.url;}"', 'function(event){ location.href = this.options.url;},', json_encode($output, JSON_PRETTY_PRINT));;
        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    function highcharts_pie($response)
    {
        $output = new stdClass();

        $output->title = new stdClass();
        $output->title->text = $response->included[0]->attributes->name;

        $output->chart = new stdClass();
        $output->chart->type = $response->included[0]->attributes->type;
        $output->chart->renderTo = 'widget_' . $response->included[0]->id;

        $output->credits = false;

        $output->exporting = new stdClass();
        $output->exporting->enabled = false;

        $output->plotOptions = new stdClass();

        $output->plotOptions->pie = new stdClass();
        $output->plotOptions->pie->allowPointSelect = true;
        $output->plotOptions->pie->cursor = 'pointer';
        $output->plotOptions->pie->dataLabels = new stdClass();
        $output->plotOptions->pie->dataLabels->enabled = false;
        $output->plotOptions->pie->dataLabels->format = '<b>{point.name}</b>: {point.percentage:.1f} %';
        $output->plotOptions->pie->showInLegend = true;

        $output->plotOptions->series = new stdClass();
        $output->plotOptions->series->point = new stdClass();
        $output->plotOptions->series->point->events = new stdClass();
        $output->plotOptions->series->point->events->click = "function(event){location.href = this.options.url;}";

        $output->subtitle = new stdClass();

        $output->tooltip = new stdClass();
        $output->tooltip->useHTML = true;
        $output->tooltip->headerFormat = '<b>{point.key}</b><br />';
        $output->tooltip->pointFormat = 'Percent: {point.percentage:.1f}%<br />Count: {point.y}';

        $output->series = array();
        $item = new stdClass();
        $item->name = $response->included[0]->attributes->dataset_title;
        $item->colorByPoint = true;
        $item->data = array();
        for ($i=0; $i<count($response->data); $i++) {
            $slice = new stdClass();
            $slice->name = $response->data[$i]->attributes->name;
            if (empty($slice->name)) {
                $slice->name = 'NoData';
            }
            $slice->y = intval($response->data[$i]->attributes->count);
            # $slice->url = '../' . $response->data[$i]->attributes->link;
            $slice->url = $response->data[$i]->attributes->link;
            $item->data[] = $slice;
        }
        $output->series[] = $item;

        unset($response->data);
        $response->data = $output;
        return $response;
    }

    function highcharts_line($response)
    {
        $output = new stdClass();
        $output->title = new stdClass();
        $output->title->text = $response->included[0]->attributes->name;

        $output->chart = new stdClass();
        $output->chart->type = $response->included[0]->attributes->type;
        $output->chart->renderTo = 'widget_' . $response->included[0]->id;

        $output->credits = false;

        $output->exporting = new stdClass();
        $output->exporting->enabled = false;

        $output->plotOptions = new stdClass();

        $output->plotOptions->line = new stdClass();
        $output->plotOptions->line->lineWidth = 2;
        $output->plotOptions->line->states = new stdClass();
        $output->plotOptions->line->states->hover = new stdClass();
        $output->plotOptions->line->states->hover->lineWidth = 3;

        // the dots along the line at each point
        $output->plotOptions->line->marker = new stdClass();
        $output->plotOptions->line->marker->enabled = false;

        // the value displayed along the line at each point
        $output->plotOptions->line->dataLabels = new stdClass();
        $output->plotOptions->line->dataLabels->enabled = false;

        $output->plotOptions->series = new stdClass();
        $output->plotOptions->series->point = new stdClass();
        $output->plotOptions->series->point->events = new stdClass();
        $output->plotOptions->series->point->events->click = "function(event){location.href = this.options.url;}";

        $output->subtitle = new stdClass();

        $output->tooltip = new stdClass();
        $output->tooltip->headerFormat = '';
        $output->tooltip->pointFormat = '{point.tooltip}<br />Count: <b>{point.y}</b>';

        $output->xAxis = new stdCLass();
        $output->xAxis->labels = new stdClass();
        $output->xAxis->labels->step = 4;
        $output->xAxis->categories = array();

        $output->yAxis = new stdCLass();
        $output->yAxis->title = new stdClass();
        $output->yAxis->title->text = $response->included[0]->attributes->primary;

        $output->series = array();
        $dataset = new stdClass();
        $dataset->name = $response->included[0]->attributes->dataset_title;
        $dataset->color = '#333333';
        $dataset->data = array();
        $sub_title_text = '';
        for ($i=0; $i<count($response->data); $i++) {
            $item = new stdClass();
            $item->y = intval($response->data[$i]->attributes->count);
            # $item->url = '../' . str_replace('@date', $response->data[$i]->attributes->date, $response->included[0]->attributes->link);
            $item->url = str_replace('@date', $response->data[$i]->attributes->date, $response->included[0]->attributes->link);
            $item->tooltip = date_format(date_create($response->data[$i]->attributes->date), 'D, M j Y');
            $dataset->data[] = $item;
            if ($i === 0) {
                $sub_title_text = date_format(date_create($response->data[$i]->attributes->date), 'D, M j') . ' to ';
            }
            if ($i === count($response->data)-1) {
                $sub_title_text = $sub_title_text . date_format(date_create($response->data[$i]->attributes->date), 'D, M j Y' . '.');
            }
            $output->xAxis->categories[] = date_format(date_create($response->data[$i]->attributes->date), 'j M');
        }
        $output->series[] = $dataset;

        $output->subtitle->text = $sub_title_text;

        unset($response->data);
        $response->data = $output;
        return $response;
    }

    function icon($collection)
    {
        $icon = 'fa fa-refresh fa-spin fa-fw';
        switch ($collection) {
            case 'applications':
                $icon = 'fa fa-snowflake-o';
                break;

            case 'attributes':
                $icon = 'fa fa-list';
                break;

            case 'baselines':
                $icon = 'fa fa-line-chart';
                break;

            case 'baselines_policies':
                $icon = 'fa fa-area-chart';
                break;

            case 'buildings':
                $icon = 'fa fa-building-o';
                break;

            case 'clouds':
                $icon = 'fa fa-cloud';
                break;

            case 'clusters':
                $icon = 'fa fa-cubes';
                break;

            case 'collectors':
                $icon = 'fa fa-cogs';
                break;

            case 'configuration':
                $icon = 'fa fa-sliders';
                break;

            case 'connections':
                $icon = 'fa fa-link';
                break;

            case 'credentials':
                $icon = 'fa fa-shield';
                break;

            case 'dashboards':
                $icon = 'fa fa-dashboard';
                break;

            case 'database':
                $icon = 'fa fa-database';
                break;

            case 'devices':
                $icon = 'fa fa-desktop';
                break;

            case 'discoveries':
                $icon = 'fa fa-binoculars';
                break;

            case 'discovery_scan_options':
                $icon = 'fa fa-random';
                break;

            case 'fields':
                $icon = 'fa fa-comments-o';
                break;

            case 'files':
                $icon = 'fa fa-file-image-o';
                break;

            case 'floors':
                $icon = 'fa fa-sort-numeric-desc';
                break;

            case 'groups':
                $icon = 'fa fa-tags';
                break;

            case 'help':
                $icon = 'fa fa-question';
                break;

            case 'integrations':
                $icon = 'fa fa-exchange';
                break;

            case 'ldap_servers':
                $icon = 'fa fa-address-card-o';
                break;

            case 'licenses':
                $icon = 'fa fa-leanpub';
                break;

            case 'locations':
                $icon = 'fa fa-building';
                break;

            case 'logs':
                $icon = 'fa fa-bars';
                break;

            case 'maps':
                $icon = 'fa fa-map-o';
                break;

            case 'networks':
                $icon = 'fa fa-wifi';
                break;

            case 'orgs':
                $icon = 'fa fa-bank';
                break;

            case 'queries':
                $icon = 'fa fa-table';
                break;

            case 'rack_devices':
                $icon = 'fa fa-desktop';
                break;

            case 'racks':
                $icon = 'fa fa-film';
                break;

            case 'reports':
                $icon = 'fa fa-table';
                break;

            case 'roles':
                $icon = 'fa fa-lock';
                break;

            case 'rooms':
                $icon = 'fa fa-plus-square-o';
                break;

            case 'rows':
                $icon = 'fa fa-hashtag';
                break;

            case 'rules':
                $icon = 'fa fa-map-signs';
                break;

            case 'scripts':
                $icon = 'fa fa-code';
                break;

            case 'summaries':
                $icon = 'fa fa-pie-chart';
                break;

            case 'tasks':
                $icon = 'fa fa-clock-o';
                break;

            case 'users':
                $icon = 'fa fa-users';
                break;

            case 'widgets':
                $icon = 'fa fa-bar-chart';
                break;

            default:
                $icon = 'fa fa-refresh fa-spin fa-fw';
                break;
        }
        return $icon;
    }

    function output_screen()
    {
        $timer_start = microtime(true);
        $CI = & get_instance();
        if ($CI->response->meta->action === 'create' && $CI->response->meta->collection !== 'search') {
            redirect($CI->response->meta->collection . '/' . $CI->response->meta->id);
        }
        header($CI->response->meta->header);
        $CI->response->meta->icon = icon($CI->response->meta->collection);
        $CI->response->queries = array();

        $CI->response->orgs = $CI->m_orgs->collection($CI->user->id);

        $enterprise_report = new stdClass();
        $enterprise_report->id =  "10000";
        $enterprise_report->links = new stdClass();
        $enterprise_report->links->self = "/omk/oae/reports/10000";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new stdClass();
        $enterprise_report->attributes->id = "10000";
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Discovered Today";
        $CI->response->included[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new stdClass();
        $enterprise_report->id =  "10001";
        $enterprise_report->links = new stdClass();
        $enterprise_report->links->self = "/omk/oae/reports/10001";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new stdClass();
        $enterprise_report->attributes->id = "10001";
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Discovered Yesterday";
        $CI->response->included[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new stdClass();
        $enterprise_report->id =  "10002";
        $enterprise_report->links = new stdClass();
        $enterprise_report->links->self = "/omk/oae/reports/10002";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new stdClass();
        $enterprise_report->attributes->id = "10002";
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Discovered in the Last 7 Days";
        $CI->response->included[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new stdClass();
        $enterprise_report->id =  "10003";
        $enterprise_report->links = new stdClass();
        $enterprise_report->links->self = "/omk/oae/reports/10003";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new stdClass();
        $enterprise_report->attributes->id = "10003";
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Discovered in the Last 30 Days";
        $CI->response->included[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new stdClass();
        $enterprise_report->id =  "20000";
        $enterprise_report->links = new stdClass();
        $enterprise_report->links->self = "/omk/oae/reports/20000";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new stdClass();
        $enterprise_report->attributes->id = "20000";
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Software Discovered Today";
        $CI->response->included[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new stdClass();
        $enterprise_report->id =  "20001";
        $enterprise_report->links = new stdClass();
        $enterprise_report->links->self = "/omk/oae/reports/20001";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new stdClass();
        $enterprise_report->attributes->id = "20001";
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Software Discovered Yesterday";
        $CI->response->included[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new stdClass();
        $enterprise_report->id =  "20002";
        $enterprise_report->links = new stdClass();
        $enterprise_report->links->self = "/omk/oae/reports/20002";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new stdClass();
        $enterprise_report->attributes->id = "20002";
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Software Discovered in the Last 7 Days";
        $CI->response->included[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new stdClass();
        $enterprise_report->id =  "20003";
        $enterprise_report->links = new stdClass();
        $enterprise_report->links->self = "/omk/oae/reports/20003";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new stdClass();
        $enterprise_report->attributes->id = "20003";
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Software Discovered in the Last 30 Days";
        $CI->response->included[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new stdClass();
        $enterprise_report->id =  "30000";
        $enterprise_report->links = new stdClass();
        $enterprise_report->links->self = "/omk/oae/reports/30000";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new stdClass();
        $enterprise_report->attributes->id = "30001";
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Not Seen for 7 Days";
        $CI->response->included[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new stdClass();
        $enterprise_report->id =  "30001";
        $enterprise_report->links = new stdClass();
        $enterprise_report->links->self = "/omk/oae/reports/30001";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new stdClass();
        $enterprise_report->attributes->id = "30002";
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Not Seen for 30 Days";
        $CI->response->included[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new stdClass();
        $enterprise_report->id =  "30002";
        $enterprise_report->links = new stdClass();
        $enterprise_report->links->self = "/omk/oae/reports/30002";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new stdClass();
        $enterprise_report->attributes->id = "30003";
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Not Seen for 90 Days";
        $CI->response->included[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new stdClass();
        $enterprise_report->id =  "30003";
        $enterprise_report->links = new stdClass();
        $enterprise_report->links->self = "/omk/oae/reports/30003";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new stdClass();
        $enterprise_report->attributes->id = "30004";
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Not Seen for 180 Days";
        $CI->response->included[] = $enterprise_report;
        unset($enterprise_report);

        if ($CI->config->config['internal_version'] >= 20170620) {
            $CI->load->model('m_queries');
            $result = $CI->m_queries->collection($CI->user->id);
            $CI->response->included = array_merge($CI->response->included, $result);

            $CI->load->model('m_summaries');
            $result = $CI->m_summaries->collection($CI->user->id);
            $CI->response->included = array_merge($CI->response->included, $result);
        }

        $CI->load->model('m_dashboards');
        $result = @$CI->m_dashboards->collection($CI->user->id);
        $CI->response->included = @array_merge($CI->response->included, $result);
        $CI->response->dashboards = @array_merge($CI->response->included, $result);

        $include = true;
        if (is_array($CI->response->included)) {
            foreach ($CI->response->included as $item) {
                if (!empty($item->type) and $item->type == 'attributes') {
                    $include = false;
                }
            }
        }
        if ($include and $CI->response->meta->collection !== 'attributes') {
            if ($CI->db->table_exists('attributes')) {
                $CI->load->model('m_attributes');
                $attributes = $CI->m_attributes->collection($CI->user->id);
                usort($attributes, "sort_attributes");
                $CI->response->included = array_merge($CI->response->included, $attributes);
            }
        }

        if (!empty($CI->response->errors) and $CI->response->meta->collection !== 'discoveries') {
            unset($CI->response->data);
            $CI->response->include = 'v_error';
            $include = 'v_error';
        } else {
            if ($CI->response->meta->action === 'import_form') {
                $CI->response->include = 'v_collection_import_form';
            }
            if (empty($CI->response->include)) {
                $CI->response->include = 'v_' . $CI->response->meta->collection . '_' . $CI->response->meta->action;
            }
            $CI->response->heading = $CI->response->meta->heading;
        }

        if (empty($CI->response->meta->debug)) {
            unset($CI->response->logs);
        }

        $CI->response = filter_response($CI->response);
        $CI->load->view('v_template', $CI->response);
    }

    function filter_response(&$response)
    {
        if (is_array($response) or is_object($response)) {
            foreach ($response as &$item) {
                $item = filter_response($item);
            }
        } else if (is_string($response)) {
            $response = htmlentities($response, ENT_QUOTES, 'UTF-8');
            return $response;
        } else {
            return $response;
        }
        return($response);
    }

    function output_xml()
    {
        $CI = & get_instance();
        $CI->load->helper('xml');
        if (!empty($CI->response->meta->heading)) {
            $filename = $CI->response->meta->heading;
        } else if (!empty($CI->response->meta->collection)) {
            $filename = $CI->response->meta->collection;
        } else {
            $filename = 'openaudit';
        }
        $output = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
        $output .= "<" . $CI->response->meta->collection . ">\n";
        foreach ($CI->response->data as $details) {
            $output .= "\t<item>\n";
            foreach ($details->attributes as $attribute => $value) {
                if (gettype($value) == 'string') {
                    if (phpversion() >= 5.4) {
                        $value = htmlspecialchars($value, ENT_XML1 | ENT_QUOTES, 'UTF-8');
                    } else {
                        $value = xml_convert($value);
                    }
                    $output .= "\t\t<".$attribute.'>'.trim($value).'</'.$attribute.">\n";
                }
            }
            $output .= "\t</item>\n";
        }
        $output .=  "</" . $CI->response->meta->collection . ">\n";
        if ((string) $CI->config->config['download_reports'] === 'y') {
            header('Content-Type: text/xml');
            header('Content-Disposition: attachment;filename="' . $filename . '.xml"');
            header('Cache-Control: max-age=0');
            echo $output;
        } else {
            echo "<pre>" . htmlentities($output) . "</pre>";
        }
    }

    function output_convert($data)
    {
        $CI = & get_instance();
        $CI->load->helper('network');
        foreach ($data as $row) {
            if (is_array($row)) {
                $row = output_convert($row);
            } elseif (is_object($row)) {
                if (!empty($row->attributes)) {
                    foreach ($row->attributes as $key => $value) {
                        if (isset($key) && ($key === 'id' or $key === 'free' or $key === 'used' or $key === 'size' or $key === 'speed' or $key === 'total' or $key === 'col_order' or $key === 'access_level' or $key === 'count')) {
                            $row->attributes->$key = intval($value);
                        } elseif ((strrpos($key, '_id') === strlen($key)-3) or
                                    (strrpos($key, '.id') === strlen($key)-3) or
                                    (strrpos($key, '_count') === strlen($key)-6) or
                                    (strrpos($key, '_percent') === strlen($key)-8) or
                                    (strrpos($key, '_size') === strlen($key)-5)) {
                            $row->attributes->$key = intval($value);
                        } elseif ((strrpos($key, 'ip') === strlen($key)-2) or
                                (strrpos($key, 'next_hop') === strlen($key)-8) or
                                (strrpos($key, 'destination') === strlen($key)-11)) {
                            $temp_name = $key . '_padded';
                            $row->attributes->$temp_name = ip_address_from_db($value);
                            $row->attributes->$temp_name = ip_address_to_db($row->attributes->$temp_name);
                            $row->attributes->$key = ip_address_from_db($value);
                            if ($row->attributes->$temp_name === $row->attributes->$key) {
                                unset($row->attributes->$temp_name);
                            }
                        }
                        if (strrpos($key, 'system_id') === strlen($key)-9) {
                            $row->attributes->{'system.id'} = $value;
                        }
                        if (strrpos($key, 'org_id') === strlen($key)-6) {
                            $row->attributes->{'orgs.id'} = $value;
                        }
                        if (strrpos($key, 'location_id') === strlen($key)-11) {
                            $row->attributes->{'locations.id'} = $value;
                        }
                    }
                }
            }
        }
        return($data);
    }

    function create_url($query_parameters = null)
    {
        $CI = & get_instance();
        $proto = 'http://';
        if ($CI->config->config['is_ssl'] === true) {
            $proto = 'https://';
        }
        $link = $proto . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?';
        if (!empty($query_parameters)) {
            for ($i=0; $i < count($query_parameters); $i++) {
                if (!empty($query_parameters[$i]->name)) {
                    if (empty($query_parameters[$i]->operator) or $query_parameters[$i]->operator == '=') {
                        $query_parameters[$i]->operator = '';
                    }
                    $link .= urlencode($query_parameters[$i]->name) . '=' . $query_parameters[$i]->operator . urlencode($query_parameters[$i]->value) . '&';
                }
            }
        }
        $link = substr($link, 0, strlen($link)-1);
        return $link;
    }

    function create_links()
    {
        $CI = & get_instance();
        if (empty($CI->config->config['page_size'])) {
            $CI->config->config['page_size'] = 1000;
        }
        $offset = '';
        if ($CI->response->meta->total > 0 and $CI->response->meta->collection != 'charts') {
            # next link
            $query_parameters = $CI->response->meta->query_parameters;
            if (intval($CI->response->meta->total) > intval($CI->response->meta->filtered) and  (intval($CI->response->meta->offset)  <  intval($CI->response->meta->total))) {
                $offset = intval($CI->response->meta->offset) + intval($CI->response->meta->limit);
                $hit = false;
                for ($i=0; $i < count($query_parameters); $i++) {
                    if ($query_parameters[$i]->name == 'offset') {
                        $query_parameters[$i]->value = $offset;
                        $hit = true;
                    }
                }
                if (!$hit) {
                    $item = new stdClass();
                    $item->name = 'offset';
                    $item->value = $offset;
                    $query_parameters[] = $item;
                    unset($item);
                }
            }
            $CI->response->links->next = create_url($query_parameters);
            unset($query_parameters);

            #prev link
            $query_parameters = $CI->response->meta->query_parameters;
            if (!empty($CI->response->meta->offset)) {
                $temp = intval($CI->response->meta->limit);
                if (empty($temp)) {
                    $temp = $CI->config->config['page_size'];
                }
                if ($temp < 0) {
                    $temp = 0;
                }
                $offset = intval($CI->response->meta->offset - $temp);
                if (!empty($offset)) {
                    $hit = false;
                    for ($i=0; $i < count($query_parameters); $i++) {
                        if ($query_parameters[$i]->name == 'offset') {
                            $query_parameters[$i]->value = $offset;
                            $hit = true;
                        }
                    }
                    if (!$hit) {
                        $item = new stdClass();
                        $item->name = 'offset';
                        $item->value = $offset;
                        $query_parameters[] = $item;
                        unset($item);
                    }
                } else {
                    for ($i=0; $i < count($query_parameters); $i++) {
                        if ($query_parameters[$i]->name == 'offset') {
                            unset($query_parameters[$i]);
                        }
                    }
                }
            }
            $CI->response->links->prev = create_url($query_parameters);
            unset($query_parameters);

            # first link
            $offset = 0;
            $query_parameters = $CI->response->meta->query_parameters;
            for ($i=0; $i < count($query_parameters); $i++) {
                if ($query_parameters[$i]->name == 'offset') {
                    unset($query_parameters[$i]);
                }
            }
            $CI->response->links->first = create_url($query_parameters);
            unset($query_parameters);

            # last link
            $query_parameters = $CI->response->meta->query_parameters;
            if ($CI->response->meta->total > $CI->response->meta->limit) {
                $temp = intval($CI->response->meta->limit);
                if (empty($temp)) {
                    $temp = $CI->config->config['page_size'];
                }
                if ($temp < 0) {
                    $temp = 0;
                }
                $offset = intval($CI->response->meta->total) - intval($temp);
                $hit = false;
                for ($i=0; $i < count($query_parameters); $i++) {
                    if ($query_parameters[$i]->name == 'offset') {
                        $query_parameters[$i]->value = $offset;
                        $hit = true;
                    }
                }
                if (!$hit) {
                    $item = new stdClass();
                    $item->name = 'offset';
                    $item->value = $offset;
                    $query_parameters[] = $item;
                    unset($item);
                }
            }
            $CI->response->links->last = create_url($query_parameters);
            unset($query_parameters);
        }
    }

    function output_html()
    {
        $CI = & get_instance();
        $CI->response = filter_response($CI->response);
        $table = "<table><thead><tr>";
        // Our Headers
        foreach ($CI->response->data[0]->attributes as $key => $value) {
            if (stripos($key, '_padded') === false) {
                $table .= "<th>" . $key . "</th>";
            }
        }
        $table .= "</tr></thead><tbody>";
        foreach ($CI->response->data as $item) {
            $table .= "<tr>";
            foreach ($item->attributes as $key => $value) {
                if (stripos($key, '_padded') === false) {
                    $table .= "<td>" . @$value . "</td>";
                }
            }
            $table .= "</tr>";
        }
        $table .= "</tbody></table>";
        echo $table;
        if ((string) $CI->config->config['download_reports'] === 'y') {
            header('Content-Type: text/html');
            header('Content-Disposition: attachment;filename="'.$CI->response->meta->heading.'.html"');
            header('Cache-Control: max-age=0');
        }
    }

    function output_table()
    {
        $CI = & get_instance();
        $CI->response = filter_response($CI->response);
        $table = "<table><thead><tr>";
        // Our Headers
        foreach ($CI->response->data[0]->attributes as $key => $value) {
            if (stripos($key, '_padded') === false) {
                $table .= "<th>" . $key . "</th>";
            }
        }
        $table .= "</tr></thead><tbody>";
        foreach ($CI->response->data as $item) {
            $table .= "<tr>";
            foreach ($item->attributes as $key => $value) {
                if (stripos($key, '_padded') === false) {
                    $table .= "<td>" . @$value . "</td>";
                }
            }
            $table .= "</tr>";
        }
        $table .= "</tbody></table>";
        echo $table;
        if ((string) $CI->config->config['download_reports'] === 'y') {
            header('Content-Type: text/html');
            header('Content-Disposition: attachment;filename="'.$CI->response->meta->heading.'.html"');
            header('Cache-Control: max-age=0');
        }
    }

    function sort_attributes($a, $b)
    {
        return strcmp(strtolower($a->attributes->name), strtolower($b->attributes->name));
    }

/* End of file output_helper.php */
/* Location: ./system/application/helpers/output_helper.php */
}
