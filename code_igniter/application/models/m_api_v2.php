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
 * @version 1.6.4
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_api extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function groupsGet($user_id = '0')
    {
        $sql = "SELECT
                    oa_group.group_id,
                    oa_group.group_name,
                    oa_group.group_padded_name,
                    oa_group.group_icon,
                    oa_group.group_description,
                    oa_group.group_category,
                    count(oa_group_sys.system_id) AS total
                FROM
                    oa_group,
                    oa_group_user,
                    oa_group_sys
                WHERE
                    oa_group.group_id = oa_group_user.group_id AND
                    oa_group_user.user_id = ? AND
                    oa_group_user.group_user_access_level > 0 AND
                    oa_group.group_id = oa_group_sys.group_id
                GROUP BY
                    oa_group.group_id
                ORDER BY
                    oa_group.group_category,
                    oa_group.group_padded_name";
        $sql = $this->clean_sql($sql);
        $data = array("$user_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }

    public function getGroupDeviceCount($response)
    {
        $sql = "SELECT count(*) as total FROM oa_group_sys WHERE group_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$response->id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        $response->total = $row->total;
    }

    public function groupDevices(&$response)
    {

        if (!isset($response->id)) {
            return;
        }

        $columns = 'system.system_id, system.hostname, system.domain, system.man_description, system.man_ip_address, system.man_type, system.man_os_family, system.man_os_name, system.man_icon, system.man_manufacturer, system.man_model, system.man_serial, system.man_icon, system.type';

        $sql = "SELECT " . $columns . " FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = ? ORDER BY system_id";
        $data = array($response->id);
        $query = $this->db->query($sql, $data);
        if ($query) {
            $response->data = $query->result();
            $response->total = count($response->data);
            $response->filtered = count($response->data);
        } else {
            $response->status = "fail";
        }

        if ($response->length != 0 or $response->start != 0) {
            $sql = "SELECT " . $columns . " FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = ? ORDER BY system_id LIMIT ?, ?";
            $data = array((int)$response->id, (int)$response->start, (int)$response->length);
            $query = $this->db->query($sql, $data);
            $response->data = $query->result();
            $response->filtered = count($response->data);
        }

    }

    public function groupReport($response)
    {
        # $details is an array
        # ->id is the id of the group in question
        # ->report_id is the id of the report
        # ->start which result to send FROM
        # ->length how many results to send

        if (!isset($response->id) or !isset($response->report_id)) {
            # need to throw an error here
            return;
        }

        # get the report sql
        $sql = "SELECT report_sql FROM oa_report WHERE report_id = ? LIMIT 1";
        $data = array($response->report_id);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $key) {
            $sql = $key->report_sql;
        }
        $sql = trim($sql);
        if (strrpos($sql, ';') === (strlen($sql)-1)) {
            $sql = substr($sql, 0, strlen($sql)-1);
        }

        # set the group
        $data = array($response->id);
        $query = $this->db->query('SET @group = ?', $data);

        # get the count of the entire result
        $query = $this->db->query($sql);
        $response->data = $query->result();
        $response->total = count($response->data);
        $response->filtered = count($response->data);

        # only re-run the query if not returning the entire resultset
        if ($response->length != 0 or $response->start != 0) {
            $sql .= " LIMIT ?, ?";
            $data = array((int)$response->start, (int)$response->length);
            $query = $this->db->query($sql, $data);
            $response->data = $query->result();
            $response->filtered = count($response->data);
        }

        unset($sql, $data, $query);
        return($response);
    }
}
