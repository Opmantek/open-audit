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
            return array();
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
        $sql = trim($sql);
        return $sql;
    }

    public function run_sql($sql, $data = array())
    {
        $CI = & get_instance();
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
        $sql = '/* ' . $model . '::' . $function .' */ ' . $sql;
        $sql = trim($sql);

        // store the current setting of db_debug
        $temp_debug = $this->db->db_debug;
        // set the db_debug setting to FALSE - this prevents the default CI error page and allows us
        // to output a nice formatted page with the $error object
        $this->db->db_debug = false;
        // run the query
        $query = $this->db->query($sql, $data);
        // store the query in our response object
        $CI->response->meta->sql[] = $this->db->last_query();
        // restore the original setting to db_debug
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

    public function collection_sql($endpoint = '', $type = 'sql')
    {
        $return = array();
        $CI = & get_instance();

        if ($type != 'sql') {
            $type = 'array';
        }

        if ($endpoint == '') {
            $endpoint = $CI->response->meta->collection;
        }

        $table = $endpoint;
        if ($table == 'users') {
            $table = 'oa_user';
        }
        if ($table == 'connections') {
            $table = 'oa_connection';
        }
        if ($table == 'fields') {
            $table = 'additional_field';
        }
        if ($table == 'locations') {
            $table = 'oa_location';
        }
        if ($table == 'orgs') {
            $table = 'oa_org';
        }

        // total count
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == $endpoint) {
            // get the total count
            if ($endpoint == 'orgs') {
                $sql = "SELECT COUNT(*) as `count` FROM `" . $table . "` WHERE id IN (" . $CI->user->org_list . ")";
            } else {
                $sql = "SELECT COUNT(*) as `count` FROM `" . $table . "` WHERE org_id IN (" . $CI->user->org_list . ")";
            }
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $result = $query->result();
            $CI->response->meta->total = intval($result[0]->count);
        }

        // properties
        $properties = '';
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == $endpoint) {
            $temp = explode(',', $CI->response->meta->properties);
            for ($i=0; $i<count($temp); $i++) {
                if (strpos($temp[$i], '.') === false) {
                    $temp[$i] = $table.'.'.trim($temp[$i]);
                } else {
                    $temp[$i] = trim($temp[$i]);
                }
            }
            $properties = implode(',', $temp);
        } else {
            $properties = $table . '.*';
        }
        $return['properties'] = $properties;
        if ($endpoint == 'locations') {
            $return['properties'] .= ', COUNT(DISTINCT system.id) AS `device_count`';
        }

        // filter
        $filter = '';
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == $endpoint) {
            $reserved = ' properties limit resource action sort current offset format ';
            foreach ($CI->response->meta->filter as $item) {
                if (strpos(' '.$item->name.' ', $reserved) === false) {
                    $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
                }
            }
        }
        if ($filter != '') {
            $filter = substr($filter, 5);
            $filter = ' WHERE oa_org.id IN (' . $this->user->org_list . ') AND ' . $filter;
        } else {
            $filter = ' WHERE oa_org.id IN (' . $this->user->org_list . ')';
        }
        $return['filter'] = $filter;

        // sort
        $sort = '';
        if ($CI->response->meta->collection == $endpoint) {
            if ($CI->response->meta->sort == '') {
                $sort = 'ORDER BY ' . $table . '.id';
            } else {
                $sort = 'ORDER BY ' . $CI->response->meta->sort;
            }
        }
        $return['sort'] = $sort;

        // limit
        $limit = '';
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == $endpoint) {
            if (!empty($CI->response->meta->limit)) {
                $limit = 'LIMIT ' . intval($CI->response->meta->limit);
            }
            if (!empty($CI->response->meta->offset)) {
                $limit = $limit . ', ' . intval($CI->response->meta->offset);
            }
        }
        $return['limit'] = $limit;
        if ($type == 'sql') {
            
            if ($endpoint == 'locations') {
                $sql = "SELECT " . $return['properties'] . ", COUNT(DISTINCT system.id) AS `device_count`, oa_org.name AS `org_name` FROM `oa_location` LEFT JOIN system ON (oa_location.id = system.location_id) LEFT JOIN oa_org ON (oa_location.org_id = oa_org.id) " . $return['filter'] . " GROUP BY oa_location.id " . $return['sort'] . " " . $return['limit'];
            
            } else if ($endpoint == 'networks') {
                $sql = "SELECT " . $return['properties'] . ", COUNT(DISTINCT system.id) as `device_count`, oa_org.name AS `org_name` FROM `networks` LEFT JOIN ip ON (networks.name = ip.network) LEFT JOIN system ON (system.id = ip.system_id) LEFT JOIN oa_org ON (networks.org_id = oa_org.id) " . $return['filter'] . " GROUP BY networks.id " . $return['sort'] . " " . $return['limit'];
            
            } else if ($endpoint == 'orgs') {
                $sql = "SELECT oa_org.*, o2.name as parent_name, count(DISTINCT system.id) as device_count FROM oa_org LEFT JOIN oa_org o2 ON oa_org.parent_id = o2.id LEFT JOIN system ON (oa_org.id = system.org_id) " . $return['filter'] . " GROUP BY oa_org.id " . $return['sort'] . " " . $return['limit'];
            
            } else {
                $sql = "SELECT " . $return['properties'] . ", oa_org.name AS `org_name` FROM `" . $table . "` LEFT JOIN oa_org ON (`" . $table . "`.org_id = oa_org.id) " . $return['filter'] . " " . $return['sort'] . " " . $return['limit'];
            }
            return($sql);
        } else {
            return($return);
        }
    }
}
