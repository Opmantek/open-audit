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
        $data = array(intval($CI->response->meta->id));
        $result = $this->run_sql($sql, $data);
        $result[0]->options = json_decode($result[0]->options);
        $result = $this->format_data($result, 'scripts');
        return($result);
    }

    public function create()
    {
        $CI = & get_instance();
        # check to see if we already have a script with the same name
        $sql = "SELECT COUNT(id) AS count FROM `scripts` WHERE `name` = ?";
        $data = array($CI->response->meta->received_data->name);
        $result = $this->run_sql($sql, $data);
        if (intval($result[0]->count) != 0) {
            log_error('ERR-0010', 'm_scripts::create_script');
            return false;
        }
        $sql = "INSERT INTO `scripts` VALUES (NULL, ?, ?, ?, ?, ?, ?, NOW())";
        $data = array(  $CI->response->meta->received_data->name,
                        json_encode($CI->response->meta->received_data->options),
                        $CI->response->meta->received_data->description,
                        $CI->response->meta->received_data->based_on,
                        '',
                        $CI->user->full_name);
        $this->run_sql($sql, $data);
        return $this->db->insert_id();
    }

    public function collection()
    {
        $CI = & get_instance();
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == 'scripts') {
            $filter = $this->build_filter();
            $properties = $this->build_properties();
            if ($CI->response->meta->sort == '') {
                $sort = 'ORDER BY id';
            } else {
                $sort = 'ORDER BY ' . $CI->response->meta->sort;
            }
            if ($CI->response->meta->limit == '') {
                $limit = '';
            } else {
                $limit = 'LIMIT ' . intval($CI->response->meta->limit);
                if ($CI->response->meta->offset != '') {
                    $limit = $limit . ', ' . intval($CI->response->meta->offset);
                }
            }
        } else {
            $properties = '*';
            $filter = '';
            $sort = '';
            $limit = '';
        }
        # get the total count
        $sql = "SELECT COUNT(*) as `count` FROM `scripts`";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        if (!empty($CI->response->meta->total)) {
            $CI->response->meta->total = intval($result[0]->count);
        }
        # get the response data
        $sql = "SELECT " . $properties . " FROM `scripts` " . $filter . " " . $sort . " " . $limit;
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'scripts');
        return ($result);
    }

    public function download($id = 0)
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

        if ($options->url = 'http://open-audit/index.php/system/add_system') {
            # inject our default network address
            $options->url = 'http://' . $CI->config->item('default_network_address') . '/open-audit/index.php/system/add_system';
        }

        $find = 'Configuration from web UI here';
        $files = false;
        foreach ($options as $key => $value) {
            if ($key != 'files') {
                $replace = $find . "\n" . $key . "=\"" . $value . "\"";
                $file = str_replace($find, $replace, $file);
            } else {
                $files = true;
            }
        }

        # TODO - enable the below for a per script list of files
        #if (!$files and $data->based_on == $data->name) {
            $sql = "SELECT * FROM files";
            $result = $this->run_sql($sql, array());
            $options = new stdClass();
            $options->files = array();
            foreach ($result as $item) {
                $options->files[] = ($item->path);
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
        #}
        return $file;
    }

    public function update()
    {
        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';
        $CI = & get_instance();

        $sql = 'UPDATE `scripts` SET ';
        $data = array();
        $log->message = json_encode($CI->response->meta->received_data);
        stdlog($log);
        if ( !empty($CI->response->meta->received_data->attributes->options)) {
            $received_options = new stdClass();
            foreach ($CI->response->meta->received_data->attributes->options as $key => $value) {
                    $received_options->$key = $value;
            }
            $select = "SELECT * FROM scripts WHERE id = ?";
            $existing_options = $this->run_sql($select, array($CI->response->meta->id));
            $existing_options = json_decode($existing_options[0]->options);
            $new_options = new stdClass();
            foreach ($existing_options as $existing_key => $existing_value) {
                if (!empty($received_options->$existing_key)) {
                    $new_options->$existing_key = $received_options->$existing_key;
                } else {
                    $new_options->$existing_key = $existing_options->$existing_key;
                }
            }
            $sql .= "`options` = ?, ";
            $data[] = (string)json_encode($new_options);
        }
        
        if (!empty($CI->response->meta->received_data->attributes->name)) {
            $sql .= "`name` = ?, ";
            $data[] = $CI->response->meta->received_data->attributes->name;
        }

        if (!empty($CI->response->meta->received_data->attributes->description)) {
            $sql .= "`description` = ?, ";
            $data[] = $CI->response->meta->received_data->attributes->description;
        }

        if ($sql == 'UPDATE `scripts` SET ') {
            # TODO - THROW AN ERROR, no credentials or name or description supplied for updating
        }
        $sql .= " `edited_by` = ?, `edited_date` = NOW() WHERE id = ?";
        $data[] = (string)$CI->user->full_name;
        $data[] = intval($CI->response->meta->id);
        $this->run_sql($sql, $data);
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
        $CI = & get_instance();
        $sql = "DELETE FROM `scripts` WHERE id = ? AND name != based_on";
        $data = array(intval($id));
        $this->run_sql($sql, $data);
        return true;
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
