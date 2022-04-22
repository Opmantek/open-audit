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
* @package   Queries
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.2
* @link      http://www.open-audit.org
*/

/**
* Base Model Queries
*
* @access   public
* @category Model
* @package  Queries
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_queries extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
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
        if ( ! empty($data->sql)) {
            if (stripos($data->sql, 'update ') !== false OR stripos($data->sql, 'update`') !== false) {
                log_error('ERR-0045', 'm_queries::create', 'SQL cannot contain UPDATE clause');
                return false;
            }
            if (stripos($data->sql, 'delete from ') !== false OR stripos($data->sql, 'delete from`') !== false) {
                log_error('ERR-0045', 'm_queries::create', 'SQL cannot contain DELETE clause.');
                return false;
            }
            if (stripos($data->sql, 'insert into ') !== false OR stripos($data->sql, 'insert into`') !== false) {
                log_error('ERR-0045', 'm_queries::create', 'SQL cannot contain INSERT clause.');
                return false;
            }
            if (stripos($data->sql, 'where @filter') === false OR stripos($data->sql, 'where @filter or') !== false) {
                // We don't have the HIGHLY RECOMMENDED @filter in our SQL
                // Ensure the user creating this query has the admin role
                if ( ! in_array('admin', $this->user->roles)) {
                    log_error('ERR-0022', 'queries::create');
                    return false;
                }
            }
        }
        if ($id = $this->insert_collection('queries', $data)) {
            return intval($id);
        } else {
            return false;
        }
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read($id = 0)
    {
        $id = intval($id);
        $sql = 'SELECT * FROM `queries` WHERE `id` = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'queries');
        return ($result);
    }

    /**
     * [update description]
     * @return [type] [description]
     */
    public function update()
    {
        $id = intval($id);
        $CI = & get_instance();
        $sql = '';
        $data_items = array();
        $fields = ' name org_id description sql ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if ($key === 'sql') {
                // TODO - fix the second test below to use a regex to account for multiple spaces
                if (stripos($value, 'where @filter') === false OR stripos($value, 'where @filter or') !== false) {
                    // We don't have the HIGHLY RECOMMENDED @filter in our SQL
                    // Ensure the user creating this query has the admin role
                    $allowed = false;
                    foreach ($CI->user->roles as $string) {
                        if ($string === 'admin') {
                            $allowed = true;
                        }
                    }
                    if ( ! $allowed) {
                        unset($allowed);
                        log_error('ERR-0022', 'm_queries::create');
                        return false;
                    }
                    unset($allowed);
                }
            }
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql === '') {
                    $sql = "SET `{$key}` = ?";
                } else {
                    $sql .= ", `{$key}` = ?";
                }
                $data_items[] = $value;
            }
        }
        $sql = "UPDATE `queries` {$sql} WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql, $data_items);
        $this->log->summary = 'finish';
        stdlog($this->log);
        return;
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = 0)
    {
        $data = array(intval($id));
        // Delete any associated tasks
        $sql = "DELETE FROM tasks WHERE sub_resource_id = ? AND type = 'queries'";
        $test = $this->run_sql($sql, $data);
        // Delete the query
        $sql = 'DELETE FROM `queries` WHERE `id` = ?';
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
        $org_list = implode(',', $CI->m_orgs->get_user_all($CI->user->id));
        $sql = "SELECT COUNT(id) AS `count` FROM queries WHERE org_id IN ({$org_list})";
        $result = $this->run_sql($sql, array());
        return intval($result[0]->count);
    }

    /**
     * Read the collection from the database
     *
     * @param  int $user_id  The ID of the requesting user, no $response->meta->filter used and no $response->data populated
     * @param  int $response A flag to tell us if we need to use $response->meta->filter and populate $response->data
     * @return bool True = success, False = fail
     */
    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if ( ! empty($user_id)) {
            $org_list = implode(',', $CI->m_orgs->get_user_all($user_id));
            $sql = "SELECT * FROM queries WHERE org_id IN ({$org_list})";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'queries');
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM queries LEFT JOIN orgs ON (queries.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'queries');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    /**
     * Run the SQL definition and return the count of the resultset
     * @param  integer $id The ID of the group
     * @return integer The number of rows
     */
    public function execute_count($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);
        $CI = & get_instance();
        $id = intval($id);
        $sql = 'SELECT * FROM queries WHERE id = ?';
        $data = array($id);
        $queries = $this->run_sql($sql, $data);
        if (empty($queries)) {
            return 0;
        }
        $query = $queries[0];
        // below accounts for queries that end in a ; and/or a CR or spaces, etc
        // when we add on LIMIT = 12345, it will break unless we strip those characters
        $sql = trim($query->sql);
        if (strpos($sql, ';') === strlen($sql)-1) {
            $sql = substr($sql, 0, strlen($sql)-1);
            $sql = trim($sql);
        }
        unset($queries);
        // Determine the type
        if (stripos($sql, 'SELECT system.id') !== false) {
            $type = 'devices';
        } else {
            $temp = explode(' ', $sql);
            $temp1 = explode('.', $temp[1]);
            $type = $temp1[0];
            $collections = array('agents','applications','attributes','baselines','baselines_policies','buildings','charts','clouds','clusters','collectors','configuration','connections','credentials','dashboards','database','devices','discoveries','discovery_log','discovery_scan_options','errors','fields','files','floors','graphs','groups','help','integrations','invoices','invoice_items','ldap_servers','licenses','locations','logs','networks','nmis','orgs','queries','queue','racks','rack_devices','reports','roles','rooms','rows','rules','scripts','search','sessions','summaries','tasks','users','widgets');
            if ( ! in_array($type, $collections)) {
                $type = 'queries';
            }
        }
        $filter = "system.org_id IN ({$CI->user->org_list})";
        if ( ! empty($CI->response->meta->requestor)) {
            $filter = "system.org_id IN ({$CI->user->org_list}) AND system.oae_manage = 'y'";
        }
        $sql = str_ireplace('WHERE @filter', "WHERE {$filter}", $sql);
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, $type);
        $this->log->summary = 'finish';
        stdlog($this->log);
        return count($result);
    }

    /**
     * Run the SQL definition and return the provided properties OR the system.id list
     * @param  integer $id The ID of the group
     * @return array       An array of standard formatted devices, or an empty array
     */
    public function execute($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);
        $CI = & get_instance();
        if ($id === '') {
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        // TODO - add a count for the total returned in response->meta->filtered
        $sql = 'SELECT * FROM queries WHERE id = ?';
        $data = array($id);
        $queries = $this->run_sql($sql, $data);
        if ( ! empty($queries)) {
            $query = $queries[0];
            // below accounts for queries that end in a ; and/or a CR or spaces, etc
            // when we add on LIMIT = 12345, it will break unless we strip those characters
            $sql = trim($query->sql);
            if (strpos($sql, ';') === strlen($sql)-1) {
                $sql = substr($sql, 0, strlen($sql)-1);
                $sql = trim($sql);
            }
            unset($queries);
            // Determine the type
            if (stripos($sql, 'SELECT system.id') !== false) {
                $type = 'devices';
            } else {
                $temp = explode(' ', $sql);
                $temp1 = explode('.', $temp[1]);
                $type = $temp1[0];
                $collections = array('agents','applications','attributes','baselines','baselines_policies','buildings','charts','clouds','clusters','collectors','configuration','connections','credentials','dashboards','database','devices','discoveries','discovery_log','discovery_scan_options','errors','fields','files','floors','graphs','groups','help','integrations','invoices','invoice_items','ldap_servers','licenses','locations','logs','networks','nmis','orgs','queries','queue','racks','rack_devices','reports','roles','rooms','rows','rules','scripts','search','sessions','summaries','tasks','users','widgets');
                if ( ! in_array($type, $collections)) {
                    $type = 'queries';
                }
            }
            $filter = "system.org_id IN ({$CI->user->org_list})";
            if ( ! empty($CI->response->meta->requestor)) {
                $filter = "system.org_id IN ({$CI->user->org_list}) AND system.oae_manage = 'y'";
            }
            $user_filter = $this->_build_filter();
            if ( ! empty($user_filter)) {
                $filter .= $user_filter;
            }
            $sql = str_ireplace('WHERE @filter', "WHERE {$filter}", $sql);
            $sql .= ' ' . $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, $type);
            $this->log->summary = 'finish';
            stdlog($this->log);
        }
        if (empty($result)) {
            return array();
        }
        if ( ! empty($CI->response->meta->format) && $CI->response->meta->format === 'json') {
            if (isset($result[0]->attributes->{'system.credentials'}))  {
                $this->load->library('encrypt');
                $this->load->model('m_credentials');
                $credentials = $this->m_credentials->collection($this->user->id);
                $device_ids = array();
                foreach ($result as $device) {
                    $device_ids[] = $device->attributes->{'system.id'};
                    $credentials_array = json_decode($device->{'attributes'}->{'system.credentials'});
                    if ( ! empty($credentials_array)) {
                        foreach ($credentials_array as $credential_id) {
                            foreach ($credentials as $credential) {
                                if (intval($credential->id) === intval($credential_id)) {
                                    $type = $credential->attributes->type;
                                    foreach ($credential->attributes->credentials as $key => $value) {
                                        $device->attributes->{'credentials.'.$type.'.'.$key} = $value;
                                    }
                                }
                            }
                        }
                    }
                }
                $my_ids = implode(',', $device_ids);
                $sql = "SELECT * FROM `credential` WHERE `system_id` IN ({$my_ids})";
                $credentials = $this->run_sql($sql, array());
                foreach ($credentials as $credential) {
                    foreach ($result as $device) {
                        if (intval($device->{'attributes'}->{'system.id'}) === intval($credential->system_id)) {
                            $decoded = json_decode(simpleDecrypt($credential->credentials));
                            $type = $credential->type;
                            foreach ($decoded as $key => $value) {
                                $device->attributes->{'credentials.'.$type.'.'.$key} = $value;
                            }
                        }
                    }
                }
                foreach ($result as $device) {
                    $device->{'attributes'}->{'system.collect'} = 'false';
                    foreach ($device->{'attributes'} as $key => $value) {
                        if (stripos($key, 'credentials.') === 0) {
                            $device->{'attributes'}->{'system.collect'} = 'true';
                        }
                    }
                }
            }
        }
        return $result;
    }

    /**
     * [sub_resource description]
     * @param  string $id [description]
     * @return [type]     [description]
     */
    public function sub_resource($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);
        if ($id === '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = 'SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.description AS `system.description`, system.os_family AS `system.os_family`, system.status AS `system.status` FROM system WHERE system.location_id = ?';
        $data = array((string)$id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'devices');
        $this->log->summary = 'finish';
        stdlog($this->log);
        return $result;
    }

    /**
     * [_build_filter description]
     * @return [type] [description]
     */
    private function _build_filter()
    {
        $CI = & get_instance();
        $reserved = ' properties limit sub_resource action sort current offset format ';
        $filter = '';
        foreach ($CI->response->meta->filter as $item) {
            if (strpos(' '.$item->name.' ', $reserved) === false) {
                if ($item->name === 'id') {
                    $item->name = 'system.id';
                }
                if ( ! empty($item->name) && $item->operator !== 'in') {
                    $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . $item->value . '"';
                }
                if ( ! empty($item->name) && $item->operator === 'in') {
                    $filter .= ' AND ' . $item->name . ' in ' . $item->value;
                }
            }
        }
        return($filter);
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'queries';
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
        $dictionary->sentence = 'Open-AudIT provides many built-in queries and makes it simple to create your own.';
        $dictionary->marketing = '<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it\'s quite easy to create a new one and load it into Open-AudIT for running.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it\'s quite easy to create a new one and load it into Open-AudIT for running.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->notes = '<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT system.id AS `system.id`, system.name AS `system.name` ...</code>.<br /><br />The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br /><br />An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br /><code>SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, <br />system.name AS `system.name`, system.os_name AS `system.os_name` FROM<br /> system WHERE @filter AND system.os_group = "Linux"</code><br /><br /></p>';
        $dictionary->product = 'community';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->sql = 'Your SQL to select attributes that will populate this query.';
        $dictionary->columns->link = 'unused';
        $dictionary->columns->menu_display = 'Should we expose this query in the list of reports under the "Reports" menu in the web interface.';
        $dictionary->columns->menu_category = 'Which sub-menu should we display this query in.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_queries.php
// Location: ./models/m_queries.php
