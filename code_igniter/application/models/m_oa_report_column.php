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
class M_oa_report_column extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_report_column($report_id = 0)
    {
        $sql = "SELECT * FROM oa_report_column WHERE report_id = ? ORDER BY column_order";
        $sql = $this->clean_sql($sql);
        $data = array($report_id );
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }

    public function delete_report($report_id)
    {
        $sql = "DELETE FROM oa_report_column WHERE report_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array($report_id);
        $query = $this->db->query($sql, $data);
        return(true);
    }

    public function import_report($input, $report_id)
    {
        foreach ($input as $detail) {
            $sql = "INSERT INTO
						oa_report_column
					SET
						report_id = ?,
						column_order = ?,
						column_name = ?,
						column_variable = ?,
						column_type = ?,
						column_link = ?,
						column_secondary = ?,
						column_ternary = ?,
						column_align = ?";
            $sql = $this->clean_sql($sql);
            $data = array(    $report_id,
                            "$detail->column_order",
                            "$detail->column_name",
                            "$detail->column_variable",
                            "$detail->column_type",
                            "$detail->column_link",
                            "$detail->column_secondary",
                            "$detail->column_ternary",
                            "$detail->column_align", );
            $query = $this->db->query($sql, $data);
        }
        return(true);
    }
}
