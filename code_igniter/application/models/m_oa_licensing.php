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
class M_oa_licensing extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function software_licensing_report($id)
    {
        $sql = "SELECT COUNT(DISTINCT system.system_id) AS software_count,
    				software.name,
    				software.version,
    				software.publisher,
    				software.id,
    				software.type,
    				round(sum(oa_asset_select.group_amount)/COUNT(DISTINCT system.system_id), 0) as software_licenses,
    				oa_asset_select.select_id
				FROM
				    software
				LEFT JOIN system ON (software.system_id = system.system_id and software.current = 'y')
				LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id)
				LEFT JOIN oa_asset_select ON (software.name = oa_asset_select.select_name AND oa_asset_select.group_id = ? )
				WHERE
				    oa_group_sys.group_id = ?
				GROUP BY
				    software.name, software.version
				ORDER BY software.name";
        $sql = $this->clean_sql($sql);
        $data = array($id, $id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function change_license($group_id, $licenses, $software_name)
    {
        # work out if a license entry already exists
        $sql = "SELECT * FROM oa_asset_select WHERE select_name = ? AND group_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array($software_name, $group_id);
        $query = $this->db->query($sql, $data);
        if ($query->num_rows() > 0) {
            # we have an existing match - need to run an update
            $sql = "UPDATE oa_asset_select SET group_amount = ? WHERE select_name = ? AND group_id = ?";
            $sql = $this->clean_sql($sql);
            $data = array("$licenses", "$software_name", "$group_id");
            $query = $this->db->query($sql, $data);
        } else {
            # this is a new license - need to insert
            $sql = "INSERT INTO oa_asset_select VALUES(NULL, ?, 'sw', '', ?, ?)";
            $sql = $this->clean_sql($sql);
            $data = array("$software_name", "$group_id", "$licenses");
            $query = $this->db->query($sql, $data);
        }
    }
}
