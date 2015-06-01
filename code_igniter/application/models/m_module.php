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
 * @version 1.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_module extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_module($system_id)
    {
        $sql = "SELECT sys_hw_module.* FROM sys_hw_module LEFT JOIN system ON (system.system_id = sys_hw_module.system_id AND system.timestamp = sys_hw_module.timestamp) WHERE
				system.system_id = ? ";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_module($input, $details)
    {
        // delete all modules
        $sql = "DELETE FROM sys_hw_module WHERE sys_hw_module.system_id = ? AND sys_hw_module.timestamp != ?";
        $data = array("$details->system_id", "$details->timestamp");
        $query = $this->db->query($sql, $data);
        // insert the modules
        $sql = "INSERT INTO sys_hw_module (	system_id, description, module_index, object_id, contained_in, class,
			class_text, hardware_revision, firmware_revision, software_revision, serial_number, asset_id, is_fru, timestamp, first_timestamp )
			VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
        $sql = $this->clean_sql($sql);
        $data = array("$details->system_id",
                "$input->description",
                "$input->module_index",
                "$input->object_id",
                "$input->contained_in",
                "$input->class",
                "$input->class_text",
                "$input->hardware_revision",
                "$input->firmware_revision",
                "$input->software_revision",
                "$input->serial_number",
                "$input->asset_id",
                "$input->is_fru",
                "$details->timestamp",
                "$details->timestamp", );
        $query = $this->db->query($sql, $data);
    }
}
