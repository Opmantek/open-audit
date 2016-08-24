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
            $sql = 'SELECT system.id AS `system_id`, system.hostname, system.fqdn, system.ip, system.type AS `man_type`, system.class AS `man_class`, system.os_version, system.function AS `man_function`, system.environment AS `man_environment`, system.status AS `man_status`, system.description AS `man_description`, system.os_group AS `man_os_group`, system.os_family AS `man_os_family`, system.os_name AS `man_os_name`, system.manufacturer AS `man_manufacturer`, system.model AS `man_model`, system.serial AS `nan_serial`, system.form_factor AS `man_form_factor`, system.vm_group AS `vm_group`, system.uptime, oa_location.name, system.last_seen, system.last_seen_by, system.icon, system.snmp_oid, system.sysDescr, system.sysObjectID, system.sysUpTime, system.sysContact, system.sysName, system.sysLocation FROM system LEFT JOIN oa_location ON system.location_id = oa_location.id WHERE system.id = ?';
            $sql = $this->clean_sql($sql);

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
            $sql = 'SELECT system.* FROM system LEFT JOIN oa_location ON system.location_id = oa_location.id WHERE system.id = ?';
            $sql = $this->clean_sql($sql);
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
        $tables = array('bios', 'disk', 'dns', 'ip', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'optical', 'partition', 'print_queue', 'processor', 'route', 'san', 'scsi', 'service', 'share', 'software', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
        $string = '';
        $return = array();
        $object = new stdclass();
        foreach ($tables as $table) {
            $object->table = '';
            $object->count = '';
            $sql = "SELECT COUNT(*) as count FROM `$table` WHERE current = 'n' AND DATE(`$table`.last_seen) < DATE_SUB(curdate(), INTERVAL $days day)";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $row = $query->row();
            $object->count = $row->count;
            $object->table = $table;
            $return[] = clone $object;
        }
        return($return);
    }

    public function count_all_hw_attributes()
    {
        $tables = array('bios', 'disk', 'dns', 'ip', 'memory', 'module', 'monitor', 'motherboard', 'network', 'optical', 'partition', 'processor', 'san', 'scsi', 'sound', 'video', 'vm');
        $string = '';
        $return = array();
        $object = new stdclass();
        foreach ($tables as $table) {
            $object->table = '';
            $object->count = '';
            $sql = "SELECT COUNT(*) as count FROM `$table`";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $row = $query->row();
            $object->count = $row->count;
            $object->table = $table;
            $return[] = clone $object;
        }
        return($return);
    }

    public function count_all_sw_attributes()
    {
        $tables = array('netstat', 'print_queue', 'route', 'service', 'share', 'software', 'task', 'user', 'user_group', 'variable', 'windows');
        $string = '';
        $return = array();
        $object = new stdclass();
        foreach ($tables as $table) {
            $object->table = '';
            $object->count = '';
            $sql = "SELECT COUNT(*) as count FROM `$table`";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $row = $query->row();
            $object->count = $row->count;
            $object->table = $table;
            $return[] = clone $object;
        }
        return($return);
    }

    public function delete_all_non_current_attributes($days = 365)
    {
        $tables = array('bios', 'disk', 'dns', 'ip', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'optical', 'partition', 'print_queue', 'processor', 'route', 'san', 'scsi', 'service', 'share', 'software', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
        $count = 0;
        foreach ($tables as $table) {
            $sql = "DELETE `$table` FROM `$table` WHERE current = 'n' AND DATE($table.last_seen) < DATE_SUB(curdate(), INTERVAL $days day)";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $count = $count + $this->db->affected_rows();
        }

        return($count);
    }

    public function delete_table_non_current_attributes($table, $days = 365)
    {
        $sql = "DELETE `$table` FROM `$table` WHERE current = 'n' AND DATE($table.last_seen) < DATE_SUB(curdate(), INTERVAL $days day)";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $count = $this->db->affected_rows();
        return($count);
    }

}
