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
 * @version 1.12.8
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (! function_exists('inputRead')) {
    /**
     * The standard input function for Open-AudIT.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @return NULL [creates and updates the $this->response object]
     */
    function inputRead()
    {
        // Our default values are below
        // resource is the controller name (devices, groups, et al)
        // id is the integer value (if any) following the controller name in the URL
        // sub_resource = blank
        // sub_resource_id = blank
        // action = read if id is set or list if id is not set (create, read, update, delete, list, execute, download)
        // sort = blank
        // current = y
        // groupby = blank
        // limit = 1000
        // offset = 0
        // format = json
        // properties = *
        // filter = blank
        // version = 1 if JSON requested (the original), 0 if not JSON requested (the latest available)

        // Can set individual items using parameters /devices/1 == /devices?id=1 ???

        // set up our logging object
        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';
        $log->message = '';

        error_reporting(E_ALL);
        $CI = & get_instance();
        if (empty($CI->response)) {
            $CI->response = new stdClass();
        }

        # enable the $_GET global
        parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);

        # /collection/{id}/{sub_resource}

        # initialise our properties
        $CI->response->meta = new stdClass();
        $CI->response->meta->action = '';
        $CI->response->meta->baseurl = $CI->config->config['base_url'];
        $CI->response->meta->collection = '';
        $CI->response->meta->current = 'y';
        $CI->response->meta->debug = false;
        $CI->response->meta->filtered = '';
        $CI->response->meta->format = '';
        $CI->response->meta->groupby = '';
        $CI->response->meta->header = 'HTTP/1.1 200 OK';
        $CI->response->meta->id = NULL;
        $CI->response->meta->ids = 0;
        $CI->response->meta->include = '';
        $CI->response->meta->limit = '';
        $CI->response->meta->offset = 0;
        $CI->response->meta->properties = '';
        $CI->response->meta->query_string = '';
        $REQUEST_METHOD = strtoupper($CI->input->server('REQUEST_METHOD'));
        $CI->response->meta->request_method = $REQUEST_METHOD;
        $CI->response->meta->sort = '';
        $CI->response->meta->sub_resource = '';
        $CI->response->meta->sub_resource_id = 0;
        $CI->response->meta->total = 0;
        $CI->response->meta->version = 1;
        $CI->response->meta->filter = array();
        $CI->response->meta->internal = new stdClass();
        $CI->response->meta->received_data = array();
        $CI->response->links = array();
        $CI->response->included = array();

        $actions = ' bulk_update_form collection create create_form debug delete download import import_form read sub_resource_create sub_resource_create_form sub_resource_delete update update_form ';
        $action = '';

        $collections = ' charts connections credentials devices fields files locations networks nmis orgs scripts ';
        $collection = '';

        # Allow for URLs thus:
        # /api/{version}/
        # /v1/
        # /v2/
        # as well as /devices or
        # version={version} in the accept header
        # get the version
        if ($CI->uri->segments[1] == 'api' or $CI->uri->segments[1] == 'v1' or $CI->uri->segments[1] == 'v2') {
            if ($CI->uri->segments[1] == 'api') {
                $CI->response->meta->version = intval($CI->uri->segment(2));
                unset ($CI->uri->segments[1]);
                unset ($CI->uri->segments[2]);
                $log->message = 'Set version to ' . intval($CI->uri->segment(2)) . ', according to URI segment.';
                stdlog($log);
            } else if ($CI->uri->segments[1] == 'v1') {
                $CI->response->meta->version = 1;
                $log->message = 'Set version to v1, according to URI segment.';
                stdlog($log);
                unset ($CI->uri->segments[1]);
            } else if ($CI->uri->segments[1] == 'v2') {
                $CI->response->meta->version = 2;
                $log->message = 'Set version to v2, according to URI segment.';
                stdlog($log);
                unset ($CI->uri->segments[1]);
            }
            array_unshift($CI->uri->segments, '');
            $CI->uri->segments = array_values($CI->uri->segments);
        } else if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json;version=') !== false) {
            $CI->response->meta->version = intval(str_replace('application/json;version=', '', $_SERVER['HTTP_ACCEPT']));
            $log->message = 'Set version to ' . $CI->response->meta->version . ', according to headers.';
            stdlog($log);
        }
        
        # get our collection - usually devices, groups, reports, etc
        $temp = $CI->uri->segment(1);
        if (isset($temp) and $temp != '' and stripos($collections, ' '.$temp. ' ') !== false) {
            $CI->response->meta->collection = (string)$temp;
            $CI->response->meta->heading = ucfirst($CI->response->meta->collection);
            $log->message = 'Set collection to ' . $CI->response->meta->collection . ', according to URI.';
            stdlog($log);
        }
        unset($temp);

        # get debug
        if ($CI->input->get('debug')) {
            $CI->response->meta->debug = $CI->input->get('debug');
            $log->message = 'Set debug to ' . $CI->response->meta->debug . ', according to URI.';
            stdlog($log);
        }
        if ($CI->input->post('debug')) {
            $CI->response->meta->debug = $CI->input->post('debug');
            $log->message = 'Set debug to ' . $CI->response->meta->debug . ', according to POST.';
            stdlog($log);
        }
        if (strtolower($CI->response->meta->debug) == 'true') {
            $CI->response->meta->debug = true;
        } else {
            $CI->response->meta->debug = false;
        }

        # get the id of the collection item in question
        # if we have an integer
        if ($CI->uri->segment(2) != '' and is_numeric($CI->uri->segment(2))) {
            $CI->response->meta->id = intval($CI->uri->segment(2));
            $log->message = 'Set ID to ' . $CI->response->meta->id . ', according to URI.';
            stdlog($log);
        }

        # if we have a reserved word
        if ($CI->uri->segment(2) and stripos($actions, ' '.$CI->uri->segment(2).' ') !== false) {
            $CI->response->meta->action = $CI->uri->segment(2);
            $action = $CI->uri->segment(2);
            $log->message = 'Set action to ' . $CI->response->meta->action . ', according to URI.';
            stdlog($log);
        }
        if ($CI->uri->segment(3) and stripos($actions, ' '.$CI->uri->segment(3).' ') !== false) {
            $CI->response->meta->action = $CI->uri->segment(3);
            $action = $CI->uri->segment(3);
            $log->message = 'Set action to ' . $CI->response->meta->action . ', according to URI.';
            stdlog($log);
        }
        
        # if we have an item name (ie, not it's ID)
        if (is_null($CI->response->meta->id) and $CI->uri->segment(2) != '' and stripos($actions, ' '.$CI->uri->segment(2).' ') === false) {
            $log->message = 'Searching for ID, using ' . $CI->uri->segment(2) . ' on the ' . $CI->response->meta->collection . ' collection.';
            stdlog($log);
            $sql = '';
            switch ($CI->response->meta->collection) {
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
                $CI->response->meta->id = 1;
                $CI->response->meta->sub_resource = $CI->uri->segment(2);
                break;
            }
            if ($sql != '') {
                $data = array($CI->uri->segment(2));
                $query = $CI->db->query($sql, $data);
                $result = $query->result();
                if (count($result) > 0) {
                    $CI->response->meta->id = intval($result[0]->id);
                    $log->message = 'Set id to ' . $CI->response->meta->id . ', after searching.';
                    stdlog($log);
                } else {
                    // should throw an error as we were given a name, but nothing matched
                    $CI->response->meta->id = 888888888888;
                    $log->message = 'Set id to NULL, after searching - no match found.';
                    stdlog($log);
                }
            }
        }

        # get the include
        if ($CI->input->get('include')) {
            $CI->response->meta->include = $CI->input->get('include');
            $log->message = 'Set include to ' . $CI->response->meta->include . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('include')) {
            $CI->response->meta->include = $CI->input->post('include');
            $log->message = 'Set include to ' . $CI->response->meta->include . ', according to POST.';
            stdlog($log);
        }

        # get the sub_resource
        if (empty($CI->response->meta->sub_resource)) {
            $temp = @(string)$CI->uri->segment(3, '');
            if (stripos($actions, ' '.$temp. ' ') === false and $temp != '') {
                $CI->response->meta->sub_resource = $temp;
                $log->message = 'Set sub_resource to ' . $CI->response->meta->sub_resource . ', according to URI.';
                stdlog($log);
            }
        }
        if ($CI->input->get('sub_resource')) {
            $CI->response->meta->sub_resource = $CI->input->get('sub_resource');
            $log->message = 'Set sub_resource to ' . $CI->response->meta->sub_resource . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('sub_resource')) {
            $CI->response->meta->sub_resource = $CI->input->post('sub_resource');
            $log->message = 'Set sub_resource to ' . $CI->response->meta->sub_resource . ', according to POST.';
            stdlog($log);
        }
        $CI->response->meta->sub_resource = str_replace(array(',', '.', '\'', '"', '(', ')'), '', $CI->response->meta->sub_resource);

        # get the sub_resource id
        #$CI->response->meta->sub_resource_id = $CI->uri->segment(4, '');
        if (empty($CI->response->meta->sub_resource_id)) {
            if (!empty($CI->response->meta->sub_resource)) {
                $CI->response->meta->sub_resource_id = (string)$CI->uri->segment(4, '');
                $log->message = 'Set sub_resource_id to ' . $CI->response->meta->sub_resource_id . ', according to URI.';
                stdlog($log);
            }
        }
        if ($CI->input->get('sub_resource_id')) {
            $CI->response->meta->sub_resource_id = $CI->input->get('sub_resource_id');
            $log->message = 'Set sub_resource_id to ' . $CI->response->meta->sub_resource_id . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('sub_resource_id')) {
            $CI->response->meta->sub_resource_id = $CI->input->post('sub_resource_id');
            $log->message = 'Set sub_resource_id to ' . $CI->response->meta->sub_resource_id . ', according to POST.';
            stdlog($log);
        }
        $CI->response->meta->sub_resource_id = intval($CI->response->meta->sub_resource_id);

        # TODO - fit this somewhere nicer. Need to account for multiple id's being sent
        if (!empty($_GET['ids'])) {
            $CI->response->meta->ids = $_GET['ids'];
            unset($_GET['ids']);
        }

        # put any POST data into the object
        if ($REQUEST_METHOD == 'POST') {
            if (is_array($CI->input->post('data'))) {
                $CI->response->meta->received_data = $CI->input->post('data');
                $CI->response->meta->received_data = json_encode($CI->response->meta->received_data);
                $CI->response->meta->received_data = json_decode($CI->response->meta->received_data);
            } else {
                $CI->response->meta->received_data = json_decode($CI->input->post('data'));
            }
        }
        if ($REQUEST_METHOD == 'PATCH') {
            $data = json_decode(urldecode(str_replace('data=', '', file_get_contents('php://input'))));
            $CI->response->meta->received_data = $data->data;
            unset($data);
        }
        if (isset($CI->response->meta->received_data->id)) {
            $CI->response->meta->id = intval($CI->response->meta->received_data->id);
        }

        # get the action
        # valid values are typically - create, read, update, delete, list, execute
        # TODO - request_method == post and body contains system.id, then update, not create
        if ($CI->input->get('action')) {
            $action = $CI->input->get('action');
            $log->message = 'Set action to ' . $action . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('action')) {
            $action = $CI->input->post('action');
            $log->message = 'Set action to ' . $action . ', according to POST.';
            stdlog($log);
        }


        if ($REQUEST_METHOD == 'GET' and is_null($CI->response->meta->id) and $action == '') {
            // return a list of items
            $CI->response->meta->action = 'collection';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because GET, no id, no action.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and is_null($CI->response->meta->id) and $action == 'create') {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'create_form';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because GET, no id and action = create.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and $action == 'create' and $CI->response->meta->sub_resource != '') {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'sub_resource_create_form';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because GET, sub_resource and action = create.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and is_null($CI->response->meta->id) and $action == 'import') {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'import_form';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because GET, no id and action = import.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and !is_null($CI->response->meta->id) and $action == '') {
            // return a single item
            $CI->response->meta->action = 'read';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because GET, id and no action.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and !is_null($CI->response->meta->id) and $action == 'update' and empty($CI->response->meta->ids)) {
            // show a HTML form for updating an existing item
            $CI->response->meta->action = 'update_form';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because GET, id and action = ' . $action . '.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and is_null($CI->response->meta->id)  and $action == 'update' and !empty($CI->response->meta->ids)) {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'bulk_update_form';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because GET, ids, no id and action = update.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and !is_null($CI->response->meta->id) and $action == 'download') {
            // mainly used for running a report and displaying the output
            $CI->response->meta->action = 'download';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because GET, id and action = download.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'POST' and is_null($CI->response->meta->id) and $action == '' and $CI->response->meta->received_data != '') {
            // insert an item
            $CI->response->meta->action = 'create';
            $CI->response->meta->header = 'HTTP/1.1 201 Created';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because POST, data, no id and no action.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'POST' and is_null($CI->response->meta->id) and $action == '' and $CI->response->meta->received_data == '') {
            // insert an item
            $CI->response->meta->action = 'collection';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because POST, no id, no data and no action.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'POST' and is_null($CI->response->meta->id) and $action == 'import') {
            // insert an item
            $CI->response->meta->action = 'import';
            $CI->response->meta->header = 'HTTP/1.1 201 Created';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because POST, no id and action = import.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'POST' and is_null($CI->response->meta->id) and $action == 'update' and !empty($CI->response->meta->ids)) {
            $CI->response->meta->action = 'update';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because POST, ids, no id and action = update.';
            stdlog($log);
        }
        if (($REQUEST_METHOD == 'POST' or $REQUEST_METHOD == 'PUT' or$REQUEST_METHOD == 'PATCH') and !is_null($CI->response->meta->id) and $action == '') {
            // update an item
            $CI->response->meta->action = 'update';
            $CI->response->meta->header = 'HTTP/1.1 200 OK';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because POST/PATCH/PUT, id and no action.';
            stdlog($log);
        }

        if ($REQUEST_METHOD == 'PATCH' and !empty($CI->response->meta->ids)) {
            // update several items
            $CI->response->meta->action = 'update';
            $CI->response->meta->header = 'HTTP/1.1 200 OK';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because PATCH, ids and no id.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'POST' and (!is_null($CI->response->meta->id) or $CI->response->meta->ids != '') and $CI->response->meta->sub_resource != '') {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'sub_resource_create';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because POST, id, sub_resource.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'DELETE' and !is_null($CI->response->meta->id) and $CI->response->meta->sub_resource == '') {
            // delete an item
            $CI->response->meta->action = 'delete';
            $CI->response->meta->header = 'HTTP/1.1 200 OK';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because DELETE, id.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'DELETE' and !is_null($CI->response->meta->id) and $CI->response->meta->sub_resource != '' and $CI->response->meta->sub_resource_id != '') {
            // delete an item
            $CI->response->meta->action = 'sub_resource_delete';
            $CI->response->meta->header = 'HTTP/1.1 200 OK';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because DELETE, id, sub_resource, sub_resource_id.';
            stdlog($log);
        }
        if ($CI->response->meta->action == '') {
            $CI->response->meta->action = 'collection';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', no action.';
            stdlog($log);
        }
        if (stripos($actions, ' '.$CI->response->meta->action.' ') === false) {
            $CI->response->meta->action = 'collection';
            $log->message = 'Set action to ' . $CI->response->meta->action . ', because not in reserved words.';
            stdlog($log);
        }

        # get the sort
        $CI->response->meta->sort = $CI->input->get('sort');
        if ($CI->input->post('sort')) {
            $CI->response->meta->sort = $CI->input->post('sort');
            $log->message = 'Set sort to ' . $CI->response->meta->sort . ', according to POST.';
            stdlog($log);
        }
        $CI->response->meta->sort = str_replace('+', '', $CI->response->meta->sort);
        if ($CI->response->meta->sort != '') {
            $temp = explode(',', $CI->response->meta->sort);
            foreach ($temp as &$item) {
                if (substr($item, 0, 1) == '-') {
                    $item = substr($item, 1) . ' DESC';
                }
            }
            $CI->response->meta->sort = implode(',', $temp);
        }
        if ($CI->response->meta->sort != '') {
            $CI->response->meta->internal->sort = 'ORDER BY ' . implode(',', $temp);
        } else {
            $CI->response->meta->internal->sort = '';
        }

        # get current
        $CI->response->meta->current = $CI->input->get('current');
        if ($CI->input->post('current')) {
            $CI->response->meta->current = $CI->input->post('current');
            $log->message = 'Set current to ' . $CI->response->meta->current . ', according to POST.';
            stdlog($log);
        }
        $current_words = ' y n all delta ';
        if (stripos($current_words, ' '.$CI->response->meta->current.' ') === false) {
            $CI->response->meta->current = 'y';
            $log->message = 'Set current to ' . $CI->response->meta->current . ', because in reserved words.';
            stdlog($log);
        }
        unset($current_words);

        # get the group by
        if ($CI->input->get('groupby')) {
            $CI->response->meta->groupby = $_GET['groupby'];
            $log->message = 'Set groupby to ' . $CI->response->meta->groupby . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('groupby')) {
            $CI->response->meta->groupby = $_POST['groupby'];
            $log->message = 'Set groupby to ' . $CI->response->meta->groupby . ', according to POST.';
            stdlog($log);
        }
        if ($CI->response->meta->groupby) {
            $CI->response->meta->internal->groupby = 'GROUP BY ' . $CI->response->meta->groupby;
        } else {
            $CI->response->meta->internal->groupby = '';
        }

        # get the output format
        $CI->response->meta->format = '';
        if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
            $CI->response->meta->format = 'json';
            $log->message = 'Set format to ' . $CI->response->meta->format . ', according to HEADERS.';
            stdlog($log);
        }
        if (strpos($_SERVER['HTTP_ACCEPT'], 'html') !== false) {
            $CI->response->meta->format = 'screen';
            $log->message = 'Set format to ' . $CI->response->meta->format . ', according to HEADERS.';
            stdlog($log);
        }
        if (isset($_GET['format'])) {
            $CI->response->meta->format = $_GET['format'];
            $log->message = 'Set format to ' . $CI->response->meta->format . ', according to GET.';
            stdlog($log);
        }
        if (isset($_POST['format'])) {
            $CI->response->meta->format = $_POST['format'];
            $log->message = 'Set format to ' . $CI->response->meta->format . ', according to POST.';
            stdlog($log);
        }
        if ($CI->response->meta->format == '') {
            $CI->response->meta->format = 'json';
            $log->message = 'Set format to ' . $CI->response->meta->format . ', because default.';
            stdlog($log);
        }
        $reserved_words = ' json json_data screen xml ';
        if (stripos($reserved_words, ' '.$CI->response->meta->format.' ') === false) {
            $CI->response->meta->format = 'json';
        }

        # get the limit
        if ($CI->response->meta->format == 'json') {
            $CI->response->meta->limit = '';
            $log->message = 'Set limit to ' . $CI->response->meta->limit . ', because json.';
            stdlog($log);
        } else {
            $CI->response->meta->limit = 1000;
            $log->message = 'Set limit to ' . $CI->response->meta->limit . ', because for non-json.';
            stdlog($log);
        }
        if (isset($_GET['limit'])) {
            $CI->response->meta->limit = intval($_GET['limit']);
            $log->message = 'Set limit to ' . $CI->response->meta->limit . ', according to GET.';
            stdlog($log);
        }
        if (isset($_POST['limit'])) {
            $CI->response->meta->limit = intval($_POST['limit']);
            $log->message = 'Set limit to ' . $CI->response->meta->limit . ', according to POST.';
            stdlog($log);
        }

        # get the offset
        if (isset($_GET['offset'])) {
            $CI->response->meta->offset = intval($_GET['offset']);
            $log->message = 'Set offset to ' . $CI->response->meta->offset . ', according to GET.';
            stdlog($log);
        }
        if (isset($_POST['offset'])) {
            $CI->response->meta->offset = intval($_POST['offset']);
            $log->message = 'Set offset to ' . $CI->response->meta->offset . ', according to POST.';
            stdlog($log);
        }

        if ($CI->response->meta->limit != '') {
            $CI->response->meta->internal->limit = 'LIMIT ' . $CI->response->meta->offset . ',' . $CI->response->meta->limit;
        } else {
            $CI->response->meta->internal->limit = '';
        }

        # get the list of requested properties (usually) properties=id,name,status
        if (isset($_GET['properties'])) {
            $CI->response->meta->properties = $_GET['properties'];
            $log->message = 'Set properties to ' . $CI->response->meta->properties . ', according to GET.';
            stdlog($log);
        }
        if (isset($_POST['properties'])) {
            $CI->response->meta->properties = $_POST['properties'];
            $log->message = 'Set properties to ' . $CI->response->meta->properties . ', according to POST.';
            stdlog($log);
        }

        # Allow for format of properties=["id", "name", "status"]
        if (json_decode($CI->response->meta->properties)) {
            $temp = json_decode($CI->response->meta->properties);
            unset($CI->response->meta->properties);
            $CI->response->meta->properties = '';
            foreach ($temp as $property) {
                $CI->response->meta->properties .= $property . ',';
            }
            $CI->response->meta->properties = substr($CI->response->meta->properties, 0, -1);
            $log->message = 'Set properties to ' . $CI->response->meta->properties . ', secondary format.';
            stdlog($log);
        }

        if ($CI->response->meta->properties == '') {
            # set some defaults
            if ($CI->response->meta->action == 'collection' and $CI->response->meta->collection == 'devices') { 
                # we're requesting a list of devices without properties - set the below as defaults
                if ($CI->response->meta->sub_resource == '' or strtolower($CI->response->meta->sub_resource) == 'system') {
                    $CI->response->meta->properties = 'system.id, system.icon, system.type, system.name, system.domain, system.ip, system.description, system.os_family, system.status';
                    $log->message = 'Set properties to ' . $CI->response->meta->properties . ', because devices default.';
                    stdlog($log);
                } else {
                    # we're requesting a subresource - return all the subresource's properties
                    $CI->response->meta->properties = $CI->response->meta->sub_resource . '.*';
                    $log->message = 'Set properties to ' . $CI->response->meta->properties . ', because devices sub_resource default.';
                    stdlog($log);
                }
            } else {
                # we're requesting something that isn't a device (or a list of devices) - return everything
                $CI->response->meta->properties = '*';
                $log->message = 'Set properties to ' . $CI->response->meta->properties . ', because non-devices default.';
                stdlog($log);
            }
        }

        # perform some simple data cleansing
        $CI->response->meta->properties = str_replace(array('\'', '"', '(', ')'), '', $CI->response->meta->properties);

        $CI->response->meta->internal->properties = '';
        // create our internal properties list - this is what gets executed in SQL
        if ($CI->response->meta->properties != '*' and $CI->response->meta->properties != $CI->response->meta->sub_resource . '.*') {
            $temp = explode(',', $CI->response->meta->properties);
            foreach ($temp as $property) {
                if ($property == 'count') {
                    $CI->response->meta->internal->properties .= 'count(*) as `count`,';
                } elseif ($property == 'system_id') {
                    $CI->response->meta->internal->properties .= 'system.id as `system_id`,';
                } else {
                    $CI->response->meta->internal->properties .= $property . ' AS `' . trim($property) . '`,';
                }
            }
            $CI->response->meta->internal->properties = substr($CI->response->meta->internal->properties, 0, -1);
        } else {
            $CI->response->meta->internal->properties = $CI->response->meta->properties;
        }

        # get the filter
        $filter = array();
        $CI->response->meta->query_string = urldecode($_SERVER['QUERY_STRING']);
        if ($CI->response->meta->query_string != '') {
            $reserved_words = ' properties limit sub_resource sub_resource_id action sort current offset format debug groupby query include ids ';
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
                if (strtolower(substr($query->value, 0, 5)) == '!like') {
                    $query->value = '%' . substr($query->value, 5) . '%';
                    $query->operator = 'not like';
                }
                if (strtolower(substr($query->value, 0, 8)) == 'not like') {
                    $query->value = '%' . substr($query->value, 8) . '%';
                    $query->operator = 'not like';
                }
                $query->name = str_replace(array(',', '\'', '"', '(', ')'), '', $query->name);
                if ($query->value == false) {
                    $query->value = '';
                }

                if (strpos($reserved_words, ' '.$query->name.' ') === false and $query->name != '') {
                    $CI->response->meta->filter [] = $query;
                }
                unset($query);
            }
        }

        if ($query = json_decode($CI->input->get('query'))) {
            unset ($CI->response->meta->filter);
            $CI->response->meta->filter = array();
            while (count($query) > 0) {
                $filter = new stdClass();
                $filter->name = array_shift($query);
                $operator = array_shift($query);
                if (stripos(' = != > >= < <= not like ', ' '.$operator.' ') !== false) {
                    $filter->operator = $operator;
                    if (stripos($filter->operator , 'like') !== false) {
                        $filter->value = '%'.array_shift($query).'%';
                    } else {
                        $filter->value = array_shift($query);
                    }
                } else {
                    $filter->operator = '=';
                    $filter->value = $operator;
                }
                $CI->response->meta->filter[] = $filter;
                unset($filter);
            }
        }

        $CI->response->links = new stdClass();
        $CI->response->links->self = $CI->config->config['base_url'] . 'index.php/' . $CI->response->meta->collection;
        if (!is_null($CI->response->meta->id)) {
            $CI->response->links->self .= '/' . $CI->response->meta->id;
        }
        if ($CI->response->meta->sub_resource != '') {
            $CI->response->links->self .= '/' . $CI->response->meta->sub_resource;
        }
        if ($CI->response->meta->sub_resource_id != '') {
            $CI->response->links->self .= '/' . $CI->response->meta->sub_resource_id;
        }
        $CI->response->links->first = NULL;
        $CI->response->links->last = NULL;
        $CI->response->links->next = NULL;
        $CI->response->links->prev = NULL;
        $CI->response->errors = array();
        return;
    }
}

/* End of file input_helper.php */
/* Location: ./system/application/helpers/input_helper.php */
