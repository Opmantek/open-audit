<?php
/**
 * @package Open-AudIT
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_oa_report_column extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_report_column($report_id = 0) {
		$sql = "SELECT * FROM oa_report_column WHERE report_id = ? ORDER BY column_order";
		$data = array($report_id );
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}
	
	function delete_report($report_id) {
		$sql = "DELETE FROM oa_report_column WHERE report_id = ?";
		$data = array($report_id);
		$query = $this->db->query($sql, $data);
		return(TRUE);
	}
	
	function import_report($input, $report_id) {
		foreach ($input as $detail) {
			$sql = "INSERT INTO 
						oa_report_column 
					SET 
						report_id = ?, 
						column_order = ?, 
						column_name = ?, 
						column_variable = ?, 
						column_type = ?, 
						column_link = ?, 
						column_secondary = ?, 
						column_ternary = ?, 
						column_align = ?";
			$sql = $this->clean_sql($sql);
			$data = array(	$report_id, 
							"$detail->column_order", 
							"$detail->column_name", 
							"$detail->column_variable", 
							"$detail->column_type", 
							"$detail->column_link", 
							"$detail->column_secondary", 
							"$detail->column_ternary", 
							"$detail->column_align");
			$query = $this->db->query($sql, $data);
		}
		return(TRUE);
	}
}
?>