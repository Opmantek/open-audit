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
 * 
 * @version 1.12.8
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
        $sql = "SELECT lower(`name`), `name`, `id` FROM additional_field ORDER BY `name`";
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
    public function delete_field($id)
    {
        $sql = "DELETE FROM `additional_field` WHERE `id` = ? ";
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
        $sql = "SELECT `id` FROM `additional_field` WHERE `name` = ? AND `id` <> ? ";
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
    public function edit_additional_field($field)
    {
        $sql = "UPDATE `additional_field` SET `name` = ?, `type` = ?, `placement` = ?, `values` = ?, group_id = ? WHERE `id` = ?";
        $data = array("$field->name", "$field->type", "$field->placement", "$field->values", "$field->group_id", "$field->id");
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
    public function add_additional_field($field)
    {
        $sql = "INSERT INTO `additional_field` (`name`, `type`, `placement`, `group_id`, `values`) VALUES (?, ?, ?, ?, ?)";
        $sql = $this->clean_sql($sql);
        $data = array("$field->name", "$field->type", "$field->placement", "$field->group_id", "$field->values");
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
    public function get_additional_field_id($name)
    {
        $sql = "SELECT `id` FROM `additional_field` WHERE `name` = ?";
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
        $sql = "SELECT `additional_field`.*, `oa_group`.`group_name` FROM `additional_field` LEFT JOIN oa_group on `additional_field`.`group_id` = `oa_group`.`group_id` ORDER BY `additional_field`.`name`";
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
        $sql = "SELECT * FROM `additional_field` WHERE `id` = ?";
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
				lower(`additional_field`.`name`) as field_lower_name,
				additional_field.*,
				additional_field_item.*
			FROM
				additional_field,
				additional_field_item
			WHERE
				additional_field.id = additional_field_item.id AND
				additional_field_item.system_id = ? ";
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
        $sql = "SELECT additional_field.id as `additional_field.id`, additional_field.group_id, additional_field.name, additional_field.type, additional_field.values, additional_field.placement, additional_field_item.* FROM additional_field LEFT JOIN additional_field_item ON (additional_field_item.additional_field_id = additional_field.id AND (additional_field_item.system_id = ? OR additional_field_item.system_id IS NULL))";
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
     * @param   group_id
     *
     * @return array
     */
    public function get_additional_fields_for_group($group_id)
    {
        $sql = "SELECT * FROM additional_field WHERE group_id = ? OR group_id = 1";
        $sql = $this->clean_sql($sql);
        $data = array("$group_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function set_system_field ($system_id = '', $name = '', $data = '')
    {
        if ($system_id == '' or $field_name == '') {
            return;
        }

        $sql = "SELECT `id` FROM `additional_field` WHERE `name` = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($name);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        $field_id = $result[0]->id;

        $sql = "DELETE FROM `additional_field_item` WHERE `system_id` = ? AND `additional_field_id` = ?";
        $sql = $this->clean_sql($sql);
        $data = array($system_id, $field_id);
        $query = $this->db->query($sql, $data);

        $sql = "INSERT INTO additional_field_item VALUES(NULL, ?, ?, '', ?, '', '')";
        $sql = $this->clean_sql($sql);
        $data = array ($system_id, $field_id, $data);
        $query = $this->db->query($sql, $data);
        return;
    }

    function get_system_fields ($system_id = '')
    {
        if ($system_id == '') {
            return;
        }
        $sql = "SELECT f.id, f.name, f.type, f.values, f.placement, IFNULL(d.value,\"\") AS data_value, IFNULL(d.id, \"\") as data_id FROM additional_field f  LEFT JOIN additional_field_item d ON (f.id = d.additional_field_id AND d.system_id = ?) WHERE f.group_id IN (SELECT group_id FROM oa_group_sys WHERE system_id = ?)";
        $sql = $this->clean_sql($sql);
        $data = array($system_id, $system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }
}
