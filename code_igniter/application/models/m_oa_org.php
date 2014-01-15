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
 * @version 1.1.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class M_oa_org extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	
	function check_org_name($org_name, $org_id) {
		$sql = "SELECT org_id FROM oa_org WHERE org_name = ? AND org_id <> ?";
		$data = array($org_name, $org_id);
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		if ($query->num_rows() > 0) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

	function get_group_id($org_id) {
		$sql = "SELECT org_group_id FROM oa_org WHERE org_id = ? LIMIT 1";
		$data = array("$org_id");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		return ($row->org_group_id);
	}

	function set_group_id($org_id, $group_id) {
		$sql = "UPDATE oa_org SET org_group_id = ? WHERE org_id = ? ";
		$data = array("$group_id", "$org_id");
		$query = $this->db->query($sql, $data);
	}

	function select_org($org_name) {
		$sql = "SELECT org_id FROM oa_org WHERE org_name = ? LIMIT 1";
		$data = array("$org_name");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		if ($query->num_rows() > 0) {
			$row = $query->row(); 
			return ($row->org_id);
		} else {
			return null;
		}
	}

	function get_org_details($org_id) {
		$sql = "SELECT o1.*, o2.org_name as org_parent_name, count(oa_group_sys.system_id) as total FROM oa_org o1 LEFT JOIN oa_org o2 ON o1.org_parent_id = o2.org_id LEFT JOIN oa_group_sys ON oa_group_sys.group_id = o1.org_group_id where o1.org_id = ? GROUP BY o1.org_id LIMIT 1";
		$data = array("$org_id");
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		return ($row);
	}

	function get_org_name($id) {
		$sql = "SELECT org_name FROM oa_org WHERE org_id = ? LIMIT 1";
		$data = array($id);
		$query = $this->db->query($sql, $data);
		$row = $query->row();
		return ($row->org_name);

	}

	function get_all_orgs() {
		$sql = "SELECT o1.*, o2.org_name as org_parent_name, count(oa_group_sys.system_id) as total FROM oa_org o1 LEFT JOIN oa_org o2 ON o1.org_parent_id = o2.org_id LEFT JOIN oa_group_sys ON oa_group_sys.group_id = o1.org_group_id GROUP BY o1.org_id ORDER BY o1.org_name";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}

	function get_org_names() {
		$sql = "SELECT org_name, org_id FROM oa_org ORDER BY org_name";
		$query = $this->db->query($sql);
		$result = $query->result();
		return ($result);
	}
	
	function get_system_org($system_id) {
		$sql = "SELECT a.*, b.org_name as org_parent_name FROM oa_org a LEFT JOIN system ON a.org_id = system.man_org_id LEFT JOIN oa_org b ON b.org_id = a.org_parent_id WHERE system.system_id = ?";
		$data = array($system_id);
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);
	}

	function add_org($details) {
		$sql = "INSERT INTO 
				oa_org 
				(org_name, 
				org_parent_id, 
				contact_id, 
				org_picture) 
			VALUES (?, ?, ?, ?)";
		$sql = $this->clean_sql($sql);
		$data = array("$details->org_name", 
			"$details->org_parent_id", 
			"$details->contact_id", 
			"$details->org_picture");
		$query = $this->db->query($sql, $data);
		return ($this->db->insert_id());
	}

	function delete_org($org_id) {
		$sql = "DELETE FROM oa_org WHERE org_id = ?";
		$data = array("$org_id");
		$query = $this->db->query($sql, $data);
		$sql = "UPDATE system SET man_org_id = '' WHERE man_org_id = ?";
		$data = array("$org_id");
		$query = $this->db->query($sql, $data);
	}

	function edit_org($details) {
		$sql = "UPDATE 
				oa_org
			SET
				org_name = ?, 
				org_parent_id = ?, 
				contact_id = ?, 
				org_picture = ?, 
				org_comments = ? 
			WHERE
				org_id = ?";
		$sql = $this->clean_sql($sql);
		$data = array("$details->org_name", 
			"$details->org_parent_id", 
			"$details->contact_id", 
			"$details->org_picture", 
			"$details->org_comments", 
			"$details->org_id");
		$query = $this->db->query($sql, $data);
		return(TRUE);
	}
	
	function list_devices_in_org($org_id = 0, $user_id = 0) {
		// we have not requested a specific group.
		// display all items the current user has at least 'level 3' - view list rights on.
		$sql = "
			SELECT 
				system.system_id, 
				system.hostname, 
				system.man_description, 
				system.man_ip_address, 
				system.man_icon, 
				system.man_os_name, 
				system.man_os_family 
			FROM 
				system, 
				oa_group, 
				oa_group_sys, 
				oa_group_user 
			WHERE 
				system.system_id IN ( 
					SELECT 
						system.system_id 
					FROM 
						system, 
						oa_group_sys, 
						oa_group, 
						oa_group_user 
					WHERE 
						system.man_status = 'production' AND 
						system.system_id = oa_group_sys.system_id AND 
						oa_group_sys.group_id = oa_group.group_id AND 
						oa_group.group_id = oa_group_user.group_id AND 
						oa_group_user.user_id = ? 
						) AND 
				system.system_id = oa_group_sys.system_id AND 
				oa_group_sys.group_id = oa_group.group_id AND 
				oa_group.group_id = oa_group_user.group_id AND 
				oa_group_user.group_user_access_level > '2' AND
				oa_group_user.user_id = ? AND 
				system.man_org_id = ? 
			GROUP BY 
				system.system_id
			";
		$sql = $this->clean_sql($sql);
		$data = array("$user_id", "$user_id", "$org_id");
		$query = $this->db->query($sql, $data);
		$result = $query->result();
		return ($result);	
	}
}
?>