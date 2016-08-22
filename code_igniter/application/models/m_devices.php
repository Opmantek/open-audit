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
class M_devices extends MY_Model
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
        foreach ($CI->response->meta->filter as $item) {
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
            $CI->response->meta->filter[] = $temp;
            unset($temp);
        }
        return($filter);
    }

    private function build_join() {
        $CI = & get_instance();
        $reserved = ' properties limit sub_resource action sort current offset format ';
        $join = '';
        if (count($CI->response->meta->filter) > 0) {
            foreach ($CI->response->meta->filter as $item) {
                if (strpos($item->name, '.') !== false) {
                    $table = substr($item->name, 0, strpos($item->name, '.'));
                    if ($table != 'system') {
                        $join .= ' LEFT JOIN `' . $table . '` ON (system.id = `' . $table . '`.system_id AND ' . $table . '.current = "' . $CI->response->meta->current . '") ';
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
        $data = array(intval($CI->response->meta->id), intval($CI->user->id));
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
        $data = array(intval($CI->response->meta->id));
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

    public function get_related_tables($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if (empty($id)) {
            return false;
        }
        $return = array();
        $tables = array('audit_log', 'bios', 'change_log', 'credential', 'disk', 'dns', 'edit_log', 'file', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'optical', 'partition', 'pagefile', 'print_queue', 'processor', 'route', 'san', 'scsi', 'service', 'server', 'server_item', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
        foreach ($tables as $table) {
            $sql = "SELECT COUNT(*) AS `count` FROM `$table` WHERE system_id = " . intval($id);
            $result = $this->run_sql($sql, array());
            if (intval($result[0]->count) > 0) {
                $item = new stdClass();
                $item ->$table = new stdClass();
                $item->$table->links = new stdClass();
                $item->$table->links->self = $this->config->config['base_url'] . 'index.php/devices/' . $id . '/' . $table;
                $return[] = $item;
                unset($item);
            }
        }
        return ($return);
    }

    public function read($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if (empty($id)) {
            return false;
        }
        $CI = & get_instance();
        $this->load->model('m_devices_components');
        $this->load->model('m_system');
        $sql = "SELECT * FROM `system` WHERE system.id = ?";
        $sql = "SELECT `system`.*, GROUP_CONCAT(DISTINCT(`audit_log`.`type`)) AS `seen_by` FROM `system` LEFT JOIN `audit_log` ON `system`.`id` = `audit_log`.`system_id` WHERE `system`.`id` = ? GROUP BY `audit_log`.`system_id`";
        $sql = $this->clean_sql($sql);
        $result = $this->run_sql($sql, array($id));
        $sql = "SELECT additional_field.name, additional_field_item.value FROM additional_field_item RIGHT JOIN additional_field ON additional_field.id = additional_field_item.additional_field_id AND additional_field_item.system_id = ?";
        $result_fields = $this->run_sql($sql, array($id));
        foreach ($result_fields as $field) {
            $result[0]->{$field->name} = $field->value;
        }
        $result = $this->format_data($result, 'devices');
        return($result);
    }

    public function read_sub_resource($id = '', $sub_resource = '', $sub_resource_id = '', $properties = '', $sort = '', $current = 'y')
    {
        $CI = & get_instance();
        $log = new stdClass();
        $log->file = 'system';
        $log->level = 7;

        if ($id == '') {
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if (empty($id)) {
            $log->message = 'No ID, returning false';
            stdlog($log);
            return false;
        }

        if ($sub_resource == '') {
            $sub_resource = $CI->response->meta->sub_resource;
        }
        if (empty($sub_resource)) {
            $log->message = 'No sub_resource, returning false';
            stdlog($log);
            return false;
        }

        if ($sub_resource_id == '') {
            $sub_resource_id = intval($CI->response->meta->sub_resource_id);
        } else {
            $sub_resource_id = intval($sub_resource_id);
        }
        if (empty($sub_resource_id)) {
            $sub_resource_id = '';
        } else {
            $sub_resource_id = ' AND `' . $sub_resource . '`.id = ' . intval($sub_resource_id);
        }

        if ($properties == '') {
            $properties = @$CI->response->meta->properties;
        }
        if (empty($properties) or $properties == '*') {
            $properties = '`' . $sub_resource . '`.*';
        }

        if ($sort == '') {
            $sort = @$CI->response->meta->sort;
        }
        if (empty($sort)) {
            $sort = '';
        }

        if ($current != 'y') {
            $current = 'n';
        }

        $filter = $this->build_filter();

        if ($sub_resource == 'location') {
            $sql = "SELECT location_id, oa_location.name AS `location_name`, location_level, location_suite, location_room, location_rack, location_rack_position, location_rack_size, location_latitude, location_longitude FROM system LEFT JOIN oa_location ON (system.location_id = oa_location.id) WHERE system.id = ?";
            $data = array($id);

        } elseif ($sub_resource == 'purchase') {
            $sql = "SELECT asset_number, purchase_invoice, purchase_order_number, purchase_cost_center, purchase_vendor, purchase_date, purchase_service_contract_number, lease_expiry_date, purchase_amount, warranty_duration, warranty_expires, warranty_type FROM system WHERE id = ?";
            $data = array($id);

        } elseif ($sub_resource == 'additional_fields') {
            $sql = "SELECT additional_field.id as `additional_field.id`, additional_field.group_id AS `additional_field.group_id`, additional_field.name AS `additional_field.name`, additional_field.type AS `additional_field.type`, additional_field.values AS `additional_field.values`, additional_field.placement AS `additional_field.placement`, additional_field_item.* FROM additional_field LEFT JOIN additional_field_item ON (additional_field_item.additional_field_id = additional_field.id AND (additional_field_item.system_id = ? OR additional_field_item.system_id IS NULL))";
            $data = array($id);

        } else {

            $currency = '';
            $fields = $this->db->list_fields($sub_resource);
            foreach ($fields as $field) {
                if ($field == 'current') {
                    $currency = true;
                }
            }
            if ($currency != '') {
                $currency = "AND `" . $sub_resource . "`.`current` = '" . $current . "'" ;
            }

            $sql = "SELECT " . $properties . " FROM `" . $sub_resource . "` LEFT JOIN system ON (system.id = `" . $sub_resource . "`.system_id) WHERE system.org_id IN (" . $CI->user->org_list . ") AND system.id = " . $id . " " . $sub_resource_id . " " . $currency . " " . $filter . " " . $sort;
            $data = array($CI->user->id);
        }
        $result = $this->run_sql($sql, $data);

        if ($sub_resource == 'credential') {
            $this->load->library('encrypt');
            for ($i=0; $i < count($result); $i++) {
                $result[$i]->credentials = json_decode($this->encrypt->decode($result[$i]->credentials));
            }
        }

        $result = $this->format_data($result, 'devices/' . $id . '/' . $sub_resource);
        if (count($result) == 0) {
            return NULL;
        } else {
            return ($result);
        }
    }

    public function sub_resource_delete($id = 0, $sub_resource = 0, $sub_resource_id = 0) {
        $CI = & get_instance();
        if (empty($id)) {
            if (!empty($CI->response->meta->id)) {
                $id = intval($CI->response->meta->id);
            }
        }
        if (empty($id)) {
            return false;
        }

        if (empty($sub_resource)) {
            if (!empty($CI->response->meta->sub_resource)) {
                $sub_resource = intval($CI->response->meta->sub_resource);
            }
        }
        if (empty($sub_resource)) {
            return false;
        }

        if (empty($sub_resource_id)) {
            if (!empty($CI->response->meta->sub_resource_id)) {
                $sub_resource_id = intval($CI->response->meta->sub_resource_id);
            }
        }
        if (empty($sub_resource_id)) {
            return false;
        }
        $sql = "DELETE FROM `" . (string)$sub_resource . "` WHERE `system_id` = ? AND id = ?";
        $data = array(intval($id), intval($sub_resource_id));
        $result = $this->run_sql($sql, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function sub_resource_create($id = 0, $sub_resource = '', $data = '')
    {
        $CI = & get_instance();
        $CI = & get_instance();
        $log = new stdClass();
        $log->file = 'system';
        $log->level = 7;
        $log->message = "sub_resource_create start.";
        stdlog($log);

        if ($sub_resource == 'credential' or (!empty($CI->response->meta->sub_resource) and $CI->response->meta->sub_resource == 'credential')) {
            $this->load->library('encrypt');

            if (!empty($id)) {
                $device_ids[] = $id;
            } elseif (!empty($CI->response->meta->received_data->ids)) {
                $device_ids = explode(',', $CI->response->meta->received_data->ids);
            } elseif (!empty($CI->response->meta->id)) {
                $device_ids = array($CI->response->meta->id);
            } else {
                $log->message = "No ID, nor list of IDs supplied to sub_resource_create.";
                stdlog($log);
                return false;
            }

            foreach ($device_ids as $id) {
                if (!empty($data->credentials)) {
                    $credentials = $this->encrypt->encode(json_encode($data->credentials));
                } elseif (!empty($CI->response->meta->received_data->attributes->credentials)) {
                    $credentials = $this->encrypt->encode(json_encode($CI->response->meta->received_data->attributes->credentials));
                } else {
                    $log->message = "No credentials supplied to sub_resource_create.";
                    stdlog($log);
                    return false;
                }

                if (!empty($data->type)) {
                    $type = $data->type;
                } elseif (!empty($CI->response->meta->received_data->attributes->type)) {
                    $type = $CI->response->meta->received_data->attributes->type;
                } else {
                    $log->message = "No credential type supplied to sub_resource_create.";
                    stdlog($log);
                    return false;
                }

                if (!empty($data->name)) {
                    $name = $data->name;
                } elseif (!empty($CI->response->meta->received_data->attributes->name)) {
                    $name = $CI->response->meta->received_data->attributes->name;
                } else {
                    $name = '';
                }

                if (!empty($data->description)) {
                    $description = $data->description;
                } elseif (!empty($CI->response->meta->received_data->attributes->description)) {
                    $description = $CI->response->meta->received_data->attributes->description;
                } else {
                    $description = '';
                }

                if (!empty($CI->user->full_name)) {
                    $user = $CI->user->full_name;
                } else {
                    $user = '';
                }

                # we only store a SINGLE credential set of each type per device - delete any existing
                $sql = "DELETE FROM `credential` WHERE `system_id` = ? AND `type` = ?";
                $data = array(intval($id), (string)$type);
                $this->run_sql($sql, $data);
                # insert the new credentials
                $sql = "INSERT INTO `credential` VALUES (NULL, ?, 'y', ?, ?, ?, ?, ?, NOW())";
                $data = array(intval($id), (string)$name, (string)$description, (string)$type, (string)$credentials, (string)$user);
                $this->run_sql($sql, $data);
            }
            return true;
        } else {
            $log->message = "sub_resource not equal to credential - exiting.";
            stdlog($log);
        }
    }

    public function collection()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $join = $this->build_join();
        $properties = $this->build_properties();

        if ($CI->response->meta->sort == '') {
            if (stripos($properties, 'system.id') !== false) {
                $CI->response->meta->internal->sort = 'ORDER BY system.id';
            }
        }
        $sql = "SELECT count(*) as total FROM system " . $join . " WHERE system.org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->meta->internal->groupby;
        $result = $this->run_sql($sql, array());
        if (!empty($result[0]->total)) {
            $CI->response->meta->total = intval($result[0]->total);
        } else {
            $result = array();
            $this->count_data($result);
            return false;
        }
        unset($result);
        $sql = "SELECT " . $CI->response->meta->internal->properties . " FROM system " . $join . " WHERE system.org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->meta->internal->groupby . " " . $CI->response->meta->internal->sort . " " . $CI->response->meta->internal->limit;
        $result = $this->run_sql($sql, array());
        $this->count_data($result);

        $sql = "SELECT audit_log.system_id AS `id`, GROUP_CONCAT(DISTINCT(audit_log.type)) AS `seen_by` FROM audit_log LEFT JOIN system ON audit_log.system_id = system.id WHERE system.org_id IN (" . $CI->user->org_list . ") GROUP BY audit_log.system_id";
        $seen_by = $this->run_sql($sql, array());
        $seen_by_temp = array();

        foreach ($seen_by as $seen) {
            $seen_by_temp[$seen->id] = $seen->seen_by;
        }
        unset($seen_by);
        for ($i=0; $i < count($result); $i++) { 
            if ( ! empty($seen_by_temp[$result[$i]->{'system.id'}] )) {
                $result[$i]->{'system.seen_by'} = $seen_by_temp[$result[$i]->{'system.id'}];
            } else {
                $result[$i]->seen_by = '';
            }
        }
        unset($seen_by_temp);
        $result = $this->format_data($result, 'devices');
        return $result;
    }

    public function collection_sub_resource()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $sql = "SELECT " . $CI->response->meta->internal->properties . " FROM `" . $CI->response->meta->sub_resource . "` LEFT JOIN system ON (system.id = `" . $CI->response->meta->sub_resource . "`.system_id) WHERE system.org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->meta->internal->groupby . " " . $CI->response->meta->internal->sort . " " . $CI->response->meta->internal->limit;
        $result = $this->run_sql($sql, array());
        return $result;
    }

    public function report()
    {
        $CI = & get_instance();
        $filter = $this->build_filter();
        $join = $this->build_join();

        $sql = "SELECT system.id FROM system " . $join . " WHERE system.org_id IN (" . $CI->user->org_list . ") " . $filter . " " . $CI->response->meta->internal->groupby;
        $result = $this->run_sql($sql, array());
        foreach ($result as $temp) {
            $temp_ids[] = $temp->id;
        }
        $system_id_list = implode(',', $temp_ids);
        unset($temp, $temp_ids);

        $sql = "SELECT * FROM oa_report WHERE report_id = " . intval($CI->response->meta->sub_resource_id);
        $result = $this->run_sql($sql, array());
        $report = $result[0];
        $CI->response->meta->sub_resource_name = $report->report_name;
                         
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
        $CI->response->meta->total = count($result);
        if (!empty($CI->response->meta->limit)) {
            $result = array_splice($result, $CI->response->meta->offset, $CI->response->meta->limit);
        }
        $result = $this->format_data($result, 'devices');
        return($result);
    }

    public function update($device = NULL)
    {
        $CI = & get_instance();
        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;
        $custom = 'n';

        $log_details = new stdClass();
        $log_details->severity = 7;
        $log_details->file = 'system';
        $log_details->message = 'System update start';
        stdlog($log_details);

        # account for a single id or multiple id's
        $ids = array();

        if ( ! is_null($device)) {
            if (empty($device->id)) {
                // TODO - throw an error
                return;
            } else {
                $ids[] = $device->id;
            }
            if ( ! empty($device->last_seen_by)) {
                $source = $device->last_seen_by;
            } else {
                $source = 'user';
            }
            $received_data = $device;
        } else {
            if ( ! empty($CI->response->meta->id)) {
                $ids[] = $CI->response->meta->id;
            } elseif (!empty($CI->response->meta->ids)) {
                $ids = explode(',', $CI->response->meta->ids);
            }
            # set out last seen by
            if ( ! empty($CI->response->attributes->last_seen_by)) {
                $source = $CI->response->attributes->last_seen_by;
            } else {
                $source = 'user';
            }
            $received_data = $CI->response->meta->received_data->attributes;
        }

        $system_fields = implode(' ', $this->db->list_fields('system'));
        $sql = "SELECT id, name FROM additional_field";
        $additional_fields = $this->run_sql($sql, array());

        // loop through our supplied data and test if it's a custom field or a system field,
        // then update any supplied device id's
        #foreach ($CI->response->meta->received_data->attributes as $key => $value) {
        foreach ($received_data as $key => $value) {
            $previous_value = '';

            // check our custom fields
            foreach ($additional_fields as $field) {
                if ($key == $field->name) {
                    # we have a custom field - get the original value (if it exists)
                    foreach ($ids as $id) {
                        $sql = "SELECT id, value FROM additional_field_item WHERE system_id = ? AND additional_field_id = ?";
                        $result = $this->run_sql($sql, array(intval($id), $field->id));
                        if (!empty($result[0]->value)) {
                            $previous_value = $result[0]->value;
                            $sql = "UPDATE additional_field_item SET value = ?, timestamp = NOW() WHERE id = ?";
                            $result = $this->run_sql($sql, array((string)$value, $result[0]->id));
                            // TODO - add an entry into the change log
                        } else {
                            $sql = "INSERT INTO additional_field_item VALUES (NULL, ?, ?, NOW(), ?)";
                            $result = $this->run_sql($sql, array(intval($id), intval($field->id), (string)$value));
                            $previous_value = '';
                            // TODO - add an entry into the change log
                        }
                        // insert an entry into the edit table
                        $sql = "INSERT INTO edit_log VALUES (NULL, ?, ?, 'Data was changed', ?, ?, 'system', ?, NOW(), ?, ?)";
                        $data = array(intval($CI->user->id), intval($id), (string)$source, 1000, (string)$key, (string)$value, (string)$previous_value);;
                        $this->run_sql($sql, $data);
                    }
                }
            }

            // now check the regular system table fields
            if ($key != 'id' and stripos($system_fields, ' '.$key.' ') !== false) {
                // we have a field from the system table
                foreach ($ids as $id) {
                    // get the current value
                    $sql = "SELECT `$key` AS `$key` FROM `system` WHERE `id` = ?";
                    $data = array(intval($id));
                    $result = $this->run_sql($sql, $data);
                    $previous_value = @$result[0]->{$key};

                    # get the current entry in the edit_log
                    $sql = "SELECT * FROM `edit_log` WHERE `system_id` = ? AND `db_table` = 'system' AND `db_column` = ? ORDER BY `timestamp` DESC LIMIT 1";
                    $data = array(intval($id), "$key");
                    $result = $this->run_sql($sql, $data);
                    if (!empty($result[0]->weight)) {
                        $previous_weight = intval($result[0]->weight);
                    } else {
                        $previous_weight = 10000;
                    }
                    // calculate the weight
                    $weight = intval($this->weight($source));
                    if ($weight <= $previous_weight AND $value != $previous_value) {
                        if ($key != 'id' and $key != 'last_seen' and $key != 'last_seen_by' and $key != 'first_seen') {
                            // update the system table
                            $sql = "UPDATE `system` SET `" . $key . "` = ? WHERE id = ?";
                            $data = array((string)$value, intval($id));
                            $this->run_sql($sql, $data);
                            // insert an entry into the edit table
                            $sql = "INSERT INTO edit_log VALUES (NULL, ?, ?, 'Data was changed', ?, ?, 'system', ?, NOW(), ?, ?)";
                            $data = array(intval($CI->user->id), intval($id), (string)$source, intval($weight), (string)$key, (string)$value, (string)$previous_value);;
                            $this->run_sql($sql, $data);
                        }
                    } else {
                        # We have an existing edit_log entry with a more important change - don't touch the `system`.`$key` value
                    }

                }
            }
        }
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
        // 2000 - audit, ssh, wmi
        // 3000 - snmp
        // 4000 - ad (active directory)
        // 5000 - nmap
        // The lower the value, the higher the priority is given

        switch ($set_by) {
            case 'user':
                $weight = 1000;
                break;

            case 'audit':
            case 'audit_ssh':
            case 'audit_wmi':
            case 'ssh':
            case 'windows':
            case 'wmi':
                $weight = 2000;
                break;

            case 'snmp':
            case 'nmis':
                $weight = 3000;
                break;

            case 'ipmi':
                $weight = 4000;
                break;

            case 'ad':
            case 'active directory':
                $weight = 5000;
                break;

            case 'nmap':
                $weight = 6000;
                break;
            
            default:
                $weight = 10000;
                break;
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
        } elseif (!empty($details->sysName)) {
            $name = $details->sysName;
            $details->name = $details->sysName;
        } elseif (!empty($details->dns_hostname)) {
            $name = $details->dns_hostname;
            $details->name = $details->dns_hostname;
        }

        if (!isset($details->ip)) {
            $details->ip = '';
        }

        $log_details = new stdClass();
        $log_details->message = 'System insert start for '.ip_address_from_db($details->ip).' ('.$name.')';
        $log_details->severity = 7;
        $log_details->file = 'system';
        stdlog($log_details);

        # remove some characters from the OS string
        if ( ! empty($details->os_name)) {
            $details->os_name = str_ireplace("(r)", "", $details->os_name);
            $details->os_name = str_ireplace("(tm)", "", $details->os_name);
        }


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

        # Set the form factor to virtual if required
        if ( ! empty($details->manufacturer)) {
            if ((strripos($details->manufacturer, "vmware") !== false) or
                (strripos($details->manufacturer, "parallels") !== false) or
                (strripos($details->manufacturer, "virtual") !== false)) {
                if (!isset($details->class) or $details->class != 'hypervisor') {
                    $details->form_factor = 'Virtual';
                }
            }
        }
        if ( ! empty($details->model)) {
            if (strripos($details->model, "bhyve") !== false) {
                if (!isset($details->class) or $details->class != 'hypervisor') {
                    $details->form_factor = 'Virtual';
                }
            }
        }

        # Pad the IP address
        if ( ! empty($details->ip)) {
            $details->ip = ip_address_to_db($details->ip);
        }

        if ( ! empty($details->hostname) and  ! empty($details->domain) and empty($details->fqdn)) {
            $details->fqdn = $details->hostname.".".$details->domain;
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
                        $sql .= "'".mysqli_real_escape_string($this->db->conn_id, str_replace('"', '', $value))."', ";
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
            if ($key > '') {
                foreach ($columns as $column) {
                    if ($key == $column->Field) {
                        $sql = "INSERT INTO edit_log VALUES (NULL, 0, ?, '', ?, ?, 'system', ?, ?, ?, ?)";
                        $data = array("$details->id", "$details->last_seen_by", "$weight", "$key", "$details->last_seen", "$value", "");
                        $query = $this->db->query($sql, $data);
                    }
                }
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
