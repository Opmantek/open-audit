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
class M_discoveries extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM discoveries WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'discoveries');
        return ($result);
    }

    public function read_sub_resource($id = '') {
        // Read our associated logs (if any)
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "/* m_discoveries::read_sub_resource */ " . "SELECT * FROM discovery_log WHERE discovery_id = ? ORDER BY `timestamp`";
        $result = $this->run_sql($sql, array(intval($id)));
        $result = $this->format_data($result, 'discovery_log');
        return ($result);
        #return(array());
    }

    public function collection()
    {
        $CI = & get_instance();
        $sql = $this->collection_sql('discoveries', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'discoveries');
        return ($result);
    }

    public function create()
    {
        $CI = & get_instance();
        if (empty($CI->response->meta->received_data->attributes->name)) {
            log_error('ERR-0010', 'm_discoveries::create');
            return false;
        }
        $attributes = array('name', 'org_id', 'devices_assigned_to_org', 'devices_assigned_to_location', 'network_address', 'subnet');
        $data = array();
        foreach ($attributes as $attribute) {
            if (!empty($CI->response->meta->received_data->attributes->{$attribute})) {
                $data[] = $CI->response->meta->received_data->attributes->{$attribute};
            } else {
                $data[] = '';
            }
        }
        $data[] = $this->user->full_name;
        $sql = "INSERT INTO `discoveries` VALUES (NULL, ?, ?, ?, ?, ?, 'subnet', ?, 0, '', 0, ?, NOW(), '', 'y')";
        $this->run_sql($sql, $data);
        $id = $this->db->insert_id();
        if (strpos($CI->response->meta->received_data->attributes->subnet, '/') !== false) {
            $CI->load->model('m_networks');
            $network = new stdClass();
            $network->name = $CI->response->meta->received_data->attributes->subnet;
            $network->org_id = $CI->response->meta->received_data->attributes->org_id;
            $network->description = $CI->response->meta->received_data->attributes->name;
            $CI->m_networks->upsert($network);
        } else {
            if (filter_var($CI->response->meta->received_data->attributes->subnet, FILTER_VALIDATE_IP) !== false) {
                $CI->load->model('m_networks');
                $CI->load->helper('network');
                $temp = network_details($CI->response->meta->received_data->attributes->subnet.'/30');
                $network = new stdClass();
                $network->name = $temp->network.'/'.$temp->network_slash;
                $network->org_id = $CI->response->meta->received_data->attributes->org_id;
                $CI->m_networks->upsert($network);
            }
        }
        return $id;
    }

    public function update()
    {
        $CI = & get_instance();
        $sql = '';
        $fields = ' name org_id location_id network_address type subnet system_id other device_count updated_on complete ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `discoveries` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql);
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
            $sql = "DELETE FROM `discoveries` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        } else {
            return false;
        }
    }

    public function execute($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        // reset our device counter
        $sql = "UPDATE discoveries SET device_count = 0, updated_on = NOW() WHERE id = ?";
        $data = array(intval($id));
        $this->run_sql($sql, $data);
        return;
    }
}
