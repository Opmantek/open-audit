<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

if (!function_exists('output')) {
    function output($instance)
    {
        if ($instance->resp->meta->id === 888888888888) {
            $instance->resp->meta->id = null;
            unset($instance->resp->data);
            $instance->resp->data = array();
        }
        if (!empty($instance->resp->data) && count($instance->resp->data) > 0) {
            $instance->resp->data = output_convert($instance->resp->data);
        }
        if (empty($instance->resp->data)) {
            $instance->resp->data = false;
        }
        if (!empty($instance->resp->included) && $instance->resp->meta->collection !== 'scripts') {
            $instance->resp->included = output_convert($instance->resp->included);
        }
        // if we have errors set, make sure we remove the data object / array
        if (!empty($instance->resp->errors) && count($instance->resp->errors) > 0) {
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
                    if (strpos($key, '.') !== false or $instance->resp->meta->collection === 'reports' or $instance->resp->meta->collection === 'search' or $instance->resp->meta->collection === 'help' or $instance->resp->meta->collection === 'database') {
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

        // if ($instance->resp->meta->format === 'screen' && $instance->resp->meta->action === 'read' && $instance->m_users->get_user_permission('', $instance->resp->meta->collection, 'u')) {
        //     $instance->resp->edit = true;
        // }

        // $timer_end = microtime(true);
        // $entry = new \StdClass();
        // $entry->time = ($timer_end - $timer_start);
        // $entry->detail = 'output_helper::output';
        // $entry->time_now = time();
        // $GLOBALS['timer_log'][] = $entry;

        $instance->resp->meta->user = $instance->user;
        $instance->resp->meta->time_end = microtime(true);
        $instance->resp->meta->time_elapsed = number_format(($instance->resp->meta->time_end - $instance->resp->meta->microtime), 2);


        // if (!empty($instance->resp->meta->debug) && $instance->resp->meta->debug === true) {
        //     $instance->resp->meta->user = $instance->user;
        //     #$instance->resp->meta->timing = $GLOBALS['timer_log'];
        //     $instance->resp->meta->time_end = microtime(true);
        //     $instance->resp->meta->time_elapsed = '';
        //     if (!empty($instance->resp->meta->time_end) && ! empty($instance->resp->meta->time_start)) {
        //         $instance->resp->meta->time_elapsed = ($instance->resp->meta->time_end - $instance->resp->meta->time_start);
        //     }
        // } else {
        //     unset($instance->resp->logs);
        //     unset($instance->resp->meta->internal);
        //     unset($instance->resp->meta->sql);
        //     unset($instance->resp->meta->time_start);
        //     unset($instance->resp->meta->time_end);
        //     unset($instance->resp->meta->time_elapsed);
        //     unset($instance->resp->meta->timing);
        // }

        // $message = strtolower($instance->resp->meta->collection) . '::' . strtolower($instance->resp->meta->action) . ' by user ' . @$instance->user->full_name . ', response: ' . json_encode($instance->resp->meta) . "\n";

        // if ($instance->resp->meta->action === 'create' or $instance->resp->meta->action === 'update' or $instance->resp->meta->action === 'delete') {
        //     log_message('notice', $message);
        // } else {
        //     log_message('debug', $message);
        // }

        switch ($instance->resp->meta->format) {
            case 'screen':
                output_screen($instance);
                break;

            case 'datatables':
                output_datatables($instance);
                break;

            case 'csv':
                output_csv($instance);
                break;

            case 'highcharts':
                output_highcharts($instance);
                break;

            case 'html':
                output_html($instance);
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

            case 'rss':
                output_rss($instance);
                break;

            default:
                output_screen($instance);
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

        echo $output_csv;
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename="'.$filename.'.csv"');
        header('Cache-Control: max-age=0');
    }

    function output_json($instance)
    {
        $instance->response->removeHeader('Content-Type');
        header('Content-Type: application/json');
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        #header($instance->resp->meta->header);
        #header('HTTP/1.1 400 Bad Request');
        #http_response_code(400);
        if (! empty($instance->resp->meta->collection)) {
            $instance->resp->meta->icon = icon($instance->resp->meta->collection);
        }
        unset($instance->resp->meta->user);
        echo json_encode($instance->resp);
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

        header('Content-Type: application/json');
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
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

    function icon($collection)
    {
        $icon = 'fa fa-refresh fa-spin fa-fw';
        switch ($collection) {
            case 'applications':
                $icon = 'fa fa-snowflake-o';
                break;

            case 'attributes':
                $icon = 'fa fa-list-ul';
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
        // $CI = & get_instance();
        // $CI->load->helper('network');
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
                        if (strrpos($key, 'device_id') === strlen($key)-9) {
                            $row->attributes->{'devices.id'} = $value;
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



    function output_html()
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
        // if ((string) config('Openaudit')->download_reports === 'y') {
        //     header('Content-Type: text/html');
        //     header('Content-Disposition: attachment;filename="'.$CI->resp->meta->heading.'.html"');
        //     header('Cache-Control: max-age=0');
        // }
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
        // if ((string) $CI->config->config['download_reports'] === 'y') {
        //     header('Content-Type: text/html');
        //     header('Content-Disposition: attachment;filename="'.$CI->resp->meta->heading.'.html"');
        //     header('Cache-Control: max-age=0');
        // }
    }

    function sort_attributes($a, $b)
    {
        return strcmp(strtolower($a->attributes->name), strtolower($b->attributes->name));
    }

/* End of file output_helper.php */
/* Location: ./system/application/helpers/output_helper.php */
}
