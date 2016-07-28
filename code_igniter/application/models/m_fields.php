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
class M_fields extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM `additional_field` WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'fields');
        return ($result);
    }

    public function collection()
    {
        $CI = & get_instance();
        if ($CI->response->meta->collection == 'fields') {
            # get the total location count
            $sql = "SELECT COUNT(*) as `count` FROM `additional_field`";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $result = $query->result();
            $CI->response->meta->total = intval($result[0]->count);
            # and set a limit
            $limit = $CI->response->meta->internal->limit;
        } else {
            $limit = '';
        }

        $sql = "SELECT `additional_field`.*, oa_group.group_name as `group_name` FROM `additional_field`  LEFT JOIN oa_group ON (additional_field.group_id = oa_group.group_id) GROUP BY additional_field.id " . $limit;
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'locations');
        return ($result);
    }

    public function delete($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if ($id != 0) {
            $CI = & get_instance();
            $sql = "DELETE FROM `additional_field` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        } else {
            return false;
        }
    }

    public function update()
    {
        $CI = & get_instance();
        $sql = '';
        $fields = ' name type values placement group_id ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `additional_field` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql, array());
        return;
    }

}
