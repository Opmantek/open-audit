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
 * @version 1.8.2
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
        $sql = "SELECT report_id, report_name, '' as report_url FROM oa_report WHERE report_display_in_menu = 'y' and report_view_file != 'v_help_oae' ORDER BY report_name";
        $query = $this->db->query($sql);

        return($query->result());
    }

    public function list_reports()
    {
        $sql = "SELECT report_id, report_name FROM oa_report WHERE report_view_file != 'v_help_oae' ORDER BY report_name";
        $query = $this->db->query($sql);

        return($query->result());
    }

    public function import_report($input)
    {
        $sql = "INSERT INTO
					oa_report
				SET
					report_name = ?,
					report_sql = ?,
					report_display_sql = ?,
					report_view_file = ?,
					report_view_contents = ?,
					report_processing = ?,
					report_sort_column = ?,
					report_display_in_menu = ?";
        $sql = $this->clean_sql($sql);
        $data = array(    "$input->report_name",
                        "$input->report_sql",
                        "$input->report_display_sql",
                        "$input->report_view_file",
                        "$input->report_view_contents",
                        "$input->report_processing",
                        "$input->report_sort_column",
                        "$input->report_display_in_menu", );
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);

        return($this->db->insert_id());
    }

    public function delete_report($report_id)
    {
        $sql = "DELETE FROM oa_report WHERE report_id = ?";
        $data = array($report_id);
        $query = $this->db->query($sql, $data);

        return(true);
    }

    public function get_report_details($report_id)
    {
        $sql = "SELECT * FROM oa_report WHERE report_id = ? LIMIT 1";
        $data = array($report_id);
        $query = $this->db->query($sql, $data);

        return($query->result());
    }

    public function get_report_name($report_id)
    {
        $sql = "SELECT report_name FROM oa_report WHERE report_id = ? LIMIT 1";
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
        $data = array($report_id);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $key) {
            $report_sort_column = $key->report_sort_column;
        }

        return($report_sort_column);
    }

    public function get_report($report_id, $group_id, $first_attribute = '', $second_attribute = '')
    {
        $sql = "SELECT report_sql FROM oa_report WHERE report_id = ? LIMIT 1";
        $data = array($report_id);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $key) {
            $sql = $key->report_sql;
        }
        $data = array($group_id);
        $query = $this->db->query('SET @group = ?', $data);

        $data = array($first_attribute, $second_attribute);
        $query = $this->db->query($sql, $data);

        return($query->result());
    }
}
