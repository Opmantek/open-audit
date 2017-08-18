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
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.0.6
* @link      http://www.open-audit.org
 */
if (! function_exists('from_unix_timestamp')) {
    function from_unix_timestamp($timestamp) {
        $wildcard = false;
        if (strpos($timestamp, '%') !== false) {
            $timestamp = str_replace('%', '', $timestamp);
            $wildcard = true;
        }
        if (!is_numeric($timestamp)) {
            return $timestamp;
        }
        $sql = "/* input_helper::from_unix_timestamp */ " . "SELECT FROM_UNIXTIME(" . $timestamp . ") as `timestamp`";
        $CI = & get_instance();
        $CI->response->meta->sql[] = $sql;
        $query = $CI->db->query($sql);
        $result = $query->result();
        $datetime = $result[0]->timestamp;
        $datetime = str_replace(' 00:00:00', '', $datetime);
        if ($wildcard === true) {
            $datetime = '%' . $datetime . '%';
        }
        return $datetime;
    }
}

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
        // limit = config->{'page_size'}
        // offset = 0
        // format = json
        // properties = *
        // filter = blank
        // version = 1 if JSON requested (the original), 0 if not JSON requested (the latest available)

        // Can set individual items using parameters /devices/1 == /devices?id=1 ???

        // set up our logging object
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'input_helper';
        $log->function = 'input_helper::' . strtolower(__METHOD__);
        $log->status = 'parsing input';
        $log->summary = '';
        stdlog($log);

        error_reporting(E_ALL);
        $CI = & get_instance();
        if (empty($CI->response)) {
            $CI->response = new stdClass();
        }

        # Define our constans for use in htmlspecialchars
        if (!defined('CHARSET')) {
            define('CHARSET', 'UTF-8');
            if (phpversion() >= 5.4) {
                define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);
            } else {
                define('REPLACE_FLAGS', ENT_COMPAT);
            }
        }
        
        # enable the $_GET global
        parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);

        # make sure we have the required header
        if (empty($_SERVER['HTTP_ACCEPT'])) {
            $_SERVER['HTTP_ACCEPT'] = '';
        }

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
        $CI->response->meta->group = 0;
        $CI->response->meta->groupby = '';
        $CI->response->meta->header = 'HTTP/1.1 200 OK';
        $CI->response->meta->id = null;
        $CI->response->meta->ids = 0;
        $CI->response->meta->include = '';
        if (empty($CI->config->config['page_size'])) {
            $CI->config->config['page_size'] = 1000;
        }
        $CI->response->meta->limit = intval($CI->config->config['page_size']);
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
        $CI->response->meta->sql = array();
        $CI->response->links = array();
        $CI->response->included = array();

        $actions = ' bulk_update_form collection create create_form debug delete download execute import import_form read reset sub_resource_create sub_resource_read sub_resource_create_form sub_resource_delete sub_resource_download test update update_form ';
        $action = '';

        $collections = ' agents attributes charts collectors configuration connections credentials database devices discovery discoveries errors fields files groups ldap_servers licenses locations logs networks nmis orgs queries reports roles scripts search summaries tasks users ';
        $collection = '';

        # Allow for URLs thus:
        # /api/{version}/
        # /v1/
        # /v2/
        # as well as /devices or
        # version={version} in the accept header
        # get the version
        if (!empty($CI->uri->segments[1]) and ($CI->uri->segments[1] == 'api' or $CI->uri->segments[1] == 'v1' or $CI->uri->segments[1] == 'v2')) {
            if ($CI->uri->segments[1] == 'api') {
                $CI->response->meta->version = intval($CI->uri->segment(2));
                unset($CI->uri->segments[1]);
                unset($CI->uri->segments[2]);
                $log->summary = 'Set version to ' . intval($CI->uri->segment(2)) . ', according to URI segment.';
                stdlog($log);
            } else if ($CI->uri->segments[1] == 'v1') {
                $CI->response->meta->version = 1;
                $log->summary = 'Set version to v1, according to URI segment.';
                stdlog($log);
                unset($CI->uri->segments[1]);
            } else if ($CI->uri->segments[1] == 'v2') {
                $CI->response->meta->version = 2;
                $log->summary = 'Set version to v2, according to URI segment.';
                stdlog($log);
                unset($CI->uri->segments[1]);
            }
            array_unshift($CI->uri->segments, '');
            $CI->uri->segments = array_values($CI->uri->segments);
        } else if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json;version=') !== false) {
            $CI->response->meta->version = intval(str_replace('application/json;version=', '', $_SERVER['HTTP_ACCEPT']));
            $log->summary = 'Set version to ' . $CI->response->meta->version . ', according to headers.';
            stdlog($log);
        }
        
        # get our collection - usually devices, groups, reports, etc
        $temp = $CI->uri->segment(1);
        if (isset($temp) and $temp != '' and stripos($collections, ' '.$temp. ' ') !== false) {
            $CI->response->meta->collection = (string)$temp;
            $log->summary = 'Set collection to ' . $CI->response->meta->collection . ', according to URI.';
            stdlog($log);
        } else {
            $CI->response->meta->collection = 'summaries';
            $log->summary = 'Set collection to summaries as a default.';
            stdlog($log);
        }
        $CI->response->meta->heading = ucfirst($CI->response->meta->collection);
        unset($temp);

        # get debug
        if ($CI->input->get('debug')) {
            $CI->response->meta->debug = $CI->input->get('debug');
            $log->summary = 'Set debug to ' . $CI->response->meta->debug . ', according to URI.';
            stdlog($log);
        }
        if ($CI->input->post('debug')) {
            $CI->response->meta->debug = $CI->input->post('debug');
            $log->summary = 'Set debug to ' . $CI->response->meta->debug . ', according to POST.';
            stdlog($log);
        }
        if (strtolower($CI->response->meta->debug) == 'true') {
            $CI->response->meta->debug = true;
            $CI->output->enable_profiler(true);
        } else {
            $CI->response->meta->debug = false;
            $CI->output->enable_profiler(false);
        }

        # get the id of the collection item in question
        # if we have an integer
        if ($CI->uri->segment(2) != '' and is_numeric($CI->uri->segment(2))) {
            $CI->response->meta->id = intval($CI->uri->segment(2));
            $log->summary = 'Set ID to ' . $CI->response->meta->id . ', according to URI.';
            stdlog($log);
        }

        # if we have a reserved word
        if ($CI->uri->segment(2) and stripos($actions, ' '.$CI->uri->segment(2).' ') !== false) {
            $CI->response->meta->action = $CI->uri->segment(2);
            $action = $CI->uri->segment(2);
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', according to URI.';
            stdlog($log);
        }
        if ($CI->uri->segment(3) and stripos($actions, ' '.$CI->uri->segment(3).' ') !== false) {
            $CI->response->meta->action = $CI->uri->segment(3);
            $action = $CI->uri->segment(3);
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', according to URI.';
            stdlog($log);
        }
        
        # if we have an item name (ie, not it's ID)
        if (is_null($CI->response->meta->id) and $CI->uri->segment(2) != '' and stripos($actions, ' '.$CI->uri->segment(2).' ') === false) {
            $log->summary = 'Searching for ID, using ' . $CI->uri->segment(2) . ' on the ' . $CI->response->meta->collection . ' collection.';
            stdlog($log);
            $sql = '';
            switch ($CI->response->meta->collection) {
                case 'charts':
                    $sql = '';
                    $CI->response->meta->id = 1;
                    $CI->response->meta->sub_resource = $CI->uri->segment(2);
                    break;
                case 'configuration':
                    $sql = "/* input_helper::inputRead */" . "SELECT id FROM configuration WHERE name = ?";
                    $table = 'configuration';
                    break;
                case "database":
                    $sql = '';
                    foreach ($CI->db->list_tables() as $key => $value) {
                        if ($CI->uri->segment(2) == $value) {
                            $CI->response->meta->id = $CI->uri->segment(2);
                        }
                    }
                    break;
                case 'errors':
                    $sql = '';
                    $CI->response->meta->id = $CI->uri->segment(2);
                    break;
                case 'devices':
                    $sql = "/* input_helper::inputRead */" . "SELECT id FROM system WHERE name LIKE ? ORDER BY id DESC LIMIT 1";
                    $table = 'system';
                    break;
                case 'groups':
                    $sql = "/* input_helper::inputRead */" . "SELECT id FROM groups WHERE name LIKE ? LIMIT 1";
                    $table = 'groups';
                    break;
                case 'logs':
                    $sql = '';
                    $CI->response->meta->id = 1;
                    $CI->response->meta->sub_resource = $CI->uri->segment(2);
                    break;
                case 'orgs':
                    $sql = "/* input_helper::inputRead */" . "SELECT id FROM orgs WHERE name LIKE ? LIMIT 1";
                    $table = 'orgs';
                    break;
                case 'queries':
                    $sql = "/* input_helper::inputRead */" . "SELECT id FROM queries WHERE name LIKE ? LIMIT 1";
                    $table = 'queries';
                    break;
                case 'scripts':
                    $sql = "/* input_helper::inputRead */" . "SELECT id FROM scripts WHERE name LIKE ? LIMIT 1";
                    $table = 'scripts';
                    break;
                case 'users':
                    $sql = "/* input_helper::inputRead */" . "SELECT id FROM users WHERE name LIKE ? LIMIT 1";
                    $table = 'users';
                    break;
            }
            if ($sql != '') {
                $data = array($CI->uri->segment(2));
                $query = $CI->db->query($sql, $data);
                $result = $query->result();
                if (count($result) > 0) {
                    $CI->response->meta->id = intval($result[0]->id);
                    $log->summary = 'Set id to ' . $CI->response->meta->id . ', after searching.';
                    stdlog($log);
                } else {
                    // should throw an error as we were given a name, but nothing matched
                    $CI->response->meta->id = 888888888888;
                    $log->summary = 'Set id to NULL, after searching - no match found.';
                    stdlog($log);
                }
            } else {
                $log->summary = "Set id to " . $CI->response->meta->id . ", based on the URL.";
                stdlog($log);
            }
        }

        # get the include
        if ($CI->input->get('include')) {
            $CI->response->meta->include = $CI->input->get('include');
            $log->summary = 'Set include to ' . $CI->response->meta->include . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('include')) {
            $CI->response->meta->include = $CI->input->post('include');
            $log->summary = 'Set include to ' . $CI->response->meta->include . ', according to POST.';
            stdlog($log);
        }

        # get the sub_resource
        if (empty($CI->response->meta->sub_resource)) {
            $temp = @(string)$CI->uri->segment(3, '');
            if (stripos($actions, ' '.$temp. ' ') === false and $temp != '') {
                $CI->response->meta->sub_resource = $temp;
                $log->summary = 'Set sub_resource to ' . $CI->response->meta->sub_resource . ', according to URI.';
                stdlog($log);
            }
        }
        if ($CI->input->get('sub_resource')) {
            $CI->response->meta->sub_resource = $CI->input->get('sub_resource');
            $log->summary = 'Set sub_resource to ' . $CI->response->meta->sub_resource . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('sub_resource')) {
            $CI->response->meta->sub_resource = $CI->input->post('sub_resource');
            $log->summary = 'Set sub_resource to ' . $CI->response->meta->sub_resource . ', according to POST.';
            stdlog($log);
        }
        $CI->response->meta->sub_resource = str_replace(array(',', '.', '\'', '"', '(', ')'), '', $CI->response->meta->sub_resource);

        # get the sub_resource id
        #$CI->response->meta->sub_resource_id = $CI->uri->segment(4, '');
        if (empty($CI->response->meta->sub_resource_id)) {
            if (!empty($CI->response->meta->sub_resource)) {
                $CI->response->meta->sub_resource_id = (string)$CI->uri->segment(4, '');
                $log->summary = 'Set sub_resource_id to ' . $CI->response->meta->sub_resource_id . ', according to URI.';
                stdlog($log);
            }
        }
        if ($CI->input->get('sub_resource_id')) {
            $CI->response->meta->sub_resource_id = $CI->input->get('sub_resource_id');
            $log->summary = 'Set sub_resource_id to ' . $CI->response->meta->sub_resource_id . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('sub_resource_id')) {
            $CI->response->meta->sub_resource_id = $CI->input->post('sub_resource_id');
            $log->summary = 'Set sub_resource_id to ' . $CI->response->meta->sub_resource_id . ', according to POST.';
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
            $data = urldecode(str_replace('data=', '', file_get_contents('php://input')));
            $data = json_decode($data);
            if (empty($data)) {
                $log->summary = 'Request method is PATCH but no data supplied.';
                stdlog($log);
            } else {
                $CI->response->meta->received_data = $data->data;
            }
        }
        if (!empty($CI->response->meta->received_data->id)) {
            if ($CI->response->meta->collection != 'database' and $CI->response->meta->collection != 'configuration') {
                $CI->response->meta->id = intval($CI->response->meta->received_data->id);
            }
        }

        # get the action
        # valid values are typically - create, read, update, delete, list, execute
        # TODO - request_method == post and body contains system.id, then update, not create
        if ($CI->input->get('action')) {
            $action = $CI->input->get('action');
            $log->summary = 'Set action to ' . $action . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('action')) {
            $action = $CI->input->post('action');
            $log->summary = 'Set action to ' . $action . ', according to POST.';
            stdlog($log);
        }



        if ($REQUEST_METHOD == 'GET' and is_null($CI->response->meta->id) and $action == '') {
            // return a list of items
            $CI->response->meta->action = 'collection';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, no id, no action.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and is_null($CI->response->meta->id) and $action == 'reset') {
            $CI->response->meta->action = 'reset';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, no id, action = reset.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and is_null($CI->response->meta->id) and $action == 'create') {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'create_form';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, no id and action = create.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and $action == 'create' and $CI->response->meta->sub_resource != '' and empty($CI->response->meta->sub_resource_id)) {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'sub_resource_create_form';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, sub_resource, not sub_resource_id and action = create.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and $action == 'sub_resource_read' and $CI->response->meta->sub_resource != '') {
            // return the sub_resource
            $CI->response->meta->action = 'sub_resource_read';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, sub_resource and action = sub_resource_read.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and $action == 'download' and $CI->response->meta->sub_resource != '' and !empty($CI->response->meta->sub_resource_id)) {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'sub_resource_download';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, sub_resource, sub_resource_id and action = download.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and is_null($CI->response->meta->id) and $action == 'import') {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'import_form';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, no id and action = import.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and !is_null($CI->response->meta->id) and $action == '') {
            // return a single item
            $CI->response->meta->action = 'read';
            if ($CI->response->meta->collection != 'database' and $CI->response->meta->collection != 'errors') {
                $CI->response->meta->id = intval($CI->response->meta->id);
            }
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, id and no action.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and !is_null($CI->response->meta->id) and $action == 'test') {
            // test a single item
            $CI->response->meta->action = 'test';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, id and action = test.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and !is_null($CI->response->meta->id) and $action == 'update' and empty($CI->response->meta->ids)) {
            // show a HTML form for updating an existing item
            $CI->response->meta->action = 'update_form';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, id and action = ' . $action . '.';
            stdlog($log);
        }
        // Special case for the database endpoint
        if ($REQUEST_METHOD == 'GET' and $action == 'update' and $CI->response->meta->collection == 'database') {
            // show a HTML form for updating an existing item
            $CI->response->meta->action = 'update_form';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, collection = database and action = ' . $action . '.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and $action == 'execute' and $CI->response->meta->collection == 'database' and $CI->response->meta->sub_resource != '') {
            // show a HTML form for updating an existing item
            $CI->response->meta->action = 'execute';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, collection = database and action = ' . $action . '.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and !is_null($CI->response->meta->id) and $action == 'execute') {
            // Execute the discovery / report / etc
            $CI->response->meta->action = 'execute';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, id and action = ' . $action . '.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and is_null($CI->response->meta->id)  and $action == 'update' and !empty($CI->response->meta->ids)) {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'bulk_update_form';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, ids, no id and action = update.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'GET' and !is_null($CI->response->meta->id) and $action == 'download' and empty($CI->response->meta->sub_resource)) {
            // mainly used for running a report and displaying the output
            $CI->response->meta->action = 'download';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because GET, id and action = download.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'POST' and is_null($CI->response->meta->id) and $action == '' and $CI->response->meta->received_data != '') {
            // insert an item
            $CI->response->meta->action = 'create';
            $CI->response->meta->header = 'HTTP/1.1 201 Created';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because POST, data, no id and no action.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'POST' and is_null($CI->response->meta->id) and $action == '' and $CI->response->meta->received_data == '') {
            // insert an item
            $CI->response->meta->action = 'collection';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because POST, no id, no data and no action.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'POST' and is_null($CI->response->meta->id) and $action == 'import') {
            // insert an item
            $CI->response->meta->action = 'import';
            $CI->response->meta->header = 'HTTP/1.1 201 Created';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because POST, no id and action = import.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'POST' and is_null($CI->response->meta->id) and $action == 'update' and !empty($CI->response->meta->ids)) {
            $CI->response->meta->action = 'update';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because POST, ids, no id and action = update.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'POST' and is_null($CI->response->meta->id) and $action == 'update' and $CI->response->meta->collection == 'database') {
            $CI->response->meta->action = 'update';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because POST, no id, collection is database and action = update.';
            stdlog($log);
        }
        #if (($REQUEST_METHOD == 'POST' or $REQUEST_METHOD == 'PUT' or$REQUEST_METHOD == 'PATCH') and !is_null($CI->response->meta->id) and $action == '') {
        if (($REQUEST_METHOD == 'PUT' or $REQUEST_METHOD == 'PATCH') and !is_null($CI->response->meta->id) and $action == '') {
            // update an item
            $CI->response->meta->action = 'update';
            $CI->response->meta->header = 'HTTP/1.1 200 OK';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because POST/PATCH/PUT, id and no action.';
            stdlog($log);
        }

        if ($REQUEST_METHOD == 'PATCH' and !empty($CI->response->meta->ids)) {
            // update several items
            $CI->response->meta->action = 'update';
            $CI->response->meta->header = 'HTTP/1.1 200 OK';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because PATCH, ids and no id.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'POST' and (!is_null($CI->response->meta->id) or $CI->response->meta->ids != '') and $CI->response->meta->sub_resource != '') {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'sub_resource_create';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because POST, id, sub_resource.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'DELETE' and !is_null($CI->response->meta->id) and $CI->response->meta->sub_resource == '') {
            // delete an item
            $CI->response->meta->action = 'delete';
            $CI->response->meta->header = 'HTTP/1.1 200 OK';
            if ($CI->response->meta->collection != 'database') {
                $CI->response->meta->id = intval($CI->response->meta->id);
            }
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because DELETE, id.';
            stdlog($log);
        }
        if ($REQUEST_METHOD == 'DELETE' and !is_null($CI->response->meta->id) and $CI->response->meta->sub_resource != '' and $CI->response->meta->sub_resource_id != '') {
            // delete an item
            $CI->response->meta->action = 'sub_resource_delete';
            $CI->response->meta->header = 'HTTP/1.1 200 OK';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because DELETE, id, sub_resource, sub_resource_id.';
            stdlog($log);
        }
        if ($CI->response->meta->action == '') {
            $CI->response->meta->action = 'collection';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', no action.';
            stdlog($log);
        }
        if (stripos($actions, ' '.$CI->response->meta->action.' ') === false) {
            $CI->response->meta->action = 'collection';
            $log->summary = 'Set action to ' . $CI->response->meta->action . ', because not in reserved words.';
            stdlog($log);
        }

        # get the sort
        $CI->response->meta->sort = $CI->input->get('sort');
        if ($CI->input->post('sort')) {
            $CI->response->meta->sort = $CI->input->post('sort');
            $log->summary = 'Set sort to ' . $CI->response->meta->sort . ', according to POST.';
            stdlog($log);
        }
        $CI->response->meta->sort = str_replace('+', '', $CI->response->meta->sort);
        if ($CI->response->meta->sort != '') {
            $temp = explode(',', $CI->response->meta->sort);
            unset($item);
            foreach ($temp as &$item) {
                if (substr($item, 0, 1) == '-') {
                    $item = substr($item, 1) . ' DESC';
                }
            }
            unset($item);
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
            $log->summary = 'Set current to ' . $CI->response->meta->current . ', according to POST.';
            stdlog($log);
        }
        $current_words = ' y n all delta full ';
        if (stripos($current_words, ' '.$CI->response->meta->current.' ') === false) {
            $CI->response->meta->current = 'y';
            $log->summary = 'Set current to ' . $CI->response->meta->current . ', because in reserved words.';
            stdlog($log);
        }
        unset($current_words);

        # get the group by
        if ($CI->input->get('groupby')) {
            $CI->response->meta->groupby = $_GET['groupby'];
            $log->summary = 'Set groupby to ' . $CI->response->meta->groupby . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('groupby')) {
            $CI->response->meta->groupby = $_POST['groupby'];
            $log->summary = 'Set groupby to ' . $CI->response->meta->groupby . ', according to POST.';
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
            $log->summary = 'Set format to ' . $CI->response->meta->format . ', according to HEADERS.';
            stdlog($log);
        }
        if (strpos($_SERVER['HTTP_ACCEPT'], 'html') !== false) {
            $CI->response->meta->format = 'screen';
            $log->summary = 'Set format to ' . $CI->response->meta->format . ', according to HEADERS.';
            stdlog($log);
        }
        if (isset($_GET['format'])) {
            $CI->response->meta->format = $_GET['format'];
            $log->summary = 'Set format to ' . $CI->response->meta->format . ', according to GET.';
            stdlog($log);
        }
        if (isset($_POST['format'])) {
            $CI->response->meta->format = $_POST['format'];
            $log->summary = 'Set format to ' . $CI->response->meta->format . ', according to POST.';
            stdlog($log);
        }
        if ($CI->response->meta->format == '') {
            $CI->response->meta->format = 'json';
            $log->summary = 'Set format to ' . $CI->response->meta->format . ', because default.';
            stdlog($log);
        }
        $reserved_words = ' json json_data html screen xml csv sql table ';
        if (stripos($reserved_words, ' '.$CI->response->meta->format.' ') === false) {
            $log->summary = 'Set format to json, because unknown format provided.';
            $CI->response->meta->format = 'json';
        }

        # get the limit
        // if ($CI->response->meta->format != 'screen') {
        //     $CI->response->meta->limit = '';
        //     $log->summary = 'Set limit to ' . $CI->response->meta->limit . ', because not screen.';
        //     stdlog($log);
        // } else {
        //     $CI->response->meta->limit = 1000;
        //     $log->summary = 'Set limit to ' . $CI->response->meta->limit . ', because for screen.';
        //     stdlog($log);
        // }
        if (isset($_GET['limit'])) {
            $CI->response->meta->limit = intval($_GET['limit']);
            $log->summary = 'Set limit to ' . $CI->response->meta->limit . ', according to GET.';
            stdlog($log);
        }
        if (isset($_POST['limit'])) {
            $CI->response->meta->limit = intval($_POST['limit']);
            $log->summary = 'Set limit to ' . $CI->response->meta->limit . ', according to POST.';
            stdlog($log);
        }

        # get the offset
        if (isset($_GET['offset'])) {
            $CI->response->meta->offset = intval($_GET['offset']);
            $log->summary = 'Set offset to ' . $CI->response->meta->offset . ', according to GET.';
            stdlog($log);
        }
        if (isset($_POST['offset'])) {
            $CI->response->meta->offset = intval($_POST['offset']);
            $log->summary = 'Set offset to ' . $CI->response->meta->offset . ', according to POST.';
            stdlog($log);
        }

        # get the group
        if (isset($_GET['group'])) {
            $CI->response->meta->group = intval($_GET['group']);
            $log->summary = 'Set group to ' . $CI->response->meta->group . ', according to GET.';
            stdlog($log);
        }
        if (isset($_POST['group'])) {
            $CI->response->meta->group = intval($_POST['group']);
            $log->summary = 'Set group to ' . $CI->response->meta->group . ', according to POST.';
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
            $log->summary = 'Set properties to ' . $CI->response->meta->properties . ', according to GET.';
            stdlog($log);
        }
        if (isset($_POST['properties'])) {
            $CI->response->meta->properties = $_POST['properties'];
            $log->summary = 'Set properties to ' . $CI->response->meta->properties . ', according to POST.';
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
            $log->summary = 'Set properties to ' . $CI->response->meta->properties . ', secondary format.';
            stdlog($log);
        }

        if ($CI->response->meta->properties == '') {
            # set some defaults
            if ($CI->response->meta->action == 'collection' and $CI->response->meta->collection == 'devices') {
                # we're requesting a list of devices without properties - set the below as defaults
                if ($CI->response->meta->sub_resource == '' or strtolower($CI->response->meta->sub_resource) == 'system') {
                    $CI->response->meta->properties = 'system.id, system.icon, system.type, system.name, system.domain, system.ip, system.description, system.manufacturer, system.os_family, system.status';
                    $log->summary = 'Set properties to ' . $CI->response->meta->properties . ', because devices default.';
                    stdlog($log);
                } else {
                    # we're requesting a subresource - return all the subresource's properties
                    $CI->response->meta->properties = $CI->response->meta->sub_resource . '.*';
                    $log->summary = 'Set properties to ' . $CI->response->meta->properties . ', because devices sub_resource default.';
                    stdlog($log);
                }
            } else {
                # we're requesting something that isn't a device (or a list of devices) - return everything
                $CI->response->meta->properties = '*';
                $log->summary = 'Set properties to ' . $CI->response->meta->properties . ', because non-devices default.';
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
            $reserved_words = ' group properties limit sub_resource sub_resource_id action sort current offset format debug groupby query include ids graph report_name as_at ';
            foreach (explode('&', urldecode($_SERVER['QUERY_STRING'])) as $item) {
                $query = new stdClass();
                $query->name = substr($item, 0, strpos($item, '='));
                $query->operator = '=';
                $query->value = str_replace($query->name.'=', '', $item);

                if (strtolower($query->name) == 'as_at') {
                    $CI->response->meta->internal->as_at = $query->value;
                    $CI->response->meta->current = 'all';
                }

                if (strtolower(substr($query->value, 0, 8)) == 'not like') {
                    $query->value = '%' . substr($query->value, 8) . '%';
                    $query->operator = 'not like';
                }

                if (strtolower(substr($query->value, 0, 5)) == '!like') {
                    $query->value = '%' . substr($query->value, 5) . '%';
                    $query->operator = 'not like';
                }

                $operator = substr($query->value, 0, 4);
                if (strtolower($operator) == 'like') {
                    $query->value = '%' . substr($query->value, 4) . '%';
                    $query->operator = $operator;
                }

                $operator = substr($query->value, 0, 2);
                $test = substr($query->value, 0, 4);
                if ($operator == 'in' and $test != 'info') {
                    $temp_value = substr($query->value, 2);
                    $temp_value = str_replace(",", "','", $temp_value);
                    $query->value = "('" . $temp_value . "')";
                    $query->operator = $operator;
                }

                $operator = substr($query->value, 0, 2);
                if ($operator == '!=' or $operator == '>=' or $operator == '<=') {
                    $query->value = substr($query->value, 2);
                    $query->operator = $operator;
                }

                $operator = substr($query->value, 0, 1);
                if ($operator == '=' or $operator == '>' or $operator == '<') {
                    $query->value = substr($query->value, 1);
                    $query->operator = $operator;
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

        # Accept first_seen, last_seen, edited_date and timestamp as numeric unix_timestamp's and convert them to a local timestamp string
        foreach ($CI->response->meta->filter as $filter) {
            $item = substr($filter->name, strpos($filter->name, '.')+1);
            $value = str_replace('%', '', $filter->value);
            if (($item === 'first_seen' or $item === 'last_seen' or $item === 'when' or $item === 'edited_date' or $item === 'timestamp') and is_numeric($value)) {
                $filter->value = from_unix_timestamp($filter->value);
            }
        }

        if ($query = json_decode($CI->input->get('query'))) {
            unset($CI->response->meta->filter);
            $CI->response->meta->filter = array();
            while (count($query) > 0) {
                $filter = new stdClass();
                $filter->name = array_shift($query);
                $operator = array_shift($query);
                if (stripos(' = != > >= < <= not like ', ' '.$operator.' ') !== false) {
                    $filter->operator = $operator;
                    if (stripos($filter->operator, 'like') !== false) {
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
        $CI->response->links->first = null;
        $CI->response->links->last = null;
        $CI->response->links->next = null;
        $CI->response->links->prev = null;
        $CI->response->errors = array();

        $permission['bulk_update_form'] = 'c';
        $permission['collection'] = 'r';
        $permission['create'] = 'c';
        $permission['create_form'] = 'c';
        $permission['delete'] = 'd';
        $permission['download'] = 'r';
        if ($CI->response->meta->collection == 'database' or $CI->response->meta->collection == 'discoveries') {
            $permission['execute'] = 'u';
        } else {
            $permission['execute'] = 'r';
        }
        $permission['import'] = 'c';
        $permission['import_form'] = 'c';
        $permission['read'] = 'r';
        $permission['reset'] = 'd';
        $permission['sub_resource_create'] = 'c';
        $permission['sub_resource_create_form'] = 'c';
        $permission['sub_resource_delete'] = 'd';
        $permission['sub_resource_download'] = 'r';
        $permission['sub_resource_read'] = 'r';
        $permission['test'] = 'u';
        $permission['update'] = 'u';
        $permission['update_form'] = 'u';
        $permission['unknown'] = 'unknown action';

        if (empty($CI->response->meta->action)) {
            $log->severity = 5;
            $log->summary = 'No action determined, setting to collection.';
            stdlog($log);
            $CI->response->meta->action = 'collection';
        }

        if (empty($permission[$CI->response->meta->action])) {
            $log->severity = 5;
            $log->summary = 'No permission determined for '  . $CI->response->meta->action;
            stdlog($log);
            $CI->response->meta->action = 'unknown';
        }

        if (empty($CI->roles) and $CI->config->config['internal_version'] >= 20160904) {
            $CI->load->model('m_roles');
            $CI->roles = $CI->m_roles->collection();
        }
        if ($CI->config->config['internal_version'] >= 20160904) {
            $CI->load->model('m_users');
            if ((!$CI->m_users->get_user_permission($CI->user->id, $CI->response->meta->collection, $permission[$CI->response->meta->action]) and $CI->response->meta->collection != 'errors')) {
                log_error('ERR-0015', $CI->response->meta->collection . ':' . $permission[$CI->response->meta->action]);
                //output();
                $CI->session->set_flashdata('error', $CI->response->errors[0]->detail);
                if ($CI->m_users->get_user_permission($CI->user->id, $CI->response->meta->collection, 'r')) {
                    redirect($CI->response->meta->collection);
                } else {
                    if ($CI->response->meta->collection == 'summaries' and $CI->response->meta->action == 'collection') {
                        $CI->session->unset_userdata('user_id');
                        $CI->session->set_flashdata('error', 'User cannot run summaries::collection.');
                        redirect('logon');
                    } else {
                        redirect('summaries');
                    }
                }
            }
        }

        if (empty($CI->user->orgs)) {
            $CI->session->unset_userdata('user_id');
            $CI->session->set_flashdata('error', 'User has no permissions on any orgs.');
            redirect('logon');
        }

        if ($CI->config->config['internal_version'] < $CI->config->config['web_internal_version'] and $CI->response->meta->collection != 'database') {
            redirect('database?action=update');
        }

        if (!empty($CI->response->meta->id) and $CI->response->meta->id != 888888888888 and
            $CI->response->meta->collection != 'charts' and
            $CI->response->meta->collection != 'configuration' and
            $CI->response->meta->collection != 'database' and
            $CI->response->meta->collection != 'errors' and
            $CI->response->meta->collection != 'ldap_servers' and
            $CI->response->meta->collection != 'logs' and
            $CI->response->meta->collection != 'report' and
            $CI->response->meta->collection != 'roles') {
            if (! $CI->m_users->get_user_collection_org_permission($CI->response->meta->collection, $CI->response->meta->id)) {
                if ($CI->response->meta->format == 'json') {
                    echo json_encode($CI->response);
                } else {
                    $CI->session->set_flashdata('error', $CI->response->errors[0]->detail);
                    redirect($CI->response->meta->collection);
                }
                exit();
            }
            // check (if we're supplying data) that the OrgID is one we're allowed to supply
            if ($CI->response->meta->action == 'create' or $CI->response->meta->action == 'update' or $CI->response->meta->action == 'import') {
                $temp = explode(',', $CI->user->org_list);
                // org_id
                if (!empty($CI->meta->received_data->org_id)) {
                    $allowed = false;
                    foreach ($temp as $key => $value) {
                        if ($CI->meta->received_data->org_id == $value) {
                            $allowed = true;
                        }
                    }
                    if (!$allowed) {
                        log_error('ERR-0018', $CI->response->meta->collection . ':' . $CI->response->meta->action);
                        output();
                        exit();
                    }
                }
                // devices_assigned_to_org
                if (!empty($CI->meta->received_data->devices_assigned_to_org)) {
                    $allowed = false;
                    foreach ($temp as $key => $value) {
                        if ($CI->meta->received_data->devices_assigned_to_org == $value) {
                            $allowed = true;
                        }
                    }
                    if (!$allowed) {
                        log_error('ERR-0018', $CI->response->meta->collection . ':' . $CI->response->meta->action);
                        output();
                        exit();
                    }
                }
                unset($temp);
            }
        }
        #echo "<pre>\n"; print_r(json_encode($CI->response)); exit();
    }
}
/* End of file input_helper.php */
/* Location: ./system/application/helpers/input_helper.php */
