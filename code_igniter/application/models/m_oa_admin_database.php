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
class M_oa_admin_database extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function count_systems()
    {
        $sql = "SELECT count(*) as count FROM system";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();
        return($row->count);
    }

    public function statistics()
    {
        $sql = "SELECT type, os_family, COUNT(*) as count FROM system WHERE man_status = 'production' GROUP BY type, os_family ";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        return ($result);
    }

    public function get_tables_and_row_count()
    {
        $result = $this->db->list_tables();
        $count = 0;
        foreach ($result as $table) {
            $rows = $this->db->count_all($table);
            $returned[$count]['table'] = $table;
            $returned[$count]['rows'] = $rows;
            $count++;
        }
        return ($returned);
    }

    public function export_table($table)
    {
        $sql = "SELECT * FROM `$table`";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        return ($result);
    }

    public function get_tables()
    {
        $result = $this->db->list_tables();
        return ($result);
    }

    public function get_fields($table)
    {
        $fields_in_table = $this->db->list_fields($table);
        $result = array();
        foreach ($fields_in_table as $field_in_table) {
            if ((mb_strpos($field_in_table, '_id') === false) and (mb_strpos($field_in_table, 'timestamp') === false)) {
                $result[] = $field_in_table;
            }
        }
        return ($result);
    }

    public function get_field_values($table, $field)
    {
        $sql = "SELECT DISTINCT($field) AS value FROM `$table` ORDER BY value";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        return ($result);
    }

    public function backup_database()
    {
        // NOTE - this only works on Linux at the moment
        $directory = '/tmp/';
        $filename = "open-audit_database_backup_".date("Y_m_d_H_i_s").".sql";
        $dump_command = 'mysqldump -h '.$this->db->hostname.' -u '.$this->db->username.' -p'.$this->db->password.' '.$this->db->database.' > '.$directory.$filename;
        exec($dump_command);
        $this->load->helper('download');
        $file_contents = file_get_contents($directory.$file);
        force_download($filename, $file_contents);
        unlink($directory.$filename);
    }

    public function count_all_rows($table = 'oa_temp')
    {
        $sql = "SELECT COUNT(*) AS count FROM `$table`";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();
        return ($row->count);
    }

    public function delete_all_rows($table = 'oa_temp')
    {
        $sql = "DELETE FROM `$table`";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        return($this->db->affected_rows());
    }
}
