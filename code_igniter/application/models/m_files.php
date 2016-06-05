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
@version 1.14
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
        $temp = explode(',', $CI->response->properties);
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
        foreach ($CI->response->filter as $item) {
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
        $data = array(intval($CI->response->id));
        $result = $this->run_sql($sql, $data);
        $return_data['files'] = $result;
        return($return_data);
    }

    public function create()
    {
        $CI = & get_instance();
        # check to see if we already have a file with the same name
        $sql = "SELECT COUNT(id) AS count FROM `files` WHERE `path` = ?";
        $data = array($CI->response->post_data['path']);
        $result = $this->run_sql($sql, $data);
        if (intval($result[0]->count) != 0) {
            log_error('ERR-0010', 'm_files::create_file');
            return false;
        }
        $sql = "INSERT INTO `files` VALUES (NULL, ?, ?, ?, ?, NOW())";
        $data = array($CI->response->post_data['org_id'], $CI->response->post_data['path'], $CI->response->post_data['description'], $CI->user->full_name);
        $this->run_sql($sql, $data);
        return $this->db->insert_id();
    }

    public function collection()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $CI->response->internal->filter = $filter;
        $properties = $this->build_properties();
        # get the total number
        $sql = "SELECT count(*) AS count FROM `files` " . $filter . " " . $CI->response->internal->groupby;
        $result = $this->run_sql($sql, array());
        $CI->response->total = intval($result[0]->count);

        $sql = "SELECT " . $CI->response->internal->properties . " FROM files" . $filter . " " . $CI->response->internal->groupby . " " . $CI->response->internal->sort . " " . $CI->response->internal->limit;
        $result = $this->run_sql($sql, array());
        return $result;
    }

    public function update()
    {
        $CI = & get_instance();
        $sql = '';
        $fields = ' path description ';
        foreach ($CI->response->post_data as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `files` " . $sql . ", `edited_by` = '" . $CI->user->full_name . "', `edited_date` = NOW() WHERE id = " . intval($CI->response->id);
        $this->run_sql($sql, array());
        return;
    }

    public function delete()
    {
        $CI = & get_instance();
        $sql = "DELETE FROM `files` WHERE id = ?";
        $data = array(intval($CI->response->id));
        $this->run_sql($sql, $data);
        return;
    }

    private function run_sql($sql, $data = array())
    {
        $CI = & get_instance();
        if ($sql == '') {
            return;
        }
        $trace = debug_backtrace();
        $caller = $trace[1];
        // clean our SQL (usually adding the running model, etc)
        $sql = $this->clean_sql($sql);
        // store the current setting of db_debug
        $temp_debug = $this->db->db_debug;
        // set the db_debug setting to FALSE - this prevents the default CI error page and allows us
        // to output a nice formatted page with the $error object
        $this->db->db_debug = FALSE;
        // run the query
        $query = $this->db->query($sql, $data);
        // if we have debug set to TRUE, store the last run query
        if ($CI->response->debug) {
            $CI->response->sql = $this->db->last_query();
        }
        // restore the origin setting to db_debug
        $this->db->db_debug = $temp_debug;
        // do we have an error?
        if ($this->db->_error_message()) {
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function']));
            $CI->response->errors[count($CI->response->errors)-1]->detail_specific = $this->db->_error_message();
            return false;
        }
        // no error, so get the result
        $result = $query->result();
        // return what we have
        return ($result);
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
