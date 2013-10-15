<?php
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
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

	function count_old_attributes($days = 7) {
		$tables = $this->db->list_tables();
		$string = '';
		$return = array();
		$object = new stdclass();
		foreach ($tables as $table){
			if (((strpos($table, 'sys_hw_') !== FALSE) OR (strpos($table, 'sys_sw_') !== FALSE)) AND (strpos($table, "sys_hw_warranty") === FALSE)) {
				#$sql = "DELETE $table FROM $table LEFT JOIN system ON (system.system_id = $table.system_id) WHERE system.timestamp <> $table.timestamp AND DATE($table.timestamp) < DATE_SUB(curdate(), INTERVAL $days day);";
				#$query = $this->db->query($sql);
				#$string .= $table . " - rows deleted = " . $this->db->affected_rows() . "<br />\n";
				$object->table = '';
				$object->count = '';
				$sql = "SELECT COUNT(*) as count FROM $table LEFT JOIN system ON (system.system_id = $table.system_id) 
				WHERE system.timestamp <> $table.timestamp AND DATE($table.timestamp) < DATE_SUB(curdate(), INTERVAL $days day);";
				$query = $this->db->query($sql);
				$row = $query->row();
				$object->count = $row->count;
				$object->table = $table;
				$return[] = clone $object;
			}
		}
		return($return);
	}

	function delete_all_non_current_attributes($days = 365) {
		$tables = $this->db->list_tables();
		$count = 0;
		foreach ($tables as $table){
			if (((strpos($table, 'sys_hw_') !== FALSE) OR (strpos($table, 'sys_sw_') !== FALSE)) AND (strpos($table, "sys_hw_warranty") === FALSE)) {
				$sql = "DELETE $table FROM $table LEFT JOIN system ON (system.system_id = $table.system_id) WHERE system.timestamp <> $table.timestamp AND DATE($table.timestamp) < DATE_SUB(curdate(), INTERVAL $days day);";
				$query = $this->db->query($sql);
				$count = $count + $this->db->affected_rows();
			}
		}
		return($count);
	}

	function delete_table_non_current_attributes($table, $days = 365) {
		if (((strpos($table, 'sys_hw_') !== FALSE) OR (strpos($table, 'sys_sw_') !== FALSE)) AND (strpos($table, "sys_hw_warranty") === FALSE)) {
			$sql = "DELETE $table FROM $table LEFT JOIN system ON (system.system_id = $table.system_id) WHERE system.timestamp <> $table.timestamp AND DATE($table.timestamp) < DATE_SUB(curdate(), INTERVAL $days day);";
			$query = $this->db->query($sql);
			$count = $this->db->affected_rows();
		}
		return($count);
	}
}