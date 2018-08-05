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
* @category  Model
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.2.7
* @link      http://www.open-audit.org
 */
class M_search extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function create()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data';
        stdlog($this->log);
        $CI = & get_instance();
        $value = $CI->response->meta->received_data->attributes->value;
        if (!empty($CI->response->meta->received_data->attributes->columns)) {
            $columns = json_decode($CI->response->meta->received_data->attributes->columns);
        } else {
            $columns = '';
        }
        if (!empty($CI->response->meta->received_data->attributes->tables)) {
            $tables = json_decode($CI->response->meta->received_data->attributes->tables);
        } else {
            $tables = '';
        }
        $return = array();

        // This is our standard menu bar search for name or IP
        if (isset($tables[0]) and $tables[0] == 'system' and isset($columns[0]) and $columns[0] == 'name' and isset($columns[1]) and $columns[1] == 'ip') {
            // make our padded IP
            $temp = explode('.', $value);
            for ($i=0; $i < count($temp); $i++) {
                if (empty($temp[$i])) {
                    $temp[$i] = '%';
                } else {
                    $temp[$i] = mb_substr("000".$temp[$i], -3);
                }
            }
            $padded_ip = '%' . implode('.', $temp) . '%';

            $sql = "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.description AS `system.description`, system.os_family AS `system.os_family`, system.status AS `system.status`, ip.ip AS `ip.ip` FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE system.org_id IN (" . $CI->user->org_list . ") AND (
                system.name LIKE '%" . $value . "%' OR
                system.hostname LIKE '%" . $value . "%' OR 
                system.dns_hostname LIKE '%" . $value . "%' OR 
                system.sysName LIKE '%" . $value . "%' OR 
                system.domain LIKE '%" . $value . "%' OR 
                system.dns_domain LIKE '%" . $value . "%' OR 
                system.ip LIKE '" . $padded_ip . "' OR
                system.ip LIKE '%" . $value . "%' OR
                ip.ip LIKE '" . $padded_ip . "' OR
                ip.ip LIKE '%" . $value . "%'
                ) GROUP BY system.id";
            $result = $this->run_sql($sql, array());
            $return = $this->format_data($result, 'devices');
        } else {
            $CI->response->meta->data_order = array("system.id", "system.icon", "system.type", "system.name", "table", "column", "value");
            $tables = array("bios","disk","dns","file","ip","log","memory","module","monitor","motherboard","netstat","network","nmap","optical","partition","pagefile","print_queue","processor","route","san","scsi","service","server","server_item","share","software","software_key","sound","task","user","user_group","variable","video","vm","windows");
            foreach ($tables as $table) {
                unset($result);
                $columns = $this->db->field_data($table);
                $sql = "SELECT `$table`.*, system.id AS `system.id`, system.name AS `system.name`, system.type AS `system.type`, system.icon AS `system.icon` FROM `$table` LEFT JOIN `system` ON (`$table`.system_id = system.id AND `$table`.current = 'y') WHERE system.org_id IN (" . $CI->user->org_list . ") AND ( ";
                foreach ($columns as $column) {
                    if ($column->name != 'id' and $column->name != 'system_id' and $column->name != 'current' and $column->name != 'first_seen' and $column->name != 'last_seen') {
                        if ($column == 'ip') {
                            $temp = explode('.', $value);
                            for ($i=0; $i < count($temp); $i++) { 
                                $temp[$i] = substr('000'.$temp[$i], -3);
                            }
                            $temp_value = implode('.', $temp);
                            $sql .= "`" . $table . "`.`" . $column->name . "` LIKE \"%" . $temp_value . "%\" OR ";
                            $sql .= "`" . $table . "`.`" . $column->name . "` LIKE \"%" . $value . "%\" OR ";
                        } else {
                            $sql .= "`" . $table . "`.`" . $column->name . "` LIKE \"%" . $value . "%\" OR ";
                        }
                    }
                }
                $sql = substr($sql, 0, -3);
                $sql .= ")";
                $result = $this->run_sql($sql);
                if (!empty($result)) {
                    $new_result = array();
                    foreach ($result as $item) {
                        foreach ($item as $item_key => $item_value) {
                            if ($item_key == 'ip') {
                                $temp = explode('.', $value);
                                for ($i=0; $i < count($temp); $i++) { 
                                    $temp[$i] = substr('000'.$temp[$i], -3);
                                }
                                $temp_value = implode('.', $temp);
                            } else {
                                $temp_value = $value;
                            }
                            if (stripos($item_value, $temp_value) !== false) {
                                $new_item = new stdClass();
                                $new_item->{'system.id'} = $item->{'system.id'};
                                $new_item->{'system.icon'} = $item->{'system.icon'};
                                $new_item->{'system.type'} = $item->{'system.type'};
                                $new_item->{'system.name'} = $item->{'system.name'};
                                $new_item->{'table'} = $table;
                                $new_item->{'column'} = $item_key;
                                $new_item->{'value'} = $item_value;
                                $new_result[] = $new_item;
                                unset($new_item);
                            }
                        }
                    }
                    $return = array_merge($return, $this->format_data($new_result, 'devices'));
                }
            }
            $columns = $this->db->field_data("system");
            $sql = "/* m_search::create */" . "SELECT * FROM `system` WHERE system.org_id IN (" . $CI->user->org_list . ") AND ( ";
            foreach ($columns as $column) {
                if ($column == 'ip') {
                    $temp = explode('.', $value);
                    for ($i=0; $i < count($temp); $i++) { 
                        $temp[$i] = substr('000'.$temp[$i], -3);
                    }
                    $temp_value = implode('.', $temp);
                } else {
                    $temp_value = $value;
                }
                $sql .= "`" . $column->name . "` LIKE \"%" . $temp_value . "%\" OR ";
            }
            $sql = substr($sql, 0, -3);
            $sql .= ")";
            $result = $this->run_sql($sql);
            $new_result = array();
            if (!empty($result)) {
                foreach ($result as $item) {
                    foreach ($item as $item_key => $item_value) {
                        if ($item_key == 'ip') {
                            $temp = explode('.', $value);
                            for ($i=0; $i < count($temp); $i++) { 
                                $temp[$i] = substr('000'.$temp[$i], -3);
                            }
                            $temp_value = implode('.', $temp);
                        } else {
                            $temp_value = $value;
                        }
                        if (stripos($item_value, $value) !== false) {
                            $new_item = new stdClass();
                            $new_item->{'system.id'} = $item->{'id'};
                            $new_item->{'system.icon'} = $item->{'icon'};
                            $new_item->{'system.type'} = $item->{'type'};
                            $new_item->{'system.name'} = $item->{'name'};
                            $new_item->{'table'} = 'system';
                            $new_item->{'column'} = $item_key;
                            $new_item->{'value'} = $item_value;
                            $new_result[] = $new_item;
                            unset($new_item);
                        }
                    }
                }
                $return = array_merge($return, $this->format_data($new_result, 'devices'));
            }
        }
        return $return;
    }

    public function update()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $CI = & get_instance();
        $sql = '';
        $fields = ' path description ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `files` " . $sql . ", `edited_by` = '" . $CI->user->full_name . "', `edited_date` = NOW() WHERE id = " . intval($CI->response->meta->id);
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
        $sql = "DELETE FROM `files` WHERE id = ?";
        $data = array(intval($id));
        $this->run_sql($sql, $data);
        return true;
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $sql = $this->collection_sql('files', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'files');
        return ($result);
    }
}
