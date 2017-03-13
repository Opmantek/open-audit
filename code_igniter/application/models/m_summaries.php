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
 * @version   1.14.2

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_summaries extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
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
        $sql = "INSERT INTO `summaries` (";
        $sql_data = "";
        if (is_null($data)) {
            if (!empty($CI->response->meta->received_data->attributes)) {
                $data = $CI->response->meta->received_data->attributes;
            } else {
                log_error('ERR-0010', 'm_summaries::create');
                return false;
            }
        }
        foreach ($this->db->field_data('summaries') as $field) {
            if (!empty($data->{$field->name}) and $field->name != 'id') {
                $sql .= "`" . $field->name . "`, ";
                $sql_data .= "?, ";
                $data_array[] = (string)$data->{$field->name};
            }
        }
        if (count($data_array) == 0 or empty($data->org_id) or empty($data->name)) {
            log_error('ERR-0021', 'm_summaries::create');
            return false;
        }
        $sql .= 'edited_by, edited_date';        // the user.name and timestamp
        $sql_data .= '?, NOW()';                 // the user.name and timestamp
        $data_array[] = $CI->user->full_name;    // the user.name
        $sql .= ") VALUES (" . $sql_data . ")";
        $id = intval($this->run_sql($sql, $data_array));
        return ($id);
    }

    public function create_orig()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data';
        stdlog($this->log);
        $CI = & get_instance();
        if (empty($CI->response->meta->received_data->attributes->name)) {
            log_error('ERR-0010', 'm_summaries::create');
            return false;
        }
        $attributes = array('name', 'org_id', 'table', 'column', 'extra_columns');
        $data = array();
        foreach ($attributes as $attribute) {
            $data[] = $CI->response->meta->received_data->attributes->{$attribute};
        }
        $data[] = $CI->user->full_name;
        $sql = "INSERT INTO `summaries` VALUES (NULL, ?, ?, ?, ?, ?, ?, NOW())";
        $id = intval($this->run_sql($sql, $data));
        return ($id);
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
        $sql = "SELECT * FROM summaries WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'summaries');
        return ($result);
    }

    public function update()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
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
        $sql = "UPDATE `summaries` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql);
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
        if ($id != 0) {
            $CI = & get_instance();
            $sql = "DELETE FROM `summaries` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        } else {
            return false;
        }
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        if (empty($CI->response->meta->sort)) {
            $CI->response->meta->sort = 'name';
        }
        $sql = $this->collection_sql('summaries', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'summaries');
        $tables = ' field audit_log bios change_log credential disk dns edit_log file ip log memory module monitor motherboard netstat network nmap optical partition pagefile print_queue processor purchase route san scsi service server server_item share software software_key sound task user user_group variable video vm windows ';
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
        unset($this->log);
        return ($result);
    }

    public function execute($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
            $set_count = true;
            $limit = str_replace('LIMIT ', '', $CI->response->meta->internal->limit);
            $limit = explode(',', $limit);
            if (!empty($limit[0])) {
                $limit_lower = @intval($limit[0]);
            } else {
                $limit_lower = 0;
            }
            if (!empty($limit[1])) {
                $limit_upper = intval($limit[1]);
            } else {
                $limit_upper = 8888888888;
            }
            
            unset($limit);
        } else {
            $id = intval($id);
            $limit_lower = 0;
            $limit_upper = 8888888888;
        }
        $sql = "SELECT * FROM summaries WHERE id = ?";
        $data = array($id);
        $dashboard = $this->run_sql($sql, $data);

        if ($dashboard[0]->table == 'oa_org') {
            $org_id = 'id';
        } else {
            $org_id = 'org_id';
        }
        $tables = ' field audit_log bios change_log credential disk dns edit_log file ip log memory module monitor motherboard netstat network nmap optical partition pagefile print_queue processor purchase route san scsi service server server_item share software software_key sound task user user_group variable video vm windows ';
        $filter = '';
        if (!empty($CI->response->meta->filter)) {
            foreach ($CI->response->meta->filter as $filter_entry) {
                $filter .= ' AND ' . $filter_entry->name . ' ' . $filter_entry->operator . ' ' . '"' . $filter_entry->value . '"';
            }
        }
        if (stripos($tables, $dashboard[0]->table) !== false) {
            $sql = "SELECT " . $dashboard[0]->id . " AS `id`, COUNT(*) AS `count`, " . $dashboard[0]->table . "." . $dashboard[0]->column . " AS `name` FROM system LEFT JOIN `" . $dashboard[0]->table . "` ON (system.id = " . $dashboard[0]->table . ".system_id and " . $dashboard[0]->table . ".current = 'y') WHERE " . $dashboard[0]->table . "." . $dashboard[0]->column . " IS NOT NULL AND " . $dashboard[0]->table . "." . $dashboard[0]->column . " != '' AND system.org_id IN (" . $CI->user->org_list . ")" . $filter . " GROUP BY " . $dashboard[0]->table . "." . $dashboard[0]->column;
        
        } else {
            $sql = "SELECT " . $dashboard[0]->id . " AS `id`, COUNT(*) AS `count`, " . $dashboard[0]->column . " AS `name` FROM `" . $dashboard[0]->table . "` WHERE `$org_id` IN (" . $CI->user->org_list . ")" . $filter . " GROUP BY `" . $dashboard[0]->column . "`";
        }
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'summaries');
        switch ($dashboard[0]->table) {

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
        if (!empty($dashboard[0]->extra_columns)) {
            $properties = 'system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,' . $dashboard[0]->extra_columns;
        } else {
            $properties = 'system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family';
        }
        $link = $CI->config->config['base_url'] . 'index.php/' . $collection . '?' . $dashboard[0]->table . '.' . $dashboard[0]->column . '=';
        for ($i=0; $i < count($result); $i++) {
            $result[$i]->attributes->link = $link . urlencode($result[$i]->attributes->name) . '&properties=' . $properties;
        }
        if (!empty($set_count)) {
            if ($limit_upper == 8888888888) {
                $CI->response->meta->filtered = count($result);
            }
            $CI->response->meta->total = count($result);
        }
        if ($limit_upper != 8888888888) {
            $result = array_slice($result, $limit_lower, $limit_upper);
            if (!empty($set_count)) {
                $CI->response->meta->filtered = count($result);
            }
        }
        return ($result);
    }

    public function read_sub_resource($sub_resource = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $this->load->model('m_users');
        $data = array();

        if ($this->m_users->get_user_permission('', 'attributes', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `attributes`";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Attributes', "collection" => "attributes", "icon" => 'th-list', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'configuration', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `configuration`";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Configuration', "collection" => "configuration", "icon" => 'cogs', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'connections', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `connections` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Connections', "collection" => "connections", "icon" => 'link', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'credentials', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `credentials` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Credentials', "collection" => "credentials", "icon" => 'shield', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'database', 'r')) {
            $data[] = array("name" => 'Database', "collection" => "database", "icon" => 'database', "count" => count($this->db->list_tables()));
        }

        if ($this->m_users->get_user_permission('', 'devices', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `system` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Devices', "collection" => "devices", "icon" => 'tv', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'discoveries', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `discoveries` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Discoveries', "collection" => "discoveries", "icon" => 'binoculars', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'fields', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `fields` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Fields', "collection" => "fields", "icon" => 'list', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'groups', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `groups` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Groups', "collection" => "groups", "icon" => 'tags', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'ldap_servers', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `ldap_servers` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'LDAP', "collection" => "ldap_servers", "icon" => 'key', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'licenses', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `licenses` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Licenses', "collection" => "licenses", "icon" => 'leanpub', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'locations', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `locations` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Locations', "collection" => "locations", "icon" => 'globe', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'logs', 'r')) {
            $data[] = array("name" => 'Logs', "collection" => "logs", "icon" => 'bars', "count" => 2);
        }

        if ($this->m_users->get_user_permission('', 'networks', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `networks` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Networks', "collection" => "networks", "icon" => 'wifi', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'orgs', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `oa_org` WHERE id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Orgs', "collection" => "orgs", "icon" => 'bank', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'queries', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `queries` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Queries', "collection" => "queries", "icon" => 'table', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'scripts', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `scripts` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Scripts', "collection" => "scripts", "icon" => 'code', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'summaries', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `summaries` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Summaries', "collection" => "summaries", "icon" => 'file-image-o', "count" => $count[0]->count);
        }

        if ($this->m_users->get_user_permission('', 'users', 'r')) {
            $sql = "SELECT COUNT(*) AS `count` FROM `oa_user` WHERE org_id IN (" . $CI->user->org_list . ")";
            $count = $this->run_sql($sql);
            $data[] = array("name" => 'Users', "collection" => "users", "icon" => 'users', "count" => $count[0]->count);
        }

        return $data;
    }
}
