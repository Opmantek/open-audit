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
class M_scripts extends MY_Model
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
        $sql = "SELECT * FROM scripts WHERE id = ?";
        $data = array(intval($CI->response->id));
        $result = $this->run_sql($sql, $data);
        $return_data['scripts'] = $result;
        return($return_data);
    }

    public function create()
    {
        $CI = & get_instance();
        # check to see if we already have a script with the same name
        $sql = "SELECT COUNT(id) AS count FROM `scripts` WHERE `name` = ?";
        $data = array($CI->response->received_data['name']);
        $result = $this->run_sql($sql, $data);
        if (intval($result[0]->count) != 0) {
            log_error('ERR-0010', 'm_scripts::create_script');
            return false;
        }
        $sql = "INSERT INTO `scripts` VALUES (NULL, ?, ?, ?, ?, ?, ?, NOW())";
        $data = array(  $CI->response->received_data['name'], 
                        json_encode($CI->response->received_data['options']), 
                        $CI->response->received_data['description'], 
                        $CI->response->received_data['based_on'], 
                        '', 
                        $CI->user->full_name);
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
        $sql = "SELECT count(*) AS count FROM `scripts` " . $filter . " " . $CI->response->meta->internal->groupby;
        $result = $this->run_sql($sql, array());
        $CI->response->total = intval($result[0]->count);

        $sql = "SELECT " . $CI->response->meta->internal->properties . " FROM scripts" . $filter . " " . $CI->response->meta->internal->groupby . " " . $CI->response->meta->internal->sort . " " . $CI->response->meta->internal->limit;
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'scripts');
        return $result;
    }

    public function execute($id = 0)
    {
        $CI = & get_instance();
        $script_id = 0;
        if (empty($id)) {
            return;
        }
        $sql = "SELECT * FROM scripts WHERE id = ?";
        $result = $this->run_sql($sql, array(intval($id)));
        $data = $result[0];
        $filename = $CI->config->item('base_path') . '/other/' . $data->based_on;
        if (! file_exists($filename)) {
            # TODO - insert an error
            return;
        }
        $file = file_get_contents($filename);
        $options = json_decode($data->options);

        $find = 'Configuration from web UI here';
        foreach ($options as $key => $value) {
            if ($key != 'files') {
                $replace = $find . "\n" . $key . "=\"" . $value . "\"";
                $file = str_replace($find, $replace, $file);
            }
        }

        if (isset($options->files) and is_array($options->files) and count($options->files) > 0) {
            foreach (array_reverse($options->files) as $key => $value) {
                if ($data->based_on != 'audit_windows.vbs') {
                    $replace = $find . "\nfiles[".intval($key+1)."]=\"" . $value . "\"";
                } else {
                    $replace = $find . "\nfiles(".intval($key+1).")=\"" . $value . "\"";
                }
                $file = str_replace($find, $replace, $file);
            }
            if ($data->based_on == 'audit_windows.vbs') {
                $replace = $find . "\ndim files(".count($options->files).")";
                $file = str_replace($find, $replace, $file);
            }
        }
        return $file;
    }

    public function update()
    {
        // $CI = & get_instance();
        // $sql = '';
        // $fields = ' name description ';
        // foreach ($CI->response->received_data as $key => $value) {
        //     if (strpos($fields, ' '.$key.' ') !== false) {
        //         if ($sql == '') {
        //             $sql = "SET `" . $key . "` = '" . $value . "'";
        //         } else {
        //             $sql .= ", `" . $key . "` = '" . $value . "'";
        //         }
        //     }
        // }
        // $sql = "UPDATE `files` " . $sql . ", `edited_by` = '" . $CI->user->full_name . "', `edited_date` = NOW() WHERE id = " . intval($CI->response->id);
        // $this->run_sql($sql, array());
        return;
    }

    public function delete()
    {
        $CI = & get_instance();
        $sql = "DELETE FROM `scripts` WHERE id = ?";
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
        if ($CI->response->meta->debug) {
            $CI->response->meta->sql = $this->db->last_query();
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
