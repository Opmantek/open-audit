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
class M_networks extends MY_Model
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


    public function read($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $return_data = array();
        $sql = "SELECT networks.* FROM networks WHERE id = ?";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'networks');
        return $result;
    }

    public function sub_resource($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT `name` FROM `networks` WHERE `id` = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (count($result) > 0) {
            $name = $result[0]->name;
            if ($name != '') {
                $sql = "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, ip.ip AS `ip.ip`, system.description AS `system.description`, system.os_family AS `system.os_family`, system.status AS `system.status` FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.network = ?";
                $data = array((string)$name);
                $result = $this->run_sql($sql, $data);
                $result = $this->format_data($result, 'devices');
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function create()
    {
        $CI = & get_instance();
        # ensure we have a valid subnet
        $this->load->helper('network');
        if (!empty($CI->response->meta->received_data->attributes->name)) {
            $test = network_details($CI->response->meta->received_data->attributes->name);
        } else {
            log_error('ERR-0009', 'm_networks::create_network');
            return false;
        }
        # check to see if we already have a network with the same name
        $name = str_replace(' ', '', $CI->response->meta->received_data->attributes->name);
        $sql = "SELECT COUNT(id) AS count FROM `networks` WHERE `name` = ?";
        $data = array($name);
        $result = $this->run_sql($sql, $data);
        if (intval($result[0]->count) != 0) {
            log_error('ERR-0010', 'm_networks::create_network');
            return false;
        }
        $sql = "INSERT INTO `networks` VALUES (NULL, ?, ?, ?, NOW())";
        $data = array("$name", $CI->response->meta->received_data->attributes->description, $CI->user->full_name);
        $this->run_sql($sql, $data);
        return $this->db->insert_id();
    }

    public function collection()
    {
        $CI = & get_instance();
        if (!empty($CI->response->meta->collection) and $CI->response->meta->collection == 'networks') {
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
        $sql = "SELECT COUNT(*) as `count` FROM `networks`";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        if (!empty($CI->response->meta->total)) {
            $CI->response->meta->total = intval($result[0]->count);
        }
        # get the response data
        $sql = "SELECT " . $properties . " FROM `networks` " . $filter . " " . $sort . " " . $limit;
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'networks');
        return ($result);
    }

    public function update()
    {
        $CI = & get_instance();
        $sql = '';
        $fields = ' name description ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `networks` " . $sql . ", `edited_by` = '" . $CI->user->full_name . "', `edited_date` = NOW() WHERE id = " . intval($CI->response->meta->id);
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
        $CI = & get_instance();
        $sql = "DELETE FROM `networks` WHERE id = ?";
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
