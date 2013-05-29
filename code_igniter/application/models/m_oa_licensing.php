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

class M_oa_licensing extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function software_licensing_report($id) {
		$sql = "SELECT COUNT(DISTINCT system.system_id) AS software_count, 
				sys_sw_software.software_name, 
				sys_sw_software.software_version, 
				sys_sw_software.software_publisher, 
				sys_sw_software.software_id, 
				sys_sw_software.software_comment, 
				round(sum(oa_asset_select.group_amount)/COUNT(DISTINCT system.system_id), 0) as software_licenses, 
				oa_asset_select.select_id 
				FROM 
				sys_sw_software 
				LEFT JOIN system ON (sys_sw_software.timestamp = system.timestamp AND sys_sw_software.system_id = system.system_id)
				LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) 
				LEFT JOIN oa_asset_select ON (sys_sw_software.software_name = oa_asset_select.select_name AND oa_asset_select.group_id = ? ) 
				WHERE 
				oa_group_sys.group_id = ? 
				GROUP BY 
				sys_sw_software.software_name 
				ORDER BY sys_sw_software.software_name";
		$sql = $this->clean_sql($sql);
		$data = array($id, $id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function change_license ($group_id, $licenses, $software_name) {
		# work out if a license entry already exists
		$sql = "SELECT * FROM oa_asset_select WHERE select_name = ? AND group_id = ?";
		$sql = $this->clean_sql($sql);
		$data = array($software_name, $group_id);
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			# we have an existing match - need to run an update
			$sql = "UPDATE oa_asset_select SET group_amount = ? WHERE select_name = ? AND group_id = ?";
			$data = array("$licenses", "$software_name", "$group_id");
			$query = $this->db->query($sql, $data);
		} else {
			# this is a new license - need to insert
			$sql = "INSERT INTO oa_asset_select VALUES(NULL, ?, 'sw', '', ?, ?)";
			$data = array("$software_name", "$group_id", "$licenses");
			$query = $this->db->query($sql, $data);
		}
		
		
	}

}
?>
