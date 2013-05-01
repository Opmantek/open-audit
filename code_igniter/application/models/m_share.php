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

class M_share extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_share($system_id) {
		$sql = "SELECT 
				share_caption, 
				share_name, 
				share_path, 
				share_size, 
				share_users 
			FROM 
				sys_sw_share,
				system
			WHERE 
				sys_sw_share.system_id = system.system_id AND
				sys_sw_share.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				share_id
			ORDER BY 
				share_path";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_shares($input, $details) {
		// need to check for shared directory changes
		$sql = "SELECT sys_sw_share.share_id
				FROM sys_sw_share, system 
				WHERE 	sys_sw_share.system_id 	= system.system_id AND 
						system.system_id		= ? AND 
						system.man_status 	= 'production' AND 
						share_name			= ? AND 
						share_path			= ? AND 
						( sys_sw_share.timestamp = ? OR 
						sys_sw_share.timestamp 	= ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", 
				"$input->share_name", 
				"$input->share_path", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the share exists - need to update its timestamp
			$sql = "UPDATE sys_sw_share SET share_size = ?, share_users = ?, timestamp = ? WHERE share_id = ?";
			$data = array("$input->share_size", "$input->share_users", "$details->timestamp", "$row->share_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the share does not exist - insert it
			$sql = "INSERT INTO sys_sw_share (	system_id, 
										share_caption, 
										share_name, 
										share_path, 
										share_size, 
										share_users, 
										timestamp,
										first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->share_caption", 
					"$input->share_name", 
					"$input->share_path", 
					"$input->share_size", 
					"$input->share_users", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_share($details) {
		// share no longer detected
		$sql = "SELECT sys_sw_share.share_id, sys_sw_share.share_name, sys_sw_share.share_caption
				FROM 	sys_sw_share, system
				WHERE 	sys_sw_share.system_id = system.system_id AND
						sys_sw_share.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'share deleted - ' . $myrow->share_name;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_share', $myrow->share_id, $alert_details, $details->timestamp);
		}

		// new share
		$sql = "SELECT sys_sw_share.share_id, sys_sw_share.share_name, sys_sw_share.share_caption
				FROM 	sys_sw_share, system
				WHERE 	sys_sw_share.system_id = system.system_id AND
						sys_sw_share.timestamp = sys_sw_share.first_timestamp AND
						sys_sw_share.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'share created - ' . $myrow->share_name;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_share', $myrow->share_id, $alert_details, $details->timestamp);
		}
	}
}
?>