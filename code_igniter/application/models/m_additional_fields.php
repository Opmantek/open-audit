<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_additional_fields extends MY_Model {

	function __construct() {
		parent::__construct();
	}


	/**
	 * Read the names of all additional fields
	 *
	 * @access	public
	 * @return	array
	 */
	function get_additional_fields_names() {
		$sql = "SELECT lower(field_name), field_name, field_id FROM sys_man_additional_fields ORDER BY field_name";
		$sql = $this->clean_sql($sql);
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}	

	/**
	 * Delete the field
	 *
	 * @param	string $field_id 
	 * @access	public
	 * @return	array
	 */
	function delete_field($field_id) {
		$sql = "DELETE FROM sys_man_additional_fields WHERE field_id = ? ";
		$sql = $this->clean_sql($sql);
		$data = array("$field_id");
		$query = $this->db->query($sql, $data);
		return;
	}

	/**
	 * Check the name of the edited field does not already exist
	 *
	 * @access	public
	 * @return	array
	 */
	function check_additional_fields_name($field_name, $field_id) {
		$sql = "SELECT field_id FROM sys_man_additional_fields WHERE field_name = ? AND field_id <> ? ";
		$sql = $this->clean_sql($sql);
		$data = array("$field_name", "$field_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}
	
	/**
	 * Edit an existing additional field
	 *
	 * @access	public
	 * @param	details -> field data
	 * @return	array
	 */
	function edit_additional_field($details) {
		$sql = "UPDATE sys_man_additional_fields SET field_name = ?, field_type = ?, field_placement = ?, group_id = ? WHERE field_id = ?";
		$data = array("$details->field_name", "$details->field_type", "$details->field_placement", "$details->group_id", "$details->field_id");
		$sql = $this->clean_sql($sql);
		$query = $this->db->query($sql, $data);
		return;
	}



	/**
	 * Add an additional field
	 *
	 * @access	public
	 * @param	details -> field data
	 * @return	array
	 */
	function add_additional_field($details) {
		$sql = "INSERT INTO sys_man_additional_fields (field_name, field_type, field_placement, group_id) VALUES (?, ?, ?, ?)";
		$data=array("$details->field_name", "$details->field_type", "$details->field_placement", "$details->group_id");
		$query = $this->db->query($sql, $data);
		return;
	}	

	/**
	 * Read the id additional field
	 *
	 * @access	public
	 * @param	field_name
	 * @return	array
	 */
	function get_additional_field_id($field_name) {
		$sql = "SELECT field_id FROM sys_man_additional_fields WHERE field_name = ?";
		$sql = $this->clean_sql($sql);
		$data=array("$field_name");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}	

	/**
	 * Read the additional fields definitions
	 *
	 * @access	public
	 * @return	array
	 */
	function get_all_additional_fields() {
		$sql = "SELECT * FROM sys_man_additional_fields ORDER BY field_name";
		$sql = $this->clean_sql($sql);
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}	

	/**
	 * Read the additional field definitions
	 *
	 * @access	public
	 * @return	array
	 */
	function get_additional_field($field_id) {
		$sql = "SELECT * FROM sys_man_additional_fields WHERE field_id = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$field_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}
	
	/**
	 * Read the additional fields belonging to a given system
	 *
	 * @access	public
	 * @param	system_id
	 * @return	array
	 */
	function get_additional_fields($system_id) {
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
	 * Read the additional fields belonging to a given system
	 *
	 * @access	public
	 * @param	system_id
	 * @return	array
	 */
	function get_additional_fields_data($system_id) {
		# NOTE - TODO - remove the user_id stuff in this SQL
		#$sql = "SELECT sys_man_additional_fields.field_id, sys_man_additional_fields.field_name, sys_man_additional_fields.field_type, sys_man_additional_fields.field_placement, sys_man_additional_fields_data.field_details_id, sys_man_additional_fields_data.system_id, sys_man_additional_fields_data.field_datetime, sys_man_additional_fields_data.field_varchar, sys_man_additional_fields_data.field_int, sys_man_additional_fields_data.field_memo FROM sys_man_additional_fields LEFT JOIN sys_man_additional_fields_data ON sys_man_additional_fields_data.field_id = sys_man_additional_fields.field_id WHERE sys_man_additional_fields_data.system_id = ? OR sys_man_additional_fields_data.system_id IS NULL";
		$sql = "SELECT sys_man_additional_fields.field_id, sys_man_additional_fields.field_name, sys_man_additional_fields.field_type, sys_man_additional_fields.field_placement, sys_man_additional_fields_data.field_details_id, sys_man_additional_fields_data.system_id, sys_man_additional_fields_data.field_datetime, sys_man_additional_fields_data.field_varchar, sys_man_additional_fields_data.field_int, sys_man_additional_fields_data.field_memo FROM sys_man_additional_fields LEFT JOIN sys_man_additional_fields_data ON (sys_man_additional_fields_data.field_id = sys_man_additional_fields.field_id AND (sys_man_additional_fields_data.system_id = ? OR sys_man_additional_fields_data.system_id IS NULL))";
		$sql = $this->clean_sql($sql);
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}
}
?>
