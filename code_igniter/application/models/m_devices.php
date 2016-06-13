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
@version 1.14
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
                if ($item->name == 'id') {
                    $item->name = 'system.id';
                }
                if (!empty($item->name)) {
                    $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
                }
            }
        }
        if (stripos($filter, ' status ') === false and stripos($filter, ' system.status ') === false) {
            $filter .= ' AND system.status = "production"';
            $temp = new stdClass();
            $temp->name = 'system.status';
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
                        $join .= ' LEFT JOIN `' . $table . '` ON (system.id = `' . $table . '`.system_id AND ' . $table . '.current = "' . $CI->response->current . '") ';
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
        $sql = "SELECT `org_id` FROM `system` WHERE system.id = ?";
        $sql = $this->clean_sql($sql);
        $data = array(intval($CI->response->id));
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (!isset($result[0]->org_id)) {
            $org_id = 0;
        } else {
            $org_id = intval($result[0]->org_id);
        }
        if (empty($CI->user->orgs[$org_id])) {
            return 0;
        } else {
            return(intval($CI->user->orgs[$org_id]));
        }
    }

    public function read()
    {
        $CI = & get_instance();
        $this->load->model('m_devices_components');
        $this->load->model('m_system');
        $sql = "SELECT * FROM `system` WHERE system.id = ?";
        $sql = $this->clean_sql($sql);
        $data = array($CI->response->id);
        $query = $this->db->query($sql, $data);
        $document['system'] = $query->result();

        // the credentials object
        $document['credentials'] = array();
        $document['credentials'][0] = $this->m_system->get_credentials($CI->response->id);

        // the location object
        $sql = "SELECT oa_location.id, oa_location.name, oa_location.type, IF(system.location_room != '', system.location_room, oa_location.room) as room, IF(system.location_suite != '', system.location_suite, oa_location.suite) as suite, IF(system.location_level != '', system.location_level, oa_location.level) as level, oa_location.address, oa_location.suburb, oa_location.city, oa_location.postcode, oa_location.state, oa_location.country, oa_location.phone, system.location_rack as rack, system.location_rack_position as rack_position, system.location_rack_size as rack_size FROM system LEFT JOIN oa_location ON (system.location_id = oa_location.id) WHERE system.id = ?";
        $sql = $this->clean_sql($sql);
        $data = array($CI->response->id);
        $query = $this->db->query($sql, $data);
        $document['location'] = $query->result();

        // the additional_fields object
        $sql = "SELECT additional_field.id as `additional_field.id`, additional_field.group_id AS `additional_field.group_id`, additional_field.name AS `additional_field.name`, additional_field.type AS `additional_field.type`, additional_field.values AS `additional_field.values`, additional_field.placement AS `additional_field.placement`, additional_field_item.* FROM additional_field LEFT JOIN additional_field_item ON (additional_field_item.additional_field_id = additional_field.id AND (additional_field_item.system_id = ? OR additional_field_item.system_id IS NULL))";
        $sql = $this->clean_sql($sql);
        $data = array($CI->response->id);
        $query = $this->db->query($sql, $data);
        $document['additional_fields'] = $query->result();

        // the purchase object
        $sql = "SELECT asset_number, purchase_invoice, purchase_order_number, purchase_cost_center, purchase_vendor, purchase_date, purchase_service_contract_number, lease_expiry_date, purchase_amount, warranty_duration, warranty_expires, warranty_type FROM system WHERE id = ?";
        $sql = $this->clean_sql($sql);
        $data = array($CI->response->id);
        $query = $this->db->query($sql, $data);
        $document['purchase'] = $query->result();

        $tables = array('audit_log', 'bios', 'change_log', 'disk', 'dns', 'edit_log', 'file', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'optical', 'partition', 'pagefile', 'print_queue', 'processor', 'route', 'san', 'scsi', 'service', 'server', 'server_item', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
        foreach ($tables as $table) {
            $result = $this->m_devices_components->read($CI->response->id, $CI->response->current, $table, $CI->response->filter, '*');
            if (count($result) > 0) {
                $document[$table] = $result;
            }
        }
        return($document);
    }

    public function read_sub_resource()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();

        if ($CI->response->sub_resource == 'location') {
            $sql = "SELECT oa_location.id, oa_location.name, oa_location.type, IF(system.location_room != '', system.location_room, oa_location.room) as room, IF(system.location_suite != '', system.location_suite, oa_location.suite) as suite, IF(system.location_level != '', system.location_level, oa_location.level) as level, oa_location.address, oa_location.suburb, oa_location.city, oa_location.postcode, oa_location.state, oa_location.country, oa_location.phone, system.location_rack as rack, system.location_rack_position as rack_position, system.location_rack_size as rack_size FROM system LEFT JOIN oa_location ON (system.location_id = oa_location.id) WHERE system.id = ?";
            $data = array($CI->response->id);

        } elseif ($CI->response->sub_resource == 'purchase') {
            $sql = "SELECT asset_number, purchase_invoice, purchase_order_number, purchase_cost_center, purchase_vendor, purchase_date, purchase_service_contract_number, lease_expiry_date, purchase_amount, warranty_duration, warranty_expires, warranty_type FROM system WHERE id = ?";
            $data = array($CI->response->id);

        } else {
            $sql = "SELECT " . $CI->response->properties . " FROM `" . $CI->response->sub_resource . "` LEFT JOIN system ON (system.id = `" . $CI->response->sub_resource . "`.system_id) WHERE system.org_id IN (" . $CI->user->org_list . ") AND system.id = " . intval($CI->response->id) . " " . $filter . " " . $CI->response->internal->sort . " " . $CI->response->internal->limit;
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

    public function collection()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $join = $this->build_join();
        $properties = $this->build_properties();

        if ($CI->response->sort == '') {
            if (stripos($properties, 'system.id') !== false) {
                $CI->response->internal->sort = 'ORDER BY system.id';
            }
        }
        $sql = "SELECT count(*) as total FROM system " . $join . " WHERE system.org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->internal->groupby;
        $result = $this->run_sql($sql, array());
        if (!empty($result[0]->total)) {
            $CI->response->total = intval($result[0]->total);
        } else {
            $result = array();
            $this->count_data($result);
            return false;
        }
        unset($result);
        $sql = "SELECT " . $CI->response->internal->properties . " FROM system " . $join . " WHERE system.org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->internal->groupby . " " . $CI->response->internal->sort . " " . $CI->response->internal->limit;
        $result = $this->run_sql($sql, array());
        $this->count_data($result);
        if (count($result) == 0) {
            return false;
        }
        return $result;
    }

    public function collection_sub_resource()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $sql = "SELECT " . $CI->response->internal->properties . " FROM `" . $CI->response->sub_resource . "` LEFT JOIN system ON (system.id = `" . $CI->response->sub_resource . "`.system_id) WHERE system.org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->internal->groupby . " " . $CI->response->internal->sort . " " . $CI->response->internal->limit;
        $result = $this->run_sql($sql, array());
        return $result;
    }

    public function report()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $join = $this->build_join();

        $sql = "SELECT system.id FROM system " . $join . " WHERE system.org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->internal->groupby;
        $result = $this->run_sql($sql, array());
        foreach ($result as $temp) {
            $temp_ids[] = $temp->id;
        }
        $system_id_list = implode(',', $temp_ids);
        unset($temp, $temp_ids);

        $sql = "SELECT * FROM oa_report WHERE report_id = " . intval($CI->response->sub_resource_id);
        $result = $this->run_sql($sql, array());
        $report = $result[0];
        $CI->response->sub_resource_name = $report->report_name;
                         
        # not how reports should be used                  
        $report->report_sql = str_ireplace('LEFT JOIN oa_group_sys ON system.id = oa_group_sys.system_id', '', $report->report_sql);
        # not how reports should be used   
        $report->report_sql = str_ireplace('LEFT JOIN oa_group_sys ON oa_group_sys.system_id = system.id', '', $report->report_sql);
        # not how reports should be used   
        $report->report_sql = str_ireplace('LEFT JOIN oa_group_sys ON (system.id = oa_group_sys.system_id)', '', $report->report_sql);
        # THIS is how reports _should_ be used
        $report->report_sql = str_ireplace('LEFT JOIN oa_group_sys ON (oa_group_sys.system_id = system.id)', '', $report->report_sql);
        $report->report_sql = str_ireplace('oa_group_sys.group_id = @group', 'system.id IN (' . $system_id_list . ')', $report->report_sql);
        $report->report_sql = str_ireplace('system.id = oa_group_sys.system_id', 'system.id IN (' . $system_id_list . ')', $report->report_sql);

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
        #print_r($CI->response->post_data); exit();
        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;
        $custom = 'n';

        # test to see if we're updating a field from additional_field_item table
        # these fields will be prefixed with custom_
        foreach ($CI->response->post_data as $key => $value) {
            if (stripos($key, 'custom_') !== false) {
                $custom = 'y';
            }
        }

        # update the field in additional_field_item (or insert it)
        if ($custom == 'y') {
            foreach ($CI->response->post_data as $key => $value) {
                if ($key != 'id') {
                    $field_name = str_replace('custom_', '', $key);
                    $field_value = $value;
                } else {
                    $id = $value;
                }
            }
            $sql = "SELECT * FROM additional_field WHERE name = ?";
            $data = array("$field_name");
            $result = $this->run_sql($sql, $data);
            $additional_field = $result[0];
            $sql = "SELECT * FROM additional_field_item WHERE system_id = ? AND additional_field_id = ?";
            $data = array(intval($id), intval($additional_field->id));
            $result = $this->run_sql($sql, $data);
            if (count($result) > 0) {
                #update
                $sql = "UPDATE additional_field_item SET value = ?, timestamp = NOW() WHERE id = ?";
                $data = array("$field_value", intval($result[0]->id));
                $this->run_sql($sql, $data);
            } else {
                #insert
                $sql = "INSERT INTO additional_field_item (id, system_id, additional_field_id, timestamp, value) VALUES (NULL, ?, ?, NOW(), ?)";
                $data = array(intval($id), intval($additional_field->id), "$field_value");
                $this->run_sql($sql, $data);
            }
        }

        # update a standard field in the system table
        if ($custom == 'n') {
            $fields = implode(' ', $this->db->list_fields('system'));
            foreach ($CI->response->post_data as $key => $value) {
                if ($key != 'id' and stripos($fields, ' '.$key.' ') !== false) {
                    $sql = "/* m_devices::update */ " . "UPDATE system SET `" . $key . "` = ? WHERE id = ?";
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

    /**
    * Pass in a string detailing what has attempted to set a value and recieve a result containing the weight
    *
    * @param   string $set_by The source
    * @access  public
    * @return  int the integer containing the weighted value
    */
    public function weight($set_by = 'user')
    {
        // We assign a weight to the submitted data and compare it to what we already have for each column
        // Valid weights and the sources are:
        // 1000 - user or import (import should set as user as well)
        // 2000 - audit
        // 3000 - snmp
        // 4000 - ad (active directory)
        // 5000 - nmap
        // The lower the value, the higher the priority is given

        if ($set_by == 'user') {
            $weight = 1000;
        } elseif ($set_by == 'audit') {
            $weight = 2000;
        } elseif ($set_by == 'snmp') {
            $weight = 3000;
        } elseif ($set_by == 'ad') {
            $weight = 4000;
        }elseif ($set_by == 'nmap') {
            $weight = 5000;
        } else {
            $weight = 2500;
        }
        return($weight);
    }

    /**
    * Pass in a resultset and have the integer columns return as INT types, not strings
    * Columns named id, free, size, speed, total or used will be converted to integer types.
    * Columns names ending in _id, _count, _percent or _Size will be converted to integer types
    *
    * @param   array $result the result of a query, an array of objects
    * @access  public
    * @return  array an array of objects with the integer columns set as int types
    */
    public function from_db ($result)
    {
        foreach ($result as &$row) {
            foreach ($row as $key => $value) {
                if ($key == 'id' or $key == 'free' or $key == 'size' or $key == 'speed' or $key == 'total' or $key == 'used' or
                strrpos($key, '_id') === strlen($key)-3 or strrpos($key, '_count') === strlen($key)-6 or
                strrpos($key, '_percent') === strlen($key)-8 or strrpos($key, '_size') === strlen($key)-5 ) {
                    $row->$key = (int) intval($value);
                }
            }
        }
        return($result);
    }

    /**
    * Insert a new device into the system table using whatever values we have and insert corresponding rows into the sys_edit_log table
    *
    * @param array $details the array of attributes from the system table
    * @access  public
    *
    * @return string $id which is the id of the device in the system table
    */
    public function create(&$details)
    {
        # nasty hack because when a simplexmlobject is sent (ie, from audit_windows.vbs)
        # the foreach iterators below don't work.
        # if we cast it to an "object", it stays as a SimpleXMLObject and doesn't work
        # because our XML is quite simple, we can cast it to an array and back to a 'normal'
        # object and the foreach below works.
        $details = (object) $details;
        $details = (array) $details;
        $details = (object) $details;
        # this is an insert - we do NOT want a system.id
        unset($details->id);

        // get a name we can use
        if (!empty($details->name)) {
            $name = $details->name;
        } elseif (!empty($details->hostname)) {
            $name = $details->hostname;
            $details->name = $details->hostname;
        } elseif (!empty($details->dns_hostname)) {
            $name = $details->dns_hostname;
            $details->name = $details->dns_hostname;
        } elseif (!empty($details->sysName)) {
            $name = $details->sysName;
            $details->name = $details->sysName;
        }

        if (!isset($details->ip)) {
            $details->ip = '';
        }

        $log_details = new stdClass();
        $log_details->message = 'System insert start for '.ip_address_from_db($details->ip).' ('.$name.')';
        $log_details->severity = 7;
        $log_details->file = 'system';
        stdlog($log_details);

        $details->os_name = str_ireplace("(r)", "", $details->os_name);
        $details->os_name = str_ireplace("(tm)", "", $details->os_name);
        if (empty($details->status)) {
            $details->status = 'production';
        }
        if (empty($details->type)) {
            $details->type = 'unknown';
        } else {
            $details->type = strtolower($details->type);
        }
        if (empty($details->environment)) {
            $details->environment = 'production';
        }

        # we now set a default location - 0 the location_id
        if (!isset($details->location_id)) {
            $details->location_id = '0';
        }

        if ((strripos($details->manufacturer, "vmware") !== false) or
            (strripos($details->manufacturer, "parallels") !== false) or
            (strripos($details->manufacturer, "virtual") !== false)) {
            if (!isset($details->class) or $details->class != 'hypervisor') {
                $details->form_factor = 'Virtual';
                $details->form_factor = 'Virtual';
            }
        }

        $details->ip = ip_address_to_db($details->ip);

        if (!empty($details->dns_hostname) and !empty($details->dns_domain) and empty($details->fqdn)) {
            $details->fqdn = $details->dns_hostname.".".$details->dns_domain;
        }

        $sql = "SHOW COLUMNS FROM system";
        $query = $this->db->query($sql);
        $columns = $query->result();

        $sql = "INSERT INTO system ( ";
        foreach ($details as $key => $value) {
            if ($key > '') {
                # need to iterate through available columns and only insert where $key == valid column name
                foreach ($columns as $column) {
                    if ($key == $column->Field) {
                        $sql .= $key.", ";
                    }
                }
            }
        }
        $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
        $sql .= " ) VALUES ( ";
        foreach ($details as $key => $value) {
            if ($key > '') {
                foreach ($columns as $column) {
                    if ($key == $column->Field) {
                        $sql .= "'".mysql_real_escape_string(str_replace('"', '', $value))."', ";
                    }
                }
            }
        }
        $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
        $sql .= ")";

        $query = $this->db->query($sql);
        $details->id = $this->db->insert_id();

        // set the weight for these $details
        $weight = $this->weight($details->last_seen_by);

        // insert entries into the edit_log table for these $details columns
        foreach ($details as $key => $value) {
            if (($key != '') and ($value != '')) {
                $sql = "INSERT INTO edit_log VALUES (NULL, 0, ?, '', ?, ?, 'system', ?, ?, ?, ?)";
                $data = array("$details->id", "$details->last_seen_by", "$weight", "$key", "$details->last_seen", "$value", "");
                $query = $this->db->query($sql, $data);
            }
        }

        # update the device icon
        $this->reset_icons($details->id);

        # insert a subnet so we have a default
        if (!isset($details->subnet) or $details->subnet == '') {
            $details->subnet = '0.0.0.0';
        }

        $log_details->message = 'System insert end for '.ip_address_from_db($details->ip).' ('.$name.') (System ID '.$details->id.')';
        stdlog($log_details);
        unset($log_details);
        return $details->id;
    }

    /**
    * Reset the icon for a single device or all devices.
    *
    * @param int $id The system.id of a given system
    * @access  public
    *
    * @return int returns the count of the number of icons affected
    */
    public function reset_icons($id = '')
    {
        if ($id != '') {
            $sql = "SELECT id, type, os_name, os_family, os_group, manufacturer FROM system WHERE id = ".$id;
        } else {
            $sql = "SELECT id, type, os_name, os_family, os_group, manufacturer FROM system";
        }
        $query = $this->db->query($sql);
        $result = $query->result();
        $count = $query->num_rows();
        // we set computer icons by OS, everything else by type
        foreach ($result as $details) {
            if ($details->type == 'computer') {
                // determine icon for computer
                // most generic to most specific

                // manufacturer based
                if (strripos($details->manufacturer, "apple") !== false) {
                    $details->icon = 'apple';
                }
                if (strripos($details->manufacturer, "vmware") !== false) {
                    $details->icon = 'vmware';
                }

                // os_group based
                if (strripos($details->os_group, "linux") !== false) {
                    $details->icon = 'linux';
                }
                if (strripos($details->os_group, "apple") !== false) {
                    $details->icon = 'apple';
                }
                if (strripos($details->os_group, "windows") !== false) {
                    $details->icon = 'windows';
                }

                // os name based
                if ((strripos($details->os_name, "osx") !== false) or
                    (strpos(strtolower($details->os_name), "ios") !== false)) {
                    $details->icon = 'apple';
                }
                if (strripos($details->os_name, "bsd") !== false) {
                    $details->icon = 'bsd';
                }
                if (strripos($details->os_name, "centos") !== false) {
                    $details->icon = 'centos';
                }
                if (strripos($details->os_name, "debian") !== false) {
                    $details->icon = 'debian';
                }
                if (strripos($details->os_name, "fedora") !== false) {
                    $details->icon = 'fedora';
                }
                if ((strripos($details->os_name, "mandriva") !== false) or
                    (strripos($details->os_name, "mandrake") !== false)) {
                    $details->icon = 'mandriva';
                }
                if (strripos($details->os_name, "mint") !== false) {
                    $details->icon = 'mint';
                }
                if (strripos($details->os_name, "novell") !== false) {
                    $details->icon = 'novell';
                }
                if (strripos($details->os_name, "slackware") !== false) {
                    $details->icon = 'slackware';
                }
                if (strripos($details->os_name, "suse") !== false) {
                    $details->icon = 'suse';
                }
                if ((strripos($details->os_name, "red hat") !== false) or
                    (strripos($details->os_name, "redhat") !== false)) {
                    $details->icon = 'redhat';
                }
                if (strripos($details->os_name, "ubuntu") !== false) {
                    $details->icon = 'ubuntu';
                }
                if (strripos($details->os_name, "vmware") !== false) {
                    $details->icon = 'vmware';
                }
                if (strripos($details->os_name, "windows") !== false) {
                    $details->icon = 'windows';
                }
                if (strripos($details->os_name, "microsoft") !== false) {
                    $details->icon = 'windows';
                }
            } else {
                // device is not type=computer
                // base the icon on the type
                if (strpos($details->type, "|") === false) {
                    // if the type does not contain a |, use it.
                    // Nmap will often return a pipe separated list when it guesses
                    $details->icon = str_replace(" ", "_", $details->type);
                } else {
                    // we have a pipe (likely an nmap list) so just just unknown
                    $details->icon = 'unknown';
                }
            }

            $sql = "UPDATE system SET icon = ? WHERE id = ?";
            $data = array("$details->icon", "$details->id");
            $query = $this->db->query($sql, $data);
        }

        return ($count);
    }

    public function update_devices_icons($id = '')
    {
        if ($id != '') {
            $sql = "SELECT system.id, type, os_name, os_family, os_group, manufacturer FROM system LEFT JOIN oa_group_sys ON oa_group_sys.system_id = system.id WHERE oa_group_sys.group_id = ".intval($id);
        } else {
            $sql = "SELECT id, type, os_name, os_family, os_group, manufacturer FROM system";
        }
        $query = $this->db->query($sql);
        $result = $query->result();
        $count = $query->num_rows();
        // we set computer icons by OS, everything else by type
        foreach ($result as $details) {
            if ($details->type == 'computer') {
                // determine icon for computer
                // most generic to most specific

                // manufacturer based
                if (strripos($details->manufacturer, "apple") !== false) {
                    $details->icon = 'apple';
                }
                if (strripos($details->manufacturer, "vmware") !== false) {
                    $details->icon = 'vmware';
                }

                // os_group based
                if (strripos($details->os_group, "linux") !== false) {
                    $details->icon = 'linux';
                }
                if (strripos($details->os_group, "apple") !== false) {
                    $details->icon = 'apple';
                }
                if (strripos($details->os_group, "windows") !== false) {
                    $details->icon = 'windows';
                }

                // os name based
                if ((strripos($details->os_name, "osx") !== false) or
                    (strpos(strtolower($details->os_name), "ios") !== false)) {
                    $details->icon = 'apple';
                }
                if (strripos($details->os_name, "bsd") !== false) {
                    $details->icon = 'bsd';
                }
                if (strripos($details->os_name, "centos") !== false) {
                    $details->icon = 'centos';
                }
                if (strripos($details->os_name, "debian") !== false) {
                    $details->icon = 'debian';
                }
                if (strripos($details->os_name, "fedora") !== false) {
                    $details->icon = 'fedora';
                }
                if ((strripos($details->os_name, "mandriva") !== false) or
                    (strripos($details->os_name, "mandrake") !== false)) {
                    $details->icon = 'mandriva';
                }
                if (strripos($details->os_name, "mint") !== false) {
                    $details->icon = 'mint';
                }
                if (strripos($details->os_name, "novell") !== false) {
                    $details->icon = 'novell';
                }
                if (strripos($details->os_name, "slackware") !== false) {
                    $details->icon = 'slackware';
                }
                if (strripos($details->os_name, "suse") !== false) {
                    $details->icon = 'suse';
                }
                if ((strripos($details->os_name, "red hat") !== false) or
                    (strripos($details->os_name, "redhat") !== false)) {
                    $details->icon = 'redhat';
                }
                if (strripos($details->os_name, "ubuntu") !== false) {
                    $details->icon = 'ubuntu';
                }
                if (strripos($details->os_name, "vmware") !== false) {
                    $details->icon = 'vmware';
                }
                if (strripos($details->os_name, "windows") !== false) {
                    $details->icon = 'windows';
                }
                if (strripos($details->os_name, "microsoft") !== false) {
                    $details->icon = 'windows';
                }
            } else {
                // device is not type=computer
                // base the icon on the type
                if (strpos($details->type, "|") === false) {
                    // if the type does not contain a |, use it.
                    // Nmap will often return a pipe separated list when it guesses
                    $details->icon = str_replace(" ", "_", $details->type);
                } else {
                    // we have a pipe (likely an nmap list) so just just unknown
                    $details->icon = 'unknown';
                }
            }

            $sql = "UPDATE system SET icon = ? WHERE id = ?";
            $data = array("$details->icon", "$details->id");
            $query = $this->db->query($sql, $data);
        }

        return ($count);
    }

}
