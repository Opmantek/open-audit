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
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.0.6
* @link      http://www.open-audit.org
 */

class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encrypt');
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
        $query = $this->db->query($sql, $data);
        // store the query in our response object
        $CI->response->meta->sql[] = $this->db->last_query();
        // log the query
        $this->load->helper('log');
        $sqllog = new stdClass();
        $sqllog->function =  strtolower($model . '::' . $function);
        $sqllog->status = 'success';
        $sqllog->summary = 'running sql';
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
            $sqllog->severity = 3;
            $sqllog->status = 'failure';
            $sqllog->detail .= ' - FAILURE - ' . $db_error;
            stdlog($sqllog);
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function'] . ")"), $db_error);
            if (!empty($CI->response)) {
                if (!empty($CI->response->errors)) {
                    $CI->response->errors[count($CI->response->errors)-1]->detail_specific = $this->db->_error_message();
                } else {
                    $CI->response->errors = array();
                    $item = new stdClass();
                    $item->detail_specific = $this->db->_error_message();
                    $CI->response->errors[0] = $item;
                }
            }
            return false;
        } else {
            // no error, so return the result
            # need to log down here for the above so we can use $this->db to get the last insert id
            $sqllog->severity = 7;
            stdlog($sqllog);
            return ($result);
        }
        // return what we have
        return ($result);
    }

    public function collection_sql($collection = '', $type = 'sql')
    {
        $return = array();
        $CI = & get_instance();

        if ($type != 'sql') {
            $type = 'array';
        }

        if ($collection == '' and !empty($CI->response->meta->collection)) {
            $collection = $CI->response->meta->collection;
        }

        if (empty($collection)) {
            return;
        }

        $table = $collection;

        // total count
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == $collection) {
            // get the total count
            if ($collection == 'orgs') {
                $sql = "SELECT COUNT(*) as `count` FROM `" . $table . "` WHERE id IN (" . $CI->user->org_list . ")";
            } elseif ($collection == 'configuration' or $collection == 'logs' or $collection == 'attributes') {
                $sql = "SELECT COUNT(*) as `count` FROM `" . $table . "`";
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
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == $collection) {
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
        if ($collection == 'locations') {
            $return['properties'] .= ', COUNT(DISTINCT system.id) AS `device_count`';
        }

        // filter
        $filter = '';
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == $collection) {
            $reserved = ' properties limit resource action sort current offset format ';
            foreach ($CI->response->meta->filter as $item) {
                if (strpos(' '.$item->name.' ', $reserved) === false) {
                    // We MUST have a name like 'connections.name', not just 'name'
                    if (strpos($item->name, '.') !== false) {
                        if ($item->operator != 'in') {
                            $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
                        } else {
                            $filter .= ' AND ' . $item->name . ' in ' . $item->value;
                        }
                    }
                }
            }
        }
        if ($filter != '') {
            if ($collection == 'configuration' or $collection == 'logs' ) {
                $filter = ' WHERE ' . substr($filter, 4);
            } else if ($collection == 'attributes' or $collection == 'credentials' or $collection == 'groups' or $collection == 'queries' or $collection == 'summaries') {
                $filter = substr($filter, 5);
                if (!empty($CI->user->org_parents)) {
                    $filter = ' WHERE (orgs.id IN (' . $CI->user->org_list . ') OR orgs.id IN (' . $CI->user->org_parents . ')) AND ' . $filter;
                } else {
                    $filter = ' WHERE orgs.id IN (' . $CI->user->org_list . ') AND ' . $filter;
                }
            } else {
                $filter = substr($filter, 5);
                $filter = ' WHERE orgs.id IN (' . $CI->user->org_list . ') AND ' . $filter;
            }
        } else {
            if ($collection == 'configuration' or $collection == 'logs' ) {
                $filter = '';
            } else if ($collection == 'attributes' or $collection == 'credentials' or $collection == 'groups' or $collection == 'queries' or $collection == 'summaries') {
                if (!empty($CI->user->org_parents)) {
                    $filter = ' WHERE (orgs.id IN (' . $CI->user->org_list . ') OR orgs.id IN (' . $CI->user->org_parents . '))';
                } else {
                    $filter = ' WHERE orgs.id IN (' . $CI->user->org_list . ')';
                }
            } else {
                $filter = ' WHERE orgs.id IN (' . $CI->user->org_list . ')';
            }
        }
        $return['filter'] = $filter;

        // sort
        $sort = '';
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == $collection) {
            if ($CI->response->meta->sort == '') {
                if ($table == 'orgs') {
                    $sort = 'ORDER BY ' . $table . '.name';
                } else {
                    $sort = 'ORDER BY ' . $table . '.id';
                }
            } else {
                $sort = 'ORDER BY ' . $CI->response->meta->sort;
            }
        }
        $return['sort'] = $sort;

        // limit
        $limit = '';
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == $collection) {
            if (!empty($CI->response->meta->limit)) {
                $limit = 'LIMIT ' . intval($CI->response->meta->limit);
                if (!empty($CI->response->meta->offset)) {
                    $limit = $limit . ', ' . intval($CI->response->meta->offset);
                }
            }
        }
        $return['limit'] = $limit;
        if ($type == 'sql') {
            if ($collection == 'configuration') {
                $sql = "SELECT configuration.* FROM configuration " . $return['filter'] . " " . $return['sort'] . " " . $return['limit'];

            } else if ($collection == 'fields') {
                $sql = "SELECT " . $return['properties'] . ", orgs.name AS `org_name`, groups.name AS `groups.name` FROM `fields` LEFT JOIN orgs ON (fields.org_id = orgs.id) LEFT JOIN `groups` ON (fields.group_id = groups.id) " . $return['filter'] . " GROUP BY fields.id " . $return['sort'] . " " . $return['limit'];

            } else if ($collection == 'locations') {
                $sql = "SELECT " . $return['properties'] . ", COUNT(DISTINCT system.id) AS `device_count`, orgs.name AS `org_name` FROM `locations` LEFT JOIN system ON (locations.id = system.location_id) LEFT JOIN orgs ON (locations.org_id = orgs.id) " . $return['filter'] . " GROUP BY locations.id " . $return['sort'] . " " . $return['limit'];

            } else if ($collection == 'logs') {
                $sql = "SELECT " . $return['properties'] . " FROM `logs` " . $return['filter'] . " " . $return['sort'] . " " . $return['limit'];

            } else if ($collection == 'networks') {
                $sql = "SELECT " . $return['properties'] . ", COUNT(DISTINCT system.id) as `device_count`, orgs.name AS `org_name` FROM `networks` LEFT JOIN ip ON (networks.network = ip.network) LEFT JOIN system ON (system.id = ip.system_id) LEFT JOIN orgs ON (networks.org_id = orgs.id) " . $return['filter'] . " GROUP BY networks.id " . $return['sort'] . " " . $return['limit'];

            } else if ($collection == 'orgs') {
                $sql = "SELECT orgs.*, o2.name as `parent_name`, count(DISTINCT system.id) as device_count FROM orgs LEFT JOIN orgs o2 ON orgs.parent_id = o2.id LEFT JOIN system ON (orgs.id = system.org_id) " . $return['filter'] . " GROUP BY orgs.id " . $return['sort'] . " " . $return['limit'];

            } else if ($collection == 'queries') {
                $sql = "SELECT ANY_VALUE(queries.id) AS `id`, ANY_VALUE(queries.org_id) AS `org_id`, ANY_VALUE(queries.name) AS `name`, ANY_VALUE(queries.description) AS `description`, ANY_VALUE(queries.sql) AS `sql`, ANY_VALUE(queries.link) AS `link`, ANY_VALUE(queries.expose) AS `expose`, ANY_VALUE(queries.edited_by) AS `edited_by`, MAX(queries.edited_date) AS `edited_date`, ANY_VALUE(orgs.name) AS `org_name` FROM `queries` LEFT JOIN orgs ON (`queries`.org_id = orgs.id) " . $return['filter'] . " GROUP BY queries.name " . $return['sort'] . " " . $return['limit'];
                $sql = "SELECT queries.*, orgs.name AS `org_name` FROM queries LEFT JOIN orgs ON (queries.org_id = orgs.id) GROUP BY queries.name";

            } elseif ($collection == 'reports') {
                $sql = "(SELECT CONCAT('queries/',queries.id) as `link`, queries.type as `type`, queries.id as `id`, queries.name as `name`, queries.org_id as `org_id` FROM queries WHERE queries.org_id IN (" . $CI->user->org_list . ")) UNION ALL (SELECT CONCAT('summaries/',summaries.id) as `link`, summaries.type as `type`, summaries.id as `id`, summaries.name as `name`, summaries.org_id as `org_id` FROM summaries WHERE summaries.org_id IN (" . $CI->user->org_list . ")) ORDER BY `type`, `name`";

            } else {
                $sql = "SELECT " . $return['properties'] . ", orgs.name AS `org_name` FROM `" . $table . "` LEFT JOIN orgs ON (`" . $table . "`.org_id = orgs.id) " . $return['filter'] . " " . $return['sort'] . " " . $return['limit'];
            }
            return($sql);
        } else {
            return($return);
        }
    }
}
