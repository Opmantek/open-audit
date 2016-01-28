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
 * @version 1.10
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_oa_general extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_document_api($table = '', $system_id = '')
    {
        if ($table == '') {
            return;
        }
        if ($table == 'system') {
            $sql = 'SELECT system_id, hostname, fqdn, man_ip_address, man_type, man_class, os_version, man_function, man_environment, man_status, man_description, man_os_group, man_os_family, man_os_name, man_manufacturer, man_model, man_serial, man_form_factor, man_vm_group, uptime, location_name, last_seen, last_seen_by, icon, snmp_oid, sysDescr, sysObjectID, sysUpTime, sysContact, sysName, sysLocation FROM system LEFT JOIN oa_location ON system.man_location_id = oa_location.location_id WHERE system_id = ?';

        } elseif ($table == 'sys_hw_network_card_ip' or $table == 'ip') {
            $sql = 'SELECT ip_address_v4, ip_address_v6, ip_subnet, ip_address_version, sys_hw_network_card_ip.net_mac_address, net_connection_id FROM sys_hw_network_card_ip LEFT JOIN system ON system.system_id = sys_hw_network_card_ip.system_id AND system.timestamp = sys_hw_network_card_ip.timestamp LEFT JOIN network ON sys_hw_network_card_ip.net_index = network.net_index AND sys_hw_network_card_ip.system_id = network.system_id WHERE system.system_id = ? GROUP BY sys_hw_network_card_ip.ip_id';
        }

        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function get_system_document_api_new($table = '', $system_id = '')
    {
        if ($table == '') {
            return;
        }
        $sql = '';
        if ($table == 'system') {
            $sql = 'SELECT system.* FROM system LEFT JOIN oa_location ON system.man_location_id = oa_location.location_id WHERE system_id = ?';

         } elseif ($table == 'sys_hw_network_card_ip') {
            $sql = 'SELECT sys_hw_network_card_ip.* FROM sys_hw_network_card_ip LEFT JOIN system ON system.system_id = sys_hw_network_card_ip.system_id AND system.timestamp = sys_hw_network_card_ip.timestamp LEFT JOIN network ON sys_hw_network_card_ip.net_index = network.net_index WHERE system.system_id = ? GROUP BY sys_hw_network_card_ip.ip_id';
        }
        if ($sql != '') {
            $data = array("$system_id");
            $query = $this->db->query($sql, $data);
            $result = $query->result();

            return ($result);
        }
    }

    public function count_old_attributes($days = 7)
    {
        $tables = $this->db->list_tables();
        $string = '';
        $return = array();
        $object = new stdclass();
        foreach ($tables as $table) {
            if (((strpos($table, 'sys_hw_') !== false) or (strpos($table, 'sys_sw_') !== false)) and (strpos($table, "sys_hw_warranty") === false)) {
                $object->table = '';
                $object->count = '';
                $sql = "SELECT COUNT(*) as count FROM $table LEFT JOIN system ON (system.system_id = $table.system_id)
                WHERE system.timestamp <> $table.timestamp AND DATE($table.timestamp) < DATE_SUB(curdate(), INTERVAL $days day);";
                #$sql = "SELECT COUNT(*) as count FROM $table WHERE current = 'n' AND DATE($table.last_seen) < DATE_SUB(curdate(), INTERVAL $days day);";
                $query = $this->db->query($sql);
                $row = $query->row();
                $object->count = $row->count;
                $object->table = $table;
                $return[] = clone $object;
            }
        }

        return($return);
    }

    public function count_all_hw_attributes()
    {
        $tables = $this->db->list_tables();
        $string = '';
        $return = array();
        $object = new stdclass();
        foreach ($tables as $table) {
            if (strpos($table, 'sys_hw_') !== false and strpos($table, "sys_hw_warranty") === false) {
                $object->table = '';
                $object->count = '';
                $sql = "SELECT COUNT(*) as count FROM $table";
                $query = $this->db->query($sql);
                $row = $query->row();
                $object->count = $row->count;
                $object->table = $table;
                $return[] = clone $object;
            }
        }

        return($return);
    }

    public function count_all_sw_attributes()
    {
        $tables = $this->db->list_tables();
        $string = '';
        $return = array();
        $object = new stdclass();
        foreach ($tables as $table) {
            if (strpos($table, 'sys_sw_') !== false) {
                $object->table = '';
                $object->count = '';
                $sql = "SELECT COUNT(*) as count FROM $table";
                $query = $this->db->query($sql);
                $row = $query->row();
                $object->count = $row->count;
                $object->table = $table;
                $return[] = clone $object;
            }
        }

        return($return);
    }

    public function delete_all_non_current_attributes($days = 365)
    {
        $tables = $this->db->list_tables();
        $count = 0;
        foreach ($tables as $table) {
            if (((strpos($table, 'sys_hw_') !== false) or (strpos($table, 'sys_sw_') !== false)) and (strpos($table, "sys_hw_warranty") === false)) {
                $sql = "DELETE $table FROM $table LEFT JOIN system ON (system.system_id = $table.system_id) WHERE system.timestamp <> $table.timestamp AND DATE($table.timestamp) < DATE_SUB(curdate(), INTERVAL $days day);";
                #$sql = "DELETE $table FROM $table WHERE current = 'n' AND DATE($table.last_seen) < DATE_SUB(curdate(), INTERVAL $days day)";
                $query = $this->db->query($sql);
                $count = $count + $this->db->affected_rows();
            }
        }

        return($count);
    }

    public function delete_table_non_current_attributes($table, $days = 365)
    {
        if (((strpos($table, 'sys_hw_') !== false) or (strpos($table, 'sys_sw_') !== false)) and (strpos($table, "sys_hw_warranty") === false)) {
            $sql = "DELETE $table FROM $table LEFT JOIN system ON (system.system_id = $table.system_id) WHERE system.timestamp <> $table.timestamp AND DATE($table.timestamp) < DATE_SUB(curdate(), INTERVAL $days day);";
            #$sql = "DELETE $table FROM $table WHERE current = 'n' AND DATE($table.last_seen) < DATE_SUB(curdate(), INTERVAL $days day)";
            $query = $this->db->query($sql);
            $count = $this->db->affected_rows();
        }

        return($count);
    }

}
