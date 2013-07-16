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

class M_oa_group_column extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_group_column($group_id = 0) {
		$sql = "SELECT * FROM oa_group_column WHERE group_id = ? ORDER BY column_order";
		$data = array($group_id );
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		if ($query->num_rows() == '0') {
			// return the 'standard' rows
			$sql = "SELECT * FROM oa_group_column WHERE group_id = '1' ORDER BY column_order";
			$query = $this->db->query($sql);
			$result = $query->result();
		}		
		return ($result);
	}

	function get_group_column_new($group_id = 0) {
		$sql = "SELECT * FROM oa_group_column WHERE group_id = ? AND column_name <> 'Tags' ORDER BY column_order";
		$data = array($group_id );
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		if ($query->num_rows() == '0') {
			// return the 'standard' rows
			$sql = "SELECT * FROM oa_group_column WHERE group_id = '1' AND column_name <> 'Tags' ORDER BY column_order";
			$query = $this->db->query($sql);
			$result = $query->result();
		}		
		return ($result);
	}

	function insert_group_column($details) {
		for ($i=1; $i<=8; $i++) {
			# nasty hack - only accounts for 8 columns
			# there are only 8 columns displayed on the web form
			# todo - fix this.
			$start=explode(' ',microtime());
			$column_order = "column_order_" . $i;
			if ($details->$column_order > '0') {
				$column_name = "column_name_" . $i;
				$column_variable = "column_variable_" . $i;
				$column_type = "column_type_" . $i;
				$column_link = "column_link_" . $i;
				$column_secondary = "column_secondary_" . $i;
				$column_ternary = "column_ternary_" . $i;
				$column_align = "column_align_" . $i;
				$sql = "INSERT INTO 
							oa_group_column 
						SET 
							group_id = ?, 
							column_order = ?, 
							column_name = ?, 
							column_variable = ?, 
							column_type = ?, 
							column_link = ?, 
							column_secondary = ?, 
							column_ternary = ?, 
							column_align = ?";
				$sql = $this->clean_sql($sql);
				$data = array(	$details->group_id, 
								$details->$column_order, 
								$details->$column_name, 
								$details->$column_variable, 
								$details->$column_type, 
								$details->$column_link, 
								$details->$column_secondary, 
								$details->$column_ternary, 
								$details->$column_align);
				$query = $this->db->query($sql, $data);
				$end = explode(' ',microtime()); 
			}
		}
	}

	function import_group($input, $group_id) {
		foreach ($input as $detail) {
			$sql = "INSERT INTO 
						oa_group_column 
					SET 
						group_id = ?, 
						column_order = ?, 
						column_name = ?, 
						column_variable = ?, 
						column_type = ?, 
						column_link = ?, 
						column_secondary = ?, 
						column_ternary = ?, 
						column_align = ?";
			$sql = $this->clean_sql($sql);
			$data = array(	$group_id, 
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