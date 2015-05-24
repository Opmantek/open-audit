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
 * @version 1.6.2
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
        $sql = "SELECT lower(name), name, id FROM sys_man_additional_fields ORDER BY name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    /**
     * Delete the field.
     *
     * @param string $id
     * @access	public
     *
     * @return array
     */
    public function delete_field($id)
    {
        $sql = "DELETE FROM sys_man_additional_fields WHERE id = ? ";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
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
    public function check_additional_fields_name($name, $id)
    {
        $sql = "SELECT id FROM sys_man_additional_fields WHERE name = ? AND id <> ? ";
        $sql = $this->clean_sql($sql);
        $data = array("$name", "$id");
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
        $sql = "UPDATE sys_man_additional_fields SET name = ?, type = ?, placement = ?, group_id = ? WHERE id = ?";
        $data = array("$details->name", "$details->type", "$details->placement", "$details->group_id", "$details->id");
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
        $sql = "INSERT INTO sys_man_additional_fields (name, type, placement, group_id) VALUES (?, ?, ?, ?)";
        $data = array("$details->name", "$details->type", "$details->placement", "$details->group_id");
        $query = $this->db->query($sql, $data);

        return;
    }

    /**
     * Read the id additional field.
     *
     * @access	public
     *
     * @param	name
     *
     * @return array
     */
    public function get_additional_id($name)
    {
        $sql = "SELECT id FROM sys_man_additional_fields WHERE name = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$name");
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
        $sql = "SELECT * FROM sys_man_additional_fields ORDER BY name";
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
    public function get_additional_field($id)
    {
        $sql = "SELECT * FROM sys_man_additional_fields WHERE id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
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
				lower(sys_man_additional_fields.name) as lower_name,
				sys_man_additional_fields.id,
				sys_man_additional_fields.name,
				sys_man_additional_fields.type,
				sys_man_additional_fields.placement,
				sys_man_additional_fields_data.value
			FROM
				sys_man_additional_fields,
				sys_man_additional_fields_data
			WHERE
				sys_man_additional_fields.id = sys_man_additional_fields_data.field_id AND
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
        # NOTE - TODO: remove the user_id stuff in this SQL
        #$sql = "SELECT sys_man_additional_fields.id, sys_man_additional_fields.name, sys_man_additional_fields.type, sys_man_additional_fields.placement, sys_man_additional_fields_data.details_id, sys_man_additional_fields_data.system_id, sys_man_additional_fields_data.datetime, sys_man_additional_fields_data.varchar, sys_man_additional_fields_data.int, sys_man_additional_fields_data.memo FROM sys_man_additional_fields LEFT JOIN sys_man_additional_fields_data ON sys_man_additional_fields_data.id = sys_man_additional_fields.id WHERE sys_man_additional_fields_data.system_id = ? OR sys_man_additional_fields_data.system_id IS NULL";
        $sql = "SELECT sys_man_additional_fields.*, sys_man_additional_fields_data.* FROM sys_man_additional_fields LEFT JOIN 
        sys_man_additional_fields_data ON (sys_man_additional_fields_data.id = sys_man_additional_fields.id AND 
            (sys_man_additional_fields_data.system_id = ? OR sys_man_additional_fields_data.system_id IS NULL))";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }
}
