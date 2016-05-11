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
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_orgs extends MY_Model
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
            if (strpos($temp[$i], '.') === false) {
                $temp[$i] = 'oa_org.'.trim($temp[$i]);
            } else {
                $temp[$i] = trim($temp[$i]);
            }
        }
        $properties = implode(',', $temp);
        return($properties);
    }

    private function build_filter() {
        $CI = & get_instance();
        $reserved = ' properties limit resource action sort current offset format ';
        $filter = '';
        foreach ($CI->response->filter as $item) {
            if (strpos(' '.$item->name.' ', $reserved) === false) {
                $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
            }
        }
        if ($filter != '') {
            $filter = substr($filter, 5);
            $filter = ' WHERE ' . $filter;
        }
        return($filter);
    }

    public function read_org()
    {
        $CI = & get_instance();
        $sql = "SELECT * FROM oa_org WHERE id = ?";
        $sql = $this->clean_sql($sql);
        $data = array($CI->response->id);
        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;
        $query = $this->db->query($sql, $data);
        if ($CI->response->debug) {
            $CI->response->sql = $this->db->last_query();
        }
        $this->db->db_debug = $temp_debug;
        if ($this->db->_error_message()) {
            if (empty($CI->error)) {
                $CI->error = new stdClass();
            }
            $CI->error->controller = $CI->response->collection . '::' . $CI->response->action;
            $CI->error->function = 'm_orgs::read_org';
            $CI->error->code = 'ERR-0009';
            log_error($CI->error->code, $CI->error->function);
            $CI->response->error->detail_specific = $this->db->_error_message();
            return false;
        }
        $result = $query->result();
        if (count($result) == 0) {
            if (empty($CI->error)) {
                $CI->error = new stdClass();
            }
            $CI->error->function = 'm_orgs::readOrg';
            $CI->error->code = 'ERR-0005';
            log_error($CI->error->code, $CI->error->function);
            return false;
        } else {
            return ($result);
        }
    }

    public function read_org_sub_resource()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $sql = "SELECT type, count(system_id) as device_count FROM system WHERE man_org_id = " . intval($CI->response->id) . " GROUP BY type " . $CI->response->sort . " " . $CI->response->limit;
        $sql = $this->clean_sql($sql);
        $data = array($CI->user->id);
        $query = $this->db->query($sql, $data);
        if ($CI->response->debug) {
            $CI->response->sql = $this->db->last_query();
        }
        $result = $query->result();
        if (count($result) == 0) {
            return false;
        } else {
            return ($result);
        }
    }

    public function read_orgs()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $properties = $this->build_properties();
        if ($CI->response->internal->limit != '') {
            $limit = $CI->response->internal->limit;
        } else {
            $limit = '';
        }

        # get the total org count
        $sql = "SELECT COUNT(*) as `count` FROM oa_org WHERE oa_org.id IN (" . $CI->user->org_list . ")";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        $CI->response->total = intval($result[0]->count);


        #$sql = "SELECT " . $properties . ", count(system.system_id) as device_count FROM oa_org LEFT JOIN system ON (oa_org.id = system.man_org_id) " . $filter . " GROUP BY oa_org.id " . $CI->response->sort . " " . $limit;
        $sql = "SELECT o1.*, o2.name as parent_name, count(system.system_id) as device_count FROM oa_org o1 LEFT JOIN oa_org o2 ON o1.parent_id = o2.id LEFT JOIN system ON (o1.id = system.man_org_id) WHERE o1.id IN (" . $CI->user->org_list . ") GROUP BY o1.id " . $limit;

        $sql = $this->clean_sql($sql);
        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;
        $query = $this->db->query($sql);
        if ($CI->response->debug) {
            $CI->response->sql = $this->db->last_query();
        }
        $this->db->db_debug = $temp_debug;
        if ($this->db->_error_message()) {
            if (empty($CI->error)) {
                $CI->error = new stdClass();
            }
            $CI->error->controller = $CI->response->collection . '::' . $CI->response->action;
            $CI->error->function = 'm_orgs::read_org';
            $CI->error->code = 'ERR-0009';
            log_error($CI->error->code, $CI->error->function);
            $CI->response->errors[count($this->response->errors)-1]->detail_specific = $this->db->_error_message();
            return false;
        }
        $result = $query->result();
        if (count($result) == 0) {
            if (empty($CI->error)) {
                $CI->error = new stdClass();
            }
            $CI->error->function = 'm_orgs::readOrgs';
            $CI->error->code = 'ERR-0005';
            log_error($CI->error->code, $CI->error->function);
            return false;
        } else {
            return ($result);
        }
    }
}
