<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_database extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_db($system_id) {
		$sql = "SELECT sys_sw_database.* FROM sys_sw_database, system
			WHERE sys_sw_database.system_id = system.system_id AND sys_sw_database.timestamp = system.timestamp AND system.system_id = ?
			GROUP BY db_id";
		$sql = $this->clean_sql($sql);
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_database($input, $details) {
		// find the version string, based on the version integer.
		$version_string = "unknown";
		if (mb_strpos($input->db_version, "11.00.2100.60") === 0) { $version_string = "SQL Server 2012 RTM"; }
		if (mb_strpos($input->db_version, "10.50.2500.0") === 0) { $version_string = "SQL Server 2008 R2 Service Pack 1"; }
		if (mb_strpos($input->db_version, "10.50.1600.1") === 0) { $version_string = "SQL Server 2008 R2 RTM"; }
		if ((mb_strpos($input->db_version, "10.00.5500.00") === 0) or (mb_strpos($input->db_version, "10.0.5500.0") === 0)){ $version_string = "SQL Server 2008 Service Pack 3"; }
		if ((mb_strpos($input->db_version, "10.00.4000.00") === 0) or (mb_strpos($input->db_version, "10.0.4000.0") === 0)){ $version_string = "SQL Server 2008 Service Pack 2"; }
		if ((mb_strpos($input->db_version, "10.00.2531.00") === 0) or (mb_strpos($input->db_version, "10.0.2531.0") === 0)){ $version_string = "SQL Server 2008 Service Pack 1"; }
		if ((mb_strpos($input->db_version, "10.00.1600.22") === 0) or (mb_strpos($input->db_version, "10.0.1600.22") === 0)) { $version_string = "SQL Server 2008 RTM"; }
		if ((mb_strpos($input->db_version, "9.00.5000") === 0) or (mb_strpos($input->db_version, "9.0.5000.0") === 0)) { $version_string = "SQL Server 2005 Service Pack 4"; }
		if (mb_strpos($input->db_version, "9.00.4035") === 0) { $version_string = "SQL Server 2005 Service Pack 3"; }
		if (mb_strpos($input->db_version, "9.00.3042") === 0) { $version_string = "SQL Server 2005 Service Pack 2"; }
		if (mb_strpos($input->db_version, "9.00.2047") === 0) { $version_string = "SQL Server 2005 Service Pack 1"; }
		if (mb_strpos($input->db_version, "9.00.1399") === 0) { $version_string = "SQL Server 2005 RTM"; }
		if (mb_strpos($input->db_version, "8.00.2039") === 0) { $version_string = "SQL Server 2000 Service Pack 4"; }
		if (mb_strpos($input->db_version, "8.00.761") === 0)  { $version_string = "SQL Server 2000 ServicePack 3a"; }
		if (mb_strpos($input->db_version, "8.00.760") === 0)  { $version_string = "SQL Server 2000 Service Pack 3"; }
		if (mb_strpos($input->db_version, "8.00.534") === 0)  { $version_string = "SQL Server 2000 Service Pack 2"; }
		if (mb_strpos($input->db_version, "8.00.384") === 0)  { $version_string = "SQL Server 2000 Service Pack 1"; }
		if (mb_strpos($input->db_version, "8.00.194") === 0)  { $version_string = "SQL Server 2000 RTM"; }
		if (mb_strpos($input->db_version, "7.00.10") === 0)   { $version_string = "SQL Server 7 Service Pack 4"; }
		if (mb_strpos($input->db_version, "7.00.961") === 0)  { $version_string = "SQL Server 7 Service Pack 3"; }
		if (mb_strpos($input->db_version, "7.00.842") === 0)  { $version_string = "SQL Server 7 Service Pack 2"; }
		if (mb_strpos($input->db_version, "7.00.699") === 0)  { $version_string = "SQL Server 7 Service Pack 1"; }
		if (mb_strpos($input->db_version, "7.00.623") === 0)  { $version_string = "SQL Server 7 RTM"; }

		// need to check for database changes
		$sql = "SELECT sys_sw_database.db_id FROM sys_sw_database, system WHERE sys_sw_database.system_id = system.system_id AND 
					system.system_id = ? AND system.man_status = 'production' AND sys_sw_database.db_type = ? AND sys_sw_database.db_version = ? AND 
					( sys_sw_database.timestamp = ? OR sys_sw_database.timestamp = ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->db_type", 
				"$input->db_version", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the database entry exists - need to update its timestamp
			$sql = "UPDATE sys_sw_database SET timestamp = ? , db_edition = ?, db_version_string = ? WHERE db_id = ?";
			$data = array("$details->timestamp", "$input->db_edition", "$version_string", "$row->db_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the database entry does not exist - insert it
			$sql = "INSERT INTO sys_sw_database (system_id, db_type, db_version, db_version_string, db_edition, db_port, timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->db_type", 
					"$input->db_version", 
					"$version_string", 
					"$input->db_edition", 
					"$input->db_port", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_database($details) {
		// database entry no longer detected
		$sql = "SELECT sys_sw_database.db_id FROM sys_sw_database, system WHERE sys_sw_database.system_id = system.system_id AND sys_sw_database.timestamp = ? AND system.system_id = ? AND system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'database service removed - ' . $myrow->db_id;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_database', $myrow->db_id, $alert_details, $details->timestamp);
		}

		// new database
		$sql = "SELECT  sys_sw_database.db_id FROM sys_sw_database, system WHERE sys_sw_database.system_id = system.system_id AND
						sys_sw_database.timestamp = sys_sw_database.first_timestamp AND sys_sw_database.timestamp = ? AND
						system.system_id = ? AND system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'database service detected - ' . $myrow->db_id;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_database', $myrow->db_id, $alert_details, $details->timestamp);
		}
	}
}
?>