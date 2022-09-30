<?php
#
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
* @category  Controller
* @package   Open-AudIT
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.4
* @link      http://www.open-audit.org
 */

class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encrypt');
        $this->load->helper('collections');
    }

    public function format_data($result, $type)
    {
        if (empty($result)) {
            # TODO - thorw an error here
            return array();
        }
        if (gettype($result) == 'string') {
            # TODO - this ws being provided through Discovery some how.
            # Check this when we change from m_system to m_devices for processing results
            return null;
        }
        if (gettype($result) == 'object') {
            $object = $result;
            unset($result);
            $result = array($object);
            unset($object);
        }
        if (empty($type)) {
            return false;
        }
        $return = array();
        if (strpos($type, '/') !== false) {
            $temp = explode('/', $type);
            $link = $type;
            $type = $temp[count($temp)-1];
        } else {
            $link = $type;
        }
        foreach ($result as $entry) {
            $item = new stdClass();
            $item->id = '';
            if (isset($entry->id) and $entry->id != '') {
                $item->id = intval($entry->id);
            } else if (!empty($entry->{'system.id'})) {
                $item->id = intval($entry->{'system.id'});
            } else if (!empty($entry->{$type.".id"})) {
                $item->id = intval($entry->{$type.".id"});
            } else if ($type == 'errors') {
                $item->id = $entry->code;
            }
            if ($type == 'widgets' and isset($entry->percent)) {
                $entry->percent = intval($entry->percent);
            }
            $item->type = $type;
            $item->attributes = $entry;
            $item->links = new stdClass();
            $item->links->self = $this->config->config['base_url'] . 'index.php/' . $link . '/' . $item->id;
            $return[] = $item;
            unset($item);
        }
        return $return;
    }

    public function ip_address_to_db($ip)
    {
        if (($ip != "") and (!(is_null($ip))) and (substr_count($ip, '.') == 3)) {
            $myip = explode(".", $ip);
            $myip[0] = mb_substr("000".$myip[0], -3);
            $myip[1] = mb_substr("000".$myip[1], -3);
            $myip[2] = mb_substr("000".$myip[2], -3);
            $myip[3] = mb_substr("000".$myip[3], -3);
            $ip_post = $myip[0].".".$myip[1].".".$myip[2].".".$myip[3];
        } else {
            $ip_post = "";
        }

        return $ip_post;
    }

    public function ip_address_from_db($ip)
    {
        $ip_pre = $ip;
        if (($ip != "") and (!(is_null($ip)))) {
            $myip = explode(".", $ip);
            $myip[0] = ltrim($myip[0], "0");
            if ($myip[0] == "") {
                $myip[0] = "0";
            }
            if (isset($myip[1])) {
                $myip[1] = ltrim($myip[1], "0");
            }
            if (!isset($myip[1]) or $myip[1] == "") {
                $myip[1] = "0";
            }
            if (isset($myip[2])) {
                $myip[2] = ltrim($myip[2], "0");
            }
            if (!isset($myip[2]) or $myip[2] == "") {
                $myip[2] = "0";
            }
            if (isset($myip[3])) {
                $myip[3] = ltrim($myip[3], "0");
            }
            if (!isset($myip[3]) or $myip[3] == "") {
                $myip[3] = "0";
            }
            $ip = $myip[0].".".$myip[1].".".$myip[2].".".$myip[3];
        } else {
            $ip = "";
        }

        return $ip;
    }

    public function clean_sql($sql)
    {
        $trace = debug_backtrace();
        $caller = $trace[1];
        $function = @$caller['function'];
        $model = @$caller['class'];
        $sql = str_replace(array("\r", "\r\n", "\n", "\t"), ' ', $sql);
        $sql = preg_replace('!\s+!', ' ', $sql);
        $sql = '/* ' . $model . '::' . $function .' */ ' . $sql;
        $sql = trim($sql);
        return $sql;
    }

    public function run_sql($sql, $data = array())
    {
        $CI = & get_instance();
        if (empty($CI->response)) {
            $CI->response = new stdCLass();
            $CI->response->meta = new stdClass();
            $CI->response->meta->sql = array();
        }
        if ($sql == '') {
            return;
        }
        // clean our SQL (usually adding the running model, etc)
        $trace = debug_backtrace();
        $caller = $trace[1];
        $function = @$caller['function'];
        $model = @$caller['class'];
        $sql = str_replace(array("\r", "\r\n", "\n", "\t"), ' ', $sql);
        $sql = preg_replace('!\s+!', ' ', $sql);
        if (stripos($sql, 'insert into') === 0) {
            // this is an insert - return the insert_id
            $return = 'insert_id';
        } elseif (stripos($sql, 'update ') === 0) {
            $return = 'affected_rows';
        } elseif (stripos($sql, 'delete from ') === 0) {
            $return = 'affected_rows';
        } else {
            $return = 'result';
        }
        $sql = strtolower('/* ' . $model . '::' . $function .' */ ') . $sql;
        $sql = trim($sql);
        $result = array();

        // store the current setting of db_debug
        $temp_debug = $this->db->db_debug;
        // set the db_debug setting to false - this prevents the default CI error page and allows us
        // to output a nice formatted page with the $error object
        $this->db->db_debug = false;
        // run the query
        $timer_start = microtime(true);
        if (!empty($data)) {
            $query = $this->db->query($sql, $data);
        } else {
            $query = $this->db->query($sql);
        }
        $duration = microtime(true) - $timer_start;
        // $temp = explode(';', $sql);
        // if (count($temp) > 1) {
        //     foreach ($temp as $split_sql) {
        //         $query = $this->db->query($split_sql, $data);
        //     }
        // } else {
        //    $query = $this->db->query($sql, $data);
        // }
        // store the query in our response object
        $CI->response->meta->sql[] = $this->db->last_query();
        // log the query
        $this->load->helper('log');
        $sqllog = new stdClass();
        $sqllog->function =  strtolower($model . '::' . $function);
        $sqllog->status = 'success';
        $sqllog->summary = 'running sql (' . $duration . ')';
        $sqllog->type = 'system';
        $sqllog->detail = $this->db->last_query();
        # log below so we don't break the insert id on the next lines

        // get the insert id or affected rows, etc
        if ($return === 'insert_id') {
            $result = @$this->db->insert_id();
        } elseif ($return === 'affected_rows') {
            $result = @$this->db->affected_rows();
        } else {
            if ($query) {
                $result = @$query->result();
            } else {
                $result = false;
                #echo "<pre>\n"; print_r($this->response); exit();
            }
        }
        if (empty($result)) {
            $result = false;
        }

        // restore the original setting to db_debug
        $this->db->db_debug = $temp_debug;
        // do we have an error?
        if ($this->db->_error_message()) {
            # need to log down here for the above so we can use $this->db to get the last insert id
            $db_error = $this->db->_error_message();
            $CI->response->meta->debug = true;
            $sqllog->severity = 3;
            $sqllog->status = 'failure';
            $sqllog->detail .= ' - FAILURE - ' . $db_error;
            stdlog($sqllog);
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function'] . ")"), $db_error);
            if (!empty($CI->response)) {
                if (!empty($CI->response->errors)) {
                    $CI->response->errors[count($CI->response->errors)-1]->detail_specific = $db_error;
                } else {
                    $CI->response->errors = array();
                    $item = new stdClass();
                    $item->detail_specific = $db_error;
                    $CI->response->errors[0] = $item;
                }
            }
            return false;
        } else {
            // no error, so return the result
            # need to log down here for the above so we can use $this->db to get the last insert id
            $sqllog->severity = 7;
            stdlog($sqllog);
            if (empty($result)) {
                $result = array();
            }
            return ($result);
        }
        // return what we have
        return ($result);
    }

    public function sql_unesc($attribute) {
        $attribute = str_replace("`", "", $attribute);
        $attribute = str_replace("[", "", $attribute);
        $attribute = str_replace("]", "", $attribute);
        $attribute = str_replace("'", "", $attribute);
        $attribute = str_replace("\"", "", $attribute);
        return $attribute;
    }

    public function sql_esc($attribute) {
        if (empty($attribute) or $attribute == '.') {
            $attribute = "''";
            return $attribute;
        }
        if (strpos($attribute, '.') === 0) {
            $attribute = substr($attribute, 1);
        }
        if (strpos($attribute, '.') === strlen($attribute)-1) {
            $attribute = substr($attribute, 0, strlen($attribute)-1);
        }
        $attribute = str_replace("`", "", $attribute);
        $attribute = str_replace("[", "", $attribute);
        $attribute = str_replace("]", "", $attribute);
        $attribute = str_replace("'", "", $attribute);
        $attribute = str_replace("\"", "", $attribute);
        if (strpos($attribute, '.') !== false) {
            $attributes = explode(".", $attribute);
            for ($i=0; $i < count($attributes); $i++) {
                if ($this->db->dbdriver == 'mysql') {
                    $attributes[$i] = "`" . $attributes[$i] . "`";
                }
                if ($this->db->dbdriver == 'mssql') {
                    $attributes[$i] = "[" . $attributes[$i] . "]";
                }
            }
            $attribute = implode('.', $attributes);
            return $attribute;
        } else {
            if ($this->db->dbdriver == 'mysql') {
                $attribute = "`" . $attribute . "`";
            }
            if ($this->db->dbdriver == 'mssql') {
                $attribute = "[" . $attribute . "]";
            }
            return $attribute;
        }
    }

    public function get_all_columns($table = '')
    {
        if ($table == '') {
            return;
        }
        $return = '';
        if ( ! $this->db->table_exists($table)) {
            return '';
        }
        $fields = $this->db->list_fields($table);
        foreach ($fields as $field)
        {
            $return .= ', ' . $table . '.' . $field . ' AS `' . $table . '.' . $field . '`';
        }
        $return = substr($return, 1);
        return $return;
    }

    function deep_merge($original, $submitted) {
        if (is_array($original)) {
            for ($i=0; $i < count($submitted); $i++) {
                if (is_array($submitted[$i]) or is_object($submitted[$i])) {
                    if (!isset($original[$i])) {
                        $original[$i] = gettype($submitted[$i]);
                    }
                    $original[$i] = $this->deep_merge($original[$i], $submitted[$i]);
                }
                if (is_string($submitted[$i]) or is_integer($submitted[$i])) {
                    $original[$i] = $submitted[$i];
                }
            }
        } else if (is_object($original)) {
            foreach ($submitted as $key => $value) {
                if (is_array($value) or is_object($value)) {
                    if (!isset($original->$key)) {
                        $original->$key = gettype($submitted->{$key});
                    }
                    $original->$key = $this->deep_merge($original->$key, $value);
                }
                if (is_string($value) or is_integer($value)) {
                    $original->{$key} = $submitted->{$key};
                }
            }
        } else if (is_string($original) or is_integer($original)) {
            $original = $submitted;
        }
        return($original);
    }

    function validate_network_address($network_address) {
        $network_address = strtolower(trim($network_address));
        $accept = true;
        $valid = range('a', 'z');
        $valid[] = ":";
        $valid[] = "/";
        $valid[] = ".";
        $valid[] = "-";
        $valid[] = "1";
        $valid[] = "2";
        $valid[] = "3";
        $valid[] = "4";
        $valid[] = "5";
        $valid[] = "6";
        $valid[] = "7";
        $valid[] = "8";
        $valid[] = "9";
        $valid[] = "0";
        for( $i = 0; $i <= strlen($network_address); $i++ ) {
            $char = substr( $network_address, $i, 1 );
            if (!empty($char) and !in_array($char, $valid)) {
                $accept = false;
            }
        }
        return $accept;
    }

    /**
     * [insert_collection description]
     * @param  [type] $collection [description]
     * @param  [type] $data       [description]
     * @return [type]             [description]
     */
    function insert_collection($collection, $data) {
        if (empty($collection) OR empty($data)) {
            return false;
        }
        $CI = & get_instance();
        $insert_fields = insert_fields($collection);
        $mandatory_fields = mandatory_fields($collection);
        $fields = $this->db->field_data($collection);
        foreach ($mandatory_fields as $field) {
            if ( ! isset($data->{$field}) OR $data->{$field} === '') {
                if ( ! empty($this->session)) {
                    $this->session->set_flashdata('error', "Object in {$collection} could not be created, no {$field} supplied.");
                }
                log_error('ERR-0021', 'm_' . $collection . '::create' . " Missing field: {$field}", "Missing field: {$field}");
                return false;
            }
        }
        $insert_data = new stdClass();
        foreach ($insert_fields as $field) {
            if ( isset($data->{$field})) {
                $insert_data->{$field} = $data->{$field};
            } else {
                foreach ($fields as $definition) {
                    if ($definition->name === $field) {
                        if ($definition->type === 'text') {

                            // NOTE - Only provide a blank string if column type is TEXT
                            //        because TEXT cannot have a default value in MySQL
                            //        If we don't do this, strict mode MySQL will fail
                            // NOTE #2 - All columns in our schema except IDs (and *_id) have
                            //           NOT NULL DEFAULT <default> set, except TEXT type.

                            $insert_data->{$field} = '';
                        }
                    }
                }
            }
        }
        if ($this->db->field_exists('edited_by', $collection)) {
            $insert_data->edited_by = 'system';
            if ( ! empty($CI->user->full_name)) {
                $insert_data->edited_by = $CI->user->full_name;
            }
            $insert_data->edited_date = $CI->config->config['timestamp'];
        }
        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = false;
        $this->db->insert($collection, $insert_data);
        $id = intval($id = $this->db->insert_id());
        $this->load->helper('log');
        $sqllog = new stdClass();
        $sqllog->function =  'my_model::insert_collection';
        $sqllog->status = 'success';
        $sqllog->summary = 'running sql';
        $sqllog->type = 'system';
        $sqllog->detail = $this->db->last_query();
        $sqllog->severity = 7;
        $this->db->db_debug = $temp_debug;
        if ($this->db->_error_message()) {
            $db_error = $this->db->_error_message();
            $sqllog->severity = 3;
            $sqllog->status = 'failure';
            $sqllog->detail .= ' - FAILURE - ' . $db_error;
            $sqllog->detail = $this->db->last_query();
            stdlog($sqllog);
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function'] . ")"), $db_error);
            if (!empty($CI->response)) {
                if (!empty($CI->response->errors)) {
                    $CI->response->errors[count($CI->response->errors)-1]->detail_specific = $db_error;
                } else {
                    $CI->response->errors = array();
                    $item = new stdClass();
                    $item->detail_specific = $db_error;
                    $CI->response->errors[0] = $item;
                }
            }
            return false;
        }
        stdlog($sqllog);
        return $id;
    }
}
