<?php  if (!defined('BASEPATH')) {
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
 * @version 1.12.6
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
        $CI->response = output_convert($CI->response);
        create_links();
        // if we have errors set, make sure we remove the data object / array
        if (count($CI->response->errors) > 0) {
            unset($CI->response->data);
        } else {
            unset($CI->response->errors);
        }
        switch ($CI->response->format) {
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

    function output_json()
    {
        $CI = & get_instance();
        header('Content-Type: application/json');
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        header($CI->response->header);
        if ($CI->response->debug) {
            $CI->response->user = $CI->user;
        } else {
            unset($CI->response->internal);
        }
        echo json_encode($CI->response);
    }

    function output_json_data()
    {
        $CI = & get_instance();
        header('Content-Type: application/json');
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        header($CI->response->header);
        if (isset($CI->response->data)) {
            echo json_encode($CI->response->data);
        } else if (isset($CI->response->error)) {
            echo json_encode($CI->response->error);
        }
    }

    function output_screen()
    {
        $CI = & get_instance();
        header($CI->response->header);
        $CI->response->user = $CI->user;
        if (!empty($CI->response->errors)) {
            $CI->response->include = 'v_error';
        } else {
            $CI->response->include = 'v_' . $CI->response->collection . '_' . $CI->response->action;
        }
        // if (!$CI->response->debug) {
        //     unset($CI->response->internal);
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
        header($CI->response->header);
        print_r($xml);
    }

    function output_convert($data) {
        foreach ($data as $row) {
            if (is_array($row)) {
                $row = output_convert($row);
            } elseif (is_object($row)) {
                foreach ($row as $key => $value) {
                    if (isset($key) and ($key == 'id' or $key == 'free' or $key == 'used' or $key == 'size' or $key == 'speed' or $key == 'total' or $key == 'col_order' or $key == 'access_level' or $key == 'count')) {
                        $row->$key = intval($value);
                    } elseif ((strrpos($key, '_id') === strlen($key)-3) or
                              (strrpos($key, '_count') === strlen($key)-6) or
                              (strrpos($key, '_percent') === strlen($key)-8) or
                              (strrpos($key, '_size') === strlen($key)-5)) {
                        $row->$key = intval($value);
                    } elseif (isset($key) and ($key == 'ip' or $key == 'next_hop' or $key == 'destination') and isset($value)) {
                        $temp_name = $key . '_padded';
                        $row->$temp_name = ip_address_from_db($value);
                        $row->$temp_name = ip_address_to_db($row->$temp_name);
                        $row->$key = ip_address_from_db($value);
                        if ($row->$temp_name == $row->$key) {
                            unset($row->$temp_name);
                        }
                    } elseif (isset($key) and ($key == 'man_ip_address' or $key == 'system.man_ip_address')) {
                        $row->ip_padded = $value;
                        $row->ip = ip_address_from_db($value);
                        #unset($row->man_ip_address);
                        if (empty($row->ip_padded)) { $row->ip_padded = ''; }
                        if (empty($row->ip)) { $row->ip = ''; }
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
        if ($CI->response->total > 0 and $CI->response->collection != 'charts') {
            # next link
            if ($CI->response->total > $CI->response->filtered and ($CI->response->offset + $CI->response->limit) < ($CI->response->total + $CI->response->limit)) {
                $offset = intval($CI->response->offset + $CI->response->limit);
                if (strpos($_SERVER["REQUEST_URI"], 'offset=') !== false) {
                    $CI->response->links->next = str_replace('offset='.$CI->response->offset, 'offset='.$offset, $_SERVER["REQUEST_URI"]);
                } else {
                    if (strpos($_SERVER["REQUEST_URI"], '?') !== false) {
                        $CI->response->links->next = $_SERVER["REQUEST_URI"] . '&offset=' . $offset;
                    } else {
                        $CI->response->links->next = $_SERVER["REQUEST_URI"] . '?offset=' . $offset;
                    }
                }
            }

            #prev link
            if ($CI->response->offset > 0) {
                $offset = intval($CI->response->offset - $CI->response->limit);
                if (strpos($_SERVER["REQUEST_URI"], 'offset=') !== false) {
                    $CI->response->links->prev = str_replace('offset='.$CI->response->offset, 'offset='.$offset, $_SERVER["REQUEST_URI"]);
                } else {
                    if (strpos($_SERVER["REQUEST_URI"], '?') !== false) {
                        $CI->response->links->prev = $_SERVER["REQUEST_URI"] . '&offset=' . $offset;
                    } else {
                        $CI->response->links->prev = $_SERVER["REQUEST_URI"] . '?offset=' . $offset;
                    }
                }
            }

            # first link
            $offset = 0;
            if (strpos($_SERVER["REQUEST_URI"], 'offset=') !== false) {
                $CI->response->links->first = str_replace('offset='.$CI->response->offset, '', $_SERVER["REQUEST_URI"]);
            } else {
                $CI->response->links->first = $_SERVER["REQUEST_URI"];
            }

            # last link
            $offset = intval($CI->response->total) - intval($CI->response->limit);
            if (strpos($_SERVER["REQUEST_URI"], 'offset=') !== false) {
                $CI->response->links->last = str_replace('offset='.$CI->response->offset, 'offset='.$offset, $_SERVER["REQUEST_URI"]);
            } else {
                if (strpos($_SERVER["REQUEST_URI"], '?') !== false) {
                    $CI->response->links->last = $_SERVER["REQUEST_URI"] . '&offset=' . $offset;
                } else {
                    $CI->response->links->last = $_SERVER["REQUEST_URI"] . '?offset=' . $offset;
                }
            }
        }
    }

    function output_table()
    {
        $CI = & get_instance();
        $CI->response->table = '';
        $table = '';
        if (isset($CI->response->columns)) {
            if ($CI->response->format == 'screen' and $CI->user->theme == 'bootstrap') {
                $table = '<table id="table" data-toggle="table" data-sort-name="name" data-sort-order="asc" data-pagination="true" data-search="true" data-show-columns="true" data-pagination="true" data-pagination-first-text="First" data-pagination-pre-text="Previous" data-pagination-next-text="Next" data-pagination-last-text="Last" data-page-size="' . $CI->config->config['display_limit'] . '" data-striped="true">';
                } else {
                $table = "<table>\n";
            }
            $table .= "<thead>\n";
            $table .= "<tr>\n";
            $temp_edit = 'n';
            foreach ($CI->response->columns as $column) {
                if (isset($CI->response->access_level) and $CI->response->access_level > 9 and $column->secondary == 'id' and $column->type == 'link') {
                    $temp_edit = 'y';
                }
                if ($CI->response->format == 'screen' and $CI->user->theme == 'bootstrap') {
                    if ($column->variable == 'icon' or $column->type == 'url') {
                        $table .= '<th data-sortable="true" data-field="' . $column->name . '" data-align="center" data-halign="center">' . $column->name . '</th>';
                    } else {
                        $table .= '<th data-sortable="true" data-field="' . $column->name . '">' . $column->name . '</th>';
                    }
                } else {
                    $table .= '<th>' . $column->name . '</th>';
                }
            }
            if ($temp_edit == 'y' and $CI->response->format == 'screen' and $CI->user->theme == 'bootstrap') {
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
                                if ($CI->response->format == 'screen' and $CI->user->theme == 'bootstrap' and $column->link == '/main/system_display/') {
                                    $column->link = '../' . $CI->response->group_id . '/devices/';
                                }
                                $column->link = str_replace('$group_id', $CI->response->group_id, $column->link);
                                if (strrpos($column->link, '/')+1 != strlen($column->link)) {
                                    $column->link = $column->link . '/';
                                }
                                $table .= '<td style="text-align: '.$column->align.';"><a href="'.$column->link. $row->{$column->secondary} .'">'.htmlentities($row->{$column->variable}, ENT_QUOTES, 'UTF-8')."</a></td>\n";
                                break;

                            case 'ip_address':
                                $table .= '<td style="text-align: '.htmlentities($column->align).';">';
                                $table .= '<span style="display:none;">' . $row->ip_padded . '</span>';
                                $table .= htmlentities($row->{$column->variable}, ENT_QUOTES, 'UTF-8');
                                echo "</td>\n";
                                break;

                            case 'timestamp':
                            case 'text':
                                $table .= '<td style="text-align: '.htmlentities($column->align).';">';
                                if (is_int($row->{$column->variable})) {
                                    $table .= number_format($row->{$column->variable});
                                } else {
                                    $table .= htmlentities($row->{$column->variable}, ENT_QUOTES, 'UTF-8');
                                }
                                echo "</td>\n";
                                break;

                            case 'image':
                                if ((string) $row->{$column->variable} === '') {
                                    $row->{$column->variable} = 'unknown';
                                }
                                if ((string) $column->name === 'Icon') {
                                   $table .= '<td style="text-align:center;"><img width="20" src="' . $CI->config->config['oa_web_folder'] . '/device_images/'.htmlentities(str_replace(' ', '_', $row->{$column->variable})).'.svg" style="border-width:0px;" title="'.htmlentities($row->{$column->secondary}).'" alt="'.htmlentities($row->{$column->secondary})."\" /></td>\n";
                                }
                                if ((string) $column->name === 'Picture') {
                                    $table .= '<td style="text-align:center;"><img src=".' . $CI->config->config['oa_web_folder'] . '/device_images/'.htmlentities($row->{$column->variable}).'.jpg" style="border-width:0px; height:100px" title="'.htmlentities($row->{$column->secondary}).'" alt="'.htmlentities($row->{$column->secondary})."\" /></td>\n";
                                }
                                break;

                            case 'url':
                                $href = '';
                                if ((string) $column->ternary !== '') {
                                    $image = $CI->config->config['oa_web_folder'] . '/theme-tango/tango-images/16_'.htmlentities($column->ternary).'.png';
                                } else {
                                    $image = $CI->config->config['oa_web_folder'] . '/theme-tango/tango-images/16_browser.png';
                                }

                                if (isset($row->{$column->variable})) {
                                    $href = str_replace('&', '&amp;', str_replace('&amp;', '&', $row->{$column->variable}));
                                }
                                if (((string) $column->variable === '') and ($column->link > '')) {
                                    $href = htmlentities($column->link, ENT_QUOTES, 'UTF-8');
                                }
                                if ((string) $column->secondary !== '') {
                                    $href .= htmlentities($row->{$column->secondary}, ENT_QUOTES, 'UTF-8');
                                }
                                $href = str_replace(' ', '%20', $href);
                                if ($href > '') {
                                    $table .= '<td style="text-align:center;"><a target="_blank" href="'.$href.'"><img src="'.$image.'" border="0" title="" alt="" /></a></td>';
                                } else {
                                    $table .= '<td></td>';
                                }
                                break;

                            default:
                                echo '<td align="'.htmlentities($column->align).'">'.htmlentities($row->{$column->variable}).'</td>';
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
