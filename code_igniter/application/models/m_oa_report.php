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
class M_oa_report extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function list_reports_in_menu()
    {
        $sql = "SELECT report_id, report_name, '' as report_url, report_description FROM oa_report WHERE report_display_in_menu = 'y' and report_view_file != 'v_help_oae' ORDER BY report_name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        return($query->result());
    }

    public function list_reports()
    {
        $sql = "SELECT report_id, report_name FROM oa_report WHERE report_view_file != 'v_help_oae' ORDER BY report_name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        return($query->result());
    }

    public function import_report($input)
    {
        $sql = "INSERT INTO
					oa_report
				SET
                    report_name = ?,
                    report_description = ?,
					report_sql = ?,
					report_display_sql = ?,
					report_view_file = ?,
					report_view_contents = ?,
					report_processing = ?,
					report_sort_column = ?,
					report_display_in_menu = ?";
        $sql = $this->clean_sql($sql);
        $data = array(    "$input->report_name",
                        "$input->report_description",
                        "$input->report_sql",
                        "$input->report_display_sql",
                        "$input->report_view_file",
                        "$input->report_view_contents",
                        "$input->report_processing",
                        "$input->report_sort_column",
                        "$input->report_display_in_menu", );
        $query = $this->db->query($sql, $data);
        return($this->db->insert_id());
    }

    public function delete_report($report_id)
    {
        $sql = "DELETE FROM oa_report WHERE report_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array($report_id);
        $query = $this->db->query($sql, $data);
        return(true);
    }

    public function get_report_details($report_id)
    {
        $sql = "SELECT * FROM oa_report WHERE report_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($report_id);
        $query = $this->db->query($sql, $data);
        return($query->result());
    }

    public function get_report_name($report_id)
    {
        $sql = "SELECT report_name FROM oa_report WHERE report_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($report_id);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $key) {
            $report_name = $key->report_name;
        }
        return($report_name);
    }

    public function get_report_id($report_name)
    {
        $sql = "SELECT report_id FROM oa_report WHERE report_name = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$report_name");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $key) {
            $report_id = $key->report_id;
        }
        if (isset($report_id)) {
            return($report_id);
        } else {
            return;
        }
    }

    public function get_report_view($report_id)
    {
        $sql = "SELECT report_view_file FROM oa_report WHERE report_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($report_id);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $key) {
            $report_view_file = $key->report_view_file;
        }
        return($report_view_file);
    }

    public function get_report_sort_column($report_id)
    {
        $sql = "SELECT report_sort_column FROM oa_report WHERE report_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($report_id);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $key) {
            $report_sort_column = $key->report_sort_column;
        }
        return($report_sort_column);
    }

    public function get_report($data_array)
    {
        if (!isset($data_array['report_id']) or !isset($data_array['group_id'])) {
            return;
        } else {
            $report_id = $data_array['report_id'];
            $group_id = $data_array['group_id'];
        }

        if (isset($data_array['limit']) and is_numeric($data_array['limit'])) {
            $limit = (int)$data_array['limit'];
        } else {
            $limit = 10000000;
        }

        if (isset($data_array['offset']) and is_numeric($data_array['offset'])) {
            $offset = (int)$data_array['offset'];
        } else {
            $offset = 0;
        }

        if (isset($data_array['first_attribute'])) {
            $first_attribute = $data_array['first_attribute'];
        } else {
            $first_attribute = '';
        }

        if (isset($data_array['second_attribute'])) {
            $second_attribute = $data_array['second_attribute'];
        } else {
            $second_attribute = '';
        }

        if (isset($data_array['third_attribute'])) {
            $third_attribute = $data_array['third_attribute'];
        } else {
            $third_attribute = '';
        }

        if (isset($data_array['forth_attribute'])) {
            $forth_attribute = $data_array['forth_attribute'];
        } else {
            $forth_attribute = '';
        }

        $sql = "SELECT report_sql FROM oa_report WHERE report_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($report_id);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $key) {
            $sql = $key->report_sql;
        }
        $data = array($group_id);
        $sql_group = 'SET @group = ?';
        $sql_group = $this->clean_sql($sql_group);
        $query = $this->db->query($sql_group, $data);

        if (stripos($sql, '@limit') !== false) {
            if ($offset != 0) {
                $sql = str_ireplace('@limit', $offset . ',' . $limit, $sql);
            } else {
                $sql = str_ireplace('@limit', $limit, $sql);
            }
        }
        $sql = $this->clean_sql($sql);
        $data = array($first_attribute, $second_attribute, $third_attribute, $forth_attribute);
        $query = $this->db->query($sql, $data);

        return($query->result());
    }

    public function activate_file($report_name)
    {
        $report_file = '';
        $report_definition = '';
        $paths = array(BASEPATH.'../application/controllers/reports', '/usr/local/omk/reports', '/usr/local/opmojo/reports', 'c:\\omk\\reports');
        foreach ($paths as $path) {
            if (is_dir($path)) {
                if ($handle = opendir($path)) {
                    while (false !== ($file = readdir($handle))) {
                        if (mb_strpos($file, ".xml") !== false) {
                            $file_handle = fopen($path.'/'.$file, "rb");
                            $contents = fread($file_handle, filesize($path.'/'.$file));
                            try {
                                $xml = new SimpleXMLElement($contents);
                            } catch (Exception $error) {
                                $errors = libxml_get_errors();
                                # TODO - log something here
                                // echo "Invalid XML.<br />\n<pre>\n";
                                // print_r($errors);
                                // // not a valid XML string
                                // echo'Invalid XML input for: '.$file;
                                // echo "<pre>\n";
                                // print_r($xml);
                                // exit;
                            }
                            if ($xml) {
                                if (strtolower($report_name) == strtolower($xml->details->report_name)) {
                                    $report_file = $file;
                                    $report_definition = $xml;
                                    break;
                                }
                                unset($xml);
                            }
                            fclose($file_handle);
                        }
                    }
                    closedir($handle);
                }
                unset($handle);
                if ($report_file != '') {
                    break;
                }
            }
        }

        if ($report_file == '') {
            # TODO - log something here
            return;
        }
        $sql = "INSERT INTO oa_report SET report_name = ?, report_description = ?, report_sql = ?, report_display_sql = ?, report_view_file = ?, report_view_contents = ?, report_processing = ?, report_sort_column = ?, report_display_in_menu = ?";
        $sql = $this->clean_sql($sql);
        $data = array((string)$report_definition->details->report_name, (string)$report_definition->details->report_description, 
                (string)$report_definition->details->report_sql, (string)$report_definition->details->report_display_sql,
                (string)$report_definition->details->report_view_file, (string)$report_definition->details->report_view_contents,
                (string)$report_definition->details->report_processing, (string)$report_definition->details->report_sort_column,
                (string)$report_definition->details->report_display_in_menu, );
        $query = $this->db->query($sql, $data);
         #echo "<pre>\n"; print_r($this->db->last_query()); echo "</pre>\n";

        $report_id = $this->db->insert_id();
        foreach ($report_definition->columns->column as $column) {
            $sql = "INSERT INTO oa_report_column SET report_id = ?, column_order = ?, column_name = ?, column_variable = ?, column_type = ?, column_link = ?, column_secondary = ?,  column_ternary = ?, column_align = ?";
            $sql = $this->clean_sql($sql);
            $data = array($report_id, "$column->column_order", "$column->column_name", "$column->column_variable",
                            "$column->column_type", "$column->column_link", "$column->column_secondary",
                            "$column->column_ternary", "$column->column_align", );
            $query = $this->db->query($sql, $data);
        }
        return;
    }









}
