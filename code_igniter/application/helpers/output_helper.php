<?php
if (!defined('BASEPATH')) {
     exit('No direct script access allowed');
}
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

/*
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.3.0
* @link      http://www.open-audit.org
 */
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
     * @param     Object    log_details     An object containing details you wish to log
     *
     * @return NULL [logs the provided string to the log file]
     */
    function output()
    {
        error_reporting(E_ALL);
        $CI = & get_instance();
        if ($CI->response->meta->id == 888888888888) {
            $CI->response->meta->id = null;
            unset($CI->response->data);
            $CI->response->data = array();
        }
        if (!empty($CI->response->data) and count($CI->response->data) > 0) {
            $CI->response->data = output_convert($CI->response->data);
        }
        if (empty($CI->response->data)) {
            $CI->response->data = false;
        }
        if (!empty($CI->response->included) and $CI->response->meta->collection != 'scripts') {
            $CI->response->included = output_convert($CI->response->included);
        }
        create_links();
        // if we have errors set, make sure we remove the data object / array
        if (!empty($CI->response->errors) and count($CI->response->errors) > 0) {
            unset($CI->response->data);
        } else {
            unset($CI->response->errors);
        }

        if ($CI->response->meta->collection == 'summaries' and $CI->response->meta->action == 'execute') {
           unset($CI->response->meta->data_order);
           $CI->response->meta->data_order = array('name','count');
        } else if ($CI->response->meta->collection == 'charts') {
            # Do nothing
        } else if ($CI->response->meta->collection == 'nmis') {
            # Do nothing
            if (empty($CI->response->meta->data_order)) {
                $CI->response->meta->data_order = array();
            }
        } else {

            unset($CI->response->meta->data_order);
            $CI->response->meta->data_order = array();

            if (!empty($CI->response->data[0]->attributes)) {
                foreach ($CI->response->data[0]->attributes as $key => $value) {
                    $CI->response->meta->data_order[] = $key;
                }
            }

            if ($CI->response->meta->collection == 'clouds') {
                foreach ($CI->response->meta->data_order as $item) {
                    if ($item === 'credentials') {
                        $fields = array('key', 'secret_key');
                        foreach ($fields as $field) {
                            $CI->response->meta->data_order[] = 'credentials.' . $field;
                        }
                    }
                }
                $test = @$CI->config->item('decrypt_credentials');
                if (!empty($test) and $test != 'y') {
                    for ($i=0; $i < count($CI->response->data); $i++) {
                        $fields = array('key','secret_key');
                        foreach ($fields as $field) {
                            if (!empty($CI->response->data[$i]->attributes->credentials->{$field})) {
                                $CI->response->data[$i]->attributes->credentials->{$field} = '';
                                $CI->response->data[$i]->attributes->{"credentials.$field"} = '';
                            }
                        }
                    }
                }
            }

            if ($CI->response->meta->collection == 'credentials') {
                foreach ($CI->response->meta->data_order as $item) {
                    if ($item === 'credentials') {
                        $fields = array('community', 'security_name', 'security_level', 'authentication_protocol', 'authentication_passphrase', 'privacy_protocol', 'privacy_passphrase', 'username', 'password', 'ssh_key');
                        foreach ($fields as $field) {
                            $CI->response->meta->data_order[] = 'credentials.' . $field;
                        }
                    }
                }
                $test = @$CI->config->item('decrypt_credentials');
                if (!empty($test) and $test != 'y') {
                    for ($i=0; $i < count($CI->response->data); $i++) {
                        $fields = array('community', 'security_name', 'authentication_passphrase', 'privacy_passphrase', 'password', 'ssh_key');
                        foreach ($fields as $field) {
                            if (!empty($CI->response->data[$i]->attributes->credentials->{$field})) {
                                $CI->response->data[$i]->attributes->credentials->{$field} = '';
                                $CI->response->data[$i]->attributes->{"credentials.$field"} = '';
                            }
                        }
                    }
                }
            }

            if ($CI->response->meta->collection == 'discoveries') {
                foreach ($CI->response->meta->data_order as $item) {
                    if ($item === 'other') {
                        $fields = array('email_address','format','group_id');
                        foreach ($fields as $field) {
                            $CI->response->meta->data_order[] = 'other.' . $field;
                        }
                    }
                }
            }

            if ($CI->response->meta->collection == 'tasks') {
                foreach ($CI->response->meta->data_order as $item) {
                    if ($item === 'options') {
                        $fields = array('ad_domain','ad_server','single','subnet');
                        foreach ($fields as $field) {
                            $CI->response->meta->data_order[] = 'options.' . $field;
                        }
                    }
                }
            }

            $CI->response->meta->data_order = array_unique($CI->response->meta->data_order);
            $CI->response->meta->data_order = array_values($CI->response->meta->data_order);
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

            case 'html':
                output_html($CI->response);
                break;

            case 'table':
                #output_report($CI->response);
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

            case 'pdf':
            // TODO: need to insert the PDF function here
                output_screen($CI->response);
                break;

            case 'doc':
            // TODO: need to insert the doc / docx function here
                output_screen($CI->response);
                break;

            default:
                output_screen($CI->response);
                break;
        }
    }

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
        $table_name = $CI->response->meta->collection;
        if ($table_name == 'devices') {
            $table_name = 'system';
        }

        # TODO - if the individual item in data order doesn't exist in the table, no rows shown

        # TODO - individual credentials.credentials.password (discoveries.other, tasks.options, etc)


        # TOTO - move there into output function. Need to check credentials.credentials isn't being used anywhere (and tasks.options, files.options, discoveries.other, etc).
        if ($CI->response->meta->collection == 'credentials') {
            foreach ($CI->response->meta->data_order as $key => $value) {
                if ($value == 'credentials') {
                    unset($CI->response->meta->data_order[$key]);
                }
            }
        }
        if ($CI->response->meta->collection == 'discoveries') {
            foreach ($CI->response->meta->data_order as $key => $value) {
                if ($value == 'other') {
                    unset($CI->response->meta->data_order[$key]);
                }
            }
        }
        if ($CI->response->meta->collection == 'tasks') {
            foreach ($CI->response->meta->data_order as $key => $value) {
                if ($value == 'options') {
                    unset($CI->response->meta->data_order[$key]);
                }
            }
        }

        $table = $CI->response->meta->collection;
        if ($table == 'devices' or $table == 'queries') {
            $table = 'system';
        }

        $CI->response->meta->data_order = array_values($CI->response->meta->data_order);
        $csv_header = $CI->response->meta->data_order;
        if ($CI->response->meta->collection != 'credentials' and
            $CI->response->meta->collection != 'discoveries' and
            $CI->response->meta->collection != 'tasks') {
            for ($i=0; $i < count($csv_header); $i++) {
                if (stripos($csv_header[$i], $table.'.') === 0) {
                    $csv_header[$i] = str_ireplace($table.'.', '', $csv_header[$i]);
                }
            }
        }

        # Our header line
        $output_csv = '"' . implode('","', $csv_header) . '"' . "\n";

        # Each individual data line
        $output_escape_csv = @$CI->config->item('output_escape_csv');
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
                    $value = str_replace('"', '""', $value);
                    if (!empty($output_escape_csv) and $output_escape_csv === 'y') {
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
        if ((string) $CI->config->item('download_reports') === 'download') {
            echo $output_csv;
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment;filename="'.$filename.'.csv"');
            header('Cache-Control: max-age=0');
        } else {
            echo "<pre>\n";
            echo $output_csv;
            echo "</pre>";
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
        $CI = & get_instance();
        $CI->output->enable_profiler(false);

        if (!empty($CI->response->meta->heading)) {
            $filename = $CI->response->meta->heading;
        } else if (!empty($CI->response->meta->collection)) {
            $filename = $CI->response->meta->collection;
        } else {
            $filename = 'openaudit';
        }

        header('Content-Type: application/json');
        if ((string) $CI->config->item('download_reports') === 'download') {
            header('Content-Disposition: attachment;filename="'.$filename.'.json"');
            header('Cache-Control: max-age=0');
        }
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        header($CI->response->meta->header);
        if ($CI->response->meta->debug) {
            $CI->response->meta->user = $CI->user;
        } else {
            unset($CI->response->meta->internal);
            unset($CI->response->meta->sql);
        }
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

    function output_screen()
    {
        $CI = & get_instance();
        header($CI->response->meta->header);
        $CI->response->meta->user = $CI->user;

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
            $result = $CI->m_queries->collection();
            $CI->response->included = array_merge($CI->response->included, $result);
            $CI->load->model('m_collection');
            $result = $CI->m_collection->collection('summaries');
            $CI->response->included = array_merge($CI->response->included, $result);
        }

        $include = true;
        foreach ($CI->response->included as $item) {
            if ($item->type == 'attributes') {
                $include = false;
            }
        }
        if ($include) {
            if ($CI->db->table_exists('attributes')) {
                $CI->load->model('m_attributes');
                $attributes = $CI->m_attributes->collection();
                usort($attributes, "sort_attributes");
                $CI->response->included = array_merge($CI->response->included, $attributes);
            }
        }

        if (!empty($CI->response->errors)) {
            unset($CI->response->data);
            $CI->response->include = 'v_error';
            $include = 'v_error';
        } else {
            if (empty($CI->response->meta->include)) {
                $CI->response->meta->include = 'v_' . $CI->response->meta->collection . '_' . $CI->response->meta->action;
            }
            $CI->response->include = 'v_' . $CI->response->meta->collection . '_' . $CI->response->meta->action;
            $CI->response->heading = $CI->response->meta->heading;
        }
        $CI->load->view('v_template', $CI->response);
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
        if ((string) $CI->config->item('download_reports') === 'download') {
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
        $CI->load->helper('network_helper');
        foreach ($data as $row) {
            if (is_array($row)) {
                $row = output_convert($row);
            } elseif (is_object($row)) {
                if (!empty($row->attributes)) {
                    foreach ($row->attributes as $key => $value) {
                        if (isset($key) and ($key == 'id' or $key == 'free' or $key == 'used' or $key == 'size' or $key == 'speed' or $key == 'total' or $key == 'col_order' or $key == 'access_level' or $key == 'count')) {
                            $row->attributes->$key = intval($value);
                        } elseif ((strrpos($key, '_id') === strlen($key)-3) or
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
                            if ($row->attributes->$temp_name == $row->attributes->$key) {
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
                if (empty($temp)) { $temp = $CI->config->item('page_size'); }
                if ($temp < 0) { $temp = 0; }
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
                if (empty($temp)) { $temp = $CI->config->item('page_size'); }
                if ($temp < 0) { $temp = 0; }
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
                    $table .= "<td>" . @htmlspecialchars($value) . "</td>";
                }
            }
            $table .= "</tr>";
        }
        $table .= "</tbody></table>";
        echo $table;
        if ((string) $CI->config->item('download_reports') === 'download') {
            header('Content-Type: text/html');
            header('Content-Disposition: attachment;filename="'.$CI->response->meta->heading.'.html"');
            header('Cache-Control: max-age=0');
        }
    }

    function output_table()
    {
        $CI = & get_instance();
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
                    $table .= "<td>" . htmlspecialchars($value) . "</td>";
                }
            }
            $table .= "</tr>";
        }
        $table .= "</tbody></table>";
        echo $table;
        if ((string) $CI->config->item('download_reports') === 'download') {
            header('Content-Type: text/html');
            header('Content-Disposition: attachment;filename="'.$CI->response->meta->heading.'.html"');
            header('Cache-Control: max-age=0');
        }
    }

    function output_table2()
    {
        $CI = & get_instance();
        # Define our constans for use in htmlspecialchars
        if (!defined('CHARSET')) {
            define('CHARSET', 'UTF-8');
            if (phpversion() >= 5.4) {
                define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);
            } else {
                define('REPLACE_FLAGS', ENT_COMPAT);
            }
        }
        $CI->response->table = '';
        $table = '';
        if (isset($CI->response->columns)) {
            if ($CI->response->meta->format == 'screen' and $CI->user->theme == 'bootstrap') {
                $table = '<table id="table" data-toggle="table" data-sort-name="name" data-sort-order="asc" data-pagination="true" data-search="true" data-show-columns="true" data-pagination="true" data-pagination-first-text="First" data-pagination-pre-text="Previous" data-pagination-next-text="Next" data-pagination-last-text="Last" data-page-size="' . $CI->config->config['display_limit'] . '" data-striped="true">';
                } else {
                $table = "<table>\n";
            }
            $table .= "<thead>\n";
            $table .= "<tr>\n";
            $temp_edit = 'n';
            foreach ($CI->response->columns as $column) {
                if (isset($CI->response->meta->access_level) and $CI->response->meta->access_level > 9 and $column->secondary == 'id' and $column->type == 'link') {
                    $temp_edit = 'y';
                }
                if ($CI->response->meta->format == 'screen' and $CI->user->theme == 'bootstrap') {
                    if ($column->variable == 'icon' or $column->type == 'url') {
                        $table .= '<th data-sortable="true" data-field="' . $column->name . '" data-align="center" data-halign="center">' . $column->name . '</th>';
                    } else {
                        $table .= '<th data-sortable="true" data-field="' . $column->name . '">' . $column->name . '</th>';
                    }
                } else {
                    $table .= '<th>' . $column->name . '</th>';
                }
            }
            if ($temp_edit == 'y' and $CI->response->meta->format == 'screen' and $CI->user->theme == 'bootstrap') {
                $table .= '<th data-field="edit" data-align="center" data-halign="center" data-checkbox="true" data-click-to-select="true"></th>';
            }
            $table .= "</tr>\n";
            $table .= "</thead>\n";
            $table .= "<tbody>\n";
            foreach ($CI->response->data as $row) {
                $table .= '<tr>';
                foreach ($CI->response->columns as $column) {
                    if (((string) $column->type !== '') and ((string) $column->name !== 'Tags')) {
                        if (isset($row->{$column->variable}) and $row->{$column->variable} == '') {
                            $row->{$column->variable} = '-';
                        }
                        if (!isset($row->{$column->variable}) and $column->type != 'url') {
                            echo "WARNING. Request for " . $column->variable . " but not in row.";
                        }

                        switch ($column->type) {
                            case '':
                                break;

                            case 'link':
                                if ($CI->response->meta->format == 'screen' and $CI->user->theme == 'bootstrap' and $column->link == '/main/system_display/') {
                                    $column->link = '../' . $CI->response->meta->group_id . '/devices/';
                                }
                                $column->link = str_replace('$group_id', $CI->response->meta->group_id, $column->link);
                                if (strrpos($column->link, '/')+1 != strlen($column->link)) {
                                    $column->link = $column->link . '/';
                                }
                                $table .= '<td style="text-align: '.$column->align.';"><a href="'.$column->link. $row->{$column->secondary} .'">'.htmlspecialchars($row->{$column->variable}, REPLACE_FLAGS, CHARSET)."</a></td>\n";
                                break;

                            case 'ip_address':
                                $table .= '<td style="text-align: '.htmlspecialchars($column->align, REPLACE_FLAGS, CHARSET).';">';
                                $table .= '<span style="display:none;">' . $row->ip_padded . '</span>';
                                $table .= htmlspecialchars($row->{$column->variable}, REPLACE_FLAGS, CHARSET);
                                echo "</td>\n";
                                break;

                            case 'timestamp':
                            case 'text':
                                $table .= '<td style="text-align: '.htmlspecialchars($column->align, REPLACE_FLAGS, CHARSET).';">';
                                if (is_int($row->{$column->variable})) {
                                    $table .= number_format($row->{$column->variable});
                                } else {
                                    $table .= htmlspecialchars($row->{$column->variable}, REPLACE_FLAGS, CHARSET);
                                }
                                echo "</td>\n";
                                break;

                            case 'image':
                                if ((string) $row->{$column->variable} === '') {
                                    $row->{$column->variable} = 'unknown';
                                }
                                if ((string) $column->name === 'Icon') {
                                   $table .= '<td style="text-align:center;"><img width="20" src="' . $CI->config->config['oa_web_folder'] . '/device_images/'.htmlspecialchars(str_replace(' ', '_', $row->{$column->variable}), REPLACE_FLAGS, CHARSET).'.svg" style="border-width:0px;" title="'.htmlspecialchars($row->{$column->secondary}, REPLACE_FLAGS, CHARSET).'" alt="'.htmlspecialchars($row->{$column->secondary}, REPLACE_FLAGS, CHARSET)."\" /></td>\n";
                                }
                                if ((string) $column->name === 'Picture') {
                                    $table .= '<td style="text-align:center;"><img src=".' . $CI->config->config['oa_web_folder'] . '/device_images/'.htmlspecialchars($row->{$column->variable}, REPLACE_FLAGS, CHARSET).'.jpg" style="border-width:0px; height:100px" title="'.htmlspecialchars($row->{$column->secondary}, REPLACE_FLAGS, CHARSET).'" alt="'.htmlspecialchars($row->{$column->secondary}, REPLACE_FLAGS, CHARSET)."\" /></td>\n";
                                }
                                break;

                            case 'url':
                                $href = '';
                                if ((string) $column->ternary !== '') {
                                    $image = $CI->config->config['oa_web_folder'] . '/theme-tango/tango-images/16_'.htmlspecialchars($column->ternary, REPLACE_FLAGS, CHARSET).'.png';
                                } else {
                                    $image = $CI->config->config['oa_web_folder'] . '/theme-tango/tango-images/16_browser.png';
                                }

                                if (isset($row->{$column->variable})) {
                                    $href = str_replace('&', '&amp;', str_replace('&amp;', '&', $row->{$column->variable}));
                                }
                                if (((string) $column->variable === '') and ($column->link > '')) {
                                    $href = htmlspecialchars($column->link, REPLACE_FLAGS, CHARSET);
                                }
                                if ((string) $column->secondary !== '') {
                                    $href .= htmlspecialchars($row->{$column->secondary}, REPLACE_FLAGS, CHARSET);
                                }
                                $href = str_replace(' ', '%20', $href);
                                if ($href > '') {
                                    $table .= '<td style="text-align:center;"><a target="_blank" href="'.$href.'"><img src="'.$image.'" border="0" title="" alt="" /></a></td>';
                                } else {
                                    $table .= '<td></td>';
                                }
                                break;

                            default:
                                echo '<td align="'.htmlspecialchars($column->align, REPLACE_FLAGS, CHARSET).'">'.htmlspecialchars($row->{$column->variable}, REPLACE_FLAGS, CHARSET).'</td>';
                                break;
                        }
                    }
                }
                $table .= "</tr>\n";
            }
            $table .= "</tbody>\n";
            $table .= "</table>";
            $CI->response->table = $table;
            unset($table);
        }
    }

    function sort_attributes($a, $b)
    {
        return strcmp(strtolower($a->attributes->name), strtolower($b->attributes->name));
    }

/* End of file output_helper.php */
/* Location: ./system/application/helpers/output_helper.php */
}
