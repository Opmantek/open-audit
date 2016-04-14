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
 * @version 1.12.4
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_devices extends MY_Model
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
                $temp[$i] = 'system.'.trim($temp[$i]);
            } else {
                $temp[$i] = trim($temp[$i]);
            }
        }
        $properties = implode(',', $temp);
        return($properties);
    }

    private function build_filter() {
        $CI = & get_instance();
        $reserved = ' properties limit sub_resource action sort current offset format ';
        $filter = '';
        foreach ($CI->response->filter as $item) {
            if (strpos(' '.$item->name.' ', $reserved) === false) {
                if ($item->name == 'system_id') {
                    $item->name = 'system.system_id';
                }
                if (!empty($item->name) and !empty($item->value)) {
                    $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
                }
            }
        }
        if (stripos($filter, ' status ') !== false) {
            $filter = str_ireplace(' status ', ' man_status ', $filter);
        }
        if (stripos($filter, ' man_status ') === false) {
            $filter .= ' AND man_status = "production"';
            $temp = new stdClass();
            $temp->name = 'status';
            $temp->operator = '=';
            $temp->value = 'production';
            $CI->response->filter[] = $temp;
            unset($temp);
        }
        return($filter);
    }

    private function build_join() {
        $CI = & get_instance();
        $reserved = ' properties limit sub_resource action sort current offset format ';
        $join = '';
        if (count($CI->response->filter) > 0) {
            foreach ($CI->response->filter as $item) {
                if (strpos($item->name, '.') !== false) {
                    $table = substr($item->name, 0, strpos($item->name, '.'));
                    if ($table != 'system') {
                        $join .= ' LEFT JOIN ' . $table . ' ON (system.system_id = ' . $table . '.system_id AND ' . $table . '.current = "' . $CI->response->current . '") ';
                    }
                }
            }
        }
        return($join);
    }

    public function get_user_device_group_access()
    {
        $CI = & get_instance();
        $sql = "SELECT group_user_access_level as access_level FROM oa_group_user LEFT JOIN oa_group_sys ON (oa_group_user.group_id = oa_group_sys.group_id) WHERE oa_group_sys.system_id = ? AND oa_group_user.user_id = ? ORDER BY group_user_access_level DESC LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array(intval($CI->response->id), intval($CI->user->id));
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (!isset($result[0]->access_level) or $result[0]->access_level == '0') {
            return(0);
        }
        return(intval($result[0]->access_level));
    }

    public function get_user_device_org_access()
    {
        $CI = & get_instance();
        $sql = "SELECT man_org_id FROM system WHERE system_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array(intval($CI->response->id));
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (!isset($result[0]->man_org_id)) {
            $org_id = 0;
        } else {
            $org_id = intval($result[0]->man_org_id);
        }
        if (empty($CI->user->orgs[$org_id])) {
            return 0;
        } else {
            return(intval($CI->user->orgs[$org_id]));
        }
    }

    public function read_device()
    {
        $CI = & get_instance();
        $this->load->model('m_devices_components');
        $sql = "SELECT * FROM system WHERE system_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array($CI->response->id);
        $query = $this->db->query($sql, $data);
        $document['system'] = $query->result();
        $tables = array('audit_log', 'bios', 'change_log', 'disk', 'dns', 'edit_log', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'optical', 'partition', 'pagefile', 'print_queue', 'processor', 'route', 'san', 'scsi', 'service', 'server', 'server_item', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
        foreach ($tables as $table) {
            $result = $this->m_devices_components->read($CI->response->id, $CI->response->current, $table, $CI->response->filter, '*');
            if (count($result) > 0) {
                $document[$table] = $result;
            }
        }
        return($document);
    }

    public function read_device_sub_resource()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();

        // use the below for old style Group permissions
        // $sql = "SELECT " . $CI->response->properties . " FROM " . $CI->response->sub_resource . " WHERE system_id IN (SELECT DISTINCT system_id FROM oa_group_sys LEFT JOIN oa_group_user ON (oa_group_sys.group_id = oa_group_user.group_id AND oa_group_user.group_user_access_level > 0) WHERE oa_group_user.user_id = " . intval($CI->user->id) . ") AND system_id = " . intval($CI->response->id) . " " . $filter . " " . $CI->response->sort . " " . $CI->response->limit;
        
        // use the below for new style Org permissions
        $sql = "SELECT " . $CI->response->properties . " FROM " . $CI->response->sub_resource . " LEFT JOIN system ON (system.system_id = " . $CI->response->sub_resource . ".system_id) WHERE system.man_org_id IN (" . $CI->user->org_list . ") AND system.system_id = " . intval($CI->response->id) . " " . $filter . " " . $CI->response->sort . " LIMIT " . $CI->response->offset . "," . $CI->response->limit;
        $sql = $this->clean_sql($sql);
        $data = array($CI->user->id);
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
            $CI->error->function = 'm_devices::read_device_sub_resource';
            $CI->error->code = 'ERR-0009';
            log_error($CI->error);
            $CI->response->error->detail_specific = $this->db->_error_message();
            return false;
        }
        $result = $query->result();
        if (count($result) == 0) {
            return false;
        } else {
            return ($result);
        }
    }

    public function read_devices()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $join = $this->build_join();
        $properties = $this->build_properties();

        // use the below for old style Group permissions
        // $sql = "SELECT " . $properties . " FROM system " . $join . " WHERE system.system_id IN (SELECT DISTINCT system_id FROM oa_group_sys LEFT JOIN oa_group_user ON (oa_group_sys.group_id = oa_group_user.group_id AND oa_group_user.group_user_access_level > 0) WHERE oa_group_user.user_id = " . intval($this->user->id) . ") " . $filter . " " . $CI->response->sort . " " . $CI->response->limit;

        // use the below for new style Org permissions
        $sql = "SELECT " . $properties . " FROM system " . $join . " WHERE system.man_org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->groupby . " " . $CI->response->sort . " LIMIT " . $CI->response->offset . "," . $CI->response->limit;
        $sql = $this->clean_sql($sql);
        $data = array($CI->user->id);
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
            $CI->error->function = 'm_devices::read_devices';
            $CI->error->code = 'ERR-0009';
            log_error($CI->error);
            $CI->response->error->detail_specific = $this->db->_error_message();
            return false;
        }
        $result = $query->result();
        if (count($result) == 0) {
            if (empty($CI->error)) {
                $CI->error = new stdClass();
            }
            $CI->error->function = 'm_devices::readDevices';
            $CI->error->code = 'ERR-0005';
            log_error($CI->error);
            return false;
        } else {
            return ($result);
        }
    }

    public function read_devices_sub_resource()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();

        // use the below for old style Group permissions
        // $sql = "SELECT " . $CI->response->properties . " FROM " . $CI->response->sub_resource . " WHERE system_id IN (SELECT DISTINCT system_id FROM oa_group_sys LEFT JOIN oa_group_user ON (oa_group_sys.group_id = oa_group_user.group_id AND oa_group_user.group_user_access_level > 0) WHERE oa_group_user.id = ?) " . $filter . " " . $CI->response->groupby . " " . $CI->response->sort . " " . $CI->response->limit;

        // use the below for new style Org permissions
        $sql = "SELECT " . $CI->response->properties . " FROM " . $CI->response->sub_resource . " LEFT JOIN system ON (system.system_id = " . $CI->response->sub_resource . ".system_id) WHERE system.man_org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->groupby . " " . $CI->response->sort . " LIMIT " . $CI->response->offset . "," . $CI->response->limit;

        $sql = $this->clean_sql($sql);
        $data = array($CI->user->id);
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
            $CI->error->function = 'm_devices::read_devices_sub_resource';
            $CI->error->code = 'ERR-0009';
            log_error($CI->error);
            $CI->response->error->detail_specific = $this->db->_error_message();
            return false;
        }
        $result = $query->result();
        if (count($result) == 0) {
            return false;
        } else {
            return ($result);
        }
    }
}
