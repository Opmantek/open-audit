<?php
/**
 * OAv2
 *
 * An open source network auditing application
 *
 * @package OAv2
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_oa_location extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	/**
	 * Get the location details from the id
	 *
	 * @access	public
	 * @param	location_id
	 * @return	string
	 */
	function get_location($id) {
		$sql = "SELECT * FROM oa_location WHERE location_id = ? LIMIT 1";
		$data = array($id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	/**
	 * Get the location's group id 
	 *
	 * @access	public
	 * @param	location_id
	 * @return	string
	 */
	function get_group_id($location_id) {
		$sql = "SELECT location_group_id FROM oa_location WHERE location_id = ? LIMIT 1";
		$data = array("$location_id");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		return ($row->location_group_id);
	}
	
	/**
	 * Set the location's group id 
	 *
	 * @access	public
	 * @param	location_id
	 * @return	string
	 */
	function set_group_id($location_id, $group_id) {
		$sql = "UPDATE oa_location SET location_group_id = ? WHERE location_id = ? ";
		$data = array("$group_id", "$location_id");
		$query = $this->db->query($sql, $data);
	}

	/**
	 * Get the location's details, including the number of devices in the corresponding group 
	 *
	 * @access	public
	 * @param	location_id
	 * @return	string
	 */
	function get_location_details($org_id) {
		$sql = "SELECT oa_location.*, count(oa_group_sys.system_id) as total FROM oa_location LEFT JOIN oa_group_sys ON oa_group_sys.group_id = oa_location.location_group_id where oa_location.location_id = ? GROUP BY oa_location.location_id LIMIT 1";
		$data = array("$org_id");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		return ($row);
	}

	/**
	 * Get the location id from the name
	 *
	 * @access	public
	 * @param	name of the location
	 * @return	string
	 */
	function get_location_id($name) {
		$sql = "SELECT location_id FROM oa_location WHERE location_name = ? LIMIT 1";
		$data = array("$name");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		if ($query->num_rows() > 0) {
			$row = $query->row(); 
			return ($row->location_id);
		} else {
			return null;
		}
	}

	/**
	 * Get the location name from the id
	 *
	 * @access	public
	 * @param	id of the location
	 * @return	string
	 */
	function get_location_name($id) {
		$sql = "SELECT location_name FROM oa_location WHERE location_id = ? LIMIT 1";
		$data = array($id);
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		return ($row->location_name);
	}

	/**
	 * Get all the locations names 
	 *
	 * @access	public
	 * @return	array
	 */
	function get_location_names() {
		$sql = "SELECT location_name, location_id FROM oa_location ORDER BY location_name";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}

	/**
	 * Get all the locations details 
	 *
	 * @access	public
	 * @return	array
	 */
	function get_all_locations() {
		$sql = "SELECT oa_location.*, count(oa_group_sys.system_id) as total FROM oa_location LEFT JOIN oa_group_sys ON oa_group_sys.group_id = oa_location.location_group_id GROUP BY oa_location.location_id ORDER BY oa_location.location_name";
		$sql = $this->clean_sql($sql);
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}

	/**
	 * Check the location name to see if it exists, not including the supplied id
	 *
	 * @access	public
	 * @param	location_name the name of the location
	 * @param	location_id the ID of the location
	 * @return	boolean
	 */
	function check_location_name($location_name, $location_id) {
		$sql = "SELECT location_id FROM oa_location WHERE location_name = ? AND location_id <> ?";
		$data = array($location_name, $location_id);
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		if ($query->num_rows() > 0) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

	/**
	 * Get the location name of a supplied system
	 *
	 * @access	public
	 * @param	system_id the ID of the system
	 * @return	string
	 */
	function get_system_location($id) {
		$sql = "SELECT 
				oa_location.* 
			FROM 
				oa_location, 
				system 
			WHERE 
				oa_location.location_id = system.man_location_id AND
				system.system_id = ?
			LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array($id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	/**
	 * Add a location to the database - Admin only
	 *
	 * @access	public
	 * @param	details - the relevant location details object
	 * @return	string
	 */
	function add_location($details) {
		$sql = "
			INSERT INTO 
				oa_location 
				(location_name, 
				location_room, 
				location_suite, 
				location_level, 
				location_address, 
				location_city, 
				location_state,
				location_country,
				location_picture,
				location_latitude,
				location_longitude) 
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$sql = $this->clean_sql($sql);
		$data = array("$details->location_name", 
			"$details->location_room", 
			"$details->location_suite", 
			"$details->location_level", 
			"$details->location_address", 
			"$details->location_city", 
			"$details->location_state", 
			"$details->location_country", 
			"$details->location_picture", 
			"$details->location_latitude", 
			"$details->location_longitude");
		$query = $this->db->query($sql, $data);
		return($this->db->insert_id());
	}

	/**
	 * Delete a location from the database - Admin only
	 *
	 * @access	public
	 * @param	detail id - the id of the location to delete
	 * @return	nothing
	 */
	function delete_location($location_id) {
		$sql = "DELETE FROM oa_location WHERE location_id = ?";
		$data = array("$location_id");
		$query = $this->db->query($sql, $data);
		$sql = "UPDATE system SET man_location_id = '' WHERE man_location_id = ?";
		$data = array("$location_id");
		$query = $this->db->query($sql, $data);
	}

	/**
	 * Update a location in the database - Admin only
	 *
	 * @access	public
	 * @param	details - the relevant location details object
	 * @return	TRUE
	 */
	function edit_location($details) {
		$sql = "UPDATE 
				oa_location
			SET
				location_name = ?, 
				location_type = ?, 
				location_room = ?, 
				location_suite = ?, 
				location_level = ?, 
				location_address = ?, 
				location_city = ?, 
				location_state = ?,
				location_country = ?,
				location_picture = ?,
				location_latitude = ?,
				location_longitude = ?
			WHERE
				location_id = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->location_name", 
			"$details->location_type", 
			"$details->location_room", 
			"$details->location_suite", 
			"$details->location_level", 
			"$details->location_address", 
			"$details->location_city", 
			"$details->location_state", 
			"$details->location_country", 
			"$details->location_picture", 
			"$details->location_latitude", 
			"$details->location_longitude", 
			"$details->location_id");
		$query = $this->db->query($sql, $data);
		return(TRUE);
	}
	
	/**
	 * List all devices in a given location
	 *
	 * @access	public
	 * @param	location_id
	 * @return	array
	 */
	function list_devices_in_location($location_id = 0, $user_id = 0) {
		// we have not requested a specific group.
		// display all items the current user has at least 'level 3' - view list rights on.
		$sql = "
			SELECT 
				system.system_id, 
				system.hostname, 
				system.man_description, 
				system.man_ip_address, 
				system.man_icon, 
				system.man_os_name, 
				system.man_os_family 
			FROM 
				system, 
				oa_group, 
				oa_group_sys, 
				oa_group_user 
			WHERE 
				system.system_id IN ( 
					SELECT 
						system.system_id 
					FROM 
						system, 
						oa_group_sys, 
						oa_group, 
						oa_group_user 
					WHERE 
						system.man_status = 'production' AND 
						system.system_id = oa_group_sys.system_id AND 
						oa_group_sys.group_id = oa_group.group_id AND 
						oa_group.group_id = oa_group_user.group_id AND 
						oa_group_user.user_id = ? 
						) AND 
				system.system_id = oa_group_sys.system_id AND 
				oa_group_sys.group_id = oa_group.group_id AND 
				oa_group.group_id = oa_group_user.group_id AND 
				oa_group_user.group_user_access_level > '2' AND
				oa_group_user.user_id = ? AND 
				system.man_location_id = ? 
			GROUP BY system.system_id ";
		$sql = $this->clean_sql($sql);
		$data = array("$user_id", "$user_id", "$location_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);	
	}
}
?>