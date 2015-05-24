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
class M_groups extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read_groups()
    {
        $sql = "SELECT oa_group.group_id, oa_group.group_name, oa_group.group_padded_name, oa_group.group_icon, oa_group.group_description, oa_group.group_category, count(oa_group_sys.system_id) AS total FROM oa_group, oa_group_user, oa_group_sys WHERE oa_group.group_id = oa_group_user.group_id AND oa_group_user.user_id = ? AND oa_group_user.group_user_access_level > 0 AND oa_group.group_id = oa_group_sys.group_id GROUP BY oa_group.group_id ORDER BY oa_group.group_category, oa_group.group_padded_name";
        $data = array($this->user->user_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }

    public function devices_in_group($group_id)
    {
        $sql = "SELECT system.icon, system.id, system.name, system.domain, system.description, system.os_family FROM system LEFT JOIN oa_group_sys ON system.id = oa_group_sys.system_id WHERE oa_group_sys.group_id = ?";
        $data = array($group_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }

    public function read_group($group_id)
    {
        $sql = "SELECT * from oa_group WHERE group_id = ?";
        $data = array($group_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }

}
