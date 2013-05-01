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

class M_webserver extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_webserver($system_id) {
		$sql = "SELECT 	
				sys_sw_web_server.*
			FROM 	
				sys_sw_web_server,
				system
			WHERE
				sys_sw_web_server.system_id = system.system_id AND
				sys_sw_web_server.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY 
				webserver_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function get_system_websites($system_id) {
		$sql = "SELECT 	
				sys_sw_web_site.*
			FROM 	
				sys_sw_web_site,
				system
			WHERE
				sys_sw_web_site.system_id = system.system_id AND
				sys_sw_web_site.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY site_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_webserver($input, $details) {
		foreach ($input->children() as $child) {
			if ($child->getName() == 'server') {
				// need to check for web_server changes
				$sql = "SELECT sys_sw_web_server.webserver_id 
						FROM sys_sw_web_server, system 
						WHERE sys_sw_web_server.system_id = system.system_id AND 
							system.system_id			= ? AND 
							system.man_status 			= 'production' AND 
							webserver_type 				= ? AND 
							webserver_version			= ? AND 
							webserver_state				= ? AND 
							( sys_sw_web_server.timestamp = ? OR 
							sys_sw_web_server.timestamp = ? )";
				$sql = $this->clean_sql($sql);
				$data = array("$details->system_id", 
						"$child->webserver_type", 
						"$child->webserver_version", 
						"$child->webserver_state", 
						"$details->original_timestamp", 
						"$details->timestamp");
				$query = $this->db->query($sql, $data);
				if ($query->num_rows() > 0) {
					$row = $query->row();
					// the web server entry exists - need to update its timestamp
					$sql = "UPDATE sys_sw_web_server SET timestamp = ? WHERE webserver_id = ?";
					$data = array("$details->timestamp", "$row->webserver_id");
					$query = $this->db->query($sql, $data);
					$webserver_id = $row->webserver_id;
				} else {
					// the database entry does not exist - insert it
					$sql = "INSERT INTO sys_sw_web_server (	system_id, 
												webserver_type, 
												webserver_version, 
												webserver_state, 
												webserver_log_enabled, 
												webserver_log_dir, 
												webserver_log_format, 
												webserver_log_time_period, 
												timestamp,
												first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
					$sql = $this->clean_sql($sql);
					$data = array("$details->system_id", 
							"$child->webserver_type", 
							"$child->webserver_version", 
							"$child->webserver_state", 
							"$child->webserver_log_enabled", 
							"$child->webserver_log_dir", 
							"$child->webserver_log_format", 
							"$child->webserver_log_time_period", 
							"$details->timestamp", 
							"$details->timestamp");
					$query = $this->db->query($sql, $data);
					$webserver_id = $this->db->insert_id();
				}
			} // end of server

			if ($child->getName() == 'webserver_extns') {
				foreach ($child->children() as $ext) {
					// need to check for web_server_ext changes
					$sql = "SELECT 
							sys_sw_web_server_ext.ext_id 
						FROM 
							sys_sw_web_server_ext, 
							system 
						WHERE 
							sys_sw_web_server_ext.system_id 	= system.system_id AND 
							system.system_id			= ? AND 
							system.man_status 			= 'production' AND 
							ext_name 				= ? AND 
							ext_path				= ? AND 
							ext_access				= ? AND 
							( sys_sw_web_server_ext.timestamp 	= ? OR 
							sys_sw_web_server_ext.timestamp 	= ? )";
					$sql = $this->clean_sql($sql);
					$data = array("$details->system_id", 
							"$ext->ext_name", 
							"$ext->ext_path", 
							"$ext->ext_access", 
							"$details->original_timestamp", 
							"$details->timestamp");
					$query = $this->db->query($sql, $data);
					if ($query->num_rows() > 0) {
						$row = $query->row();
						// the web server entry exists - need to update its timestamp
						$sql = "UPDATE sys_sw_web_server_ext SET timestamp = ? WHERE ext_id = ?";
						$data = array("$details->timestamp", "$row->ext_id");
						$query = $this->db->query($sql, $data);
					} else {
						// the database entry does not exist - insert it
						$sql = "INSERT INTO 
								sys_sw_web_server_ext (	
									webserver_id, 
									system_id, 
									ext_name, 
									ext_path, 
									ext_access,  
									timestamp,
									first_timestamp ) 
							VALUES ( ?, ?, ?, ?, ?, ?, ?)";
						$sql = $this->clean_sql($sql);
						$data = array("$webserver_id", 
								"$details->system_id", 
								"$ext->ext_name", 
								"$ext->ext_path", 
								"$ext->ext_access", 
								"$details->timestamp", 
								"$details->timestamp");
						$query = $this->db->query($sql, $data);
					}
				}
			} // end of ext's
			
			if ($child->getName() == 'websites') {
				foreach ($child->children() as $site) {
					// need to check for site changes
					$sql = "SELECT 	
							sys_sw_web_site.site_id 
						FROM 	
							sys_sw_web_site, system 
						WHERE 	
							sys_sw_web_site.system_id 	= system.system_id AND 
							system.system_id		= ? AND 
							system.man_status 		= 'production' AND 
							webserver_id			= ? AND 
							site_internal_id		= ? AND 
							site_description		= ? AND 
							( sys_sw_web_site.timestamp 	= ? OR 
							sys_sw_web_site.timestamp 	= ? )";
							// +++++++++++++++++++++++++++++++
							// need to input all the other attributes above
							// +++++++++++++++++++++++++++++++
					$sql = $this->clean_sql($sql);
					$data = array("$details->system_id", 
							"$webserver_id", 
							"$site->site_internal_id", 
							"$site->site_description", 
							"$details->original_timestamp", 
							"$details->timestamp");
					$query = $this->db->query($sql, $data);
					if ($query->num_rows() > 0) {
						$row = $query->row();
						// the web site exists - need to update its timestamp
						$sql = "UPDATE sys_sw_web_site SET timestamp = ? WHERE site_id = ?";
						$data = array("$details->timestamp", "$row->site_id");
						$query = $this->db->query($sql, $data);
						$site_id = $row->site_id;
					} else {
						// the site does not exist - insert it
						$sql = "INSERT INTO sys_sw_web_site (	
								webserver_id, 
								system_id, 
								site_internal_id, 
								site_description, 
								site_state,  
								site_logging, 
								site_log_format, 
								site_log_directory, 
								site_log_rotation, 
								site_secure_ip, 
								site_secure_port, 
								site_path, 
								site_size, 
								site_app_pool, 
								site_directory_browsing, 
								site_anon_user, 
								site_anon_auth, 
								site_basic_auth, 
								site_ntlm_auth, 
								site_ssl_enabled, 
								site_ssl_128_enabled, 
								site_default_documents, 
								timestamp,
								first_timestamp ) 
							VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
						$sql = $this->clean_sql($sql);
						$data = array("$webserver_id", 
								"$details->system_id", 
								"$site->site_internal_id", 
								"$site->site_description", 
								"$site->site_state", 
								"$site->site_logging", 
								"$site->site_log_format", 
								"$site->site_log_directory", 
								"$site->site_log_rotation", 
								"$site->site_secure_ip", 
								"$site->site_secure_port", 
								"$site->site_path", 
								"$site->site_size", 
								"$site->site_app_pool", 
								"$site->site_directory_browsing", 
								"$site->site_anon_user", 
								"$site->site_anon_auth", 
								"$site->site_basic_auth", 
								"$site->site_ntlm_auth", 
								"$site->site_ssl_enabled", 
								"$site->site_ssl_128_enabled", 
								"$site->site_default_documents", 
								"$details->timestamp", 
								"$details->timestamp");
						$query = $this->db->query($sql, $data);
						$site_id = $this->db->insert_id();
					}
				} // end of individual site
			} // end of site's
		} 
	}

	function alert_web_server($details) {
		// database entry no longer detected
		$sql = "SELECT sys_sw_web_server.ws_id
				FROM 	sys_sw_web_server, system
				WHERE 	sys_sw_web_server.system_id = system.system_id AND
						sys_sw_web_server.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'web server service removed - ' . $myrow->db_id;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_web_server', $myrow->db_id, $alert_details, $details->timestamp);
		}

		// new web server
		$sql = "SELECT  sys_sw_web_server.ws_id
				FROM 	sys_sw_web_server, system
				WHERE 	sys_sw_web_server.system_id = system.system_id AND
						sys_sw_web_server.timestamp = sys_sw_web_server.first_timestamp AND
						sys_sw_web_server.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'web server service detected - ' . $myrow->db_id;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_web_server', $myrow->db_id, $alert_details, $details->timestamp);
		}
	}
}
?>