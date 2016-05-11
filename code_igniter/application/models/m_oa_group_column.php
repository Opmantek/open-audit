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
class M_oa_group_column extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_group_column($group_id = 0)
    {
        $sql = "SELECT * FROM oa_group_column WHERE group_id = ? ORDER BY column_order";
        $sql = $this->clean_sql($sql);
        $data = array($group_id );
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if ($query->num_rows() == '0') {
            // return the 'standard' rows
            $sql = "SELECT * FROM oa_group_column WHERE group_id = '1' ORDER BY column_order";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $result = $query->result();
        }

        return ($result);
    }

    public function get_group_column_new($group_id = 0)
    {
        $sql = "SELECT * FROM oa_group_column WHERE group_id = ? AND column_name <> 'Tags' ORDER BY column_order";
        $sql = $this->clean_sql($sql);
        $data = array($group_id );
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if ($query->num_rows() == '0') {
            // return the 'standard' rows
            $sql = "SELECT * FROM oa_group_column WHERE group_id = '1' AND column_name <> 'Tags' ORDER BY column_order";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $result = $query->result();
        }

        return ($result);
    }

    public function insert_group_column($details)
    {
        for ($i = 1; $i <= 8; $i++) {
            # nasty hack - only accounts for 8 columns
            # there are only 8 columns displayed on the web form
            # TODO: fix this.
            $start = explode(' ', microtime());
            $column_order = "column_order_".$i;
            if ($details->$column_order > '0') {
                $column_name = "column_name_".$i;
                $column_variable = "column_variable_".$i;
                $column_type = "column_type_".$i;
                $column_link = "column_link_".$i;
                $column_secondary = "column_secondary_".$i;
                $column_ternary = "column_ternary_".$i;
                $column_align = "column_align_".$i;
                $sql = "INSERT INTO
							oa_group_column
						SET
							group_id = ?,
							column_order = ?,
							column_name = ?,
							column_variable = ?,
							column_type = ?,
							column_link = ?,
							column_secondary = ?,
							column_ternary = ?,
							column_align = ?";
                $sql = $this->clean_sql($sql);
                $data = array(    $details->group_id,
                                $details->$column_order,
                                $details->$column_name,
                                $details->$column_variable,
                                $details->$column_type,
                                $details->$column_link,
                                $details->$column_secondary,
                                $details->$column_ternary,
                                $details->$column_align, );
                $query = $this->db->query($sql, $data);
                $end = explode(' ', microtime());
            }
        }
    }

    public function import_group($input, $group_id)
    {
        foreach ($input as $detail) {
            $sql = "INSERT INTO
						oa_group_column
					SET
						group_id = ?,
						column_order = ?,
						column_name = ?,
						column_variable = ?,
						column_type = ?,
						column_link = ?,
						column_secondary = ?,
						column_ternary = ?,
						column_align = ?";
            $sql = $this->clean_sql($sql);
            $data = array(    $group_id,
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
