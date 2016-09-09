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
        $sql = $this->collection_sql('fields', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'fields');
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

    public function create()
    {
        $CI = & get_instance();
        # check to see if we already have a file with the same name
        $sql = "SELECT COUNT(id) AS count FROM `additional_field` WHERE `name` = ?";
        $data = array($CI->response->meta->received_data->attributes->name);
        $result = $this->run_sql($sql, $data);
        if (intval($result[0]->count) != 0) {
            log_error('ERR-0010', 'm_fields::create');
            return false;
        }

        $system_fields = $this->db->list_fields('system');
        foreach ($system_fields as $field) {
            if ($CI->response->meta->received_data->attributes->name == $field) {
                log_error('ERR-0010', 'm_fields::create');
                return false;
            }
        }

        $sql = "INSERT INTO `additional_field` VALUES (NULL,?, ?, ?, ?, ?, ?)";
        if (empty($CI->response->meta->received_data->attributes->group_id)) {
            $CI->response->meta->received_data->attributes->group_id = 1;
        }
        if (empty($CI->response->meta->received_data->attributes->values)) {
            $CI->response->meta->received_data->attributes->values = '';
        }
        if (empty($CI->response->meta->received_data->attributes->org_id)) {
            $CI->response->meta->received_data->attributes->org_id = 0;
        }
        $data = array($CI->response->meta->received_data->attributes->org_id,
            $CI->response->meta->received_data->attributes->group_id,
            $CI->response->meta->received_data->attributes->name,
            $CI->response->meta->received_data->attributes->type,
            $CI->response->meta->received_data->attributes->values,
            $CI->response->meta->received_data->attributes->placement);
        $this->run_sql($sql, $data);
        return $this->db->insert_id();
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
