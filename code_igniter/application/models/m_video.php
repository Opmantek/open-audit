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

class M_video extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	function get_system_video($system_id) {
		$sql = "SELECT 
				video_id, 
				video_description, 
				video_manufacturer, 
				video_memory, 
				video_caption
			FROM 
				sys_hw_video,
				system
			WHERE 
				sys_hw_video.system_id = system.system_id AND
				sys_hw_video.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY video_id";
		$sql = $this->clean_sql($sql);
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function process_video_cards($input, $details) {
		// need to check for video card changes
		$sql = "SELECT sys_hw_video.video_id 
				FROM sys_hw_video, system 
				WHERE sys_hw_video.system_id = system.system_id AND 
					system.system_id = ? AND 
					system.man_status = 'production' AND 
					video_description = ? AND 
					( sys_hw_video.timestamp = ? OR 
					sys_hw_video.timestamp = ? )";
		$sql = $this->clean_sql($sql);
		$data = array("$details->system_id",  
				"$input->video_description", 
				"$details->original_timestamp", 
				"$details->timestamp");
		$query = $this->db->query($sql, $data);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			// the video card exists - need to update its timestamp
			$sql = "UPDATE sys_hw_video SET timestamp = ? WHERE video_id = ?";
			$data = array("$details->timestamp", "$row->video_id");
			$query = $this->db->query($sql, $data);
		} else {
			// the video card does not exist - insert it
			$sql = "INSERT INTO sys_hw_video (	system_id, 
										video_manufacturer, 
										video_description, 
										video_memory, 
										timestamp,
										first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ? )";
			$sql = $this->clean_sql($sql);
			$data = array("$details->system_id", 
					"$input->video_manufacturer", 
					"$input->video_description", 
					"$input->video_memory", 
					"$details->timestamp", 
					"$details->timestamp");
			$query = $this->db->query($sql, $data);
		}
	}

	function alert_video($details) {
		// video no longer detected
		$sql = "SELECT sys_hw_video.video_id, sys_hw_video.video_description
				FROM 	sys_hw_video, system
				WHERE 	sys_hw_video.system_id = system.system_id AND
						sys_hw_video.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->original_timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'video card removed - ' . $myrow->video_description;
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_video', $myrow->video_id, $alert_details, $details->timestamp);
		}

		// new video card
		$sql = "SELECT  sys_hw_video.video_id, sys_hw_video.video_description
				FROM 	sys_hw_video, system
				WHERE 	sys_hw_video.system_id = system.system_id AND
						sys_hw_video.timestamp = sys_hw_video.first_timestamp AND
						sys_hw_video.timestamp = ? AND
						system.system_id = ? AND
						system.timestamp = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->timestamp", "$details->system_id", "$details->timestamp");
		$query = $this->db->query($sql, $data);
		foreach ($query->result() as $myrow) {
			$alert_details = 'video card installed - ' . $myrow->video_description;
			$this->m_alerts->generate_alert($details->system_id, 'sys_hw_video', $myrow->video_id, $alert_details, $details->timestamp);
		}
	}
}
?>