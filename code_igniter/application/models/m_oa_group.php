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
class M_oa_group extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_group_access($group_id = '1', $user_id = '0')
    {
        if ($group_id == '0') {
            $group_id = '1';
        }
        $sql = "SELECT group_user_access_level FROM oa_group_user WHERE user_id = ? AND group_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$user_id", "$group_id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();

        return $row->group_user_access_level;
    }

    public function get_group_name($group_id)
    {
        $group_id = intval($group_id);
        $sql = "SELECT group_name from oa_group WHERE group_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$group_id");
        $query = $this->db->query($sql, $data);
        $row = @$query->row();
        $group_name = @$row->group_name;
        if ($group_name != '') {
            return $group_name;
        } else {
            return '';
        }
    }

    public function get_group($id = '0')
    {
        if ($id == '0') {
            return '0';
        }
        $sql = "SELECT oa_group.*, count(oa_group_sys.system_id) as total FROM oa_group LEFT JOIN oa_group_sys ON (oa_group.group_id = oa_group_sys.group_id) WHERE oa_group.group_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function get_group_id($group_name)
    {
        $sql = "SELECT group_id FROM oa_group WHERE group_name = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$group_name");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $key) {
            $group_id = $key->group_id;
        }
        if (isset($group_id)) {
            return($group_id);
        } else {
            return;
        }
    }

    public function get_group_dynamic_select($group_id)
    {
        $group_id = intval($group_id);
        $sql = "SELECT group_dynamic_select from oa_group WHERE group_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$group_id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        $group_dynamic_select = $row->group_dynamic_select;
        if ($group_dynamic_select != '') {
            return $group_dynamic_select;
        } else {
            return '';
        }
    }

    public function update_system_groups($details, $exclude_type = '')
    {
        if (!isset($details->type)) {
            $details->type = '';
        }
        if (!isset($details->man_type) or $details->man_type == '') {
            $details->man_type = $details->type;
        }
        if ($exclude_type != '') {
            $sql = "DELETE FROM oa_group_sys WHERE oa_group_sys.system_id = ? AND oa_group_sys.group_id IN (SELECT oa_group.group_id FROM oa_group WHERE oa_group.group_category != ?)";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id", "$exclude_type");
        } else {
            $sql = "DELETE FROM oa_group_sys WHERE oa_group_sys.system_id = ?";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id");
        }
        $query = $this->db->query($sql, $data);
        if ($exclude_type != '') {
            $sql = "SELECT oa_group.group_id, oa_group.group_name, oa_group.group_dynamic_select FROM oa_group WHERE oa_group.group_dynamic_select > '' AND oa_group.group_category != ?";
            $sql = $this->clean_sql($sql);
            $data = array("$exclude_type");
            $query = $this->db->query($sql, $data);
        } else {
            $sql = "SELECT oa_group.group_id, oa_group.group_name, oa_group.group_dynamic_select FROM oa_group WHERE oa_group.group_dynamic_select > ''";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
        }
        foreach ($query->result() as $myrow) {
            $sql_select = "SELECT system_id FROM system WHERE system_id = ? AND system_id in ( ".$myrow->group_dynamic_select." )";
            $data_select = array("$details->system_id");
            $sql_select = $this->clean_sql($sql_select);
            $query_select = $this->db->query($sql_select, $data_select);
            if ($query_select->num_rows() > 0) {
                // insert a row because the system matches the select criteria
                $sql_insert = "INSERT INTO oa_group_sys (system_id, group_id) VALUES (?, ?)";
                $sql_insert = $this->clean_sql($sql_insert);
                $data_insert = array("$details->system_id", "$myrow->group_id");
                $query_insert = $this->db->query($sql_insert, $data_insert);
            }
        }
    }

    public function update_groups()
    {
        $sql = "DELETE FROM oa_group_sys";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql) or die("Error with delete from oa_group_sys");
        $sql = "ALTER TABLE oa_group_sys AUTO_INCREMENT = 1";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql) or die("Error with auto increment reset from oa_group_sys");
        $sql = "SELECT group_id, group_dynamic_select, group_name FROM oa_group";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        foreach ($query->result() as $myrow) {
            $sql_select = $myrow->group_dynamic_select;
            # update the group with all systems that match
            $sql_insert = substr_replace($sql_select, "INSERT INTO oa_group_sys (system_id, group_id) ", 0, 0);
            $sql_insert = str_ireplace("SELECT DISTINCT(system.system_id)", "SELECT DISTINCT(system.system_id), '".$myrow->group_id."' ", $sql_insert);
            $sql_insert = $this->clean_sql($sql_insert);
            $insert = $this->db->query($sql_insert);
        }
    }

    public function update_specific_group($group_id)
    {
        # get the group select
        $sql = "SELECT group_dynamic_select FROM oa_group WHERE group_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($group_id);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $sql_select = $myrow->group_dynamic_select;
        }
        # remove the existing systems in this group
        $sql_delete = "DELETE FROM oa_group_sys WHERE group_id = ?";
        $sql_delete = $this->clean_sql($sql_delete);
        $data = array($group_id);
        $delete = $this->db->query($sql_delete, $data) or die("Error with delete from oa_group_sys");
        # update the group with all systems that match
        $sql_insert = substr_replace($sql_select, "INSERT INTO oa_group_sys (system_id, group_id) ", 0, 0);
        #$sql_insert = str_ireplace("SELECT DISTINCT(system.id)", "SELECT DISTINCT(system.id), '".$group_id."', 'system'", $sql_insert);
        $sql_insert = str_ireplace("SELECT DISTINCT(system.system_id)", "SELECT DISTINCT(system.system_id), '".$group_id."' ", $sql_insert);
        $sql_insert = $this->clean_sql($sql_insert);
        $insert = $this->db->query($sql_insert);
    }

    public function get_tables()
    {
        $result = $this->db->list_tables();

        return ($result);
    }

    public function get_fields($table)
    {
        $fields_in_table = $this->db->list_fields($table);
        $result = array();
        foreach ($fields_in_table as $field_in_table) {
            if (mb_strpos($field_in_table, '_id') === false AND mb_strpos($field_in_table, 'timestamp') === false AND
                $field_in_table != 'id' AND $field_in_table != 'last_seen' AND $field_in_table != 'first_seen' AND $field_in_table != 'current') {
                $result[] = $field_in_table;
            }
        }

        return ($result);
    }

    public function get_field_values($table, $field)
    {
        $sql = "SELECT DISTINCT($field) AS value FROM `$table` ORDER BY value";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function update_group($details)
    {
        // TODO: need some data validation in here
        $sql = "
			UPDATE oa_group SET
				group_name = ?,
				group_padded_name = ?,
				group_dynamic_select = ?,
				group_parent = ?,
				group_description = ?,
				group_category = ?,
				group_display_sql = ?,
				group_icon = ?
			WHERE
				group_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$details->group_name",
                    "$details->group_padded_name",
                    "$details->group_dynamic_select",
                    "$details->group_parent",
                    "$details->group_description",
                    "$details->group_category",
                    "$details->group_display_sql",
                    "$details->group_icon",
                    "$details->group_id", );
        $query = $this->db->query($sql, $data);

        return;
    }

    public function insert_group($details)
    {
        // TODO: need some data validation in here
        $sql = "INSERT INTO oa_group (group_id,
					group_name,
					group_padded_name,
					group_description,
					group_icon,
					group_category,
					group_dynamic_select,
					group_parent,
					group_display_sql )
					VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ? )";
        $sql = $this->clean_sql($sql);
        $data = array("$details->group_name",
                    "$details->group_padded_name",
                    "$details->group_description",
                    "$details->group_icon",
                    "$details->group_category",
                    "$details->group_dynamic_select",
                    "$details->group_parent",
                    "$details->group_display_sql", );
        $result = $this->db->query($sql, $data);
        $return = $this->db->insert_id();
        // We need to insert an entry into oa_group_user for any Admin level user
        // TODO: maybe we should insert '0' for all non-admin users ?
        $sql = "INSERT INTO oa_group_user (SELECT NULL, id, ?, '10' FROM oa_user WHERE admin = 'y')";
        $data = array( $this->db->insert_id() );
        $result = $this->db->query($sql, $data);
        if (!is_numeric($return)) {
            $return = "An eror occured";
        }

        return($return);
    }

    public function get_tags()
    {
        $sql = "SELECT
					oa_group.group_id,
					oa_group.group_name,
					oa_group.group_description,
					count(oa_group_sys.system_id) AS total
				FROM
					oa_group
				LEFT JOIN
					oa_group_sys
				ON
					oa_group.group_id = oa_group_sys.group_id
				WHERE
					oa_group_sys.group_id < '999'
				GROUP BY
					oa_group.group_id";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function get_all_groups()
    {
        $sql = "SELECT
					oa_group.group_id,
					oa_group.group_name,
					oa_group.group_padded_name,
					oa_group.group_icon,
					oa_group.group_description,
					oa_group.group_category,
					count(oa_group_sys.system_id) AS total
				FROM
					oa_group
				LEFT JOIN
					oa_group_sys
				ON
					oa_group.group_id = oa_group_sys.group_id
				GROUP BY
					oa_group.group_id
				ORDER BY
					oa_group.group_id";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function count_all_groups()
    {
        $sql = "SELECT count(oa_group.group_id) AS total FROM oa_group LIMIT 1";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        $row = $query->row();

        return ($row->total);
    }

    public function get_network_group_subnet($subnet = '30')
    {
        $sql = "SELECT group_id FROM oa_group WHERE group_category = 'network' AND group_name LIKE '% / " . intval($subnet) . "'";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        // echo $this->db->last_query();
        // echo "<br /><br />\n";
        // echo "Rows: " . $query->num_rows();
        // $result = $query->result();
        // echo "Rows: " . $query->num_rows();
        // echo "Count: " . count($result);
        // exit();
        return ($query->num_rows());
    }

    public function delete_network_group_subnet($subnet = '30')
    {
        $sql = "DELETE FROM oa_group_user WHERE group_id IN (SELECT group_id FROM oa_group WHERE group_category = 'network' AND group_name LIKE '% / " . intval($subnet) . "')";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        $sql = "DELETE FROM oa_group_sys WHERE group_id IN (SELECT group_id FROM oa_group WHERE group_category = 'network' AND group_name LIKE '% / " . intval($subnet) . "')";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        $sql = "DELETE FROM oa_group_column WHERE group_id IN (SELECT group_id FROM oa_group WHERE group_category = 'network' AND group_name LIKE '% / " . intval($subnet) . "')";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        $sql = "DELETE FROM oa_group WHERE group_category = 'network' AND group_name LIKE '% / " . intval($subnet) . "'";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        return($this->db->affected_rows());
    }

    public function get_network_group_count_zero()
    {
        $sql = "SELECT oa_group.group_id FROM oa_group LEFT JOIN oa_group_sys ON (oa_group.group_id = oa_group_sys.group_id) WHERE oa_group.group_category = 'network' GROUP BY oa_group.group_id HAVING COUNT(oa_group_sys.system_id) = 0";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        return ($query->num_rows());
    }

    public function delete_network_group_count_zero()
    {
        $sql = "SELECT oa_group.group_id FROM oa_group LEFT JOIN oa_group_sys ON (oa_group.group_id = oa_group_sys.group_id) WHERE oa_group.group_category = 'network' GROUP BY oa_group.group_id HAVING COUNT(oa_group_sys.system_id) = 0";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        $count = 0;
        foreach ($result as $row) {
            $sql = "DELETE FROM oa_group_user WHERE group_id = ?";
            $data = array ($row->group_id);
            $query = $this->db->query($sql, $data);

            $sql = "DELETE FROM oa_group_sys WHERE group_id = ?";
            $data = array ($row->group_id);
            $query = $this->db->query($sql, $data);

            $sql = "DELETE FROM oa_group_column WHERE group_id = ?";
            $data = array ($row->group_id);
            $query = $this->db->query($sql, $data);

            $sql = "DELETE FROM oa_group WHERE group_id = ?";
            $data = array ($row->group_id);
            $query = $this->db->query($sql, $data);
            $count = $count + $this->db->affected_rows();
        }

        return($count);
    }


    public function get_user_groups($user_id = '0')
    {
        $sql = "SELECT 
					oa_group.group_id,
					oa_group.group_name,
					oa_group.group_padded_name,
					oa_group.group_icon,
					oa_group.group_description,
					oa_group.group_category,
					count(oa_group_sys.system_id) AS total
				FROM
					oa_group,
					oa_group_user,
					oa_group_sys
				WHERE
					oa_group.group_id = oa_group_user.group_id AND
					oa_group_user.user_id = ? AND
					oa_group_user.group_user_access_level > 0 AND
					oa_group.group_id = oa_group_sys.group_id
				GROUP BY
					oa_group.group_id
				ORDER BY
					oa_group.group_category,
					oa_group.group_padded_name";
        $sql = $this->clean_sql($sql);
        $data = array("$user_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function get_all_user_groups($id)
    {
        // get ALL groups, even those with no entry in the oa_group_user table.
        // assign a permission level to each group. Use '0' for those without entries in oa_group_user
        $sql = "SELECT  
					oa_group.group_id,
					oa_group.group_name,
					oa_group.group_padded_name,
					oa_group.group_icon,
					oa_group.group_description,
					oa_group.group_category,
					count(oa_group_sys.system_id) AS total
				FROM
					oa_group
				LEFT JOIN
					oa_group_sys
				ON
					oa_group.group_id = oa_group_sys.group_id
				GROUP BY
					oa_group.group_id
				ORDER BY
					oa_group.group_name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $group = $query->result();
        // get user access levels
        $sql = "SELECT 
					oa_group.group_id,
					oa_group_user.group_user_access_level
				FROM
					oa_group,
					oa_group_user
				WHERE
					user_id = ? AND
					oa_group.group_id = oa_group_user.group_id
				GROUP BY
					oa_group.group_id";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        $user = $query->result();
        // combine the two data sets to get the user access level
        foreach ($group as $key_group) {
            //$key_group->access_level = 0;
            foreach ($user as $key_user) {
                if ($key_user->group_id == $key_group->group_id) {
                    $key_group->access_level = $key_user->group_user_access_level;
                }
            }
        }

        return($group);
    }

    public function delete_group($id)
    {
        $sql = "DELETE FROM oa_group_user WHERE group_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);

        $sql = "DELETE FROM oa_group_sys WHERE group_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);

        $sql = "DELETE FROM oa_group_column WHERE group_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);

        $sql = "DELETE FROM oa_group WHERE group_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
    }

    public function import_group($input)
    {
        $sql = "INSERT INTO 
					oa_group
				SET
					group_name = ?,
					group_padded_name = ?,
					group_dynamic_select = ?,
					group_parent = ?,
					group_description = ?,
					group_category = ?,
					group_display_sql = ?,
					group_icon = ?";
        $sql = $this->clean_sql($sql);
        $data = array(    "$input->group_name",
                        "$input->group_padded_name",
                        "$input->group_dynamic_select",
                        "$input->group_parent",
                        "$input->group_description",
                        "$input->group_category",
                        "$input->group_display_sql",
                        "$input->group_icon", );
        $query = $this->db->query($sql, $data);
        $group_id = $this->db->insert_id();
        // We need to insert an entry into oa_group_user for any Admin level user
        $sql = "INSERT INTO oa_group_user (SELECT NULL, id, ?, '10' FROM oa_user WHERE admin = 'y')";
        $data = array("$group_id");
        $result = $this->db->query($sql, $data);

        return($group_id);
    }

    public function edit_user_groups($details)
    {
        # remove the existing user->group permissions
        $sql = "DELETE FROM oa_group_user WHERE user_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$details->id");
        $query = $this->db->query($sql, $data);
        # assign new user-> group permissions
        foreach ($details as $detail => $key) {
            $pos = mb_strpos($detail, "group_id_");
            if (($pos !== false) and ($detail != "group_id_0")) {
                $group_id_split = explode("_", $detail);
                $sql = "INSERT INTO oa_group_user (group_user_id, user_id, group_id, group_user_access_level) VALUES (NULL, ?, ?, ?)";
                $data = array("$details->id", $group_id_split[2], "$key");
                $query = $this->db->query($sql, $data);
            }
        }
    }

    public function activate_file($group_name)
    {
        $group_file = '';
        $group_definition = '';
        $paths = array(BASEPATH.'../application/controllers/groups');
        foreach ($paths as $path) {
            if (is_dir($path)) {
                if ($handle = opendir($path)) {
                    while (false !== ($file = readdir($handle))) {
                        if (mb_strpos($file, ".xml") !== false) {
                            if ($file_handle = fopen($path.'/'.$file, "rb")) {
                                if ($contents = fread($file_handle, filesize($path.'/'.$file))) {
                                    try {
                                        $xml = new SimpleXMLElement($contents);
                                    } catch (Exception $error) {
                                        $errors = libxml_get_errors();
                                        # TODO - log something here (see m_oa_report->activate_fle for details)
                                    }
                                    if (isset($xml)) {
                                        if (strtolower($group_name) == strtolower($xml->details->group_name)) {
                                            $group_file = $file;
                                            $group_definition = $xml;
                                            break;
                                        }
                                        unset($xml);
                                    }
                                }
                                fclose($file_handle);
                            }
                        }
                    }
                    closedir($handle);
                }
                unset($handle);
                if ($group_file != '') {
                    break;
                }
            }
        }

        if ($group_file == '') {
            # TODO - log something here
            return;
        }
        // insert the group details into oa_group
        $sql = "INSERT INTO oa_group SET group_name = ?, group_padded_name = ?, group_dynamic_select = ?,
                    group_parent = ?, group_description = ?, group_category = ?, group_display_sql = ?, group_icon = ?";
        $sql = $this->clean_sql($sql);
        $data = array(  (string)$group_definition->details->group_name,
                        (string)$group_definition->details->group_padded_name,
                        (string)$group_definition->details->group_dynamic_select,
                        (string)$group_definition->details->group_parent,
                        (string)$group_definition->details->group_description,
                        (string)$group_definition->details->group_category,
                        (string)$group_definition->details->group_display_sql,
                        (string)$group_definition->details->group_icon);
        $query = $this->db->query($sql, $data);
        $group_id = $this->db->insert_id();

        // insert an entry into oa_group_user for any Admin level user
        $sql = "INSERT INTO oa_group_user (SELECT NULL, id, ?, '10' FROM oa_user WHERE admin = 'y')";
        $data = array("$group_id");
        $result = $this->db->query($sql, $data);

        // insert the group columns
        foreach ($group_definition->columns->column as $column) {
            $sql = "INSERT INTO oa_group_column SET group_id = ?, column_order = ?, column_name = ?, column_variable = ?, column_type = ?, column_link = ?, column_secondary = ?, column_ternary = ?, column_align = ?";
            $sql = $this->clean_sql($sql);
            $data = array( $group_id,
                (string)$column->column_order,
                (string)$column->column_name,
                (string)$column->column_variable,
                (string)$column->column_type,
                (string)$column->column_link,
                (string)$column->column_secondary,
                (string)$column->column_ternary,
                (string)$column->column_align);
            $query = $this->db->query($sql, $data);
        }
        // update the group members
        # get the group select
        $sql_select = $group_definition->details->group_dynamic_select;
        # remove the existing systems in this group
        $sql = "DELETE FROM oa_group_sys WHERE group_id = ?";
        $data = array($group_id);
        $query = $this->db->query($sql, $data);
        # update the group with all systems that match
        $sql = substr_replace($sql_select, "INSERT INTO oa_group_sys (system_id, group_id) ", 0, 0);
        $sql = str_ireplace("SELECT DISTINCT(system.system_id)", "SELECT DISTINCT(system.system_id), '".$group_id."' ", $sql);
        $query = $this->db->query($sql);
        return;
    }

}
