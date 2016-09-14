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
class M_dashboards extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        $CI = & get_instance();
        if (empty($CI->response->meta->received_data->attributes->name)) {
            log_error('ERR-0010', 'm_dashboards::create');
            return false;
        }
        $attributes = array('name', 'org_id', 'table', 'column');
        $data = array();
        foreach ($attributes as $attribute) {
            $data[] = $CI->response->meta->received_data->attributes->{$attribute};
        }
        $data[] = $CI->user->full_name;
        $sql = "INSERT INTO `dashboards` VALUES (NULL, ?, ?, ?, ?, ?, NOW())";
        $this->run_sql($sql, $data);
        return $this->db->insert_id();
    }

    public function read($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM dashboards WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'dashboards');
        return ($result);
    }

    public function update()
    {
        $CI = & get_instance();
        $sql = '';
        $fields = ' name org_id table column ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `dashboards` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
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
            $sql = "DELETE FROM `dashboards` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        } else {
            return false;
        }
    }

    public function collection()
    {
        $CI = & get_instance();
        $sql = $this->collection_sql('dashboards', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'dashboards');
        $tables = ' additional_field_item audit_log bios change_log credential disk dns edit_log file ip log memory module monitor motherboard netstat network nmap optical partition pagefile print_queue processor purchase route san scsi service server server_item share software software_key sound task user user_group variable video vm windows ';
        for ($i=0; $i < count($result); $i++) {
            if ($result[$i]->attributes->table == 'oa_org') {
                $org_id = 'id';
            } else {
                $org_id = 'org_id';
            }
            if (stripos($tables, $result[$i]->attributes->table) !== false) {
                $sql = "SELECT COUNT(DISTINCT " . $result[$i]->attributes->table . "." . $result[$i]->attributes->column . ") AS `count` FROM system LEFT JOIN " . $result[$i]->attributes->table . " ON (system.id = " . $result[$i]->attributes->table . ".system_id and " . $result[$i]->attributes->table . ".current = 'y') WHERE system.org_id IN (" . $CI->user->org_list . ")";
            } else {
                $sql = "SELECT COUNT(DISTINCT " . $result[$i]->attributes->column . ") AS `count` FROM " . $result[$i]->attributes->table . " WHERE `" . $org_id . "` IN (" . $CI->user->org_list . ")";
                #$sql = "SELECT COUNT(DISTINCT " . $result[$i]->attributes->column . ") AS `count` FROM " . $result[$i]->attributes->table . " WHERE `" . $org_id . "` IN (" . $CI->user->org_list . ") WHERE " . $result[$i]->attributes->table . "." . $result[$i]->attributes->column . " IS NOT NULL AND " . $result[$i]->attributes->table . "." . $result[$i]->attributes->column . " != ''";
            }
            $count = $this->run_sql($sql, array());
            if (!empty($count[0]->count)) {
                $result[$i]->attributes->count = intval($count[0]->count);
            } else {
                $result[$i]->attributes->count = 0;
            }
            $result[$i]->attributes->link_execute = $result[$i]->links->self . '?action=execute&format=json&debug=true';
        }
        return ($result);
    }

    public function execute($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM dashboards WHERE id = ?";
        $data = array($id);
        $dashboard = $this->run_sql($sql, $data);

        if ($dashboard[0]->table == 'oa_org') {
            $org_id = 'id';
        } else {
            $org_id = 'org_id';
        }
        $tables = ' additional_field_item audit_log bios change_log credential disk dns edit_log file ip log memory module monitor motherboard netstat network nmap optical partition pagefile print_queue processor purchase route san scsi service server server_item share software software_key sound task user user_group variable video vm windows ';
        
        if (stripos($tables, $dashboard[0]->table) !== false) {
            $sql = "SELECT " . $dashboard[0]->id . " AS `id`, COUNT(*) AS `count`, " . $dashboard[0]->table . "." . $dashboard[0]->column . " AS `name` FROM system LEFT JOIN " . $dashboard[0]->table . " ON (system.id = " . $dashboard[0]->table . ".system_id and " . $dashboard[0]->table . ".current = 'y') WHERE " . $dashboard[0]->table . "." . $dashboard[0]->column . " IS NOT NULL AND " . $dashboard[0]->table . "." . $dashboard[0]->column . " != '' AND system.org_id IN (" . $CI->user->org_list . ") GROUP BY " . $dashboard[0]->table . "." . $dashboard[0]->column;
        
        } else {
            $sql = "SELECT " . $dashboard[0]->id . " AS `id`, COUNT(*) AS `count`, " . $dashboard[0]->column . " AS `name` FROM `" . $dashboard[0]->table . "` WHERE `$org_id` IN (" . $CI->user->org_list . ") GROUP BY `" . $dashboard[0]->column . "`";
        }
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'dashboards');

        switch ($dashboard[0]->table) {

            case 'oa_location':
                $collection = 'locations';
                break;

            case 'networks':
                $collection = 'networks';
                break;

            case 'oa_org':
                $collection = 'orgs';
                break;

            case 'system':
                $collection = 'devices';
                break;
            
            default:
                $collection = 'devices';
                break;
        }
        $link = $CI->config->config['base_url'] . 'index.php/' . $collection . '?' . $dashboard[0]->table . '.' . $dashboard[0]->column . '=';
        for ($i=0; $i < count($result); $i++) {
            $result[$i]->attributes->link = $link . urlencode($result[$i]->attributes->name);
        }

        return ($result);
    }

    // public function read_sub_resource($sub_resource = '')
    // {
    //     if ($sub_resource == '') {
    //         $CI = & get_instance();
    //         $sub_resource = $CI->response->meta->sub_resource;
    //     }
    //     $sql = "SELECT `" . $sub_resource . "`, COUNT(*) as `count`, 0 as `id` FROM `system` WHERE system.org_id IN (" . $CI->user->org_list . ") GROUP BY `system`.`" . $sub_resource . "`";
    //     $result = $this->run_sql($sql, array());
    //     if (count($result) == 0) {
    //         return false;
    //     } else {
    //         #$result = $this->format_data($result, 'dashboard');
    //         $return = array();
    //         $item = new stdClass();
    //         $item->id = 0;
    //         $item->type = 'dashboard';
    //         $item->attributes = array();
    //         foreach ($result as $row) {
    //             $item->attributes[$row->$sub_resource] = intval($row->count);
    //         }
    //         $return[] = $item;
    //         return ($return);
    //     }
    // }
}
