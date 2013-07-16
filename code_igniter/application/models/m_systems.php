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

class M_systems extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function search($search_term = '', $group_id = '0') {
		$result = $this->db->list_tables();
		$sql = '';
		$result_set = array();
		foreach ($result as $table) {
			#if ( (mb_strpos($table, 'sys') !== false) and (mb_strpos($table, 'sys') === 0) and (mb_strpos($table, 'sys_man_') === FALSE) and (mb_strpos($table, 'system') === FALSE) ){
			if ( (mb_strpos($table, 'sys') !== false) and (mb_strpos($table, 'sys') === 0) and (mb_strpos($table, 'sys_man_') === FALSE) ){
				// a table starting with 'sys' - search this table
				$fields = $this->db->list_fields($table);
				$select_string = '';
				$search_string = '';
				foreach ($fields as $field) {
					if ( (mb_strpos($field, '_id') === FALSE) and (mb_strpos($field, 'timestamp') === false) ) {
						// we have column that is not an "id" column, nor a timestamp
						// search on this column
						$select_string .= ", " . $table . "." . $field . " ";
						$search_string .= " OR " . $table . "." . $field . " LIKE '%" . $search_term . "%' ";
					}
				}
				$search_string = mb_substr($search_string, 3 );
				$select_string = mb_substr($select_string, 1 );
				// now create the search statement
				/*
				$sql = "SELECT 
					DISTINCT(system.system_id),
					system.hostname, 
					$select_string 
				FROM 
					system, 
					oa_group_sys, 
					$table 
				WHERE 
					system.system_id = $table.system_id AND 
					system.man_status = 'production' AND 
					system.system_id = oa_group_sys.system_id AND 
					oa_group_sys.group_id = '" . $group_id . "' AND 
					system.timestamp = $table.timestamp AND 
					( $search_string ) ";
				*/


				$sql = "SELECT 
					DISTINCT(a.system_id),
					a.hostname, 
					$select_string 
				FROM 
					system a, 
					oa_group_sys, 
					$table 
				WHERE 
					a.system_id = $table.system_id AND 
					a.man_status = 'production' AND 
					a.system_id = oa_group_sys.system_id AND 
					oa_group_sys.group_id = '" . $group_id . "' AND 
					a.timestamp = $table.timestamp AND 
					( $search_string ) ";

				$sql = $this->clean_sql($sql);
				$query = $this->db->query($sql);
				$result = $query->result();
				if (count($result > 0)) {
					// we have a returned resultset - enumerate our way through it
					foreach ($result as $row) {
						// enumerate each row of the resultset
						foreach ($fields as $field) {
							// for each field in this table, check to see if the result matches the search
							$i = new stdClass();
							$i->system_id = $row->system_id;
							$i->hostname = $row->hostname;
							$i->table = $table;
							$i->field = '';
							$i->result = '';
							if ( (mb_strpos($field, '_id') === FALSE) and (mb_strpos($field, 'timestamp') === FALSE) ) {
								if (mb_strpos(mb_strtoupper($row->$field), mb_strtoupper($search_term)) !== FALSE) {
									$i->field = $field; 
									$i->result = $row->$field; 
									$result_set[] = $i;
								}
							}
							unset ($i);
						}
					}
				}
			}
		}
		return ($result_set);
	}

	function get_group_systems($group_id = 0) {
		$group_id = intval($group_id);
		// check if the group has SQL defined in the DB (group_display_sql)
		$sql = "SELECT group_display_sql FROM oa_group WHERE group_id = ?";
		$data = array("$group_id");
		$query = $this->db->query($sql, $data);
		$result = $query->row();
		$display_sql = $result;
		if (($display_sql->group_display_sql === '') OR ($display_sql->group_display_sql === ' ')) {
			// the group has no specific SQL Select (group_display_sql).
			// Use a standard SQL Select.
			$sql = "SELECT 
					system.system_id, 
					system.hostname,
					system.man_description, 
					system.man_ip_address, 
					system.man_type, 
					system.man_os_family, 
					system.man_os_name, 
					system.man_icon, 
					system.man_manufacturer, 
					system.man_model,
					system.type 
				FROM 
					system, 
					oa_group_sys
				WHERE 
					system.system_id = oa_group_sys.system_id AND 
					oa_group_sys.group_id = ? AND 
					system.man_status = 'production' 
				GROUP BY 
					system.system_id";
			$sql = $this->clean_sql($sql);
			$data = array("$group_id");
		} else {
			$sql = $display_sql->group_display_sql;
			$data = array("$group_id");
		}
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function get_distinct_os_group() {
		$sql = "SELECT distinct(man_os_group) FROM system ORDER BY man_os_group";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}

	function get_distinct_os_family() {
		$sql = "SELECT distinct(man_os_family) FROM system ORDER BY man_os_family";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}

	function get_distinct_os_name() {
		$sql = "SELECT distinct(man_os_name) FROM system ORDER BY man_os_name";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}
}
?>