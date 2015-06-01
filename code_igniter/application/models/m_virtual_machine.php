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
class M_virtual_machine extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_vm($system_id)
    {
        $sql = "SELECT sys_sw_virtual_machine.*, system_guest.man_icon
			FROM
				sys_sw_virtual_machine
				LEFT JOIN system ON (sys_sw_virtual_machine.system_id = system.system_id AND sys_sw_virtual_machine.timestamp = system.timestamp)
				LEFT JOIN system system_guest ON (sys_sw_virtual_machine.guest_system_id = system_guest.system_id)
			WHERE
				system.system_id = ? ";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_vm($input, $details)
    {
        # make sure group is set
        if (!isset($input->vm_group)) {
            $input->vm_group = '';
        }

        # make sure guest_system_id is set
        if (!isset($input->guest_system_id)) {
            $input->guest_system_id = '';
        }

        # attempt to match system_id
        if ($input->guest_system_id == '') {
            $sql = "SELECT system_id FROM system WHERE uuid = LOWER(?) and man_status = 'production'";
            $data = array(strtolower("$input->uuid"));
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $input->guest_system_id = $row->system_id;
            }
        }

        # update the system table
        if ($input->guest_system_id != '') {
            $sql = "UPDATE system SET man_vm_server_name = ?, man_vm_system_id = ? WHERE system_id = ?";
            $data = array("$details->hostname", "$details->system_id", "$input->guest_system_id");
            $query = $this->db->query($sql, $data);
        }

        # check for virtual machine changes
        $sql = "SELECT
				sys_sw_virtual_machine.id
			FROM
				sys_sw_virtual_machine LEFT JOIN system ON
					(sys_sw_virtual_machine.system_id = system.system_id AND
						sys_sw_virtual_machine.timestamp = system.timestamp)
			WHERE
				system.system_id = ? AND
				sys_sw_virtual_machine.uuid = ? AND
				( sys_sw_virtual_machine.timestamp = ? OR sys_sw_virtual_machine.timestamp = ? )
			LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array(    "$details->system_id",
                "$input->uuid",
                "$details->original_timestamp",
                "$details->timestamp",    );
        $query = $this->db->query($sql, $data);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            // the vm exists - need to update it
            $sql = "UPDATE sys_sw_virtual_machine SET guest_system_id = ?, status = ?, timestamp = ? WHERE id = ? ";
            $data = array("$input->guest_system_id", "$input->status", "$details->timestamp", "$row->id");
            $query = $this->db->query($sql, $data);
        } else {
            // the vm does not exist - insert it
            $sql = "INSERT INTO sys_sw_virtual_machine
				( 	system_id,
					guest_system_id,
					name,
					vm_id,
					uuid,
					vm_group,
					config_file,
					memory,
					cpu,
					status,
					timestamp,
					first_timestamp )
				VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->guest_system_id",
                    "$input->name",
                    "$input->vm_id",
                    "$input->uuid",
                    "$input->vm_group",
                    "$input->config_file",
                    "$input->memory",
                    "$input->cpu",
                    "$input->status",
                    "$details->timestamp",
                    "$details->timestamp",    );
            $query = $this->db->query($sql, $data);
        }
    } // end of function

    public function alert_vm($details)
    {
        // vm no longer detected
        $sql = "SELECT id, name FROM sys_sw_virtual_machine WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'vm removed - '.$myrow->name;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_virtual_machine', $myrow->id, $alert_details, $details->timestamp);
        }

        // only detect new VM
        $sql = "SELECT sys_sw_virtual_machine.id, sys_sw_virtual_machine.name
			FROM
				sys_sw_virtual_machine LEFT JOIN system ON (sys_sw_virtual_machine.system_id = system.system_id)
			WHERE
				sys_sw_virtual_machine.system_id = ? AND
				sys_sw_virtual_machine.first_timestamp = ? AND
				sys_sw_virtual_machine.first_timestamp = sys_sw_virtual_machine.timestamp AND
				sys_sw_virtual_machine.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");

        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $myrow) {
            $alert_details = 'vm guest installed - '.$myrow->name;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_virtual_machine', $myrow->id, $alert_details, $details->timestamp);
        }
    }
}
