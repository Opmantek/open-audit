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
                if (!empty($item->name)) {
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
                        $join .= ' LEFT JOIN `' . $table . '` ON (system.system_id = `' . $table . '`.system_id AND ' . $table . '.current = "' . $CI->response->current . '") ';
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
        $this->load->model('m_system');
        $sql = "SELECT * FROM system WHERE system_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array($CI->response->id);
        $query = $this->db->query($sql, $data);
        $document['system'] = $query->result();

        // the credentials object
        $document['credentials'] = array();
        $document['credentials'][0] = $this->m_system->get_credentials($CI->response->id);

        // the location object
        $sql = "SELECT oa_location.id, oa_location.name, oa_location.type, IF(system.man_location_room != '', system.man_location_room, oa_location.room) as room, IF(system.man_location_suite != '', system.man_location_suite, oa_location.suite) as suite, IF(system.man_location_level != '', system.man_location_level, oa_location.level) as level, oa_location.address, oa_location.suburb, oa_location.city, oa_location.postcode, oa_location.state, oa_location.country, oa_location.phone, system.man_location_rack as rack, system.man_location_rack_position as rack_position, system.man_location_rack_size as rack_size FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.id) WHERE system.system_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array($CI->response->id);
        $query = $this->db->query($sql, $data);
        $document['location'] = $query->result();

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

        if ($CI->response->sub_resource == 'location') {
            $sql = "SELECT oa_location.id, oa_location.name, oa_location.type, IF(system.man_location_room != '', system.man_location_room, oa_location.room) as room, IF(system.man_location_suite != '', system.man_location_suite, oa_location.suite) as suite, IF(system.man_location_level != '', system.man_location_level, oa_location.level) as level, oa_location.address, oa_location.suburb, oa_location.city, oa_location.postcode, oa_location.state, oa_location.country, oa_location.phone, system.man_location_rack as rack, system.man_location_rack_position as rack_position, system.man_location_rack_size as rack_size FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.id) WHERE system.system_id = ?";
            $data = array($CI->response->id);
        } else {
            $sql = "SELECT " . $CI->response->properties . " FROM `" . $CI->response->sub_resource . "` LEFT JOIN system ON (system.system_id = `" . $CI->response->sub_resource . "`.system_id) WHERE system.man_org_id IN (" . $CI->user->org_list . ") AND system.system_id = " . intval($CI->response->id) . " " . $filter . " " . $CI->response->internal->sort . " " . $CI->response->internal->limit;
            $data = array($CI->user->id);
        }
        $sql = $this->clean_sql($sql);
        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;
        $query = $this->db->query($sql, $data);
        if ($CI->response->debug) {
            $CI->response->sql = $this->db->last_query();
        }
        $this->db->db_debug = $temp_debug;
        if ($this->db->_error_message()) {
            log_error('ERR-0009', 'm_devices::read_device_sub_resource');
            $CI->response->errors[count($this->response->errors)-1]->detail_specific = $this->db->_error_message();
            return false;
        }
        $result = $query->result();
        if (count($result) == 0) {
            return false;
        } else {
            return ($result);
        }
    }

    private function run_sql($sql, $data = array())
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
        if ($CI->response->debug) {
            $CI->response->sql = $this->db->last_query();
        }
        // restore the original setting to db_debug
        $this->db->db_debug = $temp_debug;
        unset($temp_debug);
        // do we have an error?
        if ($this->db->_error_message()) {
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function']));
            $CI->response->errors[count($this->response->errors)-1]->detail_specific = $this->db->_error_message();
            return false;
        }
        // no error, so get the result
        $result = $query->result();
        return ($result);
    }

    public function read_devices()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $join = $this->build_join();
        $properties = $this->build_properties();

        if ($CI->response->sort == '') {
            if (stripos($properties, 'system.system_id') !== false) {
                $CI->response->internal->sort = 'ORDER BY system.system_id';
            }
        }
        $sql = "SELECT count(*) as total FROM system " . $join . " WHERE system.man_org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->internal->groupby;
        $result = $this->run_sql($sql, array());
        if (!empty($result[0]->total)) {
            $CI->response->total = intval($result[0]->total);
        } else {
            $result = array();
            $this->count_data($result);
            return false;
        }
        unset($result);
        $sql = "SELECT " . $CI->response->internal->properties . " FROM system " . $join . " WHERE system.man_org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->internal->groupby . " " . $CI->response->internal->sort . " " . $CI->response->internal->limit;
        $result = $this->run_sql($sql, array());
        $this->count_data($result);
        if (count($result) == 0) {
            return false;
        }
        return $result;
    }

    public function read_devices_sub_resource()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $sql = "SELECT " . $CI->response->internal->properties . " FROM `" . $CI->response->sub_resource . "` LEFT JOIN system ON (system.system_id = `" . $CI->response->sub_resource . "`.system_id) WHERE system.man_org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->internal->groupby . " " . $CI->response->internal->sort . " " . $CI->response->internal->limit;
        $result = $this->run_sql($sql, array());
        return $result;
    }

    public function report()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $join = $this->build_join();

        $sql = "SELECT system.system_id FROM system " . $join . " WHERE system.man_org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->internal->groupby;
        $result = $this->run_sql($sql, array());
        foreach ($result as $temp) {
            $temp_ids[] = $temp->system_id;
        }
        $system_id_list = implode(',', $temp_ids);
        unset($temp, $temp_ids);

        $sql = "SELECT * FROM oa_report WHERE report_id = " . intval($CI->response->sub_resource_id);
        $result = $this->run_sql($sql, array());
        $report = $result[0];

        $report->report_sql = str_ireplace('LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id', '', $report->report_sql);
        $report->report_sql = str_ireplace('LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id)', '', $report->report_sql);
        $report->report_sql = str_ireplace('oa_group_sys.group_id = @group', 'system.system_id IN (' . $system_id_list . ')', $report->report_sql);
        $report->report_sql = str_ireplace('system.system_id = oa_group_sys.system_id', 'system.system_id IN (' . $system_id_list . ')', $report->report_sql);

        $result = $this->run_sql($report->report_sql, array());
        $CI->response->total = count($result);
        if (!empty($CI->response->limit)) {
            $result = array_splice($result, $CI->response->offset, $CI->response->limit);
        }
        return($result);
    }


    public function update()
    {
        $CI = & get_instance();
        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;
        $fields = implode(' ', $this->db->list_fields('system'));
        foreach ($CI->response->post_data as $key => $value) {
            if ($key != 'system_id' and stripos($fields, ' '.$key.' ') !== false) {
                $sql = "UPDATE system SET `" . $key . "` = ? WHERE system_id = ?";
                $sql = $this->clean_sql($sql);
                $data = array("$value", intval($CI->response->id));
                $query = $this->db->query($sql, $data);
                if ($CI->response->debug) {
                    $CI->response->sql = $this->db->last_query();
                }
                if ($this->db->_error_message()) {
                    log_error('ERR-0009', 'm_devices::update');
                    $CI->response->errors[count($this->response->errors)-1]->detail_specific = $this->db->_error_message();
                    return false;
                }
            }
        }
        $this->db->db_debug = $temp_debug;
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
