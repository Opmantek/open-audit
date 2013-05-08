<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_dns extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_system_dns($system_id) {
		$sql = "SELECT dns_id, dns_name, dns_full_name, dns_ip_address FROM sys_sw_dns, system
			WHERE sys_sw_dns.system_id = system.system_id AND sys_sw_dns.timestamp = system.timestamp AND system.system_id = ? ";
		$sql = $this->clean_sql($sql);
		$data = array("$system_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_dns($input, $details) {
		// check for processor changes
		$sql = "SELECT sys_sw_dns.dns_id FROM sys_sw_dns, system WHERE sys_sw_dns.system_id = system.system_id AND 
				system.system_id = ? AND system.man_status = 'production' AND dns_name = ? AND 
				dns_full_name = ? AND dns_ip_address = ? AND ( sys_sw_dns.timestamp = ? OR sys_sw_dns.timestamp = ? ) 
			LIMIT 1";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id", "$input->dns_name", "$input->dns_full_name", 
				"$input->dns_ip_address", "$details->original_timestamp", "$details->timestamp"	);
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the dns entry exists - need to update it
			$sql = "UPDATE sys_sw_dns SET timestamp = ? WHERE dns_id = ? ";
			$data = array("$details->timestamp", "$row->dns_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the dns entry does not exist - insert it
			$sql = "INSERT INTO sys_sw_dns ( system_id, dns_name, dns_full_name, dns_ip_address, timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array(	"$details->system_id", "$input->dns_name", "$input->dns_full_name", 
					"$input->dns_ip_address", "$details->timestamp", "$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	} // end of function

	function alert_dns($details) {
		$sql = "SELECT sys_sw_dns.dns_id, sys_sw_dns.dns_name, sys_sw_dns.dns_ip_address FROM 	
				sys_sw_dns, system WHERE sys_sw_dns.system_id = system.system_id AND
				sys_sw_dns.timestamp = sys_sw_dns.first_timestamp AND sys_sw_dns.timestamp = ? AND
				system.system_id = ? AND system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		foreach ($result as $myrow) { 
			$alert_details = 'dns entry detected - ' . $myrow->dns_name . " for " . $myrow->dns_ip_address;
			$this->m_alerts->generate_alert($details->system_id, 'sys_sw_dns', $myrow->dns_id, $alert_details, $details->timestamp);
		}
	}
}
?>