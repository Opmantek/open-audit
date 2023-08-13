<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

if (!function_exists('output')) {
    function output($instance)
    {
        if (empty($instance->resp->data)) {
            $instance->resp->data = false;
        }
        // if we have errors set, make sure we remove the data object / array
        if (!empty($instance->resp->errors) && $instance->resp->errors !== '') {
            if ($instance->resp->meta->collection !== 'discoveries') {
                unset($instance->resp->data);
            }
        } else {
            unset($instance->resp->errors);
        }

        if ($instance->resp->meta->collection === 'summaries' && $instance->resp->meta->action === 'execute') {
            unset($instance->resp->meta->data_order);
            $instance->resp->meta->data_order = array('name','count');
        } else if ($instance->resp->meta->collection === 'charts') {
            // Do nothing
        } else if ($instance->resp->meta->collection === 'nmis') {
            // Do nothing
            if (empty($instance->resp->meta->data_order)) {
                $instance->resp->meta->data_order = array();
            }
        } else {
            $db = db_connect();
            unset($instance->resp->meta->data_order);
            $instance->resp->meta->data_order = array();

            if (!empty($instance->resp->data[0]->attributes)) {
                foreach ($instance->resp->data[0]->attributes as $key => $value) {
                    if (strpos((string)$key, '.') !== false or $instance->resp->meta->collection === 'components' or $instance->resp->meta->collection === 'reports' or $instance->resp->meta->collection === 'search' or $instance->resp->meta->collection === 'help' or $instance->resp->meta->collection === 'database') {
                        $instance->resp->meta->data_order[] = $key;
                    } else {
                        if ($db->fieldExists($key, $instance->resp->meta->collection)) {
                            $instance->resp->meta->data_order[] = $instance->resp->meta->collection . '.' . $key;
                        } else {
                            $instance->resp->meta->data_order[] = $key;
                        }
                    }
                }
            }

            if ($instance->resp->meta->collection === 'devices' && $instance->resp->meta->action === 'sub_resource_read') {
                unset($instance->resp->meta->data_order);
                $instance->resp->meta->data_order = array();
                if (!empty($instance->resp->data) && is_array($instance->resp->data)) {
                    foreach ($instance->resp->data[0]->attributes as $key => $value) {
                        $instance->resp->meta->data_order[] = $key;
                    }
                }
            }

            $instance->resp->meta->data_order = array_unique($instance->resp->meta->data_order);
            $instance->resp->meta->data_order = array_values($instance->resp->meta->data_order);
        }

        $instance->resp->meta->user = $instance->user;
        $instance->resp->meta->time_end = microtime(true);
        $instance->resp->meta->time_elapsed = number_format(($instance->resp->meta->time_end - $instance->resp->meta->microtime), 2);

        switch ($instance->resp->meta->format) {
            case 'datatables':
                output_datatables($instance);
                break;

            case 'csv':
                output_csv($instance);
                break;

            case 'highcharts':
                output_highcharts($instance);
                break;

            case 'html_data':
                output_html_data($instance);
                break;

            case 'table':
                output_table($instance);
                break;

            case 'html_formatted':
                output_html_formatted($instance);
                break;

            case 'table_formatted':
                output_table_formatted($instance);
                break;

            case 'xml':
                output_xml($instance);
                break;

            case 'json':
                output_json($instance);
                break;

            case 'json_data':
                output_json($instance);
                break;

            case 'rss':
                output_rss($instance);
                break;

            default:
                output_json($instance);
                break;
        }


        // $message = strtolower($instance->resp->meta->collection) . '::' . strtolower($instance->resp->meta->action) . ' by user ' . @$instance->user->full_name . ', response: ' . json_encode($instance->resp->meta);

        // if ($instance->resp->meta->action === 'create' or $instance->resp->meta->action === 'update' or $instance->resp->meta->action === 'delete') {
        //     log_message('notice', $message);
        // } else {
        //     log_message('debug', $message);
        // }
    }

    /**
     * [output_csv description]
     * @return [type] [description]
     */
    function output_csv($instance)
    {
        if (!empty($instance->resp->meta->heading)) {
            $filename = $instance->resp->meta->heading;
        } else if (!empty($instance->resp->meta->collection)) {
            $filename = $instance->resp->meta->collection;
        } else {
            $filename = 'openaudit';
        }

        $output_csv = '';

        if ($instance->resp->meta->collection === 'clouds' and ! empty($instance->resp->data)) {
            for ($i=0; $i < count($instance->resp->data); $i++) {
                $instance->resp->data[$i]->attributes->credentials = json_encode($instance->resp->data[$i]->attributes->credentials);
            }
        }

        if ($instance->resp->meta->collection === 'credentials' and ! empty($instance->resp->data)) {
            for ($i=0; $i < count($instance->resp->data); $i++) {
                $instance->resp->data[$i]->attributes->credentials = json_encode($instance->resp->data[$i]->attributes->credentials);
            }
        }

        if ($instance->resp->meta->collection === 'dashboards' and ! empty($instance->resp->data)) {
            for ($i=0; $i < count($instance->resp->data); $i++) {
                $instance->resp->data[$i]->attributes->options = json_encode($instance->resp->data[$i]->attributes->options);
            }
        }

        if ($instance->resp->meta->collection === 'discoveries' and ! empty($instance->resp->data)) {
            for ($i=0; $i < count($instance->resp->data); $i++) {
                $instance->resp->data[$i]->attributes->scan_options = json_encode($instance->resp->data[$i]->attributes->scan_options);
                $instance->resp->data[$i]->attributes->match_options = json_encode($instance->resp->data[$i]->attributes->match_options);
                $instance->resp->data[$i]->attributes->command_options = json_encode($instance->resp->data[$i]->attributes->command_options);
            }
        }

        if ($instance->resp->meta->collection === 'tasks' and ! empty($instance->resp->data)) {
            for ($i=0; $i < count($instance->resp->data); $i++) {
                $instance->resp->data[$i]->attributes->options = json_encode($instance->resp->data[$i]->attributes->options);
            }
        }

        if ($instance->resp->meta->collection === 'queue') {
            foreach ($instance->resp->meta->data_order as $key => $value) {
                if ($value === 'details') {
                    unset($instance->resp->meta->data_order[$key]);
                }
            }
        }

        $table = $instance->resp->meta->collection;
        if ($table === 'devices' or $table === 'queries') {
            $table = 'system';
        }

        $instance->resp->meta->data_order = array_values($instance->resp->meta->data_order);

        $csv_header = $instance->resp->meta->data_order;

        for ($i=0; $i < count($csv_header); $i++) {
            if (stripos($csv_header[$i], $table.'.') === 0) {
                $csv_header[$i] = str_ireplace($table.'.', '', $csv_header[$i]);
            }
        }

        // Our header line
        $output_csv = '"' . implode('","', $csv_header) . '"' . "\n";
        // Each individual data line
        $output_escape_csv = @config('Openaudit')->output_escape_csv;
        if (!empty($instance->resp->data)) {
            foreach ($instance->resp->data as $item) {
                $line_array = array();
                foreach ($instance->resp->meta->data_order as $field) {
                    $value = '';
                    if (!empty($item->attributes->{$instance->resp->meta->collection.'.'.$field})) {
                        $value = $item->attributes->{$instance->resp->meta->collection.'.'.$field};
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

        $instance->response->setContentType('text/csv');
        $instance->response->noCache();
        $instance->response->setHeader('Content-Disposition', 'attachment;filename="' . $filename . '.csv"');
        echo $output_csv;
    }

    function output_json($instance)
    {
        $instance->response->setContentType('application/json');
        $instance->response->noCache();
        $instance->response->setStatusCode($instance->resp->meta->header);
        unset($instance->resp->meta->user);
        if ($instance->resp->meta->format === 'json') {
            echo json_encode($instance->resp);
        } else {
            echo json_encode($instance->resp->data);
        }
    }

    function output_highcharts($instance)
    {
        switch ($instance->resp->included[0]->attributes->type) {
            case 'line':
                $instance->resp = highcharts_line($instance->resp);
                break;

            case 'pie':
                $instance->resp = highcharts_pie($instance->resp);
                break;

            default:
                # code...
                break;
        }

        $instance->response->setContentType('application/json');
        $instance->response->noCache();
        #echo str_replace('"function(event){location.href = this.options.url;}"', 'function(event){ location.href = this.options.url;},', json_encode($output, JSON_PRETTY_PRINT));;
        echo json_encode($instance->resp, JSON_PRETTY_PRINT);
    }

    function highcharts_pie($resp)
    {
        $output = new \StdClass();

        $output->title = new \StdClass();
        $output->title->text = $resp->included[0]->attributes->name;

        $output->chart = new \StdClass();
        $output->chart->type = $resp->included[0]->attributes->type;
        $output->chart->renderTo = 'widget_' . $resp->included[0]->id;

        $output->credits = false;

        $output->exporting = new \StdClass();
        $output->exporting->enabled = false;

        $output->plotOptions = new \StdClass();

        $output->plotOptions->pie = new \StdClass();
        $output->plotOptions->pie->allowPointSelect = true;
        $output->plotOptions->pie->cursor = 'pointer';
        $output->plotOptions->pie->dataLabels = new \StdClass();
        $output->plotOptions->pie->dataLabels->enabled = false;
        $output->plotOptions->pie->dataLabels->format = '<b>{point.name}</b>: {point.percentage:.1f} %';
        $output->plotOptions->pie->showInLegend = true;

        $output->plotOptions->series = new \StdClass();
        $output->plotOptions->series->point = new \StdClass();
        $output->plotOptions->series->point->events = new \StdClass();
        $output->plotOptions->series->point->events->click = "function(event){location.href = this.options.url;}";

        $output->subtitle = new \StdClass();

        $output->tooltip = new \StdClass();
        $output->tooltip->useHTML = true;
        $output->tooltip->headerFormat = '<b>{point.key}</b><br />';
        $output->tooltip->pointFormat = 'Percent: {point.percentage:.1f}%<br />Count: {point.y}';

        $output->series = array();
        $item = new \StdClass();
        $item->name = $resp->included[0]->attributes->dataset_title;
        $item->colorByPoint = true;
        $item->data = array();
        for ($i=0; $i<count($resp->data); $i++) {
            $slice = new \StdClass();
            $slice->name = $resp->data[$i]->attributes->name;
            if (empty($slice->name)) {
                $slice->name = 'NoData';
            }
            $slice->y = intval($resp->data[$i]->attributes->count);
            # $slice->url = '../' . $resp->data[$i]->attributes->link;
            $slice->url = $resp->data[$i]->attributes->link;
            $item->data[] = $slice;
        }
        $output->series[] = $item;

        unset($resp->data);
        $resp->data = $output;
        return $resp;
    }

    function highcharts_line($resp)
    {
        $output = new \StdClass();
        $output->title = new \StdClass();
        $output->title->text = $resp->included[0]->attributes->name;

        $output->chart = new \StdClass();
        $output->chart->type = $resp->included[0]->attributes->type;
        $output->chart->renderTo = 'widget_' . $resp->included[0]->id;

        $output->credits = false;

        $output->exporting = new \StdClass();
        $output->exporting->enabled = false;

        $output->plotOptions = new \StdClass();

        $output->plotOptions->line = new \StdClass();
        $output->plotOptions->line->lineWidth = 2;
        $output->plotOptions->line->states = new \StdClass();
        $output->plotOptions->line->states->hover = new \StdClass();
        $output->plotOptions->line->states->hover->lineWidth = 3;

        // the dots along the line at each point
        $output->plotOptions->line->marker = new \StdClass();
        $output->plotOptions->line->marker->enabled = false;

        // the value displayed along the line at each point
        $output->plotOptions->line->dataLabels = new \StdClass();
        $output->plotOptions->line->dataLabels->enabled = false;

        $output->plotOptions->series = new \StdClass();
        $output->plotOptions->series->point = new \StdClass();
        $output->plotOptions->series->point->events = new \StdClass();
        $output->plotOptions->series->point->events->click = "function(event){location.href = this.options.url;}";

        $output->subtitle = new \StdClass();

        $output->tooltip = new \StdClass();
        $output->tooltip->headerFormat = '';
        $output->tooltip->pointFormat = '{point.tooltip}<br />Count: <b>{point.y}</b>';

        $output->xAxis = new \StdClass();
        $output->xAxis->labels = new \StdClass();
        $output->xAxis->labels->step = 4;
        $output->xAxis->categories = array();

        $output->yAxis = new \StdClass();
        $output->yAxis->title = new \StdClass();
        $output->yAxis->title->text = $resp->included[0]->attributes->primary;

        $output->series = array();
        $dataset = new \StdClass();
        $dataset->name = $resp->included[0]->attributes->dataset_title;
        $dataset->color = '#333333';
        $dataset->data = array();
        $sub_title_text = '';
        for ($i=0; $i<count($resp->data); $i++) {
            $item = new \StdClass();
            $item->y = intval($resp->data[$i]->attributes->count);
            # $item->url = '../' . str_replace('@date', $resp->data[$i]->attributes->date, $resp->included[0]->attributes->link);
            $item->url = str_replace('@date', $resp->data[$i]->attributes->date, $resp->included[0]->attributes->link);
            $item->tooltip = date_format(date_create($resp->data[$i]->attributes->date), 'D, M j Y');
            $dataset->data[] = $item;
            if ($i === 0) {
                $sub_title_text = date_format(date_create($resp->data[$i]->attributes->date), 'D, M j') . ' to ';
            }
            if ($i === count($resp->data)-1) {
                $sub_title_text = $sub_title_text . date_format(date_create($resp->data[$i]->attributes->date), 'D, M j Y' . '.');
            }
            $output->xAxis->categories[] = date_format(date_create($resp->data[$i]->attributes->date), 'j M');
        }
        $output->series[] = $dataset;

        $output->subtitle->text = $sub_title_text;

        unset($resp->data);
        $resp->data = $output;
        return $resp;
    }

    function filter_response(&$resp)
    {
        if (is_array($resp) or is_object($resp)) {
            foreach ($resp as &$item) {
                $item = filter_response($item);
            }
        } else if (is_string($resp)) {
            $resp = htmlentities($resp, ENT_QUOTES, 'UTF-8');
            return $resp;
        } else {
            return $resp;
        }
        return($resp);
    }

    function output_xml($instance)
    {
        $instance->load->helper('xml');
        if (!empty($instance->resp->meta->heading)) {
            $filename = $instance->resp->meta->heading;
        } else if (!empty($instance->resp->meta->collection)) {
            $filename = $instance->resp->meta->collection;
        } else {
            $filename = 'openaudit';
        }
        $output = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
        $output .= "<" . $instance->resp->meta->collection . ">\n";
        foreach ($instance->resp->data as $details) {
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
        $output .=  "</" . $instance->resp->meta->collection . ">\n";
        if ((string) $instance->config->config['download_reports'] === 'y') {
            $instance->response->setContentType('text/xml');
            $instance->response->noCache();
            $instance->response->setHeader('Content-Disposition', 'attachment;filename="' . $filename . '.xml"');
            echo $output;
        } else {
            echo "<pre>" . htmlentities($output) . "</pre>";
        }
    }

    function create_url($query_parameters = null)
    {
        $link = '?';
        if (!empty($query_parameters)) {
            for ($i=0; $i < count($query_parameters); $i++) {
                if (!empty($query_parameters[$i]->name)) {
                    if (empty($query_parameters[$i]->operator) or $query_parameters[$i]->operator == '=') {
                        $query_parameters[$i]->operator = '';
                    }
                    $link .= urlencode($query_parameters[$i]->name) . '=' . $query_parameters[$i]->operator . urlencode((string)$query_parameters[$i]->value) . '&';
                }
            }
        }
        $link = substr($link, 0, strlen($link)-1);
        return $link;
    }



    function output_html_data()
    {
        $CI = & get_instance();
        $CI->resp = filter_response($CI->resp);
        $table = "<table><thead><tr>";
        // Our Headers
        foreach ($CI->resp->data[0]->attributes as $key => $value) {
            if (stripos($key, '_padded') === false) {
                $table .= "<th>" . $key . "</th>";
            }
        }
        $table .= "</tr></thead><tbody>";
        foreach ($CI->resp->data as $item) {
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
    }

    function output_table()
    {
        $CI = & get_instance();
        $CI->resp = filter_response($CI->resp);
        $table = "<table><thead><tr>";
        // Our Headers
        foreach ($CI->resp->data[0]->attributes as $key => $value) {
            if (stripos($key, '_padded') === false) {
                $table .= "<th>" . $key . "</th>";
            }
        }
        $table .= "</tr></thead><tbody>";
        foreach ($CI->resp->data as $item) {
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
    }

    function sort_attributes($a, $b)
    {
        return strcmp(strtolower($a->attributes->name), strtolower($b->attributes->name));
    }

/* End of file output_helper.php */
/* Location: ./system/application/helpers/output_helper.php */
}
