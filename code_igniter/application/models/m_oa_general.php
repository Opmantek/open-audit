<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_oa_general extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	/**
	 * Get the attribute or attributes from the system_id
	 *
	 * @access	public
	 * @param	table & attribute & system_id
	 * @return	string | array of objects
	 */
	function get_attribute($table = 'system', $attribute = 'hostname', $system_id = '') {
		if ((strpos($attribute, ",") !== FALSE) or ($attribute == "*")) { $limit = ""; } else { $limit = "LIMIT 1"; }
		$sql = "SELECT $attribute FROM $table WHERE system_id = ? " . $limit;
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		if ((strpos($attribute, ",") !== FALSE) or ($attribute == "*")) { 
			$result = $query->result();
			return ($result);
		} else {
			$row = $query->row();
			return ($row->$attribute);
		}
	}

	function get_system_attribute($table = 'system', $attribute = 'hostname', $system_id = '') {
		if ((strpos($attribute, ",") !== FALSE) or ($attribute == "*")) { $limit = ""; } else { $limit = "LIMIT 1"; }
		$sql = "SELECT $table.$attribute FROM $table LEFT JOIN system ON ($table.system_id = system.system_id AND 
			$table.timestamp = system.timestamp) WHERE system.system_id = ? " . $limit;
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		if ((strpos($attribute, ",") !== FALSE) or ($attribute == "*")) { 
			$result = $query->result();
			return ($result);
		} else {
			$row = $query->row();
			return ($row->$attribute);
		}
	}

}