<?php
/**
 * @package OAv2
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_oa_connection extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	/**
	 * Get the connection details from the id
	 *
	 * @access	public
	 * @param	id of the connection
	 * @return	string
	 */
	function get_connection($id) {
		$sql = "SELECT * FROM oa_connection WHERE connection_id = ? LIMIT 1";
		$data = array($id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	/**
	 * Get the connection id from the name
	 *
	 * @access	public
	 * @param	name of the connection
	 * @return	string
	 */
	function get_connection_id($name) {
		$sql = "SELECT connection_id FROM oa_connection WHERE name = ? LIMIT 1";
		$data = array("$name");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		if ($query->num_rows() > 0)
		{
			$row = $query->row(); 
			return ($row->connection_id);
		} else {
			return null;
		}
	}

	/**
	 * Get the connection name from the id
	 *
	 * @access	public
	 * @param	id of the connection
	 * @return	string
	 */
	function get_connection_name($id) {
		$sql = "SELECT name FROM oa_connection WHERE connection_id = ? LIMIT 1";
		$data = array($id);
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		return ($row->connection_name);
	}

	/**
	 * Get all connection names 
	 *
	 * @access	public
	 * @return	array
	 */
	function get_connection_names() {
		$sql = "SELECT name, connection_id FROM oa_connection ORDER BY connection_name";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}

	/**
	 * Get all connection details 
	 *
	 * @access	public
	 * @return	array
	 */
	function get_all_connections() {
		$sql = "SELECT oa_connection.*, oa_org.org_name, a.location_name AS location_a, b.location_name AS location_b FROM oa_connection LEFT JOIN oa_org ON oa_connection.org_id = oa_org.org_id LEFT JOIN oa_location AS a ON oa_connection.location_id_a = a.location_id LEFT JOIN oa_location AS b ON oa_connection.location_id_b = b.location_id ORDER BY name";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}

	/**
	 * Check the connection name to see if it exists, not including the supplied id
	 *
	 * @access	public
	 * @param	connection_name the name of the connection
	 * @param	connection_id the ID of the connection
	 * @return	boolean
	 */
	function check_connection_name($connection_name, $connection_id) {
		$sql = "SELECT connection_id FROM oa_connection WHERE name = ? AND connection_id <> ?";
		$data = array($connection_name, $connection_id);
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		if ($query->num_rows() > 0)
		{
			return FALSE;
		} else {
			return TRUE;
		}
	}

	/**
	 * Add a connection to the database - Admin only
	 *
	 * @access	public
	 * @param	details - the relevant location details object
	 * @return	string
	 */
	function add_connection($details) { 
		$sql = "
			INSERT INTO 
				oa_connection 
				(org_id,
				name,
				provider,
				service_type,
				product_name,
				service_identifier,
				speed,
				location_id_a,
				location_id_b,
				system_id_a,
				system_id_b,
				line_number_a,
				line_number_b,
				ip_address_external_a,
				ip_address_external_b,
				ip_address_internal_a,
				ip_address_internal_b) 
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$sql = $this->clean_sql($sql);
		$data = array("$details->connection_org_id",
					"$details->connection_name",
					"$details->connection_provider",
					"$details->connection_service_type",
					"$details->connection_product_name",
					"$details->connection_service_identifier",
					"$details->connection_speed",
					"$details->connection_location_id_a",
					"$details->connection_location_id_b",
					"$details->connection_system_id_a",
					"$details->connection_system_id_b",
					"$details->connection_line_number_a",
					"$details->connection_line_number_b",
					"$details->connection_ip_address_external_a",
					"$details->connection_ip_address_external_b",
					"$details->connection_ip_address_internal_a",
					"$details->connection_ip_address_internal_b");
		$query = $this->db->query($sql, $data);
		return($this->db->insert_id());
	}

	/**
	 * Delete a connection from the database - Admin only
	 *
	 * @access	public
	 * @param	detail id - the id of the connection to delete
	 * @return	nothing
	 */
	function delete_connection($connection_id) {
		$sql = "DELETE FROM oa_connection WHERE connection_id = ?";
		$data = array("$connection_id");
		$query = $this->db->query($sql, $data);
	}

	/**
	 * Update a connection in the database - Admin only
	 *
	 * @access	public
	 * @param	details - the relevant connection details object
	 * @return	TRUE
	 */
	function edit_connection($details) {
		$sql = "UPDATE 
				oa_connection
			SET
				org_id = ?, 
				name = ?, 
				provider = ?, 
				service_type = ?, 
				product_name = ?, 
				service_identifier = ?, 
				speed = ?, 
				location_id_a = ?, 
				location_id_b = ?, 
				system_id_a = ?, 
				system_id_b = ?, 
				line_number_a = ?, 
				line_number_b = ?, 
				ip_address_external_a = ?, 
				ip_address_external_b = ?, 
				ip_address_internal_a = ?, 
				ip_address_internal_b = ? 
			WHERE
				connection_id = ?";
		$sql = $this->clean_sql($sql);
		$data = array(	"$details->connection_org_id",
						"$details->connection_name",
						"$details->connection_provider",
						"$details->connection_service_type",
						"$details->connection_product_name",
						"$details->connection_service_identifier",
						"$details->connection_speed",
						"$details->connection_location_id_a",
						"$details->connection_location_id_b",
						"$details->connection_system_id_a",
						"$details->connection_system_id_b",
						"$details->connection_line_number_a",
						"$details->connection_line_number_b",
						"$details->connection_ip_address_external_a",
						"$details->connection_ip_address_external_b",
						"$details->connection_ip_address_internal_a",
						"$details->connection_ip_address_internal_b");
		$query = $this->db->query($sql, $data);
		return(TRUE);
	}
}
?>