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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * 
 * @version 1.12.8
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
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
                output_excel($CI->response);
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
                output_report($CI->response);
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
        #print_r(json_encode($CI->response)); exit();

        $output_csv = '';
        foreach ($CI->response->data[0] as $attribute => $value) {
            $output_csv .= '"'.trim($attribute).'",';
        }
        $output_csv = mb_substr($output_csv, 0, mb_strlen($output_csv) -1);
        $output_csv .= "\n";
        foreach ($CI->response->data as $item) {
            foreach ($item as $key => $value) {
                $output_csv .= '"'.str_replace('"', '\"', $value).'",';
            }
            $output_csv = mb_substr($output_csv, 0, mb_strlen($output_csv) -1);
            $output_csv .= "\n";
        }
        echo $output_csv;
        if ((string) $CI->config->item('download_reports') === 'download') {
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment;filename="'.$CI->response->meta->heading.'.csv"');
            header('Cache-Control: max-age=0');
        }
    }

    function sql()
    {
        $CI = & get_instance();
        print_r(json_encode($CI->response));
        exit();
    }

    function output_json()
    {
        $CI = & get_instance();
        $CI->output->enable_profiler(false);
        header('Content-Type: application/json');
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
        // foreach ($CI->response->meta as $key => $value) {
        //     if ($value == '') {
        //         unset($CI->response->meta->$key);
        //     }
        //     if (count($key) == 0) {
        //         unset($CI->response->meta->$key);
        //     }
        // }
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
        if (!empty($CI->response->errors)) {
            unset($CI->response->data);
            $CI->response->include = 'v_error';
            $include = 'v_error';
        } else {
            $CI->response->meta->include = 'v_' . $CI->response->meta->collection . '_' . $CI->response->meta->action;
            $CI->response->include = $CI->response->meta->include;
            $CI->response->heading = $CI->response->meta->heading;
        }
        // if (!$CI->response->meta->debug) {
        //     unset($CI->response->meta->internal);
        // }
        $CI->load->view('v_template', $CI->response);
    }

    function output_xml()
    {
        $CI = & get_instance();
        $CI->load->helper('xml');
        $xml_generater = new XMLSerializer;
        $xml = $xml_generater->generateValidXmlFromObj($CI->response);
        header('Content-Type: text/xml');
        header($CI->response->meta->header);
        print_r($xml);
    }

    function output_convert($data) {
        $CI = & get_instance();
        $CI->load->helper('network_helper');
        foreach ($data as $row) {
            if (is_array($row)) {
                $row = output_convert($row);
            } elseif (is_object($row)) {
                if (!empty($row->attributes)) {
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
                        }
                    }
                }
            }
        }
        return($data);
    }

    function create_links()
    {
        $CI = & get_instance();
        $offset = '';
        $server_url = explode('/', $CI->config->config['base_url']);
        $url = $server_url[0].'//'.$server_url[2];
        if ($CI->response->meta->total > 0 and $CI->response->meta->collection != 'charts') {
            # next link
            if ($CI->response->meta->total > $CI->response->meta->filtered and ($CI->response->meta->offset + $CI->response->meta->limit) < ($CI->response->meta->total + $CI->response->meta->limit)) {
                $offset = intval($CI->response->meta->offset + $CI->response->meta->limit);
                if (strpos($_SERVER["REQUEST_URI"], 'offset=') !== false) {
                    $CI->response->links->next = str_replace('offset='.$CI->response->meta->offset, 'offset='.$offset, $_SERVER["REQUEST_URI"]);
                } else {
                    if (strpos($_SERVER["REQUEST_URI"], '?') !== false) {
                        $CI->response->links->next = $url . $_SERVER["REQUEST_URI"] . '&offset=' . $offset;
                    } else {
                        $CI->response->links->next = $url . $_SERVER["REQUEST_URI"] . '?offset=' . $offset;
                    }
                }
            }

            #prev link
            if ($CI->response->meta->offset > 0) {
                $offset = intval($CI->response->meta->offset - $CI->response->meta->limit);
                if (strpos($_SERVER["REQUEST_URI"], 'offset=') !== false) {
                    $CI->response->links->prev = str_replace('offset='.$CI->response->meta->offset, 'offset='.$offset, $_SERVER["REQUEST_URI"]);
                } else {
                    if (strpos($_SERVER["REQUEST_URI"], '?') !== false) {
                        $CI->response->links->prev = $url . $_SERVER["REQUEST_URI"] . '&offset=' . $offset;
                    } else {
                        $CI->response->links->prev = $url . $_SERVER["REQUEST_URI"] . '?offset=' . $offset;
                    }
                }
            }

            # first link
            $offset = 0;
            if (strpos($_SERVER["REQUEST_URI"], 'offset=') !== false) {
                $CI->response->links->first = $url . str_replace('offset='.$CI->response->meta->offset, '', $_SERVER["REQUEST_URI"]);
            } else {
                $CI->response->links->first = $url . $_SERVER["REQUEST_URI"];
            }

            # last link
            if ($CI->response->meta->total > $CI->response->meta->limit) {
                $offset = intval($CI->response->meta->total) - intval($CI->response->meta->limit);
                if (strpos($_SERVER["REQUEST_URI"], 'offset=') !== false) {
                    $CI->response->links->last = str_replace('offset='.$CI->response->meta->offset, 'offset='.$offset, $_SERVER["REQUEST_URI"]);
                } else {
                    if (strpos($_SERVER["REQUEST_URI"], '?') !== false) {
                        $CI->response->links->last = $url . $_SERVER["REQUEST_URI"] . '&offset=' . $offset;
                    } else {
                        $CI->response->links->last = $url . $_SERVER["REQUEST_URI"] . '?offset=' . $offset;
                    }
                }
            } else {
                $CI->response->links->last = $url . $_SERVER["REQUEST_URI"];
            }
        }
    }

    function output_table()
    {
        $CI = & get_instance();
        if (!defined('CHARSET')) {
            define('CHARSET', 'UTF-8');
            define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);
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

/* End of file output_helper.php */
/* Location: ./system/application/helpers/output_helper.php */
}
