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
class M_connections extends MY_Model
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
                $temp[$i] = 'oa_connection.'.trim($temp[$i]);
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
        $sql = "SELECT * FROM oa_connection WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'connections');
        return ($result);
    }

    public function collection()
    {
        $CI = & get_instance();
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == 'connections') {
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
        $sql = "SELECT COUNT(*) as `count` FROM `oa_connection`";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        if (!empty($CI->response->meta->total)) {
            $CI->response->meta->total = intval($result[0]->count);
        }
        # get a list of Orgs and Locations so we can populate the names
        $sql = "SELECT id, name FROM oa_org";
        $result = $this->run_sql($sql, array());
        $orgs = $result;
        $sql = "SELECT id, name FROM oa_location";
        $result = $this->run_sql($sql, array());
        $locations = $result;

        # get the response data
        $sql = "SELECT " . $properties . " FROM `oa_connection` " . $filter . " " . $sort . " " . $limit;
        $result = $this->run_sql($sql, array());
        for ($i=0; $i < count($result); $i++) { 
            foreach ($orgs as $org) {
                if ($org->id == $result[$i]->org_id) {
                    $result[$i]->org_name = $org->name;
                }
            }
            foreach ($locations as $location) {
                if ($location->id == $result[$i]->location_id_a) {
                    $result[$i]->location_name_a = $location->name;
                }
                if ($location->id == $result[$i]->location_id_b) {
                    $result[$i]->location_name_b = $location->name;
                }
            }
        }
        $result = $this->format_data($result, 'connections');
        return ($result);
    }

    public function create()
    {
        $CI = & get_instance();
        if (empty($CI->response->meta->received_data->attributes->name)) {
            log_error('ERR-0010', 'm_connections::create');
            return false;
        }
        $attributes = array('org_id', 'name', 'provider', 'service_type', 'product_name', 'service_identifier', 'speed', 'location_id_a', 'location_id_b', 'system_id_a', 'system_id_b', 'line_number_a', 'line_number_b', 'ip_address_external_a', 'ip_address_external_b', 'ip_address_internal_a', 'ip_address_internal_b');
        $data = array();
        foreach ($attributes as $attribute) {
            $data[] = $CI->response->meta->received_data->attributes->{$attribute};
        }
        $sql = "INSERT INTO `oa_connection` VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->run_sql($sql, $data);
        return $this->db->insert_id();
    }

    public function update()
    {
        $CI = & get_instance();
        $sql = '';
        $fields = 'org_id name provider service_type product_name service_identifier speed location_id_a location_id_b system_id_a system_id_b line_number_a line_number_b ip_address_external_a ip_address_external_b ip_address_internal_a ip_address_internal_b';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `oa_connection` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql, array());
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
        if ($id != 0) {
            $CI = & get_instance();
            $sql = "DELETE FROM `oa_connection` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        } else {
            return false;
        }
    }

}
