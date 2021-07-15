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
* @package   Summaries
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.2.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Summaries
*
* @access   public
* @category Summaries
* @package  Agents
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
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

    /**
     * Create an individual item in the database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data = null)
    {
        if ($id = $this->insert_collection('summaries', $data)) {
            return intval($id);
        } else {
            return false;
        }
    }

    public function read($id = '')
    {
        if (empty($this->log)) {
            $this->log = new stdClass();
        }
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
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
        $this->log->summary = 'finish';
        stdlog($this->log);
        return ($result);
    }

    public function delete($id = '')
    {
        $data = array(intval($id));
        // Delete any associated tasks
        $sql = "DELETE FROM tasks WHERE sub_resource_id = ? AND type = 'summaries'";
        $test = $this->run_sql($sql, $data);
        // Delete the summary
        $sql = 'DELETE FROM `summaries` WHERE `id` = ?';
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
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
        $org_list = $CI->m_orgs->get_user_all($CI->user->id);
        $sql = 'SELECT COUNT(id) AS `count` FROM summaries WHERE org_id IN (' . implode(',', $org_list) . ')';
        $result = $this->run_sql($sql, array());
        return intval($result[0]->count);
    }

    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if (!empty($user_id)) {
            $org_list = $CI->m_orgs->get_user_all($user_id);
            $sql = "SELECT * FROM summaries WHERE org_id IN (" . implode(',', $org_list) . ")";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'summaries');
            return $result;
        }
        if (!empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT " . $CI->response->meta->internal->properties . ", orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM summaries LEFT JOIN orgs ON (summaries.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . " " . 
                    $CI->response->meta->internal->groupby . " " . 
                    $CI->response->meta->internal->sort . " " . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'summaries');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    public function execute($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);
        $CI = & get_instance();
        if ($id == '') {
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

        if (!empty($CI)) {
            $CI->response->meta->title = 'Summaries - ' . $dashboard[0]->name;
        }

        if ($dashboard[0]->table == 'orgs') {
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
        $CI->response->meta->sql[] = $sql;
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'summaries');
        switch ($dashboard[0]->table) {

            case 'networks':
                $collection = 'networks';
                break;

            case 'orgs':
                $collection = 'orgs';
                break;

            case 'system':
                $collection = 'devices';
                break;
            
            default:
                $collection = 'devices';
                break;
        }
        if ( ! empty($dashboard[0]->extra_columns)) {
            $properties = 'system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,' . $dashboard[0]->extra_columns;
        } else {
            $properties = 'system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status';
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
        if (empty($result)) {
            $result = array();
            $item = new stdClass();
            $item->id = 0;
            $item->type = 'summaries';
            $item->attributes = new stdClass();
            $item->attributes->id = 0;
            $item->attributes->count = 0;
            $item->attributes->name = '';
            $item->attributes->link = '';
            $result[] = $item;
            unset($item);
        }
        $this->log->summary = 'finish';
        stdlog($this->log);
        return ($result);
    }

    public function read_sub_resource()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);
        $this->load->model('m_users');
        $data = array();

        $collections = array('attributes' => 'th-list', 'configuration' => 'cogs', 'connections' => 'link', 'credentials' => 'shield', 'database' => 'database', 'devices' => 'tv', 'discoveries' => 'binoculars', 'fields' => 'list', 'groups' => 'tags', 'ldap_servers' => 'key', 'licenses' => 'leanpub', 'locations' => 'globe', 'logs' => 'bars', 'networks' => 'wifi', 'orgs' => 'bank', 'queries' => 'table', 'scripts' => 'code', 'summaries' => 'file-image-o', 'users' => 'users');

        foreach ($collections as $collection => $value) {
            if ($this->m_users->get_user_permission('', $collection, 'r')) {
                if ($collection == 'database') {
                    $count = count($this->db->list_tables());
                } else if ($collection == 'logs') {
                    $count = 2;
                } else if ($collection == 'devices') {
                    $sql = "SELECT COUNT(*) AS `count` FROM `system`";
                    $count = $this->run_sql($sql);
                    $count = intval($count[0]->count);
                } else if ($this->db->table_exists($collection)) {
                    $sql = "SELECT COUNT(*) AS `count` FROM `" . $collection . "`";
                    $count = $this->run_sql($sql);
                    $count = intval($count[0]->count);
                } else {
                    $count = '';
                }
                $item = new stdClass();
                $item->type = 'collection';
                $item->attributes = new stdClass();
                $item->attributes->name = ucwords(str_replace('_', ' ', $collection));
                $item->attributes->collection = $collection;
                $item->attributes->icon = $value;
                $item->attributes->count = $count;
                $data[] = $item;
                unset($item);
            }
        }

        $this->log->summary = 'finish';
        stdlog($this->log);
        return $data;
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'summaries';
        $CI->temp_dictionary->link = str_replace('$collection', $collection, $CI->temp_dictionary->link);
        $this->load->helper('collections');

        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->about = '';
        $dictionary->marketing = '';
        $dictionary->notes = '';
        $dictionary->columns = new stdClass();
        $dictionary->attributes = new stdClass();
        $dictionary->attributes->fields = $this->db->list_fields($collection);
        $dictionary->attributes->create = mandatory_fields($collection);
        $dictionary->attributes->update = update_fields($collection);
        $dictionary->sentence = 'Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.';
        $dictionary->marketing = "<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it's quite easy to create a new one and load it into Open-AudIT for running.<br /><br />" . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = "<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it's quite easy to create a new one and load it into Open-AudIT for running.<br /><br />" . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'community';
        $dictionary->notes = '<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br /><br />When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br /><br />If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br /><br /></p>';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->table = 'The specific database table.';
        $dictionary->columns->column = 'The specific database column from the specified database table.';
        $dictionary->columns->extra_columns = 'The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).';
        $dictionary->columns->menu_display = 'Should we expose this query in the list of reports under the Reports menu in the web interface.';
        $dictionary->columns->menu_category = 'Which sub-menu should we display this query in.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_summaries.php
// Location: ./models/m_summaries.php
