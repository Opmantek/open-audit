<?php
/**
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
*
* PHP version 5.3.3
* 
* @category  Model
* @package   Devices
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Devices
*
* @access   public
* @category Model
* @package  Devices
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_devices extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * [_build_filter description]
     * @return [type] [description]
     */
    private function _build_filter()
    {
        $CI = & get_instance();
        $reserved = ' properties limit sub_resource action sort current offset format graph report_name ';
        $filter = '';
        foreach ($CI->response->meta->filter as $item) {
            if (strpos(' '.$item->name.' ', $reserved) === false) {
                if ($item->name === 'id') {
                    $item->name = 'system.id';
                }
                if ( ! empty($item->name) && $item->operator !== 'in') {
                    if (stripos($item->name, 'current') !== false && $item->value !== 'y' && $item->value !== 'n') {
                        // we ignore this value
                    } else {
                        $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
                    }
                }
                if ( ! empty($item->name) && $item->operator === 'in') {
                    $filter .= ' AND ' . $item->name . ' in ' . $item->value;
                }
            }
        }
        return($filter);
    }

    /**
     * [_build_join description]
     * @return [type] [description]
     */
    private function _build_join()
    {
        $CI = & get_instance();
        $join = '';
        $tables = '';
        if (count($CI->response->meta->filter) > 0) {
            foreach ($CI->response->meta->filter as $item) {
                if (strpos($item->name, '.') !== false) {
                    $table = substr($item->name, 0, strpos($item->name, '.'));
                    if ($table !== 'system' && stripos($tables, ' ' . $table . ' ') === false) {
                        if ($table === 'change_log' OR $table === 'edit_log' OR $table === 'audit_log') {
                            $join .= ' LEFT JOIN `' . $table . '` ON (system.id = `' . $table . '`.system_id) ';
                        } else {
                            $join .= ' LEFT JOIN `' . $table . '` ON (system.id = `' . $table . '`.system_id AND ' . $table . '.current = "' . $CI->response->meta->current . '") ';
                        }
                    }
                    $tables .= " {$table} ";
                }
            }
        }
        $CI->response->meta->internal->join = $join;
        return($join);
    }

    /**
     * [get_related_tables description]
     * @param  string $id [description]
     * @return [type]     [description]
     */
    public function get_related_tables($id = '')
    {
        $CI = & get_instance();
        if ($id === '') {
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if (empty($id)) {
            return false;
        }
        $return = array();
        $tables = array('audit_log', 'bios', 'certificate', 'change_log', 'credential', 'disk', 'dns', 'edit_log', 'field', 'file', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'optical', 'partition', 'pagefile', 'policy', 'print_queue', 'processor', 'radio', 'route', 'san', 'scsi', 'service', 'server', 'server_item', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
        foreach ($tables as $table) {
            $sql = "SELECT COUNT(*) AS `count` FROM `{$table}` WHERE system_id = " . intval($id);
            $result = $this->run_sql($sql, array());
            if ( ! empty($result[0]->count) && intval($result[0]->count) > 0) {
                $item = new stdClass();
                $item->$table = new stdClass();
                $item->$table->links = new stdClass();
                $item->$table->links->self = $CI->config->config['base_url'] . 'index.php/devices/' . $id . '/' . $table;
                $return[] = $item;
                unset($item);
            }
        }
        return ($return);
    }

    /**
     * [read description]
     * @param  int $id The system.id of the device in question
     * @return [type]     [description]
     */
    public function read($id = 0)
    {
        if (empty($id)) {
            $log = new stdClass();
            $log->file = 'system';
            $log->level = 5;
            $log->message = 'No device ID for read, returning false';
            stdlog($log);
            return false;
        }
        $CI = & get_instance();
        if ($CI->response->meta->collection === 'devices' && ! empty($CI->response->meta->properties)) {
            $properties = $CI->response->meta->properties;
        } else {
            $properties = '*';
        }
        $sql = "SELECT {$properties} FROM `system` WHERE system.id = ?";
        $result = $this->run_sql($sql, array($id));

        // Populate our collector name if it exists
        if ( ! empty($result)) {
            if ( ! empty($result[0]->collector_uuid)) {
                $result[0]->collector_name = '';
                $sql = 'SELECT `name` FROM `collectors` WHERE `uuid` = ?';
                $data = array((string)$result[0]->collector_uuid);
                $collector = $this->run_sql($sql, $data);
                if ( ! empty($collector[0]->{'name'})) {
                    $result[0]->collector_name = $collector[0]->{'name'};
                }
            }

            $result = $this->format_data($result, 'devices');

            // format our uptime from unixtime to human readable
            $result[0]->attributes->uptime_formatted = '';
            if ( ! empty($result[0]->attributes->uptime)) {
                $seconds = intval($result[0]->attributes->uptime);
                $date_time_f = new \DateTime('@0');
                $date_time_t = new \DateTime("@{$seconds}");
                $result[0]->attributes->uptime_formatted = $date_time_f->diff($date_time_t)->format('%a days, %H:%i:%S');
            }
        }
        return($result);
    }

    /**
     * [get_device_fields description]
     * @param  int $device_id The system.id of the device in question
     * @return [type]            [description]
     */
    public function get_device_fields($device_id = 0)
    {
        $CI = & get_instance();
        $CI->load->model('m_orgs');
        $CI->load->model('m_fields');
        $CI->load->model('m_groups');
        $log = new stdClass();
        $log->file = 'system';
        $log->level = 7;

        if (empty($device_id)) {
            $log->message = 'No device ID for fields, returning false';
            stdlog($log);
            return false;
        }

        // get the org_id of the device
        $sql = 'SELECT system.org_id FROM system WHERE `system`.`id` = ?';
        $data = array (intval($device_id));
        $result = $this->run_sql($sql, $data);
        $device_org_id = intval($result[0]->org_id);

        // get the fields
        $sql = "SELECT fields.*, groups.sql AS `group_sql`, groups.name as `group_name`, field.value FROM fields LEFT JOIN groups ON fields.group_id = groups.id LEFT JOIN field ON (fields.id = field.fields_id AND field.system_id = {$device_id}) ORDER BY fields.name";
        $fields = $this->run_sql($sql, array());
        // this is our array of field.id's that are acceptable on this device
        $field_list = array();
        if ( ! empty($fields)) {
            foreach ($fields as $field) {
                // get this field.org_id children
                $orgs = array($field->org_id);
                $orgs = array_merge($orgs, $CI->m_orgs->get_children($field->org_id));
                foreach ($orgs as $value) {
                    if (intval($device_org_id) === intval($value)) {
                        $sql = 'SELECT COUNT(*) AS `count` FROM (' . str_replace('@filter', '1=1', $field->group_sql) . ") a WHERE a.id = {$device_id}";
                        $result = $this->run_sql($sql, $data);
                        if ( ! empty($result) && intval($result[0]->count) === 1) {
                            $field_list[] = $field;
                        }
                    }
                }
            }
            // remove the sql and group name
            foreach ($field_list as &$field) {
                unset($field->group_sql);
                unset($field->group_name);
            }
        }
        $result = $this->format_data($field_list, 'fields');
        return($result);
    }

    /**
     * [get_device_applications description]
     * @param  int $device_id The system.id of the device in question
     * @return [type]            [description]
     */
    public function get_device_applications($device_id = 0)
    {
        $CI = & get_instance();
        $CI->load->model('m_orgs');
        $CI->load->model('m_fields');
        $CI->load->model('m_groups');
        $log = new stdClass();
        $log->file = 'system';
        $log->level = 7;

        if (empty($device_id)) {
            $log->message = 'No device ID for applications, returning false';
            stdlog($log);
            return false;
        }

        $sql = 'SELECT applications.id AS `applications.id`, applications.name AS `applications.name`, applications.description AS `applications.description`, application.id AS `id` FROM applications LEFT JOIN application ON applications.id = application.applications_id LEFT JOIN system ON (application.system_id = system.id) WHERE system.id = ? ORDER BY applications.name';
        $application = $this->run_sql($sql, array(intval($device_id)));
        $result = $this->format_data($application, 'application');
        return($result);
    }

    /**
     * [get_device_rack description]
     * @param  int $id The system.id of the device in question
     * @return [type]      [description]
     */
    public function get_device_rack($id = 0)
    {
        $sql = 'SELECT rack_devices.*, racks.name AS `racks.name`, racks.id AS `racks.id` FROM rack_devices LEFT JOIN `racks` ON (racks.id = rack_devices.rack_id) WHERE system_id = ?';
        $query = $this->run_sql($sql, array(intval($id)));
        $result = $this->format_data($query, 'rack_devices');
        return($result);
    }

    /**
     * [read_sub_resource description]
     * @param  string $id              system.id
     * @param  string $sub_resource    [description]
     * @param  string $sub_resource_id [description]
     * @param  string $properties      [description]
     * @param  string $sort            [description]
     * @param  string $current         [description]
     * @param  string $limit           [description]
     * @return [type]                  [description]
     */
    public function read_sub_resource($id = '', $sub_resource = '', $sub_resource_id = '', $properties = '', $sort = '', $current = 'y', $limit = '')
    {
        $CI = & get_instance();
        $log = new stdClass();
        $log->file = 'system';
        $log->level = 7;

        $id = intval($id);
        if (empty($id)) {
            $log->message = 'No ID, returning false';
            stdlog($log);
            return false;
        }
        if (empty($sub_resource)) {
            $log->message = 'No sub_resource, returning false';
            stdlog($log);
            return false;
        }
        if (empty($sub_resource_id)) {
            $sub_resource_id = '';
        } else {
            $sub_resource_id = ' AND `' . $sub_resource . '`.id = ' . intval($sub_resource_id);
            $current = '';
        }
        if (empty($properties) OR $properties === '*') {
            $properties = '`' . $sub_resource . '`.*';
        }
        if ( ! empty($limit)) {
            $limit = ' LIMIT ' . intval($limit);
        }

        $filter = $this->_build_filter();

        if ($sub_resource === 'location') {
            $sql = 'SELECT location_id, locations.name AS `location_name`, location_level, location_suite, location_room, location_rack, location_rack_position, location_rack_size, location_latitude, location_longitude FROM system LEFT JOIN locations ON (system.location_id = locations.id) WHERE system.id = ?';
            $data = array($id);

        } else if ($sub_resource === 'purchase') {
            $sql = 'SELECT asset_number, asset_tag, end_of_life, end_of_service, purchase_invoice, purchase_order_number, purchase_cost_center, purchase_vendor, purchase_date, purchase_service_contract_number, lease_expiry_date, purchase_amount, warranty_duration, warranty_expires, warranty_type FROM system WHERE id = ?';
            $data = array($id);

        } else if ($sub_resource === 'discovery_log') {
            $sql = 'SELECT discovery_log.id, discovery_log.discovery_id, discoveries.name AS `discoveries.name`, discovery_log.timestamp, discovery_log.file, discovery_log.function, discovery_log.message, discovery_log.command_status, discovery_log.command_output, discovery_log.command_time_to_execute, discovery_log.command FROM discovery_log LEFT JOIN discoveries ON (discovery_log.discovery_id = discoveries.id) WHERE discovery_log.system_id = ? ' . $limit;
            $data = array($id);

        } else if ($sub_resource === 'edit_log') {
            $sql = 'SELECT edit_log.*, users.full_name FROM edit_log LEFT JOIN users ON edit_log.user_id = users.id WHERE system_id = ? ' . $limit;
            $data = array($id);

        } else if ($sub_resource === 'network') {
            $sql = "SELECT network.*, floor((system.sysuptime - network.iflastchange) /60/60/24/100) as days_since_changed, IF((network.ifadminstatus = 'down') OR (network.ifadminstatus = 'up' AND (network.ip_enabled != 'up' AND network.ip_enabled != 'dormant') AND (((system.sysuptime - network.iflastchange) > 60480000) OR (system.sysuptime < network.iflastchange))), 'available', 'used') AS available  FROM network LEFT JOIN system ON (network.system_id = system.id AND network.current = 'y') WHERE system.id = ? ";
            $data = array($id);

        } else if ($sub_resource === 'certificate') {
            $sql = "SELECT certificate.*, IF(certificate.valid_to > DATE(NOW() - INTERVAL 7 day) AND certificate.valid_to < DATE(NOW() + INTERVAL 7 day), 'expiring_week', IF(certificate.valid_to > DATE(NOW()) AND certificate.valid_to < DATE(NOW() + INTERVAL 30 day), 'expiring_month', IF(certificate.valid_to < DATE(NOW()), 'expired', ''))) AS status FROM certificate WHERE certificate.system_id = ? " . $limit;
            $data = array($id);

        } else {
            $currency = false;
            $first_seen = false;
            if ($this->db->table_exists($sub_resource) && $this->db->field_exists('current', $sub_resource)) {
                $currency = true;
            }
            if ($this->db->table_exists($sub_resource) && $this->db->field_exists('first_seen', $sub_resource)) {
                $first_seen = true;
            }
            if ($currency) {
                if ( ! empty($CI->response->meta->internal->as_at)) {
                    if ($this->db->field_exists('first_seen', $sub_resource) && $this->db->field_exists('last_seen', $sub_resource)) {
                        $filter .= ' AND DATE(' . $sub_resource . '.first_seen) <= "' . $CI->response->meta->internal->as_at . '" AND DATE(' . $sub_resource . '.last_seen) >= "' . $CI->response->meta->internal->as_at . '"';
                    }
                }
                $currency = 'AND `' . $sub_resource . "`.`current` = '" . $current . "'" ;
                if ($current === 'y') {
                    $currency = 'AND `' . $sub_resource . "`.`current` = '" . $current . "'" ;
                }
                if ($current === 'n') {
                    $currency = 'AND `' . $sub_resource . "`.`current` = '" . $current . "'" ;
                }
                if ($current === '' or $current === 'all') {
                    $currency = '';
                }
                if ($current === 'delta' && $first_seen) {
                    $properties .= ", IF((`{$sub_resource}`.first_seen = (SELECT first_seen FROM `{$sub_resource}` WHERE system_id = {$id} ORDER BY first_seen LIMIT 1)), 'y', 'n') as original_install";
                    $currency = "AND current = 'y' or `{$sub_resource}`.first_seen = (SELECT first_seen FROM `{$sub_resource}` WHERE system_id = {$id} ORDER BY first_seen LIMIT 1)";
                }
                if ($current === 'delta' && ! $first_seen) {
                    $currency = '';
                }
                if ($current === 'full' && $first_seen) {
                    $properties .= ", IF((`{$sub_resource}`.first_seen = (SELECT first_seen FROM `{$sub_resource}` WHERE system_id = {$id} ORDER BY first_seen LIMIT 1)), 'y', 'n') as original_install";
                    $currency = '';
                }
                if ($current === 'full' && ! $first_seen) {
                    $currency = '';
                }
            } else {
                $currency = '';
            }
            $sql = "SELECT {$properties}, system.name AS `system.name` FROM `{$sub_resource}` LEFT JOIN system ON (system.id = `{$sub_resource}`.system_id) WHERE system.id = {$id} {$sub_resource_id} {$currency} {$filter} {$limit} {$sort}";
            $data = array($CI->user->id);
        }

        $result = $this->run_sql($sql, $data);

        if ($sub_resource === 'credential' && ! empty($result)) {
            $this->load->library('encrypt');
            for ($i=0; $i < count($result); $i++) {
                if (! empty($result[$i]->credentials)) {
                    $result[$i]->credentials = json_decode(simpleDecrypt($result[$i]->credentials));
                }
            }
        }

        $result = $this->format_data($result, 'devices/' . $id . '/' . $sub_resource);
        if (count($result) === 0) {
            return false;
        } else {
            return ($result);
        }
    }

    /**
     * [sub_resource_delete description]
     * @param  integer $id              [description]
     * @param  integer $sub_resource    [description]
     * @param  integer $sub_resource_id [description]
     * @return [type]                   [description]
     */
    public function sub_resource_delete($id = 0, $sub_resource = 0, $sub_resource_id = 0)
    {
        $CI = & get_instance();
        if (empty($id)) {
            if ( ! empty($CI->response->meta->id)) {
                $id = intval($CI->response->meta->id);
            }
        }
        if (empty($id)) {
            return false;
        }

        if (empty($sub_resource)) {
            if ( ! empty($CI->response->meta->sub_resource)) {
                $sub_resource = intval($CI->response->meta->sub_resource);
            }
        }
        if (empty($sub_resource)) {
            return false;
        }

        if (empty($sub_resource_id)) {
            if ( ! empty($CI->response->meta->sub_resource_id)) {
                $sub_resource_id = intval($CI->response->meta->sub_resource_id);
            }
        }
        if (empty($sub_resource_id)) {
            return false;
        }
        if ($sub_resource === 'attachment') {
            $sql = 'SELECT * FROM attachment WHERE id = ' . intval($sub_resource_id);
            $attachment = $this->run_sql($sql, array());
            if (unlink($attachment[0]->filename)) {
                // good
            } else {
                // TODO - log an error here
                echo 'Could not delete ' . $attachment[0]->filename . '.';
                return false;
            }
        }
        if ($sub_resource === 'image') {

            // $sql = "SELECT * FROM image WHERE id = " . intval($sub_resource_id);
            // $image = $this->run_sql($sql, array());
            // if (unlink($_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images/' . $image[0]->filename)) {
            //     // good
            // } else {
            //     // TODO - log an error here
            //     echo "Could not delete " . $image[0]->filename . ".";
            //     return false;
            // }

        }
        $sql = 'DELETE FROM `' . (string)$sub_resource . '` WHERE `system_id` = ? AND id = ?';
        $data = array(intval($id), intval($sub_resource_id));
        $this->run_sql($sql, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * [sub_resource_create description]
     * @param  integer $id           [description]
     * @param  string  $sub_resource [description]
     * @param  string  $data         [description]
     * @return [type]                [description]
     */
    public function sub_resource_create($id = 0, $sub_resource = '', $data = '')
    {
        $CI = & get_instance();
        $log = new stdClass();
        $log->file = 'system';
        $log->level = 7;
        $log->message = 'sub_resource_create start.';
        stdlog($log);

        if ( ! empty($id)) {
            $device_ids[] = $id;
        } elseif ( ! empty($CI->response->meta->received_data->ids)) {
            $device_ids = explode(',', $CI->response->meta->received_data->ids);
        } elseif ( ! empty($CI->response->meta->id)) {
            $device_ids = array($CI->response->meta->id);
        } elseif ( ! empty($CI->response->meta->ids)) {
            $device_ids = explode(',', $CI->response->meta->ids);
        } else {
            $log->level = 5;
            $log->message = 'No ID, nor list of IDs supplied to sub_resource_create.';
            stdlog($log);
            log_error('ERR-0021', 'm_devices::sub_resource_create', 'No ID, nor list of IDs supplied to sub_resource_create.');
            return false;
        }

        if (empty($sub_resource)) {
            $sub_resource = $CI->response->meta->sub_resource;
        }

        if ($sub_resource === 'credential' OR ( ! empty($CI->response->meta->sub_resource) && $CI->response->meta->sub_resource === 'credential')) {
            $this->load->library('encrypt');

            foreach ($device_ids as $id) {
                if ( ! empty($data->credentials)) {
                    $credentials = (string)simpleEncrypt(json_encode($data->credentials));
                } else if ( ! empty($CI->response->meta->received_data->attributes->credentials)) {
                    $credentials = (string)simpleEncrypt(json_encode($CI->response->meta->received_data->attributes->credentials));
                } else {
                    $log->level = 5;
                    $log->message = 'No credentials supplied to sub_resource_create.';
                    stdlog($log);
                    log_error('ERR-0021', 'm_devices::sub_resource_create', 'No credentials supplied to sub_resource_create.');
                    return false;
                }

                if ( ! empty($data->type)) {
                    $type = $data->type;
                } else if ( ! empty($CI->response->meta->received_data->attributes->type)) {
                    $type = $CI->response->meta->received_data->attributes->type;
                } else {
                    $log->level = 5;
                    $log->message = 'No credential type supplied to sub_resource_create.';
                    stdlog($log);
                    log_error('ERR-0021', 'm_devices::sub_resource_create', 'No credential type supplied to sub_resource_create.');
                    return false;
                }

                if ( ! empty($data->name)) {
                    $name = $data->name;
                } else if ( ! empty($CI->response->meta->received_data->attributes->name)) {
                    $name = $CI->response->meta->received_data->attributes->name;
                } else {
                    $name = '';
                }

                if ( ! empty($data->description)) {
                    $description = $data->description;
                } else if ( ! empty($CI->response->meta->received_data->attributes->description)) {
                    $description = $CI->response->meta->received_data->attributes->description;
                } else {
                    $description = '';
                }

                if ( ! empty($CI->user->full_name)) {
                    $user = $CI->user->full_name;
                } else {
                    $user = '';
                }

                // we only store a SINGLE credential set of each type per device - delete any existing
                $sql ='DELETE FROM `credential` WHERE `system_id` = ? AND `type` = ?';
                $data = array(intval($id), (string)$type);
                $this->run_sql($sql, $data);
                // insert the new credentials
                $sql = "INSERT INTO `credential` VALUES (NULL, ?, 'y', ?, ?, ?, ?, ?, NOW())";
                $data = array(intval($id), (string)$name, (string)$description, (string)$type, (string)$credentials, (string)$user);
                $this->run_sql($sql, $data);
            }
            return true;
        } else if ($sub_resource === 'attachment') {
            if (empty($_FILES['attachment'])) {
                $log->severity = 5;
                $log->summary = 'No file provided for sub_resource_create.';
                $log->status = 'error';
                stdlog($log);
                log_error('ERR-0024', 'm_devices::sub_resource_create', 'No image file provided for sub_resource_create.');
                return false;
            }
            $target = BASEPATH . '../application/attachments/' . $CI->response->meta->id . '_' . basename($_FILES['attachment']['name']);
            if ( ! empty($CI->response->meta->cloud_id)) {
                if ( ! file_exists(BASEPATH . '../application/attachments/' . $CI->response->meta->cloud_id)) {
                    mkdir(BASEPATH . '../application/attachments/' . $CI->response->meta->cloud_id);
                }
                if ( ! file_exists(BASEPATH . '../application/attachments/' . $CI->response->meta->cloud_id)) {
                    $log->severity = 5;
                    $log->summary = 'No cloud attachments directory.';
                    $log->detail = 'The cloud attachments directory does not exist and cannot be created. Error: ' . error_get_last();
                    $log->status = 'error';
                    stdlog($log);
                    log_error('ERR-0037', 'm_devices::sub_resource_create', 'The cloud attachments directory does not exist and cannot be created.');
                    return false;
                } else {
                    $target = BASEPATH . '../application/attachments/' . $CI->response->meta->cloud_id . '/' . $CI->response->meta->id . '_' . basename($_FILES['attachment']['name']);
                }
            }
            if (@move_uploaded_file($_FILES['attachment']['tmp_name'], $target)) {
                $sql = 'INSERT INTO `attachment` VALUES (NULL, ?, ?, ?, ?, NOW())';
                $data = array(intval($CI->response->meta->id),
                        $CI->response->meta->received_data->attributes->name,
                        "{$target}",
                        $CI->user->full_name);
                $this->db->query($sql, $data);
                return true;
            } else {
                $log->severity = 5;
                $log->summary = 'Unable to move uploaded file.';
                $log->status = 'error';
                $log->detail = error_get_last();
                stdlog($log);
                log_error('ERR-0038', 'm_devices::sub_resource_create', 'Cannot move the uploaded attachment to $target.');
                return false;
            }
        } else if ($sub_resource === 'image') {
            if (empty($_FILES['attachment']) && empty($CI->response->meta->received_data->attributes->filename)) {
                $log->severity = 5;
                $log->summary = 'No image file provided for sub_resource_create.';
                $log->status = 'error';
                stdlog($log);
                log_error('ERR-0024', 'm_devices::sub_resource_create', 'No image file provided for sub_resource_create.');
                return false;
            }
            if ( ! file_exists($_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images')) {
                mkdir($_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images');
            }
            if ( ! file_exists($_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images')) {
                $log->severity = 5;
                $log->summary = 'No custom_images directory.';
                $log->detail = 'The custom_images directory does not exist and cannot be created. Error: ' . error_get_last();
                $log->status = 'error';
                stdlog($log);
                log_error('ERR-0037', 'm_devices::sub_resource_create', 'The custom_images directory does not exist and cannot be created.');
                $sql = 'DELETE FROM `image` WHERE `id` = ' . $dbid;
                $this->db->query($sql, array());
                return false;
            }
            if ( ! empty($CI->response->meta->cloud_id)) {
                if ( ! file_exists($_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images/' . $CI->response->meta->cloud_id)) {
                    mkdir($_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images/' . $CI->response->meta->cloud_id);
                }
                if ( ! file_exists($_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images/' . $CI->response->meta->cloud_id)) {
                    $log->severity = 5;
                    $log->summary = 'No cloud custom_images directory.';
                    $log->detail = 'The cloud custom_images directory does not exist and cannot be created. Error: ' . error_get_last();
                    $log->status = 'error';
                    stdlog($log);
                    log_error('ERR-0037', 'm_devices::sub_resource_create', 'The cloud custom_images directory does not exist and cannot be created.');
                    $sql = 'DELETE FROM `image` WHERE `id` = ' . $dbid;
                    $this->db->query($sql, array());
                    return false;
                }
            }

            if ( ! empty($_FILES['attachment']['name'])) {
                $filename = (string)basename($_FILES['attachment']['name']);
                // Ensure we only accept JPG, PNG and SVG files
                if(function_exists('mime_content_type')) {
                    $mime_type = mime_content_type($_FILES['attachment']['tmp_name']);
                } else {
                    $mime_type = '';
                }
                // $filetypes = array('image/png', 'image/svg+xml', 'image/svg', 'image/jpeg', '');
                // $extensions = array('jpg', 'jpeg', 'png', 'svg');
                // disabled SVG for now because of XSS issues when requesting the direct image
                $filetypes = array('image/png', 'image/jpeg', '');
                $extensions = array('jpg', 'jpeg', 'png');
                $temp = explode('.', $filename);
                $extension = strtolower($temp[count($temp)-1]);
                if ( ! in_array($mime_type, $filetypes) OR ! in_array($extension, $extensions)) {
                    unlink($_FILES['attachment']['tmp_name']);
                    $log->severity = 5;
                    $log->summary = 'Invalid file uploaded.';
                    $log->detail = 'Only jpg, png and svg files are accepted.';
                    $log->status = 'error';
                    stdlog($log);
                    log_error('ERR-0040', 'm_devices::sub_resource_create', 'Only jpg, png and svg files are accepted (' . $extension . ') (' . $mime_type . ')');
                    return false;
                }
            }

            if ( ! empty($filename)) {
                $target = $_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images/' . $filename;
                if ( ! empty($CI->response->meta->cloud_id)) {
                    $target = $_SERVER['DOCUMENT_ROOT'] . '/open-audit/custom_images/' . $CI->response->meta->cloud_id . '/' . $filename;
                }
                if (@move_uploaded_file($_FILES['attachment']['tmp_name'], $target)) {
                    $sql = 'INSERT INTO `image` VALUES (NULL, ?, ?, ?, ?, ?, NOW())';
                    $data = array(intval($CI->response->meta->id),
                            $CI->response->meta->received_data->attributes->name,
                            $filename,
                            $CI->response->meta->received_data->attributes->orientation,
                            $CI->user->full_name);
                    $this->db->query($sql, $data);
                    return true;
                } else {
                    $log->severity = 5;
                    $log->summary = 'Unable to move uploaded file';
                    $log->detail = 'Cannot move the uploaded image file to $target. Error: ' . error_get_last();
                    $log->status = 'error';
                    stdlog($log);
                    log_error('ERR-0038', 'm_devices::sub_resource_create', 'Cannot move the uploaded image file to $target.');
                    return false;
                }
            } else if ( ! empty($CI->response->meta->received_data->attributes->filename)) {
                $sql = 'INSERT INTO `image` VALUES (NULL, ?, ?, ?, ?, ?, NOW())';
                $data = array(intval($CI->response->meta->id),
                        $CI->response->meta->received_data->attributes->name,
                        $CI->response->meta->received_data->attributes->filename,
                        $CI->response->meta->received_data->attributes->orientation,
                        $CI->user->full_name);
                $this->db->query($sql, $data);
                return true;
            } else {
                $log->severity = 5;
                $log->summary = 'No file uploaded, nor selected';
                $log->detail = 'No file was uploaded, nor selected from the existing files.';
                $log->status = 'error';
                stdlog($log);
                log_error('ERR-0038', 'm_devices::sub_resource_create', 'No file uploaded, nor selected.');
                return false;
            }
        } else if ($sub_resource === 'application') {
            $sql = "INSERT INTO application VALUES (NULL, ?, ?, 'y', ?, NOW())";
            $data = array(intval($CI->response->meta->id),
                            intval($CI->response->meta->received_data->attributes->{'applications_id'}),
                            $CI->user->full_name);
            $this->db->query($sql, $data);
            return true;
        } else if ($sub_resource === 'cluster') {
            $sql = "INSERT INTO cluster VALUES (NULL, ?, ?, ?, 'y', ?, NOW())";
            $data = array(intval($CI->response->meta->id),
                            intval($CI->response->meta->received_data->attributes->{'clusters_id'}),
                            $CI->response->meta->received_data->attributes->{'role'},
                            $CI->user->full_name);
            $this->db->query($sql, $data);
            return true;
        } else {
            $log->summary = 'sub_resource not equal to attachment, credential or image - exiting.';
            stdlog($log);
                log_error('ERR-0021', 'm_devices::sub_resource_create', 'sub_resource not equal to attachment, credential or image.');
            return false;
        }
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = implode(',', array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id))));
        $sql = "SELECT COUNT(id) AS `count` FROM system WHERE org_id IN ({$org_list})";
        $result = $this->run_sql($sql, array());
        return intval($result[0]->count);
    }

    /**
     * [collection description]
     * @param  [type] $user_id  [description]
     * @param  [type] $response [description]
     * @return [type]           [description]
     */
    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if (! empty($user_id)) {
            $org_list = implode(',', array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id))));
            $sql = "SELECT * FROM system WHERE org_id IN ({$org_list})";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'system');
            return $result;
        }
        if (! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.name AS `orgs.name` FROM system LEFT JOIN orgs ON (system.org_id = orgs.id) " .
                    $CI->response->meta->internal->join . ' ' .
                    $CI->response->meta->internal->filter . ' ' .
                    $CI->response->meta->internal->groupby . ' ' .
                    $CI->response->meta->internal->sort . ' ' .
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'system');
            #$CI->response->data = $this->format_data($result, 'system');
            #$CI->response->meta->filtered = count($CI->response->data);

            if (isset($result[0]->attributes->{'system.type'}) and isset($result[0]->attributes->{'system.last_seen_by'})) {
                for ($i=0; $i < count($result); $i++) {
                    # BAD
                    if ($result[$i]->{'attributes'}->{'system.last_seen_by'} === 'nmap' and ($result[$i]->{'attributes'}->{'system.type'} === 'unclassified' or $result[$i]->{'attributes'}->{'system.type'} === 'unknown')) {
                        $result[$i]->attributes->audit_class = 'fa fa-times text-danger';
                        $result[$i]->attributes->audit_text = 'Nmap discovered, data retrieval will be very limited.';

                    # NOT GOOD
                    } else if ($result[$i]->{'attributes'}->{'system.last_seen_by'} === 'nmap' and $result[$i]->{'attributes'}->{'system.type'} !== 'unclassified' and $result[$i]->{'attributes'}->{'system.type'} !== 'unknown') {
                        $result[$i]->attributes->audit_class = 'fa fa-exclamation-triangle text-warning';
                        $result[$i]->attributes->audit_text = 'Last discovery only Nmap worked. This may be an issue, or it may be a device of a type we cannot audit.';

                    } else if ($result[$i]->{'attributes'}->{'system.last_seen_by'} === 'cloud') {
                        #$result[$i]->attributes->audit_class = 'fa fa-times text-info';
                        $result[$i]->attributes->audit_class = 'fa fa-exclamation-triangle text-warning';
                        $result[$i]->attributes->audit_text = 'Cloud import, data retrieval will be very limited.';

                    } else if ($result[$i]->{'attributes'}->{'system.last_seen_by'} === 'integrations') {
                        #$result[$i]->attributes->audit_class = 'fa fa-times text-info';
                        $result[$i]->attributes->audit_class = 'fa fa-exclamation-triangle text-warning';
                        $result[$i]->attributes->audit_text = 'Integration import, data retrieval will be very limited.';

                    } else if ($result[$i]->{'attributes'}->{'system.type'} === 'computer' and ($result[$i]->{'attributes'}->{'system.last_seen_by'} === 'ssh' or $result[$i]->{'attributes'}->{'system.last_seen_by'} === 'windows' or $result[$i]->{'attributes'}->{'system.last_seen_by'} === 'wmi' or $result[$i]->{'attributes'}->{'system.last_seen_by'} === 'snmp')) {
                        $result[$i]->attributes->audit_class = 'fa fa-exclamation-triangle text-warning';
                        $result[$i]->attributes->audit_text = 'Partially discovered computer. Data retrieval limited.';

                    } else if ($result[$i]->{'attributes'}->{'system.last_seen_by'} === 'web form') {
                        $result[$i]->attributes->audit_class = 'fa fa-exclamation-triangle text-warning';
                        $result[$i]->attributes->audit_text = 'Manually created ' . $result[$i]->{'attributes'}->{'system.type'} . '. Data retrieval limited.';

                    # GOOD
                    } else if ($result[$i]->{'attributes'}->{'system.type'} === 'computer' and ($result[$i]->{'attributes'}->{'system.last_seen_by'} === 'audit_wmi' or $result[$i]->{'attributes'}->{'system.last_seen_by'} === 'audit_ssh')) {
                        $result[$i]->attributes->audit_class = 'fa fa-check text-success';
                        $result[$i]->attributes->audit_text = 'Discovered and audited computer.';

                    } else if ($result[$i]->{'attributes'}->{'system.type'} === 'computer' and $result[$i]->{'attributes'}->{'system.last_seen_by'} === 'audit') {
                        $result[$i]->attributes->audit_class = 'fa fa-check text-success';
                        $result[$i]->attributes->audit_text = 'Audited computer.';

                    } else if ($result[$i]->{'attributes'}->{'system.type'} !== 'computer' and !empty($result[$i]->{'attributes'}->{'system.snmp_oid'})) {
                        $result[$i]->attributes->audit_class = 'fa fa-check text-success';
                        $result[$i]->attributes->audit_text = 'Discovered and audited ' . $result[$i]->{'attributes'}->{'system.type'} . '.';

                    # BAD - FALLBACK
                    } else {
                        $result[$i]->attributes->audit_class = 'fa fa-question text-danger';
                        $result[$i]->attributes->audit_text = 'Limited information available.';
                    }
                }
            }
            $CI->response->data = $result;
            $CI->response->meta->filtered = count($CI->response->data);

        }
    }

    /**
     * [collection_group_by description]
     * @return [type] [description]
     */
    public function collection_group_by()
    {
        $CI = & get_instance();
        $sql = "SELECT id, COUNT(*) AS `count`, {$CI->response->meta->groupby} FROM system {$CI->response->meta->internal->groupby} {$CI->response->meta->internal->sort} {$CI->response->meta->internal->limit}";
        if (!empty($CI->response->meta->internal->properties)) {
            $sql = "SELECT {$CI->response->meta->internal->properties}, COUNT(*) AS `count`, {$CI->response->meta->groupby} FROM system {$CI->response->meta->internal->groupby} {$CI->response->meta->internal->sort} {$CI->response->meta->internal->limit}";
        }
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'devices');
        return $result;
    }

    /**
     * [collection_sub_resource description]
     * @return [type] [description]
     */
    public function collection_sub_resource()
    {
        $CI = & get_instance();
        $filter = $this->_build_filter();
        if (is_array($CI->user->org_list)) {
            $CI->user->org_list = implode(',', $CI->user->org_list);
        }
        if ( ! empty($CI->response->meta->groupby)) {
            if ( ! empty($CI->response->meta->internal->properties)) {
                $CI->response->meta->internal->properties .= ', COUNT(*) AS `count`';
            } else {
                $CI->response->meta->internal->properties = 'COUNT(*) AS `count`';
            }
            // get the total count (with a GROUPBY)
            $sql = "SELECT COUNT(*) AS `count` FROM `{$CI->response->meta->sub_resource}` LEFT JOIN system ON (system.id = `{$CI->response->meta->sub_resource}`.system_id) WHERE system.org_id IN (" . $CI->user->org_list . ") {$filter} {$CI->response->meta->internal->groupby}";
            $result = $this->run_sql($sql, array());
            $CI->response->meta->total = intval(COUNT($result));
        } else {
            // get the total count (without a LIMIT and GROUPBY)
            $sql = "SELECT COUNT(*) AS `count` FROM `{$CI->response->meta->sub_resource}` LEFT JOIN system ON (system.id = `{$CI->response->meta->sub_resource}`.system_id) WHERE system.org_id IN (" . $CI->user->org_list . ") {$filter}";
            $result = $this->run_sql($sql, array());
            $CI->response->meta->total = 0;
            if ( ! empty($result[0]->count)) {
                $CI->response->meta->total = intval($result[0]->count);
            }
        }
        if ($CI->response->meta->internal->properties === '*' OR $CI->response->meta->internal->properties === $CI->response->meta->sub_resource.'.*') {
            $columns = $this->get_all_columns($CI->response->meta->sub_resource);
        } else {
            $columns = $CI->response->meta->internal->properties;
        }
        $sql = "SELECT {$columns}, system.name AS `system.name` FROM `{$CI->response->meta->sub_resource}` LEFT JOIN system ON (system.id = `{$CI->response->meta->sub_resource}`.system_id) WHERE system.org_id IN ({$CI->user->org_list}) {$filter} {$CI->response->meta->internal->groupby} {$CI->response->meta->internal->sort} {$CI->response->meta->internal->limit}";
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, $CI->response->meta->sub_resource);
        if ($CI->response->meta->sub_resource === 'credential' && count($result) > 0) {
            foreach ($result as &$item) {
                if ( ! empty($item->attributes->credentials)) {
                    $item->attributes->credentials = json_decode(simpleDecrypt($item->attributes->credentials));
                }
            }
        }

        unset($item);
        foreach ($result as &$item) {
            $item->links->self = $CI->config->config['base_url'] . 'index.php/devices?sub_resource=' . $CI->response->meta->sub_resource;
        }
        unset($item);
        return $result;
    }

    /**
     * [report description]
     * @return [type] [description]
     */
    public function report()
    {
        $CI = & get_instance();
        $filter = $this->_build_filter();
        $join = $this->_build_join();

        $sql = "SELECT system.id FROM system {$join} WHERE system.org_id IN (" . $CI->user->org_list . ") {$filter} {$CI->response->meta->internal->groupby}";
        $result = $this->run_sql($sql, array());
        foreach ($result as $temp) {
            $temp_ids[] = $temp->id;
        }
        $system_id_list = implode(',', $temp_ids);
        unset($temp, $temp_ids);

        $sql = 'SELECT * FROM oa_report WHERE report_id = ' . @intval($CI->response->meta->sub_resource_id);
        $result = $this->run_sql($sql, array());
        $report = $result[0];
        $CI->response->meta->sub_resource_name = $report->report_name;
                         
        // not how reports should be used
        $report->report_sql = str_ireplace('LEFT JOIN oa_group_sys ON system.id = oa_group_sys.system_id', '', $report->report_sql);
        // not how reports should be used
        $report->report_sql = str_ireplace('LEFT JOIN oa_group_sys ON oa_group_sys.system_id = system.id', '', $report->report_sql);
        // not how reports should be used
        $report->report_sql = str_ireplace('LEFT JOIN oa_group_sys ON (system.id = oa_group_sys.system_id)', '', $report->report_sql);
        // THIS is how reports _should_ be used
        $report->report_sql = str_ireplace('LEFT JOIN oa_group_sys ON (oa_group_sys.system_id = system.id)', '', $report->report_sql);
        $report->report_sql = str_ireplace('oa_group_sys.group_id = @group', 'system.id IN (' . $system_id_list . ')', $report->report_sql);
        $report->report_sql = str_ireplace('system.id = oa_group_sys.system_id', 'system.id IN (' . $system_id_list . ')', $report->report_sql);

        $result = $this->run_sql($report->report_sql, array());
        $CI->response->meta->total = count($result);
        if ( ! empty($CI->response->meta->limit)) {
            $result = array_splice($result, $CI->response->meta->offset, $CI->response->meta->limit);
        }
        $result = $this->format_data($result, 'devices');
        return($result);
    }

    /**
     * [query description]
     * @return [type] [description]
     */
    public function query()
    {
        $CI = & get_instance();

        $group_id = 0;
        if (is_array($CI->response->meta->filter)) {
            for ($i=0; $i < count($CI->response->meta->filter); $i++) {
                if ($CI->response->meta->filter[$i]->name === 'group') {
                    $group_id = intval($CI->response->meta->filter[$i]->value);
                    unset($CI->response->meta->filter[$i]);
                }
            }
        }

        $filter = $this->_build_filter();
        $join = $this->_build_join();

        $sql = 'SELECT * FROM queries WHERE id = ' . @intval($CI->response->meta->sub_resource_id);
        $result = $this->run_sql($sql, array());
        $query = $result[0];
        $CI->response->meta->sub_resource_name = $query->menu_category . ' - ' . $query->name;

        if ( ! empty($group_id)) {
            $my_sql = '/* m_devices_components::read */' . 'SELECT `sql` FROM `groups` WHERE `id` = ' . intval($group_id);
            $my_query = $this->db->query($my_sql);
            $result = $my_query->result();
            $group_sql = $result[0]->sql;
            $device_sql = "WHERE system.id IN (SELECT system.id FROM system WHERE system.org_id IN ({$CI->user->org_list}))";
            $group_sql = str_replace('WHERE @filter', $device_sql, $group_sql);
            $group_sql = " AND system.id IN ({$group_sql})";
        } else {
            $group_sql = '';
        }

        $device_sql = "WHERE system.id IN (SELECT system.id FROM system {$join} WHERE system.org_id IN ({$CI->user->org_list}) {$filter} {$CI->response->meta->internal->groupby})";
        $sql = $query->sql;
        $sql = str_replace('WHERE @filter', $device_sql . $group_sql, $sql);
        $result = $this->run_sql($sql, array());
        $CI->response->meta->total = 0;

        if ( ! empty($result)) {
            for ($i=0; $i < count($result); $i++) {
                foreach ($CI->response->meta->filter as $item) {
                    if (isset($result[$i]->{$item->name})) {
                        if ($item->operator === '=') {
                            if ($result[$i]->{$item->name} !== $item->value) {
                                unset($result[$i]);
                            }
                        }
                        if ($item->operator === '!=') {
                            if ($result[$i]->{$item->name} === $item->value) {
                                unset($result[$i]);
                            }
                        }
                    }
                }
            }
            $CI->response->meta->total = count($result);
        }

        if ( ! empty($CI->response->meta->limit) && ! empty($result)) {
            $result = array_splice($result, $CI->response->meta->offset, $CI->response->meta->limit);
        }
        $result = $this->format_data($result, 'devices');
        return($result);
    }

    /**
     * [group description]
     * @return [type] [description]
     */
    public function group()
    {
        $CI = & get_instance();
        $filter = $this->_build_filter();

        $sql = 'SELECT * FROM groups WHERE id = ' . @intval($CI->response->meta->sub_resource_id);
        $result = $this->run_sql($sql, array());
        $group = $result[0];
        $CI->response->meta->sub_resource_name = $group->name;

        $filter = '';
        if ( ! empty($CI->response->meta->filter)) {
            foreach ($CI->response->meta->filter as $filter_entry) {
                $filter .= ' AND ' . $filter_entry->name . ' ' . $filter_entry->operator . ' ' . '"' . $filter_entry->value . '"';
            }
        }

        $device_sql = "WHERE system.id IN (SELECT system.id FROM system WHERE system.org_id IN ({$CI->user->org_list}) {$filter}";
        if ( ! empty($CI->response->meta->requestor)) {
            $device_sql = "WHERE system.id IN (SELECT system.id FROM system WHERE system.org_id IN ({$CI->user->org_list}) AND system.oae_manage = 'y') {$filter}";
        }

        $sql = $group->sql;
        $sql = str_replace('WHERE @filter', $device_sql, $sql);
        $sql = str_ireplace('SELECT DISTINCT(system.id)', 'SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.description AS `system.description`, system.manufacturer AS `system.manufacturer`, system.os_family AS `system.os_family`, system.status AS `system.status`', $sql);
        $result = $this->run_sql($sql, array());

        if ( ! empty($result)) {
            for ($i=0; $i < count($result); $i++) {
                foreach ($CI->response->meta->filter as $item) {
                    if (isset($result[$i]->{$item->name})) {
                        if ($item->operator === '=') {
                            if ($result[$i]->{$item->name} !== $item->value) {
                                unset($result[$i]);
                            }
                        }
                        if ($item->operator === '!=') {
                            if ($result[$i]->{$item->name} === $item->value) {
                                unset($result[$i]);
                            }
                        }
                    }
                }
            }
            $CI->response->meta->total = count($result);
        } else {
            $CI->response->meta->total = 0;
        }

        if ( ! empty($CI->response->meta->limit) && ! empty($result)) {
            $result = array_splice($result, $CI->response->meta->offset, $CI->response->meta->limit);
        }
        $result = $this->format_data($result, 'devices');
        return($result);
    }

    /**
     * [update description]
     * @param  [type] $device [description]
     * @return [type]         [description]
     */
    public function update($device = null)
    {
        $CI = & get_instance();
        $this->db->db_debug = false;

        // account for a single id or multiple id's
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
            } elseif ( ! empty($CI->response->meta->ids)) {
                $ids = explode(',', $CI->response->meta->ids);
            }
            // set our last seen by
            if ( ! empty($CI->response->received_data->attributes->last_seen_by)) {
                $source = $CI->response->received_data->attributes->last_seen_by;
            } else {
                $source = 'user';
            }
            $received_data = $CI->response->meta->received_data->attributes;
        }

        if ( ! empty($CI->response->meta->received_data->attributes->status) && $CI->response->meta->received_data->attributes->status === 'deleted' && ! empty($CI->config->config['device_auto_delete']) && $CI->config->config['device_auto_delete'] === 'y') {
            $sql = 'DELETE FROM `system` WHERE id IN ( ' . implode(',', $ids) . ')';
            $data = array();
            $this->run_sql($sql, $data);
            return;
        }

        $CI->load->model('m_edit_log');
        $CI->load->model('m_orgs');
        $system_fields = implode(' ', $this->db->list_fields('system'));
        $system_fields .= ' ';
        $sql = 'SELECT id, name, group_id, org_id FROM fields';
        $fields = $this->run_sql($sql, array());

        // loop through our supplied data and test if it's a custom field or a system field,
        // then update any supplied device id's
        foreach ($received_data as $key => $value) {
            $previous_value = '';

            // check our custom fields
            if ( ! empty($fields)) {
                foreach ($fields as $field) {
                    if ((string)$key === (string)$field->name) {
                        // we have a custom field
                        // check if this device is in the org and group associated with the field
                        $field_orgs = $CI->m_orgs->get_children($field->org_id);
                        $field_orgs[] = $field->org_id;
                        $field_orgs = implode(',', $field_orgs);
                        $sql = 'SELECT `sql` FROM `groups` WHERE id = ?';
                        $data = array($field->group_id);
                        $result = $this->run_sql($sql, $data);
                        $test_sql = $result[0]->sql;
                        if ( ! empty($CI->response->meta->requestor)) {
                            $test_sql = str_replace('@filter', 'system.org_id IN (' . $field_orgs . ') AND system.oae_manage = "y"', $test_sql);
                        } else {
                            $test_sql = str_replace('@filter', 'system.org_id IN (' . $field_orgs . ')', $test_sql);
                        }
                        $test_sql .= ' AND system.id = ?';
                        // get the original value (if it exists)
                        foreach ($ids as $id) {
                            $result = $this->run_sql($test_sql, array(intval($id)));
                            // Only proceed if our system.id is in the fields assigned group
                            if ( ! empty($result)) {
                                $sql = 'SELECT id, value, fields_id FROM field WHERE system_id = ? AND fields_id = ?';
                                $result = $this->run_sql($sql, array(intval($id), $field->id));
                                if (isset($result[0]->value)) {
                                    // If our column exists, it must have a value (even blank) - update it
                                    $previous_value = $result[0]->value;
                                    $sql = 'UPDATE field SET value = ?, timestamp = NOW() WHERE id = ?';
                                    $result = $this->run_sql($sql, array((string)$value, $result[0]->id));
                                    $CI->m_edit_log->create(intval($id), 'Field data was updated', 'field', $field->name, '', $value, $previous_value);
                                } else {
                                    // The row doesn't exist - insert a new one
                                    $sql = 'INSERT INTO field VALUES (NULL, ?, ?, NOW(), ?)';
                                    $result = $this->run_sql($sql, array(intval($id), intval($field->id), (string)$value));
                                    $previous_value = '';
                                    $CI->m_edit_log->create(intval($id), 'Field data was created', 'field', $field->name, '', $value, '');
                                }
                            }
                        }
                    }
                }
            }

            // now check the regular system table fields
            if ((is_string($value) or is_int($value)) && (string)$value === '' && ($key === 'system.id' OR $key === 'id' OR $key === 'system.oae_manage' OR $key === 'oae_manage' OR $key === 'system.status' OR $key === 'status' OR $key === 'system.nmis_manage' OR $key === 'nmis_manage' OR $key === 'system.environment' OR $key === 'environment' OR $key === 'system.location_id' OR $key === 'location_id' OR $key === 'system.org_id' OR $key === 'org_id' OR $key === 'system.type' OR $key === 'type')) {
                // We cannot set these fields to blank, they MUST contain a value

            } else {
                if (stripos($system_fields, ' '.$key.' ') !== false) {
                    // we have a field from the system table
                    foreach ($ids as $id) {
                        // get the current value
                        $sql = "SELECT `{$key}` AS `{$key}` FROM `system` WHERE `id` = ?";
                        $data = array(intval($id));
                        $result = $this->run_sql($sql, $data);
                        $previous_value = @$result[0]->{$key};

                        // get the current entry in the edit_log
                        $sql = "SELECT * FROM `edit_log` WHERE `system_id` = ? AND `db_table` = 'system' AND `db_column` = ? ORDER BY `timestamp` DESC LIMIT 1";
                        $data = array(intval($id), "{$key}");
                        $result = $this->run_sql($sql, $data);
                        if ( ! empty($result[0]->weight)) {
                            $previous_weight = intval($result[0]->weight);
                        } else {
                            $previous_weight = 10000;
                        }
                        // calculate the weight
                        $weight = intval($this->weight($source));
                        if ((is_string($value) or is_int($value)) && $weight <= $previous_weight && (string)$value !== (string)$previous_value) {
                            if ($key !== 'id' && $key !== 'last_seen' && $key !== 'last_seen_by' && $key !== 'first_seen') {
                                // update the system table
                                $sql = "UPDATE `system` SET `{$key}` = ? WHERE id = ?";
                                $data = array((string)$value, intval($id));
                                $this->run_sql($sql, $data);
                                // insert an entry into the edit table
                                $sql = "INSERT INTO edit_log VALUES (NULL, ?, ?, 'Data was changed', ?, ?, 'system', ?, NOW(), ?, ?)";
                                $data = array(@intval($CI->user->id), intval($id), (string)$source, intval($weight), (string)$key, (string)$value, (string)$previous_value);
                                $this->run_sql($sql, $data);
                                // Special case the 'type' - set the icon to match
                                if ($key === 'type') {
                                    $sql = "UPDATE `system` SET `icon` = '" . str_replace(' ', '_', $value) . "' WHERE id = ?";
                                    $data = array(intval($id));
                                    $this->run_sql($sql, $data);
                                }
                            }
                        } else {
                            // We have an existing edit_log entry with a more important change - don't touch the `system`.`$key` value
                        }
                    }
                }
            }
        }
    }

    /**
    * Pass in a string detailing what has attempted to set a value and receive a result containing the weight
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
        // 1500 - rules
        // 2000 - audit, audit_ssh, audit_wmi, windows, wmi
        // 3000 - snmp, ssh, nmis (note - ssh and snmp because they may contain data from nmap)
        // 4000 - ipmi
        // 5000 - ad (active directory)
        // 6000 - nmap
        // The lower the value, the higher the priority is given

        switch ($set_by) {
            case 'user':
                $weight = 1000;
                break;

            case 'rules':
                $weight = 1500;
                break;

            case 'audit':
            case 'audit_ssh':
            case 'audit_wmi':
            case 'windows':
            case 'wmi':
                $weight = 2000;
                break;

            case 'cloud':
            case 'nmis':
            case 'snmp':
            case 'ssh':
                $weight = 3000;
                break;

            case 'ipmi':
            case 'integrations':
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
    public function from_db($result)
    {
        unset($item);
        foreach ($result as &$item) {
            foreach ($item as $key => $value) {
                if ($key === 'id' OR $key === 'free' OR $key === 'size' OR $key === 'speed' OR $key === 'total' OR $key === 'used' OR
                strrpos($key, '_id') === strlen($key)-3 OR strrpos($key, '_count') === strlen($key)-6 OR
                strrpos($key, '_percent') === strlen($key)-8 OR strrpos($key, '_size') === strlen($key)-5 ) {
                    $item->$key = (int) intval($value);
                }
            }
        }
        unset($item);
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

        // nasty hack because when a simplexmlobject is sent (ie, from audit_windows.vbs)
        // the foreach iterators below don't work.
        // if we cast it to an "object", it stays as a SimpleXMLObject and doesn't work
        // because our XML is quite simple, we can cast it to an array and back to a 'normal'
        // object and the foreach below works.

        $details = (object) $details;
        $details = (array) $details;
        $details = (object) $details;
        // this is an insert - we do NOT want a system.id
        unset($details->id);

        // get a name we can use
        if ( ! empty($details->name)) {
            $name = $details->name;
        } elseif ( ! empty($details->hostname)) {
            $name = $details->hostname;
            $details->name = $details->hostname;
        } elseif ( ! empty($details->sysName)) {
            $name = $details->sysName;
            $details->name = $details->sysName;
        } elseif ( ! empty($details->dns_hostname)) {
            $name = $details->dns_hostname;
            $details->name = $details->dns_hostname;
        } elseif ( ! empty($details->ip)) {
            $name = $details->ip;
            $details->name = $details->ip;
        }

        if ( ! isset($details->ip)) {
            $details->ip = '';
        }

        $log_details = new stdClass();
        $log_details->ip = ip_address_from_db($details->ip);
        $log_details->message = 'System insert start for '.ip_address_from_db($details->ip);
        $log_details->severity = 7;
        $log_details->file = 'system';
        stdlog($log_details);

        // remove some characters from the OS string
        if ( ! empty($details->os_name)) {
            $details->os_name = str_ireplace('(r)', '', $details->os_name);
            $details->os_name = str_ireplace('(tm)', '', $details->os_name);
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

        // we now set a default location - 1 the location_id
        if ( ! isset($details->location_id)) {
            $details->location_id = 1;
        }

        // Set the form factor to virtual if required
        if ( ! empty($details->manufacturer)) {
            if ((strripos($details->manufacturer, 'vmware') !== false) OR (strripos($details->manufacturer, 'parallels') !== false) OR (strripos($details->manufacturer, 'virtual') !== false)) {
                if ( ! isset($details->class) OR $details->class !== 'hypervisor') {
                    $details->form_factor = 'Virtual';
                }
            }
        }
        if ( ! empty($details->model)) {
            if (strripos($details->model, 'bhyve') !== false) {
                if ( ! isset($details->class) OR $details->class !== 'hypervisor') {
                    $details->form_factor = 'Virtual';
                }
            }
        }

        // Pad the IP address
        if ( ! empty($details->ip)) {
            $details->ip = ip_address_to_db($details->ip);
        }

        if ( ! empty($details->hostname) && ! empty($details->domain) && empty($details->fqdn)) {
            $details->fqdn = $details->hostname . '.' . $details->domain;
        }

        $sql = 'SHOW COLUMNS FROM system';
        $columns = $this->run_sql($sql, array());

        $sql = 'INSERT INTO system ( ';
        foreach ($details as $key => $value) {
            if ((is_string($value) or is_string($value)) && $key > '') {
                // need to iterate through available columns and only insert where $key == valid column name
                foreach ($columns as $column) {
                    if ((string)$key === (string)$column->Field) {
                        $sql .= $key.', ';
                    }
                }
            }
        }
        $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
        $sql .= ' ) VALUES ( ';
        foreach ($details as $key => $value) {
            if ((is_string($value) or is_string($value)) && $key != '') {
                foreach ($columns as $column) {
                    if ((string)$key === (string)$column->Field) {
                        $sql .= "'".mysqli_real_escape_string($this->db->conn_id, str_replace('"', '', $value))."', ";
                    }
                }
            }
        }
        $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
        $sql .= ')';

        $query = $this->db->query($sql);
        $details->id = $this->db->insert_id();

        // set the weight for these $details
        $weight = $this->weight($details->last_seen_by);

        // insert entries into the edit_log table for these $details columns
        foreach ($details as $key => $value) {
            if ($key > '') {
                foreach ($columns as $column) {
                    if ((string)$key === (string)$column->Field) {
                        if (is_string($value) or is_string($value)) {
                            $sql = "INSERT INTO edit_log VALUES (NULL, 0, ?, '', ?, ?, 'system', ?, ?, ?, ?)";
                            $data = array(intval($details->id), "{$details->last_seen_by}", "{$weight}", "{$key}", "{$details->last_seen}", "{$value}", '');
                            $query = $this->db->query($sql, $data);
                        }
                    }
                }
            }
        }

        // update the device icon
        $this->reset_icons($details->id);

        // insert a subnet so we have a default
        if ( ! isset($details->subnet) OR $details->subnet === '') {
            $details->subnet = '0.0.0.0';
        }

        $log_details->ip = ip_address_from_db($details->ip);
        $log_details->message = 'System insert end for '.ip_address_from_db($details->ip);
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
        if ($id !== '') {
            $sql = 'SELECT id, type, os_name, os_family, os_group, manufacturer FROM system WHERE id = ' . intval($id);
        } else {
            $sql = 'SELECT id, type, os_name, os_family, os_group, manufacturer FROM system';
        }
        $query = $this->db->query($sql);
        $result = $query->result();
        $count = $query->num_rows();
        // we set computer icons by OS, everything else by type
        foreach ($result as $details) {
            if ($details->type === 'computer') {
                // determine icon for computer
                // most generic to most specific
                $details->icon = 'computer';

                // manufacturer based
                if (strripos($details->manufacturer, 'apple') !== false) {
                    $details->icon = 'apple';
                }
                if (strripos($details->manufacturer, 'vmware') !== false) {
                    $details->icon = 'vmware';
                }
                if (strripos($details->manufacturer, 'xen') !== false) {
                    $details->icon = 'xen';
                }
                if (strripos($details->manufacturer, 'google') !== false) {
                    $details->icon = 'google_kvm';
                }

                // os_group based
                if (strripos($details->os_group, 'linux') !== false) {
                    $details->icon = 'linux';
                }
                if (strripos($details->os_group, 'apple') !== false) {
                    $details->icon = 'apple';
                }
                if (strripos($details->os_group, 'windows') !== false) {
                    $details->icon = 'windows';
                }

                // os name based
                if ((strripos($details->os_name, 'osx') !== false) OR (strpos(strtolower($details->os_name), 'ios') !== false)) {
                    $details->icon = 'apple';
                }
                if (strripos($details->os_name, 'aix') !== false) {
                    $details->icon = 'aix';
                }
                if (strripos($details->os_name, 'amazon') !== false) {
                    $details->icon = 'amazon';
                }
                if (strripos($details->os_name, 'arch') !== false) {
                    $details->icon = 'arch';
                }
                if (strripos($details->os_name, 'bsd') !== false) {
                    $details->icon = 'bsd';
                }
                if (strripos($details->os_name, 'centos') !== false) {
                    $details->icon = 'centos';
                }
                if (strripos($details->os_name, 'debian') !== false) {
                    $details->icon = 'debian';
                }
                if (strripos($details->os_name, 'fedora') !== false) {
                    $details->icon = 'fedora';
                }
                if (strripos($details->os_name, 'hp-ux') !== false) {
                    $details->icon = 'hp-ux';
                }
                if ((strripos($details->os_name, 'mandriva') !== false) OR (strripos($details->os_name, 'mandrake') !== false)) {
                    $details->icon = 'mandriva';
                }
                if (strripos($details->os_name, 'mint') !== false) {
                    $details->icon = 'mint';
                }
                if (strripos($details->os_name, 'novell') !== false) {
                    $details->icon = 'novell';
                }
                if (strripos($details->os_name, 'oracle') !== false) {
                    $details->icon = 'oracle';
                }
                if (strripos($details->os_name, 'slackware') !== false) {
                    $details->icon = 'slackware';
                }
                if (strripos($details->os_name, 'solaris') !== false) {
                    $details->icon = 'solaris';
                }
                if (strripos($details->os_name, 'solus') !== false) {
                    $details->icon = 'solus';
                }
                if (strripos($details->os_name, 'suse') !== false) {
                    $details->icon = 'suse';
                }
                if ((strripos($details->os_name, 'red hat') !== false) OR (strripos($details->os_name, 'redhat') !== false)) {
                    $details->icon = 'redhat';
                }
                if (strripos($details->os_name, 'ubuntu') !== false) {
                    $details->icon = 'ubuntu';
                }
                if (strripos($details->os_name, 'vmware') !== false) {
                    $details->icon = 'vmware';
                }
                if (strripos($details->os_name, 'windows') !== false) {
                    $details->icon = 'windows';
                }
                if (strripos($details->os_name, 'microsoft') !== false) {
                    $details->icon = 'windows';
                }
            } else {
                // device is not type=computer
                // base the icon on the type
                if (strpos($details->type, '|') === false) {
                    // if the type does not contain a |, use it.
                    // Nmap will often return a pipe separated list when it guesses
                    $details->icon = str_replace(' ', '_', $details->type);
                } else {
                    // we have a pipe (likely an nmap list) so just just unknown
                    $details->icon = 'unknown';
                }
            }

            $sql = 'UPDATE system SET icon = ? WHERE id = ?';
            $data = array("{$details->icon}", intval($details->id));
            $query = $this->db->query($sql, $data);
        }

        return ($count);
    }

    /**
     * [update_devices_icons description]
     * @param  string $id [description]
     * @return [type]     [description]
     */
    public function update_devices_icons($id = '')
    {
        if ($id !== '') {
            $sql = 'SELECT system.id, type, os_name, os_family, os_group, manufacturer FROM system LEFT JOIN oa_group_sys ON oa_group_sys.system_id = system.id WHERE oa_group_sys.group_id = ' . intval($id);
        } else {
            $sql = 'SELECT id, type, os_name, os_family, os_group, manufacturer FROM system';
        }
        $query = $this->db->query($sql);
        $result = $query->result();
        $count = $query->num_rows();
        // we set computer icons by OS, everything else by type
        foreach ($result as $details) {
            if ($details->type === 'computer') {
                // determine icon for computer
                // most generic to most specific

                // manufacturer based
                if (strripos($details->manufacturer, 'apple') !== false) {
                    $details->icon = 'apple';
                }
                if (strripos($details->manufacturer, 'vmware') !== false) {
                    $details->icon = 'vmware';
                }
                if (strripos($details->manufacturer, 'xen') !== false) {
                    $details->icon = 'xen';
                }
                if (strripos($details->manufacturer, 'google') !== false) {
                    $details->icon = 'google_kvm';
                }

                // os_group based
                if (strripos($details->os_group, 'linux') !== false) {
                    $details->icon = 'linux';
                }
                if (strripos($details->os_group, 'apple') !== false) {
                    $details->icon = 'apple';
                }
                if (strripos($details->os_group, 'windows') !== false) {
                    $details->icon = 'windows';
                }

                // os name based
                if ((strripos($details->os_name, 'osx') !== false) OR (strpos(strtolower($details->os_name), 'ios') !== false)) {
                    $details->icon = 'apple';
                }
                if (strripos($details->os_name, 'aix') !== false) {
                    $details->icon = 'aix';
                }
                if (strripos($details->os_name, 'amazon') !== false) {
                    $details->icon = 'amazon';
                }
                if (strripos($details->os_name, 'bsd') !== false) {
                    $details->icon = 'bsd';
                }
                if (strripos($details->os_name, 'centos') !== false) {
                    $details->icon = 'centos';
                }
                if (strripos($details->os_name, 'debian') !== false) {
                    $details->icon = 'debian';
                }
                if (strripos($details->os_name, 'fedora') !== false) {
                    $details->icon = 'fedora';
                }
                if (strripos($details->os_name, 'hp-ux') !== false) {
                    $details->icon = 'hp-ux';
                }
                if ((strripos($details->os_name, 'mandriva') !== false) OR (strripos($details->os_name, 'mandrake') !== false)) {
                    $details->icon = 'mandriva';
                }
                if (strripos($details->os_name, 'mint') !== false) {
                    $details->icon = 'mint';
                }
                if (strripos($details->os_name, 'novell') !== false) {
                    $details->icon = 'novell';
                }
                if (strripos($details->os_name, 'oracle') !== false) {
                    $details->icon = 'oracle';
                }
                if (strripos($details->os_name, 'slackware') !== false) {
                    $details->icon = 'slackware';
                }
                if (strripos($details->os_name, 'suse') !== false) {
                    $details->icon = 'suse';
                }
                if ((strripos($details->os_name, 'red hat') !== false) OR (strripos($details->os_name, 'redhat') !== false)) {
                    $details->icon = 'redhat';
                }
                if (strripos($details->os_name, 'ubuntu') !== false) {
                    $details->icon = 'ubuntu';
                }
                if (strripos($details->os_name, 'vmware') !== false) {
                    $details->icon = 'vmware';
                }
                if (strripos($details->os_name, 'windows') !== false) {
                    $details->icon = 'windows';
                }
                if (strripos($details->os_name, 'microsoft') !== false) {
                    $details->icon = 'windows';
                }
            } else {
                // device is not type=computer
                // base the icon on the type
                if (strpos($details->type, '|') === false) {
                    // if the type does not contain a |, use it.
                    // Nmap will often return a pipe separated list when it guesses
                    $details->icon = str_replace(' ', '_', $details->type);
                } else {
                    // we have a pipe (likely an nmap list) so just just unknown
                    $details->icon = 'unknown';
                }
            }
            $sql = '/* m_devices::update_icons */ ' . 'UPDATE system SET icon = ? WHERE id = ?';
            $data = array("{$details->icon}", intval($details->id));
            $query = $this->db->query($sql, $data);
        }
        return ($count);
    }

    /**
     * [model_guess description]
     * @param  [type] $device [description]
     * @return [type]         [description]
     */
    public function model_guess($device)
    {
        if (stripos($device->manufacturer, 'Ubiquiti') !== false) {
            if (stripos($device->sysDescr, 'UAP') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP';
            }
            if (stripos($device->sysDescr, 'UAP-LR') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP-LR';
            }
            if (stripos($device->sysDescr, 'UAP-Pro') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP-Pro';
            }
            if (stripos($device->sysDescr, 'UAP-AC') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP-AC';
            }
            if (stripos($device->sysDescr, 'UAP-AC-EDU') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP-AC-EDU';
            }
            if (stripos($device->sysDescr, 'UAP-AC-HD') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP-AC-HD';
            }
            if (stripos($device->sysDescr, 'UAP-AC-Lite') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP-AC-Lite';
            }
            if (stripos($device->sysDescr, 'UAP-AC-LR') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP-AC-LR';
            }
            if (stripos($device->sysDescr, 'UAP-AC-PRO') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP-AC-Pro';
            }
            if (stripos($device->sysDescr, 'UAP-AC-PRO-Gen2') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP-AC-Pro gen 2';
            }
            if (stripos($device->sysDescr, 'UAP-AC-SHD') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP-AC-SHD';
            }
            if (stripos($device->sysDescr, 'UAP-AC-Mesh-Pro') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP-AC-Mesh-Pro';
            }
            if (stripos($device->sysDescr, 'UAP-Outdoor') !== false) {
                $device->type = 'wap';
                $device->model = 'UniFi AP-Outdoor';
            }
        }
        return($device);
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'devices';
        $CI->temp_dictionary->link = str_replace('$collection', $collection, $CI->temp_dictionary->link);
        $this->load->helper('collections');

        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->about = '';
        $dictionary->marketing = '';
        $dictionary->notes = '';
        $dictionary->columns = new stdClass();
        $dictionary->attributes = new stdClass();
        $dictionary->attributes->fields = $this->db->list_fields('system');
        $dictionary->attributes->create = array();
        $dictionary->attributes->update = array();
        $dictionary->sentence = 'Open-AudIT tracks every device on your network. Change a device - see it. Move a device - see it. Remove a device - see it.';
        $dictionary->marketing = '<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br /><br />Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br /><br />Expand on the stored fields easily with your own custom attributes.<br /><br />Even add devices that aren\'t connected to your network or those devices your Open-AudIT server cannot reach.<br /><br />Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br /><br />Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br /><br />Expand on the stored fields easily with your own custom attributes.<br /><br />Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'community';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->last_seen = 'The last time that Open-AudIT retrieved details of this device.';
        $dictionary->columns->last_seen_by = 'The process that was used last to retrieve details about the device';
        return $dictionary;
    }
}
// End of file m_devices.php
// Location: ./models/m_devices.php
