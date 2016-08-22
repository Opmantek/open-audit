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
 * 
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_attachment extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create_system_attachment($system_id, $title, $name)
    {
        $sql = "INSERT INTO `attachment` (`id`, `system_id`, `user_id`, `title`, `filename`, `timestamp`) VALUES (NULL, ?, ?, ?, ?, ?)";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id", $this->session->userdata['user_id'], "$title", "$name", $this->config->config['timestamp']);
        $query = $this->db->query($sql, $data);
        echo $this->db->last_query();
        return;
    }

    public function get_system_attachment($system_id)
    {
        $sql = "SELECT * FROM `attachment` WHERE `attachment`.`system_id` = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result);
    }

    public function get_attachment($id)
    {
        $sql = "SELECT * FROM attachment WHERE id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        return ($result[0]);
    }

    public function delete_attachment($id)
    {
        $sql = "DELETE FROM attachment WHERE id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        return;
    }
}
