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
        $this->log = new stdClass();
        $this->log->severity = 7;
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function create($data = null)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data';
        stdlog($this->log);
        $CI = & get_instance();
        $data_array = array();
        $sql = "INSERT INTO `networks` (";
        $sql_data = "";
        if (is_null($data)) {
            if (!empty($CI->response->meta->received_data->attributes)) {
                $data = $CI->response->meta->received_data->attributes;
            } else {
                log_error('ERR-0010', 'networks::create');
                return false;
            }
        }
        foreach ($this->db->field_data('networks') as $field) {
            if (!empty($data->{$field->name}) and $field->name != 'id') {
                $sql .= "`" . $field->name . "`, ";
                $sql_data .= "?, ";
                $data_array[] = (string)$data->{$field->name};
            }
        }
        if (count($data_array) == 0 or empty($data->org_id) or empty($data->name)) {
            log_error('ERR-0021', 'networks::create');
            return false;
        }
        $sql .= 'edited_by, edited_date';        // the user.name and timestamp
        $sql_data .= '?, NOW()';                 // the user.name and timestamp
        $data_array[] = $CI->user->full_name;    // the user.name
        $sql .= ") VALUES (" . $sql_data . ")";
        $this->run_sql($sql, $data_array);
        return $this->db->insert_id();
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT networks.*, COUNT(DISTINCT system.id) as `device_count`, oa_org.name AS `org_name` FROM networks LEFT JOIN ip ON (networks.name = ip.network) LEFT JOIN system ON (system.id = ip.system_id) LEFT JOIN oa_org ON (networks.org_id = oa_org.id) WHERE networks.id = ? AND networks.org_id IN (" . $CI->user->org_list . ")";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'networks');
        return $result;
    }

    public function update()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $CI = & get_instance();
        $sql = '';
        $fields = ' name description org_id ';
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
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
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

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $sql = $this->collection_sql('networks', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'networks');
        return ($result);
    }

    public function sub_resource($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
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
                return array();
            }
        } else {
            return array();
        }
    }

    public function upsert($network)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'upserting data';
        stdlog($this->log);
        if (empty($network)) {
            return false;
        }
        if (empty($network->name)) {
            return false;
        }
        if (empty($network->org_id)) {
            $network->org_id = 1;
        }
        $sql = "SELECT * FROM networks WHERE networks.org_id = ? AND networks.name = ?";
        $data = array(intval($network->org_id), (string)$network->name);
        $result = $this->run_sql($sql, $data);
        if (count($result) == 0) {
            # the network does not exist. Log it and insert it
            if (!empty($network->description)) {
                $description = $network->description;
                $this->log->summary = "Inserting " . $network->name . ' (' . $description . ') into blessed subnet list.';
            } else {
                $description = '';
                $this->log->summary = "Inserting " . $network->name . ' into blessed subnet list.';
            }
            $sql = "INSERT INTO `networks` VALUES (NULL, ?, ?, ?, ?, NOW())";
            $data = array((string)$network->name, intval($network->org_id), (string)$description, 'auto-generated by '.$model.'::'.$function);
            $result = $this->run_sql($sql, $data);
            return true;
        } else {
            return false;
        }
    }

    # supply a standard ip address - 192.168.1.1
    # supply a list of comma separated subnets - 192.168.1.0/24,172.16.0.0/16 or an emptty string to retrieve from the DB
    # returns true if ip is contained in a subnet, false otherwise
    public function check_ip($ip = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if (empty($this->config)) {
            $this->load->model('m_configuration');
            $this->m_configuration->load();
        }
        if (empty($this->config->config['blessed_subnets_use']) or trim(strtolower($this->config->config['blessed_subnets_use'])) != 'y') {
            return true;
        }
        if (empty($ip)) {
            return false;
        }
        if ($ip == '127.0.0.1' or $ip == '127.0.1.1') {
            return true;
        }
        if ($ip == '::1') {
            return true;
        }
        if (stripos($ip, ':') !== false) {
            // We have an IPv6 address. Try to convert it to a v4.
            // Known prefix
            $v4mapped_prefix_hex = '00000000000000000000ffff';
            $v4mapped_prefix_bin = pack("H*", $v4mapped_prefix_hex);
            // Or more readable when using PHP >= 5.4
            # $v4mapped_prefix_bin = hex2bin($v4mapped_prefix_hex);
            // Parse
            $addr = $ip;
            $addr_bin = inet_pton($addr);
            if ($addr_bin === false) {
              // Unparsable? How did they connect?!?
            } else {
                // Check prefix
                if (substr($addr_bin, 0, strlen($v4mapped_prefix_bin)) == $v4mapped_prefix_bin) {
                    // Strip prefix
                    $addr_bin = substr($addr_bin, strlen($v4mapped_prefix_bin));
                }
                // Convert back to printable address in canonical form
                $ip = inet_ntop($addr_bin);
            }
        }
        if (stripos($ip, ':') !== false) {
            return true;
        }
        $sql = "SELECT COUNT(id) AS count FROM networks WHERE (-1 << (33 - INSTR(BIN(INET_ATON(cidr_to_mask(SUBSTR(name, LOCATE('/', name)+1)))), '0'))) & INET_ATON(?) = INET_ATON(SUBSTR(name, 1, LOCATE('/', name)-1))";
        $sql = $this->clean_sql($sql);
        $data = array("$ip");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (intval($result[0]->count) > 0) {
            return true;
        } else {
            $this->load->helper('log_helper');
            $log_details = new stdClass();
            $log_details->severity = 5;
            $log_details->file = 'system';
            $log_details->message = 'Audit submission from an IP not in the list of blessed subnets (' . $_SERVER['REMOTE_ADDR'] . ')';
            stdlog($log_details);
            unset($log_details);
            return false;
        }
    }

    private function count_data($result)
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        // do we have any retrieved rows?
        $CI = & get_instance();
        $trace = debug_backtrace();
        $caller = $trace[1];
        if (count($result) == 0) {
            log_error('ERR-0005', strtolower(@$caller['class'] . '::' . @$caller['function']));
        }
    }
}
