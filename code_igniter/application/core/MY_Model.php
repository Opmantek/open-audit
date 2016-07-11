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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * 
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class MY_Model extends CI_Model
{
    #public function MY_Model()
    public function __construct()
    {
        parent::__construct();
    }

    public function format_data($result, $type)
    {
        if (empty($result)) {
            # TODO - thorw an error here
            return null;
        }
        if (gettype($result) == 'string') {
            # TODO - this ws being provided through Discovery some how.
            # Check this when we change from m_system to m_devices for processing results
            return null;
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
        // echo "\$result is of type: " . gettype($result);
        // print_r($result); echo "\n";
        foreach ($result as $entry) {
            $item = new stdClass();
            $item->id = '';
            if (isset($entry->id) and $entry->id != '') {
                $item->id = intval($entry->id);
            } else if (!empty($entry->{'system.id'})) {
                $item->id = intval($entry->{'system.id'});
            } else if (!empty($entry->{$type.".id"})) {
                $item->id = intval($entry->{$type.".id"});
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
        return $sql;
    }

    public function run_sql($sql, $data = array())
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
        if (!empty($CI->response->meta->debug) and $CI->response->meta->debug) {
            $CI->response->meta->sql = $this->db->last_query();
        }
        // restore the origin setting to db_debug
        $this->db->db_debug = $temp_debug;
        // do we have an error?
        if ($this->db->_error_message()) {
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function']));
            if (!empty($CI->response)) {
                $CI->response->errors[count($CI->response->errors)-1]->detail_specific = $this->db->_error_message();
            }
            return false;
        }
        // no error, so get the result
        $result = $query->result();
        // return what we have
        return ($result);
    }
}
