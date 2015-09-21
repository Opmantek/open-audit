<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.8.2
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_audit_log extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_audit_event($field_name, $field_value, $system_id)
    {
        $sql = "INSERT INTO oa_audit_log
				(user_id, system_id, audit_log_event_type, audit_log_event_details, timestamp)
				VALUES (?, ?, ?, ?, ?)";
        $sql = $this->clean_sql($sql);
        $data = array($this->session->userdata['user_id'], "$system_id", 'System Manual Data Changed', "$field_name".' - '."$field_value", date('Y-m-d H:i:s'));
        $query = $this->db->query($sql, $data);
    }

    public function get_audit_log($system_id)
    {
        $sql = "SELECT
				oa_audit_log.user_id,
				oa_audit_log.audit_log_event_type,
				oa_audit_log.audit_log_event_details,
				oa_user.user_full_name,
				oa_audit_log.timestamp
			FROM
				oa_audit_log,
				oa_user
			WHERE
				oa_audit_log.system_id = ? AND
				oa_user.user_id = oa_audit_log.user_id
			ORDER BY
				oa_audit_log.timestamp DESC
			LIMIT 500";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }
}
