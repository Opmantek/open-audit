<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class SearchModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('devices');
    }


    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create()
    {
        $instance = & get_instance();
        $value = $instance->resp->meta->received_data->attributes->value;
        if (!empty($instance->resp->meta->received_data->attributes->columns)) {
            try {
                $columns = json_decode($instance->resp->meta->received_data->attributes->columns, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
        } else {
            $columns = '';
        }
        if (!empty($instance->resp->meta->received_data->attributes->tables)) {
            try {
                $tables = json_decode($instance->resp->meta->received_data->attributes->tables, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
        } else {
            $tables = '';
        }
        $return = array();

        // This is our standard menu bar search for name or IP
        if (isset($tables[0]) && $tables[0] === 'devices' && isset($columns[0]) && $columns[0] === 'name' && isset($columns[1]) && $columns[1] === 'ip') {
            // make our padded IP
            $temp = explode('.', $value);
            for ($i = 0; $i < count($temp); $i++) {
                if (empty($temp[$i])) {
                    $temp[$i] = '%';
                } else {
                    #$temp[$i] = mb_substr('000'.$temp[$i], -3);
                    $temp[$i] = '%' . $temp[$i] . '%';
                }
            }
            $padded_ip = '%' . implode('.', $temp) . '%';
            // $sql = "SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.hostname AS `devices.hostname`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.os_family AS `devices.os_family`, devices.status AS `devices.status`, devices.dns_hostname AS `devices.dns_hostname`, devices.dns_domain AS `devices.dns_domain`, devices.sysName AS `devices.sysName`, ip.ip AS `ip.ip` FROM devices LEFT JOIN ip ON (devices.id = ip.device_id AND ip.current = 'y' AND (ip.ip LIKE ? or ip.ip LIKE ?)) WHERE devices.org_id IN ({$instance->user->org_list}) AND ( devices.name LIKE ? OR devices.hostname LIKE ? OR  devices.dns_hostname LIKE ? OR  devices.sysName LIKE ? OR  devices.domain LIKE ? OR  devices.dns_domain LIKE ? OR devices.ip LIKE ? OR devices.ip LIKE ? OR ip.ip LIKE ? or ip.ip LIKE ?)";
            $sql = "SELECT devices.id, devices.icon, devices.type, devices.name, devices.hostname, devices.domain, devices.ip, devices.os_family, devices.status, devices.dns_hostname, devices.dns_domain, devices.sysName, ip.ip AS `ip.ip` FROM devices LEFT JOIN ip ON (devices.id = ip.device_id AND ip.current = 'y' AND (ip.ip LIKE ? or ip.ip LIKE ?)) WHERE devices.org_id IN ({$instance->user->org_list}) AND ( devices.name LIKE ? OR devices.hostname LIKE ? OR  devices.dns_hostname LIKE ? OR  devices.sysName LIKE ? OR  devices.domain LIKE ? OR  devices.dns_domain LIKE ? OR devices.ip LIKE ? OR devices.ip LIKE ? OR ip.ip LIKE ? or ip.ip LIKE ?)";
            $value = '%' . $value . '%';
            $result = $this->db->query($sql, [$value, $padded_ip, $value, $value, $value, $value, $value, $value, $padded_ip, $value, $value, $padded_ip])->getResult();
            # log_message('info', 'SQL: ' . str_replace("\n", " ", (string)$this->db->getLastQuery()));
            $return = format_data($result, 'devices');
        } else {
            $instance->resp->meta->data_order = array('devices.id', 'devices.icon', 'devices.type', 'devices.name', 'table', 'column', 'value');
            $tables = array('bios','disk','dns','file','ip','log','memory','module','monitor','motherboard','netstat','network','nmap','optical','partition','pagefile','print_queue','processor','route','san','scsi','service','server','server_item','share','software','software_key','sound','task','user','user_group','variable','video','vm','windows');
            foreach ($tables as $table) {
                unset($result);
                $columns = $this->db->getFieldNames($table);
                $sql = "SELECT `{$table}`.*, devices.id AS `devices.id`, devices.name AS `devices.name`, devices.type AS `devices.type`, devices.icon AS `devices.icon` FROM `{$table}` LEFT JOIN `devices` ON (`{$table}`.device_id = devices.id AND `{$table}`.current = 'y') WHERE devices.org_id IN ({$instance->user->org_list}) AND ( ";
                foreach ($columns as $column) {
                    if ($column !== 'id' && $column !== 'device_id' && $column !== 'current' && $column !== 'first_seen' && $column !== 'last_seen') {
                        if ($column === 'ip') {
                            $temp = explode('.', $value);
                            for ($i = 0; $i < count($temp); $i++) {
                                $temp[$i] = substr('000' . $temp[$i], -3);
                            }
                            $temp_value = implode('.', $temp);
                            $sql .= "`{$table}`.`{$column}` LIKE \"%{$temp_value}%\" OR ";
                            $sql .= "`{$table}`.`{$column}` LIKE \"%{$value}%\" OR ";
                        } else {
                            $sql .= "`{$table}`.`{$column}` LIKE \"%{$value}%\" OR ";
                        }
                    }
                }
                $sql = substr($sql, 0, -3);
                $sql .= ')';
                $result = $this->db->query($sql)->getResult();
                if (!empty($result)) {
                    $new_result = array();
                    foreach ($result as $item) {
                        foreach ($item as $item_key => $item_value) {
                            if ($item_key === 'ip') {
                                $temp = explode('.', $value);
                                for ($i = 0; $i < count($temp); $i++) {
                                    $temp[$i] = substr('000' . $temp[$i], -3);
                                }
                                $temp_value = implode('.', $temp);
                            } else {
                                $temp_value = $value;
                            }
                            if (stripos($item_value, $temp_value) !== false) {
                                $new_item = new \stdClass();
                                $new_item->{'devices.id'} = $item->{'devices.id'};
                                $new_item->{'devices.icon'} = $item->{'devices.icon'};
                                $new_item->{'devices.type'} = $item->{'devices.type'};
                                $new_item->{'devices.name'} = $item->{'devices.name'};
                                $new_item->{'table'} = $table;
                                $new_item->{'column'} = $item_key;
                                $new_item->{'value'} = $item_value;
                                $new_result[] = $new_item;
                                unset($new_item);
                            }
                        }
                    }
                    $return = array_merge($return, format_data($new_result, 'devices'));
                }
            }
            $columns = $this->db->getFieldNames('devices');
            $sql = "SELECT * FROM `devices` WHERE devices.org_id IN ({$instance->user->org_list}) AND ( ";
            foreach ($columns as $column) {
                if ($column === 'ip') {
                    $temp = explode('.', $value);
                    for ($i = 0; $i < count($temp); $i++) {
                        $temp[$i] = substr('000' . $temp[$i], -3);
                    }
                    $temp_value = implode('.', $temp);
                } else {
                    $temp_value = $value;
                }
                $sql .= "`{$column}` LIKE \"%{$temp_value}%\" OR ";
            }
            $sql = substr($sql, 0, -3);
            $sql .= ')';
            $result = $this->db->query($sql)->getResult();
            $new_result = array();
            if (!empty($result)) {
                foreach ($result as $item) {
                    foreach ($item as $item_key => $item_value) {
                        if ($item_key === 'ip') {
                            $temp = explode('.', $value);
                            for ($i = 0; $i < count($temp); $i++) {
                                $temp[$i] = substr('000' . $temp[$i], -3);
                            }
                            $temp_value = implode('.', $temp);
                        } else {
                            $temp_value = $value;
                        }
                        if (!is_null($item_value)) {
                            if (stripos($item_value, $value) !== false) {
                                $new_item = new \stdClass();
                                $new_item->{'devices.id'} = $item->{'id'};
                                $new_item->{'devices.icon'} = $item->{'icon'};
                                $new_item->{'devices.type'} = $item->{'type'};
                                $new_item->{'devices.name'} = $item->{'name'};
                                $new_item->{'table'} = 'devices';
                                $new_item->{'column'} = $item_key;
                                $new_item->{'value'} = $item_value;
                                $new_result[] = $new_item;
                                unset($new_item);
                            }
                        }
                    }
                }
                $return = array_merge($return, format_data($new_result, 'devices'));
            }
        }
        return $return;
    }
}
