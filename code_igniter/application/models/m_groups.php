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
 * @version 1.14
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_groups extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function create($data = null)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data';
        stdlog($this->log);
        $CI = & get_instance();
        $data_array = array();
        $sql = "INSERT INTO `groups` (";
        $sql_data = "";
        if (is_null($data)) {
            if (!empty($CI->response->meta->received_data->attributes)) {
                $data = $CI->response->meta->received_data->attributes;
            } else {
                log_error('ERR-0010', 'm_groups::create');
                return false;
            }
        }
        // TODO - fix the second test below to use a regex to account for multiple spaces
        if (stripos($data->sql, 'where @filter') === false or stripos($data->sql, 'where @filter or') !== false) {
            // We don't have the HIGHLY RECOMMENDED @filter in our SQL
            // Ensure the user creating this query has the admin role
            $allowed = false;
            foreach ($CI->user->roles as $key => $value) {
                if ($value == 'admin') {
                    $allowed = true;
                }
            }
            if (!$allowed) {
                unset($allowed);
                log_error('ERR-0022', 'm_groups::create');
                return false;
            }
            unset($allowed);
        }
        foreach ($this->db->field_data('groups') as $field) {
            if (!empty($data->{$field->name}) and $field->name != 'id') {
                $sql .= "`" . $field->name . "`, ";
                $sql_data .= "?, ";
                $data_array[] = (string)$data->{$field->name};
            }
        }
        if (count($data_array) == 0 or empty($data->org_id) or empty($data->name) or empty($data->sql)) {
            log_error('ERR-0021', 'm_groups::create');
            return false;
        }
        $sql .= 'edited_by, edited_date';        // the user.name and timestamp
        $sql_data .= '?, NOW()';                 // the user.name and timestamp
        $data_array[] = $CI->user->full_name;    // the user.name
        $sql .= ") VALUES (" . $sql_data . ")";
        $id = intval($this->run_sql($sql, $data_array));
        return ($id);
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM groups WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'groups');
        return ($result);
    }

    public function update()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $CI = & get_instance();
        $sql = '';
        $data_items = array();
        $fields = ' name org_id description sql ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if ($key == 'sql') {
                // TODO - fix the second test below to use a regex to account for multiple spaces
                if (stripos($value, 'where @filter') === false or stripos($value, 'where @filter or') !== false) {
                    // We don't have the HIGHLY RECOMMENDED @filter in our SQL
                    // Ensure the user creating this query has the admin role
                    $allowed = false;
                    foreach ($CI->user->roles as $item => $string) {
                        if ($string == 'admin') {
                            $allowed = true;
                        }
                    }
                    if (!$allowed) {
                        unset($allowed);
                        log_error('ERR-0022', 'm_groups::create');
                        return false;
                    }
                    unset($allowed);
                }
            }
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = ?";
                } else {
                    $sql .= ", `" . $key . "` = ?";
                }
                $data_items[] = $value;
            }
        }
        $sql = "UPDATE `groups` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql, $data_items);
        return;
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if ($id != 1) {
            $CI = & get_instance();
            $sql = "DELETE FROM `groups` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        } else {
            log_error('ERR-0013', 'm_groups::delete');
            return false;
        }
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $sql = "SELECT groups.*, oa_org.name AS `org_name` FROM groups LEFT JOIN oa_org ON (groups.org_id = oa_org.id) WHERE groups.org_id IN (" . $CI->user->org_list . ") GROUP BY groups.name";
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'groups');
        return ($result);
    }
}
