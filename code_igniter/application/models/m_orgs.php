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
class M_orgs extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($data = null)
    {
        $CI = & get_instance();
        $data_array = array();
        $sql = "INSERT INTO `oa_org` (";
        $sql_data = "";
        if (is_null($data)) {
            if (!empty($CI->response->meta->received_data->attributes)) {
                $data = $CI->response->meta->received_data->attributes;
            } else {
                log_error('ERR-0010', 'orgs::create');
                return false;
            }
        }
        foreach ($this->db->field_data('oa_org') as $field) {
            if (!empty($data->{$field->name}) and $field->name != 'id') {
                $sql .= "`" . $field->name . "`, ";
                $sql_data .= "?, ";
                $data_array[] = (string)$data->{$field->name};
            }
        }
        if (count($data_array) == 0 or empty($data->name)) {
            log_error('ERR-0021', 'orgs::create');
            return false;
        }
        $sql .= 'edited_by, edited_date';        // the user.name and timestamp
        $sql_data .= '?, NOW()';                 // the user.name and timestamp
        $data_array[] = $CI->user->full_name;    // the user.name
        #if (empty($data->ad_group)) {
            $sql .= ',ad_group';
            $sql_data .= ',?';
            $data_array[] = 'open-audit_orgs_' . strtolower(str_replace(' ', '_', $data->name));
        #}
        $sql .= ") VALUES (" . $sql_data . ")";
        $this->run_sql($sql, $data_array);
        return $this->db->insert_id();
    }

    public function read($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT oa_org.*, COUNT(DISTINCT system.id) as `device_count` FROM oa_org LEFT JOIN system ON (oa_org.id = system.org_id) WHERE oa_org.id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'orgs');
        return ($result);
    }

    public function read_sub_resource($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT `type`, count(`system`.`id`) as `count`, org_id FROM `system` WHERE system.org_id = ? AND system.status = 'production' GROUP BY `system`.`type`";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (count($result) == 0) {
            return false;
        } else {
            $result = $this->format_data($result, 'devices');
            return ($result);
        }
    }

    public function collection()
    {
        $CI = & get_instance();
        $sql = $this->collection_sql('orgs', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'orgs');
        return ($result);
    }

    public function update()
    {
        $CI = & get_instance();
        $sql = '';
        $fields = ' name comments parent_id ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `oa_org` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql, array());
        return;
    }

    public function delete($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if ($id != 1) {
            $sql = "DELETE FROM `oa_org` WHERE id = ?";
            $data = array($id);
            $this->run_sql($sql, $data);
            return true;
        } else {
            log_error('ERR-0013', 'm_orgs::delete');
            return false;
        }
    }

    public function get_orgs()
    {
        $CI = & get_instance();
        $sql = "SELECT o1.*, o2.name as parent_name, count(system.id) as device_count FROM oa_org o1 LEFT JOIN oa_org o2 ON o1.parent_id = o2.id LEFT JOIN system ON (o1.id = system.org_id) WHERE o1.id IN (" . $CI->user->org_list . ") GROUP BY o1.id ";
        $result = $this->run_sql($sql, $data);
        // $sql = $this->clean_sql($sql);
        // $temp_debug = $this->db->db_debug;
        // $this->db->db_debug = false;
        // $query = $this->db->query($sql);
        // $this->db->db_debug = $temp_debug;
        // $result = $query->result();
        return($result);
    }

    public function get_children($org_id)
    {
        $org_list = array();
        if (empty($this->orgs)) {
            $sql = "SELECT * FROM oa_org";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $this->orgs = $query->result();
        }
        foreach ($this->orgs as $org) {
            if ($org->parent_id == $org_id and $org->id != 1) {
                $org_list[] = intval($org->id);
                foreach ($this->get_children($org->id) as $org) {
                    $org_list[] = intval($org);
                }
            }
        }
        return($org_list);
    }
}
