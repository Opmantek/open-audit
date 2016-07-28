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
class M_orgs extends MY_Model
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
        foreach ($CI->response->meta->filter as $item) {
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

    public function read($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM oa_org WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'orgs');
        return ($result);
    }

    public function read_sub_resource($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if ($CI->response->meta->internal->limit != '') {
            $sort = $CI->response->meta->sort;
            $limit = $CI->response->meta->limit;
        } else {
            $sort = '';
            $limit = '';
        }
        $filter = $this->build_filter();
        $sql = "SELECT type, count(system.id) as device_count FROM system WHERE system.org_id = ? GROUP BY type " . $sort . " " . $limit;
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (count($result) == 0) {
            return false;
        } else {
            return ($result);
        }
    }

    public function collection()
    {
        $CI = & get_instance();
        if ($CI->response->meta->collection == 'orgs') {
            # TODO - enable the below filter/properties use
            #$filter = $this->build_filter();
            #$properties = $this->build_properties();
            if ($CI->response->meta->internal->limit != '') {
                $limit = $CI->response->meta->internal->limit;
            } else {
                $limit = '';
            }
            # get the total org count
            $sql = "SELECT COUNT(*) as `count` FROM oa_org WHERE oa_org.id IN (" . $CI->user->org_list . ")";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $result = $query->result();
            $CI->response->meta->total = intval($result[0]->count);
        } else {
            $limit = '';
        }

        $sql = "SELECT o1.*, o2.name as parent_name, count(system.id) as device_count FROM oa_org o1 LEFT JOIN oa_org o2 ON o1.parent_id = o2.id LEFT JOIN system ON (o1.id = system.org_id) WHERE o1.id IN (" . $CI->user->org_list . ") GROUP BY o1.id " . $limit;
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'orgs');
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
            $sql = "DELETE FROM `oa_org` WHERE id = ?";
            $data = array($id);
            $this->run_sql($sql, $data);
            return true;
        } else {
            return false;
        }
    }

    public function get_orgs()
    {
        $CI = & get_instance();
        $sql = "SELECT o1.*, o2.name as parent_name, count(system.id) as device_count FROM oa_org o1 LEFT JOIN oa_org o2 ON o1.parent_id = o2.id LEFT JOIN system ON (o1.id = system.org_id) WHERE o1.id IN (" . $CI->user->org_list . ") GROUP BY o1.id ";
        $sql = $this->clean_sql($sql);
        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;
        $query = $this->db->query($sql);
        $this->db->db_debug = $temp_debug;
        $result = $query->result();
        return($result);
    }

}
