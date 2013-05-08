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

class M_service extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_service($system_id) {
		$sql = "SELECT 	
				DISTINCT(service_name), 
				service_start_mode, 
				service_state, 
				service_display_name, 
				service_start_name 
			FROM 
				sys_sw_service, 
				system
			WHERE 
				sys_sw_service.system_id = system.system_id AND
				sys_sw_service.timestamp = system.timestamp AND
				system.system_id = ? 
			ORDER BY 
				sys_sw_service.service_name";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}


function process_service($input, $details) {
		// below are services that constantly change their start/stop/state type settings
		$services_that_change = "AeLookupSvc AppMgmt BITS MSIServer NSClient ShellHWDetection swprv TrustedInstaller VSS WinHttpAutoProxySvc  ";
		
        // select all the current services from the DB
        $sql = "SELECT
                    sys_sw_service.*
                FROM    
                    sys_sw_service,
                    system
                WHERE    
                    sys_sw_service.system_id     = system.system_id AND
                    system.system_id            = ? AND
                    system.man_status            = 'production' AND
                    sys_sw_service.timestamp     = ? ";
		$sql = $this->clean_sql($sql);
        $data = array("$details->system_id", "$details->original_timestamp");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if ($query->num_rows() > 0) {
            // we have existing servies
            foreach ($input->service as $service_xml) {
                $flag = 'insert';
                foreach ($result as $service_db) {
					if	(($service_db->service_name == $service_xml->service_name) AND
						($service_db->service_display_name == $service_xml->service_display_name) AND
						($service_db->service_path_name == $service_xml->service_path_name) AND
						(($service_db->timestamp == $details->timestamp) OR
                        ($service_db->timestamp == $details->original_timestamp)) ) {
						// we match - need to check details
						$change_comment = "";
						if (mb_strpos($services_that_change, $service_db->service_name) === false) {
							// the service name is not in the list of services that constantly change
							if ($service_db->service_started != $service_xml->service_started) {
								$change_comment = "Service Started was " . $service_db->service_started . " but is now " . $service_xml->service_started;
							}
							if ($service_db->service_start_mode != $service_xml->service_start_mode) {
								if ($change_comment > "") {
									$change_comment .= ", Service Start Mode was " . $service_db->service_start_mode . " but is now " . $service_xml->service_start_mode;
								} else {
									$change_comment = "Service Start Mode = was " . $service_db->service_start_mode . " but is now " . $service_xml->service_start_mode;
								}
							}
							if ($service_db->service_state != $service_xml->service_state) {
								if ($change_comment > "") {
									$change_comment .= ", Service State was " . $service_db->service_state . " but is now " . $service_xml->service_state;
								} else {
									$change_comment = "Service State was " . $service_db->service_state . " but is now " . $service_xml->service_state;
								}
							}
						}
                        $flag = 'update';
                        $sql = "UPDATE sys_sw_service SET timestamp = ?, service_started = ?, service_start_mode = ?, service_state = ? WHERE service_id = ?";
                        $data = array("$details->timestamp", "$service_xml->service_started", "$service_xml->service_start_mode", "$service_xml->service_state", "$service_db->service_id");
                        $query = $this->db->query($sql, $data);
						// insert the changed service into oa_alert_log
						if ($change_comment != "") {
							$alert_details = "service changed - " . $service_xml->service_name . " - " . $change_comment;
							$sql = "INSERT INTO oa_alert_log ( system_id, alert_table, alert_foreign_row, alert_details, user_id, alert_ack_time, alert_note, timestamp ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ? )";
							$data = array("$details->system_id", "sys_sw_service", "$service_db->service_id", "$alert_details", "1", "$details->timestamp", "Auto acknowledged by system.", "$details->timestamp");
							$query = $this->db->query($sql, $data);
						}
					}
                }
                if ($flag == 'insert') {
                    // we did not get any matches to the array
                    // insert a new row
                    $sql = "INSERT INTO sys_sw_service (    system_id,
                            service_name,
                            service_display_name,
                            service_path_name,
                            service_started,
                            service_start_name,
                            service_start_mode,
                            service_state,
                            timestamp,
                            first_timestamp ) VALUES ( ?,?,?,?,?,?,?,?,?,? )";
					$sql = $this->clean_sql($sql);
                    $data = array("$details->system_id",
                            "$service_xml->service_name", 
                            "$service_xml->service_display_name",
                            "$service_xml->service_path_name",
                            "$service_xml->service_started",
                            "$service_xml->service_start_name",
                            "$service_xml->service_start_mode",
                            "$service_xml->service_state",
                            "$details->timestamp",
                            "$details->timestamp");
                    $query = $this->db->query($sql, $data);
                }
            }
        } else {
            // this is all new - just insert it all
            foreach ($input->service as $service_xml) {
                $sql = "INSERT INTO sys_sw_service ( system_id,
                        service_name,
                        service_display_name,
                        service_path_name,
                        service_started,
                        service_start_name,
                        service_start_mode,
                        service_state,
                        timestamp,
                        first_timestamp ) VALUES ( ?,?,?,?,?,?,?,?,?,? )";
				$sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$service_xml->service_name", 
                        "$service_xml->service_display_name",
                        "$service_xml->service_path_name",
                        "$service_xml->service_started",
                        "$service_xml->service_start_name",
                        "$service_xml->service_start_mode",
                        "$service_xml->service_state",
                        "$details->timestamp",
                        "$details->timestamp");
                $query = $this->db->query($sql, $data);
            }
        }
    }

	function alert_service($details) {
		// service no longer detected
		$sql = "SELECT 
					sys_sw_service.service_id, 
					sys_sw_service.service_name 
				FROM 	
					sys_sw_service, system
				WHERE 	
					sys_sw_service.system_id = system.system_id AND
					sys_sw_service.timestamp = ? AND
					system.system_id = ? AND
					system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) { 
			$alert_details =  'service removed - ' . $myrow->service_name;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_service', $myrow->service_id, $alert_details, $details->timestamp);
		}
		
		// new service
		$sql = "SELECT 
					sys_sw_service.service_id, 
					sys_sw_service.service_name 
				FROM 	
					sys_sw_service, system
				WHERE 	
					sys_sw_service.system_id = system.system_id AND
					sys_sw_service.timestamp = sys_sw_service.first_timestamp AND
					sys_sw_service.timestamp = ? AND
					system.system_id = ? AND
					system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) { 
			$alert_details = 'service installed - ' . $myrow->service_name;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_service', $myrow->service_id, $alert_details, $details->timestamp);
		}
	}
}
?>