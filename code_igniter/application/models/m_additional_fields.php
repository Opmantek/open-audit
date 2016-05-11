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
class M_additional_fields extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Read the names of all additional fields.
     *
     * @access	public
     *
     * @return array
     */
    public function get_additional_fields_names()
    {
        $sql = "SELECT lower(field_name), field_name, field_id FROM sys_man_additional_fields ORDER BY field_name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    /**
     * Delete the field.
     *
     * @param string $field_id
     * @access	public
     *
     * @return array
     */
    public function delete_field($field_id)
    {
        $sql = "DELETE FROM sys_man_additional_fields WHERE field_id = ? ";
        $sql = $this->clean_sql($sql);
        $data = array("$field_id");
        $query = $this->db->query($sql, $data);

        return;
    }

    /**
     * Check the name of the edited field does not already exist.
     *
     * @access	public
     *
     * @return array
     */
    public function check_additional_fields_name($field_name, $field_id)
    {
        $sql = "SELECT field_id FROM sys_man_additional_fields WHERE field_name = ? AND field_id <> ? ";
        $sql = $this->clean_sql($sql);
        $data = array("$field_name", "$field_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    /**
     * Edit an existing additional field.
     *
     * @access	public
     *
     * @param	details -> field data
     *
     * @return array
     */
    public function edit_additional_field($details)
    {
        $sql = "UPDATE sys_man_additional_fields SET field_name = ?, field_type = ?, field_placement = ?, field_values = ?, group_id = ? WHERE field_id = ?";
        $data = array("$details->field_name", "$details->field_type", "$details->field_placement", "$details->field_values", "$details->group_id", "$details->field_id");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);

        return;
    }

    /**
     * Add an additional field.
     *
     * @access	public
     *
     * @param	details -> field data
     *
     * @return array
     */
    public function add_additional_field($details)
    {
        $sql = "INSERT INTO sys_man_additional_fields (field_name, field_type, field_placement, group_id, field_values) VALUES (?, ?, ?, ?, ?)";
        $sql = $this->clean_sql($sql);
        $data = array("$details->field_name", "$details->field_type", "$details->field_placement", "$details->group_id", "$details->field_values");
        $query = $this->db->query($sql, $data);

        return;
    }

    /**
     * Read the id additional field.
     *
     * @access	public
     *
     * @param	field_name
     *
     * @return array
     */
    public function get_additional_field_id($field_name)
    {
        $sql = "SELECT field_id FROM sys_man_additional_fields WHERE field_name = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$field_name");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    /**
     * Read the additional fields definitions.
     *
     * @access	public
     *
     * @return array
     */
    public function get_all_additional_fields()
    {
        $sql = "SELECT sys_man_additional_fields.*, group_name FROM sys_man_additional_fields LEFT JOIN oa_group on sys_man_additional_fields.group_id = oa_group.group_id ORDER BY field_name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    /**
     * Read the additional field definitions.
     *
     * @access	public
     *
     * @return array
     */
    public function get_additional_field($field_id)
    {
        $sql = "SELECT * FROM sys_man_additional_fields WHERE field_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$field_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    /**
     * Read the additional fields belonging to a given system.
     *
     * @access	public
     *
     * @param	system_id
     *
     * @return array
     */
    public function get_additional_fields($system_id)
    {
        $sql = "SELECT
				lower(sys_man_additional_fields.field_name) as field_lower_name,
				sys_man_additional_fields.field_id,
				sys_man_additional_fields.field_name,
				sys_man_additional_fields.field_type,
				sys_man_additional_fields.field_placement,
				sys_man_additional_fields_data.field_datetime,
				sys_man_additional_fields_data.field_varchar,
				sys_man_additional_fields_data.field_int,
				sys_man_additional_fields_data.field_memo
			FROM
				sys_man_additional_fields,
				sys_man_additional_fields_data
			WHERE
				sys_man_additional_fields.field_id = sys_man_additional_fields_data.field_id AND
				sys_man_additional_fields_data.system_id = ? ";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    /**
     * Read the additional fields belonging to a given system.
     *
     * @access	public
     *
     * @param	system_id
     *
     * @return array
     */
    public function get_additional_fields_data($system_id)
    {
        # TODO - return an result set containing only fields where system is in group that field is allowed for
        $sql = "SELECT sys_man_additional_fields.field_id, 
                sys_man_additional_fields.field_name, 
                sys_man_additional_fields.field_type, 
                sys_man_additional_fields.field_placement, 
                sys_man_additional_fields_data.field_details_id, 
                sys_man_additional_fields_data.system_id, 
                sys_man_additional_fields_data.field_datetime, 
                sys_man_additional_fields_data.field_varchar, 
                sys_man_additional_fields_data.field_int, 
                sys_man_additional_fields_data.field_memo 
                FROM sys_man_additional_fields LEFT JOIN sys_man_additional_fields_data ON 
                    (sys_man_additional_fields_data.field_id = sys_man_additional_fields.field_id AND 
                        (sys_man_additional_fields_data.system_id = ? OR sys_man_additional_fields_data.system_id IS NULL))";

        #$sql = "SELECT sys_man_additional_fields.*, sys_man_additional_fields_data.* 
        #        FROM sys_man_additional_fields 
        #        LEFT JOIN oa_group_sys on sys_man_additional_fields.group_id = oa_group_sys.group_id 
        #        LEFT JOIN sys_man_additional_fields_data ON sys_man_additional_fields.field_id = sys_man_additional_fields_data.field_id 
        #        WHERE oa_group_sys.system_id = ? AND sys_man_additional_fields_data.system_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }

    /**
     * Read the additional fields belonging to a given system.
     *
     * @access  public
     *
     * @param   system_id
     *
     * @return array
     */
    public function get_additional_fields_for_group($group_id)
    {
        $sql = "SELECT * FROM sys_man_additional_fields WHERE group_id = ? OR group_id = 1";
        $sql = $this->clean_sql($sql);
        $data = array("$group_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function set_system_field ($system_id = '', $field_name = '', $field_data = '')
    {
        if ($system_id == '' or $field_name == '') {
            return;
        }

        $sql = "SELECT field_id FROM sys_man_additional_fields WHERE field_name = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($field_name);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        $field_id = $result[0]->field_id;

        $sql = "DELETE FROM sys_man_additional_fields_data WHERE system_id = ? AND field_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array($system_id, $field_id);
        $query = $this->db->query($sql, $data);

        $sql = "INSERT INTO sys_man_additional_fields_data VALUES(NULL, ?, ?, '', ?, '', '')";
        $sql = $this->clean_sql($sql);
        $data = array ($system_id, $field_id, $field_data);
        $query = $this->db->query($sql, $data);

        return;
    }

    function get_system_fields ($system_id = '')
    {
        if ($system_id == '') { return; }
        $sql = "SELECT f.field_id, f.field_name, f.field_type, f.field_values, f.field_placement, IFNULL(d.field_varchar,\"\") AS data_value, IFNULL(d.field_details_id, \"\") as data_id FROM sys_man_additional_fields f  LEFT JOIN sys_man_additional_fields_data d ON (f.field_id = d.field_id AND d.system_id = ?) WHERE f.group_id IN (SELECT group_id FROM oa_group_sys WHERE system_id = ?)";
        $sql = $this->clean_sql($sql);
        $data = array($system_id, $system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }
}
