<?php  if (!defined('BASEPATH')) {
     exit('No direct script access allowed');
 }
#
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

/*
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * 
@version 1.14
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (! function_exists('inputRead')) {
    /**
     * The standard log function for Open-AudIT. Writes logs to a text file in the desired format (json or syslog).
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param     Object    log_details     An object containing details you wish to log
     *
     * @return NULL [logs the provided string to the log file]
     */
    function inputRead()
    {
        // Our default values are below
        // resource is the controller name (devices, groups, et al)
        // id is the integer value (if any) following the controller name in the URL
        // sub_resource = blank
        // sub_resource_id = blank
        // action = read if id is set or list if id is not set (create, read, update, delete, list, execute)
        // sort = blank
        // current = y
        // groupby = blank
        // limit = 1000
        // offset = 0
        // format = json
        // properties = *
        // filter = blank
        // version = 1 if JSON requested (the original), 0 if not JSON requested (the latest available)

        // Can set individual items using parameters /devices/1 == /devices?system_id=1 ???



        error_reporting(E_ALL);
        $CI = & get_instance();
        if (empty($CI->response)) {
            $CI->response = new stdClass();
        }

        # enable the $_GET global
        parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);

        # initialise our properties
        $CI->response->collection = '';
        $CI->response->action = '';
        $CI->response->id = 0;
        $CI->response->sub_resource = '';
        $CI->response->sub_resource_id = 0;
        $CI->response->format = '';
        $CI->response->debug = false;
        $CI->response->query_string = '';
        $CI->response->version = '';
        $CI->response->total = '';
        $CI->response->filtered = '';
        $CI->response->internal = new stdClass();
        $CI->response->links = array();
        $CI->response->sort = '';
        $CI->response->current = 'y';
        $CI->response->groupby = '';
        
        
        
        
        # get our collection - usually devices, groups, reports, etc
        $temp = $CI->uri->segment(1);
        if (isset($temp) and $temp != '') {
            $CI->response->collection = (string)$temp;
            $CI->response->heading = ucfirst($CI->response->collection);
        }
        unset($temp);

        # get debug
        if (!empty($CI->input->get('debug'))) {
            $CI->response->debug = $CI->input->get('debug');
        }
        if (!empty($CI->input->post('debug'))) {
            $CI->response->debug = $CI->input->post('debug');
        }
        if (strtolower($CI->response->debug) == 'true') {
            $CI->response->debug = true;
        } else {
            $CI->response->debug = false;
        }

        # get the id of the collection item in question
        $collection_words = ' create edit update delete list execute debug ';

        # if we have an integer
        if (!empty($CI->uri->segment(2)) and is_numeric($CI->uri->segment(2))) {
            $CI->response->id = intval($CI->uri->segment(2));
        }

        # if we have a reserved word
        if (!empty($CI->uri->segment(2)) and !is_numeric($CI->uri->segment(2)) and stripos($collection_words, ' '.$CI->uri->segment(2).' ') !== false) {
            $CI->response->action = $CI->uri->segment(2);
        }
        
        # if we have an item name (ie, not it's ID)
        if (empty($CI->response->id) and $CI->uri->segment(2) != '' and stripos($collection_words, ' '.$CI->uri->segment(2).' ') === false) {
            // TODO - SEPARATE THIS OUT
            switch ($CI->response->collection) {
            case 'devices':
                $sql = "SELECT system.id AS id FROM system WHERE name LIKE ? ORDER BY system.id DESC LIMIT 1";
                $table = 'system';
                break;
            case 'groups':
                $sql = "SELECT group_id AS id FROM oa_group WHERE group_name LIKE ? LIMIT 1";
                $table = 'oa_group';
                break;
            case 'orgs':
                $sql = "SELECT id FROM oa_org WHERE name LIKE ? LIMIT 1";
                $table = 'oa_org';
                break;
            case 'users':
                $sql = "SELECT id AS id FROM oa_user WHERE name LIKE ? LIMIT 1";
                $table = 'oa_user';
                break;
            case 'reports':
                $sql = "SELECT report_id AS id FROM oa_report WHERE report_name LIKE ? LIMIT 1";
                $table = 'oa_report';
                break;
            case 'scripts':
                $sql = "SELECT id AS id FROM scripts WHERE name LIKE ? LIMIT 1";
                $table = 'scripts';
                break;
            case 'charts':
                $sql = '';
                $CI->response->id = 1;
                $CI->response->sub_resource = $CI->uri->segment(2);
                break;
            }
            if ($sql != '') {
                $data = array($CI->uri->segment(2));
                $query = $CI->db->query($sql, $data);
                $result = $query->result();
                if (count($result) > 0) {
                    $CI->response->id = intval($result[0]->id);
                } else {
                    // should throw an error as we were given a name, but nothing matched
                    $CI->response->id = 0;
                }
            }
        }
        unset($collection_words);

        # get the sub_resource
        $CI->response->sub_resource = (string)$CI->uri->segment(3, '');
        if (!empty($CI->input->get('sub_resource'))) {
            $CI->response->sub_resource = $CI->input->get('sub_resource');
        }
        if (!empty($CI->input->post('sub_resource'))) {
            $CI->response->sub_resource = $CI->input->post('sub_resource');
        }
        $CI->response->sub_resource = str_replace(array(',', '.', '\'', '"', '(', ')'), '', $CI->response->sub_resource);


        # get the sub_resource id
        $CI->response->sub_resource_id = $CI->uri->segment(4, '');
        if (!empty($CI->input->get('sub_resource_id'))) {
            $CI->response->sub_resource_id = $CI->input->get('sub_resource');
        }
        if (!empty($CI->input->post('sub_resource_id'))) {
            $CI->response->sub_resource_id = $CI->input->post('sub_resource_id');
        }
        $CI->response->sub_resource_id = intval($CI->response->sub_resource_id);

        # put any POST data into the object
        if (strtolower($CI->input->server('REQUEST_METHOD')) == 'post') {
            if (is_array($CI->input->post('data'))) {
                $CI->response->post_data = $CI->input->post('data');
            } else {
                $CI->response->post_data = json_decode($CI->input->post('data'));
            }
        }
        if (isset($CI->response->post_data->id)) {
            $CI->response->id = intval($CI->response->post_data->id);
        }

        # get the action
        # valid values are typically - create, read, update, delete, list, execute
        # TODO - request_method == post and body contains system_id, then update, not create
        $action_words = ' collection read new edit execute create update delete debug create_form update_form bulk_update_form import import_form ';
        $action = '';
        if (stripos($action_words, ' '.$CI->response->action. ' ') !== false) {
            $action = $CI->response->action;
        }

        if (!empty($CI->input->get('action'))) {
            $action = $CI->input->get('action');
        }
        if (!empty($CI->input->post('action'))) {
            $action = $CI->input->post('action');
        }

        $CI->response->header = 'HTTP/1.1 200 OK';
        if (strtolower($CI->input->server('REQUEST_METHOD')) == 'get' and $CI->response->id == '' and ($action == '' or $action == 'list')) {
            // return a list of items
            $CI->response->action = 'collection';
        }
        if (strtolower($CI->input->server('REQUEST_METHOD')) == 'get' and $CI->response->id == '' and $action == 'create') {
            // show a HTML form for entering a new item
            $CI->response->action = 'create_form';
        }
        if (strtolower($CI->input->server('REQUEST_METHOD')) == 'get' and $CI->response->id == '' and $action == 'import') {
            // show a HTML form for entering a new item
            $CI->response->action = 'import_form';
        }
        if (strtolower($CI->input->server('REQUEST_METHOD')) == 'get' and $CI->response->id != '' and $action == '') {
            // return a single item
            $CI->response->action = 'read';
            $CI->response->id = intval($CI->response->id);
        }
        if (strtolower($CI->input->server('REQUEST_METHOD')) == 'get' and $CI->response->id != '' and $action == 'edit') {
            // show a HTML form for editing an existing item
            $CI->response->action = 'update_form';
        }
        if (strtolower($CI->input->server('REQUEST_METHOD')) == 'get' and $CI->response->id != '' and $action == 'execute') {
            // mainly used for running a report and displaying the output
            $CI->response->action = 'execute';
        }
        if (strtolower($CI->input->server('REQUEST_METHOD')) == 'post' and $CI->response->id == '' and $action == '') {
            // insert an item
            $CI->response->action = 'create';
            $CI->response->header = 'HTTP/1.1 201 Created';
        }
        if (strtolower($CI->input->server('REQUEST_METHOD')) == 'post' and $CI->response->id == '' and $action == 'import') {
            // insert an item
            $CI->response->action = 'import';
            $CI->response->header = 'HTTP/1.1 201 Created';
        }
        if (strtolower($CI->input->server('REQUEST_METHOD')) == 'post' and $CI->response->id == '' and $action == 'edit') {
            // show a HTML form for bulk editing items
            $CI->response->action = 'bulk_update_form';
        }
        if ((strtolower($CI->input->server('REQUEST_METHOD')) == 'post' or 
            strtolower($CI->input->server('REQUEST_METHOD')) == 'put' or
            strtolower($CI->input->server('REQUEST_METHOD')) == 'patch') and $CI->response->id != '' and $action == '') {
            // update an item
            $CI->response->action = 'update';
            $CI->response->header = 'HTTP/1.1 200 OK';
            $CI->response->id = intval($CI->response->id);
        }
        if (strtolower($CI->input->server('REQUEST_METHOD')) == 'delete' and $CI->response->id != '') {
            // delete an item
            $CI->response->action = 'delete';
            $CI->response->header = 'HTTP/1.1 200 OK';
            $CI->response->id = intval($CI->response->id);
        }
        if ($CI->response->action == '' or $CI->response->action == 'list') {
            $CI->response->action = 'collection';
        }
        if (stripos($action_words, ' '.$CI->response->action.' ') === false) {
            $CI->response->action = 'collection';
        }

        # get the sort
        $CI->response->sort = $CI->input->get('sort');
        if (!empty($CI->input->post('sort'))) {
            $CI->response->sort = $CI->input->post('sort');
        }
        $CI->response->sort = str_replace('+', '', $CI->response->sort);
        if ($CI->response->sort != '') {
            $temp = explode(',', $CI->response->sort);
            foreach ($temp as &$item) {
                if (substr($item, 0, 1) == '-') {
                    $item = substr($item, 1) . ' DESC';
                }
            }
            $CI->response->sort = implode(',', $temp);
        }
        if ($CI->response->sort != '') {
            $CI->response->internal->sort = 'ORDER BY ' . implode(',', $temp);
        } else {
            $CI->response->internal->sort = '';
        }

        # get current
        $CI->response->current = $CI->input->get('current');
        if (!empty($CI->input->post('current'))) {
            $CI->response->current = $CI->input->post('current');
        }
        $current_words = ' y n all delta ';
        if (stripos($current_words, ' '.$CI->response->current.' ') === false) {
            $CI->response->current = 'y';
        }
        unset($current_words);

        # get the group by
        if (!empty($_GET['groupby'])) {
            $CI->response->groupby = $_GET['groupby'];
        }
        if (!empty($_POST['groupby'])) {
            $CI->response->groupby = $_POST['groupby'];
        }
        if (!empty($CI->response->groupby)) {
            $CI->response->internal->groupby = 'GROUP BY ' . $CI->response->groupby;
        } else {
            $CI->response->internal->groupby = '';
        }

        # get the output format
        $CI->response->format = '';
        if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
            $CI->response->format = 'json';
        }
        if (strpos($_SERVER['HTTP_ACCEPT'], 'html') !== false) {
            $CI->response->format = 'screen';
        }
        if (isset($_GET['format'])) {
            $CI->response->format = $_GET['format'];
        }
        if (isset($_POST['format'])) {
            $CI->response->format = $_POST['format'];
        }
        if ($CI->response->format == '') {
            $CI->response->format = 'json';
        }
        $reserved_words = ' json json_data screen xml ';
        if (stripos($reserved_words, ' '.$CI->response->format.' ') === false) {
            $CI->response->format = 'json';
        }

        # get the limit
        if ($CI->response->format == 'json') {
            $CI->response->limit = '';
        } else {
            $CI->response->limit = 1000;
        }
        if (isset($_GET['limit'])) {
            $CI->response->limit = intval($_GET['limit']);
        }
        if (isset($_POST['limit'])) {
            $CI->response->limit = intval($_POST['limit']);
        }

        # get the offset
        $CI->response->offset = 0;
        if (isset($_GET['offset'])) {
            $CI->response->offset = intval($_GET['offset']);
        }
        if (isset($_POST['offset'])) {
            $CI->response->offset = intval($_POST['offset']);
        }

        if ($CI->response->limit != '') {
            $CI->response->internal->limit = 'LIMIT ' . $CI->response->offset . ',' . $CI->response->limit;
        } else {
            $CI->response->internal->limit = '';
        }

        # get the list of requested properties
        $CI->response->properties = '';
        if (isset($_GET['properties'])) {
            $CI->response->properties = $_GET['properties'];
        }
        if (isset($_POST['properties'])) {
            $CI->response->properties = $_POST['properties'];
        }
        if ($CI->response->properties == '') {
            # set some defaults
            if ($CI->response->action == 'collection' and $CI->response->collection == 'devices') { 
                # we're requesting a list of devices without properties - set the below as defaults
                if ($CI->response->sub_resource == '' or strtolower($CI->response->sub_resource) == 'system') {
                    $CI->response->properties = 'system.id, system.icon, system.type, system.name, system.domain, system.ip, system.description, system.os_family, system.status';
                } else {
                    # we're requesting a subresource - return all the subresource's properties
                    $CI->response->properties = $CI->response->sub_resource . '.*';
                }
            } else {
                # we're requesting something that isn't a device (or a list of devices) - return everything
                $CI->response->properties = '*';
            }
        }
        # perform some simple data cleansing
        $CI->response->properties = str_replace(array('\'', '"', '(', ')'), '', $CI->response->properties);

        $CI->response->internal->properties = '';
        // create our internal properties list - this is what gets executed in SQL
        if ($CI->response->properties != '*' and $CI->response->properties != $CI->response->sub_resource . '.*') {
            $temp = explode(',', $CI->response->properties);
            foreach ($temp as $property) {
                if ($property == 'count') {
                    $CI->response->internal->properties .= 'count(*) as `count`,';
                } elseif ($property == 'system_id') {
                    $CI->response->internal->properties .= 'system.id as `system_id`,';
                } else {
                    $CI->response->internal->properties .= $property . ' AS `' . trim($property) . '`,';
                }
            }
            $CI->response->internal->properties = substr($CI->response->internal->properties, 0, -1);
        } else {
            $CI->response->internal->properties = $CI->response->properties;
        }

        # get the filter
        $filter = array();
        $CI->response->filter = array();
        $CI->response->query_string = urldecode($_SERVER['QUERY_STRING']);
        if ($CI->response->query_string != '') {
            $reserved_words = ' properties limit sub_resource sub_resource_id action sort current offset format debug groupby ';
            foreach (explode('&', urldecode($_SERVER['QUERY_STRING'])) as $item) {
                $query = new stdClass();
                $query->name = substr($item, 0, strpos($item, '='));
                $query->operator = '=';
                $query->value = str_replace($query->name.'=', '', $item);
                $operator = substr($query->value, 0, 1);
                if ($operator == '=' or $operator == '>' or $operator == '<') {
                    $query->value = substr($query->value, 1);
                    $query->operator = $operator;
                }
                $operator = substr($query->value, 0, 2);
                if ($operator == '!=' or $operator == '>=' or $operator == '<=') {
                    $query->value = substr($query->value, 2);
                    $query->operator = $operator;
                }
                $operator = substr($query->value, 0, 4);
                if (strtolower($operator) == 'like') {
                    $query->value = '%' . substr($query->value, 4) . '%';
                    $query->operator = $operator;
                }
                $operator = substr($query->value, 0, 5);
                if (strtolower($operator) == '!like') {
                    $query->value = '%' . substr($query->value, 5) . '%';
                    $query->operator = 'not like';
                }
                $query->name = str_replace(array(',', '\'', '"', '(', ')'), '', $query->name);
                if ($query->value == false) {
                    $query->value = '';
                }

                if (strpos($reserved_words, ' '.$query->name.' ') === false and $query->name != '') {
                    $CI->response->filter [] = $query;
                }
                unset($query);
            }
        }

        $CI->response->links = new stdClass();
        $CI->response->links->first = NULL;
        $CI->response->links->last = NULL;
        $CI->response->links->next = NULL;
        $CI->response->links->prev = NULL;

        $CI->response->errors = array();

        # get the version
        if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json;version=') !== false) {
            $CI->response->version = intval(str_replace('application/json;version=', '', $_SERVER['HTTP_ACCEPT']));
        }
        if (empty($CI->response->version)) {
            if ($CI->response->format == 'json') {
                $CI->response->version = 1;
            } else {
                $CI->response->version = 0;
            }
        }
        return;
    }
}

/* End of file input_helper.php */
/* Location: ./system/application/helpers/input_helper.php */
