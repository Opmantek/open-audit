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
class M_files extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private function build_properties() {
        $CI = & get_instance();
        $properties = '';
        $temp = explode(',', $CI->response->meta->properties);
        for ($i=0; $i<count($temp); $i++) {
            $temp[$i] = trim($temp[$i]);
        }
        $properties = implode(',', $temp);
        return($properties);
    }

    private function build_filter() {
        $CI = & get_instance();
        $reserved = ' properties limit sub_resource action sort current offset format ';
        $filter = '';
        foreach ($CI->response->meta->filter as $item) {
            if (strpos(' '.$item->name.' ', $reserved) === false) {
                if (!empty($item->name)) {
                    if ($filter != '') {
                        $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
                    } else {
                        $filter = ' WHERE ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
                    }
                }
            }
        }
        return($filter);
    }


    public function read()
    {
        $CI = & get_instance();
        $return_data = array();
        $sql = "SELECT * FROM files WHERE id = ?";
        $data = array(intval($CI->response->meta->id));
        $result = $this->run_sql($sql, $data);
        $return_data['files'] = $result;
        return($return_data);
    }

    public function create()
    {
        $CI = & get_instance();
        # check to see if we already have a file with the same name
        $sql = "SELECT COUNT(id) AS count FROM `files` WHERE `path` = ?";
        $data = array($CI->response->meta->received_data['path']);
        $result = $this->run_sql($sql, $data);
        if (intval($result[0]->count) != 0) {
            log_error('ERR-0010', 'm_files::create_file');
            return false;
        }
        $sql = "INSERT INTO `files` VALUES (NULL, ?, ?, ?, ?, NOW())";
        $data = array($CI->response->meta->received_data['org_id'], $CI->response->meta->received_data['path'], $CI->response->meta->received_data['description'], $CI->user->full_name);
        $this->run_sql($sql, $data);
        return $this->db->insert_id();
    }

    public function collection()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $CI->response->meta->internal->filter = $filter;
        $properties = $this->build_properties();
        # get the total number
        $sql = "SELECT count(*) AS count FROM `files` " . $filter . " " . $CI->response->meta->internal->groupby;
        $result = $this->run_sql($sql, array());
        $CI->response->meta->total = intval($result[0]->count);

        $sql = "SELECT " . $CI->response->meta->internal->properties . " FROM files" . $filter . " " . $CI->response->meta->internal->groupby . " " . $CI->response->meta->internal->sort . " " . $CI->response->meta->internal->limit;
        $result = $this->run_sql($sql, array());
        return $result;
    }

    public function update()
    {
        $CI = & get_instance();
        $sql = '';
        $fields = ' path description ';
        foreach ($CI->response->meta->received_data as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `files` " . $sql . ", `edited_by` = '" . $CI->user->full_name . "', `edited_date` = NOW() WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql, array());
        return;
    }

    public function delete()
    {
        $CI = & get_instance();
        $sql = "DELETE FROM `files` WHERE id = ?";
        $data = array(intval($CI->response->meta->id));
        $this->run_sql($sql, $data);
        return;
    }

    private function count_data($result)
    {
        // do we have any retrieved rows?
        $CI = & get_instance();
        $trace = debug_backtrace();
        $caller = $trace[1];
        if (count($result) == 0) {
            log_error('ERR-0005', strtolower(@$caller['class'] . '::' . @$caller['function']));
        }
    }

}
