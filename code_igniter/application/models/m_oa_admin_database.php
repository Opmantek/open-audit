<?php 
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
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
		$sql = "SELECT type, os_family, COUNT(*) as count FROM system WHERE man_status = 'production' GROUP BY type, os_family ";
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

	function count_all_rows($table = 'oa_temp') {
		$sql = "SELECT COUNT(*) AS count FROM $table";
		$query = $this->db->query($sql);
		$row = $query->row();
		return ($row->count);
	}

	function delete_all_rows($table = 'oa_temp') {
		$sql = "DELETE FROM $table";
		$query = $this->db->query($sql);
		return($this->db->affected_rows());
	}

}
?>
