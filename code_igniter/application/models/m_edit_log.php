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
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_edit_log extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($system_id, $details = '',  $db_table = 'system', $db_column = '', $timestamp = '', $value = '', $previous_value = '')
    {
        $system_id = intval($system_id);
        if ($system_id != '' and $system_id != 0) {
            if ($details == '') {
                if (isset($this->session->userdata['user_full_name'])) {
                    $details = $this->session->userdata['user_full_name'] . ' changed data';
                } else {
                    $details = 'Data was changed';
                }
            }
            if ($db_table == '') {
                $db_table = 'system';
            }
            if ($timestamp == '') {
                $timestamp = date('Y-m-d H:i:s');
            }
            $sql = "INSERT INTO edit_log (user_id, system_id, details, source, weight, db_table, db_column, timestamp, value, previous_value) VALUES (?, ?, ?, 'user', 1000, ?, ?, ?, ?, ?)";
            $sql = $this->clean_sql($sql);
            $data = array($this->session->userdata['user_id'], $system_id, "$details", "$db_table", "$db_column", "$timestamp", "$value", "$previous_value");
            $query = $this->db->query($sql, $data);
        }
    }

    public function read($system_id)
    {
        $sql = "SELECT edit_log.*, oa_user.full_name FROM edit_log, oa_user WHERE edit_log.system_id = ? AND oa_user.id = edit_log.user_id";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }
}
