<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_oa_admin_database extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function count_systems() {
		$sql = "SELECT count(*) as count FROM system";
		$query = $this->db->query($sql);
		$row = $query->row();
		return($row->count);
	}

	function statistics() {
		$sql = "select os_family, count(*) as count from system group by os_family";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}

	function get_tables_and_row_count() {
		$result = $this->db->list_tables();
		$count = 0;
		foreach ($result as $table) {
			$rows = $this->db->count_all($table);
			$returned[$count]['table'] = $table;
			$returned[$count]['rows'] = $rows;
			$count++;
		}
		return ($returned);
	}
	
	function export_table($table) {
		$sql = "SELECT * FROM $table";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}
	
	function get_tables() {
		$result = $this->db->list_tables();
		return ($result);
	}
	
	function get_fields($table) {
		$fields_in_table = $this->db->list_fields($table);
		$result = array();
		foreach ($fields_in_table as $field_in_table) {
			if ((mb_strpos($field_in_table, '_id') === false) AND (mb_strpos($field_in_table, 'timestamp') === false)) {
				$result[] = $field_in_table;
			}
		} 
		return ($result);
	}

	function get_field_values($table, $field) {
		$sql = "SELECT DISTINCT($field) AS value FROM $table ORDER BY value";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);		
	}

	function backup_database() {
		// NOTE - this only works on Linux at the moment
		$file = "/tmp/OAv2_database_backup_" . date("Y_m_d_H_i_s") . ".sql";
		$dump_command = 'mysqldump -h ' . $this->db->hostname . ' -u ' . $this->db->username . ' -p' . $this->db->password . ' ' . $this->db->database . ' > ' . $file;
		exec($dump_command); 
		$this->load->helper('download');
		$data = file_get_contents($file); 
		$name = "OAv2_database_backup_" . date("Y_m_d_H_i_s") . ".sql";
		force_download($name, $data);
		unlink($file);
	}
}
?>
